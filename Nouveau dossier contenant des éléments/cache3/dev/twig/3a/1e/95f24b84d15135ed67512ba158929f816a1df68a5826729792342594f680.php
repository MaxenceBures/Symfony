<?php

/* webStudentEtudiantBundle:Etudiant:consulterListeEntreprise.html.twig */
class __TwigTemplate_3a1e95f24b84d15135ed67512ba158929f816a1df68a5826729792342594f680 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("webStudentEtudiantBundle:Etudiant:layout.html.twig");

        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "webStudentEtudiantBundle:Etudiant:layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        // line 4
        echo "\t
\t
\t\t<h1>Afficher les entreprises</h1>
\t\t<p>
\t\t\tTableau des Entreprises
\t\t</p>
\t\t<table cellspacing='0'>
\t\t
\t\t<tr>
\t\t<th>Id</th>
\t\t<th>Code</th>
\t\t<th>Raison Sociale</th>
\t\t<th>Rue</th>
\t\t<th>Ville</th>
\t\t<th>Code Postal</th>
\t\t<th></th>
\t\t</tr>
\t\t
\t
\t\t";
        // line 23
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["listeEntreprise"]) ? $context["listeEntreprise"] : $this->getContext($context, "listeEntreprise")));
        foreach ($context['_seq'] as $context["_key"] => $context["entreprise"]) {
            // line 24
            echo "\t\t\t<tr><!--.RaisonSociale-->
\t\t\t
\t\t\t\t<td>";
            // line 26
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entreprise"]) ? $context["entreprise"] : $this->getContext($context, "entreprise")), "id"), "html", null, true);
            echo "</td>
\t\t\t\t<td>";
            // line 27
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entreprise"]) ? $context["entreprise"] : $this->getContext($context, "entreprise")), "code"), "html", null, true);
            echo "</td>
\t\t\t\t<td>";
            // line 28
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entreprise"]) ? $context["entreprise"] : $this->getContext($context, "entreprise")), "raisonsociale"), "html", null, true);
            echo "</td>
\t\t\t\t<td>";
            // line 29
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entreprise"]) ? $context["entreprise"] : $this->getContext($context, "entreprise")), "rue"), "html", null, true);
            echo "</td>
\t\t\t\t<td>";
            // line 30
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entreprise"]) ? $context["entreprise"] : $this->getContext($context, "entreprise")), "ville"), "html", null, true);
            echo "</td>
\t\t\t\t<td>";
            // line 31
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entreprise"]) ? $context["entreprise"] : $this->getContext($context, "entreprise")), "cp"), "html", null, true);
            echo "</td>
\t\t\t\t<td><a href=\"";
            // line 32
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("consulterEntrepriseAction", array("id" => $this->getAttribute((isset($context["entreprise"]) ? $context["entreprise"] : $this->getContext($context, "entreprise")), "id"))), "html", null, true);
            echo "\"> En voir plus</a></td>
\t\t\t\t
\t\t\t</tr>
\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entreprise'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 36
        echo "\t\t
\t\t</table>
\t ";
    }

    public function getTemplateName()
    {
        return "webStudentEtudiantBundle:Etudiant:consulterListeEntreprise.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 36,  84 => 32,  80 => 31,  76 => 30,  72 => 29,  68 => 28,  64 => 27,  60 => 26,  56 => 24,  52 => 23,  31 => 4,  28 => 3,);
    }
}
