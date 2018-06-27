<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\ORM\Mapping\ManyToOne;
use Doctrine\ORM\Mapping\JoinColumn;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * BonArticle
 *
 * @ORM\Table(name="bon_article", indexes={@ORM\Index(name="fk3", columns={"id_bon"}), @ORM\Index(name="fk4", columns={"id_article"})})
 * @ORM\Entity
 */
class BonArticle
{
    /**
     * @var integer
     *
     * @ORM\Column(name="qte", type="integer", nullable=true)
     * @Assert\NotBlank()
     */
    private $qte;

    /**
     * @var string
     *
     * @ORM\Column(name="date_op", type="string", length=20, nullable=true)
     */
    private $dateOp;

    /**
     * @var integer
     *
     * @ORM\Column(name="id_bonarticle", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idBonarticle;

    /**
     * @var \AppBundle\Entity\Article
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Article")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_article", referencedColumnName="id_article")
     * })
     */
    private $idArticle;

    /**
     * @var \AppBundle\Entity\Bon
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Bon")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_bon", referencedColumnName="id_bon")
     * })
     */
    private $idBon;


    /**
     * @var string
     *
     * @ORM\Column(name="station", type="string", length=255, nullable=true)
     */
    private $idStation;





    /**
     * Set qte
     *
     * @param integer $qte
     *
     * @return BonArticle
     */
    public function setQte($qte)
    {
        $this->qte = $qte;

        return $this;
    }

    /**
     * Get qte
     *
     * @return integer
     */
    public function getQte()
    {
        return $this->qte;
    }

    /**
     * Set dateOp
     *
     * @param string $dateOp
     *
     * @return BonArticle
     */
    public function setDateOp($dateOp)
    {
        $this->dateOp = $dateOp;

        return $this;
    }

    /**
     * Get dateOp
     *
     * @return string
     */
    public function getDateOp()
    {
        return $this->dateOp;
    }

    /**
     * Get idBonarticle
     *
     * @return integer
     */
    public function getIdBonarticle()
    {
        return $this->idBonarticle;
    }

    /**
     * Set idArticle
     *
     * @param \AppBundle\Entity\Article $idArticle
     *
     * @return BonArticle
     */
    public function setIdArticle(\AppBundle\Entity\Article $idArticle = null)
    {
        $this->idArticle = $idArticle;

        return $this;
    }

    /**
     * Get idArticle
     *
     * @return \AppBundle\Entity\Article
     */
    public function getIdArticle()
    {
        return $this->idArticle;
    }

    /**
     * Set idBon
     *
     * @param \AppBundle\Entity\Bon $idBon
     *
     * @return BonArticle
     */
    public function setIdBon(\AppBundle\Entity\Bon $idBon = null)
    {
        $this->idBon = $idBon;

        return $this;
    }

    /**
     * Get idBon
     *
     * @return \AppBundle\Entity\Bon
     */
    public function getIdBon()
    {
        return $this->idBon;
    }

    /**
     * @return string
     */
    public function getIdStation()
    {
        return $this->idStation;
    }

    /**
     * @param string $idStation
     */
    public function setIdStation($idStation)
    {
        $this->idStation = $idStation;
    }

}
