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

/* @__main__/widget/header/categorylist.html.twig */
class __TwigTemplate_8cea29093e8665f718954551bc60d408 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'dd_widget_header_categorylist' => [$this, 'block_dd_widget_header_categorylist'],
            'dd_widget_header_categorylist_navbar_mega_menu' => [$this, 'block_dd_widget_header_categorylist_navbar_mega_menu'],
            'dd_widget_header_categorylist_navbar_list_mega_menu' => [$this, 'block_dd_widget_header_categorylist_navbar_list_mega_menu'],
            'dd_widget_header_categorylist_content' => [$this, 'block_dd_widget_header_categorylist_content'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        $this->displayBlock('dd_widget_header_categorylist', $context, $blocks);
    }

    public function block_dd_widget_header_categorylist($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 2
        echo "
    ";
        // line 3
        if (($context["oxcmp_categories"] ?? null)) {
            // line 4
            echo "        ";
            $context["homeNotSelected"] = (twig_get_attribute($this->env, $this->source, ($context["oViewConf"] ?? null), "getTopActionClassName", [], "method", false, false, false, 4) != "start");
            // line 5
            echo "
        <div class=\"container-xxl\">
            <nav id=\"mainnav\" class=\"navbar navbar-mega navbar-expand-lg p-0\">
                ";
            // line 8
            $this->displayBlock('dd_widget_header_categorylist_navbar_mega_menu', $context, $blocks);
            // line 107
            echo "            </nav>
        </div>
    ";
        }
    }

    // line 8
    public function block_dd_widget_header_categorylist_navbar_mega_menu($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 9
        echo "                    <div class=\"navbar-collapse collapse\" id=\"navbarSupportedContent\">
                        <div id=\"navigation\" class=\"navbar-nav navbar-nav-mega\">
                            ";
        // line 11
        $this->displayBlock('dd_widget_header_categorylist_navbar_list_mega_menu', $context, $blocks);
        // line 104
        echo "                        </div>
                    </div>
                ";
    }

    // line 11
    public function block_dd_widget_header_categorylist_navbar_list_mega_menu($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 12
        echo "                                ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["oxcmp_categories"] ?? null));
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
        foreach ($context['_seq'] as $context["catkey"] => $context["ocat"]) {
            // line 13
            echo "                                    ";
            if (twig_get_attribute($this->env, $this->source, $context["ocat"], "getIsVisible", [], "method", false, false, false, 13)) {
                // line 14
                echo "                                        ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["ocat"], "getContentCats", [], "method", false, false, false, 14));
                foreach ($context['_seq'] as $context["_key"] => $context["oTopCont"]) {
                    // line 15
                    echo "                                            <div class=\"nav-item\">
                                                <a class=\"nav-link nav-link-1";
                    // line 16
                    if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["oContent"] ?? null), "oxcontents__oxloadid", [], "any", false, false, false, 16), "value", [], "any", false, false, false, 16) === twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["oTopCont"], "oxcontents__oxloadid", [], "any", false, false, false, 16), "value", [], "any", false, false, false, 16))) {
                        echo " active";
                    }
                    echo "\"";
                    if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["oContent"] ?? null), "oxcontents__oxloadid", [], "any", false, false, false, 16), "value", [], "any", false, false, false, 16) === twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["oTopCont"], "oxcontents__oxloadid", [], "any", false, false, false, 16), "value", [], "any", false, false, false, 16))) {
                        echo " aria-current=\"page\"";
                    }
                    echo " href=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["oTopCont"], "getLink", [], "method", false, false, false, 16);
                    echo "\">";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["oTopCont"], "oxcontents__oxtitle", [], "any", false, false, false, 16), "value", [], "any", false, false, false, 16), "html", null, true);
                    echo "</a>
                                            </div>
                                        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['oTopCont'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 19
                echo "
                                        <div class=\"nav-item";
                // line 20
                if (twig_get_attribute($this->env, $this->source, $context["ocat"], "getSubCats", [], "method", false, false, false, 20)) {
                    echo " has-subs";
                }
                echo "\">
                                            <a class=\"nav-link nav-link-1";
                // line 21
                if ((($context["homeNotSelected"] ?? null) && twig_get_attribute($this->env, $this->source, $context["ocat"], "expanded", [], "any", false, false, false, 21))) {
                    echo " active";
                }
                echo "\"";
                if ((($context["homeNotSelected"] ?? null) && twig_get_attribute($this->env, $this->source, $context["ocat"], "expanded", [], "any", false, false, false, 21))) {
                    echo " aria-current=\"page\"";
                }
                echo " href=\"";
                echo twig_get_attribute($this->env, $this->source, $context["ocat"], "getLink", [], "method", false, false, false, 21);
                echo "\">
                                                ";
                // line 22
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["ocat"], "oxcategories__oxtitle", [], "any", false, false, false, 22), "value", [], "any", false, false, false, 22), "html", null, true);
                echo "
                                            </a>

                                            ";
                // line 26
                echo "                                            ";
                if (twig_get_attribute($this->env, $this->source, $context["ocat"], "getSubCats", [], "method", false, false, false, 26)) {
                    // line 27
                    echo "                                                <div class=\"nav-level-2\">
                                                    <div class=\"container-xxl\">
                                                        <div class=\"row\">
                                                            <div class=\"col-lg-4\">
                                                                <div class=\"h5\">";
                    // line 31
                    echo $this->extensions['OxidEsales\Twig\Extensions\TranslateExtension']->translate(["ident" => "CATEGORIES"]);
                    echo "</div>
                                                                ";
                    // line 32
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["ocat"], "getSubCats", [], "method", false, false, false, 32));
                    foreach ($context['_seq'] as $context["subcatkey"] => $context["osubcat"]) {
                        // line 33
                        echo "                                                                    ";
                        if (twig_get_attribute($this->env, $this->source, $context["osubcat"], "getIsVisible", [], "method", false, false, false, 33)) {
                            // line 34
                            echo "                                                                        ";
                            $context['_parent'] = $context;
                            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["osubcat"], "getContentCats", [], "method", false, false, false, 34));
                            foreach ($context['_seq'] as $context["_key"] => $context["ocont"]) {
                                // line 35
                                echo "                                                                            <div class=\"nav-item nav-item-2\">
                                                                                <a class=\"nav-link";
                                // line 36
                                if ((twig_get_attribute($this->env, $this->source, ($context["oViewConf"] ?? null), "getContentId", [], "method", false, false, false, 36) == twig_get_attribute($this->env, $this->source, $context["ocont"], "getId", [], "method", false, false, false, 36))) {
                                    echo " active";
                                }
                                echo "\" href=\"";
                                echo twig_get_attribute($this->env, $this->source, $context["ocont"], "getLink", [], "method", false, false, false, 36);
                                echo "\">";
                                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["ocont"], "oxcontents__oxtitle", [], "any", false, false, false, 36), "value", [], "any", false, false, false, 36), "html", null, true);
                                echo "</a>
                                                                            </div>
                                                                        ";
                            }
                            $_parent = $context['_parent'];
                            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ocont'], $context['_parent'], $context['loop']);
                            $context = array_intersect_key($context, $_parent) + $_parent;
                            // line 39
                            echo "
                                                                        ";
                            // line 40
                            if (twig_get_attribute($this->env, $this->source, $context["osubcat"], "getIsVisible", [], "method", false, false, false, 40)) {
                                // line 41
                                echo "                                                                            <div class=\"nav-item nav-item-2\">
                                                                                <a class=\"nav-link";
                                // line 42
                                if ((($context["homeNotSelected"] ?? null) && twig_get_attribute($this->env, $this->source, $context["osubcat"], "expanded", [], "any", false, false, false, 42))) {
                                    echo " active";
                                }
                                echo "\" href=\"";
                                echo twig_get_attribute($this->env, $this->source, $context["osubcat"], "getLink", [], "method", false, false, false, 42);
                                echo "\">";
                                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["osubcat"], "oxcategories__oxtitle", [], "any", false, false, false, 42), "value", [], "any", false, false, false, 42), "html", null, true);
                                echo "</a>

                                                                                ";
                                // line 45
                                echo "                                                                                ";
                                if (twig_get_attribute($this->env, $this->source, $context["osubcat"], "getSubCats", [], "method", false, false, false, 45)) {
                                    // line 46
                                    echo "                                                                                    <div class=\"nav-level-3\">
                                                                                        ";
                                    // line 47
                                    $context['_parent'] = $context;
                                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["osubcat"], "getSubCats", [], "method", false, false, false, 47));
                                    foreach ($context['_seq'] as $context["subsubcatkey"] => $context["osubsubcat"]) {
                                        // line 48
                                        echo "                                                                                            ";
                                        if (twig_get_attribute($this->env, $this->source, $context["osubsubcat"], "getIsVisible", [], "method", false, false, false, 48)) {
                                            // line 49
                                            echo "                                                                                                ";
                                            $context['_parent'] = $context;
                                            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["osubsubcat"], "getContentCats", [], "method", false, false, false, 49));
                                            foreach ($context['_seq'] as $context["_key"] => $context["ocont"]) {
                                                // line 50
                                                echo "                                                                                                    <div class=\"nav-item\">
                                                                                                        <a class=\"nav-link";
                                                // line 51
                                                if ((twig_get_attribute($this->env, $this->source, ($context["oViewConf"] ?? null), "getContentId", [], "method", false, false, false, 51) == twig_get_attribute($this->env, $this->source, $context["ocont"], "getId", [], "method", false, false, false, 51))) {
                                                    echo " active";
                                                }
                                                echo "\" href=\"";
                                                echo twig_get_attribute($this->env, $this->source, $context["ocont"], "getLink", [], "method", false, false, false, 51);
                                                echo "\">";
                                                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["ocont"], "oxcontents__oxtitle", [], "any", false, false, false, 51), "value", [], "any", false, false, false, 51), "html", null, true);
                                                echo "</a>
                                                                                                    </div>
                                                                                                ";
                                            }
                                            $_parent = $context['_parent'];
                                            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ocont'], $context['_parent'], $context['loop']);
                                            $context = array_intersect_key($context, $_parent) + $_parent;
                                            // line 54
                                            echo "
                                                                                                ";
                                            // line 55
                                            if (twig_get_attribute($this->env, $this->source, $context["osubsubcat"], "getIsVisible", [], "method", false, false, false, 55)) {
                                                // line 56
                                                echo "                                                                                                    <div class=\"nav-item\">
                                                                                                        <a class=\"nav-link";
                                                // line 57
                                                if ((($context["homeNotSelected"] ?? null) && twig_get_attribute($this->env, $this->source, $context["osubsubcat"], "expanded", [], "any", false, false, false, 57))) {
                                                    echo " active";
                                                }
                                                echo "\" href=\"";
                                                echo twig_get_attribute($this->env, $this->source, $context["osubsubcat"], "getLink", [], "method", false, false, false, 57);
                                                echo "\">";
                                                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["osubsubcat"], "oxcategories__oxtitle", [], "any", false, false, false, 57), "value", [], "any", false, false, false, 57), "html", null, true);
                                                echo "</a>

                                                                                                        ";
                                                // line 60
                                                echo "                                                                                                        ";
                                                if (twig_get_attribute($this->env, $this->source, $context["osubsubcat"], "getSubCats", [], "method", false, false, false, 60)) {
                                                    // line 61
                                                    echo "                                                                                                            <div class=\"nav-level-4\">
                                                                                                                ";
                                                    // line 62
                                                    $context['_parent'] = $context;
                                                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["osubsubcat"], "getSubCats", [], "method", false, false, false, 62));
                                                    foreach ($context['_seq'] as $context["subsubsubcatkey"] => $context["osubsubsubcat"]) {
                                                        // line 63
                                                        echo "                                                                                                                    ";
                                                        if (twig_get_attribute($this->env, $this->source, $context["osubsubsubcat"], "getIsVisible", [], "method", false, false, false, 63)) {
                                                            // line 64
                                                            echo "                                                                                                                        ";
                                                            $context['_parent'] = $context;
                                                            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["osubsubsubcat"], "getContentCats", [], "method", false, false, false, 64));
                                                            foreach ($context['_seq'] as $context["_key"] => $context["ocont"]) {
                                                                // line 65
                                                                echo "                                                                                                                            <div class=\"nav-item\">
                                                                                                                                <a class=\"nav-link";
                                                                // line 66
                                                                if ((twig_get_attribute($this->env, $this->source, ($context["oViewConf"] ?? null), "getContentId", [], "method", false, false, false, 66) == twig_get_attribute($this->env, $this->source, $context["ocont"], "getId", [], "method", false, false, false, 66))) {
                                                                    echo " active";
                                                                }
                                                                echo "\" href=\"";
                                                                echo twig_get_attribute($this->env, $this->source, $context["ocont"], "getLink", [], "method", false, false, false, 66);
                                                                echo "\">";
                                                                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["ocont"], "oxcontents__oxtitle", [], "any", false, false, false, 66), "value", [], "any", false, false, false, 66), "html", null, true);
                                                                echo "</a>
                                                                                                                            </div>
                                                                                                                        ";
                                                            }
                                                            $_parent = $context['_parent'];
                                                            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ocont'], $context['_parent'], $context['loop']);
                                                            $context = array_intersect_key($context, $_parent) + $_parent;
                                                            // line 69
                                                            echo "
                                                                                                                        ";
                                                            // line 70
                                                            if (twig_get_attribute($this->env, $this->source, $context["osubsubsubcat"], "getIsVisible", [], "method", false, false, false, 70)) {
                                                                // line 71
                                                                echo "                                                                                                                            <div class=\"nav-item\">
                                                                                                                                <a class=\"nav-link";
                                                                // line 72
                                                                if ((($context["homeNotSelected"] ?? null) && twig_get_attribute($this->env, $this->source, $context["osubsubsubcat"], "expanded", [], "any", false, false, false, 72))) {
                                                                    echo " active";
                                                                }
                                                                echo "\" href=\"";
                                                                echo twig_get_attribute($this->env, $this->source, $context["osubsubsubcat"], "getLink", [], "method", false, false, false, 72);
                                                                echo "\">";
                                                                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["osubsubsubcat"], "oxcategories__oxtitle", [], "any", false, false, false, 72), "value", [], "any", false, false, false, 72), "html", null, true);
                                                                echo "</a>
                                                                                                                            </div>
                                                                                                                        ";
                                                            }
                                                            // line 75
                                                            echo "                                                                                                                    ";
                                                        }
                                                        // line 76
                                                        echo "                                                                                                                ";
                                                    }
                                                    $_parent = $context['_parent'];
                                                    unset($context['_seq'], $context['_iterated'], $context['subsubsubcatkey'], $context['osubsubsubcat'], $context['_parent'], $context['loop']);
                                                    $context = array_intersect_key($context, $_parent) + $_parent;
                                                    // line 77
                                                    echo "                                                                                                            </div>
                                                                                                        ";
                                                }
                                                // line 79
                                                echo "
                                                                                                    </div>
                                                                                                ";
                                            }
                                            // line 82
                                            echo "                                                                                            ";
                                        }
                                        // line 83
                                        echo "                                                                                        ";
                                    }
                                    $_parent = $context['_parent'];
                                    unset($context['_seq'], $context['_iterated'], $context['subsubcatkey'], $context['osubsubcat'], $context['_parent'], $context['loop']);
                                    $context = array_intersect_key($context, $_parent) + $_parent;
                                    // line 84
                                    echo "                                                                                    </div>
                                                                                ";
                                }
                                // line 86
                                echo "                                                                            </div>
                                                                        ";
                            }
                            // line 88
                            echo "                                                                    ";
                        }
                        // line 89
                        echo "                                                                ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['subcatkey'], $context['osubcat'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 90
                    echo "                                                            </div>
                                                            <div class=\"col-md-8 d-none d-lg-block\">
                                                                ";
                    // line 93
                    echo "                                                                ";
                    $__internal_compile_0 = null;
                    try {
                        $__internal_compile_0 =                         $this->loadTemplate(twig_template_from_string($this->env, $this->extensions['OxidEsales\Twig\Extensions\IncludeContentExtension']->content("oxstartslot1")), "@__main__/widget/header/categorylist.html.twig", 93);
                    } catch (LoaderError $e) {
                        // ignore missing template
                    }
                    if ($__internal_compile_0) {
                        $__internal_compile_0->display($context);
                    }
                    // line 94
                    echo "                                                                ";
                    $this->displayBlock('dd_widget_header_categorylist_content', $context, $blocks);
                    // line 95
                    echo "                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            ";
                }
                // line 100
                echo "                                        </div>
                                    ";
            }
            // line 102
            echo "                                ";
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
        unset($context['_seq'], $context['_iterated'], $context['catkey'], $context['ocat'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 103
        echo "                            ";
    }

    // line 94
    public function block_dd_widget_header_categorylist_content($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@__main__/widget/header/categorylist.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo()
    {
        return array (  429 => 94,  425 => 103,  411 => 102,  407 => 100,  400 => 95,  397 => 94,  386 => 93,  382 => 90,  376 => 89,  373 => 88,  369 => 86,  365 => 84,  359 => 83,  356 => 82,  351 => 79,  347 => 77,  341 => 76,  338 => 75,  326 => 72,  323 => 71,  321 => 70,  318 => 69,  303 => 66,  300 => 65,  295 => 64,  292 => 63,  288 => 62,  285 => 61,  282 => 60,  271 => 57,  268 => 56,  266 => 55,  263 => 54,  248 => 51,  245 => 50,  240 => 49,  237 => 48,  233 => 47,  230 => 46,  227 => 45,  216 => 42,  213 => 41,  211 => 40,  208 => 39,  193 => 36,  190 => 35,  185 => 34,  182 => 33,  178 => 32,  174 => 31,  168 => 27,  165 => 26,  159 => 22,  147 => 21,  141 => 20,  138 => 19,  119 => 16,  116 => 15,  111 => 14,  108 => 13,  90 => 12,  86 => 11,  80 => 104,  78 => 11,  74 => 9,  70 => 8,  63 => 107,  61 => 8,  56 => 5,  53 => 4,  51 => 3,  48 => 2,  41 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@__main__/widget/header/categorylist.html.twig", "/var/www/html/source/Application/views/apex/tpl/widget/header/categorylist.html.twig");
    }
}
