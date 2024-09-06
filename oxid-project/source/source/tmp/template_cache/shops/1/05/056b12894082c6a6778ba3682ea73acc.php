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

/* @__main__/header.html.twig */
class __TwigTemplate_738366f9765e0f803d174f9e4ef9cde8 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'admin_header_head' => [$this, 'block_admin_header_head'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "<!DOCTYPE HTML PUBLIC \"-//W3C//DTD HTML 4.01//EN\" \"http://www.w3.org/TR/html4/strict.dtd\">
<html id=\"top\">
<head>
    ";
        // line 4
        $this->displayBlock('admin_header_head', $context, $blocks);
        // line 10
        echo "</head>
<body>
    ";
        // line 12
        $this->loadTemplate("@__main__/include/header_links.html.twig", "@__main__/header.html.twig", 12)->display($context);
        // line 13
        echo "    <div class=\"version\">
        <b>
            ";
        // line 15
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["oView"] ?? null), "getShopFullEdition", [], "method", false, false, false, 15), "html", null, true);
        echo "
            ";
        // line 16
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["oView"] ?? null), "getShopVersion", [], "method", false, false, false, 16), "html", null, true);
        echo "
        </b>
    </div>

</body>
</html>
";
    }

    // line 4
    public function block_admin_header_head($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 5
        echo "        <title>";
        echo $this->extensions['OxidEsales\Twig\Extensions\TranslateExtension']->translate(["ident" => "NAVIGATION_TITLE"]);
        echo "</title>
        <link rel=\"stylesheet\" href=\"";
        // line 6
        echo twig_get_attribute($this->env, $this->source, ($context["oViewConf"] ?? null), "getResourceUrl", [], "method", false, false, false, 6);
        echo "nav.css\">
        <link rel=\"stylesheet\" href=\"";
        // line 7
        echo twig_get_attribute($this->env, $this->source, ($context["oViewConf"] ?? null), "getResourceUrl", [], "method", false, false, false, 7);
        echo "colors_";
        echo twig_escape_filter($this->env, twig_lower_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["oViewConf"] ?? null), "getEdition", [], "method", false, false, false, 7)), "html", null, true);
        echo ".css\">
        <meta http-equiv=\"Content-Type\" content=\"text/html; charset=";
        // line 8
        echo twig_escape_filter($this->env, ($context["charset"] ?? null), "html", null, true);
        echo "\">
    ";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@__main__/header.html.twig";
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
        return array (  89 => 8,  83 => 7,  79 => 6,  74 => 5,  70 => 4,  59 => 16,  55 => 15,  51 => 13,  49 => 12,  45 => 10,  43 => 4,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@__main__/header.html.twig", "/var/www/html/source/Application/views/admin_twig/tpl/header.html.twig");
    }
}
