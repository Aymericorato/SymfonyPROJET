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

/* ModifEntreprise.html.twig */
class __TwigTemplate_b89e0b4850b2453c420093fe15b93284196bcea61ebc3fcadd5d0f88eb8ce8de extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "ModifEntreprise.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "ModifEntreprise.html.twig"));

        // line 1
        echo "<!DOCTYPE HTML>
<html>
    <Head>
        <meta charset=\"UTF-8\">
        <title>Modification d'une entreprise</title>
        <link rel=\"stylesheet\" href=\"../Style.css\">
    </head>
<body style=\"background-color:#808080\">
<body>
    <h1> Formulaire de modification d'une entreprise </h1>
    <form action=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("post_modif", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["ENTREPRISE"]) || array_key_exists("ENTREPRISE", $context) ? $context["ENTREPRISE"] : (function () { throw new RuntimeError('Variable "ENTREPRISE" does not exist.', 11, $this->source); })()), "id", [], "any", false, false, false, 11)]), "html", null, true);
        echo "\" method=\"POST\">
        <tr>
            <td> Raison sociale : </td>
            <td><input type =\"text\" name =\"RaisonSociale\" required value=";
        // line 14
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["ENTREPRISE"]) || array_key_exists("ENTREPRISE", $context) ? $context["ENTREPRISE"] : (function () { throw new RuntimeError('Variable "ENTREPRISE" does not exist.', 14, $this->source); })()), "ENTRAISONSOCIALE", [], "any", false, false, false, 14), "html", null, true);
        echo "></td><br />
        </tr>
        <br />
        <tr>
            <td> Adresse :</td>
            <td><input type =\"text\" name =\"Adresse\" required value=";
        // line 19
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["ENTREPRISE"]) || array_key_exists("ENTREPRISE", $context) ? $context["ENTREPRISE"] : (function () { throw new RuntimeError('Variable "ENTREPRISE" does not exist.', 19, $this->source); })()), "ENTADRESSE1", [], "any", false, false, false, 19), "html", null, true);
        echo "></td><br />
        </tr>
        <br />
        <tr>
            <td> Adresse 2 :</td>
            <td><input type =\"text\" name =\"Adresse2\" value=";
        // line 24
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["ENTREPRISE"]) || array_key_exists("ENTREPRISE", $context) ? $context["ENTREPRISE"] : (function () { throw new RuntimeError('Variable "ENTREPRISE" does not exist.', 24, $this->source); })()), "ENTADRESSE2", [], "any", false, false, false, 24), "html", null, true);
        echo "></td><br />
        </tr>
        <br />
        <tr>
            <td> Adresse 3 :</td>
            <td><input type =\"text\" name =\"Adresse3\" value=";
        // line 29
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["ENTREPRISE"]) || array_key_exists("ENTREPRISE", $context) ? $context["ENTREPRISE"] : (function () { throw new RuntimeError('Variable "ENTREPRISE" does not exist.', 29, $this->source); })()), "ENTADRESSE3", [], "any", false, false, false, 29), "html", null, true);
        echo "></td><br />
        </tr>
        <br />
        <tr>
            <td> Ville : </td>
            <td><input type =\"text\" name =\"Ville\" required value=";
        // line 34
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["ENTREPRISE"]) || array_key_exists("ENTREPRISE", $context) ? $context["ENTREPRISE"] : (function () { throw new RuntimeError('Variable "ENTREPRISE" does not exist.', 34, $this->source); })()), "ENTVILLE", [], "any", false, false, false, 34), "html", null, true);
        echo "></td><br />
        </tr>
        <br />
        <tr>
            <td> Code Postal : </td>
            <td><input type =\"number\" name =\"CP\" required value=";
        // line 39
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["ENTREPRISE"]) || array_key_exists("ENTREPRISE", $context) ? $context["ENTREPRISE"] : (function () { throw new RuntimeError('Variable "ENTREPRISE" does not exist.', 39, $this->source); })()), "ENTCODEPOSTAL", [], "any", false, false, false, 39), "html", null, true);
        echo "></td><br />
        </tr>
        <br />
        <tr>
            <td> Pays :</td>
            <td><input type =\"text\" name =\"Pays\" required value=";
        // line 44
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["ENTREPRISE"]) || array_key_exists("ENTREPRISE", $context) ? $context["ENTREPRISE"] : (function () { throw new RuntimeError('Variable "ENTREPRISE" does not exist.', 44, $this->source); })()), "ENTPAYS", [], "any", false, false, false, 44), "html", null, true);
        echo "></td><br />
        </tr>
        <br />
        <tr>
            <td><input type =\"submit\" name = \"Envoyer\" value =\"Enregistrer\"></td>
        </tr>
    </form>
</body>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "ModifEntreprise.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  109 => 44,  101 => 39,  93 => 34,  85 => 29,  77 => 24,  69 => 19,  61 => 14,  55 => 11,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE HTML>
<html>
    <Head>
        <meta charset=\"UTF-8\">
        <title>Modification d'une entreprise</title>
        <link rel=\"stylesheet\" href=\"../Style.css\">
    </head>
<body style=\"background-color:#808080\">
<body>
    <h1> Formulaire de modification d'une entreprise </h1>
    <form action=\"{{ path('post_modif',{'id' : ENTREPRISE.id }) }}\" method=\"POST\">
        <tr>
            <td> Raison sociale : </td>
            <td><input type =\"text\" name =\"RaisonSociale\" required value={{ENTREPRISE.ENTRAISONSOCIALE}}></td><br />
        </tr>
        <br />
        <tr>
            <td> Adresse :</td>
            <td><input type =\"text\" name =\"Adresse\" required value={{ENTREPRISE.ENTADRESSE1}}></td><br />
        </tr>
        <br />
        <tr>
            <td> Adresse 2 :</td>
            <td><input type =\"text\" name =\"Adresse2\" value={{ENTREPRISE.ENTADRESSE2}}></td><br />
        </tr>
        <br />
        <tr>
            <td> Adresse 3 :</td>
            <td><input type =\"text\" name =\"Adresse3\" value={{ENTREPRISE.ENTADRESSE3}}></td><br />
        </tr>
        <br />
        <tr>
            <td> Ville : </td>
            <td><input type =\"text\" name =\"Ville\" required value={{ENTREPRISE.ENTVILLE}}></td><br />
        </tr>
        <br />
        <tr>
            <td> Code Postal : </td>
            <td><input type =\"number\" name =\"CP\" required value={{ENTREPRISE.ENTCODEPOSTAL}}></td><br />
        </tr>
        <br />
        <tr>
            <td> Pays :</td>
            <td><input type =\"text\" name =\"Pays\" required value={{ENTREPRISE.ENTPAYS}}></td><br />
        </tr>
        <br />
        <tr>
            <td><input type =\"submit\" name = \"Envoyer\" value =\"Enregistrer\"></td>
        </tr>
    </form>
<<<<<<< Updated upstream
</body>", "ModifEntreprise.html.twig", "C:\\Users\\rodri\\Documents\\Github\\FMPS_ProjetSymfony\\FMPS_projetSymfony\\templates\\ModifEntreprise.html.twig");
=======
    <a href=\"{{ path('Detail', {'id' : ENTREPRISE.id }) }}\"><button style = \"background-color : #C83838\">Retour</button></a>
</body>
</html>", "ModifEntreprise.html.twig", "C:\\Users\\aymer\\Documents\\GitHub\\FMPS_ProjetSymfony\\FMPS_projetSymfony\\templates\\ModifEntreprise.html.twig");
>>>>>>> Stashed changes
    }
}
