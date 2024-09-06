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

/* @__main__/message/errors.html.twig */
class __TwigTemplate_e4bb7c3dcf9afc344899cc4459430d14 extends Template
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
        if (((is_array(($context["Errors"] ?? null)) && is_array(twig_get_attribute($this->env, $this->source, ($context["Errors"] ?? null), "default", [], "any", false, false, false, 1))) && (twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["Errors"] ?? null), "default", [], "any", false, false, false, 1)) > 0))) {
            // line 2
            echo "    <div class=\"container-xxl mt-5\">
        ";
            // line 3
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["Errors"] ?? null), "default", [], "any", false, false, false, 3));
            foreach ($context['_seq'] as $context["key"] => $context["oEr"]) {
                // line 4
                echo "            <div class=\"alert alert-danger alert-dismissible\">
                <p>";
                // line 5
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["oEr"], "getOxMessage", [], "method", false, false, false, 5), "html", null, true);
                echo "</p>
                <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\" aria-label=\"Close\"></button>
            </div>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['oEr'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 9
            echo "    </div>
";
        }
        // line 11
        echo "
";
        // line 12
        if ((is_array(twig_get_attribute($this->env, $this->source, ($context["Errors"] ?? null), "popup", [], "any", false, false, false, 12)) && (twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["Errors"] ?? null), "popup", [], "any", false, false, false, 12)) > 0))) {
            // line 13
            echo "    ";
            $this->loadTemplate("@__main__/message/errors_modal.html.twig", "@__main__/message/errors.html.twig", 13)->display($context);
        }
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@__main__/message/errors.html.twig";
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
        return array (  68 => 13,  66 => 12,  63 => 11,  59 => 9,  49 => 5,  46 => 4,  42 => 3,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@__main__/message/errors.html.twig", "/var/www/html/source/Application/views/apex/tpl/message/errors.html.twig");
    }
}
