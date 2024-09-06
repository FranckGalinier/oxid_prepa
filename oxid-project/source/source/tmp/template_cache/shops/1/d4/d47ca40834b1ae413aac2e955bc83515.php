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

/* @__main__/payment_main.html.twig */
class __TwigTemplate_632556a6cdb6330791d6bbe191474ad9 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'admin_payment_main_form' => [$this, 'block_admin_payment_main_form'],
            'admin_payment_main_fields' => [$this, 'block_admin_payment_main_fields'],
            'admin_payment_main_assign_groups' => [$this, 'block_admin_payment_main_assign_groups'],
            'admin_payment_main_editor' => [$this, 'block_admin_payment_main_editor'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        if (((($context["shopid"] ?? null) != "1") || ($context["readonly"] ?? null))) {
            // line 2
            echo "    ";
            $context["readonly"] = "readonly disabled";
        } else {
            // line 4
            echo "    ";
            $context["readonly"] = "";
        }
        // line 6
        echo "
";
        // line 7
        $this->loadTemplate("@__main__/headitem.html.twig", "@__main__/payment_main.html.twig", 7)->display(twig_array_merge($context, ["title" => $this->extensions['OxidEsales\Twig\Extensions\Filters\TranslateExtension']->translate("GENERAL_ADMIN_TITLE")]));
        // line 8
        echo "
<form name=\"transfer\" id=\"transfer\" action=\"";
        // line 9
        echo twig_get_attribute($this->env, $this->source, ($context["oViewConf"] ?? null), "getSelfLink", [], "method", false, false, false, 9);
        echo "\" method=\"post\">
    ";
        // line 10
        echo twig_get_attribute($this->env, $this->source, ($context["oViewConf"] ?? null), "getHiddenSid", [], "method", false, false, false, 10);
        echo "
    <input type=\"hidden\" name=\"oxid\" value=\"";
        // line 11
        echo twig_escape_filter($this->env, ($context["oxid"] ?? null), "html", null, true);
        echo "\">
    <input type=\"hidden\" name=\"cl\" value=\"payment_main\">
    <input type=\"hidden\" name=\"editlanguage\" value=\"";
        // line 13
        echo twig_escape_filter($this->env, ($context["editlanguage"] ?? null), "html", null, true);
        echo "\">
</form>

<form name=\"myedit\" id=\"myedit\" action=\"";
        // line 16
        echo twig_get_attribute($this->env, $this->source, ($context["oViewConf"] ?? null), "getSelfLink", [], "method", false, false, false, 16);
        echo "\" method=\"post\" onSubmit=\"copyLongDesc( 'oxpayments__oxlongdesc' );\">
";
        // line 17
        echo twig_get_attribute($this->env, $this->source, ($context["oViewConf"] ?? null), "getHiddenSid", [], "method", false, false, false, 17);
        echo "
<input type=\"hidden\" name=\"cl\" value=\"payment_main\">
<input type=\"hidden\" name=\"fnc\" value=\"\">
<input type=\"hidden\" name=\"oxid\" value=\"";
        // line 20
        echo twig_escape_filter($this->env, ($context["oxid"] ?? null), "html", null, true);
        echo "\">
<input type=\"hidden\" name=\"editval[oxpayments__oxid]\" value=\"";
        // line 21
        echo twig_escape_filter($this->env, ($context["oxid"] ?? null), "html", null, true);
        echo "\">
<input type=\"hidden\" name=\"editval[oxpayments__oxlongdesc]\" value=\"\">

<table cellspacing=\"0\" cellpadding=\"0\" border=\"0\" width=\"98%\">

<tr>

    <td valign=\"top\" class=\"edittext\">

        <table cellspacing=\"0\" cellpadding=\"0\" border=\"0\">
        ";
        // line 31
        $this->displayBlock('admin_payment_main_form', $context, $blocks);
        // line 126
        echo "        ";
        $this->displayBlock('admin_payment_main_fields', $context, $blocks);
        // line 158
        echo "

        <tr>
            <td class=\"edittext\">
            </td>
            <td class=\"edittext\"><br>
            <input type=\"submit\" class=\"edittext\" name=\"save\" value=\"";
        // line 164
        echo $this->extensions['OxidEsales\Twig\Extensions\TranslateExtension']->translate(["ident" => "GENERAL_SAVE"]);
        echo "\" onClick=\"Javascript:document.myedit.fnc.value='save'\"\" ";
        echo twig_escape_filter($this->env, ($context["readonly"] ?? null), "html", null, true);
        echo " style=\"width: 150px;\">
            </td>
        </tr>
        <tr>
            <td class=\"edittext\">
            </td>
            <td class=\"edittext\"><br>
                ";
        // line 171
        $this->loadTemplate("@__main__/language_edit.html.twig", "@__main__/payment_main.html.twig", 171)->display($context);
        // line 172
        echo "            </td>
        </tr>

        </table>
    </td>
    <!-- Anfang rechte Seite -->
    <td valign=\"top\" class=\"edittext\" align=\"left\" width=\"50%\">
        ";
        // line 179
        $this->displayBlock('admin_payment_main_assign_groups', $context, $blocks);
        // line 184
        echo "
        ";
        // line 185
        $this->displayBlock('admin_payment_main_editor', $context, $blocks);
        // line 193
        echo "    </td>

    </tr>
</table>

</form>

";
        // line 200
        $this->loadTemplate("@__main__/bottomnaviitem.html.twig", "@__main__/payment_main.html.twig", 200)->display($context);
        // line 201
        echo "
";
        // line 202
        $this->loadTemplate("@__main__/bottomitem.html.twig", "@__main__/payment_main.html.twig", 202)->display($context);
    }

    // line 31
    public function block_admin_payment_main_form($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 32
        echo "            <tr>
                <td class=\"edittext\" width=\"70\">
                ";
        // line 34
        echo $this->extensions['OxidEsales\Twig\Extensions\TranslateExtension']->translate(["ident" => "GENERAL_ACTIVE"]);
        echo "
                </td>
                <td class=\"edittext\">
                <input class=\"edittext\" type=\"checkbox\" name=\"editval[oxpayments__oxactive]\" value='1' ";
        // line 37
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["edit"] ?? null), "oxpayments__oxactive", [], "any", false, false, false, 37), "value", [], "any", false, false, false, 37) == 1)) {
            echo "checked";
        }
        echo " ";
        echo twig_escape_filter($this->env, ($context["readonly"] ?? null), "html", null, true);
        echo ">
                ";
        // line 38
        $this->loadTemplate("@__main__/inputhelp.html.twig", "@__main__/payment_main.html.twig", 38)->display(twig_array_merge($context, ["sHelpId" => $this->extensions['OxidEsales\Twig\Extensions\InputHelpExtension']->getHelpId("HELP_GENERAL_ACTIVE"), "sHelpText" => $this->extensions['OxidEsales\Twig\Extensions\InputHelpExtension']->getHelpText("HELP_GENERAL_ACTIVE")]));
        // line 39
        echo "                </td>
            </tr>
            <tr>
                <td class=\"edittext\" width=\"100\">
                ";
        // line 43
        echo $this->extensions['OxidEsales\Twig\Extensions\TranslateExtension']->translate(["ident" => "PAYMENT_MAIN_NAME"]);
        echo "
                </td>
                <td class=\"edittext\">
                <input type=\"text\" class=\"editinput\" size=\"25\" maxlength=\"";
        // line 46
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["edit"] ?? null), "oxpayments__oxdesc", [], "any", false, false, false, 46), "fldmax_length", [], "any", false, false, false, 46), "html", null, true);
        echo "\" name=\"editval[oxpayments__oxdesc]\" value=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["edit"] ?? null), "oxpayments__oxdesc", [], "any", false, false, false, 46), "value", [], "any", false, false, false, 46), "html", null, true);
        echo "\" ";
        echo twig_escape_filter($this->env, ($context["readonly"] ?? null), "html", null, true);
        echo ">
                ";
        // line 47
        $this->loadTemplate("@__main__/inputhelp.html.twig", "@__main__/payment_main.html.twig", 47)->display(twig_array_merge($context, ["sHelpId" => $this->extensions['OxidEsales\Twig\Extensions\InputHelpExtension']->getHelpId("HELP_PAYMENT_MAIN_NAME"), "sHelpText" => $this->extensions['OxidEsales\Twig\Extensions\InputHelpExtension']->getHelpText("HELP_PAYMENT_MAIN_NAME")]));
        // line 48
        echo "                </td>
            </tr>
            <tr>
                <td class=\"edittext\">
                ";
        // line 52
        echo $this->extensions['OxidEsales\Twig\Extensions\TranslateExtension']->translate(["ident" => "PAYMENT_MAIN_ADDPRICE"]);
        echo " (";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["oActCur"] ?? null), "sign", [], "any", false, false, false, 52), "html", null, true);
        echo ")
                </td>
                <td class=\"edittext\">
                <input type=\"text\" class=\"editinput\" size=\"15\" maxlength=\"";
        // line 55
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["edit"] ?? null), "oxpayments__oxaddsum", [], "any", false, false, false, 55), "fldmax_length", [], "any", false, false, false, 55), "html", null, true);
        echo "\" name=\"editval[oxpayments__oxaddsum]\" value=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["edit"] ?? null), "oxpayments__oxaddsum", [], "any", false, false, false, 55), "value", [], "any", false, false, false, 55), "html", null, true);
        echo "\" ";
        echo twig_escape_filter($this->env, ($context["readonly"] ?? null), "html", null, true);
        echo ">
                    <select name=\"editval[oxpayments__oxaddsumtype]\" class=\"editinput\" ";
        // line 56
        $this->loadTemplate("@__main__/help.html.twig", "@__main__/payment_main.html.twig", 56)->display(twig_array_merge($context, ["helpid" => "addsumtype"]));
        echo " ";
        echo twig_escape_filter($this->env, ($context["readonly"] ?? null), "html", null, true);
        echo ">
                    ";
        // line 57
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["sumtype"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["sum"]) {
            // line 58
            echo "                    <option value=\"";
            echo twig_escape_filter($this->env, $context["sum"], "html", null, true);
            echo "\" ";
            if (($context["sum"] == twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["edit"] ?? null), "oxpayments__oxaddsumtype", [], "any", false, false, false, 58), "value", [], "any", false, false, false, 58))) {
                echo "SELECTED";
            }
            echo ">";
            echo twig_escape_filter($this->env, $context["sum"], "html", null, true);
            echo "</option>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['sum'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 60
        echo "                    </select>
                ";
        // line 61
        $this->loadTemplate("@__main__/inputhelp.html.twig", "@__main__/payment_main.html.twig", 61)->display(twig_array_merge($context, ["sHelpId" => $this->extensions['OxidEsales\Twig\Extensions\InputHelpExtension']->getHelpId("HELP_PAYMENT_MAIN_ADDPRICE"), "sHelpText" => $this->extensions['OxidEsales\Twig\Extensions\InputHelpExtension']->getHelpText("HELP_PAYMENT_MAIN_ADDPRICE")]));
        // line 62
        echo "                </td>
            </tr>
            ";
        // line 64
        if ((($context["noticeoxaddsumrules"] ?? null) == 1)) {
            // line 65
            echo "            <tr>
                <td colspan=\"2\">
                    <div class=\"errorbox\">";
            // line 67
            echo $this->extensions['OxidEsales\Twig\Extensions\TranslateExtension']->translate(["ident" => "PAYMENT_MAIN_NOTICEDEFAULTVALUESSELECTED"]);
            echo "</div>
                </td>
            </tr>
            ";
        }
        // line 71
        echo "            <tr>
                <td class=\"edittext\" valign=\"top\">
                ";
        // line 73
        echo $this->extensions['OxidEsales\Twig\Extensions\TranslateExtension']->translate(["ident" => "PAYMENT_MAIN_ADDSUMRULES"]);
        echo ":
                </td>
                <td class=\"edittext\">
                  <table cellspacing=\"0\" cellpadding=\"0\" border=\"0\">
                    <tr>
                        <td><input type=\"checkbox\" name=\"oxpayments__oxaddsumrules[]\" value=\"1\" ";
        // line 78
        if (( !twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["edit"] ?? null), "oxpayments__oxaddsumrules", [], "any", false, false, false, 78), "value", [], "any", false, false, false, 78) || (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["edit"] ?? null), "oxpayments__oxaddsumrules", [], "any", false, false, false, 78), "value", [], "any", false, false, false, 78) & 1))) {
            echo "checked";
        }
        echo " ";
        echo twig_escape_filter($this->env, ($context["readonly"] ?? null), "html", null, true);
        echo "> ";
        echo $this->extensions['OxidEsales\Twig\Extensions\TranslateExtension']->translate(["ident" => "PAYMENT_MAIN_ADDSUMRULES_ALLGOODS"]);
        echo "</td>
                        <td rowspan=\"5\" valign=\"top\">";
        // line 79
        $this->loadTemplate("@__main__/inputhelp.html.twig", "@__main__/payment_main.html.twig", 79)->display(twig_array_merge($context, ["sHelpId" => $this->extensions['OxidEsales\Twig\Extensions\InputHelpExtension']->getHelpId("HELP_PAYMENT_MAIN_ADDSUMRULES"), "sHelpText" => $this->extensions['OxidEsales\Twig\Extensions\InputHelpExtension']->getHelpText("HELP_PAYMENT_MAIN_ADDSUMRULES")]));
        echo "</td>
                    </tr>
                    <tr><td><input type=\"checkbox\" name=\"oxpayments__oxaddsumrules[]\" value=\"2\" ";
        // line 81
        if (( !twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["edit"] ?? null), "oxpayments__oxaddsumrules", [], "any", false, false, false, 81), "value", [], "any", false, false, false, 81) || (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["edit"] ?? null), "oxpayments__oxaddsumrules", [], "any", false, false, false, 81), "value", [], "any", false, false, false, 81) & 2))) {
            echo "checked";
        }
        echo " ";
        echo twig_escape_filter($this->env, ($context["readonly"] ?? null), "html", null, true);
        echo "> ";
        echo $this->extensions['OxidEsales\Twig\Extensions\TranslateExtension']->translate(["ident" => "PAYMENT_MAIN_ADDSUMRULES_DISCOUNTS"]);
        echo "</td></tr>
                    <tr><td><input type=\"checkbox\" name=\"oxpayments__oxaddsumrules[]\" value=\"4\" ";
        // line 82
        if (( !twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["edit"] ?? null), "oxpayments__oxaddsumrules", [], "any", false, false, false, 82), "value", [], "any", false, false, false, 82) || (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["edit"] ?? null), "oxpayments__oxaddsumrules", [], "any", false, false, false, 82), "value", [], "any", false, false, false, 82) & 4))) {
            echo "checked";
        }
        echo " ";
        echo twig_escape_filter($this->env, ($context["readonly"] ?? null), "html", null, true);
        echo "> ";
        echo $this->extensions['OxidEsales\Twig\Extensions\TranslateExtension']->translate(["ident" => "PAYMENT_MAIN_ADDSUMRULES_VOUCHERS"]);
        echo "</td></tr>
                    <tr><td><input type=\"checkbox\" name=\"oxpayments__oxaddsumrules[]\" value=\"8\" ";
        // line 83
        if (( !twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["edit"] ?? null), "oxpayments__oxaddsumrules", [], "any", false, false, false, 83), "value", [], "any", false, false, false, 83) || (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["edit"] ?? null), "oxpayments__oxaddsumrules", [], "any", false, false, false, 83), "value", [], "any", false, false, false, 83) & 8))) {
            echo "checked";
        }
        echo " ";
        echo twig_escape_filter($this->env, ($context["readonly"] ?? null), "html", null, true);
        echo "> ";
        echo $this->extensions['OxidEsales\Twig\Extensions\TranslateExtension']->translate(["ident" => "PAYMENT_MAIN_ADDSUMRULES_SHIPCOSTS"]);
        echo "</td></tr>
                    <tr><td><input type=\"checkbox\" name=\"oxpayments__oxaddsumrules[]\" value=\"16\" ";
        // line 84
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["edit"] ?? null), "oxpayments__oxaddsumrules", [], "any", false, false, false, 84), "value", [], "any", false, false, false, 84) & 16)) {
            echo "checked";
        }
        echo " ";
        echo twig_escape_filter($this->env, ($context["readonly"] ?? null), "html", null, true);
        echo "> ";
        echo $this->extensions['OxidEsales\Twig\Extensions\TranslateExtension']->translate(["ident" => "PAYMENT_MAIN_ADDSUMRULES_GIFTS"]);
        echo "</td></tr>
                  </table>
                </td>
            </tr>
            <tr>
                <td class=\"edittext\">
                ";
        // line 90
        echo $this->extensions['OxidEsales\Twig\Extensions\TranslateExtension']->translate(["ident" => "PAYMENT_MAIN_FROMBONI"]);
        echo "
                </td>
                <td class=\"edittext\">
                <input type=\"text\" class=\"editinput\" size=\"25\" maxlength=\"";
        // line 93
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["edit"] ?? null), "oxpayments__oxfromboni", [], "any", false, false, false, 93), "fldmax_length", [], "any", false, false, false, 93), "html", null, true);
        echo "\" name=\"editval[oxpayments__oxfromboni]\" value=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["edit"] ?? null), "oxpayments__oxfromboni", [], "any", false, false, false, 93), "value", [], "any", false, false, false, 93), "html", null, true);
        echo "\" ";
        echo twig_escape_filter($this->env, ($context["readonly"] ?? null), "html", null, true);
        echo ">
                ";
        // line 94
        $this->loadTemplate("@__main__/inputhelp.html.twig", "@__main__/payment_main.html.twig", 94)->display(twig_array_merge($context, ["sHelpId" => $this->extensions['OxidEsales\Twig\Extensions\InputHelpExtension']->getHelpId("HELP_PAYMENT_MAIN_FROMBONI"), "sHelpText" => $this->extensions['OxidEsales\Twig\Extensions\InputHelpExtension']->getHelpText("HELP_PAYMENT_MAIN_FROMBONI")]));
        // line 95
        echo "                </td>
            </tr>
            <tr>
                <td class=\"edittext\">
                ";
        // line 99
        echo $this->extensions['OxidEsales\Twig\Extensions\TranslateExtension']->translate(["ident" => "PAYMENT_MAIN_AMOUNT"]);
        echo " (";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["oActCur"] ?? null), "sign", [], "any", false, false, false, 99), "html", null, true);
        echo ")
                </td>
                <td class=\"edittext\">
                ";
        // line 102
        echo $this->extensions['OxidEsales\Twig\Extensions\TranslateExtension']->translate(["ident" => "PAYMENT_MAIN_FROM"]);
        echo " <input type=\"text\" class=\"editinput\" size=\"5\" maxlength=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["edit"] ?? null), "oxpayments__oxfromamount", [], "any", false, false, false, 102), "fldmax_length", [], "any", false, false, false, 102), "html", null, true);
        echo "\" name=\"editval[oxpayments__oxfromamount]\" value=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["edit"] ?? null), "oxpayments__oxfromamount", [], "any", false, false, false, 102), "value", [], "any", false, false, false, 102), "html", null, true);
        echo "\" ";
        echo twig_escape_filter($this->env, ($context["readonly"] ?? null), "html", null, true);
        echo ">  ";
        echo $this->extensions['OxidEsales\Twig\Extensions\TranslateExtension']->translate(["ident" => "PAYMENT_MAIN_TILL"]);
        echo " <input type=\"text\" class=\"editinput\" size=\"5\" maxlength=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["edit"] ?? null), "oxpayments__oxtoamount", [], "any", false, false, false, 102), "fldmax_length", [], "any", false, false, false, 102), "html", null, true);
        echo "\" name=\"editval[oxpayments__oxtoamount]\" value=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["edit"] ?? null), "oxpayments__oxtoamount", [], "any", false, false, false, 102), "value", [], "any", false, false, false, 102), "html", null, true);
        echo "\" ";
        echo twig_escape_filter($this->env, ($context["readonly"] ?? null), "html", null, true);
        echo ">
                ";
        // line 103
        $this->loadTemplate("@__main__/inputhelp.html.twig", "@__main__/payment_main.html.twig", 103)->display(twig_array_merge($context, ["sHelpId" => $this->extensions['OxidEsales\Twig\Extensions\InputHelpExtension']->getHelpId("HELP_PAYMENT_MAIN_AMOUNT"), "sHelpText" => $this->extensions['OxidEsales\Twig\Extensions\InputHelpExtension']->getHelpText("HELP_PAYMENT_MAIN_AMOUNT")]));
        // line 104
        echo "                </td>
            </tr>

            <tr>
                <td class=\"edittext\">
                ";
        // line 109
        echo $this->extensions['OxidEsales\Twig\Extensions\TranslateExtension']->translate(["ident" => "PAYMENT_MAIN_SELECTED"]);
        echo "
                </td>
                <td class=\"edittext\">
                <input type=\"checkbox\" name=\"editval[oxpayments__oxchecked]\" value=\"1\" ";
        // line 112
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["edit"] ?? null), "oxpayments__oxchecked", [], "any", false, false, false, 112), "value", [], "any", false, false, false, 112)) {
            echo "checked";
        }
        echo " ";
        echo twig_escape_filter($this->env, ($context["readonly"] ?? null), "html", null, true);
        echo ">
                ";
        // line 113
        $this->loadTemplate("@__main__/inputhelp.html.twig", "@__main__/payment_main.html.twig", 113)->display(twig_array_merge($context, ["sHelpId" => $this->extensions['OxidEsales\Twig\Extensions\InputHelpExtension']->getHelpId("HELP_PAYMENT_MAIN_SELECTED"), "sHelpText" => $this->extensions['OxidEsales\Twig\Extensions\InputHelpExtension']->getHelpText("HELP_PAYMENT_MAIN_SELECTED")]));
        // line 114
        echo "                </td>
            </tr>
            <tr>
                <td class=\"edittext\">
                ";
        // line 118
        echo $this->extensions['OxidEsales\Twig\Extensions\TranslateExtension']->translate(["ident" => "GENERAL_SORT"]);
        echo "
                </td>
                <td class=\"edittext\">
                <input type=\"text\" class=\"editinput\" size=\"25\" maxlength=\"";
        // line 121
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["edit"] ?? null), "oxpayments__oxsort", [], "any", false, false, false, 121), "fldmax_length", [], "any", false, false, false, 121), "html", null, true);
        echo "\" name=\"editval[oxpayments__oxsort]\" value=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["edit"] ?? null), "oxpayments__oxsort", [], "any", false, false, false, 121), "value", [], "any", false, false, false, 121), "html", null, true);
        echo "\" ";
        echo twig_escape_filter($this->env, ($context["readonly"] ?? null), "html", null, true);
        echo ">
                ";
        // line 122
        $this->loadTemplate("@__main__/inputhelp.html.twig", "@__main__/payment_main.html.twig", 122)->display(twig_array_merge($context, ["sHelpId" => $this->extensions['OxidEsales\Twig\Extensions\InputHelpExtension']->getHelpId("HELP_PAYMENT_MAIN_SORT"), "sHelpText" => $this->extensions['OxidEsales\Twig\Extensions\InputHelpExtension']->getHelpText("HELP_PAYMENT_MAIN_SORT")]));
        // line 123
        echo "                </td>
            </tr>
        ";
    }

    // line 126
    public function block_admin_payment_main_fields($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 127
        echo "            <tr>
                <td class=\"edittext\" valign=\"top\">
                ";
        // line 129
        echo $this->extensions['OxidEsales\Twig\Extensions\TranslateExtension']->translate(["ident" => "GENERAL_FIELDS"]);
        echo "
                </td>
                <td class=\"edittext\">
                <select name=\"aFields[]\" size=\"3\" multiple class=\"editinput\" style=\"width: 150px;\" ";
        // line 132
        echo twig_escape_filter($this->env, ($context["readonly"] ?? null), "html", null, true);
        echo ">
                   ";
        // line 133
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["aFieldNames"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["sField"]) {
            // line 134
            echo "                    <option value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["sField"], "name", [], "any", false, false, false, 134), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["sField"], "name", [], "any", false, false, false, 134), "html", null, true);
            echo "</option>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['sField'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 136
        echo "                 </select>
                 ";
        // line 137
        $this->loadTemplate("@__main__/inputhelp.html.twig", "@__main__/payment_main.html.twig", 137)->display(twig_array_merge($context, ["sHelpId" => $this->extensions['OxidEsales\Twig\Extensions\InputHelpExtension']->getHelpId("HELP_GENERAL_FIELDS"), "sHelpText" => $this->extensions['OxidEsales\Twig\Extensions\InputHelpExtension']->getHelpText("HELP_GENERAL_FIELDS")]));
        // line 138
        echo "                </td>
            </tr>
            <tr>
                <td class=\"edittext\" valign=\"top\">
                </td>
                <td class=\"edittext\">
                    <input type=\"text\" class=\"edittext\" name=\"sAddField\" value=\"\" size=\"128\" style=\"width: 150px;\" ";
        // line 144
        echo twig_escape_filter($this->env, ($context["readonly"] ?? null), "html", null, true);
        echo ">
                    <br>
                    <input type=\"submit\" class=\"edittext\" name=\"save\" value=\"";
        // line 146
        echo $this->extensions['OxidEsales\Twig\Extensions\TranslateExtension']->translate(["ident" => "GENERAL_FIELDS_ADD"]);
        echo "\" onClick=\"Javascript:document.myedit.fnc.value='addfield'\"\" ";
        echo twig_escape_filter($this->env, ($context["readonly"] ?? null), "html", null, true);
        echo " style=\"width: 125px;\"><br>
                  <br>
                </td>
            </tr>
            <tr>
                <td class=\"edittext\" valign=\"top\">
                </td>
                <td class=\"edittext\">
                    <input type=\"submit\" class=\"edittext\" name=\"save\" value=\"";
        // line 154
        echo $this->extensions['OxidEsales\Twig\Extensions\TranslateExtension']->translate(["ident" => "GENERAL_FIELDS_DELETE"]);
        echo "\" onClick=\"Javascript:document.myedit.fnc.value='delfields'\"\" ";
        echo twig_escape_filter($this->env, ($context["readonly"] ?? null), "html", null, true);
        echo " style=\"width: 150px;\">
                </td>
            </tr>
        ";
    }

    // line 179
    public function block_admin_payment_main_assign_groups($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 180
        echo "            ";
        if ((($context["oxid"] ?? null) != "-1")) {
            // line 181
            echo "                <input ";
            echo twig_escape_filter($this->env, ($context["readonly"] ?? null), "html", null, true);
            echo " type=\"button\" value=\"";
            echo $this->extensions['OxidEsales\Twig\Extensions\TranslateExtension']->translate(["ident" => "GENERAL_ASSIGNGROUPS"]);
            echo "\" class=\"edittext\" style=\"margin-bottom:20px;\" onclick=\"JavaScript:showDialog('&cl=payment_main&aoc=1&oxid=";
            echo twig_escape_filter($this->env, ($context["oxid"] ?? null), "html", null, true);
            echo "');\">
            ";
        }
        // line 183
        echo "        ";
    }

    // line 185
    public function block_admin_payment_main_editor($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 186
        echo "            ";
        // line 187
        echo "                <div>
                    <p>";
        // line 188
        echo $this->extensions['OxidEsales\Twig\Extensions\TranslateExtension']->translate(["ident" => "PAYMENT_MAIN_LONGDESC"]);
        echo "</p>
                    ";
        // line 189
        echo ($context["editor"] ?? null);
        echo "
                </div>
            ";
        // line 192
        echo "        ";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@__main__/payment_main.html.twig";
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
        return array (  567 => 192,  562 => 189,  558 => 188,  555 => 187,  553 => 186,  549 => 185,  545 => 183,  535 => 181,  532 => 180,  528 => 179,  518 => 154,  505 => 146,  500 => 144,  492 => 138,  490 => 137,  487 => 136,  476 => 134,  472 => 133,  468 => 132,  462 => 129,  458 => 127,  454 => 126,  448 => 123,  446 => 122,  438 => 121,  432 => 118,  426 => 114,  424 => 113,  416 => 112,  410 => 109,  403 => 104,  401 => 103,  383 => 102,  375 => 99,  369 => 95,  367 => 94,  359 => 93,  353 => 90,  338 => 84,  328 => 83,  318 => 82,  308 => 81,  303 => 79,  293 => 78,  285 => 73,  281 => 71,  274 => 67,  270 => 65,  268 => 64,  264 => 62,  262 => 61,  259 => 60,  244 => 58,  240 => 57,  234 => 56,  226 => 55,  218 => 52,  212 => 48,  210 => 47,  202 => 46,  196 => 43,  190 => 39,  188 => 38,  180 => 37,  174 => 34,  170 => 32,  166 => 31,  162 => 202,  159 => 201,  157 => 200,  148 => 193,  146 => 185,  143 => 184,  141 => 179,  132 => 172,  130 => 171,  118 => 164,  110 => 158,  107 => 126,  105 => 31,  92 => 21,  88 => 20,  82 => 17,  78 => 16,  72 => 13,  67 => 11,  63 => 10,  59 => 9,  56 => 8,  54 => 7,  51 => 6,  47 => 4,  43 => 2,  41 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@__main__/payment_main.html.twig", "/var/www/html/source/Application/views/admin_twig/tpl/payment_main.html.twig");
    }
}
