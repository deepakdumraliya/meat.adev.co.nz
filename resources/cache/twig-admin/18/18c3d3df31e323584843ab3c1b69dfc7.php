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

/* template.twig */
class __TwigTemplate_d88439ca4d1af8383bd1c849ddde84ff extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'main_content' => [$this, 'block_main_content'],
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en-nz\">
\t<head>
\t\t<title>";
        // line 4
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["config"] ?? null), "siteName", [], "any", false, false, false, 4), "html", null, true);
        echo " - Admin</title>
\t\t<meta http-equiv=\"Content-Type\" content=\"text/html;charset=utf-8\" />
\t\t<meta name=\"viewport\" content=\"width=device-width, initial-scale=1\" />
\t\t<link rel=\"stylesheet\" type=\"text/css\" href=\"/node_modules/featherlight/release/featherlight.min.css\" />
\t\t<link rel=\"stylesheet\" type=\"text/css\" href=\"/node_modules/cropperjs/dist/cropper.min.css\" />
\t\t<link rel=\"stylesheet\" type=\"text/css\" href=\"/admin/theme/style.php?p=style.scss\" />
\t\t<link rel=\"stylesheet\" type=\"text/css\" href=\"https://fonts.googleapis.com/css?family=Open+Sans\" />
\t\t<link rel=\"stylesheet\" type=\"text/css\" href=\"https://fonts.googleapis.com/css?family=Montserrat:400,700\" />
\t\t";
        // line 12
        if ((twig_get_attribute($this->env, $this->source, ($context["config"] ?? null), "favicon", [], "any", false, false, false, 12) != null)) {
            // line 13
            echo "\t\t\t";
            $this->loadTemplate("template/sections/favicon.twig", "template.twig", 13)->display($context);
            // line 14
            echo "\t\t";
        }
        // line 15
        echo "\t\t<script type=\"text/javascript\" src=\"/node_modules/jquery/dist/jquery.min.js\"></script>
\t\t<script type=\"text/javascript\" src=\"/node_modules/featherlight/release/featherlight.min.js\"></script>
\t\t<script type=\"text/javascript\" src=\"/node_modules/blueimp-load-image/js/load-image.all.min.js\"></script>
\t\t<script type=\"text/javascript\" src=\"/node_modules/cropperjs/dist/cropper.min.js\"></script>
\t\t<script type=\"text/javascript\" src=\"/node_modules/pica/dist/pica.min.js\"></script>
\t\t<script type=\"text/javascript\" src=\"/node_modules/smartcrop/smartcrop.js\"></script>
\t\t<script type=\"text/javascript\" src=\"/node_modules/sortablejs/Sortable.min.js\"></script>
\t\t<script type=\"text/javascript\" src=\"/node_modules/tinymce/tinymce.min.js\"></script>
\t\t";
        // line 23
        if (twig_constant("IS_DEV_SITE")) {
            // line 24
            echo "\t\t\t";
            // line 25
            echo "\t\t\t<script type=\"text/javascript\" src=\"/node_modules/vue/dist/vue.js\"></script>
\t\t\t<script type=\"text/javascript\" src=\"/node_modules/vue-router/dist/vue-router.js\"></script>
\t\t";
        } else {
            // line 28
            echo "\t\t\t<script type=\"text/javascript\" src=\"/node_modules/vue/dist/vue.min.js\"></script>
\t\t\t<script type=\"text/javascript\" src=\"/node_modules/vue-router/dist/vue-router.min.js\"></script>
\t\t";
        }
        // line 31
        echo "\t\t<script type=\"text/javascript\" src=\"/node_modules/vuedraggable/dist/vuedraggable.umd.min.js\"></script>
\t\t<script type=\"text/javascript\" src=\"/node_modules/vuejs-datepicker/dist/vuejs-datepicker.min.js\"></script>
\t\t<script type=\"module\" src=\"/admin/theme/scripts/script.js\"></script>
\t</head>
\t<body>
\t\t<div class=\"vue-wrapper js-vue-wrapper\">
\t\t\t<header class=\"header\">
\t\t\t\t<div class=\"container\">
\t\t\t\t\t<img class=\"logo\" src=\"/theme/images/logo.png\" alt=\"";
        // line 39
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["config"] ?? null), "siteName", [], "any", false, false, false, 39), "html", null, true);
        echo "\" />
\t\t\t\t\t";
        // line 40
        if ( !twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "isNull", [], "method", false, false, false, 40)) {
            // line 41
            echo "\t\t\t\t\t\t";
            if (twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "hasAdminAccess", [], "method", false, false, false, 41)) {
                // line 42
                echo "\t\t\t\t\t\t\t<button class=\"menu-button\" @click=\"navOpen = true\">
\t\t\t\t\t\t\t\t";
                // line 43
                echo call_user_func_array($this->env->getFilter('source')->getCallable(), ["/admin/theme/images/icons/menu-open.svg"]);
                echo "
\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t";
            }
            // line 46
            echo "\t\t\t\t\t\t<div class=\"user\">
\t\t\t\t\t\t\t";
            // line 47
            echo call_user_func_array($this->env->getFilter('source')->getCallable(), ["/admin/theme/images/icons/user.svg"]);
            echo " <span class=\"welcome\">Welcome</span> ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "name", [], "any", false, false, false, 47), "html", null, true);
            echo " | <a href=\"/Account/Action/Logout/\">Logout</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t";
        }
        // line 50
        echo "\t\t\t\t</div>
\t\t\t</header>
\t\t\t<nav class=\"navigation\" :class=\"{open: navOpen}\">
\t\t\t\t";
        // line 53
        if (( !twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "isNull", [], "method", false, false, false, 53) && twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "hasAdminAccess", [], "method", false, false, false, 53))) {
            // line 54
            echo "\t\t\t\t\t<span class=\"close-block\" @click=\"navOpen = false\"></span>
\t\t\t\t\t<div class=\"container\">
\t\t\t\t\t\t<header class=\"menu-header\">
\t\t\t\t\t\t\t<button class=\"close-button\" @click=\"navOpen = false\">
\t\t\t\t\t\t\t\t";
            // line 58
            echo call_user_func_array($this->env->getFilter('source')->getCallable(), ["/admin/theme/images/icons/menu-close.svg"]);
            echo "
\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t<div class=\"logo\">
\t\t\t\t\t\t\t\t<img src=\"/theme/images/logo.png\" alt=\"";
            // line 61
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["config"] ?? null), "siteName", [], "any", false, false, false, 61), "html", null, true);
            echo "\" />
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</header>
\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t";
            // line 65
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["adminNavItems"] ?? null));
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
            foreach ($context['_seq'] as $context["_key"] => $context["link"]) {
                // line 66
                echo "\t\t\t\t\t\t\t\t";
                $this->loadTemplate("navigation-link.twig", "template.twig", 66)->display($context);
                // line 67
                echo "\t\t\t\t\t\t\t";
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['link'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 68
            echo "\t\t\t\t\t\t</ul>
\t\t\t\t\t</div>
\t\t\t\t";
        }
        // line 71
        echo "\t\t\t</nav>
\t\t\t<main class=\"main-content\">
\t\t\t\t";
        // line 73
        $this->displayBlock('main_content', $context, $blocks);
        // line 78
        echo "\t\t\t</main>
\t\t</div>
\t\t<footer class=\"footer\">
\t\t\t<div class=\"container\">
\t\t\t\t<div class=\"need-help\">
\t\t\t\t\tNeed help? Visit our <a href=\"https://www.activehost.co.nz/Help-Guides/CMS-Help/\" target=\"_blank\" rel=\"noopener\">Training Portal</a>
\t\t\t\t</div>
\t\t\t\t<div class=\"attribution\">
\t\t\t\t\tPowered by <a href=\"";
        // line 86
        echo twig_escape_filter($this->env, ($context["powerUrl"] ?? null), "html", null, true);
        echo "\" target=\"_blank\" rel=\"nofollow noopener\">";
        echo twig_escape_filter($this->env, ($context["powerSource"] ?? null), "html", null, true);
        echo "</a>
\t\t\t\t</div>
\t\t\t</div>
\t\t</footer>
\t</body>
</html>";
    }

    // line 73
    public function block_main_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 74
        echo "\t\t\t\t\t<div class=\"container\">
\t\t\t\t\t\t";
        // line 75
        $this->displayBlock('content', $context, $blocks);
        // line 76
        echo "\t\t\t\t\t</div>
\t\t\t\t";
    }

    // line 75
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    public function getTemplateName()
    {
        return "template.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  233 => 75,  228 => 76,  226 => 75,  223 => 74,  219 => 73,  207 => 86,  197 => 78,  195 => 73,  191 => 71,  186 => 68,  172 => 67,  169 => 66,  152 => 65,  145 => 61,  139 => 58,  133 => 54,  131 => 53,  126 => 50,  118 => 47,  115 => 46,  109 => 43,  106 => 42,  103 => 41,  101 => 40,  97 => 39,  87 => 31,  82 => 28,  77 => 25,  75 => 24,  73 => 23,  63 => 15,  60 => 14,  57 => 13,  55 => 12,  44 => 4,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html lang=\"en-nz\">
\t<head>
\t\t<title>{{ config.siteName }} - Admin</title>
\t\t<meta http-equiv=\"Content-Type\" content=\"text/html;charset=utf-8\" />
\t\t<meta name=\"viewport\" content=\"width=device-width, initial-scale=1\" />
\t\t<link rel=\"stylesheet\" type=\"text/css\" href=\"/node_modules/featherlight/release/featherlight.min.css\" />
\t\t<link rel=\"stylesheet\" type=\"text/css\" href=\"/node_modules/cropperjs/dist/cropper.min.css\" />
\t\t<link rel=\"stylesheet\" type=\"text/css\" href=\"/admin/theme/style.php?p=style.scss\" />
\t\t<link rel=\"stylesheet\" type=\"text/css\" href=\"https://fonts.googleapis.com/css?family=Open+Sans\" />
\t\t<link rel=\"stylesheet\" type=\"text/css\" href=\"https://fonts.googleapis.com/css?family=Montserrat:400,700\" />
\t\t{% if config.favicon != null %}
\t\t\t{% include \"template/sections/favicon.twig\" %}
\t\t{% endif %}
\t\t<script type=\"text/javascript\" src=\"/node_modules/jquery/dist/jquery.min.js\"></script>
\t\t<script type=\"text/javascript\" src=\"/node_modules/featherlight/release/featherlight.min.js\"></script>
\t\t<script type=\"text/javascript\" src=\"/node_modules/blueimp-load-image/js/load-image.all.min.js\"></script>
\t\t<script type=\"text/javascript\" src=\"/node_modules/cropperjs/dist/cropper.min.js\"></script>
\t\t<script type=\"text/javascript\" src=\"/node_modules/pica/dist/pica.min.js\"></script>
\t\t<script type=\"text/javascript\" src=\"/node_modules/smartcrop/smartcrop.js\"></script>
\t\t<script type=\"text/javascript\" src=\"/node_modules/sortablejs/Sortable.min.js\"></script>
\t\t<script type=\"text/javascript\" src=\"/node_modules/tinymce/tinymce.min.js\"></script>
\t\t{% if constant(\"IS_DEV_SITE\") %}
\t\t\t{# Vue debugging is only included with the non-minified Vue files #}
\t\t\t<script type=\"text/javascript\" src=\"/node_modules/vue/dist/vue.js\"></script>
\t\t\t<script type=\"text/javascript\" src=\"/node_modules/vue-router/dist/vue-router.js\"></script>
\t\t{% else %}
\t\t\t<script type=\"text/javascript\" src=\"/node_modules/vue/dist/vue.min.js\"></script>
\t\t\t<script type=\"text/javascript\" src=\"/node_modules/vue-router/dist/vue-router.min.js\"></script>
\t\t{% endif %}
\t\t<script type=\"text/javascript\" src=\"/node_modules/vuedraggable/dist/vuedraggable.umd.min.js\"></script>
\t\t<script type=\"text/javascript\" src=\"/node_modules/vuejs-datepicker/dist/vuejs-datepicker.min.js\"></script>
\t\t<script type=\"module\" src=\"/admin/theme/scripts/script.js\"></script>
\t</head>
\t<body>
\t\t<div class=\"vue-wrapper js-vue-wrapper\">
\t\t\t<header class=\"header\">
\t\t\t\t<div class=\"container\">
\t\t\t\t\t<img class=\"logo\" src=\"/theme/images/logo.png\" alt=\"{{ config.siteName }}\" />
\t\t\t\t\t{% if not user.isNull() %}
\t\t\t\t\t\t{% if user.hasAdminAccess() %}
\t\t\t\t\t\t\t<button class=\"menu-button\" @click=\"navOpen = true\">
\t\t\t\t\t\t\t\t{{ \"/admin/theme/images/icons/menu-open.svg\"|source }}
\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t<div class=\"user\">
\t\t\t\t\t\t\t{{ \"/admin/theme/images/icons/user.svg\"|source }} <span class=\"welcome\">Welcome</span> {{ user.name }} | <a href=\"/Account/Action/Logout/\">Logout</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t{% endif %}
\t\t\t\t</div>
\t\t\t</header>
\t\t\t<nav class=\"navigation\" :class=\"{open: navOpen}\">
\t\t\t\t{% if not user.isNull() and user.hasAdminAccess() %}
\t\t\t\t\t<span class=\"close-block\" @click=\"navOpen = false\"></span>
\t\t\t\t\t<div class=\"container\">
\t\t\t\t\t\t<header class=\"menu-header\">
\t\t\t\t\t\t\t<button class=\"close-button\" @click=\"navOpen = false\">
\t\t\t\t\t\t\t\t{{ \"/admin/theme/images/icons/menu-close.svg\"|source }}
\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t<div class=\"logo\">
\t\t\t\t\t\t\t\t<img src=\"/theme/images/logo.png\" alt=\"{{ config.siteName }}\" />
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</header>
\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t{% for link in adminNavItems %}
\t\t\t\t\t\t\t\t{% include \"navigation-link.twig\" %}
\t\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t\t</ul>
\t\t\t\t\t</div>
\t\t\t\t{% endif %}
\t\t\t</nav>
\t\t\t<main class=\"main-content\">
\t\t\t\t{% block main_content %}
\t\t\t\t\t<div class=\"container\">
\t\t\t\t\t\t{% block content %}{% endblock %}
\t\t\t\t\t</div>
\t\t\t\t{% endblock %}
\t\t\t</main>
\t\t</div>
\t\t<footer class=\"footer\">
\t\t\t<div class=\"container\">
\t\t\t\t<div class=\"need-help\">
\t\t\t\t\tNeed help? Visit our <a href=\"https://www.activehost.co.nz/Help-Guides/CMS-Help/\" target=\"_blank\" rel=\"noopener\">Training Portal</a>
\t\t\t\t</div>
\t\t\t\t<div class=\"attribution\">
\t\t\t\t\tPowered by <a href=\"{{ powerUrl }}\" target=\"_blank\" rel=\"nofollow noopener\">{{ powerSource }}</a>
\t\t\t\t</div>
\t\t\t</div>
\t\t</footer>
\t</body>
</html>", "template.twig", "/home/meatadev/public_html/admin/theme/twig/template.twig");
    }
}
