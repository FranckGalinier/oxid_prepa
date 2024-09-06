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

/* @__main__/widget/manufacturer.html.twig */
class __TwigTemplate_8dd542d4b0526fdaf9bd223d0daf2d31 extends Template
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
        $context["manufacturerWidth"] = twig_get_attribute($this->env, $this->source, ($context["oViewConf"] ?? null), "getViewThemeParam", ["sManufacturerWidth"], "method", false, false, false, 1);
        // line 2
        $context["count"] = 0;
        // line 3
        if (twig_get_attribute($this->env, $this->source, ($context["oView"] ?? null), "getManufacturerForSlider", [], "method", false, false, false, 3)) {
            // line 4
            echo "<div class=\"container-xxl\">
    <div class=\"py-5 manufacturer\">
        <div class=\"container";
            // line 6
            if ((($context["manufacturerWidth"] ?? null) == "w100cContainer")) {
                echo "-xxl";
            } else {
                echo "-fluid";
            }
            echo "\">
            <h2>";
            // line 7
            echo $this->extensions['OxidEsales\Twig\Extensions\TranslateExtension']->translate(["ident" => "OUR_BRANDS"]);
            echo "</h2>
            <span class=\"subhead\">";
            // line 8
            echo $this->extensions['OxidEsales\Twig\Extensions\TranslateExtension']->translate(["ident" => "MANUFACTURERSLIDER_SUBHEAD"]);
            echo "</span>

            <div class=\"row manufacturer-list\">
                ";
            // line 11
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["oView"] ?? null), "getManufacturerForSlider", [], "method", false, false, false, 11));
            foreach ($context['_seq'] as $context["_key"] => $context["oManufacturer"]) {
                // line 12
                echo "                    ";
                if ((twig_get_attribute($this->env, $this->source, $context["oManufacturer"], "getIconUrl", [], "method", false, false, false, 12) && (($context["count"] ?? null) < 8))) {
                    // line 13
                    echo "                        <div class=\"col-6 col-md-4 col-lg\">
                            <a href=\"";
                    // line 14
                    echo twig_get_attribute($this->env, $this->source, $context["oManufacturer"], "getLink", [], "method", false, false, false, 14);
                    echo "\" title=\"";
                    echo $this->extensions['OxidEsales\Twig\Extensions\TranslateExtension']->translate(["ident" => "VIEW_ALL_PRODUCTS"]);
                    echo "\" class=\"d-block text-center\">
                                ";
                    // line 15
                    $context["aImgDimensions"] = getimagesize(twig_get_attribute($this->env, $this->source, $context["oManufacturer"], "getIconUrl", [], "method", false, false, false, 15));
                    // line 16
                    echo "                                <img loading=\"lazy\" class=\"manufacturer-list-logo\" src=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["oManufacturer"], "getIconUrl", [], "method", false, false, false, 16);
                    echo "\" alt=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["oManufacturer"], "oxmanufacturers__oxtitle", [], "any", false, false, false, 16), "value", [], "any", false, false, false, 16), "html", null, true);
                    echo "\" width=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["aImgDimensions"] ?? null), 0, [], "any", false, false, false, 16), "html", null, true);
                    echo "\" height=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["aImgDimensions"] ?? null), 1, [], "any", false, false, false, 16), "html", null, true);
                    echo "\">
                            </a>
                        </div>
                        ";
                    // line 19
                    $context["count"] = (($context["count"] ?? null) + 1);
                    // line 20
                    echo "                    ";
                }
                // line 21
                echo "                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['oManufacturer'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 22
            echo "            </div>
        </div>
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
        return "@__main__/widget/manufacturer.html.twig";
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
        return array (  107 => 22,  101 => 21,  98 => 20,  96 => 19,  83 => 16,  81 => 15,  75 => 14,  72 => 13,  69 => 12,  65 => 11,  59 => 8,  55 => 7,  47 => 6,  43 => 4,  41 => 3,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@__main__/widget/manufacturer.html.twig", "/var/www/html/source/Application/views/apex/tpl/widget/manufacturer.html.twig");
    }
}
