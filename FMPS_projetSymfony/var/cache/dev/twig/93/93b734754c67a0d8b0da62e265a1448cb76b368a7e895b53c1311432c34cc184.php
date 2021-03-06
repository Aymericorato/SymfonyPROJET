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

/* AjoutEntreprise.html.twig */
class __TwigTemplate_7674e58043923226eb39eeddcd5ad7531b8647658d8210331a2781ed6bcd5157 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "AjoutEntreprise.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "AjoutEntreprise.html.twig"));

        // line 1
        echo "<!DOCTYPE HTML>
<html>
    <Head>
        <meta charset=\"UTF-8\">
        <title>Ajout d'une entreprise</title>
        <link rel=\"stylesheet\" href=\"../Style.css\">
    </head>
<body style=\"background-color:#808080\">
<body>
    <h1> Formulaire d'ajout d'une entreprise </h1>
    <form action=\"";
        // line 11
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("post_entreprise");
        echo "\" method=\"POST\">
        <tr>
            <td>??? Raison sociale : </td>
            <td><input type =\"text\" name =\"RaisonSociale\" required></td><br />
        </tr>
        <br />
        <tr>
            <td>??? Adresse :</td>
            <td><input type =\"text\" name =\"Adresse\" required></td><br />
        </tr>
        <br />
        <tr>
            <td>??? Adresse 2 :</td>
            <td><input type =\"text\" name =\"Adresse2\" ></td><br />
        </tr>
        <br />
        <tr>
            <td>??? Adresse 3 :</td>
            <td><input type =\"text\" name =\"Adresse3\" ></td><br />
        </tr>
        <br />
        <tr>
            <td>??? Ville : </td>
            <td><input type =\"text\" name =\"Ville\" required></td><br />
        </tr>
        <br />
        <tr>
            <td>??? Code Postal : </td>
            <td><input type =\"number\" name =\"CP\" required></td><br />
        </tr>
        <br />
        <tr>
            <td>??? Pays :</td>
            <td><input type =\"text\" name =\"Pays\" required></td><br />
        </tr>
        <br />
        <tr>
            <td><input type =\"submit\" name = \"Envoyer\" value =\"Enregistrer\"></td>
        </tr>
    </form>
</body>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "AjoutEntreprise.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  55 => 11,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE HTML>
<html>
    <Head>
        <meta charset=\"UTF-8\">
        <title>Ajout d'une entreprise</title>
        <link rel=\"stylesheet\" href=\"../Style.css\">
    </head>
<body style=\"background-color:#808080\">
<body>
    <h1> Formulaire d'ajout d'une entreprise </h1>
    <form action=\"{{ path('post_entreprise') }}\" method=\"POST\">
        <tr>
            <td>??? Raison sociale : </td>
            <td><input type =\"text\" name =\"RaisonSociale\" required></td><br />
        </tr>
        <br />
        <tr>
            <td>??? Adresse :</td>
            <td><input type =\"text\" name =\"Adresse\" required></td><br />
        </tr>
        <br />
        <tr>
            <td>??? Adresse 2 :</td>
            <td><input type =\"text\" name =\"Adresse2\" ></td><br />
        </tr>
        <br />
        <tr>
            <td>??? Adresse 3 :</td>
            <td><input type =\"text\" name =\"Adresse3\" ></td><br />
        </tr>
        <br />
        <tr>
            <td>??? Ville : </td>
            <td><input type =\"text\" name =\"Ville\" required></td><br />
        </tr>
        <br />
        <tr>
            <td>??? Code Postal : </td>
            <td><input type =\"number\" name =\"CP\" required></td><br />
        </tr>
        <br />
        <tr>
            <td>??? Pays :</td>
            <td><input type =\"text\" name =\"Pays\" required></td><br />
        </tr>
        <br />
        <tr>
            <td><input type =\"submit\" name = \"Envoyer\" value =\"Enregistrer\"></td>
        </tr>
    </form>
</body>
<<<<<<< Updated upstream
", "AjoutEntreprise.html.twig", "C:\\Users\\rodri\\Documents\\Github\\FMPS_ProjetSymfony\\FMPS_projetSymfony\\templates\\AjoutEntreprise.html.twig");
=======
</html>
", "AjoutEntreprise.html.twig", "C:\\Users\\aymer\\Documents\\GitHub\\FMPS_ProjetSymfony\\FMPS_projetSymfony\\templates\\AjoutEntreprise.html.twig");
>>>>>>> Stashed changes
    }
}
