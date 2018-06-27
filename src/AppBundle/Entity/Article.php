<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;
use Symfony\Component\Validator\Constraints as Assert;
/**
 * Article
 *
 * @ORM\Table(name="article")
 * @ORM\Entity
 * @UniqueEntity(fields="designation", message="Designation déja existe")
 */
class Article
{
    /**
     * @var string
     *
     * @ORM\Column(name="designation", type="string", length=100, nullable=false, unique=true)
     * @Assert\NotBlank()
     */
    private $designation;

    /**
     * @var string
     *
     * @ORM\Column(name="marque", type="string", length=100, nullable=true)
     * @Assert\NotBlank()
     */
    private $marque;


    /**
     * @var integer
     *
     * @ORM\Column(name="qte_initial", type="integer", nullable=false)
     * @Assert\NotBlank()
     */
    private $qteInitial;

    /**
     * @var integer
     *
     * @ORM\Column(name="qte_actuel", type="integer", nullable=false)
     * @Assert\NotBlank()
     */
    private $qteActuel;

    /**
     * @var string
     *
     * @ORM\Column(name="emplacement", type="string", length=20, nullable=false)
     * @Assert\NotBlank()
     */
    private $emplacement;

    /**
     * @var string
     *
     * @ORM\Column(name="unite", type="string", length=20, nullable=true)
     * @Assert\NotBlank()
     */
    private $unite;

    /**
     * @var integer
     *
     * @ORM\Column(name="id_article", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idArticle;



    /**
     * Set designation
     *
     * @param string $designation
     *
     * @return Article
     */
    public function setDesignation($designation)
    {
        $this->designation = $designation;

        return $this;
    }

    /**
     * Get designation
     *
     * @return string
     */
    public function getDesignation()
    {
        return $this->designation;
    }

    /**
     * Set marque
     *
     * @param string $marque
     *
     * @return Article
     */
    public function setMarque($marque)
    {
        $this->marque = $marque;

        return $this;
    }

    /**
     * Get marque
     *
     * @return string
     */
    public function getMarque()
    {
        return $this->marque;
    }


    /**
     * Set qteInitial
     *
     * @param integer $qteInitial
     *
     * @return Article
     */
    public function setQteInitial($qteInitial)
    {
        $this->qteInitial = $qteInitial;

        return $this;
    }

    /**
     * Get qteInitial
     *
     * @return integer
     */
    public function getQteInitial()
    {
        return $this->qteInitial;
    }

    /**
     * Set qteActuel
     *
     * @param integer $qteActuel
     *
     * @return Article
     */
    public function setQteActuel($qteActuel)
    {
        $this->qteActuel = $qteActuel;

        return $this;
    }

    /**
     * Get qteActuel
     *
     * @return integer
     */
    public function getQteActuel()
    {
        return $this->qteActuel;
    }

    /**
     * Set emplacement
     *
     * @param string $emplacement
     *
     * @return Article
     */
    public function setEmplacement($emplacement)
    {
        $this->emplacement = $emplacement;

        return $this;
    }

    /**
     * Get emplacement
     *
     * @return string
     */
    public function getEmplacement()
    {
        return $this->emplacement;
    }

    /**
     * Set unite
     *
     * @param string $unite
     *
     * @return Article
     */
    public function setUnite($unite)
    {
        $this->unite = $unite;

        return $this;
    }

    /**
     * Get unite
     *
     * @return string
     */
    public function getUnite()
    {
        return $this->unite;
    }

    /**
     * Get idArticle
     *
     * @return integer
     */
    public function getIdArticle()
    {
        return $this->idArticle;
    }
}
