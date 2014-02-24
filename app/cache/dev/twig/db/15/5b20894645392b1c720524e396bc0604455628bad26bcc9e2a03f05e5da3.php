<?php

/* webStudentEtudiantBundle:Etudiant:consultStage.html.twig */
class __TwigTemplate_db155b20894645392b1c720524e396bc0604455628bad26bcc9e2a03f05e5da3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 2
        echo "<!DOCTYPE html>
<html>
 <head>
 <title>Bienvenue sur votre première page créée avec Symfony !</title>
 </head>
 <body>
 <h1>Stage  </h1>
  <table border=1>
 \t<tr>
 \t\t<td>Nom </td>
 \t\t<td> ";
        // line 12
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
        echo "</td>
 \t</tr> </h1>
 \t<tr>
 \t\t<td>Date de debut </td>
 \t\t<td> ";
        // line 16
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, (isset($context["debut"]) ? $context["debut"] : $this->getContext($context, "debut")), "d/m/Y"), "html", null, true);
        echo "</td>
 \t</tr>
 \t<tr>
 \t\t<td>Date de fin </td>
 \t\t<td> ";
        // line 20
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, (isset($context["fin"]) ? $context["fin"] : $this->getContext($context, "fin")), "d/m/Y"), "html", null, true);
        echo "</td>
 \t</tr>
 \t<tr>
 \t\t<td>Activite </td>
 \t\t<td> ";
        // line 24
        echo twig_escape_filter($this->env, (isset($context["activite"]) ? $context["activite"] : $this->getContext($context, "activite")), "html", null, true);
        echo "</td>
 \t</tr>
 \t<tr>
 \t\t<td>Entreprise </td>
 \t\t<td> ";
        // line 28
        echo twig_escape_filter($this->env, (isset($context["entreprise"]) ? $context["entreprise"] : $this->getContext($context, "entreprise")), "html", null, true);
        echo "</td>
 \t</tr>
 \t
 </table
 </body>
</html>";
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
        return array (  59 => 28,  52 => 24,  45 => 20,  38 => 16,  31 => 12,  19 => 2,);
    }
}
