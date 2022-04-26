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

/* navigation-link.twig */
class __TwigTemplate_1af165f244cfc7ebe5c56dd4f6617cec extends Template
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
        if (twig_get_attribute($this->env, $this->source, ($context["link"] ?? null), "display", [], "any", false, false, false, 1)) {
            // line 2
            echo "\t";
            if ((twig_get_attribute($this->env, $this->source, ($context["link"] ?? null), "isVue", [], "method", false, false, false, 2) && ($context["templateUsesVueRouter"] ?? null))) {
                // line 3
                echo "\t\t<router-link to=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["link"] ?? null), "link", [], "any", false, false, false, 3), "html", null, true);
                echo "\" custom v-slot=\"{ href, navigate }\">
\t\t\t<li :class=\"{'router-link-active': activeItem(";
                // line 4
                echo twig_escape_filter($this->env, json_encode(twig_get_attribute($this->env, $this->source, ($context["link"] ?? null), "getPaths", [], "method", false, false, false, 4)), "html", null, true);
                echo ", ";
                echo twig_escape_filter($this->env, json_encode(twig_get_attribute($this->env, $this->source, ($context["link"] ?? null), "getAllIdentifiers", [], "method", false, false, false, 4)), "html", null, true);
                echo "), open: openSubnav === ";
                echo twig_escape_filter($this->env, json_encode(twig_get_attribute($this->env, $this->source, ($context["link"] ?? null), "link", [], "any", false, false, false, 4)), "html", null, true);
                echo "}\">
\t\t\t\t<a :href=\"href\" @click=\"navigate\">";
                // line 5
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["link"] ?? null), "label", [], "any", false, false, false, 5), "html", null, true);
                echo "</a>
\t\t\t\t";
                // line 6
                if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["link"] ?? null), "subitems", [], "any", false, false, false, 6)) > 0)) {
                    // line 7
                    echo "\t\t\t\t\t<button class=\"open-subnav\" @click=\"toggleSubnav(";
                    echo twig_escape_filter($this->env, json_encode(twig_get_attribute($this->env, $this->source, ($context["link"] ?? null), "link", [], "any", false, false, false, 7)), "html", null, true);
                    echo ")\">
\t\t\t\t\t\t";
                    // line 8
                    echo call_user_func_array($this->env->getFilter('source')->getCallable(), ["/admin/theme/images/icons/submenu-open.svg"]);
                    echo "
\t\t\t\t\t</button>
\t\t\t\t\t<ul>
\t\t\t\t\t\t";
                    // line 11
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["link"], "subitems", [], "any", false, false, false, 11));
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
                        // line 12
                        echo "\t\t\t\t\t\t\t";
                        $this->loadTemplate("navigation-link.twig", "navigation-link.twig", 12)->display($context);
                        // line 13
                        echo "\t\t\t\t\t\t";
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
                    // line 14
                    echo "\t\t\t\t\t</ul>
\t\t\t\t";
                }
                // line 16
                echo "\t\t\t</li>
\t\t</router-link>
\t";
            } else {
                // line 19
                echo "\t\t<li class=\"";
                echo ((twig_get_attribute($this->env, $this->source, ($context["link"] ?? null), "isCurrent", [0 => twig_get_attribute($this->env, $this->source, ($context["controller"] ?? null), "current", [], "any", false, false, false, 19)], "method", false, false, false, 19)) ? ("active") : (""));
                echo "\" :class=\"{open: openSubnav === ";
                echo twig_escape_filter($this->env, json_encode(twig_get_attribute($this->env, $this->source, ($context["link"] ?? null), "link", [], "any", false, false, false, 19)), "html", null, true);
                echo "}\">
\t\t\t<a href=\"";
                // line 20
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["link"] ?? null), "link", [], "any", false, false, false, 20), "html", null, true);
                echo "\" ";
                if (twig_get_attribute($this->env, $this->source, ($context["link"] ?? null), "newWindow", [], "any", false, false, false, 20)) {
                    echo " target=\"_blank\" ";
                }
                echo ">
\t\t\t\t";
                // line 21
                if (twig_get_attribute($this->env, $this->source, ($context["link"] ?? null), "isParent", [], "method", false, false, false, 21)) {
                    // line 22
                    echo "\t\t\t\t\t<span class=\"open-sub\"></span>
\t\t\t\t";
                }
                // line 24
                echo "\t\t\t\t";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["link"] ?? null), "label", [], "any", false, false, false, 24), "html", null, true);
                echo "
\t\t\t</a>
\t\t\t";
                // line 26
                if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["link"] ?? null), "subtiems", [], "any", false, false, false, 26)) > 0)) {
                    // line 27
                    echo "\t\t\t\t<button class=\"open-subnav\" @click=\"toggleSubnav(";
                    echo twig_escape_filter($this->env, json_encode(twig_get_attribute($this->env, $this->source, ($context["link"] ?? null), "link", [], "any", false, false, false, 27)), "html", null, true);
                    echo ")\">
\t\t\t\t\t";
                    // line 28
                    echo call_user_func_array($this->env->getFilter('source')->getCallable(), ["/admin/theme/images/icons/submenu-open.svg"]);
                    echo "
\t\t\t\t</button>
\t\t\t\t<ul>
\t\t\t\t\t";
                    // line 31
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["link"], "subitems", [], "any", false, false, false, 31));
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
                        // line 32
                        echo "\t\t\t\t\t\t";
                        $this->loadTemplate("navigation-link.twig", "navigation-link.twig", 32)->display($context);
                        // line 33
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
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['link'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 34
                    echo "\t\t\t\t</ul>
\t\t\t";
                }
                // line 36
                echo "\t\t</li>
\t";
            }
        }
    }

    public function getTemplateName()
    {
        return "navigation-link.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  193 => 36,  189 => 34,  175 => 33,  172 => 32,  155 => 31,  149 => 28,  144 => 27,  142 => 26,  136 => 24,  132 => 22,  130 => 21,  122 => 20,  115 => 19,  110 => 16,  106 => 14,  92 => 13,  89 => 12,  72 => 11,  66 => 8,  61 => 7,  59 => 6,  55 => 5,  47 => 4,  42 => 3,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% if link.display %}
\t{% if link.isVue() and templateUsesVueRouter %}
\t\t<router-link to=\"{{ link.link }}\" custom v-slot=\"{ href, navigate }\">
\t\t\t<li :class=\"{'router-link-active': activeItem({{ link.getPaths()|json_encode }}, {{ link.getAllIdentifiers()|json_encode }}), open: openSubnav === {{ link.link|json_encode }}}\">
\t\t\t\t<a :href=\"href\" @click=\"navigate\">{{ link.label }}</a>
\t\t\t\t{% if link.subitems|length > 0 %}
\t\t\t\t\t<button class=\"open-subnav\" @click=\"toggleSubnav({{ link.link|json_encode }})\">
\t\t\t\t\t\t{{ \"/admin/theme/images/icons/submenu-open.svg\"|source }}
\t\t\t\t\t</button>
\t\t\t\t\t<ul>
\t\t\t\t\t\t{% for link in link.subitems %}
\t\t\t\t\t\t\t{% include \"navigation-link.twig\" %}
\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t</ul>
\t\t\t\t{% endif %}
\t\t\t</li>
\t\t</router-link>
\t{% else %}
\t\t<li class=\"{{ link.isCurrent(controller.current) ? \"active\" : \"\" }}\" :class=\"{open: openSubnav === {{ link.link|json_encode }}}\">
\t\t\t<a href=\"{{ link.link }}\" {% if link.newWindow %} target=\"_blank\" {% endif %}>
\t\t\t\t{% if link.isParent() %}
\t\t\t\t\t<span class=\"open-sub\"></span>
\t\t\t\t{% endif %}
\t\t\t\t{{ link.label }}
\t\t\t</a>
\t\t\t{% if link.subtiems|length > 0 %}
\t\t\t\t<button class=\"open-subnav\" @click=\"toggleSubnav({{ link.link|json_encode }})\">
\t\t\t\t\t{{ \"/admin/theme/images/icons/submenu-open.svg\"|source }}
\t\t\t\t</button>
\t\t\t\t<ul>
\t\t\t\t\t{% for link in link.subitems %}
\t\t\t\t\t\t{% include \"navigation-link.twig\" %}
\t\t\t\t\t{% endfor %}
\t\t\t\t</ul>
\t\t\t{% endif %}
\t\t</li>
\t{% endif %}
{% endif %}", "navigation-link.twig", "/home/meatadev/public_html/admin/theme/twig/navigation-link.twig");
    }
}
