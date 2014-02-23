<?php

/* webStudentEtudiantBundle:Etudiant:consultEUtil.html.twig */
class __TwigTemplate_df1da1087e0f7aa60e51a2242746b1f313355da910a39a799bcea4a0d4cff053 extends Twig_Template
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
 <h1>Etudiant  </h1>
 <table border=1>
 \t<tr>
 \t\t<td>Nom </td>
 \t\t<td> ";
        // line 12
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
        echo "</td>
 \t</tr> </h1>
 \t<tr>
 \t\t<td>Prenom </td>
 \t\t<td> ";
        // line 16
        echo twig_escape_filter($this->env, (isset($context["prenom"]) ? $context["prenom"] : $this->getContext($context, "prenom")), "html", null, true);
        echo "</td>
 \t</tr>
 \t<tr>
 \t\t<td>Mail </td>
 \t\t<td> ";
        // line 20
        echo twig_escape_filter($this->env, (isset($context["mail"]) ? $context["mail"] : $this->getContext($context, "mail")), "html", null, true);
        echo "</td>
 \t</tr>
 \t<tr>
 \t\t<td>Telephone </td>
 \t\t<td> ";
        // line 24
        echo twig_escape_filter($this->env, (isset($context["telephone"]) ? $context["telephone"] : $this->getContext($context, "telephone")), "html", null, true);
        echo "</td>
 \t</tr>
 \t
 </table>
 </body>
</html>";
    }

    public function getTemplateName()
    {
        return "webStudentEtudiantBundle:Etudiant:consultEUtil.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  52 => 24,  45 => 20,  38 => 16,  31 => 12,  19 => 2,);
    }
}
