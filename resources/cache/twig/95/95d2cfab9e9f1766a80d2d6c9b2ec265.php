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

/* account/sections/register-form.twig */
class __TwigTemplate_39f83231af638f0f72791b9f1d2999d6 extends Template
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
        echo "<form action=\"/account/action/register/\" method=\"post\">
\t";
        // line 2
        if ((($context["message"] ?? null) &&  !($context["samePage"] ?? null))) {
            // line 3
            echo "\t\t<p class=\"error message\">
\t\t\t";
            // line 4
            echo ($context["message"] ?? null);
            echo "
\t\t</p>
\t";
        }
        // line 7
        echo "\t";
        $this->loadTemplate("forms/text-field.twig", "account/sections/register-form.twig", 7)->display(twig_to_array(["label" => "Name", "name" => "name", "value" => twig_get_attribute($this->env, $this->source,         // line 11
($context["user"] ?? null), "name", [], "any", false, false, false, 11), "required" => true]));
        // line 14
        echo "\t";
        $this->loadTemplate("forms/email-field.twig", "account/sections/register-form.twig", 14)->display(twig_to_array(["label" => "Email Address", "name" => "email", "value" => twig_get_attribute($this->env, $this->source,         // line 18
($context["user"] ?? null), "email", [], "any", false, false, false, 18), "required" => true]));
        // line 21
        echo "\t";
        $this->loadTemplate("forms/password-field.twig", "account/sections/register-form.twig", 21)->display(twig_to_array(["label" => "Password", "name" => "password", "required" => true]));
        // line 27
        echo "\t";
        $this->loadTemplate("forms/captcha.twig", "account/sections/register-form.twig", 27)->display($context);
        // line 28
        echo "\t";
        $this->loadTemplate("forms/submit-button.twig", "account/sections/register-form.twig", 28)->display(twig_array_merge($context, ["label" => "Register"]));
        // line 29
        echo "</form>
";
    }

    public function getTemplateName()
    {
        return "account/sections/register-form.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  68 => 29,  65 => 28,  62 => 27,  59 => 21,  57 => 18,  55 => 14,  53 => 11,  51 => 7,  45 => 4,  42 => 3,  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<form action=\"/account/action/register/\" method=\"post\">
\t{% if message and not samePage %}
\t\t<p class=\"error message\">
\t\t\t{{ message|raw }}
\t\t</p>
\t{% endif %}
\t{% include(\"forms/text-field.twig\") with
\t\t{
\t\t\t\"label\": \"Name\",
\t\t\t\"name\": \"name\",
\t\t\t\"value\": user.name,
\t\t\t\"required\": true
\t\t} only %}
\t{% include(\"forms/email-field.twig\") with
\t\t{
\t\t\t\"label\": \"Email Address\",
\t\t\t\"name\": \"email\",
\t\t\t\"value\": user.email,
\t\t\t\"required\": true
\t\t} only %}
\t{% include(\"forms/password-field.twig\") with
\t\t{
\t\t\t\"label\": \"Password\",
\t\t\t\"name\": \"password\",
\t\t\t\"required\": true
\t\t} only %}
\t{% include(\"forms/captcha.twig\") %}
\t{% include(\"forms/submit-button.twig\") with {\"label\": \"Register\"} %}
</form>
", "account/sections/register-form.twig", "/home/meatadev/public_html/theme/twig/account/sections/register-form.twig");
    }
}
