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

/* @__main__/widget/categories.html.twig */
class __TwigTemplate_c98a27e1e0d38135a16a620012a8672c extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        if (($context["oxcmp_categories"] ?? null)) {
            // line 2
            echo "    ";
            $context["categoriesTilesWidth"] = twig_get_attribute($this->env, $this->source, ($context["oViewConf"] ?? null), "getViewThemeParam", ["showCategoryTilesWidth"], "method", false, false, false, 2);
            // line 3
            echo "    ";
            $context["categoriesTilesGrid"] = twig_get_attribute($this->env, $this->source, ($context["oViewConf"] ?? null), "getViewThemeParam", ["showCategoryTilesGrid"], "method", false, false, false, 3);
            // line 4
            echo "    ";
            $context["categoriesTilesBg"] = twig_get_attribute($this->env, $this->source, ($context["oViewConf"] ?? null), "getViewThemeParam", ["showCategoryTilesBg"], "method", false, false, false, 4);
            // line 5
            echo "    ";
            $context["categoriesTilesSpacing"] = twig_get_attribute($this->env, $this->source, ($context["oViewConf"] ?? null), "getViewThemeParam", ["showCategoryTilesSpacing"], "method", false, false, false, 5);
            // line 6
            echo "    ";
            $context["categoriesTilesRowPadding"] = twig_get_attribute($this->env, $this->source, ($context["oViewConf"] ?? null), "getViewThemeParam", ["showCategoryTilesRowPadding"], "method", false, false, false, 6);
            // line 7
            echo "
    ";
            // line 9
            echo "    <div class=\"container-xxl row-spacer\">
        <div class=\"categories\">
            <span class=\"visually-hidden\">";
            // line 11
            echo $this->extensions['OxidEsales\Twig\Extensions\TranslateExtension']->translate(["ident" => "CATEGORIES"]);
            echo "</span>
            ";
            // line 12
            $context["categories"] = ($context["oxcmp_categories"] ?? null);
            // line 13
            echo "            <div class=\"category-list\">
                ";
            // line 14
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["categories"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["_cat"]) {
                // line 15
                echo "                    ";
                if ( !twig_get_attribute($this->env, $this->source, $context["_cat"], "getSubCats", [], "method", false, false, false, 15)) {
                    // line 16
                    echo "                        <a class=\"btn btn-sm btn-tag btn-rounded todo\" href=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["_cat"], "getLink", [], "method", false, false, false, 16);
                    echo "\">
                            ";
                    // line 17
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["_cat"], "oxcategories__oxtitle", [], "any", false, false, false, 17), "value", [], "any", false, false, false, 17), "html", null, true);
                    echo "
                        </a>
                    ";
                } else {
                    // line 20
                    echo "                        ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["_cat"], "getSubCats", [], "method", false, false, false, 20));
                    foreach ($context['_seq'] as $context["_key"] => $context["_subcat"]) {
                        // line 21
                        echo "                            ";
                        if ( !twig_get_attribute($this->env, $this->source, $context["_subcat"], "getSubCats", [], "method", false, false, false, 21)) {
                            // line 22
                            echo "                                <a class=\"btn btn-sm btn-tag btn-rounded todo\" href=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["_subcat"], "getLink", [], "method", false, false, false, 22);
                            echo "\">
                                    ";
                            // line 23
                            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["_subcat"], "oxcategories__oxtitle", [], "any", false, false, false, 23), "value", [], "any", false, false, false, 23), "html", null, true);
                            echo "
                                </a>
                            ";
                        } else {
                            // line 26
                            echo "                                ";
                            $context['_parent'] = $context;
                            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["_subcat"], "getSubCats", [], "method", false, false, false, 26));
                            foreach ($context['_seq'] as $context["_key"] => $context["_subsubcat"]) {
                                // line 27
                                echo "                                    <a class=\"btn btn-sm btn-tag btn-rounded todo\" href=\"";
                                echo twig_get_attribute($this->env, $this->source, $context["_subsubcat"], "getLink", [], "method", false, false, false, 27);
                                echo "\">
                                        ";
                                // line 28
                                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["_subsubcat"], "oxcategories__oxtitle", [], "any", false, false, false, 28), "value", [], "any", false, false, false, 28), "html", null, true);
                                echo "
                                    </a>
                                ";
                            }
                            $_parent = $context['_parent'];
                            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['_subsubcat'], $context['_parent'], $context['loop']);
                            $context = array_intersect_key($context, $_parent) + $_parent;
                            // line 31
                            echo "                            ";
                        }
                        // line 32
                        echo "                        ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['_subcat'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 33
                    echo "                    ";
                }
                // line 34
                echo "                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['_cat'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 35
            echo "            </div>
        </div>
    </div>


";
        }
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@__main__/widget/categories.html.twig";
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
        return array (  144 => 35,  138 => 34,  135 => 33,  129 => 32,  126 => 31,  117 => 28,  112 => 27,  107 => 26,  101 => 23,  96 => 22,  93 => 21,  88 => 20,  82 => 17,  77 => 16,  74 => 15,  70 => 14,  67 => 13,  65 => 12,  61 => 11,  57 => 9,  54 => 7,  51 => 6,  48 => 5,  45 => 4,  42 => 3,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@__main__/widget/categories.html.twig", "/var/www/html/source/Application/views/apex/tpl/widget/categories.html.twig");
    }
}
