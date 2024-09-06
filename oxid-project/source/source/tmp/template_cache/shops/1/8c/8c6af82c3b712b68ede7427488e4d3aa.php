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

/* @__main__/theme_config.html.twig */
class __TwigTemplate_b8a94a7f3a9b93db954d4d82aace8e31 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'admin_theme_config_form' => [$this, 'block_admin_theme_config_form'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        $this->loadTemplate("@__main__/headitem.html.twig", "@__main__/theme_config.html.twig", 1)->display(twig_array_merge($context, ["title" => $this->extensions['OxidEsales\Twig\Extensions\Filters\TranslateExtension']->translate("GENERAL_ADMIN_TITLE"), "box" => "box"]));
        // line 2
        echo "
<script type=\"text/javascript\">
<!--
function _groupExp(el) {
    var _cur = el.parentNode;

    if (_cur.className == \"exp\") _cur.className = \"\";
      else _cur.className = \"exp\";
}
//-->
</script>

";
        // line 14
        if (($context["readonly"] ?? null)) {
            // line 15
            echo "    ";
            $context["readonly"] = "readonly disabled";
        } else {
            // line 17
            echo "    ";
            $context["readonly"] = "";
        }
        // line 19
        echo "


<form name=\"transfer\" id=\"transfer\" action=\"";
        // line 22
        echo twig_get_attribute($this->env, $this->source, ($context["oViewConf"] ?? null), "getSelfLink", [], "method", false, false, false, 22);
        echo "\" method=\"post\">
    ";
        // line 23
        echo twig_get_attribute($this->env, $this->source, ($context["oViewConf"] ?? null), "getHiddenSid", [], "method", false, false, false, 23);
        echo "
    <input type=\"hidden\" name=\"oxid\" value=\"";
        // line 24
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["oTheme"] ?? null), "getInfo", ["id"], "method", false, false, false, 24), "html", null, true);
        echo "\">
    <input type=\"hidden\" name=\"cl\" value=\"theme_config\">
    <input type=\"hidden\" name=\"fnc\" value=\"\">
    <input type=\"hidden\" name=\"actshop\" value=\"";
        // line 27
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["oViewConf"] ?? null), "getActiveShopId", [], "method", false, false, false, 27), "html", null, true);
        echo "\">
    <input type=\"hidden\" name=\"updatenav\" value=\"\">
    <input type=\"hidden\" name=\"editlanguage\" value=\"";
        // line 29
        echo twig_escape_filter($this->env, ($context["editlanguage"] ?? null), "html", null, true);
        echo "\">
</form>

<form name=\"myedit\" id=\"myedit\" action=\"";
        // line 32
        echo twig_get_attribute($this->env, $this->source, ($context["oViewConf"] ?? null), "getSelfLink", [], "method", false, false, false, 32);
        echo "\" method=\"post\">
";
        // line 33
        echo twig_get_attribute($this->env, $this->source, ($context["oViewConf"] ?? null), "getHiddenSid", [], "method", false, false, false, 33);
        echo "
<input type=\"hidden\" name=\"cl\" value=\"theme_config\">
<input type=\"hidden\" name=\"fnc\" value=\"save\">
<input type=\"hidden\" name=\"oxid\" value=\"";
        // line 36
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["oTheme"] ?? null), "getInfo", ["id"], "method", false, false, false, 36), "html", null, true);
        echo "\">
<input type=\"hidden\" name=\"editval[oxshops__oxid]\" value=\"";
        // line 37
        echo twig_escape_filter($this->env, ($context["oxid"] ?? null), "html", null, true);
        echo "\">

    <b>";
        // line 39
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["oTheme"] ?? null), "getInfo", ["title"], "method", false, false, false, 39), "html", null, true);
        echo "</b><br><br>

    ";
        // line 41
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["var_grouping"] ?? null));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["var_group"] => $context["var_list"]) {
            // line 42
            echo "        <div class=\"groupExp\">
            <div>
            ";
            // line 44
            $this->displayBlock('admin_theme_config_form', $context, $blocks);
            // line 76
            echo "             </div>
         </div>
    ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['var_group'], $context['var_list'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 79
        echo "<br>
<input type=\"submit\" class=\"confinput\" name=\"save\" value=\"";
        // line 80
        echo $this->extensions['OxidEsales\Twig\Extensions\TranslateExtension']->translate(["ident" => "GENERAL_SAVE"]);
        echo "\" onClick=\"Javascript:document.myedit.fnc.value='save'\" ";
        echo twig_escape_filter($this->env, ($context["readonly"] ?? null), "html", null, true);
        echo ">
</form>
";
        // line 82
        $this->loadTemplate("@__main__/bottomnaviitem.html.twig", "@__main__/theme_config.html.twig", 82)->display($context);
        // line 83
        $this->loadTemplate("@__main__/bottomitem.html.twig", "@__main__/theme_config.html.twig", 83)->display($context);
    }

    // line 44
    public function block_admin_theme_config_form($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 45
        echo "                <a href=\"#\" onclick=\"_groupExp(this);return false;\" class=\"rc\"><b>";
        echo $this->extensions['OxidEsales\Twig\Extensions\TranslateExtension']->translate(["ident" => ("SHOP_THEME_GROUP_" . ($context["var_group"] ?? null))]);
        echo "</b></a>
                ";
        // line 46
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["var_list"] ?? null));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["theme_var"] => $context["var_type"]) {
            // line 47
            echo "                    <dl>
                        <dt>
                            ";
            // line 49
            if (($context["var_type"] == "bool")) {
                // line 50
                echo "                                <input type=\"hidden\" name=\"confbools[";
                echo twig_escape_filter($this->env, $context["theme_var"], "html", null, true);
                echo "]\" value=\"false\">
                                <input type=\"checkbox\" name=\"confbools[";
                // line 51
                echo twig_escape_filter($this->env, $context["theme_var"], "html", null, true);
                echo "]\" value=\"true\" ";
                if ((($__internal_compile_0 = ($context["confbools"] ?? null)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0[$context["theme_var"]] ?? null) : null)) {
                    echo "checked";
                }
                echo " ";
                echo twig_escape_filter($this->env, ($context["readonly"] ?? null), "html", null, true);
                echo ">
                            ";
            } elseif ((            // line 52
$context["var_type"] == "str")) {
                // line 53
                echo "                                <input type=\"text\" class=\"txt\" style=\"width: 250px;\" name=\"confstrs[";
                echo twig_escape_filter($this->env, $context["theme_var"], "html", null, true);
                echo "]\" value=\"";
                echo (($__internal_compile_1 = ($context["confstrs"] ?? null)) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1[$context["theme_var"]] ?? null) : null);
                echo "\" ";
                echo twig_escape_filter($this->env, ($context["readonly"] ?? null), "html", null, true);
                echo ">
                            ";
            } elseif ((            // line 54
$context["var_type"] == "num")) {
                // line 55
                echo "                                <input type=\"text\" class=\"txt\" style=\"width: 50px;\" name=\"confnum[";
                echo twig_escape_filter($this->env, ($context["module_var"] ?? null), "html", null, true);
                echo "]\" value=\"";
                echo twig_escape_filter($this->env, (($__internal_compile_2 = ($context["confnum"] ?? null)) && is_array($__internal_compile_2) || $__internal_compile_2 instanceof ArrayAccess ? ($__internal_compile_2[($context["module_var"] ?? null)] ?? null) : null), "html", null, true);
                echo "\" ";
                echo twig_escape_filter($this->env, ($context["readonly"] ?? null), "html", null, true);
                echo ">
                            ";
            } elseif ((            // line 56
$context["var_type"] == "arr")) {
                // line 57
                echo "                                <textarea class=\"txtfield\" name=\"confarrs[";
                echo twig_escape_filter($this->env, $context["theme_var"], "html", null, true);
                echo "]\" ";
                echo twig_escape_filter($this->env, ($context["readonly"] ?? null), "html", null, true);
                echo ">";
                echo (($__internal_compile_3 = ($context["confarrs"] ?? null)) && is_array($__internal_compile_3) || $__internal_compile_3 instanceof ArrayAccess ? ($__internal_compile_3[$context["theme_var"]] ?? null) : null);
                echo "</textarea>
                            ";
            } elseif ((            // line 58
$context["var_type"] == "aarr")) {
                // line 59
                echo "                                <textarea class=\"txtfield\" style=\"width: 430px;\" name=\"confaarrs[";
                echo twig_escape_filter($this->env, $context["theme_var"], "html", null, true);
                echo "]\" wrap=\"off\" ";
                echo twig_escape_filter($this->env, ($context["readonly"] ?? null), "html", null, true);
                echo ">";
                echo (($__internal_compile_4 = ($context["confaarrs"] ?? null)) && is_array($__internal_compile_4) || $__internal_compile_4 instanceof ArrayAccess ? ($__internal_compile_4[$context["theme_var"]] ?? null) : null);
                echo "</textarea>
                            ";
            } elseif ((            // line 60
$context["var_type"] == "select")) {
                // line 61
                echo "                                <select class=\"select\" name=\"confselects[";
                echo twig_escape_filter($this->env, $context["theme_var"], "html", null, true);
                echo "]\" ";
                echo twig_escape_filter($this->env, ($context["readonly"] ?? null), "html", null, true);
                echo ">
                                    ";
                // line 62
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((($__internal_compile_5 = ($context["var_constraints"] ?? null)) && is_array($__internal_compile_5) || $__internal_compile_5 instanceof ArrayAccess ? ($__internal_compile_5[$context["theme_var"]] ?? null) : null));
                foreach ($context['_seq'] as $context["_key"] => $context["_field"]) {
                    // line 63
                    echo "                                        <option value=\"";
                    echo twig_escape_filter($this->env, $context["_field"]);
                    echo "\"  ";
                    if (((($__internal_compile_6 = ($context["confselects"] ?? null)) && is_array($__internal_compile_6) || $__internal_compile_6 instanceof ArrayAccess ? ($__internal_compile_6[$context["theme_var"]] ?? null) : null) == $context["_field"])) {
                        echo "selected";
                    }
                    echo ">";
                    echo $this->extensions['OxidEsales\Twig\Extensions\TranslateExtension']->translate(["ident" => ((("SHOP_THEME_" . $context["theme_var"]) . "_") . $context["_field"])]);
                    echo "</option>
                                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['_field'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 65
                echo "                                </select>
                            ";
            }
            // line 67
            echo "                            ";
            $this->loadTemplate("@__main__/inputhelp.html.twig", "@__main__/theme_config.html.twig", 67)->display(twig_array_merge($context, ["sHelpId" => $this->extensions['OxidEsales\Twig\Extensions\InputHelpExtension']->getHelpId(("HELP_SHOP_THEME_" . $context["theme_var"])), "sHelpText" => $this->extensions['OxidEsales\Twig\Extensions\InputHelpExtension']->getHelpText(("HELP_SHOP_THEME_" . $context["theme_var"]))]));
            // line 68
            echo "                        </dt>
                        <dd>
                            ";
            // line 70
            echo $this->extensions['OxidEsales\Twig\Extensions\TranslateExtension']->translate(["ident" => ("SHOP_THEME_" . $context["theme_var"])]);
            echo "
                        </dd>
                        <div class=\"spacer\"></div>
                    </dl>
                ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['theme_var'], $context['var_type'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 75
        echo "             ";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@__main__/theme_config.html.twig";
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
        return array (  322 => 75,  303 => 70,  299 => 68,  296 => 67,  292 => 65,  277 => 63,  273 => 62,  266 => 61,  264 => 60,  255 => 59,  253 => 58,  244 => 57,  242 => 56,  233 => 55,  231 => 54,  222 => 53,  220 => 52,  210 => 51,  205 => 50,  203 => 49,  199 => 47,  182 => 46,  177 => 45,  173 => 44,  169 => 83,  167 => 82,  160 => 80,  157 => 79,  141 => 76,  139 => 44,  135 => 42,  118 => 41,  113 => 39,  108 => 37,  104 => 36,  98 => 33,  94 => 32,  88 => 29,  83 => 27,  77 => 24,  73 => 23,  69 => 22,  64 => 19,  60 => 17,  56 => 15,  54 => 14,  40 => 2,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@__main__/theme_config.html.twig", "/var/www/html/source/Application/views/admin_twig/tpl/theme_config.html.twig");
    }
}
