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

/* @__main__/sysreq_list.html.twig */
class __TwigTemplate_cd8757b5ce0b06c7e52dbc793dece630 extends Template
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
        $this->loadTemplate("@__main__/headitem.html.twig", "@__main__/sysreq_list.html.twig", 1)->display(twig_array_merge($context, ["title" => $this->extensions['OxidEsales\Twig\Extensions\Filters\TranslateExtension']->translate("GENERAL_ADMIN_TITLE"), "box" => "list"]));
        // line 2
        echo "
<script type=\"text/javascript\">
    if (parent.parent)
    {   parent.parent.sShopTitle   = \"";
        // line 5
        echo addslashes(twig_get_attribute($this->env, $this->source, ($context["actshopobj"] ?? null), "oxshops__oxname", [], "any", false, false, false, 5));
        echo "\";
        parent.parent.sMenuItem    = \"";
        // line 6
        echo $this->extensions['OxidEsales\Twig\Extensions\TranslateExtension']->translate(["ident" => "SYSREQ_LIST_MENUITEM"]);
        echo "\";
        parent.parent.sMenuSubItem = \"";
        // line 7
        echo $this->extensions['OxidEsales\Twig\Extensions\TranslateExtension']->translate(["ident" => "SYSREQ_LIST_MENUSUBITEM"]);
        echo "\";
        parent.parent.sWorkArea    = \"";
        // line 8
        echo twig_escape_filter($this->env, ($context["_act"] ?? null), "html", null, true);
        echo "\";
        parent.parent.setTitle();
    }
</script>

<script type=\"text/javascript\">
<!--
window.onload = function ()
{
    top.reloadEditFrame();
    ";
        // line 18
        if ((($context["updatelist"] ?? null) == 1)) {
            // line 19
            echo "        top.oxid.admin.updateList('";
            echo twig_escape_filter($this->env, ($context["oxid"] ?? null), "html", null, true);
            echo "');
    ";
        }
        // line 21
        echo "}
//-->
</script>

<div id=\"liste\">

</div>

";
        // line 29
        $this->loadTemplate("@__main__/pagetabsnippet.html.twig", "@__main__/sysreq_list.html.twig", 29)->display($context);
        // line 30
        echo "
</body>
</html>";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@__main__/sysreq_list.html.twig";
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
        return array (  89 => 30,  87 => 29,  77 => 21,  71 => 19,  69 => 18,  56 => 8,  52 => 7,  48 => 6,  44 => 5,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@__main__/sysreq_list.html.twig", "/var/www/html/source/Application/views/admin_twig/tpl/sysreq_list.html.twig");
    }
}
