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

/* forms/errors.twig */
class __TwigTemplate_f9527c4eeee52ae3a20dfbcf0f5176fe extends Template
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
        // line 1
        echo "<span class=\"append-errors\">
\t";
        // line 2
        if (array_key_exists("error", $context)) {
            // line 3
            echo "\t\t<span class=\"error\">
\t\t\t";
            // line 4
            echo twig_escape_filter($this->env, ($context["error"] ?? null), "html", null, true);
            echo "
\t\t</span>
\t";
        }
        // line 7
        echo "</span>
";
    }

    public function getTemplateName()
    {
        return "forms/errors.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  51 => 7,  45 => 4,  42 => 3,  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<span class=\"append-errors\">
\t{% if error is defined %}
\t\t<span class=\"error\">
\t\t\t{{ error }}
\t\t</span>
\t{% endif %}
</span>
", "forms/errors.twig", "/home/meatadev/public_html/theme/twig/forms/errors.twig");
    }
}
