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
        $context["showQuantityField"] = false;
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
        echo "\t";
        $context["pricedOptions"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "pricedOptionGroup", [], "any", false, false, false, 20), "getOptions", [], "method", false, false, false, 20);
        // line 21
        echo "\t";
        $context["addUrl"] = (((("/Cart/Action/Add/" . twig_get_attribute($this->env, $this->source, ($context["controller"] ?? null), "callStatic", [0 => "Products\\Product", 1 => "getClassLineItemGeneratorIdentifier"], "method", false, false, false, 21)) . "/") . twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "getLineItemGeneratorIdentifier", [], "method", false, false, false, 21)) . "/");
        // line 22
        echo "\t";
        if (($context["pricedOptions"] ?? null)) {
            // line 23
            echo "\t\t";
            $context["addUrl"] = (("/Cart/Action/Add/" . twig_get_attribute($this->env, $this->source, ($context["controller"] ?? null), "callStatic", [0 => "Products\\Options\\PricedProductOption", 1 => "getClassLineItemGeneratorIdentifier"], "method", false, false, false, 23)) . "/");
            // line 24
            echo "\t";
        }
        // line 25
        echo "
\t<div class=\"product-images js-product-images\">
\t\t";
        // line 27
        $context["images"] = twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "getVisibleImages", [], "method", false, false, false, 27);
        // line 28
        echo "\t\t";
        if ((($context["images"] ?? null) && twig_get_attribute($this->env, $this->source, (($__internal_compile_0 = ($context["images"] ?? null)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0[0] ?? null) : null), "image", [], "any", false, false, false, 28))) {
            // line 29
            echo "\t\t\t";
            $context["image"] = (($__internal_compile_1 = ($context["images"] ?? null)) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1[0] ?? null) : null);
            // line 30
            echo "\t\t\t<a class=\"main-image image js-main-image\" href=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["image"] ?? null), "image", [], "any", false, false, false, 30), "getLink", [], "method", false, false, false, 30), "html", null, true);
            echo "\" data-src=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["image"] ?? null), "image", [], "any", false, false, false, 30), "getLink", [], "method", false, false, false, 30), "html", null, true);
            echo "\" data-thumb=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["image"] ?? null), "thumbnail", [], "any", false, false, false, 30), "getLink", [], "method", false, false, false, 30), "html", null, true);
            echo "\" >
\t\t\t\t";
            // line 31
            echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["image"] ?? null), "thumbnail", [], "any", false, false, false, 31), "tag", [0 => "", 1 => twig_get_attribute($this->env, $this->source, ($context["image"] ?? null), "imageAltText", [], "any", false, false, false, 31)], "method", false, false, false, 31);
            echo "
\t\t\t</a>
\t\t";
        }
        // line 34
        echo "
\t\t";
        // line 35
        if ((twig_length_filter($this->env, ($context["images"] ?? null)) > 1)) {
            // line 36
            echo "\t\t\t<div class=\"small-images js-small-images\">
\t\t\t\t";
            // line 37
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["images"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
                // line 38
                echo "\t\t\t\t\t<a class=\"small-image image js-small-image\" href=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["image"], "image", [], "any", false, false, false, 38), "getLink", [], "method", false, false, false, 38), "html", null, true);
                echo "\" data-src=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["image"], "image", [], "any", false, false, false, 38), "getLink", [], "method", false, false, false, 38), "html", null, true);
                echo "\" data-thumb=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["image"], "thumbnail", [], "any", false, false, false, 38), "getLink", [], "method", false, false, false, 38), "html", null, true);
                echo "\">
\t\t\t\t\t\t";
                // line 39
                echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["image"], "thumbnail", [], "any", false, false, false, 39), "tag", [0 => "", 1 => twig_get_attribute($this->env, $this->source, $context["image"], "imageAltText", [], "any", false, false, false, 39)], "method", false, false, false, 39);
                echo "
\t\t\t\t\t</a>
\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['image'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 42
            echo "\t\t\t\t</div>
\t\t\t</div>
\t\t";
        }
        // line 45
        echo "\t\t<div class=\"col-2 product-details\">

\t\t\t<p class=\"js-product-price\">
\t\t\t\t";
        // line 48
        if (($context["pricedOptions"] ?? null)) {
            // line 49
            echo "\t\t\t\t\t";
            echo twig_escape_filter($this->env, formatPrice(twig_get_attribute($this->env, $this->source, (($__internal_compile_2 = ($context["pricedOptions"] ?? null)) && is_array($__internal_compile_2) || $__internal_compile_2 instanceof ArrayAccess ? ($__internal_compile_2[0] ?? null) : null), "getPrice", [], "method", false, false, false, 49)), "html", null, true);
            echo "
\t\t\t\t";
        } else {
            // line 51
            echo "\t\t\t\t\t";
            echo twig_escape_filter($this->env, formatPrice(twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "getPrice", [], "method", false, false, false, 51)), "html", null, true);
            echo "
\t\t\t\t";
        }
        // line 53
        echo "\t\t\t</p>

\t\t\t";
        // line 55
        echo twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "content", [], "any", false, false, false, 55);
        echo "

\t\t\t";
        // line 57
        $context["tabs"] = twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "getVisibleTabs", [], "method", false, false, false, 57);
        // line 58
        echo "\t\t\t";
        if (($context["tabs"] ?? null)) {
            // line 59
            echo "\t\t\t\t<div class=\"tab-nav\">
\t\t\t\t\t";
            // line 60
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["tabs"] ?? null));
            $context['loop'] = [
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            ];
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["tab"]) {
                // line 61
                echo "\t\t\t\t\t\t<a class=\"js-tab-link ";
                if ((twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 61) == 1)) {
                    echo "active";
                }
                echo "\" href=\"#tab-";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["tab"], "id", [], "any", false, false, false, 61), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["tab"], "name", [], "any", false, false, false, 61), "html", null, true);
                echo "</a>
\t\t\t\t\t";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tab'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 63
            echo "\t\t\t\t</div>
\t\t\t\t";
            // line 64
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["tabs"] ?? null));
            $context['loop'] = [
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            ];
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["tab"]) {
                // line 65
                echo "\t\t\t\t\t<div class=\"tab js-tab ";
                if ((twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 65) == 1)) {
                    echo "active";
                }
                echo "\" id=\"tab-";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["tab"], "id", [], "any", false, false, false, 65), "html", null, true);
                echo "\">
\t\t\t\t\t\t";
                // line 66
                echo twig_get_attribute($this->env, $this->source, $context["tab"], "content", [], "any", false, false, false, 66);
                echo "
\t\t\t\t\t</div>
\t\t\t\t";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tab'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 69
            echo "\t\t\t";
        }
        // line 70
        echo "
\t\t\t<div class=\"product-actions\">
\t\t\t\t";
        // line 72
        if (twig_constant("DO_ENQUIRY_FORM", ($context["product"] ?? null))) {
            // line 73
            echo "\t\t\t\t\t<a class=\"button js-open-form\" href=\"#enquire\">Enquire Now</a>
\t\t\t\t\t<div class=\"popup-form-wrapper\">
\t\t\t\t\t\t<div id=\"enquire\">
\t\t\t\t\t\t\t<h3>";
            // line 76
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "name", [], "any", false, false, false, 76), "html", null, true);
            echo "</h3>
\t\t\t\t\t\t\t";
            // line 77
            echo twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "outputEnquiryForm", [], "method", false, false, false, 77);
            echo "
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t";
        }
        // line 81
        echo "
\t\t\t\t";
        // line 82
        if (call_user_func_array($this->env->getTest('enabled')->getCallable(), ["CART"])) {
            // line 83
            echo "\t\t\t\t\t<form class=\"js-add-to-cart-form add-to-cart custom-form\" action=\"";
            echo twig_escape_filter($this->env, ($context["addUrl"] ?? null), "html", null, true);
            echo "\" method=\"post\">
\t\t\t\t\t\t";
            // line 84
            if (($context["pricedOptions"] ?? null)) {
                // line 85
                echo "\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t<label class=\"select-wrapper\">
\t\t\t\t\t\t\t\t\t<span class=\"label\">";
                // line 87
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "pricedOptionGroup", [], "any", false, false, false, 87), "name", [], "any", false, false, false, 87), "html", null, true);
                echo "</span>
\t\t\t\t\t\t\t\t\t<span class=\"field\">
\t\t\t\t\t\t\t\t\t\t";
                // line 90
                echo "\t\t\t\t\t\t\t\t\t\t<select name=\"id\" class=\"js-product-price-adjuster\">
\t\t\t\t\t\t\t\t\t\t\t";
                // line 91
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["pricedOptions"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["option"]) {
                    // line 92
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["option"], "id", [], "any", false, false, false, 92), "html", null, true);
                    echo "\" data-price=\"";
                    echo twig_escape_filter($this->env, formatPrice(twig_get_attribute($this->env, $this->source, $context["option"], "getPrice", [], "method", false, false, false, 92)), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 92), "html", null, true);
                    echo " - ";
                    echo twig_escape_filter($this->env, formatPrice(twig_get_attribute($this->env, $this->source, $context["option"], "getPrice", [], "method", false, false, false, 92)), "html", null, true);
                    echo "</option>
\t\t\t\t\t\t\t\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 94
                echo "\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t";
            }
            // line 99
            echo "
\t\t\t\t\t\t";
            // line 100
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "optionGroups", [], "any", false, false, false, 100));
            foreach ($context['_seq'] as $context["_key"] => $context["optionGroup"]) {
                // line 101
                echo "\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t<label class=\"select-wrapper\"><span class=\"label\">";
                // line 102
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["optionGroup"], "name", [], "any", false, false, false, 102), "html", null, true);
                echo "</span> <span class=\"field\"><select name=\"options[";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["optionGroup"], "id", [], "any", false, false, false, 102), "html", null, true);
                echo "]\">
\t\t\t\t\t\t\t\t\t";
                // line 103
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["optionGroup"], "getOptions", [], "method", false, false, false, 103));
                foreach ($context['_seq'] as $context["_key"] => $context["option"]) {
                    // line 104
                    echo "\t\t\t\t\t\t\t\t\t\t<option value=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["option"], "id", [], "any", false, false, false, 104), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 104), "html", null, true);
                    echo "</option>
\t\t\t\t\t\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 106
                echo "\t\t\t\t\t\t\t\t</select></span></label>
\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['optionGroup'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 109
            echo "
\t\t\t\t\t\t";
            // line 110
            $context["stock"] = twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "getAvailableStock", [], "method", false, false, false, 110);
            // line 111
            echo "\t\t\t\t\t\t";
            if ((($context["stock"] ?? null) > 0)) {
                // line 112
                echo "\t\t\t\t\t\t\t";
                if (($context["showQuantityField"] ?? null)) {
                    // line 113
                    echo "\t\t\t\t\t\t\t\t<p class=\"field-wrapper\">
\t\t\t\t\t\t\t\t\t<label>
\t\t\t\t\t\t\t\t\t\t<span class=\"label\">Quantity</span> <input class=\"field\" type=\"number\" name=\"quantity\" value=\"1\" max=\"";
                    // line 115
                    echo twig_escape_filter($this->env, ($context["stock"] ?? null), "html", null, true);
                    echo "\" min=\"1\" />
\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t<span class=\"append-errors\"></span>
\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t";
                } else {
                    // line 120
                    echo "\t\t\t\t\t\t\t\t<input type=\"hidden\" name=\"quantity\" value=\"1\" />
\t\t\t\t\t\t\t";
                }
                // line 122
                echo "\t\t\t\t\t\t\t";
                $this->loadTemplate("forms/submit-button.twig", "products/product-page.twig", 122)->display(twig_array_merge($context, ["label" => "Add to Cart"]));
                // line 123
                echo "\t\t\t\t\t\t";
            } else {
                // line 124
                echo "\t\t\t\t\t\t\t<p><strong>Out of Stock</strong></p>
\t\t\t\t\t\t";
            }
            // line 126
            echo "
\t\t\t\t\t</form>
\t\t\t\t";
        }
        // line 129
        echo "\t\t\t</div>
\t\t</div>
\t</div>

\t";
        // line 133
        $context["associated"] = twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "getAssociatedProductCategories", [], "method", false, false, false, 133);
        // line 134
        echo "\t";
        if (($context["associated"] ?? null)) {
            // line 135
            echo "\t\t<h2>You may also be interested in &hellip;</h2>
\t\t<ul class=\"product-links\">
\t\t\t";
            // line 137
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["associated"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["associatedProduct"]) {
                // line 138
                echo "\t\t\t\t";
                $this->loadTemplate("products/sections/product-summary.twig", "products/product-page.twig", 138)->display(twig_to_array(["product" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["associatedProduct"], "to", [], "any", false, false, false, 138), "product", [], "any", false, false, false, 138)]));
                // line 139
                echo "\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['associatedProduct'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 140
            echo "\t\t</ul>
\t";
        }
        // line 142
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
        return array (  480 => 142,  476 => 140,  470 => 139,  467 => 138,  463 => 137,  459 => 135,  456 => 134,  454 => 133,  448 => 129,  443 => 126,  439 => 124,  436 => 123,  433 => 122,  429 => 120,  421 => 115,  417 => 113,  414 => 112,  411 => 111,  409 => 110,  406 => 109,  398 => 106,  387 => 104,  383 => 103,  377 => 102,  374 => 101,  370 => 100,  367 => 99,  360 => 94,  345 => 92,  341 => 91,  338 => 90,  333 => 87,  329 => 85,  327 => 84,  322 => 83,  320 => 82,  317 => 81,  310 => 77,  306 => 76,  301 => 73,  299 => 72,  295 => 70,  292 => 69,  275 => 66,  266 => 65,  249 => 64,  246 => 63,  223 => 61,  206 => 60,  203 => 59,  200 => 58,  198 => 57,  193 => 55,  189 => 53,  183 => 51,  177 => 49,  175 => 48,  170 => 45,  165 => 42,  156 => 39,  147 => 38,  143 => 37,  140 => 36,  138 => 35,  135 => 34,  129 => 31,  120 => 30,  117 => 29,  114 => 28,  112 => 27,  108 => 25,  105 => 24,  102 => 23,  99 => 22,  96 => 21,  93 => 20,  89 => 19,  82 => 16,  78 => 15,  71 => 12,  67 => 11,  61 => 8,  56 => 7,  52 => 6,  47 => 1,  45 => 4,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'products/sections/base-page.twig' %}

{# some designs only have the add to cart button (quantity always = 1) This is a quick toggle for the product-actions form generating code #}
{% set showQuantityField = false %}

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

\t<div class=\"product-images js-product-images\">
\t\t{% set images = product.getVisibleImages() %}
\t\t{% if images and images[0].image %}
\t\t\t{% set image = images[0] %}
\t\t\t<a class=\"main-image image js-main-image\" href=\"{{ image.image.getLink() }}\" data-src=\"{{ image.image.getLink() }}\" data-thumb=\"{{ image.thumbnail.getLink() }}\" >
\t\t\t\t{{ image.thumbnail.tag('', image.imageAltText)|raw }}
\t\t\t</a>
\t\t{% endif %}

\t\t{% if images|length > 1 %}
\t\t\t<div class=\"small-images js-small-images\">
\t\t\t\t{% for image in images %}
\t\t\t\t\t<a class=\"small-image image js-small-image\" href=\"{{ image.image.getLink() }}\" data-src=\"{{ image.image.getLink() }}\" data-thumb=\"{{ image.thumbnail.getLink() }}\">
\t\t\t\t\t\t{{ image.thumbnail.tag('', image.imageAltText)|raw }}
\t\t\t\t\t</a>
\t\t\t\t{% endfor %}
\t\t\t\t</div>
\t\t\t</div>
\t\t{% endif %}
\t\t<div class=\"col-2 product-details\">

\t\t\t<p class=\"js-product-price\">
\t\t\t\t{% if pricedOptions %}
\t\t\t\t\t{{ pricedOptions[0].getPrice()|formatPrice }}
\t\t\t\t{% else %}
\t\t\t\t\t{{ product.getPrice()|formatPrice }}
\t\t\t\t{% endif %}
\t\t\t</p>

\t\t\t{{ product.content|raw }}

\t\t\t{% set tabs = product.getVisibleTabs() %}
\t\t\t{% if tabs %}
\t\t\t\t<div class=\"tab-nav\">
\t\t\t\t\t{% for tab in tabs %}
\t\t\t\t\t\t<a class=\"js-tab-link {% if loop.index == 1 %}active{% endif %}\" href=\"#tab-{{ tab.id }}\">{{ tab.name }}</a>
\t\t\t\t\t{% endfor %}
\t\t\t\t</div>
\t\t\t\t{% for tab in tabs %}
\t\t\t\t\t<div class=\"tab js-tab {% if loop.index == 1 %}active{% endif %}\" id=\"tab-{{ tab.id }}\">
\t\t\t\t\t\t{{ tab.content|raw }}
\t\t\t\t\t</div>
\t\t\t\t{% endfor %}
\t\t\t{% endif %}

\t\t\t<div class=\"product-actions\">
\t\t\t\t{% if constant('DO_ENQUIRY_FORM', product) %}
\t\t\t\t\t<a class=\"button js-open-form\" href=\"#enquire\">Enquire Now</a>
\t\t\t\t\t<div class=\"popup-form-wrapper\">
\t\t\t\t\t\t<div id=\"enquire\">
\t\t\t\t\t\t\t<h3>{{ product.name }}</h3>
\t\t\t\t\t\t\t{{ product.outputEnquiryForm()|raw }}
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t{% endif %}

\t\t\t\t{% if 'CART' is enabled %}
\t\t\t\t\t<form class=\"js-add-to-cart-form add-to-cart custom-form\" action=\"{{ addUrl }}\" method=\"post\">
\t\t\t\t\t\t{% if pricedOptions %}
\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t<label class=\"select-wrapper\">
\t\t\t\t\t\t\t\t\t<span class=\"label\">{{ product.pricedOptionGroup.name }}</span>
\t\t\t\t\t\t\t\t\t<span class=\"field\">
\t\t\t\t\t\t\t\t\t\t{# The name attribute is just \"id\" here, so it's consistent with the URL scheme for adding a regular product #}
\t\t\t\t\t\t\t\t\t\t<select name=\"id\" class=\"js-product-price-adjuster\">
\t\t\t\t\t\t\t\t\t\t\t{% for option in pricedOptions %}
\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"{{ option.id }}\" data-price=\"{{ option.getPrice()|formatPrice }}\">{{ option.name }} - {{ option.getPrice()|formatPrice }}</option>
\t\t\t\t\t\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t{% endif %}

\t\t\t\t\t\t{% for optionGroup in product.optionGroups %}
\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t<label class=\"select-wrapper\"><span class=\"label\">{{ optionGroup.name }}</span> <span class=\"field\"><select name=\"options[{{ optionGroup.id }}]\">
\t\t\t\t\t\t\t\t\t{% for option in optionGroup.getOptions() %}
\t\t\t\t\t\t\t\t\t\t<option value=\"{{ option.id }}\">{{ option.name }}</option>
\t\t\t\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t\t\t\t</select></span></label>
\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t{% endfor %}

\t\t\t\t\t\t{% set stock = product.getAvailableStock() %}
\t\t\t\t\t\t{% if stock > 0 %}
\t\t\t\t\t\t\t{% if showQuantityField %}
\t\t\t\t\t\t\t\t<p class=\"field-wrapper\">
\t\t\t\t\t\t\t\t\t<label>
\t\t\t\t\t\t\t\t\t\t<span class=\"label\">Quantity</span> <input class=\"field\" type=\"number\" name=\"quantity\" value=\"1\" max=\"{{ stock }}\" min=\"1\" />
\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t<span class=\"append-errors\"></span>
\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t{% else %}
\t\t\t\t\t\t\t\t<input type=\"hidden\" name=\"quantity\" value=\"1\" />
\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t{% include 'forms/submit-button.twig' with {'label': 'Add to Cart'} %}
\t\t\t\t\t\t{% else %}
\t\t\t\t\t\t\t<p><strong>Out of Stock</strong></p>
\t\t\t\t\t\t{% endif %}

\t\t\t\t\t</form>
\t\t\t\t{% endif %}
\t\t\t</div>
\t\t</div>
\t</div>

\t{% set associated = product.getAssociatedProductCategories() %}
\t{% if associated %}
\t\t<h2>You may also be interested in &hellip;</h2>
\t\t<ul class=\"product-links\">
\t\t\t{% for associatedProduct in associated %}
\t\t\t\t{% include 'products/sections/product-summary.twig' with {'product': associatedProduct.to.product } only %}
\t\t\t{% endfor %}
\t\t</ul>
\t{% endif %}

{% endblock %}
", "products/product-page.twig", "/home/meatadev/public_html/theme/twig/products/product-page.twig");
    }
}
