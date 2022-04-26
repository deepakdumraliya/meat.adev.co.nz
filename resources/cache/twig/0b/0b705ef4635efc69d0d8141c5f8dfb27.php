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

/* cart/sections/base-page.twig */
class __TwigTemplate_4df239718aa2657f0e11b6e53f8b0d87 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'scripts' => [$this, 'block_scripts'],
            'content_banner' => [$this, 'block_content_banner'],
            'notifications' => [$this, 'block_notifications'],
            'content' => [$this, 'block_content'],
            'cart_steps' => [$this, 'block_cart_steps'],
            'cart_main' => [$this, 'block_cart_main'],
            'cart_heading_block' => [$this, 'block_cart_heading_block'],
            'cart_heading' => [$this, 'block_cart_heading'],
            'cart_content' => [$this, 'block_cart_content'],
            'cart_action' => [$this, 'block_cart_action'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "pages/page.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("pages/page.twig", "cart/sections/base-page.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_scripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 4
        echo "\t";
        $this->displayParentBlock("scripts", $context, $blocks);
        echo "
\t";
        // line 5
        twig_get_attribute($this->env, $this->source, ($context["script"] ?? null), "add", [0 => "/theme/scripts/cart.js"], "method", false, false, false, 5);
    }

    // line 8
    public function block_content_banner($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 9
    public function block_notifications($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 11
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 12
        echo "\t<div class=\"cart native\">
\t\t";
        // line 13
        $this->displayBlock('cart_steps', $context, $blocks);
        // line 16
        echo "\t\t<div class=\"native-sections\">
\t\t\t<section class=\"native-sidebar\">
\t\t\t\t";
        // line 18
        if (($context["hasDiscounts"] ?? null)) {
            // line 19
            echo "\t\t\t\t\t<article class=\"sidebar-section\">
\t\t\t\t\t\t<h1>
\t\t\t\t\t\t\tDiscount
\t\t\t\t\t\t</h1>
\t\t\t\t\t\t<form action=\"/cart/action/discount/\" method=\"post\">
\t\t\t\t\t\t\t<label>
\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\tIf you have a discount code, enter it below:
\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"discount\" value=\"";
            // line 29
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["cart"] ?? null), "discount", [], "any", false, false, false, 29), "code", [], "any", false, false, false, 29), "html", null, true);
            echo "\" />
\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t<input type=\"submit\" value=\"Save\" class=\"button\" />
\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t</form>
\t\t\t\t\t</article>
\t\t\t\t";
        }
        // line 38
        echo "\t\t\t\t<article class=\"sidebar-section js-cart-summary\">
\t\t\t\t\t<h1>
\t\t\t\t\t\tSummary
\t\t\t\t\t</h1>
\t\t\t\t\t<div class=\"rows\">
\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t<span class=\"label\">Subtotal</span> <span class=\"value\">";
        // line 44
        echo twig_escape_filter($this->env, formatPrice(twig_get_attribute($this->env, $this->source, ($context["cart"] ?? null), "subtotal", [], "any", false, false, false, 44)), "html", null, true);
        echo "</span>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
        // line 46
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["cart"] ?? null), "specialLineItems", [], "any", false, false, false, 46));
        foreach ($context['_seq'] as $context["_key"] => $context["lineItem"]) {
            // line 47
            echo "\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t<span class=\"label\">";
            // line 48
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["lineItem"], "title", [], "any", false, false, false, 48), "html", null, true);
            echo "</span> <span class=\"value\">";
            echo twig_escape_filter($this->env, (((twig_get_attribute($this->env, $this->source, $context["lineItem"], "displayValue", [], "any", true, true, false, 48) &&  !(null === twig_get_attribute($this->env, $this->source, $context["lineItem"], "displayValue", [], "any", false, false, false, 48)))) ? (twig_get_attribute($this->env, $this->source, $context["lineItem"], "displayValue", [], "any", false, false, false, 48)) : (formatPrice(twig_get_attribute($this->env, $this->source, $context["lineItem"], "total", [], "any", false, false, false, 48)))), "html", null, true);
            echo "</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['lineItem'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 51
        echo "\t\t\t\t\t\t<div class=\"row total\">
\t\t\t\t\t\t\t<span class=\"label\">Total</span> <span class=\"value\">";
        // line 52
        echo twig_escape_filter($this->env, formatPrice(twig_get_attribute($this->env, $this->source, ($context["cart"] ?? null), "total", [], "any", false, false, false, 52)), "html", null, true);
        echo "</span>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</article>
\t\t\t</section>
\t\t\t<div class=\"native-main\">
\t\t\t\t";
        // line 58
        $this->displayBlock('cart_main', $context, $blocks);
        // line 75
        echo "\t\t\t\t";
        $this->displayBlock('cart_action', $context, $blocks);
        // line 76
        echo "\t\t\t</div>
\t\t</div>
\t</div>
";
    }

    // line 13
    public function block_cart_steps($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 14
        echo "\t\t\t";
        $this->loadTemplate("cart/sections/steps.twig", "cart/sections/base-page.twig", 14)->display($context);
        // line 15
        echo "\t\t";
    }

    // line 58
    public function block_cart_main($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 59
        echo "\t\t\t\t\t<div class=\"main-section\">
\t\t\t\t\t\t";
        // line 60
        $this->displayBlock('cart_heading_block', $context, $blocks);
        // line 65
        echo "\t\t\t\t\t\t";
        if (($context["message"] ?? null)) {
            // line 66
            echo "\t\t\t\t\t\t\t<p class=\"message\">
\t\t\t\t\t\t\t\t";
            // line 67
            echo ($context["message"] ?? null);
            echo "
\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t";
        }
        // line 70
        echo "\t\t\t\t\t\t<div class=\"cart-content\">
\t\t\t\t\t\t\t";
        // line 71
        $this->displayBlock('cart_content', $context, $blocks);
        // line 72
        echo "\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t";
    }

    // line 60
    public function block_cart_heading_block($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 61
        echo "\t\t\t\t\t\t\t<h1 class=\"cart-heading\">
\t\t\t\t\t\t\t\t";
        // line 62
        $this->displayBlock('cart_heading', $context, $blocks);
        // line 63
        echo "\t\t\t\t\t\t\t</h1>
\t\t\t\t\t\t";
    }

    // line 62
    public function block_cart_heading($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 71
    public function block_cart_content($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 75
    public function block_cart_action($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    public function getTemplateName()
    {
        return "cart/sections/base-page.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  243 => 75,  237 => 71,  231 => 62,  226 => 63,  224 => 62,  221 => 61,  217 => 60,  211 => 72,  209 => 71,  206 => 70,  200 => 67,  197 => 66,  194 => 65,  192 => 60,  189 => 59,  185 => 58,  181 => 15,  178 => 14,  174 => 13,  167 => 76,  164 => 75,  162 => 58,  153 => 52,  150 => 51,  139 => 48,  136 => 47,  132 => 46,  127 => 44,  119 => 38,  107 => 29,  95 => 19,  93 => 18,  89 => 16,  87 => 13,  84 => 12,  80 => 11,  74 => 9,  68 => 8,  64 => 5,  59 => 4,  55 => 3,  44 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'pages/page.twig' %}

{% block scripts %}
\t{{ parent() }}
\t{% do script.add(\"/theme/scripts/cart.js\") %}
{% endblock %}

{% block content_banner %}{# none #}{% endblock %}
{% block notifications %}{# message output in content #}{% endblock %}

{% block content %}
\t<div class=\"cart native\">
\t\t{% block cart_steps %}
\t\t\t{% include \"cart/sections/steps.twig\" %}
\t\t{% endblock %}
\t\t<div class=\"native-sections\">
\t\t\t<section class=\"native-sidebar\">
\t\t\t\t{% if hasDiscounts %}
\t\t\t\t\t<article class=\"sidebar-section\">
\t\t\t\t\t\t<h1>
\t\t\t\t\t\t\tDiscount
\t\t\t\t\t\t</h1>
\t\t\t\t\t\t<form action=\"/cart/action/discount/\" method=\"post\">
\t\t\t\t\t\t\t<label>
\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\tIf you have a discount code, enter it below:
\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"discount\" value=\"{{ cart.discount.code }}\" />
\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t<input type=\"submit\" value=\"Save\" class=\"button\" />
\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t</form>
\t\t\t\t\t</article>
\t\t\t\t{% endif %}
\t\t\t\t<article class=\"sidebar-section js-cart-summary\">
\t\t\t\t\t<h1>
\t\t\t\t\t\tSummary
\t\t\t\t\t</h1>
\t\t\t\t\t<div class=\"rows\">
\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t<span class=\"label\">Subtotal</span> <span class=\"value\">{{ cart.subtotal|formatPrice }}</span>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t{% for lineItem in cart.specialLineItems %}
\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t<span class=\"label\">{{ lineItem.title }}</span> <span class=\"value\">{{ lineItem.displayValue ?? lineItem.total|formatPrice }}</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t\t<div class=\"row total\">
\t\t\t\t\t\t\t<span class=\"label\">Total</span> <span class=\"value\">{{ cart.total|formatPrice }}</span>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</article>
\t\t\t</section>
\t\t\t<div class=\"native-main\">
\t\t\t\t{% block cart_main %}
\t\t\t\t\t<div class=\"main-section\">
\t\t\t\t\t\t{% block cart_heading_block %}
\t\t\t\t\t\t\t<h1 class=\"cart-heading\">
\t\t\t\t\t\t\t\t{% block cart_heading %}{% endblock %}
\t\t\t\t\t\t\t</h1>
\t\t\t\t\t\t{% endblock %}
\t\t\t\t\t\t{% if message %}
\t\t\t\t\t\t\t<p class=\"message\">
\t\t\t\t\t\t\t\t{{ message|raw }}
\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t<div class=\"cart-content\">
\t\t\t\t\t\t\t{% block cart_content %}{% endblock %}
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t{% endblock %}
\t\t\t\t{% block cart_action %}{% endblock %}
\t\t\t</div>
\t\t</div>
\t</div>
{% endblock %}
", "cart/sections/base-page.twig", "/home/meatadev/public_html/theme/twig/cart/sections/base-page.twig");
    }
}
