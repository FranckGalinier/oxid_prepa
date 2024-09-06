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

/* @__main__/widget/footer/info.html.twig */
class __TwigTemplate_5e9e42024f843b285dd21aad0ae97c6f extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'footer_information' => [$this, 'block_footer_information'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        $this->displayBlock('footer_information', $context, $blocks);
    }

    public function block_footer_information($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 2
        echo "    <nav class=\"nav flex-column\">
        ";
        // line 3
        $context["_cont"] = $this->extensions['OxidEsales\Twig\Extensions\IfContentExtension']->getContent("oximpressum", null);
        // line 4
        echo "            <a class=\"nav-link\" href=\"";
        echo twig_get_attribute($this->env, $this->source, ($context["_cont"] ?? null), "getLink", [], "method", false, false, false, 4);
        echo "\">";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["_cont"] ?? null), "oxcontents__oxtitle", [], "any", false, false, false, 4), "value", [], "any", false, false, false, 4), "html", null, true);
        echo "</a>
        ";
        unset($context["_cont"]);
        // line 6
        echo "        ";
        $context["_cont"] = $this->extensions['OxidEsales\Twig\Extensions\IfContentExtension']->getContent("oxagb", null);
        // line 7
        echo "            <a class=\"nav-link\" href=\"";
        echo twig_get_attribute($this->env, $this->source, ($context["_cont"] ?? null), "getLink", [], "method", false, false, false, 7);
        echo "\">";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["_cont"] ?? null), "oxcontents__oxtitle", [], "any", false, false, false, 7), "value", [], "any", false, false, false, 7), "html", null, true);
        echo "</a>
        ";
        unset($context["_cont"]);
        // line 9
        echo "        ";
        $context["oCont"] = $this->extensions['OxidEsales\Twig\Extensions\IfContentExtension']->getContent("oxsecurityinfo", null);
        // line 10
        echo "            <a class=\"nav-link\" href=\"";
        echo twig_get_attribute($this->env, $this->source, ($context["oCont"] ?? null), "getLink", [], "method", false, false, false, 10);
        echo "\">";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["oCont"] ?? null), "oxcontents__oxtitle", [], "any", false, false, false, 10), "value", [], "any", false, false, false, 10), "html", null, true);
        echo "</a>
        ";
        unset($context["oCont"]);
        // line 12
        echo "        ";
        $context["oCont"] = $this->extensions['OxidEsales\Twig\Extensions\IfContentExtension']->getContent("oxdeliveryinfo", null);
        // line 13
        echo "            <a class=\"nav-link\" href=\"";
        echo twig_get_attribute($this->env, $this->source, ($context["oCont"] ?? null), "getLink", [], "method", false, false, false, 13);
        echo "\">";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["oCont"] ?? null), "oxcontents__oxtitle", [], "any", false, false, false, 13), "value", [], "any", false, false, false, 13), "html", null, true);
        echo "</a>
        ";
        unset($context["oCont"]);
        // line 15
        echo "        ";
        $context["oCont"] = $this->extensions['OxidEsales\Twig\Extensions\IfContentExtension']->getContent("oxrightofwithdrawal", null);
        // line 16
        echo "            <a class=\"nav-link\" href=\"";
        echo twig_get_attribute($this->env, $this->source, ($context["oCont"] ?? null), "getLink", [], "method", false, false, false, 16);
        echo "\">";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["oCont"] ?? null), "oxcontents__oxtitle", [], "any", false, false, false, 16), "value", [], "any", false, false, false, 16), "html", null, true);
        echo "</a>
        ";
        unset($context["oCont"]);
        // line 18
        echo "        ";
        $context["oCont"] = $this->extensions['OxidEsales\Twig\Extensions\IfContentExtension']->getContent("oxorderinfo", null);
        // line 19
        echo "            <a class=\"nav-link\" href=\"";
        echo twig_get_attribute($this->env, $this->source, ($context["oCont"] ?? null), "getLink", [], "method", false, false, false, 19);
        echo "\">";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["oCont"] ?? null), "oxcontents__oxtitle", [], "any", false, false, false, 19), "value", [], "any", false, false, false, 19), "html", null, true);
        echo "</a>
        ";
        unset($context["oCont"]);
        // line 21
        echo "        ";
        if (twig_get_attribute($this->env, $this->source, ($context["oViewConf"] ?? null), "getViewThemeParam", ["blFooterShowNewsletter"], "method", false, false, false, 21)) {
            // line 22
            echo "            <a class=\"nav-link\" href=\"";
            echo $this->extensions['OxidEsales\Twig\Extensions\UrlExtension']->getSeoUrl(["ident" => (twig_get_attribute($this->env, $this->source, ($context["oViewConf"] ?? null), "getSelfLink", [], "method", false, false, false, 22) . "cl=newsletter")]);
            echo "\">";
            echo $this->extensions['OxidEsales\Twig\Extensions\TranslateExtension']->translate(["ident" => "NEWSLETTER"]);
            echo "</a>
        ";
        }
        // line 24
        echo "    </nav>
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@__main__/widget/footer/info.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo()
    {
        return array (  124 => 24,  116 => 22,  113 => 21,  105 => 19,  102 => 18,  94 => 16,  91 => 15,  83 => 13,  80 => 12,  72 => 10,  69 => 9,  61 => 7,  58 => 6,  50 => 4,  48 => 3,  45 => 2,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@__main__/widget/footer/info.html.twig", "/var/www/html/source/Application/views/apex/tpl/widget/footer/info.html.twig");
    }
}
