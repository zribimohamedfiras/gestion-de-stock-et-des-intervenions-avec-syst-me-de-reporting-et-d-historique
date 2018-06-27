<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * GlpiChangesSuppliers
 *
 * @ORM\Table(name="glpi_changes_suppliers", uniqueConstraints={@ORM\UniqueConstraint(name="unicity", columns={"changes_id", "type", "suppliers_id"})}, indexes={@ORM\Index(name="group", columns={"suppliers_id", "type"})})
 * @ORM\Entity
 */
class GlpiChangesSuppliers
{
    /**
     * @var integer
     *
     * @ORM\Column(name="changes_id", type="integer", nullable=false)
     */
    private $changesId = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="suppliers_id", type="integer", nullable=false)
     */
    private $suppliersId = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="type", type="integer", nullable=false)
     */
    private $type = '1';

    /**
     * @var boolean
     *
     * @ORM\Column(name="use_notification", type="boolean", nullable=false)
     */
    private $useNotification = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="alternative_email", type="string", length=255, nullable=true)
     */
    private $alternativeEmail;

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;



    /**
     * Set changesId
     *
     * @param integer $changesId
     *
     * @return GlpiChangesSuppliers
     */
    public function setChangesId($changesId)
    {
        $this->changesId = $changesId;

        return $this;
    }

    /**
     * Get changesId
     *
     * @return integer
     */
    public function getChangesId()
    {
        return $this->changesId;
    }

    /**
     * Set suppliersId
     *
     * @param integer $suppliersId
     *
     * @return GlpiChangesSuppliers
     */
    public function setSuppliersId($suppliersId)
    {
        $this->suppliersId = $suppliersId;

        return $this;
    }

    /**
     * Get suppliersId
     *
     * @return integer
     */
    public function getSuppliersId()
    {
        return $this->suppliersId;
    }

    /**
     * Set type
     *
     * @param integer $type
     *
     * @return GlpiChangesSuppliers
     */
    public function setType($type)
    {
        $this->type = $type;

        return $this;
    }

    /**
     * Get type
     *
     * @return integer
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Set useNotification
     *
     * @param boolean $useNotification
     *
     * @return GlpiChangesSuppliers
     */
    public function setUseNotification($useNotification)
    {
        $this->useNotification = $useNotification;

        return $this;
    }

    /**
     * Get useNotification
     *
     * @return boolean
     */
    public function getUseNotification()
    {
        return $this->useNotification;
    }

    /**
     * Set alternativeEmail
     *
     * @param string $alternativeEmail
     *
     * @return GlpiChangesSuppliers
     */
    public function setAlternativeEmail($alternativeEmail)
    {
        $this->alternativeEmail = $alternativeEmail;

        return $this;
    }

    /**
     * Get alternativeEmail
     *
     * @return string
     */
    public function getAlternativeEmail()
    {
        return $this->alternativeEmail;
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
