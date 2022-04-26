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

/* template/sections/navigation.twig */
class __TwigTemplate_681e2355951634c04bd9be8ed3b90c17 extends Template
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
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["navItems"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["navItem"]) {
            // line 2
            echo "
\t";
            // line 3
            $context["classes"] = [];
            // line 4
            echo "\t";
            $context["children"] = [];
            // line 5
            echo "
\t";
            // line 6
            if ((($context["currentDepth"] ?? null) < ($context["maxDepth"] ?? null))) {
                // line 7
                echo "\t\t";
                $context["children"] = twig_get_attribute($this->env, $this->source, $context["navItem"], "getChildNavItems", [], "method", false, false, false, 7);
                // line 8
                echo "\t";
            }
            // line 9
            echo "
\t";
            // line 10
            if (twig_get_attribute($this->env, $this->source, $context["navItem"], "isHomepage", [], "method", false, false, false, 10)) {
                // line 11
                echo "\t\t";
                $context["classes"] = twig_array_merge(($context["classes"] ?? null), [0 => "home"]);
                // line 12
                echo "\t";
            }
            // line 13
            echo "
\t";
            // line 14
            if (twig_get_attribute($this->env, $this->source, $context["navItem"], "isNavSelected", [0 => ($context["currentNavItem"] ?? null)], "method", false, false, false, 14)) {
                // line 15
                echo "\t\t";
                $context["classes"] = twig_array_merge(($context["classes"] ?? null), [0 => "sel"]);
                // line 16
                echo "\t";
            }
            // line 17
            echo "
\t";
            // line 18
            if (twig_length_filter($this->env, ($context["children"] ?? null))) {
                // line 19
                echo "\t\t";
                $context["classes"] = twig_array_merge(($context["classes"] ?? null), [0 => "has-children"]);
                // line 20
                echo "\t";
            }
            // line 21
            echo "
\t<li class=\"";
            // line 22
            echo twig_escape_filter($this->env, twig_join_filter(($context["classes"] ?? null), " "), "html", null, true);
            echo "\">
\t\t<a href=\"";
            // line 23
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["navItem"], "getNavPath", [], "method", false, false, false, 23), "html", null, true);
            echo "\" ";
            if (twig_get_attribute($this->env, $this->source, $context["navItem"], "isOpenedInNewWindow", [], "method", false, false, false, 23)) {
                echo " target='_blank' ";
            }
            echo ">";
            echo twig_get_attribute($this->env, $this->source, $context["navItem"], "getNavLabel", [], "method", false, false, false, 23);
            echo "</a>
\t\t";
            // line 24
            if ((twig_length_filter($this->env, ($context["children"] ?? null)) > 0)) {
                // line 25
                echo "\t\t\t<span class='open-sub'></span>
\t\t\t<ul>
\t\t\t \t";
                // line 27
                $this->loadTemplate("template/sections/navigation.twig", "template/sections/navigation.twig", 27)->display(twig_to_array(["navItems" => ($context["children"] ?? null), "currentDepth" => (($context["currentDepth"] ?? null) + 1), "maxDepth" => ($context["maxDepth"] ?? null), "currentNavItem" => ($context["currentNavItem"] ?? null)]));
                // line 28
                echo "\t\t\t</ul>
\t\t";
            }
            // line 30
            echo "\t</li>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['navItem'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    public function getTemplateName()
    {
        return "template/sections/navigation.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  122 => 30,  118 => 28,  116 => 27,  112 => 25,  110 => 24,  100 => 23,  96 => 22,  93 => 21,  90 => 20,  87 => 19,  85 => 18,  82 => 17,  79 => 16,  76 => 15,  74 => 14,  71 => 13,  68 => 12,  65 => 11,  63 => 10,  60 => 9,  57 => 8,  54 => 7,  52 => 6,  49 => 5,  46 => 4,  44 => 3,  41 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% for navItem in navItems %}

\t{% set classes = [] %}
\t{% set children = [] %}

\t{% if currentDepth < maxDepth %}
\t\t{% set children = navItem.getChildNavItems() %}
\t{% endif %}

\t{% if navItem.isHomepage() %}
\t\t{% set classes = classes|merge([\"home\"]) %}
\t{% endif %}

\t{% if navItem.isNavSelected(currentNavItem) %}
\t\t{% set classes = classes|merge([\"sel\"]) %}
\t{% endif %}

\t{% if children|length %}
\t\t{% set classes = classes|merge([\"has-children\"]) %}
\t{% endif %}

\t<li class=\"{{ classes|join(\" \") }}\">
\t\t<a href=\"{{ navItem.getNavPath() }}\" {% if navItem.isOpenedInNewWindow() %} target='_blank' {% endif %}>{{ navItem.getNavLabel()|raw }}</a>
\t\t{% if children|length > 0 %}
\t\t\t<span class='open-sub'></span>
\t\t\t<ul>
\t\t\t \t{% include \"template/sections/navigation.twig\" with {\"navItems\": children, \"currentDepth\": currentDepth + 1, \"maxDepth\": maxDepth, \"currentNavItem\": currentNavItem} only %}
\t\t\t</ul>
\t\t{% endif %}
\t</li>
{% endfor %}
", "template/sections/navigation.twig", "/home/meatadev/public_html/theme/twig/template/sections/navigation.twig");
    }
}
