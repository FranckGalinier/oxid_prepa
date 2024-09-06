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

/* @__main__/bottomnaviitem.html.twig */
class __TwigTemplate_23b957ca9c8c672e4858cbbf2e81347c extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'admin_bottomnaviitem' => [$this, 'block_admin_bottomnaviitem'],
            'admin_bottomnavicustom' => [$this, 'block_admin_bottomnavicustom'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "</div>

<div class=\"actions\">
    ";
        // line 4
        ob_start(function () { return ''; });
        // line 5
        echo "        <ul>
            ";
        // line 6
        $this->displayBlock('admin_bottomnaviitem', $context, $blocks);
        // line 126
        echo "        </ul>
    ";
        $___internal_parse_0_ = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 4
        echo twig_spaceless($___internal_parse_0_);
        // line 128
        echo "</div>
";
    }

    // line 6
    public function block_admin_bottomnaviitem($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 7
        echo "                ";
        $context["allowSharedEdit"] = true;
        // line 8
        echo "                ";
        if ( !($context["disablenew"] ?? null)) {
            // line 9
            echo "                    ";
            // line 10
            echo "                    ";
            if (twig_get_attribute($this->env, $this->source, ($context["bottom_buttons"] ?? null), "user_new", [], "any", false, false, false, 10)) {
                // line 11
                echo "                        <li><a ";
                if ( !($context["firstitem"] ?? null)) {
                    echo "class=\"firstitem\"";
                    $context["firstitem"] = "1";
                }
                echo " id=\"btn.new\" href=\"#\" onClick=\"Javascript:top.oxid.admin.editThis( -1 );return false\" target=\"edit\">";
                echo $this->extensions['OxidEsales\Twig\Extensions\TranslateExtension']->translate(["ident" => "TOOLTIPS_NEWUSER"]);
                echo "</a> |</li>
                    ";
            }
            // line 13
            echo "                    ";
            if ((twig_get_attribute($this->env, $this->source, ($context["bottom_buttons"] ?? null), "user_newremark", [], "any", false, false, false, 13) && (($context["oxid"] ?? null) != "-1"))) {
                // line 14
                echo "                        <li><a ";
                if ( !($context["firstitem"] ?? null)) {
                    echo "class=\"firstitem\"";
                    $context["firstitem"] = "1";
                }
                echo " id=\"btn.newremark\" href=\"#\" onClick=\"Javascript:top.oxid.admin.changeEditBar('user_remark', 3); return false\" target=\"edit\">";
                echo $this->extensions['OxidEsales\Twig\Extensions\TranslateExtension']->translate(["ident" => "TOOLTIPS_NEWREMARK"]);
                echo "</a> |</li>
                    ";
            }
            // line 16
            echo "                    ";
            if ((twig_get_attribute($this->env, $this->source, ($context["bottom_buttons"] ?? null), "user_newaddress", [], "any", false, false, false, 16) && (($context["oxid"] ?? null) != "-1"))) {
                // line 17
                echo "                        <li><a ";
                if ( !($context["firstitem"] ?? null)) {
                    echo "class=\"firstitem\"";
                    $context["firstitem"] = "1";
                }
                echo " id=\"btn.newaddress\" href=\"#\" onClick=\"Javascript:top.oxid.admin.changeEditBar('user_address', 4); return false\" target=\"edit\">";
                echo $this->extensions['OxidEsales\Twig\Extensions\TranslateExtension']->translate(["ident" => "TOOLTIPS_NEWADDRESS"]);
                echo "</a> |</li>
                    ";
            }
            // line 19
            echo "                    ";
            // line 20
            echo "                    ";
            if (twig_get_attribute($this->env, $this->source, ($context["bottom_buttons"] ?? null), "payment_new", [], "any", false, false, false, 20)) {
                // line 21
                echo "                        <li><a ";
                if ( !($context["firstitem"] ?? null)) {
                    echo "class=\"firstitem\"";
                    $context["firstitem"] = "1";
                }
                echo " id=\"btn.new\" href=\"#\" onClick=\"Javascript:top.oxid.admin.editThis( -1 );return false\" target=\"edit\">";
                echo $this->extensions['OxidEsales\Twig\Extensions\TranslateExtension']->translate(["ident" => "TOOLTIPS_NEWPAYMENT"]);
                echo "</a> |</li>
                    ";
            }
            // line 23
            echo "                    ";
            // line 24
            echo "                    ";
            if (((twig_get_attribute($this->env, $this->source, ($context["bottom_buttons"] ?? null), "shop_new", [], "any", false, false, false, 24) && twig_get_attribute($this->env, $this->source, ($context["oView"] ?? null), "isMall", [], "method", false, false, false, 24)) && (($context["malladmin"] ?? null) == 1))) {
                // line 25
                echo "                        <li><a ";
                if ( !($context["firstitem"] ?? null)) {
                    echo "class=\"firstitem\"";
                    $context["firstitem"] = "1";
                }
                echo " id=\"btn.new\" href=\"#\" onClick=\"Javascript:editThis( -1 );return false\" target=\"edit\">";
                echo $this->extensions['OxidEsales\Twig\Extensions\TranslateExtension']->translate(["ident" => "TOOLTIPS_NEWSHOP"]);
                echo "</a> |</li>
                    ";
            }
            // line 27
            echo "                    ";
            // line 28
            echo "                    ";
            if (twig_get_attribute($this->env, $this->source, ($context["bottom_buttons"] ?? null), "usergroup_new", [], "any", false, false, false, 28)) {
                // line 29
                echo "                        <li><a ";
                if ( !($context["firstitem"] ?? null)) {
                    echo "class=\"firstitem\"";
                    $context["firstitem"] = "1";
                }
                echo " id=\"btn.new\" href=\"#\" onClick=\"Javascript:top.oxid.admin.editThis( -1 );return false\" target=\"edit\">";
                echo $this->extensions['OxidEsales\Twig\Extensions\TranslateExtension']->translate(["ident" => "TOOLTIPS_NEWUSERGROUP"]);
                echo "</a> |</li>
                    ";
            }
            // line 31
            echo "                    ";
            // line 32
            echo "                    ";
            if (twig_get_attribute($this->env, $this->source, ($context["bottom_buttons"] ?? null), "category_new", [], "any", false, false, false, 32)) {
                // line 33
                echo "                        <li><a ";
                if ( !($context["firstitem"] ?? null)) {
                    echo "class=\"firstitem\"";
                    $context["firstitem"] = "1";
                }
                echo " id=\"btn.new\" href=\"#\" onClick=\"Javascript:top.oxid.admin.editThis( -1 );return false\" target=\"edit\">";
                echo $this->extensions['OxidEsales\Twig\Extensions\TranslateExtension']->translate(["ident" => "TOOLTIPS_NEWCATEGORY"]);
                echo "</a> |</li>
                    ";
            }
            // line 35
            echo "                    ";
            if (twig_get_attribute($this->env, $this->source, ($context["bottom_buttons"] ?? null), "category_refresh", [], "any", false, false, false, 35)) {
                // line 36
                echo "                        <li><a ";
                if ( !($context["firstitem"] ?? null)) {
                    echo "class=\"firstitem\"";
                    $context["firstitem"] = "1";
                }
                echo " id=\"btn.refresh\" href=\"#\" onClick=\"Javascript:var agree=confirm('";
                echo $this->extensions['OxidEsales\Twig\Extensions\TranslateExtension']->translate(["ident" => "BOTTOMNAVIITEM_ATTENTION"]);
                echo "');if (agree){top.oxid.admin.editThis( -1 );popupWin=window.open('";
                echo twig_replace_filter(twig_get_attribute($this->env, $this->source, ($context["oViewConf"] ?? null), "getSelfLink", [], "method", false, false, false, 36), ["&amp;" => "&"]);
                echo "&cl=category_update', 'remote', 'scrollbars=yes,width=500,height=400')}\" target=\"edit\">";
                echo $this->extensions['OxidEsales\Twig\Extensions\TranslateExtension']->translate(["ident" => "TOOLTIPS_NEWCATTREE"]);
                echo "</a> |</li>
                    ";
            }
            // line 38
            echo "                    ";
            if (twig_get_attribute($this->env, $this->source, ($context["bottom_buttons"] ?? null), "category_resetnrofarticles", [], "any", false, false, false, 38)) {
                // line 39
                echo "                        <li><a ";
                if ( !($context["firstitem"] ?? null)) {
                    echo "class=\"firstitem\"";
                    $context["firstitem"] = "1";
                }
                echo " id=\"btn.resetnrofarticles\" href=\"#\" onClick=\"Javascript:document.myedit.fnc.value='resetNrOfCatArticles';document.myedit.submit();\" target=\"edit\">";
                echo $this->extensions['OxidEsales\Twig\Extensions\TranslateExtension']->translate(["ident" => "TOOLTIPS_RESETNROFARTICLESINCAT"]);
                echo "</a> |</li>
                    ";
            }
            // line 41
            echo "                    ";
            // line 42
            echo "                    ";
            if (twig_get_attribute($this->env, $this->source, ($context["bottom_buttons"] ?? null), "article_new", [], "any", false, false, false, 42)) {
                // line 43
                echo "                        <li><a ";
                if ( !($context["firstitem"] ?? null)) {
                    echo "class=\"firstitem\"";
                    $context["firstitem"] = "1";
                }
                echo " id=\"btn.new\" href=\"#\" onClick=\"Javascript:top.oxid.admin.editThis( -1 );return false\" target=\"edit\">";
                echo $this->extensions['OxidEsales\Twig\Extensions\TranslateExtension']->translate(["ident" => "TOOLTIPS_NEWARTICLE"]);
                echo "</a> |</li>
                    ";
            }
            // line 45
            echo "                    ";
            if ((twig_get_attribute($this->env, $this->source, ($context["bottom_buttons"] ?? null), "article_preview", [], "any", false, false, false, 45) && (($context["oxid"] ?? null) !=  -1))) {
                // line 46
                echo "                        <li><a ";
                if ( !($context["firstitem"] ?? null)) {
                    echo "class=\"firstitem\"";
                    $context["firstitem"] = "1";
                }
                echo " id=\"btn.preview\" href=\"";
                if (($context["edit"] ?? null)) {
                    echo twig_get_attribute($this->env, $this->source, ($context["edit"] ?? null), "getStdLink", [], "method", false, false, false, 46);
                } else {
                    echo twig_get_attribute($this->env, $this->source, ($context["oViewConf"] ?? null), "getBaseDir", [], "method", false, false, false, 46);
                    echo "?cl=details&anid=";
                    echo twig_escape_filter($this->env, ($context["oxid"] ?? null), "html", null, true);
                }
                echo "&amp;preview=";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["oView"] ?? null), "getPreviewId", [], "method", false, false, false, 46), "html", null, true);
                echo "\" target=\"new\">";
                echo $this->extensions['OxidEsales\Twig\Extensions\TranslateExtension']->translate(["ident" => "TOOLTIPS_ARTICLEREVIEW"]);
                echo "</a> |</li>
                    ";
            }
            // line 48
            echo "                    ";
            // line 49
            echo "                    ";
            if (twig_get_attribute($this->env, $this->source, ($context["bottom_buttons"] ?? null), "attribute_new", [], "any", false, false, false, 49)) {
                // line 50
                echo "                        <li><a ";
                if ( !($context["firstitem"] ?? null)) {
                    echo "class=\"firstitem\"";
                    $context["firstitem"] = "1";
                }
                echo " id=\"btn.new\" href=\"#\" onClick=\"Javascript:top.oxid.admin.editThis( -1 );return false\" target=\"edit\">";
                echo $this->extensions['OxidEsales\Twig\Extensions\TranslateExtension']->translate(["ident" => "TOOLTIPS_NEWITEMS"]);
                echo "</a> |</li>
                    ";
            }
            // line 52
            echo "                    ";
            // line 53
            echo "                    ";
            if (twig_get_attribute($this->env, $this->source, ($context["bottom_buttons"] ?? null), "selectlist_new", [], "any", false, false, false, 53)) {
                // line 54
                echo "                        <li><a ";
                if ( !($context["firstitem"] ?? null)) {
                    echo "class=\"firstitem\"";
                    $context["firstitem"] = "1";
                }
                echo " id=\"btn.new\" href=\"#\" onClick=\"Javascript:top.oxid.admin.editThis( -1 );return false\" target=\"edit\">";
                echo $this->extensions['OxidEsales\Twig\Extensions\TranslateExtension']->translate(["ident" => "TOOLTIPS_NEWSELECTLIST"]);
                echo "</a> |</li>
                    ";
            }
            // line 56
            echo "                    ";
            // line 57
            echo "                    ";
            if (twig_get_attribute($this->env, $this->source, ($context["bottom_buttons"] ?? null), "discount_new", [], "any", false, false, false, 57)) {
                // line 58
                echo "                        <li><a ";
                if ( !($context["firstitem"] ?? null)) {
                    echo "class=\"firstitem\"";
                    $context["firstitem"] = "1";
                }
                echo " id=\"btn.new\" href=\"#\" onClick=\"Javascript:top.oxid.admin.editThis( -1 );return false\" target=\"edit\">";
                echo $this->extensions['OxidEsales\Twig\Extensions\TranslateExtension']->translate(["ident" => "TOOLTIPS_NEWDISCOUNT"]);
                echo "</a> |</li>
                    ";
            }
            // line 60
            echo "                    ";
            // line 61
            echo "                    ";
            if (twig_get_attribute($this->env, $this->source, ($context["bottom_buttons"] ?? null), "delivery_new", [], "any", false, false, false, 61)) {
                // line 62
                echo "                        <li><a ";
                if ( !($context["firstitem"] ?? null)) {
                    echo "class=\"firstitem\"";
                    $context["firstitem"] = "1";
                }
                echo " id=\"btn.new\" href=\"#\" onClick=\"Javascript:top.oxid.admin.editThis( -1 );return false\" target=\"edit\">";
                echo $this->extensions['OxidEsales\Twig\Extensions\TranslateExtension']->translate(["ident" => "TOOLTIPS_NEWDELIVERY"]);
                echo "</a> |</li>
                    ";
            }
            // line 64
            echo "                    ";
            // line 65
            echo "                    ";
            if (twig_get_attribute($this->env, $this->source, ($context["bottom_buttons"] ?? null), "deliveryset_new", [], "any", false, false, false, 65)) {
                // line 66
                echo "                        <li><a ";
                if ( !($context["firstitem"] ?? null)) {
                    echo "class=\"firstitem\"";
                    $context["firstitem"] = "1";
                }
                echo " id=\"btn.new\" href=\"#\" onClick=\"Javascript:top.oxid.admin.editThis( -1 );return false\" target=\"edit\">";
                echo $this->extensions['OxidEsales\Twig\Extensions\TranslateExtension']->translate(["ident" => "TOOLTIPS_NEWDELIVERYSET"]);
                echo "</a> |</li>
                    ";
            }
            // line 68
            echo "                    ";
            // line 69
            echo "                    ";
            if (twig_get_attribute($this->env, $this->source, ($context["bottom_buttons"] ?? null), "vat_new", [], "any", false, false, false, 69)) {
                // line 70
                echo "                        <li><a ";
                if ( !($context["firstitem"] ?? null)) {
                    echo "class=\"firstitem\"";
                    $context["firstitem"] = "1";
                }
                echo " id=\"btn.new\" href=\"#\" onClick=\"Javascript:top.oxid.admin.editThis( -1 );return false\" target=\"edit\">";
                echo $this->extensions['OxidEsales\Twig\Extensions\TranslateExtension']->translate(["ident" => "TOOLTIPS_NEWMWST"]);
                echo "</a> |</li>
                    ";
            }
            // line 72
            echo "                    ";
            // line 73
            echo "                    ";
            if (twig_get_attribute($this->env, $this->source, ($context["bottom_buttons"] ?? null), "links_new", [], "any", false, false, false, 73)) {
                // line 74
                echo "                        <li><a ";
                if ( !($context["firstitem"] ?? null)) {
                    echo "class=\"firstitem\"";
                    $context["firstitem"] = "1";
                }
                echo " id=\"btn.new\" href=\"#\" onClick=\"Javascript:top.oxid.admin.editThis( -1 );return false\" target=\"edit\">";
                echo $this->extensions['OxidEsales\Twig\Extensions\TranslateExtension']->translate(["ident" => "TOOLTIPS_NEWLINK"]);
                echo "</a> |</li>
                    ";
            }
            // line 76
            echo "                    ";
            // line 77
            echo "                    ";
            if (twig_get_attribute($this->env, $this->source, ($context["bottom_buttons"] ?? null), "voucher_new", [], "any", false, false, false, 77)) {
                // line 78
                echo "                        <li><a ";
                if ( !($context["firstitem"] ?? null)) {
                    echo "class=\"firstitem\"";
                    $context["firstitem"] = "1";
                }
                echo " id=\"btn.new\" href=\"#\" onClick=\"Javascript:top.oxid.admin.editThis( -1 );return false\" target=\"edit\">";
                echo $this->extensions['OxidEsales\Twig\Extensions\TranslateExtension']->translate(["ident" => "TOOLTIPS_NEWVOUCHER"]);
                echo "</a> |</li>
                    ";
            }
            // line 80
            echo "                    ";
            // line 81
            echo "                    ";
            if ((twig_get_attribute($this->env, $this->source, ($context["bottom_buttons"] ?? null), "order_newremark", [], "any", false, false, false, 81) && (($context["oxid"] ?? null) !=  -1))) {
                // line 82
                echo "                        <li><a ";
                if ( !($context["firstitem"] ?? null)) {
                    echo "class=\"firstitem\"";
                    $context["firstitem"] = "1";
                }
                echo " id=\"btn.newremark\" href=\"#\" onClick=\"Javascript:top.oxid.admin.changeEditBar('order_remark', 4);return false\" target=\"edit\">";
                echo $this->extensions['OxidEsales\Twig\Extensions\TranslateExtension']->translate(["ident" => "TOOLTIPS_NEWREMARK"]);
                echo "</a> |</li>
                    ";
            }
            // line 84
            echo "                    ";
            // line 85
            echo "                    ";
            // line 86
            echo "                    ";
            if (twig_get_attribute($this->env, $this->source, ($context["bottom_buttons"] ?? null), "country_new", [], "any", false, false, false, 86)) {
                // line 87
                echo "                        <li><a ";
                if ( !($context["firstitem"] ?? null)) {
                    echo "class=\"firstitem\"";
                    $context["firstitem"] = "1";
                }
                echo " id=\"btn.new\" href=\"#\" onClick=\"Javascript:top.oxid.admin.editThis( -1 );return false\" target=\"edit\">";
                echo $this->extensions['OxidEsales\Twig\Extensions\TranslateExtension']->translate(["ident" => "TOOLTIPS_NEWCOUNTRY"]);
                echo "</a> |</li>
                    ";
            }
            // line 89
            echo "                    ";
            // line 90
            echo "                    ";
            if (twig_get_attribute($this->env, $this->source, ($context["bottom_buttons"] ?? null), "language_new", [], "any", false, false, false, 90)) {
                // line 91
                echo "                        <li><a ";
                if ( !($context["firstitem"] ?? null)) {
                    echo "class=\"firstitem\"";
                    $context["firstitem"] = "1";
                }
                echo " id=\"btn.new\" href=\"#\" onClick=\"Javascript:top.oxid.admin.editThis( -1 );return false\" target=\"edit\">";
                echo $this->extensions['OxidEsales\Twig\Extensions\TranslateExtension']->translate(["ident" => "TOOLTIPS_NEWLANGUAGE"]);
                echo "</a> |</li>
                    ";
            }
            // line 93
            echo "                    ";
            // line 94
            echo "                    ";
            if (twig_get_attribute($this->env, $this->source, ($context["bottom_buttons"] ?? null), "vendor_new", [], "any", false, false, false, 94)) {
                // line 95
                echo "                        <li><a ";
                if ( !($context["firstitem"] ?? null)) {
                    echo "class=\"firstitem\"";
                    $context["firstitem"] = "1";
                }
                echo " id=\"btn.new\" href=\"#\" onClick=\"Javascript:top.oxid.admin.editThis( -1 );return false\" target=\"edit\">";
                echo $this->extensions['OxidEsales\Twig\Extensions\TranslateExtension']->translate(["ident" => "TOOLTIPS_NEWVENDOR"]);
                echo "</a> |</li>
                    ";
            }
            // line 97
            echo "                    ";
            if (twig_get_attribute($this->env, $this->source, ($context["bottom_buttons"] ?? null), "vendor_resetnrofarticles", [], "any", false, false, false, 97)) {
                // line 98
                echo "                        <li><a ";
                if ( !($context["firstitem"] ?? null)) {
                    echo "class=\"firstitem\"";
                    $context["firstitem"] = "1";
                }
                echo " id=\"btn.resetnrofarticles\" href=\"#\" onClick=\"Javascript:document.myedit.fnc.value='resetNrOfVendorArticles';document.myedit.submit();\" target=\"edit\">";
                echo $this->extensions['OxidEsales\Twig\Extensions\TranslateExtension']->translate(["ident" => "TOOLTIPS_RESETNROFARTICLESINVND"]);
                echo "</a> |</li>
                    ";
            }
            // line 100
            echo "                    ";
            // line 101
            echo "                    ";
            if (twig_get_attribute($this->env, $this->source, ($context["bottom_buttons"] ?? null), "manufacturer_new", [], "any", false, false, false, 101)) {
                // line 102
                echo "                        <li><a ";
                if ( !($context["firstitem"] ?? null)) {
                    echo "class=\"firstitem\"";
                    $context["firstitem"] = "1";
                }
                echo " id=\"btn.new\" href=\"#\" onClick=\"Javascript:top.oxid.admin.editThis( -1 );return false\" target=\"edit\">";
                echo $this->extensions['OxidEsales\Twig\Extensions\TranslateExtension']->translate(["ident" => "TOOLTIPS_NEWMANUFACTURER"]);
                echo "</a> |</li>
                    ";
            }
            // line 104
            echo "                    ";
            if (twig_get_attribute($this->env, $this->source, ($context["bottom_buttons"] ?? null), "manufacturer_resetnrofarticles", [], "any", false, false, false, 104)) {
                // line 105
                echo "                        <li><a ";
                if ( !($context["firstitem"] ?? null)) {
                    echo "class=\"firstitem\"";
                    $context["firstitem"] = "1";
                }
                echo " id=\"btn.resetnrofarticles\" href=\"#\" onClick=\"Javascript:document.myedit.fnc.value='resetNrOfManufacturerArticles';document.myedit.submit();\" target=\"edit\">";
                echo $this->extensions['OxidEsales\Twig\Extensions\TranslateExtension']->translate(["ident" => "TOOLTIPS_RESETNROFARTICLESINMAN"]);
                echo "</a> |</li>
                    ";
            }
            // line 107
            echo "                    ";
            // line 108
            echo "                    ";
            if (twig_get_attribute($this->env, $this->source, ($context["bottom_buttons"] ?? null), "wrapping_new", [], "any", false, false, false, 108)) {
                // line 109
                echo "                        <li><a ";
                if ( !($context["firstitem"] ?? null)) {
                    echo "class=\"firstitem\"";
                    $context["firstitem"] = "1";
                }
                echo " id=\"btn.new\" href=\"#\" onClick=\"Javascript:top.oxid.admin.editThis( -1 );return false\" target=\"edit\">";
                echo $this->extensions['OxidEsales\Twig\Extensions\TranslateExtension']->translate(["ident" => "TOOLTIPS_NEWWRAPPING"]);
                echo "</a> |</li>
                    ";
            }
            // line 111
            echo "                    ";
            // line 112
            echo "                    ";
            if (twig_get_attribute($this->env, $this->source, ($context["bottom_buttons"] ?? null), "content_new", [], "any", false, false, false, 112)) {
                // line 113
                echo "                        <li><a ";
                if ( !($context["firstitem"] ?? null)) {
                    echo "class=\"firstitem\"";
                    $context["firstitem"] = "1";
                }
                echo " id=\"btn.new\" href=\"#\" onClick=\"Javascript:top.oxid.admin.editThis( -1 );return false\" target=\"edit\">";
                echo $this->extensions['OxidEsales\Twig\Extensions\TranslateExtension']->translate(["ident" => "TOOLTIPS_NEWCONTENT"]);
                echo "</a> |</li>
                    ";
            }
            // line 115
            echo "                ";
        }
        // line 116
        echo "
                ";
        // line 117
        $this->displayBlock('admin_bottomnavicustom', $context, $blocks);
        // line 120
        echo "
                ";
        // line 121
        if (($context["sHelpURL"] ?? null)) {
            // line 122
            echo "                    ";
            // line 123
            echo "                    <li><a ";
            if ( !($context["firstitem"] ?? null)) {
                echo "class=\"firstitem\"";
                $context["firstitem"] = "1";
            }
            echo " id=\"btn.help\" href=\"";
            echo ($context["sHelpURL"] ?? null);
            echo "/";
            echo twig_escape_filter($this->env, twig_lower_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["oViewConf"] ?? null), "getActiveClassName", [], "method", false, false, false, 123)), "html", null, true);
            echo ".html\" OnClick=\"window.open('";
            echo ($context["sHelpURL"] ?? null);
            echo "/";
            echo twig_escape_filter($this->env, twig_lower_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["oViewConf"] ?? null), "getActiveClassName", [], "method", false, false, false, 123)), "html", null, true);
            echo ".html','OXID_Help','width=800,height=600,resizable=no,scrollbars=yes');return false;\">";
            echo $this->extensions['OxidEsales\Twig\Extensions\TranslateExtension']->translate(["ident" => "TOOLTIPS_OPENHELP"]);
            echo "</a></li>
                ";
        }
        // line 125
        echo "            ";
    }

    // line 117
    public function block_admin_bottomnavicustom($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 118
        echo "                    ";
        $this->loadTemplate("@__main__/bottomnavicustom.html.twig", "@__main__/bottomnaviitem.html.twig", 118)->display($context);
        // line 119
        echo "                ";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@__main__/bottomnaviitem.html.twig";
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
        return array (  567 => 119,  564 => 118,  560 => 117,  556 => 125,  537 => 123,  535 => 122,  533 => 121,  530 => 120,  528 => 117,  525 => 116,  522 => 115,  511 => 113,  508 => 112,  506 => 111,  495 => 109,  492 => 108,  490 => 107,  479 => 105,  476 => 104,  465 => 102,  462 => 101,  460 => 100,  449 => 98,  446 => 97,  435 => 95,  432 => 94,  430 => 93,  419 => 91,  416 => 90,  414 => 89,  403 => 87,  400 => 86,  398 => 85,  396 => 84,  385 => 82,  382 => 81,  380 => 80,  369 => 78,  366 => 77,  364 => 76,  353 => 74,  350 => 73,  348 => 72,  337 => 70,  334 => 69,  332 => 68,  321 => 66,  318 => 65,  316 => 64,  305 => 62,  302 => 61,  300 => 60,  289 => 58,  286 => 57,  284 => 56,  273 => 54,  270 => 53,  268 => 52,  257 => 50,  254 => 49,  252 => 48,  231 => 46,  228 => 45,  217 => 43,  214 => 42,  212 => 41,  201 => 39,  198 => 38,  183 => 36,  180 => 35,  169 => 33,  166 => 32,  164 => 31,  153 => 29,  150 => 28,  148 => 27,  137 => 25,  134 => 24,  132 => 23,  121 => 21,  118 => 20,  116 => 19,  105 => 17,  102 => 16,  91 => 14,  88 => 13,  77 => 11,  74 => 10,  72 => 9,  69 => 8,  66 => 7,  62 => 6,  57 => 128,  55 => 4,  51 => 126,  49 => 6,  46 => 5,  44 => 4,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@__main__/bottomnaviitem.html.twig", "/var/www/html/source/Application/views/admin_twig/tpl/bottomnaviitem.html.twig");
    }
}
