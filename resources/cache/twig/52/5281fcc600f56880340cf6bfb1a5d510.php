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

/* forms/hidden-field.twig */
class __TwigTemplate_f879fc9b1d73dd9027e8540973a1ca3b extends Template
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
        // line 10
        echo "<input type=\"hidden\" name=\"";
        echo twig_escape_filter($this->env, ($context["name"] ?? null), "html", null, true);
        echo "\" value=\"";
        echo twig_escape_filter($this->env, ($context["value"] ?? null), "html", null, true);
        echo "\" class=\"";
        echo twig_escape_filter($this->env, ($context["classes"] ?? null), "html", null, true);
        echo "\" ";
        echo ($context["attributes"] ?? null);
        echo " />";
    }

    public function getTemplateName()
    {
        return "forms/hidden-field.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  37 => 10,);
    }

    public function getSourceContext()
    {
        return new Source("{#
\tDisplays a hidden field
\t- Required:
\t\t- name: The name of the field
\t\t- value: The value for the field
\t- Optional:
\t\t- classes: Any classes to apply to the field
\t\t- attributes: Any extra attributes to apply to the field
#}
<input type=\"hidden\" name=\"{{ name }}\" value=\"{{ value }}\" class=\"{{ classes }}\" {{ attributes|raw }} />", "forms/hidden-field.twig", "/home/meatadev/public_html/theme/twig/forms/hidden-field.twig");
    }
}
