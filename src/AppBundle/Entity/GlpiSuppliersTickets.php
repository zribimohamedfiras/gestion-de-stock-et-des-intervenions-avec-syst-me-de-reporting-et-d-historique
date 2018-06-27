<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * GlpiSuppliersTickets
 *
 * @ORM\Table(name="glpi_suppliers_tickets", uniqueConstraints={@ORM\UniqueConstraint(name="unicity", columns={"tickets_id", "type", "suppliers_id"})}, indexes={@ORM\Index(name="group", columns={"suppliers_id", "type"})})
 * @ORM\Entity
 */
class GlpiSuppliersTickets
{
    /**
     * @var integer
     *
     * @ORM\Column(name="tickets_id", type="integer", nullable=false)
     */
    private $ticketsId = '0';

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
     * Set ticketsId
     *
     * @param integer $ticketsId
     *
     * @return GlpiSuppliersTickets
     */
    public function setTicketsId($ticketsId)
    {
        $this->ticketsId = $ticketsId;

        return $this;
    }

    /**
     * Get ticketsId
     *
     * @return integer
     */
    public function getTicketsId()
    {
        return $this->ticketsId;
    }

    /**
     * Set suppliersId
     *
     * @param integer $suppliersId
     *
     * @return GlpiSuppliersTickets
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
     * @return GlpiSuppliersTickets
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
     * @return GlpiSuppliersTickets
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
     * @return GlpiSuppliersTickets
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
