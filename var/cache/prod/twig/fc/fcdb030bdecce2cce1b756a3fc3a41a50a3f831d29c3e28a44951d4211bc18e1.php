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

/* dokumenty/useredit.html.twig */
class __TwigTemplate_e625fb4684a2be6b10378b148112aa7b05b34351cfdbc72c14a7e99496ae6b54 extends Template
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
        $this->parent = $this->loadTemplate("base.html.twig", "dokumenty/useredit.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 4
        echo "
<div class=\"panel panel-primary\">
    <!-- Default panel contents -->
    <div class=\"panel-heading\">
        <h3 class=\"panel-title\">
            Dane użytkownika
        </h3>
    </div>
    <div class=\"panel-body\">

";
        // line 14
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? null), 'form_start');
        echo "
        <div class=\"form\">
            <div class=\"form-group col-md-3\">
                    ";
        // line 17
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "username", [], "any", false, false, false, 17), 'row');
        echo "
            </div>
            <div class=\"form-group col-md-5\">
                    ";
        // line 20
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "email", [], "any", false, false, false, 20), 'row');
        echo "
            </div>
            <div class=\"form-group col-md-4\">
                    ";
        // line 23
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "ep", [], "any", false, false, false, 23), 'row');
        echo "
            </div>      
            <div class=\"form-group col-md-3\">
                ";
        // line 26
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "imie", [], "any", false, false, false, 26), 'row');
        echo "
            </div>
            <div class=\"form-group col-md-5\">
                ";
        // line 29
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "nazwisko", [], "any", false, false, false, 29), 'row');
        echo "
            </div>
            <div class=\"form-group col-md-4\">
                ";
        // line 32
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "znaksprawy", [], "any", false, false, false, 32), 'row');
        echo "
            </div>
            ";
        // line 34
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? null), 'form_end');
        echo "
            <div class=\"form-group\">
                    <a class=\"btn btn-default\" href=\"";
        // line 36
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("dokumenty_index");
        echo "\"><span class=\"glyphicon glyphicon-arrow-left\"></span> Powrót</a>
            </div>
        </div>

    </div>

</div>


        
        
        
        
        
        





  
";
    }

    public function getTemplateName()
    {
        return "dokumenty/useredit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  108 => 36,  103 => 34,  98 => 32,  92 => 29,  86 => 26,  80 => 23,  74 => 20,  68 => 17,  62 => 14,  50 => 4,  46 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "dokumenty/useredit.html.twig", "/home/hystou/public_html/agro24/templates/dokumenty/useredit.html.twig");
    }
}
