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

/* @__main__/widget/locator/attributes.html.twig */
class __TwigTemplate_c66e284dc753e64679d9a73a1cc73659 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'widget_locator_attributes' => [$this, 'block_widget_locator_attributes'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        $this->displayBlock('widget_locator_attributes', $context, $blocks);
    }

    public function block_widget_locator_attributes($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 2
        echo "    ";
        if (($context["attributes"] ?? null)) {
            // line 3
            echo "        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["attributes"] ?? null));
            foreach ($context['_seq'] as $context["sAttrID"] => $context["oFilterAttr"]) {
                // line 4
                echo "            ";
                $context["sActiveValue"] = twig_get_attribute($this->env, $this->source, $context["oFilterAttr"], "getActiveValue", [], "method", false, false, false, 4);
                // line 5
                echo "            ";
                if (($context["sActiveValue"] ?? null)) {
                    // line 6
                    echo "                ";
                    $context["hasActiveValue"] = ($context["sActiveValue"] ?? null);
                    // line 7
                    echo "            ";
                }
                // line 8
                echo "        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['sAttrID'], $context['oFilterAttr'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 9
            echo "
        ";
            // line 10
            $context["categoryWidth"] = twig_get_attribute($this->env, $this->source, ($context["oViewConf"] ?? null), "getViewThemeParam", ["sCategoryWidth"], "method", false, false, false, 10);
            // line 11
            echo "
        <form method=\"get\" action=\"";
            // line 12
            echo twig_get_attribute($this->env, $this->source, ($context["oViewConf"] ?? null), "getSelfActionLink", [], "method", false, false, false, 12);
            echo "\" name=\"_filterlist\" class=\"d-md-flex mb-auto\">
            ";
            // line 13
            echo twig_get_attribute($this->env, $this->source, ($context["oViewConf"] ?? null), "getHiddenSid", [], "method", false, false, false, 13);
            echo "
            ";
            // line 14
            echo twig_get_attribute($this->env, $this->source, ($context["oViewConf"] ?? null), "getNavFormParams", [], "method", false, false, false, 14);
            echo "
            <input type=\"hidden\" name=\"cl\" value=\"";
            // line 15
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["oViewConf"] ?? null), "getActiveClassName", [], "method", false, false, false, 15), "html", null, true);
            echo "\">
            <input type=\"hidden\" name=\"tpl\" value=\"";
            // line 16
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["oViewConf"] ?? null), "getActTplName", [], "method", false, false, false, 16), "html", null, true);
            echo "\">
            <input type=\"hidden\" name=\"oxloadid\" value=\"";
            // line 17
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["oViewConf"] ?? null), "getActContentLoadId", [], "method", false, false, false, 17), "html", null, true);
            echo "\">
            <input type=\"hidden\" name=\"fnc\" value=\"executefilter\">
            <input type=\"hidden\" name=\"fname\" value=\"\">

            ";
            // line 21
            $context["hasActiveValue"] = null;
            // line 22
            echo "            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["attributes"] ?? null));
            foreach ($context['_seq'] as $context["sAttrID"] => $context["oFilterAttr"]) {
                // line 23
                echo "                ";
                $context["sActiveValue"] = twig_get_attribute($this->env, $this->source, $context["oFilterAttr"], "getActiveValue", [], "method", false, false, false, 23);
                // line 24
                echo "                ";
                if (($context["sActiveValue"] ?? null)) {
                    $context["hasActiveValue"] = ($context["sActiveValue"] ?? null);
                }
                // line 25
                echo "                <select class=\"form-select\" aria-label=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["oFilterAttr"], "getTitle", [], "method", false, false, false, 25), "html", null, true);
                echo "\" name=\"attrfilter[";
                echo twig_escape_filter($this->env, $context["sAttrID"], "html", null, true);
                echo "]\"
                        onchange=\"this.form.submit()\">
                    <option";
                // line 27
                if ( !($context["sActiveValue"] ?? null)) {
                    echo " selected";
                }
                echo " value=\"\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["oFilterAttr"], "getTitle", [], "method", false, false, false, 27), "html", null, true);
                echo "</option>
                    ";
                // line 28
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["oFilterAttr"], "getValues", [], "method", false, false, false, 28));
                foreach ($context['_seq'] as $context["_key"] => $context["sValue"]) {
                    // line 29
                    echo "                        <option";
                    if ((($context["sActiveValue"] ?? null) == $context["sValue"])) {
                        echo " selected";
                    }
                    // line 30
                    echo "                                value=\"";
                    echo twig_escape_filter($this->env, $context["sValue"], "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $context["sValue"], "html", null, true);
                    echo "</option>
                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['sValue'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 32
                echo "                </select>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['sAttrID'], $context['oFilterAttr'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 34
            echo "        </form>

        ";
            // line 36
            if (($context["hasActiveValue"] ?? null)) {
                // line 37
                echo "            <form method=\"get\" action=\"";
                echo twig_get_attribute($this->env, $this->source, ($context["oViewConf"] ?? null), "getSelfActionLink", [], "method", false, false, false, 37);
                echo "\" name=\"_resetFilter\"
                  id=\"resetFilter\" class=\"pull-left\">
                ";
                // line 39
                echo twig_get_attribute($this->env, $this->source, ($context["oViewConf"] ?? null), "getHiddenSid", [], "method", false, false, false, 39);
                echo "
                ";
                // line 40
                echo twig_get_attribute($this->env, $this->source, ($context["oViewConf"] ?? null), "getNavFormParams", [], "method", false, false, false, 40);
                echo "
                <input type=\"hidden\" name=\"cl\" value=\"";
                // line 41
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["oViewConf"] ?? null), "getActiveClassName", [], "method", false, false, false, 41), "html", null, true);
                echo "\">
                <input type=\"hidden\" name=\"fnc\" value=\"resetFilter\">

                <button type=\"submit\"
                        class=\"btn btn-default btn-sm ml-2\">";
                // line 45
                echo $this->extensions['OxidEsales\Twig\Extensions\TranslateExtension']->translate(["ident" => "DD_CATEGORY_RESET_BUTTON"]);
                echo "</button>
            </form>
        ";
            }
            // line 48
            echo "
    ";
        }
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@__main__/widget/locator/attributes.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo()
    {
        return array (  197 => 48,  191 => 45,  184 => 41,  180 => 40,  176 => 39,  170 => 37,  168 => 36,  164 => 34,  157 => 32,  146 => 30,  141 => 29,  137 => 28,  129 => 27,  121 => 25,  116 => 24,  113 => 23,  108 => 22,  106 => 21,  99 => 17,  95 => 16,  91 => 15,  87 => 14,  83 => 13,  79 => 12,  76 => 11,  74 => 10,  71 => 9,  65 => 8,  62 => 7,  59 => 6,  56 => 5,  53 => 4,  48 => 3,  45 => 2,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@__main__/widget/locator/attributes.html.twig", "/var/www/html/source/Application/views/apex/tpl/widget/locator/attributes.html.twig");
    }
}
