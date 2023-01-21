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

/* test/cv.html.twig */
class __TwigTemplate_fe65a4fcd3849043834e99867626e1b2 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "test/cv.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "test/cv.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"fr\">
\t<head>
\t\t<meta charset=\"UTF-8\">
\t\t<meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
\t\t<meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
\t\t<title>Mon cv</title>
\t\t<link rel=\"stylesheet\" href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/style.css"), "html", null, true);
        echo "\">


\t</head>
\t<body id=\"body-cv\">
\t\t<div class=\"header-section\">
\t\t\t<strong>
\t\t\t\t<em>
\t\t\t\t\t<h1>Expert en cybersécurité</h1>
\t\t\t\t</em>
\t\t\t</strong>
\t\t</div>
\t\t<div class=\"container-cv\">
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col\">
\t\t\t\t\t<strong>
\t\t\t\t\t\t<em>
\t\t\t\t\t\t\t<h2>Formations</h2>
\t\t\t\t\t\t</em>
\t\t\t\t\t</strong>
\t\t\t\t\t<img class=\"section-img\" src=\"image/document.png\" alt=\"Icone-de-formation\">
\t\t\t\t\t<ul class=\"section-text\">
\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t2022-2023<br>
\t\t\t\t\t\t\tPréparation de la 1ère année de B.U.T. Réseau et Télécommunication, I.U.T.  Roanne,<br>
\t\t\t\t\t\t\tUniversité de Jean Monnet Saint Etienne.
\t\t\t\t\t\t</li><br>
\t\t\t\t\t\t<li>2021-2022<br>1ère année de BTS Réseau informatique et télécommunication,<br>
\t\t\t\t\t\t\tInstitut international Polytechnique des Elites d’Abidjan (Côte d’Ivoire)</li><br>
\t\t\t\t\t\t<li>2020-2021<br>
\t\t\t\t\t\t\tBaccalauréat série D, Lycée de Garçons de Bingerville (Abidjan).

\t\t\t\t\t\t</li>
\t\t\t\t\t</ul>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col\">
\t\t\t\t\t<strong>
\t\t\t\t\t\t<em>
\t\t\t\t\t\t\t<h2>Compétences</h2>
\t\t\t\t\t\t</em>
\t\t\t\t\t</strong>
\t\t\t\t\t<img class=\"section-img\" src=\"/image/competences.png\" alt=\"Icone-de-compétence\">
\t\t\t\t\t<ul class=\"section-text\">
\t\t\t\t\t\t<li>HTML et CSS</li>
\t\t\t\t\t\t<li>PYHON et LANGAGE C</li>
\t\t\t\t\t\t<li>RESEAUX et ADMINISTRATION
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li>conception d'un reseau local
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li>Mise en place des routeurs et des switchs</li>
\t\t\t\t\t\t<li>mise en place d'une securite via SSH</li>
\t\t\t\t\t</ul>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col\">
\t\t\t\t\t<strong>
\t\t\t\t\t\t<em>
\t\t\t\t\t\t\t<h2>Expériences</h2>
\t\t\t\t\t\t</em>
\t\t\t\t\t</strong>
\t\t\t\t\t<img class=\"section-img\" src=\"image/vivre.png\" alt=\"Icone-d'expérience\">
\t\t\t\t\t<ul class=\"section-text\">
\t\t\t\t\t\t<li>Expert en cybersécurité - XYZ Inc.</li>
\t\t\t\t\t\t<li>Stagiaire en cybersécurité - ABC Inc.</li>
\t\t\t\t\t\t<li>programmation web</li>
\t\t\t\t\t\t<li>conception d'un reseau local
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li>programmation
\t\t\t\t\t\t</li>
\t\t\t\t\t</ul>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col\">
\t\t\t\t\t<strong>
\t\t\t\t\t\t<em>
\t\t\t\t\t\t\t<h2>Loisirs</h2>
\t\t\t\t\t\t</em>
\t\t\t\t\t</strong>
\t\t\t\t\t<img class=\"section-img\" src=\"image/sports-de-balles.png\" alt=\"Iconed'expérience\">
\t\t\t\t\t<ul class=\"section-text\">
\t\t\t\t\t\t<li>Football</li>
\t\t\t\t\t\t<li>Basket-ball</li>
\t\t\t\t\t\t<li>Tennis</li>
\t\t\t\t\t\t<li>Mangas</li>
\t\t\t\t\t\t<li>Gaming</li>
\t\t\t\t\t</ul>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col\">
\t\t\t\t\t<strong>
\t\t\t\t\t\t<em>
\t\t\t\t\t\t\t<h2>Contact</h2>
\t\t\t\t\t\t</em>
\t\t\t\t\t</strong>
\t\t\t\t\t<img class=\"section-img\" src=\"image/communiquer.png\" alt=\"Iconed'expérience\">
\t\t\t\t\t<ul class=\"section-text\">
\t\t\t\t\t\t<li>Diallo alpha , Etudianr en premiere année
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li>Email : monemail@domaine.com</li>
\t\t\t\t\t\t<li>Téléphone : +33 (0)6 00 00 00 00</li>
\t\t\t\t\t\t<li>Adresse : 12 rue de la réussite, 75000 Paris</li>
\t\t\t\t\t</ul>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>

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
\t</body>
</html></body></html>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "test/cv.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  52 => 8,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html lang=\"fr\">
\t<head>
\t\t<meta charset=\"UTF-8\">
\t\t<meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
\t\t<meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
\t\t<title>Mon cv</title>
\t\t<link rel=\"stylesheet\" href=\"{{ asset('assets/style.css') }}\">


\t</head>
\t<body id=\"body-cv\">
\t\t<div class=\"header-section\">
\t\t\t<strong>
\t\t\t\t<em>
\t\t\t\t\t<h1>Expert en cybersécurité</h1>
\t\t\t\t</em>
\t\t\t</strong>
\t\t</div>
\t\t<div class=\"container-cv\">
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col\">
\t\t\t\t\t<strong>
\t\t\t\t\t\t<em>
\t\t\t\t\t\t\t<h2>Formations</h2>
\t\t\t\t\t\t</em>
\t\t\t\t\t</strong>
\t\t\t\t\t<img class=\"section-img\" src=\"image/document.png\" alt=\"Icone-de-formation\">
\t\t\t\t\t<ul class=\"section-text\">
\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t2022-2023<br>
\t\t\t\t\t\t\tPréparation de la 1ère année de B.U.T. Réseau et Télécommunication, I.U.T.  Roanne,<br>
\t\t\t\t\t\t\tUniversité de Jean Monnet Saint Etienne.
\t\t\t\t\t\t</li><br>
\t\t\t\t\t\t<li>2021-2022<br>1ère année de BTS Réseau informatique et télécommunication,<br>
\t\t\t\t\t\t\tInstitut international Polytechnique des Elites d’Abidjan (Côte d’Ivoire)</li><br>
\t\t\t\t\t\t<li>2020-2021<br>
\t\t\t\t\t\t\tBaccalauréat série D, Lycée de Garçons de Bingerville (Abidjan).

\t\t\t\t\t\t</li>
\t\t\t\t\t</ul>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col\">
\t\t\t\t\t<strong>
\t\t\t\t\t\t<em>
\t\t\t\t\t\t\t<h2>Compétences</h2>
\t\t\t\t\t\t</em>
\t\t\t\t\t</strong>
\t\t\t\t\t<img class=\"section-img\" src=\"/image/competences.png\" alt=\"Icone-de-compétence\">
\t\t\t\t\t<ul class=\"section-text\">
\t\t\t\t\t\t<li>HTML et CSS</li>
\t\t\t\t\t\t<li>PYHON et LANGAGE C</li>
\t\t\t\t\t\t<li>RESEAUX et ADMINISTRATION
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li>conception d'un reseau local
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li>Mise en place des routeurs et des switchs</li>
\t\t\t\t\t\t<li>mise en place d'une securite via SSH</li>
\t\t\t\t\t</ul>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col\">
\t\t\t\t\t<strong>
\t\t\t\t\t\t<em>
\t\t\t\t\t\t\t<h2>Expériences</h2>
\t\t\t\t\t\t</em>
\t\t\t\t\t</strong>
\t\t\t\t\t<img class=\"section-img\" src=\"image/vivre.png\" alt=\"Icone-d'expérience\">
\t\t\t\t\t<ul class=\"section-text\">
\t\t\t\t\t\t<li>Expert en cybersécurité - XYZ Inc.</li>
\t\t\t\t\t\t<li>Stagiaire en cybersécurité - ABC Inc.</li>
\t\t\t\t\t\t<li>programmation web</li>
\t\t\t\t\t\t<li>conception d'un reseau local
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li>programmation
\t\t\t\t\t\t</li>
\t\t\t\t\t</ul>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col\">
\t\t\t\t\t<strong>
\t\t\t\t\t\t<em>
\t\t\t\t\t\t\t<h2>Loisirs</h2>
\t\t\t\t\t\t</em>
\t\t\t\t\t</strong>
\t\t\t\t\t<img class=\"section-img\" src=\"image/sports-de-balles.png\" alt=\"Iconed'expérience\">
\t\t\t\t\t<ul class=\"section-text\">
\t\t\t\t\t\t<li>Football</li>
\t\t\t\t\t\t<li>Basket-ball</li>
\t\t\t\t\t\t<li>Tennis</li>
\t\t\t\t\t\t<li>Mangas</li>
\t\t\t\t\t\t<li>Gaming</li>
\t\t\t\t\t</ul>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col\">
\t\t\t\t\t<strong>
\t\t\t\t\t\t<em>
\t\t\t\t\t\t\t<h2>Contact</h2>
\t\t\t\t\t\t</em>
\t\t\t\t\t</strong>
\t\t\t\t\t<img class=\"section-img\" src=\"image/communiquer.png\" alt=\"Iconed'expérience\">
\t\t\t\t\t<ul class=\"section-text\">
\t\t\t\t\t\t<li>Diallo alpha , Etudianr en premiere année
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li>Email : monemail@domaine.com</li>
\t\t\t\t\t\t<li>Téléphone : +33 (0)6 00 00 00 00</li>
\t\t\t\t\t\t<li>Adresse : 12 rue de la réussite, 75000 Paris</li>
\t\t\t\t\t</ul>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>

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
\t</body>
</html></body></html>
", "test/cv.html.twig", "C:\\Users\\userlocal\\sae14\\templates\\test\\cv.html.twig");
    }
}
