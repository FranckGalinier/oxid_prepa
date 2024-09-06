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

/* @__main__/systeminfo.html.twig */
class __TwigTemplate_ecaec2a175f1533e322e48f406e7df2e extends Template
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
        $this->loadTemplate("@__main__/headitem.html.twig", "@__main__/systeminfo.html.twig", 1)->display(twig_array_merge($context, ["title" => $this->extensions['OxidEsales\Twig\Extensions\Filters\TranslateExtension']->translate("GENERAL_ADMIN_TITLE"), "box" => " "]));
        // line 2
        echo "
<script type=\"text/javascript\">
    if(top)
    {
        top.sMenuItem    = \"";
        // line 6
        echo $this->extensions['OxidEsales\Twig\Extensions\TranslateExtension']->translate(["ident" => "SYSTEMINFO_MENUITEM"]);
        echo "\";
        top.sMenuSubItem = \"";
        // line 7
        echo $this->extensions['OxidEsales\Twig\Extensions\TranslateExtension']->translate(["ident" => "SYSTEMINFO_MENUSUBITEM"]);
        echo "\";
        top.sWorkArea    = \"";
        // line 8
        echo twig_escape_filter($this->env, ($context["_act"] ?? null), "html", null, true);
        echo "\";
        top.setTitle();
    }
</script>

<form name=\"transfer\" id=\"transfer\" action=\"";
        // line 13
        echo twig_get_attribute($this->env, $this->source, ($context["oViewConf"] ?? null), "getSelfLink", [], "method", false, false, false, 13);
        echo "\" method=\"post\">
    ";
        // line 14
        echo twig_get_attribute($this->env, $this->source, ($context["oViewConf"] ?? null), "getHiddenSid", [], "method", false, false, false, 14);
        echo "
    <input type=\"hidden\" name=\"oxid\" value=\"";
        // line 15
        echo twig_escape_filter($this->env, ($context["oxid"] ?? null), "html", null, true);
        echo "\">
    <input type=\"hidden\" name=\"oxidCopy\" value=\"";
        // line 16
        echo twig_escape_filter($this->env, ($context["oxid"] ?? null), "html", null, true);
        echo "\">
    <input type=\"hidden\" name=\"cl\" value=\"article_main\">
    <input type=\"hidden\" name=\"w\" value=\"main\">
</form>

<form name=\"myedit\" id=\"myedit\" action=\"";
        // line 21
        echo twig_get_attribute($this->env, $this->source, ($context["oViewConf"] ?? null), "getSelfLink", [], "method", false, false, false, 21);
        echo "\" method=\"post\">
";
        // line 22
        echo twig_get_attribute($this->env, $this->source, ($context["oViewConf"] ?? null), "getHiddenSid", [], "method", false, false, false, 22);
        echo "
<input type=\"hidden\" name=\"cl\" value=\"article_main\">
<input type=\"hidden\" name=\"fnc\" value=\"\">
<input type=\"hidden\" name=\"oxid\" value=\"";
        // line 25
        echo twig_escape_filter($this->env, ($context["oxid"] ?? null), "html", null, true);
        echo "\">
<input type=\"hidden\" name=\"voxid\" value=\"";
        // line 26
        echo twig_escape_filter($this->env, ($context["oxid"] ?? null), "html", null, true);
        echo "\">
<input type=\"hidden\" name=\"oxparentid\" value=\"";
        // line 27
        echo twig_escape_filter($this->env, ($context["oxparentid"] ?? null), "html", null, true);
        echo "\">
<input type=\"hidden\" name=\"editval[oxarticles__oxid]\" value=\"";
        // line 28
        echo twig_escape_filter($this->env, ($context["oxid"] ?? null), "html", null, true);
        echo "\">

</form><br /><br />
<div class=\"center\">

";
        // line 33
        if (($context["isdemo"] ?? null)) {
            // line 34
            echo "    <h1>";
            echo $this->extensions['OxidEsales\Twig\Extensions\TranslateExtension']->translate(["ident" => "SYSTEMINFO_DEMOMODE"]);
            echo "</h1>
";
        }
        // line 36
        echo "
<table border=\"0\" cellpadding=\"3\" width=\"600\">
<tr class=\"h\">
    <th>";
        // line 39
        echo $this->extensions['OxidEsales\Twig\Extensions\TranslateExtension']->translate(["ident" => "SYSTEMINFO_VARIABLE"]);
        echo "</th>
    <th>";
        // line 40
        echo $this->extensions['OxidEsales\Twig\Extensions\TranslateExtension']->translate(["ident" => "SYSTEMINFO_VALUE"]);
        echo "</th>
</tr>
";
        // line 42
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["aSystemInfo"] ?? null));
        foreach ($context['_seq'] as $context["name"] => $context["value"]) {
            // line 43
            echo "<tr>
    <td class=\"e\">";
            // line 44
            echo twig_escape_filter($this->env, $context["name"], "html", null, true);
            echo "</td>
    <td class=\"v\">";
            // line 45
            echo $context["value"];
            echo "</td>
</tr>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['name'], $context['value'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 48
        echo "</table>
</div>";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@__main__/systeminfo.html.twig";
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
        return array (  153 => 48,  144 => 45,  140 => 44,  137 => 43,  133 => 42,  128 => 40,  124 => 39,  119 => 36,  113 => 34,  111 => 33,  103 => 28,  99 => 27,  95 => 26,  91 => 25,  85 => 22,  81 => 21,  73 => 16,  69 => 15,  65 => 14,  61 => 13,  53 => 8,  49 => 7,  45 => 6,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@__main__/systeminfo.html.twig", "/var/www/html/source/Application/views/admin_twig/tpl/systeminfo.html.twig");
    }
}
