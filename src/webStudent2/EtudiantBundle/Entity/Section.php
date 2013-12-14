<?php

namespace webStudent\EtudiantBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Section
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="webStudent\EtudiantBundle\Entity\SectionRepository")
 */
class Section
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="code", type="string", length=8)
     */
    private $code;

    /**
     * @var string
     *
     * @ORM\Column(name="nom", type="string", length=80)
     */
    private $nom;


    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set code
     *
     * @param string $code
     * @return Section
     */
    public function setCode($code)
    {
        $this->code = $code;
    
        return $this;
    }

    /**
     * Get code
     *
     * @return string 
     */
    public function getCode()
    {
        return $this->code;
    }

    /**
     * Set nom
     *
     * @param string $nom
     * @return Section
     */
    public function setNom($nom)
    {
        $this->nom = $nom;
    
        return $this;
    }

    /**
     * Get nom
     *
     * @return string 
     */
    public function getNom()
    {
        return $this->nom;
    }
    public function ajouterSectionAction()
{
       // Etape 0 – creation de l'objet Section
       $section = new Section();
       $section->setCode('CGO');
       $section->setNom('BTS Comptabilité');
       $section->setNbEtudiant(64);
       // Etape 1 On récupère l'EntityManager
        $em = $this->getDoctrine()->getManager();
       // Étape 2 : On « persiste » l'entité
       $em->persist($section);
        // Étape 3 : On « flush » tout ce qui a été persisté avant
        $em->flush();
       return $this->render('webStageEtudiantBundle:Etudiant:index.html.twig');
  }
  public function consulterSectionAction($id)
{
    $repository = $this->getDoctrine()
                ->getManager()
                ->getRepository('webStageEtudiantBundle:Section');
    // On récupère l'entité correspondant à l'id $id
    $section = $repository->find($id);
    // Ou null si aucune section n'a été trouvé avec l'id $id
     if($section === null)
        {
     throw $this->createNotFoundException('Section[id='.$id.'] inexistant.');
    }
    return $this->render('webStageEtudiantBundle:Etudiant:index.html.twig', array(
            'id' => $section->getNom()
    ));
}
}