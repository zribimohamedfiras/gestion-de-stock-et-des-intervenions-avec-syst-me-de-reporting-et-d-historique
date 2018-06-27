<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * GlpiTicketsTickets
 *
 * @ORM\Table(name="glpi_tickets_tickets", indexes={@ORM\Index(name="unicity", columns={"tickets_id_1", "tickets_id_2"})})
 * @ORM\Entity
 */
class GlpiTicketsTickets
{
    /**
     * @var integer
     *
     * @ORM\Column(name="tickets_id_1", type="integer", nullable=false)
     */
    private $ticketsId1 = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="tickets_id_2", type="integer", nullable=false)
     */
    private $ticketsId2 = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="link", type="integer", nullable=false)
     */
    private $link = '1';

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;



    /**
     * Set ticketsId1
     *
     * @param integer $ticketsId1
     *
     * @return GlpiTicketsTickets
     */
    public function setTicketsId1($ticketsId1)
    {
        $this->ticketsId1 = $ticketsId1;

        return $this;
    }

    /**
     * Get ticketsId1
     *
     * @return integer
     */
    public function getTicketsId1()
    {
        return $this->ticketsId1;
    }

    /**
     * Set ticketsId2
     *
     * @param integer $ticketsId2
     *
     * @return GlpiTicketsTickets
     */
    public function setTicketsId2($ticketsId2)
    {
        $this->ticketsId2 = $ticketsId2;

        return $this;
    }

    /**
     * Get ticketsId2
     *
     * @return integer
     */
    public function getTicketsId2()
    {
        return $this->ticketsId2;
    }

    /**
     * Set link
     *
     * @param integer $link
     *
     * @return GlpiTicketsTickets
     */
    public function setLink($link)
    {
        $this->link = $link;

        return $this;
    }

    /**
     * Get link
     *
     * @return integer
     */
    public function getLink()
    {
        return $this->link;
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
