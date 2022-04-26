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

/* products/products-page.twig */
class __TwigTemplate_13b7db631edca36604bb9257189dc66d extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'products_content' => [$this, 'block_products_content'],
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
        $this->parent = $this->loadTemplate("pages/page.twig", "products/products-page.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 7
    public function block_products_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 8
        echo "\t";
        $this->loadTemplate("pages/page.twig", "products/products-page.twig", 8)->displayBlock("content", $context);
        echo "
";
    }

    public function getTemplateName()
    {
        return "products/products-page.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  50 => 8,  46 => 7,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'pages/page.twig' %}

{# 
 # because ProductsController usually redirects to the first active category we will only end up here if there are no active categories 
 # (no need for category navigation) or that behavior has been changed, in which case this only need be changed to extend products/sections/base-page.twig
 #}
{% block products_content %}
\t{{ block('content', 'pages/page.twig') }}
{% endblock %}
", "products/products-page.twig", "/home/meatadev/public_html/theme/twig/products/products-page.twig");
    }
}
