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

/* colis/index.html.twig */
class __TwigTemplate_6b4fce1772111fd3bc75f68463252422 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "colis/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "colis/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "colis/index.html.twig", 1);
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

        echo "Colis index";
        
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
    <h1>Colis index</h1>

    <table class=\"table\">
        <thead>
            <tr>
                <th>Id</th>
                <th>Nom Expediteur</th>
                <th>Adresse Expediteur</th>
                <th>Nom Destinataire</th>
                <th>Adresse Destinataire</th>
                <th>Poids</th>
                <th>Statut</th>
                <th>Date Expedition</th>
                <th>actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 35
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["colis"]) || array_key_exists("colis", $context) ? $context["colis"] : (function () { throw new RuntimeError('Variable "colis" does not exist.', 35, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["coli"]) {
            // line 36
            echo "            <tr>
                <td>";
            // line 37
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["coli"], "id", [], "any", false, false, false, 37), "html", null, true);
            echo "</td>
                <td>";
            // line 38
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["coli"], "nomExpediteur", [], "any", false, false, false, 38), "html", null, true);
            echo "</td>
                <td>";
            // line 39
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["coli"], "adresseExpediteur", [], "any", false, false, false, 39), "html", null, true);
            echo "</td>
                <td>";
            // line 40
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["coli"], "nomDestinataire", [], "any", false, false, false, 40), "html", null, true);
            echo "</td>
                <td>";
            // line 41
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["coli"], "adresseDestinataire", [], "any", false, false, false, 41), "html", null, true);
            echo "</td>
                <td>";
            // line 42
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["coli"], "poids", [], "any", false, false, false, 42), "html", null, true);
            echo "</td>
                <td>";
            // line 43
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["coli"], "statut", [], "any", false, false, false, 43), "html", null, true);
            echo "</td>
                <td>";
            // line 44
            ((twig_get_attribute($this->env, $this->source, $context["coli"], "dateExpedition", [], "any", false, false, false, 44)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["coli"], "dateExpedition", [], "any", false, false, false, 44), "Y-m-d"), "html", null, true))) : (print ("")));
            echo "</td>
                <td>
                    <a class=\"btn btn-primary btn-sm\" href=\"";
            // line 46
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_colis_show", ["id" => twig_get_attribute($this->env, $this->source, $context["coli"], "id", [], "any", false, false, false, 46)]), "html", null, true);
            echo "\">Afficher</a>
                    <a class=\"btn btn-primary btn-sm\" href=\"";
            // line 47
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_colis_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["coli"], "id", [], "any", false, false, false, 47)]), "html", null, true);
            echo "\">Modifier</a>
                    <a class=\"btn btn-primary btn-sm\" href=\"";
            // line 48
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_colis_map");
            echo "\">Afficher la position du colis</a>
                </td>
            </tr>
        ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 52
            echo "            <tr>
                <td colspan=\"9\">Aucun colis trouvé</td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['coli'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 56
        echo "        </tbody>
    </table>

    <a href=\"";
        // line 59
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_colis_new");
        echo "\">Ajouter un nouveau colis </a>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "colis/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  191 => 59,  186 => 56,  177 => 52,  168 => 48,  164 => 47,  160 => 46,  155 => 44,  151 => 43,  147 => 42,  143 => 41,  139 => 40,  135 => 39,  131 => 38,  127 => 37,  124 => 36,  119 => 35,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Colis index{% endblock %}

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
    <h1>Colis index</h1>

    <table class=\"table\">
        <thead>
            <tr>
                <th>Id</th>
                <th>Nom Expediteur</th>
                <th>Adresse Expediteur</th>
                <th>Nom Destinataire</th>
                <th>Adresse Destinataire</th>
                <th>Poids</th>
                <th>Statut</th>
                <th>Date Expedition</th>
                <th>actions</th>
            </tr>
        </thead>
        <tbody>
        {% for coli in colis %}
            <tr>
                <td>{{ coli.id }}</td>
                <td>{{ coli.nomExpediteur }}</td>
                <td>{{ coli.adresseExpediteur }}</td>
                <td>{{ coli.nomDestinataire }}</td>
                <td>{{ coli.adresseDestinataire }}</td>
                <td>{{ coli.poids }}</td>
                <td>{{ coli.statut }}</td>
                <td>{{ coli.dateExpedition ? coli.dateExpedition|date('Y-m-d') : '' }}</td>
                <td>
                    <a class=\"btn btn-primary btn-sm\" href=\"{{ path('app_colis_show', {'id': coli.id}) }}\">Afficher</a>
                    <a class=\"btn btn-primary btn-sm\" href=\"{{ path('app_colis_edit', {'id': coli.id}) }}\">Modifier</a>
                    <a class=\"btn btn-primary btn-sm\" href=\"{{ path('app_colis_map') }}\">Afficher la position du colis</a>
                </td>
            </tr>
        {% else %}
            <tr>
                <td colspan=\"9\">Aucun colis trouvé</td>
            </tr>
        {% endfor %}
        </tbody>
    </table>

    <a href=\"{{ path('app_colis_new') }}\">Ajouter un nouveau colis </a>
{% endblock %}
", "colis/index.html.twig", "C:\\Users\\aymen\\Desktop\\gitprojet\\digidreamers\\templates\\colis\\index.html.twig");
    }
}
