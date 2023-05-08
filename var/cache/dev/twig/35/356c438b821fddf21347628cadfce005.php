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

/* vehicule/show.html.twig */
class __TwigTemplate_08a29cc35c63d3a6f396e57dbeffbaf2 extends Template
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
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "baseadmin.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vehicule/show.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vehicule/show.html.twig"));

        $this->parent = $this->loadTemplate("baseadmin.html.twig", "vehicule/show.html.twig", 1);
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

        echo "Vehicule";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 4
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 5
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
    <style>
        #calendrier{
            width: 50%;
            margin: auto;
        }
    </style>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 13
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 14
        echo "    <h1>Vehicule</h1>

    <table class=\"table\">
       <tbody>
    <tr>
        <th>Type</th>
        <td>";
        // line 20
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["vehicule"]) || array_key_exists("vehicule", $context) ? $context["vehicule"] : (function () { throw new RuntimeError('Variable "vehicule" does not exist.', 20, $this->source); })()), "type", [], "any", false, false, false, 20), "html", null, true);
        echo "</td>
        <th></th>
        <td rowspan=\"10\"><img style=\"width:250px;height:250px\" src=\"";
        // line 22
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["vehicule"]) || array_key_exists("vehicule", $context) ? $context["vehicule"] : (function () { throw new RuntimeError('Variable "vehicule" does not exist.', 22, $this->source); })()), "img", [], "any", false, false, false, 22), "html", null, true);
        echo "\"></td>
    </tr>
    <tr>
        <th>Matricule</th>
        <td>";
        // line 26
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["vehicule"]) || array_key_exists("vehicule", $context) ? $context["vehicule"] : (function () { throw new RuntimeError('Variable "vehicule" does not exist.', 26, $this->source); })()), "immat", [], "any", false, false, false, 26), "html", null, true);
        echo "</td>
    </tr>
    <tr>
        <th>Etat</th>
        <td>";
        // line 30
        echo ((twig_get_attribute($this->env, $this->source, (isset($context["vehicule"]) || array_key_exists("vehicule", $context) ? $context["vehicule"] : (function () { throw new RuntimeError('Variable "vehicule" does not exist.', 30, $this->source); })()), "etat", [], "any", false, false, false, 30)) ? ("Reservé") : ("Disponible"));
        echo "</td>
    </tr>
    <tr>
        <th>Kilometrage</th>
        <td>";
        // line 34
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["vehicule"]) || array_key_exists("vehicule", $context) ? $context["vehicule"] : (function () { throw new RuntimeError('Variable "vehicule" does not exist.', 34, $this->source); })()), "kilometrage", [], "any", false, false, false, 34), "html", null, true);
        echo "</td>
    </tr>
    <tr>
        <th>Chevaux</th>
        <td>";
        // line 38
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["vehicule"]) || array_key_exists("vehicule", $context) ? $context["vehicule"] : (function () { throw new RuntimeError('Variable "vehicule" does not exist.', 38, $this->source); })()), "chevaux", [], "any", false, false, false, 38), "html", null, true);
        echo "</td>
    </tr>
    <tr>
        <th>Marque</th>
        <td>";
        // line 42
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["vehicule"]) || array_key_exists("vehicule", $context) ? $context["vehicule"] : (function () { throw new RuntimeError('Variable "vehicule" does not exist.', 42, $this->source); })()), "marque", [], "any", false, false, false, 42), "html", null, true);
        echo "</td>
    </tr>
    <tr>
        <th>Modele</th>
        <td>";
        // line 46
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["vehicule"]) || array_key_exists("vehicule", $context) ? $context["vehicule"] : (function () { throw new RuntimeError('Variable "vehicule" does not exist.', 46, $this->source); })()), "modele", [], "any", false, false, false, 46), "html", null, true);
        echo "</td>
    </tr>
    <tr>
        <th>Lieu de prise en charge</th>
        <td>";
        // line 50
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["vehicule"]) || array_key_exists("vehicule", $context) ? $context["vehicule"] : (function () { throw new RuntimeError('Variable "vehicule" does not exist.', 50, $this->source); })()), "lpec", [], "any", false, false, false, 50), "html", null, true);
        echo "</td>
    </tr>
    <tr>
        <th>Prix</th>
        <td>";
        // line 54
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["vehicule"]) || array_key_exists("vehicule", $context) ? $context["vehicule"] : (function () { throw new RuntimeError('Variable "vehicule" does not exist.', 54, $this->source); })()), "prix", [], "any", false, false, false, 54), "html", null, true);
        echo "</td>
    </tr>
    <tr>
        <th></th>
        <td></td>
    </tr>
</tbody>

    </table>
<div id=\"calendrier\"></div> 
    <a href=\"";
        // line 64
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_vehicule_index");
        echo "\">Retourner</a>

    <a href=\"";
        // line 66
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_vehicule_edit", ["idV" => twig_get_attribute($this->env, $this->source, (isset($context["vehicule"]) || array_key_exists("vehicule", $context) ? $context["vehicule"] : (function () { throw new RuntimeError('Variable "vehicule" does not exist.', 66, $this->source); })()), "idV", [], "any", false, false, false, 66)]), "html", null, true);
        echo "\">Modifier</a>

    ";
        // line 68
        echo twig_include($this->env, $context, "vehicule/_delete_form.html.twig");
        echo "
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 71
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 72
        echo "<script>
    window.onload = () => {  
            let calendarElt = document.querySelector(\"#calendrier\")
            let calendar = new FullCalendar.Calendar(calendarElt, {
            initialView: 'dayGridMonth',
            locale: 'fr',
            timeZone: 'Europe/Paris',
            headerToolbar: {
            },
            events: ";
        // line 81
        echo (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 81, $this->source); })());
        echo ",
            editable: true,
            eventResizableFromStart: true
        })
        calendar.on('eventChange', (e) => {
            let url = `/api/\${e.event.id}/edit`
            let donnees = {
                \"title\": e.event.title,
                \"description\": e.event.extendedProps.description,
                \"start\": e.event.start,
                \"end\": e.event.end,
                \"backgroundColor\": e.event.backgroundColor,
                \"borderColor\": e.event.borderColor,
                \"textColor\": e.event.textColor,
                \"allDay\": e.event.allDay
            }
            
            let xhr = new XMLHttpRequest
            xhr.open(\"PUT\", url)
            xhr.send(JSON.stringify(donnees))
        })
        calendar.render()
    }
</script>
";
        // line 105
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "vehicule/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  270 => 105,  243 => 81,  232 => 72,  222 => 71,  210 => 68,  205 => 66,  200 => 64,  187 => 54,  180 => 50,  173 => 46,  166 => 42,  159 => 38,  152 => 34,  145 => 30,  138 => 26,  131 => 22,  126 => 20,  118 => 14,  108 => 13,  90 => 5,  80 => 4,  61 => 3,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'baseadmin.html.twig' %}

{% block title %}Vehicule{% endblock %}
{% block stylesheets %}
{{parent()}}
    <style>
        #calendrier{
            width: 50%;
            margin: auto;
        }
    </style>
{% endblock %}
{% block body %}
    <h1>Vehicule</h1>

    <table class=\"table\">
       <tbody>
    <tr>
        <th>Type</th>
        <td>{{ vehicule.type }}</td>
        <th></th>
        <td rowspan=\"10\"><img style=\"width:250px;height:250px\" src=\"{{ vehicule.img }}\"></td>
    </tr>
    <tr>
        <th>Matricule</th>
        <td>{{ vehicule.immat }}</td>
    </tr>
    <tr>
        <th>Etat</th>
        <td>{{ vehicule.etat ? 'Reservé' :'Disponible' }}</td>
    </tr>
    <tr>
        <th>Kilometrage</th>
        <td>{{ vehicule.kilometrage }}</td>
    </tr>
    <tr>
        <th>Chevaux</th>
        <td>{{ vehicule.chevaux }}</td>
    </tr>
    <tr>
        <th>Marque</th>
        <td>{{ vehicule.marque }}</td>
    </tr>
    <tr>
        <th>Modele</th>
        <td>{{ vehicule.modele }}</td>
    </tr>
    <tr>
        <th>Lieu de prise en charge</th>
        <td>{{ vehicule.lpec }}</td>
    </tr>
    <tr>
        <th>Prix</th>
        <td>{{ vehicule.prix }}</td>
    </tr>
    <tr>
        <th></th>
        <td></td>
    </tr>
</tbody>

    </table>
<div id=\"calendrier\"></div> 
    <a href=\"{{ path('app_vehicule_index') }}\">Retourner</a>

    <a href=\"{{ path('app_vehicule_edit', {'idV': vehicule.idV}) }}\">Modifier</a>

    {{ include('vehicule/_delete_form.html.twig') }}
{% endblock %}

{% block javascripts %}
<script>
    window.onload = () => {  
            let calendarElt = document.querySelector(\"#calendrier\")
            let calendar = new FullCalendar.Calendar(calendarElt, {
            initialView: 'dayGridMonth',
            locale: 'fr',
            timeZone: 'Europe/Paris',
            headerToolbar: {
            },
            events: {{ data|raw }},
            editable: true,
            eventResizableFromStart: true
        })
        calendar.on('eventChange', (e) => {
            let url = `/api/\${e.event.id}/edit`
            let donnees = {
                \"title\": e.event.title,
                \"description\": e.event.extendedProps.description,
                \"start\": e.event.start,
                \"end\": e.event.end,
                \"backgroundColor\": e.event.backgroundColor,
                \"borderColor\": e.event.borderColor,
                \"textColor\": e.event.textColor,
                \"allDay\": e.event.allDay
            }
            
            let xhr = new XMLHttpRequest
            xhr.open(\"PUT\", url)
            xhr.send(JSON.stringify(donnees))
        })
        calendar.render()
    }
</script>
{{parent()}}
{% endblock %}", "vehicule/show.html.twig", "C:\\Users\\aymen\\Desktop\\gitprojet\\digidreamers\\templates\\vehicule\\show.html.twig");
    }
}
