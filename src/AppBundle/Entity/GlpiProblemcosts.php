<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * GlpiProblemcosts
 *
 * @ORM\Table(name="glpi_problemcosts", indexes={@ORM\Index(name="name", columns={"name"}), @ORM\Index(name="problems_id", columns={"problems_id"}), @ORM\Index(name="begin_date", columns={"begin_date"}), @ORM\Index(name="end_date", columns={"end_date"}), @ORM\Index(name="entities_id", columns={"entities_id"}), @ORM\Index(name="budgets_id", columns={"budgets_id"})})
 * @ORM\Entity
 */
class GlpiProblemcosts
{
    /**
     * @var integer
     *
     * @ORM\Column(name="problems_id", type="integer", nullable=false)
     */
    private $problemsId = '0';

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
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;



    /**
     * Set problemsId
     *
     * @param integer $problemsId
     *
     * @return GlpiProblemcosts
     */
    public function setProblemsId($problemsId)
    {
        $this->problemsId = $problemsId;

        return $this;
    }

    /**
     * Get problemsId
     *
     * @return integer
     */
    public function getProblemsId()
    {
        return $this->problemsId;
    }

    /**
     * Set name
     *
     * @param string $name
     *
     * @return GlpiProblemcosts
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
     * @return GlpiProblemcosts
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
     * @return GlpiProblemcosts
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
     * @return GlpiProblemcosts
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
     * @return GlpiProblemcosts
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
     * @return GlpiProblemcosts
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
     * @return GlpiProblemcosts
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
     * @return GlpiProblemcosts
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
     * @return GlpiProblemcosts
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
     * @return GlpiProblemcosts
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
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }
}
