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

/* C:\Web\Apache24\htdocs\power-edge-skating/themes/october-starter-kit/partials/formgrouptraining/default.htm */
class __TwigTemplate_4d356089633665ef53153de43574dc421019e6a5d852c52a365c13475d14f3c9 extends \Twig\Template
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
        echo "<div class=\"row top-spacer justify-content-center bottom-spacer\">
    <div class=\"col-8\">
        <form data-request=\"";
        // line 3
        echo twig_escape_filter($this->env, ($context["__SELF__"] ?? null), "html", null, true);
        echo "::onFormSubmit\" data-request-validate>

            ";
        // line 5
        echo call_user_func_array($this->env->getFunction('form_token')->getCallable(), ["token"]);
        echo "

            <div id=\"";
        // line 7
        echo twig_escape_filter($this->env, ($context["__SELF__"] ?? null), "html", null, true);
        echo "_forms_flash\"></div>

            <div class=\"form-row\">
                <div class=\"form-group col-md-6\">
                    <label for=\"name\" class=\"required\">Name:</label>
                    <input type=\"text\" id=\"name\" name=\"name\" class=\"form-control\">
                    <div data-validate-for=\"name\" class=\"mt-1 text-danger\"></div>
                </div>
                <div class=\"form-group col-md-6\">
                    <label for=\"email\" class=\"required\">Email:</label>
                    <input type=\"text\" id=\"email\" name=\"email\" class=\"form-control\">
                    <div data-validate-for=\"email\" class=\"mt-1 text-danger\"></div>
                </div>

            </div>
            <input type=\"hidden\" id=\"subject\" name=\"subject\" class=\"form-control\" value=\"";
        // line 22
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, false, 22), "title", [], "any", false, false, false, 22), "html", null, true);
        echo "\">
            <div class=\"form-row\">
                <div class=\"form-group col-md-6\">
                    <label for=\"location\" class=\"optional\">Preferred Location/Arena:</label>
                    <input type=\"text\" id=\"location\" name=\"location\" class=\"form-control\"
                        placeholder=\"Example Arena, 123 Example Street...\">
                </div>
                <div class=\"form-group col-md-6\">
                    <label for=\"preferred-week-day\" class=\"optional\">Preferred week day:</label>
                    <select class=\"form-control\" id=\"preferred-week-day\" name=\"preferred-week-day\">
                        <option value=\"No Preference\">No Preference</option>
                        <option value=\"Monday\">Monday</option>
                        <option value=\"Tuesday\">Tuesday</option>
                        <option value=\"Wednesday\">Wednesday</option>
                        <option value=\"Thursday\">Thursday</option>
                        <option value=\"Friday\">Friday</option>
                        <option value=\"Saturday\">Saturday</option>
                        <option value=\"Sunday\">Sunday</option>
                    </select>
                </div>

            </div>
            <div class=\"form-row\">
                <div class=\"form-group col-md-6\">
                    <label for=\"group-size\" class=\"required\">Group Size:</label>
                    <select class=\"form-control\" id=\"group-size\" name=\"group-size\">
                        <option value=\"3-5\">3-5</option>
                        <option value=\"6-8\">6-8</option>
                    </select>
                    <div data-validate-for=\"group-size\" class=\"mt-1 text-danger\"></div>
                    <div class=\"form-group mt-3\">
                        ";
        // line 53
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("@recaptcha"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 54
        echo "                        <div data-validate-for=\"g-recaptcha-response\" class=\"mt-1 text-danger\"></div>
                    </div>
                </div>
                <div class=\"form-group col-md-6\">
                    <label for=\"message\" class=\"required\">Message:</label>
                    <textarea id=\"comments\" name=\"message\" rows=\"4\" cols=\"40\" class=\"form-control\"></textarea>
                    <div data-validate-for=\"message\" class=\"mt-1 text-danger\"></div>
                </div>
            </div>

            <button id=\"simpleContactSubmitButton\" type=\"submit\" class=\"btn btn-primary\">Contact us!</button>

        </form>
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "C:\\Web\\Apache24\\htdocs\\power-edge-skating/themes/october-starter-kit/partials/formgrouptraining/default.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  107 => 54,  103 => 53,  69 => 22,  51 => 7,  46 => 5,  41 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"row top-spacer justify-content-center bottom-spacer\">
    <div class=\"col-8\">
        <form data-request=\"{{ __SELF__ }}::onFormSubmit\" data-request-validate>

            {{ form_token() }}

            <div id=\"{{ __SELF__ }}_forms_flash\"></div>

            <div class=\"form-row\">
                <div class=\"form-group col-md-6\">
                    <label for=\"name\" class=\"required\">Name:</label>
                    <input type=\"text\" id=\"name\" name=\"name\" class=\"form-control\">
                    <div data-validate-for=\"name\" class=\"mt-1 text-danger\"></div>
                </div>
                <div class=\"form-group col-md-6\">
                    <label for=\"email\" class=\"required\">Email:</label>
                    <input type=\"text\" id=\"email\" name=\"email\" class=\"form-control\">
                    <div data-validate-for=\"email\" class=\"mt-1 text-danger\"></div>
                </div>

            </div>
            <input type=\"hidden\" id=\"subject\" name=\"subject\" class=\"form-control\" value=\"{{this.page.title}}\">
            <div class=\"form-row\">
                <div class=\"form-group col-md-6\">
                    <label for=\"location\" class=\"optional\">Preferred Location/Arena:</label>
                    <input type=\"text\" id=\"location\" name=\"location\" class=\"form-control\"
                        placeholder=\"Example Arena, 123 Example Street...\">
                </div>
                <div class=\"form-group col-md-6\">
                    <label for=\"preferred-week-day\" class=\"optional\">Preferred week day:</label>
                    <select class=\"form-control\" id=\"preferred-week-day\" name=\"preferred-week-day\">
                        <option value=\"No Preference\">No Preference</option>
                        <option value=\"Monday\">Monday</option>
                        <option value=\"Tuesday\">Tuesday</option>
                        <option value=\"Wednesday\">Wednesday</option>
                        <option value=\"Thursday\">Thursday</option>
                        <option value=\"Friday\">Friday</option>
                        <option value=\"Saturday\">Saturday</option>
                        <option value=\"Sunday\">Sunday</option>
                    </select>
                </div>

            </div>
            <div class=\"form-row\">
                <div class=\"form-group col-md-6\">
                    <label for=\"group-size\" class=\"required\">Group Size:</label>
                    <select class=\"form-control\" id=\"group-size\" name=\"group-size\">
                        <option value=\"3-5\">3-5</option>
                        <option value=\"6-8\">6-8</option>
                    </select>
                    <div data-validate-for=\"group-size\" class=\"mt-1 text-danger\"></div>
                    <div class=\"form-group mt-3\">
                        {% partial '@recaptcha' %}
                        <div data-validate-for=\"g-recaptcha-response\" class=\"mt-1 text-danger\"></div>
                    </div>
                </div>
                <div class=\"form-group col-md-6\">
                    <label for=\"message\" class=\"required\">Message:</label>
                    <textarea id=\"comments\" name=\"message\" rows=\"4\" cols=\"40\" class=\"form-control\"></textarea>
                    <div data-validate-for=\"message\" class=\"mt-1 text-danger\"></div>
                </div>
            </div>

            <button id=\"simpleContactSubmitButton\" type=\"submit\" class=\"btn btn-primary\">Contact us!</button>

        </form>
    </div>
</div>", "C:\\Web\\Apache24\\htdocs\\power-edge-skating/themes/october-starter-kit/partials/formgrouptraining/default.htm", "");
    }
}
