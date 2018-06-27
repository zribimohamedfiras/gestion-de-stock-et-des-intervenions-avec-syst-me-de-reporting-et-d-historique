<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * GlpiTicketfollowups
 *
 * @ORM\Table(name="glpi_ticketfollowups", indexes={@ORM\Index(name="date", columns={"date"}), @ORM\Index(name="date_mod", columns={"date_mod"}), @ORM\Index(name="users_id", columns={"users_id"}), @ORM\Index(name="tickets_id", columns={"tickets_id"}), @ORM\Index(name="is_private", columns={"is_private"}), @ORM\Index(name="requesttypes_id", columns={"requesttypes_id"})})
 * @ORM\Entity
 */
class GlpiTicketfollowups
{
    /**
     * @var integer
     *
     * @ORM\Column(name="tickets_id", type="integer", nullable=false)
     */
    private $ticketsId = '0';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date", type="datetime", nullable=true)
     */
    private $date;

    /**
     * @var integer
     *
     * @ORM\Column(name="users_id", type="integer", nullable=false)
     */
    private $usersId = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="content", type="text", nullable=true)
     */
    private $content;

    /**
     * @var boolean
     *
     * @ORM\Column(name="is_private", type="boolean", nullable=false)
     */
    private $isPrivate = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="requesttypes_id", type="integer", nullable=false)
     */
    private $requesttypesId = '0';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_mod", type="datetime", nullable=true)
     */
    private $dateMod;

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
     * @return GlpiTicketfollowups
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
     * Set date
     *
     * @param \DateTime $date
     *
     * @return GlpiTicketfollowups
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
     * Set usersId
     *
     * @param integer $usersId
     *
     * @return GlpiTicketfollowups
     */
    public function setUsersId($usersId)
    {
        $this->usersId = $usersId;

        return $this;
    }

    /**
     * Get usersId
     *
     * @return integer
     */
    public function getUsersId()
    {
        return $this->usersId;
    }

    /**
     * Set content
     *
     * @param string $content
     *
     * @return GlpiTicketfollowups
     */
    public function setContent($content)
    {
        $this->content = $content;

        return $this;
    }

    /**
     * Get content
     *
     * @return string
     */
    public function getContent()
    {
        return $this->content;
    }

    /**
     * Set isPrivate
     *
     * @param boolean $isPrivate
     *
     * @return GlpiTicketfollowups
     */
    public function setIsPrivate($isPrivate)
    {
        $this->isPrivate = $isPrivate;

        return $this;
    }

    /**
     * Get isPrivate
     *
     * @return boolean
     */
    public function getIsPrivate()
    {
        return $this->isPrivate;
    }

    /**
     * Set requesttypesId
     *
     * @param integer $requesttypesId
     *
     * @return GlpiTicketfollowups
     */
    public function setRequesttypesId($requesttypesId)
    {
        $this->requesttypesId = $requesttypesId;

        return $this;
    }

    /**
     * Get requesttypesId
     *
     * @return integer
     */
    public function getRequesttypesId()
    {
        return $this->requesttypesId;
    }

    /**
     * Set dateMod
     *
     * @param \DateTime $dateMod
     *
     * @return GlpiTicketfollowups
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
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }
}
