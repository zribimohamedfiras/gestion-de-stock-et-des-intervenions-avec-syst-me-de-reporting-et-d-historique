<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * GlpiRssfeeds
 *
 * @ORM\Table(name="glpi_rssfeeds", indexes={@ORM\Index(name="name", columns={"name"}), @ORM\Index(name="users_id", columns={"users_id"}), @ORM\Index(name="date_mod", columns={"date_mod"}), @ORM\Index(name="have_error", columns={"have_error"}), @ORM\Index(name="is_active", columns={"is_active"}), @ORM\Index(name="date_creation", columns={"date_creation"})})
 * @ORM\Entity
 */
class GlpiRssfeeds
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
     * @ORM\Column(name="users_id", type="integer", nullable=false)
     */
    private $usersId = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="comment", type="text", length=65535, nullable=true)
     */
    private $comment;

    /**
     * @var string
     *
     * @ORM\Column(name="url", type="text", length=65535, nullable=true)
     */
    private $url;

    /**
     * @var integer
     *
     * @ORM\Column(name="refresh_rate", type="integer", nullable=false)
     */
    private $refreshRate = '86400';

    /**
     * @var integer
     *
     * @ORM\Column(name="max_items", type="integer", nullable=false)
     */
    private $maxItems = '20';

    /**
     * @var boolean
     *
     * @ORM\Column(name="have_error", type="boolean", nullable=false)
     */
    private $haveError = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="is_active", type="boolean", nullable=false)
     */
    private $isActive = '0';

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
     * @return GlpiRssfeeds
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
     * Set usersId
     *
     * @param integer $usersId
     *
     * @return GlpiRssfeeds
     */
    public function setUsersId($usersId)
    {
        $this->usersId = $usersId;

        return $this;
    }

    /**
     * Get usersId
     *
     * @return integer
     */
    public function getUsersId()
    {
        return $this->usersId;
    }

    /**
     * Set comment
     *
     * @param string $comment
     *
     * @return GlpiRssfeeds
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
     * Set url
     *
     * @param string $url
     *
     * @return GlpiRssfeeds
     */
    public function setUrl($url)
    {
        $this->url = $url;

        return $this;
    }

    /**
     * Get url
     *
     * @return string
     */
    public function getUrl()
    {
        return $this->url;
    }

    /**
     * Set refreshRate
     *
     * @param integer $refreshRate
     *
     * @return GlpiRssfeeds
     */
    public function setRefreshRate($refreshRate)
    {
        $this->refreshRate = $refreshRate;

        return $this;
    }

    /**
     * Get refreshRate
     *
     * @return integer
     */
    public function getRefreshRate()
    {
        return $this->refreshRate;
    }

    /**
     * Set maxItems
     *
     * @param integer $maxItems
     *
     * @return GlpiRssfeeds
     */
    public function setMaxItems($maxItems)
    {
        $this->maxItems = $maxItems;

        return $this;
    }

    /**
     * Get maxItems
     *
     * @return integer
     */
    public function getMaxItems()
    {
        return $this->maxItems;
    }

    /**
     * Set haveError
     *
     * @param boolean $haveError
     *
     * @return GlpiRssfeeds
     */
    public function setHaveError($haveError)
    {
        $this->haveError = $haveError;

        return $this;
    }

    /**
     * Get haveError
     *
     * @return boolean
     */
    public function getHaveError()
    {
        return $this->haveError;
    }

    /**
     * Set isActive
     *
     * @param boolean $isActive
     *
     * @return GlpiRssfeeds
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
     * Set dateMod
     *
     * @param \DateTime $dateMod
     *
     * @return GlpiRssfeeds
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
     * @return GlpiRssfeeds
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
