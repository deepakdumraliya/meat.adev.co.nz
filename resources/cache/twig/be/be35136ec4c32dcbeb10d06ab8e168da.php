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

/* account/account-details-page.twig */
class __TwigTemplate_6fd617bb663feb9f2dcf84973b37b463 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'account_heading' => [$this, 'block_account_heading'],
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
        $this->parent = $this->loadTemplate("account/sections/base-page.twig", "account/account-details-page.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_account_heading($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 3
        echo "\tUpdate your account details
";
    }

    // line 5
    public function block_account_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 6
        echo "\t<form action=\"/account/action/update-details/\" method=\"post\">
\t\t";
        // line 7
        $this->loadTemplate("forms/text-field.twig", "account/account-details-page.twig", 7)->display(twig_to_array(["label" => "Name", "name" => "name", "value" => twig_get_attribute($this->env, $this->source,         // line 11
($context["user"] ?? null), "name", [], "any", false, false, false, 11), "required" => true]));
        // line 14
        echo "\t\t";
        $this->loadTemplate("forms/email-field.twig", "account/account-details-page.twig", 14)->display(twig_to_array(["label" => "Email Address", "name" => "email", "value" => twig_get_attribute($this->env, $this->source,         // line 18
($context["user"] ?? null), "email", [], "any", false, false, false, 18), "required" => true]));
        // line 21
        echo "\t\t";
        $this->loadTemplate("forms/password-field.twig", "account/account-details-page.twig", 21)->display(twig_to_array(["label" => "Password (leave blank to remain the same)", "name" => "password"]));
        // line 26
        echo "\t\t";
        $this->loadTemplate("forms/submit-button.twig", "account/account-details-page.twig", 26)->display(twig_array_merge($context, ["label" => "Update"]));
        // line 27
        echo "\t</form>
";
    }

    public function getTemplateName()
    {
        return "account/account-details-page.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  76 => 27,  73 => 26,  70 => 21,  68 => 18,  66 => 14,  64 => 11,  63 => 7,  60 => 6,  56 => 5,  51 => 3,  47 => 2,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"account/sections/base-page.twig\" %}
{% block account_heading %}
\tUpdate your account details
{% endblock %}
{% block account_content %}
\t<form action=\"/account/action/update-details/\" method=\"post\">
\t\t{% include(\"forms/text-field.twig\") with
\t\t\t{
\t\t\t\t\"label\": \"Name\",
\t\t\t\t\"name\": \"name\",
\t\t\t\t\"value\": user.name,
\t\t\t\t\"required\": true
\t\t\t} only %}
\t\t{% include(\"forms/email-field.twig\") with
\t\t\t{
\t\t\t\t\"label\": \"Email Address\",
\t\t\t\t\"name\": \"email\",
\t\t\t\t\"value\": user.email,
\t\t\t\t\"required\": true
\t\t\t} only %}
\t\t{% include(\"forms/password-field.twig\") with
\t\t\t{
\t\t\t\t\"label\": \"Password (leave blank to remain the same)\",
\t\t\t\t\"name\": \"password\"
\t\t\t} only %}
\t\t{% include(\"forms/submit-button.twig\") with {\"label\": \"Update\"} %}
\t</form>
{% endblock %}
", "account/account-details-page.twig", "/home/meatadev/public_html/theme/twig/account/account-details-page.twig");
    }
}
