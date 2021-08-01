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

/* register/register.html.twig */
class __TwigTemplate_e455819ec733e792502cd58a561c15666891bb55ceee0fd1cc35fdb61fdb72e0 extends Template
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
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "register/register.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "register/register.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "register/register.html.twig", 1);
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
\t\tclass=\"panel panel-primary\">
\t\t<!-- Default panel contents -->
\t\t<div class=\"panel-heading\">
\t\t\t<h4>
\t\t\t\tRejestracja
\t\t\t</h4>
\t\t</div>
\t\t<div class=\"row\">
\t\t\t<div class=\"panel-body\">
\t\t\t\t<div class=\"col-md-3\">
                </div>
\t\t\t\t<div class=\"form-group col-md-6\">
\t\t\t\t\t<div class=\"form-row\">
\t\t\t\t\t\t";
        // line 19
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form_register"]) || array_key_exists("form_register", $context) ? $context["form_register"] : (function () { throw new RuntimeError('Variable "form_register" does not exist.', 19, $this->source); })()), 'form_start', ["attr" => ["novalidate" => "novalidate"]]);
        echo "
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t";
        // line 21
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form_register"]) || array_key_exists("form_register", $context) ? $context["form_register"] : (function () { throw new RuntimeError('Variable "form_register" does not exist.', 21, $this->source); })()), "username", [], "any", false, false, false, 21), 'row');
        echo "
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"form-group \">
\t\t\t\t\t\t\t";
        // line 24
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form_register"]) || array_key_exists("form_register", $context) ? $context["form_register"] : (function () { throw new RuntimeError('Variable "form_register" does not exist.', 24, $this->source); })()), "email", [], "any", false, false, false, 24), 'row');
        echo "
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"form-group \">
\t\t\t\t\t\t\t";
        // line 27
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form_register"]) || array_key_exists("form_register", $context) ? $context["form_register"] : (function () { throw new RuntimeError('Variable "form_register" does not exist.', 27, $this->source); })()), "password", [], "any", false, false, false, 27), "first", [], "any", false, false, false, 27), 'row');
        echo "
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"form-group \">
\t\t\t\t\t\t\t";
        // line 30
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form_register"]) || array_key_exists("form_register", $context) ? $context["form_register"] : (function () { throw new RuntimeError('Variable "form_register" does not exist.', 30, $this->source); })()), "password", [], "any", false, false, false, 30), "second", [], "any", false, false, false, 30), 'row');
        echo "
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"form-group \">
\t\t\t\t\t\t\t";
        // line 33
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form_register"]) || array_key_exists("form_register", $context) ? $context["form_register"] : (function () { throw new RuntimeError('Variable "form_register" does not exist.', 33, $this->source); })()), "ep", [], "any", false, false, false, 33), 'row');
        echo "
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"form-group \">
\t\t\t\t\t\t\t";
        // line 36
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form_register"]) || array_key_exists("form_register", $context) ? $context["form_register"] : (function () { throw new RuntimeError('Variable "form_register" does not exist.', 36, $this->source); })()), "imie", [], "any", false, false, false, 36), 'row');
        echo "
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"form-group \">
\t\t\t\t\t\t\t";
        // line 39
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form_register"]) || array_key_exists("form_register", $context) ? $context["form_register"] : (function () { throw new RuntimeError('Variable "form_register" does not exist.', 39, $this->source); })()), "nazwisko", [], "any", false, false, false, 39), 'row');
        echo "
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"form-group \">
\t\t\t\t\t\t\t";
        // line 42
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form_register"]) || array_key_exists("form_register", $context) ? $context["form_register"] : (function () { throw new RuntimeError('Variable "form_register" does not exist.', 42, $this->source); })()), "znaksprawy", [], "any", false, false, false, 42), 'row');
        echo "
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"form-group text-justify\">
\t\t\t\t\t\t\t<small>
\t\t\t\t\t\t\t\tRejestrując się, wyrażasz zgodę na nasz
\t\t\t\t\t\t\t\t<a href=\"";
        // line 47
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("pdf/Regulamin_systemu_e-widencja24.pl.pdf"), "html", null, true);
        echo "\">Regulamin</a>
\t\t\t\t\t\t\t\ti na otrzymywanie e-maili oraz aktualizacji E-widencja24. Potwierdzasz również, że przeczytałeś/aś naszą
\t\t\t\t\t\t\t\t<a href=\"";
        // line 49
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("pdf/Polityka_prywatnosci_e-widencja24.pl.pdf"), "html", null, true);
        echo "\">Politykę Prywatności</a> oraz <a href=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("pdf/Klauzula_informacyjna_systemu_e-widencja24.pl.pdf"), "html", null, true);
        echo "\">Kaluzulę informacyjną </a>. Zgadzasz się także na użycie plików cookie przez E-widencja24, aby zapewnić pozytywne wrażenia użytkownikom.
\t\t\t\t\t\t\t</small>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"form-row\">
\t\t\t\t\t\t";
        // line 54
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form_register"]) || array_key_exists("form_register", $context) ? $context["form_register"] : (function () { throw new RuntimeError('Variable "form_register" does not exist.', 54, $this->source); })()), "submit", [], "any", false, false, false, 54), 'row');
        echo "
\t\t\t\t\t\t";
        // line 55
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form_register"]) || array_key_exists("form_register", $context) ? $context["form_register"] : (function () { throw new RuntimeError('Variable "form_register" does not exist.', 55, $this->source); })()), "reset", [], "any", false, false, false, 55), 'row');
        echo "
\t\t\t\t\t</div>
\t\t\t\t\t";
        // line 57
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form_register"]) || array_key_exists("form_register", $context) ? $context["form_register"] : (function () { throw new RuntimeError('Variable "form_register" does not exist.', 57, $this->source); })()), 'form_end');
        echo "
\t\t\t\t\t<div class=\"form-row\">
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "register/register.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  164 => 57,  159 => 55,  155 => 54,  145 => 49,  140 => 47,  132 => 42,  126 => 39,  120 => 36,  114 => 33,  108 => 30,  102 => 27,  96 => 24,  90 => 21,  85 => 19,  68 => 4,  58 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block body %}

\t<div
\t\tclass=\"panel panel-primary\">
\t\t<!-- Default panel contents -->
\t\t<div class=\"panel-heading\">
\t\t\t<h4>
\t\t\t\tRejestracja
\t\t\t</h4>
\t\t</div>
\t\t<div class=\"row\">
\t\t\t<div class=\"panel-body\">
\t\t\t\t<div class=\"col-md-3\">
                </div>
\t\t\t\t<div class=\"form-group col-md-6\">
\t\t\t\t\t<div class=\"form-row\">
\t\t\t\t\t\t{{ form_start(form_register, {\"attr\": {\"novalidate\" : \"novalidate\"}}) }}
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t{{ form_row(form_register.username)}}
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"form-group \">
\t\t\t\t\t\t\t{{ form_row(form_register.email)}}
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"form-group \">
\t\t\t\t\t\t\t{{ form_row(form_register.password.first)}}
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"form-group \">
\t\t\t\t\t\t\t{{ form_row(form_register.password.second)}}
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"form-group \">
\t\t\t\t\t\t\t{{ form_row(form_register.ep)}}
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"form-group \">
\t\t\t\t\t\t\t{{ form_row(form_register.imie)}}
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"form-group \">
\t\t\t\t\t\t\t{{ form_row(form_register.nazwisko)}}
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"form-group \">
\t\t\t\t\t\t\t{{ form_row(form_register.znaksprawy)}}
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"form-group text-justify\">
\t\t\t\t\t\t\t<small>
\t\t\t\t\t\t\t\tRejestrując się, wyrażasz zgodę na nasz
\t\t\t\t\t\t\t\t<a href=\"{{ asset('pdf/Regulamin_systemu_e-widencja24.pl.pdf')}}\">Regulamin</a>
\t\t\t\t\t\t\t\ti na otrzymywanie e-maili oraz aktualizacji E-widencja24. Potwierdzasz również, że przeczytałeś/aś naszą
\t\t\t\t\t\t\t\t<a href=\"{{ asset('pdf/Polityka_prywatnosci_e-widencja24.pl.pdf')}}\">Politykę Prywatności</a> oraz <a href=\"{{ asset('pdf/Klauzula_informacyjna_systemu_e-widencja24.pl.pdf')}}\">Kaluzulę informacyjną </a>. Zgadzasz się także na użycie plików cookie przez E-widencja24, aby zapewnić pozytywne wrażenia użytkownikom.
\t\t\t\t\t\t\t</small>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"form-row\">
\t\t\t\t\t\t{{ form_row(form_register.submit)}}
\t\t\t\t\t\t{{ form_row(form_register.reset)}}
\t\t\t\t\t</div>
\t\t\t\t\t{{ form_end(form_register) }}
\t\t\t\t\t<div class=\"form-row\">
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
{% endblock %}
", "register/register.html.twig", "/home/hystou/public_html/agro24/templates/register/register.html.twig");
    }
}
