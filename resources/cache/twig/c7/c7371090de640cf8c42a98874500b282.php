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

/* template/sections/banner-caption.twig */
class __TwigTemplate_c113a7c601b47c73f7f07292ae657c03 extends Template
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
        // line 10
        echo "
";
        // line 11
        if ((twig_get_attribute($this->env, $this->source, ($context["banner"] ?? null), "title", [], "any", false, false, false, 11) != "")) {
            // line 12
            echo "
\t<div class=\"row justify-content-start\">
\t\t<div class=\"col-xl-8 col-lg-12\">
\t\t\t<div class=\"banner-info\">
\t\t\t\t<h1 class=\"text-white text-start\">";
            // line 16
            echo twig_nl2br(twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["banner"] ?? null), "title", [], "any", false, false, false, 16), "html", null, true));
            echo "
\t\t\t\t\t<span class=\"mt-1\">";
            // line 17
            echo twig_nl2br(twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["banner"] ?? null), "text", [], "any", false, false, false, 17), "html", null, true));
            echo "</span>
\t\t\t\t</h1>
\t\t\t\t<a class=\"btn mt-3\" href=\"#\">SHOP OUR MEATS</a>
\t\t\t</div>
\t\t</div>
\t</div>

";
        }
        // line 25
        echo "
";
    }

    public function getTemplateName()
    {
        return "template/sections/banner-caption.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  63 => 25,  52 => 17,  48 => 16,  42 => 12,  40 => 11,  37 => 10,);
    }

    public function getSourceContext()
    {
        return new Source("{# {% if banner.title != '' %}
\t<h2 class=\"title\">{{ banner.title|nl2br }}</h2>
{% endif %}
{% if banner.text != '' %}
\t<p class=\"tagline\">{{ banner.text|nl2br }}</p>
{% endif %}
{% if banner.link != '' %}
\t<a href=\"{{ banner.link }}\" class=\"button\">{{ banner.button }}</a>
{% endif %} #}

{% if banner.title != '' %}

\t<div class=\"row justify-content-start\">
\t\t<div class=\"col-xl-8 col-lg-12\">
\t\t\t<div class=\"banner-info\">
\t\t\t\t<h1 class=\"text-white text-start\">{{ banner.title|nl2br }}
\t\t\t\t\t<span class=\"mt-1\">{{ banner.text|nl2br }}</span>
\t\t\t\t</h1>
\t\t\t\t<a class=\"btn mt-3\" href=\"#\">SHOP OUR MEATS</a>
\t\t\t</div>
\t\t</div>
\t</div>

{% endif %}

", "template/sections/banner-caption.twig", "/home/meatadev/public_html/theme/twig/template/sections/banner-caption.twig");
    }
}
