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

/* @__main__/list_user.html.twig */
class __TwigTemplate_31d793bcddb54883b5a5f8caec37cf17 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'admin_list_user_filter' => [$this, 'block_admin_list_user_filter'],
            'admin_list_user_sorting' => [$this, 'block_admin_list_user_sorting'],
            'admin_list_user_item' => [$this, 'block_admin_list_user_item'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        $this->loadTemplate("@__main__/headitem.html.twig", "@__main__/list_user.html.twig", 1)->display(twig_array_merge($context, ["title" => $this->extensions['OxidEsales\Twig\Extensions\Filters\TranslateExtension']->translate("SHOWLIST_TITLE"), "box" => " "]));
        // line 2
        echo "
";
        // line 3
        $context["where"] = twig_get_attribute($this->env, $this->source, ($context["oView"] ?? null), "getListFilter", [], "method", false, false, false, 3);
        // line 4
        $context["whereparam"] = "";
        // line 5
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["where"] ?? null));
        foreach ($context['_seq'] as $context["sTable"] => $context["aField"]) {
            // line 6
            echo "  ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["aField"]);
            foreach ($context['_seq'] as $context["sField"] => $context["sFilter"]) {
                // line 7
                echo "    ";
                $context["whereparam"] = $this->extensions['OxidEsales\Twig\Extensions\Filters\CatExtension']->cat($this->extensions['OxidEsales\Twig\Extensions\Filters\CatExtension']->cat($this->extensions['OxidEsales\Twig\Extensions\Filters\CatExtension']->cat($this->extensions['OxidEsales\Twig\Extensions\Filters\CatExtension']->cat($this->extensions['OxidEsales\Twig\Extensions\Filters\CatExtension']->cat($this->extensions['OxidEsales\Twig\Extensions\Filters\CatExtension']->cat($this->extensions['OxidEsales\Twig\Extensions\Filters\CatExtension']->cat(($context["whereparam"] ?? null), "where["), $context["sTable"]), "]["), $context["sField"]), "]="), $context["sFilter"]), "&amp;");
                // line 8
                echo "  ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['sField'], $context['sFilter'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['sTable'], $context['aField'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 10
        $context["viewListSize"] = twig_get_attribute($this->env, $this->source, ($context["oView"] ?? null), "getViewListSize", [], "method", false, false, false, 10);
        // line 11
        $context["whereparam"] = $this->extensions['OxidEsales\Twig\Extensions\Filters\CatExtension']->cat($this->extensions['OxidEsales\Twig\Extensions\Filters\CatExtension']->cat(($context["whereparam"] ?? null), "viewListSize="), ($context["viewListSize"] ?? null));
        // line 12
        echo "
<script type=\"text/javascript\">
<!--
function editThis( sID)
{
    ";
        // line 17
        $context["shMen"] = 1;
        // line 18
        echo "
    ";
        // line 19
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["menustructure"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["menuholder"]) {
            // line 20
            echo "      ";
            if (((($context["shMen"] ?? null) && (twig_get_attribute($this->env, $this->source, $context["menuholder"], "nodeType", [], "any", false, false, false, 20) == twig_constant("XML_ELEMENT_NODE"))) && twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["menuholder"], "childNodes", [], "any", false, false, false, 20), "length", [], "any", false, false, false, 20))) {
                // line 21
                echo "
        ";
                // line 22
                $context["shMen"] = 0;
                // line 23
                echo "        ";
                $context["mn"] = 1;
                // line 24
                echo "
        ";
                // line 25
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["menuholder"], "childNodes", [], "any", false, false, false, 25));
                foreach ($context['_seq'] as $context["_key"] => $context["menuitem"]) {
                    // line 26
                    echo "          ";
                    if (((twig_get_attribute($this->env, $this->source, $context["menuitem"], "nodeType", [], "any", false, false, false, 26) == twig_constant("XML_ELEMENT_NODE")) && twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["menuitem"], "childNodes", [], "any", false, false, false, 26), "length", [], "any", false, false, false, 26))) {
                        // line 27
                        echo "            ";
                        if ((twig_get_attribute($this->env, $this->source, $context["menuitem"], "getAttribute", ["id"], "method", false, false, false, 27) == "mxuadmin")) {
                            // line 28
                            echo "
              ";
                            // line 29
                            $context['_parent'] = $context;
                            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["menuitem"], "childNodes", [], "any", false, false, false, 29));
                            foreach ($context['_seq'] as $context["_key"] => $context["submenuitem"]) {
                                // line 30
                                echo "                ";
                                if (((twig_get_attribute($this->env, $this->source, $context["submenuitem"], "nodeType", [], "any", false, false, false, 30) == twig_constant("XML_ELEMENT_NODE")) && (twig_get_attribute($this->env, $this->source, $context["submenuitem"], "getAttribute", ["cl"], "method", false, false, false, 30) == "admin_user"))) {
                                    // line 31
                                    echo "
                    if ( top && top.document.getElementById('navigation') && top.document.getElementById('navigation').contentWindow.adminnav ) {
                        var _sbli = top.document.getElementById('navigation').contentWindow.adminnav.document.getElementById( 'nav-1-";
                                    // line 33
                                    echo twig_escape_filter($this->env, ($context["mn"] ?? null), "html", null, true);
                                    echo "-1' );
                        var _sba = _sbli.getElementsByTagName( 'a' );
                        top.document.getElementById('navigation').contentWindow.adminnav._navAct( _sba[0] );
                    }

                ";
                                }
                                // line 39
                                echo "              ";
                            }
                            $_parent = $context['_parent'];
                            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['submenuitem'], $context['_parent'], $context['loop']);
                            $context = array_intersect_key($context, $_parent) + $_parent;
                            // line 40
                            echo "
            ";
                        }
                        // line 42
                        echo "            ";
                        $context["mn"] = (($context["mn"] ?? null) + 1);
                        // line 43
                        echo "
          ";
                    }
                    // line 45
                    echo "        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['menuitem'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 46
                echo "      ";
            }
            // line 47
            echo "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['menuholder'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 48
        echo "
    var oTransfer = document.getElementById( \"transfer\" );
    oTransfer.oxid.value = sID;
    oTransfer.cl.value = 'admin_user';
    oTransfer.submit();
}
//-->
</script>

<form name=\"transfer\" id=\"transfer\" action=\"";
        // line 57
        echo twig_get_attribute($this->env, $this->source, ($context["oViewConf"] ?? null), "getSelfLink", [], "method", false, false, false, 57);
        echo "\" method=\"post\">
    ";
        // line 58
        echo twig_get_attribute($this->env, $this->source, ($context["oViewConf"] ?? null), "getHiddenSid", [], "method", false, false, false, 58);
        echo "
    <input type=\"hidden\" name=\"oxid\" value=\"";
        // line 59
        echo twig_escape_filter($this->env, ($context["oxid"] ?? null), "html", null, true);
        echo "\">
    <input type=\"hidden\" name=\"cl\" value=\"list_user\">
    <input type=\"hidden\" name=\"updatelist\" value=\"1\">
</form>

";
        // line 64
        if (($context["noresult"] ?? null)) {
            // line 65
            echo "    <span class=\"listitem\">
        <b>";
            // line 66
            echo $this->extensions['OxidEsales\Twig\Extensions\TranslateExtension']->translate(["ident" => "SHOWLIST_NORESULTS"]);
            echo "</b><br><br>
    </span>
";
        }
        // line 69
        echo "
<div id=\"liste\">


<form name=\"showlist\" id=\"showlist\" action=\"";
        // line 73
        echo twig_get_attribute($this->env, $this->source, ($context["oViewConf"] ?? null), "getSelfLink", [], "method", false, false, false, 73);
        echo "\" method=\"post\">
    ";
        // line 74
        echo twig_get_attribute($this->env, $this->source, ($context["oViewConf"] ?? null), "getHiddenSid", [], "method", false, false, false, 74);
        echo "
    <input type=\"hidden\" name=\"cl\" value=\"list_user\">
    <table cellspacing=\"0\" cellpadding=\"0\" border=\"0\" width=\"100%\">
    <tr>
    ";
        // line 78
        $this->displayBlock('admin_list_user_filter', $context, $blocks);
        // line 110
        echo "</tr>
<tr>
    ";
        // line 112
        $this->displayBlock('admin_list_user_sorting', $context, $blocks);
        // line 118
        echo "</tr>

";
        // line 120
        $context["blWhite"] = "";
        // line 121
        $context["_cnt"] = 0;
        // line 122
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
        foreach ($context['_seq'] as $context["_key"] => $context["oUser"]) {
            // line 123
            echo "    ";
            $context["_cnt"] = (($context["_cnt"] ?? null) + 1);
            // line 124
            echo "    <tr id=\"row.";
            echo twig_escape_filter($this->env, ($context["_cnt"] ?? null), "html", null, true);
            echo "\">
        ";
            // line 125
            $this->displayBlock('admin_list_user_item', $context, $blocks);
            // line 131
            echo "    </tr>
";
            // line 132
            if ((($context["blWhite"] ?? null) == "2")) {
                // line 133
                echo "    ";
                $context["blWhite"] = "";
            } else {
                // line 135
                echo "    ";
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['oUser'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 138
        $this->loadTemplate("@__main__/pagenavisnippet.html.twig", "@__main__/list_user.html.twig", 138)->display(twig_array_merge($context, ["colspan" => "8"]));
        // line 139
        echo "</table>
</form>
</div>

<script type=\"text/javascript\">
if (parent.parent)
{   parent.parent.sShopTitle   = \"";
        // line 145
        echo addslashes(twig_get_attribute($this->env, $this->source, ($context["actshopobj"] ?? null), "oxshops__oxname", [], "any", false, false, false, 145));
        echo "\";
    parent.parent.sMenuItem    = \"";
        // line 146
        echo $this->extensions['OxidEsales\Twig\Extensions\TranslateExtension']->translate(["ident" => "USER_LIST_MENNUITEM"]);
        echo "\";
    parent.parent.sMenuSubItem = \"";
        // line 147
        echo $this->extensions['OxidEsales\Twig\Extensions\TranslateExtension']->translate(["ident" => "snpuserlistheader"]);
        echo "\";
    parent.parent.sWorkArea    = \"";
        // line 148
        echo twig_escape_filter($this->env, ($context["_act"] ?? null), "html", null, true);
        echo "\";
    parent.parent.setTitle();
}
</script>
</body>
</html>
";
    }

    // line 78
    public function block_admin_list_user_filter($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 79
        echo "        <td class=\"listfilter first\">
            <div class=\"r1\"><div class=\"b1\">
            <input class=\"listedit\" type=\"text\" size=\"15\" maxlength=\"128\" name=\"where[oxuser][oxfname]\" value=\"";
        // line 81
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["where"] ?? null), "oxuser", [], "any", false, false, false, 81), "oxfname", [], "any", false, false, false, 81), "html", null, true);
        echo "\">
            </div></div>
        </td>
        <td class=\"listfilter\">
            <div class=\"r1\"><div class=\"b1\">
            <input class=\"listedit\" type=\"text\" size=\"15\" maxlength=\"128\" name=\"where[oxuser][oxlname]\" value=\"";
        // line 86
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["where"] ?? null), "oxuser", [], "any", false, false, false, 86), "oxlname", [], "any", false, false, false, 86), "html", null, true);
        echo "\">
            </div></div>
        </td>
        <td class=\"listfilter\">
            <div class=\"r1\"><div class=\"b1\">
            <input class=\"listedit\" type=\"text\" size=\"15\" maxlength=\"128\" name=\"where[oxuser][oxusername]\" value=\"";
        // line 91
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["where"] ?? null), "oxuser", [], "any", false, false, false, 91), "oxusername", [], "any", false, false, false, 91), "html", null, true);
        echo "\">
            </div></div>
        </td>
        <td class=\"listfilter\">
            <div class=\"r1\">
              <div class=\"b1\">
                <div class=\"find\">
                  <select name=\"viewListSize\" class=\"editinput\" onChange=\"JavaScript:top.oxid.admin.changeListSize()\">
                    <option value=\"50\" ";
        // line 99
        if ((($context["viewListSize"] ?? null) == 50)) {
            echo "SELECTED";
        }
        echo ">50</option>
                    <option value=\"100\" ";
        // line 100
        if ((($context["viewListSize"] ?? null) == 100)) {
            echo "SELECTED";
        }
        echo ">100</option>
                    <option value=\"200\" ";
        // line 101
        if ((($context["viewListSize"] ?? null) == 200)) {
            echo "SELECTED";
        }
        echo ">200</option>
                  </select>
                  <input class=\"listedit\" type=\"submit\" name=\"submitit\" value=\"";
        // line 103
        echo $this->extensions['OxidEsales\Twig\Extensions\TranslateExtension']->translate(["ident" => "GENERAL_SEARCH"]);
        echo "\">
                </div>
                <input class=\"listedit\" type=\"text\" size=\"15\" maxlength=\"128\" name=\"where[oxuser][oxregister]\" value=\"";
        // line 105
        echo twig_escape_filter($this->env, $this->extensions['OxidEsales\Twig\Extensions\Filters\FormatDateExtension']->formatDate(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["where"] ?? null), "oxuser", [], "any", false, false, false, 105), "oxregister", [], "any", false, false, false, 105)), "html", null, true);
        echo "\">
              </div>
            </div>
        </td>
    ";
    }

    // line 112
    public function block_admin_list_user_sorting($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 113
        echo "        <td class=\"listheader first\"><a href=\"javascript:top.oxid.admin.setSorting( document.forms.showlist, 'oxuser', 'oxfname', 'asc');document.forms.showlist.submit();\" class=\"listheader\">";
        echo $this->extensions['OxidEsales\Twig\Extensions\TranslateExtension']->translate(["ident" => "snpuserlistoxfname"]);
        echo "</a></td>
        <td class=\"listheader\"><a href=\"javascript:top.oxid.admin.setSorting( document.forms.showlist, 'oxuser', 'oxlname', 'asc');document.forms.showlist.submit();\" class=\"listheader\">";
        // line 114
        echo $this->extensions['OxidEsales\Twig\Extensions\TranslateExtension']->translate(["ident" => "snpuserlistoxlname"]);
        echo "</a></td>
        <td class=\"listheader\"><a href=\"javascript:top.oxid.admin.setSorting( document.forms.showlist, 'oxuser', 'oxusername', 'asc');document.forms.showlist.submit();\" class=\"listheader\">";
        // line 115
        echo $this->extensions['OxidEsales\Twig\Extensions\TranslateExtension']->translate(["ident" => "snpuserlistoxusername"]);
        echo "</a></td>
        <td class=\"listheader\"><a href=\"javascript:top.oxid.admin.setSorting( document.forms.showlist, 'oxuser', 'oxregister', 'asc');document.forms.showlist.submit();\" class=\"listheader\">";
        // line 116
        echo $this->extensions['OxidEsales\Twig\Extensions\TranslateExtension']->translate(["ident" => "snpuserlistoxcreate"]);
        echo "</a></td>
    ";
    }

    // line 125
    public function block_admin_list_user_item($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 126
        echo "            <td class=\"listitem";
        echo twig_escape_filter($this->env, ($context["blWhite"] ?? null), "html", null, true);
        echo "\"><a href=\"Javascript:editThis( '";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["oUser"] ?? null), "oxuser__oxid", [], "any", false, false, false, 126), "value", [], "any", false, false, false, 126), "html", null, true);
        echo "');\" class=\"listitem";
        echo twig_escape_filter($this->env, ($context["blWhite"] ?? null), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["oUser"] ?? null), "oxuser__oxfname", [], "any", false, false, false, 126), "value", [], "any", false, false, false, 126), "html", null, true);
        echo "</a></td>
            <td class=\"listitem";
        // line 127
        echo twig_escape_filter($this->env, ($context["blWhite"] ?? null), "html", null, true);
        echo "\"><a href=\"Javascript:editThis( '";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["oUser"] ?? null), "oxuser__oxid", [], "any", false, false, false, 127), "value", [], "any", false, false, false, 127), "html", null, true);
        echo "');\" class=\"listitem";
        echo twig_escape_filter($this->env, ($context["blWhite"] ?? null), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["oUser"] ?? null), "oxuser__oxlname", [], "any", false, false, false, 127), "value", [], "any", false, false, false, 127), "html", null, true);
        echo "</a></td>
            <td class=\"listitem";
        // line 128
        echo twig_escape_filter($this->env, ($context["blWhite"] ?? null), "html", null, true);
        echo "\"><a href=\"Javascript:editThis( '";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["oUser"] ?? null), "oxuser__oxid", [], "any", false, false, false, 128), "value", [], "any", false, false, false, 128), "html", null, true);
        echo "');\" class=\"listitem";
        echo twig_escape_filter($this->env, ($context["blWhite"] ?? null), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["oUser"] ?? null), "oxuser__oxusername", [], "any", false, false, false, 128), "value", [], "any", false, false, false, 128), "html", null, true);
        echo "</a></td>
            <td class=\"listitem";
        // line 129
        echo twig_escape_filter($this->env, ($context["blWhite"] ?? null), "html", null, true);
        echo "\"><a href=\"Javascript:editThis( '";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["oUser"] ?? null), "oxuser__oxid", [], "any", false, false, false, 129), "value", [], "any", false, false, false, 129), "html", null, true);
        echo "');\" class=\"listitem";
        echo twig_escape_filter($this->env, ($context["blWhite"] ?? null), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->extensions['OxidEsales\Twig\Extensions\Filters\FormatDateExtension']->formatDate(twig_get_attribute($this->env, $this->source, ($context["oUser"] ?? null), "oxuser__oxregister", [], "any", false, false, false, 129)), "html", null, true);
        echo "</a></td>
       ";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@__main__/list_user.html.twig";
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
        return array (  452 => 129,  442 => 128,  432 => 127,  421 => 126,  417 => 125,  411 => 116,  407 => 115,  403 => 114,  398 => 113,  394 => 112,  385 => 105,  380 => 103,  373 => 101,  367 => 100,  361 => 99,  350 => 91,  342 => 86,  334 => 81,  330 => 79,  326 => 78,  315 => 148,  311 => 147,  307 => 146,  303 => 145,  295 => 139,  293 => 138,  277 => 135,  273 => 133,  271 => 132,  268 => 131,  266 => 125,  261 => 124,  258 => 123,  241 => 122,  239 => 121,  237 => 120,  233 => 118,  231 => 112,  227 => 110,  225 => 78,  218 => 74,  214 => 73,  208 => 69,  202 => 66,  199 => 65,  197 => 64,  189 => 59,  185 => 58,  181 => 57,  170 => 48,  164 => 47,  161 => 46,  155 => 45,  151 => 43,  148 => 42,  144 => 40,  138 => 39,  129 => 33,  125 => 31,  122 => 30,  118 => 29,  115 => 28,  112 => 27,  109 => 26,  105 => 25,  102 => 24,  99 => 23,  97 => 22,  94 => 21,  91 => 20,  87 => 19,  84 => 18,  82 => 17,  75 => 12,  73 => 11,  71 => 10,  61 => 8,  58 => 7,  53 => 6,  49 => 5,  47 => 4,  45 => 3,  42 => 2,  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@__main__/list_user.html.twig", "/var/www/html/source/Application/views/admin_twig/tpl/list_user.html.twig");
    }
}
