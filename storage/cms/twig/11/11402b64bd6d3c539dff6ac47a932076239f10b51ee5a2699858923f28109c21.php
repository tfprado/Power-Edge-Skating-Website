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

/* C:\Web\Apache24\htdocs\power-edge-skating/themes/october-starter-kit/partials/contactform/default.htm */
class __TwigTemplate_1380b3be8d36bd2e0a4132f10bdedac5fe8e159b6a62b843fdcf129b9a1bfb5b extends \Twig\Template
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
        echo "<form data-request=\"";
        echo twig_escape_filter($this->env, ($context["__SELF__"] ?? null), "html", null, true);
        echo "::onFormSubmit\">

    ";
        // line 3
        echo call_user_func_array($this->env->getFunction('form_token')->getCallable(), ["token"]);
        echo "

    <div id=\"";
        // line 5
        echo twig_escape_filter($this->env, ($context["__SELF__"] ?? null), "html", null, true);
        echo "_forms_flash\"></div>

    <div class=\"form-row\">
        <div class=\"form-group col-md-6\">
            <label for=\"name\" class=\"required\">Name:</label>
            <input type=\"text\" id=\"name\" name=\"name\" class=\"form-control\">
        </div>
        <div class=\"form-group col-md-6\">
            <label for=\"email\" class=\"required\">Email:</label>
            <input type=\"text\" id=\"email\" name=\"email\" class=\"form-control\">
        </div>

    </div>

    <div class=\"form-group\">
        <label for=\"subject\" class=\"required\">Subject:</label>
        <input type=\"text\" id=\"subject\" name=\"subject\" class=\"form-control\">
    </div>

    <div class=\"form-group\">
\t\t<label for=\"message\" class=\"required\">Message:</label>
        <textarea id=\"comments\" name=\"message\" rows=\"2\" class=\"form-control\"></textarea>
    </div>

    <div class=\"form-group\">
        ";
        // line 30
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("@recaptcha"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 31
        echo "    </div>

    <button id=\"simpleContactSubmitButton\" type=\"submit\" class=\"btn btn-primary\">Submit</button>

</form>";
    }

    public function getTemplateName()
    {
        return "C:\\Web\\Apache24\\htdocs\\power-edge-skating/themes/october-starter-kit/partials/contactform/default.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  80 => 31,  76 => 30,  48 => 5,  43 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<form data-request=\"{{ __SELF__ }}::onFormSubmit\">

    {{ form_token() }}

    <div id=\"{{ __SELF__ }}_forms_flash\"></div>

    <div class=\"form-row\">
        <div class=\"form-group col-md-6\">
            <label for=\"name\" class=\"required\">Name:</label>
            <input type=\"text\" id=\"name\" name=\"name\" class=\"form-control\">
        </div>
        <div class=\"form-group col-md-6\">
            <label for=\"email\" class=\"required\">Email:</label>
            <input type=\"text\" id=\"email\" name=\"email\" class=\"form-control\">
        </div>

    </div>

    <div class=\"form-group\">
        <label for=\"subject\" class=\"required\">Subject:</label>
        <input type=\"text\" id=\"subject\" name=\"subject\" class=\"form-control\">
    </div>

    <div class=\"form-group\">
\t\t<label for=\"message\" class=\"required\">Message:</label>
        <textarea id=\"comments\" name=\"message\" rows=\"2\" class=\"form-control\"></textarea>
    </div>

    <div class=\"form-group\">
        {% partial '@recaptcha' %}
    </div>

    <button id=\"simpleContactSubmitButton\" type=\"submit\" class=\"btn btn-primary\">Submit</button>

</form>", "C:\\Web\\Apache24\\htdocs\\power-edge-skating/themes/october-starter-kit/partials/contactform/default.htm", "");
    }
}
