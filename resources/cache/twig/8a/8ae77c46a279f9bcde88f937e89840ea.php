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

/* template/sections/search-form.twig */
class __TwigTemplate_6d9344e173916957e8c173b4f6fd09ce extends Template
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
        echo "<form class=\"search-form\" action=\"/search/\" method=\"GET\" enctype=\"multipart/form-data\">
<label class=\"js-open-search search-icon phone\" for=\"search\">

\t<i class=\"fa-solid fa-magnifying-glass\"></i>Search</label>

\t";
        // line 9
        echo "</form>";
    }

    public function getTemplateName()
    {
        return "template/sections/search-form.twig";
    }

    public function getDebugInfo()
    {
        return array (  44 => 9,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<form class=\"search-form\" action=\"/search/\" method=\"GET\" enctype=\"multipart/form-data\">
<label class=\"js-open-search search-icon phone\" for=\"search\">

\t<i class=\"fa-solid fa-magnifying-glass\"></i>Search</label>

\t{# <div class=\"field js-search\">
\t\t<input name=\"search\" id=\"search\" type=\"text\" value=\"\" placeholder=\"Search\" />
\t</div> #}
</form>", "template/sections/search-form.twig", "/home/meatadev/public_html/theme/twig/template/sections/search-form.twig");
    }
}
