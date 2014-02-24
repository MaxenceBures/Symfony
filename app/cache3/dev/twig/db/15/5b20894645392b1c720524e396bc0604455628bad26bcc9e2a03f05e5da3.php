<?php

/* webStudentEtudiantBundle:Etudiant:consultStage.html.twig */
class __TwigTemplate_db155b20894645392b1c720524e396bc0604455628bad26bcc9e2a03f05e5da3 extends Twig_Template
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
        echo " <h1>Stage  </h1>
  <table border=1>
 \t<tr>
 \t\t<td>Nom </td>
 \t\t<td> ";
        // line 9
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
        echo "</td>
 \t</tr> </h1>
 \t<tr>
 \t\t<td>Date de debut </td>
 \t\t<td> ";
        // line 13
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, (isset($context["debut"]) ? $context["debut"] : $this->getContext($context, "debut")), "d/m/Y"), "html", null, true);
        echo "</td>
 \t</tr>
 \t<tr>
 \t\t<td>Date de fin </td>
 \t\t<td> ";
        // line 17
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, (isset($context["fin"]) ? $context["fin"] : $this->getContext($context, "fin")), "d/m/Y"), "html", null, true);
        echo "</td>
 \t</tr>
 \t<tr>
 \t\t<td>Activite </td>
 \t\t<td> ";
        // line 21
        echo twig_escape_filter($this->env, (isset($context["activite"]) ? $context["activite"] : $this->getContext($context, "activite")), "html", null, true);
        echo "</td>
 \t</tr>
 \t<tr>
 \t\t<td>Entreprise </td>
 \t\t<td> ";
        // line 25
        echo twig_escape_filter($this->env, (isset($context["entreprise"]) ? $context["entreprise"] : $this->getContext($context, "entreprise")), "html", null, true);
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
        return "webStudentEtudiantBundle:Etudiant:consultStage.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 4,  69 => 25,  62 => 21,  55 => 17,  48 => 13,  41 => 9,  35 => 5,  32 => 4,  29 => 3,);
    }
}
