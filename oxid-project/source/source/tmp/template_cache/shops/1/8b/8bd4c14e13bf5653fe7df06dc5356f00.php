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

/* @__main__/widget/breadcrumb.html.twig */
class __TwigTemplate_cea2b902c34320908b763c810de2f899 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'dd_widget_breadcrumb' => [$this, 'block_dd_widget_breadcrumb'],
            'dd_widget_breadcrumb_list_inner' => [$this, 'block_dd_widget_breadcrumb_list_inner'],
            'dd_widget_breadcrumb_list' => [$this, 'block_dd_widget_breadcrumb_list'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        $this->displayBlock('dd_widget_breadcrumb', $context, $blocks);
    }

    public function block_dd_widget_breadcrumb($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 2
        echo "    ";
        ob_start(function () { return ''; });
        // line 3
        echo "        ";
        $this->displayBlock('dd_widget_breadcrumb_list_inner', $context, $blocks);
        // line 38
        echo "    ";
        $___internal_parse_0_ = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 2
        echo twig_spaceless($___internal_parse_0_);
    }

    // line 3
    public function block_dd_widget_breadcrumb_list_inner($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 4
        echo "            <div class=\"breadcrumb-wrapper py-4 px-0\">
                <div class=\"container-xxl\">
                    <nav aria-label=\"breadcrumb\">
                        <ol class=\"breadcrumb\">
                            ";
        // line 8
        $this->displayBlock('dd_widget_breadcrumb_list', $context, $blocks);
        // line 33
        echo "                        </ol>
                    </nav>
                </div>
            </div>
        ";
    }

    // line 8
    public function block_dd_widget_breadcrumb_list($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 9
        echo "                                <li class=\"breadcrumb-item\">
                                    <a href=\"";
        // line 10
        echo twig_get_attribute($this->env, $this->source, ($context["oViewConf"] ?? null), "getHomeLink", [], "method", false, false, false, 10);
        echo "\" class=\"breadcrumb-link\" title=\"";
        echo $this->extensions['OxidEsales\Twig\Extensions\TranslateExtension']->translate(["ident" => "HOME"]);
        echo "\">
                                        <svg aria-label=\"";
        // line 11
        echo $this->extensions['OxidEsales\Twig\Extensions\TranslateExtension']->translate(["ident" => "HOME"]);
        echo "\">
                                            <use xlink:href=\"#house-door\"></use>
                                        </svg>
                                    </a>
                                </li>
                                ";
        // line 16
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["oView"] ?? null), "getBreadCrumb", [], "method", false, false, false, 16));
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
        foreach ($context['_seq'] as $context["_key"] => $context["sCrum"]) {
            // line 17
            echo "                                    <li class=\"breadcrumb-item";
            if ((twig_get_attribute($this->env, $this->source, $context["loop"], "last", [], "any", false, false, false, 17) && (twig_get_attribute($this->env, $this->source, ($context["oView"] ?? null), "getClassKey", [], "method", false, false, false, 17) != "details"))) {
                echo " active";
            }
            echo "\">
                                        ";
            // line 18
            if ((twig_get_attribute($this->env, $this->source, $context["loop"], "last", [], "any", false, false, false, 18) && (twig_get_attribute($this->env, $this->source, ($context["oView"] ?? null), "getClassKey", [], "method", false, false, false, 18) != "details"))) {
                // line 19
                echo "                                            ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["sCrum"], "title", [], "any", false, false, false, 19), "html", null, true);
                echo "
                                        ";
            } else {
                // line 21
                echo "                                            <a href=\"";
                if (twig_get_attribute($this->env, $this->source, $context["sCrum"], "link", [], "any", false, false, false, 21)) {
                    echo twig_get_attribute($this->env, $this->source, $context["sCrum"], "link", [], "any", false, false, false, 21);
                } else {
                    echo "#";
                }
                echo "\" class=\"breadcrumb-link\" title=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["sCrum"], "title", [], "any", false, false, false, 21), "html");
                echo "\">
                                                ";
                // line 22
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["sCrum"], "title", [], "any", false, false, false, 22), "html", null, true);
                echo "
                                            </a>
                                        ";
            }
            // line 25
            echo "                                    </li>
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['sCrum'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 27
        echo "                                ";
        if ((twig_get_attribute($this->env, $this->source, ($context["oView"] ?? null), "getClassKey", [], "method", false, false, false, 27) == "details")) {
            // line 28
            echo "                                <li class=\"breadcrumb-item active\">
                                    ";
            // line 29
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["oDetailsProduct"] ?? null), "oxarticles__oxtitle", [], "any", false, false, false, 29), "value", [], "any", false, false, false, 29), "html", null, true);
            echo "
                                </li>
                                ";
        }
        // line 32
        echo "                            ";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@__main__/widget/breadcrumb.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo()
    {
        return array (  177 => 32,  171 => 29,  168 => 28,  165 => 27,  150 => 25,  144 => 22,  133 => 21,  127 => 19,  125 => 18,  118 => 17,  101 => 16,  93 => 11,  87 => 10,  84 => 9,  80 => 8,  72 => 33,  70 => 8,  64 => 4,  60 => 3,  56 => 2,  53 => 38,  50 => 3,  47 => 2,  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@__main__/widget/breadcrumb.html.twig", "/var/www/html/source/Application/views/apex/tpl/widget/breadcrumb.html.twig");
    }
}
