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

/* C:\Web\Apache24\htdocs\power-edge-skating/plugins/radiantweb/proevents/components/eventcalendar/responsive_ajax.htm */
class __TwigTemplate_fb08b9a2882cdde6f7333dbd2a30aecda8cf69bae1e0de304a8dd7b44cef0aee extends \Twig\Template
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
        echo "\t<div class=\"title_year\"><h3>";
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, ($context["cal_date"] ?? null), "F"), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["year"] ?? null), "html", null, true);
        echo "</h3></div>
\t<input type=\"hidden\" id=\"curent_date\" value=\"";
        // line 2
        echo twig_escape_filter($this->env, ($context["cal_date"] ?? null), "html", null, true);
        echo "\" />
\t<input type=\"hidden\" id=\"year\" value=\"";
        // line 3
        echo twig_escape_filter($this->env, ($context["year"] ?? null), "html", null, true);
        echo "\" />
\t<input type=\"hidden\" id=\"month\" value=\"";
        // line 4
        echo twig_escape_filter($this->env, ($context["month"] ?? null), "html", null, true);
        echo "\" />
\t";
        // line 5
        if ((($context["euro_cal"] ?? null) == 1)) {
            // line 6
            echo "\t    <ul class=\"weekdays\">
\t        <li>";
            // line 7
            echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Monday"]);
            echo "</li>
\t        <li>";
            // line 8
            echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Tuesday"]);
            echo "</li>
\t        <li>";
            // line 9
            echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Wednesday"]);
            echo "</li>
\t        <li>";
            // line 10
            echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Thursday"]);
            echo "</li>
\t        <li>";
            // line 11
            echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Friday"]);
            echo "</li>
\t        <li>";
            // line 12
            echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Saturday"]);
            echo "</li>
\t        <li>";
            // line 13
            echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Sunday"]);
            echo "</li>
\t    </ul>
\t";
        } else {
            // line 16
            echo "\t    <ul class=\"weekdays\">
\t        <li>";
            // line 17
            echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Sunday"]);
            echo "</li>
\t        <li>";
            // line 18
            echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Monday"]);
            echo "</li>
\t        <li>";
            // line 19
            echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Tuesday"]);
            echo "</li>
\t        <li>";
            // line 20
            echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Wednesday"]);
            echo "</li>
\t        <li>";
            // line 21
            echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Thursday"]);
            echo "</li>
\t        <li>";
            // line 22
            echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Friday"]);
            echo "</li>
\t        <li>";
            // line 23
            echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Saturday"]);
            echo "</li>
\t    </ul>
\t";
        }
        // line 26
        echo "\t<ul class=\"days\">
\t\t";
        // line 27
        $context["daycount"] = 1;
        // line 28
        echo "
\t\t";
        // line 29
        if ((($context["blank"] ?? null) != 0)) {
            // line 30
            echo "\t\t\t";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range(1, ($context["blank"] ?? null)));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                // line 31
                echo "\t\t\t    <li class=\"calendar-day date_fill\"><div class=\"date\"></div></li>
\t\t\t    ";
                // line 32
                $context["daycount"] = (($context["daycount"] ?? null) + 1);
                // line 33
                echo "\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 34
            echo "\t\t";
        }
        // line 35
        echo "
\t\t";
        // line 36
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, ($context["days_in_month"] ?? null)));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 37
            echo "\t\t\t";
            $context["daynum"] = ((((($context["year"] ?? null) . "-") . ($context["month"] ?? null)) . "-") . $context["i"]);
            // line 38
            echo "\t\t\t<li class=\"calendar-day\">
\t\t\t\t<div class=\"date\"><span class=\"day\"> ";
            // line 39
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, ($context["daynum"] ?? null), "D"), "html", null, true);
            echo " </span> <span class=\"month\"> ";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, ($context["daynum"] ?? null), "M"), "html", null, true);
            echo " </span> ";
            echo twig_escape_filter($this->env, $context["i"], "html", null, true);
            echo " </div>
\t\t\t\t";
            // line 40
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["events"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["event_item"]) {
                // line 41
                echo "\t\t\t\t\t";
                if ((twig_date_format_filter($this->env, ($context["daynum"] ?? null), "Y-m-d") == twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["event_item"], "event_date", [], "any", false, false, false, 41), "Y-m-d"))) {
                    // line 42
                    echo "\t\t\t\t\t\t<div class=\"daynum hasevent\">
\t\t\t\t\t\t\t";
                    // line 43
                    if ((twig_get_attribute($this->env, $this->source, $context["event_item"], "status", [], "any", false, false, false, 43) == "booked")) {
                        // line 44
                        echo "\t\t\t\t\t\t\t\t";
                        $context["event_color"] = "FF5050";
                        // line 45
                        echo "\t\t\t\t\t\t\t";
                    } elseif ((twig_get_attribute($this->env, $this->source, $context["event_item"], "status", [], "any", false, false, false, 45) == "available")) {
                        // line 46
                        echo "\t\t\t\t\t\t\t\t";
                        $context["event_color"] = "2EB82E";
                        // line 47
                        echo "\t\t\t\t\t\t\t";
                    } else {
                        // line 48
                        echo "\t\t\t\t\t\t\t\t";
                        $context["event_color"] = (($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = ($context["calendar_colors"] ?? null)) && is_array($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4) || $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 instanceof ArrayAccess ? ($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4[twig_get_attribute($this->env, $this->source, $context["event_item"], "calendar_id", [], "any", false, false, false, 48)] ?? null) : null);
                        // line 49
                        echo "\t\t\t\t\t\t\t";
                    }
                    // line 50
                    echo "\t\t\t\t\t\t\t";
                    if (($context["event_color"] ?? null)) {
                        echo "<div style=\"background-color: #";
                        echo twig_escape_filter($this->env, ($context["event_color"] ?? null), "html", null, true);
                        echo "!important;\" class=\"category_color\">";
                    }
                    // line 51
                    echo "\t\t\t\t\t\t\t<a href=\"";
                    echo $this->extensions['Cms\Twig\Extension']->pageFilter(($context["eventpage"] ?? null), ["event_slug" => twig_lower_filter($this->env, twig_replace_filter(twig_get_attribute($this->env, $this->source, $context["event_item"], "title", [], "any", false, false, false, 51), [" " => "-"])), "event_id" => twig_get_attribute($this->env, $this->source, $context["event_item"], "id", [], "any", false, false, false, 51)]);
                    echo "/\" rel=\"pe_tooltip\" onClick=\"\$('#pe_tooltip').remove();\">
\t\t\t\t\t\t\t\t";
                    // line 52
                    if ((twig_get_attribute($this->env, $this->source, $context["event_item"], "status", [], "any", false, false, false, 52) == "booked")) {
                        // line 53
                        echo "\t\t\t\t\t\t\t\t\t<i class=\"icon-remove-sign\"></i>
\t\t\t\t\t\t\t\t";
                    } elseif ((twig_get_attribute($this->env, $this->source,                     // line 54
$context["event_item"], "status", [], "any", false, false, false, 54) == "available")) {
                        // line 55
                        echo "\t\t\t\t\t\t\t\t\t<i class=\"icon-ok-sign\"></i>
\t\t\t\t\t\t\t\t";
                    }
                    // line 57
                    echo "\t\t\t\t\t\t\t\t";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["event_item"], "title", [], "any", false, false, false, 57), "html", null, true);
                    echo "
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t<div class=\"pe_tooltip_body\" style=\"display: none;\">
\t\t\t\t\t\t\t\t<h4>";
                    // line 60
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["event_item"], "title", [], "any", false, false, false, 60), "html", null, true);
                    echo "</h4>
\t\t\t\t\t\t\t\t<!-- ";
                    // line 61
                    if ((($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 = (($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["event_item"], "event", [], "any", false, false, false, 61), "featured_images", [], "any", false, false, false, 61)) && is_array($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b) || $__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b instanceof ArrayAccess ? ($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b[0] ?? null) : null)) && is_array($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144) || $__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 instanceof ArrayAccess ? ($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144["path"] ?? null) : null)) {
                        // line 62
                        echo "\t\t\t\t                    <p><img src=\"";
                        echo twig_escape_filter($this->env, (($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 = (($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4 = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["event_item"], "event", [], "any", false, false, false, 62), "featured_images", [], "any", false, false, false, 62)) && is_array($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4) || $__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4 instanceof ArrayAccess ? ($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4[0] ?? null) : null)) && is_array($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002) || $__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 instanceof ArrayAccess ? ($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002["path"] ?? null) : null), "html", null, true);
                        echo "\" alt=\"event_";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["event_item"], "id", [], "any", false, false, false, 62), "html", null, true);
                        echo "\" width=\"100%\" /></p>
\t\t\t\t                ";
                    }
                    // line 63
                    echo " -->
\t\t\t\t\t\t\t\t<h5>";
                    // line 64
                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["event_item"], "event_date", [], "any", false, false, false, 64), "M dS"), "html", null, true);
                    echo "</h5>
\t\t\t\t\t\t\t\t";
                    // line 65
                    if ((twig_get_attribute($this->env, $this->source, $context["event_item"], "allday", [], "any", false, false, false, 65) > 0)) {
                        // line 66
                        echo "\t\t\t\t\t\t\t\t\t";
                        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["All Day"]);
                        echo "
\t\t\t\t\t\t\t\t";
                    } else {
                        // line 68
                        echo "\t\t\t\t\t\t\t\t\t";
                        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["event_item"], "sttime", [], "any", false, false, false, 68), "g:i a"), "html", null, true);
                        echo "  - ";
                        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["event_item"], "entime", [], "any", false, false, false, 68), "g:i a"), "html", null, true);
                        echo "
\t\t\t\t\t\t\t\t";
                    }
                    // line 70
                    echo "\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t";
                    // line 71
                    if (($context["event_color"] ?? null)) {
                        echo "</div>";
                    }
                    // line 72
                    echo "\t\t\t\t\t\t</div>
\t\t\t\t\t";
                }
                // line 74
                echo "\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['event_item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 75
            echo "\t\t\t</li>
\t\t\t";
            // line 76
            $context["daycount"] = (($context["daycount"] ?? null) + 1);
            // line 77
            echo "\t\t\t";
            if ((($context["daycount"] ?? null) > 7)) {
                // line 78
                echo "\t\t\t\t</ul><ul class=\"days\">
\t\t\t\t";
                // line 79
                $context["daycount"] = 1;
                // line 80
                echo "\t\t\t";
            }
            // line 81
            echo "\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 82
        echo "
\t\t";
        // line 83
        if (((($context["daycount"] ?? null) - 7) > 0)) {
            // line 84
            echo "\t\t\t";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range($context["i"], (($context["daycount"] ?? null) - 7)));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                // line 85
                echo "\t\t\t\t<li class=\"calendar-day date_fill\"><div class=\"date\"></div></li>
\t\t\t\t";
                // line 86
                $context["daycount"] = (($context["daycount"] ?? null) + 1);
                // line 87
                echo "\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 88
            echo "\t\t";
        } elseif (((($context["daycount"] ?? null) - 7) == 0)) {
            // line 89
            echo "\t\t\t<li class=\"calendar-day date_fill\"><div class=\"date\"></div></li>
\t\t";
        }
        // line 91
        echo "\t</ul>

\t<script type=\"text/javascript\">
    \$(document).ready(function(){
        setToolTips();
        equalHeights(130,600);
    });
\t</script>
";
    }

    public function getTemplateName()
    {
        return "C:\\Web\\Apache24\\htdocs\\power-edge-skating/plugins/radiantweb/proevents/components/eventcalendar/responsive_ajax.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  338 => 91,  334 => 89,  331 => 88,  325 => 87,  323 => 86,  320 => 85,  315 => 84,  313 => 83,  310 => 82,  304 => 81,  301 => 80,  299 => 79,  296 => 78,  293 => 77,  291 => 76,  288 => 75,  282 => 74,  278 => 72,  274 => 71,  271 => 70,  263 => 68,  257 => 66,  255 => 65,  251 => 64,  248 => 63,  240 => 62,  238 => 61,  234 => 60,  227 => 57,  223 => 55,  221 => 54,  218 => 53,  216 => 52,  211 => 51,  204 => 50,  201 => 49,  198 => 48,  195 => 47,  192 => 46,  189 => 45,  186 => 44,  184 => 43,  181 => 42,  178 => 41,  174 => 40,  166 => 39,  163 => 38,  160 => 37,  156 => 36,  153 => 35,  150 => 34,  144 => 33,  142 => 32,  139 => 31,  134 => 30,  132 => 29,  129 => 28,  127 => 27,  124 => 26,  118 => 23,  114 => 22,  110 => 21,  106 => 20,  102 => 19,  98 => 18,  94 => 17,  91 => 16,  85 => 13,  81 => 12,  77 => 11,  73 => 10,  69 => 9,  65 => 8,  61 => 7,  58 => 6,  56 => 5,  52 => 4,  48 => 3,  44 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("\t<div class=\"title_year\"><h3>{{ cal_date|date('F') }} {{year}}</h3></div>
\t<input type=\"hidden\" id=\"curent_date\" value=\"{{ cal_date }}\" />
\t<input type=\"hidden\" id=\"year\" value=\"{{ year }}\" />
\t<input type=\"hidden\" id=\"month\" value=\"{{ month }}\" />
\t{% if euro_cal == 1 %}
\t    <ul class=\"weekdays\">
\t        <li>{{'Monday'|_}}</li>
\t        <li>{{'Tuesday'|_}}</li>
\t        <li>{{'Wednesday'|_}}</li>
\t        <li>{{'Thursday'|_}}</li>
\t        <li>{{'Friday'|_}}</li>
\t        <li>{{'Saturday'|_}}</li>
\t        <li>{{'Sunday'|_}}</li>
\t    </ul>
\t{% else %}
\t    <ul class=\"weekdays\">
\t        <li>{{'Sunday'|_}}</li>
\t        <li>{{'Monday'|_}}</li>
\t        <li>{{'Tuesday'|_}}</li>
\t        <li>{{'Wednesday'|_}}</li>
\t        <li>{{'Thursday'|_}}</li>
\t        <li>{{'Friday'|_}}</li>
\t        <li>{{'Saturday'|_}}</li>
\t    </ul>
\t{% endif %}
\t<ul class=\"days\">
\t\t{% set daycount = 1 %}

\t\t{% if blank != 0 %}
\t\t\t{% for i in 1..blank %}
\t\t\t    <li class=\"calendar-day date_fill\"><div class=\"date\"></div></li>
\t\t\t    {% set daycount = daycount + 1 %}
\t\t\t{% endfor %}
\t\t{% endif %}

\t\t{% for i in 1..days_in_month %}
\t\t\t{% set daynum = year ~ '-' ~ month ~ '-' ~ i %}
\t\t\t<li class=\"calendar-day\">
\t\t\t\t<div class=\"date\"><span class=\"day\"> {{ daynum|date(\"D\") }} </span> <span class=\"month\"> {{ daynum|date(\"M\") }} </span> {{i}} </div>
\t\t\t\t{% for event_item in events %}
\t\t\t\t\t{% if daynum|date(\"Y-m-d\") == event_item.event_date|date(\"Y-m-d\") %}
\t\t\t\t\t\t<div class=\"daynum hasevent\">
\t\t\t\t\t\t\t{% if event_item.status == 'booked' %}
\t\t\t\t\t\t\t\t{% set event_color = 'FF5050' %}
\t\t\t\t\t\t\t{% elseif event_item.status == 'available' %}
\t\t\t\t\t\t\t\t{% set event_color = '2EB82E' %}
\t\t\t\t\t\t\t{% else %}
\t\t\t\t\t\t\t\t{% set event_color = calendar_colors[event_item.calendar_id] %}
\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t{% if event_color %}<div style=\"background-color: #{{ event_color }}!important;\" class=\"category_color\">{% endif %}
\t\t\t\t\t\t\t<a href=\"{{ eventpage|page({'event_slug': event_item.title|replace({' ':'-'})|lower,'event_id': event_item.id }) }}/\" rel=\"pe_tooltip\" onClick=\"\$('#pe_tooltip').remove();\">
\t\t\t\t\t\t\t\t{% if event_item.status == 'booked' %}
\t\t\t\t\t\t\t\t\t<i class=\"icon-remove-sign\"></i>
\t\t\t\t\t\t\t\t{% elseif event_item.status == 'available' %}
\t\t\t\t\t\t\t\t\t<i class=\"icon-ok-sign\"></i>
\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t\t{{ event_item.title }}
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t<div class=\"pe_tooltip_body\" style=\"display: none;\">
\t\t\t\t\t\t\t\t<h4>{{ event_item.title }}</h4>
\t\t\t\t\t\t\t\t<!-- {% if event_item.event.featured_images[0]['path'] %}
\t\t\t\t                    <p><img src=\"{{event_item.event.featured_images[0]['path']}}\" alt=\"event_{{event_item.id}}\" width=\"100%\" /></p>
\t\t\t\t                {% endif %} -->
\t\t\t\t\t\t\t\t<h5>{{ event_item.event_date|date(\"M dS\") }}</h5>
\t\t\t\t\t\t\t\t{% if event_item.allday > 0 %}
\t\t\t\t\t\t\t\t\t{{'All Day'|_}}
\t\t\t\t\t\t\t\t{% else %}
\t\t\t\t\t\t\t\t\t{{ event_item.sttime|date(\"g:i a\") }}  - {{ event_item.entime|date(\"g:i a\") }}
\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t{% if event_color %}</div>{% endif %}
\t\t\t\t\t\t</div>
\t\t\t\t\t{% endif %}
\t\t\t\t{% endfor %}
\t\t\t</li>
\t\t\t{% set daycount = daycount + 1 %}
\t\t\t{% if daycount > 7 %}
\t\t\t\t</ul><ul class=\"days\">
\t\t\t\t{% set daycount = 1 %}
\t\t\t{% endif %}
\t\t{% endfor %}

\t\t{% if (daycount - 7) > 0 %}
\t\t\t{% for i in i..(daycount - 7) %}
\t\t\t\t<li class=\"calendar-day date_fill\"><div class=\"date\"></div></li>
\t\t\t\t{% set daycount = daycount + 1 %}
\t\t\t{% endfor %}
\t\t{% elseif (daycount - 7) == 0 %}
\t\t\t<li class=\"calendar-day date_fill\"><div class=\"date\"></div></li>
\t\t{% endif %}
\t</ul>

\t<script type=\"text/javascript\">
    \$(document).ready(function(){
        setToolTips();
        equalHeights(130,600);
    });
\t</script>
", "C:\\Web\\Apache24\\htdocs\\power-edge-skating/plugins/radiantweb/proevents/components/eventcalendar/responsive_ajax.htm", "");
    }
}
