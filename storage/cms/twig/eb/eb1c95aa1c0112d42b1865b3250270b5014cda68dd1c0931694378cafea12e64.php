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

/* C:\Web\Apache24\htdocs\power-edge-skating/plugins/martin/forms/components/partials/js/recaptcha.js */
class __TwigTemplate_17a9e64d09ab8c25916ec1e2d920a11b110815ab69112c67bf030cf5d1bc4a4a extends \Twig\Template
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
        echo "resetReCaptcha('";
        echo twig_escape_filter($this->env, ($context["__SELF__"] ?? null), "html", null, true);
        echo "');";
    }

    public function getTemplateName()
    {
        return "C:\\Web\\Apache24\\htdocs\\power-edge-skating/plugins/martin/forms/components/partials/js/recaptcha.js";
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
        return new Source("resetReCaptcha('{{ __SELF__ }}');", "C:\\Web\\Apache24\\htdocs\\power-edge-skating/plugins/martin/forms/components/partials/js/recaptcha.js", "");
    }
}
