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

/* dokumenty/details.html.twig */
class __TwigTemplate_4177ee6bb8458604fcc26da368f5dea94df834994f96cb26c9c14cbbdd8a90bc extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "dokumenty/details.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "dokumenty/details.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "dokumenty/details.html.twig", 1);
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
    <!-- Default panel contents -->
        <div class=\"panel-heading\">
            <h3 class=\"panel-title\">
                Szczegóły dokumentu
            </h3>
        </div>
        <div class=\"panel-body\">
            
        </div>


        <!-- Table -->
        <table class=\"table\">
            <tr>
            <tr>
                <th class=\"col-md-2\">Data</th>
                <th>Faktura</th>
                <th>Kwota</th>
                <th class=\"col-md-2\">Rodzaj</th>
                <th>Uwagi</th>
            </tr>
            ";
        // line 27
        if (-1 === twig_compare(twig_get_attribute($this->env, $this->source, (isset($context["dokument"]) || array_key_exists("dokument", $context) ? $context["dokument"] : (function () { throw new RuntimeError('Variable "dokument" does not exist.', 27, $this->source); })()), "kwota", [], "any", false, false, false, 27), 0)) {
            // line 28
            echo "            <tr class=\"text-danger\">  
            ";
        } else {
            // line 30
            echo "            <tr>
            ";
        }
        // line 32
        echo "                <td>";
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["dokument"]) || array_key_exists("dokument", $context) ? $context["dokument"] : (function () { throw new RuntimeError('Variable "dokument" does not exist.', 32, $this->source); })()), "data", [], "any", false, false, false, 32), "Y-m-d"), "html", null, true);
        echo "</td>
                <td>";
        // line 33
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["dokument"]) || array_key_exists("dokument", $context) ? $context["dokument"] : (function () { throw new RuntimeError('Variable "dokument" does not exist.', 33, $this->source); })()), "faktura", [], "any", false, false, false, 33), "html", null, true);
        echo "</td>
                <td>";
        // line 34
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["dokument"]) || array_key_exists("dokument", $context) ? $context["dokument"] : (function () { throw new RuntimeError('Variable "dokument" does not exist.', 34, $this->source); })()), "kwota", [], "any", false, false, false, 34), 2, ",", " "), "html", null, true);
        echo " zł</td>
                <td class=\"text-uppercase\">";
        // line 35
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["dokument"]) || array_key_exists("dokument", $context) ? $context["dokument"] : (function () { throw new RuntimeError('Variable "dokument" does not exist.', 35, $this->source); })()), "rodzaj", [], "any", false, false, false, 35), "html", null, true);
        echo "</td>
                <td>";
        // line 36
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["dokument"]) || array_key_exists("dokument", $context) ? $context["dokument"] : (function () { throw new RuntimeError('Variable "dokument" does not exist.', 36, $this->source); })()), "uwagi", [], "any", false, false, false, 36), "html", null, true);
        echo "</td>
            </tr>
        </table>
        
        <div class=\"panel-body\">
            <a class=\"btn btn-default pull-left\" style=\"margin-right: 4px\" href=\"";
        // line 41
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("dokumenty_index");
        echo "\"><span class=\"glyphicon glyphicon-arrow-left\"></span> Powrót</a>
            <a class=\"btn btn-primary pull-left\" style=\"margin-right: 4px\" href=\"";
        // line 42
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("dokumenty_edytuj", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["dokument"]) || array_key_exists("dokument", $context) ? $context["dokument"] : (function () { throw new RuntimeError('Variable "dokument" does not exist.', 42, $this->source); })()), "id", [], "any", false, false, false, 42)]), "html", null, true);
        echo "\"><span class=\"glyphicon glyphicon-pencil\"></span> Edytuj </a>

            ";
        // line 45
        echo "            ";
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form_usun_dokument"]) || array_key_exists("form_usun_dokument", $context) ? $context["form_usun_dokument"] : (function () { throw new RuntimeError('Variable "form_usun_dokument" does not exist.', 45, $this->source); })()), 'form_start', ["attr" => ["class" => "pull-left", "style" => "margin-right: 4px"]]);
        echo "
                ";
        // line 46
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form_usun_dokument"]) || array_key_exists("form_usun_dokument", $context) ? $context["form_usun_dokument"] : (function () { throw new RuntimeError('Variable "form_usun_dokument" does not exist.', 46, $this->source); })()), "submit", [], "any", false, false, false, 46), 'widget', ["attr" => ["class" => "btn-danger"]]);
        echo "
                ";
        // line 47
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form_usun_dokument"]) || array_key_exists("form_usun_dokument", $context) ? $context["form_usun_dokument"] : (function () { throw new RuntimeError('Variable "form_usun_dokument" does not exist.', 47, $this->source); })()), 'rest');
        echo "
            ";
        // line 48
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form_usun_dokument"]) || array_key_exists("form_usun_dokument", $context) ? $context["form_usun_dokument"] : (function () { throw new RuntimeError('Variable "form_usun_dokument" does not exist.', 48, $this->source); })()), 'form_end');
        echo "
            
            ";
        // line 51
        echo "            ";
        // line 55
        echo "
            <a class=\"btn btn-primary pull-right\" style=\"margin-right: 4px\" href=\"";
        // line 56
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("dokumenty_dodaj");
        echo "\">
\t\t\t<span class=\"glyphicon glyphicon-plus\"></span>Dodaj</a>
        </div>
        <div class=\"clearfix\"></div>

    </div>
    

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "dokumenty/details.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  160 => 56,  157 => 55,  155 => 51,  150 => 48,  146 => 47,  142 => 46,  137 => 45,  132 => 42,  128 => 41,  120 => 36,  116 => 35,  112 => 34,  108 => 33,  103 => 32,  99 => 30,  95 => 28,  93 => 27,  68 => 4,  58 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block body %}

    <div class=\"panel panel-primary\">
    <!-- Default panel contents -->
        <div class=\"panel-heading\">
            <h3 class=\"panel-title\">
                Szczegóły dokumentu
            </h3>
        </div>
        <div class=\"panel-body\">
            
        </div>


        <!-- Table -->
        <table class=\"table\">
            <tr>
            <tr>
                <th class=\"col-md-2\">Data</th>
                <th>Faktura</th>
                <th>Kwota</th>
                <th class=\"col-md-2\">Rodzaj</th>
                <th>Uwagi</th>
            </tr>
            {% if dokument.kwota < 0 %}
            <tr class=\"text-danger\">  
            {% else %}
            <tr>
            {% endif %}
                <td>{{dokument.data | date(\"Y-m-d\")}}</td>
                <td>{{dokument.faktura}}</td>
                <td>{{dokument.kwota | number_format(2, ',', ' ')}} zł</td>
                <td class=\"text-uppercase\">{{dokument.rodzaj}}</td>
                <td>{{dokument.uwagi}}</td>
            </tr>
        </table>
        
        <div class=\"panel-body\">
            <a class=\"btn btn-default pull-left\" style=\"margin-right: 4px\" href=\"{{ url(\"dokumenty_index\") }}\"><span class=\"glyphicon glyphicon-arrow-left\"></span> Powrót</a>
            <a class=\"btn btn-primary pull-left\" style=\"margin-right: 4px\" href=\"{{ url(\"dokumenty_edytuj\", {\"id\": dokument.id})}}\"><span class=\"glyphicon glyphicon-pencil\"></span> Edytuj </a>

            {# kasowanie - user nie będzie widział, będzie w bazie #}
            {{ form_start(form_usun_dokument, {'attr': {'class': 'pull-left', 'style': 'margin-right: 4px'}}) }}
                {{ form_widget(form_usun_dokument.submit, {'attr': {'class': 'btn-danger' }}) }}
                {{ form_rest(form_usun_dokument) }}
            {{ form_end(form_usun_dokument) }}
            
            {# kasowanie z bazydanych #}
            {# {{ form_start(form_delete_dokument, {'attr': {'class': 'pull-left'}}) }}
                {{ form_widget(form_delete_dokument.submit, {'attr': {'class': 'btn-warning' }}) }}
                {{ form_rest(form_delete_dokument) }}
            {{ form_end(form_delete_dokument) }} #}

            <a class=\"btn btn-primary pull-right\" style=\"margin-right: 4px\" href=\"{{ url(\"dokumenty_dodaj\") }}\">
\t\t\t<span class=\"glyphicon glyphicon-plus\"></span>Dodaj</a>
        </div>
        <div class=\"clearfix\"></div>

    </div>
    

{% endblock %}
", "dokumenty/details.html.twig", "/home/hystou/public_html/agro24/templates/dokumenty/details.html.twig");
    }
}
