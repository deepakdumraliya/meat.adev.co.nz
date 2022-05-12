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

/* forms/submit-button.twig */
class __TwigTemplate_88f4c11bc2e563a0f36e03839974c971 extends Template
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
        // line 11
        $this->loadTemplate("forms/submit-button.twig", "forms/submit-button.twig", 11, "501042024")->display($context);
    }

    public function getTemplateName()
    {
        return "forms/submit-button.twig";
    }

    public function getDebugInfo()
    {
        return array (  37 => 11,);
    }

    public function getSourceContext()
    {
        return new Source("{#
\tA button that submits the current form
\t- Required:
\t\t- label: A label for the button
\t- Optional:
\t\t- wrapperClasses: Classes to apply to the wrapping element
\t\t- value: An optional value for the button
\t\t- classes: Classes to apply to the button
\t\t- attributes: Extra attributes to add to the button
#}
{% embed \"forms/base/bare-field.twig\" %}
\t{% block field %}
<button class=\"button {{ classes }} submit-button btn btn-primary\" type=\"submit\" {% if value is defined %} value=\"{{ value }}\" {% endif %} {{ attributes|raw }}>{{ label }}</button>

\t{% endblock %}
{% endembed %}", "forms/submit-button.twig", "/home/meatadev/public_html/theme/twig/forms/submit-button.twig");
    }
}


/* forms/submit-button.twig */
class __TwigTemplate_88f4c11bc2e563a0f36e03839974c971___501042024 extends Template
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
        $this->parent = $this->loadTemplate("forms/base/bare-field.twig", "forms/submit-button.twig", 11);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 12
    public function block_field($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 13
        echo "<button class=\"button ";
        echo twig_escape_filter($this->env, ($context["classes"] ?? null), "html", null, true);
        echo " submit-button btn btn-primary\" type=\"submit\" ";
        if (array_key_exists("value", $context)) {
            echo " value=\"";
            echo twig_escape_filter($this->env, ($context["value"] ?? null), "html", null, true);
            echo "\" ";
        }
        echo " ";
        echo ($context["attributes"] ?? null);
        echo ">";
        echo twig_escape_filter($this->env, ($context["label"] ?? null), "html", null, true);
        echo "</button>

\t";
    }

    public function getTemplateName()
    {
        return "forms/submit-button.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  106 => 13,  102 => 12,  37 => 11,);
    }

    public function getSourceContext()
    {
        return new Source("{#
\tA button that submits the current form
\t- Required:
\t\t- label: A label for the button
\t- Optional:
\t\t- wrapperClasses: Classes to apply to the wrapping element
\t\t- value: An optional value for the button
\t\t- classes: Classes to apply to the button
\t\t- attributes: Extra attributes to add to the button
#}
{% embed \"forms/base/bare-field.twig\" %}
\t{% block field %}
<button class=\"button {{ classes }} submit-button btn btn-primary\" type=\"submit\" {% if value is defined %} value=\"{{ value }}\" {% endif %} {{ attributes|raw }}>{{ label }}</button>

\t{% endblock %}
{% endembed %}", "forms/submit-button.twig", "/home/meatadev/public_html/theme/twig/forms/submit-button.twig");
    }
}
