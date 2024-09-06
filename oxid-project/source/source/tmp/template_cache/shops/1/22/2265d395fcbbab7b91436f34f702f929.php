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

/* @__main__/language_main.html.twig */
class __TwigTemplate_b0a95b97485e1778f51ea8d8fe3255fd extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'admin_language_main_form' => [$this, 'block_admin_language_main_form'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        $this->loadTemplate("@__main__/headitem.html.twig", "@__main__/language_main.html.twig", 1)->display(twig_array_merge($context, ["title" => $this->extensions['OxidEsales\Twig\Extensions\Filters\TranslateExtension']->translate("GENERAL_ADMIN_TITLE")]));
        // line 2
        echo "
<script type=\"text/javascript\">
<!--
window.onload = function ()
{
    ";
        // line 7
        if ((($context["updatelist"] ?? null) == 1)) {
            // line 8
            echo "        top.oxid.admin.updateList('";
            echo twig_escape_filter($this->env, ($context["oxid"] ?? null), "html", null, true);
            echo "');
    ";
        }
        // line 10
        echo "    var oField = top.oxid.admin.getLockTarget();
    oField.onchange = oField.onkeyup = oField.onmouseout = top.oxid.admin.unlockSave;
}
//-->
</script>

";
        // line 16
        if (($context["readonly"] ?? null)) {
            // line 17
            echo "    ";
            $context["readonly"] = "readonly disabled";
        } else {
            // line 19
            echo "    ";
            $context["readonly"] = "";
        }
        // line 21
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
        echo twig_escape_filter($this->env, ($context["oxid"] ?? null), "html", null, true);
        echo "\">
    <input type=\"hidden\" name=\"oxidCopy\" value=\"";
        // line 25
        echo twig_escape_filter($this->env, ($context["oxid"] ?? null), "html", null, true);
        echo "\">
    <input type=\"hidden\" name=\"cl\" value=\"language_main\">
    <input type=\"hidden\" name=\"language\" value=\"";
        // line 27
        echo twig_escape_filter($this->env, ($context["actlang"] ?? null), "html", null, true);
        echo "\">
</form>

<form name=\"myedit\" id=\"myedit\" action=\"";
        // line 30
        echo twig_get_attribute($this->env, $this->source, ($context["oViewConf"] ?? null), "getSelfLink", [], "method", false, false, false, 30);
        echo "\" method=\"post\">
";
        // line 31
        echo twig_get_attribute($this->env, $this->source, ($context["oViewConf"] ?? null), "getHiddenSid", [], "method", false, false, false, 31);
        echo "
<input type=\"hidden\" name=\"cl\" value=\"language_main\">
<input type=\"hidden\" name=\"fnc\" value=\"\">
<input type=\"hidden\" name=\"oxid\" value=\"";
        // line 34
        echo twig_escape_filter($this->env, ($context["oxid"] ?? null), "html", null, true);
        echo "\">
<input type=\"hidden\" name=\"voxid\" value=\"";
        // line 35
        echo twig_escape_filter($this->env, ($context["oxid"] ?? null), "html", null, true);
        echo "\">
<input type=\"hidden\" name=\"editval[oxid]\" value=\"";
        // line 36
        echo twig_escape_filter($this->env, ($context["oxid"] ?? null), "html", null, true);
        echo "\">
<input type=\"hidden\" name=\"language\" value=\"";
        // line 37
        echo twig_escape_filter($this->env, ($context["actlang"] ?? null), "html", null, true);
        echo "\">


<table cellspacing=\"0\" cellpadding=\"0\" border=\"0\" width=\"98%\">
<tr>
    <td valign=\"top\" class=\"edittext\">

        <table cellspacing=\"0\" cellpadding=\"0\" border=\"0\">
        ";
        // line 45
        $this->displayBlock('admin_language_main_form', $context, $blocks);
        // line 120
        echo "        <tr>
            <td class=\"edittext\"><br><br>
            </td>
            <td class=\"edittext\"><br><br>
            <input type=\"submit\"  ";
        // line 124
        if ( !twig_get_attribute($this->env, $this->source, ($context["edit"] ?? null), "abbr", [], "any", false, false, false, 124)) {
            echo "disabled";
        }
        echo " class=\"edittext\" id=\"oLockButton\" name=\"saveArticle\" value=\"";
        echo $this->extensions['OxidEsales\Twig\Extensions\TranslateExtension']->translate(["ident" => "GENERAL_SAVE"]);
        echo "\" onClick=\"Javascript:document.myedit.fnc.value='save'\"\" ";
        echo twig_escape_filter($this->env, ($context["readonly"] ?? null), "html", null, true);
        echo "><br>
            </td>
        </tr>
        </table>
    </td>

    </tr>
</table>

</form>

";
        // line 135
        $this->loadTemplate("@__main__/bottomnaviitem.html.twig", "@__main__/language_main.html.twig", 135)->display($context);
        // line 136
        echo "
";
        // line 137
        $this->loadTemplate("@__main__/bottomitem.html.twig", "@__main__/language_main.html.twig", 137)->display($context);
    }

    // line 45
    public function block_admin_language_main_form($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 46
        echo "            <tr>
                <td class=\"edittext\" width=\"120\">
                ";
        // line 48
        echo $this->extensions['OxidEsales\Twig\Extensions\TranslateExtension']->translate(["ident" => "LANGUAGE_ACTIVE"]);
        echo "
                </td>
                <td class=\"edittext\">
                <input class=\"edittext\" type=\"checkbox\" name=\"editval[active]\" value='1' ";
        // line 51
        if ((twig_get_attribute($this->env, $this->source, ($context["edit"] ?? null), "active", [], "any", false, false, false, 51) == 1)) {
            echo "checked";
        }
        echo " ";
        echo twig_escape_filter($this->env, ($context["readonly"] ?? null), "html", null, true);
        echo ">
                ";
        // line 52
        $this->loadTemplate("@__main__/inputhelp.html.twig", "@__main__/language_main.html.twig", 52)->display(twig_array_merge($context, ["sHelpId" => $this->extensions['OxidEsales\Twig\Extensions\InputHelpExtension']->getHelpId("HELP_LANGUAGE_ACTIVE"), "sHelpText" => $this->extensions['OxidEsales\Twig\Extensions\InputHelpExtension']->getHelpText("HELP_LANGUAGE_ACTIVE")]));
        // line 53
        echo "                </td>
            </tr>
            <tr>
                <td class=\"edittext\">
                ";
        // line 57
        echo $this->extensions['OxidEsales\Twig\Extensions\TranslateExtension']->translate(["ident" => "LANGUAGE_ABBERVATION"]);
        echo "
                </td>
                <td class=\"edittext\">
                <input type=\"text\" class=\"editinput\" size=\"5\" maxlength=\"10\" id=\"oLockTarget\" name=\"editval[abbr]\" value=\"";
        // line 60
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["edit"] ?? null), "abbr", [], "any", false, false, false, 60), "html", null, true);
        echo "\" ";
        echo twig_escape_filter($this->env, ($context["readonly"] ?? null), "html", null, true);
        echo ">
                ";
        // line 61
        $this->loadTemplate("@__main__/inputhelp.html.twig", "@__main__/language_main.html.twig", 61)->display(twig_array_merge($context, ["sHelpId" => $this->extensions['OxidEsales\Twig\Extensions\InputHelpExtension']->getHelpId("HELP_LANGUAGE_ABBERVATION"), "sHelpText" => $this->extensions['OxidEsales\Twig\Extensions\InputHelpExtension']->getHelpText("HELP_LANGUAGE_ABBERVATION")]));
        // line 62
        echo "                </td>
            </tr>
            <tr>
                <td class=\"edittext\">
                ";
        // line 66
        echo $this->extensions['OxidEsales\Twig\Extensions\TranslateExtension']->translate(["ident" => "LANGUAGE_DESCRIPTION"]);
        echo "
                </td>
                <td class=\"edittext\">
                <input type=\"text\" class=\"editinput\" size=\"40\" maxlength=\"50\" name=\"editval[desc]\" value=\"";
        // line 69
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["edit"] ?? null), "desc", [], "any", false, false, false, 69), "html", null, true);
        echo "\" ";
        echo twig_escape_filter($this->env, ($context["readonly"] ?? null), "html", null, true);
        echo ">
                ";
        // line 70
        $this->loadTemplate("@__main__/inputhelp.html.twig", "@__main__/language_main.html.twig", 70)->display(twig_array_merge($context, ["sHelpId" => $this->extensions['OxidEsales\Twig\Extensions\InputHelpExtension']->getHelpId("HELP_LANGUAGE_DESCRIPTION"), "sHelpText" => $this->extensions['OxidEsales\Twig\Extensions\InputHelpExtension']->getHelpText("HELP_LANGUAGE_DESCRIPTION")]));
        // line 71
        echo "                </td>
            </tr>
            <tr>
                <td class=\"edittext\">
                ";
        // line 75
        echo $this->extensions['OxidEsales\Twig\Extensions\TranslateExtension']->translate(["ident" => "LANGUAGE_DEFAULT"]);
        echo "
                </td>
                <td class=\"edittext\">
                <input class=\"edittext\" type=\"checkbox\" name=\"editval[default]\" value='1' ";
        // line 78
        if (twig_get_attribute($this->env, $this->source, ($context["edit"] ?? null), "default", [], "any", false, false, false, 78)) {
            echo "checked";
        }
        echo " ";
        echo twig_escape_filter($this->env, ($context["readonly"] ?? null), "html", null, true);
        echo ">
                ";
        // line 79
        $this->loadTemplate("@__main__/inputhelp.html.twig", "@__main__/language_main.html.twig", 79)->display(twig_array_merge($context, ["sHelpId" => $this->extensions['OxidEsales\Twig\Extensions\InputHelpExtension']->getHelpId("HELP_LANGUAGE_DEFAULT"), "sHelpText" => $this->extensions['OxidEsales\Twig\Extensions\InputHelpExtension']->getHelpText("HELP_LANGUAGE_DEFAULT")]));
        // line 80
        echo "                </td>
            </tr>
            <tr>
                <td class=\"edittext\">
                ";
        // line 84
        echo $this->extensions['OxidEsales\Twig\Extensions\TranslateExtension']->translate(["ident" => "LANGUAGE_BASEURL"]);
        echo "
                </td>
                <td class=\"edittext\">
                <input type=\"text\" class=\"editinput\" size=\"40\" maxlength=\"255\" name=\"editval[baseurl]\" value=\"";
        // line 87
        echo twig_get_attribute($this->env, $this->source, ($context["edit"] ?? null), "baseurl", [], "any", false, false, false, 87);
        echo "\" ";
        echo twig_escape_filter($this->env, ($context["readonly"] ?? null), "html", null, true);
        echo ">
                ";
        // line 88
        $this->loadTemplate("@__main__/inputhelp.html.twig", "@__main__/language_main.html.twig", 88)->display(twig_array_merge($context, ["sHelpId" => $this->extensions['OxidEsales\Twig\Extensions\InputHelpExtension']->getHelpId("HELP_LANGUAGE_BASEURL"), "sHelpText" => $this->extensions['OxidEsales\Twig\Extensions\InputHelpExtension']->getHelpText("HELP_LANGUAGE_BASEURL")]));
        // line 89
        echo "                </td>
            </tr>
            <tr>
                <td class=\"edittext\">
                ";
        // line 93
        echo $this->extensions['OxidEsales\Twig\Extensions\TranslateExtension']->translate(["ident" => "LANGUAGE_BASESSLURL"]);
        echo "
                </td>
                <td class=\"edittext\">
                <input type=\"text\" class=\"editinput\" size=\"40\" maxlength=\"255\" name=\"editval[basesslurl]\" value=\"";
        // line 96
        echo twig_get_attribute($this->env, $this->source, ($context["edit"] ?? null), "basesslurl", [], "any", false, false, false, 96);
        echo "\" ";
        echo twig_escape_filter($this->env, ($context["readonly"] ?? null), "html", null, true);
        echo ">
                ";
        // line 97
        $this->loadTemplate("@__main__/inputhelp.html.twig", "@__main__/language_main.html.twig", 97)->display(twig_array_merge($context, ["sHelpId" => $this->extensions['OxidEsales\Twig\Extensions\InputHelpExtension']->getHelpId("HELP_LANGUAGE_BASESSLURL"), "sHelpText" => $this->extensions['OxidEsales\Twig\Extensions\InputHelpExtension']->getHelpText("HELP_LANGUAGE_BASESSLURL")]));
        // line 98
        echo "                </td>
            </tr>
            ";
        // line 100
        if ((($context["oxid"] ?? null) !=  -1)) {
            // line 101
            echo "            <tr>
                <td class=\"edittext\">
                ";
            // line 103
            echo $this->extensions['OxidEsales\Twig\Extensions\TranslateExtension']->translate(["ident" => "LANGUAGE_LANGUAGEID"]);
            echo "
                </td>
                <td class=\"edittext\">
                    ";
            // line 106
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["edit"] ?? null), "baseId", [], "any", false, false, false, 106), "html", null, true);
            echo "
                </td>
            </tr>
            ";
        }
        // line 110
        echo "            <tr>
                <td class=\"edittext\">
                ";
        // line 112
        echo $this->extensions['OxidEsales\Twig\Extensions\TranslateExtension']->translate(["ident" => "GENERAL_SORT"]);
        echo "
                </td>
                <td class=\"edittext\">
                <input type=\"text\" class=\"editinput\" size=\"5\" maxlength=\"5\" name=\"editval[sort]\" value=\"";
        // line 115
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["edit"] ?? null), "sort", [], "any", false, false, false, 115), "html", null, true);
        echo "\" ";
        echo twig_escape_filter($this->env, ($context["readonly"] ?? null), "html", null, true);
        echo ">
                ";
        // line 116
        $this->loadTemplate("@__main__/inputhelp.html.twig", "@__main__/language_main.html.twig", 116)->display(twig_array_merge($context, ["sHelpId" => $this->extensions['OxidEsales\Twig\Extensions\InputHelpExtension']->getHelpId("HELP_GENERAL_SORT"), "sHelpText" => $this->extensions['OxidEsales\Twig\Extensions\InputHelpExtension']->getHelpText("HELP_GENERAL_SORT")]));
        // line 117
        echo "                </td>
            </tr>
        ";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@__main__/language_main.html.twig";
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
        return array (  336 => 117,  334 => 116,  328 => 115,  322 => 112,  318 => 110,  311 => 106,  305 => 103,  301 => 101,  299 => 100,  295 => 98,  293 => 97,  287 => 96,  281 => 93,  275 => 89,  273 => 88,  267 => 87,  261 => 84,  255 => 80,  253 => 79,  245 => 78,  239 => 75,  233 => 71,  231 => 70,  225 => 69,  219 => 66,  213 => 62,  211 => 61,  205 => 60,  199 => 57,  193 => 53,  191 => 52,  183 => 51,  177 => 48,  173 => 46,  169 => 45,  165 => 137,  162 => 136,  160 => 135,  140 => 124,  134 => 120,  132 => 45,  121 => 37,  117 => 36,  113 => 35,  109 => 34,  103 => 31,  99 => 30,  93 => 27,  88 => 25,  84 => 24,  80 => 23,  76 => 22,  73 => 21,  69 => 19,  65 => 17,  63 => 16,  55 => 10,  49 => 8,  47 => 7,  40 => 2,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@__main__/language_main.html.twig", "/var/www/html/source/Application/views/admin_twig/tpl/language_main.html.twig");
    }
}
