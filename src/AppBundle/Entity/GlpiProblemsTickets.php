<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * GlpiProblemsTickets
 *
 * @ORM\Table(name="glpi_problems_tickets", uniqueConstraints={@ORM\UniqueConstraint(name="unicity", columns={"problems_id", "tickets_id"})}, indexes={@ORM\Index(name="tickets_id", columns={"tickets_id"})})
 * @ORM\Entity
 */
class GlpiProblemsTickets
{
    /**
     * @var integer
     *
     * @ORM\Column(name="problems_id", type="integer", nullable=false)
     */
    private $problemsId = '0';

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
     * Set problemsId
     *
     * @param integer $problemsId
     *
     * @return GlpiProblemsTickets
     */
    public function setProblemsId($problemsId)
    {
        $this->problemsId = $problemsId;

        return $this;
    }

    /**
     * Get problemsId
     *
     * @return integer
     */
    public function getProblemsId()
    {
        return $this->problemsId;
    }

    /**
     * Set ticketsId
     *
     * @param integer $ticketsId
     *
     * @return GlpiProblemsTickets
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
