<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * GlpiProblems
 *
 * @ORM\Table(name="glpi_problems", indexes={@ORM\Index(name="name", columns={"name"}), @ORM\Index(name="entities_id", columns={"entities_id"}), @ORM\Index(name="is_recursive", columns={"is_recursive"}), @ORM\Index(name="is_deleted", columns={"is_deleted"}), @ORM\Index(name="date", columns={"date"}), @ORM\Index(name="closedate", columns={"closedate"}), @ORM\Index(name="status", columns={"status"}), @ORM\Index(name="priority", columns={"priority"}), @ORM\Index(name="date_mod", columns={"date_mod"}), @ORM\Index(name="itilcategories_id", columns={"itilcategories_id"}), @ORM\Index(name="users_id_recipient", columns={"users_id_recipient"}), @ORM\Index(name="solvedate", columns={"solvedate"}), @ORM\Index(name="solutiontypes_id", columns={"solutiontypes_id"}), @ORM\Index(name="urgency", columns={"urgency"}), @ORM\Index(name="impact", columns={"impact"}), @ORM\Index(name="due_date", columns={"due_date"}), @ORM\Index(name="users_id_lastupdater", columns={"users_id_lastupdater"}), @ORM\Index(name="date_creation", columns={"date_creation"})})
 * @ORM\Entity
 */
class GlpiProblems
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
     * @ORM\Column(name="causecontent", type="text", nullable=true)
     */
    private $causecontent;

    /**
     * @var string
     *
     * @ORM\Column(name="symptomcontent", type="text", nullable=true)
     */
    private $symptomcontent;

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
     * @return GlpiProblems
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
     * @return GlpiProblems
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
     * @return GlpiProblems
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
     * @return GlpiProblems
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
     * @return GlpiProblems
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
     * @return GlpiProblems
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
     * @return GlpiProblems
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
     * @return GlpiProblems
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
     * @return GlpiProblems
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
     * @return GlpiProblems
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
     * @return GlpiProblems
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
     * @return GlpiProblems
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
     * @return GlpiProblems
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
     * @return GlpiProblems
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
     * @return GlpiProblems
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
     * @return GlpiProblems
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
     * @return GlpiProblems
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
     * @return GlpiProblems
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
     * Set causecontent
     *
     * @param string $causecontent
     *
     * @return GlpiProblems
     */
    public function setCausecontent($causecontent)
    {
        $this->causecontent = $causecontent;

        return $this;
    }

    /**
     * Get causecontent
     *
     * @return string
     */
    public function getCausecontent()
    {
        return $this->causecontent;
    }

    /**
     * Set symptomcontent
     *
     * @param string $symptomcontent
     *
     * @return GlpiProblems
     */
    public function setSymptomcontent($symptomcontent)
    {
        $this->symptomcontent = $symptomcontent;

        return $this;
    }

    /**
     * Get symptomcontent
     *
     * @return string
     */
    public function getSymptomcontent()
    {
        return $this->symptomcontent;
    }

    /**
     * Set solutiontypesId
     *
     * @param integer $solutiontypesId
     *
     * @return GlpiProblems
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
     * @return GlpiProblems
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
     * @return GlpiProblems
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
     * @return GlpiProblems
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
     * @return GlpiProblems
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
     * @return GlpiProblems
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
     * @return GlpiProblems
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
     * @return GlpiProblems
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
