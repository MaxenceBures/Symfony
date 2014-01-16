<?php

/* webStudentEtudiantBundle:Etudiant:index.html.twig */
class __TwigTemplate_89aaec4e51648f3fe6a70337ffbbf6d8ac44cca1de1445d2da8ed52bbd2df6e4 extends Twig_Template
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
 <title>Bienvenue sur votre première page créée avec Symfony !</title>
 </head>
 <body>
 <h1>Salut les étudiants</h1>
 <p>
 Félicitations, vous avez réussi à créer une première page. Vous avez compris ?!?
 </p>

 <h1>Salut  ";
        // line 13
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
        echo " </h1>
 </body>
</html>";
    }

    public function getTemplateName()
    {
        return "webStudentEtudiantBundle:Etudiant:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  32 => 13,  19 => 2,);
    }
}
