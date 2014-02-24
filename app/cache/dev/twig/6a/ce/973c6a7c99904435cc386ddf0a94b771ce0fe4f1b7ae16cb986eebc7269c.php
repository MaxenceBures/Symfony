<?php

/* webStudentEtudiantBundle:Etudiant:consultEntreprise.html.twig */
class __TwigTemplate_6ace973c6a7c99904435cc386ddf0a94b771ce0fe4f1b7ae16cb986eebc7269c extends Twig_Template
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
        echo "
 <h1>Entreprise  </h1>
  <table border=1>
 \t<tr>
 \t\t<td>Code </td>
 \t\t<td> ";
        // line 10
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
        echo "</td>
 \t</tr> </h1>
 \t<tr>
 \t\t<td>Raison Sociale </td>
 \t\t<td> ";
        // line 14
        echo twig_escape_filter($this->env, (isset($context["raisonsociale"]) ? $context["raisonsociale"] : $this->getContext($context, "raisonsociale")), "html", null, true);
        echo "</td>
 \t</tr>
 \t<tr>
 \t\t<td>Rue </td>
 \t\t<td> ";
        // line 18
        echo twig_escape_filter($this->env, (isset($context["rue"]) ? $context["rue"] : $this->getContext($context, "rue")), "html", null, true);
        echo "</td>
 \t</tr>
 \t<tr>
 \t\t<td>Ville</td>
 \t\t<td> ";
        // line 22
        echo twig_escape_filter($this->env, (isset($context["ville"]) ? $context["ville"] : $this->getContext($context, "ville")), "html", null, true);
        echo "</td>
 \t</tr>
 \t<tr>
 \t\t<td>Code Postal </td>
 \t\t<td> ";
        // line 26
        echo twig_escape_filter($this->env, (isset($context["cp"]) ? $context["cp"] : $this->getContext($context, "cp")), "html", null, true);
        echo "</td>
 \t</tr>
 \t
 </table>
 ";
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
        return "webStudentEtudiantBundle:Etudiant:consultEntreprise.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  79 => 4,  70 => 26,  63 => 22,  56 => 18,  49 => 14,  42 => 10,  35 => 5,  32 => 4,  29 => 3,);
    }
}
