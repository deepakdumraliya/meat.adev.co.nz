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

/* template/sections/cart-navigation.twig */
class __TwigTemplate_0eb83241b2cf88747996789061b3840d extends Template
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
        if (call_user_func_array($this->env->getTest('enabled')->getCallable(), ["CART"])) {
            // line 2
            echo "\t<li class=\"cart-link\">
\t\t<a class=\"js-cart\" href=\"/cart/\" ";
            // line 3
            if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["cart"] ?? null), "normalLineItems", [], "any", false, false, false, 3)) < 1)) {
                echo " style=\"display: none\" ";
            }
            echo ">
\t\t\t<span class=\"icon\">
\t\t\t\t<span class=\"number\">";
            // line 5
            echo twig_escape_filter($this->env, twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["cart"] ?? null), "normalLineItems", [], "any", false, false, false, 5)), "html", null, true);
            echo "</span>
\t\t\t</span>
\t\t\tCart
\t\t</a>
\t</li>
";
        }
    }

    public function getTemplateName()
    {
        return "template/sections/cart-navigation.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 5,  42 => 3,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% if 'CART' is enabled %}
\t<li class=\"cart-link\">
\t\t<a class=\"js-cart\" href=\"/cart/\" {% if cart.normalLineItems|length < 1 %} style=\"display: none\" {% endif %}>
\t\t\t<span class=\"icon\">
\t\t\t\t<span class=\"number\">{{ cart.normalLineItems|length }}</span>
\t\t\t</span>
\t\t\tCart
\t\t</a>
\t</li>
{% endif %}
", "template/sections/cart-navigation.twig", "/home/meatadev/public_html/theme/twig/template/sections/cart-navigation.twig");
    }
}
