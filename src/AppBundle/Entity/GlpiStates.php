<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * GlpiStates
 *
 * @ORM\Table(name="glpi_states", indexes={@ORM\Index(name="name", columns={"name"}), @ORM\Index(name="unicity", columns={"states_id", "name"}), @ORM\Index(name="is_visible_computer", columns={"is_visible_computer"}), @ORM\Index(name="is_visible_monitor", columns={"is_visible_monitor"}), @ORM\Index(name="is_visible_networkequipment", columns={"is_visible_networkequipment"}), @ORM\Index(name="is_visible_peripheral", columns={"is_visible_peripheral"}), @ORM\Index(name="is_visible_phone", columns={"is_visible_phone"}), @ORM\Index(name="is_visible_printer", columns={"is_visible_printer"}), @ORM\Index(name="is_visible_softwareversion", columns={"is_visible_softwareversion"}), @ORM\Index(name="is_visible_softwarelicense", columns={"is_visible_softwarelicense"}), @ORM\Index(name="date_mod", columns={"date_mod"}), @ORM\Index(name="date_creation", columns={"date_creation"})})
 * @ORM\Entity
 */
class GlpiStates
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
     * @ORM\Column(name="comment", type="text", length=65535, nullable=true)
     */
    private $comment;

    /**
     * @var integer
     *
     * @ORM\Column(name="states_id", type="integer", nullable=false)
     */
    private $statesId = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="completename", type="text", length=65535, nullable=true)
     */
    private $completename;

    /**
     * @var integer
     *
     * @ORM\Column(name="level", type="integer", nullable=false)
     */
    private $level = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="ancestors_cache", type="text", nullable=true)
     */
    private $ancestorsCache;

    /**
     * @var string
     *
     * @ORM\Column(name="sons_cache", type="text", nullable=true)
     */
    private $sonsCache;

    /**
     * @var boolean
     *
     * @ORM\Column(name="is_visible_computer", type="boolean", nullable=false)
     */
    private $isVisibleComputer = '1';

    /**
     * @var boolean
     *
     * @ORM\Column(name="is_visible_monitor", type="boolean", nullable=false)
     */
    private $isVisibleMonitor = '1';

    /**
     * @var boolean
     *
     * @ORM\Column(name="is_visible_networkequipment", type="boolean", nullable=false)
     */
    private $isVisibleNetworkequipment = '1';

    /**
     * @var boolean
     *
     * @ORM\Column(name="is_visible_peripheral", type="boolean", nullable=false)
     */
    private $isVisiblePeripheral = '1';

    /**
     * @var boolean
     *
     * @ORM\Column(name="is_visible_phone", type="boolean", nullable=false)
     */
    private $isVisiblePhone = '1';

    /**
     * @var boolean
     *
     * @ORM\Column(name="is_visible_printer", type="boolean", nullable=false)
     */
    private $isVisiblePrinter = '1';

    /**
     * @var boolean
     *
     * @ORM\Column(name="is_visible_softwareversion", type="boolean", nullable=false)
     */
    private $isVisibleSoftwareversion = '1';

    /**
     * @var boolean
     *
     * @ORM\Column(name="is_visible_softwarelicense", type="boolean", nullable=false)
     */
    private $isVisibleSoftwarelicense = '1';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_mod", type="datetime", nullable=true)
     */
    private $dateMod;

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
     * @return GlpiStates
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
     * Set entitiesId
     *
     * @param integer $entitiesId
     *
     * @return GlpiStates
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
     * @return GlpiStates
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
     * Set comment
     *
     * @param string $comment
     *
     * @return GlpiStates
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
     * Set statesId
     *
     * @param integer $statesId
     *
     * @return GlpiStates
     */
    public function setStatesId($statesId)
    {
        $this->statesId = $statesId;

        return $this;
    }

    /**
     * Get statesId
     *
     * @return integer
     */
    public function getStatesId()
    {
        return $this->statesId;
    }

    /**
     * Set completename
     *
     * @param string $completename
     *
     * @return GlpiStates
     */
    public function setCompletename($completename)
    {
        $this->completename = $completename;

        return $this;
    }

    /**
     * Get completename
     *
     * @return string
     */
    public function getCompletename()
    {
        return $this->completename;
    }

    /**
     * Set level
     *
     * @param integer $level
     *
     * @return GlpiStates
     */
    public function setLevel($level)
    {
        $this->level = $level;

        return $this;
    }

    /**
     * Get level
     *
     * @return integer
     */
    public function getLevel()
    {
        return $this->level;
    }

    /**
     * Set ancestorsCache
     *
     * @param string $ancestorsCache
     *
     * @return GlpiStates
     */
    public function setAncestorsCache($ancestorsCache)
    {
        $this->ancestorsCache = $ancestorsCache;

        return $this;
    }

    /**
     * Get ancestorsCache
     *
     * @return string
     */
    public function getAncestorsCache()
    {
        return $this->ancestorsCache;
    }

    /**
     * Set sonsCache
     *
     * @param string $sonsCache
     *
     * @return GlpiStates
     */
    public function setSonsCache($sonsCache)
    {
        $this->sonsCache = $sonsCache;

        return $this;
    }

    /**
     * Get sonsCache
     *
     * @return string
     */
    public function getSonsCache()
    {
        return $this->sonsCache;
    }

    /**
     * Set isVisibleComputer
     *
     * @param boolean $isVisibleComputer
     *
     * @return GlpiStates
     */
    public function setIsVisibleComputer($isVisibleComputer)
    {
        $this->isVisibleComputer = $isVisibleComputer;

        return $this;
    }

    /**
     * Get isVisibleComputer
     *
     * @return boolean
     */
    public function getIsVisibleComputer()
    {
        return $this->isVisibleComputer;
    }

    /**
     * Set isVisibleMonitor
     *
     * @param boolean $isVisibleMonitor
     *
     * @return GlpiStates
     */
    public function setIsVisibleMonitor($isVisibleMonitor)
    {
        $this->isVisibleMonitor = $isVisibleMonitor;

        return $this;
    }

    /**
     * Get isVisibleMonitor
     *
     * @return boolean
     */
    public function getIsVisibleMonitor()
    {
        return $this->isVisibleMonitor;
    }

    /**
     * Set isVisibleNetworkequipment
     *
     * @param boolean $isVisibleNetworkequipment
     *
     * @return GlpiStates
     */
    public function setIsVisibleNetworkequipment($isVisibleNetworkequipment)
    {
        $this->isVisibleNetworkequipment = $isVisibleNetworkequipment;

        return $this;
    }

    /**
     * Get isVisibleNetworkequipment
     *
     * @return boolean
     */
    public function getIsVisibleNetworkequipment()
    {
        return $this->isVisibleNetworkequipment;
    }

    /**
     * Set isVisiblePeripheral
     *
     * @param boolean $isVisiblePeripheral
     *
     * @return GlpiStates
     */
    public function setIsVisiblePeripheral($isVisiblePeripheral)
    {
        $this->isVisiblePeripheral = $isVisiblePeripheral;

        return $this;
    }

    /**
     * Get isVisiblePeripheral
     *
     * @return boolean
     */
    public function getIsVisiblePeripheral()
    {
        return $this->isVisiblePeripheral;
    }

    /**
     * Set isVisiblePhone
     *
     * @param boolean $isVisiblePhone
     *
     * @return GlpiStates
     */
    public function setIsVisiblePhone($isVisiblePhone)
    {
        $this->isVisiblePhone = $isVisiblePhone;

        return $this;
    }

    /**
     * Get isVisiblePhone
     *
     * @return boolean
     */
    public function getIsVisiblePhone()
    {
        return $this->isVisiblePhone;
    }

    /**
     * Set isVisiblePrinter
     *
     * @param boolean $isVisiblePrinter
     *
     * @return GlpiStates
     */
    public function setIsVisiblePrinter($isVisiblePrinter)
    {
        $this->isVisiblePrinter = $isVisiblePrinter;

        return $this;
    }

    /**
     * Get isVisiblePrinter
     *
     * @return boolean
     */
    public function getIsVisiblePrinter()
    {
        return $this->isVisiblePrinter;
    }

    /**
     * Set isVisibleSoftwareversion
     *
     * @param boolean $isVisibleSoftwareversion
     *
     * @return GlpiStates
     */
    public function setIsVisibleSoftwareversion($isVisibleSoftwareversion)
    {
        $this->isVisibleSoftwareversion = $isVisibleSoftwareversion;

        return $this;
    }

    /**
     * Get isVisibleSoftwareversion
     *
     * @return boolean
     */
    public function getIsVisibleSoftwareversion()
    {
        return $this->isVisibleSoftwareversion;
    }

    /**
     * Set isVisibleSoftwarelicense
     *
     * @param boolean $isVisibleSoftwarelicense
     *
     * @return GlpiStates
     */
    public function setIsVisibleSoftwarelicense($isVisibleSoftwarelicense)
    {
        $this->isVisibleSoftwarelicense = $isVisibleSoftwarelicense;

        return $this;
    }

    /**
     * Get isVisibleSoftwarelicense
     *
     * @return boolean
     */
    public function getIsVisibleSoftwarelicense()
    {
        return $this->isVisibleSoftwarelicense;
    }

    /**
     * Set dateMod
     *
     * @param \DateTime $dateMod
     *
     * @return GlpiStates
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
     * Set dateCreation
     *
     * @param \DateTime $dateCreation
     *
     * @return GlpiStates
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
