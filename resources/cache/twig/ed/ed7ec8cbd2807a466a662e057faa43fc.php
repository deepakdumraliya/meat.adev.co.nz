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

/* products/sections/product-summary.twig */
class __TwigTemplate_b5a3fac5eedfa1452d0c0ed4db9fcd5e extends Template
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
        // line 23
        echo "<div class=\"col-xxl-3 col-xl-4 col-lg-6 col-sm-12\">
\t<div class=\"featured-product\">
\t\t<div class=\"product-img\">
\t\t\t<a href = \"";
        // line 26
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "path", [], "any", false, false, false, 26), "html", null, true);
        echo "\">
\t\t\t";
        // line 27
        $context["images"] = twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "getVisibleImages", [], "method", false, false, false, 27);
        // line 28
        echo "\t\t\t";
        if (($context["images"] ?? null)) {
            // line 29
            echo "\t\t\t\t";
            echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (($__internal_compile_0 = ($context["images"] ?? null)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0[0] ?? null) : null), "thumbnail", [], "any", false, false, false, 29), "tag", [0 => "", 1 => twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "name", [], "any", false, false, false, 29)], "method", false, false, false, 29);
            echo "
\t\t\t";
        }
        // line 31
        echo "\t\t\t</a>
\t\t</div>
\t\t";
        // line 34
        echo "\t\t<div class=\"product-info\">
\t\t\t<div class=\"product-title ps-3 ps-md-4\">
\t\t\t\t<h5>";
        // line 36
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "name", [], "any", false, false, false, 36), "html", null, true);
        echo "</h5>
\t\t\t\t<span>Premium - ";
        // line 37
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "weight", [], "any", false, false, false, 37), "html", null, true);
        echo "g</span>
\t\t\t</div>
\t\t\t<div class=\"product-price\">
\t\t\t\t<span>";
        // line 40
        echo twig_escape_filter($this->env, formatPrice(twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "getPrice", [], "method", false, false, false, 40)), "html", null, true);
        echo "</span>
\t\t\t\t";
        // line 41
        $context["stock"] = twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "getAvailableStock", [], "method", false, false, false, 41);
        // line 42
        echo "\t\t\t\t\t";
        if ((($context["stock"] ?? null) > 0)) {
            // line 43
            echo "<input class=\"field form-control inputquantitysummary\" data-id=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "getLineItemGeneratorIdentifier", [], "method", false, false, false, 43), "html", null, true);
            echo "\" type=\"number\" name=\"quantity\" class=\"form-control\" value=\"1\" max=\"";
            echo twig_escape_filter($this->env, ($context["stock"] ?? null), "html", null, true);
            echo "\" min=\"1\"/>

\t\t\t\t\t\t<span class=\"append-errors\"></span>
\t\t\t\t\t\t
\t\t\t\t\t";
        }
        // line 48
        echo "\t\t\t\t";
        if ((call_user_func_array($this->env->getTest('enabled')->getCallable(), ["CART"]) && (twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "getAvailableStock", [], "method", false, false, false, 48) > 0))) {
            // line 49
            echo "<a class=\"button js-add-to-cart-link btn btn-primary add-to-cart-category\" id=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "getLineItemGeneratorIdentifier", [], "method", false, false, false, 49), "html", null, true);
            echo "-cart\" href=\"/cart/action/add/";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["controller"] ?? null), "callStatic", [0 => "Products\\Product", 1 => "getClassLineItemGeneratorIdentifier"], "method", false, false, false, 49), "html", null, true);
            echo "/";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "getLineItemGeneratorIdentifier", [], "method", false, false, false, 49), "html", null, true);
            echo "/1\">

\t\t\t\t\t\tAdd to Cart
\t\t\t\t\t</a>
\t\t\t\t";
        }
        // line 54
        echo "\t\t\t</div>
\t\t</div>
\t</div>
</div>
";
    }

    public function getTemplateName()
    {
        return "products/sections/product-summary.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  111 => 54,  98 => 49,  95 => 48,  84 => 43,  81 => 42,  79 => 41,  75 => 40,  69 => 37,  65 => 36,  61 => 34,  57 => 31,  51 => 29,  48 => 28,  46 => 27,  42 => 26,  37 => 23,);
    }

    public function getSourceContext()
    {
        return new Source("{# <li>
\t<a class=\"summary\" href=\"{{ product.path }}\">
\t\t<div class=\"text\">
\t\t\t<span class=\"name\">{{ product.name }}</span>
\t\t\t<span class=\"price\">{{ product.getPrice()|formatPrice }}</span>
\t\t</div>
\t\t<div class=\"image\">
\t\t\t{% set images = product.getVisibleImages() %}
\t\t\t{% if images %}
\t\t\t\t{{ images[0].thumbnail.tag('', product.name)|raw }}
\t\t\t{% endif %}
\t\t</div>
\t</a>
\t<div class=\"buttons\">
\t\t{% if 'CART' is enabled and product.getAvailableStock() > 0 %}
\t\t\t<a class=\"button js-add-to-cart-link\" href=\"/cart/action/add/{{ controller.callStatic('Products\\\\Product', 'getClassLineItemGeneratorIdentifier') }}/{{ product.getLineItemGeneratorIdentifier() }}/1/\" >
\t\t\t\tAdd to cart
\t\t\t</a>
\t\t{% endif %}
\t\t<a class=\"button\" href=\"{{ product.path }}\">View Product</a>
\t</div>
</li> #}
<div class=\"col-xxl-3 col-xl-4 col-lg-6 col-sm-12\">
\t<div class=\"featured-product\">
\t\t<div class=\"product-img\">
\t\t\t<a href = \"{{ product.path }}\">
\t\t\t{% set images = product.getVisibleImages() %}
\t\t\t{% if images %}
\t\t\t\t{{ images[0].thumbnail.tag('', product.name)|raw }}
\t\t\t{% endif %}
\t\t\t</a>
\t\t</div>
\t\t{# {{dump(product.weight)}} #}
\t\t<div class=\"product-info\">
\t\t\t<div class=\"product-title ps-3 ps-md-4\">
\t\t\t\t<h5>{{ product.name }}</h5>
\t\t\t\t<span>Premium - {{product.weight}}g</span>
\t\t\t</div>
\t\t\t<div class=\"product-price\">
\t\t\t\t<span>{{ product.getPrice()|formatPrice }}</span>
\t\t\t\t{% set stock = product.getAvailableStock() %}
\t\t\t\t\t{% if stock > 0 %}
<input class=\"field form-control inputquantitysummary\" data-id=\"{{ product.getLineItemGeneratorIdentifier() }}\" type=\"number\" name=\"quantity\" class=\"form-control\" value=\"1\" max=\"{{ stock }}\" min=\"1\"/>

\t\t\t\t\t\t<span class=\"append-errors\"></span>
\t\t\t\t\t\t
\t\t\t\t\t{% endif %}
\t\t\t\t{% if 'CART' is enabled and product.getAvailableStock() > 0 %}
<a class=\"button js-add-to-cart-link btn btn-primary add-to-cart-category\" id=\"{{ product.getLineItemGeneratorIdentifier() }}-cart\" href=\"/cart/action/add/{{ controller.callStatic('Products\\\\Product', 'getClassLineItemGeneratorIdentifier') }}/{{ product.getLineItemGeneratorIdentifier() }}/1\">

\t\t\t\t\t\tAdd to Cart
\t\t\t\t\t</a>
\t\t\t\t{% endif %}
\t\t\t</div>
\t\t</div>
\t</div>
</div>
", "products/sections/product-summary.twig", "/home/meatadev/public_html/theme/twig/products/sections/product-summary.twig");
    }
}
