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

/* dokumenty/user.html.twig */
class __TwigTemplate_21fb0c26c31bb6d837b0dbb6741783947687ee515562bf09279d1ae7c6bc45f7 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "dokumenty/user.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "dokumenty/user.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "dokumenty/user.html.twig", 1);
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
            Dane użytkownika
        </h3>
    </div>
    <div class=\"panel-body\">

        <table class=\"table\">
            ";
        // line 15
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 15, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["u"]) {
            // line 16
            echo "            <tr>
                <th class=\"col-md-3\">Użytkownik</td>
                <td>: ";
            // line 18
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["u"], "username", [], "any", false, false, false, 18), "html", null, true);
            echo "</td>
            </tr>
            <tr>
                <th class=\"col-md-3\">Email</td>
                <td>: ";
            // line 22
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["u"], "email", [], "any", false, false, false, 22), "html", null, true);
            echo "</td>
            </tr>
            <tr>
                <th class=\"col-md-3\">Imię</td>
                <td>: ";
            // line 26
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["u"], "imie", [], "any", false, false, false, 26), "html", null, true);
            echo "</td>
            </tr>
            <tr>
                <th class=\"col-md-3\">Nazwisko</td>
                <td>: ";
            // line 30
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["u"], "nazwisko", [], "any", false, false, false, 30), "html", null, true);
            echo "</td>
            </tr>
            <tr>
                <th class=\"col-md-3\">EP Producenta</td>
                <td>: ";
            // line 34
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["u"], "ep", [], "any", false, false, false, 34), "html", null, true);
            echo "</td>
            </tr>
            <tr>
                <th class=\"col-md-3\">Znak sprawy</td>
                <td>: ";
            // line 38
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["u"], "znaksprawy", [], "any", false, false, false, 38), "html", null, true);
            echo "</td>
            </tr>
            <tr>
                <th class=\"col-md-3\">Data ważności konta</td>
                <td>: ";
            // line 42
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["u"], "datatermin", [], "any", false, false, false, 42), "Y-m-d H:i:s"), "html", null, true);
            echo "</td>
            </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['u'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 45
        echo "        </table>

        <!-- List group -->
        <ul class=\"list-group\">
            <li class=\"list-group-item\">W celu modyfikacji hasła skontaktuj się z administratorem.</li>
            <li class=\"list-group-item\">
                <a class=\"btn btn-default\" href=\"";
        // line 51
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("dokumenty_index");
        echo "\"><span class=\"glyphicon glyphicon-arrow-left\"></span> Powrót</a>
                <a class=\"btn btn-primary\" href=\"";
        // line 52
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("dokumenty_useredit");
        echo "\"><span class=\"glyphicon glyphicon-pencil\"></span> Edytuj</a>
                <a class=\"btn btn-primary\" href=\"";
        // line 53
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("payment_index");
        echo "\"><span class=\"fa fa-university\"></span> Płatność</a>

            </li>
        </ul>
    </div>

</div>
  
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "dokumenty/user.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  156 => 53,  152 => 52,  148 => 51,  140 => 45,  131 => 42,  124 => 38,  117 => 34,  110 => 30,  103 => 26,  96 => 22,  89 => 18,  85 => 16,  81 => 15,  68 => 4,  58 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block body %}

<div class=\"panel panel-primary\">
    <!-- Default panel contents -->
    <div class=\"panel-heading\">
        <h3 class=\"panel-title\">
            Dane użytkownika
        </h3>
    </div>
    <div class=\"panel-body\">

        <table class=\"table\">
            {% for u in user %}
            <tr>
                <th class=\"col-md-3\">Użytkownik</td>
                <td>: {{u.username}}</td>
            </tr>
            <tr>
                <th class=\"col-md-3\">Email</td>
                <td>: {{u.email}}</td>
            </tr>
            <tr>
                <th class=\"col-md-3\">Imię</td>
                <td>: {{u.imie}}</td>
            </tr>
            <tr>
                <th class=\"col-md-3\">Nazwisko</td>
                <td>: {{u.nazwisko}}</td>
            </tr>
            <tr>
                <th class=\"col-md-3\">EP Producenta</td>
                <td>: {{u.ep}}</td>
            </tr>
            <tr>
                <th class=\"col-md-3\">Znak sprawy</td>
                <td>: {{u.znaksprawy}}</td>
            </tr>
            <tr>
                <th class=\"col-md-3\">Data ważności konta</td>
                <td>: {{u.datatermin | date(\"Y-m-d H:i:s\")}}</td>
            </tr>
            {% endfor %}
        </table>

        <!-- List group -->
        <ul class=\"list-group\">
            <li class=\"list-group-item\">W celu modyfikacji hasła skontaktuj się z administratorem.</li>
            <li class=\"list-group-item\">
                <a class=\"btn btn-default\" href=\"{{ url(\"dokumenty_index\")}}\"><span class=\"glyphicon glyphicon-arrow-left\"></span> Powrót</a>
                <a class=\"btn btn-primary\" href=\"{{ url(\"dokumenty_useredit\")}}\"><span class=\"glyphicon glyphicon-pencil\"></span> Edytuj</a>
                <a class=\"btn btn-primary\" href=\"{{ url(\"payment_index\")}}\"><span class=\"fa fa-university\"></span> Płatność</a>

            </li>
        </ul>
    </div>

</div>
  
{% endblock body %}", "dokumenty/user.html.twig", "/home/hystou/public_html/agro24/templates/dokumenty/user.html.twig");
    }
}
