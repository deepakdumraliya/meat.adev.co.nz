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

/* pages/page.twig */
class __TwigTemplate_276b23c12476d058c7a031ba2a507250 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'content' => [$this, 'block_content'],
            'front_page' => [$this, 'block_front_page'],
            'contact' => [$this, 'block_contact'],
            'page_content' => [$this, 'block_page_content'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "template/template.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("template/template.twig", "pages/page.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 4
        echo "\t";
        $this->displayBlock('front_page', $context, $blocks);
        // line 5
        echo "\t";
        $this->displayBlock('contact', $context, $blocks);
        // line 6
        echo "
\t";
        // line 10
        echo "\t";
        // line 13
        echo "\t";
        $this->displayBlock('page_content', $context, $blocks);
    }

    // line 4
    public function block_front_page($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 5
    public function block_contact($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 13
    public function block_page_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 14
        echo "\t\t";
        echo call_user_func_array($this->env->getFilter('expandHtml')->getCallable(), [twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "getPageContent", [], "method", false, false, false, 14)]);
        echo "
\t";
    }

    public function getTemplateName()
    {
        return "pages/page.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 14,  81 => 13,  75 => 5,  69 => 4,  64 => 13,  62 => 10,  59 => 6,  56 => 5,  53 => 4,  49 => 3,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'template/template.twig' %}

{% block content %}
\t{% block front_page %}{% endblock %}
\t{% block contact %}{% endblock %}

\t{# {% block page_image %}
\t\t{{ page.image.tag('content-image', page.imageDescription)|raw }}
\t{% endblock %} #}
\t{# {% block content_title %}
\t\t<h1>{{ page.getMainHeading() }}</h1>
\t{% endblock %} #}
\t{% block page_content %}
\t\t{{ page.getPageContent()|expandHtml }}
\t{% endblock %}
{% endblock %}
", "pages/page.twig", "/home/meatadev/public_html/theme/twig/pages/page.twig");
    }
}
