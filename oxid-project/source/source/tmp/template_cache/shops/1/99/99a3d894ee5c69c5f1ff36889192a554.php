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

/* @__main__/widget/minibasket/minibasketmodal.html.twig */
class __TwigTemplate_61fa7b73165a8f717e246d29a36b51d0 extends Template
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
        if ((twig_get_attribute($this->env, $this->source, ($context["oxcmp_basket"] ?? null), "isNewItemAdded", [], "method", false, false, false, 1) && (twig_get_attribute($this->env, $this->source, ($context["oView"] ?? null), "getNewBasketItemMsgType", [], "method", false, false, false, 1) == 2))) {
            // line 2
            echo "    ";
            $this->loadTemplate("@__main__/widget/minibasket/minibasket.html.twig", "@__main__/widget/minibasket/minibasketmodal.html.twig", 2)->display(twig_array_merge($context, ["_prefix" => "modal"]));
        }
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@__main__/widget/minibasket/minibasketmodal.html.twig";
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
        return array (  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@__main__/widget/minibasket/minibasketmodal.html.twig", "/var/www/html/source/Application/views/apex/tpl/widget/minibasket/minibasketmodal.html.twig");
    }
}
