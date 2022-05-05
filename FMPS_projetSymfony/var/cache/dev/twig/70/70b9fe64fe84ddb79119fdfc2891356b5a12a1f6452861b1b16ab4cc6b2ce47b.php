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

/* ModifUtil.html.twig */
class __TwigTemplate_0d02850ecf1dfb45faf8ae667cabf917d7eb04dcede392333d926f3e48c1ee6f extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "ModifUtil.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "ModifUtil.html.twig"));

        // line 1
        echo "<!DOCTYPE HTML>
<html>
\t<Head>
\t\t<meta charset=\"UTF-8\">
\t\t<title>Ajout d'un utilisateur</title>
\t\t<link rel=\"stylesheet\" href=\"../Style.css\">
\t</head>
\t<body style=\"background-color:#808080\"></body>
\t<body>
\t\t<h1>
\t\t\tFormulaire de modification d'un utilisateur
\t\t</h1>
\t\t<form action=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("update_utilisateur", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["UTILISATEUR"]) || array_key_exists("UTILISATEUR", $context) ? $context["UTILISATEUR"] : (function () { throw new RuntimeError('Variable "UTILISATEUR" does not exist.', 13, $this->source); })()), "id", [], "any", false, false, false, 13)]), "html", null, true);
        echo "\" method=\"POST\">
\t\t\t<tr>
\t\t\t\t<td>
\t\t\t\t\tLogin :
\t\t\t\t</td>
                    
\t\t\t\t<td><input type=\"text\" name=\"Login\" required value=";
        // line 19
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["UTILISATEUR"]) || array_key_exists("UTILISATEUR", $context) ? $context["UTILISATEUR"] : (function () { throw new RuntimeError('Variable "UTILISATEUR" does not exist.', 19, $this->source); })()), "UTILLOGIN", [], "any", false, false, false, 19), "html", null, true);
        echo "></td><br/> 
\t\t\t</tr>
\t\t\t<br/>
\t\t\t<tr>
\t\t\t\t<td>
\t\t\t\t\tMot de passe :</td>
\t\t\t\t<td><input type=\"password\" name=\"MDP\" required></td><br/>
\t\t\t</tr>
\t\t\t<br/>
\t\t\t<tr>
\t\t\t\t<td>
\t\t\t\t\tRole :</td>
\t\t\t\t<td>
\t\t\t\t\t<select name=\"Role\" style=\"width:150px\">
\t\t\t\t\t\t<option value=\"E\">Enseignants</option>
\t\t\t\t\t</select>
\t\t\t\t</td>
\t\t\t\t<br/>
\t\t\t</tr>
\t\t\t<br/>
\t\t\t<tr>
\t\t\t\t<td><input type=\"submit\" name=\"Envoyer\" value=\"Modifier\"></td>
\t\t\t</tr>
\t\t</form>
\t</body>
</html>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "ModifUtil.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  66 => 19,  57 => 13,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE HTML>
<html>
\t<Head>
\t\t<meta charset=\"UTF-8\">
\t\t<title>Ajout d'un utilisateur</title>
\t\t<link rel=\"stylesheet\" href=\"../Style.css\">
\t</head>
\t<body style=\"background-color:#808080\"></body>
\t<body>
\t\t<h1>
\t\t\tFormulaire de modification d'un utilisateur
\t\t</h1>
\t\t<form action=\"{{ path('update_utilisateur', {'id': UTILISATEUR.id }) }}\" method=\"POST\">
\t\t\t<tr>
\t\t\t\t<td>
\t\t\t\t\tLogin :
\t\t\t\t</td>
                    
\t\t\t\t<td><input type=\"text\" name=\"Login\" required value={{UTILISATEUR.UTILLOGIN}}></td><br/> 
\t\t\t</tr>
\t\t\t<br/>
\t\t\t<tr>
\t\t\t\t<td>
\t\t\t\t\tMot de passe :</td>
\t\t\t\t<td><input type=\"password\" name=\"MDP\" required></td><br/>
\t\t\t</tr>
\t\t\t<br/>
\t\t\t<tr>
\t\t\t\t<td>
\t\t\t\t\tRole :</td>
\t\t\t\t<td>
\t\t\t\t\t<select name=\"Role\" style=\"width:150px\">
\t\t\t\t\t\t<option value=\"E\">Enseignants</option>
\t\t\t\t\t</select>
\t\t\t\t</td>
\t\t\t\t<br/>
\t\t\t</tr>
\t\t\t<br/>
\t\t\t<tr>
\t\t\t\t<td><input type=\"submit\" name=\"Envoyer\" value=\"Modifier\"></td>
\t\t\t</tr>
\t\t</form>
\t</body>
</html>
", "ModifUtil.html.twig", "C:\\Users\\rodri\\Documents\\Github\\FMPS_ProjetSymfony\\FMPS_projetSymfony\\templates\\ModifUtil.html.twig");
    }
}
