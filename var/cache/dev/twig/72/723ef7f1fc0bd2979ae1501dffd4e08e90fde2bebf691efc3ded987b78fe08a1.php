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

/* dokumenty/dane.html.twig */
class __TwigTemplate_4461f81951d35bc0f4729246071b624d2be1291fc0c245c7df978dd55df17dd0 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "dokumenty/dane.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "dokumenty/dane.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "dokumenty/dane.html.twig", 1);
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
            <h3 class=\"panel-title\">Zestawienie miesięczne</h3>
        </div>
        <div class=\"panel-body\">
        
        <!-- Table -->
        <table class=\"table\">
            <tr>
                <th class=\"col-md-1\">#</th>
                <th class=\"col-md-3\">Rok / Miesiąc</th>
                <th class=\"col-md-3\">Kwota miesięcznych obrotów</th>
                <th class=\"col-md-3\">Miesięczny bilans</th>
                <th class=\"col-md-3\">Akcja</th>
            </tr>
                ";
        // line 20
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 20, $this->source); })()));
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
        foreach ($context['_seq'] as $context["_key"] => $context["q"]) {
            // line 21
            echo "            <tr> 
                <td>";
            // line 22
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 22), "html", null, true);
            echo ".</td>
                <td>";
            // line 23
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["q"], "data", [], "any", false, false, false, 23), "html", null, true);
            echo "</td>
                <td ";
            // line 24
            echo twig_escape_filter($this->env, $this->extensions['App\Twig\RodzajDokument']->kwotaStyleDokument(twig_get_attribute($this->env, $this->source, $context["q"], 1, [], "any", false, false, false, 24)), "html", null, true);
            echo ">";
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["q"], 1, [], "any", false, false, false, 24), 2, ",", " "), "html", null, true);
            echo " zł</td>
                <td ";
            // line 25
            echo twig_escape_filter($this->env, $this->extensions['App\Twig\RodzajDokument']->kwotaStyleDokument(twig_get_attribute($this->env, $this->source, $context["q"], 1, [], "any", false, false, false, 25)), "html", null, true);
            echo "> ";
            echo twig_escape_filter($this->env, $this->extensions['App\Twig\RodzajDokument']->kwotaBilansDokument(twig_get_attribute($this->env, $this->source, $context["q"], 1, [], "any", false, false, false, 25)), "html", null, true);
            echo "</td>
                <td>
                    <a href=\"";
            // line 27
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("dokumenty_danemiesiac", ["data" => twig_get_attribute($this->env, $this->source, $context["q"], "data", [], "any", false, false, false, 27)]), "html", null, true);
            echo "\">
                        <button type=\"button\" class=\"btn btn-default btn-sm\">
                            <span class=\"glyphicon glyphicon-search\"></span>
                            Info
                        </button>
                    </a>
                    <a href=\"";
            // line 33
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("dokumenty_zbiorcze_miesiac", ["data" => twig_get_attribute($this->env, $this->source, $context["q"], "data", [], "any", false, false, false, 33)]), "html", null, true);
            echo "\">
                        <button type=\"button\" class=\"btn btn-default btn-sm\">
                            <span class=\"glyphicon glyphicon-download-alt\"></span>
                            Pobierz
                        </button>
                    </a>
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['q'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 42
        echo "
        </table>
            <a class=\"btn btn-default\" href=\"";
        // line 44
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("dokumenty_index");
        echo "\"><span class=\"glyphicon glyphicon-arrow-left\"></span> Powrót</a>
        </div>
    </div>

    <!-- Default panel contents -->
    <div class=\"panel panel-primary\">
        <div class=\"panel-heading\">Podsumowanie - wszystkiw wpisy</div>
        <table class=\"table\">
            <tr class=\"text-right\">
                ";
        // line 53
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["sumaWszystkie"]) || array_key_exists("sumaWszystkie", $context) ? $context["sumaWszystkie"] : (function () { throw new RuntimeError('Variable "sumaWszystkie" does not exist.', 53, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["q"]) {
            // line 54
            echo "                    <td class=\"col-md-2\">
                        <strong>Razem</strong>
                    </td>
                    <td class=\"col-md-2\">
                        <strong>";
            // line 58
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["q"], 1, [], "any", false, false, false, 58), 2, ",", " "), "html", null, true);
            echo "
                            zł</strong>
                    </td>

                    ";
            // line 63
            echo "                    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["sumaRodzaj"]) || array_key_exists("sumaRodzaj", $context) ? $context["sumaRodzaj"] : (function () { throw new RuntimeError('Variable "sumaRodzaj" does not exist.', 63, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["q2"]) {
                // line 64
                echo "                        ";
                if (-1 === twig_compare(twig_get_attribute($this->env, $this->source, $context["q2"], 1, [], "any", false, false, false, 64), 0)) {
                    // line 65
                    echo "                            <td class=\"text-right text-danger\">
                            ";
                } else {
                    // line 67
                    echo "                                <td class=\"text-right\">
                                ";
                }
                // line 69
                echo "                                ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["q2"], "rodzaj", [], "any", false, false, false, 69), "html", null, true);
                echo "
                            </td>
                            <td ";
                // line 71
                echo twig_escape_filter($this->env, $this->extensions['App\Twig\RodzajDokument']->kwotaStyleDokument(twig_get_attribute($this->env, $this->source, $context["q2"], 1, [], "any", false, false, false, 71)), "html", null, true);
                echo ">";
                echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["q2"], 1, [], "any", false, false, false, 71), 2, ",", " "), "html", null, true);
                echo "</td>
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['q2'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 73
            echo "                        <td></td>
                        <td></td>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['q'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 76
        echo "                </table>
            </tr>
        </div>


    <div class=\"navigation text-center\">
  \t";
        // line 82
        echo $this->extensions['Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension']->render($this->env, (isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 82, $this->source); })()));
        echo "
\t</div>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "dokumenty/dane.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  240 => 82,  232 => 76,  224 => 73,  214 => 71,  208 => 69,  204 => 67,  200 => 65,  197 => 64,  192 => 63,  185 => 58,  179 => 54,  175 => 53,  163 => 44,  159 => 42,  136 => 33,  127 => 27,  120 => 25,  114 => 24,  110 => 23,  106 => 22,  103 => 21,  86 => 20,  68 => 4,  58 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block body %}

    <div class=\"panel panel-primary\">
        <div class=\"panel-heading\">
            <h3 class=\"panel-title\">Zestawienie miesięczne</h3>
        </div>
        <div class=\"panel-body\">
        
        <!-- Table -->
        <table class=\"table\">
            <tr>
                <th class=\"col-md-1\">#</th>
                <th class=\"col-md-3\">Rok / Miesiąc</th>
                <th class=\"col-md-3\">Kwota miesięcznych obrotów</th>
                <th class=\"col-md-3\">Miesięczny bilans</th>
                <th class=\"col-md-3\">Akcja</th>
            </tr>
                {% for q in pagination  %}
            <tr> 
                <td>{{ loop.index }}.</td>
                <td>{{ q.data }}</td>
                <td {{ q.1 | kwotaStyleDokument }}>{{ q.1 | number_format(2, ',', ' ')}} zł</td>
                <td {{ q.1 | kwotaStyleDokument }}> {{ q.1 | kwotaBilansDokument}}</td>
                <td>
                    <a href=\"{{ url('dokumenty_danemiesiac', {'data': q.data }) }}\">
                        <button type=\"button\" class=\"btn btn-default btn-sm\">
                            <span class=\"glyphicon glyphicon-search\"></span>
                            Info
                        </button>
                    </a>
                    <a href=\"{{ url('dokumenty_zbiorcze_miesiac', {'data': q.data }) }}\">
                        <button type=\"button\" class=\"btn btn-default btn-sm\">
                            <span class=\"glyphicon glyphicon-download-alt\"></span>
                            Pobierz
                        </button>
                    </a>
                </td>
            </tr>
                {% endfor %}

        </table>
            <a class=\"btn btn-default\" href=\"{{ url(\"dokumenty_index\") }}\"><span class=\"glyphicon glyphicon-arrow-left\"></span> Powrót</a>
        </div>
    </div>

    <!-- Default panel contents -->
    <div class=\"panel panel-primary\">
        <div class=\"panel-heading\">Podsumowanie - wszystkiw wpisy</div>
        <table class=\"table\">
            <tr class=\"text-right\">
                {% for q in sumaWszystkie %}
                    <td class=\"col-md-2\">
                        <strong>Razem</strong>
                    </td>
                    <td class=\"col-md-2\">
                        <strong>{{ q.1 | number_format(2, ',', ' ')}}
                            zł</strong>
                    </td>

                    {# ///// do skasowania #}
                    {% for q2 in sumaRodzaj %}
                        {% if q2.1 < 0 %}
                            <td class=\"text-right text-danger\">
                            {% else %}
                                <td class=\"text-right\">
                                {% endif %}
                                {{q2.rodzaj}}
                            </td>
                            <td {{ q2.1 | kwotaStyleDokument }}>{{ q2.1 | number_format(2, ',', ' ')}}</td>
                        {% endfor %}
                        <td></td>
                        <td></td>
                    {% endfor %}
                </table>
            </tr>
        </div>


    <div class=\"navigation text-center\">
  \t{{ knp_pagination_render(pagination) }}
\t</div>

{% endblock %}
", "dokumenty/dane.html.twig", "/home/hystou/public_html/agro24/templates/dokumenty/dane.html.twig");
    }
}
