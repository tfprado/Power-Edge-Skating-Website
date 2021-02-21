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

/* C:\Web\Apache24\htdocs\power-edge-skating/themes/october-starter-kit/layouts/default.htm */
class __TwigTemplate_b72d1e7a38ee95e2578fa3c6c89d28c6c369b6b72e77015a47078dad63d699e8 extends \Twig\Template
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
        echo "<!doctype html>
<html lang=\"en\">
    <head>
        ";
        // line 4
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("layout/default-css"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 5
        echo "    </head>
    <body class=\"app layout-";
        // line 6
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "layout", [], "any", false, false, false, 6), "id", [], "any", false, false, false, 6), "html", null, true);
        echo " page-";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, false, 6), "id", [], "any", false, false, false, 6), "html", null, true);
        echo "\">

        <div class=\"app-container\">

            <div id=\"app-header\" class=\"app-header\">
                ";
        // line 11
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("layout/header"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 12
        echo "            </div>

            <div id=\"app-content\" class=\"app-content\" role=\"main\">
                ";
        // line 15
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("snippets/socialBar"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 16
        echo "                <div class=\"container main-content px-0\">
                    ";
        // line 17
        echo $this->env->getExtension('Cms\Twig\Extension')->pageFunction();
        // line 18
        echo "                </div>
            </div>

            <div id=\"app-footer\" class=\"app-footer\">
                ";
        // line 22
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("layout/footer"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 23
        echo "            </div>

        </div>

        ";
        // line 27
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("layout/default-js"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 28
        echo "    </body>

</html>";
    }

    public function getTemplateName()
    {
        return "C:\\Web\\Apache24\\htdocs\\power-edge-skating/themes/october-starter-kit/layouts/default.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  97 => 28,  93 => 27,  87 => 23,  83 => 22,  77 => 18,  75 => 17,  72 => 16,  68 => 15,  63 => 12,  59 => 11,  49 => 6,  46 => 5,  42 => 4,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!doctype html>
<html lang=\"en\">
    <head>
        {% partial 'layout/default-css' %}
    </head>
    <body class=\"app layout-{{ this.layout.id }} page-{{ this.page.id }}\">

        <div class=\"app-container\">

            <div id=\"app-header\" class=\"app-header\">
                {% partial 'layout/header' %}
            </div>

            <div id=\"app-content\" class=\"app-content\" role=\"main\">
                {% partial 'snippets/socialBar' %}
                <div class=\"container main-content px-0\">
                    {% page %}
                </div>
            </div>

            <div id=\"app-footer\" class=\"app-footer\">
                {% partial 'layout/footer' %}
            </div>

        </div>

        {% partial 'layout/default-js' %}
    </body>

</html>", "C:\\Web\\Apache24\\htdocs\\power-edge-skating/themes/october-starter-kit/layouts/default.htm", "");
    }
}
