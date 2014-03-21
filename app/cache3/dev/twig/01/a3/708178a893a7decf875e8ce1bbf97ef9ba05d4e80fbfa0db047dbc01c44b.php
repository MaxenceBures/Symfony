<?php

/* webStudentEtudiantBundle:Etudiant:consulterListeStage.html.twig */
class __TwigTemplate_01a3708178a893a7decf875e8ce1bbf97ef9ba05d4e80fbfa0db047dbc01c44b extends Twig_Template
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
        echo "\t\t<h1>Afficher les stages</h1>
\t\t<p>
\t\t\tTableau des Stage
\t\t</p>
\t\t<table border=\"1\">
\t\t\t<tr>
\t\t\t\t<td>Id</td>
\t\t\t\t<td>Activite</td>
\t\t\t\t<td>Date Debut</td>
\t\t\t\t<td>Date Fin</td>
\t\t\t\t<td></td>
\t\t\t</tr>
\t\t";
        // line 17
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["listeStage"]) ? $context["listeStage"] : $this->getContext($context, "listeStage")));
        foreach ($context['_seq'] as $context["_key"] => $context["stage"]) {
            // line 18
            echo "\t\t\t<tr><!--.RaisonSociale-->
\t\t\t
\t\t\t\t<td>";
            // line 20
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["stage"]) ? $context["stage"] : $this->getContext($context, "stage")), "id"), "html", null, true);
            echo " </td>
\t\t\t\t<td>";
            // line 21
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["stage"]) ? $context["stage"] : $this->getContext($context, "stage")), "activite"), "html", null, true);
            echo "</td> 
\t\t\t\t<td>";
            // line 22
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["stage"]) ? $context["stage"] : $this->getContext($context, "stage")), "dateDebut"), "d/m/Y"), "html", null, true);
            echo "</td>
\t\t\t\t<td>";
            // line 23
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["stage"]) ? $context["stage"] : $this->getContext($context, "stage")), "dateFin"), "d/m/Y"), "html", null, true);
            echo "</td>
\t\t\t\t<td><a href=\"";
            // line 24
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("consulterStageAction", array("id" => $this->getAttribute((isset($context["stage"]) ? $context["stage"] : $this->getContext($context, "stage")), "id"))), "html", null, true);
            echo "\"> En voir plus</a></td>
\t\t\t\t
\t\t\t</tr>
\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['stage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 28
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
        return "webStudentEtudiantBundle:Etudiant:consulterListeStage.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  88 => 4,  83 => 28,  73 => 24,  69 => 23,  65 => 22,  61 => 21,  57 => 20,  53 => 18,  49 => 17,  35 => 5,  32 => 4,  29 => 3,);
    }
}
