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

/* @__main__/widget/header/currencies.html.twig */
class __TwigTemplate_e48cdb022fb9b16b352bd9cfdacde1d4 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'dd_layout_page_header_icon_menu_currencies_button' => [$this, 'block_dd_layout_page_header_icon_menu_currencies_button'],
            'dd_layout_page_header_icon_menu_currencies_list' => [$this, 'block_dd_layout_page_header_icon_menu_currencies_list'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        if (twig_get_attribute($this->env, $this->source, ($context["oView"] ?? null), "loadCurrency", [], "method", false, false, false, 1)) {
            // line 2
            echo "    ";
            if ((twig_length_filter($this->env, ($context["oxcmp_cur"] ?? null)) > 1)) {
                // line 3
                echo "        ";
                $context["currency"] = twig_get_attribute($this->env, $this->source, ($context["oView"] ?? null), "getActCurrency", [], "method", false, false, false, 3);
                // line 4
                echo "        <label>";
                echo $this->extensions['OxidEsales\Twig\Extensions\TranslateExtension']->translate(["ident" => "CURRENCY"]);
                echo "</label>
        <div class=\"btn-group w-100\">
            <button class=\"btn dropdown-toggle\" type=\"button\" aria-label=\"";
                // line 6
                echo $this->extensions['OxidEsales\Twig\Extensions\TranslateExtension']->translate(["ident" => "CURRENCY"]);
                echo "\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\">
                ";
                // line 7
                $this->displayBlock('dd_layout_page_header_icon_menu_currencies_button', $context, $blocks);
                // line 10
                echo "
                <svg aria-hidden=\"true\">
                    <use xlink:href=\"#down\"></use>
                </svg>
            </button>
            <div class=\"dropdown-menu dropdown-menu-md-end\">
                ";
                // line 16
                $this->displayBlock('dd_layout_page_header_icon_menu_currencies_list', $context, $blocks);
                // line 27
                echo "            </div>
        </div>

    ";
            }
        }
    }

    // line 7
    public function block_dd_layout_page_header_icon_menu_currencies_button($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 8
        echo "                    ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["currency"] ?? null), "name", [], "any", false, false, false, 8), "html", null, true);
        echo "
                ";
    }

    // line 16
    public function block_dd_layout_page_header_icon_menu_currencies_list($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 17
        echo "                    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["oxcmp_cur"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["_cur"]) {
            // line 18
            echo "                        ";
            if (twig_get_attribute($this->env, $this->source, $context["_cur"], "selected", [], "any", false, false, false, 18)) {
                // line 19
                echo "                            ";
                $context["selectedCurrency"] = twig_get_attribute($this->env, $this->source, $context["_cur"], "name", [], "any", false, false, false, 19);
                // line 20
                echo "                            ";
                ob_start();
                // line 21
                echo "                                <a class=\"dropdown-item\" href=\"";
                echo $this->extensions['OxidEsales\Twig\Extensions\UrlExtension']->addUrlParameters(twig_get_attribute($this->env, $this->source, $context["_cur"], "link", [], "any", false, false, false, 21), twig_get_attribute($this->env, $this->source, ($context["oView"] ?? null), "getDynUrlParams", [], "method", false, false, false, 21));
                echo "\" title=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["_cur"], "name", [], "any", false, false, false, 21), "html", null, true);
                echo "\"><span>";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["_cur"], "name", [], "any", false, false, false, 21), "html", null, true);
                echo "</span></a>
                            ";
                $captureContent = ob_get_clean();
                $context['twig']['capture']['currencySelected'] = $captureContent;
                unset($captureContent);
                // line 23
                echo "                        ";
            }
            // line 24
            echo "                        <a class=\"dropdown-item";
            if (twig_get_attribute($this->env, $this->source, $context["_cur"], "selected", [], "any", false, false, false, 24)) {
                echo " active";
            }
            echo "\" href=\"";
            echo $this->extensions['OxidEsales\Twig\Extensions\UrlExtension']->addUrlParameters(twig_get_attribute($this->env, $this->source, $context["_cur"], "link", [], "any", false, false, false, 24), twig_get_attribute($this->env, $this->source, ($context["oView"] ?? null), "getDynUrlParams", [], "method", false, false, false, 24));
            echo "\" title=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["_cur"], "name", [], "any", false, false, false, 24), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["_cur"], "name", [], "any", false, false, false, 24), "html", null, true);
            echo "</a>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['_cur'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 26
        echo "                ";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@__main__/widget/header/currencies.html.twig";
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
        return array (  139 => 26,  122 => 24,  119 => 23,  107 => 21,  104 => 20,  101 => 19,  98 => 18,  93 => 17,  89 => 16,  82 => 8,  78 => 7,  69 => 27,  67 => 16,  59 => 10,  57 => 7,  53 => 6,  47 => 4,  44 => 3,  41 => 2,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@__main__/widget/header/currencies.html.twig", "/var/www/html/source/Application/views/apex/tpl/widget/header/currencies.html.twig");
    }
}
