<?php
/**
 * Created by PhpStorm.
 * User: firas
 * Date: 07/04/2017
 * Time: 16:54
 */

namespace AppBundle\Entity;



use Doctrine\ORM\Mapping as ORM;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;
use Symfony\Component\Validator\Constraints as Assert;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping\OneToMany;

/**
 * vehicule
 *
 * @ORM\Table(name="vehicule")
 * @ORM\Entity
 * @UniqueEntity(fields="numvehicule", message="Matricule Véhicule déja existe")
 */
class vehicule
{
    /**
     * @var integer
     *
     * @ORM\Column(name="idvehicule", type="integer",length=11)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $idvehicule;



    /**
     * @ORM\Column(type="string", length=255, unique=true)
     * @Assert\NotBlank()
     */
    private $numvehicule;

    /**
     * @ORM\Column(type="string", length=255)
     * @Assert\NotBlank()
     */
    private $UT;


    /**
     * @ORM\Column(type="string", length=255)
     * @Assert\NotBlank()
     */
    private $marque;




    /**
     * @ORM\Column(type="string", length=255)
     * @Assert\NotBlank()
     */
    private $genre;




    /**
     * @ORM\Column(type="string", length=255)
     * @Assert\NotBlank()
     */
    private $puissance;




    /**
     * @ORM\Column(type="string", length=255)
     * @Assert\NotBlank()
     */
    private $carburant;



    /**
     * @var string
     *
     * @ORM\Column(name="dateDepart", type="string", nullable=true)
     * @Assert\NotBlank()
     */
    private $dateEntre;



    /**
     * @ORM\Column(type="integer",length=11)
     * @Assert\NotBlank()
     */
    private $disponibilite;

    /**
     * @ORM\Column(type="string", length=255)
     * @Assert\NotBlank()
     */
    private $etat;

    /**
     * @ORM\Column(type="float")
     * @Assert\NotBlank()
     */
    private $indexkm;

    /**
     * @ORM\OneToMany(targetEntity="mission", mappedBy="vehicule")
     */
    private $mission;

    public function __construct()
    {
        $this->mission=new ArrayCollection();
    }

    /**
     * @return int
     */
    public function getIdvehicule()
    {
        return $this->idvehicule;
    }

    /**
     * @return mixed
     */
    public function getNumvehicule()
    {
        return $this->numvehicule;
    }

    /**
     * @param mixed $numvehicule
     */
    public function setNumvehicule($numvehicule)
    {
        $this->numvehicule = $numvehicule;
    }

    /**
     * @return mixed
     */
    public function getUT()
    {
        return $this->UT;
    }

    /**
     * @param mixed $UT
     */
    public function setUT($UT)
    {
        $this->UT = $UT;
    }

    /**
     * @return mixed
     */
    public function getMarque()
    {
        return $this->marque;
    }

    /**
     * @param mixed $marque
     */
    public function setMarque($marque)
    {
        $this->marque = $marque;
    }

    /**
     * @return mixed
     */
    public function getGenre()
    {
        return $this->genre;
    }

    /**
     * @param mixed $genre
     */
    public function setGenre($genre)
    {
        $this->genre = $genre;
    }

    /**
     * @return mixed
     */
    public function getPuissance()
    {
        return $this->puissance;
    }

    /**
     * @param mixed $puissance
     */
    public function setPuissance($puissance)
    {
        $this->puissance = $puissance;
    }

    /**
     * @return mixed
     */
    public function getCarburant()
    {
        return $this->carburant;
    }

    /**
     * @param mixed $carburant
     */
    public function setCarburant($carburant)
    {
        $this->carburant = $carburant;
    }

    /**
     * @return string
     */
    public function getDateEntre()
    {
        return $this->dateEntre;
    }

    /**
     * @param string $dateEntre
     */
    public function setDateEntre($dateEntre)
    {
        $this->dateEntre = $dateEntre;
    }

    /**
     * @return mixed
     */
    public function getDisponibilite()
    {
        return $this->disponibilite;
    }

    /**
     * @param mixed $disponibilite
     */
    public function setDisponibilite($disponibilite)
    {
        $this->disponibilite = $disponibilite;
    }

    /**
     * @return mixed
     */
    public function getEtat()
    {
        return $this->etat;
    }

    /**
     * @param mixed $etat
     */
    public function setEtat($etat)
    {
        $this->etat = $etat;
    }

    /**
     * @return mixed
     */
    public function getIndexkm()
    {
        return $this->indexkm;
    }

    /**
     * @param mixed $indexkm
     */
    public function setIndexkm($indexkm)
    {
        $this->indexkm = $indexkm;
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


}