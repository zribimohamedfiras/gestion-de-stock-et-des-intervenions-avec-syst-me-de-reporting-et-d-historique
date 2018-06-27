<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * GlpiCalendarsegments
 *
 * @ORM\Table(name="glpi_calendarsegments", indexes={@ORM\Index(name="calendars_id", columns={"calendars_id"}), @ORM\Index(name="day", columns={"day"})})
 * @ORM\Entity
 */
class GlpiCalendarsegments
{
    /**
     * @var integer
     *
     * @ORM\Column(name="calendars_id", type="integer", nullable=false)
     */
    private $calendarsId = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="entities_id", type="integer", nullable=false)
     */
    private $entitiesId = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="is_recursive", type="boolean", nullable=false)
     */
    private $isRecursive = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="day", type="boolean", nullable=false)
     */
    private $day = '1';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="begin", type="time", nullable=true)
     */
    private $begin;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="end", type="time", nullable=true)
     */
    private $end;

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;



    /**
     * Set calendarsId
     *
     * @param integer $calendarsId
     *
     * @return GlpiCalendarsegments
     */
    public function setCalendarsId($calendarsId)
    {
        $this->calendarsId = $calendarsId;

        return $this;
    }

    /**
     * Get calendarsId
     *
     * @return integer
     */
    public function getCalendarsId()
    {
        return $this->calendarsId;
    }

    /**
     * Set entitiesId
     *
     * @param integer $entitiesId
     *
     * @return GlpiCalendarsegments
     */
    public function setEntitiesId($entitiesId)
    {
        $this->entitiesId = $entitiesId;

        return $this;
    }

    /**
     * Get entitiesId
     *
     * @return integer
     */
    public function getEntitiesId()
    {
        return $this->entitiesId;
    }

    /**
     * Set isRecursive
     *
     * @param boolean $isRecursive
     *
     * @return GlpiCalendarsegments
     */
    public function setIsRecursive($isRecursive)
    {
        $this->isRecursive = $isRecursive;

        return $this;
    }

    /**
     * Get isRecursive
     *
     * @return boolean
     */
    public function getIsRecursive()
    {
        return $this->isRecursive;
    }

    /**
     * Set day
     *
     * @param boolean $day
     *
     * @return GlpiCalendarsegments
     */
    public function setDay($day)
    {
        $this->day = $day;

        return $this;
    }

    /**
     * Get day
     *
     * @return boolean
     */
    public function getDay()
    {
        return $this->day;
    }

    /**
     * Set begin
     *
     * @param \DateTime $begin
     *
     * @return GlpiCalendarsegments
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
     * @return GlpiCalendarsegments
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
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }
}
