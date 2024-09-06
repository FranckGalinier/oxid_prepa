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

/* @__main__/widget/locator/itemsperpage.html.twig */
class __TwigTemplate_588eb900870041937c440a2ae56e023a extends Template
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
        $context["_additionalParams"] = twig_get_attribute($this->env, $this->source, ($context["oView"] ?? null), "getAdditionalParams", [], "method", false, false, false, 1);
        // line 2
        $context["listType"] = twig_get_attribute($this->env, $this->source, ($context["oView"] ?? null), "getListDisplayType", [], "method", false, false, false, 2);
        // line 3
        echo "<div class=\"d-none d-md-block ms-md-3\">
    <button type=\"button\" class=\"dropdown-toggle arrow\" data-bs-toggle=\"dropdown\">
        ";
        // line 5
        echo $this->extensions['OxidEsales\Twig\Extensions\TranslateExtension']->translate(["ident" => "PRODUCTS_PER_PAGE"]);
        echo "
        ";
        // line 6
        if (twig_get_attribute($this->env, $this->source, ($context["oViewConf"] ?? null), "getArtPerPageCount", [], "method", false, false, false, 6)) {
            // line 7
            echo "            ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["oViewConf"] ?? null), "getArtPerPageCount", [], "method", false, false, false, 7), "html", null, true);
            echo "
        ";
        } else {
            // line 9
            echo "            ";
            echo $this->extensions['OxidEsales\Twig\Extensions\TranslateExtension']->translate(["ident" => "CHOOSE"]);
            echo "
        ";
        }
        // line 11
        echo "    </button>
    <ul class=\"dropdown-menu\" role=\"menu\">
        ";
        // line 13
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["oViewConf"] ?? null), "getNrOfCatArticles", [], "method", false, false, false, 13));
        foreach ($context['_seq'] as $context["_key"] => $context["iItemsPerPage"]) {
            // line 14
            echo "            <li class=\"filter-item";
            if ((twig_get_attribute($this->env, $this->source, ($context["oViewConf"] ?? null), "getArtPerPageCount", [], "method", false, false, false, 14) == $context["iItemsPerPage"])) {
                echo " selected";
            }
            echo "\">
                <a href=\"";
            // line 15
            echo $this->extensions['OxidEsales\Twig\Extensions\UrlExtension']->addUrlParameters(twig_get_attribute($this->env, $this->source, ($context["oView"] ?? null), "getLink", [], "method", false, false, false, 15), ((((("ldtype=" . ($context["listType"] ?? null)) . "&amp;_artperpage=") . $context["iItemsPerPage"]) . "&amp;pgNr=0&amp;") . ($context["_additionalParams"] ?? null)));
            echo "\"
                   class=\"filter-link";
            // line 16
            if ((twig_get_attribute($this->env, $this->source, ($context["oViewConf"] ?? null), "getArtPerPageCount", [], "method", false, false, false, 16) == $context["iItemsPerPage"])) {
                echo " selected";
            }
            echo "\">";
            echo twig_escape_filter($this->env, $context["iItemsPerPage"], "html", null, true);
            echo "</a>
            </li>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['iItemsPerPage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 19
        echo "    </ul>
</div>";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@__main__/widget/locator/itemsperpage.html.twig";
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
        return array (  95 => 19,  82 => 16,  78 => 15,  71 => 14,  67 => 13,  63 => 11,  57 => 9,  51 => 7,  49 => 6,  45 => 5,  41 => 3,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@__main__/widget/locator/itemsperpage.html.twig", "/var/www/html/source/Application/views/apex/tpl/widget/locator/itemsperpage.html.twig");
    }
}
