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

/* @__main__/include/additional_tooltips.html.twig */
class __TwigTemplate_5820fb06f4f08fcb8c54fc165932008b extends Template
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
        echo "<span class=\"popUpStyle\" id=\"category_recalcnrofarticles\" style=\"position: absolute;visibility: hidden;top:0;left:0;\">";
        echo $this->extensions['OxidEsales\Twig\Extensions\TranslateExtension']->translate(["ident" => "TOOLTIPS_RECALCNROFARTICLESINCAT"]);
        echo "</span>
<span class=\"popUpStyle\" id=\"vendor_recalcnrofarticles\" style=\"position: absolute;visibility: hidden;top:0;left:0;\">";
        // line 2
        echo $this->extensions['OxidEsales\Twig\Extensions\TranslateExtension']->translate(["ident" => "TOOLTIPS_RECALCNROFARTICLESINVND"]);
        echo "</span>
<span class=\"popUpStyle\" id=\"manufacturer_recalcnrofarticles\" style=\"position: absolute;visibility: hidden;top:0;left:0;\">";
        // line 3
        echo $this->extensions['OxidEsales\Twig\Extensions\TranslateExtension']->translate(["ident" => "TOOLTIPS_RECALCNROFARTICLESINMAN"]);
        echo "</span>";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@__main__/include/additional_tooltips.html.twig";
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
        return array (  46 => 3,  42 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@__main__/include/additional_tooltips.html.twig", "/var/www/html/source/Application/views/admin_twig/tpl/include/additional_tooltips.html.twig");
    }
}
