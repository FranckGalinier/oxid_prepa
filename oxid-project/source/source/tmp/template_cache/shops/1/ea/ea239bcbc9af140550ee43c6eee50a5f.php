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

/* @__main__/sysreq.html.twig */
class __TwigTemplate_6ad7b422e314be9bd9fe3de6c5dd79b4 extends Template
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
<frameset  rows=\"5%,*\" border=\"0\">
    <frame src=\"";
        // line 10
        echo twig_get_attribute($this->env, $this->source, ($context["oViewConf"] ?? null), "getSelfLink", [], "method", false, false, false, 10);
        echo "&";
        echo ($context["listurl"] ?? null);
        if (($context["oxid"] ?? null)) {
            echo "&oxid=";
            echo twig_escape_filter($this->env, ($context["oxid"] ?? null), "html", null, true);
        }
        echo "\" name=\"list\" id=\"list\" marginwidth=\"0\" marginheight=\"0\" scrolling=\"off\" frameborder=\"0\">
    <frame src=\"";
        // line 11
        echo twig_get_attribute($this->env, $this->source, ($context["oViewConf"] ?? null), "getSelfLink", [], "method", false, false, false, 11);
        echo "&";
        echo ($context["editurl"] ?? null);
        if (($context["oxid"] ?? null)) {
            echo "&oxid=";
            echo twig_escape_filter($this->env, ($context["oxid"] ?? null), "html", null, true);
        }
        echo "\" name=\"edit\" id=\"edit\" marginwidth=\"0\" marginheight=\"0\" scrolling=\"auto\" frameborder=\"0\">
</frameset>


</html>";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@__main__/sysreq.html.twig";
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
        return array (  61 => 11,  51 => 10,  43 => 5,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@__main__/sysreq.html.twig", "/var/www/html/source/Application/views/admin_twig/tpl/sysreq.html.twig");
    }
}
