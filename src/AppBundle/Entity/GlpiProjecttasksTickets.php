<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * GlpiProjecttasksTickets
 *
 * @ORM\Table(name="glpi_projecttasks_tickets", uniqueConstraints={@ORM\UniqueConstraint(name="unicity", columns={"tickets_id", "projecttasks_id"})}, indexes={@ORM\Index(name="projects_id", columns={"projecttasks_id"})})
 * @ORM\Entity
 */
class GlpiProjecttasksTickets
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
     * @ORM\Column(name="projecttasks_id", type="integer", nullable=false)
     */
    private $projecttasksId = '0';

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
     * @return GlpiProjecttasksTickets
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
     * Set projecttasksId
     *
     * @param integer $projecttasksId
     *
     * @return GlpiProjecttasksTickets
     */
    public function setProjecttasksId($projecttasksId)
    {
        $this->projecttasksId = $projecttasksId;

        return $this;
    }

    /**
     * Get projecttasksId
     *
     * @return integer
     */
    public function getProjecttasksId()
    {
        return $this->projecttasksId;
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
