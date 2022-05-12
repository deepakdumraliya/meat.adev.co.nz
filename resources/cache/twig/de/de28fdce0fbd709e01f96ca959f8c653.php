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

/* cart/sections/overweight-form.twig */
class __TwigTemplate_d2e289aea10bc794e23fe62d7a82400e extends Template
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
        echo "
<div class=\"popup-form-wrapper \">
    <span class=\"js-max-weight\">";
        // line 3
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["cart"] ?? null), "shippingRegion", [], "any", false, false, false, 3), "maxWeight", [], "method", false, false, false, 3), "html", null, true);
        echo "kg</span>
    <div class=\"js-overweight-error\">
        Please enquire <a class=\"js-open-form\" href=\"#shipping-enquiry\">here</a> for shipping cost for orders over 
    </div>
    <div id=\"shipping-enquiry\" class=\"js-shipping-form\">
        ";
        // line 8
        echo twig_get_attribute($this->env, $this->source, ($context["cart"] ?? null), "outputShippingEnquiryForm", [], "method", false, false, false, 8);
        echo "
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "cart/sections/overweight-form.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 8,  41 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("
<div class=\"popup-form-wrapper \">
    <span class=\"js-max-weight\">{{ cart.shippingRegion.maxWeight() }}kg</span>
    <div class=\"js-overweight-error\">
        Please enquire <a class=\"js-open-form\" href=\"#shipping-enquiry\">here</a> for shipping cost for orders over 
    </div>
    <div id=\"shipping-enquiry\" class=\"js-shipping-form\">
        {{ cart.outputShippingEnquiryForm()|raw }}
    </div>
</div>", "cart/sections/overweight-form.twig", "/home/meatadev/public_html/theme/twig/cart/sections/overweight-form.twig");
    }
}
