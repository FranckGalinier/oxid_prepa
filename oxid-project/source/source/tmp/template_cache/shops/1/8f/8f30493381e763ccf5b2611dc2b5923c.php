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

/* @__main__/pagetabsnippet.html.twig */
class __TwigTemplate_9aad8dbf1ea31225fe6d6c472b810384 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "<div class=\"tabs\">
    <table cellspacing=\"0\" cellpadding=\"0\" border=\"0\">
        <tr>
            ";
        // line 4
        $context["_cnt"] = "0";
        // line 5
        echo "            ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["editnavi"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["edit"]) {
            // line 6
            echo "                ";
            if (twig_get_attribute($this->env, $this->source, $context["edit"], "getAttribute", ["active"], "method", false, false, false, 6)) {
                // line 7
                echo "                    ";
                $context["_act"] = twig_get_attribute($this->env, $this->source, $context["edit"], "getAttribute", ["id"], "method", false, false, false, 7);
                // line 8
                echo "                    ";
                $context["_state"] = "active";
                // line 9
                echo "                ";
            } elseif ((($context["oxid"] ?? null) == "-1")) {
                // line 10
                echo "                    ";
                $context["_state"] = "disabled";
                // line 11
                echo "                ";
            } else {
                // line 12
                echo "                    ";
                $context["_state"] = "inactive";
                // line 13
                echo "                ";
            }
            // line 14
            echo "
                ";
            // line 15
            if ((($context["_cnt"] ?? null) == 0)) {
                // line 16
                echo "                    ";
                $context["_state"] = (($context["_state"] ?? null) . " first");
                // line 17
                echo "                ";
            }
            // line 18
            echo "
                ";
            // line 19
            if ((($context["_cnt"] ?? null) == (twig_get_attribute($this->env, $this->source, ($context["editnavi"] ?? null), "length", [], "any", false, false, false, 19) - 1))) {
                // line 20
                echo "                    ";
                $context["_state"] = (($context["_state"] ?? null) . " last");
                // line 21
                echo "                ";
            }
            // line 22
            echo "
                ";
            // line 23
            if ((twig_get_attribute($this->env, $this->source, $context["edit"], "getAttribute", ["external"], "method", false, false, false, 23) == "true")) {
                // line 24
                echo "                    ";
                $context["_action"] = "ChangeExternal";
                // line 25
                echo "                    ";
                $context["_param1"] = twig_get_attribute($this->env, $this->source, $context["edit"], "getAttribute", ["location"], "method", false, false, false, 25);
                // line 26
                echo "                ";
            } else {
                // line 27
                echo "                    ";
                $context["_action"] = ((array_key_exists("sEditAction", $context)) ? (_twig_default_filter(($context["sEditAction"] ?? null), "top.oxid.admin.changeEditBar")) : ("top.oxid.admin.changeEditBar"));
                // line 28
                echo "                    ";
                $context["_param1"] = twig_get_attribute($this->env, $this->source, $context["edit"], "getAttribute", ["cl"], "method", false, false, false, 28);
                // line 29
                echo "                ";
            }
            // line 30
            echo "
                <td class=\"tab ";
            // line 31
            echo twig_escape_filter($this->env, ($context["_state"] ?? null), "html", null, true);
            echo "\">
                    <div class=\"r1\">
                        <div class=\"b1\">
                            ";
            // line 34
            if (((($context["oxid"] ?? null) != "-1") || ($context["noOXIDCheck"] ?? null))) {
                // line 35
                echo "                                <a href=\"#";
                echo twig_escape_filter($this->env, ($context["_param1"] ?? null), "html", null, true);
                echo "\"
                                   onclick=\"";
                // line 36
                echo twig_escape_filter($this->env, ($context["_action"] ?? null), "html", null, true);
                echo "('";
                echo twig_escape_filter($this->env, ($context["_param1"] ?? null), "html", null, true);
                echo "',";
                echo twig_escape_filter($this->env, ($context["_cnt"] ?? null), "html", null, true);
                echo ");return false;\">";
                echo $this->extensions['OxidEsales\Twig\Extensions\TranslateExtension']->translate(["ident" => twig_get_attribute($this->env, $this->source, $context["edit"], "getAttribute", ["id"], "method", false, false, false, 36), "noerror" => true]);
                echo "</a>
                            ";
            } else {
                // line 38
                echo "                                ";
                echo $this->extensions['OxidEsales\Twig\Extensions\TranslateExtension']->translate(["ident" => twig_get_attribute($this->env, $this->source, $context["edit"], "getAttribute", ["id"], "method", false, false, false, 38), "noerror" => true]);
                echo "
                            ";
            }
            // line 40
            echo "                        </div>
                    </div>
                </td>

                ";
            // line 44
            $context["_cnt"] = (($context["_cnt"] ?? null) + 1);
            // line 45
            echo "            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['edit'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 46
        echo "            <td class=\"line\"></td>
        </tr>
    </table>
</div>";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@__main__/pagetabsnippet.html.twig";
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
        return array (  165 => 46,  159 => 45,  157 => 44,  151 => 40,  145 => 38,  134 => 36,  129 => 35,  127 => 34,  121 => 31,  118 => 30,  115 => 29,  112 => 28,  109 => 27,  106 => 26,  103 => 25,  100 => 24,  98 => 23,  95 => 22,  92 => 21,  89 => 20,  87 => 19,  84 => 18,  81 => 17,  78 => 16,  76 => 15,  73 => 14,  70 => 13,  67 => 12,  64 => 11,  61 => 10,  58 => 9,  55 => 8,  52 => 7,  49 => 6,  44 => 5,  42 => 4,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@__main__/pagetabsnippet.html.twig", "/var/www/html/source/Application/views/admin_twig/tpl/pagetabsnippet.html.twig");
    }
}
