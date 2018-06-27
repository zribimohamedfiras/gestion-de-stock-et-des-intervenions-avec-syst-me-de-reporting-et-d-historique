<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * GlpiIpaddresses
 *
 * @ORM\Table(name="glpi_ipaddresses", indexes={@ORM\Index(name="entities_id", columns={"entities_id"}), @ORM\Index(name="textual", columns={"name"}), @ORM\Index(name="binary", columns={"binary_0", "binary_1", "binary_2", "binary_3"}), @ORM\Index(name="is_deleted", columns={"is_deleted"}), @ORM\Index(name="is_dynamic", columns={"is_dynamic"}), @ORM\Index(name="item", columns={"itemtype", "items_id", "is_deleted"}), @ORM\Index(name="mainitem", columns={"mainitemtype", "mainitems_id", "is_deleted"})})
 * @ORM\Entity
 */
class GlpiIpaddresses
{
    /**
     * @var integer
     *
     * @ORM\Column(name="entities_id", type="integer", nullable=false)
     */
    private $entitiesId = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="items_id", type="integer", nullable=false)
     */
    private $itemsId = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="itemtype", type="string", length=100, nullable=false)
     */
    private $itemtype;

    /**
     * @var boolean
     *
     * @ORM\Column(name="version", type="boolean", nullable=true)
     */
    private $version = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=255, nullable=true)
     */
    private $name;

    /**
     * @var integer
     *
     * @ORM\Column(name="binary_0", type="integer", nullable=false)
     */
    private $binary0 = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="binary_1", type="integer", nullable=false)
     */
    private $binary1 = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="binary_2", type="integer", nullable=false)
     */
    private $binary2 = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="binary_3", type="integer", nullable=false)
     */
    private $binary3 = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="is_deleted", type="boolean", nullable=false)
     */
    private $isDeleted = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="is_dynamic", type="boolean", nullable=false)
     */
    private $isDynamic = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="mainitems_id", type="integer", nullable=false)
     */
    private $mainitemsId = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="mainitemtype", type="string", length=255, nullable=true)
     */
    private $mainitemtype;

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
     * @return GlpiIpaddresses
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
     * Set itemsId
     *
     * @param integer $itemsId
     *
     * @return GlpiIpaddresses
     */
    public function setItemsId($itemsId)
    {
        $this->itemsId = $itemsId;

        return $this;
    }

    /**
     * Get itemsId
     *
     * @return integer
     */
    public function getItemsId()
    {
        return $this->itemsId;
    }

    /**
     * Set itemtype
     *
     * @param string $itemtype
     *
     * @return GlpiIpaddresses
     */
    public function setItemtype($itemtype)
    {
        $this->itemtype = $itemtype;

        return $this;
    }

    /**
     * Get itemtype
     *
     * @return string
     */
    public function getItemtype()
    {
        return $this->itemtype;
    }

    /**
     * Set version
     *
     * @param boolean $version
     *
     * @return GlpiIpaddresses
     */
    public function setVersion($version)
    {
        $this->version = $version;

        return $this;
    }

    /**
     * Get version
     *
     * @return boolean
     */
    public function getVersion()
    {
        return $this->version;
    }

    /**
     * Set name
     *
     * @param string $name
     *
     * @return GlpiIpaddresses
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
     * Set binary0
     *
     * @param integer $binary0
     *
     * @return GlpiIpaddresses
     */
    public function setBinary0($binary0)
    {
        $this->binary0 = $binary0;

        return $this;
    }

    /**
     * Get binary0
     *
     * @return integer
     */
    public function getBinary0()
    {
        return $this->binary0;
    }

    /**
     * Set binary1
     *
     * @param integer $binary1
     *
     * @return GlpiIpaddresses
     */
    public function setBinary1($binary1)
    {
        $this->binary1 = $binary1;

        return $this;
    }

    /**
     * Get binary1
     *
     * @return integer
     */
    public function getBinary1()
    {
        return $this->binary1;
    }

    /**
     * Set binary2
     *
     * @param integer $binary2
     *
     * @return GlpiIpaddresses
     */
    public function setBinary2($binary2)
    {
        $this->binary2 = $binary2;

        return $this;
    }

    /**
     * Get binary2
     *
     * @return integer
     */
    public function getBinary2()
    {
        return $this->binary2;
    }

    /**
     * Set binary3
     *
     * @param integer $binary3
     *
     * @return GlpiIpaddresses
     */
    public function setBinary3($binary3)
    {
        $this->binary3 = $binary3;

        return $this;
    }

    /**
     * Get binary3
     *
     * @return integer
     */
    public function getBinary3()
    {
        return $this->binary3;
    }

    /**
     * Set isDeleted
     *
     * @param boolean $isDeleted
     *
     * @return GlpiIpaddresses
     */
    public function setIsDeleted($isDeleted)
    {
        $this->isDeleted = $isDeleted;

        return $this;
    }

    /**
     * Get isDeleted
     *
     * @return boolean
     */
    public function getIsDeleted()
    {
        return $this->isDeleted;
    }

    /**
     * Set isDynamic
     *
     * @param boolean $isDynamic
     *
     * @return GlpiIpaddresses
     */
    public function setIsDynamic($isDynamic)
    {
        $this->isDynamic = $isDynamic;

        return $this;
    }

    /**
     * Get isDynamic
     *
     * @return boolean
     */
    public function getIsDynamic()
    {
        return $this->isDynamic;
    }

    /**
     * Set mainitemsId
     *
     * @param integer $mainitemsId
     *
     * @return GlpiIpaddresses
     */
    public function setMainitemsId($mainitemsId)
    {
        $this->mainitemsId = $mainitemsId;

        return $this;
    }

    /**
     * Get mainitemsId
     *
     * @return integer
     */
    public function getMainitemsId()
    {
        return $this->mainitemsId;
    }

    /**
     * Set mainitemtype
     *
     * @param string $mainitemtype
     *
     * @return GlpiIpaddresses
     */
    public function setMainitemtype($mainitemtype)
    {
        $this->mainitemtype = $mainitemtype;

        return $this;
    }

    /**
     * Get mainitemtype
     *
     * @return string
     */
    public function getMainitemtype()
    {
        return $this->mainitemtype;
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
