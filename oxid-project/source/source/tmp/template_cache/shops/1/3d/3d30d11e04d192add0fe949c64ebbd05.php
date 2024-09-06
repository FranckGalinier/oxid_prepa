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

/* @__main__/start.html.twig */
class __TwigTemplate_19d00450550144b931788c44230cc103 extends Template
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
        echo "<!DOCTYPE HTML PUBLIC \"-//W3C//DTD HTML 4.0 Transitional//EN\">
<html style=\"border-top: 2px solid ";
        // line 2
        if ((twig_lower_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["oViewConf"] ?? null), "getEdition", [], "method", false, false, false, 2)) == "ee")) {
            echo "#006ab4";
        } else {
            echo "#c02124";
        }
        echo "; overflow: hidden; height: 100%;\">
<head>
    <title>";
        // line 4
        echo $this->extensions['OxidEsales\Twig\Extensions\TranslateExtension']->translate(["ident" => "GENERAL_ADMIN_TITLE"]);
        echo "</title>
    <link rel=\"shortcut icon\" href=\"";
        // line 5
        echo twig_get_attribute($this->env, $this->source, ($context["oViewConf"] ?? null), "getImageUrl", [], "method", false, false, false, 5);
        echo "favicon.ico\">
</head>
<script type=\"text/javascript\">
<!--//
sInitValue = \"[OXID Administrator]\";
sShopTitle = \"\";
sMenuItem  = \"\";
sMenuSubItem  = \"\";
sWorkArea  = \"\";
//
function setTitle()
{
    if (sShopTitle.length)
        document.title = \"[\" + sShopTitle + \"]\";
    else
        document.title = sInitValue;

    if (sMenuItem.length)
        document.title += \" - \" + sMenuItem;

    if (sMenuSubItem.length)
        document.title += \" - \" + sMenuSubItem;

    if (sWorkArea.length)
        document.title += \" - \" + sWorkArea;
}

function forceReloadingEditFrame()
{
    //forcing edit frame to reload after submit
    top.basefrm.edit.document.reloadFrame = true;
}

function forceReloadingListFrame( oxId )
{
    //forcing list frame to reload after submit
    top.basefrm.list.document.reloadFrame = true;
}

function reloadEditFrame()
{
    if (top.basefrm.edit) {
      if (top.basefrm.edit.document.reloadFrame) {
          var oTransfer = top.basefrm.edit.document.getElementById(\"transfer\");
          oTransfer.submit();
      }
    }
}

function reloadListFrame()
{
  if (top.basefrm.list) {
      if (top.basefrm.list.document.reloadFrame) {
          top.oxid.admin.updateList();
      }
  }
}

function reloadListEditFrames()
{
  reloadListFrame();
  reloadEditFrame();
}

function loadEditFrame(sUrl)
{
    top.basefrm.edit.document.location = sUrl;
}
//-->
</script>
<script type=\"text/javascript\" src=\"";
        // line 75
        echo twig_get_attribute($this->env, $this->source, ($context["oViewConf"] ?? null), "getResourceUrl", [], "method", false, false, false, 75);
        echo "oxid.js\"></script>
</html>

<frameset cols=\"200,*\" border=\"0\">
    <frame src=\"";
        // line 79
        echo twig_get_attribute($this->env, $this->source, ($context["oViewConf"] ?? null), "getSelfLink", [], "method", false, false, false, 79);
        echo "&cl=navigation\" name=\"navigation\" id=\"navigation\" frameborder=\"0\" scrolling=\"Auto\" noresize marginwidth=\"0\" marginheight=\"0\">
    <frameset  rows=\"54,*\" border=\"0\">
        <frame src=\"";
        // line 81
        echo twig_get_attribute($this->env, $this->source, ($context["oViewConf"] ?? null), "getSelfLink", [], "method", false, false, false, 81);
        echo "&cl=navigation&item=header.html.twig\" name=\"header\" id=\"header\" frameborder=\"0\" scrolling=\"No\" noresize marginwidth=\"0\" marginheight=\"0\">
        <frame src=\"";
        // line 82
        echo twig_get_attribute($this->env, $this->source, ($context["oViewConf"] ?? null), "getSelfLink", [], "method", false, false, false, 82);
        echo "&cl=navigation&item=home.html.twig\" name=\"basefrm\" id=\"basefrm\" frameborder=\"0\" scrolling=\"Auto\" noresize marginwidth=\"0\" marginheight=\"0\">
    </frameset>
</frameset>
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@__main__/start.html.twig";
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
        return array (  142 => 82,  138 => 81,  133 => 79,  126 => 75,  53 => 5,  49 => 4,  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@__main__/start.html.twig", "/var/www/html/source/Application/views/admin_twig/tpl/start.html.twig");
    }
}
