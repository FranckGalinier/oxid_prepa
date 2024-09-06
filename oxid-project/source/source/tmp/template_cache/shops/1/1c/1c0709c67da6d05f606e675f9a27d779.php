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

/* @__main__/widget/locator/listdisplaytype.html.twig */
class __TwigTemplate_1ad96524596a0aad849f0f59bf7b682e extends Template
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
        $context["listType"] = twig_get_attribute($this->env, $this->source, ($context["oView"] ?? null), "getListDisplayType", [], "method", false, false, false, 1);
        // line 2
        $context["_additionalParams"] = twig_get_attribute($this->env, $this->source, ($context["oView"] ?? null), "getAdditionalParams", [], "method", false, false, false, 2);
        // line 3
        $context["_artPerPage"] = twig_get_attribute($this->env, $this->source, ($context["oViewConf"] ?? null), "getArtPerPageCount", [], "method", false, false, false, 3);
        // line 4
        echo "
";
        // line 5
        if (twig_get_attribute($this->env, $this->source, ($context["oView"] ?? null), "canSelectDisplayType", [], "method", false, false, false, 5)) {
            // line 6
            echo "
<div class=\"btn-group mb-auto d-none d-md-block ms-md-3\" role=\"group\">
        <a title=\"";
            // line 8
            echo $this->extensions['OxidEsales\Twig\Extensions\TranslateExtension']->translate(["ident" => "grid"]);
            echo "\" href=\"";
            echo $this->extensions['OxidEsales\Twig\Extensions\UrlExtension']->addUrlParameters(twig_get_attribute($this->env, $this->source, ($context["oView"] ?? null), "getLink", [], "method", false, false, false, 8), ((("ldtype=grid&amp;_artperpage=" . ($context["_artPerPage"] ?? null)) . "&amp;pgNr=0&amp;") . ($context["_additionalParams"] ?? null)));
            echo "\" class=\"btn btn-outline-primary btn-icon";
            if ((($context["listType"] ?? null) == "grid")) {
                echo " active";
            }
            echo "\">
            <svg>
                <use xlink:href=\"#grid-fill\"></use>
            </svg>
        </a>
        <a title=\"";
            // line 13
            echo $this->extensions['OxidEsales\Twig\Extensions\TranslateExtension']->translate(["ident" => "line"]);
            echo "\" href=\"";
            echo $this->extensions['OxidEsales\Twig\Extensions\UrlExtension']->addUrlParameters(twig_get_attribute($this->env, $this->source, ($context["oView"] ?? null), "getLink", [], "method", false, false, false, 13), ((("ldtype=line&amp;_artperpage=" . ($context["_artPerPage"] ?? null)) . "&amp;pgNr=0&amp;") . ($context["_additionalParams"] ?? null)));
            echo "\" class=\"btn btn-outline-primary btn-icon";
            if ((($context["listType"] ?? null) == "line")) {
                echo " active";
            }
            echo "\">
            <svg>
                <use xlink:href=\"#list-ul\"></use>
            </svg>
        </a>
    </div>
";
        }
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@__main__/widget/locator/listdisplaytype.html.twig";
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
        return array (  66 => 13,  52 => 8,  48 => 6,  46 => 5,  43 => 4,  41 => 3,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@__main__/widget/locator/listdisplaytype.html.twig", "/var/www/html/source/Application/views/apex/tpl/widget/locator/listdisplaytype.html.twig");
    }
}
