<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * GlpiProfilesRssfeeds
 *
 * @ORM\Table(name="glpi_profiles_rssfeeds", indexes={@ORM\Index(name="rssfeeds_id", columns={"rssfeeds_id"}), @ORM\Index(name="profiles_id", columns={"profiles_id"}), @ORM\Index(name="entities_id", columns={"entities_id"}), @ORM\Index(name="is_recursive", columns={"is_recursive"})})
 * @ORM\Entity
 */
class GlpiProfilesRssfeeds
{
    /**
     * @var integer
     *
     * @ORM\Column(name="rssfeeds_id", type="integer", nullable=false)
     */
    private $rssfeedsId = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="profiles_id", type="integer", nullable=false)
     */
    private $profilesId = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="entities_id", type="integer", nullable=false)
     */
    private $entitiesId = '-1';

    /**
     * @var boolean
     *
     * @ORM\Column(name="is_recursive", type="boolean", nullable=false)
     */
    private $isRecursive = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;



    /**
     * Set rssfeedsId
     *
     * @param integer $rssfeedsId
     *
     * @return GlpiProfilesRssfeeds
     */
    public function setRssfeedsId($rssfeedsId)
    {
        $this->rssfeedsId = $rssfeedsId;

        return $this;
    }

    /**
     * Get rssfeedsId
     *
     * @return integer
     */
    public function getRssfeedsId()
    {
        return $this->rssfeedsId;
    }

    /**
     * Set profilesId
     *
     * @param integer $profilesId
     *
     * @return GlpiProfilesRssfeeds
     */
    public function setProfilesId($profilesId)
    {
        $this->profilesId = $profilesId;

        return $this;
    }

    /**
     * Get profilesId
     *
     * @return integer
     */
    public function getProfilesId()
    {
        return $this->profilesId;
    }

    /**
     * Set entitiesId
     *
     * @param integer $entitiesId
     *
     * @return GlpiProfilesRssfeeds
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
     * @return GlpiProfilesRssfeeds
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
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }
}
