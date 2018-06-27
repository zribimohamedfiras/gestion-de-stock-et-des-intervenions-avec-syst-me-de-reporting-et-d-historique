<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * GlpiTickets
 *
 * @ORM\Table(name="glpi_tickets", indexes={@ORM\Index(name="date", columns={"date"}), @ORM\Index(name="closedate", columns={"closedate"}), @ORM\Index(name="status", columns={"status"}), @ORM\Index(name="priority", columns={"priority"}), @ORM\Index(name="request_type", columns={"requesttypes_id"}), @ORM\Index(name="date_mod", columns={"date_mod"}), @ORM\Index(name="entities_id", columns={"entities_id"}), @ORM\Index(name="users_id_recipient", columns={"users_id_recipient"}), @ORM\Index(name="solvedate", columns={"solvedate"}), @ORM\Index(name="urgency", columns={"urgency"}), @ORM\Index(name="impact", columns={"impact"}), @ORM\Index(name="global_validation", columns={"global_validation"}), @ORM\Index(name="slts_tto_id", columns={"slts_tto_id"}), @ORM\Index(name="slts_ttr_id", columns={"slts_ttr_id"}), @ORM\Index(name="due_date", columns={"due_date"}), @ORM\Index(name="time_to_own", columns={"time_to_own"}), @ORM\Index(name="users_id_lastupdater", columns={"users_id_lastupdater"}), @ORM\Index(name="type", columns={"type"}), @ORM\Index(name="solutiontypes_id", columns={"solutiontypes_id"}), @ORM\Index(name="itilcategories_id", columns={"itilcategories_id"}), @ORM\Index(name="is_deleted", columns={"is_deleted"}), @ORM\Index(name="name", columns={"name"}), @ORM\Index(name="locations_id", columns={"locations_id"}), @ORM\Index(name="date_creation", columns={"date_creation"})})
 * @ORM\Entity
 */
class GlpiTickets
{
    /**
     * @var integer
     *
     * @ORM\Column(name="entities_id", type="integer", nullable=false)
     */
    private $entitiesId = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=255, nullable=true)
     */
    private $name;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date", type="datetime", nullable=true)
     */
    private $date;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="closedate", type="datetime", nullable=true)
     */
    private $closedate;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="solvedate", type="datetime", nullable=true)
     */
    private $solvedate;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_mod", type="datetime", nullable=true)
     */
    private $dateMod;

    /**
     * @var integer
     *
     * @ORM\Column(name="users_id_lastupdater", type="integer", nullable=false)
     */
    private $usersIdLastupdater = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="status", type="integer", nullable=false)
     */
    private $status = '1';

    /**
     * @var integer
     *
     * @ORM\Column(name="users_id_recipient", type="integer", nullable=false)
     */
    private $usersIdRecipient = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="requesttypes_id", type="integer", nullable=false)
     */
    private $requesttypesId = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="content", type="text", nullable=true)
     */
    private $content;

    /**
     * @var integer
     *
     * @ORM\Column(name="urgency", type="integer", nullable=false)
     */
    private $urgency = '1';

    /**
     * @var integer
     *
     * @ORM\Column(name="impact", type="integer", nullable=false)
     */
    private $impact = '1';

    /**
     * @var integer
     *
     * @ORM\Column(name="priority", type="integer", nullable=false)
     */
    private $priority = '1';

    /**
     * @var integer
     *
     * @ORM\Column(name="itilcategories_id", type="integer", nullable=false)
     */
    private $itilcategoriesId = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="type", type="integer", nullable=false)
     */
    private $type = '1';

    /**
     * @var integer
     *
     * @ORM\Column(name="solutiontypes_id", type="integer", nullable=false)
     */
    private $solutiontypesId = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="solution", type="text", nullable=true)
     */
    private $solution;

    /**
     * @var integer
     *
     * @ORM\Column(name="global_validation", type="integer", nullable=false)
     */
    private $globalValidation = '1';

    /**
     * @var integer
     *
     * @ORM\Column(name="slts_tto_id", type="integer", nullable=false)
     */
    private $sltsTtoId = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="slts_ttr_id", type="integer", nullable=false)
     */
    private $sltsTtrId = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="ttr_slalevels_id", type="integer", nullable=false)
     */
    private $ttrSlalevelsId = '0';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="due_date", type="datetime", nullable=true)
     */
    private $dueDate;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="time_to_own", type="datetime", nullable=true)
     */
    private $timeToOwn;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="begin_waiting_date", type="datetime", nullable=true)
     */
    private $beginWaitingDate;

    /**
     * @var integer
     *
     * @ORM\Column(name="sla_waiting_duration", type="integer", nullable=false)
     */
    private $slaWaitingDuration = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="waiting_duration", type="integer", nullable=false)
     */
    private $waitingDuration = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="close_delay_stat", type="integer", nullable=false)
     */
    private $closeDelayStat = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="solve_delay_stat", type="integer", nullable=false)
     */
    private $solveDelayStat = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="takeintoaccount_delay_stat", type="integer", nullable=false)
     */
    private $takeintoaccountDelayStat = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="actiontime", type="integer", nullable=false)
     */
    private $actiontime = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="is_deleted", type="boolean", nullable=false)
     */
    private $isDeleted = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="locations_id", type="integer", nullable=false)
     */
    private $locationsId = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="validation_percent", type="integer", nullable=false)
     */
    private $validationPercent = '0';

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
     * @return GlpiTickets
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
     * Set name
     *
     * @param string $name
     *
     * @return GlpiTickets
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
     * Set date
     *
     * @param \DateTime $date
     *
     * @return GlpiTickets
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
     * Set closedate
     *
     * @param \DateTime $closedate
     *
     * @return GlpiTickets
     */
    public function setClosedate($closedate)
    {
        $this->closedate = $closedate;

        return $this;
    }

    /**
     * Get closedate
     *
     * @return \DateTime
     */
    public function getClosedate()
    {
        return $this->closedate;
    }

    /**
     * Set solvedate
     *
     * @param \DateTime $solvedate
     *
     * @return GlpiTickets
     */
    public function setSolvedate($solvedate)
    {
        $this->solvedate = $solvedate;

        return $this;
    }

    /**
     * Get solvedate
     *
     * @return \DateTime
     */
    public function getSolvedate()
    {
        return $this->solvedate;
    }

    /**
     * Set dateMod
     *
     * @param \DateTime $dateMod
     *
     * @return GlpiTickets
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
     * Set usersIdLastupdater
     *
     * @param integer $usersIdLastupdater
     *
     * @return GlpiTickets
     */
    public function setUsersIdLastupdater($usersIdLastupdater)
    {
        $this->usersIdLastupdater = $usersIdLastupdater;

        return $this;
    }

    /**
     * Get usersIdLastupdater
     *
     * @return integer
     */
    public function getUsersIdLastupdater()
    {
        return $this->usersIdLastupdater;
    }

    /**
     * Set status
     *
     * @param integer $status
     *
     * @return GlpiTickets
     */
    public function setStatus($status)
    {
        $this->status = $status;

        return $this;
    }

    /**
     * Get status
     *
     * @return integer
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Set usersIdRecipient
     *
     * @param integer $usersIdRecipient
     *
     * @return GlpiTickets
     */
    public function setUsersIdRecipient($usersIdRecipient)
    {
        $this->usersIdRecipient = $usersIdRecipient;

        return $this;
    }

    /**
     * Get usersIdRecipient
     *
     * @return integer
     */
    public function getUsersIdRecipient()
    {
        return $this->usersIdRecipient;
    }

    /**
     * Set requesttypesId
     *
     * @param integer $requesttypesId
     *
     * @return GlpiTickets
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
     * Set content
     *
     * @param string $content
     *
     * @return GlpiTickets
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
     * Set urgency
     *
     * @param integer $urgency
     *
     * @return GlpiTickets
     */
    public function setUrgency($urgency)
    {
        $this->urgency = $urgency;

        return $this;
    }

    /**
     * Get urgency
     *
     * @return integer
     */
    public function getUrgency()
    {
        return $this->urgency;
    }

    /**
     * Set impact
     *
     * @param integer $impact
     *
     * @return GlpiTickets
     */
    public function setImpact($impact)
    {
        $this->impact = $impact;

        return $this;
    }

    /**
     * Get impact
     *
     * @return integer
     */
    public function getImpact()
    {
        return $this->impact;
    }

    /**
     * Set priority
     *
     * @param integer $priority
     *
     * @return GlpiTickets
     */
    public function setPriority($priority)
    {
        $this->priority = $priority;

        return $this;
    }

    /**
     * Get priority
     *
     * @return integer
     */
    public function getPriority()
    {
        return $this->priority;
    }

    /**
     * Set itilcategoriesId
     *
     * @param integer $itilcategoriesId
     *
     * @return GlpiTickets
     */
    public function setItilcategoriesId($itilcategoriesId)
    {
        $this->itilcategoriesId = $itilcategoriesId;

        return $this;
    }

    /**
     * Get itilcategoriesId
     *
     * @return integer
     */
    public function getItilcategoriesId()
    {
        return $this->itilcategoriesId;
    }

    /**
     * Set type
     *
     * @param integer $type
     *
     * @return GlpiTickets
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
     * Set solutiontypesId
     *
     * @param integer $solutiontypesId
     *
     * @return GlpiTickets
     */
    public function setSolutiontypesId($solutiontypesId)
    {
        $this->solutiontypesId = $solutiontypesId;

        return $this;
    }

    /**
     * Get solutiontypesId
     *
     * @return integer
     */
    public function getSolutiontypesId()
    {
        return $this->solutiontypesId;
    }

    /**
     * Set solution
     *
     * @param string $solution
     *
     * @return GlpiTickets
     */
    public function setSolution($solution)
    {
        $this->solution = $solution;

        return $this;
    }

    /**
     * Get solution
     *
     * @return string
     */
    public function getSolution()
    {
        return $this->solution;
    }

    /**
     * Set globalValidation
     *
     * @param integer $globalValidation
     *
     * @return GlpiTickets
     */
    public function setGlobalValidation($globalValidation)
    {
        $this->globalValidation = $globalValidation;

        return $this;
    }

    /**
     * Get globalValidation
     *
     * @return integer
     */
    public function getGlobalValidation()
    {
        return $this->globalValidation;
    }

    /**
     * Set sltsTtoId
     *
     * @param integer $sltsTtoId
     *
     * @return GlpiTickets
     */
    public function setSltsTtoId($sltsTtoId)
    {
        $this->sltsTtoId = $sltsTtoId;

        return $this;
    }

    /**
     * Get sltsTtoId
     *
     * @return integer
     */
    public function getSltsTtoId()
    {
        return $this->sltsTtoId;
    }

    /**
     * Set sltsTtrId
     *
     * @param integer $sltsTtrId
     *
     * @return GlpiTickets
     */
    public function setSltsTtrId($sltsTtrId)
    {
        $this->sltsTtrId = $sltsTtrId;

        return $this;
    }

    /**
     * Get sltsTtrId
     *
     * @return integer
     */
    public function getSltsTtrId()
    {
        return $this->sltsTtrId;
    }

    /**
     * Set ttrSlalevelsId
     *
     * @param integer $ttrSlalevelsId
     *
     * @return GlpiTickets
     */
    public function setTtrSlalevelsId($ttrSlalevelsId)
    {
        $this->ttrSlalevelsId = $ttrSlalevelsId;

        return $this;
    }

    /**
     * Get ttrSlalevelsId
     *
     * @return integer
     */
    public function getTtrSlalevelsId()
    {
        return $this->ttrSlalevelsId;
    }

    /**
     * Set dueDate
     *
     * @param \DateTime $dueDate
     *
     * @return GlpiTickets
     */
    public function setDueDate($dueDate)
    {
        $this->dueDate = $dueDate;

        return $this;
    }

    /**
     * Get dueDate
     *
     * @return \DateTime
     */
    public function getDueDate()
    {
        return $this->dueDate;
    }

    /**
     * Set timeToOwn
     *
     * @param \DateTime $timeToOwn
     *
     * @return GlpiTickets
     */
    public function setTimeToOwn($timeToOwn)
    {
        $this->timeToOwn = $timeToOwn;

        return $this;
    }

    /**
     * Get timeToOwn
     *
     * @return \DateTime
     */
    public function getTimeToOwn()
    {
        return $this->timeToOwn;
    }

    /**
     * Set beginWaitingDate
     *
     * @param \DateTime $beginWaitingDate
     *
     * @return GlpiTickets
     */
    public function setBeginWaitingDate($beginWaitingDate)
    {
        $this->beginWaitingDate = $beginWaitingDate;

        return $this;
    }

    /**
     * Get beginWaitingDate
     *
     * @return \DateTime
     */
    public function getBeginWaitingDate()
    {
        return $this->beginWaitingDate;
    }

    /**
     * Set slaWaitingDuration
     *
     * @param integer $slaWaitingDuration
     *
     * @return GlpiTickets
     */
    public function setSlaWaitingDuration($slaWaitingDuration)
    {
        $this->slaWaitingDuration = $slaWaitingDuration;

        return $this;
    }

    /**
     * Get slaWaitingDuration
     *
     * @return integer
     */
    public function getSlaWaitingDuration()
    {
        return $this->slaWaitingDuration;
    }

    /**
     * Set waitingDuration
     *
     * @param integer $waitingDuration
     *
     * @return GlpiTickets
     */
    public function setWaitingDuration($waitingDuration)
    {
        $this->waitingDuration = $waitingDuration;

        return $this;
    }

    /**
     * Get waitingDuration
     *
     * @return integer
     */
    public function getWaitingDuration()
    {
        return $this->waitingDuration;
    }

    /**
     * Set closeDelayStat
     *
     * @param integer $closeDelayStat
     *
     * @return GlpiTickets
     */
    public function setCloseDelayStat($closeDelayStat)
    {
        $this->closeDelayStat = $closeDelayStat;

        return $this;
    }

    /**
     * Get closeDelayStat
     *
     * @return integer
     */
    public function getCloseDelayStat()
    {
        return $this->closeDelayStat;
    }

    /**
     * Set solveDelayStat
     *
     * @param integer $solveDelayStat
     *
     * @return GlpiTickets
     */
    public function setSolveDelayStat($solveDelayStat)
    {
        $this->solveDelayStat = $solveDelayStat;

        return $this;
    }

    /**
     * Get solveDelayStat
     *
     * @return integer
     */
    public function getSolveDelayStat()
    {
        return $this->solveDelayStat;
    }

    /**
     * Set takeintoaccountDelayStat
     *
     * @param integer $takeintoaccountDelayStat
     *
     * @return GlpiTickets
     */
    public function setTakeintoaccountDelayStat($takeintoaccountDelayStat)
    {
        $this->takeintoaccountDelayStat = $takeintoaccountDelayStat;

        return $this;
    }

    /**
     * Get takeintoaccountDelayStat
     *
     * @return integer
     */
    public function getTakeintoaccountDelayStat()
    {
        return $this->takeintoaccountDelayStat;
    }

    /**
     * Set actiontime
     *
     * @param integer $actiontime
     *
     * @return GlpiTickets
     */
    public function setActiontime($actiontime)
    {
        $this->actiontime = $actiontime;

        return $this;
    }

    /**
     * Get actiontime
     *
     * @return integer
     */
    public function getActiontime()
    {
        return $this->actiontime;
    }

    /**
     * Set isDeleted
     *
     * @param boolean $isDeleted
     *
     * @return GlpiTickets
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
     * Set locationsId
     *
     * @param integer $locationsId
     *
     * @return GlpiTickets
     */
    public function setLocationsId($locationsId)
    {
        $this->locationsId = $locationsId;

        return $this;
    }

    /**
     * Get locationsId
     *
     * @return integer
     */
    public function getLocationsId()
    {
        return $this->locationsId;
    }

    /**
     * Set validationPercent
     *
     * @param integer $validationPercent
     *
     * @return GlpiTickets
     */
    public function setValidationPercent($validationPercent)
    {
        $this->validationPercent = $validationPercent;

        return $this;
    }

    /**
     * Get validationPercent
     *
     * @return integer
     */
    public function getValidationPercent()
    {
        return $this->validationPercent;
    }

    /**
     * Set dateCreation
     *
     * @param \DateTime $dateCreation
     *
     * @return GlpiTickets
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
