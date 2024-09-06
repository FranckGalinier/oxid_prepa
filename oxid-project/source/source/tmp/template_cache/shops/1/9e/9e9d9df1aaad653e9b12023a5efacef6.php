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

/* @__main__/include/header_links.html.twig */
class __TwigTemplate_b47b2ed0c0b0eb2bd474bd5f55fa1390 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'admin_header_links' => [$this, 'block_admin_header_links'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "<ul>
    ";
        // line 2
        $this->displayBlock('admin_header_links', $context, $blocks);
        // line 19
        echo "</ul>
";
    }

    // line 2
    public function block_admin_header_links($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 3
        echo "    <li class=\"act\">
        <a href=\"";
        // line 4
        echo twig_get_attribute($this->env, $this->source, ($context["oViewConf"] ?? null), "getSelfLink", [], "method", false, false, false, 4);
        echo "&cl=navigation&item=home.html.twig\" id=\"homelink\" target=\"basefrm\" class=\"rc\">
            <b>";
        // line 5
        echo $this->extensions['OxidEsales\Twig\Extensions\TranslateExtension']->translate(["ident" => "NAVIGATION_HOME"]);
        echo "</b>
        </a>
    </li>
    <li class=\"sep\">
        <a href=\"";
        // line 9
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["oViewConf"] ?? null), "getShopURL", [], "method", false, false, false, 9), "html", null, true);
        echo "\" id=\"shopfrontlink\" target=\"_blank\" class=\"rc\">
            <b>";
        // line 10
        echo $this->extensions['OxidEsales\Twig\Extensions\TranslateExtension']->translate(["ident" => "NAVIGATION_SHOPFRONT"]);
        echo "</b>
        </a>
    </li>
    <li class=\"sep\">
        <a href=\"";
        // line 14
        echo twig_get_attribute($this->env, $this->source, ($context["oViewConf"] ?? null), "getSelfLink", [], "method", false, false, false, 14);
        echo "&cl=navigation&fnc=logout\" id=\"logoutlink\" target=\"_parent\" class=\"rc\">
            <b>";
        // line 15
        echo $this->extensions['OxidEsales\Twig\Extensions\TranslateExtension']->translate(["ident" => "NAVIGATION_LOGOUT"]);
        echo "</b>
        </a>
    </li>
    ";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@__main__/include/header_links.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo()
    {
        return array (  81 => 15,  77 => 14,  70 => 10,  66 => 9,  59 => 5,  55 => 4,  52 => 3,  48 => 2,  43 => 19,  41 => 2,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@__main__/include/header_links.html.twig", "/var/www/html/source/Application/views/admin_twig/tpl/include/header_links.html.twig");
    }
}
