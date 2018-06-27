<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * GlpiChanges
 *
 * @ORM\Table(name="glpi_changes", indexes={@ORM\Index(name="name", columns={"name"}), @ORM\Index(name="entities_id", columns={"entities_id"}), @ORM\Index(name="is_recursive", columns={"is_recursive"}), @ORM\Index(name="is_deleted", columns={"is_deleted"}), @ORM\Index(name="date", columns={"date"}), @ORM\Index(name="closedate", columns={"closedate"}), @ORM\Index(name="status", columns={"status"}), @ORM\Index(name="priority", columns={"priority"}), @ORM\Index(name="date_mod", columns={"date_mod"}), @ORM\Index(name="itilcategories_id", columns={"itilcategories_id"}), @ORM\Index(name="users_id_recipient", columns={"users_id_recipient"}), @ORM\Index(name="solvedate", columns={"solvedate"}), @ORM\Index(name="solutiontypes_id", columns={"solutiontypes_id"}), @ORM\Index(name="urgency", columns={"urgency"}), @ORM\Index(name="impact", columns={"impact"}), @ORM\Index(name="due_date", columns={"due_date"}), @ORM\Index(name="global_validation", columns={"global_validation"}), @ORM\Index(name="users_id_lastupdater", columns={"users_id_lastupdater"}), @ORM\Index(name="date_creation", columns={"date_creation"})})
 * @ORM\Entity
 */
class GlpiChanges
{
    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=255, nullable=true)
     */
    private $name;

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
     * @ORM\Column(name="is_deleted", type="boolean", nullable=false)
     */
    private $isDeleted = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="status", type="integer", nullable=false)
     */
    private $status = '1';

    /**
     * @var string
     *
     * @ORM\Column(name="content", type="text", nullable=true)
     */
    private $content;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_mod", type="datetime", nullable=true)
     */
    private $dateMod;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date", type="datetime", nullable=true)
     */
    private $date;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="solvedate", type="datetime", nullable=true)
     */
    private $solvedate;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="closedate", type="datetime", nullable=true)
     */
    private $closedate;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="due_date", type="datetime", nullable=true)
     */
    private $dueDate;

    /**
     * @var integer
     *
     * @ORM\Column(name="users_id_recipient", type="integer", nullable=false)
     */
    private $usersIdRecipient = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="users_id_lastupdater", type="integer", nullable=false)
     */
    private $usersIdLastupdater = '0';

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
     * @var string
     *
     * @ORM\Column(name="impactcontent", type="text", nullable=true)
     */
    private $impactcontent;

    /**
     * @var string
     *
     * @ORM\Column(name="controlistcontent", type="text", nullable=true)
     */
    private $controlistcontent;

    /**
     * @var string
     *
     * @ORM\Column(name="rolloutplancontent", type="text", nullable=true)
     */
    private $rolloutplancontent;

    /**
     * @var string
     *
     * @ORM\Column(name="backoutplancontent", type="text", nullable=true)
     */
    private $backoutplancontent;

    /**
     * @var string
     *
     * @ORM\Column(name="checklistcontent", type="text", nullable=true)
     */
    private $checklistcontent;

    /**
     * @var integer
     *
     * @ORM\Column(name="global_validation", type="integer", nullable=false)
     */
    private $globalValidation = '1';

    /**
     * @var integer
     *
     * @ORM\Column(name="validation_percent", type="integer", nullable=false)
     */
    private $validationPercent = '0';

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
     * @ORM\Column(name="actiontime", type="integer", nullable=false)
     */
    private $actiontime = '0';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="begin_waiting_date", type="datetime", nullable=true)
     */
    private $beginWaitingDate;

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
     * Set name
     *
     * @param string $name
     *
     * @return GlpiChanges
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
     * Set entitiesId
     *
     * @param integer $entitiesId
     *
     * @return GlpiChanges
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
     * @return GlpiChanges
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
     * Set isDeleted
     *
     * @param boolean $isDeleted
     *
     * @return GlpiChanges
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
     * Set status
     *
     * @param integer $status
     *
     * @return GlpiChanges
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
     * Set content
     *
     * @param string $content
     *
     * @return GlpiChanges
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
     * Set dateMod
     *
     * @param \DateTime $dateMod
     *
     * @return GlpiChanges
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
     * Set date
     *
     * @param \DateTime $date
     *
     * @return GlpiChanges
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
     * Set solvedate
     *
     * @param \DateTime $solvedate
     *
     * @return GlpiChanges
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
     * Set closedate
     *
     * @param \DateTime $closedate
     *
     * @return GlpiChanges
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
     * Set dueDate
     *
     * @param \DateTime $dueDate
     *
     * @return GlpiChanges
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
     * Set usersIdRecipient
     *
     * @param integer $usersIdRecipient
     *
     * @return GlpiChanges
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
     * Set usersIdLastupdater
     *
     * @param integer $usersIdLastupdater
     *
     * @return GlpiChanges
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
     * Set urgency
     *
     * @param integer $urgency
     *
     * @return GlpiChanges
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
     * @return GlpiChanges
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
     * @return GlpiChanges
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
     * @return GlpiChanges
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
     * Set impactcontent
     *
     * @param string $impactcontent
     *
     * @return GlpiChanges
     */
    public function setImpactcontent($impactcontent)
    {
        $this->impactcontent = $impactcontent;

        return $this;
    }

    /**
     * Get impactcontent
     *
     * @return string
     */
    public function getImpactcontent()
    {
        return $this->impactcontent;
    }

    /**
     * Set controlistcontent
     *
     * @param string $controlistcontent
     *
     * @return GlpiChanges
     */
    public function setControlistcontent($controlistcontent)
    {
        $this->controlistcontent = $controlistcontent;

        return $this;
    }

    /**
     * Get controlistcontent
     *
     * @return string
     */
    public function getControlistcontent()
    {
        return $this->controlistcontent;
    }

    /**
     * Set rolloutplancontent
     *
     * @param string $rolloutplancontent
     *
     * @return GlpiChanges
     */
    public function setRolloutplancontent($rolloutplancontent)
    {
        $this->rolloutplancontent = $rolloutplancontent;

        return $this;
    }

    /**
     * Get rolloutplancontent
     *
     * @return string
     */
    public function getRolloutplancontent()
    {
        return $this->rolloutplancontent;
    }

    /**
     * Set backoutplancontent
     *
     * @param string $backoutplancontent
     *
     * @return GlpiChanges
     */
    public function setBackoutplancontent($backoutplancontent)
    {
        $this->backoutplancontent = $backoutplancontent;

        return $this;
    }

    /**
     * Get backoutplancontent
     *
     * @return string
     */
    public function getBackoutplancontent()
    {
        return $this->backoutplancontent;
    }

    /**
     * Set checklistcontent
     *
     * @param string $checklistcontent
     *
     * @return GlpiChanges
     */
    public function setChecklistcontent($checklistcontent)
    {
        $this->checklistcontent = $checklistcontent;

        return $this;
    }

    /**
     * Get checklistcontent
     *
     * @return string
     */
    public function getChecklistcontent()
    {
        return $this->checklistcontent;
    }

    /**
     * Set globalValidation
     *
     * @param integer $globalValidation
     *
     * @return GlpiChanges
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
     * Set validationPercent
     *
     * @param integer $validationPercent
     *
     * @return GlpiChanges
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
     * Set solutiontypesId
     *
     * @param integer $solutiontypesId
     *
     * @return GlpiChanges
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
     * @return GlpiChanges
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
     * Set actiontime
     *
     * @param integer $actiontime
     *
     * @return GlpiChanges
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
     * Set beginWaitingDate
     *
     * @param \DateTime $beginWaitingDate
     *
     * @return GlpiChanges
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
     * Set waitingDuration
     *
     * @param integer $waitingDuration
     *
     * @return GlpiChanges
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
     * @return GlpiChanges
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
     * @return GlpiChanges
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
     * Set dateCreation
     *
     * @param \DateTime $dateCreation
     *
     * @return GlpiChanges
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
