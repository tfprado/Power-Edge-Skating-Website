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

/* C:\Web\Apache24\htdocs\power-edge-skating/plugins/martin/forms/components/partials/js/reset-form.js */
class __TwigTemplate_d9ed77f0d5bf69875d6f0aa0616c05094df0fd0e47e9c1c1f0e2066b86cabeb8 extends \Twig\Template
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
        echo "\$('";
        echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
        echo "').parents('form')[0].reset();";
    }

    public function getTemplateName()
    {
        return "C:\\Web\\Apache24\\htdocs\\power-edge-skating/plugins/martin/forms/components/partials/js/reset-form.js";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("\$('{{ id }}').parents('form')[0].reset();", "C:\\Web\\Apache24\\htdocs\\power-edge-skating/plugins/martin/forms/components/partials/js/reset-form.js", "");
    }
}
