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

/* cart/sections/steps.twig */
class __TwigTemplate_ea4f6db60290ebbaf3225370e4712941 extends Template
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
        $context["reachedCurrent"] = false;
        // line 2
        $context["current"] = false;
        // line 3
        echo "<ul class=\"checkout-navigation\">
\t";
        // line 4
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["controller"] ?? null), "getCheckoutSteps", [], "method", false, false, false, 4));
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
        foreach ($context['_seq'] as $context["label"] => $context["url"]) {
            // line 5
            echo "\t\t";
            if (($context["label"] == ($context["step"] ?? null))) {
                // line 6
                echo "\t\t\t";
                $context["current"] = true;
                // line 7
                echo "\t\t";
            }
            // line 8
            echo "\t\t<li class=\"";
            echo ((($context["current"] ?? null)) ? ("current") : (""));
            echo " ";
            echo ((($context["reachedCurrent"] ?? null)) ? ("unavailable") : (""));
            echo "\">
\t\t\t";
            // line 9
            if (($context["reachedCurrent"] ?? null)) {
                // line 10
                echo "\t\t\t\t";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 10), "html", null, true);
                echo ". ";
                echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $context["label"]), "html", null, true);
                echo "
\t\t\t";
            } else {
                // line 12
                echo "\t\t\t\t<a href=\"";
                echo twig_escape_filter($this->env, $context["url"], "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 12), "html", null, true);
                echo ". ";
                echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $context["label"]), "html", null, true);
                echo "</a>
\t\t\t";
            }
            // line 14
            echo "\t\t</li>
\t\t";
            // line 15
            if (($context["current"] ?? null)) {
                // line 16
                echo "\t\t\t";
                $context["reachedCurrent"] = true;
                // line 17
                echo "\t\t\t";
                $context["current"] = false;
                // line 18
                echo "\t\t";
            }
            // line 19
            echo "\t";
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
        unset($context['_seq'], $context['_iterated'], $context['label'], $context['url'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 20
        echo "</ul>";
    }

    public function getTemplateName()
    {
        return "cart/sections/steps.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  125 => 20,  111 => 19,  108 => 18,  105 => 17,  102 => 16,  100 => 15,  97 => 14,  87 => 12,  79 => 10,  77 => 9,  70 => 8,  67 => 7,  64 => 6,  61 => 5,  44 => 4,  41 => 3,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% set reachedCurrent = false %}
{% set current = false %}
<ul class=\"checkout-navigation\">
\t{% for label, url in controller.getCheckoutSteps() %}
\t\t{% if label == step %}
\t\t\t{% set current = true %}
\t\t{% endif %}
\t\t<li class=\"{{ current ? \"current\" : \"\" }} {{ reachedCurrent ? \"unavailable\" : \"\" }}\">
\t\t\t{% if reachedCurrent %}
\t\t\t\t{{ loop.index }}. {{ label|capitalize }}
\t\t\t{% else %}
\t\t\t\t<a href=\"{{ url }}\">{{ loop.index }}. {{ label|capitalize }}</a>
\t\t\t{% endif %}
\t\t</li>
\t\t{% if current %}
\t\t\t{% set reachedCurrent = true %}
\t\t\t{% set current = false %}
\t\t{% endif %}
\t{% endfor %}
</ul>", "cart/sections/steps.twig", "/home/meatadev/public_html/theme/twig/cart/sections/steps.twig");
    }
}
