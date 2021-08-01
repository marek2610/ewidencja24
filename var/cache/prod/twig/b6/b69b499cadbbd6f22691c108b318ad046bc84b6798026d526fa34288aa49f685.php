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

/* @Twig/Exception/error404.html.twig */
class __TwigTemplate_de4cad7779554715bca591d32c7cecfcd60a0f5bba2f6e5d0f08ae055a07c327 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("base.html.twig", "@Twig/Exception/error404.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 4
        echo "  ...::: Strona nie istnieje :::...
";
    }

    // line 7
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 8
        echo "  

<div class=\"\">
\t<div class=\"row\">
\t\t<div class=\"col-12 text-center\">
      <img src=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/logo_zestawienie.png"), "html", null, true);
        echo "\" alt=\"\">
\t\t\t<h1>
\t\t\t\tKod błędu:
\t\t\t\t";
        // line 16
        echo twig_escape_filter($this->env, ($context["status_code"] ?? null), "html", null, true);
        echo "
\t\t\t</h1>
\t\t\t<h2>
\t\t\t\tWiadomość błędu:
\t\t\t\t";
        // line 20
        echo twig_escape_filter($this->env, ($context["status_text"] ?? null), "html", null, true);
        echo "
\t\t\t</h2>
\t\t\t<h3>
\t\t\t\tKomunikat błędu:
\t\t\t\t";
        // line 24
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["exception"] ?? null), "message", [], "any", false, false, false, 24), "html", null, true);
        echo "
\t\t\t</h3>
\t\t</div>
\t</div>
</div>

";
    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error404.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  87 => 24,  80 => 20,  73 => 16,  67 => 13,  60 => 8,  56 => 7,  51 => 4,  47 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@Twig/Exception/error404.html.twig", "/home/hystou/public_html/agro24/templates/bundles/TwigBundle/Exception/error404.html.twig");
    }
}
