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

/* user/new.html.twig */
class __TwigTemplate_b8b9b871fca40f6049d5858179f5a1c6 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 15
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "user/new.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "user/new.html.twig"));

        // line 17
        $this->env->getRuntime("Symfony\\Component\\Form\\FormRenderer")->setTheme((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 17, $this->source); })()), [0 => "bootstrap_5_layout.html.twig"], true);
        // line 15
        $this->parent = $this->loadTemplate("base.html.twig", "user/new.html.twig", 15);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 19
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "New User
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 22
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 23
        echo "
\t";
        // line 24
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 24, $this->source); })()), 'form_start', ["attr" => ["novalidate" => "novalidate"]]);
        // line 25
        echo "
\t<!-- ======= Breadcrumbs ======= -->
\t<div class=\"breadcrumbs d-flex align-items-center\" style=\"background-image: url('assets/img/contact-header.jpg');\">
\t\t<div class=\"container position-relative d-flex flex-column align-items-center\">

\t\t\t<h2>S’inscrire</h2>
\t\t\t<ol>
\t\t\t\t<li>
\t\t\t\t\t<a href=\"index.html\">Home</a>
\t\t\t\t</li>
\t\t\t\t<li>S’inscrire</li>
\t\t\t</ol>

\t\t</div>
\t</div>
\t<!-- End Breadcrumbs -->


\t<section class=\"contact-form-area section-bg  pt-115 pb-120 fix\">
\t\t<img src=\"";
        // line 44
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/assets/img/bac2.jpg"), "html", null, true);
        echo "\" class=\"background--page\" alt=\"...\" width=\"60%\" height=\"90%\">

\t\t<div class=\"container\" style=\"margin-top:-44%;margin-left:25%;\">
\t\t\t<div
\t\t\t\tclass=\"row justify-content-end\">
\t\t\t\t<!-- Contact wrapper -->
\t\t\t\t<div class=\"col-xl-8 col-lg-9\">
\t\t\t\t\t<div
\t\t\t\t\t\tclass=\"contact-form-wrapper\">
\t\t\t\t\t\t<!-- From tittle -->
\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t<div
\t\t\t\t\t\t\t\tclass=\"col-lg-12\">
\t\t\t\t\t\t\t\t<!-- Section Tittle -->
\t\t\t\t\t\t\t\t<div class=\"section-tittle mb-50\">
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t<h2>S’inscrire</h2>
\t\t\t\t\t\t\t\t\t<p><h2>Rejoignez Amena aujourd’hui.</h2></p>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<!-- form -->
\t\t\t\t\t\t<form action=\"#\" class=\"contact-form\">
\t\t\t\t\t\t\t<div class=\"row \">
\t\t\t\t\t\t\t\t<div class=\"col-lg-6 col-md-6\">
\t\t\t\t\t\t\t\t\t<div class=\"input-form\">
\t\t\t\t\t\t\t\t\t\t";
        // line 70
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 70, $this->source); })()), "nom", [], "any", false, false, false, 70), 'label');
        echo "
\t\t\t\t\t\t\t\t\t\t";
        // line 71
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 71, $this->source); })()), "nom", [], "any", false, false, false, 71), 'widget');
        echo "
\t\t\t\t\t\t\t\t\t\t";
        // line 72
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 72, $this->source); })()), "nom", [], "any", false, false, false, 72), 'errors');
        echo "
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"col-lg-6 col-md-6\">
\t\t\t\t\t\t\t\t\t<div class=\"input-form\">
\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t";
        // line 78
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 78, $this->source); })()), "prenom", [], "any", false, false, false, 78), 'label');
        echo "
\t\t\t\t\t\t\t\t\t\t\t";
        // line 79
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 79, $this->source); })()), "prenom", [], "any", false, false, false, 79), 'widget');
        echo "
\t\t\t\t\t\t\t\t\t\t\t";
        // line 80
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 80, $this->source); })()), "prenom", [], "any", false, false, false, 80), 'errors');
        echo "
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"col-lg-12\">
\t\t\t\t\t\t\t\t\t<div class=\"input-form\">
\t\t\t\t\t\t\t\t\t\t";
        // line 86
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 86, $this->source); })()), "email", [], "any", false, false, false, 86), 'label');
        echo "
\t\t\t\t\t\t\t\t\t\t";
        // line 87
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 87, $this->source); })()), "email", [], "any", false, false, false, 87), 'widget');
        echo "
\t\t\t\t\t\t\t\t\t\t";
        // line 88
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 88, $this->source); })()), "email", [], "any", false, false, false, 88), 'errors');
        echo "
\t\t\t\t\t\t\t\t\t\t";
        // line 89
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 89, $this->source); })()), "password", [], "any", false, false, false, 89), 'label');
        echo "
\t\t\t\t\t\t\t\t\t\t";
        // line 90
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 90, $this->source); })()), "password", [], "any", false, false, false, 90), 'widget');
        echo "
\t\t\t\t\t\t\t\t\t\t";
        // line 91
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 91, $this->source); })()), "password", [], "any", false, false, false, 91), 'errors');
        echo "
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"col-lg-6\">
\t\t\t\t\t\t\t\t\t<div class=\"select-items\">
\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t";
        // line 97
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 97, $this->source); })()), "roles", [], "any", false, false, false, 97), 'label');
        echo "
\t\t\t\t\t\t\t\t\t\t\t";
        // line 98
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 98, $this->source); })()), "roles", [], "any", false, false, false, 98), 'widget');
        echo "
\t\t\t\t\t\t\t\t\t\t\t";
        // line 99
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 99, $this->source); })()), "roles", [], "any", false, false, false, 99), 'errors');
        echo "
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"col-lg-6 col-md-6\">
\t\t\t\t\t\t\t\t\t<div class=\"input-form\">
\t\t\t\t\t\t\t\t\t\t";
        // line 105
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 105, $this->source); })()), "adress", [], "any", false, false, false, 105), 'label');
        echo "
\t\t\t\t\t\t\t\t\t\t";
        // line 106
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 106, $this->source); })()), "adress", [], "any", false, false, false, 106), 'widget');
        echo "
\t\t\t\t\t\t\t\t\t\t";
        // line 107
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 107, $this->source); })()), "adress", [], "any", false, false, false, 107), 'errors');
        echo "
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"col-lg-6 col-md-6 col-sm-6\">
\t\t\t\t\t\t\t\t\t<div class=\"input-form\">
\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t";
        // line 113
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 113, $this->source); })()), "date_naissance", [], "any", false, false, false, 113), 'label');
        echo "
\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t";
        // line 115
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 115, $this->source); })()), "date_naissance", [], "any", false, false, false, 115), 'widget');
        echo "
\t\t\t\t\t\t\t\t\t\t\t";
        // line 116
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 116, $this->source); })()), "date_naissance", [], "any", false, false, false, 116), 'errors');
        echo "
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"col-lg-6 col-md-6 col-sm-6\">
\t\t\t\t\t\t\t\t\t<div class=\"input-form\"></div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<!-- Height Width length -->
\t\t\t\t\t\t\t\t<div class=\"col-lg-4 col-md-6 col-sm-6\">
\t\t\t\t\t\t\t\t\t<div class=\"input-form\">
\t\t\t\t\t\t\t\t\t\t";
        // line 126
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 126, $this->source); })()), "numtel", [], "any", false, false, false, 126), 'label');
        echo "
\t\t\t\t\t\t\t\t\t\t";
        // line 127
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 127, $this->source); })()), "numtel", [], "any", false, false, false, 127), 'widget');
        echo "
\t\t\t\t\t\t\t\t\t\t";
        // line 128
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 128, $this->source); })()), "numtel", [], "any", false, false, false, 128), 'errors');
        echo "
\t\t\t\t\t\t\t\t\t\t";
        // line 129
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 129, $this->source); })()), "_token", [], "any", false, false, false, 129), 'row');
        echo "
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"col-lg-4 col-md-6 col-sm-6\">
\t\t\t\t\t\t\t\t\t<div class=\"input-form\">
\t\t\t\t\t\t\t\t\t\t";
        // line 134
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 134, $this->source); })()), "cin", [], "any", false, false, false, 134), 'label');
        echo "
\t\t\t\t\t\t\t\t\t\t";
        // line 135
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 135, $this->source); })()), "cin", [], "any", false, false, false, 135), 'widget');
        echo "
\t\t\t\t\t\t\t\t\t\t";
        // line 136
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 136, $this->source); })()), "cin", [], "any", false, false, false, 136), 'errors');
        echo "
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"col-lg-4 col-md-6 col-sm-6\">
\t\t\t\t\t\t\t\t\t<div
\t\t\t\t\t\t\t\t\t\tclass=\"input-form\">";
        // line 142
        echo "\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t<div class=\"col-lg-12\" position>
\t\t\t\t\t\t\t\t\t<button type=\"submit\" class=\"btn btn-outline-success\">S’inscrire</button>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</form>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</section>
\t<a class=\"btn btn-outline-dark\" href=\"";
        // line 155
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_user_index");
        echo "\">back to list</a>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "user/new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  317 => 155,  302 => 142,  294 => 136,  290 => 135,  286 => 134,  278 => 129,  274 => 128,  270 => 127,  266 => 126,  253 => 116,  249 => 115,  244 => 113,  235 => 107,  231 => 106,  227 => 105,  218 => 99,  214 => 98,  210 => 97,  201 => 91,  197 => 90,  193 => 89,  189 => 88,  185 => 87,  181 => 86,  172 => 80,  168 => 79,  164 => 78,  155 => 72,  151 => 71,  147 => 70,  118 => 44,  97 => 25,  95 => 24,  92 => 23,  82 => 22,  62 => 19,  51 => 15,  49 => 17,  36 => 15,);
    }

    public function getSourceContext()
    {
        return new Source("{# {% extends 'base.html.twig' %}

{% block title %}New User{% endblock %}

{% block body %}
<div class=\"container\"style=\"margin-top: 90px;\">
   
    <h1>Create new User</h1>

    {{ include('user/_form.html.twig') }}

    <a href=\"{{ path('app_user_index') }}\">back to list</a>
{% endblock %} #}

{% extends 'base.html.twig' %}

{% form_theme form 'bootstrap_5_layout.html.twig' %}

{% block title %}New User
{% endblock %}

{% block body %}

\t{{ form_start(form,{'attr': {'novalidate': 'novalidate'}}
\t) }}
\t<!-- ======= Breadcrumbs ======= -->
\t<div class=\"breadcrumbs d-flex align-items-center\" style=\"background-image: url('assets/img/contact-header.jpg');\">
\t\t<div class=\"container position-relative d-flex flex-column align-items-center\">

\t\t\t<h2>S’inscrire</h2>
\t\t\t<ol>
\t\t\t\t<li>
\t\t\t\t\t<a href=\"index.html\">Home</a>
\t\t\t\t</li>
\t\t\t\t<li>S’inscrire</li>
\t\t\t</ol>

\t\t</div>
\t</div>
\t<!-- End Breadcrumbs -->


\t<section class=\"contact-form-area section-bg  pt-115 pb-120 fix\">
\t\t<img src=\"{{ asset('front/assets/img/bac2.jpg') }}\" class=\"background--page\" alt=\"...\" width=\"60%\" height=\"90%\">

\t\t<div class=\"container\" style=\"margin-top:-44%;margin-left:25%;\">
\t\t\t<div
\t\t\t\tclass=\"row justify-content-end\">
\t\t\t\t<!-- Contact wrapper -->
\t\t\t\t<div class=\"col-xl-8 col-lg-9\">
\t\t\t\t\t<div
\t\t\t\t\t\tclass=\"contact-form-wrapper\">
\t\t\t\t\t\t<!-- From tittle -->
\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t<div
\t\t\t\t\t\t\t\tclass=\"col-lg-12\">
\t\t\t\t\t\t\t\t<!-- Section Tittle -->
\t\t\t\t\t\t\t\t<div class=\"section-tittle mb-50\">
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t<h2>S’inscrire</h2>
\t\t\t\t\t\t\t\t\t<p><h2>Rejoignez Amena aujourd’hui.</h2></p>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<!-- form -->
\t\t\t\t\t\t<form action=\"#\" class=\"contact-form\">
\t\t\t\t\t\t\t<div class=\"row \">
\t\t\t\t\t\t\t\t<div class=\"col-lg-6 col-md-6\">
\t\t\t\t\t\t\t\t\t<div class=\"input-form\">
\t\t\t\t\t\t\t\t\t\t{{ form_label(form.nom) }}
\t\t\t\t\t\t\t\t\t\t{{ form_widget(form.nom) }}
\t\t\t\t\t\t\t\t\t\t{{form_errors(form.nom)}}
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"col-lg-6 col-md-6\">
\t\t\t\t\t\t\t\t\t<div class=\"input-form\">
\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t{{ form_label(form.prenom) }}
\t\t\t\t\t\t\t\t\t\t\t{{ form_widget(form.prenom) }}
\t\t\t\t\t\t\t\t\t\t\t{{ form_errors(form.prenom) }}
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"col-lg-12\">
\t\t\t\t\t\t\t\t\t<div class=\"input-form\">
\t\t\t\t\t\t\t\t\t\t{{ form_label(form.email) }}
\t\t\t\t\t\t\t\t\t\t{{ form_widget(form.email) }}
\t\t\t\t\t\t\t\t\t\t{{ form_errors(form.email) }}
\t\t\t\t\t\t\t\t\t\t{{ form_label(form.password) }}
\t\t\t\t\t\t\t\t\t\t{{ form_widget(form.password) }}
\t\t\t\t\t\t\t\t\t\t{{ form_errors(form.password) }}
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"col-lg-6\">
\t\t\t\t\t\t\t\t\t<div class=\"select-items\">
\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t{{ form_label(form.roles) }}
\t\t\t\t\t\t\t\t\t\t\t{{ form_widget(form.roles) }}
\t\t\t\t\t\t\t\t\t\t\t{{ form_errors(form.roles) }}
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"col-lg-6 col-md-6\">
\t\t\t\t\t\t\t\t\t<div class=\"input-form\">
\t\t\t\t\t\t\t\t\t\t{{ form_label(form.adress) }}
\t\t\t\t\t\t\t\t\t\t{{ form_widget(form.adress) }}
\t\t\t\t\t\t\t\t\t\t{{ form_errors(form.adress) }}
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"col-lg-6 col-md-6 col-sm-6\">
\t\t\t\t\t\t\t\t\t<div class=\"input-form\">
\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t{{ form_label(form.date_naissance) }}
\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t{{ form_widget(form.date_naissance) }}
\t\t\t\t\t\t\t\t\t\t\t{{ form_errors(form.date_naissance) }}
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"col-lg-6 col-md-6 col-sm-6\">
\t\t\t\t\t\t\t\t\t<div class=\"input-form\"></div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<!-- Height Width length -->
\t\t\t\t\t\t\t\t<div class=\"col-lg-4 col-md-6 col-sm-6\">
\t\t\t\t\t\t\t\t\t<div class=\"input-form\">
\t\t\t\t\t\t\t\t\t\t{{ form_label(form.numtel) }}
\t\t\t\t\t\t\t\t\t\t{{ form_widget(form.numtel) }}
\t\t\t\t\t\t\t\t\t\t{{ form_errors(form.numtel) }}
\t\t\t\t\t\t\t\t\t\t{{ form_row(form._token) }}
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"col-lg-4 col-md-6 col-sm-6\">
\t\t\t\t\t\t\t\t\t<div class=\"input-form\">
\t\t\t\t\t\t\t\t\t\t{{ form_label(form.cin) }}
\t\t\t\t\t\t\t\t\t\t{{ form_widget(form.cin) }}
\t\t\t\t\t\t\t\t\t\t{{ form_errors(form.cin) }}
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"col-lg-4 col-md-6 col-sm-6\">
\t\t\t\t\t\t\t\t\t<div
\t\t\t\t\t\t\t\t\t\tclass=\"input-form\">{# <input type=\"text\" placeholder=\"length\"> #}
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t<div class=\"col-lg-12\" position>
\t\t\t\t\t\t\t\t\t<button type=\"submit\" class=\"btn btn-outline-success\">S’inscrire</button>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</form>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</section>
\t<a class=\"btn btn-outline-dark\" href=\"{{ path('app_user_index') }}\">back to list</a>
{% endblock %}
", "user/new.html.twig", "C:\\Users\\aymen\\Desktop\\gitprojet\\digidreamers\\templates\\user\\new.html.twig");
    }
}
