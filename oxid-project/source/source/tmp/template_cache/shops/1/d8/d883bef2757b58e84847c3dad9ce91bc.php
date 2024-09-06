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

/* @__main__/article_main.html.twig */
class __TwigTemplate_00ec3f4b3bb3a3695b6c237927c40873 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'admin_article_main_form' => [$this, 'block_admin_article_main_form'],
            'admin_article_main_extended_errorbox' => [$this, 'block_admin_article_main_extended_errorbox'],
            'admin_article_main_extended' => [$this, 'block_admin_article_main_extended'],
            'admin_article_main_editor' => [$this, 'block_admin_article_main_editor'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        $this->loadTemplate("@__main__/headitem.html.twig", "@__main__/article_main.html.twig", 1)->display(twig_array_merge($context, ["title" => $this->extensions['OxidEsales\Twig\Extensions\Filters\TranslateExtension']->translate("GENERAL_ADMIN_TITLE")]));
        // line 2
        echo "
<script type=\"text/javascript\">
<!--
function editThis( sID )
{
    var oTransfer = top.basefrm.edit.document.getElementById( \"transfer\" );
    oTransfer.oxid.value = sID;
    oTransfer.cl.value = top.basefrm.list.sDefClass;

    //forcing edit frame to reload after submit
    top.forceReloadingEditFrame();

    var oSearch = top.basefrm.list.document.getElementById( \"search\" );
    oSearch.oxid.value = sID;
    oSearch.actedit.value = 0;
    oSearch.submit();
}
";
        // line 19
        if ( !($context["oxparentid"] ?? null)) {
            // line 20
            echo "window.onload = function ()
{
    ";
            // line 22
            if ((($context["updatelist"] ?? null) == 1)) {
                // line 23
                echo "        top.oxid.admin.updateList('";
                echo twig_escape_filter($this->env, ($context["oxid"] ?? null), "html", null, true);
                echo "');
    ";
            }
            // line 25
            echo "    var oField = top.oxid.admin.getLockTarget();
    oField.onchange = oField.onkeyup = oField.onmouseout = top.oxid.admin.unlockSave;
}
";
        }
        // line 29
        echo "//-->
</script>

";
        // line 32
        if (($context["readonly"] ?? null)) {
            // line 33
            echo "    ";
            $context["readonly"] = "readonly disabled";
        } else {
            // line 35
            echo "    ";
            $context["readonly"] = "";
        }
        // line 37
        echo "
<form name=\"transfer\" id=\"transfer\" action=\"";
        // line 38
        echo twig_get_attribute($this->env, $this->source, ($context["oViewConf"] ?? null), "getSelfLink", [], "method", false, false, false, 38);
        echo "\" method=\"post\">
    ";
        // line 39
        echo twig_get_attribute($this->env, $this->source, ($context["oViewConf"] ?? null), "getHiddenSid", [], "method", false, false, false, 39);
        echo "
    <input type=\"hidden\" name=\"oxid\" value=\"";
        // line 40
        echo twig_escape_filter($this->env, ($context["oxid"] ?? null), "html", null, true);
        echo "\">
    <input type=\"hidden\" name=\"oxidCopy\" value=\"";
        // line 41
        echo twig_escape_filter($this->env, ($context["oxid"] ?? null), "html", null, true);
        echo "\">
    <input type=\"hidden\" name=\"cl\" value=\"article_main\">
    <input type=\"hidden\" name=\"editlanguage\" value=\"";
        // line 43
        echo twig_escape_filter($this->env, ($context["editlanguage"] ?? null), "html", null, true);
        echo "\">
</form>

    <form name=\"myedit\" id=\"myedit\" action=\"";
        // line 46
        echo twig_get_attribute($this->env, $this->source, ($context["oViewConf"] ?? null), "getSelfLink", [], "method", false, false, false, 46);
        echo "\" method=\"post\" onSubmit=\"return copyLongDesc('oxarticles__oxlongdesc');\" style=\"padding: 0px;margin: 0px;height:0px;\">
      ";
        // line 47
        echo twig_get_attribute($this->env, $this->source, ($context["oViewConf"] ?? null), "getHiddenSid", [], "method", false, false, false, 47);
        echo "
      <input type=\"hidden\" name=\"cl\" value=\"article_main\">
      <input type=\"hidden\" name=\"fnc\" value=\"\">
      <input type=\"hidden\" name=\"oxid\" value=\"";
        // line 50
        echo twig_escape_filter($this->env, ($context["oxid"] ?? null), "html", null, true);
        echo "\">
      <input type=\"hidden\" name=\"voxid\" value=\"";
        // line 51
        echo twig_escape_filter($this->env, ($context["oxid"] ?? null), "html", null, true);
        echo "\">
      <input type=\"hidden\" name=\"oxparentid\" value=\"";
        // line 52
        echo twig_escape_filter($this->env, ($context["oxparentid"] ?? null), "html", null, true);
        echo "\">
      <input type=\"hidden\" name=\"editval[oxarticles__oxid]\" value=\"";
        // line 53
        echo twig_escape_filter($this->env, ($context["oxid"] ?? null), "html", null, true);
        echo "\">
      <input type=\"hidden\" name=\"editval[oxarticles__oxlongdesc]\" value=\"\">
      <table cellspacing=\"0\" cellpadding=\"0\" border=\"0\" style=\"width:98%;\">
        <tr>
          <td valign=\"top\" class=\"edittext\" style=\"padding-top:10px;padding-left:10px;\">
            <table cellspacing=\"0\" cellpadding=\"0\" border=\"0\">
              ";
        // line 59
        $this->displayBlock('admin_article_main_form', $context, $blocks);
        // line 249
        echo "
              <tr>
                <td class=\"edittext\" colspan=\"2\"><br><br>
                <input type=\"submit\" class=\"edittext\" id=\"oLockButton\" name=\"saveArticle\" value=\"";
        // line 252
        echo $this->extensions['OxidEsales\Twig\Extensions\TranslateExtension']->translate(["ident" => "ARTICLE_MAIN_SAVE"]);
        echo "\" onClick=\"Javascript:document.myedit.fnc.value='save'\" ";
        if (( !twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["edit"] ?? null), "oxarticles__oxtitle", [], "any", false, false, false, 252), "value", [], "any", false, false, false, 252) &&  !($context["oxparentid"] ?? null))) {
            echo "disabled";
        }
        echo " ";
        echo twig_escape_filter($this->env, ($context["readonly"] ?? null), "html", null, true);
        echo ">
                ";
        // line 253
        if (((($context["oxid"] ?? null) !=  -1) &&  !($context["readonly"] ?? null))) {
            // line 254
            echo "                  <input type=\"submit\" class=\"edittext\" name=\"save\" value=\"";
            echo $this->extensions['OxidEsales\Twig\Extensions\TranslateExtension']->translate(["ident" => "ARTICLE_MAIN_ARTCOPY"]);
            echo "\" onClick=\"Javascript:document.myedit.fnc.value='copyArticle';\" ";
            echo twig_escape_filter($this->env, ($context["readonly"] ?? null), "html", null, true);
            echo ">&nbsp;&nbsp;&nbsp;
                ";
        }
        // line 256
        echo "                </td>
              </tr>
              ";
        // line 258
        if ((($context["oxid"] ?? null) ==  -1)) {
            // line 259
            echo "                <tr>
                  <td class=\"edittext\">
                ";
            // line 261
            echo $this->extensions['OxidEsales\Twig\Extensions\TranslateExtension']->translate(["ident" => "ARTICLE_MAIN_INCATEGORY"]);
            echo ":
                </td>
                <td class=\"edittext\">
                <select name=\"art_category\" class=\"editinput\" onChange=\"Javascript:top.oxid.admin.changeLstrt()\" ";
            // line 264
            echo twig_escape_filter($this->env, ($context["readonly"] ?? null), "html", null, true);
            echo ">
                <option value=\"-1\">";
            // line 265
            echo $this->extensions['OxidEsales\Twig\Extensions\TranslateExtension']->translate(["ident" => "ARTICLE_MAIN_NONE"]);
            echo "</option>
                ";
            // line 266
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["oView"] ?? null), "getCategoryList", [], "method", false, false, false, 266));
            foreach ($context['_seq'] as $context["_key"] => $context["pcat"]) {
                // line 267
                echo "                <option value=\"";
                echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["pcat"], "oxcategories__oxid", [], "any", false, false, false, 267), "value", [], "any", false, false, false, 267);
                echo "\">";
                echo twig_escape_filter($this->env, $this->extensions['OxidEsales\Twig\Extensions\Filters\TruncateExtension']->truncate(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["pcat"], "oxcategories__oxtitle", [], "any", false, false, false, 267), "value", [], "any", false, false, false, 267), 40, "..", true), "html", null, true);
                echo "</option>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['pcat'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 269
            echo "                </select>
                ";
            // line 270
            $this->loadTemplate("@__main__/inputhelp.html.twig", "@__main__/article_main.html.twig", 270)->display(twig_array_merge($context, ["sHelpId" => $this->extensions['OxidEsales\Twig\Extensions\InputHelpExtension']->getHelpId("HELP_"), "sHelpText" => $this->extensions['OxidEsales\Twig\Extensions\InputHelpExtension']->getHelpText("HELP_")]));
            // line 271
            echo "                </td>
              </tr>
              ";
        }
        // line 274
        echo "              <tr>
                <td class=\"edittext\" colspan=\"2\"><br>
                ";
        // line 276
        $this->loadTemplate("@__main__/language_edit.html.twig", "@__main__/article_main.html.twig", 276)->display($context);
        echo "<br>
                </td>
              </tr>
              ";
        // line 279
        if (((($context["oxid"] ?? null) !=  -1) && ($context["thisvariantlist"] ?? null))) {
            // line 280
            echo "              <tr>
                <td class=\"edittext\">";
            // line 281
            echo $this->extensions['OxidEsales\Twig\Extensions\TranslateExtension']->translate(["ident" => "ARTICLE_MAIN_GOTO"]);
            echo "</td>
                <td class=\"edittext\">
                ";
            // line 283
            $this->loadTemplate("@__main__/variantlist.html.twig", "@__main__/article_main.html.twig", 283)->display($context);
            // line 284
            echo "                </td>
              </tr>
              ";
        }
        // line 287
        echo "            </table>
          </td>
    <!-- Anfang rechte Seite -->
          <td valign=\"top\" class=\"edittext\" align=\"left\" style=\"width:100%;height:99%;padding-left:5px;padding-bottom:30px;padding-top:10px;\">
            ";
        // line 291
        $this->displayBlock('admin_article_main_editor', $context, $blocks);
        // line 294
        echo "          </td>
    <!-- Ende rechte Seite -->
        </tr>
      </table>
    </form>

";
        // line 300
        $this->loadTemplate("@__main__/bottomnaviitem.html.twig", "@__main__/article_main.html.twig", 300)->display($context);
        // line 301
        echo "
";
        // line 302
        $this->loadTemplate("@__main__/bottomitem.html.twig", "@__main__/article_main.html.twig", 302)->display($context);
    }

    // line 59
    public function block_admin_article_main_form($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 60
        echo "                  ";
        if (($context["errorsavingatricle"] ?? null)) {
            // line 61
            echo "                  <tr>
                    <td colspan=\"2\">
                      ";
            // line 63
            if ((($context["errorsavingatricle"] ?? null) == 1)) {
                // line 64
                echo "                      <div class=\"errorbox\">";
                echo $this->extensions['OxidEsales\Twig\Extensions\TranslateExtension']->translate(["ident" => "ARTICLE_MAIN_ERRORSAVINGARTICLE"]);
                echo "</div>
                      ";
            }
            // line 66
            echo "                    </td>
                  </tr>
                  ";
        }
        // line 69
        echo "                  ";
        $this->displayBlock('admin_article_main_extended_errorbox', $context, $blocks);
        // line 70
        echo "                  ";
        if (($context["oxparentid"] ?? null)) {
            // line 71
            echo "                  <tr>
                    <td class=\"edittext\" width=\"120\">
                        <b>";
            // line 73
            echo $this->extensions['OxidEsales\Twig\Extensions\TranslateExtension']->translate(["ident" => "ARTICLE_MAIN_VARIANTE"]);
            echo "</b>
                    </td>
                    <td class=\"edittext\">
                      <a href=\"Javascript:editThis('";
            // line 76
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["parentarticle"] ?? null), "oxarticles__oxid", [], "any", false, false, false, 76), "value", [], "any", false, false, false, 76), "html", null, true);
            echo "');\" class=\"edittext\"><b>";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["parentarticle"] ?? null), "oxarticles__oxartnum", [], "any", false, false, false, 76), "value", [], "any", false, false, false, 76), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["parentarticle"] ?? null), "oxarticles__oxtitle", [], "any", false, false, false, 76), "value", [], "any", false, false, false, 76), "html", null, true);
            echo " ";
            if ( !twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["parentarticle"] ?? null), "oxarticles__oxtitle", [], "any", false, false, false, 76), "value", [], "any", false, false, false, 76)) {
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["parentarticle"] ?? null), "oxarticles__oxvarselect", [], "any", false, false, false, 76), "value", [], "any", false, false, false, 76), "html", null, true);
            }
            echo "</b></a>
                    </td>
                  </tr>
                  ";
        }
        // line 80
        echo "
                    <tr>
                      <td class=\"edittext\" width=\"120\">
                        ";
        // line 83
        echo $this->extensions['OxidEsales\Twig\Extensions\TranslateExtension']->translate(["ident" => "ARTICLE_MAIN_ACTIVE"]);
        echo "
                      </td>
                      <td class=\"edittext\">
                        <input type=\"hidden\" name=\"editval[oxarticles__oxactive]\" value=\"0\">
                        <input class=\"edittext\" type=\"checkbox\" name=\"editval[oxarticles__oxactive]\" value='1' ";
        // line 87
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["edit"] ?? null), "oxarticles__oxactive", [], "any", false, false, false, 87), "value", [], "any", false, false, false, 87) == 1)) {
            echo "checked";
        }
        echo " ";
        echo twig_escape_filter($this->env, ($context["readonly"] ?? null), "html", null, true);
        echo ">
                        ";
        // line 88
        echo $this->extensions['OxidEsales\Twig\Extensions\TranslateExtension']->translate(["ident" => "ARTICLE_MAIN_HIDDEN"]);
        echo "&nbsp;&nbsp;&nbsp;
                        <input type=\"hidden\" name=\"editval[oxarticles__oxhidden]\" value=\"0\">
                        <input class=\"edittext\" type=\"checkbox\" name=\"editval[oxarticles__oxhidden]\" value='1' ";
        // line 90
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["edit"] ?? null), "oxarticles__oxhidden", [], "any", false, false, false, 90), "value", [], "any", false, false, false, 90) == 1)) {
            echo "checked";
        }
        echo " ";
        echo twig_escape_filter($this->env, ($context["readonly"] ?? null), "html", null, true);
        echo ">
                        ";
        // line 91
        $this->loadTemplate("@__main__/inputhelp.html.twig", "@__main__/article_main.html.twig", 91)->display(twig_array_merge($context, ["sHelpId" => $this->extensions['OxidEsales\Twig\Extensions\InputHelpExtension']->getHelpId("HELP_ARTICLE_MAIN_ACTIVE"), "sHelpText" => $this->extensions['OxidEsales\Twig\Extensions\InputHelpExtension']->getHelpText("HELP_ARTICLE_MAIN_ACTIVE")]));
        // line 92
        echo "                      </td>
                    </tr>

                    ";
        // line 95
        if (($context["blUseTimeCheck"] ?? null)) {
            // line 96
            echo "                    <tr>
                      <td class=\"edittext\">
                        ";
            // line 98
            echo $this->extensions['OxidEsales\Twig\Extensions\TranslateExtension']->translate(["ident" => "ARTICLE_MAIN_ACTIVFROMTILL"]);
            echo "&nbsp;
                      </td>
                      <td class=\"edittext\">
                        ";
            // line 101
            echo $this->extensions['OxidEsales\Twig\Extensions\TranslateExtension']->translate(["ident" => "ARTICLE_MAIN_ACTIVEFROM"]);
            echo "&nbsp;<input type=\"text\" class=\"editinput\" size=\"27\" name=\"editval[oxarticles__oxactivefrom]\" value=\"";
            echo twig_escape_filter($this->env, $this->extensions['OxidEsales\Twig\Extensions\Filters\FormatDateExtension']->formatDate(twig_get_attribute($this->env, $this->source, ($context["edit"] ?? null), "oxarticles__oxactivefrom", [], "any", false, false, false, 101)), "html", null, true);
            echo "\" ";
            $this->loadTemplate("@__main__/help.html.twig", "@__main__/article_main.html.twig", 101)->display(twig_array_merge($context, ["helpid" => "article_vonbis"]));
            echo " ";
            echo twig_escape_filter($this->env, ($context["readonly"] ?? null), "html", null, true);
            echo "><br>
                        ";
            // line 102
            echo $this->extensions['OxidEsales\Twig\Extensions\TranslateExtension']->translate(["ident" => "ARTICLE_MAIN_ACTIVETO"]);
            echo "&nbsp;&nbsp;<input type=\"text\" class=\"editinput\" size=\"27\" name=\"editval[oxarticles__oxactiveto]\" value=\"";
            echo twig_escape_filter($this->env, $this->extensions['OxidEsales\Twig\Extensions\Filters\FormatDateExtension']->formatDate(twig_get_attribute($this->env, $this->source, ($context["edit"] ?? null), "oxarticles__oxactiveto", [], "any", false, false, false, 102)), "html", null, true);
            echo "\" ";
            $this->loadTemplate("@__main__/help.html.twig", "@__main__/article_main.html.twig", 102)->display(twig_array_merge($context, ["helpid" => "article_vonbis"]));
            echo " ";
            echo twig_escape_filter($this->env, ($context["readonly"] ?? null), "html", null, true);
            echo ">
                        ";
            // line 103
            $this->loadTemplate("@__main__/inputhelp.html.twig", "@__main__/article_main.html.twig", 103)->display(twig_array_merge($context, ["sHelpId" => $this->extensions['OxidEsales\Twig\Extensions\InputHelpExtension']->getHelpId("HELP_ARTICLE_MAIN_ACTIVFROMTILL"), "sHelpText" => $this->extensions['OxidEsales\Twig\Extensions\InputHelpExtension']->getHelpText("HELP_ARTICLE_MAIN_ACTIVFROMTILL")]));
            // line 104
            echo "                      </td>
                    </tr>
                    ";
        }
        // line 107
        echo "
                    <tr>
                      <td class=\"edittext\">
                        ";
        // line 110
        echo $this->extensions['OxidEsales\Twig\Extensions\TranslateExtension']->translate(["ident" => "ARTICLE_MAIN_TITLE"]);
        echo "&nbsp;
                      </td>
                      <td class=\"edittext\">
                        <input type=\"text\" class=\"editinput\" size=\"32\" maxlength=\"";
        // line 113
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["edit"] ?? null), "oxarticles__oxtitle", [], "any", false, false, false, 113), "fldmax_length", [], "any", false, false, false, 113), "html", null, true);
        echo "\" id=\"oLockTarget\" name=\"editval[oxarticles__oxtitle]\" value=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["edit"] ?? null), "oxarticles__oxtitle", [], "any", false, false, false, 113), "value", [], "any", false, false, false, 113), "html", null, true);
        echo "\">
                        ";
        // line 114
        $this->loadTemplate("@__main__/inputhelp.html.twig", "@__main__/article_main.html.twig", 114)->display(twig_array_merge($context, ["sHelpId" => $this->extensions['OxidEsales\Twig\Extensions\InputHelpExtension']->getHelpId("HELP_ARTICLE_MAIN_TITLE"), "sHelpText" => $this->extensions['OxidEsales\Twig\Extensions\InputHelpExtension']->getHelpText("HELP_ARTICLE_MAIN_TITLE")]));
        // line 115
        echo "                      </td>
                    </tr>
                    <tr>
                      <td class=\"edittext\">
                        ";
        // line 119
        echo $this->extensions['OxidEsales\Twig\Extensions\TranslateExtension']->translate(["ident" => "ARTICLE_MAIN_ARTNUM"]);
        echo "&nbsp;
                      </td>
                      <td class=\"edittext\">
                        <input type=\"text\" class=\"editinput\" size=\"32\" maxlength=\"";
        // line 122
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["edit"] ?? null), "oxarticles__oxartnum", [], "any", false, false, false, 122), "fldmax_length", [], "any", false, false, false, 122), "html", null, true);
        echo "\" name=\"editval[oxarticles__oxartnum]\" value=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["edit"] ?? null), "oxarticles__oxartnum", [], "any", false, false, false, 122), "value", [], "any", false, false, false, 122), "html", null, true);
        echo "\" ";
        echo twig_escape_filter($this->env, ($context["readonly"] ?? null), "html", null, true);
        echo ">
                        ";
        // line 123
        $this->loadTemplate("@__main__/inputhelp.html.twig", "@__main__/article_main.html.twig", 123)->display(twig_array_merge($context, ["sHelpId" => $this->extensions['OxidEsales\Twig\Extensions\InputHelpExtension']->getHelpId("HELP_ARTICLE_MAIN_ARTNUM"), "sHelpText" => $this->extensions['OxidEsales\Twig\Extensions\InputHelpExtension']->getHelpText("HELP_ARTICLE_MAIN_ARTNUM")]));
        // line 124
        echo "                      </td>
                    </tr>

                    <tr>
                      <td class=\"edittext\">
                        ";
        // line 129
        echo $this->extensions['OxidEsales\Twig\Extensions\TranslateExtension']->translate(["ident" => "ARTICLE_MAIN_EAN"]);
        echo "&nbsp;
                      </td>
                      <td class=\"edittext\">
                        <input type=\"text\" class=\"editinput\" size=\"32\" maxlength=\"";
        // line 132
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["edit"] ?? null), "oxarticles__oxean", [], "any", false, false, false, 132), "fldmax_length", [], "any", false, false, false, 132), "html", null, true);
        echo "\" name=\"editval[oxarticles__oxean]\" value=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["edit"] ?? null), "oxarticles__oxean", [], "any", false, false, false, 132), "value", [], "any", false, false, false, 132), "html", null, true);
        echo "\">
                        ";
        // line 133
        $this->loadTemplate("@__main__/inputhelp.html.twig", "@__main__/article_main.html.twig", 133)->display(twig_array_merge($context, ["sHelpId" => $this->extensions['OxidEsales\Twig\Extensions\InputHelpExtension']->getHelpId("HELP_ARTICLE_MAIN_EAN"), "sHelpText" => $this->extensions['OxidEsales\Twig\Extensions\InputHelpExtension']->getHelpText("HELP_ARTICLE_MAIN_EAN")]));
        // line 134
        echo "                      </td>
                    </tr>

                    <tr>
                      <td class=\"edittext\">
                        ";
        // line 139
        echo $this->extensions['OxidEsales\Twig\Extensions\TranslateExtension']->translate(["ident" => "ARTICLE_MAIN_DISTEAN"]);
        echo "&nbsp;
                      </td>
                      <td class=\"edittext\">
                        <input type=\"text\" class=\"editinput\" size=\"32\" maxlength=\"";
        // line 142
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["edit"] ?? null), "oxarticles__oxdistean", [], "any", false, false, false, 142), "fldmax_length", [], "any", false, false, false, 142), "html", null, true);
        echo "\" name=\"editval[oxarticles__oxdistean]\" value=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["edit"] ?? null), "oxarticles__oxdistean", [], "any", false, false, false, 142), "value", [], "any", false, false, false, 142), "html", null, true);
        echo "\">
                        ";
        // line 143
        $this->loadTemplate("@__main__/inputhelp.html.twig", "@__main__/article_main.html.twig", 143)->display(twig_array_merge($context, ["sHelpId" => $this->extensions['OxidEsales\Twig\Extensions\InputHelpExtension']->getHelpId("HELP_ARTICLE_MAIN_DISTEAN"), "sHelpText" => $this->extensions['OxidEsales\Twig\Extensions\InputHelpExtension']->getHelpText("HELP_ARTICLE_MAIN_DISTEAN")]));
        // line 144
        echo "                      </td>
                    </tr>

                    <tr>
                      <td class=\"edittext\">
                        ";
        // line 149
        echo $this->extensions['OxidEsales\Twig\Extensions\TranslateExtension']->translate(["ident" => "ARTICLE_MAIN_MPN"]);
        echo "&nbsp;
                      </td>
                      <td class=\"edittext\">
                        <input type=\"text\" class=\"editinput\" size=\"32\" maxlength=\"";
        // line 152
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["edit"] ?? null), "oxarticles__oxmpn", [], "any", false, false, false, 152), "fldmax_length", [], "any", false, false, false, 152), "html", null, true);
        echo "\" name=\"editval[oxarticles__oxmpn]\" value=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["edit"] ?? null), "oxarticles__oxmpn", [], "any", false, false, false, 152), "value", [], "any", false, false, false, 152), "html", null, true);
        echo "\">
                        ";
        // line 153
        $this->loadTemplate("@__main__/inputhelp.html.twig", "@__main__/article_main.html.twig", 153)->display(twig_array_merge($context, ["sHelpId" => $this->extensions['OxidEsales\Twig\Extensions\InputHelpExtension']->getHelpId("HELP_ARTICLE_MAIN_MPN"), "sHelpText" => $this->extensions['OxidEsales\Twig\Extensions\InputHelpExtension']->getHelpText("HELP_ARTICLE_MAIN_MPN")]));
        // line 154
        echo "                      </td>
                    </tr>

                  <tr>
                    <td class=\"edittext\">
                        ";
        // line 159
        echo $this->extensions['OxidEsales\Twig\Extensions\TranslateExtension']->translate(["ident" => "ARTICLE_MAIN_SHORTDESC"]);
        echo "&nbsp;
                    </td>
                    <td class=\"edittext\">
                        <input type=\"text\" class=\"editinput\" size=\"32\" maxlength=\"";
        // line 162
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["edit"] ?? null), "oxarticles__oxshortdesc", [], "any", false, false, false, 162), "fldmax_length", [], "any", false, false, false, 162), "html", null, true);
        echo "\" name=\"editval[oxarticles__oxshortdesc]\" value=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["edit"] ?? null), "oxarticles__oxshortdesc", [], "any", false, false, false, 162), "value", [], "any", false, false, false, 162), "html", null, true);
        echo "\" ";
        echo twig_escape_filter($this->env, ($context["readonly"] ?? null), "html", null, true);
        echo ">
                        ";
        // line 163
        $this->loadTemplate("@__main__/inputhelp.html.twig", "@__main__/article_main.html.twig", 163)->display(twig_array_merge($context, ["sHelpId" => $this->extensions['OxidEsales\Twig\Extensions\InputHelpExtension']->getHelpId("HELP_ARTICLE_MAIN_SHORTDESC"), "sHelpText" => $this->extensions['OxidEsales\Twig\Extensions\InputHelpExtension']->getHelpText("HELP_ARTICLE_MAIN_SHORTDESC")]));
        // line 164
        echo "                    </td>
                  </tr>
                  <tr>
                    <td class=\"edittext\">
                        ";
        // line 168
        echo $this->extensions['OxidEsales\Twig\Extensions\TranslateExtension']->translate(["ident" => "ARTICLE_MAIN_SEARCHKEYS"]);
        echo "&nbsp;
                    </td>
                    <td class=\"edittext\">
                        <input type=\"text\" class=\"editinput\" size=\"32\" maxlength=\"";
        // line 171
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["edit"] ?? null), "oxarticles__oxsearchkeys", [], "any", false, false, false, 171), "fldmax_length", [], "any", false, false, false, 171), "html", null, true);
        echo "\" name=\"editval[oxarticles__oxsearchkeys]\" value=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["edit"] ?? null), "oxarticles__oxsearchkeys", [], "any", false, false, false, 171), "value", [], "any", false, false, false, 171), "html", null, true);
        echo "\" ";
        echo twig_escape_filter($this->env, ($context["readonly"] ?? null), "html", null, true);
        echo ">
                        ";
        // line 172
        $this->loadTemplate("@__main__/inputhelp.html.twig", "@__main__/article_main.html.twig", 172)->display(twig_array_merge($context, ["sHelpId" => $this->extensions['OxidEsales\Twig\Extensions\InputHelpExtension']->getHelpId("HELP_ARTICLE_MAIN_SEARCHKEYS"), "sHelpText" => $this->extensions['OxidEsales\Twig\Extensions\InputHelpExtension']->getHelpText("HELP_ARTICLE_MAIN_SEARCHKEYS")]));
        // line 173
        echo "                    </td>
                  </tr>

                  ";
        // line 176
        $this->displayBlock('admin_article_main_extended', $context, $blocks);
        // line 177
        echo "
                  <tr>
                    <td class=\"edittext\">
                        ";
        // line 180
        echo $this->extensions['OxidEsales\Twig\Extensions\TranslateExtension']->translate(["ident" => "ARTICLE_MAIN_VENDORID"]);
        echo "
                    </td>
                    <td class=\"edittext\">
                        <select class=\"editinput\" name=\"editval[oxarticles__oxvendorid]\" ";
        // line 183
        echo twig_escape_filter($this->env, ($context["readonly"] ?? null), "html", null, true);
        echo ">
                        <option value=\"\" selected>---</option>
                        ";
        // line 185
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["oView"] ?? null), "getVendorList", [], "method", false, false, false, 185));
        foreach ($context['_seq'] as $context["_key"] => $context["oVendor"]) {
            // line 186
            echo "                        <option value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["oVendor"], "oxvendor__oxid", [], "any", false, false, false, 186), "value", [], "any", false, false, false, 186), "html", null, true);
            echo "\"";
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["edit"] ?? null), "oxarticles__oxvendorid", [], "any", false, false, false, 186), "value", [], "any", false, false, false, 186) == twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["oVendor"], "oxvendor__oxid", [], "any", false, false, false, 186), "value", [], "any", false, false, false, 186))) {
                echo " selected";
            }
            echo ">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["oVendor"], "oxvendor__oxtitle", [], "any", false, false, false, 186), "value", [], "any", false, false, false, 186), "html", null, true);
            echo "</option>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['oVendor'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 188
        echo "                        </select>
                        ";
        // line 189
        $this->loadTemplate("@__main__/inputhelp.html.twig", "@__main__/article_main.html.twig", 189)->display(twig_array_merge($context, ["sHelpId" => $this->extensions['OxidEsales\Twig\Extensions\InputHelpExtension']->getHelpId("HELP_ARTICLE_MAIN_VENDORID"), "sHelpText" => $this->extensions['OxidEsales\Twig\Extensions\InputHelpExtension']->getHelpText("HELP_ARTICLE_MAIN_VENDORID")]));
        // line 190
        echo "                    </td>
                  </tr>

                  <tr>
                    <td class=\"edittext\">
                        ";
        // line 195
        echo $this->extensions['OxidEsales\Twig\Extensions\TranslateExtension']->translate(["ident" => "ARTICLE_MAIN_MANUFACTURERID"]);
        echo "
                    </td>
                    <td class=\"edittext\">
                        <select class=\"editinput\" name=\"editval[oxarticles__oxmanufacturerid]\" ";
        // line 198
        echo twig_escape_filter($this->env, ($context["readonly"] ?? null), "html", null, true);
        echo ">
                        <option value=\"\" selected>---</option>
                        ";
        // line 200
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["oView"] ?? null), "getManufacturerList", [], "method", false, false, false, 200));
        foreach ($context['_seq'] as $context["_key"] => $context["oManufacturer"]) {
            // line 201
            echo "                        <option value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["oManufacturer"], "oxmanufacturers__oxid", [], "any", false, false, false, 201), "value", [], "any", false, false, false, 201), "html", null, true);
            echo "\"";
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["edit"] ?? null), "oxarticles__oxmanufacturerid", [], "any", false, false, false, 201), "value", [], "any", false, false, false, 201) == twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["oManufacturer"], "oxmanufacturers__oxid", [], "any", false, false, false, 201), "value", [], "any", false, false, false, 201))) {
                echo " selected";
            }
            echo ">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["oManufacturer"], "oxmanufacturers__oxtitle", [], "any", false, false, false, 201), "value", [], "any", false, false, false, 201), "html", null, true);
            echo "</option>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['oManufacturer'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 203
        echo "                        </select>
                        ";
        // line 204
        $this->loadTemplate("@__main__/inputhelp.html.twig", "@__main__/article_main.html.twig", 204)->display(twig_array_merge($context, ["sHelpId" => $this->extensions['OxidEsales\Twig\Extensions\InputHelpExtension']->getHelpId("HELP_ARTICLE_MAIN_MANUFACTURERID"), "sHelpText" => $this->extensions['OxidEsales\Twig\Extensions\InputHelpExtension']->getHelpText("HELP_ARTICLE_MAIN_MANUFACTURERID")]));
        // line 205
        echo "                    </td>
                  </tr>

                  ";
        // line 208
        if (twig_get_attribute($this->env, $this->source, ($context["edit"] ?? null), "isParentNotBuyable", [], "method", false, false, false, 208)) {
            // line 209
            echo "                  <tr>
                    <td colspan=\"2\">
                      <div class=\"errorbox\">";
            // line 211
            echo $this->extensions['OxidEsales\Twig\Extensions\TranslateExtension']->translate(["ident" => "ARTICLE_MAIN_PARENTNOTBUYABLE"]);
            echo "</div>
                    </td>
                  </tr>
                  ";
        }
        // line 215
        echo "                    <tr>
                      <td class=\"edittext\">
                        ";
        // line 217
        echo $this->extensions['OxidEsales\Twig\Extensions\TranslateExtension']->translate(["ident" => "ARTICLE_MAIN_PRICE"]);
        echo " (";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["oActCur"] ?? null), "sign", [], "any", false, false, false, 217), "html", null, true);
        echo ")
                      </td>
                      <td class=\"edittext\">
                        <input type=\"text\" class=\"editinput\" size=\"8\" maxlength=\"";
        // line 220
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["edit"] ?? null), "oxarticles__oxprice", [], "any", false, false, false, 220), "fldmax_length", [], "any", false, false, false, 220), "html", null, true);
        echo "\" name=\"editval[oxarticles__oxprice]\" value=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["edit"] ?? null), "oxarticles__oxprice", [], "any", false, false, false, 220), "value", [], "any", false, false, false, 220), "html", null, true);
        echo "\" ";
        echo twig_escape_filter($this->env, ($context["readonly"] ?? null), "html", null, true);
        echo ">
                        ";
        // line 221
        $context["oPrice"] = twig_get_attribute($this->env, $this->source, ($context["edit"] ?? null), "getPrice", [], "method", false, false, false, 221);
        // line 222
        echo "                        &nbsp;<em>( ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["oPrice"] ?? null), "getBruttoPrice", [], "method", false, false, false, 222), "html", null, true);
        echo " )</em>
                        ";
        // line 223
        $this->loadTemplate("@__main__/inputhelp.html.twig", "@__main__/article_main.html.twig", 223)->display(twig_array_merge($context, ["sHelpId" => $this->extensions['OxidEsales\Twig\Extensions\InputHelpExtension']->getHelpId("HELP_ARTICLE_MAIN_PRICE"), "sHelpText" => $this->extensions['OxidEsales\Twig\Extensions\InputHelpExtension']->getHelpText("HELP_ARTICLE_MAIN_PRICE")]));
        // line 224
        echo "                      </td>
                    </tr>

                  <tr>
                    <td class=\"edittext\">
                    ";
        // line 229
        echo $this->extensions['OxidEsales\Twig\Extensions\TranslateExtension']->translate(["ident" => "ARTICLE_MAIN_ALDPRICE"]);
        echo " (";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["oActCur"] ?? null), "sign", [], "any", false, false, false, 229), "html", null, true);
        echo ")
                    </td>
                    <td class=\"edittext\" nowrap>
                        ";
        // line 232
        echo $this->extensions['OxidEsales\Twig\Extensions\TranslateExtension']->translate(["ident" => "ARTICLE_MAIN_PRICEA"]);
        echo ": <input type=\"text\" class=\"editinput\" size=\"4\" maxlength=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["edit"] ?? null), "oxarticles__oxpricea", [], "any", false, false, false, 232), "fldmax_length", [], "any", false, false, false, 232), "html", null, true);
        echo "\" name=\"editval[oxarticles__oxpricea]\" value=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["edit"] ?? null), "oxarticles__oxpricea", [], "any", false, false, false, 232), "value", [], "any", false, false, false, 232), "html", null, true);
        echo "\" ";
        echo twig_escape_filter($this->env, ($context["readonly"] ?? null), "html", null, true);
        echo ">
                        ";
        // line 233
        echo $this->extensions['OxidEsales\Twig\Extensions\TranslateExtension']->translate(["ident" => "ARTICLE_MAIN_PRICEB"]);
        echo ": <input type=\"text\" class=\"editinput\" size=\"4\" maxlength=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["edit"] ?? null), "oxarticles__oxpriceb", [], "any", false, false, false, 233), "fldmax_length", [], "any", false, false, false, 233), "html", null, true);
        echo "\" name=\"editval[oxarticles__oxpriceb]\" value=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["edit"] ?? null), "oxarticles__oxpriceb", [], "any", false, false, false, 233), "value", [], "any", false, false, false, 233), "html", null, true);
        echo "\" ";
        echo twig_escape_filter($this->env, ($context["readonly"] ?? null), "html", null, true);
        echo ">
                        ";
        // line 234
        echo $this->extensions['OxidEsales\Twig\Extensions\TranslateExtension']->translate(["ident" => "ARTICLE_MAIN_PRICEC"]);
        echo ": <input type=\"text\" class=\"editinput\" size=\"4\" maxlength=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["edit"] ?? null), "oxarticles__oxpricec", [], "any", false, false, false, 234), "fldmax_length", [], "any", false, false, false, 234), "html", null, true);
        echo "\" name=\"editval[oxarticles__oxpricec]\" value=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["edit"] ?? null), "oxarticles__oxpricec", [], "any", false, false, false, 234), "value", [], "any", false, false, false, 234), "html", null, true);
        echo "\" ";
        echo twig_escape_filter($this->env, ($context["readonly"] ?? null), "html", null, true);
        echo ">
                        ";
        // line 235
        $this->loadTemplate("@__main__/inputhelp.html.twig", "@__main__/article_main.html.twig", 235)->display(twig_array_merge($context, ["sHelpId" => $this->extensions['OxidEsales\Twig\Extensions\InputHelpExtension']->getHelpId("HELP_ARTICLE_MAIN_ALDPRICE"), "sHelpText" => $this->extensions['OxidEsales\Twig\Extensions\InputHelpExtension']->getHelpText("HELP_ARTICLE_MAIN_ALDPRICE")]));
        // line 236
        echo "                    </td>
                  </tr>
                  <tr>
                    <td class=\"edittext\">
                        ";
        // line 240
        echo $this->extensions['OxidEsales\Twig\Extensions\TranslateExtension']->translate(["ident" => "ARTICLE_MAIN_VAT"]);
        echo "
                    </td>
                    <td class=\"edittext\">
                        <input type=\"text\" class=\"editinput\" size=\"10\" maxlength=\"";
        // line 243
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["edit"] ?? null), "oxarticles__oxvat", [], "any", false, false, false, 243), "fldmax_length", [], "any", false, false, false, 243), "html", null, true);
        echo "\" name=\"editval[oxarticles__oxvat]\" value=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["edit"] ?? null), "oxarticles__oxvat", [], "any", false, false, false, 243), "value", [], "any", false, false, false, 243), "html", null, true);
        echo "\" ";
        $this->loadTemplate("@__main__/help.html.twig", "@__main__/article_main.html.twig", 243)->display(twig_array_merge($context, ["helpid" => "article_vat"]));
        echo " ";
        echo twig_escape_filter($this->env, ($context["readonly"] ?? null), "html", null, true);
        echo ">
                        ";
        // line 244
        $this->loadTemplate("@__main__/inputhelp.html.twig", "@__main__/article_main.html.twig", 244)->display(twig_array_merge($context, ["sHelpId" => $this->extensions['OxidEsales\Twig\Extensions\InputHelpExtension']->getHelpId("HELP_ARTICLE_MAIN_VAT"), "sHelpText" => $this->extensions['OxidEsales\Twig\Extensions\InputHelpExtension']->getHelpText("HELP_ARTICLE_MAIN_VAT")]));
        // line 245
        echo "                    </td>
                  </tr>

              ";
    }

    // line 69
    public function block_admin_article_main_extended_errorbox($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 176
    public function block_admin_article_main_extended($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 291
    public function block_admin_article_main_editor($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 292
        echo "              ";
        $this->loadTemplate("@__main__/include/editor.html.twig", "@__main__/article_main.html.twig", 292)->display($context);
        // line 293
        echo "            ";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@__main__/article_main.html.twig";
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
        return array (  798 => 293,  795 => 292,  791 => 291,  785 => 176,  779 => 69,  772 => 245,  770 => 244,  760 => 243,  754 => 240,  748 => 236,  746 => 235,  736 => 234,  726 => 233,  716 => 232,  708 => 229,  701 => 224,  699 => 223,  694 => 222,  692 => 221,  684 => 220,  676 => 217,  672 => 215,  665 => 211,  661 => 209,  659 => 208,  654 => 205,  652 => 204,  649 => 203,  634 => 201,  630 => 200,  625 => 198,  619 => 195,  612 => 190,  610 => 189,  607 => 188,  592 => 186,  588 => 185,  583 => 183,  577 => 180,  572 => 177,  570 => 176,  565 => 173,  563 => 172,  555 => 171,  549 => 168,  543 => 164,  541 => 163,  533 => 162,  527 => 159,  520 => 154,  518 => 153,  512 => 152,  506 => 149,  499 => 144,  497 => 143,  491 => 142,  485 => 139,  478 => 134,  476 => 133,  470 => 132,  464 => 129,  457 => 124,  455 => 123,  447 => 122,  441 => 119,  435 => 115,  433 => 114,  427 => 113,  421 => 110,  416 => 107,  411 => 104,  409 => 103,  399 => 102,  389 => 101,  383 => 98,  379 => 96,  377 => 95,  372 => 92,  370 => 91,  362 => 90,  357 => 88,  349 => 87,  342 => 83,  337 => 80,  322 => 76,  316 => 73,  312 => 71,  309 => 70,  306 => 69,  301 => 66,  295 => 64,  293 => 63,  289 => 61,  286 => 60,  282 => 59,  278 => 302,  275 => 301,  273 => 300,  265 => 294,  263 => 291,  257 => 287,  252 => 284,  250 => 283,  245 => 281,  242 => 280,  240 => 279,  234 => 276,  230 => 274,  225 => 271,  223 => 270,  220 => 269,  209 => 267,  205 => 266,  201 => 265,  197 => 264,  191 => 261,  187 => 259,  185 => 258,  181 => 256,  173 => 254,  171 => 253,  161 => 252,  156 => 249,  154 => 59,  145 => 53,  141 => 52,  137 => 51,  133 => 50,  127 => 47,  123 => 46,  117 => 43,  112 => 41,  108 => 40,  104 => 39,  100 => 38,  97 => 37,  93 => 35,  89 => 33,  87 => 32,  82 => 29,  76 => 25,  70 => 23,  68 => 22,  64 => 20,  62 => 19,  43 => 2,  41 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@__main__/article_main.html.twig", "/var/www/html/source/Application/views/admin_twig/tpl/article_main.html.twig");
    }
}
