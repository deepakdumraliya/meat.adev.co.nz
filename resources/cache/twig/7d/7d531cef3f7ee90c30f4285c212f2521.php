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

/* forms/email-field.twig */
class __TwigTemplate_117aca7ae9bb3d68391972f0e475969b extends Template
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
        $this->loadTemplate(((($context["usePlaceholder"] ?? null)) ? ("forms/base/placeholder-input.twig") : ("forms/base/labelled-input.twig")), "forms/email-field.twig", 15)->display(twig_array_merge($context, ["type" => "email"]));
    }

    public function getTemplateName()
    {
        return "forms/email-field.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  37 => 15,);
    }

    public function getSourceContext()
    {
        return new Source("{#
\tDisplays an email field
\t- Required:
\t\t- label: A label for the field
\t- Optional:
\t\t- usePlaceholder: Whether to use a placeholder instead of a label
\t\t- wrapperClasses: Classes to apply to the wrapper's element
\t\t- error: An error to display
\t\t- name: The name to give to the element
\t\t- value: The default value for the input
\t\t- required: Whether the input is required
\t\t- classes: Classes to apply to the input
\t\t- attributes: Extra attributes to apply to the input
#}
{% include (usePlaceholder ? \"forms/base/placeholder-input.twig\" : \"forms/base/labelled-input.twig\") with {\"type\": \"email\"} %}", "forms/email-field.twig", "/home/meatadev/public_html/theme/twig/forms/email-field.twig");
    }
}
