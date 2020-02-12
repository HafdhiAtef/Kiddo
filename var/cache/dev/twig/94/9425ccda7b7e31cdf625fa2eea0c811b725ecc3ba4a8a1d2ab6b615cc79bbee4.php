<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* @Reclamation/Reclamation/afficher.html.twig */
class __TwigTemplate_016fcf14a1326a9cf143334e1205996f4d8bf3d3ce98c7723189a92572cfa3e2 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Reclamation/Reclamation/afficher.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Reclamation/Reclamation/afficher.html.twig"));

        // line 1
        echo "<h2> Liste des Reclamations</h2>
";
        // line 2
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["reclamations"] ?? $this->getContext($context, "reclamations")));
        foreach ($context['_seq'] as $context["_key"] => $context["reclamation"]) {
            // line 3
            echo "   <table border=\"1\">
       <form>
        <tr><td>ID</td>
        <td>Titre</td>
        <td>Contenu</td>
            <td></td>
            <td></td>
        </tr>
    <tr><td>";
            // line 11
            echo twig_escape_filter($this->env, $this->getAttribute($context["reclamation"], "id", []), "html", null, true);
            echo "</td>
        <td>";
            // line 12
            echo twig_escape_filter($this->env, $this->getAttribute($context["reclamation"], "titre", []), "html", null, true);
            echo "</td>
        <td>";
            // line 13
            echo twig_escape_filter($this->env, $this->getAttribute($context["reclamation"], "contenu", []), "html", null, true);
            echo "</td>
        <td> <a href=\"";
            // line 14
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("reclamation_delete", ["id" => $this->getAttribute($context["reclamation"], "id", [])]), "html", null, true);
            echo "\"> delete </a>  </td>
        <td> <a href=\"";
            // line 15
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("reclamation_update", ["id" => $this->getAttribute($context["reclamation"], "id", [])]), "html", null, true);
            echo "\"> update </a> </td>

    </tr>
       </form>
   </table>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['reclamation'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@Reclamation/Reclamation/afficher.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  69 => 15,  65 => 14,  61 => 13,  57 => 12,  53 => 11,  43 => 3,  39 => 2,  36 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("<h2> Liste des Reclamations</h2>
{% for reclamation in reclamations %}
   <table border=\"1\">
       <form>
        <tr><td>ID</td>
        <td>Titre</td>
        <td>Contenu</td>
            <td></td>
            <td></td>
        </tr>
    <tr><td>{{ reclamation.id  }}</td>
        <td>{{ reclamation.titre }}</td>
        <td>{{ reclamation.contenu }}</td>
        <td> <a href=\"{{ path('reclamation_delete',{id:reclamation.id}) }}\"> delete </a>  </td>
        <td> <a href=\"{{ path('reclamation_update',{id:reclamation.id}) }}\"> update </a> </td>

    </tr>
       </form>
   </table>
{% endfor %}
", "@Reclamation/Reclamation/afficher.html.twig", "C:\\wamp\\www\\Kiddo\\src\\ReclamationBundle\\Resources\\views\\Reclamation\\afficher.html.twig");
    }
}
