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

/* test/contact.html.twig */
class __TwigTemplate_6698aafc00b6efc43037cac8bd91f59c extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "test/contact.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "test/contact.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"fr\">
\t<head>
\t\t<meta charset=\"UTF-8\">
\t\t<meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
\t\t<meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
\t\t<title>Contact</title>
\t\t<link rel=\"stylesheet\" href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/style.css"), "html", null, true);
        echo "\">
\t</head>
\t<body class=\"body-form\">
\t\t<form class=\"form-container\" action=\"cv/CV-emploi.pdf\">
\t\t\t<h2 class=\"form-title\">Télécharger mon CV</h2>
\t\t\t<div class=\"input-container\">
\t\t\t\t<label for=\"name\">Nom :</label>
\t\t\t\t<input type=\"text\" id=\"name\" name=\"name\" required class=\"input-field\" placeholder=\"Entrez votre nom\">
\t\t\t</div>
\t\t\t<div class=\"input-container\">
\t\t\t\t<label for=\"prenom\">Prénom :</label>
\t\t\t\t<input type=\"text\" id=\"prenom\" name=\"prenom\" required class=\"input-field\" placeholder=\"Entrez votre prénom\">
\t\t\t</div>
\t\t\t<div class=\"input-container\">
\t\t\t\t<label for=\"email\">Adresse mail :</label>
\t\t\t\t<input type=\"email\" id=\"email\" name=\"email\" required class=\"input-field\" placeholder=\"Entrez votre adresse e-mail\">
\t\t\t</div>
\t\t\t<div class=\"input-container\">
\t\t\t\t<label for=\"societe\">Nom de la société :</label>
\t\t\t\t<input type=\"text\" id=\"societe\" name=\"societe\" required class=\"input-field\" placeholder=\"Entrez le nom de votre société\">
\t\t\t</div>
\t\t\t<div class=\"input-container\">
\t\t\t\t<label for=\"telephone\">Numéro de téléphone :</label>
\t\t\t\t<input type=\"tel\" id=\"telephone\" name=\"telephone\" required class=\"input-field\" placeholder=\"Entrez votre numéro de téléphone\">
\t\t\t</div>
\t\t\t<button type=\"submit\" class=\"submit-btn\">Télécharger</button>
\t\t</form>
\t\t<footer>
\t\t\t<h3>
\t\t\t\t<strong>
\t\t\t\t\t©
\t\t\t\t</strong>copyright ibidem iut roanne 2023</h3>
\t\t\t<span class=\"vertical-line\"></span>
\t\t\t<table>
\t\t\t\t<tr>
\t\t\t\t\t<h3>
\t\t\t\t\t\tNous contacter</h3>
\t\t\t\t</tr>

\t\t\t\t<td>
\t\t\t\t\t<a href=\"#\"><img src=\"image/twitter.PNG\" alt=\"\"></a>
\t\t\t\t\t<a href=\"#\"><img src=\"image/insta.PNG\" alt=\"\"></a>
\t\t\t\t\t<a href=\"#\"><img src=\"image/youtube.PNG\" alt=\"\"></a>


\t\t\t\t</td>
\t\t\t</table>

\t\t</footer>
\t\t<script src=\"";
        // line 57
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/app.js"), "html", null, true);
        echo "\"></script>
\t</body>
</html></body></html></form></body></html>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "test/contact.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  104 => 57,  52 => 8,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html lang=\"fr\">
\t<head>
\t\t<meta charset=\"UTF-8\">
\t\t<meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
\t\t<meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
\t\t<title>Contact</title>
\t\t<link rel=\"stylesheet\" href=\"{{ asset('assets/style.css') }}\">
\t</head>
\t<body class=\"body-form\">
\t\t<form class=\"form-container\" action=\"cv/CV-emploi.pdf\">
\t\t\t<h2 class=\"form-title\">Télécharger mon CV</h2>
\t\t\t<div class=\"input-container\">
\t\t\t\t<label for=\"name\">Nom :</label>
\t\t\t\t<input type=\"text\" id=\"name\" name=\"name\" required class=\"input-field\" placeholder=\"Entrez votre nom\">
\t\t\t</div>
\t\t\t<div class=\"input-container\">
\t\t\t\t<label for=\"prenom\">Prénom :</label>
\t\t\t\t<input type=\"text\" id=\"prenom\" name=\"prenom\" required class=\"input-field\" placeholder=\"Entrez votre prénom\">
\t\t\t</div>
\t\t\t<div class=\"input-container\">
\t\t\t\t<label for=\"email\">Adresse mail :</label>
\t\t\t\t<input type=\"email\" id=\"email\" name=\"email\" required class=\"input-field\" placeholder=\"Entrez votre adresse e-mail\">
\t\t\t</div>
\t\t\t<div class=\"input-container\">
\t\t\t\t<label for=\"societe\">Nom de la société :</label>
\t\t\t\t<input type=\"text\" id=\"societe\" name=\"societe\" required class=\"input-field\" placeholder=\"Entrez le nom de votre société\">
\t\t\t</div>
\t\t\t<div class=\"input-container\">
\t\t\t\t<label for=\"telephone\">Numéro de téléphone :</label>
\t\t\t\t<input type=\"tel\" id=\"telephone\" name=\"telephone\" required class=\"input-field\" placeholder=\"Entrez votre numéro de téléphone\">
\t\t\t</div>
\t\t\t<button type=\"submit\" class=\"submit-btn\">Télécharger</button>
\t\t</form>
\t\t<footer>
\t\t\t<h3>
\t\t\t\t<strong>
\t\t\t\t\t©
\t\t\t\t</strong>copyright ibidem iut roanne 2023</h3>
\t\t\t<span class=\"vertical-line\"></span>
\t\t\t<table>
\t\t\t\t<tr>
\t\t\t\t\t<h3>
\t\t\t\t\t\tNous contacter</h3>
\t\t\t\t</tr>

\t\t\t\t<td>
\t\t\t\t\t<a href=\"#\"><img src=\"image/twitter.PNG\" alt=\"\"></a>
\t\t\t\t\t<a href=\"#\"><img src=\"image/insta.PNG\" alt=\"\"></a>
\t\t\t\t\t<a href=\"#\"><img src=\"image/youtube.PNG\" alt=\"\"></a>


\t\t\t\t</td>
\t\t\t</table>

\t\t</footer>
\t\t<script src=\"{{ asset('assets/app.js') }}\"></script>
\t</body>
</html></body></html></form></body></html>
", "test/contact.html.twig", "C:\\Users\\userlocal\\sae14\\templates\\test\\contact.html.twig");
    }
}
