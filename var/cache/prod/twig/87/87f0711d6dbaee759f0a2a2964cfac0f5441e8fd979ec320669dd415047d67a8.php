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
class __TwigTemplate_d1de853f754f458a5bd9c5389162eb3033471bd24593d5d99f5725530f8bf7ff extends Template
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
        $this->parent = $this->loadTemplate("base.html.twig", "security/login2.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 4
        echo "
    ";
        // line 5
        if (($context["error"] ?? null)) {
            // line 6
            echo "    <div class=\"alert alert-danger\" role=\"alert\">
        ";
            // line 7
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["error"] ?? null), "messageKey", [], "any", false, false, false, 7), "html", null, true);
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
        echo twig_escape_filter($this->env, ($context["lastUsername"] ?? null), "html", null, true);
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
        return array (  109 => 45,  98 => 36,  83 => 24,  77 => 21,  64 => 10,  58 => 7,  55 => 6,  53 => 5,  50 => 4,  46 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "security/login2.html.twig", "/home/hystou/public_html/agro24/templates/security/login2.html.twig");
    }
}
