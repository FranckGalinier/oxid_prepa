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

/* @__main__/widget/reviews/rating.html.twig */
class __TwigTemplate_c077a8ce4917c5cadb8b6fe513548061 extends Template
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
        echo "<div class=\"ratings mb-3\">
    ";
        // line 2
        $context["iRatingValue"] = twig_get_attribute($this->env, $this->source, ($context["oView"] ?? null), "getRatingValue", [], "method", false, false, false, 2);
        // line 3
        echo "    ";
        if ( !($context["oxcmp_user"] ?? null)) {
            // line 4
            echo "        ";
            $context["_star_title"] = $this->extensions['OxidEsales\Twig\Extensions\Filters\TranslateExtension']->translate("MESSAGE_LOGIN_TO_RATE");
            // line 5
            echo "    ";
        } elseif ( !twig_get_attribute($this->env, $this->source, ($context["oView"] ?? null), "canRate", [], "method", false, false, false, 5)) {
            // line 6
            echo "        ";
            $context["_star_title"] = $this->extensions['OxidEsales\Twig\Extensions\Filters\TranslateExtension']->translate("MESSAGE_ALREADY_RATED");
            // line 7
            echo "    ";
        } else {
            // line 8
            echo "        ";
            $context["_star_title"] = $this->extensions['OxidEsales\Twig\Extensions\Filters\TranslateExtension']->translate("MESSAGE_RATE_THIS_ARTICLE");
            // line 9
            echo "    ";
        }
        // line 10
        echo "

    ";
        // line 12
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, 5));
        foreach ($context['_seq'] as $context["_key"] => $context["starRatings"]) {
            // line 13
            echo "        ";
            if ((($context["iRatingValue"] ?? null) == 0)) {
                // line 14
                echo "            <svg aria-hidden=\"true\" class=\"star\">
                <use xlink:href=\"#star\"></use>
            </svg>
        ";
            } else {
                // line 18
                echo "            ";
                if ((($context["iRatingValue"] ?? null) > 1)) {
                    // line 19
                    echo "                <svg aria-hidden=\"true\" class=\"star-fill\">
                    <use xlink:href=\"#star-fill\"></use>
                </svg>
                ";
                    // line 22
                    $context["iRatingValue"] = (($context["iRatingValue"] ?? null) - 1);
                    // line 23
                    echo "            ";
                } else {
                    // line 24
                    echo "                ";
                    if ((($context["iRatingValue"] ?? null) < 0.5)) {
                        // line 25
                        echo "                    ";
                        if ((($context["iRatingValue"] ?? null) < 0.3)) {
                            // line 26
                            echo "                        <svg aria-hidden=\"true\" class=\"star-fill\">
                            <use xlink:href=\"#star-fill\"></use>
                        </svg>
                    ";
                        } else {
                            // line 30
                            echo "                        <svg aria-hidden=\"true\" class=\"star-half\">
                            <use xlink:href=\"#star-half\"></use>
                        </svg>
                    ";
                        }
                        // line 34
                        echo "                    ";
                        $context["iRatingValue"] = 0;
                        // line 35
                        echo "                ";
                    } elseif ((($context["iRatingValue"] ?? null) > 0.8)) {
                        // line 36
                        echo "                    <svg aria-hidden=\"true\" class=\"star-fill\">
                        <use xlink:href=\"#star-fill\"></use>
                    </svg>
                    ";
                        // line 39
                        $context["iRatingValue"] = 0;
                        // line 40
                        echo "                ";
                    } else {
                        // line 41
                        echo "                    <svg aria-hidden=\"true\" class=\"star-half\">
                        <use xlink:href=\"#star-half\"></use>
                    </svg>
                    ";
                        // line 44
                        $context["iRatingValue"] = 0;
                        // line 45
                        echo "                ";
                    }
                    // line 46
                    echo "            ";
                }
                // line 47
                echo "        ";
            }
            // line 48
            echo "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['starRatings'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 49
        echo "

    <span class=\"total\">(";
        // line 51
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["oView"] ?? null), "getRatingCount", [], "method", false, false, false, 51), "html", null, true);
        echo ")</span>
</div>
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@__main__/widget/reviews/rating.html.twig";
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
        return array (  153 => 51,  149 => 49,  143 => 48,  140 => 47,  137 => 46,  134 => 45,  132 => 44,  127 => 41,  124 => 40,  122 => 39,  117 => 36,  114 => 35,  111 => 34,  105 => 30,  99 => 26,  96 => 25,  93 => 24,  90 => 23,  88 => 22,  83 => 19,  80 => 18,  74 => 14,  71 => 13,  67 => 12,  63 => 10,  60 => 9,  57 => 8,  54 => 7,  51 => 6,  48 => 5,  45 => 4,  42 => 3,  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@__main__/widget/reviews/rating.html.twig", "/var/www/html/source/Application/views/apex/tpl/widget/reviews/rating.html.twig");
    }
}
