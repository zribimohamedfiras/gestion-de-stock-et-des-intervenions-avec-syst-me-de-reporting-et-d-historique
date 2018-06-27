<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * GlpiLogs
 *
 * @ORM\Table(name="glpi_logs", indexes={@ORM\Index(name="date_mod", columns={"date_mod"}), @ORM\Index(name="itemtype_link", columns={"itemtype_link"}), @ORM\Index(name="item", columns={"itemtype", "items_id"})})
 * @ORM\Entity
 */
class GlpiLogs
{
    /**
     * @var string
     *
     * @ORM\Column(name="itemtype", type="string", length=100, nullable=false)
     */
    private $itemtype = '';

    /**
     * @var integer
     *
     * @ORM\Column(name="items_id", type="integer", nullable=false)
     */
    private $itemsId = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="itemtype_link", type="string", length=100, nullable=false)
     */
    private $itemtypeLink = '';

    /**
     * @var integer
     *
     * @ORM\Column(name="linked_action", type="integer", nullable=false)
     */
    private $linkedAction = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="user_name", type="string", length=255, nullable=true)
     */
    private $userName;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_mod", type="datetime", nullable=true)
     */
    private $dateMod;

    /**
     * @var integer
     *
     * @ORM\Column(name="id_search_option", type="integer", nullable=false)
     */
    private $idSearchOption = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="old_value", type="string", length=255, nullable=true)
     */
    private $oldValue;

    /**
     * @var string
     *
     * @ORM\Column(name="new_value", type="string", length=255, nullable=true)
     */
    private $newValue;

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;



    /**
     * Set itemtype
     *
     * @param string $itemtype
     *
     * @return GlpiLogs
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
     * Set itemsId
     *
     * @param integer $itemsId
     *
     * @return GlpiLogs
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
     * Set itemtypeLink
     *
     * @param string $itemtypeLink
     *
     * @return GlpiLogs
     */
    public function setItemtypeLink($itemtypeLink)
    {
        $this->itemtypeLink = $itemtypeLink;

        return $this;
    }

    /**
     * Get itemtypeLink
     *
     * @return string
     */
    public function getItemtypeLink()
    {
        return $this->itemtypeLink;
    }

    /**
     * Set linkedAction
     *
     * @param integer $linkedAction
     *
     * @return GlpiLogs
     */
    public function setLinkedAction($linkedAction)
    {
        $this->linkedAction = $linkedAction;

        return $this;
    }

    /**
     * Get linkedAction
     *
     * @return integer
     */
    public function getLinkedAction()
    {
        return $this->linkedAction;
    }

    /**
     * Set userName
     *
     * @param string $userName
     *
     * @return GlpiLogs
     */
    public function setUserName($userName)
    {
        $this->userName = $userName;

        return $this;
    }

    /**
     * Get userName
     *
     * @return string
     */
    public function getUserName()
    {
        return $this->userName;
    }

    /**
     * Set dateMod
     *
     * @param \DateTime $dateMod
     *
     * @return GlpiLogs
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
     * Set idSearchOption
     *
     * @param integer $idSearchOption
     *
     * @return GlpiLogs
     */
    public function setIdSearchOption($idSearchOption)
    {
        $this->idSearchOption = $idSearchOption;

        return $this;
    }

    /**
     * Get idSearchOption
     *
     * @return integer
     */
    public function getIdSearchOption()
    {
        return $this->idSearchOption;
    }

    /**
     * Set oldValue
     *
     * @param string $oldValue
     *
     * @return GlpiLogs
     */
    public function setOldValue($oldValue)
    {
        $this->oldValue = $oldValue;

        return $this;
    }

    /**
     * Get oldValue
     *
     * @return string
     */
    public function getOldValue()
    {
        return $this->oldValue;
    }

    /**
     * Set newValue
     *
     * @param string $newValue
     *
     * @return GlpiLogs
     */
    public function setNewValue($newValue)
    {
        $this->newValue = $newValue;

        return $this;
    }

    /**
     * Get newValue
     *
     * @return string
     */
    public function getNewValue()
    {
        return $this->newValue;
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
