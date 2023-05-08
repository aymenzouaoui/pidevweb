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

/* base2.html.twig */
class __TwigTemplate_de42a18aea1b7e282a659b93632fb0fb extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base2.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base2.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
\t<head>
\t\t<meta charset=\"utf-8\">
\t\t<meta content=\"width=device-width, initial-scale=1.0\" name=\"viewport\">

\t\t<title>Nova Bootstrap Template - Contact</title>
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
\t\t<link
\t\thref=\"https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,600;1,700&family=Montserrat:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Raleway:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap\" rel=\"stylesheet\">


\t\t<!-- =======================================================
\t\t\t\t\t\t  * Template Name: Nova
\t\t\t\t\t\t  * Updated: Mar 10 2023 with Bootstrap v5.2.3
\t\t\t\t\t\t  * Template URL: https://bootstrapmade.com/nova-bootstrap-business-template/
\t\t\t\t\t\t  * Author: BootstrapMade.com
\t\t\t\t\t\t  * License: https://bootstrapmade.com/license/
\t\t\t\t\t\t  ======================================================== -->
\t\t <link rel=\"stylesheet\" href=\"https://cdn.jsdelivr.net/npm/fullcalendar@5.3.0/main.min.css\" integrity=\"sha256-uq9PNlMzB+1h01Ij9cx7zeE2OR2pLAfRw3uUUOOPKdA=\" crossorigin=\"anonymous\">
\t\t";
        // line 32
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 47
        echo "

\t</head>
\t<body>
\t\t\t<script src=\"https://cdn.jsdelivr.net/npm/fullcalendar@5.3.0/main.min.js\" 
\t\t\tintegrity=\"sha256-DBxkGZLxKsLKhz054qUpBqtotG00r9AELGpSigJujLg=\" crossorigin=\"anonymous\"></script>

\t

<script>
</script>
    <!-- ======= Header ======= -->
  <header id=\"header\" class=\"header d-flex align-items-center fixed-top\" style=\"margin-bottom:8%;background: rgba(27, 47, 69, 0.9);padding: 15px;\">
\t\t\t<div class=\"container-fluid container-xl d-flex align-items-center justify-content-between\">

\t\t\t\t<a href=\"";
        // line 62
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
        // line 74
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_accueil");
        echo "\">Accueil</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<a  href=\"";
        // line 77
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_user_index");
        echo "\">Liste des transporteurs</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<a href=\"";
        // line 80
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_reclamations_new");
        echo "\">Reclamer</a>
\t\t\t\t\t\t</li>

\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<a href=\"/annonces/\">Annonces</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t
\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t";
        // line 88
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("IS_AUTHENTICATED_FULLY")) {
            // line 89
            echo "\t\t\t\t\t\t\t";
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 89, $this->source); })()), "user", [], "any", false, false, false, 89), "roles", [], "any", false, false, false, 89), 0, [], "array", false, false, false, 89) == "ROLE_USER")) {
                // line 90
                echo "\t\t\t\t\t\t\t\t<a  href=\"/colis/\">Colis</a>
\t\t\t\t\t\t\t";
            }
            // line 91
            echo "\t
\t\t\t\t\t\t";
        }
        // line 92
        echo "\t\t\t\t\t
\t\t\t\t
\t\t\t\t\t\t</li>
\t\t\t\t\t\t";
        // line 95
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("IS_AUTHENTICATED_FULLY")) {
            echo "\t\t\t\t\t\t
\t\t\t\t\t\t\t";
            // line 96
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 96, $this->source); })()), "user", [], "any", false, false, false, 96), "roles", [], "any", false, false, false, 96), 0, [], "array", false, false, false, 96) == "ROLE_TRANSPORTEUR")) {
                // line 97
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
            // line 129
            echo "\t\t\t\t\t\t\t";
        }
        // line 130
        echo "
\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t";
        // line 132
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
            // line 133
            echo "\t\t\t\t\t\t\t\t<a  href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("app_stats_index");
            echo "\">Espace Admin </a>
\t\t\t\t\t\t\t";
        }
        // line 135
        echo "\t\t\t\t\t\t</li>
\t\t\t\t\t\t
\t\t\t\t\t\t<ul>
\t\t\t\t\t\t<li>

\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t";
        // line 141
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("IS_AUTHENTICATED_FULLY")) {
            // line 142
            echo "\t\t\t\t\t\t\t <a href=\"/user/profil\" class=\"active\">Profil</a>
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a href=\"/logout/\" class=\"active\">Déconnexion</a>

\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t";
        } else {
            // line 148
            echo "\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a href='";
            // line 149
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
            echo "'>Connexion</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a href=\"";
            // line 152
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_user_new");
            echo "\">Inscription</a>

\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t";
        }
        // line 156
        echo "\t\t\t\t\t\t</ul>
\t\t\t\t\t</ul>
\t\t\t\t</nav>
\t\t\t\t<!-- .navbar -->

\t\t\t</div>
\t\t</header>

  <!-- ======= Breadcrumbs ======= -->

   <main id=\"main\">
\t\t";
        // line 167
        $this->displayBlock('body', $context, $blocks);
        // line 168
        echo "
        </main><!-- End #main -->
\t\t<!-- ======= Footer ======= -->
\t\t<footer id=\"footer\" class=\"footer\">

\t\t\t<div class=\"footer-content\">
\t\t\t\t<div class=\"container\">
\t\t\t\t\t<div class=\"row gy-4\">
\t\t\t\t\t\t<div class=\"col-lg-5 col-md-12 footer-info\">
\t\t\t\t\t\t\t<a href=\"index.html\" class=\"logo d-flex align-items-center\">
\t\t\t\t\t\t\t\t<span>Nova</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t<p>Cras fermentum odio eu feugiat lide par naso tierra. Justo eget nada terra videa magna derita valies darta donna mare fermentum iaculis eu non diam phasellus.</p>
\t\t\t\t\t\t\t<div class=\"social-links d-flex  mt-3\">
\t\t\t\t\t\t\t\t<a  class=\"twitter\">
\t\t\t\t\t\t\t\t\t<i class=\"bi bi-twitter\"></i>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t<a  class=\"facebook\">
\t\t\t\t\t\t\t\t\t<i class=\"bi bi-facebook\"></i>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t<a  class=\"instagram\">
\t\t\t\t\t\t\t\t\t<i class=\"bi bi-instagram\"></i>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t<a  class=\"linkedin\">
\t\t\t\t\t\t\t\t\t<i class=\"bi bi-linkedin\"></i>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"col-lg-2 col-6 footer-links\">
\t\t\t\t\t\t\t<h4>Useful Links</h4>
\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<i class=\"bi bi-dash\"></i>
\t\t\t\t\t\t\t\t\t<a >Home</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<i class=\"bi bi-dash\"></i>
\t\t\t\t\t\t\t\t\t<a >About us</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<i class=\"bi bi-dash\"></i>
\t\t\t\t\t\t\t\t\t<a >Services</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<i class=\"bi bi-dash\"></i>
\t\t\t\t\t\t\t\t\t<a >Terms of service</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<i class=\"bi bi-dash\"></i>
\t\t\t\t\t\t\t\t\t<a >Privacy policy</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"col-lg-2 col-6 footer-links\">
\t\t\t\t\t\t\t<h4>Our Services</h4>
\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<i class=\"bi bi-dash\"></i>
\t\t\t\t\t\t\t\t\t<a >Web Design</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<i class=\"bi bi-dash\"></i>
\t\t\t\t\t\t\t\t\t<a >Web Development</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<i class=\"bi bi-dash\"></i>
\t\t\t\t\t\t\t\t\t<a >Product Management</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<i class=\"bi bi-dash\"></i>
\t\t\t\t\t\t\t\t\t<a >Marketing</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<i class=\"bi bi-dash\"></i>
\t\t\t\t\t\t\t\t\t<a >Graphic Design</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"col-lg-3 col-md-12 footer-contact text-center text-md-start\">
\t\t\t\t\t\t\t<h4>Contact Us</h4>
\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\tA108 Adam Street
\t\t\t\t\t\t\t\t<br>
\t\t\t\t\t\t\t\tNew York, NY 535022<br>
\t\t\t\t\t\t\t\tUnited States
\t\t\t\t\t\t\t\t<br><br>
\t\t\t\t\t\t\t\t<strong>Phone:</strong>
\t\t\t\t\t\t\t\t+1 5589 55488 55<br>
\t\t\t\t\t\t\t\t<strong>Email:</strong>
\t\t\t\t\t\t\t\tinfo@example.com<br>
\t\t\t\t\t\t\t</p>

\t\t\t\t\t\t</div>

\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>

\t\t\t<div class=\"footer-legal\">
\t\t\t\t<div class=\"container\">
\t\t\t\t\t<div class=\"copyright\">
\t\t\t\t\t\t&copy; Copyright
\t\t\t\t\t\t<strong>
\t\t\t\t\t\t\t<span>Nova</span>
\t\t\t\t\t\t</strong>. All Rights Reserved
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"credits\">
\t\t\t\t\t\t<!-- All the links in the footer should remain intact. -->
\t\t\t\t\t\t<!-- You can delete the links only if you purchased the pro version. -->
\t\t\t\t\t\t<!-- Licensing information: https://bootstrapmade.com/license/ -->
\t\t\t\t\t\t<!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/nova-bootstrap-business-template/ -->
\t\t\t\t\t\tDesigned by<a href=\"https://bootstrapmade.com/\"> BootstrapMade</a>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</footer><!-- End Footer -->
\t\t<!-- End Footer -->

\t\t<a  class=\"scroll-top d-flex align-items-center justify-content-center\">
\t\t\t<i class=\"bi bi-arrow-up-short\"></i>
\t\t</a>

\t\t<div id=\"preloader\"></div>
\t\t";
        // line 294
        $this->displayBlock('javascripts', $context, $blocks);
        // line 308
        echo "\t</body>
</html>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 32
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 33
        echo "\t\t\t";
        echo twig_escape_filter($this->env, $this->env->getFunction('encore_entry_link_tags')->getCallable()("app"), "html", null, true);
        echo "
\t\t\t<!-- Vendor CSS Files -->
\t\t\t<link href=\"";
        // line 35
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/assets/vendor/bootstrap/css/bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
\t\t\t<link href=\"";
        // line 36
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/assets/vendor/bootstrap-icons/bootstrap-icons.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
\t\t\t<link href=\"";
        // line 37
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/assets/vendor/aos/aos.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
\t\t\t<link href=\"";
        // line 38
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/assets/vendor/glightbox/css/glightbox.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
\t\t\t<link href=\"";
        // line 39
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/assets/vendor/swiper/swiper-bundle.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
\t\t\t<link
\t\t\thref=\"front/assets/vendor/remixicon/remixicon.css\" rel=\"stylesheet\">

\t\t\t<!-- Template Main CSS File -->
\t\t\t<link href=\"";
        // line 44
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/assets/css/main.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">

\t\t";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 167
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

    // line 294
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 295
        echo "\t\t\t";
        echo twig_escape_filter($this->env, $this->env->getFunction('encore_entry_script_tags')->getCallable()("app"), "html", null, true);
        echo "
\t\t\t<!-- Vendor JS Files -->
\t\t\t<script src=\"";
        // line 297
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"), "html", null, true);
        echo "\"></script>
\t\t\t<script src=\"";
        // line 298
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/assets/vendor/aos/aos.js"), "html", null, true);
        echo "\"></script>
\t\t\t<script src=\"";
        // line 299
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/assets/vendor/glightbox/js/glightbox.min.js"), "html", null, true);
        echo "\"></script>
\t\t\t<script src=\"";
        // line 300
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/assets/vendor/swiper/swiper-bundle.min.js"), "html", null, true);
        echo "\"></script>
\t\t\t<script src=\"";
        // line 301
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/assets/vendor/isotope-layout/isotope.pkgd.min.js"), "html", null, true);
        echo "\"></script>
\t\t\t<script src=\"";
        // line 302
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/assets/vendor/php-email-form/validate.js"), "html", null, true);
        echo "\"></script>

\t\t\t<!-- Template Main JS File -->
\t\t\t<script src=\"";
        // line 305
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/assets/js/main.js"), "html", null, true);
        echo "\"></script>

\t\t";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "base2.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  512 => 305,  506 => 302,  502 => 301,  498 => 300,  494 => 299,  490 => 298,  486 => 297,  480 => 295,  470 => 294,  452 => 167,  439 => 44,  431 => 39,  427 => 38,  423 => 37,  419 => 36,  415 => 35,  409 => 33,  399 => 32,  388 => 308,  386 => 294,  258 => 168,  256 => 167,  243 => 156,  236 => 152,  230 => 149,  227 => 148,  219 => 142,  217 => 141,  209 => 135,  203 => 133,  201 => 132,  197 => 130,  194 => 129,  160 => 97,  158 => 96,  154 => 95,  149 => 92,  145 => 91,  141 => 90,  138 => 89,  136 => 88,  125 => 80,  119 => 77,  113 => 74,  98 => 62,  81 => 47,  79 => 32,  46 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html>
\t<head>
\t\t<meta charset=\"utf-8\">
\t\t<meta content=\"width=device-width, initial-scale=1.0\" name=\"viewport\">

\t\t<title>Nova Bootstrap Template - Contact</title>
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
\t\t<link
\t\thref=\"https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,600;1,700&family=Montserrat:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Raleway:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap\" rel=\"stylesheet\">


\t\t<!-- =======================================================
\t\t\t\t\t\t  * Template Name: Nova
\t\t\t\t\t\t  * Updated: Mar 10 2023 with Bootstrap v5.2.3
\t\t\t\t\t\t  * Template URL: https://bootstrapmade.com/nova-bootstrap-business-template/
\t\t\t\t\t\t  * Author: BootstrapMade.com
\t\t\t\t\t\t  * License: https://bootstrapmade.com/license/
\t\t\t\t\t\t  ======================================================== -->
\t\t <link rel=\"stylesheet\" href=\"https://cdn.jsdelivr.net/npm/fullcalendar@5.3.0/main.min.css\" integrity=\"sha256-uq9PNlMzB+1h01Ij9cx7zeE2OR2pLAfRw3uUUOOPKdA=\" crossorigin=\"anonymous\">
\t\t{% block stylesheets %}
\t\t\t{{ encore_entry_link_tags('app') }}
\t\t\t<!-- Vendor CSS Files -->
\t\t\t<link href=\"{{asset('front/assets/vendor/bootstrap/css/bootstrap.min.css')}}\" rel=\"stylesheet\">
\t\t\t<link href=\"{{asset('front/assets/vendor/bootstrap-icons/bootstrap-icons.css')}}\" rel=\"stylesheet\">
\t\t\t<link href=\"{{asset('front/assets/vendor/aos/aos.css')}}\" rel=\"stylesheet\">
\t\t\t<link href=\"{{asset('front/assets/vendor/glightbox/css/glightbox.min.css')}}\" rel=\"stylesheet\">
\t\t\t<link href=\"{{asset('front/assets/vendor/swiper/swiper-bundle.min.css')}}\" rel=\"stylesheet\">
\t\t\t<link
\t\t\thref=\"front/assets/vendor/remixicon/remixicon.css\" rel=\"stylesheet\">

\t\t\t<!-- Template Main CSS File -->
\t\t\t<link href=\"{{asset('front/assets/css/main.css')}}\" rel=\"stylesheet\">

\t\t{% endblock %}


\t</head>
\t<body>
\t\t\t<script src=\"https://cdn.jsdelivr.net/npm/fullcalendar@5.3.0/main.min.js\" 
\t\t\tintegrity=\"sha256-DBxkGZLxKsLKhz054qUpBqtotG00r9AELGpSigJujLg=\" crossorigin=\"anonymous\"></script>

\t

<script>
</script>
    <!-- ======= Header ======= -->
  <header id=\"header\" class=\"header d-flex align-items-center fixed-top\" style=\"margin-bottom:8%;background: rgba(27, 47, 69, 0.9);padding: 15px;\">
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

  <!-- ======= Breadcrumbs ======= -->

   <main id=\"main\">
\t\t{% block body %}{% endblock %}

        </main><!-- End #main -->
\t\t<!-- ======= Footer ======= -->
\t\t<footer id=\"footer\" class=\"footer\">

\t\t\t<div class=\"footer-content\">
\t\t\t\t<div class=\"container\">
\t\t\t\t\t<div class=\"row gy-4\">
\t\t\t\t\t\t<div class=\"col-lg-5 col-md-12 footer-info\">
\t\t\t\t\t\t\t<a href=\"index.html\" class=\"logo d-flex align-items-center\">
\t\t\t\t\t\t\t\t<span>Nova</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t<p>Cras fermentum odio eu feugiat lide par naso tierra. Justo eget nada terra videa magna derita valies darta donna mare fermentum iaculis eu non diam phasellus.</p>
\t\t\t\t\t\t\t<div class=\"social-links d-flex  mt-3\">
\t\t\t\t\t\t\t\t<a  class=\"twitter\">
\t\t\t\t\t\t\t\t\t<i class=\"bi bi-twitter\"></i>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t<a  class=\"facebook\">
\t\t\t\t\t\t\t\t\t<i class=\"bi bi-facebook\"></i>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t<a  class=\"instagram\">
\t\t\t\t\t\t\t\t\t<i class=\"bi bi-instagram\"></i>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t<a  class=\"linkedin\">
\t\t\t\t\t\t\t\t\t<i class=\"bi bi-linkedin\"></i>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"col-lg-2 col-6 footer-links\">
\t\t\t\t\t\t\t<h4>Useful Links</h4>
\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<i class=\"bi bi-dash\"></i>
\t\t\t\t\t\t\t\t\t<a >Home</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<i class=\"bi bi-dash\"></i>
\t\t\t\t\t\t\t\t\t<a >About us</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<i class=\"bi bi-dash\"></i>
\t\t\t\t\t\t\t\t\t<a >Services</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<i class=\"bi bi-dash\"></i>
\t\t\t\t\t\t\t\t\t<a >Terms of service</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<i class=\"bi bi-dash\"></i>
\t\t\t\t\t\t\t\t\t<a >Privacy policy</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"col-lg-2 col-6 footer-links\">
\t\t\t\t\t\t\t<h4>Our Services</h4>
\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<i class=\"bi bi-dash\"></i>
\t\t\t\t\t\t\t\t\t<a >Web Design</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<i class=\"bi bi-dash\"></i>
\t\t\t\t\t\t\t\t\t<a >Web Development</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<i class=\"bi bi-dash\"></i>
\t\t\t\t\t\t\t\t\t<a >Product Management</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<i class=\"bi bi-dash\"></i>
\t\t\t\t\t\t\t\t\t<a >Marketing</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<i class=\"bi bi-dash\"></i>
\t\t\t\t\t\t\t\t\t<a >Graphic Design</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"col-lg-3 col-md-12 footer-contact text-center text-md-start\">
\t\t\t\t\t\t\t<h4>Contact Us</h4>
\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\tA108 Adam Street
\t\t\t\t\t\t\t\t<br>
\t\t\t\t\t\t\t\tNew York, NY 535022<br>
\t\t\t\t\t\t\t\tUnited States
\t\t\t\t\t\t\t\t<br><br>
\t\t\t\t\t\t\t\t<strong>Phone:</strong>
\t\t\t\t\t\t\t\t+1 5589 55488 55<br>
\t\t\t\t\t\t\t\t<strong>Email:</strong>
\t\t\t\t\t\t\t\tinfo@example.com<br>
\t\t\t\t\t\t\t</p>

\t\t\t\t\t\t</div>

\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>

\t\t\t<div class=\"footer-legal\">
\t\t\t\t<div class=\"container\">
\t\t\t\t\t<div class=\"copyright\">
\t\t\t\t\t\t&copy; Copyright
\t\t\t\t\t\t<strong>
\t\t\t\t\t\t\t<span>Nova</span>
\t\t\t\t\t\t</strong>. All Rights Reserved
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"credits\">
\t\t\t\t\t\t<!-- All the links in the footer should remain intact. -->
\t\t\t\t\t\t<!-- You can delete the links only if you purchased the pro version. -->
\t\t\t\t\t\t<!-- Licensing information: https://bootstrapmade.com/license/ -->
\t\t\t\t\t\t<!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/nova-bootstrap-business-template/ -->
\t\t\t\t\t\tDesigned by<a href=\"https://bootstrapmade.com/\"> BootstrapMade</a>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</footer><!-- End Footer -->
\t\t<!-- End Footer -->

\t\t<a  class=\"scroll-top d-flex align-items-center justify-content-center\">
\t\t\t<i class=\"bi bi-arrow-up-short\"></i>
\t\t</a>

\t\t<div id=\"preloader\"></div>
\t\t{% block javascripts %}
\t\t\t{{ encore_entry_script_tags('app') }}
\t\t\t<!-- Vendor JS Files -->
\t\t\t<script src=\"{{asset('front/assets/vendor/bootstrap/js/bootstrap.bundle.min.js')}}\"></script>
\t\t\t<script src=\"{{asset('front/assets/vendor/aos/aos.js')}}\"></script>
\t\t\t<script src=\"{{asset('front/assets/vendor/glightbox/js/glightbox.min.js')}}\"></script>
\t\t\t<script src=\"{{asset('front/assets/vendor/swiper/swiper-bundle.min.js')}}\"></script>
\t\t\t<script src=\"{{asset('front/assets/vendor/isotope-layout/isotope.pkgd.min.js')}}\"></script>
\t\t\t<script src=\"{{asset('front/assets/vendor/php-email-form/validate.js')}}\"></script>

\t\t\t<!-- Template Main JS File -->
\t\t\t<script src=\"{{asset('front/assets/js/main.js')}}\"></script>

\t\t{% endblock %}
\t</body>
</html>", "base2.html.twig", "C:\\Users\\aymen\\Desktop\\gitprojet\\digidreamers\\templates\\base2.html.twig");
    }
}
