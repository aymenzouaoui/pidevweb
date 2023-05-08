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

/* documentexpedition/showC.html.twig */
class __TwigTemplate_cc46fa06552eb252e02226ef2a40511f extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "documentexpedition/showC.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "documentexpedition/showC.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "documentexpedition/showC.html.twig", 1);
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

        echo "Colis";
        
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

        <h2>Colis</h2>
        <ol>
          <li><a href=\"index.html\">Accueil</a></li>
          <li>Colis</li>
        </ol>

      </div>
    </div><!-- End Breadcrumbs -->
    <div class=\"container my-5\">
        <div class=\"row justify-content-center\">
            <div class=\"col-lg-8\">
                <div class=\"card\">
                    <div class=\"card-header\">
                        <h4>Colis</h4>
                    </div>
                    <div class=\"card-body\">
                        <table class=\"table\">
                            <tbody>
                                <tr>
                                    <th>Id</th>
                                    <td>";
        // line 30
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["coli"]) || array_key_exists("coli", $context) ? $context["coli"] : (function () { throw new RuntimeError('Variable "coli" does not exist.', 30, $this->source); })()), "id", [], "any", false, false, false, 30), "html", null, true);
        echo "</td>
                                </tr>
                                <tr>
                                    <th>Nom de l'expéditeur</th>
                                    <td>";
        // line 34
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["coli"]) || array_key_exists("coli", $context) ? $context["coli"] : (function () { throw new RuntimeError('Variable "coli" does not exist.', 34, $this->source); })()), "nomExpediteur", [], "any", false, false, false, 34), "html", null, true);
        echo "</td>
                                </tr>
                                <tr>
                                    <th>Adresse de l'expéditeur</th>
                                    <td>";
        // line 38
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["coli"]) || array_key_exists("coli", $context) ? $context["coli"] : (function () { throw new RuntimeError('Variable "coli" does not exist.', 38, $this->source); })()), "adresseExpediteur", [], "any", false, false, false, 38), "html", null, true);
        echo "</td>
                                </tr>
                                <tr>
                                    <th>Nom du destinataire</th>
                                    <td>";
        // line 42
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["coli"]) || array_key_exists("coli", $context) ? $context["coli"] : (function () { throw new RuntimeError('Variable "coli" does not exist.', 42, $this->source); })()), "nomDestinataire", [], "any", false, false, false, 42), "html", null, true);
        echo "</td>
                                </tr>
                                <tr>
                                    <th>Adresse du destinataire</th>
                                    <td>";
        // line 46
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["coli"]) || array_key_exists("coli", $context) ? $context["coli"] : (function () { throw new RuntimeError('Variable "coli" does not exist.', 46, $this->source); })()), "adresseDestinataire", [], "any", false, false, false, 46), "html", null, true);
        echo "</td>
                                </tr>
                                <tr>
                                    <th>Poids</th>
                                    <td>";
        // line 50
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["coli"]) || array_key_exists("coli", $context) ? $context["coli"] : (function () { throw new RuntimeError('Variable "coli" does not exist.', 50, $this->source); })()), "poids", [], "any", false, false, false, 50), "html", null, true);
        echo "</td>
                                </tr>
                                <tr>
                                    <th>Statut</th>
                                    <td>";
        // line 54
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["coli"]) || array_key_exists("coli", $context) ? $context["coli"] : (function () { throw new RuntimeError('Variable "coli" does not exist.', 54, $this->source); })()), "statut", [], "any", false, false, false, 54), "html", null, true);
        echo "</td>
                                </tr>
                                <tr>
                                    <th>Date d'expédition</th>
                                    <td>";
        // line 58
        ((twig_get_attribute($this->env, $this->source, (isset($context["coli"]) || array_key_exists("coli", $context) ? $context["coli"] : (function () { throw new RuntimeError('Variable "coli" does not exist.', 58, $this->source); })()), "dateExpedition", [], "any", false, false, false, 58)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["coli"]) || array_key_exists("coli", $context) ? $context["coli"] : (function () { throw new RuntimeError('Variable "coli" does not exist.', 58, $this->source); })()), "dateExpedition", [], "any", false, false, false, 58), "d/m/Y"), "html", null, true))) : (print ("")));
        echo "</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class=\"card-footer\">
                        ";
        // line 64
        if ((twig_get_attribute($this->env, $this->source, (isset($context["coli"]) || array_key_exists("coli", $context) ? $context["coli"] : (function () { throw new RuntimeError('Variable "coli" does not exist.', 64, $this->source); })()), "statut", [], "any", false, false, false, 64) != "livré")) {
            // line 65
            echo "                            <form action=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("livraison_confirm", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["coli"]) || array_key_exists("coli", $context) ? $context["coli"] : (function () { throw new RuntimeError('Variable "coli" does not exist.', 65, $this->source); })()), "id", [], "any", false, false, false, 65)]), "html", null, true);
            echo "\" method=\"post\">
                                <button type=\"submit\" class=\"btn btn-primary\" onsubmit=\"return confirm('Vous etes sure de confirmer la livraison ? La livraison se fait qu'une seule fois');\">Confirmer la livraison</button>
                            </form>
                        ";
        }
        // line 69
        echo "                        <a href=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_documentexpedition_index");
        echo "\" class=\"btn btn-secondary\"  onsubmit=\"return confirm('Vous etes sure de confirmer la livraison ? La livraison se fait qu'une seule fois');\">Retour à la liste</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <h1>Liste des colis:</h1>
  <ul>
    ";
        // line 77
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["coli"]) || array_key_exists("coli", $context) ? $context["coli"] : (function () { throw new RuntimeError('Variable "coli" does not exist.', 77, $this->source); })()));
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
        foreach ($context['_seq'] as $context["_key"] => $context["colis"]) {
            // line 78
            echo "            <li>
                ";
            // line 79
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["colis"], "adresseDestinataire", [], "any", false, false, false, 79), "html", null, true);
            echo "
                ";
            // line 80
            $context["adresse"] = twig_get_attribute($this->env, $this->source, $context["colis"], "adresseDestinataire", [], "any", false, false, false, 80);
            // line 81
            echo "                ";
            $context["adresse"] = ((isset($context["adresse"]) || array_key_exists("adresse", $context) ? $context["adresse"] : (function () { throw new RuntimeError('Variable "adresse" does not exist.', 81, $this->source); })()) . "+Tunisia");
            // line 82
            echo "                <a href=\"#\" class=\"show-on-map\" data-adresse=\"";
            echo twig_escape_filter($this->env, (isset($context["adresse"]) || array_key_exists("adresse", $context) ? $context["adresse"] : (function () { throw new RuntimeError('Variable "adresse" does not exist.', 82, $this->source); })()), "html", null, true);
            echo "\">Afficher sur la carte</a>
            </li>
        <div id=\"map-";
            // line 84
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 84), "html", null, true);
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
            // line 98
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 98), "html", null, true);
            echo "',
            style: 'mapbox://styles/mapbox/satellite-streets-v12',
            center: [longitude, latitude],
            zoom: 14,
          });

      // Ajout d'un marqueur pour la position de l'utilisateur
      const marker = new mapboxgl.Marker().setLngLat([longitude, latitude]).addTo(map);

// Récupération de l'adresse de destination depuis la variable Twig
const adresse = '";
            // line 108
            echo twig_escape_filter($this->env, twig_replace_filter(twig_get_attribute($this->env, $this->source, $context["colis"], "adresseDestinataire", [], "any", false, false, false, 108), [" " => "+"]), "html", null, true);
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
            // line 126
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 126), "html", null, true);
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
            // line 137
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 137), "html", null, true);
            echo "',
          type: 'line',
          source: 'route-";
            // line 139
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 139), "html", null, true);
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['colis'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 157
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 158
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
    <link href=\"";
        // line 159
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/assets/vendor/bootstrap/css/bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <link href=\"";
        // line 160
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/assets/vendor/bootstrap-icons/bootstrap-icons.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <link href=\"";
        // line 161
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/assets/vendor/aos/aos.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <link href=\"";
        // line 162
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/assets/vendor/glightbox/css/glightbox.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <link href=\"";
        // line 163
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/assets/vendor/swiper/swiper-bundle.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <link href=\"";
        // line 164
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/assets/vendor/remixicon/remixicon.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <link href=\"";
        // line 165
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/assets/css/main.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "documentexpedition/showC.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  377 => 165,  373 => 164,  369 => 163,  365 => 162,  361 => 161,  357 => 160,  353 => 159,  348 => 158,  338 => 157,  300 => 139,  295 => 137,  281 => 126,  260 => 108,  247 => 98,  230 => 84,  224 => 82,  221 => 81,  219 => 80,  215 => 79,  212 => 78,  195 => 77,  183 => 69,  175 => 65,  173 => 64,  164 => 58,  157 => 54,  150 => 50,  143 => 46,  136 => 42,  129 => 38,  122 => 34,  115 => 30,  89 => 6,  79 => 5,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Colis{% endblock %}

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
    <div class=\"container my-5\">
        <div class=\"row justify-content-center\">
            <div class=\"col-lg-8\">
                <div class=\"card\">
                    <div class=\"card-header\">
                        <h4>Colis</h4>
                    </div>
                    <div class=\"card-body\">
                        <table class=\"table\">
                            <tbody>
                                <tr>
                                    <th>Id</th>
                                    <td>{{ coli.id }}</td>
                                </tr>
                                <tr>
                                    <th>Nom de l'expéditeur</th>
                                    <td>{{ coli.nomExpediteur }}</td>
                                </tr>
                                <tr>
                                    <th>Adresse de l'expéditeur</th>
                                    <td>{{ coli.adresseExpediteur }}</td>
                                </tr>
                                <tr>
                                    <th>Nom du destinataire</th>
                                    <td>{{ coli.nomDestinataire }}</td>
                                </tr>
                                <tr>
                                    <th>Adresse du destinataire</th>
                                    <td>{{ coli.adresseDestinataire }}</td>
                                </tr>
                                <tr>
                                    <th>Poids</th>
                                    <td>{{ coli.poids }}</td>
                                </tr>
                                <tr>
                                    <th>Statut</th>
                                    <td>{{ coli.statut }}</td>
                                </tr>
                                <tr>
                                    <th>Date d'expédition</th>
                                    <td>{{ coli.dateExpedition ? coli.dateExpedition|date('d/m/Y') : '' }}</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class=\"card-footer\">
                        {% if coli.statut != 'livré' %}
                            <form action=\"{{ path('livraison_confirm', {'id': coli.id}) }}\" method=\"post\">
                                <button type=\"submit\" class=\"btn btn-primary\" onsubmit=\"return confirm('Vous etes sure de confirmer la livraison ? La livraison se fait qu'une seule fois');\">Confirmer la livraison</button>
                            </form>
                        {% endif %}
                        <a href=\"{{ path('app_documentexpedition_index') }}\" class=\"btn btn-secondary\"  onsubmit=\"return confirm('Vous etes sure de confirmer la livraison ? La livraison se fait qu'une seule fois');\">Retour à la liste</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <h1>Liste des colis:</h1>
  <ul>
    {% for colis in coli %}
            <li>
                {{ colis.adresseDestinataire }}
                {% set adresse = colis.adresseDestinataire %}
                {% set adresse = adresse ~ '+Tunisia' %}
                <a href=\"#\" class=\"show-on-map\" data-adresse=\"{{ adresse }}\">Afficher sur la carte</a>
            </li>
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
const adresse = '{{ colis.adresseDestinataire|replace({' ': '+'}) }}' + '+Tunisia';


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
{% endblock %}", "documentexpedition/showC.html.twig", "C:\\Users\\aymen\\Desktop\\gitprojet\\digidreamers\\templates\\documentexpedition\\showC.html.twig");
    }
}
