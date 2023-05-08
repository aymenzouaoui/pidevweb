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

/* competition/index.html.twig */
class __TwigTemplate_670a124036b52931225c2fa53986febe extends Template
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
        return "baseadmin.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "competition/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "competition/index.html.twig"));

        $this->parent = $this->loadTemplate("baseadmin.html.twig", "competition/index.html.twig", 1);
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

        echo "Competition index
";
        
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
        echo "\t<a href=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_competition_index");
        echo "\" style=\"color: #00b4d8; font-size: 2.0em; text-decoration: none;\">Compétition</a>

\t<div class=\"table-responsive mt-4\">
\t\t<table class=\"table table-striped\">
\t\t\t<thead class=\"thead-light\">
\t\t\t\t<tr>
\t\t\t\t\t<th>Titre</th>
\t\t\t\t\t<th>Date de début</th>
\t\t\t\t\t<th>Date de fin</th>
\t\t\t\t\t<th>Type</th>
\t\t\t\t\t<th>Nombre de participants</th>
\t\t\t\t\t<th>Actions</th>
\t\t\t\t</tr>
\t\t\t</thead>
\t\t\t<tbody>
\t\t\t\t";
        // line 22
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["competitions"]) || array_key_exists("competitions", $context) ? $context["competitions"] : (function () { throw new RuntimeError('Variable "competitions" does not exist.', 22, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["competition"]) {
            // line 23
            echo "\t\t\t\t\t<tr>
\t\t\t\t\t\t<td>";
            // line 24
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["competition"], "title", [], "any", false, false, false, 24), "html", null, true);
            echo "</td>
\t\t\t\t\t\t<td>";
            // line 25
            ((twig_get_attribute($this->env, $this->source, $context["competition"], "dateDeb", [], "any", false, false, false, 25)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["competition"], "dateDeb", [], "any", false, false, false, 25), "Y-m-d H:i:s"), "html", null, true))) : (print ("")));
            echo "</td>
\t\t\t\t\t\t<td>";
            // line 26
            ((twig_get_attribute($this->env, $this->source, $context["competition"], "dateFin", [], "any", false, false, false, 26)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["competition"], "dateFin", [], "any", false, false, false, 26), "Y-m-d H:i:s"), "html", null, true))) : (print ("")));
            echo "</td>
\t\t\t\t\t\t<td>";
            // line 27
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["competition"], "type", [], "any", false, false, false, 27), "html", null, true);
            echo "</td>
\t\t\t\t\t\t<td>";
            // line 28
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["competition"], "nbp", [], "any", false, false, false, 28), "html", null, true);
            echo "</td>
\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t<a href=\"";
            // line 30
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_competition_show", ["id" => twig_get_attribute($this->env, $this->source, $context["competition"], "id", [], "any", false, false, false, 30)]), "html", null, true);
            echo "\" class=\"btn btn-sm btn-info\">Afficher</a>
\t\t\t\t\t\t\t<a href=\"";
            // line 31
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_competition_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["competition"], "id", [], "any", false, false, false, 31)]), "html", null, true);
            echo "\" class=\"btn btn-sm btn-warning\">Modifier</a>


\t\t\t\t\t\t\t<form method=\"post\" action=\"";
            // line 34
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_competition_delete", ["id" => twig_get_attribute($this->env, $this->source, $context["competition"], "id", [], "any", false, false, false, 34)]), "html", null, true);
            echo "\" onsubmit=\"return confirm('Êtes-vous supprimer cette compétition?');\">
\t\t\t\t\t\t\t\t<input type=\"hidden\" name=\"_token\" value=\"";
            // line 35
            echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete" . twig_get_attribute($this->env, $this->source, $context["competition"], "id", [], "any", false, false, false, 35))), "html", null, true);
            echo "\">
\t\t\t\t\t\t\t\t<button class=\"btn btn-sm btn-danger\">Supprimer</button>
\t\t\t\t\t\t\t</form>
\t\t\t\t\t\t</td>
\t\t\t\t\t</tr>
\t\t\t\t</td>
\t\t\t</tbody>
\t\t</tr>
\t";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 44
            echo "\t\t<tr>
\t\t\t<td colspan=\"7\">Aucune compétition trouvée</td>
\t\t</tr>
\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['competition'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 48
        echo "</tbody></table></div><div class=\"mt-4\"><a href=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_competition_new");
        echo "\" class=\"btn btn-success\">
<i class=\"fas fa-plus\"></i>
+ Nouvelle compétition</a></div><hr><div class=\"mt-4\"><a href=\"";
        // line 50
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_gifts_index");
        echo "\" style=\"color: #00b4d8; font-size: 2.0em; text-decoration: none;\">
<i class=\"fas fa-gift\" style=\"font-size: 1.5em; margin-right: 10px;\"></i>
Cadeaux</a></div>";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "competition/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  180 => 50,  174 => 48,  165 => 44,  151 => 35,  147 => 34,  141 => 31,  137 => 30,  132 => 28,  128 => 27,  124 => 26,  120 => 25,  116 => 24,  113 => 23,  108 => 22,  89 => 7,  79 => 6,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'baseadmin.html.twig' %}

{% block title %}Competition index
{% endblock %}

{% block body %}
\t<a href=\"{{ path('app_competition_index') }}\" style=\"color: #00b4d8; font-size: 2.0em; text-decoration: none;\">Compétition</a>

\t<div class=\"table-responsive mt-4\">
\t\t<table class=\"table table-striped\">
\t\t\t<thead class=\"thead-light\">
\t\t\t\t<tr>
\t\t\t\t\t<th>Titre</th>
\t\t\t\t\t<th>Date de début</th>
\t\t\t\t\t<th>Date de fin</th>
\t\t\t\t\t<th>Type</th>
\t\t\t\t\t<th>Nombre de participants</th>
\t\t\t\t\t<th>Actions</th>
\t\t\t\t</tr>
\t\t\t</thead>
\t\t\t<tbody>
\t\t\t\t{% for competition in competitions %}
\t\t\t\t\t<tr>
\t\t\t\t\t\t<td>{{ competition.title }}</td>
\t\t\t\t\t\t<td>{{ competition.dateDeb ? competition.dateDeb|date('Y-m-d H:i:s') : '' }}</td>
\t\t\t\t\t\t<td>{{ competition.dateFin ? competition.dateFin|date('Y-m-d H:i:s') : '' }}</td>
\t\t\t\t\t\t<td>{{ competition.type }}</td>
\t\t\t\t\t\t<td>{{ competition.nbp }}</td>
\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t<a href=\"{{ path('app_competition_show', {'id': competition.id}) }}\" class=\"btn btn-sm btn-info\">Afficher</a>
\t\t\t\t\t\t\t<a href=\"{{ path('app_competition_edit', {'id': competition.id}) }}\" class=\"btn btn-sm btn-warning\">Modifier</a>


\t\t\t\t\t\t\t<form method=\"post\" action=\"{{ path('app_competition_delete', {'id': competition.id}) }}\" onsubmit=\"return confirm('Êtes-vous supprimer cette compétition?');\">
\t\t\t\t\t\t\t\t<input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('delete' ~ competition.id) }}\">
\t\t\t\t\t\t\t\t<button class=\"btn btn-sm btn-danger\">Supprimer</button>
\t\t\t\t\t\t\t</form>
\t\t\t\t\t\t</td>
\t\t\t\t\t</tr>
\t\t\t\t</td>
\t\t\t</tbody>
\t\t</tr>
\t{% else %}
\t\t<tr>
\t\t\t<td colspan=\"7\">Aucune compétition trouvée</td>
\t\t</tr>
\t{% endfor %}
</tbody></table></div><div class=\"mt-4\"><a href=\"{{ path('app_competition_new') }}\" class=\"btn btn-success\">
<i class=\"fas fa-plus\"></i>
+ Nouvelle compétition</a></div><hr><div class=\"mt-4\"><a href=\"{{ path('app_gifts_index') }}\" style=\"color: #00b4d8; font-size: 2.0em; text-decoration: none;\">
<i class=\"fas fa-gift\" style=\"font-size: 1.5em; margin-right: 10px;\"></i>
Cadeaux</a></div>{% endblock %}

", "competition/index.html.twig", "C:\\Users\\aymen\\Desktop\\gitprojet\\digidreamers\\templates\\competition\\index.html.twig");
    }
}
