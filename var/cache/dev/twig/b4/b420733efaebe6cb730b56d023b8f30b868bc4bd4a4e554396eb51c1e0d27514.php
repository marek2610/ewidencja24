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

/* menuZalogowany.twig */
class __TwigTemplate_d9c1ce2e97057a9550034790f7a2de6c73231a1590d9402c4baaed02b886728b extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "menuZalogowany.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "menuZalogowany.twig"));

        // line 1
        echo "<li role=\"presentation\" class=\"active\"><a href=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("dokumenty_index");
        echo "\">Home</a></li>
";
        // line 5
        echo "<li role=\"presentation\"><a href=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("dokumenty_user");
        echo "\">Dane użytkownika</a></li>
<li role=\"presentation\"><a href=\"";
        // line 6
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("payment_index");
        echo "\">Płatność</a></li>
<li role=\"presentation\"><a href=\"";
        // line 7
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("logout");
        echo "\">Logout</a></li>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "menuZalogowany.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 7,  53 => 6,  48 => 5,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<li role=\"presentation\" class=\"active\"><a href=\"{{ url(\"dokumenty_index\")}}\">Home</a></li>
{# <li role=\"presentation\"><a href=\"{{ url('dokumenty_dane') }}\">Zestawienie miesięczne</a></li> #}
{# <li role=\"presentation\"><a href=\"{{ url('dokumenty_dodaj') }}\">Dodaj</a></li> #}
{# <li role=\"presentation\"><a href=\"{{ url('dokumenty_test') }}\">Test</a></li> #}
<li role=\"presentation\"><a href=\"{{ url('dokumenty_user') }}\">Dane użytkownika</a></li>
<li role=\"presentation\"><a href=\"{{ url('payment_index') }}\">Płatność</a></li>
<li role=\"presentation\"><a href=\"{{ url('logout') }}\">Logout</a></li>
{# <li role=\"presentation\"><a href=\"{{ url('admin') }}\">Admin</a></li> #}
", "menuZalogowany.twig", "/home/hystou/public_html/agro24/templates/menuZalogowany.twig");
    }
}
