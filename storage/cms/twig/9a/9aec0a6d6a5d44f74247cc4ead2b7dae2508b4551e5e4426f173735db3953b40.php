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

/* C:\Web\Apache24\htdocs\power-edge-skating/themes/october-starter-kit/partials/navigation/dropdown-link.htm */
class __TwigTemplate_6c9c974fef4d6ea75e7cd500929ef494b72c44a50ac82e076038856b9b113720 extends \Twig\Template
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
        echo "<div class=\"";
        echo twig_escape_filter($this->env, ($context["class"] ?? null), "html", null, true);
        echo "\" aria-labelledby=\"";
        echo twig_escape_filter($this->env, ($context["dropdown"] ?? null), "html", null, true);
        echo "\">
    ";
        // line 2
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["items"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 3
            echo "        <a class=\"dropdown-item\" href=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "url", [], "any", false, false, false, 3), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "title", [], "any", false, false, false, 3), "html", null, true);
            echo "</a>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 5
        echo "    <!--<div class=\"dropdown-divider\"></div>-->
</div>";
    }

    public function getTemplateName()
    {
        return "C:\\Web\\Apache24\\htdocs\\power-edge-skating/themes/october-starter-kit/partials/navigation/dropdown-link.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  59 => 5,  48 => 3,  44 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"{{ class }}\" aria-labelledby=\"{{ dropdown }}\">
    {% for item in items %}
        <a class=\"dropdown-item\" href=\"{{ item.url }}\">{{ item.title }}</a>
    {% endfor %}
    <!--<div class=\"dropdown-divider\"></div>-->
</div>", "C:\\Web\\Apache24\\htdocs\\power-edge-skating/themes/october-starter-kit/partials/navigation/dropdown-link.htm", "");
    }
}
