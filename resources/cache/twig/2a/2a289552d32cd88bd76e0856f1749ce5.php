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

/* pages/sections/image-block.twig */
class __TwigTemplate_82997c95b244ae7a3f77e44680065c45 extends Template
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
        // line 18
        echo "
<section class=\"space-ptb\">
\t<div class=\"container\">
\t\t<div class=\"row align-items-center\">
\t\t\t<div
\t\t\t\tclass=\"col-lg-6\">
\t\t\t\t";
        // line 25
        echo "\t\t\t\t";
        echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["section"] ?? null), "image", [], "any", false, false, false, 25), "tag", [0 => "big-image", 1 => twig_get_attribute($this->env, $this->source, ($context["section"] ?? null), "imageDescription", [], "any", false, false, false, 25)], "method", false, false, false, 25);
        echo "


</div>

";
        // line 30
        echo twig_get_attribute($this->env, $this->source, ($context["section"] ?? null), "content", [], "any", false, false, false, 30);
        echo "</div></div></section>

";
    }

    public function getTemplateName()
    {
        return "pages/sections/image-block.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  54 => 30,  45 => 25,  37 => 18,);
    }

    public function getSourceContext()
    {
        return new Source("{# <div class=\"image-block-wrapper {{ section.useSpecialBackground ? \"special\" : \"\" }}\">


\t<div class=\"container image-block\">
\t\t{% if section.image != null %}
\t\t\t{{ section.image.tag(\"big-image\", section.imageDescription)|raw }}
\t\t{% else %}
\t\t\t<div class=\"big-image\">
\t\t\t\t{{ section.getMedia().getEmbedCode()|raw }}
\t\t\t</div>
\t\t{% endif %}
\t\t<div class=\"block-content\">
\t\t\t{{ section.content|raw }}
\t\t</div>
\t</div>
</div>
#}

<section class=\"space-ptb\">
\t<div class=\"container\">
\t\t<div class=\"row align-items-center\">
\t\t\t<div
\t\t\t\tclass=\"col-lg-6\">
\t\t\t\t{# <img class=\"img-fluid\" src=\"images/chef.jpg\"> #}
\t\t\t\t{{ section.image.tag(\"big-image\", section.imageDescription)|raw }}


</div>

{{ section.content|raw }}</div></div></section>

", "pages/sections/image-block.twig", "/home/meatadev/public_html/theme/twig/pages/sections/image-block.twig");
    }
}
