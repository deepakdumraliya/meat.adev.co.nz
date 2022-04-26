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

/* account/register-page.twig */
class __TwigTemplate_269b258fcb0a8b3930e1eb6e72bd3e1c extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'native_sidebar' => [$this, 'block_native_sidebar'],
            'account_heading_block' => [$this, 'block_account_heading_block'],
            'account_content' => [$this, 'block_account_content'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "account/sections/base-page.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("account/sections/base-page.twig", "account/register-page.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_native_sidebar($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 4
        echo "\t<h1>
\t\tAlready have an account?
\t</h1>
\t<p>
\t\t<a class=\"button\" href=\"/account/login/\">Login Here</a>
\t</p>
";
    }

    // line 12
    public function block_account_heading_block($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 13
        echo "\t<h1>
\t\tRegister at ";
        // line 14
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["config"] ?? null), "getSiteName", [], "method", false, false, false, 14), "html", null, true);
        echo "
\t</h1>
";
    }

    // line 18
    public function block_account_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 19
        echo "\t";
        $this->loadTemplate("account/sections/register-form.twig", "account/register-page.twig", 19)->display(twig_array_merge($context, ["samePage" => true]));
    }

    public function getTemplateName()
    {
        return "account/register-page.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  80 => 19,  76 => 18,  69 => 14,  66 => 13,  62 => 12,  52 => 4,  48 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"account/sections/base-page.twig\" %}

{% block native_sidebar %}
\t<h1>
\t\tAlready have an account?
\t</h1>
\t<p>
\t\t<a class=\"button\" href=\"/account/login/\">Login Here</a>
\t</p>
{% endblock %}

{% block account_heading_block %}
\t<h1>
\t\tRegister at {{ config.getSiteName() }}
\t</h1>
{% endblock %}

{% block account_content %}
\t{% include(\"account/sections/register-form.twig\") with { samePage: true } %}
{% endblock %}
", "account/register-page.twig", "/home/meatadev/public_html/theme/twig/account/register-page.twig");
    }
}
