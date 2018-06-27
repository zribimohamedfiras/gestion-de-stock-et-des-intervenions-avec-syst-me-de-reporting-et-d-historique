<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * GlpiItemsDeviceprocessors
 *
 * @ORM\Table(name="glpi_items_deviceprocessors", indexes={@ORM\Index(name="computers_id", columns={"items_id"}), @ORM\Index(name="deviceprocessors_id", columns={"deviceprocessors_id"}), @ORM\Index(name="specificity", columns={"frequency"}), @ORM\Index(name="is_deleted", columns={"is_deleted"}), @ORM\Index(name="is_dynamic", columns={"is_dynamic"}), @ORM\Index(name="serial", columns={"serial"}), @ORM\Index(name="nbcores", columns={"nbcores"}), @ORM\Index(name="nbthreads", columns={"nbthreads"}), @ORM\Index(name="entities_id", columns={"entities_id"}), @ORM\Index(name="is_recursive", columns={"is_recursive"}), @ORM\Index(name="busID", columns={"busID"}), @ORM\Index(name="item", columns={"itemtype", "items_id"})})
 * @ORM\Entity
 */
class GlpiItemsDeviceprocessors
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
     * @ORM\Column(name="deviceprocessors_id", type="integer", nullable=false)
     */
    private $deviceprocessorsId = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="frequency", type="integer", nullable=false)
     */
    private $frequency = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="serial", type="string", length=255, nullable=true)
     */
    private $serial;

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
     * @ORM\Column(name="nbcores", type="integer", nullable=true)
     */
    private $nbcores;

    /**
     * @var integer
     *
     * @ORM\Column(name="nbthreads", type="integer", nullable=true)
     */
    private $nbthreads;

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
     * @return GlpiItemsDeviceprocessors
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
     * @return GlpiItemsDeviceprocessors
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
     * Set deviceprocessorsId
     *
     * @param integer $deviceprocessorsId
     *
     * @return GlpiItemsDeviceprocessors
     */
    public function setDeviceprocessorsId($deviceprocessorsId)
    {
        $this->deviceprocessorsId = $deviceprocessorsId;

        return $this;
    }

    /**
     * Get deviceprocessorsId
     *
     * @return integer
     */
    public function getDeviceprocessorsId()
    {
        return $this->deviceprocessorsId;
    }

    /**
     * Set frequency
     *
     * @param integer $frequency
     *
     * @return GlpiItemsDeviceprocessors
     */
    public function setFrequency($frequency)
    {
        $this->frequency = $frequency;

        return $this;
    }

    /**
     * Get frequency
     *
     * @return integer
     */
    public function getFrequency()
    {
        return $this->frequency;
    }

    /**
     * Set serial
     *
     * @param string $serial
     *
     * @return GlpiItemsDeviceprocessors
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
     * Set isDeleted
     *
     * @param boolean $isDeleted
     *
     * @return GlpiItemsDeviceprocessors
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
     * @return GlpiItemsDeviceprocessors
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
     * Set nbcores
     *
     * @param integer $nbcores
     *
     * @return GlpiItemsDeviceprocessors
     */
    public function setNbcores($nbcores)
    {
        $this->nbcores = $nbcores;

        return $this;
    }

    /**
     * Get nbcores
     *
     * @return integer
     */
    public function getNbcores()
    {
        return $this->nbcores;
    }

    /**
     * Set nbthreads
     *
     * @param integer $nbthreads
     *
     * @return GlpiItemsDeviceprocessors
     */
    public function setNbthreads($nbthreads)
    {
        $this->nbthreads = $nbthreads;

        return $this;
    }

    /**
     * Get nbthreads
     *
     * @return integer
     */
    public function getNbthreads()
    {
        return $this->nbthreads;
    }

    /**
     * Set entitiesId
     *
     * @param integer $entitiesId
     *
     * @return GlpiItemsDeviceprocessors
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
     * @return GlpiItemsDeviceprocessors
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
     * Set busid
     *
     * @param string $busid
     *
     * @return GlpiItemsDeviceprocessors
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
