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

/* @__main__/shop_main.html.twig */
class __TwigTemplate_a7fbab61fc74ad130bb22cda6cb48f07 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'admin_shop_main_rightform' => [$this, 'block_admin_shop_main_rightform'],
            'admin_shop_main_leftform' => [$this, 'block_admin_shop_main_leftform'],
            'admin_shop_main_emailsubject' => [$this, 'block_admin_shop_main_emailsubject'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        $this->loadTemplate("@__main__/headitem.html.twig", "@__main__/shop_main.html.twig", 1)->display(twig_array_merge($context, ["title" => $this->extensions['OxidEsales\Twig\Extensions\Filters\TranslateExtension']->translate("GENERAL_ADMIN_TITLE")]));
        // line 2
        echo "
<script type=\"text/javascript\">
<!--
function loadLang(obj)
{
    var langvar = document.getElementById(\"agblang\");
    if (langvar != null )
        langvar.value = obj.value;
    document.myedit.submit();
}
function setSmtpField()
{
    var sPass = '';
    for ( var i = 0; i < ";
        // line 15
        echo twig_escape_filter($this->env, twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["edit"] ?? null), "oxshops__oxsmtppwd", [], "any", false, false, false, 15), "value", [], "any", false, false, false, 15)), "html", null, true);
        echo "; i++ ) {
        sPass += ' ';
    }
    document.getElementsByName( 'oxsmtppwd' )[0].value = sPass;
    document.getElementsByName( 'oxsmtppwd' )[0].userValueSet = false;
}
function unsetSmtpField()
{
    if ( !document.getElementsByName( 'oxsmtppwd' )[0].userValueSet ) {
        document.getElementsByName( 'oxsmtppwd' )[0].value = '';
    }
}

function modSmtpField()
{
    if ( !document.getElementsByName( 'oxsmtppwd' )[0].userValueSet ) {
        document.getElementsByName( 'oxsmtppwd' )[0].value = '';
        document.getElementsByName( 'oxsmtppwd' )[0].userValueSet = true;
    }
}
function editThis(sID)
{
    var oTransfer = top.basefrm.edit.document.getElementById( \"transfer\" );
    oTransfer.oxid.value = '';
    oTransfer.cl.value = top.oxid.admin.getClass( sID );

    //forcing edit frame to reload after submit
    top.forceReloadingEditFrame();

    var oSearch = top.basefrm.list.document.getElementById( \"search\" );
    oSearch.oxid.value = sID;
    oSearch.updatenav.value = 1;
    oSearch.submit();
}
window.onload = function ()
{
    ";
        // line 51
        if ((($context["updatelist"] ?? null) == 1)) {
            // line 52
            echo "        top.oxid.admin.updateList('";
            echo twig_escape_filter($this->env, ($context["oxid"] ?? null), "html", null, true);
            echo "');
    ";
        }
        // line 54
        echo "
    setSmtpField();

    ";
        // line 57
        if (($context["updatenav"] ?? null)) {
            // line 58
            echo "        top.oxid.admin.reloadNavigation('";
            echo twig_escape_filter($this->env, ($context["oxid"] ?? null), "html", null, true);
            echo "');
    ";
        }
        // line 60
        echo "
    var oField = top.oxid.admin.getLockTarget();
    oField.onchange = oField.onkeyup = oField.onmouseout = top.oxid.admin.unlockSave;
}
//-->
</script>

";
        // line 67
        if (($context["readonly"] ?? null)) {
            // line 68
            echo "    ";
            $context["readonly"] = "readonly disabled";
        } else {
            // line 70
            echo "    ";
            $context["readonly"] = "";
        }
        // line 72
        echo "
<form name=\"transfer\" id=\"transfer\" action=\"";
        // line 73
        echo twig_get_attribute($this->env, $this->source, ($context["oViewConf"] ?? null), "getSelfLink", [], "method", false, false, false, 73);
        echo "\" method=\"post\">
    ";
        // line 74
        echo twig_get_attribute($this->env, $this->source, ($context["oViewConf"] ?? null), "getHiddenSid", [], "method", false, false, false, 74);
        echo "
    <input type=\"hidden\" name=\"oxid\" value=\"";
        // line 75
        echo twig_escape_filter($this->env, ($context["oxid"] ?? null), "html", null, true);
        echo "\">
    <input type=\"hidden\" name=\"cl\" value=\"shop_main\">
    <input type=\"hidden\" name=\"fnc\" value=\"\">
    <input type=\"hidden\" name=\"actshop\" value=\"";
        // line 78
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["oViewConf"] ?? null), "getActiveShopId", [], "method", false, false, false, 78), "html", null, true);
        echo "\">
    <input type=\"hidden\" name=\"updatenav\" value=\"\">
    <input type=\"hidden\" name=\"editlanguage\" value=\"";
        // line 80
        echo twig_escape_filter($this->env, ($context["editlanguage"] ?? null), "html", null, true);
        echo "\">
</form>

";
        // line 83
        if (($context["sMandateWarning"] ?? null)) {
            // line 84
            echo "  <div class=\"errorbox\">";
            echo $this->extensions['OxidEsales\Twig\Extensions\TranslateExtension']->translate(["ident" => "SHOP_MAIN_MANDATE_WARNING"]);
            echo "</div>
";
        }
        // line 86
        echo "
";
        // line 87
        if (($context["sMaxShopWarning"] ?? null)) {
            // line 88
            echo "   <div class=\"errorbox\">";
            echo $this->extensions['OxidEsales\Twig\Extensions\TranslateExtension']->translate(["ident" => "SHOP_MAIN_MAXSHOP_WARNING"]);
            echo "</div>
";
        }
        // line 90
        echo "
<form name=\"myedit\" id=\"myedit\" action=\"";
        // line 91
        echo twig_get_attribute($this->env, $this->source, ($context["oViewConf"] ?? null), "getSelfLink", [], "method", false, false, false, 91);
        echo "\" method=\"post\" onSubmit=\"unsetSmtpField()\">
    ";
        // line 92
        echo twig_get_attribute($this->env, $this->source, ($context["oViewConf"] ?? null), "getHiddenSid", [], "method", false, false, false, 92);
        echo "
    <input type=\"hidden\" name=\"cl\" value=\"shop_main\">
    <input type=\"hidden\" name=\"fnc\" value=\"\">
    <input type=\"hidden\" name=\"oxid\" value=\"";
        // line 95
        echo twig_escape_filter($this->env, ($context["oxid"] ?? null), "html", null, true);
        echo "\">
    <input type=\"hidden\" name=\"editval[oxshops__oxid]\" value=\"";
        // line 96
        echo twig_escape_filter($this->env, ($context["oxid"] ?? null), "html", null, true);
        echo "\">

<table border=\"0\" width=\"98%\">
<tr>
    <td valign=\"top\" class=\"edittext\">
        <table cellspacing=\"0\" cellpadding=\"0\" border=\"0\">
        ";
        // line 102
        $this->displayBlock('admin_shop_main_rightform', $context, $blocks);
        // line 280
        echo "        </table>
    </td>
    <!-- Anfang rechte Seite -->
    <td valign=\"top\" class=\"edittext\" align=\"left\">
        <table cellspacing=\"0\" cellpadding=\"0\" border=\"0\">
        ";
        // line 285
        $this->displayBlock('admin_shop_main_leftform', $context, $blocks);
        // line 354
        echo "
          <tr>
            <td colspan=\"2\">
              <FIELDSET id=fldLayout>
                <LEGEND id=lgdLayout>
                  ";
        // line 359
        if (($context["languages"] ?? null)) {
            // line 360
            echo "                  <select name=\"subjlang\" class=\"editinput\" onchange=\"Javascript:loadLang(this)\" ";
            echo twig_escape_filter($this->env, ($context["readonly"] ?? null), "html", null, true);
            echo ">
                      ";
            // line 361
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
            foreach ($context['_seq'] as $context["key"] => $context["item"]) {
                // line 362
                echo "                        <option value=\"";
                echo twig_escape_filter($this->env, $context["key"], "html", null, true);
                echo "\"";
                if ((($context["subjlang"] ?? null) == $context["key"])) {
                    echo " SELECTED";
                }
                echo ">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "name", [], "any", false, false, false, 362), "html", null, true);
                echo "</option>
                      ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 364
            echo "                  </select>
                  ";
        }
        // line 366
        echo "                </LEGEND>

              <table cellspacing=\"0\" cellpadding=\"1\" border=\"0\">
                ";
        // line 369
        $this->displayBlock('admin_shop_main_emailsubject', $context, $blocks);
        // line 406
        echo "              </table>
              </FIELDSET>
            </td>
          </tr>
          <tr>
            <td class=\"edittext\"></td>
            <td class=\"edittext\"><br>
              <input type=\"submit\" class=\"edittext\" id=\"oLockButton\" name=\"save\" value=\"";
        // line 413
        echo $this->extensions['OxidEsales\Twig\Extensions\TranslateExtension']->translate(["ident" => "GENERAL_SAVE"]);
        echo "\" onClick=\"Javascript:document.myedit.fnc.value='save'\" ";
        if ((($context["oxid"] ?? null) ==  -1)) {
            echo "disabled";
        }
        echo " ";
        echo twig_escape_filter($this->env, ($context["readonly"] ?? null), "html", null, true);
        echo ">
            </td>
          </tr>
        </table>

    </td>
    </tr>
</table>

</form>

";
        // line 424
        $this->loadTemplate("@__main__/bottomnaviitem.html.twig", "@__main__/shop_main.html.twig", 424)->display($context);
        // line 425
        $this->loadTemplate("@__main__/bottomitem.html.twig", "@__main__/shop_main.html.twig", 425)->display($context);
    }

    // line 102
    public function block_admin_shop_main_rightform($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 103
        echo "            <tr>
             <td class=\"edittext\"  ";
        // line 104
        if ( !twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["edit"] ?? null), "oxshops__oxproductive", [], "any", false, false, false, 104), "value", [], "any", false, false, false, 104)) {
            echo "style=\"border: 3px Red; border-style: solid none solid solid;\"";
        }
        echo ">
                ";
        // line 105
        echo $this->extensions['OxidEsales\Twig\Extensions\TranslateExtension']->translate(["ident" => "SHOP_MAIN_PRODUCTIVE"]);
        echo "
             </td>
             <td class=\"edittext\" ";
        // line 107
        if ( !twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["edit"] ?? null), "oxshops__oxproductive", [], "any", false, false, false, 107), "value", [], "any", false, false, false, 107)) {
            echo "style=\"border: 3px Red; border-style: solid solid solid none;\"";
        }
        echo ">
                <input type=checkbox name=editval[oxshops__oxproductive] value=true  ";
        // line 108
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["edit"] ?? null), "oxshops__oxproductive", [], "any", false, false, false, 108), "value", [], "any", false, false, false, 108)) {
            echo "checked";
        }
        echo " ";
        echo twig_escape_filter($this->env, ($context["readonly"] ?? null), "html", null, true);
        echo ">
                ";
        // line 109
        $this->loadTemplate("@__main__/inputhelp.html.twig", "@__main__/shop_main.html.twig", 109)->display(twig_array_merge($context, ["sHelpId" => $this->extensions['OxidEsales\Twig\Extensions\InputHelpExtension']->getHelpId("HELP_SHOP_MAIN_PRODUCTIVE"), "sHelpText" => $this->extensions['OxidEsales\Twig\Extensions\InputHelpExtension']->getHelpText("HELP_SHOP_MAIN_PRODUCTIVE")]));
        // line 110
        echo "             </td>
            </tr>
            <tr>
             <td class=\"edittext\" >
                ";
        // line 114
        echo $this->extensions['OxidEsales\Twig\Extensions\TranslateExtension']->translate(["ident" => "GENERAL_ACTIVE"]);
        echo "
             </td>
             <td class=\"edittext\" >
                <input type=checkbox name=editval[oxshops__oxactive] value=true  ";
        // line 117
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["edit"] ?? null), "oxshops__oxactive", [], "any", false, false, false, 117), "value", [], "any", false, false, false, 117)) {
            echo "checked";
        }
        echo " ";
        echo twig_escape_filter($this->env, ($context["readonly"] ?? null), "html", null, true);
        echo ">
                ";
        // line 118
        $this->loadTemplate("@__main__/inputhelp.html.twig", "@__main__/shop_main.html.twig", 118)->display(twig_array_merge($context, ["sHelpId" => $this->extensions['OxidEsales\Twig\Extensions\InputHelpExtension']->getHelpId("HELP_GENERAL_ACTIVE"), "sHelpText" => $this->extensions['OxidEsales\Twig\Extensions\InputHelpExtension']->getHelpText("HELP_GENERAL_ACTIVE")]));
        // line 119
        echo "             </td>
            </tr>
            <tr>
                <td class=\"edittext\" >
                   ";
        // line 123
        echo $this->extensions['OxidEsales\Twig\Extensions\TranslateExtension']->translate(["ident" => "SHOP_MAIN_COMPANY"]);
        echo "
                </td>
                <td class=\"edittext\">
                <input type=\"text\" class=\"editinput\" size=\"35\" maxlength=\"";
        // line 126
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["edit"] ?? null), "oxshops__oxcompany", [], "any", false, false, false, 126), "fldmax_length", [], "any", false, false, false, 126), "html", null, true);
        echo "\" name=\"editval[oxshops__oxcompany]\" value=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["edit"] ?? null), "oxshops__oxcompany", [], "any", false, false, false, 126), "value", [], "any", false, false, false, 126), "html", null, true);
        echo "\" ";
        echo twig_escape_filter($this->env, ($context["readonly"] ?? null), "html", null, true);
        echo ">
                ";
        // line 127
        $this->loadTemplate("@__main__/inputhelp.html.twig", "@__main__/shop_main.html.twig", 127)->display(twig_array_merge($context, ["sHelpId" => $this->extensions['OxidEsales\Twig\Extensions\InputHelpExtension']->getHelpId("HELP_SHOP_MAIN_COMPANY"), "sHelpText" => $this->extensions['OxidEsales\Twig\Extensions\InputHelpExtension']->getHelpText("HELP_SHOP_MAIN_COMPANY")]));
        // line 128
        echo "                </td>
            </tr>
            <tr>
                <td class=\"edittext\" width=\"100\">
                    ";
        // line 132
        echo $this->extensions['OxidEsales\Twig\Extensions\TranslateExtension']->translate(["ident" => "GENERAL_NAME"]);
        echo "
                </td>
                <td class=\"edittext\">
                <input type=\"text\" class=\"editinput\" size=\"10\" maxlength=\"";
        // line 135
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["edit"] ?? null), "oxshops__oxfname", [], "any", false, false, false, 135), "fldmax_length", [], "any", false, false, false, 135), "html", null, true);
        echo "\" name=\"editval[oxshops__oxfname]\" value=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["edit"] ?? null), "oxshops__oxfname", [], "any", false, false, false, 135), "value", [], "any", false, false, false, 135), "html", null, true);
        echo "\" ";
        echo twig_escape_filter($this->env, ($context["readonly"] ?? null), "html", null, true);
        echo ">
                <input type=\"text\" class=\"editinput\" size=\"21\" maxlength=\"";
        // line 136
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["edit"] ?? null), "oxshops__oxlname", [], "any", false, false, false, 136), "fldmax_length", [], "any", false, false, false, 136), "html", null, true);
        echo "\" name=\"editval[oxshops__oxlname]\" value=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["edit"] ?? null), "oxshops__oxlname", [], "any", false, false, false, 136), "value", [], "any", false, false, false, 136), "html", null, true);
        echo "\" ";
        echo twig_escape_filter($this->env, ($context["readonly"] ?? null), "html", null, true);
        echo ">
                ";
        // line 137
        $this->loadTemplate("@__main__/inputhelp.html.twig", "@__main__/shop_main.html.twig", 137)->display(twig_array_merge($context, ["sHelpId" => $this->extensions['OxidEsales\Twig\Extensions\InputHelpExtension']->getHelpId("HELP_ENERAL_NAME"), "sHelpText" => $this->extensions['OxidEsales\Twig\Extensions\InputHelpExtension']->getHelpText("HELP_ENERAL_NAME")]));
        // line 138
        echo "                </td>
            </tr>
            <tr>
                <td class=\"edittext\">
                    ";
        // line 142
        echo $this->extensions['OxidEsales\Twig\Extensions\TranslateExtension']->translate(["ident" => "GENERAL_STREET"]);
        echo "
                </td>
                <td class=\"edittext\">
                <input type=\"text\" class=\"editinput\" size=\"35\" maxlength=\"";
        // line 145
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["edit"] ?? null), "oxshops__oxstreet", [], "any", false, false, false, 145), "fldmax_length", [], "any", false, false, false, 145), "html", null, true);
        echo "\" name=\"editval[oxshops__oxstreet]\" value=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["edit"] ?? null), "oxshops__oxstreet", [], "any", false, false, false, 145), "value", [], "any", false, false, false, 145), "html", null, true);
        echo "\" ";
        echo twig_escape_filter($this->env, ($context["readonly"] ?? null), "html", null, true);
        echo ">
                ";
        // line 146
        $this->loadTemplate("@__main__/inputhelp.html.twig", "@__main__/shop_main.html.twig", 146)->display(twig_array_merge($context, ["sHelpId" => $this->extensions['OxidEsales\Twig\Extensions\InputHelpExtension']->getHelpId("HELP_GENERAL_STREET"), "sHelpText" => $this->extensions['OxidEsales\Twig\Extensions\InputHelpExtension']->getHelpText("HELP_GENERAL_STREET")]));
        // line 147
        echo "                </td>
            </tr>
            <tr>
                <td class=\"edittext\">
                    ";
        // line 151
        echo $this->extensions['OxidEsales\Twig\Extensions\TranslateExtension']->translate(["ident" => "GENERAL_ZIPCITY"]);
        echo "
                </td>
                <td class=\"edittext\">
                <input type=\"text\" class=\"editinput\" size=\"5\" maxlength=\"";
        // line 154
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["edit"] ?? null), "oxshops__oxzip", [], "any", false, false, false, 154), "fldmax_length", [], "any", false, false, false, 154), "html", null, true);
        echo "\" name=\"editval[oxshops__oxzip]\" value=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["edit"] ?? null), "oxshops__oxzip", [], "any", false, false, false, 154), "value", [], "any", false, false, false, 154), "html", null, true);
        echo "\" ";
        echo twig_escape_filter($this->env, ($context["readonly"] ?? null), "html", null, true);
        echo ">
                <input type=\"text\" class=\"editinput\" size=\"26\" maxlength=\"";
        // line 155
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["edit"] ?? null), "oxshops__oxcity", [], "any", false, false, false, 155), "fldmax_length", [], "any", false, false, false, 155), "html", null, true);
        echo "\" name=\"editval[oxshops__oxcity]\" value=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["edit"] ?? null), "oxshops__oxcity", [], "any", false, false, false, 155), "value", [], "any", false, false, false, 155), "html", null, true);
        echo "\" ";
        echo twig_escape_filter($this->env, ($context["readonly"] ?? null), "html", null, true);
        echo ">
                ";
        // line 156
        $this->loadTemplate("@__main__/inputhelp.html.twig", "@__main__/shop_main.html.twig", 156)->display(twig_array_merge($context, ["sHelpId" => $this->extensions['OxidEsales\Twig\Extensions\InputHelpExtension']->getHelpId("HELP_GENERAL_ZIPCITY"), "sHelpText" => $this->extensions['OxidEsales\Twig\Extensions\InputHelpExtension']->getHelpText("HELP_GENERAL_ZIPCITY")]));
        // line 157
        echo "                </td>
            </tr>
            <tr>
                <td class=\"edittext\">
                    ";
        // line 161
        echo $this->extensions['OxidEsales\Twig\Extensions\TranslateExtension']->translate(["ident" => "GENERAL_COUNTRY"]);
        echo "
                </td>
                <td class=\"edittext\">
                <input type=\"text\" class=\"editinput\" size=\"35\" maxlength=\"";
        // line 164
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["edit"] ?? null), "oxshops__oxcountry", [], "any", false, false, false, 164), "fldmax_length", [], "any", false, false, false, 164), "html", null, true);
        echo "\" name=\"editval[oxshops__oxcountry]\" value=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["edit"] ?? null), "oxshops__oxcountry", [], "any", false, false, false, 164), "value", [], "any", false, false, false, 164), "html", null, true);
        echo "\" ";
        echo twig_escape_filter($this->env, ($context["readonly"] ?? null), "html", null, true);
        echo ">
                ";
        // line 165
        $this->loadTemplate("@__main__/inputhelp.html.twig", "@__main__/shop_main.html.twig", 165)->display(twig_array_merge($context, ["sHelpId" => $this->extensions['OxidEsales\Twig\Extensions\InputHelpExtension']->getHelpId("HELP_GENERAL_COUNTRY"), "sHelpText" => $this->extensions['OxidEsales\Twig\Extensions\InputHelpExtension']->getHelpText("HELP_GENERAL_COUNTRY")]));
        // line 166
        echo "                </td>
            </tr>
            <tr>
                <td class=\"edittext\">
                    ";
        // line 170
        echo $this->extensions['OxidEsales\Twig\Extensions\TranslateExtension']->translate(["ident" => "GENERAL_TELEPHONE"]);
        echo "
                </td>
                <td class=\"edittext\">
                <input type=\"text\" class=\"editinput\" size=\"35\" maxlength=\"";
        // line 173
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["edit"] ?? null), "oxshops__oxtelefon", [], "any", false, false, false, 173), "fldmax_length", [], "any", false, false, false, 173), "html", null, true);
        echo "\" name=\"editval[oxshops__oxtelefon]\" value=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["edit"] ?? null), "oxshops__oxtelefon", [], "any", false, false, false, 173), "value", [], "any", false, false, false, 173), "html", null, true);
        echo "\" ";
        echo twig_escape_filter($this->env, ($context["readonly"] ?? null), "html", null, true);
        echo ">
                ";
        // line 174
        $this->loadTemplate("@__main__/inputhelp.html.twig", "@__main__/shop_main.html.twig", 174)->display(twig_array_merge($context, ["sHelpId" => $this->extensions['OxidEsales\Twig\Extensions\InputHelpExtension']->getHelpId("HELP_GENERAL_TELEPHONE"), "sHelpText" => $this->extensions['OxidEsales\Twig\Extensions\InputHelpExtension']->getHelpText("HELP_GENERAL_TELEPHONE")]));
        // line 175
        echo "                </td>
            </tr>
            <tr>
                <td class=\"edittext\">
                    ";
        // line 179
        echo $this->extensions['OxidEsales\Twig\Extensions\TranslateExtension']->translate(["ident" => "GENERAL_FAX"]);
        echo "
                </td>
                <td class=\"edittext\">
                <input type=\"text\" class=\"editinput\" size=\"35\" maxlength=\"";
        // line 182
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["edit"] ?? null), "oxshops__oxtelefax", [], "any", false, false, false, 182), "fldmax_length", [], "any", false, false, false, 182), "html", null, true);
        echo "\" name=\"editval[oxshops__oxtelefax]\" value=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["edit"] ?? null), "oxshops__oxtelefax", [], "any", false, false, false, 182), "value", [], "any", false, false, false, 182), "html", null, true);
        echo "\" ";
        echo twig_escape_filter($this->env, ($context["readonly"] ?? null), "html", null, true);
        echo ">
                ";
        // line 183
        $this->loadTemplate("@__main__/inputhelp.html.twig", "@__main__/shop_main.html.twig", 183)->display(twig_array_merge($context, ["sHelpId" => $this->extensions['OxidEsales\Twig\Extensions\InputHelpExtension']->getHelpId("HELP_GENERAL_FAX"), "sHelpText" => $this->extensions['OxidEsales\Twig\Extensions\InputHelpExtension']->getHelpText("HELP_GENERAL_FAX")]));
        // line 184
        echo "                </td>
            </tr>
            <tr>
                <td class=\"edittext\">
                    ";
        // line 188
        echo $this->extensions['OxidEsales\Twig\Extensions\TranslateExtension']->translate(["ident" => "GENERAL_URL"]);
        echo "
                </td>
                <td class=\"edittext\">
                <input type=\"text\" class=\"editinput\" size=\"35\" maxlength=\"";
        // line 191
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["edit"] ?? null), "oxshops__oxurl", [], "any", false, false, false, 191), "fldmax_length", [], "any", false, false, false, 191), "html", null, true);
        echo "\" name=\"editval[oxshops__oxurl]\" value=\"";
        echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["edit"] ?? null), "oxshops__oxurl", [], "any", false, false, false, 191), "value", [], "any", false, false, false, 191);
        echo "\" ";
        echo twig_escape_filter($this->env, ($context["readonly"] ?? null), "html", null, true);
        echo ">
                ";
        // line 192
        $this->loadTemplate("@__main__/inputhelp.html.twig", "@__main__/shop_main.html.twig", 192)->display(twig_array_merge($context, ["sHelpId" => $this->extensions['OxidEsales\Twig\Extensions\InputHelpExtension']->getHelpId("HELP_GENERAL_URL"), "sHelpText" => $this->extensions['OxidEsales\Twig\Extensions\InputHelpExtension']->getHelpText("HELP_GENERAL_URL")]));
        // line 193
        echo "                </td>
            </tr>
            <tr>
                <td class=\"edittext\" >
                    ";
        // line 197
        echo $this->extensions['OxidEsales\Twig\Extensions\TranslateExtension']->translate(["ident" => "SHOP_MAIN_BANKNAME"]);
        echo "
                </td>
                <td class=\"edittext\">
                <input type=\"text\" class=\"editinput\" size=\"35\" maxlength=\"";
        // line 200
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["edit"] ?? null), "oxshops__oxbankname", [], "any", false, false, false, 200), "fldmax_length", [], "any", false, false, false, 200), "html", null, true);
        echo "\" name=\"editval[oxshops__oxbankname]\" value=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["edit"] ?? null), "oxshops__oxbankname", [], "any", false, false, false, 200), "value", [], "any", false, false, false, 200), "html", null, true);
        echo "\" ";
        echo twig_escape_filter($this->env, ($context["readonly"] ?? null), "html", null, true);
        echo ">
                ";
        // line 201
        $this->loadTemplate("@__main__/inputhelp.html.twig", "@__main__/shop_main.html.twig", 201)->display(twig_array_merge($context, ["sHelpId" => $this->extensions['OxidEsales\Twig\Extensions\InputHelpExtension']->getHelpId("HELP_SHOP_MAIN_BANKNAME"), "sHelpText" => $this->extensions['OxidEsales\Twig\Extensions\InputHelpExtension']->getHelpText("HELP_SHOP_MAIN_BANKNAME")]));
        // line 202
        echo "                </td>
            </tr>
            <tr>
                <td class=\"edittext\" >
                    ";
        // line 206
        echo $this->extensions['OxidEsales\Twig\Extensions\TranslateExtension']->translate(["ident" => "SHOP_MAIN_BANKCODE"]);
        echo "
                </td>
                <td class=\"edittext\">
                <input type=\"text\" class=\"editinput\" size=\"35\" maxlength=\"";
        // line 209
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["edit"] ?? null), "oxshops__oxbankcode", [], "any", false, false, false, 209), "fldmax_length", [], "any", false, false, false, 209), "html", null, true);
        echo "\" name=\"editval[oxshops__oxbankcode]\" value=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["edit"] ?? null), "oxshops__oxbankcode", [], "any", false, false, false, 209), "value", [], "any", false, false, false, 209), "html", null, true);
        echo "\" ";
        echo twig_escape_filter($this->env, ($context["readonly"] ?? null), "html", null, true);
        echo ">
                ";
        // line 210
        $this->loadTemplate("@__main__/inputhelp.html.twig", "@__main__/shop_main.html.twig", 210)->display(twig_array_merge($context, ["sHelpId" => $this->extensions['OxidEsales\Twig\Extensions\InputHelpExtension']->getHelpId("HELP_SHOP_MAIN_BANKCODE"), "sHelpText" => $this->extensions['OxidEsales\Twig\Extensions\InputHelpExtension']->getHelpText("HELP_SHOP_MAIN_BANKCODE")]));
        // line 211
        echo "                </td>
            </tr>
            <tr>
                <td class=\"edittext\" >
                    ";
        // line 215
        echo $this->extensions['OxidEsales\Twig\Extensions\TranslateExtension']->translate(["ident" => "SHOP_MAIN_BANKNUMBER"]);
        echo "
                </td>
                <td class=\"edittext\">
                <input type=\"text\" class=\"editinput\" size=\"35\" maxlength=\"";
        // line 218
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["edit"] ?? null), "oxshops__oxbanknumber", [], "any", false, false, false, 218), "fldmax_length", [], "any", false, false, false, 218), "html", null, true);
        echo "\" name=\"editval[oxshops__oxbanknumber]\" value=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["edit"] ?? null), "oxshops__oxbanknumber", [], "any", false, false, false, 218), "value", [], "any", false, false, false, 218), "html", null, true);
        echo "\" ";
        echo twig_escape_filter($this->env, ($context["readonly"] ?? null), "html", null, true);
        echo ">
                ";
        // line 219
        $this->loadTemplate("@__main__/inputhelp.html.twig", "@__main__/shop_main.html.twig", 219)->display(twig_array_merge($context, ["sHelpId" => $this->extensions['OxidEsales\Twig\Extensions\InputHelpExtension']->getHelpId("HELP_SHOP_MAIN_BANKNUMBER"), "sHelpText" => $this->extensions['OxidEsales\Twig\Extensions\InputHelpExtension']->getHelpText("HELP_SHOP_MAIN_BANKNUMBER")]));
        // line 220
        echo "                </td>
            </tr>
            <tr>
                <td class=\"edittext\" >
                    ";
        // line 224
        echo $this->extensions['OxidEsales\Twig\Extensions\TranslateExtension']->translate(["ident" => "SHOP_MAIN_BICCODE"]);
        echo "
                </td>
                <td class=\"edittext\">
                <input type=\"text\" class=\"editinput\" size=\"35\" maxlength=\"";
        // line 227
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["edit"] ?? null), "oxshops__oxbiccode", [], "any", false, false, false, 227), "fldmax_length", [], "any", false, false, false, 227), "html", null, true);
        echo "\" name=\"editval[oxshops__oxbiccode]\" value=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["edit"] ?? null), "oxshops__oxbiccode", [], "any", false, false, false, 227), "value", [], "any", false, false, false, 227), "html", null, true);
        echo "\" ";
        echo twig_escape_filter($this->env, ($context["readonly"] ?? null), "html", null, true);
        echo ">
                ";
        // line 228
        $this->loadTemplate("@__main__/inputhelp.html.twig", "@__main__/shop_main.html.twig", 228)->display(twig_array_merge($context, ["sHelpId" => $this->extensions['OxidEsales\Twig\Extensions\InputHelpExtension']->getHelpId("HELP_SHOP_MAIN_BICCODE"), "sHelpText" => $this->extensions['OxidEsales\Twig\Extensions\InputHelpExtension']->getHelpText("HELP_SHOP_MAIN_BICCODE")]));
        // line 229
        echo "                </td>
            </tr>
            <tr>
                <td class=\"edittext\" >
                    ";
        // line 233
        echo $this->extensions['OxidEsales\Twig\Extensions\TranslateExtension']->translate(["ident" => "SHOP_MAIN_IBANNUMBER"]);
        echo "
                </td>
                <td class=\"edittext\">
                <input type=\"text\" class=\"editinput\" size=\"35\" maxlength=\"";
        // line 236
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["edit"] ?? null), "oxshops__oxibannumber", [], "any", false, false, false, 236), "fldmax_length", [], "any", false, false, false, 236), "html", null, true);
        echo "\" name=\"editval[oxshops__oxibannumber]\" value=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["edit"] ?? null), "oxshops__oxibannumber", [], "any", false, false, false, 236), "value", [], "any", false, false, false, 236), "html", null, true);
        echo "\" ";
        echo twig_escape_filter($this->env, ($context["readonly"] ?? null), "html", null, true);
        echo ">
                ";
        // line 237
        $this->loadTemplate("@__main__/inputhelp.html.twig", "@__main__/shop_main.html.twig", 237)->display(twig_array_merge($context, ["sHelpId" => $this->extensions['OxidEsales\Twig\Extensions\InputHelpExtension']->getHelpId("HELP_SHOP_MAIN_IBANNUMBER"), "sHelpText" => $this->extensions['OxidEsales\Twig\Extensions\InputHelpExtension']->getHelpText("HELP_SHOP_MAIN_IBANNUMBER")]));
        // line 238
        echo "                </td>
            </tr>

            <tr>
                <td class=\"edittext\" >
                    ";
        // line 243
        echo $this->extensions['OxidEsales\Twig\Extensions\TranslateExtension']->translate(["ident" => "SHOP_MAIN_VATNUMBER"]);
        echo "
                </td>
                <td class=\"edittext\">
                <input type=\"text\" name=\"editval[oxshops__oxvatnumber]\" value=\"";
        // line 246
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["edit"] ?? null), "oxshops__oxvatnumber", [], "any", false, false, false, 246), "value", [], "any", false, false, false, 246), "html", null, true);
        echo "\" size=\"35\" maxlength=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["edit"] ?? null), "oxshops__oxvatnumber", [], "any", false, false, false, 246), "fldmax_length", [], "any", false, false, false, 246), "html", null, true);
        echo "\" class=\"editinput\" ";
        echo twig_escape_filter($this->env, ($context["readonly"] ?? null), "html", null, true);
        echo ">
                ";
        // line 247
        $this->loadTemplate("@__main__/inputhelp.html.twig", "@__main__/shop_main.html.twig", 247)->display(twig_array_merge($context, ["sHelpId" => $this->extensions['OxidEsales\Twig\Extensions\InputHelpExtension']->getHelpId("HELP_SHOP_MAIN_VATNUMBER"), "sHelpText" => $this->extensions['OxidEsales\Twig\Extensions\InputHelpExtension']->getHelpText("HELP_SHOP_MAIN_VATNUMBER")]));
        // line 248
        echo "                </td>
            </tr>

            <tr>
                <td class=\"edittext\" >
                    ";
        // line 253
        echo $this->extensions['OxidEsales\Twig\Extensions\TranslateExtension']->translate(["ident" => "SHOP_MAIN_TAXNUMBER"]);
        echo "
                </td>
                <td class=\"edittext\">
                <input type=\"text\" name=\"editval[oxshops__oxtaxnumber]\" value=\"";
        // line 256
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["edit"] ?? null), "oxshops__oxtaxnumber", [], "any", false, false, false, 256), "value", [], "any", false, false, false, 256), "html", null, true);
        echo "\" size=\"35\" maxlength=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["edit"] ?? null), "oxshops__oxtaxnumber", [], "any", false, false, false, 256), "fldmax_length", [], "any", false, false, false, 256), "html", null, true);
        echo "\" class=\"editinput\" ";
        echo twig_escape_filter($this->env, ($context["readonly"] ?? null), "html", null, true);
        echo ">
                ";
        // line 257
        $this->loadTemplate("@__main__/inputhelp.html.twig", "@__main__/shop_main.html.twig", 257)->display(twig_array_merge($context, ["sHelpId" => $this->extensions['OxidEsales\Twig\Extensions\InputHelpExtension']->getHelpId("HELP_SHOP_MAIN_TAXNUMBER"), "sHelpText" => $this->extensions['OxidEsales\Twig\Extensions\InputHelpExtension']->getHelpText("HELP_SHOP_MAIN_TAXNUMBER")]));
        // line 258
        echo "                </td>
            </tr>

            <tr>
                <td class=\"edittext\" >
                    ";
        // line 263
        echo $this->extensions['OxidEsales\Twig\Extensions\TranslateExtension']->translate(["ident" => "SHOP_MAIN_HRBNR"]);
        echo "
                </td>
                <td class=\"edittext\">
                <input type=\"text\" class=\"editinput\" size=\"35\" maxlength=\"";
        // line 266
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["edit"] ?? null), "oxshops__oxhrbnr", [], "any", false, false, false, 266), "fldmax_length", [], "any", false, false, false, 266), "html", null, true);
        echo "\" name=\"editval[oxshops__oxhrbnr]\" value=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["edit"] ?? null), "oxshops__oxhrbnr", [], "any", false, false, false, 266), "value", [], "any", false, false, false, 266), "html", null, true);
        echo "\" ";
        echo twig_escape_filter($this->env, ($context["readonly"] ?? null), "html", null, true);
        echo ">
                ";
        // line 267
        $this->loadTemplate("@__main__/inputhelp.html.twig", "@__main__/shop_main.html.twig", 267)->display(twig_array_merge($context, ["sHelpId" => $this->extensions['OxidEsales\Twig\Extensions\InputHelpExtension']->getHelpId("HELP_SHOP_MAIN_HRBNR"), "sHelpText" => $this->extensions['OxidEsales\Twig\Extensions\InputHelpExtension']->getHelpText("HELP_SHOP_MAIN_HRBNR")]));
        // line 268
        echo "                </td>
            </tr>
            <tr>
                <td class=\"edittext\" >
                    ";
        // line 272
        echo $this->extensions['OxidEsales\Twig\Extensions\TranslateExtension']->translate(["ident" => "SHOP_MAIN_COURT"]);
        echo "
                </td>
                <td class=\"edittext\">
                <input type=\"text\" class=\"editinput\" size=\"35\" maxlength=\"";
        // line 275
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["edit"] ?? null), "oxshops__oxcourt", [], "any", false, false, false, 275), "fldmax_length", [], "any", false, false, false, 275), "html", null, true);
        echo "\" name=\"editval[oxshops__oxcourt]\" value=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["edit"] ?? null), "oxshops__oxcourt", [], "any", false, false, false, 275), "value", [], "any", false, false, false, 275), "html", null, true);
        echo "\" ";
        echo twig_escape_filter($this->env, ($context["readonly"] ?? null), "html", null, true);
        echo ">
                ";
        // line 276
        $this->loadTemplate("@__main__/inputhelp.html.twig", "@__main__/shop_main.html.twig", 276)->display(twig_array_merge($context, ["sHelpId" => $this->extensions['OxidEsales\Twig\Extensions\InputHelpExtension']->getHelpId("HELP_SHOP_MAIN_COURT"), "sHelpText" => $this->extensions['OxidEsales\Twig\Extensions\InputHelpExtension']->getHelpText("HELP_SHOP_MAIN_COURT")]));
        // line 277
        echo "                </td>
            </tr>
        ";
    }

    // line 285
    public function block_admin_shop_main_leftform($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 286
        echo "            ";
        $this->loadTemplate("@__main__/include/shop_information.html.twig", "@__main__/shop_main.html.twig", 286)->display($context);
        // line 287
        echo "            <tr>
                <td class=\"edittext\" >
                    ";
        // line 289
        echo $this->extensions['OxidEsales\Twig\Extensions\TranslateExtension']->translate(["ident" => "SHOP_MAIN_SHOPNAME"]);
        echo "
                </td>
                <td class=\"edittext\">
                    <input type=\"text\" class=\"editinput\" size=\"35\" maxlength=\"";
        // line 292
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["edit"] ?? null), "oxshops__oxname", [], "any", false, false, false, 292), "fldmax_length", [], "any", false, false, false, 292), "html", null, true);
        echo "\" name=\"editval[oxshops__oxname]\" value=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["edit"] ?? null), "oxshops__oxname", [], "any", false, false, false, 292), "value", [], "any", false, false, false, 292), "html", null, true);
        echo "\" id=\"oLockTarget\" ";
        echo twig_escape_filter($this->env, ($context["readonly"] ?? null), "html", null, true);
        echo ">
                    ";
        // line 293
        $this->loadTemplate("@__main__/inputhelp.html.twig", "@__main__/shop_main.html.twig", 293)->display(twig_array_merge($context, ["sHelpId" => $this->extensions['OxidEsales\Twig\Extensions\InputHelpExtension']->getHelpId("HELP_SHOP_MAIN_SHOPNAME"), "sHelpText" => $this->extensions['OxidEsales\Twig\Extensions\InputHelpExtension']->getHelpText("HELP_SHOP_MAIN_SHOPNAME")]));
        // line 294
        echo "                </td>
            </tr>
            ";
        // line 296
        if ( !($context["IsOXDemoShop"] ?? null)) {
            // line 297
            echo "            <tr>
                <td class=\"edittext\" >
                            ";
            // line 299
            echo $this->extensions['OxidEsales\Twig\Extensions\TranslateExtension']->translate(["ident" => "SHOP_MAIN_SMTPSERVER"]);
            echo "
                </td>
                <td class=\"edittext\">
                <input type=\"text\" class=\"editinput\" size=\"35\" maxlength=\"";
            // line 302
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["edit"] ?? null), "oxshops__oxsmtp", [], "any", false, false, false, 302), "fldmax_length", [], "any", false, false, false, 302), "html", null, true);
            echo "\" name=\"editval[oxshops__oxsmtp]\" value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["edit"] ?? null), "oxshops__oxsmtp", [], "any", false, false, false, 302), "value", [], "any", false, false, false, 302), "html", null, true);
            echo "\" ";
            echo twig_escape_filter($this->env, ($context["readonly"] ?? null), "html", null, true);
            echo ">
                ";
            // line 303
            $this->loadTemplate("@__main__/inputhelp.html.twig", "@__main__/shop_main.html.twig", 303)->display(twig_array_merge($context, ["sHelpId" => $this->extensions['OxidEsales\Twig\Extensions\InputHelpExtension']->getHelpId("HELP_SHOP_MAIN_SMTPSERVER"), "sHelpText" => $this->extensions['OxidEsales\Twig\Extensions\InputHelpExtension']->getHelpText("HELP_SHOP_MAIN_SMTPSERVER")]));
            // line 304
            echo "                </td>
            </tr>
            <tr>
                <td class=\"edittext\" >
                            ";
            // line 308
            echo $this->extensions['OxidEsales\Twig\Extensions\TranslateExtension']->translate(["ident" => "SHOP_MAIN_SMTPUSER"]);
            echo "
                </td>
                <td class=\"edittext\">
                <input type=\"text\" class=\"editinput\" size=\"35\" maxlength=\"";
            // line 311
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["edit"] ?? null), "oxshops__oxsmtpuser", [], "any", false, false, false, 311), "fldmax_length", [], "any", false, false, false, 311), "html", null, true);
            echo "\" name=\"editval[oxshops__oxsmtpuser]\" value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["edit"] ?? null), "oxshops__oxsmtpuser", [], "any", false, false, false, 311), "value", [], "any", false, false, false, 311), "html", null, true);
            echo "\" ";
            echo twig_escape_filter($this->env, ($context["readonly"] ?? null), "html", null, true);
            echo ">
                ";
            // line 312
            $this->loadTemplate("@__main__/inputhelp.html.twig", "@__main__/shop_main.html.twig", 312)->display(twig_array_merge($context, ["sHelpId" => $this->extensions['OxidEsales\Twig\Extensions\InputHelpExtension']->getHelpId("HELP_SHOP_MAIN_SMTPUSER"), "sHelpText" => $this->extensions['OxidEsales\Twig\Extensions\InputHelpExtension']->getHelpText("HELP_SHOP_MAIN_SMTPUSER")]));
            // line 313
            echo "                </td>
            </tr>
            <tr>
                <td class=\"edittext\" >
                            ";
            // line 317
            echo $this->extensions['OxidEsales\Twig\Extensions\TranslateExtension']->translate(["ident" => "SHOP_MAIN_SMTPPASSWORD"]);
            echo "
                </td>
                <td class=\"edittext\">
                <input type=\"password\" name=\"oxsmtppwd\" size=\"35\" maxlength=\"128\" class=\"editinput\" ";
            // line 320
            echo twig_escape_filter($this->env, ($context["readonly"] ?? null), "html", null, true);
            echo " onfocus=\"modSmtpField()\" onChange=\"modSmtpField()\">
                ";
            // line 321
            echo $this->extensions['OxidEsales\Twig\Extensions\TranslateExtension']->translate(["ident" => "SHOP_MAIN_SMTPPWUNSET"]);
            echo "
                ";
            // line 322
            $this->loadTemplate("@__main__/inputhelp.html.twig", "@__main__/shop_main.html.twig", 322)->display(twig_array_merge($context, ["sHelpId" => $this->extensions['OxidEsales\Twig\Extensions\InputHelpExtension']->getHelpId("HELP_SHOP_MAIN_SMTPPASSWORD"), "sHelpText" => $this->extensions['OxidEsales\Twig\Extensions\InputHelpExtension']->getHelpText("HELP_SHOP_MAIN_SMTPPASSWORD")]));
            // line 323
            echo "                </td>
            </tr>
            <tr>
                <td class=\"edittext\" >
                            ";
            // line 327
            echo $this->extensions['OxidEsales\Twig\Extensions\TranslateExtension']->translate(["ident" => "SHOP_MAIN_INFOEMAIL"]);
            echo "
                </td>
                <td class=\"edittext\">
                <input type=\"text\" class=\"editinput\" size=\"35\" maxlength=\"";
            // line 330
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["edit"] ?? null), "oxshops__oxinfoemail", [], "any", false, false, false, 330), "fldmax_length", [], "any", false, false, false, 330), "html", null, true);
            echo "\" name=\"editval[oxshops__oxinfoemail]\" value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["edit"] ?? null), "oxshops__oxinfoemail", [], "any", false, false, false, 330), "value", [], "any", false, false, false, 330), "html", null, true);
            echo "\" ";
            echo twig_escape_filter($this->env, ($context["readonly"] ?? null), "html", null, true);
            echo ">
                ";
            // line 331
            $this->loadTemplate("@__main__/inputhelp.html.twig", "@__main__/shop_main.html.twig", 331)->display(twig_array_merge($context, ["sHelpId" => $this->extensions['OxidEsales\Twig\Extensions\InputHelpExtension']->getHelpId("HELP_SHOP_MAIN_INFOEMAIL"), "sHelpText" => $this->extensions['OxidEsales\Twig\Extensions\InputHelpExtension']->getHelpText("HELP_SHOP_MAIN_INFOEMAIL")]));
            // line 332
            echo "                </td>
            </tr>
            <tr>
                <td class=\"edittext\" >
                            ";
            // line 336
            echo $this->extensions['OxidEsales\Twig\Extensions\TranslateExtension']->translate(["ident" => "SHOP_MAIN_ORDEREMAIL"]);
            echo "
                </td>
                <td class=\"edittext\">
                <input type=\"text\" class=\"editinput\" size=\"35\" maxlength=\"";
            // line 339
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["edit"] ?? null), "oxshops__oxorderemail", [], "any", false, false, false, 339), "fldmax_length", [], "any", false, false, false, 339), "html", null, true);
            echo "\" name=\"editval[oxshops__oxorderemail]\" value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["edit"] ?? null), "oxshops__oxorderemail", [], "any", false, false, false, 339), "value", [], "any", false, false, false, 339), "html", null, true);
            echo "\" ";
            echo twig_escape_filter($this->env, ($context["readonly"] ?? null), "html", null, true);
            echo ">
                ";
            // line 340
            $this->loadTemplate("@__main__/inputhelp.html.twig", "@__main__/shop_main.html.twig", 340)->display(twig_array_merge($context, ["sHelpId" => $this->extensions['OxidEsales\Twig\Extensions\InputHelpExtension']->getHelpId("HELP_SHOP_MAIN_ORDEREMAIL"), "sHelpText" => $this->extensions['OxidEsales\Twig\Extensions\InputHelpExtension']->getHelpText("HELP_SHOP_MAIN_ORDEREMAIL")]));
            // line 341
            echo "                </td>
            </tr>
            <tr>
                <td class=\"edittext\" >
                            ";
            // line 345
            echo $this->extensions['OxidEsales\Twig\Extensions\TranslateExtension']->translate(["ident" => "SHOP_MAIN_OWNEREMAIL"]);
            echo "
                </td>
                <td class=\"edittext\">
                <input type=\"text\" class=\"editinput\" size=\"35\" maxlength=\"";
            // line 348
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["edit"] ?? null), "oxshops__oxowneremail", [], "any", false, false, false, 348), "fldmax_length", [], "any", false, false, false, 348), "html", null, true);
            echo "\" name=\"editval[oxshops__oxowneremail]\" value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["edit"] ?? null), "oxshops__oxowneremail", [], "any", false, false, false, 348), "value", [], "any", false, false, false, 348), "html", null, true);
            echo "\" ";
            echo twig_escape_filter($this->env, ($context["readonly"] ?? null), "html", null, true);
            echo ">
                ";
            // line 349
            $this->loadTemplate("@__main__/inputhelp.html.twig", "@__main__/shop_main.html.twig", 349)->display(twig_array_merge($context, ["sHelpId" => $this->extensions['OxidEsales\Twig\Extensions\InputHelpExtension']->getHelpId("HELP_SHOP_MAIN_OWNEREMAIL"), "sHelpText" => $this->extensions['OxidEsales\Twig\Extensions\InputHelpExtension']->getHelpText("HELP_SHOP_MAIN_OWNEREMAIL")]));
            // line 350
            echo "                </td>
            </tr>
            ";
        }
        // line 353
        echo "        ";
    }

    // line 369
    public function block_admin_shop_main_emailsubject($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 370
        echo "                    <tr>
                      <td class=\"edittext\" >
                        ";
        // line 372
        echo $this->extensions['OxidEsales\Twig\Extensions\TranslateExtension']->translate(["ident" => "SHOP_MAIN_ORDERSUBJECT"]);
        echo "
                      </td>
                      <td class=\"edittext\">
                        <input type=\"text\" class=\"editinput\" size=\"35\" maxlength=\"";
        // line 375
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["edit"] ?? null), "oxshops__oxordersubject", [], "any", false, false, false, 375), "fldmax_length", [], "any", false, false, false, 375), "html", null, true);
        echo "\" name=\"editval[oxshops__oxordersubject]\" value=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["edit"] ?? null), "oxshops__oxordersubject", [], "any", false, false, false, 375), "value", [], "any", false, false, false, 375), "html", null, true);
        echo "\" ";
        echo twig_escape_filter($this->env, ($context["readonly"] ?? null), "html", null, true);
        echo ">
                        ";
        // line 376
        $this->loadTemplate("@__main__/inputhelp.html.twig", "@__main__/shop_main.html.twig", 376)->display(twig_array_merge($context, ["sHelpId" => $this->extensions['OxidEsales\Twig\Extensions\InputHelpExtension']->getHelpId("HELP_SHOP_MAIN_ORDERSUBJECT"), "sHelpText" => $this->extensions['OxidEsales\Twig\Extensions\InputHelpExtension']->getHelpText("HELP_SHOP_MAIN_ORDERSUBJECT")]));
        // line 377
        echo "                      </td>
                    </tr>
                    <tr>
                      <td class=\"edittext\" >
                        ";
        // line 381
        echo $this->extensions['OxidEsales\Twig\Extensions\TranslateExtension']->translate(["ident" => "SHOP_MAIN_REGISTERSUBJECT"]);
        echo "
                      </td>
                      <td class=\"edittext\">
                        <input type=\"text\" class=\"editinput\" size=\"35\" maxlength=\"";
        // line 384
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["edit"] ?? null), "oxshops__oxregistersubject", [], "any", false, false, false, 384), "fldmax_length", [], "any", false, false, false, 384), "html", null, true);
        echo "\" name=\"editval[oxshops__oxregistersubject]\" value=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["edit"] ?? null), "oxshops__oxregistersubject", [], "any", false, false, false, 384), "value", [], "any", false, false, false, 384), "html", null, true);
        echo "\" ";
        echo twig_escape_filter($this->env, ($context["readonly"] ?? null), "html", null, true);
        echo ">
                        ";
        // line 385
        $this->loadTemplate("@__main__/inputhelp.html.twig", "@__main__/shop_main.html.twig", 385)->display(twig_array_merge($context, ["sHelpId" => $this->extensions['OxidEsales\Twig\Extensions\InputHelpExtension']->getHelpId("HELP_SHOP_MAIN_REGISTERSUBJECT"), "sHelpText" => $this->extensions['OxidEsales\Twig\Extensions\InputHelpExtension']->getHelpText("HELP_SHOP_MAIN_REGISTERSUBJECT")]));
        // line 386
        echo "                      </td>
                    </tr>
                    <tr>
                      <td class=\"edittext\" >
                        ";
        // line 390
        echo $this->extensions['OxidEsales\Twig\Extensions\TranslateExtension']->translate(["ident" => "SHOP_MAIN_FORGOTPWDSUBJECT"]);
        echo "
                      </td>
                      <td class=\"edittext\">
                        <input type=\"text\" class=\"editinput\" size=\"35\" maxlength=\"";
        // line 393
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["edit"] ?? null), "oxshops__oxforgotpwdsubject", [], "any", false, false, false, 393), "fldmax_length", [], "any", false, false, false, 393), "html", null, true);
        echo "\" name=\"editval[oxshops__oxforgotpwdsubject]\" value=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["edit"] ?? null), "oxshops__oxforgotpwdsubject", [], "any", false, false, false, 393), "value", [], "any", false, false, false, 393), "html", null, true);
        echo "\" ";
        echo twig_escape_filter($this->env, ($context["readonly"] ?? null), "html", null, true);
        echo ">
                        ";
        // line 394
        $this->loadTemplate("@__main__/inputhelp.html.twig", "@__main__/shop_main.html.twig", 394)->display(twig_array_merge($context, ["sHelpId" => $this->extensions['OxidEsales\Twig\Extensions\InputHelpExtension']->getHelpId("HELP_SHOP_MAIN_FORGOTPWDSUBJECT"), "sHelpText" => $this->extensions['OxidEsales\Twig\Extensions\InputHelpExtension']->getHelpText("HELP_SHOP_MAIN_FORGOTPWDSUBJECT")]));
        // line 395
        echo "                      </td>
                    </tr>
                    <tr>
                      <td class=\"edittext\" >
                        ";
        // line 399
        echo $this->extensions['OxidEsales\Twig\Extensions\TranslateExtension']->translate(["ident" => "SHOP_MAIN_SENT_NOW_SUBJECT"]);
        echo "
                      </td>
                      <td class=\"edittext\">
                        <input type=\"text\" class=\"editinput\" size=\"35\" maxlength=\"";
        // line 402
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["edit"] ?? null), "oxshops__oxsendednowsubject", [], "any", false, false, false, 402), "fldmax_length", [], "any", false, false, false, 402), "html", null, true);
        echo "\" name=\"editval[oxshops__oxsendednowsubject]\" value=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["edit"] ?? null), "oxshops__oxsendednowsubject", [], "any", false, false, false, 402), "value", [], "any", false, false, false, 402), "html", null, true);
        echo "\" ";
        echo twig_escape_filter($this->env, ($context["readonly"] ?? null), "html", null, true);
        echo ">
                        ";
        // line 403
        $this->loadTemplate("@__main__/inputhelp.html.twig", "@__main__/shop_main.html.twig", 403)->display(twig_array_merge($context, ["sHelpId" => $this->extensions['OxidEsales\Twig\Extensions\InputHelpExtension']->getHelpId("HELP_SHOP_MAIN_NOWSENDEDSUBJECT"), "sHelpText" => $this->extensions['OxidEsales\Twig\Extensions\InputHelpExtension']->getHelpText("HELP_SHOP_MAIN_NOWSENDEDSUBJECT")]));
        // line 404
        echo "                    </tr>
                ";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@__main__/shop_main.html.twig";
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
        return array (  1016 => 404,  1014 => 403,  1006 => 402,  1000 => 399,  994 => 395,  992 => 394,  984 => 393,  978 => 390,  972 => 386,  970 => 385,  962 => 384,  956 => 381,  950 => 377,  948 => 376,  940 => 375,  934 => 372,  930 => 370,  926 => 369,  922 => 353,  917 => 350,  915 => 349,  907 => 348,  901 => 345,  895 => 341,  893 => 340,  885 => 339,  879 => 336,  873 => 332,  871 => 331,  863 => 330,  857 => 327,  851 => 323,  849 => 322,  845 => 321,  841 => 320,  835 => 317,  829 => 313,  827 => 312,  819 => 311,  813 => 308,  807 => 304,  805 => 303,  797 => 302,  791 => 299,  787 => 297,  785 => 296,  781 => 294,  779 => 293,  771 => 292,  765 => 289,  761 => 287,  758 => 286,  754 => 285,  748 => 277,  746 => 276,  738 => 275,  732 => 272,  726 => 268,  724 => 267,  716 => 266,  710 => 263,  703 => 258,  701 => 257,  693 => 256,  687 => 253,  680 => 248,  678 => 247,  670 => 246,  664 => 243,  657 => 238,  655 => 237,  647 => 236,  641 => 233,  635 => 229,  633 => 228,  625 => 227,  619 => 224,  613 => 220,  611 => 219,  603 => 218,  597 => 215,  591 => 211,  589 => 210,  581 => 209,  575 => 206,  569 => 202,  567 => 201,  559 => 200,  553 => 197,  547 => 193,  545 => 192,  537 => 191,  531 => 188,  525 => 184,  523 => 183,  515 => 182,  509 => 179,  503 => 175,  501 => 174,  493 => 173,  487 => 170,  481 => 166,  479 => 165,  471 => 164,  465 => 161,  459 => 157,  457 => 156,  449 => 155,  441 => 154,  435 => 151,  429 => 147,  427 => 146,  419 => 145,  413 => 142,  407 => 138,  405 => 137,  397 => 136,  389 => 135,  383 => 132,  377 => 128,  375 => 127,  367 => 126,  361 => 123,  355 => 119,  353 => 118,  345 => 117,  339 => 114,  333 => 110,  331 => 109,  323 => 108,  317 => 107,  312 => 105,  306 => 104,  303 => 103,  299 => 102,  295 => 425,  293 => 424,  273 => 413,  264 => 406,  262 => 369,  257 => 366,  253 => 364,  238 => 362,  234 => 361,  229 => 360,  227 => 359,  220 => 354,  218 => 285,  211 => 280,  209 => 102,  200 => 96,  196 => 95,  190 => 92,  186 => 91,  183 => 90,  177 => 88,  175 => 87,  172 => 86,  166 => 84,  164 => 83,  158 => 80,  153 => 78,  147 => 75,  143 => 74,  139 => 73,  136 => 72,  132 => 70,  128 => 68,  126 => 67,  117 => 60,  111 => 58,  109 => 57,  104 => 54,  98 => 52,  96 => 51,  57 => 15,  42 => 2,  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@__main__/shop_main.html.twig", "/var/www/html/source/Application/views/admin_twig/tpl/shop_main.html.twig");
    }
}
