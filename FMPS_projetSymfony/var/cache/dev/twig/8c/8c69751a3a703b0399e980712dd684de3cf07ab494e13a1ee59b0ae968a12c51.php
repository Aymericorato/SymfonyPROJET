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

/* DetailUtil.html.twig */
class __TwigTemplate_7152cd14e4ce8f1037a333ac08b0a0477d04e72cdbaf6fc26650969dd87ab9c8 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "DetailUtil.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "DetailUtil.html.twig"));

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
    <h1> Détails de l'utilisateur </h1>
    <br />

    <h2> Nom : </h2>
    ";
        // line 14
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["UTILISATEURS"]) || array_key_exists("UTILISATEURS", $context) ? $context["UTILISATEURS"] : (function () { throw new RuntimeError('Variable "UTILISATEURS" does not exist.', 14, $this->source); })()), "nom", [], "any", false, false, false, 14), "html", null, true);
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
            // line 36
            echo "
    Nom ";
            // line 37
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["key"], "per_nom", [], "any", false, false, false, 37), "html", null, true);
            echo " Prenom : ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["key"], "per_prenom", [], "any", false, false, false, 37), "html", null, true);
            echo "<br/>
        
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['key'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 40
        echo "    <br />
    </div>

</body>
</html>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "DetailUtil.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  116 => 40,  105 => 37,  102 => 36,  98 => 35,  91 => 31,  84 => 27,  77 => 23,  65 => 18,  58 => 14,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE HTML>
<html>
    <Head>
        <meta charset=\"UTF-8\">
        <title>Information sur l'entreprise</title>
        <link rel=\"stylesheet\" href=\"../Style.css\">
    </head>
<body style=\"background-color:#808080\">
    <div class=\"detail\">
    <h1> Détails de l'utilisateur </h1>
    <br />

    <h2> Nom : </h2>
    {{UTILISATEURS.nom}}
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
    </div>

</body>
</html>", "DetailUtil.html.twig", "C:\\Users\\rodri\\Documents\\Github\\FMPS_ProjetSymfony\\FMPS_projetSymfony\\templates\\DetailUtil.html.twig");
    }
}
