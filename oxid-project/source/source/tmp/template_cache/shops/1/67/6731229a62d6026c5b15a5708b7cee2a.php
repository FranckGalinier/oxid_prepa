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

/* @__main__/language_list.html.twig */
class __TwigTemplate_fe30e65af029dab0d9b5c56bf93957dd extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'admin_language_list_colgroup' => [$this, 'block_admin_language_list_colgroup'],
            'admin_language_list_filter' => [$this, 'block_admin_language_list_filter'],
            'admin_language_list_sorting' => [$this, 'block_admin_language_list_sorting'],
            'admin_language_list_item' => [$this, 'block_admin_language_list_item'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        $this->loadTemplate("@__main__/headitem.html.twig", "@__main__/language_list.html.twig", 1)->display(twig_array_merge($context, ["title" => $this->extensions['OxidEsales\Twig\Extensions\Filters\TranslateExtension']->translate("GENERAL_ADMIN_TITLE"), "box" => "list"]));
        // line 2
        echo "
";
        // line 3
        if (($context["readonly"] ?? null)) {
            // line 4
            echo "    ";
            $context["readonly"] = "readonly disabled";
        } else {
            // line 6
            echo "    ";
            $context["readonly"] = "";
        }
        // line 8
        echo "
<script type=\"text/javascript\">
<!--
window.onload = function ()
{
    top.reloadEditFrame();
    ";
        // line 14
        if ((($context["updatelist"] ?? null) == 1)) {
            // line 15
            echo "        top.oxid.admin.updateList('";
            echo twig_escape_filter($this->env, ($context["oxid"] ?? null), "html", null, true);
            echo "');
    ";
        }
        // line 17
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
        $this->loadTemplate("@__main__/_formparams.html.twig", "@__main__/language_list.html.twig", 25)->display(twig_array_merge($context, ["cl" => "language_list", "lstrt" => ($context["lstrt"] ?? null), "actedit" => ($context["actedit"] ?? null), "oxid" => ($context["oxid"] ?? null), "fnc" => "", "language" => ($context["actlang"] ?? null), "editlanguage" => ($context["actlang"] ?? null)]));
        // line 26
        echo "<table cellspacing=\"0\" cellpadding=\"0\" border=\"0\" width=\"100%\">
    <colgroup>
        ";
        // line 28
        $this->displayBlock('admin_language_list_colgroup', $context, $blocks);
        // line 34
        echo "    </colgroup>
    <tr class=\"listitem\">
        ";
        // line 36
        $this->displayBlock('admin_language_list_filter', $context, $blocks);
        // line 50
        echo "    </tr>

    <tr>
        ";
        // line 53
        $this->displayBlock('admin_language_list_sorting', $context, $blocks);
        // line 58
        echo "    </tr>

";
        // line 60
        $context["blWhite"] = "";
        // line 61
        $context["_cnt"] = 0;
        // line 62
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
            // line 63
            echo "    ";
            $context["_cnt"] = (($context["_cnt"] ?? null) + 1);
            // line 64
            echo "    <tr id=\"row.";
            echo twig_escape_filter($this->env, ($context["_cnt"] ?? null), "html", null, true);
            echo "\">
        ";
            // line 65
            $this->displayBlock('admin_language_list_item', $context, $blocks);
            // line 85
            echo "    </tr>
";
            // line 86
            if ((($context["blWhite"] ?? null) == "2")) {
                // line 87
                $context["blWhite"] = "";
            } else {
                // line 89
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
        // line 92
        $this->loadTemplate("@__main__/pagenavisnippet.html.twig", "@__main__/language_list.html.twig", 92)->display(twig_array_merge($context, ["colspan" => "5"]));
        // line 93
        echo "</table>
</form>
</div>


";
        // line 98
        $this->loadTemplate("@__main__/pagetabsnippet.html.twig", "@__main__/language_list.html.twig", 98)->display($context);
        // line 99
        echo "
<script type=\"text/javascript\">
if (parent.parent)
{   parent.parent.sShopTitle   = \"";
        // line 102
        echo addslashes(twig_get_attribute($this->env, $this->source, ($context["actshopobj"] ?? null), "oxshops__oxname", [], "any", false, false, false, 102));
        echo "\";
    parent.parent.sMenuItem    = \"";
        // line 103
        echo $this->extensions['OxidEsales\Twig\Extensions\TranslateExtension']->translate(["ident" => "LANGUAGE_LIST_MENUITEM"]);
        echo "\";
    parent.parent.sMenuSubItem = \"";
        // line 104
        echo $this->extensions['OxidEsales\Twig\Extensions\TranslateExtension']->translate(["ident" => "LANGUAGE_LIST_MENUSUBITEM"]);
        echo "\";
    parent.parent.sWorkArea    = \"";
        // line 105
        echo twig_escape_filter($this->env, ($context["_act"] ?? null), "html", null, true);
        echo "\";
    parent.parent.setTitle();
}
</script>
</body>
</html>";
    }

    // line 28
    public function block_admin_language_list_colgroup($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 29
        echo "            <col width=\"4%\">
            <col width=\"5%\">
            <col width=\"90%\">
            <col width=\"1%\">
        ";
    }

    // line 36
    public function block_admin_language_list_filter($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 37
        echo "            <td valign=\"top\" class=\"listfilter first\" align=\"center\">
                <div class=\"r1\"><div class=\"b1\">
                </div></div>
            </td>
            <td valign=\"top\" class=\"listfilter\">
                <div class=\"r1\"><div class=\"b1\">
                </div></div>
            </td>
            <td valign=\"top\" class=\"listfilter\" colspan=\"2\">
                <div class=\"r1\"><div class=\"b1\">
                </div></div>
            </td>
       ";
    }

    // line 53
    public function block_admin_language_list_sorting($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 54
        echo "            <td class=\"listheader first\" height=\"15\" align=\"center\"><a href=\"Javascript:top.oxid.admin.setSorting( document.forms.search, '', 'active', 'asc');document.search.submit();\" class=\"listheader\">";
        echo $this->extensions['OxidEsales\Twig\Extensions\TranslateExtension']->translate(["ident" => "GENERAL_ARTICLE_OXACTIVE"]);
        echo "</a></td>
            <td class=\"listheader\" height=\"15\"><a href=\"Javascript:top.oxid.admin.setSorting( document.forms.search, '', 'abbr', 'asc');document.search.submit();\" class=\"listheader\">";
        // line 55
        echo $this->extensions['OxidEsales\Twig\Extensions\TranslateExtension']->translate(["ident" => "LANGUAGE_ABBERVATION"]);
        echo "</a></td>
            <td class=\"listheader\" height=\"15\" colspan=\"2\"><a href=\"Javascript:top.oxid.admin.setSorting( document.forms.search, '', 'name', 'asc');document.search.submit();\" class=\"listheader\">";
        // line 56
        echo $this->extensions['OxidEsales\Twig\Extensions\TranslateExtension']->translate(["ident" => "GENERAL_LANGUAGE_NAME"]);
        echo "</a></td>
        ";
    }

    // line 65
    public function block_admin_language_list_item($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 66
        echo "            ";
        if ((twig_get_attribute($this->env, $this->source, ($context["listitem"] ?? null), "blacklist", [], "any", false, false, false, 66) == 1)) {
            // line 67
            echo "                ";
            $context["listclass"] = "listitem3";
            // line 68
            echo "            ";
        } else {
            // line 69
            echo "                ";
            $context["listclass"] = ("listitem" . ($context["blWhite"] ?? null));
            // line 70
            echo "            ";
        }
        // line 71
        echo "            ";
        if ((twig_get_attribute($this->env, $this->source, ($context["listitem"] ?? null), "oxid", [], "any", false, false, false, 71) == ($context["oxid"] ?? null))) {
            // line 72
            echo "                ";
            $context["listclass"] = "listitem4";
            // line 73
            echo "            ";
        }
        // line 74
        echo "            <td valign=\"top\" class=\"";
        echo twig_escape_filter($this->env, ($context["listclass"] ?? null), "html", null, true);
        if ((twig_get_attribute($this->env, $this->source, ($context["listitem"] ?? null), "active", [], "any", false, false, false, 74) == 1)) {
            echo " active";
        }
        echo "\" height=\"15\"><div class=\"listitemfloating\">&nbsp;<a href=\"Javascript:top.oxid.admin.editThis('";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["listitem"] ?? null), "oxid", [], "any", false, false, false, 74), "html", null, true);
        echo "');\" class=\"";
        echo twig_escape_filter($this->env, ($context["listclass"] ?? null), "html", null, true);
        echo "\">
             &nbsp;
            </a></div></td>
            <td valign=\"top\" class=\"";
        // line 77
        echo twig_escape_filter($this->env, ($context["listclass"] ?? null), "html", null, true);
        echo "\" height=\"15\"><div class=\"listitemfloating\"><a href=\"Javascript:top.oxid.admin.editThis('";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["listitem"] ?? null), "oxid", [], "any", false, false, false, 77), "html", null, true);
        echo "');\" class=\"";
        echo twig_escape_filter($this->env, ($context["listclass"] ?? null), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["listitem"] ?? null), "abbr", [], "any", false, false, false, 77), "html", null, true);
        echo "</a></div></td>
            <td valign=\"top\" class=\"";
        // line 78
        echo twig_escape_filter($this->env, ($context["listclass"] ?? null), "html", null, true);
        echo "\" height=\"15\"><div class=\"listitemfloating\"><a href=\"Javascript:top.oxid.admin.editThis('";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["listitem"] ?? null), "oxid", [], "any", false, false, false, 78), "html", null, true);
        echo "');\" class=\"";
        echo twig_escape_filter($this->env, ($context["listclass"] ?? null), "html", null, true);
        echo "\">";
        if (twig_get_attribute($this->env, $this->source, ($context["listitem"] ?? null), "default", [], "any", false, false, false, 78)) {
            echo "<b>";
        }
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["listitem"] ?? null), "name", [], "any", false, false, false, 78), "html", null, true);
        if (twig_get_attribute($this->env, $this->source, ($context["listitem"] ?? null), "default", [], "any", false, false, false, 78)) {
            echo "</b>";
        }
        echo "</a></div></td>
            <td align=\"right\" class=\"";
        // line 79
        echo twig_escape_filter($this->env, ($context["listclass"] ?? null), "html", null, true);
        echo "\">
            ";
        // line 80
        if (( !($context["readonly"] ?? null) &&  !twig_get_attribute($this->env, $this->source, ($context["listitem"] ?? null), "default", [], "any", false, false, false, 80))) {
            // line 81
            echo "            <a href=\"Javascript:top.oxid.admin.deleteThis('";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["listitem"] ?? null), "oxid", [], "any", false, false, false, 81), "html", null, true);
            echo "');\" class=\"delete\" id=\"del.";
            echo twig_escape_filter($this->env, ($context["_cnt"] ?? null), "html", null, true);
            echo "\" title=\"\" ";
            $this->loadTemplate("@__main__/help.html.twig", "@__main__/language_list.html.twig", 81)->display(twig_array_merge($context, ["helpid" => "item_delete"]));
            echo "></a>
            ";
        }
        // line 83
        echo "            </td>
        ";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@__main__/language_list.html.twig";
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
        return array (  337 => 83,  327 => 81,  325 => 80,  321 => 79,  305 => 78,  295 => 77,  281 => 74,  278 => 73,  275 => 72,  272 => 71,  269 => 70,  266 => 69,  263 => 68,  260 => 67,  257 => 66,  253 => 65,  247 => 56,  243 => 55,  238 => 54,  234 => 53,  218 => 37,  214 => 36,  206 => 29,  202 => 28,  192 => 105,  188 => 104,  184 => 103,  180 => 102,  175 => 99,  173 => 98,  166 => 93,  164 => 92,  149 => 89,  146 => 87,  144 => 86,  141 => 85,  139 => 65,  134 => 64,  131 => 63,  114 => 62,  112 => 61,  110 => 60,  106 => 58,  104 => 53,  99 => 50,  97 => 36,  93 => 34,  91 => 28,  87 => 26,  85 => 25,  81 => 24,  72 => 17,  66 => 15,  64 => 14,  56 => 8,  52 => 6,  48 => 4,  46 => 3,  43 => 2,  41 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@__main__/language_list.html.twig", "/var/www/html/source/Application/views/admin_twig/tpl/language_list.html.twig");
    }
}
