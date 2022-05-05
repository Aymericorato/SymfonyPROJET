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

/* Index.html.twig */
class __TwigTemplate_d51240a10700a6ee4e3f8f893a2fca19c8a9b62f0e3ac178616e5fc4a14374a6 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'h1' => [$this, 'block_h1'],
            'h2' => [$this, 'block_h2'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Index.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <title> La Chataîgneraie </title>
        <link rel=\"stylesheet\" href=\"../Style.css\">
    </head>
<body style=\"background-color:#808080\">
<div align=\"center\">
<img src=\"../Logo-removebg-preview.png\" height=\"100\" width=\"270\" />

    <div>
        <h1>";
        // line 12
        $this->displayBlock('h1', $context, $blocks);
        echo "</h1>
        <h2>";
        // line 13
        $this->displayBlock('h2', $context, $blocks);
        echo "</h2>
    </div>
        ";
        // line 15
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["ENTREPRISE"]) || array_key_exists("ENTREPRISE", $context) ? $context["ENTREPRISE"] : (function () { throw new RuntimeError('Variable "ENTREPRISE" does not exist.', 15, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["entreprise"]) {
            // line 16
            echo "        
        <a class=\"lieninfo\" href=\"";
            // line 17
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("Detail", ["id" => twig_get_attribute($this->env, $this->source, $context["entreprise"], "Id", [], "any", false, false, false, 17)]), "html", null, true);
            echo "\">
        <div class=\"infoentreprise\">
        ";
            // line 19
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["entreprise"], "ENTRAISONSOCIALE", [], "any", false, false, false, 19), "html", null, true);
            echo " <br> Code Postal : ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["entreprise"], "ENTCODEPOSTAL", [], "any", false, false, false, 19), "html", null, true);
            echo "
        </div>
        </a>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entreprise'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 23
        echo "        </div>
    </div>
<div class=\"bouton\" align=\"center\">
    <a href=\"";
        // line 26
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("AjoutEntreprise");
        echo "\"><button>Ajouter</button></a>
</div>
</body>
</html>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 12
    public function block_h1($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "h1"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "h1"));

        echo "Liste entreprise";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 13
    public function block_h2($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "h2"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "h2"));

        echo "Veuillez choisir une entreprise";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "Index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  129 => 13,  110 => 12,  96 => 26,  91 => 23,  79 => 19,  74 => 17,  71 => 16,  67 => 15,  62 => 13,  58 => 12,  45 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html>
    <head>
        <title> La Chataîgneraie </title>
        <link rel=\"stylesheet\" href=\"../Style.css\">
    </head>
<body style=\"background-color:#808080\">
<div align=\"center\">
<img src=\"../Logo-removebg-preview.png\" height=\"100\" width=\"270\" />

    <div>
        <h1>{% block h1 %}Liste entreprise{% endblock %}</h1>
        <h2>{% block h2 %}Veuillez choisir une entreprise{% endblock %}</h2>
    </div>
        {% for entreprise in ENTREPRISE %}
        
        <a class=\"lieninfo\" href=\"{{path('Detail', {'id':entreprise.Id }) }}\">
        <div class=\"infoentreprise\">
        {{entreprise.ENTRAISONSOCIALE}} <br> Code Postal : {{entreprise.ENTCODEPOSTAL}}
        </div>
        </a>
        {% endfor %}
        </div>
    </div>
<div class=\"bouton\" align=\"center\">
    <a href=\"{{ path('AjoutEntreprise') }}\"><button>Ajouter</button></a>
</div>
</body>
<<<<<<< Updated upstream
</html>", "Index.html.twig", "C:\\Users\\rodri\\Documents\\Github\\FMPS_ProjetSymfony\\FMPS_projetSymfony\\templates\\index.html.twig");
=======
</html>", "index.html.twig", "C:\\Users\\aymer\\Documents\\GitHub\\FMPS_ProjetSymfony\\FMPS_projetSymfony\\templates\\index.html.twig");
>>>>>>> Stashed changes
    }
}
