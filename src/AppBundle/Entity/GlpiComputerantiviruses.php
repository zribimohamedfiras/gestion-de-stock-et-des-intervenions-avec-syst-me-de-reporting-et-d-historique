<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * GlpiComputerantiviruses
 *
 * @ORM\Table(name="glpi_computerantiviruses", indexes={@ORM\Index(name="name", columns={"name"}), @ORM\Index(name="antivirus_version", columns={"antivirus_version"}), @ORM\Index(name="signature_version", columns={"signature_version"}), @ORM\Index(name="is_active", columns={"is_active"}), @ORM\Index(name="is_uptodate", columns={"is_uptodate"}), @ORM\Index(name="is_dynamic", columns={"is_dynamic"}), @ORM\Index(name="is_deleted", columns={"is_deleted"}), @ORM\Index(name="computers_id", columns={"computers_id"}), @ORM\Index(name="date_expiration", columns={"date_expiration"}), @ORM\Index(name="date_mod", columns={"date_mod"}), @ORM\Index(name="date_creation", columns={"date_creation"})})
 * @ORM\Entity
 */
class GlpiComputerantiviruses
{
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
     * @var integer
     *
     * @ORM\Column(name="manufacturers_id", type="integer", nullable=false)
     */
    private $manufacturersId = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="antivirus_version", type="string", length=255, nullable=true)
     */
    private $antivirusVersion;

    /**
     * @var string
     *
     * @ORM\Column(name="signature_version", type="string", length=255, nullable=true)
     */
    private $signatureVersion;

    /**
     * @var boolean
     *
     * @ORM\Column(name="is_active", type="boolean", nullable=false)
     */
    private $isActive = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="is_deleted", type="boolean", nullable=false)
     */
    private $isDeleted = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="is_uptodate", type="boolean", nullable=false)
     */
    private $isUptodate = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="is_dynamic", type="boolean", nullable=false)
     */
    private $isDynamic = '0';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_expiration", type="datetime", nullable=true)
     */
    private $dateExpiration;

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
     * Set computersId
     *
     * @param integer $computersId
     *
     * @return GlpiComputerantiviruses
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
     * @return GlpiComputerantiviruses
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
     * Set manufacturersId
     *
     * @param integer $manufacturersId
     *
     * @return GlpiComputerantiviruses
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
     * Set antivirusVersion
     *
     * @param string $antivirusVersion
     *
     * @return GlpiComputerantiviruses
     */
    public function setAntivirusVersion($antivirusVersion)
    {
        $this->antivirusVersion = $antivirusVersion;

        return $this;
    }

    /**
     * Get antivirusVersion
     *
     * @return string
     */
    public function getAntivirusVersion()
    {
        return $this->antivirusVersion;
    }

    /**
     * Set signatureVersion
     *
     * @param string $signatureVersion
     *
     * @return GlpiComputerantiviruses
     */
    public function setSignatureVersion($signatureVersion)
    {
        $this->signatureVersion = $signatureVersion;

        return $this;
    }

    /**
     * Get signatureVersion
     *
     * @return string
     */
    public function getSignatureVersion()
    {
        return $this->signatureVersion;
    }

    /**
     * Set isActive
     *
     * @param boolean $isActive
     *
     * @return GlpiComputerantiviruses
     */
    public function setIsActive($isActive)
    {
        $this->isActive = $isActive;

        return $this;
    }

    /**
     * Get isActive
     *
     * @return boolean
     */
    public function getIsActive()
    {
        return $this->isActive;
    }

    /**
     * Set isDeleted
     *
     * @param boolean $isDeleted
     *
     * @return GlpiComputerantiviruses
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
     * Set isUptodate
     *
     * @param boolean $isUptodate
     *
     * @return GlpiComputerantiviruses
     */
    public function setIsUptodate($isUptodate)
    {
        $this->isUptodate = $isUptodate;

        return $this;
    }

    /**
     * Get isUptodate
     *
     * @return boolean
     */
    public function getIsUptodate()
    {
        return $this->isUptodate;
    }

    /**
     * Set isDynamic
     *
     * @param boolean $isDynamic
     *
     * @return GlpiComputerantiviruses
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
     * Set dateExpiration
     *
     * @param \DateTime $dateExpiration
     *
     * @return GlpiComputerantiviruses
     */
    public function setDateExpiration($dateExpiration)
    {
        $this->dateExpiration = $dateExpiration;

        return $this;
    }

    /**
     * Get dateExpiration
     *
     * @return \DateTime
     */
    public function getDateExpiration()
    {
        return $this->dateExpiration;
    }

    /**
     * Set dateMod
     *
     * @param \DateTime $dateMod
     *
     * @return GlpiComputerantiviruses
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
     * @return GlpiComputerantiviruses
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
