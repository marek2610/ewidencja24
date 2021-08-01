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

/* dokumenty/test.html.twig */
class __TwigTemplate_0cc7920619805343ebb1d923775284d8cd2fc42e7a473cf459635b874710f146 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "dokumenty/test.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "dokumenty/test.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "dokumenty/test.html.twig", 1);
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
  <div class=\"panel-heading\">Strona testowa bez powiązania</div>

  <!-- Table -->
  <table class=\"table\">
\t\t<tr>
\t\t\t<th class=\"col-md-1\">#</th>
\t\t\t<th class=\"col-md-3\">Rok / Miesiąc</th>
\t\t\t<th class=\"col-md-3\">Bilans</th>
\t\t\t<th class=\"col-md-3\">Rodzaj</th>
\t\t\t<th class=\"col-md-3\">Akcja</th>
\t\t</tr>

";
        // line 19
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["query"]) || array_key_exists("query", $context) ? $context["query"] : (function () { throw new RuntimeError('Variable "query" does not exist.', 19, $this->source); })()));
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
            // line 20
            echo "        <tr>
          <td>";
            // line 21
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 21), "html", null, true);
            echo "</td>
          <td>
\t\t\t\t\t\t<a href=\"";
            // line 23
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("dokumenty_test_2", ["data" => twig_get_attribute($this->env, $this->source, $context["d"], "data", [], "any", false, false, false, 23)]), "html", null, true);
            echo "\">
\t\t\t\t\t\t\t";
            // line 24
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["d"], "data", [], "any", false, false, false, 24), "html", null, true);
            echo "
\t\t\t\t\t\t</a>
          </td>
          <td>";
            // line 27
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["d"], 1, [], "any", false, false, false, 27), 2, ",", " "), "html", null, true);
            echo "</td>
          ";
            // line 29
            echo "\t\t\t\t\t<td></td>
\t\t\t\t\t<td>
\t\t\t\t\t\t<a href=\"\">
\t\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-default btn-sm\">
\t\t\t\t\t\t\t\t<span class=\"glyphicon glyphicon-search\"></span>
\t\t\t\t\t\t\t\tInfo
\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t</a>
\t\t\t\t\t \t<a href=\"#\" class=\"btn btn-default btn-sm\" disabled><span class=\"glyphicon glyphicon-download-alt\"></span> Pobierz</a>
\t\t\t\t\t</td>
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
        // line 41
        echo "        
  </table>
</div>


";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "dokumenty/test.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  149 => 41,  124 => 29,  120 => 27,  114 => 24,  110 => 23,  105 => 21,  102 => 20,  85 => 19,  68 => 4,  58 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block body %}

  <div class=\"panel panel-primary\">
  <!-- Default panel contents -->
  <div class=\"panel-heading\">Strona testowa bez powiązania</div>

  <!-- Table -->
  <table class=\"table\">
\t\t<tr>
\t\t\t<th class=\"col-md-1\">#</th>
\t\t\t<th class=\"col-md-3\">Rok / Miesiąc</th>
\t\t\t<th class=\"col-md-3\">Bilans</th>
\t\t\t<th class=\"col-md-3\">Rodzaj</th>
\t\t\t<th class=\"col-md-3\">Akcja</th>
\t\t</tr>

{% for d in query  %}
        <tr>
          <td>{{loop.index}}</td>
          <td>
\t\t\t\t\t\t<a href=\"{{ url('dokumenty_test_2', {'data': d.data} ) }}\">
\t\t\t\t\t\t\t{{d.data}}
\t\t\t\t\t\t</a>
          </td>
          <td>{{d.1 | number_format(2, ',', ' ') }}</td>
          {# <td>{{d.2}}</td> #}
\t\t\t\t\t<td></td>
\t\t\t\t\t<td>
\t\t\t\t\t\t<a href=\"\">
\t\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-default btn-sm\">
\t\t\t\t\t\t\t\t<span class=\"glyphicon glyphicon-search\"></span>
\t\t\t\t\t\t\t\tInfo
\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t</a>
\t\t\t\t\t \t<a href=\"#\" class=\"btn btn-default btn-sm\" disabled><span class=\"glyphicon glyphicon-download-alt\"></span> Pobierz</a>
\t\t\t\t\t</td>
        </tr>
{% endfor %}
        
  </table>
</div>


{% endblock %}
", "dokumenty/test.html.twig", "/home/hystou/public_html/agro24/templates/dokumenty/test.html.twig");
    }
}
