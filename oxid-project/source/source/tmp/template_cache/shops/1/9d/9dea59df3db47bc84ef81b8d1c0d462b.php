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

/* @__main__/newsletter.html.twig */
class __TwigTemplate_8d26217f2d99e0bb89d26cfab51ab116 extends Template
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
        $this->loadTemplate("@__main__/headitem.html.twig", "@__main__/newsletter.html.twig", 1)->display(twig_array_merge($context, ["title" => $this->extensions['OxidEsales\Twig\Extensions\Filters\TranslateExtension']->translate("GENERAL_ADMIN_TITLE")]));
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
<form name=\"export_recipients\" id=\"export_recipients\" action=\"";
        // line 9
        echo twig_get_attribute($this->env, $this->source, ($context["oViewConf"] ?? null), "getSelfLink", [], "method", false, false, false, 9);
        echo "\" method=\"get\"
      onSubmit=\"copyLongDesc( 'oxnewsletter__oxtemplate' );\">
    ";
        // line 11
        echo twig_get_attribute($this->env, $this->source, ($context["oViewConf"] ?? null), "getHiddenSid", [], "method", false, false, false, 11);
        echo "
    <input type=\"hidden\" name=\"cl\" value=\"admin_newsletter\">
    <input type=\"hidden\" name=\"fnc\" value=\"\">
    <input type=\"hidden\" name=\"editval[oxnewsletter__oxtemplate]\" value=\"\">

    <table cellspacing=\"0\" cellpadding=\"0\" border=\"0\" width=\"98%;\">
        <tr>
            <td class=\"edittext\">
            </td>
            <td class=\"edittext\"><br>
                <input type=\"submit\" class=\"edittext\" name=\"export\" id=\"newsletter_recipients\"
                       value=\"";
        // line 22
        echo $this->extensions['OxidEsales\Twig\Extensions\TranslateExtension']->translate(["ident" => "tbclnewsletter_recipients"]);
        echo "\"
                onClick=\"Javascript:document.export_recipients.fnc.value='export'\" ";
        // line 23
        echo twig_escape_filter($this->env, ($context["readonly"] ?? null), "html", null, true);
        echo ">
            </td>
        </tr>
    </table>

</form>

";
        // line 30
        $this->loadTemplate("@__main__/bottomnaviitem.html.twig", "@__main__/newsletter.html.twig", 30)->display($context);
        // line 31
        echo "
";
        // line 32
        $this->loadTemplate("@__main__/bottomitem.html.twig", "@__main__/newsletter.html.twig", 32)->display($context);
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@__main__/newsletter.html.twig";
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
        return array (  93 => 32,  90 => 31,  88 => 30,  78 => 23,  74 => 22,  60 => 11,  55 => 9,  52 => 8,  48 => 6,  44 => 4,  42 => 3,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@__main__/newsletter.html.twig", "/var/www/html/source/Application/views/admin_twig/tpl/newsletter.html.twig");
    }
}
