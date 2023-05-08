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

/* quiz/index.html.twig */
class __TwigTemplate_344297e0cad20869565e0374d8776beb extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "quiz/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "quiz/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "quiz/index.html.twig", 1);
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

        echo "Quiz sur la Tunisie";
        
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
        echo "  <div class=\"container\">
    <h1>Quiz sur la Tunisie</h1>

    ";
        // line 9
        if (array_key_exists("quizForm", $context)) {
            // line 10
            echo "      <form method=\"post\">
        ";
            // line 11
            echo             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["quizForm"]) || array_key_exists("quizForm", $context) ? $context["quizForm"] : (function () { throw new RuntimeError('Variable "quizForm" does not exist.', 11, $this->source); })()), 'form_start');
            echo "
        ";
            // line 12
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["quizForm"]) || array_key_exists("quizForm", $context) ? $context["quizForm"] : (function () { throw new RuntimeError('Variable "quizForm" does not exist.', 12, $this->source); })()), "questions", [], "any", false, false, false, 12));
            foreach ($context['_seq'] as $context["_key"] => $context["questionForm"]) {
                // line 13
                echo "          <h3>";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["questionForm"], "vars", [], "any", false, false, false, 13), "value", [], "any", false, false, false, 13), "question", [], "any", false, false, false, 13), "html", null, true);
                echo "</h3>
          ";
                // line 14
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, $context["questionForm"], "answer", [], "any", false, false, false, 14), 'widget');
                echo "
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['questionForm'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 16
            echo "        ";
            echo             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["quizForm"]) || array_key_exists("quizForm", $context) ? $context["quizForm"] : (function () { throw new RuntimeError('Variable "quizForm" does not exist.', 16, $this->source); })()), 'form_end');
            echo "
        <button type=\"submit\" class=\"btn btn-primary mt-3\">Soumettre</button>
      </form>

      ";
            // line 20
            if (array_key_exists("quizResults", $context)) {
                // line 21
                echo "        <div class=\"mt-3\">
          <h2>Résultat</h2>
          <p>Vous avez répondu correctement à ";
                // line 23
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["quizResults"]) || array_key_exists("quizResults", $context) ? $context["quizResults"] : (function () { throw new RuntimeError('Variable "quizResults" does not exist.', 23, $this->source); })()), "correctAnswers", [], "any", false, false, false, 23), "html", null, true);
                echo " question(s) sur ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["quizResults"]) || array_key_exists("quizResults", $context) ? $context["quizResults"] : (function () { throw new RuntimeError('Variable "quizResults" does not exist.', 23, $this->source); })()), "totalQuestions", [], "any", false, false, false, 23), "html", null, true);
                echo ".</p>
        </div>
      ";
            }
            // line 26
            echo "    ";
        } else {
            // line 27
            echo "      <p>Aucune question n'a été trouvée.</p>
    ";
        }
        // line 29
        echo "  </div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "quiz/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  148 => 29,  144 => 27,  141 => 26,  133 => 23,  129 => 21,  127 => 20,  119 => 16,  111 => 14,  106 => 13,  102 => 12,  98 => 11,  95 => 10,  93 => 9,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Quiz sur la Tunisie{% endblock %}

{% block body %}
  <div class=\"container\">
    <h1>Quiz sur la Tunisie</h1>

    {% if quizForm is defined %}
      <form method=\"post\">
        {{ form_start(quizForm) }}
        {% for questionForm in quizForm.questions %}
          <h3>{{ questionForm.vars.value.question }}</h3>
          {{ form_widget(questionForm.answer) }}
        {% endfor %}
        {{ form_end(quizForm) }}
        <button type=\"submit\" class=\"btn btn-primary mt-3\">Soumettre</button>
      </form>

      {% if quizResults is defined %}
        <div class=\"mt-3\">
          <h2>Résultat</h2>
          <p>Vous avez répondu correctement à {{ quizResults.correctAnswers }} question(s) sur {{ quizResults.totalQuestions }}.</p>
        </div>
      {% endif %}
    {% else %}
      <p>Aucune question n'a été trouvée.</p>
    {% endif %}
  </div>
{% endblock %}", "quiz/index.html.twig", "C:\\Users\\aymen\\Desktop\\gitprojet\\digidreamers\\templates\\quiz\\index.html.twig");
    }
}
