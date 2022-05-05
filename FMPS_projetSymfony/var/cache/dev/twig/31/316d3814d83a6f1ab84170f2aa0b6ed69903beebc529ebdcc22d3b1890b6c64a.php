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

/* login.html.twig */
class __TwigTemplate_0f44ad42754718e8cea2718204d02180ce55c5fb8a51b4c36e5047792bb97104 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'contenu2' => [$this, 'block_contenu2'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "login.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "login.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <title> La Chataîgneraie </title>
        <link rel=\"steelsheet\" href=\"../Style.css\">
    </head>
<body style=\"background-color:#808080\">

<div align=\"center\">
    <img src=\"Logo-removebg-preview.png\" height=\"100\" width=\"270\" />
    <div id=\"content\">
        <h1>Accueil Chataîgneraie</h1>
        <h2>Veuillez entrer les informations</h2>
        <div id=\"contenu\">
        <form action=\"";
        // line 15
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("indexadmin");
        echo "\" method=\"POST\">
            <p>Login : </p>
            <input type=\"text\" id=\"login\" name=\"login\" required
            minlength=\"2\" maxlength=\"12\" size=\"15\">
        </div>
        <div id=\"contenu2\">
            ";
        // line 21
        $this->displayBlock('contenu2', $context, $blocks);
        // line 22
        echo "            <input type=\"password\" id=\"mdp\" name=\"mdp\" required
            minlength=\"2\" maxlength=\"12\" size=\"15\">
        </div>
        <br />
        
            
            <input type=\"submit\" value=\"S'identifier\">
      </form>
        
</div>
</body>
</html>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 21
    public function block_contenu2($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "contenu2"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "contenu2"));

        echo "<p>Mot de passe : </p>";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  92 => 21,  71 => 22,  69 => 21,  60 => 15,  44 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html>
    <head>
        <title> La Chataîgneraie </title>
        <link rel=\"steelsheet\" href=\"../Style.css\">
    </head>
<body style=\"background-color:#808080\">

<div align=\"center\">
    <img src=\"Logo-removebg-preview.png\" height=\"100\" width=\"270\" />
    <div id=\"content\">
        <h1>Accueil Chataîgneraie</h1>
        <h2>Veuillez entrer les informations</h2>
        <div id=\"contenu\">
        <form action=\"{{ path('indexadmin') }}\" method=\"POST\">
            <p>Login : </p>
            <input type=\"text\" id=\"login\" name=\"login\" required
            minlength=\"2\" maxlength=\"12\" size=\"15\">
        </div>
        <div id=\"contenu2\">
            {% block contenu2 %}<p>Mot de passe : </p>{% endblock %}
            <input type=\"password\" id=\"mdp\" name=\"mdp\" required
            minlength=\"2\" maxlength=\"12\" size=\"15\">
        </div>
        <br />
        
            
            <input type=\"submit\" value=\"S'identifier\">
      </form>
        
</div>
</body>
</html>", "login.html.twig", "C:\\Users\\aymer\\Documents\\GitHub\\FMPS_ProjetSymfony\\FMPS_projetSymfony\\templates\\login.html.twig");
    }
}
