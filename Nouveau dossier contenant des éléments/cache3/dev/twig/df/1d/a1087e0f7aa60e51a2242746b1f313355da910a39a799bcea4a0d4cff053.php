<?php

/* webStudentEtudiantBundle:Etudiant:consultEUtil.html.twig */
class __TwigTemplate_df1da1087e0f7aa60e51a2242746b1f313355da910a39a799bcea4a0d4cff053 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("webStudentEtudiantBundle:Etudiant:layout.html.twig");

        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'test' => array($this, 'block_test'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "webStudentEtudiantBundle:Etudiant:layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        // line 4
        echo "\t";
        $this->displayBlock('test', $context, $blocks);
        // line 5
        echo " <h1>Etudiant  </h1>
 <table border=1>
 \t<tr>
 \t\t<td>Nom </td>
 \t\t<td> ";
        // line 9
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
        echo "</td>
 \t</tr> </h1>
 \t<tr>
 \t\t<td>Prenom </td>
 \t\t<td> ";
        // line 13
        echo twig_escape_filter($this->env, (isset($context["prenom"]) ? $context["prenom"] : $this->getContext($context, "prenom")), "html", null, true);
        echo "</td>
 \t</tr>
 \t<tr>
 \t\t<td>Mail </td>
 \t\t<td> ";
        // line 17
        echo twig_escape_filter($this->env, (isset($context["mail"]) ? $context["mail"] : $this->getContext($context, "mail")), "html", null, true);
        echo "</td>
 \t</tr>
 \t<tr>
 \t\t<td>Telephone </td>
 \t\t<td> ";
        // line 21
        echo twig_escape_filter($this->env, (isset($context["telephone"]) ? $context["telephone"] : $this->getContext($context, "telephone")), "html", null, true);
        echo "</td>
 \t</tr>
 \t
 </table>
";
    }

    // line 4
    public function block_test($context, array $blocks = array())
    {
        echo " ";
        $this->displayParentBlock("test", $context, $blocks);
        echo " ";
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
        return array (  71 => 4,  62 => 21,  55 => 17,  48 => 13,  41 => 9,  35 => 5,  32 => 4,  29 => 3,);
    }
}
