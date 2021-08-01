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
class __TwigTemplate_67f4cb3b33149762213a695b75b8597953f67210254b0672ef09e648cb867988 extends Template
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
        $this->parent = $this->loadTemplate("base.html.twig", "security/login.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 4
        echo "            <link href=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\">
            <link rel=\"stylesheet\" href=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("admin/assets/font-awesome/4.5.0/css/font-awesome.min.css"), "html", null, true);
        echo "\" />
        ";
    }

    // line 8
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 9
        echo "
  ";
        // line 10
        if (($context["error"] ?? null)) {
            // line 11
            echo "    <div class=\"container alert alert-danger\" role=\"alert\">
      <strong>Uwaga!!! </strong>";
            // line 12
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, ($context["error"] ?? null), "messageKey", [], "any", false, false, false, 12), twig_get_attribute($this->env, $this->source, ($context["error"] ?? null), "messageData", [], "any", false, false, false, 12), "security"), "html", null, true);
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
        <p>Wychodząc na przeciw oczekiwaniom gospodarst rolnych i rybackich oraz beneficjentów Programu Rozwoju Obszarów Wiejskich 2014-2020 - PROW 2014-2020 oraz Programu Operacyjnego \"Rybactwo i Morze\" na lata 2014-2020 - PO RYBY 2014-2020 stworzono aplikację do ewidencionowania zdarzeń księgowych w gospodarstwie.</p>
        <p>Aplikacja przeznaczona jest dla uczestników programów obsługiwanych przez Agencję Restrukturyzacji i Modernizacji Rolnictwa oraz pozostałych podmiotów chcących ewidencionować wszystkie zdarzenia księgowe dla własnych potrzeb.</p>


        ";
        // line 40
        echo "
        <a class=\"btn btn-primary btn-lg\" href=\"";
        // line 41
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("register");
        echo "\">Rejestracja &raquo;</a>
      </div>

      <div class=\"col-md-4 mb-5\">
        <h2>Login</h2>
        <hr>
        <div class=\"row\">
          <div class=\"col-md-12\">
            <form action=\"";
        // line 49
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("login");
        echo "\" method=\"post\">

              ";
        // line 52
        echo "              <div class=\"form-group\">
                ";
        // line 54
        echo "                <input type=\"text\" class=\"form-control\" id=\"usr\" name=\"_username\" value=\"";
        echo twig_escape_filter($this->env, ($context["lastUsername"] ?? null), "html", null, true);
        echo "\" placeholder=\"Użytkownik\">
              </div>

              <div class=\"form-group\">
                ";
        // line 59
        echo "                <input type=\"password\" class=\"form-control\" id=\"pwd\" name=\"_password\" placeholder=\"Hasło\">
              </div>


              ";
        // line 64
        echo "              ";
        // line 77
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
        // line 94
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
        // line 107
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/agro24_index01.jpg"), "html", null, true);
        echo "\" alt=\"\">
          <div class=\"caption\">
            <h4><strong> Prosta obsługa</strong></h4>
            <p>Funkcjonalność aplikacji oparta jest na intuicji i nie wymaga specjalistycznej wiedzy w zakresie obsługi. Zarządzanie jest w pełni zautomatyzowane.</p>
          </div>
          <p>
            <a href='";
        // line 113
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("register");
        echo "' class=\"btn btn-primary\">Dowiedz się więcej!</a>
          </p>
        </div>
      </div>
      <div class=\"col-md-4 mb-5\">
        <div class=\"thumbnail\">
          <img src=\"";
        // line 119
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/agro24_index03.jpg"), "html", null, true);
        echo "\" alt=\"\">
          <div class=\"caption\">
            <h4><strong> Generowanie raportów</strong></h4>
            <p>Łatwość tworzenia raportów pozwoli na szybką analizę oraz obsługę dokumentacji w wersji elektronicznej oraz papierowej.</p>
          </div>
          <p>
            <a href='";
        // line 125
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("register");
        echo "' class=\"btn btn-primary\">Dowiedz się więcej!</a>
          </p>
        </div>
      </div>
      <div class=\"col-md-4 mb-5\">
        <div class=\"thumbnail\">
          <img src=\"";
        // line 131
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/agro24_index02.jpg"), "html", null, true);
        echo "\" alt=\"\">
          <div class=\"caption\">
            <h4><strong>Szybki podgląd</strong></h4>
            <p>Automatyzacja procesów pozwalana na natychmiastowy podgląd oraz analizę kosztów i przychodów według okresu rozliczeniowego.</p>
          </div>
          <p>
            <a href='";
        // line 137
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
        return array (  219 => 137,  210 => 131,  201 => 125,  192 => 119,  183 => 113,  174 => 107,  159 => 94,  143 => 77,  141 => 64,  135 => 59,  127 => 54,  124 => 52,  119 => 49,  108 => 41,  105 => 40,  86 => 19,  80 => 15,  74 => 12,  71 => 11,  69 => 10,  66 => 9,  62 => 8,  56 => 5,  51 => 4,  47 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "security/login.html.twig", "/home/hystou/public_html/agro24/templates/security/login.html.twig");
    }
}
