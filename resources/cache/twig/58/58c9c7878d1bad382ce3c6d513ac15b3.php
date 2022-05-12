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

/* forms/textarea.twig */
class __TwigTemplate_3bc43e46cccf701b9b4330189cc4883f extends Template
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
        // line 15
        $this->loadTemplate("forms/textarea.twig", "forms/textarea.twig", 15, "1697046172")->display($context);
    }

    public function getTemplateName()
    {
        return "forms/textarea.twig";
    }

    public function getDebugInfo()
    {
        return array (  37 => 15,);
    }

    public function getSourceContext()
    {
        return new Source("{#
\tDisplays a textarea
\t- Required:
\t\t- label: A label for the textarea
\t- Optional:
\t\t- usePlaceholder: Whether to use a placeholder for the label
\t\t- wrapperClasses: Classes to apply to the wrapper's element
\t\t- error: An error to display
\t\t- name: The name to give to the element
\t\t- value: The default value for the textarea
\t\t- required: Whether the textarea is required
\t\t- classes: Classes to apply to the input
\t\t- attributes: Extra attributes to apply to the textarea
#}
{% embed (usePlaceholder ? \"forms/base/bare-field.twig\" : \"forms/base/labelled-field.twig\") %}
\t{% block field %}
\t\t<textarea
\t\t\t{% if name is defined %} name=\"{{ name }}\" {% endif %}
\t\t\t{% if required %} required=\"required\" {% endif %}
\t\t\tclass=\"{{ classes }} form-control rounded-0\"
\t\t\t{{ attributes|raw }}
\t\t\t{% if usePlaceholder %}
\t\t\t\tplaceholder=\"{{ label }}\"
\t\t\t\ttitle=\"{{ label }}\"
\t\t\t{% endif %}
\t\t>{{ value }}</textarea>
\t{% endblock %}
{% endembed %}", "forms/textarea.twig", "/home/meatadev/public_html/theme/twig/forms/textarea.twig");
    }
}


/* forms/textarea.twig */
class __TwigTemplate_3bc43e46cccf701b9b4330189cc4883f___1697046172 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'field' => [$this, 'block_field'],
        ];
    }

    protected function doGetParent(array $context)
    {
        return $this->loadTemplate(((($context["usePlaceholder"] ?? null)) ? ("forms/base/bare-field.twig") : ("forms/base/labelled-field.twig")), "forms/textarea.twig", 15);
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 16
    public function block_field($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 17
        echo "\t\t<textarea
\t\t\t";
        // line 18
        if (array_key_exists("name", $context)) {
            echo " name=\"";
            echo twig_escape_filter($this->env, ($context["name"] ?? null), "html", null, true);
            echo "\" ";
        }
        // line 19
        echo "\t\t\t";
        if (($context["required"] ?? null)) {
            echo " required=\"required\" ";
        }
        // line 20
        echo "\t\t\tclass=\"";
        echo twig_escape_filter($this->env, ($context["classes"] ?? null), "html", null, true);
        echo " form-control rounded-0\"
\t\t\t";
        // line 21
        echo ($context["attributes"] ?? null);
        echo "
\t\t\t";
        // line 22
        if (($context["usePlaceholder"] ?? null)) {
            // line 23
            echo "\t\t\t\tplaceholder=\"";
            echo twig_escape_filter($this->env, ($context["label"] ?? null), "html", null, true);
            echo "\"
\t\t\t\ttitle=\"";
            // line 24
            echo twig_escape_filter($this->env, ($context["label"] ?? null), "html", null, true);
            echo "\"
\t\t\t";
        }
        // line 26
        echo "\t\t>";
        echo twig_escape_filter($this->env, ($context["value"] ?? null), "html", null, true);
        echo "</textarea>
\t";
    }

    public function getTemplateName()
    {
        return "forms/textarea.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  152 => 26,  147 => 24,  142 => 23,  140 => 22,  136 => 21,  131 => 20,  126 => 19,  120 => 18,  117 => 17,  113 => 16,  37 => 15,);
    }

    public function getSourceContext()
    {
        return new Source("{#
\tDisplays a textarea
\t- Required:
\t\t- label: A label for the textarea
\t- Optional:
\t\t- usePlaceholder: Whether to use a placeholder for the label
\t\t- wrapperClasses: Classes to apply to the wrapper's element
\t\t- error: An error to display
\t\t- name: The name to give to the element
\t\t- value: The default value for the textarea
\t\t- required: Whether the textarea is required
\t\t- classes: Classes to apply to the input
\t\t- attributes: Extra attributes to apply to the textarea
#}
{% embed (usePlaceholder ? \"forms/base/bare-field.twig\" : \"forms/base/labelled-field.twig\") %}
\t{% block field %}
\t\t<textarea
\t\t\t{% if name is defined %} name=\"{{ name }}\" {% endif %}
\t\t\t{% if required %} required=\"required\" {% endif %}
\t\t\tclass=\"{{ classes }} form-control rounded-0\"
\t\t\t{{ attributes|raw }}
\t\t\t{% if usePlaceholder %}
\t\t\t\tplaceholder=\"{{ label }}\"
\t\t\t\ttitle=\"{{ label }}\"
\t\t\t{% endif %}
\t\t>{{ value }}</textarea>
\t{% endblock %}
{% endembed %}", "forms/textarea.twig", "/home/meatadev/public_html/theme/twig/forms/textarea.twig");
    }
}
