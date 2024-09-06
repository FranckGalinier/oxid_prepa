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

/* @__main__/sysreq_main.html.twig */
class __TwigTemplate_4b6cb22509b0dc1ade77d70d37b1e085 extends Template
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
        $this->loadTemplate("@__main__/headitem.html.twig", "@__main__/sysreq_main.html.twig", 1)->display(twig_array_merge($context, ["title" => $this->extensions['OxidEsales\Twig\Extensions\Filters\TranslateExtension']->translate("GENERAL_ADMIN_TITLE")]));
        // line 2
        echo "
";
        // line 3
        if (($context["readonly"] ?? null)) {
            // line 4
            echo "    ";
            $context["readonly"] = "readonly disabled";
        } else {
            // line 6
            echo "    ";
            $context["readonly"] = "";
        }
        // line 8
        echo "
<ul class=\"req\">
    <h3>";
        // line 10
        echo $this->extensions['OxidEsales\Twig\Extensions\TranslateExtension']->translate(["ident" => "SYSREQ_DESCRIPTION_REQ"]);
        echo ":</h3>
    ";
        // line 11
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["aInfo"] ?? null));
        foreach ($context['_seq'] as $context["sGroupName"] => $context["aModules"]) {
            // line 12
            echo "    <li class='group'>";
            echo $this->extensions['OxidEsales\Twig\Extensions\TranslateExtension']->translate(["ident" => twig_upper_filter($this->env, $this->extensions['OxidEsales\Twig\Extensions\Filters\CatExtension']->cat("SYSREQ_", $context["sGroupName"]))]);
            echo "
        ";
            // line 13
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["aModules"]);
            foreach ($context['_seq'] as $context["sModule"] => $context["iModuleState"]) {
                // line 14
                echo "            <ul>
                ";
                // line 15
                $context["class"] = twig_get_attribute($this->env, $this->source, ($context["oView"] ?? null), "getModuleClass", [$context["iModuleState"]], "method", false, false, false, 15);
                // line 16
                echo "                <li id=\"";
                echo twig_escape_filter($this->env, $context["sModule"], "html", null, true);
                echo "\" class=\"";
                echo twig_escape_filter($this->env, ($context["class"] ?? null), "html", null, true);
                echo "\"><a href=";
                echo twig_get_attribute($this->env, $this->source, ($context["oView"] ?? null), "getReqInfoUrl", [$context["sModule"]], "method", false, false, false, 16);
                echo " target=\"_blank\">";
                echo $this->extensions['OxidEsales\Twig\Extensions\TranslateExtension']->translate(["ident" => twig_upper_filter($this->env, $this->extensions['OxidEsales\Twig\Extensions\Filters\CatExtension']->cat("SYSREQ_", $context["sModule"]))]);
                echo "</a></li>
            </ul>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['sModule'], $context['iModuleState'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 19
            echo "    </li>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['sGroupName'], $context['aModules'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 21
        echo "    <li class=\"clear\"></li>
</ul>

";
        // line 24
        if (($context["aCollations"] ?? null)) {
            // line 25
            echo "    <ul class=\"req\">
        <h3>";
            // line 26
            echo $this->extensions['OxidEsales\Twig\Extensions\TranslateExtension']->translate(["ident" => "SYSREQ_DESCRIPTION_COLL"]);
            echo ":</h3>
        ";
            // line 27
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["aCollations"] ?? null));
            foreach ($context['_seq'] as $context["sTable"] => $context["aColumns"]) {
                // line 28
                echo "        <li class=\"coll\">";
                echo twig_escape_filter($this->env, $context["sTable"], "html", null, true);
                echo "
            ";
                // line 29
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($context["aColumns"]);
                foreach ($context['_seq'] as $context["sColumn"] => $context["sCollation"]) {
                    // line 30
                    echo "                <ul>
                    <li id=\"";
                    // line 31
                    echo twig_escape_filter($this->env, $context["sColumn"], "html", null, true);
                    echo "\" class=\"fail\">";
                    echo twig_escape_filter($this->env, $context["sColumn"], "html", null, true);
                    echo " - ";
                    echo twig_escape_filter($this->env, $context["sCollation"], "html", null, true);
                    echo "</li>
                </ul>
            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['sColumn'], $context['sCollation'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 34
                echo "        </li>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['sTable'], $context['aColumns'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 36
            echo "        <li class=\"clear\"></li>
    </ul>
";
        }
        // line 39
        echo "
<ul class=\"req\">
    <li class=\"pass\"> - ";
        // line 41
        echo $this->extensions['OxidEsales\Twig\Extensions\TranslateExtension']->translate(["ident" => "SYSREQ_DESCRIPTION_PASS"]);
        echo "</li>
    <li class=\"pmin\"> - ";
        // line 42
        echo $this->extensions['OxidEsales\Twig\Extensions\TranslateExtension']->translate(["ident" => "SYSREQ_DESCRIPTION_PMIN"]);
        echo "</li>
    <li class=\"fail\"> - ";
        // line 43
        echo $this->extensions['OxidEsales\Twig\Extensions\TranslateExtension']->translate(["ident" => "SYSREQ_DESCRIPTION_FAIL"]);
        echo "</li>
    <li class=\"null\"> - ";
        // line 44
        echo $this->extensions['OxidEsales\Twig\Extensions\TranslateExtension']->translate(["ident" => "SYSREQ_DESCRIPTION_NULL"]);
        echo "</li>
</ul>

";
        // line 47
        $this->loadTemplate("@__main__/bottomnaviitem.html.twig", "@__main__/sysreq_main.html.twig", 47)->display($context);
        // line 48
        $this->loadTemplate("@__main__/bottomitem.html.twig", "@__main__/sysreq_main.html.twig", 48)->display($context);
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@__main__/sysreq_main.html.twig";
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
        return array (  180 => 48,  178 => 47,  172 => 44,  168 => 43,  164 => 42,  160 => 41,  156 => 39,  151 => 36,  144 => 34,  131 => 31,  128 => 30,  124 => 29,  119 => 28,  115 => 27,  111 => 26,  108 => 25,  106 => 24,  101 => 21,  94 => 19,  78 => 16,  76 => 15,  73 => 14,  69 => 13,  64 => 12,  60 => 11,  56 => 10,  52 => 8,  48 => 6,  44 => 4,  42 => 3,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@__main__/sysreq_main.html.twig", "/var/www/html/source/Application/views/admin_twig/tpl/sysreq_main.html.twig");
    }
}
