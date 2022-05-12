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

/* pages/front-sections/categoryblock.twig */
class __TwigTemplate_c4787df281f47d81a3c197f0455e39b5 extends Template
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
        echo "<!--=================================
        Meet our meat -->
<section class=\"space-ptb bg-light\">
\t<div class=\"container\">
\t\t<div class=\"row\">
\t\t\t<div class=\"col-md-12 col-lg-6\">
\t\t\t\t<div class=\"section-title\">
                <h2>";
        // line 8
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["section"] ?? null), "category_Title", [], "any", false, false, false, 8), "html", null, true);
        echo "</h2>
\t\t\t\t";
        // line 9
        echo twig_get_attribute($this->env, $this->source, ($context["section"] ?? null), "category_Desc", [], "any", false, false, false, 9);
        echo "
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
\t<div class=\"gallery mt-5\">
\t\t<div class=\"container\">
\t\t\t<div class=\"row\">
            ";
        // line 17
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["section"] ?? null), "catNavItems", [], "any", false, false, false, 17));
        foreach ($context['_seq'] as $context["_key"] => $context["navItem"]) {
            // line 18
            echo "

\t\t\t\t<div class=\"col-xs-12 col-md-3 mt-4\">
\t\t\t\t\t<div class=\"img-container\">
\t\t\t\t\t\t<img class=\"img-fluid\" src=\"";
            // line 22
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["navItem"], "image", [], "any", false, false, false, 22), "getLink", [], "method", false, false, false, 22), "html", null, true);
            echo "\"/>
\t\t\t\t\t\t<div class=\"img-content\">
\t\t\t\t\t\t\t<h4 class=\"category\">
\t\t\t\t\t\t\t\t<a href=\"";
            // line 25
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["navItem"], "getNavPath", [], "method", false, false, false, 25), "html", null, true);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["navItem"], "getNavLabel", [], "method", false, false, false, 25);
            echo "</a>
\t\t\t\t\t\t\t</h4>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['navItem'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 31
        echo "\t\t\t</div>
\t\t</div>
\t</div>
</section>



";
    }

    public function getTemplateName()
    {
        return "pages/front-sections/categoryblock.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  91 => 31,  77 => 25,  71 => 22,  65 => 18,  61 => 17,  50 => 9,  46 => 8,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!--=================================
        Meet our meat -->
<section class=\"space-ptb bg-light\">
\t<div class=\"container\">
\t\t<div class=\"row\">
\t\t\t<div class=\"col-md-12 col-lg-6\">
\t\t\t\t<div class=\"section-title\">
                <h2>{{section.category_Title}}</h2>
\t\t\t\t{{section.category_Desc|raw}}
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
\t<div class=\"gallery mt-5\">
\t\t<div class=\"container\">
\t\t\t<div class=\"row\">
            {% for navItem in section.catNavItems %}


\t\t\t\t<div class=\"col-xs-12 col-md-3 mt-4\">
\t\t\t\t\t<div class=\"img-container\">
\t\t\t\t\t\t<img class=\"img-fluid\" src=\"{{ navItem.image.getLink() }}\"/>
\t\t\t\t\t\t<div class=\"img-content\">
\t\t\t\t\t\t\t<h4 class=\"category\">
\t\t\t\t\t\t\t\t<a href=\"{{ navItem.getNavPath() }}\">{{ navItem.getNavLabel()|raw }}</a>
\t\t\t\t\t\t\t</h4>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
                {% endfor %}
\t\t\t</div>
\t\t</div>
\t</div>
</section>



", "pages/front-sections/categoryblock.twig", "/home/meatadev/public_html/theme/twig/pages/front-sections/categoryblock.twig");
    }
}
