<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * GlpiTaskcategories
 *
 * @ORM\Table(name="glpi_taskcategories", indexes={@ORM\Index(name="name", columns={"name"}), @ORM\Index(name="taskcategories_id", columns={"taskcategories_id"}), @ORM\Index(name="entities_id", columns={"entities_id"}), @ORM\Index(name="is_recursive", columns={"is_recursive"}), @ORM\Index(name="is_active", columns={"is_active"}), @ORM\Index(name="is_helpdeskvisible", columns={"is_helpdeskvisible"}), @ORM\Index(name="date_mod", columns={"date_mod"}), @ORM\Index(name="date_creation", columns={"date_creation"})})
 * @ORM\Entity
 */
class GlpiTaskcategories
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
     * @var integer
     *
     * @ORM\Column(name="taskcategories_id", type="integer", nullable=false)
     */
    private $taskcategoriesId = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=255, nullable=true)
     */
    private $name;

    /**
     * @var string
     *
     * @ORM\Column(name="completename", type="text", length=65535, nullable=true)
     */
    private $completename;

    /**
     * @var string
     *
     * @ORM\Column(name="comment", type="text", length=65535, nullable=true)
     */
    private $comment;

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
     * @ORM\Column(name="is_active", type="boolean", nullable=false)
     */
    private $isActive = '1';

    /**
     * @var boolean
     *
     * @ORM\Column(name="is_helpdeskvisible", type="boolean", nullable=false)
     */
    private $isHelpdeskvisible = '1';

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
     * Set entitiesId
     *
     * @param integer $entitiesId
     *
     * @return GlpiTaskcategories
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
     * @return GlpiTaskcategories
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
     * Set taskcategoriesId
     *
     * @param integer $taskcategoriesId
     *
     * @return GlpiTaskcategories
     */
    public function setTaskcategoriesId($taskcategoriesId)
    {
        $this->taskcategoriesId = $taskcategoriesId;

        return $this;
    }

    /**
     * Get taskcategoriesId
     *
     * @return integer
     */
    public function getTaskcategoriesId()
    {
        return $this->taskcategoriesId;
    }

    /**
     * Set name
     *
     * @param string $name
     *
     * @return GlpiTaskcategories
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
     * Set completename
     *
     * @param string $completename
     *
     * @return GlpiTaskcategories
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
     * Set comment
     *
     * @param string $comment
     *
     * @return GlpiTaskcategories
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
     * Set level
     *
     * @param integer $level
     *
     * @return GlpiTaskcategories
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
     * @return GlpiTaskcategories
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
     * @return GlpiTaskcategories
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
     * Set isActive
     *
     * @param boolean $isActive
     *
     * @return GlpiTaskcategories
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
     * Set isHelpdeskvisible
     *
     * @param boolean $isHelpdeskvisible
     *
     * @return GlpiTaskcategories
     */
    public function setIsHelpdeskvisible($isHelpdeskvisible)
    {
        $this->isHelpdeskvisible = $isHelpdeskvisible;

        return $this;
    }

    /**
     * Get isHelpdeskvisible
     *
     * @return boolean
     */
    public function getIsHelpdeskvisible()
    {
        return $this->isHelpdeskvisible;
    }

    /**
     * Set dateMod
     *
     * @param \DateTime $dateMod
     *
     * @return GlpiTaskcategories
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
     * @return GlpiTaskcategories
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
