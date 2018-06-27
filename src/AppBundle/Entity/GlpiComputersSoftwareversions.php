<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * GlpiComputersSoftwareversions
 *
 * @ORM\Table(name="glpi_computers_softwareversions", uniqueConstraints={@ORM\UniqueConstraint(name="unicity", columns={"computers_id", "softwareversions_id"})}, indexes={@ORM\Index(name="softwareversions_id", columns={"softwareversions_id"}), @ORM\Index(name="computers_info", columns={"entities_id", "is_template_computer", "is_deleted_computer"}), @ORM\Index(name="is_template", columns={"is_template_computer"}), @ORM\Index(name="is_deleted", columns={"is_deleted_computer"}), @ORM\Index(name="is_dynamic", columns={"is_dynamic"}), @ORM\Index(name="date_install", columns={"date_install"})})
 * @ORM\Entity
 */
class GlpiComputersSoftwareversions
{
    /**
     * @var integer
     *
     * @ORM\Column(name="computers_id", type="integer", nullable=false)
     */
    private $computersId = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="softwareversions_id", type="integer", nullable=false)
     */
    private $softwareversionsId = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="is_deleted_computer", type="boolean", nullable=false)
     */
    private $isDeletedComputer = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="is_template_computer", type="boolean", nullable=false)
     */
    private $isTemplateComputer = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="entities_id", type="integer", nullable=false)
     */
    private $entitiesId = '0';

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
     * @ORM\Column(name="date_install", type="date", nullable=true)
     */
    private $dateInstall;

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
     * @return GlpiComputersSoftwareversions
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
     * Set softwareversionsId
     *
     * @param integer $softwareversionsId
     *
     * @return GlpiComputersSoftwareversions
     */
    public function setSoftwareversionsId($softwareversionsId)
    {
        $this->softwareversionsId = $softwareversionsId;

        return $this;
    }

    /**
     * Get softwareversionsId
     *
     * @return integer
     */
    public function getSoftwareversionsId()
    {
        return $this->softwareversionsId;
    }

    /**
     * Set isDeletedComputer
     *
     * @param boolean $isDeletedComputer
     *
     * @return GlpiComputersSoftwareversions
     */
    public function setIsDeletedComputer($isDeletedComputer)
    {
        $this->isDeletedComputer = $isDeletedComputer;

        return $this;
    }

    /**
     * Get isDeletedComputer
     *
     * @return boolean
     */
    public function getIsDeletedComputer()
    {
        return $this->isDeletedComputer;
    }

    /**
     * Set isTemplateComputer
     *
     * @param boolean $isTemplateComputer
     *
     * @return GlpiComputersSoftwareversions
     */
    public function setIsTemplateComputer($isTemplateComputer)
    {
        $this->isTemplateComputer = $isTemplateComputer;

        return $this;
    }

    /**
     * Get isTemplateComputer
     *
     * @return boolean
     */
    public function getIsTemplateComputer()
    {
        return $this->isTemplateComputer;
    }

    /**
     * Set entitiesId
     *
     * @param integer $entitiesId
     *
     * @return GlpiComputersSoftwareversions
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
     * Set isDeleted
     *
     * @param boolean $isDeleted
     *
     * @return GlpiComputersSoftwareversions
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
     * @return GlpiComputersSoftwareversions
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
     * Set dateInstall
     *
     * @param \DateTime $dateInstall
     *
     * @return GlpiComputersSoftwareversions
     */
    public function setDateInstall($dateInstall)
    {
        $this->dateInstall = $dateInstall;

        return $this;
    }

    /**
     * Get dateInstall
     *
     * @return \DateTime
     */
    public function getDateInstall()
    {
        return $this->dateInstall;
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
