<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * GlpiComputervirtualmachines
 *
 * @ORM\Table(name="glpi_computervirtualmachines", indexes={@ORM\Index(name="computers_id", columns={"computers_id"}), @ORM\Index(name="entities_id", columns={"entities_id"}), @ORM\Index(name="name", columns={"name"}), @ORM\Index(name="virtualmachinestates_id", columns={"virtualmachinestates_id"}), @ORM\Index(name="virtualmachinesystems_id", columns={"virtualmachinesystems_id"}), @ORM\Index(name="vcpu", columns={"vcpu"}), @ORM\Index(name="ram", columns={"ram"}), @ORM\Index(name="is_deleted", columns={"is_deleted"}), @ORM\Index(name="is_dynamic", columns={"is_dynamic"}), @ORM\Index(name="uuid", columns={"uuid"}), @ORM\Index(name="date_mod", columns={"date_mod"}), @ORM\Index(name="date_creation", columns={"date_creation"})})
 * @ORM\Entity
 */
class GlpiComputervirtualmachines
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
     * @ORM\Column(name="name", type="string", length=255, nullable=false)
     */
    private $name = '';

    /**
     * @var integer
     *
     * @ORM\Column(name="virtualmachinestates_id", type="integer", nullable=false)
     */
    private $virtualmachinestatesId = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="virtualmachinesystems_id", type="integer", nullable=false)
     */
    private $virtualmachinesystemsId = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="virtualmachinetypes_id", type="integer", nullable=false)
     */
    private $virtualmachinetypesId = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="uuid", type="string", length=255, nullable=false)
     */
    private $uuid = '';

    /**
     * @var integer
     *
     * @ORM\Column(name="vcpu", type="integer", nullable=false)
     */
    private $vcpu = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="ram", type="string", length=255, nullable=false)
     */
    private $ram = '';

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
     * @var string
     *
     * @ORM\Column(name="comment", type="text", length=65535, nullable=true)
     */
    private $comment;

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
     * @return GlpiComputervirtualmachines
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
     * @return GlpiComputervirtualmachines
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
     * @return GlpiComputervirtualmachines
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
     * Set virtualmachinestatesId
     *
     * @param integer $virtualmachinestatesId
     *
     * @return GlpiComputervirtualmachines
     */
    public function setVirtualmachinestatesId($virtualmachinestatesId)
    {
        $this->virtualmachinestatesId = $virtualmachinestatesId;

        return $this;
    }

    /**
     * Get virtualmachinestatesId
     *
     * @return integer
     */
    public function getVirtualmachinestatesId()
    {
        return $this->virtualmachinestatesId;
    }

    /**
     * Set virtualmachinesystemsId
     *
     * @param integer $virtualmachinesystemsId
     *
     * @return GlpiComputervirtualmachines
     */
    public function setVirtualmachinesystemsId($virtualmachinesystemsId)
    {
        $this->virtualmachinesystemsId = $virtualmachinesystemsId;

        return $this;
    }

    /**
     * Get virtualmachinesystemsId
     *
     * @return integer
     */
    public function getVirtualmachinesystemsId()
    {
        return $this->virtualmachinesystemsId;
    }

    /**
     * Set virtualmachinetypesId
     *
     * @param integer $virtualmachinetypesId
     *
     * @return GlpiComputervirtualmachines
     */
    public function setVirtualmachinetypesId($virtualmachinetypesId)
    {
        $this->virtualmachinetypesId = $virtualmachinetypesId;

        return $this;
    }

    /**
     * Get virtualmachinetypesId
     *
     * @return integer
     */
    public function getVirtualmachinetypesId()
    {
        return $this->virtualmachinetypesId;
    }

    /**
     * Set uuid
     *
     * @param string $uuid
     *
     * @return GlpiComputervirtualmachines
     */
    public function setUuid($uuid)
    {
        $this->uuid = $uuid;

        return $this;
    }

    /**
     * Get uuid
     *
     * @return string
     */
    public function getUuid()
    {
        return $this->uuid;
    }

    /**
     * Set vcpu
     *
     * @param integer $vcpu
     *
     * @return GlpiComputervirtualmachines
     */
    public function setVcpu($vcpu)
    {
        $this->vcpu = $vcpu;

        return $this;
    }

    /**
     * Get vcpu
     *
     * @return integer
     */
    public function getVcpu()
    {
        return $this->vcpu;
    }

    /**
     * Set ram
     *
     * @param string $ram
     *
     * @return GlpiComputervirtualmachines
     */
    public function setRam($ram)
    {
        $this->ram = $ram;

        return $this;
    }

    /**
     * Get ram
     *
     * @return string
     */
    public function getRam()
    {
        return $this->ram;
    }

    /**
     * Set isDeleted
     *
     * @param boolean $isDeleted
     *
     * @return GlpiComputervirtualmachines
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
     * @return GlpiComputervirtualmachines
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
     * Set comment
     *
     * @param string $comment
     *
     * @return GlpiComputervirtualmachines
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
     * Set dateMod
     *
     * @param \DateTime $dateMod
     *
     * @return GlpiComputervirtualmachines
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
     * @return GlpiComputervirtualmachines
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
