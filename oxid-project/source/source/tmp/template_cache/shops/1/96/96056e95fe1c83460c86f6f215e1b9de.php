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

/* @__main__/discount.html.twig */
class __TwigTemplate_57789466f7ceeb74b61c1b2d4211082c extends Template
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
        echo "<!DOCTYPE HTML PUBLIC \"-//W3C//DTD HTML 4.0 Transitional//EN\">

<html>
<head>
    <title>";
        // line 5
        echo $this->extensions['OxidEsales\Twig\Extensions\TranslateExtension']->translate(["ident" => "GENERAL_ADMIN_TITLE"]);
        echo "</title>
</head>

<!-- frames -->
<frameset  rows=\"40%,*\" border=\"0\" onload=\"top.loadEditFrame('";
        // line 9
        echo twig_get_attribute($this->env, $this->source, ($context["oViewConf"] ?? null), "getSelfLink", [], "method", false, false, false, 9);
        echo "&";
        echo ($context["editurl"] ?? null);
        if (($context["oxid"] ?? null)) {
            echo "&oxid=";
            echo twig_escape_filter($this->env, ($context["oxid"] ?? null), "html", null, true);
        }
        echo "');\">
    <frame src=\"";
        // line 10
        echo twig_get_attribute($this->env, $this->source, ($context["oViewConf"] ?? null), "getSelfLink", [], "method", false, false, false, 10);
        echo "&";
        echo ($context["listurl"] ?? null);
        if (($context["oxid"] ?? null)) {
            echo "&oxid=";
            echo twig_escape_filter($this->env, ($context["oxid"] ?? null), "html", null, true);
        }
        echo "\" name=\"list\" marginwidth=\"0\" marginheight=\"0\" scrolling=\"auto\" frameborder=\"0\">
    <frame src=\"\" name=\"edit\" id=\"edit\" marginwidth=\"0\" marginheight=\"0\" scrolling=\"auto\" frameborder=\"0\">
</frameset>


</html>";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@__main__/discount.html.twig";
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
        return array (  60 => 10,  50 => 9,  43 => 5,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@__main__/discount.html.twig", "/var/www/html/source/Application/views/admin_twig/tpl/discount.html.twig");
    }
}
