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

/* account/sections/base-page.twig */
class __TwigTemplate_76f9a14166880113f02e4bc1835bd3c7 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'content_banner' => [$this, 'block_content_banner'],
            'notifications' => [$this, 'block_notifications'],
            'content' => [$this, 'block_content'],
            'native_sidebar' => [$this, 'block_native_sidebar'],
            'account_main' => [$this, 'block_account_main'],
            'account_heading_block' => [$this, 'block_account_heading_block'],
            'account_heading' => [$this, 'block_account_heading'],
            'account_content' => [$this, 'block_account_content'],
            'account_action' => [$this, 'block_account_action'],
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
        $this->parent = $this->loadTemplate("pages/page.twig", "account/sections/base-page.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_content_banner($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 4
    public function block_notifications($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 6
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 7
        echo "\t<div class=\"native\">
\t\t<div class=\"native-sections\">
\t\t\t";
        // line 9
        if ((($context["cartEnabled"] ?? null) || ($context["paymentsEnabled"] ?? null))) {
            // line 10
            echo "\t\t\t\t<section class=\"native-sidebar\">
\t\t\t\t\t<article class=\"sidebar-section\">
\t\t\t\t\t\t";
            // line 12
            $this->displayBlock('native_sidebar', $context, $blocks);
            // line 40
            echo "\t\t\t\t\t</article>
\t\t\t\t</section>
\t\t\t";
        }
        // line 43
        echo "\t\t\t<div class=\"native-main\">
\t\t\t\t";
        // line 44
        $this->displayBlock('account_main', $context, $blocks);
        // line 61
        echo "\t\t\t\t";
        $this->displayBlock('account_action', $context, $blocks);
        // line 62
        echo "\t\t\t</div>
\t\t</div>
\t</div>
";
    }

    // line 12
    public function block_native_sidebar($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 13
        echo "\t\t\t\t\t\t\t<h1>
\t\t\t\t\t\t\t\tMy Account
\t\t\t\t\t\t\t</h1>
\t\t\t\t\t\t\t<nav class=\"account-navigation\">
\t\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t<a href=\"/account/\">Account Details</a>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t";
        // line 21
        if (($context["cartEnabled"] ?? null)) {
            // line 22
            echo "\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t<a href=\"/account/address/\">My Address</a>
\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t<a href=\"/account/orders/\">My Orders</a>
\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t";
        }
        // line 29
        echo "\t\t\t\t\t\t\t\t\t";
        if (($context["paymentsEnabled"] ?? null)) {
            // line 30
            echo "\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t<a href=\"/account/payments/\">My Payments</a>
\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t";
        }
        // line 34
        echo "\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t<a href=\"/account/action/logout/\">Logout</a>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t</nav>
\t\t\t\t\t\t";
    }

    // line 44
    public function block_account_main($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 45
        echo "\t\t\t\t\t<div class=\"main-section\">
\t\t\t\t\t\t";
        // line 46
        $this->displayBlock('account_heading_block', $context, $blocks);
        // line 51
        echo "\t\t\t\t\t\t";
        if (($context["message"] ?? null)) {
            // line 52
            echo "\t\t\t\t\t\t\t<p class=\"message\">
\t\t\t\t\t\t\t\t";
            // line 53
            echo ($context["message"] ?? null);
            echo "
\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t";
        }
        // line 56
        echo "\t\t\t\t\t\t<div class=\"native-content\">
\t\t\t\t\t\t\t";
        // line 57
        $this->displayBlock('account_content', $context, $blocks);
        // line 58
        echo "\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t";
    }

    // line 46
    public function block_account_heading_block($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 47
        echo "\t\t\t\t\t\t\t<h1 class=\"native-heading\">
\t\t\t\t\t\t\t\t";
        // line 48
        $this->displayBlock('account_heading', $context, $blocks);
        // line 49
        echo "\t\t\t\t\t\t\t</h1>
\t\t\t\t\t\t";
    }

    // line 48
    public function block_account_heading($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 57
    public function block_account_content($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 61
    public function block_account_action($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    public function getTemplateName()
    {
        return "account/sections/base-page.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  203 => 61,  197 => 57,  191 => 48,  186 => 49,  184 => 48,  181 => 47,  177 => 46,  171 => 58,  169 => 57,  166 => 56,  160 => 53,  157 => 52,  154 => 51,  152 => 46,  149 => 45,  145 => 44,  136 => 34,  130 => 30,  127 => 29,  118 => 22,  116 => 21,  106 => 13,  102 => 12,  95 => 62,  92 => 61,  90 => 44,  87 => 43,  82 => 40,  80 => 12,  76 => 10,  74 => 9,  70 => 7,  66 => 6,  60 => 4,  54 => 3,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'pages/page.twig' %}

{% block content_banner %}{# none #}{% endblock %}
{% block notifications %}{# message output in content #}{% endblock %}

{% block content %}
\t<div class=\"native\">
\t\t<div class=\"native-sections\">
\t\t\t{% if cartEnabled or paymentsEnabled %}
\t\t\t\t<section class=\"native-sidebar\">
\t\t\t\t\t<article class=\"sidebar-section\">
\t\t\t\t\t\t{% block native_sidebar %}
\t\t\t\t\t\t\t<h1>
\t\t\t\t\t\t\t\tMy Account
\t\t\t\t\t\t\t</h1>
\t\t\t\t\t\t\t<nav class=\"account-navigation\">
\t\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t<a href=\"/account/\">Account Details</a>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t{% if cartEnabled %}
\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t<a href=\"/account/address/\">My Address</a>
\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t<a href=\"/account/orders/\">My Orders</a>
\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t\t\t{% if paymentsEnabled %}
\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t<a href=\"/account/payments/\">My Payments</a>
\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t<a href=\"/account/action/logout/\">Logout</a>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t</nav>
\t\t\t\t\t\t{% endblock %}
\t\t\t\t\t</article>
\t\t\t\t</section>
\t\t\t{% endif %}
\t\t\t<div class=\"native-main\">
\t\t\t\t{% block account_main %}
\t\t\t\t\t<div class=\"main-section\">
\t\t\t\t\t\t{% block account_heading_block %}
\t\t\t\t\t\t\t<h1 class=\"native-heading\">
\t\t\t\t\t\t\t\t{% block account_heading %}{% endblock %}
\t\t\t\t\t\t\t</h1>
\t\t\t\t\t\t{% endblock %}
\t\t\t\t\t\t{% if message %}
\t\t\t\t\t\t\t<p class=\"message\">
\t\t\t\t\t\t\t\t{{ message|raw }}
\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t<div class=\"native-content\">
\t\t\t\t\t\t\t{% block account_content %}{% endblock %}
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t{% endblock %}
\t\t\t\t{% block account_action %}{% endblock %}
\t\t\t</div>
\t\t</div>
\t</div>
{% endblock %}
", "account/sections/base-page.twig", "/home/meatadev/public_html/theme/twig/account/sections/base-page.twig");
    }
}
