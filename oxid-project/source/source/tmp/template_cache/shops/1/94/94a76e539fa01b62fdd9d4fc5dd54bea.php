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

/* @__main__/include/article_list_actions.html.twig */
class __TwigTemplate_92aa3effe1ca3d8c4af6f35ac0221967 extends Template
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
        if ( !($context["readonly"] ?? null)) {
            // line 2
            echo "    <a href=\"Javascript:top.oxid.admin.deleteThis('";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["listitem"] ?? null), "oxarticles__oxid", [], "any", false, false, false, 2), "value", [], "any", false, false, false, 2), "html", null, true);
            echo "');\" class=\"delete\" id=\"del.";
            echo twig_escape_filter($this->env, ($context["_cnt"] ?? null), "html", null, true);
            echo "\"title=\"\" ";
            $this->loadTemplate("@__main__/help.html.twig", "@__main__/include/article_list_actions.html.twig", 2)->display(twig_array_merge($context, ["helpid" => "item_delete"]));
            echo "></a>
";
        }
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@__main__/include/article_list_actions.html.twig";
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
        return array (  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@__main__/include/article_list_actions.html.twig", "/var/www/html/source/Application/views/admin_twig/tpl/include/article_list_actions.html.twig");
    }
}
