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

/* statsColis/index.html.twig */
class __TwigTemplate_58fe53c6f039baf8c912404760f4a663 extends Template
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
            'chart1' => [$this, 'block_chart1'],
            'chart2' => [$this, 'block_chart2'],
            'chart' => [$this, 'block_chart'],
            'chart4' => [$this, 'block_chart4'],
            'ah' => [$this, 'block_ah'],
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "statsColis/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "statsColis/index.html.twig"));

        $this->parent = $this->loadTemplate("baseadmin.html.twig", "statsColis/index.html.twig", 1);
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

        echo "Statistiques";
        
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
        echo "
    <h1>Statistiques</h1>
";
        // line 8
        $this->displayBlock('chart1', $context, $blocks);
        // line 23
        echo "
";
        // line 24
        $this->displayBlock('chart2', $context, $blocks);
        // line 37
        echo "
    

<div class=\"row\">
     <div class=\"col-md-6\">
        ";
        // line 42
        $this->displayBlock('chart', $context, $blocks);
        // line 67
        echo "    </div>
    <div class=\"col-md-6\">
        ";
        // line 69
        $this->displayBlock('chart4', $context, $blocks);
        // line 123
        echo "        ";
        $this->displayBlock('ah', $context, $blocks);
        // line 156
        echo "
    </div>
   
</div>

";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 8
    public function block_chart1($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "chart1"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "chart1"));

        // line 9
        echo "    <div class=\"row\">
        <div class=\"col-md-6\">
            <div class=\"card mb-4\">
                <div class=\"card-header\">
                    <h4>Poids moyen par livraison</h4>
                </div>
                <div class=\"card-body text-center\">
                    <h1>";
        // line 16
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (isset($context["poidsMoyen"]) || array_key_exists("poidsMoyen", $context) ? $context["poidsMoyen"] : (function () { throw new RuntimeError('Variable "poidsMoyen" does not exist.', 16, $this->source); })()), 3, ".", ""), "html", null, true);
        echo " kg</h1>
                    <canvas id=\"kpi-chart\" width=\"50\" height=\"50\"></canvas>
                </div>
            </div>
        </div>
        
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 24
    public function block_chart2($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "chart2"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "chart2"));

        // line 25
        echo "        <div class=\"col-md-6\">
            <div class=\"card mb-4\">
                <div class=\"card-header\">
                    <h4>Nombre total des colis</h4>
                </div>
                <div class=\"card-body text-center\">
                    <h1>";
        // line 31
        echo twig_escape_filter($this->env, (isset($context["count_colis"]) || array_key_exists("count_colis", $context) ? $context["count_colis"] : (function () { throw new RuntimeError('Variable "count_colis" does not exist.', 31, $this->source); })()), "html", null, true);
        echo " Colis</h1>
                    <canvas id=\"kpi-chart\" width=\"50\" height=\"50\"></canvas>
                </div>
            </div>
        </div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 42
    public function block_chart($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "chart"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "chart"));

        // line 43
        echo "            <div class=\"row\">
                  <div class=\"card mb-4\">
                    <h4>Suivi états des colis</h4>
                </div>
                  <div class=\"card mb-4\">
                    <canvas id=\"chart2\" width=\"400\" height=\"400\"></canvas>
                </div>
            </div>
            <script src=\"https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.0.0/Chart.min.js\"></script>
            <script>
                var ctx = document.getElementById('chart2').getContext('2d');
                var myChart = new Chart(ctx, {
                    type: 'doughnut',
                    data: ";
        // line 56
        echo json_encode((isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 56, $this->source); })()));
        echo ",
                    options: {
                        legend: {
                            position: 'bottom',
                        },
                        responsive: true,
                        maintainAspectRatio: false,
                    },
                });
            </script>
        ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 69
    public function block_chart4($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "chart4"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "chart4"));

        // line 70
        echo "            <div class=\"row\">
               <div class=\"card mb-4\">
                <h4>Nombre de colis par mois</h4>
              </div>
               <div class=\"card mb-4\">
                <canvas id=\"colis-par-mois-chart\" width=\"400\" height=\"400\"></canvas>
              </div>
            </div>
            <script src=\"https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.0.0/Chart.min.js\"></script>
            <script>
              // Récupération des données depuis Controller
              var colis = ";
        // line 81
        echo json_encode((isset($context["colis"]) || array_key_exists("colis", $context) ? $context["colis"] : (function () { throw new RuntimeError('Variable "colis" does not exist.', 81, $this->source); })()));
        echo ";

              // Comptage du nombre de colis pour chaque mois
              var countParMois = {};
              colis.forEach(function(coli) {
                var date = new Date(coli.dateexpedition);
                var mois = date.toLocaleString('default', { month: 'long', year: 'numeric' });
                if (countParMois[mois]) {
                  countParMois[mois]++;
                } else {
                  countParMois[mois] = 1;
                }
              });

              // Construction du graphique
              var ctx = document.getElementById('colis-par-mois-chart').getContext('2d');
              var myChart = new Chart(ctx, {
                type: 'bar',
                data: {
                  labels: Object.keys(countParMois),
                  datasets: [{
                    label: 'Nombre de colis',
                    data: Object.values(countParMois),
                    backgroundColor: 'rgba(54, 162, 235, 0.2)',
                    borderColor: 'rgba(54, 162, 235, 1)',
                    borderWidth: 1
                  }]
                },
                options: {
                  scales: {
                    yAxes: [{
                      ticks: {
                        beginAtZero: true
                      }
                    }]
                  },
                  responsive: true,
                  maintainAspectRatio: false
                }
              });
            </script>
        ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 123
    public function block_ah($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "ah"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "ah"));

        // line 124
        echo "    <h1>Moyenne de participants par compétition</h1>

    <p>Moyenne: ";
        // line 126
        echo twig_escape_filter($this->env, (isset($context["average"]) || array_key_exists("average", $context) ? $context["average"] : (function () { throw new RuntimeError('Variable "average" does not exist.', 126, $this->source); })()), "html", null, true);
        echo "</p>

    <canvas id=\"chart\"></canvas>

    <script src=\"https://cdn.jsdelivr.net/npm/chart.js\"></script>
    <script>
        const chartData = ";
        // line 132
        echo (isset($context["chartData"]) || array_key_exists("chartData", $context) ? $context["chartData"] : (function () { throw new RuntimeError('Variable "chartData" does not exist.', 132, $this->source); })());
        echo ";

        new Chart(document.getElementById('chart'), {
            type: 'bar',
            data: {
                labels: chartData.labelsAh,
                datasets: [{
                    label: 'Participants',
                    data: chartData.dataAh,
                    backgroundColor: 'rgba(54, 162, 235, 0.2)',
                    borderColor: 'rgba(54, 162, 235, 1)',
                    borderWidth: 1
                }]
            },
            options: {
                scales: {
                    y: {
                        beginAtZero: true
                    }
                }
            }
        });
    </script>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "statsColis/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  351 => 132,  342 => 126,  338 => 124,  328 => 123,  276 => 81,  263 => 70,  253 => 69,  232 => 56,  217 => 43,  207 => 42,  191 => 31,  183 => 25,  173 => 24,  156 => 16,  147 => 9,  137 => 8,  122 => 156,  119 => 123,  117 => 69,  113 => 67,  111 => 42,  104 => 37,  102 => 24,  99 => 23,  97 => 8,  93 => 6,  83 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'baseadmin.html.twig' %}

{% block title %}Statistiques{% endblock %}

{% block body %}

    <h1>Statistiques</h1>
{% block chart1 %}
    <div class=\"row\">
        <div class=\"col-md-6\">
            <div class=\"card mb-4\">
                <div class=\"card-header\">
                    <h4>Poids moyen par livraison</h4>
                </div>
                <div class=\"card-body text-center\">
                    <h1>{{ poidsMoyen|number_format(3, '.', '') }} kg</h1>
                    <canvas id=\"kpi-chart\" width=\"50\" height=\"50\"></canvas>
                </div>
            </div>
        </div>
        
{% endblock  %}

{% block chart2 %}
        <div class=\"col-md-6\">
            <div class=\"card mb-4\">
                <div class=\"card-header\">
                    <h4>Nombre total des colis</h4>
                </div>
                <div class=\"card-body text-center\">
                    <h1>{{ count_colis }} Colis</h1>
                    <canvas id=\"kpi-chart\" width=\"50\" height=\"50\"></canvas>
                </div>
            </div>
        </div>
{% endblock  %}

    

<div class=\"row\">
     <div class=\"col-md-6\">
        {% block chart %}
            <div class=\"row\">
                  <div class=\"card mb-4\">
                    <h4>Suivi états des colis</h4>
                </div>
                  <div class=\"card mb-4\">
                    <canvas id=\"chart2\" width=\"400\" height=\"400\"></canvas>
                </div>
            </div>
            <script src=\"https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.0.0/Chart.min.js\"></script>
            <script>
                var ctx = document.getElementById('chart2').getContext('2d');
                var myChart = new Chart(ctx, {
                    type: 'doughnut',
                    data: {{ data|json_encode|raw }},
                    options: {
                        legend: {
                            position: 'bottom',
                        },
                        responsive: true,
                        maintainAspectRatio: false,
                    },
                });
            </script>
        {% endblock %}
    </div>
    <div class=\"col-md-6\">
        {% block chart4 %}
            <div class=\"row\">
               <div class=\"card mb-4\">
                <h4>Nombre de colis par mois</h4>
              </div>
               <div class=\"card mb-4\">
                <canvas id=\"colis-par-mois-chart\" width=\"400\" height=\"400\"></canvas>
              </div>
            </div>
            <script src=\"https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.0.0/Chart.min.js\"></script>
            <script>
              // Récupération des données depuis Controller
              var colis = {{ colis|json_encode|raw }};

              // Comptage du nombre de colis pour chaque mois
              var countParMois = {};
              colis.forEach(function(coli) {
                var date = new Date(coli.dateexpedition);
                var mois = date.toLocaleString('default', { month: 'long', year: 'numeric' });
                if (countParMois[mois]) {
                  countParMois[mois]++;
                } else {
                  countParMois[mois] = 1;
                }
              });

              // Construction du graphique
              var ctx = document.getElementById('colis-par-mois-chart').getContext('2d');
              var myChart = new Chart(ctx, {
                type: 'bar',
                data: {
                  labels: Object.keys(countParMois),
                  datasets: [{
                    label: 'Nombre de colis',
                    data: Object.values(countParMois),
                    backgroundColor: 'rgba(54, 162, 235, 0.2)',
                    borderColor: 'rgba(54, 162, 235, 1)',
                    borderWidth: 1
                  }]
                },
                options: {
                  scales: {
                    yAxes: [{
                      ticks: {
                        beginAtZero: true
                      }
                    }]
                  },
                  responsive: true,
                  maintainAspectRatio: false
                }
              });
            </script>
        {% endblock %}
        {% block ah %}
    <h1>Moyenne de participants par compétition</h1>

    <p>Moyenne: {{ average }}</p>

    <canvas id=\"chart\"></canvas>

    <script src=\"https://cdn.jsdelivr.net/npm/chart.js\"></script>
    <script>
        const chartData = {{ chartData|raw }};

        new Chart(document.getElementById('chart'), {
            type: 'bar',
            data: {
                labels: chartData.labelsAh,
                datasets: [{
                    label: 'Participants',
                    data: chartData.dataAh,
                    backgroundColor: 'rgba(54, 162, 235, 0.2)',
                    borderColor: 'rgba(54, 162, 235, 1)',
                    borderWidth: 1
                }]
            },
            options: {
                scales: {
                    y: {
                        beginAtZero: true
                    }
                }
            }
        });
    </script>
{% endblock %}

    </div>
   
</div>

{% endblock %}
 ", "statsColis/index.html.twig", "C:\\Users\\aymen\\Desktop\\gitprojet\\digidreamers\\templates\\statsColis\\index.html.twig");
    }
}
