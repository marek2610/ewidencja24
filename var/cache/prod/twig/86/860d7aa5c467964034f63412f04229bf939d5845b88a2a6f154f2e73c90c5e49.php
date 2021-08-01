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

/* admin/panel/dokumenty/dokumenty.html.twig */
class __TwigTemplate_bacebbe486819c52b55980647a84f50e1c12b7bb2237e45871a392819ca082ed extends Template
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
        return "admin/base2.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("admin/base2.html.twig", "admin/panel/dokumenty/dokumenty.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 4
        echo "
<div class=\"widget-box transparent\">
<div class=\"widget-header widget-header-large\">
\t\t\t\t\t\t\t\t\t\t\t\t<h3 class=\"widget-title grey lighter\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"ace-icon glyphicon glyphicon-file  green\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\tDokumenty
\t\t\t\t\t\t\t\t\t\t\t\t</h3>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>

<table id=\"simple-table\" class=\"table  table-bordered table-hover\">
\t<thead>
\t\t<tr>
\t\t\t<th>#</th>
\t\t\t<th>Data</th>
\t\t\t<th>Kwota</th>
      <th>Faktura</th>
      <th>Rodzaj</th>
      <th>Uwagi</th>
\t\t\t<th>
\t\t\t\t<i class=\"ace-icon fa fa-clock-o bigger-110 hidden-480\"></i>
\t\t\t\tData utorzenia
\t\t\t</th>
\t\t\t<th>
\t\t\t\t<i class=\"ace-icon fa fa-clock-o bigger-110 hidden-480\"></i>
\t\t\t\tModyfikacja
\t\t\t</th>
\t\t\t<th>Status</th>
      <th><span class=\"glyphicon glyphicon-user\"></span> User</th>
\t\t\t<th>Akcje</th>
\t\t</tr>
\t</thead>

    ";
        // line 37
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["dokumenty"] ?? null));
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
            echo "\t<tbody>
\t\t<tr>
\t\t\t<td>";
            // line 40
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 40), "html", null, true);
            echo "</td>
\t\t\t<td>";
            // line 41
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["d"], "data", [], "any", false, false, false, 41), "Y-m-d"), "html", null, true);
            echo "</td>
\t\t\t<td class='text-right'>";
            // line 42
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["d"], "kwota", [], "any", false, false, false, 42), 2, ",", " "), "html", null, true);
            echo " zł</td>
\t\t\t<td>";
            // line 43
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["d"], "faktura", [], "any", false, false, false, 43), "html", null, true);
            echo "</td>
\t\t\t<td>";
            // line 44
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["d"], "rodzaj", [], "any", false, false, false, 44), "html", null, true);
            echo "</td>
\t\t\t<td>";
            // line 45
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["d"], "uwagi", [], "any", false, false, false, 45), "html", null, true);
            echo "</td>
\t\t\t<td>";
            // line 46
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["d"], "utworzony", [], "any", false, false, false, 46), "Y-m-d H:s"), "html", null, true);
            echo "</td>
      <td>";
            // line 47
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["d"], "modyfikacja", [], "any", false, false, false, 47), "Y-m-d"), "html", null, true);
            echo "</td>
\t\t\t<td class=\"hidden-480\">
\t\t\t\t<span class='label label-sm label-";
            // line 49
            echo twig_escape_filter($this->env, $this->extensions['App\Twig\StatusDokument']->statusStyle(twig_get_attribute($this->env, $this->source, $context["d"], "status", [], "any", false, false, false, 49)), "html", null, true);
            echo "'>";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["d"], "status", [], "any", false, false, false, 49), "html", null, true);
            echo "</span>
\t\t\t</td>
      <td>";
            // line 51
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["d"], "owner", [], "any", false, false, false, 51), "username", [], "any", false, false, false, 51), "html", null, true);
            echo "</td>
\t\t\t<td>
\t\t\t\t<div class=\"hidden-sm hidden-xs btn-group\">
\t\t\t\t\t<button class=\"btn btn-xs btn-success\">
\t\t\t\t\t\t<i class=\"ace-icon fa fa-check bigger-120\"></i>
\t\t\t\t\t</button>

\t\t\t\t\t<button class=\"btn btn-xs btn-info\">
\t\t\t\t\t\t<i class=\"ace-icon fa fa-pencil bigger-120\"></i>
\t\t\t\t\t</button>

\t\t\t\t\t<button class=\"btn btn-xs btn-danger\">
\t\t\t\t\t\t<i class=\"ace-icon fa fa-trash-o bigger-120\"></i>
\t\t\t\t\t</button>

\t\t\t\t\t<button class=\"btn btn-xs btn-warning\">
\t\t\t\t\t\t<i class=\"ace-icon fa fa-flag bigger-120\"></i>
\t\t\t\t\t</button>
\t\t\t\t</div>

\t\t\t</td>
\t\t</tr>
\t</tbody>
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
        // line 75
        echo "</table>

";
    }

    public function getTemplateName()
    {
        return "admin/panel/dokumenty/dokumenty.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  184 => 75,  146 => 51,  139 => 49,  134 => 47,  130 => 46,  126 => 45,  122 => 44,  118 => 43,  114 => 42,  110 => 41,  106 => 40,  102 => 38,  85 => 37,  50 => 4,  46 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "admin/panel/dokumenty/dokumenty.html.twig", "/home/hystou/public_html/agro24/templates/admin/panel/dokumenty/dokumenty.html.twig");
    }
}
