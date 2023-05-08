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

/* front_reservation/mesReservations.html.twig */
class __TwigTemplate_895cfa095b057fc2b52c7d83dc12bead extends Template
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
        return "baseClient.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "front_reservation/mesReservations.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "front_reservation/mesReservations.html.twig"));

        $this->parent = $this->loadTemplate("baseClient.html.twig", "front_reservation/mesReservations.html.twig", 1);
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

        echo "Mes Reservations";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 5
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 6
        echo "
\t\t\t";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getFunction('encore_entry_link_tags')->getCallable()("app"), "html", null, true);
        echo "
\t\t\t<link href=\"https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600&display=swap\" rel=\"stylesheet\">
   \t\t\t <link rel=\"stylesheet\" href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/mercuryseriesflashy/css/flashy.css"), "html", null, true);
        echo "\">
";
        // line 10
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
\t<link href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/assets/css/mesRes.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
\t\t";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 14
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 15
        echo "
<div class=\"event-schedule-area-two bg-color pad100\">
    <div class=\"container\">
       
        <!-- row end-->
        <div class=\"row\">
            <div class=\"col-lg-12\">
                <div class=\"tab-content\" id=\"myTabContent\">
                    <div class=\"tab-pane fade active show\" id=\"home\" role=\"tabpanel\">
                        <div class=\"table-responsive\">
                            <table class=\"table\">
                                <thead>
                                    <tr>
                                         <th class=\"text-center\" scope=\"col\">Etat</th>
                                        <th scope=\"col\">Vehicule</th>
                                        <th scope=\"col\">Informations</th>
                                        <th class=\"text-center\" scope=\"col\">Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                ";
        // line 35
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_reverse_filter($this->env, (isset($context["reservationsAndVehicules"]) || array_key_exists("reservationsAndVehicules", $context) ? $context["reservationsAndVehicules"] : (function () { throw new RuntimeError('Variable "reservationsAndVehicules" does not exist.', 35, $this->source); })())));
        foreach ($context['_seq'] as $context["_key"] => $context["reservationAndVehicule"]) {
            // line 36
            echo "                                    <tr class=\"inner-box\">
                                         <th scope=\"row\">
                                            <div class=\"event-date\">
                                                ";
            // line 39
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["reservationAndVehicule"], "reservation", [], "any", false, false, false, 39), "etat", [], "any", false, false, false, 39), "html", null, true);
            echo "
                                            </div>
                                        </th>
                                             <td>
                                            <div class=\"event-img\">
                                                <img src=\"";
            // line 44
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["reservationAndVehicule"], "vehicule", [], "any", false, false, false, 44), "img", [], "any", false, false, false, 44), "html", null, true);
            echo "\" alt=\"\" />
                                                
                                            </div>
                                        </td>
                                        <td>
                                            <div class=\"event-wrap\">
                                                <h4>";
            // line 50
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["reservationAndVehicule"], "vehicule", [], "any", false, false, false, 50), "marque", [], "any", false, false, false, 50), "html", null, true);
            echo "  ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["reservationAndVehicule"], "vehicule", [], "any", false, false, false, 50), "modele", [], "any", false, false, false, 50), "html", null, true);
            echo "</h4>
                                                 <h4>";
            // line 51
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["reservationAndVehicule"], "vehicule", [], "any", false, false, false, 51), "lpec", [], "any", false, false, false, 51), "html", null, true);
            echo "</h4>
                                                  <h4>";
            // line 52
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["reservationAndVehicule"], "reservation", [], "any", false, false, false, 52), "somme", [], "any", false, false, false, 52), "html", null, true);
            echo "dt</h4>                                                 
                                                    </div>
                                                    <div class=\"time\">
                                                        <span>";
            // line 55
            ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["reservationAndVehicule"], "reservation", [], "any", false, false, false, 55), "dateDeb", [], "any", false, false, false, 55)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["reservationAndVehicule"], "reservation", [], "any", false, false, false, 55), "dateDeb", [], "any", false, false, false, 55), "Y-m-d"), "html", null, true))) : (print ("")));
            echo " - ";
            ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["reservationAndVehicule"], "reservation", [], "any", false, false, false, 55), "dateFin", [], "any", false, false, false, 55)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["reservationAndVehicule"], "reservation", [], "any", false, false, false, 55), "dateFin", [], "any", false, false, false, 55), "Y-m-d"), "html", null, true))) : (print ("")));
            echo " </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <div class=\"primary-btn\">
                                                <a class=\"btn btn-primary\" href=\"";
            // line 62
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_reservation_annuler", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["reservationAndVehicule"], "reservation", [], "any", false, false, false, 62), "id", [], "any", false, false, false, 62)]), "html", null, true);
            echo "\">Annuler</a>
                                                <a class=\"btn btn-primary\" href=\"";
            // line 63
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_reservation_download", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["reservationAndVehicule"], "reservation", [], "any", false, false, false, 63), "id", [], "any", false, false, false, 63)]), "html", null, true);
            echo "\">Facture</a>
                                            </div>
                                        </td>
                                    </tr>
                                         ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['reservationAndVehicule'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 67
        echo "   
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>    
            </div>
            <!-- /col end-->
        </div>
        <!-- /row end-->
    </div>
</div>
";
        // line 79
        $this->displayBlock('javascripts', $context, $blocks);
        // line 84
        echo twig_include($this->env, $context, "@MercurySeriesFlashy/flashy.html.twig");
        echo "
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 79
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 80
        echo "\t\t\t <script src=\"//code.jquery.com/jquery.js\"></script>
   \t\t\t <script src=\"";
        // line 81
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/mercuryseriesflashy/js/flashy.js"), "html", null, true);
        echo "\"></script>
\t\t\t";
        // line 82
        echo twig_escape_filter($this->env, $this->env->getFunction('encore_entry_script_tags')->getCallable()("app"), "html", null, true);
        echo "
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "front_reservation/mesReservations.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  264 => 82,  260 => 81,  257 => 80,  247 => 79,  235 => 84,  233 => 79,  219 => 67,  208 => 63,  204 => 62,  192 => 55,  186 => 52,  182 => 51,  176 => 50,  167 => 44,  159 => 39,  154 => 36,  150 => 35,  128 => 15,  118 => 14,  106 => 11,  102 => 10,  98 => 9,  93 => 7,  90 => 6,  80 => 5,  61 => 3,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'baseClient.html.twig' %}

{% block title %}Mes Reservations{% endblock %}

\t\t{% block stylesheets %}

\t\t\t{{ encore_entry_link_tags('app') }}
\t\t\t<link href=\"https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600&display=swap\" rel=\"stylesheet\">
   \t\t\t <link rel=\"stylesheet\" href=\"{{ asset('bundles/mercuryseriesflashy/css/flashy.css') }}\">
{{parent()}}
\t<link href=\"{{asset('front/assets/css/mesRes.css')}}\" rel=\"stylesheet\">
\t\t{% endblock %}

{% block body %}

<div class=\"event-schedule-area-two bg-color pad100\">
    <div class=\"container\">
       
        <!-- row end-->
        <div class=\"row\">
            <div class=\"col-lg-12\">
                <div class=\"tab-content\" id=\"myTabContent\">
                    <div class=\"tab-pane fade active show\" id=\"home\" role=\"tabpanel\">
                        <div class=\"table-responsive\">
                            <table class=\"table\">
                                <thead>
                                    <tr>
                                         <th class=\"text-center\" scope=\"col\">Etat</th>
                                        <th scope=\"col\">Vehicule</th>
                                        <th scope=\"col\">Informations</th>
                                        <th class=\"text-center\" scope=\"col\">Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                {% for reservationAndVehicule in reservationsAndVehicules |reverse%}
                                    <tr class=\"inner-box\">
                                         <th scope=\"row\">
                                            <div class=\"event-date\">
                                                {{reservationAndVehicule.reservation.etat}}
                                            </div>
                                        </th>
                                             <td>
                                            <div class=\"event-img\">
                                                <img src=\"{{reservationAndVehicule.vehicule.img }}\" alt=\"\" />
                                                
                                            </div>
                                        </td>
                                        <td>
                                            <div class=\"event-wrap\">
                                                <h4>{{reservationAndVehicule.vehicule.marque}}  {{reservationAndVehicule.vehicule.modele}}</h4>
                                                 <h4>{{reservationAndVehicule.vehicule.lpec}}</h4>
                                                  <h4>{{reservationAndVehicule.reservation.somme}}dt</h4>                                                 
                                                    </div>
                                                    <div class=\"time\">
                                                        <span>{{reservationAndVehicule.reservation.dateDeb ? reservationAndVehicule.reservation.dateDeb|date('Y-m-d') : ''}} - {{reservationAndVehicule.reservation.dateFin ? reservationAndVehicule.reservation.dateFin|date('Y-m-d') : ''}} </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <div class=\"primary-btn\">
                                                <a class=\"btn btn-primary\" href=\"{{ path('app_reservation_annuler', {'id': reservationAndVehicule.reservation.id}) }}\">Annuler</a>
                                                <a class=\"btn btn-primary\" href=\"{{ path('app_reservation_download', {'id': reservationAndVehicule.reservation.id}) }}\">Facture</a>
                                            </div>
                                        </td>
                                    </tr>
                                         {% endfor %}   
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>    
            </div>
            <!-- /col end-->
        </div>
        <!-- /row end-->
    </div>
</div>
{% block javascripts %}
\t\t\t <script src=\"//code.jquery.com/jquery.js\"></script>
   \t\t\t <script src=\"{{ asset('bundles/mercuryseriesflashy/js/flashy.js') }}\"></script>
\t\t\t{{ encore_entry_script_tags('app') }}
{% endblock %}
{{ include('@MercurySeriesFlashy/flashy.html.twig') }}
{% endblock %}



", "front_reservation/mesReservations.html.twig", "C:\\Users\\aymen\\Desktop\\gitprojet\\digidreamers\\templates\\front_reservation\\mesReservations.html.twig");
    }
}
