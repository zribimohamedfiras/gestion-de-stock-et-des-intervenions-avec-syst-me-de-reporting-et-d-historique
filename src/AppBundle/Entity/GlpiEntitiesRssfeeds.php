<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * GlpiEntitiesRssfeeds
 *
 * @ORM\Table(name="glpi_entities_rssfeeds", indexes={@ORM\Index(name="rssfeeds_id", columns={"rssfeeds_id"}), @ORM\Index(name="entities_id", columns={"entities_id"}), @ORM\Index(name="is_recursive", columns={"is_recursive"})})
 * @ORM\Entity
 */
class GlpiEntitiesRssfeeds
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
     * @return GlpiEntitiesRssfeeds
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
     * Set entitiesId
     *
     * @param integer $entitiesId
     *
     * @return GlpiEntitiesRssfeeds
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
     * @return GlpiEntitiesRssfeeds
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
