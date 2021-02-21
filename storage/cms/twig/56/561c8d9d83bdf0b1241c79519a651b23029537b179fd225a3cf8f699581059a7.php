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

/* C:\Web\Apache24\htdocs\power-edge-skating/themes/october-starter-kit/partials/layout/default-js.htm */
class __TwigTemplate_d9c244dfb30378e19f094bbe3a63f4cdcf627a53039436769cb3995a64f67d4a extends \Twig\Template
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
        echo "<!-- Combined JS -->
<script type=\"text/javascript\" src=\"";
        // line 2
        echo $this->extensions['Cms\Twig\Extension']->themeFilter([0 => "assets/public/js/manifest.js", 1 => "assets/public/js/vendor.js", 2 => "assets/public/js/app.js"]);
        // line 6
        echo "\"></script>


<!-- <script type=\"text/javascript\" src=\"";
        // line 9
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/public/js/manifest.js");
        echo "\"></script>
<script type=\"text/javascript\" src=\"";
        // line 10
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/public/js/vendor.js");
        echo "\"></script>
<script type=\"text/javascript\" src=\"";
        // line 11
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/public/js/app.js");
        echo "\"></script> -->

<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src=\"https://www.googletagmanager.com/gtag/js?id=UA-165278856-1\"></script>
<script>
    window.dataLayer = window.dataLayer || [];
    function gtag() { dataLayer.push(arguments); }
    gtag('js', new Date());

    gtag('config', 'UA-165278856-1');
</script>

";
        // line 23
        echo $this->env->getExtension('Cms\Twig\Extension')->assetsFunction('js');
        echo $this->env->getExtension('Cms\Twig\Extension')->displayBlock('scripts');
    }

    public function getTemplateName()
    {
        return "C:\\Web\\Apache24\\htdocs\\power-edge-skating/themes/october-starter-kit/partials/layout/default-js.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  70 => 23,  55 => 11,  51 => 10,  47 => 9,  42 => 6,  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!-- Combined JS -->
<script type=\"text/javascript\" src=\"{{ [
    'assets/public/js/manifest.js',
    'assets/public/js/vendor.js',
    'assets/public/js/app.js'
]|theme }}\"></script>


<!-- <script type=\"text/javascript\" src=\"{{ 'assets/public/js/manifest.js'|theme }}\"></script>
<script type=\"text/javascript\" src=\"{{ 'assets/public/js/vendor.js'|theme }}\"></script>
<script type=\"text/javascript\" src=\"{{ 'assets/public/js/app.js'|theme }}\"></script> -->

<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src=\"https://www.googletagmanager.com/gtag/js?id=UA-165278856-1\"></script>
<script>
    window.dataLayer = window.dataLayer || [];
    function gtag() { dataLayer.push(arguments); }
    gtag('js', new Date());

    gtag('config', 'UA-165278856-1');
</script>

{% scripts %}", "C:\\Web\\Apache24\\htdocs\\power-edge-skating/themes/october-starter-kit/partials/layout/default-js.htm", "");
    }
}
