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

/* template/sections/account-navigation.twig */
class __TwigTemplate_3355fa09d6c61292b08da913b4ccaa64 extends Template
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
        // line 2
        if (call_user_func_array($this->env->getTest('enabled')->getCallable(), ["USERS"])) {
            // line 3
            echo "\t<li class=\"account-nav ";
            if (twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "isNull", [], "method", false, false, false, 3)) {
                echo " do-form ";
            } else {
                echo " has-children logged-in ";
            }
            echo " ";
            if ((twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "pageType", [], "any", false, false, false, 3) == "Account")) {
                echo " sel ";
            }
            echo "\">
\t\t<a href=\"/account/\">Account</a>
\t\t";
            // line 5
            if ( !twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "isNull", [], "method", false, false, false, 5)) {
                // line 6
                echo "\t\t\t<ul>
\t\t\t\t<li>
\t\t\t\t\t<a href=\"/account/action/logout/\">Logout</a>
\t\t\t\t</li>
\t\t\t</ul>
\t\t";
            } else {
                // line 12
                echo "\t\t\t<ul>
\t\t\t\t<li>
\t\t\t\t\t<form action=\"/account/action/login/\" method=\"post\">
\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t<input type=\"text\" name=\"email\" placeholder=\"Email address\" />
\t\t\t\t\t\t</p>
\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t<input type=\"password\" name=\"password\" placeholder=\"Password\" />
\t\t\t\t\t\t</p>
\t\t\t\t\t\t<div class=\"actions\">
\t\t\t\t\t\t\t<button type=\"submit\" value=\"Login\" class=\"button\">Login</button>
\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t";
                // line 24
                if (twig_get_attribute($this->env, $this->source, ($context["controller"] ?? null), "getStaticConst", [0 => "Users\\User", 1 => "REGISTRATION_ENABLED"], "method", false, false, false, 24)) {
                    // line 25
                    echo "\t\t\t\t\t\t\t\t\t<a class=\"reset-link\" href=\"/account/register/\">No Account?</a><br />
\t\t\t\t\t\t\t\t";
                }
                // line 27
                echo "\t\t\t\t\t\t\t\t<a class=\"reset-link\" href=\"/account/reset-password/\">Forgot Password?</a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</form>
\t\t\t\t</li>
\t\t\t</ul>
\t\t";
            }
            // line 34
            echo "\t</li>
";
        }
    }

    public function getTemplateName()
    {
        return "template/sections/account-navigation.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  92 => 34,  83 => 27,  79 => 25,  77 => 24,  63 => 12,  55 => 6,  53 => 5,  39 => 3,  37 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("{# Generates account nav item. Includes a login form and logout button when appropriate #}
{% if 'USERS' is enabled %}
\t<li class=\"account-nav {% if user.isNull() %} do-form {% else %} has-children logged-in {% endif %} {% if page.pageType == \"Account\" %} sel {% endif %}\">
\t\t<a href=\"/account/\">Account</a>
\t\t{% if not user.isNull() %}
\t\t\t<ul>
\t\t\t\t<li>
\t\t\t\t\t<a href=\"/account/action/logout/\">Logout</a>
\t\t\t\t</li>
\t\t\t</ul>
\t\t{% else %}
\t\t\t<ul>
\t\t\t\t<li>
\t\t\t\t\t<form action=\"/account/action/login/\" method=\"post\">
\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t<input type=\"text\" name=\"email\" placeholder=\"Email address\" />
\t\t\t\t\t\t</p>
\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t<input type=\"password\" name=\"password\" placeholder=\"Password\" />
\t\t\t\t\t\t</p>
\t\t\t\t\t\t<div class=\"actions\">
\t\t\t\t\t\t\t<button type=\"submit\" value=\"Login\" class=\"button\">Login</button>
\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t{% if controller.getStaticConst('Users\\\\User', 'REGISTRATION_ENABLED') %}
\t\t\t\t\t\t\t\t\t<a class=\"reset-link\" href=\"/account/register/\">No Account?</a><br />
\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t\t<a class=\"reset-link\" href=\"/account/reset-password/\">Forgot Password?</a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</form>
\t\t\t\t</li>
\t\t\t</ul>
\t\t{% endif %}
\t</li>
{% endif %}
", "template/sections/account-navigation.twig", "/home/meatadev/public_html/theme/twig/template/sections/account-navigation.twig");
    }
}
