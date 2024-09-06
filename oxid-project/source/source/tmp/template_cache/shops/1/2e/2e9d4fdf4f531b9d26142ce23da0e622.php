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

/* @__main__/widget/product/listitem_grid.html.twig */
class __TwigTemplate_bf354d462d086ee4de37db0cbeeac3d1 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'widget_product_listitem_grid' => [$this, 'block_widget_product_listitem_grid'],
            'widget_product_listitem_grid_gridpicture' => [$this, 'block_widget_product_listitem_grid_gridpicture'],
            'widget_product_listitem_grid_tobasket' => [$this, 'block_widget_product_listitem_grid_tobasket'],
            'widget_product_listitem_grid_addtowishlist' => [$this, 'block_widget_product_listitem_grid_addtowishlist'],
            'widget_product_listitem_infogrid_titlebox' => [$this, 'block_widget_product_listitem_infogrid_titlebox'],
            'widget_product_listitem_grid_price' => [$this, 'block_widget_product_listitem_grid_price'],
            'widget_product_listitem_grid_price_value' => [$this, 'block_widget_product_listitem_grid_price_value'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        $this->displayBlock('widget_product_listitem_grid', $context, $blocks);
    }

    public function block_widget_product_listitem_grid($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 2
        echo "    ";
        $context["product"] = twig_get_attribute($this->env, $this->source, ($context["oView"] ?? null), "getProduct", [], "method", false, false, false, 2);
        // line 3
        echo "    ";
        $context["blDisableToCart"] = twig_get_attribute($this->env, $this->source, ($context["oView"] ?? null), "getDisableToCart", [], "method", false, false, false, 3);
        // line 4
        echo "    ";
        $context["iIndex"] = twig_get_attribute($this->env, $this->source, ($context["oView"] ?? null), "getIndex", [], "method", false, false, false, 4);
        // line 5
        echo "    ";
        $context["showMainLink"] = twig_get_attribute($this->env, $this->source, ($context["oView"] ?? null), "getShowMainLink", [], "method", false, false, false, 5);
        // line 6
        echo "    ";
        $context["currency"] = twig_get_attribute($this->env, $this->source, ($context["oView"] ?? null), "getActCurrency", [], "method", false, false, false, 6);
        // line 7
        echo "    ";
        $context["oUnitPrice"] = twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "getUnitPrice", [], "method", false, false, false, 7);
        // line 8
        echo "    ";
        $context["tprice"] = twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "getTPrice", [], "method", false, false, false, 8);
        // line 9
        echo "    ";
        $context["price"] = twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "getPrice", [], "method", false, false, false, 9);
        // line 10
        echo "    ";
        if (($context["showMainLink"] ?? null)) {
            // line 11
            echo "        ";
            $context["_productLink"] = twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "getMainLink", [], "method", false, false, false, 11);
            // line 12
            echo "    ";
        } else {
            // line 13
            echo "        ";
            $context["_productLink"] = twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "getLink", [], "method", false, false, false, 13);
            // line 14
            echo "    ";
        }
        // line 15
        echo "    ";
        $context["aVariantSelections"] = twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "getVariantSelections", ["null", "null", 1], "method", false, false, false, 15);
        // line 16
        echo "    ";
        $context["blShowToBasket"] = true;
        echo " ";
        // line 17
        echo "    ";
        if ((((((($context["blDisableToCart"] ?? null) || twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "isNotBuyable", [], "method", false, false, false, 17)) || (($context["aVariantSelections"] ?? null) && twig_get_attribute($this->env, $this->source, ($context["aVariantSelections"] ?? null), "selections", [], "any", false, false, false, 17))) || twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "hasMdVariants", [], "method", false, false, false, 17)) || (twig_get_attribute($this->env, $this->source, ($context["oViewConf"] ?? null), "showSelectListsInList", [], "method", false, false, false, 17) && twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "getSelections", [1], "method", false, false, false, 17))) || twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "getVariants", [], "method", false, false, false, 17))) {
            // line 18
            echo "        ";
            $context["blShowToBasket"] = false;
            // line 19
            echo "    ";
        }
        // line 20
        echo "
    ";
        // line 21
        if ((($context["testid"] ?? null) == null)) {
            // line 22
            echo "        ";
            $context["testid"] = twig_get_attribute($this->env, $this->source, ($context["oView"] ?? null), "getViewParameter", ["testid"], "method", false, false, false, 22);
            // line 23
            echo "    ";
        }
        // line 24
        echo "
    <div class=\"card product-card\">
        ";
        // line 26
        $this->displayBlock('widget_product_listitem_grid_gridpicture', $context, $blocks);
        // line 117
        echo "
        <div class=\"card-body";
        // line 118
        if ((($context["tprice"] ?? null) && (twig_get_attribute($this->env, $this->source, ($context["tprice"] ?? null), "getBruttoPrice", [], "method", false, false, false, 118) > twig_get_attribute($this->env, $this->source, ($context["price"] ?? null), "getBruttoPrice", [], "method", false, false, false, 118)))) {
            echo " sale";
        }
        echo "\">
            <div class=\"d-flex justify-content-between\">
                ";
        // line 120
        $this->displayBlock('widget_product_listitem_infogrid_titlebox', $context, $blocks);
        // line 125
        echo "                <div class=\"d-flex flex-column price";
        if ((($context["tprice"] ?? null) && (twig_get_attribute($this->env, $this->source, ($context["tprice"] ?? null), "getBruttoPrice", [], "method", false, false, false, 125) > twig_get_attribute($this->env, $this->source, ($context["price"] ?? null), "getBruttoPrice", [], "method", false, false, false, 125)))) {
            echo " sale";
        }
        echo "\">
                    ";
        // line 126
        $this->displayBlock('widget_product_listitem_grid_price', $context, $blocks);
        // line 163
        echo "                </div>
            </div>
            ";
        // line 165
        if ((($context["oUnitPrice"] ?? null) || (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "oxarticles__oxweight", [], "any", false, false, false, 165), "value", [], "any", false, false, false, 165) && twig_get_attribute($this->env, $this->source, ($context["config"] ?? null), "getConfigParam", ["blShowWeightInList"], "method", false, false, false, 165)))) {
            // line 166
            echo "                <div class=\"qty_weight\">
                    ";
            // line 167
            if (($context["oUnitPrice"] ?? null)) {
                // line 168
                echo "                        ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "oxarticles__oxunitquantity", [], "any", false, false, false, 168), "value", [], "any", false, false, false, 168), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "getUnitName", [], "method", false, false, false, 168), "html", null, true);
                echo " <br>
                    ";
            } elseif ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,             // line 169
($context["product"] ?? null), "oxarticles__oxweight", [], "any", false, false, false, 169), "value", [], "any", false, false, false, 169) && twig_get_attribute($this->env, $this->source, ($context["config"] ?? null), "getConfigParam", ["blShowWeightInList"], "method", false, false, false, 169))) {
                // line 170
                echo "                        <span id=\"productPricePerUnit_Weight_";
                echo twig_escape_filter($this->env, ($context["testid"] ?? null), "html", null, true);
                echo "\" class=\"pricePerUnit\">
                                <span title=\"weight\">";
                // line 171
                echo $this->extensions['OxidEsales\Twig\Extensions\TranslateExtension']->translate(["ident" => "WEIGHT"]);
                echo "</span>
                                <span class=\"value\">";
                // line 172
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "oxarticles__oxweight", [], "any", false, false, false, 172), "value", [], "any", false, false, false, 172), "html", null, true);
                echo " ";
                echo $this->extensions['OxidEsales\Twig\Extensions\TranslateExtension']->translate(["ident" => "KG"]);
                echo "</span>
                            </span>
                    ";
            }
            // line 175
            echo "                </div>
            ";
        }
        // line 177
        echo "            <div class=\"short-desc\">
                ";
        // line 178
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "oxarticles__oxshortdesc", [], "any", false, false, false, 178), "value", [], "any", false, false, false, 178), "html", null, true);
        echo "
            </div>
            <a href=\"";
        // line 180
        echo ($context["_productLink"] ?? null);
        echo "\" class=\"stretched-link\" aria-label=\"";
        echo $this->extensions['OxidEsales\Twig\Extensions\TranslateExtension']->translate(["ident" => "DETAILS"]);
        echo "\"></a>
        </div>
    </div>
";
    }

    // line 26
    public function block_widget_product_listitem_grid_gridpicture($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 27
        echo "        <div class=\"product-img-wrapper\">

            <img ";
        // line 29
        if (($context["slider"] ?? null)) {
            echo "loading=\"lazy\" ";
        }
        echo "width=\"350\" height=\"220\" src=\"";
        echo twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "getThumbnailUrl", [], "method", false, false, false, 29);
        echo "\" alt=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "oxarticles__oxtitle", [], "any", false, false, false, 29), "value", [], "any", false, false, false, 29), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "oxarticles__oxvarselect", [], "any", false, false, false, 29), "value", [], "any", false, false, false, 29), "html", null, true);
        echo "\" class=\"product-img\">
            ";
        // line 30
        if (twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "getMasterZoomPictureUrl", [2], "method", false, false, false, 30)) {
            // line 31
            echo "                <picture>
                    <source type=\"image/webp\" srcset=\"";
            // line 32
            echo twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "getMasterZoomPictureUrl", [2], "method", false, false, false, 32);
            echo "\" media=\"(min-width: 1024px)\">
                    <img class=\"product-img img-2\" width=\"350\" height=\"220\" loading=\"lazy\" src=\"data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==\" alt=\"";
            // line 33
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "oxarticles__oxtitle", [], "any", false, false, false, 33), "value", [], "any", false, false, false, 33), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "oxarticles__oxvarselect", [], "any", false, false, false, 33), "value", [], "any", false, false, false, 33), "html", null, true);
            echo "\">
                </picture>
            ";
        }
        // line 36
        echo "            <a href=\"";
        echo ($context["_productLink"] ?? null);
        echo "\" class=\"stretched-link\" aria-label=\"";
        echo $this->extensions['OxidEsales\Twig\Extensions\TranslateExtension']->translate(["ident" => "DETAILS"]);
        echo "\"></a>


            ";
        // line 40
        echo "            ";
        if ((($context["tprice"] ?? null) && (twig_get_attribute($this->env, $this->source, ($context["tprice"] ?? null), "getBruttoPrice", [], "method", false, false, false, 40) > twig_get_attribute($this->env, $this->source, ($context["price"] ?? null), "getBruttoPrice", [], "method", false, false, false, 40)))) {
            // line 41
            echo "                <div class=\"badges\">
                    <div class=\"badge bg-danger badge-sale\">sale</div>
                </div>
            ";
        }
        // line 45
        echo "
            ";
        // line 46
        $this->displayBlock('widget_product_listitem_grid_tobasket', $context, $blocks);
        // line 115
        echo "        </div>
        ";
    }

    // line 46
    public function block_widget_product_listitem_grid_tobasket($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 47
        echo "                <div class=\"actions d-none d-lg-block\">
                    <div class=\"bottom\">
                        ";
        // line 49
        if (($context["blShowToBasket"] ?? null)) {
            // line 50
            echo "                            ";
            // line 51
            echo "                                <form name=\"tobasket";
            echo twig_escape_filter($this->env, ($context["testid"] ?? null), "html", null, true);
            echo "\" ";
            if (($context["blShowToBasket"] ?? null)) {
                echo "action=\"";
                echo twig_get_attribute($this->env, $this->source, ($context["oViewConf"] ?? null), "getSelfActionLink", [], "method", false, false, false, 51);
                echo "\" method=\"post\"";
            } else {
                echo "action=\"";
                echo ($context["_productLink"] ?? null);
                echo "\" method=\"get\"";
            }
            echo ">
                                    <div class=\"d-none\">
                                        ";
            // line 53
            echo twig_get_attribute($this->env, $this->source, ($context["oViewConf"] ?? null), "getNavFormParams", [], "method", false, false, false, 53);
            echo "
                                        ";
            // line 54
            echo twig_get_attribute($this->env, $this->source, ($context["oViewConf"] ?? null), "getHiddenSid", [], "method", false, false, false, 54);
            echo "
                                        <input type=\"hidden\" name=\"pgNr\" value=\"";
            // line 55
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["oView"] ?? null), "getActPage", [], "method", false, false, false, 55), "html", null, true);
            echo "\">
                                        ";
            // line 56
            if (($context["recommid"] ?? null)) {
                // line 57
                echo "                                            <input type=\"hidden\" name=\"recommid\" value=\"";
                echo twig_escape_filter($this->env, ($context["recommid"] ?? null), "html", null, true);
                echo "\">
                                        ";
            }
            // line 59
            echo "                                        ";
            if (($context["blShowToBasket"] ?? null)) {
                // line 60
                echo "                                            ";
                // line 61
                echo "                                                <input type=\"hidden\" name=\"cl\" value=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["oViewConf"] ?? null), "getTopActiveClassName", [], "method", false, false, false, 61), "html", null, true);
                echo "\">
                                                ";
                // line 62
                if (($context["owishid"] ?? null)) {
                    // line 63
                    echo "                                                    <input type=\"hidden\" name=\"owishid\" value=\"";
                    echo twig_escape_filter($this->env, ($context["owishid"] ?? null), "html", null, true);
                    echo "\">
                                                ";
                }
                // line 65
                echo "                                                ";
                if (($context["toBasketFunction"] ?? null)) {
                    // line 66
                    echo "                                                    <input type=\"hidden\" name=\"fnc\" value=\"";
                    echo twig_escape_filter($this->env, ($context["toBasketFunction"] ?? null), "html", null, true);
                    echo "\">
                                                ";
                } else {
                    // line 68
                    echo "                                                    <input type=\"hidden\" name=\"fnc\" value=\"tobasket\">
                                                ";
                }
                // line 70
                echo "                                                <input type=\"hidden\" name=\"aid\" value=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "oxarticles__oxid", [], "any", false, false, false, 70), "value", [], "any", false, false, false, 70), "html", null, true);
                echo "\">
                                                ";
                // line 71
                if (($context["altproduct"] ?? null)) {
                    // line 72
                    echo "                                                    <input type=\"hidden\" name=\"anid\" value=\"";
                    echo twig_escape_filter($this->env, ($context["altproduct"] ?? null), "html", null, true);
                    echo "\">
                                                ";
                } else {
                    // line 74
                    echo "                                                    <input type=\"hidden\" name=\"anid\" value=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "oxarticles__oxnid", [], "any", false, false, false, 74), "value", [], "any", false, false, false, 74), "html", null, true);
                    echo "\">
                                                ";
                }
                // line 76
                echo "                                            ";
                // line 77
                echo "                                        ";
            } else {
                // line 78
                echo "                                            <input type=\"hidden\" name=\"cl\" value=\"details\">
                                            <input type=\"hidden\" name=\"anid\" value=\"";
                // line 79
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "oxarticles__oxnid", [], "any", false, false, false, 79), "value", [], "any", false, false, false, 79), "html", null, true);
                echo "\">
                                        ";
            }
            // line 81
            echo "                                    </div>

                                    <div class=\"input-group\">
                                        <input type=\"number\" class=\"form-control\" name=\"am\" value=\"1\" aria-label=\"";
            // line 84
            echo $this->extensions['OxidEsales\Twig\Extensions\TranslateExtension']->translate(["ident" => "QUANTITY"]);
            echo "\" aria-describedby=\"submit";
            echo twig_escape_filter($this->env, ($context["testid"] ?? null), "html", null, true);
            echo "\">
                                        <button type=\"submit\" id=\"submit";
            // line 85
            echo twig_escape_filter($this->env, ($context["testid"] ?? null), "html", null, true);
            echo "\" class=\"btn btn-highlight\">
                                            ";
            // line 86
            echo $this->extensions['OxidEsales\Twig\Extensions\TranslateExtension']->translate(["ident" => "TO_CART"]);
            echo "
                                        </button>
                                    </div>

                                </form>
                            ";
            // line 92
            echo "                        ";
        } else {
            // line 93
            echo "                            <a class=\"btn btn-outline-primary w-100\" href=\"";
            echo ($context["_productLink"] ?? null);
            echo "\">";
            echo $this->extensions['OxidEsales\Twig\Extensions\TranslateExtension']->translate(["ident" => "DETAILS"]);
            echo "</a>
                        ";
        }
        // line 95
        echo "                    </div>
                    <div class=\"right\">
                        ";
        // line 97
        $this->displayBlock('widget_product_listitem_grid_addtowishlist', $context, $blocks);
        // line 112
        echo "                    </div>
                </div>
            ";
    }

    // line 97
    public function block_widget_product_listitem_grid_addtowishlist($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 98
        echo "                            ";
        if (($context["oxcmp_user"] ?? null)) {
            // line 99
            echo "                                <a aria-label=\"";
            echo $this->extensions['OxidEsales\Twig\Extensions\TranslateExtension']->translate(["ident" => "ADD_TO_WISH_LIST"]);
            echo "\" class=\"btn btn-sm btn-light w-100\" href=\"";
            echo $this->extensions['OxidEsales\Twig\Extensions\UrlExtension']->getSeoUrl(["ident" => ((twig_get_attribute($this->env, $this->source, ($context["oViewConf"] ?? null), "getSelfLink", [], "method", false, false, false, 99) . "cl=") . twig_get_attribute($this->env, $this->source, ($context["oViewConf"] ?? null), "getTopActiveClassName", [], "method", false, false, false, 99)), "params" => ((((((("aid=" . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "oxarticles__oxnid", [], "any", false, false, false, 99), "value", [], "any", false, false, false, 99)) . "&amp;anid=") . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "oxarticles__oxnid", [], "any", false, false, false, 99), "value", [], "any", false, false, false, 99)) . "&amp;fnc=tonoticelist&amp;am=1") . twig_get_attribute($this->env, $this->source, ($context["oViewConf"] ?? null), "getNavUrlParams", [], "method", false, false, false, 99)) . "&amp;stoken=") . twig_get_attribute($this->env, $this->source, ($context["oViewConf"] ?? null), "getSessionChallengeToken", [], "method", false, false, false, 99))]);
            echo "\">
                                    <svg>
                                        <use xlink:href=\"#star\"></use>
                                    </svg>
                                </a>
                            ";
        } else {
            // line 105
            echo "                                <a aria-label=\"";
            echo $this->extensions['OxidEsales\Twig\Extensions\TranslateExtension']->translate(["ident" => "ADD_TO_WISH_LIST"]);
            echo "\" class=\"btn btn-sm btn-light w-100\" href=\"";
            echo $this->extensions['OxidEsales\Twig\Extensions\UrlExtension']->getSeoUrl(["ident" => (twig_get_attribute($this->env, $this->source, ($context["oViewConf"] ?? null), "getSelfLink", [], "method", false, false, false, 105) . "cl=account"), "params" => (((("anid=" . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "oxarticles__oxnid", [], "any", false, false, false, 105), "value", [], "any", false, false, false, 105)) . "&amp;sourcecl=") . twig_get_attribute($this->env, $this->source, ($context["oViewConf"] ?? null), "getTopActiveClassName", [], "method", false, false, false, 105)) . twig_get_attribute($this->env, $this->source, ($context["oViewConf"] ?? null), "getNavUrlParams", [], "method", false, false, false, 105))]);
            echo "\">
                                    <svg>
                                        <use xlink:href=\"#star\"></use>
                                    </svg>
                                </a>
                            ";
        }
        // line 111
        echo "                        ";
    }

    // line 120
    public function block_widget_product_listitem_infogrid_titlebox($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 121
        echo "                    <div class=\"h5 card-title\">
                        ";
        // line 122
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "oxarticles__oxtitle", [], "any", false, false, false, 122), "value", [], "any", false, false, false, 122), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "oxarticles__oxvarselect", [], "any", false, false, false, 122), "value", [], "any", false, false, false, 122), "html", null, true);
        echo "
                    </div>
                ";
    }

    // line 126
    public function block_widget_product_listitem_grid_price($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 127
        echo "                        ";
        // line 128
        echo "                            ";
        if ((($context["tprice"] ?? null) && (twig_get_attribute($this->env, $this->source, ($context["tprice"] ?? null), "getBruttoPrice", [], "method", false, false, false, 128) > twig_get_attribute($this->env, $this->source, ($context["price"] ?? null), "getBruttoPrice", [], "method", false, false, false, 128)))) {
            // line 129
            echo "                                <span class=\"oldPrice text-muted\">
                                    <del>";
            // line 130
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "getFTPrice", [], "method", false, false, false, 130), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["currency"] ?? null), "sign", [], "any", false, false, false, 130), "html", null, true);
            echo "</del>
                                </span>
                            ";
        }
        // line 133
        echo "
                            ";
        // line 134
        $this->displayBlock('widget_product_listitem_grid_price_value', $context, $blocks);
        // line 155
        echo "                        ";
        // line 156
        echo "
                        ";
        // line 157
        if (($context["oUnitPrice"] ?? null)) {
            // line 158
            echo "                            <p id=\"productPricePerUnit_";
            echo twig_escape_filter($this->env, ($context["testid"] ?? null), "html", null, true);
            echo "\" class=\"pricePerUnit\">
                                ";
            // line 159
            echo twig_escape_filter($this->env, $this->extensions['OxidEsales\Twig\Extensions\FormatPriceExtension']->formatPrice(($context["oUnitPrice"] ?? null), ["currency" => ($context["currency"] ?? null)]), "html", null, true);
            echo "/";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "getUnitName", [], "method", false, false, false, 159), "html", null, true);
            echo "
                            </p>
                        ";
        }
        // line 162
        echo "                    ";
    }

    // line 134
    public function block_widget_product_listitem_grid_price_value($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 135
        echo "                                ";
        if (twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "getFPrice", [], "method", false, false, false, 135)) {
            // line 136
            echo "                                    <span class=\"h5 text-nowrap";
            if ((($context["tprice"] ?? null) && (twig_get_attribute($this->env, $this->source, ($context["tprice"] ?? null), "getBruttoPrice", [], "method", false, false, false, 136) > twig_get_attribute($this->env, $this->source, ($context["price"] ?? null), "getBruttoPrice", [], "method", false, false, false, 136)))) {
                echo " text-danger";
            }
            echo "\">
                                    ";
            // line 137
            if (twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "isRangePrice", [], "method", false, false, false, 137)) {
                // line 138
                echo "                                        ";
                echo $this->extensions['OxidEsales\Twig\Extensions\TranslateExtension']->translate(["ident" => "PRICE_FROM"]);
                echo "
                                        ";
                // line 139
                if ( !twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "isParentNotBuyable", [], "method", false, false, false, 139)) {
                    // line 140
                    echo "                                            ";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "getFMinPrice", [], "method", false, false, false, 140), "html", null, true);
                    echo "
                                        ";
                } else {
                    // line 142
                    echo "                                            ";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "getFVarMinPrice", [], "method", false, false, false, 142), "html", null, true);
                    echo "
                                        ";
                }
                // line 144
                echo "                                    ";
            } else {
                // line 145
                echo "                                        ";
                if ( !twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "isParentNotBuyable", [], "method", false, false, false, 145)) {
                    // line 146
                    echo "                                            ";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "getFPrice", [], "method", false, false, false, 146), "html", null, true);
                    echo "
                                        ";
                } else {
                    // line 148
                    echo "                                            ";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "getFVarMinPrice", [], "method", false, false, false, 148), "html", null, true);
                    echo "
                                        ";
                }
                // line 150
                echo "                                    ";
            }
            // line 151
            echo "                                        ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["currency"] ?? null), "sign", [], "any", false, false, false, 151), "html", null, true);
            echo "
                                </span>
                                ";
        }
        // line 154
        echo "                            ";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@__main__/widget/product/listitem_grid.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo()
    {
        return array (  588 => 154,  581 => 151,  578 => 150,  572 => 148,  566 => 146,  563 => 145,  560 => 144,  554 => 142,  548 => 140,  546 => 139,  541 => 138,  539 => 137,  532 => 136,  529 => 135,  525 => 134,  521 => 162,  513 => 159,  508 => 158,  506 => 157,  503 => 156,  501 => 155,  499 => 134,  496 => 133,  488 => 130,  485 => 129,  482 => 128,  480 => 127,  476 => 126,  467 => 122,  464 => 121,  460 => 120,  456 => 111,  444 => 105,  432 => 99,  429 => 98,  425 => 97,  419 => 112,  417 => 97,  413 => 95,  405 => 93,  402 => 92,  394 => 86,  390 => 85,  384 => 84,  379 => 81,  374 => 79,  371 => 78,  368 => 77,  366 => 76,  360 => 74,  354 => 72,  352 => 71,  347 => 70,  343 => 68,  337 => 66,  334 => 65,  328 => 63,  326 => 62,  321 => 61,  319 => 60,  316 => 59,  310 => 57,  308 => 56,  304 => 55,  300 => 54,  296 => 53,  280 => 51,  278 => 50,  276 => 49,  272 => 47,  268 => 46,  263 => 115,  261 => 46,  258 => 45,  252 => 41,  249 => 40,  240 => 36,  232 => 33,  228 => 32,  225 => 31,  223 => 30,  211 => 29,  207 => 27,  203 => 26,  193 => 180,  188 => 178,  185 => 177,  181 => 175,  173 => 172,  169 => 171,  164 => 170,  162 => 169,  155 => 168,  153 => 167,  150 => 166,  148 => 165,  144 => 163,  142 => 126,  135 => 125,  133 => 120,  126 => 118,  123 => 117,  121 => 26,  117 => 24,  114 => 23,  111 => 22,  109 => 21,  106 => 20,  103 => 19,  100 => 18,  97 => 17,  93 => 16,  90 => 15,  87 => 14,  84 => 13,  81 => 12,  78 => 11,  75 => 10,  72 => 9,  69 => 8,  66 => 7,  63 => 6,  60 => 5,  57 => 4,  54 => 3,  51 => 2,  44 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@__main__/widget/product/listitem_grid.html.twig", "/var/www/html/source/Application/views/apex/tpl/widget/product/listitem_grid.html.twig");
    }
}
