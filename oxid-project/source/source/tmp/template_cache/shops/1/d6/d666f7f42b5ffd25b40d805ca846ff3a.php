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

/* @__main__/widget/footer/newsletter.html.twig */
class __TwigTemplate_cd211f789020ca1e299db5d8646d69d0 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'dd_footer_newsletter_form' => [$this, 'block_dd_footer_newsletter_form'],
            'dd_footer_newsletter_form_inner' => [$this, 'block_dd_footer_newsletter_form_inner'],
            'dd_footer_newsletter_form_inner_group' => [$this, 'block_dd_footer_newsletter_form_inner_group'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        $this->displayBlock('dd_footer_newsletter_form', $context, $blocks);
    }

    public function block_dd_footer_newsletter_form($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 2
        echo "    <form class=\"newsletter-form\"  action=\"";
        echo twig_get_attribute($this->env, $this->source, ($context["oViewConf"] ?? null), "getSslSelfLink", [], "method", false, false, false, 2);
        echo "\" method=\"post\">
        <div class=\"mb-3\">
            ";
        // line 4
        $this->displayBlock('dd_footer_newsletter_form_inner', $context, $blocks);
        // line 21
        echo "        </div>
    </form>
";
    }

    // line 4
    public function block_dd_footer_newsletter_form_inner($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 5
        echo "                ";
        echo twig_get_attribute($this->env, $this->source, ($context["oViewConf"] ?? null), "getHiddenSid", [], "method", false, false, false, 5);
        echo "
                <input type=\"hidden\" name=\"fnc\" value=\"fill\">
                <input type=\"hidden\" name=\"cl\" value=\"newsletter\">
                ";
        // line 8
        if (twig_get_attribute($this->env, $this->source, ($context["oView"] ?? null), "getProduct", [], "method", false, false, false, 8)) {
            // line 9
            echo "                    ";
            $context["product"] = twig_get_attribute($this->env, $this->source, ($context["oView"] ?? null), "getProduct", [], "method", false, false, false, 9);
            // line 10
            echo "                    <input type=\"hidden\" name=\"anid\" value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "oxarticles__oxnid", [], "any", false, false, false, 10), "value", [], "any", false, false, false, 10), "html", null, true);
            echo "\">
                ";
        }
        // line 12
        echo "
                ";
        // line 13
        $this->displayBlock('dd_footer_newsletter_form_inner_group', $context, $blocks);
        // line 20
        echo "            ";
    }

    // line 13
    public function block_dd_footer_newsletter_form_inner_group($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 14
        echo "                    <label class=\"visually-hidden\" for=\"footer_newsletter_oxusername\">";
        echo $this->extensions['OxidEsales\Twig\Extensions\TranslateExtension']->translate(["ident" => "NEWSLETTER"]);
        echo "</label>
                    <div class=\"input-group\">
                        <input class=\"form-control\" type=\"email\" id=\"footer_newsletter_oxusername\" name=\"editval[oxuser__oxusername]\" placeholder=\"";
        // line 16
        echo $this->extensions['OxidEsales\Twig\Extensions\TranslateExtension']->translate(["ident" => "EMAIL"]);
        echo "\" aria-label=\"";
        echo $this->extensions['OxidEsales\Twig\Extensions\TranslateExtension']->translate(["ident" => "EMAIL"]);
        echo "\">
                        <button class=\"btn btn-primary\" type=\"submit\">";
        // line 17
        echo $this->extensions['OxidEsales\Twig\Extensions\TranslateExtension']->translate(["ident" => "SUBSCRIBE"]);
        echo "</button>
                    </div>
                ";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@__main__/widget/footer/newsletter.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo()
    {
        return array (  108 => 17,  102 => 16,  96 => 14,  92 => 13,  88 => 20,  86 => 13,  83 => 12,  77 => 10,  74 => 9,  72 => 8,  65 => 5,  61 => 4,  55 => 21,  53 => 4,  47 => 2,  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@__main__/widget/footer/newsletter.html.twig", "/var/www/html/source/Application/views/apex/tpl/widget/footer/newsletter.html.twig");
    }
}
