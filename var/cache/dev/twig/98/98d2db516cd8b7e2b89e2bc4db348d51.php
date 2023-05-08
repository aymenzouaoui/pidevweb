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

/* others/twitter_bootstrap_v4_pagination.html.twig */
class __TwigTemplate_bacebeec7f586c70193c3af5e2a963fa extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "others/twitter_bootstrap_v4_pagination.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "others/twitter_bootstrap_v4_pagination.html.twig"));

        // line 13
        echo "<nav aria-label=\"Page navigation example\">
";
        // line 14
        if (((isset($context["pageCount"]) || array_key_exists("pageCount", $context) ? $context["pageCount"] : (function () { throw new RuntimeError('Variable "pageCount" does not exist.', 14, $this->source); })()) > 1)) {
            // line 15
            echo "    <ul class=\"pagination\">
        ";
            // line 16
            if (array_key_exists("previous", $context)) {
                // line 17
                echo "            <li class=\"page-item\">
                <a rel=\"prev\" href=\"";
                // line 18
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath((isset($context["route"]) || array_key_exists("route", $context) ? $context["route"] : (function () { throw new RuntimeError('Variable "route" does not exist.', 18, $this->source); })()), twig_array_merge((isset($context["query"]) || array_key_exists("query", $context) ? $context["query"] : (function () { throw new RuntimeError('Variable "query" does not exist.', 18, $this->source); })()), [(isset($context["pageParameterName"]) || array_key_exists("pageParameterName", $context) ? $context["pageParameterName"] : (function () { throw new RuntimeError('Variable "pageParameterName" does not exist.', 18, $this->source); })()) => (isset($context["previous"]) || array_key_exists("previous", $context) ? $context["previous"] : (function () { throw new RuntimeError('Variable "previous" does not exist.', 18, $this->source); })())])), "html", null, true);
                echo "\" class=\"page-link\">&laquo;&nbsp; Previous</a>
            </li>
        ";
            } else {
                // line 21
                echo "            <li class=\"page-item disabled\">
                <span class=\"page-link\">&laquo;&nbsp; Previous</span>
            </li>
        ";
            }
            // line 25
            echo "
        ";
            // line 26
            if (((isset($context["startPage"]) || array_key_exists("startPage", $context) ? $context["startPage"] : (function () { throw new RuntimeError('Variable "startPage" does not exist.', 26, $this->source); })()) > 1)) {
                // line 27
                echo "            <li class=\"page-item\">
                <a href=\"";
                // line 28
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath((isset($context["route"]) || array_key_exists("route", $context) ? $context["route"] : (function () { throw new RuntimeError('Variable "route" does not exist.', 28, $this->source); })()), twig_array_merge((isset($context["query"]) || array_key_exists("query", $context) ? $context["query"] : (function () { throw new RuntimeError('Variable "query" does not exist.', 28, $this->source); })()), [(isset($context["pageParameterName"]) || array_key_exists("pageParameterName", $context) ? $context["pageParameterName"] : (function () { throw new RuntimeError('Variable "pageParameterName" does not exist.', 28, $this->source); })()) => 1])), "html", null, true);
                echo "\" class=\"page-link\">1</a>
            </li>
            ";
                // line 30
                if (((isset($context["startPage"]) || array_key_exists("startPage", $context) ? $context["startPage"] : (function () { throw new RuntimeError('Variable "startPage" does not exist.', 30, $this->source); })()) == 3)) {
                    // line 31
                    echo "                <li class=\"page-item\">
                    <a href=\"";
                    // line 32
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath((isset($context["route"]) || array_key_exists("route", $context) ? $context["route"] : (function () { throw new RuntimeError('Variable "route" does not exist.', 32, $this->source); })()), twig_array_merge((isset($context["query"]) || array_key_exists("query", $context) ? $context["query"] : (function () { throw new RuntimeError('Variable "query" does not exist.', 32, $this->source); })()), [(isset($context["pageParameterName"]) || array_key_exists("pageParameterName", $context) ? $context["pageParameterName"] : (function () { throw new RuntimeError('Variable "pageParameterName" does not exist.', 32, $this->source); })()) => 2])), "html", null, true);
                    echo "\" class=\"page-link\">2</a>
                </li>
            ";
                } elseif ((                // line 34
(isset($context["startPage"]) || array_key_exists("startPage", $context) ? $context["startPage"] : (function () { throw new RuntimeError('Variable "startPage" does not exist.', 34, $this->source); })()) != 2)) {
                    // line 35
                    echo "                <li class=\"page-item disabled\">
                    <span class=\"page-link\">&hellip;</span>
                </li>
            ";
                }
                // line 39
                echo "        ";
            }
            // line 40
            echo "
        ";
            // line 41
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["pagesInRange"]) || array_key_exists("pagesInRange", $context) ? $context["pagesInRange"] : (function () { throw new RuntimeError('Variable "pagesInRange" does not exist.', 41, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
                // line 42
                echo "            ";
                if (($context["page"] != (isset($context["current"]) || array_key_exists("current", $context) ? $context["current"] : (function () { throw new RuntimeError('Variable "current" does not exist.', 42, $this->source); })()))) {
                    // line 43
                    echo "                <li class=\"page-item\">
                    <a href=\"";
                    // line 44
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath((isset($context["route"]) || array_key_exists("route", $context) ? $context["route"] : (function () { throw new RuntimeError('Variable "route" does not exist.', 44, $this->source); })()), twig_array_merge((isset($context["query"]) || array_key_exists("query", $context) ? $context["query"] : (function () { throw new RuntimeError('Variable "query" does not exist.', 44, $this->source); })()), [(isset($context["pageParameterName"]) || array_key_exists("pageParameterName", $context) ? $context["pageParameterName"] : (function () { throw new RuntimeError('Variable "pageParameterName" does not exist.', 44, $this->source); })()) => $context["page"]])), "html", null, true);
                    echo "\" class=\"page-link\">";
                    echo twig_escape_filter($this->env, $context["page"], "html", null, true);
                    echo "</a>
                </li>
            ";
                } else {
                    // line 47
                    echo "                <li class=\"active page-item\">
                    <span class=\"page-link\">";
                    // line 48
                    echo twig_escape_filter($this->env, $context["page"], "html", null, true);
                    echo "</span>
                </li>
            ";
                }
                // line 51
                echo "
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['page'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 53
            echo "
        ";
            // line 54
            if (((isset($context["pageCount"]) || array_key_exists("pageCount", $context) ? $context["pageCount"] : (function () { throw new RuntimeError('Variable "pageCount" does not exist.', 54, $this->source); })()) > (isset($context["endPage"]) || array_key_exists("endPage", $context) ? $context["endPage"] : (function () { throw new RuntimeError('Variable "endPage" does not exist.', 54, $this->source); })()))) {
                // line 55
                echo "            ";
                if (((isset($context["pageCount"]) || array_key_exists("pageCount", $context) ? $context["pageCount"] : (function () { throw new RuntimeError('Variable "pageCount" does not exist.', 55, $this->source); })()) > ((isset($context["endPage"]) || array_key_exists("endPage", $context) ? $context["endPage"] : (function () { throw new RuntimeError('Variable "endPage" does not exist.', 55, $this->source); })()) + 1))) {
                    // line 56
                    echo "                ";
                    if (((isset($context["pageCount"]) || array_key_exists("pageCount", $context) ? $context["pageCount"] : (function () { throw new RuntimeError('Variable "pageCount" does not exist.', 56, $this->source); })()) > ((isset($context["endPage"]) || array_key_exists("endPage", $context) ? $context["endPage"] : (function () { throw new RuntimeError('Variable "endPage" does not exist.', 56, $this->source); })()) + 2))) {
                        // line 57
                        echo "                    <li class=\"page-item disabled\">
                        <span class=\"page-link\">&hellip;</span>
                    </li>
                ";
                    } else {
                        // line 61
                        echo "                    <li class=\"page-item\">
                        <a href=\"";
                        // line 62
                        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath((isset($context["route"]) || array_key_exists("route", $context) ? $context["route"] : (function () { throw new RuntimeError('Variable "route" does not exist.', 62, $this->source); })()), twig_array_merge((isset($context["query"]) || array_key_exists("query", $context) ? $context["query"] : (function () { throw new RuntimeError('Variable "query" does not exist.', 62, $this->source); })()), [(isset($context["pageParameterName"]) || array_key_exists("pageParameterName", $context) ? $context["pageParameterName"] : (function () { throw new RuntimeError('Variable "pageParameterName" does not exist.', 62, $this->source); })()) => ((isset($context["pageCount"]) || array_key_exists("pageCount", $context) ? $context["pageCount"] : (function () { throw new RuntimeError('Variable "pageCount" does not exist.', 62, $this->source); })()) - 1)])), "html", null, true);
                        echo "\" class=\"page-link\">";
                        echo twig_escape_filter($this->env, ((isset($context["pageCount"]) || array_key_exists("pageCount", $context) ? $context["pageCount"] : (function () { throw new RuntimeError('Variable "pageCount" does not exist.', 62, $this->source); })()) - 1), "html", null, true);
                        echo "</a>
                    </li>
                ";
                    }
                    // line 65
                    echo "            ";
                }
                // line 66
                echo "            <li>
                <a href=\"";
                // line 67
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath((isset($context["route"]) || array_key_exists("route", $context) ? $context["route"] : (function () { throw new RuntimeError('Variable "route" does not exist.', 67, $this->source); })()), twig_array_merge((isset($context["query"]) || array_key_exists("query", $context) ? $context["query"] : (function () { throw new RuntimeError('Variable "query" does not exist.', 67, $this->source); })()), [(isset($context["pageParameterName"]) || array_key_exists("pageParameterName", $context) ? $context["pageParameterName"] : (function () { throw new RuntimeError('Variable "pageParameterName" does not exist.', 67, $this->source); })()) => (isset($context["pageCount"]) || array_key_exists("pageCount", $context) ? $context["pageCount"] : (function () { throw new RuntimeError('Variable "pageCount" does not exist.', 67, $this->source); })())])), "html", null, true);
                echo "\" class=\"page-link\">";
                echo twig_escape_filter($this->env, (isset($context["pageCount"]) || array_key_exists("pageCount", $context) ? $context["pageCount"] : (function () { throw new RuntimeError('Variable "pageCount" does not exist.', 67, $this->source); })()), "html", null, true);
                echo "</a>
            </li>
        ";
            }
            // line 70
            echo "
        ";
            // line 71
            if (array_key_exists("next", $context)) {
                // line 72
                echo "            <li class=\"page-item\">
                <a rel=\"next\" class=\"page-link\" href=\"";
                // line 73
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath((isset($context["route"]) || array_key_exists("route", $context) ? $context["route"] : (function () { throw new RuntimeError('Variable "route" does not exist.', 73, $this->source); })()), twig_array_merge((isset($context["query"]) || array_key_exists("query", $context) ? $context["query"] : (function () { throw new RuntimeError('Variable "query" does not exist.', 73, $this->source); })()), [(isset($context["pageParameterName"]) || array_key_exists("pageParameterName", $context) ? $context["pageParameterName"] : (function () { throw new RuntimeError('Variable "pageParameterName" does not exist.', 73, $this->source); })()) => (isset($context["next"]) || array_key_exists("next", $context) ? $context["next"] : (function () { throw new RuntimeError('Variable "next" does not exist.', 73, $this->source); })())])), "html", null, true);
                echo "\">Next&nbsp;&raquo;</a>
            </li>
        ";
            } else {
                // line 76
                echo "            <li class=\"page-item disabled\">
                <span class=\"page-link\">Next&nbsp;&raquo;</span>
            </li>
        ";
            }
            // line 80
            echo "    </ul>
";
        }
        // line 82
        echo "</nav>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "others/twitter_bootstrap_v4_pagination.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  205 => 82,  201 => 80,  195 => 76,  189 => 73,  186 => 72,  184 => 71,  181 => 70,  173 => 67,  170 => 66,  167 => 65,  159 => 62,  156 => 61,  150 => 57,  147 => 56,  144 => 55,  142 => 54,  139 => 53,  132 => 51,  126 => 48,  123 => 47,  115 => 44,  112 => 43,  109 => 42,  105 => 41,  102 => 40,  99 => 39,  93 => 35,  91 => 34,  86 => 32,  83 => 31,  81 => 30,  76 => 28,  73 => 27,  71 => 26,  68 => 25,  62 => 21,  56 => 18,  53 => 17,  51 => 16,  48 => 15,  46 => 14,  43 => 13,);
    }

    public function getSourceContext()
    {
        return new Source("{#
/**
 * @file
 * Twitter Bootstrap v4 Sliding pagination control implementation.
 *
 * View that can be used with the pagination module
 * from the Twitter Bootstrap v4 CSS Toolkit
 * https://v4-alpha.getbootstrap.com/components/pagination/
 *
 * @author Carlos Delgado <dev@ourcodeworld.com>
 */
#}
<nav aria-label=\"Page navigation example\">
{% if pageCount > 1 %}
    <ul class=\"pagination\">
        {% if previous is defined %}
            <li class=\"page-item\">
                <a rel=\"prev\" href=\"{{ path(route, query|merge({(pageParameterName): previous})) }}\" class=\"page-link\">&laquo;&nbsp; Previous</a>
            </li>
        {% else %}
            <li class=\"page-item disabled\">
                <span class=\"page-link\">&laquo;&nbsp; Previous</span>
            </li>
        {% endif %}

        {% if startPage > 1 %}
            <li class=\"page-item\">
                <a href=\"{{ path(route, query|merge({(pageParameterName): 1})) }}\" class=\"page-link\">1</a>
            </li>
            {% if startPage == 3 %}
                <li class=\"page-item\">
                    <a href=\"{{ path(route, query|merge({(pageParameterName): 2})) }}\" class=\"page-link\">2</a>
                </li>
            {% elseif startPage != 2 %}
                <li class=\"page-item disabled\">
                    <span class=\"page-link\">&hellip;</span>
                </li>
            {% endif %}
        {% endif %}

        {% for page in pagesInRange %}
            {% if page != current %}
                <li class=\"page-item\">
                    <a href=\"{{ path(route, query|merge({(pageParameterName): page})) }}\" class=\"page-link\">{{ page }}</a>
                </li>
            {% else %}
                <li class=\"active page-item\">
                    <span class=\"page-link\">{{ page }}</span>
                </li>
            {% endif %}

        {% endfor %}

        {% if pageCount > endPage %}
            {% if pageCount > (endPage + 1) %}
                {% if pageCount > (endPage + 2) %}
                    <li class=\"page-item disabled\">
                        <span class=\"page-link\">&hellip;</span>
                    </li>
                {% else %}
                    <li class=\"page-item\">
                        <a href=\"{{ path(route, query|merge({(pageParameterName): (pageCount - 1)})) }}\" class=\"page-link\">{{ pageCount -1 }}</a>
                    </li>
                {% endif %}
            {% endif %}
            <li>
                <a href=\"{{ path(route, query|merge({(pageParameterName): pageCount})) }}\" class=\"page-link\">{{ pageCount }}</a>
            </li>
        {% endif %}

        {% if next is defined %}
            <li class=\"page-item\">
                <a rel=\"next\" class=\"page-link\" href=\"{{ path(route, query|merge({(pageParameterName): next})) }}\">Next&nbsp;&raquo;</a>
            </li>
        {% else %}
            <li class=\"page-item disabled\">
                <span class=\"page-link\">Next&nbsp;&raquo;</span>
            </li>
        {% endif %}
    </ul>
{% endif %}
</nav>", "others/twitter_bootstrap_v4_pagination.html.twig", "C:\\Users\\aymen\\Desktop\\gitprojet\\digidreamers\\templates\\others\\twitter_bootstrap_v4_pagination.html.twig");
    }
}
