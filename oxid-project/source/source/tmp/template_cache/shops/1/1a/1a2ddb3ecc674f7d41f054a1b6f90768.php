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

/* @__main__/pricealarm_mail.html.twig */
class __TwigTemplate_0d7386f36d0f23acdaf8abdbafc04395 extends Template
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
        $this->loadTemplate("@__main__/headitem.html.twig", "@__main__/pricealarm_mail.html.twig", 1)->display(twig_array_merge($context, ["title" => $this->extensions['OxidEsales\Twig\Extensions\Filters\TranslateExtension']->translate("GENERAL_ADMIN_TITLE")]));
        // line 2
        echo "
";
        // line 3
        if (($context["readonly"] ?? null)) {
            // line 4
            echo "    ";
            $context["readonly"] = "readonly disabled";
        } else {
            // line 6
            echo "    ";
            $context["readonly"] = "";
        }
        // line 8
        echo "
<form name=\"transfer\" id=\"transfer\" action=\"";
        // line 9
        echo twig_get_attribute($this->env, $this->source, ($context["oViewConf"] ?? null), "getSelfLink", [], "method", false, false, false, 9);
        echo "\" method=\"post\">
    ";
        // line 10
        echo twig_get_attribute($this->env, $this->source, ($context["oViewConf"] ?? null), "getHiddenSid", [], "method", false, false, false, 10);
        echo "
    <input type=\"hidden\" name=\"oxid\" value=\"";
        // line 11
        echo twig_escape_filter($this->env, ($context["oxid"] ?? null), "html", null, true);
        echo "\">
    <input type=\"hidden\" name=\"cl\" value=\"payment_main\">
</form>


<b>";
        // line 16
        echo $this->extensions['OxidEsales\Twig\Extensions\TranslateExtension']->translate(["ident" => "PRICEALARM_MAIL_OXIDPRICEALARM"]);
        echo "</b>
<br><br>
";
        // line 18
        echo $this->extensions['OxidEsales\Twig\Extensions\TranslateExtension']->translate(["ident" => "PRICEALARM_MAIL_OPENEMAILS1"]);
        echo " ";
        echo twig_escape_filter($this->env, ($context["iAllCnt"] ?? null), "html", null, true);
        echo " ";
        echo $this->extensions['OxidEsales\Twig\Extensions\TranslateExtension']->translate(["ident" => "PRICEALARM_MAIL_OPENEMAILS2"]);
        echo "
<br><br>
";
        // line 20
        if ((($context["iAllCnt"] ?? null) &&  !($context["readonly"] ?? null))) {
            // line 21
            echo $this->extensions['OxidEsales\Twig\Extensions\TranslateExtension']->translate(["ident" => "PRICEALARM_MAIL_SENDPRICEALARMEMAIL1"]);
            echo " <a href=\"";
            echo twig_get_attribute($this->env, $this->source, ($context["oViewConf"] ?? null), "getSelfLink", [], "method", false, false, false, 21);
            echo "&cl=pricealarm_send\" class=\"edittext\" target=\"list\" ";
            if (($context["readonly"] ?? null)) {
                echo "onclick=\"JavaScript:return false;\"";
            }
            echo "><b>";
            echo $this->extensions['OxidEsales\Twig\Extensions\TranslateExtension']->translate(["ident" => "PRICEALARM_MAIL_SENDPRICEALARMEMAIL2"]);
            echo "</b></a>
";
        }
        // line 23
        echo "
";
        // line 24
        $this->loadTemplate("@__main__/bottomnaviitem.html.twig", "@__main__/pricealarm_mail.html.twig", 24)->display($context);
        // line 25
        echo "</table>
";
        // line 26
        $this->loadTemplate("@__main__/bottomitem.html.twig", "@__main__/pricealarm_mail.html.twig", 26)->display($context);
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@__main__/pricealarm_mail.html.twig";
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
        return array (  108 => 26,  105 => 25,  103 => 24,  100 => 23,  87 => 21,  85 => 20,  76 => 18,  71 => 16,  63 => 11,  59 => 10,  55 => 9,  52 => 8,  48 => 6,  44 => 4,  42 => 3,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@__main__/pricealarm_mail.html.twig", "/var/www/html/source/Application/views/admin_twig/tpl/pricealarm_mail.html.twig");
    }
}
