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

/* @__main__/tooltips.html.twig */
class __TwigTemplate_4dffad32598c71d33fd914aad71d7061 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "<script language=javascript type=\"text/javascript\">
<!--
function getOffset(el)
{
    var _x = 0;
    var _y = 0;
    while(el && !isNaN(el.offsetLeft) && !isNaN(el.offsetTop)) {
        _x += el.offsetLeft - el.scrollLeft;
        _y += el.offsetTop - el.scrollTop;
        el = el.offsetParent;
    }
    return { top: _y, left: _x };
}
function popUp(evt,currElem)
{
    var popUpWin = document.getElementById(currElem);
    var obj = null;
    if (evt.target) obj = evt.target;
        else if (evt.srcElement) obj = evt.srcElement;
    if (obj === null) return;
    if (obj.nodeType == 3) // defeat Safari bug
        obj = obj.parentNode;

    var offset = getOffset(obj);
    var x = offset.left + obj.offsetWidth + 5;
    var y = offset.top;

    // fix bug #6061
    if((x + popUpWin.offsetWidth) > window.innerWidth) {
        x = offset.left - popUpWin.offsetWidth - 5;
    }
    
    popUpWin.style.top = Math.max(2,y)+'px';
    popUpWin.style.left= Math.max(2,x)+'px';
    popUpWin.style.visibility = \"visible\";
    window.status = \"\";
}
function popDown(currElem)
{
    var popUpWin = document.getElementById(currElem);
    popUpWin.style.visibility =\"hidden\"
}
// End hiding script -->
</script>

<span class=\"popUpStyle\" id=\"user_new\" style=\"position: absolute;visibility: hidden;top:0;left:0;\">";
        // line 46
        echo $this->extensions['OxidEsales\Twig\Extensions\TranslateExtension']->translate(["ident" => "TOOLTIPS_NEWUSER"]);
        echo "</span>
<span class=\"popUpStyle\" id=\"user_result\" style=\"position: absolute;visibility: hidden;top:0;left:0;\">";
        // line 47
        echo $this->extensions['OxidEsales\Twig\Extensions\TranslateExtension']->translate(["ident" => "TOOLTIPS_OPENUSERLIST"]);
        echo "</span>
<span class=\"popUpStyle\" id=\"user_newaddress\" style=\"position: absolute;visibility: hidden;top:0;left:0;\">";
        // line 48
        echo $this->extensions['OxidEsales\Twig\Extensions\TranslateExtension']->translate(["ident" => "TOOLTIPS_NEWADDRESS"]);
        echo "</span>
<span class=\"popUpStyle\" id=\"user_newpayment\" style=\"position: absolute;visibility: hidden;top:0;left:0;\">";
        // line 49
        echo $this->extensions['OxidEsales\Twig\Extensions\TranslateExtension']->translate(["ident" => "TOOLTIPS_NEWUSERPAYMENT"]);
        echo "</span>
<span class=\"popUpStyle\" id=\"user_newremark\" style=\"position: absolute;visibility: hidden;top:0;left:0;\">";
        // line 50
        echo $this->extensions['OxidEsales\Twig\Extensions\TranslateExtension']->translate(["ident" => "TOOLTIPS_NEWREMARK"]);
        echo "</span>
<span class=\"popUpStyle\" id=\"item_delete\" style=\"position: absolute;visibility: hidden;top:0;left:0;\">";
        // line 51
        echo $this->extensions['OxidEsales\Twig\Extensions\TranslateExtension']->translate(["ident" => "TOOLTIPS_ITEMDELETE"]);
        echo "</span>
<span class=\"popUpStyle\" id=\"item_storno\" style=\"position: absolute;visibility: hidden;top:0;left:0;\">";
        // line 52
        echo $this->extensions['OxidEsales\Twig\Extensions\TranslateExtension']->translate(["ident" => "TOOLTIPS_ITEMSTORNO"]);
        echo "</span>
<span class=\"popUpStyle\" id=\"payment_new\" style=\"position: absolute;visibility: hidden;top:0;left:0;\">";
        // line 53
        echo $this->extensions['OxidEsales\Twig\Extensions\TranslateExtension']->translate(["ident" => "TOOLTIPS_NEWPAYMENT"]);
        echo "</span>
<span class=\"popUpStyle\" id=\"addsumtype\" style=\"position: absolute;visibility: hidden; z-index: 1;\">";
        // line 54
        echo $this->extensions['OxidEsales\Twig\Extensions\TranslateExtension']->translate(["ident" => "TOOLTIPS_ADDSUMTYPE"]);
        echo "</span>
<span class=\"popUpStyle\" id=\"addsumitmtype\" style=\"position: absolute;visibility: hidden; z-index: 1;\">";
        // line 55
        echo $this->extensions['OxidEsales\Twig\Extensions\TranslateExtension']->translate(["ident" => "TOOLTIPS_ADDSUMITMTYPE"]);
        echo "</span>
<span class=\"popUpStyle\" id=\"shop_new\" style=\"position: absolute;visibility: hidden;top:0;left:0;\">";
        // line 56
        echo $this->extensions['OxidEsales\Twig\Extensions\TranslateExtension']->translate(["ident" => "TOOLTIPS_NEWSHOP"]);
        echo "</span>
<span class=\"popUpStyle\" id=\"usergroup_new\" style=\"position: absolute;visibility: hidden;top:0;left:0;\">";
        // line 57
        echo $this->extensions['OxidEsales\Twig\Extensions\TranslateExtension']->translate(["ident" => "TOOLTIPS_NEWUSERGROUP"]);
        echo "</span>
<span class=\"popUpStyle\" id=\"category_new\" style=\"position: absolute;visibility: hidden;top:0;left:0;\">";
        // line 58
        echo $this->extensions['OxidEsales\Twig\Extensions\TranslateExtension']->translate(["ident" => "TOOLTIPS_NEWCATEGORY"]);
        echo "</span>
<span class=\"popUpStyle\" id=\"category_resetnrofarticles\" style=\"position: absolute;visibility: hidden;top:0;left:0;\">";
        // line 59
        echo $this->extensions['OxidEsales\Twig\Extensions\TranslateExtension']->translate(["ident" => "TOOLTIPS_RESETNROFARTICLESINCAT"]);
        echo "</span>
<span class=\"popUpStyle\" id=\"category_recalcnrofarticles\" style=\"position: absolute;visibility: hidden;top:0;left:0;\">";
        // line 60
        echo $this->extensions['OxidEsales\Twig\Extensions\TranslateExtension']->translate(["ident" => "TOOLTIPS_RECALCNROFARTICLESINCAT"]);
        echo "</span>
<span class=\"popUpStyle\" id=\"vendor_recalcnrofarticles\" style=\"position: absolute;visibility: hidden;top:0;left:0;\">";
        // line 61
        echo $this->extensions['OxidEsales\Twig\Extensions\TranslateExtension']->translate(["ident" => "TOOLTIPS_RECALCNROFARTICLESINVND"]);
        echo "</span>
<span class=\"popUpStyle\" id=\"manufacturer_recalcnrofarticles\" style=\"position: absolute;visibility: hidden;top:0;left:0;\">";
        // line 62
        echo $this->extensions['OxidEsales\Twig\Extensions\TranslateExtension']->translate(["ident" => "TOOLTIPS_RECALCNROFARTICLESINMAN"]);
        echo "</span>
<span class=\"popUpStyle\" id=\"mallcategory_new\" style=\"position: absolute;visibility: hidden;top:0;left:0;\">";
        // line 63
        echo $this->extensions['OxidEsales\Twig\Extensions\TranslateExtension']->translate(["ident" => "TOOLTIPS_NEWMALLCAT"]);
        echo "</span>
<span class=\"popUpStyle\" id=\"article_new\" style=\"position: absolute;visibility: hidden;top:0;left:0;\">";
        // line 64
        echo $this->extensions['OxidEsales\Twig\Extensions\TranslateExtension']->translate(["ident" => "TOOLTIPS_NEWARTICLE"]);
        echo "</span>
<span class=\"popUpStyle\" id=\"article_vat\" style=\"position: absolute;visibility: hidden;top:0;left:0;\">";
        // line 65
        echo $this->extensions['OxidEsales\Twig\Extensions\TranslateExtension']->translate(["ident" => "TOOLTIPS_ARTICLEVAT"]);
        echo "</span>
<span class=\"popUpStyle\" id=\"article_vonbis\" style=\"position: absolute;visibility: hidden;top:0;left:0;\">";
        // line 66
        echo $this->extensions['OxidEsales\Twig\Extensions\TranslateExtension']->translate(["ident" => "TOOLTIPS_TIMEFORMAT"]);
        echo twig_escape_filter($this->env, $this->extensions['OxidEsales\Twig\Extensions\Filters\FormatDateExtension']->formatDate($this->extensions['OxidEsales\Twig\Extensions\Filters\DateFormatExtension']->dateFormat("now", "%Y-%m-%d %H:%M:%S"), "datetime", true), "html", null, true);
        echo "</span>
<span class=\"popUpStyle\" id=\"article_preview\" style=\"position: absolute;visibility: hidden;top:0;left:0;\">";
        // line 67
        echo $this->extensions['OxidEsales\Twig\Extensions\TranslateExtension']->translate(["ident" => "TOOLTIPS_ARTICLEREVIEW"]);
        echo "</span>
<span class=\"popUpStyle\" id=\"article_stock\" style=\"position: absolute;visibility: hidden;top:0;left:0;\">";
        // line 68
        echo $this->extensions['OxidEsales\Twig\Extensions\TranslateExtension']->translate(["ident" => "TOOLTIPS_ARTICLESTOCK"]);
        echo "</span>
<span class=\"popUpStyle\" id=\"article_delivery\" style=\"position: absolute;visibility: hidden;top:0;left:0;\">";
        // line 69
        echo $this->extensions['OxidEsales\Twig\Extensions\TranslateExtension']->translate(["ident" => "TOOLTIPS_ARTICLEDELIVERY"]);
        echo twig_escape_filter($this->env, $this->extensions['OxidEsales\Twig\Extensions\Filters\FormatDateExtension']->formatDate($this->extensions['OxidEsales\Twig\Extensions\Filters\DateFormatExtension']->dateFormat("now", "%Y-%m-%d %H:%M:%S"), "date", true), "html", null, true);
        echo "</span>
<span class=\"popUpStyle\" id=\"article_template\" style=\"position: absolute;visibility: hidden;top:0;left:0;\">";
        // line 70
        echo $this->extensions['OxidEsales\Twig\Extensions\TranslateExtension']->translate(["ident" => "TOOLTIPS_ARTICLETEMPLATE"]);
        echo "</span>
<span class=\"popUpStyle\" id=\"article_urlimg\" style=\"position: absolute;visibility: hidden;top:0;left:0;\">";
        // line 71
        echo $this->extensions['OxidEsales\Twig\Extensions\TranslateExtension']->translate(["ident" => "TOOLTIPS_ARTICLEURLIMG"]);
        echo "</span>
<span class=\"popUpStyle\" id=\"article_unit\" style=\"position: absolute;visibility: hidden;top:0;left:0;\">";
        // line 72
        echo $this->extensions['OxidEsales\Twig\Extensions\TranslateExtension']->translate(["ident" => "TOOLTIPS_ARTICLEUNITDESCRIPTION"]);
        echo "</span>
<span class=\"popUpStyle\" id=\"attribute_new\" style=\"position: absolute;visibility: hidden;top:0;left:0;\">";
        // line 73
        echo $this->extensions['OxidEsales\Twig\Extensions\TranslateExtension']->translate(["ident" => "TOOLTIPS_NEWITEMS"]);
        echo "</span>
<span class=\"popUpStyle\" id=\"article_variant_new\" style=\"position: absolute;visibility: hidden;top:0;left:0;\">";
        // line 74
        echo $this->extensions['OxidEsales\Twig\Extensions\TranslateExtension']->translate(["ident" => "TOOLTIPS_NEWVAR1"]);
        echo " ";
        if (($context["issubvariant"] ?? null)) {
            echo $this->extensions['OxidEsales\Twig\Extensions\TranslateExtension']->translate(["ident" => "TOOLTIPS_NEWVAR2"]);
        }
        echo $this->extensions['OxidEsales\Twig\Extensions\TranslateExtension']->translate(["ident" => "TOOLTIPS_NEWVAR3"]);
        echo "</span>
<span class=\"popUpStyle\" id=\"selectlist_new\" style=\"position: absolute;visibility: hidden;top:0;left:0;\">";
        // line 75
        echo $this->extensions['OxidEsales\Twig\Extensions\TranslateExtension']->translate(["ident" => "TOOLTIPS_NEWSELECTLIST"]);
        echo "</span>
<span class=\"popUpStyle\" id=\"selectlist_valdesc\" style=\"position: absolute;visibility: hidden;top:0;left:0;\">";
        // line 76
        echo $this->extensions['OxidEsales\Twig\Extensions\TranslateExtension']->translate(["ident" => "TOOLTIPS_VALDESC"]);
        echo "</span>
<span class=\"popUpStyle\" id=\"discount_new\" style=\"position: absolute;visibility: hidden;top:0;left:0;\">";
        // line 77
        echo $this->extensions['OxidEsales\Twig\Extensions\TranslateExtension']->translate(["ident" => "TOOLTIPS_NEWDISCOUNT"]);
        echo "</span>
<span class=\"popUpStyle\" id=\"vat_new\" style=\"position: absolute;visibility: hidden;top:0;left:0;\">";
        // line 78
        echo $this->extensions['OxidEsales\Twig\Extensions\TranslateExtension']->translate(["ident" => "TOOLTIPS_NEWMWST"]);
        echo "</span>
<span class=\"popUpStyle\" id=\"delivery_new\" style=\"position: absolute;visibility: hidden;top:0;left:0;\">";
        // line 79
        echo $this->extensions['OxidEsales\Twig\Extensions\TranslateExtension']->translate(["ident" => "TOOLTIPS_NEWDELIVERY"]);
        echo "</span>
<span class=\"popUpStyle\" id=\"deliveryset_new\" style=\"position: absolute;visibility: hidden;top:0;left:0;\">";
        // line 80
        echo $this->extensions['OxidEsales\Twig\Extensions\TranslateExtension']->translate(["ident" => "TOOLTIPS_NEWDELIVERYSET"]);
        echo "</span>
<span class=\"popUpStyle\" id=\"order_date\" style=\"position: absolute;visibility: hidden;top:0;left:0;\">";
        // line 81
        echo $this->extensions['OxidEsales\Twig\Extensions\TranslateExtension']->translate(["ident" => "TOOLTIPS_FORMAT"]);
        echo "</span>
<span class=\"popUpStyle\" id=\"voucher_new\" style=\"position: absolute;visibility: hidden;top:0;left:0;\">";
        // line 82
        echo $this->extensions['OxidEsales\Twig\Extensions\TranslateExtension']->translate(["ident" => "TOOLTIPS_NEWVOUCHER"]);
        echo "</span>
<span class=\"popUpStyle\" id=\"category_refresh\" style=\"position: absolute;visibility: hidden;top:0;left:0;\">";
        // line 83
        echo $this->extensions['OxidEsales\Twig\Extensions\TranslateExtension']->translate(["ident" => "TOOLTIPS_NEWCATTREE"]);
        echo "</span>
<span class=\"popUpStyle\" id=\"editvariant\" style=\"position: absolute;visibility: hidden;top:0;left:0;\">";
        // line 84
        echo $this->extensions['OxidEsales\Twig\Extensions\TranslateExtension']->translate(["ident" => "TOOLTIPS_EDITVAR"]);
        echo "</span>
<span class=\"popUpStyle\" id=\"links_new\" style=\"position: absolute;visibility: hidden;top:0;left:0;\">";
        // line 85
        echo $this->extensions['OxidEsales\Twig\Extensions\TranslateExtension']->translate(["ident" => "TOOLTIPS_NEWLINK"]);
        echo "</span>
<span class=\"popUpStyle\" id=\"actions_new\" style=\"position: absolute;visibility: hidden;top:0;left:0;\">";
        // line 86
        echo $this->extensions['OxidEsales\Twig\Extensions\TranslateExtension']->translate(["ident" => "TOOLTIPS_NEWACTIONS"]);
        echo "</span>
<span class=\"popUpStyle\" id=\"vendor_new\" style=\"position: absolute;visibility: hidden;top:0;left:0;\">";
        // line 87
        echo $this->extensions['OxidEsales\Twig\Extensions\TranslateExtension']->translate(["ident" => "TOOLTIPS_NEWVENDOR"]);
        echo "</span>
<span class=\"popUpStyle\" id=\"vendor_resetnrofarticles\" style=\"position: absolute;visibility: hidden;top:0;left:0;\">";
        // line 88
        echo $this->extensions['OxidEsales\Twig\Extensions\TranslateExtension']->translate(["ident" => "TOOLTIPS_RESETNROFARTICLESINVND"]);
        echo "</span>
<span class=\"popUpStyle\" id=\"manufacturer_new\" style=\"position: absolute;visibility: hidden;top:0;left:0;\">";
        // line 89
        echo $this->extensions['OxidEsales\Twig\Extensions\TranslateExtension']->translate(["ident" => "TOOLTIPS_NEWMANUFACTURER"]);
        echo "</span>
<span class=\"popUpStyle\" id=\"manufacturer_resetnrofarticles\" style=\"position: absolute;visibility: hidden;top:0;left:0;\">";
        // line 90
        echo $this->extensions['OxidEsales\Twig\Extensions\TranslateExtension']->translate(["ident" => "TOOLTIPS_RESETNROFARTICLESINMAN"]);
        echo "</span>
<span class=\"popUpStyle\" id=\"open_help\" style=\"position: absolute;visibility: hidden;top:0;left:0;\">";
        // line 91
        echo $this->extensions['OxidEsales\Twig\Extensions\TranslateExtension']->translate(["ident" => "TOOLTIPS_OPENHELP"]);
        echo "</span>
<span class=\"popUpStyle\" id=\"searchfieldoxdynamic\" style=\"position: absolute;visibility: hidden;top:0;left:0;\">";
        // line 92
        echo $this->extensions['OxidEsales\Twig\Extensions\TranslateExtension']->translate(["ident" => "TOOLTIPS_ARTLIST_SEARCHFIELDOXDYNAMIC"]);
        echo "</span>
<span class=\"popUpStyle\" id=\"searchfieldoxtitle\" style=\"position: absolute;visibility: hidden;top:0;left:0;\">";
        // line 93
        echo $this->extensions['OxidEsales\Twig\Extensions\TranslateExtension']->translate(["ident" => "TOOLTIPS_ARTLIST_SEARCHFIELDOXTITLE"]);
        echo "</span>
<span class=\"popUpStyle\" id=\"searchfieldoxshortdesc\" style=\"position: absolute;visibility: hidden;top:0;left:0;\">";
        // line 94
        echo $this->extensions['OxidEsales\Twig\Extensions\TranslateExtension']->translate(["ident" => "TOOLTIPS_ARTLIST_SEARCHFIELDOXSHORTDESC"]);
        echo "</span>
<span class=\"popUpStyle\" id=\"item_storno\" style=\"position: absolute;visibility: hidden;top:0;left:0;\">";
        // line 95
        echo $this->extensions['OxidEsales\Twig\Extensions\TranslateExtension']->translate(["ident" => "TOOLTIPS_ITEMSTORNO"]);
        echo "</span>
<span class=\"popUpStyle\" id=\"payment_new\" style=\"position: absolute;visibility: hidden;top:0;left:0;\">";
        // line 96
        echo $this->extensions['OxidEsales\Twig\Extensions\TranslateExtension']->translate(["ident" => "TOOLTIPS_NEWPAYMENT"]);
        echo "</span>
<span class=\"popUpStyle\" id=\"addsumtype\" style=\"position: absolute;visibility: hidden; z-index: 1;\">";
        // line 97
        echo $this->extensions['OxidEsales\Twig\Extensions\TranslateExtension']->translate(["ident" => "TOOLTIPS_ADDSUMTYPE"]);
        echo "</span>
<span class=\"popUpStyle\" id=\"addsumitmtype\" style=\"position: absolute;visibility: hidden; z-index: 1;\">";
        // line 98
        echo $this->extensions['OxidEsales\Twig\Extensions\TranslateExtension']->translate(["ident" => "TOOLTIPS_ADDSUMITMTYPE"]);
        echo "</span>
<span class=\"popUpStyle\" id=\"shop_new\" style=\"position: absolute;visibility: hidden;top:0;left:0;\">";
        // line 99
        echo $this->extensions['OxidEsales\Twig\Extensions\TranslateExtension']->translate(["ident" => "TOOLTIPS_NEWSHOP"]);
        echo "</span>
<span class=\"popUpStyle\" id=\"usergroup_new\" style=\"position: absolute;visibility: hidden;top:0;left:0;\">";
        // line 100
        echo $this->extensions['OxidEsales\Twig\Extensions\TranslateExtension']->translate(["ident" => "TOOLTIPS_NEWUSERGROUP"]);
        echo "</span>
<span class=\"popUpStyle\" id=\"category_new\" style=\"position: absolute;visibility: hidden;top:0;left:0;\">";
        // line 101
        echo $this->extensions['OxidEsales\Twig\Extensions\TranslateExtension']->translate(["ident" => "TOOLTIPS_NEWCATEGORY"]);
        echo "</span>
<span class=\"popUpStyle\" id=\"category_resetnrofarticles\" style=\"position: absolute;visibility: hidden;top:0;left:0;\">";
        // line 102
        echo $this->extensions['OxidEsales\Twig\Extensions\TranslateExtension']->translate(["ident" => "TOOLTIPS_RESETNROFARTICLESINCAT"]);
        echo "</span>
<span class=\"popUpStyle\" id=\"mallcategory_new\" style=\"position: absolute;visibility: hidden;top:0;left:0;\">";
        // line 103
        echo $this->extensions['OxidEsales\Twig\Extensions\TranslateExtension']->translate(["ident" => "TOOLTIPS_NEWMALLCAT"]);
        echo "</span>
<span class=\"popUpStyle\" id=\"article_new\" style=\"position: absolute;visibility: hidden;top:0;left:0;\">";
        // line 104
        echo $this->extensions['OxidEsales\Twig\Extensions\TranslateExtension']->translate(["ident" => "TOOLTIPS_NEWARTICLE"]);
        echo "</span>
<span class=\"popUpStyle\" id=\"article_vat\" style=\"position: absolute;visibility: hidden;top:0;left:0;\">";
        // line 105
        echo $this->extensions['OxidEsales\Twig\Extensions\TranslateExtension']->translate(["ident" => "TOOLTIPS_ARTICLEVAT"]);
        echo "</span>
<span class=\"popUpStyle\" id=\"article_vonbis\" style=\"position: absolute;visibility: hidden;top:0;left:0;\">";
        // line 106
        echo $this->extensions['OxidEsales\Twig\Extensions\TranslateExtension']->translate(["ident" => "TOOLTIPS_TIMEFORMAT"]);
        echo twig_escape_filter($this->env, $this->extensions['OxidEsales\Twig\Extensions\Filters\FormatDateExtension']->formatDate($this->extensions['OxidEsales\Twig\Extensions\Filters\DateFormatExtension']->dateFormat("now", "%Y-%m-%d %H:%M:%S"), "datetime", true), "html", null, true);
        echo "</span>
<span class=\"popUpStyle\" id=\"article_preview\" style=\"position: absolute;visibility: hidden;top:0;left:0;\">";
        // line 107
        echo $this->extensions['OxidEsales\Twig\Extensions\TranslateExtension']->translate(["ident" => "TOOLTIPS_ARTICLEREVIEW"]);
        echo "</span>
<span class=\"popUpStyle\" id=\"article_stock\" style=\"position: absolute;visibility: hidden;top:0;left:0;\">";
        // line 108
        echo $this->extensions['OxidEsales\Twig\Extensions\TranslateExtension']->translate(["ident" => "TOOLTIPS_ARTICLESTOCK"]);
        echo "</span>
<span class=\"popUpStyle\" id=\"article_delivery\" style=\"position: absolute;visibility: hidden;top:0;left:0;\">";
        // line 109
        echo $this->extensions['OxidEsales\Twig\Extensions\TranslateExtension']->translate(["ident" => "TOOLTIPS_ARTICLEDELIVERY"]);
        echo twig_escape_filter($this->env, $this->extensions['OxidEsales\Twig\Extensions\Filters\FormatDateExtension']->formatDate($this->extensions['OxidEsales\Twig\Extensions\Filters\DateFormatExtension']->dateFormat("now", "%Y-%m-%d %H:%M:%S"), "date", true), "html", null, true);
        echo "</span>
<span class=\"popUpStyle\" id=\"article_template\" style=\"position: absolute;visibility: hidden;top:0;left:0;\">";
        // line 110
        echo $this->extensions['OxidEsales\Twig\Extensions\TranslateExtension']->translate(["ident" => "TOOLTIPS_ARTICLETEMPLATE"]);
        echo "</span>
<span class=\"popUpStyle\" id=\"article_urlimg\" style=\"position: absolute;visibility: hidden;top:0;left:0;\">";
        // line 111
        echo $this->extensions['OxidEsales\Twig\Extensions\TranslateExtension']->translate(["ident" => "TOOLTIPS_ARTICLEURLIMG"]);
        echo "</span>
<span class=\"popUpStyle\" id=\"article_unit\" style=\"position: absolute;visibility: hidden;top:0;left:0;\">";
        // line 112
        echo $this->extensions['OxidEsales\Twig\Extensions\TranslateExtension']->translate(["ident" => "TOOLTIPS_ARTICLEUNITDESCRIPTION"]);
        echo "</span>
<span class=\"popUpStyle\" id=\"attribute_new\" style=\"position: absolute;visibility: hidden;top:0;left:0;\">";
        // line 113
        echo $this->extensions['OxidEsales\Twig\Extensions\TranslateExtension']->translate(["ident" => "TOOLTIPS_NEWITEMS"]);
        echo "</span>
<span class=\"popUpStyle\" id=\"article_variant_new\" style=\"position: absolute;visibility: hidden;top:0;left:0;\">";
        // line 114
        echo $this->extensions['OxidEsales\Twig\Extensions\TranslateExtension']->translate(["ident" => "TOOLTIPS_NEWVAR1"]);
        echo " ";
        if (($context["issubvariant"] ?? null)) {
            echo $this->extensions['OxidEsales\Twig\Extensions\TranslateExtension']->translate(["ident" => "TOOLTIPS_NEWVAR2"]);
        }
        echo $this->extensions['OxidEsales\Twig\Extensions\TranslateExtension']->translate(["ident" => "TOOLTIPS_NEWVAR3"]);
        echo "</span>
<span class=\"popUpStyle\" id=\"selectlist_new\" style=\"position: absolute;visibility: hidden;top:0;left:0;\">";
        // line 115
        echo $this->extensions['OxidEsales\Twig\Extensions\TranslateExtension']->translate(["ident" => "TOOLTIPS_NEWSELECTLIST"]);
        echo "</span>
<span class=\"popUpStyle\" id=\"selectlist_valdesc\" style=\"position: absolute;visibility: hidden;top:0;left:0;\">";
        // line 116
        echo $this->extensions['OxidEsales\Twig\Extensions\TranslateExtension']->translate(["ident" => "TOOLTIPS_VALDESC"]);
        echo "</span>
<span class=\"popUpStyle\" id=\"discount_new\" style=\"position: absolute;visibility: hidden;top:0;left:0;\">";
        // line 117
        echo $this->extensions['OxidEsales\Twig\Extensions\TranslateExtension']->translate(["ident" => "TOOLTIPS_NEWDISCOUNT"]);
        echo "</span>
<span class=\"popUpStyle\" id=\"vat_new\" style=\"position: absolute;visibility: hidden;top:0;left:0;\">";
        // line 118
        echo $this->extensions['OxidEsales\Twig\Extensions\TranslateExtension']->translate(["ident" => "TOOLTIPS_NEWMWST"]);
        echo "</span>
<span class=\"popUpStyle\" id=\"delivery_new\" style=\"position: absolute;visibility: hidden;top:0;left:0;\">";
        // line 119
        echo $this->extensions['OxidEsales\Twig\Extensions\TranslateExtension']->translate(["ident" => "TOOLTIPS_NEWDELIVERY"]);
        echo "</span>
<span class=\"popUpStyle\" id=\"deliveryset_new\" style=\"position: absolute;visibility: hidden;top:0;left:0;\">";
        // line 120
        echo $this->extensions['OxidEsales\Twig\Extensions\TranslateExtension']->translate(["ident" => "TOOLTIPS_NEWDELIVERYSET"]);
        echo "</span>
<span class=\"popUpStyle\" id=\"order_date\" style=\"position: absolute;visibility: hidden;top:0;left:0;\">";
        // line 121
        echo $this->extensions['OxidEsales\Twig\Extensions\TranslateExtension']->translate(["ident" => "TOOLTIPS_FORMAT"]);
        echo "</span>
<span class=\"popUpStyle\" id=\"voucher_new\" style=\"position: absolute;visibility: hidden;top:0;left:0;\">";
        // line 122
        echo $this->extensions['OxidEsales\Twig\Extensions\TranslateExtension']->translate(["ident" => "TOOLTIPS_NEWVOUCHER"]);
        echo "</span>
<span class=\"popUpStyle\" id=\"category_refresh\" style=\"position: absolute;visibility: hidden;top:0;left:0;\">";
        // line 123
        echo $this->extensions['OxidEsales\Twig\Extensions\TranslateExtension']->translate(["ident" => "TOOLTIPS_NEWCATTREE"]);
        echo "</span>
<span class=\"popUpStyle\" id=\"editvariant\" style=\"position: absolute;visibility: hidden;top:0;left:0;\">";
        // line 124
        echo $this->extensions['OxidEsales\Twig\Extensions\TranslateExtension']->translate(["ident" => "TOOLTIPS_EDITVAR"]);
        echo "</span>
<span class=\"popUpStyle\" id=\"links_new\" style=\"position: absolute;visibility: hidden;top:0;left:0;\">";
        // line 125
        echo $this->extensions['OxidEsales\Twig\Extensions\TranslateExtension']->translate(["ident" => "TOOLTIPS_NEWLINK"]);
        echo "</span>
<span class=\"popUpStyle\" id=\"actions_new\" style=\"position: absolute;visibility: hidden;top:0;left:0;\">";
        // line 126
        echo $this->extensions['OxidEsales\Twig\Extensions\TranslateExtension']->translate(["ident" => "TOOLTIPS_NEWACTIONS"]);
        echo "</span>
<span class=\"popUpStyle\" id=\"vendor_new\" style=\"position: absolute;visibility: hidden;top:0;left:0;\">";
        // line 127
        echo $this->extensions['OxidEsales\Twig\Extensions\TranslateExtension']->translate(["ident" => "TOOLTIPS_NEWVENDOR"]);
        echo "</span>
<span class=\"popUpStyle\" id=\"vendor_resetnrofarticles\" style=\"position: absolute;visibility: hidden;top:0;left:0;\">";
        // line 128
        echo $this->extensions['OxidEsales\Twig\Extensions\TranslateExtension']->translate(["ident" => "TOOLTIPS_RESETNROFARTICLESINVND"]);
        echo "</span>
<span class=\"popUpStyle\" id=\"manufacturer_new\" style=\"position: absolute;visibility: hidden;top:0;left:0;\">";
        // line 129
        echo $this->extensions['OxidEsales\Twig\Extensions\TranslateExtension']->translate(["ident" => "TOOLTIPS_NEWMANUFACTURER"]);
        echo "</span>
<span class=\"popUpStyle\" id=\"manufacturer_resetnrofarticles\" style=\"position: absolute;visibility: hidden;top:0;left:0;\">";
        // line 130
        echo $this->extensions['OxidEsales\Twig\Extensions\TranslateExtension']->translate(["ident" => "TOOLTIPS_RESETNROFARTICLESINMAN"]);
        echo "</span>
<span class=\"popUpStyle\" id=\"open_help\" style=\"position: absolute;visibility: hidden;top:0;left:0;\">";
        // line 131
        echo $this->extensions['OxidEsales\Twig\Extensions\TranslateExtension']->translate(["ident" => "TOOLTIPS_OPENHELP"]);
        echo "</span>
<span class=\"popUpStyle\" id=\"searchfieldoxdynamic\" style=\"position: absolute;visibility: hidden;top:0;left:0;\">";
        // line 132
        echo $this->extensions['OxidEsales\Twig\Extensions\TranslateExtension']->translate(["ident" => "TOOLTIPS_ARTLIST_SEARCHFIELDOXDYNAMIC"]);
        echo "</span>
<span class=\"popUpStyle\" id=\"searchfieldoxtitle\" style=\"position: absolute;visibility: hidden;top:0;left:0;\">";
        // line 133
        echo $this->extensions['OxidEsales\Twig\Extensions\TranslateExtension']->translate(["ident" => "TOOLTIPS_ARTLIST_SEARCHFIELDOXTITLE"]);
        echo "</span>
<span class=\"popUpStyle\" id=\"searchfieldoxshortdesc\" style=\"position: absolute;visibility: hidden;top:0;left:0;\">";
        // line 134
        echo $this->extensions['OxidEsales\Twig\Extensions\TranslateExtension']->translate(["ident" => "TOOLTIPS_ARTLIST_SEARCHFIELDOXSHORTDESC"]);
        echo "</span>

";
        // line 136
        $this->loadTemplate("@__main__/include/additional_tooltips.html.twig", "@__main__/tooltips.html.twig", 136)->display($context);
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@__main__/tooltips.html.twig";
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
        return array (  455 => 136,  450 => 134,  446 => 133,  442 => 132,  438 => 131,  434 => 130,  430 => 129,  426 => 128,  422 => 127,  418 => 126,  414 => 125,  410 => 124,  406 => 123,  402 => 122,  398 => 121,  394 => 120,  390 => 119,  386 => 118,  382 => 117,  378 => 116,  374 => 115,  365 => 114,  361 => 113,  357 => 112,  353 => 111,  349 => 110,  344 => 109,  340 => 108,  336 => 107,  331 => 106,  327 => 105,  323 => 104,  319 => 103,  315 => 102,  311 => 101,  307 => 100,  303 => 99,  299 => 98,  295 => 97,  291 => 96,  287 => 95,  283 => 94,  279 => 93,  275 => 92,  271 => 91,  267 => 90,  263 => 89,  259 => 88,  255 => 87,  251 => 86,  247 => 85,  243 => 84,  239 => 83,  235 => 82,  231 => 81,  227 => 80,  223 => 79,  219 => 78,  215 => 77,  211 => 76,  207 => 75,  198 => 74,  194 => 73,  190 => 72,  186 => 71,  182 => 70,  177 => 69,  173 => 68,  169 => 67,  164 => 66,  160 => 65,  156 => 64,  152 => 63,  148 => 62,  144 => 61,  140 => 60,  136 => 59,  132 => 58,  128 => 57,  124 => 56,  120 => 55,  116 => 54,  112 => 53,  108 => 52,  104 => 51,  100 => 50,  96 => 49,  92 => 48,  88 => 47,  84 => 46,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@__main__/tooltips.html.twig", "/var/www/html/source/Application/views/admin_twig/tpl/tooltips.html.twig");
    }
}
