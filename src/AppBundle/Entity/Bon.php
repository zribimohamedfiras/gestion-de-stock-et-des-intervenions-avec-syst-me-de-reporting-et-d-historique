<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\ORM\Mapping\ManyToOne;
use Doctrine\ORM\Mapping\JoinColumn;
/**
 * Bon
 *
 * @ORM\Table(name="bon")
 * @ORM\Entity
 */
class Bon
{
    /**
     * @var string
     *
     * @ORM\Column(name="type_bon", type="string", length=30, nullable=false)
     */
    private $typeBon;

    /**
     * @var string
     *
     * @ORM\Column(name="date_bon", type="string", nullable=true)
     */
    private $dateBon;

    /**
     * @var string
     *
     * @ORM\Column(name="date_signataire", type="string", nullable=true)
     */
    private $dateSignataire;

    /**
     * @var integer
     *
     * @ORM\Column(name="id_bon", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idBon;

    /**
     * @ORM\ManyToOne(targetEntity="utilisateur", inversedBy="bon")
     * @ORM\JoinColumn(name="demandeur_id", referencedColumnName="id")
     */
    private $demandeur;

    /**
     * @ORM\ManyToOne(targetEntity="utilisateur", inversedBy="bon")
     * @ORM\JoinColumn(name="magasinier_id", referencedColumnName="id")
     */
    private $magasinier;

    /**
     * @ORM\ManyToOne(targetEntity="utilisateur", inversedBy="bon")
     * @ORM\JoinColumn(name="approbateur_id", referencedColumnName="id")
     */
    private $approbateur;



    /**
     * Set typeBon
     *
     * @param string $typeBon
     *
     * @return Bon
     */
    public function setTypeBon($typeBon)
    {
        $this->typeBon = $typeBon;

        return $this;
    }

    /**
     * Get typeBon
     *
     * @return string
     */
    public function getTypeBon()
    {
        return $this->typeBon;
    }

    /**
     * Set dateBon
     *
     * @param string $dateBon
     *
     * @return Bon
     */
    public function setDateBon($dateBon)
    {
        $this->dateBon = $dateBon;

        return $this;
    }

    /**
     * Get dateBon
     *
     * @return string
     */
    public function getDateBon()
    {
        return $this->dateBon;
    }

    /**
     * Set dateSignataire
     *
     * @param string $dateSignataire
     *
     * @return Bon
     */
    public function setDateSignataire($dateSignataire)
    {
        $this->dateSignataire = $dateSignataire;

        return $this;
    }

    /**
     * Get dateSignataire
     *
     * @return string
     */
    public function getDateSignataire()
    {
        return $this->dateSignataire;
    }

    /**
     * Get idBon
     *
     * @return integer
     */
    public function getIdBon()
    {
        return $this->idBon;
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
    public function getMagasinier()
    {
        return $this->magasinier;
    }

    /**
     * @param mixed $magasinier
     */
    public function setMagasinier($magasinier)
    {
        $this->magasinier = $magasinier;
    }

    /**
     * @return mixed
     */
    public function getApprobateur()
    {
        return $this->approbateur;
    }

    /**
     * @param mixed $approbateur
     */
    public function setApprobateur($approbateur)
    {
        $this->approbateur = $approbateur;
    }
}
