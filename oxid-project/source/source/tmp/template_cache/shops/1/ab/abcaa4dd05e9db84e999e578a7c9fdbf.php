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

/* @__main__/widget/header/search.html.twig */
class __TwigTemplate_893844c4c76e4f21dd50638f7e0849fe extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'widget_header_search_form' => [$this, 'block_widget_header_search_form'],
            'dd_widget_header_search_form_inner' => [$this, 'block_dd_widget_header_search_form_inner'],
            'header_search_field' => [$this, 'block_header_search_field'],
            'dd_header_search_button' => [$this, 'block_dd_header_search_button'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        $this->displayBlock('widget_header_search_form', $context, $blocks);
    }

    public function block_widget_header_search_form($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 2
        echo "    ";
        if (twig_get_attribute($this->env, $this->source, ($context["oView"] ?? null), "showSearch", [], "method", false, false, false, 2)) {
            // line 3
            echo "        <form id=\"searchForm\" class=\"search mx-auto\" action=\"";
            echo twig_get_attribute($this->env, $this->source, ($context["oViewConf"] ?? null), "getSelfActionLink", [], "method", false, false, false, 3);
            echo "\" method=\"get\" name=\"search\">
            ";
            // line 4
            echo twig_get_attribute($this->env, $this->source, ($context["oViewConf"] ?? null), "getHiddenSid", [], "method", false, false, false, 4);
            echo "
            <input type=\"hidden\" name=\"cl\" value=\"search\">

            ";
            // line 7
            $this->displayBlock('dd_widget_header_search_form_inner', $context, $blocks);
            // line 21
            echo "        </form>
    ";
        }
    }

    // line 7
    public function block_dd_widget_header_search_form_inner($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 8
        echo "                <div class=\"input-group\">
                    ";
        // line 9
        $this->displayBlock('header_search_field', $context, $blocks);
        // line 13
        echo "
                    ";
        // line 14
        $this->displayBlock('dd_header_search_button', $context, $blocks);
        // line 19
        echo "                </div>
            ";
    }

    // line 9
    public function block_header_search_field($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 10
        echo "                        <label class=\"visually-hidden\" for=\"searchParam\">";
        echo $this->extensions['OxidEsales\Twig\Extensions\TranslateExtension']->translate(["ident" => "SEARCH"]);
        echo "</label>
                        <input class=\"form-control\" type=\"text\" id=\"searchParam\" name=\"searchparam\" value=\"";
        // line 11
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["oView"] ?? null), "getSearchParamForHtml", [], "method", false, false, false, 11), "html", null, true);
        echo "\" placeholder=\"";
        echo $this->extensions['OxidEsales\Twig\Extensions\TranslateExtension']->translate(["ident" => "SEARCH"]);
        echo "\">
                    ";
    }

    // line 14
    public function block_dd_header_search_button($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 15
        echo "                        <button class=\"btn\" type=\"submit\" title=\"";
        echo $this->extensions['OxidEsales\Twig\Extensions\TranslateExtension']->translate(["ident" => "SEARCH_SUBMIT"]);
        echo "\">
                            ";
        // line 16
        $this->loadTemplate("icons/search.svg", "@__main__/widget/header/search.html.twig", 16)->display($context);
        // line 17
        echo "                        </button>
                    ";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@__main__/widget/header/search.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo()
    {
        return array (  117 => 17,  115 => 16,  110 => 15,  106 => 14,  98 => 11,  93 => 10,  89 => 9,  84 => 19,  82 => 14,  79 => 13,  77 => 9,  74 => 8,  70 => 7,  64 => 21,  62 => 7,  56 => 4,  51 => 3,  48 => 2,  41 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@__main__/widget/header/search.html.twig", "/var/www/html/source/Application/views/apex/tpl/widget/header/search.html.twig");
    }
}
