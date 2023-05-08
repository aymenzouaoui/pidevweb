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

/* validation/show.html.twig */
class __TwigTemplate_64a5b13d72d3b66a481cb04496d3444d extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "validation/show.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "validation/show.html.twig"));

        // line 2
        $this->env->getRuntime("Symfony\\Component\\Form\\FormRenderer")->setTheme((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 2, $this->source); })()), [0 => "bootstrap_5_layout.html.twig"], true);
        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "validation/show.html.twig", 1);
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

        echo "Validation
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
        echo "\t<section class=\"vh-100\" style=\"background-color: #9de2ff;\">
\t\t<div class=\"container py-5 h-100\">
\t\t\t<div class=\"row d-flex justify-content-center align-items-center h-100\">
\t\t\t\t<div class=\"col col-md-9 col-lg-7 col-xl-5\">
\t\t\t\t\t<div class=\"card\" style=\"border-radius: 15px;\">
\t\t\t\t\t\t<div class=\"card-body p-4\">
\t\t\t\t\t\t\t<a class=\"btn btn-light\" href=\"";
        // line 13
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_validation_index");
        echo "\">back to list</a>

\t\t\t\t\t\t\t<a class=\"btn btn-light\" href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_validation_edit", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["validation"]) || array_key_exists("validation", $context) ? $context["validation"] : (function () { throw new RuntimeError('Variable "validation" does not exist.', 15, $this->source); })()), "id", [], "any", false, false, false, 15)]), "html", null, true);
        echo "\">edit</a>
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<div class=\"d-flex text-black\">
\t\t\t\t\t\t\t\t<div class=\"flex-shrink-0\">
\t\t\t\t\t\t\t\t\t<img src=\"";
        // line 19
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 19, $this->source); })()), "image", [], "any", false, false, false, 19), "html", null, true);
        echo "\" style=\"width: 180px; border-radius: 10px;\">
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"flex-grow-1 ms-3\">
\t\t\t\t\t\t\t\t\t<h5 class=\"mb-1\">";
        // line 22
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 22, $this->source); })()), "nom", [], "any", false, false, false, 22), "html", null, true);
        echo "</h5>
\t\t\t\t\t\t\t\t\t<p class=\"mb-2 pb-1\" style=\"color: #2b2a2a;\">";
        // line 23
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 23, $this->source); })()), "prenom", [], "any", false, false, false, 23), "html", null, true);
        echo "</p>
\t\t\t\t\t\t\t\t\t<div class=\"d-flex justify-content-start rounded-3 p-2 mb-2\" style=\"background-color: #efefef;\">
\t\t\t\t\t\t\t\t\t\t<div class=\"image-container\">
\t\t\t\t\t\t\t\t\t\t\t<img style=\"width:100px;height:100px\" src=\"";
        // line 26
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["validation"]) || array_key_exists("validation", $context) ? $context["validation"] : (function () { throw new RuntimeError('Variable "validation" does not exist.', 26, $this->source); })()), "imagea", [], "any", false, false, false, 26), "html", null, true);
        echo "\" alt=\"Validation Image\">
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"image-container\">
\t\t\t\t\t\t\t\t\t\t\t<img style=\"width:100px;height:100px\" src=\"";
        // line 29
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["validation"]) || array_key_exists("validation", $context) ? $context["validation"] : (function () { throw new RuntimeError('Variable "validation" does not exist.', 29, $this->source); })()), "imageb", [], "any", false, false, false, 29), "html", null, true);
        echo "\" alt=\"Validation Image\">
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t\t\t<p class=\"small text-muted mb-1\">Rating</p>
\t\t\t\t\t\t\t\t\t\t\t<p class=\"mb-0\">";
        // line 33
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 33, $this->source); })()), "score", [], "any", false, false, false, 33), "html", null, true);
        echo "</p>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t";
        // line 36
        if (twig_get_attribute($this->env, $this->source, (isset($context["validation"]) || array_key_exists("validation", $context) ? $context["validation"] : (function () { throw new RuntimeError('Variable "validation" does not exist.', 36, $this->source); })()), "valide", [], "any", false, false, false, 36)) {
            // line 37
            echo "\t\t\t\t\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-danger flex-grow-1\">Valider</button>
\t\t\t\t\t\t\t\t\t";
        } else {
            // line 39
            echo "\t\t\t\t\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-success flex-grow-1\">Non valider</button>
\t\t\t\t\t\t\t\t\t";
        }
        // line 41
        echo "\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t";
        // line 42
        echo twig_include($this->env, $context, "validation/_delete_form.html.twig", ["class" => "btn-danger"]);
        echo "

\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</section>


\t
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "validation/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  160 => 42,  157 => 41,  153 => 39,  149 => 37,  147 => 36,  141 => 33,  134 => 29,  128 => 26,  122 => 23,  118 => 22,  112 => 19,  105 => 15,  100 => 13,  92 => 7,  82 => 6,  62 => 3,  51 => 1,  49 => 2,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}
{% form_theme form 'bootstrap_5_layout.html.twig' %}
{% block title %}Validation
{% endblock %}

{% block body %}
\t<section class=\"vh-100\" style=\"background-color: #9de2ff;\">
\t\t<div class=\"container py-5 h-100\">
\t\t\t<div class=\"row d-flex justify-content-center align-items-center h-100\">
\t\t\t\t<div class=\"col col-md-9 col-lg-7 col-xl-5\">
\t\t\t\t\t<div class=\"card\" style=\"border-radius: 15px;\">
\t\t\t\t\t\t<div class=\"card-body p-4\">
\t\t\t\t\t\t\t<a class=\"btn btn-light\" href=\"{{ path('app_validation_index') }}\">back to list</a>

\t\t\t\t\t\t\t<a class=\"btn btn-light\" href=\"{{ path('app_validation_edit', {'id': validation.id}) }}\">edit</a>
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<div class=\"d-flex text-black\">
\t\t\t\t\t\t\t\t<div class=\"flex-shrink-0\">
\t\t\t\t\t\t\t\t\t<img src=\"{{ user.image }}\" style=\"width: 180px; border-radius: 10px;\">
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"flex-grow-1 ms-3\">
\t\t\t\t\t\t\t\t\t<h5 class=\"mb-1\">{{ user.nom}}</h5>
\t\t\t\t\t\t\t\t\t<p class=\"mb-2 pb-1\" style=\"color: #2b2a2a;\">{{ user.prenom}}</p>
\t\t\t\t\t\t\t\t\t<div class=\"d-flex justify-content-start rounded-3 p-2 mb-2\" style=\"background-color: #efefef;\">
\t\t\t\t\t\t\t\t\t\t<div class=\"image-container\">
\t\t\t\t\t\t\t\t\t\t\t<img style=\"width:100px;height:100px\" src=\"{{ validation.imagea }}\" alt=\"Validation Image\">
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"image-container\">
\t\t\t\t\t\t\t\t\t\t\t<img style=\"width:100px;height:100px\" src=\"{{ validation.imageb }}\" alt=\"Validation Image\">
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t\t\t<p class=\"small text-muted mb-1\">Rating</p>
\t\t\t\t\t\t\t\t\t\t\t<p class=\"mb-0\">{{ user.score}}</p>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t{% if validation.valide %}
\t\t\t\t\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-danger flex-grow-1\">Valider</button>
\t\t\t\t\t\t\t\t\t{% else %}
\t\t\t\t\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-success flex-grow-1\">Non valider</button>
\t\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t{{ include('validation/_delete_form.html.twig', {'class': 'btn-danger'}) }}

\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</section>


\t
{% endblock %}
", "validation/show.html.twig", "C:\\Users\\aymen\\Desktop\\gitprojet\\digidreamers\\templates\\validation\\show.html.twig");
    }
}
