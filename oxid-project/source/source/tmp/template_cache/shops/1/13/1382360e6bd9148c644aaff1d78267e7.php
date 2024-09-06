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

/* __string_template__7e252b83f0a5894865307d825314499a */
class __TwigTemplate_586f8e4ad4370b69427135c6ee268dfe extends Template
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
        echo "                            <ul class=\"usp-list\">
                                <li class=\"list-inline-item\">
                                    <svg aria-hidden=\"true\">
                                        <use xlink:href=\"#box2-fill\"></use>
                                    </svg>
                                    <span class=\"usp-text\">Fast Delivery</span>
                                </li>
                                <li class=\"list-inline-item\">
                                    <svg aria-hidden=\"true\">
                                        <use xlink:href=\"#headset\"></use>
                                    </svg>
                                    <span class=\"usp-text\">Individual Advice</span>
                                </li>
                                <li class=\"list-inline-item\">
                                    <svg aria-hidden=\"true\">
                                        <use xlink:href=\"#truck\"></use>
                                    </svg>
                                    <span class=\"usp-text\">Express Delivery</span>
                                </li>
                                <li class=\"list-inline-item\">
                                    <svg aria-hidden=\"true\">
                                        <use xlink:href=\"#shield-fill-check\"></use>
                                    </svg>
                                    <span class=\"usp-text\">Top Quality</span>
                                </li>
                                <li class=\"list-inline-item\">
                                    <svg aria-hidden=\"true\">
                                        <use xlink:href=\"#hand-thumbs-up-fill\"></use>
                                    </svg>
                                    <span class=\"usp-text\">High Customer Satisfaction</span>
                                </li>
                            </ul>";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "__string_template__7e252b83f0a5894865307d825314499a";
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
        return new Source("", "__string_template__7e252b83f0a5894865307d825314499a", "");
    }
}
