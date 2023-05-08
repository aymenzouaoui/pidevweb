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

/* annonces/indexback.html.twig */
class __TwigTemplate_190a61c2926070a462f1303a84ef73ed extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "annonces/indexback.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "annonces/indexback.html.twig"));

        $this->parent = $this->loadTemplate("baseadmin.html.twig", "annonces/indexback.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 5
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Liste des annonce";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 7
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 8
        echo "
\t\t\t";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getFunction('encore_entry_link_tags')->getCallable()("app"), "html", null, true);
        echo "
\t\t\t<link href=\"https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600&display=swap\" rel=\"stylesheet\">
   \t\t\t <link rel=\"stylesheet\" href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/mercuryseriesflashy/css/flashy.css"), "html", null, true);
        echo "\">
";
        // line 12
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
\t<link href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/assets/css/ann.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
\t\t";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 16
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 17
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
                                         <th class=\"text-center\" scope=\"col\">Type</th>
                                          <th scope=\"col\">Ville de depart</th>
                                          <th scope=\"col\">Ville d'arrivée</th>
                                          <th scope=\"col\">Date de depart</th>
                                          <th scope=\"col\">Date d'arrivée</th>
                                          <th scope=\"col\">Description</th>
                                        
                                        <th class=\"text-center\" scope=\"col\">Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                ";
        // line 41
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["annonces"]) || array_key_exists("annonces", $context) ? $context["annonces"] : (function () { throw new RuntimeError('Variable "annonces" does not exist.', 41, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["annonce"]) {
            // line 42
            echo "                                    <tr class=\"inner-box\">
                                         <th scope=\"row\">
                                            <div class=\"event-date\">
                                                ";
            // line 45
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["annonce"], "type", [], "any", false, false, false, 45), "html", null, true);
            echo "
                                            </div>
                                        </th>
                                        <td>
                                          <div class=\"event-wrap\">
                                                 <h4>";
            // line 50
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["annonce"], "villeDep", [], "any", false, false, false, 50), "html", null, true);
            echo "</h4>
                                                            
                                             </div>
                                        </td>
                                        <td>
                                          <div class=\"event-wrap\">
                                        <h4>";
            // line 56
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["annonce"], "villeArr", [], "any", false, false, false, 56), "html", null, true);
            echo "</h4>
                                            </div>
                                        </td>

                                         <td>
                                          <div class=\"event-wrap\">
                                        <h4>";
            // line 62
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["annonce"], "DateDep", [], "any", false, false, false, 62), "html", null, true);
            echo "</h4>
                                            </div>
                                        </td>

                                         <td>
                                          <div class=\"event-wrap\">
                                        <h4>";
            // line 68
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["annonce"], "DateArr", [], "any", false, false, false, 68), "html", null, true);
            echo "</h4>
                                            </div>
                                        </td>
                                        <td>
                                        <div class=\"event-wrap\">
                                                 
                                                 <h4>";
            // line 74
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["annonce"], "description", [], "any", false, false, false, 74), "html", null, true);
            echo "</h4> 
                                         </div>
                                         </td>
                                        <td>
                                            <div class=\"primary-btn\">
                                                <a href=\"";
            // line 79
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_annonces_delete", ["id" => twig_get_attribute($this->env, $this->source, $context["annonce"], "id", [], "any", false, false, false, 79)]), "html", null, true);
            echo "\" class=\"btn btn-danger\">
                                                <i class=\"fa fa-trash\"></i> Supprimer
                                                </a>

                                            </div>
                                        </td>
                                              </tr>
                                             ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['annonce'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 86
        echo "  
                                             
                                </tbody>
                            </table>

                        </div>
                    </div>
                   
                     <div class=\"pagination\">
    ";
        // line 95
        echo $this->extensions['Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension']->render($this->env, (isset($context["annonces"]) || array_key_exists("annonces", $context) ? $context["annonces"] : (function () { throw new RuntimeError('Variable "annonces" does not exist.', 95, $this->source); })()));
        echo "
</div>
                </div>    
            </div>
            <!-- /col end-->
        </div>
        <!-- /row end-->
    </div>
</div>


";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "annonces/indexback.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  239 => 95,  228 => 86,  214 => 79,  206 => 74,  197 => 68,  188 => 62,  179 => 56,  170 => 50,  162 => 45,  157 => 42,  153 => 41,  127 => 17,  117 => 16,  105 => 13,  101 => 12,  97 => 11,  92 => 9,  89 => 8,  79 => 7,  60 => 5,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'baseadmin.html.twig' %}



{% block title %}Liste des annonce{% endblock %}

\t\t{% block stylesheets %}

\t\t\t{{ encore_entry_link_tags('app') }}
\t\t\t<link href=\"https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600&display=swap\" rel=\"stylesheet\">
   \t\t\t <link rel=\"stylesheet\" href=\"{{ asset('bundles/mercuryseriesflashy/css/flashy.css') }}\">
{{parent()}}
\t<link href=\"{{asset('front/assets/css/ann.css')}}\" rel=\"stylesheet\">
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
                                         <th class=\"text-center\" scope=\"col\">Type</th>
                                          <th scope=\"col\">Ville de depart</th>
                                          <th scope=\"col\">Ville d'arrivée</th>
                                          <th scope=\"col\">Date de depart</th>
                                          <th scope=\"col\">Date d'arrivée</th>
                                          <th scope=\"col\">Description</th>
                                        
                                        <th class=\"text-center\" scope=\"col\">Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                {% for annonce in annonces %}
                                    <tr class=\"inner-box\">
                                         <th scope=\"row\">
                                            <div class=\"event-date\">
                                                {{annonce.type}}
                                            </div>
                                        </th>
                                        <td>
                                          <div class=\"event-wrap\">
                                                 <h4>{{annonce.villeDep}}</h4>
                                                            
                                             </div>
                                        </td>
                                        <td>
                                          <div class=\"event-wrap\">
                                        <h4>{{annonce.villeArr}}</h4>
                                            </div>
                                        </td>

                                         <td>
                                          <div class=\"event-wrap\">
                                        <h4>{{annonce.DateDep}}</h4>
                                            </div>
                                        </td>

                                         <td>
                                          <div class=\"event-wrap\">
                                        <h4>{{annonce.DateArr}}</h4>
                                            </div>
                                        </td>
                                        <td>
                                        <div class=\"event-wrap\">
                                                 
                                                 <h4>{{annonce.description}}</h4> 
                                         </div>
                                         </td>
                                        <td>
                                            <div class=\"primary-btn\">
                                                <a href=\"{{ path('app_annonces_delete', {'id': annonce.id}) }}\" class=\"btn btn-danger\">
                                                <i class=\"fa fa-trash\"></i> Supprimer
                                                </a>

                                            </div>
                                        </td>
                                              </tr>
                                             {% endfor %}  
                                             
                                </tbody>
                            </table>

                        </div>
                    </div>
                   
                     <div class=\"pagination\">
    {{ knp_pagination_render(annonces) }}
</div>
                </div>    
            </div>
            <!-- /col end-->
        </div>
        <!-- /row end-->
    </div>
</div>


{% endblock %}", "annonces/indexback.html.twig", "C:\\Users\\aymen\\Desktop\\gitprojet\\digidreamers\\templates\\annonces\\indexback.html.twig");
    }
}
