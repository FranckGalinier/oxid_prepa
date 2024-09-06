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

/* @__main__/layout/footer.html.twig */
class __TwigTemplate_887e2a52dcce5c2173190382c1a5fbbf extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'footer_main' => [$this, 'block_footer_main'],
            'footer_main_row' => [$this, 'block_footer_main_row'],
            'dd_footer_servicelist' => [$this, 'block_dd_footer_servicelist'],
            'dd_footer_servicelist_inner' => [$this, 'block_dd_footer_servicelist_inner'],
            'dd_footer_information' => [$this, 'block_dd_footer_information'],
            'dd_footer_information_inner' => [$this, 'block_dd_footer_information_inner'],
            'dd_footer_information_menu_languages' => [$this, 'block_dd_footer_information_menu_languages'],
            'dd_footer_information_menu_currencies' => [$this, 'block_dd_footer_information_menu_currencies'],
            'dd_footer_newsletter' => [$this, 'block_dd_footer_newsletter'],
            'footer_social' => [$this, 'block_footer_social'],
            'footer_payment_icons' => [$this, 'block_footer_payment_icons'],
            'dd_footer_social_links' => [$this, 'block_dd_footer_social_links'],
            'dd_footer_social_links_inner' => [$this, 'block_dd_footer_social_links_inner'],
            'dd_footer_social_links_list' => [$this, 'block_dd_footer_social_links_list'],
            'footer_trust_badges' => [$this, 'block_footer_trust_badges'],
            'layout_page_vatinclude' => [$this, 'block_layout_page_vatinclude'],
            'footer_deliveryinfo' => [$this, 'block_footer_deliveryinfo'],
            'dd_footer_copyright' => [$this, 'block_dd_footer_copyright'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        $this->displayBlock('footer_main', $context, $blocks);
        // line 198
        echo "
";
        // line 199
        if (twig_get_attribute($this->env, $this->source, ($context["oView"] ?? null), "isRootCatChanged", [], "method", false, false, false, 199)) {
            // line 200
            echo "    ";
            $this->loadTemplate("@__main__/form/privatesales/basketexcl.html.twig", "@__main__/layout/footer.html.twig", 200)->display($context);
        }
    }

    // line 1
    public function block_footer_main($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 2
        echo "    ";
        $context["blShowFullFooter"] = twig_get_attribute($this->env, $this->source, ($context["oView"] ?? null), "showSearch", [], "method", false, false, false, 2);
        // line 3
        echo "
    ";
        // line 4
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["oView"] ?? null), "setShowNewsletter", [twig_get_attribute($this->env, $this->source, ($context["oViewConf"] ?? null), "getViewThemeParam", ["blFooterShowNewsletterForm"], "method", false, false, false, 4)], "method", false, false, false, 4), "html", null, true);
        echo "

    ";
        // line 6
        if (($context["oxcmp_user"] ?? null)) {
            // line 7
            echo "        ";
            $context["force_sid"] = twig_get_attribute($this->env, $this->source, ($context["oView"] ?? null), "getSidForWidget", [], "method", false, false, false, 7);
            // line 8
            echo "    ";
        }
        // line 9
        echo "    ";
        $context["footerWidth"] = twig_get_attribute($this->env, $this->source, ($context["oViewConf"] ?? null), "getViewThemeParam", ["sFooterWidth"], "method", false, false, false, 9);
        // line 10
        echo "    ";
        if ((($context["footerWidth"] ?? null) == "container")) {
            // line 11
            echo "        <div class=\"container-xxl\">
    ";
        }
        // line 13
        echo "    <footer class=\"footer\">
        <div class=\"container-xxl\">
            ";
        // line 15
        $this->displayBlock('footer_main_row', $context, $blocks);
        // line 154
        echo "        </div>

        ";
        // line 156
        if (twig_get_attribute($this->env, $this->source, ($context["oView"] ?? null), "isPriceCalculated", [], "method", false, false, false, 156)) {
            // line 157
            echo "            ";
            $this->displayBlock('layout_page_vatinclude', $context, $blocks);
            // line 178
            echo "        ";
        }
        // line 179
        echo "
        ";
        // line 180
        $this->displayBlock('dd_footer_copyright', $context, $blocks);
        // line 193
        echo "    </footer>
    ";
        // line 194
        if ((($context["footerWidth"] ?? null) == "container")) {
            // line 195
            echo "        </div>
    ";
        }
    }

    // line 15
    public function block_footer_main_row($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 16
        echo "                <div class=\"row\">

                    ";
        // line 18
        $this->displayBlock('dd_footer_servicelist', $context, $blocks);
        // line 28
        echo "                    ";
        $this->displayBlock('dd_footer_information', $context, $blocks);
        // line 49
        echo "
                    ";
        // line 50
        if (twig_get_attribute($this->env, $this->source, ($context["oView"] ?? null), "showNewsletter", [], "method", false, false, false, 50)) {
            // line 51
            echo "                        <div class=\"col-12 col-lg-3\">
                            <div class=\"mb-3 footer-newsletter\">
                                <div class=\"h4\">";
            // line 53
            echo $this->extensions['OxidEsales\Twig\Extensions\TranslateExtension']->translate(["ident" => "NEWSLETTER"]);
            echo "</div>
                                <div class=\"footer-content\">
                                    ";
            // line 55
            $this->displayBlock('dd_footer_newsletter', $context, $blocks);
            // line 59
            echo "                                </div>
                            </div>
                            ";
            // line 61
            $this->displayBlock('footer_social', $context, $blocks);
            // line 62
            echo "                        </div>
                    ";
        }
        // line 64
        echo "
                    <div class=\"col-12 col-lg-3\">
                        ";
        // line 66
        if (twig_get_attribute($this->env, $this->source, ($context["oViewConf"] ?? null), "getViewThemeParam", ["sPaymentIcons"], "method", false, false, false, 66)) {
            // line 67
            echo "                            <div class=\"payment-methods mb-5\">
                                <div class=\"h4\">";
            // line 68
            echo $this->extensions['OxidEsales\Twig\Extensions\TranslateExtension']->translate(["ident" => "PAYMENT_METHODS"]);
            echo "</div>
                                ";
            // line 69
            $this->displayBlock('footer_payment_icons', $context, $blocks);
            // line 71
            echo "                                ";
            $context["oCont"] = $this->extensions['OxidEsales\Twig\Extensions\IfContentExtension']->getContent("footer_payment_icons", null);
            // line 72
            echo "                                    ";
            echo twig_include($this->env, $context, twig_template_from_string($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["oCont"] ?? null), "oxcontents__oxcontent", [], "any", false, false, false, 72), "value", [], "any", false, false, false, 72)));
            echo "
                                ";
            unset($context["oCont"]);
            // line 74
            echo "                            </div>
                        ";
        }
        // line 76
        echo "                        ";
        // line 77
        echo "                        ";
        $this->displayBlock('dd_footer_social_links', $context, $blocks);
        // line 138
        echo "                        ";
        // line 139
        echo "                    </div>
                    ";
        // line 140
        if (twig_get_attribute($this->env, $this->source, ($context["oViewConf"] ?? null), "getViewThemeParam", ["sTrustBadges"], "method", false, false, false, 140)) {
            // line 141
            echo "                        <div class=\"col-12 col-lg-2\">
                            <div class=\"trust-badges mb-5\">
                                <div class=\"h4\">";
            // line 143
            echo $this->extensions['OxidEsales\Twig\Extensions\TranslateExtension']->translate(["ident" => "TRUST_BADGES"]);
            echo "</div>
                                ";
            // line 144
            $this->displayBlock('footer_trust_badges', $context, $blocks);
            // line 146
            echo "                                ";
            $context["oCont"] = $this->extensions['OxidEsales\Twig\Extensions\IfContentExtension']->getContent("footer_trust_badges", null);
            // line 147
            echo "                                    ";
            echo twig_include($this->env, $context, twig_template_from_string($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["oCont"] ?? null), "oxcontents__oxcontent", [], "any", false, false, false, 147), "value", [], "any", false, false, false, 147)));
            echo "
                                ";
            unset($context["oCont"]);
            // line 149
            echo "                            </div>
                        </div>
                    ";
        }
        // line 152
        echo "                </div>
            ";
    }

    // line 18
    public function block_dd_footer_servicelist($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 19
        echo "                        <div class=\"col-6 col-md-3 col-lg-2\">
                            <div class=\"h4\">";
        // line 20
        echo $this->extensions['OxidEsales\Twig\Extensions\TranslateExtension']->translate(["ident" => "SERVICES"]);
        echo "</div>
                            <div class=\"footer-content\">
                                ";
        // line 22
        $this->displayBlock('dd_footer_servicelist_inner', $context, $blocks);
        // line 25
        echo "                            </div>
                        </div>
                    ";
    }

    // line 22
    public function block_dd_footer_servicelist_inner($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 23
        echo "                                    ";
        echo $this->extensions['OxidEsales\Twig\Extensions\IncludeWidgetExtension']->includeWidget(["cl" => "oxwServiceList", "noscript" => 1, "nocookie" => 1, "force_sid" => ($context["force_sid"] ?? null)]);
        echo "
                                ";
    }

    // line 28
    public function block_dd_footer_information($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 29
        echo "                        <div class=\"col-6 col-md-3 col-lg-2\">
                            <div class=\"h4\">";
        // line 30
        echo $this->extensions['OxidEsales\Twig\Extensions\TranslateExtension']->translate(["ident" => "INFORMATION"]);
        echo "</div>
                            <div class=\"footer-content\">
                                ";
        // line 32
        $this->displayBlock('dd_footer_information_inner', $context, $blocks);
        // line 35
        echo "
                                <div class=\"footer-dropdowns dropdown d-lg-none\">
                                    ";
        // line 37
        $this->displayBlock('dd_footer_information_menu_languages', $context, $blocks);
        // line 41
        echo "                                    ";
        $this->displayBlock('dd_footer_information_menu_currencies', $context, $blocks);
        // line 45
        echo "                                </div>
                            </div>
                        </div>
                    ";
    }

    // line 32
    public function block_dd_footer_information_inner($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 33
        echo "                                    ";
        echo $this->extensions['OxidEsales\Twig\Extensions\IncludeWidgetExtension']->includeWidget(["cl" => "oxwInformation", "noscript" => 1, "nocookie" => 1, "force_sid" => ($context["force_sid"] ?? null)]);
        echo "
                                ";
    }

    // line 37
    public function block_dd_footer_information_menu_languages($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 38
        echo "                                        ";
        // line 39
        echo "                                        ";
        echo $this->extensions['OxidEsales\Twig\Extensions\IncludeWidgetExtension']->includeWidget(["cl" => "oxwLanguageList", "lang" => twig_get_attribute($this->env, $this->source, ($context["oViewConf"] ?? null), "getActLanguageId", [], "method", false, false, false, 39), "_parent" => twig_get_attribute($this->env, $this->source, ($context["oView"] ?? null), "getClassKey", [], "method", false, false, false, 39), "nocookie" => 1, "_navurlparams" => twig_get_attribute($this->env, $this->source, ($context["oViewConf"] ?? null), "getNavUrlParams", [], "method", false, false, false, 39), "anid" => twig_get_attribute($this->env, $this->source, ($context["oViewConf"] ?? null), "getActArticleId", [], "method", false, false, false, 39)]);
        echo "
                                    ";
    }

    // line 41
    public function block_dd_footer_information_menu_currencies($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 42
        echo "                                        ";
        // line 43
        echo "                                        ";
        echo $this->extensions['OxidEsales\Twig\Extensions\IncludeWidgetExtension']->includeWidget(["cl" => "oxwCurrencyList", "cur" => twig_get_attribute($this->env, $this->source, ($context["oViewConf"] ?? null), "getActCurrency", [], "method", false, false, false, 43), "_parent" => twig_get_attribute($this->env, $this->source, ($context["oView"] ?? null), "getClassKey", [], "method", false, false, false, 43), "nocookie" => 1, "_navurlparams" => twig_get_attribute($this->env, $this->source, ($context["oViewConf"] ?? null), "getNavUrlParams", [], "method", false, false, false, 43), "anid" => twig_get_attribute($this->env, $this->source, ($context["oViewConf"] ?? null), "getActArticleId", [], "method", false, false, false, 43)]);
        echo "
                                    ";
    }

    // line 55
    public function block_dd_footer_newsletter($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 56
        echo "                                        <p>";
        echo $this->extensions['OxidEsales\Twig\Extensions\TranslateExtension']->translate(["ident" => "FOOTER_NEWSLETTER_INFO"]);
        echo "</p>
                                        ";
        // line 57
        $this->loadTemplate("@__main__/widget/footer/newsletter.html.twig", "@__main__/layout/footer.html.twig", 57)->display($context);
        // line 58
        echo "                                    ";
    }

    // line 61
    public function block_footer_social($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 69
    public function block_footer_payment_icons($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 70
        echo "                                ";
    }

    // line 77
    public function block_dd_footer_social_links($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 78
        echo "                            ";
        if ((((twig_get_attribute($this->env, $this->source, ($context["oViewConf"] ?? null), "getViewThemeParam", ["sFacebookUrl"], "method", false, false, false, 78) || twig_get_attribute($this->env, $this->source, ($context["oViewConf"] ?? null), "getViewThemeParam", ["sTwitterUrl"], "method", false, false, false, 78)) || twig_get_attribute($this->env, $this->source, ($context["oViewConf"] ?? null), "getViewThemeParam", ["sYouTubeUrl"], "method", false, false, false, 78)) || twig_get_attribute($this->env, $this->source, ($context["oViewConf"] ?? null), "getViewThemeParam", ["sBlogUrl"], "method", false, false, false, 78))) {
            // line 79
            echo "                                <div class=\"social-links\">
                                    <div class=\"h4\">";
            // line 80
            echo $this->extensions['OxidEsales\Twig\Extensions\TranslateExtension']->translate(["ident" => "SOCIAL_MEDIA"]);
            echo "</div>
                                    ";
            // line 81
            $this->displayBlock('dd_footer_social_links_inner', $context, $blocks);
            // line 135
            echo "                                </div>
                            ";
        }
        // line 137
        echo "                        ";
    }

    // line 81
    public function block_dd_footer_social_links_inner($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 82
        echo "                                        ";
        $this->displayBlock('dd_footer_social_links_list', $context, $blocks);
        // line 134
        echo "                                    ";
    }

    // line 82
    public function block_dd_footer_social_links_list($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 83
        echo "                                            ";
        if (twig_get_attribute($this->env, $this->source, ($context["oViewConf"] ?? null), "getViewThemeParam", ["sFacebookUrl"], "method", false, false, false, 83)) {
            // line 84
            echo "                                                <a target=\"_blank\" class=\"btn btn-primary\"
                                                   rel=\"noopener\"
                                                   href=\"";
            // line 86
            echo twig_get_attribute($this->env, $this->source, ($context["oViewConf"] ?? null), "getViewThemeParam", ["sFacebookUrl"], "method", false, false, false, 86);
            echo "\">
                                                    <span class=\"visually-hidden\">Facebook</span>
                                                    <svg aria-hidden=\"true\">
                                                        <use xlink:href=\"#facebook\"></use>
                                                    </svg>
                                                </a>
                                            ";
        }
        // line 93
        echo "                                            ";
        if (twig_get_attribute($this->env, $this->source, ($context["oViewConf"] ?? null), "getViewThemeParam", ["sInstagramUrl"], "method", false, false, false, 93)) {
            // line 94
            echo "                                                <a target=\"_blank\" class=\"btn btn-primary\"
                                                   rel=\"noopener\"
                                                   href=\"";
            // line 96
            echo twig_get_attribute($this->env, $this->source, ($context["oViewConf"] ?? null), "getViewThemeParam", ["sInstagramUrl"], "method", false, false, false, 96);
            echo "\">
                                                    <span class=\"visually-hidden\">Instagram</span>
                                                    <svg aria-hidden=\"true\">
                                                        <use xlink:href=\"#instagram\"></use>
                                                    </svg>
                                                </a>
                                            ";
        }
        // line 103
        echo "                                            ";
        if (twig_get_attribute($this->env, $this->source, ($context["oViewConf"] ?? null), "getViewThemeParam", ["sTwitterUrl"], "method", false, false, false, 103)) {
            // line 104
            echo "                                                <a target=\"_blank\" class=\"btn btn-primary\"
                                                   rel=\"noopener\"
                                                   href=\"";
            // line 106
            echo twig_get_attribute($this->env, $this->source, ($context["oViewConf"] ?? null), "getViewThemeParam", ["sTwitterUrl"], "method", false, false, false, 106);
            echo "\">
                                                    <span class=\"visually-hidden\">Twitter</span>
                                                    <svg aria-hidden=\"true\">
                                                        <use xlink:href=\"#twitter\"></use>
                                                    </svg>
                                                </a>
                                            ";
        }
        // line 113
        echo "                                            ";
        if (twig_get_attribute($this->env, $this->source, ($context["oViewConf"] ?? null), "getViewThemeParam", ["sYouTubeUrl"], "method", false, false, false, 113)) {
            // line 114
            echo "                                                <a target=\"_blank\" class=\"btn btn-primary\"
                                                   rel=\"noopener\"
                                                   href=\"";
            // line 116
            echo twig_get_attribute($this->env, $this->source, ($context["oViewConf"] ?? null), "getViewThemeParam", ["sYouTubeUrl"], "method", false, false, false, 116);
            echo "\">
                                                    <span class=\"visually-hidden\">YouTube</span>
                                                    <svg aria-hidden=\"true\">
                                                        <use xlink:href=\"#youtube\"></use>
                                                    </svg>
                                                </a>
                                            ";
        }
        // line 123
        echo "                                            ";
        if (twig_get_attribute($this->env, $this->source, ($context["oViewConf"] ?? null), "getViewThemeParam", ["sBlogUrl"], "method", false, false, false, 123)) {
            // line 124
            echo "                                                <a target=\"_blank\" class=\"btn btn-primary\"
                                                   rel=\"noopener\"
                                                   href=\"";
            // line 126
            echo twig_get_attribute($this->env, $this->source, ($context["oViewConf"] ?? null), "getViewThemeParam", ["sBlogUrl"], "method", false, false, false, 126);
            echo "\">
                                                    <span class=\"visually-hidden\">Blog</span>
                                                    <svg aria-hidden=\"true\">
                                                        <use xlink:href=\"#wordpress\"></use>
                                                    </svg>
                                                </a>
                                            ";
        }
        // line 133
        echo "                                        ";
    }

    // line 144
    public function block_footer_trust_badges($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 145
        echo "                                ";
    }

    // line 157
    public function block_layout_page_vatinclude($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 158
        echo "                ";
        $this->displayBlock('footer_deliveryinfo', $context, $blocks);
        // line 177
        echo "            ";
    }

    // line 158
    public function block_footer_deliveryinfo($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 159
        echo "                    ";
        $context["oCont"] = $this->extensions['OxidEsales\Twig\Extensions\IfContentExtension']->getContent("oxdeliveryinfo", null);
        // line 160
        echo "                        <div class=\"container";
        if ((($context["footerWidth"] ?? null) == "w100cContainer")) {
            echo "-xxl";
        } else {
            echo "-fluid";
        }
        echo "\">
                            <div class=\"text-end\">
                                ";
        // line 162
        if (twig_get_attribute($this->env, $this->source, ($context["oView"] ?? null), "isVatIncluded", [], "method", false, false, false, 162)) {
            // line 163
            echo "                                    <span class=\"vat-info-text\">
                                        * ";
            // line 164
            echo $this->extensions['OxidEsales\Twig\Extensions\TranslateExtension']->translate(["ident" => "PLUS_SHIPPING"]);
            echo "
                                        <a href=\"";
            // line 165
            echo twig_get_attribute($this->env, $this->source, ($context["oCont"] ?? null), "getLink", [], "method", false, false, false, 165);
            echo "\">";
            echo $this->extensions['OxidEsales\Twig\Extensions\TranslateExtension']->translate(["ident" => "PLUS_SHIPPING2"]);
            echo "</a>
                                    </span>
                                ";
        } else {
            // line 168
            echo "                                    <span class=\"vat-info-text\">
                                        * ";
            // line 169
            echo $this->extensions['OxidEsales\Twig\Extensions\TranslateExtension']->translate(["ident" => "PLUS"]);
            echo "
                                        <a href=\"";
            // line 170
            echo twig_get_attribute($this->env, $this->source, ($context["oCont"] ?? null), "getLink", [], "method", false, false, false, 170);
            echo "\">";
            echo $this->extensions['OxidEsales\Twig\Extensions\TranslateExtension']->translate(["ident" => "PLUS_SHIPPING2"]);
            echo "</a>
                                    </span>
                                ";
        }
        // line 173
        echo "                            </div>
                        </div>
                    ";
        unset($context["oCont"]);
        // line 176
        echo "                ";
    }

    // line 180
    public function block_dd_footer_copyright($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 181
        echo "            ";
        $context["oCont"] = $this->extensions['OxidEsales\Twig\Extensions\IfContentExtension']->getContent("oxstdfooter", null);
        // line 182
        echo "            <div class=\"legal pt-4\">
                <div class=\"container-xxl\">
                    <div class=\"row\">
                        <section class=\"col-12\">
                            ";
        // line 186
        echo twig_include($this->env, $context, twig_template_from_string($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["oCont"] ?? null), "oxcontents__oxcontent", [], "any", false, false, false, 186), "value", [], "any", false, false, false, 186)));
        echo "
                        </section>
                    </div>
                </div>
            </div>
            ";
        unset($context["oCont"]);
        // line 192
        echo "        ";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@__main__/layout/footer.html.twig";
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
        return array (  597 => 192,  588 => 186,  582 => 182,  579 => 181,  575 => 180,  571 => 176,  566 => 173,  558 => 170,  554 => 169,  551 => 168,  543 => 165,  539 => 164,  536 => 163,  534 => 162,  524 => 160,  521 => 159,  517 => 158,  513 => 177,  510 => 158,  506 => 157,  502 => 145,  498 => 144,  494 => 133,  484 => 126,  480 => 124,  477 => 123,  467 => 116,  463 => 114,  460 => 113,  450 => 106,  446 => 104,  443 => 103,  433 => 96,  429 => 94,  426 => 93,  416 => 86,  412 => 84,  409 => 83,  405 => 82,  401 => 134,  398 => 82,  394 => 81,  390 => 137,  386 => 135,  384 => 81,  380 => 80,  377 => 79,  374 => 78,  370 => 77,  366 => 70,  362 => 69,  356 => 61,  352 => 58,  350 => 57,  345 => 56,  341 => 55,  334 => 43,  332 => 42,  328 => 41,  321 => 39,  319 => 38,  315 => 37,  308 => 33,  304 => 32,  297 => 45,  294 => 41,  292 => 37,  288 => 35,  286 => 32,  281 => 30,  278 => 29,  274 => 28,  267 => 23,  263 => 22,  257 => 25,  255 => 22,  250 => 20,  247 => 19,  243 => 18,  238 => 152,  233 => 149,  227 => 147,  224 => 146,  222 => 144,  218 => 143,  214 => 141,  212 => 140,  209 => 139,  207 => 138,  204 => 77,  202 => 76,  198 => 74,  192 => 72,  189 => 71,  187 => 69,  183 => 68,  180 => 67,  178 => 66,  174 => 64,  170 => 62,  168 => 61,  164 => 59,  162 => 55,  157 => 53,  153 => 51,  151 => 50,  148 => 49,  145 => 28,  143 => 18,  139 => 16,  135 => 15,  129 => 195,  127 => 194,  124 => 193,  122 => 180,  119 => 179,  116 => 178,  113 => 157,  111 => 156,  107 => 154,  105 => 15,  101 => 13,  97 => 11,  94 => 10,  91 => 9,  88 => 8,  85 => 7,  83 => 6,  78 => 4,  75 => 3,  72 => 2,  68 => 1,  62 => 200,  60 => 199,  57 => 198,  55 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@__main__/layout/footer.html.twig", "/var/www/html/source/Application/views/apex/tpl/layout/footer.html.twig");
    }
}
