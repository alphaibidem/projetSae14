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

/* test/loisir.html.twig */
class __TwigTemplate_46cb96439a30797347e1cde559458d88 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "test/loisir.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "test/loisir.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"fr\">
\t<head>
\t\t<meta charset=\"UTF-8\">
\t\t<meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
\t\t<meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
\t\t<title>Loisirs</title>
\t\t<link rel=\"stylesheet\" href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/style.css"), "html", null, true);
        echo "\">
\t</head>
\t<body>
\t\t<div class=\"header-loisir\">
\t\t\t<h1>Mes loisirs</h1>
\t\t</div>
\t\t<div class=\"section-loisir\">
\t\t\t<img src=\"image/lecture.png\" alt=\"book\">
\t\t\t<strong>
\t\t\t\t<em>
\t\t\t\t\t<h2>Lecture</h2>
\t\t\t\t</em>
\t\t\t</strong>
\t\t\t<p>J'aime lire des romans de science-fiction et de fantasy, ainsi que des livres de développement personnel.</p>
\t\t\t<p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Autem officiis doloremque dolorem aut, ipsa modi ut ullam iusto corporis labore libero suscipit aliquid soluta impedit! Tempora, numquam? In, cupiditate optio.</p>
\t\t</div>
\t\t<div class=\"section-loisir\">
\t\t\t<img src=\"image/manette-de-jeu.png\" alt=\"jeux\">
\t\t\t<strong>
\t\t\t\t<em>
\t\t\t\t\t<h2>Gaming</h2>
\t\t\t\t</em>
\t\t\t</strong>
\t\t\t<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est id dolorum enim in sit nobis consequatur vitae a nisi corrupti! Minus eligendi magnam maiores beatae ipsum, impedit quae et sapiente!.</p>
\t\t</div>
\t\t<div class=\"section-loisir\">
\t\t\t<img src=\"image/des-sports.png\" alt=\"book\">
\t\t\t<strong>
\t\t\t\t<em>
\t\t\t\t\t<h2>sports</h2>
\t\t\t\t</em>
\t\t\t</strong>
\t\t\t<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Inventore, labore. Laboriosam inventore, nisi ullam facilis quisquam quos impedit eos harum vitae hic dignissimos earum ipsa laudantium saepe dicta cum neque.</p>
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
        return "test/loisir.html.twig";
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
\t\t<title>Loisirs</title>
\t\t<link rel=\"stylesheet\" href=\"{{ asset('assets/style.css') }}\">
\t</head>
\t<body>
\t\t<div class=\"header-loisir\">
\t\t\t<h1>Mes loisirs</h1>
\t\t</div>
\t\t<div class=\"section-loisir\">
\t\t\t<img src=\"image/lecture.png\" alt=\"book\">
\t\t\t<strong>
\t\t\t\t<em>
\t\t\t\t\t<h2>Lecture</h2>
\t\t\t\t</em>
\t\t\t</strong>
\t\t\t<p>J'aime lire des romans de science-fiction et de fantasy, ainsi que des livres de développement personnel.</p>
\t\t\t<p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Autem officiis doloremque dolorem aut, ipsa modi ut ullam iusto corporis labore libero suscipit aliquid soluta impedit! Tempora, numquam? In, cupiditate optio.</p>
\t\t</div>
\t\t<div class=\"section-loisir\">
\t\t\t<img src=\"image/manette-de-jeu.png\" alt=\"jeux\">
\t\t\t<strong>
\t\t\t\t<em>
\t\t\t\t\t<h2>Gaming</h2>
\t\t\t\t</em>
\t\t\t</strong>
\t\t\t<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est id dolorum enim in sit nobis consequatur vitae a nisi corrupti! Minus eligendi magnam maiores beatae ipsum, impedit quae et sapiente!.</p>
\t\t</div>
\t\t<div class=\"section-loisir\">
\t\t\t<img src=\"image/des-sports.png\" alt=\"book\">
\t\t\t<strong>
\t\t\t\t<em>
\t\t\t\t\t<h2>sports</h2>
\t\t\t\t</em>
\t\t\t</strong>
\t\t\t<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Inventore, labore. Laboriosam inventore, nisi ullam facilis quisquam quos impedit eos harum vitae hic dignissimos earum ipsa laudantium saepe dicta cum neque.</p>
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
", "test/loisir.html.twig", "C:\\Users\\userlocal\\sae14\\templates\\test\\loisir.html.twig");
    }
}
