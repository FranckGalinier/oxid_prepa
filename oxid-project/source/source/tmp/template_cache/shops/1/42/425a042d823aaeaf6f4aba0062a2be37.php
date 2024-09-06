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

/* @__main__/deliveryset_list.html.twig */
class __TwigTemplate_661f3159a3fa00d311eb4a8b0330f2b9 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'admin_deliveryset_list_colgroup' => [$this, 'block_admin_deliveryset_list_colgroup'],
            'admin_deliveryset_list_filter' => [$this, 'block_admin_deliveryset_list_filter'],
            'admin_deliveryset_list_sorting' => [$this, 'block_admin_deliveryset_list_sorting'],
            'admin_deliveryset_list_item' => [$this, 'block_admin_deliveryset_list_item'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        $this->loadTemplate("@__main__/headitem.html.twig", "@__main__/deliveryset_list.html.twig", 1)->display(twig_array_merge($context, ["title" => $this->extensions['OxidEsales\Twig\Extensions\Filters\TranslateExtension']->translate("GENERAL_ADMIN_TITLE"), "box" => "list"]));
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
        $this->loadTemplate("@__main__/_formparams.html.twig", "@__main__/deliveryset_list.html.twig", 25)->display(twig_array_merge($context, ["cl" => "deliveryset_list", "lstrt" => ($context["lstrt"] ?? null), "actedit" => ($context["actedit"] ?? null), "oxid" => ($context["oxid"] ?? null), "fnc" => "", "language" => ($context["actlang"] ?? null), "editlanguage" => ($context["actlang"] ?? null)]));
        // line 26
        echo "<table cellspacing=\"0\" cellpadding=\"0\" border=\"0\" width=\"100%\">
    <colspan>
        ";
        // line 28
        $this->displayBlock('admin_deliveryset_list_colgroup', $context, $blocks);
        // line 33
        echo "    </colspan>
    <tr class=\"listitem\">
        ";
        // line 35
        $this->displayBlock('admin_deliveryset_list_filter', $context, $blocks);
        // line 53
        echo "    </tr>
    <tr>
        ";
        // line 55
        $this->displayBlock('admin_deliveryset_list_sorting', $context, $blocks);
        // line 59
        echo "    </tr>

";
        // line 61
        $context["blWhite"] = "";
        // line 62
        $context["_cnt"] = 0;
        // line 63
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
            // line 64
            echo "    ";
            $context["_cnt"] = (($context["_cnt"] ?? null) + 1);
            // line 65
            echo "    <tr id=\"row.";
            echo twig_escape_filter($this->env, ($context["_cnt"] ?? null), "html", null, true);
            echo "\">
        ";
            // line 66
            $this->displayBlock('admin_deliveryset_list_item', $context, $blocks);
            // line 83
            echo "    </tr>
";
            // line 84
            if ((($context["blWhite"] ?? null) == "2")) {
                // line 85
                $context["blWhite"] = "";
            } else {
                // line 87
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
        // line 90
        $this->loadTemplate("@__main__/pagenavisnippet.html.twig", "@__main__/deliveryset_list.html.twig", 90)->display(twig_array_merge($context, ["colspan" => "3"]));
        // line 91
        echo "</table>
</form>
</div>

";
        // line 95
        $this->loadTemplate("@__main__/pagetabsnippet.html.twig", "@__main__/deliveryset_list.html.twig", 95)->display($context);
        // line 96
        echo "
<script type=\"text/javascript\">
if (parent.parent)
{   parent.parent.sShopTitle   = \"";
        // line 99
        echo addslashes(twig_get_attribute($this->env, $this->source, ($context["actshopobj"] ?? null), "oxshops__oxname", [], "any", false, false, false, 99));
        echo "\";
    parent.parent.sMenuItem    = \"";
        // line 100
        echo $this->extensions['OxidEsales\Twig\Extensions\TranslateExtension']->translate(["ident" => "DELIVERYSET_LIST_MENUITEM"]);
        echo "\";
    parent.parent.sMenuSubItem = \"";
        // line 101
        echo $this->extensions['OxidEsales\Twig\Extensions\TranslateExtension']->translate(["ident" => "DELIVERYSET_LIST_MENUSUBITEM"]);
        echo "\";
    parent.parent.sWorkArea    = \"";
        // line 102
        echo twig_escape_filter($this->env, ($context["_act"] ?? null), "html", null, true);
        echo "\";
    parent.parent.setTitle();
}
</script>
</body>
</html>";
    }

    // line 28
    public function block_admin_deliveryset_list_colgroup($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 29
        echo "        \t<col width=\"3%\">
            <col width=\"95%\">
            <col width=\"2%\">
        ";
    }

    // line 35
    public function block_admin_deliveryset_list_filter($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 36
        echo "        \t<td valign=\"top\" class=\"listfilter first\" align=\"right\">
                <div class=\"r1\"><div class=\"b1\">&nbsp;</div></div>
        \t</td>
            <td valign=\"top\" class=\"listfilter\" height=\"20\" colspan=\"2\">
            <div class=\"r1\"><div class=\"b1\">
            <div class=\"find\">
                <select name=\"changelang\" class=\"editinput\" onChange=\"Javascript:top.oxid.admin.changeLanguage();\">
                ";
        // line 43
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["lang"]) {
            // line 44
            echo "                <option value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["lang"], "id", [], "any", false, false, false, 44), "html", null, true);
            echo "\" ";
            if (twig_get_attribute($this->env, $this->source, $context["lang"], "selected", [], "any", false, false, false, 44)) {
                echo "SELECTED";
            }
            echo ">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["lang"], "name", [], "any", false, false, false, 44), "html", null, true);
            echo "</option>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['lang'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 46
        echo "                </select>
                <input class=\"listedit\" type=\"submit\" name=\"submitit\" value=\"";
        // line 47
        echo $this->extensions['OxidEsales\Twig\Extensions\TranslateExtension']->translate(["ident" => "GENERAL_SEARCH"]);
        echo "\">
            </div>
            <input class=\"listedit\" type=\"text\" size=\"50\" maxlength=\"128\" name=\"where[oxdeliveryset][oxtitle]\" value=\"";
        // line 49
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["where"] ?? null), "oxdeliveryset", [], "any", false, false, false, 49), "oxtitle", [], "any", false, false, false, 49), "html", null, true);
        echo "\">
            </div></div>
            </td>
        ";
    }

    // line 55
    public function block_admin_deliveryset_list_sorting($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 56
        echo "        \t<td class=\"listheader first\" height=\"15\" width=\"30\" align=\"center\"><a href=\"Javascript:top.oxid.admin.setSorting( document.search, 'oxdeliveryset', 'oxactive', 'asc');document.search.submit();\" class=\"listheader\">";
        echo $this->extensions['OxidEsales\Twig\Extensions\TranslateExtension']->translate(["ident" => "GENERAL_ACTIVTITLE"]);
        echo "</a></td>
            <td class=\"listheader\" height=\"15\" colspan=\"2\">&nbsp;<a href=\"Javascript:top.oxid.admin.setSorting( document.search, 'oxdeliveryset', 'oxtitle', 'asc');document.search.submit();\" class=\"listheader\">";
        // line 57
        echo $this->extensions['OxidEsales\Twig\Extensions\TranslateExtension']->translate(["ident" => "GENERAL_NAME"]);
        echo "</a></td>
        ";
    }

    // line 66
    public function block_admin_deliveryset_list_item($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 67
        echo "            ";
        if ((twig_get_attribute($this->env, $this->source, ($context["listitem"] ?? null), "blacklist", [], "any", false, false, false, 67) == 1)) {
            // line 68
            echo "                ";
            $context["listclass"] = "listitem3";
            // line 69
            echo "            ";
        } else {
            // line 70
            echo "                ";
            $context["listclass"] = ("listitem" . ($context["blWhite"] ?? null));
            // line 71
            echo "            ";
        }
        // line 72
        echo "            ";
        if ((twig_get_attribute($this->env, $this->source, ($context["listitem"] ?? null), "getId", [], "method", false, false, false, 72) == ($context["oxid"] ?? null))) {
            // line 73
            echo "                ";
            $context["listclass"] = "listitem4";
            // line 74
            echo "            ";
        }
        // line 75
        echo "            <td valign=\"top\" class=\"";
        echo twig_escape_filter($this->env, ($context["listclass"] ?? null), "html", null, true);
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["listitem"] ?? null), "oxdeliveryset__oxactive", [], "any", false, false, false, 75), "value", [], "any", false, false, false, 75) == 1)) {
            echo " active";
        }
        echo "\" height=\"15\"><div class=\"listitemfloating\">&nbsp</a></div></td>
            <td valign=\"top\" class=\"";
        // line 76
        echo twig_escape_filter($this->env, ($context["listclass"] ?? null), "html", null, true);
        echo "\" height=\"15\"><div class=\"listitemfloating\">&nbsp;<a href=\"Javascript:top.oxid.admin.editThis('";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["listitem"] ?? null), "oxdeliveryset__oxid", [], "any", false, false, false, 76), "value", [], "any", false, false, false, 76), "html", null, true);
        echo "');\" class=\"";
        echo twig_escape_filter($this->env, ($context["listclass"] ?? null), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["listitem"] ?? null), "oxdeliveryset__oxtitle", [], "any", false, false, false, 76), "value", [], "any", false, false, false, 76), "html", null, true);
        echo "</a></div></td>
            <td class=\"";
        // line 77
        echo twig_escape_filter($this->env, ($context["listclass"] ?? null), "html", null, true);
        echo "\">
              ";
        // line 78
        if ( !($context["readonly"] ?? null)) {
            // line 79
            echo "                  ";
            $this->loadTemplate("@__main__/include/deliveryset_list_item_actions.html.twig", "@__main__/deliveryset_list.html.twig", 79)->display($context);
            // line 80
            echo "              ";
        }
        // line 81
        echo "            </td>
        ";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@__main__/deliveryset_list.html.twig";
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
        return array (  333 => 81,  330 => 80,  327 => 79,  325 => 78,  321 => 77,  311 => 76,  303 => 75,  300 => 74,  297 => 73,  294 => 72,  291 => 71,  288 => 70,  285 => 69,  282 => 68,  279 => 67,  275 => 66,  269 => 57,  264 => 56,  260 => 55,  252 => 49,  247 => 47,  244 => 46,  229 => 44,  225 => 43,  216 => 36,  212 => 35,  205 => 29,  201 => 28,  191 => 102,  187 => 101,  183 => 100,  179 => 99,  174 => 96,  172 => 95,  166 => 91,  164 => 90,  149 => 87,  146 => 85,  144 => 84,  141 => 83,  139 => 66,  134 => 65,  131 => 64,  114 => 63,  112 => 62,  110 => 61,  106 => 59,  104 => 55,  100 => 53,  98 => 35,  94 => 33,  92 => 28,  88 => 26,  86 => 25,  82 => 24,  74 => 18,  68 => 16,  66 => 15,  58 => 9,  54 => 7,  50 => 5,  48 => 4,  45 => 3,  43 => 2,  41 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@__main__/deliveryset_list.html.twig", "/var/www/html/source/Application/views/admin_twig/tpl/deliveryset_list.html.twig");
    }
}
