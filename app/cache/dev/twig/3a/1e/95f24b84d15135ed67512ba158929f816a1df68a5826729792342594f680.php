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
            'test' => array($this, 'block_test'),
            'div' => array($this, 'block_div'),
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
        echo "\t";
        $this->displayBlock('test', $context, $blocks);
        // line 5
        echo "\t";
        $this->displayBlock('div', $context, $blocks);
        // line 7
        echo "\t
\t\t<h1>Afficher les entreprises</h1>
\t\t<p>
\t\t\tTableau des Entreprises
\t\t</p>
\t\t<table border =\"2\">
\t\t<tr>
\t\t<td>Id</td>
\t\t<td>Code</td>
\t\t<td>Raison Sociale</td>
\t\t<td>Rue</td>
\t\t<td>Ville</td>
\t\t<td>Code Postal</td>
\t\t<td></td>
\t\t</tr>
\t\t";
        // line 22
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["listeEntreprise"]) ? $context["listeEntreprise"] : $this->getContext($context, "listeEntreprise")));
        foreach ($context['_seq'] as $context["_key"] => $context["entreprise"]) {
            // line 23
            echo "\t\t\t<tr><!--.RaisonSociale-->
\t\t\t
\t\t\t\t<td>";
            // line 25
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entreprise"]) ? $context["entreprise"] : $this->getContext($context, "entreprise")), "id"), "html", null, true);
            echo "</td>
\t\t\t\t<td>";
            // line 26
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entreprise"]) ? $context["entreprise"] : $this->getContext($context, "entreprise")), "code"), "html", null, true);
            echo "</td>
\t\t\t\t<td>";
            // line 27
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entreprise"]) ? $context["entreprise"] : $this->getContext($context, "entreprise")), "raisonsociale"), "html", null, true);
            echo "</td>
\t\t\t\t<td>";
            // line 28
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entreprise"]) ? $context["entreprise"] : $this->getContext($context, "entreprise")), "rue"), "html", null, true);
            echo "</td>
\t\t\t\t<td>";
            // line 29
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entreprise"]) ? $context["entreprise"] : $this->getContext($context, "entreprise")), "ville"), "html", null, true);
            echo "</td>
\t\t\t\t<td>";
            // line 30
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entreprise"]) ? $context["entreprise"] : $this->getContext($context, "entreprise")), "cp"), "html", null, true);
            echo "</td>
\t\t\t\t<td><a href=\"";
            // line 31
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("consulterEntrepriseAction", array("id" => $this->getAttribute((isset($context["entreprise"]) ? $context["entreprise"] : $this->getContext($context, "entreprise")), "id"))), "html", null, true);
            echo "\"> En voir plus</a></td>
\t\t\t\t
\t\t\t</tr>
\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entreprise'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 35
        echo "\t\t</table>
\t ";
    }

    // line 4
    public function block_test($context, array $blocks = array())
    {
        echo " ";
        $this->displayParentBlock("test", $context, $blocks);
        echo " ";
    }

    // line 5
    public function block_div($context, array $blocks = array())
    {
        echo " ";
        $this->displayParentBlock("div", $context, $blocks);
        echo " 
\t";
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
        return array (  111 => 5,  103 => 4,  98 => 35,  88 => 31,  84 => 30,  80 => 29,  76 => 28,  72 => 27,  68 => 26,  64 => 25,  60 => 23,  56 => 22,  39 => 7,  36 => 5,  33 => 4,  30 => 3,);
    }
}
