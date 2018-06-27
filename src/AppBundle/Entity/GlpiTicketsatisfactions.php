<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * GlpiTicketsatisfactions
 *
 * @ORM\Table(name="glpi_ticketsatisfactions", uniqueConstraints={@ORM\UniqueConstraint(name="tickets_id", columns={"tickets_id"})})
 * @ORM\Entity
 */
class GlpiTicketsatisfactions
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
     * @ORM\Column(name="type", type="integer", nullable=false)
     */
    private $type = '1';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_begin", type="datetime", nullable=true)
     */
    private $dateBegin;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_answered", type="datetime", nullable=true)
     */
    private $dateAnswered;

    /**
     * @var integer
     *
     * @ORM\Column(name="satisfaction", type="integer", nullable=true)
     */
    private $satisfaction;

    /**
     * @var string
     *
     * @ORM\Column(name="comment", type="text", length=65535, nullable=true)
     */
    private $comment;

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
     * @return GlpiTicketsatisfactions
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
     * Set type
     *
     * @param integer $type
     *
     * @return GlpiTicketsatisfactions
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
     * Set dateBegin
     *
     * @param \DateTime $dateBegin
     *
     * @return GlpiTicketsatisfactions
     */
    public function setDateBegin($dateBegin)
    {
        $this->dateBegin = $dateBegin;

        return $this;
    }

    /**
     * Get dateBegin
     *
     * @return \DateTime
     */
    public function getDateBegin()
    {
        return $this->dateBegin;
    }

    /**
     * Set dateAnswered
     *
     * @param \DateTime $dateAnswered
     *
     * @return GlpiTicketsatisfactions
     */
    public function setDateAnswered($dateAnswered)
    {
        $this->dateAnswered = $dateAnswered;

        return $this;
    }

    /**
     * Get dateAnswered
     *
     * @return \DateTime
     */
    public function getDateAnswered()
    {
        return $this->dateAnswered;
    }

    /**
     * Set satisfaction
     *
     * @param integer $satisfaction
     *
     * @return GlpiTicketsatisfactions
     */
    public function setSatisfaction($satisfaction)
    {
        $this->satisfaction = $satisfaction;

        return $this;
    }

    /**
     * Get satisfaction
     *
     * @return integer
     */
    public function getSatisfaction()
    {
        return $this->satisfaction;
    }

    /**
     * Set comment
     *
     * @param string $comment
     *
     * @return GlpiTicketsatisfactions
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
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }
}
