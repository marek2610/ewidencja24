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

/* dokumenty/dodaj.html.twig */
class __TwigTemplate_60fc68a051aa0f1910c125b68dfe4425debe17973233255a410f320f83b3e898 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "dokumenty/dodaj.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "dokumenty/dodaj.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "dokumenty/dodaj.html.twig", 1);
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
    <div class=\"panel panel-primary\">
        <div class=\"panel-heading\">
            <h3 class=\"panel-title\">Dodawanie zdarzenia księgowego</h3>
        </div>
        <div class=\"panel-body\">
        
        <!-- Table -->
        <table class=\"table\">
            ";
        // line 20
        echo "            ";
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form_dodaj_dokument"]) || array_key_exists("form_dodaj_dokument", $context) ? $context["form_dodaj_dokument"] : (function () { throw new RuntimeError('Variable "form_dodaj_dokument" does not exist.', 20, $this->source); })()), 'form_start', ["attr" => ["novalidate" => "novalidate"]]);
        echo "
            <tr>
                <td>";
        // line 22
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form_dodaj_dokument"]) || array_key_exists("form_dodaj_dokument", $context) ? $context["form_dodaj_dokument"] : (function () { throw new RuntimeError('Variable "form_dodaj_dokument" does not exist.', 22, $this->source); })()), "data", [], "any", false, false, false, 22), 'row');
        echo "</td>
                <td>";
        // line 23
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form_dodaj_dokument"]) || array_key_exists("form_dodaj_dokument", $context) ? $context["form_dodaj_dokument"] : (function () { throw new RuntimeError('Variable "form_dodaj_dokument" does not exist.', 23, $this->source); })()), "faktura", [], "any", false, false, false, 23), 'row', ["attr" => ["novalidate" => "novalidate"]]);
        echo "</td>
                <td>";
        // line 24
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form_dodaj_dokument"]) || array_key_exists("form_dodaj_dokument", $context) ? $context["form_dodaj_dokument"] : (function () { throw new RuntimeError('Variable "form_dodaj_dokument" does not exist.', 24, $this->source); })()), "kwota", [], "any", false, false, false, 24), 'row');
        echo "</td>
                <td>";
        // line 25
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form_dodaj_dokument"]) || array_key_exists("form_dodaj_dokument", $context) ? $context["form_dodaj_dokument"] : (function () { throw new RuntimeError('Variable "form_dodaj_dokument" does not exist.', 25, $this->source); })()), "rodzaj", [], "any", false, false, false, 25), 'row');
        echo "</td>
                <td>";
        // line 26
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form_dodaj_dokument"]) || array_key_exists("form_dodaj_dokument", $context) ? $context["form_dodaj_dokument"] : (function () { throw new RuntimeError('Variable "form_dodaj_dokument" does not exist.', 26, $this->source); })()), "uwagi", [], "any", false, false, false, 26), 'row');
        echo "</td>
            </tr>
        </table>

                ";
        // line 30
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form_dodaj_dokument"]) || array_key_exists("form_dodaj_dokument", $context) ? $context["form_dodaj_dokument"] : (function () { throw new RuntimeError('Variable "form_dodaj_dokument" does not exist.', 30, $this->source); })()), "dodaj", [], "any", false, false, false, 30), 'row', ["attr" => ["class" => "btn-success pull-left", "style" => "margin-right: 4px"]]);
        echo "
                <a class=\"btn btn-default pull-left\" href=\"";
        // line 31
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("dokumenty_index");
        echo "\"><span class=\"glyphicon glyphicon-arrow-left\"></span> Powrót</a>
            ";
        // line 32
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form_dodaj_dokument"]) || array_key_exists("form_dodaj_dokument", $context) ? $context["form_dodaj_dokument"] : (function () { throw new RuntimeError('Variable "form_dodaj_dokument" does not exist.', 32, $this->source); })()), 'form_end');
        echo "
            <div class=\"clearfix\"></div>
        </div>
        ";
        // line 38
        echo "    </div>


";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "dokumenty/dodaj.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  122 => 38,  116 => 32,  112 => 31,  108 => 30,  101 => 26,  97 => 25,  93 => 24,  89 => 23,  85 => 22,  79 => 20,  68 => 4,  58 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block body %}

    <div class=\"panel panel-primary\">
        <div class=\"panel-heading\">
            <h3 class=\"panel-title\">Dodawanie zdarzenia księgowego</h3>
        </div>
        <div class=\"panel-body\">
        
        <!-- Table -->
        <table class=\"table\">
            {# <tr>
                <th>Data</th>
                <th>Kwota</th>
                <th>Faktura</th>
                <th>Rodzaj</th>
                <th>Uwagi</th>
            </tr> #}
            {{ form_start(form_dodaj_dokument, {\"attr\": {\"novalidate\" : \"novalidate\"}}) }}
            <tr>
                <td>{{ form_row(form_dodaj_dokument.data) }}</td>
                <td>{{ form_row(form_dodaj_dokument.faktura, {\"attr\": {\"novalidate\" : \"novalidate\"}}) }}</td>
                <td>{{ form_row(form_dodaj_dokument.kwota) }}</td>
                <td>{{ form_row(form_dodaj_dokument.rodzaj) }}</td>
                <td>{{ form_row(form_dodaj_dokument.uwagi) }}</td>
            </tr>
        </table>

                {{ form_row(form_dodaj_dokument.dodaj, {\"attr\": {\"class\": \"btn-success pull-left\", \"style\": \"margin-right: 4px\"}}) }}
                <a class=\"btn btn-default pull-left\" href=\"{{ url(\"dokumenty_index\") }}\"><span class=\"glyphicon glyphicon-arrow-left\"></span> Powrót</a>
            {{ form_end(form_dodaj_dokument) }}
            <div class=\"clearfix\"></div>
        </div>
        {# </table>

        {{ form(form_dodaj_dokument, {\"attr\": {\"novalidate\" : \"novalidate\"}}) }} #}
    </div>


{% endblock %}
", "dokumenty/dodaj.html.twig", "/home/hystou/public_html/agro24/templates/dokumenty/dodaj.html.twig");
    }
}
