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

/* menuAdmin.twig */
class __TwigTemplate_dbce37261d54ffd00314b22f1e9491ddee070edaa78bdf9fcd360c1b07263d59 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "menuAdmin.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "menuAdmin.twig"));

        // line 7
        echo "<li role=\"presentation\" class=\"active pull-right\"><a href=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("admin");
        echo "\">Admin</a></li>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "menuAdmin.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  43 => 7,);
    }

    public function getSourceContext()
    {
        return new Source("{# <li role=\"presentation\" class=\"active\"><a href=\"{{ url(\"dokumenty_index\")}}\">Home</a></li> #}
{# <li role=\"presentation\"><a href=\"{{ url('dokumenty_dane') }}\">Zestawienie miesięczne</a></li> #}
{# <li role=\"presentation\"><a href=\"{{ url('dokumenty_dodaj') }}\">Dodaj</a></li> #}
{# <li role=\"presentation\"><a href=\"{{ url('dokumenty_test') }}\">Test</a></li> #}
{# <li role=\"presentation\"><a href=\"{{ url('dokumenty_user') }}\">Dane użytkownika</a></li> #}
{# <li role=\"presentation\"><a href=\"{{ url('logout') }}\">Logout</a></li> #}
<li role=\"presentation\" class=\"active pull-right\"><a href=\"{{ url('admin') }}\">Admin</a></li>
", "menuAdmin.twig", "/home/hystou/public_html/agro24/templates/menuAdmin.twig");
    }
}
