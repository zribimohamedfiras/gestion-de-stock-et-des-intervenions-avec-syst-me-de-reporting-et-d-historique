<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * GlpiRulecriterias
 *
 * @ORM\Table(name="glpi_rulecriterias", indexes={@ORM\Index(name="rules_id", columns={"rules_id"}), @ORM\Index(name="condition", columns={"condition"})})
 * @ORM\Entity
 */
class GlpiRulecriterias
{
    /**
     * @var integer
     *
     * @ORM\Column(name="rules_id", type="integer", nullable=false)
     */
    private $rulesId = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="criteria", type="string", length=255, nullable=true)
     */
    private $criteria;

    /**
     * @var integer
     *
     * @ORM\Column(name="condition", type="integer", nullable=false)
     */
    private $condition = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="pattern", type="string", length=255, nullable=true)
     */
    private $pattern;

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;



    /**
     * Set rulesId
     *
     * @param integer $rulesId
     *
     * @return GlpiRulecriterias
     */
    public function setRulesId($rulesId)
    {
        $this->rulesId = $rulesId;

        return $this;
    }

    /**
     * Get rulesId
     *
     * @return integer
     */
    public function getRulesId()
    {
        return $this->rulesId;
    }

    /**
     * Set criteria
     *
     * @param string $criteria
     *
     * @return GlpiRulecriterias
     */
    public function setCriteria($criteria)
    {
        $this->criteria = $criteria;

        return $this;
    }

    /**
     * Get criteria
     *
     * @return string
     */
    public function getCriteria()
    {
        return $this->criteria;
    }

    /**
     * Set condition
     *
     * @param integer $condition
     *
     * @return GlpiRulecriterias
     */
    public function setCondition($condition)
    {
        $this->condition = $condition;

        return $this;
    }

    /**
     * Get condition
     *
     * @return integer
     */
    public function getCondition()
    {
        return $this->condition;
    }

    /**
     * Set pattern
     *
     * @param string $pattern
     *
     * @return GlpiRulecriterias
     */
    public function setPattern($pattern)
    {
        $this->pattern = $pattern;

        return $this;
    }

    /**
     * Get pattern
     *
     * @return string
     */
    public function getPattern()
    {
        return $this->pattern;
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
