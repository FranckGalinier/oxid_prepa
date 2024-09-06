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

/* @__main__/i18n/js_vars.html.twig */
class __TwigTemplate_b177f7de29bdd322133d6c53dff92113 extends Template
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
        echo "<script>
    var oApex = oApex || [];
    oApex.i18n =
        {
            DD_FORM_VALIDATION_VALIDEMAIL:     \"";
        // line 5
        echo $this->extensions['OxidEsales\Twig\Extensions\TranslateExtension']->translate(["ident" => "DD_FORM_VALIDATION_VALIDEMAIL"]);
        echo "\",
            DD_FORM_VALIDATION_PASSWORDAGAIN:  \"";
        // line 6
        echo $this->extensions['OxidEsales\Twig\Extensions\TranslateExtension']->translate(["ident" => "DD_FORM_VALIDATION_PASSWORDAGAIN"]);
        echo "\",
            DD_FORM_VALIDATION_NUMBER:         \"";
        // line 7
        echo $this->extensions['OxidEsales\Twig\Extensions\TranslateExtension']->translate(["ident" => "DD_FORM_VALIDATION_NUMBER"]);
        echo "\",
            DD_FORM_VALIDATION_INTEGER:        \"";
        // line 8
        echo $this->extensions['OxidEsales\Twig\Extensions\TranslateExtension']->translate(["ident" => "DD_FORM_VALIDATION_INTEGER"]);
        echo "\",
            DD_FORM_VALIDATION_POSITIVENUMBER: \"";
        // line 9
        echo $this->extensions['OxidEsales\Twig\Extensions\TranslateExtension']->translate(["ident" => "DD_FORM_VALIDATION_POSITIVENUMBER"]);
        echo "\",
            DD_FORM_VALIDATION_NEGATIVENUMBER: \"";
        // line 10
        echo $this->extensions['OxidEsales\Twig\Extensions\TranslateExtension']->translate(["ident" => "DD_FORM_VALIDATION_NEGATIVENUMBER"]);
        echo "\",
            DD_FORM_VALIDATION_REQUIRED:       \"";
        // line 11
        echo $this->extensions['OxidEsales\Twig\Extensions\TranslateExtension']->translate(["ident" => "DD_FORM_VALIDATION_REQUIRED"]);
        echo "\",
            DD_FORM_VALIDATION_CHECKONE:       \"";
        // line 12
        echo $this->extensions['OxidEsales\Twig\Extensions\TranslateExtension']->translate(["ident" => "DD_FORM_VALIDATION_CHECKONE"]);
        echo "\"
        };
</script>
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@__main__/i18n/js_vars.html.twig";
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
        return array (  71 => 12,  67 => 11,  63 => 10,  59 => 9,  55 => 8,  51 => 7,  47 => 6,  43 => 5,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@__main__/i18n/js_vars.html.twig", "/var/www/html/source/Application/views/apex/tpl/i18n/js_vars.html.twig");
    }
}
