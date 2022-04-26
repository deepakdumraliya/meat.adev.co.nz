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

/* forms/base/labelled-input.twig */
class __TwigTemplate_017ff39e762bc0d26675a8cdc10d4412 extends Template
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
        // line 14
        $this->loadTemplate("forms/base/labelled-input.twig", "forms/base/labelled-input.twig", 14, "915319514")->display($context);
    }

    public function getTemplateName()
    {
        return "forms/base/labelled-input.twig";
    }

    public function getDebugInfo()
    {
        return array (  37 => 14,);
    }

    public function getSourceContext()
    {
        return new Source("{#
\tDisplays an input with a label
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
#}
{% embed \"forms/base/labelled-field.twig\" %}
\t{% block field %}
\t\t{% include \"forms/base/input.twig\" %}
\t{% endblock %}
{% endembed %}", "forms/base/labelled-input.twig", "/home/meatadev/public_html/theme/twig/forms/base/labelled-input.twig");
    }
}


/* forms/base/labelled-input.twig */
class __TwigTemplate_017ff39e762bc0d26675a8cdc10d4412___915319514 extends Template
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
        return "forms/base/labelled-field.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("forms/base/labelled-field.twig", "forms/base/labelled-input.twig", 14);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 15
    public function block_field($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 16
        echo "\t\t";
        $this->loadTemplate("forms/base/input.twig", "forms/base/labelled-input.twig", 16)->display($context);
        // line 17
        echo "\t";
    }

    public function getTemplateName()
    {
        return "forms/base/labelled-input.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  111 => 17,  108 => 16,  104 => 15,  37 => 14,);
    }

    public function getSourceContext()
    {
        return new Source("{#
\tDisplays an input with a label
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
#}
{% embed \"forms/base/labelled-field.twig\" %}
\t{% block field %}
\t\t{% include \"forms/base/input.twig\" %}
\t{% endblock %}
{% endembed %}", "forms/base/labelled-input.twig", "/home/meatadev/public_html/theme/twig/forms/base/labelled-input.twig");
    }
}
