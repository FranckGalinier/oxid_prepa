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

/* @__main__/widget/locator/sort.html.twig */
class __TwigTemplate_6bbe0a28aec0f93300ec4b86af75ecb5 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'widget_locator_sort' => [$this, 'block_widget_locator_sort'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        $this->displayBlock('widget_locator_sort', $context, $blocks);
    }

    public function block_widget_locator_sort($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 2
        echo "    ";
        if (twig_get_attribute($this->env, $this->source, ($context["oView"] ?? null), "showSorting", [], "method", false, false, false, 2)) {
            // line 3
            echo "        <div class=\"sort-list ms-auto\">
            ";
            // line 4
            $context["_listType"] = twig_get_attribute($this->env, $this->source, ($context["oView"] ?? null), "getListDisplayType", [], "method", false, false, false, 4);
            // line 5
            echo "            ";
            $context["_additionalParams"] = twig_get_attribute($this->env, $this->source, ($context["oView"] ?? null), "getAdditionalParams", [], "method", false, false, false, 5);
            // line 6
            echo "            ";
            $context["_artPerPage"] = twig_get_attribute($this->env, $this->source, ($context["oViewConf"] ?? null), "getArtPerPageCount", [], "method", false, false, false, 6);
            // line 7
            echo "            ";
            $context["_sortColumnVarName"] = twig_get_attribute($this->env, $this->source, ($context["oView"] ?? null), "getSortOrderByParameterName", [], "method", false, false, false, 7);
            // line 8
            echo "            ";
            $context["_sortDirectionVarName"] = twig_get_attribute($this->env, $this->source, ($context["oView"] ?? null), "getSortOrderParameterName", [], "method", false, false, false, 8);
            // line 9
            echo "
            ";
            // line 10
            if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["oView"] ?? null), "getSortColumns", [], "method", false, false, false, 10)) > 1)) {
                // line 11
                echo "                    <button type=\"button\" class=\"dropdown-toggle form-select\" id=\"sort\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\">
                        ";
                // line 12
                if (twig_get_attribute($this->env, $this->source, ($context["oView"] ?? null), "getListOrderBy", [], "method", false, false, false, 12)) {
                    // line 13
                    echo "                            ";
                    echo $this->extensions['OxidEsales\Twig\Extensions\TranslateExtension']->translate(["ident" => twig_upper_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["oView"] ?? null), "getListOrderBy", [], "method", false, false, false, 13))]);
                    echo "
                            ";
                    // line 14
                    if ((twig_get_attribute($this->env, $this->source, ($context["oView"] ?? null), "getListOrderDirection", [], "method", false, false, false, 14) == "desc")) {
                        // line 15
                        echo "                                ";
                        echo $this->extensions['OxidEsales\Twig\Extensions\TranslateExtension']->translate(["ident" => "DD_SORT_DESC"]);
                        echo "
                            ";
                    } else {
                        // line 17
                        echo "                                ";
                        echo $this->extensions['OxidEsales\Twig\Extensions\TranslateExtension']->translate(["ident" => "DD_SORT_ASC"]);
                        echo "
                            ";
                    }
                    // line 19
                    echo "                        ";
                } else {
                    // line 20
                    echo "                            ";
                    echo $this->extensions['OxidEsales\Twig\Extensions\TranslateExtension']->translate(["ident" => "SORT"]);
                    echo "
                        ";
                }
                // line 22
                echo "                    </button>
                    <ul class=\"dropdown-menu\" aria-labelledby=\"sort\" role=\"menu\">
                        ";
                // line 24
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["oView"] ?? null), "getSortColumns", [], "method", false, false, false, 24));
                foreach ($context['_seq'] as $context["_key"] => $context["sColumnName"]) {
                    // line 25
                    echo "                            <li>
                                <a class=\"dropdown-item";
                    // line 26
                    if (((twig_get_attribute($this->env, $this->source, ($context["oView"] ?? null), "getListOrderDirection", [], "method", false, false, false, 26) == "desc") && ($context["sColumnName"] == twig_get_attribute($this->env, $this->source, ($context["oView"] ?? null), "getListOrderBy", [], "method", false, false, false, 26)))) {
                        echo " active";
                    }
                    echo "\" href=\"";
                    echo $this->extensions['OxidEsales\Twig\Extensions\UrlExtension']->addUrlParameters(twig_get_attribute($this->env, $this->source, ($context["oView"] ?? null), "getLink", [], "method", false, false, false, 26), ((((((((((("ldtype=" . ($context["_listType"] ?? null)) . "&amp;_artperpage=") . ($context["_artPerPage"] ?? null)) . "&amp;") . ($context["_sortColumnVarName"] ?? null)) . "=") . $context["sColumnName"]) . "&amp;") . ($context["_sortDirectionVarName"] ?? null)) . "=desc&amp;pgNr=0&amp;") . ($context["_additionalParams"] ?? null)));
                    echo "\" title=\"";
                    echo $this->extensions['OxidEsales\Twig\Extensions\TranslateExtension']->translate(["ident" => twig_upper_filter($this->env, $context["sColumnName"])]);
                    echo " ";
                    echo $this->extensions['OxidEsales\Twig\Extensions\TranslateExtension']->translate(["ident" => "DD_SORT_DESC"]);
                    echo "\">
                                    ";
                    // line 27
                    echo $this->extensions['OxidEsales\Twig\Extensions\TranslateExtension']->translate(["ident" => twig_upper_filter($this->env, $context["sColumnName"])]);
                    echo " ";
                    echo $this->extensions['OxidEsales\Twig\Extensions\TranslateExtension']->translate(["ident" => "DD_SORT_DESC"]);
                    echo "
                                </a>
                            </li>
                            <li>
                                <a class=\"dropdown-item";
                    // line 31
                    if (((twig_get_attribute($this->env, $this->source, ($context["oView"] ?? null), "getListOrderDirection", [], "method", false, false, false, 31) == "asc") && ($context["sColumnName"] == twig_get_attribute($this->env, $this->source, ($context["oView"] ?? null), "getListOrderBy", [], "method", false, false, false, 31)))) {
                        echo " active";
                    }
                    echo "\" href=\"";
                    echo $this->extensions['OxidEsales\Twig\Extensions\UrlExtension']->addUrlParameters(twig_get_attribute($this->env, $this->source, ($context["oView"] ?? null), "getLink", [], "method", false, false, false, 31), ((((((((((("ldtype=" . ($context["_listType"] ?? null)) . "&amp;_artperpage=") . ($context["_artPerPage"] ?? null)) . "&amp;") . ($context["_sortColumnVarName"] ?? null)) . "=") . $context["sColumnName"]) . "&amp;") . ($context["_sortDirectionVarName"] ?? null)) . "=asc&amp;pgNr=0&amp;") . ($context["_additionalParams"] ?? null)));
                    echo "\" title=\"";
                    echo $this->extensions['OxidEsales\Twig\Extensions\TranslateExtension']->translate(["ident" => twig_upper_filter($this->env, $context["sColumnName"])]);
                    echo " ";
                    echo $this->extensions['OxidEsales\Twig\Extensions\TranslateExtension']->translate(["ident" => "DD_SORT_ASC"]);
                    echo "\">
                                    ";
                    // line 32
                    echo $this->extensions['OxidEsales\Twig\Extensions\TranslateExtension']->translate(["ident" => twig_upper_filter($this->env, $context["sColumnName"])]);
                    echo " ";
                    echo $this->extensions['OxidEsales\Twig\Extensions\TranslateExtension']->translate(["ident" => "DD_SORT_ASC"]);
                    echo "
                                </a>
                            </li>
                        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['sColumnName'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 36
                echo "                    </ul>
            ";
            } else {
                // line 38
                echo "                <nav class=\"nav\">
                    ";
                // line 39
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["oView"] ?? null), "getSortColumns", [], "method", false, false, false, 39));
                foreach ($context['_seq'] as $context["_key"] => $context["sColumnName"]) {
                    // line 40
                    echo "                        <a class=\"nav-link";
                    if (((twig_get_attribute($this->env, $this->source, ($context["oView"] ?? null), "getListOrderDirection", [], "method", false, false, false, 40) == "desc") && ($context["sColumnName"] == twig_get_attribute($this->env, $this->source, ($context["oView"] ?? null), "getListOrderBy", [], "method", false, false, false, 40)))) {
                        echo " active";
                    }
                    echo "\" href=\"";
                    echo $this->extensions['OxidEsales\Twig\Extensions\UrlExtension']->addUrlParameters(twig_get_attribute($this->env, $this->source, ($context["oView"] ?? null), "getLink", [], "method", false, false, false, 40), ((((((((((("ldtype=" . ($context["_listType"] ?? null)) . "&amp;_artperpage=") . ($context["_artPerPage"] ?? null)) . "&amp;") . ($context["_sortColumnVarName"] ?? null)) . "=") . $context["sColumnName"]) . "&amp;") . ($context["_sortDirectionVarName"] ?? null)) . "=desc&amp;pgNr=0&amp;") . ($context["_additionalParams"] ?? null)));
                    echo "\" title=\"";
                    echo $this->extensions['OxidEsales\Twig\Extensions\TranslateExtension']->translate(["ident" => twig_upper_filter($this->env, $context["sColumnName"])]);
                    echo " ";
                    echo $this->extensions['OxidEsales\Twig\Extensions\TranslateExtension']->translate(["ident" => "DD_SORT_DESC"]);
                    echo "\">
                            ";
                    // line 41
                    echo $this->extensions['OxidEsales\Twig\Extensions\TranslateExtension']->translate(["ident" => twig_upper_filter($this->env, $context["sColumnName"])]);
                    echo " ";
                    echo $this->extensions['OxidEsales\Twig\Extensions\TranslateExtension']->translate(["ident" => "DD_SORT_DESC"]);
                    echo "
                        </a>
                        <a class=\"nav-link";
                    // line 43
                    if (((twig_get_attribute($this->env, $this->source, ($context["oView"] ?? null), "getListOrderDirection", [], "method", false, false, false, 43) == "asc") && ($context["sColumnName"] == twig_get_attribute($this->env, $this->source, ($context["oView"] ?? null), "getListOrderBy", [], "method", false, false, false, 43)))) {
                        echo " active";
                    }
                    echo "\" href=\"";
                    echo $this->extensions['OxidEsales\Twig\Extensions\UrlExtension']->addUrlParameters(twig_get_attribute($this->env, $this->source, ($context["oView"] ?? null), "getLink", [], "method", false, false, false, 43), ((((((((((("ldtype=" . ($context["_listType"] ?? null)) . "&amp;_artperpage=") . ($context["_artPerPage"] ?? null)) . "&amp;") . ($context["_sortColumnVarName"] ?? null)) . "=") . $context["sColumnName"]) . "&amp;") . ($context["_sortDirectionVarName"] ?? null)) . "=asc&amp;pgNr=0&amp;") . ($context["_additionalParams"] ?? null)));
                    echo "\" title=\"";
                    echo $this->extensions['OxidEsales\Twig\Extensions\TranslateExtension']->translate(["ident" => twig_upper_filter($this->env, $context["sColumnName"])]);
                    echo " ";
                    echo $this->extensions['OxidEsales\Twig\Extensions\TranslateExtension']->translate(["ident" => "DD_SORT_ASC"]);
                    echo "\">
                            ";
                    // line 44
                    echo $this->extensions['OxidEsales\Twig\Extensions\TranslateExtension']->translate(["ident" => twig_upper_filter($this->env, $context["sColumnName"])]);
                    echo " ";
                    echo $this->extensions['OxidEsales\Twig\Extensions\TranslateExtension']->translate(["ident" => "DD_SORT_ASC"]);
                    echo "
                        </a>
                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['sColumnName'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 47
                echo "                </nav>
            ";
            }
            // line 49
            echo "        </div>
    ";
        }
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@__main__/widget/locator/sort.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo()
    {
        return array (  217 => 49,  213 => 47,  202 => 44,  190 => 43,  183 => 41,  170 => 40,  166 => 39,  163 => 38,  159 => 36,  147 => 32,  135 => 31,  126 => 27,  114 => 26,  111 => 25,  107 => 24,  103 => 22,  97 => 20,  94 => 19,  88 => 17,  82 => 15,  80 => 14,  75 => 13,  73 => 12,  70 => 11,  68 => 10,  65 => 9,  62 => 8,  59 => 7,  56 => 6,  53 => 5,  51 => 4,  48 => 3,  45 => 2,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@__main__/widget/locator/sort.html.twig", "/var/www/html/source/Application/views/apex/tpl/widget/locator/sort.html.twig");
    }
}
