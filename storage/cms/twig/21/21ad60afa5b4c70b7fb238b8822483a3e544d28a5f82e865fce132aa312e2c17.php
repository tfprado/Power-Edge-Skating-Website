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

/* C:\Web\Apache24\htdocs\power-edge-skating/themes/october-starter-kit/pages/training/group-skating.htm */
class __TwigTemplate_f818f6ceef37b230820f2d958feebda1473d52c4a6980f97c68ce7ad37304c62 extends \Twig\Template
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
        echo "<div class=\"top-spacer\"></div>
<h2 class=\"text-center\">Coming soon!</h2>
";
        // line 3
        $context['__cms_component_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->componentFunction("proEventCalendar"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
        // line 4
        echo "<div class=\"bottom-spacer\"></div>";
    }

    public function getTemplateName()
    {
        return "C:\\Web\\Apache24\\htdocs\\power-edge-skating/themes/october-starter-kit/pages/training/group-skating.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  45 => 4,  41 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"top-spacer\"></div>
<h2 class=\"text-center\">Coming soon!</h2>
{% component 'proEventCalendar' %}
<div class=\"bottom-spacer\"></div>", "C:\\Web\\Apache24\\htdocs\\power-edge-skating/themes/october-starter-kit/pages/training/group-skating.htm", "");
    }
}
