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
                <h4 class=\"list-group-item-heading\">E-widencja24 - Uproszczona ewidencja przychod??w i rozchod??w</h4>
            </div >
        </div>


        <div class=\"panel-body text-justify\">           
            <p>Aplikacja <strong> E-widencja24 - Uproszczona ewidencja przychod??w i rozchod??w </strong>przeznaczona jest dla beneficjent??w Programu Rozwoju Obszar??w Wiejskich 2014-2020 - PROW 2014-2020 oraz Programu Operacyjnego \"Rybactwo i Morze\" na lata 2014-2020 - PO RYBY 2014-2020 a tak??e wszystkich innych, gdzie wymagane jest prowadzenie uproszczonej ewidencji ksi??gowej. Dlatego te?? format, spos??b, oraz zasady ewidencji s?? zgodne z procedurami wymaganymi przez Agencj?? Restrukturyzacji i Modernizacji Rolnictwa, opisanymi w Za????czniku Nr 3 do Rozporz??dzenia Ministra Rolnictwa i Rozwoju Wsi z dnia 13 lipca 2015 r. (Dz. U. poz. 982).
            </p>
            <p>Elektroniczna wersja aplikacji gwarantuje bezpiecze??stwo przed utrat?? papierowych wersji raport??w. Raz wprowadzone wpisy zdarze?? gospodarczych pozostaj?? w aplikacji i w spos??b ci??g??y s?? dost??pne dla beneficjenta. ??atwo???? ich edycji, korekty czy te?? usuni??cia, natychmiast powoduje zmiany w raportach i statystykach.</p>
            <p>System nie wymaga instalacji. Zintegrowany jest z ka??dym systemem operacyjnym. Uruchomi?? go mo??na pod Windowsem, Linuxem, czy te?? MaC. Dostosowany jest do pracy na ka??dym urz??dzeniu: kom??rka, tablet, desktop. Jedyne co nale??y wykona?? do zarejestrowa?? si?? w aplikacji <strong> E-widencja24 - Uproszczona ewidencja przychod??w i rozchod??w</strong>.
            </p>
            <p>Praca z aplikacj?? jest intuicyjna i mo??liwa zaraz po rejestracji. <strong> E-widencja24.pl - Uproszczona ewidencja przychod??w i rozchod??w</strong> posiada w swojej strukturze modu?? dodawania zdarze?? ksi??gowych, filtracji, generowanie miesi??cznych oraz zbiorczego zestawienia ksi??gowego w gospodarstwie. System wyposa??ony jest w opcj?? <i>Szukaj</i>, dzi??ki kt??rej u??ytkownik bardzo szybko odnajdzie interesuj??cy go dokument. Struktura aplikacji pozwalana na automatyczne sortowanie wydatk??w oraz wp??yw??w bez konieczno??ci analizy termin??w.
            </p>
            <p>
            Spr??buj a zrezygnujesz z prowadzenia w??asnych zestawie?? w arkuszach kalkulacyjnych czy prostych edytorach tekstu. Zarejestruj si??, zaloguj i nie tra?? wi??cej czasu dzi??ki systemowi <strong>E-widencja24 - Uproszczona ewidencja przychod??w i rozchod??w</strong>.
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
                <h4 class=\"list-group-item-heading\">E-widencja24 - Uproszczona ewidencja przychod??w i rozchod??w</h4>
            </div >
        </div>


        <div class=\"panel-body text-justify\">           
            <p>Aplikacja <strong> E-widencja24 - Uproszczona ewidencja przychod??w i rozchod??w </strong>przeznaczona jest dla beneficjent??w Programu Rozwoju Obszar??w Wiejskich 2014-2020 - PROW 2014-2020 oraz Programu Operacyjnego \"Rybactwo i Morze\" na lata 2014-2020 - PO RYBY 2014-2020 a tak??e wszystkich innych, gdzie wymagane jest prowadzenie uproszczonej ewidencji ksi??gowej. Dlatego te?? format, spos??b, oraz zasady ewidencji s?? zgodne z procedurami wymaganymi przez Agencj?? Restrukturyzacji i Modernizacji Rolnictwa, opisanymi w Za????czniku Nr 3 do Rozporz??dzenia Ministra Rolnictwa i Rozwoju Wsi z dnia 13 lipca 2015 r. (Dz. U. poz. 982).
            </p>
            <p>Elektroniczna wersja aplikacji gwarantuje bezpiecze??stwo przed utrat?? papierowych wersji raport??w. Raz wprowadzone wpisy zdarze?? gospodarczych pozostaj?? w aplikacji i w spos??b ci??g??y s?? dost??pne dla beneficjenta. ??atwo???? ich edycji, korekty czy te?? usuni??cia, natychmiast powoduje zmiany w raportach i statystykach.</p>
            <p>System nie wymaga instalacji. Zintegrowany jest z ka??dym systemem operacyjnym. Uruchomi?? go mo??na pod Windowsem, Linuxem, czy te?? MaC. Dostosowany jest do pracy na ka??dym urz??dzeniu: kom??rka, tablet, desktop. Jedyne co nale??y wykona?? do zarejestrowa?? si?? w aplikacji <strong> E-widencja24 - Uproszczona ewidencja przychod??w i rozchod??w</strong>.
            </p>
            <p>Praca z aplikacj?? jest intuicyjna i mo??liwa zaraz po rejestracji. <strong> E-widencja24.pl - Uproszczona ewidencja przychod??w i rozchod??w</strong> posiada w swojej strukturze modu?? dodawania zdarze?? ksi??gowych, filtracji, generowanie miesi??cznych oraz zbiorczego zestawienia ksi??gowego w gospodarstwie. System wyposa??ony jest w opcj?? <i>Szukaj</i>, dzi??ki kt??rej u??ytkownik bardzo szybko odnajdzie interesuj??cy go dokument. Struktura aplikacji pozwalana na automatyczne sortowanie wydatk??w oraz wp??yw??w bez konieczno??ci analizy termin??w.
            </p>
            <p>
            Spr??buj a zrezygnujesz z prowadzenia w??asnych zestawie?? w arkuszach kalkulacyjnych czy prostych edytorach tekstu. Zarejestruj si??, zaloguj i nie tra?? wi??cej czasu dzi??ki systemowi <strong>E-widencja24 - Uproszczona ewidencja przychod??w i rozchod??w</strong>.
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
        {# <div class=\"panel-footer text-center\">Zarejestruj si??, zaloguj i nie tra?? wi??cej czasu dzi??ki Agro24 - Uproszczona ewidencja przychod??w i rozchod??w.</div>
    </div> #}

{% endblock %}
", "agro/system.html.twig", "/home/hystou/public_html/agro24/templates/agro/system.html.twig");
    }
}
