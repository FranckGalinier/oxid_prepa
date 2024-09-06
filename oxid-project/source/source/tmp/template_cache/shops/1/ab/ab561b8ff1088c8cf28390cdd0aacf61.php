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

/* @__main__/pagenavisnippet.html.twig */
class __TwigTemplate_5c491e099520114dc99bfeb96df5b276 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'pagenavisnippet_main' => [$this, 'block_pagenavisnippet_main'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        $this->displayBlock('pagenavisnippet_main', $context, $blocks);
    }

    public function block_pagenavisnippet_main($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 2
        if (($context["pagenavi"] ?? null)) {
            // line 3
            echo "
  ";
            // line 4
            $context["linkSort"] = "";
            // line 5
            echo "  ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["oView"] ?? null), "getListSorting", [], "method", false, false, false, 5));
            foreach ($context['_seq'] as $context["sTable"] => $context["aField"]) {
                // line 6
                echo "    ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($context["aField"]);
                foreach ($context['_seq'] as $context["sField"] => $context["sSorting"]) {
                    // line 7
                    echo "      ";
                    $context["linkSort"] = $this->extensions['OxidEsales\Twig\Extensions\Filters\CatExtension']->cat($this->extensions['OxidEsales\Twig\Extensions\Filters\CatExtension']->cat($this->extensions['OxidEsales\Twig\Extensions\Filters\CatExtension']->cat($this->extensions['OxidEsales\Twig\Extensions\Filters\CatExtension']->cat($this->extensions['OxidEsales\Twig\Extensions\Filters\CatExtension']->cat($this->extensions['OxidEsales\Twig\Extensions\Filters\CatExtension']->cat($this->extensions['OxidEsales\Twig\Extensions\Filters\CatExtension']->cat(($context["linkSort"] ?? null), "sort["), $context["sTable"]), "]["), $context["sField"]), "]="), $context["sSorting"]), "&");
                    // line 8
                    echo "    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['sField'], $context['sSorting'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 9
                echo "  ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['sTable'], $context['aField'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 10
            echo "
  ";
            // line 11
            $context["where"] = twig_get_attribute($this->env, $this->source, ($context["oView"] ?? null), "getListFilter", [], "method", false, false, false, 11);
            // line 12
            echo "  ";
            $context["whereparam"] = "&";
            // line 13
            echo "  ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["where"] ?? null));
            foreach ($context['_seq'] as $context["sTable"] => $context["aField"]) {
                // line 14
                echo "    ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($context["aField"]);
                foreach ($context['_seq'] as $context["sField"] => $context["sFilter"]) {
                    // line 15
                    echo "      ";
                    $context["whereparam"] = $this->extensions['OxidEsales\Twig\Extensions\Filters\CatExtension']->cat($this->extensions['OxidEsales\Twig\Extensions\Filters\CatExtension']->cat($this->extensions['OxidEsales\Twig\Extensions\Filters\CatExtension']->cat($this->extensions['OxidEsales\Twig\Extensions\Filters\CatExtension']->cat($this->extensions['OxidEsales\Twig\Extensions\Filters\CatExtension']->cat($this->extensions['OxidEsales\Twig\Extensions\Filters\CatExtension']->cat($this->extensions['OxidEsales\Twig\Extensions\Filters\CatExtension']->cat(($context["whereparam"] ?? null), "where["), $context["sTable"]), "]["), $context["sField"]), "]="), $context["sFilter"]), "&");
                    // line 16
                    echo "    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['sField'], $context['sFilter'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 17
                echo "  ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['sTable'], $context['aField'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 18
            echo "  ";
            $context["viewListSize"] = twig_get_attribute($this->env, $this->source, ($context["oView"] ?? null), "getViewListSize", [], "method", false, false, false, 18);
            // line 19
            echo "  ";
            $context["whereparam"] = $this->extensions['OxidEsales\Twig\Extensions\Filters\CatExtension']->cat($this->extensions['OxidEsales\Twig\Extensions\Filters\CatExtension']->cat(($context["whereparam"] ?? null), "viewListSize="), ($context["viewListSize"] ?? null));
            // line 20
            echo "
<tr>
<td class=\"pagination\" colspan=\"";
            // line 22
            echo twig_escape_filter($this->env, ((array_key_exists("colspan", $context)) ? (_twig_default_filter(($context["colspan"] ?? null), "2")) : ("2")), "html", null, true);
            echo "\">
  <div class=\"r1\">
    <div class=\"b1\">

    <table cellspacing=\"0\" cellpadding=\"0\" border=\"0\" width=\"100%\">
      <tr>
        <td id=\"nav.site\" class=\"pagenavigation\" align=\"left\" width=\"33%\">
            ";
            // line 29
            echo $this->extensions['OxidEsales\Twig\Extensions\TranslateExtension']->translate(["ident" => "NAVIGATION_PAGE"]);
            echo " ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["pagenavi"] ?? null), "actpage", [], "any", false, false, false, 29), "html", null, true);
            echo " / ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["pagenavi"] ?? null), "pages", [], "any", false, false, false, 29), "html", null, true);
            echo "
        </td>
        <td class=\"pagenavigation\" height=\"22\" align=\"center\" width=\"33%\">
           ";
            // line 32
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["pagenavi"] ?? null), "changePage", [], "any", false, false, false, 32));
            foreach ($context['_seq'] as $context["iPage"] => $context["page"]) {
                // line 33
                echo "             <a id=\"nav.page.";
                echo twig_escape_filter($this->env, $context["iPage"], "html", null, true);
                echo "\" class=\"pagenavigation";
                if (($context["iPage"] == twig_get_attribute($this->env, $this->source, ($context["pagenavi"] ?? null), "actpage", [], "any", false, false, false, 33))) {
                    echo " pagenavigationactive";
                }
                echo "\" href=\"";
                echo twig_get_attribute($this->env, $this->source, ($context["oViewConf"] ?? null), "getSelfLink", [], "method", false, false, false, 33);
                echo "&cl=";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["oViewConf"] ?? null), "getActiveClassName", [], "method", false, false, false, 33), "html", null, true);
                echo "&oxid=";
                echo twig_escape_filter($this->env, ($context["oxid"] ?? null), "html", null, true);
                echo "&jumppage=";
                echo twig_escape_filter($this->env, $context["iPage"], "html", null, true);
                echo "&";
                echo twig_escape_filter($this->env, ($context["linkSort"] ?? null), "html", null, true);
                echo "actedit=";
                echo twig_escape_filter($this->env, ($context["actedit"] ?? null), "html", null, true);
                echo "&language=";
                echo twig_escape_filter($this->env, ($context["actlang"] ?? null), "html", null, true);
                echo "&editlanguage=";
                echo twig_escape_filter($this->env, ($context["actlang"] ?? null), "html", null, true);
                echo twig_escape_filter($this->env, ($context["whereparam"] ?? null), "html", null, true);
                echo "&folder=";
                echo twig_escape_filter($this->env, ($context["folder"] ?? null), "html", null, true);
                echo "&pwrsearchfld=";
                echo twig_escape_filter($this->env, ($context["pwrsearchfld"] ?? null), "html", null, true);
                echo "&art_category=";
                echo twig_escape_filter($this->env, ($context["art_category"] ?? null), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $context["iPage"], "html", null, true);
                echo "</a>
           ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['iPage'], $context['page'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 35
            echo "        </td>
        <td class=\"pagenavigation\" align=\"right\" width=\"33%\">
          <a id=\"nav.first\" class=\"pagenavigation\" href=\"";
            // line 37
            echo twig_get_attribute($this->env, $this->source, ($context["oViewConf"] ?? null), "getSelfLink", [], "method", false, false, false, 37);
            echo "&cl=";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["oViewConf"] ?? null), "getActiveClassName", [], "method", false, false, false, 37), "html", null, true);
            echo "&oxid=";
            echo twig_escape_filter($this->env, ($context["oxid"] ?? null), "html", null, true);
            echo "&jumppage=1&";
            echo ($context["linkSort"] ?? null);
            echo "&actedit=";
            echo twig_escape_filter($this->env, ($context["actedit"] ?? null), "html", null, true);
            echo "&language=";
            echo twig_escape_filter($this->env, ($context["actlang"] ?? null), "html", null, true);
            echo "&editlanguage=";
            echo twig_escape_filter($this->env, ($context["actlang"] ?? null), "html", null, true);
            echo ($context["whereparam"] ?? null);
            echo "&folder=";
            echo twig_escape_filter($this->env, ($context["folder"] ?? null), "html", null, true);
            echo "&pwrsearchfld=";
            echo twig_escape_filter($this->env, ($context["pwrsearchfld"] ?? null), "html", null, true);
            echo "&art_category=";
            echo twig_escape_filter($this->env, ($context["art_category"] ?? null), "html", null, true);
            echo "\">";
            echo $this->extensions['OxidEsales\Twig\Extensions\TranslateExtension']->translate(["ident" => "GENERAL_LIST_FIRST"]);
            echo "</a>
          <a id=\"nav.prev\" class=\"pagenavigation\" href=\"";
            // line 38
            echo twig_get_attribute($this->env, $this->source, ($context["oViewConf"] ?? null), "getSelfLink", [], "method", false, false, false, 38);
            echo "&cl=";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["oViewConf"] ?? null), "getActiveClassName", [], "method", false, false, false, 38), "html", null, true);
            echo "&oxid=";
            echo twig_escape_filter($this->env, ($context["oxid"] ?? null), "html", null, true);
            echo "&jumppage=";
            if (((twig_get_attribute($this->env, $this->source, ($context["pagenavi"] ?? null), "actpage", [], "any", false, false, false, 38) - 1) > 0)) {
                echo twig_escape_filter($this->env, (twig_get_attribute($this->env, $this->source, ($context["pagenavi"] ?? null), "actpage", [], "any", false, false, false, 38) - 1), "html", null, true);
            } else {
                echo "1";
            }
            echo "&";
            echo ($context["linkSort"] ?? null);
            echo "&actedit=";
            echo twig_escape_filter($this->env, ($context["actedit"] ?? null), "html", null, true);
            echo "&language=";
            echo twig_escape_filter($this->env, ($context["actlang"] ?? null), "html", null, true);
            echo "&editlanguage=";
            echo twig_escape_filter($this->env, ($context["actlang"] ?? null), "html", null, true);
            echo ($context["whereparam"] ?? null);
            echo "&folder=";
            echo twig_escape_filter($this->env, ($context["folder"] ?? null), "html", null, true);
            echo "&pwrsearchfld=";
            echo twig_escape_filter($this->env, ($context["pwrsearchfld"] ?? null), "html", null, true);
            echo "&art_category=";
            echo twig_escape_filter($this->env, ($context["art_category"] ?? null), "html", null, true);
            echo "\">";
            echo $this->extensions['OxidEsales\Twig\Extensions\TranslateExtension']->translate(["ident" => "GENERAL_LIST_PREV"]);
            echo "</a>
          <a id=\"nav.next\" class=\"pagenavigation\" href=\"";
            // line 39
            echo twig_get_attribute($this->env, $this->source, ($context["oViewConf"] ?? null), "getSelfLink", [], "method", false, false, false, 39);
            echo "&cl=";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["oViewConf"] ?? null), "getActiveClassName", [], "method", false, false, false, 39), "html", null, true);
            echo "&oxid=";
            echo twig_escape_filter($this->env, ($context["oxid"] ?? null), "html", null, true);
            echo "&jumppage=";
            if (((twig_get_attribute($this->env, $this->source, ($context["pagenavi"] ?? null), "actpage", [], "any", false, false, false, 39) + 1) > twig_get_attribute($this->env, $this->source, ($context["pagenavi"] ?? null), "pages", [], "any", false, false, false, 39))) {
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["pagenavi"] ?? null), "actpage", [], "any", false, false, false, 39), "html", null, true);
            } else {
                echo twig_escape_filter($this->env, (twig_get_attribute($this->env, $this->source, ($context["pagenavi"] ?? null), "actpage", [], "any", false, false, false, 39) + 1), "html", null, true);
            }
            echo "&";
            echo ($context["linkSort"] ?? null);
            echo "&actedit=";
            echo twig_escape_filter($this->env, ($context["actedit"] ?? null), "html", null, true);
            echo "&language=";
            echo twig_escape_filter($this->env, ($context["actlang"] ?? null), "html", null, true);
            echo "&editlanguage=";
            echo twig_escape_filter($this->env, ($context["actlang"] ?? null), "html", null, true);
            echo ($context["whereparam"] ?? null);
            echo "&folder=";
            echo twig_escape_filter($this->env, ($context["folder"] ?? null), "html", null, true);
            echo "&pwrsearchfld=";
            echo twig_escape_filter($this->env, ($context["pwrsearchfld"] ?? null), "html", null, true);
            echo "&art_category=";
            echo twig_escape_filter($this->env, ($context["art_category"] ?? null), "html", null, true);
            echo "\">";
            echo $this->extensions['OxidEsales\Twig\Extensions\TranslateExtension']->translate(["ident" => "GENERAL_LIST_NEXT"]);
            echo "</a>
          <a id=\"nav.last\" class=\"pagenavigation\" href=\"";
            // line 40
            echo twig_get_attribute($this->env, $this->source, ($context["oViewConf"] ?? null), "getSelfLink", [], "method", false, false, false, 40);
            echo "&cl=";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["oViewConf"] ?? null), "getActiveClassName", [], "method", false, false, false, 40), "html", null, true);
            echo "&oxid=";
            echo twig_escape_filter($this->env, ($context["oxid"] ?? null), "html", null, true);
            echo "&jumppage=";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["pagenavi"] ?? null), "pages", [], "any", false, false, false, 40), "html", null, true);
            echo "&";
            echo ($context["linkSort"] ?? null);
            echo "&actedit=";
            echo twig_escape_filter($this->env, ($context["actedit"] ?? null), "html", null, true);
            echo "&language=";
            echo twig_escape_filter($this->env, ($context["actlang"] ?? null), "html", null, true);
            echo "&editlanguage=";
            echo twig_escape_filter($this->env, ($context["actlang"] ?? null), "html", null, true);
            echo ($context["whereparam"] ?? null);
            echo "&folder=";
            echo twig_escape_filter($this->env, ($context["folder"] ?? null), "html", null, true);
            echo "&pwrsearchfld=";
            echo twig_escape_filter($this->env, ($context["pwrsearchfld"] ?? null), "html", null, true);
            echo "&art_category=";
            echo twig_escape_filter($this->env, ($context["art_category"] ?? null), "html", null, true);
            echo "\">";
            echo $this->extensions['OxidEsales\Twig\Extensions\TranslateExtension']->translate(["ident" => "GENERAL_LIST_LAST"]);
            echo "</a>
        </td>
      </tr>
    </table>
    </div>
  </div>
</td>
</tr>
";
        }
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@__main__/pagenavisnippet.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo()
    {
        return array (  273 => 40,  242 => 39,  211 => 38,  186 => 37,  182 => 35,  144 => 33,  140 => 32,  130 => 29,  120 => 22,  116 => 20,  113 => 19,  110 => 18,  104 => 17,  98 => 16,  95 => 15,  90 => 14,  85 => 13,  82 => 12,  80 => 11,  77 => 10,  71 => 9,  65 => 8,  62 => 7,  57 => 6,  52 => 5,  50 => 4,  47 => 3,  45 => 2,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@__main__/pagenavisnippet.html.twig", "/var/www/html/source/Application/views/admin_twig/tpl/pagenavisnippet.html.twig");
    }
}
