<?php

namespace webStudent\EtudiantBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;


/**
 * Utilisateur
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="webStudent\EtudiantBundle\Entity\UtilisateurRepository")
 */

/**
* @ORM\Entity
* @ORM\InheritanceType("JOINED")
* @ORM\discriminatorColumn(name="discr", type="string")
* @ORM\discriminatorMap({"enseignant" = "Enseignant", "etudiant" = "Etudiant"}) 
*/


class Utilisateur
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
* @ORM\ManyToOne(targetEntity="webStudent\EtudiantBundle\Entity\Section", inversedBy="utilisateurs")
*  @ORM\JoinColumn(nullable=false)
*/
      private $section;


    

   

    /**
     * @var string
     *
     * @ORM\Column(name="nom", type="string", length=60)
     * @Assert\Length(
     *      min = "1",
     *      max = "60",
     *      minMessage = "Votre nom doit faire au moins {{ limit }} caractères",
     *      maxMessage = "Votre nom ne peut pas être plus long que {{ limit }} caractères"
     * )
     */
    private $nom;

    /**
     * @var string
     *
     * @ORM\Column(name="prenom", type="string", length=60)
     * @Assert\Length(
     *      min = "1",
     *      max = "60",
     *      minMessage = "Votre prenom doit faire au moins {{ limit }} caractères",
     *      maxMessage = "Votre prenom ne peut pas être plus long que {{ limit }} caractères"
     * )
     */
    private $prenom;

    /**
     * @var string
     *
     * @ORM\Column(name="adressemail", type="string", length=60)
     * @Assert\Email(
     *     message = "'{{ value }}' n'est pas un email valide.",
     *     checkMX = true
     * )
     */
    private $adressemail;

    /**
     * @var string
     *
     * @ORM\Column(name="telephone", type="string", length=60)
     * @Assert\Length(
     *      min = "4",
     *      max = "12",
     *      minMessage = "Votre numero de telephone doit faire au moins {{ limit }} caractères",
     *      maxMessage = "Votre numero de telephone ne peut pas être plus long que {{ limit }} caractères"
     * )
     */
    private $telephone;

     /**
     * @var string
     *
     * @ORM\Column(name="login", type="string", length=60)
     * @Assert\Length(
     *      min = "5",
     *      max = "60",
     *      minMessage = "Votre login doit faire au moins {{ limit }} caractères",
     *      maxMessage = "Votre login ne peut pas être plus long que {{ limit }} caractères"
     * )
     */
    private $login;

     /**
     * @var string
     *
     * @ORM\Column(name="mdp", type="string", length=60)
     * @Assert\Length(
     *      min = "5",
     *      max = "60",
     *      minMessage = "Votre mot de passe doit faire au moins {{ limit }} caractères",
     *      maxMessage = "Votre mot de passe ne peut pas être plus long que {{ limit }} caractères"
     * )
     */
    private $mdp;


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
     * Set nom
     *
     * @param string $nom
     * @return Utilisateur
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

    /**
     * Set prenom
     *
     * @param string $prenom
     * @return Utilisateur
     */
    public function setPrenom($prenom)
    {
        $this->prenom = $prenom;
    
        return $this;
    }

    /**
     * Get prenom
     *
     * @return string 
     */
    public function getPrenom()
    {
        return $this->prenom;
    }

    /**
     * Set adressemail
     *
     * @param string $adressemail
     * @return Utilisateur
     */
    public function setAdressemail($adressemail)
    {
        $this->adressemail = $adressemail;
    
        return $this;
    }

    /**
     * Get adressemail
     *
     * @return string 
     */
    public function getAdressemail()
    {
        return $this->adressemail;
    }

    /**
     * Set telephone
     *
     * @param string $telephone
     * @return Utilisateur
     */
    public function setTelephone($telephone)
    {
        $this->telephone = $telephone;
    
        return $this;
    }

    /**
     * Get telephone
     *
     * @return string 
     */
    public function getTelephone()
    {
        return $this->telephone;
    }

    /**
     * Set login
     *
     * @param string $telephone
     * @return Utilisateur
     */
    public function setLogin($login)
    {
        $this->login = $login;
    
        return $this;
    }

    /**
     * Get login
     *
     * @return string 
     */
    public function getLogin()
    {
        return $this->login;
    }
    /**
     * Set mdp
     *
     * @param string $mdp
     * @return Utilisateur
     */
    public function setMdp($mdp)
    {
        $this->mdp = $mdp;
    
        return $this;
    }

    /**
     * Get mdp
     *
     * @return string 
     */
    public function getMdp()
    {
        return $this->mdp;
    }

    /**
     * Set section
     *
     * @param \webStudent\EtudiantBundle\Entity\Section $section
     * @return Utilisateur
     */
    public function setSection(\webStudent\EtudiantBundle\Entity\Section $section)
    {
        $this->section = $section;
    
        return $this;
    }

    /**
     * Get section
     *
     * @return \webStudent\EtudiantBundle\Entity\Section 
     */
    public function getSection()
    {
        return $this->section;
    }
}