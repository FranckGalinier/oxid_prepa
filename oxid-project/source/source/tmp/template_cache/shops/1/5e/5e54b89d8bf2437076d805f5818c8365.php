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

/* @__main__/widget/header/servicemenu.html.twig */
class __TwigTemplate_28893ce64652a7183bd39e33ce6707ef extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'dd_layout_page_header_icon_menu_account_button' => [$this, 'block_dd_layout_page_header_icon_menu_account_button'],
            'dd_layout_page_header_icon_menu_account_list' => [$this, 'block_dd_layout_page_header_icon_menu_account_list'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        if (($context["oxcmp_user"] ?? null)) {
            // line 2
            echo "    ";
            $context["noticeListCount"] = twig_get_attribute($this->env, $this->source, ($context["oxcmp_user"] ?? null), "getNoticeListArtCnt", [], "method", false, false, false, 2);
            // line 3
            echo "    ";
            $context["wishListCount"] = twig_get_attribute($this->env, $this->source, ($context["oxcmp_user"] ?? null), "getWishListArtCnt", [], "method", false, false, false, 3);
            // line 4
            echo "    ";
            $context["recommListCount"] = twig_get_attribute($this->env, $this->source, ($context["oxcmp_user"] ?? null), "getRecommListsCount", [], "method", false, false, false, 4);
        } else {
            // line 6
            echo "    ";
            $context["noticeListCount"] = "0";
            // line 7
            echo "    ";
            $context["wishListCount"] = "0";
            // line 8
            echo "    ";
            $context["recommListCount"] = "0";
        }
        // line 10
        $context["notificationsCounter"] = (((twig_get_attribute($this->env, $this->source, ($context["oView"] ?? null), "getCompareItemsCnt", [], "method", false, false, false, 10) + ($context["noticeListCount"] ?? null)) + ($context["wishListCount"] ?? null)) + ($context["recommListCount"] ?? null));
        // line 11
        echo "
<button type=\"button\" aria-label=\"Usercenter\" class=\"btn\" data-bs-toggle=\"dropdown\" data-href=\"";
        // line 12
        echo $this->extensions['OxidEsales\Twig\Extensions\UrlExtension']->getSeoUrl(["ident" => (twig_get_attribute($this->env, $this->source, ($context["oViewConf"] ?? null), "getSelfLink", [], "method", false, false, false, 12) . "cl=account")]);
        echo "\">
    ";
        // line 13
        $this->displayBlock('dd_layout_page_header_icon_menu_account_button', $context, $blocks);
        // line 23
        echo "</button>
";
        // line 24
        if ( !twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["oxcmp_user"] ?? null), "oxuser__oxpassword", [], "any", false, false, false, 24), "value", [], "any", false, false, false, 24)) {
            // line 25
            echo "    ";
            $this->loadTemplate("@__main__/widget/header/loginbox.html.twig", "@__main__/widget/header/servicemenu.html.twig", 25)->display($context);
        } else {
            // line 27
            echo "    ";
            $this->displayBlock('dd_layout_page_header_icon_menu_account_list', $context, $blocks);
        }
        // line 31
        echo "
<a class=\"btn\" href=\"";
        // line 32
        echo $this->extensions['OxidEsales\Twig\Extensions\UrlExtension']->getSeoUrl(["ident" => (twig_get_attribute($this->env, $this->source, ($context["oViewConf"] ?? null), "getSelfLink", [], "method", false, false, false, 32) . "cl=account_noticelist")]);
        echo "\">
    <svg aria-label=\"";
        // line 33
        echo $this->extensions['OxidEsales\Twig\Extensions\TranslateExtension']->translate(["ident" => "MY_WISH_LIST"]);
        echo "\">
        <use xlink:href=\"#star-fill\"></use>
    </svg>
    ";
        // line 36
        if (($context["oxcmp_user"] ?? null)) {
            echo " <span class=\"badge js-noticeListCnt\">";
            if (twig_get_attribute($this->env, $this->source, ($context["oxcmp_user"] ?? null), "getNoticeListArtCnt", [], "method", false, false, false, 36)) {
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["oxcmp_user"] ?? null), "getNoticeListArtCnt", [], "method", false, false, false, 36), "html", null, true);
            }
            echo "</span>";
        }
        // line 37
        echo "</a>";
    }

    // line 13
    public function block_dd_layout_page_header_icon_menu_account_button($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 14
        echo "        <svg aria-label=\"
            ";
        // line 15
        if ( !twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["oxcmp_user"] ?? null), "oxuser__oxpassword", [], "any", false, false, false, 15), "value", [], "any", false, false, false, 15)) {
            // line 16
            echo "                ";
            echo $this->extensions['OxidEsales\Twig\Extensions\TranslateExtension']->translate(["ident" => "LOGIN"]);
            echo "
            ";
        } else {
            // line 18
            echo "                ";
            echo $this->extensions['OxidEsales\Twig\Extensions\TranslateExtension']->translate(["ident" => "MY_ACCOUNT"]);
            echo "
            ";
        }
        // line 19
        echo "\">
            <use xlink:href=\"#person\"></use>
        </svg>
    ";
    }

    // line 27
    public function block_dd_layout_page_header_icon_menu_account_list($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 28
        echo "        ";
        $this->loadTemplate("@__main__/widget/header/servicebox.html.twig", "@__main__/widget/header/servicemenu.html.twig", 28)->display($context);
        // line 29
        echo "    ";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@__main__/widget/header/servicemenu.html.twig";
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
        return array (  145 => 29,  142 => 28,  138 => 27,  131 => 19,  125 => 18,  119 => 16,  117 => 15,  114 => 14,  110 => 13,  106 => 37,  98 => 36,  92 => 33,  88 => 32,  85 => 31,  81 => 27,  77 => 25,  75 => 24,  72 => 23,  70 => 13,  66 => 12,  63 => 11,  61 => 10,  57 => 8,  54 => 7,  51 => 6,  47 => 4,  44 => 3,  41 => 2,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@__main__/widget/header/servicemenu.html.twig", "/var/www/html/source/Application/views/apex/tpl/widget/header/servicemenu.html.twig");
    }
}
