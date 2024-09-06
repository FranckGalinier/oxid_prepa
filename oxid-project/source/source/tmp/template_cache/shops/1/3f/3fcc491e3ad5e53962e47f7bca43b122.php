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

/* @__main__/order_overview.html.twig */
class __TwigTemplate_1c6cd2b2e9fcfc0e5fe909b6584d8c0e extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'admin_order_overview_billingaddress' => [$this, 'block_admin_order_overview_billingaddress'],
            'admin_order_overview_deliveryaddress' => [$this, 'block_admin_order_overview_deliveryaddress'],
            'admin_order_overview_items' => [$this, 'block_admin_order_overview_items'],
            'admin_order_overview_persparams' => [$this, 'block_admin_order_overview_persparams'],
            'admin_order_overview_total' => [$this, 'block_admin_order_overview_total'],
            'admin_order_overview_checkout' => [$this, 'block_admin_order_overview_checkout'],
            'admin_order_overview_dynamic' => [$this, 'block_admin_order_overview_dynamic'],
            'admin_order_overview_order_number' => [$this, 'block_admin_order_overview_order_number'],
            'admin_order_overview_customer_number' => [$this, 'block_admin_order_overview_customer_number'],
            'admin_order_overview_folder_form' => [$this, 'block_admin_order_overview_folder_form'],
            'admin_order_overview_status' => [$this, 'block_admin_order_overview_status'],
            'admin_order_overview_general' => [$this, 'block_admin_order_overview_general'],
            'admin_order_overview_send_form' => [$this, 'block_admin_order_overview_send_form'],
            'admin_order_overview_reset_form' => [$this, 'block_admin_order_overview_reset_form'],
            'admin_order_overview_export' => [$this, 'block_admin_order_overview_export'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        $this->loadTemplate("@__main__/headitem.html.twig", "@__main__/order_overview.html.twig", 1)->display(twig_array_merge($context, ["title" => $this->extensions['OxidEsales\Twig\Extensions\Filters\TranslateExtension']->translate("GENERAL_ADMIN_TITLE")]));
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
    <input type=\"hidden\" name=\"cl\" value=\"order_overview\">
</form>

    <table cellspacing=\"0\" cellpadding=\"0\" border=\"0\" width=\"98%\">
    <tr>
        <td valign=\"top\" class=\"edittext\" width=\"50%\">
        ";
        // line 18
        if (($context["edit"] ?? null)) {
            // line 19
            echo "            <table width=\"200\" border=\"0\" cellspacing=\"0\" cellpadding=\"0\" nowrap>
            <tr><td class=\"edittext\" valign=\"top\">
            ";
            // line 21
            $this->displayBlock('admin_order_overview_billingaddress', $context, $blocks);
            // line 41
            echo "            </td>
            ";
            // line 42
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["edit"] ?? null), "oxorder__oxdelstreet", [], "any", false, false, false, 42), "value", [], "any", false, false, false, 42)) {
                // line 43
                echo "            <td class=\"edittext\" valign=\"top\">
                ";
                // line 44
                $this->displayBlock('admin_order_overview_deliveryaddress', $context, $blocks);
                // line 56
                echo "            </td>
            ";
            }
            // line 58
            echo "            </tr></table>
            <b>";
            // line 59
            echo $this->extensions['OxidEsales\Twig\Extensions\TranslateExtension']->translate(["ident" => "GENERAL_ITEM"]);
            echo ":</b><br>
            <br>
            <table cellspacing=\"0\" cellpadding=\"0\" border=\"0\">
            ";
            // line 62
            $this->displayBlock('admin_order_overview_items', $context, $blocks);
            // line 84
            echo "            </table>
            <br>
            ";
            // line 86
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["edit"] ?? null), "oxorder__oxstorno", [], "any", false, false, false, 86), "value", [], "any", false, false, false, 86)) {
                // line 87
                echo "            <span class=\"orderstorno\">";
                echo $this->extensions['OxidEsales\Twig\Extensions\TranslateExtension']->translate(["ident" => "ORDER_OVERVIEW_STORNO"]);
                echo "</span><br><br>
            ";
            }
            // line 89
            echo "            <b>";
            echo $this->extensions['OxidEsales\Twig\Extensions\TranslateExtension']->translate(["ident" => "GENERAL_ATALL"]);
            echo ": </b><br><br>
            ";
            // line 90
            $this->displayBlock('admin_order_overview_total', $context, $blocks);
            // line 93
            echo "
            <br>
            <table>
            ";
            // line 96
            $this->displayBlock('admin_order_overview_checkout', $context, $blocks);
            // line 106
            echo "            </table>

            <br>
            ";
            // line 109
            if (twig_get_attribute($this->env, $this->source, ($context["paymentType"] ?? null), "__get", ["aDynValues"], "method", false, false, false, 109)) {
                // line 110
                echo "                <table cellspacing=\"0\" cellpadding=\"0\" border=\"0\">
                ";
                // line 111
                $this->displayBlock('admin_order_overview_dynamic', $context, $blocks);
                // line 125
                echo "                </table><br>
            ";
            }
            // line 127
            echo "            ";
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["edit"] ?? null), "oxorder__oxremark", [], "any", false, false, false, 127), "value", [], "any", false, false, false, 127)) {
                // line 128
                echo "            <b>";
                echo $this->extensions['OxidEsales\Twig\Extensions\TranslateExtension']->translate(["ident" => "GENERAL_REMARK"]);
                echo "</b>
            <table cellspacing=\"0\" cellpadding=\"0\" border=\"0\">
                <tr>
                    <td class=\"edittext wrap\">";
                // line 131
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["edit"] ?? null), "oxorder__oxremark", [], "any", false, false, false, 131), "value", [], "any", false, false, false, 131), "html", null, true);
                echo "</td>
                </tr>
            </table>
            ";
            }
            // line 135
            echo "        ";
        }
        // line 136
        echo "        </td>
        <td>&nbsp;&nbsp;
        </td>
        <td valign=\"top\" class=\"edittext\">
            ";
        // line 140
        if (($context["edit"] ?? null)) {
            // line 141
            echo "            ";
            $this->displayBlock('admin_order_overview_order_number', $context, $blocks);
            // line 144
            echo "            ";
            $this->displayBlock('admin_order_overview_customer_number', $context, $blocks);
            // line 148
            echo "            <br>
                <form name=\"myedit\" id=\"myedit\" action=\"";
            // line 149
            echo twig_get_attribute($this->env, $this->source, ($context["oViewConf"] ?? null), "getSelfLink", [], "method", false, false, false, 149);
            echo "\" method=\"post\">
                ";
            // line 150
            echo twig_get_attribute($this->env, $this->source, ($context["oViewConf"] ?? null), "getHiddenSid", [], "method", false, false, false, 150);
            echo "
                <input type=\"hidden\" name=\"cl\" value=\"order_overview\">
                <input type=\"hidden\" name=\"fnc\" value=\"changefolder\">
                <input type=\"hidden\" name=\"oxid\" value=\"";
            // line 153
            echo twig_escape_filter($this->env, ($context["oxid"] ?? null), "html", null, true);
            echo "\">
                <input type=\"hidden\" name=\"folderclass\" value=\"oxorder\">
                ";
            // line 155
            $this->displayBlock('admin_order_overview_folder_form', $context, $blocks);
            // line 165
            echo "                </form>
            ";
        }
        // line 167
        echo "            ";
        if ((($context["edit"] ?? null) && twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["edit"] ?? null), "oxorder__oxtransstatus", [], "any", false, false, false, 167), "value", [], "any", false, false, false, 167))) {
            // line 168
            echo "                ";
            $this->displayBlock('admin_order_overview_status', $context, $blocks);
            // line 171
            echo "            ";
        }
        // line 172
        echo "            <br>
            <b>";
        // line 173
        echo $this->extensions['OxidEsales\Twig\Extensions\TranslateExtension']->translate(["ident" => "GENERAL_REVIEW"]);
        echo ": </b>
            <br>
            <table cellspacing=\"0\" cellpadding=\"0\" border=\"0\">
            ";
        // line 176
        $this->displayBlock('admin_order_overview_general', $context, $blocks);
        // line 210
        echo "            </table>
        <br>
        ";
        // line 212
        if (($context["edit"] ?? null)) {
            // line 213
            echo "        <table cellspacing=\"0\" cellpadding=\"0\" border=\"0\">
        <form name=\"sendorder\" id=\"sendorder\" action=\"";
            // line 214
            echo twig_get_attribute($this->env, $this->source, ($context["oViewConf"] ?? null), "getSelfLink", [], "method", false, false, false, 214);
            echo "\" method=\"post\">
        ";
            // line 215
            echo twig_get_attribute($this->env, $this->source, ($context["oViewConf"] ?? null), "getHiddenSid", [], "method", false, false, false, 215);
            echo "
        <input type=\"hidden\" name=\"cl\" value=\"order_overview\">
        <input type=\"hidden\" name=\"fnc\" value=\"sendorder\">
        <input type=\"hidden\" name=\"oxid\" value=\"";
            // line 218
            echo twig_escape_filter($this->env, ($context["oxid"] ?? null), "html", null, true);
            echo "\">
        <input type=\"hidden\" name=\"editval[oxorder__oxid]\" value=\"";
            // line 219
            echo twig_escape_filter($this->env, ($context["oxid"] ?? null), "html", null, true);
            echo "\">
        ";
            // line 220
            $this->displayBlock('admin_order_overview_send_form', $context, $blocks);
            // line 242
            echo "        ";
            if (twig_get_attribute($this->env, $this->source, ($context["oView"] ?? null), "canResetShippingDate", [], "method", false, false, false, 242)) {
                // line 243
                echo "        <form name=\"resetorder\" id=\"resetorder\" action=\"";
                echo twig_get_attribute($this->env, $this->source, ($context["oViewConf"] ?? null), "getSelfLink", [], "method", false, false, false, 243);
                echo "\" method=\"post\">
        ";
                // line 244
                echo twig_get_attribute($this->env, $this->source, ($context["oViewConf"] ?? null), "getHiddenSid", [], "method", false, false, false, 244);
                echo "
        <input type=\"hidden\" name=\"cl\" value=\"order_overview\">
        <input type=\"hidden\" name=\"fnc\" value=\"resetorder\">
        <input type=\"hidden\" name=\"oxid\" value=\"";
                // line 247
                echo twig_escape_filter($this->env, ($context["oxid"] ?? null), "html", null, true);
                echo "\">
        <input type=\"hidden\" name=\"editval[oxorder__oxid]\" value=\"";
                // line 248
                echo twig_escape_filter($this->env, ($context["oxid"] ?? null), "html", null, true);
                echo "\">
        ";
                // line 249
                $this->displayBlock('admin_order_overview_reset_form', $context, $blocks);
                // line 258
                echo "        </form>
        ";
            }
            // line 260
            echo "        </table>
        ";
        }
        // line 262
        echo "        </td>

        <td valign=\"top\" class=\"edittext\" align=\"right\">
            ";
        // line 265
        $this->displayBlock('admin_order_overview_export', $context, $blocks);
        // line 267
        echo "        </td>
    </tr>
    </table>
";
        // line 270
        $this->loadTemplate("@__main__/bottomnaviitem.html.twig", "@__main__/order_overview.html.twig", 270)->display($context);
        // line 271
        echo "</table>
";
        // line 272
        $this->loadTemplate("@__main__/bottomitem.html.twig", "@__main__/order_overview.html.twig", 272)->display($context);
    }

    // line 21
    public function block_admin_order_overview_billingaddress($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 22
        echo "                <b>";
        echo $this->extensions['OxidEsales\Twig\Extensions\TranslateExtension']->translate(["ident" => "GENERAL_BILLADDRESS"]);
        echo "</b><br>
                <br>
                ";
        // line 24
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["edit"] ?? null), "oxorder__oxbillcompany", [], "any", false, false, false, 24), "value", [], "any", false, false, false, 24)) {
            echo $this->extensions['OxidEsales\Twig\Extensions\TranslateExtension']->translate(["ident" => "GENERAL_COMPANY"]);
            echo " ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["edit"] ?? null), "oxorder__oxbillcompany", [], "any", false, false, false, 24), "value", [], "any", false, false, false, 24), "html", null, true);
            echo "<br>";
        }
        // line 25
        echo "                ";
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["edit"] ?? null), "oxorder__oxbilladdinfo", [], "any", false, false, false, 25), "value", [], "any", false, false, false, 25)) {
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["edit"] ?? null), "oxorder__oxbilladdinfo", [], "any", false, false, false, 25), "value", [], "any", false, false, false, 25), "html", null, true);
            echo "<br>";
        }
        // line 26
        echo "                <a class=\"jumplink\" href=\"";
        echo twig_get_attribute($this->env, $this->source, ($context["oViewConf"] ?? null), "getSelfLink", [], "method", false, false, false, 26);
        echo "cl=admin_user&oxid=";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["edit"] ?? null), "oxorder__oxuserid", [], "any", false, false, false, 26), "value", [], "any", false, false, false, 26), "html", null, true);
        echo "\" target=\"basefrm\" onclick=\"_homeExpActByName('admin_user');\">";
        echo twig_escape_filter($this->env, $this->extensions['OxidEsales\Twig\Extensions\Filters\TranslateSalutationExtension']->translateSalutation(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["edit"] ?? null), "oxorder__oxbillsal", [], "any", false, false, false, 26), "value", [], "any", false, false, false, 26)), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["edit"] ?? null), "oxorder__oxbillfname", [], "any", false, false, false, 26), "value", [], "any", false, false, false, 26), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["edit"] ?? null), "oxorder__oxbilllname", [], "any", false, false, false, 26), "value", [], "any", false, false, false, 26), "html", null, true);
        echo "</a><br>
                ";
        // line 27
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["edit"] ?? null), "oxorder__oxbillstreet", [], "any", false, false, false, 27), "value", [], "any", false, false, false, 27), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["edit"] ?? null), "oxorder__oxbillstreetnr", [], "any", false, false, false, 27), "value", [], "any", false, false, false, 27), "html", null, true);
        echo "<br>
                ";
        // line 28
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["edit"] ?? null), "oxorder__oxbillstateid", [], "any", false, false, false, 28), "value", [], "any", false, false, false, 28), "html", null, true);
        echo "
                ";
        // line 29
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["edit"] ?? null), "oxorder__oxbillzip", [], "any", false, false, false, 29), "value", [], "any", false, false, false, 29), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["edit"] ?? null), "oxorder__oxbillcity", [], "any", false, false, false, 29), "value", [], "any", false, false, false, 29), "html", null, true);
        echo "<br>
                ";
        // line 30
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["edit"] ?? null), "oxorder__oxbillcountry", [], "any", false, false, false, 30), "value", [], "any", false, false, false, 30), "html", null, true);
        echo "<br>
                ";
        // line 31
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["edit"] ?? null), "oxorder__oxbillcompany", [], "any", false, false, false, 31), "value", [], "any", false, false, false, 31) && twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["edit"] ?? null), "oxorder__oxbillustid", [], "any", false, false, false, 31), "value", [], "any", false, false, false, 31))) {
            // line 32
            echo "                    <br>
                    ";
            // line 33
            echo $this->extensions['OxidEsales\Twig\Extensions\TranslateExtension']->translate(["ident" => "ORDER_OVERVIEW_VATID"]);
            echo ":
                    ";
            // line 34
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["edit"] ?? null), "oxorder__oxbillustid", [], "any", false, false, false, 34), "value", [], "any", false, false, false, 34), "html", null, true);
            echo "<br>
                    ";
            // line 35
            $this->loadTemplate("@__main__/include/message_vat_check_failed.html.twig", "@__main__/order_overview.html.twig", 35)->display($context);
            // line 36
            echo "                ";
        }
        // line 37
        echo "                <br>
                ";
        // line 38
        echo $this->extensions['OxidEsales\Twig\Extensions\TranslateExtension']->translate(["ident" => "GENERAL_EMAIL"]);
        echo ": <a href=\"mailto:";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["edit"] ?? null), "oxorder__oxbillemail", [], "any", false, false, false, 38), "value", [], "any", false, false, false, 38), "html", null, true);
        echo "?subject=";
        echo twig_escape_filter($this->env, ($context["actshop"] ?? null), "html", null, true);
        echo " - ";
        echo $this->extensions['OxidEsales\Twig\Extensions\TranslateExtension']->translate(["ident" => "GENERAL_ORDERNUM"]);
        echo " ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["edit"] ?? null), "oxorder__oxordernr", [], "any", false, false, false, 38), "value", [], "any", false, false, false, 38), "html", null, true);
        echo "\" class=\"edittext\"><em>";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["edit"] ?? null), "oxorder__oxbillemail", [], "any", false, false, false, 38), "value", [], "any", false, false, false, 38), "html", null, true);
        echo "</em></a><br>
                <br>
            ";
    }

    // line 44
    public function block_admin_order_overview_deliveryaddress($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 45
        echo "                    <b>";
        echo $this->extensions['OxidEsales\Twig\Extensions\TranslateExtension']->translate(["ident" => "GENERAL_DELIVERYADDRESS"]);
        echo ":</b><br>
                    <br>
                    ";
        // line 47
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["edit"] ?? null), "oxorder__oxdelcompany", [], "any", false, false, false, 47), "value", [], "any", false, false, false, 47)) {
            echo $this->extensions['OxidEsales\Twig\Extensions\TranslateExtension']->translate(["ident" => "GENERAL_COMPANY"]);
            echo " ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["edit"] ?? null), "oxorder__oxdelcompany", [], "any", false, false, false, 47), "value", [], "any", false, false, false, 47), "html", null, true);
            echo "<br>";
        }
        // line 48
        echo "                    ";
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["edit"] ?? null), "oxorder__oxdeladdinfo", [], "any", false, false, false, 48), "value", [], "any", false, false, false, 48)) {
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["edit"] ?? null), "oxorder__oxdeladdinfo", [], "any", false, false, false, 48), "value", [], "any", false, false, false, 48), "html", null, true);
            echo "<br>";
        }
        // line 49
        echo "                    ";
        echo twig_escape_filter($this->env, $this->extensions['OxidEsales\Twig\Extensions\Filters\TranslateSalutationExtension']->translateSalutation(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["edit"] ?? null), "oxorder__oxdelsal", [], "any", false, false, false, 49), "value", [], "any", false, false, false, 49)), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["edit"] ?? null), "oxorder__oxdelfname", [], "any", false, false, false, 49), "value", [], "any", false, false, false, 49), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["edit"] ?? null), "oxorder__oxdellname", [], "any", false, false, false, 49), "value", [], "any", false, false, false, 49), "html", null, true);
        echo "<br>
                    ";
        // line 50
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["edit"] ?? null), "oxorder__oxdelstreet", [], "any", false, false, false, 50), "value", [], "any", false, false, false, 50), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["edit"] ?? null), "oxorder__oxdelstreetnr", [], "any", false, false, false, 50), "value", [], "any", false, false, false, 50), "html", null, true);
        echo "<br>
                    ";
        // line 51
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["edit"] ?? null), "oxorder__oxdelstateid", [], "any", false, false, false, 51), "value", [], "any", false, false, false, 51), "html", null, true);
        echo "
                    ";
        // line 52
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["edit"] ?? null), "oxorder__oxdelzip", [], "any", false, false, false, 52), "value", [], "any", false, false, false, 52), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["edit"] ?? null), "oxorder__oxdelcity", [], "any", false, false, false, 52), "value", [], "any", false, false, false, 52), "html", null, true);
        echo "<br>
                    ";
        // line 53
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["edit"] ?? null), "oxorder__oxdelcountry", [], "any", false, false, false, 53), "value", [], "any", false, false, false, 53), "html", null, true);
        echo "<br>
                    <br>
                ";
    }

    // line 62
    public function block_admin_order_overview_items($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 63
        echo "                ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["orderArticles"] ?? null));
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
            // line 64
            echo "                <tr>
                    <td valign=\"top\" class=\"edittext\">";
            // line 65
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["listitem"], "oxorderarticles__oxamount", [], "any", false, false, false, 65), "value", [], "any", false, false, false, 65), "html", null, true);
            echo " * </td>
                    <td valign=\"top\" class=\"edittext\">&nbsp;";
            // line 66
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["listitem"], "oxorderarticles__oxartnum", [], "any", false, false, false, 66), "value", [], "any", false, false, false, 66), "html", null, true);
            echo "</td>
                    <td valign=\"top\" class=\"edittext\">&nbsp;";
            // line 67
            echo twig_escape_filter($this->env, twig_striptags($this->extensions['OxidEsales\Twig\Extensions\Filters\TruncateExtension']->truncate(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["listitem"], "oxorderarticles__oxtitle", [], "any", false, false, false, 67), "value", [], "any", false, false, false, 67), 20, "")), "html", null, true);
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["listitem"], "oxwrapping__oxname", [], "any", false, false, false, 67), "value", [], "any", false, false, false, 67)) {
                echo "&nbsp;(";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["listitem"], "oxwrapping__oxname", [], "any", false, false, false, 67), "value", [], "any", false, false, false, 67), "html", null, true);
                echo ")&nbsp;";
            }
            echo "</td>
                    <td valign=\"top\" class=\"edittext\">&nbsp;";
            // line 68
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["listitem"], "oxorderarticles__oxselvariant", [], "any", false, false, false, 68), "value", [], "any", false, false, false, 68), "html", null, true);
            echo "</td>
                    ";
            // line 69
            if (twig_get_attribute($this->env, $this->source, ($context["edit"] ?? null), "isNettoMode", [], "method", false, false, false, 69)) {
                // line 70
                echo "                        <td valign=\"top\" class=\"edittext\">&nbsp;&nbsp;";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["listitem"], "getNetPriceFormated", [], "method", false, false, false, 70), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["edit"] ?? null), "oxorder__oxcurrency", [], "any", false, false, false, 70), "value", [], "any", false, false, false, 70), "html", null, true);
                echo "</td>
                    ";
            } else {
                // line 72
                echo "                        <td valign=\"top\" class=\"edittext\">&nbsp;&nbsp;";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["listitem"], "getTotalBrutPriceFormated", [], "method", false, false, false, 72), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["edit"] ?? null), "oxorder__oxcurrency", [], "any", false, false, false, 72), "value", [], "any", false, false, false, 72), "html", null, true);
                echo "</td>
                    ";
            }
            // line 74
            echo "                    ";
            if (twig_get_attribute($this->env, $this->source, $context["listitem"], "getPersParams", [], "method", false, false, false, 74)) {
                // line 75
                echo "                    <td valign=\"top\" class=\"edittext\">
                        ";
                // line 76
                $this->displayBlock('admin_order_overview_persparams', $context, $blocks);
                // line 79
                echo "                    </td>
                    ";
            }
            // line 81
            echo "                </tr>
                ";
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
        // line 83
        echo "            ";
    }

    // line 76
    public function block_admin_order_overview_persparams($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 77
        echo "                            ";
        $this->loadTemplate("@__main__/include/persparams.html.twig", "@__main__/order_overview.html.twig", 77)->display(twig_array_merge($context, ["persParams" => twig_get_attribute($this->env, $this->source, ($context["listitem"] ?? null), "getPersParams", [], "method", false, false, false, 77)]));
        // line 78
        echo "                        ";
    }

    // line 90
    public function block_admin_order_overview_total($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 91
        echo "                ";
        $this->loadTemplate("@__main__/include/order_info.html.twig", "@__main__/order_overview.html.twig", 91)->display($context);
        // line 92
        echo "            ";
    }

    // line 96
    public function block_admin_order_overview_checkout($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 97
        echo "                <tr>
                    <td class=\"edittext\">";
        // line 98
        echo $this->extensions['OxidEsales\Twig\Extensions\TranslateExtension']->translate(["ident" => "ORDER_OVERVIEW_PAYMENTTYPE"]);
        echo ": </td>
                    <td class=\"edittext\"><b>";
        // line 99
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["paymentType"] ?? null), "oxpayments__oxdesc", [], "any", false, false, false, 99), "value", [], "any", false, false, false, 99), "html", null, true);
        echo "</b></td>
                </tr>
                <tr>
                    <td class=\"edittext\">";
        // line 102
        echo $this->extensions['OxidEsales\Twig\Extensions\TranslateExtension']->translate(["ident" => "ORDER_OVERVIEW_DELTYPE"]);
        echo ": </td>
                    <td class=\"edittext\"><b>";
        // line 103
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["deliveryType"] ?? null), "oxdeliveryset__oxtitle", [], "any", false, false, false, 103), "value", [], "any", false, false, false, 103), "html", null, true);
        echo "</b><br></td>
                </tr>
            ";
    }

    // line 111
    public function block_admin_order_overview_dynamic($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 112
        echo "                    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["paymentType"] ?? null), "__get", ["aDynValues"], "method", false, false, false, 112));
        foreach ($context['_seq'] as $context["_key"] => $context["value"]) {
            // line 113
            echo "                    ";
            $context["ident"] = $this->extensions['OxidEsales\Twig\Extensions\Filters\CatExtension']->cat("ORDER_OVERVIEW_", twig_get_attribute($this->env, $this->source, $context["value"], "name", [], "any", false, false, false, 113));
            // line 114
            echo "                    ";
            $context["ident"] = twig_upper_filter($this->env, ($context["ident"] ?? null));
            // line 115
            echo "                    <tr>
                        <td class=\"edittext\">
                        ";
            // line 117
            echo $this->extensions['OxidEsales\Twig\Extensions\TranslateExtension']->translate(["ident" => ($context["ident"] ?? null)]);
            echo ":&nbsp;
                        </td>
                        <td class=\"edittext\">
                           ";
            // line 120
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["value"], "value", [], "any", false, false, false, 120), "html", null, true);
            echo "
                        </td>
                    </tr>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['value'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 124
        echo "                ";
    }

    // line 141
    public function block_admin_order_overview_order_number($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 142
        echo "                <b>";
        echo $this->extensions['OxidEsales\Twig\Extensions\TranslateExtension']->translate(["ident" => "GENERAL_ORDERNUM"]);
        echo ": </b>";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["edit"] ?? null), "oxorder__oxordernr", [], "any", false, false, false, 142), "value", [], "any", false, false, false, 142), "html", null, true);
        echo "<br>
            ";
    }

    // line 144
    public function block_admin_order_overview_customer_number($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 145
        echo "                ";
        $context["user"] = twig_get_attribute($this->env, $this->source, ($context["edit"] ?? null), "getOrderUser", [], "method", false, false, false, 145);
        // line 146
        echo "                <b>";
        echo $this->extensions['OxidEsales\Twig\Extensions\TranslateExtension']->translate(["ident" => "CUSTOMERNUM"]);
        echo ": </b><a class=\"jumplink\" href=\"";
        echo twig_get_attribute($this->env, $this->source, ($context["oViewConf"] ?? null), "getSelfLink", [], "method", false, false, false, 146);
        echo "cl=admin_user&oxid=";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["edit"] ?? null), "oxorder__oxuserid", [], "any", false, false, false, 146), "value", [], "any", false, false, false, 146), "html", null, true);
        echo "\" target=\"basefrm\" onclick=\"_homeExpActByName('admin_user');\">";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "oxuser__oxcustnr", [], "any", false, false, false, 146), "value", [], "any", false, false, false, 146), "html", null, true);
        echo "</a><br>
            ";
    }

    // line 155
    public function block_admin_order_overview_folder_form($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 156
        echo "                    ";
        echo $this->extensions['OxidEsales\Twig\Extensions\TranslateExtension']->translate(["ident" => "ORDER_OVERVIEW_INFOLDER"]);
        echo ":&nbsp;
                    <select name=\"setfolder\" class=\"folderselect\" onChange=\"document.myedit.submit();\" ";
        // line 157
        echo twig_escape_filter($this->env, ($context["readonly"] ?? null), "html", null, true);
        echo ">
                    ";
        // line 158
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["afolder"] ?? null));
        foreach ($context['_seq'] as $context["field"] => $context["color"]) {
            // line 159
            echo "                    <option value=\"";
            echo twig_escape_filter($this->env, $context["field"], "html", null, true);
            echo "\" ";
            if (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["edit"] ?? null), "oxorder__oxfolder", [], "any", false, false, false, 159), "value", [], "any", false, false, false, 159) == $context["field"]) || ($this->extensions['OxidEsales\Twig\Extensions\Filters\TranslateExtension']->translate($context["field"]) == twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["edit"] ?? null), "oxorder__oxfolder", [], "any", false, false, false, 159), "value", [], "any", false, false, false, 159)))) {
                echo "SELECTED";
            }
            echo " style=\"color: ";
            echo twig_escape_filter($this->env, $context["color"], "html", null, true);
            echo ";\">";
            echo $this->extensions['OxidEsales\Twig\Extensions\TranslateExtension']->translate(["ident" => $context["field"], "noerror" => true]);
            echo "</option>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['field'], $context['color'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 161
        echo "                    </select>
                    ";
        // line 162
        $this->loadTemplate("@__main__/inputhelp.html.twig", "@__main__/order_overview.html.twig", 162)->display(twig_array_merge($context, ["sHelpId" => $this->extensions['OxidEsales\Twig\Extensions\InputHelpExtension']->getHelpId("HELP_ORDER_OVERVIEW_INFOLDER"), "sHelpText" => $this->extensions['OxidEsales\Twig\Extensions\InputHelpExtension']->getHelpText("HELP_ORDER_OVERVIEW_INFOLDER")]));
        // line 163
        echo "                    &nbsp;&nbsp;
                ";
    }

    // line 168
    public function block_admin_order_overview_status($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 169
        echo "                    ";
        echo $this->extensions['OxidEsales\Twig\Extensions\TranslateExtension']->translate(["ident" => "ORDER_OVERVIEW_INTSTATUS"]);
        echo ":&nbsp;<b>";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["edit"] ?? null), "oxorder__oxtransstatus", [], "any", false, false, false, 169), "value", [], "any", false, false, false, 169), "html", null, true);
        echo "</b><br>
                ";
    }

    // line 176
    public function block_admin_order_overview_general($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 177
        echo "                <tr>
                    <td class=\"edittext\" height=\"20\">
                    ";
        // line 179
        echo $this->extensions['OxidEsales\Twig\Extensions\TranslateExtension']->translate(["ident" => "ORDER_OVERVIEW_ORDERAMTODAY"]);
        echo ":
                    </td>
                    <td class=\"edittext\">
                    &nbsp;<b>";
        // line 182
        echo twig_escape_filter($this->env, ($context["ordercnt"] ?? null), "html", null, true);
        echo "</b>
                    </td>
                </tr>
                <tr>
                    <td class=\"edittext\" height=\"20\">
                    ";
        // line 187
        echo $this->extensions['OxidEsales\Twig\Extensions\TranslateExtension']->translate(["ident" => "ORDER_OVERVIEW_ORDERSUMTODAY"]);
        echo ":
                    </td>
                    <td class=\"edittext\">
                    &nbsp;<b>";
        // line 190
        echo twig_escape_filter($this->env, ($context["ordersum"] ?? null), "html", null, true);
        echo "</b> ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["currency"] ?? null), "name", [], "any", false, false, false, 190), "html", null, true);
        echo "
                    </td>
                </tr>
                <tr>
                    <td class=\"edittext\" height=\"20\">
                    ";
        // line 195
        echo $this->extensions['OxidEsales\Twig\Extensions\TranslateExtension']->translate(["ident" => "ORDER_OVERVIEW_ORDERAMTOTAL"]);
        echo ":
                    </td>
                    <td class=\"edittext\">
                    &nbsp;<b>";
        // line 198
        echo twig_escape_filter($this->env, ($context["ordertotalcnt"] ?? null), "html", null, true);
        echo "</b>
                    </td>
                </tr>
                <tr>
                    <td class=\"edittext\" height=\"20\">
                    ";
        // line 203
        echo $this->extensions['OxidEsales\Twig\Extensions\TranslateExtension']->translate(["ident" => "ORDER_OVERVIEW_ORDERSUMTOTAL"]);
        echo ":
                    </td>
                    <td class=\"edittext\">
                    &nbsp;<b>";
        // line 206
        echo twig_escape_filter($this->env, ($context["ordertotalsum"] ?? null), "html", null, true);
        echo "</b> ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["currency"] ?? null), "name", [], "any", false, false, false, 206), "html", null, true);
        echo "
                    </td>
                </tr>
            ";
    }

    // line 220
    public function block_admin_order_overview_send_form($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 221
        echo "            <tr>
                <td class=\"edittext\">
                </td>
                <td class=\"edittext\" style=\"border : 1px #A9A9A9; border-style : solid solid solid solid; padding-top: 5px; padding-bottom: 5px; padding-right: 5px; padding-left: 5px;\">
                    <input type=\"submit\" class=\"edittext\" name=\"save\" value=\"&nbsp;&nbsp;";
        // line 225
        echo $this->extensions['OxidEsales\Twig\Extensions\TranslateExtension']->translate(["ident" => "GENERAL_NOWSEND"]);
        echo "&nbsp;&nbsp;\" ";
        echo twig_escape_filter($this->env, ($context["readonly"] ?? null), "html", null, true);
        echo "><br>
                    ";
        // line 226
        echo $this->extensions['OxidEsales\Twig\Extensions\TranslateExtension']->translate(["ident" => "GENERAL_SENDEMAIL"]);
        echo " <input class=\"edittext\" type=\"checkbox\" name=\"sendmail\" value='1' ";
        echo twig_escape_filter($this->env, ($context["readonly"] ?? null), "html", null, true);
        echo ">
                </td>
            </tr>
            </form>
            <tr>
                <td class=\"edittext\">
                </td>
                <td class=\"edittext\" valign=\"bottom\"><br>
                ";
        // line 234
        if (twig_get_attribute($this->env, $this->source, ($context["oView"] ?? null), "canResetShippingDate", [], "method", false, false, false, 234)) {
            // line 235
            echo "                    <b>";
            echo $this->extensions['OxidEsales\Twig\Extensions\TranslateExtension']->translate(["ident" => "GENERAL_SENDON"]);
            echo "</b><b>";
            echo twig_escape_filter($this->env, $this->extensions['OxidEsales\Twig\Extensions\Filters\FormatDateExtension']->formatDate(twig_get_attribute($this->env, $this->source, ($context["edit"] ?? null), "oxorder__oxsenddate", [], "any", false, false, false, 235), "datetime", true), "html", null, true);
            echo "</b>
                ";
        } else {
            // line 237
            echo "                    <b>";
            echo $this->extensions['OxidEsales\Twig\Extensions\TranslateExtension']->translate(["ident" => "GENERAL_NOSENT"]);
            echo "</b>
                ";
        }
        // line 239
        echo "                </td>
            </tr>
        ";
    }

    // line 249
    public function block_admin_order_overview_reset_form($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 250
        echo "            <tr>
                <td class=\"edittext\">
                </td>
                <td class=\"edittext\"><br>
                    <input type=\"submit\" class=\"edittext\" name=\"save\" value=\"";
        // line 254
        echo $this->extensions['OxidEsales\Twig\Extensions\TranslateExtension']->translate(["ident" => "GENERAL_SETBACKSENDTIME"]);
        echo "\" ";
        echo twig_escape_filter($this->env, ($context["readonly"] ?? null), "html", null, true);
        echo ">
                </td>
            </tr>
        ";
    }

    // line 265
    public function block_admin_order_overview_export($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 266
        echo "            ";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@__main__/order_overview.html.twig";
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
        return array (  889 => 266,  885 => 265,  875 => 254,  869 => 250,  865 => 249,  859 => 239,  853 => 237,  845 => 235,  843 => 234,  830 => 226,  824 => 225,  818 => 221,  814 => 220,  804 => 206,  798 => 203,  790 => 198,  784 => 195,  774 => 190,  768 => 187,  760 => 182,  754 => 179,  750 => 177,  746 => 176,  737 => 169,  733 => 168,  728 => 163,  726 => 162,  723 => 161,  706 => 159,  702 => 158,  698 => 157,  693 => 156,  689 => 155,  676 => 146,  673 => 145,  669 => 144,  660 => 142,  656 => 141,  652 => 124,  642 => 120,  636 => 117,  632 => 115,  629 => 114,  626 => 113,  621 => 112,  617 => 111,  610 => 103,  606 => 102,  600 => 99,  596 => 98,  593 => 97,  589 => 96,  585 => 92,  582 => 91,  578 => 90,  574 => 78,  571 => 77,  567 => 76,  563 => 83,  548 => 81,  544 => 79,  542 => 76,  539 => 75,  536 => 74,  528 => 72,  520 => 70,  518 => 69,  514 => 68,  505 => 67,  501 => 66,  497 => 65,  494 => 64,  476 => 63,  472 => 62,  465 => 53,  459 => 52,  455 => 51,  449 => 50,  440 => 49,  434 => 48,  427 => 47,  421 => 45,  417 => 44,  400 => 38,  397 => 37,  394 => 36,  392 => 35,  388 => 34,  384 => 33,  381 => 32,  379 => 31,  375 => 30,  369 => 29,  365 => 28,  359 => 27,  346 => 26,  340 => 25,  333 => 24,  327 => 22,  323 => 21,  319 => 272,  316 => 271,  314 => 270,  309 => 267,  307 => 265,  302 => 262,  298 => 260,  294 => 258,  292 => 249,  288 => 248,  284 => 247,  278 => 244,  273 => 243,  270 => 242,  268 => 220,  264 => 219,  260 => 218,  254 => 215,  250 => 214,  247 => 213,  245 => 212,  241 => 210,  239 => 176,  233 => 173,  230 => 172,  227 => 171,  224 => 168,  221 => 167,  217 => 165,  215 => 155,  210 => 153,  204 => 150,  200 => 149,  197 => 148,  194 => 144,  191 => 141,  189 => 140,  183 => 136,  180 => 135,  173 => 131,  166 => 128,  163 => 127,  159 => 125,  157 => 111,  154 => 110,  152 => 109,  147 => 106,  145 => 96,  140 => 93,  138 => 90,  133 => 89,  127 => 87,  125 => 86,  121 => 84,  119 => 62,  113 => 59,  110 => 58,  106 => 56,  104 => 44,  101 => 43,  99 => 42,  96 => 41,  94 => 21,  90 => 19,  88 => 18,  78 => 11,  74 => 10,  70 => 9,  67 => 8,  63 => 6,  59 => 4,  57 => 3,  54 => 2,  52 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@__main__/order_overview.html.twig", "/var/www/html/source/Application/views/admin_twig/tpl/order_overview.html.twig");
    }
}
