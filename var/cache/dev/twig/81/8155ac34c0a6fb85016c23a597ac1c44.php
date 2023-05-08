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

/* chat_gpt/index.html.twig */
class __TwigTemplate_d85562b0d6f363d6a4f9f1e24e0aa119 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "chat_gpt/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "chat_gpt/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "chat_gpt/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <div class=\"container mt-5\">
        <div class=\"row\">
            <div class=\"col-md-8 mx-auto\">
                <h1 class=\"text-center mb-4\">Essayez notre chatbot intelligent créé avec l'intelligence artificielle</h1>

                <form action=\"";
        // line 9
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_chat_index");
        echo "\" method=\"GET\" class=\"mb-4\">
                    <div class=\"form-group\">
                        <label for=\"question\">Posez votre question :</label>
                        <div class=\"input-group\">
                            <input type=\"text\" id=\"question\" name=\"question\" class=\"form-control\" required>
                            <div class=\"input-group-append\">
                                <button type=\"submit\" class=\"btn btn-primary\">Envoyer</button>
                            </div>
                        </div>
                    </div>
                </form>

                ";
        // line 21
        if (array_key_exists("answer", $context)) {
            // line 22
            echo "                    <div class=\"card\">
                        <div class=\"card-body\">
                            <h5 class=\"card-title\">Réponse</h5>
                            <p class=\"card-text\">";
            // line 25
            echo twig_escape_filter($this->env, (isset($context["answer"]) || array_key_exists("answer", $context) ? $context["answer"] : (function () { throw new RuntimeError('Variable "answer" does not exist.', 25, $this->source); })()), "html", null, true);
            echo "</p>
                        </div>
                    </div>
                ";
        }
        // line 29
        echo "            </div>
        </div>
    </div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "chat_gpt/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  104 => 29,  97 => 25,  92 => 22,  90 => 21,  75 => 9,  68 => 4,  58 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block body %}
    <div class=\"container mt-5\">
        <div class=\"row\">
            <div class=\"col-md-8 mx-auto\">
                <h1 class=\"text-center mb-4\">Essayez notre chatbot intelligent créé avec l'intelligence artificielle</h1>

                <form action=\"{{ path('app_chat_index') }}\" method=\"GET\" class=\"mb-4\">
                    <div class=\"form-group\">
                        <label for=\"question\">Posez votre question :</label>
                        <div class=\"input-group\">
                            <input type=\"text\" id=\"question\" name=\"question\" class=\"form-control\" required>
                            <div class=\"input-group-append\">
                                <button type=\"submit\" class=\"btn btn-primary\">Envoyer</button>
                            </div>
                        </div>
                    </div>
                </form>

                {% if answer is defined %}
                    <div class=\"card\">
                        <div class=\"card-body\">
                            <h5 class=\"card-title\">Réponse</h5>
                            <p class=\"card-text\">{{ answer }}</p>
                        </div>
                    </div>
                {% endif %}
            </div>
        </div>
    </div>
{% endblock %}
", "chat_gpt/index.html.twig", "C:\\Users\\aymen\\Desktop\\gitprojet\\digidreamers\\templates\\chat_gpt\\index.html.twig");
    }
}
