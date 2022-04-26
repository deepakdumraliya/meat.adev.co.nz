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

/* under-construction-page.twig */
class __TwigTemplate_165e2b68a247c27b2f0881425fbf8468 extends Template
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
        echo "<html>
\t<head>
\t\t<title>";
        // line 3
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["config"] ?? null), "getSiteName", [], "method", false, false, false, 3), "html", null, true);
        echo "</title>
\t</head>
\t<body style=\"text-align: center;\">
\t\t<h1>
\t\t\tThe ";
        // line 7
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["config"] ?? null), "getSiteName", [], "method", false, false, false, 7), "html", null, true);
        echo " website is under construction
\t\t</h1>
\t\t<p>
\t\t\tPlease check back soon
\t\t</p>
\t</body>
</html>";
    }

    public function getTemplateName()
    {
        return "under-construction-page.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  48 => 7,  41 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<html>
\t<head>
\t\t<title>{{ config.getSiteName() }}</title>
\t</head>
\t<body style=\"text-align: center;\">
\t\t<h1>
\t\t\tThe {{ config.getSiteName() }} website is under construction
\t\t</h1>
\t\t<p>
\t\t\tPlease check back soon
\t\t</p>
\t</body>
</html>", "under-construction-page.twig", "/home/meatadev/public_html/theme/twig/under-construction-page.twig");
    }
}
