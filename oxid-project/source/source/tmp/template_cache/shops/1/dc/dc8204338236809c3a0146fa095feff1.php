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

/* __string_template__02c31ec0728291ef450a62d1fd9d95b8 */
class __TwigTemplate_f1905c10bedef8610c99f6082e840239 extends Template
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
        echo "<div class=\"usp-list usp-list-content\">
\t<div class=\"slider-container\">
\t\t<div class=\"list-inline-item\">
\t\t\t<svg aria-hidden=\"true\">
\t\t\t\t<use xlink:href=\"#box2-fill\"/>
\t\t\t</svg>
\t\t\t<span class=\"usp-text\">Fast Delivery</span>
\t\t</div>
\t\t<div class=\"list-inline-item\">
\t\t\t<svg aria-hidden=\"true\">
\t\t\t\t<use xlink:href=\"#headset\"/>
\t\t\t</svg>
\t\t\t<span class=\"usp-text\">Individual Advice</span>
\t\t</div>
\t\t<div class=\"list-inline-item\">
\t\t\t<svg aria-hidden=\"true\">
\t\t\t\t<use xlink:href=\"#truck\"/>
\t\t\t</svg>
\t\t\t<span class=\"usp-text\">Express Delivery</span>
\t\t</div>
\t\t<div class=\"list-inline-item\">
\t\t\t<svg aria-hidden=\"true\">
\t\t\t\t<use xlink:href=\"#shield-fill-check\"/>
\t\t\t</svg>
\t\t\t<span class=\"usp-text\">Top Quality</span>
\t\t</div>
\t\t<div class=\"list-inline-item\">
\t\t\t<div class=\"list-inline-item\">
\t\t\t\t<svg aria-hidden=\"true\">
\t\t\t\t\t<use xlink:href=\"#hand-thumbs-up-fill\"/>
\t\t\t\t</svg>
\t\t\t\t<span class=\"usp-text\">High Customer Satisfaction</span>
\t\t\t</div>
\t\t</div>
\t</div>
</div>";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "__string_template__02c31ec0728291ef450a62d1fd9d95b8";
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
        return new Source("", "__string_template__02c31ec0728291ef450a62d1fd9d95b8", "");
    }
}
