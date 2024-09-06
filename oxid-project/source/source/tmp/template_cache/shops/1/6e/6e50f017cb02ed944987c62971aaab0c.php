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

/* @__main__/adminlinks_main.html.twig */
class __TwigTemplate_d6f8090c9a98f214c9010d0d78c05e3d extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'admin_adminlinks_main_form' => [$this, 'block_admin_adminlinks_main_form'],
            'admin_adminlinks_main_editor' => [$this, 'block_admin_adminlinks_main_editor'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        $this->loadTemplate("@__main__/headitem.html.twig", "@__main__/adminlinks_main.html.twig", 1)->display(twig_array_merge($context, ["title" => $this->extensions['OxidEsales\Twig\Extensions\Filters\TranslateExtension']->translate("GENERAL_ADMIN_TITLE")]));
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
    <input type=\"hidden\" name=\"cl\" value=\"adminlinks_main\">
    <input type=\"hidden\" name=\"editlanguage\" value=\"";
        // line 13
        echo twig_escape_filter($this->env, ($context["editlanguage"] ?? null), "html", null, true);
        echo "\">
</form>

      <table cellspacing=\"0\" cellpadding=\"0\" border=\"0\" width=\"98%\">
        <colgroup><col width=\"20%\"><col width=\"5%\"><col width=\"75%\"></colgroup>
        <form name=\"myedit\" id=\"myedit\" action=\"";
        // line 18
        echo twig_get_attribute($this->env, $this->source, ($context["oViewConf"] ?? null), "getSelfLink", [], "method", false, false, false, 18);
        echo "\" method=\"post\" onSubmit=\"copyLongDesc( 'oxlinks__oxurldesc' );\">
        ";
        // line 19
        echo twig_get_attribute($this->env, $this->source, ($context["oViewConf"] ?? null), "getHiddenSid", [], "method", false, false, false, 19);
        echo "
        <input type=\"hidden\" name=\"cl\" value=\"adminlinks_main\">
        <input type=\"hidden\" name=\"fnc\" value=\"\">
        <input type=\"hidden\" name=\"oxid\" value=\"";
        // line 22
        echo twig_escape_filter($this->env, ($context["oxid"] ?? null), "html", null, true);
        echo "\">
        <input type=\"hidden\" name=\"voxid\" value=\"";
        // line 23
        echo twig_escape_filter($this->env, ($context["oxid"] ?? null), "html", null, true);
        echo "\">
        <input type=\"hidden\" name=\"editval[oxlinks__oxid]\" value=\"";
        // line 24
        echo twig_escape_filter($this->env, ($context["oxid"] ?? null), "html", null, true);
        echo "\">
        <input type=\"hidden\" name=\"editval[oxlinks__oxurldesc]\" value=\"\">
        ";
        // line 27
        echo "        <tr>
          <td valign=\"top\" class=\"edittext\">
            <table cellspacing=\"0\" cellpadding=\"0\" border=\"0\">
              ";
        // line 30
        $this->displayBlock('admin_adminlinks_main_form', $context, $blocks);
        // line 59
        echo "              <tr>
                <td class=\"edittext\">
                </td>
                <td class=\"edittext\"><br>
                ";
        // line 63
        $this->loadTemplate("@__main__/language_edit.html.twig", "@__main__/adminlinks_main.html.twig", 63)->display($context);
        // line 64
        echo "                </td>
              </tr>
              <tr>
                <td class=\"edittext\">
                </td>
                <td class=\"edittext\"><br>
                <input type=\"submit\" class=\"edittext\" name=\"save\" value=\"";
        // line 70
        echo $this->extensions['OxidEsales\Twig\Extensions\TranslateExtension']->translate(["ident" => "GENERAL_SAVE"]);
        echo "\" onClick=\"Javascript:document.myedit.fnc.value='save'\"\" ";
        echo twig_escape_filter($this->env, ($context["readonly"] ?? null), "html", null, true);
        echo ">
                </td>
              </tr>
            </table>
          </td>
        <td></td>
        <!-- Anfang rechte Seite -->
          <td valign=\"top\" class=\"edittext vr\" align=\"left\">
              ";
        // line 78
        $this->displayBlock('admin_adminlinks_main_editor', $context, $blocks);
        // line 81
        echo "          </td>
        </tr>
      </table>

</form>
";
        // line 86
        $this->loadTemplate("@__main__/bottomnaviitem.html.twig", "@__main__/adminlinks_main.html.twig", 86)->display($context);
        // line 87
        echo "
";
        // line 88
        $this->loadTemplate("@__main__/bottomitem.html.twig", "@__main__/adminlinks_main.html.twig", 88)->display($context);
    }

    // line 30
    public function block_admin_adminlinks_main_form($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 31
        echo "                  <tr>
                    <td class=\"edittext\" width=\"90\">
                    ";
        // line 33
        echo $this->extensions['OxidEsales\Twig\Extensions\TranslateExtension']->translate(["ident" => "GENERAL_ACTIVE"]);
        echo "&nbsp;
                    </td>
                    <td class=\"edittext\">
                    <input class=\"edittext\" type=\"checkbox\" name=\"editval[oxlinks__oxactive]\" value='1' ";
        // line 36
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["edit"] ?? null), "oxlinks__oxactive", [], "any", false, false, false, 36), "value", [], "any", false, false, false, 36) == 1)) {
            echo "checked";
        }
        echo " ";
        echo twig_escape_filter($this->env, ($context["readonly"] ?? null), "html", null, true);
        echo ">
                    ";
        // line 37
        $this->loadTemplate("@__main__/inputhelp.html.twig", "@__main__/adminlinks_main.html.twig", 37)->display(twig_array_merge($context, ["sHelpId" => $this->extensions['OxidEsales\Twig\Extensions\InputHelpExtension']->getHelpId("HELP_GENERAL_ACTIVE"), "sHelpText" => $this->extensions['OxidEsales\Twig\Extensions\InputHelpExtension']->getHelpText("HELP_GENERAL_ACTIVE")]));
        // line 38
        echo "                    </td>
                  </tr>
                  <tr>
                    <td class=\"edittext\">
                    ";
        // line 42
        echo $this->extensions['OxidEsales\Twig\Extensions\TranslateExtension']->translate(["ident" => "GENERAL_DATE"]);
        echo "&nbsp;
                    </td>
                    <td class=\"edittext\">
                    <input type=\"text\" class=\"editinput\" size=\"30\" name=\"editval[oxlinks__oxinsert]\" value=\"";
        // line 45
        echo twig_escape_filter($this->env, $this->extensions['OxidEsales\Twig\Extensions\Filters\FormatDateExtension']->formatDate(twig_get_attribute($this->env, $this->source, ($context["edit"] ?? null), "oxlinks__oxinsert", [], "any", false, false, false, 45)), "html", null, true);
        echo "\" ";
        echo twig_escape_filter($this->env, ($context["readonly"] ?? null), "html", null, true);
        echo ">
                    ";
        // line 46
        $this->loadTemplate("@__main__/inputhelp.html.twig", "@__main__/adminlinks_main.html.twig", 46)->display(twig_array_merge($context, ["sHelpId" => $this->extensions['OxidEsales\Twig\Extensions\InputHelpExtension']->getHelpId("HELP_GENERAL_DATE"), "sHelpText" => $this->extensions['OxidEsales\Twig\Extensions\InputHelpExtension']->getHelpText("HELP_GENERAL_DATE")]));
        // line 47
        echo "                    </td>
                  </tr>
                  <tr>
                    <td class=\"edittext\">
                     ";
        // line 51
        echo $this->extensions['OxidEsales\Twig\Extensions\TranslateExtension']->translate(["ident" => "GENERAL_URL"]);
        echo "&nbsp;
                    </td>
                    <td class=\"edittext\">
                    <input type=\"text\" class=\"editinput\" size=\"30\" maxlength=\"";
        // line 54
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["edit"] ?? null), "oxlinks__oxurl", [], "any", false, false, false, 54), "fldmax_length", [], "any", false, false, false, 54), "html", null, true);
        echo "\" name=\"editval[oxlinks__oxurl]\" value=\"";
        echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["edit"] ?? null), "oxlinks__oxurl", [], "any", false, false, false, 54), "value", [], "any", false, false, false, 54);
        echo "\" ";
        echo twig_escape_filter($this->env, ($context["readonly"] ?? null), "html", null, true);
        echo ">
                    ";
        // line 55
        $this->loadTemplate("@__main__/inputhelp.html.twig", "@__main__/adminlinks_main.html.twig", 55)->display(twig_array_merge($context, ["sHelpId" => $this->extensions['OxidEsales\Twig\Extensions\InputHelpExtension']->getHelpId("HELP_GENERAL_URL"), "sHelpText" => $this->extensions['OxidEsales\Twig\Extensions\InputHelpExtension']->getHelpText("HELP_GENERAL_URL")]));
        // line 56
        echo "                    </td>
                  </tr>
              ";
    }

    // line 78
    public function block_admin_adminlinks_main_editor($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 79
        echo "                ";
        $this->loadTemplate("@__main__/include/editor.html.twig", "@__main__/adminlinks_main.html.twig", 79)->display($context);
        // line 80
        echo "              ";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@__main__/adminlinks_main.html.twig";
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
        return array (  234 => 80,  231 => 79,  227 => 78,  221 => 56,  219 => 55,  211 => 54,  205 => 51,  199 => 47,  197 => 46,  191 => 45,  185 => 42,  179 => 38,  177 => 37,  169 => 36,  163 => 33,  159 => 31,  155 => 30,  151 => 88,  148 => 87,  146 => 86,  139 => 81,  137 => 78,  124 => 70,  116 => 64,  114 => 63,  108 => 59,  106 => 30,  101 => 27,  96 => 24,  92 => 23,  88 => 22,  82 => 19,  78 => 18,  70 => 13,  65 => 11,  61 => 10,  57 => 9,  54 => 8,  50 => 6,  46 => 4,  44 => 3,  41 => 2,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@__main__/adminlinks_main.html.twig", "/var/www/html/source/Application/views/admin_twig/tpl/adminlinks_main.html.twig");
    }
}
