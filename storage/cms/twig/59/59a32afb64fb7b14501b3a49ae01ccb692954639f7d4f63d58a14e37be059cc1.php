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

/* C:\Web\Apache24\htdocs\power-edge-skating/themes/october-starter-kit/partials/layout/footer.htm */
class __TwigTemplate_e00465767e00663686c4582967d7af92a87d64fb7f5b31332047b371c8504f3e extends \Twig\Template
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
        echo "<div class=\"container\">
    <div class=\"row\">
        <div class=\"col-12\">
            <div class=\"copyright text-center\">
                <small class=\"text-white\">&copy; ";
        // line 5
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "Y"), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "theme", [], "any", false, false, false, 5), "app_name", [], "any", false, false, false, 5), "html", null, true);
        echo ". All Rights Reserved | <a href=\"#\">Privacy Policy</a></small>
            </div>
        </div>
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "C:\\Web\\Apache24\\htdocs\\power-edge-skating/themes/october-starter-kit/partials/layout/footer.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  43 => 5,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"container\">
    <div class=\"row\">
        <div class=\"col-12\">
            <div class=\"copyright text-center\">
                <small class=\"text-white\">&copy; {{ \"now\"|date(\"Y\") }} {{ this.theme.app_name }}. All Rights Reserved | <a href=\"#\">Privacy Policy</a></small>
            </div>
        </div>
    </div>
</div>", "C:\\Web\\Apache24\\htdocs\\power-edge-skating/themes/october-starter-kit/partials/layout/footer.htm", "");
    }
}
