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

/* @__main__/page/details/details.html.twig */
class __TwigTemplate_9ce319b7053a524e564df695247d9dd3 extends Template
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
        if ( !($context["blWorkaroundInclude"] ?? null)) {
            // line 2
            echo "    ";
            ob_start();
            // line 3
            echo "        ";
            if (($context["oxcmp_user"] ?? null)) {
                // line 4
                echo "            ";
                $context["force_sid"] = twig_get_attribute($this->env, $this->source, ($context["oView"] ?? null), "getSidForWidget", [], "method", false, false, false, 4);
                // line 5
                echo "        ";
            }
            // line 6
            echo "        ";
            echo $this->extensions['OxidEsales\Twig\Extensions\IncludeWidgetExtension']->includeWidget(["cl" => "oxwArticleDetails", "_parent" => twig_get_attribute($this->env, $this->source, ($context["oView"] ?? null), "getClassKey", [], "method", false, false, false, 6), "nocookie" => 1, "force_sid" => ($context["force_sid"] ?? null), "_navurlparams" => twig_get_attribute($this->env, $this->source, ($context["oViewConf"] ?? null), "getNavUrlParams", [], "method", false, false, false, 6), "_object" => twig_get_attribute($this->env, $this->source, ($context["oView"] ?? null), "getProduct", [], "method", false, false, false, 6), "anid" => twig_get_attribute($this->env, $this->source, ($context["oViewConf"] ?? null), "getActArticleId", [], "method", false, false, false, 6), "iPriceAlarmStatus" => twig_get_attribute($this->env, $this->source, ($context["oView"] ?? null), "getPriceAlarmStatus", [], "method", false, false, false, 6), "sorting" => twig_get_attribute($this->env, $this->source, ($context["oView"] ?? null), "getSortingParameters", [], "method", false, false, false, 6), "skipESIforUser" => 1]);
            echo "
    ";
            $captureContent = ob_get_clean();
            if ('oxidBlock_content' != '' && isset($captureContent)) {
            if (!isset($context['oxidBlock_content'])) {
            $context['oxidBlock_content'] = [];
            }
            if (!is_array($context['oxidBlock_content'])) {
            $context['oxidBlock_content'] = [$context['oxidBlock_content']];
            }
            $context['oxidBlock_content'][] = $captureContent;
            }
            unset($captureContent);
            // line 8
            echo "    ";
            $this->loadTemplate("@__main__/layout/page.html.twig", "@__main__/page/details/details.html.twig", 8)->display($context);
        } else {
            // line 10
            echo "    ";
            $context["oDetailsProduct"] = twig_get_attribute($this->env, $this->source, ($context["oView"] ?? null), "getProduct", [], "method", false, false, false, 10);
            // line 11
            echo "    ";
            $context["oPictureProduct"] = twig_get_attribute($this->env, $this->source, ($context["oView"] ?? null), "getPicturesProduct", [], "method", false, false, false, 11);
            // line 12
            echo "    ";
            $context["currency"] = twig_get_attribute($this->env, $this->source, ($context["oView"] ?? null), "getActCurrency", [], "method", false, false, false, 12);
            // line 13
            echo "    ";
            $context["sPageHeadTitle"] = ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["oDetailsProduct"] ?? null), "oxarticles__oxtitle", [], "any", false, false, false, 13), "value", [], "any", false, false, false, 13) . " ") . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["oDetailsProduct"] ?? null), "oxarticles__oxvarselect", [], "any", false, false, false, 13), "value", [], "any", false, false, false, 13));
            // line 14
            echo "    ";
            $context["headerImageWidth"] = twig_get_attribute($this->env, $this->source, ($context["oViewConf"] ?? null), "getViewThemeParam", ["sHeaderImageWidth"], "method", false, false, false, 14);
            // line 15
            echo "    ";
            $context["productListNavigation"] = twig_get_attribute($this->env, $this->source, ($context["oViewConf"] ?? null), "getViewThemeParam", ["sProductListNavigation"], "method", false, false, false, 15);
            // line 16
            echo "
    ";
            // line 17
            if ((twig_get_attribute($this->env, $this->source, ($context["oView"] ?? null), "getPriceAlarmStatus", [], "method", false, false, false, 17) == 1)) {
                // line 18
                echo "        ";
                $context["_statusMessage1"] = (($this->extensions['OxidEsales\Twig\Extensions\Filters\TranslateExtension']->translate("PAGE_DETAILS_THANKYOUMESSAGE1") . " ") . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["oxcmp_shop"] ?? null), "oxshops__oxname", [], "any", false, false, false, 18), "value", [], "any", false, false, false, 18));
                // line 19
                echo "        ";
                $context["_statusMessage2"] = ($this->extensions['OxidEsales\Twig\Extensions\Filters\TranslateExtension']->translate("PAGE_DETAILS_THANKYOUMESSAGE2") . " ");
                // line 20
                echo "        ";
                $context["_statusMessage3"] = ((((($this->extensions['OxidEsales\Twig\Extensions\Filters\TranslateExtension']->translate("PAGE_DETAILS_THANKYOUMESSAGE3") . " ") . twig_get_attribute($this->env, $this->source, ($context["oView"] ?? null), "getBidPrice", [], "method", false, false, false, 20)) . " ") . twig_get_attribute($this->env, $this->source, ($context["currency"] ?? null), "sign", [], "any", false, false, false, 20)) . " ");
                // line 21
                echo "        ";
                $context["_statusMessage4"] = $this->extensions['OxidEsales\Twig\Extensions\Filters\TranslateExtension']->translate("PAGE_DETAILS_THANKYOUMESSAGE4");
                // line 22
                echo "        ";
                $this->loadTemplate("@__main__/message/success.html.twig", "@__main__/page/details/details.html.twig", 22)->display(twig_array_merge($context, ["statusMessage" => (((($context["_statusMessage1"] ?? null) . ($context["_statusMessage2"] ?? null)) . ($context["_statusMessage3"] ?? null)) . ($context["_statusMessage4"] ?? null))]));
                // line 23
                echo "    ";
            } elseif ((twig_get_attribute($this->env, $this->source, ($context["oView"] ?? null), "getPriceAlarmStatus", [], "method", false, false, false, 23) == 2)) {
                // line 24
                echo "        ";
                $context["_statusMessage"] = $this->extensions['OxidEsales\Twig\Extensions\Filters\TranslateExtension']->translate("MESSAGE_WRONG_VERIFICATION_CODE");
                // line 25
                echo "        ";
                $this->loadTemplate("@__main__/message/error.html.twig", "@__main__/page/details/details.html.twig", 25)->display(twig_array_merge($context, ["statusMessage" => ($context["_statusMessage"] ?? null)]));
                // line 26
                echo "    ";
            } elseif ((twig_get_attribute($this->env, $this->source, ($context["oView"] ?? null), "getPriceAlarmStatus", [], "method", false, false, false, 26) === 0)) {
                // line 27
                echo "        ";
                $context["_statusMessage1"] = ($this->extensions['OxidEsales\Twig\Extensions\Filters\TranslateExtension']->translate("MESSAGE_NOT_ABLE_TO_SEND_EMAIL") . "<br>");
                // line 28
                echo "        ";
                $context["_statusMessage2"] = $this->extensions['OxidEsales\Twig\Extensions\Filters\TranslateExtension']->translate("MESSAGE_VERIFY_YOUR_EMAIL");
                // line 29
                echo "        ";
                $this->loadTemplate("@__main__/message/error.html.twig", "@__main__/page/details/details.html.twig", 29)->display(twig_array_merge($context, ["statusMessage" => (($context["_statusMessage1"] ?? null) . ($context["_statusMessage2"] ?? null))]));
                // line 30
                echo "    ";
            }
            // line 31
            echo "
    <div id=\"details_container\">
        ";
            // line 33
            if (($context["productListNavigation"] ?? null)) {
                // line 34
                echo "            ";
                // line 35
                echo "            ";
                $context["actCategory"] = twig_get_attribute($this->env, $this->source, ($context["oView"] ?? null), "getActiveCategory", [], "method", false, false, false, 35);
                // line 36
                echo "
            <div class=\"detailsParams listRefine bottomRound product-list-navigation\">
                <div class=\"container-xxl\">
                    <div class=\"row refineParams clear\" id=\"detailsItemsPager\">
                        <div class=\"col-3 pager-overview-link\">
                            <a href=\"";
                // line 41
                echo twig_get_attribute($this->env, $this->source, ($context["actCategory"] ?? null), "toListLink", [], "any", false, false, false, 41);
                echo "\">
                                <svg aria-hidden=\"true\">
                                    <use xlink:href=\"#bars\"></use>
                                </svg>
                                ";
                // line 45
                echo $this->extensions['OxidEsales\Twig\Extensions\TranslateExtension']->translate(["ident" => "BACK_TO_OVERVIEW"]);
                echo "
                            </a>
                        </div>
                        <div class=\"col-3 pager-prev\">
                            ";
                // line 49
                if (twig_get_attribute($this->env, $this->source, ($context["actCategory"] ?? null), "prevProductLink", [], "any", false, false, false, 49)) {
                    // line 50
                    echo "
                                <a id=\"linkPrevArticle\" href=\"";
                    // line 51
                    echo twig_get_attribute($this->env, $this->source, ($context["actCategory"] ?? null), "prevProductLink", [], "any", false, false, false, 51);
                    echo "\">
                                    <svg aria-hidden=\"true\">
                                        <use xlink:href=\"#left\"></use>
                                    </svg>
                                    ";
                    // line 55
                    echo $this->extensions['OxidEsales\Twig\Extensions\TranslateExtension']->translate(["ident" => "PREVIOUS_PRODUCT"]);
                    echo "
                                </a>
                            ";
                }
                // line 58
                echo "                        </div>
                        <div class=\"col-3 pager-current-page\">
                            ";
                // line 60
                if (twig_get_attribute($this->env, $this->source, ($context["actCategory"] ?? null), "iProductPos", [], "any", false, false, false, 60)) {
                    // line 61
                    echo "                                ";
                    echo $this->extensions['OxidEsales\Twig\Extensions\TranslateExtension']->translate(["ident" => "PRODUCT"]);
                    echo " ";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["actCategory"] ?? null), "iProductPos", [], "any", false, false, false, 61), "html", null, true);
                    echo " ";
                    echo $this->extensions['OxidEsales\Twig\Extensions\TranslateExtension']->translate(["ident" => "OF"]);
                    echo " ";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["actCategory"] ?? null), "iCntOfProd", [], "any", false, false, false, 61), "html", null, true);
                    echo "
                            ";
                }
                // line 63
                echo "                        </div>
                        <div class=\"col-3 pager-next\">
                            ";
                // line 65
                if (twig_get_attribute($this->env, $this->source, ($context["actCategory"] ?? null), "nextProductLink", [], "any", false, false, false, 65)) {
                    // line 66
                    echo "                                <a id=\"linkNextArticle\"
                                   href=\"";
                    // line 67
                    echo twig_get_attribute($this->env, $this->source, ($context["actCategory"] ?? null), "nextProductLink", [], "any", false, false, false, 67);
                    echo "\">
                                    ";
                    // line 68
                    echo $this->extensions['OxidEsales\Twig\Extensions\TranslateExtension']->translate(["ident" => "NEXT_PRODUCT"]);
                    echo "
                                    <svg aria-hidden=\"true\">
                                        <use xlink:href=\"#right\"></use>
                                    </svg>
                                </a>

                            ";
                }
                // line 75
                echo "                        </div>
                    </div>
                    ";
                // line 77
                if (($context["blFullwidth"] ?? null)) {
                    // line 78
                    echo "                        <hr>
                    ";
                }
                // line 80
                echo "                </div>
            </div>
        ";
            }
            // line 83
            echo "        ";
            $context["actCategory"] = twig_get_attribute($this->env, $this->source, ($context["oView"] ?? null), "getActiveCategory", [], "method", false, false, false, 83);
            // line 84
            echo "        ";
            $this->loadTemplate("@__main__/page/details/inc/fullproductinfo.html.twig", "@__main__/page/details/details.html.twig", 84)->display($context);
            // line 85
            echo "    </div>
";
        }
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@__main__/page/details/details.html.twig";
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
        return array (  245 => 85,  242 => 84,  239 => 83,  234 => 80,  230 => 78,  228 => 77,  224 => 75,  214 => 68,  210 => 67,  207 => 66,  205 => 65,  201 => 63,  189 => 61,  187 => 60,  183 => 58,  177 => 55,  170 => 51,  167 => 50,  165 => 49,  158 => 45,  151 => 41,  144 => 36,  141 => 35,  139 => 34,  137 => 33,  133 => 31,  130 => 30,  127 => 29,  124 => 28,  121 => 27,  118 => 26,  115 => 25,  112 => 24,  109 => 23,  106 => 22,  103 => 21,  100 => 20,  97 => 19,  94 => 18,  92 => 17,  89 => 16,  86 => 15,  83 => 14,  80 => 13,  77 => 12,  74 => 11,  71 => 10,  67 => 8,  51 => 6,  48 => 5,  45 => 4,  42 => 3,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@__main__/page/details/details.html.twig", "/var/www/html/source/Application/views/apex/tpl/page/details/details.html.twig");
    }
}
