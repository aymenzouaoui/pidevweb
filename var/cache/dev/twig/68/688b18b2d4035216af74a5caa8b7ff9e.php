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

/* front_competition/showdetailscadeau.html.twig */
class __TwigTemplate_dfd1e5eabde3cc8130fa9716e6994787 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "front_competition/showdetailscadeau.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "front_competition/showdetailscadeau.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "front_competition/showdetailscadeau.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 2
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "<!-- ======= Breadcrumbs ======= -->
    <div class=\"breadcrumbs d-flex align-items-center\" style=\"background-image: url('assets/img/contact-header.jpg');\">
      <div class=\"container position-relative d-flex flex-column align-items-center\">
          <li><a href=\"";
        // line 6
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_accueil");
        echo "\">Accueil</a></li>
        <h2>Gamification</h2>
      </div>
    </div><!-- End Breadcrumbs -->

    <div class=\"container-fluid container-xl d-flex align-items-center justify-content-between\">

      
    </div>
  </header><!-- End Header -->

  <main id=\"main\">

  

    <!-- ======= Portfolio Details Section ======= -->
    <section id=\"portfolio-details\" class=\"portfolio-details\">
      <div class=\"container\" data-aos=\"fade-up\">
    <div class=\"row gy-4\" style=\"height: 400px;\">
      <div class=\"col-lg-8\" style=\"height: 100%;\">
        <div style=\"height: 100%;\">
          <div class=\"swiper-wrapper align-items-center\" style=\"height: 100%;\">
            <div class=\"swiper-slide\" style=\"height: 100%;\">
              <img style=\"width:100%;height:100%;\" src=\"";
        // line 29
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["gifts"]) || array_key_exists("gifts", $context) ? $context["gifts"] : (function () { throw new RuntimeError('Variable "gifts" does not exist.', 29, $this->source); })()), "photo", [], "any", false, false, false, 29), "html", null, true);
        echo "\">
            </div>
          </div>
          <div class=\"swiper-pagination\"></div>
        </div>
      </div>
          <div class=\"col-lg-4\">
            <div class=\"portfolio-info\">
              <h3>";
        // line 37
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["gifts"]) || array_key_exists("gifts", $context) ? $context["gifts"] : (function () { throw new RuntimeError('Variable "gifts" does not exist.', 37, $this->source); })()), "name", [], "any", false, false, false, 37), "html", null, true);
        echo "</h3>
              <ul>
                <li><strong>Description</strong>: ";
        // line 39
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["gifts"]) || array_key_exists("gifts", $context) ? $context["gifts"] : (function () { throw new RuntimeError('Variable "gifts" does not exist.', 39, $this->source); })()), "description", [], "any", false, false, false, 39), "html", null, true);
        echo "</li>
                <li><strong>Valeur</strong>: ";
        // line 40
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["gifts"]) || array_key_exists("gifts", $context) ? $context["gifts"] : (function () { throw new RuntimeError('Variable "gifts" does not exist.', 40, $this->source); })()), "value", [], "any", false, false, false, 40), "html", null, true);
        echo "</li>
               <a href=\"";
        // line 41
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("exchange_gift", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["gifts"]) || array_key_exists("gifts", $context) ? $context["gifts"] : (function () { throw new RuntimeError('Variable "gifts" does not exist.', 41, $this->source); })()), "id", [], "any", false, false, false, 41)]), "html", null, true);
        echo "\" class=\"btn btn-sm btn-outline-secondary\" id=\"exchange-btn\" >Echanger</a>
             
              </ul>
            </div>
            <div class=\"portfolio-description\">
         <img src=\"";
        // line 46
        echo twig_escape_filter($this->env, (isset($context["qr"]) || array_key_exists("qr", $context) ? $context["qr"] : (function () { throw new RuntimeError('Variable "qr" does not exist.', 46, $this->source); })()), "html", null, true);
        echo "\" alt=\"QR code\" style=\"height:50%;width:50%\"  class=\"center\" />
            </div>
          </div>

        </div>

      </div>
      <br><br>
<br><br>
<br><br>
    </section><!-- End Portfolio Details Section -->

  </main><!-- End #main -->
  <script>
    function deductDiamonds(value) {
      // code to deduct diamonds from user's account
      // value parameter will contain the gift value
      // make an AJAX request to the server to deduct the appropriate amount of diamonds
      alert(value);
    }
  </script>
</body>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "front_competition/showdetailscadeau.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  131 => 46,  123 => 41,  119 => 40,  115 => 39,  110 => 37,  99 => 29,  73 => 6,  68 => 3,  58 => 2,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}
{% block body %}
<!-- ======= Breadcrumbs ======= -->
    <div class=\"breadcrumbs d-flex align-items-center\" style=\"background-image: url('assets/img/contact-header.jpg');\">
      <div class=\"container position-relative d-flex flex-column align-items-center\">
          <li><a href=\"{{path('app_accueil')}}\">Accueil</a></li>
        <h2>Gamification</h2>
      </div>
    </div><!-- End Breadcrumbs -->

    <div class=\"container-fluid container-xl d-flex align-items-center justify-content-between\">

      
    </div>
  </header><!-- End Header -->

  <main id=\"main\">

  

    <!-- ======= Portfolio Details Section ======= -->
    <section id=\"portfolio-details\" class=\"portfolio-details\">
      <div class=\"container\" data-aos=\"fade-up\">
    <div class=\"row gy-4\" style=\"height: 400px;\">
      <div class=\"col-lg-8\" style=\"height: 100%;\">
        <div style=\"height: 100%;\">
          <div class=\"swiper-wrapper align-items-center\" style=\"height: 100%;\">
            <div class=\"swiper-slide\" style=\"height: 100%;\">
              <img style=\"width:100%;height:100%;\" src=\"{{ gifts.photo }}\">
            </div>
          </div>
          <div class=\"swiper-pagination\"></div>
        </div>
      </div>
          <div class=\"col-lg-4\">
            <div class=\"portfolio-info\">
              <h3>{{gifts.name}}</h3>
              <ul>
                <li><strong>Description</strong>: {{gifts.description}}</li>
                <li><strong>Valeur</strong>: {{gifts.value}}</li>
               <a href=\"{{ path('exchange_gift',{'id' : gifts.id})}}\" class=\"btn btn-sm btn-outline-secondary\" id=\"exchange-btn\" >Echanger</a>
             
              </ul>
            </div>
            <div class=\"portfolio-description\">
         <img src=\"{{ qr }}\" alt=\"QR code\" style=\"height:50%;width:50%\"  class=\"center\" />
            </div>
          </div>

        </div>

      </div>
      <br><br>
<br><br>
<br><br>
    </section><!-- End Portfolio Details Section -->

  </main><!-- End #main -->
  <script>
    function deductDiamonds(value) {
      // code to deduct diamonds from user's account
      // value parameter will contain the gift value
      // make an AJAX request to the server to deduct the appropriate amount of diamonds
      alert(value);
    }
  </script>
</body>
{% endblock %}
", "front_competition/showdetailscadeau.html.twig", "C:\\Users\\aymen\\Desktop\\gitprojet\\digidreamers\\templates\\front_competition\\showdetailscadeau.html.twig");
    }
}
