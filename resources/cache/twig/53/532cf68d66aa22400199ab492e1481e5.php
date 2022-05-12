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

/* products/product-page.twig */
class __TwigTemplate_59a19034f874fee6c1fd40bd9da9ba17 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'meta_data' => [$this, 'block_meta_data'],
            'canonical_link' => [$this, 'block_canonical_link'],
            'content_title' => [$this, 'block_content_title'],
            'products_content' => [$this, 'block_products_content'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "products/sections/base-page.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 4
        $context["showQuantityField"] = true;
        // line 1
        $this->parent = $this->loadTemplate("products/sections/base-page.twig", "products/product-page.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 6
    public function block_meta_data($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 7
        echo "\t<title>";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "getPageTitle", [], "method", false, false, false, 7), "html", null, true);
        echo "</title>
\t<meta name=\"description\" content=\"";
        // line 8
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "getMetaDescription", [], "method", false, false, false, 8), "html", null, true);
        echo "\" />
";
    }

    // line 11
    public function block_canonical_link($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 12
        echo "\t<link rel=\"canonical\" href=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "getCanonicalLink", [], "method", false, false, false, 12), "html", null, true);
        echo "\" />
";
    }

    // line 15
    public function block_content_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 16
        echo "\t<h1>";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "getMainHeading", [], "method", false, false, false, 16), "html", null, true);
        echo "</h1>
";
    }

    // line 19
    public function block_products_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 20
        echo "
\t";
        // line 21
        $context["pricedOptions"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "pricedOptionGroup", [], "any", false, false, false, 21), "getOptions", [], "method", false, false, false, 21);
        // line 22
        echo "\t";
        $context["addUrl"] = (((("/Cart/Action/Add/" . twig_get_attribute($this->env, $this->source, ($context["controller"] ?? null), "callStatic", [0 => "Products\\Product", 1 => "getClassLineItemGeneratorIdentifier"], "method", false, false, false, 22)) . "/") . twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "getLineItemGeneratorIdentifier", [], "method", false, false, false, 22)) . "/");
        // line 23
        echo "\t";
        if (($context["pricedOptions"] ?? null)) {
            // line 24
            echo "\t\t";
            $context["addUrl"] = (("/Cart/Action/Add/" . twig_get_attribute($this->env, $this->source, ($context["controller"] ?? null), "callStatic", [0 => "Products\\Options\\PricedProductOption", 1 => "getClassLineItemGeneratorIdentifier"], "method", false, false, false, 24)) . "/");
            // line 25
            echo "\t";
        }
        // line 26
        echo "\t<div class =\"row\">
\t\t<div class=\"col-lg-6 col-md-12\">
\t\t\t<span class=\"text-primary product-price\">";
        // line 28
        echo twig_escape_filter($this->env, formatPrice(twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "getPrice", [], "method", false, false, false, 28)), "html", null, true);
        echo "</span>

\t\t\t<p>";
        // line 30
        echo twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "content", [], "any", false, false, false, 30);
        echo "</p>
\t
\t\t\t";
        // line 32
        if (call_user_func_array($this->env->getTest('enabled')->getCallable(), ["CART"])) {
            // line 33
            echo "\t\t\t<form  class=\"js-add-to-cart-form add-to-cart custom-form row mt-3\" action=\"";
            echo twig_escape_filter($this->env, ($context["addUrl"] ?? null), "html", null, true);
            echo "\" method=\"post\">
\t\t\t\t\t";
            // line 34
            if (($context["pricedOptions"] ?? null)) {
                // line 35
                echo "\t\t\t\t\t<div class=\"col-md-3\">
\t\t\t\t\t\t<label class=\"select-wrapper\">
\t\t\t\t\t\t\t<label class=\"label form-label\">";
                // line 37
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "pricedOptionGroup", [], "any", false, false, false, 37), "name", [], "any", false, false, false, 37), "html", null, true);
                echo "</label>
\t\t\t\t\t\t\t<span
\t\t\t\t\t\t\t\tclass=\"field\">
\t\t\t\t\t\t\t\t";
                // line 41
                echo "\t\t\t\t\t\t\t\t<select name=\"id\" class=\"js-product-price-adjuster form-select\">
\t\t\t\t\t\t\t\t\t";
                // line 42
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["pricedOptions"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["option"]) {
                    // line 43
                    echo "\t\t\t\t\t\t\t\t\t\t<option value=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["option"], "id", [], "any", false, false, false, 43), "html", null, true);
                    echo "\" data-price=\"";
                    echo twig_escape_filter($this->env, formatPrice(twig_get_attribute($this->env, $this->source, $context["option"], "getPrice", [], "method", false, false, false, 43)), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 43), "html", null, true);
                    echo "
\t\t\t\t\t\t\t\t\t\t\t-
\t\t\t\t\t\t\t\t\t\t\t";
                    // line 45
                    echo twig_escape_filter($this->env, formatPrice(twig_get_attribute($this->env, $this->source, $context["option"], "getPrice", [], "method", false, false, false, 45)), "html", null, true);
                    echo "</option>
\t\t\t\t\t\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 47
                echo "\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t</label>
\t\t\t\t\t</div>
\t\t\t\t\t";
            }
            // line 52
            echo "\t\t\t\t\t";
            $context["stock"] = twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "getAvailableStock", [], "method", false, false, false, 52);
            // line 53
            echo "\t\t\t\t\t";
            if ((($context["stock"] ?? null) > 0)) {
                // line 54
                echo "\t\t\t\t\t<div class=\"col-md-3 mt-3 mt-md-0\">
\t\t\t\t\t\t";
                // line 55
                if (($context["showQuantityField"] ?? null)) {
                    // line 56
                    echo "\t\t\t\t\t\t\t<label for=\"formFile\" class=\"form-label label\">Quantity</label>
\t\t\t\t\t\t\t<input class=\"field\" type=\"number\" name=\"quantity\" class=\"form-control\" value=\"1\" max=\"";
                    // line 57
                    echo twig_escape_filter($this->env, ($context["stock"] ?? null), "html", null, true);
                    echo "\" min=\"1\"/>
\t\t\t\t\t\t\t<span class=\"append-errors\"></span>
\t\t\t\t\t\t";
                } else {
                    // line 60
                    echo "\t\t\t\t\t\t\t<input type=\"hidden\" name=\"quantity\" value=\"1\"/>
\t\t\t\t\t\t";
                }
                // line 62
                echo "\t\t\t\t\t</div>
\t\t\t\t\t";
            }
            // line 64
            echo "\t\t\t\t\t<div class=\"col-md-2 mt-3 mt-md-0\">
\t\t\t\t\t\t<label for=\"formFile\" class=\"form-label\">Price</label>
\t\t\t\t\t\t<span class=\"js-product-price price\">";
            // line 66
            if (($context["pricedOptions"] ?? null)) {
                // line 67
                echo "\t\t\t\t\t\t\t\t";
                echo twig_escape_filter($this->env, formatPrice(twig_get_attribute($this->env, $this->source, (($__internal_compile_0 = ($context["pricedOptions"] ?? null)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0[0] ?? null) : null), "getPrice", [], "method", false, false, false, 67)), "html", null, true);
                echo "
\t\t\t\t\t\t\t";
            } else {
                // line 69
                echo "\t\t\t\t\t\t\t\t";
                echo twig_escape_filter($this->env, formatPrice(twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "getPrice", [], "method", false, false, false, 69)), "html", null, true);
                echo "
\t\t\t\t\t\t\t";
            }
            // line 71
            echo "\t\t\t\t\t\t</span>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-md-4 mt-3 mt-md-0 d-flex align-items-end\">

\t\t\t\t\t\t";
            // line 75
            if ((($context["stock"] ?? null) > 0)) {
                // line 76
                echo "\t\t\t\t\t\t\t";
                $this->loadTemplate("forms/submit-button.twig", "products/product-page.twig", 76)->display(twig_array_merge($context, ["label" => "Add to Cart"]));
                // line 77
                echo "\t\t\t\t\t\t";
            } else {
                // line 78
                echo "\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<p class=\"text-primary mt-3 mb-5\">Out of Stock</p>
\t\t\t\t\t\t\t
\t\t\t\t\t\t";
            }
            // line 82
            echo "

\t\t\t\t\t</div>
\t\t\t</form>
\t\t\t";
        }
        // line 87
        echo "\t\t\t";
        if ((($context["stock"] ?? null) > 0)) {
            // line 88
            echo "\t\t\t\t\t\t\t<p class=\"text-primary mt-3 mb-5\">1 in stock (can be backordered)</p>
\t\t\t\t\t\t";
        } else {
            // line 90
            echo "\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<p class=\"text-primary mt-3 mb-5\">Out of Stock</p>
\t\t\t\t\t\t\t
\t\t\t\t\t\t";
        }
        // line 94
        echo "\t\t\t<div class=\"accordion accordion-flush pt-5 border-top\" id=\"accordionFlushExample\">
\t\t\t\t<div class=\"accordion-item mb-2\">
\t\t\t\t\t<h2 class=\"accordion-header\" id=\"flush-headingOne\">
\t\t\t\t\t\t<button class=\"accordion-button\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#panelsStayOpen-collapseOne\" aria-expanded=\"true\" aria-controls=\"panelsStayOpen-collapseOne\">
\t\t\t\t\t\t\tDescription
\t\t\t\t\t\t</button>
\t\t\t\t\t</h2>
\t\t\t\t\t<div id=\"panelsStayOpen-collapseOne\" class=\"accordion-collapse collapse show\" aria-labelledby=\"panelsStayOpen-headingOne\">
\t\t\t\t\t\t<div class=\"accordion-body\">
\t\t\t\t\t\t\t";
        // line 103
        echo twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "content", [], "any", false, false, false, 103);
        echo "
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"accordion-item mb-2\">
\t\t\t\t\t<h2 class=\"accordion-header\" id=\"flush-headingTwo\">
\t\t\t\t\t\t<button class=\"accordion-button collapsed\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#flush-collapseTwo\" aria-expanded=\"false\" aria-controls=\"flush-collapseTwo\">
\t\t\t\t\t\t\tAdditional Information
\t\t\t\t\t\t</button>
\t\t\t\t\t</h2>
\t\t\t\t\t<div id=\"flush-collapseTwo\" class=\"accordion-collapse collapse\" aria-labelledby=\"flush-headingTwo\" data-bs-parent=\"#accordionFlushExample\">
\t\t\t\t\t\t<div class=\"accordion-body\">Rough leg meat best slow cooked to make dishes like osso buco. Leg it in to trying a Leg shank today. We supply this in various pack sizes for your convenience.</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"accordion-item mb-2\">
\t\t\t\t\t<h2 class=\"accordion-header\" id=\"flush-headingThree\">
\t\t\t\t\t\t<button class=\"accordion-button collapsed\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#flush-collapseThree\" aria-expanded=\"false\" aria-controls=\"flush-collapseThree\">
\t\t\t\t\t\t\tReviews
\t\t\t\t\t\t</button>
\t\t\t\t\t</h2>
\t\t\t\t\t<div id=\"flush-collapseThree\" class=\"accordion-collapse collapse\" aria-labelledby=\"flush-headingThree\" data-bs-parent=\"#accordionFlushExample\">
\t\t\t\t\t\t<div class=\"accordion-body\">Rough leg meat best slow cooked to make dishes like osso buco. Leg it in to trying a Leg shank today. We supply this in various pack sizes for your convenience.</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t

\t\t</div>
\t\t<div class=\"col-lg-6 col-md-12 mt-5 mt-lg-0\">
\t\t\t<div class=\"left-btn mb-5 d-flex justify-content-end\">
\t\t\t\t<a href=\"";
        // line 133
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "category", [], "any", false, false, false, 133), "getNavPath", [], "method", false, false, false, 133), "html", null, true);
        echo "\"><i class=\"fa-solid fa-arrow-left me-3\"></i>Back to ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "category", [], "any", false, false, false, 133), "name", [], "any", false, false, false, 133), "html", null, true);
        echo "</a>
\t\t\t</div>
\t\t\t<div class=\"product-img d-flex justify-content-end\">
\t\t\t\t";
        // line 137
        echo "\t\t\t\t";
        $context["images"] = twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "getVisibleImages", [], "method", false, false, false, 137);
        // line 138
        echo "\t\t\t\t";
        if ((($context["images"] ?? null) && twig_get_attribute($this->env, $this->source, (($__internal_compile_1 = ($context["images"] ?? null)) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1[0] ?? null) : null), "image", [], "any", false, false, false, 138))) {
            // line 139
            echo "\t\t\t\t\t";
            $context["image"] = (($__internal_compile_2 = ($context["images"] ?? null)) && is_array($__internal_compile_2) || $__internal_compile_2 instanceof ArrayAccess ? ($__internal_compile_2[0] ?? null) : null);
            // line 140
            echo "\t\t\t\t\t<a class=\"main-image image js-main-image\" href=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["image"] ?? null), "image", [], "any", false, false, false, 140), "getLink", [], "method", false, false, false, 140), "html", null, true);
            echo "\" data-src=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["image"] ?? null), "image", [], "any", false, false, false, 140), "getLink", [], "method", false, false, false, 140), "html", null, true);
            echo "\" data-thumb=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["image"] ?? null), "thumbnail", [], "any", false, false, false, 140), "getLink", [], "method", false, false, false, 140), "html", null, true);
            echo "\" >
\t\t\t\t\t";
            // line 141
            echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["image"] ?? null), "image", [], "any", false, false, false, 141), "tag", [0 => "", 1 => twig_get_attribute($this->env, $this->source, ($context["image"] ?? null), "imageAltText", [], "any", false, false, false, 141)], "method", false, false, false, 141);
            echo "

\t\t\t\t\t</a>
\t\t\t\t";
        }
        // line 145
        echo "\t\t\t</div>
\t\t</div>
\t</div>
\t

";
        // line 150
        $context["associated"] = twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "getAssociatedProductCategories", [], "method", false, false, false, 150);
        // line 151
        if (($context["associated"] ?? null)) {
            // line 152
            echo "
<!--=================================
        Featured products -->
<section class=\"space-ptb bg-light border-top border-white border-3\">
\t<div class=\"container\">
\t\t<div class=\"row\">
\t\t\t<div class=\"col-lg-6\">
\t\t\t\t<div class=\"section-title\">
\t\t\t\t\t<h2>Related products</h2>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"col-lg-6\">
\t\t\t\t<div class=\"d-flex justify-content-start justify-content-lg-end\">
\t\t\t\t\t<a class=\"btn\" href=\"#\">Shop Our Meats</a>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t\t<div class=\"row mt-4\">
\t\t\t";
            // line 170
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["associated"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["associatedProduct"]) {
                // line 171
                echo "\t\t\t\t";
                $this->loadTemplate("products/sections/product-summary.twig", "products/product-page.twig", 171)->display(twig_to_array(["product" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["associatedProduct"], "to", [], "any", false, false, false, 171), "product", [], "any", false, false, false, 171)]));
                // line 172
                echo "\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['associatedProduct'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 173
            echo "\t\t</div>
\t</div>
</section>
<!--=================================
        Featured products -->
";
        }
        // line 179
        echo "

";
    }

    public function getTemplateName()
    {
        return "products/product-page.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  390 => 179,  382 => 173,  376 => 172,  373 => 171,  369 => 170,  349 => 152,  347 => 151,  345 => 150,  338 => 145,  331 => 141,  322 => 140,  319 => 139,  316 => 138,  313 => 137,  305 => 133,  272 => 103,  261 => 94,  255 => 90,  251 => 88,  248 => 87,  241 => 82,  235 => 78,  232 => 77,  229 => 76,  227 => 75,  221 => 71,  215 => 69,  209 => 67,  207 => 66,  203 => 64,  199 => 62,  195 => 60,  189 => 57,  186 => 56,  184 => 55,  181 => 54,  178 => 53,  175 => 52,  168 => 47,  160 => 45,  150 => 43,  146 => 42,  143 => 41,  137 => 37,  133 => 35,  131 => 34,  126 => 33,  124 => 32,  119 => 30,  114 => 28,  110 => 26,  107 => 25,  104 => 24,  101 => 23,  98 => 22,  96 => 21,  93 => 20,  89 => 19,  82 => 16,  78 => 15,  71 => 12,  67 => 11,  61 => 8,  56 => 7,  52 => 6,  47 => 1,  45 => 4,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'products/sections/base-page.twig' %}

{# some designs only have the add to cart button (quantity always = 1) This is a quick toggle for the product-actions form generating code #}
{% set showQuantityField = true %}

{% block meta_data %}
\t<title>{{ product.getPageTitle() }}</title>
\t<meta name=\"description\" content=\"{{ product.getMetaDescription() }}\" />
{% endblock %}

{% block canonical_link %}
\t<link rel=\"canonical\" href=\"{{ product.getCanonicalLink() }}\" />
{% endblock %}

{% block content_title %}
\t<h1>{{ product.getMainHeading() }}</h1>
{% endblock %}

{% block products_content %}

\t{% set pricedOptions = product.pricedOptionGroup.getOptions() %}
\t{% set addUrl = \"/Cart/Action/Add/\" ~ controller.callStatic('Products\\\\Product', 'getClassLineItemGeneratorIdentifier') ~ \"/\" ~ product.getLineItemGeneratorIdentifier() ~ \"/\" %}
\t{% if pricedOptions %}
\t\t{% set addUrl = \"/Cart/Action/Add/\" ~ controller.callStatic('Products\\\\Options\\\\PricedProductOption', 'getClassLineItemGeneratorIdentifier') ~ \"/\" %}
\t{% endif %}
\t<div class =\"row\">
\t\t<div class=\"col-lg-6 col-md-12\">
\t\t\t<span class=\"text-primary product-price\">{{ product.getPrice()|formatPrice }}</span>

\t\t\t<p>{{ product.content|raw }}</p>
\t
\t\t\t{% if 'CART' is enabled %}
\t\t\t<form  class=\"js-add-to-cart-form add-to-cart custom-form row mt-3\" action=\"{{ addUrl }}\" method=\"post\">
\t\t\t\t\t{% if pricedOptions %}
\t\t\t\t\t<div class=\"col-md-3\">
\t\t\t\t\t\t<label class=\"select-wrapper\">
\t\t\t\t\t\t\t<label class=\"label form-label\">{{ product.pricedOptionGroup.name }}</label>
\t\t\t\t\t\t\t<span
\t\t\t\t\t\t\t\tclass=\"field\">
\t\t\t\t\t\t\t\t{# The name attribute is just \"id\" here, so it's consistent with the URL scheme for adding a regular product #}
\t\t\t\t\t\t\t\t<select name=\"id\" class=\"js-product-price-adjuster form-select\">
\t\t\t\t\t\t\t\t\t{% for option in pricedOptions %}
\t\t\t\t\t\t\t\t\t\t<option value=\"{{ option.id }}\" data-price=\"{{ option.getPrice()|formatPrice }}\">{{ option.name }}
\t\t\t\t\t\t\t\t\t\t\t-
\t\t\t\t\t\t\t\t\t\t\t{{ option.getPrice()|formatPrice }}</option>
\t\t\t\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t</label>
\t\t\t\t\t</div>
\t\t\t\t\t{% endif %}
\t\t\t\t\t{% set stock = product.getAvailableStock() %}
\t\t\t\t\t{% if stock > 0 %}
\t\t\t\t\t<div class=\"col-md-3 mt-3 mt-md-0\">
\t\t\t\t\t\t{% if showQuantityField %}
\t\t\t\t\t\t\t<label for=\"formFile\" class=\"form-label label\">Quantity</label>
\t\t\t\t\t\t\t<input class=\"field\" type=\"number\" name=\"quantity\" class=\"form-control\" value=\"1\" max=\"{{ stock }}\" min=\"1\"/>
\t\t\t\t\t\t\t<span class=\"append-errors\"></span>
\t\t\t\t\t\t{% else %}
\t\t\t\t\t\t\t<input type=\"hidden\" name=\"quantity\" value=\"1\"/>
\t\t\t\t\t\t{% endif %}
\t\t\t\t\t</div>
\t\t\t\t\t{% endif %}
\t\t\t\t\t<div class=\"col-md-2 mt-3 mt-md-0\">
\t\t\t\t\t\t<label for=\"formFile\" class=\"form-label\">Price</label>
\t\t\t\t\t\t<span class=\"js-product-price price\">{% if pricedOptions %}
\t\t\t\t\t\t\t\t{{ pricedOptions[0].getPrice()|formatPrice }}
\t\t\t\t\t\t\t{% else %}
\t\t\t\t\t\t\t\t{{ product.getPrice()|formatPrice }}
\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t</span>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-md-4 mt-3 mt-md-0 d-flex align-items-end\">

\t\t\t\t\t\t{% if stock > 0 %}
\t\t\t\t\t\t\t{% include 'forms/submit-button.twig' with {'label': 'Add to Cart'} %}
\t\t\t\t\t\t{% else %}
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<p class=\"text-primary mt-3 mb-5\">Out of Stock</p>
\t\t\t\t\t\t\t
\t\t\t\t\t\t{% endif %}


\t\t\t\t\t</div>
\t\t\t</form>
\t\t\t{% endif %}
\t\t\t{% if stock > 0 %}
\t\t\t\t\t\t\t<p class=\"text-primary mt-3 mb-5\">1 in stock (can be backordered)</p>
\t\t\t\t\t\t{% else %}
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<p class=\"text-primary mt-3 mb-5\">Out of Stock</p>
\t\t\t\t\t\t\t
\t\t\t\t\t\t{% endif %}
\t\t\t<div class=\"accordion accordion-flush pt-5 border-top\" id=\"accordionFlushExample\">
\t\t\t\t<div class=\"accordion-item mb-2\">
\t\t\t\t\t<h2 class=\"accordion-header\" id=\"flush-headingOne\">
\t\t\t\t\t\t<button class=\"accordion-button\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#panelsStayOpen-collapseOne\" aria-expanded=\"true\" aria-controls=\"panelsStayOpen-collapseOne\">
\t\t\t\t\t\t\tDescription
\t\t\t\t\t\t</button>
\t\t\t\t\t</h2>
\t\t\t\t\t<div id=\"panelsStayOpen-collapseOne\" class=\"accordion-collapse collapse show\" aria-labelledby=\"panelsStayOpen-headingOne\">
\t\t\t\t\t\t<div class=\"accordion-body\">
\t\t\t\t\t\t\t{{ product.content|raw }}
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"accordion-item mb-2\">
\t\t\t\t\t<h2 class=\"accordion-header\" id=\"flush-headingTwo\">
\t\t\t\t\t\t<button class=\"accordion-button collapsed\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#flush-collapseTwo\" aria-expanded=\"false\" aria-controls=\"flush-collapseTwo\">
\t\t\t\t\t\t\tAdditional Information
\t\t\t\t\t\t</button>
\t\t\t\t\t</h2>
\t\t\t\t\t<div id=\"flush-collapseTwo\" class=\"accordion-collapse collapse\" aria-labelledby=\"flush-headingTwo\" data-bs-parent=\"#accordionFlushExample\">
\t\t\t\t\t\t<div class=\"accordion-body\">Rough leg meat best slow cooked to make dishes like osso buco. Leg it in to trying a Leg shank today. We supply this in various pack sizes for your convenience.</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"accordion-item mb-2\">
\t\t\t\t\t<h2 class=\"accordion-header\" id=\"flush-headingThree\">
\t\t\t\t\t\t<button class=\"accordion-button collapsed\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#flush-collapseThree\" aria-expanded=\"false\" aria-controls=\"flush-collapseThree\">
\t\t\t\t\t\t\tReviews
\t\t\t\t\t\t</button>
\t\t\t\t\t</h2>
\t\t\t\t\t<div id=\"flush-collapseThree\" class=\"accordion-collapse collapse\" aria-labelledby=\"flush-headingThree\" data-bs-parent=\"#accordionFlushExample\">
\t\t\t\t\t\t<div class=\"accordion-body\">Rough leg meat best slow cooked to make dishes like osso buco. Leg it in to trying a Leg shank today. We supply this in various pack sizes for your convenience.</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t

\t\t</div>
\t\t<div class=\"col-lg-6 col-md-12 mt-5 mt-lg-0\">
\t\t\t<div class=\"left-btn mb-5 d-flex justify-content-end\">
\t\t\t\t<a href=\"{{ product.category.getNavPath() }}\"><i class=\"fa-solid fa-arrow-left me-3\"></i>Back to {{product.category.name}}</a>
\t\t\t</div>
\t\t\t<div class=\"product-img d-flex justify-content-end\">
\t\t\t\t{# <img class=\"img-fluid\" src=\"images/meet-product.png\"> #}
\t\t\t\t{% set images = product.getVisibleImages() %}
\t\t\t\t{% if images and images[0].image %}
\t\t\t\t\t{% set image = images[0] %}
\t\t\t\t\t<a class=\"main-image image js-main-image\" href=\"{{ image.image.getLink() }}\" data-src=\"{{ image.image.getLink() }}\" data-thumb=\"{{ image.thumbnail.getLink() }}\" >
\t\t\t\t\t{{ image.image.tag('', image.imageAltText)|raw }}

\t\t\t\t\t</a>
\t\t\t\t{% endif %}
\t\t\t</div>
\t\t</div>
\t</div>
\t

{% set associated = product.getAssociatedProductCategories() %}
{% if associated %}

<!--=================================
        Featured products -->
<section class=\"space-ptb bg-light border-top border-white border-3\">
\t<div class=\"container\">
\t\t<div class=\"row\">
\t\t\t<div class=\"col-lg-6\">
\t\t\t\t<div class=\"section-title\">
\t\t\t\t\t<h2>Related products</h2>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"col-lg-6\">
\t\t\t\t<div class=\"d-flex justify-content-start justify-content-lg-end\">
\t\t\t\t\t<a class=\"btn\" href=\"#\">Shop Our Meats</a>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t\t<div class=\"row mt-4\">
\t\t\t{% for associatedProduct in associated %}
\t\t\t\t{% include 'products/sections/product-summary.twig' with {'product': associatedProduct.to.product } only %}
\t\t\t{% endfor %}
\t\t</div>
\t</div>
</section>
<!--=================================
        Featured products -->
{% endif %}


{% endblock %}
", "products/product-page.twig", "/home/meatadev/public_html/theme/twig/products/product-page.twig");
    }
}
