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

/* front_reservation/index.html.twig */
class __TwigTemplate_8996d845a911d0198f2a81e45ee671d2 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "front_reservation/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "front_reservation/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "front_reservation/index.html.twig", 1);
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

        echo "Véhicules à louer";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 6
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 7
        echo " <div class=\"breadcrumbs d-flex align-items-center\" style=\"background-image: url('assets/img/contact-header.jpg');\">
      <div class=\"container position-relative d-flex flex-column align-items-center\">

        <h2>Location des vehicules</h2>
        <ol>
          <li><a href=\"index.html\">Accueil</a></li>
          <li>Location des vehicules</li>
        </ol>

      </div>
    </div><!-- End Breadcrumbs -->
  <main id=\"main\">

<section id=\"portfolio\" class=\"portfolio1\">
      <div class=\"container\" data-aos=\"fade-up\">

        <div class=\"portfolio-isotope\" data-portfolio-filter=\"*\" data-portfolio-layout=\"masonry\" data-portfolio-sort=\"original-order\">


          <div class=\"row gy-4 portfolio-container\" data-aos=\"fade-up\" data-aos-delay=\"300\">



<div class=\"row\">
    ";
        // line 31
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["vehicules"]) || array_key_exists("vehicules", $context) ? $context["vehicules"] : (function () { throw new RuntimeError('Variable "vehicules" does not exist.', 31, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["vehicule"]) {
            // line 32
            echo "        <div class=\"row gy-4 portfolio-container\" data-aos=\"fade-up\" data-aos-delay=\"300\">
            <div class=\"col-lg-4 col-md-6 portfolio-item filter-app\">
              <img src=\"";
            // line 34
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["vehicule"], "img", [], "any", false, false, false, 34), "html", null, true);
            echo "\" class=\"img-fluid\" alt=\"\" style=\"width: 500px; height: 250px;\">
              <div class=\"portfolio-info\">
                <h4>";
            // line 36
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["vehicule"], "marque", [], "any", false, false, false, 36), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["vehicule"], "modele", [], "any", false, false, false, 36), "html", null, true);
            echo "</h4>
                <p style=\"font-size: 1.0em; font-weight: bold; color: green;\">";
            // line 37
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["vehicule"], "prix", [], "any", false, false, false, 37), "html", null, true);
            echo "dt/Jour</p>
                <a href=\"";
            // line 38
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["vehicule"], "img", [], "any", false, false, false, 38), "html", null, true);
            echo "\" title=";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["vehicule"], "marque", [], "any", false, false, false, 38), "html", null, true);
            echo " data-gallery=\"portfolio-gallery-app\" class=\"glightbox preview-link\"><i class=\"bi bi-zoom-in\"></i></a>
                <a  href=\"";
            // line 39
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_interface_reservation", ["idV" => twig_get_attribute($this->env, $this->source, $context["vehicule"], "idV", [], "any", false, false, false, 39)]), "html", null, true);
            echo "\" title=\"Reserver\" class=\"details-link\"><i class=\"bi bi-link-45deg\"></i></a>
              </div>
            </div><!-- End Portfolio Item -->
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['vehicule'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 43
        echo "</div>

          </div><!-- End Portfolio Container -->

        </div>

      </div>
    </section><!-- End Portfolio Section -->
      </main><!-- End #main -->

";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 54
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 55
        echo "\t";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
\t<link href=\"";
        // line 56
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/assets/css/main2.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">

";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "front_reservation/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  189 => 56,  184 => 55,  174 => 54,  154 => 43,  144 => 39,  138 => 38,  134 => 37,  128 => 36,  123 => 34,  119 => 32,  115 => 31,  89 => 7,  79 => 6,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Véhicules à louer{% endblock %}


{% block body %}
 <div class=\"breadcrumbs d-flex align-items-center\" style=\"background-image: url('assets/img/contact-header.jpg');\">
      <div class=\"container position-relative d-flex flex-column align-items-center\">

        <h2>Location des vehicules</h2>
        <ol>
          <li><a href=\"index.html\">Accueil</a></li>
          <li>Location des vehicules</li>
        </ol>

      </div>
    </div><!-- End Breadcrumbs -->
  <main id=\"main\">

<section id=\"portfolio\" class=\"portfolio1\">
      <div class=\"container\" data-aos=\"fade-up\">

        <div class=\"portfolio-isotope\" data-portfolio-filter=\"*\" data-portfolio-layout=\"masonry\" data-portfolio-sort=\"original-order\">


          <div class=\"row gy-4 portfolio-container\" data-aos=\"fade-up\" data-aos-delay=\"300\">



<div class=\"row\">
    {% for vehicule in vehicules %}
        <div class=\"row gy-4 portfolio-container\" data-aos=\"fade-up\" data-aos-delay=\"300\">
            <div class=\"col-lg-4 col-md-6 portfolio-item filter-app\">
              <img src=\"{{ vehicule.img }}\" class=\"img-fluid\" alt=\"\" style=\"width: 500px; height: 250px;\">
              <div class=\"portfolio-info\">
                <h4>{{ vehicule.marque }} {{ vehicule.modele }}</h4>
                <p style=\"font-size: 1.0em; font-weight: bold; color: green;\">{{ vehicule.prix }}dt/Jour</p>
                <a href=\"{{ vehicule.img }}\" title={{ vehicule.marque}} data-gallery=\"portfolio-gallery-app\" class=\"glightbox preview-link\"><i class=\"bi bi-zoom-in\"></i></a>
                <a  href=\"{{ path('app_interface_reservation', {'idV': vehicule.idV}) }}\" title=\"Reserver\" class=\"details-link\"><i class=\"bi bi-link-45deg\"></i></a>
              </div>
            </div><!-- End Portfolio Item -->
    {% endfor %}
</div>

          </div><!-- End Portfolio Container -->

        </div>

      </div>
    </section><!-- End Portfolio Section -->
      </main><!-- End #main -->

{% endblock %}
{% block stylesheets %}
\t{{parent()}}
\t<link href=\"{{asset('front/assets/css/main2.css')}}\" rel=\"stylesheet\">

{% endblock %}", "front_reservation/index.html.twig", "C:\\Users\\aymen\\Desktop\\gitprojet\\digidreamers\\templates\\front_reservation\\index.html.twig");
    }
}
