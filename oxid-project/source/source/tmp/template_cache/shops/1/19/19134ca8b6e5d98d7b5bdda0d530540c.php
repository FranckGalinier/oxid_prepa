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

/* @__main__/widget/locator/paging.html.twig */
class __TwigTemplate_9569db8f4baf55dac79f8e036c4921f0 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'widget_locator_paging' => [$this, 'block_widget_locator_paging'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        $this->displayBlock('widget_locator_paging', $context, $blocks);
    }

    public function block_widget_locator_paging($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 2
        echo "    ";
        if (twig_get_attribute($this->env, $this->source, ($context["pages"] ?? null), "changePage", [], "any", false, false, false, 2)) {
            // line 3
            echo "        <ul class=\"pagination justify-content-center\">
            <li class=\"page-item";
            // line 4
            if ( !twig_get_attribute($this->env, $this->source, ($context["pages"] ?? null), "previousPage", [], "any", false, false, false, 4)) {
                echo " disabled";
            }
            echo "\">
                ";
            // line 5
            if (twig_get_attribute($this->env, $this->source, ($context["pages"] ?? null), "previousPage", [], "any", false, false, false, 5)) {
                // line 6
                echo "                <a class=\"page-link\" href=\"";
                echo twig_get_attribute($this->env, $this->source, ($context["pages"] ?? null), "previousPage", [], "any", false, false, false, 6);
                echo "\" aria-label=\"";
                echo $this->extensions['OxidEsales\Twig\Extensions\TranslateExtension']->translate(["ident" => "PREVIOUS"]);
                echo "\">
                    <span aria-hidden=\"true\">&laquo;</span>
                    <span class=\"visually-hidden-focusable\">";
                // line 8
                echo $this->extensions['OxidEsales\Twig\Extensions\TranslateExtension']->translate(["ident" => "PREVIOUS"]);
                echo "</span>
                </a>
                ";
            } else {
                // line 11
                echo "                <span class=\"page-link\">&laquo;</span>
                ";
            }
            // line 13
            echo "            </li>

            ";
            // line 15
            $context["i"] = 1;
            // line 16
            echo "            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["pages"] ?? null), "changePage", [], "any", false, false, false, 16));
            foreach ($context['_seq'] as $context["iPage"] => $context["page"]) {
                // line 17
                echo "                ";
                if (($context["iPage"] == ($context["i"] ?? null))) {
                    // line 18
                    echo "                    <li class=\"page-item ";
                    if (($context["iPage"] == twig_get_attribute($this->env, $this->source, ($context["pages"] ?? null), "actPage", [], "any", false, false, false, 18))) {
                        echo " active";
                    }
                    echo "\">
                        <a href=\"";
                    // line 19
                    echo twig_get_attribute($this->env, $this->source, $context["page"], "url", [], "any", false, false, false, 19);
                    echo "\" class=\"page-link\">";
                    echo twig_escape_filter($this->env, $context["iPage"], "html", null, true);
                    echo "</a>
                    </li>
                    ";
                    // line 21
                    $context["i"] = (($context["i"] ?? null) + 1);
                    // line 22
                    echo "                ";
                } elseif (($context["iPage"] > ($context["i"] ?? null))) {
                    // line 23
                    echo "                    <li class=\"page-item disabled\">
                        <span class=\"page-link\">...</span>
                    </li>
                    <li class=\"page-item ";
                    // line 26
                    if (($context["iPage"] == twig_get_attribute($this->env, $this->source, ($context["pages"] ?? null), "actPage", [], "any", false, false, false, 26))) {
                        echo " active";
                    }
                    echo "\">
                        <a href=\"";
                    // line 27
                    echo twig_get_attribute($this->env, $this->source, $context["page"], "url", [], "any", false, false, false, 27);
                    echo "\" class=\"page-link\">";
                    echo twig_escape_filter($this->env, $context["iPage"], "html", null, true);
                    echo "</a>
                    </li>
                    ";
                    // line 29
                    $context["i"] = ($context["iPage"] + 1);
                    // line 30
                    echo "                ";
                } elseif (($context["iPage"] < ($context["i"] ?? null))) {
                    // line 31
                    echo "                    <li class=\"page-item ";
                    if (($context["iPage"] == twig_get_attribute($this->env, $this->source, ($context["pages"] ?? null), "actPage", [], "any", false, false, false, 31))) {
                        echo " active";
                    }
                    echo "\">
                        <a href=\"";
                    // line 32
                    echo twig_get_attribute($this->env, $this->source, $context["page"], "url", [], "any", false, false, false, 32);
                    echo "\" class=\"page-link\">";
                    echo twig_escape_filter($this->env, $context["iPage"], "html", null, true);
                    echo "</a>
                    </li>
                    <li class=\"page-item disabled\">
                        <span class=\"page-link\">...</span>
                    </li>
                    ";
                    // line 37
                    $context["i"] = ($context["iPage"] + 1);
                    // line 38
                    echo "                ";
                }
                // line 39
                echo "            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['iPage'], $context['page'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 40
            echo "
            <li class=\"page-item";
            // line 41
            if ( !twig_get_attribute($this->env, $this->source, ($context["pages"] ?? null), "nextPage", [], "any", false, false, false, 41)) {
                echo " disabled";
            }
            echo "\">
                ";
            // line 42
            if (twig_get_attribute($this->env, $this->source, ($context["pages"] ?? null), "nextPage", [], "any", false, false, false, 42)) {
                // line 43
                echo "                    <a class=\"page-link\" href=\"";
                echo twig_get_attribute($this->env, $this->source, ($context["pages"] ?? null), "nextPage", [], "any", false, false, false, 43);
                echo "\" aria-label=\"";
                echo $this->extensions['OxidEsales\Twig\Extensions\TranslateExtension']->translate(["ident" => "NEXT"]);
                echo "\">
                        <span aria-hidden=\"true\">&raquo;</span>
                        <span class=\"visually-hidden-focusable\">";
                // line 45
                echo $this->extensions['OxidEsales\Twig\Extensions\TranslateExtension']->translate(["ident" => "NEXT"]);
                echo "</span>
                    </a>
                ";
            } else {
                // line 48
                echo "                    <span class=\"page-link\">&raquo;</span>
                ";
            }
            // line 50
            echo "            </li>
        </ul>
    ";
        }
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@__main__/widget/locator/paging.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo()
    {
        return array (  190 => 50,  186 => 48,  180 => 45,  172 => 43,  170 => 42,  164 => 41,  161 => 40,  155 => 39,  152 => 38,  150 => 37,  140 => 32,  133 => 31,  130 => 30,  128 => 29,  121 => 27,  115 => 26,  110 => 23,  107 => 22,  105 => 21,  98 => 19,  91 => 18,  88 => 17,  83 => 16,  81 => 15,  77 => 13,  73 => 11,  67 => 8,  59 => 6,  57 => 5,  51 => 4,  48 => 3,  45 => 2,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@__main__/widget/locator/paging.html.twig", "/var/www/html/source/Application/views/apex/tpl/widget/locator/paging.html.twig");
    }
}
