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

/* @__main__/_formparams.html.twig */
class __TwigTemplate_e8719b0d9941eb9eb1098d677cdc457c extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'admin_formparams' => [$this, 'block_admin_formparams'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        $this->displayBlock('admin_formparams', $context, $blocks);
    }

    public function block_admin_formparams($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 2
        echo "    ";
        echo twig_get_attribute($this->env, $this->source, ($context["oViewConf"] ?? null), "getHiddenSid", [], "method", false, false, false, 2);
        echo "
    <input type=\"hidden\" name=\"cl\" value=\"";
        // line 3
        echo twig_escape_filter($this->env, ($context["cl"] ?? null), "html", null, true);
        echo "\">
    <input type=\"hidden\" name=\"lstrt\" value=\"";
        // line 4
        echo twig_escape_filter($this->env, ($context["lstrt"] ?? null), "html", null, true);
        echo "\">
    <input type=\"hidden\" name=\"actedit\" value=\"";
        // line 5
        echo twig_escape_filter($this->env, ($context["actedit"] ?? null), "html", null, true);
        echo "\">
    <input type=\"hidden\" name=\"oxid\" value=\"";
        // line 6
        echo twig_escape_filter($this->env, ($context["oxid"] ?? null), "html", null, true);
        echo "\">
    <input type=\"hidden\" name=\"fnc\" value=\"";
        // line 7
        echo twig_escape_filter($this->env, ($context["fnc"] ?? null), "html", null, true);
        echo "\">
    <input type=\"hidden\" name=\"language\" value=\"";
        // line 8
        echo twig_escape_filter($this->env, ($context["language"] ?? null), "html", null, true);
        echo "\">
    <input type=\"hidden\" name=\"editlanguage\" value=\"";
        // line 9
        echo twig_escape_filter($this->env, ($context["editlanguage"] ?? null), "html", null, true);
        echo "\">
    <input type=\"hidden\" name=\"delshopid\" value=\"";
        // line 10
        echo twig_escape_filter($this->env, ($context["delshopid"] ?? null), "html", null, true);
        echo "\">
    <input type=\"hidden\" name=\"updatenav\" value=\"";
        // line 11
        echo twig_escape_filter($this->env, ($context["updatenav"] ?? null), "html", null, true);
        echo "\">
    ";
        // line 13
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["oView"] ?? null), "getListSorting", [], "method", false, false, false, 13));
        foreach ($context['_seq'] as $context["sTable"] => $context["aField"]) {
            // line 14
            echo "        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["aField"]);
            foreach ($context['_seq'] as $context["sField"] => $context["sSorting"]) {
                // line 15
                echo "        <input type=\"hidden\" name=\"sort[";
                echo twig_escape_filter($this->env, $context["sTable"], "html", null, true);
                echo "][";
                echo twig_escape_filter($this->env, $context["sField"], "html", null, true);
                echo "]\" value=\"";
                echo twig_escape_filter($this->env, $context["sSorting"], "html", null, true);
                echo "\">
      ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['sField'], $context['sSorting'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 17
            echo "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['sTable'], $context['aField'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@__main__/_formparams.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo()
    {
        return array (  109 => 17,  96 => 15,  91 => 14,  86 => 13,  82 => 11,  78 => 10,  74 => 9,  70 => 8,  66 => 7,  62 => 6,  58 => 5,  54 => 4,  50 => 3,  45 => 2,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@__main__/_formparams.html.twig", "/var/www/html/source/Application/views/admin_twig/tpl/_formparams.html.twig");
    }
}
