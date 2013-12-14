<?php

namespace webStudent\EtudiantBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use webStudent\EtudiantBundle\Entity\Etudiant;
use webStudent\EtudiantBundle\Entity\Section;

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
     public function TestAction()
    {
       		return new Response("Test") ;
    	//return $this->render('webStudentEtudiantBundle:Etudiant:modifier.html.twig', array('id' => $id));
    	//return $this->render('webStudentEtudiantBundle:Etudiant:index.html.twig');

    }

public function ajouterAction()

    {

    $repository = $this->getDoctrine()->getManager()->getRepository('webStudentEtudiantBundle:Section');
    // On récupère l'entité correspondant à l'id $id
     $section = $repository->findOneByid(5);
     // Ou null si aucune section n'a été trouvé avec l'id $id
    if($section === null){
    throw $this->createNotFoundException('Section[code='.$code.'] inexistant.');
    
}

       
       var_dump($section);// Etape 0 – creation de l'objet Etudiant

        $etudiant = new Etudiant();
 
        $etudiant->setSection($section);

        $etudiant->setCode("test");
        
        $etudiant->setNom('Bures');

        $etudiant->setPrenom('Maxence');

        $etudiant->setTelephone('0233350678');

        $etudiant->setAdressemail('test@gmail.com');

        $etudiant->setDate('2');




    // Etape 1 On récupère l'EntityManager

     $em = $this->getDoctrine()->getManager();

 

    // Étape 2 : On « persiste » l'entité
      $em->persist($section);

        $em->persist($etudiant);

   

     // Étape 3 : On « flush » tout ce qui a été persisté avant

     $em->flush();

   

    return $this->render('webStudentEtudiantBundle:Etudiant:consulter.html.twig');

  } 

  public function ajouterSectionAction()
{
// Etape 0 – creation de l'objet Section
$section = new Section();
$section->setCode('Sio');
$section->setNom('BTS Sio');
$section->setNb(32);
// Etape 1 On récupère l'EntityManager
$em = $this->getDoctrine()->getManager();
// Étape 2 : On « persiste » l'entité
$em->persist($section);
// Étape 3 : On « flush » tout ce qui a été persisté avant
$em->flush();
return $this->render('webStudentEtudiantBundle:Etudiant:index.html.twig');
}

}
