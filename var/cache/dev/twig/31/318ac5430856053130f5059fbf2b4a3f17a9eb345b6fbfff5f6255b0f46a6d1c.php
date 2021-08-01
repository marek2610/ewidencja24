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

/* admin/message.html.twig */
class __TwigTemplate_a25499c4959a287ec083b92e26055f819628bc71855fb9eccf723309d0c8352e extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'message' => [$this, 'block_message'],
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/message.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/message.html.twig"));

        $this->parent = $this->loadTemplate("admin/base2.html.twig", "admin/message.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_message($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "message"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "message"));

        // line 4
        echo "
\t<div class=\"widget-box transparent\">
\t\t<div class=\"widget-header widget-header-large\">
\t\t\t<h3 class=\"widget-title grey lighter\">
\t\t\t\t<i class=\"ace-icon fa fa-envelope green\"></i>
\t\t\t\tMessage
\t\t\t</h3>
\t\t</div>
\t</div>

\t<table id=\"simple-table\" class=\"table  table-bordered table-hover\">
\t\t<thead>
\t\t\t<tr>
\t\t\t\t<th>#</th>
\t\t\t\t<th>Imię</th>
\t\t\t\t<th>Nazwisko</th>
\t\t\t\t<th>email</th>
\t\t\t\t<th>Temat</th>
\t\t\t\t<th>
\t\t\t\t\t<i class=\"ace-icon fa fa-clock-o bigger-110 hidden-480\"></i>
\t\t\t\t\tData utorzenia
\t\t\t\t</th>
\t\t\t\t<th>Status</th>
\t\t\t\t<th>Akcje</th>
\t\t\t</tr>
\t\t</thead>

\t\t";
        // line 31
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["wiadomosci"]) || array_key_exists("wiadomosci", $context) ? $context["wiadomosci"] : (function () { throw new RuntimeError('Variable "wiadomosci" does not exist.', 31, $this->source); })()));
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
        foreach ($context['_seq'] as $context["_key"] => $context["w"]) {
            // line 32
            echo "\t\t\t<tbody>
\t\t\t\t<tr>
\t\t\t\t\t<td>";
            // line 34
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 34), "html", null, true);
            echo "</td>
\t\t\t\t\t<td>";
            // line 35
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["w"], "imie", [], "any", false, false, false, 35), "html", null, true);
            echo "</td>
\t\t\t\t\t<td>";
            // line 36
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["w"], "nazwisko", [], "any", false, false, false, 36), "html", null, true);
            echo "</td>
\t\t\t\t\t<td>";
            // line 37
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["w"], "email", [], "any", false, false, false, 37), "html", null, true);
            echo "</td>
\t\t\t\t\t<td>";
            // line 38
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["w"], "temat", [], "any", false, false, false, 38), "html", null, true);
            echo "</td>
\t\t\t\t\t<td>";
            // line 39
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["w"], "dataUtworzenia", [], "any", false, false, false, 39), "Y-m-d H:s"), "html", null, true);
            echo "</td>
\t\t\t\t\t<td class=\"hidden-480\">
\t\t\t\t\t\t<span class=\"label label-sm label-";
            // line 41
            echo twig_escape_filter($this->env, $this->extensions['App\Twig\StatusMessage']->statusStyleMessage(twig_get_attribute($this->env, $this->source, $context["w"], "status", [], "any", false, false, false, 41)), "html", null, true);
            echo "\"> ";
            echo twig_escape_filter($this->env, $this->extensions['App\Twig\StatusMessage']->statusStyleOpis(twig_get_attribute($this->env, $this->source, $context["w"], "status", [], "any", false, false, false, 41)), "html", null, true);
            echo "</span>
\t\t\t\t\t</td>
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['w'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 66
        echo "\t</table>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "admin/message.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  184 => 66,  143 => 41,  138 => 39,  134 => 38,  130 => 37,  126 => 36,  122 => 35,  118 => 34,  114 => 32,  97 => 31,  68 => 4,  58 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'admin/base2.html.twig' %}

{% block message %}

\t<div class=\"widget-box transparent\">
\t\t<div class=\"widget-header widget-header-large\">
\t\t\t<h3 class=\"widget-title grey lighter\">
\t\t\t\t<i class=\"ace-icon fa fa-envelope green\"></i>
\t\t\t\tMessage
\t\t\t</h3>
\t\t</div>
\t</div>

\t<table id=\"simple-table\" class=\"table  table-bordered table-hover\">
\t\t<thead>
\t\t\t<tr>
\t\t\t\t<th>#</th>
\t\t\t\t<th>Imię</th>
\t\t\t\t<th>Nazwisko</th>
\t\t\t\t<th>email</th>
\t\t\t\t<th>Temat</th>
\t\t\t\t<th>
\t\t\t\t\t<i class=\"ace-icon fa fa-clock-o bigger-110 hidden-480\"></i>
\t\t\t\t\tData utorzenia
\t\t\t\t</th>
\t\t\t\t<th>Status</th>
\t\t\t\t<th>Akcje</th>
\t\t\t</tr>
\t\t</thead>

\t\t{% for w in wiadomosci %}
\t\t\t<tbody>
\t\t\t\t<tr>
\t\t\t\t\t<td>{{ loop.index }}</td>
\t\t\t\t\t<td>{{ w.imie }}</td>
\t\t\t\t\t<td>{{ w.nazwisko }}</td>
\t\t\t\t\t<td>{{ w.email }}</td>
\t\t\t\t\t<td>{{ w.temat }}</td>
\t\t\t\t\t<td>{{ w.dataUtworzenia | date(\"Y-m-d H:s\") }}</td>
\t\t\t\t\t<td class=\"hidden-480\">
\t\t\t\t\t\t<span class=\"label label-sm label-{{ w.status | statusStyleMessage }}\"> {{ w.status | statusStyleOpis }}</span>
\t\t\t\t\t</td>
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

", "admin/message.html.twig", "/home/hystou/public_html/agro24/templates/admin/message.html.twig");
    }
}
