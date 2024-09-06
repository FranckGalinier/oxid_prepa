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

/* @__main__/page/details/inc/related_products.html.twig */
class __TwigTemplate_ec28959b0998cc931daeb994e4c53df8 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'details_relatedproducts_also_bought' => [$this, 'block_details_relatedproducts_also_bought'],
            'details_relatedproducts_similarproducts' => [$this, 'block_details_relatedproducts_similarproducts'],
            'details_relatedproducts_accessoires' => [$this, 'block_details_relatedproducts_accessoires'],
            'details_relatedproducts_crossselling' => [$this, 'block_details_relatedproducts_crossselling'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "<div class=\"container-xxl row-spacer\">
        ";
        // line 2
        $this->displayBlock('details_relatedproducts_also_bought', $context, $blocks);
        // line 7
        echo "
        ";
        // line 8
        $this->displayBlock('details_relatedproducts_similarproducts', $context, $blocks);
        // line 13
        echo "
        ";
        // line 14
        if ((twig_get_attribute($this->env, $this->source, ($context["oView"] ?? null), "getAccessoires", [], "method", false, false, false, 14) || twig_get_attribute($this->env, $this->source, ($context["oView"] ?? null), "getCrossSelling", [], "method", false, false, false, 14))) {
            // line 15
            echo "                <div id=\"relProducts\" class=\"relatedProducts\">
                        ";
            // line 16
            $this->displayBlock('details_relatedproducts_accessoires', $context, $blocks);
            // line 21
            echo "                        ";
            $this->displayBlock('details_relatedproducts_crossselling', $context, $blocks);
            // line 26
            echo "                </div>
        ";
        }
        // line 28
        echo "</div>
";
    }

    // line 2
    public function block_details_relatedproducts_also_bought($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 3
        echo "                ";
        if (twig_get_attribute($this->env, $this->source, ($context["oView"] ?? null), "getAlsoBoughtTheseProducts", [], "method", false, false, false, 3)) {
            // line 4
            echo "                        ";
            $this->loadTemplate("@__main__/widget/product/list.html.twig", "@__main__/page/details/inc/related_products.html.twig", 4)->display(twig_array_merge($context, ["type" => "grid", "listId" => "alsoBought", "head" => $this->extensions['OxidEsales\Twig\Extensions\Filters\TranslateExtension']->translate("CUSTOMERS_ALSO_BOUGHT"), "subhead" => $this->extensions['OxidEsales\Twig\Extensions\Filters\TranslateExtension']->translate("PAGE_DETAILS_CUSTOMERS_ALSO_BOUGHT_SUBHEADER"), "products" => twig_get_attribute($this->env, $this->source, ($context["oView"] ?? null), "getAlsoBoughtTheseProducts", [], "method", false, false, false, 4)]));
            // line 5
            echo "                ";
        }
        // line 6
        echo "        ";
    }

    // line 8
    public function block_details_relatedproducts_similarproducts($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 9
        echo "                ";
        if (twig_get_attribute($this->env, $this->source, ($context["oView"] ?? null), "getSimilarProducts", [], "method", false, false, false, 9)) {
            // line 10
            echo "                        ";
            $this->loadTemplate("@__main__/widget/product/list.html.twig", "@__main__/page/details/inc/related_products.html.twig", 10)->display(twig_array_merge($context, ["type" => "grid", "listId" => "similar", "products" => twig_get_attribute($this->env, $this->source, ($context["oView"] ?? null), "getSimilarProducts", [], "method", false, false, false, 10), "head" => $this->extensions['OxidEsales\Twig\Extensions\Filters\TranslateExtension']->translate("SIMILAR_PRODUCTS"), "subhead" => $this->extensions['OxidEsales\Twig\Extensions\Filters\TranslateExtension']->translate("WIDGET_PRODUCT_RELATED_PRODUCTS_SIMILAR_SUBHEADER")]));
            // line 11
            echo "                ";
        }
        // line 12
        echo "        ";
    }

    // line 16
    public function block_details_relatedproducts_accessoires($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 17
        echo "                                ";
        if (twig_get_attribute($this->env, $this->source, ($context["oView"] ?? null), "getAccessoires", [], "method", false, false, false, 17)) {
            // line 18
            echo "                                        ";
            $this->loadTemplate("@__main__/widget/product/list.html.twig", "@__main__/page/details/inc/related_products.html.twig", 18)->display(twig_array_merge($context, ["type" => "grid", "listId" => "accessories", "products" => twig_get_attribute($this->env, $this->source, ($context["oView"] ?? null), "getAccessoires", [], "method", false, false, false, 18), "head" => $this->extensions['OxidEsales\Twig\Extensions\Filters\TranslateExtension']->translate("ACCESSORIES"), "subhead" => $this->extensions['OxidEsales\Twig\Extensions\Filters\TranslateExtension']->translate("WIDGET_PRODUCT_RELATED_PRODUCTS_ACCESSORIES_SUBHEADER")]));
            // line 19
            echo "                                ";
        }
        // line 20
        echo "                        ";
    }

    // line 21
    public function block_details_relatedproducts_crossselling($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 22
        echo "                                ";
        if (twig_get_attribute($this->env, $this->source, ($context["oView"] ?? null), "getCrossSelling", [], "method", false, false, false, 22)) {
            // line 23
            echo "                                        ";
            $this->loadTemplate("@__main__/widget/product/list.html.twig", "@__main__/page/details/inc/related_products.html.twig", 23)->display(twig_array_merge($context, ["type" => "grid", "listId" => "cross", "products" => twig_get_attribute($this->env, $this->source, ($context["oView"] ?? null), "getCrossSelling", [], "method", false, false, false, 23), "head" => $this->extensions['OxidEsales\Twig\Extensions\Filters\TranslateExtension']->translate("HAVE_YOU_SEEN"), "subhead" => $this->extensions['OxidEsales\Twig\Extensions\Filters\TranslateExtension']->translate("WIDGET_PRODUCT_RELATED_PRODUCTS_CROSSSELING_SUBHEADER")]));
            // line 24
            echo "                                ";
        }
        // line 25
        echo "                        ";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@__main__/page/details/inc/related_products.html.twig";
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
        return array (  137 => 25,  134 => 24,  131 => 23,  128 => 22,  124 => 21,  120 => 20,  117 => 19,  114 => 18,  111 => 17,  107 => 16,  103 => 12,  100 => 11,  97 => 10,  94 => 9,  90 => 8,  86 => 6,  83 => 5,  80 => 4,  77 => 3,  73 => 2,  68 => 28,  64 => 26,  61 => 21,  59 => 16,  56 => 15,  54 => 14,  51 => 13,  49 => 8,  46 => 7,  44 => 2,  41 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@__main__/page/details/inc/related_products.html.twig", "/var/www/html/source/Application/views/apex/tpl/page/details/inc/related_products.html.twig");
    }
}
