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

/* @__main__/inputhelp.html.twig */
class __TwigTemplate_cde18c5375ebf0331770f7bea26bd433 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'admin_inputhelp' => [$this, 'block_admin_inputhelp'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        if (( !twig_test_empty(($context["sHelpText"] ?? null)) && (($context["sHelpText"] ?? null) != ($context["sHelpId"] ?? null)))) {
            // line 2
            $this->displayBlock('admin_inputhelp', $context, $blocks);
        }
    }

    public function block_admin_inputhelp($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 3
        echo "    <input type=\"button\" id=\"helpBtn_";
        echo twig_escape_filter($this->env, ($context["sHelpId"] ?? null), "html", null, true);
        echo "\" class=\"btnShowHelpPanel\" onClick=\"YAHOO.oxid.help.showPanel('";
        echo twig_escape_filter($this->env, ($context["sHelpId"] ?? null), "html", null, true);
        echo "');\">
    <div id=\"helpText_";
        // line 4
        echo twig_escape_filter($this->env, ($context["sHelpId"] ?? null), "html", null, true);
        echo "\" class=\"helpPanelText\">
        ";
        // line 5
        echo ($context["sHelpText"] ?? null);
        echo "
    </div>
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@__main__/inputhelp.html.twig";
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
        return array (  59 => 5,  55 => 4,  48 => 3,  40 => 2,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@__main__/inputhelp.html.twig", "/var/www/html/source/Application/views/admin_twig/tpl/inputhelp.html.twig");
    }
}
