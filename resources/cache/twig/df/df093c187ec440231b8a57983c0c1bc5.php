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

/* forms/base/labelled-field.twig */
class __TwigTemplate_9ca57a08ff87324d0a78391ee5f9e46f extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'field' => [$this, 'block_field'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 11
        echo "<p class=\"field-wrapper ";
        echo twig_escape_filter($this->env, ($context["wrapperClasses"] ?? null), "html", null, true);
        echo "\">
\t<label>
\t\t<span class=\"label\">";
        // line 13
        echo twig_escape_filter($this->env, ($context["label"] ?? null), "html", null, true);
        echo "</span>
\t\t<span class=\"field\">
\t\t\t";
        // line 15
        $this->displayBlock('field', $context, $blocks);
        // line 16
        echo "\t\t</span>
\t\t";
        // line 17
        $this->loadTemplate("forms/errors.twig", "forms/base/labelled-field.twig", 17)->display($context);
        // line 18
        echo "\t</label>
</p>
";
    }

    // line 15
    public function block_field($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    public function getTemplateName()
    {
        return "forms/base/labelled-field.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  62 => 15,  56 => 18,  54 => 17,  51 => 16,  49 => 15,  44 => 13,  38 => 11,);
    }

    public function getSourceContext()
    {
        return new Source("{#
\tContains a label element, which also wraps a form field
\t- Required:
\t\t- label: The label to give to the form field
\t- Optional:
\t\t- wrapperClasses: Classes to apply to the wrapping element
\t\t- error: An error to display
\t- Blocks:
\t\t- field: The field to wrap around
#}
<p class=\"field-wrapper {{ wrapperClasses }}\">
\t<label>
\t\t<span class=\"label\">{{ label }}</span>
\t\t<span class=\"field\">
\t\t\t{% block field %}{% endblock %}
\t\t</span>
\t\t{% include 'forms/errors.twig' %}
\t</label>
</p>
", "forms/base/labelled-field.twig", "/home/meatadev/public_html/theme/twig/forms/base/labelled-field.twig");
    }
}
