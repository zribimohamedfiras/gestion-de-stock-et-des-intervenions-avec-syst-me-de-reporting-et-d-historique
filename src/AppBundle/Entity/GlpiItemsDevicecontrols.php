<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * GlpiItemsDevicecontrols
 *
 * @ORM\Table(name="glpi_items_devicecontrols", indexes={@ORM\Index(name="computers_id", columns={"items_id"}), @ORM\Index(name="devicecontrols_id", columns={"devicecontrols_id"}), @ORM\Index(name="is_deleted", columns={"is_deleted"}), @ORM\Index(name="is_dynamic", columns={"is_dynamic"}), @ORM\Index(name="entities_id", columns={"entities_id"}), @ORM\Index(name="is_recursive", columns={"is_recursive"}), @ORM\Index(name="serial", columns={"serial"}), @ORM\Index(name="busID", columns={"busID"}), @ORM\Index(name="item", columns={"itemtype", "items_id"})})
 * @ORM\Entity
 */
class GlpiItemsDevicecontrols
{
    /**
     * @var integer
     *
     * @ORM\Column(name="items_id", type="integer", nullable=false)
     */
    private $itemsId = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="itemtype", type="string", length=255, nullable=true)
     */
    private $itemtype;

    /**
     * @var integer
     *
     * @ORM\Column(name="devicecontrols_id", type="integer", nullable=false)
     */
    private $devicecontrolsId = '0';

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
     * @ORM\Column(name="serial", type="string", length=255, nullable=true)
     */
    private $serial;

    /**
     * @var string
     *
     * @ORM\Column(name="busID", type="string", length=255, nullable=true)
     */
    private $busid;

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;



    /**
     * Set itemsId
     *
     * @param integer $itemsId
     *
     * @return GlpiItemsDevicecontrols
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
     * @return GlpiItemsDevicecontrols
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
     * Set devicecontrolsId
     *
     * @param integer $devicecontrolsId
     *
     * @return GlpiItemsDevicecontrols
     */
    public function setDevicecontrolsId($devicecontrolsId)
    {
        $this->devicecontrolsId = $devicecontrolsId;

        return $this;
    }

    /**
     * Get devicecontrolsId
     *
     * @return integer
     */
    public function getDevicecontrolsId()
    {
        return $this->devicecontrolsId;
    }

    /**
     * Set isDeleted
     *
     * @param boolean $isDeleted
     *
     * @return GlpiItemsDevicecontrols
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
     * @return GlpiItemsDevicecontrols
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
     * Set entitiesId
     *
     * @param integer $entitiesId
     *
     * @return GlpiItemsDevicecontrols
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
     * @return GlpiItemsDevicecontrols
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
     * Set serial
     *
     * @param string $serial
     *
     * @return GlpiItemsDevicecontrols
     */
    public function setSerial($serial)
    {
        $this->serial = $serial;

        return $this;
    }

    /**
     * Get serial
     *
     * @return string
     */
    public function getSerial()
    {
        return $this->serial;
    }

    /**
     * Set busid
     *
     * @param string $busid
     *
     * @return GlpiItemsDevicecontrols
     */
    public function setBusid($busid)
    {
        $this->busid = $busid;

        return $this;
    }

    /**
     * Get busid
     *
     * @return string
     */
    public function getBusid()
    {
        return $this->busid;
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
