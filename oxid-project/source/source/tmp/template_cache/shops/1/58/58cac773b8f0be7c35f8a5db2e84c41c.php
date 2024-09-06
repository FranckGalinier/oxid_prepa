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

/* @__main__/widget/product/list-slider.html.twig */
class __TwigTemplate_62bfffbf63af6811f4dc667c97042525 extends Template
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
        if ( !($context["type"] ?? null)) {
            // line 2
            echo "    ";
            $context["type"] = "grid";
        }
        // line 4
        echo "
";
        // line 5
        if (($context["head"] ?? null)) {
            // line 6
            echo "    <div class=\"container-xxl\">
        <h2 class=\"h3\">
            ";
            // line 8
            echo twig_escape_filter($this->env, ($context["head"] ?? null), "html", null, true);
            echo "
        </h2>

        ";
            // line 11
            if (($context["subhead"] ?? null)) {
                // line 12
                echo "            <p>";
                echo twig_escape_filter($this->env, ($context["subhead"] ?? null), "html", null, true);
                echo "</p>
        ";
            }
            // line 14
            echo "    </div>
";
        }
        // line 16
        echo "
";
        // line 17
        if ((($context["products"] ?? null) && (twig_length_filter($this->env, ($context["products"] ?? null)) > 0))) {
            // line 18
            echo "    <div class=\"slider-container d-flex flex-nowrap\" id=\"";
            echo twig_escape_filter($this->env, ($context["listId"] ?? null), "html", null, true);
            echo "\">
        ";
            // line 19
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["products"] ?? null));
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
            foreach ($context['_seq'] as $context["_key"] => $context["_product"]) {
                // line 20
                echo "            ";
                $context["testid"] = ((($context["listId"] ?? null) . "_") . twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 20));
                // line 21
                echo "            ";
                echo $this->extensions['OxidEsales\Twig\Extensions\IncludeWidgetExtension']->includeWidget(["cl" => "oxwArticleBox", "_parent" => twig_get_attribute($this->env, $this->source, ($context["oView"] ?? null), "getClassKey", [], "method", false, false, false, 21), "nocookie" => 1, "_navurlparams" => twig_get_attribute($this->env, $this->source, ($context["oViewConf"] ?? null), "getNavUrlParams", [], "method", false, false, false, 21), "iLinkType" => twig_get_attribute($this->env, $this->source, $context["_product"], "getLinkType", [], "method", false, false, false, 21), "_object" => $context["_product"], "anid" => twig_get_attribute($this->env, $this->source, $context["_product"], "getId", [], "method", false, false, false, 21), "sWidgetType" => "product", "sListType" => ("listitem_" . ($context["type"] ?? null)), "iIndex" => ($context["testid"] ?? null), "blDisableToCart" => ($context["blDisableToCart"] ?? null), "isVatIncluded" => twig_get_attribute($this->env, $this->source, ($context["oView"] ?? null), "isVatIncluded", [], "method", false, false, false, 21), "showMainLink" => ($context["showMainLink"] ?? null), "recommid" => ($context["recommid"] ?? null), "owishid" => ($context["owishid"] ?? null), "toBasketFunction" => ($context["toBasketFunction"] ?? null), "removeFunction" => ($context["removeFunction"] ?? null), "altproduct" => ($context["altproduct"] ?? null), "inlist" => twig_get_attribute($this->env, $this->source, $context["_product"], "isInList", [], "method", false, false, false, 21), "skipESIforUser" => 1, "testid" => ($context["testid"] ?? null), "slider" => true]);
                echo "
        ";
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['_product'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 23
            echo "    </div>
    <div class=\"slider-nav\">
        <button type=\"button\" class=\"btn btn-secondary slide-left\" aria-label=\"";
            // line 25
            echo $this->extensions['OxidEsales\Twig\Extensions\TranslateExtension']->translate(["ident" => "MOVE_CAROUSEL_LEFT"]);
            echo "\">
            <svg aria-hidden=\"true\">
                <use xlink:href=\"#left\"></use>
            </svg>
        </button>

        <button type=\"button\" class=\"btn btn-secondary slide-right\" aria-label=\"";
            // line 31
            echo $this->extensions['OxidEsales\Twig\Extensions\TranslateExtension']->translate(["ident" => "MOVE_CAROUSEL_RIGHT"]);
            echo "\">
            <svg aria-hidden=\"true\">
                <use xlink:href=\"#right\"></use>
            </svg>
        </button>
    </div>
";
        }
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@__main__/widget/product/list-slider.html.twig";
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
        return array (  130 => 31,  121 => 25,  117 => 23,  100 => 21,  97 => 20,  80 => 19,  75 => 18,  73 => 17,  70 => 16,  66 => 14,  60 => 12,  58 => 11,  52 => 8,  48 => 6,  46 => 5,  43 => 4,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@__main__/widget/product/list-slider.html.twig", "/var/www/html/source/Application/views/apex/tpl/widget/product/list-slider.html.twig");
    }
}
