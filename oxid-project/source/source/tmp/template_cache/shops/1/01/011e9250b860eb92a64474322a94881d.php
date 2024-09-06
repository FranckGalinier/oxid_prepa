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

/* @__main__/layout/header.html.twig */
class __TwigTemplate_cbcd1eb06075dd20f60461228c1f60a7 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'header_main' => [$this, 'block_header_main'],
            'dd_layout_page_header_icon_menu_languages' => [$this, 'block_dd_layout_page_header_icon_menu_languages'],
            'dd_layout_page_header_icon_menu_currencies' => [$this, 'block_dd_layout_page_header_icon_menu_currencies'],
            'layout_header_logo' => [$this, 'block_layout_header_logo'],
            'layout_header_top' => [$this, 'block_layout_header_top'],
            'dd_layout_page_header_icon_menu_account' => [$this, 'block_dd_layout_page_header_icon_menu_account'],
            'dd_layout_page_header_icon_menu_minibasket' => [$this, 'block_dd_layout_page_header_icon_menu_minibasket'],
            'layout_header_bottom' => [$this, 'block_layout_header_bottom'],
            'dd_widget_header_categorylist_navbar_header' => [$this, 'block_dd_widget_header_categorylist_navbar_header'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        if (((twig_get_attribute($this->env, $this->source, ($context["oViewConf"] ?? null), "getTopActionClassName", [], "method", false, false, false, 1) != "clearcookies") && (twig_get_attribute($this->env, $this->source, ($context["oViewConf"] ?? null), "getTopActionClassName", [], "method", false, false, false, 1) != "mallstart"))) {
            // line 2
            echo "    ";
            echo $this->extensions['OxidEsales\Twig\Extensions\IncludeWidgetExtension']->includeWidget(["cl" => "oxwCookieNote", "_parent" => twig_get_attribute($this->env, $this->source, ($context["oView"] ?? null), "getClassKey", [], "method", false, false, false, 2), "nocookie" => 1]);
            echo "
";
        }
        // line 4
        $this->displayBlock('header_main', $context, $blocks);
        // line 161
        echo "
";
        // line 162
        echo twig_escape_filter($this->env, $this->extensions['OxidEsales\Twig\Extensions\InsertNewBasketItemExtension']->insertNewBasketItem($this->env, ["tpl" => "widget/minibasket/newbasketitemmsg.html.twig", "type" => "message"]), "html", null, true);
        echo "
";
        // line 163
        if (!empty($context["_render4cache"])) {
            echo $this->extensions['OxidEsales\Twig\Extensions\IncludeExtension']->renderForCache(['file' => "@__main__/widget/minibasket/minibasketmodal.html.twig"]);
        } else {
            $this->loadTemplate("@__main__/widget/minibasket/minibasketmodal.html.twig", "@__main__/layout/header.html.twig", 163)->display($context);
        }
    }

    // line 4
    public function block_header_main($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 5
        echo "
    ";
        // line 7
        echo "    <header class=\"header\">
        <div class=\"header-wrapper\">
            ";
        // line 9
        if (twig_get_attribute($this->env, $this->source, ($context["oView"] ?? null), "showSearch", [], "method", false, false, false, 9)) {
            // line 10
            echo "                <div class=\"meta\">
                    <div class=\"container-xxl\">
                        <div class=\"meta-wrapper d-flex justify-content-between\">
                            ";
            // line 13
            $__internal_compile_0 = null;
            try {
                $__internal_compile_0 =                 $this->loadTemplate(twig_template_from_string($this->env, $this->extensions['OxidEsales\Twig\Extensions\IncludeContentExtension']->content("oxheaderusps")), "@__main__/layout/header.html.twig", 13);
            } catch (LoaderError $e) {
                // ignore missing template
            }
            if ($__internal_compile_0) {
                $__internal_compile_0->display($context);
            }
            // line 14
            echo "
                            <div class=\"dropdowns d-none d-lg-inline-block\">
                                <button class=\"btn\" type=\"button\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\"
                                        data-bs-auto-close=\"outside\" aria-label=\"";
            // line 17
            echo $this->extensions['OxidEsales\Twig\Extensions\TranslateExtension']->translate(["ident" => "CHANGE"]);
            echo "\">
                                    <svg aria-hidden=\"true\">
                                        <use xlink:href=\"#globe\"></use>
                                    </svg>
                                </button>
                                <div class=\"dropdown-menu dropdown-menu-end dropdown-menu-arrow\">
                                    <form>
                                        ";
            // line 24
            $this->displayBlock('dd_layout_page_header_icon_menu_languages', $context, $blocks);
            // line 28
            echo "                                        ";
            $this->displayBlock('dd_layout_page_header_icon_menu_currencies', $context, $blocks);
            // line 32
            echo "                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            ";
        }
        // line 39
        echo "            <div class=\"header-box position-relative\">
                <div class=\"container-";
        // line 40
        if (twig_get_attribute($this->env, $this->source, ($context["oView"] ?? null), "showSearch", [], "method", false, false, false, 40)) {
            echo "xxl";
        } else {
            echo "md";
        }
        echo "\">
                    ";
        // line 41
        if ( !twig_get_attribute($this->env, $this->source, ($context["oView"] ?? null), "showSearch", [], "method", false, false, false, 41)) {
            // line 42
            echo "                    <div class=\"row justify-content-center\">
                        <div class=\"col-md-12 col-lg-8 col-xl-8 col-xxl-6\">
                            ";
        }
        // line 45
        echo "
                            <div class=\"header-container\">
                                ";
        // line 47
        $this->displayBlock('layout_header_logo', $context, $blocks);
        // line 62
        echo "
                                ";
        // line 63
        $this->loadTemplate("@__main__/widget/header/search.html.twig", "@__main__/layout/header.html.twig", 63)->display($context);
        // line 64
        echo "
                                ";
        // line 65
        if (twig_get_attribute($this->env, $this->source, ($context["oView"] ?? null), "showSearch", [], "method", false, false, false, 65)) {
            // line 66
            echo "                                    ";
            $this->displayBlock('layout_header_top', $context, $blocks);
            // line 91
            echo "                                ";
        } else {
            // line 92
            echo "                                    ";
            $this->loadTemplate("@__main__/page/checkout/inc/steps.html.twig", "@__main__/layout/header.html.twig", 92)->display(twig_array_merge($context, ["active" => ($context["active_step"] ?? null)]));
            // line 93
            echo "                                ";
        }
        // line 94
        echo "                            </div>

                            ";
        // line 96
        if ( !twig_get_attribute($this->env, $this->source, ($context["oView"] ?? null), "showSearch", [], "method", false, false, false, 96)) {
            // line 97
            echo "                        </div>
                    </div>
                    ";
        }
        // line 100
        echo "                </div>
            </div>
        </div>
        ";
        // line 103
        $this->displayBlock('layout_header_bottom', $context, $blocks);
        // line 106
        echo "
        ";
        // line 107
        if (twig_get_attribute($this->env, $this->source, ($context["oView"] ?? null), "showSearch", [], "method", false, false, false, 107)) {
            // line 108
            echo "            <div class=\"fixed-bottom mobile-nav d-lg-none\">
                ";
            // line 109
            $this->displayBlock('dd_widget_header_categorylist_navbar_header', $context, $blocks);
            // line 117
            echo "
                <a href=\"#\" class=\"btn btn-toggle btn-search\"
                   data-bs-toggle=\"collapse\"
                   data-bs-target=\"#searchForm\" aria-controls=\"searchForm\"
                   aria-expanded=\"false\">
                    <svg aria-hidden=\"true\">
                        <use xlink:href=\"#search\"></use>
                    </svg>
                    <span class=\"btn-text\">";
            // line 125
            echo $this->extensions['OxidEsales\Twig\Extensions\TranslateExtension']->translate(["ident" => "SEARCH"]);
            echo "</span>
                </a>

                <a href=\"";
            // line 128
            echo $this->extensions['OxidEsales\Twig\Extensions\UrlExtension']->getSeoUrl(["ident" => (twig_get_attribute($this->env, $this->source, ($context["oViewConf"] ?? null), "getSelfLink", [], "method", false, false, false, 128) . "cl=account")]);
            echo "\" class=\"btn btn-toggle btn-account\">
                    <svg aria-hidden=\"true\">
                        <use xlink:href=\"#person\"></use>
                    </svg>
                    <span class=\"btn-text\">
                        ";
            // line 133
            echo $this->extensions['OxidEsales\Twig\Extensions\TranslateExtension']->translate(["ident" => "ACCOUNT"]);
            echo "
                    </span>
                </a>

                <a class=\"btn\" href=\"";
            // line 137
            echo $this->extensions['OxidEsales\Twig\Extensions\UrlExtension']->getSeoUrl(["ident" => (twig_get_attribute($this->env, $this->source, ($context["oViewConf"] ?? null), "getSelfLink", [], "method", false, false, false, 137) . "cl=account_noticelist")]);
            echo "\">
                    <svg aria-hidden=\"true\">
                        <use xlink:href=\"#star-fill\"></use>
                    </svg>
                    ";
            // line 141
            if ((($context["oxcmp_user"] ?? null) && twig_get_attribute($this->env, $this->source, ($context["oxcmp_user"] ?? null), "getNoticeListArtCnt", [], "method", false, false, false, 141))) {
                echo " <span
                            class=\"badge js-noticeListCnt\">";
                // line 142
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["oxcmp_user"] ?? null), "getNoticeListArtCnt", [], "method", false, false, false, 142), "html", null, true);
                echo "</span>";
            }
            // line 143
            echo "                    <span class=\"btn-text\">";
            echo $this->extensions['OxidEsales\Twig\Extensions\TranslateExtension']->translate(["ident" => "FAVOURITES"]);
            echo "</span>
                </a>

                ";
            // line 146
            echo $this->extensions['OxidEsales\Twig\Extensions\IncludeWidgetExtension']->includeWidget(["cl" => "oxwMiniBasket", "nocookie" => ($context["blAnon"] ?? null), "force_sid" => ($context["force_sid"] ?? null)]);
            echo "

            </div>
        ";
        }
        // line 150
        echo "    </header>
    ";
        // line 151
        if (((twig_get_attribute($this->env, $this->source, ($context["oView"] ?? null), "showSearch", [], "method", false, false, false, 151) && twig_get_attribute($this->env, $this->source, ($context["oView"] ?? null), "getIsOrderStep", [], "method", false, false, false, 151)) && (twig_get_attribute($this->env, $this->source, ($context["oView"] ?? null), "getClassKey", [], "method", false, false, false, 151) != "basket"))) {
            // line 152
            echo "        <div class=\"container-xxl\">
            <div class=\"row justify-content-center mt-5\">
                <div class=\"col-md-12 col-lg-8 col-xl-8 col-xxl-6\">
                    ";
            // line 155
            $this->loadTemplate("@__main__/page/checkout/inc/steps.html.twig", "@__main__/layout/header.html.twig", 155)->display(twig_array_merge($context, ["active" => ($context["active_step"] ?? null)]));
            // line 156
            echo "                </div>
            </div>
        </div>
    ";
        }
    }

    // line 24
    public function block_dd_layout_page_header_icon_menu_languages($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 25
        echo "                                            ";
        // line 26
        echo "                                            ";
        echo $this->extensions['OxidEsales\Twig\Extensions\IncludeWidgetExtension']->includeWidget(["cl" => "oxwLanguageList", "lang" => twig_get_attribute($this->env, $this->source, ($context["oViewConf"] ?? null), "getActLanguageId", [], "method", false, false, false, 26), "_parent" => twig_get_attribute($this->env, $this->source, ($context["oView"] ?? null), "getClassKey", [], "method", false, false, false, 26), "nocookie" => 1, "_navurlparams" => twig_get_attribute($this->env, $this->source, ($context["oViewConf"] ?? null), "getNavUrlParams", [], "method", false, false, false, 26), "anid" => twig_get_attribute($this->env, $this->source, ($context["oViewConf"] ?? null), "getActArticleId", [], "method", false, false, false, 26)]);
        echo "
                                        ";
    }

    // line 28
    public function block_dd_layout_page_header_icon_menu_currencies($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 29
        echo "                                            ";
        // line 30
        echo "                                            ";
        echo $this->extensions['OxidEsales\Twig\Extensions\IncludeWidgetExtension']->includeWidget(["cl" => "oxwCurrencyList", "cur" => twig_get_attribute($this->env, $this->source, ($context["oViewConf"] ?? null), "getActCurrency", [], "method", false, false, false, 30), "_parent" => twig_get_attribute($this->env, $this->source, ($context["oView"] ?? null), "getClassKey", [], "method", false, false, false, 30), "nocookie" => 1, "_navurlparams" => twig_get_attribute($this->env, $this->source, ($context["oViewConf"] ?? null), "getNavUrlParams", [], "method", false, false, false, 30), "anid" => twig_get_attribute($this->env, $this->source, ($context["oViewConf"] ?? null), "getActArticleId", [], "method", false, false, false, 30)]);
        echo "
                                        ";
    }

    // line 47
    public function block_layout_header_logo($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 48
        echo "                                    ";
        $context["slogoImg"] = twig_get_attribute($this->env, $this->source, ($context["oViewConf"] ?? null), "getViewThemeParam", ["sLogoFile"], "method", false, false, false, 48);
        // line 49
        echo "                                    ";
        $context["sLogoWidth"] = twig_get_attribute($this->env, $this->source, ($context["oViewConf"] ?? null), "getViewThemeParam", ["sLogoWidth"], "method", false, false, false, 49);
        // line 50
        echo "                                    ";
        $context["sLogoHeight"] = twig_get_attribute($this->env, $this->source, ($context["oViewConf"] ?? null), "getViewThemeParam", ["sLogoHeight"], "method", false, false, false, 50);
        // line 51
        echo "                                    <a href=\"";
        echo twig_get_attribute($this->env, $this->source, ($context["oViewConf"] ?? null), "getHomeLink", [], "method", false, false, false, 51);
        echo "\"
                                       title=\"";
        // line 52
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["oxcmp_shop"] ?? null), "oxshops__oxname", [], "any", false, false, false, 52), "value", [], "any", false, false, false, 52), "html", null, true);
        echo "\" class=\"logo-link d-flex\">
                                        ";
        // line 53
        if (($context["slogoImg"] ?? null)) {
            // line 54
            echo "                                            <img src=\"";
            echo twig_get_attribute($this->env, $this->source, ($context["oViewConf"] ?? null), "getImageUrl", [($context["slogoImg"] ?? null)], "method", false, false, false, 54);
            echo "\"
                                                 alt=\"";
            // line 55
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["oxcmp_shop"] ?? null), "oxshops__oxname", [], "any", false, false, false, 55), "value", [], "any", false, false, false, 55), "html", null, true);
            echo "\" width=\"";
            echo twig_escape_filter($this->env, ($context["sLogoWidth"] ?? null), "html", null, true);
            echo "\"
                                                 height=\"";
            // line 56
            echo twig_escape_filter($this->env, ($context["sLogoHeight"] ?? null), "html", null, true);
            echo "\" class=\"logo-img\">
                                        ";
        } else {
            // line 58
            echo "                                            <span class=\"h1\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["oxcmp_shop"] ?? null), "oxshops__oxname", [], "any", false, false, false, 58), "value", [], "any", false, false, false, 58), "html", null, true);
            echo "</span>
                                        ";
        }
        // line 60
        echo "                                    </a>
                                ";
    }

    // line 66
    public function block_layout_header_top($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 67
        echo "                                        <div class=\"menu-dropdowns btn-group d-none d-lg-block\" role=\"group\">
                                            ";
        // line 68
        $this->displayBlock('dd_layout_page_header_icon_menu_account', $context, $blocks);
        // line 78
        echo "
                                            ";
        // line 79
        $this->displayBlock('dd_layout_page_header_icon_menu_minibasket', $context, $blocks);
        // line 89
        echo "                                        </div>
                                    ";
    }

    // line 68
    public function block_dd_layout_page_header_icon_menu_account($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 69
        echo "                                                ";
        if (((($context["oxcmp_user"] ?? null) || twig_get_attribute($this->env, $this->source, ($context["oView"] ?? null), "getCompareItemCount", [], "method", false, false, false, 69)) || twig_get_attribute($this->env, $this->source, ($context["Errors"] ?? null), "loginBoxErrors", [], "any", false, false, false, 69))) {
            // line 70
            echo "                                                    ";
            $context["blAnon"] = 0;
            // line 71
            echo "                                                    ";
            $context["force_sid"] = twig_get_attribute($this->env, $this->source, ($context["oView"] ?? null), "getSidForWidget", [], "method", false, false, false, 71);
            // line 72
            echo "                                                ";
        } else {
            // line 73
            echo "                                                    ";
            $context["blAnon"] = 1;
            // line 74
            echo "                                                ";
        }
        // line 75
        echo "                                                ";
        // line 76
        echo "                                                ";
        echo $this->extensions['OxidEsales\Twig\Extensions\IncludeWidgetExtension']->includeWidget(["cl" => "oxwServiceMenu", "_parent" => twig_get_attribute($this->env, $this->source, ($context["oView"] ?? null), "getClassKey", [], "method", false, false, false, 76), "force_sid" => ($context["force_sid"] ?? null), "nocookie" => ($context["blAnon"] ?? null), "_navurlparams" => twig_get_attribute($this->env, $this->source, ($context["oViewConf"] ?? null), "getNavUrlParams", [], "method", false, false, false, 76), "anid" => twig_get_attribute($this->env, $this->source, ($context["oViewConf"] ?? null), "getActArticleId", [], "method", false, false, false, 76)]);
        echo "
                                            ";
    }

    // line 79
    public function block_dd_layout_page_header_icon_menu_minibasket($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 80
        echo "                                                ";
        // line 81
        echo "                                                ";
        if (twig_get_attribute($this->env, $this->source, ($context["oxcmp_basket"] ?? null), "getProductsCount", [], "method", false, false, false, 81)) {
            // line 82
            echo "                                                    ";
            $context["blAnon"] = 0;
            // line 83
            echo "                                                    ";
            $context["force_sid"] = twig_get_attribute($this->env, $this->source, ($context["oView"] ?? null), "getSidForWidget", [], "method", false, false, false, 83);
            // line 84
            echo "                                                ";
        } else {
            // line 85
            echo "                                                    ";
            $context["blAnon"] = 1;
            // line 86
            echo "                                                ";
        }
        // line 87
        echo "                                                ";
        echo $this->extensions['OxidEsales\Twig\Extensions\IncludeWidgetExtension']->includeWidget(["cl" => "oxwMiniBasket", "nocookie" => ($context["blAnon"] ?? null), "force_sid" => ($context["force_sid"] ?? null)]);
        echo "
                                            ";
    }

    // line 103
    public function block_layout_header_bottom($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 104
        echo "            ";
        echo $this->extensions['OxidEsales\Twig\Extensions\IncludeWidgetExtension']->includeWidget(["cl" => "oxwCategoryTree", "cnid" => twig_get_attribute($this->env, $this->source, ($context["oView"] ?? null), "getCategoryId", [], "method", false, false, false, 104), "sWidgetType" => "header", "style" => "", "_parent" => twig_get_attribute($this->env, $this->source, ($context["oView"] ?? null), "getClassKey", [], "method", false, false, false, 104), "nocookie" => 1]);
        echo "
        ";
    }

    // line 109
    public function block_dd_widget_header_categorylist_navbar_header($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 110
        echo "                    <button class=\"btn btn-toggle collapsed\" type=\"button\" data-bs-toggle=\"collapse\"
                            data-bs-target=\"#navbarSupportedContent\" aria-controls=\"navbarSupportedContent\"
                            aria-expanded=\"false\" aria-label=\"Toggle navigation\">
                        ";
        // line 113
        $this->loadTemplate("icons/bars.svg", "@__main__/layout/header.html.twig", 113)->display($context);
        // line 114
        echo "                        <span class=\"btn-text\">";
        echo $this->extensions['OxidEsales\Twig\Extensions\TranslateExtension']->translate(["ident" => "MENU"]);
        echo "</span>
                    </button>
                ";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@__main__/layout/header.html.twig";
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
        return array (  462 => 114,  460 => 113,  455 => 110,  451 => 109,  444 => 104,  440 => 103,  433 => 87,  430 => 86,  427 => 85,  424 => 84,  421 => 83,  418 => 82,  415 => 81,  413 => 80,  409 => 79,  402 => 76,  400 => 75,  397 => 74,  394 => 73,  391 => 72,  388 => 71,  385 => 70,  382 => 69,  378 => 68,  373 => 89,  371 => 79,  368 => 78,  366 => 68,  363 => 67,  359 => 66,  354 => 60,  348 => 58,  343 => 56,  337 => 55,  332 => 54,  330 => 53,  326 => 52,  321 => 51,  318 => 50,  315 => 49,  312 => 48,  308 => 47,  301 => 30,  299 => 29,  295 => 28,  288 => 26,  286 => 25,  282 => 24,  274 => 156,  272 => 155,  267 => 152,  265 => 151,  262 => 150,  255 => 146,  248 => 143,  244 => 142,  240 => 141,  233 => 137,  226 => 133,  218 => 128,  212 => 125,  202 => 117,  200 => 109,  197 => 108,  195 => 107,  192 => 106,  190 => 103,  185 => 100,  180 => 97,  178 => 96,  174 => 94,  171 => 93,  168 => 92,  165 => 91,  162 => 66,  160 => 65,  157 => 64,  155 => 63,  152 => 62,  150 => 47,  146 => 45,  141 => 42,  139 => 41,  131 => 40,  128 => 39,  119 => 32,  116 => 28,  114 => 24,  104 => 17,  99 => 14,  89 => 13,  84 => 10,  82 => 9,  78 => 7,  75 => 5,  71 => 4,  63 => 163,  59 => 162,  56 => 161,  54 => 4,  48 => 2,  46 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@__main__/layout/header.html.twig", "/var/www/html/source/Application/views/apex/tpl/layout/header.html.twig");
    }
}
