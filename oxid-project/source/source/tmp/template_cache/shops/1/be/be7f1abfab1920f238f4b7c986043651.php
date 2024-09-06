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

/* @__main__/wrapping_list.html.twig */
class __TwigTemplate_522d8fe2c85383db69a152dc71bd53b1 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'admin_wrapping_list_colgroup' => [$this, 'block_admin_wrapping_list_colgroup'],
            'admin_wrapping_list_filter' => [$this, 'block_admin_wrapping_list_filter'],
            'admin_wrapping_list_sorting' => [$this, 'block_admin_wrapping_list_sorting'],
            'admin_wrapping_list_item' => [$this, 'block_admin_wrapping_list_item'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        $this->loadTemplate("@__main__/headitem.html.twig", "@__main__/wrapping_list.html.twig", 1)->display(twig_array_merge($context, ["title" => $this->extensions['OxidEsales\Twig\Extensions\Filters\TranslateExtension']->translate("WRAPPING_LIST_TITLE"), "box" => "list"]));
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
        // line 23
        echo twig_get_attribute($this->env, $this->source, ($context["oViewConf"] ?? null), "getSelfLink", [], "method", false, false, false, 23);
        echo "\" method=\"post\">
";
        // line 24
        $this->loadTemplate("@__main__/_formparams.html.twig", "@__main__/wrapping_list.html.twig", 24)->display(twig_array_merge($context, ["cl" => "wrapping_list", "lstrt" => ($context["lstrt"] ?? null), "actedit" => ($context["actedit"] ?? null), "oxid" => ($context["oxid"] ?? null), "fnc" => "", "language" => ($context["actlang"] ?? null), "editlanguage" => ($context["actlang"] ?? null)]));
        // line 25
        echo "<table cellspacing=\"0\" cellpadding=\"0\" border=\"0\" width=\"100%\">
<colgroup>
    ";
        // line 27
        $this->displayBlock('admin_wrapping_list_colgroup', $context, $blocks);
        // line 34
        echo "</colgroup>
<tr class=\"listfilter\">
    ";
        // line 36
        $this->displayBlock('admin_wrapping_list_filter', $context, $blocks);
        // line 62
        echo "</tr>
<tr>
    ";
        // line 64
        $this->displayBlock('admin_wrapping_list_sorting', $context, $blocks);
        // line 70
        echo "</tr>

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
            // line 77
            $this->displayBlock('admin_wrapping_list_item', $context, $blocks);
            // line 95
            echo "</tr>
";
            // line 96
            $context["blWhite"] = "2";
            // line 97
            if ((($context["blWhite"] ?? null) == "2")) {
                // line 98
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
        // line 101
        $this->loadTemplate("@__main__/pagenavisnippet.html.twig", "@__main__/wrapping_list.html.twig", 101)->display(twig_array_merge($context, ["colspan" => "5"]));
        // line 102
        echo "</table>
</form>
</div>

";
        // line 106
        $this->loadTemplate("@__main__/pagetabsnippet.html.twig", "@__main__/wrapping_list.html.twig", 106)->display($context);
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
        echo $this->extensions['OxidEsales\Twig\Extensions\TranslateExtension']->translate(["ident" => "WRAPPING_LIST_MENUITEM"]);
        echo "\";
    parent.parent.sMenuSubItem = \"";
        // line 112
        echo $this->extensions['OxidEsales\Twig\Extensions\TranslateExtension']->translate(["ident" => "WRAPPING_LIST_MENUSUBITEM"]);
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

    // line 27
    public function block_admin_wrapping_list_colgroup($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 28
        echo "    \t<col width=\"3%\">
        <col width=\"27%\">
        <col width=\"29%\">
        <col width=\"29%\">
        <col width=\"2%\">
    ";
    }

    // line 36
    public function block_admin_wrapping_list_filter($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 37
        echo "    \t <td valign=\"top\" class=\"listfilter first\" align=\"right\">
        \t<div class=\"r1\"><div class=\"b1\">&nbsp;</div></div>
        </td>
        <td valign=\"top\" class=\"listfilter\" height=\"20\">
            <div class=\"r1\"><div class=\"b1\">&nbsp;</div></div>
        </td>
        <td valign=\"top\" class=\"listfilter\" height=\"20\">
            <div class=\"r1\"><div class=\"b1\">
            <input class=\"listedit\" type=\"text\" size=\"20\" maxlength=\"128\" name=\"where[oxwrapping][oxname]\" value=\"";
        // line 45
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["where"] ?? null), "oxwrapping", [], "any", false, false, false, 45), "oxname", [], "any", false, false, false, 45), "html", null, true);
        echo "\" ";
        echo twig_escape_filter($this->env, ($context["readonly"] ?? null), "html", null, true);
        echo ">
            </div></div>
        </td>
        <td valign=\"top\" class=\"listfilter\" colspan=\"2\">
            <div class=\"r1\"><div class=\"b1\">
            <div class=\"find\">
                <select name=\"changelang\" class=\"editinput\" onChange=\"Javascript:top.oxid.admin.changeLanguage();\">
                ";
        // line 52
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["lang"]) {
            // line 53
            echo "                <option value=\"";
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
        echo "                </select>
                <input class=\"listedit\" type=\"submit\" name=\"submitit\" value=\"";
        // line 56
        echo $this->extensions['OxidEsales\Twig\Extensions\TranslateExtension']->translate(["ident" => "GENERAL_SEARCH"]);
        echo "\" ";
        echo twig_escape_filter($this->env, ($context["readonly"] ?? null), "html", null, true);
        echo ">
            </div>
            <input class=\"listedit\" type=\"text\" size=\"20\" maxlength=\"128\" name=\"where[oxwrapping][oxpic]\" value=\"";
        // line 58
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["where"] ?? null), "oxwrapping", [], "any", false, false, false, 58), "oxpic", [], "any", false, false, false, 58), "html", null, true);
        echo "\" ";
        echo twig_escape_filter($this->env, ($context["readonly"] ?? null), "html", null, true);
        echo ">
            </div></div>
        </td>
    ";
    }

    // line 64
    public function block_admin_wrapping_list_sorting($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 65
        echo "    \t<td class=\"listheader first\" height=\"15\" width=\"30\" align=\"center\"><a href=\"Javascript:top.oxid.admin.setSorting( document.search, 'oxwrapping', 'oxactive', 'asc');document.search.submit();\" class=\"listheader\">";
        echo $this->extensions['OxidEsales\Twig\Extensions\TranslateExtension']->translate(["ident" => "GENERAL_ACTIVTITLE"]);
        echo "</a></td>
        <td class=\"listheader\" height=\"15\">&nbsp;<a href=\"Javascript:top.oxid.admin.setSorting( document.search, 'oxwrapping', 'oxtype', 'asc');document.search.submit();\" class=\"listheader\">";
        // line 66
        echo $this->extensions['OxidEsales\Twig\Extensions\TranslateExtension']->translate(["ident" => "GENERAL_TYPE"]);
        echo "</a></td>
        <td class=\"listheader\"><a href=\"Javascript:top.oxid.admin.setSorting( document.search, 'oxwrapping', 'oxname', 'asc');document.search.submit();\" class=\"listheader\">";
        // line 67
        echo $this->extensions['OxidEsales\Twig\Extensions\TranslateExtension']->translate(["ident" => "GENERAL_NAME"]);
        echo "</a></td>
        <td class=\"listheader\" colspan=\"2\"><a href=\"Javascript:top.oxid.admin.setSorting( document.search, 'oxwrapping', 'oxpic', 'asc');document.search.submit();\" class=\"listheader\">";
        // line 68
        echo $this->extensions['OxidEsales\Twig\Extensions\TranslateExtension']->translate(["ident" => "WRAPPING_LIST_PICTURE"]);
        echo "</a></td>
    ";
    }

    // line 77
    public function block_admin_wrapping_list_item($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 78
        echo "        ";
        if ((twig_get_attribute($this->env, $this->source, ($context["listitem"] ?? null), "blacklist", [], "any", false, false, false, 78) == 1)) {
            // line 79
            echo "            ";
            $context["listclass"] = "listitem3";
            // line 80
            echo "        ";
        } else {
            // line 81
            echo "            ";
            $context["listclass"] = ("listitem" . ($context["blWhite"] ?? null));
            // line 82
            echo "        ";
        }
        // line 83
        echo "        ";
        if ((twig_get_attribute($this->env, $this->source, ($context["listitem"] ?? null), "getId", [], "method", false, false, false, 83) == ($context["oxid"] ?? null))) {
            // line 84
            echo "            ";
            $context["listclass"] = "listitem4";
            // line 85
            echo "        ";
        }
        // line 86
        echo "        <td valign=\"top\" class=\"";
        echo twig_escape_filter($this->env, ($context["listclass"] ?? null), "html", null, true);
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["listitem"] ?? null), "oxwrapping__oxactive", [], "any", false, false, false, 86), "value", [], "any", false, false, false, 86) == 1)) {
            echo " active";
        }
        echo "\" height=\"15\"><div class=\"listitemfloating\">&nbsp</a></div></td>
        <td valign=\"top\" class=\"";
        // line 87
        echo twig_escape_filter($this->env, ($context["listclass"] ?? null), "html", null, true);
        echo "\" height=\"15\"><div class=\"listitemfloating\">&nbsp;<a href=\"Javascript:top.oxid.admin.editThis('";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["listitem"] ?? null), "oxwrapping__oxid", [], "any", false, false, false, 87), "value", [], "any", false, false, false, 87), "html", null, true);
        echo "');\" class=\"";
        echo twig_escape_filter($this->env, ($context["listclass"] ?? null), "html", null, true);
        echo "\">";
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["listitem"] ?? null), "oxwrapping__oxtype", [], "any", false, false, false, 87), "value", [], "any", false, false, false, 87) == "WRAP")) {
            echo $this->extensions['OxidEsales\Twig\Extensions\TranslateExtension']->translate(["ident" => "WRAPPING_LIST_PRESENTPACKUNG"]);
        } elseif ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["listitem"] ?? null), "oxwrapping__oxtype", [], "any", false, false, false, 87), "value", [], "any", false, false, false, 87) == "CARD")) {
            echo $this->extensions['OxidEsales\Twig\Extensions\TranslateExtension']->translate(["ident" => "GENERAL_CARD"]);
        }
        echo "</a></div></td>
        <td valign=\"top\" class=\"";
        // line 88
        echo twig_escape_filter($this->env, ($context["listclass"] ?? null), "html", null, true);
        echo "\"><div class=\"listitemfloating\"><a href=\"Javascript:top.oxid.admin.editThis('";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["listitem"] ?? null), "oxwrapping__oxid", [], "any", false, false, false, 88), "value", [], "any", false, false, false, 88), "html", null, true);
        echo "');\" class=\"";
        echo twig_escape_filter($this->env, ($context["listclass"] ?? null), "html", null, true);
        echo "\">";
        if ( !twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["listitem"] ?? null), "oxwrapping__oxname", [], "any", false, false, false, 88), "value", [], "any", false, false, false, 88)) {
            echo "-";
            echo $this->extensions['OxidEsales\Twig\Extensions\TranslateExtension']->translate(["ident" => "GENERAL_NONAME"]);
            echo "-";
        } else {
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["listitem"] ?? null), "oxwrapping__oxname", [], "any", false, false, false, 88), "value", [], "any", false, false, false, 88), "html", null, true);
        }
        echo "</a></div></td>
        <td valign=\"top\" class=\"";
        // line 89
        echo twig_escape_filter($this->env, ($context["listclass"] ?? null), "html", null, true);
        echo "\"><div class=\"listitemfloating\"><a href=\"Javascript:top.oxid.admin.editThis('";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["listitem"] ?? null), "oxwrapping__oxid", [], "any", false, false, false, 89), "value", [], "any", false, false, false, 89), "html", null, true);
        echo "');\" class=\"";
        echo twig_escape_filter($this->env, ($context["listclass"] ?? null), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["listitem"] ?? null), "oxwrapping__oxpic", [], "any", false, false, false, 89), "value", [], "any", false, false, false, 89), "html", null, true);
        echo "</a></div></td>

        <td class=\"";
        // line 91
        echo twig_escape_filter($this->env, ($context["listclass"] ?? null), "html", null, true);
        echo "\">
            ";
        // line 92
        $this->loadTemplate("@__main__/include/wrapping_list_actions.html.twig", "@__main__/wrapping_list.html.twig", 92)->display($context);
        // line 93
        echo "        </td>
    ";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@__main__/wrapping_list.html.twig";
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
        return array (  385 => 93,  383 => 92,  379 => 91,  368 => 89,  352 => 88,  338 => 87,  330 => 86,  327 => 85,  324 => 84,  321 => 83,  318 => 82,  315 => 81,  312 => 80,  309 => 79,  306 => 78,  302 => 77,  296 => 68,  292 => 67,  288 => 66,  283 => 65,  279 => 64,  269 => 58,  262 => 56,  259 => 55,  244 => 53,  240 => 52,  228 => 45,  218 => 37,  214 => 36,  205 => 28,  201 => 27,  190 => 113,  186 => 112,  182 => 111,  178 => 110,  173 => 107,  171 => 106,  165 => 102,  163 => 101,  147 => 98,  145 => 97,  143 => 96,  140 => 95,  138 => 77,  133 => 76,  130 => 75,  113 => 74,  111 => 73,  109 => 72,  105 => 70,  103 => 64,  99 => 62,  97 => 36,  93 => 34,  91 => 27,  87 => 25,  85 => 24,  81 => 23,  74 => 18,  68 => 16,  66 => 15,  58 => 9,  54 => 7,  50 => 5,  48 => 4,  45 => 3,  43 => 2,  41 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@__main__/wrapping_list.html.twig", "/var/www/html/source/Application/views/admin_twig/tpl/wrapping_list.html.twig");
    }
}
