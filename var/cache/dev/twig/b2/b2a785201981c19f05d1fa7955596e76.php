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

/* documentexpedition/index.html.twig */
class __TwigTemplate_b24d928573a563721daad0e12aa8cf1e extends Template
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
            'calendar' => [$this, 'block_calendar'],
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "documentexpedition/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "documentexpedition/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "documentexpedition/index.html.twig", 1);
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

        echo "Documentexpedition index";
        
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
    <h1>Documentexpedition index</h1>

    <table class=\"table\">
        <thead>
            <tr>
                <th>Id</th>
                <th>Datesignature</th>
                <th>Statut</th>
                <th>Description</th>
                <th>actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 31
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["documentexpeditions"]) || array_key_exists("documentexpeditions", $context) ? $context["documentexpeditions"] : (function () { throw new RuntimeError('Variable "documentexpeditions" does not exist.', 31, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["documentexpedition"]) {
            // line 32
            echo "            <tr>
                <td>";
            // line 33
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["documentexpedition"], "id", [], "any", false, false, false, 33), "html", null, true);
            echo "</td>
                <td>";
            // line 34
            ((twig_get_attribute($this->env, $this->source, $context["documentexpedition"], "datesignature", [], "any", false, false, false, 34)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["documentexpedition"], "datesignature", [], "any", false, false, false, 34), "Y-m-d"), "html", null, true))) : (print ("")));
            echo "</td>
                <td>";
            // line 35
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["documentexpedition"], "statut", [], "any", false, false, false, 35), "html", null, true);
            echo "</td>
                <td>";
            // line 36
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["documentexpedition"], "description", [], "any", false, false, false, 36), "html", null, true);
            echo "</td>

                <td>
                    <a class=\"btn btn-primary btn-sm\" href=\"";
            // line 39
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_documentexpedition_show", ["id" => twig_get_attribute($this->env, $this->source, $context["documentexpedition"], "id", [], "any", false, false, false, 39)]), "html", null, true);
            echo "\">Afficher</a>
                    <a class=\"btn btn-primary btn-sm\" href=\"";
            // line 40
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_documentexpedition_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["documentexpedition"], "id", [], "any", false, false, false, 40)]), "html", null, true);
            echo "\">Modifier</a>
                    <a class=\"btn btn-primary btn-sm\" href=\"";
            // line 41
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_documentexpedition_print", ["id" => twig_get_attribute($this->env, $this->source, $context["documentexpedition"], "id", [], "any", false, false, false, 41)]), "html", null, true);
            echo "\">imprimer</a> 
                    <a class=\"btn btn-primary btn-sm\" href=\"";
            // line 42
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_map");
            echo "\">Voir la position</a>                
                </td>
            </tr>
        ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 46
            echo "            <tr>
                <td colspan=\"4\">Aucun element</td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['documentexpedition'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 50
        echo "        </tbody>
    </table>

    <a class=\"btn btn-primary btn-sm\" href=\"";
        // line 53
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_documentexpedition_new");
        echo "\">Ajouter un document d'expedition</a>

";
        // line 55
        $this->displayBlock('calendar', $context, $blocks);
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function block_calendar($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "calendar"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "calendar"));

        // line 56
        echo "<div style='display: flex; justify-content: center;'>
  <div id='calendar' style='max-width: 1000px'></div>
</div>
<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.4.0/fullcalendar.min.css' />

<script src='https://cdn.jsdelivr.net/npm/fullcalendar@6.1.5/index.global.min.js'></script>
<script>
  document.addEventListener('DOMContentLoaded', function() {
    var calendarEl = document.getElementById('calendar');
    var calendar = new FullCalendar.Calendar(calendarEl, {
        headerToolbar: {
        left: \"prev,next today\",
        center: \"title\",
        right: \"dayGridMonth,timeGridWeek,timeGridDay,listMonth\"
    },
        
      initialView: 'dayGridMonth',
      aspectRatio: 1.5,
      contentHeight: 500,
      events: ";
        // line 75
        echo (isset($context["events"]) || array_key_exists("events", $context) ? $context["events"] : (function () { throw new RuntimeError('Variable "events" does not exist.', 75, $this->source); })());
        echo ",
      eventClick: function(info) {
        // get the ID of the clicked shipment
        var shipmentId = info.event.title.match(/\\d+/)[0];
        
        // get the details of the shipment using an AJAX request
        \$.get(\"/colis/\" + shipmentId, function(data) {
          // display the details in an alert
          var shipment = JSON.parse(data);
          alert(\"Nom expéditeur: \" + shipment.nomExpediteur + \"\\n\" +
                \"Adresse expéditeur: \" + shipment.adresseExpediteur + \"\\n\" +
                \"Nom destinataire: \" + shipment.nomDestinataire + \"\\n\" +
                \"Adresse destinataire: \" + shipment.adresseDestinataire + \"\\n\" +
                \"Poids: \" + shipment.poids + \" kg\");
        });
      }
    });
    calendar.render();
  });
</script>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "documentexpedition/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  225 => 75,  204 => 56,  185 => 55,  180 => 53,  175 => 50,  166 => 46,  157 => 42,  153 => 41,  149 => 40,  145 => 39,  139 => 36,  135 => 35,  131 => 34,  127 => 33,  124 => 32,  119 => 31,  97 => 12,  89 => 6,  79 => 5,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Documentexpedition index{% endblock %}

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
    <h1>Documentexpedition index</h1>

    <table class=\"table\">
        <thead>
            <tr>
                <th>Id</th>
                <th>Datesignature</th>
                <th>Statut</th>
                <th>Description</th>
                <th>actions</th>
            </tr>
        </thead>
        <tbody>
        {% for documentexpedition in documentexpeditions %}
            <tr>
                <td>{{ documentexpedition.id }}</td>
                <td>{{ documentexpedition.datesignature ? documentexpedition.datesignature|date('Y-m-d') : '' }}</td>
                <td>{{ documentexpedition.statut }}</td>
                <td>{{ documentexpedition.description }}</td>

                <td>
                    <a class=\"btn btn-primary btn-sm\" href=\"{{ path('app_documentexpedition_show', {'id': documentexpedition.id}) }}\">Afficher</a>
                    <a class=\"btn btn-primary btn-sm\" href=\"{{ path('app_documentexpedition_edit', {'id': documentexpedition.id}) }}\">Modifier</a>
                    <a class=\"btn btn-primary btn-sm\" href=\"{{ path('app_documentexpedition_print', {'id': documentexpedition.id}) }}\">imprimer</a> 
                    <a class=\"btn btn-primary btn-sm\" href=\"{{ path('app_map') }}\">Voir la position</a>                
                </td>
            </tr>
        {% else %}
            <tr>
                <td colspan=\"4\">Aucun element</td>
            </tr>
        {% endfor %}
        </tbody>
    </table>

    <a class=\"btn btn-primary btn-sm\" href=\"{{ path('app_documentexpedition_new') }}\">Ajouter un document d'expedition</a>

{% block calendar %}
<div style='display: flex; justify-content: center;'>
  <div id='calendar' style='max-width: 1000px'></div>
</div>
<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.4.0/fullcalendar.min.css' />

<script src='https://cdn.jsdelivr.net/npm/fullcalendar@6.1.5/index.global.min.js'></script>
<script>
  document.addEventListener('DOMContentLoaded', function() {
    var calendarEl = document.getElementById('calendar');
    var calendar = new FullCalendar.Calendar(calendarEl, {
        headerToolbar: {
        left: \"prev,next today\",
        center: \"title\",
        right: \"dayGridMonth,timeGridWeek,timeGridDay,listMonth\"
    },
        
      initialView: 'dayGridMonth',
      aspectRatio: 1.5,
      contentHeight: 500,
      events: {{ events|raw }},
      eventClick: function(info) {
        // get the ID of the clicked shipment
        var shipmentId = info.event.title.match(/\\d+/)[0];
        
        // get the details of the shipment using an AJAX request
        \$.get(\"/colis/\" + shipmentId, function(data) {
          // display the details in an alert
          var shipment = JSON.parse(data);
          alert(\"Nom expéditeur: \" + shipment.nomExpediteur + \"\\n\" +
                \"Adresse expéditeur: \" + shipment.adresseExpediteur + \"\\n\" +
                \"Nom destinataire: \" + shipment.nomDestinataire + \"\\n\" +
                \"Adresse destinataire: \" + shipment.adresseDestinataire + \"\\n\" +
                \"Poids: \" + shipment.poids + \" kg\");
        });
      }
    });
    calendar.render();
  });
</script>
{% endblock %}
{% endblock %}", "documentexpedition/index.html.twig", "C:\\Users\\aymen\\Desktop\\gitprojet\\digidreamers\\templates\\documentexpedition\\index.html.twig");
    }
}
