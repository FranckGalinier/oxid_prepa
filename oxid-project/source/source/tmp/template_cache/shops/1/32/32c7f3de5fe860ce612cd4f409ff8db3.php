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

/* @__main__/widget/product/details.html.twig */
class __TwigTemplate_5e0c818477a88668d77a5a187ca3e804 extends Template
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
        $this->loadTemplate("@__main__/page/details/details.html.twig", "@__main__/widget/product/details.html.twig", 1)->display(twig_array_merge($context, ["blWorkaroundInclude" => true]));
        // line 2
        echo "
";
        // line 3
        $context["oDetailsProduct"] = twig_get_attribute($this->env, $this->source, ($context["oView"] ?? null), "getProduct", [], "method", false, false, false, 3);
        // line 4
        echo "
";
        // line 5
        echo twig_escape_filter($this->env, $this->extensions['OxidEsales\Twig\Extensions\InsertTrackerExtension']->insertTracker($this->env, ["title" => $this->extensions['OxidEsales\Twig\Extensions\Filters\TranslateExtension']->translate("PRODUCT_DETAILS"), "product" => ($context["oDetailsProduct"] ?? null), "cpath" => twig_get_attribute($this->env, $this->source, ($context["oView"] ?? null), "getCatTreePath", [], "method", false, false, false, 5)]), "html", null, true);
        echo "
";
        // line 6
        echo $this->extensions['OxidEsales\Twig\Extensions\ScriptExtension']->script($context, ["widget" => twig_get_attribute($this->env, $this->source, ($context["oView"] ?? null), "getClassKey", [], "method", false, false, false, 6), "dynamic" => ($context["__oxid_include_dynamic"] ?? null)]);
        echo "
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@__main__/widget/product/details.html.twig";
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
        return array (  51 => 6,  47 => 5,  44 => 4,  42 => 3,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@__main__/widget/product/details.html.twig", "/var/www/html/source/Application/views/apex/tpl/widget/product/details.html.twig");
    }
}
