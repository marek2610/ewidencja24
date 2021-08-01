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

/* dokumenty/danemiesiac.html.twig */
class __TwigTemplate_8dc7d117078af371d511d0e4916c7896d70ef015f5124412a53b0d3d1c206bf7 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "dokumenty/danemiesiac.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "dokumenty/danemiesiac.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "dokumenty/danemiesiac.html.twig", 1);
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
            <h3 class=\"panel-title\">Zestawienie miesięczne za okres: ";
        // line 7
        echo twig_escape_filter($this->env, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 7, $this->source); })()), "html", null, true);
        echo "</h3>
        </div>
        <div class=\"panel-body\">
        
        <!-- Table -->
        <table class=\"table\">
            <tr>
                <th>#</th>
                <th class=\"col-md-2\">";
        // line 15
        echo $this->extensions['Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension']->sortable($this->env, (isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 15, $this->source); })()), "Data", "data");
        echo "</th>
                <th class=\"col-md-2\">";
        // line 16
        echo $this->extensions['Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension']->sortable($this->env, (isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 16, $this->source); })()), "Faktura", "faktura");
        echo "</th>
                <th colspan=\"2\" class=\"col-md-2 text-center\">";
        // line 17
        echo $this->extensions['Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension']->sortable($this->env, (isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 17, $this->source); })()), "Kwota", "kwota");
        echo "</th>
                <th class=\"col-md-2\">";
        // line 18
        echo $this->extensions['Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension']->sortable($this->env, (isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 18, $this->source); })()), "Rodzaj", "rodzaj");
        echo "</th>
                <th class=\"col-md-2\">";
        // line 19
        echo $this->extensions['Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension']->sortable($this->env, (isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 19, $this->source); })()), "Uwagi", "uwagi");
        echo "</th>
                <th class=\"col-md-2\">Akcja</th>
            </tr>
                ";
        // line 22
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 22, $this->source); })()));
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
        foreach ($context['_seq'] as $context["_key"] => $context["d"]) {
            // line 23
            echo "            <tr> 
                <td>";
            // line 24
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 24), "html", null, true);
            echo "</td>
                <td>";
            // line 25
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["d"], "data", [], "any", false, false, false, 25), "Y-m-d"), "html", null, true);
            echo "</td>
                <td>";
            // line 26
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["d"], "faktura", [], "any", false, false, false, 26), "html", null, true);
            echo "</td>
                <!-- podział kwoty na komórki: lewa dodatnia, prawa ujemna -->
\t\t\t\t";
            // line 28
            if (-1 === twig_compare(twig_get_attribute($this->env, $this->source, $context["d"], "kwota", [], "any", false, false, false, 28), 0)) {
                // line 29
                echo "\t\t\t\t<td></td>
\t\t\t\t<td class=\"text-danger text-right\">";
                // line 30
                echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["d"], "kwota", [], "any", false, false, false, 30), 2, ",", " "), "html", null, true);
                echo "
\t\t\t\tzł</td>
\t\t\t\t";
            } else {
                // line 33
                echo "\t\t\t\t<td class=\"text-right\">";
                echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["d"], "kwota", [], "any", false, false, false, 33), 2, ",", " "), "html", null, true);
                echo " zł</td>
\t\t\t\t<td></td>
\t\t\t\t";
            }
            // line 36
            echo "                <td class=\"text-uppercase ";
            echo twig_escape_filter($this->env, $this->extensions['App\Twig\RodzajDokument']->rodzajEwidencjaStyleDokument(twig_get_attribute($this->env, $this->source, $context["d"], "rodzaj", [], "any", false, false, false, 36)), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["d"], "rodzaj", [], "any", false, false, false, 36), "html", null, true);
            echo "</td>
                <td>";
            // line 37
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["d"], "uwagi", [], "any", false, false, false, 37), "html", null, true);
            echo "</td>
                <td>
                    <a href=\"";
            // line 39
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("dokumenty_details", ["id" => twig_get_attribute($this->env, $this->source, $context["d"], "id", [], "any", false, false, false, 39)]), "html", null, true);
            echo "\">
\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-default btn-sm\">
\t\t\t\t\t\t\t<span class=\"glyphicon glyphicon-search\"></span>
\t\t\t\t\t\t\tInfo</button>
\t\t\t\t\t</a>
\t\t\t\t\t<a href=\"";
            // line 44
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("dokumenty_edytuj", ["id" => twig_get_attribute($this->env, $this->source, $context["d"], "id", [], "any", false, false, false, 44)]), "html", null, true);
            echo "\">
\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-primary btn-sm\">
\t\t\t\t\t\t\t<span class=\"glyphicon glyphicon-pencil\"></span>
\t\t\t\t\t\t\tEdytuj</button>
\t\t\t\t\t</a>
                </td>
            </tr>
                ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['d'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 52
        echo "
        </table>

                <a class=\"btn btn-default\" href=\"";
        // line 55
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("dokumenty_index");
        echo "\"><span class=\"glyphicon glyphicon-arrow-left\"></span> Powrót</a>
            
        </div>
    </div>

    <div class=\"panel panel-primary\">
\t<div class=\"panel-heading\">Podsumowanie miesięczne</div>
\t<table class=\"table\">
\t\t<tr class=\"text-right\">
\t\t\t";
        // line 64
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["sumaWszystkie"]) || array_key_exists("sumaWszystkie", $context) ? $context["sumaWszystkie"] : (function () { throw new RuntimeError('Variable "sumaWszystkie" does not exist.', 64, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["q"]) {
            // line 65
            echo "\t\t\t\t<td class=\"col-md-2\">
\t\t\t\t\t<strong>Razem</strong>
\t\t\t\t</td>
\t\t\t\t<td class=\"col-md-2\">
\t\t\t\t\t<strong>";
            // line 69
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["q"], 1, [], "any", false, false, false, 69), 2, ",", " "), "html", null, true);
            echo "
\t\t\t\t\t\tzł</strong>
\t\t\t\t</td>

\t\t\t\t";
            // line 74
            echo "\t\t\t\t";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["sumaRodzaj"]) || array_key_exists("sumaRodzaj", $context) ? $context["sumaRodzaj"] : (function () { throw new RuntimeError('Variable "sumaRodzaj" does not exist.', 74, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["q2"]) {
                // line 75
                echo "\t\t\t\t";
                if (-1 === twig_compare(twig_get_attribute($this->env, $this->source, $context["q2"], 1, [], "any", false, false, false, 75), 0)) {
                    // line 76
                    echo "\t\t\t\t<td class=\"text-right text-danger\">
\t\t\t\t";
                } else {
                    // line 78
                    echo "\t\t\t\t<td class=\"text-right\">
\t\t\t\t";
                }
                // line 80
                echo "\t\t\t\t\t";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["q2"], "rodzaj", [], "any", false, false, false, 80), "html", null, true);
                echo "
\t\t\t\t\t</td>
\t\t\t\t<td ";
                // line 82
                echo twig_escape_filter($this->env, $this->extensions['App\Twig\RodzajDokument']->kwotaStyleDokument(twig_get_attribute($this->env, $this->source, $context["q2"], 1, [], "any", false, false, false, 82)), "html", null, true);
                echo ">";
                echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["q2"], 1, [], "any", false, false, false, 82), 2, ",", " "), "html", null, true);
                echo "</td>
\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['q2'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 83
            echo " 
\t\t\t\t<td></td>
\t\t\t\t<td></td>
\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['q'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 87
        echo "\t\t\t\t";
        // line 88
        echo "
\t\t";
        // line 90
        echo "\t\t";
        // line 105
        echo "\t\t\t";
        // line 106
        echo "\t\t</table>
</div>

    <div class=\"navigation text-center\">
            ";
        // line 110
        echo $this->extensions['Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension']->render($this->env, (isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 110, $this->source); })()));
        echo "
    </div>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "dokumenty/danemiesiac.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  289 => 110,  283 => 106,  281 => 105,  279 => 90,  276 => 88,  274 => 87,  265 => 83,  255 => 82,  249 => 80,  245 => 78,  241 => 76,  238 => 75,  233 => 74,  226 => 69,  220 => 65,  216 => 64,  204 => 55,  199 => 52,  177 => 44,  169 => 39,  164 => 37,  157 => 36,  150 => 33,  144 => 30,  141 => 29,  139 => 28,  134 => 26,  130 => 25,  126 => 24,  123 => 23,  106 => 22,  100 => 19,  96 => 18,  92 => 17,  88 => 16,  84 => 15,  73 => 7,  68 => 4,  58 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block body %}

    <div class=\"panel panel-primary\">
        <div class=\"panel-heading\">
            <h3 class=\"panel-title\">Zestawienie miesięczne za okres: {{ data }}</h3>
        </div>
        <div class=\"panel-body\">
        
        <!-- Table -->
        <table class=\"table\">
            <tr>
                <th>#</th>
                <th class=\"col-md-2\">{{ knp_pagination_sortable(pagination, 'Data', 'data')}}</th>
                <th class=\"col-md-2\">{{ knp_pagination_sortable(pagination, 'Faktura', 'faktura')}}</th>
                <th colspan=\"2\" class=\"col-md-2 text-center\">{{ knp_pagination_sortable(pagination, 'Kwota', 'kwota')}}</th>
                <th class=\"col-md-2\">{{ knp_pagination_sortable(pagination, 'Rodzaj', 'rodzaj')}}</th>
                <th class=\"col-md-2\">{{ knp_pagination_sortable(pagination, 'Uwagi', 'uwagi')}}</th>
                <th class=\"col-md-2\">Akcja</th>
            </tr>
                {% for d in pagination %}
            <tr> 
                <td>{{ loop.index }}</td>
                <td>{{ d.data | date(\"Y-m-d\") }}</td>
                <td>{{ d.faktura }}</td>
                <!-- podział kwoty na komórki: lewa dodatnia, prawa ujemna -->
\t\t\t\t{% if d.kwota < 0 %}
\t\t\t\t<td></td>
\t\t\t\t<td class=\"text-danger text-right\">{{ d.kwota | number_format(2, ',', ' ') }}
\t\t\t\tzł</td>
\t\t\t\t{% else %}
\t\t\t\t<td class=\"text-right\">{{ d.kwota | number_format(2, ',', ' ') }} zł</td>
\t\t\t\t<td></td>
\t\t\t\t{% endif %}
                <td class=\"text-uppercase {{ d.rodzaj | rodzajEwidencjaStyleDokument}}\">{{ d.rodzaj }}</td>
                <td>{{ d.uwagi }}</td>
                <td>
                    <a href=\"{{ url(\"dokumenty_details\", {\"id\": d.id}) }}\">
\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-default btn-sm\">
\t\t\t\t\t\t\t<span class=\"glyphicon glyphicon-search\"></span>
\t\t\t\t\t\t\tInfo</button>
\t\t\t\t\t</a>
\t\t\t\t\t<a href=\"{{ url(\"dokumenty_edytuj\", {\"id\": d.id})}}\">
\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-primary btn-sm\">
\t\t\t\t\t\t\t<span class=\"glyphicon glyphicon-pencil\"></span>
\t\t\t\t\t\t\tEdytuj</button>
\t\t\t\t\t</a>
                </td>
            </tr>
                {% endfor %}

        </table>

                <a class=\"btn btn-default\" href=\"{{ url(\"dokumenty_index\") }}\"><span class=\"glyphicon glyphicon-arrow-left\"></span> Powrót</a>
            
        </div>
    </div>

    <div class=\"panel panel-primary\">
\t<div class=\"panel-heading\">Podsumowanie miesięczne</div>
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

    <div class=\"navigation text-center\">
            {{ knp_pagination_render(pagination) }}
    </div>

{% endblock %}
", "dokumenty/danemiesiac.html.twig", "/home/hystou/public_html/agro24/templates/dokumenty/danemiesiac.html.twig");
    }
}
