<?php
/**
 * Created by PhpStorm.
 * User: firas
 * Date: 28/03/2017
 * Time: 18:05
 */

namespace AppBundle\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * intervention
 *
 * @ORM\Table(name="intervention")
 * @ORM\Entity
 *
 */
class intervention
{
    /**
     * name="id_intervention",
     * @ORM\Column(type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id_intervention;


    /**
     * @ORM\Column(type="string", length=20)
     *
     */
    private $date_debut;

    /**
     * @ORM\Column(type="string", length=20)
     *
     */
    private $date_fin;

    /**
     * @ORM\Column(type="string", length=20)
     *
     */
    private $heure_debut;

    /**
     * @ORM\Column(type="string", length=20)
     *
     */
    private $heure_fin;



    /**
     *
     * @ORM\Column(type="integer")
     */
    private $approbation;

    /**
     * @ORM\Column(type="string", length=200)
     *
     */
    private $type;

    /**
     * @ORM\Column(type="string", length=255)
     *
     */
    private $description;

    /**
     * @ORM\Column(type="string", length=20,nullable=true)
     */
    private $date_signature;

    /**
     * @ORM\Column(type="string", length=200,nullable=true)
     */
    private $lieu_signature;

    /**
     * @ORM\OneToMany(targetEntity="bonhotel", mappedBy="intervention")
     */
    private $bonhotel;

    /**
     * @ORM\OneToMany(targetEntity="mission", mappedBy="utilisateur")
     */
    private $mission;

    /**
     * @ORM\OneToMany(targetEntity="interventionDiffusion", mappedBy="intervention")
     */
    private $interventionDiffusion;

    public function __construct()
    {
        $this->bonhotel = new ArrayCollection();
        $this->interventionDiffusion = new ArrayCollection();
        $this->mission= new ArrayCollection();
    }

    /**
     * @return mixed
     */
    public function getIdIntervention()
    {
        return $this->id_intervention;
    }

    /**
     * @return mixed
     */
    public function getDateDebut()
    {
        return $this->date_debut;
    }

    /**
     * @param mixed $date_debut
     */
    public function setDateDebut($date_debut)
    {
        $this->date_debut = $date_debut;
    }

    /**
     * @return mixed
     */
    public function getDateFin()
    {
        return $this->date_fin;
    }

    /**
     * @param mixed $date_fin
     */
    public function setDateFin($date_fin)
    {
        $this->date_fin = $date_fin;
    }

    /**
     * @return mixed
     */
    public function getHeureDebut()
    {
        return $this->heure_debut;
    }

    /**
     * @param mixed $heure_debut
     */
    public function setHeureDebut($heure_debut)
    {
        $this->heure_debut = $heure_debut;
    }

    /**
     * @return mixed
     */
    public function getHeureFin()
    {
        return $this->heure_fin;
    }

    /**
     * @param mixed $heure_fin
     */
    public function setHeureFin($heure_fin)
    {
        $this->heure_fin = $heure_fin;
    }


    /**
     * @return mixed
     */
    public function getApprobation()
    {
        return $this->approbation;
    }

    /**
     * @param mixed $approbation
     */
    public function setApprobation($approbation)
    {
        $this->approbation = $approbation;
    }

    /**
     * @return mixed
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @param mixed $description
     */
    public function setDescription($description)
    {
        $this->description = $description;
    }


    /**
     * @return mixed
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * @param mixed $type
     */
    public function setType($type)
    {
        $this->type = $type;
    }

    /**
     * @return mixed
     */
    public function getDateSignature()
    {
        return $this->date_signature;
    }

    /**
     * @param mixed $lieu_signature
     */
    public function setLieuSignature($lieu_signature)
    {
        $this->lieu_signature = $lieu_signature;
    }

    /**
     * @return mixed
     */
    public function getLieuSignature()
    {
        return $this->lieu_signature;
    }

    /**
     * @param mixed $date_signature
     */
    public function setDateSignature($date_signature)
    {
        $this->date_signature = $date_signature;
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
    public function getInterventionDiffusion()
    {
        return $this->interventionDiffusion;
    }

    /**
     * @param mixed $interventionDiffusion
     */
    public function setInterventionDiffusion($interventionDiffusion)
    {
        $this->interventionDiffusion = $interventionDiffusion;
    }

}