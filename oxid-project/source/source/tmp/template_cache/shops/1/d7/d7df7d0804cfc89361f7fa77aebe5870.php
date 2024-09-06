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

/* @__main__/module_sortlist.html.twig */
class __TwigTemplate_0d8ff9cd3311a01daebb63e3ecf5b201 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'admin_module_sortlist' => [$this, 'block_admin_module_sortlist'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        $this->loadTemplate("@__main__/headitem.html.twig", "@__main__/module_sortlist.html.twig", 1)->display(twig_array_merge($context, ["title" => $this->extensions['OxidEsales\Twig\Extensions\Filters\TranslateExtension']->translate("GENERAL_ADMIN_TITLE"), "box" => "box"]));
        // line 2
        echo "
<div id=\"container\">

    <form name=\"transfer\" id=\"transfer\" action=\"";
        // line 5
        echo twig_get_attribute($this->env, $this->source, ($context["oViewConf"] ?? null), "getSelfLink", [], "method", false, false, false, 5);
        echo "\" method=\"post\">
        ";
        // line 6
        echo twig_get_attribute($this->env, $this->source, ($context["oViewConf"] ?? null), "getHiddenSid", [], "method", false, false, false, 6);
        echo "
        <input type=\"hidden\" name=\"oxid\" value=\"";
        // line 7
        echo twig_escape_filter($this->env, ($context["oxid"] ?? null), "html", null, true);
        echo "\">
        <input type=\"hidden\" name=\"cl\" value=\"module_main\">
        <input type=\"hidden\" name=\"editlanguage\" value=\"";
        // line 9
        echo twig_escape_filter($this->env, ($context["editlanguage"] ?? null), "html", null, true);
        echo "\">
    </form>

    ";
        // line 12
        $this->displayBlock('admin_module_sortlist', $context, $blocks);
        // line 13
        echo "
    <div id=\"infoContent\">

        ";
        // line 16
        if (($context["aDeletedExt"] ?? null)) {
            // line 17
            echo "            <div class=\"msgBox\">

                <div class=\"info\">
                    <p>";
            // line 20
            echo $this->extensions['OxidEsales\Twig\Extensions\TranslateExtension']->translate(["ident" => "MODULE_EXTENSIONISDELETED"]);
            echo "</p>
                    <p>";
            // line 21
            echo $this->extensions['OxidEsales\Twig\Extensions\TranslateExtension']->translate(["ident" => "MODULE_DELETEEXTENSION"]);
            echo "</p>

                    <table cellspacing=\"0\" cellpadding=\"0\" border=\"0\" width=\"98%\">
                        <tr>
                            <td class=\"listheader first\">";
            // line 25
            echo $this->extensions['OxidEsales\Twig\Extensions\TranslateExtension']->translate(["ident" => "MODULE_ID"]);
            echo "</td>
                            <td class=\"listheader\">";
            // line 26
            echo $this->extensions['OxidEsales\Twig\Extensions\TranslateExtension']->translate(["ident" => "MODULE_PROBLEMATIC_FILES"]);
            echo "</td>
                        </tr>
                        ";
            // line 28
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["aDeletedExt"] ?? null));
            foreach ($context['_seq'] as $context["sModuleId"] => $context["aModules"]) {
                // line 29
                echo "                            ";
                $context["listclass"] = ("listitem" . ($context["blWhite"] ?? null));
                // line 30
                echo "                            <tr>
                                <td valign=\"top\" class=\"";
                // line 31
                echo twig_escape_filter($this->env, ($context["listclass"] ?? null), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $context["sModuleId"], "html", null, true);
                echo "</td>
                                <td valign=\"top\" class=\"";
                // line 32
                echo twig_escape_filter($this->env, ($context["listclass"] ?? null), "html", null, true);
                echo "\">
                                    <ul>
                                        ";
                // line 34
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["aModules"], "extensions", [], "any", false, false, false, 34));
                foreach ($context['_seq'] as $context["sClassName"] => $context["mFile"]) {
                    // line 35
                    echo "                                            ";
                    $context["is_int"] = twig_matches("/^\\d+\$/", $context["sClassName"]);
                    // line 36
                    echo "                                            ";
                    if (is_iterable($context["mFile"])) {
                        // line 37
                        echo "                                                ";
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable($context["mFile"]);
                        foreach ($context['_seq'] as $context["_key"] => $context["sFile"]) {
                            // line 38
                            echo "                                                    <li>";
                            if ( !($context["is_int"] ?? null)) {
                                echo twig_escape_filter($this->env, $context["sClassName"], "html", null, true);
                                echo " =&gt; ";
                            }
                            echo twig_escape_filter($this->env, $context["sFile"], "html", null, true);
                            echo "</li>
                                                ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['sFile'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 40
                        echo "                                            ";
                    } else {
                        // line 41
                        echo "                                                <li>";
                        if ( !($context["is_int"] ?? null)) {
                            echo twig_escape_filter($this->env, $context["sClassName"], "html", null, true);
                            echo " =&gt; ";
                        }
                        echo twig_escape_filter($this->env, $context["mFile"], "html", null, true);
                        echo "</li>
                                            ";
                    }
                    // line 43
                    echo "                                        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['sClassName'], $context['mFile'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 44
                echo "                                        ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["aModules"], "files", [], "any", false, false, false, 44));
                foreach ($context['_seq'] as $context["sClassName"] => $context["sFile"]) {
                    // line 45
                    echo "                                            ";
                    $context["is_int"] = twig_matches("/^\\d+\$/", $context["sClassName"]);
                    // line 46
                    echo "                                            <li>";
                    if ( !($context["is_int"] ?? null)) {
                        echo twig_escape_filter($this->env, $context["sClassName"], "html", null, true);
                        echo " =&gt; ";
                    }
                    echo twig_escape_filter($this->env, $context["sFile"], "html", null, true);
                    echo "</li>
                                        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['sClassName'], $context['sFile'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 48
                echo "                                    </ul>
                                </td>
                            </tr>
                            ";
                // line 51
                if ((($context["blWhite"] ?? null) == "2")) {
                    // line 52
                    echo "                                ";
                    $context["blWhite"] = "";
                    // line 53
                    echo "                            ";
                } else {
                    // line 54
                    echo "                                ";
                    $context["blWhite"] = "2";
                    // line 55
                    echo "                            ";
                }
                // line 56
                echo "                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['sModuleId'], $context['aModules'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 57
            echo "                    </table>
                </div>

                <div>
                    <form name=\"remove\" action=\"";
            // line 61
            echo twig_get_attribute($this->env, $this->source, ($context["oViewConf"] ?? null), "getSelfLink", [], "method", false, false, false, 61);
            echo "\" method=\"post\">
                        ";
            // line 62
            echo twig_get_attribute($this->env, $this->source, ($context["oViewConf"] ?? null), "getHiddenSid", [], "method", false, false, false, 62);
            echo "
                        <input type=\"hidden\" name=\"cl\" value=\"module_sortlist\">
                        <input type=\"hidden\" name=\"fnc\" value=\"remove\">
                        <input type=\"hidden\" name=\"oxid\" value=\"";
            // line 65
            echo twig_escape_filter($this->env, ($context["oxid"] ?? null), "html", null, true);
            echo "\">
                        <input type=\"hidden\" name=\"aModules\" value=\"\">
                        <input type=\"hidden\" name=\"updatelist\" value=\"1\">
                        <input type=\"submit\" name=\"yesButton\" class=\"saveButton\"
                               value=\"";
            // line 69
            echo $this->extensions['OxidEsales\Twig\Extensions\TranslateExtension']->translate(["ident" => "GENERAL_YES"]);
            echo "\">
                        <input type=\"submit\" name=\"noButton\" class=\"saveButton\"
                               value=\"";
            // line 71
            echo $this->extensions['OxidEsales\Twig\Extensions\TranslateExtension']->translate(["ident" => "GENERAL_NO"]);
            echo "\">
                    </form>
                </div>
            </div>
        ";
        } else {
            // line 76
            echo "
            ";
            // line 77
            if (($context["aExtClasses"] ?? null)) {
                // line 78
                echo "                <ul class=\"sortable\" id=\"aModulesList\">
                    ";
                // line 79
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["aExtClasses"] ?? null));
                foreach ($context['_seq'] as $context["sClassName"] => $context["aModuleNames"]) {
                    // line 80
                    echo "                        <li id=\"";
                    echo twig_escape_filter($this->env, $context["sClassName"], "html", null, true);
                    echo "\">
                            <span>";
                    // line 81
                    echo twig_replace_filter($context["sClassName"], ["---" => "&#92;"]);
                    echo "</span>
                            <ul class=\"sortable2\" id=\"";
                    // line 82
                    echo twig_escape_filter($this->env, $context["sClassName"], "html", null, true);
                    echo "_modules\">
                                ";
                    // line 83
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($context["aModuleNames"]);
                    foreach ($context['_seq'] as $context["_key"] => $context["sModule"]) {
                        // line 84
                        echo "                                    ";
                        if ((is_iterable(($context["aDisabledModules"] ?? null)) && twig_in_filter($context["sModule"], ($context["aDisabledModules"] ?? null)))) {
                            // line 85
                            echo "                                        ";
                            $context["cssDisabled"] = "disabled";
                            // line 86
                            echo "                                    ";
                        } else {
                            // line 87
                            echo "                                        ";
                            $context["cssDisabled"] = "";
                            // line 88
                            echo "                                    ";
                        }
                        // line 89
                        echo "                                    <li id=\"";
                        echo twig_escape_filter($this->env, $context["sModule"], "html", null, true);
                        echo "\"><span class=\"";
                        echo twig_escape_filter($this->env, ($context["cssDisabled"] ?? null), "html", null, true);
                        echo "\">";
                        echo twig_escape_filter($this->env, $context["sModule"], "html", null, true);
                        echo "</span></li>
                                ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['sModule'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 91
                    echo "                            </ul>
                        </li>
                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['sClassName'], $context['aModuleNames'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 94
                echo "                </ul>
            ";
            }
            // line 96
            echo "        ";
        }
        // line 97
        echo "    </div>


    ";
        // line 100
        echo $this->extensions['OxidEsales\Twig\Extensions\ScriptExtension']->script($context, ["add" => "\$('#aModulesList').oxModulesList();", "priority" => 10, "dynamic" => ($context["__oxid_include_dynamic"] ?? null)]);
        echo "

    ";
        // line 102
        echo $this->extensions['OxidEsales\Twig\Extensions\ScriptExtension']->script($context, ["include" => "js/libs/jquery.min.js", "dynamic" => ($context["__oxid_include_dynamic"] ?? null)]);
        echo "
    ";
        // line 103
        echo $this->extensions['OxidEsales\Twig\Extensions\ScriptExtension']->script($context, ["include" => "js/libs/jquery-ui.min.js", "dynamic" => ($context["__oxid_include_dynamic"] ?? null)]);
        echo "
    ";
        // line 104
        echo $this->extensions['OxidEsales\Twig\Extensions\ScriptExtension']->script($context, ["include" => "js/widgets/oxmoduleslist.js", "dynamic" => ($context["__oxid_include_dynamic"] ?? null)]);
        echo "

</div>

";
        // line 108
        if (( !($context["aDeletedExt"] ?? null) && ($context["aExtClasses"] ?? null))) {
            // line 109
            echo "    <div id=\"footerBox\">
        <div class=\"buttonsBox\">
            <form name=\"myedit\" id=\"myedit\" action=\"";
            // line 111
            echo twig_get_attribute($this->env, $this->source, ($context["oViewConf"] ?? null), "getSelfLink", [], "method", false, false, false, 111);
            echo "\" method=\"post\">
                ";
            // line 112
            echo twig_get_attribute($this->env, $this->source, ($context["oViewConf"] ?? null), "getHiddenSid", [], "method", false, false, false, 112);
            echo "
                <input type=\"hidden\" name=\"cl\" value=\"module_sortlist\">
                <input type=\"hidden\" name=\"fnc\" value=\"save\">
                <input type=\"hidden\" name=\"oxid\" value=\"";
            // line 115
            echo twig_escape_filter($this->env, ($context["oxid"] ?? null), "html", null, true);
            echo "\">
                <input type=\"hidden\" name=\"aModules\" value=\"\">
                <input type=\"button\" name=\"saveButton\" class=\"saveButton\" value=\"";
            // line 117
            echo $this->extensions['OxidEsales\Twig\Extensions\TranslateExtension']->translate(["ident" => "GENERAL_SAVE"]);
            echo "\"
                       disabled>
            </form>
        </div>

        <div class=\"description\">
            <p>
                ";
            // line 124
            echo $this->extensions['OxidEsales\Twig\Extensions\TranslateExtension']->translate(["ident" => "MODULE_DRAGANDDROP"]);
            echo "

            </p>
        </div>
    </div>
";
        }
        // line 130
        echo "

";
        // line 132
        $this->loadTemplate("@__main__/bottomnaviitem.html.twig", "@__main__/module_sortlist.html.twig", 132)->display($context);
        // line 133
        $this->loadTemplate("@__main__/bottomitem.html.twig", "@__main__/module_sortlist.html.twig", 133)->display($context);
    }

    // line 12
    public function block_admin_module_sortlist($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@__main__/module_sortlist.html.twig";
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
        return array (  395 => 12,  391 => 133,  389 => 132,  385 => 130,  376 => 124,  366 => 117,  361 => 115,  355 => 112,  351 => 111,  347 => 109,  345 => 108,  338 => 104,  334 => 103,  330 => 102,  325 => 100,  320 => 97,  317 => 96,  313 => 94,  305 => 91,  292 => 89,  289 => 88,  286 => 87,  283 => 86,  280 => 85,  277 => 84,  273 => 83,  269 => 82,  265 => 81,  260 => 80,  256 => 79,  253 => 78,  251 => 77,  248 => 76,  240 => 71,  235 => 69,  228 => 65,  222 => 62,  218 => 61,  212 => 57,  206 => 56,  203 => 55,  200 => 54,  197 => 53,  194 => 52,  192 => 51,  187 => 48,  174 => 46,  171 => 45,  166 => 44,  160 => 43,  150 => 41,  147 => 40,  134 => 38,  129 => 37,  126 => 36,  123 => 35,  119 => 34,  114 => 32,  108 => 31,  105 => 30,  102 => 29,  98 => 28,  93 => 26,  89 => 25,  82 => 21,  78 => 20,  73 => 17,  71 => 16,  66 => 13,  64 => 12,  58 => 9,  53 => 7,  49 => 6,  45 => 5,  40 => 2,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@__main__/module_sortlist.html.twig", "/var/www/html/source/Application/views/admin_twig/tpl/module_sortlist.html.twig");
    }
}
