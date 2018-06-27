<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * GlpiReminders
 *
 * @ORM\Table(name="glpi_reminders", indexes={@ORM\Index(name="date", columns={"date"}), @ORM\Index(name="begin", columns={"begin"}), @ORM\Index(name="end", columns={"end"}), @ORM\Index(name="users_id", columns={"users_id"}), @ORM\Index(name="is_planned", columns={"is_planned"}), @ORM\Index(name="state", columns={"state"}), @ORM\Index(name="date_mod", columns={"date_mod"}), @ORM\Index(name="date_creation", columns={"date_creation"})})
 * @ORM\Entity
 */
class GlpiReminders
{
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
     * @ORM\Column(name="name", type="string", length=255, nullable=true)
     */
    private $name;

    /**
     * @var string
     *
     * @ORM\Column(name="text", type="text", length=65535, nullable=true)
     */
    private $text;

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
     * @var boolean
     *
     * @ORM\Column(name="is_planned", type="boolean", nullable=false)
     */
    private $isPlanned = '0';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_mod", type="datetime", nullable=true)
     */
    private $dateMod;

    /**
     * @var integer
     *
     * @ORM\Column(name="state", type="integer", nullable=false)
     */
    private $state = '0';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="begin_view_date", type="datetime", nullable=true)
     */
    private $beginViewDate;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="end_view_date", type="datetime", nullable=true)
     */
    private $endViewDate;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_creation", type="datetime", nullable=true)
     */
    private $dateCreation;

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;



    /**
     * Set date
     *
     * @param \DateTime $date
     *
     * @return GlpiReminders
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
     * @return GlpiReminders
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
     * Set name
     *
     * @param string $name
     *
     * @return GlpiReminders
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set text
     *
     * @param string $text
     *
     * @return GlpiReminders
     */
    public function setText($text)
    {
        $this->text = $text;

        return $this;
    }

    /**
     * Get text
     *
     * @return string
     */
    public function getText()
    {
        return $this->text;
    }

    /**
     * Set begin
     *
     * @param \DateTime $begin
     *
     * @return GlpiReminders
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
     * @return GlpiReminders
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
     * Set isPlanned
     *
     * @param boolean $isPlanned
     *
     * @return GlpiReminders
     */
    public function setIsPlanned($isPlanned)
    {
        $this->isPlanned = $isPlanned;

        return $this;
    }

    /**
     * Get isPlanned
     *
     * @return boolean
     */
    public function getIsPlanned()
    {
        return $this->isPlanned;
    }

    /**
     * Set dateMod
     *
     * @param \DateTime $dateMod
     *
     * @return GlpiReminders
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
     * Set state
     *
     * @param integer $state
     *
     * @return GlpiReminders
     */
    public function setState($state)
    {
        $this->state = $state;

        return $this;
    }

    /**
     * Get state
     *
     * @return integer
     */
    public function getState()
    {
        return $this->state;
    }

    /**
     * Set beginViewDate
     *
     * @param \DateTime $beginViewDate
     *
     * @return GlpiReminders
     */
    public function setBeginViewDate($beginViewDate)
    {
        $this->beginViewDate = $beginViewDate;

        return $this;
    }

    /**
     * Get beginViewDate
     *
     * @return \DateTime
     */
    public function getBeginViewDate()
    {
        return $this->beginViewDate;
    }

    /**
     * Set endViewDate
     *
     * @param \DateTime $endViewDate
     *
     * @return GlpiReminders
     */
    public function setEndViewDate($endViewDate)
    {
        $this->endViewDate = $endViewDate;

        return $this;
    }

    /**
     * Get endViewDate
     *
     * @return \DateTime
     */
    public function getEndViewDate()
    {
        return $this->endViewDate;
    }

    /**
     * Set dateCreation
     *
     * @param \DateTime $dateCreation
     *
     * @return GlpiReminders
     */
    public function setDateCreation($dateCreation)
    {
        $this->dateCreation = $dateCreation;

        return $this;
    }

    /**
     * Get dateCreation
     *
     * @return \DateTime
     */
    public function getDateCreation()
    {
        return $this->dateCreation;
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
