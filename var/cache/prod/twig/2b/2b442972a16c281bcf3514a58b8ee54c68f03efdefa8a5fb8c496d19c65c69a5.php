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

/* dokumenty/searchBar.html.twig */
class __TwigTemplate_2d8d686f0e0b134da1511cd9236d45d9412de732c0308a4a5e065343ab6451dc extends Template
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
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form_search"] ?? null), 'form_start', ["attr" => ["novalidate" => "novalidate", "class" => "pull-right"], "action" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("dokumenty_index")]);
        // line 8
        echo "
    <div class=\"input-group\">
        <div class=\"input-group\">
            ";
        // line 11
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form_search"] ?? null), "query", [], "any", false, false, false, 11), 'widget');
        echo "
            <span class=\"input-group-btn\">
                ";
        // line 13
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form_search"] ?? null), "szukaj", [], "any", false, false, false, 13), 'widget');
        echo "
            </span>
        </div>
        <div class=\"clearfix\"></div>
    </div><!-- /input-group -->

    ";
        // line 19
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form_search"] ?? null), 'rest');
        echo "

";
        // line 21
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form_search"] ?? null), 'form_end');
    }

    public function getTemplateName()
    {
        return "dokumenty/searchBar.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  63 => 21,  58 => 19,  49 => 13,  44 => 11,  39 => 8,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "dokumenty/searchBar.html.twig", "/home/hystou/public_html/agro24/templates/dokumenty/searchBar.html.twig");
    }
}
