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

/* @__main__/article_list.html.twig */
class __TwigTemplate_51bfb239f7f970b5ba8b5f72280b81ff extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'admin_article_list_colgroup' => [$this, 'block_admin_article_list_colgroup'],
            'admin_article_list_filter' => [$this, 'block_admin_article_list_filter'],
            'admin_article_list_sorting' => [$this, 'block_admin_article_list_sorting'],
            'admin_article_list_item' => [$this, 'block_admin_article_list_item'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        $this->loadTemplate("@__main__/headitem.html.twig", "@__main__/article_list.html.twig", 1)->display(twig_array_merge($context, ["title" => $this->extensions['OxidEsales\Twig\Extensions\Filters\TranslateExtension']->translate("GENERAL_ADMIN_TITLE"), "box" => "list"]));
        // line 2
        $context["where"] = twig_get_attribute($this->env, $this->source, ($context["oView"] ?? null), "getListFilter", [], "method", false, false, false, 2);
        // line 3
        echo "
";
        // line 4
        if (($context["readonly"] ?? null)) {
            // line 5
            echo "    ";
            $context["readonly"] = "readonly disabled";
        } else {
            // line 7
            echo "    ";
            $context["readonly"] = "";
        }
        // line 9
        echo "
<script type=\"text/javascript\">
    <!--
    window.onload = function () {
        top.reloadEditFrame();
        ";
        // line 14
        if ((($context["updatelist"] ?? null) == 1)) {
            // line 15
            echo "        top.oxid.admin.updateList('";
            echo twig_escape_filter($this->env, ($context["oxid"] ?? null), "html", null, true);
            echo "');
        ";
        }
        // line 17
        echo "    }
    //-->
</script>


<div id=\"liste\">

    <form name=\"search\" id=\"search\" action=\"";
        // line 24
        echo twig_get_attribute($this->env, $this->source, ($context["oViewConf"] ?? null), "getSelfLink", [], "method", false, false, false, 24);
        echo "\" method=\"post\">
        ";
        // line 25
        $this->loadTemplate("@__main__/_formparams.html.twig", "@__main__/article_list.html.twig", 25)->display(twig_array_merge($context, ["cl" => "article_list", "lstrt" => ($context["lstrt"] ?? null), "actedit" => ($context["actedit"] ?? null), "oxid" => ($context["oxid"] ?? null), "fnc" => "", "language" => ($context["actlang"] ?? null), "editlanguage" => ($context["actlang"] ?? null)]));
        // line 26
        echo "        <table cellspacing=\"0\" cellpadding=\"0\" border=\"0\" width=\"100%\">
            <colgroup>
                ";
        // line 28
        $this->displayBlock('admin_article_list_colgroup', $context, $blocks);
        // line 35
        echo "            </colgroup>
            <tr class=\"listitem\">
                ";
        // line 37
        $this->displayBlock('admin_article_list_filter', $context, $blocks);
        // line 113
        echo "            </tr>
            <tr class=\"listitem\">
                ";
        // line 115
        $this->displayBlock('admin_article_list_sorting', $context, $blocks);
        // line 130
        echo "            </tr>

            ";
        // line 132
        $context["blWhite"] = "";
        // line 133
        echo "            ";
        $context["_cnt"] = 0;
        // line 134
        echo "            ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["mylist"] ?? null));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["listitem"]) {
            // line 135
            echo "                ";
            $context["_cnt"] = (($context["_cnt"] ?? null) + 1);
            // line 136
            echo "                <tr id=\"row.";
            echo twig_escape_filter($this->env, ($context["_cnt"] ?? null), "html", null, true);
            echo "\">

                    ";
            // line 138
            $this->displayBlock('admin_article_list_item', $context, $blocks);
            // line 173
            echo "                </tr>
                ";
            // line 174
            if ((($context["blWhite"] ?? null) == "2")) {
                // line 175
                echo "                    ";
                $context["blWhite"] = "";
                // line 176
                echo "                ";
            } else {
                // line 177
                echo "                    ";
                $context["blWhite"] = "2";
                // line 178
                echo "                ";
            }
            // line 179
            echo "            ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['listitem'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 180
        echo "            ";
        $this->loadTemplate("@__main__/pagenavisnippet.html.twig", "@__main__/article_list.html.twig", 180)->display(twig_array_merge($context, ["colspan" => "5"]));
        // line 181
        echo "        </table>
    </form>
</div>

";
        // line 185
        $this->loadTemplate("@__main__/pagetabsnippet.html.twig", "@__main__/article_list.html.twig", 185)->display($context);
        // line 186
        echo "
<script type=\"text/javascript\">
    if (parent.parent) {
        parent.parent.sShopTitle = \"";
        // line 189
        echo addslashes(twig_get_attribute($this->env, $this->source, ($context["actshopobj"] ?? null), "oxshops__oxname", [], "any", false, false, false, 189));
        echo "\";
        parent.parent.sMenuItem = \"";
        // line 190
        echo $this->extensions['OxidEsales\Twig\Extensions\TranslateExtension']->translate(["ident" => "GENERAL_MENUITEM"]);
        echo "\";
        parent.parent.sMenuSubItem = \"";
        // line 191
        echo $this->extensions['OxidEsales\Twig\Extensions\TranslateExtension']->translate(["ident" => "ARTICLE_LIST_MENUSUBITEM"]);
        echo "\";
        parent.parent.sWorkArea = \"";
        // line 192
        echo twig_escape_filter($this->env, ($context["_act"] ?? null), "html", null, true);
        echo "\";
        parent.parent.setTitle();
    }
</script>
</body>
</html>

";
    }

    // line 28
    public function block_admin_article_list_colgroup($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 29
        echo "                    <col width=\"3%\">
                    <col width=\"10%\">
                    <col width=\"45%\">
                    <col width=\"30%\">
                    <col width=\"2%\">
                ";
    }

    // line 37
    public function block_admin_article_list_filter($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 38
        echo "                    <td valign=\"top\" class=\"listfilter first\" align=\"right\">
                        <div class=\"r1\">
                            <div class=\"b1\">&nbsp;</div>
                        </div>
                    </td>
                    <td valign=\"top\" class=\"listfilter\" align=\"left\">
                        <div class=\"r1\">
                            <div class=\"b1\">
                                <input class=\"listedit\" type=\"text\" size=\"9\" maxlength=\"128\"
                                       name=\"where[oxarticles][oxartnum]\" value=\"";
        // line 47
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["where"] ?? null), "oxarticles", [], "any", false, false, false, 47), "oxartnum", [], "any", false, false, false, 47), "html", null, true);
        echo "\">
                            </div>
                        </div>
                    </td>
                    <td height=\"20\" valign=\"middle\" class=\"listfilter\" nowrap>
                        <div class=\"r1\">
                            <div class=\"b1\">
                                <select name=\"art_category\" class=\"editinput\"
                                        onChange=\"Javascript:document.search.lstrt.value=0;document.search.submit();\">
                                    <option value=\"\">";
        // line 56
        echo $this->extensions['OxidEsales\Twig\Extensions\TranslateExtension']->translate(["ident" => "ARTICLE_LIST_ALLPRODUCTS"]);
        echo "</option>
                                    <optgroup label=\"";
        // line 57
        echo $this->extensions['OxidEsales\Twig\Extensions\TranslateExtension']->translate(["ident" => "GENERAL_CATEGORY"]);
        echo "\">
                                        ";
        // line 58
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["cattree"] ?? null), "__get", ["aList"], "method", false, false, false, 58));
        foreach ($context['_seq'] as $context["_key"] => $context["pcat"]) {
            // line 59
            echo "                                            <option value=\"cat@@";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["pcat"], "oxcategories__oxid", [], "any", false, false, false, 59), "value", [], "any", false, false, false, 59), "html", null, true);
            echo "\"
                                                    ";
            // line 60
            if (twig_get_attribute($this->env, $this->source, $context["pcat"], "selected", [], "any", false, false, false, 60)) {
                echo "SELECTED";
            }
            echo ">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["pcat"], "oxcategories__oxtitle", [], "any", false, false, false, 60), "value", [], "any", false, false, false, 60), "html", null, true);
            echo "</option>
                                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['pcat'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 62
        echo "                                    </optgroup>
                                    <optgroup label=\"";
        // line 63
        echo $this->extensions['OxidEsales\Twig\Extensions\TranslateExtension']->translate(["ident" => "GENERAL_MANUFACTURER"]);
        echo "\">
                                        ";
        // line 64
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["mnftree"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["pmnf"]) {
            // line 65
            echo "                                            <option value=\"mnf@@";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["pmnf"], "oxmanufacturers__oxid", [], "any", false, false, false, 65), "value", [], "any", false, false, false, 65), "html", null, true);
            echo "\"
                                                    ";
            // line 66
            if (twig_get_attribute($this->env, $this->source, $context["pmnf"], "selected", [], "any", false, false, false, 66)) {
                echo "SELECTED";
            }
            echo ">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["pmnf"], "oxmanufacturers__oxtitle", [], "any", false, false, false, 66), "value", [], "any", false, false, false, 66), "html", null, true);
            echo "</option>
                                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['pmnf'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 68
        echo "                                    </optgroup>
                                    <optgroup label=\"";
        // line 69
        echo $this->extensions['OxidEsales\Twig\Extensions\TranslateExtension']->translate(["ident" => "GENERAL_VENDOR"]);
        echo "\">
                                        ";
        // line 70
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["vndtree"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["pvnd"]) {
            // line 71
            echo "                                            <option value=\"vnd@@";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["pvnd"], "oxvendor__oxid", [], "any", false, false, false, 71), "value", [], "any", false, false, false, 71), "html", null, true);
            echo "\"
                                                    ";
            // line 72
            if (twig_get_attribute($this->env, $this->source, $context["pvnd"], "selected", [], "any", false, false, false, 72)) {
                echo "SELECTED";
            }
            echo ">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["pvnd"], "oxvendor__oxtitle", [], "any", false, false, false, 72), "value", [], "any", false, false, false, 72), "html", null, true);
            echo "</option>
                                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['pvnd'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 74
        echo "                                    </optgroup>
                                </select>
                                <select name=\"pwrsearchfld\" class=\"editinput\"
                                        onChange=\"Javascript:document.search.lstrt.value=0;top.oxid.admin.setSorting( document.search, 'oxarticles', this.value, 'asc');document.forms.search.submit();\">
                                    ";
        // line 78
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["pwrsearchfields"] ?? null));
        foreach ($context['_seq'] as $context["field"] => $context["desc"]) {
            // line 79
            echo "                                        ";
            $context["ident"] = ("GENERAL_ARTICLE_" . $context["desc"]);
            // line 80
            echo "                                        ";
            $context["ident"] = twig_upper_filter($this->env, ($context["ident"] ?? null));
            // line 81
            echo "                                        <option value=\"";
            echo twig_escape_filter($this->env, $context["desc"], "html", null, true);
            echo "\"
                                                ";
            // line 82
            if ((($context["pwrsearchfld"] ?? null) == twig_upper_filter($this->env, $context["desc"]))) {
                echo "SELECTED";
            }
            echo ">";
            echo $this->extensions['OxidEsales\Twig\Extensions\TranslateExtension']->translate(["noerror" => true, "alternative" => $context["desc"], "ident" => ($context["ident"] ?? null)]);
            echo "</option>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['field'], $context['desc'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 84
        echo "                                </select>
                                <input class=\"listedit\" type=\"text\" size=\"20\" maxlength=\"128\"
                                       name=\"where[oxarticles][";
        // line 86
        echo twig_escape_filter($this->env, twig_lower_filter($this->env, ($context["pwrsearchfld"] ?? null)), "html", null, true);
        echo "]\"
                                       value=\"";
        // line 87
        echo twig_escape_filter($this->env, ($context["pwrsearchinput"] ?? null), "html", null, true);
        echo "\" ";
        $this->loadTemplate("@__main__/help.html.twig", "@__main__/article_list.html.twig", 87)->display(twig_array_merge($context, ["helpid" => "searchfieldoxdynamic"]));
        echo ">
                            </div>
                        </div>
                    </td>
                    <td valign=\"top\" class=\"listfilter\" colspan=\"2\" nowrap>
                        <div class=\"r1\">
                            <div class=\"b1\">
                                <div class=\"find\">
                                    <select name=\"changelang\" class=\"editinput\"
                                            onChange=\"Javascript:top.oxid.admin.changeLanguage();\">
                                        ";
        // line 97
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["lang"]) {
            // line 98
            echo "                                            <option value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["lang"], "id", [], "any", false, false, false, 98), "html", null, true);
            echo "\"
                                                    ";
            // line 99
            if (twig_get_attribute($this->env, $this->source, $context["lang"], "selected", [], "any", false, false, false, 99)) {
                echo "SELECTED";
            }
            echo ">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["lang"], "name", [], "any", false, false, false, 99), "html", null, true);
            echo "</option>
                                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['lang'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 101
        echo "                                    </select>
                                    <input class=\"listedit\" type=\"submit\" name=\"submitit\"
                                           value=\"";
        // line 103
        echo $this->extensions['OxidEsales\Twig\Extensions\TranslateExtension']->translate(["ident" => "GENERAL_SEARCH"]);
        echo "\"
                                           onClick=\"Javascript:document.search.lstrt.value=0;\">
                                </div>
                                <input class=\"listedit\" type=\"text\" size=\"25\" maxlength=\"128\"
                                       name=\"where[oxarticles][oxshortdesc]\"
                                       value=\"";
        // line 108
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["where"] ?? null), "oxarticles", [], "any", false, false, false, 108), "oxshortdesc", [], "any", false, false, false, 108), "html", null, true);
        echo "\" ";
        $this->loadTemplate("@__main__/help.html.twig", "@__main__/article_list.html.twig", 108)->display(twig_array_merge($context, ["helpid" => "searchfieldoxshortdesc"]));
        echo ">
                            </div>
                        </div>
                    </td>
                ";
    }

    // line 115
    public function block_admin_article_list_sorting($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 116
        echo "                    <td class=\"listheader first\" height=\"15\" width=\"30\" align=\"center\"><a
                                href=\"Javascript:top.oxid.admin.setSorting( document.search, 'oxarticles', 'oxactive', 'asc');document.search.submit();\"
                                class=\"listheader\">";
        // line 118
        echo $this->extensions['OxidEsales\Twig\Extensions\TranslateExtension']->translate(["ident" => "GENERAL_ACTIVTITLE"]);
        echo "</a></td>
                    <td class=\"listheader\"><a
                                href=\"Javascript:top.oxid.admin.setSorting( document.search, 'oxarticles', 'oxartnum', 'asc');document.search.submit();\"
                                class=\"listheader\">";
        // line 121
        echo $this->extensions['OxidEsales\Twig\Extensions\TranslateExtension']->translate(["ident" => "GENERAL_ARTNUM"]);
        echo "</a></td>
                    <td class=\"listheader\" height=\"15\">&nbsp;<a
                                href=\"Javascript:top.oxid.admin.setSorting( document.search, 'oxarticles', '";
        // line 123
        echo twig_escape_filter($this->env, twig_lower_filter($this->env, ($context["pwrsearchfld"] ?? null)), "html", null, true);
        echo "', 'asc');document.search.submit();\"
                                class=\"listheader\">";
        // line 124
        $context["ident"] = ("GENERAL_ARTICLE_" . ($context["pwrsearchfld"] ?? null));
        $context["ident"] = twig_upper_filter($this->env, ($context["ident"] ?? null));
        echo $this->extensions['OxidEsales\Twig\Extensions\TranslateExtension']->translate(["ident" => ($context["ident"] ?? null)]);
        echo "</a>
                    </td>
                    <td class=\"listheader\" colspan=\"2\"><a
                                href=\"Javascript:top.oxid.admin.setSorting( document.search, 'oxarticles', 'oxshortdesc', 'asc');document.search.submit();\"
                                class=\"listheader\">";
        // line 128
        echo $this->extensions['OxidEsales\Twig\Extensions\TranslateExtension']->translate(["ident" => "GENERAL_SHORTDESC"]);
        echo "</a></td>
                ";
    }

    // line 138
    public function block_admin_article_list_item($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 139
        echo "                        ";
        if ((twig_get_attribute($this->env, $this->source, ($context["listitem"] ?? null), "blacklist", [], "any", false, false, false, 139) == 1)) {
            // line 140
            echo "                            ";
            $context["listclass"] = "listitem3";
            // line 141
            echo "                        ";
        } else {
            // line 142
            echo "                            ";
            $context["listclass"] = ("listitem" . ($context["blWhite"] ?? null));
            // line 143
            echo "                        ";
        }
        // line 144
        echo "                        ";
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["listitem"] ?? null), "oxarticles__oxid", [], "any", false, false, false, 144), "value", [], "any", false, false, false, 144) == ($context["oxid"] ?? null))) {
            // line 145
            echo "                            ";
            $context["listclass"] = "listitem4";
            // line 146
            echo "                        ";
        }
        // line 147
        echo "                        <td valign=\"top\"
                            class=\"";
        // line 148
        echo twig_escape_filter($this->env, ($context["listclass"] ?? null), "html", null, true);
        if (twig_get_attribute($this->env, $this->source, ($context["listitem"] ?? null), "showActiveCheckInAdminPanel", [], "any", false, false, false, 148)) {
            echo " active";
        }
        echo "\"
                            height=\"15\">
                            <div class=\"listitemfloating\">&nbsp</a></div>
                        </td>
                        <td valign=\"top\" class=\"";
        // line 152
        echo twig_escape_filter($this->env, ($context["listclass"] ?? null), "html", null, true);
        echo "\">
                            <div class=\"listitemfloating\"><a
                                        href=\"Javascript:top.oxid.admin.editThis('";
        // line 154
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["listitem"] ?? null), "oxarticles__oxid", [], "any", false, false, false, 154), "value", [], "any", false, false, false, 154), "html", null, true);
        echo "');\"
                                        class=\"";
        // line 155
        echo twig_escape_filter($this->env, ($context["listclass"] ?? null), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["listitem"] ?? null), "oxarticles__oxartnum", [], "any", false, false, false, 155), "value", [], "any", false, false, false, 155), "html", null, true);
        echo "</a></div>
                        </td>
                        <td valign=\"top\" class=\"";
        // line 157
        echo twig_escape_filter($this->env, ($context["listclass"] ?? null), "html", null, true);
        echo "\" height=\"15\">
                            <div class=\"listitemfloating\">&nbsp;<a
                                        href=\"Javascript:top.oxid.admin.editThis('";
        // line 159
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["listitem"] ?? null), "oxarticles__oxid", [], "any", false, false, false, 159), "value", [], "any", false, false, false, 159), "html", null, true);
        echo "');\"
                                        class=\"";
        // line 160
        echo twig_escape_filter($this->env, ($context["listclass"] ?? null), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->extensions['OxidEsales\Twig\Extensions\Filters\TruncateExtension']->truncate(twig_get_attribute($this->env, $this->source, ($context["listitem"] ?? null), "pwrsearchval", [], "any", false, false, false, 160), 200, "..", false), "html", null, true);
        echo "</a>
                            </div>
                        </td>
                        <td valign=\"top\" class=\"";
        // line 163
        echo twig_escape_filter($this->env, ($context["listclass"] ?? null), "html", null, true);
        echo "\">
                            <div class=\"listitemfloating\"><a
                                        href=\"Javascript:top.oxid.admin.editThis('";
        // line 165
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["listitem"] ?? null), "oxarticles__oxid", [], "any", false, false, false, 165), "value", [], "any", false, false, false, 165), "html", null, true);
        echo "');\"
                                        class=\"";
        // line 166
        echo twig_escape_filter($this->env, ($context["listclass"] ?? null), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->extensions['OxidEsales\Twig\Extensions\Filters\TruncateExtension']->truncate(twig_striptags(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["listitem"] ?? null), "oxarticles__oxshortdesc", [], "any", false, false, false, 166), "value", [], "any", false, false, false, 166)), 45, "..", true), "html", null, true);
        echo "</a>
                            </div>
                        </td>
                        <td class=\"";
        // line 169
        echo twig_escape_filter($this->env, ($context["listclass"] ?? null), "html", null, true);
        echo "\">
                            ";
        // line 170
        $this->loadTemplate("@__main__/include/article_list_actions.html.twig", "@__main__/article_list.html.twig", 170)->display($context);
        // line 171
        echo "                        </td>
                    ";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@__main__/article_list.html.twig";
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
        return array (  575 => 171,  573 => 170,  569 => 169,  561 => 166,  557 => 165,  552 => 163,  544 => 160,  540 => 159,  535 => 157,  528 => 155,  524 => 154,  519 => 152,  509 => 148,  506 => 147,  503 => 146,  500 => 145,  497 => 144,  494 => 143,  491 => 142,  488 => 141,  485 => 140,  482 => 139,  478 => 138,  472 => 128,  463 => 124,  459 => 123,  454 => 121,  448 => 118,  444 => 116,  440 => 115,  429 => 108,  421 => 103,  417 => 101,  405 => 99,  400 => 98,  396 => 97,  381 => 87,  377 => 86,  373 => 84,  361 => 82,  356 => 81,  353 => 80,  350 => 79,  346 => 78,  340 => 74,  328 => 72,  323 => 71,  319 => 70,  315 => 69,  312 => 68,  300 => 66,  295 => 65,  291 => 64,  287 => 63,  284 => 62,  272 => 60,  267 => 59,  263 => 58,  259 => 57,  255 => 56,  243 => 47,  232 => 38,  228 => 37,  219 => 29,  215 => 28,  203 => 192,  199 => 191,  195 => 190,  191 => 189,  186 => 186,  184 => 185,  178 => 181,  175 => 180,  161 => 179,  158 => 178,  155 => 177,  152 => 176,  149 => 175,  147 => 174,  144 => 173,  142 => 138,  136 => 136,  133 => 135,  115 => 134,  112 => 133,  110 => 132,  106 => 130,  104 => 115,  100 => 113,  98 => 37,  94 => 35,  92 => 28,  88 => 26,  86 => 25,  82 => 24,  73 => 17,  67 => 15,  65 => 14,  58 => 9,  54 => 7,  50 => 5,  48 => 4,  45 => 3,  43 => 2,  41 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@__main__/article_list.html.twig", "/var/www/html/source/Application/views/admin_twig/tpl/article_list.html.twig");
    }
}
