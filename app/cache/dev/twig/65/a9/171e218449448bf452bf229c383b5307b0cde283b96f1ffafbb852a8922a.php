<?php

/* webStudentEtudiantBundle:Etudiant:layout.html.twig */
class __TwigTemplate_65a9171e218449448bf452bf229c383b5307b0cde283b96f1ffafbb852a8922a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
            'test' => array($this, 'block_test'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 2
        echo "
<html>
<head>
<meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\" /> <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
  </head>
  <body>
   ";
        // line 8
        $this->displayBlock('body', $context, $blocks);
        // line 14
        echo "  </body>
</html>";
    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        echo "WEBSTUDENT";
    }

    // line 8
    public function block_body($context, array $blocks = array())
    {
        // line 9
        echo "
    ";
        // line 10
        $this->displayBlock('test', $context, $blocks);
        // line 13
        echo " ";
    }

    // line 10
    public function block_test($context, array $blocks = array())
    {
        // line 11
        echo " <a href=\"";
        echo $this->env->getExtension('routing')->getPath("test2Action");
        echo "\"> Accueil</a>\t
 ";
    }

    public function getTemplateName()
    {
        return "webStudentEtudiantBundle:Etudiant:layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  61 => 11,  58 => 10,  54 => 13,  52 => 10,  49 => 9,  46 => 8,  40 => 5,  35 => 14,  33 => 8,  27 => 5,  22 => 2,);
    }
}
