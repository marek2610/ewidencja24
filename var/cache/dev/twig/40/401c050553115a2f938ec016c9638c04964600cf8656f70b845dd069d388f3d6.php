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
class __TwigTemplate_4c09874e04b3c86c67407fc7203f58af0d2b28d215061ca04bcd0aeef61e028e extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "agro/kontakt.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "agro/kontakt.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "agro/kontakt.html.twig", 1);
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
            <h3 class=\"panel-title\">Kontakt</h3>
        </div>
        <div class=\"panel-body\">
        ";
        // line 10
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form_message"]) || array_key_exists("form_message", $context) ? $context["form_message"] : (function () { throw new RuntimeError('Variable "form_message" does not exist.', 10, $this->source); })()), 'form_start', ["attr" => ["novalidate" => "novalidate"]]);
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
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form_message"]) || array_key_exists("form_message", $context) ? $context["form_message"] : (function () { throw new RuntimeError('Variable "form_message" does not exist.', 22, $this->source); })()), "imie", [], "any", false, false, false, 22), 'label');
        echo " *
                                    ";
        // line 23
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form_message"]) || array_key_exists("form_message", $context) ? $context["form_message"] : (function () { throw new RuntimeError('Variable "form_message" does not exist.', 23, $this->source); })()), "imie", [], "any", false, false, false, 23), 'widget');
        echo "
                                </div>
                            </div>
                            <div class=\"col-md-6\">
                                <div class=\"form-group\">
                                    ";
        // line 28
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form_message"]) || array_key_exists("form_message", $context) ? $context["form_message"] : (function () { throw new RuntimeError('Variable "form_message" does not exist.', 28, $this->source); })()), "nazwisko", [], "any", false, false, false, 28), 'label');
        echo " *
                                    ";
        // line 29
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form_message"]) || array_key_exists("form_message", $context) ? $context["form_message"] : (function () { throw new RuntimeError('Variable "form_message" does not exist.', 29, $this->source); })()), "nazwisko", [], "any", false, false, false, 29), 'widget');
        echo "
                                </div>
                            </div>
                        </div>
                        <div class=\"row\">
                            <div class=\"col-md-6\">
                                <div class=\"form-group\">
                                    ";
        // line 36
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form_message"]) || array_key_exists("form_message", $context) ? $context["form_message"] : (function () { throw new RuntimeError('Variable "form_message" does not exist.', 36, $this->source); })()), "email", [], "any", false, false, false, 36), 'label');
        echo " *
                                    ";
        // line 37
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form_message"]) || array_key_exists("form_message", $context) ? $context["form_message"] : (function () { throw new RuntimeError('Variable "form_message" does not exist.', 37, $this->source); })()), "email", [], "any", false, false, false, 37), 'widget');
        echo "
                                </div>
                            </div>
                            <div class=\"col-md-6\">
                                <div class=\"form-group\">
                                    ";
        // line 42
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form_message"]) || array_key_exists("form_message", $context) ? $context["form_message"] : (function () { throw new RuntimeError('Variable "form_message" does not exist.', 42, $this->source); })()), "temat", [], "any", false, false, false, 42), 'label');
        echo " *
                                    ";
        // line 43
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form_message"]) || array_key_exists("form_message", $context) ? $context["form_message"] : (function () { throw new RuntimeError('Variable "form_message" does not exist.', 43, $this->source); })()), "temat", [], "any", false, false, false, 43), 'widget');
        echo "
                                </div>
                            </div>
                        </div>
                        <div class=\"row\">
                            <div class=\"col-md-12\">
                                <div class=\"form-group\">
                                    ";
        // line 50
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form_message"]) || array_key_exists("form_message", $context) ? $context["form_message"] : (function () { throw new RuntimeError('Variable "form_message" does not exist.', 50, $this->source); })()), "message", [], "any", false, false, false, 50), 'label');
        echo " *
                                    ";
        // line 51
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form_message"]) || array_key_exists("form_message", $context) ? $context["form_message"] : (function () { throw new RuntimeError('Variable "form_message" does not exist.', 51, $this->source); })()), "message", [], "any", false, false, false, 51), 'widget');
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
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form_message"]) || array_key_exists("form_message", $context) ? $context["form_message"] : (function () { throw new RuntimeError('Variable "form_message" does not exist.', 56, $this->source); })()), "submit", [], "any", false, false, false, 56), 'row');
        echo "
                            </div>
                            ";
        // line 58
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form_message"]) || array_key_exists("form_message", $context) ? $context["form_message"] : (function () { throw new RuntimeError('Variable "form_message" does not exist.', 58, $this->source); })()), 'rest');
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
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form_message"]) || array_key_exists("form_message", $context) ? $context["form_message"] : (function () { throw new RuntimeError('Variable "form_message" does not exist.', 69, $this->source); })()), 'form_end');
        echo "


            <a class=\"btn btn-default\" href=\"";
        // line 72
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("dokumenty_index");
        echo "\"><span class=\"glyphicon glyphicon-arrow-left\"></span> Powrót</a>
        </div>
    </div>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

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
        return array (  183 => 72,  177 => 69,  163 => 58,  158 => 56,  154 => 55,  147 => 51,  143 => 50,  133 => 43,  129 => 42,  121 => 37,  117 => 36,  107 => 29,  103 => 28,  95 => 23,  91 => 22,  76 => 10,  68 => 4,  58 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block body %}

    <div class=\"panel panel-primary\">
        <div class=\"panel-heading\">
            <h3 class=\"panel-title\">Kontakt</h3>
        </div>
        <div class=\"panel-body\">
        {{ form_start(form_message, {'attr': {'novalidate' : 'novalidate'}}) }}
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
                                    {{ form_label(form_message.imie) }} *
                                    {{ form_widget(form_message.imie) }}
                                </div>
                            </div>
                            <div class=\"col-md-6\">
                                <div class=\"form-group\">
                                    {{ form_label(form_message.nazwisko) }} *
                                    {{ form_widget(form_message.nazwisko) }}
                                </div>
                            </div>
                        </div>
                        <div class=\"row\">
                            <div class=\"col-md-6\">
                                <div class=\"form-group\">
                                    {{ form_label(form_message.email) }} *
                                    {{ form_widget(form_message.email) }}
                                </div>
                            </div>
                            <div class=\"col-md-6\">
                                <div class=\"form-group\">
                                    {{ form_label(form_message.temat) }} *
                                    {{ form_widget(form_message.temat) }}
                                </div>
                            </div>
                        </div>
                        <div class=\"row\">
                            <div class=\"col-md-12\">
                                <div class=\"form-group\">
                                    {{ form_label(form_message.message) }} *
                                    {{ form_widget(form_message.message) }}
                                </div>
                            </div>
                            <div class=\"col-md-12\">
                                <input type=\"hidden\" name=\"token\" value=\"{{ csrf_token('delete-item') }}\"/>
                                {{ form_row(form_message.submit) }}
                            </div>
                            {{ form_rest(form_message) }}
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
        {{ form_end(form_message) }}


            <a class=\"btn btn-default\" href=\"{{ url(\"dokumenty_index\") }}\"><span class=\"glyphicon glyphicon-arrow-left\"></span> Powrót</a>
        </div>
    </div>

{% endblock %}
", "agro/kontakt.html.twig", "/home/hystou/public_html/agro24/templates/agro/kontakt.html.twig");
    }
}
