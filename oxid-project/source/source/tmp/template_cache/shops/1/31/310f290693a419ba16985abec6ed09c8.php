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

/* @__main__/user_list.html.twig */
class __TwigTemplate_c129b6268bfa77eb805fdd7a4cb5bb94 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'admin_user_list_colgroup' => [$this, 'block_admin_user_list_colgroup'],
            'admin_user_list_filter' => [$this, 'block_admin_user_list_filter'],
            'admin_user_list_sorting' => [$this, 'block_admin_user_list_sorting'],
            'admin_user_list_item' => [$this, 'block_admin_user_list_item'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        $this->loadTemplate("@__main__/headitem.html.twig", "@__main__/user_list.html.twig", 1)->display(twig_array_merge($context, ["title" => $this->extensions['OxidEsales\Twig\Extensions\Filters\TranslateExtension']->translate("GENERAL_ADMIN_TITLE"), "box" => "list"]));
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
        $this->loadTemplate("@__main__/_formparams.html.twig", "@__main__/user_list.html.twig", 26)->display(twig_array_merge($context, ["cl" => "user_list", "lstrt" => ($context["lstrt"] ?? null), "actedit" => ($context["actedit"] ?? null), "oxid" => ($context["oxid"] ?? null), "fnc" => "", "language" => ($context["actlang"] ?? null), "editlanguage" => ($context["actlang"] ?? null)]));
        // line 27
        echo "<table cellspacing=\"0\" cellpadding=\"0\" border=\"0\" width=\"100%\">
<colgroup>
    ";
        // line 29
        $this->displayBlock('admin_user_list_colgroup', $context, $blocks);
        // line 40
        echo "<colgroup>
<tr class=\"listitem\">
    ";
        // line 42
        $this->displayBlock('admin_user_list_filter', $context, $blocks);
        // line 84
        echo "</tr>
<tr>
    ";
        // line 86
        $this->displayBlock('admin_user_list_sorting', $context, $blocks);
        // line 97
        echo "</tr>

";
        // line 99
        $context["blWhite"] = "";
        // line 100
        $context["_cnt"] = 0;
        // line 101
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
            // line 102
            echo "    ";
            $context["_cnt"] = (($context["_cnt"] ?? null) + 1);
            // line 103
            echo "    <tr id=\"row.";
            echo twig_escape_filter($this->env, ($context["_cnt"] ?? null), "html", null, true);
            echo "\">
    ";
            // line 104
            $this->displayBlock('admin_user_list_item', $context, $blocks);
            // line 128
            echo "</tr>
";
            // line 129
            if ((($context["blWhite"] ?? null) == "2")) {
                // line 130
                $context["blWhite"] = "";
            } else {
                // line 132
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
        // line 135
        $this->loadTemplate("@__main__/pagenavisnippet.html.twig", "@__main__/user_list.html.twig", 135)->display(twig_array_merge($context, ["colspan" => "9"]));
        // line 136
        echo "</table>
</form>
</div>

";
        // line 140
        $this->loadTemplate("@__main__/pagetabsnippet.html.twig", "@__main__/user_list.html.twig", 140)->display($context);
        // line 141
        echo "
<script type=\"text/javascript\">
if (parent.parent)
{   parent.parent.sShopTitle   = \"";
        // line 144
        echo addslashes(twig_get_attribute($this->env, $this->source, ($context["actshopobj"] ?? null), "oxshops__oxname", [], "any", false, false, false, 144));
        echo "\";
    parent.parent.sMenuItem    = \"";
        // line 145
        echo $this->extensions['OxidEsales\Twig\Extensions\TranslateExtension']->translate(["ident" => "USER_LIST_MENNUITEM"]);
        echo "\";
    parent.parent.sMenuSubItem = \"";
        // line 146
        echo $this->extensions['OxidEsales\Twig\Extensions\TranslateExtension']->translate(["ident" => "USER_LIST_MENNUSUBITEM"]);
        echo "\";
    parent.parent.sWorkArea    = \"";
        // line 147
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
    public function block_admin_user_list_colgroup($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 30
        echo "    \t<col width=\"3%\">
        <col width=\"19%\">
        <col width=\"19%\">
        <col width=\"19%\">
        <col width=\"10%\">
        <col width=\"10%\">
        <col width=\"10%\">
        <col width=\"9%\">
        <col width=\"1%\">
    ";
    }

    // line 42
    public function block_admin_user_list_filter($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 43
        echo "    \t<td valign=\"top\" class=\"listfilter first\" align=\"right\">
            <div class=\"r1\"><div class=\"b1\">&nbsp;</div></div>
        </td>
        <td valign=\"top\" class=\"listfilter\" height=\"20\">
            <div class=\"r1\"><div class=\"b1\">
            <input class=\"listedit\" type=\"text\" size=\"20\" maxlength=\"128\" name=\"where[oxuser][oxlname]\" value=\"";
        // line 48
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["where"] ?? null), "oxuser", [], "any", false, false, false, 48), "oxlname", [], "any", false, false, false, 48), "html", null, true);
        echo "\">
            </div></div>
        </td>
        <td valign=\"top\" class=\"listfilter\">
            <div class=\"r1\"><div class=\"b1\">
            <input class=\"listedit\" type=\"text\" size=\"20\" maxlength=\"128\" name=\"where[oxuser][oxusername]\" value=\"";
        // line 53
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["where"] ?? null), "oxuser", [], "any", false, false, false, 53), "oxusername", [], "any", false, false, false, 53), "html", null, true);
        echo "\">
            </div></div>
        </td>
        <td valign=\"top\" class=\"listfilter\">
            <div class=\"r1\"><div class=\"b1\">
            <input class=\"listedit\" type=\"text\" size=\"20\" maxlength=\"128\" name=\"where[oxuser][oxstreet]\" value=\"";
        // line 58
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["where"] ?? null), "oxuser", [], "any", false, false, false, 58), "oxstreet", [], "any", false, false, false, 58), "html", null, true);
        echo "\">
            </div></div>
        </td>
        <td valign=\"top\" class=\"listfilter\">
            <div class=\"r1\"><div class=\"b1\">
            <input class=\"listedit\" type=\"text\" size=\"10\" maxlength=\"128\" name=\"where[oxuser][oxzip]\" value=\"";
        // line 63
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["where"] ?? null), "oxuser", [], "any", false, false, false, 63), "oxzip", [], "any", false, false, false, 63), "html", null, true);
        echo "\">
            </div></div>
        </td>
        <td valign=\"top\" class=\"listfilter\">
            <div class=\"r1\"><div class=\"b1\">
            <input class=\"listedit\" type=\"text\" size=\"20\" maxlength=\"128\" name=\"where[oxuser][oxcity]\" value=\"";
        // line 68
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["where"] ?? null), "oxuser", [], "any", false, false, false, 68), "oxcity", [], "any", false, false, false, 68), "html", null, true);
        echo "\">
            </div></div>
        </td>
        <td valign=\"top\" class=\"listfilter\">
            <div class=\"r1\"><div class=\"b1\">
            <input class=\"listedit\" type=\"text\" size=\"15\" maxlength=\"128\" name=\"where[oxuser][oxfon]\" value=\"";
        // line 73
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["where"] ?? null), "oxuser", [], "any", false, false, false, 73), "oxfon", [], "any", false, false, false, 73), "html", null, true);
        echo "\">
            </div></div>
        </td>
        <td valign=\"top\" class=\"listfilter\" colspan=\"2\" nowrap>
            <div class=\"r1\"><div class=\"b1\">
            <div class=\"find\"><input class=\"listedit\" type=\"submit\" name=\"submitit\" value=\"";
        // line 78
        echo $this->extensions['OxidEsales\Twig\Extensions\TranslateExtension']->translate(["ident" => "GENERAL_SEARCH"]);
        echo "\"></div>
            <input class=\"listedit\" type=\"text\" size=\"5\" maxlength=\"128\" name=\"where[oxuser][oxcustnr]\" value=\"";
        // line 79
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["where"] ?? null), "oxuser", [], "any", false, false, false, 79), "oxcustnr", [], "any", false, false, false, 79), "html", null, true);
        echo "\">
            </div>
            </div></div>
        </td>
    ";
    }

    // line 86
    public function block_admin_user_list_sorting($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 87
        echo "    \t
<td class=\"listheader first\" height=\"15\" width=\"30\" align=\"center\"><a href=\"Javascript:top.oxid.admin.setSorting( document.search, 'oxuser', 'oxactive', 'asc');document.search.submit();\" class=\"listheader\">";
        // line 88
        echo $this->extensions['OxidEsales\Twig\Extensions\TranslateExtension']->translate(["ident" => "GENERAL_ACTIVTITLE"]);
        echo "</a></td>
        <td class=\"listheader\" height=\"15\">&nbsp;<a href=\"Javascript:top.oxid.admin.setSorting( document.search, 'oxuser', 'oxlname', 'asc');document.search.submit();\" class=\"listheader\">";
        // line 89
        echo $this->extensions['OxidEsales\Twig\Extensions\TranslateExtension']->translate(["ident" => "GENERAL_NAME"]);
        echo "</a></td>
        <td class=\"listheader\"><a href=\"Javascript:top.oxid.admin.setSorting( document.search, 'oxuser', 'oxusername', 'asc');document.search.submit();\" class=\"listheader\">";
        // line 90
        echo $this->extensions['OxidEsales\Twig\Extensions\TranslateExtension']->translate(["ident" => "GENERAL_EMAIL"]);
        echo "</a></td>
        <td class=\"listheader\"><a href=\"Javascript:top.oxid.admin.setSorting( document.search, 'oxuser', 'oxstreet', 'asc');document.search.submit();\" class=\"listheader\">";
        // line 91
        echo $this->extensions['OxidEsales\Twig\Extensions\TranslateExtension']->translate(["ident" => "GENERAL_STREET"]);
        echo "</a></td>
        <td class=\"listheader\"><a href=\"Javascript:top.oxid.admin.setSorting( document.search, 'oxuser', 'oxzip', 'asc');document.search.submit();\" class=\"listheader\">";
        // line 92
        echo $this->extensions['OxidEsales\Twig\Extensions\TranslateExtension']->translate(["ident" => "USER_LIST_ZIP"]);
        echo "</a></td>
        <td class=\"listheader\"><a href=\"Javascript:top.oxid.admin.setSorting( document.search, 'oxuser', 'oxcity', 'asc');document.search.submit();\" class=\"listheader\">";
        // line 93
        echo $this->extensions['OxidEsales\Twig\Extensions\TranslateExtension']->translate(["ident" => "USER_LIST_PLACE"]);
        echo "</a></td>
        <td class=\"listheader\"><a href=\"Javascript:top.oxid.admin.setSorting( document.search, 'oxuser', 'oxfon', 'asc');document.search.submit();\" class=\"listheader\">";
        // line 94
        echo $this->extensions['OxidEsales\Twig\Extensions\TranslateExtension']->translate(["ident" => "GENERAL_TELEPHONE"]);
        echo "</a></td>
        <td class=\"listheader\" colspan=\"2\"><a href=\"Javascript:top.oxid.admin.setSorting( document.search, 'oxuser', 'oxcustnr', 'asc');document.search.submit();\" class=\"listheader\">";
        // line 95
        echo $this->extensions['OxidEsales\Twig\Extensions\TranslateExtension']->translate(["ident" => "USER_LIST_CUSTOMERNUM"]);
        echo "</a></td>
    ";
    }

    // line 104
    public function block_admin_user_list_item($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 105
        echo "        ";
        if ((twig_get_attribute($this->env, $this->source, ($context["listitem"] ?? null), "blacklist", [], "array", true, true, false, 105) && (twig_get_attribute($this->env, $this->source, ($context["listitem"] ?? null), "blacklist", [], "any", false, false, false, 105) == 1))) {
            // line 106
            echo "            ";
            $context["listclass"] = "listitem3";
            // line 107
            echo "        ";
        } else {
            // line 108
            echo "            ";
            $context["listclass"] = ("listitem" . ($context["blWhite"] ?? null));
            // line 109
            echo "        ";
        }
        // line 110
        echo "        ";
        if ((twig_get_attribute($this->env, $this->source, ($context["listitem"] ?? null), "getId", [], "method", false, false, false, 110) == ($context["oxid"] ?? null))) {
            // line 111
            echo "            ";
            $context["listclass"] = "listitem4";
            // line 112
            echo "        ";
        }
        // line 113
        echo "        <td valign=\"top\" class=\"";
        echo twig_escape_filter($this->env, ($context["listclass"] ?? null), "html", null, true);
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["listitem"] ?? null), "oxuser__oxactive", [], "any", false, false, false, 113), "value", [], "any", false, false, false, 113) == 1)) {
            echo " active";
        }
        echo "\" height=\"15\"><div class=\"listitemfloating\">&nbsp</a></div></td>
        <td valign=\"top\" class=\"";
        // line 114
        echo twig_escape_filter($this->env, ($context["listclass"] ?? null), "html", null, true);
        echo "\" height=\"15\"><div class=\"listitemfloating\">&nbsp;<a href=\"Javascript:top.oxid.admin.editThis('";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["listitem"] ?? null), "oxuser__oxid", [], "any", false, false, false, 114), "value", [], "any", false, false, false, 114), "html", null, true);
        echo "');\" class=\"";
        echo twig_escape_filter($this->env, ($context["listclass"] ?? null), "html", null, true);
        echo "\">";
        if ( !twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["listitem"] ?? null), "oxuser__oxlname", [], "any", false, false, false, 114), "value", [], "any", false, false, false, 114)) {
            echo "-kein Name-";
        } else {
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["listitem"] ?? null), "oxuser__oxlname", [], "any", false, false, false, 114), "value", [], "any", false, false, false, 114), "html", null, true);
        }
        echo " ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["listitem"] ?? null), "oxuser__oxfname", [], "any", false, false, false, 114), "value", [], "any", false, false, false, 114), "html", null, true);
        echo "</a></div></td>
        <td valign=\"top\" class=\"";
        // line 115
        echo twig_escape_filter($this->env, ($context["listclass"] ?? null), "html", null, true);
        echo "\"><div class=\"listitemfloating\"><a href=\"Javascript:top.oxid.admin.editThis('";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["listitem"] ?? null), "oxuser__oxid", [], "any", false, false, false, 115), "value", [], "any", false, false, false, 115), "html", null, true);
        echo "');\" class=\"";
        echo twig_escape_filter($this->env, ($context["listclass"] ?? null), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->extensions['OxidEsales\Twig\Extensions\Filters\TruncateExtension']->truncate(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["listitem"] ?? null), "oxuser__oxusername", [], "any", false, false, false, 115), "value", [], "any", false, false, false, 115), 21, "...", true), "html", null, true);
        echo "</a></div></td>
        <td valign=\"top\" class=\"";
        // line 116
        echo twig_escape_filter($this->env, ($context["listclass"] ?? null), "html", null, true);
        echo "\"><div class=\"listitemfloating\"><a href=\"Javascript:top.oxid.admin.editThis('";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["listitem"] ?? null), "oxuser__oxid", [], "any", false, false, false, 116), "value", [], "any", false, false, false, 116), "html", null, true);
        echo "');\" class=\"";
        echo twig_escape_filter($this->env, ($context["listclass"] ?? null), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["listitem"] ?? null), "oxuser__oxstreet", [], "any", false, false, false, 116), "value", [], "any", false, false, false, 116), "html", null, true);
        echo "</a></div></td>
        <td valign=\"top\" class=\"";
        // line 117
        echo twig_escape_filter($this->env, ($context["listclass"] ?? null), "html", null, true);
        echo "\"><div class=\"listitemfloating\"><a href=\"Javascript:top.oxid.admin.editThis('";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["listitem"] ?? null), "oxuser__oxid", [], "any", false, false, false, 117), "value", [], "any", false, false, false, 117), "html", null, true);
        echo "');\" class=\"";
        echo twig_escape_filter($this->env, ($context["listclass"] ?? null), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["listitem"] ?? null), "oxuser__oxzip", [], "any", false, false, false, 117), "value", [], "any", false, false, false, 117), "html", null, true);
        echo "</a></div></td>
        <td valign=\"top\" class=\"";
        // line 118
        echo twig_escape_filter($this->env, ($context["listclass"] ?? null), "html", null, true);
        echo "\"><div class=\"listitemfloating\"><a href=\"Javascript:top.oxid.admin.editThis('";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["listitem"] ?? null), "oxuser__oxid", [], "any", false, false, false, 118), "value", [], "any", false, false, false, 118), "html", null, true);
        echo "');\" class=\"";
        echo twig_escape_filter($this->env, ($context["listclass"] ?? null), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["listitem"] ?? null), "oxuser__oxcity", [], "any", false, false, false, 118), "value", [], "any", false, false, false, 118), "html", null, true);
        echo "</a></div></td>
        <td valign=\"top\" class=\"";
        // line 119
        echo twig_escape_filter($this->env, ($context["listclass"] ?? null), "html", null, true);
        echo "\"><div class=\"listitemfloating\"><a href=\"Javascript:top.oxid.admin.editThis('";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["listitem"] ?? null), "oxuser__oxid", [], "any", false, false, false, 119), "value", [], "any", false, false, false, 119), "html", null, true);
        echo "');\" class=\"";
        echo twig_escape_filter($this->env, ($context["listclass"] ?? null), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["listitem"] ?? null), "oxuser__oxfon", [], "any", false, false, false, 119), "value", [], "any", false, false, false, 119), "html", null, true);
        echo "</a></div></td>
        <td valign=\"top\" class=\"";
        // line 120
        echo twig_escape_filter($this->env, ($context["listclass"] ?? null), "html", null, true);
        echo "\"><div class=\"listitemfloating\"><a href=\"Javascript:top.oxid.admin.editThis('";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["listitem"] ?? null), "oxuser__oxid", [], "any", false, false, false, 120), "value", [], "any", false, false, false, 120), "html", null, true);
        echo "');\" class=\"";
        echo twig_escape_filter($this->env, ($context["listclass"] ?? null), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["listitem"] ?? null), "oxuser__oxcustnr", [], "any", false, false, false, 120), "value", [], "any", false, false, false, 120), "html", null, true);
        echo "</a></div></td>

        <td class=\"";
        // line 122
        echo twig_escape_filter($this->env, ($context["listclass"] ?? null), "html", null, true);
        echo "\">
            ";
        // line 123
        if ((( !twig_get_attribute($this->env, $this->source, ($context["listitem"] ?? null), "isOx", [], "method", false, false, false, 123) &&  !($context["readonly"] ?? null)) &&  !twig_get_attribute($this->env, $this->source, ($context["listitem"] ?? null), "blPreventDelete", [], "any", false, false, false, 123))) {
            // line 124
            echo "            <a href=\"Javascript:top.oxid.admin.deleteThis('";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["listitem"] ?? null), "oxuser__oxid", [], "any", false, false, false, 124), "value", [], "any", false, false, false, 124), "html", null, true);
            echo "');\" class=\"delete\" id=\"del.";
            echo twig_escape_filter($this->env, ($context["_cnt"] ?? null), "html", null, true);
            echo "\" ";
            $this->loadTemplate("@__main__/help.html.twig", "@__main__/user_list.html.twig", 124)->display(twig_array_merge($context, ["helpid" => "item_delete"]));
            echo "></a>
            ";
        }
        // line 126
        echo "        </td>
    ";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@__main__/user_list.html.twig";
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
        return array (  462 => 126,  452 => 124,  450 => 123,  446 => 122,  435 => 120,  425 => 119,  415 => 118,  405 => 117,  395 => 116,  385 => 115,  369 => 114,  361 => 113,  358 => 112,  355 => 111,  352 => 110,  349 => 109,  346 => 108,  343 => 107,  340 => 106,  337 => 105,  333 => 104,  327 => 95,  323 => 94,  319 => 93,  315 => 92,  311 => 91,  307 => 90,  303 => 89,  299 => 88,  296 => 87,  292 => 86,  283 => 79,  279 => 78,  271 => 73,  263 => 68,  255 => 63,  247 => 58,  239 => 53,  231 => 48,  224 => 43,  220 => 42,  207 => 30,  203 => 29,  192 => 147,  188 => 146,  184 => 145,  180 => 144,  175 => 141,  173 => 140,  167 => 136,  165 => 135,  150 => 132,  147 => 130,  145 => 129,  142 => 128,  140 => 104,  135 => 103,  132 => 102,  115 => 101,  113 => 100,  111 => 99,  107 => 97,  105 => 86,  101 => 84,  99 => 42,  95 => 40,  93 => 29,  89 => 27,  87 => 26,  83 => 25,  74 => 18,  68 => 16,  66 => 15,  58 => 9,  54 => 7,  50 => 5,  48 => 4,  45 => 3,  43 => 2,  41 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@__main__/user_list.html.twig", "/var/www/html/source/Application/views/admin_twig/tpl/user_list.html.twig");
    }
}
