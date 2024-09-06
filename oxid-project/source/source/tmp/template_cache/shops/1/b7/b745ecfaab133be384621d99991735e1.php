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

/* @__main__/widget/footer/services.html.twig */
class __TwigTemplate_eba6bd3b4ac53ec0fd6e2ed6405f7680 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'footer_services' => [$this, 'block_footer_services'],
            'footer_services_items' => [$this, 'block_footer_services_items'],
            'footer_services_cart' => [$this, 'block_footer_services_cart'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        $this->displayBlock('footer_services', $context, $blocks);
    }

    public function block_footer_services($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 2
        echo "    <nav class=\"nav flex-column\">
        ";
        // line 3
        $this->displayBlock('footer_services_items', $context, $blocks);
        // line 42
        echo "    </nav>
";
    }

    // line 3
    public function block_footer_services_items($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 4
        echo "            <a class=\"nav-link\" href=\"";
        echo $this->extensions['OxidEsales\Twig\Extensions\UrlExtension']->getSeoUrl(["ident" => (twig_get_attribute($this->env, $this->source, ($context["oViewConf"] ?? null), "getSelfLink", [], "method", false, false, false, 4) . "cl=contact")]);
        echo "\">";
        echo $this->extensions['OxidEsales\Twig\Extensions\TranslateExtension']->translate(["ident" => "CONTACT"]);
        echo "</a>
            ";
        // line 5
        if (twig_get_attribute($this->env, $this->source, ($context["oViewConf"] ?? null), "getViewThemeParam", ["blFooterShowHelp"], "method", false, false, false, 5)) {
            // line 6
            echo "                <a class=\"nav-link\" href=\"";
            echo twig_get_attribute($this->env, $this->source, ($context["oViewConf"] ?? null), "getHelpPageLink", [], "method", false, false, false, 6);
            echo "\">";
            echo $this->extensions['OxidEsales\Twig\Extensions\TranslateExtension']->translate(["ident" => "HELP"]);
            echo "</a>
            ";
        }
        // line 8
        echo "            ";
        if (twig_get_attribute($this->env, $this->source, ($context["oViewConf"] ?? null), "getViewThemeParam", ["blFooterShowLinks"], "method", false, false, false, 8)) {
            // line 9
            echo "                <a class=\"nav-link\" href=\"";
            echo $this->extensions['OxidEsales\Twig\Extensions\UrlExtension']->getSeoUrl(["ident" => (twig_get_attribute($this->env, $this->source, ($context["oViewConf"] ?? null), "getSelfLink", [], "method", false, false, false, 9) . "cl=links")]);
            echo "\">";
            echo $this->extensions['OxidEsales\Twig\Extensions\TranslateExtension']->translate(["ident" => "LINKS"]);
            echo "</a>
            ";
        }
        // line 11
        echo "            ";
        if (twig_get_attribute($this->env, $this->source, ($context["oView"] ?? null), "isActive", ["Invitations"], "method", false, false, false, 11)) {
            // line 12
            echo "                <a class=\"nav-link\" href=\"";
            echo $this->extensions['OxidEsales\Twig\Extensions\UrlExtension']->getSeoUrl(["ident" => (twig_get_attribute($this->env, $this->source, ($context["oViewConf"] ?? null), "getSelfLink", [], "method", false, false, false, 12) . "cl=invite")]);
            echo "\">";
            echo $this->extensions['OxidEsales\Twig\Extensions\TranslateExtension']->translate(["ident" => "INVITE_YOUR_FRIENDS"]);
            echo "</a>
            ";
        }
        // line 14
        echo "            ";
        // line 15
        echo "                ";
        $this->displayBlock('footer_services_cart', $context, $blocks);
        // line 21
        echo "            ";
        // line 22
        echo "            <a class=\"nav-link\" href=\"";
        echo $this->extensions['OxidEsales\Twig\Extensions\UrlExtension']->getSeoUrl(["ident" => (twig_get_attribute($this->env, $this->source, ($context["oViewConf"] ?? null), "getSelfLink", [], "method", false, false, false, 22) . "cl=account")]);
        echo "\">";
        echo $this->extensions['OxidEsales\Twig\Extensions\TranslateExtension']->translate(["ident" => "ACCOUNT"]);
        echo "</a>

            <a class=\"nav-link\" href=\"";
        // line 24
        echo $this->extensions['OxidEsales\Twig\Extensions\UrlExtension']->getSeoUrl(["ident" => (twig_get_attribute($this->env, $this->source, ($context["oViewConf"] ?? null), "getSelfLink", [], "method", false, false, false, 24) . "cl=account_noticelist")]);
        echo "\">
                ";
        // line 25
        echo $this->extensions['OxidEsales\Twig\Extensions\TranslateExtension']->translate(["ident" => "WISH_LIST"]);
        echo "
                ";
        // line 26
        if ((($context["oxcmp_user"] ?? null) && twig_get_attribute($this->env, $this->source, ($context["oxcmp_user"] ?? null), "getNoticeListArtCnt", [], "method", false, false, false, 26))) {
            echo " <span class=\"badge bg-secondary rounded-pill js-noticeListCnt\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["oxcmp_user"] ?? null), "getNoticeListArtCnt", [], "method", false, false, false, 26), "html", null, true);
            echo "</span>";
        }
        // line 27
        echo "            </a>

            ";
        // line 29
        if (twig_get_attribute($this->env, $this->source, ($context["oViewConf"] ?? null), "getShowWishlist", [], "method", false, false, false, 29)) {
            // line 30
            echo "                <a class=\"nav-link\" href=\"";
            echo $this->extensions['OxidEsales\Twig\Extensions\UrlExtension']->getSeoUrl(["ident" => (twig_get_attribute($this->env, $this->source, ($context["oViewConf"] ?? null), "getSelfLink", [], "method", false, false, false, 30) . "cl=account_wishlist")]);
            echo "\">
                    ";
            // line 31
            echo $this->extensions['OxidEsales\Twig\Extensions\TranslateExtension']->translate(["ident" => "MY_GIFT_REGISTRY"]);
            echo "
                    ";
            // line 32
            if ((($context["oxcmp_user"] ?? null) && twig_get_attribute($this->env, $this->source, ($context["oxcmp_user"] ?? null), "getWishListArtCnt", [], "method", false, false, false, 32))) {
                echo " <span class=\"badge bg-secondary rounded-pill\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["oxcmp_user"] ?? null), "getWishListArtCnt", [], "method", false, false, false, 32), "html", null, true);
                echo "</span>";
            }
            // line 33
            echo "                </a>
                <a class=\"nav-link\" href=\"";
            // line 34
            echo $this->extensions['OxidEsales\Twig\Extensions\UrlExtension']->getSeoUrl(["ident" => (twig_get_attribute($this->env, $this->source, ($context["oViewConf"] ?? null), "getSelfLink", [], "method", false, false, false, 34) . "cl=wishlist"), "params" => ("wishid=" . twig_get_attribute($this->env, $this->source, ($context["oView"] ?? null), "getWishlistUserId", [], "method", false, false, false, 34))]);
            echo "\">
                    ";
            // line 35
            echo $this->extensions['OxidEsales\Twig\Extensions\TranslateExtension']->translate(["ident" => "PUBLIC_GIFT_REGISTRIES"]);
            echo "
                </a>
            ";
        }
        // line 38
        echo "            ";
        if (twig_get_attribute($this->env, $this->source, ($context["oView"] ?? null), "isEnabledDownloadableFiles", [], "method", false, false, false, 38)) {
            // line 39
            echo "                <a class=\"nav-link\" href=\"";
            echo $this->extensions['OxidEsales\Twig\Extensions\UrlExtension']->getSeoUrl(["ident" => (twig_get_attribute($this->env, $this->source, ($context["oViewConf"] ?? null), "getSelfLink", [], "method", false, false, false, 39) . "cl=account_downloads")]);
            echo "\">";
            echo $this->extensions['OxidEsales\Twig\Extensions\TranslateExtension']->translate(["ident" => "MY_DOWNLOADS"]);
            echo "</a>
            ";
        }
        // line 41
        echo "        ";
    }

    // line 15
    public function block_footer_services_cart($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 16
        echo "                    <a class=\"nav-link\" href=\"";
        echo $this->extensions['OxidEsales\Twig\Extensions\UrlExtension']->getSeoUrl(["ident" => twig_get_attribute($this->env, $this->source, ($context["oViewConf"] ?? null), "getBasketLink", [], "method", false, false, false, 16)]);
        echo "\">
                        ";
        // line 17
        echo $this->extensions['OxidEsales\Twig\Extensions\TranslateExtension']->translate(["ident" => "CART"]);
        echo "
                        ";
        // line 18
        if ((($context["oxcmp_basket"] ?? null) && (twig_get_attribute($this->env, $this->source, ($context["oxcmp_basket"] ?? null), "getItemsCount", [], "method", false, false, false, 18) > 0))) {
            echo " <span class=\"badge bg-secondary rounded-pill\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["oxcmp_basket"] ?? null), "getItemsCount", [], "method", false, false, false, 18), "html", null, true);
            echo "</span>";
        }
        // line 19
        echo "                    </a>
                ";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@__main__/widget/footer/services.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo()
    {
        return array (  197 => 19,  191 => 18,  187 => 17,  182 => 16,  178 => 15,  174 => 41,  166 => 39,  163 => 38,  157 => 35,  153 => 34,  150 => 33,  144 => 32,  140 => 31,  135 => 30,  133 => 29,  129 => 27,  123 => 26,  119 => 25,  115 => 24,  107 => 22,  105 => 21,  102 => 15,  100 => 14,  92 => 12,  89 => 11,  81 => 9,  78 => 8,  70 => 6,  68 => 5,  61 => 4,  57 => 3,  52 => 42,  50 => 3,  47 => 2,  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@__main__/widget/footer/services.html.twig", "/var/www/html/source/Application/views/apex/tpl/widget/footer/services.html.twig");
    }
}
