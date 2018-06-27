<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * GlpiReservations
 *
 * @ORM\Table(name="glpi_reservations", indexes={@ORM\Index(name="begin", columns={"begin"}), @ORM\Index(name="end", columns={"end"}), @ORM\Index(name="reservationitems_id", columns={"reservationitems_id"}), @ORM\Index(name="users_id", columns={"users_id"}), @ORM\Index(name="resagroup", columns={"reservationitems_id", "group"})})
 * @ORM\Entity
 */
class GlpiReservations
{
    /**
     * @var integer
     *
     * @ORM\Column(name="reservationitems_id", type="integer", nullable=false)
     */
    private $reservationitemsId = '0';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="begin", type="datetime", nullable=true)
     */
    private $begin;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="end", type="datetime", nullable=true)
     */
    private $end;

    /**
     * @var integer
     *
     * @ORM\Column(name="users_id", type="integer", nullable=false)
     */
    private $usersId = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="comment", type="text", length=65535, nullable=true)
     */
    private $comment;

    /**
     * @var integer
     *
     * @ORM\Column(name="group", type="integer", nullable=false)
     */
    private $group = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;



    /**
     * Set reservationitemsId
     *
     * @param integer $reservationitemsId
     *
     * @return GlpiReservations
     */
    public function setReservationitemsId($reservationitemsId)
    {
        $this->reservationitemsId = $reservationitemsId;

        return $this;
    }

    /**
     * Get reservationitemsId
     *
     * @return integer
     */
    public function getReservationitemsId()
    {
        return $this->reservationitemsId;
    }

    /**
     * Set begin
     *
     * @param \DateTime $begin
     *
     * @return GlpiReservations
     */
    public function setBegin($begin)
    {
        $this->begin = $begin;

        return $this;
    }

    /**
     * Get begin
     *
     * @return \DateTime
     */
    public function getBegin()
    {
        return $this->begin;
    }

    /**
     * Set end
     *
     * @param \DateTime $end
     *
     * @return GlpiReservations
     */
    public function setEnd($end)
    {
        $this->end = $end;

        return $this;
    }

    /**
     * Get end
     *
     * @return \DateTime
     */
    public function getEnd()
    {
        return $this->end;
    }

    /**
     * Set usersId
     *
     * @param integer $usersId
     *
     * @return GlpiReservations
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
     * Set comment
     *
     * @param string $comment
     *
     * @return GlpiReservations
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
     * Set group
     *
     * @param integer $group
     *
     * @return GlpiReservations
     */
    public function setGroup($group)
    {
        $this->group = $group;

        return $this;
    }

    /**
     * Get group
     *
     * @return integer
     */
    public function getGroup()
    {
        return $this->group;
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
