<?php
/**
 * Created by PhpStorm.
 * User: firas
 * Date: 31/03/2017
 * Time: 14:08
 */

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\ORM\Mapping\ManyToOne;
use Doctrine\ORM\Mapping\JoinColumn;


/**
 * Bonhotel
 *
 * @ORM\Table(name="bonhotel")
 * @ORM\Entity
 */
class bonhotel
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id_bonhotel", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idBonhotel;

    /**
     * @ORM\Column(type="string", length=20)
     *
     */
    private $date_entree;

    /**
     * @ORM\Column(type="string", length=20)
     *
     */
    private $date_sortie;

    /**
     * @ORM\Column(type="string", length=255)
     *
     */
    private $objetdeplacement;

    /**
     * @ORM\ManyToOne(targetEntity="utilisateur", inversedBy="bonhotel")
     * @ORM\JoinColumn(name="demandeur_id", referencedColumnName="id")
     */
    private $demandeur;

    /**
     * @ORM\ManyToOne(targetEntity="intervention", inversedBy="bonhotel")
     * @ORM\JoinColumn(name="intervention_id", referencedColumnName="id_intervention")
     */
    private $intervention;

    /**
     * @ORM\ManyToOne(targetEntity="hotel", inversedBy="bonhotel")
     * @ORM\JoinColumn(name="hotel_id", referencedColumnName="idhotel")
     */
    private $hotel;

    /**
     * @return int
     */
    public function getIdBonhotel()
    {
        return $this->idBonhotel;
    }

    /**
     * @return mixed
     */
    public function getDateEntree()
    {
        return $this->date_entree;
    }

    /**
     * @param mixed $date_entree
     */
    public function setDateEntree($date_entree)
    {
        $this->date_entree = $date_entree;
    }

    /**
     * @return mixed
     */
    public function getDateSortie()
    {
        return $this->date_sortie;
    }

    /**
     * @param mixed $date_sortie
     */
    public function setDateSortie($date_sortie)
    {
        $this->date_sortie = $date_sortie;
    }

    /**
     * @return mixed
     */
    public function getObjetdeplacement()
    {
        return $this->objetdeplacement;
    }

    /**
     * @param mixed $objetdeplacement
     */
    public function setObjetdeplacement($objetdeplacement)
    {
        $this->objetdeplacement = $objetdeplacement;
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
    public function getHotel()
    {
        return $this->hotel;
    }

    /**
     * @param mixed $hotel
     */
    public function setHotel($hotel)
    {
        $this->hotel = $hotel;
    }
















}