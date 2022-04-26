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

/* template/sections/top-banner.twig */
class __TwigTemplate_03c4e5b912d345c770053f9c357707cb extends Template
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
        $context["bannerAsBackground"] = false;
        // line 2
        echo "
";
        // line 3
        if ((twig_length_filter($this->env, ($context["banners"] ?? null)) > 0)) {
            // line 4
            echo "\t<section class=\"slideshow\">
\t\t<div class=\"foxy slider\">
\t\t\t";
            // line 6
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["banners"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["banner"]) {
                // line 7
                echo "\t\t\t\t";
                // line 8
                echo "\t\t\t\t";
                if ((twig_get_attribute($this->env, $this->source, $context["banner"], "getLargeImage", [], "method", false, false, false, 8) != null)) {
                    // line 9
                    echo "\t\t\t\t\t";
                    $context["caption"] = twig_trim_filter(twig_get_attribute($this->env, $this->source, $context["banner"], "getCaption", [], "method", false, false, false, 9));
                    // line 10
                    echo "\t\t\t\t\t";
                    if (($context["bannerAsBackground"] ?? null)) {
                        // line 11
                        echo "\t\t\t\t\t\t<figure class=\"slide\" >
\t\t\t\t\t\t\t";
                        // line 12
                        if ((twig_get_attribute($this->env, $this->source, $context["banner"], "getSmallImage", [], "method", false, false, false, 12) != null)) {
                            // line 13
                            echo "\t\t\t\t\t\t\t\t<div class=\"small-screen background-image\" style=\"background-image: url('";
                            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["banner"], "getSmallImage", [], "method", false, false, false, 13), "getLink", [], "method", false, false, false, 13), "html", null, true);
                            echo "')\"></div>
\t\t\t\t\t\t\t";
                        }
                        // line 15
                        echo "\t\t\t\t\t\t\t<div class=\"big-screen background-image\" style=\"background-image: url('";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["banner"], "getLargeImage", [], "method", false, false, false, 15), "getLink", [], "method", false, false, false, 15), "html", null, true);
                        echo "')\"></div>
\t\t\t\t\t\t\t";
                        // line 16
                        if ((($context["caption"] ?? null) != "")) {
                            // line 17
                            echo "\t\t\t\t\t\t\t\t<figcaption class=\"caption container\">
\t\t\t\t\t\t\t\t\t<div class=\"caption-content\">
\t\t\t\t\t\t\t\t\t\t";
                            // line 19
                            echo ($context["caption"] ?? null);
                            echo "
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</figcaption>
\t\t\t\t\t\t\t";
                        }
                        // line 23
                        echo "\t\t\t\t\t\t</figure>
\t\t\t\t\t";
                    } else {
                        // line 25
                        echo "\t\t\t\t\t\t<figure class=\"slide\">
\t\t\t\t\t\t\t<picture>
\t\t\t\t\t\t\t\t<source srcset=\"";
                        // line 27
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["banner"], "getLargeImage", [], "method", false, false, false, 27), "getLink", [], "method", false, false, false, 27), "html", null, true);
                        echo "\" media=\"(min-width: ";
                        echo twig_escape_filter($this->env, (twig_constant("RESPONSIVE_IMAGE_WIDTH", $context["banner"]) + 1), "html", null, true);
                        echo "px)\" />
\t\t\t\t\t\t\t\t";
                        // line 28
                        if ((twig_get_attribute($this->env, $this->source, $context["banner"], "getSmallImage", [], "method", false, false, false, 28) != null)) {
                            // line 29
                            echo "\t\t\t\t\t\t\t\t\t<source srcset=\"";
                            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["banner"], "getSmallImage", [], "method", false, false, false, 29), "getLink", [], "method", false, false, false, 29), "html", null, true);
                            echo "\" />
\t\t\t\t\t\t\t\t";
                        }
                        // line 31
                        echo "\t\t\t\t\t\t\t\t<img src=\"";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["banner"], "getLargeImage", [], "method", false, false, false, 31), "getLink", [], "method", false, false, false, 31), "html", null, true);
                        echo "\" alt=\"\" />
\t\t\t\t\t\t\t</picture>
\t\t\t\t\t\t\t";
                        // line 33
                        if ((($context["caption"] ?? null) != "")) {
                            // line 34
                            echo "\t\t\t\t\t\t\t\t<figcaption class=\"caption container\">
\t\t\t\t\t\t\t\t\t<div class=\"caption-content\">
\t\t\t\t\t\t\t\t\t\t";
                            // line 36
                            echo ($context["caption"] ?? null);
                            echo "
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</figcaption>
\t\t\t\t\t\t\t";
                        }
                        // line 40
                        echo "\t\t\t\t\t\t</figure>
\t\t\t\t\t";
                    }
                    // line 42
                    echo "\t\t\t\t";
                }
                // line 43
                echo "\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['banner'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 44
            echo "\t\t</div>
\t</section>
";
        }
    }

    public function getTemplateName()
    {
        return "template/sections/top-banner.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  146 => 44,  140 => 43,  137 => 42,  133 => 40,  126 => 36,  122 => 34,  120 => 33,  114 => 31,  108 => 29,  106 => 28,  100 => 27,  96 => 25,  92 => 23,  85 => 19,  81 => 17,  79 => 16,  74 => 15,  68 => 13,  66 => 12,  63 => 11,  60 => 10,  57 => 9,  54 => 8,  52 => 7,  48 => 6,  44 => 4,  42 => 3,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% set bannerAsBackground = false %}

{% if banners|length > 0 %}
\t<section class=\"slideshow\">
\t\t<div class=\"foxy slider\">
\t\t\t{% for banner in banners %}
\t\t\t\t{# Ignore banners without images #}
\t\t\t\t{% if banner.getLargeImage() != null %}
\t\t\t\t\t{% set caption = banner.getCaption()|trim %}
\t\t\t\t\t{% if bannerAsBackground %}
\t\t\t\t\t\t<figure class=\"slide\" >
\t\t\t\t\t\t\t{% if banner.getSmallImage() != null %}
\t\t\t\t\t\t\t\t<div class=\"small-screen background-image\" style=\"background-image: url('{{ banner.getSmallImage().getLink() }}')\"></div>
\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t<div class=\"big-screen background-image\" style=\"background-image: url('{{ banner.getLargeImage().getLink() }}')\"></div>
\t\t\t\t\t\t\t{% if caption != '' %}
\t\t\t\t\t\t\t\t<figcaption class=\"caption container\">
\t\t\t\t\t\t\t\t\t<div class=\"caption-content\">
\t\t\t\t\t\t\t\t\t\t{{ caption|raw }}
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</figcaption>
\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t</figure>
\t\t\t\t\t{% else %}
\t\t\t\t\t\t<figure class=\"slide\">
\t\t\t\t\t\t\t<picture>
\t\t\t\t\t\t\t\t<source srcset=\"{{ banner.getLargeImage().getLink() }}\" media=\"(min-width: {{ constant('RESPONSIVE_IMAGE_WIDTH', banner) + 1 }}px)\" />
\t\t\t\t\t\t\t\t{% if banner.getSmallImage() != null %}
\t\t\t\t\t\t\t\t\t<source srcset=\"{{ banner.getSmallImage().getLink() }}\" />
\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t\t<img src=\"{{ banner.getLargeImage().getLink() }}\" alt=\"\" />
\t\t\t\t\t\t\t</picture>
\t\t\t\t\t\t\t{% if caption != '' %}
\t\t\t\t\t\t\t\t<figcaption class=\"caption container\">
\t\t\t\t\t\t\t\t\t<div class=\"caption-content\">
\t\t\t\t\t\t\t\t\t\t{{ caption|raw }}
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</figcaption>
\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t</figure>
\t\t\t\t\t{% endif %}
\t\t\t\t{% endif %}
\t\t\t{% endfor %}
\t\t</div>
\t</section>
{% endif %}
", "template/sections/top-banner.twig", "/home/meatadev/public_html/theme/twig/template/sections/top-banner.twig");
    }
}
