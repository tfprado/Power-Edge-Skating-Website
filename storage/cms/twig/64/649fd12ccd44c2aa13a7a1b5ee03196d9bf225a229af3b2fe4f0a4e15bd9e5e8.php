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

/* C:\Web\Apache24\htdocs\power-edge-skating/themes/october-starter-kit/pages/contact-us.htm */
class __TwigTemplate_4d1b597521fa9285ffb12b317cfe10a64ce1bf4f9ca5e74c105be7e13a4c4bb5 extends \Twig\Template
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
        echo "<!-- <div class=\"ice-background-contact\"> -->
<div class=\"row pt-3\">
    <div class=\"col-md-6 mx-auto bg-white px-3 pt-3 contact-col\">
        <h1 class=\"page-title mb-0\">";
        // line 4
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, false, 4), "title", [], "any", false, false, false, 4), "html", null, true);
        echo "</h1>
        <p class=\"text-center\">
            Email:
            <a href=\"mailto:info@poweredgeskating.com\">info@poweredgeskating.com
            </a>
        </p>
    </div>
</div>
<div class=\"row bottom-spacer mb-3\">
    <div class=\"col-md-6 mx-auto bg-white px-3 pb-3 contact-col\">
        ";
        // line 14
        $context['__cms_component_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->componentFunction("contactForm"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
        // line 15
        echo "    </div>
</div>
<!-- </div> -->";
    }

    public function getTemplateName()
    {
        return "C:\\Web\\Apache24\\htdocs\\power-edge-skating/themes/october-starter-kit/pages/contact-us.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  59 => 15,  55 => 14,  42 => 4,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!-- <div class=\"ice-background-contact\"> -->
<div class=\"row pt-3\">
    <div class=\"col-md-6 mx-auto bg-white px-3 pt-3 contact-col\">
        <h1 class=\"page-title mb-0\">{{ this.page.title }}</h1>
        <p class=\"text-center\">
            Email:
            <a href=\"mailto:info@poweredgeskating.com\">info@poweredgeskating.com
            </a>
        </p>
    </div>
</div>
<div class=\"row bottom-spacer mb-3\">
    <div class=\"col-md-6 mx-auto bg-white px-3 pb-3 contact-col\">
        {% component 'contactForm' %}
    </div>
</div>
<!-- </div> -->", "C:\\Web\\Apache24\\htdocs\\power-edge-skating/themes/october-starter-kit/pages/contact-us.htm", "");
    }
}
