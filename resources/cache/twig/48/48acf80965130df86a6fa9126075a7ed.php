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

/* pages/front-sections/premiummeat.twig */
class __TwigTemplate_9002f85c048d2ed80ebe0db8519a14eb extends Template
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
        echo twig_escape_filter($this->env, twig_var_dump($this->env, $context, ...[0 => ($context["section"] ?? null)]), "html", null, true);
    }

    public function getTemplateName()
    {
        return "pages/front-sections/premiummeat.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{{dump(section)}}", "pages/front-sections/premiummeat.twig", "/home/meatadev/public_html/theme/twig/pages/front-sections/premiummeat.twig");
    }
}
