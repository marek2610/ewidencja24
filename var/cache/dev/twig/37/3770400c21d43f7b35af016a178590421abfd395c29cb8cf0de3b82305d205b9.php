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

/* security/login2.html.twig */
class __TwigTemplate_8f84e28f1b3a8679b803cb12783f925851b1c33b9bed08b27f486b2a96a35e5f extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "security/login2.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "security/login2.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "security/login2.html.twig", 1);
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
    ";
        // line 5
        if ((isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 5, $this->source); })())) {
            // line 6
            echo "    <div class=\"alert alert-danger\" role=\"alert\">
        ";
            // line 7
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 7, $this->source); })()), "messageKey", [], "any", false, false, false, 7), "html", null, true);
            echo "
    </div>
    ";
        }
        // line 10
        echo "    
    
    <div class=\"panel panel-primary\">
  <!-- Default panel contents -->
    <div class=\"panel-heading\">
        <h4>
            Logowanie
        </h4>
    </div>
  <div class=\"panel-body\">
    
    <form action=\"";
        // line 21
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("login");
        echo "\" method=\"post\">
        <div class=\"form-group\">
            <label for=\"usr\">Użytkownik:</label>
            <input type=\"text\" class=\"form-control\" id=\"usr\" name=\"_username\" value=\"";
        // line 24
        echo twig_escape_filter($this->env, (isset($context["lastUsername"]) || array_key_exists("lastUsername", $context) ? $context["lastUsername"] : (function () { throw new RuntimeError('Variable "lastUsername" does not exist.', 24, $this->source); })()), "html", null, true);
        echo "\" placeholder=\"Użytkownik\">
        </div>
        <div class=\"form-group\">
            <label for=\"pwd\">Hasło:</label>
            <input type=\"password\" class=\"form-control\" id=\"pwd\" name=\"_password\" placeholder=\"Hasło\">
        </div>
        <div>
            <button type=\"submit\" class=\"btn btn-success pull-right\"><span class=\"glyphicon glyphicon-check\"></span> Login</button>
        </div>
    </form>

    <p>Rejestracja oznacza akceptację <a href=\"#\">Regulaminu & Polityki Prywatności</a>.</p>
    <p>Nie posiadasz konta? <a href=\"";
        // line 36
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("register");
        echo "\">Zarejestruj się.</a></p>

  </div>
  <!-- /.container -->
    

</div>

";
        // line 45
        echo "

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "security/login2.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  127 => 45,  116 => 36,  101 => 24,  95 => 21,  82 => 10,  76 => 7,  73 => 6,  71 => 5,  68 => 4,  58 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block body %}

    {% if error %}
    <div class=\"alert alert-danger\" role=\"alert\">
        {{ error.messageKey }}
    </div>
    {% endif %}
    
    
    <div class=\"panel panel-primary\">
  <!-- Default panel contents -->
    <div class=\"panel-heading\">
        <h4>
            Logowanie
        </h4>
    </div>
  <div class=\"panel-body\">
    
    <form action=\"{{ path('login') }}\" method=\"post\">
        <div class=\"form-group\">
            <label for=\"usr\">Użytkownik:</label>
            <input type=\"text\" class=\"form-control\" id=\"usr\" name=\"_username\" value=\"{{ lastUsername }}\" placeholder=\"Użytkownik\">
        </div>
        <div class=\"form-group\">
            <label for=\"pwd\">Hasło:</label>
            <input type=\"password\" class=\"form-control\" id=\"pwd\" name=\"_password\" placeholder=\"Hasło\">
        </div>
        <div>
            <button type=\"submit\" class=\"btn btn-success pull-right\"><span class=\"glyphicon glyphicon-check\"></span> Login</button>
        </div>
    </form>

    <p>Rejestracja oznacza akceptację <a href=\"#\">Regulaminu & Polityki Prywatności</a>.</p>
    <p>Nie posiadasz konta? <a href=\"{{ url(\"register\") }}\">Zarejestruj się.</a></p>

  </div>
  <!-- /.container -->
    

</div>

{# #################### #}


{% endblock %}
", "security/login2.html.twig", "/home/hystou/public_html/agro24/templates/security/login2.html.twig");
    }
}
