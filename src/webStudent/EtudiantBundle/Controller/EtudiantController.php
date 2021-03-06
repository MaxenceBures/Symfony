<?php

namespace webStudent\EtudiantBundle\Controller;

use webStudent\EtudiantBundle\Form\EtudiantType;
use webStudent\EtudiantBundle\Form\EtudiantModifType;
use webStudent\UserBundle\Form\UserType;
use webStudent\UserBundle\Form\UserModifType;
use webStudent\EtudiantBundle\Entity\Etudiant;
use webStudent\EtudiantBundle\Entity\Enseignant;
use webStudent\EtudiantBundle\Entity\Section;
use webStudent\EtudiantBundle\Entity\Utilisateur;
use webStudent\UserBundle\Entity\User;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Security\Core\SecurityContext;
use JMS\SecurityExtraBundle\Annotation\Secure;

class EtudiantController extends Controller
{
  public function indexAction()
    {
      //return new Response("Salut tout le monde; test") ;
          return $this->render('webStudentEtudiantBundle:Etudiant:index.html.twig');

    }
  public function accueilAction()
    {
      // On teste que l'utilisateur dispose bien du rôle ROLE_ENSEIGNANT
      if (!$this->get('security.context')->isGranted('ROLE_USER')) {
        // Sinon on déclenche une exception « Accès interdit »
        return $this->render('webStudentEtudiantBundle:Etudiant:login.html.twig');
        //throw new AccessDeniedHttpException('Accès limité aux enseignants');
      }
          //return new Response("Salut tout le monde; test") ;
          return $this->render('webStudentEtudiantBundle:Etudiant:accueil.html.twig');

    }
  public function layoutAction()
    {
              //return new Response("TT") ;
          return $this->render('webStudentEtudiantBundle:Etudiant:layout.html.twig');


    }




      //Etudiant
  public function ajouterEtudiantAction()
    {


            if (!$this->get('security.context')->isGranted('ROLE_USER')) {
        // Sinon on déclenche une exception « Accès interdit »
        return $this->render('webStudentEtudiantBundle:Etudiant:login.html.twig');
        //throw new AccessDeniedHttpException('Accès limité aux enseignants');
      }
      //var_dump($section);
        $etudiant = new Etudiant();
        $form = $this->createForm(new EtudiantType, $etudiant);

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
            $em->persist($etudiant);
            $em->flush();

            // On redirige vers la page de visualisation de l'etudiant nouvellement créé
          return $this->render('webStudentEtudiantBundle:Etudiant:consultEUtil.html.twig', array('etudiant' =>$etudiant));
          }
        }
        // À ce stade :
        // - Soit la requête est de type GET, donc le visiteur vient d'arriver sur la page et veut voir le formulaire
        // - Soit la requête est de type POST, mais le formulaire n'est pas valide, donc on l'affiche de nouveau
        return $this->render('webStudentEtudiantBundle:Etudiant:ajouterEtudiant.html.twig', array(
        'form' => $form->createView(),
        ));

    }
  public function modifierEtudiantAction($id)
    {

            if (!$this->get('security.context')->isGranted('ROLE_USER')) {
        // Sinon on déclenche une exception « Accès interdit »
        return $this->render('webStudentEtudiantBundle:Etudiant:login.html.twig');
        //throw new AccessDeniedHttpException('Accès limité aux enseignants');
      }
        $repository = $this->getDoctrine()->getManager()->getRepository('webStudentEtudiantBundle:Etudiant');
        $etudiant = $repository->find($id);
        $form = $this->createForm(new EtudiantModifType, $etudiant);

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
                $em->persist($etudiant);
                $em->flush();

                  // On redirige vers la page de visualisation de l'organisation modifié
            return $this->render('webStudentEtudiantBundle:Etudiant:consultEUtil.html.twig', array('etudiant' => $etudiant));
            }
        }
          // À ce stade :
          // - Soit la requête est de type GET, donc le visiteur vient d'arriver sur la page et veut voir le formulaire
          // - Soit la requête est de type POST, mais le formulaire n'est pas valide, donc on l'affiche de nouveau
        return $this->render('webStudentEtudiantBundle:Etudiant:modifierEtudiant.html.twig', array(
        'form' => $form->createView(),
        ));
    }
  public function listeEtudiantAction()
    {

            if (!$this->get('security.context')->isGranted('ROLE_USER')) {
        // Sinon on déclenche une exception « Accès interdit »
        return $this->render('webStudentEtudiantBundle:Etudiant:login.html.twig');
        //throw new AccessDeniedHttpException('Accès limité aux enseignants');
      }
          $repository=$this->getDoctrine()->getManager()->getRepository('webStudentEtudiantBundle:Etudiant');
          $listeEtudiant=$repository->findAll();
          foreach ($listeEtudiant as $etudiant) {
              $etudiant->getNom();
              // $etudiant->getId();
          }
          //var_dump($listeEtudiant) ;
          return $this->render('webStudentEtudiantBundle:Etudiant:consulterListeEtudiant.html.twig', array('listeEtudiant' => $listeEtudiant));
    }
  public function consulterEtudiantAction($id)
    {

            if (!$this->get('security.context')->isGranted('ROLE_USER')) {
        // Sinon on déclenche une exception « Accès interdit »
        return $this->render('webStudentEtudiantBundle:Etudiant:login.html.twig');
        //throw new AccessDeniedHttpException('Accès limité aux enseignants');
      }
          $repository = $this->getDoctrine()
                         ->getManager()
                         ->getRepository('webStudentEtudiantBundle:Utilisateur');

          // On récupère l'entité correspondant à l'id $id
          $etudiant = $repository->find($id);

          // Ou null si aucune section n'a été trouvé avec l'id $id
           if($etudiant === null)
           {
           throw $this->createNotFoundException('Etudiant[id='.$id.'] inexistant.');
          }

          return $this->render('webStudentEtudiantBundle:Etudiant:consultEUtil.html.twig', array('etudiant' =>$etudiant




              ));
    }
    public function loginAction()
  {

    // Si le visiteur est déjà identifié, on le redirige vers l'accueil
    if ($this->get('security.context')->isGranted('IS_AUTHENTICATED_REMEMBERED')) {
      //return $this->redirect($this->generateUrl('accueilAction'));
    }

    $request = $this->getRequest();
    $session = $request->getSession();

    // On vérifie s'il y a des erreurs d'une précédente soumission du formulaire
    if ($request->attributes->has(SecurityContext::AUTHENTICATION_ERROR)) {
      $error = $request->attributes->get(SecurityContext::AUTHENTICATION_ERROR);
    } else {
      $error = $session->get(SecurityContext::AUTHENTICATION_ERROR);
      $session->remove(SecurityContext::AUTHENTICATION_ERROR);
    }

    return $this->render('webStudentEtudiantBundle:Etudiant:login.html.twig', array(
      // Valeur du précédent nom d'utilisateur entré par l'internaute
      'last_username' => $session->get(SecurityContext::LAST_USERNAME),
      'error'         => $error,
    ));
  }

  public function consulterCompteAction ($id)
      {
           if (!$this->get('security.context')->isGranted('ROLE_USER')) {
        // Sinon on déclenche une exception « Accès interdit »
        return $this->render('webStudentEtudiantBundle:Etudiant:login.html.twig');
        //throw new AccessDeniedHttpException('Accès limité aux enseignants');
      }

          $repository = $this->getDoctrine()->getManager()->getRepository('webStudentEtudiantBundle:Utilisateur');
          $compte = $repository->find($id);
      if($compte === null)
      {
        throw $this->createNotFoundException('Compte [id='.$id.'] inexistant.');
      }
          return $this->render('webStudentEtudiantBundle:Etudiant:consulterCompte.html.twig', array('compte' => $compte));
      }
  public function modifierCompteAction($id)
    {

            if (!$this->get('security.context')->isGranted('ROLE_USER')) {
        // Sinon on déclenche une exception « Accès interdit »
        return $this->render('webStudentEtudiantBundle:Etudiant:login.html.twig');
        //throw new AccessDeniedHttpException('Accès limité aux enseignants');
      }
        $repository = $this->getDoctrine()->getManager()->getRepository('webStudentUserBundle:User');
        $compte = $repository->find($id);
        $form = $this->createForm(new UserModifType, $compte);

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
                $em->persist($compte);
                $em->flush();

                  // On redirige vers la page de visualisation de l'organisation modifié
            return $this->render('webStudentEtudiantBundle:Etudiant:consulterCompte.html.twig', array('compte' => $compte));
            }
        }
          // À ce stade :
          // - Soit la requête est de type GET, donc le visiteur vient d'arriver sur la page et veut voir le formulaire
          // - Soit la requête est de type POST, mais le formulaire n'est pas valide, donc on l'affiche de nouveau
        return $this->render('webStudentEtudiantBundle:Etudiant:modifierCompte.html.twig', array(
        'form' => $form->createView(),
        ));
    }
}
