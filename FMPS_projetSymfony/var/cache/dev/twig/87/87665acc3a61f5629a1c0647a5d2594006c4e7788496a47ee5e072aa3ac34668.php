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

/* Detail.html.twig */
class __TwigTemplate_ff1b223dcbf066454c758463f7368186dcfaabc68148180ddce37aec691b4392 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Detail.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Detail.html.twig"));

        // line 1
        echo "<!DOCTYPE HTML>
<html>
    <Head>
        <meta charset=\"UTF-8\">
        <title>Information sur l'entreprise</title>
        <link rel=\"stylesheet\" href=\"../Style.css\">
    </head>
<body style=\"background-color:#808080\">
    <div class=\"detail\">
    <h1> Détails de l'entreprise </h1>
    <br />

    <h2> RaisonSociale : </h2>
    ";
        // line 14
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["ENTREPRISE"]) || array_key_exists("ENTREPRISE", $context) ? $context["ENTREPRISE"] : (function () { throw new RuntimeError('Variable "ENTREPRISE" does not exist.', 14, $this->source); })()), "ENTRAISONSOCIALE", [], "any", false, false, false, 14), "html", null, true);
        echo "
    <br />

    <h2> Adresse : </h2>
    ";
        // line 18
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["ENTREPRISE"]) || array_key_exists("ENTREPRISE", $context) ? $context["ENTREPRISE"] : (function () { throw new RuntimeError('Variable "ENTREPRISE" does not exist.', 18, $this->source); })()), "ENTADRESSE1", [], "any", false, false, false, 18), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["ENTREPRISE"]) || array_key_exists("ENTREPRISE", $context) ? $context["ENTREPRISE"] : (function () { throw new RuntimeError('Variable "ENTREPRISE" does not exist.', 18, $this->source); })()), "ENTADRESSE2", [], "any", false, false, false, 18), "html", null, true);
        echo "  ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["ENTREPRISE"]) || array_key_exists("ENTREPRISE", $context) ? $context["ENTREPRISE"] : (function () { throw new RuntimeError('Variable "ENTREPRISE" does not exist.', 18, $this->source); })()), "ENTADRESSE3", [], "any", false, false, false, 18), "html", null, true);
        echo " 
    
    <br />

    <h2> Ville : </h2>
    ";
        // line 23
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["ENTREPRISE"]) || array_key_exists("ENTREPRISE", $context) ? $context["ENTREPRISE"] : (function () { throw new RuntimeError('Variable "ENTREPRISE" does not exist.', 23, $this->source); })()), "ENTVILLE", [], "any", false, false, false, 23), "html", null, true);
        echo "
    <br />

    <h2> CodePostal : </h2>
    ";
        // line 27
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["ENTREPRISE"]) || array_key_exists("ENTREPRISE", $context) ? $context["ENTREPRISE"] : (function () { throw new RuntimeError('Variable "ENTREPRISE" does not exist.', 27, $this->source); })()), "ENTCODEPOSTAL", [], "any", false, false, false, 27), "html", null, true);
        echo "
    <br />

    <h2> Pays : </h2>
     ";
        // line 31
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["ENTREPRISE"]) || array_key_exists("ENTREPRISE", $context) ? $context["ENTREPRISE"] : (function () { throw new RuntimeError('Variable "ENTREPRISE" does not exist.', 31, $this->source); })()), "ENTPAYS", [], "any", false, false, false, 31), "html", null, true);
        echo "
    <br />

    <h2> Liste des employés: </h2>
    ";
        // line 35
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["PERSONNEL"]) || array_key_exists("PERSONNEL", $context) ? $context["PERSONNEL"] : (function () { throw new RuntimeError('Variable "PERSONNEL" does not exist.', 35, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["key"]) {
<<<<<<< Updated upstream
            // line 36
            echo "
    Nom ";
            // line 37
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["key"], "per_nom", [], "any", false, false, false, 37), "html", null, true);
            echo " Prenom : ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["key"], "per_prenom", [], "any", false, false, false, 37), "html", null, true);
            echo "<br/>
        
    ";
=======
            // line 66
            echo "                        ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["key"], "opt_libelle", [], "any", false, false, false, 66), "html", null, true);
            echo "<br />
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['key'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 68
        echo "\t\t\t\t\t<a href=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("AjoutOption", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["ENTREPRISE"]) || array_key_exists("ENTREPRISE", $context) ? $context["ENTREPRISE"] : (function () { throw new RuntimeError('Variable "ENTREPRISE" does not exist.', 68, $this->source); })()), "id", [], "any", false, false, false, 68)]), "html", null, true);
        echo "\">
\t\t\t\t\t\t<button type=\"button\" name=\"AjoutOptions\" style=\"background-color : #C83838\">
\t\t\t\t\t\t\tAjout option
\t\t\t\t\t\t</button>
\t\t\t\t\t</a>
\t\t\t\t</div>
\t\t\t</div>
            <div>
\t\t\t\t\t\t<h2>
\t\t\t\t\t\t\tListe des employés:
\t\t\t\t\t\t</h2>
\t\t\t\t\t\t";
        // line 79
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["PERSONNEL"]) || array_key_exists("PERSONNEL", $context) ? $context["PERSONNEL"] : (function () { throw new RuntimeError('Variable "PERSONNEL" does not exist.', 79, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["key"]) {
            // line 80
            echo "\t\t\t\t\t\t\tNom : ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["key"], "per_nom", [], "any", false, false, false, 80), "html", null, true);
            echo "
\t\t\t\t\t\t\tPrenom : ";
            // line 81
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["key"], "per_prenom", [], "any", false, false, false, 81), "html", null, true);
            echo "
\t\t\t\t\t\t\t<a href=\"";
            // line 82
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("SupprEmploye", ["id" => twig_get_attribute($this->env, $this->source, $context["key"], "id", [], "any", false, false, false, 82)]), "html", null, true);
            echo "\">
\t\t\t\t\t\t\t\t<button type=\"button\" name=\"Supprimer\" style=\"background-color : #C83838\">
\t\t\t\t\t\t\t\t\tSupprimer l'employé
                                </button>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t<br/>
\t\t\t\t\t\t";
>>>>>>> Stashed changes
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['key'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
<<<<<<< Updated upstream
        // line 40
        echo "    <br />
    <a href=\"";
        // line 41
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("ModifEnt", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["ENTREPRISE"]) || array_key_exists("ENTREPRISE", $context) ? $context["ENTREPRISE"] : (function () { throw new RuntimeError('Variable "ENTREPRISE" does not exist.', 41, $this->source); })()), "Id", [], "any", false, false, false, 41)]), "html", null, true);
        echo "\"> <button>Modifier</button></a>
    <a href=\"";
        // line 42
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("Supprimer", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["ENTREPRISE"]) || array_key_exists("ENTREPRISE", $context) ? $context["ENTREPRISE"] : (function () { throw new RuntimeError('Variable "ENTREPRISE" does not exist.', 42, $this->source); })()), "id", [], "any", false, false, false, 42)]), "html", null, true);
        echo "\" style=\"text-decoration:none;\"><button type=\"button\" name=\"Supprimer\"> Supprimer l'entreprise</button></a>
    </div>

</body>
</html>";
=======
        // line 89
        echo "\t\t\t\t\t\t<a href=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("PageAjoutEmploye", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["ENTREPRISE"]) || array_key_exists("ENTREPRISE", $context) ? $context["ENTREPRISE"] : (function () { throw new RuntimeError('Variable "ENTREPRISE" does not exist.', 89, $this->source); })()), "Id", [], "any", false, false, false, 89)]), "html", null, true);
        echo "\">
\t\t\t\t\t\t\t<button style=\"background-color : #50C880; cursor:pointer; \">Ajouter un employé</button>
\t\t\t\t\t\t</a>
\t\t\t\t\t</div>
\t\t\t<br/>
            <div class=\"divbouton\">
\t\t\t<a href=\"";
        // line 95
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("ModifEnt", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["ENTREPRISE"]) || array_key_exists("ENTREPRISE", $context) ? $context["ENTREPRISE"] : (function () { throw new RuntimeError('Variable "ENTREPRISE" does not exist.', 95, $this->source); })()), "Id", [], "any", false, false, false, 95)]), "html", null, true);
        echo "\" style=\"text-decoration:none\">
\t\t\t\t<button style=\"background-color : #E3DF1E; cursor:pointer;\">
                    Modifier l'entreprise
                </button>
\t\t\t</a>
            
\t\t\t<a href=\"";
        // line 101
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("Supprimer", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["ENTREPRISE"]) || array_key_exists("ENTREPRISE", $context) ? $context["ENTREPRISE"] : (function () { throw new RuntimeError('Variable "ENTREPRISE" does not exist.', 101, $this->source); })()), "id", [], "any", false, false, false, 101)]), "html", null, true);
        echo "\" >
\t\t\t\t<button type=\"button\" name=\"Supprimer\" style=\"background-color : #C83838; cursor:pointer\">
\t\t\t\t\tSupprimer l'entreprise
                </button>
\t\t\t</a>
            </div>
\t\t\t<a href=\"";
        // line 107
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("Index");
        echo "\">
\t\t\t\t<button style=\"background-color : #C83838; cursor:pointer\">Retour</button>
\t\t\t</a>
           
\t\t</div>

\t</body>
</html>
";
>>>>>>> Stashed changes
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "Detail.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
<<<<<<< Updated upstream
        return array (  123 => 42,  119 => 41,  116 => 40,  105 => 37,  102 => 36,  98 => 35,  91 => 31,  84 => 27,  77 => 23,  65 => 18,  58 => 14,  43 => 1,);
=======
        return array (  224 => 107,  215 => 101,  206 => 95,  196 => 89,  183 => 82,  179 => 81,  174 => 80,  170 => 79,  155 => 68,  146 => 66,  142 => 65,  131 => 57,  121 => 50,  108 => 40,  99 => 34,  95 => 33,  91 => 32,  79 => 23,  71 => 18,  65 => 15,  59 => 12,  54 => 10,  43 => 1,);
>>>>>>> Stashed changes
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE HTML>
<html>
<<<<<<< Updated upstream
    <Head>
        <meta charset=\"UTF-8\">
        <title>Information sur l'entreprise</title>
        <link rel=\"stylesheet\" href=\"../Style.css\">
    </head>
<body style=\"background-color:#808080\">
    <div class=\"detail\">
    <h1> Détails de l'entreprise </h1>
    <br />

    <h2> RaisonSociale : </h2>
    {{ENTREPRISE.ENTRAISONSOCIALE}}
    <br />

    <h2> Adresse : </h2>
    {{ENTREPRISE.ENTADRESSE1}} {{ENTREPRISE.ENTADRESSE2}}  {{ENTREPRISE.ENTADRESSE3}} 
    
    <br />

    <h2> Ville : </h2>
    {{ENTREPRISE.ENTVILLE}}
    <br />

    <h2> CodePostal : </h2>
    {{ENTREPRISE.ENTCODEPOSTAL}}
    <br />

    <h2> Pays : </h2>
     {{ENTREPRISE.ENTPAYS}}
    <br />

    <h2> Liste des employés: </h2>
    {% for key in PERSONNEL %}

    Nom {{key.per_nom}} Prenom : {{key.per_prenom}}<br/>
        
    {% endfor %}
    <br />
    <a href=\"{{path('ModifEnt', {'id': ENTREPRISE.Id }) }}\"> <button>Modifier</button></a>
    <a href=\"{{path('Supprimer',{'id': ENTREPRISE.id }) }}\" style=\"text-decoration:none;\"><button type=\"button\" name=\"Supprimer\"> Supprimer l'entreprise</button></a>
    </div>

</body>
</html>", "Detail.html.twig", "C:\\Users\\rodri\\Documents\\Github\\FMPS_ProjetSymfony\\FMPS_projetSymfony\\templates\\Detail.html.twig");
=======
\t<Head>
\t\t<meta charset=\"UTF-8\">
\t\t<title>Information sur l'entreprise</title>
\t\t<link rel=\"stylesheet\" href=\"../Style.css\">
\t</head>
\t<body style=\"background-color:#00799B\">
\t\t<p>Bonjour
\t\t\t{{app.session.get('login')}}
\t\t\t(
\t\t\t{{ app.session.get('role')}})
\t\t</p>
        <div class = \"deco\">
        <a href=\"{{ path('login') }}\"><button style = \"background-color : #CF5E5E\">Déconnexion</button></a>
        </div>
        <div class = \"deco\">
          <a href=\"{{ path('login') }}\"><button style = \"background-color : #CF5E5E\">Déconnexion</button></a>
        </div>
\t\t<div class=\"blockdetail\">
\t\t\t<h1>
\t\t\t\tDétails de l'entreprise :
\t\t\t\t{{ENTREPRISE.ENTRAISONSOCIALE}}
\t\t\t</h1>

\t\t\t<div class=\"detail\">
\t\t\t\t<div class=\"blocpar2\">
\t\t\t\t\t<div>
\t\t\t\t\t\t<h2>
\t\t\t\t\t\t\tAdresse 
\t\t\t\t\t\t</h2>
\t\t\t\t\t\t{{ENTREPRISE.ENTADRESSE1}}
\t\t\t\t\t\t{{ENTREPRISE.ENTADRESSE2}}
\t\t\t\t\t\t{{ENTREPRISE.ENTADRESSE3}}
\t\t\t\t\t</div>
\t\t\t\t\t<div>
\t\t\t\t\t\t<h2>
\t\t\t\t\t\t\tVille 
\t\t\t\t\t\t</h2>
\t\t\t\t\t\t{{ENTREPRISE.ENTVILLE}}
\t\t\t\t\t</div>
\t\t\t\t\t
\t\t\t\t</div>

\t\t\t\t<div class=\"blocpar2\">
\t\t\t\t\t<div>
\t\t\t\t\t\t<h2>
\t\t\t\t\t\t\tCodePostal 
\t\t\t\t\t\t</h2>
\t\t\t\t\t\t{{ENTREPRISE.ENTCODEPOSTAL}}
\t\t\t\t\t</div>

\t\t\t\t\t<div>
\t\t\t\t\t\t<h2>
\t\t\t\t\t\t\tPays 
\t\t\t\t\t\t</h2>
\t\t\t\t\t\t{{ENTREPRISE.ENTPAYS}}
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<div class=\"blocpar2\">
\t\t\t\t\t<h2>
\t\t\t\t\t\tOption 
\t\t\t\t\t</h2>
                    {% for key in OPTION %}
                        {{key.opt_libelle}}<br />
                    {% endfor %}
\t\t\t\t\t<a href=\"{{path('AjoutOption',{'id':ENTREPRISE.id}) }}\">
\t\t\t\t\t\t<button type=\"button\" name=\"AjoutOptions\" style=\"background-color : #C83838\">
\t\t\t\t\t\t\tAjout option
\t\t\t\t\t\t</button>
\t\t\t\t\t</a>
\t\t\t\t</div>
\t\t\t</div>
            <div>
\t\t\t\t\t\t<h2>
\t\t\t\t\t\t\tListe des employés:
\t\t\t\t\t\t</h2>
\t\t\t\t\t\t{% for key in PERSONNEL %}
\t\t\t\t\t\t\tNom : {{key.per_nom}}
\t\t\t\t\t\t\tPrenom : {{key.per_prenom}}
\t\t\t\t\t\t\t<a href=\"{{path('SupprEmploye',{'id': key.id }) }}\">
\t\t\t\t\t\t\t\t<button type=\"button\" name=\"Supprimer\" style=\"background-color : #C83838\">
\t\t\t\t\t\t\t\t\tSupprimer l'employé
                                </button>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t<br/>
\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t\t<a href=\"{{path('PageAjoutEmploye', {'id': ENTREPRISE.Id }) }}\">
\t\t\t\t\t\t\t<button style=\"background-color : #50C880; cursor:pointer; \">Ajouter un employé</button>
\t\t\t\t\t\t</a>
\t\t\t\t\t</div>
\t\t\t<br/>
            <div class=\"divbouton\">
\t\t\t<a href=\"{{path('ModifEnt', {'id': ENTREPRISE.Id }) }}\" style=\"text-decoration:none\">
\t\t\t\t<button style=\"background-color : #E3DF1E; cursor:pointer;\">
                    Modifier l'entreprise
                </button>
\t\t\t</a>
            
\t\t\t<a href=\"{{path('Supprimer',{'id': ENTREPRISE.id }) }}\" >
\t\t\t\t<button type=\"button\" name=\"Supprimer\" style=\"background-color : #C83838; cursor:pointer\">
\t\t\t\t\tSupprimer l'entreprise
                </button>
\t\t\t</a>
            </div>
\t\t\t<a href=\"{{ path('Index') }}\">
\t\t\t\t<button style=\"background-color : #C83838; cursor:pointer\">Retour</button>
\t\t\t</a>
           
\t\t</div>

\t</body>
</html>
", "Detail.html.twig", "C:\\Users\\aymer\\Documents\\GitHub\\FMPS_ProjetSymfony\\FMPS_projetSymfony\\templates\\Detail.html.twig");
>>>>>>> Stashed changes
    }
}
