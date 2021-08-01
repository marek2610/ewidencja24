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

/* admin/panel/users/users_info.html.twig */
class __TwigTemplate_0aa47457fc297612c767dee218f5e7a5ecb2579243b030f1ce255eb17c9299e4 extends Template
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
        $this->parent = $this->loadTemplate("admin/base2.html.twig", "admin/panel/users/users_info.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 4
        echo "
\t<div class=\"col-xs-12\">

\t\t<!-- PAGE CONTENT BEGINS -->
\t\t<div class=\"tab-content no-border padding-24\">
\t\t\t<div id=\"home\" class=\"tab-pane active\">
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col-xs-12 col-sm-3 center\">
\t\t\t\t\t\t<span class=\"profile-picture\">
\t\t\t\t\t\t\t<img class=\"editable img-responsive\" alt=\"Alex's Avatar\" src=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("admin/assets/images/avatars/profile-pic.jpg"), "html", null, true);
        echo "\">
\t\t\t\t\t\t</span>

\t\t\t\t\t\t<div class=\"space space-4\"></div>

\t\t\t\t\t\t<a href=\"#\" class=\"btn btn-sm btn-block btn-primary\" disabled>
\t\t\t\t\t\t\t<i class=\"ace-icon fa fa-envelope-o bigger-110\"></i>
\t\t\t\t\t\t\t<span class=\"bigger-110\">Send a message</span>
\t\t\t\t\t\t</a>
\t\t\t\t\t</div>
\t\t\t\t\t<!-- /.col -->

\t\t\t\t\t<div class=\"col-xs-12 col-sm-9\">
\t\t\t\t\t
\t\t\t\t\t\t<h4 class=\"blue\">
\t\t\t\t\t\t\t<span class=\"middle\">";
        // line 28
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "nazwisko", [], "any", false, false, false, 28), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "imie", [], "any", false, false, false, 28), "html", null, true);
        echo "</span>
\t\t\t\t\t\t</h4>


\t\t\t\t\t\t<div class=\"profile-user-info\">
\t\t\t\t\t\t\t<div class=\"profile-info-row\">
\t\t\t\t\t\t\t\t<div class=\"profile-info-name\">
\t\t\t\t\t\t\t\t\tUsername
\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t<div class=\"profile-info-value\">
\t\t\t\t\t\t\t\t\t<span>";
        // line 39
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "username", [], "any", false, false, false, 39), "html", null, true);
        echo "</span>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t<div class=\"profile-info-row\">
\t\t\t\t\t\t\t\t<div class=\"profile-info-name\">
\t\t\t\t\t\t\t\t\tNazwisko
\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t<div class=\"profile-info-value\">
\t\t\t\t\t\t\t\t\t<span>";
        // line 49
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "nazwisko", [], "any", false, false, false, 49), "html", null, true);
        echo "</span>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t<div class=\"profile-info-row\">
\t\t\t\t\t\t\t\t<div class=\"profile-info-name\">
\t\t\t\t\t\t\t\t\tImię
\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t<div class=\"profile-info-value\">
\t\t\t\t\t\t\t\t\t<span>";
        // line 59
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "imie", [], "any", false, false, false, 59), "html", null, true);
        echo "</span>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t<div class=\"profile-info-row\">
\t\t\t\t\t\t\t\t<div class=\"profile-info-name\">
\t\t\t\t\t\t\t\t\tEP Producenta
\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t<div class=\"profile-info-value\">
\t\t\t\t\t\t\t\t\t<span>";
        // line 69
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "ep", [], "any", false, false, false, 69), "html", null, true);
        echo "</span>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t<div class=\"profile-info-row\">
\t\t\t\t\t\t\t\t<div class=\"profile-info-name\">
\t\t\t\t\t\t\t\t\tZnak sprawy
\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t<div class=\"profile-info-value\">
\t\t\t\t\t\t\t\t\t<span>";
        // line 79
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "znaksprawy", [], "any", false, false, false, 79), "html", null, true);
        echo "</span>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t<div class=\"profile-info-row\">
\t\t\t\t\t\t\t\t<div class=\"profile-info-name\">
\t\t\t\t\t\t\t\t\tData utworzenia
\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t<div class=\"profile-info-value\">
\t\t\t\t\t\t\t\t\t<span>";
        // line 89
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "dataUtworzenia", [], "any", false, false, false, 89), "Y-m-d"), "html", null, true);
        echo "</span>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t<div class=\"profile-info-row\">
\t\t\t\t\t\t\t\t<div class=\"profile-info-name\">
\t\t\t\t\t\t\t\t\tZnak sprawy
\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t<div class=\"profile-info-value\">
\t\t\t\t\t\t\t\t\t<span>";
        // line 99
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "dataAktualizacji", [], "any", false, false, false, 99), "Y-m-d"), "html", null, true);
        echo "</span>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t<div class=\"profile-info-row\">
\t\t\t\t\t\t\t\t<div class=\"profile-info-name\">
\t\t\t\t\t\t\t\t\tZnak sprawy
\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t<div class=\"profile-info-value\">
\t\t\t\t\t\t\t\t\t<span>";
        // line 109
        echo twig_escape_filter($this->env, $this->extensions['App\Twig\DataTermin']->terminKonta(twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "dataTermin", [], "any", false, false, false, 109)), "html", null, true);
        echo "</span>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>


\t\t\t\t\t\t\t<div class=\"profile-info-row\">
\t\t\t\t\t\t\t\t<div class=\"profile-info-name\">
\t\t\t\t\t\t\t\t\temail
\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t<div class=\"profile-info-value\">
\t\t\t\t\t\t\t\t\t<a href=\"#\" >";
        // line 120
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "email", [], "any", false, false, false, 120), "html", null, true);
        echo "</a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t<div class=\"profile-info-row\">
\t\t\t\t\t\t\t\t<div class=\"profile-info-name\">
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t<div class=\"profile-info-value\">
\t\t\t\t\t\t\t\t\t<button class=\"btn btn-danger btn-sm\" onclick=\"window.location='";
        // line 130
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("admin_users");
        echo "'\">
\t\t\t\t\t\t\t\t\t\t<i class=\"ace-icon fa fa-reply icon-only\"></i>
\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t</div>

\t\t\t\t\t</div>
\t\t\t\t\t<!-- /.col -->
\t\t\t\t</div>
\t\t\t\t<!-- /.row -->

\t\t\t\t<div class=\"space-20\"></div>

\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col-xs-12 col-sm-6\">
\t\t\t\t\t\t<div class=\"widget-box transparent\">
\t\t\t\t\t\t\t<div class=\"widget-header widget-header-small\">
\t\t\t\t\t\t\t\t<h4 class=\"widget-title smaller\">
\t\t\t\t\t\t\t\t\t<i class=\"ace-icon fa fa-check-square-o bigger-110\"></i>
\t\t\t\t\t\t\t\t\tZestawienie faktur
\t\t\t\t\t\t\t\t</h4>
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t<div class=\"widget-body\">
\t\t\t\t\t\t\t\t<div class=\"widget-main\">
\t\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\t\tMy job is mostly lorem ipsuming and dolor sit ameting as long as consectetur adipiscing elit.
\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\t\tSometimes quisque commodo massa gets in the way and sed ipsum porttitor facilisis.
\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\t\tThe best thing about my job is that vestibulum id ligula porta felis euismod and nullam quis risus eget urna mollis ornare.
\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\t\tThanks for visiting my profile.
\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<!-- /#home -->

\t\t</div>


\t</div>


";
    }

    public function getTemplateName()
    {
        return "admin/panel/users/users_info.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  213 => 130,  200 => 120,  186 => 109,  173 => 99,  160 => 89,  147 => 79,  134 => 69,  121 => 59,  108 => 49,  95 => 39,  79 => 28,  61 => 13,  50 => 4,  46 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "admin/panel/users/users_info.html.twig", "/home/hystou/public_html/agro24/templates/admin/panel/users/users_info.html.twig");
    }
}
