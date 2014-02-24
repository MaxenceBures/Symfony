<?php

/* webStudentEtudiantBundle:Etudiant:modifier.html.twig */
class __TwigTemplate_cad6a767d34089b532613da1eace260f2383b12d8e710a0a71b1e3594e2eb72b extends Twig_Template
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
 
 </head>
 <body>
 <h1>Modifier</h1>
 <p>
Modifier ";
        // line 10
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
        echo "
 </p>
 </body>
</html>";
    }

    public function getTemplateName()
    {
        return "webStudentEtudiantBundle:Etudiant:modifier.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  29 => 10,  19 => 2,);
    }
}
