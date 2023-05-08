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

/* admin_colis/index.html.twig */
class __TwigTemplate_ebb2abdf5bedf5169f070a6363077fa3 extends Template
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
            'javascripts' => [$this, 'block_javascripts'],
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin_colis/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin_colis/index.html.twig"));

        $this->parent = $this->loadTemplate("baseadmin.html.twig", "admin_colis/index.html.twig", 1);
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

        echo "Colis index";
        
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
    <h1>Liste des colis</h1>

\t\t\t\t<div class=\"container-fluid p-0\">

\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t<input type=\"text\" id=\"search\" class=\"form-control\" placeholder=\"Search\"><br>
        </form>

\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t<div class=\"col-12\" style=\"overflow-x: scroll\">
\t\t\t\t\t\t\t<div class=\"card\" style=\"width: 4300px;\">
\t\t\t\t\t\t\t\t<div class=\"card-header\">
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"card-body\">
    <table border=\"1\" id=\"t\" class=\"table\">
        <thead>
            <tr>
                 <th><a href=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_colis_index", ["sort" => "id", "direction" => ((((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 24, $this->source); })()), "request", [], "any", false, false, false, 24), "get", [0 => "sort"], "method", false, false, false, 24) == "id") && (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 24, $this->source); })()), "request", [], "any", false, false, false, 24), "get", [0 => "direction"], "method", false, false, false, 24) == "asc"))) ? ("desc") : ("asc"))]), "html", null, true);
        echo "\">Id</a></th>
                                    <th><a href=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_colis_index", ["sort" => "nomExpediteur", "direction" => ((((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 25, $this->source); })()), "request", [], "any", false, false, false, 25), "get", [0 => "sort"], "method", false, false, false, 25) == "nomExpediteur") && (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 25, $this->source); })()), "request", [], "any", false, false, false, 25), "get", [0 => "direction"], "method", false, false, false, 25) == "asc"))) ? ("desc") : ("asc"))]), "html", null, true);
        echo "\">NomExpediteur</a></th>
                                    <th><a href=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_colis_index", ["sort" => "adresseExpediteur", "direction" => ((((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 26, $this->source); })()), "request", [], "any", false, false, false, 26), "get", [0 => "sort"], "method", false, false, false, 26) == "adresseExpediteur") && (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 26, $this->source); })()), "request", [], "any", false, false, false, 26), "get", [0 => "direction"], "method", false, false, false, 26) == "asc"))) ? ("desc") : ("asc"))]), "html", null, true);
        echo "\">AdresseExpediteur</a></th>
                                    <th><a href=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_colis_index", ["sort" => "nomDestinataire", "direction" => ((((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 27, $this->source); })()), "request", [], "any", false, false, false, 27), "get", [0 => "sort"], "method", false, false, false, 27) == "nomDestinataire") && (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 27, $this->source); })()), "request", [], "any", false, false, false, 27), "get", [0 => "direction"], "method", false, false, false, 27) == "asc"))) ? ("desc") : ("asc"))]), "html", null, true);
        echo "\">NomDestinataire</a></th>
                                    <th><a href=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_colis_index", ["sort" => "adresseDestinataire", "direction" => ((((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 28, $this->source); })()), "request", [], "any", false, false, false, 28), "get", [0 => "sort"], "method", false, false, false, 28) == "adresseDestinataire") && (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 28, $this->source); })()), "request", [], "any", false, false, false, 28), "get", [0 => "direction"], "method", false, false, false, 28) == "asc"))) ? ("desc") : ("asc"))]), "html", null, true);
        echo "\">AdresseDestinataire</a></th>
                                    <th><a href=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_colis_index", ["sort" => "poids", "direction" => ((((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 29, $this->source); })()), "request", [], "any", false, false, false, 29), "get", [0 => "sort"], "method", false, false, false, 29) == "poids") && (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 29, $this->source); })()), "request", [], "any", false, false, false, 29), "get", [0 => "direction"], "method", false, false, false, 29) == "asc"))) ? ("desc") : ("asc"))]), "html", null, true);
        echo "\">Poids</a></th>
                                    <th><a href=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_colis_index", ["sort" => "statut", "direction" => ((((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 30, $this->source); })()), "request", [], "any", false, false, false, 30), "get", [0 => "sort"], "method", false, false, false, 30) == "statut") && (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 30, $this->source); })()), "request", [], "any", false, false, false, 30), "get", [0 => "direction"], "method", false, false, false, 30) == "asc"))) ? ("desc") : ("asc"))]), "html", null, true);
        echo "\">Statut</a></th>
                                    <th><a href=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_colis_index", ["sort" => "dateExpedition", "direction" => ((((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 31, $this->source); })()), "request", [], "any", false, false, false, 31), "get", [0 => "sort"], "method", false, false, false, 31) == "dateExpedition") && (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 31, $this->source); })()), "request", [], "any", false, false, false, 31), "get", [0 => "direction"], "method", false, false, false, 31) == "asc"))) ? ("desc") : ("asc"))]), "html", null, true);
        echo "\">DateExpedition</a></th>
                <th>actions</th>
            </tr>
        </thead>
        <tbody id=\"all\">
       ";
        // line 36
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["colis"]) || array_key_exists("colis", $context) ? $context["colis"] : (function () { throw new RuntimeError('Variable "colis" does not exist.', 36, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["coli"]) {
            // line 37
            echo "    <tr>
        <td>";
            // line 38
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["coli"], "id", [], "any", false, false, false, 38), "html", null, true);
            echo "</td>
        <td>";
            // line 39
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["coli"], "nomExpediteur", [], "any", false, false, false, 39), "html", null, true);
            echo "</td>
        <td>";
            // line 40
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["coli"], "adresseExpediteur", [], "any", false, false, false, 40), "html", null, true);
            echo "</td>
        <td>";
            // line 41
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["coli"], "nomDestinataire", [], "any", false, false, false, 41), "html", null, true);
            echo "</td>
        <td>";
            // line 42
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["coli"], "adresseDestinataire", [], "any", false, false, false, 42), "html", null, true);
            echo "</td>
        <td>";
            // line 43
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["coli"], "poids", [], "any", false, false, false, 43), "html", null, true);
            echo "</td>
        <td>";
            // line 44
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["coli"], "statut", [], "any", false, false, false, 44), "html", null, true);
            echo "</td>
        <td>";
            // line 45
            ((twig_get_attribute($this->env, $this->source, $context["coli"], "dateExpedition", [], "any", false, false, false, 45)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["coli"], "dateExpedition", [], "any", false, false, false, 45), "Y-m-d"), "html", null, true))) : (print ("")));
            echo "</td>
        <td>
            <a href=\"";
            // line 47
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_colis_show", ["id" => twig_get_attribute($this->env, $this->source, $context["coli"], "id", [], "any", false, false, false, 47)]), "html", null, true);
            echo "\">Afficher</a>
            <a href=\"";
            // line 48
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_colis_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["coli"], "id", [], "any", false, false, false, 48)]), "html", null, true);
            echo "\">Modifier</a>
        </td>
    </tr>";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 51
            echo "\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t <td colspan=\"9\">Aucun colis trouvé</td>
\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['coli'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 55
        echo "\t\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t\t<tbody id=\"searchtab\"></tbody>
\t\t\t\t\t\t</table>




<!-- <script>
const searchForm = document.querySelector('#search-form');
const tableBody = document.querySelector('#table-body');

// Ajouter un écouteur d'événement pour le formulaire
searchForm.addEventListener('submit', function(event) {
  // Empêcher la soumission du formulaire
  event.preventDefault();

  // Récupérer les valeurs des champs de formulaire
  const nomExpediteur = document.querySelector('#nomExpediteur').value;
  const nomDestinataire = document.querySelector('#nomDestinataire').value;
  const poids = document.querySelector('#poids').value;

  // Envoyer une requête AJAX avec les paramètres de recherche
  const xhr = new XMLHttpRequest();
xhr.open('GET', http://localhost:8000/admin/colis/?nomExpediteur=\${nomExpediteur}&nomDestinataire=\${nomDestinataire}&poids=\${poids});
xhr.onload = function() {
  if (xhr.status === 200) {
    // Effacer le contenu précédent du tableau
    tableBody.innerHTML = '';

    // Vérifier que la réponse est bien du JSON
    let colis;
    try {
      colis = JSON.parse(xhr.responseText);
    } catch (e) {
      console.error(\"La réponse n'est pas du JSON:\", xhr.responseText);
      return;
    }

    // Ajouter les nouvelles données dans le tableau
    for (const coli of colis) {
      const row = document.createElement('tr');
      row.innerHTML = `
        <td>\${coli.id}</td>
        <td>\${coli.nomExpediteur}</td>
        <td>\${coli.adresseExpediteur}</td>
        <td>\${coli.nomDestinataire}</td>
        <td>\${coli.adresseDestinataire}</td>
        <td>\${coli.poids}</td>
        <td>\${coli.statut}</td>
        <td>\${coli.dateExpedition ? new Date(coli.dateExpedition).toLocaleDateString() : ''}</td>
        <td>
          <a href=\"\${coli.path_show}\">Afficher</a>
          <a href=\"\${coli.path_edit}\">Modifier</a>
        </td>
      `;
      tableBody.appendChild(row);
    }
  } else {
    console.error(xhr.statusText);
  }
};
xhr.onerror = function() {
  console.error(xhr.statusText);
};
xhr.send();
});
</script> -->



<a href=\"";
        // line 125
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_colis_new");
        echo "\">Ajouter un nouveau colis</a>

";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 128
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 129
        echo "\t\t\t\t\t\t";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "


\t\t\t\t\t\t<script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js\"></script>
\t\t\t\t\t\t<script>
\t\t\t\t\t\t\t\$(document).ready(function () {
\$(\"#search\").keyup(function () {
var value = \$(this).val();
console.log(\"value : \")
\$.ajax({
url: \"";
        // line 139
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_adminC_search");
        echo "\",
type: 'GET',
data: {
'searchValue': value
},
success: function (retour) {
if (retour) {
\$('#t tbody#searchtab').empty();
\$.each(JSON.parse(retour), function (i, obj) {
\$('#t tbody#all').hide();
\$('#t tbody#searchtab').append('<tr><td> '+obj.id+' </td><td> '+obj.nomExpediteur+' </td><td> '+obj.adresseExpediteur +' </td><td> '+obj.nomDestinataire +' </td><td> '+obj.adresseDestinataire+' </td><td> '+obj.poids+' </td><td> '+obj.statut+' </td><td> '+obj.dateExpedition+' </td></tr>');
});
} else {
\$('#t tbody#all').show();
\$('#t tbody#searchtab').empty();
\$('#t tbody#searchtab').fadeIn('fast');
}
}
});
return false;
});
});
\$(document).ready(function () {
\$(\"body\").on(\"click\", \"#btn-block\", function () {
var userId = \$(this).data(\"id\");
var status = \$(this).text().trim();
\$.ajax({
url: \"/user/block/\" + userId,
type: \"GET\",
data: {
status: status
},
success: function (response) {
if (response.success) { // Mise à jour de l'état du bouton
var button = \$(\"#btn-block[data-id='\" + userId + \"']\");
if (status === \"Bloquer\") {
button.text(\"Débloquer\");
} else {
button.text(\"Bloquer\");
}
} else {
alert(\"Erreur : \" + response.message);
}
},
error: function () {
alert(\"Une erreur est survenue lors de la requête AJAX.\");
}
});
});
});
\t\t\t\t\t\t</script>


\t\t\t\t\t";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "admin_colis/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  316 => 139,  302 => 129,  292 => 128,  279 => 125,  207 => 55,  198 => 51,  190 => 48,  186 => 47,  181 => 45,  177 => 44,  173 => 43,  169 => 42,  165 => 41,  161 => 40,  157 => 39,  153 => 38,  150 => 37,  145 => 36,  137 => 31,  133 => 30,  129 => 29,  125 => 28,  121 => 27,  117 => 26,  113 => 25,  109 => 24,  89 => 6,  79 => 5,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'baseadmin.html.twig' %}

{% block title %}Colis index{% endblock %}

{% block body %}

    <h1>Liste des colis</h1>

\t\t\t\t<div class=\"container-fluid p-0\">

\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t<input type=\"text\" id=\"search\" class=\"form-control\" placeholder=\"Search\"><br>
        </form>

\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t<div class=\"col-12\" style=\"overflow-x: scroll\">
\t\t\t\t\t\t\t<div class=\"card\" style=\"width: 4300px;\">
\t\t\t\t\t\t\t\t<div class=\"card-header\">
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"card-body\">
    <table border=\"1\" id=\"t\" class=\"table\">
        <thead>
            <tr>
                 <th><a href=\"{{ path('app_admin_colis_index', { 'sort': 'id', 'direction': (app.request.get('sort') == 'id' and app.request.get('direction') == 'asc') ? 'desc' : 'asc' }) }}\">Id</a></th>
                                    <th><a href=\"{{ path('app_admin_colis_index', { 'sort': 'nomExpediteur', 'direction': (app.request.get('sort') == 'nomExpediteur' and app.request.get('direction') == 'asc') ? 'desc' : 'asc' }) }}\">NomExpediteur</a></th>
                                    <th><a href=\"{{ path('app_admin_colis_index', { 'sort': 'adresseExpediteur', 'direction': (app.request.get('sort') == 'adresseExpediteur' and app.request.get('direction') == 'asc') ? 'desc' : 'asc' }) }}\">AdresseExpediteur</a></th>
                                    <th><a href=\"{{ path('app_admin_colis_index', { 'sort': 'nomDestinataire', 'direction': (app.request.get('sort') == 'nomDestinataire' and app.request.get('direction') == 'asc') ? 'desc' : 'asc' }) }}\">NomDestinataire</a></th>
                                    <th><a href=\"{{ path('app_admin_colis_index', { 'sort': 'adresseDestinataire', 'direction': (app.request.get('sort') == 'adresseDestinataire' and app.request.get('direction') == 'asc') ? 'desc' : 'asc' }) }}\">AdresseDestinataire</a></th>
                                    <th><a href=\"{{ path('app_admin_colis_index', { 'sort': 'poids', 'direction': (app.request.get('sort') == 'poids' and app.request.get('direction') == 'asc') ? 'desc' : 'asc' }) }}\">Poids</a></th>
                                    <th><a href=\"{{ path('app_admin_colis_index', { 'sort': 'statut', 'direction': (app.request.get('sort') == 'statut' and app.request.get('direction') == 'asc') ? 'desc' : 'asc' }) }}\">Statut</a></th>
                                    <th><a href=\"{{ path('app_admin_colis_index', { 'sort': 'dateExpedition', 'direction': (app.request.get('sort') == 'dateExpedition' and app.request.get('direction') == 'asc') ? 'desc' : 'asc' }) }}\">DateExpedition</a></th>
                <th>actions</th>
            </tr>
        </thead>
        <tbody id=\"all\">
       {% for coli in colis %}
    <tr>
        <td>{{ coli.id }}</td>
        <td>{{ coli.nomExpediteur }}</td>
        <td>{{ coli.adresseExpediteur }}</td>
        <td>{{ coli.nomDestinataire }}</td>
        <td>{{ coli.adresseDestinataire }}</td>
        <td>{{ coli.poids }}</td>
        <td>{{ coli.statut }}</td>
        <td>{{ coli.dateExpedition ? coli.dateExpedition|date('Y-m-d') : '' }}</td>
        <td>
            <a href=\"{{ path('app_admin_colis_show', {'id': coli.id}) }}\">Afficher</a>
            <a href=\"{{ path('app_admin_colis_edit', {'id': coli.id}) }}\">Modifier</a>
        </td>
    </tr>{% else %}
\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t <td colspan=\"9\">Aucun colis trouvé</td>
\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t\t<tbody id=\"searchtab\"></tbody>
\t\t\t\t\t\t</table>




<!-- <script>
const searchForm = document.querySelector('#search-form');
const tableBody = document.querySelector('#table-body');

// Ajouter un écouteur d'événement pour le formulaire
searchForm.addEventListener('submit', function(event) {
  // Empêcher la soumission du formulaire
  event.preventDefault();

  // Récupérer les valeurs des champs de formulaire
  const nomExpediteur = document.querySelector('#nomExpediteur').value;
  const nomDestinataire = document.querySelector('#nomDestinataire').value;
  const poids = document.querySelector('#poids').value;

  // Envoyer une requête AJAX avec les paramètres de recherche
  const xhr = new XMLHttpRequest();
xhr.open('GET', http://localhost:8000/admin/colis/?nomExpediteur=\${nomExpediteur}&nomDestinataire=\${nomDestinataire}&poids=\${poids});
xhr.onload = function() {
  if (xhr.status === 200) {
    // Effacer le contenu précédent du tableau
    tableBody.innerHTML = '';

    // Vérifier que la réponse est bien du JSON
    let colis;
    try {
      colis = JSON.parse(xhr.responseText);
    } catch (e) {
      console.error(\"La réponse n'est pas du JSON:\", xhr.responseText);
      return;
    }

    // Ajouter les nouvelles données dans le tableau
    for (const coli of colis) {
      const row = document.createElement('tr');
      row.innerHTML = `
        <td>\${coli.id}</td>
        <td>\${coli.nomExpediteur}</td>
        <td>\${coli.adresseExpediteur}</td>
        <td>\${coli.nomDestinataire}</td>
        <td>\${coli.adresseDestinataire}</td>
        <td>\${coli.poids}</td>
        <td>\${coli.statut}</td>
        <td>\${coli.dateExpedition ? new Date(coli.dateExpedition).toLocaleDateString() : ''}</td>
        <td>
          <a href=\"\${coli.path_show}\">Afficher</a>
          <a href=\"\${coli.path_edit}\">Modifier</a>
        </td>
      `;
      tableBody.appendChild(row);
    }
  } else {
    console.error(xhr.statusText);
  }
};
xhr.onerror = function() {
  console.error(xhr.statusText);
};
xhr.send();
});
</script> -->



<a href=\"{{ path('app_admin_colis_new') }}\">Ajouter un nouveau colis</a>

{% endblock %}
{% block javascripts %}
\t\t\t\t\t\t{{ parent() }}


\t\t\t\t\t\t<script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js\"></script>
\t\t\t\t\t\t<script>
\t\t\t\t\t\t\t\$(document).ready(function () {
\$(\"#search\").keyup(function () {
var value = \$(this).val();
console.log(\"value : \")
\$.ajax({
url: \"{{ path('app_adminC_search') }}\",
type: 'GET',
data: {
'searchValue': value
},
success: function (retour) {
if (retour) {
\$('#t tbody#searchtab').empty();
\$.each(JSON.parse(retour), function (i, obj) {
\$('#t tbody#all').hide();
\$('#t tbody#searchtab').append('<tr><td> '+obj.id+' </td><td> '+obj.nomExpediteur+' </td><td> '+obj.adresseExpediteur +' </td><td> '+obj.nomDestinataire +' </td><td> '+obj.adresseDestinataire+' </td><td> '+obj.poids+' </td><td> '+obj.statut+' </td><td> '+obj.dateExpedition+' </td></tr>');
});
} else {
\$('#t tbody#all').show();
\$('#t tbody#searchtab').empty();
\$('#t tbody#searchtab').fadeIn('fast');
}
}
});
return false;
});
});
\$(document).ready(function () {
\$(\"body\").on(\"click\", \"#btn-block\", function () {
var userId = \$(this).data(\"id\");
var status = \$(this).text().trim();
\$.ajax({
url: \"/user/block/\" + userId,
type: \"GET\",
data: {
status: status
},
success: function (response) {
if (response.success) { // Mise à jour de l'état du bouton
var button = \$(\"#btn-block[data-id='\" + userId + \"']\");
if (status === \"Bloquer\") {
button.text(\"Débloquer\");
} else {
button.text(\"Bloquer\");
}
} else {
alert(\"Erreur : \" + response.message);
}
},
error: function () {
alert(\"Une erreur est survenue lors de la requête AJAX.\");
}
});
});
});
\t\t\t\t\t\t</script>


\t\t\t\t\t{% endblock %}", "admin_colis/index.html.twig", "C:\\Users\\aymen\\Desktop\\gitprojet\\digidreamers\\templates\\admin_colis\\index.html.twig");
    }
}
