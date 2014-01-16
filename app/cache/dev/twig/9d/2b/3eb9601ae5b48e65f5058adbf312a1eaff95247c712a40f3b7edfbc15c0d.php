<?php

/* webStudentEtudiantBundle:Etudiant:consultUtil.html.twig */
class __TwigTemplate_9d2b3eb9601ae5b48e65f5058adbf312a1eaff95247c712a40f3b7edfbc15c0d extends Twig_Template
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
 <h1>Section  </h1>
  ";
        // line 9
        echo twig_escape_filter($this->env, (((isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")) . " ") . (isset($context["nb"]) ? $context["nb"] : $this->getContext($context, "nb"))), "html", null, true);
        echo "
 </body>
</html>";
    }

    public function getTemplateName()
    {
        return "webStudentEtudiantBundle:Etudiant:consultUtil.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 9,  19 => 2,);
    }
}
