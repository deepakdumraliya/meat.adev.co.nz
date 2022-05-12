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

/* template/complete-template.twig */
class __TwigTemplate_119bc0964dd42a49575cee1e09f209d0 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'meta_data' => [$this, 'block_meta_data'],
            'canonical_link' => [$this, 'block_canonical_link'],
            'styles' => [$this, 'block_styles'],
            'scripts' => [$this, 'block_scripts'],
            'content_banner' => [$this, 'block_content_banner'],
            'content_wrapper' => [$this, 'block_content_wrapper'],
            'notifications' => [$this, 'block_notifications'],
            'content' => [$this, 'block_content'],
            'page_sections' => [$this, 'block_page_sections'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "<!DOCTYPE html>
<html xmlns=\"http://www.w3.org/1999/xhtml\" lang=\"en-NZ\" class=\"";
        // line 2
        echo twig_escape_filter($this->env, twig_replace_filter(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "pageType", [], "any", false, false, false, 2), [" " => "-"]), "html", null, true);
        echo "\">
\t<head>
\t\t";
        // line 4
        $this->displayBlock('meta_data', $context, $blocks);
        // line 8
        echo "\t\t<meta http-equiv=\"Content-Type\" content=\"text/html;charset=utf-8\" />
\t\t<meta name=\"viewport\" content=\"width=device-width, initial-scale=1\" />
\t\t<meta http-equiv=\"X-UA-Compatible\" content=\"chrome=1\">
\t\t";
        // line 11
        if ((twig_get_attribute($this->env, $this->source, ($context["config"] ?? null), "googleSiteVerification", [], "any", false, false, false, 11) != "")) {
            // line 12
            echo "\t\t\t<meta name=\"google-site-verification\" content=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["config"] ?? null), "googleSiteVerification", [], "any", false, false, false, 12), "html", null, true);
            echo "\">
\t\t";
        }
        // line 14
        echo "\t\t";
        $this->displayBlock('canonical_link', $context, $blocks);
        // line 21
        echo "\t\t";
        // line 22
        echo "\t\t<link rel=\"preconnect\" href=\"https://fonts.googleapis.com\" />
\t\t<link rel=\"preconnect\" href=\"https://fonts.gstatic.com\" crossorigin />
\t\t <!-- Google Font -->
        <link href=\"https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800;900&display=swap\"rel=\"stylesheet\">
        <link href=\"https://fonts.googleapis.com/css2?family=Smooch&display=swap\"rel=\"stylesheet\">
\t\t<link href=\"https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,400;0,700;1,400;1,700&display=swap\" rel=\"stylesheet\" />
\t\t<script type=\"text/javascript\">
\t\t\t// add this immediately so elements which are initially hidden based on presence of javascript don't 'flash'
\t\t\t(function(){let node=document.documentElement; node.setAttribute('class', node.getAttribute('class') + ' javascript')})()
\t\t</script>
\t\t";
        // line 32
        $this->displayBlock('styles', $context, $blocks);
        // line 40
        echo "\t\t";
        if ((twig_get_attribute($this->env, $this->source, ($context["config"] ?? null), "favicon", [], "any", false, false, false, 40) != null)) {
            // line 41
            echo "\t\t\t";
            $this->loadTemplate("template/sections/favicon.twig", "template/complete-template.twig", 41)->display($context);
            // line 42
            echo "\t\t";
        }
        // line 43
        echo "\t\t";
        $this->displayBlock('scripts', $context, $blocks);
        // line 87
        echo "\t</head>
\t<body>
<!--=================================
        Header -->
<header class=\"min-header\">
\t<div class=\"topbar\">
\t\t<div class=\"container\">
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-md-12\">
\t\t\t\t\t<p>Free delivery for orders over \$150 within Christchurch</p>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
\t<div class=\"header\">
\t\t<nav class=\"navbar navbar-static-top navbar-expand-lg\">
\t\t\t<div class=\"container-fluid main-header position-relative\">
\t\t\t\t<button type=\"button\" class=\"navbar-toggler\" data-bs-toggle=\"collapse\" data-bs-target=\".navbar-collapse\">
\t\t\t\t\t<i class=\"fas fa-align-left\"></i>
\t\t\t\t</button>
\t\t\t\t<a class=\"navbar-brand\" href=\"";
        // line 107
        echo twig_escape_filter($this->env, ($context["homePath"] ?? null), "html", null, true);
        echo "\">
\t\t\t\t\t<img class=\"img-fluid logo\" src=\"/theme/images/logo.png\" alt=\"";
        // line 108
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["config"] ?? null), "getSiteName", [], "method", false, false, false, 108), "html", null, true);
        echo "\">
\t\t\t\t\t<img class=\"img-fluid sticky-logo\" src=\"/theme/images/sticky-logo.png\" alt=\"";
        // line 109
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["config"] ?? null), "getSiteName", [], "method", false, false, false, 109), "html", null, true);
        echo "\">
\t\t\t\t</a>
\t\t\t\t<div class=\"header-menu\">
\t\t\t\t\t<div class=\"navbar-collapse collapse justify-content-center\">
\t\t\t\t\t\t<ul class=\"nav navbar-nav\">
\t\t\t\t\t\t\t";
        // line 114
        $this->loadTemplate("template/sections/navigation.twig", "template/complete-template.twig", 114)->display(twig_to_array(["navItems" =>         // line 115
($context["navItems"] ?? null), "currentDepth" => 1, "maxDepth" => 2, "currentNavItem" =>         // line 118
($context["currentNavItem"] ?? null)]));
        // line 120
        echo "\t\t\t\t\t\t\t

\t\t\t\t\t\t</ul>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"add-listing\">
\t\t\t\t\t<ul class=\"nav navbar-nav\">
\t\t\t\t\t\t";
        // line 127
        $this->loadTemplate("template/sections/search-form.twig", "template/complete-template.twig", 127)->display($context);
        // line 128
        echo "\t\t\t\t\t\t";
        $this->loadTemplate("template/sections/account-navigation.twig", "template/complete-template.twig", 128)->display($context);
        // line 129
        echo "\t\t\t\t\t\t";
        $this->loadTemplate("template/sections/cart-navigation.twig", "template/complete-template.twig", 129)->display($context);
        // line 130
        echo "\t\t\t\t\t</ul>
\t\t\t\t</div>
\t\t\t</div>
\t\t</nav>
\t</div>
</header>
\t\t<main>
\t\t\t";
        // line 137
        $this->displayBlock('content_banner', $context, $blocks);
        // line 140
        echo "\t\t\t";
        $this->displayBlock('content_wrapper', $context, $blocks);
        // line 159
        echo "\t\t</main>
<!--=================================
        footer-->
";
        // line 162
        $this->loadTemplate("template/sections/newslettter.twig", "template/complete-template.twig", 162)->display($context);
        // line 163
        echo "
<footer class=\"footer\">
\t<div class=\"min-footer\">
\t\t<div class=\"container\">
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-md-4 col-sm-12 text-center text-md-center order-md-2\">
\t\t\t\t\t<a class=\"footer-logo\" href=\"index.html\">
\t\t\t\t\t\t<img class=\"img-fluid\" src=\"/theme/images/footer-logo.png\" alt=\"logo\">
\t\t\t\t\t\t<h3 class=\"footer-logo-title mt-5\">Life is  getting a whole lot better!</h3>
\t\t\t\t\t</a>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-md-4 col-sm-12 mt-5 mt-md-0 order-md-1\">
\t\t\t\t\t<div class=\"footer-link text-center text-md-start\">
\t\t\t\t\t\t<h3 class=\"footer-title\">Meet Our Meat</h3>
\t\t\t\t\t\t<div class=\"footer-contact-info text-center text-md-start\">
\t\t\t\t\t\t\t<ul class=\"list-unstyled mb-0\">
\t\t\t\t\t\t\t\t<li class=\"justify-content-center justify-content-md-start\">
\t\t\t\t\t\t\t\t\t<a href=\"#\">About Us</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li class=\"justify-content-center justify-content-md-start\">
\t\t\t\t\t\t\t\t\t<a href=\"#\">Adventures Await</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li class=\"justify-content-center justify-content-md-start\">
\t\t\t\t\t\t\t\t\t<a href=\"#\">Meet Deets (FAQ)</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li class=\"justify-content-center justify-content-md-start\">
\t\t\t\t\t\t\t\t\t<a href=\"#\">Shop Meats</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li class=\"justify-content-center justify-content-md-start\">
\t\t\t\t\t\t\t\t\t<a href=\"/our-partners\">Our Partners</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-md-4 col-sm-12 mt-5 mt-md-0 text-start text-md-end order-md-3\">
\t\t\t\t\t<div class=\"footer-link text-center text-md-end\">
\t\t\t\t\t\t<h3 class=\"footer-title\">Customer Service</h3>
\t\t\t\t\t\t<div class=\"footer-contact-info\">
\t\t\t\t\t\t\t<ul class=\"list-unstyled mb-0\">
\t\t\t\t\t\t\t\t<li class=\"justify-content-center justify-content-md-end\">info@meetourmeat.co.nz</li>
\t\t\t\t\t\t\t\t<li class=\"justify-content-center justify-content-md-end\">
\t\t\t\t\t\t\t\t\t<a href=\"/contact-us\">Contact Us</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li class=\"justify-content-center  justify-content-md-end\">
\t\t\t\t\t\t\t\t\t<a href=\"#\">Account</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li class=\"justify-content-center justify-content-md-end\">
\t\t\t\t\t\t\t\t\t<a href=\"#\">Privacy Policy</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li class=\"justify-content-center justify-content-md-end\">
\t\t\t\t\t\t\t\t\t<a href=\"#\">Refund Policy</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li class=\"justify-content-center justify-content-md-end\">
\t\t\t\t\t\t\t\t\t<a href=\"#\">Shipping and Delivery</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
\t<div class=\"footer-bottom\">
\t\t<div class=\"container\">
\t\t\t<div class=\"row align-items-center copyright\">
\t\t\t\t<div class=\"col-12 col-md-3 mb-3 mb-md-0 text-center text-md-start\">
\t\t\t\t\t<p class=\"mb-0\">© ";
        // line 230
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["config"] ?? null), "getSiteName", [], "method", false, false, false, 230), "html", null, true);
        echo "</p>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-12 col-md-6 mb-3 mb-md-0 text-center\">
\t\t\t\t\t<ul class=\"social-icons list-unstyled list-inline mb-0\">
\t\t\t\t\t\t<li class=\"list-inline-item\">
\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t<i class=\"fa-brands fa-facebook-f\"></i>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li class=\"list-inline-item\">
\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t<i class=\"fa-brands fa-twitter\"></i>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li class=\"list-inline-item\">
\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t<i class=\"fa-brands fa-instagram\"></i>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t</ul>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-12 col-md-3 text-center text-md-end\">
\t\t\t\t\t<p>Web Design by Activate</p>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
</footer>
<!--=================================
        footer-->

\t\t";
        // line 261
        echo twig_get_attribute($this->env, $this->source, ($context["script"] ?? null), "output", [], "method", false, false, false, 261);
        echo "
\t\t";
        // line 263
        echo "\t\t<script> </script>
\t</body>
</html>
";
    }

    // line 4
    public function block_meta_data($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 5
        echo "\t\t\t<title>";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "getPageTitle", [], "method", false, false, false, 5), "html", null, true);
        echo "</title>
\t\t\t<meta name=\"description\" content=\"";
        // line 6
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "getMetaDescription", [], "method", false, false, false, 6), "html", null, true);
        echo "\" />
\t\t";
    }

    // line 14
    public function block_canonical_link($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 15
        echo "\t\t\t";
        if (twig_get_attribute($this->env, $this->source, ($context["originalPage"] ?? null), "isDuplicate", [], "any", false, false, false, 15)) {
            // line 16
            echo "\t\t\t\t<link rel='canonical' href='";
            echo twig_escape_filter($this->env, ((twig_constant("PROTOCOL") . twig_constant("SITE_ROOT")) . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["originalPage"] ?? null), "original", [], "any", false, false, false, 16), "path", [], "any", false, false, false, 16)), "html", null, true);
            echo "' />
\t\t\t";
        } else {
            // line 18
            echo "\t\t\t\t<link rel='canonical' href='";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["controller"] ?? null), "generateCanonicalUrl", [], "method", false, false, false, 18), "html", null, true);
            echo "' />
\t\t\t";
        }
        // line 20
        echo "\t\t";
    }

    // line 32
    public function block_styles($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 33
        echo "\t\t\t";
        // line 34
        echo "\t\t\t<link rel=\"stylesheet\" type=\"text/css\" href=\"/node_modules/foxy/src/foxy.css\" />
\t\t\t<link rel=\"stylesheet\" type=\"text/css\" href=\"/node_modules/lightgallery/css/lightgallery-bundle.min.css\" />
\t\t\t<link rel=\"stylesheet\" type=\"text/css\" href=\"/node_modules/featherlight/release/featherlight.min.css\" />
\t\t\t<!--suppress HtmlUnknownTarget -->
\t\t\t<link rel=\"stylesheet\" type=\"text/css\" href=\"/theme/style.css\" />
\t\t";
    }

    // line 43
    public function block_scripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 44
        echo "\t\t\t";
        // line 45
        echo "\t\t\t";
        twig_get_attribute($this->env, $this->source, ($context["script"] ?? null), "add", [0 => "/theme/scripts/jquery-3.6.0.min.js"], "method", false, false, false, 45);
        // line 46
        echo "\t\t\t";
        twig_get_attribute($this->env, $this->source, ($context["script"] ?? null), "add", [0 => "/node_modules/js-cookie/dist/js.cookie.js"], "method", false, false, false, 46);
        // line 47
        echo "\t\t\t";
        twig_get_attribute($this->env, $this->source, ($context["script"] ?? null), "add", [0 => "/theme/scripts/validation.js"], "method", false, false, false, 47);
        // line 48
        echo "\t\t\t";
        twig_get_attribute($this->env, $this->source, ($context["script"] ?? null), "add", [0 => "/node_modules/lightgallery/lightgallery.min.js"], "method", false, false, false, 48);
        // line 49
        echo "\t\t\t";
        twig_get_attribute($this->env, $this->source, ($context["script"] ?? null), "add", [0 => "/node_modules/lightgallery/plugins/thumbnail/lg-thumbnail.min.js"], "method", false, false, false, 49);
        // line 50
        echo "\t\t\t";
        twig_get_attribute($this->env, $this->source, ($context["script"] ?? null), "add", [0 => "/node_modules/featherlight/release/featherlight.min.js"], "method", false, false, false, 50);
        // line 51
        echo "\t\t\t";
        twig_get_attribute($this->env, $this->source, ($context["script"] ?? null), "add", [0 => "/theme/scripts/featherlight-mouseup-fix.js"], "method", false, false, false, 51);
        // line 52
        echo "\t\t\t";
        twig_get_attribute($this->env, $this->source, ($context["script"] ?? null), "add", [0 => "/node_modules/foxy/src/scripts/Foxy.js"], "method", false, false, false, 52);
        // line 53
        echo "\t\t\t";
        twig_get_attribute($this->env, $this->source, ($context["script"] ?? null), "add", [0 => "/node_modules/foxy/src/scripts/Fennecs.js"], "method", false, false, false, 53);
        // line 54
        echo "
\t\t\t";
        // line 55
        if (call_user_func_array($this->env->getTest('enabled')->getCallable(), ["HOVER_CART"])) {
            // line 56
            echo "\t\t\t\t";
            twig_get_attribute($this->env, $this->source, ($context["script"] ?? null), "add", [0 => "/theme/scripts/hover-cart.js"], "method", false, false, false, 56);
            // line 57
            echo "\t\t\t";
        }
        // line 58
        echo "
\t\t\t";
        // line 59
        twig_get_attribute($this->env, $this->source, ($context["script"] ?? null), "add", [0 => "/theme/scripts/script.js"], "method", false, false, false, 59);
        // line 60
        echo "
\t\t\t";
        // line 61
        if ((twig_constant("GOOGLE_MAPS_API") != "")) {
            // line 62
            echo "\t\t\t\t";
            $context["scriptUrl"] = ("https://maps.googleapis.com/maps/api/js?key=" . twig_constant("GOOGLE_MAPS_API"));
            // line 63
            echo "
\t\t\t\t";
            // line 64
            if (call_user_func_array($this->env->getTest('enabled')->getCallable(), ["SHIPPING"])) {
                // line 65
                echo "\t\t\t\t\t";
                // line 66
                echo "\t\t\t\t\t<script type='text/javascript' src='/theme/scripts/auto-address.js'></script>
\t\t\t\t\t";
                // line 67
                $context["scriptUrl"] = (($context["scriptUrl"] ?? null) . "&libraries=places&callback=initAutocomplete");
                // line 68
                echo "\t\t\t\t";
            }
            // line 69
            echo "
\t\t\t\t<script type=\"text/javascript\" src=\"";
            // line 70
            echo twig_escape_filter($this->env, ($context["scriptUrl"] ?? null), "html", null, true);
            echo "\"></script>
\t\t\t";
        }
        // line 72
        echo "
\t\t\t";
        // line 73
        if ((twig_get_attribute($this->env, $this->source, ($context["config"] ?? null), "analyticsId", [], "any", false, false, false, 73) != "")) {
            // line 74
            echo "\t\t\t\t";
            $this->loadTemplate("template/sections/google-analytics.twig", "template/complete-template.twig", 74)->display($context);
            // line 75
            echo "\t\t\t";
        }
        // line 76
        echo "\t\t\t";
        twig_get_attribute($this->env, $this->source, ($context["script"] ?? null), "add", [0 => "/theme/scripts/bootstrap/bootstrap.min.js"], "method", false, false, false, 76);
        // line 77
        echo "\t\t\t";
        twig_get_attribute($this->env, $this->source, ($context["script"] ?? null), "add", [0 => "/theme/scripts/fontawesome/all.min.js"], "method", false, false, false, 77);
        // line 78
        echo "\t\t\t";
        twig_get_attribute($this->env, $this->source, ($context["script"] ?? null), "add", [0 => "/theme/scripts/custom.js"], "method", false, false, false, 78);
        // line 79
        echo "\t\t\t";
        if ((twig_get_attribute($this->env, $this->source, ($context["config"] ?? null), "tagManagerId", [], "any", false, false, false, 79) != "")) {
            // line 80
            echo "\t\t\t\t";
            $this->loadTemplate("template/sections/google-tag-manager.twig", "template/complete-template.twig", 80)->display($context);
            // line 81
            echo "\t\t\t";
        }
        // line 82
        echo "\t\t\t
\t\t\t";
        // line 83
        if (((twig_get_attribute($this->env, $this->source, ($context["config"] ?? null), "recaptchaSiteKey", [], "any", false, false, false, 83) != "") && (twig_get_attribute($this->env, $this->source, ($context["config"] ?? null), "recaptchaSecret", [], "any", false, false, false, 83) != ""))) {
            // line 84
            echo "\t\t\t\t<script src=\"https://www.google.com/recaptcha/api.js\" async defer></script>
\t\t\t";
        }
        // line 86
        echo "\t\t";
    }

    // line 137
    public function block_content_banner($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 138
        echo "\t\t\t\t";
        $this->loadTemplate("template/sections/top-banner.twig", "template/complete-template.twig", 138)->display($context);
        // line 139
        echo "\t\t\t";
    }

    // line 140
    public function block_content_wrapper($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 141
        echo "\t\t\t\t";
        // line 143
        echo "\t\t\t\t\t\t";
        $this->displayBlock('notifications', $context, $blocks);
        // line 150
        echo "\t\t\t\t\t\t";
        $this->displayBlock('content', $context, $blocks);
        // line 151
        echo "\t\t\t\t\t";
        // line 153
        echo "\t\t\t\t";
        $this->displayBlock('page_sections', $context, $blocks);
        // line 158
        echo "\t\t\t";
    }

    // line 143
    public function block_notifications($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 144
        echo "\t\t\t\t\t\t\t";
        if ((($context["message"] ?? null) != "")) {
            // line 145
            echo "\t\t\t\t\t\t\t\t<p class=\"message\">
\t\t\t\t\t\t\t\t\t";
            // line 146
            echo ($context["message"] ?? null);
            echo "
\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t";
        }
        // line 149
        echo "\t\t\t\t\t\t";
    }

    // line 150
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 153
    public function block_page_sections($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 154
        echo "\t\t\t\t\t";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "getVisiblePageSections", [], "method", false, false, false, 154));
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
        foreach ($context['_seq'] as $context["_key"] => $context["section"]) {
            // line 155
            echo "\t\t\t\t\t\t";
            $this->loadTemplate(twig_get_attribute($this->env, $this->source, $context["section"], "getTemplateLocation", [], "method", false, false, false, 155), "template/complete-template.twig", 155)->display($context);
            // line 156
            echo "\t\t\t\t\t";
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['section'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 157
        echo "\t\t\t\t";
    }

    public function getTemplateName()
    {
        return "template/complete-template.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  566 => 157,  552 => 156,  549 => 155,  531 => 154,  527 => 153,  521 => 150,  517 => 149,  511 => 146,  508 => 145,  505 => 144,  501 => 143,  497 => 158,  494 => 153,  492 => 151,  489 => 150,  486 => 143,  484 => 141,  480 => 140,  476 => 139,  473 => 138,  469 => 137,  465 => 86,  461 => 84,  459 => 83,  456 => 82,  453 => 81,  450 => 80,  447 => 79,  444 => 78,  441 => 77,  438 => 76,  435 => 75,  432 => 74,  430 => 73,  427 => 72,  422 => 70,  419 => 69,  416 => 68,  414 => 67,  411 => 66,  409 => 65,  407 => 64,  404 => 63,  401 => 62,  399 => 61,  396 => 60,  394 => 59,  391 => 58,  388 => 57,  385 => 56,  383 => 55,  380 => 54,  377 => 53,  374 => 52,  371 => 51,  368 => 50,  365 => 49,  362 => 48,  359 => 47,  356 => 46,  353 => 45,  351 => 44,  347 => 43,  338 => 34,  336 => 33,  332 => 32,  328 => 20,  322 => 18,  316 => 16,  313 => 15,  309 => 14,  303 => 6,  298 => 5,  294 => 4,  287 => 263,  283 => 261,  249 => 230,  180 => 163,  178 => 162,  173 => 159,  170 => 140,  168 => 137,  159 => 130,  156 => 129,  153 => 128,  151 => 127,  142 => 120,  140 => 118,  139 => 115,  138 => 114,  130 => 109,  126 => 108,  122 => 107,  100 => 87,  97 => 43,  94 => 42,  91 => 41,  88 => 40,  86 => 32,  74 => 22,  72 => 21,  69 => 14,  63 => 12,  61 => 11,  56 => 8,  54 => 4,  49 => 2,  46 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html xmlns=\"http://www.w3.org/1999/xhtml\" lang=\"en-NZ\" class=\"{{ page.pageType|replace({' ': \"-\"}) }}\">
\t<head>
\t\t{% block meta_data %}
\t\t\t<title>{{ page.getPageTitle() }}</title>
\t\t\t<meta name=\"description\" content=\"{{ page.getMetaDescription() }}\" />
\t\t{% endblock %}
\t\t<meta http-equiv=\"Content-Type\" content=\"text/html;charset=utf-8\" />
\t\t<meta name=\"viewport\" content=\"width=device-width, initial-scale=1\" />
\t\t<meta http-equiv=\"X-UA-Compatible\" content=\"chrome=1\">
\t\t{% if config.googleSiteVerification != '' %}
\t\t\t<meta name=\"google-site-verification\" content=\"{{ config.googleSiteVerification }}\">
\t\t{% endif %}
\t\t{% block canonical_link %}
\t\t\t{% if originalPage.isDuplicate %}
\t\t\t\t<link rel='canonical' href='{{ constant('PROTOCOL') ~ constant('SITE_ROOT') ~ originalPage.original.path }}' />
\t\t\t{% else %}
\t\t\t\t<link rel='canonical' href='{{ controller.generateCanonicalUrl() }}' />
\t\t\t{% endif %}
\t\t{% endblock %}
\t\t{# get fonts early to reduce content flash. Still need set in _setup.css as well #}
\t\t<link rel=\"preconnect\" href=\"https://fonts.googleapis.com\" />
\t\t<link rel=\"preconnect\" href=\"https://fonts.gstatic.com\" crossorigin />
\t\t <!-- Google Font -->
        <link href=\"https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800;900&display=swap\"rel=\"stylesheet\">
        <link href=\"https://fonts.googleapis.com/css2?family=Smooch&display=swap\"rel=\"stylesheet\">
\t\t<link href=\"https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,400;0,700;1,400;1,700&display=swap\" rel=\"stylesheet\" />
\t\t<script type=\"text/javascript\">
\t\t\t// add this immediately so elements which are initially hidden based on presence of javascript don't 'flash'
\t\t\t(function(){let node=document.documentElement; node.setAttribute('class', node.getAttribute('class') + ' javascript')})()
\t\t</script>
\t\t{% block styles %}
\t\t\t{# Load stylesheets first for speed. Load all plugin stylesheets before local stylesheet to allow overrides with minimum declarations #}
\t\t\t<link rel=\"stylesheet\" type=\"text/css\" href=\"/node_modules/foxy/src/foxy.css\" />
\t\t\t<link rel=\"stylesheet\" type=\"text/css\" href=\"/node_modules/lightgallery/css/lightgallery-bundle.min.css\" />
\t\t\t<link rel=\"stylesheet\" type=\"text/css\" href=\"/node_modules/featherlight/release/featherlight.min.css\" />
\t\t\t<!--suppress HtmlUnknownTarget -->
\t\t\t<link rel=\"stylesheet\" type=\"text/css\" href=\"/theme/style.css\" />
\t\t{% endblock %}
\t\t{% if config.favicon != null %}
\t\t\t{% include \"template/sections/favicon.twig\" %}
\t\t{% endif %}
\t\t{% block scripts %}
\t\t\t{# {% do script.add(\"/node_modules/jquery/dist/jquery.min.js\") %} #}
\t\t\t{% do script.add(\"/theme/scripts/jquery-3.6.0.min.js\") %}
\t\t\t{% do script.add(\"/node_modules/js-cookie/dist/js.cookie.js\") %}
\t\t\t{% do script.add(\"/theme/scripts/validation.js\") %}
\t\t\t{% do script.add(\"/node_modules/lightgallery/lightgallery.min.js\") %}
\t\t\t{% do script.add(\"/node_modules/lightgallery/plugins/thumbnail/lg-thumbnail.min.js\") %}
\t\t\t{% do script.add(\"/node_modules/featherlight/release/featherlight.min.js\") %}
\t\t\t{% do script.add(\"/theme/scripts/featherlight-mouseup-fix.js\") %}
\t\t\t{% do script.add(\"/node_modules/foxy/src/scripts/Foxy.js\") %}
\t\t\t{% do script.add(\"/node_modules/foxy/src/scripts/Fennecs.js\") %}

\t\t\t{% if 'HOVER_CART' is enabled %}
\t\t\t\t{% do script.add(\"/theme/scripts/hover-cart.js\") %}
\t\t\t{% endif %}

\t\t\t{% do script.add(\"/theme/scripts/script.js\") %}

\t\t\t{% if constant('GOOGLE_MAPS_API') != \"\" %}
\t\t\t\t{% set scriptUrl = 'https://maps.googleapis.com/maps/api/js?key=' ~ constant('GOOGLE_MAPS_API') %}

\t\t\t\t{% if 'SHIPPING' is enabled %}
\t\t\t\t\t{# Note, this must be loaded before the Google Maps crap gets loaded, so we load it separately from everything else #}
\t\t\t\t\t<script type='text/javascript' src='/theme/scripts/auto-address.js'></script>
\t\t\t\t\t{% set scriptUrl = scriptUrl ~ '&libraries=places&callback=initAutocomplete' %}
\t\t\t\t{% endif %}

\t\t\t\t<script type=\"text/javascript\" src=\"{{ scriptUrl }}\"></script>
\t\t\t{% endif %}

\t\t\t{% if config.analyticsId != '' %}
\t\t\t\t{% include 'template/sections/google-analytics.twig' %}
\t\t\t{% endif %}
\t\t\t{% do script.add(\"/theme/scripts/bootstrap/bootstrap.min.js\") %}
\t\t\t{% do script.add(\"/theme/scripts/fontawesome/all.min.js\") %}
\t\t\t{% do script.add(\"/theme/scripts/custom.js\") %}
\t\t\t{% if config.tagManagerId != '' %}
\t\t\t\t{% include 'template/sections/google-tag-manager.twig' %}
\t\t\t{% endif %}
\t\t\t
\t\t\t{% if config.recaptchaSiteKey != '' and config.recaptchaSecret != '' %}
\t\t\t\t<script src=\"https://www.google.com/recaptcha/api.js\" async defer></script>
\t\t\t{% endif %}
\t\t{% endblock %}
\t</head>
\t<body>
<!--=================================
        Header -->
<header class=\"min-header\">
\t<div class=\"topbar\">
\t\t<div class=\"container\">
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-md-12\">
\t\t\t\t\t<p>Free delivery for orders over \$150 within Christchurch</p>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
\t<div class=\"header\">
\t\t<nav class=\"navbar navbar-static-top navbar-expand-lg\">
\t\t\t<div class=\"container-fluid main-header position-relative\">
\t\t\t\t<button type=\"button\" class=\"navbar-toggler\" data-bs-toggle=\"collapse\" data-bs-target=\".navbar-collapse\">
\t\t\t\t\t<i class=\"fas fa-align-left\"></i>
\t\t\t\t</button>
\t\t\t\t<a class=\"navbar-brand\" href=\"{{ homePath }}\">
\t\t\t\t\t<img class=\"img-fluid logo\" src=\"/theme/images/logo.png\" alt=\"{{ config.getSiteName() }}\">
\t\t\t\t\t<img class=\"img-fluid sticky-logo\" src=\"/theme/images/sticky-logo.png\" alt=\"{{ config.getSiteName() }}\">
\t\t\t\t</a>
\t\t\t\t<div class=\"header-menu\">
\t\t\t\t\t<div class=\"navbar-collapse collapse justify-content-center\">
\t\t\t\t\t\t<ul class=\"nav navbar-nav\">
\t\t\t\t\t\t\t{% include \"template/sections/navigation.twig\" with {
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\"navItems\": navItems,
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\"currentDepth\": 1,
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\"maxDepth\": 2,
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\"currentNavItem\": currentNavItem
\t\t\t\t\t\t\t\t\t\t\t\t\t\t} only %}
\t\t\t\t\t\t\t

\t\t\t\t\t\t</ul>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"add-listing\">
\t\t\t\t\t<ul class=\"nav navbar-nav\">
\t\t\t\t\t\t{% include 'template/sections/search-form.twig' %}
\t\t\t\t\t\t{% include 'template/sections/account-navigation.twig' %}
\t\t\t\t\t\t{% include 'template/sections/cart-navigation.twig' %}
\t\t\t\t\t</ul>
\t\t\t\t</div>
\t\t\t</div>
\t\t</nav>
\t</div>
</header>
\t\t<main>
\t\t\t{% block content_banner %}
\t\t\t\t{% include 'template/sections/top-banner.twig' %}
\t\t\t{% endblock %}
\t\t\t{% block content_wrapper %}
\t\t\t\t{# <section class=\"content-wrapper\">
\t\t\t\t\t<div class=\"container content\"> #}
\t\t\t\t\t\t{% block notifications %}
\t\t\t\t\t\t\t{% if message != '' %}
\t\t\t\t\t\t\t\t<p class=\"message\">
\t\t\t\t\t\t\t\t\t{{ message|raw }}
\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t{% endblock %}
\t\t\t\t\t\t{% block content %}{% endblock %}
\t\t\t\t\t{# </div><!-- end content -->
\t\t\t\t</section> #}
\t\t\t\t{% block page_sections %}
\t\t\t\t\t{% for section in page.getVisiblePageSections() %}
\t\t\t\t\t\t{% include section.getTemplateLocation() %}
\t\t\t\t\t{% endfor %}
\t\t\t\t{% endblock %}
\t\t\t{% endblock %}
\t\t</main>
<!--=================================
        footer-->
{% include 'template/sections/newslettter.twig' %}

<footer class=\"footer\">
\t<div class=\"min-footer\">
\t\t<div class=\"container\">
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-md-4 col-sm-12 text-center text-md-center order-md-2\">
\t\t\t\t\t<a class=\"footer-logo\" href=\"index.html\">
\t\t\t\t\t\t<img class=\"img-fluid\" src=\"/theme/images/footer-logo.png\" alt=\"logo\">
\t\t\t\t\t\t<h3 class=\"footer-logo-title mt-5\">Life is  getting a whole lot better!</h3>
\t\t\t\t\t</a>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-md-4 col-sm-12 mt-5 mt-md-0 order-md-1\">
\t\t\t\t\t<div class=\"footer-link text-center text-md-start\">
\t\t\t\t\t\t<h3 class=\"footer-title\">Meet Our Meat</h3>
\t\t\t\t\t\t<div class=\"footer-contact-info text-center text-md-start\">
\t\t\t\t\t\t\t<ul class=\"list-unstyled mb-0\">
\t\t\t\t\t\t\t\t<li class=\"justify-content-center justify-content-md-start\">
\t\t\t\t\t\t\t\t\t<a href=\"#\">About Us</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li class=\"justify-content-center justify-content-md-start\">
\t\t\t\t\t\t\t\t\t<a href=\"#\">Adventures Await</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li class=\"justify-content-center justify-content-md-start\">
\t\t\t\t\t\t\t\t\t<a href=\"#\">Meet Deets (FAQ)</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li class=\"justify-content-center justify-content-md-start\">
\t\t\t\t\t\t\t\t\t<a href=\"#\">Shop Meats</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li class=\"justify-content-center justify-content-md-start\">
\t\t\t\t\t\t\t\t\t<a href=\"/our-partners\">Our Partners</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-md-4 col-sm-12 mt-5 mt-md-0 text-start text-md-end order-md-3\">
\t\t\t\t\t<div class=\"footer-link text-center text-md-end\">
\t\t\t\t\t\t<h3 class=\"footer-title\">Customer Service</h3>
\t\t\t\t\t\t<div class=\"footer-contact-info\">
\t\t\t\t\t\t\t<ul class=\"list-unstyled mb-0\">
\t\t\t\t\t\t\t\t<li class=\"justify-content-center justify-content-md-end\">info@meetourmeat.co.nz</li>
\t\t\t\t\t\t\t\t<li class=\"justify-content-center justify-content-md-end\">
\t\t\t\t\t\t\t\t\t<a href=\"/contact-us\">Contact Us</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li class=\"justify-content-center  justify-content-md-end\">
\t\t\t\t\t\t\t\t\t<a href=\"#\">Account</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li class=\"justify-content-center justify-content-md-end\">
\t\t\t\t\t\t\t\t\t<a href=\"#\">Privacy Policy</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li class=\"justify-content-center justify-content-md-end\">
\t\t\t\t\t\t\t\t\t<a href=\"#\">Refund Policy</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li class=\"justify-content-center justify-content-md-end\">
\t\t\t\t\t\t\t\t\t<a href=\"#\">Shipping and Delivery</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
\t<div class=\"footer-bottom\">
\t\t<div class=\"container\">
\t\t\t<div class=\"row align-items-center copyright\">
\t\t\t\t<div class=\"col-12 col-md-3 mb-3 mb-md-0 text-center text-md-start\">
\t\t\t\t\t<p class=\"mb-0\">© {{ config.getSiteName() }}</p>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-12 col-md-6 mb-3 mb-md-0 text-center\">
\t\t\t\t\t<ul class=\"social-icons list-unstyled list-inline mb-0\">
\t\t\t\t\t\t<li class=\"list-inline-item\">
\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t<i class=\"fa-brands fa-facebook-f\"></i>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li class=\"list-inline-item\">
\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t<i class=\"fa-brands fa-twitter\"></i>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li class=\"list-inline-item\">
\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t<i class=\"fa-brands fa-instagram\"></i>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t</ul>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-12 col-md-3 text-center text-md-end\">
\t\t\t\t\t<p>Web Design by Activate</p>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
</footer>
<!--=================================
        footer-->

\t\t{{ script.output()|raw }}
\t\t{# Below is a completely nonsensical fix for a range of bonkers page load display issues in Chrome and Firefox #}
\t\t<script> </script>
\t</body>
</html>
", "template/complete-template.twig", "/home/meatadev/public_html/theme/twig/template/complete-template.twig");
    }
}
