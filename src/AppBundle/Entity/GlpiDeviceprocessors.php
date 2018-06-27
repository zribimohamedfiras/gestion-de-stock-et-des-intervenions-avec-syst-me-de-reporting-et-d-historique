<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * GlpiDeviceprocessors
 *
 * @ORM\Table(name="glpi_deviceprocessors", indexes={@ORM\Index(name="designation", columns={"designation"}), @ORM\Index(name="manufacturers_id", columns={"manufacturers_id"}), @ORM\Index(name="entities_id", columns={"entities_id"}), @ORM\Index(name="is_recursive", columns={"is_recursive"}), @ORM\Index(name="date_mod", columns={"date_mod"}), @ORM\Index(name="date_creation", columns={"date_creation"})})
 * @ORM\Entity
 */
class GlpiDeviceprocessors
{
    /**
     * @var string
     *
     * @ORM\Column(name="designation", type="string", length=255, nullable=true)
     */
    private $designation;

    /**
     * @var integer
     *
     * @ORM\Column(name="frequence", type="integer", nullable=false)
     */
    private $frequence = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="comment", type="text", length=65535, nullable=true)
     */
    private $comment;

    /**
     * @var integer
     *
     * @ORM\Column(name="manufacturers_id", type="integer", nullable=false)
     */
    private $manufacturersId = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="frequency_default", type="integer", nullable=false)
     */
    private $frequencyDefault = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="nbcores_default", type="integer", nullable=true)
     */
    private $nbcoresDefault;

    /**
     * @var integer
     *
     * @ORM\Column(name="nbthreads_default", type="integer", nullable=true)
     */
    private $nbthreadsDefault;

    /**
     * @var integer
     *
     * @ORM\Column(name="entities_id", type="integer", nullable=false)
     */
    private $entitiesId = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="is_recursive", type="boolean", nullable=false)
     */
    private $isRecursive = '0';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_mod", type="datetime", nullable=true)
     */
    private $dateMod;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_creation", type="datetime", nullable=true)
     */
    private $dateCreation;

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;



    /**
     * Set designation
     *
     * @param string $designation
     *
     * @return GlpiDeviceprocessors
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
     * Set frequence
     *
     * @param integer $frequence
     *
     * @return GlpiDeviceprocessors
     */
    public function setFrequence($frequence)
    {
        $this->frequence = $frequence;

        return $this;
    }

    /**
     * Get frequence
     *
     * @return integer
     */
    public function getFrequence()
    {
        return $this->frequence;
    }

    /**
     * Set comment
     *
     * @param string $comment
     *
     * @return GlpiDeviceprocessors
     */
    public function setComment($comment)
    {
        $this->comment = $comment;

        return $this;
    }

    /**
     * Get comment
     *
     * @return string
     */
    public function getComment()
    {
        return $this->comment;
    }

    /**
     * Set manufacturersId
     *
     * @param integer $manufacturersId
     *
     * @return GlpiDeviceprocessors
     */
    public function setManufacturersId($manufacturersId)
    {
        $this->manufacturersId = $manufacturersId;

        return $this;
    }

    /**
     * Get manufacturersId
     *
     * @return integer
     */
    public function getManufacturersId()
    {
        return $this->manufacturersId;
    }

    /**
     * Set frequencyDefault
     *
     * @param integer $frequencyDefault
     *
     * @return GlpiDeviceprocessors
     */
    public function setFrequencyDefault($frequencyDefault)
    {
        $this->frequencyDefault = $frequencyDefault;

        return $this;
    }

    /**
     * Get frequencyDefault
     *
     * @return integer
     */
    public function getFrequencyDefault()
    {
        return $this->frequencyDefault;
    }

    /**
     * Set nbcoresDefault
     *
     * @param integer $nbcoresDefault
     *
     * @return GlpiDeviceprocessors
     */
    public function setNbcoresDefault($nbcoresDefault)
    {
        $this->nbcoresDefault = $nbcoresDefault;

        return $this;
    }

    /**
     * Get nbcoresDefault
     *
     * @return integer
     */
    public function getNbcoresDefault()
    {
        return $this->nbcoresDefault;
    }

    /**
     * Set nbthreadsDefault
     *
     * @param integer $nbthreadsDefault
     *
     * @return GlpiDeviceprocessors
     */
    public function setNbthreadsDefault($nbthreadsDefault)
    {
        $this->nbthreadsDefault = $nbthreadsDefault;

        return $this;
    }

    /**
     * Get nbthreadsDefault
     *
     * @return integer
     */
    public function getNbthreadsDefault()
    {
        return $this->nbthreadsDefault;
    }

    /**
     * Set entitiesId
     *
     * @param integer $entitiesId
     *
     * @return GlpiDeviceprocessors
     */
    public function setEntitiesId($entitiesId)
    {
        $this->entitiesId = $entitiesId;

        return $this;
    }

    /**
     * Get entitiesId
     *
     * @return integer
     */
    public function getEntitiesId()
    {
        return $this->entitiesId;
    }

    /**
     * Set isRecursive
     *
     * @param boolean $isRecursive
     *
     * @return GlpiDeviceprocessors
     */
    public function setIsRecursive($isRecursive)
    {
        $this->isRecursive = $isRecursive;

        return $this;
    }

    /**
     * Get isRecursive
     *
     * @return boolean
     */
    public function getIsRecursive()
    {
        return $this->isRecursive;
    }

    /**
     * Set dateMod
     *
     * @param \DateTime $dateMod
     *
     * @return GlpiDeviceprocessors
     */
    public function setDateMod($dateMod)
    {
        $this->dateMod = $dateMod;

        return $this;
    }

    /**
     * Get dateMod
     *
     * @return \DateTime
     */
    public function getDateMod()
    {
        return $this->dateMod;
    }

    /**
     * Set dateCreation
     *
     * @param \DateTime $dateCreation
     *
     * @return GlpiDeviceprocessors
     */
    public function setDateCreation($dateCreation)
    {
        $this->dateCreation = $dateCreation;

        return $this;
    }

    /**
     * Get dateCreation
     *
     * @return \DateTime
     */
    public function getDateCreation()
    {
        return $this->dateCreation;
    }

    /**
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }
}
