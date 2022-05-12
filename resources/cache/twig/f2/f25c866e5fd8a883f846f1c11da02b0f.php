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

/* forms/base/placeholder-input.twig */
class __TwigTemplate_ac9eab9e5b5652d0f7ae074926972345 extends Template
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
        $this->loadTemplate("forms/base/placeholder-input.twig", "forms/base/placeholder-input.twig", 15, "719494403")->display($context);
    }

    public function getTemplateName()
    {
        return "forms/base/placeholder-input.twig";
    }

    public function getDebugInfo()
    {
        return array (  37 => 15,);
    }

    public function getSourceContext()
    {
        return new Source("{#
\tDisplays an input with a placeholder label
\t- Required:
\t\t- type: The type of input to use
\t\t- label: A label for the input
\t- Optional:
\t\t- wrapperClasses: Classes to apply to the wrapper's element
\t\t- name: The name to give to the element
\t\t- value: The default value for the input
\t\t- required: Whether the input is required
\t\t- classes: Classes to apply to the input
\t\t- attributes: Extra attributes to apply to the input
\t\t- suggestions: An array of suggestions to display
#}
{% embed \"forms/base/bare-field.twig\" %}
\t{% block field %}
\t\t{% embed \"forms/base/input.twig\" %}
\t\t\t{% block specific %}
\t\t\t\tplaceholder=\"{{ label }}\"
\t\t\t\ttitle=\"{{ label }}\"
\t\t\t{% endblock %}
\t\t{% endembed %}
\t{% endblock %}
{% endembed %}", "forms/base/placeholder-input.twig", "/home/meatadev/public_html/theme/twig/forms/base/placeholder-input.twig");
    }
}


/* forms/base/placeholder-input.twig */
class __TwigTemplate_ac9eab9e5b5652d0f7ae074926972345___719494403 extends Template
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
        return "forms/base/bare-field.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("forms/base/bare-field.twig", "forms/base/placeholder-input.twig", 15);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 16
    public function block_field($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 17
        echo "\t\t";
        $this->loadTemplate("forms/base/placeholder-input.twig", "forms/base/placeholder-input.twig", 17, "1064577704")->display($context);
        // line 23
        echo "\t";
    }

    public function getTemplateName()
    {
        return "forms/base/placeholder-input.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 23,  114 => 17,  110 => 16,  37 => 15,);
    }

    public function getSourceContext()
    {
        return new Source("{#
\tDisplays an input with a placeholder label
\t- Required:
\t\t- type: The type of input to use
\t\t- label: A label for the input
\t- Optional:
\t\t- wrapperClasses: Classes to apply to the wrapper's element
\t\t- name: The name to give to the element
\t\t- value: The default value for the input
\t\t- required: Whether the input is required
\t\t- classes: Classes to apply to the input
\t\t- attributes: Extra attributes to apply to the input
\t\t- suggestions: An array of suggestions to display
#}
{% embed \"forms/base/bare-field.twig\" %}
\t{% block field %}
\t\t{% embed \"forms/base/input.twig\" %}
\t\t\t{% block specific %}
\t\t\t\tplaceholder=\"{{ label }}\"
\t\t\t\ttitle=\"{{ label }}\"
\t\t\t{% endblock %}
\t\t{% endembed %}
\t{% endblock %}
{% endembed %}", "forms/base/placeholder-input.twig", "/home/meatadev/public_html/theme/twig/forms/base/placeholder-input.twig");
    }
}


/* forms/base/placeholder-input.twig */
class __TwigTemplate_ac9eab9e5b5652d0f7ae074926972345___1064577704 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'specific' => [$this, 'block_specific'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 17
        return "forms/base/input.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("forms/base/input.twig", "forms/base/placeholder-input.twig", 17);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 18
    public function block_specific($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 19
        echo "\t\t\t\tplaceholder=\"";
        echo twig_escape_filter($this->env, ($context["label"] ?? null), "html", null, true);
        echo "\"
\t\t\t\ttitle=\"";
        // line 20
        echo twig_escape_filter($this->env, ($context["label"] ?? null), "html", null, true);
        echo "\"
\t\t\t";
    }

    public function getTemplateName()
    {
        return "forms/base/placeholder-input.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  205 => 20,  200 => 19,  196 => 18,  185 => 17,  117 => 23,  114 => 17,  110 => 16,  37 => 15,);
    }

    public function getSourceContext()
    {
        return new Source("{#
\tDisplays an input with a placeholder label
\t- Required:
\t\t- type: The type of input to use
\t\t- label: A label for the input
\t- Optional:
\t\t- wrapperClasses: Classes to apply to the wrapper's element
\t\t- name: The name to give to the element
\t\t- value: The default value for the input
\t\t- required: Whether the input is required
\t\t- classes: Classes to apply to the input
\t\t- attributes: Extra attributes to apply to the input
\t\t- suggestions: An array of suggestions to display
#}
{% embed \"forms/base/bare-field.twig\" %}
\t{% block field %}
\t\t{% embed \"forms/base/input.twig\" %}
\t\t\t{% block specific %}
\t\t\t\tplaceholder=\"{{ label }}\"
\t\t\t\ttitle=\"{{ label }}\"
\t\t\t{% endblock %}
\t\t{% endembed %}
\t{% endblock %}
{% endembed %}", "forms/base/placeholder-input.twig", "/home/meatadev/public_html/theme/twig/forms/base/placeholder-input.twig");
    }
}
