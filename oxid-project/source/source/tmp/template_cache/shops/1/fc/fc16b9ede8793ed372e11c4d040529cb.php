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

/* @__main__/widget/header/languages.html.twig */
class __TwigTemplate_49e9b5c1080d478b025bd61641c60561 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'dd_layout_page_header_icon_menu_languages_list' => [$this, 'block_dd_layout_page_header_icon_menu_languages_list'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        if (twig_get_attribute($this->env, $this->source, ($context["oView"] ?? null), "isLanguageLoaded", [], "method", false, false, false, 1)) {
            // line 2
            echo "    ";
            if ((twig_length_filter($this->env, ($context["oxcmp_lang"] ?? null)) > 1)) {
                // line 3
                echo "        <label>";
                echo $this->extensions['OxidEsales\Twig\Extensions\TranslateExtension']->translate(["ident" => "LANGUAGE"]);
                echo "</label>
        <div class=\"btn-group w-100\" role=\"group\">
            <button class=\"btn dropdown-toggle\" type=\"button\" aria-label=\"";
                // line 5
                echo $this->extensions['OxidEsales\Twig\Extensions\TranslateExtension']->translate(["ident" => "LANGUAGE"]);
                echo "\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\">
                ";
                // line 6
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["oxcmp_lang"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["_lng"]) {
                    // line 7
                    echo "                    ";
                    if (twig_get_attribute($this->env, $this->source, $context["_lng"], "selected", [], "any", false, false, false, 7)) {
                        // line 8
                        echo "                        ";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["_lng"], "name", [], "any", false, false, false, 8), "html", null, true);
                        echo "
                    ";
                    }
                    // line 10
                    echo "                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['_lng'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 11
                echo "
                <svg aria-hidden=\"true\">
                    <use xlink:href=\"#down\"></use>
                </svg>
            </button>

            <div class=\"dropdown-menu dropdown-menu-md-end\">
                ";
                // line 18
                $this->displayBlock('dd_layout_page_header_icon_menu_languages_list', $context, $blocks);
                // line 32
                echo "            </div>
        </div>
    ";
            }
        }
    }

    // line 18
    public function block_dd_layout_page_header_icon_menu_languages_list($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 19
        echo "                    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["oxcmp_lang"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["_lng"]) {
            // line 20
            echo "                        ";
            $context["sLangImg"] = (("lang/" . twig_get_attribute($this->env, $this->source, $context["_lng"], "abbr", [], "any", false, false, false, 20)) . ".png");
            // line 21
            echo "                        ";
            if (twig_get_attribute($this->env, $this->source, $context["_lng"], "selected", [], "any", false, false, false, 21)) {
                // line 22
                echo "                            ";
                ob_start();
                // line 23
                echo "                                <a class=\"dropdown-item ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["_lng"], "abbr", [], "any", false, false, false, 23), "html", null, true);
                echo "\" title=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["_lng"], "name", [], "any", false, false, false, 23), "html", null, true);
                echo "\" href=\"";
                echo $this->extensions['OxidEsales\Twig\Extensions\UrlExtension']->addUrlParameters(twig_get_attribute($this->env, $this->source, $context["_lng"], "link", [], "any", false, false, false, 23), twig_get_attribute($this->env, $this->source, ($context["oView"] ?? null), "getDynUrlParams", [], "method", false, false, false, 23));
                echo "\" hreflang=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["_lng"], "abbr", [], "any", false, false, false, 23), "html", null, true);
                echo "\">
                                    ";
                // line 24
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["_lng"], "name", [], "any", false, false, false, 24), "html", null, true);
                echo "</a>
                            ";
                $captureContent = ob_get_clean();
                $context['twig']['capture']['languageSelected'] = $captureContent;
                unset($captureContent);
                // line 26
                echo "                        ";
            }
            // line 27
            echo "                            <a class=\"dropdown-item";
            if (twig_get_attribute($this->env, $this->source, $context["_lng"], "selected", [], "any", false, false, false, 27)) {
                echo " active";
            }
            echo " ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["_lng"], "abbr", [], "any", false, false, false, 27), "html", null, true);
            echo "\" title=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["_lng"], "name", [], "any", false, false, false, 27), "html", null, true);
            echo "\" href=\"";
            echo $this->extensions['OxidEsales\Twig\Extensions\UrlExtension']->addUrlParameters(twig_get_attribute($this->env, $this->source, $context["_lng"], "link", [], "any", false, false, false, 27), twig_get_attribute($this->env, $this->source, ($context["oView"] ?? null), "getDynUrlParams", [], "method", false, false, false, 27));
            echo "\" hreflang=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["_lng"], "abbr", [], "any", false, false, false, 27), "html", null, true);
            echo "\">
                                ";
            // line 28
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["_lng"], "name", [], "any", false, false, false, 28), "html", null, true);
            echo "
                            </a>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['_lng'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 31
        echo "                ";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@__main__/widget/header/languages.html.twig";
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
        return array (  154 => 31,  145 => 28,  130 => 27,  127 => 26,  120 => 24,  109 => 23,  106 => 22,  103 => 21,  100 => 20,  95 => 19,  91 => 18,  83 => 32,  81 => 18,  72 => 11,  66 => 10,  60 => 8,  57 => 7,  53 => 6,  49 => 5,  43 => 3,  40 => 2,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@__main__/widget/header/languages.html.twig", "/var/www/html/source/Application/views/apex/tpl/widget/header/languages.html.twig");
    }
}
