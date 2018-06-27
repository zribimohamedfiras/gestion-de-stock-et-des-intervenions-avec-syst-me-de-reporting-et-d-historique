<?php
/**
 * Created by PhpStorm.
 * User: firas
 * Date: 07/04/2017
 * Time: 23:38
 */

namespace AppBundle\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;
use Symfony\Component\Validator\Constraints as Assert;
use Doctrine\ORM\Mapping\ManyToOne;
use Doctrine\ORM\Mapping\JoinColumn;

/**
 * mission
 *
 * @ORM\Table(name="mission")
 * @ORM\Entity
 * @UniqueEntity(fields="nummission", message="Numero Mission déja existe")
 *
 */
class mission
{
    /**
     * name="idmission",
     * @ORM\Column(type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $idmission;

    /**
     * @ORM\Column(type="integer", length=11, unique=true)
     * @Assert\NotBlank()
     */
    private $nummission;

    /**
     * @ORM\Column(type="string", length=255)
     *
     */
    private $cause;

    /**
     * @ORM\Column(type="string", length=255)
     *
     */
    private $lieudepart;

    /**
     * @ORM\Column(type="string", length=255)
     *
     */
    private $lieuarriver;

    /**
     * @ORM\Column(type="string", length=255)
     *
     */
    private $datedepart;

    /**
     * @ORM\Column(type="string", length=255)
     *
     */
    private $datearriver;

    /**
     * @ORM\Column(type="string", length=255)
     *
     */
    private $heuredepart;

    /**
     * @ORM\Column(type="string", length=255)
     *
     */
    private $heurearriver;

    /**
     * @ORM\Column(type="string", length=255)
     *
     */
    private $charge;


    /**
     * @ORM\ManyToOne(targetEntity="utilisateur", inversedBy="mission")
     * @ORM\JoinColumn(name="demandeur_id", referencedColumnName="id")
     */
    private $demandeur;


    /**
     * @ORM\ManyToOne(targetEntity="vehicule", inversedBy="mission")
     * @ORM\JoinColumn(name="vehicule_id", referencedColumnName="idvehicule")
     */
    private $vehicule;


    /**
     * @ORM\ManyToOne(targetEntity="intervention", inversedBy="mission")
     * @ORM\JoinColumn(name="intervention_id", referencedColumnName="id_intervention")
     */
    private $intervention;



    /**
     * @return mixed
     */
    public function getIdmission()
    {
        return $this->idmission;
    }

    /**
     * @return mixed
     */
    public function getNummission()
    {
        return $this->nummission;
    }

    /**
     * @param mixed $nummission
     */
    public function setNummission($nummission)
    {
        $this->nummission = $nummission;
    }

    /**
     * @return mixed
     */
    public function getCause()
    {
        return $this->cause;
    }

    /**
     * @param mixed $cause
     */
    public function setCause($cause)
    {
        $this->cause = $cause;
    }

    /**
     * @return mixed
     */
    public function getLieudepart()
    {
        return $this->lieudepart;
    }

    /**
     * @param mixed $lieudepart
     */
    public function setLieudepart($lieudepart)
    {
        $this->lieudepart = $lieudepart;
    }

    /**
     * @return mixed
     */
    public function getLieuarriver()
    {
        return $this->lieuarriver;
    }

    /**
     * @param mixed $lieuarriver
     */
    public function setLieuarriver($lieuarriver)
    {
        $this->lieuarriver = $lieuarriver;
    }

    /**
     * @return mixed
     */
    public function getDatedepart()
    {
        return $this->datedepart;
    }

    /**
     * @param mixed $datedepart
     */
    public function setDatedepart($datedepart)
    {
        $this->datedepart = $datedepart;
    }

    /**
     * @return mixed
     */
    public function getDatearriver()
    {
        return $this->datearriver;
    }

    /**
     * @param mixed $datearriver
     */
    public function setDatearriver($datearriver)
    {
        $this->datearriver = $datearriver;
    }

    /**
     * @return mixed
     */
    public function getHeuredepart()
    {
        return $this->heuredepart;
    }

    /**
     * @param mixed $heuredepart
     */
    public function setHeuredepart($heuredepart)
    {
        $this->heuredepart = $heuredepart;
    }

    /**
     * @return mixed
     */
    public function getHeurearriver()
    {
        return $this->heurearriver;
    }

    /**
     * @param mixed $heurearriver
     */
    public function setHeurearriver($heurearriver)
    {
        $this->heurearriver = $heurearriver;
    }

    /**
     * @return mixed
     */
    public function getCharge()
    {
        return $this->charge;
    }

    /**
     * @param mixed $charge
     */
    public function setCharge($charge)
    {
        $this->charge = $charge;
    }


    /**
     * @return mixed
     */
    public function getDemandeur()
    {
        return $this->demandeur;
    }

    /**
     * @param mixed $demandeur
     */
    public function setDemandeur($demandeur)
    {
        $this->demandeur = $demandeur;
    }

    /**
     * @return mixed
     */
    public function getVehicule()
    {
        return $this->vehicule;
    }

    /**
     * @param mixed $vehicule
     */
    public function setVehicule($vehicule)
    {
        $this->vehicule = $vehicule;
    }


    /**
     * @return mixed
     */
    public function getIntervention()
    {
        return $this->intervention;
    }

    /**
     * @param mixed $intervention
     */
    public function setIntervention($intervention)
    {
        $this->intervention = $intervention;
    }
















}