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

/* reclamations/index.html.twig */
class __TwigTemplate_da11090face50faae60b42730ddd2e6e extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'stylesheets' => [$this, 'block_stylesheets'],
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "reclamations/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "reclamations/index.html.twig"));

        $this->parent = $this->loadTemplate("baseadmin.html.twig", "reclamations/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 2
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 3
        echo "\t";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
\t<link href=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/assets/css/cc.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">

";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 8
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 9
        echo "
\t

\t<table class=\"table\">
\t\t
\t\t<tbody>
\t";
        // line 15
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_array_batch((isset($context["reclamations"]) || array_key_exists("reclamations", $context) ? $context["reclamations"] : (function () { throw new RuntimeError('Variable "reclamations" does not exist.', 15, $this->source); })()), 3));
        foreach ($context['_seq'] as $context["_key"] => $context["reclamation"]) {
            // line 16
            echo "  <tr>
    ";
            // line 17
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["reclamation"]);
            foreach ($context['_seq'] as $context["_key"] => $context["r"]) {
                // line 18
                echo "      <td>
        <div class=\"col-md-6 col-xl-3\">
          <div class=\"card m-b-10\" style=\"width: 450px; height: 500px;\">
            <div class=\"card-body row\">
             
              <div class=\"col-6 card-title align-self-center mb-0\">
\t\t\t\t<h5>L'objet :</h5>
                <h5>";
                // line 25
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["r"], "Objet", [], "any", false, false, false, 25), "html", null, true);
                echo "</h5>
\t\t\t\t<h5>Description :</h5>
                <h5>";
                // line 27
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["r"], "Description", [], "any", false, false, false, 27), "html", null, true);
                echo "</h5>
              </div>
            </div>
            <div class=\"float-right btn-group btn-group-sm\" style=\"width: 75px; height: 35px;\">
             
              <a href=\"";
                // line 32
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_reclamations_delete", ["id" => twig_get_attribute($this->env, $this->source, $context["r"], "id", [], "any", false, false, false, 32)]), "html", null, true);
                echo "\" class=\"btn btn-secondary tooltips\" data-placement=\"top\" data-toggle=\"tooltip\" data-original-title=\"Delete\">
                <i class=\"fa fa-times\"></i>
              </a>
            </div>
          </div>
        </div>
      </td>
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['r'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 40
            echo "  </tr>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['reclamation'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 42
        echo "</tbody>
</table>";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "reclamations/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  159 => 42,  152 => 40,  138 => 32,  130 => 27,  125 => 25,  116 => 18,  112 => 17,  109 => 16,  105 => 15,  97 => 9,  87 => 8,  74 => 4,  69 => 3,  59 => 2,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'baseadmin.html.twig' %}
 {% block stylesheets %}
\t{{parent()}}
\t<link href=\"{{asset('front/assets/css/cc.css')}}\" rel=\"stylesheet\">

{% endblock %}

{% block body %}

\t

\t<table class=\"table\">
\t\t
\t\t<tbody>
\t{% for reclamation in reclamations|batch(3) %}
  <tr>
    {% for r in reclamation %}
      <td>
        <div class=\"col-md-6 col-xl-3\">
          <div class=\"card m-b-10\" style=\"width: 450px; height: 500px;\">
            <div class=\"card-body row\">
             
              <div class=\"col-6 card-title align-self-center mb-0\">
\t\t\t\t<h5>L'objet :</h5>
                <h5>{{ r.Objet}}</h5>
\t\t\t\t<h5>Description :</h5>
                <h5>{{ r.Description}}</h5>
              </div>
            </div>
            <div class=\"float-right btn-group btn-group-sm\" style=\"width: 75px; height: 35px;\">
             
              <a href=\"{{ path('app_reclamations_delete', {'id': r.id}) }}\" class=\"btn btn-secondary tooltips\" data-placement=\"top\" data-toggle=\"tooltip\" data-original-title=\"Delete\">
                <i class=\"fa fa-times\"></i>
              </a>
            </div>
          </div>
        </div>
      </td>
    {% endfor %}
  </tr>
{% endfor %}
</tbody>
</table>{% endblock %}
", "reclamations/index.html.twig", "C:\\Users\\aymen\\Desktop\\gitprojet\\digidreamers\\templates\\reclamations\\index.html.twig");
    }
}
