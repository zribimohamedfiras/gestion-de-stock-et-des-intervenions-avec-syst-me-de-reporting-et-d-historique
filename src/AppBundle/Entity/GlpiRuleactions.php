<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * GlpiRuleactions
 *
 * @ORM\Table(name="glpi_ruleactions", indexes={@ORM\Index(name="rules_id", columns={"rules_id"}), @ORM\Index(name="field_value", columns={"field", "value"})})
 * @ORM\Entity
 */
class GlpiRuleactions
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
     * @ORM\Column(name="action_type", type="string", length=255, nullable=true)
     */
    private $actionType;

    /**
     * @var string
     *
     * @ORM\Column(name="field", type="string", length=255, nullable=true)
     */
    private $field;

    /**
     * @var string
     *
     * @ORM\Column(name="value", type="string", length=255, nullable=true)
     */
    private $value;

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
     * @return GlpiRuleactions
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
     * Set actionType
     *
     * @param string $actionType
     *
     * @return GlpiRuleactions
     */
    public function setActionType($actionType)
    {
        $this->actionType = $actionType;

        return $this;
    }

    /**
     * Get actionType
     *
     * @return string
     */
    public function getActionType()
    {
        return $this->actionType;
    }

    /**
     * Set field
     *
     * @param string $field
     *
     * @return GlpiRuleactions
     */
    public function setField($field)
    {
        $this->field = $field;

        return $this;
    }

    /**
     * Get field
     *
     * @return string
     */
    public function getField()
    {
        return $this->field;
    }

    /**
     * Set value
     *
     * @param string $value
     *
     * @return GlpiRuleactions
     */
    public function setValue($value)
    {
        $this->value = $value;

        return $this;
    }

    /**
     * Get value
     *
     * @return string
     */
    public function getValue()
    {
        return $this->value;
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
