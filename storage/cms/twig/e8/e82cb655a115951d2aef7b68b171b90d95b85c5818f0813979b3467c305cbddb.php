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

/* C:\Web\Apache24\htdocs\power-edge-skating/themes/october-starter-kit/partials/layout/default-css.htm */
class __TwigTemplate_6757d26b233151085ee46387a790521b617be101db119cfbc28c6c287f510b86 extends \Twig\Template
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
        echo "<meta charset=\"utf-8\">
<meta name=\"google-site-verification\" content=\"B4V-IJBTemlwT965qi5Z4fQ-ak415X0g0hFUh1Tp-uk\" />
<meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">

<meta name=\"title\" content=\"";
        // line 5
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, false, 5), "meta_title", [], "any", false, false, false, 5)) {
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, false, 5), "meta_title", [], "any", false, false, false, 5), "html", null, true);
        } else {
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, false, 5), "title", [], "any", false, false, false, 5), "html", null, true);
            echo " | ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "theme", [], "any", false, false, false, 5), "app_name", [], "any", false, false, false, 5), "html", null, true);
        }
        echo "\">
<meta name=\"description\" content=\"";
        // line 6
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, false, 6), "meta_description", [], "any", false, false, false, 6)) {
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, false, 6), "meta_description", [], "any", false, false, false, 6), "html", null, true);
        } else {
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "theme", [], "any", false, false, false, 6), "meta_description", [], "any", false, false, false, 6), "html", null, true);
        }
        echo "\">
<meta name=\"keywords\" content=\"";
        // line 7
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "theme", [], "any", false, false, false, 7), "default_meta_keywords", [], "any", false, false, false, 7), "html", null, true);
        echo "\">

<!-- Open Graph -->
<meta property=\"og:title\" content=\"";
        // line 10
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, false, 10), "meta_title", [], "any", false, false, false, 10)) {
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, false, 10), "meta_title", [], "any", false, false, false, 10), "html", null, true);
        } else {
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, false, 10), "title", [], "any", false, false, false, 10), "html", null, true);
        }
        echo "\" />
<meta property=\"og:description\" content=\"";
        // line 11
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, false, 11), "meta_description", [], "any", false, false, false, 11)) {
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, false, 11), "meta_description", [], "any", false, false, false, 11), "html", null, true);
        } else {
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "theme", [], "any", false, false, false, 11), "meta_description", [], "any", false, false, false, 11), "html", null, true);
        }
        echo "\" />
<meta property=\"og:type\" content=\"website\" />
<meta property=\"og:url\" content=\"";
        // line 13
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["staticPage"] ?? null), "page", [], "any", false, false, false, 13), "url", [], "any", false, false, false, 13)) {
            echo $this->extensions['System\Twig\Extension']->appFilter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["staticPage"] ?? null), "page", [], "any", false, false, false, 13), "url", [], "any", false, false, false, 13));
        } else {
            echo $this->extensions['System\Twig\Extension']->appFilter("");
        }
        echo "\" />

<link rel=\"icon\" href=\"";
        // line 15
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/public/images/power-favicon.ico");
        echo "\">
<link rel=\"apple-touch-icon\" sizes=\"180x180\" href=\"";
        // line 16
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/public/images/apple-touch-icon.png");
        echo "\">
<link rel=\"icon\" type=\"image/png\" sizes=\"32x32\" href=\"";
        // line 17
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/public/images/favicon-32x32.png");
        echo "\">
<link rel=\"icon\" type=\"image/png\" sizes=\"16x16\" href=\"";
        // line 18
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/public/images/favicon-16x16.png");
        echo "\">
<!-- <link rel=\"manifest\" href=\"";
        // line 19
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/public/images/site.webmanifest");
        echo "\"> -->
<link rel=\"stylesheet\" href=\"";
        // line 20
        echo $this->extensions['Cms\Twig\Extension']->themeFilter([0 => "assets/public/css/app.css", 1 => "assets/public/css/vendor.css"]);
        // line 23
        echo "\">

<link href=\"https://fonts.googleapis.com/css?family=Open+Sans&display=swap\" rel=\"stylesheet\">
<link href=\"https://fonts.googleapis.com/css?family=Lato&display=swap\" rel=\"stylesheet\">
<link href=\"https://fonts.googleapis.com/css?family=Cormorant+SC&display=swap\" rel=\"stylesheet\">
<link href=\"https://fonts.googleapis.com/css?family=Playfair+Display+SC&display=swap\" rel=\"stylesheet\">

<link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css\">
";
        // line 31
        echo $this->env->getExtension('Cms\Twig\Extension')->assetsFunction('css');
        echo $this->env->getExtension('Cms\Twig\Extension')->displayBlock('styles');
        // line 32
        echo "
<title>";
        // line 33
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, false, 33), "title", [], "any", false, false, false, 33), "html", null, true);
        echo " | ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "theme", [], "any", false, false, false, 33), "app_name", [], "any", false, false, false, 33), "html", null, true);
        echo "</title>";
    }

    public function getTemplateName()
    {
        return "C:\\Web\\Apache24\\htdocs\\power-edge-skating/themes/october-starter-kit/partials/layout/default-css.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  131 => 33,  128 => 32,  125 => 31,  115 => 23,  113 => 20,  109 => 19,  105 => 18,  101 => 17,  97 => 16,  93 => 15,  84 => 13,  75 => 11,  67 => 10,  61 => 7,  53 => 6,  43 => 5,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<meta charset=\"utf-8\">
<meta name=\"google-site-verification\" content=\"B4V-IJBTemlwT965qi5Z4fQ-ak415X0g0hFUh1Tp-uk\" />
<meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">

<meta name=\"title\" content=\"{% if this.page.meta_title %}{{ this.page.meta_title }}{% else %}{{ this.page.title }} | {{ this.theme.app_name }}{% endif %}\">
<meta name=\"description\" content=\"{% if this.page.meta_description %}{{ this.page.meta_description }}{% else %}{{ this.theme.meta_description }}{% endif %}\">
<meta name=\"keywords\" content=\"{{ this.theme.default_meta_keywords }}\">

<!-- Open Graph -->
<meta property=\"og:title\" content=\"{% if this.page.meta_title %}{{ this.page.meta_title }}{% else %}{{ this.page.title }}{% endif %}\" />
<meta property=\"og:description\" content=\"{% if this.page.meta_description %}{{ this.page.meta_description }}{% else %}{{ this.theme.meta_description }}{% endif %}\" />
<meta property=\"og:type\" content=\"website\" />
<meta property=\"og:url\" content=\"{% if staticPage.page.url %}{{ staticPage.page.url| app }}{% else %}{{ ''| app}}{% endif %}\" />

<link rel=\"icon\" href=\"{{ 'assets/public/images/power-favicon.ico'|theme }}\">
<link rel=\"apple-touch-icon\" sizes=\"180x180\" href=\"{{ 'assets/public/images/apple-touch-icon.png'|theme }}\">
<link rel=\"icon\" type=\"image/png\" sizes=\"32x32\" href=\"{{ 'assets/public/images/favicon-32x32.png'|theme }}\">
<link rel=\"icon\" type=\"image/png\" sizes=\"16x16\" href=\"{{ 'assets/public/images/favicon-16x16.png'|theme }}\">
<!-- <link rel=\"manifest\" href=\"{{ 'assets/public/images/site.webmanifest'|theme }}\"> -->
<link rel=\"stylesheet\" href=\"{{ [
    'assets/public/css/app.css',
    'assets/public/css/vendor.css'
    ]|theme }}\">

<link href=\"https://fonts.googleapis.com/css?family=Open+Sans&display=swap\" rel=\"stylesheet\">
<link href=\"https://fonts.googleapis.com/css?family=Lato&display=swap\" rel=\"stylesheet\">
<link href=\"https://fonts.googleapis.com/css?family=Cormorant+SC&display=swap\" rel=\"stylesheet\">
<link href=\"https://fonts.googleapis.com/css?family=Playfair+Display+SC&display=swap\" rel=\"stylesheet\">

<link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css\">
{% styles %}

<title>{{ this.page.title }} | {{ this.theme.app_name }}</title>", "C:\\Web\\Apache24\\htdocs\\power-edge-skating/themes/october-starter-kit/partials/layout/default-css.htm", "");
    }
}
