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

/* dokumenty/index.html.twig */
class __TwigTemplate_d09e3636e4372d78733647b64a8d0e3afd1b8c820fabfd30be5e8289ff7491bd extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "dokumenty/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "dokumenty/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "dokumenty/index.html.twig", 1);
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
\t<div class=\"panel panel-primary\">
\t\t<!-- Default panel contents -->
\t\t<div class=\"panel-heading\">
\t\t\t";
        // line 8
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["userinfo"]) || array_key_exists("userinfo", $context) ? $context["userinfo"] : (function () { throw new RuntimeError('Variable "userinfo" does not exist.', 8, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["ui"]) {
            // line 9
            echo "\t\t\t\t<h3 class=\"panel-title pull-left\">Ewidencja przychodów i rozchodów
\t\t\t\t</h3>
\t\t\t\t<h3 class=\"panel-title pull-right \">

\t\t\t\t\tData ważności konta:
\t\t\t\t\t";
            // line 14
            echo twig_escape_filter($this->env, $this->extensions['App\Twig\DataTermin']->terminKonta(twig_get_attribute($this->env, $this->source, $context["ui"], "dataTermin", [], "any", false, false, false, 14)), "html", null, true);
            echo "
\t\t\t\t\t";
            // line 15
            echo twig_escape_filter($this->env, $this->extensions['App\Twig\DataTermin']->panelStyle(twig_get_attribute($this->env, $this->source, $context["ui"], "dataTermin", [], "any", false, false, false, 15)), "html", null, true);
            echo "
\t\t\t\t</h3>
\t\t\t\t<div class=\"clearfix\"></div>
\t\t</div>


\t\t<div class=\"panel-body\">
\t\t\t<table class=\"table\">
\t\t\t\t<tr>
\t\t\t\t\t<td class=\"col-md-3\">EP Producenta</td>
\t\t\t\t\t<td>:
\t\t\t\t\t\t";
            // line 26
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["ui"], "ep", [], "any", false, false, false, 26), "html", null, true);
            echo "</td>
\t\t\t\t</tr>
\t\t\t\t<tr>
\t\t\t\t\t<td class=\"col-md-3\">Beneficjent</td>
\t\t\t\t\t<td>:
\t\t\t\t\t\t";
            // line 31
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["ui"], "nazwisko", [], "any", false, false, false, 31), "html", null, true);
            echo "
\t\t\t\t\t\t";
            // line 32
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["ui"], "imie", [], "any", false, false, false, 32), "html", null, true);
            echo "</td>
\t\t\t\t</tr>
\t\t\t\t<tr>
\t\t\t\t\t<td class=\"col-md-3\">Znak sprawy</td>
\t\t\t\t\t<td>:
\t\t\t\t\t\t";
            // line 37
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["ui"], "znaksprawy", [], "any", false, false, false, 37), "html", null, true);
            echo "</td>
\t\t\t\t</tr>
\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ui'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 40
        echo "\t\t\t</table>


\t\t\t<!-- List group -->
\t\t\t<ul class=\"list-group\">
\t\t\t\t<li class=\"list-group-item\">
\t\t\t\t\t<a class=\"btn btn-primary pull-left\" style=\"margin-right: 4px\" href=\"";
        // line 46
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("dokumenty_dodaj");
        echo "\">
\t\t\t\t\t\t<span class=\"glyphicon glyphicon-plus\"></span>
\t\t\t\t\t\tDodaj</a>
\t\t\t\t\t<a class=\"btn btn-default pull-left\" style=\"margin-right: 4px\" href=\"";
        // line 49
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("dokumenty_dane");
        echo "\">
\t\t\t\t\t\t<span class=\"glyphicon glyphicon-list-alt\"></span>
\t\t\t\t\t\tDane miesięczne</a>
\t\t\t\t\t<a href=\"";
        // line 52
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("dokumenty_zbiorcze");
        echo "\" class=\"btn btn-default pull-left\">
\t\t\t\t\t\t<span class=\"glyphicon glyphicon-download-alt\"></span>
\t\t\t\t\t\tZestawienie zbiorcze</a>

\t\t\t\t\t<!-- SearchForm by Controler -->
\t\t\t\t\t";
        // line 57
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment(Symfony\Bridge\Twig\Extension\HttpKernelExtension::controller("App\\Controller\\DokumentyController::searchBar"));
        // line 59
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
        // line 70
        echo $this->extensions['Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension']->sortable($this->env, (isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 70, $this->source); })()), "Data", "data");
        echo "</th>
\t\t\t\t<th class=\"col-md-2\">";
        // line 71
        echo $this->extensions['Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension']->sortable($this->env, (isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 71, $this->source); })()), "Faktura", "faktura");
        echo "</th>
\t\t\t\t<th colspan=\"2\" class=\"col-md-2 text-center\">";
        // line 72
        echo $this->extensions['Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension']->sortable($this->env, (isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 72, $this->source); })()), "Kwota", "kwota");
        echo "</th>
\t\t\t\t<th class=\"col-md-2\">";
        // line 73
        echo $this->extensions['Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension']->sortable($this->env, (isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 73, $this->source); })()), "Rodzaj", "rodzaj");
        echo "</th>
\t\t\t\t<th class=\"col-md-2\">";
        // line 74
        echo $this->extensions['Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension']->sortable($this->env, (isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 74, $this->source); })()), "Uwagi", "uwagi");
        echo "</th>
\t\t\t\t<th class=\"col-md-2\">Akcje</th>
\t\t\t</tr>
\t\t\t";
        // line 77
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 77, $this->source); })()));
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
            // line 78
            echo "\t\t\t<tr>
\t\t\t\t<td>";
            // line 79
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 79), "html", null, true);
            echo ".</td>
\t\t\t\t<td>";
            // line 80
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["dokument"], "data", [], "any", false, false, false, 80), "Y-m-d"), "html", null, true);
            echo "</td>
\t\t\t\t<td>";
            // line 81
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["dokument"], "faktura", [], "any", false, false, false, 81), "html", null, true);
            echo "</td>

\t\t\t\t<!-- podział kwoty na komórki: lewa dodatnia, prawa ujemna -->
\t\t\t\t";
            // line 84
            if (-1 === twig_compare(twig_get_attribute($this->env, $this->source, $context["dokument"], "kwota", [], "any", false, false, false, 84), 0)) {
                // line 85
                echo "\t\t\t\t<td></td>
\t\t\t\t<td class=\"text-danger text-right\">";
                // line 86
                echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["dokument"], "kwota", [], "any", false, false, false, 86), 2, ",", " "), "html", null, true);
                echo "
\t\t\t\tzł</td>
\t\t\t\t";
            } else {
                // line 89
                echo "\t\t\t\t<td class=\"text-right\">";
                echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["dokument"], "kwota", [], "any", false, false, false, 89), 2, ",", " "), "html", null, true);
                echo " zł</td>
\t\t\t\t<td></td>
\t\t\t\t";
            }
            // line 92
            echo "
\t\t\t\t<td class=\"text-uppercase ";
            // line 93
            echo twig_escape_filter($this->env, $this->extensions['App\Twig\RodzajDokument']->rodzajEwidencjaStyleDokument(twig_get_attribute($this->env, $this->source, $context["dokument"], "rodzaj", [], "any", false, false, false, 93)), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["dokument"], "rodzaj", [], "any", false, false, false, 93), "html", null, true);
            echo "</td>
\t\t\t\t<td>";
            // line 94
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["dokument"], "uwagi", [], "any", false, false, false, 94), "html", null, true);
            echo "</td>
\t\t\t\t<td>
\t\t\t\t\t<a href=\"";
            // line 96
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("dokumenty_details", ["id" => twig_get_attribute($this->env, $this->source, $context["dokument"], "id", [], "any", false, false, false, 96)]), "html", null, true);
            echo "\">
\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-default btn-sm\">
\t\t\t\t\t\t\t<span class=\"glyphicon glyphicon-search\"></span>
\t\t\t\t\t\t\tInfo</button>
\t\t\t\t\t</a>
\t\t\t\t\t<a href=\"";
            // line 101
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("dokumenty_edytuj", ["id" => twig_get_attribute($this->env, $this->source, $context["dokument"], "id", [], "any", false, false, false, 101)]), "html", null, true);
            echo "\">
\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-primary btn-sm\">
\t\t\t\t\t\t\t<span class=\"glyphicon glyphicon-pencil\"></span>
\t\t\t\t\t\t\tEdytuj</button>
\t\t\t\t\t</a>
\t\t\t\t</td>
\t\t\t</tr>
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
            // line 109
            echo "\t\t\t<tr>
\t\t\t\t<td colspan=\"6\">Brak wpisów księgowych</td>
\t\t\t\t<td></td>
\t\t\t\t<td></td>
\t\t\t\t<td></td>
\t\t\t\t<td></td>
\t\t\t\t<td></td>
\t\t\t</tr>
\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['dokument'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 118
        echo "\t\t</table>
\t</div>

<!-- Default panel contents -->
<div class=\"panel panel-primary\">
\t<div class=\"panel-heading\">Podsumowanie - wszystkiw wpisy</div>
\t<table class=\"table\">
\t\t<tr class=\"text-right\">
\t\t\t";
        // line 126
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["sumaWszystkie"]) || array_key_exists("sumaWszystkie", $context) ? $context["sumaWszystkie"] : (function () { throw new RuntimeError('Variable "sumaWszystkie" does not exist.', 126, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["q"]) {
            // line 127
            echo "\t\t\t\t<td class=\"col-md-2\">
\t\t\t\t\t<strong>Razem</strong>
\t\t\t\t</td>
\t\t\t\t<td class=\"col-md-2\">
\t\t\t\t\t<strong>";
            // line 131
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["q"], 1, [], "any", false, false, false, 131), 2, ",", " "), "html", null, true);
            echo "
\t\t\t\t\t\tzł</strong>
\t\t\t\t</td>

\t\t\t\t";
            // line 136
            echo "\t\t\t\t";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["sumaRodzaj"]) || array_key_exists("sumaRodzaj", $context) ? $context["sumaRodzaj"] : (function () { throw new RuntimeError('Variable "sumaRodzaj" does not exist.', 136, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["q2"]) {
                // line 137
                echo "\t\t\t\t";
                if (-1 === twig_compare(twig_get_attribute($this->env, $this->source, $context["q2"], 1, [], "any", false, false, false, 137), 0)) {
                    // line 138
                    echo "\t\t\t\t<td class=\"text-right text-danger\">
\t\t\t\t";
                } else {
                    // line 140
                    echo "\t\t\t\t<td class=\"text-right\">
\t\t\t\t";
                }
                // line 142
                echo "\t\t\t\t\t";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["q2"], "rodzaj", [], "any", false, false, false, 142), "html", null, true);
                echo "
\t\t\t\t\t</td>
\t\t\t\t<td ";
                // line 144
                echo twig_escape_filter($this->env, $this->extensions['App\Twig\RodzajDokument']->kwotaStyleDokument(twig_get_attribute($this->env, $this->source, $context["q2"], 1, [], "any", false, false, false, 144)), "html", null, true);
                echo ">";
                echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["q2"], 1, [], "any", false, false, false, 144), 2, ",", " "), "html", null, true);
                echo "</td>
\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['q2'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 145
            echo " 
\t\t\t\t<td></td>
\t\t\t\t<td></td>
\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['q'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 149
        echo "\t\t\t\t";
        // line 150
        echo "
\t\t";
        // line 152
        echo "\t\t";
        // line 167
        echo "\t\t\t";
        // line 168
        echo "\t\t</table>
</div>
\t<div class=\"navigation text-center\">
  \t";
        // line 171
        echo $this->extensions['Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension']->render($this->env, (isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 171, $this->source); })()));
        echo "
\t</div>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "dokumenty/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  389 => 171,  384 => 168,  382 => 167,  380 => 152,  377 => 150,  375 => 149,  366 => 145,  356 => 144,  350 => 142,  346 => 140,  342 => 138,  339 => 137,  334 => 136,  327 => 131,  321 => 127,  317 => 126,  307 => 118,  293 => 109,  272 => 101,  264 => 96,  259 => 94,  253 => 93,  250 => 92,  243 => 89,  237 => 86,  234 => 85,  232 => 84,  226 => 81,  222 => 80,  218 => 79,  215 => 78,  197 => 77,  191 => 74,  187 => 73,  183 => 72,  179 => 71,  175 => 70,  162 => 59,  160 => 57,  152 => 52,  146 => 49,  140 => 46,  132 => 40,  123 => 37,  115 => 32,  111 => 31,  103 => 26,  89 => 15,  85 => 14,  78 => 9,  74 => 8,  68 => 4,  58 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block body %}

\t<div class=\"panel panel-primary\">
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
\t\t</div>


\t\t<div class=\"panel-body\">
\t\t\t<table class=\"table\">
\t\t\t\t<tr>
\t\t\t\t\t<td class=\"col-md-3\">EP Producenta</td>
\t\t\t\t\t<td>:
\t\t\t\t\t\t{{ ui.ep }}</td>
\t\t\t\t</tr>
\t\t\t\t<tr>
\t\t\t\t\t<td class=\"col-md-3\">Beneficjent</td>
\t\t\t\t\t<td>:
\t\t\t\t\t\t{{ ui.nazwisko }}
\t\t\t\t\t\t{{ ui.imie }}</td>
\t\t\t\t</tr>
\t\t\t\t<tr>
\t\t\t\t\t<td class=\"col-md-3\">Znak sprawy</td>
\t\t\t\t\t<td>:
\t\t\t\t\t\t{{ ui.znaksprawy }}</td>
\t\t\t\t</tr>
\t\t\t{% endfor %}
\t\t\t</table>


\t\t\t<!-- List group -->
\t\t\t<ul class=\"list-group\">
\t\t\t\t<li class=\"list-group-item\">
\t\t\t\t\t<a class=\"btn btn-primary pull-left\" style=\"margin-right: 4px\" href=\"{{ url(\"dokumenty_dodaj\") }}\">
\t\t\t\t\t\t<span class=\"glyphicon glyphicon-plus\"></span>
\t\t\t\t\t\tDodaj</a>
\t\t\t\t\t<a class=\"btn btn-default pull-left\" style=\"margin-right: 4px\" href=\"{{ url(\"dokumenty_dane\") }}\">
\t\t\t\t\t\t<span class=\"glyphicon glyphicon-list-alt\"></span>
\t\t\t\t\t\tDane miesięczne</a>
\t\t\t\t\t<a href=\"{{ url(\"dokumenty_zbiorcze\") }}\" class=\"btn btn-default pull-left\">
\t\t\t\t\t\t<span class=\"glyphicon glyphicon-download-alt\"></span>
\t\t\t\t\t\tZestawienie zbiorcze</a>

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
\t\t\t<tr>
\t\t\t\t<td>{{ loop.index }}.</td>
\t\t\t\t<td>{{ dokument.data | date(\"Y-m-d\") }}</td>
\t\t\t\t<td>{{ dokument.faktura }}</td>

\t\t\t\t<!-- podział kwoty na komórki: lewa dodatnia, prawa ujemna -->
\t\t\t\t{% if dokument.kwota < 0 %}
\t\t\t\t<td></td>
\t\t\t\t<td class=\"text-danger text-right\">{{ dokument.kwota | number_format(2, ',', ' ') }}
\t\t\t\tzł</td>
\t\t\t\t{% else %}
\t\t\t\t<td class=\"text-right\">{{ dokument.kwota | number_format(2, ',', ' ') }} zł</td>
\t\t\t\t<td></td>
\t\t\t\t{% endif %}

\t\t\t\t<td class=\"text-uppercase {{ dokument.rodzaj | rodzajEwidencjaStyleDokument}}\">{{ dokument.rodzaj }}</td>
\t\t\t\t<td>{{ dokument.uwagi }}</td>
\t\t\t\t<td>
\t\t\t\t\t<a href=\"{{ url(\"dokumenty_details\", {\"id\": dokument.id}) }}\">
\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-default btn-sm\">
\t\t\t\t\t\t\t<span class=\"glyphicon glyphicon-search\"></span>
\t\t\t\t\t\t\tInfo</button>
\t\t\t\t\t</a>
\t\t\t\t\t<a href=\"{{ url(\"dokumenty_edytuj\", {\"id\": dokument.id})}}\">
\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-primary btn-sm\">
\t\t\t\t\t\t\t<span class=\"glyphicon glyphicon-pencil\"></span>
\t\t\t\t\t\t\tEdytuj</button>
\t\t\t\t\t</a>
\t\t\t\t</td>
\t\t\t</tr>
\t\t\t{% else %}
\t\t\t<tr>
\t\t\t\t<td colspan=\"6\">Brak wpisów księgowych</td>
\t\t\t\t<td></td>
\t\t\t\t<td></td>
\t\t\t\t<td></td>
\t\t\t\t<td></td>
\t\t\t\t<td></td>
\t\t\t</tr>
\t\t\t{% endfor %}
\t\t</table>
\t</div>

<!-- Default panel contents -->
<div class=\"panel panel-primary\">
\t<div class=\"panel-heading\">Podsumowanie - wszystkiw wpisy</div>
\t<table class=\"table\">
\t\t<tr class=\"text-right\">
\t\t\t{% for q in sumaWszystkie %}
\t\t\t\t<td class=\"col-md-2\">
\t\t\t\t\t<strong>Razem</strong>
\t\t\t\t</td>
\t\t\t\t<td class=\"col-md-2\">
\t\t\t\t\t<strong>{{ q.1 | number_format(2, ',', ' ')}}
\t\t\t\t\t\tzł</strong>
\t\t\t\t</td>

\t\t\t\t{# ///// do skasowania #}
\t\t\t\t{% for q2 in sumaRodzaj %}
\t\t\t\t{% if q2.1 < 0 %}
\t\t\t\t<td class=\"text-right text-danger\">
\t\t\t\t{% else %}
\t\t\t\t<td class=\"text-right\">
\t\t\t\t{% endif %}
\t\t\t\t\t{{q2.rodzaj}}
\t\t\t\t\t</td>
\t\t\t\t<td {{ q2.1 | kwotaStyleDokument }}>{{ q2.1 | number_format(2, ',', ' ')}}</td>
\t\t\t\t{% endfor %} 
\t\t\t\t<td></td>
\t\t\t\t<td></td>
\t\t\t{% endfor %}
\t\t\t\t{# ///// do skasowania #}

\t\t{# ///// do odtworzenia #}
\t\t{# {% for q2 in sumaRodzaj %}
\t\t\t{% if q2.1 < 0 %}
\t\t\t\t<tr class=\"text-right text-danger\">
\t\t\t\t{% else %}
\t\t\t\t\t<tr class=\"text-right\">
\t\t\t\t\t{% endif %}
\t\t\t\t\t<td class=\"col-md-2\"></td>
\t\t\t\t\t<td class=\"col-md-2\">{{ q2.1 | number_format(2, ',', ' ')}}
\t\t\t\t\t\tzł</td>
\t\t\t\t\t<td></td>
\t\t\t\t\t<td></td>
\t\t\t\t\t<td></td>
\t\t\t\t\t<td></td>
\t\t\t\t</tr>
\t\t\t{% endfor %} #}
\t\t\t{# ///// do odtworzenia #}
\t\t</table>
</div>
\t<div class=\"navigation text-center\">
  \t{{ knp_pagination_render(pagination) }}
\t</div>

{% endblock %}
", "dokumenty/index.html.twig", "/home/hystou/public_html/agro24/templates/dokumenty/index.html.twig");
    }
}
