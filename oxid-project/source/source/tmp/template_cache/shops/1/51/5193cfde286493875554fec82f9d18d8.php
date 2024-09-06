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

/* @__main__/adminlinks_list.html.twig */
class __TwigTemplate_e9b5fc378725001eeded6db41935c744 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'admin_adminlinks_list_colgroup' => [$this, 'block_admin_adminlinks_list_colgroup'],
            'admin_adminlinks_list_filter' => [$this, 'block_admin_adminlinks_list_filter'],
            'admin_adminlinks_list_sorting' => [$this, 'block_admin_adminlinks_list_sorting'],
            'admin_adminlinks_list_item' => [$this, 'block_admin_adminlinks_list_item'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        $this->loadTemplate("@__main__/headitem.html.twig", "@__main__/adminlinks_list.html.twig", 1)->display(twig_array_merge($context, ["title" => $this->extensions['OxidEsales\Twig\Extensions\Filters\TranslateExtension']->translate("ADMINLINKS_LIST_TITLE"), "box" => "list"]));
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
        $this->loadTemplate("@__main__/_formparams.html.twig", "@__main__/adminlinks_list.html.twig", 25)->display(twig_array_merge($context, ["cl" => "adminlinks_list", "lstrt" => ($context["lstrt"] ?? null), "actedit" => ($context["actedit"] ?? null), "oxid" => ($context["oxid"] ?? null), "fnc" => "", "language" => ($context["actlang"] ?? null), "editlanguage" => ($context["actlang"] ?? null)]));
        // line 26
        echo "<table cellspacing=\"0\" cellpadding=\"0\" border=\"0\" width=\"100%\">
    <colgroup>
        ";
        // line 28
        $this->displayBlock('admin_adminlinks_list_colgroup', $context, $blocks);
        // line 34
        echo "    </colgroup>
    <tr class=\"listitem\">
        ";
        // line 36
        $this->displayBlock('admin_adminlinks_list_filter', $context, $blocks);
        // line 63
        echo "    </tr>

    <tr>
        ";
        // line 66
        $this->displayBlock('admin_adminlinks_list_sorting', $context, $blocks);
        // line 71
        echo "    </tr>
";
        // line 72
        $context["blWhite"] = "";
        // line 73
        $context["_cnt"] = 0;
        // line 74
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
            // line 75
            echo "    ";
            $context["_cnt"] = (($context["_cnt"] ?? null) + 1);
            // line 76
            echo "    <tr id=\"row.";
            echo twig_escape_filter($this->env, ($context["_cnt"] ?? null), "html", null, true);
            echo "\">

        ";
            // line 78
            $this->displayBlock('admin_adminlinks_list_item', $context, $blocks);
            // line 94
            echo "    </tr>
";
            // line 95
            if ((($context["blWhite"] ?? null) == "2")) {
                // line 96
                $context["blWhite"] = "";
            } else {
                // line 98
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
        // line 101
        $this->loadTemplate("@__main__/pagenavisnippet.html.twig", "@__main__/adminlinks_list.html.twig", 101)->display(twig_array_merge($context, ["colspan" => "4"]));
        // line 102
        echo "</table>
</form>
</div>

";
        // line 106
        $this->loadTemplate("@__main__/pagetabsnippet.html.twig", "@__main__/adminlinks_list.html.twig", 106)->display($context);
        // line 107
        echo "
<script type=\"text/javascript\">
if (parent.parent)
{   parent.parent.sShopTitle   = \"";
        // line 110
        echo addslashes(twig_get_attribute($this->env, $this->source, ($context["actshopobj"] ?? null), "oxshops__oxname", [], "any", false, false, false, 110));
        echo "\";
    parent.parent.sMenuItem    = \"";
        // line 111
        echo $this->extensions['OxidEsales\Twig\Extensions\TranslateExtension']->translate(["ident" => "ADMINLINKS_LIST_MENUITEM"]);
        echo "\";
    parent.parent.sMenuSubItem = \"";
        // line 112
        echo $this->extensions['OxidEsales\Twig\Extensions\TranslateExtension']->translate(["ident" => "ADMINLINKS_LIST_MENUSUBITEM"]);
        echo "\";
    parent.parent.sWorkArea    = \"";
        // line 113
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
    public function block_admin_adminlinks_list_colgroup($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 29
        echo "        \t<col width=\"3%\">
            <col width=\"10%\">
            <col width=\"86%\">
            <col width=\"2%\">
        ";
    }

    // line 36
    public function block_admin_adminlinks_list_filter($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 37
        echo "\t\t\t<td valign=\"top\" class=\"listfilter first\" align=\"right\">
\t\t\t\t<div class=\"r1\"><div class=\"b1\">&nbsp;</div></div>
        \t</td>
            <td valign=\"top\" class=\"listfilter\" height=\"20\">
                <div class=\"r1\">
                    <div class=\"b1\">
                        <input class=\"listedit\" type=\"text\" size=\"20\" maxlength=\"128\" name=\"where[oxlinks][oxinsert]\" value=\"";
        // line 43
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["where"] ?? null), "oxlinks", [], "any", false, false, false, 43), "oxinsert", [], "any", false, false, false, 43), "html", null, true);
        echo "\">
                    </div>
                </div>
            </td>
            <td valign=\"top\" class=\"listfilter\" colspan=\"2\">
                <div class=\"r1\">
                    <div class=\"b1\">
                        <div class=\"find\">
                            <select name=\"changelang\" class=\"editinput\" onChange=\"Javascript:top.oxid.admin.changeLanguage();\">
                                ";
        // line 52
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["lang"]) {
            // line 53
            echo "                                <option value=\"";
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
        echo "                            </select>
                            <input class=\"listedit\" type=\"submit\" name=\"submitit\" value=\"";
        // line 56
        echo $this->extensions['OxidEsales\Twig\Extensions\TranslateExtension']->translate(["ident" => "GENERAL_SEARCH"]);
        echo "\">
                        </div>
                        <input class=\"listedit\" type=\"text\" size=\"20\" maxlength=\"128\" name=\"where[oxlinks][oxurl]\" value=\"";
        // line 58
        echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["where"] ?? null), "oxlinks", [], "any", false, false, false, 58), "oxurl", [], "any", false, false, false, 58);
        echo "\">
                    </div>
                </div>
            </td>
        ";
    }

    // line 66
    public function block_admin_adminlinks_list_sorting($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 67
        echo "        \t<td class=\"listheader first\" height=\"15\" width=\"30\" align=\"center\"><a href=\"Javascript:top.oxid.admin.setSorting( document.search, 'oxlinks', 'oxactive', 'asc');document.search.submit();\" class=\"listheader\">";
        echo $this->extensions['OxidEsales\Twig\Extensions\TranslateExtension']->translate(["ident" => "GENERAL_ACTIVTITLE"]);
        echo "</a></td>
            <td class=\"listheader\" height=\"15\">&nbsp;<a href=\"Javascript:top.oxid.admin.setSorting( document.search, 'oxlinks', 'oxinsert', 'asc');document.search.submit();\" class=\"listheader\">";
        // line 68
        echo $this->extensions['OxidEsales\Twig\Extensions\TranslateExtension']->translate(["ident" => "GENERAL_DATE"]);
        echo "</a></td>
            <td class=\"listheader\" colspan=\"2\"><a href=\"Javascript:top.oxid.admin.setSorting( document.search, 'oxlinks', 'oxurl', 'asc');document.search.submit();\" class=\"listheader\">";
        // line 69
        echo $this->extensions['OxidEsales\Twig\Extensions\TranslateExtension']->translate(["ident" => "GENERAL_URL"]);
        echo "</a></td>
        ";
    }

    // line 78
    public function block_admin_adminlinks_list_item($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 79
        echo "            ";
        if ((twig_get_attribute($this->env, $this->source, ($context["listitem"] ?? null), "blacklist", [], "any", false, false, false, 79) == 1)) {
            // line 80
            echo "                ";
            $context["listclass"] = "listitem3";
            // line 81
            echo "            ";
        } else {
            // line 82
            echo "                ";
            $context["listclass"] = ("listitem" . ($context["blWhite"] ?? null));
            // line 83
            echo "            ";
        }
        // line 84
        echo "            ";
        if ((twig_get_attribute($this->env, $this->source, ($context["listitem"] ?? null), "getId", [], "method", false, false, false, 84) == ($context["oxid"] ?? null))) {
            // line 85
            echo "                ";
            $context["listclass"] = "listitem4";
            // line 86
            echo "            ";
        }
        // line 87
        echo "            <td valign=\"top\" class=\"";
        echo twig_escape_filter($this->env, ($context["listclass"] ?? null), "html", null, true);
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["listitem"] ?? null), "oxlinks__oxactive", [], "any", false, false, false, 87), "value", [], "any", false, false, false, 87) == 1)) {
            echo " active";
        }
        echo "\" height=\"15\"><div class=\"listitemfloating\">&nbsp</a></div></td>
            <td valign=\"top\" class=\"";
        // line 88
        echo twig_escape_filter($this->env, ($context["listclass"] ?? null), "html", null, true);
        echo "\" height=\"15\"><div class=\"listitemfloating\">&nbsp;<a href=\"Javascript:top.oxid.admin.editThis('";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["listitem"] ?? null), "oxlinks__oxid", [], "any", false, false, false, 88), "value", [], "any", false, false, false, 88), "html", null, true);
        echo "');\" class=\"";
        echo twig_escape_filter($this->env, ($context["listclass"] ?? null), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->extensions['OxidEsales\Twig\Extensions\Filters\FormatDateExtension']->formatDate(twig_get_attribute($this->env, $this->source, ($context["listitem"] ?? null), "oxlinks__oxinsert", [], "any", false, false, false, 88)), "html", null, true);
        echo "</a></div></td>
            <td valign=\"top\" class=\"";
        // line 89
        echo twig_escape_filter($this->env, ($context["listclass"] ?? null), "html", null, true);
        echo "\"><div class=\"listitemfloating\">&nbsp;<a href=\"Javascript:top.oxid.admin.editThis('";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["listitem"] ?? null), "oxlinks__oxid", [], "any", false, false, false, 89), "value", [], "any", false, false, false, 89), "html", null, true);
        echo "');\" class=\"";
        echo twig_escape_filter($this->env, ($context["listclass"] ?? null), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["listitem"] ?? null), "oxlinks__oxurl", [], "any", false, false, false, 89), "value", [], "any", false, false, false, 89), "html", null, true);
        echo "</a></div></td>
            <td class=\"";
        // line 90
        echo twig_escape_filter($this->env, ($context["listclass"] ?? null), "html", null, true);
        echo "\">
                ";
        // line 91
        $this->loadTemplate("@__main__/include/adminlinks_list_actions.html.twig", "@__main__/adminlinks_list.html.twig", 91)->display($context);
        // line 92
        echo "            </td>
        ";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@__main__/adminlinks_list.html.twig";
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
        return array (  356 => 92,  354 => 91,  350 => 90,  340 => 89,  330 => 88,  322 => 87,  319 => 86,  316 => 85,  313 => 84,  310 => 83,  307 => 82,  304 => 81,  301 => 80,  298 => 79,  294 => 78,  288 => 69,  284 => 68,  279 => 67,  275 => 66,  266 => 58,  261 => 56,  258 => 55,  243 => 53,  239 => 52,  227 => 43,  219 => 37,  215 => 36,  207 => 29,  203 => 28,  192 => 113,  188 => 112,  184 => 111,  180 => 110,  175 => 107,  173 => 106,  167 => 102,  165 => 101,  150 => 98,  147 => 96,  145 => 95,  142 => 94,  140 => 78,  134 => 76,  131 => 75,  114 => 74,  112 => 73,  110 => 72,  107 => 71,  105 => 66,  100 => 63,  98 => 36,  94 => 34,  92 => 28,  88 => 26,  86 => 25,  82 => 24,  74 => 18,  68 => 16,  66 => 15,  58 => 9,  54 => 7,  50 => 5,  48 => 4,  45 => 3,  43 => 2,  41 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@__main__/adminlinks_list.html.twig", "/var/www/html/source/Application/views/admin_twig/tpl/adminlinks_list.html.twig");
    }
}
