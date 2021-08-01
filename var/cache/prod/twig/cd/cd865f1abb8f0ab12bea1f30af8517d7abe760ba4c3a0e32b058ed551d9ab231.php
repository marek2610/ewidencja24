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

/* agro/kontakt.html.twig */
class __TwigTemplate_feb022667ead87489ab186b976d073477176c721a2c6c738e2ec00989dab5ee8 extends Template
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
        $this->parent = $this->loadTemplate("base.html.twig", "agro/kontakt.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 4
        echo "
    <div class=\"panel panel-primary\">
        <div class=\"panel-heading\">
            <h3 class=\"panel-title\">Kontakt</h3>
        </div>
        <div class=\"panel-body\">
        ";
        // line 10
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form_message"] ?? null), 'form_start', ["attr" => ["novalidate" => "novalidate"]]);
        echo "
            <!-- List group -->
            <ul class=\"list-group\">
                <li class=\"list-group-item text-center\">
                    Masz jakieś pytania lub sugestie? Nie wahaj się z nami skontaktować. Nasz zespół skontaktuje się z Tobą w ciągu kilku godzin, aby Ci pomóc.
                </li>
            </ul>
                <form id=\"contact-form\" method=\"post\" action=\"\" role=\"form\">
                    <div class=\"controls\">
                        <div class=\"row\">
                            <div class=\"col-md-6\">
                                <div class=\"form-group\">
                                    ";
        // line 22
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form_message"] ?? null), "imie", [], "any", false, false, false, 22), 'label');
        echo " *
                                    ";
        // line 23
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form_message"] ?? null), "imie", [], "any", false, false, false, 23), 'widget');
        echo "
                                </div>
                            </div>
                            <div class=\"col-md-6\">
                                <div class=\"form-group\">
                                    ";
        // line 28
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form_message"] ?? null), "nazwisko", [], "any", false, false, false, 28), 'label');
        echo " *
                                    ";
        // line 29
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form_message"] ?? null), "nazwisko", [], "any", false, false, false, 29), 'widget');
        echo "
                                </div>
                            </div>
                        </div>
                        <div class=\"row\">
                            <div class=\"col-md-6\">
                                <div class=\"form-group\">
                                    ";
        // line 36
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form_message"] ?? null), "email", [], "any", false, false, false, 36), 'label');
        echo " *
                                    ";
        // line 37
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form_message"] ?? null), "email", [], "any", false, false, false, 37), 'widget');
        echo "
                                </div>
                            </div>
                            <div class=\"col-md-6\">
                                <div class=\"form-group\">
                                    ";
        // line 42
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form_message"] ?? null), "temat", [], "any", false, false, false, 42), 'label');
        echo " *
                                    ";
        // line 43
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form_message"] ?? null), "temat", [], "any", false, false, false, 43), 'widget');
        echo "
                                </div>
                            </div>
                        </div>
                        <div class=\"row\">
                            <div class=\"col-md-12\">
                                <div class=\"form-group\">
                                    ";
        // line 50
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form_message"] ?? null), "message", [], "any", false, false, false, 50), 'label');
        echo " *
                                    ";
        // line 51
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form_message"] ?? null), "message", [], "any", false, false, false, 51), 'widget');
        echo "
                                </div>
                            </div>
                            <div class=\"col-md-12\">
                                <input type=\"hidden\" name=\"token\" value=\"";
        // line 55
        echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken("delete-item"), "html", null, true);
        echo "\"/>
                                ";
        // line 56
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form_message"] ?? null), "submit", [], "any", false, false, false, 56), 'row');
        echo "
                            </div>
                            ";
        // line 58
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form_message"] ?? null), 'rest');
        echo "
                        </div>
                        <div class=\"row\">
                            <div class=\"col-md-12\">
                                <p class=\"text-muted\">
                                    <strong>*</strong> Wymagane pola. Contact form template by
                                    <a href=\"https://bootstrapious.com/p/how-to-build-a-working-bootstrap-contact-form\" target=\"_blank\">Bootstrapious</a>.</p>
                            </div>
                        </div>
                    </div>
                </form>
        ";
        // line 69
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form_message"] ?? null), 'form_end');
        echo "


            <a class=\"btn btn-default\" href=\"";
        // line 72
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("dokumenty_index");
        echo "\"><span class=\"glyphicon glyphicon-arrow-left\"></span> Powrót</a>
        </div>
    </div>

";
    }

    public function getTemplateName()
    {
        return "agro/kontakt.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  165 => 72,  159 => 69,  145 => 58,  140 => 56,  136 => 55,  129 => 51,  125 => 50,  115 => 43,  111 => 42,  103 => 37,  99 => 36,  89 => 29,  85 => 28,  77 => 23,  73 => 22,  58 => 10,  50 => 4,  46 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "agro/kontakt.html.twig", "/home/hystou/public_html/agro24/templates/agro/kontakt.html.twig");
    }
}
