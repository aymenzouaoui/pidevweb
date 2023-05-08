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

/* reservation/index.html.twig */
class __TwigTemplate_8515a481370b4d94c662b74342752edf extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "reservation/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "reservation/index.html.twig"));

        $this->parent = $this->loadTemplate("baseadmin.html.twig", "reservation/index.html.twig", 1);
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

        echo "Reservations";
        
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
        echo "<h1>Liste des locations</h1>

    <table class=\"table\">
        <thead>
            <tr>
                <th>Etat</th>
                <th>Client</th>
                <th>Vehicule</th>
                <th>Informations</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
         ";
        // line 28
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_reverse_filter($this->env, (isset($context["reservationsAndVehicules"]) || array_key_exists("reservationsAndVehicules", $context) ? $context["reservationsAndVehicules"] : (function () { throw new RuntimeError('Variable "reservationsAndVehicules" does not exist.', 28, $this->source); })())));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["reservationAndVehicule"]) {
            // line 29
            echo "            <tr>
                <td> ";
            // line 30
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["reservationAndVehicule"], "reservation", [], "any", false, false, false, 30), "etat", [], "any", false, false, false, 30), "html", null, true);
            echo "</td>
                <td>
                                <a href=\"";
            // line 32
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_user_showp", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["reservationAndVehicule"], "user", [], "any", false, false, false, 32), "id", [], "any", false, false, false, 32)]), "html", null, true);
            echo "\">
                <img style=\"width:75px;height:75px\" src=\"";
            // line 33
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["reservationAndVehicule"], "user", [], "any", false, false, false, 33), "image", [], "any", false, false, false, 33), "html", null, true);
            echo "\" alt=\"\" />
                </a>
                 </td>
                <td>
                <a href=\"";
            // line 37
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_vehicule_show", ["idV" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["reservationAndVehicule"], "vehicule", [], "any", false, false, false, 37), "idV", [], "any", false, false, false, 37)]), "html", null, true);
            echo "\">
                <img  style=\"width:75px;height:75px\"src=\"";
            // line 38
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["reservationAndVehicule"], "vehicule", [], "any", false, false, false, 38), "img", [], "any", false, false, false, 38), "html", null, true);
            echo "\" alt=\"\" />
                </a>   
                </td>
               <td>
                                            <div class=\"event-wrap\">
                                                <h4>";
            // line 43
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["reservationAndVehicule"], "vehicule", [], "any", false, false, false, 43), "marque", [], "any", false, false, false, 43), "html", null, true);
            echo "  ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["reservationAndVehicule"], "vehicule", [], "any", false, false, false, 43), "modele", [], "any", false, false, false, 43), "html", null, true);
            echo "</h4>
                                                 <h4>";
            // line 44
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["reservationAndVehicule"], "vehicule", [], "any", false, false, false, 44), "lpec", [], "any", false, false, false, 44), "html", null, true);
            echo "</h4>
                                                  <h4>";
            // line 45
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["reservationAndVehicule"], "reservation", [], "any", false, false, false, 45), "somme", [], "any", false, false, false, 45), "html", null, true);
            echo "dt</h4>                                                 
                                                    </div>
                                                    <div class=\"time\">
                                                        <span>";
            // line 48
            ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["reservationAndVehicule"], "reservation", [], "any", false, false, false, 48), "dateDeb", [], "any", false, false, false, 48)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["reservationAndVehicule"], "reservation", [], "any", false, false, false, 48), "dateDeb", [], "any", false, false, false, 48), "Y-m-d"), "html", null, true))) : (print ("")));
            echo " - ";
            ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["reservationAndVehicule"], "reservation", [], "any", false, false, false, 48), "dateFin", [], "any", false, false, false, 48)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["reservationAndVehicule"], "reservation", [], "any", false, false, false, 48), "dateFin", [], "any", false, false, false, 48), "Y-m-d"), "html", null, true))) : (print ("")));
            echo " </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                        <td>
                                            <div class=\"primary-btn\">
                                                <a class=\"btn btn-primary\" href=\"";
            // line 55
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_reservation_confirme", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["reservationAndVehicule"], "reservation", [], "any", false, false, false, 55), "id", [], "any", false, false, false, 55)]), "html", null, true);
            echo "\">Confirmer</a>
                                                <a class=\"btn btn-primary\" href=\"";
            // line 56
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_reservation_terminer", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["reservationAndVehicule"], "reservation", [], "any", false, false, false, 56), "id", [], "any", false, false, false, 56)]), "html", null, true);
            echo "\">Terminer</a>
                                                <a class=\"btn btn-primary\" href=\"";
            // line 57
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_reservation_download", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["reservationAndVehicule"], "reservation", [], "any", false, false, false, 57), "id", [], "any", false, false, false, 57)]), "html", null, true);
            echo "\">Facture</a>
                                            
                                            </div>
          </td>
            </tr>
        ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 63
            echo "            <tr>
                <td colspan=\"12\">no records found</td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['reservationAndVehicule'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 67
        echo "          ";
        echo $this->extensions['Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension']->render($this->env, (isset($context["reservationsAndVehicules"]) || array_key_exists("reservationsAndVehicules", $context) ? $context["reservationsAndVehicules"] : (function () { throw new RuntimeError('Variable "reservationsAndVehicules" does not exist.', 67, $this->source); })()));
        echo " 

        </tbody>
    </table>


";
        // line 73
        $this->displayBlock('javascripts', $context, $blocks);
        // line 79
        echo twig_include($this->env, $context, "@MercurySeriesFlashy/flashy.html.twig");
        echo "
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 73
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 74
        echo "\t\t";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
        \t <script src=\"//code.jquery.com/jquery.js\"></script>
   \t\t\t <script src=\"";
        // line 76
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/mercuryseriesflashy/js/flashy.js"), "html", null, true);
        echo "\"></script>
\t\t\t";
        // line 77
        echo twig_escape_filter($this->env, $this->env->getFunction('encore_entry_script_tags')->getCallable()("app"), "html", null, true);
        echo "
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "reservation/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  279 => 77,  275 => 76,  269 => 74,  259 => 73,  247 => 79,  245 => 73,  235 => 67,  226 => 63,  215 => 57,  211 => 56,  207 => 55,  195 => 48,  189 => 45,  185 => 44,  179 => 43,  171 => 38,  167 => 37,  160 => 33,  156 => 32,  151 => 30,  148 => 29,  143 => 28,  128 => 15,  118 => 14,  106 => 11,  102 => 10,  98 => 9,  93 => 7,  90 => 6,  80 => 5,  61 => 3,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'baseadmin.html.twig' %}

{% block title %}Reservations{% endblock %}

\t\t{% block stylesheets %}

\t\t\t{{ encore_entry_link_tags('app') }}
\t\t\t<link href=\"https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600&display=swap\" rel=\"stylesheet\">
   \t\t\t <link rel=\"stylesheet\" href=\"{{ asset('bundles/mercuryseriesflashy/css/flashy.css') }}\">
{{parent()}}
\t<link href=\"{{asset('front/assets/css/mesRes.css')}}\" rel=\"stylesheet\">
\t\t{% endblock %}

{% block body %}
<h1>Liste des locations</h1>

    <table class=\"table\">
        <thead>
            <tr>
                <th>Etat</th>
                <th>Client</th>
                <th>Vehicule</th>
                <th>Informations</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
         {% for reservationAndVehicule in reservationsAndVehicules |reverse%}
            <tr>
                <td> {{reservationAndVehicule.reservation.etat}}</td>
                <td>
                                <a href=\"{{ path('app_user_showp', {'id': reservationAndVehicule.user.id}) }}\">
                <img style=\"width:75px;height:75px\" src=\"{{reservationAndVehicule.user.image }}\" alt=\"\" />
                </a>
                 </td>
                <td>
                <a href=\"{{ path('app_vehicule_show', {'idV': reservationAndVehicule.vehicule.idV}) }}\">
                <img  style=\"width:75px;height:75px\"src=\"{{reservationAndVehicule.vehicule.img }}\" alt=\"\" />
                </a>   
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
                                                <a class=\"btn btn-primary\" href=\"{{ path('app_reservation_confirme', {'id': reservationAndVehicule.reservation.id}) }}\">Confirmer</a>
                                                <a class=\"btn btn-primary\" href=\"{{ path('app_reservation_terminer', {'id': reservationAndVehicule.reservation.id}) }}\">Terminer</a>
                                                <a class=\"btn btn-primary\" href=\"{{ path('app_reservation_download', {'id': reservationAndVehicule.reservation.id}) }}\">Facture</a>
                                            
                                            </div>
          </td>
            </tr>
        {% else %}
            <tr>
                <td colspan=\"12\">no records found</td>
            </tr>
        {% endfor %}
          {{ knp_pagination_render(reservationsAndVehicules) }} 

        </tbody>
    </table>


{% block javascripts %}
\t\t{{parent()}}
        \t <script src=\"//code.jquery.com/jquery.js\"></script>
   \t\t\t <script src=\"{{ asset('bundles/mercuryseriesflashy/js/flashy.js') }}\"></script>
\t\t\t{{ encore_entry_script_tags('app') }}
{% endblock %}
{{ include('@MercurySeriesFlashy/flashy.html.twig') }}
{% endblock %}



", "reservation/index.html.twig", "C:\\Users\\aymen\\Desktop\\gitprojet\\digidreamers\\templates\\reservation\\index.html.twig");
    }
}
