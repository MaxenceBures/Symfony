<?php

/* webStudentEtudiantBundle:Entreprise:consulterLesEntreprises.html.twig */
class __TwigTemplate_665b4b9c1583dbb235cff9a83191a7bfc400204d86d4698a3ccc064ad28d3ce9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("::base.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        echo " Liste des entreprises enregistrées ";
    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        // line 5
        echo "
<h1> Voici la liste des entreprises enregistrées </h1>

<table border = 1>
\t<tr>
\t\t<th>Nom</th>
\t\t<th>Activité</th>
\t\t<th>Numero rue</th>
\t\t<th>Nom rue</th>
\t\t<th>Code Postal</th>
\t\t<th>Ville</th>
\t\t<th>Telephone</th>
\t\t<th>Mail</th>
\t</tr>
\t";
        // line 19
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["listeEntreprises"]) ? $context["listeEntreprises"] : $this->getContext($context, "listeEntreprises")));
        foreach ($context['_seq'] as $context["_key"] => $context["entreprise"]) {
            // line 20
            echo "\t<tr>
\t    <td><a href=\"";
            // line 21
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("Entreprise_afficher", array("id" => $this->getAttribute((isset($context["entreprise"]) ? $context["entreprise"] : $this->getContext($context, "entreprise")), "id"))), "html", null, true);
            echo "\"> ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entreprise"]) ? $context["entreprise"] : $this->getContext($context, "entreprise")), "nom"), "html", null, true);
            echo " </a></td>
\t\t<td>";
            // line 22
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entreprise"]) ? $context["entreprise"] : $this->getContext($context, "entreprise")), "activite"), "html", null, true);
            echo "</td>
\t\t<td>";
            // line 23
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entreprise"]) ? $context["entreprise"] : $this->getContext($context, "entreprise")), "numeroRue"), "html", null, true);
            echo "</td>
\t\t<td>";
            // line 24
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entreprise"]) ? $context["entreprise"] : $this->getContext($context, "entreprise")), "nomRue"), "html", null, true);
            echo "</td>
\t\t<td>";
            // line 25
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entreprise"]) ? $context["entreprise"] : $this->getContext($context, "entreprise")), "codePostal"), "html", null, true);
            echo "</td>
\t\t<td>";
            // line 26
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entreprise"]) ? $context["entreprise"] : $this->getContext($context, "entreprise")), "ville"), "html", null, true);
            echo "</td>
\t\t<td>";
            // line 27
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entreprise"]) ? $context["entreprise"] : $this->getContext($context, "entreprise")), "numeroTel"), "html", null, true);
            echo "</td>
\t\t<td>";
            // line 28
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entreprise"]) ? $context["entreprise"] : $this->getContext($context, "entreprise")), "adresseMail"), "html", null, true);
            echo "</td>
\t</tr>
\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entreprise'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 31
        echo "</table>
";
    }

    public function getTemplateName()
    {
        return "webStudentEtudiantBundle:Entreprise:consulterLesEntreprises.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  100 => 31,  91 => 28,  87 => 27,  83 => 26,  79 => 25,  75 => 24,  71 => 23,  67 => 22,  61 => 21,  58 => 20,  54 => 19,  38 => 5,  35 => 4,  29 => 2,);
    }
}
