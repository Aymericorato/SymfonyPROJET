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

/* AjoutEmploye.html.twig */
class __TwigTemplate_d78c6dcb82a7d5e3f80dc5d63ebfe8f20218f9b48ed9ca1c8d9c6d0965da8f73 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "AjoutEmploye.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "AjoutEmploye.html.twig"));

        // line 1
        echo "<!DOCTYPE HTML>
<html>
    <Head>
        <meta charset=\"UTF-8\">
        <title>Ajout d'un employé</title>
        <link rel=\"stylesheet\" href=\"../Style.css\">
    </head>
<body style=\"background-color:#00799B\">
<p>Bonjour ";
        // line 9
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 9, $this->source); })()), "session", [], "any", false, false, false, 9), "get", [0 => "login"], "method", false, false, false, 9), "html", null, true);
        echo " ( ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 9, $this->source); })()), "session", [], "any", false, false, false, 9), "get", [0 => "role"], "method", false, false, false, 9), "html", null, true);
        echo ") </p>
<div class = \"deco\">
        <a href=\"";
        // line 11
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("login");
        echo "\"><button style = \"background-color : #CF5E5E\">Déconnexion</button></a>
</div>

    <h1> Formulaire d'ajout d'un employé </h1>
    <form action=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("post_employe", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["ENTREPRISE"]) || array_key_exists("ENTREPRISE", $context) ? $context["ENTREPRISE"] : (function () { throw new RuntimeError('Variable "ENTREPRISE" does not exist.', 15, $this->source); })()), "Id", [], "any", false, false, false, 15)]), "html", null, true);
        echo "\" method=\"POST\">
        <tr>
            <td> Nom : </td>
            <td><input type =\"text\" name =\"Nom\" required></td><br />
        </tr>
        <br />
        <tr>
            <td> Prenom :</td>
            <td><input type =\"text\" name =\"Prenom\" required></td><br />
        </tr>
        <br />
        <tr>
            <td> Genre :</td>
            <td><input type =\"text\" name =\"Genre\" required></td><br />
        </tr>
        <br />
        <tr>
            <td> Mail :</td>
            <td><input type =\"text\" name =\"Mail\" required></td><br />
        </tr>
        <br />
        <tr>
            <td> Telephone : </td>
            <td><input type =\"text\" name =\"Telephone\" ></td><br />
        </tr>
        <br />
        <tr>
            <td> Metier : </td>
            <td><input type =\"text\" name =\"Metier\" ></td><br />
            <input type=\"hidden\" name=\"ENTID\" value=";
        // line 44
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["ENTREPRISE"]) || array_key_exists("ENTREPRISE", $context) ? $context["ENTREPRISE"] : (function () { throw new RuntimeError('Variable "ENTREPRISE" does not exist.', 44, $this->source); })()), "ID", [], "any", false, false, false, 44), "html", null, true);
        echo ">
        </tr>
        <br />
        <tr>
            <td><input type =\"submit\" name = \"Envoyer\" value =\"Enregistrer\" style = \"background-color : #1EAFE3\"></td>
        </tr>
    </form>
    <a href=\"";
        // line 51
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("Detail", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["ENTREPRISE"]) || array_key_exists("ENTREPRISE", $context) ? $context["ENTREPRISE"] : (function () { throw new RuntimeError('Variable "ENTREPRISE" does not exist.', 51, $this->source); })()), "id", [], "any", false, false, false, 51)]), "html", null, true);
        echo "\"><button style = \"background-color : #C83838\">Retour</button></a>
</body>
</html>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "AjoutEmploye.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  109 => 51,  99 => 44,  67 => 15,  60 => 11,  53 => 9,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE HTML>
<html>
    <Head>
        <meta charset=\"UTF-8\">
        <title>Ajout d'un employé</title>
        <link rel=\"stylesheet\" href=\"../Style.css\">
    </head>
<body style=\"background-color:#00799B\">
<p>Bonjour {{app.session.get('login')}} ( {{ app.session.get('role')}}) </p>
<div class = \"deco\">
        <a href=\"{{ path('login') }}\"><button style = \"background-color : #CF5E5E\">Déconnexion</button></a>
</div>

    <h1> Formulaire d'ajout d'un employé </h1>
    <form action=\"{{ path('post_employe', {'id': ENTREPRISE.Id }) }}\" method=\"POST\">
        <tr>
            <td> Nom : </td>
            <td><input type =\"text\" name =\"Nom\" required></td><br />
        </tr>
        <br />
        <tr>
            <td> Prenom :</td>
            <td><input type =\"text\" name =\"Prenom\" required></td><br />
        </tr>
        <br />
        <tr>
            <td> Genre :</td>
            <td><input type =\"text\" name =\"Genre\" required></td><br />
        </tr>
        <br />
        <tr>
            <td> Mail :</td>
            <td><input type =\"text\" name =\"Mail\" required></td><br />
        </tr>
        <br />
        <tr>
            <td> Telephone : </td>
            <td><input type =\"text\" name =\"Telephone\" ></td><br />
        </tr>
        <br />
        <tr>
            <td> Metier : </td>
            <td><input type =\"text\" name =\"Metier\" ></td><br />
            <input type=\"hidden\" name=\"ENTID\" value={{ENTREPRISE.ID}}>
        </tr>
        <br />
        <tr>
            <td><input type =\"submit\" name = \"Envoyer\" value =\"Enregistrer\" style = \"background-color : #1EAFE3\"></td>
        </tr>
    </form>
    <a href=\"{{ path('Detail', {'id' : ENTREPRISE.id }) }}\"><button style = \"background-color : #C83838\">Retour</button></a>
</body>
</html>", "AjoutEmploye.html.twig", "C:\\Users\\aymer\\Documents\\GitHub\\FMPS_ProjetSymfony\\FMPS_projetSymfony\\templates\\AjoutEmploye.html.twig");
    }
}
