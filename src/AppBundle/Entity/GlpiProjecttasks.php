<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * GlpiProjecttasks
 *
 * @ORM\Table(name="glpi_projecttasks", indexes={@ORM\Index(name="name", columns={"name"}), @ORM\Index(name="entities_id", columns={"entities_id"}), @ORM\Index(name="is_recursive", columns={"is_recursive"}), @ORM\Index(name="projects_id", columns={"projects_id"}), @ORM\Index(name="projecttasks_id", columns={"projecttasks_id"}), @ORM\Index(name="date", columns={"date"}), @ORM\Index(name="date_mod", columns={"date_mod"}), @ORM\Index(name="users_id", columns={"users_id"}), @ORM\Index(name="plan_start_date", columns={"plan_start_date"}), @ORM\Index(name="plan_end_date", columns={"plan_end_date"}), @ORM\Index(name="real_start_date", columns={"real_start_date"}), @ORM\Index(name="real_end_date", columns={"real_end_date"}), @ORM\Index(name="percent_done", columns={"percent_done"}), @ORM\Index(name="projectstates_id", columns={"projectstates_id"}), @ORM\Index(name="projecttasktypes_id", columns={"projecttasktypes_id"}), @ORM\Index(name="is_milestone", columns={"is_milestone"})})
 * @ORM\Entity
 */
class GlpiProjecttasks
{
    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=255, nullable=true)
     */
    private $name;

    /**
     * @var string
     *
     * @ORM\Column(name="content", type="text", nullable=true)
     */
    private $content;

    /**
     * @var string
     *
     * @ORM\Column(name="comment", type="text", nullable=true)
     */
    private $comment;

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
     * @var integer
     *
     * @ORM\Column(name="projects_id", type="integer", nullable=false)
     */
    private $projectsId = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="projecttasks_id", type="integer", nullable=false)
     */
    private $projecttasksId = '0';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date", type="datetime", nullable=true)
     */
    private $date;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_mod", type="datetime", nullable=true)
     */
    private $dateMod;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="plan_start_date", type="datetime", nullable=true)
     */
    private $planStartDate;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="plan_end_date", type="datetime", nullable=true)
     */
    private $planEndDate;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="real_start_date", type="datetime", nullable=true)
     */
    private $realStartDate;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="real_end_date", type="datetime", nullable=true)
     */
    private $realEndDate;

    /**
     * @var integer
     *
     * @ORM\Column(name="planned_duration", type="integer", nullable=false)
     */
    private $plannedDuration = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="effective_duration", type="integer", nullable=false)
     */
    private $effectiveDuration = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="projectstates_id", type="integer", nullable=false)
     */
    private $projectstatesId = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="projecttasktypes_id", type="integer", nullable=false)
     */
    private $projecttasktypesId = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="users_id", type="integer", nullable=false)
     */
    private $usersId = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="percent_done", type="integer", nullable=false)
     */
    private $percentDone = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="is_milestone", type="boolean", nullable=false)
     */
    private $isMilestone = '0';

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
     * @return GlpiProjecttasks
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
     * Set content
     *
     * @param string $content
     *
     * @return GlpiProjecttasks
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
     * Set comment
     *
     * @param string $comment
     *
     * @return GlpiProjecttasks
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
     * Set entitiesId
     *
     * @param integer $entitiesId
     *
     * @return GlpiProjecttasks
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
     * @return GlpiProjecttasks
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
     * Set projectsId
     *
     * @param integer $projectsId
     *
     * @return GlpiProjecttasks
     */
    public function setProjectsId($projectsId)
    {
        $this->projectsId = $projectsId;

        return $this;
    }

    /**
     * Get projectsId
     *
     * @return integer
     */
    public function getProjectsId()
    {
        return $this->projectsId;
    }

    /**
     * Set projecttasksId
     *
     * @param integer $projecttasksId
     *
     * @return GlpiProjecttasks
     */
    public function setProjecttasksId($projecttasksId)
    {
        $this->projecttasksId = $projecttasksId;

        return $this;
    }

    /**
     * Get projecttasksId
     *
     * @return integer
     */
    public function getProjecttasksId()
    {
        return $this->projecttasksId;
    }

    /**
     * Set date
     *
     * @param \DateTime $date
     *
     * @return GlpiProjecttasks
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
     * Set dateMod
     *
     * @param \DateTime $dateMod
     *
     * @return GlpiProjecttasks
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
     * Set planStartDate
     *
     * @param \DateTime $planStartDate
     *
     * @return GlpiProjecttasks
     */
    public function setPlanStartDate($planStartDate)
    {
        $this->planStartDate = $planStartDate;

        return $this;
    }

    /**
     * Get planStartDate
     *
     * @return \DateTime
     */
    public function getPlanStartDate()
    {
        return $this->planStartDate;
    }

    /**
     * Set planEndDate
     *
     * @param \DateTime $planEndDate
     *
     * @return GlpiProjecttasks
     */
    public function setPlanEndDate($planEndDate)
    {
        $this->planEndDate = $planEndDate;

        return $this;
    }

    /**
     * Get planEndDate
     *
     * @return \DateTime
     */
    public function getPlanEndDate()
    {
        return $this->planEndDate;
    }

    /**
     * Set realStartDate
     *
     * @param \DateTime $realStartDate
     *
     * @return GlpiProjecttasks
     */
    public function setRealStartDate($realStartDate)
    {
        $this->realStartDate = $realStartDate;

        return $this;
    }

    /**
     * Get realStartDate
     *
     * @return \DateTime
     */
    public function getRealStartDate()
    {
        return $this->realStartDate;
    }

    /**
     * Set realEndDate
     *
     * @param \DateTime $realEndDate
     *
     * @return GlpiProjecttasks
     */
    public function setRealEndDate($realEndDate)
    {
        $this->realEndDate = $realEndDate;

        return $this;
    }

    /**
     * Get realEndDate
     *
     * @return \DateTime
     */
    public function getRealEndDate()
    {
        return $this->realEndDate;
    }

    /**
     * Set plannedDuration
     *
     * @param integer $plannedDuration
     *
     * @return GlpiProjecttasks
     */
    public function setPlannedDuration($plannedDuration)
    {
        $this->plannedDuration = $plannedDuration;

        return $this;
    }

    /**
     * Get plannedDuration
     *
     * @return integer
     */
    public function getPlannedDuration()
    {
        return $this->plannedDuration;
    }

    /**
     * Set effectiveDuration
     *
     * @param integer $effectiveDuration
     *
     * @return GlpiProjecttasks
     */
    public function setEffectiveDuration($effectiveDuration)
    {
        $this->effectiveDuration = $effectiveDuration;

        return $this;
    }

    /**
     * Get effectiveDuration
     *
     * @return integer
     */
    public function getEffectiveDuration()
    {
        return $this->effectiveDuration;
    }

    /**
     * Set projectstatesId
     *
     * @param integer $projectstatesId
     *
     * @return GlpiProjecttasks
     */
    public function setProjectstatesId($projectstatesId)
    {
        $this->projectstatesId = $projectstatesId;

        return $this;
    }

    /**
     * Get projectstatesId
     *
     * @return integer
     */
    public function getProjectstatesId()
    {
        return $this->projectstatesId;
    }

    /**
     * Set projecttasktypesId
     *
     * @param integer $projecttasktypesId
     *
     * @return GlpiProjecttasks
     */
    public function setProjecttasktypesId($projecttasktypesId)
    {
        $this->projecttasktypesId = $projecttasktypesId;

        return $this;
    }

    /**
     * Get projecttasktypesId
     *
     * @return integer
     */
    public function getProjecttasktypesId()
    {
        return $this->projecttasktypesId;
    }

    /**
     * Set usersId
     *
     * @param integer $usersId
     *
     * @return GlpiProjecttasks
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
     * Set percentDone
     *
     * @param integer $percentDone
     *
     * @return GlpiProjecttasks
     */
    public function setPercentDone($percentDone)
    {
        $this->percentDone = $percentDone;

        return $this;
    }

    /**
     * Get percentDone
     *
     * @return integer
     */
    public function getPercentDone()
    {
        return $this->percentDone;
    }

    /**
     * Set isMilestone
     *
     * @param boolean $isMilestone
     *
     * @return GlpiProjecttasks
     */
    public function setIsMilestone($isMilestone)
    {
        $this->isMilestone = $isMilestone;

        return $this;
    }

    /**
     * Get isMilestone
     *
     * @return boolean
     */
    public function getIsMilestone()
    {
        return $this->isMilestone;
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
