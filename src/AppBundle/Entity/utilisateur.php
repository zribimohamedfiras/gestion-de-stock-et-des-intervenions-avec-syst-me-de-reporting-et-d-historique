<?php
/**
 * Created by PhpStorm.
 * User: firas
 * Date: 13/03/2017
 * Time: 22:37
 */

namespace AppBundle\Entity;



use AppBundle\AppBundle;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;
use Symfony\Component\Security\Core\User\UserInterface;
use Doctrine\ORM\Mapping\OneToOne;
use Doctrine\ORM\Mapping\OneToMany;
use Doctrine\ORM\Mapping\ManyToMany;
use Doctrine\ORM\Mapping\JoinColumn;
use Doctrine\ORM\Mapping\JoinTable;
use Doctrine\Common\Collections\ArrayCollection;
use AppBundle\Controller\StegController;

/**
 * @ORM\Entity
 * @UniqueEntity(fields="email", message="Email already taken")
 * @UniqueEntity(fields="username", message="Username existe déja dans cette application")
 */

class utilisateur implements UserInterface, \Serializable
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255, unique=true)
     *
     * @Assert\Email()
     */
    private $email;

    /**
     * @ORM\Column(type="string", length=255, unique=true)
     *
     */
    private $username;

    /**
     * @Assert\NotBlank()
     * @Assert\Length(max=4096)
     */
    private $plainPassword;

    /**
     * The below length depends on the "algorithm" you use for encoding
     * the password, but this works well with bcrypt.
     *
     * @ORM\Column(type="string", length=64)
     */
    private $password;

    /**
     * @ORM\Column(type="string", length=64)
     * @Assert\NotBlank()
     */
    private $nom;

    /**
     * @ORM\Column(type="string", length=64)
     * @Assert\NotBlank()
     */
    private $prenom;

    /**
     * @ORM\Column(name="role",type="string")
     * @Assert\NotBlank()
     */
    private $role;

    /**
     * @ORM\Column(type="integer")
     *  @Assert\NotBlank()
     */
    private $ncin;

    /**
     * @ORM\Column(type="integer")
     * @Assert\NotBlank()
     */
    private $matricule;

    /**
     * @ORM\Column(type="string")
     * @Assert\NotBlank()
     */
    private $societe;

    /**
     * @ORM\Column(type="string")
     * @Assert\NotBlank()
     */
    private $nom_ar;

    /**
     * @ORM\Column(type="string")
     * @Assert\NotBlank()
     */
    private $prenom_ar;

    /**
     * @ORM\Column(type="string")
     * @Assert\NotBlank()
     */
    private $fonction_ar;

    /**
     * @ORM\Column(type="string")
     * @Assert\NotBlank()
     */
    private $categorie_ar;

    /**
     * @ORM\column(type="integer",nullable=false)
     *
     */
    private $isAstreint;

    /**
     * @ORM\OneToMany(targetEntity="Bon", mappedBy="utilisateur")
     */
    private $bon;

    /**
     * @ORM\OneToMany(targetEntity="historique", mappedBy="utilisateur")
     */
    private $historique;

    /**
     * @ORM\OneToMany(targetEntity="bonhotel", mappedBy="utilisateur")
     */
    private $bonhotel;

    /**
     * @ORM\OneToMany(targetEntity="mission", mappedBy="utilisateur")
     */
    private $mission;

    /**
     * @ORM\Column(type="string")
     * @Assert\NotBlank()
     */
    private $fonctionFr;


    /**
     * @ORM\Column(type="string")
     * @Assert\NotBlank()
     */
    private $direction;



    /**
     * @ORM\Column(type="string")
     * @Assert\NotBlank()
     */
    private $unite;


    /**
     * @ORM\OneToMany(targetEntity="profile_utilisateur", mappedBy="utilisateur")
     */
    private $profile_utilisateur;






    /**
     * @ORM\Column(name="is_active", type="boolean")
     */
    private $isActive;

    public function __construct()
    {
        $this->isActive = true;
        // may not be needed, see section on salt below
        // $this->salt = md5(uniqid(null, true));
        $this->bon = new ArrayCollection();
        $this->bonhotel= new ArrayCollection();
        $this->mission= new ArrayCollection();
        $this->historique= new ArrayCollection();
        $this->profile_utilisateur= new ArrayCollection();

    }

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    public function getUsername()
    {
        return $this->username;
    }

    /**
     * @param mixed $username
     */
    public function setUsername($username)
    {
        $this->username = $username;
    }

    public function getPassword()
    {
        return $this->password;
    }

    /**
     * @param mixed $password
     */
    public function setPassword($password)
    {
        $this->password = $password;
    }

    /**
     * @return mixed
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @param mixed $email
     */
    public function setEmail($email)
    {
        $this->email = $email;
    }

    /**
     * @return mixed
     */
    public function getNcin()
    {
        return $this->ncin;
    }

    /**
     * @param mixed $ncin
     */
    public function setNcin($ncin)
    {
        $this->ncin = $ncin;
    }

    /**
     * @return mixed
     */
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * @param mixed $nom
     */
    public function setNom($nom)
    {
        $this->nom = $nom;
    }

    /**
     * @return mixed
     */
    public function getPrenom()
    {
        return $this->prenom;
    }

    /**
     * @param mixed $prenom
     */
    public function setPrenom($prenom)
    {
        $this->prenom = $prenom;
    }

    /**
     * @return mixed
     */
    public function getMatricule()
    {
        return $this->matricule;
    }

    /**
     * @param mixed $matricule
     */
    public function setMatricule($matricule)
    {
        $this->matricule = $matricule;
    }

    /**
     * @return mixed
     */
    public function getSociete()
    {
        return $this->societe;
    }

    /**
     * @param mixed $societe
     */
    public function setSociete($societe)
    {
        $this->societe = $societe;
    }

    /**
     * @return mixed
     */
    public function getRole()
    {
        return $this->role;
    }

    /**
     * @param mixed $role
     */
    public function setRole($role)
    {
        $this->role = $role;
    }

    /**
     * @return mixed
     */
    public function getPlainPassword()
    {
        return $this->plainPassword;
    }

    /**
     * @param mixed $plainPassword
     */
    public function setPlainPassword($plainPassword)
    {
        $this->plainPassword = $plainPassword;
    }

    /**
     * @return mixed
     */
    public function getBon()
    {
        return $this->bon;
    }

    /**
     * @param mixed $bon
     */
    public function setBon($bon)
    {
        $this->bon = $bon;
    }

    /**
     * @return mixed
     */
    public function getNomAr()
    {
        return $this->nom_ar;
    }

    /**
     * @param mixed $nom_ar
     */
    public function setNomAr($nom_ar)
    {
        $this->nom_ar = $nom_ar;
    }

    /**
     * @return mixed
     */
    public function getPrenomAr()
    {
        return $this->prenom_ar;
    }

    /**
     * @param mixed $prenom_ar
     */
    public function setPrenomAr($prenom_ar)
    {
        $this->prenom_ar = $prenom_ar;
    }

    /**
     * @return mixed
     */
    public function getFonctionAr()
    {
        return $this->fonction_ar;
    }

    /**
     * @param mixed $fonction_ar
     */
    public function setFonctionAr($fonction_ar)
    {
        $this->fonction_ar = $fonction_ar;
    }

    /**
     * @return mixed
     */
    public function getCategorieAr()
    {
        return $this->categorie_ar;
    }

    /**
     * @param mixed $categorie_ar
     */
    public function setCategorieAr($categorie_ar)
    {
        $this->categorie_ar = $categorie_ar;
    }

    /**
     * @return mixed
     */
    public function getBonhotel()
    {
        return $this->bonhotel;
    }

    /**
     * @param mixed $bonhotel
     */
    public function setBonhotel($bonhotel)
    {
        $this->bonhotel = $bonhotel;
    }

    /**
     * @return mixed
     */
    public function getMission()
    {
        return $this->mission;
    }

    /**
     * @param mixed $mission
     */
    public function setMission($mission)
    {
        $this->mission = $mission;
    }


    /**
     * @return mixed
     */
    public function getDirection()
    {
        return $this->direction;
    }

    /**
     * @param mixed $direction
     */
    public function setDirection($direction)
    {
        $this->direction = $direction;
    }

    /**
     * @return mixed
     */
    public function getFonctionFr()
    {
        return $this->fonctionFr;
    }

    /**
     * @param mixed $fonctionFr
     */
    public function setFonctionFr($fonctionFr)
    {
        $this->fonctionFr = $fonctionFr;
    }

    /**
     * @return mixed
     */
    public function getUnite()
    {
        return $this->unite;
    }

    /**
     * @param mixed $unite
     */
    public function setUnite($unite)
    {
        $this->unite = $unite;
    }

    /**
     * @return mixed
     */
    public function getHistorique()
    {
        return $this->historique;
    }

    /**
     * @param mixed $historique
     */
    public function setHistorique($historique)
    {
        $this->historique = $historique;
    }

    /**
     * @return mixed
     */
    public function getIsAstreint()
    {
        return $this->isAstreint;
    }

    /**
     * @param mixed $isAstreint
     */
    public function setIsAstreint($isAstreint)
    {
        $this->isAstreint = $isAstreint;
    }


    /**
     * @return mixed
     */
    public function getProfileUtilisateur()
    {
        return $this->profile_utilisateur;
    }

    /**
     * @param mixed $profile_utilisateur
     */
    public function setProfileUtilisateur($profile_utilisateur)
    {
        $this->profile_utilisateur = $profile_utilisateur;
    }




    public function getSalt()
    {
        // The bcrypt algorithm doesn't require a separate salt.
        // You *may* need a real salt if you choose a different encoder.
        return null;
    }

    public function getRoles()
    {
        return array('ROLE_USER');
    }

    public function serialize()
    {
        return serialize(array(
            $this->id,
            $this->username,
            $this->password,
            // see section on salt below
            // $this->salt,
        ));
    }

    public function unserialize($serialized)
    {
        list (
            $this->id,
            $this->username,
            $this->password,
            // see section on salt below
            // $this->salt
            ) = unserialize($serialized);
    }

    public function eraseCredentials()
    {
        // TODO: Implement eraseCredentials() method.
    }


}