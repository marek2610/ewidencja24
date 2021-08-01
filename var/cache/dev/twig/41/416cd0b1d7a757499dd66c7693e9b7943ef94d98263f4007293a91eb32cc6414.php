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

/* security/login.html.twig */
class __TwigTemplate_893e2311ced1e84fc49c1818324f443137ba064b7e620f1013dddac9dc9a026a extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'stylesheets' => [$this, 'block_stylesheets'],
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "security/login.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "security/login.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "security/login.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 4
        echo "            <link href=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\">
            <link rel=\"stylesheet\" href=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("admin/assets/font-awesome/4.5.0/css/font-awesome.min.css"), "html", null, true);
        echo "\" />
        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 8
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 9
        echo "
  ";
        // line 10
        if ((isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 10, $this->source); })())) {
            // line 11
            echo "    <div class=\"container alert alert-danger\" role=\"alert\">
      <strong>Uwaga!!! </strong>";
            // line 12
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 12, $this->source); })()), "messageKey", [], "any", false, false, false, 12), twig_get_attribute($this->env, $this->source, (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 12, $this->source); })()), "messageData", [], "any", false, false, false, 12), "security"), "html", null, true);
            echo "
    </div>
  ";
        }
        // line 15
        echo "
  <header class=\"container bg-primary\">
    <div class=\"row\">
      <div class=\"col-lg-12\">
        <h2 class=\"display-4 text-white mt-5 mb-2\"><img src=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/logo.png"), "html", null, true);
        echo "\" alt=\"E-widencja24\"/></span> E-widencja24</h2>
        <p class=\"lead mb-5 text-white-50\">Dedykowana aplikacja do obsługi księgowej gospodarstw rolnych i rybackich</p>
      </div>
    </div>
  </header>

  <!-- Page Content -->
  <div class=\"container\">
    <div class=\"row\">
      <div class=\"col-md-8 mb-5\">
        <h2>Uproszczona ewidencja przychodów i rozchodów</h2>
        <hr>
        <p align=\"justify\">Wychodząc na przeciw oczekiwaniom beneficjentów Programu Rozwoju Obszarów Wiejskich 2014-2020 - PROW 2014-2020 oraz Programu Operacyjnego \"Rybactwo i Morze\" na lata 2014-2020 - PO RYBY 2014-2020 stworzono aplikację do ewidencjonowania zdarzeń księgowych w gospodarstwie.</p>
        <p align=\"justify\">Aplikacja przeznaczona jest dla uczestników programów obsługiwanych przez Agencję Restrukturyzacji i Modernizacji Rolnictwa oraz pozostałych podmiotów chcących ewidencjonować wszystkie zdarzenia księgowe dla własnych potrzeb.</p>

        ";
        // line 39
        echo "
        <a class=\"btn btn-primary btn-lg\" href=\"";
        // line 40
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("register");
        echo "\">Rejestracja &raquo;</a>
      </div>

      <div class=\"col-md-4 mb-5\">
        <h2>Login</h2>
        <hr>
        <div class=\"row\">
          <div class=\"col-md-12\">
            <form action=\"";
        // line 48
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("login");
        echo "\" method=\"post\">

              ";
        // line 51
        echo "              <div class=\"form-group\">
                ";
        // line 53
        echo "                <input type=\"text\" class=\"form-control\" id=\"usr\" name=\"_username\" value=\"";
        echo twig_escape_filter($this->env, (isset($context["lastUsername"]) || array_key_exists("lastUsername", $context) ? $context["lastUsername"] : (function () { throw new RuntimeError('Variable "lastUsername" does not exist.', 53, $this->source); })()), "html", null, true);
        echo "\" placeholder=\"Użytkownik\">
              </div>

              <div class=\"form-group\">
                ";
        // line 58
        echo "                <input type=\"password\" class=\"form-control\" id=\"pwd\" name=\"_password\" placeholder=\"Hasło\">
              </div>


              ";
        // line 63
        echo "              ";
        // line 76
        echo "


              <div class=\"form-group \">
                <small>
                  <input type=\"checkbox\" id=\"remember_me\" name=\"_remember_me\" checked/>
                  <label for=\"remember_me\">Zapamiętaj mnie</label>
                </small>
                <button type=\"submit\" class=\"btn btn-success pull-right\">
                  <span class=\"glyphicon glyphicon-check\"></span>
                  Login
                </button>
              </div>
              <div>
                ";
        // line 93
        echo "              </div>
            </form>
          </div>
        </div>

      </div>
    </div>
  </div>
  <!-- /.row -->

    <div class=\"row\" style=\"margin-top:20px\">
      <div class=\"col-md-4 mb-5\">
        <div class=\"thumbnail\">
          <img src=\"";
        // line 106
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/agro24_index01.jpg"), "html", null, true);
        echo "\" alt=\"\">
          <div class=\"caption\">
            <h4><strong> Prosta obsługa</strong></h4>
            <p align=\"justify\">Funkcjonalność aplikacji oparta jest na intuicji i nie wymaga specjalistycznej wiedzy. Zarządzanie jest w pełni zautomatyzowane.</p>
          </div>
          <p>
            <a href='";
        // line 112
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("register");
        echo "' class=\"btn btn-primary\">Dowiedz się więcej!</a>
          </p>
        </div>
      </div>
      <div class=\"col-md-4 mb-5\">
        <div class=\"thumbnail\">
          <img src=\"";
        // line 118
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/agro24_index03.jpg"), "html", null, true);
        echo "\" alt=\"\">
          <div class=\"caption\">
            <h4><strong> Generowanie raportów</strong></h4>
            <p align=\"justify\">Łatwość tworzenia raportów pozwoli na szybką analizę oraz obsługę dokumentacji w wersji elektronicznej.</p>
          </div>
          <p>
            <a href='";
        // line 124
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("register");
        echo "' class=\"btn btn-primary\">Dowiedz się więcej!</a>
          </p>
        </div>
      </div>
      <div class=\"col-md-4 mb-5\">
        <div class=\"thumbnail\">
          <img src=\"";
        // line 130
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/agro24_index02.jpg"), "html", null, true);
        echo "\" alt=\"\">
          <div class=\"caption\">
            <h4><strong>Szybki podgląd</strong></h4>
            <p align=\"justify\">Automatyzacja procesów pozwalana na natychmiastowy podgląd oraz analizę kosztów i przychodów według okresu rozliczeniowego.</p>
          </div>
          <p>
            <a href='";
        // line 136
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("register");
        echo "' class=\"btn btn-primary\">Dowiedz się więcej!</a>
          </p>
        </div>
      </div>
    </div>
    <!-- /.row -->

  </div>
  <!-- /.container -->
    

</div>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "security/login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  248 => 136,  239 => 130,  230 => 124,  221 => 118,  212 => 112,  203 => 106,  188 => 93,  172 => 76,  170 => 63,  164 => 58,  156 => 53,  153 => 51,  148 => 48,  137 => 40,  134 => 39,  116 => 19,  110 => 15,  104 => 12,  101 => 11,  99 => 10,  96 => 9,  86 => 8,  74 => 5,  69 => 4,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

        {% block stylesheets %}
            <link href=\"{{ asset('css/bootstrap.min.css') }}\" rel=\"stylesheet\" type=\"text/css\">
            <link rel=\"stylesheet\" href=\"{{ asset('admin/assets/font-awesome/4.5.0/css/font-awesome.min.css') }}\" />
        {% endblock %}

{% block body %}

  {% if error %}
    <div class=\"container alert alert-danger\" role=\"alert\">
      <strong>Uwaga!!! </strong>{{ error.messageKey | trans(error.messageData, 'security') }}
    </div>
  {% endif %}

  <header class=\"container bg-primary\">
    <div class=\"row\">
      <div class=\"col-lg-12\">
        <h2 class=\"display-4 text-white mt-5 mb-2\"><img src=\"{{ asset('img/logo.png') }}\" alt=\"E-widencja24\"/></span> E-widencja24</h2>
        <p class=\"lead mb-5 text-white-50\">Dedykowana aplikacja do obsługi księgowej gospodarstw rolnych i rybackich</p>
      </div>
    </div>
  </header>

  <!-- Page Content -->
  <div class=\"container\">
    <div class=\"row\">
      <div class=\"col-md-8 mb-5\">
        <h2>Uproszczona ewidencja przychodów i rozchodów</h2>
        <hr>
        <p align=\"justify\">Wychodząc na przeciw oczekiwaniom beneficjentów Programu Rozwoju Obszarów Wiejskich 2014-2020 - PROW 2014-2020 oraz Programu Operacyjnego \"Rybactwo i Morze\" na lata 2014-2020 - PO RYBY 2014-2020 stworzono aplikację do ewidencjonowania zdarzeń księgowych w gospodarstwie.</p>
        <p align=\"justify\">Aplikacja przeznaczona jest dla uczestników programów obsługiwanych przez Agencję Restrukturyzacji i Modernizacji Rolnictwa oraz pozostałych podmiotów chcących ewidencjonować wszystkie zdarzenia księgowe dla własnych potrzeb.</p>

        {# <small>
          <p style=\"margin-top:10px\">
            Rejestrując się, wyrażasz zgodę na nasz <a href=\"#\">Regulamin</a> i na otrzymywanie e-maili oraz aktualizacji E-widencja24. Potwierdzasz również, że przeczytałeś/aś naszą <a href=\"#\">Politykę Prywatności</a>. Zgadzasz się także na użycie plików cookie przez E-widencja24, aby zapewnić pozytywne wrażenia użytkownikom.
          </p>
        </small> #}

        <a class=\"btn btn-primary btn-lg\" href=\"{{ url(\"register\") }}\">Rejestracja &raquo;</a>
      </div>

      <div class=\"col-md-4 mb-5\">
        <h2>Login</h2>
        <hr>
        <div class=\"row\">
          <div class=\"col-md-12\">
            <form action=\"{{ path('login') }}\" method=\"post\">

              {# formularz logowania z lebelami #}
              <div class=\"form-group\">
                {# <label for=\"usr\">Użytkownik:</label> #}
                <input type=\"text\" class=\"form-control\" id=\"usr\" name=\"_username\" value=\"{{ lastUsername }}\" placeholder=\"Użytkownik\">
              </div>

              <div class=\"form-group\">
                {# <label for=\"pwd\">Hasło:</label> #}
                <input type=\"password\" class=\"form-control\" id=\"pwd\" name=\"_password\" placeholder=\"Hasło\">
              </div>


              {# formularz logowania z ikonami #}
              {# <div style=\"margin-bottom: 15px\" class=\"input-group\">
                <span class=\"input-group-addon\">
                  <i class=\"glyphicon glyphicon-user\"></i>
                </span>
                <input id=\"usr\" type=\"text\" class=\"form-control\" name=\"_username\" value=\"{{ lastUsername }}\" placeholder=\"Użytkownik\">
              </div>

              <div style=\"margin-bottom: 15px\" class=\"input-group\">
                <span class=\"input-group-addon\">
                  <i class=\"glyphicon glyphicon-lock\"></i>
                </span>
                <input id=\"pwd\" type=\"password\" class=\"form-control\" name=\"_password\" placeholder=\"Hasło\">
              </div> #}



              <div class=\"form-group \">
                <small>
                  <input type=\"checkbox\" id=\"remember_me\" name=\"_remember_me\" checked/>
                  <label for=\"remember_me\">Zapamiętaj mnie</label>
                </small>
                <button type=\"submit\" class=\"btn btn-success pull-right\">
                  <span class=\"glyphicon glyphicon-check\"></span>
                  Login
                </button>
              </div>
              <div>
                {# <small>
                  Nie posiadasz konta?<a href=\"{{ url(\"register\") }}\">Zarejestruj się.</a>
                </small> #}
              </div>
            </form>
          </div>
        </div>

      </div>
    </div>
  </div>
  <!-- /.row -->

    <div class=\"row\" style=\"margin-top:20px\">
      <div class=\"col-md-4 mb-5\">
        <div class=\"thumbnail\">
          <img src=\"{{ asset('img/agro24_index01.jpg') }}\" alt=\"\">
          <div class=\"caption\">
            <h4><strong> Prosta obsługa</strong></h4>
            <p align=\"justify\">Funkcjonalność aplikacji oparta jest na intuicji i nie wymaga specjalistycznej wiedzy. Zarządzanie jest w pełni zautomatyzowane.</p>
          </div>
          <p>
            <a href='{{ url(\"register\") }}' class=\"btn btn-primary\">Dowiedz się więcej!</a>
          </p>
        </div>
      </div>
      <div class=\"col-md-4 mb-5\">
        <div class=\"thumbnail\">
          <img src=\"{{ asset('img/agro24_index03.jpg') }}\" alt=\"\">
          <div class=\"caption\">
            <h4><strong> Generowanie raportów</strong></h4>
            <p align=\"justify\">Łatwość tworzenia raportów pozwoli na szybką analizę oraz obsługę dokumentacji w wersji elektronicznej.</p>
          </div>
          <p>
            <a href='{{ url(\"register\") }}' class=\"btn btn-primary\">Dowiedz się więcej!</a>
          </p>
        </div>
      </div>
      <div class=\"col-md-4 mb-5\">
        <div class=\"thumbnail\">
          <img src=\"{{ asset('img/agro24_index02.jpg') }}\" alt=\"\">
          <div class=\"caption\">
            <h4><strong>Szybki podgląd</strong></h4>
            <p align=\"justify\">Automatyzacja procesów pozwalana na natychmiastowy podgląd oraz analizę kosztów i przychodów według okresu rozliczeniowego.</p>
          </div>
          <p>
            <a href='{{ url(\"register\") }}' class=\"btn btn-primary\">Dowiedz się więcej!</a>
          </p>
        </div>
      </div>
    </div>
    <!-- /.row -->

  </div>
  <!-- /.container -->
    

</div>

{% endblock %}
", "security/login.html.twig", "/home/hystou/public_html/agro24/templates/security/login.html.twig");
    }
}
