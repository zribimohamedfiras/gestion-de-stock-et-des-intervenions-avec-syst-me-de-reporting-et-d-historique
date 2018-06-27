<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * GlpiKnowbaseitemsProfiles
 *
 * @ORM\Table(name="glpi_knowbaseitems_profiles", indexes={@ORM\Index(name="knowbaseitems_id", columns={"knowbaseitems_id"}), @ORM\Index(name="profiles_id", columns={"profiles_id"}), @ORM\Index(name="entities_id", columns={"entities_id"}), @ORM\Index(name="is_recursive", columns={"is_recursive"})})
 * @ORM\Entity
 */
class GlpiKnowbaseitemsProfiles
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
     * Set knowbaseitemsId
     *
     * @param integer $knowbaseitemsId
     *
     * @return GlpiKnowbaseitemsProfiles
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
     * Set profilesId
     *
     * @param integer $profilesId
     *
     * @return GlpiKnowbaseitemsProfiles
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
     * @return GlpiKnowbaseitemsProfiles
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
     * @return GlpiKnowbaseitemsProfiles
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
