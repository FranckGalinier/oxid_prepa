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

/* @__main__/content_main.html.twig */
class __TwigTemplate_9622151036dfcab84536a26464dd8cf8 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'admin_content_main_form' => [$this, 'block_admin_content_main_form'],
            'admin_content_main_editor' => [$this, 'block_admin_content_main_editor'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        $this->loadTemplate("@__main__/headitem.html.twig", "@__main__/content_main.html.twig", 1)->display(twig_array_merge($context, ["title" => $this->extensions['OxidEsales\Twig\Extensions\Filters\TranslateExtension']->translate("CONTENT_MAIN_TITLE")]));
        // line 2
        echo "
<script type=\"text/javascript\">
    <!--
    function ShowMenueFields(iVal) {
        if (iVal == 2) {
            document.getElementById('cattree').style.visibility = 'visible';
        } else {
            document.getElementById('cattree').style.visibility = 'hidden';
        }

        if (iVal == 3) {
            document.getElementById('manuell').style.visibility = 'visible';
        } else {
            document.getElementById('manuell').style.visibility = 'hidden';
        }
    }

    //-->
</script>

";
        // line 22
        if (($context["readonly"] ?? null)) {
            // line 23
            echo "    ";
            $context["readonly"] = "readonly disabled";
        } else {
            // line 25
            echo "    ";
            $context["readonly"] = "";
        }
        // line 27
        echo "
<form name=\"transfer\" id=\"transfer\" action=\"";
        // line 28
        echo twig_get_attribute($this->env, $this->source, ($context["oViewConf"] ?? null), "getSelfLink", [], "method", false, false, false, 28);
        echo "\" method=\"post\">
    ";
        // line 29
        echo twig_get_attribute($this->env, $this->source, ($context["oViewConf"] ?? null), "getHiddenSid", [], "method", false, false, false, 29);
        echo "
    <input type=\"hidden\" name=\"oxid\" value=\"";
        // line 30
        echo twig_escape_filter($this->env, ($context["oxid"] ?? null), "html", null, true);
        echo "\">
    <input type=\"hidden\" name=\"cl\" value=\"content_main\">
    <input type=\"hidden\" name=\"editlanguage\" value=\"";
        // line 32
        echo twig_escape_filter($this->env, ($context["editlanguage"] ?? null), "html", null, true);
        echo "\">
</form>
<form name=\"myedit\" id=\"myedit\" action=\"";
        // line 34
        echo twig_get_attribute($this->env, $this->source, ($context["oViewConf"] ?? null), "getSelfLink", [], "method", false, false, false, 34);
        echo "\" method=\"post\"
      onSubmit=\"copyLongDesc( 'oxcontents__oxcontent' );\">
    ";
        // line 36
        echo twig_get_attribute($this->env, $this->source, ($context["oViewConf"] ?? null), "getHiddenSid", [], "method", false, false, false, 36);
        echo "
    <input type=\"hidden\" name=\"cl\" value=\"content_main\">
    <input type=\"hidden\" name=\"fnc\" value=\"\">
    <input type=\"hidden\" name=\"oxid\" value=\"";
        // line 39
        echo twig_escape_filter($this->env, ($context["oxid"] ?? null), "html", null, true);
        echo "\">
    <input type=\"hidden\" name=\"editval[oxcontents__oxid]\" value=\"";
        // line 40
        echo twig_escape_filter($this->env, ($context["oxid"] ?? null), "html", null, true);
        echo "\">
    <input type=\"hidden\" name=\"folderclass\" value=\"oxcontent\">
    <input type=\"hidden\" name=\"editval[oxcontents__oxcontent]\" value=\"\">

    <table cellspacing=\"0\" cellpadding=\"0\" border=\"0\" width=\"98%\">
        <colgroup>
            <col width=\"30%\">
            <col width=\"5%\">
            <col width=\"65%\">
        </colgroup>
        <tr>
            <td valign=\"top\" class=\"edittext\" width=\"200\">
                <table cellspacing=\"0\" cellpadding=\"0\" border=\"0\">

                    ";
        // line 54
        $this->displayBlock('admin_content_main_form', $context, $blocks);
        // line 204
        echo "                    <tr>
                        <td class=\"edittext\">
                        </td>
                        <td class=\"edittext\">
                            <input type=\"submit\" class=\"edittext\" name=\"saveContent\"
                                   value=\"";
        // line 209
        echo $this->extensions['OxidEsales\Twig\Extensions\TranslateExtension']->translate(["ident" => "GENERAL_SAVE"]);
        echo "\"
                                   onClick=\"Javascript:document.myedit.fnc.value='save'\"\" ";
        // line 210
        echo twig_escape_filter($this->env, ($context["readonly"] ?? null), "html", null, true);
        echo "><br>
                        </td>
                    </tr>
                </table>
            </td>
            <td>&nbsp;</td>
            <!-- Anfang rechte Seite -->
            <td valign=\"top\" class=\"edittext\" align=\"left\">
                ";
        // line 218
        $this->displayBlock('admin_content_main_editor', $context, $blocks);
        // line 221
        echo "            </td>
            <!-- Ende rechte Seite -->
        </tr>
    </table>
</form>

";
        // line 227
        $this->loadTemplate("@__main__/bottomnaviitem.html.twig", "@__main__/content_main.html.twig", 227)->display($context);
        // line 228
        $this->loadTemplate("@__main__/bottomitem.html.twig", "@__main__/content_main.html.twig", 228)->display($context);
    }

    // line 54
    public function block_admin_content_main_form($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 55
        echo "                        ";
        if (($context["blLoadError"] ?? null)) {
            // line 56
            echo "                            <tr>
                                <td colspan=\"2\">
                                    <div class=\"errorbox\">";
            // line 58
            echo $this->extensions['OxidEsales\Twig\Extensions\TranslateExtension']->translate(["ident" => "CONTENT_MAIN_ERROR"]);
            echo " ";
            echo $this->extensions['OxidEsales\Twig\Extensions\TranslateExtension']->translate(["ident" => "CONTENT_MAIN_USEDIDENTCODE"]);
            echo "</div>
                                </td>
                            </tr>
                        ";
        }
        // line 62
        echo "
                        <tr>
                            <td class=\"edittext\" width=\"70\">
                                ";
        // line 65
        echo $this->extensions['OxidEsales\Twig\Extensions\TranslateExtension']->translate(["ident" => "GENERAL_ACTIVE"]);
        echo "
                            </td>
                            <td class=\"edittext\">
                                <input class=\"edittext\" type=\"checkbox\" name=\"editval[oxcontents__oxactive]\" value='1'
                                       ";
        // line 69
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["edit"] ?? null), "oxcontents__oxactive", [], "any", false, false, false, 69), "value", [], "any", false, false, false, 69) == 1)) {
            echo "checked";
        }
        echo " ";
        echo twig_escape_filter($this->env, ($context["readonly"] ?? null), "html", null, true);
        echo ">
                                ";
        // line 70
        $this->loadTemplate("@__main__/inputhelp.html.twig", "@__main__/content_main.html.twig", 70)->display(twig_array_merge($context, ["sHelpId" => $this->extensions['OxidEsales\Twig\Extensions\InputHelpExtension']->getHelpId("HELP_GENERAL_ACTIVE"), "sHelpText" => $this->extensions['OxidEsales\Twig\Extensions\InputHelpExtension']->getHelpText("HELP_GENERAL_ACTIVE")]));
        // line 71
        echo "                            </td>
                        </tr>
                        <tr>
                            <td class=\"edittext\">
                                ";
        // line 75
        echo $this->extensions['OxidEsales\Twig\Extensions\TranslateExtension']->translate(["ident" => "GENERAL_TITLE"]);
        echo "
                            </td>
                            <td class=\"edittext\">
                                <input type=\"text\" class=\"editinput\" size=\"28\"
                                       maxlength=\"";
        // line 79
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["edit"] ?? null), "oxcontents__oxtitle", [], "any", false, false, false, 79), "fldmax_length", [], "any", false, false, false, 79), "html", null, true);
        echo "\"
                                       name=\"editval[oxcontents__oxtitle]\"
                                       value=\"";
        // line 81
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["edit"] ?? null), "oxcontents__oxtitle", [], "any", false, false, false, 81), "value", [], "any", false, false, false, 81), "html", null, true);
        echo "\" ";
        echo twig_escape_filter($this->env, ($context["readonly"] ?? null), "html", null, true);
        echo ">
                                ";
        // line 82
        $this->loadTemplate("@__main__/inputhelp.html.twig", "@__main__/content_main.html.twig", 82)->display(twig_array_merge($context, ["sHelpId" => $this->extensions['OxidEsales\Twig\Extensions\InputHelpExtension']->getHelpId("HELP_GENERAL_TITLE"), "sHelpText" => $this->extensions['OxidEsales\Twig\Extensions\InputHelpExtension']->getHelpText("HELP_GENERAL_TITLE")]));
        // line 83
        echo "                            </td>
                        </tr>
                        <tr>
                            <td class=\"edittext\">
                                ";
        // line 87
        echo $this->extensions['OxidEsales\Twig\Extensions\TranslateExtension']->translate(["ident" => "GENERAL_IDENT"]);
        echo ".
                            </td>
                            <td class=\"edittext\">
                                <input type=\"text\" class=\"editinput\" size=\"28\"
                                       maxlength=\"";
        // line 91
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["edit"] ?? null), "oxcontents__oxloadid", [], "any", false, false, false, 91), "fldmax_length", [], "any", false, false, false, 91), "html", null, true);
        echo "\"
                                       name=\"editval[oxcontents__oxloadid]\"
                                       value=\"";
        // line 93
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["edit"] ?? null), "oxcontents__oxloadid", [], "any", false, false, false, 93), "value", [], "any", false, false, false, 93), "html", null, true);
        echo "\" ";
        echo twig_escape_filter($this->env, ($context["readonly"] ?? null), "html", null, true);
        echo ">
                                ";
        // line 94
        $this->loadTemplate("@__main__/inputhelp.html.twig", "@__main__/content_main.html.twig", 94)->display(twig_array_merge($context, ["sHelpId" => $this->extensions['OxidEsales\Twig\Extensions\InputHelpExtension']->getHelpId("HELP_GENERAL_IDENT"), "sHelpText" => $this->extensions['OxidEsales\Twig\Extensions\InputHelpExtension']->getHelpText("HELP_GENERAL_IDENT")]));
        // line 95
        echo "                            </td>
                        </tr>
                        <tr>
                            <td class=\"edittext\">
                                ";
        // line 99
        echo $this->extensions['OxidEsales\Twig\Extensions\TranslateExtension']->translate(["ident" => "GENERAL_INFOLDER"]);
        echo "
                            </td>
                            <td class=\"edittext\">
                                <select name=\"editval[oxcontents__oxfolder]\" class=\"folderselect\" ";
        // line 102
        echo twig_escape_filter($this->env, ($context["readonly"] ?? null), "html", null, true);
        echo ">
                                    ";
        // line 103
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["afolder"] ?? null));
        foreach ($context['_seq'] as $context["field"] => $context["color"]) {
            // line 104
            echo "                                        <option value=\"";
            echo twig_escape_filter($this->env, $context["field"], "html", null, true);
            echo "\"
                                                ";
            // line 105
            if (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["edit"] ?? null), "oxcontents__oxfolder", [], "any", false, false, false, 105), "value", [], "any", false, false, false, 105) == $context["field"]) || ((twig_replace_filter($context["field"], ["_RR" => ""]) == "CMSFOLDER_NONE") && (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["edit"] ?? null), "oxcontents__oxfolder", [], "any", false, false, false, 105), "value", [], "any", false, false, false, 105) == "")))) {
                echo "SELECTED";
            }
            // line 106
            echo "                                                style=\"color: ";
            echo twig_escape_filter($this->env, $context["color"], "html", null, true);
            echo ";\">";
            echo $this->extensions['OxidEsales\Twig\Extensions\TranslateExtension']->translate(["ident" => $context["field"]]);
            echo "</option>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['field'], $context['color'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 108
        echo "                                </select>
                                ";
        // line 109
        $this->loadTemplate("@__main__/inputhelp.html.twig", "@__main__/content_main.html.twig", 109)->display(twig_array_merge($context, ["sHelpId" => $this->extensions['OxidEsales\Twig\Extensions\InputHelpExtension']->getHelpId("HELP_GENERAL_INFOLDER"), "sHelpText" => $this->extensions['OxidEsales\Twig\Extensions\InputHelpExtension']->getHelpText("HELP_GENERAL_INFOLDER")]));
        // line 110
        echo "                            </td>
                        </tr>
                        ";
        // line 112
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["edit"] ?? null), "oxcontents__oxloadid", [], "any", false, false, false, 112), "value", [], "any", false, false, false, 112) == "oxagb")) {
            // line 113
            echo "                            <tr>
                                <td class=\"edittext\">
                                    ";
            // line 115
            echo $this->extensions['OxidEsales\Twig\Extensions\TranslateExtension']->translate(["ident" => "CONTENT_MAIN_TERMVER"]);
            echo "
                                </td>
                                <td class=\"edittext\">
                                    <input type=\"text\" class=\"editinput\" size=\"28\"
                                           maxlength=\"";
            // line 119
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["edit"] ?? null), "oxcontents__oxtermversion", [], "any", false, false, false, 119), "fldmax_length", [], "any", false, false, false, 119), "html", null, true);
            echo "\"
                                           name=\"editval[oxcontents__oxtermversion]\"
                                           value=\"";
            // line 121
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["edit"] ?? null), "oxcontents__oxtermversion", [], "any", false, false, false, 121), "value", [], "any", false, false, false, 121), "html", null, true);
            echo "\" ";
            echo twig_escape_filter($this->env, ($context["readonly"] ?? null), "html", null, true);
            echo ">
                                </td>
                            </tr>
                        ";
        }
        // line 125
        echo "                        <tr>
                            <td class=\"edittext\" colspan=\"2\"><br>
                                ";
        // line 127
        $this->loadTemplate("@__main__/language_edit.html.twig", "@__main__/content_main.html.twig", 127)->display($context);
        echo "<br>
                            </td>
                        </tr>
                        <tr>
                            <td class=\"edittext\">
                                ";
        // line 132
        echo $this->extensions['OxidEsales\Twig\Extensions\TranslateExtension']->translate(["ident" => "CONTENT_MAIN_SNIPPET"]);
        echo "
                            </td>
                            <td class=\"edittext\">
                                <input type=\"radio\" name=\"editval[oxcontents__oxtype]\" id=\"oxtype0\" value=\"0\"
                                       class=\"edittext\" onClick=\"javascript:ShowMenueFields( 0);\"
                                       ";
        // line 137
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["edit"] ?? null), "oxcontents__oxsnippet", [], "any", false, false, false, 137), "value", [], "any", false, false, false, 137) == 1)) {
            echo "CHECKED";
        }
        echo " ";
        echo twig_escape_filter($this->env, ($context["readonly"] ?? null), "html", null, true);
        echo ">
                                ";
        // line 138
        $this->loadTemplate("@__main__/inputhelp.html.twig", "@__main__/content_main.html.twig", 138)->display(twig_array_merge($context, ["sHelpId" => $this->extensions['OxidEsales\Twig\Extensions\InputHelpExtension']->getHelpId("HELP_CONTENT_MAIN_SNIPPET"), "sHelpText" => $this->extensions['OxidEsales\Twig\Extensions\InputHelpExtension']->getHelpText("HELP_CONTENT_MAIN_SNIPPET")]));
        // line 139
        echo "                            </td>
                        </tr>
                        <tr>
                            <td class=\"edittext\">
                                ";
        // line 143
        echo $this->extensions['OxidEsales\Twig\Extensions\TranslateExtension']->translate(["ident" => "CONTENT_MAIN_MAINMENU"]);
        echo "
                            </td>
                            <td class=\"edittext\">
                                <input type=\"radio\" name=\"editval[oxcontents__oxtype]\" id=\"oxtype1\" value=\"1\"
                                       class=\"edittext\" onClick=\"javascript:ShowMenueFields( 1);\"
                                       ";
        // line 148
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["edit"] ?? null), "oxcontents__oxtype", [], "any", false, false, false, 148), "value", [], "any", false, false, false, 148) == 1)) {
            echo "CHECKED";
        }
        echo " ";
        echo twig_escape_filter($this->env, ($context["readonly"] ?? null), "html", null, true);
        echo ">
                                ";
        // line 149
        $this->loadTemplate("@__main__/inputhelp.html.twig", "@__main__/content_main.html.twig", 149)->display(twig_array_merge($context, ["sHelpId" => $this->extensions['OxidEsales\Twig\Extensions\InputHelpExtension']->getHelpId("HELP_CONTENT_MAIN_MAINMENU"), "sHelpText" => $this->extensions['OxidEsales\Twig\Extensions\InputHelpExtension']->getHelpText("HELP_CONTENT_MAIN_MAINMENU")]));
        // line 150
        echo "                            </td>
                        </tr>
                        <tr>
                            <td class=\"edittext\">
                                ";
        // line 154
        echo $this->extensions['OxidEsales\Twig\Extensions\TranslateExtension']->translate(["ident" => "CONTENT_MAIN_CATEGORY"]);
        echo "
                            </td>
                            <td class=\"edittext\">
                                <input type=\"radio\" name=\"editval[oxcontents__oxtype]\" id=\"oxtype2\" value=\"2\"
                                       class=\"edittext\" onClick=\"javascript:ShowMenueFields( 2);\"
                                       ";
        // line 159
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["edit"] ?? null), "oxcontents__oxtype", [], "any", false, false, false, 159), "value", [], "any", false, false, false, 159) == 2)) {
            echo "CHECKED";
        }
        echo " ";
        echo twig_escape_filter($this->env, ($context["readonly"] ?? null), "html", null, true);
        echo ">
                                ";
        // line 160
        $this->loadTemplate("@__main__/inputhelp.html.twig", "@__main__/content_main.html.twig", 160)->display(twig_array_merge($context, ["sHelpId" => $this->extensions['OxidEsales\Twig\Extensions\InputHelpExtension']->getHelpId("HELP_CONTENT_MAIN_CATEGORY"), "sHelpText" => $this->extensions['OxidEsales\Twig\Extensions\InputHelpExtension']->getHelpText("HELP_CONTENT_MAIN_CATEGORY")]));
        // line 161
        echo "                            </td>
                        </tr>
                        <tr>
                            <td class=\"edittext\">
                                ";
        // line 165
        echo $this->extensions['OxidEsales\Twig\Extensions\TranslateExtension']->translate(["ident" => "CONTENT_MAIN_MANUAL"]);
        echo "
                            </td>
                            <td class=\"edittext\">
                                <input type=\"radio\" name=\"editval[oxcontents__oxtype]\" id=\"oxtype3\" value=\"3\"
                                       class=\"edittext\" onClick=\"javascript:ShowMenueFields( 3);\"
                                       ";
        // line 170
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["edit"] ?? null), "oxcontents__oxtype", [], "any", false, false, false, 170), "value", [], "any", false, false, false, 170) == 3)) {
            echo "CHECKED";
        }
        echo " ";
        echo twig_escape_filter($this->env, ($context["readonly"] ?? null), "html", null, true);
        echo ">
                                ";
        // line 171
        $this->loadTemplate("@__main__/inputhelp.html.twig", "@__main__/content_main.html.twig", 171)->display(twig_array_merge($context, ["sHelpId" => $this->extensions['OxidEsales\Twig\Extensions\InputHelpExtension']->getHelpId("HELP_CONTENT_MAIN_MANUAL"), "sHelpText" => $this->extensions['OxidEsales\Twig\Extensions\InputHelpExtension']->getHelpText("HELP_CONTENT_MAIN_MANUAL")]));
        // line 172
        echo "                            </td>
                        </tr>
                        <tr>
                            <td style=\"padding-top:20px;padding-bottom:20px;\" colspan=\"2\">
                                <hr>
                            </td>
                        </tr>
                        <tr id=\"cattree\" ";
        // line 179
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["edit"] ?? null), "oxcontents__oxtype", [], "any", false, false, false, 179), "value", [], "any", false, false, false, 179) != 2)) {
            echo "style=\"display:none;\"";
        }
        echo ">
                            <td class=\"edittext\">
                                ";
        // line 181
        echo $this->extensions['OxidEsales\Twig\Extensions\TranslateExtension']->translate(["ident" => "CONTENT_MAIN_INSERTBEFORE"]);
        echo "
                            </td>
                            <td class=\"edittext\">
                                <select name=\"editval[oxcontents__oxcatid]\" class=\"editinput\" ";
        // line 184
        echo twig_escape_filter($this->env, ($context["readonly"] ?? null), "html", null, true);
        echo ">
                                    ";
        // line 185
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["cattree"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["pcat"]) {
            // line 186
            echo "                                        <option value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["pcat"], "oxcategories__oxid", [], "any", false, false, false, 186), "value", [], "any", false, false, false, 186), "html", null, true);
            echo "\"
                                                ";
            // line 187
            if (twig_get_attribute($this->env, $this->source, $context["pcat"], "selected", [], "any", false, false, false, 187)) {
                echo "SELECTED";
            }
            echo ">";
            echo twig_escape_filter($this->env, $this->extensions['OxidEsales\Twig\Extensions\Filters\TruncateExtension']->truncate(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["pcat"], "oxcategories__oxtitle", [], "any", false, false, false, 187), "value", [], "any", false, false, false, 187), 33, "..", true), "html", null, true);
            echo "</option>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['pcat'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 189
        echo "                                </select>
                                ";
        // line 190
        $this->loadTemplate("@__main__/inputhelp.html.twig", "@__main__/content_main.html.twig", 190)->display(twig_array_merge($context, ["sHelpId" => $this->extensions['OxidEsales\Twig\Extensions\InputHelpExtension']->getHelpId("HELP_CONTENT_MAIN_INSERTBEFORE"), "sHelpText" => $this->extensions['OxidEsales\Twig\Extensions\InputHelpExtension']->getHelpText("HELP_CONTENT_MAIN_INSERTBEFORE")]));
        // line 191
        echo "                            </td>
                        </tr>
                        <tr id=\"manuell\" ";
        // line 193
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["edit"] ?? null), "oxcontents__oxtype", [], "any", false, false, false, 193), "value", [], "any", false, false, false, 193) != 3)) {
            echo "style=\"display:none;\"";
        }
        echo ">
                            <td class=\"edittext\">
                                ";
        // line 195
        echo $this->extensions['OxidEsales\Twig\Extensions\TranslateExtension']->translate(["ident" => "GENERAL_LINK"]);
        echo "
                            </td>
                            <td class=\"edittext\">
                                <input type=\"text\" size=\"28\" class=\"edittext\" style=\"font-size: 7pt;\"
                                       value=\"";
        // line 199
        echo ($context["link"] ?? null);
        echo "\" ";
        echo twig_escape_filter($this->env, ($context["readonly"] ?? null), "html", null, true);
        echo ">
                                ";
        // line 200
        $this->loadTemplate("@__main__/inputhelp.html.twig", "@__main__/content_main.html.twig", 200)->display(twig_array_merge($context, ["sHelpId" => $this->extensions['OxidEsales\Twig\Extensions\InputHelpExtension']->getHelpId("HELP_GENERAL_LINK"), "sHelpText" => $this->extensions['OxidEsales\Twig\Extensions\InputHelpExtension']->getHelpText("HELP_GENERAL_LINK")]));
        // line 201
        echo "                            </td>
                        </tr>
                    ";
    }

    // line 218
    public function block_admin_content_main_editor($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 219
        echo "                    ";
        $this->loadTemplate("@__main__/include/editor.html.twig", "@__main__/content_main.html.twig", 219)->display($context);
        // line 220
        echo "                ";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@__main__/content_main.html.twig";
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
        return array (  529 => 220,  526 => 219,  522 => 218,  516 => 201,  514 => 200,  508 => 199,  501 => 195,  494 => 193,  490 => 191,  488 => 190,  485 => 189,  473 => 187,  468 => 186,  464 => 185,  460 => 184,  454 => 181,  447 => 179,  438 => 172,  436 => 171,  428 => 170,  420 => 165,  414 => 161,  412 => 160,  404 => 159,  396 => 154,  390 => 150,  388 => 149,  380 => 148,  372 => 143,  366 => 139,  364 => 138,  356 => 137,  348 => 132,  340 => 127,  336 => 125,  327 => 121,  322 => 119,  315 => 115,  311 => 113,  309 => 112,  305 => 110,  303 => 109,  300 => 108,  289 => 106,  285 => 105,  280 => 104,  276 => 103,  272 => 102,  266 => 99,  260 => 95,  258 => 94,  252 => 93,  247 => 91,  240 => 87,  234 => 83,  232 => 82,  226 => 81,  221 => 79,  214 => 75,  208 => 71,  206 => 70,  198 => 69,  191 => 65,  186 => 62,  177 => 58,  173 => 56,  170 => 55,  166 => 54,  162 => 228,  160 => 227,  152 => 221,  150 => 218,  139 => 210,  135 => 209,  128 => 204,  126 => 54,  109 => 40,  105 => 39,  99 => 36,  94 => 34,  89 => 32,  84 => 30,  80 => 29,  76 => 28,  73 => 27,  69 => 25,  65 => 23,  63 => 22,  41 => 2,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@__main__/content_main.html.twig", "/var/www/html/source/Application/views/admin_twig/tpl/content_main.html.twig");
    }
}
