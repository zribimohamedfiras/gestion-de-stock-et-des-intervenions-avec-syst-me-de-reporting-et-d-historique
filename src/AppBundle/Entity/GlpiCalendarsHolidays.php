<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * GlpiCalendarsHolidays
 *
 * @ORM\Table(name="glpi_calendars_holidays", uniqueConstraints={@ORM\UniqueConstraint(name="unicity", columns={"calendars_id", "holidays_id"})}, indexes={@ORM\Index(name="holidays_id", columns={"holidays_id"})})
 * @ORM\Entity
 */
class GlpiCalendarsHolidays
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
     * @ORM\Column(name="holidays_id", type="integer", nullable=false)
     */
    private $holidaysId = '0';

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
     * @return GlpiCalendarsHolidays
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
     * Set holidaysId
     *
     * @param integer $holidaysId
     *
     * @return GlpiCalendarsHolidays
     */
    public function setHolidaysId($holidaysId)
    {
        $this->holidaysId = $holidaysId;

        return $this;
    }

    /**
     * Get holidaysId
     *
     * @return integer
     */
    public function getHolidaysId()
    {
        return $this->holidaysId;
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
