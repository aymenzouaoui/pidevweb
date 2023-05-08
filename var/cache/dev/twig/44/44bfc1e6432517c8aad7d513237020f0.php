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

/* map/index.html.twig */
class __TwigTemplate_21f391bccbd7f09f87cb47a2660e5bd8 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "map/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "map/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "map/index.html.twig", 1);
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
        echo " <div class=\"breadcrumbs d-flex align-items-center\" style=\"background-image: url('assets/img/contact-header.jpg');\">
      <div class=\"container position-relative d-flex flex-column align-items-center\">

        <h2>Document d'expedition</h2>
        <ol>
          <li><a href=\"/\">Accueil</a></li>
          <li>Document d'expedition</li>
        </ol>

      </div>
    </div><!-- End Breadcrumbs -->
  <h1>Liste des colis:</h1>
  <ul>
    ";
        // line 17
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["colis"]) || array_key_exists("colis", $context) ? $context["colis"] : (function () { throw new RuntimeError('Variable "colis" does not exist.', 17, $this->source); })()));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["coli"]) {
            // line 18
            echo "      <li>
        ";
            // line 19
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["coli"], "adresseDestinataire", [], "any", false, false, false, 19), "html", null, true);
            echo "
        ";
            // line 20
            $context["adresse"] = twig_get_attribute($this->env, $this->source, $context["coli"], "adresseDestinataire", [], "any", false, false, false, 20);
            // line 21
            echo "        ";
            $context["adresse"] = ((isset($context["adresse"]) || array_key_exists("adresse", $context) ? $context["adresse"] : (function () { throw new RuntimeError('Variable "adresse" does not exist.', 21, $this->source); })()) . "+Tunisia");
            // line 22
            echo "        <a href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_map", ["adresse" => (isset($context["adresse"]) || array_key_exists("adresse", $context) ? $context["adresse"] : (function () { throw new RuntimeError('Variable "adresse" does not exist.', 22, $this->source); })())]), "html", null, true);
            echo "\">Afficher sur la carte</a>
        <div id=\"map-";
            // line 23
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 23), "html", null, true);
            echo "\" style=\"height: 600px;\"></div>
      </li>
      <link href=\"https://api.mapbox.com/mapbox-gl-js/v2.14.1/mapbox-gl.css\" rel=\"stylesheet\">
      <script src=\"https://api.mapbox.com/mapbox-gl-js/v2.14.1/mapbox-gl.js\"></script>
      <script>
        // Récupération de la géolocalisation
        if (navigator.geolocation) {
          navigator.geolocation.getCurrentPosition(
            (position) => {
              const latitude = position.coords.latitude;
              const longitude = position.coords.longitude;
          // Initialisation de la carte Mapbox
          mapboxgl.accessToken = 'pk.eyJ1IjoibWFsZWt6YWlkaSIsImEiOiJjbGVsZXdwdWIwdXM2M3luNGNqZXJybGJwIn0.pT6KgpnGNkMUdaZ-8vq08w';
          const map = new mapboxgl.Map({
            container: 'map-";
            // line 37
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 37), "html", null, true);
            echo "',
            style: 'mapbox://styles/mapbox/satellite-streets-v12',
            center: [longitude, latitude],
            zoom: 14,
          });

      // Ajout d'un marqueur pour la position de l'utilisateur
      const marker = new mapboxgl.Marker().setLngLat([longitude, latitude]).addTo(map);

// Récupération de l'adresse de destination depuis la variable Twig
const adresse = '";
            // line 47
            echo twig_escape_filter($this->env, twig_replace_filter(twig_get_attribute($this->env, $this->source, $context["coli"], "adresseDestinataire", [], "any", false, false, false, 47), [" " => "+"]), "html", null, true);
            echo "' + '+Tunisia';


// Récupération des coordonnées de l'adresse de destination en utilisant l'API Geocoding de Mapbox
const url = 'https://api.mapbox.com/geocoding/v5/mapbox.places/' + adresse + '.json?access_token=' + mapboxgl.accessToken;
fetch(url)
  .then(response => response.json())
  .then(data => {
    const destination = data.features[0].geometry.coordinates;

    // Calcul du trajet le plus court en utilisant l'API Directions de Mapbox
    const url = 'https://api.mapbox.com/directions/v5/mapbox/driving/' + longitude + ',' + latitude + ';' + destination[0] + ',' + destination[1] + '?geometries=geojson&access_token=' + mapboxgl.accessToken;
    fetch(url)
      .then(response => response.json())
      .then(data => {
        const route = data.routes[0].geometry;
        
        // Création de la source de données pour le trajet
        map.addSource('route-";
            // line 65
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 65), "html", null, true);
            echo "', {
          type: 'geojson',
          data: {
            type: 'Feature',
            properties: {},
            geometry: route
          }
        });

        // Ajout de la couche de ligne pour représenter le trajet
        map.addLayer({
          id: 'route-";
            // line 76
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 76), "html", null, true);
            echo "',
          type: 'line',
          source: 'route-";
            // line 78
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 78), "html", null, true);
            echo "',
          layout: {
            'line-join': 'round',
            'line-cap': 'round'
          },
          paint: {
            'line-color': '#096a09',
            'line-width': 8
          }
        });
      });
  });
    });
}
  </script>
";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['coli'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "map/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  187 => 78,  182 => 76,  168 => 65,  147 => 47,  134 => 37,  117 => 23,  112 => 22,  109 => 21,  107 => 20,  103 => 19,  100 => 18,  83 => 17,  68 => 4,  58 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block body %}
 <div class=\"breadcrumbs d-flex align-items-center\" style=\"background-image: url('assets/img/contact-header.jpg');\">
      <div class=\"container position-relative d-flex flex-column align-items-center\">

        <h2>Document d'expedition</h2>
        <ol>
          <li><a href=\"/\">Accueil</a></li>
          <li>Document d'expedition</li>
        </ol>

      </div>
    </div><!-- End Breadcrumbs -->
  <h1>Liste des colis:</h1>
  <ul>
    {% for coli in colis %}
      <li>
        {{ coli.adresseDestinataire }}
        {% set adresse = coli.adresseDestinataire %}
        {% set adresse = adresse ~ '+Tunisia' %}
        <a href=\"{{ path('app_map', {'adresse': adresse}) }}\">Afficher sur la carte</a>
        <div id=\"map-{{ loop.index }}\" style=\"height: 600px;\"></div>
      </li>
      <link href=\"https://api.mapbox.com/mapbox-gl-js/v2.14.1/mapbox-gl.css\" rel=\"stylesheet\">
      <script src=\"https://api.mapbox.com/mapbox-gl-js/v2.14.1/mapbox-gl.js\"></script>
      <script>
        // Récupération de la géolocalisation
        if (navigator.geolocation) {
          navigator.geolocation.getCurrentPosition(
            (position) => {
              const latitude = position.coords.latitude;
              const longitude = position.coords.longitude;
          // Initialisation de la carte Mapbox
          mapboxgl.accessToken = 'pk.eyJ1IjoibWFsZWt6YWlkaSIsImEiOiJjbGVsZXdwdWIwdXM2M3luNGNqZXJybGJwIn0.pT6KgpnGNkMUdaZ-8vq08w';
          const map = new mapboxgl.Map({
            container: 'map-{{ loop.index }}',
            style: 'mapbox://styles/mapbox/satellite-streets-v12',
            center: [longitude, latitude],
            zoom: 14,
          });

      // Ajout d'un marqueur pour la position de l'utilisateur
      const marker = new mapboxgl.Marker().setLngLat([longitude, latitude]).addTo(map);

// Récupération de l'adresse de destination depuis la variable Twig
const adresse = '{{ coli.adresseDestinataire|replace({' ': '+'}) }}' + '+Tunisia';


// Récupération des coordonnées de l'adresse de destination en utilisant l'API Geocoding de Mapbox
const url = 'https://api.mapbox.com/geocoding/v5/mapbox.places/' + adresse + '.json?access_token=' + mapboxgl.accessToken;
fetch(url)
  .then(response => response.json())
  .then(data => {
    const destination = data.features[0].geometry.coordinates;

    // Calcul du trajet le plus court en utilisant l'API Directions de Mapbox
    const url = 'https://api.mapbox.com/directions/v5/mapbox/driving/' + longitude + ',' + latitude + ';' + destination[0] + ',' + destination[1] + '?geometries=geojson&access_token=' + mapboxgl.accessToken;
    fetch(url)
      .then(response => response.json())
      .then(data => {
        const route = data.routes[0].geometry;
        
        // Création de la source de données pour le trajet
        map.addSource('route-{{ loop.index }}', {
          type: 'geojson',
          data: {
            type: 'Feature',
            properties: {},
            geometry: route
          }
        });

        // Ajout de la couche de ligne pour représenter le trajet
        map.addLayer({
          id: 'route-{{ loop.index }}',
          type: 'line',
          source: 'route-{{ loop.index }}',
          layout: {
            'line-join': 'round',
            'line-cap': 'round'
          },
          paint: {
            'line-color': '#096a09',
            'line-width': 8
          }
        });
      });
  });
    });
}
  </script>
{% endfor %}
{% endblock %}", "map/index.html.twig", "C:\\Users\\aymen\\Desktop\\gitprojet\\digidreamers\\templates\\map\\index.html.twig");
    }
}
