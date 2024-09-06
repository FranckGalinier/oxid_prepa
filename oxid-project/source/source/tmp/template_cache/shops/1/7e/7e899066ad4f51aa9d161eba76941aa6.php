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

/* @__main__/country_list.html.twig */
class __TwigTemplate_580c73d4d9a3bf010780464abe5674d2 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'admin_country_list_colgroup' => [$this, 'block_admin_country_list_colgroup'],
            'admin_country_list_filter' => [$this, 'block_admin_country_list_filter'],
            'admin_country_list_sorting' => [$this, 'block_admin_country_list_sorting'],
            'admin_country_list_item' => [$this, 'block_admin_country_list_item'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        $this->loadTemplate("@__main__/headitem.html.twig", "@__main__/country_list.html.twig", 1)->display(twig_array_merge($context, ["title" => $this->extensions['OxidEsales\Twig\Extensions\Filters\TranslateExtension']->translate("GENERAL_ADMIN_TITLE"), "box" => "list"]));
        // line 2
        $context["where"] = twig_get_attribute($this->env, $this->source, ($context["oView"] ?? null), "getListFilter", [], "method", false, false, false, 2);
        // line 3
        echo "
";
        // line 4
        if (($context["readonly"] ?? null)) {
            // line 5
            echo "    ";
            $context["readonly"] = "readonly disabled";
        } else {
            // line 7
            echo "    ";
            $context["readonly"] = "";
        }
        // line 9
        echo "
<script type=\"text/javascript\">
<!--
window.onload = function ()
{
    top.reloadEditFrame();
    ";
        // line 15
        if ((($context["updatelist"] ?? null) == 1)) {
            // line 16
            echo "        top.oxid.admin.updateList('";
            echo twig_escape_filter($this->env, ($context["oxid"] ?? null), "html", null, true);
            echo "');
    ";
        }
        // line 18
        echo "}
//-->
</script>

<div id=\"liste\">


<form name=\"search\" id=\"search\" action=\"";
        // line 25
        echo twig_get_attribute($this->env, $this->source, ($context["oViewConf"] ?? null), "getSelfLink", [], "method", false, false, false, 25);
        echo "\" method=\"post\">
";
        // line 26
        $this->loadTemplate("@__main__/_formparams.html.twig", "@__main__/country_list.html.twig", 26)->display(twig_array_merge($context, ["cl" => "country_list", "lstrt" => ($context["lstrt"] ?? null), "actedit" => ($context["actedit"] ?? null), "oxid" => ($context["oxid"] ?? null), "fnc" => "", "language" => ($context["actlang"] ?? null), "editlanguage" => ($context["actlang"] ?? null)]));
        // line 27
        echo "<table cellspacing=\"0\" cellpadding=\"0\" border=\"0\" width=\"100%\">
    <colgroup>
        ";
        // line 29
        $this->displayBlock('admin_country_list_colgroup', $context, $blocks);
        // line 36
        echo "    </colgroup>
    <tr class=\"listitem\">
        ";
        // line 38
        $this->displayBlock('admin_country_list_filter', $context, $blocks);
        // line 70
        echo "    </tr>

    <tr>
        ";
        // line 73
        $this->displayBlock('admin_country_list_sorting', $context, $blocks);
        // line 79
        echo "    </tr>

";
        // line 81
        $context["blWhite"] = "";
        // line 82
        $context["_cnt"] = 0;
        // line 83
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["mylist"] ?? null));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["listitem"]) {
            // line 84
            echo "    ";
            $context["_cnt"] = (($context["_cnt"] ?? null) + 1);
            // line 85
            echo "    <tr id=\"row.";
            echo twig_escape_filter($this->env, ($context["_cnt"] ?? null), "html", null, true);
            echo "\">
        ";
            // line 86
            $this->displayBlock('admin_country_list_item', $context, $blocks);
            // line 107
            echo "    </tr>
";
            // line 108
            if ((($context["blWhite"] ?? null) == "2")) {
                // line 109
                $context["blWhite"] = "";
            } else {
                // line 111
                $context["blWhite"] = "2";
            }
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['listitem'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 114
        $this->loadTemplate("@__main__/pagenavisnippet.html.twig", "@__main__/country_list.html.twig", 114)->display(twig_array_merge($context, ["colspan" => "5"]));
        // line 115
        echo "</table>
</form>
</div>


";
        // line 120
        $this->loadTemplate("@__main__/pagetabsnippet.html.twig", "@__main__/country_list.html.twig", 120)->display($context);
        // line 121
        echo "
<script type=\"text/javascript\">
if (parent.parent)
{   parent.parent.sShopTitle   = \"";
        // line 124
        echo addslashes(twig_get_attribute($this->env, $this->source, ($context["actshopobj"] ?? null), "oxshops__oxname", [], "any", false, false, false, 124));
        echo "\";
    parent.parent.sMenuItem    = \"";
        // line 125
        echo $this->extensions['OxidEsales\Twig\Extensions\TranslateExtension']->translate(["ident" => "COUNTRY_LIST_MENUITEM"]);
        echo "\";
    parent.parent.sMenuSubItem = \"";
        // line 126
        echo $this->extensions['OxidEsales\Twig\Extensions\TranslateExtension']->translate(["ident" => "COUNTRY_LIST_MENUSUBITEM"]);
        echo "\";
    parent.parent.sWorkArea    = \"";
        // line 127
        echo twig_escape_filter($this->env, ($context["_act"] ?? null), "html", null, true);
        echo "\";
    parent.parent.setTitle();
}
</script>
</body>
</html>";
    }

    // line 29
    public function block_admin_country_list_colgroup($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 30
        echo "            <col width=\"4%\">
            <col width=\"40%\">
            <col width=\"35%\">
            <col width=\"20%\">
            <col width=\"1%\">
        ";
    }

    // line 38
    public function block_admin_country_list_filter($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 39
        echo "            <td valign=\"top\" class=\"listfilter first\" align=\"center\">
                <div class=\"r1\"><div class=\"b1\">
                <input class=\"listedit\" type=\"text\" size=\"3\" maxlength=\"128\" name=\"where[oxcountry][oxactive]\" value=\"";
        // line 41
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["where"] ?? null), "oxcountry", [], "any", false, false, false, 41), "oxactive", [], "any", false, false, false, 41), "html", null, true);
        echo "\">
                </div></div>
            </td>
            <td valign=\"top\" class=\"listfilter\">
                <div class=\"r1\"><div class=\"b1\">
                <input class=\"listedit\" type=\"text\" size=\"50\" maxlength=\"128\" name=\"where[oxcountry][oxtitle]\" value=\"";
        // line 46
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["where"] ?? null), "oxcountry", [], "any", false, false, false, 46), "oxtitle", [], "any", false, false, false, 46), "html", null, true);
        echo "\">
                </div></div>
            </td>
            <td valign=\"top\" class=\"listfilter\">
                <div class=\"r1\"><div class=\"b1\">
                <input class=\"listedit\" type=\"text\" size=\"50\" maxlength=\"128\" name=\"where[oxcountry][oxshortdesc]\" value=\"";
        // line 51
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["where"] ?? null), "oxcountry", [], "any", false, false, false, 51), "oxshortdesc", [], "any", false, false, false, 51), "html", null, true);
        echo "\">
                </div></div>
            </td>
            <td valign=\"top\" class=\"listfilter\" colspan=\"2\">
                <div class=\"r1\"><div class=\"b1\">

                <div class=\"find\">
                    <select name=\"changelang\" class=\"editinput\" onChange=\"Javascript:top.oxid.admin.changeLanguage();\">
                    ";
        // line 59
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["lang"]) {
            // line 60
            echo "                    <option value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["lang"], "id", [], "any", false, false, false, 60), "html", null, true);
            echo "\" ";
            if (twig_get_attribute($this->env, $this->source, $context["lang"], "selected", [], "any", false, false, false, 60)) {
                echo "SELECTED";
            }
            echo ">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["lang"], "name", [], "any", false, false, false, 60), "html", null, true);
            echo "</option>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['lang'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 62
        echo "                    </select>
                    <input class=\"listedit\" type=\"submit\" name=\"submitit\" value=\"";
        // line 63
        echo $this->extensions['OxidEsales\Twig\Extensions\TranslateExtension']->translate(["ident" => "GENERAL_SEARCH"]);
        echo "\">
                </div>

                <input class=\"listedit\" type=\"text\" size=\"5\" maxlength=\"128\" name=\"where[oxcountry][oxisoalpha3]\" value=\"";
        // line 66
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["where"] ?? null), "oxcountry", [], "any", false, false, false, 66), "oxisoalpha3", [], "any", false, false, false, 66), "html", null, true);
        echo "\">
                </div></div>
            </td>
        ";
    }

    // line 73
    public function block_admin_country_list_sorting($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 74
        echo "            <td class=\"listheader first\" height=\"15\" align=\"center\"><a href=\"Javascript:top.oxid.admin.setSorting( document.search, 'oxcountry', 'oxactive', 'asc');document.search.submit();\" class=\"listheader\">";
        echo $this->extensions['OxidEsales\Twig\Extensions\TranslateExtension']->translate(["ident" => "GENERAL_ARTICLE_OXACTIVE"]);
        echo "</a></td>
            <td class=\"listheader\" height=\"15\"><a href=\"Javascript:top.oxid.admin.setSorting( document.search, 'oxcountry', 'oxtitle', 'asc');document.search.submit();\" class=\"listheader\">";
        // line 75
        echo $this->extensions['OxidEsales\Twig\Extensions\TranslateExtension']->translate(["ident" => "GENERAL_COUNTRY"]);
        echo "</a></td>
            <td class=\"listheader\" height=\"15\"><a href=\"Javascript:top.oxid.admin.setSorting( document.search, 'oxcountry', 'oxshortdesc', 'asc');document.search.submit();\" class=\"listheader\">";
        // line 76
        echo $this->extensions['OxidEsales\Twig\Extensions\TranslateExtension']->translate(["ident" => "GENERAL_SHORTDESC"]);
        echo "</a></td>
            <td class=\"listheader\" height=\"15\" colspan=\"2\"><a href=\"Javascript:top.oxid.admin.setSorting( document.search, 'oxcountry', 'oxisoalpha3', 'asc');document.search.submit();\" class=\"listheader\">";
        // line 77
        echo $this->extensions['OxidEsales\Twig\Extensions\TranslateExtension']->translate(["ident" => "COUNTRY_LIST_ISO"]);
        echo "</a></td>
        ";
    }

    // line 86
    public function block_admin_country_list_item($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 87
        echo "            ";
        if ((twig_get_attribute($this->env, $this->source, ($context["listitem"] ?? null), "blacklist", [], "any", false, false, false, 87) == 1)) {
            // line 88
            echo "                ";
            $context["listclass"] = "listitem3";
            // line 89
            echo "            ";
        } else {
            // line 90
            echo "                ";
            $context["listclass"] = ("listitem" . ($context["blWhite"] ?? null));
            // line 91
            echo "            ";
        }
        // line 92
        echo "            ";
        if ((twig_get_attribute($this->env, $this->source, ($context["listitem"] ?? null), "getId", [], "method", false, false, false, 92) == ($context["oxid"] ?? null))) {
            // line 93
            echo "                ";
            $context["listclass"] = "listitem4";
            // line 94
            echo "            ";
        }
        // line 95
        echo "            <td valign=\"top\" class=\"";
        echo twig_escape_filter($this->env, ($context["listclass"] ?? null), "html", null, true);
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["listitem"] ?? null), "oxcountry__oxactive", [], "any", false, false, false, 95), "value", [], "any", false, false, false, 95) == 1)) {
            echo " active";
        }
        echo "\" height=\"15\"><div class=\"listitemfloating\">&nbsp;<a href=\"Javascript:top.oxid.admin.editThis('";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["listitem"] ?? null), "oxcountry__oxid", [], "any", false, false, false, 95), "value", [], "any", false, false, false, 95), "html", null, true);
        echo "');\" class=\"";
        echo twig_escape_filter($this->env, ($context["listclass"] ?? null), "html", null, true);
        echo "\">
             &nbsp;
            </a></div></td>
            <td valign=\"top\" class=\"";
        // line 98
        echo twig_escape_filter($this->env, ($context["listclass"] ?? null), "html", null, true);
        echo "\" height=\"15\"><div class=\"listitemfloating\"><a href=\"Javascript:top.oxid.admin.editThis('";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["listitem"] ?? null), "oxcountry__oxid", [], "any", false, false, false, 98), "value", [], "any", false, false, false, 98), "html", null, true);
        echo "');\" class=\"";
        echo twig_escape_filter($this->env, ($context["listclass"] ?? null), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["listitem"] ?? null), "oxcountry__oxtitle", [], "any", false, false, false, 98), "value", [], "any", false, false, false, 98), "html", null, true);
        echo "</a></div></td>
            <td valign=\"top\" class=\"";
        // line 99
        echo twig_escape_filter($this->env, ($context["listclass"] ?? null), "html", null, true);
        echo "\" height=\"15\"><div class=\"listitemfloating\"><a href=\"Javascript:top.oxid.admin.editThis('";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["listitem"] ?? null), "oxcountry__oxid", [], "any", false, false, false, 99), "value", [], "any", false, false, false, 99), "html", null, true);
        echo "');\" class=\"";
        echo twig_escape_filter($this->env, ($context["listclass"] ?? null), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["listitem"] ?? null), "oxcountry__oxshortdesc", [], "any", false, false, false, 99), "value", [], "any", false, false, false, 99), "html", null, true);
        echo "</a></div></td>
            <td valign=\"top\" class=\"";
        // line 100
        echo twig_escape_filter($this->env, ($context["listclass"] ?? null), "html", null, true);
        echo "\" height=\"15\"><div class=\"listitemfloating\"><a href=\"Javascript:top.oxid.admin.editThis('";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["listitem"] ?? null), "oxcountry__oxid", [], "any", false, false, false, 100), "value", [], "any", false, false, false, 100), "html", null, true);
        echo "');\" class=\"";
        echo twig_escape_filter($this->env, ($context["listclass"] ?? null), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["listitem"] ?? null), "oxcountry__oxisoalpha3", [], "any", false, false, false, 100), "value", [], "any", false, false, false, 100), "html", null, true);
        echo "</a></div></td>
            <td align=\"right\" class=\"";
        // line 101
        echo twig_escape_filter($this->env, ($context["listclass"] ?? null), "html", null, true);
        echo "\">
            ";
        // line 102
        if ( !($context["readonly"] ?? null)) {
            // line 103
            echo "            <a href=\"Javascript:top.oxid.admin.deleteThis('";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["listitem"] ?? null), "oxcountry__oxid", [], "any", false, false, false, 103), "value", [], "any", false, false, false, 103), "html", null, true);
            echo "');\" class=\"delete\" id=\"del.";
            echo twig_escape_filter($this->env, ($context["_cnt"] ?? null), "html", null, true);
            echo "\" title=\"\" ";
            $this->loadTemplate("@__main__/help.html.twig", "@__main__/country_list.html.twig", 103)->display(twig_array_merge($context, ["helpid" => "item_delete"]));
            echo "></a>
            ";
        }
        // line 105
        echo "            </td>
        ";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@__main__/country_list.html.twig";
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
        return array (  399 => 105,  389 => 103,  387 => 102,  383 => 101,  373 => 100,  363 => 99,  353 => 98,  339 => 95,  336 => 94,  333 => 93,  330 => 92,  327 => 91,  324 => 90,  321 => 89,  318 => 88,  315 => 87,  311 => 86,  305 => 77,  301 => 76,  297 => 75,  292 => 74,  288 => 73,  280 => 66,  274 => 63,  271 => 62,  256 => 60,  252 => 59,  241 => 51,  233 => 46,  225 => 41,  221 => 39,  217 => 38,  208 => 30,  204 => 29,  194 => 127,  190 => 126,  186 => 125,  182 => 124,  177 => 121,  175 => 120,  168 => 115,  166 => 114,  151 => 111,  148 => 109,  146 => 108,  143 => 107,  141 => 86,  136 => 85,  133 => 84,  116 => 83,  114 => 82,  112 => 81,  108 => 79,  106 => 73,  101 => 70,  99 => 38,  95 => 36,  93 => 29,  89 => 27,  87 => 26,  83 => 25,  74 => 18,  68 => 16,  66 => 15,  58 => 9,  54 => 7,  50 => 5,  48 => 4,  45 => 3,  43 => 2,  41 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@__main__/country_list.html.twig", "/var/www/html/source/Application/views/admin_twig/tpl/country_list.html.twig");
    }
}
