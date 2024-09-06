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

/* @__main__/voucherserie_list.html.twig */
class __TwigTemplate_a2259d78d1cacf3428f47cc8468d1408 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'admin_voucherserie_list_colgroup' => [$this, 'block_admin_voucherserie_list_colgroup'],
            'admin_voucherserie_list_filter' => [$this, 'block_admin_voucherserie_list_filter'],
            'admin_voucherserie_list_sorting' => [$this, 'block_admin_voucherserie_list_sorting'],
            'admin_voucherserie_list_item' => [$this, 'block_admin_voucherserie_list_item'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        $this->loadTemplate("@__main__/headitem.html.twig", "@__main__/voucherserie_list.html.twig", 1)->display(twig_array_merge($context, ["title" => $this->extensions['OxidEsales\Twig\Extensions\Filters\TranslateExtension']->translate("GENERAL_ADMIN_TITLE"), "box" => "list"]));
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
        $this->loadTemplate("@__main__/_formparams.html.twig", "@__main__/voucherserie_list.html.twig", 25)->display(twig_array_merge($context, ["cl" => "voucherserie_list", "lstrt" => ($context["lstrt"] ?? null), "actedit" => ($context["actedit"] ?? null), "oxid" => ($context["oxid"] ?? null), "fnc" => "", "language" => ($context["actlang"] ?? null), "editlanguage" => ($context["actlang"] ?? null)]));
        // line 26
        echo "<table cellspacing=\"0\" cellpadding=\"0\" border=\"0\" width=\"100%\">
    <colgroup>
        ";
        // line 28
        $this->displayBlock('admin_voucherserie_list_colgroup', $context, $blocks);
        // line 37
        echo "    </colgroup>
    <tr class=\"listitem\">
    ";
        // line 39
        $this->displayBlock('admin_voucherserie_list_filter', $context, $blocks);
        // line 70
        echo "</tr>

<tr>
    ";
        // line 73
        $this->displayBlock('admin_voucherserie_list_sorting', $context, $blocks);
        // line 81
        echo "</tr>
";
        // line 82
        $context["blWhite"] = "";
        // line 83
        $context["_cnt"] = 0;
        // line 84
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
            // line 85
            echo "    ";
            $context["_cnt"] = (($context["_cnt"] ?? null) + 1);
            // line 86
            echo "    <tr id=\"row.";
            echo twig_escape_filter($this->env, ($context["_cnt"] ?? null), "html", null, true);
            echo "\">
    ";
            // line 87
            $this->displayBlock('admin_voucherserie_list_item', $context, $blocks);
            // line 106
            echo "</tr>
";
            // line 107
            $context["blWhite"] = "2";
            // line 108
            if ((($context["blWhite"] ?? null) == "2")) {
                // line 109
                echo "    ";
                $context["blWhite"] = "";
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
        // line 112
        $this->loadTemplate("@__main__/pagenavisnippet.html.twig", "@__main__/voucherserie_list.html.twig", 112)->display(twig_array_merge($context, ["colspan" => "7"]));
        // line 113
        echo "</table>
</form>
</div>

";
        // line 117
        $this->loadTemplate("@__main__/pagetabsnippet.html.twig", "@__main__/voucherserie_list.html.twig", 117)->display($context);
        // line 118
        echo "
<script type=\"text/javascript\">
if (parent.parent) {
    parent.parent.sShopTitle   = \"";
        // line 121
        echo addslashes(twig_get_attribute($this->env, $this->source, ($context["actshopobj"] ?? null), "oxshops__oxname", [], "any", false, false, false, 121));
        echo "\";
    parent.parent.sMenuItem    = \"";
        // line 122
        echo $this->extensions['OxidEsales\Twig\Extensions\TranslateExtension']->translate(["ident" => "VOUCHERSERIE_LIST_MENUITEM"]);
        echo "\";
    parent.parent.sMenuSubItem = \"";
        // line 123
        echo $this->extensions['OxidEsales\Twig\Extensions\TranslateExtension']->translate(["ident" => "VOUCHERSERIE_LIST_MENUSUBITEM"]);
        echo "\";
    parent.parent.sWorkArea    = \"";
        // line 124
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
    public function block_admin_voucherserie_list_colgroup($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 29
        echo "        \t<col width=\"3%\">
            <col width=\"36%\">
            <col width=\"15%\">
            <col width=\"15%\">
            <col width=\"15%\">
            <col width=\"15%\">
            <col width=\"1%\">
        ";
    }

    // line 39
    public function block_admin_voucherserie_list_filter($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 40
        echo "    \t<td valign=\"top\" class=\"listfilter first\" align=\"right\">
\t\t\t<div class=\"r1\"><div class=\"b1\">&nbsp;</div></div>
        </td>
        <td valign=\"top\" class=\"listfilter\" height=\"20\">
            <div class=\"r1\"><div class=\"b1\">
            <input class=\"listedit\" type=\"text\" size=\"30\" maxlength=\"128\" name=\"where[oxvoucherseries][oxserienr]\" value=\"";
        // line 45
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["where"] ?? null), "oxvoucherseries", [], "any", false, false, false, 45), "oxserienr", [], "any", false, false, false, 45), "html", null, true);
        echo "\" ";
        echo twig_escape_filter($this->env, ($context["readonly"] ?? null), "html", null, true);
        echo ">
            </div></div>
        </td>
        <td valign=\"top\" class=\"listfilter\">
            <div class=\"r1\"><div class=\"b1\">
            <input class=\"listedit\" type=\"text\" size=\"15\" maxlength=\"128\" name=\"where[oxvoucherseries][oxdiscount]\" value=\"";
        // line 50
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["where"] ?? null), "oxvoucherseries", [], "any", false, false, false, 50), "oxdiscount", [], "any", false, false, false, 50), "html", null, true);
        echo "\" ";
        echo twig_escape_filter($this->env, ($context["readonly"] ?? null), "html", null, true);
        echo ">
            </div></div>
        </td>
        <td valign=\"top\" class=\"listfilter\">
            <div class=\"r1\"><div class=\"b1\">
            <input class=\"listedit\" type=\"text\" size=\"15\" maxlength=\"128\" name=\"where[oxvoucherseries][oxbegindate]\" value=\"";
        // line 55
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["where"] ?? null), "oxvoucherseries", [], "any", false, false, false, 55), "oxbegindate", [], "any", false, false, false, 55), "html", null, true);
        echo "\" ";
        echo twig_escape_filter($this->env, ($context["readonly"] ?? null), "html", null, true);
        echo ">
            </div></div>
        </td>
        <td valign=\"top\" class=\"listfilter\">
            <div class=\"r1\"><div class=\"b1\">
            <input class=\"listedit\" type=\"text\" size=\"15\" maxlength=\"128\" name=\"where[oxvoucherseries][oxenddate]\" value=\"";
        // line 60
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["where"] ?? null), "oxvoucherseries", [], "any", false, false, false, 60), "oxenddate", [], "any", false, false, false, 60), "html", null, true);
        echo "\" ";
        echo twig_escape_filter($this->env, ($context["readonly"] ?? null), "html", null, true);
        echo ">
            </div></div>
        </td>
        <td valign=\"top\" class=\"listfilter\" colspan=\"2\">
            <div class=\"r1\"><div class=\"b1\">
            <div class=\"find\"><input class=\"listedit\" type=\"submit\" name=\"submitit\" value=\"";
        // line 65
        echo $this->extensions['OxidEsales\Twig\Extensions\TranslateExtension']->translate(["ident" => "GENERAL_SEARCH"]);
        echo "\" ";
        echo twig_escape_filter($this->env, ($context["readonly"] ?? null), "html", null, true);
        echo "></div>
            <input class=\"listedit\" type=\"text\" size=\"15\" maxlength=\"128\" name=\"where[oxvoucherseries][oxminimumvalue]\" value=\"";
        // line 66
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["where"] ?? null), "oxvoucherseries", [], "any", false, false, false, 66), "oxminimumvalue", [], "any", false, false, false, 66), "html", null, true);
        echo "\" ";
        echo twig_escape_filter($this->env, ($context["readonly"] ?? null), "html", null, true);
        echo ">
            </div></div>
        </td>
    ";
    }

    // line 73
    public function block_admin_voucherserie_list_sorting($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 74
        echo "    \t<td class=\"listheader first\" height=\"15\" width=\"30\" align=\"center\"><a href=\"javascript:void(0)\" class=\"listheader\">";
        echo $this->extensions['OxidEsales\Twig\Extensions\TranslateExtension']->translate(["ident" => "GENERAL_ACTIVTITLE"]);
        echo "</a></td>
        <td class=\"listheader\" height=\"15\">&nbsp;<a href=\"Javascript:top.oxid.admin.setSorting( document.search, 'oxvoucherseries', 'oxserienr', 'asc');document.search.submit();\" class=\"listheader\">";
        // line 75
        echo $this->extensions['OxidEsales\Twig\Extensions\TranslateExtension']->translate(["ident" => "VOUCHERSERIE_LIST_SERIALNUM"]);
        echo "</a></td>
        <td class=\"listheader\"><a href=\"Javascript:top.oxid.admin.setSorting( document.search, 'oxvoucherseries', 'oxdiscount', 'asc');document.search.submit();\" class=\"listheader\">";
        // line 76
        echo $this->extensions['OxidEsales\Twig\Extensions\TranslateExtension']->translate(["ident" => "GENERAL_DISCOUNT"]);
        echo "</a></td>
        <td class=\"listheader\"><a href=\"Javascript:top.oxid.admin.setSorting( document.search, 'oxvoucherseries', 'oxbegindate', 'asc');document.search.submit();\" class=\"listheader\">";
        // line 77
        echo $this->extensions['OxidEsales\Twig\Extensions\TranslateExtension']->translate(["ident" => "GENERAL_BEGINDATE"]);
        echo "</a></td>
        <td class=\"listheader\"><a href=\"Javascript:top.oxid.admin.setSorting( document.search, 'oxvoucherseries', 'oxenddate', 'asc');document.search.submit();\" class=\"listheader\">";
        // line 78
        echo $this->extensions['OxidEsales\Twig\Extensions\TranslateExtension']->translate(["ident" => "GENERAL_ENDDATE"]);
        echo "</a></td>
        <td class=\"listheader\" colspan=\"2\"><a href=\"Javascript:top.oxid.admin.setSorting( document.search, 'oxvoucherseries', 'oxminimumvalue', 'asc');document.search.submit();\" class=\"listheader\">";
        // line 79
        echo $this->extensions['OxidEsales\Twig\Extensions\TranslateExtension']->translate(["ident" => "VOUCHERSERIE_LIST_MINVALUE"]);
        echo "</a></td>
    ";
    }

    // line 87
    public function block_admin_voucherserie_list_item($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 88
        echo "        ";
        if ((twig_get_attribute($this->env, $this->source, ($context["listitem"] ?? null), "blacklist", [], "any", false, false, false, 88) == 1)) {
            // line 89
            echo "            ";
            $context["listclass"] = "listitem3";
            // line 90
            echo "        ";
        } else {
            // line 91
            echo "            ";
            $context["listclass"] = ("listitem" . ($context["blWhite"] ?? null));
            // line 92
            echo "        ";
        }
        // line 93
        echo "        ";
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["listitem"] ?? null), "oxvoucherseries__oxid", [], "any", false, false, false, 93), "value", [], "any", false, false, false, 93) == ($context["oxid"] ?? null))) {
            // line 94
            echo "            ";
            $context["listclass"] = "listitem4";
            // line 95
            echo "        ";
        }
        // line 96
        echo "       \t<td valign=\"top\" class=\"";
        echo twig_escape_filter($this->env, ($context["listclass"] ?? null), "html", null, true);
        if ((twig_get_attribute($this->env, $this->source, ($context["listitem"] ?? null), "getVoucherStatusByDatetime", [], "method", false, false, false, 96) == 1)) {
            echo " active";
        }
        echo "\" height=\"15\"><div class=\"listitemfloating\">&nbsp</a></div></td>
        <td valign=\"top\" class=\"";
        // line 97
        echo twig_escape_filter($this->env, ($context["listclass"] ?? null), "html", null, true);
        echo "\" height=\"15\"><div class=\"listitemfloating\">&nbsp;<a href=\"Javascript:top.oxid.admin.editThis('";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["listitem"] ?? null), "oxvoucherseries__oxid", [], "any", false, false, false, 97), "value", [], "any", false, false, false, 97), "html", null, true);
        echo "');\" class=\"";
        echo twig_escape_filter($this->env, ($context["listclass"] ?? null), "html", null, true);
        echo "\">";
        if ( !twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["listitem"] ?? null), "oxvoucherseries__oxserienr", [], "any", false, false, false, 97), "value", [], "any", false, false, false, 97)) {
            echo "-";
            echo $this->extensions['OxidEsales\Twig\Extensions\TranslateExtension']->translate(["ident" => "GENERAL_NONAME"]);
            echo "-";
        } else {
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["listitem"] ?? null), "oxvoucherseries__oxserienr", [], "any", false, false, false, 97), "value", [], "any", false, false, false, 97), "html", null, true);
        }
        echo "</a></div></td>
        <td valign=\"top\" class=\"";
        // line 98
        echo twig_escape_filter($this->env, ($context["listclass"] ?? null), "html", null, true);
        echo "\"><div class=\"listitemfloating\"><a href=\"Javascript:top.oxid.admin.editThis('";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["listitem"] ?? null), "oxvoucherseries__oxid", [], "any", false, false, false, 98), "value", [], "any", false, false, false, 98), "html", null, true);
        echo "');\" class=\"";
        echo twig_escape_filter($this->env, ($context["listclass"] ?? null), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["listitem"] ?? null), "oxvoucherseries__oxdiscount", [], "any", false, false, false, 98), "value", [], "any", false, false, false, 98), "html", null, true);
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["listitem"] ?? null), "oxvoucherseries__oxdiscounttype", [], "any", false, false, false, 98), "value", [], "any", false, false, false, 98) == "percent")) {
            echo " %";
        }
        echo "</a></div></td>
        <td valign=\"top\" class=\"";
        // line 99
        echo twig_escape_filter($this->env, ($context["listclass"] ?? null), "html", null, true);
        echo "\"><div class=\"listitemfloating\"><a href=\"Javascript:top.oxid.admin.editThis('";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["listitem"] ?? null), "oxvoucherseries__oxid", [], "any", false, false, false, 99), "value", [], "any", false, false, false, 99), "html", null, true);
        echo "');\" class=\"";
        echo twig_escape_filter($this->env, ($context["listclass"] ?? null), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["listitem"] ?? null), "oxvoucherseries__oxbegindate", [], "any", false, false, false, 99), "value", [], "any", false, false, false, 99), "html", null, true);
        echo "</a></div></td>
        <td valign=\"top\" class=\"";
        // line 100
        echo twig_escape_filter($this->env, ($context["listclass"] ?? null), "html", null, true);
        echo "\"><div class=\"listitemfloating\"><a href=\"Javascript:top.oxid.admin.editThis('";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["listitem"] ?? null), "oxvoucherseries__oxid", [], "any", false, false, false, 100), "value", [], "any", false, false, false, 100), "html", null, true);
        echo "');\" class=\"";
        echo twig_escape_filter($this->env, ($context["listclass"] ?? null), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["listitem"] ?? null), "oxvoucherseries__oxenddate", [], "any", false, false, false, 100), "value", [], "any", false, false, false, 100), "html", null, true);
        echo "</a></div></td>
        <td valign=\"top\" class=\"";
        // line 101
        echo twig_escape_filter($this->env, ($context["listclass"] ?? null), "html", null, true);
        echo "\"><div class=\"listitemfloating\"><a href=\"Javascript:top.oxid.admin.editThis('";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["listitem"] ?? null), "oxvoucherseries__oxid", [], "any", false, false, false, 101), "value", [], "any", false, false, false, 101), "html", null, true);
        echo "');\" class=\"";
        echo twig_escape_filter($this->env, ($context["listclass"] ?? null), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["listitem"] ?? null), "oxvoucherseries__oxminimumvalue", [], "any", false, false, false, 101), "value", [], "any", false, false, false, 101), "html", null, true);
        echo "</a></div></td>
        <td class=\"";
        // line 102
        echo twig_escape_filter($this->env, ($context["listclass"] ?? null), "html", null, true);
        echo "\">
            ";
        // line 103
        $this->loadTemplate("@__main__/include/voucherserie_list_actions.html.twig", "@__main__/voucherserie_list.html.twig", 103)->display($context);
        // line 104
        echo "        </td>
    ";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@__main__/voucherserie_list.html.twig";
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
        return array (  416 => 104,  414 => 103,  410 => 102,  400 => 101,  390 => 100,  380 => 99,  367 => 98,  351 => 97,  343 => 96,  340 => 95,  337 => 94,  334 => 93,  331 => 92,  328 => 91,  325 => 90,  322 => 89,  319 => 88,  315 => 87,  309 => 79,  305 => 78,  301 => 77,  297 => 76,  293 => 75,  288 => 74,  284 => 73,  274 => 66,  268 => 65,  258 => 60,  248 => 55,  238 => 50,  228 => 45,  221 => 40,  217 => 39,  206 => 29,  202 => 28,  191 => 124,  187 => 123,  183 => 122,  179 => 121,  174 => 118,  172 => 117,  166 => 113,  164 => 112,  148 => 109,  146 => 108,  144 => 107,  141 => 106,  139 => 87,  134 => 86,  131 => 85,  114 => 84,  112 => 83,  110 => 82,  107 => 81,  105 => 73,  100 => 70,  98 => 39,  94 => 37,  92 => 28,  88 => 26,  86 => 25,  82 => 24,  74 => 18,  68 => 16,  66 => 15,  58 => 9,  54 => 7,  50 => 5,  48 => 4,  45 => 3,  43 => 2,  41 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@__main__/voucherserie_list.html.twig", "/var/www/html/source/Application/views/admin_twig/tpl/voucherserie_list.html.twig");
    }
}
