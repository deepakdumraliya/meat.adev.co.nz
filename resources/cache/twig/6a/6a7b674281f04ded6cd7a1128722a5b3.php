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

/* products/sections/base-page.twig */
class __TwigTemplate_172bf2ec7ad394b8f2a43dd34e8d6f3c extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'content' => [$this, 'block_content'],
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
        $this->parent = $this->loadTemplate("pages/page.twig", "products/sections/base-page.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 4
        echo "\t<div class=\"columns contains-sidebar product-section-wrapper\">
\t\t<div class=\"sidebar category-nav\">
\t\t\t<ul>
\t\t\t\t";
        // line 7
        $this->loadTemplate("template/sections/navigation.twig", "products/sections/base-page.twig", 7)->display(twig_to_array(["navItems" =>         // line 8
($context["catNavItems"] ?? null), "currentDepth" => 1, "maxDepth" => 2, "currentNavItem" =>         // line 11
($context["category"] ?? null)]));
        // line 13
        echo "\t\t\t</ul>
\t\t</div>
\t\t<div class=\"products-content\">
\t\t\t";
        // line 16
        $this->displayBlock('products_content', $context, $blocks);
        // line 17
        echo "\t\t</div>
\t</div>
";
    }

    // line 16
    public function block_products_content($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    public function getTemplateName()
    {
        return "products/sections/base-page.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 16,  67 => 17,  65 => 16,  60 => 13,  58 => 11,  57 => 8,  56 => 7,  51 => 4,  47 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'pages/page.twig' %}

{% block content %}
\t<div class=\"columns contains-sidebar product-section-wrapper\">
\t\t<div class=\"sidebar category-nav\">
\t\t\t<ul>
\t\t\t\t{% include \"template/sections/navigation.twig\" with {
\t\t\t\t\t\"navItems\": catNavItems,
\t\t\t\t\t\"currentDepth\": 1,
\t\t\t\t\t\"maxDepth\": 2,
\t\t\t\t\t\"currentNavItem\": category
\t\t\t\t} only %}
\t\t\t</ul>
\t\t</div>
\t\t<div class=\"products-content\">
\t\t\t{% block products_content %}{% endblock %}
\t\t</div>
\t</div>
{% endblock %}
", "products/sections/base-page.twig", "/home/meatadev/public_html/theme/twig/products/sections/base-page.twig");
    }
}
