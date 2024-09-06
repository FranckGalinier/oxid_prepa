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

/* @__main__/payment_list.html.twig */
class __TwigTemplate_603797732541f40a072167b80ddd2290 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'admin_payment_list_colgroup' => [$this, 'block_admin_payment_list_colgroup'],
            'admin_payment_list_filter' => [$this, 'block_admin_payment_list_filter'],
            'admin_payment_list_sorting' => [$this, 'block_admin_payment_list_sorting'],
            'admin_payment_list_item' => [$this, 'block_admin_payment_list_item'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        $this->loadTemplate("@__main__/headitem.html.twig", "@__main__/payment_list.html.twig", 1)->display(twig_array_merge($context, ["title" => $this->extensions['OxidEsales\Twig\Extensions\Filters\TranslateExtension']->translate("GENERAL_ADMIN_TITLE"), "box" => "list"]));
        // line 2
        $context["where"] = twig_get_attribute($this->env, $this->source, ($context["oView"] ?? null), "getListFilter", [], "method", false, false, false, 2);
        // line 3
        echo "
";
        // line 4
        if (((($context["shopid"] ?? null) != "1") || ($context["readonly"] ?? null))) {
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
        $this->loadTemplate("@__main__/_formparams.html.twig", "@__main__/payment_list.html.twig", 26)->display(twig_array_merge($context, ["cl" => "payment_list", "lstrt" => ($context["lstrt"] ?? null), "actedit" => ($context["actedit"] ?? null), "oxid" => ($context["oxid"] ?? null), "fnc" => "", "language" => ($context["actlang"] ?? null), "editlanguage" => ($context["actlang"] ?? null)]));
        // line 27
        echo "<table cellspacing=\"0\" cellpadding=\"0\" border=\"0\" width=\"100%\">
<colgroup>
    ";
        // line 29
        $this->displayBlock('admin_payment_list_colgroup', $context, $blocks);
        // line 34
        echo "</colgroup>
<tr class=\"listitem\">
    ";
        // line 36
        $this->displayBlock('admin_payment_list_filter', $context, $blocks);
        // line 55
        echo "</tr>
<tr>
    ";
        // line 57
        $this->displayBlock('admin_payment_list_sorting', $context, $blocks);
        // line 61
        echo "</tr>

";
        // line 63
        $context["blWhite"] = "";
        // line 64
        $context["_cnt"] = 0;
        // line 65
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
            // line 66
            echo "    ";
            $context["_cnt"] = (($context["_cnt"] ?? null) + 1);
            // line 67
            echo "    <tr id=\"row.";
            echo twig_escape_filter($this->env, ($context["_cnt"] ?? null), "html", null, true);
            echo "\">
    ";
            // line 68
            $this->displayBlock('admin_payment_list_item', $context, $blocks);
            // line 85
            echo "</tr>
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
        $this->loadTemplate("@__main__/pagenavisnippet.html.twig", "@__main__/payment_list.html.twig", 92)->display(twig_array_merge($context, ["colspan" => "3"]));
        // line 93
        echo "</table>
</form>
</div>


";
        // line 98
        $this->loadTemplate("@__main__/pagetabsnippet.html.twig", "@__main__/payment_list.html.twig", 98)->display($context);
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
        echo $this->extensions['OxidEsales\Twig\Extensions\TranslateExtension']->translate(["ident" => "PAYMENT_LIST_MENUITEM"]);
        echo "\";
    parent.parent.sMenuSubItem = \"";
        // line 104
        echo $this->extensions['OxidEsales\Twig\Extensions\TranslateExtension']->translate(["ident" => "PAYMENT_LIST_MENUSUBITEM"]);
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

    // line 29
    public function block_admin_payment_list_colgroup($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 30
        echo "    \t <col width=\"3%\">
        <col width=\"86%\">
        <col width=\"2%\">
    ";
    }

    // line 36
    public function block_admin_payment_list_filter($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 37
        echo "    \t <td valign=\"top\" class=\"listfilter first\" align=\"right\">
                <div class=\"r1\"><div class=\"b1\">&nbsp;</div></div>
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
        echo "\">
            </div>

            <input class=\"listedit\" type=\"text\" size=\"60\" maxlength=\"128\" name=\"where[oxpayments][oxdesc]\" value=\"";
        // line 51
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["where"] ?? null), "oxpayments", [], "any", false, false, false, 51), "oxdesc", [], "any", false, false, false, 51), "html", null, true);
        echo "\">
            </div></div>
        </td>
    ";
    }

    // line 57
    public function block_admin_payment_list_sorting($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 58
        echo "    \t<td class=\"listheader first\" height=\"15\" width=\"30\" align=\"center\"><a href=\"Javascript:top.oxid.admin.setSorting( document.search, 'oxpayments', 'oxactive', 'asc');document.search.submit();\" class=\"listheader\">";
        echo $this->extensions['OxidEsales\Twig\Extensions\TranslateExtension']->translate(["ident" => "GENERAL_ACTIVTITLE"]);
        echo "</a></td>
        <td class=\"listheader\" height=\"15\" colspan=\"2\">&nbsp;<a href=\"Javascript:top.oxid.admin.setSorting( document.search, 'oxpayments', 'oxdesc', 'asc');document.search.submit();\" class=\"listheader\">";
        // line 59
        echo $this->extensions['OxidEsales\Twig\Extensions\TranslateExtension']->translate(["ident" => "GENERAL_NAME"]);
        echo "</a></td>
    ";
    }

    // line 68
    public function block_admin_payment_list_item($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 69
        echo "        ";
        if ((twig_get_attribute($this->env, $this->source, ($context["listitem"] ?? null), "blacklist", [], "any", false, false, false, 69) == 1)) {
            // line 70
            echo "            ";
            $context["listclass"] = "listitem3";
            // line 71
            echo "        ";
        } else {
            // line 72
            echo "            ";
            $context["listclass"] = ("listitem" . ($context["blWhite"] ?? null));
            // line 73
            echo "        ";
        }
        // line 74
        echo "        ";
        if ((twig_get_attribute($this->env, $this->source, ($context["listitem"] ?? null), "getId", [], "method", false, false, false, 74) == ($context["oxid"] ?? null))) {
            // line 75
            echo "            ";
            $context["listclass"] = "listitem4";
            // line 76
            echo "        ";
        }
        // line 77
        echo "        <td valign=\"top\" class=\"";
        echo twig_escape_filter($this->env, ($context["listclass"] ?? null), "html", null, true);
        echo " payment_active";
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["listitem"] ?? null), "oxpayments__oxactive", [], "any", false, false, false, 77), "value", [], "any", false, false, false, 77) == 1)) {
            echo " active";
        }
        echo "\" height=\"15\"><div class=\"listitemfloating\">&nbsp</a></div></td>
        <td valign=\"top\" class=\"";
        // line 78
        echo twig_escape_filter($this->env, ($context["listclass"] ?? null), "html", null, true);
        echo " payment_name\" height=\"15\"><div class=\"listitemfloating\">&nbsp;<a href=\"Javascript:top.oxid.admin.editThis('";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["listitem"] ?? null), "oxpayments__oxid", [], "any", false, false, false, 78), "value", [], "any", false, false, false, 78), "html", null, true);
        echo "');\" class=\"";
        echo twig_escape_filter($this->env, ($context["listclass"] ?? null), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["listitem"] ?? null), "oxpayments__oxdesc", [], "any", false, false, false, 78), "value", [], "any", false, false, false, 78), "html", null, true);
        echo "</a></div></td>
        <td class=\"";
        // line 79
        echo twig_escape_filter($this->env, ($context["listclass"] ?? null), "html", null, true);
        echo "\">
        ";
        // line 80
        if ( !twig_get_attribute($this->env, $this->source, ($context["listitem"] ?? null), "isOx", [], "method", false, false, false, 80)) {
            // line 81
            echo "        ";
            if ((($context["readonly"] ?? null) == "")) {
                echo "<a href=\"Javascript:top.oxid.admin.deleteThis('";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["listitem"] ?? null), "oxpayments__oxid", [], "any", false, false, false, 81), "value", [], "any", false, false, false, 81), "html", null, true);
                echo "');\" class=\"delete\" id=\"del.";
                echo twig_escape_filter($this->env, ($context["_cnt"] ?? null), "html", null, true);
                echo "\" title=\"\" ";
                $this->loadTemplate("@__main__/help.html.twig", "@__main__/payment_list.html.twig", 81)->display(twig_array_merge($context, ["helpid" => "item_delete"]));
                echo "></a>";
            }
            // line 82
            echo "        ";
        }
        // line 83
        echo "        </td>
    ";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@__main__/payment_list.html.twig";
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
        return array (  345 => 83,  342 => 82,  331 => 81,  329 => 80,  325 => 79,  315 => 78,  306 => 77,  303 => 76,  300 => 75,  297 => 74,  294 => 73,  291 => 72,  288 => 71,  285 => 70,  282 => 69,  278 => 68,  272 => 59,  267 => 58,  263 => 57,  255 => 51,  249 => 48,  246 => 47,  231 => 45,  227 => 44,  218 => 37,  214 => 36,  207 => 30,  203 => 29,  193 => 105,  189 => 104,  185 => 103,  181 => 102,  176 => 99,  174 => 98,  167 => 93,  165 => 92,  150 => 89,  147 => 87,  145 => 86,  142 => 85,  140 => 68,  135 => 67,  132 => 66,  115 => 65,  113 => 64,  111 => 63,  107 => 61,  105 => 57,  101 => 55,  99 => 36,  95 => 34,  93 => 29,  89 => 27,  87 => 26,  83 => 25,  74 => 18,  68 => 16,  66 => 15,  58 => 9,  54 => 7,  50 => 5,  48 => 4,  45 => 3,  43 => 2,  41 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@__main__/payment_list.html.twig", "/var/www/html/source/Application/views/admin_twig/tpl/payment_list.html.twig");
    }
}
