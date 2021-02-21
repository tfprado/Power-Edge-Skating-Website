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

/* C:\Web\Apache24\htdocs\power-edge-skating/themes/october-starter-kit/layouts/poweredgeskating/home.htm */
class __TwigTemplate_131940f404c86cce0df5e26c55671e3eb3303a19c9be26f8296ace6fa50be8ac extends \Twig\Template
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
    <!-- Variables -->
    
    
    
    
    
    
    
    
    

    ";
        // line 20
        echo twig_escape_filter($this->env, $this->extensions['Barryvdh\Debugbar\Twig\Extension\Debug']->debug($this->env, $context, ($context["backgroundImage"] ?? null)), "html", null, true);
        echo "
    <div class=\"app-container\">

        <div id=\"app-header\" class=\"app-header\">
            ";
        // line 24
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("layout/header"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 25
        echo "        </div>

        <div id=\"app-content\" class=\"app-content\" role=\"main\">
            ";
        // line 28
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("snippets/socialBar"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 29
        echo "            <div class=\"container-fluid p-0 main-content\">
                <div class=\"ice-background\" style=\"background-image: url('";
        // line 30
        echo $this->extensions['System\Twig\Extension']->mediaFilter(($context["backgroundImage"] ?? null));
        echo "');\">
                    <div class=\"row h-100\">
                        <div class=\"col-12 col-sm-6 my-auto\">
                            <div class=\"lighten-background\">

                                <h2 class=\"site-header ice\">";
        // line 35
        echo twig_escape_filter($this->env, ($context["homeTitle"] ?? null), "html", null, true);
        echo "</h2>

                                ";
        // line 37
        echo ($context["leadParagraph"] ?? null);
        echo "
                            </div>
                        </div>
                    </div>
                </div>
                ";
        // line 42
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("snippets/contact"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 43
        echo "                ";
        echo $this->env->getExtension('Cms\Twig\Extension')->pageFunction();
        // line 44
        echo "            </div>
        </div>

        <div id=\"app-footer\" class=\"app-footer\">
            ";
        // line 48
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("layout/footer"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 49
        echo "        </div>

    </div>

    ";
        // line 53
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("layout/default-js"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 54
        echo "</body>

</html>";
    }

    public function getTemplateName()
    {
        return "C:\\Web\\Apache24\\htdocs\\power-edge-skating/themes/october-starter-kit/layouts/poweredgeskating/home.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  139 => 54,  135 => 53,  129 => 49,  125 => 48,  119 => 44,  116 => 43,  112 => 42,  104 => 37,  99 => 35,  91 => 30,  88 => 29,  84 => 28,  79 => 25,  75 => 24,  68 => 20,  51 => 8,  47 => 6,  43 => 5,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!doctype html>
<html lang=\"en\">

<head>
    {% partial 'layout/default-css' %}
</head>

<body class=\"app layout-{{ this.layout.id }} page-{{ this.page.id }}\">
    <!-- Variables -->
    
    
    
    
    
    
    
    
    

    {{ debug(backgroundImage)}}
    <div class=\"app-container\">

        <div id=\"app-header\" class=\"app-header\">
            {% partial 'layout/header' %}
        </div>

        <div id=\"app-content\" class=\"app-content\" role=\"main\">
            {% partial 'snippets/socialBar' %}
            <div class=\"container-fluid p-0 main-content\">
                <div class=\"ice-background\" style=\"background-image: url('{{backgroundImage| media}}');\">
                    <div class=\"row h-100\">
                        <div class=\"col-12 col-sm-6 my-auto\">
                            <div class=\"lighten-background\">

                                <h2 class=\"site-header ice\">{{ homeTitle }}</h2>

                                {{ leadParagraph| raw }}
                            </div>
                        </div>
                    </div>
                </div>
                {% partial 'snippets/contact' %}
                {% page %}
            </div>
        </div>

        <div id=\"app-footer\" class=\"app-footer\">
            {% partial 'layout/footer' %}
        </div>

    </div>

    {% partial 'layout/default-js' %}
</body>

</html>", "C:\\Web\\Apache24\\htdocs\\power-edge-skating/themes/october-starter-kit/layouts/poweredgeskating/home.htm", "");
    }
}
