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

/* register/register.html.twig */
class __TwigTemplate_d6bcbf8788cd990164073ec62cb168dc8ec66d18b5b5ce11d0e13368fda4e08f extends Template
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
        $this->parent = $this->loadTemplate("base.html.twig", "register/register.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 4
        echo "
\t<div
\t\tclass=\"panel panel-primary\">
\t\t<!-- Default panel contents -->
\t\t<div class=\"panel-heading\">
\t\t\t<h4>
\t\t\t\tRejestracja
\t\t\t</h4>
\t\t</div>
\t\t<div class=\"row\">
\t\t\t<div class=\"panel-body\">
\t\t\t\t<div class=\"col-md-3\">
                </div>
\t\t\t\t<div class=\"form-group col-md-6\">
\t\t\t\t\t<div class=\"form-row\">
\t\t\t\t\t\t";
        // line 19
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form_register"] ?? null), 'form_start', ["attr" => ["novalidate" => "novalidate"]]);
        echo "
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t";
        // line 21
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form_register"] ?? null), "username", [], "any", false, false, false, 21), 'row');
        echo "
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"form-group \">
\t\t\t\t\t\t\t";
        // line 24
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form_register"] ?? null), "email", [], "any", false, false, false, 24), 'row');
        echo "
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"form-group \">
\t\t\t\t\t\t\t";
        // line 27
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form_register"] ?? null), "password", [], "any", false, false, false, 27), "first", [], "any", false, false, false, 27), 'row');
        echo "
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"form-group \">
\t\t\t\t\t\t\t";
        // line 30
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form_register"] ?? null), "password", [], "any", false, false, false, 30), "second", [], "any", false, false, false, 30), 'row');
        echo "
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"form-group \">
\t\t\t\t\t\t\t";
        // line 33
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form_register"] ?? null), "ep", [], "any", false, false, false, 33), 'row');
        echo "
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"form-group \">
\t\t\t\t\t\t\t";
        // line 36
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form_register"] ?? null), "imie", [], "any", false, false, false, 36), 'row');
        echo "
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"form-group \">
\t\t\t\t\t\t\t";
        // line 39
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form_register"] ?? null), "nazwisko", [], "any", false, false, false, 39), 'row');
        echo "
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"form-group \">
\t\t\t\t\t\t\t";
        // line 42
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form_register"] ?? null), "znaksprawy", [], "any", false, false, false, 42), 'row');
        echo "
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"form-group text-justify\">
\t\t\t\t\t\t\t<small>
\t\t\t\t\t\t\t\tRejestrując się, wyrażasz zgodę na nasz
\t\t\t\t\t\t\t\t<a href=\"";
        // line 47
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("pdf/Regulamin_systemu_e-widencja24.pl.pdf"), "html", null, true);
        echo "\">Regulamin</a>
\t\t\t\t\t\t\t\ti na otrzymywanie e-maili oraz aktualizacji E-widencja24. Potwierdzasz również, że przeczytałeś/aś naszą
\t\t\t\t\t\t\t\t<a href=\"";
        // line 49
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("pdf/Polityka_prywatnosci_e-widencja24.pl.pdf"), "html", null, true);
        echo "\">Politykę Prywatności</a> oraz <a href=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("pdf/Klauzula_informacyjna_systemu_e-widencja24.pl.pdf"), "html", null, true);
        echo "\">Kaluzulę informacyjną </a>. Zgadzasz się także na użycie plików cookie przez E-widencja24, aby zapewnić pozytywne wrażenia użytkownikom.
\t\t\t\t\t\t\t</small>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"form-row\">
\t\t\t\t\t\t";
        // line 54
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form_register"] ?? null), "submit", [], "any", false, false, false, 54), 'row');
        echo "
\t\t\t\t\t\t";
        // line 55
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form_register"] ?? null), "reset", [], "any", false, false, false, 55), 'row');
        echo "
\t\t\t\t\t</div>
\t\t\t\t\t";
        // line 57
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form_register"] ?? null), 'form_end');
        echo "
\t\t\t\t\t<div class=\"form-row\">
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
";
    }

    public function getTemplateName()
    {
        return "register/register.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  146 => 57,  141 => 55,  137 => 54,  127 => 49,  122 => 47,  114 => 42,  108 => 39,  102 => 36,  96 => 33,  90 => 30,  84 => 27,  78 => 24,  72 => 21,  67 => 19,  50 => 4,  46 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "register/register.html.twig", "/home/hystou/public_html/agro24/templates/register/register.html.twig");
    }
}
