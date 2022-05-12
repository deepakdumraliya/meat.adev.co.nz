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

/* pages/front-page.twig */
class __TwigTemplate_eb1b11eabf12e4369d3cca69cca71b52 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'content_wrapper' => [$this, 'block_content_wrapper'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "pages/page.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("pages/page.twig", "pages/front-page.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_content_wrapper($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 7
        echo "


\t";
        // line 10
        $this->displayParentBlock("content_wrapper", $context, $blocks);
        echo "
\t";
        // line 12
        echo "

\t\t";
        // line 14
        $this->loadTemplate("pages/front-sections/categoryblock.twig", "pages/front-page.twig", 14)->display(twig_to_array(["section" => ["displayCategory" => twig_get_attribute($this->env, $this->source,         // line 16
($context["page"] ?? null), "display_Category", [], "any", false, false, false, 16), "category_Title" => twig_get_attribute($this->env, $this->source,         // line 17
($context["page"] ?? null), "category_Title", [], "any", false, false, false, 17), "category_Desc" => twig_get_attribute($this->env, $this->source,         // line 18
($context["page"] ?? null), "category_Desc", [], "any", false, false, false, 18), "catNavItems" =>         // line 19
($context["catNavItems"] ?? null)]]));
        // line 22
        echo "\t";
        // line 23
        $this->loadTemplate("products/sections/featured.twig", "pages/front-page.twig", 23)->display($context);
        // line 24
        echo "




";
    }

    public function getTemplateName()
    {
        return "pages/front-page.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 24,  71 => 23,  69 => 22,  67 => 19,  66 => 18,  65 => 17,  64 => 16,  63 => 14,  59 => 12,  55 => 10,  50 => 7,  46 => 5,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'pages/page.twig' %}

{# content_wrapper is the block most likely to be overidden (to include multiple content sections), 
 # but on some sites it may only be necessary to override the content block, or not at all #}
{% block content_wrapper %}
{# {{dump(getallfeatured)}} #}



\t{{ parent() }}
\t{# {%\tif page.display_Category\t%} #}


\t\t{% include 'pages/front-sections/categoryblock.twig' with {
\t\t\t'section':{
\t\t\t\t'displayCategory':page.display_Category,
\t\t\t\t'category_Title':page.category_Title,
\t\t\t\t'category_Desc':page.category_Desc,
\t\t\t\t'catNavItems' : catNavItems
\t\t\t}
\t\t} only %}
\t{# {% endif %} #}
{% include 'products/sections/featured.twig' %}





{% endblock %}
", "pages/front-page.twig", "/home/meatadev/public_html/theme/twig/pages/front-page.twig");
    }
}
