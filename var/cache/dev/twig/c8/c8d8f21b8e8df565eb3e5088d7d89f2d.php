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

/* front_competition/index.html.twig */
class __TwigTemplate_c12ee2f7ba08fa2c4e1976fd7267bff8 extends Template
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
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "front_competition/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "front_competition/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "front_competition/index.html.twig", 1);
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

        echo "La liste des compétitions";
        
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
        echo "
<section class=\"competitions\">
<!-- ======= Breadcrumbs ======= -->
    <div class=\"breadcrumbs d-flex align-items-center\" style=\"background-image: url('assets/img/contact-header.jpg');\">
      <div class=\"container position-relative d-flex flex-column align-items-center\">
          <li><a href=\"";
        // line 11
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_accueil");
        echo "\">Accueil</a></li>
        <h2>Gamification</h2>
      </div>
    </div><!-- End Breadcrumbs -->
  <div class=\"container\">

    <div class=\"row\">
      <div class=\"col-lg-12\">
        <h2 class=\"text-center mb-5\">Compétitions en cours</h2>
      </div>
    </div>

    <div class=\"row row-cols-1 row-cols-md-3 g-4\">
      ";
        // line 24
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["competitions"]) || array_key_exists("competitions", $context) ? $context["competitions"] : (function () { throw new RuntimeError('Variable "competitions" does not exist.', 24, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["competition"]) {
            // line 25
            echo "        <div class=\"col\">
          <div class=\"card h-100\">
            <div class=\"card-body\">
              <h5 class=\"card-title\">";
            // line 28
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["competition"], "title", [], "any", false, false, false, 28), "html", null, true);
            echo "</h5>
              <p class=\"card-text\">";
            // line 29
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["competition"], "type", [], "any", false, false, false, 29), "html", null, true);
            echo "</p>
              <ul class=\"list-unstyled\">
                <li><strong>Début : </strong>";
            // line 31
            ((twig_get_attribute($this->env, $this->source, $context["competition"], "dateDeb", [], "any", false, false, false, 31)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["competition"], "dateDeb", [], "any", false, false, false, 31), "Y-m-d H:i:s"), "html", null, true))) : (print ("")));
            echo "</li>
                <li><strong>Fin : </strong>";
            // line 32
            ((twig_get_attribute($this->env, $this->source, $context["competition"], "dateFin", [], "any", false, false, false, 32)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["competition"], "dateFin", [], "any", false, false, false, 32), "Y-m-d H:i:s"), "html", null, true))) : (print ("")));
            echo "</li>
                <li><strong>Nombre de participants : </strong>";
            // line 33
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["competition"], "nbp", [], "any", false, false, false, 33), "html", null, true);
            echo "</li>
              </ul>
            </div>
            <div class=\"card-footer\">
              <div class=\"d-grid gap-2\">
                <a href=\"";
            // line 38
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_front_participer", ["id" => twig_get_attribute($this->env, $this->source, $context["competition"], "id", [], "any", false, false, false, 38)]), "html", null, true);
            echo "\" class=\"btn btn-sm btn-outline-secondary\" id=\"participer-btn\" >Participer</a>
                <a class=\"btn btn-secondary\" href=\"#\">Cadeaux</a>
              </div>
            </div>
          </div>
        </div>
      ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 45
            echo "        <div class=\"col-lg-12\">
          <p>Il n'y a aucune compétition disponible.</p>
        </div>
      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['competition'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 49
        echo "
    </div>

  </div>
</section>

";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "front_competition/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  167 => 49,  158 => 45,  146 => 38,  138 => 33,  134 => 32,  130 => 31,  125 => 29,  121 => 28,  116 => 25,  111 => 24,  95 => 11,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}La liste des compétitions{% endblock %}

{% block body %}

<section class=\"competitions\">
<!-- ======= Breadcrumbs ======= -->
    <div class=\"breadcrumbs d-flex align-items-center\" style=\"background-image: url('assets/img/contact-header.jpg');\">
      <div class=\"container position-relative d-flex flex-column align-items-center\">
          <li><a href=\"{{path('app_accueil')}}\">Accueil</a></li>
        <h2>Gamification</h2>
      </div>
    </div><!-- End Breadcrumbs -->
  <div class=\"container\">

    <div class=\"row\">
      <div class=\"col-lg-12\">
        <h2 class=\"text-center mb-5\">Compétitions en cours</h2>
      </div>
    </div>

    <div class=\"row row-cols-1 row-cols-md-3 g-4\">
      {% for competition in competitions %}
        <div class=\"col\">
          <div class=\"card h-100\">
            <div class=\"card-body\">
              <h5 class=\"card-title\">{{ competition.title }}</h5>
              <p class=\"card-text\">{{ competition.type }}</p>
              <ul class=\"list-unstyled\">
                <li><strong>Début : </strong>{{ competition.dateDeb ? competition.dateDeb|date('Y-m-d H:i:s') : '' }}</li>
                <li><strong>Fin : </strong>{{ competition.dateFin ? competition.dateFin|date('Y-m-d H:i:s') : '' }}</li>
                <li><strong>Nombre de participants : </strong>{{ competition.nbp }}</li>
              </ul>
            </div>
            <div class=\"card-footer\">
              <div class=\"d-grid gap-2\">
                <a href=\"{{path('app_front_participer',{'id': competition.id})}}\" class=\"btn btn-sm btn-outline-secondary\" id=\"participer-btn\" >Participer</a>
                <a class=\"btn btn-secondary\" href=\"#\">Cadeaux</a>
              </div>
            </div>
          </div>
        </div>
      {% else %}
        <div class=\"col-lg-12\">
          <p>Il n'y a aucune compétition disponible.</p>
        </div>
      {% endfor %}

    </div>

  </div>
</section>

{% endblock %}", "front_competition/index.html.twig", "C:\\Users\\aymen\\Desktop\\gitprojet\\digidreamers\\templates\\front_competition\\index.html.twig");
    }
}
