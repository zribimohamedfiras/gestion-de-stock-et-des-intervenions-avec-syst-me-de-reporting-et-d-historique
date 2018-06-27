<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * GlpiSlalevels
 *
 * @ORM\Table(name="glpi_slalevels", indexes={@ORM\Index(name="name", columns={"name"}), @ORM\Index(name="is_active", columns={"is_active"}), @ORM\Index(name="slts_id", columns={"slts_id"})})
 * @ORM\Entity
 */
class GlpiSlalevels
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
     * @ORM\Column(name="slts_id", type="integer", nullable=false)
     */
    private $sltsId = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="execution_time", type="integer", nullable=false)
     */
    private $executionTime;

    /**
     * @var boolean
     *
     * @ORM\Column(name="is_active", type="boolean", nullable=false)
     */
    private $isActive = '1';

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
     * @var string
     *
     * @ORM\Column(name="match", type="string", length=10, nullable=true)
     */
    private $match;

    /**
     * @var string
     *
     * @ORM\Column(name="uuid", type="string", length=255, nullable=true)
     */
    private $uuid;

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
     * @return GlpiSlalevels
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
     * Set sltsId
     *
     * @param integer $sltsId
     *
     * @return GlpiSlalevels
     */
    public function setSltsId($sltsId)
    {
        $this->sltsId = $sltsId;

        return $this;
    }

    /**
     * Get sltsId
     *
     * @return integer
     */
    public function getSltsId()
    {
        return $this->sltsId;
    }

    /**
     * Set executionTime
     *
     * @param integer $executionTime
     *
     * @return GlpiSlalevels
     */
    public function setExecutionTime($executionTime)
    {
        $this->executionTime = $executionTime;

        return $this;
    }

    /**
     * Get executionTime
     *
     * @return integer
     */
    public function getExecutionTime()
    {
        return $this->executionTime;
    }

    /**
     * Set isActive
     *
     * @param boolean $isActive
     *
     * @return GlpiSlalevels
     */
    public function setIsActive($isActive)
    {
        $this->isActive = $isActive;

        return $this;
    }

    /**
     * Get isActive
     *
     * @return boolean
     */
    public function getIsActive()
    {
        return $this->isActive;
    }

    /**
     * Set entitiesId
     *
     * @param integer $entitiesId
     *
     * @return GlpiSlalevels
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
     * @return GlpiSlalevels
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
     * Set match
     *
     * @param string $match
     *
     * @return GlpiSlalevels
     */
    public function setMatch($match)
    {
        $this->match = $match;

        return $this;
    }

    /**
     * Get match
     *
     * @return string
     */
    public function getMatch()
    {
        return $this->match;
    }

    /**
     * Set uuid
     *
     * @param string $uuid
     *
     * @return GlpiSlalevels
     */
    public function setUuid($uuid)
    {
        $this->uuid = $uuid;

        return $this;
    }

    /**
     * Get uuid
     *
     * @return string
     */
    public function getUuid()
    {
        return $this->uuid;
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
