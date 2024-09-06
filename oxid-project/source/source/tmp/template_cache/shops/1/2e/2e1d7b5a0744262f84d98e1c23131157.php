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

/* @__main__/pricealarm_list.html.twig */
class __TwigTemplate_cb02fbd84a885d32677ae4b48960f94d extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'admin_pricealarm_list_colgroup' => [$this, 'block_admin_pricealarm_list_colgroup'],
            'admin_pricealarm_list_filter' => [$this, 'block_admin_pricealarm_list_filter'],
            'admin_pricealarm_list_sorting' => [$this, 'block_admin_pricealarm_list_sorting'],
            'admin_pricealarm_list_item' => [$this, 'block_admin_pricealarm_list_item'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        $this->loadTemplate("@__main__/headitem.html.twig", "@__main__/pricealarm_list.html.twig", 1)->display(twig_array_merge($context, ["title" => $this->extensions['OxidEsales\Twig\Extensions\Filters\TranslateExtension']->translate("GENERAL_ADMIN_TITLE"), "box" => "list"]));
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
        // line 24
        echo twig_get_attribute($this->env, $this->source, ($context["oViewConf"] ?? null), "getSelfLink", [], "method", false, false, false, 24);
        echo "\" method=\"post\">
";
        // line 25
        $this->loadTemplate("@__main__/_formparams.html.twig", "@__main__/pricealarm_list.html.twig", 25)->display(twig_array_merge($context, ["cl" => "pricealarm_list", "lstrt" => ($context["lstrt"] ?? null), "actedit" => ($context["actedit"] ?? null), "oxid" => ($context["oxid"] ?? null), "fnc" => "", "language" => ($context["actlang"] ?? null), "editlanguage" => ($context["actlang"] ?? null)]));
        // line 26
        echo "<table cellspacing=\"0\" cellpadding=\"0\" border=\"0\" width=\"100%\">
<colgroup>
    ";
        // line 28
        $this->displayBlock('admin_pricealarm_list_colgroup', $context, $blocks);
        // line 38
        echo "</colgroup>
<tr class=\"listitem\">
    ";
        // line 40
        $this->displayBlock('admin_pricealarm_list_filter', $context, $blocks);
        // line 78
        echo "</tr>
<tr>
    ";
        // line 80
        $this->displayBlock('admin_pricealarm_list_sorting', $context, $blocks);
        // line 89
        echo "</tr>

";
        // line 91
        $context["blWhite"] = "";
        // line 92
        $context["_cnt"] = 0;
        // line 93
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
            // line 94
            echo "    ";
            $context["_cnt"] = (($context["_cnt"] ?? null) + 1);
            // line 95
            echo "    <tr id=\"row.";
            echo twig_escape_filter($this->env, ($context["_cnt"] ?? null), "html", null, true);
            echo "\">
    ";
            // line 96
            $this->displayBlock('admin_pricealarm_list_item', $context, $blocks);
            // line 116
            echo "</tr>
";
            // line 117
            if ((($context["blWhite"] ?? null) == "2")) {
                // line 118
                $context["blWhite"] = "";
            } else {
                // line 120
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
        // line 123
        $this->loadTemplate("@__main__/pagenavisnippet.html.twig", "@__main__/pricealarm_list.html.twig", 123)->display(twig_array_merge($context, ["colspan" => "8"]));
        // line 124
        echo "</table>
</form>
</div>

";
        // line 128
        $this->loadTemplate("@__main__/pagetabsnippet.html.twig", "@__main__/pricealarm_list.html.twig", 128)->display($context);
        // line 129
        echo "
<script type=\"text/javascript\">
if (parent.parent)
{   parent.parent.sShopTitle   = \"";
        // line 132
        echo addslashes(twig_get_attribute($this->env, $this->source, ($context["actshopobj"] ?? null), "oxshops__oxname", [], "any", false, false, false, 132));
        echo "\";
    parent.parent.sMenuItem    = \"";
        // line 133
        echo $this->extensions['OxidEsales\Twig\Extensions\TranslateExtension']->translate(["ident" => "PRICEALARM_LIST_MENUITEM"]);
        echo "\";
    parent.parent.sMenuSubItem = \"";
        // line 134
        echo $this->extensions['OxidEsales\Twig\Extensions\TranslateExtension']->translate(["ident" => "PRICEALARM_LIST_MENUSUBITEM"]);
        echo "\";
    parent.parent.sWorkArea    = \"";
        // line 135
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
    public function block_admin_pricealarm_list_colgroup($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 29
        echo "        <col width=\"15%\">
        <col width=\"15%\">
        <col width=\"10%\">
        <col width=\"10%\">
        <col width=\"30%\">
        <col width=\"10%\">
        <col width=\"8%\">
        <col width=\"2%\">
    ";
    }

    // line 40
    public function block_admin_pricealarm_list_filter($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 41
        echo "        <td valign=\"top\" class=\"listfilter first\" height=\"20\">
            <div class=\"r1\"><div class=\"b1\">
            <input class=\"listedit\" type=\"text\" size=\"20\" maxlength=\"128\" name=\"where[oxpricealarm][oxemail]\" value=\"";
        // line 43
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["where"] ?? null), "oxpricealarm", [], "any", false, false, false, 43), "oxemail", [], "any", false, false, false, 43), "html", null, true);
        echo "\">
            </div></div>
        </td>
        <td valign=\"top\" class=\"listfilter\" height=\"20\">
            <div class=\"r1\"><div class=\"b1\">
            <input class=\"listedit\" type=\"text\" size=\"20\" maxlength=\"128\" name=\"where[oxuser][oxlname]\" value=\"";
        // line 48
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["where"] ?? null), "oxuser", [], "any", false, false, false, 48), "oxlname", [], "any", false, false, false, 48), "html", null, true);
        echo "\">
            </div></div>
        </td>
        <td valign=\"top\" class=\"listfilter\" height=\"20\">
            <div class=\"r1\"><div class=\"b1\">
            <input class=\"listedit\" type=\"text\" size=\"20\" maxlength=\"128\" name=\"where[oxpricealarm][oxinsert]\" value=\"";
        // line 53
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["where"] ?? null), "oxpricealarm", [], "any", false, false, false, 53), "oxinsert", [], "any", false, false, false, 53), "html", null, true);
        echo "\">
            </div></div>
        </td>
        <td valign=\"top\" class=\"listfilter\" height=\"20\">
            <div class=\"r1\"><div class=\"b1\">
            <input class=\"listedit\" type=\"text\" size=\"20\" maxlength=\"128\" name=\"where[oxpricealarm][oxsended]\" value=\"";
        // line 58
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["where"] ?? null), "oxpricealarm", [], "any", false, false, false, 58), "oxsended", [], "any", false, false, false, 58), "html", null, true);
        echo "\">
            </div></div>
        </td>
        <td valign=\"top\" class=\"listfilter\" height=\"20\">
            <div class=\"r1\"><div class=\"b1\">
            <input class=\"listedit\" type=\"text\" size=\"20\" maxlength=\"128\" name=\"where[oxarticles][oxtitle]\" value=\"";
        // line 63
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["where"] ?? null), "oxarticles", [], "any", false, false, false, 63), "oxtitle", [], "any", false, false, false, 63), "html", null, true);
        echo "\">
            </div></div>
        </td>
        <td valign=\"top\" class=\"listfilter\" height=\"20\">
            <div class=\"r1\"><div class=\"b1\">
            <input class=\"listedit\" type=\"text\" size=\"5\" maxlength=\"128\" name=\"where[oxpricealarm][oxprice]\" value=\"";
        // line 68
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["where"] ?? null), "oxpricealarm", [], "any", false, false, false, 68), "oxprice", [], "any", false, false, false, 68), "html", null, true);
        echo "\">
            </div></div>
        </td>
        <td valign=\"top\" class=\"listfilter\" height=\"20\" ";
        // line 71
        if ((count(($context["mylist"] ?? null)) > 0)) {
            echo "colspan=\"2\"";
        }
        echo ">
            <div class=\"r1\"><div class=\"b1\">
            <div class=\"find\"><input class=\"listedit\" type=\"submit\" name=\"submitit\" value=\"";
        // line 73
        echo $this->extensions['OxidEsales\Twig\Extensions\TranslateExtension']->translate(["ident" => "GENERAL_SEARCH"]);
        echo "\"></div>
            <input class=\"listedit\" type=\"text\" size=\"5\" maxlength=\"128\" name=\"where[oxarticles][oxprice]\" value=\"";
        // line 74
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["where"] ?? null), "oxarticles", [], "any", false, false, false, 74), "oxprice", [], "any", false, false, false, 74), "html", null, true);
        echo "\">
            </div></div>
        </td>
    ";
    }

    // line 80
    public function block_admin_pricealarm_list_sorting($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 81
        echo "        <td class=\"listheader first\" height=\"15\">&nbsp;<a href=\"Javascript:top.oxid.admin.setSorting( document.search, 'oxpricealarm', 'oxemail', 'asc');document.search.submit();\" class=\"listheader\">";
        echo $this->extensions['OxidEsales\Twig\Extensions\TranslateExtension']->translate(["ident" => "GENERAL_EMAIL"]);
        echo "</a></td>
        <td class=\"listheader\" height=\"15\"><a href=\"Javascript:top.oxid.admin.setSorting( document.search, 'oxuser', 'oxlname', 'asc');top.oxid.admin.setSorting( document.search, 'oxuser', 'oxfname', 'asc');document.search.submit();\" class=\"listheader\">";
        // line 82
        echo $this->extensions['OxidEsales\Twig\Extensions\TranslateExtension']->translate(["ident" => "GENERAL_NAME"]);
        echo "</a></td>
        <td class=\"listheader\" height=\"15\"><a href=\"Javascript:top.oxid.admin.setSorting( document.search, 'oxpricealarm', 'oxinsert', 'asc');document.search.submit();\" class=\"listheader\">";
        // line 83
        echo $this->extensions['OxidEsales\Twig\Extensions\TranslateExtension']->translate(["ident" => "PRICEALARM_LIST_CONFIRMDATE"]);
        echo "</a></td>
        <td class=\"listheader\" height=\"15\"><a href=\"Javascript:top.oxid.admin.setSorting( document.search, 'oxpricealarm', 'oxsended', 'asc');document.search.submit();\" class=\"listheader\">";
        // line 84
        echo $this->extensions['OxidEsales\Twig\Extensions\TranslateExtension']->translate(["ident" => "PRICEALARM_LIST_SENDDATE"]);
        echo "</a></td>
        <td class=\"listheader\" height=\"15\"><a href=\"Javascript:top.oxid.admin.setSorting( document.search, 'oxarticles', 'oxtitle', 'asc');document.search.submit();\" class=\"listheader\">";
        // line 85
        echo $this->extensions['OxidEsales\Twig\Extensions\TranslateExtension']->translate(["ident" => "GENERAL_ITEM"]);
        echo "</a></td>
        <td class=\"listheader\" height=\"15\"><a href=\"Javascript:top.oxid.admin.setSorting( document.search, 'oxpricealarm', 'oxprice', 'asc');document.search.submit();\" class=\"listheader\">";
        // line 86
        echo $this->extensions['OxidEsales\Twig\Extensions\TranslateExtension']->translate(["ident" => "PRICEALARM_LIST_CUSTOMERSPRICE"]);
        echo "</a></td>
        <td class=\"listheader\" height=\"15\"  ";
        // line 87
        if ((count(($context["mylist"] ?? null)) > 0)) {
            echo "colspan=\"2\"";
        }
        echo ">&nbsp;<a href=\"Javascript:top.oxid.admin.setSorting( document.search, 'oxarticles', 'oxprice', 'asc');document.search.submit();\" class=\"listheader\">";
        echo $this->extensions['OxidEsales\Twig\Extensions\TranslateExtension']->translate(["ident" => "PRICEALARM_LIST_STANDARTPRICE"]);
        echo "</a></td>
    ";
    }

    // line 96
    public function block_admin_pricealarm_list_item($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 97
        echo "        ";
        if ((twig_get_attribute($this->env, $this->source, ($context["listitem"] ?? null), "blacklist", [], "any", false, false, false, 97) == 1)) {
            // line 98
            echo "            ";
            $context["listclass"] = "listitem3";
            // line 99
            echo "        ";
        } else {
            // line 100
            echo "            ";
            $context["listclass"] = ("listitem" . ($context["blWhite"] ?? null));
            // line 101
            echo "        ";
        }
        // line 102
        echo "        ";
        if ((twig_get_attribute($this->env, $this->source, ($context["listitem"] ?? null), "getId", [], "method", false, false, false, 102) == ($context["oxid"] ?? null))) {
            // line 103
            echo "            ";
            $context["listclass"] = "listitem4";
            // line 104
            echo "        ";
        }
        // line 105
        echo "        <td valign=\"top\" class=\"";
        echo twig_escape_filter($this->env, ($context["listclass"] ?? null), "html", null, true);
        echo "\" height=\"15\"><div class=\"listitemfloating\"><a href=\"Javascript:top.oxid.admin.editThis('";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["listitem"] ?? null), "oxpricealarm__oxid", [], "any", false, false, false, 105), "value", [], "any", false, false, false, 105), "html", null, true);
        echo "');\" class=\"";
        if ((twig_get_attribute($this->env, $this->source, ($context["listitem"] ?? null), "getPriceAlarmStatus", [], "method", false, false, false, 105) == 1)) {
            echo "listitemred";
        } elseif ((twig_get_attribute($this->env, $this->source, ($context["listitem"] ?? null), "getPriceAlarmStatus", [], "method", false, false, false, 105) == 2)) {
            echo "listitemgreen";
        } else {
            echo twig_escape_filter($this->env, ($context["listclass"] ?? null), "html", null, true);
        }
        echo "\">";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["listitem"] ?? null), "oxpricealarm__oxemail", [], "any", false, false, false, 105), "value", [], "any", false, false, false, 105), "html", null, true);
        echo "</a></div></td>
        <td valign=\"top\" class=\"";
        // line 106
        echo twig_escape_filter($this->env, ($context["listclass"] ?? null), "html", null, true);
        echo "\" height=\"15\"><div class=\"listitemfloating\"><a href=\"Javascript:top.oxid.admin.editThis('";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["listitem"] ?? null), "oxpricealarm__oxid", [], "any", false, false, false, 106), "value", [], "any", false, false, false, 106), "html", null, true);
        echo "');\" class=\"";
        if ((twig_get_attribute($this->env, $this->source, ($context["listitem"] ?? null), "getPriceAlarmStatus", [], "method", false, false, false, 106) == 1)) {
            echo "listitemred";
        } elseif ((twig_get_attribute($this->env, $this->source, ($context["listitem"] ?? null), "getPriceAlarmStatus", [], "method", false, false, false, 106) == 2)) {
            echo "listitemgreen";
        } else {
            echo twig_escape_filter($this->env, ($context["listclass"] ?? null), "html", null, true);
        }
        echo "\">";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["listitem"] ?? null), "oxpricealarm__userlname", [], "any", false, false, false, 106), "value", [], "any", false, false, false, 106), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["listitem"] ?? null), "oxpricealarm__userfname", [], "any", false, false, false, 106), "value", [], "any", false, false, false, 106), "html", null, true);
        echo "</a></div></td>
        <td valign=\"top\" class=\"";
        // line 107
        echo twig_escape_filter($this->env, ($context["listclass"] ?? null), "html", null, true);
        echo "\" height=\"15\"><div class=\"listitemfloating\"><a href=\"Javascript:top.oxid.admin.editThis('";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["listitem"] ?? null), "oxpricealarm__oxid", [], "any", false, false, false, 107), "value", [], "any", false, false, false, 107), "html", null, true);
        echo "');\" class=\"";
        if ((twig_get_attribute($this->env, $this->source, ($context["listitem"] ?? null), "getPriceAlarmStatus", [], "method", false, false, false, 107) == 1)) {
            echo "listitemred";
        } elseif ((twig_get_attribute($this->env, $this->source, ($context["listitem"] ?? null), "getPriceAlarmStatus", [], "method", false, false, false, 107) == 2)) {
            echo "listitemgreen";
        } else {
            echo twig_escape_filter($this->env, ($context["listclass"] ?? null), "html", null, true);
        }
        echo "\">";
        echo twig_escape_filter($this->env, $this->extensions['OxidEsales\Twig\Extensions\Filters\FormatDateExtension']->formatDate(twig_get_attribute($this->env, $this->source, ($context["listitem"] ?? null), "oxpricealarm__oxinsert", [], "any", false, false, false, 107)), "html", null, true);
        echo "</a></div></td>
        <td valign=\"top\" class=\"";
        // line 108
        echo twig_escape_filter($this->env, ($context["listclass"] ?? null), "html", null, true);
        echo "\" height=\"15\"><div class=\"listitemfloating\"><a href=\"Javascript:top.oxid.admin.editThis('";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["listitem"] ?? null), "oxpricealarm__oxid", [], "any", false, false, false, 108), "value", [], "any", false, false, false, 108), "html", null, true);
        echo "');\" class=\"";
        if ((twig_get_attribute($this->env, $this->source, ($context["listitem"] ?? null), "getPriceAlarmStatus", [], "method", false, false, false, 108) == 1)) {
            echo "listitemred";
        } elseif ((twig_get_attribute($this->env, $this->source, ($context["listitem"] ?? null), "getPriceAlarmStatus", [], "method", false, false, false, 108) == 2)) {
            echo "listitemgreen";
        } else {
            echo twig_escape_filter($this->env, ($context["listclass"] ?? null), "html", null, true);
        }
        echo "\">";
        echo twig_escape_filter($this->env, $this->extensions['OxidEsales\Twig\Extensions\Filters\FormatDateExtension']->formatDate(twig_get_attribute($this->env, $this->source, ($context["listitem"] ?? null), "oxpricealarm__oxsended", [], "any", false, false, false, 108)), "html", null, true);
        echo "</a></div></td>
        <td valign=\"top\" class=\"";
        // line 109
        echo twig_escape_filter($this->env, ($context["listclass"] ?? null), "html", null, true);
        echo "\" height=\"15\"><div class=\"listitemfloating\"><a href=\"Javascript:top.oxid.admin.editThis('";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["listitem"] ?? null), "oxpricealarm__oxid", [], "any", false, false, false, 109), "value", [], "any", false, false, false, 109), "html", null, true);
        echo "');\" class=\"";
        if ((twig_get_attribute($this->env, $this->source, ($context["listitem"] ?? null), "getPriceAlarmStatus", [], "method", false, false, false, 109) == 1)) {
            echo "listitemred";
        } elseif ((twig_get_attribute($this->env, $this->source, ($context["listitem"] ?? null), "getPriceAlarmStatus", [], "method", false, false, false, 109) == 2)) {
            echo "listitemgreen";
        } else {
            echo twig_escape_filter($this->env, ($context["listclass"] ?? null), "html", null, true);
        }
        echo "\">";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["listitem"] ?? null), "getTitle", [], "method", false, false, false, 109), "html", null, true);
        echo "</a></div></td>
        <td valign=\"top\" class=\"";
        // line 110
        echo twig_escape_filter($this->env, ($context["listclass"] ?? null), "html", null, true);
        echo "\" height=\"15\"><div class=\"listitemfloating\"><a href=\"Javascript:top.oxid.admin.editThis('";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["listitem"] ?? null), "oxpricealarm__oxid", [], "any", false, false, false, 110), "value", [], "any", false, false, false, 110), "html", null, true);
        echo "');\" class=\"";
        if ((twig_get_attribute($this->env, $this->source, ($context["listitem"] ?? null), "getPriceAlarmStatus", [], "method", false, false, false, 110) == 1)) {
            echo "listitemred";
        } elseif ((twig_get_attribute($this->env, $this->source, ($context["listitem"] ?? null), "getPriceAlarmStatus", [], "method", false, false, false, 110) == 2)) {
            echo "listitemgreen";
        } else {
            echo twig_escape_filter($this->env, ($context["listclass"] ?? null), "html", null, true);
        }
        echo "\">";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["listitem"] ?? null), "getFProposedPrice", [], "method", false, false, false, 110), "html", null, true);
        echo "&nbsp;";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["listitem"] ?? null), "oxpricealarm__oxcurrency", [], "any", false, false, false, 110), "value", [], "any", false, false, false, 110), "html", null, true);
        echo "</a></div></td>
        <td valign=\"top\" class=\"";
        // line 111
        echo twig_escape_filter($this->env, ($context["listclass"] ?? null), "html", null, true);
        echo "\" height=\"15\"><div class=\"listitemfloating\"><a href=\"Javascript:top.oxid.admin.editThis('";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["listitem"] ?? null), "oxpricealarm__oxid", [], "any", false, false, false, 111), "value", [], "any", false, false, false, 111), "html", null, true);
        echo "');\" class=\"";
        if ((twig_get_attribute($this->env, $this->source, ($context["listitem"] ?? null), "getPriceAlarmStatus", [], "method", false, false, false, 111) == 1)) {
            echo "listitemred";
        } elseif ((twig_get_attribute($this->env, $this->source, ($context["listitem"] ?? null), "getPriceAlarmStatus", [], "method", false, false, false, 111) == 2)) {
            echo "listitemgreen";
        } else {
            echo twig_escape_filter($this->env, ($context["listclass"] ?? null), "html", null, true);
        }
        echo "\">";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["listitem"] ?? null), "getFPrice", [], "method", false, false, false, 111), "html", null, true);
        echo "&nbsp;";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["listitem"] ?? null), "oxpricealarm__oxcurrency", [], "any", false, false, false, 111), "value", [], "any", false, false, false, 111), "html", null, true);
        echo "</a></div></td>
        <td class=\"";
        // line 112
        echo twig_escape_filter($this->env, ($context["listclass"] ?? null), "html", null, true);
        echo "\">
            ";
        // line 113
        $this->loadTemplate("@__main__/include/price_alarm_list_delete_button.html.twig", "@__main__/pricealarm_list.html.twig", 113)->display($context);
        // line 114
        echo "        </td>
    ";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@__main__/pricealarm_list.html.twig";
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
        return array (  483 => 114,  481 => 113,  477 => 112,  459 => 111,  441 => 110,  425 => 109,  409 => 108,  393 => 107,  375 => 106,  358 => 105,  355 => 104,  352 => 103,  349 => 102,  346 => 101,  343 => 100,  340 => 99,  337 => 98,  334 => 97,  330 => 96,  320 => 87,  316 => 86,  312 => 85,  308 => 84,  304 => 83,  300 => 82,  295 => 81,  291 => 80,  283 => 74,  279 => 73,  272 => 71,  266 => 68,  258 => 63,  250 => 58,  242 => 53,  234 => 48,  226 => 43,  222 => 41,  218 => 40,  206 => 29,  202 => 28,  191 => 135,  187 => 134,  183 => 133,  179 => 132,  174 => 129,  172 => 128,  166 => 124,  164 => 123,  149 => 120,  146 => 118,  144 => 117,  141 => 116,  139 => 96,  134 => 95,  131 => 94,  114 => 93,  112 => 92,  110 => 91,  106 => 89,  104 => 80,  100 => 78,  98 => 40,  94 => 38,  92 => 28,  88 => 26,  86 => 25,  82 => 24,  74 => 18,  68 => 16,  66 => 15,  58 => 9,  54 => 7,  50 => 5,  48 => 4,  45 => 3,  43 => 2,  41 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@__main__/pricealarm_list.html.twig", "/var/www/html/source/Application/views/admin_twig/tpl/pricealarm_list.html.twig");
    }
}
