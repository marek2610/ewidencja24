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

/* kontakt.html.twig */
class __TwigTemplate_fbc61c39bcdc1d8611383d3d83a7831851613ace1b1bd8e4c6b5be5d5cc2e317 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "kontakt.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "kontakt.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "kontakt.html.twig", 1);
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
<form id=\"contact-form\" method=\"\" action=\"\" role=\"form\">

    <div class=\"messages\"></div>

    <div class=\"controls\">

        <div class=\"row\">
            <div class=\"col-md-6\">
                <div class=\"form-group\">
                    <label for=\"form_name\">Firstname *</label>
                    <input id=\"form_name\" type=\"text\" name=\"name\" class=\"form-control\" placeholder=\"Please enter your firstname *\" required=\"required\" data-error=\"Firstname is required.\">
                    <div class=\"help-block with-errors\"></div>
                </div>
            </div>
            <div class=\"col-md-6\">
                <div class=\"form-group\">
                    <label for=\"form_lastname\">Lastname *</label>
                    <input id=\"form_lastname\" type=\"text\" name=\"surname\" class=\"form-control\" placeholder=\"Please enter your lastname *\" required=\"required\" data-error=\"Lastname is required.\">
                    <div class=\"help-block with-errors\"></div>
                </div>
            </div>
        </div>
        <div class=\"row\">
            <div class=\"col-md-6\">
                <div class=\"form-group\">
                    <label for=\"form_email\">Email *</label>
                    <input id=\"form_email\" type=\"email\" name=\"email\" class=\"form-control\" placeholder=\"Please enter your email *\" required=\"required\" data-error=\"Valid email is required.\">
                    <div class=\"help-block with-errors\"></div>
                </div>
            </div>
            <div class=\"col-md-6\">
                <div class=\"form-group\">
                    <label for=\"form_need\">Please specify your need *</label>
                    <select id=\"form_need\" name=\"need\" class=\"form-control\" required=\"required\" data-error=\"Please specify your need.\">
                        <option value=\"\"></option>
                        <option value=\"Request quotation\">Request quotation</option>
                        <option value=\"Request order status\">Request order status</option>
                        <option value=\"Request copy of an invoice\">Request copy of an invoice</option>
                        <option value=\"Other\">Other</option>
                    </select>
                    <div class=\"help-block with-errors\"></div>
                </div>
            </div>
        </div>
        <div class=\"row\">
            <div class=\"col-md-12\">
                <div class=\"form-group\">
                    <label for=\"form_message\">Message *</label>
                    <textarea id=\"form_message\" name=\"message\" class=\"form-control\" placeholder=\"Message for me *\" rows=\"4\" required=\"required\" data-error=\"Please, leave us a message.\"></textarea>
                    <div class=\"help-block with-errors\"></div>
                </div>
            </div>
            <div class=\"col-md-12\">
                <input type=\"submit\" class=\"btn btn-success btn-send\" value=\"Send message\">
            </div>
        </div>
        <div class=\"row\">
            <div class=\"col-md-12\">
                <p class=\"text-muted\">
                    <strong>*</strong> These fields are required. Contact form template by
                    <a href=\"https://bootstrapious.com/p/how-to-build-a-working-bootstrap-contact-form\" target=\"_blank\">Bootstrapious</a>.</p>
            </div>
        </div>
    </div>

</form>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "kontakt.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  68 => 4,  58 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block body %}

<form id=\"contact-form\" method=\"\" action=\"\" role=\"form\">

    <div class=\"messages\"></div>

    <div class=\"controls\">

        <div class=\"row\">
            <div class=\"col-md-6\">
                <div class=\"form-group\">
                    <label for=\"form_name\">Firstname *</label>
                    <input id=\"form_name\" type=\"text\" name=\"name\" class=\"form-control\" placeholder=\"Please enter your firstname *\" required=\"required\" data-error=\"Firstname is required.\">
                    <div class=\"help-block with-errors\"></div>
                </div>
            </div>
            <div class=\"col-md-6\">
                <div class=\"form-group\">
                    <label for=\"form_lastname\">Lastname *</label>
                    <input id=\"form_lastname\" type=\"text\" name=\"surname\" class=\"form-control\" placeholder=\"Please enter your lastname *\" required=\"required\" data-error=\"Lastname is required.\">
                    <div class=\"help-block with-errors\"></div>
                </div>
            </div>
        </div>
        <div class=\"row\">
            <div class=\"col-md-6\">
                <div class=\"form-group\">
                    <label for=\"form_email\">Email *</label>
                    <input id=\"form_email\" type=\"email\" name=\"email\" class=\"form-control\" placeholder=\"Please enter your email *\" required=\"required\" data-error=\"Valid email is required.\">
                    <div class=\"help-block with-errors\"></div>
                </div>
            </div>
            <div class=\"col-md-6\">
                <div class=\"form-group\">
                    <label for=\"form_need\">Please specify your need *</label>
                    <select id=\"form_need\" name=\"need\" class=\"form-control\" required=\"required\" data-error=\"Please specify your need.\">
                        <option value=\"\"></option>
                        <option value=\"Request quotation\">Request quotation</option>
                        <option value=\"Request order status\">Request order status</option>
                        <option value=\"Request copy of an invoice\">Request copy of an invoice</option>
                        <option value=\"Other\">Other</option>
                    </select>
                    <div class=\"help-block with-errors\"></div>
                </div>
            </div>
        </div>
        <div class=\"row\">
            <div class=\"col-md-12\">
                <div class=\"form-group\">
                    <label for=\"form_message\">Message *</label>
                    <textarea id=\"form_message\" name=\"message\" class=\"form-control\" placeholder=\"Message for me *\" rows=\"4\" required=\"required\" data-error=\"Please, leave us a message.\"></textarea>
                    <div class=\"help-block with-errors\"></div>
                </div>
            </div>
            <div class=\"col-md-12\">
                <input type=\"submit\" class=\"btn btn-success btn-send\" value=\"Send message\">
            </div>
        </div>
        <div class=\"row\">
            <div class=\"col-md-12\">
                <p class=\"text-muted\">
                    <strong>*</strong> These fields are required. Contact form template by
                    <a href=\"https://bootstrapious.com/p/how-to-build-a-working-bootstrap-contact-form\" target=\"_blank\">Bootstrapious</a>.</p>
            </div>
        </div>
    </div>

</form>

{% endblock %}
", "kontakt.html.twig", "/home/hystou/public_html/agro24/templates/kontakt.html.twig");
    }
}
