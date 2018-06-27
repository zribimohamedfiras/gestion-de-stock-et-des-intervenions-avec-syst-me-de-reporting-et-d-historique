<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * GlpiChangesTickets
 *
 * @ORM\Table(name="glpi_changes_tickets", uniqueConstraints={@ORM\UniqueConstraint(name="unicity", columns={"changes_id", "tickets_id"})}, indexes={@ORM\Index(name="tickets_id", columns={"tickets_id"})})
 * @ORM\Entity
 */
class GlpiChangesTickets
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
     * @ORM\Column(name="tickets_id", type="integer", nullable=false)
     */
    private $ticketsId = '0';

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
     * @return GlpiChangesTickets
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
     * Set ticketsId
     *
     * @param integer $ticketsId
     *
     * @return GlpiChangesTickets
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
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }
}
