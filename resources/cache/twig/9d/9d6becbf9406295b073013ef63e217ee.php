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
            'page_image' => [$this, 'block_page_image'],
            'content_title' => [$this, 'block_content_title'],
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
        $this->displayBlock('page_image', $context, $blocks);
        // line 7
        echo "\t";
        $this->displayBlock('content_title', $context, $blocks);
        // line 10
        echo "\t";
        $this->displayBlock('page_content', $context, $blocks);
    }

    // line 4
    public function block_page_image($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 5
        echo "\t\t";
        echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "image", [], "any", false, false, false, 5), "tag", [0 => "content-image", 1 => twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "imageDescription", [], "any", false, false, false, 5)], "method", false, false, false, 5);
        echo "
\t";
    }

    // line 7
    public function block_content_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 8
        echo "\t\t<h1>";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "getMainHeading", [], "method", false, false, false, 8), "html", null, true);
        echo "</h1>
\t";
    }

    // line 10
    public function block_page_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 11
        echo "\t\t";
        echo call_user_func_array($this->env->getFilter('expandHtml')->getCallable(), [twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "getPageContent", [], "method", false, false, false, 11)]);
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
        return array (  90 => 11,  86 => 10,  79 => 8,  75 => 7,  68 => 5,  64 => 4,  59 => 10,  56 => 7,  53 => 4,  49 => 3,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'template/template.twig' %}

{% block content %}
\t{% block page_image %}
\t\t{{ page.image.tag('content-image', page.imageDescription)|raw }}
\t{% endblock %}
\t{% block content_title %}
\t\t<h1>{{ page.getMainHeading() }}</h1>
\t{% endblock %}
\t{% block page_content %}
\t\t{{ page.getPageContent()|expandHtml }}
\t{% endblock %}
{% endblock %}
", "pages/page.twig", "/home/meatadev/public_html/theme/twig/pages/page.twig");
    }
}
