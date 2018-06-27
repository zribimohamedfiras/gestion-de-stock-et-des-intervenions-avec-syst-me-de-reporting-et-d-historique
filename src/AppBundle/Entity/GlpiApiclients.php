<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * GlpiApiclients
 *
 * @ORM\Table(name="glpi_apiclients", indexes={@ORM\Index(name="date_mod", columns={"date_mod"}), @ORM\Index(name="is_active", columns={"is_active"})})
 * @ORM\Entity
 */
class GlpiApiclients
{
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
     * @ORM\Column(name="name", type="string", length=255, nullable=true)
     */
    private $name;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_mod", type="datetime", nullable=true)
     */
    private $dateMod;

    /**
     * @var boolean
     *
     * @ORM\Column(name="is_active", type="boolean", nullable=false)
     */
    private $isActive = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="ipv4_range_start", type="bigint", nullable=true)
     */
    private $ipv4RangeStart;

    /**
     * @var integer
     *
     * @ORM\Column(name="ipv4_range_end", type="bigint", nullable=true)
     */
    private $ipv4RangeEnd;

    /**
     * @var string
     *
     * @ORM\Column(name="ipv6", type="string", length=255, nullable=true)
     */
    private $ipv6;

    /**
     * @var string
     *
     * @ORM\Column(name="app_token", type="string", length=255, nullable=true)
     */
    private $appToken;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="app_token_date", type="datetime", nullable=true)
     */
    private $appTokenDate;

    /**
     * @var boolean
     *
     * @ORM\Column(name="dolog_method", type="boolean", nullable=false)
     */
    private $dologMethod = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="comment", type="text", length=65535, nullable=true)
     */
    private $comment;

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;



    /**
     * Set entitiesId
     *
     * @param integer $entitiesId
     *
     * @return GlpiApiclients
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
     * @return GlpiApiclients
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
     * Set name
     *
     * @param string $name
     *
     * @return GlpiApiclients
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
     * Set dateMod
     *
     * @param \DateTime $dateMod
     *
     * @return GlpiApiclients
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
     * Set isActive
     *
     * @param boolean $isActive
     *
     * @return GlpiApiclients
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
     * Set ipv4RangeStart
     *
     * @param integer $ipv4RangeStart
     *
     * @return GlpiApiclients
     */
    public function setIpv4RangeStart($ipv4RangeStart)
    {
        $this->ipv4RangeStart = $ipv4RangeStart;

        return $this;
    }

    /**
     * Get ipv4RangeStart
     *
     * @return integer
     */
    public function getIpv4RangeStart()
    {
        return $this->ipv4RangeStart;
    }

    /**
     * Set ipv4RangeEnd
     *
     * @param integer $ipv4RangeEnd
     *
     * @return GlpiApiclients
     */
    public function setIpv4RangeEnd($ipv4RangeEnd)
    {
        $this->ipv4RangeEnd = $ipv4RangeEnd;

        return $this;
    }

    /**
     * Get ipv4RangeEnd
     *
     * @return integer
     */
    public function getIpv4RangeEnd()
    {
        return $this->ipv4RangeEnd;
    }

    /**
     * Set ipv6
     *
     * @param string $ipv6
     *
     * @return GlpiApiclients
     */
    public function setIpv6($ipv6)
    {
        $this->ipv6 = $ipv6;

        return $this;
    }

    /**
     * Get ipv6
     *
     * @return string
     */
    public function getIpv6()
    {
        return $this->ipv6;
    }

    /**
     * Set appToken
     *
     * @param string $appToken
     *
     * @return GlpiApiclients
     */
    public function setAppToken($appToken)
    {
        $this->appToken = $appToken;

        return $this;
    }

    /**
     * Get appToken
     *
     * @return string
     */
    public function getAppToken()
    {
        return $this->appToken;
    }

    /**
     * Set appTokenDate
     *
     * @param \DateTime $appTokenDate
     *
     * @return GlpiApiclients
     */
    public function setAppTokenDate($appTokenDate)
    {
        $this->appTokenDate = $appTokenDate;

        return $this;
    }

    /**
     * Get appTokenDate
     *
     * @return \DateTime
     */
    public function getAppTokenDate()
    {
        return $this->appTokenDate;
    }

    /**
     * Set dologMethod
     *
     * @param boolean $dologMethod
     *
     * @return GlpiApiclients
     */
    public function setDologMethod($dologMethod)
    {
        $this->dologMethod = $dologMethod;

        return $this;
    }

    /**
     * Get dologMethod
     *
     * @return boolean
     */
    public function getDologMethod()
    {
        return $this->dologMethod;
    }

    /**
     * Set comment
     *
     * @param string $comment
     *
     * @return GlpiApiclients
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
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }
}
