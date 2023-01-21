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

/* test/index.html.twig */
class __TwigTemplate_d8b01709cfd442df185c4bdf6a156982 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "test/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "test/index.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">
\t<head>
\t\t<meta charset=\"UTF-8\">
\t\t<meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
\t\t<meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
\t\t<title>Document</title>
\t\t<link rel=\"stylesheet\" href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/style.css"), "html", null, true);
        echo "\">


\t</head>
\t<body>

\t\t<header classe=\"header-nav\">
\t\t\t<div classe=\"div-nav\">
\t\t\t\t<a href=\"#\"><img src=\"image/pavillon.PNG\" alt=\"\"></a>

\t\t\t</div>
\t\t\t<nav>
\t\t\t\t<span>
\t\t\t\t\t<em>
\t\t\t\t\t\t<strong>
\t\t\t\t\t\t\t<a href=\"portfolio\">Portfolio</a>
\t\t\t\t\t\t</strong>
\t\t\t\t\t</em>
\t\t\t\t</span>

\t\t\t\t<span>
\t\t\t\t\t<em>
\t\t\t\t\t\t<strong>
\t\t\t\t\t\t\t<a href=\"cv\">Mon CV</a>
\t\t\t\t\t\t</strong>
\t\t\t\t\t</em>
\t\t\t\t</span>
\t\t\t\t<span>
\t\t\t\t\t<em>
\t\t\t\t\t\t<strong>
\t\t\t\t\t\t\t<a href=\"loisir\">Loisirs</a>
\t\t\t\t\t\t</strong>
\t\t\t\t\t</em>
\t\t\t\t</span>
\t\t\t\t<span>
\t\t\t\t\t<em>
\t\t\t\t\t\t<strong>
\t\t\t\t\t\t\t<a href=\"contact\">Contact</a>
\t\t\t\t\t\t</strong>
\t\t\t\t\t</em>
\t\t\t\t</span>
\t\t\t</nav>
\t\t</header>


\t\t<div class=\"container\">

\t\t\t<strong>
\t\t\t\t<em>
\t\t\t\t\t<h3>
\t\t\t\t\t\t<li>\"Le savoir est une arme puissante, mais la compétence l'est encore plus.\"
\t\t\t\t\t\t</li>
\t\t\t\t\t</h3>
\t\t\t\t</em>
\t\t\t</strong>
\t\t\t<strong>
\t\t\t\t<em>
\t\t\t\t\t<h4>
\t\t\t\t\t\t<li>Diallo alpha yacouba ,etudiant a l'IUT de Roanne
\t\t\t\t\t\t</li>
\t\t\t\t\t</h4>
\t\t\t\t</em>
\t\t\t</strong>
\t\t\t<strong>
\t\t\t\t<em>
\t\t\t\t\t<h4>
\t\t\t\t\t\t<li>e-mail : alpha.ibidem520@gmail.com</li>
\t\t\t\t\t</h4>
\t\t\t\t</em>
\t\t\t</strong>
\t\t\t<span>
\t\t\t\t<strong>
\t\t\t\t\t<a href=\"loisir\">en savoir plus
\t\t\t\t\t</a>
\t\t\t\t</strong>
\t\t\t</span>
\t\t</div>


\t\t<div class=\"box\"><img src=\"image/chatbot.png\" alt=\"\"></div>

\t\t<div class=\"box\"><img src=\"image/ebrecher.png\" alt=\"\"></div>

\t\t<div class=\"box\"><img src=\"image/programmation.png\" alt=\"\"></div>

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
        return "test/index.html.twig";
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
<html lang=\"en\">
\t<head>
\t\t<meta charset=\"UTF-8\">
\t\t<meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
\t\t<meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
\t\t<title>Document</title>
\t\t<link rel=\"stylesheet\" href=\"{{ asset('assets/style.css') }}\">


\t</head>
\t<body>

\t\t<header classe=\"header-nav\">
\t\t\t<div classe=\"div-nav\">
\t\t\t\t<a href=\"#\"><img src=\"image/pavillon.PNG\" alt=\"\"></a>

\t\t\t</div>
\t\t\t<nav>
\t\t\t\t<span>
\t\t\t\t\t<em>
\t\t\t\t\t\t<strong>
\t\t\t\t\t\t\t<a href=\"portfolio\">Portfolio</a>
\t\t\t\t\t\t</strong>
\t\t\t\t\t</em>
\t\t\t\t</span>

\t\t\t\t<span>
\t\t\t\t\t<em>
\t\t\t\t\t\t<strong>
\t\t\t\t\t\t\t<a href=\"cv\">Mon CV</a>
\t\t\t\t\t\t</strong>
\t\t\t\t\t</em>
\t\t\t\t</span>
\t\t\t\t<span>
\t\t\t\t\t<em>
\t\t\t\t\t\t<strong>
\t\t\t\t\t\t\t<a href=\"loisir\">Loisirs</a>
\t\t\t\t\t\t</strong>
\t\t\t\t\t</em>
\t\t\t\t</span>
\t\t\t\t<span>
\t\t\t\t\t<em>
\t\t\t\t\t\t<strong>
\t\t\t\t\t\t\t<a href=\"contact\">Contact</a>
\t\t\t\t\t\t</strong>
\t\t\t\t\t</em>
\t\t\t\t</span>
\t\t\t</nav>
\t\t</header>


\t\t<div class=\"container\">

\t\t\t<strong>
\t\t\t\t<em>
\t\t\t\t\t<h3>
\t\t\t\t\t\t<li>\"Le savoir est une arme puissante, mais la compétence l'est encore plus.\"
\t\t\t\t\t\t</li>
\t\t\t\t\t</h3>
\t\t\t\t</em>
\t\t\t</strong>
\t\t\t<strong>
\t\t\t\t<em>
\t\t\t\t\t<h4>
\t\t\t\t\t\t<li>Diallo alpha yacouba ,etudiant a l'IUT de Roanne
\t\t\t\t\t\t</li>
\t\t\t\t\t</h4>
\t\t\t\t</em>
\t\t\t</strong>
\t\t\t<strong>
\t\t\t\t<em>
\t\t\t\t\t<h4>
\t\t\t\t\t\t<li>e-mail : alpha.ibidem520@gmail.com</li>
\t\t\t\t\t</h4>
\t\t\t\t</em>
\t\t\t</strong>
\t\t\t<span>
\t\t\t\t<strong>
\t\t\t\t\t<a href=\"loisir\">en savoir plus
\t\t\t\t\t</a>
\t\t\t\t</strong>
\t\t\t</span>
\t\t</div>


\t\t<div class=\"box\"><img src=\"image/chatbot.png\" alt=\"\"></div>

\t\t<div class=\"box\"><img src=\"image/ebrecher.png\" alt=\"\"></div>

\t\t<div class=\"box\"><img src=\"image/programmation.png\" alt=\"\"></div>

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
", "test/index.html.twig", "C:\\Users\\userlocal\\sae14\\templates\\test\\index.html.twig");
    }
}
