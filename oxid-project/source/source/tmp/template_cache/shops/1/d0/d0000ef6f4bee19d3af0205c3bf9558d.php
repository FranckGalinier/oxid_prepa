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

/* @__main__/widget/header/loginbox.html.twig */
class __TwigTemplate_07cf98098a137b7041056983053ae49c extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'thirdparty_login' => [$this, 'block_thirdparty_login'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        $context["bIsError"] = 0;
        // line 2
        ob_start();
        // line 3
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["Errors"] ?? null), "loginBoxErrors", [], "any", false, false, false, 3));
        foreach ($context['_seq'] as $context["key"] => $context["oEr"]) {
            // line 4
            echo "        <p id=\"errorBadLogin\" class=\"alert alert-danger\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["oEr"], "getOxMessage", [], "method", false, false, false, 4), "html", null, true);
            echo "</p>
        ";
            // line 5
            $context["bIsError"] = 1;
            // line 6
            echo "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['oEr'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        $captureContent = ob_get_clean();
        $context['twig']['capture']['loginErrors'] = $captureContent;
        unset($captureContent);
        // line 8
        echo "<div class=\"dropdown-menu dropdown-menu-end dropdown-menu-arrow\">
    <form class=\"px-3 py-2\" name=\"login\" action=\"";
        // line 9
        echo twig_get_attribute($this->env, $this->source, ($context["oViewConf"] ?? null), "getSslSelfLink", [], "method", false, false, false, 9);
        echo "\" method=\"post\" style=\"width: 270px\">
        ";
        // line 10
        echo twig_get_attribute($this->env, $this->source, ($context["oViewConf"] ?? null), "getHiddenSid", [], "method", false, false, false, 10);
        echo "
        ";
        // line 11
        echo twig_get_attribute($this->env, $this->source, ($context["oViewConf"] ?? null), "getNavFormParams", [], "method", false, false, false, 11);
        echo "
        <input type=\"hidden\" name=\"fnc\" value=\"login_noredirect\">
        <input type=\"hidden\" name=\"cl\" value=\"";
        // line 13
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["oViewConf"] ?? null), "getTopActiveClassName", [], "method", false, false, false, 13), "html", null, true);
        echo "\">
        ";
        // line 14
        if ((twig_get_attribute($this->env, $this->source, ($context["oViewConf"] ?? null), "getTopActiveClassName", [], "method", false, false, false, 14) == "content")) {
            // line 15
            echo "            <input type=\"hidden\" name=\"oxcid\" value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["oViewConf"] ?? null), "getContentId", [], "method", false, false, false, 15), "html", null, true);
            echo "\">
        ";
        }
        // line 17
        echo "        <input type=\"hidden\" name=\"pgNr\" value=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["oView"] ?? null), "getActPage", [], "method", false, false, false, 17), "html", null, true);
        echo "\">
        <input type=\"hidden\" name=\"CustomError\" value=\"loginBoxErrors\">
        ";
        // line 19
        if (twig_get_attribute($this->env, $this->source, ($context["oViewConf"] ?? null), "getActArticleId", [], "method", false, false, false, 19)) {
            // line 20
            echo "            <input type=\"hidden\" name=\"anid\" value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["oViewConf"] ?? null), "getActArticleId", [], "method", false, false, false, 20), "html", null, true);
            echo "\">
        ";
        }
        // line 22
        echo "
        <div class=\"mb-3 form-floating\">
            <input id=\"loginEmail\" type=\"email\" name=\"lgn_usr\" autocomplete=\"email\" class=\"form-control\" placeholder=\"";
        // line 24
        echo $this->extensions['OxidEsales\Twig\Extensions\TranslateExtension']->translate(["ident" => "EMAIL_ADDRESS"]);
        echo "\">
            <label for=\"loginEmail\">";
        // line 25
        echo $this->extensions['OxidEsales\Twig\Extensions\TranslateExtension']->translate(["ident" => "EMAIL_ADDRESS"]);
        echo "</label>
        </div>

        <div class=\"mb-3 form-floating\">
            <input id=\"loginPasword\" type=\"password\" name=\"lgn_pwd\" autocomplete=\"current-password\" class=\"form-control\" placeholder=\"";
        // line 29
        echo $this->extensions['OxidEsales\Twig\Extensions\TranslateExtension']->translate(["ident" => "PASSWORD"]);
        echo "\">
            <label for=\"loginPasword\">";
        // line 30
        echo $this->extensions['OxidEsales\Twig\Extensions\TranslateExtension']->translate(["ident" => "PASSWORD"]);
        echo "</label>
        </div>
        <a class=\"small forgotPasswordOpener\" href=\"";
        // line 32
        echo $this->extensions['OxidEsales\Twig\Extensions\UrlExtension']->getSeoUrl(["ident" => (twig_get_attribute($this->env, $this->source, ($context["oViewConf"] ?? null), "getSslSelfLink", [], "method", false, false, false, 32) . "cl=forgotpwd")]);
        echo "\" title=\"";
        echo $this->extensions['OxidEsales\Twig\Extensions\TranslateExtension']->translate(["ident" => "FORGOT_PASSWORD"]);
        echo "\">";
        echo $this->extensions['OxidEsales\Twig\Extensions\TranslateExtension']->translate(["ident" => "FORGOT_PASSWORD"]);
        echo "</a>

        ";
        // line 34
        if (twig_get_attribute($this->env, $this->source, ($context["oViewConf"] ?? null), "isFunctionalityEnabled", ["blShowRememberMe"], "method", false, false, false, 34)) {
            // line 35
            echo "            <div class=\"form-check mb-3\">
                <input type=\"checkbox\" class=\"form-check-input\" value=\"1\" name=\"lgn_cook\" id=\"remember\">
                <label class=\"form-check-label\" for=\"remember\">
                    ";
            // line 38
            echo $this->extensions['OxidEsales\Twig\Extensions\TranslateExtension']->translate(["ident" => "REMEMBER_ME"]);
            echo "
                </label>
            </div>
        ";
        }
        // line 42
        echo "
        <button type=\"submit\" class=\"btn btn-primary\">";
        // line 43
        echo $this->extensions['OxidEsales\Twig\Extensions\TranslateExtension']->translate(["ident" => "LOGIN"]);
        echo "</button>

        <a class=\"btn btn-outline-primary\" id=\"registerLink\"  href=\"";
        // line 45
        echo $this->extensions['OxidEsales\Twig\Extensions\UrlExtension']->getSeoUrl(["ident" => (twig_get_attribute($this->env, $this->source, ($context["oViewConf"] ?? null), "getSslSelfLink", [], "method", false, false, false, 45) . "cl=register")]);
        echo "\" title=\"";
        echo $this->extensions['OxidEsales\Twig\Extensions\TranslateExtension']->translate(["ident" => "REGISTER"]);
        echo "\">";
        echo $this->extensions['OxidEsales\Twig\Extensions\TranslateExtension']->translate(["ident" => "REGISTER"]);
        echo "</a>

        ";
        // line 47
        $this->displayBlock('thirdparty_login', $context, $blocks);
        // line 48
        echo "    </form>
</div>
";
    }

    // line 47
    public function block_thirdparty_login($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@__main__/widget/header/loginbox.html.twig";
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
        return array (  177 => 47,  171 => 48,  169 => 47,  160 => 45,  155 => 43,  152 => 42,  145 => 38,  140 => 35,  138 => 34,  129 => 32,  124 => 30,  120 => 29,  113 => 25,  109 => 24,  105 => 22,  99 => 20,  97 => 19,  91 => 17,  85 => 15,  83 => 14,  79 => 13,  74 => 11,  70 => 10,  66 => 9,  63 => 8,  54 => 6,  52 => 5,  47 => 4,  42 => 3,  40 => 2,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@__main__/widget/header/loginbox.html.twig", "/var/www/html/source/Application/views/apex/tpl/widget/header/loginbox.html.twig");
    }
}
