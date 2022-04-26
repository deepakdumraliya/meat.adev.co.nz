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
\t\t<link href=\"https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,400;0,700;1,400;1,700&display=swap\" rel=\"stylesheet\" />
\t\t<script type=\"text/javascript\">
\t\t\t// add this immediately so elements which are initially hidden based on presence of javascript don't 'flash'
\t\t\t(function(){let node=document.documentElement; node.setAttribute('class', node.getAttribute('class') + ' javascript')})()
\t\t</script>
\t\t";
        // line 29
        $this->displayBlock('styles', $context, $blocks);
        // line 37
        echo "\t\t";
        if ((twig_get_attribute($this->env, $this->source, ($context["config"] ?? null), "favicon", [], "any", false, false, false, 37) != null)) {
            // line 38
            echo "\t\t\t";
            $this->loadTemplate("template/sections/favicon.twig", "template/complete-template.twig", 38)->display($context);
            // line 39
            echo "\t\t";
        }
        // line 40
        echo "\t\t";
        $this->displayBlock('scripts', $context, $blocks);
        // line 81
        echo "\t</head>
\t<body>
\t\t<header role=\"banner\">
\t\t\t<section class=\"site-header\">
\t\t\t\t<div class=\"container\">
\t\t\t\t\t<a href=\"";
        // line 86
        echo twig_escape_filter($this->env, ($context["homePath"] ?? null), "html", null, true);
        echo "\">
\t\t\t\t\t\t<img class=\"logo\" src=\"/theme/images/logo.png\" width=\"\" height=\"\" alt=\"";
        // line 87
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["config"] ?? null), "getSiteName", [], "method", false, false, false, 87), "html", null, true);
        echo "\" />
\t\t\t\t\t</a>
\t\t\t\t\t";
        // line 90
        echo "\t\t\t\t</div>
\t\t\t\t<div class=\"main-navigation-wrapper\">
\t\t\t\t\t<span class=\"open-nav\">
\t\t\t\t\t\t<span class=\"bar top\"></span>
\t\t\t\t\t\t<span class=\"bar middle\"></span>
\t\t\t\t\t\t<span class=\"bar bottom\"></span>
\t\t\t\t\t</span>
\t\t\t\t\t<nav class=\"main-navigation container\">
\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t";
        // line 99
        $this->loadTemplate("template/sections/navigation.twig", "template/complete-template.twig", 99)->display(twig_to_array(["navItems" =>         // line 100
($context["navItems"] ?? null), "currentDepth" => 1, "maxDepth" => 2, "currentNavItem" =>         // line 103
($context["currentNavItem"] ?? null)]));
        // line 105
        echo "\t\t\t\t\t\t\t";
        $this->loadTemplate("template/sections/cart-navigation.twig", "template/complete-template.twig", 105)->display($context);
        // line 106
        echo "\t\t\t\t\t\t\t";
        $this->loadTemplate("template/sections/account-navigation.twig", "template/complete-template.twig", 106)->display($context);
        // line 107
        echo "\t\t\t\t\t\t</ul>
\t\t\t\t\t</nav>
\t\t\t\t</div>
\t\t\t</section>
\t\t</header><!-- end header -->
\t\t<main>
\t\t\t";
        // line 113
        $this->displayBlock('content_banner', $context, $blocks);
        // line 116
        echo "\t\t\t";
        $this->displayBlock('content_wrapper', $context, $blocks);
        // line 135
        echo "\t\t</main>
\t\t<footer role=\"banner\">
\t\t\t<section class=\"site-footer\">
\t\t\t\t<div class=\"container columns\">

\t\t\t\t</div>
\t\t\t</section>
\t\t\t<section class=\"sub-footer\">
\t\t\t\t<div class=\"container\">
\t\t\t\t\t<div class=\"copyright\">&copy; All rights reserved ";
        // line 144
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["config"] ?? null), "getSiteName", [], "method", false, false, false, 144), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "Y"), "html", null, true);
        echo "</div>
\t\t\t\t\t<div class=\"attribution\"><a href=\"https://www.activatedesign.co.nz/\" target=\"_blank\" ";
        // line 145
        if ( !twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "isHomepage", [], "any", false, false, false, 145)) {
            echo " rel=\"nofollow\" ";
        }
        echo ">Web Design</a> by Activate</div>
\t\t\t\t</div>
\t\t\t</section>
\t\t</footer>
\t\t";
        // line 149
        echo twig_get_attribute($this->env, $this->source, ($context["script"] ?? null), "output", [], "method", false, false, false, 149);
        echo "
\t\t";
        // line 151
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

    // line 29
    public function block_styles($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 30
        echo "\t\t\t";
        // line 31
        echo "\t\t\t<link rel=\"stylesheet\" type=\"text/css\" href=\"/node_modules/foxy/src/foxy.css\" />
\t\t\t<link rel=\"stylesheet\" type=\"text/css\" href=\"/node_modules/lightgallery/css/lightgallery-bundle.min.css\" />
\t\t\t<link rel=\"stylesheet\" type=\"text/css\" href=\"/node_modules/featherlight/release/featherlight.min.css\" />
\t\t\t<!--suppress HtmlUnknownTarget -->
\t\t\t<link rel=\"stylesheet\" type=\"text/css\" href=\"/theme/style.css\" />
\t\t";
    }

    // line 40
    public function block_scripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 41
        echo "\t\t\t";
        twig_get_attribute($this->env, $this->source, ($context["script"] ?? null), "add", [0 => "/node_modules/jquery/dist/jquery.min.js"], "method", false, false, false, 41);
        // line 42
        echo "\t\t\t";
        twig_get_attribute($this->env, $this->source, ($context["script"] ?? null), "add", [0 => "/node_modules/js-cookie/dist/js.cookie.js"], "method", false, false, false, 42);
        // line 43
        echo "\t\t\t";
        twig_get_attribute($this->env, $this->source, ($context["script"] ?? null), "add", [0 => "/theme/scripts/validation.js"], "method", false, false, false, 43);
        // line 44
        echo "\t\t\t";
        twig_get_attribute($this->env, $this->source, ($context["script"] ?? null), "add", [0 => "/node_modules/lightgallery/lightgallery.min.js"], "method", false, false, false, 44);
        // line 45
        echo "\t\t\t";
        twig_get_attribute($this->env, $this->source, ($context["script"] ?? null), "add", [0 => "/node_modules/lightgallery/plugins/thumbnail/lg-thumbnail.min.js"], "method", false, false, false, 45);
        // line 46
        echo "\t\t\t";
        twig_get_attribute($this->env, $this->source, ($context["script"] ?? null), "add", [0 => "/node_modules/featherlight/release/featherlight.min.js"], "method", false, false, false, 46);
        // line 47
        echo "\t\t\t";
        twig_get_attribute($this->env, $this->source, ($context["script"] ?? null), "add", [0 => "/theme/scripts/featherlight-mouseup-fix.js"], "method", false, false, false, 47);
        // line 48
        echo "\t\t\t";
        twig_get_attribute($this->env, $this->source, ($context["script"] ?? null), "add", [0 => "/node_modules/foxy/src/scripts/Foxy.js"], "method", false, false, false, 48);
        // line 49
        echo "\t\t\t";
        twig_get_attribute($this->env, $this->source, ($context["script"] ?? null), "add", [0 => "/node_modules/foxy/src/scripts/Fennecs.js"], "method", false, false, false, 49);
        // line 50
        echo "
\t\t\t";
        // line 51
        if (call_user_func_array($this->env->getTest('enabled')->getCallable(), ["HOVER_CART"])) {
            // line 52
            echo "\t\t\t\t";
            twig_get_attribute($this->env, $this->source, ($context["script"] ?? null), "add", [0 => "/theme/scripts/hover-cart.js"], "method", false, false, false, 52);
            // line 53
            echo "\t\t\t";
        }
        // line 54
        echo "
\t\t\t";
        // line 55
        twig_get_attribute($this->env, $this->source, ($context["script"] ?? null), "add", [0 => "/theme/scripts/script.js"], "method", false, false, false, 55);
        // line 56
        echo "
\t\t\t";
        // line 57
        if ((twig_constant("GOOGLE_MAPS_API") != "")) {
            // line 58
            echo "\t\t\t\t";
            $context["scriptUrl"] = ("https://maps.googleapis.com/maps/api/js?key=" . twig_constant("GOOGLE_MAPS_API"));
            // line 59
            echo "
\t\t\t\t";
            // line 60
            if (call_user_func_array($this->env->getTest('enabled')->getCallable(), ["SHIPPING"])) {
                // line 61
                echo "\t\t\t\t\t";
                // line 62
                echo "\t\t\t\t\t<script type='text/javascript' src='/theme/scripts/auto-address.js'></script>
\t\t\t\t\t";
                // line 63
                $context["scriptUrl"] = (($context["scriptUrl"] ?? null) . "&libraries=places&callback=initAutocomplete");
                // line 64
                echo "\t\t\t\t";
            }
            // line 65
            echo "
\t\t\t\t<script type=\"text/javascript\" src=\"";
            // line 66
            echo twig_escape_filter($this->env, ($context["scriptUrl"] ?? null), "html", null, true);
            echo "\"></script>
\t\t\t";
        }
        // line 68
        echo "
\t\t\t";
        // line 69
        if ((twig_get_attribute($this->env, $this->source, ($context["config"] ?? null), "analyticsId", [], "any", false, false, false, 69) != "")) {
            // line 70
            echo "\t\t\t\t";
            $this->loadTemplate("template/sections/google-analytics.twig", "template/complete-template.twig", 70)->display($context);
            // line 71
            echo "\t\t\t";
        }
        // line 72
        echo "
\t\t\t";
        // line 73
        if ((twig_get_attribute($this->env, $this->source, ($context["config"] ?? null), "tagManagerId", [], "any", false, false, false, 73) != "")) {
            // line 74
            echo "\t\t\t\t";
            $this->loadTemplate("template/sections/google-tag-manager.twig", "template/complete-template.twig", 74)->display($context);
            // line 75
            echo "\t\t\t";
        }
        // line 76
        echo "
\t\t\t";
        // line 77
        if (((twig_get_attribute($this->env, $this->source, ($context["config"] ?? null), "recaptchaSiteKey", [], "any", false, false, false, 77) != "") && (twig_get_attribute($this->env, $this->source, ($context["config"] ?? null), "recaptchaSecret", [], "any", false, false, false, 77) != ""))) {
            // line 78
            echo "\t\t\t\t<script src=\"https://www.google.com/recaptcha/api.js\" async defer></script>
\t\t\t";
        }
        // line 80
        echo "\t\t";
    }

    // line 113
    public function block_content_banner($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 114
        echo "\t\t\t\t";
        $this->loadTemplate("template/sections/top-banner.twig", "template/complete-template.twig", 114)->display($context);
        // line 115
        echo "\t\t\t";
    }

    // line 116
    public function block_content_wrapper($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 117
        echo "\t\t\t\t<section class=\"content-wrapper\">
\t\t\t\t\t<div class=\"container content\">
\t\t\t\t\t\t";
        // line 119
        $this->displayBlock('notifications', $context, $blocks);
        // line 126
        echo "\t\t\t\t\t\t";
        $this->displayBlock('content', $context, $blocks);
        // line 127
        echo "\t\t\t\t\t</div><!-- end content -->
\t\t\t\t</section>
\t\t\t\t";
        // line 129
        $this->displayBlock('page_sections', $context, $blocks);
        // line 134
        echo "\t\t\t";
    }

    // line 119
    public function block_notifications($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 120
        echo "\t\t\t\t\t\t\t";
        if ((($context["message"] ?? null) != "")) {
            // line 121
            echo "\t\t\t\t\t\t\t\t<p class=\"message\">
\t\t\t\t\t\t\t\t\t";
            // line 122
            echo ($context["message"] ?? null);
            echo "
\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t";
        }
        // line 125
        echo "\t\t\t\t\t\t";
    }

    // line 126
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 129
    public function block_page_sections($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 130
        echo "\t\t\t\t\t";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "getVisiblePageSections", [], "method", false, false, false, 130));
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
            // line 131
            echo "\t\t\t\t\t\t";
            $this->loadTemplate(twig_get_attribute($this->env, $this->source, $context["section"], "getTemplateLocation", [], "method", false, false, false, 131), "template/complete-template.twig", 131)->display($context);
            // line 132
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
        // line 133
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
        return array (  449 => 133,  435 => 132,  432 => 131,  414 => 130,  410 => 129,  404 => 126,  400 => 125,  394 => 122,  391 => 121,  388 => 120,  384 => 119,  380 => 134,  378 => 129,  374 => 127,  371 => 126,  369 => 119,  365 => 117,  361 => 116,  357 => 115,  354 => 114,  350 => 113,  346 => 80,  342 => 78,  340 => 77,  337 => 76,  334 => 75,  331 => 74,  329 => 73,  326 => 72,  323 => 71,  320 => 70,  318 => 69,  315 => 68,  310 => 66,  307 => 65,  304 => 64,  302 => 63,  299 => 62,  297 => 61,  295 => 60,  292 => 59,  289 => 58,  287 => 57,  284 => 56,  282 => 55,  279 => 54,  276 => 53,  273 => 52,  271 => 51,  268 => 50,  265 => 49,  262 => 48,  259 => 47,  256 => 46,  253 => 45,  250 => 44,  247 => 43,  244 => 42,  241 => 41,  237 => 40,  228 => 31,  226 => 30,  222 => 29,  218 => 20,  212 => 18,  206 => 16,  203 => 15,  199 => 14,  193 => 6,  188 => 5,  184 => 4,  177 => 151,  173 => 149,  164 => 145,  158 => 144,  147 => 135,  144 => 116,  142 => 113,  134 => 107,  131 => 106,  128 => 105,  126 => 103,  125 => 100,  124 => 99,  113 => 90,  108 => 87,  104 => 86,  97 => 81,  94 => 40,  91 => 39,  88 => 38,  85 => 37,  83 => 29,  74 => 22,  72 => 21,  69 => 14,  63 => 12,  61 => 11,  56 => 8,  54 => 4,  49 => 2,  46 => 1,);
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
\t\t\t{% do script.add(\"/node_modules/jquery/dist/jquery.min.js\") %}
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

\t\t\t{% if config.tagManagerId != '' %}
\t\t\t\t{% include 'template/sections/google-tag-manager.twig' %}
\t\t\t{% endif %}

\t\t\t{% if config.recaptchaSiteKey != '' and config.recaptchaSecret != '' %}
\t\t\t\t<script src=\"https://www.google.com/recaptcha/api.js\" async defer></script>
\t\t\t{% endif %}
\t\t{% endblock %}
\t</head>
\t<body>
\t\t<header role=\"banner\">
\t\t\t<section class=\"site-header\">
\t\t\t\t<div class=\"container\">
\t\t\t\t\t<a href=\"{{ homePath }}\">
\t\t\t\t\t\t<img class=\"logo\" src=\"/theme/images/logo.png\" width=\"\" height=\"\" alt=\"{{ config.getSiteName() }}\" />
\t\t\t\t\t</a>
\t\t\t\t\t{#{% include 'template/sections/search-form.twig' %}#}
\t\t\t\t</div>
\t\t\t\t<div class=\"main-navigation-wrapper\">
\t\t\t\t\t<span class=\"open-nav\">
\t\t\t\t\t\t<span class=\"bar top\"></span>
\t\t\t\t\t\t<span class=\"bar middle\"></span>
\t\t\t\t\t\t<span class=\"bar bottom\"></span>
\t\t\t\t\t</span>
\t\t\t\t\t<nav class=\"main-navigation container\">
\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t{% include \"template/sections/navigation.twig\" with {
\t\t\t\t\t\t\t\t\"navItems\": navItems,
\t\t\t\t\t\t\t\t\"currentDepth\": 1,
\t\t\t\t\t\t\t\t\"maxDepth\": 2,
\t\t\t\t\t\t\t\t\"currentNavItem\": currentNavItem
\t\t\t\t\t\t\t} only %}
\t\t\t\t\t\t\t{% include 'template/sections/cart-navigation.twig' %}
\t\t\t\t\t\t\t{% include 'template/sections/account-navigation.twig' %}
\t\t\t\t\t\t</ul>
\t\t\t\t\t</nav>
\t\t\t\t</div>
\t\t\t</section>
\t\t</header><!-- end header -->
\t\t<main>
\t\t\t{% block content_banner %}
\t\t\t\t{% include 'template/sections/top-banner.twig' %}
\t\t\t{% endblock %}
\t\t\t{% block content_wrapper %}
\t\t\t\t<section class=\"content-wrapper\">
\t\t\t\t\t<div class=\"container content\">
\t\t\t\t\t\t{% block notifications %}
\t\t\t\t\t\t\t{% if message != '' %}
\t\t\t\t\t\t\t\t<p class=\"message\">
\t\t\t\t\t\t\t\t\t{{ message|raw }}
\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t{% endblock %}
\t\t\t\t\t\t{% block content %}{% endblock %}
\t\t\t\t\t</div><!-- end content -->
\t\t\t\t</section>
\t\t\t\t{% block page_sections %}
\t\t\t\t\t{% for section in page.getVisiblePageSections() %}
\t\t\t\t\t\t{% include section.getTemplateLocation() %}
\t\t\t\t\t{% endfor %}
\t\t\t\t{% endblock %}
\t\t\t{% endblock %}
\t\t</main>
\t\t<footer role=\"banner\">
\t\t\t<section class=\"site-footer\">
\t\t\t\t<div class=\"container columns\">

\t\t\t\t</div>
\t\t\t</section>
\t\t\t<section class=\"sub-footer\">
\t\t\t\t<div class=\"container\">
\t\t\t\t\t<div class=\"copyright\">&copy; All rights reserved {{ config.getSiteName() }} {{ \"now\"|date(\"Y\") }}</div>
\t\t\t\t\t<div class=\"attribution\"><a href=\"https://www.activatedesign.co.nz/\" target=\"_blank\" {% if not page.isHomepage %} rel=\"nofollow\" {% endif %}>Web Design</a> by Activate</div>
\t\t\t\t</div>
\t\t\t</section>
\t\t</footer>
\t\t{{ script.output()|raw }}
\t\t{# Below is a completely nonsensical fix for a range of bonkers page load display issues in Chrome and Firefox #}
\t\t<script> </script>
\t</body>
</html>
", "template/complete-template.twig", "/home/meatadev/public_html/theme/twig/template/complete-template.twig");
    }
}
