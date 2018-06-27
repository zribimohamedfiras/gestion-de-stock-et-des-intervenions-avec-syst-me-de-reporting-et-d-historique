<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * GlpiDeviceharddrives
 *
 * @ORM\Table(name="glpi_deviceharddrives", indexes={@ORM\Index(name="designation", columns={"designation"}), @ORM\Index(name="manufacturers_id", columns={"manufacturers_id"}), @ORM\Index(name="interfacetypes_id", columns={"interfacetypes_id"}), @ORM\Index(name="entities_id", columns={"entities_id"}), @ORM\Index(name="is_recursive", columns={"is_recursive"}), @ORM\Index(name="date_mod", columns={"date_mod"}), @ORM\Index(name="date_creation", columns={"date_creation"})})
 * @ORM\Entity
 */
class GlpiDeviceharddrives
{
    /**
     * @var string
     *
     * @ORM\Column(name="designation", type="string", length=255, nullable=true)
     */
    private $designation;

    /**
     * @var string
     *
     * @ORM\Column(name="rpm", type="string", length=255, nullable=true)
     */
    private $rpm;

    /**
     * @var integer
     *
     * @ORM\Column(name="interfacetypes_id", type="integer", nullable=false)
     */
    private $interfacetypesId = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="cache", type="string", length=255, nullable=true)
     */
    private $cache;

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
     * @ORM\Column(name="capacity_default", type="integer", nullable=false)
     */
    private $capacityDefault = '0';

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
     * @return GlpiDeviceharddrives
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
     * Set rpm
     *
     * @param string $rpm
     *
     * @return GlpiDeviceharddrives
     */
    public function setRpm($rpm)
    {
        $this->rpm = $rpm;

        return $this;
    }

    /**
     * Get rpm
     *
     * @return string
     */
    public function getRpm()
    {
        return $this->rpm;
    }

    /**
     * Set interfacetypesId
     *
     * @param integer $interfacetypesId
     *
     * @return GlpiDeviceharddrives
     */
    public function setInterfacetypesId($interfacetypesId)
    {
        $this->interfacetypesId = $interfacetypesId;

        return $this;
    }

    /**
     * Get interfacetypesId
     *
     * @return integer
     */
    public function getInterfacetypesId()
    {
        return $this->interfacetypesId;
    }

    /**
     * Set cache
     *
     * @param string $cache
     *
     * @return GlpiDeviceharddrives
     */
    public function setCache($cache)
    {
        $this->cache = $cache;

        return $this;
    }

    /**
     * Get cache
     *
     * @return string
     */
    public function getCache()
    {
        return $this->cache;
    }

    /**
     * Set comment
     *
     * @param string $comment
     *
     * @return GlpiDeviceharddrives
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
     * @return GlpiDeviceharddrives
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
     * Set capacityDefault
     *
     * @param integer $capacityDefault
     *
     * @return GlpiDeviceharddrives
     */
    public function setCapacityDefault($capacityDefault)
    {
        $this->capacityDefault = $capacityDefault;

        return $this;
    }

    /**
     * Get capacityDefault
     *
     * @return integer
     */
    public function getCapacityDefault()
    {
        return $this->capacityDefault;
    }

    /**
     * Set entitiesId
     *
     * @param integer $entitiesId
     *
     * @return GlpiDeviceharddrives
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
     * @return GlpiDeviceharddrives
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
     * @return GlpiDeviceharddrives
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
     * @return GlpiDeviceharddrives
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
