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

/* @__main__/headitem.html.twig */
class __TwigTemplate_276b652a93aee79a639a9d24da0b5bec extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'admin_headitem_inccss' => [$this, 'block_admin_headitem_inccss'],
            'admin_headitem_incjs' => [$this, 'block_admin_headitem_incjs'],
            'admin_headitem_js' => [$this, 'block_admin_headitem_js'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "<!DOCTYPE HTML PUBLIC \"-//W3C//DTD HTML 4.01//EN\" \"http://www.w3.org/TR/html4/strict.dtd\">
<html>
<head>
  <title>";
        // line 4
        echo twig_escape_filter($this->env, ($context["title"] ?? null), "html", null, true);
        echo "</title>
  <meta http-equiv=\"Content-Type\" content=\"text/html; charset=";
        // line 5
        echo twig_escape_filter($this->env, ($context["charset"] ?? null), "html", null, true);
        echo "\">
  ";
        // line 6
        if ($this->extensions['OxidEsales\Twig\Extensions\PhpFunctionsExtension']->twigIsset(($context["meta_refresh_sec"] ?? null), ($context["meta_refresh_url"] ?? null))) {
            // line 7
            echo "  <meta http-equiv=Refresh content=\"";
            echo twig_escape_filter($this->env, ($context["meta_refresh_sec"] ?? null), "html", null, true);
            echo ";URL=";
            echo twig_replace_filter(($context["meta_refresh_url"] ?? null), ["&amp;" => "&"]);
            echo "\">
  ";
        }
        // line 9
        echo "  <link rel=\"shortcut icon\" href=\"";
        echo twig_get_attribute($this->env, $this->source, ($context["oViewConf"] ?? null), "getBaseDir", [], "method", false, false, false, 9);
        echo "favicon.ico\">

  ";
        // line 11
        $this->displayBlock('admin_headitem_inccss', $context, $blocks);
        // line 16
        echo "
  ";
        // line 17
        $this->displayBlock('admin_headitem_incjs', $context, $blocks);
        // line 22
        echo "
  ";
        // line 23
        $this->displayBlock('admin_headitem_js', $context, $blocks);
        // line 96
        echo "
</head>
<body>
";
        // line 99
        $this->loadTemplate("@__main__/tooltips.html.twig", "@__main__/headitem.html.twig", 99)->display($context);
        // line 100
        echo "<div id=\"oxajax_data\"></div>

<div class=\"";
        // line 102
        echo twig_escape_filter($this->env, ((array_key_exists("box", $context)) ? (_twig_default_filter(($context["box"] ?? null), "box")) : ("box")), "html", null, true);
        echo "\" style=\"";
        if (( !($context["box"] ?? null) &&  !($context["bottom_buttons"] ?? null))) {
            echo "height: 90%;";
        }
        echo "\">
";
        // line 103
        $this->loadTemplate("@__main__/inc_error.html.twig", "@__main__/headitem.html.twig", 103)->display(twig_array_merge($context, ["Errorlist" => twig_get_attribute($this->env, $this->source, ($context["Errors"] ?? null), "default", [], "any", false, false, false, 103)]));
        // line 104
        echo "
<!-- Input help popup -->
<div id=\"helpTextContainer\" class=\"yui-skin-sam\">
    <div id=\"helpPanel\"></div>
</div>";
    }

    // line 11
    public function block_admin_headitem_inccss($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 12
        echo "        <link rel=\"stylesheet\" href=\"";
        echo twig_get_attribute($this->env, $this->source, ($context["oViewConf"] ?? null), "getResourceUrl", [], "method", false, false, false, 12);
        echo "main.css\">
        <link rel=\"stylesheet\" href=\"";
        // line 13
        echo twig_get_attribute($this->env, $this->source, ($context["oViewConf"] ?? null), "getResourceUrl", [], "method", false, false, false, 13);
        echo "colors_";
        echo twig_escape_filter($this->env, twig_lower_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["oViewConf"] ?? null), "getEdition", [], "method", false, false, false, 13)), "html", null, true);
        echo ".css\">
        <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 14
        echo twig_get_attribute($this->env, $this->source, ($context["oViewConf"] ?? null), "getResourceUrl", [], "method", false, false, false, 14);
        echo "yui/build/assets/skins/sam/container.css\">
  ";
    }

    // line 17
    public function block_admin_headitem_incjs($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 18
        echo "      <script type=\"text/javascript\" src=\"";
        echo twig_get_attribute($this->env, $this->source, ($context["oViewConf"] ?? null), "getResourceUrl", [], "method", false, false, false, 18);
        echo "yui/build/utilities/utilities.js\"></script>
      <script type=\"text/javascript\" src=\"";
        // line 19
        echo twig_get_attribute($this->env, $this->source, ($context["oViewConf"] ?? null), "getResourceUrl", [], "method", false, false, false, 19);
        echo "yui/build/container/container-min.js\"></script>
      <script type=\"text/javascript\" src=\"";
        // line 20
        echo twig_get_attribute($this->env, $this->source, ($context["oViewConf"] ?? null), "getResourceUrl", [], "method", false, false, false, 20);
        echo "yui/oxid-help.js\"></script>
  ";
    }

    // line 23
    public function block_admin_headitem_js($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 24
        echo "      <script type=\"text/javascript\">
      <!--
        // standard messages
        var sUnassignMessage = \"";
        // line 27
        echo $this->extensions['OxidEsales\Twig\Extensions\TranslateExtension']->translate(["ident" => "GENERAL_YOUWANTTOUNASSIGN"]);
        echo "\";
        var sDeleteMessage   = \"";
        // line 28
        echo $this->extensions['OxidEsales\Twig\Extensions\TranslateExtension']->translate(["ident" => "GENERAL_YOUWANTTODELETE"]);
        echo "\";

        // class info
        var sDefClass = '";
        // line 31
        echo twig_escape_filter($this->env, ($context["default_edit"] ?? null), "html", null, true);
        echo "';
        var sActClass = '";
        // line 32
        echo twig_escape_filter($this->env, ($context["actlocation"] ?? null), "html", null, true);
        echo "';

        ";
        // line 34
        if ((($context["updatelist"] ?? null) == 1)) {
            // line 35
            echo "        window.onload = function ()
        {
            top.oxid.admin.updateList('";
            // line 37
            echo twig_escape_filter($this->env, ($context["oxid"] ?? null), "html", null, true);
            echo "');
        }
        ";
        }
        // line 40
        echo "

        var ajaxpopup = null;
        function showDialog( sParams )
        {
            ajaxpopup = window.open('";
        // line 45
        echo twig_replace_filter(twig_get_attribute($this->env, $this->source, ($context["oViewConf"] ?? null), "getSelfLink", [], "method", false, false, false, 45), ["&amp;" => "&"]);
        echo "'+sParams, 'ajaxpopup', 'width=800,height=680,scrollbars=yes,resizable=yes');
        }

        function focusPopup()
        {
            if ( ajaxpopup )ajaxpopup.focus();
        }

        window.onclick = focusPopup;

        function cleanupLongDesc( sValue )
        {
            if ( sValue == '<br>' || sValue == '<br />' ) {
                return '';
            }
            return sValue;
        }

        function copyLongDesc( sIdent )
        {
            var textVal = null;
            try {
                if ( WPro.editors[sIdent] != null ) {
                   WPro.editors[sIdent].prepareSubmission();
                   textVal = cleanupLongDesc( WPro.editors[sIdent].getValue() );
                }
            } catch(err) {
                    var varEl = document.getElementById(sIdent);
                    if (varEl != null) {
                        textVal = cleanupLongDesc( varEl.value );
                    }
            }

            if (textVal == null) {
                var varName = 'editor_'+sIdent;
                var varEl = document.getElementById(varName);
                if (varEl != null) {
                    textVal = cleanupLongDesc( varEl.value );
                }
            }

            if (textVal != null) {
                var oTarget = document.getElementsByName( 'editval['+ sIdent + ']' );
                if ( oTarget != null && ( oField = oTarget.item( 0 ) ) != null ) {
                    oField.value = textVal;
                }
            }
        }
      -->
      </script>
  ";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@__main__/headitem.html.twig";
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
        return array (  197 => 45,  190 => 40,  184 => 37,  180 => 35,  178 => 34,  173 => 32,  169 => 31,  163 => 28,  159 => 27,  154 => 24,  150 => 23,  144 => 20,  140 => 19,  135 => 18,  131 => 17,  125 => 14,  119 => 13,  114 => 12,  110 => 11,  102 => 104,  100 => 103,  92 => 102,  88 => 100,  86 => 99,  81 => 96,  79 => 23,  76 => 22,  74 => 17,  71 => 16,  69 => 11,  63 => 9,  55 => 7,  53 => 6,  49 => 5,  45 => 4,  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@__main__/headitem.html.twig", "/var/www/html/source/Application/views/admin_twig/tpl/headitem.html.twig");
    }
}
