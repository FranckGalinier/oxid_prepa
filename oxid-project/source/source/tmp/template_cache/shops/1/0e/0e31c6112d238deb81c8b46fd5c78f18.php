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

/* @__main__/layout/base.html.twig */
class __TwigTemplate_47e46fa2f413cafbbbca023dc256c7c8 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'head_title' => [$this, 'block_head_title'],
            'head_meta_robots' => [$this, 'block_head_meta_robots'],
            'head_meta_description' => [$this, 'block_head_meta_description'],
            'head_meta_keywords' => [$this, 'block_head_meta_keywords'],
            'head_meta_open_graph' => [$this, 'block_head_meta_open_graph'],
            'head_link_canonical' => [$this, 'block_head_link_canonical'],
            'head_link_hreflang' => [$this, 'block_head_link_hreflang'],
            'head_link_favicon' => [$this, 'block_head_link_favicon'],
            'base_style' => [$this, 'block_base_style'],
            'base_fonts' => [$this, 'block_base_fonts'],
            'head_css' => [$this, 'block_head_css'],
            'head_html_namespace' => [$this, 'block_head_html_namespace'],
            'theme_svg_icons' => [$this, 'block_theme_svg_icons'],
            'base_js' => [$this, 'block_base_js'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 2
        ob_start();
        // line 3
        echo "    ";
        ob_start(function () { return ''; });
        // line 4
        echo "        <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
        <meta name=\"viewport\" id=\"Viewport\" content=\"width=device-width, initial-scale=1\">
        <meta http-equiv=\"Content-Type\" content=\"text/html; charset=";
        // line 6
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["oView"] ?? null), "getCharSet", [], "method", false, false, false, 6), "html", null, true);
        echo "\">
        <link rel=\"dns-prefetch\" href=\"";
        // line 7
        echo twig_get_attribute($this->env, $this->source, ($context["oViewConf"] ?? null), "getBaseDir", [], "method", false, false, false, 7);
        echo "\">
        <link rel=\"preconnect\" href=\"";
        // line 8
        echo twig_get_attribute($this->env, $this->source, ($context["oViewConf"] ?? null), "getBaseDir", [], "method", false, false, false, 8);
        echo "\">
        <link rel=\"preload\" href=\"";
        // line 9
        echo twig_get_attribute($this->env, $this->source, ($context["oViewConf"] ?? null), "getResourceUrl", ["fonts/Roboto-Regular.woff2"], "method", false, false, false, 9);
        echo "\" as=\"font\" crossorigin type=\"font/woff2\">
        <link rel=\"preload\" href=\"";
        // line 10
        echo twig_get_attribute($this->env, $this->source, ($context["oViewConf"] ?? null), "getResourceUrl", ["fonts/oswald-latin-600-normal.woff2"], "method", false, false, false, 10);
        echo "\" as=\"font\" crossorigin type=\"font/woff2\">
        <link rel=\"preload\" href=\"";
        // line 11
        echo twig_get_attribute($this->env, $this->source, ($context["oViewConf"] ?? null), "getResourceUrl", ["css/styles.min.css"], "method", false, false, false, 11);
        echo "\" as=\"style\">
        <link rel=\"preload\" href=\"";
        // line 12
        echo twig_get_attribute($this->env, $this->source, ($context["oViewConf"] ?? null), "getResourceUrl", ["js/scripts.min.js"], "method", false, false, false, 12);
        echo "\" as=\"script\">

        ";
        // line 14
        $context["sPageTitle"] = twig_get_attribute($this->env, $this->source, ($context["oView"] ?? null), "getPageTitle", [], "method", false, false, false, 14);
        // line 15
        echo "        <title>";
        $this->displayBlock('head_title', $context, $blocks);
        echo "</title>

        ";
        // line 17
        $this->displayBlock('head_meta_robots', $context, $blocks);
        // line 24
        echo "
        ";
        // line 25
        $this->displayBlock('head_meta_description', $context, $blocks);
        // line 30
        echo "
        ";
        // line 31
        $this->displayBlock('head_meta_keywords', $context, $blocks);
        // line 36
        echo "        ";
        $context["actCategory"] = twig_get_attribute($this->env, $this->source, ($context["oView"] ?? null), "getActiveCategory", [], "method", false, false, false, 36);
        // line 37
        echo "        ";
        $this->displayBlock('head_meta_open_graph', $context, $blocks);
        // line 57
        echo "
        ";
        // line 58
        $context["canonical_url"] = twig_get_attribute($this->env, $this->source, ($context["oView"] ?? null), "getCanonicalUrl", [], "method", false, false, false, 58);
        // line 59
        echo "        ";
        $this->displayBlock('head_link_canonical', $context, $blocks);
        // line 64
        echo "
        ";
        // line 65
        $this->displayBlock('head_link_hreflang', $context, $blocks);
        // line 75
        echo "
        ";
        // line 76
        $context["oPageNavigation"] = twig_get_attribute($this->env, $this->source, ($context["oView"] ?? null), "getPageNavigation", [], "method", false, false, false, 76);
        // line 77
        echo "        ";
        if (($context["oPageNavigation"] ?? null)) {
            // line 78
            echo "            ";
            if (twig_get_attribute($this->env, $this->source, ($context["oPageNavigation"] ?? null), "previousPage", [], "any", false, false, false, 78)) {
                // line 79
                echo "                <link rel=\"prev\" href=\"";
                echo twig_get_attribute($this->env, $this->source, ($context["oPageNavigation"] ?? null), "previousPage", [], "any", false, false, false, 79);
                echo "\">
            ";
            }
            // line 81
            echo "            ";
            if (twig_get_attribute($this->env, $this->source, ($context["oPageNavigation"] ?? null), "nextPage", [], "any", false, false, false, 81)) {
                // line 82
                echo "                <link rel=\"next\" href=\"";
                echo twig_get_attribute($this->env, $this->source, ($context["oPageNavigation"] ?? null), "nextPage", [], "any", false, false, false, 82);
                echo "\">
            ";
            }
            // line 84
            echo "        ";
        }
        // line 85
        echo "
        ";
        // line 86
        $this->displayBlock('head_link_favicon', $context, $blocks);
        // line 125
        echo "
        ";
        // line 126
        $this->displayBlock('base_style', $context, $blocks);
        // line 133
        echo "
        ";
        // line 134
        $this->displayBlock('base_fonts', $context, $blocks);
        // line 136
        echo "
        ";
        // line 137
        $this->displayBlock('head_css', $context, $blocks);
        // line 142
        echo "    ";
        $___internal_parse_0_ = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 3
        echo twig_spaceless($___internal_parse_0_);
        $captureContent = ob_get_clean();
        if ('oxidBlock_pageHead' != '' && isset($captureContent)) {
        if (!isset($context['oxidBlock_pageHead'])) {
        $context['oxidBlock_pageHead'] = [];
        }
        if (!is_array($context['oxidBlock_pageHead'])) {
        $context['oxidBlock_pageHead'] = [$context['oxidBlock_pageHead']];
        }
        $context['oxidBlock_pageHead'][] = $captureContent;
        }
        unset($captureContent);
        // line 144
        echo "
";
        // line 145
        $context["blIsCheckout"] = twig_get_attribute($this->env, $this->source, ($context["oView"] ?? null), "getIsOrderStep", [], "method", false, false, false, 145);
        // line 146
        echo "<!DOCTYPE html>
<html lang=\"";
        // line 147
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["oView"] ?? null), "getActiveLangAbbr", [], "method", false, false, false, 147), "html", null, true);
        echo "\" ";
        $this->displayBlock('head_html_namespace', $context, $blocks);
        echo ">
    <head>
        ";
        // line 149
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["oxidBlock_pageHead"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["_block"]) {
            // line 150
            echo "            ";
            echo $context["_block"];
            echo "
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['_block'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 152
        echo "        ";
        echo $this->extensions['OxidEsales\Twig\Extensions\StyleExtension']->style($this->env);
        echo "
    </head>

    <body class=\"cl-";
        // line 155
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["oView"] ?? null), "getClassKey", [], "method", false, false, false, 155), "html", null, true);
        if (($this->extensions['OxidEsales\Twig\Extensions\GetRequestVariablesExtension']->getGlobalGet("plain") == "1")) {
            echo " popup";
        }
        if (($context["blIsCheckout"] ?? null)) {
            echo " is-checkout";
        }
        if ((($context["oxcmp_user"] ?? null) && twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["oxcmp_user"] ?? null), "oxuser__oxpassword", [], "any", false, false, false, 155), "value", [], "any", false, false, false, 155))) {
            echo " is-logged-in";
        }
        echo "\">

    ";
        // line 158
        echo "    ";
        $this->displayBlock('theme_svg_icons', $context, $blocks);
        // line 163
        echo "
    ";
        // line 164
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["oxidBlock_pageBody"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["_block"]) {
            // line 165
            echo "        ";
            echo $context["_block"];
            echo "
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['_block'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 167
        echo "
    ";
        // line 168
        $this->displayBlock('base_js', $context, $blocks);
        // line 173
        echo "
    ";
        // line 174
        echo twig_replace_filter($this->extensions['OxidEsales\Twig\Extensions\ScriptExtension']->script($context, ["dynamic" => ($context["__oxid_include_dynamic"] ?? null)]), ["type=\"text/javascript\"" => ""]);
        echo "

    ";
        // line 176
        if ( !twig_get_attribute($this->env, $this->source, ($context["oView"] ?? null), "isDemoShop", [], "method", false, false, false, 176)) {
            // line 177
            echo "        ";
            if (!empty($context["_render4cache"])) {
                echo $this->extensions['OxidEsales\Twig\Extensions\IncludeExtension']->renderForCache(['file' => "@__main__/widget/dynscript.html.twig"]);
            } else {
                $this->loadTemplate("@__main__/widget/dynscript.html.twig", "@__main__/layout/base.html.twig", 177)->display($context);
            }
            // line 178
            echo "    ";
        }
        // line 179
        echo "
    ";
        // line 180
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["oxidBlock_pageScript"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["_block"]) {
            // line 181
            echo "        ";
            echo $context["_block"];
            echo "
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['_block'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 183
        echo "    </body>
</html>
";
    }

    // line 15
    public function block_head_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo twig_escape_filter($this->env, ($context["sPageTitle"] ?? null), "html", null, true);
    }

    // line 17
    public function block_head_meta_robots($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 18
        echo "            ";
        if ((twig_get_attribute($this->env, $this->source, ($context["oView"] ?? null), "noIndex", [], "method", false, false, false, 18) == 1)) {
            // line 19
            echo "                <meta name=\"ROBOTS\" content=\"NOINDEX, NOFOLLOW\">
            ";
        } elseif ((twig_get_attribute($this->env, $this->source,         // line 20
($context["oView"] ?? null), "noIndex", [], "method", false, false, false, 20) == 2)) {
            // line 21
            echo "                <meta name=\"ROBOTS\" content=\"NOINDEX, FOLLOW\">
            ";
        }
        // line 23
        echo "        ";
    }

    // line 25
    public function block_head_meta_description($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 26
        echo "            ";
        if (twig_get_attribute($this->env, $this->source, ($context["oView"] ?? null), "getMetaDescription", [], "method", false, false, false, 26)) {
            // line 27
            echo "                <meta name=\"description\" content=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["oView"] ?? null), "getMetaDescription", [], "method", false, false, false, 27), "html", null, true);
            echo "\">
            ";
        }
        // line 29
        echo "        ";
    }

    // line 31
    public function block_head_meta_keywords($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 32
        echo "            ";
        if (twig_get_attribute($this->env, $this->source, ($context["oView"] ?? null), "getMetaKeywords", [], "method", false, false, false, 32)) {
            // line 33
            echo "                <meta name=\"keywords\" content=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["oView"] ?? null), "getMetaKeywords", [], "method", false, false, false, 33), "html", null, true);
            echo "\">
            ";
        }
        // line 35
        echo "        ";
    }

    // line 37
    public function block_head_meta_open_graph($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 38
        echo "            <meta property=\"og:site_name\" content=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["oViewConf"] ?? null), "getBaseDir", [], "method", false, false, false, 38), "html", null, true);
        echo "\">
            <meta property=\"og:title\" content=\"";
        // line 39
        echo twig_escape_filter($this->env, ($context["sPageTitle"] ?? null), "html", null, true);
        echo "\">
            <meta property=\"og:description\" content=\"";
        // line 40
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["oView"] ?? null), "getMetaDescription", [], "method", false, false, false, 40), "html", null, true);
        echo "\">

            ";
        // line 42
        if ((twig_get_attribute($this->env, $this->source, ($context["oViewConf"] ?? null), "getActiveClassName", [], "method", false, false, false, 42) == "details")) {
            // line 43
            echo "                <meta property=\"og:type\" content=\"product\">
                <meta property=\"og:image\" content=\"";
            // line 44
            echo twig_get_attribute($this->env, $this->source, ($context["oView"] ?? null), "getActPicture", [], "method", false, false, false, 44);
            echo "\">
                <meta property=\"og:url\" content=\"";
            // line 45
            echo twig_get_attribute($this->env, $this->source, ($context["oView"] ?? null), "getCanonicalUrl", [], "method", false, false, false, 45);
            echo "\">
            ";
        } elseif (((twig_get_attribute($this->env, $this->source,         // line 46
($context["oViewConf"] ?? null), "getActiveClassName", [], "method", false, false, false, 46) == "manufacturerlist") && twig_get_attribute($this->env, $this->source, ($context["actCategory"] ?? null), "getIconUrl", [], "method", false, false, false, 46))) {
            // line 47
            echo "                <meta property=\"og:type\" content=\"website\">
                <meta property=\"og:image\" content=\"";
            // line 48
            echo twig_get_attribute($this->env, $this->source, ($context["actCategory"] ?? null), "getIconUrl", [], "method", false, false, false, 48);
            echo "\">
                <meta property=\"og:url\" content=\"";
            // line 49
            echo twig_get_attribute($this->env, $this->source, ($context["oView"] ?? null), "getCanonicalUrl", [], "method", false, false, false, 49);
            echo "\">
            ";
        } else {
            // line 51
            echo "                ";
            $context["aOGImage"] = twig_get_attribute($this->env, $this->source, ($context["oViewConf"] ?? null), "getViewThemeParam", ["aOGImage"], "method", false, false, false, 51);
            // line 52
            echo "                <meta property=\"og:type\" content=\"website\">
                <meta property=\"og:image\" content=\"";
            // line 53
            echo twig_get_attribute($this->env, $this->source, ($context["oViewConf"] ?? null), "getImageUrl", [($context["aOGImage"] ?? null)], "method", false, false, false, 53);
            echo "\">
                <meta property=\"og:url\" content=\"";
            // line 54
            echo twig_get_attribute($this->env, $this->source, ($context["oView"] ?? null), "getCanonicalUrl", [], "method", false, false, false, 54);
            echo "\">
            ";
        }
        // line 56
        echo "        ";
    }

    // line 59
    public function block_head_link_canonical($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 60
        echo "            ";
        if (($context["canonical_url"] ?? null)) {
            // line 61
            echo "                <link rel=\"canonical\" href=\"";
            echo ($context["canonical_url"] ?? null);
            echo "\">
            ";
        }
        // line 63
        echo "        ";
    }

    // line 65
    public function block_head_link_hreflang($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 66
        echo "            ";
        if (twig_get_attribute($this->env, $this->source, ($context["oView"] ?? null), "isLanguageLoaded", [], "method", false, false, false, 66)) {
            // line 67
            echo "                ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["oxcmp_lang"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["_lng"]) {
                // line 68
                echo "                    ";
                if ((twig_get_attribute($this->env, $this->source, $context["_lng"], "id", [], "any", false, false, false, 68) == ($context["defaultLang"] ?? null))) {
                    // line 69
                    echo "                        <link rel=\"alternate\" hreflang=\"x-default\" href=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["_lng"], "link", [], "any", false, false, false, 69);
                    echo "\">
                    ";
                }
                // line 71
                echo "                    <link rel=\"alternate\" hreflang=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["_lng"], "abbr", [], "any", false, false, false, 71), "html", null, true);
                echo "\" href=\"";
                echo $this->extensions['OxidEsales\Twig\Extensions\UrlExtension']->addUrlParameters(twig_get_attribute($this->env, $this->source, $context["_lng"], "link", [], "any", false, false, false, 71), twig_get_attribute($this->env, $this->source, ($context["oView"] ?? null), "getDynUrlParams", [], "method", false, false, false, 71));
                echo "\">
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['_lng'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 73
            echo "            ";
        }
        // line 74
        echo "        ";
    }

    // line 86
    public function block_head_link_favicon($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 87
        echo "            ";
        $context["aAppleTouchIcon"] = twig_get_attribute($this->env, $this->source, ($context["oViewConf"] ?? null), "getViewThemeParam", ["aAppleTouchIcon"], "method", false, false, false, 87);
        // line 88
        echo "            ";
        $context["appleTouchIcon"] = twig_get_attribute($this->env, $this->source, ($context["oViewConf"] ?? null), "getImageUrl", [("favicons/" . ($context["aAppleTouchIcon"] ?? null))], "method", false, false, false, 88);
        // line 89
        echo "            ";
        if (($context["aAppleTouchIcon"] ?? null)) {
            // line 90
            echo "                ";
            $context["appleTouchIcon72"] = ($context["appleTouchIcon"] ?? null);
            // line 91
            echo "                ";
            $context["appleTouchIcon144"] = ($context["appleTouchIcon"] ?? null);
            // line 92
            echo "                <link rel=\"apple-touch-icon-precomposed\" href=\"";
            echo ($context["appleTouchIcon"] ?? null);
            echo "\">
                <link rel=\"apple-touch-icon-precomposed\" sizes=\"72x72\" href=\"";
            // line 93
            echo ($context["appleTouchIcon72"] ?? null);
            echo "\">
                <link rel=\"apple-touch-icon-precomposed\" sizes=\"144x144\" href=\"";
            // line 94
            echo ($context["appleTouchIcon144"] ?? null);
            echo "\">
            ";
        }
        // line 96
        echo "
            <!-- Shortcut Icons -->
            ";
        // line 98
        $context["sFaviconFile"] = twig_get_attribute($this->env, $this->source, ($context["oViewConf"] ?? null), "getViewThemeParam", ["sFaviconFile"], "method", false, false, false, 98);
        // line 99
        echo "            ";
        $context["sFavicon16File"] = twig_get_attribute($this->env, $this->source, ($context["oViewConf"] ?? null), "getViewThemeParam", ["sFavicon16File"], "method", false, false, false, 99);
        // line 100
        echo "            ";
        $context["sFavicon32File"] = twig_get_attribute($this->env, $this->source, ($context["oViewConf"] ?? null), "getViewThemeParam", ["sFavicon32File"], "method", false, false, false, 100);
        // line 101
        echo "            ";
        $context["sFaviconSvg"] = twig_get_attribute($this->env, $this->source, ($context["oViewConf"] ?? null), "getViewThemeParam", ["sFaviconSvg"], "method", false, false, false, 101);
        // line 102
        echo "            ";
        $context["sSiteManifestFile"] = twig_get_attribute($this->env, $this->source, ($context["oViewConf"] ?? null), "getViewThemeParam", ["sSiteManifestFile"], "method", false, false, false, 102);
        // line 103
        echo "            ";
        $context["sThemeColor"] = twig_get_attribute($this->env, $this->source, ($context["oViewConf"] ?? null), "getViewThemeParam", ["sThemeColor"], "method", false, false, false, 103);
        // line 104
        echo "
            ";
        // line 105
        if (($context["sFaviconFile"] ?? null)) {
            // line 106
            echo "                <link rel=\"icon\" href=\"";
            echo twig_get_attribute($this->env, $this->source, ($context["oViewConf"] ?? null), "getImageUrl", [("favicons/" . ($context["sFaviconFile"] ?? null))], "method", false, false, false, 106);
            echo "\" type=\"image/x-icon\">
            ";
        }
        // line 108
        echo "            ";
        if (($context["sFavicon16File"] ?? null)) {
            // line 109
            echo "                <link rel=\"icon\" href=\"";
            echo twig_get_attribute($this->env, $this->source, ($context["oViewConf"] ?? null), "getImageUrl", [("favicons/" . ($context["sFavicon16File"] ?? null))], "method", false, false, false, 109);
            echo "\" sizes=\"16x16\">
            ";
        }
        // line 111
        echo "            ";
        if (($context["sFavicon32File"] ?? null)) {
            // line 112
            echo "                <link rel=\"icon\" href=\"";
            echo twig_get_attribute($this->env, $this->source, ($context["oViewConf"] ?? null), "getImageUrl", [("favicons/" . ($context["sFavicon32File"] ?? null))], "method", false, false, false, 112);
            echo "\" sizes=\"32x32\">
            ";
        }
        // line 114
        echo "            ";
        if (($context["sFaviconSvg"] ?? null)) {
            // line 115
            echo "                <link rel=\"icon\" href=\"";
            echo twig_get_attribute($this->env, $this->source, ($context["oViewConf"] ?? null), "getImageUrl", [("favicons/" . ($context["sFaviconSvg"] ?? null))], "method", false, false, false, 115);
            echo "\">
                <link rel=\"mask-icon\" color=\"";
            // line 116
            echo twig_escape_filter($this->env, ($context["sThemeColor"] ?? null), "html", null, true);
            echo "\" href=\"";
            echo twig_get_attribute($this->env, $this->source, ($context["oViewConf"] ?? null), "getImageUrl", [("favicons/" . ($context["sFaviconSvg"] ?? null))], "method", false, false, false, 116);
            echo "\">
            ";
        }
        // line 118
        echo "            ";
        if (($context["sSiteManifestFile"] ?? null)) {
            // line 119
            echo "                <link rel=\"manifest\" href=\"";
            echo twig_get_attribute($this->env, $this->source, ($context["oViewConf"] ?? null), "getImageUrl", [("favicons/" . ($context["sSiteManifestFile"] ?? null))], "method", false, false, false, 119);
            echo "\">
            ";
        }
        // line 121
        echo "            ";
        if (($context["sThemeColor"] ?? null)) {
            // line 122
            echo "                <meta name=\"theme-color\" content=\"";
            echo twig_escape_filter($this->env, ($context["sThemeColor"] ?? null), "html", null, true);
            echo "\">
            ";
        }
        // line 124
        echo "        ";
    }

    // line 126
    public function block_base_style($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 127
        echo "            ";
        if (((($context["oxcmp_user"] ?? null) && (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["oxcmp_user"] ?? null), "oxuser__oxrights", [], "any", false, false, false, 127), "value", [], "any", false, false, false, 127) == "malladmin")) && $this->extensions['OxidEsales\Twig\Extensions\GetRequestVariablesExtension']->getGlobalCookie("scsspreview"))) {
            // line 128
            echo "                ";
            echo $this->extensions['OxidEsales\Twig\Extensions\StyleExtension']->style($this->env, ["include" => ("css/preview.css?" . twig_date_format_filter($this->env, "now", "U"))]);
            echo "
            ";
        } else {
            // line 130
            echo "                <link rel=\"stylesheet\" href=\"";
            echo twig_get_attribute($this->env, $this->source, ($context["oViewConf"] ?? null), "getResourceUrl", ["css/styles.min.css"], "method", false, false, false, 130);
            echo "\">
            ";
        }
        // line 132
        echo "        ";
    }

    // line 134
    public function block_base_fonts($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 135
        echo "        ";
    }

    // line 137
    public function block_head_css($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 138
        echo "            ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["oxidBlock_head"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["_block"]) {
            // line 139
            echo "                ";
            echo $context["_block"];
            echo "
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['_block'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 141
        echo "        ";
    }

    // line 147
    public function block_head_html_namespace($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 158
    public function block_theme_svg_icons($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 159
        echo "        <div class=\"d-none\">
            ";
        // line 160
        $this->loadTemplate("icons/repeating-icons.svg", "@__main__/layout/base.html.twig", 160)->display($context);
        // line 161
        echo "        </div>
    ";
    }

    // line 168
    public function block_base_js($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 169
        echo "        ";
        $this->loadTemplate("@__main__/i18n/js_vars.html.twig", "@__main__/layout/base.html.twig", 169)->display($context);
        // line 170
        echo "        ";
        echo $this->extensions['OxidEsales\Twig\Extensions\ScriptExtension']->script($context, ["include" => "js/bootstrap.bundle.min.js", "dynamic" => ($context["__oxid_include_dynamic"] ?? null)]);
        echo "
        ";
        // line 171
        echo $this->extensions['OxidEsales\Twig\Extensions\ScriptExtension']->script($context, ["include" => "js/scripts.min.js", "dynamic" => ($context["__oxid_include_dynamic"] ?? null)]);
        echo "
    ";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@__main__/layout/base.html.twig";
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
        return array (  694 => 171,  689 => 170,  686 => 169,  682 => 168,  677 => 161,  675 => 160,  672 => 159,  668 => 158,  662 => 147,  658 => 141,  649 => 139,  644 => 138,  640 => 137,  636 => 135,  632 => 134,  628 => 132,  622 => 130,  616 => 128,  613 => 127,  609 => 126,  605 => 124,  599 => 122,  596 => 121,  590 => 119,  587 => 118,  580 => 116,  575 => 115,  572 => 114,  566 => 112,  563 => 111,  557 => 109,  554 => 108,  548 => 106,  546 => 105,  543 => 104,  540 => 103,  537 => 102,  534 => 101,  531 => 100,  528 => 99,  526 => 98,  522 => 96,  517 => 94,  513 => 93,  508 => 92,  505 => 91,  502 => 90,  499 => 89,  496 => 88,  493 => 87,  489 => 86,  485 => 74,  482 => 73,  471 => 71,  465 => 69,  462 => 68,  457 => 67,  454 => 66,  450 => 65,  446 => 63,  440 => 61,  437 => 60,  433 => 59,  429 => 56,  424 => 54,  420 => 53,  417 => 52,  414 => 51,  409 => 49,  405 => 48,  402 => 47,  400 => 46,  396 => 45,  392 => 44,  389 => 43,  387 => 42,  382 => 40,  378 => 39,  373 => 38,  369 => 37,  365 => 35,  359 => 33,  356 => 32,  352 => 31,  348 => 29,  342 => 27,  339 => 26,  335 => 25,  331 => 23,  327 => 21,  325 => 20,  322 => 19,  319 => 18,  315 => 17,  308 => 15,  302 => 183,  293 => 181,  289 => 180,  286 => 179,  283 => 178,  276 => 177,  274 => 176,  269 => 174,  266 => 173,  264 => 168,  261 => 167,  252 => 165,  248 => 164,  245 => 163,  242 => 158,  228 => 155,  221 => 152,  212 => 150,  208 => 149,  201 => 147,  198 => 146,  196 => 145,  193 => 144,  180 => 3,  177 => 142,  175 => 137,  172 => 136,  170 => 134,  167 => 133,  165 => 126,  162 => 125,  160 => 86,  157 => 85,  154 => 84,  148 => 82,  145 => 81,  139 => 79,  136 => 78,  133 => 77,  131 => 76,  128 => 75,  126 => 65,  123 => 64,  120 => 59,  118 => 58,  115 => 57,  112 => 37,  109 => 36,  107 => 31,  104 => 30,  102 => 25,  99 => 24,  97 => 17,  91 => 15,  89 => 14,  84 => 12,  80 => 11,  76 => 10,  72 => 9,  68 => 8,  64 => 7,  60 => 6,  56 => 4,  53 => 3,  51 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("", "@__main__/layout/base.html.twig", "/var/www/html/source/Application/views/apex/tpl/layout/base.html.twig");
    }
}
