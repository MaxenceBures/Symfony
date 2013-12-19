<?php

/* webStudentEtudiantBundle:Etudiant:index.html.twig */
class __TwigTemplate_4a6e2024149f80c22a0e5950e486258c8e1b645ddb47c526b1827a96f8e16e9c extends Twig_Template
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
