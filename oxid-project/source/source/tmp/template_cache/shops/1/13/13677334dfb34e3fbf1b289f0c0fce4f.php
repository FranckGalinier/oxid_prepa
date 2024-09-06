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

/* @__main__/widget/header/cookienote.html.twig */
class __TwigTemplate_18bf1b4341c57b9e2c25fdd48044a390 extends Template
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
        if (twig_get_attribute($this->env, $this->source, ($context["oView"] ?? null), "isEnabled", [], "method", false, false, false, 1)) {
            // line 2
            echo "    <div id=\"cookieNote\" hidden>
        <div class=\"alert alert-info\" style=\"margin: 0;\">
            <button id=\"cookieNoteCloseButton\" type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\">
                <span aria-hidden=\"true\"></span><span class=\"visually-hidden-focusable\">";
            // line 5
            echo $this->extensions['OxidEsales\Twig\Extensions\TranslateExtension']->translate(["ident" => "CLOSE"]);
            echo "</span>
            </button>
            ";
            // line 7
            echo $this->extensions['OxidEsales\Twig\Extensions\TranslateExtension']->translate(["ident" => "COOKIE_NOTE"]);
            echo "
            <span class=\"cancelCookie\"><a href=\"";
            // line 8
            echo $this->extensions['OxidEsales\Twig\Extensions\UrlExtension']->getSeoUrl(["ident" => (twig_get_attribute($this->env, $this->source, ($context["oViewConf"] ?? null), "getSelfLink", [], "method", false, false, false, 8) . "cl=clearcookies")]);
            echo "\" title=\"";
            echo $this->extensions['OxidEsales\Twig\Extensions\TranslateExtension']->translate(["ident" => "COOKIE_NOTE_DISAGREE"]);
            echo "\">";
            echo $this->extensions['OxidEsales\Twig\Extensions\TranslateExtension']->translate(["ident" => "COOKIE_NOTE_DISAGREE"]);
            echo "</a></span>
        </div>
    </div>
";
        }
        // line 12
        echo $this->extensions['OxidEsales\Twig\Extensions\ScriptExtension']->script($context, ["widget" => twig_get_attribute($this->env, $this->source, ($context["oView"] ?? null), "getClassKey", [], "method", false, false, false, 12), "dynamic" => ($context["__oxid_include_dynamic"] ?? null)]);
        echo "
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@__main__/widget/header/cookienote.html.twig";
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
        return array (  64 => 12,  53 => 8,  49 => 7,  44 => 5,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@__main__/widget/header/cookienote.html.twig", "/var/www/html/source/Application/views/apex/tpl/widget/header/cookienote.html.twig");
    }
}
