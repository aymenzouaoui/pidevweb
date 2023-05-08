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

/* base.html.twig */
class __TwigTemplate_323099b0a875df28f2606c3f8e0229fd extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'stylesheets' => [$this, 'block_stylesheets'],
            'body' => [$this, 'block_body'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
\t<head>
\t\t<meta charset=\"utf-8\">
\t\t<meta content=\"width=device-width, initial-scale=1.0\" name=\"viewport\">

\t\t<title>Amena Bootstrap Template - Contact</title>
\t\t<meta content=\"\" name=\"description\">
\t\t<meta
\t\tcontent=\"\" name=\"keywords\">

\t\t<!-- Favicons -->
\t\t<link href=\"front/assets/img/favicon.png\" rel=\"icon\">
\t\t<link
\t\thref=\"front/assets/img/apple-touch-icon.png\" rel=\"apple-touch-icon\">

\t\t<!-- Google Fonts -->
\t\t<link rel=\"preconnect\" href=\"https://fonts.googleapis.com\">
\t\t<link rel=\"preconnect\" href=\"https://fonts.gstatic.com\" crossorigin>
\t\t<link href=\"https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,600;1,700&family=Montserrat:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Raleway:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap\" rel=\"stylesheet\">


\t\t";
        // line 23
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 38
        echo "

\t</head>
\t<body>
\t";
        // line 42
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 42, $this->source); })()), "flashes", [0 => "success"], "method", false, false, false, 42));
        foreach ($context['_seq'] as $context["_key"] => $context["flash_message"]) {
            // line 43
            echo "    <div class=\"alert alert-success alert-dismissible fade show\" role=\"alert\" id=\"flash-message\">
        <div class=\"d-flex align-items-center\">
            <i class=\"bi bi-check-circle-fill me-2\"></i>
            <span>";
            // line 46
            echo twig_escape_filter($this->env, $context["flash_message"], "html", null, true);
            echo "</span>
        </div>
        <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\" aria-label=\"Close\"></button>
    </div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flash_message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 51
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 51, $this->source); })()), "flashes", [0 => "error"], "method", false, false, false, 51));
        foreach ($context['_seq'] as $context["_key"] => $context["flash_message"]) {
            // line 52
            echo "<div class=\"alert alert-danger alert-dismissible fade show\" role=\"alert\" id=\"flash-message\">
<div class=\"d-flex align-items-center\">
<i class=\"bi bi-exclamation-triangle-fill me-2\"></i>
<span>";
            // line 55
            echo twig_escape_filter($this->env, $context["flash_message"], "html", null, true);
            echo "</span>
</div>
<button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\" aria-label=\"Close\"></button>
</div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flash_message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 60
        echo "
<script>
    // Masquer automatiquement le message de succès après 3 secondes
    setTimeout(function() {
        var flashMessage = document.getElementById('flash-message');
        if (flashMessage !== null) {
            flashMessage.remove();
        }
    }, 3000);
</script>
\t\t<!-- ======= Header ======= -->
\t\t<header id=\"header\" class=\"header d-flex align-items-center fixed-top\" style=\"margin-bottom:8%;background: rgba(27, 47, 69, 0.9);padding: 15px;\">
\t\t\t<div class=\"container-fluid container-xl d-flex align-items-center justify-content-between\">

\t\t\t\t<a href=\"";
        // line 74
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_accueil");
        echo "\" class=\"logo d-flex align-items-center\">
\t\t\t\t\t<!-- Uncomment the line below if you also wish to use an image logo -->
\t\t\t\t\t <img src=\"front/assets/img/logo.png\" alt=\"\" style =height:200px;> 
\t\t\t\t\t\t<h1 class=\"d-flex align-items-center\"> Amena</h1>
\t\t\t\t</a>

\t\t\t\t<i class=\"mobile-nav-toggle mobile-nav-show bi bi-list\"></i>
\t\t\t\t<i class=\"mobile-nav-toggle mobile-nav-hide d-none bi bi-x\"></i>

\t\t\t\t<nav id=\"navbar\" class=\"navbar\">
\t\t\t\t\t<ul>
\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<a  href=\"";
        // line 86
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_accueil");
        echo "\">Accueil</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<a  href=\"";
        // line 89
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_user_index");
        echo "\">Liste des transporteurs</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<a href=\"";
        // line 92
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_reclamations_new");
        echo "\">Reclamer</a>
\t\t\t\t\t\t</li>

\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<a href=\"/annonces/\">Annonces</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t
\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t";
        // line 100
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("IS_AUTHENTICATED_FULLY")) {
            // line 101
            echo "\t\t\t\t\t\t\t";
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 101, $this->source); })()), "user", [], "any", false, false, false, 101), "roles", [], "any", false, false, false, 101), 0, [], "array", false, false, false, 101) == "ROLE_USER")) {
                // line 102
                echo "\t\t\t\t\t\t\t\t<a  href=\"/colis/\">Colis</a>
\t\t\t\t\t\t\t";
            }
            // line 103
            echo "\t
\t\t\t\t\t\t";
        }
        // line 104
        echo "\t\t\t\t\t
\t\t\t\t
\t\t\t\t\t\t</li>
\t\t\t\t\t\t";
        // line 107
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("IS_AUTHENTICATED_FULLY")) {
            echo "\t\t\t\t\t\t
\t\t\t\t\t\t\t";
            // line 108
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 108, $this->source); })()), "user", [], "any", false, false, false, 108), "roles", [], "any", false, false, false, 108), 0, [], "array", false, false, false, 108) == "ROLE_TRANSPORTEUR")) {
                // line 109
                echo "\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<a href=\"/documentexpedition/\">Document d'expedition</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li class=\"dropdown\">
\t\t\t\t\t\t\t<a>
\t\t\t\t\t\t\t\t<span>Location des vehicules</span>
\t\t\t\t\t\t\t\t<i class=\"bi bi-chevron-down dropdown-indicator\"></i>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a href=\"/front/reservation\">Reserver vehicule</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a href=\"/front/reservation/MesReservations\">Mes reservations</a>
\t\t\t\t\t\t\t\t</li>\t\t\t\t\t\t\t
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li class=\"dropdown\">
\t\t\t\t\t\t\t<a>
\t\t\t\t\t\t\t\t<span>Competition et Cadeaux</span>
\t\t\t\t\t\t\t\t<i class=\"bi bi-chevron-down dropdown-indicator\"></i>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a href=\"/front/competition\">Participer a des competition</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a href=\"/front/competition/cadeaux\">Voir les cadeaux</a>
\t\t\t\t\t\t\t\t</li>\t\t\t\t\t\t\t
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t";
            }
            // line 141
            echo "\t\t\t\t\t\t\t";
        }
        // line 142
        echo "
\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t";
        // line 144
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
            // line 145
            echo "\t\t\t\t\t\t\t\t<a  href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("app_stats_index");
            echo "\">Espace Admin </a>
\t\t\t\t\t\t\t";
        }
        // line 147
        echo "\t\t\t\t\t\t</li>
\t\t\t\t\t\t
\t\t\t\t\t\t<ul>
\t\t\t\t\t\t<li>

\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t";
        // line 153
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("IS_AUTHENTICATED_FULLY")) {
            // line 154
            echo "\t\t\t\t\t\t\t <a href=\"/user/profil\" class=\"active\">Profil</a>
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a href=\"/logout/\" class=\"active\">Déconnexion</a>

\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t";
        } else {
            // line 160
            echo "\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a href='";
            // line 161
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
            echo "'>Connexion</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a href=\"";
            // line 164
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_user_new");
            echo "\">Inscription</a>

\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t";
        }
        // line 168
        echo "\t\t\t\t\t\t</ul>
\t\t\t\t\t</ul>
\t\t\t\t</nav>
\t\t\t\t<!-- .navbar -->

\t\t\t</div>
\t\t</header>
\t\t<!-- End Header -->
<!--Rayeeeeeen -->



<!--Rayeeeeeen -->


\t\t<main id=\"main\"> ";
        // line 183
        $this->displayBlock('body', $context, $blocks);
        // line 184
        echo "\t\t\t</main>
\t\t\t<!-- End #main -->
\t\t\t
  \t\t\t<a class=\"scroll-top d-flex align-items-center justify-content-center\">
\t\t\t\t<i class=\"bi bi-arrow-up-short\"></i>
\t\t\t</a>

\t\t\t<div id=\"preloader\"></div>
\t\t\t";
        // line 192
        $this->displayBlock('javascripts', $context, $blocks);
        // line 206
        echo "\t\t</body>
\t</html>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 23
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 24
        echo "\t\t\t";
        echo twig_escape_filter($this->env, $this->env->getFunction('encore_entry_link_tags')->getCallable()("app"), "html", null, true);
        echo "
\t\t\t<!-- Vendor CSS Files -->
\t\t\t<link href=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/assets/vendor/bootstrap/css/bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
\t\t\t<link href=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/assets/vendor/bootstrap-icons/bootstrap-icons.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
\t\t\t<link href=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/assets/vendor/aos/aos.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
\t\t\t<link href=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/assets/vendor/glightbox/css/glightbox.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
\t\t\t<link href=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/assets/vendor/swiper/swiper-bundle.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
\t\t\t<link href=\"front/assets/vendor/remixicon/remixicon.css\" rel=\"stylesheet\">
\t\t\t<link
\t\t\thref=\"https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css\" rel=\"stylesheet\">
\t\t\t<!-- Template Main CSS File -->
\t\t\t<link href=\"";
        // line 35
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/assets/css/main.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">

\t\t";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 183
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 192
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 193
        echo "\t\t\t\t";
        echo twig_escape_filter($this->env, $this->env->getFunction('encore_entry_script_tags')->getCallable()("app"), "html", null, true);
        echo "
\t\t\t\t<!-- Vendor JS Files -->
\t\t\t\t<script src=\"";
        // line 195
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"), "html", null, true);
        echo "\"></script>
\t\t\t\t<script src=\"";
        // line 196
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/assets/vendor/aos/aos.js"), "html", null, true);
        echo "\"></script>
\t\t\t\t<script src=\"";
        // line 197
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/assets/vendor/glightbox/js/glightbox.min.js"), "html", null, true);
        echo "\"></script>
\t\t\t\t<script src=\"";
        // line 198
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/assets/vendor/swiper/swiper-bundle.min.js"), "html", null, true);
        echo "\"></script>
\t\t\t\t<script src=\"";
        // line 199
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/assets/vendor/isotope-layout/isotope.pkgd.min.js"), "html", null, true);
        echo "\"></script>
\t\t\t\t<script src=\"";
        // line 200
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/assets/vendor/php-email-form/validate.js"), "html", null, true);
        echo "\"></script>

\t\t\t\t<!-- Template Main JS File -->
\t\t\t\t<script src=\"";
        // line 203
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/assets/js/main.js"), "html", null, true);
        echo "\"></script>

\t\t\t";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  435 => 203,  429 => 200,  425 => 199,  421 => 198,  417 => 197,  413 => 196,  409 => 195,  403 => 193,  393 => 192,  375 => 183,  362 => 35,  354 => 30,  350 => 29,  346 => 28,  342 => 27,  338 => 26,  332 => 24,  322 => 23,  310 => 206,  308 => 192,  298 => 184,  296 => 183,  279 => 168,  272 => 164,  266 => 161,  263 => 160,  255 => 154,  253 => 153,  245 => 147,  239 => 145,  237 => 144,  233 => 142,  230 => 141,  196 => 109,  194 => 108,  190 => 107,  185 => 104,  181 => 103,  177 => 102,  174 => 101,  172 => 100,  161 => 92,  155 => 89,  149 => 86,  134 => 74,  118 => 60,  107 => 55,  102 => 52,  98 => 51,  87 => 46,  82 => 43,  78 => 42,  72 => 38,  70 => 23,  46 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html>
\t<head>
\t\t<meta charset=\"utf-8\">
\t\t<meta content=\"width=device-width, initial-scale=1.0\" name=\"viewport\">

\t\t<title>Amena Bootstrap Template - Contact</title>
\t\t<meta content=\"\" name=\"description\">
\t\t<meta
\t\tcontent=\"\" name=\"keywords\">

\t\t<!-- Favicons -->
\t\t<link href=\"front/assets/img/favicon.png\" rel=\"icon\">
\t\t<link
\t\thref=\"front/assets/img/apple-touch-icon.png\" rel=\"apple-touch-icon\">

\t\t<!-- Google Fonts -->
\t\t<link rel=\"preconnect\" href=\"https://fonts.googleapis.com\">
\t\t<link rel=\"preconnect\" href=\"https://fonts.gstatic.com\" crossorigin>
\t\t<link href=\"https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,600;1,700&family=Montserrat:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Raleway:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap\" rel=\"stylesheet\">


\t\t{% block stylesheets %}
\t\t\t{{ encore_entry_link_tags('app') }}
\t\t\t<!-- Vendor CSS Files -->
\t\t\t<link href=\"{{asset('front/assets/vendor/bootstrap/css/bootstrap.min.css')}}\" rel=\"stylesheet\">
\t\t\t<link href=\"{{asset('front/assets/vendor/bootstrap-icons/bootstrap-icons.css')}}\" rel=\"stylesheet\">
\t\t\t<link href=\"{{asset('front/assets/vendor/aos/aos.css')}}\" rel=\"stylesheet\">
\t\t\t<link href=\"{{asset('front/assets/vendor/glightbox/css/glightbox.min.css')}}\" rel=\"stylesheet\">
\t\t\t<link href=\"{{asset('front/assets/vendor/swiper/swiper-bundle.min.css')}}\" rel=\"stylesheet\">
\t\t\t<link href=\"front/assets/vendor/remixicon/remixicon.css\" rel=\"stylesheet\">
\t\t\t<link
\t\t\thref=\"https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css\" rel=\"stylesheet\">
\t\t\t<!-- Template Main CSS File -->
\t\t\t<link href=\"{{asset('front/assets/css/main.css')}}\" rel=\"stylesheet\">

\t\t{% endblock %}


\t</head>
\t<body>
\t{% for flash_message in app.flashes('success') %}
    <div class=\"alert alert-success alert-dismissible fade show\" role=\"alert\" id=\"flash-message\">
        <div class=\"d-flex align-items-center\">
            <i class=\"bi bi-check-circle-fill me-2\"></i>
            <span>{{ flash_message }}</span>
        </div>
        <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\" aria-label=\"Close\"></button>
    </div>
{% endfor %}
{% for flash_message in app.flashes('error') %}
<div class=\"alert alert-danger alert-dismissible fade show\" role=\"alert\" id=\"flash-message\">
<div class=\"d-flex align-items-center\">
<i class=\"bi bi-exclamation-triangle-fill me-2\"></i>
<span>{{ flash_message }}</span>
</div>
<button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\" aria-label=\"Close\"></button>
</div>
{% endfor %}

<script>
    // Masquer automatiquement le message de succès après 3 secondes
    setTimeout(function() {
        var flashMessage = document.getElementById('flash-message');
        if (flashMessage !== null) {
            flashMessage.remove();
        }
    }, 3000);
</script>
\t\t<!-- ======= Header ======= -->
\t\t<header id=\"header\" class=\"header d-flex align-items-center fixed-top\" style=\"margin-bottom:8%;background: rgba(27, 47, 69, 0.9);padding: 15px;\">
\t\t\t<div class=\"container-fluid container-xl d-flex align-items-center justify-content-between\">

\t\t\t\t<a href=\"{{path('app_accueil')}}\" class=\"logo d-flex align-items-center\">
\t\t\t\t\t<!-- Uncomment the line below if you also wish to use an image logo -->
\t\t\t\t\t <img src=\"front/assets/img/logo.png\" alt=\"\" style =height:200px;> 
\t\t\t\t\t\t<h1 class=\"d-flex align-items-center\"> Amena</h1>
\t\t\t\t</a>

\t\t\t\t<i class=\"mobile-nav-toggle mobile-nav-show bi bi-list\"></i>
\t\t\t\t<i class=\"mobile-nav-toggle mobile-nav-hide d-none bi bi-x\"></i>

\t\t\t\t<nav id=\"navbar\" class=\"navbar\">
\t\t\t\t\t<ul>
\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<a  href=\"{{path('app_accueil')}}\">Accueil</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<a  href=\"{{path('app_user_index')}}\">Liste des transporteurs</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<a href=\"{{ path('app_reclamations_new') }}\">Reclamer</a>
\t\t\t\t\t\t</li>

\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<a href=\"/annonces/\">Annonces</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t
\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t{% if is_granted('IS_AUTHENTICATED_FULLY') %}
\t\t\t\t\t\t\t{% if app.user.roles[0] == \"ROLE_USER\" %}
\t\t\t\t\t\t\t\t<a  href=\"/colis/\">Colis</a>
\t\t\t\t\t\t\t{% endif %}\t
\t\t\t\t\t\t{% endif %}\t\t\t\t\t
\t\t\t\t
\t\t\t\t\t\t</li>
\t\t\t\t\t\t{% if is_granted('IS_AUTHENTICATED_FULLY') %}\t\t\t\t\t\t
\t\t\t\t\t\t\t{% if app.user.roles[0] == \"ROLE_TRANSPORTEUR\" %}
\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<a href=\"/documentexpedition/\">Document d'expedition</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li class=\"dropdown\">
\t\t\t\t\t\t\t<a>
\t\t\t\t\t\t\t\t<span>Location des vehicules</span>
\t\t\t\t\t\t\t\t<i class=\"bi bi-chevron-down dropdown-indicator\"></i>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a href=\"/front/reservation\">Reserver vehicule</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a href=\"/front/reservation/MesReservations\">Mes reservations</a>
\t\t\t\t\t\t\t\t</li>\t\t\t\t\t\t\t
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li class=\"dropdown\">
\t\t\t\t\t\t\t<a>
\t\t\t\t\t\t\t\t<span>Competition et Cadeaux</span>
\t\t\t\t\t\t\t\t<i class=\"bi bi-chevron-down dropdown-indicator\"></i>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a href=\"/front/competition\">Participer a des competition</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a href=\"/front/competition/cadeaux\">Voir les cadeaux</a>
\t\t\t\t\t\t\t\t</li>\t\t\t\t\t\t\t
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t{% endif %}

\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t{% if is_granted('ROLE_ADMIN') %}
\t\t\t\t\t\t\t\t<a  href=\"{{ url('app_stats_index') }}\">Espace Admin </a>
\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t</li>
\t\t\t\t\t\t
\t\t\t\t\t\t<ul>
\t\t\t\t\t\t<li>

\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t{% if is_granted('IS_AUTHENTICATED_FULLY') %}
\t\t\t\t\t\t\t <a href=\"/user/profil\" class=\"active\">Profil</a>
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a href=\"/logout/\" class=\"active\">Déconnexion</a>

\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t{% else %}
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a href='{{ path('app_login') }}'>Connexion</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a href=\"{{ path('app_user_new') }}\">Inscription</a>

\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t</ul>
\t\t\t\t\t</ul>
\t\t\t\t</nav>
\t\t\t\t<!-- .navbar -->

\t\t\t</div>
\t\t</header>
\t\t<!-- End Header -->
<!--Rayeeeeeen -->



<!--Rayeeeeeen -->


\t\t<main id=\"main\"> {% block body %}{% endblock %}
\t\t\t</main>
\t\t\t<!-- End #main -->
\t\t\t
  \t\t\t<a class=\"scroll-top d-flex align-items-center justify-content-center\">
\t\t\t\t<i class=\"bi bi-arrow-up-short\"></i>
\t\t\t</a>

\t\t\t<div id=\"preloader\"></div>
\t\t\t{% block javascripts %}
\t\t\t\t{{ encore_entry_script_tags('app') }}
\t\t\t\t<!-- Vendor JS Files -->
\t\t\t\t<script src=\"{{asset('front/assets/vendor/bootstrap/js/bootstrap.bundle.min.js')}}\"></script>
\t\t\t\t<script src=\"{{asset('front/assets/vendor/aos/aos.js')}}\"></script>
\t\t\t\t<script src=\"{{asset('front/assets/vendor/glightbox/js/glightbox.min.js')}}\"></script>
\t\t\t\t<script src=\"{{asset('front/assets/vendor/swiper/swiper-bundle.min.js')}}\"></script>
\t\t\t\t<script src=\"{{asset('front/assets/vendor/isotope-layout/isotope.pkgd.min.js')}}\"></script>
\t\t\t\t<script src=\"{{asset('front/assets/vendor/php-email-form/validate.js')}}\"></script>

\t\t\t\t<!-- Template Main JS File -->
\t\t\t\t<script src=\"{{asset('front/assets/js/main.js')}}\"></script>

\t\t\t{% endblock %}
\t\t</body>
\t</html>
", "base.html.twig", "C:\\Users\\aymen\\Desktop\\gitprojet\\digidreamers\\templates\\base.html.twig");
    }
}
