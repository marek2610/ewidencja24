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

/* base.html.twig */
class __TwigTemplate_29838d8e1954e443da6f07b30c3d5f7f0b50d50c6edcf3b089de77a2f044a6d1 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'stylesheets' => [$this, 'block_stylesheets'],
            'script' => [$this, 'block_script'],
            'body' => [$this, 'block_body'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\">
        <title>
            ";
        // line 6
        $this->displayBlock('title', $context, $blocks);
        // line 9
        echo "        </title>
        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("favicon_old.ico"), "html", null, true);
        echo "?v=2\" />

        ";
        // line 12
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 16
        echo "
        ";
        // line 18
        echo "        <script type=\"text/javascript\" src=\"//code.jquery.com/jquery-1.9.1.min.js\"></script> 
        <script type=\"text/javascript\" src=\"//ciasteczka.eu/cookiesEU-latest.min.js\"></script> 
        <script type=\"text/javascript\">
            jQuery(document).ready(function(){
                jQuery.fn.cookiesEU();
            });
        </script>
        ";
        // line 25
        $this->displayBlock('script', $context, $blocks);
        // line 27
        echo "



    </head>
    <body style=\"margin:0; padding:0; height:100%\">
        <div class=\"container\" style=\"margin-top: 15px\">
            <ul class=\"nav nav-pills\">
                <li>
                    <img src=\"";
        // line 36
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/logo4.png"), "html", null, true);
        echo "\" alt=\"E-widencja24.pl\" style=\"margin-right: 4px\"/>
                </li>
                ";
        // line 38
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_USER")) {
            // line 39
            echo "                    ";
            $this->loadTemplate("menuZalogowany.twig", "base.html.twig", 39)->display($context);
            // line 40
            echo "                ";
        } else {
            // line 41
            echo "                    ";
            $this->loadTemplate("menuNieZalogowany.twig", "base.html.twig", 41)->display($context);
            // line 42
            echo "                ";
        }
        // line 43
        echo "                <li role=\"presentation\" ><a href=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("agro_system");
        echo "\">System</a></li>
                <li role=\"presentation\"><a href=\"";
        // line 44
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("agro_kontakt");
        echo "\">Kontakt</a></li>
                ";
        // line 45
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
            // line 46
            echo "                     ";
            $this->loadTemplate("menuAdmin.twig", "base.html.twig", 46)->display($context);
            // line 47
            echo "                ";
        }
        // line 48
        echo "                <div class=\"clearfix\"></div>
            </ul>
        </div>
        
        <hr>


        <div class=\"container\">
            <div class=\"text-center\">
                ";
        // line 57
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 57, $this->source); })()), "flashes", [0 => "success"], "method", false, false, false, 57));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 58
            echo "                    <div class=\"alert alert-success\" role=\"alert\">
                        <strong>Sukces!!! </strong>";
            // line 59
            echo twig_escape_filter($this->env, $context["message"], "html", null, true);
            echo "
                    </div>          
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 62
        echo "
                ";
        // line 63
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 63, $this->source); })()), "flashes", [0 => "error"], "method", false, false, false, 63));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 64
            echo "                    <div class=\"alert alert-danger\" role=\"alert\">
                        <strong>Uwaga!!! </strong>";
            // line 65
            echo twig_escape_filter($this->env, $context["message"], "html", null, true);
            echo "
                    </div>          
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 68
        echo "
                ";
        // line 69
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 69, $this->source); })()), "flashes", [0 => "info"], "method", false, false, false, 69));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 70
            echo "                    <div class=\"alert alert-info\" role=\"alert\">
                        <strong>Uwaga!!! </strong>";
            // line 71
            echo twig_escape_filter($this->env, $context["message"], "html", null, true);
            echo "
                    </div>          
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 74
        echo "            </div>
        </div>

        <div class=\"container\" style=\"min-height: 100%; position:relative; \">
            ";
        // line 78
        $this->displayBlock('body', $context, $blocks);
        // line 80
        echo "        </div>

        ";
        // line 83
        echo "        ";
        // line 98
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 99
        echo "    </body>
</html>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 6
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        // line 7
        echo "            ...::: E-widencja24 :::...
            ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 12
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 13
        echo "            <link href=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\">
            <link rel=\"stylesheet\" href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("admin/assets/font-awesome/4.5.0/css/font-awesome.min.css"), "html", null, true);
        echo "\" />
        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 25
    public function block_script($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "script"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "script"));

        // line 26
        echo "        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 78
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 79
        echo "            ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 98
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  310 => 98,  300 => 79,  290 => 78,  280 => 26,  270 => 25,  258 => 14,  253 => 13,  243 => 12,  232 => 7,  222 => 6,  210 => 99,  207 => 98,  205 => 83,  201 => 80,  199 => 78,  193 => 74,  184 => 71,  181 => 70,  177 => 69,  174 => 68,  165 => 65,  162 => 64,  158 => 63,  155 => 62,  146 => 59,  143 => 58,  139 => 57,  128 => 48,  125 => 47,  122 => 46,  120 => 45,  116 => 44,  111 => 43,  108 => 42,  105 => 41,  102 => 40,  99 => 39,  97 => 38,  92 => 36,  81 => 27,  79 => 25,  70 => 18,  67 => 16,  65 => 12,  60 => 10,  57 => 9,  55 => 6,  48 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\">
        <title>
            {% block title %}
            ...::: E-widencja24 :::...
            {% endblock %}
        </title>
        <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon_old.ico') }}?v=2\" />

        {% block stylesheets %}
            <link href=\"{{ asset('css/bootstrap.min.css') }}\" rel=\"stylesheet\" type=\"text/css\">
            <link rel=\"stylesheet\" href=\"{{ asset('admin/assets/font-awesome/4.5.0/css/font-awesome.min.css') }}\" />
        {% endblock %}

        {# ####skrytp ciasteczka #}
        <script type=\"text/javascript\" src=\"//code.jquery.com/jquery-1.9.1.min.js\"></script> 
        <script type=\"text/javascript\" src=\"//ciasteczka.eu/cookiesEU-latest.min.js\"></script> 
        <script type=\"text/javascript\">
            jQuery(document).ready(function(){
                jQuery.fn.cookiesEU();
            });
        </script>
        {% block script %}
        {% endblock %}




    </head>
    <body style=\"margin:0; padding:0; height:100%\">
        <div class=\"container\" style=\"margin-top: 15px\">
            <ul class=\"nav nav-pills\">
                <li>
                    <img src=\"{{ asset('img/logo4.png') }}\" alt=\"E-widencja24.pl\" style=\"margin-right: 4px\"/>
                </li>
                {% if is_granted(\"ROLE_USER\") %}
                    {% include (\"menuZalogowany.twig\") %}
                {% else %}
                    {% include (\"menuNieZalogowany.twig\") %}
                {% endif %}
                <li role=\"presentation\" ><a href=\"{{ url(\"agro_system\") }}\">System</a></li>
                <li role=\"presentation\"><a href=\"{{ url(\"agro_kontakt\") }}\">Kontakt</a></li>
                {% if is_granted('ROLE_ADMIN') %}
                     {% include (\"menuAdmin.twig\") %}
                {% endif %}
                <div class=\"clearfix\"></div>
            </ul>
        </div>
        
        <hr>


        <div class=\"container\">
            <div class=\"text-center\">
                {% for message in app.flashes('success') %}
                    <div class=\"alert alert-success\" role=\"alert\">
                        <strong>Sukces!!! </strong>{{ message }}
                    </div>          
                {% endfor %}

                {% for message in app.flashes('error') %}
                    <div class=\"alert alert-danger\" role=\"alert\">
                        <strong>Uwaga!!! </strong>{{ message }}
                    </div>          
                {% endfor %}

                {% for message in app.flashes('info') %}
                    <div class=\"alert alert-info\" role=\"alert\">
                        <strong>Uwaga!!! </strong>{{ message }}
                    </div>          
                {% endfor %}
            </div>
        </div>

        <div class=\"container\" style=\"min-height: 100%; position:relative; \">
            {% block body %}
            {% endblock %}
        </div>

        {# footer #}
        {# <div style=\"position: absolute; left: 0; bottom: 0; width: 100%; text-align: center; \">

            <hr>
            <p class=\"text-center\">
                <small>
                    Uproszczona ewidencja przychodów i rozchodów - 
                    {% if \"now\"|date('Y') == 2020 %}
                        2020
                    {% else %}
                        2020 - {{ \"now\"|date('Y')  }}
                    {% endif %}
                    &copy; Copyright by Agro24
                </small>
            </p>
        </div> #}
        {% block javascripts %}{% endblock %}
    </body>
</html>
", "base.html.twig", "/home/hystou/public_html/agro24/templates/base.html.twig");
    }
}
