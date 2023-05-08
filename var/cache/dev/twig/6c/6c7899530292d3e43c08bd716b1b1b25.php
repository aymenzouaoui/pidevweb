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

/* documentexpedition/print.html.twig */
class __TwigTemplate_e4514fce5cf13b961f67bd6de22d7fa4 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "documentexpedition/print.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "documentexpedition/print.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
<head>
    <meta charset=\"utf-8\" />
    <title>Document d'expédition</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            font-size: 25px;
        }
        #header {
            display: flex;
            align-items: center;
            justify-content: space-between;
            margin-bottom: 20px;
        }
        #logo {
            width: 200px;
        }
        #title {
            text-align: center;
            margin: 0;
        }
        table {
            border-collapse: collapse;
            margin: 0 auto 22px;
        }
        th, td {
            padding: 5px;
            border: 1px solid #ccc;
        }
        th {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>
    <div id=\"header\">
        <img id=\"logo\" src=\"C:\\Users\\aymen\\Pictures\\logo.png\" alt=\"Logo\">
        <h1 id=\"title\">Document d'expédition</h1>
    </div>
    <table>
        <tr>
            <th>Expéditeur</th>
            <th>Destinataire</th>
        </tr>
        <tr>
            <td>
                <p><strong>Nom :</strong> ";
        // line 49
        echo twig_escape_filter($this->env, (isset($context["nomExpediteur"]) || array_key_exists("nomExpediteur", $context) ? $context["nomExpediteur"] : (function () { throw new RuntimeError('Variable "nomExpediteur" does not exist.', 49, $this->source); })()), "html", null, true);
        echo "</p>
                <p><strong>Adresse :</strong> ";
        // line 50
        echo twig_escape_filter($this->env, (isset($context["adresseExpediteur"]) || array_key_exists("adresseExpediteur", $context) ? $context["adresseExpediteur"] : (function () { throw new RuntimeError('Variable "adresseExpediteur" does not exist.', 50, $this->source); })()), "html", null, true);
        echo "</p>
                <p><strong>Date d'expédition :</strong> ";
        // line 51
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, (isset($context["dateexpedition"]) || array_key_exists("dateexpedition", $context) ? $context["dateexpedition"] : (function () { throw new RuntimeError('Variable "dateexpedition" does not exist.', 51, $this->source); })()), "Y-m-d"), "html", null, true);
        echo "</p>
            </td>
            <td>
                <p><strong>Nom :</strong> ";
        // line 54
        echo twig_escape_filter($this->env, (isset($context["nomDestinataire"]) || array_key_exists("nomDestinataire", $context) ? $context["nomDestinataire"] : (function () { throw new RuntimeError('Variable "nomDestinataire" does not exist.', 54, $this->source); })()), "html", null, true);
        echo "</p>
                <p><strong>Adresse :</strong> ";
        // line 55
        echo twig_escape_filter($this->env, (isset($context["adresseDestinataire"]) || array_key_exists("adresseDestinataire", $context) ? $context["adresseDestinataire"] : (function () { throw new RuntimeError('Variable "adresseDestinataire" does not exist.', 55, $this->source); })()), "html", null, true);
        echo "</p>
                <p><strong>Date de signature :</strong> ";
        // line 56
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, (isset($context["dateSignature"]) || array_key_exists("dateSignature", $context) ? $context["dateSignature"] : (function () { throw new RuntimeError('Variable "dateSignature" does not exist.', 56, $this->source); })()), "Y-m-d"), "html", null, true);
        echo "</p>
                <p><strong>Poids :</strong> ";
        // line 57
        echo twig_escape_filter($this->env, (isset($context["poids"]) || array_key_exists("poids", $context) ? $context["poids"] : (function () { throw new RuntimeError('Variable "poids" does not exist.', 57, $this->source); })()), "html", null, true);
        echo " kg</p>
            </td>
        </tr>
    </table>
    <p><strong>Description :</strong> ";
        // line 61
        echo twig_escape_filter($this->env, (isset($context["description"]) || array_key_exists("description", $context) ? $context["description"] : (function () { throw new RuntimeError('Variable "description" does not exist.', 61, $this->source); })()), "html", null, true);
        echo "</p>
</body>
</html>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "documentexpedition/print.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  126 => 61,  119 => 57,  115 => 56,  111 => 55,  107 => 54,  101 => 51,  97 => 50,  93 => 49,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html>
<head>
    <meta charset=\"utf-8\" />
    <title>Document d'expédition</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            font-size: 25px;
        }
        #header {
            display: flex;
            align-items: center;
            justify-content: space-between;
            margin-bottom: 20px;
        }
        #logo {
            width: 200px;
        }
        #title {
            text-align: center;
            margin: 0;
        }
        table {
            border-collapse: collapse;
            margin: 0 auto 22px;
        }
        th, td {
            padding: 5px;
            border: 1px solid #ccc;
        }
        th {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>
    <div id=\"header\">
        <img id=\"logo\" src=\"C:\\Users\\aymen\\Pictures\\logo.png\" alt=\"Logo\">
        <h1 id=\"title\">Document d'expédition</h1>
    </div>
    <table>
        <tr>
            <th>Expéditeur</th>
            <th>Destinataire</th>
        </tr>
        <tr>
            <td>
                <p><strong>Nom :</strong> {{ nomExpediteur }}</p>
                <p><strong>Adresse :</strong> {{ adresseExpediteur }}</p>
                <p><strong>Date d'expédition :</strong> {{ dateexpedition|date('Y-m-d') }}</p>
            </td>
            <td>
                <p><strong>Nom :</strong> {{ nomDestinataire }}</p>
                <p><strong>Adresse :</strong> {{ adresseDestinataire }}</p>
                <p><strong>Date de signature :</strong> {{ dateSignature|date('Y-m-d') }}</p>
                <p><strong>Poids :</strong> {{ poids }} kg</p>
            </td>
        </tr>
    </table>
    <p><strong>Description :</strong> {{ description }}</p>
</body>
</html>
", "documentexpedition/print.html.twig", "C:\\Users\\aymen\\Desktop\\gitprojet\\digidreamers\\templates\\documentexpedition\\print.html.twig");
    }
}
