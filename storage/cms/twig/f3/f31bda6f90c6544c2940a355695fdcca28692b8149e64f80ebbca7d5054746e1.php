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

/* C:\Web\Apache24\htdocs\power-edge-skating/themes/october-starter-kit/partials/snippets/socialBar.htm */
class __TwigTemplate_2db40e9120028553145c576ad2719539327801f62f94c89670ff43ab8fd1f4f7 extends \Twig\Template
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
        echo "<style>
/* Fixed/sticky icon bar (vertically aligned 50% from the top of the screen) */
.icon-bar {
  position: fixed;
  top: 46px;
  right: 0;
  -webkit-transform: translateY(-50%);
  -ms-transform: translateY(-50%);
  transform: translateY(-50%);
  z-index: 1;
}

/* Style the icon bar links */
.icon-bar a {
  display: block;
  text-align: center;
  padding: 8px;
  transition: all 0.3s ease;
  color: white;
  font-size: 20px;
}

/* Style the social media icons with color, if you want */
.icon-bar a:hover {
  background-color: #000;
}

.facebook {
  background: #3B5998;
  color: white;
}

.instagram {
  background: #55ACEE;
  color: white;
}


.twitter {
  background: #55ACEE;
  color: white;
}

.google {
  background: #dd4b39;
  color: white;
}

.linkedin {
  background: #007bb5;
  color: white;
}

.youtube {
  background: #bb0000;
  color: white;
}
</style>

<!-- The social media icon bar -->
<div class=\"icon-bar\">
  <a target=\"_blank\" href=\"";
        // line 62
        if (($context["facebook"] ?? null)) {
            echo twig_escape_filter($this->env, ($context["facebook"] ?? null), "html", null, true);
        } else {
            echo "https://www.facebook.com/poweredgeskating/";
        }
        echo "\" class=\"facebook\"><i class=\"fa fa-facebook\"></i></a>
  <a target=\"_blank\" href=\"";
        // line 63
        if (($context["instagram"] ?? null)) {
            echo twig_escape_filter($this->env, ($context["instagram"] ?? null), "html", null, true);
        } else {
            echo "https://www.instagram.com/poweredgeskating/";
        }
        echo "\" class=\"instagram\"><i class=\"fa fa-instagram\"></i></a>
<!-- 
<a href=\"#\" class=\"twitter\"><i class=\"fa fa-twitter\"></i></a>
  <a href=\"#\" class=\"google\"><i class=\"fa fa-google\"></i></a>
  <a href=\"#\" class=\"linkedin\"><i class=\"fa fa-linkedin\"></i></a>
  <a href=\"#\" class=\"youtube\"><i class=\"fa fa-youtube\"></i></a>
-->
</div>";
    }

    public function getTemplateName()
    {
        return "C:\\Web\\Apache24\\htdocs\\power-edge-skating/themes/october-starter-kit/partials/snippets/socialBar.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  108 => 63,  100 => 62,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<style>
/* Fixed/sticky icon bar (vertically aligned 50% from the top of the screen) */
.icon-bar {
  position: fixed;
  top: 46px;
  right: 0;
  -webkit-transform: translateY(-50%);
  -ms-transform: translateY(-50%);
  transform: translateY(-50%);
  z-index: 1;
}

/* Style the icon bar links */
.icon-bar a {
  display: block;
  text-align: center;
  padding: 8px;
  transition: all 0.3s ease;
  color: white;
  font-size: 20px;
}

/* Style the social media icons with color, if you want */
.icon-bar a:hover {
  background-color: #000;
}

.facebook {
  background: #3B5998;
  color: white;
}

.instagram {
  background: #55ACEE;
  color: white;
}


.twitter {
  background: #55ACEE;
  color: white;
}

.google {
  background: #dd4b39;
  color: white;
}

.linkedin {
  background: #007bb5;
  color: white;
}

.youtube {
  background: #bb0000;
  color: white;
}
</style>

<!-- The social media icon bar -->
<div class=\"icon-bar\">
  <a target=\"_blank\" href=\"{% if facebook %}{{facebook}}{% else %}https://www.facebook.com/poweredgeskating/{% endif %}\" class=\"facebook\"><i class=\"fa fa-facebook\"></i></a>
  <a target=\"_blank\" href=\"{% if instagram %}{{instagram}}{% else %}https://www.instagram.com/poweredgeskating/{% endif %}\" class=\"instagram\"><i class=\"fa fa-instagram\"></i></a>
<!-- 
<a href=\"#\" class=\"twitter\"><i class=\"fa fa-twitter\"></i></a>
  <a href=\"#\" class=\"google\"><i class=\"fa fa-google\"></i></a>
  <a href=\"#\" class=\"linkedin\"><i class=\"fa fa-linkedin\"></i></a>
  <a href=\"#\" class=\"youtube\"><i class=\"fa fa-youtube\"></i></a>
-->
</div>", "C:\\Web\\Apache24\\htdocs\\power-edge-skating/themes/october-starter-kit/partials/snippets/socialBar.htm", "");
    }
}
