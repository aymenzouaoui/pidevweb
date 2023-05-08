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

/* admin_colis/show.html.twig */
class __TwigTemplate_52dd9d2dd32d8da39526283ac9270625 extends Template
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
        return "baseadmin.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin_colis/show.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin_colis/show.html.twig"));

        $this->parent = $this->loadTemplate("baseadmin.html.twig", "admin_colis/show.html.twig", 1);
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

        echo "Colis";
        
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
        echo "    <div class=\"container my-5\">
        <div class=\"row justify-content-center\">
            <div class=\"col-lg-8\">
                <div class=\"card\">
                    <div class=\"card-header\">
                        <h4>Colis</h4>
                    </div>
                    <div class=\"card-body\">
                        <table class=\"table\">
                            <tbody>
                                <tr>
                                    <th>Id</th>
                                    <td>";
        // line 18
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["coli"]) || array_key_exists("coli", $context) ? $context["coli"] : (function () { throw new RuntimeError('Variable "coli" does not exist.', 18, $this->source); })()), "id", [], "any", false, false, false, 18), "html", null, true);
        echo "</td>
                                </tr>
                                <tr>
                                    <th>Nom de l'expéditeur</th>
                                    <td>";
        // line 22
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["coli"]) || array_key_exists("coli", $context) ? $context["coli"] : (function () { throw new RuntimeError('Variable "coli" does not exist.', 22, $this->source); })()), "nomExpediteur", [], "any", false, false, false, 22), "html", null, true);
        echo "</td>
                                </tr>
                                <tr>
                                    <th>Adresse de l'expéditeur</th>
                                    <td>";
        // line 26
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["coli"]) || array_key_exists("coli", $context) ? $context["coli"] : (function () { throw new RuntimeError('Variable "coli" does not exist.', 26, $this->source); })()), "adresseExpediteur", [], "any", false, false, false, 26), "html", null, true);
        echo "</td>
                                </tr>
                                <tr>
                                    <th>Nom du destinataire</th>
                                    <td>";
        // line 30
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["coli"]) || array_key_exists("coli", $context) ? $context["coli"] : (function () { throw new RuntimeError('Variable "coli" does not exist.', 30, $this->source); })()), "nomDestinataire", [], "any", false, false, false, 30), "html", null, true);
        echo "</td>
                                </tr>
                                <tr>
                                    <th>Adresse du destinataire</th>
                                    <td>";
        // line 34
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["coli"]) || array_key_exists("coli", $context) ? $context["coli"] : (function () { throw new RuntimeError('Variable "coli" does not exist.', 34, $this->source); })()), "adresseDestinataire", [], "any", false, false, false, 34), "html", null, true);
        echo "</td>
                                </tr>
                                <tr>
                                    <th>Poids</th>
                                    <td>";
        // line 38
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["coli"]) || array_key_exists("coli", $context) ? $context["coli"] : (function () { throw new RuntimeError('Variable "coli" does not exist.', 38, $this->source); })()), "poids", [], "any", false, false, false, 38), "html", null, true);
        echo "</td>
                                </tr>
                                <tr>
                                    <th>Statut</th>
                                    <td>";
        // line 42
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["coli"]) || array_key_exists("coli", $context) ? $context["coli"] : (function () { throw new RuntimeError('Variable "coli" does not exist.', 42, $this->source); })()), "statut", [], "any", false, false, false, 42), "html", null, true);
        echo "</td>
                                </tr>
                                <tr>
                                    <th>Date d'expédition</th>
                                    <td>";
        // line 46
        ((twig_get_attribute($this->env, $this->source, (isset($context["coli"]) || array_key_exists("coli", $context) ? $context["coli"] : (function () { throw new RuntimeError('Variable "coli" does not exist.', 46, $this->source); })()), "dateExpedition", [], "any", false, false, false, 46)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["coli"]) || array_key_exists("coli", $context) ? $context["coli"] : (function () { throw new RuntimeError('Variable "coli" does not exist.', 46, $this->source); })()), "dateExpedition", [], "any", false, false, false, 46), "d/m/Y"), "html", null, true))) : (print ("")));
        echo "</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class=\"card-footer\">
                        <a href=\"";
        // line 52
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_colis_index");
        echo "\" class=\"btn btn-secondary\">Retour à la liste</a>
                        <a href=\"";
        // line 53
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_colis_edit", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["coli"]) || array_key_exists("coli", $context) ? $context["coli"] : (function () { throw new RuntimeError('Variable "coli" does not exist.', 53, $this->source); })()), "id", [], "any", false, false, false, 53)]), "html", null, true);
        echo "\" class=\"btn btn-primary\">Modifier</a>
                        ";
        // line 54
        echo twig_include($this->env, $context, "admin_colis/_delete_form.html.twig");
        echo "
                    </div>
                </div>
            </div>
        </div>
    </div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 62
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 63
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
    <link href=\"";
        // line 64
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/assets/vendor/bootstrap/css/bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <link href=\"";
        // line 65
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/assets/vendor/bootstrap-icons/bootstrap-icons.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <link href=\"";
        // line 66
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/assets/vendor/aos/aos.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <link href=\"";
        // line 67
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/assets/vendor/glightbox/css/glightbox.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <link href=\"";
        // line 68
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/assets/vendor/swiper/swiper-bundle.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <link href=\"";
        // line 69
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/assets/vendor/remixicon/remixicon.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <link href=\"";
        // line 70
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/assets/css/main.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "admin_colis/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  225 => 70,  221 => 69,  217 => 68,  213 => 67,  209 => 66,  205 => 65,  201 => 64,  196 => 63,  186 => 62,  169 => 54,  165 => 53,  161 => 52,  152 => 46,  145 => 42,  138 => 38,  131 => 34,  124 => 30,  117 => 26,  110 => 22,  103 => 18,  89 => 6,  79 => 5,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'baseadmin.html.twig' %}

{% block title %}Colis{% endblock %}

{% block body %}
    <div class=\"container my-5\">
        <div class=\"row justify-content-center\">
            <div class=\"col-lg-8\">
                <div class=\"card\">
                    <div class=\"card-header\">
                        <h4>Colis</h4>
                    </div>
                    <div class=\"card-body\">
                        <table class=\"table\">
                            <tbody>
                                <tr>
                                    <th>Id</th>
                                    <td>{{ coli.id }}</td>
                                </tr>
                                <tr>
                                    <th>Nom de l'expéditeur</th>
                                    <td>{{ coli.nomExpediteur }}</td>
                                </tr>
                                <tr>
                                    <th>Adresse de l'expéditeur</th>
                                    <td>{{ coli.adresseExpediteur }}</td>
                                </tr>
                                <tr>
                                    <th>Nom du destinataire</th>
                                    <td>{{ coli.nomDestinataire }}</td>
                                </tr>
                                <tr>
                                    <th>Adresse du destinataire</th>
                                    <td>{{ coli.adresseDestinataire }}</td>
                                </tr>
                                <tr>
                                    <th>Poids</th>
                                    <td>{{ coli.poids }}</td>
                                </tr>
                                <tr>
                                    <th>Statut</th>
                                    <td>{{ coli.statut }}</td>
                                </tr>
                                <tr>
                                    <th>Date d'expédition</th>
                                    <td>{{ coli.dateExpedition ? coli.dateExpedition|date('d/m/Y') : '' }}</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class=\"card-footer\">
                        <a href=\"{{ path('app_admin_colis_index') }}\" class=\"btn btn-secondary\">Retour à la liste</a>
                        <a href=\"{{ path('app_admin_colis_edit', {'id': coli.id}) }}\" class=\"btn btn-primary\">Modifier</a>
                        {{ include('admin_colis/_delete_form.html.twig') }}
                    </div>
                </div>
            </div>
        </div>
    </div>
{% endblock %}

{% block stylesheets %}
    {{ parent() }}
    <link href=\"{{asset('front/assets/vendor/bootstrap/css/bootstrap.min.css')}}\" rel=\"stylesheet\">
    <link href=\"{{asset('front/assets/vendor/bootstrap-icons/bootstrap-icons.css')}}\" rel=\"stylesheet\">
    <link href=\"{{asset('front/assets/vendor/aos/aos.css')}}\" rel=\"stylesheet\">
    <link href=\"{{asset('front/assets/vendor/glightbox/css/glightbox.min.css')}}\" rel=\"stylesheet\">
    <link href=\"{{asset('front/assets/vendor/swiper/swiper-bundle.min.css')}}\" rel=\"stylesheet\">
    <link href=\"{{asset('front/assets/vendor/remixicon/remixicon.css')}}\" rel=\"stylesheet\">
    <link href=\"{{asset('front/assets/css/main.css')}}\" rel=\"stylesheet\">
{% endblock %}
", "admin_colis/show.html.twig", "C:\\Users\\aymen\\Desktop\\gitprojet\\digidreamers\\templates\\admin_colis\\show.html.twig");
    }
}
