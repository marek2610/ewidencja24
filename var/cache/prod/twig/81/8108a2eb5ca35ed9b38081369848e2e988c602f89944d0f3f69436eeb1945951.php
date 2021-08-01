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
class __TwigTemplate_bbb7e4c23267d3f95cb474acaf4938a1b0b53b0bf647a408b21030eb68383165 extends Template
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
        $this->parent = $this->loadTemplate("base.html.twig", "dokumenty/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 4
        echo "
\t<div class=\"panel panel-primary\">
\t\t<!-- Default panel contents -->
\t\t<div class=\"panel-heading\">
\t\t\t";
        // line 8
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["userinfo"] ?? null));
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
        echo $this->extensions['Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension']->sortable($this->env, ($context["pagination"] ?? null), "Data", "data");
        echo "</th>
\t\t\t\t<th class=\"col-md-2\">";
        // line 71
        echo $this->extensions['Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension']->sortable($this->env, ($context["pagination"] ?? null), "Faktura", "faktura");
        echo "</th>
\t\t\t\t<th colspan=\"2\" class=\"col-md-2 text-center\">";
        // line 72
        echo $this->extensions['Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension']->sortable($this->env, ($context["pagination"] ?? null), "Kwota", "kwota");
        echo "</th>
\t\t\t\t<th class=\"col-md-2\">";
        // line 73
        echo $this->extensions['Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension']->sortable($this->env, ($context["pagination"] ?? null), "Rodzaj", "rodzaj");
        echo "</th>
\t\t\t\t<th class=\"col-md-2\">";
        // line 74
        echo $this->extensions['Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension']->sortable($this->env, ($context["pagination"] ?? null), "Uwagi", "uwagi");
        echo "</th>
\t\t\t\t<th class=\"col-md-2\">Akcje</th>
\t\t\t</tr>
\t\t\t";
        // line 77
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["pagination"] ?? null));
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
        $context['_seq'] = twig_ensure_traversable(($context["sumaWszystkie"] ?? null));
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
            $context['_seq'] = twig_ensure_traversable(($context["sumaRodzaj"] ?? null));
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
        echo $this->extensions['Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension']->render($this->env, ($context["pagination"] ?? null));
        echo "
\t</div>

";
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
        return array (  371 => 171,  366 => 168,  364 => 167,  362 => 152,  359 => 150,  357 => 149,  348 => 145,  338 => 144,  332 => 142,  328 => 140,  324 => 138,  321 => 137,  316 => 136,  309 => 131,  303 => 127,  299 => 126,  289 => 118,  275 => 109,  254 => 101,  246 => 96,  241 => 94,  235 => 93,  232 => 92,  225 => 89,  219 => 86,  216 => 85,  214 => 84,  208 => 81,  204 => 80,  200 => 79,  197 => 78,  179 => 77,  173 => 74,  169 => 73,  165 => 72,  161 => 71,  157 => 70,  144 => 59,  142 => 57,  134 => 52,  128 => 49,  122 => 46,  114 => 40,  105 => 37,  97 => 32,  93 => 31,  85 => 26,  71 => 15,  67 => 14,  60 => 9,  56 => 8,  50 => 4,  46 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "dokumenty/index.html.twig", "/home/hystou/public_html/agro24/templates/dokumenty/index.html.twig");
    }
}
