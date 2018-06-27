<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * GlpiProjects
 *
 * @ORM\Table(name="glpi_projects", indexes={@ORM\Index(name="name", columns={"name"}), @ORM\Index(name="code", columns={"code"}), @ORM\Index(name="entities_id", columns={"entities_id"}), @ORM\Index(name="is_recursive", columns={"is_recursive"}), @ORM\Index(name="projects_id", columns={"projects_id"}), @ORM\Index(name="projectstates_id", columns={"projectstates_id"}), @ORM\Index(name="projecttypes_id", columns={"projecttypes_id"}), @ORM\Index(name="priority", columns={"priority"}), @ORM\Index(name="date", columns={"date"}), @ORM\Index(name="date_mod", columns={"date_mod"}), @ORM\Index(name="users_id", columns={"users_id"}), @ORM\Index(name="groups_id", columns={"groups_id"}), @ORM\Index(name="plan_start_date", columns={"plan_start_date"}), @ORM\Index(name="plan_end_date", columns={"plan_end_date"}), @ORM\Index(name="real_start_date", columns={"real_start_date"}), @ORM\Index(name="real_end_date", columns={"real_end_date"}), @ORM\Index(name="percent_done", columns={"percent_done"}), @ORM\Index(name="show_on_global_gantt", columns={"show_on_global_gantt"}), @ORM\Index(name="date_creation", columns={"date_creation"})})
 * @ORM\Entity
 */
class GlpiProjects
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
     * @ORM\Column(name="code", type="string", length=255, nullable=true)
     */
    private $code;

    /**
     * @var integer
     *
     * @ORM\Column(name="priority", type="integer", nullable=false)
     */
    private $priority = '1';

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
     * @ORM\Column(name="projectstates_id", type="integer", nullable=false)
     */
    private $projectstatesId = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="projecttypes_id", type="integer", nullable=false)
     */
    private $projecttypesId = '0';

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
     * @var integer
     *
     * @ORM\Column(name="users_id", type="integer", nullable=false)
     */
    private $usersId = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="groups_id", type="integer", nullable=false)
     */
    private $groupsId = '0';

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
     * @ORM\Column(name="percent_done", type="integer", nullable=false)
     */
    private $percentDone = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="show_on_global_gantt", type="boolean", nullable=false)
     */
    private $showOnGlobalGantt = '0';

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
     * @var boolean
     *
     * @ORM\Column(name="is_deleted", type="boolean", nullable=false)
     */
    private $isDeleted = '0';

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
     * @return GlpiProjects
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
     * Set code
     *
     * @param string $code
     *
     * @return GlpiProjects
     */
    public function setCode($code)
    {
        $this->code = $code;

        return $this;
    }

    /**
     * Get code
     *
     * @return string
     */
    public function getCode()
    {
        return $this->code;
    }

    /**
     * Set priority
     *
     * @param integer $priority
     *
     * @return GlpiProjects
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
     * Set entitiesId
     *
     * @param integer $entitiesId
     *
     * @return GlpiProjects
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
     * @return GlpiProjects
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
     * @return GlpiProjects
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
     * Set projectstatesId
     *
     * @param integer $projectstatesId
     *
     * @return GlpiProjects
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
     * Set projecttypesId
     *
     * @param integer $projecttypesId
     *
     * @return GlpiProjects
     */
    public function setProjecttypesId($projecttypesId)
    {
        $this->projecttypesId = $projecttypesId;

        return $this;
    }

    /**
     * Get projecttypesId
     *
     * @return integer
     */
    public function getProjecttypesId()
    {
        return $this->projecttypesId;
    }

    /**
     * Set date
     *
     * @param \DateTime $date
     *
     * @return GlpiProjects
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
     * @return GlpiProjects
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
     * Set usersId
     *
     * @param integer $usersId
     *
     * @return GlpiProjects
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
     * Set groupsId
     *
     * @param integer $groupsId
     *
     * @return GlpiProjects
     */
    public function setGroupsId($groupsId)
    {
        $this->groupsId = $groupsId;

        return $this;
    }

    /**
     * Get groupsId
     *
     * @return integer
     */
    public function getGroupsId()
    {
        return $this->groupsId;
    }

    /**
     * Set planStartDate
     *
     * @param \DateTime $planStartDate
     *
     * @return GlpiProjects
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
     * @return GlpiProjects
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
     * @return GlpiProjects
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
     * @return GlpiProjects
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
     * Set percentDone
     *
     * @param integer $percentDone
     *
     * @return GlpiProjects
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
     * Set showOnGlobalGantt
     *
     * @param boolean $showOnGlobalGantt
     *
     * @return GlpiProjects
     */
    public function setShowOnGlobalGantt($showOnGlobalGantt)
    {
        $this->showOnGlobalGantt = $showOnGlobalGantt;

        return $this;
    }

    /**
     * Get showOnGlobalGantt
     *
     * @return boolean
     */
    public function getShowOnGlobalGantt()
    {
        return $this->showOnGlobalGantt;
    }

    /**
     * Set content
     *
     * @param string $content
     *
     * @return GlpiProjects
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
     * @return GlpiProjects
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
     * Set isDeleted
     *
     * @param boolean $isDeleted
     *
     * @return GlpiProjects
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
     * Set dateCreation
     *
     * @param \DateTime $dateCreation
     *
     * @return GlpiProjects
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
