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

/* admin/base2.html.twig */
class __TwigTemplate_3e5fd6109046e5c33e90c9aaa47e94a212c5ffa22651cc818bdc75140dd9a343 extends Template
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
            'body' => [$this, 'block_body'],
            'statystyki2' => [$this, 'block_statystyki2'],
            'statystyki3' => [$this, 'block_statystyki3'],
            'statystyki4' => [$this, 'block_statystyki4'],
            'statystyki5' => [$this, 'block_statystyki5'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "﻿<!DOCTYPE html>
<html lang=\"en\">
\t<head>
\t\t<meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge,chrome=1\" />
\t\t<meta charset=\"utf-8\" />
    ";
        // line 6
        $this->displayBlock('title', $context, $blocks);
        // line 9
        echo "
\t\t<meta name=\"description\" content=\"overview &amp; stats\" />
\t\t<meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0, maximum-scale=1.0\" />
    ";
        // line 12
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 35
        echo "\t\t<!-- inline styles related to this page -->

\t\t<!-- ace settings handler -->
\t\t<script src=\"";
        // line 38
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("admin/assets/js/ace-extra.min.js"), "html", null, true);
        echo "\"></script>

\t\t<!-- HTML5shiv and Respond.js for IE8 to support HTML5 elements and media queries -->

\t\t<!--[if lte IE 8]>
\t\t<script src=\"";
        // line 43
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("admin/assets/js/html5shiv.min.js"), "html", null, true);
        echo "\"></script>
\t\t<script src=\"";
        // line 44
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("admin/assets/js/respond.min.js"), "html", null, true);
        echo "\"></script>
\t\t<![endif]-->
\t</head>

\t<body class=\"no-skin\">
\t\t<div id=\"navbar\" class=\"navbar navbar-default ace-save-state\">
\t\t\t<div class=\"navbar-container ace-save-state\" id=\"navbar-container\">
\t\t\t\t<button type=\"button\" class=\"navbar-toggle menu-toggler pull-left\" id=\"menu-toggler\" data-target=\"#sidebar\">
\t\t\t\t\t<span class=\"sr-only\">Toggle sidebar</span>

\t\t\t\t\t<span class=\"icon-bar\"></span>

\t\t\t\t\t<span class=\"icon-bar\"></span>

\t\t\t\t\t<span class=\"icon-bar\"></span>
\t\t\t\t</button>

\t\t\t\t<div class=\"navbar-header pull-left\">
\t\t\t\t\t<a href=\"index.html\" class=\"navbar-brand\">
\t\t\t\t\t\t<small>
\t\t\t\t\t\t\t<i class=\"fa fa-leaf\"></i>
\t\t\t\t\t\t\tAgro24 - Ewidencja przychodów i rozchodów
\t\t\t\t\t\t</small>
\t\t\t\t\t</a>
\t\t\t\t</div>

\t\t\t\t<div class=\"navbar-buttons navbar-header pull-right\" role=\"navigation\">
\t\t\t\t\t<ul class=\"nav ace-nav\">
\t\t\t\t\t\t<li class=\"grey dropdown-modal\">
\t\t\t\t\t\t\t<a data-toggle=\"dropdown\" class=\"dropdown-toggle\" href=\"#\">
\t\t\t\t\t\t\t\t<i class=\"ace-icon fa fa-tasks\"></i>
\t\t\t\t\t\t\t\t<span class=\"badge badge-grey\">4</span>
\t\t\t\t\t\t\t</a>

\t\t\t\t\t\t\t<ul class=\"dropdown-menu-right dropdown-navbar dropdown-menu dropdown-caret dropdown-close\">
\t\t\t\t\t\t\t\t<li class=\"dropdown-header\">
\t\t\t\t\t\t\t\t\t<i class=\"ace-icon fa fa-check\"></i>
\t\t\t\t\t\t\t\t\t4 Tasks to complete
\t\t\t\t\t\t\t\t</li>

\t\t\t\t\t\t\t\t<li class=\"dropdown-content\">
\t\t\t\t\t\t\t\t\t<ul class=\"dropdown-menu dropdown-navbar\">
\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"clearfix\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"pull-left\">Software Update</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"pull-right\">65%</span>
\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"progress progress-mini\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div style=\"width:65%\" class=\"progress-bar\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t</li>

\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"clearfix\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"pull-left\">Hardware Upgrade</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"pull-right\">35%</span>
\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"progress progress-mini\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div style=\"width:35%\" class=\"progress-bar progress-bar-danger\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t</li>

\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"clearfix\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"pull-left\">Unit Testing</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"pull-right\">15%</span>
\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"progress progress-mini\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div style=\"width:15%\" class=\"progress-bar progress-bar-warning\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t</li>

\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"clearfix\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"pull-left\">Bug Fixes</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"pull-right\">90%</span>
\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"progress progress-mini progress-striped active\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div style=\"width:90%\" class=\"progress-bar progress-bar-success\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t</li>

\t\t\t\t\t\t\t\t<li class=\"dropdown-footer\">
\t\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t\tSee tasks with details
\t\t\t\t\t\t\t\t\t\t<i class=\"ace-icon fa fa-arrow-right\"></i>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</li>

\t\t\t\t\t\t<li class=\"purple dropdown-modal\">
\t\t\t\t\t\t\t<a data-toggle=\"dropdown\" class=\"dropdown-toggle\" href=\"#\">
\t\t\t\t\t\t\t\t<i class=\"ace-icon fa fa-bell icon-animated-bell\"></i>
\t\t\t\t\t\t\t\t<span class=\"badge badge-important\">8</span>
\t\t\t\t\t\t\t</a>

\t\t\t\t\t\t\t<ul class=\"dropdown-menu-right dropdown-navbar navbar-pink dropdown-menu dropdown-caret dropdown-close\">
\t\t\t\t\t\t\t\t<li class=\"dropdown-header\">
\t\t\t\t\t\t\t\t\t<i class=\"ace-icon fa fa-exclamation-triangle\"></i>
\t\t\t\t\t\t\t\t\t8 Notifications
\t\t\t\t\t\t\t\t</li>

\t\t\t\t\t\t\t\t<li class=\"dropdown-content\">
\t\t\t\t\t\t\t\t\t<ul class=\"dropdown-menu dropdown-navbar navbar-pink\">
\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"clearfix\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"pull-left\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"btn btn-xs no-hover btn-pink fa fa-comment\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\tNew Comments
\t\t\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"pull-right badge badge-info\">+12</span>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t</li>

\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"btn btn-xs btn-primary fa fa-user\"></i>
\t\t\t\t\t\t\t\t\t\t\t\tBob just signed up as an editor ...
\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t</li>

\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"clearfix\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"pull-left\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"btn btn-xs no-hover btn-success fa fa-shopping-cart\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\tNew Orders
\t\t\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"pull-right badge badge-success\">+8</span>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t</li>

\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"clearfix\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"pull-left\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"btn btn-xs no-hover btn-info fa fa-twitter\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\tFollowers
\t\t\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"pull-right badge badge-info\">+11</span>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t</li>

\t\t\t\t\t\t\t\t<li class=\"dropdown-footer\">
\t\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t\tSee all notifications
\t\t\t\t\t\t\t\t\t\t<i class=\"ace-icon fa fa-arrow-right\"></i>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</li>

\t\t\t\t\t\t<li class=\"green dropdown-modal\">
\t\t\t\t\t\t\t<a data-toggle=\"dropdown\" class=\"dropdown-toggle\" href=\"#\">
\t\t\t\t\t\t\t\t<i class=\"ace-icon fa fa-envelope icon-animated-vertical\"></i>
\t\t\t\t\t\t\t\t<span class=\"badge badge-success\">5</span>
\t\t\t\t\t\t\t</a>

\t\t\t\t\t\t\t<ul class=\"dropdown-menu-right dropdown-navbar dropdown-menu dropdown-caret dropdown-close\">
\t\t\t\t\t\t\t\t<li class=\"dropdown-header\">
\t\t\t\t\t\t\t\t\t<i class=\"ace-icon fa fa-envelope-o\"></i>
\t\t\t\t\t\t\t\t\t5 Messages
\t\t\t\t\t\t\t\t</li>

\t\t\t\t\t\t\t\t<li class=\"dropdown-content\">
\t\t\t\t\t\t\t\t\t<ul class=\"dropdown-menu dropdown-navbar\">
\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"clearfix\">
\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"";
        // line 233
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("admin/assets/images/avatars/avatar.png"), "html", null, true);
        echo "\" class=\"msg-photo\" alt=\"Alex's Avatar\" />
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"msg-body\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"msg-title\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"blue\">Alex:</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\tCiao sociis natoque penatibus et auctor ...
\t\t\t\t\t\t\t\t\t\t\t\t\t</span>

\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"msg-time\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"ace-icon fa fa-clock-o\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span>a moment ago</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t</li>

\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"clearfix\">
\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"";
        // line 250
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("admin/assets/images/avatars/avatar3.png"), "html", null, true);
        echo "\" class=\"msg-photo\" alt=\"Susan's Avatar\" />
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"msg-body\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"msg-title\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"blue\">Susan:</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\tVestibulum id ligula porta felis euismod ...
\t\t\t\t\t\t\t\t\t\t\t\t\t</span>

\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"msg-time\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"ace-icon fa fa-clock-o\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span>20 minutes ago</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t</li>

\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"clearfix\">
\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"";
        // line 267
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("admin/assets/images/avatars/avatar4.png"), "html", null, true);
        echo "\" class=\"msg-photo\" alt=\"Bob's Avatar\" />
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"msg-body\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"msg-title\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"blue\">Bob:</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\tNullam quis risus eget urna mollis ornare ...
\t\t\t\t\t\t\t\t\t\t\t\t\t</span>

\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"msg-time\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"ace-icon fa fa-clock-o\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span>3:15 pm</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t</li>

\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"clearfix\">
\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"";
        // line 284
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("admin/assets/images/avatars/avatar2.png"), "html", null, true);
        echo "\" class=\"msg-photo\" alt=\"Kate's Avatar\" />
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"msg-body\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"msg-title\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"blue\">Kate:</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\tCiao sociis natoque eget urna mollis ornare ...
\t\t\t\t\t\t\t\t\t\t\t\t\t</span>

\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"msg-time\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"ace-icon fa fa-clock-o\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span>1:33 pm</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t</li>

\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"clearfix\">
\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"";
        // line 301
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("admin/assets/images/avatars/avatar5.png"), "html", null, true);
        echo "\" class=\"msg-photo\" alt=\"Fred's Avatar\" />
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"msg-body\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"msg-title\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"blue\">Fred:</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\tVestibulum id penatibus et auctor  ...
\t\t\t\t\t\t\t\t\t\t\t\t\t</span>

\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"msg-time\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"ace-icon fa fa-clock-o\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span>10:09 am</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t</li>

\t\t\t\t\t\t\t\t<li class=\"dropdown-footer\">
\t\t\t\t\t\t\t\t\t<a href=\"inbox.html\">
\t\t\t\t\t\t\t\t\t\tSee all messages
\t\t\t\t\t\t\t\t\t\t<i class=\"ace-icon fa fa-arrow-right\"></i>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</li>

\t\t\t\t\t\t<li class=\"light-blue dropdown-modal\">
\t\t\t\t\t\t\t<a data-toggle=\"dropdown\" href=\"#\" class=\"dropdown-toggle\">
\t\t\t\t\t\t\t\t<img class=\"nav-user-photo\" src=\"";
        // line 329
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("admin/assets/images/avatars/user.jpg"), "html", null, true);
        echo "\" alt=\"Jason's Photo\" />
\t\t\t\t\t\t\t\t<span class=\"user-info\">
\t\t\t\t\t\t\t\t\t<small>Welcome,</small>
\t\t\t\t\t\t\t\t\tJason
\t\t\t\t\t\t\t\t</span>

\t\t\t\t\t\t\t\t<i class=\"ace-icon fa fa-caret-down\"></i>
\t\t\t\t\t\t\t</a>

\t\t\t\t\t\t\t<ul class=\"user-menu dropdown-menu-right dropdown-menu dropdown-yellow dropdown-caret dropdown-close\">
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t\t<i class=\"ace-icon fa fa-cog\"></i>
\t\t\t\t\t\t\t\t\t\tSettings
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</li>

\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a href=\"profile.html\">
\t\t\t\t\t\t\t\t\t\t<i class=\"ace-icon fa fa-user\"></i>
\t\t\t\t\t\t\t\t\t\tProfile
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</li>

\t\t\t\t\t\t\t\t<li class=\"divider\"></li>

\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t\t<i class=\"ace-icon fa fa-power-off\"></i>
\t\t\t\t\t\t\t\t\t\tLogout
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</li>
\t\t\t\t\t</ul>
\t\t\t\t</div>
\t\t\t</div><!-- /.navbar-container -->
\t\t</div>

\t\t<div class=\"main-container ace-save-state\" id=\"main-container\">
\t\t\t<script type=\"text/javascript\">
\t\t\t\ttry{ace.settings.loadState('main-container')}catch(e){}
\t\t\t</script>

\t\t\t<div id=\"sidebar\" class=\"sidebar responsive ace-save-state\">
\t\t\t\t<script type=\"text/javascript\">
\t\t\t\t\ttry{ace.settings.loadState('sidebar')}catch(e){}
\t\t\t\t</script>

\t\t\t\t<div class=\"sidebar-shortcuts\" id=\"sidebar-shortcuts\">
\t\t\t\t\t<div class=\"sidebar-shortcuts-large\" id=\"sidebar-shortcuts-large\">
\t\t\t\t\t\t<button class=\"btn btn-success\">
\t\t\t\t\t\t\t<i class=\"ace-icon fa fa-signal\"></i>
\t\t\t\t\t\t</button>

\t\t\t\t\t\t<button class=\"btn btn-info\">
\t\t\t\t\t\t\t<i class=\"ace-icon fa fa-pencil\"></i>
\t\t\t\t\t\t</button>

\t\t\t\t\t\t<button class=\"btn btn-warning\">
\t\t\t\t\t\t\t<i class=\"ace-icon fa fa-users\"></i>
\t\t\t\t\t\t</button>

\t\t\t\t\t\t<button class=\"btn btn-danger\">
\t\t\t\t\t\t\t<i class=\"ace-icon fa fa-cogs\"></i>
\t\t\t\t\t\t</button>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"sidebar-shortcuts-mini\" id=\"sidebar-shortcuts-mini\">
\t\t\t\t\t\t<span class=\"btn btn-success\"></span>

\t\t\t\t\t\t<span class=\"btn btn-info\"></span>

\t\t\t\t\t\t<span class=\"btn btn-warning\"></span>

\t\t\t\t\t\t<span class=\"btn btn-danger\"></span>
\t\t\t\t\t</div>
\t\t\t\t</div><!-- /.sidebar-shortcuts -->

\t\t\t\t<ul class=\"nav nav-list\">
\t\t\t\t\t<li class=\"active\">
\t\t\t\t\t\t<a href=\"";
        // line 410
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("admin");
        echo "\">
\t\t\t\t\t\t\t<i class=\"menu-icon fa fa-tachometer\"></i>
\t\t\t\t\t\t\t<span class=\"menu-text\">Panel</span>
\t\t\t\t\t\t</a>

\t\t\t\t\t\t<b class=\"arrow\"></b>
\t\t\t\t\t</li>

\t\t\t\t\t<li class=\"\">
\t\t\t\t\t\t<a href=\"#\" class=\"dropdown-toggle\">
\t\t\t\t\t\t\t<i class=\"menu-icon fa fa-users\"></i>
\t\t\t\t\t\t\t<span class=\"menu-text\">
\t\t\t\t\t\t\t\tUsers
\t\t\t\t\t\t\t</span>

\t\t\t\t\t\t\t<b class=\"arrow fa fa-angle-down\"></b>
\t\t\t\t\t\t</a>

\t\t\t\t\t\t<b class=\"arrow\"></b>

\t\t\t\t\t\t<ul class=\"submenu\">
\t\t\t\t\t\t\t<li class=\"\">
\t\t\t\t\t\t\t\t<a href=\"#\" class=\"dropdown-toggle\">
\t\t\t\t\t\t\t\t\t<i class=\"menu-icon fa fa-caret-right\"></i>

\t\t\t\t\t\t\t\t\tLayouts
\t\t\t\t\t\t\t\t\t<b class=\"arrow fa fa-angle-down\"></b>
\t\t\t\t\t\t\t\t</a>

\t\t\t\t\t\t\t\t<b class=\"arrow\"></b>

\t\t\t\t\t\t\t\t<ul class=\"submenu\">
\t\t\t\t\t\t\t\t\t<li class=\"\">
\t\t\t\t\t\t\t\t\t\t<a href=\"top-menu.html\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"menu-icon fa fa-caret-right\"></i>
\t\t\t\t\t\t\t\t\t\t\tTop Menu
\t\t\t\t\t\t\t\t\t\t</a>

\t\t\t\t\t\t\t\t\t\t<b class=\"arrow\"></b>
\t\t\t\t\t\t\t\t\t</li>

\t\t\t\t\t\t\t\t\t<li class=\"\">
\t\t\t\t\t\t\t\t\t\t<a href=\"two-menu-1.html\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"menu-icon fa fa-caret-right\"></i>
\t\t\t\t\t\t\t\t\t\t\tTwo Menus 1
\t\t\t\t\t\t\t\t\t\t</a>

\t\t\t\t\t\t\t\t\t\t<b class=\"arrow\"></b>
\t\t\t\t\t\t\t\t\t</li>

\t\t\t\t\t\t\t\t\t<li class=\"\">
\t\t\t\t\t\t\t\t\t\t<a href=\"two-menu-2.html\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"menu-icon fa fa-caret-right\"></i>
\t\t\t\t\t\t\t\t\t\t\tTwo Menus 2
\t\t\t\t\t\t\t\t\t\t</a>

\t\t\t\t\t\t\t\t\t\t<b class=\"arrow\"></b>
\t\t\t\t\t\t\t\t\t</li>

\t\t\t\t\t\t\t\t\t<li class=\"\">
\t\t\t\t\t\t\t\t\t\t<a href=\"mobile-menu-1.html\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"menu-icon fa fa-caret-right\"></i>
\t\t\t\t\t\t\t\t\t\t\tDefault Mobile Menu
\t\t\t\t\t\t\t\t\t\t</a>

\t\t\t\t\t\t\t\t\t\t<b class=\"arrow\"></b>
\t\t\t\t\t\t\t\t\t</li>

\t\t\t\t\t\t\t\t\t<li class=\"\">
\t\t\t\t\t\t\t\t\t\t<a href=\"mobile-menu-2.html\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"menu-icon fa fa-caret-right\"></i>
\t\t\t\t\t\t\t\t\t\t\tMobile Menu 2
\t\t\t\t\t\t\t\t\t\t</a>

\t\t\t\t\t\t\t\t\t\t<b class=\"arrow\"></b>
\t\t\t\t\t\t\t\t\t</li>

\t\t\t\t\t\t\t\t\t<li class=\"\">
\t\t\t\t\t\t\t\t\t\t<a href=\"mobile-menu-3.html\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"menu-icon fa fa-caret-right\"></i>
\t\t\t\t\t\t\t\t\t\t\tMobile Menu 3
\t\t\t\t\t\t\t\t\t\t</a>

\t\t\t\t\t\t\t\t\t\t<b class=\"arrow\"></b>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t</li>

\t\t\t\t\t\t\t<li class=\"\">
\t\t\t\t\t\t\t\t<a href=\"";
        // line 499
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("admin_users");
        echo "\">
\t\t\t\t\t\t\t\t\t<i class=\"menu-icon fa fa-users\"></i>
\t\t\t\t\t\t\t\t\tWszyscy
\t\t\t\t\t\t\t\t</a>

\t\t\t\t\t\t\t\t<b class=\"arrow\"></b>
\t\t\t\t\t\t\t</li>

\t\t\t\t\t\t\t<li class=\"\">
\t\t\t\t\t\t\t\t<a href=\"";
        // line 508
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("admin_users_dodaj");
        echo "\">
\t\t\t\t\t\t\t\t\t<i class=\"menu-icon fa fa-pencil-square-o\"></i>
\t\t\t\t\t\t\t\t\t\tDodaj
\t\t\t\t\t\t\t\t</a>

\t\t\t\t\t\t\t\t<b class=\"arrow\"></b>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t</li>

\t\t\t\t\t<li class=\"\">
\t\t\t\t\t\t<a href=\"#\" class=\"dropdown-toggle\">
\t\t\t\t\t\t\t<i class=\"menu-icon glyphicon glyphicon-file\"></i>
\t\t\t\t\t\t\t<span class=\"menu-text\"> Dokumenty </span>

\t\t\t\t\t\t\t<b class=\"arrow fa fa-angle-down\"></b>
\t\t\t\t\t\t</a>

\t\t\t\t\t\t<b class=\"arrow\"></b>

\t\t\t\t\t\t<ul class=\"submenu\">
\t\t\t\t\t\t\t<li class=\"\">
\t\t\t\t\t\t\t\t<a href=\"";
        // line 530
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("admin_dokumenty");
        echo "\">
\t\t\t\t\t\t\t\t\t<i class=\"menu-icon glyphicon glyphicon-file\"></i>
\t\t\t\t\t\t\t\t\tWszystkie
\t\t\t\t\t\t\t\t</a>

\t\t\t\t\t\t\t\t<b class=\"arrow\"></b>
\t\t\t\t\t\t\t</li>

\t\t\t\t\t\t\t<li class=\"\">
\t\t\t\t\t\t\t\t<a href=\"\">
\t\t\t\t\t\t\t\t\t<i class=\"menu-icon fa fa-pencil-square-o\"></i>
\t\t\t\t\t\t\t\t\tDodaj
\t\t\t\t\t\t\t\t</a>

\t\t\t\t\t\t\t\t<b class=\"arrow\"></b>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t</li>

\t\t\t\t\t<li class=\"\">
\t\t\t\t\t\t<a href=\"#\" class=\"dropdown-toggle\">
\t\t\t\t\t\t\t<i class=\"menu-icon fa fa-envelope\"></i>
\t\t\t\t\t\t\t<span class=\"menu-text\"> Wiadomości </span>

\t\t\t\t\t\t\t<b class=\"arrow fa fa-angle-down\"></b>
\t\t\t\t\t\t</a>

\t\t\t\t\t\t<b class=\"arrow\"></b>

\t\t\t\t\t\t<ul class=\"submenu\">
\t\t\t\t\t\t\t<li class=\"\">
\t\t\t\t\t\t\t\t<a href=\"";
        // line 561
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("admin_message");
        echo "\">
\t\t\t\t\t\t\t\t\t<i class=\"menu-icon fa fa-envelope\"></i>
\t\t\t\t\t\t\t\t\tWszystkie
\t\t\t\t\t\t\t\t</a>

\t\t\t\t\t\t\t\t<b class=\"arrow\"></b>
\t\t\t\t\t\t\t</li>

\t\t\t\t\t\t\t<li class=\"\">
\t\t\t\t\t\t\t\t<a href=\"form-elements-2.html\">
\t\t\t\t\t\t\t\t\t<i class=\"menu-icon fa fa-caret-right\"></i>
\t\t\t\t\t\t\t\t\tForm Elements 2
\t\t\t\t\t\t\t\t</a>

\t\t\t\t\t\t\t\t<b class=\"arrow\"></b>
\t\t\t\t\t\t\t</li>

\t\t\t\t\t\t\t<li class=\"\">
\t\t\t\t\t\t\t\t<a href=\"form-wizard.html\">
\t\t\t\t\t\t\t\t\t<i class=\"menu-icon fa fa-caret-right\"></i>
\t\t\t\t\t\t\t\t\tWizard &amp; Validation
\t\t\t\t\t\t\t\t</a>

\t\t\t\t\t\t\t\t<b class=\"arrow\"></b>
\t\t\t\t\t\t\t</li>

\t\t\t\t\t\t\t<li class=\"\">
\t\t\t\t\t\t\t\t<a href=\"wysiwyg.html\">
\t\t\t\t\t\t\t\t\t<i class=\"menu-icon fa fa-caret-right\"></i>
\t\t\t\t\t\t\t\t\tWysiwyg &amp; Markdown
\t\t\t\t\t\t\t\t</a>

\t\t\t\t\t\t\t\t<b class=\"arrow\"></b>
\t\t\t\t\t\t\t</li>

\t\t\t\t\t\t\t<li class=\"\">
\t\t\t\t\t\t\t\t<a href=\"dropzone.html\">
\t\t\t\t\t\t\t\t\t<i class=\"menu-icon fa fa-caret-right\"></i>
\t\t\t\t\t\t\t\t\tDropzone File Upload
\t\t\t\t\t\t\t\t</a>

\t\t\t\t\t\t\t\t<b class=\"arrow\"></b>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t</li>

\t\t\t\t\t<li class=\"\">
\t\t\t\t\t\t<a href=\"widgets.html\">
\t\t\t\t\t\t\t<i class=\"menu-icon fa fa-list-alt\"></i>
\t\t\t\t\t\t\t<span class=\"menu-text\"> Opcje </span>
\t\t\t\t\t\t</a>

\t\t\t\t\t\t<b class=\"arrow\"></b>
\t\t\t\t\t</li>

\t\t\t\t\t<li class=\"\">
\t\t\t\t\t\t<a href=\"calendar.html\">
\t\t\t\t\t\t\t<i class=\"menu-icon fa fa-calendar\"></i>

\t\t\t\t\t\t\t<span class=\"menu-text\">
\t\t\t\t\t\t\t\tCalendar

\t\t\t\t\t\t\t\t<span class=\"badge badge-transparent tooltip-error\" title=\"2 Important Events\">
\t\t\t\t\t\t\t\t\t<i class=\"ace-icon fa fa-exclamation-triangle red bigger-130\"></i>
\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t</a>

\t\t\t\t\t\t<b class=\"arrow\"></b>
\t\t\t\t\t</li>

\t\t\t\t\t<li class=\"\">
\t\t\t\t\t\t<a href=\"gallery.html\">
\t\t\t\t\t\t\t<i class=\"menu-icon fa fa-picture-o\"></i>
\t\t\t\t\t\t\t<span class=\"menu-text\"> Gallery </span>
\t\t\t\t\t\t</a>

\t\t\t\t\t\t<b class=\"arrow\"></b>
\t\t\t\t\t</li>

\t\t\t\t\t<li class=\"\">
\t\t\t\t\t\t<a href=\"#\" class=\"dropdown-toggle\">
\t\t\t\t\t\t\t<i class=\"menu-icon fa fa-tag\"></i>
\t\t\t\t\t\t\t<span class=\"menu-text\"> More Pages </span>

\t\t\t\t\t\t\t<b class=\"arrow fa fa-angle-down\"></b>
\t\t\t\t\t\t</a>

\t\t\t\t\t\t<b class=\"arrow\"></b>

\t\t\t\t\t\t<ul class=\"submenu\">
\t\t\t\t\t\t\t<li class=\"\">
\t\t\t\t\t\t\t\t<a href=\"profile.html\">
\t\t\t\t\t\t\t\t\t<i class=\"menu-icon fa fa-caret-right\"></i>
\t\t\t\t\t\t\t\t\tUser Profile
\t\t\t\t\t\t\t\t</a>

\t\t\t\t\t\t\t\t<b class=\"arrow\"></b>
\t\t\t\t\t\t\t</li>

\t\t\t\t\t\t\t<li class=\"\">
\t\t\t\t\t\t\t\t<a href=\"inbox.html\">
\t\t\t\t\t\t\t\t\t<i class=\"menu-icon fa fa-caret-right\"></i>
\t\t\t\t\t\t\t\t\tInbox
\t\t\t\t\t\t\t\t</a>

\t\t\t\t\t\t\t\t<b class=\"arrow\"></b>
\t\t\t\t\t\t\t</li>

\t\t\t\t\t\t\t<li class=\"\">
\t\t\t\t\t\t\t\t<a href=\"pricing.html\">
\t\t\t\t\t\t\t\t\t<i class=\"menu-icon fa fa-caret-right\"></i>
\t\t\t\t\t\t\t\t\tPricing Tables
\t\t\t\t\t\t\t\t</a>

\t\t\t\t\t\t\t\t<b class=\"arrow\"></b>
\t\t\t\t\t\t\t</li>

\t\t\t\t\t\t\t<li class=\"\">
\t\t\t\t\t\t\t\t<a href=\"invoice.html\">
\t\t\t\t\t\t\t\t\t<i class=\"menu-icon fa fa-caret-right\"></i>
\t\t\t\t\t\t\t\t\tInvoice
\t\t\t\t\t\t\t\t</a>

\t\t\t\t\t\t\t\t<b class=\"arrow\"></b>
\t\t\t\t\t\t\t</li>

\t\t\t\t\t\t\t<li class=\"\">
\t\t\t\t\t\t\t\t<a href=\"timeline.html\">
\t\t\t\t\t\t\t\t\t<i class=\"menu-icon fa fa-caret-right\"></i>
\t\t\t\t\t\t\t\t\tTimeline
\t\t\t\t\t\t\t\t</a>

\t\t\t\t\t\t\t\t<b class=\"arrow\"></b>
\t\t\t\t\t\t\t</li>

\t\t\t\t\t\t\t<li class=\"\">
\t\t\t\t\t\t\t\t<a href=\"search.html\">
\t\t\t\t\t\t\t\t\t<i class=\"menu-icon fa fa-caret-right\"></i>
\t\t\t\t\t\t\t\t\tSearch Results
\t\t\t\t\t\t\t\t</a>

\t\t\t\t\t\t\t\t<b class=\"arrow\"></b>
\t\t\t\t\t\t\t</li>

\t\t\t\t\t\t\t<li class=\"\">
\t\t\t\t\t\t\t\t<a href=\"email.html\">
\t\t\t\t\t\t\t\t\t<i class=\"menu-icon fa fa-caret-right\"></i>
\t\t\t\t\t\t\t\t\tEmail Templates
\t\t\t\t\t\t\t\t</a>

\t\t\t\t\t\t\t\t<b class=\"arrow\"></b>
\t\t\t\t\t\t\t</li>

\t\t\t\t\t\t\t<li class=\"\">
\t\t\t\t\t\t\t\t<a href=\"login.html\">
\t\t\t\t\t\t\t\t\t<i class=\"menu-icon fa fa-caret-right\"></i>
\t\t\t\t\t\t\t\t\tLogin &amp; Register
\t\t\t\t\t\t\t\t</a>

\t\t\t\t\t\t\t\t<b class=\"arrow\"></b>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t</li>

\t\t\t\t\t<li class=\"\">
\t\t\t\t\t\t<a href=\"#\" class=\"dropdown-toggle\">
\t\t\t\t\t\t\t<i class=\"menu-icon fa fa-file-o\"></i>

\t\t\t\t\t\t\t<span class=\"menu-text\">
\t\t\t\t\t\t\t\tOther Pages

\t\t\t\t\t\t\t\t<span class=\"badge badge-primary\">5</span>
\t\t\t\t\t\t\t</span>

\t\t\t\t\t\t\t<b class=\"arrow fa fa-angle-down\"></b>
\t\t\t\t\t\t</a>

\t\t\t\t\t\t<b class=\"arrow\"></b>

\t\t\t\t\t\t<ul class=\"submenu\">
\t\t\t\t\t\t\t<li class=\"\">
\t\t\t\t\t\t\t\t<a href=\"faq.html\">
\t\t\t\t\t\t\t\t\t<i class=\"menu-icon fa fa-caret-right\"></i>
\t\t\t\t\t\t\t\t\tFAQ
\t\t\t\t\t\t\t\t</a>

\t\t\t\t\t\t\t\t<b class=\"arrow\"></b>
\t\t\t\t\t\t\t</li>

\t\t\t\t\t\t\t<li class=\"\">
\t\t\t\t\t\t\t\t<a href=\"error-404.html\">
\t\t\t\t\t\t\t\t\t<i class=\"menu-icon fa fa-caret-right\"></i>
\t\t\t\t\t\t\t\t\tError 404
\t\t\t\t\t\t\t\t</a>

\t\t\t\t\t\t\t\t<b class=\"arrow\"></b>
\t\t\t\t\t\t\t</li>

\t\t\t\t\t\t\t<li class=\"\">
\t\t\t\t\t\t\t\t<a href=\"\">
\t\t\t\t\t\t\t\t\t<i class=\"menu-icon fa fa-caret-right\"></i>
\t\t\t\t\t\t\t\t\tError 500
\t\t\t\t\t\t\t\t</a>

\t\t\t\t\t\t\t\t<b class=\"arrow\"></b>
\t\t\t\t\t\t\t</li>

\t\t\t\t\t\t\t<li class=\"\">
\t\t\t\t\t\t\t\t<a href=\"\">
\t\t\t\t\t\t\t\t\t<i class=\"menu-icon fa fa-caret-right\"></i>
\t\t\t\t\t\t\t\t\tGrid
\t\t\t\t\t\t\t\t</a>

\t\t\t\t\t\t\t\t<b class=\"arrow\"></b>
\t\t\t\t\t\t\t</li>

\t\t\t\t\t\t\t<li class=\"\">
\t\t\t\t\t\t\t\t<a href=\"\">
\t\t\t\t\t\t\t\t\t<i class=\"menu-icon fa fa-caret-right\"></i>
\t\t\t\t\t\t\t\t\tBlank Page
\t\t\t\t\t\t\t\t</a>

\t\t\t\t\t\t\t\t<b class=\"arrow\"></b>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t</li>
\t\t\t\t</ul><!-- /.nav-list -->

\t\t\t\t<div class=\"sidebar-toggle sidebar-collapse\" id=\"sidebar-collapse\">
\t\t\t\t\t<i id=\"sidebar-toggle-icon\" class=\"ace-icon fa fa-angle-double-left ace-save-state\" data-icon1=\"ace-icon fa fa-angle-double-left\" data-icon2=\"ace-icon fa fa-angle-double-right\"></i>
\t\t\t\t</div>
\t\t\t</div>

\t\t\t<div class=\"main-content\">
\t\t\t\t<div class=\"main-content-inner\">
\t\t\t\t\t<div class=\"breadcrumbs ace-save-state\" id=\"breadcrumbs\">
\t\t\t\t\t\t<ul class=\"breadcrumb\">
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<i class=\"ace-icon fa fa-home home-icon\"></i>
\t\t\t\t\t\t\t\t<a href=\"#\">Home</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li class=\"active\">Dashboard</li>
\t\t\t\t\t\t</ul><!-- /.breadcrumb -->

\t\t\t\t\t\t<div class=\"nav-search\" id=\"nav-search\">
\t\t\t\t\t\t\t<form class=\"form-search\">
\t\t\t\t\t\t\t\t<span class=\"input-icon\">
\t\t\t\t\t\t\t\t\t<input type=\"text\" placeholder=\"Szukaj ...\" class=\"nav-search-input\" id=\"nav-search-input\" autocomplete=\"off\" />
\t\t\t\t\t\t\t\t\t<i class=\"ace-icon fa fa-search nav-search-icon\"></i>
\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t</form>
\t\t\t\t\t\t</div><!-- /.nav-search -->
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"page-content\">
\t\t\t\t\t\t<div class=\"ace-settings-container\" id=\"ace-settings-container\">
\t\t\t\t\t\t\t<div class=\"btn btn-app btn-xs btn-warning ace-settings-btn\" id=\"ace-settings-btn\">
\t\t\t\t\t\t\t\t<i class=\"ace-icon fa fa-cog bigger-130\"></i>
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t<div class=\"ace-settings-box clearfix\" id=\"ace-settings-box\">
\t\t\t\t\t\t\t\t<div class=\"pull-left width-50\">
\t\t\t\t\t\t\t\t\t<div class=\"ace-settings-item\">
\t\t\t\t\t\t\t\t\t\t<div class=\"pull-left\">
\t\t\t\t\t\t\t\t\t\t\t<select id=\"skin-colorpicker\" class=\"hide\">
\t\t\t\t\t\t\t\t\t\t\t\t<option data-skin=\"no-skin\" value=\"#438EB9\">#438EB9</option>
\t\t\t\t\t\t\t\t\t\t\t\t<option data-skin=\"skin-1\" value=\"#222A2D\">#222A2D</option>
\t\t\t\t\t\t\t\t\t\t\t\t<option data-skin=\"skin-2\" value=\"#C6487E\">#C6487E</option>
\t\t\t\t\t\t\t\t\t\t\t\t<option data-skin=\"skin-3\" value=\"#D0D0D0\">#D0D0D0</option>
\t\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<span>&nbsp; Choose Skin</span>
\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t<div class=\"ace-settings-item\">
\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" class=\"ace ace-checkbox-2 ace-save-state\" id=\"ace-settings-navbar\" autocomplete=\"off\" />
\t\t\t\t\t\t\t\t\t\t<label class=\"lbl\" for=\"ace-settings-navbar\"> Fixed Navbar</label>
\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t<div class=\"ace-settings-item\">
\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" class=\"ace ace-checkbox-2 ace-save-state\" id=\"ace-settings-sidebar\" autocomplete=\"off\" />
\t\t\t\t\t\t\t\t\t\t<label class=\"lbl\" for=\"ace-settings-sidebar\"> Fixed Sidebar</label>
\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t<div class=\"ace-settings-item\">
\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" class=\"ace ace-checkbox-2 ace-save-state\" id=\"ace-settings-breadcrumbs\" autocomplete=\"off\" />
\t\t\t\t\t\t\t\t\t\t<label class=\"lbl\" for=\"ace-settings-breadcrumbs\"> Fixed Breadcrumbs</label>
\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t<div class=\"ace-settings-item\">
\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" class=\"ace ace-checkbox-2\" id=\"ace-settings-rtl\" autocomplete=\"off\" />
\t\t\t\t\t\t\t\t\t\t<label class=\"lbl\" for=\"ace-settings-rtl\"> Right To Left (rtl)</label>
\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t<div class=\"ace-settings-item\">
\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" class=\"ace ace-checkbox-2 ace-save-state\" id=\"ace-settings-add-container\" autocomplete=\"off\" />
\t\t\t\t\t\t\t\t\t\t<label class=\"lbl\" for=\"ace-settings-add-container\">
\t\t\t\t\t\t\t\t\t\t\tInside
\t\t\t\t\t\t\t\t\t\t\t<b>.container</b>
\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div><!-- /.pull-left -->

\t\t\t\t\t\t\t\t<div class=\"pull-left width-50\">
\t\t\t\t\t\t\t\t\t<div class=\"ace-settings-item\">
\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" class=\"ace ace-checkbox-2\" id=\"ace-settings-hover\" autocomplete=\"off\" />
\t\t\t\t\t\t\t\t\t\t<label class=\"lbl\" for=\"ace-settings-hover\"> Submenu on Hover</label>
\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t<div class=\"ace-settings-item\">
\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" class=\"ace ace-checkbox-2\" id=\"ace-settings-compact\" autocomplete=\"off\" />
\t\t\t\t\t\t\t\t\t\t<label class=\"lbl\" for=\"ace-settings-compact\"> Compact Sidebar</label>
\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t<div class=\"ace-settings-item\">
\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" class=\"ace ace-checkbox-2\" id=\"ace-settings-highlight\" autocomplete=\"off\" />
\t\t\t\t\t\t\t\t\t\t<label class=\"lbl\" for=\"ace-settings-highlight\"> Alt. Active Item</label>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div><!-- /.pull-left -->
\t\t\t\t\t\t\t</div><!-- /.ace-settings-box -->
\t\t\t\t\t\t</div><!-- /.ace-settings-container -->

\t\t\t\t\t\t<div class=\"page-header\">
\t\t\t\t\t\t\t<h1>
\t\t\t\t\t\t\t\tDashboard
\t\t\t\t\t\t\t\t<small>
\t\t\t\t\t\t\t\t\t<i class=\"ace-icon fa fa-angle-double-right\"></i>
\t\t\t\t\t\t\t\t\toverview &amp; stats
\t\t\t\t\t\t\t\t</small>
\t\t\t\t\t\t\t</h1>
\t\t\t\t\t\t</div><!-- /.page-header -->

\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t<div class=\"col-xs-12\">
\t\t\t\t\t\t\t\t<!-- PAGE CONTENT BEGINS -->

\t\t\t\t\t\t\t\t\t<div class=\"text-center\">
\t\t\t\t\t\t\t\t\t\t";
        // line 899
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "flashes", [0 => "success"], "method", false, false, false, 899));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 900
            echo "\t\t\t\t\t\t\t\t\t\t\t<div class=\"alert alert-success\" role=\"alert\">
\t\t\t\t\t\t\t\t\t\t\t\t<strong>Sukces!!!
\t\t\t\t\t\t\t\t\t\t\t\t</strong>
\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 903
            echo twig_escape_filter($this->env, $context["message"], "html", null, true);
            echo "
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 906
        echo "
\t\t\t\t\t\t\t\t\t\t";
        // line 907
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "flashes", [0 => "error"], "method", false, false, false, 907));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 908
            echo "\t\t\t\t\t\t\t\t\t\t\t<div class=\"alert alert-danger\" role=\"alert\">
\t\t\t\t\t\t\t\t\t\t\t\t<strong>Uwaga!!!
\t\t\t\t\t\t\t\t\t\t\t\t</strong>
\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 911
            echo twig_escape_filter($this->env, $context["message"], "html", null, true);
            echo "
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 914
        echo "
\t\t\t\t\t\t\t\t\t\t";
        // line 915
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "flashes", [0 => "info"], "method", false, false, false, 915));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 916
            echo "\t\t\t\t\t\t\t\t\t\t\t<div class=\"alert alert-info\" role=\"alert\">
\t\t\t\t\t\t\t\t\t\t\t\t<strong>Uwaga!!!
\t\t\t\t\t\t\t\t\t\t\t\t</strong>
\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 919
            echo twig_escape_filter($this->env, $context["message"], "html", null, true);
            echo "
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 922
        echo "\t\t\t\t\t\t\t\t\t</div>


\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t";
        // line 926
        $this->displayBlock('body', $context, $blocks);
        // line 933
        echo "
\t\t\t\t\t\t\t\t<div class=\"row\">
                                    ";
        // line 935
        $this->displayBlock('statystyki2', $context, $blocks);
        // line 1045
        echo "
                                    ";
        // line 1046
        $this->displayBlock('statystyki3', $context, $blocks);
        // line 1070
        echo "\t\t\t\t\t\t\t\t</div><!-- /.row -->

\t\t\t\t\t\t\t\t<div class=\"hr hr32 hr-dotted\"></div>

\t\t\t\t\t\t\t\t<div class=\"row\">

                                    ";
        // line 1076
        $this->displayBlock('statystyki4', $context, $blocks);
        // line 1671
        echo "
                                    ";
        // line 1672
        $this->displayBlock('statystyki5', $context, $blocks);
        // line 1825
        echo "
\t\t\t\t\t\t\t\t</div><!-- /.row -->

\t\t\t\t\t\t\t\t<!-- PAGE CONTENT ENDS -->
\t\t\t\t\t\t\t</div><!-- /.col -->
\t\t\t\t\t\t</div><!-- /.row -->
\t\t\t\t\t</div><!-- /.page-content -->
\t\t\t\t</div>
\t\t\t</div><!-- /.main-content -->

\t\t\t<div class=\"footer\">
\t\t\t\t<div class=\"footer-inner\">
\t\t\t\t\t<div class=\"footer-content\">
\t\t\t\t\t\t<span class=\"bigger-120\">
\t\t\t\t\t\t\t<span class=\"blue bolder\">Agro24</span>
\t\t\t\t\t\t\tUproszczona ewidencja przychodów i rozchodów - 
                            ";
        // line 1841
        if (0 === twig_compare(twig_date_format_filter($this->env, "now", "Y"), 2020)) {
            // line 1842
            echo "                                2020
                            ";
        } else {
            // line 1844
            echo "                                2020 - ";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "Y"), "html", null, true);
            echo "
                            ";
        }
        // line 1846
        echo "                            &copy; Copyright by Agro24
\t\t\t\t\t\t</span>

\t\t\t\t\t\t&nbsp; &nbsp;
\t\t\t\t\t\t<span class=\"action-buttons\">
\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t<i class=\"ace-icon fa fa-twitter-square light-blue bigger-150\"></i>
\t\t\t\t\t\t\t</a>

\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t<i class=\"ace-icon fa fa-facebook-square text-primary bigger-150\"></i>
\t\t\t\t\t\t\t</a>

\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t<i class=\"ace-icon fa fa-rss-square orange bigger-150\"></i>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</span>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>

\t\t\t<a href=\"#\" id=\"btn-scroll-up\" class=\"btn-scroll-up btn btn-sm btn-inverse\">
\t\t\t\t<i class=\"ace-icon fa fa-angle-double-up icon-only bigger-110\"></i>
\t\t\t</a>
\t\t</div><!-- /.main-container -->

\t\t<!-- basic scripts -->

\t\t<!--[if !IE]> -->
\t\t<script src=\"";
        // line 1875
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("admin/assets/js/jquery-2.1.4.min.js"), "html", null, true);
        echo "\"></script>

\t\t<!-- <![endif]-->

\t\t<!--[if IE]>
<script src=\"";
        // line 1880
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("admin/assets/js/jquery-1.11.3.min.js"), "html", null, true);
        echo "\"></script>
<![endif]-->
        ";
        // line 1882
        $this->displayBlock('javascripts', $context, $blocks);
        // line 2125
        echo "\t</body>
</html>
";
    }

    // line 6
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 7
        echo "\t\t\t<title>Agro24 | Panel administracyjny</title>
    ";
    }

    // line 12
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 13
        echo "\t\t<!-- bootstrap & fontawesome -->
\t\t<link rel=\"stylesheet\" href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("admin/assets/css/bootstrap.min.css"), "html", null, true);
        echo "\" />
\t\t<link rel=\"stylesheet\" href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("admin/assets/font-awesome/4.5.0/css/font-awesome.min.css"), "html", null, true);
        echo "\" />

\t\t<!-- page specific plugin styles -->

\t\t<!-- text fonts -->
\t\t<link rel=\"stylesheet\" href=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("admin/assets/css/fonts.googleapis.com.css"), "html", null, true);
        echo "\" />

\t\t<!-- ace styles -->
\t\t<link rel=\"stylesheet\" href=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("admin/assets/css/ace.min.css"), "html", null, true);
        echo "\" class=\"ace-main-stylesheet\" id=\"main-ace-style\" />

\t\t<!--[if lte IE 9]>
\t\t\t<link rel=\"stylesheet\" href=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("admin/assets/css/ace-part2.min.css"), "html", null, true);
        echo "\" class=\"ace-main-stylesheet\" />
\t\t<![endif]-->
\t\t<link rel=\"stylesheet\" href=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("admin/assets/css/ace-skins.min.css"), "html", null, true);
        echo "\" />
\t\t<link rel=\"stylesheet\" href=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("admin/assets/css/ace-rtl.min.css"), "html", null, true);
        echo "\" />

\t\t<!--[if lte IE 9]>
\t\t  <link rel=\"stylesheet\" href=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("admin/assets/css/ace-ie.min.css"), "html", null, true);
        echo "\" />
\t\t<![endif]-->
    ";
    }

    // line 926
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 927
        echo "\t\t\t\t\t\t\t\t";
        $this->loadTemplate("admin/users.html.twig", "admin/base2.html.twig", 927)->displayBlock("users", $context);
        echo "

    \t\t\t\t\t\t";
        // line 929
        $this->loadTemplate("admin/message.html.twig", "admin/base2.html.twig", 929)->displayBlock("message", $context);
        echo "

    \t\t\t\t\t\t";
        // line 931
        $this->loadTemplate("admin/dokumenty.html.twig", "admin/base2.html.twig", 931)->displayBlock("dokumenty", $context);
        echo "
\t\t\t\t\t\t\t";
    }

    // line 935
    public function block_statystyki2($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 936
        echo "\t\t\t\t\t\t\t\t\t";
        // line 1044
        echo "                                    ";
    }

    // line 1046
    public function block_statystyki3($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1047
        echo "\t\t\t\t\t\t\t\t\t";
        // line 1069
        echo "                                    ";
    }

    // line 1076
    public function block_statystyki4($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1077
        echo "\t\t\t\t\t\t\t\t\t";
        // line 1670
        echo "                                    ";
    }

    // line 1672
    public function block_statystyki5($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1673
        echo "\t\t\t\t\t\t\t\t\t";
        // line 1824
        echo "                                    ";
    }

    // line 1882
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1883
        echo "\t\t<script type=\"text/javascript\">
\t\t\tif('ontouchstart' in document.documentElement) document.write(\"<script src='";
        // line 1884
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("admin/assets/js/jquery.mobile.custom.min.js"), "html", null, true);
        echo "'>\"+\"<\"+\"/script>\");
\t\t</script>
\t\t<script src=\"";
        // line 1886
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("admin/assets/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>

\t\t<!-- page specific plugin scripts -->

\t\t<!--[if lte IE 8]>
\t\t  <script src=\"";
        // line 1891
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/excanvas.min.js"), "html", null, true);
        echo "\"></script>
\t\t<![endif]-->
\t\t<script src=\"";
        // line 1893
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("admin/assets/js/jquery-ui.custom.min.js"), "html", null, true);
        echo "\"></script>
\t\t<script src=\"";
        // line 1894
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("admin/assets/js/jquery.ui.touch-punch.min.js"), "html", null, true);
        echo "\"></script>
\t\t<script src=\"";
        // line 1895
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("admin/assets/js/jquery.easypiechart.min.js"), "html", null, true);
        echo "\"></script>
\t\t<script src=\"";
        // line 1896
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("admin/assets/js/jquery.sparkline.index.min.js"), "html", null, true);
        echo "\"></script>
\t\t<script src=\"";
        // line 1897
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("admin/assets/js/jquery.flot.min.js"), "html", null, true);
        echo "\"></script>
\t\t<script src=\"";
        // line 1898
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("admin/assets/js/jquery.flot.pie.min.js"), "html", null, true);
        echo "\"></script>
\t\t<script src=\"";
        // line 1899
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("admin/assets/js/jquery.flot.resize.min.js"), "html", null, true);
        echo "\"></script>

\t\t<!-- ace scripts -->
\t\t<script src=\"";
        // line 1902
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("admin/assets/js/ace-elements.min.js"), "html", null, true);
        echo "\"></script>
\t\t<script src=\"";
        // line 1903
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("admin/assets/js/ace.min.js"), "html", null, true);
        echo "\"></script>

\t\t<!-- inline scripts related to this page -->
\t\t<script type=\"text/javascript\">
\t\t\tjQuery(function(\$) {
\t\t\t\t\$('.easy-pie-chart.percentage').each(function(){
\t\t\t\t\tvar \$box = \$(this).closest('.infobox');
\t\t\t\t\tvar barColor = \$(this).data('color') || (!\$box.hasClass('infobox-dark') ? \$box.css('color') : 'rgba(255,255,255,0.95)');
\t\t\t\t\tvar trackColor = barColor == 'rgba(255,255,255,0.95)' ? 'rgba(255,255,255,0.25)' : '#E2E2E2';
\t\t\t\t\tvar size = parseInt(\$(this).data('size')) || 50;
\t\t\t\t\t\$(this).easyPieChart({
\t\t\t\t\t\tbarColor: barColor,
\t\t\t\t\t\ttrackColor: trackColor,
\t\t\t\t\t\tscaleColor: false,
\t\t\t\t\t\tlineCap: 'butt',
\t\t\t\t\t\tlineWidth: parseInt(size/10),
\t\t\t\t\t\tanimate: ace.vars['old_ie'] ? false : 1000,
\t\t\t\t\t\tsize: size
\t\t\t\t\t});
\t\t\t\t})
\t\t\t
\t\t\t\t\$('.sparkline').each(function(){
\t\t\t\t\tvar \$box = \$(this).closest('.infobox');
\t\t\t\t\tvar barColor = !\$box.hasClass('infobox-dark') ? \$box.css('color') : '#FFF';
\t\t\t\t\t\$(this).sparkline('html',
\t\t\t\t\t\t\t\t\t {
\t\t\t\t\t\t\t\t\t\ttagValuesAttribute:'data-values',
\t\t\t\t\t\t\t\t\t\ttype: 'bar',
\t\t\t\t\t\t\t\t\t\tbarColor: barColor ,
\t\t\t\t\t\t\t\t\t\tchartRangeMin:\$(this).data('min') || 0
\t\t\t\t\t\t\t\t\t });
\t\t\t\t});
\t\t\t
\t\t\t
\t\t\t  //flot chart resize plugin, somehow manipulates default browser resize event to optimize it!
\t\t\t  //but sometimes it brings up errors with normal resize event handlers
\t\t\t  \$.resize.throttleWindow = false;
\t\t\t
\t\t\t  var placeholder = \$('#piechart-placeholder').css({'width':'90%' , 'min-height':'150px'});
\t\t\t  var data = [
\t\t\t\t{ label: \"social networks\",  data: 38.7, color: \"#68BC31\"},
\t\t\t\t{ label: \"search engines\",  data: 24.5, color: \"#2091CF\"},
\t\t\t\t{ label: \"ad campaigns\",  data: 8.2, color: \"#AF4E96\"},
\t\t\t\t{ label: \"direct traffic\",  data: 18.6, color: \"#DA5430\"},
\t\t\t\t{ label: \"other\",  data: 10, color: \"#FEE074\"}
\t\t\t  ]
\t\t\t  function drawPieChart(placeholder, data, position) {
\t\t\t \t  \$.plot(placeholder, data, {
\t\t\t\t\tseries: {
\t\t\t\t\t\tpie: {
\t\t\t\t\t\t\tshow: true,
\t\t\t\t\t\t\ttilt:0.8,
\t\t\t\t\t\t\thighlight: {
\t\t\t\t\t\t\t\topacity: 0.25
\t\t\t\t\t\t\t},
\t\t\t\t\t\t\tstroke: {
\t\t\t\t\t\t\t\tcolor: '#fff',
\t\t\t\t\t\t\t\twidth: 2
\t\t\t\t\t\t\t},
\t\t\t\t\t\t\tstartAngle: 2
\t\t\t\t\t\t}
\t\t\t\t\t},
\t\t\t\t\tlegend: {
\t\t\t\t\t\tshow: true,
\t\t\t\t\t\tposition: position || \"ne\", 
\t\t\t\t\t\tlabelBoxBorderColor: null,
\t\t\t\t\t\tmargin:[-30,15]
\t\t\t\t\t}
\t\t\t\t\t,
\t\t\t\t\tgrid: {
\t\t\t\t\t\thoverable: true,
\t\t\t\t\t\tclickable: true
\t\t\t\t\t}
\t\t\t\t })
\t\t\t }
\t\t\t drawPieChart(placeholder, data);
\t\t\t
\t\t\t /**
\t\t\t we saved the drawing function and the data to redraw with different position later when switching to RTL mode dynamically
\t\t\t so that's not needed actually.
\t\t\t */
\t\t\t placeholder.data('chart', data);
\t\t\t placeholder.data('draw', drawPieChart);
\t\t\t
\t\t\t
\t\t\t  //pie chart tooltip example
\t\t\t  var \$tooltip = \$(\"<div class='tooltip top in'><div class='tooltip-inner'></div></div>\").hide().appendTo('body');
\t\t\t  var previousPoint = null;
\t\t\t
\t\t\t  placeholder.on('plothover', function (event, pos, item) {
\t\t\t\tif(item) {
\t\t\t\t\tif (previousPoint != item.seriesIndex) {
\t\t\t\t\t\tpreviousPoint = item.seriesIndex;
\t\t\t\t\t\tvar tip = item.series['label'] + \" : \" + item.series['percent']+'%';
\t\t\t\t\t\t\$tooltip.show().children(0).text(tip);
\t\t\t\t\t}
\t\t\t\t\t\$tooltip.css({top:pos.pageY + 10, left:pos.pageX + 10});
\t\t\t\t} else {
\t\t\t\t\t\$tooltip.hide();
\t\t\t\t\tpreviousPoint = null;
\t\t\t\t}
\t\t\t\t
\t\t\t });
\t\t\t
\t\t\t\t/////////////////////////////////////
\t\t\t\t\$(document).one('ajaxloadstart.page', function(e) {
\t\t\t\t\t\$tooltip.remove();
\t\t\t\t});
\t\t\t
\t\t\t
\t\t\t
\t\t\t
\t\t\t\tvar d1 = [];
\t\t\t\tfor (var i = 0; i < Math.PI * 2; i += 0.5) {
\t\t\t\t\td1.push([i, Math.sin(i)]);
\t\t\t\t}
\t\t\t
\t\t\t\tvar d2 = [];
\t\t\t\tfor (var i = 0; i < Math.PI * 2; i += 0.5) {
\t\t\t\t\td2.push([i, Math.cos(i)]);
\t\t\t\t}
\t\t\t
\t\t\t\tvar d3 = [];
\t\t\t\tfor (var i = 0; i < Math.PI * 2; i += 0.2) {
\t\t\t\t\td3.push([i, Math.tan(i)]);
\t\t\t\t}
\t\t\t\t
\t\t\t
\t\t\t\tvar sales_charts = \$('#sales-charts').css({'width':'100%' , 'height':'220px'});
\t\t\t\t\$.plot(\"#sales-charts\", [
\t\t\t\t\t{ label: \"Domains\", data: d1 },
\t\t\t\t\t{ label: \"Hosting\", data: d2 },
\t\t\t\t\t{ label: \"Services\", data: d3 }
\t\t\t\t], {
\t\t\t\t\thoverable: true,
\t\t\t\t\tshadowSize: 0,
\t\t\t\t\tseries: {
\t\t\t\t\t\tlines: { show: true },
\t\t\t\t\t\tpoints: { show: true }
\t\t\t\t\t},
\t\t\t\t\txaxis: {
\t\t\t\t\t\ttickLength: 0
\t\t\t\t\t},
\t\t\t\t\tyaxis: {
\t\t\t\t\t\tticks: 10,
\t\t\t\t\t\tmin: -2,
\t\t\t\t\t\tmax: 2,
\t\t\t\t\t\ttickDecimals: 3
\t\t\t\t\t},
\t\t\t\t\tgrid: {
\t\t\t\t\t\tbackgroundColor: { colors: [ \"#fff\", \"#fff\" ] },
\t\t\t\t\t\tborderWidth: 1,
\t\t\t\t\t\tborderColor:'#555'
\t\t\t\t\t}
\t\t\t\t});
\t\t\t
\t\t\t
\t\t\t\t\$('#recent-box [data-rel=\"tooltip\"]').tooltip({placement: tooltip_placement});
\t\t\t\tfunction tooltip_placement(context, source) {
\t\t\t\t\tvar \$source = \$(source);
\t\t\t\t\tvar \$parent = \$source.closest('.tab-content')
\t\t\t\t\tvar off1 = \$parent.offset();
\t\t\t\t\tvar w1 = \$parent.width();
\t\t\t
\t\t\t\t\tvar off2 = \$source.offset();
\t\t\t\t\t//var w2 = \$source.width();
\t\t\t
\t\t\t\t\tif( parseInt(off2.left) < parseInt(off1.left) + parseInt(w1 / 2) ) return 'right';
\t\t\t\t\treturn 'left';
\t\t\t\t}
\t\t\t
\t\t\t
\t\t\t\t\$('.dialogs,.comments').ace_scroll({
\t\t\t\t\tsize: 300
\t\t\t    });
\t\t\t\t
\t\t\t\t
\t\t\t\t//Android's default browser somehow is confused when tapping on label which will lead to dragging the task
\t\t\t\t//so disable dragging when clicking on label
\t\t\t\tvar agent = navigator.userAgent.toLowerCase();
\t\t\t\tif(ace.vars['touch'] && ace.vars['android']) {
\t\t\t\t  \$('#tasks').on('touchstart', function(e){
\t\t\t\t\tvar li = \$(e.target).closest('#tasks li');
\t\t\t\t\tif(li.length == 0)return;
\t\t\t\t\tvar label = li.find('label.inline').get(0);
\t\t\t\t\tif(label == e.target || \$.contains(label, e.target)) e.stopImmediatePropagation() ;
\t\t\t\t  });
\t\t\t\t}
\t\t\t
\t\t\t\t\$('#tasks').sortable({
\t\t\t\t\topacity:0.8,
\t\t\t\t\trevert:true,
\t\t\t\t\tforceHelperSize:true,
\t\t\t\t\tplaceholder: 'draggable-placeholder',
\t\t\t\t\tforcePlaceholderSize:true,
\t\t\t\t\ttolerance:'pointer',
\t\t\t\t\tstop: function( event, ui ) {
\t\t\t\t\t\t//just for Chrome!!!! so that dropdowns on items don't appear below other items after being moved
\t\t\t\t\t\t\$(ui.item).css('z-index', 'auto');
\t\t\t\t\t}
\t\t\t\t\t}
\t\t\t\t);
\t\t\t\t\$('#tasks').disableSelection();
\t\t\t\t\$('#tasks input:checkbox').removeAttr('checked').on('click', function(){
\t\t\t\t\tif(this.checked) \$(this).closest('li').addClass('selected');
\t\t\t\t\telse \$(this).closest('li').removeClass('selected');
\t\t\t\t});
\t\t\t
\t\t\t
\t\t\t\t//show the dropdowns on top or bottom depending on window height and menu position
\t\t\t\t\$('#task-tab .dropdown-hover').on('mouseenter', function(e) {
\t\t\t\t\tvar offset = \$(this).offset();
\t\t\t
\t\t\t\t\tvar \$w = \$(window)
\t\t\t\t\tif (offset.top > \$w.scrollTop() + \$w.innerHeight() - 100) 
\t\t\t\t\t\t\$(this).addClass('dropup');
\t\t\t\t\telse \$(this).removeClass('dropup');
\t\t\t\t});
\t\t\t
\t\t\t})
\t\t</script>
        ";
    }

    public function getTemplateName()
    {
        return "admin/base2.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1327 => 1903,  1323 => 1902,  1317 => 1899,  1313 => 1898,  1309 => 1897,  1305 => 1896,  1301 => 1895,  1297 => 1894,  1293 => 1893,  1288 => 1891,  1280 => 1886,  1275 => 1884,  1272 => 1883,  1268 => 1882,  1264 => 1824,  1262 => 1673,  1258 => 1672,  1254 => 1670,  1252 => 1077,  1248 => 1076,  1244 => 1069,  1242 => 1047,  1238 => 1046,  1234 => 1044,  1232 => 936,  1228 => 935,  1222 => 931,  1217 => 929,  1211 => 927,  1207 => 926,  1200 => 32,  1194 => 29,  1190 => 28,  1185 => 26,  1179 => 23,  1173 => 20,  1165 => 15,  1161 => 14,  1158 => 13,  1154 => 12,  1149 => 7,  1145 => 6,  1139 => 2125,  1137 => 1882,  1132 => 1880,  1124 => 1875,  1093 => 1846,  1087 => 1844,  1083 => 1842,  1081 => 1841,  1063 => 1825,  1061 => 1672,  1058 => 1671,  1056 => 1076,  1048 => 1070,  1046 => 1046,  1043 => 1045,  1041 => 935,  1037 => 933,  1035 => 926,  1029 => 922,  1020 => 919,  1015 => 916,  1011 => 915,  1008 => 914,  999 => 911,  994 => 908,  990 => 907,  987 => 906,  978 => 903,  973 => 900,  969 => 899,  628 => 561,  594 => 530,  569 => 508,  557 => 499,  465 => 410,  381 => 329,  350 => 301,  330 => 284,  310 => 267,  290 => 250,  270 => 233,  78 => 44,  74 => 43,  66 => 38,  61 => 35,  59 => 12,  54 => 9,  52 => 6,  45 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "admin/base2.html.twig", "/home/hystou/public_html/agro24/templates/admin/base2.html.twig");
    }
}
