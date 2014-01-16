<?php

/* webStudentEtudiantBundle:Etudiant:consulterListeStage.html.twig */
class __TwigTemplate_01a3708178a893a7decf875e8ce1bbf97ef9ba05d4e80fbfa0db047dbc01c44b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("::layout.html.twig");

        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        // line 3
        echo "\t\t<h1>Afficher les stages</h1>
\t\t<p>
\t\t\tTableau des Stage
\t\t</p>
\t\t<table >
\t\t";
        // line 8
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["listeStage"]) ? $context["listeStage"] : $this->getContext($context, "listeStage")));
        foreach ($context['_seq'] as $context["_key"] => $context["stage"]) {
            // line 9
            echo "\t\t\t<tr><!--.RaisonSociale-->
\t\t\t
\t\t\t\t<td>";
            // line 11
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["stage"]) ? $context["stage"] : $this->getContext($context, "stage")), "id"), "html", null, true);
            echo "  - ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["stage"]) ? $context["stage"] : $this->getContext($context, "stage")), "activite"), "html", null, true);
            echo " - ";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["stage"]) ? $context["stage"] : $this->getContext($context, "stage")), "dateDebut"), "d/m/Y"), "html", null, true);
            echo " - ";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["stage"]) ? $context["stage"] : $this->getContext($context, "stage")), "dateDebut"), "d/m/Y"), "html", null, true);
            echo "</td><td><a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("consulterStageAction", array("id" => $this->getAttribute((isset($context["stage"]) ? $context["stage"] : $this->getContext($context, "stage")), "id"))), "html", null, true);
            echo "\"> En voir plus</a></td>
\t\t\t\t
\t\t\t</tr>
\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['stage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 15
        echo "\t\t</table>
\t";
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
        return array (  64 => 15,  46 => 11,  42 => 9,  38 => 8,  31 => 3,  28 => 2,);
    }
}
