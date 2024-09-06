<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* @__main__/wrapping_main.html.twig */
class __TwigTemplate_f286f23115e5a7f191d8796930f55b7a extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'admin_wrapping_main_form' => [$this, 'block_admin_wrapping_main_form'],
            'admin_wrapping_main_picture' => [$this, 'block_admin_wrapping_main_picture'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        $this->loadTemplate("@__main__/headitem.html.twig", "@__main__/wrapping_main.html.twig", 1)->display(twig_array_merge($context, ["title" => $this->extensions['OxidEsales\Twig\Extensions\Filters\TranslateExtension']->translate("WRAPPING_MAIN_TITLE")]));
        // line 2
        echo "
<span class=\"popUpStyle\" id=\"wrapping_new\" style=\"position: absolute;visibility: hidden;\">Neue Geschenkverpackung/Grusskarte</span>

<script type=\"text/javascript\">
<!--
function DeletePic( sField )
{
    var oForm = document.getElementById(\"myedit\");
    document.getElementById(sField).value=\"\";
    oForm.fnc.value='save';
    oForm.submit();
}
//-->
</script>

";
        // line 17
        if (($context["readonly"] ?? null)) {
            // line 18
            echo "    ";
            $context["readonly"] = "readonly disabled";
        } else {
            // line 20
            echo "    ";
            $context["readonly"] = "";
        }
        // line 22
        echo "
<form name=\"transfer\" id=\"transfer\" action=\"";
        // line 23
        echo twig_get_attribute($this->env, $this->source, ($context["oViewConf"] ?? null), "getSelfLink", [], "method", false, false, false, 23);
        echo "\" method=\"post\">
    ";
        // line 24
        echo twig_get_attribute($this->env, $this->source, ($context["oViewConf"] ?? null), "getHiddenSid", [], "method", false, false, false, 24);
        echo "
    <input type=\"hidden\" name=\"oxid\" value=\"";
        // line 25
        echo twig_escape_filter($this->env, ($context["oxid"] ?? null), "html", null, true);
        echo "\">
    <input type=\"hidden\" name=\"cl\" value=\"wrapping_main\">
    <input type=\"hidden\" name=\"editlanguage\" value=\"";
        // line 27
        echo twig_escape_filter($this->env, ($context["editlanguage"] ?? null), "html", null, true);
        echo "\">
</form>


<form name=\"myedit\" id=\"myedit\" enctype=\"multipart/form-data\" action=\"";
        // line 31
        echo twig_get_attribute($this->env, $this->source, ($context["oViewConf"] ?? null), "getSelfLink", [], "method", false, false, false, 31);
        echo "\" method=\"post\">
<input type=\"hidden\" name=\"MAX_FILE_SIZE\" value=\"";
        // line 32
        echo twig_escape_filter($this->env, ($context["iMaxUploadFileSize"] ?? null), "html", null, true);
        echo "\">
";
        // line 33
        echo twig_get_attribute($this->env, $this->source, ($context["oViewConf"] ?? null), "getHiddenSid", [], "method", false, false, false, 33);
        echo "
<input type=\"hidden\" name=\"cl\" value=\"wrapping_main\">
<input type=\"hidden\" name=\"fnc\" value=\"\">
<input type=\"hidden\" name=\"oxid\" value=\"";
        // line 36
        echo twig_escape_filter($this->env, ($context["oxid"] ?? null), "html", null, true);
        echo "\">
<input type=\"hidden\" name=\"editval[oxwrapping__oxid]\" value=\"";
        // line 37
        echo twig_escape_filter($this->env, ($context["oxid"] ?? null), "html", null, true);
        echo "\">

";
        // line 39
        if (twig_get_attribute($this->env, $this->source, ($context["oViewConf"] ?? null), "isAltImageServerConfigured", [], "method", false, false, false, 39)) {
            // line 40
            echo "    <div class=\"warning\">";
            echo $this->extensions['OxidEsales\Twig\Extensions\TranslateExtension']->translate(["ident" => "ALTERNATIVE_IMAGE_SERVER_NOTE"]);
            echo " ";
            $this->loadTemplate("@__main__/inputhelp.html.twig", "@__main__/wrapping_main.html.twig", 40)->display(twig_array_merge($context, ["sHelpId" => $this->extensions['OxidEsales\Twig\Extensions\InputHelpExtension']->getHelpId("HELP_ALTERNATIVE_IMAGE_SERVER_NOTE"), "sHelpText" => $this->extensions['OxidEsales\Twig\Extensions\InputHelpExtension']->getHelpText("HELP_ALTERNATIVE_IMAGE_SERVER_NOTE")]));
            echo "</div>
";
        }
        // line 42
        echo "
<table cellspacing=\"0\" cellpadding=\"0\" border=\"0\" width=\"98%\">
<tr>
    <td valign=\"top\" class=\"edittext\">

        <table cellspacing=\"0\" cellpadding=\"0\" border=\"0\">
        ";
        // line 48
        $this->displayBlock('admin_wrapping_main_form', $context, $blocks);
        // line 112
        echo "        ";
        if ((($context["oxid"] ?? null) != "-1")) {
            // line 113
            echo "        <tr>
            <td class=\"edittext\">
            </td>
            <td class=\"edittext\" colspan=\"2\"><br>
                ";
            // line 117
            $this->loadTemplate("@__main__/language_edit.html.twig", "@__main__/wrapping_main.html.twig", 117)->display($context);
            // line 118
            echo "            </td>
        </tr>
        ";
        }
        // line 121
        echo "        <tr>
            <td class=\"edittext\">
            </td>
            <td class=\"edittext\" colspan=\"2\"><br>
            <input type=\"submit\" class=\"edittext\" name=\"save\" value=\"";
        // line 125
        echo $this->extensions['OxidEsales\Twig\Extensions\TranslateExtension']->translate(["ident" => "GENERAL_SAVE"]);
        echo "\" onClick=\"Javascript:document.myedit.fnc.value='save'\" ";
        echo twig_escape_filter($this->env, ($context["readonly"] ?? null), "html", null, true);
        echo ">
            </td>
        </tr>
        </table>
    </td>
    <td width=\"35\">
    <img src=\"";
        // line 131
        echo twig_get_attribute($this->env, $this->source, ($context["oViewConf"] ?? null), "getImageUrl", [], "method", false, false, false, 131);
        echo "/grayline_vert.gif\" width=\"2\" height=\"270\" alt=\"\" border=\"0\">
    </td>
    <!-- Anfang rechte Seite -->
    <td valign=\"top\" class=\"edittext\" align=\"left\" width=\"50%\">
        ";
        // line 135
        $this->displayBlock('admin_wrapping_main_picture', $context, $blocks);
        // line 143
        echo "    </td>
    </tr>
</table>

</form>
";
        // line 148
        $this->loadTemplate("@__main__/bottomnaviitem.html.twig", "@__main__/wrapping_main.html.twig", 148)->display($context);
        // line 149
        $this->loadTemplate("@__main__/bottomitem.html.twig", "@__main__/wrapping_main.html.twig", 149)->display($context);
    }

    // line 48
    public function block_admin_wrapping_main_form($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 49
        echo "            <tr>
                <td class=\"edittext\" width=\"90\">
                ";
        // line 51
        echo $this->extensions['OxidEsales\Twig\Extensions\TranslateExtension']->translate(["ident" => "GENERAL_ACTIVE"]);
        echo "
                </td>
                <td class=\"edittext\" colspan=\"2\">
                <input class=\"edittext\" type=\"checkbox\" name=\"editval[oxwrapping__oxactive]\" value='1' ";
        // line 54
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["edit"] ?? null), "oxwrapping__oxactive", [], "any", false, false, false, 54), "value", [], "any", false, false, false, 54) == 1)) {
            echo "checked";
        }
        echo " ";
        echo twig_escape_filter($this->env, ($context["readonly"] ?? null), "html", null, true);
        echo ">
                ";
        // line 55
        $this->loadTemplate("@__main__/inputhelp.html.twig", "@__main__/wrapping_main.html.twig", 55)->display(twig_array_merge($context, ["sHelpId" => $this->extensions['OxidEsales\Twig\Extensions\InputHelpExtension']->getHelpId("HELP_GENERAL_ACTIVE"), "sHelpText" => $this->extensions['OxidEsales\Twig\Extensions\InputHelpExtension']->getHelpText("HELP_GENERAL_ACTIVE")]));
        // line 56
        echo "                </td>
            </tr>
            <tr>
                <td class=\"edittext\">
                ";
        // line 60
        echo $this->extensions['OxidEsales\Twig\Extensions\TranslateExtension']->translate(["ident" => "GENERAL_TYPE"]);
        echo "
                </td>
                 <td class=\"edittext\" colspan=\"2\">
                <select name=\"editval[oxwrapping__oxtype]\" class=\"editinput\" ";
        // line 63
        echo twig_escape_filter($this->env, ($context["readonly"] ?? null), "html", null, true);
        echo ">
                    <option value=\"WRAP\" ";
        // line 64
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["edit"] ?? null), "oxwrapping__oxtype", [], "any", false, false, false, 64), "value", [], "any", false, false, false, 64) == "WRAP")) {
            echo "SELECTED";
        }
        echo ">";
        echo $this->extensions['OxidEsales\Twig\Extensions\TranslateExtension']->translate(["ident" => "WRAPPING_MAIN_PRESENTPACKUNG"]);
        echo "</option>
                    <option value=\"CARD\" ";
        // line 65
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["edit"] ?? null), "oxwrapping__oxtype", [], "any", false, false, false, 65), "value", [], "any", false, false, false, 65) == "CARD")) {
            echo "SELECTED";
        }
        echo ">";
        echo $this->extensions['OxidEsales\Twig\Extensions\TranslateExtension']->translate(["ident" => "GENERAL_CARD"]);
        echo "</option>
                </select>
                ";
        // line 67
        $this->loadTemplate("@__main__/inputhelp.html.twig", "@__main__/wrapping_main.html.twig", 67)->display(twig_array_merge($context, ["sHelpId" => $this->extensions['OxidEsales\Twig\Extensions\InputHelpExtension']->getHelpId("HELP_GENERAL_TYPE"), "sHelpText" => $this->extensions['OxidEsales\Twig\Extensions\InputHelpExtension']->getHelpText("HELP_GENERAL_TYPE")]));
        // line 68
        echo "                </td>
            </tr>
            <tr>
                <td class=\"edittext\">
                ";
        // line 72
        echo $this->extensions['OxidEsales\Twig\Extensions\TranslateExtension']->translate(["ident" => "GENERAL_NAME"]);
        echo "
                </td>
                <td class=\"edittext\" colspan=\"2\">
                <input type=\"text\" class=\"editinput\" size=\"25\" maxlength=\"";
        // line 75
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["edit"] ?? null), "oxwrapping__oxname", [], "any", false, false, false, 75), "fldmax_length", [], "any", false, false, false, 75), "html", null, true);
        echo "\" name=\"editval[oxwrapping__oxname]\" value=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["edit"] ?? null), "oxwrapping__oxname", [], "any", false, false, false, 75), "value", [], "any", false, false, false, 75), "html", null, true);
        echo "\" ";
        echo twig_escape_filter($this->env, ($context["readonly"] ?? null), "html", null, true);
        echo ">
                ";
        // line 76
        $this->loadTemplate("@__main__/inputhelp.html.twig", "@__main__/wrapping_main.html.twig", 76)->display(twig_array_merge($context, ["sHelpId" => $this->extensions['OxidEsales\Twig\Extensions\InputHelpExtension']->getHelpId("HELP_GENERAL_NAME"), "sHelpText" => $this->extensions['OxidEsales\Twig\Extensions\InputHelpExtension']->getHelpText("HELP_GENERAL_NAME")]));
        // line 77
        echo "                </td>
            </tr>
            <tr>
                <td class=\"edittext\">
                ";
        // line 81
        echo $this->extensions['OxidEsales\Twig\Extensions\TranslateExtension']->translate(["ident" => "GENERAL_PRICE"]);
        echo " (";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["oActCur"] ?? null), "sign", [], "any", false, false, false, 81), "html", null, true);
        echo ")
                </td>
                <td class=\"edittext\" colspan=\"2\">
                <input type=\"text\" class=\"editinput\" size=\"10\" maxlength=\"";
        // line 84
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["edit"] ?? null), "oxwrapping__oxprice", [], "any", false, false, false, 84), "fldmax_length", [], "any", false, false, false, 84), "html", null, true);
        echo "\" name=\"editval[oxwrapping__oxprice]\" value=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["edit"] ?? null), "oxwrapping__oxprice", [], "any", false, false, false, 84), "value", [], "any", false, false, false, 84), "html", null, true);
        echo "\" ";
        echo twig_escape_filter($this->env, ($context["readonly"] ?? null), "html", null, true);
        echo ">
                ";
        // line 85
        $this->loadTemplate("@__main__/inputhelp.html.twig", "@__main__/wrapping_main.html.twig", 85)->display(twig_array_merge($context, ["sHelpId" => $this->extensions['OxidEsales\Twig\Extensions\InputHelpExtension']->getHelpId("HELP_GENERAL_PRICE"), "sHelpText" => $this->extensions['OxidEsales\Twig\Extensions\InputHelpExtension']->getHelpText("HELP_GENERAL_PRICE")]));
        // line 86
        echo "                </td>
            </tr>
            <tr>
                <td class=\"edittext\">
                ";
        // line 90
        echo $this->extensions['OxidEsales\Twig\Extensions\TranslateExtension']->translate(["ident" => "WRAPPING_MAIN_PICTURE"]);
        echo "
                </td>
                <td class=\"edittext\">
                <input id=\"oxpic\" type=\"text\" class=\"editinput\" size=\"42\" maxlength=\"";
        // line 93
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["edit"] ?? null), "oxwrapping__oxpic", [], "any", false, false, false, 93), "fldmax_length", [], "any", false, false, false, 93), "html", null, true);
        echo "\" name=\"editval[oxwrapping__oxpic]\" value=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["edit"] ?? null), "oxwrapping__oxpic", [], "any", false, false, false, 93), "value", [], "any", false, false, false, 93), "html", null, true);
        echo "\" ";
        echo twig_escape_filter($this->env, ($context["readonly"] ?? null), "html", null, true);
        echo ">
                ";
        // line 94
        $this->loadTemplate("@__main__/inputhelp.html.twig", "@__main__/wrapping_main.html.twig", 94)->display(twig_array_merge($context, ["sHelpId" => $this->extensions['OxidEsales\Twig\Extensions\InputHelpExtension']->getHelpId("HELP_WRAPPING_MAIN_PICTURE"), "sHelpText" => $this->extensions['OxidEsales\Twig\Extensions\InputHelpExtension']->getHelpText("HELP_WRAPPING_MAIN_PICTURE")]));
        // line 95
        echo "                ";
        if ( !(((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["edit"] ?? null), "oxwrapping__oxpic", [], "any", false, false, false, 95), "value", [], "any", false, false, false, 95) == "nopic.jpg") || (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["edit"] ?? null), "oxwrapping__oxpic", [], "any", false, false, false, 95), "value", [], "any", false, false, false, 95) == "")) || (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["edit"] ?? null), "oxwrapping__oxpic", [], "any", false, false, false, 95), "value", [], "any", false, false, false, 95) == "nopic_ico.jpg"))) {
            // line 96
            echo "                </td>
                <td class=\"edittext\">
                <a href=\"Javascript:DeletePic('oxpic');\" class=\"delete left\" ";
            // line 98
            $this->loadTemplate("@__main__/help.html.twig", "@__main__/wrapping_main.html.twig", 98)->display(twig_array_merge($context, ["helpid" => "item_delete"]));
            echo "></a>
                ";
        }
        // line 100
        echo "                </td>
            </tr>
            <tr>
                <td class=\"edittext\">
                ";
        // line 104
        echo $this->extensions['OxidEsales\Twig\Extensions\TranslateExtension']->translate(["ident" => "WRAPPING_MAIN_PICUPLOAD"]);
        echo " (";
        echo $this->extensions['OxidEsales\Twig\Extensions\TranslateExtension']->translate(["ident" => "GENERAL_MAX_FILE_UPLOAD"]);
        echo " ";
        echo twig_escape_filter($this->env, ($context["sMaxFormattedFileSize"] ?? null), "html", null, true);
        echo ", ";
        echo $this->extensions['OxidEsales\Twig\Extensions\TranslateExtension']->translate(["ident" => "GENERAL_MAX_PICTURE_DIMENSIONS"]);
        echo ")
                </td>
                <td class=\"edittext\" colspan=\"2\">
                <input class=\"editinput\" name=\"myfile[WP@oxwrapping__oxpic]\" size=\"26\" type=\"file\" ";
        // line 107
        echo twig_escape_filter($this->env, ($context["readonly"] ?? null), "html", null, true);
        echo " accept=\"image/*\">
                ";
        // line 108
        $this->loadTemplate("@__main__/inputhelp.html.twig", "@__main__/wrapping_main.html.twig", 108)->display(twig_array_merge($context, ["sHelpId" => $this->extensions['OxidEsales\Twig\Extensions\InputHelpExtension']->getHelpId("HELP_WRAPPING_MAIN_PICUPLOAD"), "sHelpText" => $this->extensions['OxidEsales\Twig\Extensions\InputHelpExtension']->getHelpText("HELP_WRAPPING_MAIN_PICUPLOAD")]));
        // line 109
        echo "                </td>
            </tr>
        ";
    }

    // line 135
    public function block_admin_wrapping_main_picture($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 136
        echo "            ";
        if ((($context["oxid"] ?? null) != "-1")) {
            // line 137
            echo "                ";
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["edit"] ?? null), "oxwrapping__oxpic", [], "any", false, false, false, 137), "value", [], "any", false, false, false, 137)) {
                // line 138
                echo "                    ";
                echo $this->extensions['OxidEsales\Twig\Extensions\TranslateExtension']->translate(["ident" => "WRAPPING_MAIN_PICTURE"]);
                echo " <br>
                    <img src=\"";
                // line 139
                echo twig_get_attribute($this->env, $this->source, ($context["edit"] ?? null), "getPictureUrl", [], "method", false, false, false, 139);
                echo "\" border=\"0\" hspace=\"0\" vspace=\"0\">
                ";
            }
            // line 141
            echo "            ";
        }
        // line 142
        echo "        ";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@__main__/wrapping_main.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable()
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo()
    {
        return array (  381 => 142,  378 => 141,  373 => 139,  368 => 138,  365 => 137,  362 => 136,  358 => 135,  352 => 109,  350 => 108,  346 => 107,  334 => 104,  328 => 100,  323 => 98,  319 => 96,  316 => 95,  314 => 94,  306 => 93,  300 => 90,  294 => 86,  292 => 85,  284 => 84,  276 => 81,  270 => 77,  268 => 76,  260 => 75,  254 => 72,  248 => 68,  246 => 67,  237 => 65,  229 => 64,  225 => 63,  219 => 60,  213 => 56,  211 => 55,  203 => 54,  197 => 51,  193 => 49,  189 => 48,  185 => 149,  183 => 148,  176 => 143,  174 => 135,  167 => 131,  156 => 125,  150 => 121,  145 => 118,  143 => 117,  137 => 113,  134 => 112,  132 => 48,  124 => 42,  116 => 40,  114 => 39,  109 => 37,  105 => 36,  99 => 33,  95 => 32,  91 => 31,  84 => 27,  79 => 25,  75 => 24,  71 => 23,  68 => 22,  64 => 20,  60 => 18,  58 => 17,  41 => 2,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@__main__/wrapping_main.html.twig", "/var/www/html/source/Application/views/admin_twig/tpl/wrapping_main.html.twig");
    }
}
