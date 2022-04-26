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

/* login-page.twig */
class __TwigTemplate_739184d4218e06eae14d8fc03064428b extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'main_content' => [$this, 'block_main_content'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "template.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("template.twig", "login-page.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_main_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 4
        echo "\t<div class=\"top-spacer\"></div>
\t<div class=\"centre-login-form\">
\t\t<login-form />
\t</div>
\t<div class=\"bottom-spacer\"></div>
";
    }

    public function getTemplateName()
    {
        return "login-page.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  50 => 4,  46 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"template.twig\" %}

{% block main_content %}
\t<div class=\"top-spacer\"></div>
\t<div class=\"centre-login-form\">
\t\t<login-form />
\t</div>
\t<div class=\"bottom-spacer\"></div>
{% endblock %}", "login-page.twig", "/home/meatadev/public_html/admin/theme/twig/login-page.twig");
    }
}
