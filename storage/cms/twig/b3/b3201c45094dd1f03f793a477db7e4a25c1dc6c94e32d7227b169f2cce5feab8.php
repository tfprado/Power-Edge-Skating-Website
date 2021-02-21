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

/* C:\Web\Apache24\htdocs\power-edge-skating/themes/october-starter-kit/partials/layout/header.htm */
class __TwigTemplate_1ef870c3f494e8b5b840491965e0312392c8fdf7383cc6f37f9f202800699196 extends \Twig\Template
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
        echo "<nav class=\"navbar navbar-light ";
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "layout", [], "any", false, false, false, 1), "id", [], "any", false, false, false, 1) == "fixed-navigation")) {
            echo " fixed-top";
        }
        echo "\" style=\"background-color: #a1c5da\">
    <!-- <img style=\"width: 200px;\" src=\"";
        // line 2
        echo $this->extensions['System\Twig\Extension']->mediaFilter("logo-latest.png");
        echo "\" class=\"img-fluid\" alt=\"Power Edge Skating Logo\" /> -->
    <a class=\"navbar-brand mx-auto\" href=\"/\">
        <!-- <img src=\"";
        // line 4
        echo $this->extensions['System\Twig\Extension']->mediaFilter("logo-latest.png");
        echo "\" class=\"img-fluid\" alt=\"Power Edge Skating Logo\" /> -->
        <h1 class=\"top-header\">Power Edge Skating</h1>
    </a>
</nav>
<nav class=\"navbar navbar-expand-lg navbar-dark";
        // line 8
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "layout", [], "any", false, false, false, 8), "id", [], "any", false, false, false, 8) == "fixed-navigation")) {
            echo " fixed-top-navigation ";
        }
        echo "\" style=\"background-color: #125772\">
    <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarMain\" style=\"color:#cbcdd9;\"
        aria-controls=\"navbarMain\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
        <span class=\"navbar-toggler-icon\"></span>
    </button>

    <div class=\"collapse navbar-collapse\" id=\"navbarMain\">
        <!-- snip1211 -->
        <ul class=\"navbar-nav mx-auto snip1198\">
            <!--<li class=\"nav-item active\">
                <a class=\"nav-link ";
        // line 18
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, false, 18), "id", [], "any", false, false, false, 18) == "index")) {
            echo " active ";
        }
        echo "\" href=\"";
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("index");
        echo "\">Home</a>
            </li>
            <li class=\"nav-item\">
                <a class=\"nav-link disabled\" href=\"#\">Disabled</a>
            </li>-->
            ";
        // line 23
        $context['__cms_partial_params'] = [];
        $context['__cms_partial_params']['items'] = twig_get_attribute($this->env, $this->source, ($context["staticMenu"] ?? null), "menuItems", [], "any", false, false, false, 23)        ;
        $context['__cms_partial_params']['class'] = "mx-2"        ;
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("navigation/nav-link"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 24
        echo "        </ul>
        <!-- <form class=\"form-inline my-2 my-lg-0\" action=\"";
        // line 25
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("search");
        echo "\" method=\"get\">
            <input class=\"form-control mr-sm-2\" type=\"search\" placeholder=\"Search\" aria-label=\"Search\" required>
            <button class=\"btn btn-outline-success my-2 my-sm-0\" type=\"submit\">Search</button>
        </form> -->
    </div>
</nav>";
    }

    public function getTemplateName()
    {
        return "C:\\Web\\Apache24\\htdocs\\power-edge-skating/themes/october-starter-kit/partials/layout/header.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  92 => 25,  89 => 24,  83 => 23,  71 => 18,  56 => 8,  49 => 4,  44 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<nav class=\"navbar navbar-light {% if this.layout.id == 'fixed-navigation' %} fixed-top{% endif %}\" style=\"background-color: #a1c5da\">
    <!-- <img style=\"width: 200px;\" src=\"{{ 'logo-latest.png'|media }}\" class=\"img-fluid\" alt=\"Power Edge Skating Logo\" /> -->
    <a class=\"navbar-brand mx-auto\" href=\"/\">
        <!-- <img src=\"{{ 'logo-latest.png'|media }}\" class=\"img-fluid\" alt=\"Power Edge Skating Logo\" /> -->
        <h1 class=\"top-header\">Power Edge Skating</h1>
    </a>
</nav>
<nav class=\"navbar navbar-expand-lg navbar-dark{% if this.layout.id == 'fixed-navigation' %} fixed-top-navigation {% endif %}\" style=\"background-color: #125772\">
    <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarMain\" style=\"color:#cbcdd9;\"
        aria-controls=\"navbarMain\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
        <span class=\"navbar-toggler-icon\"></span>
    </button>

    <div class=\"collapse navbar-collapse\" id=\"navbarMain\">
        <!-- snip1211 -->
        <ul class=\"navbar-nav mx-auto snip1198\">
            <!--<li class=\"nav-item active\">
                <a class=\"nav-link {% if this.page.id == 'index' %} active {% endif %}\" href=\"{{ 'index'|page }}\">Home</a>
            </li>
            <li class=\"nav-item\">
                <a class=\"nav-link disabled\" href=\"#\">Disabled</a>
            </li>-->
            {% partial 'navigation/nav-link' items=staticMenu.menuItems class='mx-2' %}
        </ul>
        <!-- <form class=\"form-inline my-2 my-lg-0\" action=\"{{ 'search' | page }}\" method=\"get\">
            <input class=\"form-control mr-sm-2\" type=\"search\" placeholder=\"Search\" aria-label=\"Search\" required>
            <button class=\"btn btn-outline-success my-2 my-sm-0\" type=\"submit\">Search</button>
        </form> -->
    </div>
</nav>", "C:\\Web\\Apache24\\htdocs\\power-edge-skating/themes/october-starter-kit/partials/layout/header.htm", "");
    }
}
