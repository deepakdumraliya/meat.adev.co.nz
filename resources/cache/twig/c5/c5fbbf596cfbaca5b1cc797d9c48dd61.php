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

/* searching/search-page.twig */
class __TwigTemplate_c6dff8ba8edbce753ac41c2d5de69338 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'content_banner' => [$this, 'block_content_banner'],
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
        $this->parent = $this->loadTemplate("pages/page.twig", "searching/search-page.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_content_banner($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 5
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 6
        echo "\t<form class=\"searchResult searchForm\" action=\"\" method=\"get\">
\t\t<p>
\t\t\t<label for=\"SearchResult-search\">Results for:</label> <input type=\"text\" name=\"search\" id=\"SearchResult-search\" value=\"";
        // line 8
        echo twig_escape_filter($this->env, ($context["search"] ?? null), "html", null, true);
        echo "\" />
\t\t\t<input type=\"submit\" class=\"button\" value=\"Search\" />
\t\t</p>
\t\t<p>
\t\t\t<input type=\"hidden\" name=\"sort\" value=\"";
        // line 12
        echo twig_escape_filter($this->env, ($context["sort"] ?? null), "html", null, true);
        echo "\" />
\t\t</p>
\t</form>
\t";
        // line 15
        if ((($context["search"] ?? null) == "")) {
            // line 16
            echo "\t\tPlease enter a search term.
\t";
        } elseif ((twig_length_filter($this->env,         // line 17
($context["results"] ?? null)) == 0)) {
            // line 18
            echo "\t\tSorry no results were found. Please try a different search.
\t";
        } else {
            // line 20
            echo "\t\t<section class=\"search-results\">
\t\t\t";
            // line 21
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["results"] ?? null));
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
            foreach ($context['_seq'] as $context["_key"] => $context["result"]) {
                // line 22
                echo "\t\t\t\t";
                $this->loadTemplate("searching/sections/search-result.twig", "searching/search-page.twig", 22)->display($context);
                // line 23
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['result'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 24
            echo "\t\t</section><!-- end search results -->
\t";
        }
    }

    public function getTemplateName()
    {
        return "searching/search-page.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  122 => 24,  108 => 23,  105 => 22,  88 => 21,  85 => 20,  81 => 18,  79 => 17,  76 => 16,  74 => 15,  68 => 12,  61 => 8,  57 => 6,  53 => 5,  47 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"pages/page.twig\" %}

{% block content_banner %}{# none #}{% endblock %}

{% block content %}
\t<form class=\"searchResult searchForm\" action=\"\" method=\"get\">
\t\t<p>
\t\t\t<label for=\"SearchResult-search\">Results for:</label> <input type=\"text\" name=\"search\" id=\"SearchResult-search\" value=\"{{ search }}\" />
\t\t\t<input type=\"submit\" class=\"button\" value=\"Search\" />
\t\t</p>
\t\t<p>
\t\t\t<input type=\"hidden\" name=\"sort\" value=\"{{ sort }}\" />
\t\t</p>
\t</form>
\t{% if search == '' %}
\t\tPlease enter a search term.
\t{% elseif results|length == 0 %}
\t\tSorry no results were found. Please try a different search.
\t{% else %}
\t\t<section class=\"search-results\">
\t\t\t{% for result in results %}
\t\t\t\t{% include \"searching/sections/search-result.twig\" %}
\t\t\t{% endfor %}
\t\t</section><!-- end search results -->
\t{% endif %}
{% endblock %}", "searching/search-page.twig", "/home/meatadev/public_html/theme/twig/searching/search-page.twig");
    }
}
