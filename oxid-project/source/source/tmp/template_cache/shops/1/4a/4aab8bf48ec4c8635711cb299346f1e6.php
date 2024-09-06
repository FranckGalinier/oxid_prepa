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

/* @__main__/page/details/inc/productmain.html.twig */
class __TwigTemplate_83efef50b2e1815d09b33875a2d285d8 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'details_productmain_zoom' => [$this, 'block_details_productmain_zoom'],
            'details_productmain_manufacturersicon' => [$this, 'block_details_productmain_manufacturersicon'],
            'details_productmain_title' => [$this, 'block_details_productmain_title'],
            'details_productmain_ratings' => [$this, 'block_details_productmain_ratings'],
            'details_productmain_shortdesc' => [$this, 'block_details_productmain_shortdesc'],
            'details_productmain_variantselections' => [$this, 'block_details_productmain_variantselections'],
            'details_productmain_selectlists' => [$this, 'block_details_productmain_selectlists'],
            'details_productmain_weight' => [$this, 'block_details_productmain_weight'],
            'details_productmain_deliverytime' => [$this, 'block_details_productmain_deliverytime'],
            'details_productmain_priceperunit' => [$this, 'block_details_productmain_priceperunit'],
            'details_productmain_stockstatus' => [$this, 'block_details_productmain_stockstatus'],
            'details_productmain_vpe' => [$this, 'block_details_productmain_vpe'],
            'details_productmain_persparams' => [$this, 'block_details_productmain_persparams'],
            'details_productmain_watchlist' => [$this, 'block_details_productmain_watchlist'],
            'details_productmain_price' => [$this, 'block_details_productmain_price'],
            'details_productmain_price_value' => [$this, 'block_details_productmain_price_value'],
            'details_productmain_tprice' => [$this, 'block_details_productmain_tprice'],
            'details_productmain_tobasket' => [$this, 'block_details_productmain_tobasket'],
            'details_productmain_productlinksselector' => [$this, 'block_details_productmain_productlinksselector'],
            'details_productmain_productlinks' => [$this, 'block_details_productmain_productlinks'],
            'details_productmain_addtowishlist' => [$this, 'block_details_productmain_addtowishlist'],
            'details_productmain_social' => [$this, 'block_details_productmain_social'],
            'details_productmain_content' => [$this, 'block_details_productmain_content'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "
";
        // line 2
        $context["oManufacturer"] = twig_get_attribute($this->env, $this->source, ($context["oView"] ?? null), "getManufacturer", [], "method", false, false, false, 2);
        // line 3
        $context["aVariantSelections"] = twig_get_attribute($this->env, $this->source, ($context["oView"] ?? null), "getVariantSelections", [], "method", false, false, false, 3);
        // line 4
        $context["imageStyle"] = twig_get_attribute($this->env, $this->source, ($context["oViewConf"] ?? null), "getViewThemeParam", ["sImageStyle"], "method", false, false, false, 4);
        // line 5
        echo "
";
        // line 6
        if ((($context["aVariantSelections"] ?? null) && twig_get_attribute($this->env, $this->source, ($context["aVariantSelections"] ?? null), "rawselections", [], "any", false, false, false, 6))) {
            // line 7
            echo "    ";
            $context["_sSelectionHashCollection"] = "";
            // line 8
            echo "    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["aVariantSelections"] ?? null), "rawselections", [], "any", false, false, false, 8));
            foreach ($context['_seq'] as $context["iKey"] => $context["oSelectionList"]) {
                // line 9
                echo "        ";
                $context["_sSelectionHash"] = "";
                // line 10
                echo "        ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($context["oSelectionList"]);
                foreach ($context['_seq'] as $context["iPos"] => $context["oListItem"]) {
                    // line 11
                    echo "            ";
                    $context["_sSelectionHash"] = ((((($context["_sSelectionHash"] ?? null) . $context["iPos"]) . ":") . twig_get_attribute($this->env, $this->source, $context["oListItem"], "hash", [], "any", false, false, false, 11)) . "|");
                    // line 12
                    echo "        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['iPos'], $context['oListItem'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 13
                echo "        ";
                if (($context["_sSelectionHash"] ?? null)) {
                    // line 14
                    echo "            ";
                    if (($context["_sSelectionHashCollection"] ?? null)) {
                        $context["_sSelectionHashCollection"] = (($context["_sSelectionHashCollection"] ?? null) . ",");
                    }
                    // line 15
                    echo "            ";
                    $context["_sSelectionHashCollection"] = (((($context["_sSelectionHashCollection"] ?? null) . "'") . ($context["_sSelectionHash"] ?? null)) . "'");
                    // line 16
                    echo "        ";
                }
                // line 17
                echo "    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['iKey'], $context['oSelectionList'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 18
            echo "
    <form class=\"js-oxWidgetReload\" action=\"";
            // line 19
            echo twig_get_attribute($this->env, $this->source, ($context["oView"] ?? null), "getWidgetLink", [], "method", false, false, false, 19);
            echo "\" method=\"get\">
        ";
            // line 20
            echo twig_get_attribute($this->env, $this->source, ($context["oViewConf"] ?? null), "getHiddenSid", [], "method", false, false, false, 20);
            echo "
        ";
            // line 21
            echo twig_get_attribute($this->env, $this->source, ($context["oViewConf"] ?? null), "getNavFormParams", [], "method", false, false, false, 21);
            echo "
        <input type=\"hidden\" name=\"cl\" value=\"";
            // line 22
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["oView"] ?? null), "getClassKey", [], "method", false, false, false, 22), "html", null, true);
            echo "\">
        <input type=\"hidden\" name=\"oxwparent\" value=\"";
            // line 23
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["oViewConf"] ?? null), "getTopActiveClassName", [], "method", false, false, false, 23), "html", null, true);
            echo "\">
        <input type=\"hidden\" name=\"listtype\" value=\"";
            // line 24
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["oView"] ?? null), "getListType", [], "method", false, false, false, 24), "html", null, true);
            echo "\">
        <input type=\"hidden\" name=\"nocookie\" value=\"1\">
        <input type=\"hidden\" name=\"cnid\" value=\"";
            // line 26
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["oView"] ?? null), "getCategoryId", [], "method", false, false, false, 26), "html", null, true);
            echo "\">
        <input type=\"hidden\" name=\"anid\" value=\"";
            // line 27
            if ( !twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["oDetailsProduct"] ?? null), "oxarticles__oxparentid", [], "any", false, false, false, 27), "value", [], "any", false, false, false, 27)) {
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["oDetailsProduct"] ?? null), "oxarticles__oxid", [], "any", false, false, false, 27), "value", [], "any", false, false, false, 27), "html", null, true);
            } else {
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["oDetailsProduct"] ?? null), "oxarticles__oxparentid", [], "any", false, false, false, 27), "value", [], "any", false, false, false, 27), "html", null, true);
            }
            echo "\">
        <input type=\"hidden\" name=\"actcontrol\" value=\"";
            // line 28
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["oViewConf"] ?? null), "getTopActiveClassName", [], "method", false, false, false, 28), "html", null, true);
            echo "\">
        ";
            // line 29
            if (($context["preview"] ?? null)) {
                // line 30
                echo "            <input type=\"hidden\" name=\"preview\" value=\"";
                echo twig_escape_filter($this->env, ($context["preview"] ?? null), "html", null, true);
                echo "\">
        ";
            }
            // line 32
            echo "    </form>
";
        }
        // line 34
        echo "
";
        // line 35
        // line 36
        echo "    <form class=\"js-oxProductForm\" action=\"";
        echo twig_get_attribute($this->env, $this->source, ($context["oViewConf"] ?? null), "getSelfActionLink", [], "method", false, false, false, 36);
        echo "\" method=\"post\">
            ";
        // line 37
        echo twig_get_attribute($this->env, $this->source, ($context["oViewConf"] ?? null), "getHiddenSid", [], "method", false, false, false, 37);
        echo "
            ";
        // line 38
        echo twig_get_attribute($this->env, $this->source, ($context["oViewConf"] ?? null), "getNavFormParams", [], "method", false, false, false, 38);
        echo "
            <input type=\"hidden\" name=\"cl\" value=\"";
        // line 39
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["oViewConf"] ?? null), "getTopActiveClassName", [], "method", false, false, false, 39), "html", null, true);
        echo "\">
            <input type=\"hidden\" name=\"aid\" value=\"";
        // line 40
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["oDetailsProduct"] ?? null), "oxarticles__oxid", [], "any", false, false, false, 40), "value", [], "any", false, false, false, 40), "html", null, true);
        echo "\">
            <input type=\"hidden\" name=\"anid\" value=\"";
        // line 41
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["oDetailsProduct"] ?? null), "oxarticles__oxnid", [], "any", false, false, false, 41), "value", [], "any", false, false, false, 41), "html", null, true);
        echo "\">
            <input type=\"hidden\" name=\"parentid\" value=\"";
        // line 42
        if ( !twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["oDetailsProduct"] ?? null), "oxarticles__oxparentid", [], "any", false, false, false, 42), "value", [], "any", false, false, false, 42)) {
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["oDetailsProduct"] ?? null), "oxarticles__oxid", [], "any", false, false, false, 42), "value", [], "any", false, false, false, 42), "html", null, true);
        } else {
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["oDetailsProduct"] ?? null), "oxarticles__oxparentid", [], "any", false, false, false, 42), "value", [], "any", false, false, false, 42), "html", null, true);
        }
        echo "\">
            <input type=\"hidden\" name=\"panid\" value=\"\">
            ";
        // line 44
        if ( !twig_get_attribute($this->env, $this->source, ($context["oDetailsProduct"] ?? null), "isNotBuyable", [], "method", false, false, false, 44)) {
            // line 45
            echo "                <input type=\"hidden\" name=\"fnc\" value=\"tobasket\">
            ";
        }
        // line 48
        echo "
<div class=\"details-top\">
    <div class=\"container-xxl\">
        <div class=\"row row-cols-md-2\">
            <div class=\"col-12 col-md-6 col-lg-8 col-xl-9\">
                ";
        // line 54
        echo "                ";
        $this->displayBlock('details_productmain_zoom', $context, $blocks);
        // line 85
        echo "            </div>

            <div class=\"col-12 col-md-6 col-lg-4 col-xl-3\">
                ";
        // line 88
        $this->displayBlock('details_productmain_manufacturersicon', $context, $blocks);
        // line 95
        echo "
                ";
        // line 96
        $this->displayBlock('details_productmain_title', $context, $blocks);
        // line 101
        echo "
                ";
        // line 103
        echo "                ";
        if (twig_get_attribute($this->env, $this->source, ($context["oView"] ?? null), "ratingIsActive", [], "method", false, false, false, 103)) {
            // line 104
            echo "                    ";
            $this->displayBlock('details_productmain_ratings', $context, $blocks);
            // line 107
            echo "                ";
        }
        // line 108
        echo "
                ";
        // line 110
        echo "                ";
        $this->displayBlock('details_productmain_shortdesc', $context, $blocks);
        // line 117
        echo "
                ";
        // line 118
        $context["blCanBuy"] = true;
        // line 119
        echo "
                ";
        // line 120
        if ((($context["aVariantSelections"] ?? null) && twig_get_attribute($this->env, $this->source, ($context["aVariantSelections"] ?? null), "selections", [], "any", false, false, false, 120))) {
            // line 121
            echo "                    ";
            $context["blCanBuy"] = twig_get_attribute($this->env, $this->source, ($context["aVariantSelections"] ?? null), "blPerfectFit", [], "any", false, false, false, 121);
            // line 122
            echo "                    ";
            if ( !($context["blHasActiveSelections"] ?? null)) {
                // line 123
                echo "                        ";
                if (( !($context["blCanBuy"] ?? null) &&  !twig_get_attribute($this->env, $this->source, ($context["oDetailsProduct"] ?? null), "isParentNotBuyable", [], "method", false, false, false, 123))) {
                    // line 124
                    echo "                            ";
                    $context["blCanBuy"] = true;
                    // line 125
                    echo "                        ";
                }
                // line 126
                echo "                    ";
            }
            // line 127
            echo "                ";
        }
        // line 128
        echo "
                ";
        // line 130
        echo "                ";
        $this->displayBlock('details_productmain_variantselections', $context, $blocks);
        // line 146
        echo "
                ";
        // line 148
        echo "                ";
        $this->displayBlock('details_productmain_selectlists', $context, $blocks);
        // line 160
        echo "
                ";
        // line 162
        echo "                <div class=\"details-information mb-3 mb-md-5 small\">

                    ";
        // line 165
        echo "                    ";
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["oDetailsProduct"] ?? null), "oxarticles__oxweight", [], "any", false, false, false, 165), "value", [], "any", false, false, false, 165)) {
            // line 166
            echo "                        <div class=\"weight\">
                            <svg aria-label=\"";
            // line 167
            echo $this->extensions['OxidEsales\Twig\Extensions\TranslateExtension']->translate(["ident" => "WEIGHT"]);
            echo "\">
                                <use xlink:href=\"#weight-hanging\"></use>
                            </svg>
                            ";
            // line 170
            $this->displayBlock('details_productmain_weight', $context, $blocks);
            // line 174
            echo "                        </div>
                    ";
        }
        // line 176
        echo "
                    ";
        // line 178
        echo "                    ";
        $this->displayBlock('details_productmain_deliverytime', $context, $blocks);
        // line 185
        echo "
                    ";
        // line 187
        echo "                    ";
        // line 188
        echo "                        ";
        $context["oUnitPrice"] = twig_get_attribute($this->env, $this->source, ($context["oDetailsProduct"] ?? null), "getUnitPrice", [], "method", false, false, false, 188);
        // line 189
        echo "                        ";
        $this->displayBlock('details_productmain_priceperunit', $context, $blocks);
        // line 199
        echo "                    ";
        // line 200
        echo "
                    ";
        // line 202
        echo "                    ";
        $this->displayBlock('details_productmain_stockstatus', $context, $blocks);
        // line 226
        echo "
                    ";
        // line 228
        echo "                    ";
        $this->displayBlock('details_productmain_vpe', $context, $blocks);
        // line 237
        echo "                </div>

                ";
        // line 240
        echo "                ";
        $this->displayBlock('details_productmain_persparams', $context, $blocks);
        // line 248
        echo "
                <div class=\"price-wrapper h1\">
                    ";
        // line 250
        $this->displayBlock('details_productmain_watchlist', $context, $blocks);
        // line 251
        echo "
                    ";
        // line 252
        $this->displayBlock('details_productmain_price', $context, $blocks);
        // line 274
        echo "
                    ";
        // line 275
        $this->displayBlock('details_productmain_tprice', $context, $blocks);
        // line 282
        echo "
                    ";
        // line 283
        $context["oCont"] = $this->extensions['OxidEsales\Twig\Extensions\IfContentExtension']->getContent("oxdeliveryinfo", null);
        // line 284
        echo "                        ";
        if (twig_get_attribute($this->env, $this->source, ($context["oView"] ?? null), "isVatIncluded", [], "method", false, false, false, 284)) {
            // line 285
            echo "                            <div class=\"vat-info-text\">
                                ";
            // line 286
            echo $this->extensions['OxidEsales\Twig\Extensions\TranslateExtension']->translate(["ident" => "PLUS_SHIPPING"]);
            echo "<a href=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["oCont"] ?? null), "getLink", [], "method", false, false, false, 286), "html", null, true);
            echo "\">";
            echo $this->extensions['OxidEsales\Twig\Extensions\TranslateExtension']->translate(["ident" => "PLUS_SHIPPING2"]);
            echo "</a>
                            </div>
                        ";
        } else {
            // line 289
            echo "                            <div class=\"vat-info-text\">
                                ";
            // line 290
            echo $this->extensions['OxidEsales\Twig\Extensions\TranslateExtension']->translate(["ident" => "PLUS"]);
            echo "<a href=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["oCont"] ?? null), "getLink", [], "method", false, false, false, 290), "html", null, true);
            echo "\">";
            echo $this->extensions['OxidEsales\Twig\Extensions\TranslateExtension']->translate(["ident" => "PLUS_SHIPPING2"]);
            echo "</a>
                            </div>
                        ";
        }
        // line 293
        echo "                    ";
        unset($context["oCont"]);
        // line 294
        echo "                </div>

                ";
        // line 296
        if (twig_get_attribute($this->env, $this->source, ($context["oDetailsProduct"] ?? null), "loadAmountPriceInfo", [], "method", false, false, false, 296)) {
            // line 297
            echo "                    ";
            $this->loadTemplate("@__main__/page/details/inc/priceinfo.html.twig", "@__main__/page/details/inc/productmain.html.twig", 297)->display($context);
            // line 298
            echo "                ";
        }
        // line 299
        echo "
                ";
        // line 300
        $this->displayBlock('details_productmain_tobasket', $context, $blocks);
        // line 312
        echo "
                ";
        // line 313
        $this->displayBlock('details_productmain_productlinksselector', $context, $blocks);
        // line 355
        echo "            </div>
            ";
        // line 356
        $this->displayBlock('details_productmain_social', $context, $blocks);
        // line 357
        echo "        </div>
    </div>
</div>

";
        // line 361
        $this->displayBlock('details_productmain_content', $context, $blocks);
        // line 362
        echo "
";
        // line 363
        // line 364
        echo "    </form>
";
    }

    // line 54
    public function block_details_productmain_zoom($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 55
        echo "                    ";
        $context["imageCount"] = twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["oView"] ?? null), "getIcons", [], "method", false, false, false, 55));
        // line 56
        echo "                    <div class=\"gallery\">
                        <div class=\"carousel\">
                            ";
        // line 58
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["oView"] ?? null), "getIcons", [], "method", false, false, false, 58));
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
        foreach ($context['_seq'] as $context["iPicNr"] => $context["oArtIcon"]) {
            // line 59
            echo "                                <input type=\"radio\" class=\"gallery-helper\" id=\"image";
            echo twig_escape_filter($this->env, $context["iPicNr"], "html", null, true);
            echo "\" name=\"gallery-control\"";
            if (twig_get_attribute($this->env, $this->source, $context["loop"], "first", [], "any", false, false, false, 59)) {
                echo " checked";
            }
            echo ">
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
        unset($context['_seq'], $context['_iterated'], $context['iPicNr'], $context['oArtIcon'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 61
        echo "
                            ";
        // line 62
        if ((($context["imageCount"] ?? null) > 1)) {
            // line 63
            echo "                                <div class=\"thumbnails\">
                                    ";
            // line 64
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["oView"] ?? null), "getIcons", [], "method", false, false, false, 64));
            foreach ($context['_seq'] as $context["iPicNr"] => $context["oArtIcon"]) {
                // line 65
                echo "                                        <label for=\"image";
                echo twig_escape_filter($this->env, $context["iPicNr"], "html", null, true);
                echo "\" class=\"thumb\">
                                            <img loading=\"lazy\" src=\"";
                // line 66
                echo twig_get_attribute($this->env, $this->source, ($context["oPictureProduct"] ?? null), "getIconUrl", [$context["iPicNr"]], "method", false, false, false, 66);
                echo "\" alt=\"";
                echo $this->extensions['OxidEsales\Twig\Extensions\TranslateExtension']->translate(["ident" => "IMAGE"]);
                echo twig_escape_filter($this->env, $context["iPicNr"], "html", null, true);
                echo "\" width=\"112\" height=\"112\">
                                        </label>
                                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['iPicNr'], $context['oArtIcon'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 69
            echo "                                </div>
                            ";
        }
        // line 71
        echo "
                            <div class=\"wrap slider-container\">
                                ";
        // line 73
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["oView"] ?? null), "getIcons", [], "method", false, false, false, 73));
        foreach ($context['_seq'] as $context["iPicNr"] => $context["oArtIcon"]) {
            // line 74
            echo "                                    ";
            $context["sPictureName"] = twig_get_attribute($this->env, $this->source, ($context["oPictureProduct"] ?? null), "getPictureFieldValue", ["oxpic", $context["iPicNr"]], "method", false, false, false, 74);
            // line 75
            echo "                                    ";
            $context["aPictureInfo"] = getimagesize(twig_get_attribute($this->env, $this->source, ($context["config"] ?? null), "getMasterPicturePath", [((("product/" . $context["iPicNr"]) . "/") . ($context["sPictureName"] ?? null))], "method", false, false, false, 75));
            // line 76
            echo "
                                    <figure>
                                        <img src=\"";
            // line 78
            echo twig_get_attribute($this->env, $this->source, ($context["oPictureProduct"] ?? null), "getMasterZoomPictureUrl", [$context["iPicNr"]], "method", false, false, false, 78);
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, twig_striptags(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["oPictureProduct"] ?? null), "oxarticles__oxtitle", [], "any", false, false, false, 78), "value", [], "any", false, false, false, 78)), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, twig_striptags(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["oPictureProduct"] ?? null), "oxarticles__oxvarselect", [], "any", false, false, false, 78), "value", [], "any", false, false, false, 78)), "html", null, true);
            echo "\"/>
                                    </figure>
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['iPicNr'], $context['oArtIcon'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 81
        echo "                            </div>
                        </div>
                    </div>
                ";
    }

    // line 88
    public function block_details_productmain_manufacturersicon($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 89
        echo "                    ";
        if (($context["oManufacturer"] ?? null)) {
            // line 90
            echo "                        <a href=\"";
            echo twig_get_attribute($this->env, $this->source, ($context["oManufacturer"] ?? null), "getLink", [], "method", false, false, false, 90);
            echo "\" title=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["oManufacturer"] ?? null), "oxmanufacturers__oxtitle", [], "any", false, false, false, 90), "value", [], "any", false, false, false, 90), "html", null, true);
            echo "\" class=\"brand-name\">
                            ";
            // line 91
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["oManufacturer"] ?? null), "oxmanufacturers__oxtitle", [], "any", false, false, false, 91), "value", [], "any", false, false, false, 91), "html", null, true);
            echo "
                        </a>
                    ";
        }
        // line 94
        echo "                ";
    }

    // line 96
    public function block_details_productmain_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 97
        echo "                    <h1 class=\"h2 details-title mb-2\">
                        ";
        // line 98
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["oDetailsProduct"] ?? null), "oxarticles__oxtitle", [], "any", false, false, false, 98), "value", [], "any", false, false, false, 98), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["oDetailsProduct"] ?? null), "oxarticles__oxvarselect", [], "any", false, false, false, 98), "value", [], "any", false, false, false, 98), "html", null, true);
        echo "
                    </h1>
                ";
    }

    // line 104
    public function block_details_productmain_ratings($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 105
        echo "                        ";
        $this->loadTemplate("@__main__/widget/reviews/rating.html.twig", "@__main__/page/details/inc/productmain.html.twig", 105)->display(twig_array_merge($context, ["itemid" => ("anid=" . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["oDetailsProduct"] ?? null), "oxarticles__oxnid", [], "any", false, false, false, 105), "value", [], "any", false, false, false, 105)), "sRateUrl" => twig_get_attribute($this->env, $this->source, ($context["oDetailsProduct"] ?? null), "getLink", [], "method", false, false, false, 105)]));
        // line 106
        echo "                    ";
    }

    // line 110
    public function block_details_productmain_shortdesc($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 111
        echo "                    ";
        // line 112
        echo "                        ";
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["oDetailsProduct"] ?? null), "oxarticles__oxshortdesc", [], "any", false, false, false, 112), "value", [], "any", false, false, false, 112)) {
            // line 113
            echo "                            <p class=\"details-shortdesc\" id=\"productShortdesc\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["oDetailsProduct"] ?? null), "oxarticles__oxshortdesc", [], "any", false, false, false, 113), "value", [], "any", false, false, false, 113), "html", null, true);
            echo "</p>
                        ";
        }
        // line 115
        echo "                    ";
        // line 116
        echo "                ";
    }

    // line 130
    public function block_details_productmain_variantselections($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 131
        echo "                    ";
        if ((($context["aVariantSelections"] ?? null) && twig_get_attribute($this->env, $this->source, ($context["aVariantSelections"] ?? null), "selections", [], "any", false, false, false, 131))) {
            // line 132
            echo "                        ";
            echo $this->extensions['OxidEsales\Twig\Extensions\ScriptExtension']->script($context, ["include" => "js/variants.min.js", "priority" => 11, "dynamic" => ($context["__oxid_include_dynamic"] ?? null)]);
            echo "

                        <div id=\"variants\" class=\"variant-dropdown\">
                            ";
            // line 136
            echo "                            ";
            $context["blHasActiveSelections"] = false;
            // line 137
            echo "                            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["aVariantSelections"] ?? null), "selections", [], "any", false, false, false, 137));
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
            foreach ($context['_seq'] as $context["iKey"] => $context["oList"]) {
                // line 138
                echo "                                ";
                if (twig_get_attribute($this->env, $this->source, $context["oList"], "getActiveSelection", [], "method", false, false, false, 138)) {
                    // line 139
                    echo "                                    ";
                    $context["blHasActiveSelections"] = true;
                    // line 140
                    echo "                                ";
                }
                // line 141
                echo "                                ";
                $this->loadTemplate("@__main__/widget/product/selectbox.html.twig", "@__main__/page/details/inc/productmain.html.twig", 141)->display(twig_array_merge($context, ["oSelectionList" => $context["oList"], "iKey" => $context["iKey"], "blInDetails" => true]));
                // line 142
                echo "                            ";
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
            unset($context['_seq'], $context['_iterated'], $context['iKey'], $context['oList'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 143
            echo "                        </div>
                    ";
        }
        // line 145
        echo "                ";
    }

    // line 148
    public function block_details_productmain_selectlists($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 149
        echo "                    ";
        if (twig_get_attribute($this->env, $this->source, ($context["oViewConf"] ?? null), "showSelectLists", [], "method", false, false, false, 149)) {
            // line 150
            echo "                        ";
            $context["oSelections"] = twig_get_attribute($this->env, $this->source, ($context["oDetailsProduct"] ?? null), "getSelections", [], "method", false, false, false, 150);
            // line 151
            echo "                        ";
            if (($context["oSelections"] ?? null)) {
                // line 152
                echo "                            <div class=\"variant-dropdown\" id=\"productSelections\">
                                ";
                // line 153
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["oSelections"] ?? null));
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
                foreach ($context['_seq'] as $context["_key"] => $context["oList"]) {
                    // line 154
                    echo "                                    ";
                    $this->loadTemplate("@__main__/widget/product/selectbox.html.twig", "@__main__/page/details/inc/productmain.html.twig", 154)->display(twig_array_merge($context, ["blSubmitOnChange" => false, "oSelectionList" => $context["oList"], "sFieldName" => "sel", "iKey" => twig_get_attribute($this->env, $this->source, $context["loop"], "index0", [], "any", false, false, false, 154), "blHideDefault" => true, "sSelType" => "seldrop"]));
                    // line 155
                    echo "                                ";
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
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['oList'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 156
                echo "                            </div>
                        ";
            }
            // line 158
            echo "                    ";
        }
        // line 159
        echo "                ";
    }

    // line 170
    public function block_details_productmain_weight($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 171
        echo "                                ";
        echo $this->extensions['OxidEsales\Twig\Extensions\TranslateExtension']->translate(["ident" => "WEIGHT", "suffix" => "COLON"]);
        echo "
                                ";
        // line 172
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["oDetailsProduct"] ?? null), "oxarticles__oxweight", [], "any", false, false, false, 172), "value", [], "any", false, false, false, 172), "html", null, true);
        echo " ";
        echo $this->extensions['OxidEsales\Twig\Extensions\TranslateExtension']->translate(["ident" => "KG"]);
        echo "
                            ";
    }

    // line 178
    public function block_details_productmain_deliverytime($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 179
        echo "                        ";
        // line 180
        echo "                            ";
        if (twig_get_attribute($this->env, $this->source, ($context["oDetailsProduct"] ?? null), "isBuyable", [], "method", false, false, false, 180)) {
            // line 181
            echo "                                ";
            $this->loadTemplate("@__main__/page/details/inc/deliverytime.html.twig", "@__main__/page/details/inc/productmain.html.twig", 181)->display($context);
            // line 182
            echo "                            ";
        }
        // line 183
        echo "                        ";
        // line 184
        echo "                    ";
    }

    // line 189
    public function block_details_productmain_priceperunit($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 190
        echo "                            ";
        if (($context["oUnitPrice"] ?? null)) {
            // line 191
            echo "                                <div class=\"ppu\">
                                    <svg aria-label=\"";
            // line 192
            echo $this->extensions['OxidEsales\Twig\Extensions\TranslateExtension']->translate(["ident" => "WEIGHT"]);
            echo "\">
                                        <use xlink:href=\"#tag\"></use>
                                    </svg>
                                    ";
            // line 195
            echo twig_escape_filter($this->env, $this->extensions['OxidEsales\Twig\Extensions\FormatPriceExtension']->formatPrice(($context["oUnitPrice"] ?? null), ["currency" => ($context["currency"] ?? null)]), "html", null, true);
            echo "/";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["oDetailsProduct"] ?? null), "getUnitName", [], "method", false, false, false, 195), "html", null, true);
            echo "
                                </div>
                            ";
        }
        // line 198
        echo "                        ";
    }

    // line 202
    public function block_details_productmain_stockstatus($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 203
        echo "                        <div class=\"stockFlag\">
                            ";
        // line 204
        if ((twig_get_attribute($this->env, $this->source, ($context["oDetailsProduct"] ?? null), "getStockStatus", [], "method", false, false, false, 204) ==  -1)) {
            // line 205
            echo "                                <span class=\"text-danger\">●</span>
                                ";
            // line 206
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["oDetailsProduct"] ?? null), "oxarticles__oxnostocktext", [], "any", false, false, false, 206), "value", [], "any", false, false, false, 206)) {
                // line 207
                echo "                                    ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["oDetailsProduct"] ?? null), "oxarticles__oxnostocktext", [], "any", false, false, false, 207), "value", [], "any", false, false, false, 207), "html", null, true);
                echo "
                                ";
            } elseif (twig_get_attribute($this->env, $this->source,             // line 208
($context["oViewConf"] ?? null), "getStockOffDefaultMessage", [], "method", false, false, false, 208)) {
                // line 209
                echo "                                    ";
                echo $this->extensions['OxidEsales\Twig\Extensions\TranslateExtension']->translate(["ident" => "MESSAGE_NOT_ON_STOCK"]);
                echo "
                                ";
            }
            // line 211
            echo "                                ";
            if (twig_get_attribute($this->env, $this->source, ($context["oDetailsProduct"] ?? null), "getDeliveryDate", [], "method", false, false, false, 211)) {
                // line 212
                echo "                                    ";
                echo $this->extensions['OxidEsales\Twig\Extensions\TranslateExtension']->translate(["ident" => "AVAILABLE_ON"]);
                echo " ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["oDetailsProduct"] ?? null), "getDeliveryDate", [], "method", false, false, false, 212), "html", null, true);
                echo "
                                ";
            }
            // line 214
            echo "                            ";
        } elseif ((twig_get_attribute($this->env, $this->source, ($context["oDetailsProduct"] ?? null), "getStockStatus", [], "method", false, false, false, 214) == 1)) {
            // line 215
            echo "                                <span class=\"text-warning\">●</span> ";
            echo $this->extensions['OxidEsales\Twig\Extensions\TranslateExtension']->translate(["ident" => "LOW_STOCK"]);
            echo "
                            ";
        } elseif ((twig_get_attribute($this->env, $this->source,         // line 216
($context["oDetailsProduct"] ?? null), "getStockStatus", [], "method", false, false, false, 216) == 0)) {
            // line 217
            echo "                                <span class=\"text-success\">●</span>
                                ";
            // line 218
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["oDetailsProduct"] ?? null), "oxarticles__oxstocktext", [], "any", false, false, false, 218), "value", [], "any", false, false, false, 218)) {
                // line 219
                echo "                                    ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["oDetailsProduct"] ?? null), "oxarticles__oxstocktext", [], "any", false, false, false, 219), "value", [], "any", false, false, false, 219), "html", null, true);
                echo "
                                ";
            } elseif (twig_get_attribute($this->env, $this->source,             // line 220
($context["oViewConf"] ?? null), "getStockOnDefaultMessage", [], "method", false, false, false, 220)) {
                // line 221
                echo "                                    ";
                echo $this->extensions['OxidEsales\Twig\Extensions\TranslateExtension']->translate(["ident" => "READY_FOR_SHIPPING"]);
                echo "
                                ";
            }
            // line 223
            echo "                            ";
        }
        // line 224
        echo "                        </div>
                    ";
    }

    // line 228
    public function block_details_productmain_vpe($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 229
        echo "                        ";
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["oDetailsProduct"] ?? null), "oxarticles__oxvpe", [], "any", false, false, false, 229), "value", [], "any", false, false, false, 229) > 1)) {
            // line 230
            echo "                            <div class=\"vpe\">
                                <svg aria-label=\"";
            // line 231
            echo $this->extensions['OxidEsales\Twig\Extensions\TranslateExtension']->translate(["ident" => "DETAILS_VPE_MESSAGE_1"]);
            echo "\">
                                    <use xlink:href=\"#boxes-stacked\"></use>
                                </svg>
                                ";
            // line 234
            echo $this->extensions['OxidEsales\Twig\Extensions\TranslateExtension']->translate(["ident" => "DETAILS_VPE_MESSAGE_1"]);
            echo " ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["oDetailsProduct"] ?? null), "oxarticles__oxvpe", [], "any", false, false, false, 234), "value", [], "any", false, false, false, 234), "html", null, true);
            echo " ";
            echo $this->extensions['OxidEsales\Twig\Extensions\TranslateExtension']->translate(["ident" => "DETAILS_VPE_MESSAGE_2"]);
            echo "</div>
                        ";
        }
        // line 236
        echo "                    ";
    }

    // line 240
    public function block_details_productmain_persparams($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 241
        echo "                    ";
        if (twig_get_attribute($this->env, $this->source, ($context["oView"] ?? null), "isPersParam", [], "method", false, false, false, 241)) {
            // line 242
            echo "                        <div class=\"mb-3\">
                            <label for=\"persistentParam\" class=\"form-label\">";
            // line 243
            echo $this->extensions['OxidEsales\Twig\Extensions\TranslateExtension']->translate(["ident" => "LABEL"]);
            echo "</label>
                            <input type=\"text\" id=\"persistentParam\" name=\"persparam[details]\" value=\"";
            // line 244
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["oDetailsProduct"] ?? null), "aPersistParam", [], "any", false, false, false, 244), "text", [], "any", false, false, false, 244), "html", null, true);
            echo "\" size=\"35\" class=\"form-control\">
                        </div>
                    ";
        }
        // line 247
        echo "                ";
    }

    // line 250
    public function block_details_productmain_watchlist($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 252
    public function block_details_productmain_price($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 253
        echo "                        ";
        // line 254
        echo "                            ";
        $this->displayBlock('details_productmain_price_value', $context, $blocks);
        // line 272
        echo "                        ";
        // line 273
        echo "                    ";
    }

    // line 254
    public function block_details_productmain_price_value($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 255
        echo "                                ";
        if (twig_get_attribute($this->env, $this->source, ($context["oDetailsProduct"] ?? null), "getFPrice", [], "method", false, false, false, 255)) {
            // line 256
            echo "                                    <div id=\"productPrice\" class=\"price-label\">
                                        ";
            // line 257
            $context["sFrom"] = "";
            // line 258
            echo "                                        ";
            $context["oPrice"] = twig_get_attribute($this->env, $this->source, ($context["oDetailsProduct"] ?? null), "getPrice", [], "method", false, false, false, 258);
            // line 259
            echo "                                        ";
            if (twig_get_attribute($this->env, $this->source, ($context["oDetailsProduct"] ?? null), "isParentNotBuyable", [], "method", false, false, false, 259)) {
                // line 260
                echo "                                            ";
                $context["oPrice"] = twig_get_attribute($this->env, $this->source, ($context["oDetailsProduct"] ?? null), "getVarMinPrice", [], "method", false, false, false, 260);
                // line 261
                echo "                                            ";
                if (twig_get_attribute($this->env, $this->source, ($context["oDetailsProduct"] ?? null), "isRangePrice", [], "method", false, false, false, 261)) {
                    // line 262
                    echo "                                                ";
                    $context["sFrom"] = $this->extensions['OxidEsales\Twig\Extensions\Filters\TranslateExtension']->translate("PRICE_FROM");
                    // line 263
                    echo "                                            ";
                }
                // line 264
                echo "                                        ";
            }
            // line 265
            echo "                                        <span ";
            if (twig_get_attribute($this->env, $this->source, ($context["oDetailsProduct"] ?? null), "getTPrice", [], "method", false, false, false, 265)) {
                echo " class=\"text-danger\"";
            }
            echo ">
                                            <span class=\"price-from\">";
            // line 266
            echo twig_escape_filter($this->env, ($context["sFrom"] ?? null), "html", null, true);
            echo "</span>
                                            <span class=\"price\">";
            // line 267
            echo twig_escape_filter($this->env, $this->extensions['OxidEsales\Twig\Extensions\FormatPriceExtension']->formatPrice(($context["oPrice"] ?? null), ["currency" => ($context["currency"] ?? null)]), "html", null, true);
            echo "</span>
                                        </span>
                                    </div>
                                ";
        }
        // line 271
        echo "                            ";
    }

    // line 275
    public function block_details_productmain_tprice($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 276
        echo "                        ";
        // line 277
        echo "                            ";
        if (twig_get_attribute($this->env, $this->source, ($context["oDetailsProduct"] ?? null), "getTPrice", [], "method", false, false, false, 277)) {
            // line 278
            echo "                                <del class=\"price-old\">";
            echo twig_escape_filter($this->env, $this->extensions['OxidEsales\Twig\Extensions\FormatPriceExtension']->formatPrice(twig_get_attribute($this->env, $this->source, ($context["oDetailsProduct"] ?? null), "getTPrice", [], "method", false, false, false, 278), ["currency" => ($context["currency"] ?? null)]), "html", null, true);
            echo "</del>
                            ";
        }
        // line 280
        echo "                        ";
        // line 281
        echo "                    ";
    }

    // line 300
    public function block_details_productmain_tobasket($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 301
        echo "                    ";
        // line 302
        echo "                        ";
        if ( !twig_get_attribute($this->env, $this->source, ($context["oDetailsProduct"] ?? null), "isNotBuyable", [], "method", false, false, false, 302)) {
            // line 303
            echo "                            <div class=\"tobasket-function input-group input-group-lg mb-3\">
                                <input type=\"text\" class=\"form-control\" id=\"amountToBasket\" name=\"am\" value=\"1\">
                                <button id=\"toBasket\" type=\"submit\"";
            // line 305
            if ( !($context["blCanBuy"] ?? null)) {
                echo " disabled";
            }
            echo " class=\"btn btn-highlight\">
                                    ";
            // line 306
            echo $this->extensions['OxidEsales\Twig\Extensions\TranslateExtension']->translate(["ident" => "TO_CART"]);
            echo "
                                </button>
                            </div>
                        ";
        }
        // line 310
        echo "                    ";
        // line 311
        echo "                ";
    }

    // line 313
    public function block_details_productmain_productlinksselector($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 314
        echo "                    ";
        $this->displayBlock('details_productmain_productlinks', $context, $blocks);
        // line 354
        echo "                ";
    }

    // line 314
    public function block_details_productmain_productlinks($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 315
        echo "                        <div class=\"row g-3 product-links mb-md-5\">

                            ";
        // line 317
        if (twig_get_attribute($this->env, $this->source, ($context["oViewConf"] ?? null), "getShowCompareList", [], "method", false, false, false, 317)) {
            // line 318
            echo "                                <div class=\"col-6\">
                                    ";
            // line 319
            $parameters = ["testid" => "", "type" => "compare", "aid" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["oDetailsProduct"] ?? null), "oxarticles__oxid", [], "any", false, false, false, 319), "value", [], "any", false, false, false, 319), "anid" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["oDetailsProduct"] ?? null), "oxarticles__oxnid", [], "any", false, false, false, 319), "value", [], "any", false, false, false, 319), "in_list" => twig_get_attribute($this->env, $this->source, ($context["oDetailsProduct"] ?? null), "isOnComparisonList", [], "method", false, false, false, 319), "page" => twig_get_attribute($this->env, $this->source, ($context["oView"] ?? null), "getActPage", [], "method", false, false, false, 319), "text_to_id" => "COMPARE", "text_from_id" => "REMOVE_FROM_COMPARE_LIST"];
            if (!empty($context["_render4cache"])) {
                echo $this->extensions['OxidEsales\Twig\Extensions\IncludeExtension']->renderForCache(array_merge($parameters, ['file' => "@__main__/page/details/inc/compare_links.html.twig"]));
            } else {
                $parameters = $this->extensions['OxidEsales\Twig\Extensions\IncludeExtension']->includeDynamicPrefix($parameters);
                $this->loadTemplate("@__main__/page/details/inc/compare_links.html.twig", "@__main__/page/details/inc/productmain.html.twig", 319)->display(array_merge($context, $parameters));
            }
            // line 320
            echo "                                </div>
                            ";
        }
        // line 322
        echo "
                            ";
        // line 323
        if (twig_get_attribute($this->env, $this->source, ($context["oViewConf"] ?? null), "getShowListmania", [], "method", false, false, false, 323)) {
            // line 324
            echo "                                <div class=\"col-6\">
                                    ";
            // line 325
            if (($context["oxcmp_user"] ?? null)) {
                // line 326
                echo "                                        <a class=\"btn btn-sm btn-light w-100\" id=\"recommList\" href=\"";
                echo $this->extensions['OxidEsales\Twig\Extensions\UrlExtension']->getSeoUrl(["ident" => (twig_get_attribute($this->env, $this->source, ($context["oViewConf"] ?? null), "getSelfLink", [], "method", false, false, false, 326) . "cl=recommadd"), "params" => (((((("aid=" . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["oDetailsProduct"] ?? null), "oxarticles__oxnid", [], "any", false, false, false, 326), "value", [], "any", false, false, false, 326)) . "&amp;anid=") . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["oDetailsProduct"] ?? null), "oxarticles__oxnid", [], "any", false, false, false, 326), "value", [], "any", false, false, false, 326)) . twig_get_attribute($this->env, $this->source, ($context["oViewConf"] ?? null), "getNavUrlParams", [], "method", false, false, false, 326)) . "&amp;stoken=") . twig_get_attribute($this->env, $this->source, ($context["oViewConf"] ?? null), "getSessionChallengeToken", [], "method", false, false, false, 326))]);
                echo "\">";
                echo $this->extensions['OxidEsales\Twig\Extensions\TranslateExtension']->translate(["ident" => "ADD_TO_LISTMANIA_LIST"]);
                echo "</a>
                                    ";
            } else {
                // line 328
                echo "                                        <a class=\"btn btn-sm btn-light w-100\" id=\"loginToRecommlist\" href=\"";
                echo $this->extensions['OxidEsales\Twig\Extensions\UrlExtension']->getSeoUrl(["ident" => (twig_get_attribute($this->env, $this->source, ($context["oViewConf"] ?? null), "getSelfLink", [], "method", false, false, false, 328) . "cl=account"), "params" => (((("anid=" . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["oDetailsProduct"] ?? null), "oxarticles__oxnid", [], "any", false, false, false, 328), "value", [], "any", false, false, false, 328)) . "&amp;sourcecl=") . twig_get_attribute($this->env, $this->source, ($context["oViewConf"] ?? null), "getTopActiveClassName", [], "method", false, false, false, 328)) . twig_get_attribute($this->env, $this->source, ($context["oViewConf"] ?? null), "getNavUrlParams", [], "method", false, false, false, 328))]);
                echo "\">";
                echo $this->extensions['OxidEsales\Twig\Extensions\TranslateExtension']->translate(["ident" => "ADD_TO_LISTMANIA_LIST"]);
                echo "</a>
                                    ";
            }
            // line 330
            echo "                                </div>
                            ";
        }
        // line 332
        echo "
                            <div class=\"col-6\">
                                ";
        // line 334
        $this->displayBlock('details_productmain_addtowishlist', $context, $blocks);
        // line 341
        echo "                            </div>

                            ";
        // line 343
        if (twig_get_attribute($this->env, $this->source, ($context["oViewConf"] ?? null), "getShowWishlist", [], "method", false, false, false, 343)) {
            // line 344
            echo "                                <div class=\"col-6\">
                                    ";
            // line 345
            if (($context["oxcmp_user"] ?? null)) {
                // line 346
                echo "                                        <a class=\"btn btn-sm btn-light w-100\" id=\"linkToWishList\" href=\"";
                echo $this->extensions['OxidEsales\Twig\Extensions\UrlExtension']->getSeoUrl(["ident" => ((twig_get_attribute($this->env, $this->source, ($context["oViewConf"] ?? null), "getSelfLink", [], "method", false, false, false, 346) . "cl=") . twig_get_attribute($this->env, $this->source, ($context["oViewConf"] ?? null), "getTopActiveClassName", [], "method", false, false, false, 346)), "params" => ((((((("aid=" . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["oDetailsProduct"] ?? null), "oxarticles__oxnid", [], "any", false, false, false, 346), "value", [], "any", false, false, false, 346)) . "&anid=") . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["oDetailsProduct"] ?? null), "oxarticles__oxnid", [], "any", false, false, false, 346), "value", [], "any", false, false, false, 346)) . "&amp;fnc=towishlist&amp;am=1") . twig_get_attribute($this->env, $this->source, ($context["oViewConf"] ?? null), "getNavUrlParams", [], "method", false, false, false, 346)) . "&amp;stoken=") . twig_get_attribute($this->env, $this->source, ($context["oViewConf"] ?? null), "getSessionChallengeToken", [], "method", false, false, false, 346))]);
                echo "\">";
                echo $this->extensions['OxidEsales\Twig\Extensions\TranslateExtension']->translate(["ident" => "ADD_TO_GIFT_REGISTRY"]);
                echo "</a>
                                    ";
            } else {
                // line 348
                echo "                                        <a class=\"btn btn-sm btn-light w-100\" id=\"loginToWish\" href=\"";
                echo $this->extensions['OxidEsales\Twig\Extensions\UrlExtension']->getSeoUrl(["ident" => (twig_get_attribute($this->env, $this->source, ($context["oViewConf"] ?? null), "getSelfLink", [], "method", false, false, false, 348) . "cl=account"), "params" => (((("anid=" . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["oDetailsProduct"] ?? null), "oxarticles__oxnid", [], "any", false, false, false, 348), "value", [], "any", false, false, false, 348)) . "&amp;sourcecl=") . twig_get_attribute($this->env, $this->source, ($context["oViewConf"] ?? null), "getTopActiveClassName", [], "method", false, false, false, 348)) . twig_get_attribute($this->env, $this->source, ($context["oViewConf"] ?? null), "getNavUrlParams", [], "method", false, false, false, 348))]);
                echo "\">";
                echo $this->extensions['OxidEsales\Twig\Extensions\TranslateExtension']->translate(["ident" => "ADD_TO_GIFT_REGISTRY"]);
                echo "</a>
                                    ";
            }
            // line 350
            echo "                                </div>
                            ";
        }
        // line 352
        echo "                        </div>
                    ";
    }

    // line 334
    public function block_details_productmain_addtowishlist($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 335
        echo "                                    ";
        if (($context["oxcmp_user"] ?? null)) {
            // line 336
            echo "                                        <a class=\"btn btn-sm btn-light w-100\" id=\"linkToNoticeList\" href=\"";
            echo $this->extensions['OxidEsales\Twig\Extensions\UrlExtension']->getSeoUrl(["ident" => ((twig_get_attribute($this->env, $this->source, ($context["oViewConf"] ?? null), "getSelfLink", [], "method", false, false, false, 336) . "cl=") . twig_get_attribute($this->env, $this->source, ($context["oViewConf"] ?? null), "getTopActiveClassName", [], "method", false, false, false, 336)), "params" => ((((((("aid=" . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["oDetailsProduct"] ?? null), "oxarticles__oxnid", [], "any", false, false, false, 336), "value", [], "any", false, false, false, 336)) . "&amp;anid=") . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["oDetailsProduct"] ?? null), "oxarticles__oxnid", [], "any", false, false, false, 336), "value", [], "any", false, false, false, 336)) . "&amp;fnc=tonoticelist&amp;am=1") . twig_get_attribute($this->env, $this->source, ($context["oViewConf"] ?? null), "getNavUrlParams", [], "method", false, false, false, 336)) . "&amp;stoken=") . twig_get_attribute($this->env, $this->source, ($context["oViewConf"] ?? null), "getSessionChallengeToken", [], "method", false, false, false, 336))]);
            echo "\">";
            echo $this->extensions['OxidEsales\Twig\Extensions\TranslateExtension']->translate(["ident" => "ADD_TO_WISH_LIST"]);
            echo "</a>
                                    ";
        } else {
            // line 338
            echo "                                        <a class=\"btn btn-sm btn-light w-100\" id=\"loginToNotice\" href=\"";
            echo $this->extensions['OxidEsales\Twig\Extensions\UrlExtension']->getSeoUrl(["ident" => (twig_get_attribute($this->env, $this->source, ($context["oViewConf"] ?? null), "getSelfLink", [], "method", false, false, false, 338) . "cl=account"), "params" => (((("anid=" . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["oDetailsProduct"] ?? null), "oxarticles__oxnid", [], "any", false, false, false, 338), "value", [], "any", false, false, false, 338)) . "&amp;sourcecl=") . twig_get_attribute($this->env, $this->source, ($context["oViewConf"] ?? null), "getTopActiveClassName", [], "method", false, false, false, 338)) . twig_get_attribute($this->env, $this->source, ($context["oViewConf"] ?? null), "getNavUrlParams", [], "method", false, false, false, 338))]);
            echo "\">";
            echo $this->extensions['OxidEsales\Twig\Extensions\TranslateExtension']->translate(["ident" => "ADD_TO_WISH_LIST"]);
            echo "</a>
                                    ";
        }
        // line 340
        echo "                                ";
    }

    // line 356
    public function block_details_productmain_social($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 361
    public function block_details_productmain_content($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@__main__/page/details/inc/productmain.html.twig";
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
        return array (  1247 => 361,  1241 => 356,  1237 => 340,  1229 => 338,  1221 => 336,  1218 => 335,  1214 => 334,  1209 => 352,  1205 => 350,  1197 => 348,  1189 => 346,  1187 => 345,  1184 => 344,  1182 => 343,  1178 => 341,  1176 => 334,  1172 => 332,  1168 => 330,  1160 => 328,  1152 => 326,  1150 => 325,  1147 => 324,  1145 => 323,  1142 => 322,  1138 => 320,  1130 => 319,  1127 => 318,  1125 => 317,  1121 => 315,  1117 => 314,  1113 => 354,  1110 => 314,  1106 => 313,  1102 => 311,  1100 => 310,  1093 => 306,  1087 => 305,  1083 => 303,  1080 => 302,  1078 => 301,  1074 => 300,  1070 => 281,  1068 => 280,  1062 => 278,  1059 => 277,  1057 => 276,  1053 => 275,  1049 => 271,  1042 => 267,  1038 => 266,  1031 => 265,  1028 => 264,  1025 => 263,  1022 => 262,  1019 => 261,  1016 => 260,  1013 => 259,  1010 => 258,  1008 => 257,  1005 => 256,  1002 => 255,  998 => 254,  994 => 273,  992 => 272,  989 => 254,  987 => 253,  983 => 252,  977 => 250,  973 => 247,  967 => 244,  963 => 243,  960 => 242,  957 => 241,  953 => 240,  949 => 236,  940 => 234,  934 => 231,  931 => 230,  928 => 229,  924 => 228,  919 => 224,  916 => 223,  910 => 221,  908 => 220,  903 => 219,  901 => 218,  898 => 217,  896 => 216,  891 => 215,  888 => 214,  880 => 212,  877 => 211,  871 => 209,  869 => 208,  864 => 207,  862 => 206,  859 => 205,  857 => 204,  854 => 203,  850 => 202,  846 => 198,  838 => 195,  832 => 192,  829 => 191,  826 => 190,  822 => 189,  818 => 184,  816 => 183,  813 => 182,  810 => 181,  807 => 180,  805 => 179,  801 => 178,  793 => 172,  788 => 171,  784 => 170,  780 => 159,  777 => 158,  773 => 156,  759 => 155,  756 => 154,  739 => 153,  736 => 152,  733 => 151,  730 => 150,  727 => 149,  723 => 148,  719 => 145,  715 => 143,  701 => 142,  698 => 141,  695 => 140,  692 => 139,  689 => 138,  671 => 137,  668 => 136,  661 => 132,  658 => 131,  654 => 130,  650 => 116,  648 => 115,  642 => 113,  639 => 112,  637 => 111,  633 => 110,  629 => 106,  626 => 105,  622 => 104,  613 => 98,  610 => 97,  606 => 96,  602 => 94,  596 => 91,  589 => 90,  586 => 89,  582 => 88,  575 => 81,  562 => 78,  558 => 76,  555 => 75,  552 => 74,  548 => 73,  544 => 71,  540 => 69,  528 => 66,  523 => 65,  519 => 64,  516 => 63,  514 => 62,  511 => 61,  490 => 59,  473 => 58,  469 => 56,  466 => 55,  462 => 54,  457 => 364,  456 => 363,  453 => 362,  451 => 361,  445 => 357,  443 => 356,  440 => 355,  438 => 313,  435 => 312,  433 => 300,  430 => 299,  427 => 298,  424 => 297,  422 => 296,  418 => 294,  415 => 293,  405 => 290,  402 => 289,  392 => 286,  389 => 285,  386 => 284,  384 => 283,  381 => 282,  379 => 275,  376 => 274,  374 => 252,  371 => 251,  369 => 250,  365 => 248,  362 => 240,  358 => 237,  355 => 228,  352 => 226,  349 => 202,  346 => 200,  344 => 199,  341 => 189,  338 => 188,  336 => 187,  333 => 185,  330 => 178,  327 => 176,  323 => 174,  321 => 170,  315 => 167,  312 => 166,  309 => 165,  305 => 162,  302 => 160,  299 => 148,  296 => 146,  293 => 130,  290 => 128,  287 => 127,  284 => 126,  281 => 125,  278 => 124,  275 => 123,  272 => 122,  269 => 121,  267 => 120,  264 => 119,  262 => 118,  259 => 117,  256 => 110,  253 => 108,  250 => 107,  247 => 104,  244 => 103,  241 => 101,  239 => 96,  236 => 95,  234 => 88,  229 => 85,  226 => 54,  219 => 48,  215 => 45,  213 => 44,  204 => 42,  200 => 41,  196 => 40,  192 => 39,  188 => 38,  184 => 37,  179 => 36,  178 => 35,  175 => 34,  171 => 32,  165 => 30,  163 => 29,  159 => 28,  151 => 27,  147 => 26,  142 => 24,  138 => 23,  134 => 22,  130 => 21,  126 => 20,  122 => 19,  119 => 18,  113 => 17,  110 => 16,  107 => 15,  102 => 14,  99 => 13,  93 => 12,  90 => 11,  85 => 10,  82 => 9,  77 => 8,  74 => 7,  72 => 6,  69 => 5,  67 => 4,  65 => 3,  63 => 2,  60 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@__main__/page/details/inc/productmain.html.twig", "/var/www/html/source/Application/views/apex/tpl/page/details/inc/productmain.html.twig");
    }
}
