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

/* account/login-page.twig */
class __TwigTemplate_7d6701fb8002b51c18c7ed2a2d644171 extends Template
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
        $this->parent = $this->loadTemplate("account/sections/base-page.twig", "account/login-page.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_native_sidebar($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 4
        echo "\t";
        if ((call_user_func_array($this->env->getTest('enabled')->getCallable(), ["USERS"]) && ($context["registrationEnabled"] ?? null))) {
            // line 5
            echo "\t\t<h1>
\t\t\tDon't have an account?
\t\t</h1>
\t\t<p>
\t\t\t<a class=\"button\" href=\"/account/register/\">Create an account</a>
\t\t</p>
\t";
        }
    }

    // line 14
    public function block_account_heading_block($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 15
        echo "\t<h1>
\t\tLogin to ";
        // line 16
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["config"] ?? null), "getSiteName", [], "method", false, false, false, 16), "html", null, true);
        echo "
\t</h1>
";
    }

    // line 20
    public function block_account_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 21
        echo "\t";
        $this->loadTemplate("account/sections/login-form.twig", "account/login-page.twig", 21)->display(twig_array_merge($context, ["samePage" => true]));
    }

    public function getTemplateName()
    {
        return "account/login-page.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  84 => 21,  80 => 20,  73 => 16,  70 => 15,  66 => 14,  55 => 5,  52 => 4,  48 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"account/sections/base-page.twig\" %}

{% block native_sidebar %}
\t{% if \"USERS\" is enabled and registrationEnabled %}
\t\t<h1>
\t\t\tDon't have an account?
\t\t</h1>
\t\t<p>
\t\t\t<a class=\"button\" href=\"/account/register/\">Create an account</a>
\t\t</p>
\t{% endif %}
{% endblock %}

{% block account_heading_block %}
\t<h1>
\t\tLogin to {{ config.getSiteName() }}
\t</h1>
{% endblock %}

{% block account_content %}
\t{% include(\"account/sections/login-form.twig\") with { samePage: true } %}
{% endblock %}

", "account/login-page.twig", "/home/meatadev/public_html/theme/twig/account/login-page.twig");
    }
}
