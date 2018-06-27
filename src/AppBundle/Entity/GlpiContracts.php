<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * GlpiContracts
 *
 * @ORM\Table(name="glpi_contracts", indexes={@ORM\Index(name="begin_date", columns={"begin_date"}), @ORM\Index(name="name", columns={"name"}), @ORM\Index(name="contracttypes_id", columns={"contracttypes_id"}), @ORM\Index(name="entities_id", columns={"entities_id"}), @ORM\Index(name="is_deleted", columns={"is_deleted"}), @ORM\Index(name="use_monday", columns={"use_monday"}), @ORM\Index(name="use_saturday", columns={"use_saturday"}), @ORM\Index(name="alert", columns={"alert"}), @ORM\Index(name="date_mod", columns={"date_mod"}), @ORM\Index(name="date_creation", columns={"date_creation"})})
 * @ORM\Entity
 */
class GlpiContracts
{
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
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=255, nullable=true)
     */
    private $name;

    /**
     * @var string
     *
     * @ORM\Column(name="num", type="string", length=255, nullable=true)
     */
    private $num;

    /**
     * @var integer
     *
     * @ORM\Column(name="contracttypes_id", type="integer", nullable=false)
     */
    private $contracttypesId = '0';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="begin_date", type="date", nullable=true)
     */
    private $beginDate;

    /**
     * @var integer
     *
     * @ORM\Column(name="duration", type="integer", nullable=false)
     */
    private $duration = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="notice", type="integer", nullable=false)
     */
    private $notice = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="periodicity", type="integer", nullable=false)
     */
    private $periodicity = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="billing", type="integer", nullable=false)
     */
    private $billing = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="comment", type="text", length=65535, nullable=true)
     */
    private $comment;

    /**
     * @var string
     *
     * @ORM\Column(name="accounting_number", type="string", length=255, nullable=true)
     */
    private $accountingNumber;

    /**
     * @var boolean
     *
     * @ORM\Column(name="is_deleted", type="boolean", nullable=false)
     */
    private $isDeleted = '0';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="week_begin_hour", type="time", nullable=false)
     */
    private $weekBeginHour = '00:00:00';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="week_end_hour", type="time", nullable=false)
     */
    private $weekEndHour = '00:00:00';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="saturday_begin_hour", type="time", nullable=false)
     */
    private $saturdayBeginHour = '00:00:00';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="saturday_end_hour", type="time", nullable=false)
     */
    private $saturdayEndHour = '00:00:00';

    /**
     * @var boolean
     *
     * @ORM\Column(name="use_saturday", type="boolean", nullable=false)
     */
    private $useSaturday = '0';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="monday_begin_hour", type="time", nullable=false)
     */
    private $mondayBeginHour = '00:00:00';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="monday_end_hour", type="time", nullable=false)
     */
    private $mondayEndHour = '00:00:00';

    /**
     * @var boolean
     *
     * @ORM\Column(name="use_monday", type="boolean", nullable=false)
     */
    private $useMonday = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="max_links_allowed", type="integer", nullable=false)
     */
    private $maxLinksAllowed = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="alert", type="integer", nullable=false)
     */
    private $alert = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="renewal", type="integer", nullable=false)
     */
    private $renewal = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="template_name", type="string", length=255, nullable=true)
     */
    private $templateName;

    /**
     * @var boolean
     *
     * @ORM\Column(name="is_template", type="boolean", nullable=false)
     */
    private $isTemplate = '0';

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
     * Set entitiesId
     *
     * @param integer $entitiesId
     *
     * @return GlpiContracts
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
     * @return GlpiContracts
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
     * Set name
     *
     * @param string $name
     *
     * @return GlpiContracts
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
     * Set num
     *
     * @param string $num
     *
     * @return GlpiContracts
     */
    public function setNum($num)
    {
        $this->num = $num;

        return $this;
    }

    /**
     * Get num
     *
     * @return string
     */
    public function getNum()
    {
        return $this->num;
    }

    /**
     * Set contracttypesId
     *
     * @param integer $contracttypesId
     *
     * @return GlpiContracts
     */
    public function setContracttypesId($contracttypesId)
    {
        $this->contracttypesId = $contracttypesId;

        return $this;
    }

    /**
     * Get contracttypesId
     *
     * @return integer
     */
    public function getContracttypesId()
    {
        return $this->contracttypesId;
    }

    /**
     * Set beginDate
     *
     * @param \DateTime $beginDate
     *
     * @return GlpiContracts
     */
    public function setBeginDate($beginDate)
    {
        $this->beginDate = $beginDate;

        return $this;
    }

    /**
     * Get beginDate
     *
     * @return \DateTime
     */
    public function getBeginDate()
    {
        return $this->beginDate;
    }

    /**
     * Set duration
     *
     * @param integer $duration
     *
     * @return GlpiContracts
     */
    public function setDuration($duration)
    {
        $this->duration = $duration;

        return $this;
    }

    /**
     * Get duration
     *
     * @return integer
     */
    public function getDuration()
    {
        return $this->duration;
    }

    /**
     * Set notice
     *
     * @param integer $notice
     *
     * @return GlpiContracts
     */
    public function setNotice($notice)
    {
        $this->notice = $notice;

        return $this;
    }

    /**
     * Get notice
     *
     * @return integer
     */
    public function getNotice()
    {
        return $this->notice;
    }

    /**
     * Set periodicity
     *
     * @param integer $periodicity
     *
     * @return GlpiContracts
     */
    public function setPeriodicity($periodicity)
    {
        $this->periodicity = $periodicity;

        return $this;
    }

    /**
     * Get periodicity
     *
     * @return integer
     */
    public function getPeriodicity()
    {
        return $this->periodicity;
    }

    /**
     * Set billing
     *
     * @param integer $billing
     *
     * @return GlpiContracts
     */
    public function setBilling($billing)
    {
        $this->billing = $billing;

        return $this;
    }

    /**
     * Get billing
     *
     * @return integer
     */
    public function getBilling()
    {
        return $this->billing;
    }

    /**
     * Set comment
     *
     * @param string $comment
     *
     * @return GlpiContracts
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
     * Set accountingNumber
     *
     * @param string $accountingNumber
     *
     * @return GlpiContracts
     */
    public function setAccountingNumber($accountingNumber)
    {
        $this->accountingNumber = $accountingNumber;

        return $this;
    }

    /**
     * Get accountingNumber
     *
     * @return string
     */
    public function getAccountingNumber()
    {
        return $this->accountingNumber;
    }

    /**
     * Set isDeleted
     *
     * @param boolean $isDeleted
     *
     * @return GlpiContracts
     */
    public function setIsDeleted($isDeleted)
    {
        $this->isDeleted = $isDeleted;

        return $this;
    }

    /**
     * Get isDeleted
     *
     * @return boolean
     */
    public function getIsDeleted()
    {
        return $this->isDeleted;
    }

    /**
     * Set weekBeginHour
     *
     * @param \DateTime $weekBeginHour
     *
     * @return GlpiContracts
     */
    public function setWeekBeginHour($weekBeginHour)
    {
        $this->weekBeginHour = $weekBeginHour;

        return $this;
    }

    /**
     * Get weekBeginHour
     *
     * @return \DateTime
     */
    public function getWeekBeginHour()
    {
        return $this->weekBeginHour;
    }

    /**
     * Set weekEndHour
     *
     * @param \DateTime $weekEndHour
     *
     * @return GlpiContracts
     */
    public function setWeekEndHour($weekEndHour)
    {
        $this->weekEndHour = $weekEndHour;

        return $this;
    }

    /**
     * Get weekEndHour
     *
     * @return \DateTime
     */
    public function getWeekEndHour()
    {
        return $this->weekEndHour;
    }

    /**
     * Set saturdayBeginHour
     *
     * @param \DateTime $saturdayBeginHour
     *
     * @return GlpiContracts
     */
    public function setSaturdayBeginHour($saturdayBeginHour)
    {
        $this->saturdayBeginHour = $saturdayBeginHour;

        return $this;
    }

    /**
     * Get saturdayBeginHour
     *
     * @return \DateTime
     */
    public function getSaturdayBeginHour()
    {
        return $this->saturdayBeginHour;
    }

    /**
     * Set saturdayEndHour
     *
     * @param \DateTime $saturdayEndHour
     *
     * @return GlpiContracts
     */
    public function setSaturdayEndHour($saturdayEndHour)
    {
        $this->saturdayEndHour = $saturdayEndHour;

        return $this;
    }

    /**
     * Get saturdayEndHour
     *
     * @return \DateTime
     */
    public function getSaturdayEndHour()
    {
        return $this->saturdayEndHour;
    }

    /**
     * Set useSaturday
     *
     * @param boolean $useSaturday
     *
     * @return GlpiContracts
     */
    public function setUseSaturday($useSaturday)
    {
        $this->useSaturday = $useSaturday;

        return $this;
    }

    /**
     * Get useSaturday
     *
     * @return boolean
     */
    public function getUseSaturday()
    {
        return $this->useSaturday;
    }

    /**
     * Set mondayBeginHour
     *
     * @param \DateTime $mondayBeginHour
     *
     * @return GlpiContracts
     */
    public function setMondayBeginHour($mondayBeginHour)
    {
        $this->mondayBeginHour = $mondayBeginHour;

        return $this;
    }

    /**
     * Get mondayBeginHour
     *
     * @return \DateTime
     */
    public function getMondayBeginHour()
    {
        return $this->mondayBeginHour;
    }

    /**
     * Set mondayEndHour
     *
     * @param \DateTime $mondayEndHour
     *
     * @return GlpiContracts
     */
    public function setMondayEndHour($mondayEndHour)
    {
        $this->mondayEndHour = $mondayEndHour;

        return $this;
    }

    /**
     * Get mondayEndHour
     *
     * @return \DateTime
     */
    public function getMondayEndHour()
    {
        return $this->mondayEndHour;
    }

    /**
     * Set useMonday
     *
     * @param boolean $useMonday
     *
     * @return GlpiContracts
     */
    public function setUseMonday($useMonday)
    {
        $this->useMonday = $useMonday;

        return $this;
    }

    /**
     * Get useMonday
     *
     * @return boolean
     */
    public function getUseMonday()
    {
        return $this->useMonday;
    }

    /**
     * Set maxLinksAllowed
     *
     * @param integer $maxLinksAllowed
     *
     * @return GlpiContracts
     */
    public function setMaxLinksAllowed($maxLinksAllowed)
    {
        $this->maxLinksAllowed = $maxLinksAllowed;

        return $this;
    }

    /**
     * Get maxLinksAllowed
     *
     * @return integer
     */
    public function getMaxLinksAllowed()
    {
        return $this->maxLinksAllowed;
    }

    /**
     * Set alert
     *
     * @param integer $alert
     *
     * @return GlpiContracts
     */
    public function setAlert($alert)
    {
        $this->alert = $alert;

        return $this;
    }

    /**
     * Get alert
     *
     * @return integer
     */
    public function getAlert()
    {
        return $this->alert;
    }

    /**
     * Set renewal
     *
     * @param integer $renewal
     *
     * @return GlpiContracts
     */
    public function setRenewal($renewal)
    {
        $this->renewal = $renewal;

        return $this;
    }

    /**
     * Get renewal
     *
     * @return integer
     */
    public function getRenewal()
    {
        return $this->renewal;
    }

    /**
     * Set templateName
     *
     * @param string $templateName
     *
     * @return GlpiContracts
     */
    public function setTemplateName($templateName)
    {
        $this->templateName = $templateName;

        return $this;
    }

    /**
     * Get templateName
     *
     * @return string
     */
    public function getTemplateName()
    {
        return $this->templateName;
    }

    /**
     * Set isTemplate
     *
     * @param boolean $isTemplate
     *
     * @return GlpiContracts
     */
    public function setIsTemplate($isTemplate)
    {
        $this->isTemplate = $isTemplate;

        return $this;
    }

    /**
     * Get isTemplate
     *
     * @return boolean
     */
    public function getIsTemplate()
    {
        return $this->isTemplate;
    }

    /**
     * Set dateMod
     *
     * @param \DateTime $dateMod
     *
     * @return GlpiContracts
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
     * @return GlpiContracts
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
