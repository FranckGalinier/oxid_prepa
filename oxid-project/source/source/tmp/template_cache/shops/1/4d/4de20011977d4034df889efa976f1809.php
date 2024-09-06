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

/* @__main__/page/details/inc/compare_links.html.twig */
class __TwigTemplate_964305a725f4a27840dbef8da619b275 extends Template
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
        if (($context["_compare_in_list"] ?? null)) {
            // line 2
            echo "    <a id=\"removeFromCompare";
            echo twig_escape_filter($this->env, ($context["_compare_testid"] ?? null), "html", null, true);
            echo "\" class=\"btn btn-sm btn-light w-100 compare remove ";
            echo twig_escape_filter($this->env, ($context["_compare_class"] ?? null), "html", null, true);
            echo "\" data-aid=\"";
            echo twig_escape_filter($this->env, ($context["_compare_aid"] ?? null), "html", null, true);
            echo "\" href=\"";
            echo $this->extensions['OxidEsales\Twig\Extensions\UrlExtension']->getSeoUrl(["ident" => ((twig_get_attribute($this->env, $this->source, ($context["oViewConf"] ?? null), "getSelfLink", [], "method", false, false, false, 2) . "cl=") . twig_get_attribute($this->env, $this->source, ($context["oViewConf"] ?? null), "getTopActiveClassName", [], "method", false, false, false, 2)), "params" => (((((("am=1&amp;removecompare=1&amp;fnc=tocomparelist&amp;aid=" . ($context["_compare_aid"] ?? null)) . "&amp;anid=") . ($context["_compare_anid"] ?? null)) . "&amp;pgNr=") . ($context["_compare_page"] ?? null)) . twig_get_attribute($this->env, $this->source, ($context["oViewConf"] ?? null), "getNavUrlParams", [], "method", false, false, false, 2))]);
            echo "\">";
            echo $this->extensions['OxidEsales\Twig\Extensions\TranslateExtension']->translate(["ident" => ($context["_compare_text_from_id"] ?? null)]);
            echo "</a>
";
        } else {
            // line 4
            echo "    <a id=\"addToCompare";
            echo twig_escape_filter($this->env, ($context["_compare_testid"] ?? null), "html", null, true);
            echo "\" class=\"btn btn-sm btn-light w-100 compare add ";
            echo twig_escape_filter($this->env, ($context["_compare_class"] ?? null), "html", null, true);
            echo "\" data-aid=\"";
            echo twig_escape_filter($this->env, ($context["_compare_aid"] ?? null), "html", null, true);
            echo "\" href=\"";
            echo $this->extensions['OxidEsales\Twig\Extensions\UrlExtension']->getSeoUrl(["ident" => ((twig_get_attribute($this->env, $this->source, ($context["oViewConf"] ?? null), "getSelfLink", [], "method", false, false, false, 4) . "cl=") . twig_get_attribute($this->env, $this->source, ($context["oViewConf"] ?? null), "getTopActiveClassName", [], "method", false, false, false, 4)), "params" => (((((("am=1&amp;addcompare=1&amp;fnc=tocomparelist&aid=" . ($context["_compare_aid"] ?? null)) . "&amp;anid=") . ($context["_compare_anid"] ?? null)) . "&amp;pgNr=") . ($context["_compare_page"] ?? null)) . twig_get_attribute($this->env, $this->source, ($context["oViewConf"] ?? null), "getNavUrlParams", [], "method", false, false, false, 4))]);
            echo "\">";
            echo $this->extensions['OxidEsales\Twig\Extensions\TranslateExtension']->translate(["ident" => ($context["_compare_text_to_id"] ?? null)]);
            echo "</a>
";
        }
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@__main__/page/details/inc/compare_links.html.twig";
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
        return array (  53 => 4,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@__main__/page/details/inc/compare_links.html.twig", "/var/www/html/source/Application/views/apex/tpl/page/details/inc/compare_links.html.twig");
    }
}
