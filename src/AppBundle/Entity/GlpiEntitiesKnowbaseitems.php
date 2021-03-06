<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * GlpiEntitiesKnowbaseitems
 *
 * @ORM\Table(name="glpi_entities_knowbaseitems", indexes={@ORM\Index(name="knowbaseitems_id", columns={"knowbaseitems_id"}), @ORM\Index(name="entities_id", columns={"entities_id"}), @ORM\Index(name="is_recursive", columns={"is_recursive"})})
 * @ORM\Entity
 */
class GlpiEntitiesKnowbaseitems
{
    /**
     * @var integer
     *
     * @ORM\Column(name="knowbaseitems_id", type="integer", nullable=false)
     */
    private $knowbaseitemsId = '0';

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
     * Set knowbaseitemsId
     *
     * @param integer $knowbaseitemsId
     *
     * @return GlpiEntitiesKnowbaseitems
     */
    public function setKnowbaseitemsId($knowbaseitemsId)
    {
        $this->knowbaseitemsId = $knowbaseitemsId;

        return $this;
    }

    /**
     * Get knowbaseitemsId
     *
     * @return integer
     */
    public function getKnowbaseitemsId()
    {
        return $this->knowbaseitemsId;
    }

    /**
     * Set entitiesId
     *
     * @param integer $entitiesId
     *
     * @return GlpiEntitiesKnowbaseitems
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
     * @return GlpiEntitiesKnowbaseitems
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
