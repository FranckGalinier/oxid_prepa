<?php

/**
 * Copyright © OXID eSales AG. All rights reserved.
 * See LICENSE file for license details.
 */
error_reporting(E_ALL & ~E_DEPRECATED);

require_once dirname(__FILE__) . "/bootstrap.php";

/**
 * Redirect to Setup, if shop is not configured
 */
redirectIfShopNotConfigured();

//Starts the shop
OxidEsales\EshopCommunity\Core\Oxid::run();
