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

/* C:\Web\Apache24\htdocs\power-edge-skating/themes/october-starter-kit/layouts/fluid.htm */
class __TwigTemplate_7d267149b8000110ea8236cf716553fc1cd2f43acfb4248ede28171553d48ef3 extends \Twig\Template
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
        // line 5
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("layout/default-css"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 6
        echo "</head>

<body class=\"app layout-";
        // line 8
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "layout", [], "any", false, false, false, 8), "id", [], "any", false, false, false, 8), "html", null, true);
        echo " page-";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, false, 8), "id", [], "any", false, false, false, 8), "html", null, true);
        echo "\">

    <div class=\"app-container\">

        <div id=\"app-header\" class=\"app-header\">
            ";
        // line 13
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("layout/header"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 14
        echo "        </div>

        <div id=\"app-content\" class=\"app-content\" role=\"main\">
            ";
        // line 17
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("snippets/socialBar"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 18
        echo "            <div class=\"container-fluid p-0 main-content\">
                ";
        // line 19
        echo $this->env->getExtension('Cms\Twig\Extension')->pageFunction();
        // line 20
        echo "            </div>
        </div>

        <div id=\"app-footer\" class=\"app-footer\">
            ";
        // line 24
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("layout/footer"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 25
        echo "        </div>

    </div>

    ";
        // line 29
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("layout/default-js"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 30
        echo "</body>

</html>";
    }

    public function getTemplateName()
    {
        return "C:\\Web\\Apache24\\htdocs\\power-edge-skating/themes/october-starter-kit/layouts/fluid.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  99 => 30,  95 => 29,  89 => 25,  85 => 24,  79 => 20,  77 => 19,  74 => 18,  70 => 17,  65 => 14,  61 => 13,  51 => 8,  47 => 6,  43 => 5,  37 => 1,);
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
            <div class=\"container-fluid p-0 main-content\">
                {% page %}
            </div>
        </div>

        <div id=\"app-footer\" class=\"app-footer\">
            {% partial 'layout/footer' %}
        </div>

    </div>

    {% partial 'layout/default-js' %}
</body>

</html>", "C:\\Web\\Apache24\\htdocs\\power-edge-skating/themes/october-starter-kit/layouts/fluid.htm", "");
    }
}
