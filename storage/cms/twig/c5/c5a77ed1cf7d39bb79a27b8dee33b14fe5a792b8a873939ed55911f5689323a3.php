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

/* C:\Web\Apache24\htdocs\power-edge-skating/themes/october-starter-kit/partials/navigation/nav-link.htm */
class __TwigTemplate_0a12e1b4457d7abcc1c7319d6000528f00b16a0716115dbbd0500292b5f7ecc6 extends \Twig\Template
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
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["items"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 2
            echo "<li class=\"nav-item ";
            echo twig_escape_filter($this->env, ($context["class"] ?? null), "html", null, true);
            echo " ";
            echo (((twig_get_attribute($this->env, $this->source, $context["item"], "isActive", [], "any", false, false, false, 2) || twig_get_attribute($this->env, $this->source, $context["item"], "isChildActive", [], "any", false, false, false, 2))) ? ("active") : (""));
            echo "
    ";
            // line 3
            echo ((twig_get_attribute($this->env, $this->source, $context["item"], "items", [], "any", false, false, false, 3)) ? ("dropdown") : (""));
            echo "\">
    <a ";
            // line 4
            if (twig_get_attribute($this->env, $this->source, $context["item"], "items", [], "any", false, false, false, 4)) {
                echo "id=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "id", [], "any", false, false, false, 4), "html", null, true);
                echo "\" class=\"nav-link dropdown-toggle\" role=\"button\" data-toggle=\"dropdown\" ";
            } else {
                echo " class=\"nav-link ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "class", [], "any", false, false, false, 4), "html", null, true);
                echo "\" ";
            }
            // line 5
            echo "        href=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "url", [], "any", false, false, false, 5), "html", null, true);
            echo "\">
        ";
            // line 6
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "title", [], "any", false, false, false, 6), "html", null, true);
            echo "

        ";
            // line 8
            if (twig_get_attribute($this->env, $this->source, $context["item"], "items", [], "any", false, false, false, 8)) {
                echo "<span class=\"caret\"></span>";
            }
            // line 9
            echo "    </a>

    ";
            // line 11
            if (twig_get_attribute($this->env, $this->source, $context["item"], "items", [], "any", false, false, false, 11)) {
                // line 12
                echo "        ";
                $context['__cms_partial_params'] = [];
                $context['__cms_partial_params']['dropdown'] = twig_get_attribute($this->env, $this->source, $context["item"], "id", [], "any", false, false, false, 12)                ;
                $context['__cms_partial_params']['items'] = twig_get_attribute($this->env, $this->source, $context["item"], "items", [], "any", false, false, false, 12)                ;
                $context['__cms_partial_params']['class'] = "dropdown-menu"                ;
                echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("navigation/dropdown-link"                , $context['__cms_partial_params']                , true                );
                unset($context['__cms_partial_params']);
                // line 13
                echo "    ";
            }
            // line 14
            echo "</li>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    public function getTemplateName()
    {
        return "C:\\Web\\Apache24\\htdocs\\power-edge-skating/themes/october-starter-kit/partials/navigation/nav-link.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 14,  90 => 13,  82 => 12,  80 => 11,  76 => 9,  72 => 8,  67 => 6,  62 => 5,  52 => 4,  48 => 3,  41 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% for item in items %}
<li class=\"nav-item {{ class }} {{ item.isActive or item.isChildActive ? 'active' : '' }}
    {{ item.items ? 'dropdown' : '' }}\">
    <a {% if item.items %}id=\"{{ item.id }}\" class=\"nav-link dropdown-toggle\" role=\"button\" data-toggle=\"dropdown\" {% else %} class=\"nav-link {{ item.class }}\" {% endif %}
        href=\"{{ item.url }}\">
        {{ item.title }}

        {% if item.items %}<span class=\"caret\"></span>{% endif %}
    </a>

    {% if item.items %}
        {% partial 'navigation/dropdown-link' dropdown=item.id items=item.items class='dropdown-menu' %}
    {% endif %}
</li>
{% endfor %}", "C:\\Web\\Apache24\\htdocs\\power-edge-skating/themes/october-starter-kit/partials/navigation/nav-link.htm", "");
    }
}
