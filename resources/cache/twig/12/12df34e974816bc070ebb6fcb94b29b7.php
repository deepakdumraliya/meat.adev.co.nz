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

/* products/sections/featured.twig */
class __TwigTemplate_551a60c73f9f892b20fd11ea1e56e552 extends Template
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
        echo "<section class=\"space-ptb bg-light\">
<div class=\"container\">
\t<div class=\"row\">
\t\t<div class=\"col-lg-6\">
\t\t\t<div class=\"section-title\">
\t\t\t\t<h2>Featured Products</h2>
\t\t\t</div>
\t\t</div>
\t\t<div class=\"col-lg-6\">
\t\t\t<div class=\"d-flex justify-content-lg-end\">
\t\t\t\t<a class=\"btn\" href=\"#\">Shop Our Meats</a>
\t\t\t</div>
\t\t</div>
\t</div>
\t<div class=\"row mt-4\">

\t\t";
        // line 17
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["controller"] ?? null), "callStatic", [0 => "Products\\Product", 1 => "getFeatured"], "method", false, false, false, 17));
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
        foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
            // line 18
            echo "\t\t\t";
            $this->loadTemplate("products/sections/product-summary.twig", "products/sections/featured.twig", 18)->display($context);
            // line 19
            echo "\t\t";
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 20
        echo "\t\t</div>
</div>
</section>
";
    }

    public function getTemplateName()
    {
        return "products/sections/featured.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  89 => 20,  75 => 19,  72 => 18,  55 => 17,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<section class=\"space-ptb bg-light\">
<div class=\"container\">
\t<div class=\"row\">
\t\t<div class=\"col-lg-6\">
\t\t\t<div class=\"section-title\">
\t\t\t\t<h2>Featured Products</h2>
\t\t\t</div>
\t\t</div>
\t\t<div class=\"col-lg-6\">
\t\t\t<div class=\"d-flex justify-content-lg-end\">
\t\t\t\t<a class=\"btn\" href=\"#\">Shop Our Meats</a>
\t\t\t</div>
\t\t</div>
\t</div>
\t<div class=\"row mt-4\">

\t\t{% for product in controller.callStatic('Products\\\\Product', 'getFeatured') %}
\t\t\t{% include 'products/sections/product-summary.twig' %}
\t\t{% endfor %}
\t\t</div>
</div>
</section>
", "products/sections/featured.twig", "/home/meatadev/public_html/theme/twig/products/sections/featured.twig");
    }
}
