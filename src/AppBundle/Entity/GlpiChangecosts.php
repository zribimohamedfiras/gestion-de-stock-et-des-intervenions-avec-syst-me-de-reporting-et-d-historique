<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * GlpiChangecosts
 *
 * @ORM\Table(name="glpi_changecosts", indexes={@ORM\Index(name="name", columns={"name"}), @ORM\Index(name="changes_id", columns={"changes_id"}), @ORM\Index(name="begin_date", columns={"begin_date"}), @ORM\Index(name="end_date", columns={"end_date"}), @ORM\Index(name="entities_id", columns={"entities_id"}), @ORM\Index(name="is_recursive", columns={"is_recursive"}), @ORM\Index(name="budgets_id", columns={"budgets_id"})})
 * @ORM\Entity
 */
class GlpiChangecosts
{
    /**
     * @var integer
     *
     * @ORM\Column(name="changes_id", type="integer", nullable=false)
     */
    private $changesId = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=255, nullable=true)
     */
    private $name;

    /**
     * @var string
     *
     * @ORM\Column(name="comment", type="text", length=65535, nullable=true)
     */
    private $comment;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="begin_date", type="date", nullable=true)
     */
    private $beginDate;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="end_date", type="date", nullable=true)
     */
    private $endDate;

    /**
     * @var integer
     *
     * @ORM\Column(name="actiontime", type="integer", nullable=false)
     */
    private $actiontime = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="cost_time", type="decimal", precision=20, scale=4, nullable=false)
     */
    private $costTime = '0.0000';

    /**
     * @var string
     *
     * @ORM\Column(name="cost_fixed", type="decimal", precision=20, scale=4, nullable=false)
     */
    private $costFixed = '0.0000';

    /**
     * @var string
     *
     * @ORM\Column(name="cost_material", type="decimal", precision=20, scale=4, nullable=false)
     */
    private $costMaterial = '0.0000';

    /**
     * @var integer
     *
     * @ORM\Column(name="budgets_id", type="integer", nullable=false)
     */
    private $budgetsId = '0';

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
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;



    /**
     * Set changesId
     *
     * @param integer $changesId
     *
     * @return GlpiChangecosts
     */
    public function setChangesId($changesId)
    {
        $this->changesId = $changesId;

        return $this;
    }

    /**
     * Get changesId
     *
     * @return integer
     */
    public function getChangesId()
    {
        return $this->changesId;
    }

    /**
     * Set name
     *
     * @param string $name
     *
     * @return GlpiChangecosts
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
     * Set comment
     *
     * @param string $comment
     *
     * @return GlpiChangecosts
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
     * Set beginDate
     *
     * @param \DateTime $beginDate
     *
     * @return GlpiChangecosts
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
     * Set endDate
     *
     * @param \DateTime $endDate
     *
     * @return GlpiChangecosts
     */
    public function setEndDate($endDate)
    {
        $this->endDate = $endDate;

        return $this;
    }

    /**
     * Get endDate
     *
     * @return \DateTime
     */
    public function getEndDate()
    {
        return $this->endDate;
    }

    /**
     * Set actiontime
     *
     * @param integer $actiontime
     *
     * @return GlpiChangecosts
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
     * Set costTime
     *
     * @param string $costTime
     *
     * @return GlpiChangecosts
     */
    public function setCostTime($costTime)
    {
        $this->costTime = $costTime;

        return $this;
    }

    /**
     * Get costTime
     *
     * @return string
     */
    public function getCostTime()
    {
        return $this->costTime;
    }

    /**
     * Set costFixed
     *
     * @param string $costFixed
     *
     * @return GlpiChangecosts
     */
    public function setCostFixed($costFixed)
    {
        $this->costFixed = $costFixed;

        return $this;
    }

    /**
     * Get costFixed
     *
     * @return string
     */
    public function getCostFixed()
    {
        return $this->costFixed;
    }

    /**
     * Set costMaterial
     *
     * @param string $costMaterial
     *
     * @return GlpiChangecosts
     */
    public function setCostMaterial($costMaterial)
    {
        $this->costMaterial = $costMaterial;

        return $this;
    }

    /**
     * Get costMaterial
     *
     * @return string
     */
    public function getCostMaterial()
    {
        return $this->costMaterial;
    }

    /**
     * Set budgetsId
     *
     * @param integer $budgetsId
     *
     * @return GlpiChangecosts
     */
    public function setBudgetsId($budgetsId)
    {
        $this->budgetsId = $budgetsId;

        return $this;
    }

    /**
     * Get budgetsId
     *
     * @return integer
     */
    public function getBudgetsId()
    {
        return $this->budgetsId;
    }

    /**
     * Set entitiesId
     *
     * @param integer $entitiesId
     *
     * @return GlpiChangecosts
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
     * @return GlpiChangecosts
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
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }
}
