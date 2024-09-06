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

/* @__main__/user_main.html.twig */
class __TwigTemplate_39b24f80ae7d21edf8dce7d6320d0f03 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'admin_user_main_form' => [$this, 'block_admin_user_main_form'],
            'admin_user_main_assign_groups' => [$this, 'block_admin_user_main_assign_groups'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        $this->loadTemplate("@__main__/headitem.html.twig", "@__main__/user_main.html.twig", 1)->display(twig_array_merge($context, ["title" => $this->extensions['OxidEsales\Twig\Extensions\Filters\TranslateExtension']->translate("GENERAL_ADMIN_TITLE")]));
        // line 2
        echo "
<script type=\"text/javascript\">
<!--
function chkInsert()
{
    if(document.myedit.elements[\"editval[oxuser__oxusername]\"].value == \"\") {
        alert(\"Bitte eMail Adresse eingeben!\");
        document.myedit.elements[\"editval[oxuser__oxusername]\"].focus();
        return false;
    }
    return true;
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
    <input type=\"hidden\" name=\"cl\" value=\"user_main\">
</form>

<form name=\"myedit\" id=\"myedit\" action=\"";
        // line 29
        echo twig_get_attribute($this->env, $this->source, ($context["oViewConf"] ?? null), "getSelfLink", [], "method", false, false, false, 29);
        echo "\" method=\"post\" onSubmit=\"return chkInsert()\">
    ";
        // line 30
        echo twig_get_attribute($this->env, $this->source, ($context["oViewConf"] ?? null), "getHiddenSid", [], "method", false, false, false, 30);
        echo "
    <input type=\"hidden\" name=\"cl\" value=\"user_main\">
    <input type=\"hidden\" name=\"fnc\" value=\"\">
    <input type=\"hidden\" name=\"oxid\" value=\"";
        // line 33
        echo twig_escape_filter($this->env, ($context["oxid"] ?? null), "html", null, true);
        echo "\">
    <input type=\"hidden\" name=\"editval[oxuser__oxid]\" value=\"";
        // line 34
        echo twig_escape_filter($this->env, ($context["oxid"] ?? null), "html", null, true);
        echo "\">

<table cellspacing=\"0\" cellpadding=\"0\" border=\"0\" width=\"98%\">
<tr>
    <td valign=\"top\" class=\"edittext\">

        <table cellspacing=\"0\" cellpadding=\"0\" border=\"0\">
        ";
        // line 41
        $this->displayBlock('admin_user_main_form', $context, $blocks);
        // line 229
        echo "        <tr>
            <td class=\"edittext\">
            </td>
            <td class=\"edittext\"><br>
            <input type=\"submit\" class=\"edittext\" name=\"save\" value=\"";
        // line 233
        echo $this->extensions['OxidEsales\Twig\Extensions\TranslateExtension']->translate(["ident" => "GENERAL_SAVE"]);
        echo "\" onClick=\"Javascript:document.myedit.fnc.value='save'\" ";
        echo twig_escape_filter($this->env, ($context["readonly"] ?? null), "html", null, true);
        echo ">
            </td>
        </tr>
        </table>
    </td>
    <!-- Starting right column -->
    <td valign=\"top\" class=\"edittext vr\" align=\"left\" width=\"50%\">
        ";
        // line 240
        $this->displayBlock('admin_user_main_assign_groups', $context, $blocks);
        // line 245
        echo "    </td>
    </tr>
</table>

</form>

";
        // line 251
        $this->loadTemplate("@__main__/bottomnaviitem.html.twig", "@__main__/user_main.html.twig", 251)->display($context);
        // line 252
        $this->loadTemplate("@__main__/bottomitem.html.twig", "@__main__/user_main.html.twig", 252)->display($context);
    }

    // line 41
    public function block_admin_user_main_form($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 42
        echo "            ";
        if (($context["sSaveError"] ?? null)) {
            // line 43
            echo "                <tr>
                    <td></td>
                    <td class=\"errorbox\">";
            // line 45
            echo $this->extensions['OxidEsales\Twig\Extensions\TranslateExtension']->translate(["ident" => ($context["sSaveError"] ?? null)]);
            echo "</td>
                </tr>
            ";
        }
        // line 48
        echo "            <tr>
                <td class=\"edittext\" width=\"90\">
                ";
        // line 50
        echo $this->extensions['OxidEsales\Twig\Extensions\TranslateExtension']->translate(["ident" => "GENERAL_ACTIVE"]);
        echo "
                </td>
                <td class=\"edittext\">
                <input class=\"edittext\" type=\"checkbox\" name=\"editval[oxuser__oxactive]\" value='1' ";
        // line 53
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["edit"] ?? null), "oxuser__oxactive", [], "any", false, false, false, 53), "value", [], "any", false, false, false, 53) == 1)) {
            echo "checked";
        }
        echo " ";
        echo twig_escape_filter($this->env, ($context["readonly"] ?? null), "html", null, true);
        echo ">
                ";
        // line 54
        $this->loadTemplate("@__main__/inputhelp.html.twig", "@__main__/user_main.html.twig", 54)->display(twig_array_merge($context, ["sHelpId" => $this->extensions['OxidEsales\Twig\Extensions\InputHelpExtension']->getHelpId("HELP_GENERAL_ACTIVE"), "sHelpText" => $this->extensions['OxidEsales\Twig\Extensions\InputHelpExtension']->getHelpText("HELP_GENERAL_ACTIVE")]));
        // line 55
        echo "                </td>
            </tr>
            <tr>
                <td class=\"edittext\">
                ";
        // line 59
        echo $this->extensions['OxidEsales\Twig\Extensions\TranslateExtension']->translate(["ident" => "USER_MAIN_RIGHTS"]);
        echo "
                </td>
                <td class=\"edittext\">
                    <select name=\"editval[oxuser__oxrights]\" class=\"editinput\" ";
        // line 62
        echo twig_escape_filter($this->env, ($context["readonly"] ?? null), "html", null, true);
        echo ">
                    ";
        // line 63
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["rights"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["shopitem"]) {
            // line 64
            echo "                    <option value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["shopitem"], "id", [], "any", false, false, false, 64), "html", null, true);
            echo "\" ";
            if (twig_get_attribute($this->env, $this->source, $context["shopitem"], "selected", [], "any", false, false, false, 64)) {
                echo "SELECTED";
            }
            echo ">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["shopitem"], "name", [], "any", false, false, false, 64), "html", null, true);
            echo "</option>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['shopitem'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 66
        echo "                    </select>
                    ";
        // line 67
        $this->loadTemplate("@__main__/inputhelp.html.twig", "@__main__/user_main.html.twig", 67)->display(twig_array_merge($context, ["sHelpId" => $this->extensions['OxidEsales\Twig\Extensions\InputHelpExtension']->getHelpId("HELP_USER_MAIN_RIGHTS"), "sHelpText" => $this->extensions['OxidEsales\Twig\Extensions\InputHelpExtension']->getHelpText("HELP_USER_MAIN_RIGHTS")]));
        // line 68
        echo "                </td>
            </tr>
            <tr>
                <td class=\"edittext\">
                ";
        // line 72
        echo $this->extensions['OxidEsales\Twig\Extensions\TranslateExtension']->translate(["ident" => "USER_MAIN_EMAILLOGIN"]);
        echo "
                </td>
                <td class=\"edittext\">
                <input type=\"text\" class=\"editinput\" size=\"25\" maxlength=\"";
        // line 75
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["edit"] ?? null), "oxuser__oxusername", [], "any", false, false, false, 75), "fldmax_length", [], "any", false, false, false, 75), "html", null, true);
        echo "\" name=\"editval[oxuser__oxusername]\" value=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["edit"] ?? null), "oxuser__oxusername", [], "any", false, false, false, 75), "value", [], "any", false, false, false, 75), "html", null, true);
        echo "\" ";
        echo twig_escape_filter($this->env, ($context["readonly"] ?? null), "html", null, true);
        echo ">
                ";
        // line 76
        $this->loadTemplate("@__main__/inputhelp.html.twig", "@__main__/user_main.html.twig", 76)->display(twig_array_merge($context, ["sHelpId" => $this->extensions['OxidEsales\Twig\Extensions\InputHelpExtension']->getHelpId("HELP_USER_MAIN_EMAILLOGIN"), "sHelpText" => $this->extensions['OxidEsales\Twig\Extensions\InputHelpExtension']->getHelpText("HELP_USER_MAIN_EMAILLOGIN")]));
        // line 77
        echo "                </td>
            </tr>

            <tr>
                <td class=\"edittext\">
                ";
        // line 82
        echo $this->extensions['OxidEsales\Twig\Extensions\TranslateExtension']->translate(["ident" => "USER_MAIN_CUSTOMERSNR"]);
        echo "
                </td>
                <td class=\"edittext\">
                <input type=\"text\" class=\"editinput\" size=\"15\" maxlength=\"";
        // line 85
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["edit"] ?? null), "oxuser__oxcustnr", [], "any", false, false, false, 85), "fldmax_length", [], "any", false, false, false, 85), "html", null, true);
        echo "\" name=\"editval[oxuser__oxcustnr]\" value=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["edit"] ?? null), "oxuser__oxcustnr", [], "any", false, false, false, 85), "value", [], "any", false, false, false, 85), "html", null, true);
        echo "\" ";
        echo twig_escape_filter($this->env, ($context["readonly"] ?? null), "html", null, true);
        echo ">
                ";
        // line 86
        $this->loadTemplate("@__main__/inputhelp.html.twig", "@__main__/user_main.html.twig", 86)->display(twig_array_merge($context, ["sHelpId" => $this->extensions['OxidEsales\Twig\Extensions\InputHelpExtension']->getHelpId("HELP_USER_MAIN_CUSTOMERSNR"), "sHelpText" => $this->extensions['OxidEsales\Twig\Extensions\InputHelpExtension']->getHelpText("HELP_USER_MAIN_CUSTOMERSNR")]));
        // line 87
        echo "                </td>
            </tr>
            <tr>
                <td class=\"edittext\">
                ";
        // line 91
        echo $this->extensions['OxidEsales\Twig\Extensions\TranslateExtension']->translate(["ident" => "GENERAL_BILLSAL"]);
        echo "
                </td>
                <td class=\"edittext\">
                  <select name=\"editval[oxuser__oxsal]\" class=\"editinput\" ";
        // line 94
        echo twig_escape_filter($this->env, ($context["readonly"] ?? null), "html", null, true);
        echo ">
                    <option value=\"MR\"  ";
        // line 95
        if ((twig_lower_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["edit"] ?? null), "oxuser__oxsal", [], "any", false, false, false, 95), "value", [], "any", false, false, false, 95)) == "mr")) {
            echo "SELECTED";
        }
        echo ">";
        echo $this->extensions['OxidEsales\Twig\Extensions\TranslateExtension']->translate(["ident" => "MR"]);
        echo "</option>
                    <option value=\"MRS\" ";
        // line 96
        if ((twig_lower_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["edit"] ?? null), "oxuser__oxsal", [], "any", false, false, false, 96), "value", [], "any", false, false, false, 96)) == "mrs")) {
            echo "SELECTED";
        }
        echo ">";
        echo $this->extensions['OxidEsales\Twig\Extensions\TranslateExtension']->translate(["ident" => "MRS"]);
        echo "</option>
                  </select>
                ";
        // line 98
        $this->loadTemplate("@__main__/inputhelp.html.twig", "@__main__/user_main.html.twig", 98)->display(twig_array_merge($context, ["sHelpId" => $this->extensions['OxidEsales\Twig\Extensions\InputHelpExtension']->getHelpId("HELP_GENERAL_BILLSAL"), "sHelpText" => $this->extensions['OxidEsales\Twig\Extensions\InputHelpExtension']->getHelpText("HELP_GENERAL_BILLSAL")]));
        // line 99
        echo "                </td>
            </tr>
            <tr>
                <td class=\"edittext\">
                ";
        // line 103
        echo $this->extensions['OxidEsales\Twig\Extensions\TranslateExtension']->translate(["ident" => "USER_MAIN_NAME"]);
        echo "
                </td>
                <td class=\"edittext\">
                <input type=\"text\" class=\"editinput\" size=\"10\" maxlength=\"";
        // line 106
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["edit"] ?? null), "oxuser__oxfname", [], "any", false, false, false, 106), "fldmax_length", [], "any", false, false, false, 106), "html", null, true);
        echo "\" name=\"editval[oxuser__oxfname]\" value=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["edit"] ?? null), "oxuser__oxfname", [], "any", false, false, false, 106), "value", [], "any", false, false, false, 106), "html", null, true);
        echo "\" ";
        echo twig_escape_filter($this->env, ($context["readonly"] ?? null), "html", null, true);
        echo ">
                <input type=\"text\" class=\"editinput\" size=\"20\" maxlength=\"";
        // line 107
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["edit"] ?? null), "oxuser__oxlname", [], "any", false, false, false, 107), "fldmax_length", [], "any", false, false, false, 107), "html", null, true);
        echo "\" name=\"editval[oxuser__oxlname]\" value=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["edit"] ?? null), "oxuser__oxlname", [], "any", false, false, false, 107), "value", [], "any", false, false, false, 107), "html", null, true);
        echo "\" ";
        echo twig_escape_filter($this->env, ($context["readonly"] ?? null), "html", null, true);
        echo ">
                ";
        // line 108
        $this->loadTemplate("@__main__/inputhelp.html.twig", "@__main__/user_main.html.twig", 108)->display(twig_array_merge($context, ["sHelpId" => $this->extensions['OxidEsales\Twig\Extensions\InputHelpExtension']->getHelpId("HELP_USER_MAIN_NAME"), "sHelpText" => $this->extensions['OxidEsales\Twig\Extensions\InputHelpExtension']->getHelpText("HELP_USER_MAIN_NAME")]));
        // line 109
        echo "                </td>
            </tr>
            <tr>
                <td class=\"edittext\">
                ";
        // line 113
        echo $this->extensions['OxidEsales\Twig\Extensions\TranslateExtension']->translate(["ident" => "GENERAL_COMPANY"]);
        echo "
                </td>
                <td class=\"edittext\">
                <input type=\"text\" class=\"editinput\" size=\"37\" maxlength=\"";
        // line 116
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["edit"] ?? null), "oxuser__oxcompany", [], "any", false, false, false, 116), "fldmax_length", [], "any", false, false, false, 116), "html", null, true);
        echo "\" name=\"editval[oxuser__oxcompany]\" value=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["edit"] ?? null), "oxuser__oxcompany", [], "any", false, false, false, 116), "value", [], "any", false, false, false, 116), "html", null, true);
        echo "\" ";
        echo twig_escape_filter($this->env, ($context["readonly"] ?? null), "html", null, true);
        echo ">
                ";
        // line 117
        $this->loadTemplate("@__main__/inputhelp.html.twig", "@__main__/user_main.html.twig", 117)->display(twig_array_merge($context, ["sHelpId" => $this->extensions['OxidEsales\Twig\Extensions\InputHelpExtension']->getHelpId("HELP_GENERAL_COMPANY"), "sHelpText" => $this->extensions['OxidEsales\Twig\Extensions\InputHelpExtension']->getHelpText("HELP_GENERAL_COMPANY")]));
        // line 118
        echo "                </td>
            </tr>
            <tr>
                <td class=\"edittext\">
                ";
        // line 122
        echo $this->extensions['OxidEsales\Twig\Extensions\TranslateExtension']->translate(["ident" => "USER_MAIN_STRNR"]);
        echo "
                </td>
                <td class=\"edittext\">
                <input type=\"text\" class=\"editinput\" size=\"28\" maxlength=\"";
        // line 125
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["edit"] ?? null), "oxuser__oxstreet", [], "any", false, false, false, 125), "fldmax_length", [], "any", false, false, false, 125), "html", null, true);
        echo "\" name=\"editval[oxuser__oxstreet]\" value=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["edit"] ?? null), "oxuser__oxstreet", [], "any", false, false, false, 125), "value", [], "any", false, false, false, 125), "html", null, true);
        echo "\" ";
        echo twig_escape_filter($this->env, ($context["readonly"] ?? null), "html", null, true);
        echo "> <input type=\"text\" class=\"editinput\" size=\"5\" maxlength=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["edit"] ?? null), "oxuser__oxstreetnr", [], "any", false, false, false, 125), "fldmax_length", [], "any", false, false, false, 125), "html", null, true);
        echo "\" name=\"editval[oxuser__oxstreetnr]\" value=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["edit"] ?? null), "oxuser__oxstreetnr", [], "any", false, false, false, 125), "value", [], "any", false, false, false, 125), "html", null, true);
        echo "\" ";
        echo twig_escape_filter($this->env, ($context["readonly"] ?? null), "html", null, true);
        echo ">
                ";
        // line 126
        $this->loadTemplate("@__main__/inputhelp.html.twig", "@__main__/user_main.html.twig", 126)->display(twig_array_merge($context, ["sHelpId" => $this->extensions['OxidEsales\Twig\Extensions\InputHelpExtension']->getHelpId("HELP_USER_MAIN_STRNR"), "sHelpText" => $this->extensions['OxidEsales\Twig\Extensions\InputHelpExtension']->getHelpText("HELP_USER_MAIN_STRNR")]));
        // line 127
        echo "                </td>
            </tr>
            <tr>
                <td class=\"edittext\">
                ";
        // line 131
        echo $this->extensions['OxidEsales\Twig\Extensions\TranslateExtension']->translate(["ident" => "GENERAL_ZIPCITY"]);
        echo "
                </td>
                <td class=\"edittext\">
                <input type=\"text\" class=\"editinput\" size=\"5\" maxlength=\"";
        // line 134
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["edit"] ?? null), "oxuser__oxzip", [], "any", false, false, false, 134), "fldmax_length", [], "any", false, false, false, 134), "html", null, true);
        echo "\" name=\"editval[oxuser__oxzip]\" value=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["edit"] ?? null), "oxuser__oxzip", [], "any", false, false, false, 134), "value", [], "any", false, false, false, 134), "html", null, true);
        echo "\" ";
        echo twig_escape_filter($this->env, ($context["readonly"] ?? null), "html", null, true);
        echo ">
                <input type=\"text\" class=\"editinput\" size=\"25\" maxlength=\"";
        // line 135
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["edit"] ?? null), "oxuser__oxcity", [], "any", false, false, false, 135), "fldmax_length", [], "any", false, false, false, 135), "html", null, true);
        echo "\" name=\"editval[oxuser__oxcity]\" value=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["edit"] ?? null), "oxuser__oxcity", [], "any", false, false, false, 135), "value", [], "any", false, false, false, 135), "html", null, true);
        echo "\" ";
        echo twig_escape_filter($this->env, ($context["readonly"] ?? null), "html", null, true);
        echo ">
                ";
        // line 136
        $this->loadTemplate("@__main__/inputhelp.html.twig", "@__main__/user_main.html.twig", 136)->display(twig_array_merge($context, ["sHelpId" => $this->extensions['OxidEsales\Twig\Extensions\InputHelpExtension']->getHelpId("HELP_GENERAL_ZIPCITY"), "sHelpText" => $this->extensions['OxidEsales\Twig\Extensions\InputHelpExtension']->getHelpText("HELP_GENERAL_ZIPCITY")]));
        // line 137
        echo "                </td>
            </tr>
            <tr>
                <td class=\"edittext\">
                ";
        // line 141
        echo $this->extensions['OxidEsales\Twig\Extensions\TranslateExtension']->translate(["ident" => "GENERAL_USTID"]);
        echo "
                </td>
                <td class=\"edittext\">
                <input type=\"text\" class=\"editinput\" size=\"15\" maxlength=\"";
        // line 144
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["edit"] ?? null), "oxuser__oxustid", [], "any", false, false, false, 144), "fldmax_length", [], "any", false, false, false, 144), "html", null, true);
        echo "\" name=\"editval[oxuser__oxustid]\" value=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["edit"] ?? null), "oxuser__oxustid", [], "any", false, false, false, 144), "value", [], "any", false, false, false, 144), "html", null, true);
        echo "\" ";
        echo twig_escape_filter($this->env, ($context["readonly"] ?? null), "html", null, true);
        echo ">
                ";
        // line 145
        $this->loadTemplate("@__main__/inputhelp.html.twig", "@__main__/user_main.html.twig", 145)->display(twig_array_merge($context, ["sHelpId" => $this->extensions['OxidEsales\Twig\Extensions\InputHelpExtension']->getHelpId("HELP_GENERAL_USTID"), "sHelpText" => $this->extensions['OxidEsales\Twig\Extensions\InputHelpExtension']->getHelpText("HELP_GENERAL_USTID")]));
        // line 146
        echo "                </td>
            </tr>
            <tr>
                <td class=\"edittext\">
                ";
        // line 150
        echo $this->extensions['OxidEsales\Twig\Extensions\TranslateExtension']->translate(["ident" => "GENERAL_EXTRAINFO"]);
        echo "
                </td>
                <td class=\"edittext\">
                <input type=\"text\" class=\"editinput\" size=\"37\" maxlength=\"";
        // line 153
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["edit"] ?? null), "oxuser__oxaddinfo", [], "any", false, false, false, 153), "fldmax_length", [], "any", false, false, false, 153), "html", null, true);
        echo "\" name=\"editval[oxuser__oxaddinfo]\" value=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["edit"] ?? null), "oxuser__oxaddinfo", [], "any", false, false, false, 153), "value", [], "any", false, false, false, 153), "html", null, true);
        echo "\" ";
        echo twig_escape_filter($this->env, ($context["readonly"] ?? null), "html", null, true);
        echo ">
                ";
        // line 154
        $this->loadTemplate("@__main__/inputhelp.html.twig", "@__main__/user_main.html.twig", 154)->display(twig_array_merge($context, ["sHelpId" => $this->extensions['OxidEsales\Twig\Extensions\InputHelpExtension']->getHelpId("HELP_GENERAL_EXTRAINFO"), "sHelpText" => $this->extensions['OxidEsales\Twig\Extensions\InputHelpExtension']->getHelpText("HELP_GENERAL_EXTRAINFO")]));
        // line 155
        echo "                </td>
            </tr>
            <tr>
                <td class=\"edittext\">
                ";
        // line 159
        echo $this->extensions['OxidEsales\Twig\Extensions\TranslateExtension']->translate(["ident" => "GENERAL_STATE"]);
        echo "
                </td>
                <td class=\"edittext\">
                <input type=\"text\" class=\"editinput\" size=\"15\" maxlength=\"";
        // line 162
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["edit"] ?? null), "oxuser__oxstateid", [], "any", false, false, false, 162), "fldmax_length", [], "any", false, false, false, 162), "html", null, true);
        echo "\" name=\"editval[oxuser__oxstateid]\" value=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["edit"] ?? null), "oxuser__oxstateid", [], "any", false, false, false, 162), "value", [], "any", false, false, false, 162), "html", null, true);
        echo "\" ";
        echo twig_escape_filter($this->env, ($context["readonly"] ?? null), "html", null, true);
        echo ">
                ";
        // line 163
        $this->loadTemplate("@__main__/inputhelp.html.twig", "@__main__/user_main.html.twig", 163)->display(twig_array_merge($context, ["sHelpId" => $this->extensions['OxidEsales\Twig\Extensions\InputHelpExtension']->getHelpId("HELP_GENERAL_STATE"), "sHelpText" => $this->extensions['OxidEsales\Twig\Extensions\InputHelpExtension']->getHelpText("HELP_GENERAL_STATE")]));
        // line 164
        echo "                </td>
            </tr>
            <tr>
                <td class=\"edittext\">
                ";
        // line 168
        echo $this->extensions['OxidEsales\Twig\Extensions\TranslateExtension']->translate(["ident" => "GENERAL_COUNTRY"]);
        echo "
                </td>
                <td class=\"edittext\">
                 <select class=\"editinput\" name=\"editval[oxuser__oxcountryid]\" ";
        // line 171
        echo twig_escape_filter($this->env, ($context["readonly"] ?? null), "html", null, true);
        echo ">
                   ";
        // line 172
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["countrylist"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["oCountry"]) {
            // line 173
            echo "                   <option value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["oCountry"], "oxcountry__oxid", [], "any", false, false, false, 173), "value", [], "any", false, false, false, 173), "html", null, true);
            echo "\" ";
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["oCountry"], "oxcountry__oxid", [], "any", false, false, false, 173), "value", [], "any", false, false, false, 173) == twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["edit"] ?? null), "oxuser__oxcountryid", [], "any", false, false, false, 173), "value", [], "any", false, false, false, 173))) {
                echo "selected";
            }
            echo ">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["oCountry"], "oxcountry__oxtitle", [], "any", false, false, false, 173), "value", [], "any", false, false, false, 173), "html", null, true);
            echo "</option>
                   ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['oCountry'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 175
        echo "                 </select>
                 ";
        // line 176
        $this->loadTemplate("@__main__/inputhelp.html.twig", "@__main__/user_main.html.twig", 176)->display(twig_array_merge($context, ["sHelpId" => $this->extensions['OxidEsales\Twig\Extensions\InputHelpExtension']->getHelpId("HELP_GENERAL_COUNTRY"), "sHelpText" => $this->extensions['OxidEsales\Twig\Extensions\InputHelpExtension']->getHelpText("HELP_GENERAL_COUNTRY")]));
        // line 177
        echo "                </td>
            </tr>
            <tr>
                <td class=\"edittext\">
                ";
        // line 181
        echo $this->extensions['OxidEsales\Twig\Extensions\TranslateExtension']->translate(["ident" => "GENERAL_TELEPHONE"]);
        echo "
                </td>
                <td class=\"edittext\">
                <input type=\"text\" class=\"editinput\" size=\"20\" maxlength=\"";
        // line 184
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["edit"] ?? null), "oxuser__oxfon", [], "any", false, false, false, 184), "fldmax_length", [], "any", false, false, false, 184), "html", null, true);
        echo "\" name=\"editval[oxuser__oxfon]\" value=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["edit"] ?? null), "oxuser__oxfon", [], "any", false, false, false, 184), "value", [], "any", false, false, false, 184), "html", null, true);
        echo "\" ";
        echo twig_escape_filter($this->env, ($context["readonly"] ?? null), "html", null, true);
        echo ">
                ";
        // line 185
        $this->loadTemplate("@__main__/inputhelp.html.twig", "@__main__/user_main.html.twig", 185)->display(twig_array_merge($context, ["sHelpId" => $this->extensions['OxidEsales\Twig\Extensions\InputHelpExtension']->getHelpId("HELP_GENERAL_TELEPHONE"), "sHelpText" => $this->extensions['OxidEsales\Twig\Extensions\InputHelpExtension']->getHelpText("HELP_GENERAL_TELEPHONE")]));
        // line 186
        echo "                </td>
            </tr>
            <tr>
                <td class=\"edittext\">
                ";
        // line 190
        echo $this->extensions['OxidEsales\Twig\Extensions\TranslateExtension']->translate(["ident" => "GENERAL_FAX"]);
        echo "
                </td>
                <td class=\"edittext\">
                <input type=\"text\" class=\"editinput\" size=\"20\" maxlength=\"";
        // line 193
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["edit"] ?? null), "oxuser__oxfax", [], "any", false, false, false, 193), "fldmax_length", [], "any", false, false, false, 193), "html", null, true);
        echo "\" name=\"editval[oxuser__oxfax]\" value=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["edit"] ?? null), "oxuser__oxfax", [], "any", false, false, false, 193), "value", [], "any", false, false, false, 193), "html", null, true);
        echo "\" ";
        echo twig_escape_filter($this->env, ($context["readonly"] ?? null), "html", null, true);
        echo ">
                ";
        // line 194
        $this->loadTemplate("@__main__/inputhelp.html.twig", "@__main__/user_main.html.twig", 194)->display(twig_array_merge($context, ["sHelpId" => $this->extensions['OxidEsales\Twig\Extensions\InputHelpExtension']->getHelpId("HELP_GENERAL_FAX"), "sHelpText" => $this->extensions['OxidEsales\Twig\Extensions\InputHelpExtension']->getHelpText("HELP_GENERAL_FAX")]));
        // line 195
        echo "                </td>
            </tr>
            <tr>
                <td class=\"edittext\">
                ";
        // line 199
        echo $this->extensions['OxidEsales\Twig\Extensions\TranslateExtension']->translate(["ident" => "GENERAL_BIRTHDATE"]);
        echo "
                </td>
                <td class=\"edittext\">
                  <input type=\"text\" class=\"editinput\" size=\"3\" maxlength=\"2\" name=\"editval[oxuser__oxbirthdate][day]\" value=\"";
        // line 202
        echo twig_escape_filter($this->env, $this->extensions['OxidEsales\Twig\Extensions\Filters\RegexReplaceExtension']->regexReplace(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["edit"] ?? null), "oxuser__oxbirthdate", [], "any", false, false, false, 202), "value", [], "any", false, false, false, 202), "/^([0-9]{4})[-]([0-9]{1,2})[-]/", ""), "html", null, true);
        echo "\" ";
        echo twig_escape_filter($this->env, ($context["readonly"] ?? null), "html", null, true);
        echo ">
                  <input type=\"text\" class=\"editinput\" size=\"3\" maxlength=\"2\" name=\"editval[oxuser__oxbirthdate][month]\" value=\"";
        // line 203
        echo twig_escape_filter($this->env, $this->extensions['OxidEsales\Twig\Extensions\Filters\RegexReplaceExtension']->regexReplace($this->extensions['OxidEsales\Twig\Extensions\Filters\RegexReplaceExtension']->regexReplace(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["edit"] ?? null), "oxuser__oxbirthdate", [], "any", false, false, false, 203), "value", [], "any", false, false, false, 203), "/^([0-9]{4})[-]/", ""), "/[-]([0-9]{1,2})\$/", ""), "html", null, true);
        echo "\" ";
        echo twig_escape_filter($this->env, ($context["readonly"] ?? null), "html", null, true);
        echo ">
                  <input type=\"text\" class=\"editinput\" size=\"8\" maxlength=\"4\" name=\"editval[oxuser__oxbirthdate][year]\" value=\"";
        // line 204
        echo twig_escape_filter($this->env, $this->extensions['OxidEsales\Twig\Extensions\Filters\RegexReplaceExtension']->regexReplace(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["edit"] ?? null), "oxuser__oxbirthdate", [], "any", false, false, false, 204), "value", [], "any", false, false, false, 204), "/[-]([0-9]{1,2})[-]([0-9]{1,2})\$/", ""), "html", null, true);
        echo "\" ";
        echo twig_escape_filter($this->env, ($context["readonly"] ?? null), "html", null, true);
        echo ">
                  ";
        // line 205
        $this->loadTemplate("@__main__/inputhelp.html.twig", "@__main__/user_main.html.twig", 205)->display(twig_array_merge($context, ["sHelpId" => $this->extensions['OxidEsales\Twig\Extensions\InputHelpExtension']->getHelpId("HELP_GENERAL_BIRTHDATE"), "sHelpText" => $this->extensions['OxidEsales\Twig\Extensions\InputHelpExtension']->getHelpText("HELP_GENERAL_BIRTHDATE")]));
        // line 206
        echo "                </td>
            </tr>
            ";
        // line 208
        if ((($context["oxid"] ?? null) != "-1")) {
            // line 209
            echo "            <tr>
                <td class=\"edittext\"><br>
                ";
            // line 211
            echo $this->extensions['OxidEsales\Twig\Extensions\TranslateExtension']->translate(["ident" => "USER_MAIN_HASPASSWORD"]);
            echo "
                </td>
                <td class=\"edittext\"><br>
                ";
            // line 214
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["edit"] ?? null), "oxuser__oxpassword", [], "any", false, false, false, 214), "value", [], "any", false, false, false, 214)) {
                echo $this->extensions['OxidEsales\Twig\Extensions\TranslateExtension']->translate(["ident" => "GENERAL_YES"]);
            } else {
                echo $this->extensions['OxidEsales\Twig\Extensions\TranslateExtension']->translate(["ident" => "GENERAL_NO"]);
            }
            // line 215
            echo "                ";
            $this->loadTemplate("@__main__/inputhelp.html.twig", "@__main__/user_main.html.twig", 215)->display(twig_array_merge($context, ["sHelpId" => $this->extensions['OxidEsales\Twig\Extensions\InputHelpExtension']->getHelpId("HELP_USER_MAIN_HASPASSWORD"), "sHelpText" => $this->extensions['OxidEsales\Twig\Extensions\InputHelpExtension']->getHelpText("HELP_USER_MAIN_HASPASSWORD")]));
            // line 216
            echo "                </td>
            </tr>
            ";
        }
        // line 219
        echo "            <tr>
                <td class=\"edittext\"><br>
                ";
        // line 221
        echo $this->extensions['OxidEsales\Twig\Extensions\TranslateExtension']->translate(["ident" => "USER_MAIN_NEWPASSWORD"]);
        echo "
                </td>
                <td class=\"edittext\"><br>
                <input type=\"password\" class=\"editinput\" size=\"15\" name=\"newPassword\" value=\"\" ";
        // line 224
        echo twig_escape_filter($this->env, ($context["readonly"] ?? null), "html", null, true);
        echo ">
                ";
        // line 225
        $this->loadTemplate("@__main__/inputhelp.html.twig", "@__main__/user_main.html.twig", 225)->display(twig_array_merge($context, ["sHelpId" => $this->extensions['OxidEsales\Twig\Extensions\InputHelpExtension']->getHelpId("HELP_USER_MAIN_NEWPASSWORD"), "sHelpText" => $this->extensions['OxidEsales\Twig\Extensions\InputHelpExtension']->getHelpText("HELP_USER_MAIN_NEWPASSWORD")]));
        // line 226
        echo "                </td>
            </tr>
        ";
    }

    // line 240
    public function block_admin_user_main_assign_groups($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 241
        echo "            ";
        if ((($context["oxid"] ?? null) != "-1")) {
            // line 242
            echo "               <input ";
            echo twig_escape_filter($this->env, ($context["readonly"] ?? null), "html", null, true);
            echo " type=\"button\" value=\"";
            echo $this->extensions['OxidEsales\Twig\Extensions\TranslateExtension']->translate(["ident" => "GENERAL_ASSIGNGROUPS"]);
            echo "\" class=\"edittext\" onclick=\"JavaScript:showDialog('&cl=user_main&aoc=1&oxid=";
            echo twig_escape_filter($this->env, ($context["oxid"] ?? null), "html", null, true);
            echo "');\">
            ";
        }
        // line 244
        echo "        ";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@__main__/user_main.html.twig";
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
        return array (  664 => 244,  654 => 242,  651 => 241,  647 => 240,  641 => 226,  639 => 225,  635 => 224,  629 => 221,  625 => 219,  620 => 216,  617 => 215,  611 => 214,  605 => 211,  601 => 209,  599 => 208,  595 => 206,  593 => 205,  587 => 204,  581 => 203,  575 => 202,  569 => 199,  563 => 195,  561 => 194,  553 => 193,  547 => 190,  541 => 186,  539 => 185,  531 => 184,  525 => 181,  519 => 177,  517 => 176,  514 => 175,  499 => 173,  495 => 172,  491 => 171,  485 => 168,  479 => 164,  477 => 163,  469 => 162,  463 => 159,  457 => 155,  455 => 154,  447 => 153,  441 => 150,  435 => 146,  433 => 145,  425 => 144,  419 => 141,  413 => 137,  411 => 136,  403 => 135,  395 => 134,  389 => 131,  383 => 127,  381 => 126,  367 => 125,  361 => 122,  355 => 118,  353 => 117,  345 => 116,  339 => 113,  333 => 109,  331 => 108,  323 => 107,  315 => 106,  309 => 103,  303 => 99,  301 => 98,  292 => 96,  284 => 95,  280 => 94,  274 => 91,  268 => 87,  266 => 86,  258 => 85,  252 => 82,  245 => 77,  243 => 76,  235 => 75,  229 => 72,  223 => 68,  221 => 67,  218 => 66,  203 => 64,  199 => 63,  195 => 62,  189 => 59,  183 => 55,  181 => 54,  173 => 53,  167 => 50,  163 => 48,  157 => 45,  153 => 43,  150 => 42,  146 => 41,  142 => 252,  140 => 251,  132 => 245,  130 => 240,  118 => 233,  112 => 229,  110 => 41,  100 => 34,  96 => 33,  90 => 30,  86 => 29,  79 => 25,  75 => 24,  71 => 23,  68 => 22,  64 => 20,  60 => 18,  58 => 17,  41 => 2,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@__main__/user_main.html.twig", "/var/www/html/source/Application/views/admin_twig/tpl/user_main.html.twig");
    }
}
