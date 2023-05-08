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

/* front_reservation/showveh.html.twig */
class __TwigTemplate_e21a0553422b0dc81098370b18b947bb extends Template
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
        return "base2.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "front_reservation/showveh.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "front_reservation/showveh.html.twig"));

        $this->parent = $this->loadTemplate("base2.html.twig", "front_reservation/showveh.html.twig", 1);
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

        echo "Hello InterfaceReservationController!";
        
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
        echo twig_escape_filter($this->env, $this->env->getFunction('encore_entry_link_tags')->getCallable()("app"), "html", null, true);
        echo "
\t\t\t<link href=\"https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600&display=swap\" rel=\"stylesheet\">
   \t\t\t <link rel=\"stylesheet\" href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/mercuryseriesflashy/css/flashy.css"), "html", null, true);
        echo "\">
";
        // line 8
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
\t<link href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/assets/css/mesRes.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
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

    // line 17
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 18
        echo "    <div class=\"breadcrumbs d-flex align-items-center\" style=\"background-image: url('assets/img/contact-header.jpg');\">
      <div class=\"container position-relative d-flex flex-column align-items-center\">

        <h2>Location des vehicules</h2>
        <ol>
          <li><a href=\"index.html\">Accueil</a></li>
          <li>Location des vehicules</li>
        </ol>

      </div>
    </div><!-- End Breadcrumbs -->
      
    <section id=\"portfolio-details\" class=\"portfolio-details\">
  <div class=\"container\" data-aos=\"fade-up\">
    <div class=\"row gy-4\" style=\"height: 400px;\">
      <div class=\"col-lg-4\" style=\"height: 100%;\">
        <div style=\"height: 100%;\">
          <div class=\"swiper-wrapper align-items-center\" style=\"height: 100%;\">
            <div class=\"swiper-slide\" style=\"height: 100%;\">
              <img style=\"width:100%;height:100%;\" src=\"";
        // line 37
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["vehicule"]) || array_key_exists("vehicule", $context) ? $context["vehicule"] : (function () { throw new RuntimeError('Variable "vehicule" does not exist.', 37, $this->source); })()), "img", [], "any", false, false, false, 37), "html", null, true);
        echo "\">
            </div>
          </div>
          <div class=\"swiper-pagination\"></div>
        </div>
      </div>
                
      <div class=\"col-lg-4\" style=\"height: 100%;\">
        <div class=\"portfolio-info\" style=\"height: 100%;\">
          <div class=\"d-flex justify-content-between align-items-center\">
            <h3>Detaille vehicule</h3>
          </div>
          <hr>
          <ul>
            <li><strong>Marque</strong>: ";
        // line 51
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["vehicule"]) || array_key_exists("vehicule", $context) ? $context["vehicule"] : (function () { throw new RuntimeError('Variable "vehicule" does not exist.', 51, $this->source); })()), "marque", [], "any", false, false, false, 51), "html", null, true);
        echo "</li>
            <li><strong>Modele</strong>: ";
        // line 52
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["vehicule"]) || array_key_exists("vehicule", $context) ? $context["vehicule"] : (function () { throw new RuntimeError('Variable "vehicule" does not exist.', 52, $this->source); })()), "modele", [], "any", false, false, false, 52), "html", null, true);
        echo "</li>
            <li><strong>Cheveaux</strong>: ";
        // line 53
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["vehicule"]) || array_key_exists("vehicule", $context) ? $context["vehicule"] : (function () { throw new RuntimeError('Variable "vehicule" does not exist.', 53, $this->source); })()), "chevaux", [], "any", false, false, false, 53), "html", null, true);
        echo "</li>
            <li><strong>Prix</strong>: ";
        // line 54
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["vehicule"]) || array_key_exists("vehicule", $context) ? $context["vehicule"] : (function () { throw new RuntimeError('Variable "vehicule" does not exist.', 54, $this->source); })()), "prix", [], "any", false, false, false, 54), "html", null, true);
        echo "dt /Jour</li>
          </ul>
        </div>
      </div>

      <div class=\"col-lg-4\" style=\"height: 100%;\">
        <div class=\"portfolio-info\" style=\"height: 100%;\">
          <div class=\"d-flex justify-content-between align-items-center\">
            <h3>Réserver</h3>
            <h3 class=\"js-prix\" style=\"font-weight: bold; color: green\" data-prix=\"";
        // line 63
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["vehicule"]) || array_key_exists("vehicule", $context) ? $context["vehicule"] : (function () { throw new RuntimeError('Variable "vehicule" does not exist.', 63, $this->source); })()), "prix", [], "any", false, false, false, 63), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["vehicule"]) || array_key_exists("vehicule", $context) ? $context["vehicule"] : (function () { throw new RuntimeError('Variable "vehicule" does not exist.', 63, $this->source); })()), "prix", [], "any", false, false, false, 63), "html", null, true);
        echo "dt</h3>
          </div>
          <hr>

    ";
        // line 67
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 67, $this->source); })()), 'form_start', ["attr" => ["id" => "reservation-form", "novalidate" => "novalidate"]]);
        echo "
";
        // line 68
        $this->env->getRuntime("Symfony\\Component\\Form\\FormRenderer")->setTheme((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 68, $this->source); })()), [0 => "bootstrap_5_layout.html.twig"], true);
        // line 69
        echo "
    <div class=\"mb-3\">
        ";
        // line 71
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 71, $this->source); })()), "date_deb", [], "any", false, false, false, 71), 'label');
        echo "
        ";
        // line 72
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 72, $this->source); })()), "date_deb", [], "any", false, false, false, 72), 'widget', ["attr" => ["type" => "date"]]);
        echo "
        ";
        // line 73
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 73, $this->source); })()), "date_deb", [], "any", false, false, false, 73), 'errors');
        echo "
    </div>

    <div class=\"mb-3\">
        ";
        // line 77
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 77, $this->source); })()), "date_fin", [], "any", false, false, false, 77), 'label');
        echo "
        ";
        // line 78
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 78, $this->source); })()), "date_fin", [], "any", false, false, false, 78), 'widget', ["attr" => ["type" => "date"]]);
        echo "
        ";
        // line 79
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 79, $this->source); })()), "date_fin", [], "any", false, false, false, 79), 'errors');
        echo "

    </div>

    ";
        // line 83
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 83, $this->source); })()), "Reserver", [], "any", false, false, false, 83), 'widget', ["label" => "Réserver", "attr" => ["class" => "btn btn-primary"]]);
        echo "

    ";
        // line 85
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 85, $this->source); })()), 'form_end');
        echo "       </div>
      </div>
    </div>
  </div>
<br>
<br>
<div id=\"calendrier\"></div> 

</section><!-- End Portfolio Details Section -->
<div style=\"text-align: center;\">
  <a class=\"btn btn-primary\" href=\"";
        // line 95
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_reservation_index");
        echo "\" style=\"margin-left: 50%;\">Retourner</a>
</div>
 
<br>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 101
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 102
        echo "\t\t";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
        \t <script src=\"//code.jquery.com/jquery.js\"></script>
   \t\t\t <script src=\"";
        // line 104
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/mercuryseriesflashy/js/flashy.js"), "html", null, true);
        echo "\"></script>
\t\t\t";
        // line 105
        echo twig_escape_filter($this->env, $this->env->getFunction('encore_entry_script_tags')->getCallable()("app"), "html", null, true);
        echo "
<script>
    window.onload = () => {
       const ReservationForm = document.querySelector(\"#reservation-form\"); 
    const dateDebInput = document.querySelector(\".reservation-datedeb\");
    const dateFinInput = document.querySelector(\".reservation-datefin\");

    const updatePrixElement = () => {
        const dateDebValue = dateDebInput.value;
        const dateFinValue = dateFinInput.value;

        if (dateDebValue && dateFinValue) {
            const dateDeb = new Date(dateDebValue);
            const dateFin = new Date(dateFinValue);

            const diffTime = Math.abs(dateFin - dateDeb);
            const diffDays = Math.ceil(diffTime / (1000 * 60 * 60 * 24));

            var prixElement = document.querySelector('.js-prix');
            const prix = prixElement.getAttribute('data-prix');
            console.log(\"ff\");
            if(dateDebValue == dateFinValue)
                 prixElement.textContent = parseFloat(prix) + \"dt\";
            else
                prixElement.textContent = parseFloat(prix) * (diffDays+1) + \"dt\";
        }
    }

    dateFinInput.addEventListener(\"change\", updatePrixElement);

    dateDebInput.addEventListener(\"change\", updatePrixElement);
       
       
       
        let calendarElt = document.querySelector(\"#calendrier\")
        let calendar = new FullCalendar.Calendar(calendarElt, {
            initialView: 'dayGridMonth',
            locale: 'fr',
            timeZone: 'Europe/Paris',
            headerToolbar: {
            },
            events: ";
        // line 146
        echo (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 146, $this->source); })());
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
        // line 170
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
";
        // line 171
        echo twig_include($this->env, $context, "@MercurySeriesFlashy/flashy.html.twig");
        echo "
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "front_reservation/showveh.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  370 => 171,  366 => 170,  339 => 146,  295 => 105,  291 => 104,  285 => 102,  275 => 101,  260 => 95,  247 => 85,  242 => 83,  235 => 79,  231 => 78,  227 => 77,  220 => 73,  216 => 72,  212 => 71,  208 => 69,  206 => 68,  202 => 67,  193 => 63,  181 => 54,  177 => 53,  173 => 52,  169 => 51,  152 => 37,  131 => 18,  121 => 17,  103 => 9,  99 => 8,  95 => 7,  90 => 5,  80 => 4,  61 => 3,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base2.html.twig' %}

{% block title %}Hello InterfaceReservationController!{% endblock %}
{% block stylesheets %}
{{ encore_entry_link_tags('app') }}
\t\t\t<link href=\"https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600&display=swap\" rel=\"stylesheet\">
   \t\t\t <link rel=\"stylesheet\" href=\"{{ asset('bundles/mercuryseriesflashy/css/flashy.css') }}\">
{{parent()}}
\t<link href=\"{{asset('front/assets/css/mesRes.css')}}\" rel=\"stylesheet\">
    <style>
        #calendrier{
            width: 50%;
            margin: auto;
        }
    </style>
{% endblock %}
{% block body %}
    <div class=\"breadcrumbs d-flex align-items-center\" style=\"background-image: url('assets/img/contact-header.jpg');\">
      <div class=\"container position-relative d-flex flex-column align-items-center\">

        <h2>Location des vehicules</h2>
        <ol>
          <li><a href=\"index.html\">Accueil</a></li>
          <li>Location des vehicules</li>
        </ol>

      </div>
    </div><!-- End Breadcrumbs -->
      
    <section id=\"portfolio-details\" class=\"portfolio-details\">
  <div class=\"container\" data-aos=\"fade-up\">
    <div class=\"row gy-4\" style=\"height: 400px;\">
      <div class=\"col-lg-4\" style=\"height: 100%;\">
        <div style=\"height: 100%;\">
          <div class=\"swiper-wrapper align-items-center\" style=\"height: 100%;\">
            <div class=\"swiper-slide\" style=\"height: 100%;\">
              <img style=\"width:100%;height:100%;\" src=\"{{ vehicule.img }}\">
            </div>
          </div>
          <div class=\"swiper-pagination\"></div>
        </div>
      </div>
                
      <div class=\"col-lg-4\" style=\"height: 100%;\">
        <div class=\"portfolio-info\" style=\"height: 100%;\">
          <div class=\"d-flex justify-content-between align-items-center\">
            <h3>Detaille vehicule</h3>
          </div>
          <hr>
          <ul>
            <li><strong>Marque</strong>: {{vehicule.marque}}</li>
            <li><strong>Modele</strong>: {{vehicule.modele}}</li>
            <li><strong>Cheveaux</strong>: {{vehicule.chevaux}}</li>
            <li><strong>Prix</strong>: {{vehicule.prix}}dt /Jour</li>
          </ul>
        </div>
      </div>

      <div class=\"col-lg-4\" style=\"height: 100%;\">
        <div class=\"portfolio-info\" style=\"height: 100%;\">
          <div class=\"d-flex justify-content-between align-items-center\">
            <h3>Réserver</h3>
            <h3 class=\"js-prix\" style=\"font-weight: bold; color: green\" data-prix=\"{{ vehicule.prix }}\">{{vehicule.prix}}dt</h3>
          </div>
          <hr>

    {{ form_start(form, {'attr': {'id': 'reservation-form','novalidate': 'novalidate'}}) }}
{% form_theme form 'bootstrap_5_layout.html.twig' %}

    <div class=\"mb-3\">
        {{ form_label(form.date_deb) }}
        {{ form_widget(form.date_deb, {'attr': {'type': 'date'}}) }}
        {{ form_errors(form.date_deb) }}
    </div>

    <div class=\"mb-3\">
        {{ form_label(form.date_fin) }}
        {{ form_widget(form.date_fin, {'attr': {'type': 'date'}}) }}
        {{ form_errors(form.date_fin) }}

    </div>

    {{ form_widget(form.Reserver, { 'label': 'Réserver', 'attr': {'class': 'btn btn-primary'} }) }}

    {{ form_end(form) }}       </div>
      </div>
    </div>
  </div>
<br>
<br>
<div id=\"calendrier\"></div> 

</section><!-- End Portfolio Details Section -->
<div style=\"text-align: center;\">
  <a class=\"btn btn-primary\" href=\"{{ path('app_reservation_index') }}\" style=\"margin-left: 50%;\">Retourner</a>
</div>
 
<br>
{% endblock %}

{% block javascripts %}
\t\t{{parent()}}
        \t <script src=\"//code.jquery.com/jquery.js\"></script>
   \t\t\t <script src=\"{{ asset('bundles/mercuryseriesflashy/js/flashy.js') }}\"></script>
\t\t\t{{ encore_entry_script_tags('app') }}
<script>
    window.onload = () => {
       const ReservationForm = document.querySelector(\"#reservation-form\"); 
    const dateDebInput = document.querySelector(\".reservation-datedeb\");
    const dateFinInput = document.querySelector(\".reservation-datefin\");

    const updatePrixElement = () => {
        const dateDebValue = dateDebInput.value;
        const dateFinValue = dateFinInput.value;

        if (dateDebValue && dateFinValue) {
            const dateDeb = new Date(dateDebValue);
            const dateFin = new Date(dateFinValue);

            const diffTime = Math.abs(dateFin - dateDeb);
            const diffDays = Math.ceil(diffTime / (1000 * 60 * 60 * 24));

            var prixElement = document.querySelector('.js-prix');
            const prix = prixElement.getAttribute('data-prix');
            console.log(\"ff\");
            if(dateDebValue == dateFinValue)
                 prixElement.textContent = parseFloat(prix) + \"dt\";
            else
                prixElement.textContent = parseFloat(prix) * (diffDays+1) + \"dt\";
        }
    }

    dateFinInput.addEventListener(\"change\", updatePrixElement);

    dateDebInput.addEventListener(\"change\", updatePrixElement);
       
       
       
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
{{ include('@MercurySeriesFlashy/flashy.html.twig') }}
{% endblock %}", "front_reservation/showveh.html.twig", "C:\\Users\\aymen\\Desktop\\gitprojet\\digidreamers\\templates\\front_reservation\\showveh.html.twig");
    }
}
