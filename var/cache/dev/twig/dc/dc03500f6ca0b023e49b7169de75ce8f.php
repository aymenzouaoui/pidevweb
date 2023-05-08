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

/* documentexpedition/show.html.twig */
class __TwigTemplate_e160ded747edcef0660ae13a5316ca21 extends Template
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
            'stylesheets' => [$this, 'block_stylesheets'],
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "documentexpedition/show.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "documentexpedition/show.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "documentexpedition/show.html.twig", 1);
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

        echo "Document d'expédition";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "<!-- ======= Breadcrumbs ======= -->
    <div class=\"breadcrumbs d-flex align-items-center\" style=\"background-image: url('assets/img/contact-header.jpg');\">
      <div class=\"container position-relative d-flex flex-column align-items-center\">

        <h2>Document d'expedition</h2>
        <ol>
          <li><a href=\"";
        // line 12
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_accueil");
        echo "\">Accueil</a></li>
          <li>Document d'expedition</li>
        </ol>

      </div>
    </div><!-- End Breadcrumbs -->
    <div class=\"container my-5\">
        <div class=\"row justify-content-center\">
            <div class=\"col-lg-8\">
                <div class=\"card\">
                    <div class=\"card-header\">
                        <h4>Document d'expédition</h4>
                    </div>
                    <div class=\"card-body\">
                        <table class=\"table\">
                            <tbody>
                                <tr>
                                    <th>Id</th>
                                    <td>";
        // line 30
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["documentexpedition"]) || array_key_exists("documentexpedition", $context) ? $context["documentexpedition"] : (function () { throw new RuntimeError('Variable "documentexpedition" does not exist.', 30, $this->source); })()), "id", [], "any", false, false, false, 30), "html", null, true);
        echo "</td>
                                </tr>
                                <tr>
                                    <th>Date de signature</th>
                                    <td>";
        // line 34
        ((twig_get_attribute($this->env, $this->source, (isset($context["documentexpedition"]) || array_key_exists("documentexpedition", $context) ? $context["documentexpedition"] : (function () { throw new RuntimeError('Variable "documentexpedition" does not exist.', 34, $this->source); })()), "datesignature", [], "any", false, false, false, 34)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["documentexpedition"]) || array_key_exists("documentexpedition", $context) ? $context["documentexpedition"] : (function () { throw new RuntimeError('Variable "documentexpedition" does not exist.', 34, $this->source); })()), "datesignature", [], "any", false, false, false, 34), "d/m/Y"), "html", null, true))) : (print ("")));
        echo "</td>
                                </tr>
                                <tr>
                                    <th>Statut</th>
                                    <td>";
        // line 38
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["documentexpedition"]) || array_key_exists("documentexpedition", $context) ? $context["documentexpedition"] : (function () { throw new RuntimeError('Variable "documentexpedition" does not exist.', 38, $this->source); })()), "statut", [], "any", false, false, false, 38), "html", null, true);
        echo "</td>
                                </tr>
                                <tr>
                                    <th>Colis</th>
                                    <td>";
        // line 42
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["documentexpedition"]) || array_key_exists("documentexpedition", $context) ? $context["documentexpedition"] : (function () { throw new RuntimeError('Variable "documentexpedition" does not exist.', 42, $this->source); })()), "getColisId", [], "method", false, false, false, 42), "html", null, true);
        echo "</td>
                                </tr>
                                <tr>
                                    <th>Description</th>
                                    <td>";
        // line 46
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["documentexpedition"]) || array_key_exists("documentexpedition", $context) ? $context["documentexpedition"] : (function () { throw new RuntimeError('Variable "documentexpedition" does not exist.', 46, $this->source); })()), "Description", [], "any", false, false, false, 46), "html", null, true);
        echo "</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class=\"card-footer\">
                        <a href=\"";
        // line 52
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_documentexpedition_index");
        echo "\" class=\"btn btn-secondary\">Retour à la liste</a>
                        <a href=\"";
        // line 53
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_documentexpedition_edit", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["documentexpedition"]) || array_key_exists("documentexpedition", $context) ? $context["documentexpedition"] : (function () { throw new RuntimeError('Variable "documentexpedition" does not exist.', 53, $this->source); })()), "id", [], "any", false, false, false, 53)]), "html", null, true);
        echo "\" class=\"btn btn-primary\">Modifier</a>
                        ";
        // line 54
        echo twig_include($this->env, $context, "documentexpedition/_delete_form.html.twig");
        echo "
                    </div>
                </div>
            </div>
        </div>
    </div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 62
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 63
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
    <link href=\"";
        // line 64
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/assets/vendor/bootstrap/css/bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <link href=\"";
        // line 65
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/assets/vendor/bootstrap-icons/bootstrap-icons.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <link href=\"";
        // line 66
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/assets/vendor/aos/aos.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <link href=\"";
        // line 67
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/assets/vendor/glightbox/css/glightbox.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <link href=\"";
        // line 68
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/assets/vendor/swiper/swiper-bundle.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <link href=\"";
        // line 69
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/assets/vendor/remixicon/remixicon.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <link href=\"";
        // line 70
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/assets/css/main.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "documentexpedition/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  219 => 70,  215 => 69,  211 => 68,  207 => 67,  203 => 66,  199 => 65,  195 => 64,  190 => 63,  180 => 62,  163 => 54,  159 => 53,  155 => 52,  146 => 46,  139 => 42,  132 => 38,  125 => 34,  118 => 30,  97 => 12,  89 => 6,  79 => 5,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Document d'expédition{% endblock %}

{% block body %}
<!-- ======= Breadcrumbs ======= -->
    <div class=\"breadcrumbs d-flex align-items-center\" style=\"background-image: url('assets/img/contact-header.jpg');\">
      <div class=\"container position-relative d-flex flex-column align-items-center\">

        <h2>Document d'expedition</h2>
        <ol>
          <li><a href=\"{{path('app_accueil')}}\">Accueil</a></li>
          <li>Document d'expedition</li>
        </ol>

      </div>
    </div><!-- End Breadcrumbs -->
    <div class=\"container my-5\">
        <div class=\"row justify-content-center\">
            <div class=\"col-lg-8\">
                <div class=\"card\">
                    <div class=\"card-header\">
                        <h4>Document d'expédition</h4>
                    </div>
                    <div class=\"card-body\">
                        <table class=\"table\">
                            <tbody>
                                <tr>
                                    <th>Id</th>
                                    <td>{{ documentexpedition.id }}</td>
                                </tr>
                                <tr>
                                    <th>Date de signature</th>
                                    <td>{{ documentexpedition.datesignature ? documentexpedition.datesignature|date('d/m/Y') : '' }}</td>
                                </tr>
                                <tr>
                                    <th>Statut</th>
                                    <td>{{ documentexpedition.statut }}</td>
                                </tr>
                                <tr>
                                    <th>Colis</th>
                                    <td>{{ documentexpedition.getColisId()}}</td>
                                </tr>
                                <tr>
                                    <th>Description</th>
                                    <td>{{ documentexpedition.Description }}</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class=\"card-footer\">
                        <a href=\"{{ path('app_documentexpedition_index') }}\" class=\"btn btn-secondary\">Retour à la liste</a>
                        <a href=\"{{ path('app_documentexpedition_edit', {'id': documentexpedition.id}) }}\" class=\"btn btn-primary\">Modifier</a>
                        {{ include('documentexpedition/_delete_form.html.twig') }}
                    </div>
                </div>
            </div>
        </div>
    </div>
{% endblock %}

{% block stylesheets %}
    {{ parent() }}
    <link href=\"{{asset('front/assets/vendor/bootstrap/css/bootstrap.min.css')}}\" rel=\"stylesheet\">
    <link href=\"{{asset('front/assets/vendor/bootstrap-icons/bootstrap-icons.css')}}\" rel=\"stylesheet\">
    <link href=\"{{asset('front/assets/vendor/aos/aos.css')}}\" rel=\"stylesheet\">
    <link href=\"{{asset('front/assets/vendor/glightbox/css/glightbox.min.css')}}\" rel=\"stylesheet\">
    <link href=\"{{asset('front/assets/vendor/swiper/swiper-bundle.min.css')}}\" rel=\"stylesheet\">
    <link href=\"{{asset('front/assets/vendor/remixicon/remixicon.css')}}\" rel=\"stylesheet\">
    <link href=\"{{asset('front/assets/css/main.css')}}\" rel=\"stylesheet\">
{% endblock %}
", "documentexpedition/show.html.twig", "C:\\Users\\aymen\\Desktop\\gitprojet\\digidreamers\\templates\\documentexpedition\\show.html.twig");
    }
}
