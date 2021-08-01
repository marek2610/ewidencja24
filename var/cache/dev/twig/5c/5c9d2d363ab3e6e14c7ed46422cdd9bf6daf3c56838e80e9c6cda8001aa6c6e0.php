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

/* admin/dokumenty.html.twig */
class __TwigTemplate_872ff8315d7533da2f2730a6263dc065861da93f367d1cc581fe16ef1a92a7e2 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'dokumenty' => [$this, 'block_dokumenty'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "admin/base2.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/dokumenty.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/dokumenty.html.twig"));

        $this->parent = $this->loadTemplate("admin/base2.html.twig", "admin/dokumenty.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_dokumenty($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "dokumenty"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "dokumenty"));

        // line 4
        echo "
\t<div class=\"widget-box transparent\">
\t\t<div class=\"widget-header widget-header-large\">
\t\t\t<h3 class=\"widget-title grey lighter\">
\t\t\t\t<i class=\"ace-icon glyphicon glyphicon-file  green\"></i>
\t\t\t\tDokumenty
\t\t\t</h3>
\t\t</div>
\t</div>

\t<table id=\"simple-table\" class=\"table  table-bordered table-hover\">
\t\t<thead>
\t\t\t<tr>
\t\t\t\t<th>#</th>
\t\t\t\t<th>Data</th>
\t\t\t\t<th>Kwota</th>
\t\t\t\t<th>Faktura</th>
\t\t\t\t<th>Rodzaj</th>
\t\t\t\t<th>Uwagi</th>
\t\t\t\t<th>
\t\t\t\t\t<i class=\"ace-icon fa fa-clock-o bigger-110 hidden-480\"></i>
\t\t\t\t\tData utorzenia
\t\t\t\t</th>
\t\t\t\t<th>
\t\t\t\t\t<i class=\"ace-icon fa fa-clock-o bigger-110 hidden-480\"></i>
\t\t\t\t\tModyfikacja
\t\t\t\t</th>
\t\t\t\t<th>Status</th>
\t\t\t\t<th>User</th>
\t\t\t\t<th>Akcje</th>
\t\t\t</tr>
\t\t</thead>

\t\t";
        // line 37
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["dokumenty"]) || array_key_exists("dokumenty", $context) ? $context["dokumenty"] : (function () { throw new RuntimeError('Variable "dokumenty" does not exist.', 37, $this->source); })()));
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
            // line 38
            echo "\t\t\t<tbody>
\t\t\t\t<tr>
\t\t\t\t\t<td>";
            // line 40
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 40), "html", null, true);
            echo "</td>
\t\t\t\t\t<td>";
            // line 41
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["d"], "data", [], "any", false, false, false, 41), "Y-m-d"), "html", null, true);
            echo "</td>
\t\t\t\t\t<td>";
            // line 42
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["d"], "kwota", [], "any", false, false, false, 42), 2, ",", " "), "html", null, true);
            echo "</td>
\t\t\t\t\t<td>";
            // line 43
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["d"], "faktura", [], "any", false, false, false, 43), "html", null, true);
            echo "</td>
\t\t\t\t\t<td>";
            // line 44
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["d"], "rodzaj", [], "any", false, false, false, 44), "html", null, true);
            echo "</td>
\t\t\t\t\t<td>";
            // line 45
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["d"], "uwagi", [], "any", false, false, false, 45), "html", null, true);
            echo "</td>
\t\t\t\t\t<td>";
            // line 46
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["d"], "utworzony", [], "any", false, false, false, 46), "Y-m-d H:s"), "html", null, true);
            echo "</td>
\t\t\t\t\t<td>";
            // line 47
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["d"], "modyfikacja", [], "any", false, false, false, 47), "Y-m-d"), "html", null, true);
            echo "</td>
\t\t\t\t\t<td class=\"hidden-480\">
\t\t\t\t\t\t<span class=\"label label-sm label-";
            // line 49
            echo twig_escape_filter($this->env, $this->extensions['App\Twig\StatusDokument']->statusStyle(twig_get_attribute($this->env, $this->source, $context["d"], "status", [], "any", false, false, false, 49)), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_upper_filter($this->env, twig_get_attribute($this->env, $this->source, $context["d"], "status", [], "any", false, false, false, 49)), "html", null, true);
            echo "</span>
\t\t\t\t\t</td>
\t\t\t\t\t<td>";
            // line 51
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["d"], "owner", [], "any", false, false, false, 51), "username", [], "any", false, false, false, 51), "html", null, true);
            echo "</td>
\t\t\t\t\t<td>
\t\t\t\t\t\t<div class=\"hidden-sm hidden-xs btn-group\">
\t\t\t\t\t\t\t<button class=\"btn btn-xs btn-success\">
\t\t\t\t\t\t\t\t<i class=\"ace-icon fa fa-check bigger-120\"></i>
\t\t\t\t\t\t\t</button>

\t\t\t\t\t\t\t<button class=\"btn btn-xs btn-info\">
\t\t\t\t\t\t\t\t<i class=\"ace-icon fa fa-pencil bigger-120\"></i>
\t\t\t\t\t\t\t</button>

\t\t\t\t\t\t\t<button class=\"btn btn-xs btn-danger\">
\t\t\t\t\t\t\t\t<i class=\"ace-icon fa fa-trash-o bigger-120\"></i>
\t\t\t\t\t\t\t</button>

\t\t\t\t\t\t\t<button class=\"btn btn-xs btn-warning\">
\t\t\t\t\t\t\t\t<i class=\"ace-icon fa fa-flag bigger-120\"></i>
\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t</div>
\t\t\t\t\t</td>
\t\t\t\t</tr>
\t\t\t</tbody>
\t\t";
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
        // line 74
        echo "\t</table>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "admin/dokumenty.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  201 => 74,  164 => 51,  157 => 49,  152 => 47,  148 => 46,  144 => 45,  140 => 44,  136 => 43,  132 => 42,  128 => 41,  124 => 40,  120 => 38,  103 => 37,  68 => 4,  58 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'admin/base2.html.twig' %}

{% block dokumenty %}

\t<div class=\"widget-box transparent\">
\t\t<div class=\"widget-header widget-header-large\">
\t\t\t<h3 class=\"widget-title grey lighter\">
\t\t\t\t<i class=\"ace-icon glyphicon glyphicon-file  green\"></i>
\t\t\t\tDokumenty
\t\t\t</h3>
\t\t</div>
\t</div>

\t<table id=\"simple-table\" class=\"table  table-bordered table-hover\">
\t\t<thead>
\t\t\t<tr>
\t\t\t\t<th>#</th>
\t\t\t\t<th>Data</th>
\t\t\t\t<th>Kwota</th>
\t\t\t\t<th>Faktura</th>
\t\t\t\t<th>Rodzaj</th>
\t\t\t\t<th>Uwagi</th>
\t\t\t\t<th>
\t\t\t\t\t<i class=\"ace-icon fa fa-clock-o bigger-110 hidden-480\"></i>
\t\t\t\t\tData utorzenia
\t\t\t\t</th>
\t\t\t\t<th>
\t\t\t\t\t<i class=\"ace-icon fa fa-clock-o bigger-110 hidden-480\"></i>
\t\t\t\t\tModyfikacja
\t\t\t\t</th>
\t\t\t\t<th>Status</th>
\t\t\t\t<th>User</th>
\t\t\t\t<th>Akcje</th>
\t\t\t</tr>
\t\t</thead>

\t\t{% for d in dokumenty %}
\t\t\t<tbody>
\t\t\t\t<tr>
\t\t\t\t\t<td>{{ loop.index }}</td>
\t\t\t\t\t<td>{{ d.data | date(\"Y-m-d\") }}</td>
\t\t\t\t\t<td>{{ d.kwota | number_format(2, ',', ' ') }}</td>
\t\t\t\t\t<td>{{ d.faktura }}</td>
\t\t\t\t\t<td>{{ d.rodzaj }}</td>
\t\t\t\t\t<td>{{ d.uwagi }}</td>
\t\t\t\t\t<td>{{ d.utworzony | date(\"Y-m-d H:s\") }}</td>
\t\t\t\t\t<td>{{ d.modyfikacja | date(\"Y-m-d\") }}</td>
\t\t\t\t\t<td class=\"hidden-480\">
\t\t\t\t\t\t<span class=\"label label-sm label-{{ statusStyle(d.status) }}\">{{ d.status |upper  }}</span>
\t\t\t\t\t</td>
\t\t\t\t\t<td>{{ d.owner.username }}</td>
\t\t\t\t\t<td>
\t\t\t\t\t\t<div class=\"hidden-sm hidden-xs btn-group\">
\t\t\t\t\t\t\t<button class=\"btn btn-xs btn-success\">
\t\t\t\t\t\t\t\t<i class=\"ace-icon fa fa-check bigger-120\"></i>
\t\t\t\t\t\t\t</button>

\t\t\t\t\t\t\t<button class=\"btn btn-xs btn-info\">
\t\t\t\t\t\t\t\t<i class=\"ace-icon fa fa-pencil bigger-120\"></i>
\t\t\t\t\t\t\t</button>

\t\t\t\t\t\t\t<button class=\"btn btn-xs btn-danger\">
\t\t\t\t\t\t\t\t<i class=\"ace-icon fa fa-trash-o bigger-120\"></i>
\t\t\t\t\t\t\t</button>

\t\t\t\t\t\t\t<button class=\"btn btn-xs btn-warning\">
\t\t\t\t\t\t\t\t<i class=\"ace-icon fa fa-flag bigger-120\"></i>
\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t</div>
\t\t\t\t\t</td>
\t\t\t\t</tr>
\t\t\t</tbody>
\t\t{% endfor %}
\t</table>

{% endblock %}
", "admin/dokumenty.html.twig", "/home/hystou/public_html/agro24/templates/admin/dokumenty.html.twig");
    }
}
