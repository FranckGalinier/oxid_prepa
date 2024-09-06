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

/* @__main__/order_list.html.twig */
class __TwigTemplate_648946897daaca05d3f2d01e19d2f823 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'admin_order_list_colgroup' => [$this, 'block_admin_order_list_colgroup'],
            'admin_order_list_filter' => [$this, 'block_admin_order_list_filter'],
            'admin_order_list_sorting' => [$this, 'block_admin_order_list_sorting'],
            'admin_order_list_item' => [$this, 'block_admin_order_list_item'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        $this->loadTemplate("@__main__/headitem.html.twig", "@__main__/order_list.html.twig", 1)->display(twig_array_merge($context, ["title" => $this->extensions['OxidEsales\Twig\Extensions\Filters\TranslateExtension']->translate("GENERAL_ADMIN_TITLE"), "box" => "list"]));
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
function StornoThisArticle( sID)
{
    blCheck = confirm(\"";
        // line 14
        echo $this->extensions['OxidEsales\Twig\Extensions\TranslateExtension']->translate(["ident" => "ORDER_LIST_YOUWANTTOSTORNO"]);
        echo "\");
    if( blCheck == true)
    {
        var oSearch = document.getElementById(\"search\");
        oSearch.oxid.value=sID;
        oSearch.fnc.value='cancelOrder';

        var oTransfer = parent.edit.document.getElementById(\"transfer\");
        oTransfer.oxid.value=sID;
        oTransfer.cl.value='";
        // line 23
        echo twig_escape_filter($this->env, ($context["default_edit"] ?? null), "html", null, true);
        echo "';

       //forcing edit frame to reload after submit
       top.forceReloadingEditFrame();

       oSearch.submit();
    }
}
window.onload = function ()
{
    top.reloadEditFrame();
    ";
        // line 34
        if ((($context["updatelist"] ?? null) == 1)) {
            // line 35
            echo "        top.oxid.admin.updateList('";
            echo twig_escape_filter($this->env, ($context["oxid"] ?? null), "html", null, true);
            echo "');
    ";
        }
        // line 37
        echo "}
//-->
</script>

<div id=\"liste\">


<form name=\"search\" id=\"search\" action=\"";
        // line 44
        echo twig_get_attribute($this->env, $this->source, ($context["oViewConf"] ?? null), "getSelfLink", [], "method", false, false, false, 44);
        echo "\" method=\"post\">
";
        // line 45
        $this->loadTemplate("@__main__/_formparams.html.twig", "@__main__/order_list.html.twig", 45)->display(twig_array_merge($context, ["cl" => "order_list", "lstrt" => ($context["lstrt"] ?? null), "actedit" => ($context["actedit"] ?? null), "oxid" => ($context["oxid"] ?? null), "fnc" => "", "language" => ($context["actlang"] ?? null), "editlanguage" => ($context["actlang"] ?? null)]));
        // line 46
        echo "<table cellspacing=\"0\" cellpadding=\"0\" border=\"0\" width=\"100%\">
    <colgroup>
        ";
        // line 48
        $this->displayBlock('admin_order_list_colgroup', $context, $blocks);
        // line 56
        echo "    </colgroup>
    <tr class=\"listitem\">
        ";
        // line 58
        $this->displayBlock('admin_order_list_filter', $context, $blocks);
        // line 100
        echo "    </tr>
    <tr>
        ";
        // line 102
        $this->displayBlock('admin_order_list_sorting', $context, $blocks);
        // line 109
        echo "    </tr>

";
        // line 111
        $context["blWhite"] = "";
        // line 112
        $context["_cnt"] = 0;
        // line 113
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
            // line 114
            echo "    ";
            $context["_cnt"] = (($context["_cnt"] ?? null) + 1);
            // line 115
            echo "    <tr id=\"row.";
            echo twig_escape_filter($this->env, ($context["_cnt"] ?? null), "html", null, true);
            echo "\">

        ";
            // line 117
            $this->displayBlock('admin_order_list_item', $context, $blocks);
            // line 142
            echo "    </tr>
";
            // line 143
            if ((($context["blWhite"] ?? null) == "2")) {
                // line 144
                $context["blWhite"] = "";
            } else {
                // line 146
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
        // line 149
        $this->loadTemplate("@__main__/pagenavisnippet.html.twig", "@__main__/order_list.html.twig", 149)->display(twig_array_merge($context, ["colspan" => "6"]));
        // line 150
        echo "</table>
</form>
</div>

";
        // line 154
        $this->loadTemplate("@__main__/pagetabsnippet.html.twig", "@__main__/order_list.html.twig", 154)->display($context);
        // line 155
        echo "
<script type=\"text/javascript\">
if (parent.parent)
{   parent.parent.sShopTitle   = \"";
        // line 158
        echo addslashes(twig_get_attribute($this->env, $this->source, ($context["actshopobj"] ?? null), "oxshops__oxname", [], "any", false, false, false, 158));
        echo "\";
    parent.parent.sMenuItem    = \"";
        // line 159
        echo $this->extensions['OxidEsales\Twig\Extensions\TranslateExtension']->translate(["ident" => "ORDER_LIST_MENUITEM"]);
        echo "\";
    parent.parent.sMenuSubItem = \"";
        // line 160
        echo $this->extensions['OxidEsales\Twig\Extensions\TranslateExtension']->translate(["ident" => "ORDER_LIST_MENUSUBITEM"]);
        echo "\";
    parent.parent.sWorkArea    = \"";
        // line 161
        echo twig_escape_filter($this->env, ($context["_act"] ?? null), "html", null, true);
        echo "\";
    parent.parent.setTitle();
}
</script>
</body>
</html>

";
    }

    // line 48
    public function block_admin_order_list_colgroup($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 49
        echo "            <col width=\"25%\">
            <col width=\"25%\">
            <col width=\"10%\">
            <col width=\"17%\">
            <col width=\"17%\">
            <col width=\"2%\">
        ";
    }

    // line 58
    public function block_admin_order_list_filter($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 59
        echo "            <td valign=\"top\" class=\"listfilter first\" height=\"20\">
                <div class=\"r1\"><div class=\"b1\">
                <select name=\"folder\" class=\"folderselect\" onChange=\"document.search.submit();\">
                    <option value=\"-1\" style=\"color: #000000;\">";
        // line 62
        echo $this->extensions['OxidEsales\Twig\Extensions\TranslateExtension']->translate(["ident" => "ORDER_LIST_FOLDER_ALL"]);
        echo "</option>
                    ";
        // line 63
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["afolder"] ?? null));
        foreach ($context['_seq'] as $context["field"] => $context["color"]) {
            // line 64
            echo "                    <option value=\"";
            echo twig_escape_filter($this->env, $context["field"], "html", null, true);
            echo "\" ";
            if ((($context["folder"] ?? null) == $context["field"])) {
                echo "SELECTED";
            }
            echo " style=\"color: ";
            echo twig_escape_filter($this->env, $context["color"], "html", null, true);
            echo ";\">";
            echo $this->extensions['OxidEsales\Twig\Extensions\TranslateExtension']->translate(["ident" => $context["field"], "noerror" => true]);
            echo "</option>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['field'], $context['color'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 66
        echo "                </select>
                <input class=\"listedit\" type=\"text\" size=\"15\" maxlength=\"128\" name=\"where[oxorder][oxorderdate]\" value=\"";
        // line 67
        echo twig_escape_filter($this->env, $this->extensions['OxidEsales\Twig\Extensions\Filters\FormatDateExtension']->formatDate(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["where"] ?? null), "oxorder", [], "any", false, false, false, 67), "oxorderdate", [], "any", false, false, false, 67)), "html", null, true);
        echo "\" ";
        $this->loadTemplate("@__main__/help.html.twig", "@__main__/order_list.html.twig", 67)->display(twig_array_merge($context, ["helpid" => "order_date"]));
        echo ">
                </div></div>
            </td>
            <td valign=\"top\" class=\"listfilter\" height=\"20\">
                <div class=\"r1\"><div class=\"b1\">
                <select name=\"addsearchfld\" class=\"folderselect\" >
                    <option value=\"-1\" style=\"color: #000000;\">";
        // line 73
        echo $this->extensions['OxidEsales\Twig\Extensions\TranslateExtension']->translate(["ident" => "ORDER_LIST_PAID"]);
        echo "</option>
                    ";
        // line 74
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["asearch"] ?? null));
        foreach ($context['_seq'] as $context["table"] => $context["desc"]) {
            // line 75
            echo "                    ";
            $context["ident"] = ("ORDER_SEARCH_FIELD_" . $context["desc"]);
            // line 76
            echo "                    ";
            $context["ident"] = twig_upper_filter($this->env, ($context["ident"] ?? null));
            // line 77
            echo "                    <option value=\"";
            echo twig_escape_filter($this->env, $context["table"], "html", null, true);
            echo "\" ";
            if ((($context["addsearchfld"] ?? null) == $context["table"])) {
                echo "SELECTED";
            }
            echo ">";
            echo twig_escape_filter($this->env, $this->extensions['OxidEsales\Twig\Extensions\Filters\TruncateExtension']->truncate($this->extensions['OxidEsales\Twig\Extensions\TranslateExtension']->translate(["ident" => ($context["ident"] ?? null)]), 20, "..", true), "html", null, true);
            echo "</option>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['table'], $context['desc'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 79
        echo "                </select>
                <input class=\"listedit\" type=\"text\" size=\"15\" maxlength=\"128\" name=\"addsearch\" value=\"";
        // line 80
        echo twig_escape_filter($this->env, ($context["addsearch"] ?? null), "html", null, true);
        echo "\">
                </div></div>
            </td>
            <td valign=\"top\" class=\"listfilter\" height=\"20\">
                <div class=\"r1\"><div class=\"b1\">
                <input class=\"listedit\" type=\"text\" size=\"7\" maxlength=\"128\" name=\"where[oxorder][oxordernr]\" value=\"";
        // line 85
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["where"] ?? null), "oxorder", [], "any", false, false, false, 85), "oxordernr", [], "any", false, false, false, 85), "html", null, true);
        echo "\">
                </div></div>
            </td>
            <td valign=\"top\" class=\"listfilter\" height=\"20\">
                <div class=\"r1\"><div class=\"b1\">
                <input class=\"listedit\" type=\"text\" size=\"50\" maxlength=\"128\" name=\"where[oxorder][oxbillfname]\" value=\"";
        // line 90
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["where"] ?? null), "oxorder", [], "any", false, false, false, 90), "oxbillfname", [], "any", false, false, false, 90), "html", null, true);
        echo "\">
                </div></div>
            </td>
            <td valign=\"top\" class=\"listfilter\" height=\"20\" colspan=\"2\" nowrap>
                <div class=\"r1\"><div class=\"b1\">
                <div class=\"find\"><input class=\"listedit\" type=\"submit\" name=\"submitit\" value=\"";
        // line 95
        echo $this->extensions['OxidEsales\Twig\Extensions\TranslateExtension']->translate(["ident" => "GENERAL_SEARCH"]);
        echo "\"></div>
                <input class=\"listedit\" type=\"text\" size=\"50\" maxlength=\"128\" name=\"where[oxorder][oxbilllname]\" value=\"";
        // line 96
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["where"] ?? null), "oxorder", [], "any", false, false, false, 96), "oxbilllname", [], "any", false, false, false, 96), "html", null, true);
        echo "\">
                </div></div>
            </td>
        ";
    }

    // line 102
    public function block_admin_order_list_sorting($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 103
        echo "            <td class=\"listheader first\" height=\"15\">&nbsp;<a href=\"Javascript:top.oxid.admin.setSorting( document.search, 'oxorder', 'oxorderdate', 'asc');document.search.submit();\" class=\"listheader\">";
        echo $this->extensions['OxidEsales\Twig\Extensions\TranslateExtension']->translate(["ident" => "ORDER_LIST_ORDERTIME"]);
        echo "</a></td>
            <td class=\"listheader\" height=\"15\"><a href=\"Javascript:top.oxid.admin.setSorting( document.search, 'oxorder', 'oxpaid', 'asc');document.search.submit();\" class=\"listheader\">";
        // line 104
        echo $this->extensions['OxidEsales\Twig\Extensions\TranslateExtension']->translate(["ident" => "ORDER_LIST_PAID"]);
        echo "</a></td>
            <td class=\"listheader\" height=\"15\"><a href=\"Javascript:top.oxid.admin.setSorting( document.search, 'oxorder', 'oxordernr', 'asc');document.search.submit();\" class=\"listheader\">";
        // line 105
        echo $this->extensions['OxidEsales\Twig\Extensions\TranslateExtension']->translate(["ident" => "GENERAL_ORDERNUM"]);
        echo "</a></td>
            <td class=\"listheader\" height=\"15\"><a href=\"Javascript:top.oxid.admin.setSorting( document.search, 'oxorder', 'oxbillfname', 'asc');document.search.submit();\" class=\"listheader\">";
        // line 106
        echo $this->extensions['OxidEsales\Twig\Extensions\TranslateExtension']->translate(["ident" => "ORDER_LIST_CUSTOMERFNAME"]);
        echo "</a></td>
            <td class=\"listheader\" height=\"15\" colspan=\"2\"><a href=\"Javascript:top.oxid.admin.setSorting( document.search, 'oxorder', 'oxbilllname', 'asc');document.search.submit();\" class=\"listheader\">";
        // line 107
        echo $this->extensions['OxidEsales\Twig\Extensions\TranslateExtension']->translate(["ident" => "ORDER_LIST_CUSTOMERLNAME"]);
        echo "</a></td>
        ";
    }

    // line 117
    public function block_admin_order_list_item($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 118
        echo "            ";
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["listitem"] ?? null), "oxorder__oxstorno", [], "any", false, false, false, 118), "value", [], "any", false, false, false, 118) == 1)) {
            // line 119
            echo "                ";
            $context["listclass"] = "listitem3";
            // line 120
            echo "            ";
        } else {
            // line 121
            echo "                ";
            if ((twig_get_attribute($this->env, $this->source, ($context["listitem"] ?? null), "blacklist", [], "array", true, true, false, 121) && (twig_get_attribute($this->env, $this->source, ($context["listitem"] ?? null), "blacklist", [], "any", false, false, false, 121) == 1))) {
                // line 122
                echo "                    ";
                $context["listclass"] = "listitem3";
                // line 123
                echo "                ";
            } else {
                // line 124
                echo "                    ";
                $context["listclass"] = ("listitem" . ($context["blWhite"] ?? null));
                // line 125
                echo "                ";
            }
            // line 126
            echo "            ";
        }
        // line 127
        echo "            ";
        if ((twig_get_attribute($this->env, $this->source, ($context["listitem"] ?? null), "getId", [], "method", false, false, false, 127) == ($context["oxid"] ?? null))) {
            // line 128
            echo "                ";
            $context["listclass"] = "listitem4";
            // line 129
            echo "            ";
        }
        // line 130
        echo "            <td valign=\"top\" class=\"";
        echo twig_escape_filter($this->env, ($context["listclass"] ?? null), "html", null, true);
        echo " order_time\" height=\"15\"><div class=\"listitemfloating\">&nbsp;<a href=\"Javascript:top.oxid.admin.editThis('";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["listitem"] ?? null), "oxorder__oxid", [], "any", false, false, false, 130), "value", [], "any", false, false, false, 130), "html", null, true);
        echo "');\" class=\"";
        echo twig_escape_filter($this->env, ($context["listclass"] ?? null), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->extensions['OxidEsales\Twig\Extensions\Filters\FormatDateExtension']->formatDate(twig_get_attribute($this->env, $this->source, ($context["listitem"] ?? null), "oxorder__oxorderdate", [], "any", false, false, false, 130), "datetime", true), "html", null, true);
        echo "</a></div></td>
            <td valign=\"top\" class=\"";
        // line 131
        echo twig_escape_filter($this->env, ($context["listclass"] ?? null), "html", null, true);
        echo " payment_date\" height=\"15\"><div class=\"listitemfloating\"><a href=\"Javascript:top.oxid.admin.editThis('";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["listitem"] ?? null), "oxorder__oxid", [], "any", false, false, false, 131), "value", [], "any", false, false, false, 131), "html", null, true);
        echo "');\" class=\"";
        echo twig_escape_filter($this->env, ($context["listclass"] ?? null), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->extensions['OxidEsales\Twig\Extensions\Filters\FormatDateExtension']->formatDate(twig_get_attribute($this->env, $this->source, ($context["listitem"] ?? null), "oxorder__oxpaid", [], "any", false, false, false, 131)), "html", null, true);
        echo "</a></div></td>
            <td valign=\"top\" class=\"";
        // line 132
        echo twig_escape_filter($this->env, ($context["listclass"] ?? null), "html", null, true);
        echo " order_no\" height=\"15\"><div class=\"listitemfloating\"><a href=\"Javascript:top.oxid.admin.editThis('";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["listitem"] ?? null), "oxorder__oxid", [], "any", false, false, false, 132), "value", [], "any", false, false, false, 132), "html", null, true);
        echo "');\" class=\"";
        echo twig_escape_filter($this->env, ($context["listclass"] ?? null), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["listitem"] ?? null), "oxorder__oxordernr", [], "any", false, false, false, 132), "value", [], "any", false, false, false, 132), "html", null, true);
        echo "</a></div></td>
            <td valign=\"top\" class=\"";
        // line 133
        echo twig_escape_filter($this->env, ($context["listclass"] ?? null), "html", null, true);
        echo " first_name\" height=\"15\"><div class=\"listitemfloating\"><a href=\"Javascript:top.oxid.admin.editThis('";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["listitem"] ?? null), "oxorder__oxid", [], "any", false, false, false, 133), "value", [], "any", false, false, false, 133), "html", null, true);
        echo "');\" class=\"";
        echo twig_escape_filter($this->env, ($context["listclass"] ?? null), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["listitem"] ?? null), "oxorder__oxbillfname", [], "any", false, false, false, 133), "value", [], "any", false, false, false, 133), "html", null, true);
        echo "</a></div></td>
            <td valign=\"top\" class=\"";
        // line 134
        echo twig_escape_filter($this->env, ($context["listclass"] ?? null), "html", null, true);
        echo " last_name\" height=\"15\"><div class=\"listitemfloating\"><a href=\"Javascript:top.oxid.admin.editThis('";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["listitem"] ?? null), "oxorder__oxid", [], "any", false, false, false, 134), "value", [], "any", false, false, false, 134), "html", null, true);
        echo "');\" class=\"";
        echo twig_escape_filter($this->env, ($context["listclass"] ?? null), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["listitem"] ?? null), "oxorder__oxbilllname", [], "any", false, false, false, 134), "value", [], "any", false, false, false, 134), "html", null, true);
        echo "</a></div></td>
            <td class=\"";
        // line 135
        echo twig_escape_filter($this->env, ($context["listclass"] ?? null), "html", null, true);
        echo "\">
                ";
        // line 136
        if ( !($context["readonly"] ?? null)) {
            // line 137
            echo "                    <a href=\"Javascript:top.oxid.admin.deleteThis('";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["listitem"] ?? null), "oxorder__oxid", [], "any", false, false, false, 137), "value", [], "any", false, false, false, 137), "html", null, true);
            echo "');\" class=\"delete\" id=\"del.";
            echo twig_escape_filter($this->env, ($context["_cnt"] ?? null), "html", null, true);
            echo "\" ";
            $this->loadTemplate("@__main__/help.html.twig", "@__main__/order_list.html.twig", 137)->display(twig_array_merge($context, ["helpid" => "item_delete"]));
            echo "></a>
                    <a href=\"Javascript:StornoThisArticle('";
            // line 138
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["listitem"] ?? null), "oxorder__oxid", [], "any", false, false, false, 138), "value", [], "any", false, false, false, 138), "html", null, true);
            echo "');\" class=\"pause\" id=\"pau.";
            echo twig_escape_filter($this->env, ($context["_cnt"] ?? null), "html", null, true);
            echo "\" ";
            $this->loadTemplate("@__main__/help.html.twig", "@__main__/order_list.html.twig", 138)->display(twig_array_merge($context, ["helpid" => "item_storno"]));
            echo "></a>
                ";
        }
        // line 140
        echo "            </td>
        ";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@__main__/order_list.html.twig";
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
        return array (  502 => 140,  493 => 138,  484 => 137,  482 => 136,  478 => 135,  468 => 134,  458 => 133,  448 => 132,  438 => 131,  427 => 130,  424 => 129,  421 => 128,  418 => 127,  415 => 126,  412 => 125,  409 => 124,  406 => 123,  403 => 122,  400 => 121,  397 => 120,  394 => 119,  391 => 118,  387 => 117,  381 => 107,  377 => 106,  373 => 105,  369 => 104,  364 => 103,  360 => 102,  352 => 96,  348 => 95,  340 => 90,  332 => 85,  324 => 80,  321 => 79,  306 => 77,  303 => 76,  300 => 75,  296 => 74,  292 => 73,  281 => 67,  278 => 66,  261 => 64,  257 => 63,  253 => 62,  248 => 59,  244 => 58,  234 => 49,  230 => 48,  218 => 161,  214 => 160,  210 => 159,  206 => 158,  201 => 155,  199 => 154,  193 => 150,  191 => 149,  176 => 146,  173 => 144,  171 => 143,  168 => 142,  166 => 117,  160 => 115,  157 => 114,  140 => 113,  138 => 112,  136 => 111,  132 => 109,  130 => 102,  126 => 100,  124 => 58,  120 => 56,  118 => 48,  114 => 46,  112 => 45,  108 => 44,  99 => 37,  93 => 35,  91 => 34,  77 => 23,  65 => 14,  58 => 9,  54 => 7,  50 => 5,  48 => 4,  45 => 3,  43 => 2,  41 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@__main__/order_list.html.twig", "/var/www/html/source/Application/views/admin_twig/tpl/order_list.html.twig");
    }
}
