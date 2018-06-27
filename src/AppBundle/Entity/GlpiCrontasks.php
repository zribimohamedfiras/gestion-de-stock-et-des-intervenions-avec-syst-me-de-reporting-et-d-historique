<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * GlpiCrontasks
 *
 * @ORM\Table(name="glpi_crontasks", uniqueConstraints={@ORM\UniqueConstraint(name="unicity", columns={"itemtype", "name"})}, indexes={@ORM\Index(name="mode", columns={"mode"}), @ORM\Index(name="date_mod", columns={"date_mod"}), @ORM\Index(name="date_creation", columns={"date_creation"})})
 * @ORM\Entity
 */
class GlpiCrontasks
{
    /**
     * @var string
     *
     * @ORM\Column(name="itemtype", type="string", length=100, nullable=false)
     */
    private $itemtype;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=150, nullable=false)
     */
    private $name;

    /**
     * @var integer
     *
     * @ORM\Column(name="frequency", type="integer", nullable=false)
     */
    private $frequency;

    /**
     * @var integer
     *
     * @ORM\Column(name="param", type="integer", nullable=true)
     */
    private $param;

    /**
     * @var integer
     *
     * @ORM\Column(name="state", type="integer", nullable=false)
     */
    private $state = '1';

    /**
     * @var integer
     *
     * @ORM\Column(name="mode", type="integer", nullable=false)
     */
    private $mode = '1';

    /**
     * @var integer
     *
     * @ORM\Column(name="allowmode", type="integer", nullable=false)
     */
    private $allowmode = '3';

    /**
     * @var integer
     *
     * @ORM\Column(name="hourmin", type="integer", nullable=false)
     */
    private $hourmin = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="hourmax", type="integer", nullable=false)
     */
    private $hourmax = '24';

    /**
     * @var integer
     *
     * @ORM\Column(name="logs_lifetime", type="integer", nullable=false)
     */
    private $logsLifetime = '30';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="lastrun", type="datetime", nullable=true)
     */
    private $lastrun;

    /**
     * @var integer
     *
     * @ORM\Column(name="lastcode", type="integer", nullable=true)
     */
    private $lastcode;

    /**
     * @var string
     *
     * @ORM\Column(name="comment", type="text", length=65535, nullable=true)
     */
    private $comment;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_mod", type="datetime", nullable=true)
     */
    private $dateMod;

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
     * Set itemtype
     *
     * @param string $itemtype
     *
     * @return GlpiCrontasks
     */
    public function setItemtype($itemtype)
    {
        $this->itemtype = $itemtype;

        return $this;
    }

    /**
     * Get itemtype
     *
     * @return string
     */
    public function getItemtype()
    {
        return $this->itemtype;
    }

    /**
     * Set name
     *
     * @param string $name
     *
     * @return GlpiCrontasks
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
     * Set frequency
     *
     * @param integer $frequency
     *
     * @return GlpiCrontasks
     */
    public function setFrequency($frequency)
    {
        $this->frequency = $frequency;

        return $this;
    }

    /**
     * Get frequency
     *
     * @return integer
     */
    public function getFrequency()
    {
        return $this->frequency;
    }

    /**
     * Set param
     *
     * @param integer $param
     *
     * @return GlpiCrontasks
     */
    public function setParam($param)
    {
        $this->param = $param;

        return $this;
    }

    /**
     * Get param
     *
     * @return integer
     */
    public function getParam()
    {
        return $this->param;
    }

    /**
     * Set state
     *
     * @param integer $state
     *
     * @return GlpiCrontasks
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
     * Set mode
     *
     * @param integer $mode
     *
     * @return GlpiCrontasks
     */
    public function setMode($mode)
    {
        $this->mode = $mode;

        return $this;
    }

    /**
     * Get mode
     *
     * @return integer
     */
    public function getMode()
    {
        return $this->mode;
    }

    /**
     * Set allowmode
     *
     * @param integer $allowmode
     *
     * @return GlpiCrontasks
     */
    public function setAllowmode($allowmode)
    {
        $this->allowmode = $allowmode;

        return $this;
    }

    /**
     * Get allowmode
     *
     * @return integer
     */
    public function getAllowmode()
    {
        return $this->allowmode;
    }

    /**
     * Set hourmin
     *
     * @param integer $hourmin
     *
     * @return GlpiCrontasks
     */
    public function setHourmin($hourmin)
    {
        $this->hourmin = $hourmin;

        return $this;
    }

    /**
     * Get hourmin
     *
     * @return integer
     */
    public function getHourmin()
    {
        return $this->hourmin;
    }

    /**
     * Set hourmax
     *
     * @param integer $hourmax
     *
     * @return GlpiCrontasks
     */
    public function setHourmax($hourmax)
    {
        $this->hourmax = $hourmax;

        return $this;
    }

    /**
     * Get hourmax
     *
     * @return integer
     */
    public function getHourmax()
    {
        return $this->hourmax;
    }

    /**
     * Set logsLifetime
     *
     * @param integer $logsLifetime
     *
     * @return GlpiCrontasks
     */
    public function setLogsLifetime($logsLifetime)
    {
        $this->logsLifetime = $logsLifetime;

        return $this;
    }

    /**
     * Get logsLifetime
     *
     * @return integer
     */
    public function getLogsLifetime()
    {
        return $this->logsLifetime;
    }

    /**
     * Set lastrun
     *
     * @param \DateTime $lastrun
     *
     * @return GlpiCrontasks
     */
    public function setLastrun($lastrun)
    {
        $this->lastrun = $lastrun;

        return $this;
    }

    /**
     * Get lastrun
     *
     * @return \DateTime
     */
    public function getLastrun()
    {
        return $this->lastrun;
    }

    /**
     * Set lastcode
     *
     * @param integer $lastcode
     *
     * @return GlpiCrontasks
     */
    public function setLastcode($lastcode)
    {
        $this->lastcode = $lastcode;

        return $this;
    }

    /**
     * Get lastcode
     *
     * @return integer
     */
    public function getLastcode()
    {
        return $this->lastcode;
    }

    /**
     * Set comment
     *
     * @param string $comment
     *
     * @return GlpiCrontasks
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
     * Set dateMod
     *
     * @param \DateTime $dateMod
     *
     * @return GlpiCrontasks
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
     * Set dateCreation
     *
     * @param \DateTime $dateCreation
     *
     * @return GlpiCrontasks
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
