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

/* message/new.html.twig */
class __TwigTemplate_fe8235737f12bc6064eca791205fabde extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "message/new.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "message/new.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "message/new.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "New Message
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 5
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 6
        echo "\t";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
\t<link href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/assets/css/message.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">

";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 10
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 11
        if ($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 11, $this->source); })()), 'errors')) {
            // line 12
            echo "\t\t<div class=\"alert alert-danger\">
\t\t\t";
            // line 13
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 13, $this->source); })()), 'errors');
            echo "
\t\t</div>
\t";
        }
        // line 16
        echo "\t";
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 16, $this->source); })()), 'form_start', ["attr" => ["novalidate" => "novalidate"]]);
        echo "
\t";
        // line 17
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 17, $this->source); })()), "_token", [], "any", false, false, false, 17), 'row');
        echo "
\t<div style=\"margin-top:40px\">

\t\t<div
\t\t\tclass=\"container\">

\t\t\t<!-- Page header start -->
\t\t\t<div class=\"page-title\">
\t\t\t\t<div class=\"row gutters\">
\t\t\t\t\t<div class=\"col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12\">
\t\t\t\t\t\t<h5 class=\"title\">Chat App</h5>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12\"></div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<!-- Page header end -->

\t\t\t<!-- Content wrapper start -->
\t\t\t<div
\t\t\t\tclass=\"content-wrapper\"style=\"margin-top:60px\">

\t\t\t\t<!-- Row start -->
\t\t\t\t<div class=\"row gutters\">

\t\t\t\t\t<div class=\"col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12\">

\t\t\t\t\t\t<div
\t\t\t\t\t\t\tclass=\"card m-0\">

\t\t\t\t\t\t\t<!-- Row start -->
\t\t\t\t\t\t\t<div class=\"row no-gutters\">
\t\t\t\t\t\t\t\t<div class=\"col-xl-4 col-lg-4 col-md-4 col-sm-3 col-3\">
\t\t\t\t\t\t\t\t\t<div class=\"users-container\">
\t\t\t\t\t\t\t\t\t\t<div class=\"chat-search-box\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t\t\t\t\t\t<input class=\"form-control\" placeholder=\"Search\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"input-group-btn\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-info\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-search\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"col-xl-8 col-lg-8 col-md-8 col-sm-9 col-9\">
\t\t\t\t\t\t\t\t\t<div class=\"selected-user\">
\t\t\t\t\t\t\t\t\t\t<span>To:
\t\t\t\t\t\t\t\t\t\t\t<span
\t\t\t\t\t\t\t\t\t\t\t\tclass=\"name\">";
        // line 68
        echo "\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div
\t\t\t\t\t\t\t\t\t\tclass=\"chat-container\">
\t\t\t\t\t\t\t\t\t\t<div class=\"form-group mt-3 mb-0\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 75
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 75, $this->source); })()), "content", [], "any", false, false, false, 75), 'label');
        echo "
\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 76
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 76, $this->source); })()), "content", [], "any", false, false, false, 76), 'widget');
        echo "
\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 77
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 77, $this->source); })()), "content", [], "any", false, false, false, 77), 'errors');
        echo "
\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<button type=\"submit\" class=\"btn btn-outline-success\">Create</button>

\t\t\t\t\t\t\t<!-- Row end -->
\t\t\t\t\t\t</div>

\t\t\t\t\t</div>

\t\t\t\t</div>
\t\t\t\t<!-- Row end -->

\t\t\t</div>
\t\t\t<!-- Content wrapper end -->

\t\t</div>
\t</div>

\t<a href=\"";
        // line 100
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_message_index");
        echo "\">back to list</a>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "message/new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  230 => 100,  204 => 77,  200 => 76,  196 => 75,  187 => 68,  134 => 17,  129 => 16,  123 => 13,  120 => 12,  118 => 11,  108 => 10,  95 => 7,  90 => 6,  80 => 5,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}New Message
{% endblock %}
{% block stylesheets %}
\t{{parent()}}
\t<link href=\"{{asset('front/assets/css/message.css')}}\" rel=\"stylesheet\">

{% endblock %}
{% block body %}
{% if form_errors(form) %}
\t\t<div class=\"alert alert-danger\">
\t\t\t{{ form_errors(form) }}
\t\t</div>
\t{% endif %}
\t{{ form_start(form,{'attr': {'novalidate': 'novalidate'}} ) }}
\t{{ form_row(form._token) }}
\t<div style=\"margin-top:40px\">

\t\t<div
\t\t\tclass=\"container\">

\t\t\t<!-- Page header start -->
\t\t\t<div class=\"page-title\">
\t\t\t\t<div class=\"row gutters\">
\t\t\t\t\t<div class=\"col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12\">
\t\t\t\t\t\t<h5 class=\"title\">Chat App</h5>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12\"></div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<!-- Page header end -->

\t\t\t<!-- Content wrapper start -->
\t\t\t<div
\t\t\t\tclass=\"content-wrapper\"style=\"margin-top:60px\">

\t\t\t\t<!-- Row start -->
\t\t\t\t<div class=\"row gutters\">

\t\t\t\t\t<div class=\"col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12\">

\t\t\t\t\t\t<div
\t\t\t\t\t\t\tclass=\"card m-0\">

\t\t\t\t\t\t\t<!-- Row start -->
\t\t\t\t\t\t\t<div class=\"row no-gutters\">
\t\t\t\t\t\t\t\t<div class=\"col-xl-4 col-lg-4 col-md-4 col-sm-3 col-3\">
\t\t\t\t\t\t\t\t\t<div class=\"users-container\">
\t\t\t\t\t\t\t\t\t\t<div class=\"chat-search-box\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t\t\t\t\t\t<input class=\"form-control\" placeholder=\"Search\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"input-group-btn\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-info\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-search\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"col-xl-8 col-lg-8 col-md-8 col-sm-9 col-9\">
\t\t\t\t\t\t\t\t\t<div class=\"selected-user\">
\t\t\t\t\t\t\t\t\t\t<span>To:
\t\t\t\t\t\t\t\t\t\t\t<span
\t\t\t\t\t\t\t\t\t\t\t\tclass=\"name\">{# {{message.idu}} #}
\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div
\t\t\t\t\t\t\t\t\t\tclass=\"chat-container\">
\t\t\t\t\t\t\t\t\t\t<div class=\"form-group mt-3 mb-0\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t{{ form_label(form.content) }}
\t\t\t\t\t\t\t\t\t\t\t\t{{ form_widget(form.content) }}
\t\t\t\t\t\t\t\t\t\t\t\t{{ form_errors(form.content) }}
\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<button type=\"submit\" class=\"btn btn-outline-success\">Create</button>

\t\t\t\t\t\t\t<!-- Row end -->
\t\t\t\t\t\t</div>

\t\t\t\t\t</div>

\t\t\t\t</div>
\t\t\t\t<!-- Row end -->

\t\t\t</div>
\t\t\t<!-- Content wrapper end -->

\t\t</div>
\t</div>

\t<a href=\"{{ path('app_message_index') }}\">back to list</a>
{% endblock %}
", "message/new.html.twig", "C:\\Users\\aymen\\Desktop\\gitprojet\\digidreamers\\templates\\message\\new.html.twig");
    }
}
