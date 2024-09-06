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

/* @__main__/module_main.html.twig */
class __TwigTemplate_521d348f5570edb53c89e5b8ceec2174 extends Template
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
        $this->loadTemplate("@__main__/headitem.html.twig", "@__main__/module_main.html.twig", 1)->display(twig_array_merge($context, ["title" => $this->extensions['OxidEsales\Twig\Extensions\Filters\TranslateExtension']->translate("GENERAL_ADMIN_TITLE"), "box" => "box"]));
        // line 2
        echo "
";
        // line 3
        if (($context["updatenav"] ?? null)) {
            // line 4
            echo "    ";
            echo $this->extensions['OxidEsales\Twig\Extensions\ScriptExtension']->script($context, ["add" => (("top.oxid.admin.reloadNavigation('" . ($context["shopid"] ?? null)) . "');"), "priority" => 10, "dynamic" => ($context["__oxid_include_dynamic"] ?? null)]);
            echo "
";
        }
        // line 6
        echo "
<form name=\"transfer\" id=\"transfer\" action=\"";
        // line 7
        echo twig_get_attribute($this->env, $this->source, ($context["oViewConf"] ?? null), "getSelfLink", [], "method", false, false, false, 7);
        echo "\" method=\"post\">
    ";
        // line 8
        echo twig_get_attribute($this->env, $this->source, ($context["oViewConf"] ?? null), "getHiddenSid", [], "method", false, false, false, 8);
        echo "
    <input type=\"hidden\" name=\"oxid\" value=\"";
        // line 9
        echo twig_escape_filter($this->env, ($context["oxid"] ?? null), "html", null, true);
        echo "\">
    <input type=\"hidden\" name=\"cl\" value=\"module_main\">
    <input type=\"hidden\" name=\"editlanguage\" value=\"";
        // line 11
        echo twig_escape_filter($this->env, ($context["editlanguage"] ?? null), "html", null, true);
        echo "\">
</form>

";
        // line 14
        echo $this->extensions['OxidEsales\Twig\Extensions\ScriptExtension']->script($context, ["include" => "js/libs/jquery.min.js", "dynamic" => ($context["__oxid_include_dynamic"] ?? null)]);
        echo "
";
        // line 15
        echo $this->extensions['OxidEsales\Twig\Extensions\ScriptExtension']->script($context, ["include" => "js/libs/jquery-ui.min.js", "dynamic" => ($context["__oxid_include_dynamic"] ?? null)]);
        echo "

";
        // line 17
        if (($context["oModule"] ?? null)) {
            // line 18
            echo "    <table cellspacing=\"10\" width=\"98%\">
        <tr>
            <td width=\"245\" valign=\"top\">
                ";
            // line 21
            if (twig_get_attribute($this->env, $this->source, ($context["oModule"] ?? null), "getInfo", ["thumbnail"], "method", false, false, false, 21)) {
                // line 22
                echo "                    <img src=\"";
                echo twig_get_attribute($this->env, $this->source, ($context["oViewConf"] ?? null), "getModuleUrl", [twig_get_attribute($this->env, $this->source, ($context["oModule"] ?? null), "getId", [], "method", false, false, false, 22), twig_get_attribute($this->env, $this->source, ($context["oModule"] ?? null), "getInfo", ["thumbnail"], "method", false, false, false, 22)], "method", false, false, false, 22);
                echo "\" hspace=\"20\" vspace=\"10\"></td>
                ";
            } else {
                // line 24
                echo "                    <img src=\"";
                echo twig_get_attribute($this->env, $this->source, ($context["oViewConf"] ?? null), "getResourceUrl", [], "method", false, false, false, 24);
                echo "bg/module.png\" hspace=\"20\" vspace=\"10\">
                ";
            }
            // line 26
            echo "            </td>
            <td width=\"\" valign=\"top\">
                <h1 style=\"color:#000;font-size:25px;\">";
            // line 28
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["oModule"] ?? null), "getTitle", [], "method", false, false, false, 28), "html", null, true);
            echo "</h1>
                <p>";
            // line 29
            echo twig_get_attribute($this->env, $this->source, ($context["oModule"] ?? null), "getDescription", [], "method", false, false, false, 29);
            echo "</p>
                <hr>

                <dl class=\"moduleDesc clear\">
                    <dt>";
            // line 33
            echo $this->extensions['OxidEsales\Twig\Extensions\TranslateExtension']->translate(["ident" => "MODULE_VERSION"]);
            echo "</dt>
                    <dd>";
            // line 34
            echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, ($context["oModule"] ?? null), "getInfo", ["version"], "method", true, true, false, 34)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["oModule"] ?? null), "getInfo", ["version"], "method", false, false, false, 34), " - ")) : (" - ")), "html", null, true);
            echo "</dd>

                    <dt>";
            // line 36
            echo $this->extensions['OxidEsales\Twig\Extensions\TranslateExtension']->translate(["ident" => "MODULE_AUTHOR"]);
            echo "</dt>
                    <dd>";
            // line 37
            echo ((twig_get_attribute($this->env, $this->source, ($context["oModule"] ?? null), "getInfo", ["author"], "method", true, true, false, 37)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["oModule"] ?? null), "getInfo", ["author"], "method", false, false, false, 37), " - ")) : (" - "));
            echo "</dd>

                    <dt>";
            // line 39
            echo $this->extensions['OxidEsales\Twig\Extensions\TranslateExtension']->translate(["ident" => "GENERAL_EMAIL"]);
            echo "</dt>
                    <dd>
                        ";
            // line 41
            if (twig_get_attribute($this->env, $this->source, ($context["oModule"] ?? null), "getInfo", ["email"], "method", false, false, false, 41)) {
                // line 42
                echo "                            <a href=\"mailto:";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["oModule"] ?? null), "getInfo", ["email"], "method", false, false, false, 42), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["oModule"] ?? null), "getInfo", ["email"], "method", false, false, false, 42), "html", null, true);
                echo "</a>
                        ";
            } else {
                // line 44
                echo "                            -
                        ";
            }
            // line 46
            echo "                    </dd>

                    <dt>";
            // line 48
            echo $this->extensions['OxidEsales\Twig\Extensions\TranslateExtension']->translate(["ident" => "GENERAL_URL"]);
            echo "</dt>
                    <dd>
                        ";
            // line 50
            if (twig_get_attribute($this->env, $this->source, ($context["oModule"] ?? null), "getInfo", ["url"], "method", false, false, false, 50)) {
                // line 51
                echo "                            <a href=\"";
                echo twig_get_attribute($this->env, $this->source, ($context["oModule"] ?? null), "getInfo", ["url"], "method", false, false, false, 51);
                echo "\" target=\"_blank\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["oModule"] ?? null), "getInfo", ["url"], "method", false, false, false, 51), "html", null, true);
                echo "</a>
                        ";
            } else {
                // line 53
                echo "                            -
                        ";
            }
            // line 55
            echo "                    </dd>
                </dl>
            </td>

            <td width=\"25\" style=\"border-right: 1px solid #ddd;\">

            </td>
            <td width=\"260\" valign=\"top\">
                ";
            // line 63
            if (( !twig_get_attribute($this->env, $this->source, ($context["oModule"] ?? null), "hasMetadata", [], "method", false, false, false, 63) &&  !twig_get_attribute($this->env, $this->source, ($context["oModule"] ?? null), "isRegistered", [], "method", false, false, false, 63))) {
                // line 64
                echo "                <div class=\"info\">
                    ";
                // line 65
                echo $this->extensions['OxidEsales\Twig\Extensions\TranslateExtension']->translate(["ident" => "MODULE_ENABLEACTIVATIONTEXT"]);
                echo "
                </div>
                ";
            }
            // line 68
            echo "                ";
            if ( !($context["_sError"] ?? null)) {
                // line 69
                echo "                    ";
                if ((twig_get_attribute($this->env, $this->source, ($context["oModule"] ?? null), "hasMetadata", [], "method", false, false, false, 69) || twig_get_attribute($this->env, $this->source, ($context["oModule"] ?? null), "isRegistered", [], "method", false, false, false, 69))) {
                    // line 70
                    echo "                        <form name=\"myedit\" id=\"myedit\" action=\"";
                    echo twig_get_attribute($this->env, $this->source, ($context["oViewConf"] ?? null), "getSelfLink", [], "method", false, false, false, 70);
                    echo "\" method=\"post\">
                            <div>
                                ";
                    // line 72
                    echo twig_get_attribute($this->env, $this->source, ($context["oViewConf"] ?? null), "getHiddenSid", [], "method", false, false, false, 72);
                    echo "
                                <input type=\"hidden\" name=\"cl\" value=\"module_main\">
                                <input type=\"hidden\" name=\"updatelist\" value=\"1\">
                                <input type=\"hidden\" name=\"oxid\" value=\"";
                    // line 75
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["oModule"] ?? null), "getId", [], "method", false, false, false, 75), "html", null, true);
                    echo "\">
                                ";
                    // line 76
                    if ( !twig_get_attribute($this->env, $this->source, ($context["oView"] ?? null), "isDemoShop", [], "method", false, false, false, 76)) {
                        // line 77
                        echo "                                    ";
                        if (twig_get_attribute($this->env, $this->source, ($context["oModule"] ?? null), "hasMetadata", [], "method", false, false, false, 77)) {
                            // line 78
                            echo "                                        ";
                            if (twig_get_attribute($this->env, $this->source, ($context["oModule"] ?? null), "isActive", [], "method", false, false, false, 78)) {
                                // line 79
                                echo "                                        <input type=\"hidden\" name=\"fnc\" value=\"deactivateModule\">
                                        <div align=\"center\">
                                            <input type=\"submit\" id=\"module_deactivate\" class=\"saveButton\" value=\"";
                                // line 81
                                echo $this->extensions['OxidEsales\Twig\Extensions\TranslateExtension']->translate(["ident" => "MODULE_DEACTIVATE"]);
                                echo "\">
                                        </div>
                                        ";
                            } else {
                                // line 84
                                echo "                                        <input type=\"hidden\" name=\"fnc\" value=\"activateModule\">

                                        <div align=\"center\">
                                            <input type=\"submit\" id=\"module_activate\" class=\"saveButton\" value=\"";
                                // line 87
                                echo $this->extensions['OxidEsales\Twig\Extensions\TranslateExtension']->translate(["ident" => "MODULE_ACTIVATE"]);
                                echo "\">
                                        </div>
                                        ";
                            }
                            // line 90
                            echo "                                    ";
                        }
                        // line 91
                        echo "                                ";
                    } else {
                        // line 92
                        echo "                                    ";
                        echo $this->extensions['OxidEsales\Twig\Extensions\TranslateExtension']->translate(["ident" => "MODULE_ACTIVATION_NOT_POSSIBLE_IN_DEMOMODE"]);
                        echo "
                                ";
                    }
                    // line 94
                    echo "                            </div>
                        </form>
                    ";
                }
                // line 97
                echo "                ";
            }
            // line 98
            echo "            </td>
        </tr>
    </table>
";
        }
        // line 102
        echo "
";
        // line 103
        $this->loadTemplate("@__main__/bottomnaviitem.html.twig", "@__main__/module_main.html.twig", 103)->display($context);
        // line 104
        $this->loadTemplate("@__main__/bottomitem.html.twig", "@__main__/module_main.html.twig", 104)->display($context);
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@__main__/module_main.html.twig";
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
        return array (  280 => 104,  278 => 103,  275 => 102,  269 => 98,  266 => 97,  261 => 94,  255 => 92,  252 => 91,  249 => 90,  243 => 87,  238 => 84,  232 => 81,  228 => 79,  225 => 78,  222 => 77,  220 => 76,  216 => 75,  210 => 72,  204 => 70,  201 => 69,  198 => 68,  192 => 65,  189 => 64,  187 => 63,  177 => 55,  173 => 53,  165 => 51,  163 => 50,  158 => 48,  154 => 46,  150 => 44,  142 => 42,  140 => 41,  135 => 39,  130 => 37,  126 => 36,  121 => 34,  117 => 33,  110 => 29,  106 => 28,  102 => 26,  96 => 24,  90 => 22,  88 => 21,  83 => 18,  81 => 17,  76 => 15,  72 => 14,  66 => 11,  61 => 9,  57 => 8,  53 => 7,  50 => 6,  44 => 4,  42 => 3,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@__main__/module_main.html.twig", "/var/www/html/source/Application/views/admin_twig/tpl/module_main.html.twig");
    }
}
