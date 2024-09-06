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

/* @__main__/module_list.html.twig */
class __TwigTemplate_9801c7afd0b160f53ebc5138b5518f6a extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'admin_modules_list_table' => [$this, 'block_admin_modules_list_table'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        $this->loadTemplate("@__main__/headitem.html.twig", "@__main__/module_list.html.twig", 1)->display(twig_array_merge($context, ["title" => $this->extensions['OxidEsales\Twig\Extensions\Filters\TranslateExtension']->translate("GENERAL_ADMIN_TITLE"), "box" => "list"]));
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
        // line 25
        echo twig_get_attribute($this->env, $this->source, ($context["oViewConf"] ?? null), "getSelfLink", [], "method", false, false, false, 25);
        echo "\" method=\"post\">
    ";
        // line 26
        echo twig_get_attribute($this->env, $this->source, ($context["oViewConf"] ?? null), "getHiddenSid", [], "method", false, false, false, 26);
        echo "
    <input type=\"hidden\" name=\"cl\" value=\"module_list\">
    <input type=\"hidden\" name=\"lstrt\" value=\"";
        // line 28
        echo twig_escape_filter($this->env, ($context["lstrt"] ?? null), "html", null, true);
        echo "\">
    <input type=\"hidden\" name=\"sort\" value=\"";
        // line 29
        echo twig_escape_filter($this->env, ($context["sort"] ?? null), "html", null, true);
        echo "\">
    <input type=\"hidden\" name=\"actedit\" value=\"";
        // line 30
        echo twig_escape_filter($this->env, ($context["actedit"] ?? null), "html", null, true);
        echo "\">
    <input type=\"hidden\" name=\"oxid\" value=\"";
        // line 31
        echo twig_escape_filter($this->env, ($context["oxid"] ?? null), "html", null, true);
        echo "\">
    <input type=\"hidden\" name=\"fnc\" value=\"\">
    <input type=\"hidden\" name=\"language\" value=\"";
        // line 33
        echo twig_escape_filter($this->env, ($context["actlang"] ?? null), "html", null, true);
        echo "\">
    <input type=\"hidden\" name=\"editlanguage\" value=\"";
        // line 34
        echo twig_escape_filter($this->env, ($context["actlang"] ?? null), "html", null, true);
        echo "\">

";
        // line 36
        $this->displayBlock('admin_modules_list_table', $context, $blocks);
        // line 80
        echo "</form>
</div>

<script language=\"javascript\">
    sModuleId = '";
        // line 84
        echo twig_escape_filter($this->env, ($context["oxid"] ?? null), "html", null, true);
        echo "';
    if (sModuleId == '-1' ) {
        sActClass = \"module_main\";
        sDefClass = \"module_main\";
        var oSearch = document.getElementById( \"search\" );
        oSearch.actedit.value = 1;
    }
</script>

";
        // line 93
        $this->loadTemplate("@__main__/pagetabsnippet.html.twig", "@__main__/module_list.html.twig", 93)->display($context);
        // line 94
        echo "
<script type=\"text/javascript\">
if (parent.parent)
{   parent.parent.sShopTitle   = \"";
        // line 97
        echo addslashes(twig_get_attribute($this->env, $this->source, ($context["actshopobj"] ?? null), "oxshops__oxname", [], "any", false, false, false, 97));
        echo "\";
    parent.parent.sMenuItem    = \"";
        // line 98
        echo $this->extensions['OxidEsales\Twig\Extensions\TranslateExtension']->translate(["ident" => "mxextensions"]);
        echo "\";
    parent.parent.sMenuSubItem = \"";
        // line 99
        echo $this->extensions['OxidEsales\Twig\Extensions\TranslateExtension']->translate(["ident" => "mxmodule"]);
        echo "\";
    parent.parent.sWorkArea    = \"";
        // line 100
        echo twig_escape_filter($this->env, ($context["_act"] ?? null), "html", null, true);
        echo "\";
    parent.parent.setTitle();
}
</script>
</body>
</html>
";
    }

    // line 36
    public function block_admin_modules_list_table($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 37
        echo "<table cellspacing=\"0\" cellpadding=\"0\" border=\"0\" width=\"100%\">
<colgroup>
    <col width=\"3%\">
    <col width=\"98%\">
</colgroup>
<tr class=\"listitem\">
    <td valign=\"top\" class=\"listfilter first\" height=\"20\">
        <div class=\"r1\"><div class=\"b1\">&nbsp;</div></div>
    </td>
    <td valign=\"top\" class=\"listfilter\" height=\"20\">
        <div class=\"r1\"><div class=\"b1\">&nbsp;</div></div>
    </td>
</tr>
<tr>
    <td class=\"listheader first\" height=\"15\">
        <b><a href=\"Javascript:document.search.sort.value='oxtitle';document.search.submit();\" class=\"listheader\">";
        // line 52
        echo $this->extensions['OxidEsales\Twig\Extensions\TranslateExtension']->translate(["ident" => "GENERAL_ACTIVE"]);
        echo "</a></b>
    </td>
    <td class=\"listheader\" height=\"15\">
        <b><a href=\"Javascript:document.search.sort.value='oxtitle';document.search.submit();\" class=\"listheader\">";
        // line 55
        echo $this->extensions['OxidEsales\Twig\Extensions\TranslateExtension']->translate(["ident" => "GENERAL_NAME"]);
        echo "</a></b>
    </td>
</tr>
";
        // line 58
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["mylist"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["listitem"]) {
            // line 59
            echo "    ";
            $context["counter"] = (((array_key_exists("counter", $context)) ? (_twig_default_filter(($context["counter"] ?? null), 0)) : (0)) + 1);
            // line 60
            echo "    <tr id=\"row.";
            $context["defaultCounter"] = (((array_key_exists("defaultCounter", $context)) ? (_twig_default_filter(($context["defaultCounter"] ?? null), 0)) : (0)) + 1);
            echo "\">
        ";
            // line 61
            $context["zebra"] = twig_cycle(["listitem", "listitem2"], ($context["counter"] ?? null));
            // line 62
            echo "        ";
            if ((twig_get_attribute($this->env, $this->source, $context["listitem"], "getInfo", ["id"], "method", false, false, false, 62) == ($context["oxid"] ?? null))) {
                // line 63
                echo "            ";
                $context["zebra"] = "listitem4";
                // line 64
                echo "        ";
            }
            // line 65
            echo "        <td valign=\"top\" class=\"";
            echo twig_escape_filter($this->env, ($context["zebra"] ?? null), "html", null, true);
            if (twig_get_attribute($this->env, $this->source, $context["listitem"], "isActive", [], "method", false, false, false, 65)) {
                echo " active";
            }
            echo "\" height=\"15\">
            <div class=\"listitemfloating\">
                <a href=\"Javascript:top.oxid.admin.editThis('";
            // line 67
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["listitem"], "getId", [], "method", false, false, false, 67), "html", null, true);
            echo "');\">&nbsp;</a></div></td>
            </div>
        </td>
        <td valign=\"top\" class=\"";
            // line 70
            echo twig_escape_filter($this->env, ($context["zebra"] ?? null), "html", null, true);
            echo "\" height=\"15\">
            <div class=\"listitemfloating\">
                <a href=\"Javascript:top.oxid.admin.editThis('";
            // line 72
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["listitem"], "getId", [], "method", false, false, false, 72), "html", null, true);
            echo "');\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["listitem"], "getTitle", [], "method", false, false, false, 72), "html", null, true);
            echo "</a>
            </div>
        </td>
    </tr>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['listitem'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 77
        $this->loadTemplate("@__main__/pagenavisnippet.html.twig", "@__main__/module_list.html.twig", 77)->display(twig_array_merge($context, ["colspan" => "5"]));
        // line 78
        echo "</table>
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@__main__/module_list.html.twig";
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
        return array (  255 => 78,  253 => 77,  240 => 72,  235 => 70,  229 => 67,  220 => 65,  217 => 64,  214 => 63,  211 => 62,  209 => 61,  204 => 60,  201 => 59,  197 => 58,  191 => 55,  185 => 52,  168 => 37,  164 => 36,  153 => 100,  149 => 99,  145 => 98,  141 => 97,  136 => 94,  134 => 93,  122 => 84,  116 => 80,  114 => 36,  109 => 34,  105 => 33,  100 => 31,  96 => 30,  92 => 29,  88 => 28,  83 => 26,  79 => 25,  69 => 17,  63 => 15,  61 => 14,  53 => 8,  49 => 6,  45 => 4,  43 => 3,  40 => 2,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@__main__/module_list.html.twig", "/var/www/html/source/Application/views/admin_twig/tpl/module_list.html.twig");
    }
}
