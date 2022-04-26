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

/* forms/captcha.twig */
class __TwigTemplate_ceb4013566e9ea7f5363200f7c3f56ff extends Template
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
        $context["default"] = ('' === $tmp = "\t<p class=\"security-wrapper\">
\t\t<label>
\t\t\tSecurity: <img src=\"/resources/captcha/CaptchaSecurityImages.php\" alt=\"Security Code\" />
\t\t\t<input name=\"auth\" type=\"text\" />
\t\t</label>
\t</p>
") ? '' : new Markup($tmp, $this->env->getCharset());
        // line 9
        echo "
";
        // line 10
        if (((twig_get_attribute($this->env, $this->source, ($context["config"] ?? null), "recaptchaSiteKey", [], "any", false, false, false, 10) != "") && (twig_get_attribute($this->env, $this->source, ($context["config"] ?? null), "recaptchaSecret", [], "any", false, false, false, 10) != ""))) {
            // line 11
            echo "\t<div class=\"g-recaptcha\" data-sitekey=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["config"] ?? null), "recaptchaSiteKey", [], "any", false, false, false, 11), "html", null, true);
            echo "\"></div>

\t<noscript>
\t\t";
            // line 14
            echo twig_escape_filter($this->env, ($context["default"] ?? null), "html", null, true);
            echo "
\t</noscript>
";
        } else {
            // line 17
            echo "\t";
            echo twig_escape_filter($this->env, ($context["default"] ?? null), "html", null, true);
            echo "
";
        }
    }

    public function getTemplateName()
    {
        return "forms/captcha.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  63 => 17,  57 => 14,  50 => 11,  48 => 10,  45 => 9,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% set default %}
\t<p class=\"security-wrapper\">
\t\t<label>
\t\t\tSecurity: <img src=\"/resources/captcha/CaptchaSecurityImages.php\" alt=\"Security Code\" />
\t\t\t<input name=\"auth\" type=\"text\" />
\t\t</label>
\t</p>
{% endset %}

{% if config.recaptchaSiteKey != '' and config.recaptchaSecret != '' %}
\t<div class=\"g-recaptcha\" data-sitekey=\"{{ config.recaptchaSiteKey }}\"></div>

\t<noscript>
\t\t{{ default }}
\t</noscript>
{% else %}
\t{{ default }}
{% endif %}", "forms/captcha.twig", "/home/meatadev/public_html/theme/twig/forms/captcha.twig");
    }
}
