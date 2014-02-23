<?php

namespace webStudent\EtudiantBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

class EtudiantController extends Controller
{
    public function indexAction()
    {
		//return new Response("Salut tout le monde; test") ;
        return $this->render('webStudentEtudiantBundle:Etudiant:index.html.twig');
        //return $this->render('tapa2stageEtudiantBundle:Default:index.html.twig', array('name' => $name));
    }
     public function consulter2Action()
    {
       		//return new Response("TT") ;
    	return $this->render('webStudentEtudiantBundle:Etudiant:consulter.html.twig');
    	//return $this->render('webStudentEtudiantBundle:Etudiant:index.html.twig');

    }
     public function modifier2Action($id)
    {
       		//return new Response("TT") ;
    	return $this->render('webStudentEtudiantBundle:Etudiant:modifier.html.twig', array('id' => $id));
    	//return $this->render('webStudentEtudiantBundle:Etudiant:index.html.twig');

    }
     public function TestAction($id)
    {
       		return new Response("Test de la mort",  $id) ;
    	//return $this->render('webStudentEtudiantBundle:Etudiant:modifier.html.twig', array('id' => $id));
    	//return $this->render('webStudentEtudiantBundle:Etudiant:index.html.twig');

    }
}
