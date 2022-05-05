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

/* AjoutOption.html.twig */
class __TwigTemplate_83ea5ccb851bde1d14ee594a1c4f116ac5e203b99f408d4c12b3fabc806051e3 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "AjoutOption.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "AjoutOption.html.twig"));

        // line 1
        echo "<!DOCTYPE HTML>
<html>
\t<Head>
\t\t<meta charset=\"UTF-8\">
\t\t<title>Ajout d'une option</title>
\t\t<link rel=\"stylesheet\" href=\"../Style.css\">
\t</head>
\t<body style=\"background-color:#00799B\"></body>
\t<p>Bonjour
\t\t";
        // line 10
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 10, $this->source); })()), "session", [], "any", false, false, false, 10), "get", [0 => "login"], "method", false, false, false, 10), "html", null, true);
        echo "
\t\t(";
        // line 11
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 11, $this->source); })()), "session", [], "any", false, false, false, 11), "get", [0 => "role"], "method", false, false, false, 11), "html", null, true);
        echo ")
\t</p>
\t<div class = \"deco\">
        <a href=\"";
        // line 14
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("login");
        echo "\"><button style = \"background-color : #CF5E5E\">Déconnexion</button></a>
\t</div>

\t<h1>
\t\tFormulaire d'ajout d'une option
\t</h1>
\t<form action=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("post_AjoutOption", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["ENTREPRISE"]) || array_key_exists("ENTREPRISE", $context) ? $context["ENTREPRISE"] : (function () { throw new RuntimeError('Variable "ENTREPRISE" does not exist.', 20, $this->source); })()), "id", [], "any", false, false, false, 20)]), "html", null, true);
        echo "\" method=\"POST\">
\t\t<tr>
\t\t\t<td>
\t\t\t\tOption(s) :<br />
                ";
        // line 24
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["OPTIONS"]) || array_key_exists("OPTIONS", $context) ? $context["OPTIONS"] : (function () { throw new RuntimeError('Variable "OPTIONS" does not exist.', 24, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["key"]) {
            // line 25
            echo "                    <input type=\"checkbox\" name=\"Options[]\" value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["key"], "id", [], "any", false, false, false, 25), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["key"], "optlibelle", [], "any", false, false, false, 25), "html", null, true);
            echo "<br />
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['key'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 27
        echo "\t\t\t</td>
            <td>
\t\t</tr>
        <br />
\t\t<tr>
\t\t\t<td><input type=\"submit\" name=\"Envoyer\" value=\"Enregistrer\" style=\"background-color : #1EAFE3\"></td>
\t\t</tr>
\t</form>
\t<a href=\"";
        // line 35
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("ListeUtilisateur");
        echo "\">
\t\t<button style=\"background-color : #C83838\">Retour</button>
\t</a>
</html></body></html>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "AjoutOption.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  105 => 35,  95 => 27,  84 => 25,  80 => 24,  73 => 20,  64 => 14,  58 => 11,  54 => 10,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE HTML>
<html>
\t<Head>
\t\t<meta charset=\"UTF-8\">
\t\t<title>Ajout d'une option</title>
\t\t<link rel=\"stylesheet\" href=\"../Style.css\">
\t</head>
\t<body style=\"background-color:#00799B\"></body>
\t<p>Bonjour
\t\t{{app.session.get('login')}}
\t\t({{ app.session.get('role')}})
\t</p>
\t<div class = \"deco\">
        <a href=\"{{ path('login') }}\"><button style = \"background-color : #CF5E5E\">Déconnexion</button></a>
\t</div>

\t<h1>
\t\tFormulaire d'ajout d'une option
\t</h1>
\t<form action=\"{{ path('post_AjoutOption', {\"id\" : ENTREPRISE.id }) }}\" method=\"POST\">
\t\t<tr>
\t\t\t<td>
\t\t\t\tOption(s) :<br />
                {% for key in OPTIONS %}
                    <input type=\"checkbox\" name=\"Options[]\" value=\"{{ key.id }}\">{{ key.optlibelle }}<br />
                {% endfor %}
\t\t\t</td>
            <td>
\t\t</tr>
        <br />
\t\t<tr>
\t\t\t<td><input type=\"submit\" name=\"Envoyer\" value=\"Enregistrer\" style=\"background-color : #1EAFE3\"></td>
\t\t</tr>
\t</form>
\t<a href=\"{{ path('ListeUtilisateur')}}\">
\t\t<button style=\"background-color : #C83838\">Retour</button>
\t</a>
</html></body></html>
", "AjoutOption.html.twig", "C:\\Users\\aymer\\Documents\\GitHub\\FMPS_ProjetSymfony\\FMPS_projetSymfony\\templates\\AjoutOption.html.twig");
    }
}
