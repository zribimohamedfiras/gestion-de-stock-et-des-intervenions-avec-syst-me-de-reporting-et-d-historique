<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * GlpiSlalevelactions
 *
 * @ORM\Table(name="glpi_slalevelactions", indexes={@ORM\Index(name="slalevels_id", columns={"slalevels_id"})})
 * @ORM\Entity
 */
class GlpiSlalevelactions
{
    /**
     * @var integer
     *
     * @ORM\Column(name="slalevels_id", type="integer", nullable=false)
     */
    private $slalevelsId = '0';

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
     * Set slalevelsId
     *
     * @param integer $slalevelsId
     *
     * @return GlpiSlalevelactions
     */
    public function setSlalevelsId($slalevelsId)
    {
        $this->slalevelsId = $slalevelsId;

        return $this;
    }

    /**
     * Get slalevelsId
     *
     * @return integer
     */
    public function getSlalevelsId()
    {
        return $this->slalevelsId;
    }

    /**
     * Set actionType
     *
     * @param string $actionType
     *
     * @return GlpiSlalevelactions
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
     * @return GlpiSlalevelactions
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
     * @return GlpiSlalevelactions
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
