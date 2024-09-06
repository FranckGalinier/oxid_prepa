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

/* @__main__/widget/locator/listlocator.html.twig */
class __TwigTemplate_c0b323e884301fbbf035d35f6c681a3d extends Template
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
        echo "
";
        // line 2
        if ((($context["place"] ?? null) == "bottom")) {
            // line 3
            echo "    <div class=\"row\">
        <div class=\"col\">
            ";
            // line 5
            $this->loadTemplate("@__main__/widget/locator/paging.html.twig", "@__main__/widget/locator/listlocator.html.twig", 5)->display(twig_array_merge($context, ["pages" => ($context["locator"] ?? null), "place" => ($context["place"] ?? null)]));
            // line 6
            echo "        </div>
    </div>
";
        } else {
            // line 9
            echo "    <div class=\"d-md-flex w-100 mb-4 locator align-items-center\">
        ";
            // line 10
            $this->loadTemplate("@__main__/widget/locator/attributes.html.twig", "@__main__/widget/locator/listlocator.html.twig", 10)->display($context);
            // line 11
            echo "
        ";
            // line 12
            if (($context["sort"] ?? null)) {
                // line 13
                echo "            ";
                $this->loadTemplate("@__main__/widget/locator/sort.html.twig", "@__main__/widget/locator/listlocator.html.twig", 13)->display($context);
                // line 14
                echo "        ";
            }
            // line 15
            echo "        ";
            if (($context["itemsPerPage"] ?? null)) {
                // line 16
                echo "            ";
                $this->loadTemplate("@__main__/widget/locator/itemsperpage.html.twig", "@__main__/widget/locator/listlocator.html.twig", 16)->display($context);
                // line 17
                echo "        ";
            }
            // line 18
            echo "        ";
            if (($context["listDisplayType"] ?? null)) {
                // line 19
                echo "            ";
                $this->loadTemplate("@__main__/widget/locator/listdisplaytype.html.twig", "@__main__/widget/locator/listlocator.html.twig", 19)->display($context);
                // line 20
                echo "        ";
            }
            // line 21
            echo "    </div>
";
        }
        // line 23
        echo "
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@__main__/widget/locator/listlocator.html.twig";
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
        return array (  91 => 23,  87 => 21,  84 => 20,  81 => 19,  78 => 18,  75 => 17,  72 => 16,  69 => 15,  66 => 14,  63 => 13,  61 => 12,  58 => 11,  56 => 10,  53 => 9,  48 => 6,  46 => 5,  42 => 3,  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@__main__/widget/locator/listlocator.html.twig", "/var/www/html/source/Application/views/apex/tpl/widget/locator/listlocator.html.twig");
    }
}
