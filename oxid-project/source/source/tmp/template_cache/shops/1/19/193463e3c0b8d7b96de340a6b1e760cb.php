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

/* @__main__/language_edit.html.twig */
class __TwigTemplate_b7e38f8d7ba7cf2e751c22093a383841 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'admin_language_edit' => [$this, 'block_admin_language_edit'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        $this->displayBlock('admin_language_edit', $context, $blocks);
    }

    public function block_admin_language_edit($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 2
        echo "    ";
        if ((($context["oxid"] ?? null) != "-1")) {
            // line 3
            echo "        <table cellspacing=\"2\" cellpadding=\"2\" border=\"0\">
        <tr>
        <td align=\"left\" class=\"saveinnewlangtext\">
            ";
            // line 6
            echo $this->extensions['OxidEsales\Twig\Extensions\TranslateExtension']->translate(["ident" => "GENERAL_LANGUAGE"]);
            echo "
        </td>
        <td align=\"left\">
            <select name=\"editlanguage\" id=\"test_editlanguage\" class=\"saveinnewlanginput\" onChange=\"Javascript:document.myedit.submit();\" ";
            // line 9
            echo twig_escape_filter($this->env, ($context["custreadonly"] ?? null), "html", null, true);
            echo ">
            ";
            // line 10
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["otherlang"] ?? null));
            foreach ($context['_seq'] as $context["lang"] => $context["olang"]) {
                // line 11
                echo "            <option value=\"";
                echo twig_escape_filter($this->env, $context["lang"], "html", null, true);
                echo "\"";
                if (twig_get_attribute($this->env, $this->source, $context["olang"], "selected", [], "any", false, false, false, 11)) {
                    echo "SELECTED";
                }
                echo ">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["olang"], "sLangDesc", [], "any", false, false, false, 11), "html", null, true);
                echo "</option>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['lang'], $context['olang'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 13
            echo "            </select>
        </td>
        </tr>
        ";
            // line 16
            if (($context["posslang"] ?? null)) {
                // line 17
                echo "        <tr>
        <td align=\"left\">
            <input type=\"submit\" name=\"save\" value=\"";
                // line 19
                echo $this->extensions['OxidEsales\Twig\Extensions\TranslateExtension']->translate(["ident" => "GENERAL_SAVEIN"]);
                echo "\" class=\"saveinnewlangtext\" style=\"width: 100;\" onClick=\"Javascript:document.myedit.fnc.value='saveinnlang'\" ";
                echo twig_escape_filter($this->env, ($context["readonly"] ?? null), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, ($context["readonly_fields"] ?? null), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, ($context["custreadonly"] ?? null), "html", null, true);
                echo ">
        </td>
        <td align=\"left\">
            <select name=\"new_lang\" class=\"saveinnewlanginput\" ";
                // line 22
                echo twig_escape_filter($this->env, ($context["readonly"] ?? null), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, ($context["readonly_fields"] ?? null), "html", null, true);
                echo ">
            ";
                // line 23
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["posslang"] ?? null));
                foreach ($context['_seq'] as $context["lang"] => $context["desc"]) {
                    // line 24
                    echo "            <option value=\"";
                    echo twig_escape_filter($this->env, $context["lang"], "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $context["desc"], "html", null, true);
                    echo "</option>
            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['lang'], $context['desc'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 26
                echo "            </select>
        </td>
        </tr>
        ";
            }
            // line 30
            echo "        </table>
    ";
        }
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@__main__/language_edit.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo()
    {
        return array (  132 => 30,  126 => 26,  115 => 24,  111 => 23,  105 => 22,  93 => 19,  89 => 17,  87 => 16,  82 => 13,  67 => 11,  63 => 10,  59 => 9,  53 => 6,  48 => 3,  45 => 2,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@__main__/language_edit.html.twig", "/var/www/html/source/Application/views/admin_twig/tpl/language_edit.html.twig");
    }
}
