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

/* agro/system.html.twig */
class __TwigTemplate_a6184d73d4b85807dcdd77ac2e6f1612677edad75a844677c924415289cd0d3e extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "agro/system.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "agro/system.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "agro/system.html.twig", 1);
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
        <div class=\"panel-heading\">
            <h3 class=\"panel-title\">System</h3>
        </div>

        <div class=\"list-group\">
            <div class=\"list-group-item \">
                <h4 class=\"list-group-item-heading\">E-widencja24 - Uproszczona ewidencja przychodów i rozchodów</h4>
            </div >
        </div>


        <div class=\"panel-body text-justify\">           
            <p>Aplikacja <strong> E-widencja24 - Uproszczona ewidencja przychodów i rozchodów </strong>przeznaczona jest dla beneficjentów Programu Rozwoju Obszarów Wiejskich 2014-2020 - PROW 2014-2020 oraz Programu Operacyjnego \"Rybactwo i Morze\" na lata 2014-2020 - PO RYBY 2014-2020 a także wszystkich innych, gdzie wymagane jest prowadzenie uproszczonej ewidencji księgowej. Dlatego też format, sposób, oraz zasady ewidencji są zgodne z procedurami wymaganymi przez Agencję Restrukturyzacji i Modernizacji Rolnictwa, opisanymi w Załączniku Nr 3 do Rozporządzenia Ministra Rolnictwa i Rozwoju Wsi z dnia 13 lipca 2015 r. (Dz. U. poz. 982).
            </p>
            <p>Elektroniczna wersja aplikacji gwarantuje bezpieczeństwo przed utratą papierowych wersji raportów. Raz wprowadzone wpisy zdarzeń gospodarczych pozostają w aplikacji i w sposób ciągły są dostępne dla beneficjenta. Łatwość ich edycji, korekty czy też usunięcia, natychmiast powoduje zmiany w raportach i statystykach.</p>
            <p>System nie wymaga instalacji. Zintegrowany jest z każdym systemem operacyjnym. Uruchomić go można pod Windowsem, Linuxem, czy też MaC. Dostosowany jest do pracy na każdym urządzeniu: komórka, tablet, desktop. Jedyne co należy wykonać do zarejestrować się w aplikacji <strong> E-widencja24 - Uproszczona ewidencja przychodów i rozchodów</strong>.
            </p>
            <p>Praca z aplikacją jest intuicyjna i możliwa zaraz po rejestracji. <strong> E-widencja24.pl - Uproszczona ewidencja przychodów i rozchodów</strong> posiada w swojej strukturze moduł dodawania zdarzeń księgowych, filtracji, generowanie miesięcznych oraz zbiorczego zestawienia księgowego w gospodarstwie. System wyposażony jest w opcję <i>Szukaj</i>, dzięki której użytkownik bardzo szybko odnajdzie interesujący go dokument. Struktura aplikacji pozwalana na automatyczne sortowanie wydatków oraz wpływów bez konieczności analizy terminów.
            </p>
            <p>
            Spróbuj a zrezygnujesz z prowadzenia własnych zestawień w arkuszach kalkulacyjnych czy prostych edytorach tekstu. Zarejestruj się, zaloguj i nie trać więcej czasu dzięki systemowi <strong>E-widencja24 - Uproszczona ewidencja przychodów i rozchodów</strong>.
            </p>
        </div>

        <div class=\"list-group\">
            <div class=\"list-group-item \">

                <div class=\"row\">
                    <div class=\"col-sm-6 col-md-4\">
                        <div class=\"thumbnail\">
                            <img src=\"";
        // line 36
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/agro24_02.png"), "html", null, true);
        echo "\" alt=\"Agro24\"/>
                        </div>
                    </div>

                    <div class=\"col-sm-6 col-md-4\">
                        <div class=\"thumbnail\">
                            <img src=\"";
        // line 42
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/agro24_05.jpg"), "html", null, true);
        echo "\" alt=\"Agro24\">
                        </div>
                    </div>

                    <div class=\"col-sm-6 col-md-4\">
                        <div class=\"thumbnail\">
                            <img src=\"";
        // line 48
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/agro24_04.jpg"), "html", null, true);
        echo "\" alt=\"Agro24\">
                        </div>
                    </div>
                </div>
            </div>
        </div>
            

 
        <div class=\"clearfix\"></div>
        ";
        // line 60
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "agro/system.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  133 => 60,  120 => 48,  111 => 42,  102 => 36,  68 => 4,  58 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block body %}

    <div class=\"panel panel-primary\">
        <div class=\"panel-heading\">
            <h3 class=\"panel-title\">System</h3>
        </div>

        <div class=\"list-group\">
            <div class=\"list-group-item \">
                <h4 class=\"list-group-item-heading\">E-widencja24 - Uproszczona ewidencja przychodów i rozchodów</h4>
            </div >
        </div>


        <div class=\"panel-body text-justify\">           
            <p>Aplikacja <strong> E-widencja24 - Uproszczona ewidencja przychodów i rozchodów </strong>przeznaczona jest dla beneficjentów Programu Rozwoju Obszarów Wiejskich 2014-2020 - PROW 2014-2020 oraz Programu Operacyjnego \"Rybactwo i Morze\" na lata 2014-2020 - PO RYBY 2014-2020 a także wszystkich innych, gdzie wymagane jest prowadzenie uproszczonej ewidencji księgowej. Dlatego też format, sposób, oraz zasady ewidencji są zgodne z procedurami wymaganymi przez Agencję Restrukturyzacji i Modernizacji Rolnictwa, opisanymi w Załączniku Nr 3 do Rozporządzenia Ministra Rolnictwa i Rozwoju Wsi z dnia 13 lipca 2015 r. (Dz. U. poz. 982).
            </p>
            <p>Elektroniczna wersja aplikacji gwarantuje bezpieczeństwo przed utratą papierowych wersji raportów. Raz wprowadzone wpisy zdarzeń gospodarczych pozostają w aplikacji i w sposób ciągły są dostępne dla beneficjenta. Łatwość ich edycji, korekty czy też usunięcia, natychmiast powoduje zmiany w raportach i statystykach.</p>
            <p>System nie wymaga instalacji. Zintegrowany jest z każdym systemem operacyjnym. Uruchomić go można pod Windowsem, Linuxem, czy też MaC. Dostosowany jest do pracy na każdym urządzeniu: komórka, tablet, desktop. Jedyne co należy wykonać do zarejestrować się w aplikacji <strong> E-widencja24 - Uproszczona ewidencja przychodów i rozchodów</strong>.
            </p>
            <p>Praca z aplikacją jest intuicyjna i możliwa zaraz po rejestracji. <strong> E-widencja24.pl - Uproszczona ewidencja przychodów i rozchodów</strong> posiada w swojej strukturze moduł dodawania zdarzeń księgowych, filtracji, generowanie miesięcznych oraz zbiorczego zestawienia księgowego w gospodarstwie. System wyposażony jest w opcję <i>Szukaj</i>, dzięki której użytkownik bardzo szybko odnajdzie interesujący go dokument. Struktura aplikacji pozwalana na automatyczne sortowanie wydatków oraz wpływów bez konieczności analizy terminów.
            </p>
            <p>
            Spróbuj a zrezygnujesz z prowadzenia własnych zestawień w arkuszach kalkulacyjnych czy prostych edytorach tekstu. Zarejestruj się, zaloguj i nie trać więcej czasu dzięki systemowi <strong>E-widencja24 - Uproszczona ewidencja przychodów i rozchodów</strong>.
            </p>
        </div>

        <div class=\"list-group\">
            <div class=\"list-group-item \">

                <div class=\"row\">
                    <div class=\"col-sm-6 col-md-4\">
                        <div class=\"thumbnail\">
                            <img src=\"{{ asset('img/agro24_02.png') }}\" alt=\"Agro24\"/>
                        </div>
                    </div>

                    <div class=\"col-sm-6 col-md-4\">
                        <div class=\"thumbnail\">
                            <img src=\"{{ asset('img/agro24_05.jpg') }}\" alt=\"Agro24\">
                        </div>
                    </div>

                    <div class=\"col-sm-6 col-md-4\">
                        <div class=\"thumbnail\">
                            <img src=\"{{ asset('img/agro24_04.jpg') }}\" alt=\"Agro24\">
                        </div>
                    </div>
                </div>
            </div>
        </div>
            

 
        <div class=\"clearfix\"></div>
        {# <div class=\"panel-footer text-center\">Zarejestruj się, zaloguj i nie trać więcej czasu dzięki Agro24 - Uproszczona ewidencja przychodów i rozchodów.</div>
    </div> #}

{% endblock %}
", "agro/system.html.twig", "/home/hystou/public_html/agro24/templates/agro/system.html.twig");
    }
}
