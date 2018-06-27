<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * GlpiComputerdisks
 *
 * @ORM\Table(name="glpi_computerdisks", indexes={@ORM\Index(name="name", columns={"name"}), @ORM\Index(name="device", columns={"device"}), @ORM\Index(name="mountpoint", columns={"mountpoint"}), @ORM\Index(name="totalsize", columns={"totalsize"}), @ORM\Index(name="freesize", columns={"freesize"}), @ORM\Index(name="computers_id", columns={"computers_id"}), @ORM\Index(name="filesystems_id", columns={"filesystems_id"}), @ORM\Index(name="entities_id", columns={"entities_id"}), @ORM\Index(name="is_deleted", columns={"is_deleted"}), @ORM\Index(name="is_dynamic", columns={"is_dynamic"}), @ORM\Index(name="date_mod", columns={"date_mod"}), @ORM\Index(name="date_creation", columns={"date_creation"})})
 * @ORM\Entity
 */
class GlpiComputerdisks
{
    /**
     * @var integer
     *
     * @ORM\Column(name="entities_id", type="integer", nullable=false)
     */
    private $entitiesId = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="computers_id", type="integer", nullable=false)
     */
    private $computersId = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=255, nullable=true)
     */
    private $name;

    /**
     * @var string
     *
     * @ORM\Column(name="device", type="string", length=255, nullable=true)
     */
    private $device;

    /**
     * @var string
     *
     * @ORM\Column(name="mountpoint", type="string", length=255, nullable=true)
     */
    private $mountpoint;

    /**
     * @var integer
     *
     * @ORM\Column(name="filesystems_id", type="integer", nullable=false)
     */
    private $filesystemsId = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="totalsize", type="integer", nullable=false)
     */
    private $totalsize = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="freesize", type="integer", nullable=false)
     */
    private $freesize = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="is_deleted", type="boolean", nullable=false)
     */
    private $isDeleted = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="is_dynamic", type="boolean", nullable=false)
     */
    private $isDynamic = '0';

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
     * Set entitiesId
     *
     * @param integer $entitiesId
     *
     * @return GlpiComputerdisks
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
     * Set computersId
     *
     * @param integer $computersId
     *
     * @return GlpiComputerdisks
     */
    public function setComputersId($computersId)
    {
        $this->computersId = $computersId;

        return $this;
    }

    /**
     * Get computersId
     *
     * @return integer
     */
    public function getComputersId()
    {
        return $this->computersId;
    }

    /**
     * Set name
     *
     * @param string $name
     *
     * @return GlpiComputerdisks
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set device
     *
     * @param string $device
     *
     * @return GlpiComputerdisks
     */
    public function setDevice($device)
    {
        $this->device = $device;

        return $this;
    }

    /**
     * Get device
     *
     * @return string
     */
    public function getDevice()
    {
        return $this->device;
    }

    /**
     * Set mountpoint
     *
     * @param string $mountpoint
     *
     * @return GlpiComputerdisks
     */
    public function setMountpoint($mountpoint)
    {
        $this->mountpoint = $mountpoint;

        return $this;
    }

    /**
     * Get mountpoint
     *
     * @return string
     */
    public function getMountpoint()
    {
        return $this->mountpoint;
    }

    /**
     * Set filesystemsId
     *
     * @param integer $filesystemsId
     *
     * @return GlpiComputerdisks
     */
    public function setFilesystemsId($filesystemsId)
    {
        $this->filesystemsId = $filesystemsId;

        return $this;
    }

    /**
     * Get filesystemsId
     *
     * @return integer
     */
    public function getFilesystemsId()
    {
        return $this->filesystemsId;
    }

    /**
     * Set totalsize
     *
     * @param integer $totalsize
     *
     * @return GlpiComputerdisks
     */
    public function setTotalsize($totalsize)
    {
        $this->totalsize = $totalsize;

        return $this;
    }

    /**
     * Get totalsize
     *
     * @return integer
     */
    public function getTotalsize()
    {
        return $this->totalsize;
    }

    /**
     * Set freesize
     *
     * @param integer $freesize
     *
     * @return GlpiComputerdisks
     */
    public function setFreesize($freesize)
    {
        $this->freesize = $freesize;

        return $this;
    }

    /**
     * Get freesize
     *
     * @return integer
     */
    public function getFreesize()
    {
        return $this->freesize;
    }

    /**
     * Set isDeleted
     *
     * @param boolean $isDeleted
     *
     * @return GlpiComputerdisks
     */
    public function setIsDeleted($isDeleted)
    {
        $this->isDeleted = $isDeleted;

        return $this;
    }

    /**
     * Get isDeleted
     *
     * @return boolean
     */
    public function getIsDeleted()
    {
        return $this->isDeleted;
    }

    /**
     * Set isDynamic
     *
     * @param boolean $isDynamic
     *
     * @return GlpiComputerdisks
     */
    public function setIsDynamic($isDynamic)
    {
        $this->isDynamic = $isDynamic;

        return $this;
    }

    /**
     * Get isDynamic
     *
     * @return boolean
     */
    public function getIsDynamic()
    {
        return $this->isDynamic;
    }

    /**
     * Set dateMod
     *
     * @param \DateTime $dateMod
     *
     * @return GlpiComputerdisks
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
     * @return GlpiComputerdisks
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
