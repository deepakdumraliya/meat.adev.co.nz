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

/* forms/base/bare-field.twig */
class __TwigTemplate_354bc31808ee956e5fab1c49f2667cf7 extends Template
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
        // line 9
        echo "<p class=\"field-wrapper ";
        echo twig_escape_filter($this->env, ($context["wrapperClasses"] ?? null), "html", null, true);
        echo "\">
\t<span class=\"field\">
\t\t";
        // line 11
        $this->displayBlock('field', $context, $blocks);
        // line 12
        echo "\t\t";
        $this->loadTemplate("forms/errors.twig", "forms/base/bare-field.twig", 12)->display($context);
        // line 13
        echo "\t</span>
</p>
";
    }

    // line 11
    public function block_field($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    public function getTemplateName()
    {
        return "forms/base/bare-field.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  55 => 11,  49 => 13,  46 => 12,  44 => 11,  38 => 9,);
    }

    public function getSourceContext()
    {
        return new Source("{#
\tA field with no label
\t- Optional:
\t\t- wrapperClasses: Classes to apply to the wrapping element
\t\t- error: An error to display
\t- Blocks:
\t\t- field: The field to wrap around
#}
<p class=\"field-wrapper {{ wrapperClasses }}\">
\t<span class=\"field\">
\t\t{% block field %}{% endblock %}
\t\t{% include 'forms/errors.twig' %}
\t</span>
</p>
", "forms/base/bare-field.twig", "/home/meatadev/public_html/theme/twig/forms/base/bare-field.twig");
    }
}
