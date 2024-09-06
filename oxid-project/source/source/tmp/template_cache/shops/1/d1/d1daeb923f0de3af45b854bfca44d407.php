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

/* @__main__/widget/minibasket/minibasket_button.html.twig */
class __TwigTemplate_ee9a19ffae190b8862269886ca03acad extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'layout_page_header_widget_minibasket_button' => [$this, 'block_layout_page_header_widget_minibasket_button'],
            'dd_layout_page_header_icon_menu_minibasket_button' => [$this, 'block_dd_layout_page_header_icon_menu_minibasket_button'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        $this->displayBlock('layout_page_header_widget_minibasket_button', $context, $blocks);
    }

    public function block_layout_page_header_widget_minibasket_button($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 2
        echo "    <button type=\"button\" class=\"btn btn-minibasket\" data-bs-toggle=\"modal\" data-bs-target=\"#basketModal\" aria-label=\"";
        echo $this->extensions['OxidEsales\Twig\Extensions\TranslateExtension']->translate(["ident" => "CART"]);
        echo "\">
        ";
        // line 3
        $this->displayBlock('dd_layout_page_header_icon_menu_minibasket_button', $context, $blocks);
        // line 14
        echo "    </button>
";
    }

    // line 3
    public function block_dd_layout_page_header_icon_menu_minibasket_button($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 4
        echo "            <svg>
                <use xlink:href=\"#bag\"></use>
            </svg>

            ";
        // line 8
        if ((twig_get_attribute($this->env, $this->source, ($context["oxcmp_basket"] ?? null), "getItemsCount", [], "method", false, false, false, 8) > 0)) {
            echo "<span class=\"badge\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["oxcmp_basket"] ?? null), "getItemsCount", [], "method", false, false, false, 8), "html", null, true);
            echo "</span>";
        }
        // line 9
        echo "
            <span class=\"btn-text\">
                ";
        // line 11
        echo $this->extensions['OxidEsales\Twig\Extensions\TranslateExtension']->translate(["ident" => "CART"]);
        echo "
            </span>
        ";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@__main__/widget/minibasket/minibasket_button.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo()
    {
        return array (  78 => 11,  74 => 9,  68 => 8,  62 => 4,  58 => 3,  53 => 14,  51 => 3,  46 => 2,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@__main__/widget/minibasket/minibasket_button.html.twig", "/var/www/html/source/Application/views/apex/tpl/widget/minibasket/minibasket_button.html.twig");
    }
}
