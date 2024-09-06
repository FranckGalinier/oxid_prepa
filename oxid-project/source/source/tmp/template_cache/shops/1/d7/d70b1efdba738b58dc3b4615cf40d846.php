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

/* @__main__/page/details/inc/accordeon.html.twig */
class __TwigTemplate_388492eedac7e72dc2a755fb377418f8 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'details_longdescription' => [$this, 'block_details_longdescription'],
            'details_attributes' => [$this, 'block_details_attributes'],
            'details_productmain_artnumber' => [$this, 'block_details_productmain_artnumber'],
            'details_tags' => [$this, 'block_details_tags'],
            'details_media' => [$this, 'block_details_media'],
            'details_comments' => [$this, 'block_details_comments'],
            'details_invite' => [$this, 'block_details_invite'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "<div class=\"container-xxl mt-5 row-spacer accordeon\">
    <div class=\"row\">
        ";
        // line 3
        $this->displayBlock('details_longdescription', $context, $blocks);
        // line 27
        echo "
        ";
        // line 28
        $this->displayBlock('details_attributes', $context, $blocks);
        // line 46
        echo "        <div class=\"col-12 col-md-3\">
            ";
        // line 47
        $this->displayBlock('details_tags', $context, $blocks);
        // line 49
        echo "
            ";
        // line 50
        $this->displayBlock('details_media', $context, $blocks);
        // line 62
        echo "
            ";
        // line 63
        $this->displayBlock('details_comments', $context, $blocks);
        // line 65
        echo "
            ";
        // line 66
        $this->displayBlock('details_invite', $context, $blocks);
        // line 68
        echo "        </div>
    </div>
</div>";
    }

    // line 3
    public function block_details_longdescription($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 4
        echo "            ";
        // line 5
        echo "                ";
        $context["oLongdesc"] = twig_get_attribute($this->env, $this->source, ($context["oDetailsProduct"] ?? null), "getLongDescription", [], "method", false, false, false, 5);
        // line 6
        echo "                ";
        if (twig_get_attribute($this->env, $this->source, ($context["oLongdesc"] ?? null), "value", [], "any", false, false, false, 6)) {
            // line 7
            echo "                    <div class=\"col-12 col-md-6\">
                        <div id=\"description-collapsible\" class=\"h4\" data-bs-target=\"#description\" data-bs-toggle=\"collapse\" role=\"button\" aria-expanded=\"false\" aria-controls=\"description\">
                            ";
            // line 9
            echo $this->extensions['OxidEsales\Twig\Extensions\TranslateExtension']->translate(["ident" => "DESCRIPTION"]);
            echo "
                        </div>
                        <div id=\"description\" class=\"collapse\" aria-labelledby=\"description-collapsible\">
                            ";
            // line 12
            echo twig_include($this->env, $context, twig_template_from_string($this->env, ($context["oLongdesc"] ?? null)));
            echo "
                            ";
            // line 13
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["oDetailsProduct"] ?? null), "oxarticles__oxexturl", [], "any", false, false, false, 13), "value", [], "any", false, false, false, 13)) {
                // line 14
                echo "                                <a id=\"productExturl\" class=\"js-external\" href=\"";
                echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["oDetailsProduct"] ?? null), "oxarticles__oxexturl", [], "any", false, false, false, 14), "value", [], "any", false, false, false, 14);
                echo "\">
                                ";
                // line 15
                if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["oDetailsProduct"] ?? null), "oxarticles__oxurldesc", [], "any", false, false, false, 15), "value", [], "any", false, false, false, 15)) {
                    // line 16
                    echo "                                    ";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["oDetailsProduct"] ?? null), "oxarticles__oxurldesc", [], "any", false, false, false, 16), "value", [], "any", false, false, false, 16), "html", null, true);
                    echo "
                                ";
                } else {
                    // line 18
                    echo "                                    ";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["oDetailsProduct"] ?? null), "oxarticles__oxexturl", [], "any", false, false, false, 18), "value", [], "any", false, false, false, 18), "html", null, true);
                    echo "
                                ";
                }
                // line 20
                echo "                                </a>
                            ";
            }
            // line 22
            echo "                        </div>
                    </div>
                ";
        }
        // line 25
        echo "            ";
        // line 26
        echo "        ";
    }

    // line 28
    public function block_details_attributes($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 29
        echo "            ";
        if ((twig_get_attribute($this->env, $this->source, ($context["oView"] ?? null), "getAttributes", [], "method", false, false, false, 29) || twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["oDetailsProduct"] ?? null), "oxarticles__oxartnum", [], "any", false, false, false, 29), "value", [], "any", false, false, false, 29))) {
            // line 30
            echo "                <div class=\"col-12 col-md-3\">
                    <div id=\"attributes-collapsible\" class=\"h4\" data-bs-target=\"#attributes\" data-bs-toggle=\"collapse\" role=\"button\" aria-expanded=\"false\" aria-controls=\"attributes\">
                        ";
            // line 32
            echo $this->extensions['OxidEsales\Twig\Extensions\TranslateExtension']->translate(["ident" => "SPECIFICATION"]);
            echo "
                    </div>
                    <div id=\"attributes\" class=\"collapse\" aria-labelledby=\"attributes-collapsible\">
                        ";
            // line 36
            echo "                        ";
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["oDetailsProduct"] ?? null), "oxarticles__oxartnum", [], "any", false, false, false, 36), "value", [], "any", false, false, false, 36)) {
                // line 37
                echo "                            ";
                $this->displayBlock('details_productmain_artnumber', $context, $blocks);
                // line 40
                echo "                        ";
            }
            // line 41
            echo "                        ";
            $this->loadTemplate("@__main__/page/details/inc/attributes.html.twig", "@__main__/page/details/inc/accordeon.html.twig", 41)->display($context);
            // line 42
            echo "                    </div>
                </div>
            ";
        }
        // line 45
        echo "        ";
    }

    // line 37
    public function block_details_productmain_artnumber($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 38
        echo "                                <span class=\"small text-muted\">";
        echo $this->extensions['OxidEsales\Twig\Extensions\TranslateExtension']->translate(["ident" => "ARTNUM", "suffix" => "COLON"]);
        echo " ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["oDetailsProduct"] ?? null), "oxarticles__oxartnum", [], "any", false, false, false, 38), "value", [], "any", false, false, false, 38), "html", null, true);
        echo "</span>
                            ";
    }

    // line 47
    public function block_details_tags($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 48
        echo "            ";
    }

    // line 50
    public function block_details_media($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 51
        echo "                ";
        if ((twig_get_attribute($this->env, $this->source, ($context["oView"] ?? null), "getMediaFiles", [], "method", false, false, false, 51) || twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["oDetailsProduct"] ?? null), "oxarticles__oxfile", [], "any", false, false, false, 51), "value", [], "any", false, false, false, 51))) {
            // line 52
            echo "                    <div id=\"media-collapsible\" class=\"h4\" data-bs-target=\"#media\" data-bs-toggle=\"collapse\" role=\"button\" aria-expanded=\"false\" aria-controls=\"media\">
                        ";
            // line 53
            echo $this->extensions['OxidEsales\Twig\Extensions\TranslateExtension']->translate(["ident" => "MEDIA"]);
            echo "
                    </div>
                    <div id=\"media\" class=\"collapse\" aria-labelledby=\"media-collapsible\">
                        <div class=\"container-xxl\">
                            ";
            // line 57
            $this->loadTemplate("@__main__/page/details/inc/media.html.twig", "@__main__/page/details/inc/accordeon.html.twig", 57)->display($context);
            // line 58
            echo "                        </div>
                    </div>
                ";
        }
        // line 61
        echo "            ";
    }

    // line 63
    public function block_details_comments($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 64
        echo "            ";
    }

    // line 66
    public function block_details_invite($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 67
        echo "            ";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@__main__/page/details/inc/accordeon.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo()
    {
        return array (  242 => 67,  238 => 66,  234 => 64,  230 => 63,  226 => 61,  221 => 58,  219 => 57,  212 => 53,  209 => 52,  206 => 51,  202 => 50,  198 => 48,  194 => 47,  185 => 38,  181 => 37,  177 => 45,  172 => 42,  169 => 41,  166 => 40,  163 => 37,  160 => 36,  154 => 32,  150 => 30,  147 => 29,  143 => 28,  139 => 26,  137 => 25,  132 => 22,  128 => 20,  122 => 18,  116 => 16,  114 => 15,  109 => 14,  107 => 13,  103 => 12,  97 => 9,  93 => 7,  90 => 6,  87 => 5,  85 => 4,  81 => 3,  75 => 68,  73 => 66,  70 => 65,  68 => 63,  65 => 62,  63 => 50,  60 => 49,  58 => 47,  55 => 46,  53 => 28,  50 => 27,  48 => 3,  44 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@__main__/page/details/inc/accordeon.html.twig", "/var/www/html/source/Application/views/apex/tpl/page/details/inc/accordeon.html.twig");
    }
}
