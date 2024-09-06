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

/* @__main__/actions_main.html.twig */
class __TwigTemplate_f30e9d186568c8ef4ee499312d428d69 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'admin_actions_main_form' => [$this, 'block_admin_actions_main_form'],
            'admin_actions_main_editor' => [$this, 'block_admin_actions_main_editor'],
            'admin_actions_main_product' => [$this, 'block_admin_actions_main_product'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        $this->loadTemplate("@__main__/headitem.html.twig", "@__main__/actions_main.html.twig", 1)->display(twig_array_merge($context, ["title" => $this->extensions['OxidEsales\Twig\Extensions\Filters\TranslateExtension']->translate("GENERAL_ADMIN_TITLE")]));
        // line 2
        echo "
";
        // line 3
        if (($context["readonly"] ?? null)) {
            // line 4
            echo "    ";
            $context["readonly"] = "readonly disabled";
        }
        // line 6
        echo "
";
        // line 7
        if (((twig_get_attribute($this->env, $this->source, ($context["oViewConfig"] ?? null), "getEdition", [], "any", false, false, false, 7) == "EE") &&  !($context["allowSharedEdit"] ?? null))) {
            // line 8
            echo "    ";
            $context["disableSharedEdit"] = "readonly disabled";
        }
        // line 10
        echo "
<script type=\"text/javascript\">
<!--

function DeletePic(sField)
{
    var oForm = document.getElementById(\"myedit\");
    document.getElementById(sField).value=\"\";
    oForm.fnc.value='save';
    oForm.submit();
}

//-->
</script>

<form name=\"transfer\" id=\"transfer\" action=\"";
        // line 25
        echo twig_get_attribute($this->env, $this->source, ($context["oViewConf"] ?? null), "getSelfLink", [], "method", false, false, false, 25);
        echo "\" method=\"post\">
    ";
        // line 26
        echo twig_get_attribute($this->env, $this->source, ($context["oViewConf"] ?? null), "getHiddenSid", [], "method", false, false, false, 26);
        echo "
    <input type=\"hidden\" name=\"oxid\" value=\"";
        // line 27
        echo twig_escape_filter($this->env, ($context["oxid"] ?? null), "html", null, true);
        echo "\">
    <input type=\"hidden\" name=\"cl\" value=\"actions_main\">
</form>


<form name=\"myedit\" enctype=\"multipart/form-data\" id=\"myedit\" onSubmit=\"copyLongDesc('oxactions__oxlongdesc');\" action=\"";
        // line 32
        echo twig_get_attribute($this->env, $this->source, ($context["oViewConf"] ?? null), "getSelfLink", [], "method", false, false, false, 32);
        echo "\" method=\"post\">
";
        // line 33
        echo twig_get_attribute($this->env, $this->source, ($context["oViewConf"] ?? null), "getHiddenSid", [], "method", false, false, false, 33);
        echo "
<input type=\"hidden\" name=\"cl\" value=\"actions_main\">
<input type=\"hidden\" name=\"fnc\" value=\"\">
<input type=\"hidden\" name=\"oxid\" value=\"";
        // line 36
        echo twig_escape_filter($this->env, ($context["oxid"] ?? null), "html", null, true);
        echo "\">
<input type=\"hidden\" name=\"editval[oxactions__oxid]\" value=\"";
        // line 37
        echo twig_escape_filter($this->env, ($context["oxid"] ?? null), "html", null, true);
        echo "\">
<input type=\"hidden\" name=\"sorting\" value=\"\">
<input type=\"hidden\" name=\"stable\" value=\"\">
<input type=\"hidden\" name=\"starget\" value=\"\">
<input type=\"hidden\" name=\"editval[oxactions__oxlongdesc]\" value=\"\">

";
        // line 43
        if (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["edit"] ?? null), "oxactions__oxtype", [], "any", false, false, false, 43), "value", [], "any", false, false, false, 43) == 3) && twig_get_attribute($this->env, $this->source, ($context["oViewConf"] ?? null), "isAltImageServerConfigured", [], "method", false, false, false, 43))) {
            // line 44
            echo "     <div class=\"warning\">";
            echo $this->extensions['OxidEsales\Twig\Extensions\TranslateExtension']->translate(["ident" => "ALTERNATIVE_IMAGE_SERVER_NOTE"]);
            echo " ";
            $this->loadTemplate("@__main__/inputhelp.html.twig", "@__main__/actions_main.html.twig", 44)->display(twig_array_merge($context, ["sHelpId" => $this->extensions['OxidEsales\Twig\Extensions\InputHelpExtension']->getHelpId("HELP_ALTERNATIVE_IMAGE_SERVER_NOTE"), "sHelpText" => $this->extensions['OxidEsales\Twig\Extensions\InputHelpExtension']->getHelpText("HELP_ALTERNATIVE_IMAGE_SERVER_NOTE")]));
            echo "</div>
";
        }
        // line 46
        echo "<table cellspacing=\"0\" cellpadding=\"0\" border=\"0\" width=\"98%\">

<tr>
    <td valign=\"top\" class=\"edittext\" style=\"padding-right: 20px;\">
        <table cellspacing=\"0\" cellpadding=\"0\" border=\"0\">
        ";
        // line 51
        $this->displayBlock('admin_actions_main_form', $context, $blocks);
        // line 108
        echo "        <tr>
            <td class=\"edittext\">
            </td>
            <td class=\"edittext\"><br>
                ";
        // line 112
        $this->loadTemplate("@__main__/language_edit.html.twig", "@__main__/actions_main.html.twig", 112)->display($context);
        // line 113
        echo "            </td>
        </tr>
        ";
        // line 115
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["edit"] ?? null), "oxactions__oxtype", [], "any", false, false, false, 115), "value", [], "any", false, false, false, 115) == 3)) {
            // line 116
            echo "            <td class=\"edittext\" width=\"120\">
            ";
            // line 117
            echo $this->extensions['OxidEsales\Twig\Extensions\TranslateExtension']->translate(["ident" => "GENERAL_SORT"]);
            echo "
            </td>
            <td class=\"edittext\">
            <input type=\"text\" class=\"editinput\" size=\"32\" maxlength=\"";
            // line 120
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["edit"] ?? null), "oxactions__oxsort", [], "any", false, false, false, 120), "fldmax_length", [], "any", false, false, false, 120), "html", null, true);
            echo "\" name=\"editval[oxactions__oxsort]\" value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["edit"] ?? null), "oxactions__oxsort", [], "any", false, false, false, 120), "value", [], "any", false, false, false, 120), "html", null, true);
            echo "\" ";
            echo twig_escape_filter($this->env, ($context["readonly"] ?? null), "html", null, true);
            echo ">
            ";
            // line 121
            $this->loadTemplate("@__main__/inputhelp.html.twig", "@__main__/actions_main.html.twig", 121)->display(twig_array_merge($context, ["sHelpId" => $this->extensions['OxidEsales\Twig\Extensions\InputHelpExtension']->getHelpId("HELP_GENERAL_SORT"), "sHelpText" => $this->extensions['OxidEsales\Twig\Extensions\InputHelpExtension']->getHelpText("HELP_GENERAL_SORT")]));
            // line 122
            echo "            </td>
        ";
        }
        // line 124
        echo "        <tr>
            <td class=\"edittext\">
            </td>
            <td class=\"edittext\"><br>
            <input
                type=\"submit\"
                class=\"edittext\"
                name=\"save\"
                value=\"";
        // line 132
        echo $this->extensions['OxidEsales\Twig\Extensions\TranslateExtension']->translate(["ident" => "GENERAL_SAVE"]);
        echo "\"
                onClick=\"Javascript:document.myedit.fnc.value='save'\"
                ";
        // line 134
        echo twig_escape_filter($this->env, ($context["readonly"] ?? null), "html", null, true);
        echo "
            >
            <br><br>

            ";
        // line 138
        if ((($context["oxid"] ?? null) != "-1")) {
            // line 139
            echo "
                ";
            // line 140
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["edit"] ?? null), "oxactions__oxtype", [], "any", false, false, false, 140), "value", [], "any", false, false, false, 140) < 2)) {
                // line 141
                echo "                   <input type=\"button\" value=\"";
                echo $this->extensions['OxidEsales\Twig\Extensions\TranslateExtension']->translate(["ident" => "GENERAL_ASSIGNARTICLES"]);
                echo "\" class=\"edittext\" onclick=\"JavaScript:showDialog('&cl=actions_main&aoc=1&oxid=";
                echo twig_escape_filter($this->env, ($context["oxid"] ?? null), "html", null, true);
                echo "');\" ";
                echo twig_escape_filter($this->env, ($context["readonly"] ?? null), "html", null, true);
                echo ">
                ";
            } else {
                // line 143
                echo "                    <input type=\"button\" value=\"";
                echo $this->extensions['OxidEsales\Twig\Extensions\TranslateExtension']->translate(["ident" => "GENERAL_ASSIGNGROUPS"]);
                echo "\" class=\"edittext\" onclick=\"JavaScript:showDialog('&cl=actions_main&oxpromotionaoc=groups&oxid=";
                echo twig_escape_filter($this->env, ($context["oxid"] ?? null), "html", null, true);
                echo "');\" ";
                echo twig_escape_filter($this->env, ($context["readonly"] ?? null), "html", null, true);
                echo ">
                ";
            }
            // line 145
            echo "
            ";
        }
        // line 147
        echo "
            </td>
        </tr>
        </table>
    </td>
    ";
        // line 152
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["edit"] ?? null), "oxactions__oxtype", [], "any", false, false, false, 152), "value", [], "any", false, false, false, 152) > 1)) {
            // line 153
            echo "
        ";
            // line 154
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["edit"] ?? null), "oxactions__oxtype", [], "any", false, false, false, 154), "value", [], "any", false, false, false, 154) == 3)) {
                // line 155
                echo "            <td width=\"180\" valign=\"top\" style=\"padding: 0 25px 0 25px; border-left: 1px solid #ddd;\">
            ";
                // line 156
                if ( !((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["edit"] ?? null), "oxactions__oxpic", [], "any", false, false, false, 156), "value", [], "any", false, false, false, 156) == "nopic.jpg") || (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["edit"] ?? null), "oxactions__oxpic", [], "any", false, false, false, 156), "value", [], "any", false, false, false, 156) == ""))) {
                    // line 157
                    echo "                <div style=\"padding-bottm: 10px;\">
                    <a href=\"";
                    // line 158
                    echo twig_get_attribute($this->env, $this->source, ($context["edit"] ?? null), "getBannerPictureUrl", [], "method", false, false, false, 158);
                    echo "\" target=\"_blank\">
                        <img src=\"";
                    // line 159
                    echo twig_get_attribute($this->env, $this->source, ($context["edit"] ?? null), "getBannerPictureUrl", [], "method", false, false, false, 159);
                    echo "\" width=\"120px;\" border=\"0\">
                    </a>
                    <div style=\"width: 120px; color: #666; padding-top: 5px; border-top: 1px solid #ccc; text-align: center;\">
                        Banner picture
                    </div>
                </div>
            ";
                }
                // line 166
                echo "            </td>
        ";
            }
            // line 168
            echo "
        <td valign=\"top\" class=\"edittext\" align=\"left\" style=\"width:100%;padding-left:5px;padding-bottom:10px;\">
            <table cellspacing=\"0\" cellpadding=\"0\" border=\"0\">
                ";
            // line 171
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["edit"] ?? null), "oxactions__oxtype", [], "any", false, false, false, 171), "value", [], "any", false, false, false, 171) == 2)) {
                // line 172
                echo "                    ";
                $this->displayBlock('admin_actions_main_editor', $context, $blocks);
                // line 180
                echo "                ";
            }
            // line 181
            echo "
                ";
            // line 182
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["edit"] ?? null), "oxactions__oxtype", [], "any", false, false, false, 182), "value", [], "any", false, false, false, 182) == 3)) {
                // line 183
                echo "                <!-- Banners picture upload and link -->
                <tr>
                    <td class=\"edittext\">
                        <table cellspacing=\"0\" cellpadding=\"0\" width=\"100%\" border=\"0\" class=\"listTable\">
                          ";
                // line 187
                $this->displayBlock('admin_actions_main_product', $context, $blocks);
                // line 252
                echo "                        </table>

                        <input type=\"button\" value=\"";
                // line 254
                echo $this->extensions['OxidEsales\Twig\Extensions\TranslateExtension']->translate(["ident" => "GENERAL_ASSIGNARTICLE"]);
                echo "\" class=\"edittext\" onclick=\"JavaScript:showDialog('&cl=actions_main&oxpromotionaoc=article&oxid=";
                echo twig_escape_filter($this->env, ($context["oxid"] ?? null), "html", null, true);
                echo "');\" ";
                echo twig_escape_filter($this->env, ($context["readonly"] ?? null), "html", null, true);
                echo ">

                    </td>
                </tr>
                ";
            }
            // line 259
            echo "            </table>
        </td>
        <!-- Ende rechte Seite -->
    ";
        }
        // line 263
        echo "
    </tr>
</table>

</form>

</div>

<!-- START new promotion button -->
<div class=\"actions\">
";
        // line 273
        ob_start(function () { return ''; });
        // line 274
        echo "
  <ul>
    <li><a ";
        // line 276
        if ( !($context["firstitem"] ?? null)) {
            echo "class=\"firstitem\"";
            $context["firstitem"] = "1";
        }
        echo " id=\"btn.new\" href=\"#\" onClick=\"Javascript:top.oxid.admin.editThis( -1 );return false\" target=\"edit\">";
        echo $this->extensions['OxidEsales\Twig\Extensions\TranslateExtension']->translate(["ident" => "TOOLTIPS_NEWPROMOTION"]);
        echo "</a> |</li>
    ";
        // line 277
        $this->loadTemplate("@__main__/bottomnavicustom.html.twig", "@__main__/actions_main.html.twig", 277)->display($context);
        // line 278
        echo "
    ";
        // line 279
        if (($context["sHelpURL"] ?? null)) {
            // line 280
            echo "    ";
            // line 281
            echo "    <li><a ";
            if ( !($context["firstitem"] ?? null)) {
                echo "class=\"firstitem\"";
                $context["firstitem"] = "1";
            }
            echo " id=\"btn.help\" href=\"";
            echo ($context["sHelpURL"] ?? null);
            echo "/";
            echo twig_escape_filter($this->env, twig_lower_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["oViewConf"] ?? null), "getActiveClassName", [], "method", false, false, false, 281)), "html", null, true);
            echo ".html\" OnClick=\"window.open('";
            echo ($context["sHelpURL"] ?? null);
            echo "/";
            echo twig_escape_filter($this->env, twig_lower_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["oViewConf"] ?? null), "getActiveClassName", [], "method", false, false, false, 281)), "html", null, true);
            echo ".html','OXID_Help','width=800,height=600,resizable=no,scrollbars=yes');return false;\">";
            echo $this->extensions['OxidEsales\Twig\Extensions\TranslateExtension']->translate(["ident" => "TOOLTIPS_OPENHELP"]);
            echo "</a></li>
    ";
        }
        // line 283
        echo "  </ul>
";
        $___internal_parse_0_ = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 273
        echo twig_spaceless($___internal_parse_0_);
        // line 285
        echo "</div>

<!-- END new promotion button -->

";
        // line 289
        $this->loadTemplate("@__main__/bottomitem.html.twig", "@__main__/actions_main.html.twig", 289)->display($context);
    }

    // line 51
    public function block_admin_actions_main_form($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 52
        echo "            <tr>
                <td class=\"edittext\" width=\"120\">
                ";
        // line 54
        echo $this->extensions['OxidEsales\Twig\Extensions\TranslateExtension']->translate(["ident" => "GENERAL_NAME"]);
        echo "
                </td>
                <td class=\"edittext\">
                <input
                    type=\"text\"
                    class=\"editinput\"
                    size=\"32\"
                    maxlength=\"";
        // line 61
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["edit"] ?? null), "oxactions__oxtitle", [], "any", false, false, false, 61), "fldmax_length", [], "any", false, false, false, 61), "html", null, true);
        echo "\"
                    name=\"editval[oxactions__oxtitle]\"
                    value=\"";
        // line 63
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["edit"] ?? null), "oxactions__oxtitle", [], "any", false, false, false, 63), "value", [], "any", false, false, false, 63), "html", null, true);
        echo "\"
                    ";
        // line 64
        echo twig_escape_filter($this->env, ($context["readonly"] ?? null), "html", null, true);
        echo "
                >
                ";
        // line 66
        $this->loadTemplate("@__main__/inputhelp.html.twig", "@__main__/actions_main.html.twig", 66)->display(twig_array_merge($context, ["sHelpId" => $this->extensions['OxidEsales\Twig\Extensions\InputHelpExtension']->getHelpId("HELP_GENERAL_NAME"), "sHelpText" => $this->extensions['OxidEsales\Twig\Extensions\InputHelpExtension']->getHelpText("HELP_GENERAL_NAME")]));
        // line 67
        echo "                </td>
            </tr>

            <tr>
              <td class=\"edittext\" width=\"120\">
                ";
        // line 72
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["edit"] ?? null), "oxactions__oxtype", [], "any", false, false, false, 72), "value", [], "any", false, false, false, 72) != 2)) {
            // line 73
            echo "                  ";
            echo $this->extensions['OxidEsales\Twig\Extensions\TranslateExtension']->translate(["ident" => "GENERAL_ALWAYS_ACTIVE"]);
            echo "
                ";
        } else {
            // line 75
            echo "                  ";
            echo $this->extensions['OxidEsales\Twig\Extensions\TranslateExtension']->translate(["ident" => "GENERAL_ACTIVE"]);
            echo "
                ";
        }
        // line 77
        echo "              </td>
              <td class=\"edittext\">
                <input class=\"edittext\" type=\"checkbox\" name=\"editval[oxactions__oxactive]\" value='1' ";
        // line 79
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["edit"] ?? null), "oxactions__oxactive", [], "any", false, false, false, 79), "value", [], "any", false, false, false, 79) == 1)) {
            echo "checked";
        }
        echo " ";
        echo twig_escape_filter($this->env, ($context["readonly"] ?? null), "html", null, true);
        echo ">
                ";
        // line 80
        $this->loadTemplate("@__main__/inputhelp.html.twig", "@__main__/actions_main.html.twig", 80)->display(twig_array_merge($context, ["sHelpId" => $this->extensions['OxidEsales\Twig\Extensions\InputHelpExtension']->getHelpId("HELP_GENERAL_ACTIVE"), "sHelpText" => $this->extensions['OxidEsales\Twig\Extensions\InputHelpExtension']->getHelpText("HELP_GENERAL_ACTIVE")]));
        // line 81
        echo "              </td>
            </tr>
            <tr>
              <td class=\"edittext\">
                  ";
        // line 85
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["edit"] ?? null), "oxactions__oxtype", [], "any", false, false, false, 85), "value", [], "any", false, false, false, 85) != 2)) {
            echo $this->extensions['OxidEsales\Twig\Extensions\TranslateExtension']->translate(["ident" => "GENERAL_ACTIVFROMTILL"]);
        }
        echo "&nbsp;
              </td>
              <td class=\"edittext\" align=\"right\">
               ";
        // line 88
        echo $this->extensions['OxidEsales\Twig\Extensions\TranslateExtension']->translate(["ident" => "GENERAL_FROM"]);
        echo " <input type=\"text\" class=\"editinput\" size=\"27\" name=\"editval[oxactions__oxactivefrom]\" value=\"";
        echo twig_escape_filter($this->env, $this->extensions['OxidEsales\Twig\Extensions\Filters\FormatDateExtension']->formatDate(twig_get_attribute($this->env, $this->source, ($context["edit"] ?? null), "oxactions__oxactivefrom", [], "any", false, false, false, 88)), "html", null, true);
        echo "\" ";
        $this->loadTemplate("@__main__/help.html.twig", "@__main__/actions_main.html.twig", 88)->display(twig_array_merge($context, ["helpid" => "article_vonbis"]));
        echo " ";
        echo twig_escape_filter($this->env, ($context["readonly"] ?? null), "html", null, true);
        echo "><br>
               ";
        // line 89
        echo $this->extensions['OxidEsales\Twig\Extensions\TranslateExtension']->translate(["ident" => "GENERAL_TILL"]);
        echo " <input type=\"text\" class=\"editinput\" size=\"27\" name=\"editval[oxactions__oxactiveto]\" value=\"";
        echo twig_escape_filter($this->env, $this->extensions['OxidEsales\Twig\Extensions\Filters\FormatDateExtension']->formatDate(twig_get_attribute($this->env, $this->source, ($context["edit"] ?? null), "oxactions__oxactiveto", [], "any", false, false, false, 89)), "html", null, true);
        echo "\" ";
        $this->loadTemplate("@__main__/help.html.twig", "@__main__/actions_main.html.twig", 89)->display(twig_array_merge($context, ["helpid" => "article_vonbis"]));
        echo " ";
        echo twig_escape_filter($this->env, ($context["readonly"] ?? null), "html", null, true);
        echo ">
              ";
        // line 90
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["edit"] ?? null), "oxactions__oxtype", [], "any", false, false, false, 90), "value", [], "any", false, false, false, 90) != 2)) {
            $this->loadTemplate("@__main__/inputhelp.html.twig", "@__main__/actions_main.html.twig", 90)->display(twig_array_merge($context, ["sHelpId" => $this->extensions['OxidEsales\Twig\Extensions\InputHelpExtension']->getHelpId("HELP_GENERAL_ACTIVFROMTILL"), "sHelpText" => $this->extensions['OxidEsales\Twig\Extensions\InputHelpExtension']->getHelpText("HELP_GENERAL_ACTIVFROMTILL")]));
        }
        // line 91
        echo "              </td>
            </tr>
            ";
        // line 93
        if ((($context["oxid"] ?? null) == "-1")) {
            // line 94
            echo "            <tr>
                <td class=\"edittext\">
              ";
            // line 96
            echo $this->extensions['OxidEsales\Twig\Extensions\TranslateExtension']->translate(["ident" => "GENERAL_TYPE"]);
            echo "&nbsp;
                </td>
              <td class=\"edittext\">
                <select class=\"editinput\" name=\"editval[oxactions__oxtype]\">
                  <option value=\"1\">";
            // line 100
            echo $this->extensions['OxidEsales\Twig\Extensions\TranslateExtension']->translate(["ident" => "PROMOTIONS_MAIN_TYPE_ACTION"]);
            echo "</option>
                  <option value=\"2\">";
            // line 101
            echo $this->extensions['OxidEsales\Twig\Extensions\TranslateExtension']->translate(["ident" => "PROMOTIONS_MAIN_TYPE_PROMO"]);
            echo "</option>
                  <option value=\"3\">";
            // line 102
            echo $this->extensions['OxidEsales\Twig\Extensions\TranslateExtension']->translate(["ident" => "PROMOTIONS_MAIN_TYPE_BANNER"]);
            echo "</option>
                </select>
              </td>
            </tr>
            ";
        }
        // line 107
        echo "        ";
    }

    // line 172
    public function block_admin_actions_main_editor($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 173
        echo "                        <!-- Promotions editor -->
                        <tr>
                            <td class=\"edittext\" width=\"100%\" colspan=\"2\">
                                ";
        // line 176
        echo ($context["editor"] ?? null);
        echo "
                            </td>
                        </tr>
                    ";
    }

    // line 187
    public function block_admin_actions_main_product($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 188
        echo "                              <colgroup>
                                  <col width=\"1%\" nowrap>
                                  <col width=\"1%\" nowrap>
                                  <col width=\"98%\">
                              </colgroup>
                              <tr>
                                  <th colspan=\"5\" valign=\"top\">
                                     ";
        // line 195
        echo $this->extensions['OxidEsales\Twig\Extensions\TranslateExtension']->translate(["ident" => "PROMOTIONS_BANNER_PICTUREANDLINK"]);
        echo "
                                     ";
        // line 196
        $this->loadTemplate("@__main__/inputhelp.html.twig", "@__main__/actions_main.html.twig", 196)->display(twig_array_merge($context, ["sHelpId" => $this->extensions['OxidEsales\Twig\Extensions\InputHelpExtension']->getHelpId("HELP_PROMOTIONS_BANNER_PICTUREANDLINK"), "sHelpText" => $this->extensions['OxidEsales\Twig\Extensions\InputHelpExtension']->getHelpText("HELP_PROMOTIONS_BANNER_PICTUREANDLINK")]));
        // line 197
        echo "                                  </th>
                              </tr>

                              <tr>
                                <td class=\"text\">
                                    <b>";
        // line 202
        echo $this->extensions['OxidEsales\Twig\Extensions\TranslateExtension']->translate(["ident" => "PROMOTIONS_BANNER_PICTUREUPLOAD"]);
        echo " (";
        echo $this->extensions['OxidEsales\Twig\Extensions\TranslateExtension']->translate(["ident" => "GENERAL_MAX_FILE_UPLOAD"]);
        echo " ";
        echo twig_escape_filter($this->env, ($context["sMaxFormattedFileSize"] ?? null), "html", null, true);
        echo ", ";
        echo $this->extensions['OxidEsales\Twig\Extensions\TranslateExtension']->translate(["ident" => "GENERAL_MAX_PICTURE_DIMENSIONS"]);
        echo "):</b>
                                </td>
                                <td class=\"edittext\">
                                    <input class=\"editinput\" name=\"myfile[PROMO@oxactions__oxpic]\" type=\"file\" size=\"26\"";
        // line 205
        echo twig_escape_filter($this->env, ($context["readonly_fields"] ?? null), "html", null, true);
        echo ">
                                    <input id=\"oxpic\" type=\"hidden\" maxlength=\"";
        // line 206
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["edit"] ?? null), "oxactions__oxpic", [], "any", false, false, false, 206), "fldmax_length", [], "any", false, false, false, 206), "html", null, true);
        echo "\" name=\"editval[oxactions__oxpic]\" value=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["edit"] ?? null), "oxactions__oxpic", [], "any", false, false, false, 206), "value", [], "any", false, false, false, 206), "html", null, true);
        echo "\" readonly>
                                </td>
                                <td nowrap=\"nowrap\">
                                    ";
        // line 209
        if (( !((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["edit"] ?? null), "oxactions__oxpic", [], "any", false, false, false, 209), "value", [], "any", false, false, false, 209) == "nopic.jpg") || (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["edit"] ?? null), "oxactions__oxpic", [], "any", false, false, false, 209), "value", [], "any", false, false, false, 209) == "")) &&  !($context["readonly"] ?? null))) {
            // line 210
            echo "                                        <div style=\"display: inline-block;\">
                                            <a href=\"Javascript:DeletePic('oxpic');\" class=\"deleteText\"><span class=\"ico\"></span><span style=\"float: left;>\">";
            // line 211
            echo $this->extensions['OxidEsales\Twig\Extensions\TranslateExtension']->translate(["ident" => "GENERAL_DELETE"]);
            echo "</span></a>
                                        </div>
                                    ";
        }
        // line 214
        echo "                                </td>
                              </tr>

                              ";
        // line 217
        $context["_oArticle"] = twig_get_attribute($this->env, $this->source, ($context["edit"] ?? null), "getBannerArticle", [], "method", false, false, false, 217);
        // line 218
        echo "
                              <tr>
                                <td class=\"text\">
                                    <b>";
        // line 221
        echo $this->extensions['OxidEsales\Twig\Extensions\TranslateExtension']->translate(["ident" => "PROMOTIONS_BANNER_LINK"]);
        echo ":</b>
                                </td>
                                <td class=\"text\">
                                    <input type=\"text\" class=\"editinput\" size=\"43\" name=\"editval[oxactions__oxlink]\" value=\"";
        // line 224
        echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["edit"] ?? null), "oxactions__oxlink", [], "any", false, false, false, 224), "value", [], "any", false, false, false, 224);
        echo "\" ";
        echo twig_escape_filter($this->env, ($context["readonly"] ?? null), "html", null, true);
        echo ">
                                </td>
                                <td nowrap=\"nowrap\">
                                    ";
        // line 227
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["edit"] ?? null), "oxactions__oxlink", [], "any", false, false, false, 227), "value", [], "any", false, false, false, 227)) {
            // line 228
            echo "                                        <div style=\"display: inline-block;\">
                                            <a href=\"";
            // line 229
            echo twig_get_attribute($this->env, $this->source, ($context["edit"] ?? null), "getBannerLink", [], "method", false, false, false, 229);
            echo "\" class=\"zoomText\" target=\"_blank\"><span class=\"ico\"></span><span style=\"float: left;>\">";
            echo $this->extensions['OxidEsales\Twig\Extensions\TranslateExtension']->translate(["ident" => "ARTICLE_PICTURES_PREVIEW"]);
            echo "</span></a>
                                        </div>
                                    ";
        }
        // line 232
        echo "                                </td>
                              </tr>

                              <tr>
                                <td class=\"text\">
                                    <b>";
        // line 237
        echo $this->extensions['OxidEsales\Twig\Extensions\TranslateExtension']->translate(["ident" => "PROMOTIONS_BANNER_ASSIGNEDARTICLE"]);
        echo ":</b>
                                </td>
                                <td class=\"text\" colspan=\"2\">
                                    <b>
                                        <span id=\"assignedArticleTitle\">
                                        ";
        // line 242
        if (($context["_oArticle"] ?? null)) {
            // line 243
            echo "                                            ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["_oArticle"] ?? null), "oxarticles__oxartnum", [], "any", false, false, false, 243), "value", [], "any", false, false, false, 243), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["_oArticle"] ?? null), "oxarticles__oxtitle", [], "any", false, false, false, 243), "value", [], "any", false, false, false, 243), "html", null, true);
            echo "
                                        ";
        } else {
            // line 245
            echo "                                            ---
                                        ";
        }
        // line 247
        echo "                                        </span>
                                    </b>
                                </td>
                              </tr>
                          ";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@__main__/actions_main.html.twig";
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
        return array (  674 => 247,  670 => 245,  662 => 243,  660 => 242,  652 => 237,  645 => 232,  637 => 229,  634 => 228,  632 => 227,  624 => 224,  618 => 221,  613 => 218,  611 => 217,  606 => 214,  600 => 211,  597 => 210,  595 => 209,  587 => 206,  583 => 205,  571 => 202,  564 => 197,  562 => 196,  558 => 195,  549 => 188,  545 => 187,  537 => 176,  532 => 173,  528 => 172,  524 => 107,  516 => 102,  512 => 101,  508 => 100,  501 => 96,  497 => 94,  495 => 93,  491 => 91,  487 => 90,  477 => 89,  467 => 88,  459 => 85,  453 => 81,  451 => 80,  443 => 79,  439 => 77,  433 => 75,  427 => 73,  425 => 72,  418 => 67,  416 => 66,  411 => 64,  407 => 63,  402 => 61,  392 => 54,  388 => 52,  384 => 51,  380 => 289,  374 => 285,  372 => 273,  368 => 283,  349 => 281,  347 => 280,  345 => 279,  342 => 278,  340 => 277,  331 => 276,  327 => 274,  325 => 273,  313 => 263,  307 => 259,  295 => 254,  291 => 252,  289 => 187,  283 => 183,  281 => 182,  278 => 181,  275 => 180,  272 => 172,  270 => 171,  265 => 168,  261 => 166,  251 => 159,  247 => 158,  244 => 157,  242 => 156,  239 => 155,  237 => 154,  234 => 153,  232 => 152,  225 => 147,  221 => 145,  211 => 143,  201 => 141,  199 => 140,  196 => 139,  194 => 138,  187 => 134,  182 => 132,  172 => 124,  168 => 122,  166 => 121,  158 => 120,  152 => 117,  149 => 116,  147 => 115,  143 => 113,  141 => 112,  135 => 108,  133 => 51,  126 => 46,  118 => 44,  116 => 43,  107 => 37,  103 => 36,  97 => 33,  93 => 32,  85 => 27,  81 => 26,  77 => 25,  60 => 10,  56 => 8,  54 => 7,  51 => 6,  47 => 4,  45 => 3,  42 => 2,  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@__main__/actions_main.html.twig", "/var/www/html/source/Application/views/admin_twig/tpl/actions_main.html.twig");
    }
}
