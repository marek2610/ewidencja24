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
class __TwigTemplate_be275184598f8209b58c6831596d72b4dfabf7d1d02ba3335ee887ed2c322cfd extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/panel/users/users_dodaj.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/panel/users/users_dodaj.html.twig"));

        $this->parent = $this->loadTemplate("admin/base2.html.twig", "admin/panel/users/users_dodaj.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "
\t<div
\t\tclass=\"col-xs-12\">

\t\t<!-- PAGE CONTENT BEGINS -->
\t<div class=\"form-horizontal\">
\t
\t\t";
        // line 11
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form_admin_dodaj_user"]) || array_key_exists("form_admin_dodaj_user", $context) ? $context["form_admin_dodaj_user"] : (function () { throw new RuntimeError('Variable "form_admin_dodaj_user" does not exist.', 11, $this->source); })()), 'form_start', ["attr" => ["novalidate" => "novalidate"]]);
        echo "
\t\t<form class=\"\" role=\"form\">
\t\t\t<div class=\"form-group\">
\t\t\t\t<div class=\"col-sm-3 text-right\">
\t\t\t\t\t";
        // line 15
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form_admin_dodaj_user"]) || array_key_exists("form_admin_dodaj_user", $context) ? $context["form_admin_dodaj_user"] : (function () { throw new RuntimeError('Variable "form_admin_dodaj_user" does not exist.', 15, $this->source); })()), "username", [], "any", false, false, false, 15), 'label');
        echo "
\t\t\t\t</div>

\t\t\t\t<div class=\"col-sm-4\">
\t\t\t\t\t";
        // line 19
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form_admin_dodaj_user"]) || array_key_exists("form_admin_dodaj_user", $context) ? $context["form_admin_dodaj_user"] : (function () { throw new RuntimeError('Variable "form_admin_dodaj_user" does not exist.', 19, $this->source); })()), "username", [], "any", false, false, false, 19), 'widget');
        echo "
\t\t\t\t</div>
\t\t\t</div>

\t\t\t<div class=\"form-group\">\t\t
\t\t\t\t<div class=\"col-sm-3 text-right\">
\t\t\t\t\t";
        // line 25
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form_admin_dodaj_user"]) || array_key_exists("form_admin_dodaj_user", $context) ? $context["form_admin_dodaj_user"] : (function () { throw new RuntimeError('Variable "form_admin_dodaj_user" does not exist.', 25, $this->source); })()), "password", [], "any", false, false, false, 25), "first", [], "any", false, false, false, 25), 'label', ["attr" => ["class" => "form-label"]]);
        echo "
\t\t\t\t</div>

\t\t\t\t<div class=\"col-sm-4\">
\t\t\t\t\t";
        // line 29
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form_admin_dodaj_user"]) || array_key_exists("form_admin_dodaj_user", $context) ? $context["form_admin_dodaj_user"] : (function () { throw new RuntimeError('Variable "form_admin_dodaj_user" does not exist.', 29, $this->source); })()), "password", [], "any", false, false, false, 29), "first", [], "any", false, false, false, 29), 'widget', ["attr" => ["class" => "form-input"]]);
        echo "
\t\t\t\t</div>
\t\t\t</div>

\t\t\t<div class=\"form-group\">
\t\t\t\t<div class=\"col-sm-3 text-right\">
\t\t\t\t\t";
        // line 35
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form_admin_dodaj_user"]) || array_key_exists("form_admin_dodaj_user", $context) ? $context["form_admin_dodaj_user"] : (function () { throw new RuntimeError('Variable "form_admin_dodaj_user" does not exist.', 35, $this->source); })()), "password", [], "any", false, false, false, 35), "second", [], "any", false, false, false, 35), 'label', ["attr" => ["class" => "form-label"]]);
        echo "
\t\t\t\t</div>

\t\t\t\t<div class=\"col-sm-4\">
\t\t\t\t\t";
        // line 39
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form_admin_dodaj_user"]) || array_key_exists("form_admin_dodaj_user", $context) ? $context["form_admin_dodaj_user"] : (function () { throw new RuntimeError('Variable "form_admin_dodaj_user" does not exist.', 39, $this->source); })()), "password", [], "any", false, false, false, 39), "second", [], "any", false, false, false, 39), 'widget', ["attr" => ["class" => "form-input"]]);
        echo "
\t\t\t\t</div>
\t\t\t</div>

\t\t\t<div class=\"form-group\">
\t\t\t\t<div class=\"col-sm-3 text-right\">
\t\t\t\t\t";
        // line 45
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form_admin_dodaj_user"]) || array_key_exists("form_admin_dodaj_user", $context) ? $context["form_admin_dodaj_user"] : (function () { throw new RuntimeError('Variable "form_admin_dodaj_user" does not exist.', 45, $this->source); })()), "email", [], "any", false, false, false, 45), 'label');
        echo "
\t\t\t\t</div>

\t\t\t\t<div class=\"col-sm-4\">
\t\t\t\t\t";
        // line 49
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form_admin_dodaj_user"]) || array_key_exists("form_admin_dodaj_user", $context) ? $context["form_admin_dodaj_user"] : (function () { throw new RuntimeError('Variable "form_admin_dodaj_user" does not exist.', 49, $this->source); })()), "email", [], "any", false, false, false, 49), 'widget');
        echo "
\t\t\t\t</div>
\t\t\t</div>

\t\t\t<div class=\"form-group\">
\t\t\t\t<div class=\"col-sm-3 text-right\">
\t\t\t\t\t";
        // line 55
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form_admin_dodaj_user"]) || array_key_exists("form_admin_dodaj_user", $context) ? $context["form_admin_dodaj_user"] : (function () { throw new RuntimeError('Variable "form_admin_dodaj_user" does not exist.', 55, $this->source); })()), "ep", [], "any", false, false, false, 55), 'label');
        echo "
\t\t\t\t</div>

\t\t\t\t<div class=\"col-sm-4\">
\t\t\t\t\t";
        // line 59
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form_admin_dodaj_user"]) || array_key_exists("form_admin_dodaj_user", $context) ? $context["form_admin_dodaj_user"] : (function () { throw new RuntimeError('Variable "form_admin_dodaj_user" does not exist.', 59, $this->source); })()), "ep", [], "any", false, false, false, 59), 'widget');
        echo "
\t\t\t\t</div>
\t\t\t</div>

\t\t\t<div class=\"form-group\">
\t\t\t\t<div class=\"col-sm-3 text-right\">
\t\t\t\t\t";
        // line 65
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form_admin_dodaj_user"]) || array_key_exists("form_admin_dodaj_user", $context) ? $context["form_admin_dodaj_user"] : (function () { throw new RuntimeError('Variable "form_admin_dodaj_user" does not exist.', 65, $this->source); })()), "imie", [], "any", false, false, false, 65), 'label');
        echo "
\t\t\t\t</div>

\t\t\t\t<div class=\"col-sm-4\">
\t\t\t\t\t";
        // line 69
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form_admin_dodaj_user"]) || array_key_exists("form_admin_dodaj_user", $context) ? $context["form_admin_dodaj_user"] : (function () { throw new RuntimeError('Variable "form_admin_dodaj_user" does not exist.', 69, $this->source); })()), "imie", [], "any", false, false, false, 69), 'widget');
        echo "
\t\t\t\t</div>
\t\t\t</div>

\t\t\t<div class=\"form-group\">
\t\t\t\t<div class=\"col-sm-3 text-right\">
\t\t\t\t\t";
        // line 75
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form_admin_dodaj_user"]) || array_key_exists("form_admin_dodaj_user", $context) ? $context["form_admin_dodaj_user"] : (function () { throw new RuntimeError('Variable "form_admin_dodaj_user" does not exist.', 75, $this->source); })()), "nazwisko", [], "any", false, false, false, 75), 'label');
        echo "
\t\t\t\t</div>

\t\t\t\t<div class=\"col-sm-4\">
\t\t\t\t\t";
        // line 79
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form_admin_dodaj_user"]) || array_key_exists("form_admin_dodaj_user", $context) ? $context["form_admin_dodaj_user"] : (function () { throw new RuntimeError('Variable "form_admin_dodaj_user" does not exist.', 79, $this->source); })()), "nazwisko", [], "any", false, false, false, 79), 'widget');
        echo "
\t\t\t\t</div>
\t\t\t</div>

\t\t\t<div class=\"form-group\">
\t\t\t\t<div class=\"col-sm-3 text-right\">
\t\t\t\t\t";
        // line 85
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form_admin_dodaj_user"]) || array_key_exists("form_admin_dodaj_user", $context) ? $context["form_admin_dodaj_user"] : (function () { throw new RuntimeError('Variable "form_admin_dodaj_user" does not exist.', 85, $this->source); })()), "znaksprawy", [], "any", false, false, false, 85), 'label');
        echo "
\t\t\t\t</div>

\t\t\t\t<div class=\"col-sm-4\">
\t\t\t\t\t";
        // line 89
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form_admin_dodaj_user"]) || array_key_exists("form_admin_dodaj_user", $context) ? $context["form_admin_dodaj_user"] : (function () { throw new RuntimeError('Variable "form_admin_dodaj_user" does not exist.', 89, $this->source); })()), "znaksprawy", [], "any", false, false, false, 89), 'widget');
        echo "
\t\t\t\t</div>
\t\t\t</div>

\t\t\t";
        // line 94
        echo "
\t\t\t";
        // line 95
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form_admin_dodaj_user"]) || array_key_exists("form_admin_dodaj_user", $context) ? $context["form_admin_dodaj_user"] : (function () { throw new RuntimeError('Variable "form_admin_dodaj_user" does not exist.', 95, $this->source); })()), 'rest');
        echo "

\t\t\t<div class=\"clearfix\">
\t\t\t\t";
        // line 98
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form_admin_dodaj_user"]) || array_key_exists("form_admin_dodaj_user", $context) ? $context["form_admin_dodaj_user"] : (function () { throw new RuntimeError('Variable "form_admin_dodaj_user" does not exist.', 98, $this->source); })()), "reset", [], "any", false, false, false, 98), 'label');
        echo "
\t\t\t\t";
        // line 99
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form_admin_dodaj_user"]) || array_key_exists("form_admin_dodaj_user", $context) ? $context["form_admin_dodaj_user"] : (function () { throw new RuntimeError('Variable "form_admin_dodaj_user" does not exist.', 99, $this->source); })()), "submit", [], "any", false, false, false, 99), 'label');
        echo "
\t\t\t\t
\t\t\t</div>


\t\t</form>
\t\t\t";
        // line 105
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form_admin_dodaj_user"]) || array_key_exists("form_admin_dodaj_user", $context) ? $context["form_admin_dodaj_user"] : (function () { throw new RuntimeError('Variable "form_admin_dodaj_user" does not exist.', 105, $this->source); })()), 'form_end');
        echo "
\t\t\t</div>
\t\t<div class=\"hr hr-24\"></div>
\t</div>


";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

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
        return array (  232 => 105,  223 => 99,  219 => 98,  213 => 95,  210 => 94,  203 => 89,  196 => 85,  187 => 79,  180 => 75,  171 => 69,  164 => 65,  155 => 59,  148 => 55,  139 => 49,  132 => 45,  123 => 39,  116 => 35,  107 => 29,  100 => 25,  91 => 19,  84 => 15,  77 => 11,  68 => 4,  58 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'admin/base2.html.twig' %}

{% block body %}

\t<div
\t\tclass=\"col-xs-12\">

\t\t<!-- PAGE CONTENT BEGINS -->
\t<div class=\"form-horizontal\">
\t
\t\t{{ form_start(form_admin_dodaj_user, {\"attr\": {\"novalidate\" : \"novalidate\"}}) }}
\t\t<form class=\"\" role=\"form\">
\t\t\t<div class=\"form-group\">
\t\t\t\t<div class=\"col-sm-3 text-right\">
\t\t\t\t\t{{ form_label(form_admin_dodaj_user.username) }}
\t\t\t\t</div>

\t\t\t\t<div class=\"col-sm-4\">
\t\t\t\t\t{{ form_widget(form_admin_dodaj_user.username) }}
\t\t\t\t</div>
\t\t\t</div>

\t\t\t<div class=\"form-group\">\t\t
\t\t\t\t<div class=\"col-sm-3 text-right\">
\t\t\t\t\t{{ form_label(form_admin_dodaj_user.password.first, null, { 'attr': {'class': 'form-label'} }) }}
\t\t\t\t</div>

\t\t\t\t<div class=\"col-sm-4\">
\t\t\t\t\t{{ form_widget(form_admin_dodaj_user.password.first, { 'attr': {'class': 'form-input'} }) }}
\t\t\t\t</div>
\t\t\t</div>

\t\t\t<div class=\"form-group\">
\t\t\t\t<div class=\"col-sm-3 text-right\">
\t\t\t\t\t{{ form_label(form_admin_dodaj_user.password.second, null, { 'attr': {'class': 'form-label'} }) }}
\t\t\t\t</div>

\t\t\t\t<div class=\"col-sm-4\">
\t\t\t\t\t{{ form_widget(form_admin_dodaj_user.password.second, { 'attr': {'class': 'form-input'} }) }}
\t\t\t\t</div>
\t\t\t</div>

\t\t\t<div class=\"form-group\">
\t\t\t\t<div class=\"col-sm-3 text-right\">
\t\t\t\t\t{{ form_label(form_admin_dodaj_user.email) }}
\t\t\t\t</div>

\t\t\t\t<div class=\"col-sm-4\">
\t\t\t\t\t{{ form_widget(form_admin_dodaj_user.email) }}
\t\t\t\t</div>
\t\t\t</div>

\t\t\t<div class=\"form-group\">
\t\t\t\t<div class=\"col-sm-3 text-right\">
\t\t\t\t\t{{ form_label(form_admin_dodaj_user.ep) }}
\t\t\t\t</div>

\t\t\t\t<div class=\"col-sm-4\">
\t\t\t\t\t{{ form_widget(form_admin_dodaj_user.ep) }}
\t\t\t\t</div>
\t\t\t</div>

\t\t\t<div class=\"form-group\">
\t\t\t\t<div class=\"col-sm-3 text-right\">
\t\t\t\t\t{{ form_label(form_admin_dodaj_user.imie) }}
\t\t\t\t</div>

\t\t\t\t<div class=\"col-sm-4\">
\t\t\t\t\t{{ form_widget(form_admin_dodaj_user.imie) }}
\t\t\t\t</div>
\t\t\t</div>

\t\t\t<div class=\"form-group\">
\t\t\t\t<div class=\"col-sm-3 text-right\">
\t\t\t\t\t{{ form_label(form_admin_dodaj_user.nazwisko) }}
\t\t\t\t</div>

\t\t\t\t<div class=\"col-sm-4\">
\t\t\t\t\t{{ form_widget(form_admin_dodaj_user.nazwisko) }}
\t\t\t\t</div>
\t\t\t</div>

\t\t\t<div class=\"form-group\">
\t\t\t\t<div class=\"col-sm-3 text-right\">
\t\t\t\t\t{{ form_label(form_admin_dodaj_user.znaksprawy) }}
\t\t\t\t</div>

\t\t\t\t<div class=\"col-sm-4\">
\t\t\t\t\t{{ form_widget(form_admin_dodaj_user.znaksprawy) }}
\t\t\t\t</div>
\t\t\t</div>

\t\t\t{# {{ form_row(form_admin_dodaj_user.password) }} #}

\t\t\t{{ form_rest(form_admin_dodaj_user) }}

\t\t\t<div class=\"clearfix\">
\t\t\t\t{{ form_label(form_admin_dodaj_user.reset) }}
\t\t\t\t{{ form_label(form_admin_dodaj_user.submit) }}
\t\t\t\t
\t\t\t</div>


\t\t</form>
\t\t\t{{ form_end(form_admin_dodaj_user) }}
\t\t\t</div>
\t\t<div class=\"hr hr-24\"></div>
\t</div>


{% endblock %}

", "admin/panel/users/users_dodaj.html.twig", "/home/hystou/public_html/agro24/templates/admin/panel/users/users_dodaj.html.twig");
    }
}
