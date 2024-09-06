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

/* @__main__/widget/header/minibasket.html.twig */
class __TwigTemplate_9b20924d90db4bf2a189c88d97810234 extends Template
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
        if (!empty($context["_render4cache"])) {
            echo $this->extensions['OxidEsales\Twig\Extensions\IncludeExtension']->renderForCache(['file' => "@__main__/widget/minibasket/minibasket_button.html.twig"]);
        } else {
            $this->loadTemplate("@__main__/widget/minibasket/minibasket_button.html.twig", "@__main__/widget/header/minibasket.html.twig", 1)->display($context);
        }
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@__main__/widget/header/minibasket.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo()
    {
        return array (  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@__main__/widget/header/minibasket.html.twig", "/var/www/html/source/Application/views/apex/tpl/widget/header/minibasket.html.twig");
    }
}
