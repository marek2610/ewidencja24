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

/* dokumenty/index_new.html.twig */
class __TwigTemplate_85e93673fe9be1ed6cd3a1430d94a8e6a2329d4ab08e7155a2ccceff2b2ef826 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "dokumenty/index_new.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "dokumenty/index_new.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "dokumenty/index_new.html.twig", 1);
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
\t\t\t";
        // line 9
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["userinfo"]) || array_key_exists("userinfo", $context) ? $context["userinfo"] : (function () { throw new RuntimeError('Variable "userinfo" does not exist.', 9, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["ui"]) {
            // line 10
            echo "\t\t\t\t<h3 class=\"panel-title pull-left\">Ewidencja przychodów i rozchodów
\t\t\t\t</h3>
\t\t\t\t<h3 class=\"panel-title pull-right \">

\t\t\t\t\tData ważności konta:
\t\t\t\t\t";
            // line 15
            echo twig_escape_filter($this->env, $this->extensions['App\Twig\DataTermin']->terminKonta(twig_get_attribute($this->env, $this->source, $context["ui"], "dataTermin", [], "any", false, false, false, 15)), "html", null, true);
            echo "
\t\t\t\t\t";
            // line 16
            echo twig_escape_filter($this->env, $this->extensions['App\Twig\DataTermin']->panelStyle(twig_get_attribute($this->env, $this->source, $context["ui"], "dataTermin", [], "any", false, false, false, 16)), "html", null, true);
            echo "
\t\t\t\t</h3>
\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t</div>


\t\t\t<div class=\"panel-body\">
\t\t\t\t<table class=\"table\">
\t\t\t\t\t<tr>
\t\t\t\t\t\t<td class=\"col-md-3\">EP Producenta</td>
\t\t\t\t\t\t<td>:
\t\t\t\t\t\t\t";
            // line 27
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["ui"], "ep", [], "any", false, false, false, 27), "html", null, true);
            echo "</td>
\t\t\t\t\t</tr>
\t\t\t\t\t<tr>
\t\t\t\t\t\t<td class=\"col-md-3\">Beneficjent</td>
\t\t\t\t\t\t<td>:
\t\t\t\t\t\t\t";
            // line 32
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["ui"], "nazwisko", [], "any", false, false, false, 32), "html", null, true);
            echo "
\t\t\t\t\t\t\t";
            // line 33
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["ui"], "imie", [], "any", false, false, false, 33), "html", null, true);
            echo "</td>
\t\t\t\t\t</tr>
\t\t\t\t\t<tr>
\t\t\t\t\t\t<td class=\"col-md-3\">Znak sprawy</td>
\t\t\t\t\t\t<td>:
\t\t\t\t\t\t\t";
            // line 38
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["ui"], "znaksprawy", [], "any", false, false, false, 38), "html", null, true);
            echo "</td>
\t\t\t\t\t</tr>
\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ui'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 41
        echo "\t\t\t</table>


\t\t\t<!-- List group -->
\t\t\t<ul class=\"list-group\">
\t\t\t\t<li class=\"list-group-item\">
\t\t\t\t\t<a class=\"btn btn-primary pull-left\" style=\"margin-right: 4px\" href=\"";
        // line 47
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("dokumenty_dodaj");
        echo "\">
\t\t\t\t\t\t<span class=\"glyphicon glyphicon-plus\"></span>
\t\t\t\t\t\tDodaj</a>
\t\t\t\t\t";
        // line 53
        echo "\t\t\t\t\t<a href=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("dokumenty_zbiorcze");
        echo "\" class=\"btn btn-default pull-left\">
\t\t\t\t\t\t<span class=\"glyphicon glyphicon-download-alt\"></span>
\t\t\t\t\t\tGeneruj zestawienie</a>

\t\t\t\t\t<!-- SearchForm by Controler -->
\t\t\t\t\t";
        // line 58
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment(Symfony\Bridge\Twig\Extension\HttpKernelExtension::controller("App\\Controller\\DokumentyController::searchBar"));
        // line 60
        echo "
\t\t\t\t\t<div class=\"clearfix\"></div>

\t\t\t\t</li>
\t\t\t</ul>
\t\t</div>

\t\t<!-- Table -->
\t\t<table class=\"table\">
\t\t\t<tr>
\t\t\t\t<th>Lp.</th>
\t\t\t\t<th class=\"col-md-2\">";
        // line 71
        echo $this->extensions['Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension']->sortable($this->env, (isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 71, $this->source); })()), "Data", "data");
        echo "</th>
\t\t\t\t<th class=\"col-md-2\">";
        // line 72
        echo $this->extensions['Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension']->sortable($this->env, (isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 72, $this->source); })()), "Faktura", "faktura");
        echo "</th>
\t\t\t\t<th colspan=\"2\" class=\"col-md-2 text-center\">";
        // line 73
        echo $this->extensions['Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension']->sortable($this->env, (isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 73, $this->source); })()), "Kwota", "kwota");
        echo "</th>
\t\t\t\t<th class=\"col-md-2\">";
        // line 74
        echo $this->extensions['Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension']->sortable($this->env, (isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 74, $this->source); })()), "Rodzaj", "rodzaj");
        echo "</th>
\t\t\t\t<th class=\"col-md-2\">";
        // line 75
        echo $this->extensions['Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension']->sortable($this->env, (isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 75, $this->source); })()), "Uwagi", "uwagi");
        echo "</th>
\t\t\t\t<th class=\"col-md-2\">Akcje</th>
\t\t\t</tr>
\t\t\t";
        // line 78
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 78, $this->source); })()));
        $context['_iterated'] = false;
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["dokument"]) {
            // line 79
            echo "\t\t\t\t<tr>
\t\t\t\t\t<td>";
            // line 80
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 80), "html", null, true);
            echo ".</td>
\t\t\t\t\t<td>";
            // line 81
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["dokument"], "data", [], "any", false, false, false, 81), "Y-m-d"), "html", null, true);
            echo "</td>
\t\t\t\t\t<td>";
            // line 82
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["dokument"], "faktura", [], "any", false, false, false, 82), "html", null, true);
            echo "</td>

\t\t\t\t\t<!-- podział kwoty na komórki: lewa dodatnia, prawa ujemna -->
\t\t\t\t\t";
            // line 85
            if (-1 === twig_compare(twig_get_attribute($this->env, $this->source, $context["dokument"], "kwota", [], "any", false, false, false, 85), 0)) {
                // line 86
                echo "\t\t\t\t\t\t<td></td>
\t\t\t\t\t\t<td class=\"text-danger text-right\">";
                // line 87
                echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["dokument"], "kwota", [], "any", false, false, false, 87), 2, ",", " "), "html", null, true);
                echo "
\t\t\t\t\t\t\tzł</td>
\t\t\t\t\t";
            } else {
                // line 90
                echo "\t\t\t\t\t\t<td class=\"text-right\">";
                echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["dokument"], "kwota", [], "any", false, false, false, 90), 2, ",", " "), "html", null, true);
                echo "
\t\t\t\t\t\t\tzł</td>
\t\t\t\t\t\t<td></td>
\t\t\t\t\t";
            }
            // line 94
            echo "
\t\t\t\t\t<td class=\"text-uppercase\">";
            // line 95
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["dokument"], "rodzaj", [], "any", false, false, false, 95), "html", null, true);
            echo "</td>
\t\t\t\t\t<td>";
            // line 96
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["dokument"], "uwagi", [], "any", false, false, false, 96), "html", null, true);
            echo "</td>
\t\t\t\t\t<td>
\t\t\t\t\t\t<a href=\"";
            // line 98
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("dokumenty_details", ["id" => twig_get_attribute($this->env, $this->source, $context["dokument"], "id", [], "any", false, false, false, 98)]), "html", null, true);
            echo "\">
\t\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-default btn-sm\">
\t\t\t\t\t\t\t\t<span class=\"glyphicon glyphicon-search\"></span>
\t\t\t\t\t\t\t\tInfo</button>
\t\t\t\t\t\t</a>
\t\t\t\t\t\t<a href=\"";
            // line 103
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("dokumenty_edytuj", ["id" => twig_get_attribute($this->env, $this->source, $context["dokument"], "id", [], "any", false, false, false, 103)]), "html", null, true);
            echo "\">
\t\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-primary btn-sm\">
\t\t\t\t\t\t\t\t<span class=\"glyphicon glyphicon-pencil\"></span>
\t\t\t\t\t\t\t\tEdytuj</button>
\t\t\t\t\t\t</a>
\t\t\t\t\t</td>
\t\t\t\t</tr>
\t\t\t";
            $context['_iterated'] = true;
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        if (!$context['_iterated']) {
            // line 111
            echo "\t\t\t\t<tr>
\t\t\t\t\t<td colspan=\"6\">Brak wpisów księgowych</td>
\t\t\t\t\t<td></td>
\t\t\t\t\t<td></td>
\t\t\t\t\t<td></td>
\t\t\t\t\t<td></td>
\t\t\t\t\t<td></td>
\t\t\t\t</tr>
\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['dokument'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 120
        echo "\t\t</table>
\t</div>

\t<!-- Default panel contents -->
\t<div class=\"panel panel-primary\">
\t\t<div class=\"panel-heading\">Podsumowanie - wszystkiw wpisy</div>
\t\t<table class=\"table\">
\t\t\t<tr class=\"text-right\">
\t\t\t\t";
        // line 128
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["sumaWszystkie"]) || array_key_exists("sumaWszystkie", $context) ? $context["sumaWszystkie"] : (function () { throw new RuntimeError('Variable "sumaWszystkie" does not exist.', 128, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["q"]) {
            // line 129
            echo "\t\t\t\t\t<td class=\"col-md-2\">
\t\t\t\t\t\t<strong>Razem</strong>
\t\t\t\t\t</td>
\t\t\t\t\t<td class=\"col-md-2\">
\t\t\t\t\t\t<strong>";
            // line 133
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["q"], 1, [], "any", false, false, false, 133), 2, ",", " "), "html", null, true);
            echo "
\t\t\t\t\t\t\tzł</strong>
\t\t\t\t\t</td>
\t\t\t\t\t<td></td>
\t\t\t\t\t<td></td>
\t\t\t\t\t<td></td>
\t\t\t\t\t<td></td>
\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['q'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 141
        echo "\t\t\t</tr>
\t\t\t";
        // line 142
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["sumaRodzaj"]) || array_key_exists("sumaRodzaj", $context) ? $context["sumaRodzaj"] : (function () { throw new RuntimeError('Variable "sumaRodzaj" does not exist.', 142, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["q2"]) {
            // line 143
            echo "\t\t\t\t";
            if (-1 === twig_compare(twig_get_attribute($this->env, $this->source, $context["q2"], 1, [], "any", false, false, false, 143), 0)) {
                // line 144
                echo "\t\t\t\t\t<tr class=\"text-right text-danger\">
\t\t\t\t\t";
            } else {
                // line 146
                echo "\t\t\t\t\t\t<tr class=\"text-right\">
\t\t\t\t\t\t";
            }
            // line 148
            echo "\t\t\t\t\t\t<td class=\"col-md-2\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["q2"], "rodzaj", [], "any", false, false, false, 148), "html", null, true);
            echo "</td>
\t\t\t\t\t\t<td class=\"col-md-2\">";
            // line 149
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["q2"], 1, [], "any", false, false, false, 149), 2, ",", " "), "html", null, true);
            echo "
\t\t\t\t\t\t\tzł</td>
\t\t\t\t\t\t<td></td>
\t\t\t\t\t\t<td></td>
\t\t\t\t\t\t<td></td>
\t\t\t\t\t\t<td></td>
\t\t\t\t\t</tr>
\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['q2'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 157
        echo "\t\t\t</table>
\t\t</div>
\t\t<div class=\"navigation text-center\">
\t\t\t";
        // line 160
        echo $this->extensions['Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension']->render($this->env, (isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 160, $this->source); })()));
        echo "
\t\t</div>

\t";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "dokumenty/index_new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  378 => 160,  373 => 157,  359 => 149,  354 => 148,  350 => 146,  346 => 144,  343 => 143,  339 => 142,  336 => 141,  322 => 133,  316 => 129,  312 => 128,  302 => 120,  288 => 111,  267 => 103,  259 => 98,  254 => 96,  250 => 95,  247 => 94,  239 => 90,  233 => 87,  230 => 86,  228 => 85,  222 => 82,  218 => 81,  214 => 80,  211 => 79,  193 => 78,  187 => 75,  183 => 74,  179 => 73,  175 => 72,  171 => 71,  158 => 60,  156 => 58,  147 => 53,  141 => 47,  133 => 41,  124 => 38,  116 => 33,  112 => 32,  104 => 27,  90 => 16,  86 => 15,  79 => 10,  75 => 9,  68 => 4,  58 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block body %}

\t<div
\t\tclass=\"panel panel-primary\">
\t\t<!-- Default panel contents -->
\t\t<div class=\"panel-heading\">
\t\t\t{% for ui in userinfo %}
\t\t\t\t<h3 class=\"panel-title pull-left\">Ewidencja przychodów i rozchodów
\t\t\t\t</h3>
\t\t\t\t<h3 class=\"panel-title pull-right \">

\t\t\t\t\tData ważności konta:
\t\t\t\t\t{{ ui.dataTermin | terminKonta }}
\t\t\t\t\t{{ panelStyle(ui.dataTermin) }}
\t\t\t\t</h3>
\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t</div>


\t\t\t<div class=\"panel-body\">
\t\t\t\t<table class=\"table\">
\t\t\t\t\t<tr>
\t\t\t\t\t\t<td class=\"col-md-3\">EP Producenta</td>
\t\t\t\t\t\t<td>:
\t\t\t\t\t\t\t{{ ui.ep }}</td>
\t\t\t\t\t</tr>
\t\t\t\t\t<tr>
\t\t\t\t\t\t<td class=\"col-md-3\">Beneficjent</td>
\t\t\t\t\t\t<td>:
\t\t\t\t\t\t\t{{ ui.nazwisko }}
\t\t\t\t\t\t\t{{ ui.imie }}</td>
\t\t\t\t\t</tr>
\t\t\t\t\t<tr>
\t\t\t\t\t\t<td class=\"col-md-3\">Znak sprawy</td>
\t\t\t\t\t\t<td>:
\t\t\t\t\t\t\t{{ ui.znaksprawy }}</td>
\t\t\t\t\t</tr>
\t\t\t\t{% endfor %}
\t\t\t</table>


\t\t\t<!-- List group -->
\t\t\t<ul class=\"list-group\">
\t\t\t\t<li class=\"list-group-item\">
\t\t\t\t\t<a class=\"btn btn-primary pull-left\" style=\"margin-right: 4px\" href=\"{{ url(\"dokumenty_dodaj\") }}\">
\t\t\t\t\t\t<span class=\"glyphicon glyphicon-plus\"></span>
\t\t\t\t\t\tDodaj</a>
\t\t\t\t\t{# <a class=\"btn btn-default pull-left\" href=\"{{ url(\"dokumenty_dane\") }}\">
\t\t\t\t\t\t\t\t\t\t\t<span class=\"glyphicon glyphicon-list-alt\"></span>
\t\t\t\t\t\t\t\t\t\t\tDane miesięczne</a> #}
\t\t\t\t\t<a href=\"{{ url(\"dokumenty_zbiorcze\") }}\" class=\"btn btn-default pull-left\">
\t\t\t\t\t\t<span class=\"glyphicon glyphicon-download-alt\"></span>
\t\t\t\t\t\tGeneruj zestawienie</a>

\t\t\t\t\t<!-- SearchForm by Controler -->
\t\t\t\t\t{{ render(controller(
                            'App\\\\Controller\\\\DokumentyController::searchBar'
                        )) }}
\t\t\t\t\t<div class=\"clearfix\"></div>

\t\t\t\t</li>
\t\t\t</ul>
\t\t</div>

\t\t<!-- Table -->
\t\t<table class=\"table\">
\t\t\t<tr>
\t\t\t\t<th>Lp.</th>
\t\t\t\t<th class=\"col-md-2\">{{ knp_pagination_sortable(pagination, 'Data', 'data')}}</th>
\t\t\t\t<th class=\"col-md-2\">{{ knp_pagination_sortable(pagination, 'Faktura', 'faktura')}}</th>
\t\t\t\t<th colspan=\"2\" class=\"col-md-2 text-center\">{{ knp_pagination_sortable(pagination, 'Kwota', 'kwota')}}</th>
\t\t\t\t<th class=\"col-md-2\">{{ knp_pagination_sortable(pagination, 'Rodzaj', 'rodzaj')}}</th>
\t\t\t\t<th class=\"col-md-2\">{{ knp_pagination_sortable(pagination, 'Uwagi', 'uwagi')}}</th>
\t\t\t\t<th class=\"col-md-2\">Akcje</th>
\t\t\t</tr>
\t\t\t{% for dokument in pagination %}
\t\t\t\t<tr>
\t\t\t\t\t<td>{{ loop.index }}.</td>
\t\t\t\t\t<td>{{ dokument.data | date(\"Y-m-d\") }}</td>
\t\t\t\t\t<td>{{ dokument.faktura }}</td>

\t\t\t\t\t<!-- podział kwoty na komórki: lewa dodatnia, prawa ujemna -->
\t\t\t\t\t{% if dokument.kwota < 0 %}
\t\t\t\t\t\t<td></td>
\t\t\t\t\t\t<td class=\"text-danger text-right\">{{ dokument.kwota | number_format(2, ',', ' ') }}
\t\t\t\t\t\t\tzł</td>
\t\t\t\t\t{% else %}
\t\t\t\t\t\t<td class=\"text-right\">{{ dokument.kwota | number_format(2, ',', ' ') }}
\t\t\t\t\t\t\tzł</td>
\t\t\t\t\t\t<td></td>
\t\t\t\t\t{% endif %}

\t\t\t\t\t<td class=\"text-uppercase\">{{ dokument.rodzaj }}</td>
\t\t\t\t\t<td>{{ dokument.uwagi }}</td>
\t\t\t\t\t<td>
\t\t\t\t\t\t<a href=\"{{ url(\"dokumenty_details\", {\"id\": dokument.id}) }}\">
\t\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-default btn-sm\">
\t\t\t\t\t\t\t\t<span class=\"glyphicon glyphicon-search\"></span>
\t\t\t\t\t\t\t\tInfo</button>
\t\t\t\t\t\t</a>
\t\t\t\t\t\t<a href=\"{{ url(\"dokumenty_edytuj\", {\"id\": dokument.id})}}\">
\t\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-primary btn-sm\">
\t\t\t\t\t\t\t\t<span class=\"glyphicon glyphicon-pencil\"></span>
\t\t\t\t\t\t\t\tEdytuj</button>
\t\t\t\t\t\t</a>
\t\t\t\t\t</td>
\t\t\t\t</tr>
\t\t\t{% else %}
\t\t\t\t<tr>
\t\t\t\t\t<td colspan=\"6\">Brak wpisów księgowych</td>
\t\t\t\t\t<td></td>
\t\t\t\t\t<td></td>
\t\t\t\t\t<td></td>
\t\t\t\t\t<td></td>
\t\t\t\t\t<td></td>
\t\t\t\t</tr>
\t\t\t{% endfor %}
\t\t</table>
\t</div>

\t<!-- Default panel contents -->
\t<div class=\"panel panel-primary\">
\t\t<div class=\"panel-heading\">Podsumowanie - wszystkiw wpisy</div>
\t\t<table class=\"table\">
\t\t\t<tr class=\"text-right\">
\t\t\t\t{% for q in sumaWszystkie %}
\t\t\t\t\t<td class=\"col-md-2\">
\t\t\t\t\t\t<strong>Razem</strong>
\t\t\t\t\t</td>
\t\t\t\t\t<td class=\"col-md-2\">
\t\t\t\t\t\t<strong>{{ q.1 | number_format(2, ',', ' ')}}
\t\t\t\t\t\t\tzł</strong>
\t\t\t\t\t</td>
\t\t\t\t\t<td></td>
\t\t\t\t\t<td></td>
\t\t\t\t\t<td></td>
\t\t\t\t\t<td></td>
\t\t\t\t{% endfor %}
\t\t\t</tr>
\t\t\t{% for q2 in sumaRodzaj %}
\t\t\t\t{% if q2.1 < 0 %}
\t\t\t\t\t<tr class=\"text-right text-danger\">
\t\t\t\t\t{% else %}
\t\t\t\t\t\t<tr class=\"text-right\">
\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t<td class=\"col-md-2\">{{ q2.rodzaj}}</td>
\t\t\t\t\t\t<td class=\"col-md-2\">{{ q2.1 | number_format(2, ',', ' ')}}
\t\t\t\t\t\t\tzł</td>
\t\t\t\t\t\t<td></td>
\t\t\t\t\t\t<td></td>
\t\t\t\t\t\t<td></td>
\t\t\t\t\t\t<td></td>
\t\t\t\t\t</tr>
\t\t\t\t{% endfor %}
\t\t\t</table>
\t\t</div>
\t\t<div class=\"navigation text-center\">
\t\t\t{{ knp_pagination_render(pagination) }}
\t\t</div>

\t{% endblock %}

", "dokumenty/index_new.html.twig", "/home/hystou/public_html/agro24/templates/dokumenty/index_new.html.twig");
    }
}
