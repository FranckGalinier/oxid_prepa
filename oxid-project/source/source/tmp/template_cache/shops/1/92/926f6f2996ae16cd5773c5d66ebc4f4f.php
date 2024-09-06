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

/* @__main__/country_main.html.twig */
class __TwigTemplate_419d652ffb1e8d379b71f8a338f4a5ab extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'admin_country_main_form' => [$this, 'block_admin_country_main_form'],
            'admin_country_main_description' => [$this, 'block_admin_country_main_description'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        $this->loadTemplate("@__main__/headitem.html.twig", "@__main__/country_main.html.twig", 1)->display(twig_array_merge($context, ["title" => $this->extensions['OxidEsales\Twig\Extensions\Filters\TranslateExtension']->translate("GENERAL_ADMIN_TITLE")]));
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
    <input type=\"hidden\" name=\"cl\" value=\"country_main\">
    <input type=\"hidden\" name=\"language\" value=\"";
        // line 27
        echo twig_escape_filter($this->env, ($context["actlang"] ?? null), "html", null, true);
        echo "\">
</form>

<form name=\"myedit\" id=\"myedit\" action=\"";
        // line 30
        echo twig_get_attribute($this->env, $this->source, ($context["oViewConf"] ?? null), "getSelfLink", [], "method", false, false, false, 30);
        echo "\" method=\"post\">
";
        // line 31
        echo twig_get_attribute($this->env, $this->source, ($context["oViewConf"] ?? null), "getHiddenSid", [], "method", false, false, false, 31);
        echo "
<input type=\"hidden\" name=\"cl\" value=\"country_main\">
<input type=\"hidden\" name=\"fnc\" value=\"\">
<input type=\"hidden\" name=\"oxid\" value=\"";
        // line 34
        echo twig_escape_filter($this->env, ($context["oxid"] ?? null), "html", null, true);
        echo "\">
<input type=\"hidden\" name=\"voxid\" value=\"";
        // line 35
        echo twig_escape_filter($this->env, ($context["oxid"] ?? null), "html", null, true);
        echo "\">
<input type=\"hidden\" name=\"oxparentid\" value=\"";
        // line 36
        echo twig_escape_filter($this->env, ($context["oxparentid"] ?? null), "html", null, true);
        echo "\">
<input type=\"hidden\" name=\"editval[oxcountry__oxid]\" value=\"";
        // line 37
        echo twig_escape_filter($this->env, ($context["oxid"] ?? null), "html", null, true);
        echo "\">
<input type=\"hidden\" name=\"language\" value=\"";
        // line 38
        echo twig_escape_filter($this->env, ($context["actlang"] ?? null), "html", null, true);
        echo "\">

<table cellspacing=\"0\" cellpadding=\"0\" border=\"0\" width=\"98%\">
<tr>

    <td valign=\"top\" class=\"edittext\">

        <table cellspacing=\"0\" cellpadding=\"0\" border=\"0\">
            ";
        // line 46
        $this->displayBlock('admin_country_main_form', $context, $blocks);
        // line 129
        echo "        ";
        if ((($context["oxid"] ?? null) != "-1")) {
            // line 130
            echo "        <tr>
            <td class=\"edittext\">
            </td>
            <td class=\"edittext\"><br>
                ";
            // line 134
            $this->loadTemplate("@__main__/language_edit.html.twig", "@__main__/country_main.html.twig", 134)->display($context);
            // line 135
            echo "            </td>
        </tr>
        ";
        }
        // line 138
        echo "        <tr>
            <td class=\"edittext\"><br><br>
            </td>
            <td class=\"edittext\"><br><br>
            <input type=\"submit\" class=\"edittext\" id=\"oLockButton\" name=\"saveArticle\" value=\"";
        // line 142
        echo $this->extensions['OxidEsales\Twig\Extensions\TranslateExtension']->translate(["ident" => "GENERAL_SAVE"]);
        echo "\" onClick=\"Javascript:document.myedit.fnc.value='save'\"\" ";
        echo twig_escape_filter($this->env, ($context["readonly"] ?? null), "html", null, true);
        echo " ";
        if (( !twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["edit"] ?? null), "oxcountry__oxtitle", [], "any", false, false, false, 142), "value", [], "any", false, false, false, 142) &&  !($context["oxparentid"] ?? null))) {
            echo "disabled";
        }
        echo "><br>
            </td>
        </tr>


        </table>
    </td>
    <!-- Anfang rechte Seite -->
    <td valign=\"top\" class=\"edittext\" align=\"left\" width=\"55%\">
        ";
        // line 151
        $this->displayBlock('admin_country_main_description', $context, $blocks);
        // line 155
        echo "    </td>
    <!-- Ende rechte Seite -->

    </tr>
</table>

</form>

";
        // line 163
        $this->loadTemplate("@__main__/bottomnaviitem.html.twig", "@__main__/country_main.html.twig", 163)->display($context);
        // line 164
        echo "
";
        // line 165
        $this->loadTemplate("@__main__/bottomitem.html.twig", "@__main__/country_main.html.twig", 165)->display($context);
    }

    // line 46
    public function block_admin_country_main_form($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 47
        echo "                <tr>
                    <td class=\"edittext\" width=\"120\">
                    ";
        // line 49
        echo $this->extensions['OxidEsales\Twig\Extensions\TranslateExtension']->translate(["ident" => "GENERAL_ACTIVE"]);
        echo "
                    </td>
                    <td class=\"edittext\">
                    <input class=\"edittext\" type=\"checkbox\" name=\"editval[oxcountry__oxactive]\" value='1' ";
        // line 52
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["edit"] ?? null), "oxcountry__oxactive", [], "any", false, false, false, 52), "value", [], "any", false, false, false, 52) == 1)) {
            echo "checked";
        }
        echo " ";
        echo twig_escape_filter($this->env, ($context["readonly"] ?? null), "html", null, true);
        echo ">
                    ";
        // line 53
        $this->loadTemplate("@__main__/inputhelp.html.twig", "@__main__/country_main.html.twig", 53)->display(twig_array_merge($context, ["sHelpId" => $this->extensions['OxidEsales\Twig\Extensions\InputHelpExtension']->getHelpId("HELP_GENERAL_ACTIVE"), "sHelpText" => $this->extensions['OxidEsales\Twig\Extensions\InputHelpExtension']->getHelpText("HELP_GENERAL_ACTIVE")]));
        // line 54
        echo "                    </td>
                </tr>
                <tr>
                    <td class=\"edittext\">
                    ";
        // line 58
        echo $this->extensions['OxidEsales\Twig\Extensions\TranslateExtension']->translate(["ident" => "GENERAL_TITLE"]);
        echo "
                    </td>
                    <td class=\"edittext\">
                    <input type=\"text\" class=\"editinput\" size=\"40\" maxlength=\"";
        // line 61
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["edit"] ?? null), "oxcountry__oxtitle", [], "any", false, false, false, 61), "fldmax_length", [], "any", false, false, false, 61), "html", null, true);
        echo "\" id=\"oLockTarget\" name=\"editval[oxcountry__oxtitle]\" value=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["edit"] ?? null), "oxcountry__oxtitle", [], "any", false, false, false, 61), "value", [], "any", false, false, false, 61), "html", null, true);
        echo "\" ";
        echo twig_escape_filter($this->env, ($context["readonly"] ?? null), "html", null, true);
        echo ">
                    ";
        // line 62
        $this->loadTemplate("@__main__/inputhelp.html.twig", "@__main__/country_main.html.twig", 62)->display(twig_array_merge($context, ["sHelpId" => $this->extensions['OxidEsales\Twig\Extensions\InputHelpExtension']->getHelpId("HELP_GENERAL_TITLE"), "sHelpText" => $this->extensions['OxidEsales\Twig\Extensions\InputHelpExtension']->getHelpText("HELP_GENERAL_TITLE")]));
        // line 63
        echo "                    </td>
                </tr>
                <tr>
                    <td class=\"edittext\">
                    ";
        // line 67
        echo $this->extensions['OxidEsales\Twig\Extensions\TranslateExtension']->translate(["ident" => "GENERAL_SHORTDESC"]);
        echo "
                    </td>
                    <td class=\"edittext\">
                    <input type=\"text\" class=\"editinput\" size=\"40\" maxlength=\"";
        // line 70
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["edit"] ?? null), "oxcountry__oxshortdesc", [], "any", false, false, false, 70), "fldmax_length", [], "any", false, false, false, 70), "html", null, true);
        echo "\" name=\"editval[oxcountry__oxshortdesc]\" value=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["edit"] ?? null), "oxcountry__oxshortdesc", [], "any", false, false, false, 70), "value", [], "any", false, false, false, 70), "html", null, true);
        echo "\" ";
        echo twig_escape_filter($this->env, ($context["readonly"] ?? null), "html", null, true);
        echo ">
                    ";
        // line 71
        $this->loadTemplate("@__main__/inputhelp.html.twig", "@__main__/country_main.html.twig", 71)->display(twig_array_merge($context, ["sHelpId" => $this->extensions['OxidEsales\Twig\Extensions\InputHelpExtension']->getHelpId("HELP_GENERAL_SHORTDESC"), "sHelpText" => $this->extensions['OxidEsales\Twig\Extensions\InputHelpExtension']->getHelpText("HELP_GENERAL_SHORTDESC")]));
        // line 72
        echo "                    </td>
                </tr>
                <tr>
                    <td class=\"edittext\">
                    ";
        // line 76
        echo $this->extensions['OxidEsales\Twig\Extensions\TranslateExtension']->translate(["ident" => "COUNTRY_MAIN_ISO2"]);
        echo "
                    </td>
                    <td class=\"edittext\">
                    <input type=\"text\" class=\"editinput\" size=\"5\" maxlength=\"";
        // line 79
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["edit"] ?? null), "oxcountry__oxisoalpha2", [], "any", false, false, false, 79), "fldmax_length", [], "any", false, false, false, 79), "html", null, true);
        echo "\" name=\"editval[oxcountry__oxisoalpha2]\" value=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["edit"] ?? null), "oxcountry__oxisoalpha2", [], "any", false, false, false, 79), "value", [], "any", false, false, false, 79), "html", null, true);
        echo "\" ";
        echo twig_escape_filter($this->env, ($context["readonly"] ?? null), "html", null, true);
        echo ">
                    ";
        // line 80
        $this->loadTemplate("@__main__/inputhelp.html.twig", "@__main__/country_main.html.twig", 80)->display(twig_array_merge($context, ["sHelpId" => $this->extensions['OxidEsales\Twig\Extensions\InputHelpExtension']->getHelpId("HELP_COUNTRY_MAIN_ISO2"), "sHelpText" => $this->extensions['OxidEsales\Twig\Extensions\InputHelpExtension']->getHelpText("HELP_COUNTRY_MAIN_ISO2")]));
        // line 81
        echo "                    </td>
                </tr>
                <tr>
                    <td class=\"edittext\">
                    ";
        // line 85
        echo $this->extensions['OxidEsales\Twig\Extensions\TranslateExtension']->translate(["ident" => "COUNTRY_MAIN_ISO3"]);
        echo "
                    </td>
                    <td class=\"edittext\">
                    <input type=\"text\" class=\"editinput\" size=\"5\" maxlength=\"";
        // line 88
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["edit"] ?? null), "oxcountry__oxisoalpha3", [], "any", false, false, false, 88), "fldmax_length", [], "any", false, false, false, 88), "html", null, true);
        echo "\" name=\"editval[oxcountry__oxisoalpha3]\" value=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["edit"] ?? null), "oxcountry__oxisoalpha3", [], "any", false, false, false, 88), "value", [], "any", false, false, false, 88), "html", null, true);
        echo "\" ";
        echo twig_escape_filter($this->env, ($context["readonly"] ?? null), "html", null, true);
        echo ">
                    ";
        // line 89
        $this->loadTemplate("@__main__/inputhelp.html.twig", "@__main__/country_main.html.twig", 89)->display(twig_array_merge($context, ["sHelpId" => $this->extensions['OxidEsales\Twig\Extensions\InputHelpExtension']->getHelpId("HELP_COUNTRY_MAIN_ISO3"), "sHelpText" => $this->extensions['OxidEsales\Twig\Extensions\InputHelpExtension']->getHelpText("HELP_COUNTRY_MAIN_ISO3")]));
        // line 90
        echo "                    </td>
                </tr>
                <tr>
                    <td class=\"edittext\">
                    ";
        // line 94
        echo $this->extensions['OxidEsales\Twig\Extensions\TranslateExtension']->translate(["ident" => "COUNTRY_MAIN_ISOUNNUM"]);
        echo "
                    </td>
                    <td class=\"edittext\">
                    <input type=\"text\" class=\"editinput\" size=\"5\" maxlength=\"";
        // line 97
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["edit"] ?? null), "oxcountry__oxunnum3", [], "any", false, false, false, 97), "fldmax_length", [], "any", false, false, false, 97), "html", null, true);
        echo "\" name=\"editval[oxcountry__oxunnum3]\" value=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["edit"] ?? null), "oxcountry__oxunnum3", [], "any", false, false, false, 97), "value", [], "any", false, false, false, 97), "html", null, true);
        echo "\" ";
        echo twig_escape_filter($this->env, ($context["readonly"] ?? null), "html", null, true);
        echo ">
                    ";
        // line 98
        $this->loadTemplate("@__main__/inputhelp.html.twig", "@__main__/country_main.html.twig", 98)->display(twig_array_merge($context, ["sHelpId" => $this->extensions['OxidEsales\Twig\Extensions\InputHelpExtension']->getHelpId("HELP_COUNTRY_MAIN_ISOUNNUM"), "sHelpText" => $this->extensions['OxidEsales\Twig\Extensions\InputHelpExtension']->getHelpText("HELP_COUNTRY_MAIN_ISOUNNUM")]));
        // line 99
        echo "                    </td>
                </tr>
                <tr>
                    <td class=\"edittext\">
                    ";
        // line 103
        echo $this->extensions['OxidEsales\Twig\Extensions\TranslateExtension']->translate(["ident" => "GENERAL_SORT"]);
        echo "
                    </td>
                    <td class=\"edittext\">
                    <input type=\"text\" class=\"editinput\" size=\"5\" maxlength=\"";
        // line 106
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["edit"] ?? null), "oxcountry__oxorder", [], "any", false, false, false, 106), "fldmax_length", [], "any", false, false, false, 106), "html", null, true);
        echo "\" name=\"editval[oxcountry__oxorder]\" value=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["edit"] ?? null), "oxcountry__oxorder", [], "any", false, false, false, 106), "value", [], "any", false, false, false, 106), "html", null, true);
        echo "\" ";
        echo twig_escape_filter($this->env, ($context["readonly"] ?? null), "html", null, true);
        echo ">
                    ";
        // line 107
        $this->loadTemplate("@__main__/inputhelp.html.twig", "@__main__/country_main.html.twig", 107)->display(twig_array_merge($context, ["sHelpId" => $this->extensions['OxidEsales\Twig\Extensions\InputHelpExtension']->getHelpId("HELP_GENERAL_SORT"), "sHelpText" => $this->extensions['OxidEsales\Twig\Extensions\InputHelpExtension']->getHelpText("HELP_GENERAL_SORT")]));
        // line 108
        echo "                    </td>
                </tr>
                ";
        // line 110
        if (($context["blForeignCountry"] ?? null)) {
            // line 111
            echo "                <tr>
                    <td class=\"edittext\">
                    ";
            // line 113
            echo $this->extensions['OxidEsales\Twig\Extensions\TranslateExtension']->translate(["ident" => "COUNTRY_MAIN_OXVATSTATUS"]);
            echo "
                    </td>
                    <td class=\"edittext\">
                    <fieldset style=\"margin: 5px 0 0 0;\">
                        <input type=\"radio\" name=\"editval[oxcountry__oxvatstatus]\" value=\"0\" ";
            // line 117
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["edit"] ?? null), "oxcountry__oxvatstatus", [], "any", false, false, false, 117), "value", [], "any", false, false, false, 117) == 0)) {
                echo "checked";
            }
            echo " ";
            echo twig_escape_filter($this->env, ($context["readonly"] ?? null), "html", null, true);
            echo ">
                        ";
            // line 118
            echo $this->extensions['OxidEsales\Twig\Extensions\TranslateExtension']->translate(["ident" => "COUNTRY_MAIN_OXVATSTATUS_0"]);
            echo "
                        ";
            // line 119
            $this->loadTemplate("@__main__/inputhelp.html.twig", "@__main__/country_main.html.twig", 119)->display(twig_array_merge($context, ["sHelpId" => $this->extensions['OxidEsales\Twig\Extensions\InputHelpExtension']->getHelpId("HELP_COUNTRY_MAIN_OXVATSTATUS_0"), "sHelpText" => $this->extensions['OxidEsales\Twig\Extensions\InputHelpExtension']->getHelpText("HELP_COUNTRY_MAIN_OXVATSTATUS_0")]));
            // line 120
            echo "                        <br />
                        <input type=\"radio\" name=\"editval[oxcountry__oxvatstatus]\" value=\"1\" ";
            // line 121
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["edit"] ?? null), "oxcountry__oxvatstatus", [], "any", false, false, false, 121), "value", [], "any", false, false, false, 121) == 1)) {
                echo "checked";
            }
            echo " ";
            echo twig_escape_filter($this->env, ($context["readonly"] ?? null), "html", null, true);
            echo ">
                        ";
            // line 122
            echo $this->extensions['OxidEsales\Twig\Extensions\TranslateExtension']->translate(["ident" => "COUNTRY_MAIN_OXVATSTATUS_1"]);
            echo "
                        ";
            // line 123
            $this->loadTemplate("@__main__/inputhelp.html.twig", "@__main__/country_main.html.twig", 123)->display(twig_array_merge($context, ["sHelpId" => $this->extensions['OxidEsales\Twig\Extensions\InputHelpExtension']->getHelpId("HELP_COUNTRY_MAIN_OXVATSTATUS_1"), "sHelpText" => $this->extensions['OxidEsales\Twig\Extensions\InputHelpExtension']->getHelpText("HELP_COUNTRY_MAIN_OXVATSTATUS_1")]));
            // line 124
            echo "                    </fieldset>
                    </td>
                </tr>
                ";
        }
        // line 127
        echo " ";
        // line 128
        echo "            ";
    }

    // line 151
    public function block_admin_country_main_description($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 152
        echo "            ";
        echo $this->extensions['OxidEsales\Twig\Extensions\TranslateExtension']->translate(["ident" => "COUNTRY_MAIN_OPDESCRIPTION"]);
        echo "<br>
            <textarea class=\"editinput\" style=\"width:250;height:100;\" wrap=\"VIRTUAL\" name=\"editval[oxcountry__oxlongdesc]\" ";
        // line 153
        echo twig_escape_filter($this->env, ($context["readonly"] ?? null), "html", null, true);
        echo ">";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["edit"] ?? null), "oxcountry__oxlongdesc", [], "any", false, false, false, 153), "value", [], "any", false, false, false, 153), "html", null, true);
        echo "</textarea>
        ";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@__main__/country_main.html.twig";
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
        return array (  425 => 153,  420 => 152,  416 => 151,  412 => 128,  410 => 127,  404 => 124,  402 => 123,  398 => 122,  390 => 121,  387 => 120,  385 => 119,  381 => 118,  373 => 117,  366 => 113,  362 => 111,  360 => 110,  356 => 108,  354 => 107,  346 => 106,  340 => 103,  334 => 99,  332 => 98,  324 => 97,  318 => 94,  312 => 90,  310 => 89,  302 => 88,  296 => 85,  290 => 81,  288 => 80,  280 => 79,  274 => 76,  268 => 72,  266 => 71,  258 => 70,  252 => 67,  246 => 63,  244 => 62,  236 => 61,  230 => 58,  224 => 54,  222 => 53,  214 => 52,  208 => 49,  204 => 47,  200 => 46,  196 => 165,  193 => 164,  191 => 163,  181 => 155,  179 => 151,  161 => 142,  155 => 138,  150 => 135,  148 => 134,  142 => 130,  139 => 129,  137 => 46,  126 => 38,  122 => 37,  118 => 36,  114 => 35,  110 => 34,  104 => 31,  100 => 30,  94 => 27,  89 => 25,  85 => 24,  81 => 23,  77 => 22,  74 => 21,  70 => 19,  66 => 17,  64 => 16,  56 => 10,  50 => 8,  48 => 7,  41 => 2,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@__main__/country_main.html.twig", "/var/www/html/source/Application/views/admin_twig/tpl/country_main.html.twig");
    }
}
