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

/* C:\Web\Apache24\htdocs\power-edge-skating/themes/october-starter-kit/pages/training/group-training.htm */
class __TwigTemplate_03b1a871f2686a3b131fc088ab2f4af2e489459ff8434b3bf264ca07d749c18c extends \Twig\Template
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
        echo "<div class=\"card mx-auto\" style=\"width: 70%;\">
    <div class=\"card-body text-center\">
        <h6 class=\"contact-title mb-2\">
            Group lessons available upon request*
            <br>
            <span>
                Please email
                <a href=\"mailto:info@poweredgeskating.com\">info@poweredgeskating.com</a>
                or use the form below
            </span>
            <br>
                        <span class=\"font-weight-bold\">*ice is not included</span>
        </h6>
    </div>
</div>
";
        // line 17
        $context['__cms_component_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->componentFunction("formGroupTraining"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
        // line 18
        echo "<!-- <div class=\"row top-spacer justify-content-center\">
    <div class=\"col-md-3\">
        <div class=\"card group h-100\">
            <h4 class=\"card-header\">Small Group</h4>
            <div class=\"card-body\">
                <p class=\"card-text\">
                    3-5
                </p>
            </div>
        </div>
    </div>
    <div class=\"col-md-3\">
        <div class=\"card group h-100\">
            <h4 class=\"card-header\">Large Group</h4>
            <div class=\"card-body\">
                <p class=\"card-text\">
                    6-8
                </p>
            </div>
        </div>
    </div>
</div> -->";
    }

    public function getTemplateName()
    {
        return "C:\\Web\\Apache24\\htdocs\\power-edge-skating/themes/october-starter-kit/pages/training/group-training.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  62 => 18,  58 => 17,  41 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% partial 'snippets/title' %}
<div class=\"card mx-auto\" style=\"width: 70%;\">
    <div class=\"card-body text-center\">
        <h6 class=\"contact-title mb-2\">
            Group lessons available upon request*
            <br>
            <span>
                Please email
                <a href=\"mailto:info@poweredgeskating.com\">info@poweredgeskating.com</a>
                or use the form below
            </span>
            <br>
                        <span class=\"font-weight-bold\">*ice is not included</span>
        </h6>
    </div>
</div>
{% component 'formGroupTraining' %}
<!-- <div class=\"row top-spacer justify-content-center\">
    <div class=\"col-md-3\">
        <div class=\"card group h-100\">
            <h4 class=\"card-header\">Small Group</h4>
            <div class=\"card-body\">
                <p class=\"card-text\">
                    3-5
                </p>
            </div>
        </div>
    </div>
    <div class=\"col-md-3\">
        <div class=\"card group h-100\">
            <h4 class=\"card-header\">Large Group</h4>
            <div class=\"card-body\">
                <p class=\"card-text\">
                    6-8
                </p>
            </div>
        </div>
    </div>
</div> -->", "C:\\Web\\Apache24\\htdocs\\power-edge-skating/themes/october-starter-kit/pages/training/group-training.htm", "");
    }
}
