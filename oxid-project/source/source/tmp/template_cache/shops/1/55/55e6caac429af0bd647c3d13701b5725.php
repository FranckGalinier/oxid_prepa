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

/* @__main__/page/shop/start.html.twig */
class __TwigTemplate_25a9c050291122edc60cf147a6069232 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'start_newest_articles' => [$this, 'block_start_newest_articles'],
            'start_top_articles' => [$this, 'block_start_top_articles'],
            'start_bargain_articles' => [$this, 'block_start_bargain_articles'],
            'start_manufacturer_slider' => [$this, 'block_start_manufacturer_slider'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        ob_start();
        // line 2
        echo "
    ";
        // line 3
        $__internal_compile_0 = null;
        try {
            $__internal_compile_0 =             $this->loadTemplate(twig_template_from_string($this->env, $this->extensions['OxidEsales\Twig\Extensions\IncludeContentExtension']->content("oxstartslot1")), "@__main__/page/shop/start.html.twig", 3);
        } catch (LoaderError $e) {
            // ignore missing template
        }
        if ($__internal_compile_0) {
            $__internal_compile_0->display($context);
        }
        // line 4
        echo "
    ";
        // line 5
        if (twig_get_attribute($this->env, $this->source, ($context["oViewConf"] ?? null), "getViewThemeParam", ["showCategoryTiles"], "method", false, false, false, 5)) {
            // line 6
            echo "        ";
            $this->loadTemplate("@__main__/widget/categories.html.twig", "@__main__/page/shop/start.html.twig", 6)->display($context);
            // line 7
            echo "    ";
        }
        // line 8
        echo "
    ";
        // line 9
        $__internal_compile_1 = null;
        try {
            $__internal_compile_1 =             $this->loadTemplate(twig_template_from_string($this->env, $this->extensions['OxidEsales\Twig\Extensions\IncludeContentExtension']->content("oxstartslot2")), "@__main__/page/shop/start.html.twig", 9);
        } catch (LoaderError $e) {
            // ignore missing template
        }
        if ($__internal_compile_1) {
            $__internal_compile_1->display($context);
        }
        // line 10
        echo "
    ";
        // line 11
        $this->displayBlock('start_newest_articles', $context, $blocks);
        // line 23
        echo "
    ";
        // line 24
        $this->displayBlock('start_top_articles', $context, $blocks);
        // line 36
        echo "
    ";
        // line 37
        $this->displayBlock('start_bargain_articles', $context, $blocks);
        // line 49
        echo "
    ";
        // line 50
        $__internal_compile_2 = null;
        try {
            $__internal_compile_2 =             $this->loadTemplate(twig_template_from_string($this->env, $this->extensions['OxidEsales\Twig\Extensions\IncludeContentExtension']->content("oxstartslot3")), "@__main__/page/shop/start.html.twig", 50);
        } catch (LoaderError $e) {
            // ignore missing template
        }
        if ($__internal_compile_2) {
            $__internal_compile_2->display($context);
        }
        // line 51
        echo "
    ";
        // line 52
        $this->displayBlock('start_manufacturer_slider', $context, $blocks);
        // line 57
        echo "
    ";
        // line 58
        $__internal_compile_3 = null;
        try {
            $__internal_compile_3 =             $this->loadTemplate(twig_template_from_string($this->env, $this->extensions['OxidEsales\Twig\Extensions\IncludeContentExtension']->content("oxstartusps")), "@__main__/page/shop/start.html.twig", 58);
        } catch (LoaderError $e) {
            // ignore missing template
        }
        if ($__internal_compile_3) {
            $__internal_compile_3->display($context);
        }
        // line 59
        echo "
    ";
        // line 60
        $__internal_compile_4 = null;
        try {
            $__internal_compile_4 =             $this->loadTemplate(twig_template_from_string($this->env, $this->extensions['OxidEsales\Twig\Extensions\IncludeContentExtension']->content("oxstartslot4")), "@__main__/page/shop/start.html.twig", 60);
        } catch (LoaderError $e) {
            // ignore missing template
        }
        if ($__internal_compile_4) {
            $__internal_compile_4->display($context);
        }
        // line 61
        echo "    ";
        echo twig_escape_filter($this->env, $this->extensions['OxidEsales\Twig\Extensions\InsertTrackerExtension']->insertTracker($this->env), "html", null, true);
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
        // line 63
        $this->loadTemplate("@__main__/layout/page.html.twig", "@__main__/page/shop/start.html.twig", 63)->display($context);
    }

    // line 11
    public function block_start_newest_articles($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 12
        echo "        ";
        $context["showNewest"] = twig_get_attribute($this->env, $this->source, ($context["oViewConf"] ?? null), "getViewThemeParam", ["sShowNewestArticles"], "method", false, false, false, 12);
        // line 13
        echo "        ";
        if (($context["showNewest"] ?? null)) {
            // line 14
            echo "            ";
            $context["oNewestArticles"] = twig_get_attribute($this->env, $this->source, ($context["oView"] ?? null), "getNewestArticles", [], "method", false, false, false, 14);
            // line 15
            echo "            ";
            $context["newestWidth"] = twig_get_attribute($this->env, $this->source, ($context["oViewConf"] ?? null), "getViewThemeParam", ["sNewestWidth"], "method", false, false, false, 15);
            // line 16
            echo "            <div class=\"article-slider row-spacer\">
                ";
            // line 17
            if ((($context["oNewestArticles"] ?? null) && (twig_length_filter($this->env, ($context["oNewestArticles"] ?? null)) > 0))) {
                // line 18
                echo "                    ";
                $this->loadTemplate("@__main__/widget/product/list-slider.html.twig", "@__main__/page/shop/start.html.twig", 18)->display(twig_array_merge($context, ["head" => $this->extensions['OxidEsales\Twig\Extensions\Filters\TranslateExtension']->translate("START_NEWEST_HEADER"), "subhead" => $this->extensions['OxidEsales\Twig\Extensions\Filters\TranslateExtension']->translate("START_NEWEST_SUBHEADER"), "listId" => "newItems", "products" => ($context["oNewestArticles"] ?? null), "showMainLink" => true, "iProductsPerLine" => 4]));
                // line 19
                echo "                ";
            }
            // line 20
            echo "            </div>
        ";
        }
        // line 22
        echo "    ";
    }

    // line 24
    public function block_start_top_articles($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 25
        echo "        ";
        $context["showTop"] = twig_get_attribute($this->env, $this->source, ($context["oViewConf"] ?? null), "getViewThemeParam", ["sShowTopArticles"], "method", false, false, false, 25);
        // line 26
        echo "        ";
        if (($context["showTop"] ?? null)) {
            // line 27
            echo "            ";
            $context["topWidth"] = twig_get_attribute($this->env, $this->source, ($context["oViewConf"] ?? null), "getViewThemeParam", ["sTopWidth"], "method", false, false, false, 27);
            // line 28
            echo "            ";
            $context["oTopArticles"] = twig_get_attribute($this->env, $this->source, ($context["oView"] ?? null), "getTop5ArticleList", [], "method", false, false, false, 28);
            // line 29
            echo "            <div class=\"article-slider row-spacer\">
                ";
            // line 30
            if ((($context["oTopArticles"] ?? null) && (twig_length_filter($this->env, ($context["oTopArticles"] ?? null)) > 0))) {
                // line 31
                echo "                    ";
                $this->loadTemplate("@__main__/widget/product/list-slider.html.twig", "@__main__/page/shop/start.html.twig", 31)->display(twig_array_merge($context, ["head" => $this->extensions['OxidEsales\Twig\Extensions\Filters\TranslateExtension']->translate("START_TOP_PRODUCTS_HEADER"), "subhead" => $this->extensions['OxidEsales\Twig\Extensions\Filters\TranslateExtension']->translate("START_TOP_PRODUCTS_SUBHEADER", twig_length_filter($this->env, ($context["oTopArticles"] ?? null))), "listId" => "topBox", "products" => ($context["oTopArticles"] ?? null), "showMainLink" => true, "iProductsPerLine" => 2]));
                // line 32
                echo "                ";
            }
            // line 33
            echo "            </div>
        ";
        }
        // line 35
        echo "    ";
    }

    // line 37
    public function block_start_bargain_articles($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 38
        echo "        ";
        $context["showBargain"] = twig_get_attribute($this->env, $this->source, ($context["oViewConf"] ?? null), "getViewThemeParam", ["sShowBargainArticles"], "method", false, false, false, 38);
        // line 39
        echo "        ";
        if (($context["showBargain"] ?? null)) {
            // line 40
            echo "            ";
            $context["oBargainArticles"] = twig_get_attribute($this->env, $this->source, ($context["oView"] ?? null), "getBargainArticleList", [], "method", false, false, false, 40);
            // line 41
            echo "            ";
            $context["bargainWidth"] = twig_get_attribute($this->env, $this->source, ($context["oViewConf"] ?? null), "getViewThemeParam", ["sBargainWidth"], "method", false, false, false, 41);
            // line 42
            echo "            <div class=\"article-slider row-spacer\">
                ";
            // line 43
            if ((($context["oBargainArticles"] ?? null) && (twig_length_filter($this->env, ($context["oBargainArticles"] ?? null)) > 0))) {
                // line 44
                echo "                    ";
                $this->loadTemplate("@__main__/widget/product/list-slider.html.twig", "@__main__/page/shop/start.html.twig", 44)->display(twig_array_merge($context, ["head" => $this->extensions['OxidEsales\Twig\Extensions\Filters\TranslateExtension']->translate("START_BARGAIN_HEADER"), "subhead" => $this->extensions['OxidEsales\Twig\Extensions\Filters\TranslateExtension']->translate("START_BARGAIN_SUBHEADER"), "listId" => "bargainItems", "products" => ($context["oBargainArticles"] ?? null), "showMainLink" => true, "iProductsPerLine" => 4]));
                // line 45
                echo "                ";
            }
            // line 46
            echo "            </div>
        ";
        }
        // line 48
        echo "    ";
    }

    // line 52
    public function block_start_manufacturer_slider($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 53
        echo "        ";
        if (twig_get_attribute($this->env, $this->source, ($context["oViewConf"] ?? null), "getViewThemeParam", ["bl_showManufacturer"], "method", false, false, false, 53)) {
            // line 54
            echo "            ";
            $this->loadTemplate("@__main__/widget/manufacturer.html.twig", "@__main__/page/shop/start.html.twig", 54)->display($context);
            // line 55
            echo "        ";
        }
        // line 56
        echo "    ";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@__main__/page/shop/start.html.twig";
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
        return array (  277 => 56,  274 => 55,  271 => 54,  268 => 53,  264 => 52,  260 => 48,  256 => 46,  253 => 45,  250 => 44,  248 => 43,  245 => 42,  242 => 41,  239 => 40,  236 => 39,  233 => 38,  229 => 37,  225 => 35,  221 => 33,  218 => 32,  215 => 31,  213 => 30,  210 => 29,  207 => 28,  204 => 27,  201 => 26,  198 => 25,  194 => 24,  190 => 22,  186 => 20,  183 => 19,  180 => 18,  178 => 17,  175 => 16,  172 => 15,  169 => 14,  166 => 13,  163 => 12,  159 => 11,  155 => 63,  139 => 61,  129 => 60,  126 => 59,  116 => 58,  113 => 57,  111 => 52,  108 => 51,  98 => 50,  95 => 49,  93 => 37,  90 => 36,  88 => 24,  85 => 23,  83 => 11,  80 => 10,  70 => 9,  67 => 8,  64 => 7,  61 => 6,  59 => 5,  56 => 4,  46 => 3,  43 => 2,  41 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@__main__/page/shop/start.html.twig", "/var/www/html/source/Application/views/apex/tpl/page/shop/start.html.twig");
    }
}
