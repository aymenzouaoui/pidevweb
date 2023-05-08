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

/* colis/map.html.twig */
class __TwigTemplate_19ffc51481799ac42e60db81726859b3 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "colis/map.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "colis/map.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "colis/map.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "<!-- ======= Breadcrumbs ======= -->
    <div class=\"breadcrumbs d-flex align-items-center\" style=\"background-image: url('assets/img/contact-header.jpg');\">
      <div class=\"container position-relative d-flex flex-column align-items-center\">

        <h2>Colis</h2>
        <ol>
          <li><a href=\"index.html\">Accueil</a></li>
          <li>Colis</li>
        </ol>

      </div>
    </div><!-- End Breadcrumbs -->
  <h1>Liste des colis:</h1>
  <ul>
      <div id='map' style='width: 100%; height: 500px;'></div>
     <link href=\"https://api.mapbox.com/mapbox-gl-js/v2.14.1/mapbox-gl.css\" rel=\"stylesheet\">
      <script src=\"https://api.mapbox.com/mapbox-gl-js/v2.14.1/mapbox-gl.js\"></script>

      <script>
        mapboxgl.accessToken = 'pk.eyJ1IjoibWFsZWt6YWlkaSIsImEiOiJjbGVsZXdwdWIwdXM2M3luNGNqZXJybGJwIn0.pT6KgpnGNkMUdaZ-8vq08w';
        navigator.geolocation.getCurrentPosition(function(position) {
          const latitude = position.coords.latitude;
          const longitude = position.coords.longitude;

          // Initialisation de la carte Mapbox
          const map = new mapboxgl.Map({
            container: 'map',
            style: 'mapbox://styles/mapbox/satellite-streets-v12',
            center: [longitude, latitude],
            zoom: 14,
          });

          // Ajout d'un marqueur pour la position de l'utilisateur
          const marker = new mapboxgl.Marker().setLngLat([longitude, latitude]).addTo(map);
        });
      </script>
  </ul>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "colis/map.html.twig";
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
<!-- ======= Breadcrumbs ======= -->
    <div class=\"breadcrumbs d-flex align-items-center\" style=\"background-image: url('assets/img/contact-header.jpg');\">
      <div class=\"container position-relative d-flex flex-column align-items-center\">

        <h2>Colis</h2>
        <ol>
          <li><a href=\"index.html\">Accueil</a></li>
          <li>Colis</li>
        </ol>

      </div>
    </div><!-- End Breadcrumbs -->
  <h1>Liste des colis:</h1>
  <ul>
      <div id='map' style='width: 100%; height: 500px;'></div>
     <link href=\"https://api.mapbox.com/mapbox-gl-js/v2.14.1/mapbox-gl.css\" rel=\"stylesheet\">
      <script src=\"https://api.mapbox.com/mapbox-gl-js/v2.14.1/mapbox-gl.js\"></script>

      <script>
        mapboxgl.accessToken = 'pk.eyJ1IjoibWFsZWt6YWlkaSIsImEiOiJjbGVsZXdwdWIwdXM2M3luNGNqZXJybGJwIn0.pT6KgpnGNkMUdaZ-8vq08w';
        navigator.geolocation.getCurrentPosition(function(position) {
          const latitude = position.coords.latitude;
          const longitude = position.coords.longitude;

          // Initialisation de la carte Mapbox
          const map = new mapboxgl.Map({
            container: 'map',
            style: 'mapbox://styles/mapbox/satellite-streets-v12',
            center: [longitude, latitude],
            zoom: 14,
          });

          // Ajout d'un marqueur pour la position de l'utilisateur
          const marker = new mapboxgl.Marker().setLngLat([longitude, latitude]).addTo(map);
        });
      </script>
  </ul>
{% endblock %}", "colis/map.html.twig", "C:\\Users\\aymen\\Desktop\\gitprojet\\digidreamers\\templates\\colis\\map.html.twig");
    }
}
