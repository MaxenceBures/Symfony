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
 <h1> ";
        // line 9
        echo twig_escape_filter($this->env, (((isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")) . " ") . (isset($context["prenom"]) ? $context["prenom"] : $this->getContext($context, "prenom"))), "html", null, true);
        echo " </h1>
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
        return array (  28 => 9,  19 => 2,);
    }
}
