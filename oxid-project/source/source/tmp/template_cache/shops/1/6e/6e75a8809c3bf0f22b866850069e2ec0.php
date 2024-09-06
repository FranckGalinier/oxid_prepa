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

/* @__main__/usergroup_list.html.twig */
class __TwigTemplate_f4c6475f86a894a25016b54c53f1f2ec extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'admin_usergroup_list_colgroup' => [$this, 'block_admin_usergroup_list_colgroup'],
            'admin_usergroup_list_filter' => [$this, 'block_admin_usergroup_list_filter'],
            'admin_usergroup_list_sorting' => [$this, 'block_admin_usergroup_list_sorting'],
            'admin_usergroup_list_item' => [$this, 'block_admin_usergroup_list_item'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        $this->loadTemplate("@__main__/headitem.html.twig", "@__main__/usergroup_list.html.twig", 1)->display(twig_array_merge($context, ["title" => $this->extensions['OxidEsales\Twig\Extensions\Filters\TranslateExtension']->translate("GENERAL_ADMIN_TITLE"), "box" => "list"]));
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
        $this->loadTemplate("@__main__/_formparams.html.twig", "@__main__/usergroup_list.html.twig", 26)->display(twig_array_merge($context, ["cl" => "usergroup_list", "lstrt" => ($context["lstrt"] ?? null), "actedit" => ($context["actedit"] ?? null), "oxid" => ($context["oxid"] ?? null), "fnc" => "", "language" => ($context["actlang"] ?? null), "editlanguage" => ($context["actlang"] ?? null)]));
        // line 27
        echo "<table cellspacing=\"0\" cellpadding=\"0\" border=\"0\" width=\"100%\">
<colgroup>
    ";
        // line 29
        $this->displayBlock('admin_usergroup_list_colgroup', $context, $blocks);
        // line 34
        echo "</colgroup>
<tr class=\"listitem\">
    ";
        // line 36
        $this->displayBlock('admin_usergroup_list_filter', $context, $blocks);
        // line 53
        echo "</tr>

<tr>
    ";
        // line 56
        $this->displayBlock('admin_usergroup_list_sorting', $context, $blocks);
        // line 60
        echo "</tr>

";
        // line 62
        $context["blWhite"] = "";
        // line 63
        $context["_cnt"] = 0;
        // line 64
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
            // line 65
            echo "    ";
            $context["_cnt"] = (($context["_cnt"] ?? null) + 1);
            // line 66
            echo "    <tr id=\"row.";
            echo twig_escape_filter($this->env, ($context["_cnt"] ?? null), "html", null, true);
            echo "\">
    ";
            // line 67
            $this->displayBlock('admin_usergroup_list_item', $context, $blocks);
            // line 84
            echo "</tr>
";
            // line 85
            if ((($context["blWhite"] ?? null) == "2")) {
                // line 86
                $context["blWhite"] = "";
            } else {
                // line 88
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
        // line 91
        $this->loadTemplate("@__main__/pagenavisnippet.html.twig", "@__main__/usergroup_list.html.twig", 91)->display(twig_array_merge($context, ["colspan" => "3"]));
        // line 92
        echo "</table>
</form>
</div>


";
        // line 97
        $this->loadTemplate("@__main__/pagetabsnippet.html.twig", "@__main__/usergroup_list.html.twig", 97)->display($context);
        // line 98
        echo "

<script type=\"text/javascript\">
if (parent.parent)
{   parent.parent.sShopTitle   = \"";
        // line 102
        echo addslashes(twig_get_attribute($this->env, $this->source, ($context["actshopobj"] ?? null), "oxshops__oxname", [], "any", false, false, false, 102));
        echo "\";
    parent.parent.sMenuItem    = \"";
        // line 103
        echo $this->extensions['OxidEsales\Twig\Extensions\TranslateExtension']->translate(["ident" => "USERGROUP_LIST_MENUITEM"]);
        echo "\";
    parent.parent.sMenuSubItem = \"";
        // line 104
        echo $this->extensions['OxidEsales\Twig\Extensions\TranslateExtension']->translate(["ident" => "USERGROUP_LIST_MENUSUBITEM"]);
        echo "\";
    parent.parent.sWorkArea    = \"";
        // line 105
        echo twig_escape_filter($this->env, ($context["_act"] ?? null), "html", null, true);
        echo "\";
    parent.parent.setTitle();
}
</script>
</body>
</html>
";
    }

    // line 29
    public function block_admin_usergroup_list_colgroup($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 30
        echo "    \t<col width=\"3%\">
        <col width=\"95%\">
        <col width=\"2%\">
    ";
    }

    // line 36
    public function block_admin_usergroup_list_filter($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 37
        echo "    \t<td valign=\"top\" class=\"listfilter first\" align=\"right\">
\t\t\t<div class=\"r1\"><div class=\"b1\">&nbsp;</div></div>
        </td>
        <td valign=\"top\" class=\"listfilter\" height=\"20\" colspan=\"2\">
            <div class=\"r1\"><div class=\"b1\">
                <div class=\"find\">
                <select name=\"changelang\" class=\"editinput\" onChange=\"Javascript:top.oxid.admin.changeLanguage();\">
                ";
        // line 44
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["lang"]) {
            // line 45
            echo "                <option value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["lang"], "id", [], "any", false, false, false, 45), "html", null, true);
            echo "\" ";
            if (twig_get_attribute($this->env, $this->source, $context["lang"], "selected", [], "any", false, false, false, 45)) {
                echo "SELECTED";
            }
            echo ">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["lang"], "name", [], "any", false, false, false, 45), "html", null, true);
            echo "</option>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['lang'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 47
        echo "                </select>
                <input class=\"listedit\" type=\"submit\" name=\"submitit\" value=\"";
        // line 48
        echo $this->extensions['OxidEsales\Twig\Extensions\TranslateExtension']->translate(["ident" => "GENERAL_SEARCH"]);
        echo "\"></div>
                <input class=\"listedit\" type=\"text\" size=\"60\" maxlength=\"128\" name=\"where[oxgroups][oxtitle]\" value=\"";
        // line 49
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["where"] ?? null), "oxgroups", [], "any", false, false, false, 49), "oxtitle", [], "any", false, false, false, 49), "html", null, true);
        echo "\">
            </div></div>
        </td>
    ";
    }

    // line 56
    public function block_admin_usergroup_list_sorting($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 57
        echo "    \t<td class=\"listheader first\" height=\"15\" width=\"30\" align=\"center\"><a href=\"Javascript:top.oxid.admin.setSorting( document.search, 'oxgroups', 'oxactive', 'asc');document.search.submit();\" class=\"listheader\">";
        echo $this->extensions['OxidEsales\Twig\Extensions\TranslateExtension']->translate(["ident" => "GENERAL_ACTIVTITLE"]);
        echo "</a></td>
        <td class=\"listheader\" height=\"15\" colspan=\"2\"><a href=\"Javascript:top.oxid.admin.setSorting( document.search, 'oxgroups', 'oxtitle', 'asc');document.search.submit();\" class=\"listheader\">";
        // line 58
        echo $this->extensions['OxidEsales\Twig\Extensions\TranslateExtension']->translate(["ident" => "GENERAL_NAME"]);
        echo "</a></td>
    ";
    }

    // line 67
    public function block_admin_usergroup_list_item($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 68
        echo "        ";
        if ((twig_get_attribute($this->env, $this->source, ($context["listitem"] ?? null), "blacklist", [], "any", false, false, false, 68) == 1)) {
            // line 69
            echo "            ";
            $context["listclass"] = "listitem3";
            // line 70
            echo "        ";
        } else {
            // line 71
            echo "            ";
            $context["listclass"] = ("listitem" . ($context["blWhite"] ?? null));
            // line 72
            echo "        ";
        }
        // line 73
        echo "        ";
        if ((twig_get_attribute($this->env, $this->source, ($context["listitem"] ?? null), "getId", [], "method", false, false, false, 73) == ($context["oxid"] ?? null))) {
            // line 74
            echo "            ";
            $context["listclass"] = "listitem4";
            // line 75
            echo "        ";
        }
        // line 76
        echo "        <td valign=\"top\" class=\"";
        echo twig_escape_filter($this->env, ($context["listclass"] ?? null), "html", null, true);
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["listitem"] ?? null), "oxgroups__oxactive", [], "any", false, false, false, 76), "value", [], "any", false, false, false, 76) == 1)) {
            echo " active";
        }
        echo "\" height=\"15\"><div class=\"listitemfloating\">&nbsp</a></div></td>
        <td valign=\"top\" class=\"";
        // line 77
        echo twig_escape_filter($this->env, ($context["listclass"] ?? null), "html", null, true);
        echo "\" height=\"15\"><div class=\"listitemfloating\"><a href=\"Javascript:top.oxid.admin.editThis('";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["listitem"] ?? null), "oxgroups__oxid", [], "any", false, false, false, 77), "value", [], "any", false, false, false, 77), "html", null, true);
        echo "');\" class=\"";
        echo twig_escape_filter($this->env, ($context["listclass"] ?? null), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["listitem"] ?? null), "oxgroups__oxtitle", [], "any", false, false, false, 77), "value", [], "any", false, false, false, 77), "html", null, true);
        echo "</a></div></td>
        <td class=\"";
        // line 78
        echo twig_escape_filter($this->env, ($context["listclass"] ?? null), "html", null, true);
        echo "\">
            ";
        // line 79
        if (( !twig_get_attribute($this->env, $this->source, ($context["listitem"] ?? null), "isOx", [], "method", false, false, false, 79) &&  !($context["readonly"] ?? null))) {
            // line 80
            echo "            <a href=\"Javascript:top.oxid.admin.deleteThis('";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["listitem"] ?? null), "oxgroups__oxid", [], "any", false, false, false, 80), "value", [], "any", false, false, false, 80), "html", null, true);
            echo "');\" class=\"delete\" id=\"del.";
            echo twig_escape_filter($this->env, ($context["_cnt"] ?? null), "html", null, true);
            echo "\" ";
            $this->loadTemplate("@__main__/help.html.twig", "@__main__/usergroup_list.html.twig", 80)->display(twig_array_merge($context, ["helpid" => "item_delete"]));
            echo "></a>
            ";
        }
        // line 82
        echo "        </td>
    ";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@__main__/usergroup_list.html.twig";
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
        return array (  341 => 82,  331 => 80,  329 => 79,  325 => 78,  315 => 77,  307 => 76,  304 => 75,  301 => 74,  298 => 73,  295 => 72,  292 => 71,  289 => 70,  286 => 69,  283 => 68,  279 => 67,  273 => 58,  268 => 57,  264 => 56,  256 => 49,  252 => 48,  249 => 47,  234 => 45,  230 => 44,  221 => 37,  217 => 36,  210 => 30,  206 => 29,  195 => 105,  191 => 104,  187 => 103,  183 => 102,  177 => 98,  175 => 97,  168 => 92,  166 => 91,  151 => 88,  148 => 86,  146 => 85,  143 => 84,  141 => 67,  136 => 66,  133 => 65,  116 => 64,  114 => 63,  112 => 62,  108 => 60,  106 => 56,  101 => 53,  99 => 36,  95 => 34,  93 => 29,  89 => 27,  87 => 26,  83 => 25,  74 => 18,  68 => 16,  66 => 15,  58 => 9,  54 => 7,  50 => 5,  48 => 4,  45 => 3,  43 => 2,  41 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@__main__/usergroup_list.html.twig", "/var/www/html/source/Application/views/admin_twig/tpl/usergroup_list.html.twig");
    }
}
