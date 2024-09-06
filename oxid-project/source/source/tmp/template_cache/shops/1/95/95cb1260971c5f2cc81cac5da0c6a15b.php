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

/* @__main__/login.html.twig */
class __TwigTemplate_1ea36fd071055ddec07857b17c5c0cbe extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'admin_login_form' => [$this, 'block_admin_login_form'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "<!DOCTYPE HTML PUBLIC \"-//W3C//DTD HTML 4.01//EN\" \"http://www.w3.org/TR/html4/strict.dtd\">
<html>
<head>
    <title>";
        // line 4
        echo $this->extensions['OxidEsales\Twig\Extensions\TranslateExtension']->translate(["ident" => "LOGIN_TITLE"]);
        echo "</title>
    <meta http-equiv=\"Content-Type\" content=\"text/html; charset=";
        // line 5
        echo twig_escape_filter($this->env, ($context["charset"] ?? null), "html", null, true);
        echo "\">
    <meta name=\"ROBOTS\" content=\"NOINDEX, NOFOLLOW\">
    <link rel=\"shortcut icon\" href=\"";
        // line 7
        echo twig_get_attribute($this->env, $this->source, ($context["oViewConf"] ?? null), "getImageUrl", [], "method", false, false, false, 7);
        echo "favicon.ico\">
    <link rel=\"stylesheet\" href=\"";
        // line 8
        echo twig_get_attribute($this->env, $this->source, ($context["oViewConf"] ?? null), "getResourceUrl", [], "method", false, false, false, 8);
        echo "login.css\">
    <link rel=\"stylesheet\" href=\"";
        // line 9
        echo twig_get_attribute($this->env, $this->source, ($context["oViewConf"] ?? null), "getResourceUrl", [], "method", false, false, false, 9);
        echo "colors_";
        echo twig_escape_filter($this->env, twig_lower_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["oViewConf"] ?? null), "getEdition", [], "method", false, false, false, 9)), "html", null, true);
        echo ".css\">
</head>
<body>

";
        // line 13
        $this->loadTemplate("@__main__/include/login_messages.html.twig", "@__main__/login.html.twig", 13)->display($context);
        // line 14
        echo "
<div class=\"admin-login-box\">

    <div id=\"shopLogo\"><img src=\"";
        // line 17
        echo twig_get_attribute($this->env, $this->source, ($context["oViewConf"] ?? null), "getImageUrl", ["logo_dark.svg"], "method", false, false, false, 17);
        echo "\" /></div>

    <form action=\"";
        // line 19
        echo twig_get_attribute($this->env, $this->source, ($context["oViewConf"] ?? null), "getSelfLink", [], "method", false, false, false, 19);
        echo "\" target=\"_top\" method=\"post\" name=\"login\" id=\"login\">

        ";
        // line 21
        $this->displayBlock('admin_login_form', $context, $blocks);
        // line 53
        echo "
        <input type=\"submit\" value=\"";
        // line 54
        echo $this->extensions['OxidEsales\Twig\Extensions\TranslateExtension']->translate(["ident" => "LOGIN_START"]);
        echo "\" class=\"btn\"><br>
    </form>
</div>

<script type=\"text/javascript\">if (window != window.top) top.location.href = document.location.href;</script>

</body>
</html>
";
    }

    // line 21
    public function block_admin_login_form($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 22
        echo "            ";
        echo twig_get_attribute($this->env, $this->source, ($context["oViewConf"] ?? null), "getHiddenSid", [], "method", false, false, false, 22);
        echo "

            <input type=\"hidden\" name=\"fnc\" value=\"checklogin\">
            <input type=\"hidden\" name=\"cl\" value=\"login\">

            ";
        // line 27
        if ( !empty(twig_get_attribute($this->env, $this->source, ($context["Errors"] ?? null), "default", [], "any", false, false, false, 27))) {
            // line 28
            echo "                ";
            $this->loadTemplate("@__main__/inc_error.html.twig", "@__main__/login.html.twig", 28)->display(twig_array_merge($context, ["Errorlist" => twig_get_attribute($this->env, $this->source, ($context["Errors"] ?? null), "default", [], "any", false, false, false, 28)]));
            // line 29
            echo "            ";
        }
        // line 30
        echo "
            <label for=\"usr\">";
        // line 31
        echo $this->extensions['OxidEsales\Twig\Extensions\TranslateExtension']->translate(["ident" => "GENERAL_USER"]);
        echo "</label>
            <input type=\"text\" name=\"user\" id=\"usr\" value=\"";
        // line 32
        echo twig_escape_filter($this->env, ($context["user"] ?? null), "html", null, true);
        echo "\" size=\"49\" autofocus><br>

            <label for=\"pwd\">";
        // line 34
        echo $this->extensions['OxidEsales\Twig\Extensions\TranslateExtension']->translate(["ident" => "GENERAL_PASSWORD"]);
        echo "</label>
            <input type=\"password\" name=\"pwd\" id=\"pwd\" value=\"";
        // line 35
        echo twig_escape_filter($this->env, ($context["pwd"] ?? null), "html", null, true);
        echo "\" size=\"49\"><br>

            <label for=\"lng\">";
        // line 37
        echo $this->extensions['OxidEsales\Twig\Extensions\TranslateExtension']->translate(["ident" => "LOGIN_LANGUAGE"]);
        echo "</label>
            <select name=\"chlanguage\" id=\"lng\">
                ";
        // line 39
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["aLanguages"] ?? null));
        foreach ($context['_seq'] as $context["iLang"] => $context["oLang"]) {
            // line 40
            echo "                <option value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["oLang"], "id", [], "any", false, false, false, 40), "html", null, true);
            echo "\" ";
            if (twig_get_attribute($this->env, $this->source, $context["oLang"], "selected", [], "any", false, false, false, 40)) {
                echo "SELECTED";
            }
            echo ">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["oLang"], "name", [], "any", false, false, false, 40), "html", null, true);
            echo "</option>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['iLang'], $context['oLang'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 42
        echo "            </select><br>

            ";
        // line 44
        if (($context["profiles"] ?? null)) {
            // line 45
            echo "            <label for=\"prf\">";
            echo $this->extensions['OxidEsales\Twig\Extensions\TranslateExtension']->translate(["ident" => "LOGIN_PROFILE"]);
            echo "</label>
            <select name=\"profile\" id=\"prf\">
                ";
            // line 47
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["profiles"] ?? null));
            foreach ($context['_seq'] as $context["position"] => $context["curr_profile"]) {
                // line 48
                echo "                   <option value=\"";
                echo twig_escape_filter($this->env, $context["position"], "html", null, true);
                echo "\" ";
                if (twig_get_attribute($this->env, $this->source, $context["curr_profile"], 2, [], "any", false, false, false, 48)) {
                    echo "selected";
                }
                echo ">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["curr_profile"], 0, [], "any", false, false, false, 48), "html", null, true);
                echo "</option>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['position'], $context['curr_profile'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 50
            echo "            </select><br>
            ";
        }
        // line 52
        echo "        ";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@__main__/login.html.twig";
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
        return array (  205 => 52,  201 => 50,  186 => 48,  182 => 47,  176 => 45,  174 => 44,  170 => 42,  155 => 40,  151 => 39,  146 => 37,  141 => 35,  137 => 34,  132 => 32,  128 => 31,  125 => 30,  122 => 29,  119 => 28,  117 => 27,  108 => 22,  104 => 21,  91 => 54,  88 => 53,  86 => 21,  81 => 19,  76 => 17,  71 => 14,  69 => 13,  60 => 9,  56 => 8,  52 => 7,  47 => 5,  43 => 4,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@__main__/login.html.twig", "/var/www/html/source/Application/views/admin_twig/tpl/login.html.twig");
    }
}
