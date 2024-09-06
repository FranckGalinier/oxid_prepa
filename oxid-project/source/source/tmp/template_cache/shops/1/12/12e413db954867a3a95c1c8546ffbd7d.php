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

/* @__main__/manufacturer_main.html.twig */
class __TwigTemplate_e67052813f6bb355f6d15587c8026faa extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'admin_manufacturer_main_form' => [$this, 'block_admin_manufacturer_main_form'],
            'admin_manufacturer_main_assign_articles' => [$this, 'block_admin_manufacturer_main_assign_articles'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        $this->loadTemplate("@__main__/headitem.html.twig", "@__main__/manufacturer_main.html.twig", 1)->display(twig_array_merge($context, ["title" => $this->extensions['OxidEsales\Twig\Extensions\Filters\TranslateExtension']->translate("GENERAL_ADMIN_TITLE")]));
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
        // line 16
        if (($context["readonly"] ?? null)) {
            // line 17
            echo "    ";
            $context["readonly"] = "readonly disabled";
        } else {
            // line 19
            echo "    ";
            $context["readonly"] = "";
        }
        // line 21
        echo "
<form name=\"transfer\" id=\"transfer\" action=\"";
        // line 22
        echo twig_get_attribute($this->env, $this->source, ($context["oViewConf"] ?? null), "getSelfLink", [], "method", false, false, false, 22);
        echo "\" method=\"post\">
    ";
        // line 23
        echo twig_get_attribute($this->env, $this->source, ($context["oViewConf"] ?? null), "getHiddenSid", [], "method", false, false, false, 23);
        echo "
    <input type=\"hidden\" name=\"oxid\" value=\"";
        // line 24
        echo twig_escape_filter($this->env, ($context["oxid"] ?? null), "html", null, true);
        echo "\">
    <input type=\"hidden\" name=\"oxidCopy\" value=\"";
        // line 25
        echo twig_escape_filter($this->env, ($context["oxid"] ?? null), "html", null, true);
        echo "\">
    <input type=\"hidden\" name=\"cl\" value=\"manufacturer_main\">
    <input type=\"hidden\" name=\"language\" value=\"";
        // line 27
        echo twig_escape_filter($this->env, ($context["actlang"] ?? null), "html", null, true);
        echo "\">
</form>

<form name=\"myedit\" id=\"myedit\" enctype=\"multipart/form-data\" action=\"";
        // line 30
        echo twig_get_attribute($this->env, $this->source, ($context["oViewConf"] ?? null), "getSelfLink", [], "method", false, false, false, 30);
        echo "\" method=\"post\">
<input type=\"hidden\" name=\"MAX_FILE_SIZE\" value=\"";
        // line 31
        echo twig_escape_filter($this->env, ($context["iMaxUploadFileSize"] ?? null), "html", null, true);
        echo "\">
";
        // line 32
        echo twig_get_attribute($this->env, $this->source, ($context["oViewConf"] ?? null), "getHiddenSid", [], "method", false, false, false, 32);
        echo "
<input type=\"hidden\" name=\"cl\" value=\"manufacturer_main\">
<input type=\"hidden\" name=\"fnc\" value=\"\">
<input type=\"hidden\" name=\"oxid\" value=\"";
        // line 35
        echo twig_escape_filter($this->env, ($context["oxid"] ?? null), "html", null, true);
        echo "\">
<input type=\"hidden\" name=\"voxid\" value=\"";
        // line 36
        echo twig_escape_filter($this->env, ($context["oxid"] ?? null), "html", null, true);
        echo "\">
<input type=\"hidden\" name=\"oxparentid\" value=\"";
        // line 37
        echo twig_escape_filter($this->env, ($context["oxparentid"] ?? null), "html", null, true);
        echo "\">
<input type=\"hidden\" name=\"editval[oxmanufacturers__oxid]\" value=\"";
        // line 38
        echo twig_escape_filter($this->env, ($context["oxid"] ?? null), "html", null, true);
        echo "\">
<input type=\"hidden\" name=\"language\" value=\"";
        // line 39
        echo twig_escape_filter($this->env, ($context["actlang"] ?? null), "html", null, true);
        echo "\">

";
        // line 41
        if (twig_get_attribute($this->env, $this->source, ($context["oViewConf"] ?? null), "isAltImageServerConfigured", [], "method", false, false, false, 41)) {
            // line 42
            echo "    <div class=\"warning\">";
            echo $this->extensions['OxidEsales\Twig\Extensions\TranslateExtension']->translate(["ident" => "ALTERNATIVE_IMAGE_SERVER_NOTE"]);
            echo " ";
            $this->loadTemplate("@__main__/inputhelp.html.twig", "@__main__/manufacturer_main.html.twig", 42)->display(twig_array_merge($context, ["sHelpId" => $this->extensions['OxidEsales\Twig\Extensions\InputHelpExtension']->getHelpId("HELP_ALTERNATIVE_IMAGE_SERVER_NOTE"), "sHelpText" => $this->extensions['OxidEsales\Twig\Extensions\InputHelpExtension']->getHelpText("HELP_ALTERNATIVE_IMAGE_SERVER_NOTE")]));
            echo "</div>
";
        }
        // line 44
        echo "
<table border=\"0\" width=\"98%\">
<tr>
    <td valign=\"top\" class=\"edittext\">

        <table cellspacing=\"0\" cellpadding=\"0\" border=\"0\">
        ";
        // line 50
        $this->displayBlock('admin_manufacturer_main_form', $context, $blocks);
        // line 88
        echo "
        ";
        // line 89
        if ((($context["oxid"] ?? null) != "-1")) {
            // line 90
            echo "        <tr>
            <td class=\"edittext\">
            </td>
            <td class=\"edittext\"><br>
                ";
            // line 94
            $this->loadTemplate("@__main__/language_edit.html.twig", "@__main__/manufacturer_main.html.twig", 94)->display($context);
            // line 95
            echo "            </td>
        </tr>
        ";
        }
        // line 98
        echo "        <tr>
            <td class=\"edittext\"><br><br>
            </td>
            <td class=\"edittext\"><br><br>
            <input type=\"submit\" class=\"edittext\" id=\"oLockButton\" name=\"saveArticle\" value=\"";
        // line 102
        echo $this->extensions['OxidEsales\Twig\Extensions\TranslateExtension']->translate(["ident" => "GENERAL_SAVE"]);
        echo "\" onClick=\"Javascript:document.myedit.fnc.value='save'\"\" ";
        echo twig_escape_filter($this->env, ($context["readonly"] ?? null), "html", null, true);
        echo " ";
        if (( !twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["edit"] ?? null), "oxmanufacturers__oxtitle", [], "any", false, false, false, 102), "value", [], "any", false, false, false, 102) &&  !($context["oxparentid"] ?? null))) {
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
        // line 111
        $this->displayBlock('admin_manufacturer_main_assign_articles', $context, $blocks);
        // line 121
        echo "    </td>
    <!-- Ende rechte Seite -->

    </tr>
</table>

</form>

";
        // line 129
        $this->loadTemplate("@__main__/bottomnaviitem.html.twig", "@__main__/manufacturer_main.html.twig", 129)->display($context);
        // line 130
        $this->loadTemplate("@__main__/bottomitem.html.twig", "@__main__/manufacturer_main.html.twig", 130)->display($context);
    }

    // line 50
    public function block_admin_manufacturer_main_form($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 51
        echo "            <tr>
                <td class=\"edittext\" width=\"120\">
                ";
        // line 53
        echo $this->extensions['OxidEsales\Twig\Extensions\TranslateExtension']->translate(["ident" => "GENERAL_ACTIVE"]);
        echo "
                </td>
                <td class=\"edittext\">
                <input class=\"edittext\" type=\"checkbox\" name=\"editval[oxmanufacturers__oxactive]\" value='1' ";
        // line 56
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["edit"] ?? null), "oxmanufacturers__oxactive", [], "any", false, false, false, 56), "value", [], "any", false, false, false, 56) == 1)) {
            echo "checked";
        }
        echo " ";
        echo twig_escape_filter($this->env, ($context["readonly"] ?? null), "html", null, true);
        echo ">
                ";
        // line 57
        $this->loadTemplate("@__main__/inputhelp.html.twig", "@__main__/manufacturer_main.html.twig", 57)->display(twig_array_merge($context, ["sHelpId" => $this->extensions['OxidEsales\Twig\Extensions\InputHelpExtension']->getHelpId("HELP_GENERAL_ACTIVE"), "sHelpText" => $this->extensions['OxidEsales\Twig\Extensions\InputHelpExtension']->getHelpText("HELP_GENERAL_ACTIVE")]));
        // line 58
        echo "                </td>
            </tr>
            <tr>
                <td class=\"edittext\">
                ";
        // line 62
        echo $this->extensions['OxidEsales\Twig\Extensions\TranslateExtension']->translate(["ident" => "GENERAL_TITLE"]);
        echo "
                </td>
                <td class=\"edittext\">
                <input type=\"text\" class=\"editinput\" size=\"40\" maxlength=\"";
        // line 65
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["edit"] ?? null), "oxmanufacturers__oxtitle", [], "any", false, false, false, 65), "fldmax_length", [], "any", false, false, false, 65), "html", null, true);
        echo "\" id=\"oLockTarget\" name=\"editval[oxmanufacturers__oxtitle]\" value=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["edit"] ?? null), "oxmanufacturers__oxtitle", [], "any", false, false, false, 65), "value", [], "any", false, false, false, 65), "html", null, true);
        echo "\" ";
        echo twig_escape_filter($this->env, ($context["readonly"] ?? null), "html", null, true);
        echo ">
                ";
        // line 66
        $this->loadTemplate("@__main__/inputhelp.html.twig", "@__main__/manufacturer_main.html.twig", 66)->display(twig_array_merge($context, ["sHelpId" => $this->extensions['OxidEsales\Twig\Extensions\InputHelpExtension']->getHelpId("HELP_GENERAL_TITLE"), "sHelpText" => $this->extensions['OxidEsales\Twig\Extensions\InputHelpExtension']->getHelpText("HELP_GENERAL_TITLE")]));
        // line 67
        echo "                </td>
            </tr>
            <tr>
                <td class=\"edittext\">
                ";
        // line 71
        echo $this->extensions['OxidEsales\Twig\Extensions\TranslateExtension']->translate(["ident" => "GENERAL_SHORTDESC"]);
        echo "
                </td>
                <td class=\"edittext\">
                <input type=\"text\" class=\"editinput\" size=\"40\" maxlength=\"";
        // line 74
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["edit"] ?? null), "oxmanufacturers__oxshortdesc", [], "any", false, false, false, 74), "fldmax_length", [], "any", false, false, false, 74), "html", null, true);
        echo "\" name=\"editval[oxmanufacturers__oxshortdesc]\" value=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["edit"] ?? null), "oxmanufacturers__oxshortdesc", [], "any", false, false, false, 74), "value", [], "any", false, false, false, 74), "html", null, true);
        echo "\" ";
        echo twig_escape_filter($this->env, ($context["readonly"] ?? null), "html", null, true);
        echo ">
                ";
        // line 75
        $this->loadTemplate("@__main__/inputhelp.html.twig", "@__main__/manufacturer_main.html.twig", 75)->display(twig_array_merge($context, ["sHelpId" => $this->extensions['OxidEsales\Twig\Extensions\InputHelpExtension']->getHelpId("HELP_GENERAL_SHORTDESC"), "sHelpText" => $this->extensions['OxidEsales\Twig\Extensions\InputHelpExtension']->getHelpText("HELP_GENERAL_SHORTDESC")]));
        // line 76
        echo "                </td>
            </tr>
            <tr>
                <td class=\"edittext\">
                    ";
        // line 80
        echo $this->extensions['OxidEsales\Twig\Extensions\TranslateExtension']->translate(["ident" => "GENERAL_SORT"]);
        echo "
                </td>
                <td class=\"edittext\">
                    <input type=\"text\" class=\"editinput\" size=\"25\" maxlength=\"";
        // line 83
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["edit"] ?? null), "oxmanufacturers__oxshortdesc", [], "any", false, false, false, 83), "fldmax_length", [], "any", false, false, false, 83), "html", null, true);
        echo "\" name=\"editval[oxmanufacturers__oxsort]\" value=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["edit"] ?? null), "oxmanufacturers__oxsort", [], "any", false, false, false, 83), "value", [], "any", false, false, false, 83), "html", null, true);
        echo "\" ";
        echo twig_escape_filter($this->env, ($context["readonly"] ?? null), "html", null, true);
        echo ">
                    ";
        // line 84
        $this->loadTemplate("@__main__/inputhelp.html.twig", "@__main__/manufacturer_main.html.twig", 84)->display(twig_array_merge($context, ["sHelpId" => $this->extensions['OxidEsales\Twig\Extensions\InputHelpExtension']->getHelpId("HELP_MANUFACTURER_SORT"), "sHelpText" => $this->extensions['OxidEsales\Twig\Extensions\InputHelpExtension']->getHelpText("HELP_MANUFACTURER_SORT")]));
        // line 85
        echo "                </td>
            </tr>
        ";
    }

    // line 111
    public function block_admin_manufacturer_main_assign_articles($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 112
        echo "            ";
        if ((($context["oxid"] ?? null) != "-1")) {
            // line 113
            echo "                <input ";
            echo twig_escape_filter($this->env, ($context["readonly"] ?? null), "html", null, true);
            echo "
                    type=\"button\" 
                    value=\"";
            // line 115
            echo $this->extensions['OxidEsales\Twig\Extensions\TranslateExtension']->translate(["ident" => "GENERAL_ASSIGNARTICLES"]);
            echo "\"
                    class=\"edittext\" 
                    onclick=\"JavaScript:showDialog('&cl=manufacturer_main&aoc=1&oxid=";
            // line 117
            echo twig_escape_filter($this->env, ($context["oxid"] ?? null), "html", null, true);
            echo "');\"
                    ";
            // line 118
            echo twig_escape_filter($this->env, ($context["readonly"] ?? null), "html", null, true);
            echo ">
            ";
        }
        // line 120
        echo "        ";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@__main__/manufacturer_main.html.twig";
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
        return array (  340 => 120,  335 => 118,  331 => 117,  326 => 115,  320 => 113,  317 => 112,  313 => 111,  307 => 85,  305 => 84,  297 => 83,  291 => 80,  285 => 76,  283 => 75,  275 => 74,  269 => 71,  263 => 67,  261 => 66,  253 => 65,  247 => 62,  241 => 58,  239 => 57,  231 => 56,  225 => 53,  221 => 51,  217 => 50,  213 => 130,  211 => 129,  201 => 121,  199 => 111,  179 => 102,  173 => 98,  168 => 95,  166 => 94,  160 => 90,  158 => 89,  155 => 88,  153 => 50,  145 => 44,  137 => 42,  135 => 41,  130 => 39,  126 => 38,  122 => 37,  118 => 36,  114 => 35,  108 => 32,  104 => 31,  100 => 30,  94 => 27,  89 => 25,  85 => 24,  81 => 23,  77 => 22,  74 => 21,  70 => 19,  66 => 17,  64 => 16,  56 => 10,  50 => 8,  48 => 7,  41 => 2,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@__main__/manufacturer_main.html.twig", "/var/www/html/source/Application/views/admin_twig/tpl/manufacturer_main.html.twig");
    }
}
