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

/* Intermediaire.html.twig */
class __TwigTemplate_3386eccb68b695345f28c169f9e1a443f8810abe29f5bbffd1fd57ad5b92af49 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'h2' => [$this, 'block_h2'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Intermediaire.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Intermediaire.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <title> Intermédiaire | La Chataîgneraie </title>
        <link rel=\"stylesheet\" href=\"../Style.css\">
    </head>
<body style=\"background-color:#808080\">
<div align=\"center\">
    <img src=\"Logo-removebg-preview.png\" height=\"100\" width=\"300\" />
    <div id=\"content\">
        <h2>";
        // line 11
        $this->displayBlock('h2', $context, $blocks);
        echo "</h2>
    </div>
        <br />
            <div class=\"agrandir\">
        <a href=\"";
        // line 15
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("Index");
        echo "\"><button type=\"button\" value=\"Entreprises\" class=\"boutton\">Entreprises</button></a>
        <br />
        <a href =\"";
        // line 17
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("ListeUtilisateur");
        echo "\"><button type=\"button\" value=\"Enseignants\" class=\"boutton\">Enseignants</button></div></a>
</div>
</body>
</html>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 11
    public function block_h2($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "h2"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "h2"));

        echo " Veuillez choisir ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "Intermediaire.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  82 => 11,  68 => 17,  63 => 15,  56 => 11,  44 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html>
    <head>
        <title> Intermédiaire | La Chataîgneraie </title>
        <link rel=\"stylesheet\" href=\"../Style.css\">
    </head>
<body style=\"background-color:#808080\">
<div align=\"center\">
    <img src=\"Logo-removebg-preview.png\" height=\"100\" width=\"300\" />
    <div id=\"content\">
        <h2>{% block h2 %} Veuillez choisir {% endblock %}</h2>
    </div>
        <br />
            <div class=\"agrandir\">
        <a href=\"{{path('Index')}}\"><button type=\"button\" value=\"Entreprises\" class=\"boutton\">Entreprises</button></a>
        <br />
        <a href =\"{{path('ListeUtilisateur')}}\"><button type=\"button\" value=\"Enseignants\" class=\"boutton\">Enseignants</button></div></a>
</div>
</body>
</html>", "Intermediaire.html.twig", "C:\\Users\\aymer\\Documents\\GitHub\\FMPS_ProjetSymfony\\FMPS_projetSymfony\\templates\\Intermediaire.html.twig");
    }
}
