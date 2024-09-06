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

/* @__main__/layout/page.html.twig */
class __TwigTemplate_cca87d27ed638e7852f446a390f16739 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'layout_header' => [$this, 'block_layout_header'],
            'content_main' => [$this, 'block_content_main'],
            'layout_breadcrumb' => [$this, 'block_layout_breadcrumb'],
            'dd_layout_page_header_icon_menu_minibasket_list' => [$this, 'block_dd_layout_page_header_icon_menu_minibasket_list'],
            'layout_init_social' => [$this, 'block_layout_init_social'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        ob_start();
        // line 2
        echo "    ";
        if (twig_get_attribute($this->env, $this->source, ($context["oView"] ?? null), "showRDFa", [], "method", false, false, false, 2)) {
            // line 3
            echo "        ";
            $this->loadTemplate("@__main__/rdfa/rdfa.html.twig", "@__main__/layout/page.html.twig", 3)->display($context);
            // line 4
            echo "    ";
        }
        // line 5
        echo "
    ";
        // line 6
        $this->displayBlock('layout_header', $context, $blocks);
        // line 9
        echo "
    <div id=\"wrapper\" class=\"wrapper";
        // line 10
        if (($context["sidebar"] ?? null)) {
            echo " sidebar";
            echo twig_escape_filter($this->env, ($context["sidebar"] ?? null), "html", null, true);
        }
        echo "\">

        ";
        // line 12
        if ((($context["sidebar"] ?? null) && (($context["sidebar"] ?? null) != "Right"))) {
            // line 13
            echo "            <div class=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["oView"] ?? null), "getClassKey", [], "method", false, false, false, 13), "html", null, true);
            echo "\">
                ";
            // line 14
            $this->loadTemplate("@__main__/layout/sidebar.html.twig", "@__main__/layout/page.html.twig", 14)->display($context);
            // line 15
            echo "            </div>
        ";
        }
        // line 17
        echo "
        <div class=\"content\">
            ";
        // line 19
        $this->displayBlock('content_main', $context, $blocks);
        // line 39
        echo "        </div>

        ";
        // line 41
        if ((($context["sidebar"] ?? null) && (($context["sidebar"] ?? null) == "Right"))) {
            // line 42
            echo "            <div class=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["oView"] ?? null), "getClassKey", [], "method", false, false, false, 42), "html", null, true);
            echo "\">
                ";
            // line 43
            $this->loadTemplate("@__main__/layout/sidebar.html.twig", "@__main__/layout/page.html.twig", 43)->display($context);
            // line 44
            echo "            </div>
        ";
        }
        // line 46
        echo "    </div>

    ";
        // line 48
        $this->loadTemplate("@__main__/layout/footer.html.twig", "@__main__/layout/page.html.twig", 48)->display($context);
        // line 49
        echo "    ";
        $this->displayBlock('dd_layout_page_header_icon_menu_minibasket_list', $context, $blocks);
        // line 52
        echo "    ";
        $this->displayBlock('layout_init_social', $context, $blocks);
        $captureContent = ob_get_clean();
        if ('oxidBlock_pageBody' != '' && isset($captureContent)) {
        if (!isset($context['oxidBlock_pageBody'])) {
        $context['oxidBlock_pageBody'] = [];
        }
        if (!is_array($context['oxidBlock_pageBody'])) {
        $context['oxidBlock_pageBody'] = [$context['oxidBlock_pageBody']];
        }
        $context['oxidBlock_pageBody'][] = $captureContent;
        }
        unset($captureContent);
        // line 55
        $this->loadTemplate("@__main__/layout/base.html.twig", "@__main__/layout/page.html.twig", 55)->display($context);
    }

    // line 6
    public function block_layout_header($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 7
        echo "        ";
        $this->loadTemplate("@__main__/layout/header.html.twig", "@__main__/layout/page.html.twig", 7)->display(twig_array_merge($context, ["active_step" => ($context["active_step"] ?? null)]));
        // line 8
        echo "    ";
    }

    // line 19
    public function block_content_main($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 20
        echo "                ";
        $this->loadTemplate("@__main__/message/errors.html.twig", "@__main__/layout/page.html.twig", 20)->display($context);
        // line 21
        echo "
                ";
        // line 22
        if (((twig_get_attribute($this->env, $this->source, ($context["oView"] ?? null), "getClassKey", [], "method", false, false, false, 22) == "details") || ((twig_get_attribute($this->env, $this->source, ($context["oView"] ?? null), "getClassKey", [], "method", false, false, false, 22) == "content") &&  !($context["blHideBreadcrumb"] ?? null)))) {
            // line 23
            echo "                    ";
            $this->displayBlock('layout_breadcrumb', $context, $blocks);
            // line 26
            echo "                ";
        }
        // line 27
        echo "
                ";
        // line 28
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["Errors"] ?? null), "loginBoxErrors", [], "any", false, false, false, 28));
        foreach ($context['_seq'] as $context["key"] => $context["oEr"]) {
            // line 29
            echo "                    <div class=\"alert alert-danger\">
                        <p id=\"errorBadLogin\">";
            // line 30
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["oEr"], "getOxMessage", [], "method", false, false, false, 30), "html", null, true);
            echo "</p>
                    </div>
                    ";
            // line 32
            $context["bIsError"] = 1;
            // line 33
            echo "                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['oEr'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 34
        echo "
                ";
        // line 35
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["oxidBlock_content"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["_block"]) {
            // line 36
            echo "                    ";
            echo $context["_block"];
            echo "
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['_block'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 38
        echo "            ";
    }

    // line 23
    public function block_layout_breadcrumb($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 24
        echo "                        ";
        $this->loadTemplate("@__main__/widget/breadcrumb.html.twig", "@__main__/layout/page.html.twig", 24)->display($context);
        // line 25
        echo "                    ";
    }

    // line 49
    public function block_dd_layout_page_header_icon_menu_minibasket_list($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 50
        echo "    ";
        if (!empty($context["_render4cache"])) {
            echo $this->extensions['OxidEsales\Twig\Extensions\IncludeExtension']->renderForCache(['file' => "@__main__/widget/minibasket/minibasket.html.twig"]);
        } else {
            $this->loadTemplate("@__main__/widget/minibasket/minibasket.html.twig", "@__main__/layout/page.html.twig", 50)->display($context);
        }
        // line 51
        echo "    ";
    }

    // line 52
    public function block_layout_init_social($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 53
        echo "    ";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@__main__/layout/page.html.twig";
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
        return array (  234 => 53,  230 => 52,  226 => 51,  219 => 50,  215 => 49,  211 => 25,  208 => 24,  204 => 23,  200 => 38,  191 => 36,  187 => 35,  184 => 34,  178 => 33,  176 => 32,  171 => 30,  168 => 29,  164 => 28,  161 => 27,  158 => 26,  155 => 23,  153 => 22,  150 => 21,  147 => 20,  143 => 19,  139 => 8,  136 => 7,  132 => 6,  128 => 55,  114 => 52,  111 => 49,  109 => 48,  105 => 46,  101 => 44,  99 => 43,  94 => 42,  92 => 41,  88 => 39,  86 => 19,  82 => 17,  78 => 15,  76 => 14,  71 => 13,  69 => 12,  61 => 10,  58 => 9,  56 => 6,  53 => 5,  50 => 4,  47 => 3,  44 => 2,  42 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@__main__/layout/page.html.twig", "/var/www/html/source/Application/views/apex/tpl/layout/page.html.twig");
    }
}
