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

/* @__main__/deliveryset_main.html.twig */
class __TwigTemplate_4b3058a6bfc613095ce3e21195338c0b extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'admin_deliveryset_main_form' => [$this, 'block_admin_deliveryset_main_form'],
            'admin_deliveryset_main_assign_delivery' => [$this, 'block_admin_deliveryset_main_assign_delivery'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        $this->loadTemplate("@__main__/headitem.html.twig", "@__main__/deliveryset_main.html.twig", 1)->display(twig_array_merge($context, ["title" => $this->extensions['OxidEsales\Twig\Extensions\Filters\TranslateExtension']->translate("GENERAL_ADMIN_TITLE")]));
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
    <input type=\"hidden\" name=\"oxidCopy\" value=\"";
        // line 12
        echo twig_escape_filter($this->env, ($context["oxid"] ?? null), "html", null, true);
        echo "\">
    <input type=\"hidden\" name=\"cl\" value=\"deliveryset_main\">
    <input type=\"hidden\" name=\"language\" value=\"";
        // line 14
        echo twig_escape_filter($this->env, ($context["actlang"] ?? null), "html", null, true);
        echo "\">
</form>


<form name=\"myedit\" id=\"myedit\" action=\"";
        // line 18
        echo twig_get_attribute($this->env, $this->source, ($context["oViewConf"] ?? null), "getSelfLink", [], "method", false, false, false, 18);
        echo "\" method=\"post\">
";
        // line 19
        echo twig_get_attribute($this->env, $this->source, ($context["oViewConf"] ?? null), "getHiddenSid", [], "method", false, false, false, 19);
        echo "
<input type=\"hidden\" name=\"cl\" value=\"deliveryset_main\">
<input type=\"hidden\" name=\"fnc\" value=\"\">
<input type=\"hidden\" name=\"oxid\" value=\"";
        // line 22
        echo twig_escape_filter($this->env, ($context["oxid"] ?? null), "html", null, true);
        echo "\">
<input type=\"hidden\" name=\"editval[oxdeliveryset__oxid]\" value=\"";
        // line 23
        echo twig_escape_filter($this->env, ($context["oxid"] ?? null), "html", null, true);
        echo "\">
<input type=\"hidden\" name=\"language\" value=\"";
        // line 24
        echo twig_escape_filter($this->env, ($context["actlang"] ?? null), "html", null, true);
        echo "\">

<table cellspacing=\"0\" cellpadding=\"0\" border=\"0\" width=\"98%\">
<tr>

    <td valign=\"top\" class=\"edittext\">

        <table cellspacing=\"0\" cellpadding=\"0\" border=\"0\">
        ";
        // line 32
        $this->displayBlock('admin_deliveryset_main_form', $context, $blocks);
        // line 91
        echo "        <tr><td colspan=\"2\">&nbsp;</td></tr>
        ";
        // line 92
        if ((($context["oxid"] ?? null) != "-1")) {
            // line 93
            echo "        <tr>
            <td class=\"edittext\">
            </td>
            <td class=\"edittext\"><br>
                ";
            // line 97
            $this->loadTemplate("@__main__/language_edit.html.twig", "@__main__/deliveryset_main.html.twig", 97)->display($context);
            // line 98
            echo "            </td>
        </tr>
        ";
        }
        // line 101
        echo "        <tr>
            <td class=\"edittext\">
            </td>
            <td class=\"edittext\"><br>
            <input type=\"submit\" class=\"edittext\" name=\"save\" value=\"";
        // line 105
        echo $this->extensions['OxidEsales\Twig\Extensions\TranslateExtension']->translate(["ident" => "GENERAL_SAVE"]);
        echo "\" onClick=\"Javascript:document.myedit.fnc.value='save'\"\" ";
        echo twig_escape_filter($this->env, ($context["readonly"] ?? null), "html", null, true);
        echo "><br>
            </td>
        </tr>
        </table>
    </td>
    <td valign=\"top\" width=\"50%\">
        ";
        // line 111
        $this->displayBlock('admin_deliveryset_main_assign_delivery', $context, $blocks);
        // line 117
        echo "    </td>
    </tr>
</table>

</form>

";
        // line 123
        $this->loadTemplate("@__main__/bottomnaviitem.html.twig", "@__main__/deliveryset_main.html.twig", 123)->display($context);
        // line 124
        echo "
";
        // line 125
        $this->loadTemplate("@__main__/bottomitem.html.twig", "@__main__/deliveryset_main.html.twig", 125)->display($context);
    }

    // line 32
    public function block_admin_deliveryset_main_form($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 33
        echo "            <tr>
                <td class=\"edittext\" width=\"140\">
                ";
        // line 35
        echo $this->extensions['OxidEsales\Twig\Extensions\TranslateExtension']->translate(["ident" => "GENERAL_NAME"]);
        echo "
                </td>
                <td class=\"edittext\" width=\"250\">
                <input type=\"text\" class=\"editinput\" size=\"50\" maxlength=\"";
        // line 38
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["edit"] ?? null), "oxdeliveryset__oxtitle", [], "any", false, false, false, 38), "fldmax_length", [], "any", false, false, false, 38), "html", null, true);
        echo "\" name=\"editval[oxdeliveryset__oxtitle]\" value=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["edit"] ?? null), "oxdeliveryset__oxtitle", [], "any", false, false, false, 38), "value", [], "any", false, false, false, 38), "html", null, true);
        echo "\" ";
        echo twig_escape_filter($this->env, ($context["readonly"] ?? null), "html", null, true);
        echo ">
                ";
        // line 39
        $this->loadTemplate("@__main__/inputhelp.html.twig", "@__main__/deliveryset_main.html.twig", 39)->display(twig_array_merge($context, ["sHelpId" => $this->extensions['OxidEsales\Twig\Extensions\InputHelpExtension']->getHelpId("HELP_GENERAL_NAME"), "sHelpText" => $this->extensions['OxidEsales\Twig\Extensions\InputHelpExtension']->getHelpText("HELP_GENERAL_NAME")]));
        // line 40
        echo "                </td>
            </tr>
            <tr>
                <td class=\"edittext\">
                ";
        // line 44
        echo $this->extensions['OxidEsales\Twig\Extensions\TranslateExtension']->translate(["ident" => "GENERAL_ALWAYS_ACTIVE"]);
        echo "
                </td>
                <td class=\"edittext\">
                <input class=\"edittext\" type=\"checkbox\" name=\"editval[oxdeliveryset__oxactive]\" value='1' ";
        // line 47
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["edit"] ?? null), "oxdeliveryset__oxactive", [], "any", false, false, false, 47), "value", [], "any", false, false, false, 47) == 1)) {
            echo "checked";
        }
        echo " ";
        echo twig_escape_filter($this->env, ($context["readonly"] ?? null), "html", null, true);
        echo ">
                ";
        // line 48
        $this->loadTemplate("@__main__/inputhelp.html.twig", "@__main__/deliveryset_main.html.twig", 48)->display(twig_array_merge($context, ["sHelpId" => $this->extensions['OxidEsales\Twig\Extensions\InputHelpExtension']->getHelpId("HELP_GENERAL_ACTIVE"), "sHelpText" => $this->extensions['OxidEsales\Twig\Extensions\InputHelpExtension']->getHelpText("HELP_GENERAL_ACTIVE")]));
        // line 49
        echo "                </td>
            </tr>
            <tr>
                <td class=\"edittext\">
                ";
        // line 53
        echo $this->extensions['OxidEsales\Twig\Extensions\TranslateExtension']->translate(["ident" => "GENERAL_ACTIVFROMTILL"]);
        echo "
                </td>
                <td class=\"edittext\">
                <input type=\"text\" class=\"editinput\" size=\"27\" name=\"editval[oxdeliveryset__oxactivefrom]\" value=\"";
        // line 56
        echo twig_escape_filter($this->env, $this->extensions['OxidEsales\Twig\Extensions\Filters\FormatDateExtension']->formatDate(twig_get_attribute($this->env, $this->source, ($context["edit"] ?? null), "oxdeliveryset__oxactivefrom", [], "any", false, false, false, 56)), "html", null, true);
        echo "\" ";
        $this->loadTemplate("@__main__/help.html.twig", "@__main__/deliveryset_main.html.twig", 56)->display(twig_array_merge($context, ["helpid" => "article_vonbis"]));
        echo " ";
        echo twig_escape_filter($this->env, ($context["readonly"] ?? null), "html", null, true);
        echo ">(";
        echo $this->extensions['OxidEsales\Twig\Extensions\TranslateExtension']->translate(["ident" => "GENERAL_FROM"]);
        echo ")<br>
                <input type=\"text\" class=\"editinput\" size=\"27\" name=\"editval[oxdeliveryset__oxactiveto]\" value=\"";
        // line 57
        echo twig_escape_filter($this->env, $this->extensions['OxidEsales\Twig\Extensions\Filters\FormatDateExtension']->formatDate(twig_get_attribute($this->env, $this->source, ($context["edit"] ?? null), "oxdeliveryset__oxactiveto", [], "any", false, false, false, 57)), "html", null, true);
        echo "\" ";
        $this->loadTemplate("@__main__/help.html.twig", "@__main__/deliveryset_main.html.twig", 57)->display(twig_array_merge($context, ["helpid" => "article_vonbis"]));
        echo " ";
        echo twig_escape_filter($this->env, ($context["readonly"] ?? null), "html", null, true);
        echo ">(";
        echo $this->extensions['OxidEsales\Twig\Extensions\TranslateExtension']->translate(["ident" => "GENERAL_TILL"]);
        echo ")
                ";
        // line 58
        $this->loadTemplate("@__main__/inputhelp.html.twig", "@__main__/deliveryset_main.html.twig", 58)->display(twig_array_merge($context, ["sHelpId" => $this->extensions['OxidEsales\Twig\Extensions\InputHelpExtension']->getHelpId("HELP_GENERAL_ACTIVFROMTILL"), "sHelpText" => $this->extensions['OxidEsales\Twig\Extensions\InputHelpExtension']->getHelpText("HELP_GENERAL_ACTIVFROMTILL")]));
        // line 59
        echo "                </td>
            </tr>
            <tr>
                <td class=\"edittext\" width=\"140\">
                ";
        // line 63
        echo $this->extensions['OxidEsales\Twig\Extensions\TranslateExtension']->translate(["ident" => "GENERAL_SORT"]);
        echo "
                </td>
                <td class=\"edittext\" width=\"250\">
                <input type=\"text\" class=\"editinput\" size=\"5\" maxlength=\"";
        // line 66
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["edit"] ?? null), "oxdeliveryset__oxpos", [], "any", false, false, false, 66), "fldmax_length", [], "any", false, false, false, 66), "html", null, true);
        echo "\" name=\"editval[oxdeliveryset__oxpos]\" value=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["edit"] ?? null), "oxdeliveryset__oxpos", [], "any", false, false, false, 66), "value", [], "any", false, false, false, 66), "html", null, true);
        echo "\" ";
        echo twig_escape_filter($this->env, ($context["readonly"] ?? null), "html", null, true);
        echo ">
                ";
        // line 67
        $this->loadTemplate("@__main__/inputhelp.html.twig", "@__main__/deliveryset_main.html.twig", 67)->display(twig_array_merge($context, ["sHelpId" => $this->extensions['OxidEsales\Twig\Extensions\InputHelpExtension']->getHelpId("HELP_DELIVERYSET_MAIN_POS"), "sHelpText" => $this->extensions['OxidEsales\Twig\Extensions\InputHelpExtension']->getHelpText("HELP_DELIVERYSET_MAIN_POS")]));
        // line 68
        echo "                </td>
            </tr>
            <tr>
                <td class=\"edittext\" width=\"140\">
                    ";
        // line 72
        echo $this->extensions['OxidEsales\Twig\Extensions\TranslateExtension']->translate(["ident" => "DELIVERYSET_MAIN_TRACKINGURL"]);
        echo "
                </td>
                <td class=\"edittext\" width=\"250\">
                    <input
                            type=\"text\"
                            class=\"editinput\"
                            size=\"50\"
                            maxlength=\"";
        // line 79
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["edit"] ?? null), "oxdeliveryset__oxtrackingurl", [], "any", false, false, false, 79), "fldmax_length", [], "any", false, false, false, 79), "html", null, true);
        echo "\"
                            name=\"editval[oxdeliveryset__oxtrackingurl]\"
                            value=\"";
        // line 81
        echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["edit"] ?? null), "oxdeliveryset__oxtrackingurl", [], "any", false, false, false, 81), "value", [], "any", false, false, false, 81);
        echo "\"
                            ";
        // line 82
        echo twig_escape_filter($this->env, ($context["readonly"] ?? null), "html", null, true);
        echo ">
                    ";
        // line 83
        $this->loadTemplate("@__main__/inputhelp.html.twig", "@__main__/deliveryset_main.html.twig", 83)->display(twig_array_merge($context, ["sHelpId" => $this->extensions['OxidEsales\Twig\Extensions\InputHelpExtension']->getHelpId("HELP_DELIVERYSET_MAIN_TRACKINGURL"), "sHelpText" => $this->extensions['OxidEsales\Twig\Extensions\InputHelpExtension']->getHelpText("HELP_DELIVERYSET_MAIN_TRACKINGURL")]));
        // line 88
        echo "                </td>
            </tr>
        ";
    }

    // line 111
    public function block_admin_deliveryset_main_assign_delivery($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 112
        echo "            ";
        if ((($context["oxid"] ?? null) != "-1")) {
            // line 113
            echo "                <input ";
            echo twig_escape_filter($this->env, ($context["readonly"] ?? null), "html", null, true);
            echo " type=\"button\" value=\"";
            echo $this->extensions['OxidEsales\Twig\Extensions\TranslateExtension']->translate(["ident" => "DELIVERYSET_MAIN_ASSIGNDELIVERY"]);
            echo "\" class=\"edittext\" onclick=\"JavaScript:showDialog('&cl=deliveryset_main&aoc=1&oxid=";
            echo twig_escape_filter($this->env, ($context["oxid"] ?? null), "html", null, true);
            echo "');\"><br>
                <input ";
            // line 114
            echo twig_escape_filter($this->env, ($context["readonly"] ?? null), "html", null, true);
            echo " type=\"button\" value=\"";
            echo $this->extensions['OxidEsales\Twig\Extensions\TranslateExtension']->translate(["ident" => "GENERAL_ASSIGNCOUNTRIES"]);
            echo "\" class=\"edittext\" onclick=\"JavaScript:showDialog('&cl=deliveryset_payment&aoc=2&oxid=";
            echo twig_escape_filter($this->env, ($context["oxid"] ?? null), "html", null, true);
            echo "');\">
            ";
        }
        // line 116
        echo "        ";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@__main__/deliveryset_main.html.twig";
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
        return array (  330 => 116,  321 => 114,  312 => 113,  309 => 112,  305 => 111,  299 => 88,  297 => 83,  293 => 82,  289 => 81,  284 => 79,  274 => 72,  268 => 68,  266 => 67,  258 => 66,  252 => 63,  246 => 59,  244 => 58,  234 => 57,  224 => 56,  218 => 53,  212 => 49,  210 => 48,  202 => 47,  196 => 44,  190 => 40,  188 => 39,  180 => 38,  174 => 35,  170 => 33,  166 => 32,  162 => 125,  159 => 124,  157 => 123,  149 => 117,  147 => 111,  136 => 105,  130 => 101,  125 => 98,  123 => 97,  117 => 93,  115 => 92,  112 => 91,  110 => 32,  99 => 24,  95 => 23,  91 => 22,  85 => 19,  81 => 18,  74 => 14,  69 => 12,  65 => 11,  61 => 10,  57 => 9,  54 => 8,  50 => 6,  46 => 4,  44 => 3,  41 => 2,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@__main__/deliveryset_main.html.twig", "/var/www/html/source/Application/views/admin_twig/tpl/deliveryset_main.html.twig");
    }
}
