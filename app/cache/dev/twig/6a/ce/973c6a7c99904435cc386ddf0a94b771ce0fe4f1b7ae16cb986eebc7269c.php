<?php

/* webStudentEtudiantBundle:Etudiant:consultEntreprise.html.twig */
class __TwigTemplate_6ace973c6a7c99904435cc386ddf0a94b771ce0fe4f1b7ae16cb986eebc7269c extends Twig_Template
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
 <h1>Entreprise  </h1>
  <table border=1>
 \t<tr>
 \t\t<td>Code </td>
 \t\t<td> ";
        // line 12
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
        echo "</td>
 \t</tr> </h1>
 \t<tr>
 \t\t<td>Raison Sociale </td>
 \t\t<td> ";
        // line 16
        echo twig_escape_filter($this->env, (isset($context["raisonsociale"]) ? $context["raisonsociale"] : $this->getContext($context, "raisonsociale")), "html", null, true);
        echo "</td>
 \t</tr>
 \t<tr>
 \t\t<td>Rue </td>
 \t\t<td> ";
        // line 20
        echo twig_escape_filter($this->env, (isset($context["rue"]) ? $context["rue"] : $this->getContext($context, "rue")), "html", null, true);
        echo "</td>
 \t</tr>
 \t<tr>
 \t\t<td>Ville</td>
 \t\t<td> ";
        // line 24
        echo twig_escape_filter($this->env, (isset($context["ville"]) ? $context["ville"] : $this->getContext($context, "ville")), "html", null, true);
        echo "</td>
 \t</tr>
 \t<tr>
 \t\t<td>Code Postal </td>
 \t\t<td> ";
        // line 28
        echo twig_escape_filter($this->env, (isset($context["cp"]) ? $context["cp"] : $this->getContext($context, "cp")), "html", null, true);
        echo "</td>
 \t</tr>
 \t
 </table
 </body>
</html>";
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
        return array (  59 => 28,  52 => 24,  45 => 20,  38 => 16,  31 => 12,  19 => 2,);
    }
}
