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

/* @__main__/list_review.html.twig */
class __TwigTemplate_7c8ba241849056653c9652eb4a51b04b extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'admin_list_review_colgroup' => [$this, 'block_admin_list_review_colgroup'],
            'admin_list_review_filter' => [$this, 'block_admin_list_review_filter'],
            'admin_list_review_sorting' => [$this, 'block_admin_list_review_sorting'],
            'admin_list_review_item' => [$this, 'block_admin_list_review_item'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        $this->loadTemplate("@__main__/headitem.html.twig", "@__main__/list_review.html.twig", 1)->display(twig_array_merge($context, ["title" => $this->extensions['OxidEsales\Twig\Extensions\Filters\TranslateExtension']->translate("SHOWLIST_TITLE"), "box" => " "]));
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
function editThis ( sID )
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
                        if ((twig_get_attribute($this->env, $this->source, $context["menuitem"], "getAttribute", ["id"], "method", false, false, false, 27) == "mxmanageprod")) {
                            // line 28
                            echo "
              ";
                            // line 29
                            $context['_parent'] = $context;
                            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["menuitem"], "childNodes", [], "any", false, false, false, 29));
                            foreach ($context['_seq'] as $context["_key"] => $context["submenuitem"]) {
                                // line 30
                                echo "                ";
                                if (((twig_get_attribute($this->env, $this->source, $context["submenuitem"], "nodeType", [], "any", false, false, false, 30) == twig_constant("XML_ELEMENT_NODE")) && (twig_get_attribute($this->env, $this->source, $context["submenuitem"], "getAttribute", ["cl"], "method", false, false, false, 30) == "article"))) {
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
    var oTransfer = document.getElementById(\"transfer\");
    oTransfer.oxid.value=sID;
    oTransfer.cl.value='article';
    oTransfer.submit();
}

function changeLanguage()
{
    var oList = document.getElementById(\"showlist\");
    oList.language.value=oList.changelang.value;
    oList.editlanguage.value=oList.changelang.value;
    oList.submit();
}
//-->
</script>

<form name=\"transfer\" id=\"transfer\" action=\"";
        // line 65
        echo twig_get_attribute($this->env, $this->source, ($context["oViewConf"] ?? null), "getSelfLink", [], "method", false, false, false, 65);
        echo "\" method=\"post\">
    ";
        // line 66
        echo twig_get_attribute($this->env, $this->source, ($context["oViewConf"] ?? null), "getHiddenSid", [], "method", false, false, false, 66);
        echo "
    <input type=\"hidden\" name=\"oxid\" value=\"";
        // line 67
        echo twig_escape_filter($this->env, ($context["oxid"] ?? null), "html", null, true);
        echo "\">
    <input type=\"hidden\" name=\"cl\" value=\"\">
    <input type=\"hidden\" name=\"updatelist\" value=\"1\">
    <input type=\"hidden\" name=\"language\" value=\"";
        // line 70
        echo twig_escape_filter($this->env, ($context["actlang"] ?? null), "html", null, true);
        echo "\">
    <input type=\"hidden\" name=\"editlanguage\" value=\"";
        // line 71
        echo twig_escape_filter($this->env, ($context["actlang"] ?? null), "html", null, true);
        echo "\">
</form>

";
        // line 74
        if (($context["noresult"] ?? null)) {
            // line 75
            echo "    <span class=\"listitem\">
        <b>";
            // line 76
            echo $this->extensions['OxidEsales\Twig\Extensions\TranslateExtension']->translate(["ident" => "SHOWLIST_NORESULTS"]);
            echo "</b><br><br>
    </span>
";
        }
        // line 79
        echo "
<div id=\"liste\">
<form name=\"showlist\" id=\"showlist\" action=\"";
        // line 81
        echo twig_get_attribute($this->env, $this->source, ($context["oViewConf"] ?? null), "getSelfLink", [], "method", false, false, false, 81);
        echo "\" method=\"post\">
";
        // line 82
        echo twig_get_attribute($this->env, $this->source, ($context["oViewConf"] ?? null), "getHiddenSid", [], "method", false, false, false, 82);
        echo "
<input type=\"hidden\" name=\"cl\" value=\"list_review\">
<input type=\"hidden\" name=\"language\" value=\"";
        // line 84
        echo twig_escape_filter($this->env, ($context["actlang"] ?? null), "html", null, true);
        echo "\">
<input type=\"hidden\" name=\"editlanguage\" value=\"";
        // line 85
        echo twig_escape_filter($this->env, ($context["actlang"] ?? null), "html", null, true);
        echo "\">

<table cellspacing=\"0\" cellpadding=\"0\" border=\"0\" width=\"99%\">
    <colgroup>
        ";
        // line 89
        $this->displayBlock('admin_list_review_colgroup', $context, $blocks);
        // line 94
        echo "    </colgroup>
    <tr>
    ";
        // line 96
        $this->displayBlock('admin_list_review_filter', $context, $blocks);
        // line 129
        echo "</tr>
<tr>
    ";
        // line 131
        $this->displayBlock('admin_list_review_sorting', $context, $blocks);
        // line 136
        echo "</tr>

";
        // line 138
        $context["blWhite"] = "";
        // line 139
        $context["_cnt"] = 0;
        // line 140
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
        foreach ($context['_seq'] as $context["_key"] => $context["oReview"]) {
            // line 141
            echo "    ";
            $context["_cnt"] = (($context["_cnt"] ?? null) + 1);
            // line 142
            echo "    <tr id=\"row.";
            echo twig_escape_filter($this->env, ($context["_cnt"] ?? null), "html", null, true);
            echo "\">
        ";
            // line 143
            $this->displayBlock('admin_list_review_item', $context, $blocks);
            // line 148
            echo "    </tr>
";
            // line 149
            if ((($context["blWhite"] ?? null) == "2")) {
                // line 150
                echo "    ";
                $context["blWhite"] = "";
            } else {
                // line 152
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['oReview'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 155
        $this->loadTemplate("@__main__/pagenavisnippet.html.twig", "@__main__/list_review.html.twig", 155)->display(twig_array_merge($context, ["colspan" => "8"]));
        // line 156
        echo "
</table>
</form>

</div>

<script type=\"text/javascript\">
if (parent.parent)
{   parent.parent.sShopTitle   = \"";
        // line 164
        echo addslashes(twig_get_attribute($this->env, $this->source, ($context["actshopobj"] ?? null), "oxshops__oxname", [], "any", false, false, false, 164));
        echo "\";
    parent.parent.sMenuItem    = \"";
        // line 165
        echo $this->extensions['OxidEsales\Twig\Extensions\TranslateExtension']->translate(["ident" => "GENERAL_MENUITEM"]);
        echo "\";
    parent.parent.sMenuSubItem = \"";
        // line 166
        echo $this->extensions['OxidEsales\Twig\Extensions\TranslateExtension']->translate(["ident" => "snpreviewlistheader"]);
        echo "\";
    parent.parent.sWorkArea    = \"";
        // line 167
        echo twig_escape_filter($this->env, ($context["_act"] ?? null), "html", null, true);
        echo "\";
    parent.parent.setTitle();
}
</script>
</body>
</html>
";
    }

    // line 89
    public function block_admin_list_review_colgroup($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 90
        echo "            <col width=\"5%\">
            <col width=\"70%\">
            <col width=\"25%\">
        ";
    }

    // line 96
    public function block_admin_list_review_filter($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 97
        echo "    <td class=\"listfilter first\">
        <div class=\"r1\"><div class=\"b1\">
        <input class=\"listedit\" type=\"text\" size=\"15\" maxlength=\"128\" name=\"where[oxreviews][oxcreate]\" value=\"";
        // line 99
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["where"] ?? null), "oxreviews", [], "any", false, false, false, 99), "oxcreate", [], "any", false, false, false, 99), "html", null, true);
        echo "\">
        </div></div>
    </td>
    <td class=\"listfilter\">
        <div class=\"r1\"><div class=\"b1\">
        <input class=\"listedit\" type=\"text\" size=\"15\" maxlength=\"128\" name=\"where[oxreviews][oxtext]\" value=\"";
        // line 104
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["where"] ?? null), "oxreviews", [], "any", false, false, false, 104), "oxtext", [], "any", false, false, false, 104), "html", null, true);
        echo "\">
        </div></div>
    </td>
    <td class=\"listfilter\" nowrap>
        <div class=\"r1\"><div class=\"b1\">
        <div class=\"find\">
            <select name=\"changelang\" class=\"editinput\" onChange=\"Javascript:changeLanguage();\">
              ";
        // line 111
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["lang"]) {
            // line 112
            echo "              <option value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["lang"], "id", [], "any", false, false, false, 112), "html", null, true);
            echo "\" ";
            if (twig_get_attribute($this->env, $this->source, $context["lang"], "selected", [], "any", false, false, false, 112)) {
                echo "SELECTED";
            }
            echo ">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["lang"], "name", [], "any", false, false, false, 112), "html", null, true);
            echo "</option>
              ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['lang'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 114
        echo "            </select>
            <select name=\"viewListSize\" class=\"editinput\" onChange=\"JavaScript:top.oxid.admin.changeListSize()\">
              <option value=\"50\" ";
        // line 116
        if ((($context["viewListSize"] ?? null) == 50)) {
            echo "SELECTED";
        }
        echo ">50</option>
              <option value=\"100\" ";
        // line 117
        if ((($context["viewListSize"] ?? null) == 100)) {
            echo "SELECTED";
        }
        echo ">100</option>
              <option value=\"200\" ";
        // line 118
        if ((($context["viewListSize"] ?? null) == 200)) {
            echo "SELECTED";
        }
        echo ">200</option>
            </select>
            <input class=\"listedit\" type=\"submit\" name=\"submitit\" value=\"";
        // line 120
        echo $this->extensions['OxidEsales\Twig\Extensions\TranslateExtension']->translate(["ident" => "GENERAL_SEARCH"]);
        echo "\">
        </div>

        <input class=\"listedit\" type=\"text\" size=\"15\" maxlength=\"128\" name=\"where[oxarticles][oxtitle]\" value=\"";
        // line 123
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["where"] ?? null), "oxarticles", [], "any", false, false, false, 123), "oxtitle", [], "any", false, false, false, 123), "html", null, true);
        echo "\">

        </div>
      </div>
    </td>
    ";
    }

    // line 131
    public function block_admin_list_review_sorting($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 132
        echo "        <td class=\"listheader first\"><a href=\"javascript:top.oxid.admin.setSorting( document.forms.showlist, 'oxreviews', 'oxcreate', 'asc');document.forms.showlist.submit();\" class=\"listheader\">";
        echo $this->extensions['OxidEsales\Twig\Extensions\TranslateExtension']->translate(["ident" => "snpreviewlistoxcreate"]);
        echo "</a></td>
        <td class=\"listheader\"><a href=\"javascript:top.oxid.admin.setSorting( document.forms.showlist, 'oxreviews', 'oxtext', 'asc');document.forms.showlist.submit();\" class=\"listheader\">";
        // line 133
        echo $this->extensions['OxidEsales\Twig\Extensions\TranslateExtension']->translate(["ident" => "snpreviewlistoxtext"]);
        echo "</a></td>
        <td class=\"listheader\"><a href=\"javascript:top.oxid.admin.setSorting( document.forms.showlist, '', 'arttitle', 'asc');document.forms.showlist.submit();\" class=\"listheader\">";
        // line 134
        echo $this->extensions['OxidEsales\Twig\Extensions\TranslateExtension']->translate(["ident" => "snpreviewlistoxtitle"]);
        echo "</a></td>
    ";
    }

    // line 143
    public function block_admin_list_review_item($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 144
        echo "            <td align=\"center\" class=\"listitem";
        echo twig_escape_filter($this->env, ($context["blWhite"] ?? null), "html", null, true);
        echo "\" valign=\"top\"><a href=\"Javascript:editThis( '";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["oReview"] ?? null), "oxreviews__oxobjectid", [], "any", false, false, false, 144), "value", [], "any", false, false, false, 144), "html", null, true);
        echo "');\" class=\"listitem";
        echo twig_escape_filter($this->env, ($context["blWhite"] ?? null), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->extensions['OxidEsales\Twig\Extensions\Filters\FormatDateExtension']->formatDate(twig_get_attribute($this->env, $this->source, ($context["oReview"] ?? null), "oxreviews__oxcreate", [], "any", false, false, false, 144)), "html", null, true);
        echo "</a></td>
            <td class=\"listitem";
        // line 145
        echo twig_escape_filter($this->env, ($context["blWhite"] ?? null), "html", null, true);
        echo "\" valign=\"top\"><a href=\"Javascript:editThis( '";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["oReview"] ?? null), "oxreviews__oxobjectid", [], "any", false, false, false, 145), "value", [], "any", false, false, false, 145), "html", null, true);
        echo "');\" class=\"listitem";
        echo twig_escape_filter($this->env, ($context["blWhite"] ?? null), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["oReview"] ?? null), "oxreviews__oxtext", [], "any", false, false, false, 145), "value", [], "any", false, false, false, 145), "html", null, true);
        echo "</a></td>
            <td class=\"listitem";
        // line 146
        echo twig_escape_filter($this->env, ($context["blWhite"] ?? null), "html", null, true);
        echo "\" valign=\"top\"><a href=\"Javascript:editThis( '";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["oReview"] ?? null), "oxreviews__oxobjectid", [], "any", false, false, false, 146), "value", [], "any", false, false, false, 146), "html", null, true);
        echo "');\" class=\"listitem";
        echo twig_escape_filter($this->env, ($context["blWhite"] ?? null), "html", null, true);
        echo "\">";
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["oReview"] ?? null), "oxreviews__oxparentid", [], "any", false, false, false, 146), "value", [], "any", false, false, false, 146)) {
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["oReview"] ?? null), "oxreviews__parenttitle", [], "any", false, false, false, 146), "value", [], "any", false, false, false, 146), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["oReview"] ?? null), "oxreviews__oxvarselect", [], "any", false, false, false, 146), "value", [], "any", false, false, false, 146), "html", null, true);
        } else {
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["oReview"] ?? null), "oxreviews__oxtitle", [], "any", false, false, false, 146), "value", [], "any", false, false, false, 146), "html", null, true);
        }
        echo "</a></td>
        ";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@__main__/list_review.html.twig";
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
        return array (  497 => 146,  487 => 145,  476 => 144,  472 => 143,  466 => 134,  462 => 133,  457 => 132,  453 => 131,  443 => 123,  437 => 120,  430 => 118,  424 => 117,  418 => 116,  414 => 114,  399 => 112,  395 => 111,  385 => 104,  377 => 99,  373 => 97,  369 => 96,  362 => 90,  358 => 89,  347 => 167,  343 => 166,  339 => 165,  335 => 164,  325 => 156,  323 => 155,  307 => 152,  303 => 150,  301 => 149,  298 => 148,  296 => 143,  291 => 142,  288 => 141,  271 => 140,  269 => 139,  267 => 138,  263 => 136,  261 => 131,  257 => 129,  255 => 96,  251 => 94,  249 => 89,  242 => 85,  238 => 84,  233 => 82,  229 => 81,  225 => 79,  219 => 76,  216 => 75,  214 => 74,  208 => 71,  204 => 70,  198 => 67,  194 => 66,  190 => 65,  171 => 48,  165 => 47,  162 => 46,  156 => 45,  152 => 43,  149 => 42,  145 => 40,  139 => 39,  130 => 33,  126 => 31,  123 => 30,  119 => 29,  116 => 28,  113 => 27,  110 => 26,  106 => 25,  103 => 24,  100 => 23,  98 => 22,  95 => 21,  92 => 20,  88 => 19,  85 => 18,  83 => 17,  76 => 12,  74 => 11,  72 => 10,  62 => 8,  59 => 7,  54 => 6,  50 => 5,  48 => 4,  46 => 3,  43 => 2,  41 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@__main__/list_review.html.twig", "/var/www/html/source/Application/views/admin_twig/tpl/list_review.html.twig");
    }
}
