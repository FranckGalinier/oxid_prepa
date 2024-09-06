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

/* @__main__/theme_main.html.twig */
class __TwigTemplate_c8d2b487d6aabeb7a416494bed85e8c9 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'admin_theme_main_form' => [$this, 'block_admin_theme_main_form'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        $this->loadTemplate("@__main__/headitem.html.twig", "@__main__/theme_main.html.twig", 1)->display(twig_array_merge($context, ["title" => $this->extensions['OxidEsales\Twig\Extensions\Filters\TranslateExtension']->translate("GENERAL_ADMIN_TITLE"), "box" => "box"]));
        // line 2
        echo "
<form name=\"transfer\" id=\"transfer\" action=\"";
        // line 3
        echo twig_get_attribute($this->env, $this->source, ($context["oViewConf"] ?? null), "getSelfLink", [], "method", false, false, false, 3);
        echo "\" method=\"post\">
    ";
        // line 4
        echo twig_get_attribute($this->env, $this->source, ($context["oViewConf"] ?? null), "getHiddenSid", [], "method", false, false, false, 4);
        echo "
    <input type=\"hidden\" name=\"oxid\" value=\"";
        // line 5
        echo twig_escape_filter($this->env, ($context["oxid"] ?? null), "html", null, true);
        echo "\">
    <input type=\"hidden\" name=\"cl\" value=\"theme_main\">
    <input type=\"hidden\" name=\"editlanguage\" value=\"";
        // line 7
        echo twig_escape_filter($this->env, ($context["editlanguage"] ?? null), "html", null, true);
        echo "\">
</form>

";
        // line 10
        if (($context["oTheme"] ?? null)) {
            // line 11
            $this->displayBlock('admin_theme_main_form', $context, $blocks);
        }
        // line 61
        echo "
";
        // line 62
        $this->loadTemplate("@__main__/bottomnaviitem.html.twig", "@__main__/theme_main.html.twig", 62)->display($context);
        // line 63
        $this->loadTemplate("@__main__/bottomitem.html.twig", "@__main__/theme_main.html.twig", 63)->display($context);
    }

    // line 11
    public function block_admin_theme_main_form($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 12
        echo "<table cellspacing=\"10\" width=\"98%\">
    <tr>
        <td width=\"20%\" valign=\"top\"><img src=\"";
        // line 14
        echo twig_get_attribute($this->env, $this->source, ($context["oViewConf"] ?? null), "getBaseDir", [], "method", false, false, false, 14);
        echo "/out/";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["oTheme"] ?? null), "getInfo", ["id"], "method", false, false, false, 14), "html", null, true);
        echo "/";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["oTheme"] ?? null), "getInfo", ["thumbnail"], "method", false, false, false, 14), "html", null, true);
        echo "\" hspace=\"20\" vspace=\"10\"></td>
        <td width=\"50%\" valign=\"top\">
            <h1 style=\"color:#000;font-size:25px;\">";
        // line 16
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["oTheme"] ?? null), "getInfo", ["title"], "method", false, false, false, 16), "html", null, true);
        echo "</h1>
            <p>";
        // line 17
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["oTheme"] ?? null), "getInfo", ["description"], "method", false, false, false, 17), "html", null, true);
        echo "</p>
            ";
        // line 18
        if (twig_get_attribute($this->env, $this->source, ($context["oTheme"] ?? null), "getInfo", ["parentTheme"], "method", false, false, false, 18)) {
            // line 19
            echo "                <strong>";
            echo $this->extensions['OxidEsales\Twig\Extensions\TranslateExtension']->translate(["ident" => "THEME_PARENT_THEME_TITLE"]);
            echo ": </strong>
                ";
            // line 20
            $context["_oParent"] = twig_get_attribute($this->env, $this->source, ($context["oTheme"] ?? null), "getParent", [], "method", false, false, false, 20);
            // line 21
            echo "                ";
            if (($context["_oParent"] ?? null)) {
                // line 22
                echo "                    <a class=\"themetitle\" href=\"";
                echo twig_get_attribute($this->env, $this->source, ($context["oViewConf"] ?? null), "getSelfLink", [], "method", false, false, false, 22);
                echo "&amp;cl=theme_main&amp;oxid=";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["oTheme"] ?? null), "getInfo", ["parentTheme"], "method", false, false, false, 22), "html", null, true);
                echo "&amp;updatelist=1\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["_oParent"] ?? null), "getInfo", ["title"], "method", false, false, false, 22), "html", null, true);
                echo "</a>
                ";
            } else {
                // line 24
                echo "                    <span class=\"error\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["oTheme"] ?? null), "getInfo", ["parentTheme"], "method", false, false, false, 24), "html", null, true);
                echo "</span>
                ";
            }
            // line 26
            echo "                <br>
                <strong>";
            // line 27
            echo $this->extensions['OxidEsales\Twig\Extensions\TranslateExtension']->translate(["ident" => "THEME_PARENT_VERSIONS"]);
            echo ": </strong> ";
            echo twig_escape_filter($this->env, twig_join_filter(twig_get_attribute($this->env, $this->source, ($context["oTheme"] ?? null), "getInfo", ["parentVersions"], "method", false, false, false, 27), ", "), "html", null, true);
            echo "
            ";
        }
        // line 29
        echo "            <hr>
            <p style=\"color:#aaa;\">
            <b>";
        // line 31
        echo $this->extensions['OxidEsales\Twig\Extensions\TranslateExtension']->translate(["ident" => "THEME_AUTHOR"]);
        echo "</b> ";
        echo ((twig_get_attribute($this->env, $this->source, ($context["oTheme"] ?? null), "getInfo", ["author"], "method", true, true, false, 31)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["oTheme"] ?? null), "getInfo", ["author"], "method", false, false, false, 31), " - ")) : (" - "));
        echo " <br><br>
            ";
        // line 32
        echo $this->extensions['OxidEsales\Twig\Extensions\TranslateExtension']->translate(["ident" => "THEME_VERSION"]);
        echo " ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["oTheme"] ?? null), "getInfo", ["version"], "method", false, false, false, 32), "html", null, true);
        echo "
            </p>
        </td>
        ";
        // line 35
        if ( !twig_get_attribute($this->env, $this->source, ($context["oTheme"] ?? null), "getInfo", ["active"], "method", false, false, false, 35)) {
            // line 36
            echo "            <td width=\"1%\">
                <img src=\"";
            // line 37
            echo twig_get_attribute($this->env, $this->source, ($context["oViewConf"] ?? null), "getImageUrl", [], "method", false, false, false, 37);
            echo "/grayline_vert.gif\" width=\"2\" height=\"270\" alt=\"\" border=\"0\">
            </td>
            <td width=\"19%\" valign=\"top\">
                ";
            // line 40
            $context["_sError"] = twig_get_attribute($this->env, $this->source, ($context["oTheme"] ?? null), "checkForActivationErrors", [], "method", false, false, false, 40);
            // line 41
            echo "                ";
            if ( !($context["_sError"] ?? null)) {
                // line 42
                echo "                    <form name=\"myedit\" id=\"myedit\" action=\"";
                echo twig_get_attribute($this->env, $this->source, ($context["oViewConf"] ?? null), "getSelfLink", [], "method", false, false, false, 42);
                echo "\" method=\"post\">
                        <p>
                        ";
                // line 44
                echo twig_get_attribute($this->env, $this->source, ($context["oViewConf"] ?? null), "getHiddenSid", [], "method", false, false, false, 44);
                echo "
                        <input type=\"hidden\" name=\"cl\" value=\"theme_main\">
                        <input type=\"hidden\" name=\"fnc\" value=\"setTheme\">
                        <input type=\"hidden\" name=\"updatelist\" value=\"1\">
                        <input type=\"hidden\" name=\"oxid\" value=\"";
                // line 48
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["oTheme"] ?? null), "getInfo", ["id"], "method", false, false, false, 48), "html", null, true);
                echo "\">
                        <input type=\"submit\" value=\"";
                // line 49
                echo $this->extensions['OxidEsales\Twig\Extensions\TranslateExtension']->translate(["ident" => "THEME_ACTIVATE"]);
                echo "\">
                        </p>
                    </form>
                ";
            } else {
                // line 53
                echo "                    <div class=\"error\">";
                echo $this->extensions['OxidEsales\Twig\Extensions\TranslateExtension']->translate(["ident" => ($context["_sError"] ?? null)]);
                echo "</div>
                ";
            }
            // line 55
            echo "            </td>
        ";
        }
        // line 57
        echo "    </tr>
</table>
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@__main__/theme_main.html.twig";
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
        return array (  207 => 57,  203 => 55,  197 => 53,  190 => 49,  186 => 48,  179 => 44,  173 => 42,  170 => 41,  168 => 40,  162 => 37,  159 => 36,  157 => 35,  149 => 32,  143 => 31,  139 => 29,  132 => 27,  129 => 26,  123 => 24,  113 => 22,  110 => 21,  108 => 20,  103 => 19,  101 => 18,  97 => 17,  93 => 16,  84 => 14,  80 => 12,  76 => 11,  72 => 63,  70 => 62,  67 => 61,  64 => 11,  62 => 10,  56 => 7,  51 => 5,  47 => 4,  43 => 3,  40 => 2,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@__main__/theme_main.html.twig", "/var/www/html/source/Application/views/admin_twig/tpl/theme_main.html.twig");
    }
}
