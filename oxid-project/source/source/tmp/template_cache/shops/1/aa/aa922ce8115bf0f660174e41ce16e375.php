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

/* @__main__/page/details/inc/fullproductinfo.html.twig */
class __TwigTemplate_cd368fa1bb238f59f2e2f3c019d83ae3 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'details_productmain_reviews' => [$this, 'block_details_productmain_reviews'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "<div id=\"detailsMain\" class=\"details\">
    ";
        // line 2
        $this->loadTemplate("@__main__/page/details/inc/productmain.html.twig", "@__main__/page/details/inc/fullproductinfo.html.twig", 2)->display($context);
        // line 3
        echo "
    ";
        // line 4
        $this->loadTemplate("@__main__/page/details/inc/accordeon.html.twig", "@__main__/page/details/inc/fullproductinfo.html.twig", 4)->display($context);
        // line 5
        echo "
    <!-- CMS -->

    ";
        // line 8
        $this->displayBlock('details_productmain_reviews', $context, $blocks);
        // line 13
        echo "
    ";
        // line 14
        $__internal_compile_0 = null;
        try {
            $__internal_compile_0 =             $this->loadTemplate(twig_template_from_string($this->env, $this->extensions['OxidEsales\Twig\Extensions\IncludeContentExtension']->content("oxstartslot4")), "@__main__/page/details/inc/fullproductinfo.html.twig", 14);
        } catch (LoaderError $e) {
            // ignore missing template
        }
        if ($__internal_compile_0) {
            $__internal_compile_0->display($context);
        }
        // line 15
        echo "</div>

<div class=\"details-more row-spacer\">
    <div class=\"container-xxl\">
        <div class=\"row\">
            ";
        // line 20
        $context["oManufacturer"] = twig_get_attribute($this->env, $this->source, ($context["oView"] ?? null), "getManufacturer", [], "method", false, false, false, 20);
        // line 21
        echo "            ";
        if ((($context["oManufacturer"] ?? null) && twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["oManufacturer"] ?? null), "oxmanufacturers__oxshortdesc", [], "any", false, false, false, 21), "value", [], "any", false, false, false, 21))) {
            // line 22
            echo "                <div class=\"col-12 col-md-6\">
                    <div class=\"details-more-manufacturer\">
                        ";
            // line 24
            if ((($context["oManufacturer"] ?? null) && twig_get_attribute($this->env, $this->source, ($context["oManufacturer"] ?? null), "getIconUrl", [], "method", false, false, false, 24))) {
                // line 25
                echo "                            ";
                $context["aImgDimensions"] = getimagesize(twig_get_attribute($this->env, $this->source, ($context["oManufacturer"] ?? null), "getIconUrl", [], "method", false, false, false, 25));
                // line 26
                echo "                            <img loading=\"lazy\" class=\"manufacturer-list-logo\" src=\"";
                echo twig_get_attribute($this->env, $this->source, ($context["oManufacturer"] ?? null), "getIconUrl", [], "method", false, false, false, 26);
                echo "\"
                                 alt=\"";
                // line 27
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["oManufacturer"] ?? null), "oxmanufacturers__oxtitle", [], "any", false, false, false, 27), "value", [], "any", false, false, false, 27), "html", null, true);
                echo "\" width=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["aImgDimensions"] ?? null), 0, [], "any", false, false, false, 27), "html", null, true);
                echo "\"
                                 height=\"";
                // line 28
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["aImgDimensions"] ?? null), 1, [], "any", false, false, false, 28), "html", null, true);
                echo "\">
                        ";
            } else {
                // line 30
                echo "                            <div class=\"h5\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["oManufacturer"] ?? null), "oxmanufacturers__oxtitle", [], "any", false, false, false, 30), "value", [], "any", false, false, false, 30), "html", null, true);
                echo "</div>
                        ";
            }
            // line 32
            echo "                        <p>";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["oManufacturer"] ?? null), "oxmanufacturers__oxshortdesc", [], "any", false, false, false, 32), "value", [], "any", false, false, false, 32), "html", null, true);
            echo "</p>
                        <a class=\"btn btn-outline-primary\" href=\"";
            // line 33
            echo twig_get_attribute($this->env, $this->source, ($context["oManufacturer"] ?? null), "getLink", [], "method", false, false, false, 33);
            echo "\"
                           title=\"";
            // line 34
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["oManufacturer"] ?? null), "oxmanufacturers__oxtitle", [], "any", false, false, false, 34), "value", [], "any", false, false, false, 34), "html", null, true);
            echo "\">
                            ";
            // line 35
            echo $this->extensions['OxidEsales\Twig\Extensions\TranslateExtension']->translate(["ident" => "SHOW_ME_MORE"]);
            echo "
                        </a>
                    </div>
                </div>
            ";
        }
        // line 40
        echo "
            <div class=\"col-12 col-md-6\">
                <div class=\"details-more-cms\">
                    <!-- CMS -->
                    CMS Content
                </div>
            </div>
        </div>
    </div>
</div>

<div id=\"detailsRelated\" class=\"details-related\">
    ";
        // line 52
        $this->loadTemplate("@__main__/page/details/inc/related_products.html.twig", "@__main__/page/details/inc/fullproductinfo.html.twig", 52)->display($context);
        // line 53
        echo "</div>
";
    }

    // line 8
    public function block_details_productmain_reviews($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 9
        echo "        ";
        if (twig_get_attribute($this->env, $this->source, ($context["oView"] ?? null), "isReviewActive", [], "method", false, false, false, 9)) {
            // line 10
            echo "            ";
            $this->loadTemplate("@__main__/widget/reviews/reviews.html.twig", "@__main__/page/details/inc/fullproductinfo.html.twig", 10)->display($context);
            // line 11
            echo "        ";
        }
        // line 12
        echo "    ";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@__main__/page/details/inc/fullproductinfo.html.twig";
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
        return array (  166 => 12,  163 => 11,  160 => 10,  157 => 9,  153 => 8,  148 => 53,  146 => 52,  132 => 40,  124 => 35,  120 => 34,  116 => 33,  111 => 32,  105 => 30,  100 => 28,  94 => 27,  89 => 26,  86 => 25,  84 => 24,  80 => 22,  77 => 21,  75 => 20,  68 => 15,  58 => 14,  55 => 13,  53 => 8,  48 => 5,  46 => 4,  43 => 3,  41 => 2,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@__main__/page/details/inc/fullproductinfo.html.twig", "/var/www/html/source/Application/views/apex/tpl/page/details/inc/fullproductinfo.html.twig");
    }
}
