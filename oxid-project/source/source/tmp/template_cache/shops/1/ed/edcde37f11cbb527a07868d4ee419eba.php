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

/* @__main__/widget/reviews/reviews.html.twig */
class __TwigTemplate_b6a6c586f5642233373cf97d7e1b2118 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'details_productmain_ratings' => [$this, 'block_details_productmain_ratings'],
            'widget_reviews_form' => [$this, 'block_widget_reviews_form'],
            'widget_reviews_form_rating' => [$this, 'block_widget_reviews_form_rating'],
            'widget_reviews_form_fields' => [$this, 'block_widget_reviews_form_fields'],
            'widget_reviews_form_buttons' => [$this, 'block_widget_reviews_form_buttons'],
            'widget_reviews_record' => [$this, 'block_widget_reviews_record'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "<div class=\"container-xxl row-spacer\">
    <div class=\"row\">
        <div class=\"col-12\">
            <div id=\"review\">
                <div class=\"d-flex mb-3\">
                    <div class=\"h4\">
                        ";
        // line 7
        echo $this->extensions['OxidEsales\Twig\Extensions\TranslateExtension']->translate(["ident" => "WRITE_PRODUCT_REVIEW"]);
        echo "
                    </div>
                    ";
        // line 9
        if (twig_get_attribute($this->env, $this->source, ($context["oView"] ?? null), "ratingIsActive", [], "method", false, false, false, 9)) {
            // line 10
            echo "                        ";
            $this->displayBlock('details_productmain_ratings', $context, $blocks);
            // line 13
            echo "                    ";
        }
        // line 14
        echo "
                    <div class=\"d-none d-md-block ms-auto\">
                        ";
        // line 16
        if (($context["oxcmp_user"] ?? null)) {
            // line 17
            echo "                            <a class=\"btn btn-light\" data-bs-toggle=\"collapse\" href=\"#review_form\">
                                ";
            // line 18
            echo $this->extensions['OxidEsales\Twig\Extensions\TranslateExtension']->translate(["ident" => "WRITE_REVIEW"]);
            echo "
                            </a>
                        ";
        } else {
            // line 21
            echo "                            <a class=\"btn btn-light\" rel=\"nofollow\"
                               href=\"";
            // line 22
            echo $this->extensions['OxidEsales\Twig\Extensions\UrlExtension']->getSeoUrl(["ident" => (twig_get_attribute($this->env, $this->source, ($context["oViewConf"] ?? null), "getSelfLink", [], "method", false, false, false, 22) . "cl=account"), "params" => ((("anid=" . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["oDetailsProduct"] ?? null), "oxarticles__oxnid", [], "any", false, false, false, 22), "value", [], "any", false, false, false, 22)) . "&amp;sourcecl=details") . twig_get_attribute($this->env, $this->source, ($context["oViewConf"] ?? null), "getNavUrlParams", [], "method", false, false, false, 22))]);
            echo "\">
                                ";
            // line 23
            echo $this->extensions['OxidEsales\Twig\Extensions\TranslateExtension']->translate(["ident" => "WRITE_REVIEW"]);
            echo "
                            </a>
                        ";
        }
        // line 26
        echo "                    </div>
                </div>


                ";
        // line 30
        if (($context["oxcmp_user"] ?? null)) {
            // line 31
            echo "                    <div id=\"review_form\" class=\"collapse\">
                        ";
            // line 32
            $this->displayBlock('widget_reviews_form', $context, $blocks);
            // line 111
            echo "                    </div>
                ";
        }
        // line 113
        echo "
                ";
        // line 114
        if (twig_get_attribute($this->env, $this->source, ($context["oView"] ?? null), "getReviews", [], "method", false, false, false, 114)) {
            // line 115
            echo "                    <div class=\"reviews mb-5\">
                        ";
            // line 116
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["oView"] ?? null), "getReviews", [], "method", false, false, false, 116));
            $context['loop'] = [
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            ];
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["review"]) {
                // line 117
                echo "                            <div class=\"review mb-3\" id=\"reviewName_";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 117), "html", null, true);
                echo "\">
                                ";
                // line 118
                $this->displayBlock('widget_reviews_record', $context, $blocks);
                // line 146
                echo "                            </div>
                        ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['review'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 148
            echo "                    </div>
                ";
        } else {
            // line 150
            echo "                    <div class=\"my-5\">
                        <strong>";
            // line 151
            echo $this->extensions['OxidEsales\Twig\Extensions\TranslateExtension']->translate(["ident" => "NO_REVIEW_AVAILABLE"]);
            echo "</strong>
                    </div>
                ";
        }
        // line 154
        echo "                <div class=\"row mb-5 d-md-none\">
                    <div class=\"col-6\">
                        ";
        // line 156
        if (($context["oxcmp_user"] ?? null)) {
            // line 157
            echo "                            <a class=\"btn btn-light\" data-bs-toggle=\"collapse\" href=\"#review_form\">
                                ";
            // line 158
            echo $this->extensions['OxidEsales\Twig\Extensions\TranslateExtension']->translate(["ident" => "WRITE_REVIEW"]);
            echo "
                            </a>
                        ";
        } else {
            // line 161
            echo "                            <a class=\"btn btn-light\" rel=\"nofollow\"
                               href=\"";
            // line 162
            echo $this->extensions['OxidEsales\Twig\Extensions\UrlExtension']->getSeoUrl(["ident" => (twig_get_attribute($this->env, $this->source, ($context["oViewConf"] ?? null), "getSelfLink", [], "method", false, false, false, 162) . "cl=account"), "params" => ((("anid=" . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["oDetailsProduct"] ?? null), "oxarticles__oxnid", [], "any", false, false, false, 162), "value", [], "any", false, false, false, 162)) . "&amp;sourcecl=details") . twig_get_attribute($this->env, $this->source, ($context["oViewConf"] ?? null), "getNavUrlParams", [], "method", false, false, false, 162))]);
            echo "\">
                                ";
            // line 163
            echo $this->extensions['OxidEsales\Twig\Extensions\TranslateExtension']->translate(["ident" => "WRITE_REVIEW"]);
            echo "
                            </a>
                        ";
        }
        // line 166
        echo "                    </div>
                </div>
            </div>
        </div>
    </div>
</div>";
    }

    // line 10
    public function block_details_productmain_ratings($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 11
        echo "                            ";
        $this->loadTemplate("@__main__/widget/reviews/rating.html.twig", "@__main__/widget/reviews/reviews.html.twig", 11)->display(twig_array_merge($context, ["itemid" => ("anid=" . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["oDetailsProduct"] ?? null), "oxarticles__oxnid", [], "any", false, false, false, 11), "value", [], "any", false, false, false, 11)), "sRateUrl" => twig_get_attribute($this->env, $this->source, ($context["oDetailsProduct"] ?? null), "getLink", [], "method", false, false, false, 11)]));
        // line 12
        echo "                        ";
    }

    // line 32
    public function block_widget_reviews_form($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 33
        echo "                            <form action=\"";
        echo twig_get_attribute($this->env, $this->source, ($context["oViewConf"] ?? null), "getSelfActionLink", [], "method", false, false, false, 33);
        echo "\" method=\"post\" id=\"rating\" novalidate>
                                <div id=\"writeReview\" class=\"product-review mb-5\">
                                    <div class=\"d-none\">
                                        ";
        // line 36
        if (twig_get_attribute($this->env, $this->source, ($context["oView"] ?? null), "canRate", [], "method", false, false, false, 36)) {
            // line 37
            echo "                                            <input id=\"productRating\" type=\"hidden\" name=\"artrating\" value=\"0\">
                                            <input id=\"recommListRating\" type=\"hidden\" name=\"recommlistrating\"
                                                   value=\"0\">
                                        ";
        }
        // line 41
        echo "                                        ";
        echo twig_get_attribute($this->env, $this->source, ($context["oViewConf"] ?? null), "getHiddenSid", [], "method", false, false, false, 41);
        echo "
                                        ";
        // line 42
        echo twig_get_attribute($this->env, $this->source, ($context["oViewConf"] ?? null), "getNavFormParams", [], "method", false, false, false, 42);
        echo "
                                        ";
        // line 43
        if (!empty($context["_render4cache"])) {
            echo $this->extensions['OxidEsales\Twig\Extensions\IncludeExtension']->renderForCache(['file' => "@__main__/form/formparams.html.twig"]);
        } else {
            $this->loadTemplate("@__main__/form/formparams.html.twig", "@__main__/widget/reviews/reviews.html.twig", 43)->display($context);
        }
        // line 44
        echo "                                        <input type=\"hidden\" name=\"fnc\" value=\"savereview\">
                                        <input type=\"hidden\" name=\"cl\" value=\"";
        // line 45
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["oViewConf"] ?? null), "getTopActiveClassName", [], "method", false, false, false, 45), "html", null, true);
        echo "\">
                                        ";
        // line 46
        if (($context["oDetailsProduct"] ?? null)) {
            // line 47
            echo "                                            <input type=\"hidden\" name=\"anid\"
                                                   value=\"";
            // line 48
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["oDetailsProduct"] ?? null), "oxarticles__oxid", [], "any", false, false, false, 48), "value", [], "any", false, false, false, 48), "html", null, true);
            echo "\">
                                        ";
        } else {
            // line 50
            echo "                                            ";
            $context["_actvrecommlist"] = twig_get_attribute($this->env, $this->source, ($context["oView"] ?? null), "getActiveRecommList", [], "method", false, false, false, 50);
            // line 51
            echo "                                            <input type=\"hidden\" name=\"recommid\"
                                                   value=\"";
            // line 52
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["_actvrecommlist"] ?? null), "oxrecommlists__oxid", [], "any", false, false, false, 52), "value", [], "any", false, false, false, 52), "html", null, true);
            echo "\">
                                        ";
        }
        // line 54
        echo "
                                        ";
        // line 55
        if (($context["sReviewUserHash"] ?? null)) {
            // line 56
            echo "                                            <input type=\"hidden\" name=\"reviewuserhash\" value=\"";
            echo twig_escape_filter($this->env, ($context["sReviewUserHash"] ?? null), "html", null, true);
            echo "\">
                                        ";
        }
        // line 58
        echo "                                    </div>

                                    ";
        // line 60
        $this->displayBlock('widget_reviews_form_rating', $context, $blocks);
        // line 86
        echo "
                                    ";
        // line 87
        $this->displayBlock('widget_reviews_form_fields', $context, $blocks);
        // line 99
        echo "
                                    ";
        // line 100
        $this->displayBlock('widget_reviews_form_buttons', $context, $blocks);
        // line 108
        echo "                                </div>
                            </form>
                        ";
    }

    // line 60
    public function block_widget_reviews_form_rating($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 61
        echo "                                        ";
        if (twig_get_attribute($this->env, $this->source, ($context["oView"] ?? null), "canRate", [], "method", false, false, false, 61)) {
            // line 62
            echo "                                            <script>
                                                function change(value) {
                                                    document.getElementById(\"productRating\").value = value;
                                                    document.getElementById(\"recommListRating\").value = value;
                                                    document.getElementById(\"reviewRating\").className = \"rating list-inline stars\" + value;
                                                }
                                            </script>
                                            <ul id=\"reviewRating\" class=\"rating list-inline\">
                                                ";
            // line 70
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range(1, 5));
            $context['loop'] = [
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            ];
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["star"]) {
                // line 71
                echo "                                                    <li class=\"list-inline-item rating-star s";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 71), "html", null, true);
                echo "\"
                                                        data-rate-value=\"";
                // line 72
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 72), "html", null, true);
                echo "\">
                                                        <button type=\"button\" onclick=\"change(";
                // line 73
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 73), "html", null, true);
                echo ");\"
                                                                class=\"ox-write-review ox-rateindex-";
                // line 74
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 74), "html", null, true);
                echo "\"
                                                                title=\"";
                // line 75
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 75), "html", null, true);
                echo " ";
                if ((twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 75) == 1)) {
                    echo twig_escape_filter($this->env, $this->extensions['OxidEsales\Twig\Extensions\Filters\TranslateExtension']->translate("STAR"), "html", null, true);
                } else {
                    echo twig_escape_filter($this->env, $this->extensions['OxidEsales\Twig\Extensions\Filters\TranslateExtension']->translate("STARS"), "html", null, true);
                }
                echo "\">
                                                            <svg>
                                                                <use xlink:href=\"#star\"></use>
                                                            </svg>
                                                        </button>
                                                    </li>
                                                ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['star'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 82
            echo "                                                <li class=\"rating-star\" id=\"reviewRatingText\"></li>
                                            </ul>
                                        ";
        }
        // line 85
        echo "                                    ";
    }

    // line 87
    public function block_widget_reviews_form_fields($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 88
        echo "                                        <div class=\"mb-3\">
                                            <div class=\"col-12\">
                                                <div class=\"form-floating\">
                                                    <textarea class=\"form-control\" placeholder=\"Leave a comment here\"
                                                              id=\"yourReview\" style=\"height: 100px;\"
                                                              name=\"rvw_txt\"></textarea>
                                                    <label for=\"yourReview\">";
        // line 94
        echo $this->extensions['OxidEsales\Twig\Extensions\TranslateExtension']->translate(["ident" => "YOUR_REVIEW"]);
        echo "</label>
                                                </div>
                                            </div>
                                        </div>
                                    ";
    }

    // line 100
    public function block_widget_reviews_form_buttons($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 101
        echo "                                        <div class=\"mb-3\">
                                            <div class=\"col-12\">
                                                <button id=\"reviewSave\" type=\"submit\"
                                                        class=\"submitButton btn btn-primary\">";
        // line 104
        echo $this->extensions['OxidEsales\Twig\Extensions\TranslateExtension']->translate(["ident" => "SAVE_RATING_AND_REVIEW"]);
        echo "</button>
                                            </div>
                                        </div>
                                    ";
    }

    // line 118
    public function block_widget_reviews_record($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 119
        echo "                                    <div class=\"d-flex\">
                                        <div class=\"rating\">
                                            ";
        // line 121
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["review"] ?? null), "oxreviews__oxrating", [], "any", false, false, false, 121), "value", [], "any", false, false, false, 121)) {
            // line 122
            echo "                                                ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range(1, 5));
            $context['loop'] = [
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            ];
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["starRatings"]) {
                // line 123
                echo "                                                    ";
                if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["review"] ?? null), "oxreviews__oxrating", [], "any", false, false, false, 123), "value", [], "any", false, false, false, 123) >= twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 123))) {
                    // line 124
                    echo "                                                        <svg class=\"star active\">
                                                            <use xlink:href=\"#star-fill\"></use>
                                                        </svg>
                                                    ";
                } else {
                    // line 128
                    echo "                                                        <svg class=\"star\">
                                                            <use xlink:href=\"#star\"></use>
                                                        </svg>
                                                    ";
                }
                // line 132
                echo "                                                ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['starRatings'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 133
            echo "                                            ";
        }
        // line 134
        echo "                                        </div>
                                        <div class=\"rater\">
                                            ";
        // line 136
        echo $this->extensions['OxidEsales\Twig\Extensions\TranslateExtension']->translate(["ident" => "ON"]);
        echo "
                                            <time datetime=\"";
        // line 137
        echo twig_escape_filter($this->env, $this->extensions['OxidEsales\Twig\Extensions\Filters\DateFormatExtension']->dateFormat(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["review"] ?? null), "oxreviews__oxcreate", [], "any", false, false, false, 137), "value", [], "any", false, false, false, 137), "%Y-%m-%d"), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->extensions['OxidEsales\Twig\Extensions\Filters\DateFormatExtension']->dateFormat(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["review"] ?? null), "oxreviews__oxcreate", [], "any", false, false, false, 137), "value", [], "any", false, false, false, 137), "%d.%m.%Y"), "html", null, true);
        echo "</time>
                                            ";
        // line 138
        echo $this->extensions['OxidEsales\Twig\Extensions\TranslateExtension']->translate(["ident" => "BY"]);
        echo "
                                            <span>";
        // line 139
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["review"] ?? null), "oxuser__oxfname", [], "any", false, false, false, 139), "value", [], "any", false, false, false, 139), "html", null, true);
        echo "</span>
                                        </div>
                                    </div>
                                    <div id=\"reviewText_";
        // line 142
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["loop"] ?? null), "index", [], "any", false, false, false, 142), "html", null, true);
        echo "\">
                                        ";
        // line 143
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["review"] ?? null), "oxreviews__oxtext", [], "any", false, false, false, 143), "value", [], "any", false, false, false, 143), "html", null, true);
        echo "
                                    </div>
                                ";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@__main__/widget/reviews/reviews.html.twig";
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
        return array (  525 => 143,  521 => 142,  515 => 139,  511 => 138,  505 => 137,  501 => 136,  497 => 134,  494 => 133,  480 => 132,  474 => 128,  468 => 124,  465 => 123,  447 => 122,  445 => 121,  441 => 119,  437 => 118,  429 => 104,  424 => 101,  420 => 100,  411 => 94,  403 => 88,  399 => 87,  395 => 85,  390 => 82,  363 => 75,  359 => 74,  355 => 73,  351 => 72,  346 => 71,  329 => 70,  319 => 62,  316 => 61,  312 => 60,  306 => 108,  304 => 100,  301 => 99,  299 => 87,  296 => 86,  294 => 60,  290 => 58,  284 => 56,  282 => 55,  279 => 54,  274 => 52,  271 => 51,  268 => 50,  263 => 48,  260 => 47,  258 => 46,  254 => 45,  251 => 44,  245 => 43,  241 => 42,  236 => 41,  230 => 37,  228 => 36,  221 => 33,  217 => 32,  213 => 12,  210 => 11,  206 => 10,  197 => 166,  191 => 163,  187 => 162,  184 => 161,  178 => 158,  175 => 157,  173 => 156,  169 => 154,  163 => 151,  160 => 150,  156 => 148,  141 => 146,  139 => 118,  134 => 117,  117 => 116,  114 => 115,  112 => 114,  109 => 113,  105 => 111,  103 => 32,  100 => 31,  98 => 30,  92 => 26,  86 => 23,  82 => 22,  79 => 21,  73 => 18,  70 => 17,  68 => 16,  64 => 14,  61 => 13,  58 => 10,  56 => 9,  51 => 7,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@__main__/widget/reviews/reviews.html.twig", "/var/www/html/source/Application/views/apex/tpl/widget/reviews/reviews.html.twig");
    }
}
