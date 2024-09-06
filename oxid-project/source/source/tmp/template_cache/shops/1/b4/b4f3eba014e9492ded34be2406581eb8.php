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

/* @__main__/home.html.twig */
class __TwigTemplate_73e57c1a53d6d862c5b4ae588b17572b extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'admin_home_head' => [$this, 'block_admin_home_head'],
            'admin_home_navigation_items' => [$this, 'block_admin_home_navigation_items'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "<!DOCTYPE HTML PUBLIC \"-//W3C//DTD HTML 4.01//EN\" \"http://www.w3.org/TR/html4/strict.dtd\">
<html>
<head>
    ";
        // line 4
        $this->displayBlock('admin_home_head', $context, $blocks);
        // line 10
        echo "</head>
<body>

<script type=\"text/javascript\">
    parent.sShopTitle = \"";
        // line 14
        echo addslashes(($context["actshop"] ?? null));
        echo "\";
    parent.setTitle();
</script>

<h1>";
        // line 18
        echo $this->extensions['OxidEsales\Twig\Extensions\TranslateExtension']->translate(["ident" => "NAVIGATION_HOME"]);
        echo "</h1>
<p class=\"desc\">
    <b>";
        // line 20
        echo $this->extensions['OxidEsales\Twig\Extensions\TranslateExtension']->translate(["ident" => "HOME_DESC"]);
        echo "</b>
</p>
<hr>

";
        // line 24
        if (($context["aMessage"] ?? null)) {
            // line 25
            echo "    <div class=\"messagebox\">
        ";
            // line 26
            echo $this->extensions['OxidEsales\Twig\Extensions\TranslateExtension']->translate(["ident" => "MAIN_INFO"]);
            echo ":<br>
        ";
            // line 27
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["aMessage"] ?? null));
            foreach ($context['_seq'] as $context["class"] => $context["sMessage"]) {
                // line 28
                echo "            <p class=\"";
                echo twig_escape_filter($this->env, $context["class"], "html", null, true);
                echo "\">";
                echo $context["sMessage"];
                echo "</p>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['class'], $context['sMessage'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 30
            echo "    </div>
    <hr>
";
        }
        // line 33
        echo "
";
        // line 34
        $this->displayBlock('admin_home_navigation_items', $context, $blocks);
        // line 86
        echo "</table>
<script type=\"text/javascript\">
    <!--
    function _homeExpAct(mnid,sbid){
        top.document.getElementById('navigation').contentWindow.adminnav._navExtExpAct(mnid,sbid);
    }
    //-->
    </script>
</body>
</html>
";
    }

    // line 4
    public function block_admin_home_head($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 5
        echo "        <title>";
        echo $this->extensions['OxidEsales\Twig\Extensions\TranslateExtension']->translate(["ident" => "MAIN_TITLE"]);
        echo "</title>
        <link rel=\"stylesheet\" href=\"";
        // line 6
        echo twig_get_attribute($this->env, $this->source, ($context["oViewConf"] ?? null), "getResourceUrl", [], "method", false, false, false, 6);
        echo "main.css\">
        <link rel=\"stylesheet\" href=\"";
        // line 7
        echo twig_get_attribute($this->env, $this->source, ($context["oViewConf"] ?? null), "getResourceUrl", [], "method", false, false, false, 7);
        echo "colors_";
        echo twig_escape_filter($this->env, twig_lower_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["oViewConf"] ?? null), "getEdition", [], "method", false, false, false, 7)), "html", null, true);
        echo ".css\">
        <meta http-equiv=\"Content-Type\" content=\"text/html; charset=";
        // line 8
        echo twig_escape_filter($this->env, ($context["charset"] ?? null), "html", null, true);
        echo "\">
    ";
    }

    // line 34
    public function block_admin_home_navigation_items($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 35
        echo "
    <table width=\"100%\" height=\"84%\">
    ";
        // line 37
        $context["shMen"] = 1;
        // line 38
        echo "
    ";
        // line 39
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["menustructure"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["menuholder"]) {
            // line 40
            echo "    ";
            if (((($context["shMen"] ?? null) && (twig_get_attribute($this->env, $this->source, $context["menuholder"], "nodeType", [], "any", false, false, false, 40) == twig_constant("XML_ELEMENT_NODE"))) && twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["menuholder"], "childNodes", [], "any", false, false, false, 40), "length", [], "any", false, false, false, 40))) {
                // line 41
                echo "
        ";
                // line 42
                $context["nrCol"] = 1;
                // line 43
                echo "        ";
                $context["ttCol"] = 1;
                // line 44
                echo "        ";
                $context["mxCol"] = 3;
                // line 45
                echo "        ";
                $context["inCol"] = twig_round((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["menuholder"], "childNodes", [], "any", false, false, false, 45), "length", [], "any", false, false, false, 45) / ($context["mxCol"] ?? null)));
                // line 46
                echo "        ";
                $context["shMen"] = 0;
                // line 47
                echo "        ";
                $context["mn"] = 1;
                // line 48
                echo "            <tr>
            <td valign=\"top\" width=\"30%\">
            ";
                // line 50
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["menuholder"], "childNodes", [], "any", false, false, false, 50));
                foreach ($context['_seq'] as $context["_key"] => $context["menuitem"]) {
                    // line 51
                    echo "            ";
                    if (((twig_get_attribute($this->env, $this->source, $context["menuitem"], "nodeType", [], "any", false, false, false, 51) == twig_constant("XML_ELEMENT_NODE")) && twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["menuitem"], "childNodes", [], "any", false, false, false, 51), "length", [], "any", false, false, false, 51))) {
                        // line 52
                        echo "                ";
                        $context["sb"] = 1;
                        // line 53
                        echo "                <dl ";
                        if ((($context["nrCol"] ?? null) == 1)) {
                            echo "class=\"first\"";
                        }
                        echo ">
                    <dt>";
                        // line 54
                        echo $this->extensions['OxidEsales\Twig\Extensions\TranslateExtension']->translate(["ident" => ((twig_get_attribute($this->env, $this->source, $context["menuitem"], "getAttribute", ["name"], "method", true, true, false, 54)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, $context["menuitem"], "getAttribute", ["name"], "method", false, false, false, 54), twig_get_attribute($this->env, $this->source, $context["menuitem"], "getAttribute", ["id"], "method", false, false, false, 54))) : (twig_get_attribute($this->env, $this->source, $context["menuitem"], "getAttribute", ["id"], "method", false, false, false, 54)))]);
                        echo "</dt>
                    <dd>
                        <ul>
                        ";
                        // line 57
                        ob_start(function () { return ''; });
                        // line 58
                        echo "                        ";
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["menuitem"], "childNodes", [], "any", false, false, false, 58));
                        foreach ($context['_seq'] as $context["_key"] => $context["submenuitem"]) {
                            // line 59
                            echo "                        ";
                            if ((twig_get_attribute($this->env, $this->source, $context["submenuitem"], "nodeType", [], "any", false, false, false, 59) == twig_constant("XML_ELEMENT_NODE"))) {
                                // line 60
                                echo "                            <li>
                                <a href=\"";
                                // line 61
                                echo twig_get_attribute($this->env, $this->source, $context["submenuitem"], "getAttribute", ["link"], "method", false, false, false, 61);
                                echo "\" onclick=\"_homeExpAct('nav-1-";
                                echo twig_escape_filter($this->env, ($context["mn"] ?? null), "html", null, true);
                                echo "','nav-1-";
                                echo twig_escape_filter($this->env, ($context["mn"] ?? null), "html", null, true);
                                echo "-";
                                echo twig_escape_filter($this->env, ($context["sb"] ?? null), "html", null, true);
                                echo "');\" target=\"basefrm\"><b>";
                                echo $this->extensions['OxidEsales\Twig\Extensions\TranslateExtension']->translate(["ident" => ((twig_get_attribute($this->env, $this->source, $context["submenuitem"], "getAttribute", ["name"], "method", true, true, false, 61)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, $context["submenuitem"], "getAttribute", ["name"], "method", false, false, false, 61), twig_get_attribute($this->env, $this->source, $context["submenuitem"], "getAttribute", ["id"], "method", false, false, false, 61))) : (twig_get_attribute($this->env, $this->source, $context["submenuitem"], "getAttribute", ["id"], "method", false, false, false, 61)))]);
                                echo "</b></a>
                            </li>
                            ";
                                // line 63
                                $context["sb"] = (($context["sb"] ?? null) + 1);
                                // line 64
                                echo "                        ";
                            }
                            // line 65
                            echo "                        ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['submenuitem'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 66
                        echo "                        ";
                        $___internal_parse_0_ = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
                        // line 57
                        echo twig_spaceless($___internal_parse_0_);
                        // line 67
                        echo "                        </ul>
                    </dd>
                </dl>
                ";
                        // line 70
                        $context["mn"] = (($context["mn"] ?? null) + 1);
                        // line 71
                        echo "                ";
                        if (((($context["nrCol"] ?? null) == ($context["inCol"] ?? null)) && (($context["ttCol"] ?? null) < ($context["mxCol"] ?? null)))) {
                            // line 72
                            echo "                    </td><td width=\"5%\"></td><td valign=\"top\" width=\"30%\">
                    ";
                            // line 73
                            $context["nrCol"] = 1;
                            // line 74
                            echo "                    ";
                            $context["ttCol"] = (($context["ttCol"] ?? null) + 1);
                            // line 75
                            echo "                ";
                        } else {
                            // line 76
                            echo "                    ";
                            $context["nrCol"] = (($context["nrCol"] ?? null) + 1);
                            // line 77
                            echo "                ";
                        }
                        // line 78
                        echo "
            ";
                    }
                    // line 80
                    echo "            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['menuitem'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 81
                echo "            </td>
            </tr>
    ";
            }
            // line 84
            echo "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['menuholder'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@__main__/home.html.twig";
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
        return array (  295 => 84,  290 => 81,  284 => 80,  280 => 78,  277 => 77,  274 => 76,  271 => 75,  268 => 74,  266 => 73,  263 => 72,  260 => 71,  258 => 70,  253 => 67,  251 => 57,  248 => 66,  242 => 65,  239 => 64,  237 => 63,  224 => 61,  221 => 60,  218 => 59,  213 => 58,  211 => 57,  205 => 54,  198 => 53,  195 => 52,  192 => 51,  188 => 50,  184 => 48,  181 => 47,  178 => 46,  175 => 45,  172 => 44,  169 => 43,  167 => 42,  164 => 41,  161 => 40,  157 => 39,  154 => 38,  152 => 37,  148 => 35,  144 => 34,  138 => 8,  132 => 7,  128 => 6,  123 => 5,  119 => 4,  105 => 86,  103 => 34,  100 => 33,  95 => 30,  84 => 28,  80 => 27,  76 => 26,  73 => 25,  71 => 24,  64 => 20,  59 => 18,  52 => 14,  46 => 10,  44 => 4,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@__main__/home.html.twig", "/var/www/html/source/Application/views/admin_twig/tpl/home.html.twig");
    }
}
