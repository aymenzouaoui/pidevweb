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

/* accueil/index.html.twig */
class __TwigTemplate_3c219c91f97c4ebf1c88f6d57ce9795a extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "accueil/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "accueil/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "accueil/index.html.twig", 1);
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

        echo "Hello AccueilController!";
        
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
        echo "<style>
    .example-wrapper { margin: 1em auto; max-width: 800px; width: 95%; font: 18px/1.5 sans-serif; }
    .example-wrapper code { background: #F5F5F5; padding: 2px 6px; }
</style>
  <main id=\"main\">
    <!-- ======= Hero Section ======= -->
  <section id=\"hero\" class=\"hero d-flex align-items-center\">
    <div class=\"container\">
      <div class=\"row\">
        <div class=\"col-xl-4\">
          <h2 data-aos=\"fade-up\">Expédier n'a jamais été aussi simple!</h2>
          <blockquote data-aos=\"fade-up\" data-aos-delay=\"100\">
            <p>\"Connectez-vous avec les meilleurs transporteurs pour des livraisons efficaces - en toute simplicité!\"</p>
          </blockquote>
          <div class=\"d-flex\" data-aos=\"fade-up\" data-aos-delay=\"200\">
            <a href=\"";
        // line 21
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
        echo "\" class=\"btn-get-started\">Commencer !</a>
          </div>

        </div>
      </div>
    </div>
  </section><!-- End Hero Section -->
    <!-- ======= Why Choose Us Section ======= -->
    <section id=\"why-us\" class=\"why-us\">
      <div class=\"container\" data-aos=\"fade-up\">

        <div class=\"section-header\">
          <h2>Pourquoi nous</h2>

        </div>

        <div class=\"row g-0\" data-aos=\"fade-up\" data-aos-delay=\"200\">

          <div class=\"col-xl-5 img-bg\" style=\"background-image: url('front/assets/img/her.png')\"></div>
          <div class=\"col-xl-7 slides  position-relative\">

            <div class=\"slides-1 swiper\">
              <div class=\"swiper-wrapper\">

                <div class=\"swiper-slide\">
                  <div class=\"item\">
                    <h3 class=\"mb-3\">Une solution rapide, efficace et économique pour vos expéditions</h3>
                    <h4 class=\"mb-3\">Notre site est le partenaire idéal pour les expéditeurs et les transporteurs qui cherchent à optimiser leur logistique.</h4>
                    <p>Nous offrons un service de mise en relation rapide et efficace entre les expéditeurs et les transporteurs fiables et expérimentés. Grâce à notre plateforme en ligne facile à utiliser, vous pouvez trouver le transporteur idéal pour votre envoi en quelques clics seulement, sans avoir à passer des heures à chercher. Nous sommes engagés à offrir un service de qualité supérieure, avec une attention particulière à la sécurité et à la ponctualité de chaque expédition.</p>
                  </div>
                </div><!-- End slide item -->

                <div class=\"swiper-slide\">
                  <div class=\"item\">
                    <h3 class=\"mb-3\">Une expertise en logistique pour des expéditions sans stress</h3>
                    <p>Avec notre expertise en matière de logistique et notre engagement envers la satisfaction de nos clients, nous sommes la solution idéale pour répondre à tous vos besoins d'expédition.</p>
                  </div>
                </div><!-- End slide item -->

                <div class=\"swiper-slide\">
                  <div class=\"item\">
                    <h3 class=\"mb-3\">Une offre de location économique pour étendre votre flotte de transporteurs</h3>
                    <p>Nous offrons également une offre de location de véhicules à des prix avantageux pour les transporteurs, pour leur permettre d'étendre leur flotte de manière économique et efficace.</p>
                  </div>
                </div><!-- End slide item -->


              </div>
              <div class=\"swiper-pagination\"></div>
            </div>
            <div class=\"swiper-button-prev\"></div>
            <div class=\"swiper-button-next\"></div>
          </div>

        </div>

      </div>
    </section><!-- End Why Choose Us Section -->

    
    <section id=\"services-list\" class=\"services-list\">
      <div class=\"container\" data-aos=\"fade-up\">

        <div class=\"section-header\">
          <h2>Notre services</h2>

        </div>

        <div class=\"row gy-5\">

          <div class=\"col-lg-4 col-md-6 service-item d-flex\" data-aos=\"fade-up\" data-aos-delay=\"100\">
            <div class=\"icon flex-shrink-0\"><i class=\"bi bi-briefcase\" style=\"color: #f57813;\"></i></div>
            <div>
              <h4 class=\"title\"><a href=\"#\" class=\"stretched-link\">Mise en relation</a></h4>
              <p class=\"description\">Mise en relation des expéditeurs avec les transporteurs pour des services d'expédition de colis et de marchandises.</p>
            </div>
          </div>
          <!-- End Service Item -->

          <div class=\"col-lg-4 col-md-6 service-item d-flex\" data-aos=\"fade-up\" data-aos-delay=\"200\">
            <div class=\"icon flex-shrink-0\"><i class=\"bi bi-card-checklist\" style=\"color: #15a04a;\"></i></div>
            <div>
              <h4 class=\"title\"><a href=\"#\" class=\"stretched-link\">Location avantageuse</a></h4>
              <p class=\"description\">Offre de location de véhicules pour les transporteurs à des prix avantageux.</p>
            </div>
          </div><!-- End Service Item -->

          <div class=\"col-lg-4 col-md-6 service-item d-flex\" data-aos=\"fade-up\" data-aos-delay=\"300\">
            <div class=\"icon flex-shrink-0\"><i class=\"bi bi-bar-chart\" style=\"color: #d90769;\"></i></div>
            <div>
              <h4 class=\"title\"><a href=\"#\" class=\"stretched-link\">Compétitions et Cadeaux</a></h4>
              <p class=\"description\">Possibilité pour les transporteurs de participer à des compétitions pour gagner des cadeaux.</p>
            </div>
          </div><!-- End Service Item -->

          <div class=\"col-lg-4 col-md-6 service-item d-flex\" data-aos=\"fade-up\" data-aos-delay=\"400\">
            <div class=\"icon flex-shrink-0\"><i class=\"bi bi-binoculars\" style=\"color: #15bfbc;\"></i></div>
            <div>
              <h4 class=\"title\"><a href=\"#\" class=\"stretched-link\">Plateforme facile</a></h4>
              <p class=\"description\">Plateforme en ligne facile à utiliser pour trouver rapidement le transporteur idéal.</p>
            </div>
          </div><!-- End Service Item -->

          <div class=\"col-lg-4 col-md-6 service-item d-flex\" data-aos=\"fade-up\" data-aos-delay=\"500\">
            <div class=\"icon flex-shrink-0\"><i class=\"bi bi-brightness-high\" style=\"color: #f5cf13;\"></i></div>
            <div>
              <h4 class=\"title\"><a href=\"#\" class=\"stretched-link\">Transport sécurisé</a></h4>
              <p class=\"description\">Transport sécurisé et ponctuel pour chaque expédition.</p>
            </div>
          </div><!-- End Service Item -->

          <div class=\"col-lg-4 col-md-6 service-item d-flex\" data-aos=\"fade-up\" data-aos-delay=\"600\">
            <div class=\"icon flex-shrink-0\"><i class=\"bi bi-calendar4-week\" style=\"color: #1335f5;\"></i></div>
            <div>
              <h4 class=\"title\"><a href=\"#\" class=\"stretched-link\">Service de qualité</a></h4>
              <p class=\"description\">Services de qualité supérieure pour la satisfaction des clients.</p>
            </div>
          </div><!-- End Service Item -->

        </div>

      </div>
    </section><!-- End Our Services Section -->

    <!-- ======= Call To Action Section ======= -->
    <section id=\"call-to-action\" class=\"call-to-action\">
      <div class=\"container\" data-aos=\"fade-up\">
        <div class=\"row justify-content-center\">
          <div class=\"col-lg-6 text-center\">
            <h3>Des cadeaux à gagner</h3>
            <p>Les compétitions sont une excellente occasion pour les transporteurs de démontrer leur expertise, leur professionnalisme et leur engagement envers l'excellence dans leur domaine. Participer à des compétitions de transport vous permettra non seulement de vous mesurer aux autres professionnels de l'industrie, mais également de développer vos compétences et de renforcer votre confiance en vous. De plus, vous pouvez établir des relations avec d'autres transporteurs et créer des liens précieux dans le secteur. Ne manquez pas cette opportunité de montrer vos compétences et de faire partie d'une communauté de transporteurs passionnés. Rejoignez-nous dans notre prochaine compétition et prenez votre place sur la scène du transport.</p>
            <a class=\"cta-btn\" href=\"";
        // line 152
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_front_competition");
        echo "\" >Participer maintenant</a>
          </div>
        </div>

      </div>
    </section><!-- End Call To Action Section -->
  </main><!-- End #main -->
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "accueil/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  239 => 152,  105 => 21,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Hello AccueilController!{% endblock %}

{% block body %}
<style>
    .example-wrapper { margin: 1em auto; max-width: 800px; width: 95%; font: 18px/1.5 sans-serif; }
    .example-wrapper code { background: #F5F5F5; padding: 2px 6px; }
</style>
  <main id=\"main\">
    <!-- ======= Hero Section ======= -->
  <section id=\"hero\" class=\"hero d-flex align-items-center\">
    <div class=\"container\">
      <div class=\"row\">
        <div class=\"col-xl-4\">
          <h2 data-aos=\"fade-up\">Expédier n'a jamais été aussi simple!</h2>
          <blockquote data-aos=\"fade-up\" data-aos-delay=\"100\">
            <p>\"Connectez-vous avec les meilleurs transporteurs pour des livraisons efficaces - en toute simplicité!\"</p>
          </blockquote>
          <div class=\"d-flex\" data-aos=\"fade-up\" data-aos-delay=\"200\">
            <a href=\"{{ path('app_login') }}\" class=\"btn-get-started\">Commencer !</a>
          </div>

        </div>
      </div>
    </div>
  </section><!-- End Hero Section -->
    <!-- ======= Why Choose Us Section ======= -->
    <section id=\"why-us\" class=\"why-us\">
      <div class=\"container\" data-aos=\"fade-up\">

        <div class=\"section-header\">
          <h2>Pourquoi nous</h2>

        </div>

        <div class=\"row g-0\" data-aos=\"fade-up\" data-aos-delay=\"200\">

          <div class=\"col-xl-5 img-bg\" style=\"background-image: url('front/assets/img/her.png')\"></div>
          <div class=\"col-xl-7 slides  position-relative\">

            <div class=\"slides-1 swiper\">
              <div class=\"swiper-wrapper\">

                <div class=\"swiper-slide\">
                  <div class=\"item\">
                    <h3 class=\"mb-3\">Une solution rapide, efficace et économique pour vos expéditions</h3>
                    <h4 class=\"mb-3\">Notre site est le partenaire idéal pour les expéditeurs et les transporteurs qui cherchent à optimiser leur logistique.</h4>
                    <p>Nous offrons un service de mise en relation rapide et efficace entre les expéditeurs et les transporteurs fiables et expérimentés. Grâce à notre plateforme en ligne facile à utiliser, vous pouvez trouver le transporteur idéal pour votre envoi en quelques clics seulement, sans avoir à passer des heures à chercher. Nous sommes engagés à offrir un service de qualité supérieure, avec une attention particulière à la sécurité et à la ponctualité de chaque expédition.</p>
                  </div>
                </div><!-- End slide item -->

                <div class=\"swiper-slide\">
                  <div class=\"item\">
                    <h3 class=\"mb-3\">Une expertise en logistique pour des expéditions sans stress</h3>
                    <p>Avec notre expertise en matière de logistique et notre engagement envers la satisfaction de nos clients, nous sommes la solution idéale pour répondre à tous vos besoins d'expédition.</p>
                  </div>
                </div><!-- End slide item -->

                <div class=\"swiper-slide\">
                  <div class=\"item\">
                    <h3 class=\"mb-3\">Une offre de location économique pour étendre votre flotte de transporteurs</h3>
                    <p>Nous offrons également une offre de location de véhicules à des prix avantageux pour les transporteurs, pour leur permettre d'étendre leur flotte de manière économique et efficace.</p>
                  </div>
                </div><!-- End slide item -->


              </div>
              <div class=\"swiper-pagination\"></div>
            </div>
            <div class=\"swiper-button-prev\"></div>
            <div class=\"swiper-button-next\"></div>
          </div>

        </div>

      </div>
    </section><!-- End Why Choose Us Section -->

    
    <section id=\"services-list\" class=\"services-list\">
      <div class=\"container\" data-aos=\"fade-up\">

        <div class=\"section-header\">
          <h2>Notre services</h2>

        </div>

        <div class=\"row gy-5\">

          <div class=\"col-lg-4 col-md-6 service-item d-flex\" data-aos=\"fade-up\" data-aos-delay=\"100\">
            <div class=\"icon flex-shrink-0\"><i class=\"bi bi-briefcase\" style=\"color: #f57813;\"></i></div>
            <div>
              <h4 class=\"title\"><a href=\"#\" class=\"stretched-link\">Mise en relation</a></h4>
              <p class=\"description\">Mise en relation des expéditeurs avec les transporteurs pour des services d'expédition de colis et de marchandises.</p>
            </div>
          </div>
          <!-- End Service Item -->

          <div class=\"col-lg-4 col-md-6 service-item d-flex\" data-aos=\"fade-up\" data-aos-delay=\"200\">
            <div class=\"icon flex-shrink-0\"><i class=\"bi bi-card-checklist\" style=\"color: #15a04a;\"></i></div>
            <div>
              <h4 class=\"title\"><a href=\"#\" class=\"stretched-link\">Location avantageuse</a></h4>
              <p class=\"description\">Offre de location de véhicules pour les transporteurs à des prix avantageux.</p>
            </div>
          </div><!-- End Service Item -->

          <div class=\"col-lg-4 col-md-6 service-item d-flex\" data-aos=\"fade-up\" data-aos-delay=\"300\">
            <div class=\"icon flex-shrink-0\"><i class=\"bi bi-bar-chart\" style=\"color: #d90769;\"></i></div>
            <div>
              <h4 class=\"title\"><a href=\"#\" class=\"stretched-link\">Compétitions et Cadeaux</a></h4>
              <p class=\"description\">Possibilité pour les transporteurs de participer à des compétitions pour gagner des cadeaux.</p>
            </div>
          </div><!-- End Service Item -->

          <div class=\"col-lg-4 col-md-6 service-item d-flex\" data-aos=\"fade-up\" data-aos-delay=\"400\">
            <div class=\"icon flex-shrink-0\"><i class=\"bi bi-binoculars\" style=\"color: #15bfbc;\"></i></div>
            <div>
              <h4 class=\"title\"><a href=\"#\" class=\"stretched-link\">Plateforme facile</a></h4>
              <p class=\"description\">Plateforme en ligne facile à utiliser pour trouver rapidement le transporteur idéal.</p>
            </div>
          </div><!-- End Service Item -->

          <div class=\"col-lg-4 col-md-6 service-item d-flex\" data-aos=\"fade-up\" data-aos-delay=\"500\">
            <div class=\"icon flex-shrink-0\"><i class=\"bi bi-brightness-high\" style=\"color: #f5cf13;\"></i></div>
            <div>
              <h4 class=\"title\"><a href=\"#\" class=\"stretched-link\">Transport sécurisé</a></h4>
              <p class=\"description\">Transport sécurisé et ponctuel pour chaque expédition.</p>
            </div>
          </div><!-- End Service Item -->

          <div class=\"col-lg-4 col-md-6 service-item d-flex\" data-aos=\"fade-up\" data-aos-delay=\"600\">
            <div class=\"icon flex-shrink-0\"><i class=\"bi bi-calendar4-week\" style=\"color: #1335f5;\"></i></div>
            <div>
              <h4 class=\"title\"><a href=\"#\" class=\"stretched-link\">Service de qualité</a></h4>
              <p class=\"description\">Services de qualité supérieure pour la satisfaction des clients.</p>
            </div>
          </div><!-- End Service Item -->

        </div>

      </div>
    </section><!-- End Our Services Section -->

    <!-- ======= Call To Action Section ======= -->
    <section id=\"call-to-action\" class=\"call-to-action\">
      <div class=\"container\" data-aos=\"fade-up\">
        <div class=\"row justify-content-center\">
          <div class=\"col-lg-6 text-center\">
            <h3>Des cadeaux à gagner</h3>
            <p>Les compétitions sont une excellente occasion pour les transporteurs de démontrer leur expertise, leur professionnalisme et leur engagement envers l'excellence dans leur domaine. Participer à des compétitions de transport vous permettra non seulement de vous mesurer aux autres professionnels de l'industrie, mais également de développer vos compétences et de renforcer votre confiance en vous. De plus, vous pouvez établir des relations avec d'autres transporteurs et créer des liens précieux dans le secteur. Ne manquez pas cette opportunité de montrer vos compétences et de faire partie d'une communauté de transporteurs passionnés. Rejoignez-nous dans notre prochaine compétition et prenez votre place sur la scène du transport.</p>
            <a class=\"cta-btn\" href=\"{{ path('app_front_competition') }}\" >Participer maintenant</a>
          </div>
        </div>

      </div>
    </section><!-- End Call To Action Section -->
  </main><!-- End #main -->
{% endblock %}", "accueil/index.html.twig", "C:\\Users\\aymen\\Desktop\\gitprojet\\digidreamers\\templates\\accueil\\index.html.twig");
    }
}
