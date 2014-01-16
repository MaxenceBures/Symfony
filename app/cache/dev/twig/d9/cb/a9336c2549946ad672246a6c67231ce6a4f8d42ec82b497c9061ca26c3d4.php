<?php

/* webStudentEtudiantBundle:Etudiant:consulterListeEtudiants.html.twig */
class __TwigTemplate_d9cba9336c2549946ad672246a6c67231ce6a4f8d42ec82b497c9061ca26c3d4 extends Twig_Template
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
        echo "\t\t<h1>Afficher l'étudiant</h1>
\t\t<p>
\t\t\t";
        // line 6
        echo twig_escape_filter($this->env, (isset($context["nom"]) ? $context["nom"] : $this->getContext($context, "nom")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["prenom"]) ? $context["prenom"] : $this->getContext($context, "prenom")), "html", null, true);
        echo " <br/>
\t\t\tAdresse : ";
        // line 7
        echo twig_escape_filter($this->env, (isset($context["rue"]) ? $context["rue"] : $this->getContext($context, "rue")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["cp"]) ? $context["cp"] : $this->getContext($context, "cp")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["ville"]) ? $context["ville"] : $this->getContext($context, "ville")), "html", null, true);
        echo "
\t\t</p>
\t";
    }

    public function getTemplateName()
    {
        return "webStudentEtudiantBundle:Etudiant:consulterListeEtudiants.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  41 => 7,  35 => 6,  31 => 4,  28 => 3,);
    }
}
