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

/* cart/delivery-page.twig */
class __TwigTemplate_681a9e7639fc35d4d1d12d16fb4a93da extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'cart_heading' => [$this, 'block_cart_heading'],
            'cart_content' => [$this, 'block_cart_content'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "cart/sections/base-page.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("cart/sections/base-page.twig", "cart/delivery-page.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_cart_heading($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 3
        echo "\tEnter your delivery address
";
    }

    // line 5
    public function block_cart_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 6
        echo "\t<form action=\"/cart/action/step/delivery/\" method=\"post\">
\t\t";
        // line 7
        if ( !twig_test_empty(($context["shippingRegions"] ?? null))) {
            // line 8
            echo "\t\t\t";
            $context["prepend"] = ["Please Select" => ""];
            // line 9
            echo "\t\t\t";
            $context["shippingRegions"] = twig_array_merge(($context["prepend"] ?? null), ($context["shippingRegions"] ?? null));
            // line 10
            echo "\t\t\t";
            $context["classes"] = "";
            // line 11
            echo "\t\t\t";
            if (call_user_func_array($this->env->getTest('enabled')->getCallable(), ["WEIGHT_BASED_SHIPPING"])) {
                // line 12
                echo "\t\t\t\t";
                $context["classes"] = "js-shipping-select js-has-weight-validation";
                // line 13
                echo "\t\t\t";
            }
            // line 14
            echo "\t\t\t";
            $this->loadTemplate("forms/select-box.twig", "cart/delivery-page.twig", 14)->display(twig_to_array(["label" => "Where should we ship to?", "values" =>             // line 17
($context["shippingRegions"] ?? null), "name" => "shippingRegion", "selected" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,             // line 19
($context["cart"] ?? null), "shippingRegion", [], "any", false, false, false, 19), "id", [], "any", false, false, false, 19), "required" => true, "classes" =>             // line 21
($context["classes"] ?? null)]));
            // line 23
            echo "\t\t";
        }
        // line 24
        echo "\t\t";
        $this->loadTemplate("forms/text-field.twig", "cart/delivery-page.twig", 24)->display(twig_to_array(["label" => "Name", "name" => "name", "value" => (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 28
($context["cart"] ?? null), "shippingAddress", [], "any", false, false, false, 28), "name", [], "any", false, false, false, 28) == "")) ? (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "address", [], "any", false, false, false, 28), "name", [], "any", false, false, false, 28)) : (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["cart"] ?? null), "shippingAddress", [], "any", false, false, false, 28), "name", [], "any", false, false, false, 28))), "required" => true]));
        // line 31
        echo "\t\t";
        $this->loadTemplate("forms/text-field.twig", "cart/delivery-page.twig", 31)->display(twig_to_array(["label" => "Address", "name" => "address", "value" => (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 35
($context["cart"] ?? null), "shippingAddress", [], "any", false, false, false, 35), "address", [], "any", false, false, false, 35) == "")) ? (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "address", [], "any", false, false, false, 35), "address", [], "any", false, false, false, 35)) : (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["cart"] ?? null), "shippingAddress", [], "any", false, false, false, 35), "address", [], "any", false, false, false, 35))), "required" => true, "classes" => "js-address"]));
        // line 39
        echo "\t\t";
        $this->loadTemplate("forms/text-field.twig", "cart/delivery-page.twig", 39)->display(twig_to_array(["label" => "Suburb (Optional)", "name" => "suburb", "value" => ((((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 43
($context["cart"] ?? null), "shippingAddress", [], "any", false, false, false, 43), "suburb", [], "any", false, false, false, 43) == "") && (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["cart"] ?? null), "shippingAddress", [], "any", false, false, false, 43), "address", [], "any", false, false, false, 43) == ""))) ? (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "address", [], "any", false, false, false, 43), "suburb", [], "any", false, false, false, 43)) : (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["cart"] ?? null), "shippingAddress", [], "any", false, false, false, 43), "suburb", [], "any", false, false, false, 43))), "classes" => "js-suburb"]));
        // line 46
        echo "\t\t";
        $this->loadTemplate("forms/text-field.twig", "cart/delivery-page.twig", 46)->display(twig_to_array(["label" => "City/Town", "name" => "city", "value" => (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 50
($context["cart"] ?? null), "shippingAddress", [], "any", false, false, false, 50), "city", [], "any", false, false, false, 50) == "")) ? (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "address", [], "any", false, false, false, 50), "city", [], "any", false, false, false, 50)) : (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["cart"] ?? null), "shippingAddress", [], "any", false, false, false, 50), "city", [], "any", false, false, false, 50))), "required" => true, "classes" => "js-city"]));
        // line 54
        echo "\t\t";
        $this->loadTemplate("forms/text-field.twig", "cart/delivery-page.twig", 54)->display(twig_to_array(["label" => "Postal Code", "name" => "postCode", "value" => (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 58
($context["cart"] ?? null), "shippingAddress", [], "any", false, false, false, 58), "postCode", [], "any", false, false, false, 58) == "")) ? (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "address", [], "any", false, false, false, 58), "postCode", [], "any", false, false, false, 58)) : (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["cart"] ?? null), "shippingAddress", [], "any", false, false, false, 58), "postCode", [], "any", false, false, false, 58))), "required" => true, "classes" => "js-post-code"]));
        // line 62
        echo "\t\t";
        $this->loadTemplate("forms/text-field.twig", "cart/delivery-page.twig", 62)->display(twig_to_array(["label" => "Country", "name" => "country", "value" => (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 66
($context["cart"] ?? null), "shippingAddress", [], "any", false, false, false, 66), "country", [], "any", false, false, false, 66) == "")) ? (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "address", [], "any", false, false, false, 66), "country", [], "any", false, false, false, 66)) : (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["cart"] ?? null), "shippingAddress", [], "any", false, false, false, 66), "country", [], "any", false, false, false, 66))), "required" => true, "classes" => "js-country"]));
        // line 70
        echo "\t\t";
        $this->loadTemplate("forms/textarea.twig", "cart/delivery-page.twig", 70)->display(twig_to_array(["label" => "Delivery Instructions (Optional)", "name" => "instructions", "value" => (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 74
($context["cart"] ?? null), "shippingAddress", [], "any", false, false, false, 74), "deliveryInstructions", [], "any", false, false, false, 74) == "")) ? (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "address", [], "any", false, false, false, 74), "deliveryInstructions", [], "any", false, false, false, 74)) : (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["cart"] ?? null), "shippingAddress", [], "any", false, false, false, 74), "deliveryInstructions", [], "any", false, false, false, 74)))]));
        // line 76
        echo "\t\t";
        $this->loadTemplate("forms/submit-button.twig", "cart/delivery-page.twig", 76)->display(twig_array_merge($context, ["label" => "Next"]));
        // line 77
        echo "\t</form>
\t
\t";
        // line 79
        if (call_user_func_array($this->env->getTest('enabled')->getCallable(), ["WEIGHT_BASED_SHIPPING"])) {
            // line 80
            echo "\t\t";
            $this->loadTemplate("cart/sections/overweight-form.twig", "cart/delivery-page.twig", 80)->display($context);
            // line 81
            echo "\t";
        }
    }

    public function getTemplateName()
    {
        return "cart/delivery-page.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  132 => 81,  129 => 80,  127 => 79,  123 => 77,  120 => 76,  118 => 74,  116 => 70,  114 => 66,  112 => 62,  110 => 58,  108 => 54,  106 => 50,  104 => 46,  102 => 43,  100 => 39,  98 => 35,  96 => 31,  94 => 28,  92 => 24,  89 => 23,  87 => 21,  86 => 19,  85 => 17,  83 => 14,  80 => 13,  77 => 12,  74 => 11,  71 => 10,  68 => 9,  65 => 8,  63 => 7,  60 => 6,  56 => 5,  51 => 3,  47 => 2,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"cart/sections/base-page.twig\" %}
{% block cart_heading %}
\tEnter your delivery address
{% endblock %}
{% block cart_content %}
\t<form action=\"/cart/action/step/delivery/\" method=\"post\">
\t\t{% if shippingRegions is not empty %}
\t\t\t{% set prepend = {'Please Select': ''} %}
\t\t\t{% set shippingRegions = prepend|merge(shippingRegions) %}
\t\t\t{% set classes = \"\" %}
\t\t\t{% if 'WEIGHT_BASED_SHIPPING' is enabled %}
\t\t\t\t{% set classes = \"js-shipping-select js-has-weight-validation\" %}
\t\t\t{% endif %}
\t\t\t{% include \"forms/select-box.twig\" with
\t\t\t{
\t\t\t\t\"label\": \"Where should we ship to?\",
\t\t\t\t\"values\": shippingRegions,
\t\t\t\t\"name\": \"shippingRegion\",
\t\t\t\t\"selected\": cart.shippingRegion.id,
\t\t\t\t\"required\": true,
\t\t\t\t\"classes\": classes
\t\t\t} only %}
\t\t{% endif %}
\t\t{% include \"forms/text-field.twig\" with
\t\t{
\t\t\t\"label\": \"Name\",
\t\t\t\"name\": \"name\",
\t\t\t\"value\": cart.shippingAddress.name == \"\" ? user.address.name : cart.shippingAddress.name,
\t\t\t\"required\": true
\t\t} only %}
\t\t{% include \"forms/text-field.twig\" with
\t\t{
\t\t\t\"label\": \"Address\",
\t\t\t\"name\": \"address\",
\t\t\t\"value\": cart.shippingAddress.address == \"\" ? user.address.address : cart.shippingAddress.address,
\t\t\t\"required\": true,
\t\t\t\"classes\": \"js-address\"
\t\t} only %}
\t\t{% include \"forms/text-field.twig\" with
\t\t{
\t\t\t\"label\": \"Suburb (Optional)\",
\t\t\t\"name\": \"suburb\",
\t\t\t\"value\": cart.shippingAddress.suburb == \"\" and cart.shippingAddress.address == \"\" ? user.address.suburb : cart.shippingAddress.suburb,
\t\t\t\"classes\": \"js-suburb\"
\t\t} only %}
\t\t{% include \"forms/text-field.twig\" with
\t\t{
\t\t\t\"label\": \"City/Town\",
\t\t\t\"name\": \"city\",
\t\t\t\"value\": cart.shippingAddress.city == \"\" ? user.address.city : cart.shippingAddress.city,
\t\t\t\"required\": true,
\t\t\t\"classes\": \"js-city\"
\t\t} only %}
\t\t{% include \"forms/text-field.twig\" with
\t\t{
\t\t\t\"label\": \"Postal Code\",
\t\t\t\"name\": \"postCode\",
\t\t\t\"value\": cart.shippingAddress.postCode == \"\" ? user.address.postCode : cart.shippingAddress.postCode,
\t\t\t\"required\": true,
\t\t\t\"classes\": \"js-post-code\"
\t\t} only %}
\t\t{% include \"forms/text-field.twig\" with
\t\t{
\t\t\t\"label\": \"Country\",
\t\t\t\"name\": \"country\",
\t\t\t\"value\": cart.shippingAddress.country == \"\" ? user.address.country : cart.shippingAddress.country,
\t\t\t\"required\": true,
\t\t\t\"classes\": \"js-country\"
\t\t} only %}
\t\t{% include \"forms/textarea.twig\" with
\t\t{
\t\t\t\"label\": \"Delivery Instructions (Optional)\",
\t\t\t\"name\": \"instructions\",
\t\t\t\"value\": cart.shippingAddress.deliveryInstructions == \"\" ? user.address.deliveryInstructions : cart.shippingAddress.deliveryInstructions
\t\t} only %}
\t\t{% include \"forms/submit-button.twig\" with {\"label\": \"Next\"} %}
\t</form>
\t
\t{% if 'WEIGHT_BASED_SHIPPING' is enabled %}
\t\t{% include 'cart/sections/overweight-form.twig' %}
\t{% endif %}
{% endblock %}
", "cart/delivery-page.twig", "/home/meatadev/public_html/theme/twig/cart/delivery-page.twig");
    }
}
