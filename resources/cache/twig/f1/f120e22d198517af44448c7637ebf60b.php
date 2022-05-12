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

/* forms/form.twig */
class __TwigTemplate_b446618a7347e2be58eeac67ac2a0ad3 extends Template
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
        // line 12
        $context["userMessage"] = twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "retrieveUserMessage", [], "method", false, false, false, 12);
        // line 13
        echo "
<form id=\"form-";
        // line 14
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "id", [], "any", false, false, false, 14), "html", null, true);
        echo "\" class=\"";
        echo twig_escape_filter($this->env, ($context["class"] ?? null), "html", null, true);
        echo "\" action=\"";
        echo twig_escape_filter($this->env, ($context["action"] ?? null), "html", null, true);
        echo "\" method=\"";
        echo twig_escape_filter($this->env, ($context["method"] ?? null), "html", null, true);
        echo "\" enctype=\"multipart/form-data\">
\t";
        // line 15
        echo (($context["prepend"]) ?? (twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "prepend", [], "any", false, false, false, 15)));
        echo "\t
\t";
        // line 16
        if (($context["userMessage"] ?? null)) {
            // line 17
            echo "\t\t<p class=\"message\">
\t\t\t";
            // line 18
            echo ($context["userMessage"] ?? null);
            echo "
\t\t</p>
\t";
        }
        // line 21
        echo "\t";
        $this->loadTemplate("forms/hidden-field.twig", "forms/form.twig", 21)->display(twig_to_array(["name" => "id", "value" => twig_get_attribute($this->env, $this->source,         // line 24
($context["form"] ?? null), "id", [], "any", false, false, false, 24)]));
        // line 26
        echo "\t<div class=\"fields\">
\t\t";
        // line 27
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "fields", [], "any", false, false, false, 27));
        foreach ($context['_seq'] as $context["_key"] => $context["field"]) {
            // line 28
            echo "\t\t\t";
            $this->loadTemplate(twig_get_attribute($this->env, $this->source, $context["field"], "getTemplate", [], "method", false, false, false, 28), "forms/form.twig", 28)->display(twig_to_array(twig_get_attribute($this->env, $this->source, $context["field"], "getVariables", [], "method", false, false, false, 28)));
            // line 29
            echo "\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['field'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 30
        echo "\t\t";
        // line 31
        echo "\t\t<div></div>
\t</div>
\t";
        // line 33
        $this->loadTemplate("forms/captcha.twig", "forms/form.twig", 33)->display($context);
        // line 34
        echo "\t";
        echo (($context["append"]) ?? (twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "append", [], "any", false, false, false, 34)));
        echo "
\t";
        // line 35
        $this->loadTemplate("forms/submit-button.twig", "forms/form.twig", 35)->display(twig_array_merge($context, ["label" => twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "buttonText", [], "any", false, false, false, 35)]));
        // line 36
        echo "</form>
";
    }

    public function getTemplateName()
    {
        return "forms/form.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  102 => 36,  100 => 35,  95 => 34,  93 => 33,  89 => 31,  87 => 30,  81 => 29,  78 => 28,  74 => 27,  71 => 26,  69 => 24,  67 => 21,  61 => 18,  58 => 17,  56 => 16,  52 => 15,  42 => 14,  39 => 13,  37 => 12,);
    }

    public function getSourceContext()
    {
        return new Source("{#
\tDisplays a form
\t- Required:
\t\t- form: The Form object to generate a form out of
\t\t- action: The URL to send the form to
\t\t- method: The method to use
\t- Optional:
\t\t- prepend: Some HTML to add to the start of the form
\t\t- append: Some HTML to add to the end of the form, before the submit button
\t\t- class: A class name for the form
#}
{% set userMessage = form.retrieveUserMessage() %}

<form id=\"form-{{ form.id }}\" class=\"{{ class }}\" action=\"{{ action }}\" method=\"{{ method }}\" enctype=\"multipart/form-data\">
\t{{ (prepend ?? form.prepend)|raw }}\t
\t{% if userMessage %}
\t\t<p class=\"message\">
\t\t\t{{ userMessage|raw }}
\t\t</p>
\t{% endif %}
\t{% include \"forms/hidden-field.twig\" with
\t{
\t\t\"name\": \"id\",
\t\t\"value\": form.id
\t} only %}
\t<div class=\"fields\">
\t\t{% for field in form.fields %}
\t\t\t{% include field.getTemplate() with field.getVariables() only %}
\t\t{% endfor %}
\t\t{# Extra div to help Chrome not screw up columns #}
\t\t<div></div>
\t</div>
\t{% include \"forms/captcha.twig\" %}
\t{{ (append ?? form.append)|raw }}
\t{% include \"forms/submit-button.twig\" with {\"label\": form.buttonText} %}
</form>
", "forms/form.twig", "/home/meatadev/public_html/theme/twig/forms/form.twig");
    }
}
