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

/* pages/contact-page.twig */
class __TwigTemplate_834d6934a6922eb373fe2eac055e3fe2 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'content_wrapper' => [$this, 'block_content_wrapper'],
            'content' => [$this, 'block_content'],
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
        $this->parent = $this->loadTemplate("pages/page.twig", "pages/contact-page.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_content_wrapper($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 4
        echo "<!--=================================
        Contact -->
<section class=\"contact space-ptb bg-light\">
\t<div class=\"container\">
\t\t<div class=\"section-title\">
\t\t\t<h2>Contact Us</h2>
\t\t</div>
\t\t<div class=\"row\">
\t\t\t<div class=\"col-xl-3 col-lg-12\">
\t\t\t\t<div class=\"meet-our-meat\">
\t\t\t\t\t<span class=\"contact-title text-primary mb-3\">Meet Our Meat</span>
\t\t\t\t\t<p class=\"mb-3\">Email: ";
        // line 15
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["config"] ?? null), "email", [], "any", false, false, false, 15), "html", null, true);
        echo "</p>
\t\t\t\t\t<ul class=\"social-icons list-unstyled list-inline mb-0\">
\t\t\t\t\t\t<li class=\"list-inline-item\">
\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t<i class=\"fa-brands fa-facebook-f\"></i>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li class=\"list-inline-item\">
\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t<i class=\"fa-brands fa-twitter\"></i>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li class=\"list-inline-item\">
\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t<i class=\"fa-brands fa-instagram\"></i>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t</ul>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"col-xl-4 col-lg-12 mt-5 mt-xl-0\">
\t\t\t\t<span class=\"contact-title text-primary mb-3\">";
        // line 36
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["contactForm"] ?? null), "name", [], "any", false, false, false, 36), "html", null, true);
        echo "</span>
\t\t\t\t<div class=\"form contact-form\">\t
\t\t\t\t\t";
        // line 38
        echo twig_get_attribute($this->env, $this->source, ($context["contactForm"] ?? null), "outputForm", [], "method", false, false, false, 38);
        echo "

\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"col-xl-5 col-lg-12 pt-5 pt-xl-0\">
\t\t\t\t<img class=\"img-fluid\" src=\"/theme/images/contact.jpg\">
\t\t\t</div>
\t\t</div>
\t</div>
</section>
<!--=================================
        Contact -->

";
    }

    // line 53
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 54
        echo "HEllo

\t<div class=\"columns\">
\t\t";
        // line 57
        $this->displayBlock("content_title", $context, $blocks);
        echo "
\t\t<div class=\"col-2\">
\t\t\t";
        // line 59
        $this->displayBlock("page_content", $context, $blocks);
        echo "
\t\t\t<p>";
        // line 60
        echo twig_nl2br(twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["config"] ?? null), "address", [], "any", false, false, false, 60), "html", null, true));
        echo "</p>
\t\t\t<p>
\t\t\t\tPhone: <a href=\"tel:";
        // line 62
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["config"] ?? null), "getPhoneDigits", [], "method", false, false, false, 62), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["config"] ?? null), "phone", [], "any", false, false, false, 62), "html", null, true);
        echo "</a><br />
\t\t\t\tEmail: <a href=\"mailto:";
        // line 63
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["config"] ?? null), "email", [], "any", false, false, false, 63), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["config"] ?? null), "email", [], "any", false, false, false, 63), "html", null, true);
        echo "</a>
\t\t\t</p>
\t\t\t";
        // line 65
        echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "image", [], "any", false, false, false, 65), "tag", [0 => "", 1 => twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "imageDescription", [], "any", false, false, false, 65)], "method", false, false, false, 65);
        echo "
\t\t</div>
\t\t<div class=\"col-2\">
\t\t\t<h2>";
        // line 68
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["contactForm"] ?? null), "name", [], "any", false, false, false, 68), "html", null, true);
        echo "</h2>
\t\t\t";
        // line 69
        echo twig_get_attribute($this->env, $this->source, ($context["contactForm"] ?? null), "outputForm", [], "method", false, false, false, 69);
        echo "
\t\t</div>
\t</div>
";
    }

    public function getTemplateName()
    {
        return "pages/contact-page.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  157 => 69,  153 => 68,  147 => 65,  140 => 63,  134 => 62,  129 => 60,  125 => 59,  120 => 57,  115 => 54,  111 => 53,  93 => 38,  88 => 36,  64 => 15,  51 => 4,  47 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'pages/page.twig' %}

{% block content_wrapper %}
<!--=================================
        Contact -->
<section class=\"contact space-ptb bg-light\">
\t<div class=\"container\">
\t\t<div class=\"section-title\">
\t\t\t<h2>Contact Us</h2>
\t\t</div>
\t\t<div class=\"row\">
\t\t\t<div class=\"col-xl-3 col-lg-12\">
\t\t\t\t<div class=\"meet-our-meat\">
\t\t\t\t\t<span class=\"contact-title text-primary mb-3\">Meet Our Meat</span>
\t\t\t\t\t<p class=\"mb-3\">Email: {{ config.email }}</p>
\t\t\t\t\t<ul class=\"social-icons list-unstyled list-inline mb-0\">
\t\t\t\t\t\t<li class=\"list-inline-item\">
\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t<i class=\"fa-brands fa-facebook-f\"></i>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li class=\"list-inline-item\">
\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t<i class=\"fa-brands fa-twitter\"></i>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li class=\"list-inline-item\">
\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t<i class=\"fa-brands fa-instagram\"></i>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t</ul>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"col-xl-4 col-lg-12 mt-5 mt-xl-0\">
\t\t\t\t<span class=\"contact-title text-primary mb-3\">{{ contactForm.name }}</span>
\t\t\t\t<div class=\"form contact-form\">\t
\t\t\t\t\t{{ contactForm.outputForm()|raw }}

\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"col-xl-5 col-lg-12 pt-5 pt-xl-0\">
\t\t\t\t<img class=\"img-fluid\" src=\"/theme/images/contact.jpg\">
\t\t\t</div>
\t\t</div>
\t</div>
</section>
<!--=================================
        Contact -->

{% endblock %}

{% block content %}
HEllo

\t<div class=\"columns\">
\t\t{{ block('content_title') }}
\t\t<div class=\"col-2\">
\t\t\t{{ block('page_content') }}
\t\t\t<p>{{ config.address|nl2br }}</p>
\t\t\t<p>
\t\t\t\tPhone: <a href=\"tel:{{ config.getPhoneDigits() }}\">{{ config.phone }}</a><br />
\t\t\t\tEmail: <a href=\"mailto:{{config.email }}\">{{ config.email }}</a>
\t\t\t</p>
\t\t\t{{ page.image.tag('', page.imageDescription)|raw }}
\t\t</div>
\t\t<div class=\"col-2\">
\t\t\t<h2>{{ contactForm.name }}</h2>
\t\t\t{{ contactForm.outputForm()|raw }}
\t\t</div>
\t</div>
{% endblock %}", "pages/contact-page.twig", "/home/meatadev/public_html/theme/twig/pages/contact-page.twig");
    }
}
