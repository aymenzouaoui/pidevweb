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

/* front_competition/cadeauxcompetition.html.twig */
class __TwigTemplate_03b28e1ed00cba03256cb91b8d4cf0bb extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "front_competition/cadeauxcompetition.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "front_competition/cadeauxcompetition.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "front_competition/cadeauxcompetition.html.twig", 1);
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

        echo "Gifts ";
        
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
        echo "<!-- ======= Breadcrumbs ======= -->
    <div class=\"breadcrumbs d-flex align-items-center\" style=\"background-image: url('assets/img/contact-header.jpg');\">
      <div class=\"container position-relative d-flex flex-column align-items-center\">
          <li><a href=\"";
        // line 10
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_accueil");
        echo "\">Accueil</a></li>
        <h2>Gamification</h2>
      </div>
    </div><!-- End Breadcrumbs -->
 <div class=\"container\">
        <div class=\"py-2 text-center\">
            <h2>Bienvenue sur la liste des cadeaux: (";
        // line 16
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["gifts"]) || array_key_exists("gifts", $context) ? $context["gifts"] : (function () { throw new RuntimeError('Variable "gifts" does not exist.', 16, $this->source); })()), "getTotalItemCount", [], "any", false, false, false, 16), "html", null, true);
        echo ")</h2>
            <p>Votre score actuel est : ";
        // line 17
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 17, $this->source); })()), "score", [], "any", false, false, false, 17), "html", null, true);
        echo "</p>
            <button type=\"button\" class=\"btn btn-sm btn-primary\" onclick=\"onConvertButtonClick(";
        // line 18
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 18, $this->source); })()), "score", [], "any", false, false, false, 18), "html", null, true);
        echo ")\">Convertir</button>
            <span id=\"diamonds\"></span>
        </div>
    <a href=\"";
        // line 21
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_gifts_index");
        echo "\" style=\"color: #00b4d8; font-size: 2.0em; text-decoration: none;\" >Gifts</a>

    <div class=\"row\">
        ";
        // line 24
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["gifts"]) || array_key_exists("gifts", $context) ? $context["gifts"] : (function () { throw new RuntimeError('Variable "gifts" does not exist.', 24, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["gift"]) {
            // line 25
            echo "            <div class=\"col-md-3\">
                <div class=\"card mb-4 shadow-sm\">
                    <img src=\"";
            // line 27
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["gift"], "photo", [], "any", false, false, false, 27), "html", null, true);
            echo "\" class=\"card-img-top\" alt=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["gift"], "name", [], "any", false, false, false, 27), "html", null, true);
            echo "\" style=\"height: 200px; object-fit: cover;\">
                    <div class=\"card-body\">
                        <h5 class=\"card-title\">";
            // line 29
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["gift"], "name", [], "any", false, false, false, 29), "html", null, true);
            echo "</h5>
                        <p class=\"card-text\">";
            // line 30
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["gift"], "description", [], "any", false, false, false, 30), "html", null, true);
            echo "</p>
                        <div class=\"d-flex justify-content-between align-items-center\">
                            <p class=\"card-text\"><strong>";
            // line 32
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["gift"], "value", [], "any", false, false, false, 32), "html", null, true);
            echo "</strong></p>
                          ";
            // line 33
            if ((twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 33, $this->source); })()), "score", [], "any", false, false, false, 33) >= twig_get_attribute($this->env, $this->source, $context["gift"], "value", [], "any", false, false, false, 33))) {
                // line 34
                echo "                                    <div class=\"btn-group\">
                                        <a href=\"";
                // line 35
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_front_showdetailscadeau", ["id" => twig_get_attribute($this->env, $this->source, $context["gift"], "id", [], "any", false, false, false, 35)]), "html", null, true);
                echo "\" class=\"btn btn-sm btn-outline-secondary\" id=\"exchange-btn\">Voir détails</a>
                                    </div>
                                ";
            } else {
                // line 38
                echo "                                    <p style=\"color: red; font-size: 0.8em;\">Votre score est insuffisant</p>
                                ";
            }
            // line 40
            echo "                        </div>
                    </div>
                </div>
            </div>
        ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 45
            echo "            <div class=\"col-md-12\">
                <p class=\"text-center\">no records found</p>
            </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['gift'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 49
        echo "    </div>

  <script>
        function onConvertButtonClick(score) {
            // Convert score to diamonds
            var diamonds = Math.floor(score / 10);

            // Update diamonds display
            document.getElementById(\"diamonds\").textContent = diamonds + \" diamants\";
        }
    </script>
    ";
        // line 60
        echo $this->extensions['Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension']->render($this->env, (isset($context["gifts"]) || array_key_exists("gifts", $context) ? $context["gifts"] : (function () { throw new RuntimeError('Variable "gifts" does not exist.', 60, $this->source); })()));
        echo "
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "front_competition/cadeauxcompetition.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  197 => 60,  184 => 49,  175 => 45,  166 => 40,  162 => 38,  156 => 35,  153 => 34,  151 => 33,  147 => 32,  142 => 30,  138 => 29,  131 => 27,  127 => 25,  122 => 24,  116 => 21,  110 => 18,  106 => 17,  102 => 16,  93 => 10,  88 => 7,  78 => 6,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Gifts {% endblock %}


{% block body %}
<!-- ======= Breadcrumbs ======= -->
    <div class=\"breadcrumbs d-flex align-items-center\" style=\"background-image: url('assets/img/contact-header.jpg');\">
      <div class=\"container position-relative d-flex flex-column align-items-center\">
          <li><a href=\"{{path('app_accueil')}}\">Accueil</a></li>
        <h2>Gamification</h2>
      </div>
    </div><!-- End Breadcrumbs -->
 <div class=\"container\">
        <div class=\"py-2 text-center\">
            <h2>Bienvenue sur la liste des cadeaux: ({{gifts.getTotalItemCount}})</h2>
            <p>Votre score actuel est : {{user.score}}</p>
            <button type=\"button\" class=\"btn btn-sm btn-primary\" onclick=\"onConvertButtonClick({{ user.score }})\">Convertir</button>
            <span id=\"diamonds\"></span>
        </div>
    <a href=\"{{ path('app_gifts_index') }}\" style=\"color: #00b4d8; font-size: 2.0em; text-decoration: none;\" >Gifts</a>

    <div class=\"row\">
        {% for gift in gifts %}
            <div class=\"col-md-3\">
                <div class=\"card mb-4 shadow-sm\">
                    <img src=\"{{ gift.photo }}\" class=\"card-img-top\" alt=\"{{ gift.name }}\" style=\"height: 200px; object-fit: cover;\">
                    <div class=\"card-body\">
                        <h5 class=\"card-title\">{{ gift.name }}</h5>
                        <p class=\"card-text\">{{ gift.description }}</p>
                        <div class=\"d-flex justify-content-between align-items-center\">
                            <p class=\"card-text\"><strong>{{ gift.value }}</strong></p>
                          {% if user.score >= gift.value %}
                                    <div class=\"btn-group\">
                                        <a href=\"{{path('app_front_showdetailscadeau',{'id': gift.id})}}\" class=\"btn btn-sm btn-outline-secondary\" id=\"exchange-btn\">Voir détails</a>
                                    </div>
                                {% else %}
                                    <p style=\"color: red; font-size: 0.8em;\">Votre score est insuffisant</p>
                                {% endif %}
                        </div>
                    </div>
                </div>
            </div>
        {% else %}
            <div class=\"col-md-12\">
                <p class=\"text-center\">no records found</p>
            </div>
        {% endfor %}
    </div>

  <script>
        function onConvertButtonClick(score) {
            // Convert score to diamonds
            var diamonds = Math.floor(score / 10);

            // Update diamonds display
            document.getElementById(\"diamonds\").textContent = diamonds + \" diamants\";
        }
    </script>
    {{knp_pagination_render(gifts)}}
{% endblock %}
", "front_competition/cadeauxcompetition.html.twig", "C:\\Users\\aymen\\Desktop\\gitprojet\\digidreamers\\templates\\front_competition\\cadeauxcompetition.html.twig");
    }
}
