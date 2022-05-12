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

    // line 4
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 5
        echo "\t
\t

<section class=\"space-ptb bg-light ";
        // line 8
        if (($context["product"] ?? null)) {
            echo "meet-product";
        }
        echo "\">

\t\t<div class=\"container\">
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-lg-12\">
\t\t\t\t\t<div class=\"section-title\">
\t\t\t\t\t";
        // line 14
        if (($context["product"] ?? null)) {
            // line 15
            echo "\t\t\t\t\t\t<h2>";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "name", [], "any", false, false, false, 15), "html", null, true);
            echo "</h2>
\t\t\t\t\t";
        } else {
            // line 17
            echo "\t\t\t\t\t\t<h2>";
            echo twig_get_attribute($this->env, $this->source, ($context["category"] ?? null), "getNavLabel", [], "method", false, false, false, 17);
            echo "</h2>
\t\t\t\t\t\t<p>";
            // line 18
            echo twig_get_attribute($this->env, $this->source, ($context["category"] ?? null), "getPageContent", [], "method", false, false, false, 18);
            echo "</p>
\t\t\t\t\t";
        }
        // line 20
        echo "\t\t\t\t\t\t
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t";
        // line 24
        $this->displayBlock('products_content', $context, $blocks);
        // line 25
        echo "\t\t</div>
\t</section>
\t

";
        // line 30
        echo "\t";
    }

    // line 24
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
        return array (  103 => 24,  99 => 30,  93 => 25,  91 => 24,  85 => 20,  80 => 18,  75 => 17,  69 => 15,  67 => 14,  56 => 8,  51 => 5,  47 => 4,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'pages/page.twig' %}


{% block content %}
\t
\t

<section class=\"space-ptb bg-light {% if product %}meet-product{% endif %}\">

\t\t<div class=\"container\">
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-lg-12\">
\t\t\t\t\t<div class=\"section-title\">
\t\t\t\t\t{% if product %}
\t\t\t\t\t\t<h2>{{ product.name }}</h2>
\t\t\t\t\t{% else %}
\t\t\t\t\t\t<h2>{{ category.getNavLabel()|raw }}</h2>
\t\t\t\t\t\t<p>{{ category.getPageContent()|raw }}</p>
\t\t\t\t\t{% endif %}
\t\t\t\t\t\t
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t{% block products_content %}{% endblock %}
\t\t</div>
\t</section>
\t

{# <ul> #}
\t{# {% include \"template/sections/navigation.twig\" with {
\t\t\"navItems\": catNavItems,
\t\t\"currentDepth\": 1,
\t\t\"maxDepth\": 2,
\t\t\"currentNavItem\": category
\t} only %} #}
{# </ul> #}
{# </div> #}
{# <div class=\"products-content\">

</div>
</div> #}
{% endblock %}


", "products/sections/base-page.twig", "/home/meatadev/public_html/theme/twig/products/sections/base-page.twig");
    }
}
