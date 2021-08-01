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
class __TwigTemplate_2be12abd7ab69f90c6079cbbbdfe6bf8dcb91eaec5fe53d83295287accfdb3a1 extends Template
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
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "flashes", [0 => "success"], "method", false, false, false, 57));
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
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "flashes", [0 => "error"], "method", false, false, false, 63));
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
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "flashes", [0 => "info"], "method", false, false, false, 69));
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
    }

    // line 6
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 7
        echo "            ...::: E-widencja24 :::...
            ";
    }

    // line 12
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 13
        echo "            <link href=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\">
            <link rel=\"stylesheet\" href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("admin/assets/font-awesome/4.5.0/css/font-awesome.min.css"), "html", null, true);
        echo "\" />
        ";
    }

    // line 25
    public function block_script($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 26
        echo "        ";
    }

    // line 78
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 79
        echo "            ";
    }

    // line 98
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
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
        return array (  250 => 98,  246 => 79,  242 => 78,  238 => 26,  234 => 25,  228 => 14,  223 => 13,  219 => 12,  214 => 7,  210 => 6,  204 => 99,  201 => 98,  199 => 83,  195 => 80,  193 => 78,  187 => 74,  178 => 71,  175 => 70,  171 => 69,  168 => 68,  159 => 65,  156 => 64,  152 => 63,  149 => 62,  140 => 59,  137 => 58,  133 => 57,  122 => 48,  119 => 47,  116 => 46,  114 => 45,  110 => 44,  105 => 43,  102 => 42,  99 => 41,  96 => 40,  93 => 39,  91 => 38,  86 => 36,  75 => 27,  73 => 25,  64 => 18,  61 => 16,  59 => 12,  54 => 10,  51 => 9,  49 => 6,  42 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "base.html.twig", "/home/hystou/public_html/agro24/templates/base.html.twig");
    }
}
