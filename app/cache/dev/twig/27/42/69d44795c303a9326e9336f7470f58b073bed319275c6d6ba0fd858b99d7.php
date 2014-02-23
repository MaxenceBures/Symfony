<?php

/* webStudentEtudiantBundle:Etudiant:test.html.twig */
class __TwigTemplate_274269d44795c303a9326e9336f7470f58b073bed319275c6d6ba0fd858b99d7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("::layout.html.twig");

        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        // line 4
        echo " <h1>Accueil </h1>
<ul>
\t\t\t
\t\t\t\t<li><a href=\"";
        // line 7
        echo $this->env->getExtension('routing')->getPath("listeAction");
        echo "\"> Liste Utilisateur</a></li>
\t\t\t\t
\t\t\t
\t\t\t\t<li><a href=\"";
        // line 10
        echo $this->env->getExtension('routing')->getPath("ListeStageAction");
        echo "\"> Liste Stage</a></li>
</ul>\t\t\t\t
        ";
    }

    public function getTemplateName()
    {
        return "webStudentEtudiantBundle:Etudiant:test.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  42 => 10,  36 => 7,  31 => 4,  28 => 3,);
    }
}
