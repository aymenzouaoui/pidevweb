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

/* admin/show.html.twig */
class __TwigTemplate_36d4c61ba514e97f11439b69ef1a8f7c extends Template
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
        // line 88
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/show.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/show.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "admin/show.html.twig", 88);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 90
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "User
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 92
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 93
        echo "\t";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
\t<link href=\"";
        // line 94
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/assets/css/profiluser.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">

";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 97
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 98
        echo "\t<div class=\"container\">
\t\t<div
\t\t\tclass=\"main-body\">
\t\t\t";
        // line 111
        echo "\t\t\t<a class=\"btn btn-dark\" href=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_user_index");
        echo "\">back to list</a>


\t\t\t<div class=\"row gutters-sm\">

\t\t\t\t<div class=\"col-md-4 mb-3\">
\t\t\t\t\t<div class=\"card\">
\t\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t\t<div class=\"d-flex flex-column align-items-center text-center\">
\t\t\t\t\t\t\t\t<img src=\"";
        // line 120
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 120, $this->source); })()), "image", [], "any", false, false, false, 120), "html", null, true);
        echo "\" alt=\"Admin\" class=\"rounded-circle p-1 bg-primary\" width=\"180\" height=\"180\">
\t\t\t\t\t\t\t\t<div class=\"mt-3\">
\t\t\t\t\t\t\t\t\t<h4>";
        // line 122
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 122, $this->source); })()), "score", [], "any", false, false, false, 122), "html", null, true);
        echo "</h4>
\t\t\t\t\t\t\t\t\t<p class=\"text-secondary mb-1\">
\t\t\t\t\t\t\t\t\t\t";
        // line 124
        if (twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "roles", [], "any", true, true, false, 124)) {
            // line 125
            echo "\t\t\t\t\t\t\t\t\t\t\t<p class=\"m-0\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 125, $this->source); })()), "roles", [], "any", false, false, false, 125), 0, [], "array", false, false, false, 125), "html", null, true);
            echo "</p>
\t\t\t\t\t\t\t\t\t\t";
        }
        // line 127
        echo "\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t

\t\t\t\t\t\t\t\t\t<a href=\"";
        // line 130
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_message_new", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 130, $this->source); })()), "id", [], "any", false, false, false, 130)]), "html", null, true);
        echo "\" class=\"btn btn-outline-primary\">Message</a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"card mt-3\">
\t\t\t\t\t\t<ul
\t\t\t\t\t\t\tclass=\"list-group list-group-flush\">";
        // line 157
        echo "\t\t\t\t\t\t</ul>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-md-8\">
\t\t\t\t\t<div class=\"card mb-3\">
\t\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t<div class=\"col-sm-3\">
\t\t\t\t\t\t\t\t\t<h6 class=\"mb-0\">Full Name</h6>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"col-sm-9 text-secondary\">
\t\t\t\t\t\t\t\t\t";
        // line 168
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 168, $this->source); })()), "nom", [], "any", false, false, false, 168), "html", null, true);
        echo "
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<hr>
\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t<div class=\"col-sm-3\">
\t\t\t\t\t\t\t\t\t<h6 class=\"mb-0\">Email</h6>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"col-sm-9 text-secondary\">
\t\t\t\t\t\t\t\t\t";
        // line 177
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 177, $this->source); })()), "email", [], "any", false, false, false, 177), "html", null, true);
        echo "
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<hr>
\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t<div class=\"col-sm-3\">
\t\t\t\t\t\t\t\t\t<h6 class=\"mb-0\">Phone</h6>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"col-sm-9 text-secondary\">
\t\t\t\t\t\t\t\t\t";
        // line 186
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 186, $this->source); })()), "numtel", [], "any", false, false, false, 186), "html", null, true);
        echo "
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<hr>
\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t<div class=\"col-sm-3\">
\t\t\t\t\t\t\t\t\t<h6 class=\"mb-0\">Adress</h6>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"col-sm-9 text-secondary\">
\t\t\t\t\t\t\t\t\t";
        // line 195
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 195, $this->source); })()), "adress", [], "any", false, false, false, 195), "html", null, true);
        echo "
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<hr>
\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t<div class=\"col-sm-3\">
\t\t\t\t\t\t\t\t\t<h6 class=\"mb-0\">Cin</h6>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"col-sm-9 text-secondary\">
\t\t\t\t\t\t\t\t\t";
        // line 204
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 204, $this->source); })()), "cin", [], "any", false, false, false, 204), "html", null, true);
        echo "
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<hr>
\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t";
        // line 213
        echo "\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"row gutters-sm\">
\t\t\t\t\t\t<div class=\"col-sm-6 mb-3\">
\t\t\t\t\t\t\t<div class=\"card h-100\">
\t\t\t\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t\t\t\t<h6 class=\"d-flex align-items-center mb-3\">
\t\t\t\t\t\t\t\t\t\t<i class=\"material-icons text-info mr-2\">Mes Colis</i>
\t\t\t\t\t\t\t\t\t</h6>
\t\t\t\t\t\t\t\t\t<small></small>
\t\t\t\t\t\t\t\t\t<div class=\"progress mb-3\" style=\"height: 5px\">
\t\t\t\t\t\t\t\t\t\t<div class=\"progress-bar bg-primary\" role=\"progressbar\" style=\"width: 80%\" aria-valuenow=\"80\" aria-valuemin=\"0\" aria-valuemax=\"100\"></div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<small></small>
\t\t\t\t\t\t\t\t\t<div class=\"progress mb-3\" style=\"height: 5px\">
\t\t\t\t\t\t\t\t\t\t<div class=\"progress-bar bg-primary\" role=\"progressbar\" style=\"width: 72%\" aria-valuenow=\"72\" aria-valuemin=\"0\" aria-valuemax=\"100\"></div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<small></small>
\t\t\t\t\t\t\t\t\t<div class=\"progress mb-3\" style=\"height: 5px\">
\t\t\t\t\t\t\t\t\t\t<div class=\"progress-bar bg-primary\" role=\"progressbar\" style=\"width: 89%\" aria-valuenow=\"89\" aria-valuemin=\"0\" aria-valuemax=\"100\"></div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<small></small>
\t\t\t\t\t\t\t\t\t<div class=\"progress mb-3\" style=\"height: 5px\">
\t\t\t\t\t\t\t\t\t\t<div class=\"progress-bar bg-primary\" role=\"progressbar\" style=\"width: 55%\" aria-valuenow=\"55\" aria-valuemin=\"0\" aria-valuemax=\"100\"></div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<small></small>
\t\t\t\t\t\t\t\t\t<div class=\"progress mb-3\" style=\"height: 5px\">
\t\t\t\t\t\t\t\t\t\t<div class=\"progress-bar bg-primary\" role=\"progressbar\" style=\"width: 66%\" aria-valuenow=\"66\" aria-valuemin=\"0\" aria-valuemax=\"100\"></div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-sm-6 mb-3\">
\t\t\t\t\t\t\t<div class=\"card h-100\">
\t\t\t\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t\t\t\t<h6 class=\"d-flex align-items-center mb-3\">
\t\t\t\t\t\t\t\t\t\t<i class=\"material-icons text-info mr-2\">Mes Annonces</i>
\t\t\t\t\t\t\t\t\t</h6>
\t\t\t\t\t\t\t\t\t<small></small>
\t\t\t\t\t\t\t\t\t<div class=\"progress mb-3\" style=\"height: 5px\">
\t\t\t\t\t\t\t\t\t\t<div class=\"progress-bar bg-primary\" role=\"progressbar\" style=\"width: 80%\" aria-valuenow=\"80\" aria-valuemin=\"0\" aria-valuemax=\"100\"></div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<small></small>
\t\t\t\t\t\t\t\t\t<div class=\"progress mb-3\" style=\"height: 5px\">
\t\t\t\t\t\t\t\t\t\t<div class=\"progress-bar bg-primary\" role=\"progressbar\" style=\"width: 72%\" aria-valuenow=\"72\" aria-valuemin=\"0\" aria-valuemax=\"100\"></div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<small></small>
\t\t\t\t\t\t\t\t\t<div class=\"progress mb-3\" style=\"height: 5px\">
\t\t\t\t\t\t\t\t\t\t<div class=\"progress-bar bg-primary\" role=\"progressbar\" style=\"width: 89%\" aria-valuenow=\"89\" aria-valuemin=\"0\" aria-valuemax=\"100\"></div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<small></small>
\t\t\t\t\t\t\t\t\t<div class=\"progress mb-3\" style=\"height: 5px\">
\t\t\t\t\t\t\t\t\t\t<div class=\"progress-bar bg-primary\" role=\"progressbar\" style=\"width: 55%\" aria-valuenow=\"55\" aria-valuemin=\"0\" aria-valuemax=\"100\"></div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<small></small>
\t\t\t\t\t\t\t\t\t<div class=\"progress mb-3\" style=\"height: 5px\">
\t\t\t\t\t\t\t\t\t\t<div class=\"progress-bar bg-primary\" role=\"progressbar\" style=\"width: 66%\" aria-valuenow=\"66\" aria-valuemin=\"0\" aria-valuemax=\"100\"></div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>


\t\t\t\t</div>
\t\t\t</div>

\t\t</div>
\t</div>


";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "admin/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  238 => 213,  230 => 204,  218 => 195,  206 => 186,  194 => 177,  182 => 168,  169 => 157,  159 => 130,  154 => 127,  148 => 125,  146 => 124,  141 => 122,  136 => 120,  123 => 111,  118 => 98,  108 => 97,  95 => 94,  90 => 93,  80 => 92,  60 => 90,  37 => 88,);
    }

    public function getSourceContext()
    {
        return new Source("{# {% extends 'base.html.twig' %}

{% block title %}User{% endblock %}

{% block body %}
    <h1>User</h1>

    <table class=\"table\">
        <tbody>
            <tr>
                <th>Id</th>
                <td>{{ user.id }}</td>
            </tr>
            <tr>
                <th>Email</th>
                <td>{{ user.email }}</td>
            </tr>
            <tr>
                <th>Roles</th>
                <td>{{ user.roles ? user.roles|json_encode : '' }}</td>
            </tr>
            <tr>
                <th>Password</th>
                <td>{{ user.password }}</td>
            </tr>
            <tr>
                <th>Nom</th>
                <td>{{ user.nom }}</td>
            </tr>
            <tr>
                <th>Prenom</th>
                <td>{{ user.prenom }}</td>
            </tr>
            <tr>
                <th>Adress</th>
                <td>{{ user.adress }}</td>
            </tr>
            <tr>
                <th>Cin</th>
                <td>{{ user.cin }}</td>
            </tr>
            <tr>
                <th>Date_naissance</th>
                <td>{{ user.dateNaissance ? user.dateNaissance|date('Y-m-d') : '' }}</td>
            </tr>
            <tr>
                <th>Date_creation_c</th>
                <td>{{ user.dateCreationC ? user.dateCreationC|date('Y-m-d') : '' }}</td>
            </tr>
            <tr>
                <th>Status</th>
                <td>{{ user.status ? 'Yes' : 'No' }}</td>
            </tr>
            <tr>
                <th>Token</th>
                <td>{{ user.token }}</td>
            </tr>
            <tr>
                <th>Score</th>
                <td>{{ user.score }}</td>
            </tr>
            <tr>
                <th>Numtel</th>
                <td>{{ user.numtel }}</td>
            </tr>
            <tr>
                <th>Image</th>
                <td>{{ user.image }}</td>
            </tr>
            <tr>
                <th>Compte_ex</th>
                <td>{{ user.compteEx ? user.compteEx|date('Y-m-d') : '' }}</td>
            </tr>
            <tr>
                <th>Token_ex</th>
                <td>{{ user.tokenEx ? user.tokenEx|date('Y-m-d') : '' }}</td>
            </tr>
        </tbody>
    </table>

    <a href=\"{{ path('app_admin_index') }}\">back to list</a>

    <a href=\"{{ path('app_admin_edit', {'id': user.id}) }}\">edit</a>

    {{ include('admin/_delete_form.html.twig') }}
{% endblock %}
 #}
 {% extends 'base.html.twig' %}

{% block title %}User
{% endblock %}
{% block stylesheets %}
\t{{parent()}}
\t<link href=\"{{asset('front/assets/css/profiluser.css')}}\" rel=\"stylesheet\">

{% endblock %}
{% block body %}
\t<div class=\"container\">
\t\t<div
\t\t\tclass=\"main-body\">
\t\t\t{# 
\t\t\t\t\t\t          <!-- Breadcrumb -->
\t\t\t\t\t\t          <nav aria-label=\"breadcrumb\" class=\"main-breadcrumb\">
\t\t\t\t\t\t            <ol class=\"breadcrumb\">
\t\t\t\t\t\t              <li class=\"breadcrumb-item\"><a href=\"index.html\">Home</a></li>
\t\t\t\t\t\t              <li class=\"breadcrumb-item\"><a href=\"javascript:void(0)\">User</a></li>
\t\t\t\t\t\t              <li class=\"breadcrumb-item active\" aria-current=\"page\">User Profile</li>
\t\t\t\t\t\t            </ol>
\t\t\t\t\t\t          </nav>
\t\t\t\t\t\t          <!-- /Breadcrumb --> #}
\t\t\t<a class=\"btn btn-dark\" href=\"{{ path('app_user_index') }}\">back to list</a>


\t\t\t<div class=\"row gutters-sm\">

\t\t\t\t<div class=\"col-md-4 mb-3\">
\t\t\t\t\t<div class=\"card\">
\t\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t\t<div class=\"d-flex flex-column align-items-center text-center\">
\t\t\t\t\t\t\t\t<img src=\"{{user.image}}\" alt=\"Admin\" class=\"rounded-circle p-1 bg-primary\" width=\"180\" height=\"180\">
\t\t\t\t\t\t\t\t<div class=\"mt-3\">
\t\t\t\t\t\t\t\t\t<h4>{{ user.score }}</h4>
\t\t\t\t\t\t\t\t\t<p class=\"text-secondary mb-1\">
\t\t\t\t\t\t\t\t\t\t{% if user.roles is defined %}
\t\t\t\t\t\t\t\t\t\t\t<p class=\"m-0\">{{ user.roles[0] }}</p>
\t\t\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t

\t\t\t\t\t\t\t\t\t<a href=\"{{ path('app_message_new', {'id': user.id} )}}\" class=\"btn btn-outline-primary\">Message</a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"card mt-3\">
\t\t\t\t\t\t<ul
\t\t\t\t\t\t\tclass=\"list-group list-group-flush\">{# <li class=\"list-group-item d-flex justify-content-between align-items-center flex-wrap\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                    <h6 class=\"mb-0\"><svg xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\" class=\"feather feather-globe mr-2 icon-inline\"><circle cx=\"12\" cy=\"12\" r=\"10\"></circle><line x1=\"2\" y1=\"12\" x2=\"22\" y2=\"12\"></line><path d=\"M12 2a15.3 15.3 0 0 1 4 10 15.3 15.3 0 0 1-4 10 15.3 15.3 0 0 1-4-10 15.3 15.3 0 0 1 4-10z\"></path></svg>Website</h6>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                    <span class=\"text-secondary\">https://bootdey.com</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                  </li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                  <li class=\"list-group-item d-flex justify-content-between align-items-center flex-wrap\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                    <h6 class=\"mb-0\"><svg xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\" class=\"feather feather-github mr-2 icon-inline\"><path d=\"M9 19c-5 1.5-5-2.5-7-3m14 6v-3.87a3.37 3.37 0 0 0-.94-2.61c3.14-.35 6.44-1.54 6.44-7A5.44 5.44 0 0 0 20 4.77 5.07 5.07 0 0 0 19.91 1S18.73.65 16 2.48a13.38 13.38 0 0 0-7 0C6.27.65 5.09 1 5.09 1A5.07 5.07 0 0 0 5 4.77a5.44 5.44 0 0 0-1.5 3.78c0 5.42 3.3 6.61 6.44 7A3.37 3.37 0 0 0 9 18.13V22\"></path></svg>Github</h6>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                    <span class=\"text-secondary\">bootdey</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                  </li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                  <li class=\"list-group-item d-flex justify-content-between align-items-center flex-wrap\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                    <h6 class=\"mb-0\"><svg xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\" class=\"feather feather-twitter mr-2 icon-inline text-info\"><path d=\"M23 3a10.9 10.9 0 0 1-3.14 1.53 4.48 4.48 0 0 0-7.86 3v1A10.66 10.66 0 0 1 3 4s-4 9 5 13a11.64 11.64 0 0 1-7 2c9 5 20 0 20-11.5a4.5 4.5 0 0 0-.08-.83A7.72 7.72 0 0 0 23 3z\"></path></svg>Twitter</h6>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                    <span class=\"text-secondary\">@bootdey</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                  </li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                  <li class=\"list-group-item d-flex justify-content-between align-items-center flex-wrap\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                    <h6 class=\"mb-0\"><svg xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\" class=\"feather feather-instagram mr-2 icon-inline text-danger\"><rect x=\"2\" y=\"2\" width=\"20\" height=\"20\" rx=\"5\" ry=\"5\"></rect><path d=\"M16 11.37A4 4 0 1 1 12.63 8 4 4 0 0 1 16 11.37z\"></path><line x1=\"17.5\" y1=\"6.5\" x2=\"17.51\" y2=\"6.5\"></line></svg>Instagram</h6>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                    <span class=\"text-secondary\">bootdey</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                  </li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                  <li class=\"list-group-item d-flex justify-content-between align-items-center flex-wrap\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                    <h6 class=\"mb-0\"><svg xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\" class=\"feather feather-facebook mr-2 icon-inline text-primary\"><path d=\"M18 2h-3a5 5 0 0 0-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 0 1 1-1h3z\"></path></svg>Facebook</h6>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                    <span class=\"text-secondary\">bootdey</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                  </li> #}
\t\t\t\t\t\t</ul>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-md-8\">
\t\t\t\t\t<div class=\"card mb-3\">
\t\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t<div class=\"col-sm-3\">
\t\t\t\t\t\t\t\t\t<h6 class=\"mb-0\">Full Name</h6>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"col-sm-9 text-secondary\">
\t\t\t\t\t\t\t\t\t{{user.nom}}
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<hr>
\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t<div class=\"col-sm-3\">
\t\t\t\t\t\t\t\t\t<h6 class=\"mb-0\">Email</h6>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"col-sm-9 text-secondary\">
\t\t\t\t\t\t\t\t\t{{user.email}}
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<hr>
\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t<div class=\"col-sm-3\">
\t\t\t\t\t\t\t\t\t<h6 class=\"mb-0\">Phone</h6>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"col-sm-9 text-secondary\">
\t\t\t\t\t\t\t\t\t{{user.numtel}}
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<hr>
\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t<div class=\"col-sm-3\">
\t\t\t\t\t\t\t\t\t<h6 class=\"mb-0\">Adress</h6>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"col-sm-9 text-secondary\">
\t\t\t\t\t\t\t\t\t{{user.adress}}
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<hr>
\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t<div class=\"col-sm-3\">
\t\t\t\t\t\t\t\t\t<h6 class=\"mb-0\">Cin</h6>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"col-sm-9 text-secondary\">
\t\t\t\t\t\t\t\t\t{{user.cin}}
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<hr>
\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t{# <div class=\"col-sm-12\">

\t\t\t\t\t\t\t\t\t<a class=\"btn btn-info \" target=\"__blank\" href=\"{{ path('app_user_edit', {'id': user.id}) }}\">Edit</a>
\t\t\t\t\t\t\t\t</div> #}
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"row gutters-sm\">
\t\t\t\t\t\t<div class=\"col-sm-6 mb-3\">
\t\t\t\t\t\t\t<div class=\"card h-100\">
\t\t\t\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t\t\t\t<h6 class=\"d-flex align-items-center mb-3\">
\t\t\t\t\t\t\t\t\t\t<i class=\"material-icons text-info mr-2\">Mes Colis</i>
\t\t\t\t\t\t\t\t\t</h6>
\t\t\t\t\t\t\t\t\t<small></small>
\t\t\t\t\t\t\t\t\t<div class=\"progress mb-3\" style=\"height: 5px\">
\t\t\t\t\t\t\t\t\t\t<div class=\"progress-bar bg-primary\" role=\"progressbar\" style=\"width: 80%\" aria-valuenow=\"80\" aria-valuemin=\"0\" aria-valuemax=\"100\"></div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<small></small>
\t\t\t\t\t\t\t\t\t<div class=\"progress mb-3\" style=\"height: 5px\">
\t\t\t\t\t\t\t\t\t\t<div class=\"progress-bar bg-primary\" role=\"progressbar\" style=\"width: 72%\" aria-valuenow=\"72\" aria-valuemin=\"0\" aria-valuemax=\"100\"></div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<small></small>
\t\t\t\t\t\t\t\t\t<div class=\"progress mb-3\" style=\"height: 5px\">
\t\t\t\t\t\t\t\t\t\t<div class=\"progress-bar bg-primary\" role=\"progressbar\" style=\"width: 89%\" aria-valuenow=\"89\" aria-valuemin=\"0\" aria-valuemax=\"100\"></div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<small></small>
\t\t\t\t\t\t\t\t\t<div class=\"progress mb-3\" style=\"height: 5px\">
\t\t\t\t\t\t\t\t\t\t<div class=\"progress-bar bg-primary\" role=\"progressbar\" style=\"width: 55%\" aria-valuenow=\"55\" aria-valuemin=\"0\" aria-valuemax=\"100\"></div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<small></small>
\t\t\t\t\t\t\t\t\t<div class=\"progress mb-3\" style=\"height: 5px\">
\t\t\t\t\t\t\t\t\t\t<div class=\"progress-bar bg-primary\" role=\"progressbar\" style=\"width: 66%\" aria-valuenow=\"66\" aria-valuemin=\"0\" aria-valuemax=\"100\"></div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-sm-6 mb-3\">
\t\t\t\t\t\t\t<div class=\"card h-100\">
\t\t\t\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t\t\t\t<h6 class=\"d-flex align-items-center mb-3\">
\t\t\t\t\t\t\t\t\t\t<i class=\"material-icons text-info mr-2\">Mes Annonces</i>
\t\t\t\t\t\t\t\t\t</h6>
\t\t\t\t\t\t\t\t\t<small></small>
\t\t\t\t\t\t\t\t\t<div class=\"progress mb-3\" style=\"height: 5px\">
\t\t\t\t\t\t\t\t\t\t<div class=\"progress-bar bg-primary\" role=\"progressbar\" style=\"width: 80%\" aria-valuenow=\"80\" aria-valuemin=\"0\" aria-valuemax=\"100\"></div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<small></small>
\t\t\t\t\t\t\t\t\t<div class=\"progress mb-3\" style=\"height: 5px\">
\t\t\t\t\t\t\t\t\t\t<div class=\"progress-bar bg-primary\" role=\"progressbar\" style=\"width: 72%\" aria-valuenow=\"72\" aria-valuemin=\"0\" aria-valuemax=\"100\"></div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<small></small>
\t\t\t\t\t\t\t\t\t<div class=\"progress mb-3\" style=\"height: 5px\">
\t\t\t\t\t\t\t\t\t\t<div class=\"progress-bar bg-primary\" role=\"progressbar\" style=\"width: 89%\" aria-valuenow=\"89\" aria-valuemin=\"0\" aria-valuemax=\"100\"></div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<small></small>
\t\t\t\t\t\t\t\t\t<div class=\"progress mb-3\" style=\"height: 5px\">
\t\t\t\t\t\t\t\t\t\t<div class=\"progress-bar bg-primary\" role=\"progressbar\" style=\"width: 55%\" aria-valuenow=\"55\" aria-valuemin=\"0\" aria-valuemax=\"100\"></div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<small></small>
\t\t\t\t\t\t\t\t\t<div class=\"progress mb-3\" style=\"height: 5px\">
\t\t\t\t\t\t\t\t\t\t<div class=\"progress-bar bg-primary\" role=\"progressbar\" style=\"width: 66%\" aria-valuenow=\"66\" aria-valuemin=\"0\" aria-valuemax=\"100\"></div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>


\t\t\t\t</div>
\t\t\t</div>

\t\t</div>
\t</div>


{% endblock %}
", "admin/show.html.twig", "C:\\Users\\aymen\\Desktop\\gitprojet\\digidreamers\\templates\\admin\\show.html.twig");
    }
}
