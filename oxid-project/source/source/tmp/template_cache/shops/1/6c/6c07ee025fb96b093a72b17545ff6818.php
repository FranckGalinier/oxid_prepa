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

/* @__main__/navigation.html.twig */
class __TwigTemplate_0baed8354d673d89e6e10b44604e45ba extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'admin_navigation_menustructure' => [$this, 'block_admin_navigation_menustructure'],
            'admin_navigation_history' => [$this, 'block_admin_navigation_history'],
            'admin_navigation_favorites' => [$this, 'block_admin_navigation_favorites'],
            'admin_navigation_scripts' => [$this, 'block_admin_navigation_scripts'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        $context["submenuIndex"] = 0;
        // line 2
        $context["mainMenu"] = "nav-1";
        // line 3
        $context["historyMenu"] = "nav-2";
        // line 4
        $context["favoritesMenu"] = "nav-3";
        // line 5
        $context["historyMenuHeader"] = (($context["historyMenu"] ?? null) . "-1");
        // line 6
        $context["favoritesMenuHeader"] = (($context["favoritesMenu"] ?? null) . "-1");
        // line 7
        echo "
<!DOCTYPE HTML PUBLIC \"-//W3C//DTD HTML 4.01//EN\" \"http://www.w3.org/TR/html4/strict.dtd\">
<html id=\"nav\">
<head>
    <title>";
        // line 11
        echo $this->extensions['OxidEsales\Twig\Extensions\TranslateExtension']->translate(["ident" => "NAVIGATION_TITLE"]);
        echo "</title>
    <link rel=\"stylesheet\" href=\"";
        // line 12
        echo twig_get_attribute($this->env, $this->source, ($context["oViewConf"] ?? null), "getResourceUrl", [], "method", false, false, false, 12);
        echo "nav.css\">
    <link rel=\"stylesheet\" href=\"";
        // line 13
        echo twig_get_attribute($this->env, $this->source, ($context["oViewConf"] ?? null), "getResourceUrl", [], "method", false, false, false, 13);
        echo "colors_";
        echo twig_escape_filter($this->env, twig_lower_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["oViewConf"] ?? null), "getEdition", [], "method", false, false, false, 13)), "html", null, true);
        echo ".css\">
    <meta http-equiv=\"Content-Type\" content=\"text/html; charset=";
        // line 14
        echo twig_escape_filter($this->env, ($context["charset"] ?? null), "html", null, true);
        echo "\">
    <script type=\"text/javascript\">
        ";
        // line 16
        if (($context["loadbasefrm"] ?? null)) {
            // line 17
            echo "        //reloading main frame
        window.onload = function () {
            if ('";
            // line 19
            echo twig_escape_filter($this->env, ($context["listview"] ?? null), "html", null, true);
            echo "' != '') {
                top.basefrm.list.location = \"";
            // line 20
            echo twig_replace_filter(twig_get_attribute($this->env, $this->source, ($context["oViewConf"] ?? null), "getSelfLink", [], "method", false, false, false, 20), ["&amp;" => "&"]);
            echo "&cl=";
            echo twig_escape_filter($this->env, ($context["listview"] ?? null), "html", null, true);
            echo "&oxid=";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["oViewConf"] ?? null), "getActiveShopId", [], "method", false, false, false, 20), "html", null, true);
            echo "&actedit=";
            echo twig_escape_filter($this->env, ($context["actedit"] ?? null), "html", null, true);
            echo "\";
                top.basefrm.edit.location = \"";
            // line 21
            echo twig_replace_filter(twig_get_attribute($this->env, $this->source, ($context["oViewConf"] ?? null), "getSelfLink", [], "method", false, false, false, 21), ["&amp;" => "&"]);
            echo "&cl=";
            echo twig_escape_filter($this->env, ($context["editview"] ?? null), "html", null, true);
            echo "&oxid=";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["oViewConf"] ?? null), "getActiveShopId", [], "method", false, false, false, 21), "html", null, true);
            echo "\";
            } else if (top.basefrm) {
                top.basefrm.location = \"";
            // line 23
            echo twig_replace_filter(twig_get_attribute($this->env, $this->source, ($context["oViewConf"] ?? null), "getSelfLink", [], "method", false, false, false, 23), ["&amp;" => "&"]);
            echo "&cl=navigation&item=home.html.twig\";
            }
        }
        ";
        }
        // line 27
        echo "    </script>
</head>
<body>
<div id=\"shopLogo\">
    <img src=\"";
        // line 31
        echo twig_get_attribute($this->env, $this->source, ($context["oViewConf"] ?? null), "getImageUrl", ["logo.svg"], "method", false, false, false, 31);
        echo "\"/>
</div>
<table>
    <tr>
        <td class=\"main\">
            ";
        // line 36
        $this->loadTemplate("@__main__/include/navigation_shopselect.html.twig", "@__main__/navigation.html.twig", 36)->display($context);
        // line 37
        echo "            ";
        $this->displayBlock('admin_navigation_menustructure', $context, $blocks);
        // line 125
        echo "        </td>
    </tr>

    <tr>
        <td class=\"extra\">

            <ul>
                ";
        // line 132
        $this->displayBlock('admin_navigation_history', $context, $blocks);
        // line 164
        echo "            </ul>

            <ul>
                ";
        // line 167
        $this->displayBlock('admin_navigation_favorites', $context, $blocks);
        // line 203
        echo "            </ul>
        </td>
    </tr>
</table>

<script type=\"text/javascript\">
    ";
        // line 209
        $this->displayBlock('admin_navigation_scripts', $context, $blocks);
        // line 279
        echo "</script>
</body>
</html>
";
    }

    // line 37
    public function block_admin_navigation_menustructure($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 38
        echo "                ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["menustructure"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["menuholder"]) {
            // line 39
            echo "                    ";
            if (((twig_get_attribute($this->env, $this->source, $context["menuholder"], "nodeType", [], "any", false, false, false, 39) == twig_constant("XML_ELEMENT_NODE")) && twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["menuholder"], "childNodes", [], "any", false, false, false, 39), "length", [], "any", false, false, false, 39))) {
                // line 40
                echo "                        ";
                $context["menuIndex"] = 0;
                // line 41
                echo "                        <h2>
                            ";
                // line 42
                if (twig_get_attribute($this->env, $this->source, $context["menuholder"], "getAttribute", ["url"], "method", false, false, false, 42)) {
                    // line 43
                    echo "                            <a href=\"";
                    echo twig_get_attribute($this->env, $this->source, ($context["oViewConf"] ?? null), "getSelfLink", [], "method", false, false, false, 43);
                    echo "&cl=navigation&amp;fnc=exturl&amp;url=";
                    echo twig_escape_filter($this->env, twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["menuholder"], "getAttribute", ["url"], "method", false, false, false, 43), "url"), "html", null, true);
                    echo "\"
                                    target=\"basefrm\">
                            ";
                }
                // line 46
                echo "                                ";
                echo $this->extensions['OxidEsales\Twig\Extensions\TranslateExtension']->translate(["ident" => ((twig_get_attribute($this->env, $this->source, $context["menuholder"], "getAttribute", ["name"], "method", true, true, false, 46)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, $context["menuholder"], "getAttribute", ["name"], "method", false, false, false, 46), twig_get_attribute($this->env, $this->source, $context["menuholder"], "getAttribute", ["id"], "method", false, false, false, 46))) : (twig_get_attribute($this->env, $this->source, $context["menuholder"], "getAttribute", ["id"], "method", false, false, false, 46))), "noerror" => true]);
                echo "
                            ";
                // line 47
                if (twig_get_attribute($this->env, $this->source, $context["menuholder"], "getAttribute", ["url"], "method", false, false, false, 47)) {
                    // line 48
                    echo "                            </a>
                            ";
                }
                // line 50
                echo "                        </h2>
                        <ul>
                            ";
                // line 52
                ob_start(function () { return ''; });
                // line 53
                echo "                                ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["menuholder"], "childNodes", [], "any", false, false, false, 53));
                foreach ($context['_seq'] as $context["_key"] => $context["menuitem"]) {
                    // line 54
                    echo "                                    ";
                    $context["actClass"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["menuitem"], "childNodes", [], "any", false, false, false, 54), "length", [], "any", false, false, false, 54);
                    // line 55
                    echo "                                    ";
                    if ((twig_get_attribute($this->env, $this->source, $context["menuitem"], "nodeType", [], "any", false, false, false, 55) == twig_constant("XML_ELEMENT_NODE"))) {
                        // line 56
                        echo "                                        ";
                        $context["menuIndex"] = (($context["menuIndex"] ?? null) + 1);
                        // line 57
                        echo "                                        ";
                        $context["submenuIndex"] = 0;
                        // line 58
                        echo "                                        <li class=\"";
                        if (twig_get_attribute($this->env, $this->source, $context["menuitem"], "getAttribute", ["active"], "method", false, false, false, 58)) {
                            echo "exp";
                        }
                        echo "\"
                                            id=\"";
                        // line 59
                        echo twig_escape_filter($this->env, ($context["mainMenu"] ?? null), "html", null, true);
                        echo "-";
                        echo twig_escape_filter($this->env, ($context["menuIndex"] ?? null), "html", null, true);
                        echo "\">
                                            ";
                        // line 60
                        if (twig_get_attribute($this->env, $this->source, $context["menuitem"], "getAttribute", ["url"], "method", false, false, false, 60)) {
                            // line 61
                            echo "                                                <a href=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["menuitem"], "getAttribute", ["url"], "method", false, false, false, 61);
                            echo "\"
                                                   onclick=\"_navAct(this);\"
                                                   class=\"rc\"
                                                   target=\"";
                            // line 64
                            if (twig_get_attribute($this->env, $this->source, $context["menuitem"], "getAttribute", ["target"], "method", false, false, false, 64)) {
                                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["menuitem"], "getAttribute", ["target"], "method", false, false, false, 64), "html", null, true);
                            } else {
                                echo "basefrm";
                            }
                            echo "\">
                                                    <b>
                                                        ";
                            // line 66
                            echo $this->extensions['OxidEsales\Twig\Extensions\TranslateExtension']->translate(["ident" => ((twig_get_attribute($this->env, $this->source, $context["menuitem"], "getAttribute", ["name"], "method", true, true, false, 66)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, $context["menuitem"], "getAttribute", ["name"], "method", false, false, false, 66), twig_get_attribute($this->env, $this->source, $context["menuitem"], "getAttribute", ["id"], "method", false, false, false, 66))) : (twig_get_attribute($this->env, $this->source, $context["menuitem"], "getAttribute", ["id"], "method", false, false, false, 66))), "noerror" => true]);
                            echo "
                                                    </b>
                                                </a>
                                            ";
                        } elseif ((twig_get_attribute($this->env, $this->source,                         // line 69
$context["menuitem"], "getAttribute", ["expand"], "method", false, false, false, 69) == "none")) {
                            // line 70
                            echo "                                                <a href=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["menuitem"], "getAttribute", ["link"], "method", false, false, false, 70);
                            echo "\"
                                                   onclick=\"_navAct(this);\"
                                                   target=\"basefrm\"
                                                   class=\"rc\">
                                                    <b>
                                                        ";
                            // line 75
                            echo $this->extensions['OxidEsales\Twig\Extensions\TranslateExtension']->translate(["ident" => ((twig_get_attribute($this->env, $this->source, $context["menuitem"], "getAttribute", ["name"], "method", true, true, false, 75)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, $context["menuitem"], "getAttribute", ["name"], "method", false, false, false, 75), twig_get_attribute($this->env, $this->source, $context["menuitem"], "getAttribute", ["id"], "method", false, false, false, 75))) : (twig_get_attribute($this->env, $this->source, $context["menuitem"], "getAttribute", ["id"], "method", false, false, false, 75))), "noerror" => true]);
                            echo "
                                                    </b>
                                                </a>
                                            ";
                        } else {
                            // line 79
                            echo "                                                <a href=\"#\"
                                                   onclick=\"_navExp(this);return false;\"
                                                   class=\"rc\">
                                                    <b>
                                                        ";
                            // line 83
                            echo $this->extensions['OxidEsales\Twig\Extensions\TranslateExtension']->translate(["ident" => ((twig_get_attribute($this->env, $this->source, $context["menuitem"], "getAttribute", ["name"], "method", true, true, false, 83)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, $context["menuitem"], "getAttribute", ["name"], "method", false, false, false, 83), twig_get_attribute($this->env, $this->source, $context["menuitem"], "getAttribute", ["id"], "method", false, false, false, 83))) : (twig_get_attribute($this->env, $this->source, $context["menuitem"], "getAttribute", ["id"], "method", false, false, false, 83))), "noerror" => true]);
                            echo "
                                                    </b>
                                                </a>
                                            ";
                        }
                        // line 87
                        echo "                                            ";
                        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["menuitem"], "childNodes", [], "any", false, false, false, 87), "length", [], "any", false, false, false, 87)) {
                            // line 88
                            echo "                                                <ul>
                                                    ";
                            // line 89
                            $context['_parent'] = $context;
                            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["menuitem"], "childNodes", [], "any", false, false, false, 89));
                            foreach ($context['_seq'] as $context["_key"] => $context["submenuitem"]) {
                                // line 90
                                echo "                                                        ";
                                if ((twig_get_attribute($this->env, $this->source, $context["submenuitem"], "nodeType", [], "any", false, false, false, 90) == twig_constant("XML_ELEMENT_NODE"))) {
                                    // line 91
                                    echo "                                                            ";
                                    $context["submenuIndex"] = (($context["submenuIndex"] ?? null) + 1);
                                    // line 92
                                    echo "                                                            ";
                                    if (twig_get_attribute($this->env, $this->source, $context["submenuitem"], "getAttribute", ["linkicon"], "method", false, false, false, 92)) {
                                        echo " ";
                                        $context["linkicon"] = twig_get_attribute($this->env, $this->source, $context["submenuitem"], "getAttribute", ["linkicon"], "method", false, false, false, 92);
                                    }
                                    // line 93
                                    echo "                                                            <li class=\"";
                                    if (twig_get_attribute($this->env, $this->source, $context["submenuitem"], "getAttribute", ["active"], "method", false, false, false, 93)) {
                                        echo "act";
                                    }
                                    echo "\"
                                                                id=\"";
                                    // line 94
                                    echo twig_escape_filter($this->env, ($context["mainMenu"] ?? null), "html", null, true);
                                    echo "-";
                                    echo twig_escape_filter($this->env, ($context["menuIndex"] ?? null), "html", null, true);
                                    echo "-";
                                    echo twig_escape_filter($this->env, ($context["submenuIndex"] ?? null), "html", null, true);
                                    echo "\"
                                                                name=\"nav_";
                                    // line 95
                                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["submenuitem"], "getAttribute", ["cl"], "method", false, false, false, 95), "html", null, true);
                                    echo "\"
                                                                rel=\"";
                                    // line 96
                                    echo twig_escape_filter($this->env, ($context["mainMenu"] ?? null), "html", null, true);
                                    echo "-";
                                    echo twig_escape_filter($this->env, ($context["menuIndex"] ?? null), "html", null, true);
                                    echo "\">
                                                                <a href=\"";
                                    // line 97
                                    if (twig_get_attribute($this->env, $this->source, $context["submenuitem"], "getAttribute", ["url"], "method", false, false, false, 97)) {
                                        echo twig_get_attribute($this->env, $this->source, $context["submenuitem"], "getAttribute", ["url"], "method", false, false, false, 97);
                                    } else {
                                        echo twig_get_attribute($this->env, $this->source, $context["submenuitem"], "getAttribute", ["link"], "method", false, false, false, 97);
                                    }
                                    echo "\"
                                                                   onclick=\"_navAct(this);\"
                                                                   target=\"basefrm\"
                                                                   class=\"rc\">
                                                                    <b>
                                                                        ";
                                    // line 102
                                    if (($context["linkicon"] ?? null)) {
                                        // line 103
                                        echo "                                                                        <span class=\"";
                                        echo twig_escape_filter($this->env, ($context["linkicon"] ?? null), "html", null, true);
                                        echo "\">
                                                                        ";
                                    }
                                    // line 105
                                    echo "                                                                            ";
                                    echo $this->extensions['OxidEsales\Twig\Extensions\TranslateExtension']->translate(["ident" => ((twig_get_attribute($this->env, $this->source, $context["submenuitem"], "getAttribute", ["name"], "method", true, true, false, 105)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, $context["submenuitem"], "getAttribute", ["name"], "method", false, false, false, 105), twig_get_attribute($this->env, $this->source, $context["submenuitem"], "getAttribute", ["id"], "method", false, false, false, 105))) : (twig_get_attribute($this->env, $this->source, $context["submenuitem"], "getAttribute", ["id"], "method", false, false, false, 105))), "noerror" => true]);
                                    echo "
                                                                        ";
                                    // line 106
                                    if (($context["linkicon"] ?? null)) {
                                        // line 107
                                        echo "                                                                        </span>
                                                                        ";
                                    }
                                    // line 109
                                    echo "                                                                    </b>
                                                                </a>
                                                            </li>
                                                            ";
                                    // line 112
                                    $context["linkicon"] = "";
                                    // line 113
                                    echo "                                                        ";
                                }
                                // line 114
                                echo "                                                    ";
                            }
                            $_parent = $context['_parent'];
                            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['submenuitem'], $context['_parent'], $context['loop']);
                            $context = array_intersect_key($context, $_parent) + $_parent;
                            // line 115
                            echo "                                                </ul>
                                            ";
                        }
                        // line 117
                        echo "                                        </li>
                                    ";
                    }
                    // line 119
                    echo "                                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['menuitem'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 120
                echo "                            ";
                $___internal_parse_0_ = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
                // line 52
                echo twig_spaceless($___internal_parse_0_);
                // line 121
                echo "                        </ul>
                    ";
            }
            // line 123
            echo "                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['menuholder'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 124
        echo "            ";
    }

    // line 132
    public function block_admin_navigation_history($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 133
        echo "                    ";
        ob_start(function () { return ''; });
        // line 134
        echo "                        <li id=\"";
        echo twig_escape_filter($this->env, ($context["historyMenuHeader"] ?? null), "html", null, true);
        echo "\"
                            class=\"";
        // line 135
        if (($context["blOpenHistory"] ?? null)) {
            echo "exp";
        }
        echo "\">
                            <a class=\"rc\"
                               name=\"_hist\"
                               href=\"";
        // line 138
        echo twig_get_attribute($this->env, $this->source, ($context["oViewConf"] ?? null), "getSelfLink", [], "method", false, false, false, 138);
        echo "&cl=navigation&item=navigation.html.twig&openHistory=1&";
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "U"), "html", null, true);
        echo "#_hist\">
                                <b>
                                    ";
        // line 140
        echo $this->extensions['OxidEsales\Twig\Extensions\TranslateExtension']->translate(["ident" => "NAVIGATION_HISTORY", "noerror" => true]);
        echo "
                                </b>
                            </a>
                            <ul>
                                ";
        // line 144
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["menuhistory"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["submenuitem"]) {
            // line 145
            echo "                                    ";
            if ((twig_get_attribute($this->env, $this->source, $context["submenuitem"], "nodeType", [], "any", false, false, false, 145) == twig_constant("XML_ELEMENT_NODE"))) {
                // line 146
                echo "                                        ";
                $context["submenuIndex"] = (($context["submenuIndex"] ?? null) + 1);
                // line 147
                echo "                                        <li id=\"";
                echo twig_escape_filter($this->env, ($context["historyMenuHeader"] ?? null), "html", null, true);
                echo "-";
                echo twig_escape_filter($this->env, ($context["submenuIndex"] ?? null), "html", null, true);
                echo "\"
                                            class=\"\">
                                            <a href=\"";
                // line 149
                echo twig_get_attribute($this->env, $this->source, $context["submenuitem"], "getAttribute", ["link"], "method", false, false, false, 149);
                echo "\"
                                               onclick=\"_navAct(this);\"
                                               target=\"basefrm\"
                                               class=\"rc\">
                                                <b>
                                                    ";
                // line 154
                echo $this->extensions['OxidEsales\Twig\Extensions\TranslateExtension']->translate(["ident" => ((twig_get_attribute($this->env, $this->source, $context["submenuitem"], "getAttribute", ["name"], "method", true, true, false, 154)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, $context["submenuitem"], "getAttribute", ["name"], "method", false, false, false, 154), twig_get_attribute($this->env, $this->source, $context["submenuitem"], "getAttribute", ["id"], "method", false, false, false, 154))) : (twig_get_attribute($this->env, $this->source, $context["submenuitem"], "getAttribute", ["id"], "method", false, false, false, 154))), "noerror" => true]);
                echo "
                                                </b>
                                            </a>
                                        </li>
                                    ";
            }
            // line 159
            echo "                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['submenuitem'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 160
        echo "                            </ul>
                        </li>
                    ";
        $___internal_parse_1_ = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 133
        echo twig_spaceless($___internal_parse_1_);
        // line 163
        echo "                ";
    }

    // line 167
    public function block_admin_navigation_favorites($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 168
        echo "                    ";
        ob_start(function () { return ''; });
        // line 169
        echo "                        <li id=\"";
        echo twig_escape_filter($this->env, ($context["favoritesMenuHeader"] ?? null), "html", null, true);
        echo "\">
                            <a class=\"rc\"
                               onclick=\"_navExp(this);return false;\"
                               href=\"#\">
                                <b>
                                    ";
        // line 174
        echo $this->extensions['OxidEsales\Twig\Extensions\TranslateExtension']->translate(["ident" => "NAVIGATION_FAVORITES", "noerror" => true]);
        echo "
                                </b>
                            </a>
                            <a class=\"ed\"
                               href=\"";
        // line 178
        echo twig_get_attribute($this->env, $this->source, ($context["oViewConf"] ?? null), "getSelfLink", [], "method", false, false, false, 178);
        echo "&cl=navigation&amp;item=favorites.html.twig\"
                               target=\"basefrm\">
                                ";
        // line 180
        echo $this->extensions['OxidEsales\Twig\Extensions\TranslateExtension']->translate(["ident" => "NAVIGATION_FAVORITES_EDIT", "noerror" => true]);
        echo "
                            </a>
                            <ul>
                                ";
        // line 183
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["menufavorites"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["submenuitem"]) {
            // line 184
            echo "                                    ";
            if ((twig_get_attribute($this->env, $this->source, $context["submenuitem"], "nodeType", [], "any", false, false, false, 184) == twig_constant("XML_ELEMENT_NODE"))) {
                // line 185
                echo "                                        ";
                $context["submenuIndex"] = (($context["submenuIndex"] ?? null) + 1);
                // line 186
                echo "                                        <li id=\"";
                echo twig_escape_filter($this->env, ($context["favoritesMenuHeader"] ?? null), "html", null, true);
                echo "-";
                echo twig_escape_filter($this->env, ($context["submenuIndex"] ?? null), "html", null, true);
                echo "\"
                                            class=\"\">
                                            <a href=\"";
                // line 188
                echo twig_get_attribute($this->env, $this->source, $context["submenuitem"], "getAttribute", ["link"], "method", false, false, false, 188);
                echo "\"
                                               onclick=\"_navAct(this);\"
                                               target=\"basefrm\"
                                               class=\"rc\">
                                                <b>
                                                    ";
                // line 193
                echo $this->extensions['OxidEsales\Twig\Extensions\TranslateExtension']->translate(["ident" => ((twig_get_attribute($this->env, $this->source, $context["submenuitem"], "getAttribute", ["name"], "method", true, true, false, 193)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, $context["submenuitem"], "getAttribute", ["name"], "method", false, false, false, 193), twig_get_attribute($this->env, $this->source, $context["submenuitem"], "getAttribute", ["id"], "method", false, false, false, 193))) : (twig_get_attribute($this->env, $this->source, $context["submenuitem"], "getAttribute", ["id"], "method", false, false, false, 193))), "noerror" => true]);
                echo "
                                                </b>
                                            </a>
                                        </li>
                                    ";
            }
            // line 198
            echo "                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['submenuitem'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 199
        echo "                            </ul>
                        </li>
                    ";
        $___internal_parse_2_ = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 168
        echo twig_spaceless($___internal_parse_2_);
        // line 202
        echo "                ";
    }

    // line 209
    public function block_admin_navigation_scripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 210
        echo "    <!--
    var _expid = '";
        // line 211
        ((($context["historyMenuHeader"] ?? null)) ? (print (twig_escape_filter($this->env, ($context["historyMenuHeader"] ?? null), "html", null, true))) : (print (0)));
        echo "';

    function _navExp(el) {
        var _cur = el.parentNode,
            _exp = document.getElementById(_expid);
        _cur.className = \"exp\";
        if (_expid != 0) {
            _exp.className = \"\";
        }
        if (_expid == _cur.id) {
            _expid = 0;
        } else {
            _expid = _cur.id;
        }
    }

    var _actid = 0;
    function _navAct(el) {
        var _cur = el.parentNode;
        _cur.className = \"act\";
        if (_actid != 0 && _actid != _cur.id) {
            document.getElementById(_actid).className = \"\";
        }
        _actid = _cur.id;
    }

    function _navExtExpAct(mnid, sbid) {
        var _mnli = document.getElementById(mnid);
        var _sbli = document.getElementById(sbid);
        if (_mnli && _sbli) {
            var _mna = _mnli.getElementsByTagName(\"a\");
            var _sba = _sbli.getElementsByTagName(\"a\");
            if (_mna.length && _sba.length) {
                _navExp(_mna[0]);
                _navAct(_sba[0]);
            }
        }
    }

    function _navExtExp(mnid) {
        var _mnli = document.getElementById(mnid);
        if (_mnli) {
            var _mna = _mnli.getElementsByTagName(\"a\");
            if (_mna.length) {
                _navExp(_mna[0]);
            }
        }
    }

    function _navExtExpActByName(sbid) {
        var sbid = \"nav_\" + sbid;
        var _sbli = document.getElementsByName(sbid)[0];
        if (_sbli) {
            var mnid = _sbli.getAttribute(\"rel\");
            var _mnli = document.getElementById(mnid);
            if (_mnli) {
                var _mna = _mnli.getElementsByTagName(\"a\");
                var _sba = _sbli.getElementsByTagName(\"a\");
                if (_mna.length && _sba.length) {
                    _navExp(_mna[0]);
                    _navAct(_sba[0]);
                }
            }
        }
    }

    //-->
    ";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@__main__/navigation.html.twig";
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
        return array (  603 => 211,  600 => 210,  596 => 209,  592 => 202,  590 => 168,  585 => 199,  579 => 198,  571 => 193,  563 => 188,  555 => 186,  552 => 185,  549 => 184,  545 => 183,  539 => 180,  534 => 178,  527 => 174,  518 => 169,  515 => 168,  511 => 167,  507 => 163,  505 => 133,  500 => 160,  494 => 159,  486 => 154,  478 => 149,  470 => 147,  467 => 146,  464 => 145,  460 => 144,  453 => 140,  446 => 138,  438 => 135,  433 => 134,  430 => 133,  426 => 132,  422 => 124,  416 => 123,  412 => 121,  410 => 52,  407 => 120,  401 => 119,  397 => 117,  393 => 115,  387 => 114,  384 => 113,  382 => 112,  377 => 109,  373 => 107,  371 => 106,  366 => 105,  360 => 103,  358 => 102,  346 => 97,  340 => 96,  336 => 95,  328 => 94,  321 => 93,  315 => 92,  312 => 91,  309 => 90,  305 => 89,  302 => 88,  299 => 87,  292 => 83,  286 => 79,  279 => 75,  270 => 70,  268 => 69,  262 => 66,  253 => 64,  246 => 61,  244 => 60,  238 => 59,  231 => 58,  228 => 57,  225 => 56,  222 => 55,  219 => 54,  214 => 53,  212 => 52,  208 => 50,  204 => 48,  202 => 47,  197 => 46,  188 => 43,  186 => 42,  183 => 41,  180 => 40,  177 => 39,  172 => 38,  168 => 37,  161 => 279,  159 => 209,  151 => 203,  149 => 167,  144 => 164,  142 => 132,  133 => 125,  130 => 37,  128 => 36,  120 => 31,  114 => 27,  107 => 23,  98 => 21,  88 => 20,  84 => 19,  80 => 17,  78 => 16,  73 => 14,  67 => 13,  63 => 12,  59 => 11,  53 => 7,  51 => 6,  49 => 5,  47 => 4,  45 => 3,  43 => 2,  41 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@__main__/navigation.html.twig", "/var/www/html/source/Application/views/admin_twig/tpl/navigation.html.twig");
    }
}
