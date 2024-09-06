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

/* @__main__/page/list/list.html.twig */
class __TwigTemplate_5cc6c382c61ebd2d672bc4b7a678d747 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'page_list_listhead' => [$this, 'block_page_list_listhead'],
            'page_list_long_desc' => [$this, 'block_page_list_long_desc'],
            'page_list_listbody' => [$this, 'block_page_list_listbody'],
            'page_list_upperlocator' => [$this, 'block_page_list_upperlocator'],
            'page_list_productlist' => [$this, 'block_page_list_productlist'],
            'page_list_bottomlocator' => [$this, 'block_page_list_bottomlocator'],
            'page_list_content' => [$this, 'block_page_list_content'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        $context["actCategory"] = twig_get_attribute($this->env, $this->source, ($context["oView"] ?? null), "getActiveCategory", [], "method", false, false, false, 1);
        // line 2
        $context["showPopBreadcrump"] = twig_get_attribute($this->env, $this->source, ($context["oViewConf"] ?? null), "getViewThemeParam", ["sShowPopBreadcrump"], "method", false, false, false, 2);
        // line 3
        $context["oPageNavigation"] = twig_get_attribute($this->env, $this->source, ($context["oView"] ?? null), "getPageNavigation", [], "method", false, false, false, 3);
        // line 4
        echo "
";
        // line 5
        ob_start();
        // line 6
        echo "    ";
        $context["listType"] = twig_get_attribute($this->env, $this->source, ($context["oView"] ?? null), "getListType", [], "method", false, false, false, 6);
        // line 7
        echo "    ";
        if (((($context["listType"] ?? null) == "manufacturer") || (($context["listType"] ?? null) == "vendor"))) {
            // line 8
            echo "        ";
            if ((($context["actCategory"] ?? null) && twig_get_attribute($this->env, $this->source, ($context["actCategory"] ?? null), "getIconUrl", [], "method", false, false, false, 8))) {
                // line 9
                echo "        <div class=\"box\">
            <h3>
                ";
                // line 11
                if ((($context["listType"] ?? null) == "manufacturer")) {
                    // line 12
                    echo "                    ";
                    echo $this->extensions['OxidEsales\Twig\Extensions\TranslateExtension']->translate(["ident" => "BRAND"]);
                    echo "
                ";
                } elseif ((                // line 13
($context["listType"] ?? null) == "vendor")) {
                    // line 14
                    echo "                    ";
                    echo $this->extensions['OxidEsales\Twig\Extensions\TranslateExtension']->translate(["ident" => "VENDOR"]);
                    echo "
                ";
                }
                // line 16
                echo "            </h3>
            <div class=\"featured icon\">
                <img loading=\"lazy\" src=\"";
                // line 18
                echo twig_get_attribute($this->env, $this->source, ($context["actCategory"] ?? null), "getIconUrl", [], "method", false, false, false, 18);
                echo "\" alt=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["actCategory"] ?? null), "getTitle", [], "method", false, false, false, 18), "html", null, true);
                echo "\">
            </div>
        </div>
        ";
            }
            // line 22
            echo "    ";
        }
        $captureContent = ob_get_clean();
        if ('oxidBlock_sidebar' != '' && isset($captureContent)) {
        if (!isset($context['oxidBlock_sidebar'])) {
        $context['oxidBlock_sidebar'] = [];
        }
        if (!is_array($context['oxidBlock_sidebar'])) {
        $context['oxidBlock_sidebar'] = [$context['oxidBlock_sidebar']];
        }
        $context['oxidBlock_sidebar'][] = $captureContent;
        }
        unset($captureContent);
        // line 24
        echo "
";
        // line 25
        ob_start();
        // line 26
        echo "    ";
        $this->displayBlock('page_list_listhead', $context, $blocks);
        // line 133
        echo "

    ";
        // line 135
        $this->displayBlock('page_list_listbody', $context, $blocks);
        // line 165
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
        // line 167
        $this->loadTemplate("@__main__/layout/page.html.twig", "@__main__/page/list/list.html.twig", 167)->display(twig_array_merge($context, ["tree_path" => twig_get_attribute($this->env, $this->source, ($context["oView"] ?? null), "getTreePath", [], "method", false, false, false, 167)]));
    }

    // line 26
    public function block_page_list_listhead($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 27
        echo "    ";
        if (((($context["listType"] ?? null) == "manufacturer") || (($context["listType"] ?? null) == "vendor"))) {
            // line 28
            echo "    <div class=\"bg-white list-header mb-4\">
        <div class=\"container-xxl\">
            <div class=\"row\">
                <div class=\"col-12";
            // line 31
            if (twig_get_attribute($this->env, $this->source, ($context["actCategory"] ?? null), "getIconUrl", [], "method", false, false, false, 31)) {
                echo " col-md-6 order-2 order-md-1 ";
            }
            echo "\">
                    ";
            // line 32
            if (($context["showPopBreadcrump"] ?? null)) {
                // line 33
                echo "                    <div class=\"row\">
                        ";
                // line 34
                $this->loadTemplate("@__main__/widget/breadcrumb.html.twig", "@__main__/page/list/list.html.twig", 34)->display($context);
                // line 35
                echo "                    </div>
                    ";
            }
            // line 37
            echo "
                    <h1";
            // line 38
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["actCategory"] ?? null), "oxcategories__oxthumb", [], "any", false, false, false, 38), "value", [], "any", false, false, false, 38) && twig_get_attribute($this->env, $this->source, ($context["actCategory"] ?? null), "getThumbUrl", [], "method", false, false, false, 38))) {
                echo " class=\"text-white\"";
            }
            echo ">
                        ";
            // line 39
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["actCategory"] ?? null), "getTitle", [], "method", false, false, false, 39), "html", null, true);
            echo "
                    </h1>
                    ";
            // line 41
            if (((($context["actCategory"] ?? null) && twig_get_attribute($this->env, $this->source, ($context["actCategory"] ?? null), "getShortDescription", [], "method", false, false, false, 41)) && (twig_get_attribute($this->env, $this->source, ($context["oPageNavigation"] ?? null), "actPage", [], "any", false, false, false, 41) == 1))) {
                // line 42
                echo "                    <div id=\"catDescLocator\" class=\"categoryDescription pb-5\">
                        ";
                // line 43
                echo twig_get_attribute($this->env, $this->source, ($context["actCategory"] ?? null), "getShortDescription", [], "method", false, false, false, 43);
                echo "
                    </div>
                    ";
            }
            // line 46
            echo "                </div>
                ";
            // line 47
            if (twig_get_attribute($this->env, $this->source, ($context["actCategory"] ?? null), "getIconUrl", [], "method", false, false, false, 47)) {
                // line 48
                echo "                    <div class=\"col-12 col-md-6 order-1 order-md-1 py-4\">
                        <img src=\"";
                // line 49
                echo twig_get_attribute($this->env, $this->source, ($context["actCategory"] ?? null), "getIconUrl", [], "method", false, false, false, 49);
                echo "\" alt=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["actCategory"] ?? null), "getTitle", [], "method", false, false, false, 49), "html", null, true);
                echo "\">
                    </div>
                ";
            }
            // line 52
            echo "            </div>
        </div>
    </div>
    ";
        } else {
            // line 56
            echo "        <div class=\"bg-white list-header mb-4\">
            <div class=\"container-xxl\">
                <div class=\"row\">
                    <div class=\"col-12";
            // line 59
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["actCategory"] ?? null), "oxcategories__oxthumb", [], "any", false, false, false, 59), "value", [], "any", false, false, false, 59) && twig_get_attribute($this->env, $this->source, ($context["actCategory"] ?? null), "getThumbUrl", [], "method", false, false, false, 59))) {
                echo " col-md-6 order-2 order-md-1 ";
            }
            echo "\">
                        ";
            // line 60
            if (($context["showPopBreadcrump"] ?? null)) {
                // line 61
                echo "                            <div class=\"row\">
                                ";
                // line 62
                $this->loadTemplate("@__main__/widget/breadcrumb.html.twig", "@__main__/page/list/list.html.twig", 62)->display($context);
                // line 63
                echo "                            </div>
                        ";
            }
            // line 65
            echo "
                        <h1 class=\"h2\">
                            ";
            // line 67
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["oView"] ?? null), "getTitle", [], "method", false, false, false, 67), "html", null, true);
            echo "
                        </h1>

                        ";
            // line 70
            if (((($context["actCategory"] ?? null) && twig_get_attribute($this->env, $this->source, ($context["actCategory"] ?? null), "getShortDescription", [], "method", false, false, false, 70)) && (twig_get_attribute($this->env, $this->source, ($context["oPageNavigation"] ?? null), "actPage", [], "any", false, false, false, 70) == 1))) {
                // line 71
                echo "                            <div id=\"catDescLocator\" class=\"categoryDescription pb-3\">
                                ";
                // line 72
                echo twig_get_attribute($this->env, $this->source, ($context["actCategory"] ?? null), "getShortDescription", [], "method", false, false, false, 72);
                echo "
                            </div>
                        ";
            }
            // line 75
            echo "
                        ";
            // line 76
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["actCategory"] ?? null), "oxcategories__oxlongdesc", [], "any", false, false, false, 76), "value", [], "any", false, false, false, 76) && (twig_get_attribute($this->env, $this->source, ($context["oPageNavigation"] ?? null), "actPage", [], "any", false, false, false, 76) == 1))) {
                // line 77
                echo "                            ";
                $this->displayBlock('page_list_long_desc', $context, $blocks);
                // line 82
                echo "                        ";
            }
            // line 83
            echo "                    </div>
                    ";
            // line 84
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["actCategory"] ?? null), "oxcategories__oxthumb", [], "any", false, false, false, 84), "value", [], "any", false, false, false, 84) && twig_get_attribute($this->env, $this->source, ($context["actCategory"] ?? null), "getThumbUrl", [], "method", false, false, false, 84))) {
                // line 85
                echo "                        <div class=\"col-12 col-md-6 order-1 order-md-1 py-4 text-right\">
                            <img src=\"";
                // line 86
                echo twig_get_attribute($this->env, $this->source, ($context["actCategory"] ?? null), "getThumbUrl", [], "method", false, false, false, 86);
                echo "\" alt=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["actCategory"] ?? null), "oxcategories__oxtitle", [], "any", false, false, false, 86), "value", [], "any", false, false, false, 86), "html", null, true);
                echo "\" class=\"w-100 img-fluid\">
                        </div>
                    ";
            }
            // line 89
            echo "                </div>
            </div>
        </div>
    ";
        }
        // line 93
        echo "    ";
        if (twig_get_attribute($this->env, $this->source, ($context["oView"] ?? null), "hasVisibleSubCats", [], "method", false, false, false, 93)) {
            // line 94
            echo "        <div class=\"container-xxl\">
            ";
            // line 95
            $context["iSubCategoriesCount"] = 0;
            // line 96
            echo "            <div class=\"cat-list mb-4 pb-3\">
                ";
            // line 97
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["oView"] ?? null), "getSubCatList", [], "method", false, false, false, 97));
            foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
                // line 98
                echo "                    ";
                if (twig_get_attribute($this->env, $this->source, $context["category"], "getIsVisible", [], "method", false, false, false, 98)) {
                    // line 99
                    echo "                        ";
                    $context["iSubCategoriesCount"] = (($context["iSubCategoriesCount"] ?? null) + 1);
                    // line 100
                    echo "                        ";
                    $context["iconUrl"] = twig_get_attribute($this->env, $this->source, $context["category"], "getIconUrl", [], "method", false, false, false, 100);
                    // line 101
                    echo "                            <a href=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["category"], "getLink", [], "method", false, false, false, 101);
                    echo "\" class=\"cat-list-item\">
                                ";
                    // line 102
                    if (($context["iconUrl"] ?? null)) {
                        // line 103
                        echo "                                    <img loading=\"lazy\" src=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["category"], "getIconUrl", [], "method", false, false, false, 103);
                        echo "\" alt=\"";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["category"], "oxcategories__oxtitle", [], "any", false, false, false, 103), "value", [], "any", false, false, false, 103), "html", null, true);
                        echo "\" class=\"cat-list-item-img\">
                                ";
                    } else {
                        // line 105
                        echo "                                    <img loading=\"lazy\" src=\"";
                        echo twig_get_attribute($this->env, $this->source, ($context["oViewConf"] ?? null), "getImageUrl", ["subcat-placeholder.png"], "method", false, false, false, 105);
                        echo "\" alt=\"";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["category"], "oxcategories__oxtitle", [], "any", false, false, false, 105), "value", [], "any", false, false, false, 105), "html", null, true);
                        echo "\" class=\"cat-list-item-img\">
                                ";
                    }
                    // line 107
                    echo "                                <span class=\"cat-list-item-name\">
                                    ";
                    // line 108
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["category"], "oxcategories__oxtitle", [], "any", false, false, false, 108), "value", [], "any", false, false, false, 108), "html", null, true);
                    echo "

                                    ";
                    // line 110
                    if ((twig_get_attribute($this->env, $this->source, ($context["oView"] ?? null), "showCategoryArticlesCount", [], "method", false, false, false, 110) && (twig_get_attribute($this->env, $this->source, $context["category"], "getNrOfArticles", [], "method", false, false, false, 110) > 0))) {
                        // line 111
                        echo "                                        <span class=\"text-muted\">(";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["category"], "getNrOfArticles", [], "method", false, false, false, 111), "html", null, true);
                        echo ")</span>
                                    ";
                    }
                    // line 113
                    echo "                                </span>
                            </a>
                    ";
                }
                // line 116
                echo "
                    ";
                // line 117
                if (twig_get_attribute($this->env, $this->source, $context["category"], "getContentCats", [], "method", false, false, false, 117)) {
                    // line 118
                    echo "                        ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["category"], "getContentCats", [], "method", false, false, false, 118));
                    foreach ($context['_seq'] as $context["_key"] => $context["ocont"]) {
                        // line 119
                        echo "                            <a href=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["ocont"], "getLink", [], "method", false, false, false, 119);
                        echo "\" class=\"cat-list-item\">
                                <img loading=\"lazy\" src=\"";
                        // line 120
                        echo twig_get_attribute($this->env, $this->source, ($context["oViewConf"] ?? null), "getImageUrl", ["subcat-placeholder.png"], "method", false, false, false, 120);
                        echo "\" alt=\"";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["category"], "oxcategories__oxtitle", [], "any", false, false, false, 120), "value", [], "any", false, false, false, 120), "html", null, true);
                        echo "\" class=\"cat-list-item-img\">
                                <span class=\"cat-list-item-name\">
                                    ";
                        // line 122
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["ocont"], "oxcontents__oxtitle", [], "any", false, false, false, 122), "value", [], "any", false, false, false, 122), "html", null, true);
                        echo "
                                </span>
                            </a>
                        ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ocont'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 126
                    echo "                    ";
                }
                // line 127
                echo "                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 128
            echo "            </div>
        </div>
    ";
        }
        // line 131
        echo "
    ";
    }

    // line 77
    public function block_page_list_long_desc($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 78
        echo "                                <div id=\"catLongDescLocator\" class=\"categoryDescription\">
                                    ";
        // line 79
        echo twig_include($this->env, $context, twig_template_from_string($this->env, twig_get_attribute($this->env, $this->source, ($context["actCategory"] ?? null), "oxcategories__oxlongdesc", [], "any", false, false, false, 79)));
        echo "
                                </div>
                            ";
    }

    // line 135
    public function block_page_list_listbody($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 136
        echo "        ";
        if (twig_get_attribute($this->env, $this->source, ($context["oView"] ?? null), "getArticleList", [], "method", false, false, false, 136)) {
            // line 137
            echo "
            ";
            // line 138
            $context["categoryWidth"] = twig_get_attribute($this->env, $this->source, ($context["oViewConf"] ?? null), "getViewThemeParam", ["sCategoryWidth"], "method", false, false, false, 138);
            // line 139
            echo "                <div class=\"article-list pb-5\">
                    <div class=\"container-xxl\">
                        ";
            // line 141
            if (twig_get_attribute($this->env, $this->source, ($context["oView"] ?? null), "getArticleList", [], "method", false, false, false, 141)) {
                // line 142
                echo "                            ";
                $this->displayBlock('page_list_upperlocator', $context, $blocks);
                // line 145
                echo "                        ";
            }
            // line 146
            echo "                        <div class=\"row\">
                            ";
            // line 147
            if (twig_get_attribute($this->env, $this->source, ($context["oView"] ?? null), "getArticleList", [], "method", false, false, false, 147)) {
                // line 148
                echo "                                ";
                // line 149
                echo "                                ";
                $this->displayBlock('page_list_productlist', $context, $blocks);
                // line 152
                echo "                                ";
                $this->displayBlock('page_list_bottomlocator', $context, $blocks);
                // line 155
                echo "                            ";
            }
            // line 156
            echo "                        </div>
                    </div>
                </div>

            ";
            // line 160
            $this->displayBlock('page_list_content', $context, $blocks);
            // line 161
            echo "
            ";
            // line 162
            $__internal_compile_0 = null;
            try {
                $__internal_compile_0 =                 $this->loadTemplate(twig_template_from_string($this->env, $this->extensions['OxidEsales\Twig\Extensions\IncludeContentExtension']->content("oxstartslot4")), "@__main__/page/list/list.html.twig", 162);
            } catch (LoaderError $e) {
                // ignore missing template
            }
            if ($__internal_compile_0) {
                $__internal_compile_0->display($context);
            }
            // line 163
            echo "        ";
        }
        // line 164
        echo "    ";
    }

    // line 142
    public function block_page_list_upperlocator($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 143
        echo "                                ";
        $this->loadTemplate("@__main__/widget/locator/listlocator.html.twig", "@__main__/page/list/list.html.twig", 143)->display(twig_array_merge($context, ["locator" => twig_get_attribute($this->env, $this->source, ($context["oView"] ?? null), "getPageNavigationLimitedTop", [], "method", false, false, false, 143), "attributes" => twig_get_attribute($this->env, $this->source, ($context["oView"] ?? null), "getAttributes", [], "method", false, false, false, 143), "listDisplayType" => true, "itemsPerPage" => true, "sort" => true]));
        // line 144
        echo "                            ";
    }

    // line 149
    public function block_page_list_productlist($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 150
        echo "                                    ";
        $this->loadTemplate("@__main__/widget/product/list.html.twig", "@__main__/page/list/list.html.twig", 150)->display(twig_array_merge($context, ["type" => twig_get_attribute($this->env, $this->source, ($context["oView"] ?? null), "getListDisplayType", [], "method", false, false, false, 150), "listId" => "productList", "products" => twig_get_attribute($this->env, $this->source, ($context["oView"] ?? null), "getArticleList", [], "method", false, false, false, 150)]));
        // line 151
        echo "                                ";
    }

    // line 152
    public function block_page_list_bottomlocator($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 153
        echo "                                    ";
        $this->loadTemplate("@__main__/widget/locator/listlocator.html.twig", "@__main__/page/list/list.html.twig", 153)->display(twig_array_merge($context, ["locator" => twig_get_attribute($this->env, $this->source, ($context["oView"] ?? null), "getPageNavigationLimitedBottom", [], "method", false, false, false, 153), "place" => "bottom"]));
        // line 154
        echo "                                ";
    }

    // line 160
    public function block_page_list_content($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@__main__/page/list/list.html.twig";
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
        return array (  530 => 160,  526 => 154,  523 => 153,  519 => 152,  515 => 151,  512 => 150,  508 => 149,  504 => 144,  501 => 143,  497 => 142,  493 => 164,  490 => 163,  480 => 162,  477 => 161,  475 => 160,  469 => 156,  466 => 155,  463 => 152,  460 => 149,  458 => 148,  456 => 147,  453 => 146,  450 => 145,  447 => 142,  445 => 141,  441 => 139,  439 => 138,  436 => 137,  433 => 136,  429 => 135,  422 => 79,  419 => 78,  415 => 77,  410 => 131,  405 => 128,  399 => 127,  396 => 126,  386 => 122,  379 => 120,  374 => 119,  369 => 118,  367 => 117,  364 => 116,  359 => 113,  353 => 111,  351 => 110,  346 => 108,  343 => 107,  335 => 105,  327 => 103,  325 => 102,  320 => 101,  317 => 100,  314 => 99,  311 => 98,  307 => 97,  304 => 96,  302 => 95,  299 => 94,  296 => 93,  290 => 89,  282 => 86,  279 => 85,  277 => 84,  274 => 83,  271 => 82,  268 => 77,  266 => 76,  263 => 75,  257 => 72,  254 => 71,  252 => 70,  246 => 67,  242 => 65,  238 => 63,  236 => 62,  233 => 61,  231 => 60,  225 => 59,  220 => 56,  214 => 52,  206 => 49,  203 => 48,  201 => 47,  198 => 46,  192 => 43,  189 => 42,  187 => 41,  182 => 39,  176 => 38,  173 => 37,  169 => 35,  167 => 34,  164 => 33,  162 => 32,  156 => 31,  151 => 28,  148 => 27,  144 => 26,  140 => 167,  124 => 165,  122 => 135,  118 => 133,  115 => 26,  113 => 25,  110 => 24,  96 => 22,  87 => 18,  83 => 16,  77 => 14,  75 => 13,  70 => 12,  68 => 11,  64 => 9,  61 => 8,  58 => 7,  55 => 6,  53 => 5,  50 => 4,  48 => 3,  46 => 2,  44 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@__main__/page/list/list.html.twig", "/var/www/html/source/Application/views/apex/tpl/page/list/list.html.twig");
    }
}
