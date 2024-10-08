<?php

/**
 * Copyright © OXID eSales AG. All rights reserved.
 * See LICENSE file for license details.
 */

namespace OxidEsales\EshopCommunity\Core;

use OxidEsales\Eshop\Core\Exception\ExceptionToDisplay;
use OxidEsales\EshopCommunity\Internal\Framework\FileSystem\Bridge\MasterImageHandlerBridgeInterface;
use OxidEsales\Facts\Facts;
use OxidEsales\Eshop\Core\Registry;
use Symfony\Component\Filesystem\Path;

/**
 * Including pictures generator functions file
 */
require_once __DIR__ . "/utils/oxpicgenerator.php";

class UtilsPic extends \OxidEsales\Eshop\Core\Base
{
    /**
     * Image types 'enum'
     *
     * @var array
     */
    protected $_aImageTypes = ["GIF" => IMAGETYPE_GIF, "JPG" => IMAGETYPE_JPEG, "PNG" => IMAGETYPE_PNG, "JPEG" => IMAGETYPE_JPEG];

    /**
     * Resizes image to desired width and height, returns true on success.
     *
     * @param string $sSrc           Source of image file
     * @param string $sTarget        Target to write resized image file
     * @param mixed  $iDesiredWidth  Width of resized image
     * @param mixed  $iDesiredHeight Height of resized image
     *
     * @return bool
     */
    public function resizeImage($sSrc, $sTarget, $iDesiredWidth, $iDesiredHeight)
    {
        if (file_exists($sSrc) && ($aImageInfo = @getimagesize($sSrc))) {
            $myConfig = Registry::getConfig();
            list($iWidth, $iHeight) = calcImageSize($iDesiredWidth, $iDesiredHeight, $aImageInfo[0], $aImageInfo[1]);

            return $this->resize($aImageInfo, $sSrc, null, $sTarget, $iWidth, $iHeight, getGdVersion(), $myConfig->getConfigParam('blDisableTouch'), $myConfig->getConfigParam('sDefaultImageQuality'));
        }

        return false;
    }

    /**
     * deletes the given picutre and checks before if the picture is deletable
     *
     * @param string $sPicName        Name of picture file
     * @param string $sAbsDynImageDir the absolute image diectory, where to delete the given image ($myConfig->getPictureDir(false))
     * @param string $sTable          in which table
     * @param string $sField          table field value
     *
     * @return bool
     */
    public function safePictureDelete($sPicName, $sAbsDynImageDir, $sTable, $sField)
    {
        $blDelete = false;
        if ($this->isPicDeletable($sPicName, $sTable, $sField)) {
            $blDelete = $this->deletePicture($sPicName, $sAbsDynImageDir);
        }

        return $blDelete;
    }

    /**
     * @param $filename
     * @param $masterImagePath
     * @return bool
     */
    protected function deletePicture($filename, $masterImagePath)
    {
        if ($this->isPlaceholderImage($filename) || Registry::getConfig()->isDemoShop()) {
            return false;
        }
        $removed = $this->removeMasterFile(Path::join($masterImagePath, $filename));

        if (!Registry::getConfig()->getConfigParam('sAltImageUrl')) {
            $generatedImagePath = str_replace('/master/', '/generated/', $masterImagePath);
            $files = glob("{$generatedImagePath}*/{$filename}");
            if (\is_array($files)) {
                foreach ($files as $file) {
                    $removed = unlink($file);
                }
            }
        }
        return $removed;
    }

    /**
     * Checks if current picture file is used in more than one table entry, returns
     * true if one, false if more than one.
     *
     * @param string $filename Name of picture file
     * @param string $tabl   in which table
     * @param string $field   table field value
     *
     * @return bool
     */
    protected function isPicDeletable($filename, $tabl, $field)
    {
        if (!$filename || $this->isPlaceholderImage($filename)) {
            return false;
        }
        $usageCount = $this->fetchIsImageDeletable($filename, $tabl, $field);
        return $usageCount <= 1;
    }

    /**
     * Fetch the information, if the given image is deletable from the database.
     *
     * @param string $sPicName Name of image file.
     * @param string $sTable   The table in which we search for the image.
     * @param string $sField   The value of the table field.
     *
     * @return mixed
     */
    protected function fetchIsImageDeletable($sPicName, $sTable, $sField)
    {
        // We force reading from master to prevent issues with slow replications or open transactions (see ESDEV-3804).
        $masterDb = \OxidEsales\Eshop\Core\DatabaseProvider::getMaster();

        $query = "SELECT count(*) FROM $sTable WHERE $sField = :picturename group by $sField ";

        return $masterDb->getOne($query, [
            ':picturename' => (string) $sPicName
        ]);
    }

    /**
     * Deletes picture if new is uploaded or changed
     *
     * @param object $oObject         in whitch obejct search for old values
     * @param string $sPicTable       pictures table
     * @param string $sPicField       where picture are stored
     * @param string $sPicType        how does it call in $_FILE array
     * @param string $sPicDir         directory of pic
     * @param array  $aParams         new input text array
     * @param string $sAbsDynImageDir the absolute image diectory, where to delete the given image ($myConfig->getPictureDir(false))
     *
     * @return null
     */
    public function overwritePic($oObject, $sPicTable, $sPicField, $sPicType, $sPicDir, $aParams, $sAbsDynImageDir)
    {
        $sPic = $sPicTable . '__' . $sPicField;
        if (
            isset($oObject->{$sPic}) &&
            ($_FILES['myfile']['size'][$sPicType . '@' . $sPic] > 0 || $aParams[$sPic] != $oObject->{$sPic}->value)
        ) {
            $sImgDir = $sAbsDynImageDir . Registry::getUtilsFile()->getImageDirByType($sPicType);
            return $this->safePictureDelete($oObject->{$sPic}->value, $sImgDir, $sPicTable, $sPicField);
        }

        return false;
    }

    /**
     * Resizes and saves GIF image. This method was separated due to GIF transparency problems.
     *
     * @param string $sSrc            image file
     * @param string $sTarget         destination file
     * @param int    $iNewWidth       new width
     * @param int    $iNewHeight      new height
     * @param int    $iOriginalWidth  original width
     * @param int    $iOriginalHeigth original height
     * @param int    $iGDVer          GD packet version @deprecated
     * @param bool   $blDisableTouch  false if "touch()" should be called
     *
     * @return bool
     */
    protected function resizeGif($sSrc, $sTarget, $iNewWidth, $iNewHeight, $iOriginalWidth, $iOriginalHeigth, $iGDVer, $blDisableTouch)
    {
        return resizeGif($sSrc, $sTarget, $iNewWidth, $iNewHeight, $iOriginalWidth, $iOriginalHeigth, $iGDVer, $blDisableTouch);
    }

    /**
     * type dependant image resizing
     *
     * @param array  $aImageInfo        Contains information on image's type / width / height
     * @param string $sSrc              source image
     * @param string $hDestinationImage Destination Image
     * @param string $sTarget           Resized Image target
     * @param int    $iNewWidth         Resized Image's width
     * @param int    $iNewHeight        Resized Image's height
     * @param mixed  $iGdVer            used GDVersion, if null or false returns false @deprecated
     * @param bool   $blDisableTouch    false if "touch()" should be called for gif resizing
     * @param string $iDefQuality       quality for "imagejpeg" function
     *
     * @return bool
     */
    protected function resize($aImageInfo, $sSrc, $hDestinationImage, $sTarget, $iNewWidth, $iNewHeight, $iGdVer, $blDisableTouch, $iDefQuality)
    {
        startProfile("PICTURE_RESIZE");

        $blSuccess = false;
        switch ($aImageInfo[2]) { //Image type
            case ($this->_aImageTypes["GIF"]):
                //php does not process gifs until 7th July 2004 (see lzh licensing)
                if (function_exists("imagegif")) {
                    $blSuccess = resizeGif($sSrc, $sTarget, $iNewWidth, $iNewHeight, $aImageInfo[0], $aImageInfo[1], $iGdVer);
                }
                break;
            case ($this->_aImageTypes["JPEG"]):
            case ($this->_aImageTypes["JPG"]):
                $blSuccess = resizeJpeg($sSrc, $sTarget, $iNewWidth, $iNewHeight, $aImageInfo, $iGdVer, $hDestinationImage, $iDefQuality);
                break;
            case ($this->_aImageTypes["PNG"]):
                $blSuccess = resizePng($sSrc, $sTarget, $iNewWidth, $iNewHeight, $aImageInfo, $iGdVer, $hDestinationImage);
                break;
        }

        if ($blSuccess && !$blDisableTouch) {
            @touch($sTarget);
        }

        stopProfile("PICTURE_RESIZE");

        return $blSuccess;
    }

    /**
     * create and copy the resized image
     *
     * @param string $sDestinationImage file + path of destination
     * @param string $sSourceImage      file + path of source
     * @param int    $iNewWidth         new width of the image
     * @param int    $iNewHeight        new height of the image
     * @param array  $aImageInfo        additional info
     * @param string $sTarget           target file path
     * @param int    $iGdVer            used gd version @deprecated
     * @param bool   $blDisableTouch    wether Touch() should be called or not
     *
     * @return null
     */
    protected function copyAlteredImage($sDestinationImage, $sSourceImage, $iNewWidth, $iNewHeight, $aImageInfo, $sTarget, $iGdVer, $blDisableTouch)
    {
        $blSuccess = copyAlteredImage($sDestinationImage, $sSourceImage, $iNewWidth, $iNewHeight, $aImageInfo, $sTarget, $iGdVer);
        if (!$blDisableTouch && $blSuccess) {
            @touch($sTarget);
        }

        return $blSuccess;
    }

    /**
     * @param string $filename
     * @return bool
     */
    private function isPlaceholderImage(string $filename): bool
    {
        return strpos($filename, 'nopic.jpg') !== false || strpos($filename, 'nopic_ico.jpg') !== false;
    }

    /**
     * @param string $filepath
     * @return bool
     */
    private function removeMasterFile(string $filepath): bool
    {
        $removed = false;
        try {
            $filepath = $this->makePathRelativeToShopSource($filepath);
            if ($this->getContainer()->get(MasterImageHandlerBridgeInterface::class)->exists($filepath)) {
                $this->getContainer()->get(MasterImageHandlerBridgeInterface::class)->remove($filepath);
                $removed = true;
            }
        } catch (\Throwable $exception) {
            $ex = oxNew(ExceptionToDisplay::class);
            $ex->setMessage($exception->getMessage());
            Registry::getUtilsView()->addErrorToDisplay($ex, false);
        }
        return $removed;
    }

    /**
     * @param string $path
     * @return string
     */
    private function makePathRelativeToShopSource(string $path): string
    {
        return Path::makeRelative($path, (new Facts())->getSourcePath());
    }
}
