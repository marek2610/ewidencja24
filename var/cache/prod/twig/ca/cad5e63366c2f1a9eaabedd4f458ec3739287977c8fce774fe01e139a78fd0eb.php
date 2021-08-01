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

/* payment/payment.html.twig */
class __TwigTemplate_c9fd8f08de2e89788b64a78823a938842cb06410797f402007836a552712d84a extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'stylesheet' => [$this, 'block_stylesheet'],
            'script' => [$this, 'block_script'],
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
        $this->parent = $this->loadTemplate("base.html.twig", "payment/payment.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_stylesheet($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 4
        echo "\t";
        // line 5
        echo "\t\t<link href=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("fonts/fontawesome/css/all.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\">
\t\t<link href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("fonts/fontawesome/css/brands.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\">
\t\t<link href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("fonts/fontawesome/css/fontawesome.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\">
\t\t<link href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("fonts/fontawesome/css/regular.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\">
\t\t<link href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("fonts/fontawesome/css/solid.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\">
";
    }

    // line 12
    public function block_script($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 13
        echo "\t";
        // line 14
        echo "\t<script src=\"https://code.jquery.com/jquery-1.12.4.js\"></script>
\t<script src=\"https://code.jquery.com/ui/1.12.1/jquery-ui.js\"></script>
\t<script type=\"text/javascript\">
\t\t\$(function () {
\t\t\$(\"#tabs\").tabs();
\t});
\t</script>

";
    }

    // line 25
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 26
        echo "<div class=\"panel panel-primary\">
\t<!-- Default panel contents -->
\t<div class=\"panel-heading\">
\t\t<h3 class=\"panel-title\">
\t\t\tForma płatności
\t\t</h3>
\t</div>
\t<div class=\"panel-body\">

\t\t
\t\t<!-- List group -->
\t\t<ul id=\"tabs\" class=\"list-group\">
\t\t\t<li class=\"list-group-item\">
\t\t\t\t<div>
\t\t\t\t\t<p class=\"alert alert-danger\">
\t\t\t\t\t\t<strong>
\t\t\t\t\t\t\tUwaga!!!
\t\t\t\t\t\t</strong>Opłata abonamentowa za jeden pełny roku użytkowania wynosi
\t\t\t\t\t\t<strong>
\t\t\t\t\t\t\t100,00 PLN
\t\t\t\t\t\t</strong>.
\t\t\t\t\t</p>

\t\t\t\t\t<ul class=\"nav nav-tabs\" role=\"tablist\">
\t\t\t\t\t\t<li class=\"active\">
\t\t\t\t\t\t\t<a class=\"\" href=\"#tabs-1\">
\t\t\t\t\t\t\t\t<i class=\"fa fa-university\"></i>
\t\t\t\t\t\t\t\tPrzelew oline</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li >
\t\t\t\t\t\t\t<a class=\"\" href=\"#tabs-2\">
\t\t\t\t\t\t\t\t<i class=\"fa fa-credit-card\"></i>
\t\t\t\t\t\t\t\tKarta kredytowa</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<a class=\"\" href=\"#tabs-3\">
\t\t\t\t\t\t\t\t<i class=\"fa fa-paypal\"></i>
\t\t\t\t\t\t\t\tOnline</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t</ul>


\t\t\t\t\t<div class=\"tab-content\">
\t\t\t\t\t\t<div id=\"tabs-1\">
\t\t\t\t\t\t\t<table class=\"table\" style=\"margin-top: 15px\">
\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t<th>BANK:</th>
\t\t\t\t\t\t\t\t\t<td>ING BANK ŚLĄSKI</td>
\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t<th>Numer rachunku bankowego</th>
\t\t\t\t\t\t\t\t\t<td>55 1050 1979 1000 0090 6670 3290</td>
\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t<th>IBAN:</th>
\t\t\t\t\t\t\t\t\t<td>PL 55 1050 1979 1000 0090 6670 3290</td>
\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t<th>Kod BIC SWIFT:</th>
\t\t\t\t\t\t\t\t\t<td>INGBPLPW</td>
\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t<th>Tytuł przelewu:</th>
\t\t\t\t\t\t\t\t\t<td>EP ";
        // line 89
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "ep", [], "any", false, false, false, 89), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "nazwisko", [], "any", false, false, false, 89), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "imie", [], "any", false, false, false, 89), "html", null, true);
        echo "</td>
\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t</table>

\t\t\t\t\t\t\t<p class=\"alert alert-info\">
\t\t\t\t\t\t\t\t<strong>Ważne!!!
\t\t\t\t\t\t\t\t</strong>Opłata abonamentu przelewem tradycyjnym nie generuje dodatkowych kosztów po stronie Użytkownika. Po zrealizowaniu przelewu proszę o kontakt z administratorem w celu przyspieszenia wryfikacji.</p>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div id=\"tabs-2\">
\t\t\t\t\t\t\t<div style=\"margin-top: 15px\">
\t\t\t\t\t\t\t\t<p class=\"alert alert-info text-center\"> Opcja przelewu za pomocą karty kredytowej obecnie niedostępna</p>
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t<form role=\"form\">
\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t<label for=\"username\">Imię i nazwisko (umieszczone na karcie)</label>
\t\t\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control\" name=\"username\" placeholder=\"\" required=\"\" disabled>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<!-- form-group.// -->

\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t<label for=\"cardNumber\">Numer karty kredytowej</label>
\t\t\t\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control\" name=\"cardNumber\" placeholder=\"\" disabled>
\t\t\t\t\t\t\t\t\t\t<div class=\"input-group-addon\">
\t\t\t\t\t\t\t\t\t\t\t<span class=\"input-group-text text-muted\">
\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-cc-visa\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-cc-amex\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-cc-mastercard\"></i>
\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<!-- form-group.// -->

\t\t\t\t\t\t\t\t<div class=\"row\" >
\t\t\t\t\t\t\t\t\t<div class=\"col-sm-8\">
\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\" >
\t\t\t\t\t\t\t\t\t\t\t<label>
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"hidden-xs\">Ważność</span>
\t\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"input-group\" >
\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"number\" class=\"form-control\" placeholder=\"MM\" name=\"\" disabled>
\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"number\" class=\"form-control\" placeholder=\"YY\" name=\"\" disabled>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"col-sm-4\">
\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t<label data-toggle=\"tooltip\" title=\"\" data-original-title=\"3 digits code on back side of the card\">CVV
\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-question-circle\" data-toggle=\"tooltip\" title=\"Kod CVV/CVC (Card Verification Value/Code) znajduje się na odwrocie karty kredytowej po prawej stronie w białym pasku podpisu i są to zawsze ostatnie 3 cyfry dla kart VISA i MasterCard.\"></i>
\t\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t\t<input type=\"number\" class=\"form-control\" required=\"\" disabled>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<!-- form-group.// -->
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<!-- row.// -->
\t\t\t\t\t\t\t\t<button class=\"subscribe btn btn-primary btn-block\" type=\"button\" disabled>
\t\t\t\t\t\t\t\t\tPotwierdź
\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t</form>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<!-- tab-pane.// -->
\t\t\t\t\t\t<div id=\"tabs-3\">
\t\t\t\t\t\t\t<p style=\"margin-top: 15px\" class=\"alert alert-info text-center\">Opcja przelewu za pomocą Paypal obecnie niedostępna.</p>
\t\t\t\t\t\t\t<p>Paypal is easiest way to pay online</p>
\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-primary\" disabled>
\t\t\t\t\t\t\t\t\t<i class=\"fa fa-paypal\"></i>
\t\t\t\t\t\t\t\t\tPaypal
\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t<p class=\"alert alert-info\">
\t\t\t\t\t\t\t\t<strong>Ważne!!!</strong>
\t\t\t\t\t\t\t\tZe względu na dodatkowe opłaty naliczane przez operatora płatności elektronicznych, kwota bazowa zostanie powiększona o 15,00 zł. Co łącznie daje 115,00 zł opłaty abonamentowej.
\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<!-- tab-pane.// -->
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-md-3\"></div>
\t\t\t</li>
\t\t</ul>

\t\t<div>
\t\t\t<!-- List group -->
\t\t\t<ul class=\"list-group\">
\t\t\t\t<li class=\"list-group-item\">
\t\t\t\t\t<a class=\"btn btn-default\" href=\"";
        // line 181
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("dokumenty_index");
        echo "\">
\t\t\t\t\t\t<span class=\"glyphicon glyphicon-arrow-left\"></span>
\t\t\t\t\t\tPowrót</a>
\t\t\t\t</li>
\t\t\t</ul>
\t\t</div>
\t</div>

</div>



";
    }

    public function getTemplateName()
    {
        return "payment/payment.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  263 => 181,  164 => 89,  99 => 26,  95 => 25,  83 => 14,  81 => 13,  77 => 12,  71 => 9,  67 => 8,  63 => 7,  59 => 6,  54 => 5,  52 => 4,  48 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "payment/payment.html.twig", "/home/hystou/public_html/agro24/templates/payment/payment.html.twig");
    }
}
