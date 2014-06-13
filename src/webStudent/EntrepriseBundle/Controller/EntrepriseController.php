<?php

namespace webStudent\EntrepriseBundle\Controller;

use webStudent\EntrepriseBundle\Form\EntrepriseType;
use webStudent\EntrepriseBundle\Form\EntrepriseModifType;
use webStudent\EntrepriseBundle\Entity\Entreprise;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Security\Core\SecurityContext;
use JMS\SecurityExtraBundle\Annotation\Secure;

class EntrepriseController extends Controller
{

      //Entreprise
  public function listeEntrepriseAction()
    {

            if (!$this->get('security.context')->isGranted('ROLE_USER')) {
        // Sinon on déclenche une exception « Accès interdit »
        return $this->render('webStudentEtudiantBundle:Etudiant:login.html.twig');
        //throw new AccessDeniedHttpException('Accès limité aux enseignants');
      }
          $repository=$this->getDoctrine()
                           ->getManager()
                           ->getRepository('webStudentEntrepriseBundle:Entreprise');
          $listeStage=$repository->findAll();
          foreach ($listeStage as $stage) {
              $stage->getId()
              ;
          }
          //var_dump($listeEtudiant) ;
          return $this->render('webStudentEntrepriseBundle:Entreprise:consulterListeEntreprise.html.twig', array('listeEntreprise' => $listeStage));
    }
  public function consulterEntrepriseAction($id)
    {

            if (!$this->get('security.context')->isGranted('ROLE_USER')) {
        // Sinon on déclenche une exception « Accès interdit »
        return $this->render('webStudentEtudiantBundle:Etudiant:login.html.twig');
        //throw new AccessDeniedHttpException('Accès limité aux enseignants');
      }
      $repository = $this->getDoctrine()
                  ->getManager()
                  ->getRepository('webStudentEntrepriseBundle:Entreprise');
      // On récupère l'entité correspondant à l'id $id
      $entreprise = $repository->find($id);
      // Ou null si aucune section n'a été trouvé avec l'id $id
       if($entreprise === null)
          {
       throw $this->createNotFoundException('Entreprise[id='.$id.'] inexistant.');
      }
      return $this->render('webStudentEntrepriseBundle:Entreprise:consultEntreprise.html.twig', array('entreprise' =>$entreprise

      ));
    }
  public function ajouterEntrepriseAction()
    {

            if (!$this->get('security.context')->isGranted('ROLE_USER')) {
        // Sinon on déclenche une exception « Accès interdit »
        return $this->render('webStudentEtudiantBundle:Etudiant:login.html.twig');
        //throw new AccessDeniedHttpException('Accès limité aux enseignants');
      }

      // On teste que l'utilisateur dispose bien du rôle ROLE_ENSEIGNANT


      //var_dump($section);
        $entreprise = new Entreprise();
        $form = $this->createForm(new EntrepriseType, $entreprise);

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
            $em->persist($entreprise);
            $em->flush();

            // On redirige vers la page de visualisation de l'etudiant nouvellement créé
          return $this->render('webStudentEntrepriseBundle:Entreprise:consultEntreprise.html.twig', array('entreprise' =>$entreprise));
          }
        }
        // À ce stade :
        // - Soit la requête est de type GET, donc le visiteur vient d'arriver sur la page et veut voir le formulaire
        // - Soit la requête est de type POST, mais le formulaire n'est pas valide, donc on l'affiche de nouveau
        return $this->render('webStudentEntrepriseBundle:Entreprise:ajouterEntreprise.html.twig', array(
        'form' => $form->createView(),
        ));

    }
  public function modifierEntrepriseAction($id)
    {


            if (!$this->get('security.context')->isGranted('ROLE_USER')) {
        // Sinon on déclenche une exception « Accès interdit »
        return $this->render('webStudentEtudiantBundle:Etudiant:login.html.twig');
        //throw new AccessDeniedHttpException('Accès limité aux enseignants');
      }

          $repository = $this->getDoctrine()->getManager()->getRepository('webStudentEntrepriseBundle:Entreprise');
          $entreprise = $repository->find($id);
          $form = $this->createForm(new EntrepriseModifType, $entreprise);

          // On récupère la requête
          $request = $this->get('request');

          // On vérifie qu'elle est de type POST
          if ($request->getMethod() == 'POST') {
              // On fait le lien Requête <-> Formulaire
              // À partir de maintenant, la variable $organisation contient les valeurs entrées dans le formulaire par le visiteur
              $form->bind($request);

              // On vérifie que les valeurs entrées sont correctes
              if ($form->isValid()) {
                  // On l'enregistre notre objet $organisation dans la base de données
                  $em = $this->getDoctrine()->getManager();
                  $em->persist($entreprise);
                  $em->flush();

                  // On redirige vers la page de visualisation de l'organisation modifié
              return $this->render('webStudentEntrepriseBundle:Entreprise:consultEntreprise.html.twig', array('entreprise' => $entreprise));
              }
          }
          // À ce stade :
          // - Soit la requête est de type GET, donc le visiteur vient d'arriver sur la page et veut voir le formulaire
          // - Soit la requête est de type POST, mais le formulaire n'est pas valide, donc on l'affiche de nouveau
          return $this->render('webStudentEntrepriseBundle:Entreprise:modifierEntreprise.html.twig', array(
          'form' => $form->createView(),
          ));
    }
  

}
