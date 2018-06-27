<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * GlpiSlalevelsTickets
 *
 * @ORM\Table(name="glpi_slalevels_tickets", indexes={@ORM\Index(name="tickets_id", columns={"tickets_id"}), @ORM\Index(name="slalevels_id", columns={"slalevels_id"}), @ORM\Index(name="unicity", columns={"tickets_id", "slalevels_id"})})
 * @ORM\Entity
 */
class GlpiSlalevelsTickets
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
     * @ORM\Column(name="slalevels_id", type="integer", nullable=false)
     */
    private $slalevelsId = '0';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date", type="datetime", nullable=true)
     */
    private $date;

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
     * @return GlpiSlalevelsTickets
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
     * Set slalevelsId
     *
     * @param integer $slalevelsId
     *
     * @return GlpiSlalevelsTickets
     */
    public function setSlalevelsId($slalevelsId)
    {
        $this->slalevelsId = $slalevelsId;

        return $this;
    }

    /**
     * Get slalevelsId
     *
     * @return integer
     */
    public function getSlalevelsId()
    {
        return $this->slalevelsId;
    }

    /**
     * Set date
     *
     * @param \DateTime $date
     *
     * @return GlpiSlalevelsTickets
     */
    public function setDate($date)
    {
        $this->date = $date;

        return $this;
    }

    /**
     * Get date
     *
     * @return \DateTime
     */
    public function getDate()
    {
        return $this->date;
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
