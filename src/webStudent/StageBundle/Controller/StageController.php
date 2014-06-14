<?php

namespace webStudent\StageBundle\Controller;

use webStudent\StageBundle\Form\StageType;
use webStudent\StageBundle\Form\StageModifType;
use webStudent\StageBundle\Entity\Stage;
use webStudent\UserBundle\Entity\User;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Security\Core\SecurityContext;
use JMS\SecurityExtraBundle\Annotation\Secure;

class StageController extends Controller
{



      //Stage
  public function consulterStageAction($id)
    {
        if (!$this->get('security.context')->isGranted('ROLE_USER')) {
        // Sinon on déclenche une exception « Accès interdit »
        return $this->render('webStudentEtudiantBundle:Etudiant:login.html.twig');
        //throw new AccessDeniedHttpException('Accès limité aux enseignants');
      }
      $repository = $this->getDoctrine()
                  ->getManager()
                  ->getRepository('webStudentStageBundle:Stage');
      // On récupère l'entité correspondant à l'id $id
      $stage = $repository->find($id);
      // Ou null si aucune section n'a été trouvé avec l'id $id
       if($stage === null)
          {
       throw $this->createNotFoundException('Stage[id='.$id.'] inexistant.');
      }
      return $this->render('webStudentStageBundle:Stage:consultStage.html.twig', array('stage' =>$stage

      ));
    }
  public function listeStageAction()
    {
        if (!$this->get('security.context')->isGranted('ROLE_USER')) {
        // Sinon on déclenche une exception « Accès interdit »
        return $this->render('webStudentEtudiantBundle:Etudiant:login.html.twig');
        //throw new AccessDeniedHttpException('Accès limité aux enseignants');
      }
          $repository=$this->getDoctrine()->getManager()->getRepository('webStudentStageBundle:Stage');
          $listeStage=$repository->findAll();
          foreach ($listeStage as $stage) {
              $stage->getIntitule()
              ;
          }
          //var_dump($listeEtudiant) ;
          return $this->render('webStudentStageBundle:Stage:consulterListeStage.html.twig', array('listeStage' => $listeStage));
    }
  public function ajouterStageAction()
    {
        if (!$this->get('security.context')->isGranted('ROLE_USER')) {
        // Sinon on déclenche une exception « Accès interdit »
        return $this->render('webStudentEtudiantBundle:Etudiant:login.html.twig');
        //throw new AccessDeniedHttpException('Accès limité aux enseignants');
      }
      // On teste que l'utilisateur dispose bien du rôle ROLE_ENSEIGNANT


      //var_dump($section);
        $stage = new Stage ();
        $form = $this->createForm(new StageType, $stage);

        // On récupère la requête
        $request = $this->get('request');

        // On vérifie qu'elle est de type POST
        if ($request->getMethod() == 'POST') {
          // On fait le lien Requête <-> Formulaire
          // À partir de maintenant, la variable $etudiant contient les valeurs entrées dans le formulaire par le visiteur
          $form->bind($request);

          // On vérifie que les valeurs entrées sont correctes
          if ($form->isValid()) {
            // On l'enregistre notre objet $etudiant dans la base de données
            $em = $this->getDoctrine()->getManager();
            $em->persist($stage);
            $em->flush();

            // On redirige vers la page de visualisation de l'etudiant nouvellement créé
          return $this->render('webStudentStageBundle:Stage:consultStage.html.twig', array('stage' =>$stage));
          }
        }
        // À ce stade :
        // - Soit la requête est de type GET, donc le visiteur vient d'arriver sur la page et veut voir le formulaire
        // - Soit la requête est de type POST, mais le formulaire n'est pas valide, donc on l'affiche de nouveau
        return $this->render('webStudentStageBundle:Stage:ajouterStage.html.twig', array(
        'form' => $form->createView(),
        ));

    }
  public function modifierStageAction($id)
    {

            if (!$this->get('security.context')->isGranted('ROLE_USER')) {
        // Sinon on déclenche une exception « Accès interdit »
        return $this->render('webStudentEtudiantBundle:Etudiant:login.html.twig');
        //throw new AccessDeniedHttpException('Accès limité aux enseignants');
      }

          $repository = $this->getDoctrine()->getManager()->getRepository('webStudentStageBundle:Stage');
          $stage = $repository->find($id);
          $form = $this->createForm(new StageModifType, $stage);

          // On récupère la requête
          $request = $this->get('request');

          // On vérifie qu'elle est de type POST
          if ($request->getMethod() == 'POST') {
              // On fait le lien Requête <-> Formulaire
              $form->bind($request);

              // On vérifie que les valeurs entrées sont correctes
              if ($form->isValid()) {
                  // On l'enregistre notre objet $organisation dans la base de données
                  $em = $this->getDoctrine()->getManager();
                  $em->persist($stage);
                  $em->flush();

                  // On redirige vers la page de visualisation de l'organisation modifié
              return $this->render('webStudentStageBundle:Stage:consultStage.html.twig', array('stage' => $stage));
              }
          }
          // À ce stade :
          // - Soit la requête est de type GET, donc le visiteur vient d'arriver sur la page et veut voir le formulaire
          // - Soit la requête est de type POST, mais le formulaire n'est pas valide, donc on l'affiche de nouveau
          return $this->render('webStudentStageBundle:Stage:modifierStage.html.twig', array(
          'form' => $form->createView(),
          ));
    }

}
