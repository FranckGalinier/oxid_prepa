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

/* @__main__/manufacturer_list.html.twig */
class __TwigTemplate_ec8939d82f411b024aecb1571a1004b7 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'admin_manufacturer_list_colgroup' => [$this, 'block_admin_manufacturer_list_colgroup'],
            'admin_manufacturer_list_filter' => [$this, 'block_admin_manufacturer_list_filter'],
            'admin_manufacturer_list_sorting' => [$this, 'block_admin_manufacturer_list_sorting'],
            'admin_manufacturer_list_item' => [$this, 'block_admin_manufacturer_list_item'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        $this->loadTemplate("@__main__/headitem.html.twig", "@__main__/manufacturer_list.html.twig", 1)->display(twig_array_merge($context, ["title" => $this->extensions['OxidEsales\Twig\Extensions\Filters\TranslateExtension']->translate("MANUFACTURER_LIST_TITLE"), "box" => "list"]));
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
    window.onload = function () {
        top.reloadEditFrame();
        ";
        // line 14
        if ((($context["updatelist"] ?? null) == 1)) {
            // line 15
            echo "        top.oxid.admin.updateList('";
            echo twig_escape_filter($this->env, ($context["oxid"] ?? null), "html", null, true);
            echo "');
        ";
        }
        // line 17
        echo "    }
    //-->
</script>

<div id=\"liste\">

    <form name=\"search\" id=\"search\" action=\"";
        // line 23
        echo twig_get_attribute($this->env, $this->source, ($context["oViewConf"] ?? null), "getSelfLink", [], "method", false, false, false, 23);
        echo "\" method=\"post\">
        ";
        // line 24
        $this->loadTemplate("@__main__/_formparams.html.twig", "@__main__/manufacturer_list.html.twig", 24)->display(twig_array_merge($context, ["cl" => "manufacturer_list", "lstrt" => ($context["lstrt"] ?? null), "actedit" => ($context["actedit"] ?? null), "oxid" => ($context["oxid"] ?? null), "fnc" => "", "language" => ($context["actlang"] ?? null), "editlanguage" => ($context["actlang"] ?? null)]));
        // line 25
        echo "        <table cellspacing=\"0\" cellpadding=\"0\" border=\"0\" width=\"100%\">
            <colgroup>
                ";
        // line 27
        $this->displayBlock('admin_manufacturer_list_colgroup', $context, $blocks);
        // line 34
        echo "            </colgroup>
            <tr class=\"listitem\">
                ";
        // line 36
        $this->displayBlock('admin_manufacturer_list_filter', $context, $blocks);
        // line 75
        echo "            </tr>
            <tr>
                ";
        // line 77
        $this->displayBlock('admin_manufacturer_list_sorting', $context, $blocks);
        // line 91
        echo "            </tr>

            ";
        // line 93
        $context["blWhite"] = "";
        // line 94
        echo "            ";
        $context["_cnt"] = 0;
        // line 95
        echo "            ";
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
            // line 96
            echo "                ";
            $context["_cnt"] = (($context["_cnt"] ?? null) + 1);
            // line 97
            echo "                <tr id=\"row.";
            echo twig_escape_filter($this->env, ($context["_cnt"] ?? null), "html", null, true);
            echo "\">
                    ";
            // line 98
            $this->displayBlock('admin_manufacturer_list_item', $context, $blocks);
            // line 128
            echo "                </tr>
                ";
            // line 129
            if ((($context["blWhite"] ?? null) == "2")) {
                // line 130
                echo "                    ";
                $context["blWhite"] = "";
                // line 131
                echo "                ";
            } else {
                // line 132
                echo "                    ";
                $context["blWhite"] = "2";
                // line 133
                echo "                ";
            }
            // line 134
            echo "            ";
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
        echo "            ";
        $this->loadTemplate("@__main__/pagenavisnippet.html.twig", "@__main__/manufacturer_list.html.twig", 135)->display(twig_array_merge($context, ["colspan" => "5"]));
        // line 136
        echo "        </table>
    </form>
</div>

";
        // line 140
        $this->loadTemplate("@__main__/pagetabsnippet.html.twig", "@__main__/manufacturer_list.html.twig", 140)->display($context);
        // line 141
        echo "
<script type=\"text/javascript\">
    if (parent.parent) {
        parent.parent.sShopTitle = \"";
        // line 144
        echo addslashes(twig_get_attribute($this->env, $this->source, ($context["actshopobj"] ?? null), "oxshops__oxname", [], "any", false, false, false, 144));
        echo "\";
        parent.parent.sMenuItem = \"";
        // line 145
        echo $this->extensions['OxidEsales\Twig\Extensions\TranslateExtension']->translate(["ident" => "MANUFACTURER_LIST_MENUITEM"]);
        echo "\";
        parent.parent.sMenuSubItem = \"";
        // line 146
        echo $this->extensions['OxidEsales\Twig\Extensions\TranslateExtension']->translate(["ident" => "MANUFACTURER_LIST_MENUSUBITEM"]);
        echo "\";
        parent.parent.sWorkArea = \"";
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

    // line 27
    public function block_admin_manufacturer_list_colgroup($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 28
        echo "                    <col width=\"3%\">
                    <col width=\"10%\">
                    <col width=\"10%\">
                    <col width=\"77%\">
                    <col width=\"1%\">
                ";
    }

    // line 36
    public function block_admin_manufacturer_list_filter($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 37
        echo "                    <td valign=\"top\" class=\"listfilter first\" align=\"right\">
                        <div class=\"r1\">
                            <div class=\"b1\">&nbsp;</div>
                        </div>
                    </td>
                    <td valign=\"top\" class=\"listfilter\">
                        <div class=\"r1\">
                            <div class=\"b1\">
                                &nbsp
                            </div>
                        </div>
                    </td>
                    <td valign=\"top\" class=\"listfilter\">
                        <div class=\"r1\">
                            <div class=\"b1\">
                                <input class=\"listedit\" type=\"text\" size=\"50\" maxlength=\"128\" name=\"where[oxmanufacturers][oxtitle]\" value=\"";
        // line 52
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["where"] ?? null), "oxmanufacturers", [], "any", false, false, false, 52), "oxtitle", [], "any", false, false, false, 52), "html", null, true);
        echo "\">
                            </div>
                        </div>
                    </td>
                    <td valign=\"top\" class=\"listfilter\" height=\"20\" colspan=\"2\">
                        <div class=\"r1\">
                            <div class=\"b1\">

                                <div class=\"find\">
                                    <select name=\"changelang\" class=\"editinput\" onChange=\"Javascript:top.oxid.admin.changeLanguage();\">
                                        ";
        // line 62
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["lang"]) {
            // line 63
            echo "                                            <option value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["lang"], "id", [], "any", false, false, false, 63), "html", null, true);
            echo "\" ";
            if (twig_get_attribute($this->env, $this->source, $context["lang"], "selected", [], "any", false, false, false, 63)) {
                echo "SELECTED";
            }
            echo ">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["lang"], "name", [], "any", false, false, false, 63), "html", null, true);
            echo "</option>
                                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['lang'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 65
        echo "                                    </select>
                                    <input class=\"listedit\" type=\"submit\" name=\"submitit\" value=\"";
        // line 66
        echo $this->extensions['OxidEsales\Twig\Extensions\TranslateExtension']->translate(["ident" => "GENERAL_SEARCH"]);
        echo "\">
                                </div>

                                <input class=\"listedit\" type=\"text\" size=\"50\" maxlength=\"128\" name=\"where[oxmanufacturers][oxshortdesc]\"
                                       value=\"";
        // line 70
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["where"] ?? null), "oxmanufacturers", [], "any", false, false, false, 70), "oxshortdesc", [], "any", false, false, false, 70), "html", null, true);
        echo "\">
                            </div>
                        </div>
                    </td>
                ";
    }

    // line 77
    public function block_admin_manufacturer_list_sorting($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 78
        echo "                    <td class=\"listheader first\" height=\"15\" width=\"30\" align=\"center\"><a
                                href=\"Javascript:top.oxid.admin.setSorting( document.search, 'oxmanufacturers', 'oxactive', 'asc');document.search.submit();\"
                                class=\"listheader\">";
        // line 80
        echo $this->extensions['OxidEsales\Twig\Extensions\TranslateExtension']->translate(["ident" => "GENERAL_ACTIVTITLE"]);
        echo "</a></td>
                    <td class=\"listheader\" height=\"15\" align=\"center\"><a
                                href=\"Javascript:top.oxid.admin.setSorting( document.search, 'oxmanufacturers', 'oxsort', 'desc');document.search.submit();\"
                                class=\"listheader\">";
        // line 83
        echo $this->extensions['OxidEsales\Twig\Extensions\TranslateExtension']->translate(["ident" => "GENERAL_SORT"]);
        echo "</a></td>
                    <td class=\"listheader\" height=\"15\">&nbsp;<a
                                href=\"Javascript:top.oxid.admin.setSorting( document.search, 'oxmanufacturers', 'oxtitle', 'asc');document.search.submit();\"
                                class=\"listheader\">";
        // line 86
        echo $this->extensions['OxidEsales\Twig\Extensions\TranslateExtension']->translate(["ident" => "GENERAL_TITLE"]);
        echo "</a></td>
                    <td class=\"listheader\" height=\"15\" colspan=\"2\"><a
                                href=\"Javascript:top.oxid.admin.setSorting( document.search, 'oxmanufacturers', 'oxshortdesc', 'asc');document.search.submit();\"
                                class=\"listheader\">";
        // line 89
        echo $this->extensions['OxidEsales\Twig\Extensions\TranslateExtension']->translate(["ident" => "GENERAL_SHORTDESC"]);
        echo "</a></td>
                ";
    }

    // line 98
    public function block_admin_manufacturer_list_item($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 99
        echo "                        ";
        if ((twig_get_attribute($this->env, $this->source, ($context["listitem"] ?? null), "blacklist", [], "any", false, false, false, 99) == 1)) {
            // line 100
            echo "                            ";
            $context["listclass"] = "listitem3";
            // line 101
            echo "                        ";
        } else {
            // line 102
            echo "                            ";
            $context["listclass"] = ("listitem" . ($context["blWhite"] ?? null));
            // line 103
            echo "                        ";
        }
        // line 104
        echo "                        ";
        if ((twig_get_attribute($this->env, $this->source, ($context["listitem"] ?? null), "getId", [], "method", false, false, false, 104) == ($context["oxid"] ?? null))) {
            // line 105
            echo "                            ";
            $context["listclass"] = "listitem4";
            // line 106
            echo "                        ";
        }
        // line 107
        echo "                        <td valign=\"top\" class=\"";
        echo twig_escape_filter($this->env, ($context["listclass"] ?? null), "html", null, true);
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["listitem"] ?? null), "oxmanufacturers__oxactive", [], "any", false, false, false, 107), "value", [], "any", false, false, false, 107) == 1)) {
            echo " active";
        }
        echo "\" height=\"15\">
                            <div class=\"listitemfloating\">&nbsp;</div>
                        </td>
                        <td valign=\"top\" class=\"";
        // line 110
        echo twig_escape_filter($this->env, ($context["listclass"] ?? null), "html", null, true);
        echo "\" height=\"15\" align=\"center\">
                            <div class=\"listitemfloating\">&nbsp;<a href=\"Javascript:top.oxid.admin.editThis('";
        // line 111
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["listitem"] ?? null), "oxmanufacturers__oxid", [], "any", false, false, false, 111), "value", [], "any", false, false, false, 111), "html", null, true);
        echo "');\"
                                                                   class=\"";
        // line 112
        echo twig_escape_filter($this->env, ($context["listclass"] ?? null), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["listitem"] ?? null), "oxmanufacturers__oxsort", [], "any", false, false, false, 112), "value", [], "any", false, false, false, 112), "html", null, true);
        echo "</a></div>
                        </td>
                        <td valign=\"top\" class=\"";
        // line 114
        echo twig_escape_filter($this->env, ($context["listclass"] ?? null), "html", null, true);
        echo "\" height=\"15\">
                            <div class=\"listitemfloating\">&nbsp;<a href=\"Javascript:top.oxid.admin.editThis('";
        // line 115
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["listitem"] ?? null), "oxmanufacturers__oxid", [], "any", false, false, false, 115), "value", [], "any", false, false, false, 115), "html", null, true);
        echo "');\"
                                                                   class=\"";
        // line 116
        echo twig_escape_filter($this->env, ($context["listclass"] ?? null), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["listitem"] ?? null), "oxmanufacturers__oxtitle", [], "any", false, false, false, 116), "value", [], "any", false, false, false, 116), "html", null, true);
        echo "</a></div>
                        </td>
                        <td valign=\"top\" class=\"";
        // line 118
        echo twig_escape_filter($this->env, ($context["listclass"] ?? null), "html", null, true);
        echo "\" height=\"15\">
                            <div class=\"listitemfloating\"><a href=\"Javascript:top.oxid.admin.editThis('";
        // line 119
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["listitem"] ?? null), "oxmanufacturers__oxid", [], "any", false, false, false, 119), "value", [], "any", false, false, false, 119), "html", null, true);
        echo "');\"
                                                             class=\"";
        // line 120
        echo twig_escape_filter($this->env, ($context["listclass"] ?? null), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["listitem"] ?? null), "oxmanufacturers__oxshortdesc", [], "any", false, false, false, 120), "value", [], "any", false, false, false, 120), "html", null, true);
        echo "</a></div>
                        </td>
                        <td class=\"";
        // line 122
        echo twig_escape_filter($this->env, ($context["listclass"] ?? null), "html", null, true);
        echo "\" align=\"right\">
                            ";
        // line 123
        if ( !($context["readonly"] ?? null)) {
            // line 124
            echo "                                ";
            $this->loadTemplate("@__main__/include/manufacturer_list_item_actions.html.twig", "@__main__/manufacturer_list.html.twig", 124)->display($context);
            // line 125
            echo "                            ";
        }
        // line 126
        echo "                        </td>
                    ";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@__main__/manufacturer_list.html.twig";
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
        return array (  424 => 126,  421 => 125,  418 => 124,  416 => 123,  412 => 122,  405 => 120,  401 => 119,  397 => 118,  390 => 116,  386 => 115,  382 => 114,  375 => 112,  371 => 111,  367 => 110,  357 => 107,  354 => 106,  351 => 105,  348 => 104,  345 => 103,  342 => 102,  339 => 101,  336 => 100,  333 => 99,  329 => 98,  323 => 89,  317 => 86,  311 => 83,  305 => 80,  301 => 78,  297 => 77,  288 => 70,  281 => 66,  278 => 65,  263 => 63,  259 => 62,  246 => 52,  229 => 37,  225 => 36,  216 => 28,  212 => 27,  201 => 147,  197 => 146,  193 => 145,  189 => 144,  184 => 141,  182 => 140,  176 => 136,  173 => 135,  159 => 134,  156 => 133,  153 => 132,  150 => 131,  147 => 130,  145 => 129,  142 => 128,  140 => 98,  135 => 97,  132 => 96,  114 => 95,  111 => 94,  109 => 93,  105 => 91,  103 => 77,  99 => 75,  97 => 36,  93 => 34,  91 => 27,  87 => 25,  85 => 24,  81 => 23,  73 => 17,  67 => 15,  65 => 14,  58 => 9,  54 => 7,  50 => 5,  48 => 4,  45 => 3,  43 => 2,  41 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@__main__/manufacturer_list.html.twig", "/var/www/html/source/Application/views/admin_twig/tpl/manufacturer_list.html.twig");
    }
}
