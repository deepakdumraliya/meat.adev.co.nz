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

/* forms/base/input.twig */
class __TwigTemplate_2006aa4c8441df13ec1931a8c520a356 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'specific' => [$this, 'block_specific'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 14
        if (array_key_exists("suggestions", $context)) {
            // line 15
            echo "\t";
            $context["suggestionsId"] = (($context["name"] ?? null) . twig_random($this->env));
        }
        // line 17
        echo "<!--suppress HtmlFormInputWithoutLabel -->
<input
\ttype=\"";
        // line 19
        echo twig_escape_filter($this->env, ($context["type"] ?? null), "html", null, true);
        echo "\"
\t";
        // line 20
        if (array_key_exists("name", $context)) {
            echo " name=\"";
            echo twig_escape_filter($this->env, ($context["name"] ?? null), "html", null, true);
            echo "\" ";
        }
        // line 21
        echo "\t";
        if (array_key_exists("value", $context)) {
            echo " value=\"";
            echo twig_escape_filter($this->env, ($context["value"] ?? null), "html", null, true);
            echo "\" ";
        }
        // line 22
        echo "\t";
        if (($context["required"] ?? null)) {
            echo " required=\"required\" ";
        }
        // line 23
        echo "\tclass=\"";
        echo twig_escape_filter($this->env, ($context["classes"] ?? null), "html", null, true);
        echo "\"
\t";
        // line 24
        echo ($context["attributes"] ?? null);
        echo "
\t";
        // line 25
        if (array_key_exists("suggestions", $context)) {
            // line 26
            echo "\t\tlist=\"";
            echo twig_escape_filter($this->env, ($context["suggestionsId"] ?? null), "html", null, true);
            echo "\"
\t";
        }
        // line 28
        echo "\t";
        $this->displayBlock('specific', $context, $blocks);
        // line 29
        echo "/>
";
        // line 30
        if (array_key_exists("suggestions", $context)) {
            // line 31
            echo "\t<datalist id=\"";
            echo twig_escape_filter($this->env, ($context["suggestionsId"] ?? null), "html", null, true);
            echo "\">
\t\t";
            // line 32
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["suggestions"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["suggestion"]) {
                // line 33
                echo "\t\t\t<!--suppress CheckEmptyScriptTag -->
\t\t\t<option value=\"";
                // line 34
                echo twig_escape_filter($this->env, $context["suggestion"], "html", null, true);
                echo "\" />
\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['suggestion'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 36
            echo "\t</datalist>
";
        }
    }

    // line 28
    public function block_specific($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    public function getTemplateName()
    {
        return "forms/base/input.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  121 => 28,  115 => 36,  107 => 34,  104 => 33,  100 => 32,  95 => 31,  93 => 30,  90 => 29,  87 => 28,  81 => 26,  79 => 25,  75 => 24,  70 => 23,  65 => 22,  58 => 21,  52 => 20,  48 => 19,  44 => 17,  40 => 15,  38 => 14,);
    }

    public function getSourceContext()
    {
        return new Source("{#
\tDisplays an input, base of labelled-input and placeholder-input
\t- Required:
\t\t- type: The type of input to use
\t- Optional:
\t\t- wrapperClasses: Classes to apply to the wrapper's element
\t\t- name: The name to give to the element
\t\t- value: The default value for the input
\t\t- required: Whether the input is required
\t\t- classes: Classes to apply to the input
\t\t- attributes: Extra attributes to apply to the input
\t\t- suggestions: An array of suggestions to display
#}
{% if suggestions is defined %}
\t{% set suggestionsId = name ~ random() %}
{% endif %}
<!--suppress HtmlFormInputWithoutLabel -->
<input
\ttype=\"{{ type }}\"
\t{% if name is defined %} name=\"{{ name }}\" {% endif %}
\t{% if value is defined %} value=\"{{ value }}\" {% endif %}
\t{% if required %} required=\"required\" {% endif %}
\tclass=\"{{ classes }}\"
\t{{ attributes|raw }}
\t{% if suggestions is defined %}
\t\tlist=\"{{ suggestionsId }}\"
\t{% endif %}
\t{% block specific %}{% endblock %}
/>
{% if suggestions is defined %}
\t<datalist id=\"{{ suggestionsId }}\">
\t\t{% for suggestion in suggestions %}
\t\t\t<!--suppress CheckEmptyScriptTag -->
\t\t\t<option value=\"{{ suggestion }}\" />
\t\t{% endfor %}
\t</datalist>
{% endif %}
", "forms/base/input.twig", "/home/meatadev/public_html/theme/twig/forms/base/input.twig");
    }
}
