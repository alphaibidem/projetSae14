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

/* test/portfolio.html.twig */
class __TwigTemplate_f918ef449cb36e5ff2b534c30925dcf8 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "test/portfolio.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "test/portfolio.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"fr\">
\t<head>
\t\t<meta charset=\"UTF-8\">
\t\t<meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
\t\t<meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
\t\t<title>porfolio</title>
\t\t<link rel=\"stylesheet\" href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/style.css"), "html", null, true);
        echo "\">
\t</head>
\t<body class \"body-portfolio\">
\t\t<div class=\"header\">
\t\t\t<strong>
\t\t\t\t<em>
\t\t\t\t\t<h1>Mon portfolio de compétences</h1>
\t\t\t\t</em>
\t\t\t</strong>
\t\t</div>
\t\t<div class=\"section\">
\t\t\t<strong>
\t\t\t\t<em>
\t\t\t\t\t<h2>Compétences</h2>
\t\t\t\t</em>
\t\t\t</strong>
\t\t\t<div class=\"sub-section\">

\t\t\t\t<strong>
\t\t\t\t\t<em>
\t\t\t\t\t\t<h3>Compétences en développement web</h3>
\t\t\t\t\t</em>
\t\t\t\t</strong>
\t\t\t\t<img src=\"image/developpement-dapplications.png\" alt=\"\" classe=\"img-por\">
\t\t\t\t<p>Objectif Connaître l’architecture et les technologies d’un site Web (Langages et outils : HTML, CSS, CMS, JS, responsive) .je suis passionné par la création de sites web je  suis motivé(e) pour en apprendre davantage sur les différentes technologies utilisées, mais j'ai  également un peu de difficultés à comprendre comment tous les éléments s'intègrent ensemble.J'ai réalisé que la compréhension de l'architecture et des technologies d'un site web est essentielle pour devenir un développeur web compétent et pour créer des sites web efficaces et réactifs.Alos j'ai commencé a apprendre  les différents langages et outils utilisés pour créer des sites web, notamment HTML, CSS et j'ai saisi  comment ces éléments fonctionnent ensemble pour créer une architecture de site web efficace. Au final j'ai un bon niveau en programmation web
\t\t\t\t</p>
\t\t\t\t<a class\"lien\" href=\"https://docs.google.com/document/d/1exljpb_OIEBY8aYkYb9r3eG4LK4vpHJ6mlYpokxVig4/edit?usp=sharing\">justificatif</a>
\t\t\t</div>
\t\t\t<div class=\"sub-section\">

\t\t\t\t<strong>
\t\t\t\t\t<em>
\t\t\t\t\t\t<h3>Compétences en administration reseau</h3>
\t\t\t\t\t</em>
\t\t\t\t</strong>
\t\t\t\t<img src=\"image/administrateur.png\" alt=\"\" classe=\"img-por\">
\t\t\t\t<p>Configurer les fonctions de base du réseau local (Ethernet, IPv4, intro IPv6, commutation, VLANs, routage statique .je me sentais enthousiaste par la possibilité de mettre en place un réseau stable et performant pour une entreprise.j'ai realisé  que  la configuration des fonctions de base d'un réseau local est cruciale pour assurer la communication efficace et la sécurité des données sur le réseau . J'ai commencé alors a apprendre les difrenttes configurations de bases a appliquer pour un reseau local ,j'ai egalement appris les equipemensts necessaire a un reseau local .Dans l'ensemble j'ai saisi plus ou moins quelques bases pour configurer un reseau il me faut travaiillé d'avantages pour maitriser tous ce qu'il ya a maitrisé</p>
\t\t\t\t<a href=\"https://docs.google.com/document/d/1aEQHkB91PsQn5qWz_fTU_AsMmilcciHs/edit?usp=sharing&ouid=112213173625117910892&rtpof=true&sd=true\">justificatif</a>
\t\t\t</div>
\t\t\t<div class=\"sub-section\">

\t\t\t\t<strong>
\t\t\t\t\t<em>
\t\t\t\t\t\t<h3>Compétences en connecter les entreprises et les usagers
\t\t\t\t\t\t</h3>
\t\t\t\t\t</em>
\t\t\t\t</strong>
\t\t\t\t<img src=\"image/la-mise-en-reseau.png\" alt=\"\">
\t\t\t\t<p>le but de cet apprentissage  Mesurer et analyser les signaux .Au debut je ne comprenais vraiment rien du faite que je ne connaissais rien sur les equipemnts mis a notre disposition  .cependant au fur a mesure sue les seances de tp avançaient je me suis familiarisé a la manipulation des equipements  je pense qu'au final je me suis beaucoup amelioré</p>
\t\t\t\t<a href=\"https://docs.google.com/document/d/1I2IsM-4g-MIV_KRj5x8-QHTzQ5OZxdLq/edit?usp=sharing&ouid=112213173625117910892&rtpof=true&sd=true\">justificatif</a>
\t\t\t</div>
\t\t</div>
\t\t<div class=\"section-por\" style=\" box-shadow: 3px 3px red, -1em 0 .4em olive\">
\t\t\t<strong>
\t\t\t\t<em>
\t\t\t\t\t<h2>Projets</h2>
\t\t\t\t</em>
\t\t\t</strong>
\t\t\t<img src=\"image/projet.png\" alt=\"\" classe=\"img-por\">
\t\t\t<ul>
\t\t\t\t<li>Mon site web personnel</li>
\t\t\t\t<li>Projet de groupe pour le cours de développement web</li>
\t\t\t</ul>
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
</html>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "test/portfolio.html.twig";
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
\t\t<title>porfolio</title>
\t\t<link rel=\"stylesheet\" href=\"{{ asset('assets/style.css') }}\">
\t</head>
\t<body class \"body-portfolio\">
\t\t<div class=\"header\">
\t\t\t<strong>
\t\t\t\t<em>
\t\t\t\t\t<h1>Mon portfolio de compétences</h1>
\t\t\t\t</em>
\t\t\t</strong>
\t\t</div>
\t\t<div class=\"section\">
\t\t\t<strong>
\t\t\t\t<em>
\t\t\t\t\t<h2>Compétences</h2>
\t\t\t\t</em>
\t\t\t</strong>
\t\t\t<div class=\"sub-section\">

\t\t\t\t<strong>
\t\t\t\t\t<em>
\t\t\t\t\t\t<h3>Compétences en développement web</h3>
\t\t\t\t\t</em>
\t\t\t\t</strong>
\t\t\t\t<img src=\"image/developpement-dapplications.png\" alt=\"\" classe=\"img-por\">
\t\t\t\t<p>Objectif Connaître l’architecture et les technologies d’un site Web (Langages et outils : HTML, CSS, CMS, JS, responsive) .je suis passionné par la création de sites web je  suis motivé(e) pour en apprendre davantage sur les différentes technologies utilisées, mais j'ai  également un peu de difficultés à comprendre comment tous les éléments s'intègrent ensemble.J'ai réalisé que la compréhension de l'architecture et des technologies d'un site web est essentielle pour devenir un développeur web compétent et pour créer des sites web efficaces et réactifs.Alos j'ai commencé a apprendre  les différents langages et outils utilisés pour créer des sites web, notamment HTML, CSS et j'ai saisi  comment ces éléments fonctionnent ensemble pour créer une architecture de site web efficace. Au final j'ai un bon niveau en programmation web
\t\t\t\t</p>
\t\t\t\t<a class\"lien\" href=\"https://docs.google.com/document/d/1exljpb_OIEBY8aYkYb9r3eG4LK4vpHJ6mlYpokxVig4/edit?usp=sharing\">justificatif</a>
\t\t\t</div>
\t\t\t<div class=\"sub-section\">

\t\t\t\t<strong>
\t\t\t\t\t<em>
\t\t\t\t\t\t<h3>Compétences en administration reseau</h3>
\t\t\t\t\t</em>
\t\t\t\t</strong>
\t\t\t\t<img src=\"image/administrateur.png\" alt=\"\" classe=\"img-por\">
\t\t\t\t<p>Configurer les fonctions de base du réseau local (Ethernet, IPv4, intro IPv6, commutation, VLANs, routage statique .je me sentais enthousiaste par la possibilité de mettre en place un réseau stable et performant pour une entreprise.j'ai realisé  que  la configuration des fonctions de base d'un réseau local est cruciale pour assurer la communication efficace et la sécurité des données sur le réseau . J'ai commencé alors a apprendre les difrenttes configurations de bases a appliquer pour un reseau local ,j'ai egalement appris les equipemensts necessaire a un reseau local .Dans l'ensemble j'ai saisi plus ou moins quelques bases pour configurer un reseau il me faut travaiillé d'avantages pour maitriser tous ce qu'il ya a maitrisé</p>
\t\t\t\t<a href=\"https://docs.google.com/document/d/1aEQHkB91PsQn5qWz_fTU_AsMmilcciHs/edit?usp=sharing&ouid=112213173625117910892&rtpof=true&sd=true\">justificatif</a>
\t\t\t</div>
\t\t\t<div class=\"sub-section\">

\t\t\t\t<strong>
\t\t\t\t\t<em>
\t\t\t\t\t\t<h3>Compétences en connecter les entreprises et les usagers
\t\t\t\t\t\t</h3>
\t\t\t\t\t</em>
\t\t\t\t</strong>
\t\t\t\t<img src=\"image/la-mise-en-reseau.png\" alt=\"\">
\t\t\t\t<p>le but de cet apprentissage  Mesurer et analyser les signaux .Au debut je ne comprenais vraiment rien du faite que je ne connaissais rien sur les equipemnts mis a notre disposition  .cependant au fur a mesure sue les seances de tp avançaient je me suis familiarisé a la manipulation des equipements  je pense qu'au final je me suis beaucoup amelioré</p>
\t\t\t\t<a href=\"https://docs.google.com/document/d/1I2IsM-4g-MIV_KRj5x8-QHTzQ5OZxdLq/edit?usp=sharing&ouid=112213173625117910892&rtpof=true&sd=true\">justificatif</a>
\t\t\t</div>
\t\t</div>
\t\t<div class=\"section-por\" style=\" box-shadow: 3px 3px red, -1em 0 .4em olive\">
\t\t\t<strong>
\t\t\t\t<em>
\t\t\t\t\t<h2>Projets</h2>
\t\t\t\t</em>
\t\t\t</strong>
\t\t\t<img src=\"image/projet.png\" alt=\"\" classe=\"img-por\">
\t\t\t<ul>
\t\t\t\t<li>Mon site web personnel</li>
\t\t\t\t<li>Projet de groupe pour le cours de développement web</li>
\t\t\t</ul>
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
</html>
", "test/portfolio.html.twig", "C:\\Users\\userlocal\\sae14\\templates\\test\\portfolio.html.twig");
    }
}
