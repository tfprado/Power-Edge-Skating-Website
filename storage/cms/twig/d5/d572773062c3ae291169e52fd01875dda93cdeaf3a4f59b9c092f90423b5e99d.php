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

/* C:\Web\Apache24\htdocs\power-edge-skating/themes/october-starter-kit/pages/training/private-lessons.htm */
class __TwigTemplate_de6f64146ece8aeb3d297c52477e9548612468e626cade20e57672509e26c22d extends \Twig\Template
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
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("snippets/title"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 2
        echo "<div class=\"card mx-auto\" style=\"width: 80%;\">
    <div class=\"card-body\">
        <h6 class=\"contact-title mb-2\">
            One on one private lessons available upon request.*
            <br>
            <span>
                Please email
                <a href=\"mailto:info@poweredgeskating.com\">info@poweredgeskating.com</a>
                or use the form below.
            </span>
            <br>
                        <span class=\"font-weight-bold\">*ice is not included</span>
        </h6>
    </div>
</div>
";
        // line 17
        $context['__cms_component_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->componentFunction("formLessons"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
    }

    public function getTemplateName()
    {
        return "C:\\Web\\Apache24\\htdocs\\power-edge-skating/themes/october-starter-kit/pages/training/private-lessons.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  58 => 17,  41 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% partial 'snippets/title' %}
<div class=\"card mx-auto\" style=\"width: 80%;\">
    <div class=\"card-body\">
        <h6 class=\"contact-title mb-2\">
            One on one private lessons available upon request.*
            <br>
            <span>
                Please email
                <a href=\"mailto:info@poweredgeskating.com\">info@poweredgeskating.com</a>
                or use the form below.
            </span>
            <br>
                        <span class=\"font-weight-bold\">*ice is not included</span>
        </h6>
    </div>
</div>
{% component 'formLessons' %}", "C:\\Web\\Apache24\\htdocs\\power-edge-skating/themes/october-starter-kit/pages/training/private-lessons.htm", "");
    }
}
