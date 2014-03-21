<?php

/* webStudentEtudiantBundle:Etudiant:consulterListeEtudiant.html.twig */
class __TwigTemplate_c9c48947b90fc29a5861269d11e7ec4747904156bb4ad3bffbc03ac181491bf7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("webStudentEtudiantBundle:Etudiant:layout.html.twig");

        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'test' => array($this, 'block_test'),
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
        echo "\t\t<h1>Afficher les étudiants</h1>
\t\t<p>
\t\t\tTableau des étudiants
\t\t</p>
\t\t<table border=1>
\t\t\t<tr>
\t\t\t<td>Nom</td>
\t\t\t<td>Prenom</td>
\t\t\t</tr>
\t\t";
        // line 14
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["listeEtudiant"]) ? $context["listeEtudiant"] : $this->getContext($context, "listeEtudiant")));
        foreach ($context['_seq'] as $context["_key"] => $context["etudiant"]) {
            // line 15
            echo "\t\t\t<tr>
\t\t\t
\t\t\t\t<td>";
            // line 17
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["etudiant"]) ? $context["etudiant"] : $this->getContext($context, "etudiant")), "nom"), "html", null, true);
            echo " </td>
\t\t\t\t<td> ";
            // line 18
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["etudiant"]) ? $context["etudiant"] : $this->getContext($context, "etudiant")), "prenom"), "html", null, true);
            echo "</td>
\t\t\t\t<td><a href=\"";
            // line 19
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("consulterEtudiant2Action", array("id" => $this->getAttribute((isset($context["etudiant"]) ? $context["etudiant"] : $this->getContext($context, "etudiant")), "code"))), "html", null, true);
            echo "\"> En voir plus</a></td>
\t\t\t\t
\t\t\t</tr>
\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['etudiant'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 23
        echo "\t\t</table>
\t";
    }

    // line 4
    public function block_test($context, array $blocks = array())
    {
        echo " ";
        $this->displayParentBlock("test", $context, $blocks);
        echo " ";
    }

    public function getTemplateName()
    {
        return "webStudentEtudiantBundle:Etudiant:consulterListeEtudiant.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  77 => 4,  72 => 23,  62 => 19,  58 => 18,  54 => 17,  50 => 15,  46 => 14,  35 => 5,  32 => 4,  29 => 3,);
    }
}
