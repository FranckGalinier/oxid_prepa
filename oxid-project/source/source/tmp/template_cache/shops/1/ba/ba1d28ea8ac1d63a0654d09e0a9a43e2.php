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

/* @__main__/diagnostics_form.html.twig */
class __TwigTemplate_b73079bc51b248caf1cb9a066ed4daa3 extends Template
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
        $this->loadTemplate("@__main__/headitem.html.twig", "@__main__/diagnostics_form.html.twig", 1)->display(twig_array_merge($context, ["title" => $this->extensions['OxidEsales\Twig\Extensions\Filters\TranslateExtension']->translate("OXDIAG_MAIN_TITLE")]));
        // line 2
        echo "
<script type=\"text/javascript\">
    <!--

    function handleSubmit()
    {
        var oButton = document.getElementById(\"submitButton\");
        oButton.disabled = true;
    }
    //-->
</script>

<style>
    .result {
        padding: 15px;
        background-color: #F0F0F0 !important;
        border: 1px solid #C0C0C0 !important;
    }
</style>

<h1>";
        // line 22
        echo $this->extensions['OxidEsales\Twig\Extensions\TranslateExtension']->translate(["ident" => "OXDIAG_HOME"]);
        echo "</h1>

<p>";
        // line 24
        echo $this->extensions['OxidEsales\Twig\Extensions\TranslateExtension']->translate(["ident" => "OXDIAG_ABOUT"]);
        echo "</p>

";
        // line 26
        if (($context["readonly"] ?? null)) {
            // line 27
            echo "    ";
            $context["readonly"] = "readonly disabled";
        } else {
            // line 29
            echo "    ";
            $context["readonly"] = "";
        }
        // line 31
        echo "
";
        // line 32
        $this->loadTemplate("@__main__/include/support_contact_form.html.twig", "@__main__/diagnostics_form.html.twig", 32)->display($context);
        // line 33
        echo "
<table>
    <tr>
        <td valign=\"top\">

            ";
        // line 38
        if ( !empty(($context["sErrorMessage"] ?? null))) {
            // line 39
            echo "                <p><span style=\"color: red\"><b>";
            echo $this->extensions['OxidEsales\Twig\Extensions\TranslateExtension']->translate(["ident" => "OXDIAG_ERRORMESSAGETEMPLATE"]);
            echo "</b></span></p>
                <span style=\"color: red\">";
            // line 40
            echo twig_escape_filter($this->env, ($context["sErrorMessage"] ?? null), "html", null, true);
            echo "</span>
            ";
        } elseif ( !twig_get_attribute($this->env, $this->source,         // line 41
($context["oView"] ?? null), "getParam", ["runAnalysis"], "method", false, false, false, 41)) {
            // line 42
            echo "
            <form name=\"diagnosticsForm\" id=\"diagnosticsForm\" action=\"";
            // line 43
            echo twig_get_attribute($this->env, $this->source, ($context["oViewConf"] ?? null), "getSelfLink", [], "method", false, false, false, 43);
            echo "\" onsubmit=\"handleSubmit()\" method=\"post\">
                <table border=\"0\" cellpadding=\"0\">
                    ";
            // line 45
            echo twig_get_attribute($this->env, $this->source, ($context["oViewConf"] ?? null), "getHiddenSid", [], "method", false, false, false, 45);
            echo "
                    <input type=\"hidden\" name=\"cl\" value=\"diagnostics_main\">
                    <input type=\"hidden\" name=\"fnc\" value=\"startDiagnostics\">

                    <input type=\"hidden\" name=\"runAnalysis\" value=\"1\">

                    <tr>
                        <td><input type=\"checkbox\" id=\"oxdiag_frm_modules\" name=\"oxdiag_frm_modules\" value=\"1\" checked ";
            // line 52
            echo twig_escape_filter($this->env, ($context["readonly"] ?? null), "html", null, true);
            echo "></td>
                        <td><label for=\"oxdiag_frm_modules\">";
            // line 53
            echo $this->extensions['OxidEsales\Twig\Extensions\TranslateExtension']->translate(["ident" => "OXDIAG_COLLECT_MODULES"]);
            echo "</label></td>
                    </tr>

                    <tr>
                        <td><input type=\"checkbox\" id=\"oxdiag_frm_health\" name=\"oxdiag_frm_health\" value=\"1\" checked ";
            // line 57
            echo twig_escape_filter($this->env, ($context["readonly"] ?? null), "html", null, true);
            echo "></td>
                        <td><label for=\"oxdiag_frm_health\">";
            // line 58
            echo $this->extensions['OxidEsales\Twig\Extensions\TranslateExtension']->translate(["ident" => "OXDIAG_COLLECT_HEALTH"]);
            echo "</label></td>
                    </tr>

                    <tr>
                        <td><input type=\"checkbox\" id=\"oxdiag_frm_php\" name=\"oxdiag_frm_php\" value=\"1\" checked ";
            // line 62
            echo twig_escape_filter($this->env, ($context["readonly"] ?? null), "html", null, true);
            echo "></td>
                        <td><label for=\"oxdiag_frm_php\">";
            // line 63
            echo $this->extensions['OxidEsales\Twig\Extensions\TranslateExtension']->translate(["ident" => "OXDIAG_COLLECT_PHP"]);
            echo "</label></td>
                    </tr>

                    <tr>
                        <td><input type=\"checkbox\" id=\"oxdiag_frm_server\" name=\"oxdiag_frm_server\" value=\"1\" checked ";
            // line 67
            echo twig_escape_filter($this->env, ($context["readonly"] ?? null), "html", null, true);
            echo "></td>
                        <td><label for=\"oxdiag_frm_server\">";
            // line 68
            echo $this->extensions['OxidEsales\Twig\Extensions\TranslateExtension']->translate(["ident" => "OXDIAG_COLLECT_SERVER"]);
            echo "</label></td>
                    </tr>
                </table>

                <br><br>
                <input type=\"submit\" class=\"edittext\" id=\"submitButton\" name=\"submitButton\" value=\" ";
            // line 73
            echo $this->extensions['OxidEsales\Twig\Extensions\TranslateExtension']->translate(["ident" => "OXDIAG_FORM_START_CHECK"]);
            echo " \" ";
            echo twig_escape_filter($this->env, ($context["readonly"] ?? null), "html", null, true);
            echo ">

            </form>
            ";
        }
        // line 77
        echo "
        </td>
    </tr>
</table>



";
        // line 84
        if ( !empty(($context["sResult"] ?? null))) {
            // line 85
            echo "<h1>";
            echo $this->extensions['OxidEsales\Twig\Extensions\TranslateExtension']->translate(["ident" => "OXDIAG_RESULT_SUCCESSFUL"]);
            echo "</h1>
<h2><strong><a class=\"underlined\" href=\"";
            // line 86
            echo twig_get_attribute($this->env, $this->source, ($context["oViewConf"] ?? null), "getSelfLink", [], "method", false, false, false, 86);
            echo "&amp;cl=diagnostics_main&amp;fnc=downloadResultFile\">";
            echo $this->extensions['OxidEsales\Twig\Extensions\TranslateExtension']->translate(["ident" => "OXDIAG_DOWNLOAD_FILE"]);
            echo "</a></strong>.</h2>

<h3>";
            // line 88
            echo $this->extensions['OxidEsales\Twig\Extensions\TranslateExtension']->translate(["ident" => "OXDIAG_RESULT"]);
            echo ":</h3>
<div class=\"result\">
    <p>
    ";
            // line 91
            echo ($context["sResult"] ?? null);
            echo "
    </p>
</div>
";
        }
        // line 95
        echo "
";
        // line 96
        $this->loadTemplate("@__main__/bottomnaviitem.html.twig", "@__main__/diagnostics_form.html.twig", 96)->display($context);
        // line 97
        echo "
";
        // line 98
        $this->loadTemplate("@__main__/bottomitem.html.twig", "@__main__/diagnostics_form.html.twig", 98)->display($context);
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@__main__/diagnostics_form.html.twig";
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
        return array (  222 => 98,  219 => 97,  217 => 96,  214 => 95,  207 => 91,  201 => 88,  194 => 86,  189 => 85,  187 => 84,  178 => 77,  169 => 73,  161 => 68,  157 => 67,  150 => 63,  146 => 62,  139 => 58,  135 => 57,  128 => 53,  124 => 52,  114 => 45,  109 => 43,  106 => 42,  104 => 41,  100 => 40,  95 => 39,  93 => 38,  86 => 33,  84 => 32,  81 => 31,  77 => 29,  73 => 27,  71 => 26,  66 => 24,  61 => 22,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@__main__/diagnostics_form.html.twig", "/var/www/html/source/Application/views/admin_twig/tpl/diagnostics_form.html.twig");
    }
}
