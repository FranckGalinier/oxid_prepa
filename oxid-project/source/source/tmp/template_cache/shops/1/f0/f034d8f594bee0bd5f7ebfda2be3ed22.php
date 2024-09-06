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

/* @__main__/inc_error.html.twig */
class __TwigTemplate_c389af0e6331284513bb55fd5b59dcf7 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'admin_inc_error' => [$this, 'block_admin_inc_error'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        $this->displayBlock('admin_inc_error', $context, $blocks);
    }

    public function block_admin_inc_error($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 2
        echo "    ";
        if ((is_iterable(twig_get_attribute($this->env, $this->source, ($context["Errors"] ?? null), "default", [], "any", false, false, false, 2)) && (count(twig_get_attribute($this->env, $this->source, ($context["Errors"] ?? null), "default", [], "any", false, false, false, 2)) > 0))) {
            // line 3
            echo "    <div class=\"errorbox\">
        ";
            // line 4
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["Errors"] ?? null), "default", [], "any", false, false, false, 4));
            foreach ($context['_seq'] as $context["key"] => $context["oEr"]) {
                // line 5
                echo "            <p>";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["oEr"], "getOxMessage", [], "method", false, false, false, 5), "html", null, true);
                echo "</p>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['oEr'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 7
            echo "    </div>
    ";
        }
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@__main__/inc_error.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo()
    {
        return array (  64 => 7,  55 => 5,  51 => 4,  48 => 3,  45 => 2,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@__main__/inc_error.html.twig", "/var/www/html/source/Application/views/admin_twig/tpl/inc_error.html.twig");
    }
}
