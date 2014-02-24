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
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
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
";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 9
        echo "  </head>
  <body>
   
   <a href=\"";
        // line 12
        echo $this->env->getExtension('routing')->getPath("test2Action");
        echo "\"> <img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/Home.png"), "html", null, true);
        echo "\"  width=60 height=60/></a>
   <div align=\"center\">
   ";
        // line 14
        $this->displayBlock('body', $context, $blocks);
        // line 15
        echo "    

  </div>
  </body>
</html>";
    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        echo "WEBSTUDENT";
    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 7
        echo "<link rel=stylesheet type=\"text/css\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/test.css"), "html", null, true);
        echo "\" media=\"all\" >
 ";
    }

    // line 14
    public function block_body($context, array $blocks = array())
    {
        echo " ";
    }

    public function getTemplateName()
    {
        return "webStudentEtudiantBundle:Etudiant:layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  71 => 14,  61 => 6,  55 => 5,  47 => 15,  45 => 14,  38 => 12,  33 => 9,  27 => 5,  22 => 2,  94 => 36,  84 => 32,  80 => 31,  76 => 30,  72 => 29,  68 => 28,  64 => 7,  60 => 26,  56 => 24,  52 => 23,  31 => 6,  28 => 3,);
    }
}
