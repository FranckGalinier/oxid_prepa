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

/* @__main__/widget/minibasket/minibasket.html.twig */
class __TwigTemplate_75163ab61c55813a1deed2f2daec3e9a extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'widget_minibasket' => [$this, 'block_widget_minibasket'],
            'widget_minibasket_modal_header' => [$this, 'block_widget_minibasket_modal_header'],
            'widget_minibasket_modal_content' => [$this, 'block_widget_minibasket_modal_content'],
            'widget_minibasket_product' => [$this, 'block_widget_minibasket_product'],
            'widget_minibasket_total' => [$this, 'block_widget_minibasket_total'],
            'minibasket_top_functions' => [$this, 'block_minibasket_top_functions'],
            'dd_layout_page_header_icon_menu_minibasket_table' => [$this, 'block_dd_layout_page_header_icon_menu_minibasket_table'],
            'widget_minibasket_product_item' => [$this, 'block_widget_minibasket_product_item'],
            'widget_minibasket_menu_total' => [$this, 'block_widget_minibasket_menu_total'],
            'dd_layout_page_header_icon_menu_minibasket_functions' => [$this, 'block_dd_layout_page_header_icon_menu_minibasket_functions'],
            'dd_layout_page_header_icon_menu_minibasket_alert_empty' => [$this, 'block_dd_layout_page_header_icon_menu_minibasket_alert_empty'],
            'widget_minibasket_modal_footer' => [$this, 'block_widget_minibasket_modal_footer'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        if ((twig_get_attribute($this->env, $this->source, ($context["oxcmp_basket"] ?? null), "getProductsCount", [], "method", false, false, false, 1) >= 5)) {
            // line 2
            echo "    ";
            $context["blScrollable"] = true;
        }
        // line 4
        echo "
";
        // line 5
        $this->displayBlock('widget_minibasket', $context, $blocks);
    }

    public function block_widget_minibasket($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 6
        echo "
        ";
        // line 7
        // line 8
        echo "            ";
        $context["currency"] = twig_get_attribute($this->env, $this->source, ($context["oView"] ?? null), "getActCurrency", [], "method", false, false, false, 8);
        // line 9
        echo "

            <div class=\"modal fade basketFlyout modal-sidebar-right\" id=\"basketModal\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"basketModalLabel\" aria-hidden=\"true\">
                <div class=\"modal-dialog\">
                    <div class=\"modal-content\">
                        ";
        // line 14
        $this->displayBlock('widget_minibasket_modal_header', $context, $blocks);
        // line 23
        echo "                        ";
        if (twig_get_attribute($this->env, $this->source, ($context["oxcmp_basket"] ?? null), "getProductsCount", [], "method", false, false, false, 23)) {
            // line 24
            echo "                            ";
            $this->displayBlock('widget_minibasket_modal_content', $context, $blocks);
            // line 92
            echo "                        ";
        } else {
            // line 93
            echo "                            ";
            $this->displayBlock('dd_layout_page_header_icon_menu_minibasket_alert_empty', $context, $blocks);
            // line 99
            echo "                        ";
        }
        // line 100
        echo "                        ";
        $this->displayBlock('widget_minibasket_modal_footer', $context, $blocks);
        // line 102
        echo "                    </div>
                </div>
            </div>
            ";
        // line 105
        if ((($context["_prefix"] ?? null) == "modal")) {
            // line 106
            echo "                ";
            echo $this->extensions['OxidEsales\Twig\Extensions\ScriptExtension']->script($context, ["add" => "var basketModal = new bootstrap.Modal(document.getElementById('basketModal')); basketModal.show()", "dynamic" => ($context["__oxid_include_dynamic"] ?? null)]);
            echo "
            ";
        }
        // line 108
        echo "        ";
        // line 109
        echo "
";
    }

    // line 14
    public function block_widget_minibasket_modal_header($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 15
        echo "                        <div class=\"modal-header\">
                            <div class=\"h4 modal-title\" id=\"basketModalLabel\">";
        // line 16
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["oxcmp_basket"] ?? null), "getItemsCount", [], "method", false, false, false, 16), "html", null, true);
        echo " ";
        echo $this->extensions['OxidEsales\Twig\Extensions\TranslateExtension']->translate(["ident" => "ITEMS_IN_BASKET"]);
        echo "</div>
                            <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\">
                                <span aria-hidden=\"true\"></span>
                                <span class=\"visually-hidden-focusable\">";
        // line 19
        echo $this->extensions['OxidEsales\Twig\Extensions\TranslateExtension']->translate(["ident" => "CLOSE"]);
        echo "</span>
                            </button>
                        </div>
                        ";
    }

    // line 24
    public function block_widget_minibasket_modal_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 25
        echo "                                <div class=\"modal-body\">
                                    ";
        // line 26
        if (twig_get_attribute($this->env, $this->source, ($context["oxcmp_basket"] ?? null), "getProductsCount", [], "method", false, false, false, 26)) {
            // line 27
            echo "                                        ";
            // line 28
            echo "
                                        ";
            // line 29
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["oxcmp_basket"] ?? null), "getContents", [], "method", false, false, false, 29));
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
            foreach ($context['_seq'] as $context["_key"] => $context["_product"]) {
                // line 30
                echo "                                            ";
                $this->displayBlock('widget_minibasket_product', $context, $blocks);
                // line 31
                echo "                                        ";
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['_product'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 32
            echo "
                                        ";
            // line 33
            $this->displayBlock('widget_minibasket_total', $context, $blocks);
            // line 36
            echo "
                                        ";
            // line 37
            $this->displayBlock('minibasket_top_functions', $context, $blocks);
            // line 44
            echo "
                                        <div class=\"minibasket-menu-box\">
                                            ";
            // line 46
            $this->displayBlock('dd_layout_page_header_icon_menu_minibasket_table', $context, $blocks);
            // line 80
            echo "                                        </div>

                                        ";
            // line 82
            $this->loadTemplate("@__main__/widget/minibasket/countdown.html.twig", "@__main__/widget/minibasket/minibasket.html.twig", 82)->display($context);
            // line 83
            echo "
                                        ";
            // line 84
            $this->displayBlock('dd_layout_page_header_icon_menu_minibasket_functions', $context, $blocks);
            // line 87
            echo "
                                        ";
            // line 89
            echo "                                    ";
        }
        // line 90
        echo "                                </div>
                            ";
    }

    // line 30
    public function block_widget_minibasket_product($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 33
    public function block_widget_minibasket_total($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 34
        echo "
                                        ";
    }

    // line 37
    public function block_minibasket_top_functions($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 38
        echo "                                        ";
        if (($context["oxcmp_user"] ?? null)) {
            // line 39
            echo "                                        <a href=\"";
            echo $this->extensions['OxidEsales\Twig\Extensions\UrlExtension']->getSeoUrl(["ident" => (twig_get_attribute($this->env, $this->source, ($context["oViewConf"] ?? null), "getSelfLink", [], "method", false, false, false, 39) . "cl=payment")]);
            echo "\" class=\"btn btn-highlight btn-lg w-100 mb-2\">";
            echo $this->extensions['OxidEsales\Twig\Extensions\TranslateExtension']->translate(["ident" => "CHECKOUT"]);
            echo "</a>
                                        ";
        } else {
            // line 41
            echo "                                        <a href=\"";
            echo $this->extensions['OxidEsales\Twig\Extensions\UrlExtension']->getSeoUrl(["ident" => (twig_get_attribute($this->env, $this->source, ($context["oViewConf"] ?? null), "getSelfLink", [], "method", false, false, false, 41) . "cl=user")]);
            echo "\" class=\"btn btn-highlight btn-lg w-100 mb-2\">";
            echo $this->extensions['OxidEsales\Twig\Extensions\TranslateExtension']->translate(["ident" => "CHECKOUT"]);
            echo "</a>
                                        ";
        }
        // line 43
        echo "                                        ";
    }

    // line 46
    public function block_dd_layout_page_header_icon_menu_minibasket_table($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 47
        echo "                                                <div class=\"minibasket-items\">
                                                    ";
        // line 48
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["oxcmp_basket"] ?? null), "getContents", [], "method", false, false, false, 48));
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
        foreach ($context['_seq'] as $context["_key"] => $context["_product"]) {
            // line 49
            echo "                                                        ";
            $this->displayBlock('widget_minibasket_product_item', $context, $blocks);
            // line 63
            echo "                                                    ";
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['_product'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 64
        echo "                                                </div>
                                                <div class=\"row minibasket-total-row my-3\">
                                                    <div class=\"col-8 minibasket-total-col h5\">
                                                        ";
        // line 67
        echo $this->extensions['OxidEsales\Twig\Extensions\TranslateExtension']->translate(["ident" => "TOTAL"]);
        echo "
                                                    </div>
                                                    <div class=\"col-4 minibasket-total-col text-end  h5\">
                                                        ";
        // line 70
        if (twig_get_attribute($this->env, $this->source, ($context["oxcmp_basket"] ?? null), "isPriceViewModeNetto", [], "method", false, false, false, 70)) {
            // line 71
            echo "                                                        ";
            echo twig_escape_filter($this->env, $this->extensions['OxidEsales\Twig\Extensions\FormatPriceExtension']->formatPrice(twig_get_attribute($this->env, $this->source, ($context["oxcmp_basket"] ?? null), "getNettoSum", [], "method", false, false, false, 71), ["currency" => ($context["currency"] ?? null)]), "html", null, true);
            echo "
                                                        ";
        } else {
            // line 73
            echo "                                                        ";
            echo twig_escape_filter($this->env, $this->extensions['OxidEsales\Twig\Extensions\FormatPriceExtension']->formatPrice(twig_get_attribute($this->env, $this->source, ($context["oxcmp_basket"] ?? null), "getBruttoSum", [], "method", false, false, false, 73), ["currency" => ($context["currency"] ?? null)]), "html", null, true);
            echo "
                                                        ";
        }
        // line 75
        echo "                                                    </div>
                                                </div>

                                                ";
        // line 78
        $this->displayBlock('widget_minibasket_menu_total', $context, $blocks);
        // line 79
        echo "                                            ";
    }

    // line 49
    public function block_widget_minibasket_product_item($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 50
        echo "                                                            ";
        $context["minibasketItemTitle"] = twig_get_attribute($this->env, $this->source, ($context["_product"] ?? null), "getTitle", [], "method", false, false, false, 50);
        // line 51
        echo "                                                            <div class=\"my-1\">
                                                                <a class=\"minibasket-link\" href=\"";
        // line 52
        echo twig_get_attribute($this->env, $this->source, ($context["_product"] ?? null), "getLink", [], "method", false, false, false, 52);
        echo "\" title=\"";
        echo twig_escape_filter($this->env, twig_striptags(($context["minibasketItemTitle"] ?? null)), "html", null, true);
        echo "\">
                                                                <span>
                                                                     <img loading=\"lazy\" class=\"minibasket-img img-fluid\" src=\"";
        // line 54
        echo twig_get_attribute($this->env, $this->source, ($context["_product"] ?? null), "getIconUrl", [], "method", false, false, false, 54);
        echo "\" alt=\"";
        echo twig_escape_filter($this->env, twig_striptags(($context["minibasketItemTitle"] ?? null)), "html", null, true);
        echo "\" width=\"40\" height=\"40\">
                                                                </span>
                                                                    <span>
                                                                    ";
        // line 57
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["_product"] ?? null), "getAmount", [], "method", false, false, false, 57), "html", null, true);
        echo " x ";
        echo twig_striptags(($context["minibasketItemTitle"] ?? null));
        echo "<br>
                                                                    ";
        // line 58
        echo twig_escape_filter($this->env, $this->extensions['OxidEsales\Twig\Extensions\FormatPriceExtension']->formatPrice(twig_get_attribute($this->env, $this->source, ($context["_product"] ?? null), "getPrice", [], "method", false, false, false, 58), ["currency" => ($context["currency"] ?? null)]), "html", null, true);
        echo "
                                                                </span>
                                                                </a>
                                                            </div>
                                                        ";
    }

    // line 78
    public function block_widget_minibasket_menu_total($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 84
    public function block_dd_layout_page_header_icon_menu_minibasket_functions($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 85
        echo "                                        <a href=\"";
        echo $this->extensions['OxidEsales\Twig\Extensions\UrlExtension']->getSeoUrl(["ident" => (twig_get_attribute($this->env, $this->source, ($context["oViewConf"] ?? null), "getSelfLink", [], "method", false, false, false, 85) . "cl=basket")]);
        echo "\" class=\"btn btn-outline-primary w-100\">";
        echo $this->extensions['OxidEsales\Twig\Extensions\TranslateExtension']->translate(["ident" => "DISPLAY_BASKET"]);
        echo "</a>
                                        ";
    }

    // line 93
    public function block_dd_layout_page_header_icon_menu_minibasket_alert_empty($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 94
        echo "                                <div class=\"p-3 text-center\">
                                    <div class=\"emoji h1\"> 🤷‍♂️</div>
                                    ";
        // line 96
        echo $this->extensions['OxidEsales\Twig\Extensions\TranslateExtension']->translate(["ident" => "BASKET_EMPTY"]);
        echo "
                                </div>
                            ";
    }

    // line 100
    public function block_widget_minibasket_modal_footer($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 101
        echo "                        ";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@__main__/widget/minibasket/minibasket.html.twig";
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
        return array (  425 => 101,  421 => 100,  414 => 96,  410 => 94,  406 => 93,  397 => 85,  393 => 84,  387 => 78,  378 => 58,  372 => 57,  364 => 54,  357 => 52,  354 => 51,  351 => 50,  347 => 49,  343 => 79,  341 => 78,  336 => 75,  330 => 73,  324 => 71,  322 => 70,  316 => 67,  311 => 64,  297 => 63,  294 => 49,  277 => 48,  274 => 47,  270 => 46,  266 => 43,  258 => 41,  250 => 39,  247 => 38,  243 => 37,  238 => 34,  234 => 33,  228 => 30,  223 => 90,  220 => 89,  217 => 87,  215 => 84,  212 => 83,  210 => 82,  206 => 80,  204 => 46,  200 => 44,  198 => 37,  195 => 36,  193 => 33,  190 => 32,  176 => 31,  173 => 30,  156 => 29,  153 => 28,  151 => 27,  149 => 26,  146 => 25,  142 => 24,  134 => 19,  126 => 16,  123 => 15,  119 => 14,  114 => 109,  112 => 108,  106 => 106,  104 => 105,  99 => 102,  96 => 100,  93 => 99,  90 => 93,  87 => 92,  84 => 24,  81 => 23,  79 => 14,  72 => 9,  69 => 8,  68 => 7,  65 => 6,  58 => 5,  55 => 4,  51 => 2,  49 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@__main__/widget/minibasket/minibasket.html.twig", "/var/www/html/source/Application/views/apex/tpl/widget/minibasket/minibasket.html.twig");
    }
}
