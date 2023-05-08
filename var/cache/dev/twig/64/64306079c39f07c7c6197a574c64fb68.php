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

/* competition/cadeauxcompetition.html.twig */
class __TwigTemplate_09d5040d3fd2dcbc281352dccc6b9913 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "competition/cadeauxcompetition.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "competition/cadeauxcompetition.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "competition/cadeauxcompetition.html.twig", 1);
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

        echo "Gifts";
        
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
        echo " <div class=\"container\">
        <div class=\"py-2 text-center\">
            <h2>Bienvenue sur la liste des cadeaux</h2>
            <p>Votre score actuel est : </p>
        </div>
    <a href=\"";
        // line 11
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_gifts_index");
        echo "\" style=\"color: #00b4d8; font-size: 2.0em; text-decoration: none;\" >Gifts</a>

    <div class=\"row\">
        ";
        // line 14
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["gifts"]) || array_key_exists("gifts", $context) ? $context["gifts"] : (function () { throw new RuntimeError('Variable "gifts" does not exist.', 14, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["gift"]) {
            // line 15
            echo "            <div class=\"col-md-3\">
                <div class=\"card mb-4 shadow-sm\">
                    <img src=\"";
            // line 17
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["gift"], "photo", [], "any", false, false, false, 17), "html", null, true);
            echo "\" class=\"card-img-top\" alt=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["gift"], "name", [], "any", false, false, false, 17), "html", null, true);
            echo "\" style=\"height: 200px; object-fit: cover;\">
                    <div class=\"card-body\">
                        <h5 class=\"card-title\">";
            // line 19
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["gift"], "name", [], "any", false, false, false, 19), "html", null, true);
            echo "</h5>
                        <p class=\"card-text\">";
            // line 20
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["gift"], "description", [], "any", false, false, false, 20), "html", null, true);
            echo "</p>
                        <div class=\"d-flex justify-content-between align-items-center\">
                            <p class=\"card-text\"><strong>";
            // line 22
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["gift"], "value", [], "any", false, false, false, 22), "html", null, true);
            echo "</strong></p>
                            <div class=\"btn-group\">
                                <a href=\"#\" class=\"btn btn-sm btn-outline-secondary\">Echanger</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 31
            echo "            <div class=\"col-md-12\">
                <p class=\"text-center\">no records found</p>
            </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['gift'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 35
        echo "    </div>

";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "competition/cadeauxcompetition.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  149 => 35,  140 => 31,  126 => 22,  121 => 20,  117 => 19,  110 => 17,  106 => 15,  101 => 14,  95 => 11,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Gifts{% endblock %}

{% block body %}
 <div class=\"container\">
        <div class=\"py-2 text-center\">
            <h2>Bienvenue sur la liste des cadeaux</h2>
            <p>Votre score actuel est : </p>
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
                            <div class=\"btn-group\">
                                <a href=\"#\" class=\"btn btn-sm btn-outline-secondary\">Echanger</a>
                            </div>
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

{% endblock %}", "competition/cadeauxcompetition.html.twig", "C:\\Users\\aymen\\Desktop\\gitprojet\\digidreamers\\templates\\competition\\cadeauxcompetition.html.twig");
    }
}
