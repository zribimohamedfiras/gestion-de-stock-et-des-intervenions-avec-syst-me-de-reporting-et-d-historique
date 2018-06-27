<?php
/**
 * Created by PhpStorm.
 * User: firas
 * Date: 01/05/2017
 * Time: 11:24
 */

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\ORM\Mapping\ManyToOne;
use Doctrine\ORM\Mapping\JoinColumn;


/**
 * Bonvol
 *
 * @ORM\Table(name="bonvol")
 * @ORM\Entity
 */
class bonvol
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id_bonvol", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idBonvol;




    /**
     * @ORM\ManyToOne(targetEntity="utilisateur", inversedBy="bonvol")
     * @ORM\JoinColumn(name="demandeur_id", referencedColumnName="id")
     */
    private $demandeur;


    /**
     * @ORM\ManyToOne(targetEntity="intervention", inversedBy="bonvol")
     * @ORM\JoinColumn(name="intervention_id", referencedColumnName="id_intervention")
     */
    private $intervention;

    /**
     * @ORM\ManyToOne(targetEntity="vol", inversedBy="bonvol")
     * @ORM\JoinColumn(name="vol_id", referencedColumnName="idvol")
     */
    private $vol;

    /**
     * @return int
     */
    public function getIdBonvol()
    {
        return $this->idBonvol;
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

    /**
     * @return mixed
     */
    public function getVol()
    {
        return $this->vol;
    }

    /**
     * @param mixed $vol
     */
    public function setVol($vol)
    {
        $this->vol = $vol;
    }

}