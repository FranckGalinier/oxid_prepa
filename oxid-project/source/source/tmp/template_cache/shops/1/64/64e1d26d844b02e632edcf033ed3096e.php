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

/* @__main__/actions_list.html.twig */
class __TwigTemplate_cc158a6c7610644501bbf90fb9241dcb extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'admin_actions_list_colgroup' => [$this, 'block_admin_actions_list_colgroup'],
            'admin_actions_list_filter' => [$this, 'block_admin_actions_list_filter'],
            'admin_actions_list_sorting' => [$this, 'block_admin_actions_list_sorting'],
            'admin_actions_list_item' => [$this, 'block_admin_actions_list_item'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        $this->loadTemplate("@__main__/headitem.html.twig", "@__main__/actions_list.html.twig", 1)->display(twig_array_merge($context, ["title" => $this->extensions['OxidEsales\Twig\Extensions\Filters\TranslateExtension']->translate("GENERAL_ADMIN_TITLE"), "box" => "list"]));
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
        $this->loadTemplate("@__main__/_formparams.html.twig", "@__main__/actions_list.html.twig", 26)->display(twig_array_merge($context, ["cl" => "actions_list", "lstrt" => ($context["lstrt"] ?? null), "actedit" => ($context["actedit"] ?? null), "oxid" => ($context["oxid"] ?? null), "fnc" => "", "language" => ($context["actlang"] ?? null), "editlanguage" => ($context["actlang"] ?? null)]));
        // line 27
        echo "<table cellspacing=\"0\" cellpadding=\"0\" border=\"0\" width=\"100%\">
    <colgroup>
        ";
        // line 29
        $this->displayBlock('admin_actions_list_colgroup', $context, $blocks);
        // line 36
        echo "    </colgroup>
<tr class=\"listitem\">
    ";
        // line 38
        $this->displayBlock('admin_actions_list_filter', $context, $blocks);
        // line 64
        echo "</tr>
<tr>
    ";
        // line 66
        $this->displayBlock('admin_actions_list_sorting', $context, $blocks);
        // line 73
        echo "</tr>

";
        // line 75
        $context["blWhite"] = "";
        // line 76
        $context["_cnt"] = 0;
        // line 77
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
            // line 78
            echo "    ";
            $context["_cnt"] = (($context["_cnt"] ?? null) + 1);
            // line 79
            echo "    <tr id=\"row.";
            echo twig_escape_filter($this->env, ($context["_cnt"] ?? null), "html", null, true);
            echo "\">

    ";
            // line 81
            if ((twig_get_attribute($this->env, $this->source, $context["listitem"], "blacklist", [], "any", false, false, false, 81) == 1)) {
                // line 82
                echo "        ";
                $context["listclass"] = "listitem3";
                // line 83
                echo "    ";
            } else {
                // line 84
                echo "        ";
                $context["listclass"] = ("listitem" . ($context["blWhite"] ?? null));
                // line 85
                echo "    ";
            }
            // line 86
            echo "    ";
            if ((twig_get_attribute($this->env, $this->source, $context["listitem"], "getId", [], "method", false, false, false, 86) == ($context["oxid"] ?? null))) {
                // line 87
                echo "        ";
                $context["listclass"] = "listitem4";
                // line 88
                echo "    ";
            }
            // line 89
            echo "
    ";
            // line 90
            $this->displayBlock('admin_actions_list_item', $context, $blocks);
            // line 106
            echo "</tr>
";
            // line 107
            if ((($context["blWhite"] ?? null) == "2")) {
                // line 108
                $context["blWhite"] = "";
            } else {
                // line 110
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
        // line 113
        $this->loadTemplate("@__main__/pagenavisnippet.html.twig", "@__main__/actions_list.html.twig", 113)->display(twig_array_merge($context, ["colspan" => "5"]));
        // line 114
        echo "</table>
</form>
</div>

";
        // line 118
        $this->loadTemplate("@__main__/pagetabsnippet.html.twig", "@__main__/actions_list.html.twig", 118)->display($context);
        // line 119
        echo "

<script type=\"text/javascript\">
if (parent.parent)
{   parent.parent.sShopTitle   = \"";
        // line 123
        echo addslashes(twig_get_attribute($this->env, $this->source, ($context["actshopobj"] ?? null), "oxshops__oxname", [], "any", false, false, false, 123));
        echo "\";
    parent.parent.sMenuItem    = \"";
        // line 124
        echo $this->extensions['OxidEsales\Twig\Extensions\TranslateExtension']->translate(["ident" => "ACTIONS_LIST_MENUITEM"]);
        echo "\";
    parent.parent.sMenuSubItem = \"";
        // line 125
        echo $this->extensions['OxidEsales\Twig\Extensions\TranslateExtension']->translate(["ident" => "ACTIONS_LIST_MENUSUBITEM"]);
        echo "\";
    parent.parent.sWorkArea    = \"";
        // line 126
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
    public function block_admin_actions_list_colgroup($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 30
        echo "        <col width=\"3%\">
        <col width=\"30%\">
        <col width=\"30%\">
        <col width=\"30%\">
        <col width=\"7%\">
        ";
    }

    // line 38
    public function block_admin_actions_list_filter($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 39
        echo "    <td valign=\"top\" class=\"listfilter first\" height=\"20\"  colspan=\"5\">
        <div class=\"r1\">
            <div class=\"b1\">

              <select name=\"displaytype\" class=\"folderselect\" onChange=\"document.search.submit();\">
                <option value=\"\">";
        // line 44
        echo $this->extensions['OxidEsales\Twig\Extensions\TranslateExtension']->translate(["ident" => "PROMOTION_LIST_ALL"]);
        echo "</option>
                <option value=\"1\" ";
        // line 45
        if ((($context["displaytype"] ?? null) == "1")) {
            echo "SELECTED";
        }
        echo ">";
        echo $this->extensions['OxidEsales\Twig\Extensions\TranslateExtension']->translate(["ident" => "PROMOTION_LIST_ACTIVE"]);
        echo "</option>
                <option value=\"2\" ";
        // line 46
        if ((($context["displaytype"] ?? null) == "2")) {
            echo "SELECTED";
        }
        echo ">";
        echo $this->extensions['OxidEsales\Twig\Extensions\TranslateExtension']->translate(["ident" => "PROMOTION_LIST_UPCOMING"]);
        echo "</option>
                <option value=\"3\" ";
        // line 47
        if ((($context["displaytype"] ?? null) == "3")) {
            echo "SELECTED";
        }
        echo ">";
        echo $this->extensions['OxidEsales\Twig\Extensions\TranslateExtension']->translate(["ident" => "PROMOTION_LIST_EXPIRED"]);
        echo "</option>
              </select>

              <div class=\"find\">
                <select name=\"changelang\" class=\"editinput\" onChange=\"Javascript:top.oxid.admin.changeLanguage();\">
                  ";
        // line 52
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["lang"]) {
            // line 53
            echo "                  <option value=\"";
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
        echo "\">
              </div>

              <input class=\"listedit\" type=\"text\" size=\"50\" maxlength=\"128\" name=\"where[oxactions][oxtitle]\" value=\"";
        // line 59
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["where"] ?? null), "oxactions", [], "any", false, false, false, 59), "oxtitle", [], "any", false, false, false, 59), "html", null, true);
        echo "\">
            </div>
        </div>
    </td>
    ";
    }

    // line 66
    public function block_admin_actions_list_sorting($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 67
        echo "    <td class=\"listheader first\" height=\"15\" width=\"30\" align=\"center\"><a href=\"Javascript:top.oxid.admin.setSorting( document.search, 'oxactions', 'oxactive', 'asc');document.search.submit();\" class=\"listheader\">";
        echo $this->extensions['OxidEsales\Twig\Extensions\TranslateExtension']->translate(["ident" => "GENERAL_ACTIVTITLE"]);
        echo "</a></td>
    <td class=\"listheader\" height=\"15\"><a href=\"Javascript:top.oxid.admin.setSorting( document.search, 'oxactions', 'oxtitle', 'asc');document.search.submit();\" class=\"listheader\">";
        // line 68
        echo $this->extensions['OxidEsales\Twig\Extensions\TranslateExtension']->translate(["ident" => "GENERAL_NAME"]);
        echo "</a></td>
    <td class=\"listheader\"><a href=\"Javascript:top.oxid.admin.setSorting( document.search, 'oxactions', 'oxactivefrom', 'asc');document.search.submit();\" class=\"listheader\">";
        // line 69
        echo $this->extensions['OxidEsales\Twig\Extensions\TranslateExtension']->translate(["ident" => "PROMOTION_LIST_STARTTIME"]);
        echo "</a></td>
    <td class=\"listheader\"><a href=\"Javascript:top.oxid.admin.setSorting( document.search, 'oxactions', 'oxtype', 'asc');document.search.submit();\" class=\"listheader\">";
        // line 70
        echo $this->extensions['OxidEsales\Twig\Extensions\TranslateExtension']->translate(["ident" => "GENERAL_TYPE"]);
        echo "</a></td>
    <td class=\"listheader\"></td>
    ";
    }

    // line 90
    public function block_admin_actions_list_item($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 91
        echo "    <td valign=\"top\" class=\"";
        echo twig_escape_filter($this->env, ($context["listclass"] ?? null), "html", null, true);
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["listitem"] ?? null), "oxactions__oxactive", [], "any", false, false, false, 91), "value", [], "any", false, false, false, 91) == 1)) {
            echo " active";
        }
        echo "\" height=\"15\"><div class=\"listitemfloating\">&nbsp</a></div></td>
    <td valign=\"top\" class=\"";
        // line 92
        echo twig_escape_filter($this->env, ($context["listclass"] ?? null), "html", null, true);
        echo "\" height=\"15\"><div class=\"listitemfloating\"><a href=\"Javascript:top.oxid.admin.editThis('";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["listitem"] ?? null), "oxactions__oxid", [], "any", false, false, false, 92), "value", [], "any", false, false, false, 92), "html", null, true);
        echo "');\" class=\"";
        echo twig_escape_filter($this->env, ($context["listclass"] ?? null), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["listitem"] ?? null), "oxactions__oxtitle", [], "any", false, false, false, 92), "value", [], "any", false, false, false, 92), "html", null, true);
        echo "</a></div></td>
    <td valign=\"top\" class=\"";
        // line 93
        echo twig_escape_filter($this->env, ($context["listclass"] ?? null), "html", null, true);
        echo "\" height=\"15\"><div class=\"listitemfloating\"><a href=\"Javascript:top.oxid.admin.editThis('";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["listitem"] ?? null), "oxactions__oxid", [], "any", false, false, false, 93), "value", [], "any", false, false, false, 93), "html", null, true);
        echo "');\" class=\"";
        echo twig_escape_filter($this->env, ($context["listclass"] ?? null), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["listitem"] ?? null), "oxactions__oxactivefrom", [], "any", false, false, false, 93), "value", [], "any", false, false, false, 93), "html", null, true);
        echo "</a></div></td>
    <td valign=\"top\" class=\"";
        // line 94
        echo twig_escape_filter($this->env, ($context["listclass"] ?? null), "html", null, true);
        echo "\" height=\"15\"><div class=\"listitemfloating\">
        <a href=\"Javascript:top.oxid.admin.editThis('";
        // line 95
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["listitem"] ?? null), "oxactions__oxid", [], "any", false, false, false, 95), "value", [], "any", false, false, false, 95), "html", null, true);
        echo "');\" class=\"";
        echo twig_escape_filter($this->env, ($context["listclass"] ?? null), "html", null, true);
        echo "\">
            ";
        // line 96
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["listitem"] ?? null), "oxactions__oxtype", [], "any", false, false, false, 96), "value", [], "any", false, false, false, 96) == 3)) {
            // line 97
            echo "                ";
            echo $this->extensions['OxidEsales\Twig\Extensions\TranslateExtension']->translate(["ident" => "PROMOTIONS_MAIN_TYPE_BANNER"]);
            echo "
            ";
        } elseif ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 98
($context["listitem"] ?? null), "oxactions__oxtype", [], "any", false, false, false, 98), "value", [], "any", false, false, false, 98) == 2)) {
            // line 99
            echo "                ";
            echo $this->extensions['OxidEsales\Twig\Extensions\TranslateExtension']->translate(["ident" => "PROMOTIONS_MAIN_TYPE_PROMO"]);
            echo "
            ";
        } else {
            // line 101
            echo "                ";
            echo $this->extensions['OxidEsales\Twig\Extensions\TranslateExtension']->translate(["ident" => "PROMOTIONS_MAIN_TYPE_ACTION"]);
            echo "
            ";
        }
        // line 103
        echo "        </a></div></td>
    <td class=\"";
        // line 104
        echo twig_escape_filter($this->env, ($context["listclass"] ?? null), "html", null, true);
        echo "\">";
        if ((( !twig_get_attribute($this->env, $this->source, ($context["listitem"] ?? null), "isOx", [], "method", false, false, false, 104) &&  !($context["readonly"] ?? null)) && (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["listitem"] ?? null), "oxactions__oxtype", [], "any", false, false, false, 104), "value", [], "any", false, false, false, 104) > 0))) {
            echo "<a href=\"Javascript:top.oxid.admin.deleteThis('";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["listitem"] ?? null), "oxactions__oxid", [], "any", false, false, false, 104), "value", [], "any", false, false, false, 104), "html", null, true);
            echo "');\" class=\"delete\" id=\"del.";
            echo twig_escape_filter($this->env, ($context["_cnt"] ?? null), "html", null, true);
            echo "\" ";
            $this->loadTemplate("@__main__/help.html.twig", "@__main__/actions_list.html.twig", 104)->display(twig_array_merge($context, ["helpid" => "item_delete"]));
            echo "></a>";
        }
        echo "</td>
    ";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@__main__/actions_list.html.twig";
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
        return array (  415 => 104,  412 => 103,  406 => 101,  400 => 99,  398 => 98,  393 => 97,  391 => 96,  385 => 95,  381 => 94,  371 => 93,  361 => 92,  353 => 91,  349 => 90,  342 => 70,  338 => 69,  334 => 68,  329 => 67,  325 => 66,  316 => 59,  310 => 56,  307 => 55,  292 => 53,  288 => 52,  276 => 47,  268 => 46,  260 => 45,  256 => 44,  249 => 39,  245 => 38,  236 => 30,  232 => 29,  220 => 126,  216 => 125,  212 => 124,  208 => 123,  202 => 119,  200 => 118,  194 => 114,  192 => 113,  177 => 110,  174 => 108,  172 => 107,  169 => 106,  167 => 90,  164 => 89,  161 => 88,  158 => 87,  155 => 86,  152 => 85,  149 => 84,  146 => 83,  143 => 82,  141 => 81,  135 => 79,  132 => 78,  115 => 77,  113 => 76,  111 => 75,  107 => 73,  105 => 66,  101 => 64,  99 => 38,  95 => 36,  93 => 29,  89 => 27,  87 => 26,  83 => 25,  74 => 18,  68 => 16,  66 => 15,  58 => 9,  54 => 7,  50 => 5,  48 => 4,  45 => 3,  43 => 2,  41 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@__main__/actions_list.html.twig", "/var/www/html/source/Application/views/admin_twig/tpl/actions_list.html.twig");
    }
}
