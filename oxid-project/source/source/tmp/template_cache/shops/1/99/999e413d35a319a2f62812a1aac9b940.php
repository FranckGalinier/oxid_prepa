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

/* @__main__/shop_list.html.twig */
class __TwigTemplate_ff80ec301711aff43f6bc8fe7200bcd0 extends Template
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
        $this->loadTemplate("@__main__/headitem.html.twig", "@__main__/shop_list.html.twig", 1)->display(twig_array_merge($context, ["title" => $this->extensions['OxidEsales\Twig\Extensions\Filters\TranslateExtension']->translate("GENERAL_ADMIN_TITLE"), "box" => "list"]));
        // line 2
        $context["where"] = twig_get_attribute($this->env, $this->source, ($context["oView"] ?? null), "getListFilter", [], "method", false, false, false, 2);
        // line 3
        echo "
";
        // line 4
        if (($context["readonly"] ?? null)) {
            // line 5
            echo "    ";
            $context["readonly"] = "readonly disabled";
        } else {
            // line 7
            echo "    ";
            $context["readonly"] = "";
        }
        // line 9
        echo "
<script type=\"text/javascript\">
<!--
window.onload = function ()
{
    ";
        // line 14
        if (($context["updatenav"] ?? null)) {
            // line 15
            echo "    var oTransfer = top.basefrm.edit.document.getElementById( \"transfer\" );
    oTransfer.updatenav.value = 1;
    oTransfer.cl.value = '";
            // line 17
            echo twig_escape_filter($this->env, ($context["default_edit"] ?? null), "html", null, true);
            echo "';
    ";
        }
        // line 19
        echo "    top.reloadEditFrame();
}
//-->
</script>

<form name=\"search\" id=\"search\" action=\"";
        // line 24
        echo twig_get_attribute($this->env, $this->source, ($context["oViewConf"] ?? null), "getSelfLink", [], "method", false, false, false, 24);
        echo "\" method=\"post\">
    ";
        // line 25
        $this->loadTemplate("@__main__/_formparams.html.twig", "@__main__/shop_list.html.twig", 25)->display(twig_array_merge($context, ["cl" => "shop_list", "lstrt" => ($context["lstrt"] ?? null), "actedit" => ($context["actedit"] ?? null), "oxid" => ($context["oxid"] ?? null), "fnc" => "", "language" => ($context["actlang"] ?? null), "editlanguage" => ($context["actlang"] ?? null), "delshopid" => "", "updatenav" => ""]));
        // line 26
        echo "    ";
        $this->loadTemplate("@__main__/pagetabsnippet.html.twig", "@__main__/shop_list.html.twig", 26)->display($context);
        // line 27
        echo "</form>

<script type=\"text/javascript\">
if (parent.parent != null && parent.parent.setTitle )
{   parent.parent.sShopTitle   = \"";
        // line 31
        echo addslashes(twig_get_attribute($this->env, $this->source, ($context["actshopobj"] ?? null), "oxshops__oxname", [], "any", false, false, false, 31));
        echo "\";
    parent.parent.sMenuItem    = \"";
        // line 32
        echo $this->extensions['OxidEsales\Twig\Extensions\TranslateExtension']->translate(["ident" => "SHOP_LIST_MENUITEM"]);
        echo "\";
    parent.parent.sMenuSubItem = \"";
        // line 33
        echo $this->extensions['OxidEsales\Twig\Extensions\TranslateExtension']->translate(["ident" => "SHOP_LIST_MENUSUBITEM"]);
        echo "\";
    parent.parent.sWorkArea    = \"";
        // line 34
        echo twig_escape_filter($this->env, ($context["_act"] ?? null), "html", null, true);
        echo "\";
    parent.parent.setTitle();
}
</script>
</body>
</html>
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@__main__/shop_list.html.twig";
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
        return array (  106 => 34,  102 => 33,  98 => 32,  94 => 31,  88 => 27,  85 => 26,  83 => 25,  79 => 24,  72 => 19,  67 => 17,  63 => 15,  61 => 14,  54 => 9,  50 => 7,  46 => 5,  44 => 4,  41 => 3,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@__main__/shop_list.html.twig", "/var/www/html/source/Application/views/admin_twig/tpl/shop_list.html.twig");
    }
}
