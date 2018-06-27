<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * GlpiSoftwarecategories
 *
 * @ORM\Table(name="glpi_softwarecategories", indexes={@ORM\Index(name="softwarecategories_id", columns={"softwarecategories_id"})})
 * @ORM\Entity
 */
class GlpiSoftwarecategories
{
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
     * @var integer
     *
     * @ORM\Column(name="softwarecategories_id", type="integer", nullable=false)
     */
    private $softwarecategoriesId = '0';

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
     * @return GlpiSoftwarecategories
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
     * @return GlpiSoftwarecategories
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
     * Set softwarecategoriesId
     *
     * @param integer $softwarecategoriesId
     *
     * @return GlpiSoftwarecategories
     */
    public function setSoftwarecategoriesId($softwarecategoriesId)
    {
        $this->softwarecategoriesId = $softwarecategoriesId;

        return $this;
    }

    /**
     * Get softwarecategoriesId
     *
     * @return integer
     */
    public function getSoftwarecategoriesId()
    {
        return $this->softwarecategoriesId;
    }

    /**
     * Set completename
     *
     * @param string $completename
     *
     * @return GlpiSoftwarecategories
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
     * @return GlpiSoftwarecategories
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
     * @return GlpiSoftwarecategories
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
     * @return GlpiSoftwarecategories
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
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }
}
