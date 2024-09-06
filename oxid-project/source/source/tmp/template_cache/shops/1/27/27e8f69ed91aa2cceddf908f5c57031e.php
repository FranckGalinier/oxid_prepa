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

/* @__main__/widget/dynscript.html.twig */
class __TwigTemplate_fe22ffb77db2e3d805ade188662b130a extends Template
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
        echo $this->extensions['OxidEsales\Twig\Extensions\ScriptExtension']->script($context, ["dynamic" => ($context["__oxid_include_dynamic"] ?? null)]);
        echo "

<script>";
        // line 3
        ob_start(function () { return ''; });
        // line 4
        echo "    var sBaseUrl = '";
        echo twig_get_attribute($this->env, $this->source, ($context["oViewConf"] ?? null), "getSelfActionLink", [], "method", false, false, false, 4);
        echo "';
    var sActCl = '";
        // line 5
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["oViewConf"] ?? null), "getTopActiveClassName", [], "method", false, false, false, 5), "html", null, true);
        echo "';
";
        $___internal_parse_1_ = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 3
        echo twig_spaceless($___internal_parse_1_);
        // line 6
        echo "</script>

";
        // line 9
        $context["sGATrackingId"] = twig_get_attribute($this->env, $this->source, ($context["oViewConf"] ?? null), "getViewThemeParam", ["sGATrackingId"], "method", false, false, false, 9);
        // line 10
        if ((twig_get_attribute($this->env, $this->source, ($context["oViewConf"] ?? null), "getViewThemeParam", ["blUseGAPageTracker"], "method", false, false, false, 10) && ($context["sGATrackingId"] ?? null))) {
            // line 11
            echo "    <script>
        (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
            (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
                m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
        })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

        ga('create', '";
            // line 17
            echo twig_escape_filter($this->env, ($context["sGATrackingId"] ?? null), "html", null, true);
            echo "');
        ";
            // line 19
            echo "        ";
            if (twig_get_attribute($this->env, $this->source, ($context["oViewConf"] ?? null), "getViewThemeParam", ["blGAAnonymizeIPs"], "method", false, false, false, 19)) {
                // line 20
                echo "            ga('set', 'anonymizeIp', true);
        ";
            }
            // line 22
            echo "        ga('send', 'pageview');
    </script>
";
        }
        // line 25
        echo "
";
        // line 27
        if (((twig_get_attribute($this->env, $this->source, ($context["oViewConf"] ?? null), "getViewThemeParam", ["blUseGAEcommerceTracking"], "method", false, false, false, 27) && ($context["sGATrackingId"] ?? null)) && (twig_get_attribute($this->env, $this->source, ($context["oViewConf"] ?? null), "getTopActiveClassName", [], "method", false, false, false, 27) == "thankyou"))) {
            // line 28
            echo "    ";
            $context["oOrder"] = twig_get_attribute($this->env, $this->source, ($context["oView"] ?? null), "getOrder", [], "method", false, false, false, 28);
            // line 29
            echo "
    ";
            // line 30
            if (($context["oOrder"] ?? null)) {
                // line 31
                echo "        ";
                if ( !twig_get_attribute($this->env, $this->source, ($context["oViewConf"] ?? null), "getViewThemeParam", ["blUseGAPageTracker"], "method", false, false, false, 31)) {
                    // line 32
                    echo "            <script>
                (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
                    (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
                        m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
                })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

                ga('create', '";
                    // line 38
                    echo twig_escape_filter($this->env, ($context["sGATrackingId"] ?? null), "html", null, true);
                    echo "');
                ";
                    // line 40
                    echo "                ";
                    if (twig_get_attribute($this->env, $this->source, ($context["oViewConf"] ?? null), "getViewThemeParam", ["blGAAnonymizeIPs"], "method", false, false, false, 40)) {
                        // line 41
                        echo "                    ga('set', 'anonymizeIp', true);
                ";
                    }
                    // line 43
                    echo "            </script>
        ";
                }
                // line 45
                echo "

        <script>
            ga( 'require', 'ecommerce' );

            ga( 'ecommerce:addTransaction', {
                'id': '";
                // line 51
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["oOrder"] ?? null), "oxorder__oxordernr", [], "any", false, false, false, 51), "value", [], "any", false, false, false, 51), "html", null, true);
                echo "',           // Transaction ID. Required.
                'affiliation': '";
                // line 52
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["oxcmp_shop"] ?? null), "oxshops__oxname", [], "any", false, false, false, 52), "value", [], "any", false, false, false, 52), "html", null, true);
                echo "', // Affiliation or store name.
                'revenue': '";
                // line 53
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["oOrder"] ?? null), "oxorder__oxtotalordersum", [], "any", false, false, false, 53), "value", [], "any", false, false, false, 53), "html", null, true);
                echo "', // Grand Total.
                'shipping': '";
                // line 54
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["oOrder"] ?? null), "oxorder__oxdelcost", [], "any", false, false, false, 54), "value", [], "any", false, false, false, 54), "html", null, true);
                echo "',     // Shipping.
                'tax': '";
                // line 55
                echo twig_escape_filter($this->env, (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["oOrder"] ?? null), "oxorder__oxartvatprice1", [], "any", false, false, false, 55), "value", [], "any", false, false, false, 55) + twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["oOrder"] ?? null), "oxorder__oxartvatprice2", [], "any", false, false, false, 55), "value", [], "any", false, false, false, 55)), "html", null, true);
                echo "' // Tax.
            });

            ";
                // line 58
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["oOrder"] ?? null), "getOrderArticles", [], "method", false, false, false, 58));
                foreach ($context['_seq'] as $context["_key"] => $context["oOrderArticle"]) {
                    // line 59
                    echo "                ";
                    $context["sArticleName"] = ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["oOrderArticle"], "oxorderarticles__oxtitle", [], "any", false, false, false, 59), "value", [], "any", false, false, false, 59) . " ") . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["oOrderArticle"], "oxorderarticles__oxselvariant", [], "any", false, false, false, 59), "value", [], "any", false, false, false, 59));
                    // line 60
                    echo "                ";
                    $context["sCategoryName"] = "";
                    // line 61
                    echo "                ";
                    $context["oOrderArticlePrice"] = twig_get_attribute($this->env, $this->source, $context["oOrderArticle"], "getPrice", [], "method", false, false, false, 61);
                    // line 62
                    echo "                ";
                    $context["oArticle"] = twig_get_attribute($this->env, $this->source, $context["oOrderArticle"], "getArticle", [], "method", false, false, false, 62);
                    // line 63
                    echo "                ";
                    if (($context["oArticle"] ?? null)) {
                        // line 64
                        echo "                    ";
                        $context["oMainCategory"] = twig_get_attribute($this->env, $this->source, ($context["oArticle"] ?? null), "getCategory", [], "method", false, false, false, 64);
                        // line 65
                        echo "                    ";
                        if (($context["oMainCategory"] ?? null)) {
                            // line 66
                            echo "                        ";
                            $context["sCategoryName"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["oMainCategory"] ?? null), "oxcategories__oxtitle", [], "any", false, false, false, 66), "value", [], "any", false, false, false, 66);
                            // line 67
                            echo "                    ";
                        }
                        // line 68
                        echo "                ";
                    }
                    // line 69
                    echo "                ga( 'ecommerce:addItem', {
                    'id': '";
                    // line 70
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["oOrder"] ?? null), "oxorder__oxordernr", [], "any", false, false, false, 70), "value", [], "any", false, false, false, 70), "html", null, true);
                    echo "',                     // Transaction ID. Required.
                    'name': '";
                    // line 71
                    echo twig_escape_filter($this->env, twig_trim_filter(($context["sArticleName"] ?? null)), "html", null, true);
                    echo "',                                   // Product name. Required.
                    'sku': '";
                    // line 72
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["oOrderArticle"], "oxorderarticles__oxartnum", [], "any", false, false, false, 72), "value", [], "any", false, false, false, 72), "html", null, true);
                    echo "',      // SKU/code.
                    'category': '";
                    // line 73
                    echo twig_escape_filter($this->env, ($context["sCategoryName"] ?? null), "html", null, true);
                    echo "',                                   // Category or variation.
                    'price': '";
                    // line 74
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["oOrderArticlePrice"] ?? null), "getBruttoPrice", [], "method", false, false, false, 74), "html", null, true);
                    echo "',               // Unit price.
                    'quantity': '";
                    // line 75
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["oOrderArticle"], "oxorderarticles__oxamount", [], "any", false, false, false, 75), "value", [], "any", false, false, false, 75), "html", null, true);
                    echo "', // Quantity.
                    'currency': '";
                    // line 76
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["oOrder"] ?? null), "oxorder__oxcurrency", [], "any", false, false, false, 76), "value", [], "any", false, false, false, 76), "html", null, true);
                    echo "'               // local currency code.
                });
            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['oOrderArticle'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 79
                echo "
            ga('ecommerce:send' );
        </script>
    ";
            }
        }
        // line 84
        echo "
";
        // line 86
        if (twig_get_attribute($this->env, $this->source, ($context["oViewConf"] ?? null), "getViewThemeParam", ["blUseGoogleTS"], "method", false, false, false, 86)) {
            // line 87
            echo "    ";
            $context["sGoogleVendorId"] = twig_get_attribute($this->env, $this->source, ($context["oViewConf"] ?? null), "getViewThemeParam", ["sGoogleVendorId"], "method", false, false, false, 87);
            // line 88
            echo "    ";
            $context["sGoogleShoppingAccountId"] = twig_get_attribute($this->env, $this->source, ($context["oViewConf"] ?? null), "getViewThemeParam", ["sGoogleShoppingAccountId"], "method", false, false, false, 88);
            // line 89
            echo "    ";
            $context["sPageLanguage"] = twig_get_attribute($this->env, $this->source, ($context["oViewConf"] ?? null), "getViewThemeParam", ["sPageLanguage"], "method", false, false, false, 89);
            // line 90
            echo "    ";
            $context["sShoppingCountry"] = twig_get_attribute($this->env, $this->source, ($context["oViewConf"] ?? null), "getViewThemeParam", ["sShoppingCountry"], "method", false, false, false, 90);
            // line 91
            echo "    ";
            $context["sShoppingLanguage"] = twig_get_attribute($this->env, $this->source, ($context["oViewConf"] ?? null), "getViewThemeParam", ["sShoppingLanguage"], "method", false, false, false, 91);
            // line 92
            echo "
    ";
            // line 93
            if ((twig_get_attribute($this->env, $this->source, ($context["oViewConf"] ?? null), "getTopActiveClassName", [], "method", false, false, false, 93) == "details")) {
                // line 94
                echo "        ";
                $context["oArticle"] = twig_get_attribute($this->env, $this->source, ($context["oView"] ?? null), "getProduct", [], "method", false, false, false, 94);
                // line 95
                echo "        ";
                $context["sGoogleShoppingProductId"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["oArticle"] ?? null), "oxarticles__oxartnum", [], "any", false, false, false, 95), "value", [], "any", false, false, false, 95);
                // line 96
                echo "    ";
            }
            // line 97
            echo "
    ";
            // line 98
            if ((($context["sGoogleVendorId"] ?? null) && ($context["sPageLanguage"] ?? null))) {
                // line 99
                echo "        ";
                // line 100
                echo "        <script>
            var gts = gts || [];

            gts.push([\"id\", \"";
                // line 103
                echo twig_escape_filter($this->env, ($context["sGoogleVendorId"] ?? null), "html", null, true);
                echo "\"]);
            gts.push([\"badge_position\",\"BOTTOM_RIGHT\"]);
            gts.push([\"locale\", \"";
                // line 105
                echo twig_escape_filter($this->env, ((array_key_exists("sPageLanguage", $context)) ? (_twig_default_filter(($context["sPageLanguage"] ?? null), "de_DE")) : ("de_DE")), "html", null, true);
                echo "\"]);
            ";
                // line 106
                if (($context["sGoogleShoppingAccountId"] ?? null)) {
                    // line 107
                    echo "                gts.push([\"google_base_subaccount_id\", \"";
                    echo twig_escape_filter($this->env, ($context["sGoogleShoppingAccountId"] ?? null), "html", null, true);
                    echo "\"]);
                gts.push([\"google_base_offer_id\", \"";
                    // line 108
                    echo twig_escape_filter($this->env, ($context["sGoogleShoppingProductId"] ?? null), "html", null, true);
                    echo "\"]);
                ";
                    // line 109
                    if (($context["sShoppingCountry"] ?? null)) {
                        // line 110
                        echo "                    gts.push([\"google_base_country\", \"";
                        echo twig_escape_filter($this->env, ((array_key_exists("sShoppingCountry", $context)) ? (_twig_default_filter(($context["sShoppingCountry"] ?? null), "DE")) : ("DE")), "html", null, true);
                        echo "\"]);
                ";
                    }
                    // line 112
                    echo "                ";
                    if (($context["sShoppingLanguage"] ?? null)) {
                        // line 113
                        echo "                    gts.push([\"google_base_language\", \"";
                        echo twig_escape_filter($this->env, ((array_key_exists("sShoppingLanguage", $context)) ? (_twig_default_filter(($context["sShoppingLanguage"] ?? null), "de")) : ("de")), "html", null, true);
                        echo "\"]);
                ";
                    }
                    // line 115
                    echo "            ";
                }
                // line 116
                echo "
            (function() {
                var gts = document.createElement(\"script\");
                gts.type = \"\";
                gts.async = true;
                gts.src = \"https://www.googlecommerce.com/trustedstores/api/js\";
                var s = document.getElementsByTagName(\"script\")[0];
                s.parentNode.insertBefore(gts, s);
            })();
        </script>

        ";
                // line 128
                echo "        ";
                if ((twig_get_attribute($this->env, $this->source, ($context["oViewConf"] ?? null), "getTopActiveClassName", [], "method", false, false, false, 128) == "thankyou")) {
                    // line 129
                    echo "            ";
                    $context["sShippingDaysOnStock"] = twig_get_attribute($this->env, $this->source, ($context["oViewConf"] ?? null), "getViewThemeParam", ["sShippingDaysOnStock"], "method", false, false, false, 129);
                    // line 130
                    echo "            ";
                    $context["sShippingDaysNotOnStock"] = twig_get_attribute($this->env, $this->source, ($context["oViewConf"] ?? null), "getViewThemeParam", ["sShippingDaysNotOnStock"], "method", false, false, false, 130);
                    // line 131
                    echo "            ";
                    $context["sDeliveryDaysOnStock"] = twig_get_attribute($this->env, $this->source, ($context["oViewConf"] ?? null), "getViewThemeParam", ["sDeliveryDaysOnStock"], "method", false, false, false, 131);
                    // line 132
                    echo "            ";
                    $context["sDeliveryDaysNotOnStock"] = twig_get_attribute($this->env, $this->source, ($context["oViewConf"] ?? null), "getViewThemeParam", ["sDeliveryDaysNotOnStock"], "method", false, false, false, 132);
                    // line 133
                    echo "
            ";
                    // line 134
                    if ((((($context["sShippingDaysOnStock"] ?? null) && ($context["sShippingDaysNotOnStock"] ?? null)) && ($context["sDeliveryDaysOnStock"] ?? null)) && ($context["sDeliveryDaysNotOnStock"] ?? null))) {
                        // line 135
                        echo "                ";
                        if ( !($context["oOrder"] ?? null)) {
                            // line 136
                            echo "                    ";
                            $context["oOrder"] = twig_get_attribute($this->env, $this->source, ($context["oView"] ?? null), "getOrder", [], "method", false, false, false, 136);
                            // line 137
                            echo "                ";
                        }
                        // line 138
                        echo "
                ";
                        // line 139
                        $context["aShopDomain"] = parse_url(($context["shopURLParam"] ?? null));
                        // line 140
                        echo "                ";
                        $context["blHasPreOrder"] = false;
                        // line 141
                        echo "                ";
                        $context["oBasket"] = twig_get_attribute($this->env, $this->source, ($context["oView"] ?? null), "getBasket", [], "method", false, false, false, 141);
                        // line 142
                        echo "                ";
                        $context["oCountry"] = oxNew("oxCountry");
                        // line 143
                        echo "                ";
                        if (twig_get_attribute($this->env, $this->source, ($context["oCountry"] ?? null), "load", [twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["oOrder"] ?? null), "oxorder__oxbillcountryid", [], "any", false, false, false, 143), "value", [], "any", false, false, false, 143)], "method", false, false, false, 143)) {
                            // line 144
                            echo "                    ";
                            $context["sCustomerCountry"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["oCountry"] ?? null), "oxcountry__oxisoalpha2", [], "any", false, false, false, 144), "value", [], "any", false, false, false, 144);
                            // line 145
                            echo "                ";
                        }
                        // line 146
                        echo "
                <div id=\"gts-order\" style=\"display:none;\" translate=\"no\">
                    ";
                        // line 148
                        ob_start();
                        // line 149
                        echo "                        ";
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["oOrder"] ?? null), "getOrderArticles", [], "method", false, false, false, 149));
                        foreach ($context['_seq'] as $context["_key"] => $context["oOrderArticle"]) {
                            // line 150
                            echo "                            ";
                            $context["oArticle"] = twig_get_attribute($this->env, $this->source, $context["oOrderArticle"], "getArticle", [], "method", false, false, false, 150);
                            // line 151
                            echo "                            ";
                            $context["oOrderArticlePrice"] = twig_get_attribute($this->env, $this->source, $context["oOrderArticle"], "getPrice", [], "method", false, false, false, 151);
                            // line 152
                            echo "                            ";
                            $context["sArticleName"] = ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["oOrderArticle"], "oxorderarticles__oxtitle", [], "any", false, false, false, 152), "value", [], "any", false, false, false, 152) . " ") . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["oOrderArticle"], "oxorderarticles__oxselvariant", [], "any", false, false, false, 152), "value", [], "any", false, false, false, 152));
                            // line 153
                            echo "                            ";
                            if (( !($context["blHasPreOrder"] ?? null) && (twig_get_attribute($this->env, $this->source, ($context["oArticle"] ?? null), "getStockStatus", [], "method", false, false, false, 153) ==  -1))) {
                                // line 154
                                echo "                                ";
                                $context["blHasPreOrder"] = true;
                                // line 155
                                echo "                            ";
                            }
                            // line 156
                            echo "
                            <span class=\"gts-item\">
                                <span class=\"gts-i-name\">";
                            // line 158
                            echo twig_escape_filter($this->env, twig_trim_filter(($context["sArticleName"] ?? null)), "html", null, true);
                            echo "</span>
                                <span class=\"gts-i-price\">";
                            // line 159
                            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["oOrderArticlePrice"] ?? null), "getBruttoPrice", [], "method", false, false, false, 159), "html", null, true);
                            echo "</span>
                                <span class=\"gts-i-quantity\">";
                            // line 160
                            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["oOrderArticle"], "oxorderarticles__oxamount", [], "any", false, false, false, 160), "value", [], "any", false, false, false, 160), "html", null, true);
                            echo "</span>
                                <span class=\"gts-i-prodsearch-id\">";
                            // line 161
                            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["oOrderArticle"], "oxorderarticles__oxartnum", [], "any", false, false, false, 161), "value", [], "any", false, false, false, 161), "html", null, true);
                            echo "</span>
                                ";
                            // line 162
                            if (($context["sGoogleShoppingAccountId"] ?? null)) {
                                // line 163
                                echo "                                    <span class=\"gts-i-prodsearch-store-id\">";
                                echo twig_escape_filter($this->env, ($context["sGoogleShoppingAccountId"] ?? null), "html", null, true);
                                echo "</span>
                                    ";
                                // line 164
                                if (($context["sShoppingCountry"] ?? null)) {
                                    // line 165
                                    echo "                                        <span class=\"gts-i-prodsearch-country\">";
                                    echo twig_escape_filter($this->env, ((array_key_exists("sShoppingCountry", $context)) ? (_twig_default_filter(($context["sShoppingCountry"] ?? null), "DE")) : ("DE")), "html", null, true);
                                    echo "</span>
                                    ";
                                }
                                // line 167
                                echo "                                    ";
                                if (($context["sShoppingLanguage"] ?? null)) {
                                    // line 168
                                    echo "                                        <span class=\"gts-i-prodsearch-language\">";
                                    echo twig_escape_filter($this->env, ((array_key_exists("sShoppingLanguage", $context)) ? (_twig_default_filter(($context["sShoppingLanguage"] ?? null), "de")) : ("de")), "html", null, true);
                                    echo "</span>
                                    ";
                                }
                                // line 170
                                echo "                                ";
                            }
                            // line 171
                            echo "                            </span>
                        ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['oOrderArticle'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 173
                        echo "                    ";
                        $captureContent = ob_get_clean();
                        $context['twig']['capture']['sGtsItems'] = $captureContent;
                        unset($captureContent);
                        // line 174
                        echo "
                    ";
                        // line 175
                        if (($context["blHasPreOrder"] ?? null)) {
                            // line 176
                            echo "                        ";
                            $context["sShipDate"] = strtotime((($context["sShippingDaysNotOnStock"] ?? null) . "weekdays"));
                            // line 177
                            echo "                    ";
                        } else {
                            // line 178
                            echo "                        ";
                            $context["sShipDate"] = strtotime((($context["sShippingDaysOnStock"] ?? null) . "weekdays"));
                            // line 179
                            echo "                    ";
                        }
                        // line 180
                        echo "
                    ";
                        // line 182
                        echo "                    ";
                        if (($context["blHasPreOrder"] ?? null)) {
                            // line 183
                            echo "                        ";
                            $context["sDeliveryDate"] = strtotime((($context["sDeliveryDaysNotOnStock"] ?? null) . "weekdays"));
                            // line 184
                            echo "                    ";
                        } else {
                            // line 185
                            echo "                        ";
                            $context["sDeliveryDate"] = strtotime((($context["sDeliveryDaysOnStock"] ?? null) . "weekdays"));
                            // line 186
                            echo "                    ";
                        }
                        // line 187
                        echo "
                    <span id=\"gts-o-id\">";
                        // line 188
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["oOrder"] ?? null), "oxorder__oxordernr", [], "any", false, false, false, 188), "value", [], "any", false, false, false, 188), "html", null, true);
                        echo "</span>
                    <span id=\"gts-o-domain\">";
                        // line 189
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["aShopDomain"] ?? null), "host", [], "any", false, false, false, 189), "html", null, true);
                        echo "</span>
                    <span id=\"gts-o-email\">";
                        // line 190
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["oOrder"] ?? null), "oxorder__oxbillemail", [], "any", false, false, false, 190), "value", [], "any", false, false, false, 190), "html", null, true);
                        echo "</span>
                    <span id=\"gts-o-country\">";
                        // line 191
                        echo twig_escape_filter($this->env, ($context["sCustomerCountry"] ?? null), "html", null, true);
                        echo "</span>
                    <span id=\"gts-o-currency\">";
                        // line 192
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["oOrder"] ?? null), "oxorder__oxcurrency", [], "any", false, false, false, 192), "value", [], "any", false, false, false, 192), "html", null, true);
                        echo "</span>
                    <span id=\"gts-o-total\">";
                        // line 193
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["oOrder"] ?? null), "oxorder__oxtotalordersum", [], "any", false, false, false, 193), "value", [], "any", false, false, false, 193), "html", null, true);
                        echo "</span>
                    <span id=\"gts-o-discounts\">";
                        // line 194
                        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["oOrder"] ?? null), "oxorder__oxdiscount", [], "any", false, false, false, 194), "value", [], "any", false, false, false, 194) > 0)) {
                            echo "-";
                        }
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["oOrder"] ?? null), "oxorder__oxdiscount", [], "any", false, false, false, 194), "value", [], "any", false, false, false, 194), "html", null, true);
                        echo "</span>
                    <span id=\"gts-o-shipping-total\">";
                        // line 195
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["oOrder"] ?? null), "oxorder__oxdelcost", [], "any", false, false, false, 195), "value", [], "any", false, false, false, 195), "html", null, true);
                        echo "</span>
                    <span id=\"gts-o-tax-total\">";
                        // line 196
                        echo twig_escape_filter($this->env, (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["oOrder"] ?? null), "oxorder__oxartvatprice1", [], "any", false, false, false, 196), "value", [], "any", false, false, false, 196) + twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["oOrder"] ?? null), "oxorder__oxartvatprice2", [], "any", false, false, false, 196), "value", [], "any", false, false, false, 196)), "html", null, true);
                        echo "</span>
                    <span id=\"gts-o-est-ship-date\">";
                        // line 197
                        echo twig_escape_filter($this->env, $this->extensions['OxidEsales\Twig\Extensions\Filters\DateFormatExtension']->dateFormat(($context["sShipDate"] ?? null), "%Y-%m-%d"), "html", null, true);
                        echo "</span>
                    <span id=\"gts-o-est-delivery-date\">";
                        // line 198
                        echo twig_escape_filter($this->env, $this->extensions['OxidEsales\Twig\Extensions\Filters\DateFormatExtension']->dateFormat(($context["sDeliveryDate"] ?? null), "%Y-%m-%d"), "html", null, true);
                        echo "</span>
                    <span id=\"gts-o-has-preorder\">";
                        // line 199
                        if (($context["blHasPreOrder"] ?? null)) {
                            echo "Y";
                        } else {
                            echo "N";
                        }
                        echo "</span>
                    <span id=\"gts-o-has-digital\">";
                        // line 200
                        if (twig_get_attribute($this->env, $this->source, ($context["oBasket"] ?? null), "hasDownloadableProducts", [], "method", false, false, false, 200)) {
                            echo "Y";
                        } else {
                            echo "N";
                        }
                        echo "</span>

                    ";
                        // line 202
                        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["twig"] ?? null), "capture", [], "any", false, false, false, 202), "sGtsItems", [], "any", false, false, false, 202)) {
                            // line 203
                            echo "                        ";
                            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["twig"] ?? null), "capture", [], "any", false, false, false, 203), "sGtsItems", [], "any", false, false, false, 203), "html", null, true);
                            echo "
                    ";
                        }
                        // line 205
                        echo "                </div>
            ";
                    }
                    // line 207
                    echo "        ";
                }
                // line 208
                echo "    ";
            }
        }
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@__main__/widget/dynscript.html.twig";
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
        return array (  590 => 208,  587 => 207,  583 => 205,  577 => 203,  575 => 202,  566 => 200,  558 => 199,  554 => 198,  550 => 197,  546 => 196,  542 => 195,  535 => 194,  531 => 193,  527 => 192,  523 => 191,  519 => 190,  515 => 189,  511 => 188,  508 => 187,  505 => 186,  502 => 185,  499 => 184,  496 => 183,  493 => 182,  490 => 180,  487 => 179,  484 => 178,  481 => 177,  478 => 176,  476 => 175,  473 => 174,  468 => 173,  461 => 171,  458 => 170,  452 => 168,  449 => 167,  443 => 165,  441 => 164,  436 => 163,  434 => 162,  430 => 161,  426 => 160,  422 => 159,  418 => 158,  414 => 156,  411 => 155,  408 => 154,  405 => 153,  402 => 152,  399 => 151,  396 => 150,  391 => 149,  389 => 148,  385 => 146,  382 => 145,  379 => 144,  376 => 143,  373 => 142,  370 => 141,  367 => 140,  365 => 139,  362 => 138,  359 => 137,  356 => 136,  353 => 135,  351 => 134,  348 => 133,  345 => 132,  342 => 131,  339 => 130,  336 => 129,  333 => 128,  320 => 116,  317 => 115,  311 => 113,  308 => 112,  302 => 110,  300 => 109,  296 => 108,  291 => 107,  289 => 106,  285 => 105,  280 => 103,  275 => 100,  273 => 99,  271 => 98,  268 => 97,  265 => 96,  262 => 95,  259 => 94,  257 => 93,  254 => 92,  251 => 91,  248 => 90,  245 => 89,  242 => 88,  239 => 87,  237 => 86,  234 => 84,  227 => 79,  218 => 76,  214 => 75,  210 => 74,  206 => 73,  202 => 72,  198 => 71,  194 => 70,  191 => 69,  188 => 68,  185 => 67,  182 => 66,  179 => 65,  176 => 64,  173 => 63,  170 => 62,  167 => 61,  164 => 60,  161 => 59,  157 => 58,  151 => 55,  147 => 54,  143 => 53,  139 => 52,  135 => 51,  127 => 45,  123 => 43,  119 => 41,  116 => 40,  112 => 38,  104 => 32,  101 => 31,  99 => 30,  96 => 29,  93 => 28,  91 => 27,  88 => 25,  83 => 22,  79 => 20,  76 => 19,  72 => 17,  64 => 11,  62 => 10,  60 => 9,  56 => 6,  54 => 3,  49 => 5,  44 => 4,  42 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@__main__/widget/dynscript.html.twig", "/var/www/html/source/Application/views/apex/tpl/widget/dynscript.html.twig");
    }
}
