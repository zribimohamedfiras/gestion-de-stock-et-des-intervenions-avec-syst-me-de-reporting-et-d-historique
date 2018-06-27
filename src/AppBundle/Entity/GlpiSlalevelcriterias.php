<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * GlpiSlalevelcriterias
 *
 * @ORM\Table(name="glpi_slalevelcriterias", indexes={@ORM\Index(name="slalevels_id", columns={"slalevels_id"}), @ORM\Index(name="condition", columns={"condition"})})
 * @ORM\Entity
 */
class GlpiSlalevelcriterias
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
     * Set slalevelsId
     *
     * @param integer $slalevelsId
     *
     * @return GlpiSlalevelcriterias
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
     * Set criteria
     *
     * @param string $criteria
     *
     * @return GlpiSlalevelcriterias
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
     * @return GlpiSlalevelcriterias
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
     * @return GlpiSlalevelcriterias
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
