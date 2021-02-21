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

/* C:\Web\Apache24\htdocs\power-edge-skating/themes/october-starter-kit/pages/training/team-training.htm */
class __TwigTemplate_83c6af3079eaad4771230d42161f85448dc1370daa4a38dc1e7b597bf870bb93 extends \Twig\Template
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
            Team training available upon request.*
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
        echo $this->env->getExtension('Cms\Twig\Extension')->componentFunction("formTeamTraining"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
    }

    public function getTemplateName()
    {
        return "C:\\Web\\Apache24\\htdocs\\power-edge-skating/themes/october-starter-kit/pages/training/team-training.htm";
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
            Team training available upon request.*
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
{% component 'formTeamTraining' %}", "C:\\Web\\Apache24\\htdocs\\power-edge-skating/themes/october-starter-kit/pages/training/team-training.htm", "");
    }
}
