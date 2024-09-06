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

/* @__main__/usergroup_main.html.twig */
class __TwigTemplate_28cff6b447bddb21b29203445f32c9bf extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'admin_usergroup_main_form' => [$this, 'block_admin_usergroup_main_form'],
            'admin_usergroup_main_assign_users' => [$this, 'block_admin_usergroup_main_assign_users'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        $this->loadTemplate("@__main__/headitem.html.twig", "@__main__/usergroup_main.html.twig", 1)->display(twig_array_merge($context, ["title" => $this->extensions['OxidEsales\Twig\Extensions\Filters\TranslateExtension']->translate("GENERAL_ADMIN_TITLE")]));
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
";
        // line 9
        $context["disableSharedEdit"] = "";
        // line 10
        if (((twig_get_attribute($this->env, $this->source, ($context["oViewConf"] ?? null), "getEdition", [], "method", false, false, false, 10) == "EE") &&  !($context["allowSharedEdit"] ?? null))) {
            // line 11
            echo "    ";
            $context["disableSharedEdit"] = "readonly disabled";
        }
        // line 13
        echo "
<form name=\"transfer\" id=\"transfer\" action=\"";
        // line 14
        echo twig_get_attribute($this->env, $this->source, ($context["oViewConf"] ?? null), "getSelfLink", [], "method", false, false, false, 14);
        echo "\" method=\"post\">
    ";
        // line 15
        echo twig_get_attribute($this->env, $this->source, ($context["oViewConf"] ?? null), "getHiddenSid", [], "method", false, false, false, 15);
        echo "
    <input type=\"hidden\" name=\"oxid\" value=\"";
        // line 16
        echo twig_escape_filter($this->env, ($context["oxid"] ?? null), "html", null, true);
        echo "\">
    <input type=\"hidden\" name=\"cl\" value=\"usergroup_main\">
</form>

<form name=\"myedit\" id=\"myedit\" action=\"";
        // line 20
        echo twig_get_attribute($this->env, $this->source, ($context["oViewConf"] ?? null), "getSelfLink", [], "method", false, false, false, 20);
        echo "\" method=\"post\">
";
        // line 21
        echo twig_get_attribute($this->env, $this->source, ($context["oViewConf"] ?? null), "getHiddenSid", [], "method", false, false, false, 21);
        echo "
<input type=\"hidden\" name=\"cl\" value=\"usergroup_main\">
<input type=\"hidden\" name=\"fnc\" value=\"\">
<input type=\"hidden\" name=\"oxid\" value=\"";
        // line 24
        echo twig_escape_filter($this->env, ($context["oxid"] ?? null), "html", null, true);
        echo "\">
<input type=\"hidden\" name=\"editval[oxgroups__oxid]\" value=\"";
        // line 25
        echo twig_escape_filter($this->env, ($context["oxid"] ?? null), "html", null, true);
        echo "\">

<table cellspacing=\"0\" cellpadding=\"0\" border=\"0\" width=\"98%\">
<tr>

    <td valign=\"top\" class=\"edittext\">

        <table cellspacing=\"0\" cellpadding=\"0\" border=\"0\">
        ";
        // line 33
        $this->displayBlock('admin_usergroup_main_form', $context, $blocks);
        // line 53
        echo "        <tr>
            <td class=\"edittext\">
            </td>
            <td class=\"edittext\"><br>
                ";
        // line 57
        $this->loadTemplate("@__main__/language_edit.html.twig", "@__main__/usergroup_main.html.twig", 57)->display($context);
        // line 58
        echo "            </td>
        </tr>
        <tr>
            <td class=\"edittext\">
            </td>
            <td class=\"edittext\"><br>
            <input type=\"submit\" class=\"edittext\" name=\"save\" value=\"";
        // line 64
        echo $this->extensions['OxidEsales\Twig\Extensions\TranslateExtension']->translate(["ident" => "GENERAL_SAVE"]);
        echo "\" onClick=\"Javascript:document.myedit.fnc.value='save'\"\" ";
        echo twig_escape_filter($this->env, ($context["readonly"] ?? null), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["disableSharedEdit"] ?? null), "html", null, true);
        echo ">
            </td>
        </tr>
        </table>
    </td>
    <!-- Anfang rechte Seite -->
    <td valign=\"top\" class=\"edittext\" align=\"left\" width=\"50%\">
        ";
        // line 71
        $this->displayBlock('admin_usergroup_main_assign_users', $context, $blocks);
        // line 76
        echo "    </td>

    </tr>
</table>

</form>

";
        // line 83
        $this->loadTemplate("@__main__/bottomnaviitem.html.twig", "@__main__/usergroup_main.html.twig", 83)->display($context);
        // line 84
        echo "
";
        // line 85
        $this->loadTemplate("@__main__/bottomitem.html.twig", "@__main__/usergroup_main.html.twig", 85)->display($context);
    }

    // line 33
    public function block_admin_usergroup_main_form($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 34
        echo "            <tr>
                <td class=\"edittext\" width=\"70\">
                ";
        // line 36
        echo $this->extensions['OxidEsales\Twig\Extensions\TranslateExtension']->translate(["ident" => "GENERAL_ACTIVE"]);
        echo "
                </td>
                <td class=\"edittext\">
                <input class=\"edittext\" type=\"checkbox\" name=\"editval[oxgroups__oxactive]\" value='1' ";
        // line 39
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["edit"] ?? null), "oxgroups__oxactive", [], "any", false, false, false, 39), "value", [], "any", false, false, false, 39) == 1)) {
            echo "checked";
        }
        echo " ";
        echo twig_escape_filter($this->env, ($context["readonly"] ?? null), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["disableSharedEdit"] ?? null), "html", null, true);
        echo ">
                ";
        // line 40
        $this->loadTemplate("@__main__/inputhelp.html.twig", "@__main__/usergroup_main.html.twig", 40)->display(twig_array_merge($context, ["sHelpId" => $this->extensions['OxidEsales\Twig\Extensions\InputHelpExtension']->getHelpId("HELP_GENERAL_ACTIVE"), "sHelpText" => $this->extensions['OxidEsales\Twig\Extensions\InputHelpExtension']->getHelpText("HELP_GENERAL_ACTIVE")]));
        // line 41
        echo "                </td>
            </tr>
            <tr>
                <td class=\"edittext\" width=\"100\">
                ";
        // line 45
        echo $this->extensions['OxidEsales\Twig\Extensions\TranslateExtension']->translate(["ident" => "GENERAL_NAME"]);
        echo "
                </td>
                <td class=\"edittext\">
                <input type=\"text\" class=\"editinput\" size=\"25\" maxlength=\"";
        // line 48
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["edit"] ?? null), "oxgroups__oxtitle", [], "any", false, false, false, 48), "fldmax_length", [], "any", false, false, false, 48), "html", null, true);
        echo "\" name=\"editval[oxgroups__oxtitle]\" value=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["edit"] ?? null), "oxgroups__oxtitle", [], "any", false, false, false, 48), "value", [], "any", false, false, false, 48), "html", null, true);
        echo "\" ";
        echo twig_escape_filter($this->env, ($context["readonly"] ?? null), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["disableSharedEdit"] ?? null), "html", null, true);
        echo ">
                ";
        // line 49
        $this->loadTemplate("@__main__/inputhelp.html.twig", "@__main__/usergroup_main.html.twig", 49)->display(twig_array_merge($context, ["sHelpId" => $this->extensions['OxidEsales\Twig\Extensions\InputHelpExtension']->getHelpId("HELP_GENERAL_NAME"), "sHelpText" => $this->extensions['OxidEsales\Twig\Extensions\InputHelpExtension']->getHelpText("HELP_GENERAL_NAME")]));
        // line 50
        echo "                </td>
            </tr>
        ";
    }

    // line 71
    public function block_admin_usergroup_main_assign_users($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 72
        echo "            ";
        if ((($context["oxid"] ?? null) != "-1")) {
            // line 73
            echo "                <input ";
            echo twig_escape_filter($this->env, ($context["readonly"] ?? null), "html", null, true);
            echo " type=\"button\" value=\"";
            echo $this->extensions['OxidEsales\Twig\Extensions\TranslateExtension']->translate(["ident" => "GENERAL_ASSIGNUSERS"]);
            echo "\" class=\"edittext\" onclick=\"JavaScript:showDialog('&cl=usergroup_main&aoc=1&oxid=";
            echo twig_escape_filter($this->env, ($context["oxid"] ?? null), "html", null, true);
            echo "');\">
            ";
        }
        // line 75
        echo "        ";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@__main__/usergroup_main.html.twig";
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
        return array (  233 => 75,  223 => 73,  220 => 72,  216 => 71,  210 => 50,  208 => 49,  198 => 48,  192 => 45,  186 => 41,  184 => 40,  174 => 39,  168 => 36,  164 => 34,  160 => 33,  156 => 85,  153 => 84,  151 => 83,  142 => 76,  140 => 71,  126 => 64,  118 => 58,  116 => 57,  110 => 53,  108 => 33,  97 => 25,  93 => 24,  87 => 21,  83 => 20,  76 => 16,  72 => 15,  68 => 14,  65 => 13,  61 => 11,  59 => 10,  57 => 9,  54 => 8,  50 => 6,  46 => 4,  44 => 3,  41 => 2,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@__main__/usergroup_main.html.twig", "/var/www/html/source/Application/views/admin_twig/tpl/usergroup_main.html.twig");
    }
}
