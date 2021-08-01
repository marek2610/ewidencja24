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

/* admin/panel/users/users_dodaj.html.twig */
class __TwigTemplate_a4497ec389dd87b84f97ae7ff98e1146c89d29dc67499de315e0db2113db9dff extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "admin/base2.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("admin/base2.html.twig", "admin/panel/users/users_dodaj.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 4
        echo "
\t<div
\t\tclass=\"col-xs-12\">

\t\t<!-- PAGE CONTENT BEGINS -->
\t<div class=\"form-horizontal\">
\t
\t\t";
        // line 11
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form_admin_dodaj_user"] ?? null), 'form_start', ["attr" => ["novalidate" => "novalidate"]]);
        echo "
\t\t<form class=\"\" role=\"form\">
\t\t\t<div class=\"form-group\">
\t\t\t\t<div class=\"col-sm-3 text-right\">
\t\t\t\t\t";
        // line 15
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form_admin_dodaj_user"] ?? null), "username", [], "any", false, false, false, 15), 'label');
        echo "
\t\t\t\t</div>

\t\t\t\t<div class=\"col-sm-4\">
\t\t\t\t\t";
        // line 19
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form_admin_dodaj_user"] ?? null), "username", [], "any", false, false, false, 19), 'widget');
        echo "
\t\t\t\t</div>
\t\t\t</div>

\t\t\t<div class=\"form-group\">\t\t
\t\t\t\t<div class=\"col-sm-3 text-right\">
\t\t\t\t\t";
        // line 25
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form_admin_dodaj_user"] ?? null), "password", [], "any", false, false, false, 25), "first", [], "any", false, false, false, 25), 'label', ["attr" => ["class" => "form-label"]]);
        echo "
\t\t\t\t</div>

\t\t\t\t<div class=\"col-sm-4\">
\t\t\t\t\t";
        // line 29
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form_admin_dodaj_user"] ?? null), "password", [], "any", false, false, false, 29), "first", [], "any", false, false, false, 29), 'widget', ["attr" => ["class" => "form-input"]]);
        echo "
\t\t\t\t</div>
\t\t\t</div>

\t\t\t<div class=\"form-group\">
\t\t\t\t<div class=\"col-sm-3 text-right\">
\t\t\t\t\t";
        // line 35
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form_admin_dodaj_user"] ?? null), "password", [], "any", false, false, false, 35), "second", [], "any", false, false, false, 35), 'label', ["attr" => ["class" => "form-label"]]);
        echo "
\t\t\t\t</div>

\t\t\t\t<div class=\"col-sm-4\">
\t\t\t\t\t";
        // line 39
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form_admin_dodaj_user"] ?? null), "password", [], "any", false, false, false, 39), "second", [], "any", false, false, false, 39), 'widget', ["attr" => ["class" => "form-input"]]);
        echo "
\t\t\t\t</div>
\t\t\t</div>

\t\t\t<div class=\"form-group\">
\t\t\t\t<div class=\"col-sm-3 text-right\">
\t\t\t\t\t";
        // line 45
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form_admin_dodaj_user"] ?? null), "email", [], "any", false, false, false, 45), 'label');
        echo "
\t\t\t\t</div>

\t\t\t\t<div class=\"col-sm-4\">
\t\t\t\t\t";
        // line 49
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form_admin_dodaj_user"] ?? null), "email", [], "any", false, false, false, 49), 'widget');
        echo "
\t\t\t\t</div>
\t\t\t</div>

\t\t\t<div class=\"form-group\">
\t\t\t\t<div class=\"col-sm-3 text-right\">
\t\t\t\t\t";
        // line 55
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form_admin_dodaj_user"] ?? null), "ep", [], "any", false, false, false, 55), 'label');
        echo "
\t\t\t\t</div>

\t\t\t\t<div class=\"col-sm-4\">
\t\t\t\t\t";
        // line 59
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form_admin_dodaj_user"] ?? null), "ep", [], "any", false, false, false, 59), 'widget');
        echo "
\t\t\t\t</div>
\t\t\t</div>

\t\t\t<div class=\"form-group\">
\t\t\t\t<div class=\"col-sm-3 text-right\">
\t\t\t\t\t";
        // line 65
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form_admin_dodaj_user"] ?? null), "imie", [], "any", false, false, false, 65), 'label');
        echo "
\t\t\t\t</div>

\t\t\t\t<div class=\"col-sm-4\">
\t\t\t\t\t";
        // line 69
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form_admin_dodaj_user"] ?? null), "imie", [], "any", false, false, false, 69), 'widget');
        echo "
\t\t\t\t</div>
\t\t\t</div>

\t\t\t<div class=\"form-group\">
\t\t\t\t<div class=\"col-sm-3 text-right\">
\t\t\t\t\t";
        // line 75
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form_admin_dodaj_user"] ?? null), "nazwisko", [], "any", false, false, false, 75), 'label');
        echo "
\t\t\t\t</div>

\t\t\t\t<div class=\"col-sm-4\">
\t\t\t\t\t";
        // line 79
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form_admin_dodaj_user"] ?? null), "nazwisko", [], "any", false, false, false, 79), 'widget');
        echo "
\t\t\t\t</div>
\t\t\t</div>

\t\t\t<div class=\"form-group\">
\t\t\t\t<div class=\"col-sm-3 text-right\">
\t\t\t\t\t";
        // line 85
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form_admin_dodaj_user"] ?? null), "znaksprawy", [], "any", false, false, false, 85), 'label');
        echo "
\t\t\t\t</div>

\t\t\t\t<div class=\"col-sm-4\">
\t\t\t\t\t";
        // line 89
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form_admin_dodaj_user"] ?? null), "znaksprawy", [], "any", false, false, false, 89), 'widget');
        echo "
\t\t\t\t</div>
\t\t\t</div>

\t\t\t";
        // line 94
        echo "
\t\t\t";
        // line 95
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form_admin_dodaj_user"] ?? null), 'rest');
        echo "

\t\t\t<div class=\"clearfix\">
\t\t\t\t";
        // line 98
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form_admin_dodaj_user"] ?? null), "reset", [], "any", false, false, false, 98), 'label');
        echo "
\t\t\t\t";
        // line 99
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form_admin_dodaj_user"] ?? null), "submit", [], "any", false, false, false, 99), 'label');
        echo "
\t\t\t\t
\t\t\t</div>


\t\t</form>
\t\t\t";
        // line 105
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form_admin_dodaj_user"] ?? null), 'form_end');
        echo "
\t\t\t</div>
\t\t<div class=\"hr hr-24\"></div>
\t</div>


";
    }

    public function getTemplateName()
    {
        return "admin/panel/users/users_dodaj.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  214 => 105,  205 => 99,  201 => 98,  195 => 95,  192 => 94,  185 => 89,  178 => 85,  169 => 79,  162 => 75,  153 => 69,  146 => 65,  137 => 59,  130 => 55,  121 => 49,  114 => 45,  105 => 39,  98 => 35,  89 => 29,  82 => 25,  73 => 19,  66 => 15,  59 => 11,  50 => 4,  46 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "admin/panel/users/users_dodaj.html.twig", "/home/hystou/public_html/agro24/templates/admin/panel/users/users_dodaj.html.twig");
    }
}
