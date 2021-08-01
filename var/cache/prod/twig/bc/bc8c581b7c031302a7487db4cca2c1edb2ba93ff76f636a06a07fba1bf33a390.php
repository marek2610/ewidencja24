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

/* admin/panel/users/users.html.twig */
class __TwigTemplate_ff0de13c5cf03eeb5429f0ee5d7fc7a4e36b31232cef77b2ff1f87ffb655031d extends Template
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
        $this->parent = $this->loadTemplate("admin/base2.html.twig", "admin/panel/users/users.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 4
        echo "
\t<div class=\"widget-box transparent\">
\t\t<div class=\"widget-header widget-header-large\">
\t\t\t<h3 class=\"widget-title grey lighter\">
\t\t\t\t<i class=\"ace-icon fa fa-users green\"></i>
\t\t\t\tUsers
\t\t\t</h3>
\t\t</div>
\t</div>

\t<table id=\"simple-table\" class=\"table  table-bordered table-hover\">
\t\t<thead>
\t\t\t<tr>
\t\t\t\t<th>#</th>
\t\t\t\t<th>User</th>
\t\t\t\t<th>email</th>
\t\t\t\t<th>Ep</th>
\t\t\t\t<th>Imię</th>
\t\t\t\t<th>Nazwisko</th>
\t\t\t\t<th>Znak sprawy</th>
\t\t\t\t<th>
\t\t\t\t\t<i class=\"ace-icon fa fa-clock-o bigger-110 hidden-480\"></i>
\t\t\t\t\tData utorzenia
\t\t\t\t</th>
\t\t\t\t<th>
\t\t\t\t\t<i class=\"ace-icon fa fa-clock-o bigger-110 hidden-480\"></i>
\t\t\t\t\tUpdate
\t\t\t\t</th>
\t\t\t\t<th>
\t\t\t\t\t<i class=\"ace-icon fa fa-clock-o bigger-110 hidden-480\"></i>
\t\t\t\t\tTermin
\t\t\t\t</th>
\t\t\t\t<th>Status</th>
\t\t\t\t<th>Akcje</th>
\t\t\t</tr>
\t\t</thead>

\t\t";
        // line 41
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["users"] ?? null));
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
        foreach ($context['_seq'] as $context["_key"] => $context["u"]) {
            // line 42
            echo "\t\t\t<tbody>
\t\t\t\t<tr>
\t\t\t\t\t<td>";
            // line 44
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 44), "html", null, true);
            echo "</td>
\t\t\t\t\t<td>";
            // line 45
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["u"], "username", [], "any", false, false, false, 45), "html", null, true);
            echo "</td>
\t\t\t\t\t<td>";
            // line 46
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["u"], "email", [], "any", false, false, false, 46), "html", null, true);
            echo "</td>
\t\t\t\t\t<td>";
            // line 47
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["u"], "ep", [], "any", false, false, false, 47), "html", null, true);
            echo "</td>
\t\t\t\t\t<td>";
            // line 48
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["u"], "imie", [], "any", false, false, false, 48), "html", null, true);
            echo "</td>
\t\t\t\t\t<td>";
            // line 49
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["u"], "nazwisko", [], "any", false, false, false, 49), "html", null, true);
            echo "</td>
\t\t\t\t\t<td>";
            // line 50
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["u"], "znaksprawy", [], "any", false, false, false, 50), "html", null, true);
            echo "</td>
\t\t\t\t\t<td>";
            // line 51
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["u"], "dataUtworzenia", [], "any", false, false, false, 51), "Y-m-d"), "html", null, true);
            echo "</td>
\t\t\t\t\t<td>";
            // line 52
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["u"], "dataAktualizacji", [], "any", false, false, false, 52), "Y-m-d"), "html", null, true);
            echo "</td>
\t\t\t\t\t<td>";
            // line 53
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["u"], "dataTermin", [], "any", false, false, false, 53), "Y-m-d H:s"), "html", null, true);
            echo "</td>

\t\t\t\t\t<td class=\"hidden-480\">
\t\t\t\t\t\t<span class=\"label label-xs label-";
            // line 56
            echo twig_escape_filter($this->env, $this->extensions['App\Twig\StatusUser']->statusTerminStyle(twig_get_attribute($this->env, $this->source, $context["u"], "dataTermin", [], "any", false, false, false, 56)), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->extensions['App\Twig\StatusUser']->statusOpisStyle(twig_get_attribute($this->env, $this->source, $context["u"], "dataTermin", [], "any", false, false, false, 56)), "html", null, true);
            echo "</span>
\t\t\t\t\t</td>

\t\t\t\t\t<td>
\t\t\t\t\t\t<div class=\"hidden-sm hidden-xs btn-group\">
\t\t\t\t\t\t\t<button class=\"btn btn-xs btn-success\" onclick=\"window.location='";
            // line 61
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("admin_users_info", ["id" => twig_get_attribute($this->env, $this->source, $context["u"], "id", [], "any", false, false, false, 61)]), "html", null, true);
            echo "'\">
\t\t\t\t\t\t\t\t<i class=\"ace-icon fa fa-info-circle bigger-120\">
\t\t\t\t\t\t\t\t</i>
\t\t\t\t\t\t\t</button>

\t\t\t\t\t\t\t<button class=\"btn btn-xs btn-info\" onclick=\"window.location='";
            // line 66
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("admin_users_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["u"], "id", [], "any", false, false, false, 66)]), "html", null, true);
            echo "'\">
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['u'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 83
        echo "\t</table>

";
    }

    public function getTemplateName()
    {
        return "admin/panel/users/users.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  201 => 83,  170 => 66,  162 => 61,  152 => 56,  146 => 53,  142 => 52,  138 => 51,  134 => 50,  130 => 49,  126 => 48,  122 => 47,  118 => 46,  114 => 45,  110 => 44,  106 => 42,  89 => 41,  50 => 4,  46 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "admin/panel/users/users.html.twig", "/home/hystou/public_html/agro24/templates/admin/panel/users/users.html.twig");
    }
}
