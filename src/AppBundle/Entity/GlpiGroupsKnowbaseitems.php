<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * GlpiGroupsKnowbaseitems
 *
 * @ORM\Table(name="glpi_groups_knowbaseitems", indexes={@ORM\Index(name="knowbaseitems_id", columns={"knowbaseitems_id"}), @ORM\Index(name="groups_id", columns={"groups_id"}), @ORM\Index(name="entities_id", columns={"entities_id"}), @ORM\Index(name="is_recursive", columns={"is_recursive"})})
 * @ORM\Entity
 */
class GlpiGroupsKnowbaseitems
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
     * @ORM\Column(name="groups_id", type="integer", nullable=false)
     */
    private $groupsId = '0';

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
     * Set knowbaseitemsId
     *
     * @param integer $knowbaseitemsId
     *
     * @return GlpiGroupsKnowbaseitems
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
     * Set groupsId
     *
     * @param integer $groupsId
     *
     * @return GlpiGroupsKnowbaseitems
     */
    public function setGroupsId($groupsId)
    {
        $this->groupsId = $groupsId;

        return $this;
    }

    /**
     * Get groupsId
     *
     * @return integer
     */
    public function getGroupsId()
    {
        return $this->groupsId;
    }

    /**
     * Set entitiesId
     *
     * @param integer $entitiesId
     *
     * @return GlpiGroupsKnowbaseitems
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
     * @return GlpiGroupsKnowbaseitems
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
