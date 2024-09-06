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

/* @__main__/discount_list.html.twig */
class __TwigTemplate_b0c9839954eac0c3e48a5cefcb9ba727 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'admin_discount_list_colgroup' => [$this, 'block_admin_discount_list_colgroup'],
            'admin_discount_list_filter' => [$this, 'block_admin_discount_list_filter'],
            'admin_discount_list_sorting' => [$this, 'block_admin_discount_list_sorting'],
            'admin_discount_list_item' => [$this, 'block_admin_discount_list_item'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        $this->loadTemplate("@__main__/headitem.html.twig", "@__main__/discount_list.html.twig", 1)->display(twig_array_merge($context, ["title" => $this->extensions['OxidEsales\Twig\Extensions\Filters\TranslateExtension']->translate("GENERAL_ADMIN_TITLE"), "box" => "list"]));
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
        // line 24
        echo twig_get_attribute($this->env, $this->source, ($context["oViewConf"] ?? null), "getSelfLink", [], "method", false, false, false, 24);
        echo "\" method=\"post\">
";
        // line 25
        $this->loadTemplate("@__main__/_formparams.html.twig", "@__main__/discount_list.html.twig", 25)->display(twig_array_merge($context, ["cl" => "discount_list", "lstrt" => ($context["lstrt"] ?? null), "actedit" => ($context["actedit"] ?? null), "oxid" => ($context["oxid"] ?? null), "fnc" => "", "language" => ($context["actlang"] ?? null), "editlanguage" => ($context["actlang"] ?? null)]));
        // line 26
        echo "<table cellspacing=\"0\" cellpadding=\"0\" border=\"0\" width=\"100%\">
    <colgroup>
        ";
        // line 28
        $this->displayBlock('admin_discount_list_colgroup', $context, $blocks);
        // line 34
        echo "    </colgroup>
    <tr class=\"listitem\">
        ";
        // line 36
        $this->displayBlock('admin_discount_list_filter', $context, $blocks);
        // line 62
        echo "    </tr>
    <tr>
        ";
        // line 64
        $this->displayBlock('admin_discount_list_sorting', $context, $blocks);
        // line 69
        echo "    </tr>

";
        // line 71
        $context["blWhite"] = "";
        // line 72
        $context["_cnt"] = 0;
        // line 73
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
            // line 74
            echo "    ";
            $context["_cnt"] = (($context["_cnt"] ?? null) + 1);
            // line 75
            echo "    <tr id=\"row.";
            echo twig_escape_filter($this->env, ($context["_cnt"] ?? null), "html", null, true);
            echo "\">
        ";
            // line 76
            $this->displayBlock('admin_discount_list_item', $context, $blocks);
            // line 94
            echo "    </tr>
    ";
            // line 95
            if ((($context["blWhite"] ?? null) == "2")) {
                // line 96
                echo "        ";
                $context["blWhite"] = "";
                // line 97
                echo "    ";
            } else {
                // line 98
                echo "        ";
                $context["blWhite"] = "2";
                // line 99
                echo "    ";
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
        // line 101
        $this->loadTemplate("@__main__/pagenavisnippet.html.twig", "@__main__/discount_list.html.twig", 101)->display(twig_array_merge($context, ["colspan" => "3"]));
        // line 102
        echo "</table>
</form>
</div>


";
        // line 107
        $this->loadTemplate("@__main__/pagetabsnippet.html.twig", "@__main__/discount_list.html.twig", 107)->display($context);
        // line 108
        echo "
<script type=\"text/javascript\">
if (parent.parent)
{   parent.parent.sShopTitle   = \"";
        // line 111
        echo addslashes(twig_get_attribute($this->env, $this->source, ($context["actshopobj"] ?? null), "oxshops__oxname", [], "any", false, false, false, 111));
        echo "\";
    parent.parent.sMenuItem    = \"";
        // line 112
        echo $this->extensions['OxidEsales\Twig\Extensions\TranslateExtension']->translate(["ident" => "DISCOUNT_LIST_MENUITEM"]);
        echo "\";
    parent.parent.sMenuSubItem = \"";
        // line 113
        echo $this->extensions['OxidEsales\Twig\Extensions\TranslateExtension']->translate(["ident" => "DISCOUNT_LIST_MENUSUBITEM"]);
        echo "\";
    parent.parent.sWorkArea    = \"";
        // line 114
        echo twig_escape_filter($this->env, ($context["_act"] ?? null), "html", null, true);
        echo "\";
    parent.parent.setTitle();
}
</script>
</body>
</html>
";
    }

    // line 28
    public function block_admin_discount_list_colgroup($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 29
        echo "        \t<col width=\"3%\">
        \t<col width=\"10%\">
            <col width=\"85%\">
            <col width=\"2%\">
        ";
    }

    // line 36
    public function block_admin_discount_list_filter($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 37
        echo "        \t<td valign=\"top\" class=\"listfilter first\" align=\"right\">
                <div class=\"r1\"><div class=\"b1\">&nbsp;</div></div>
        \t</td>
            <td valign=\"top\" class=\"listfilter\" height=\"20\" align=\"center\">
                <div class=\"r1\">
                    <div class=\"b1\">
                        <input class=\"listedit\" type=\"text\" size=\"5\" maxlength=\"128\" name=\"where[oxdiscount][oxsort]\"
                               value=\"";
        // line 44
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["where"] ?? null), "oxdiscount", [], "any", false, false, false, 44), "oxsort", [], "any", false, false, false, 44), "html", null, true);
        echo "\">
                    </div>
                </div>
            </td>
            <td valign=\"top\" class=\"listfilter\" height=\"20\" colspan=\"2\">
                <div class=\"r1\"><div class=\"b1\">
                <div class=\"find\">
                    <select name=\"changelang\" class=\"editinput\" onChange=\"Javascript:top.oxid.admin.changeLanguage();\">
                    ";
        // line 52
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["lang"]) {
            // line 53
            echo "                    <option value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["lang"], "id", [], "any", false, false, false, 53), "html", null, true);
            echo "\" ";
            if (twig_get_attribute($this->env, $this->source, $context["lang"], "selected", [], "any", false, false, false, 53)) {
                echo "SELECTED";
            }
            echo ">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["lang"], "name", [], "any", false, false, false, 53), "html", null, true);
            echo "</option>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['lang'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 55
        echo "                    </select>
                    <input class=\"listedit\" type=\"submit\" name=\"submitit\" value=\"";
        // line 56
        echo $this->extensions['OxidEsales\Twig\Extensions\TranslateExtension']->translate(["ident" => "GENERAL_SEARCH"]);
        echo "\">
                </div>
                <input class=\"listedit\" type=\"text\" size=\"50\" maxlength=\"128\" name=\"where[oxdiscount][oxtitle]\" value=\"";
        // line 58
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["where"] ?? null), "oxdiscount", [], "any", false, false, false, 58), "oxtitle", [], "any", false, false, false, 58), "html", null, true);
        echo "\">
                </div></div>
            </td>
        ";
    }

    // line 64
    public function block_admin_discount_list_sorting($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 65
        echo "        \t<td class=\"listheader first\" height=\"15\" width=\"30\" align=\"center\"><a href=\"Javascript:top.oxid.admin.setSorting( document.search, 'oxdiscount', 'oxactive', 'asc');document.search.submit();\" class=\"listheader\">";
        echo $this->extensions['OxidEsales\Twig\Extensions\TranslateExtension']->translate(["ident" => "GENERAL_ACTIVTITLE"]);
        echo "</a></td>
            <td class=\"listheader \" height=\"15\" align=\"center\"><div class=\"listitemfloating\"><a href=\"Javascript:top.oxid.admin.setSorting( document.search, 'oxdiscount', 'oxsort', 'asc');document.search.submit();\" class=\"listheader\"> ";
        // line 66
        echo $this->extensions['OxidEsales\Twig\Extensions\TranslateExtension']->translate(["ident" => "GENERAL_SORT"]);
        echo " </a></div></td>
            <td class=\"listheader\" height=\"15\" colspan=\"2\">&nbsp;<a href=\"Javascript:top.oxid.admin.setSorting( document.search, 'oxdiscount', 'oxtitle', 'asc');document.search.submit();\" class=\"listheader\">";
        // line 67
        echo $this->extensions['OxidEsales\Twig\Extensions\TranslateExtension']->translate(["ident" => "GENERAL_NAME"]);
        echo "</a></td>
        ";
    }

    // line 76
    public function block_admin_discount_list_item($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 77
        echo "            ";
        if ((twig_get_attribute($this->env, $this->source, ($context["listitem"] ?? null), "blacklist", [], "any", false, false, false, 77) == 1)) {
            // line 78
            echo "                ";
            $context["listclass"] = "listitem3";
            // line 79
            echo "            ";
        } else {
            // line 80
            echo "                ";
            $context["listclass"] = ("listitem" . ($context["blWhite"] ?? null));
            // line 81
            echo "            ";
        }
        // line 82
        echo "            ";
        if ((twig_get_attribute($this->env, $this->source, ($context["listitem"] ?? null), "getId", [], "method", false, false, false, 82) == ($context["oxid"] ?? null))) {
            // line 83
            echo "                ";
            $context["listclass"] = "listitem4";
            // line 84
            echo "            ";
        }
        // line 85
        echo "            <td valign=\"top\" class=\"";
        echo twig_escape_filter($this->env, ($context["listclass"] ?? null), "html", null, true);
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["listitem"] ?? null), "oxdiscount__oxactive", [], "any", false, false, false, 85), "value", [], "any", false, false, false, 85) == 1)) {
            echo " active";
        }
        echo "\" height=\"15\"><div class=\"listitemfloating\">&nbsp;</a></div></td>
            <td valign=\"top\" class=\"";
        // line 86
        echo twig_escape_filter($this->env, ($context["listclass"] ?? null), "html", null, true);
        echo "\" height=\"15\" align=\"center\"><div class=\"listitemfloating\">&nbsp;<a href=\"Javascript:top.oxid.admin.editThis('";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["listitem"] ?? null), "oxdiscount__oxid", [], "any", false, false, false, 86), "value", [], "any", false, false, false, 86), "html", null, true);
        echo "');\" class=\"";
        echo twig_escape_filter($this->env, ($context["listclass"] ?? null), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["listitem"] ?? null), "oxdiscount__oxsort", [], "any", false, false, false, 86), "value", [], "any", false, false, false, 86), "html", null, true);
        echo "</a></div></td>
            <td valign=\"top\" class=\"";
        // line 87
        echo twig_escape_filter($this->env, ($context["listclass"] ?? null), "html", null, true);
        echo "\" height=\"15\"><div class=\"listitemfloating\">&nbsp;<a href=\"Javascript:top.oxid.admin.editThis('";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["listitem"] ?? null), "oxdiscount__oxid", [], "any", false, false, false, 87), "value", [], "any", false, false, false, 87), "html", null, true);
        echo "');\" class=\"";
        echo twig_escape_filter($this->env, ($context["listclass"] ?? null), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["listitem"] ?? null), "oxdiscount__oxtitle", [], "any", false, false, false, 87), "value", [], "any", false, false, false, 87), "html", null, true);
        echo "</a></div></td>
            <td class=\"";
        // line 88
        echo twig_escape_filter($this->env, ($context["listclass"] ?? null), "html", null, true);
        echo "\">
            ";
        // line 89
        if ( !($context["readonly"] ?? null)) {
            // line 90
            echo "                ";
            $this->loadTemplate("@__main__/include/discount_list_item_actions.html.twig", "@__main__/discount_list.html.twig", 90)->display($context);
            // line 91
            echo "            ";
        }
        // line 92
        echo "            </td>
        ";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@__main__/discount_list.html.twig";
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
        return array (  367 => 92,  364 => 91,  361 => 90,  359 => 89,  355 => 88,  345 => 87,  335 => 86,  327 => 85,  324 => 84,  321 => 83,  318 => 82,  315 => 81,  312 => 80,  309 => 79,  306 => 78,  303 => 77,  299 => 76,  293 => 67,  289 => 66,  284 => 65,  280 => 64,  272 => 58,  267 => 56,  264 => 55,  249 => 53,  245 => 52,  234 => 44,  225 => 37,  221 => 36,  213 => 29,  209 => 28,  198 => 114,  194 => 113,  190 => 112,  186 => 111,  181 => 108,  179 => 107,  172 => 102,  170 => 101,  155 => 99,  152 => 98,  149 => 97,  146 => 96,  144 => 95,  141 => 94,  139 => 76,  134 => 75,  131 => 74,  114 => 73,  112 => 72,  110 => 71,  106 => 69,  104 => 64,  100 => 62,  98 => 36,  94 => 34,  92 => 28,  88 => 26,  86 => 25,  82 => 24,  74 => 18,  68 => 16,  66 => 15,  58 => 9,  54 => 7,  50 => 5,  48 => 4,  45 => 3,  43 => 2,  41 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@__main__/discount_list.html.twig", "/var/www/html/source/Application/views/admin_twig/tpl/discount_list.html.twig");
    }
}
