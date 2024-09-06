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

/* @__main__/theme_list.html.twig */
class __TwigTemplate_b1cc114888350b948a5c42a0add19dce extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'admin_theme_list_colgroup' => [$this, 'block_admin_theme_list_colgroup'],
            'admin_theme_list_filter' => [$this, 'block_admin_theme_list_filter'],
            'admin_theme_list_sorting' => [$this, 'block_admin_theme_list_sorting'],
            'admin_theme_list_item' => [$this, 'block_admin_theme_list_item'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        $this->loadTemplate("@__main__/headitem.html.twig", "@__main__/theme_list.html.twig", 1)->display(twig_array_merge($context, ["title" => $this->extensions['OxidEsales\Twig\Extensions\Filters\TranslateExtension']->translate("GENERAL_ADMIN_TITLE"), "box" => "list"]));
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
<script type=\"text/javascript\">
<!--
window.onload = function ()
{
    top.reloadEditFrame();
    ";
        // line 14
        if ((($context["updatelist"] ?? null) == 1)) {
            // line 15
            echo "        top.oxid.admin.updateList('";
            echo twig_escape_filter($this->env, ($context["oxid"] ?? null), "html", null, true);
            echo "');
    ";
        }
        // line 17
        echo "}
//-->
</script>


<div id=\"liste\">

<form name=\"search\" id=\"search\" action=\"";
        // line 24
        echo twig_get_attribute($this->env, $this->source, ($context["oViewConf"] ?? null), "getSelfLink", [], "method", false, false, false, 24);
        echo "\" method=\"post\">
    ";
        // line 25
        echo twig_get_attribute($this->env, $this->source, ($context["oViewConf"] ?? null), "getHiddenSid", [], "method", false, false, false, 25);
        echo "
    <input type=\"hidden\" name=\"cl\" value=\"theme_list\">
    <input type=\"hidden\" name=\"lstrt\" value=\"";
        // line 27
        echo twig_escape_filter($this->env, ($context["lstrt"] ?? null), "html", null, true);
        echo "\">
    <input type=\"hidden\" name=\"sort\" value=\"";
        // line 28
        echo twig_escape_filter($this->env, ($context["sort"] ?? null), "html", null, true);
        echo "\">
    <input type=\"hidden\" name=\"actedit\" value=\"";
        // line 29
        echo twig_escape_filter($this->env, ($context["actedit"] ?? null), "html", null, true);
        echo "\">
    <input type=\"hidden\" name=\"oxid\" value=\"";
        // line 30
        echo twig_escape_filter($this->env, ($context["oxid"] ?? null), "html", null, true);
        echo "\">
    <input type=\"hidden\" name=\"fnc\" value=\"\">
    <input type=\"hidden\" name=\"language\" value=\"";
        // line 32
        echo twig_escape_filter($this->env, ($context["actlang"] ?? null), "html", null, true);
        echo "\">
    <input type=\"hidden\" name=\"editlanguage\" value=\"";
        // line 33
        echo twig_escape_filter($this->env, ($context["actlang"] ?? null), "html", null, true);
        echo "\">

<table cellspacing=\"0\" cellpadding=\"0\" border=\"0\" width=\"100%\">
<colgroup>
    ";
        // line 37
        $this->displayBlock('admin_theme_list_colgroup', $context, $blocks);
        // line 41
        echo "</colgroup>
<tr class=\"listitem\">
    ";
        // line 43
        $this->displayBlock('admin_theme_list_filter', $context, $blocks);
        // line 51
        echo "</tr>
<tr>
    ";
        // line 53
        $this->displayBlock('admin_theme_list_sorting', $context, $blocks);
        // line 61
        echo "</tr>
";
        // line 62
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["mylist"] ?? null));
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
        foreach ($context['_seq'] as $context["_key"] => $context["listitem"]) {
            // line 63
            echo "    ";
            $context["counter"] = (((array_key_exists("counter", $context)) ? (_twig_default_filter(($context["counter"] ?? null), 0)) : (0)) + 1);
            // line 64
            echo "    <tr id=\"row.";
            $context["defaultCounter"] = (((array_key_exists("defaultCounter", $context)) ? (_twig_default_filter(($context["defaultCounter"] ?? null), 0)) : (0)) + 1);
            echo "\">
        ";
            // line 65
            $this->displayBlock('admin_theme_list_item', $context, $blocks);
            // line 81
            echo "    </tr>
";
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['listitem'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 83
        $this->loadTemplate("@__main__/pagenavisnippet.html.twig", "@__main__/theme_list.html.twig", 83)->display(twig_array_merge($context, ["colspan" => "5"]));
        // line 84
        echo "</table>
</form>
</div>

";
        // line 88
        $this->loadTemplate("@__main__/pagetabsnippet.html.twig", "@__main__/theme_list.html.twig", 88)->display($context);
        // line 89
        echo "
<script type=\"text/javascript\">
if (parent.parent)
{   parent.parent.sShopTitle   = \"";
        // line 92
        echo addslashes(twig_get_attribute($this->env, $this->source, ($context["actshopobj"] ?? null), "oxshops__oxname", [], "any", false, false, false, 92));
        echo "\";
    parent.parent.sMenuItem    = \"";
        // line 93
        echo $this->extensions['OxidEsales\Twig\Extensions\TranslateExtension']->translate(["ident" => "mxextensions"]);
        echo "\";
    parent.parent.sMenuSubItem = \"";
        // line 94
        echo $this->extensions['OxidEsales\Twig\Extensions\TranslateExtension']->translate(["ident" => "mxtheme"]);
        echo "\";
    parent.parent.sWorkArea    = \"";
        // line 95
        echo twig_escape_filter($this->env, ($context["_act"] ?? null), "html", null, true);
        echo "\";
    parent.parent.setTitle();
}
</script>
</body>
</html>
";
    }

    // line 37
    public function block_admin_theme_list_colgroup($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 38
        echo "        <col width=\"3%\">
        <col width=\"98%\">
    ";
    }

    // line 43
    public function block_admin_theme_list_filter($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 44
        echo "        <td valign=\"top\" class=\"listfilter first\" height=\"20\">
            <div class=\"r1\"><div class=\"b1\">&nbsp;</div></div>
        </td>
        <td valign=\"top\" class=\"listfilter\" height=\"20\">
            <div class=\"r1\"><div class=\"b1\">&nbsp;</div></div>
        </td>
    ";
    }

    // line 53
    public function block_admin_theme_list_sorting($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 54
        echo "        <td class=\"listheader first\" height=\"15\">
            <b><a href=\"Javascript:document.search.sort.value='oxtitle';document.search.submit();\" class=\"listheader\">";
        // line 55
        echo $this->extensions['OxidEsales\Twig\Extensions\TranslateExtension']->translate(["ident" => "GENERAL_ACTIVE"]);
        echo "</a></b>
        </td>
        <td class=\"listheader\" height=\"15\">
            <b><a href=\"Javascript:document.search.sort.value='oxtitle';document.search.submit();\" class=\"listheader\">";
        // line 58
        echo $this->extensions['OxidEsales\Twig\Extensions\TranslateExtension']->translate(["ident" => "GENERAL_NAME"]);
        echo "</a></b>
        </td>
    ";
    }

    // line 65
    public function block_admin_theme_list_item($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 66
        echo "            ";
        $context["zebra"] = twig_cycle(["listitem", "listitem2"], ($context["counter"] ?? null));
        // line 67
        echo "            ";
        if ((twig_get_attribute($this->env, $this->source, ($context["listitem"] ?? null), "getInfo", ["id"], "method", false, false, false, 67) == ($context["oxid"] ?? null))) {
            // line 68
            echo "                ";
            $context["zebra"] = "listitem4";
            // line 69
            echo "            ";
        }
        // line 70
        echo "            <td valign=\"top\" class=\"";
        echo twig_escape_filter($this->env, ($context["zebra"] ?? null), "html", null, true);
        if (twig_get_attribute($this->env, $this->source, ($context["listitem"] ?? null), "getInfo", ["active"], "method", false, false, false, 70)) {
            echo " active";
        }
        echo "\" height=\"15\">
                <div class=\"listitemfloating\">
                    <a href=\"Javascript:top.oxid.admin.editThis('";
        // line 72
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["listitem"] ?? null), "getInfo", ["id"], "method", false, false, false, 72), "html", null, true);
        echo "');\">&nbsp;</a></div></td>
                </div>
            </td>
            <td valign=\"top\" class=\"";
        // line 75
        echo twig_escape_filter($this->env, ($context["zebra"] ?? null), "html", null, true);
        echo "\" height=\"15\">
                <div class=\"listitemfloating\">
                    <a href=\"Javascript:top.oxid.admin.editThis('";
        // line 77
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["listitem"] ?? null), "getInfo", ["id"], "method", false, false, false, 77), "html", null, true);
        echo "');\">";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["listitem"] ?? null), "getInfo", ["title"], "method", false, false, false, 77), "html", null, true);
        echo "</a>
                </div>
            </td>
        ";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@__main__/theme_list.html.twig";
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
        return array (  295 => 77,  290 => 75,  284 => 72,  275 => 70,  272 => 69,  269 => 68,  266 => 67,  263 => 66,  259 => 65,  252 => 58,  246 => 55,  243 => 54,  239 => 53,  229 => 44,  225 => 43,  219 => 38,  215 => 37,  204 => 95,  200 => 94,  196 => 93,  192 => 92,  187 => 89,  185 => 88,  179 => 84,  177 => 83,  162 => 81,  160 => 65,  155 => 64,  152 => 63,  135 => 62,  132 => 61,  130 => 53,  126 => 51,  124 => 43,  120 => 41,  118 => 37,  111 => 33,  107 => 32,  102 => 30,  98 => 29,  94 => 28,  90 => 27,  85 => 25,  81 => 24,  72 => 17,  66 => 15,  64 => 14,  56 => 8,  52 => 6,  48 => 4,  46 => 3,  43 => 2,  41 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@__main__/theme_list.html.twig", "/var/www/html/source/Application/views/admin_twig/tpl/theme_list.html.twig");
    }
}
