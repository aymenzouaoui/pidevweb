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

/* evaluation.html.twig */
class __TwigTemplate_dbe371039c3a69502de4fdcfd586217d extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "evaluation.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "evaluation.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\">
        <title>Evaluation d'un transporteur</title>
        <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/rateYo/2.3.2/jquery.rateyo.min.css\">
        
        <link href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/assets/css/cc.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    </head>
    <body>
        <div class=\"container\">
            <div class=\"row\">
                <form action=\"";
        // line 13
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("evaluation");
        echo "\" method=\"post\">
                    <div>
                        <h3>Evaluer un transporteur</h3>
                    </div>
                    
                    <div class=\"rateyo\" id=\"rating\"
                         data-rateyo-rating=\"4\"
                         data-rateyo-num-stars=\"5\"
                         data-rateyo-score=\"3\">
                    </div>
                    <span class='result'>0</span>
                    <input type=\"hidden\" name=\"rating\">
                    <div>
                    
                        <input type=\"submit\" name=\"add\">
                    </div>
                </form>
            </div>
        </div> 
        <script src=\"https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js\"></script>
        <script src=\"https://cdnjs.cloudflare.com/ajax/libs/rateYo/2.3.2/jquery.rateyo.min.js\"></script>
        <script>
            \$(function () {
                \$(\".rateyo\").rateYo().on(\"rateyo.change\", function (e, data) {
                    var rating = data.rating;
                    \$(this).parent().find('.score').text('score :' + \$(this).attr('data-rateyo-score'));
                    \$(this).parent().find('.result').text('rating :' + rating);
                    \$(this).parent().find('input[name=rating]').val(rating); //add rating value to input field
                });
            });
        </script>
    </body>
</html>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "evaluation.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  60 => 13,  52 => 8,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\">
        <title>Evaluation d'un transporteur</title>
        <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/rateYo/2.3.2/jquery.rateyo.min.css\">
        
        <link href=\"{{asset('front/assets/css/cc.css')}}\" rel=\"stylesheet\">
    </head>
    <body>
        <div class=\"container\">
            <div class=\"row\">
                <form action=\"{{ path('evaluation') }}\" method=\"post\">
                    <div>
                        <h3>Evaluer un transporteur</h3>
                    </div>
                    
                    <div class=\"rateyo\" id=\"rating\"
                         data-rateyo-rating=\"4\"
                         data-rateyo-num-stars=\"5\"
                         data-rateyo-score=\"3\">
                    </div>
                    <span class='result'>0</span>
                    <input type=\"hidden\" name=\"rating\">
                    <div>
                    
                        <input type=\"submit\" name=\"add\">
                    </div>
                </form>
            </div>
        </div> 
        <script src=\"https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js\"></script>
        <script src=\"https://cdnjs.cloudflare.com/ajax/libs/rateYo/2.3.2/jquery.rateyo.min.js\"></script>
        <script>
            \$(function () {
                \$(\".rateyo\").rateYo().on(\"rateyo.change\", function (e, data) {
                    var rating = data.rating;
                    \$(this).parent().find('.score').text('score :' + \$(this).attr('data-rateyo-score'));
                    \$(this).parent().find('.result').text('rating :' + rating);
                    \$(this).parent().find('input[name=rating]').val(rating); //add rating value to input field
                });
            });
        </script>
    </body>
</html>
", "evaluation.html.twig", "C:\\Users\\aymen\\Desktop\\gitprojet\\digidreamers\\templates\\evaluation.html.twig");
    }
}
