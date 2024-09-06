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

/* @__main__/widget/product/list.html.twig */
class __TwigTemplate_0ab673d3749212f60bb152cb6c3ba8ba extends Template
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
            echo "    <h2>
        ";
            // line 7
            echo twig_escape_filter($this->env, ($context["head"] ?? null), "html", null, true);
            echo "
    </h2>

    ";
            // line 10
            if (($context["subhead"] ?? null)) {
                // line 11
                echo "        <p>";
                echo twig_escape_filter($this->env, ($context["subhead"] ?? null), "html", null, true);
                echo "</p>
    ";
            }
        }
        // line 14
        echo "
";
        // line 15
        if ((($context["products"] ?? null) && (twig_length_filter($this->env, ($context["products"] ?? null)) > 0))) {
            // line 16
            echo "    <div class=\"list-container\" id=\"";
            echo twig_escape_filter($this->env, ($context["listId"] ?? null), "html", null, true);
            echo "\">
        <div class=\"row";
            // line 17
            if ((($context["type"] ?? null) != "line")) {
                echo " grid-row";
            }
            echo " ";
            echo twig_escape_filter($this->env, ($context["type"] ?? null), "html", null, true);
            echo "-view\">
        ";
            // line 18
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
                // line 19
                echo "            ";
                $context["testid"] = ((($context["listId"] ?? null) . "_") . twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 19));
                // line 20
                echo "
            ";
                // line 21
                if ((($context["type"] ?? null) != "line")) {
                    // line 22
                    echo "            <div class=\"col mb-3\">
            ";
                }
                // line 24
                echo "
                ";
                // line 25
                echo $this->extensions['OxidEsales\Twig\Extensions\IncludeWidgetExtension']->includeWidget(["cl" => "oxwArticleBox", "_parent" => twig_get_attribute($this->env, $this->source, ($context["oView"] ?? null), "getClassKey", [], "method", false, false, false, 25), "nocookie" => 1, "_navurlparams" => twig_get_attribute($this->env, $this->source, ($context["oViewConf"] ?? null), "getNavUrlParams", [], "method", false, false, false, 25), "iLinkType" => twig_get_attribute($this->env, $this->source, $context["_product"], "getLinkType", [], "method", false, false, false, 25), "_object" => $context["_product"], "anid" => twig_get_attribute($this->env, $this->source, $context["_product"], "getId", [], "method", false, false, false, 25), "sWidgetType" => "product", "sListType" => ("listitem_" . ($context["type"] ?? null)), "iIndex" => ($context["testid"] ?? null), "blDisableToCart" => ($context["blDisableToCart"] ?? null), "isVatIncluded" => twig_get_attribute($this->env, $this->source, ($context["oView"] ?? null), "isVatIncluded", [], "method", false, false, false, 25), "showMainLink" => ($context["showMainLink"] ?? null), "recommid" => ($context["recommid"] ?? null), "owishid" => ($context["owishid"] ?? null), "toBasketFunction" => ($context["toBasketFunction"] ?? null), "removeFunction" => ($context["removeFunction"] ?? null), "altproduct" => ($context["altproduct"] ?? null), "inlist" => twig_get_attribute($this->env, $this->source, $context["_product"], "isInList", [], "method", false, false, false, 25), "skipESIforUser" => 1, "testid" => ($context["testid"] ?? null)]);
                echo "

            ";
                // line 27
                if ((($context["type"] ?? null) != "line")) {
                    // line 28
                    echo "            </div>
            ";
                }
                // line 30
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
            // line 32
            echo "        </div>
    </div>
";
        }
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@__main__/widget/product/list.html.twig";
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
        return array (  142 => 32,  127 => 30,  123 => 28,  121 => 27,  116 => 25,  113 => 24,  109 => 22,  107 => 21,  104 => 20,  101 => 19,  84 => 18,  76 => 17,  71 => 16,  69 => 15,  66 => 14,  59 => 11,  57 => 10,  51 => 7,  48 => 6,  46 => 5,  43 => 4,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@__main__/widget/product/list.html.twig", "/var/www/html/source/Application/views/apex/tpl/widget/product/list.html.twig");
    }
}
