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

/* products/category-page.twig */
class __TwigTemplate_28b93f1faf570146607a11fdff957c46 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'meta_data' => [$this, 'block_meta_data'],
            'content_title' => [$this, 'block_content_title'],
            'products_content' => [$this, 'block_products_content'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "products/sections/base-page.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("products/sections/base-page.twig", "products/category-page.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_meta_data($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 4
        echo "\t<title>";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["category"] ?? null), "getPageTitle", [], "method", false, false, false, 4), "html", null, true);
        echo "</title>
\t<meta name=\"description\" content=\"";
        // line 5
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["category"] ?? null), "getMetaDescription", [], "method", false, false, false, 5), "html", null, true);
        echo "\" />
";
    }

    // line 8
    public function block_content_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 9
        echo "\t<h1>";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["category"] ?? null), "getMainHeading", [], "method", false, false, false, 9), "html", null, true);
        echo "</h1>
";
    }

    // line 12
    public function block_products_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 13
        echo "\t";
        $context["products"] = twig_get_attribute($this->env, $this->source, ($context["category"] ?? null), "getAllVisibleProducts", [], "method", false, false, false, 13);
        // line 14
        echo "\t";
        // line 15
        echo "\t";
        if (($context["products"] ?? null)) {
            // line 16
            echo "\t\t";
            // line 17
            echo "\t\t<div class=\"row mt-4\">
\t\t\t";
            // line 18
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["products"] ?? null));
            $context['loop'] = [
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            ];
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 19
                echo "\t\t\t\t";
                $this->loadTemplate("products/sections/product-summary.twig", "products/category-page.twig", 19)->display($context);
                // line 20
                echo "\t\t\t";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 21
            echo "\t\t</div>
\t";
        } else {
            // line 23
            echo "\t\t<p class=\"message\">No products were found in this category.</p>
\t";
        }
    }

    public function getTemplateName()
    {
        return "products/category-page.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  129 => 23,  125 => 21,  111 => 20,  108 => 19,  91 => 18,  88 => 17,  86 => 16,  83 => 15,  81 => 14,  78 => 13,  74 => 12,  67 => 9,  63 => 8,  57 => 5,  52 => 4,  48 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'products/sections/base-page.twig' %}

{% block meta_data %}
\t<title>{{ category.getPageTitle() }}</title>
\t<meta name=\"description\" content=\"{{ category.getMetaDescription() }}\" />
{% endblock %}

{% block content_title %}
\t<h1>{{ category.getMainHeading() }}</h1>
{% endblock %}

{% block products_content %}
\t{% set products = category.getAllVisibleProducts() %}
\t{# {{ category.getPageContent()|raw }} #}
\t{% if products %}
\t\t{# <ul class=\"product-links\"> #}
\t\t<div class=\"row mt-4\">
\t\t\t{% for product in products %}
\t\t\t\t{% include 'products/sections/product-summary.twig' %}
\t\t\t{% endfor %}
\t\t</div>
\t{% else %}
\t\t<p class=\"message\">No products were found in this category.</p>
\t{% endif %}
{% endblock %}
", "products/category-page.twig", "/home/meatadev/public_html/theme/twig/products/category-page.twig");
    }
}
