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

/* @__main__/discount_main.html.twig */
class __TwigTemplate_e62eb82efd798dd5c3be50cc67daaf90 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'admin_discount_main_form' => [$this, 'block_admin_discount_main_form'],
            'admin_discount_main_form_itm' => [$this, 'block_admin_discount_main_form_itm'],
            'admin_discount_main_assign_countries' => [$this, 'block_admin_discount_main_assign_countries'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        $this->loadTemplate("@__main__/headitem.html.twig", "@__main__/discount_main.html.twig", 1)->display(twig_array_merge($context, ["title" => $this->extensions['OxidEsales\Twig\Extensions\Filters\TranslateExtension']->translate("GENERAL_ADMIN_TITLE")]));
        // line 2
        echo "
<script type=\"text/javascript\">
<!--
function ChangeDiscountType(oObj)
{   var oHObj = document.getElementById(\"itmart\");
    var oDObj = document.getElementById(\"editval[oxdiscount__oxaddsum]\");
    if ( oDObj != null && oHObj != null && oObj != null)
    {   if ( oObj.value == \"itm\")
        {   oHObj.style.display = \"\";
            oDObj.style.display = \"none\";
        }
        else
        {   oHObj.style.display = \"none\";
            oDObj.style.display = \"\";
        }
    }
}
window.onload = function ()
{
    ";
        // line 21
        if ((($context["updatelist"] ?? null) == 1)) {
            // line 22
            echo "    top.oxid.admin.updateList('";
            echo twig_escape_filter($this->env, ($context["oxid"] ?? null), "html", null, true);
            echo "');
    ";
        }
        // line 24
        echo "    var oField = top.oxid.admin.getLockTarget();
    top.oxid.admin.unlockSave();
    oField.onchange = oField.onkeyup = oField.onmouseout = top.oxid.admin.unlockSave;
}
//-->
</script>

";
        // line 31
        if (($context["readonly"] ?? null)) {
            // line 32
            echo "    ";
            $context["readonly"] = "readonly disabled";
        } else {
            // line 34
            echo "    ";
            $context["readonly"] = "";
        }
        // line 36
        echo "
<form name=\"transfer\" id=\"transfer\" action=\"";
        // line 37
        echo twig_get_attribute($this->env, $this->source, ($context["oViewConf"] ?? null), "getSelfLink", [], "method", false, false, false, 37);
        echo "\" method=\"post\">
    ";
        // line 38
        echo twig_get_attribute($this->env, $this->source, ($context["oViewConf"] ?? null), "getHiddenSid", [], "method", false, false, false, 38);
        echo "
    <input type=\"hidden\" name=\"oxid\" value=\"";
        // line 39
        echo twig_escape_filter($this->env, ($context["oxid"] ?? null), "html", null, true);
        echo "\">
    <input type=\"hidden\" name=\"oxidCopy\" value=\"";
        // line 40
        echo twig_escape_filter($this->env, ($context["oxid"] ?? null), "html", null, true);
        echo "\">
    <input type=\"hidden\" name=\"cl\" value=\"discount_main\">
    <input type=\"hidden\" name=\"language\" value=\"";
        // line 42
        echo twig_escape_filter($this->env, ($context["actlang"] ?? null), "html", null, true);
        echo "\">
</form>

<form name=\"myedit\" id=\"myedit\" action=\"";
        // line 45
        echo twig_get_attribute($this->env, $this->source, ($context["oViewConf"] ?? null), "getSelfLink", [], "method", false, false, false, 45);
        echo "\" method=\"post\">
";
        // line 46
        echo twig_get_attribute($this->env, $this->source, ($context["oViewConf"] ?? null), "getHiddenSid", [], "method", false, false, false, 46);
        echo "
<input type=\"hidden\" name=\"cl\" value=\"discount_main\">
<input type=\"hidden\" name=\"fnc\" value=\"\">
<input type=\"hidden\" name=\"oxid\" value=\"";
        // line 49
        echo twig_escape_filter($this->env, ($context["oxid"] ?? null), "html", null, true);
        echo "\">
<input type=\"hidden\" name=\"editval[oxdiscount__oxid]\" value=\"";
        // line 50
        echo twig_escape_filter($this->env, ($context["oxid"] ?? null), "html", null, true);
        echo "\">
<input type=\"hidden\" name=\"language\" value=\"";
        // line 51
        echo twig_escape_filter($this->env, ($context["actlang"] ?? null), "html", null, true);
        echo "\">

<table cellspacing=\"0\" cellpadding=\"0\" border=\"0\" width=\"98%\">
<tr>
    <td valign=\"top\" class=\"edittext\">

        <table cellspacing=\"0\" cellpadding=\"0\" border=\"0\">
            ";
        // line 58
        $this->displayBlock('admin_discount_main_form', $context, $blocks);
        // line 160
        echo "        <tr>
            <td class=\"edittext\">
            </td>
            <td class=\"edittext\"><br>
                ";
        // line 164
        $this->loadTemplate("@__main__/language_edit.html.twig", "@__main__/discount_main.html.twig", 164)->display($context);
        // line 165
        echo "            </td>
        </tr>
        <tr>
            <td class=\"edittext\">
            </td>
            <td class=\"edittext\"><br>
                <input type=\"submit\" class=\"edittext\" id=\"oLockButton\" name=\"save\" value=\"";
        // line 171
        echo $this->extensions['OxidEsales\Twig\Extensions\TranslateExtension']->translate(["ident" => "GENERAL_SAVE"]);
        echo "\" onClick=\"document.myedit.fnc.value='save'\"\" ";
        echo twig_escape_filter($this->env, ($context["readonly"] ?? null), "html", null, true);
        echo " ";
        if ( !twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["edit"] ?? null), "oxdiscount__oxsort", [], "any", false, false, false, 171), "value", [], "any", false, false, false, 171)) {
            echo "disabled";
        }
        echo "><br>
            </td>
        </tr>
        </table>
    </td>
    <td valign=\"top\" width=\"50%\">
        ";
        // line 177
        $this->displayBlock('admin_discount_main_assign_countries', $context, $blocks);
        // line 182
        echo "    </td>
    </tr>
</table>

</form>

";
        // line 188
        $this->loadTemplate("@__main__/bottomnaviitem.html.twig", "@__main__/discount_main.html.twig", 188)->display($context);
        // line 189
        $this->loadTemplate("@__main__/bottomitem.html.twig", "@__main__/discount_main.html.twig", 189)->display($context);
    }

    // line 58
    public function block_admin_discount_main_form($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 59
        echo "                <tr>
                    <td class=\"edittext\" width=\"120\">
                    ";
        // line 61
        echo $this->extensions['OxidEsales\Twig\Extensions\TranslateExtension']->translate(["ident" => "GENERAL_NAME"]);
        echo "
                    </td>
                    <td class=\"edittext\" width=\"250\">
                    <input type=\"text\" class=\"editinput\" size=\"50\" maxlength=\"";
        // line 64
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["edit"] ?? null), "oxdiscount__oxtitle", [], "any", false, false, false, 64), "fldmax_length", [], "any", false, false, false, 64), "html", null, true);
        echo "\" name=\"editval[oxdiscount__oxtitle]\" value=\"";
        if ((($context["oxid"] ?? null) == "-1")) {
            echo twig_escape_filter($this->env, ($context["discount_title"] ?? null), "html", null, true);
        } else {
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["edit"] ?? null), "oxdiscount__oxtitle", [], "any", false, false, false, 64), "value", [], "any", false, false, false, 64), "html", null, true);
        }
        echo "\" ";
        echo twig_escape_filter($this->env, ($context["readonly"] ?? null), "html", null, true);
        echo ">
                    ";
        // line 65
        $this->loadTemplate("@__main__/inputhelp.html.twig", "@__main__/discount_main.html.twig", 65)->display(twig_array_merge($context, ["sHelpId" => $this->extensions['OxidEsales\Twig\Extensions\InputHelpExtension']->getHelpId("HELP_GENERAL_NAME"), "sHelpText" => $this->extensions['OxidEsales\Twig\Extensions\InputHelpExtension']->getHelpText("HELP_GENERAL_NAME")]));
        // line 66
        echo "                    </td>
                </tr>
                <tr>
                    <td class=\"edittext\">
                        ";
        // line 70
        echo $this->extensions['OxidEsales\Twig\Extensions\TranslateExtension']->translate(["ident" => "DISCOUNT_MAIN_SORT"]);
        echo "
                    </td>
                    <td class=\"edittext\" colspan=\"2\">
                        <input type=\"text\" class=\"editinput\" size=\"25\" maxlength=\"";
        // line 73
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["edit"] ?? null), "oxdiscount__oxsort", [], "any", false, false, false, 73), "fldmax_length", [], "any", false, false, false, 73), "html", null, true);
        echo "\" id=\"oLockTarget\" name=\"editval[oxdiscount__oxsort]\" value=\"";
        if ((($context["oxid"] ?? null) == "-1")) {
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["oView"] ?? null), "getNextOxsort", [], "method", false, false, false, 73), "html", null, true);
        } else {
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["edit"] ?? null), "oxdiscount__oxsort", [], "any", false, false, false, 73), "value", [], "any", false, false, false, 73), "html", null, true);
        }
        echo "\" ";
        echo twig_escape_filter($this->env, ($context["readonly"] ?? null), "html", null, true);
        echo ">
                        ";
        // line 74
        $this->loadTemplate("@__main__/inputhelp.html.twig", "@__main__/discount_main.html.twig", 74)->display(twig_array_merge($context, ["sHelpId" => $this->extensions['OxidEsales\Twig\Extensions\InputHelpExtension']->getHelpId("HELP_DISCOUNT_MAIN_SORT"), "sHelpText" => $this->extensions['OxidEsales\Twig\Extensions\InputHelpExtension']->getHelpText("HELP_DISCOUNT_MAIN_SORT")]));
        // line 75
        echo "                    </td>
                </tr>
                <tr>
                    <td class=\"edittext\" width=\"120\">
                    ";
        // line 79
        echo $this->extensions['OxidEsales\Twig\Extensions\TranslateExtension']->translate(["ident" => "GENERAL_ALWAYS_ACTIVE"]);
        echo "
                    </td>
                    <td class=\"edittext\">
                    <input class=\"edittext\" type=\"checkbox\" name=\"editval[oxdiscount__oxactive]\" value='1' ";
        // line 82
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["edit"] ?? null), "oxdiscount__oxactive", [], "any", false, false, false, 82), "value", [], "any", false, false, false, 82) == 1)) {
            echo "checked";
        }
        echo " ";
        echo twig_escape_filter($this->env, ($context["readonly"] ?? null), "html", null, true);
        echo ">
                    ";
        // line 83
        $this->loadTemplate("@__main__/inputhelp.html.twig", "@__main__/discount_main.html.twig", 83)->display(twig_array_merge($context, ["sHelpId" => $this->extensions['OxidEsales\Twig\Extensions\InputHelpExtension']->getHelpId("HELP_GENERAL_ACTIVE"), "sHelpText" => $this->extensions['OxidEsales\Twig\Extensions\InputHelpExtension']->getHelpText("HELP_GENERAL_ACTIVE")]));
        // line 84
        echo "                    </td>
                </tr>
                <tr>
                    <td class=\"edittext\">
                    ";
        // line 88
        echo $this->extensions['OxidEsales\Twig\Extensions\TranslateExtension']->translate(["ident" => "GENERAL_ACTIVFROMTILL"]);
        echo "
                    </td>
                    <td class=\"edittext\">
                    <input type=\"text\" class=\"editinput\" size=\"27\" name=\"editval[oxdiscount__oxactivefrom]\" value=\"";
        // line 91
        echo twig_escape_filter($this->env, $this->extensions['OxidEsales\Twig\Extensions\Filters\FormatDateExtension']->formatDate(twig_get_attribute($this->env, $this->source, ($context["edit"] ?? null), "oxdiscount__oxactivefrom", [], "any", false, false, false, 91)), "html", null, true);
        echo "\" ";
        $this->loadTemplate("@__main__/help.html.twig", "@__main__/discount_main.html.twig", 91)->display(twig_array_merge($context, ["helpid" => "article_vonbis"]));
        echo " ";
        echo twig_escape_filter($this->env, ($context["readonly"] ?? null), "html", null, true);
        echo ">";
        echo $this->extensions['OxidEsales\Twig\Extensions\TranslateExtension']->translate(["ident" => "DISCOUNT_MAIN_AFROM"]);
        echo "<br>
                    <input type=\"text\" class=\"editinput\" size=\"27\" name=\"editval[oxdiscount__oxactiveto]\" value=\"";
        // line 92
        echo twig_escape_filter($this->env, $this->extensions['OxidEsales\Twig\Extensions\Filters\FormatDateExtension']->formatDate(twig_get_attribute($this->env, $this->source, ($context["edit"] ?? null), "oxdiscount__oxactiveto", [], "any", false, false, false, 92)), "html", null, true);
        echo "\" ";
        $this->loadTemplate("@__main__/help.html.twig", "@__main__/discount_main.html.twig", 92)->display(twig_array_merge($context, ["helpid" => "article_vonbis"]));
        echo " ";
        echo twig_escape_filter($this->env, ($context["readonly"] ?? null), "html", null, true);
        echo ">";
        echo $this->extensions['OxidEsales\Twig\Extensions\TranslateExtension']->translate(["ident" => "DISCOUNT_MAIN_ATILL"]);
        echo "
                    ";
        // line 93
        $this->loadTemplate("@__main__/inputhelp.html.twig", "@__main__/discount_main.html.twig", 93)->display(twig_array_merge($context, ["sHelpId" => $this->extensions['OxidEsales\Twig\Extensions\InputHelpExtension']->getHelpId("HELP_GENERAL_ACTIVFROMTILL"), "sHelpText" => $this->extensions['OxidEsales\Twig\Extensions\InputHelpExtension']->getHelpText("HELP_GENERAL_ACTIVFROMTILL")]));
        // line 94
        echo "                    </td>
                </tr>
                <tr>
                    <td class=\"edittext\">
                    ";
        // line 98
        echo $this->extensions['OxidEsales\Twig\Extensions\TranslateExtension']->translate(["ident" => "DISCOUNT_MAIN_AMOUNT"]);
        echo "
                    </td>
                    <td class=\"edittext\">
                    ";
        // line 101
        echo $this->extensions['OxidEsales\Twig\Extensions\TranslateExtension']->translate(["ident" => "GENERAL_FROM"]);
        echo " <input type=\"text\" class=\"editinput\" size=\"10\" maxlength=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["edit"] ?? null), "oxdiscount__oxamount", [], "any", false, false, false, 101), "fldmax_length", [], "any", false, false, false, 101), "html", null, true);
        echo "\" name=\"editval[oxdiscount__oxamount]\" value=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["edit"] ?? null), "oxdiscount__oxamount", [], "any", false, false, false, 101), "value", [], "any", false, false, false, 101), "html", null, true);
        echo "\" ";
        echo twig_escape_filter($this->env, ($context["readonly"] ?? null), "html", null, true);
        echo ">
                    ";
        // line 102
        echo $this->extensions['OxidEsales\Twig\Extensions\TranslateExtension']->translate(["ident" => "GENERAL_TILL"]);
        echo " <input type=\"text\" class=\"editinput\" size=\"10\" maxlength=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["edit"] ?? null), "oxdiscount__oxamountto", [], "any", false, false, false, 102), "fldmax_length", [], "any", false, false, false, 102), "html", null, true);
        echo "\" name=\"editval[oxdiscount__oxamountto]\" value=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["edit"] ?? null), "oxdiscount__oxamountto", [], "any", false, false, false, 102), "value", [], "any", false, false, false, 102), "html", null, true);
        echo "\" ";
        echo twig_escape_filter($this->env, ($context["readonly"] ?? null), "html", null, true);
        echo ">
                    ";
        // line 103
        $this->loadTemplate("@__main__/inputhelp.html.twig", "@__main__/discount_main.html.twig", 103)->display(twig_array_merge($context, ["sHelpId" => $this->extensions['OxidEsales\Twig\Extensions\InputHelpExtension']->getHelpId("HELP_DISCOUNT_MAIN_AMOUNT"), "sHelpText" => $this->extensions['OxidEsales\Twig\Extensions\InputHelpExtension']->getHelpText("HELP_DISCOUNT_MAIN_AMOUNT")]));
        // line 104
        echo "                    </td>
                </tr>
                <tr>
                    <td class=\"edittext\">
                    ";
        // line 108
        echo $this->extensions['OxidEsales\Twig\Extensions\TranslateExtension']->translate(["ident" => "DISCOUNT_MAIN_PRICE"]);
        echo " (";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["oActCur"] ?? null), "sign", [], "any", false, false, false, 108), "html", null, true);
        echo ")
                    </td>
                    <td class=\"edittext\">
                    ";
        // line 111
        echo $this->extensions['OxidEsales\Twig\Extensions\TranslateExtension']->translate(["ident" => "GENERAL_FROM"]);
        echo " <input type=\"text\" class=\"editinput\" size=\"10\" maxlength=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["edit"] ?? null), "oxdiscount__oxprice", [], "any", false, false, false, 111), "fldmax_length", [], "any", false, false, false, 111), "html", null, true);
        echo "\" name=\"editval[oxdiscount__oxprice]\" value=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["edit"] ?? null), "oxdiscount__oxprice", [], "any", false, false, false, 111), "value", [], "any", false, false, false, 111), "html", null, true);
        echo "\" ";
        echo twig_escape_filter($this->env, ($context["readonly"] ?? null), "html", null, true);
        echo ">
                    ";
        // line 112
        echo $this->extensions['OxidEsales\Twig\Extensions\TranslateExtension']->translate(["ident" => "GENERAL_TILL"]);
        echo " <input type=\"text\" class=\"editinput\" size=\"10\" maxlength=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["edit"] ?? null), "oxdiscount__oxpriceto", [], "any", false, false, false, 112), "fldmax_length", [], "any", false, false, false, 112), "html", null, true);
        echo "\" name=\"editval[oxdiscount__oxpriceto]\" value=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["edit"] ?? null), "oxdiscount__oxpriceto", [], "any", false, false, false, 112), "value", [], "any", false, false, false, 112), "html", null, true);
        echo "\" ";
        echo twig_escape_filter($this->env, ($context["readonly"] ?? null), "html", null, true);
        echo ">
                    ";
        // line 113
        $this->loadTemplate("@__main__/inputhelp.html.twig", "@__main__/discount_main.html.twig", 113)->display(twig_array_merge($context, ["sHelpId" => $this->extensions['OxidEsales\Twig\Extensions\InputHelpExtension']->getHelpId("HELP_DISCOUNT_MAIN_PRICE"), "sHelpText" => $this->extensions['OxidEsales\Twig\Extensions\InputHelpExtension']->getHelpText("HELP_DISCOUNT_MAIN_PRICE")]));
        // line 114
        echo "                    </td>
                </tr>
                <tr>
                    <td class=\"edittext\" height=\"30\">
                    ";
        // line 118
        echo $this->extensions['OxidEsales\Twig\Extensions\TranslateExtension']->translate(["ident" => "DISCOUNT_MAIN_REBATE"]);
        echo "
                    </td>
                    <td class=\"edittext\">
                    <input type=\"text\" class=\"editinput\" size=\"15\" maxlength=\"";
        // line 121
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["edit"] ?? null), "oxdiscount__oxaddsum", [], "any", false, false, false, 121), "fldmax_length", [], "any", false, false, false, 121), "html", null, true);
        echo "\" name=\"editval[oxdiscount__oxaddsum]\" id=\"editval[oxdiscount__oxaddsum]\" value=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["edit"] ?? null), "oxdiscount__oxaddsum", [], "any", false, false, false, 121), "value", [], "any", false, false, false, 121), "html", null, true);
        echo "\" ";
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["edit"] ?? null), "oxdiscount__oxaddsumtype", [], "any", false, false, false, 121), "value", [], "any", false, false, false, 121) == "itm")) {
            echo " style=\"display:none;\"";
        }
        echo twig_escape_filter($this->env, ($context["readonly"] ?? null), "html", null, true);
        echo ">
                        <select name=\"editval[oxdiscount__oxaddsumtype]\" class=\"editinput\" onChange=\"ChangeDiscountType(this);\" ";
        // line 122
        echo twig_escape_filter($this->env, ($context["readonly"] ?? null), "html", null, true);
        echo ">
                        ";
        // line 123
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["sumtype"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["sum"]) {
            // line 124
            echo "                        <option value=\"";
            echo twig_escape_filter($this->env, $context["sum"], "html", null, true);
            echo "\" ";
            if (($context["sum"] == twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["edit"] ?? null), "oxdiscount__oxaddsumtype", [], "any", false, false, false, 124), "value", [], "any", false, false, false, 124))) {
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
        // line 126
        echo "                        </select>
                        ";
        // line 127
        $this->loadTemplate("@__main__/inputhelp.html.twig", "@__main__/discount_main.html.twig", 127)->display(twig_array_merge($context, ["sHelpId" => $this->extensions['OxidEsales\Twig\Extensions\InputHelpExtension']->getHelpId("HELP_DISCOUNT_MAIN_REBATE"), "sHelpText" => $this->extensions['OxidEsales\Twig\Extensions\InputHelpExtension']->getHelpText("HELP_DISCOUNT_MAIN_REBATE")]));
        // line 128
        echo "                    </td>
                </tr>
                <tr id=\"itmart\"";
        // line 130
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["edit"] ?? null), "oxdiscount__oxaddsumtype", [], "any", false, false, false, 130), "value", [], "any", false, false, false, 130) != "itm")) {
            echo " style=\"display:none;\"";
        }
        echo ">
                  <td class=\"edittext\">
                    ";
        // line 132
        echo $this->extensions['OxidEsales\Twig\Extensions\TranslateExtension']->translate(["ident" => "DISCOUNT_MAIN_EXTRA"]);
        echo "
                  </td>
                  <td class=\"edittext\">
                    <table>
                        ";
        // line 136
        $this->displayBlock('admin_discount_main_form_itm', $context, $blocks);
        // line 156
        echo "                    </table>
                  </td>
                </tr>
            ";
    }

    // line 136
    public function block_admin_discount_main_form_itm($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 137
        echo "                          <tr>
                            <td>";
        // line 138
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["oView"] ?? null), "getItemDiscountProductTitle", [], "method", false, false, false, 138), "html", null, true);
        echo "</td>
                            <td>
                              <input ";
        // line 140
        echo twig_escape_filter($this->env, ($context["readonly"] ?? null), "html", null, true);
        echo " type=\"button\" value=\"";
        echo $this->extensions['OxidEsales\Twig\Extensions\TranslateExtension']->translate(["ident" => "GENERAL_CHANGEPRODUCT"]);
        echo "\" class=\"edittext\" onclick=\"showDialog('&cl=discount_main&aoc=2&oxid=";
        echo twig_escape_filter($this->env, ($context["oxid"] ?? null), "html", null, true);
        echo "');\">
                              ";
        // line 141
        $this->loadTemplate("@__main__/inputhelp.html.twig", "@__main__/discount_main.html.twig", 141)->display(twig_array_merge($context, ["sHelpId" => $this->extensions['OxidEsales\Twig\Extensions\InputHelpExtension']->getHelpId("HELP_DISCOUNT_MAIN_EXTRA"), "sHelpText" => $this->extensions['OxidEsales\Twig\Extensions\InputHelpExtension']->getHelpText("HELP_DISCOUNT_MAIN_EXTRA")]));
        // line 142
        echo "                            </td>
                          </tr>
                          <tr>
                            <td>";
        // line 145
        echo $this->extensions['OxidEsales\Twig\Extensions\TranslateExtension']->translate(["ident" => "DISCOUNT_MAIN_MULTIPLY_DISCOUNT_AMOUNT"]);
        echo "</td>
                            <td><input type=\"text\" class=\"editinput\" size=\"5\" maxlength=\"";
        // line 146
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["edit"] ?? null), "oxdiscount__oxitmamount", [], "any", false, false, false, 146), "fldmax_length", [], "any", false, false, false, 146), "html", null, true);
        echo "\" name=\"editval[oxdiscount__oxitmamount]\" value=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["edit"] ?? null), "oxdiscount__oxitmamount", [], "any", false, false, false, 146), "value", [], "any", false, false, false, 146), "html", null, true);
        echo "\" ";
        echo twig_escape_filter($this->env, ($context["readonly"] ?? null), "html", null, true);
        echo "></td>
                          </tr>
                          <tr>
                            <td>";
        // line 149
        echo $this->extensions['OxidEsales\Twig\Extensions\TranslateExtension']->translate(["ident" => "DISCOUNT_MAIN_MULTIPLY_DISCOUNT_ARTICLES"]);
        echo "</td>
                            <td>
                              <input type=\"hidden\" name=\"editval[oxdiscount__oxitmmultiple]\" value=\"0\">
                              <input class=\"edittext\" type=\"checkbox\" name=\"editval[oxdiscount__oxitmmultiple]\" value='1' ";
        // line 152
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["edit"] ?? null), "oxdiscount__oxitmmultiple", [], "any", false, false, false, 152), "value", [], "any", false, false, false, 152) == 1)) {
            echo "checked";
        }
        echo " ";
        echo twig_escape_filter($this->env, ($context["readonly"] ?? null), "html", null, true);
        echo ">
                            </td>
                          </tr>
                        ";
    }

    // line 177
    public function block_admin_discount_main_assign_countries($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 178
        echo "            ";
        if ((($context["oxid"] ?? null) != "-1")) {
            // line 179
            echo "                <input ";
            echo twig_escape_filter($this->env, ($context["readonly"] ?? null), "html", null, true);
            echo " type=\"button\" value=\"";
            echo $this->extensions['OxidEsales\Twig\Extensions\TranslateExtension']->translate(["ident" => "GENERAL_ASSIGNCOUNTRIES"]);
            echo "\" class=\"edittext\" onclick=\"showDialog('&cl=discount_main&aoc=1&oxid=";
            echo twig_escape_filter($this->env, ($context["oxid"] ?? null), "html", null, true);
            echo "');\">
            ";
        }
        // line 181
        echo "        ";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@__main__/discount_main.html.twig";
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
        return array (  527 => 181,  517 => 179,  514 => 178,  510 => 177,  498 => 152,  492 => 149,  482 => 146,  478 => 145,  473 => 142,  471 => 141,  463 => 140,  458 => 138,  455 => 137,  451 => 136,  444 => 156,  442 => 136,  435 => 132,  428 => 130,  424 => 128,  422 => 127,  419 => 126,  404 => 124,  400 => 123,  396 => 122,  385 => 121,  379 => 118,  373 => 114,  371 => 113,  361 => 112,  351 => 111,  343 => 108,  337 => 104,  335 => 103,  325 => 102,  315 => 101,  309 => 98,  303 => 94,  301 => 93,  291 => 92,  281 => 91,  275 => 88,  269 => 84,  267 => 83,  259 => 82,  253 => 79,  247 => 75,  245 => 74,  233 => 73,  227 => 70,  221 => 66,  219 => 65,  207 => 64,  201 => 61,  197 => 59,  193 => 58,  189 => 189,  187 => 188,  179 => 182,  177 => 177,  162 => 171,  154 => 165,  152 => 164,  146 => 160,  144 => 58,  134 => 51,  130 => 50,  126 => 49,  120 => 46,  116 => 45,  110 => 42,  105 => 40,  101 => 39,  97 => 38,  93 => 37,  90 => 36,  86 => 34,  82 => 32,  80 => 31,  71 => 24,  65 => 22,  63 => 21,  42 => 2,  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@__main__/discount_main.html.twig", "/var/www/html/source/Application/views/admin_twig/tpl/discount_main.html.twig");
    }
}
