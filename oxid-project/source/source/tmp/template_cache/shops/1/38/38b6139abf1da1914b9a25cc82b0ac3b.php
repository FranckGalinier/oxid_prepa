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

/* @__main__/voucherserie_main.html.twig */
class __TwigTemplate_6ef0130875c9ae16a53be680ef12fb98 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'admin_voucherserie_main_form' => [$this, 'block_admin_voucherserie_main_form'],
            'admin_voucherserie_main_form_discount_type' => [$this, 'block_admin_voucherserie_main_form_discount_type'],
            'admin_voucherserie_main_genvoucher' => [$this, 'block_admin_voucherserie_main_genvoucher'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        $this->loadTemplate("@__main__/headitem.html.twig", "@__main__/voucherserie_main.html.twig", 1)->display(twig_array_merge($context, ["title" => $this->extensions['OxidEsales\Twig\Extensions\Filters\TranslateExtension']->translate("GENERAL_ADMIN_TITLE")]));
        // line 2
        echo "
";
        // line 3
        if (($context["readonly"] ?? null)) {
            // line 4
            echo "    ";
            $context["readonly"] = "readonly disabled";
        } else {
            // line 6
            echo "    ";
            $context["readonly"] = "";
        }
        // line 8
        echo "
<script type=\"text/javascript\">
<!--
function changeFnc( fncName )
{
    var langvar = document.myedit.elements['fnc'];
    if (langvar != null )
        langvar.value = fncName;
}
//-->
</script>

<form name=\"transfer\" id=\"transfer\" action=\"";
        // line 20
        echo twig_get_attribute($this->env, $this->source, ($context["oViewConf"] ?? null), "getSelfLink", [], "method", false, false, false, 20);
        echo "\" method=\"post\">
    ";
        // line 21
        echo twig_get_attribute($this->env, $this->source, ($context["oViewConf"] ?? null), "getHiddenSid", [], "method", false, false, false, 21);
        echo "
    <input type=\"hidden\" name=\"oxid\" value=\"";
        // line 22
        echo twig_escape_filter($this->env, ($context["oxid"] ?? null), "html", null, true);
        echo "\">
    <input type=\"hidden\" name=\"cl\" value=\"voucherserie_main\">
</form>



<table cellspacing=\"0\" cellpadding=\"0\" border=\"0\" width=\"98%\">
<tr>
    <td valign=\"top\" class=\"edittext\" width=\"355\">

<form name=\"myedit\" id=\"myedit\" action=\"";
        // line 32
        echo twig_get_attribute($this->env, $this->source, ($context["oViewConf"] ?? null), "getSelfLink", [], "method", false, false, false, 32);
        echo "\" method=\"post\">
";
        // line 33
        echo twig_get_attribute($this->env, $this->source, ($context["oViewConf"] ?? null), "getHiddenSid", [], "method", false, false, false, 33);
        echo "
<input type=\"hidden\" name=\"cl\" value=\"voucherserie_main\">
<input type=\"hidden\" name=\"fnc\" value=\"save\">
<input type=\"hidden\" name=\"oxid\" value=\"";
        // line 36
        echo twig_escape_filter($this->env, ($context["oxid"] ?? null), "html", null, true);
        echo "\">
<input type=\"hidden\" name=\"editval[oxvoucherseries__oxid]\" value=\"";
        // line 37
        echo twig_escape_filter($this->env, ($context["oxid"] ?? null), "html", null, true);
        echo "\">
<input type=\"hidden\" name=\"randomNr\" value=\"true\">

        <table cellspacing=\"2\" cellpadding=\"0\" border=\"0\">
        ";
        // line 41
        $this->displayBlock('admin_voucherserie_main_form', $context, $blocks);
        // line 143
        echo "        <tr>
            <td class=\"edittext\">
            </td>
            <td class=\"edittext\"><br>
            <input type=\"submit\" class=\"edittext\" name=\"save\" value=\"";
        // line 147
        echo $this->extensions['OxidEsales\Twig\Extensions\TranslateExtension']->translate(["ident" => "GENERAL_SAVE"]);
        echo "\" ";
        echo twig_escape_filter($this->env, ($context["readonly"] ?? null), "html", null, true);
        echo " onClick=\"Javascript:changeFnc('save');\">
            </td>
        </tr>
        </table>

</form>

    </td>
    <td width=\"355\" valign=\"top\">

        ";
        // line 157
        if ((($context["oxid"] ?? null) != "-1")) {
            // line 158
            echo "
        <form name=\"myexport\" id=\"myexport\" action=\"";
            // line 159
            echo twig_get_attribute($this->env, $this->source, ($context["oViewConf"] ?? null), "getSelfLink", [], "method", false, false, false, 159);
            echo "\" target=\"dynexport_do\" method=\"post\">
        ";
            // line 160
            echo twig_get_attribute($this->env, $this->source, ($context["oViewConf"] ?? null), "getHiddenSid", [], "method", false, false, false, 160);
            echo "
        <input type=\"hidden\" name=\"cl\" value=\"\">
        <input type=\"hidden\" name=\"fnc\" value=\"start\">
        <input type=\"hidden\" name=\"voucherid\" value=\"";
            // line 163
            echo twig_escape_filter($this->env, ($context["oxid"] ?? null), "html", null, true);
            echo "\">

        <fieldset title=\"";
            // line 165
            echo $this->extensions['OxidEsales\Twig\Extensions\TranslateExtension']->translate(["ident" => "VOUCHERSERIE_MAIN_VOUCHERSTATISTICS"]);
            echo "\" style=\"padding-left: 5px; padding-right: 5px;\">
            <legend>";
            // line 166
            echo $this->extensions['OxidEsales\Twig\Extensions\TranslateExtension']->translate(["ident" => "VOUCHERSERIE_MAIN_VOUCHERSTATISTICS"]);
            echo "</legend>
            <iframe src=\"";
            // line 167
            echo twig_get_attribute($this->env, $this->source, ($context["oViewConf"] ?? null), "getSelfLink", [], "method", false, false, false, 167);
            echo "&cl=";
            echo twig_escape_filter($this->env, ($context["sClassDo"] ?? null), "html", null, true);
            echo "&voucherid=";
            echo twig_escape_filter($this->env, ($context["oxid"] ?? null), "html", null, true);
            echo "\" width=\"100%\" height=\"80\" frameborder=\"0\" name=\"dynexport_do\" align=\"left\"></iframe>
        </fieldset>
        <br>

        <table cellspacing=\"2\" cellpadding=\"0\" width=\"\">
            ";
            // line 172
            $this->displayBlock('admin_voucherserie_main_genvoucher', $context, $blocks);
            // line 207
            echo "            <tr>
                <td></td>
                <td><br>
                    <input type=\"submit\" class=\"edittext\" name=\"save\" value=\"";
            // line 210
            echo $this->extensions['OxidEsales\Twig\Extensions\TranslateExtension']->translate(["ident" => "VOUCHERSERIE_MAIN_GENERATE"]);
            echo "\" ";
            echo twig_escape_filter($this->env, ($context["readonly"] ?? null), "html", null, true);
            echo " onClick=\"Javascript:document.myexport.cl.value='voucherserie_generate';\">
                    <input type=\"submit\" class=\"edittext\" name=\"save\" value=\"";
            // line 211
            echo $this->extensions['OxidEsales\Twig\Extensions\TranslateExtension']->translate(["ident" => "VOUCHERSERIE_MAIN_EXPORT"]);
            echo "\" ";
            echo twig_escape_filter($this->env, ($context["readonly"] ?? null), "html", null, true);
            echo " onClick=\"Javascript:document.myexport.cl.value='voucherserie_export';\">
                </td>
            </tr>
        </table>

        </form>
        ";
        }
        // line 218
        echo "
    </td>
    </tr>
</table>
";
        // line 222
        $this->loadTemplate("@__main__/bottomnaviitem.html.twig", "@__main__/voucherserie_main.html.twig", 222)->display($context);
        // line 223
        $this->loadTemplate("@__main__/bottomitem.html.twig", "@__main__/voucherserie_main.html.twig", 223)->display($context);
    }

    // line 41
    public function block_admin_voucherserie_main_form($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 42
        echo "            <tr>
                <td class=\"edittext\" width=\"160\">
                ";
        // line 44
        echo $this->extensions['OxidEsales\Twig\Extensions\TranslateExtension']->translate(["ident" => "GENERAL_NAME"]);
        echo "
                </td>
                <td class=\"edittext\" width=\"195\">
                <input class=\"editinput\" type=\"text\" size=\"36\" name=\"editval[oxvoucherseries__oxserienr]\" value=\"";
        // line 47
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["edit"] ?? null), "oxvoucherseries__oxserienr", [], "any", false, false, false, 47), "value", [], "any", false, false, false, 47), "html", null, true);
        echo "\" onClick=\"this.select()\" ";
        echo twig_escape_filter($this->env, ($context["readonly"] ?? null), "html", null, true);
        echo ">
                ";
        // line 48
        $this->loadTemplate("@__main__/inputhelp.html.twig", "@__main__/voucherserie_main.html.twig", 48)->display(twig_array_merge($context, ["sHelpId" => $this->extensions['OxidEsales\Twig\Extensions\InputHelpExtension']->getHelpId("HELP_GENERAL_NAME"), "sHelpText" => $this->extensions['OxidEsales\Twig\Extensions\InputHelpExtension']->getHelpText("HELP_GENERAL_NAME")]));
        // line 49
        echo "                </td>
            </tr>
            <tr>
                <td class=\"edittext\" width=\"90\">
                ";
        // line 53
        echo $this->extensions['OxidEsales\Twig\Extensions\TranslateExtension']->translate(["ident" => "GENERAL_DESCRIPTION"]);
        echo "
                </td>
                <td class=\"edittext\">
                <input class=\"editinput\" type=\"text\" size=\"36\" name=\"editval[oxvoucherseries__oxseriedescription]\" value=\"";
        // line 56
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["edit"] ?? null), "oxvoucherseries__oxseriedescription", [], "any", false, false, false, 56), "value", [], "any", false, false, false, 56), "html", null, true);
        echo "\" onClick=\"this.select()\" ";
        echo twig_escape_filter($this->env, ($context["readonly"] ?? null), "html", null, true);
        echo ">
                ";
        // line 57
        $this->loadTemplate("@__main__/inputhelp.html.twig", "@__main__/voucherserie_main.html.twig", 57)->display(twig_array_merge($context, ["sHelpId" => $this->extensions['OxidEsales\Twig\Extensions\InputHelpExtension']->getHelpId("HELP_GENERAL_DESCRIPTION"), "sHelpText" => $this->extensions['OxidEsales\Twig\Extensions\InputHelpExtension']->getHelpText("HELP_GENERAL_DESCRIPTION")]));
        // line 58
        echo "                </td>
            </tr>
            <tr>
                <td class=\"edittext\">
                ";
        // line 62
        echo $this->extensions['OxidEsales\Twig\Extensions\TranslateExtension']->translate(["ident" => "GENERAL_BEGINDATE"]);
        echo "
                </td>
                <td class=\"edittext\">
                <input type=\"text\" class=\"editinput\" size=\"27\" name=\"editval[oxvoucherseries__oxbegindate]\" value=\"";
        // line 65
        echo twig_escape_filter($this->env, $this->extensions['OxidEsales\Twig\Extensions\Filters\FormatDateExtension']->formatDate(twig_get_attribute($this->env, $this->source, ($context["edit"] ?? null), "oxvoucherseries__oxbegindate", [], "any", false, false, false, 65)), "html", null, true);
        echo "\" ";
        $this->loadTemplate("@__main__/help.html.twig", "@__main__/voucherserie_main.html.twig", 65)->display(twig_array_merge($context, ["helpid" => "article_vonbis"]));
        echo " onClick=\"this.select()\" ";
        echo twig_escape_filter($this->env, ($context["readonly"] ?? null), "html", null, true);
        echo ">
                ";
        // line 66
        $this->loadTemplate("@__main__/inputhelp.html.twig", "@__main__/voucherserie_main.html.twig", 66)->display(twig_array_merge($context, ["sHelpId" => $this->extensions['OxidEsales\Twig\Extensions\InputHelpExtension']->getHelpId("HELP_GENERAL_BEGINDATE"), "sHelpText" => $this->extensions['OxidEsales\Twig\Extensions\InputHelpExtension']->getHelpText("HELP_GENERAL_BEGINDATE")]));
        // line 67
        echo "                </td>
            </tr>
            <tr>
                <td class=\"edittext\">
                ";
        // line 71
        echo $this->extensions['OxidEsales\Twig\Extensions\TranslateExtension']->translate(["ident" => "GENERAL_ENDDATE"]);
        echo "
                </td>
                <td class=\"edittext\">
                <input type=\"text\" class=\"editinput\" size=\"27\" name=\"editval[oxvoucherseries__oxenddate]\" value=\"";
        // line 74
        echo twig_escape_filter($this->env, $this->extensions['OxidEsales\Twig\Extensions\Filters\FormatDateExtension']->formatDate(twig_get_attribute($this->env, $this->source, ($context["edit"] ?? null), "oxvoucherseries__oxenddate", [], "any", false, false, false, 74)), "html", null, true);
        echo "\" ";
        $this->loadTemplate("@__main__/help.html.twig", "@__main__/voucherserie_main.html.twig", 74)->display(twig_array_merge($context, ["helpid" => "article_vonbis"]));
        echo " onClick=\"this.select()\" ";
        echo twig_escape_filter($this->env, ($context["readonly"] ?? null), "html", null, true);
        echo ">
                ";
        // line 75
        $this->loadTemplate("@__main__/inputhelp.html.twig", "@__main__/voucherserie_main.html.twig", 75)->display(twig_array_merge($context, ["sHelpId" => $this->extensions['OxidEsales\Twig\Extensions\InputHelpExtension']->getHelpId("HELP_GENERAL_ENDDATE"), "sHelpText" => $this->extensions['OxidEsales\Twig\Extensions\InputHelpExtension']->getHelpText("HELP_GENERAL_ENDDATE")]));
        // line 76
        echo "                </td>
            </tr>
            ";
        // line 78
        $this->displayBlock('admin_voucherserie_main_form_discount_type', $context, $blocks);
        // line 93
        echo "            <tr>
                <td class=\"edittext\">
                ";
        // line 95
        echo $this->extensions['OxidEsales\Twig\Extensions\TranslateExtension']->translate(["ident" => "VOUCHERSERIE_MAIN_MINORDERPRICE"]);
        echo "
                </td>
                <td class=\"edittext\">
                <input type=\"text\" class=\"editinput\" size=\"15\" name=\"editval[oxvoucherseries__oxminimumvalue]\" value=\"";
        // line 98
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["edit"] ?? null), "oxvoucherseries__oxminimumvalue", [], "any", false, false, false, 98), "value", [], "any", false, false, false, 98), "html", null, true);
        echo "\" onClick=\"this.select()\" ";
        echo twig_escape_filter($this->env, ($context["readonly"] ?? null), "html", null, true);
        echo ">
                ";
        // line 99
        $this->loadTemplate("@__main__/inputhelp.html.twig", "@__main__/voucherserie_main.html.twig", 99)->display(twig_array_merge($context, ["sHelpId" => $this->extensions['OxidEsales\Twig\Extensions\InputHelpExtension']->getHelpId("HELP_VOUCHERSERIE_MAIN_MINORDERPRICE"), "sHelpText" => $this->extensions['OxidEsales\Twig\Extensions\InputHelpExtension']->getHelpText("HELP_VOUCHERSERIE_MAIN_MINORDERPRICE")]));
        // line 100
        echo "                </td>
            </tr>
            <tr>
                <td class=\"edittext\">
                ";
        // line 104
        echo $this->extensions['OxidEsales\Twig\Extensions\TranslateExtension']->translate(["ident" => "VOUCHERSERIE_MAIN_ALLOWSAMESERIES"]);
        echo "
                </td>
                <td class=\"edittext\">
                ";
        // line 107
        echo $this->extensions['OxidEsales\Twig\Extensions\TranslateExtension']->translate(["ident" => "GENERAL_YES"]);
        echo "&nbsp;<input type=\"radio\" name=\"editval[oxvoucherseries__oxallowsameseries]\" value=\"1\" ";
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["edit"] ?? null), "oxvoucherseries__oxallowsameseries", [], "any", false, false, false, 107), "value", [], "any", false, false, false, 107)) {
            echo "checked";
        }
        echo " ";
        echo twig_escape_filter($this->env, ($context["readonly"] ?? null), "html", null, true);
        echo ">&nbsp;&nbsp;
                ";
        // line 108
        echo $this->extensions['OxidEsales\Twig\Extensions\TranslateExtension']->translate(["ident" => "GENERAL_NO"]);
        echo "&nbsp;<input type=\"radio\" name=\"editval[oxvoucherseries__oxallowsameseries]\" value=\"0\" ";
        if ( !twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["edit"] ?? null), "oxvoucherseries__oxallowsameseries", [], "any", false, false, false, 108), "value", [], "any", false, false, false, 108)) {
            echo "checked";
        }
        echo " ";
        echo twig_escape_filter($this->env, ($context["readonly"] ?? null), "html", null, true);
        echo ">
                ";
        // line 109
        $this->loadTemplate("@__main__/inputhelp.html.twig", "@__main__/voucherserie_main.html.twig", 109)->display(twig_array_merge($context, ["sHelpId" => $this->extensions['OxidEsales\Twig\Extensions\InputHelpExtension']->getHelpId("HELP_VOUCHERSERIE_MAIN_ALLOWSAMESERIES"), "sHelpText" => $this->extensions['OxidEsales\Twig\Extensions\InputHelpExtension']->getHelpText("HELP_VOUCHERSERIE_MAIN_ALLOWSAMESERIES")]));
        // line 110
        echo "                </td>
            </tr>
            <tr>
                <td class=\"edittext\">
                ";
        // line 114
        echo $this->extensions['OxidEsales\Twig\Extensions\TranslateExtension']->translate(["ident" => "VOUCHERSERIE_MAIN_ALLOWOTHERSERIES"]);
        echo "
                </td>
                <td class=\"edittext\">
                ";
        // line 117
        echo $this->extensions['OxidEsales\Twig\Extensions\TranslateExtension']->translate(["ident" => "GENERAL_YES"]);
        echo "&nbsp;<input type=\"radio\" name=\"editval[oxvoucherseries__oxallowotherseries]\" value=\"1\" ";
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["edit"] ?? null), "oxvoucherseries__oxallowotherseries", [], "any", false, false, false, 117), "value", [], "any", false, false, false, 117)) {
            echo "checked";
        }
        echo " ";
        echo twig_escape_filter($this->env, ($context["readonly"] ?? null), "html", null, true);
        echo ">&nbsp;&nbsp;
                ";
        // line 118
        echo $this->extensions['OxidEsales\Twig\Extensions\TranslateExtension']->translate(["ident" => "GENERAL_NO"]);
        echo "&nbsp;<input type=\"radio\" name=\"editval[oxvoucherseries__oxallowotherseries]\" value=\"0\" ";
        if ( !twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["edit"] ?? null), "oxvoucherseries__oxallowotherseries", [], "any", false, false, false, 118), "value", [], "any", false, false, false, 118)) {
            echo "checked";
        }
        echo " ";
        echo twig_escape_filter($this->env, ($context["readonly"] ?? null), "html", null, true);
        echo ">
                ";
        // line 119
        $this->loadTemplate("@__main__/inputhelp.html.twig", "@__main__/voucherserie_main.html.twig", 119)->display(twig_array_merge($context, ["sHelpId" => $this->extensions['OxidEsales\Twig\Extensions\InputHelpExtension']->getHelpId("HELP_VOUCHERSERIE_MAIN_ALLOWOTHERSERIES"), "sHelpText" => $this->extensions['OxidEsales\Twig\Extensions\InputHelpExtension']->getHelpText("HELP_VOUCHERSERIE_MAIN_ALLOWOTHERSERIES")]));
        // line 120
        echo "                </td>
            </tr>
            <tr>
                <td class=\"edittext\">
                ";
        // line 124
        echo $this->extensions['OxidEsales\Twig\Extensions\TranslateExtension']->translate(["ident" => "VOUCHERSERIE_MAIN_SAMESEROTHERORDER"]);
        echo "
                </td>
                <td class=\"edittext\">
                ";
        // line 127
        echo $this->extensions['OxidEsales\Twig\Extensions\TranslateExtension']->translate(["ident" => "GENERAL_YES"]);
        echo "&nbsp;<input type=\"radio\" name=\"editval[oxvoucherseries__oxallowuseanother]\" value=\"1\" ";
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["edit"] ?? null), "oxvoucherseries__oxallowuseanother", [], "any", false, false, false, 127), "value", [], "any", false, false, false, 127)) {
            echo "checked";
        }
        echo " ";
        echo twig_escape_filter($this->env, ($context["readonly"] ?? null), "html", null, true);
        echo ">&nbsp;&nbsp;
                ";
        // line 128
        echo $this->extensions['OxidEsales\Twig\Extensions\TranslateExtension']->translate(["ident" => "GENERAL_NO"]);
        echo "&nbsp;<input type=\"radio\" name=\"editval[oxvoucherseries__oxallowuseanother]\" value=\"0\" ";
        if ( !twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["edit"] ?? null), "oxvoucherseries__oxallowuseanother", [], "any", false, false, false, 128), "value", [], "any", false, false, false, 128)) {
            echo "checked";
        }
        echo " ";
        echo twig_escape_filter($this->env, ($context["readonly"] ?? null), "html", null, true);
        echo ">
                ";
        // line 129
        $this->loadTemplate("@__main__/inputhelp.html.twig", "@__main__/voucherserie_main.html.twig", 129)->display(twig_array_merge($context, ["sHelpId" => $this->extensions['OxidEsales\Twig\Extensions\InputHelpExtension']->getHelpId("HELP_VOUCHERSERIE_MAIN_SAMESEROTHERORDER"), "sHelpText" => $this->extensions['OxidEsales\Twig\Extensions\InputHelpExtension']->getHelpText("HELP_VOUCHERSERIE_MAIN_SAMESEROTHERORDER")]));
        // line 130
        echo "                </td>
            </tr>
            <tr>
                <td class=\"edittext\">
                ";
        // line 134
        echo $this->extensions['OxidEsales\Twig\Extensions\TranslateExtension']->translate(["ident" => "VOUCHERSERIE_MAIN_CALCULATEONCE"]);
        echo "
                </td>
                <td class=\"edittext\">
                <input type=\"hidden\" name=\"editval[oxvoucherseries__oxcalculateonce]\" value=\"0\" ";
        // line 137
        echo twig_escape_filter($this->env, ($context["readonly"] ?? null), "html", null, true);
        echo ">
                <input type=\"checkbox\" name=\"editval[oxvoucherseries__oxcalculateonce]\" value=\"1\" ";
        // line 138
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["edit"] ?? null), "oxvoucherseries__oxcalculateonce", [], "any", false, false, false, 138), "value", [], "any", false, false, false, 138)) {
            echo "checked";
        }
        echo " ";
        echo twig_escape_filter($this->env, ($context["readonly"] ?? null), "html", null, true);
        echo ">
                ";
        // line 139
        $this->loadTemplate("@__main__/inputhelp.html.twig", "@__main__/voucherserie_main.html.twig", 139)->display(twig_array_merge($context, ["sHelpId" => $this->extensions['OxidEsales\Twig\Extensions\InputHelpExtension']->getHelpId("HELP_VOUCHERSERIE_MAIN_CALCULATEONCE"), "sHelpText" => $this->extensions['OxidEsales\Twig\Extensions\InputHelpExtension']->getHelpText("HELP_VOUCHERSERIE_MAIN_CALCULATEONCE")]));
        // line 140
        echo "                </td>
            </tr>
        ";
    }

    // line 78
    public function block_admin_voucherserie_main_form_discount_type($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 79
        echo "                <tr>
                    <td class=\"edittext\">
                    ";
        // line 81
        echo $this->extensions['OxidEsales\Twig\Extensions\TranslateExtension']->translate(["ident" => "VOUCHERSERIE_MAIN_DISCOUNT"]);
        echo "
                    </td>
                    <td class=\"edittext\">
                    <input class=\"editinput\" type=\"text\" size=\"15\" name=\"editval[oxvoucherseries__oxdiscount]\" value=\"";
        // line 84
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["edit"] ?? null), "oxvoucherseries__oxdiscount", [], "any", false, false, false, 84), "value", [], "any", false, false, false, 84), "html", null, true);
        echo "\" onClick=\"this.select()\" ";
        echo twig_escape_filter($this->env, ($context["readonly"] ?? null), "html", null, true);
        echo ">
                    <select class=\"editinput\" name=\"editval[oxvoucherseries__oxdiscounttype]\" ";
        // line 85
        echo twig_escape_filter($this->env, ($context["readonly"] ?? null), "html", null, true);
        echo ">
                        <option value=\"absolute\" ";
        // line 86
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["edit"] ?? null), "oxvoucherseries__oxdiscounttype", [], "any", false, false, false, 86), "value", [], "any", false, false, false, 86) == "absolute")) {
            echo "selected";
        }
        echo ">abs</option>
                        <option value=\"percent\" ";
        // line 87
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["edit"] ?? null), "oxvoucherseries__oxdiscounttype", [], "any", false, false, false, 87), "value", [], "any", false, false, false, 87) == "percent")) {
            echo "selected";
        }
        echo ">%</option>
                    </select>
                    ";
        // line 89
        $this->loadTemplate("@__main__/inputhelp.html.twig", "@__main__/voucherserie_main.html.twig", 89)->display(twig_array_merge($context, ["sHelpId" => $this->extensions['OxidEsales\Twig\Extensions\InputHelpExtension']->getHelpId("HELP_VOUCHERSERIE_MAIN_DISCOUNT"), "sHelpText" => $this->extensions['OxidEsales\Twig\Extensions\InputHelpExtension']->getHelpText("HELP_VOUCHERSERIE_MAIN_DISCOUNT")]));
        // line 90
        echo "                    </td>
                </tr>
            ";
    }

    // line 172
    public function block_admin_voucherserie_main_genvoucher($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 173
        echo "                <tr>
                    <td class=\"edittext\" colspan=\"2\">
                        <b>";
        // line 175
        echo $this->extensions['OxidEsales\Twig\Extensions\TranslateExtension']->translate(["ident" => "VOUCHERSERIE_MAIN_NEWVOUCHER"]);
        echo "</b> (optional)<br><br>
                    </td>
                </tr>
                <tr>
                    <td class=\"edittext\">
                        ";
        // line 180
        echo $this->extensions['OxidEsales\Twig\Extensions\TranslateExtension']->translate(["ident" => "VOUCHERSERIE_MAIN_RANDOMNUM"]);
        echo "
                    </td>
                    <td>
                        <input type=\"radio\" name=\"randomVoucherNr\" value=\"1\" checked ";
        // line 183
        echo twig_escape_filter($this->env, ($context["readonly"] ?? null), "html", null, true);
        echo " onclick=\"document.getElementById('voucherNr').required = false;\">
                        ";
        // line 184
        $this->loadTemplate("@__main__/inputhelp.html.twig", "@__main__/voucherserie_main.html.twig", 184)->display(twig_array_merge($context, ["sHelpId" => $this->extensions['OxidEsales\Twig\Extensions\InputHelpExtension']->getHelpId("HELP_VOUCHERSERIE_MAIN_RANDOMNUM"), "sHelpText" => $this->extensions['OxidEsales\Twig\Extensions\InputHelpExtension']->getHelpText("HELP_VOUCHERSERIE_MAIN_RANDOMNUM")]));
        // line 185
        echo "                    </td>
                </tr>
                <tr>
                    <td class=\"edittext\">
                        ";
        // line 189
        echo $this->extensions['OxidEsales\Twig\Extensions\TranslateExtension']->translate(["ident" => "VOUCHERSERIE_MAIN_VOUCHERNUM"]);
        echo "
                    </td>
                    <td>
                        <input type=\"radio\" name=\"randomVoucherNr\" id=\"randomVoucherNr\" value=\"0\" ";
        // line 192
        echo twig_escape_filter($this->env, ($context["readonly"] ?? null), "html", null, true);
        echo " onclick=\"document.getElementById('voucherNr').required = true;\">
                        <input class=\"editinput\" size=\"29\" type=\"text\" name=\"voucherNr\" id=\"voucherNr\" ";
        // line 193
        echo twig_escape_filter($this->env, ($context["readonly"] ?? null), "html", null, true);
        echo " onfocus=\"document.getElementById('randomVoucherNr').checked='true'; document.getElementById('voucherNr').required = true;\">
                        ";
        // line 194
        $this->loadTemplate("@__main__/inputhelp.html.twig", "@__main__/voucherserie_main.html.twig", 194)->display(twig_array_merge($context, ["sHelpId" => $this->extensions['OxidEsales\Twig\Extensions\InputHelpExtension']->getHelpId("HELP_VOUCHERSERIE_MAIN_VOUCHERNUM"), "sHelpText" => $this->extensions['OxidEsales\Twig\Extensions\InputHelpExtension']->getHelpText("HELP_VOUCHERSERIE_MAIN_VOUCHERNUM")]));
        // line 195
        echo "                    </td>
                </tr>
                <tr>
                    <td class=\"edittext\">
                        ";
        // line 199
        echo $this->extensions['OxidEsales\Twig\Extensions\TranslateExtension']->translate(["ident" => "GENERAL_SUM"]);
        echo "
                    </td>
                    <td>
                        <input type=\"text\" size=\"29\" class=\"editinput\" name=\"voucherAmount\" value=\"0\" ";
        // line 202
        echo twig_escape_filter($this->env, ($context["readonly"] ?? null), "html", null, true);
        echo ">
                        ";
        // line 203
        $this->loadTemplate("@__main__/inputhelp.html.twig", "@__main__/voucherserie_main.html.twig", 203)->display(twig_array_merge($context, ["sHelpId" => $this->extensions['OxidEsales\Twig\Extensions\InputHelpExtension']->getHelpId("HELP_GENERAL_SUM"), "sHelpText" => $this->extensions['OxidEsales\Twig\Extensions\InputHelpExtension']->getHelpText("HELP_GENERAL_SUM")]));
        // line 204
        echo "                    </td>
                </tr>
            ";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@__main__/voucherserie_main.html.twig";
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
        return array (  568 => 204,  566 => 203,  562 => 202,  556 => 199,  550 => 195,  548 => 194,  544 => 193,  540 => 192,  534 => 189,  528 => 185,  526 => 184,  522 => 183,  516 => 180,  508 => 175,  504 => 173,  500 => 172,  494 => 90,  492 => 89,  485 => 87,  479 => 86,  475 => 85,  469 => 84,  463 => 81,  459 => 79,  455 => 78,  449 => 140,  447 => 139,  439 => 138,  435 => 137,  429 => 134,  423 => 130,  421 => 129,  411 => 128,  401 => 127,  395 => 124,  389 => 120,  387 => 119,  377 => 118,  367 => 117,  361 => 114,  355 => 110,  353 => 109,  343 => 108,  333 => 107,  327 => 104,  321 => 100,  319 => 99,  313 => 98,  307 => 95,  303 => 93,  301 => 78,  297 => 76,  295 => 75,  287 => 74,  281 => 71,  275 => 67,  273 => 66,  265 => 65,  259 => 62,  253 => 58,  251 => 57,  245 => 56,  239 => 53,  233 => 49,  231 => 48,  225 => 47,  219 => 44,  215 => 42,  211 => 41,  207 => 223,  205 => 222,  199 => 218,  187 => 211,  181 => 210,  176 => 207,  174 => 172,  162 => 167,  158 => 166,  154 => 165,  149 => 163,  143 => 160,  139 => 159,  136 => 158,  134 => 157,  119 => 147,  113 => 143,  111 => 41,  104 => 37,  100 => 36,  94 => 33,  90 => 32,  77 => 22,  73 => 21,  69 => 20,  55 => 8,  51 => 6,  47 => 4,  45 => 3,  42 => 2,  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@__main__/voucherserie_main.html.twig", "/var/www/html/source/Application/views/admin_twig/tpl/voucherserie_main.html.twig");
    }
}
