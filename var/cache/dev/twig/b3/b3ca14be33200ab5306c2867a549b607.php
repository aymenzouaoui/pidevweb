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

/* terms.html.twig */
class __TwigTemplate_52c789277dde39b1fe2a41898724a492 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'content' => [$this, 'block_content'],
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "terms.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "terms.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "terms.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 4
        echo "
    <!-- ======= Breadcrumbs ======= -->
    <section class=\"breadcrumbs\">
        <div class=\"container\">

            <div class=\"d-flex justify-content-between align-items-center\">
                <h2>Conditions d'utilisation</h2>
                <ol>
                    <li><a href=\"";
        // line 12
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("home");
        echo "\">Accueil</a></li>
                    <li>Conditions d'utilisation</li>
                </ol>
            </div>

        </div>
    </section><!-- End Breadcrumbs -->

    <!-- ======= Terms Section ======= -->
    <section class=\"terms\">
        <div class=\"container\">

            <div class=\"row\">
                <div class=\"col-lg-12\">
                    <h3 class=\"terms-title\">Conditions d'utilisation</h3>
                    <p class=\"terms-text\">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed at nunc massa. Integer luctus justo vel purus dignissim, in vestibulum neque lacinia. Curabitur venenatis tellus at quam maximus tristique. Nulla feugiat diam enim, a gravida elit bibendum et. Donec eu felis eget enim suscipit viverra nec quis nulla. In hac habitasse platea dictumst. Praesent id venenatis mi. Praesent eget nulla ac ipsum aliquet fringilla.
                    </p>
                    <p class=\"terms-text\">
                        Maecenas et enim massa. Nullam facilisis risus sit amet risus molestie pretium. Suspendisse euismod nec mi sit amet sagittis. In iaculis bibendum libero, ac commodo tellus imperdiet vitae. Aliquam bibendum massa id felis iaculis, non cursus elit malesuada. Sed vel imperdiet ex. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Sed fringilla eros ac mi volutpat lacinia.
                    </p>
                    <p class=\"terms-text\">
                        Nunc congue id lacus ac egestas. Aliquam erat volutpat. Sed eget magna lacus. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Morbi venenatis velit vel euismod pharetra. Pellentesque eget iaculis diam. Etiam lacinia commodo orci, quis mollis ante ultrices ut. Aliquam rutrum urna a ipsum cursus, in commodo elit semper. Curabitur at risus ipsum. Proin fermentum efficitur mauris a semper. Sed commodo dolor turpis, sed imperdiet mi volutpat nec.
                    </p>
                </div>
            </div>

        </div>
    </section><!-- End Terms Section -->

";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "terms.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  68 => 4,  58 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block content %}

    <!-- ======= Breadcrumbs ======= -->
    <section class=\"breadcrumbs\">
        <div class=\"container\">

            <div class=\"d-flex justify-content-between align-items-center\">
                <h2>Conditions d'utilisation</h2>
                <ol>
                    <li><a href=\"{{ path('home') }}\">Accueil</a></li>
                    <li>Conditions d'utilisation</li>
                </ol>
            </div>

        </div>
    </section><!-- End Breadcrumbs -->

    <!-- ======= Terms Section ======= -->
    <section class=\"terms\">
        <div class=\"container\">

            <div class=\"row\">
                <div class=\"col-lg-12\">
                    <h3 class=\"terms-title\">Conditions d'utilisation</h3>
                    <p class=\"terms-text\">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed at nunc massa. Integer luctus justo vel purus dignissim, in vestibulum neque lacinia. Curabitur venenatis tellus at quam maximus tristique. Nulla feugiat diam enim, a gravida elit bibendum et. Donec eu felis eget enim suscipit viverra nec quis nulla. In hac habitasse platea dictumst. Praesent id venenatis mi. Praesent eget nulla ac ipsum aliquet fringilla.
                    </p>
                    <p class=\"terms-text\">
                        Maecenas et enim massa. Nullam facilisis risus sit amet risus molestie pretium. Suspendisse euismod nec mi sit amet sagittis. In iaculis bibendum libero, ac commodo tellus imperdiet vitae. Aliquam bibendum massa id felis iaculis, non cursus elit malesuada. Sed vel imperdiet ex. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Sed fringilla eros ac mi volutpat lacinia.
                    </p>
                    <p class=\"terms-text\">
                        Nunc congue id lacus ac egestas. Aliquam erat volutpat. Sed eget magna lacus. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Morbi venenatis velit vel euismod pharetra. Pellentesque eget iaculis diam. Etiam lacinia commodo orci, quis mollis ante ultrices ut. Aliquam rutrum urna a ipsum cursus, in commodo elit semper. Curabitur at risus ipsum. Proin fermentum efficitur mauris a semper. Sed commodo dolor turpis, sed imperdiet mi volutpat nec.
                    </p>
                </div>
            </div>

        </div>
    </section><!-- End Terms Section -->

{% endblock %}
", "terms.html.twig", "C:\\Users\\aymen\\Desktop\\gitprojet\\digidreamers\\templates\\terms.html.twig");
    }
}
