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

/* @__main__/vendor_list.html.twig */
class __TwigTemplate_f5db59500b32f073f32d256cbf689c1e extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'admin_vendor_list_colgroup' => [$this, 'block_admin_vendor_list_colgroup'],
            'admin_vendor_list_filter' => [$this, 'block_admin_vendor_list_filter'],
            'admin_vendor_list_sorting' => [$this, 'block_admin_vendor_list_sorting'],
            'admin_vendor_list_item' => [$this, 'block_admin_vendor_list_item'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        $this->loadTemplate("@__main__/headitem.html.twig", "@__main__/vendor_list.html.twig", 1)->display(twig_array_merge($context, ["title" => $this->extensions['OxidEsales\Twig\Extensions\Filters\TranslateExtension']->translate("VENDOR_LIST_TITLE"), "box" => "list"]));
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
        $this->loadTemplate("@__main__/_formparams.html.twig", "@__main__/vendor_list.html.twig", 25)->display(twig_array_merge($context, ["cl" => "vendor_list", "lstrt" => ($context["lstrt"] ?? null), "actedit" => ($context["actedit"] ?? null), "oxid" => ($context["oxid"] ?? null), "fnc" => "", "language" => ($context["actlang"] ?? null), "editlanguage" => ($context["actlang"] ?? null)]));
        // line 26
        echo "<table cellspacing=\"0\" cellpadding=\"0\" border=\"0\" width=\"100%\">
<colgroup>
    ";
        // line 28
        $this->displayBlock('admin_vendor_list_colgroup', $context, $blocks);
        // line 34
        echo "</colgroup>
<tr class=\"listitem\">
    ";
        // line 36
        $this->displayBlock('admin_vendor_list_filter', $context, $blocks);
        // line 61
        echo "</tr>
<tr>
    ";
        // line 63
        $this->displayBlock('admin_vendor_list_sorting', $context, $blocks);
        // line 68
        echo "</tr>

";
        // line 70
        $context["blWhite"] = "";
        // line 71
        $context["_cnt"] = 0;
        // line 72
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
            // line 73
            echo "    ";
            $context["_cnt"] = (($context["_cnt"] ?? null) + 1);
            // line 74
            echo "    <tr id=\"row.";
            echo twig_escape_filter($this->env, ($context["_cnt"] ?? null), "html", null, true);
            echo "\">
    ";
            // line 75
            $this->displayBlock('admin_vendor_list_item', $context, $blocks);
            // line 91
            echo "</tr>
";
            // line 92
            if ((($context["blWhite"] ?? null) == "2")) {
                // line 93
                $context["blWhite"] = "";
            } else {
                // line 95
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
        // line 98
        $this->loadTemplate("@__main__/pagenavisnippet.html.twig", "@__main__/vendor_list.html.twig", 98)->display(twig_array_merge($context, ["colspan" => "3"]));
        // line 99
        echo "</table>
</form>
</div>

";
        // line 103
        $this->loadTemplate("@__main__/pagetabsnippet.html.twig", "@__main__/vendor_list.html.twig", 103)->display($context);
        // line 104
        echo "
<script type=\"text/javascript\">
if (parent.parent)
{   parent.parent.sShopTitle   = \"";
        // line 107
        echo addslashes(twig_get_attribute($this->env, $this->source, ($context["actshopobj"] ?? null), "oxshops__oxname", [], "any", false, false, false, 107));
        echo "\";
    parent.parent.sMenuItem    = \"";
        // line 108
        echo $this->extensions['OxidEsales\Twig\Extensions\TranslateExtension']->translate(["ident" => "VENDOR_LIST_MENUITEM"]);
        echo "\";
    parent.parent.sMenuSubItem = \"";
        // line 109
        echo $this->extensions['OxidEsales\Twig\Extensions\TranslateExtension']->translate(["ident" => "VENDOR_LIST_MENUSUBITEM"]);
        echo "\";
    parent.parent.sWorkArea    = \"";
        // line 110
        echo twig_escape_filter($this->env, ($context["_act"] ?? null), "html", null, true);
        echo "\";
    parent.parent.setTitle();
}
</script>
</body>
</html>";
    }

    // line 28
    public function block_admin_vendor_list_colgroup($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 29
        echo "        <col width=\"3%\">
        <col width=\"40%\">
        <col width=\"56%\">
        <col width=\"1%\">
    ";
    }

    // line 36
    public function block_admin_vendor_list_filter($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 37
        echo "        <td valign=\"top\" class=\"listfilter first\">
            <div class=\"r1\"><div class=\"b1\">&nbsp;</div></div>
        </td>
        <td valign=\"top\" class=\"listfilter\">
            <div class=\"r1\"><div class=\"b1\">
            <input class=\"listedit\" type=\"text\" size=\"50\" maxlength=\"128\" name=\"where[oxvendor][oxtitle]\" value=\"";
        // line 42
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["where"] ?? null), "oxvendor", [], "any", false, false, false, 42), "oxtitle", [], "any", false, false, false, 42), "html", null, true);
        echo "\">
            </div></div>
        </td>
        <td valign=\"top\" class=\"listfilter\" height=\"20\" colspan=\"2\">
            <div class=\"r1\"><div class=\"b1\">

            <div class=\"find\">
                <select name=\"changelang\" class=\"editinput\" onChange=\"Javascript:top.oxid.admin.changeLanguage();\">
                ";
        // line 50
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["lang"]) {
            // line 51
            echo "                <option value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["lang"], "id", [], "any", false, false, false, 51), "html", null, true);
            echo "\" ";
            if (twig_get_attribute($this->env, $this->source, $context["lang"], "selected", [], "any", false, false, false, 51)) {
                echo "SELECTED";
            }
            echo ">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["lang"], "name", [], "any", false, false, false, 51), "html", null, true);
            echo "</option>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['lang'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 53
        echo "                </select>
                <input class=\"listedit\" type=\"submit\" name=\"submitit\" value=\"";
        // line 54
        echo $this->extensions['OxidEsales\Twig\Extensions\TranslateExtension']->translate(["ident" => "GENERAL_SEARCH"]);
        echo "\">
            </div>

            <input class=\"listedit\" type=\"text\" size=\"50\" maxlength=\"128\" name=\"where[oxvendor][oxshortdesc]\" value=\"";
        // line 57
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["where"] ?? null), "oxvendor", [], "any", false, false, false, 57), "oxshortdesc", [], "any", false, false, false, 57), "html", null, true);
        echo "\">
            </div></div>
        </td>
    ";
    }

    // line 63
    public function block_admin_vendor_list_sorting($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 64
        echo "        <td class=\"listheader first\" height=\"15\" width=\"30\" align=\"center\">&nbsp;<a href=\"Javascript:top.oxid.admin.setSorting( document.search, 'oxvendor', 'oxactive', 'asc');document.search.submit();\" class=\"listheader\">";
        echo $this->extensions['OxidEsales\Twig\Extensions\TranslateExtension']->translate(["ident" => "GENERAL_ACTIVTITLE"]);
        echo "</a></td>
        <td class=\"listheader\" height=\"15\">&nbsp;<a href=\"Javascript:top.oxid.admin.setSorting( document.search, 'oxvendor', 'oxtitle', 'asc');document.search.submit();\" class=\"listheader\">";
        // line 65
        echo $this->extensions['OxidEsales\Twig\Extensions\TranslateExtension']->translate(["ident" => "GENERAL_TITLE"]);
        echo "</a></td>
        <td class=\"listheader\" height=\"15\" colspan=\"2\"><a href=\"Javascript:top.oxid.admin.setSorting( document.search, 'oxvendor', 'oxshortdesc', 'asc');document.search.submit();\" class=\"listheader\">";
        // line 66
        echo $this->extensions['OxidEsales\Twig\Extensions\TranslateExtension']->translate(["ident" => "GENERAL_SHORTDESC"]);
        echo "</a></td>
    ";
    }

    // line 75
    public function block_admin_vendor_list_item($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 76
        echo "        ";
        if ((twig_get_attribute($this->env, $this->source, ($context["listitem"] ?? null), "blacklist", [], "any", false, false, false, 76) == 1)) {
            // line 77
            echo "            ";
            $context["listclass"] = "listitem3";
            // line 78
            echo "        ";
        } else {
            // line 79
            echo "            ";
            $context["listclass"] = ("listitem" . ($context["blWhite"] ?? null));
            // line 80
            echo "        ";
        }
        // line 81
        echo "        ";
        if ((twig_get_attribute($this->env, $this->source, ($context["listitem"] ?? null), "getId", [], "method", false, false, false, 81) == ($context["oxid"] ?? null))) {
            // line 82
            echo "            ";
            $context["listclass"] = "listitem4";
            // line 83
            echo "        ";
        }
        // line 84
        echo "        <td valign=\"top\" class=\"";
        echo twig_escape_filter($this->env, ($context["listclass"] ?? null), "html", null, true);
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["listitem"] ?? null), "oxvendor__oxactive", [], "any", false, false, false, 84), "value", [], "any", false, false, false, 84) == 1)) {
            echo " active";
        }
        echo "\" height=\"15\"><div class=\"listitemfloating\">&nbsp;</div></td>
        <td valign=\"top\" class=\"";
        // line 85
        echo twig_escape_filter($this->env, ($context["listclass"] ?? null), "html", null, true);
        echo "\" height=\"15\"><div class=\"listitemfloating\">&nbsp;<a href=\"Javascript:top.oxid.admin.editThis('";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["listitem"] ?? null), "oxvendor__oxid", [], "any", false, false, false, 85), "value", [], "any", false, false, false, 85), "html", null, true);
        echo "');\" class=\"";
        echo twig_escape_filter($this->env, ($context["listclass"] ?? null), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["listitem"] ?? null), "oxvendor__oxtitle", [], "any", false, false, false, 85), "value", [], "any", false, false, false, 85), "html", null, true);
        echo "</a></div></td>
        <td valign=\"top\" class=\"";
        // line 86
        echo twig_escape_filter($this->env, ($context["listclass"] ?? null), "html", null, true);
        echo "\" height=\"15\"><div class=\"listitemfloating\"><a href=\"Javascript:top.oxid.admin.editThis('";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["listitem"] ?? null), "oxvendor__oxid", [], "any", false, false, false, 86), "value", [], "any", false, false, false, 86), "html", null, true);
        echo "');\" class=\"";
        echo twig_escape_filter($this->env, ($context["listclass"] ?? null), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["listitem"] ?? null), "oxvendor__oxshortdesc", [], "any", false, false, false, 86), "value", [], "any", false, false, false, 86), "html", null, true);
        echo "</a></div></td>
        <td class=\"";
        // line 87
        echo twig_escape_filter($this->env, ($context["listclass"] ?? null), "html", null, true);
        echo "\" align=\"right\">
            ";
        // line 88
        $this->loadTemplate("@__main__/include/vendor_list_actions.html.twig", "@__main__/vendor_list.html.twig", 88)->display($context);
        // line 89
        echo "        </td>
    ";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@__main__/vendor_list.html.twig";
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
        return array (  352 => 89,  350 => 88,  346 => 87,  336 => 86,  326 => 85,  318 => 84,  315 => 83,  312 => 82,  309 => 81,  306 => 80,  303 => 79,  300 => 78,  297 => 77,  294 => 76,  290 => 75,  284 => 66,  280 => 65,  275 => 64,  271 => 63,  263 => 57,  257 => 54,  254 => 53,  239 => 51,  235 => 50,  224 => 42,  217 => 37,  213 => 36,  205 => 29,  201 => 28,  191 => 110,  187 => 109,  183 => 108,  179 => 107,  174 => 104,  172 => 103,  166 => 99,  164 => 98,  149 => 95,  146 => 93,  144 => 92,  141 => 91,  139 => 75,  134 => 74,  131 => 73,  114 => 72,  112 => 71,  110 => 70,  106 => 68,  104 => 63,  100 => 61,  98 => 36,  94 => 34,  92 => 28,  88 => 26,  86 => 25,  82 => 24,  74 => 18,  68 => 16,  66 => 15,  58 => 9,  54 => 7,  50 => 5,  48 => 4,  45 => 3,  43 => 2,  41 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@__main__/vendor_list.html.twig", "/var/www/html/source/Application/views/admin_twig/tpl/vendor_list.html.twig");
    }
}
