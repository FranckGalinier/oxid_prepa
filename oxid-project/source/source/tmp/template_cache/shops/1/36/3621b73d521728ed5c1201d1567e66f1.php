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

/* @__main__/vendor_main.html.twig */
class __TwigTemplate_6fb806f6417c41cadddb38768b625ad8 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'admin_vendor_main_form' => [$this, 'block_admin_vendor_main_form'],
            'admin_vendor_main_assign_articles' => [$this, 'block_admin_vendor_main_assign_articles'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        $this->loadTemplate("@__main__/headitem.html.twig", "@__main__/vendor_main.html.twig", 1)->display(twig_array_merge($context, ["title" => $this->extensions['OxidEsales\Twig\Extensions\Filters\TranslateExtension']->translate("GENERAL_ADMIN_TITLE")]));
        // line 2
        echo "
<script type=\"text/javascript\">
<!--
window.onload = function ()
{
    ";
        // line 7
        if ((($context["updatelist"] ?? null) == 1)) {
            // line 8
            echo "        top.oxid.admin.updateList('";
            echo twig_escape_filter($this->env, ($context["oxid"] ?? null), "html", null, true);
            echo "');
    ";
        }
        // line 10
        echo "    var oField = top.oxid.admin.getLockTarget();
    oField.onchange = oField.onkeyup = oField.onmouseout = top.oxid.admin.unlockSave;
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
    <input type=\"hidden\" name=\"oxidCopy\" value=\"";
        // line 26
        echo twig_escape_filter($this->env, ($context["oxid"] ?? null), "html", null, true);
        echo "\">
    <input type=\"hidden\" name=\"cl\" value=\"vendor_main\">
    <input type=\"hidden\" name=\"language\" value=\"";
        // line 28
        echo twig_escape_filter($this->env, ($context["actlang"] ?? null), "html", null, true);
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
<input type=\"hidden\" name=\"cl\" value=\"vendor_main\">
<input type=\"hidden\" name=\"fnc\" value=\"\">
<input type=\"hidden\" name=\"oxid\" value=\"";
        // line 36
        echo twig_escape_filter($this->env, ($context["oxid"] ?? null), "html", null, true);
        echo "\">
<input type=\"hidden\" name=\"voxid\" value=\"";
        // line 37
        echo twig_escape_filter($this->env, ($context["oxid"] ?? null), "html", null, true);
        echo "\">
<input type=\"hidden\" name=\"oxparentid\" value=\"";
        // line 38
        echo twig_escape_filter($this->env, ($context["oxparentid"] ?? null), "html", null, true);
        echo "\">
<input type=\"hidden\" name=\"editval[oxvendor__oxid]\" value=\"";
        // line 39
        echo twig_escape_filter($this->env, ($context["oxid"] ?? null), "html", null, true);
        echo "\">
<input type=\"hidden\" name=\"language\" value=\"";
        // line 40
        echo twig_escape_filter($this->env, ($context["actlang"] ?? null), "html", null, true);
        echo "\">

";
        // line 42
        if (twig_get_attribute($this->env, $this->source, ($context["oViewConf"] ?? null), "isAltImageServerConfigured", [], "method", false, false, false, 42)) {
            // line 43
            echo "    <div class=\"warning\">";
            echo $this->extensions['OxidEsales\Twig\Extensions\TranslateExtension']->translate(["ident" => "ALTERNATIVE_IMAGE_SERVER_NOTE"]);
            echo " ";
            $this->loadTemplate("@__main__/inputhelp.html.twig", "@__main__/vendor_main.html.twig", 43)->display(twig_array_merge($context, ["sHelpId" => $this->extensions['OxidEsales\Twig\Extensions\InputHelpExtension']->getHelpId("HELP_ALTERNATIVE_IMAGE_SERVER_NOTE"), "sHelpText" => $this->extensions['OxidEsales\Twig\Extensions\InputHelpExtension']->getHelpText("HELP_ALTERNATIVE_IMAGE_SERVER_NOTE")]));
            echo "</div>
";
        }
        // line 45
        echo "
<table border=\"0\" width=\"98%\">
<tr>
    <td valign=\"top\" class=\"edittext\">

        <table cellspacing=\"0\" cellpadding=\"0\" border=\"0\">
        ";
        // line 51
        $this->displayBlock('admin_vendor_main_form', $context, $blocks);
        // line 99
        echo "        ";
        if ((($context["oxid"] ?? null) != "-1")) {
            // line 100
            echo "        <tr>
            <td class=\"edittext\">
            </td>
            <td class=\"edittext\"><br>
                ";
            // line 104
            $this->loadTemplate("@__main__/language_edit.html.twig", "@__main__/vendor_main.html.twig", 104)->display($context);
            // line 105
            echo "            </td>
        </tr>
        ";
        }
        // line 108
        echo "        <tr>
            <td class=\"edittext\"><br><br>
            </td>
            <td class=\"edittext\"><br><br>
            <input type=\"submit\" class=\"edittext\" id=\"oLockButton\" name=\"saveArticle\" value=\"";
        // line 112
        echo $this->extensions['OxidEsales\Twig\Extensions\TranslateExtension']->translate(["ident" => "GENERAL_SAVE"]);
        echo "\" onClick=\"Javascript:document.myedit.fnc.value='save'\"\" ";
        echo twig_escape_filter($this->env, ($context["readonly"] ?? null), "html", null, true);
        echo " ";
        if (( !twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["edit"] ?? null), "oxvendor__oxtitle", [], "any", false, false, false, 112), "value", [], "any", false, false, false, 112) &&  !($context["oxparentid"] ?? null))) {
            echo "disabled";
        }
        echo " ";
        echo twig_escape_filter($this->env, ($context["readonly"] ?? null), "html", null, true);
        echo "><br>
            </td>
        </tr>


        </table>
    </td>
    <!-- Anfang rechte Seite -->
    <td valign=\"top\" class=\"edittext\" align=\"left\" width=\"55%\">
        ";
        // line 121
        $this->displayBlock('admin_vendor_main_assign_articles', $context, $blocks);
        // line 126
        echo "    </td>
    <!-- Ende rechte Seite -->

    </tr>
</table>

</form>

";
        // line 134
        $this->loadTemplate("@__main__/bottomnaviitem.html.twig", "@__main__/vendor_main.html.twig", 134)->display($context);
        // line 135
        $this->loadTemplate("@__main__/bottomitem.html.twig", "@__main__/vendor_main.html.twig", 135)->display($context);
    }

    // line 51
    public function block_admin_vendor_main_form($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 52
        echo "            <tr>
                <td class=\"edittext\" width=\"120\">
                ";
        // line 54
        echo $this->extensions['OxidEsales\Twig\Extensions\TranslateExtension']->translate(["ident" => "GENERAL_ACTIVE"]);
        echo "
                </td>
                <td class=\"edittext\">
                <input class=\"edittext\" type=\"checkbox\" name=\"editval[oxvendor__oxactive]\" value='1' ";
        // line 57
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["edit"] ?? null), "oxvendor__oxactive", [], "any", false, false, false, 57), "value", [], "any", false, false, false, 57) == 1)) {
            echo "checked";
        }
        echo " ";
        echo twig_escape_filter($this->env, ($context["readonly"] ?? null), "html", null, true);
        echo ">
                ";
        // line 58
        $this->loadTemplate("@__main__/inputhelp.html.twig", "@__main__/vendor_main.html.twig", 58)->display(twig_array_merge($context, ["sHelpId" => $this->extensions['OxidEsales\Twig\Extensions\InputHelpExtension']->getHelpId("HELP_GENERAL_ACTIVE"), "sHelpText" => $this->extensions['OxidEsales\Twig\Extensions\InputHelpExtension']->getHelpText("HELP_GENERAL_ACTIVE")]));
        // line 59
        echo "                </td>
            </tr>
            <tr>
                <td class=\"edittext\">
                ";
        // line 63
        echo $this->extensions['OxidEsales\Twig\Extensions\TranslateExtension']->translate(["ident" => "GENERAL_TITLE"]);
        echo "
                </td>
                <td class=\"edittext\">
                <input type=\"text\" class=\"editinput\" size=\"40\" maxlength=\"";
        // line 66
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["edit"] ?? null), "oxvendor__oxtitle", [], "any", false, false, false, 66), "fldmax_length", [], "any", false, false, false, 66), "html", null, true);
        echo "\" id=\"oLockTarget\" name=\"editval[oxvendor__oxtitle]\" value=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["edit"] ?? null), "oxvendor__oxtitle", [], "any", false, false, false, 66), "value", [], "any", false, false, false, 66), "html", null, true);
        echo "\" ";
        echo twig_escape_filter($this->env, ($context["readonly"] ?? null), "html", null, true);
        echo ">
                ";
        // line 67
        $this->loadTemplate("@__main__/inputhelp.html.twig", "@__main__/vendor_main.html.twig", 67)->display(twig_array_merge($context, ["sHelpId" => $this->extensions['OxidEsales\Twig\Extensions\InputHelpExtension']->getHelpId("HELP_GENERAL_TITLE"), "sHelpText" => $this->extensions['OxidEsales\Twig\Extensions\InputHelpExtension']->getHelpText("HELP_GENERAL_TITLE")]));
        // line 68
        echo "                </td>
            </tr>
            <tr>
                <td class=\"edittext\">
                ";
        // line 72
        echo $this->extensions['OxidEsales\Twig\Extensions\TranslateExtension']->translate(["ident" => "GENERAL_SHORTDESC"]);
        echo "
                </td>
                <td class=\"edittext\">
                <input type=\"text\" class=\"editinput\" size=\"40\" maxlength=\"";
        // line 75
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["edit"] ?? null), "oxvendor__oxshortdesc", [], "any", false, false, false, 75), "fldmax_length", [], "any", false, false, false, 75), "html", null, true);
        echo "\" name=\"editval[oxvendor__oxshortdesc]\" value=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["edit"] ?? null), "oxvendor__oxshortdesc", [], "any", false, false, false, 75), "value", [], "any", false, false, false, 75), "html", null, true);
        echo "\" ";
        echo twig_escape_filter($this->env, ($context["readonly"] ?? null), "html", null, true);
        echo ">
                ";
        // line 76
        $this->loadTemplate("@__main__/inputhelp.html.twig", "@__main__/vendor_main.html.twig", 76)->display(twig_array_merge($context, ["sHelpId" => $this->extensions['OxidEsales\Twig\Extensions\InputHelpExtension']->getHelpId("HELP_GENERAL_SHORTDESC"), "sHelpText" => $this->extensions['OxidEsales\Twig\Extensions\InputHelpExtension']->getHelpText("HELP_GENERAL_SHORTDESC")]));
        // line 77
        echo "                </td>
            </tr>

            <tr>
                <td class=\"edittext\">
                ";
        // line 82
        echo $this->extensions['OxidEsales\Twig\Extensions\TranslateExtension']->translate(["ident" => "GENERAL_ICON"]);
        echo "
                </td>
                <td class=\"edittext\">
                <input type=\"text\" class=\"editinput\" size=\"25\" maxlength=\"";
        // line 85
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["edit"] ?? null), "oxvendor__oxicon", [], "any", false, false, false, 85), "fldmax_length", [], "any", false, false, false, 85), "html", null, true);
        echo "\" name=\"editval[oxvendor__oxicon]\" value=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["edit"] ?? null), "oxvendor__oxicon", [], "any", false, false, false, 85), "value", [], "any", false, false, false, 85), "html", null, true);
        echo "\" ";
        echo twig_escape_filter($this->env, ($context["readonly"] ?? null), "html", null, true);
        echo ">
                ";
        // line 86
        $this->loadTemplate("@__main__/inputhelp.html.twig", "@__main__/vendor_main.html.twig", 86)->display(twig_array_merge($context, ["sHelpId" => $this->extensions['OxidEsales\Twig\Extensions\InputHelpExtension']->getHelpId("HELP_GENERAL_ICON"), "sHelpText" => $this->extensions['OxidEsales\Twig\Extensions\InputHelpExtension']->getHelpText("HELP_GENERAL_ICON")]));
        // line 87
        echo "                </td>
            </tr>
            <tr>
                <td class=\"edittext\">
                ";
        // line 91
        echo $this->extensions['OxidEsales\Twig\Extensions\TranslateExtension']->translate(["ident" => "VENDOR_MAIN_ICONUPLOAD"]);
        echo " (";
        echo $this->extensions['OxidEsales\Twig\Extensions\TranslateExtension']->translate(["ident" => "GENERAL_MAX_FILE_UPLOAD"]);
        echo " ";
        echo twig_escape_filter($this->env, ($context["sMaxFormattedFileSize"] ?? null), "html", null, true);
        echo ", ";
        echo $this->extensions['OxidEsales\Twig\Extensions\TranslateExtension']->translate(["ident" => "GENERAL_MAX_PICTURE_DIMENSIONS"]);
        echo "):<br>
                </td>
                <td class=\"edittext\">
                <input class=\"editinput\" name=\"myfile[VICO@oxvendor__oxicon]\" type=\"file\" ";
        // line 94
        echo twig_escape_filter($this->env, ($context["readonly"] ?? null), "html", null, true);
        echo ">
                ";
        // line 95
        $this->loadTemplate("@__main__/inputhelp.html.twig", "@__main__/vendor_main.html.twig", 95)->display(twig_array_merge($context, ["sHelpId" => $this->extensions['OxidEsales\Twig\Extensions\InputHelpExtension']->getHelpId("HELP_VENDOR_MAIN_ICONUPLOAD"), "sHelpText" => $this->extensions['OxidEsales\Twig\Extensions\InputHelpExtension']->getHelpText("HELP_VENDOR_MAIN_ICONUPLOAD")]));
        // line 96
        echo "                </td>
            </tr>
        ";
    }

    // line 121
    public function block_admin_vendor_main_assign_articles($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 122
        echo "            ";
        if ((($context["oxid"] ?? null) != "-1")) {
            // line 123
            echo "                <input ";
            echo twig_escape_filter($this->env, ($context["readonly"] ?? null), "html", null, true);
            echo " type=\"button\" value=\"";
            echo $this->extensions['OxidEsales\Twig\Extensions\TranslateExtension']->translate(["ident" => "GENERAL_ASSIGNARTICLES"]);
            echo "\" class=\"edittext\" onclick=\"JavaScript:showDialog('&cl=vendor_main&aoc=1&oxid=";
            echo twig_escape_filter($this->env, ($context["oxid"] ?? null), "html", null, true);
            echo "');\" ";
            echo twig_escape_filter($this->env, ($context["readonly"] ?? null), "html", null, true);
            echo ">
            ";
        }
        // line 125
        echo "        ";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@__main__/vendor_main.html.twig";
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
        return array (  356 => 125,  344 => 123,  341 => 122,  337 => 121,  331 => 96,  329 => 95,  325 => 94,  313 => 91,  307 => 87,  305 => 86,  297 => 85,  291 => 82,  284 => 77,  282 => 76,  274 => 75,  268 => 72,  262 => 68,  260 => 67,  252 => 66,  246 => 63,  240 => 59,  238 => 58,  230 => 57,  224 => 54,  220 => 52,  216 => 51,  212 => 135,  210 => 134,  200 => 126,  198 => 121,  178 => 112,  172 => 108,  167 => 105,  165 => 104,  159 => 100,  156 => 99,  154 => 51,  146 => 45,  138 => 43,  136 => 42,  131 => 40,  127 => 39,  123 => 38,  119 => 37,  115 => 36,  109 => 33,  105 => 32,  101 => 31,  95 => 28,  90 => 26,  86 => 25,  82 => 24,  78 => 23,  75 => 22,  71 => 20,  67 => 18,  65 => 17,  56 => 10,  50 => 8,  48 => 7,  41 => 2,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@__main__/vendor_main.html.twig", "/var/www/html/source/Application/views/admin_twig/tpl/vendor_main.html.twig");
    }
}
