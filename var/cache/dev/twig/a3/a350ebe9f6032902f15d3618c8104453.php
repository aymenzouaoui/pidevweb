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

/* reservation/download.html.twig */
class __TwigTemplate_f262faf164ecc4e9efdd47ddd5be9110 extends Template
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
        return "base-pdf.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "reservation/download.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "reservation/download.html.twig"));

        $this->parent = $this->loadTemplate("base-pdf.html.twig", "reservation/download.html.twig", 1);
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

        echo "Liste des données de";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 4
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 5
        echo "<!DOCTYPE html>
<html lang=\"fr\">
  <head>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <title>Facture de location de voiture</title>
    <style>
      body {
        font-family: Arial, sans-serif;
        font-size: 14px;
      }
      .invoice {
        margin: 20px auto;
        padding: 20px;
        width: 80%;
        max-width: 800px;
        border: 1px solid #ccc;
        border-radius: 5px;
        box-shadow: 0 0 5px rgba(0, 0, 0, 0.1);
        text-align: center;
      }
      .invoice h1 {
        font-size: 24px;
        margin-bottom: 20px;
      }
      .invoice p {
        margin: 10px 0;
      }
      .invoice table {
        width: 100%;
        border-collapse: collapse;
        margin-bottom: 20px;
      }
      .invoice table th {
        background-color: #eee;
        padding: 10px;
      }
      .invoice table td {
        padding: 10px;
        text-align: center;
      }
      .invoice table tr:nth-child(even) {
        background-color: #f2f2f2;
      }
      .invoice table tfoot td {
        font-weight: bold;
      }
    </style>
  </head>
  <body>
    <div class=\"invoice\">
      <h1>Facture de location de voiture</h1>
      <p>Facture N°: ";
        // line 57
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["reservationsAndVehicules"]) || array_key_exists("reservationsAndVehicules", $context) ? $context["reservationsAndVehicules"] : (function () { throw new RuntimeError('Variable "reservationsAndVehicules" does not exist.', 57, $this->source); })()), 0, [], "array", false, false, false, 57), "reservation", [], "any", false, false, false, 57), "id", [], "any", false, false, false, 57), "html", null, true);
        echo "</p>
      <p>Date de facturation: ";
        // line 58
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["reservationsAndVehicules"]) || array_key_exists("reservationsAndVehicules", $context) ? $context["reservationsAndVehicules"] : (function () { throw new RuntimeError('Variable "reservationsAndVehicules" does not exist.', 58, $this->source); })()), 0, [], "array", false, false, false, 58), "reservation", [], "any", false, false, false, 58), "dateDeb", [], "any", false, false, false, 58), "d/m/Y"), "html", null, true);
        echo "</p>
      <p>Date de retour: ";
        // line 59
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["reservationsAndVehicules"]) || array_key_exists("reservationsAndVehicules", $context) ? $context["reservationsAndVehicules"] : (function () { throw new RuntimeError('Variable "reservationsAndVehicules" does not exist.', 59, $this->source); })()), 0, [], "array", false, false, false, 59), "reservation", [], "any", false, false, false, 59), "dateFin", [], "any", false, false, false, 59), "d/m/Y"), "html", null, true);
        echo "</p>
      <p>Client: ";
        // line 60
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 60, $this->source); })()), "nom", [], "any", false, false, false, 60), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 60, $this->source); })()), "prenom", [], "any", false, false, false, 60), "html", null, true);
        echo "</p>
      <table>
        <thead>
          <tr>
            <th>Véhicule</th>
            <th>Prix / jour</th>
            <th>Durée</th>
            <th>Total</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>";
        // line 72
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["reservationsAndVehicules"]) || array_key_exists("reservationsAndVehicules", $context) ? $context["reservationsAndVehicules"] : (function () { throw new RuntimeError('Variable "reservationsAndVehicules" does not exist.', 72, $this->source); })()), 0, [], "array", false, false, false, 72), "vehicule", [], "any", false, false, false, 72), "marque", [], "any", false, false, false, 72), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["reservationsAndVehicules"]) || array_key_exists("reservationsAndVehicules", $context) ? $context["reservationsAndVehicules"] : (function () { throw new RuntimeError('Variable "reservationsAndVehicules" does not exist.', 72, $this->source); })()), 0, [], "array", false, false, false, 72), "vehicule", [], "any", false, false, false, 72), "modele", [], "any", false, false, false, 72), "html", null, true);
        echo ")</td>
            <td>";
        // line 73
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["reservationsAndVehicules"]) || array_key_exists("reservationsAndVehicules", $context) ? $context["reservationsAndVehicules"] : (function () { throw new RuntimeError('Variable "reservationsAndVehicules" does not exist.', 73, $this->source); })()), 0, [], "array", false, false, false, 73), "vehicule", [], "any", false, false, false, 73), "prix", [], "any", false, false, false, 73), "html", null, true);
        echo " dt</td>
            <td>";
        // line 74
        echo twig_escape_filter($this->env, (isset($context["periode"]) || array_key_exists("periode", $context) ? $context["periode"] : (function () { throw new RuntimeError('Variable "periode" does not exist.', 74, $this->source); })()), "html", null, true);
        echo "jour(s)</td>
            <td>";
        // line 75
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["reservationsAndVehicules"]) || array_key_exists("reservationsAndVehicules", $context) ? $context["reservationsAndVehicules"] : (function () { throw new RuntimeError('Variable "reservationsAndVehicules" does not exist.', 75, $this->source); })()), 0, [], "array", false, false, false, 75), "reservation", [], "any", false, false, false, 75), "somme", [], "any", false, false, false, 75), "html", null, true);
        echo " dt</td>
          </tr>
        </tbody>
        <tfoot>
          <tr>
            <td colspan=\"3\"></td>
            <td>";
        // line 81
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["reservationsAndVehicules"]) || array_key_exists("reservationsAndVehicules", $context) ? $context["reservationsAndVehicules"] : (function () { throw new RuntimeError('Variable "reservationsAndVehicules" does not exist.', 81, $this->source); })()), 0, [], "array", false, false, false, 81), "reservation", [], "any", false, false, false, 81), "somme", [], "any", false, false, false, 81), "html", null, true);
        echo " dt</td>
          </tr>
        </tfoot>
      </table>
      <p>Merci pour votre confiance, au plaisir de vous revoir bientôt !</p>
    </div>
  </body>
</html>

";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 91
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 92
        echo "\t";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
\t<link href=\"";
        // line 93
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/assets/css/invoice.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">

";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "reservation/download.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  230 => 93,  225 => 92,  215 => 91,  195 => 81,  186 => 75,  182 => 74,  178 => 73,  172 => 72,  155 => 60,  151 => 59,  147 => 58,  143 => 57,  89 => 5,  79 => 4,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"base-pdf.html.twig\" %}

{% block title %}Liste des données de{% endblock %}
{% block body %}
<!DOCTYPE html>
<html lang=\"fr\">
  <head>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <title>Facture de location de voiture</title>
    <style>
      body {
        font-family: Arial, sans-serif;
        font-size: 14px;
      }
      .invoice {
        margin: 20px auto;
        padding: 20px;
        width: 80%;
        max-width: 800px;
        border: 1px solid #ccc;
        border-radius: 5px;
        box-shadow: 0 0 5px rgba(0, 0, 0, 0.1);
        text-align: center;
      }
      .invoice h1 {
        font-size: 24px;
        margin-bottom: 20px;
      }
      .invoice p {
        margin: 10px 0;
      }
      .invoice table {
        width: 100%;
        border-collapse: collapse;
        margin-bottom: 20px;
      }
      .invoice table th {
        background-color: #eee;
        padding: 10px;
      }
      .invoice table td {
        padding: 10px;
        text-align: center;
      }
      .invoice table tr:nth-child(even) {
        background-color: #f2f2f2;
      }
      .invoice table tfoot td {
        font-weight: bold;
      }
    </style>
  </head>
  <body>
    <div class=\"invoice\">
      <h1>Facture de location de voiture</h1>
      <p>Facture N°: {{reservationsAndVehicules[0].reservation.id}}</p>
      <p>Date de facturation: {{reservationsAndVehicules[0].reservation.dateDeb | date('d/m/Y')}}</p>
      <p>Date de retour: {{reservationsAndVehicules[0].reservation.dateFin | date('d/m/Y')}}</p>
      <p>Client: {{user.nom}} {{user.prenom}}</p>
      <table>
        <thead>
          <tr>
            <th>Véhicule</th>
            <th>Prix / jour</th>
            <th>Durée</th>
            <th>Total</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>{{reservationsAndVehicules[0].vehicule.marque}} ({{reservationsAndVehicules[0].vehicule.modele}})</td>
            <td>{{reservationsAndVehicules[0].vehicule.prix}} dt</td>
            <td>{{periode}}jour(s)</td>
            <td>{{reservationsAndVehicules[0].reservation.somme}} dt</td>
          </tr>
        </tbody>
        <tfoot>
          <tr>
            <td colspan=\"3\"></td>
            <td>{{reservationsAndVehicules[0].reservation.somme}} dt</td>
          </tr>
        </tfoot>
      </table>
      <p>Merci pour votre confiance, au plaisir de vous revoir bientôt !</p>
    </div>
  </body>
</html>

{% endblock %}
{% block stylesheets %}
\t{{parent()}}
\t<link href=\"{{asset('front/assets/css/invoice.css')}}\" rel=\"stylesheet\">

{% endblock %}", "reservation/download.html.twig", "C:\\Users\\aymen\\Desktop\\gitprojet\\digidreamers\\templates\\reservation\\download.html.twig");
    }
}
