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

/* cart/cart-page.twig */
class __TwigTemplate_04c99f01f754b953a6fe8fce51fd4a8c extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'cart_steps' => [$this, 'block_cart_steps'],
            'cart_heading' => [$this, 'block_cart_heading'],
            'cart_content' => [$this, 'block_cart_content'],
            'cart_action' => [$this, 'block_cart_action'],
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
        $this->parent = $this->loadTemplate("cart/sections/base-page.twig", "cart/cart-page.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_cart_steps($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 4
    public function block_cart_heading($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 5
        echo "\tYour Cart (";
        echo twig_escape_filter($this->env, twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["cart"] ?? null), "normalLineItems", [], "any", false, false, false, 5)), "html", null, true);
        echo ")
";
    }

    // line 7
    public function block_cart_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 8
        echo "\t<div class=\"line-items js-line-items\">
\t\t";
        // line 9
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["cart"] ?? null), "normalLineItems", [], "any", false, false, false, 9));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["lineItem"]) {
            // line 10
            echo "\t\t\t<section class=\"line-item js-line-item\">
\t\t\t\t";
            // line 11
            if ( !(null === twig_get_attribute($this->env, $this->source, $context["lineItem"], "image", [], "any", false, false, false, 11))) {
                // line 12
                echo "\t\t\t\t\t";
                if ( !(null === twig_get_attribute($this->env, $this->source, $context["lineItem"], "link", [], "any", false, false, false, 12))) {
                    // line 13
                    echo "\t\t\t\t\t\t<a href=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["lineItem"], "link", [], "any", false, false, false, 13), "html", null, true);
                    echo "\" class=\"image\">";
                    echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["lineItem"], "image", [], "any", false, false, false, 13), "tag", [], "method", false, false, false, 13);
                    echo "</a>
\t\t\t\t\t";
                } else {
                    // line 15
                    echo "\t\t\t\t\t\t<span class=\"image\">";
                    echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["lineItem"], "image", [], "any", false, false, false, 15), "tag", [], "method", false, false, false, 15);
                    echo "</span>
\t\t\t\t\t";
                }
                // line 17
                echo "\t\t\t\t";
            }
            // line 18
            echo "\t\t\t\t<div class=\"details\">
\t\t\t\t\t<h2>
\t\t\t\t\t\t";
            // line 20
            if ( !(null === twig_get_attribute($this->env, $this->source, $context["lineItem"], "link", [], "any", false, false, false, 20))) {
                // line 21
                echo "\t\t\t\t\t\t\t<a href=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["lineItem"], "link", [], "any", false, false, false, 21), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["lineItem"], "title", [], "any", false, false, false, 21), "html", null, true);
                echo "</a>
\t\t\t\t\t\t";
            } else {
                // line 23
                echo "\t\t\t\t\t\t\t";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["lineItem"], "title", [], "any", false, false, false, 23), "html", null, true);
                echo "
\t\t\t\t\t\t";
            }
            // line 25
            echo "\t\t\t\t\t</h2>
\t\t\t\t\t";
            // line 26
            if (twig_get_attribute($this->env, $this->source, $context["lineItem"], "options", [], "any", true, true, false, 26)) {
                // line 27
                echo "\t\t\t\t\t\t";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["lineItem"], "options", [], "any", false, false, false, 27));
                foreach ($context['_seq'] as $context["_key"] => $context["option"]) {
                    // line 28
                    echo "\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t";
                    // line 29
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["option"], "optionGroupName", [], "any", false, false, false, 29), "html", null, true);
                    echo ": ";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["option"], "optionName", [], "any", false, false, false, 29), "html", null, true);
                    echo "
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 32
                echo "\t\t\t\t\t";
            }
            // line 33
            echo "\t\t\t\t\t<form action=\"/cart/action/update/";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["lineItem"], "identifier", [], "any", false, false, false, 33), "html", null, true);
            echo "/\" method=\"post\">
\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t<input class=\"js-cart-quantity\" type=\"number\" name=\"quantity\" value=\"";
            // line 35
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["lineItem"], "quantity", [], "any", false, false, false, 35), "html", null, true);
            echo "\" title=\"quantity\" /> × ";
            echo twig_escape_filter($this->env, formatPrice(twig_get_attribute($this->env, $this->source, $context["lineItem"], "price", [], "any", false, false, false, 35)), "html", null, true);
            echo "
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t<noscript><input type=\"submit\" value=\"Update\" class=\"button\" /></noscript> <a href=\"/cart/action/remove/";
            // line 38
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["lineItem"], "identifier", [], "any", false, false, false, 38), "html", null, true);
            echo "\" class=\"button js-cart-remove\">Remove</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</form>
\t\t\t\t</div>
\t\t\t</section>
\t\t";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 44
            echo "\t\t\t<p>
\t\t\t\tThere are no items in your cart
\t\t\t</p>
\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['lineItem'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 48
        echo "\t</div>
";
    }

    // line 50
    public function block_cart_action($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 51
        echo "\t";
        if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["cart"] ?? null), "normalLineItems", [], "any", false, false, false, 51))) {
            // line 52
            echo "\t\t<p>
\t\t\t<a href=\"";
            // line 53
            echo twig_escape_filter($this->env, twig_first($this->env, twig_get_attribute($this->env, $this->source, ($context["controller"] ?? null), "getCheckoutSteps", [], "method", false, false, false, 53)), "html", null, true);
            echo "\" class=\"button\">Checkout</a>
\t\t</p>
\t";
        }
    }

    public function getTemplateName()
    {
        return "cart/cart-page.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  199 => 53,  196 => 52,  193 => 51,  189 => 50,  184 => 48,  175 => 44,  164 => 38,  156 => 35,  150 => 33,  147 => 32,  136 => 29,  133 => 28,  128 => 27,  126 => 26,  123 => 25,  117 => 23,  109 => 21,  107 => 20,  103 => 18,  100 => 17,  94 => 15,  86 => 13,  83 => 12,  81 => 11,  78 => 10,  73 => 9,  70 => 8,  66 => 7,  59 => 5,  55 => 4,  49 => 3,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"cart/sections/base-page.twig\" %}

{% block cart_steps %}{% endblock %}
{% block cart_heading %}
\tYour Cart ({{ cart.normalLineItems|length }})
{% endblock %}
{% block cart_content %}
\t<div class=\"line-items js-line-items\">
\t\t{% for lineItem in cart.normalLineItems %}
\t\t\t<section class=\"line-item js-line-item\">
\t\t\t\t{% if lineItem.image is not null %}
\t\t\t\t\t{% if lineItem.link is not null %}
\t\t\t\t\t\t<a href=\"{{ lineItem.link }}\" class=\"image\">{{ lineItem.image.tag()|raw }}</a>
\t\t\t\t\t{% else %}
\t\t\t\t\t\t<span class=\"image\">{{ lineItem.image.tag()|raw }}</span>
\t\t\t\t\t{% endif %}
\t\t\t\t{% endif %}
\t\t\t\t<div class=\"details\">
\t\t\t\t\t<h2>
\t\t\t\t\t\t{% if lineItem.link is not null %}
\t\t\t\t\t\t\t<a href=\"{{ lineItem.link }}\">{{ lineItem.title }}</a>
\t\t\t\t\t\t{% else %}
\t\t\t\t\t\t\t{{ lineItem.title }}
\t\t\t\t\t\t{% endif %}
\t\t\t\t\t</h2>
\t\t\t\t\t{% if lineItem.options is defined %}
\t\t\t\t\t\t{% for option in lineItem.options %}
\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t{{ option.optionGroupName }}: {{ option.optionName }}
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t{% endif %}
\t\t\t\t\t<form action=\"/cart/action/update/{{ lineItem.identifier }}/\" method=\"post\">
\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t<input class=\"js-cart-quantity\" type=\"number\" name=\"quantity\" value=\"{{ lineItem.quantity }}\" title=\"quantity\" /> × {{ lineItem.price|formatPrice }}
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t<noscript><input type=\"submit\" value=\"Update\" class=\"button\" /></noscript> <a href=\"/cart/action/remove/{{ lineItem.identifier }}\" class=\"button js-cart-remove\">Remove</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</form>
\t\t\t\t</div>
\t\t\t</section>
\t\t{% else %}
\t\t\t<p>
\t\t\t\tThere are no items in your cart
\t\t\t</p>
\t\t{% endfor %}
\t</div>
{% endblock %}
{% block cart_action %}
\t{% if cart.normalLineItems is not empty %}
\t\t<p>
\t\t\t<a href=\"{{ controller.getCheckoutSteps()|first }}\" class=\"button\">Checkout</a>
\t\t</p>
\t{% endif %}
{% endblock %}
", "cart/cart-page.twig", "/home/meatadev/public_html/theme/twig/cart/cart-page.twig");
    }
}
