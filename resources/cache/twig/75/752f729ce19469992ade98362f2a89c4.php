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

/* template/sections/newslettter.twig */
class __TwigTemplate_ddd1a71a72af374075977d0c372fa9fb extends Template
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
        echo "<!--=================================
        Newsletter -->
<section class=\"space-ptb bg-light overflow-hidden position-relative\">
\t<div class=\"newsletter-bg-img position-absolute d-none d-xl-flex\">
\t\t<img class=\"img-fluid\" src=\"/theme/images/newsletter-bg.png\">
\t</div>
\t<div class=\"container\">
\t\t<div class=\"row justify-content-center\">
\t\t\t<div class=\"col-lg-8 col-md-12 justify-content-center text-center\">
\t\t\t\t<div class=\"newsletter-form\">
\t\t\t\t\t<h2>Join our Loyalty Rewards System</h2>
\t\t\t\t\t<p class=\"mt-3\">Get 10% off your first order and be the first to know about new arrivals, sales and special events.</p>
\t\t\t\t\t<form class=\"mt-4\">
\t\t\t\t\t\t<input type=\"email\" class=\"form-control\" id=\"exampleInputEmail1\" placeholder=\"Email Address...\" aria-describedby=\"emailHelp\">
\t\t\t\t\t\t<button type=\"submit\" class=\"btn btn-primary\">Sign me up</button>
\t\t\t\t\t</form>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
</section>
<!--=================================
        Newsletter -->
";
    }

    public function getTemplateName()
    {
        return "template/sections/newslettter.twig";
    }

    public function getDebugInfo()
    {
        return array (  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!--=================================
        Newsletter -->
<section class=\"space-ptb bg-light overflow-hidden position-relative\">
\t<div class=\"newsletter-bg-img position-absolute d-none d-xl-flex\">
\t\t<img class=\"img-fluid\" src=\"/theme/images/newsletter-bg.png\">
\t</div>
\t<div class=\"container\">
\t\t<div class=\"row justify-content-center\">
\t\t\t<div class=\"col-lg-8 col-md-12 justify-content-center text-center\">
\t\t\t\t<div class=\"newsletter-form\">
\t\t\t\t\t<h2>Join our Loyalty Rewards System</h2>
\t\t\t\t\t<p class=\"mt-3\">Get 10% off your first order and be the first to know about new arrivals, sales and special events.</p>
\t\t\t\t\t<form class=\"mt-4\">
\t\t\t\t\t\t<input type=\"email\" class=\"form-control\" id=\"exampleInputEmail1\" placeholder=\"Email Address...\" aria-describedby=\"emailHelp\">
\t\t\t\t\t\t<button type=\"submit\" class=\"btn btn-primary\">Sign me up</button>
\t\t\t\t\t</form>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
</section>
<!--=================================
        Newsletter -->
", "template/sections/newslettter.twig", "/home/meatadev/public_html/theme/twig/template/sections/newslettter.twig");
    }
}
