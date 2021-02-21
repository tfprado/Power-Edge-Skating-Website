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

/* C:\Web\Apache24\htdocs\power-edge-skating/themes/october-starter-kit/partials/snippets/contact.htm */
class __TwigTemplate_d8c014abc695ebfc1daeeaa61e5bb2b37ff605a509adfddaebe2ea722b9bfe74 extends \Twig\Template
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
        echo "<div class=\"row text-center\">
    <div class=\"col-12\">
        <p class=\"contact-link mb-0 pt-1\">
            <span class=\"font-weight-bold\">Contact:</span>
            <a href=\"mailto:info@poweredgeksating.com?subject=Questions for Power Edge Skating&body=Hello to the Power Edge Team,\" target=\"_blank\"><img src=\"";
        // line 5
        echo $this->extensions['System\Twig\Extension']->mediaFilter("email.png");
        echo "\" class=\"img-reponsive pb-1\" style=\"max-width: 250px;\"
                alt=\"Email info@poweredgeskating.com for more information.\"></a>
        </p>
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "C:\\Web\\Apache24\\htdocs\\power-edge-skating/themes/october-starter-kit/partials/snippets/contact.htm";
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
        return new Source("<div class=\"row text-center\">
    <div class=\"col-12\">
        <p class=\"contact-link mb-0 pt-1\">
            <span class=\"font-weight-bold\">Contact:</span>
            <a href=\"mailto:info@poweredgeksating.com?subject=Questions for Power Edge Skating&body=Hello to the Power Edge Team,\" target=\"_blank\"><img src=\"{{ 'email.png'|media }}\" class=\"img-reponsive pb-1\" style=\"max-width: 250px;\"
                alt=\"Email info@poweredgeskating.com for more information.\"></a>
        </p>
    </div>
</div>", "C:\\Web\\Apache24\\htdocs\\power-edge-skating/themes/october-starter-kit/partials/snippets/contact.htm", "");
    }
}
