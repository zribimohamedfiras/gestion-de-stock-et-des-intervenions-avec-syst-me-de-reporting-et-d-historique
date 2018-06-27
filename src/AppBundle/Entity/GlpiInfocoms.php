<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * GlpiInfocoms
 *
 * @ORM\Table(name="glpi_infocoms", uniqueConstraints={@ORM\UniqueConstraint(name="unicity", columns={"itemtype", "items_id"})}, indexes={@ORM\Index(name="buy_date", columns={"buy_date"}), @ORM\Index(name="alert", columns={"alert"}), @ORM\Index(name="budgets_id", columns={"budgets_id"}), @ORM\Index(name="suppliers_id", columns={"suppliers_id"}), @ORM\Index(name="entities_id", columns={"entities_id"}), @ORM\Index(name="is_recursive", columns={"is_recursive"}), @ORM\Index(name="date_mod", columns={"date_mod"}), @ORM\Index(name="date_creation", columns={"date_creation"})})
 * @ORM\Entity
 */
class GlpiInfocoms
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
     * @ORM\Column(name="itemtype", type="string", length=100, nullable=false)
     */
    private $itemtype;

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
     * @var \DateTime
     *
     * @ORM\Column(name="buy_date", type="date", nullable=true)
     */
    private $buyDate;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="use_date", type="date", nullable=true)
     */
    private $useDate;

    /**
     * @var integer
     *
     * @ORM\Column(name="warranty_duration", type="integer", nullable=false)
     */
    private $warrantyDuration = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="warranty_info", type="string", length=255, nullable=true)
     */
    private $warrantyInfo;

    /**
     * @var integer
     *
     * @ORM\Column(name="suppliers_id", type="integer", nullable=false)
     */
    private $suppliersId = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="order_number", type="string", length=255, nullable=true)
     */
    private $orderNumber;

    /**
     * @var string
     *
     * @ORM\Column(name="delivery_number", type="string", length=255, nullable=true)
     */
    private $deliveryNumber;

    /**
     * @var string
     *
     * @ORM\Column(name="immo_number", type="string", length=255, nullable=true)
     */
    private $immoNumber;

    /**
     * @var string
     *
     * @ORM\Column(name="value", type="decimal", precision=20, scale=4, nullable=false)
     */
    private $value = '0.0000';

    /**
     * @var string
     *
     * @ORM\Column(name="warranty_value", type="decimal", precision=20, scale=4, nullable=false)
     */
    private $warrantyValue = '0.0000';

    /**
     * @var integer
     *
     * @ORM\Column(name="sink_time", type="integer", nullable=false)
     */
    private $sinkTime = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="sink_type", type="integer", nullable=false)
     */
    private $sinkType = '0';

    /**
     * @var float
     *
     * @ORM\Column(name="sink_coeff", type="float", precision=10, scale=0, nullable=false)
     */
    private $sinkCoeff = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="comment", type="text", length=65535, nullable=true)
     */
    private $comment;

    /**
     * @var string
     *
     * @ORM\Column(name="bill", type="string", length=255, nullable=true)
     */
    private $bill;

    /**
     * @var integer
     *
     * @ORM\Column(name="budgets_id", type="integer", nullable=false)
     */
    private $budgetsId = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="alert", type="integer", nullable=false)
     */
    private $alert = '0';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="order_date", type="date", nullable=true)
     */
    private $orderDate;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="delivery_date", type="date", nullable=true)
     */
    private $deliveryDate;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="inventory_date", type="date", nullable=true)
     */
    private $inventoryDate;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="warranty_date", type="date", nullable=true)
     */
    private $warrantyDate;

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
     * @var \DateTime
     *
     * @ORM\Column(name="decommission_date", type="datetime", nullable=true)
     */
    private $decommissionDate;

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
     * @return GlpiInfocoms
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
     * @return GlpiInfocoms
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
     * Set entitiesId
     *
     * @param integer $entitiesId
     *
     * @return GlpiInfocoms
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
     * @return GlpiInfocoms
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
     * Set buyDate
     *
     * @param \DateTime $buyDate
     *
     * @return GlpiInfocoms
     */
    public function setBuyDate($buyDate)
    {
        $this->buyDate = $buyDate;

        return $this;
    }

    /**
     * Get buyDate
     *
     * @return \DateTime
     */
    public function getBuyDate()
    {
        return $this->buyDate;
    }

    /**
     * Set useDate
     *
     * @param \DateTime $useDate
     *
     * @return GlpiInfocoms
     */
    public function setUseDate($useDate)
    {
        $this->useDate = $useDate;

        return $this;
    }

    /**
     * Get useDate
     *
     * @return \DateTime
     */
    public function getUseDate()
    {
        return $this->useDate;
    }

    /**
     * Set warrantyDuration
     *
     * @param integer $warrantyDuration
     *
     * @return GlpiInfocoms
     */
    public function setWarrantyDuration($warrantyDuration)
    {
        $this->warrantyDuration = $warrantyDuration;

        return $this;
    }

    /**
     * Get warrantyDuration
     *
     * @return integer
     */
    public function getWarrantyDuration()
    {
        return $this->warrantyDuration;
    }

    /**
     * Set warrantyInfo
     *
     * @param string $warrantyInfo
     *
     * @return GlpiInfocoms
     */
    public function setWarrantyInfo($warrantyInfo)
    {
        $this->warrantyInfo = $warrantyInfo;

        return $this;
    }

    /**
     * Get warrantyInfo
     *
     * @return string
     */
    public function getWarrantyInfo()
    {
        return $this->warrantyInfo;
    }

    /**
     * Set suppliersId
     *
     * @param integer $suppliersId
     *
     * @return GlpiInfocoms
     */
    public function setSuppliersId($suppliersId)
    {
        $this->suppliersId = $suppliersId;

        return $this;
    }

    /**
     * Get suppliersId
     *
     * @return integer
     */
    public function getSuppliersId()
    {
        return $this->suppliersId;
    }

    /**
     * Set orderNumber
     *
     * @param string $orderNumber
     *
     * @return GlpiInfocoms
     */
    public function setOrderNumber($orderNumber)
    {
        $this->orderNumber = $orderNumber;

        return $this;
    }

    /**
     * Get orderNumber
     *
     * @return string
     */
    public function getOrderNumber()
    {
        return $this->orderNumber;
    }

    /**
     * Set deliveryNumber
     *
     * @param string $deliveryNumber
     *
     * @return GlpiInfocoms
     */
    public function setDeliveryNumber($deliveryNumber)
    {
        $this->deliveryNumber = $deliveryNumber;

        return $this;
    }

    /**
     * Get deliveryNumber
     *
     * @return string
     */
    public function getDeliveryNumber()
    {
        return $this->deliveryNumber;
    }

    /**
     * Set immoNumber
     *
     * @param string $immoNumber
     *
     * @return GlpiInfocoms
     */
    public function setImmoNumber($immoNumber)
    {
        $this->immoNumber = $immoNumber;

        return $this;
    }

    /**
     * Get immoNumber
     *
     * @return string
     */
    public function getImmoNumber()
    {
        return $this->immoNumber;
    }

    /**
     * Set value
     *
     * @param string $value
     *
     * @return GlpiInfocoms
     */
    public function setValue($value)
    {
        $this->value = $value;

        return $this;
    }

    /**
     * Get value
     *
     * @return string
     */
    public function getValue()
    {
        return $this->value;
    }

    /**
     * Set warrantyValue
     *
     * @param string $warrantyValue
     *
     * @return GlpiInfocoms
     */
    public function setWarrantyValue($warrantyValue)
    {
        $this->warrantyValue = $warrantyValue;

        return $this;
    }

    /**
     * Get warrantyValue
     *
     * @return string
     */
    public function getWarrantyValue()
    {
        return $this->warrantyValue;
    }

    /**
     * Set sinkTime
     *
     * @param integer $sinkTime
     *
     * @return GlpiInfocoms
     */
    public function setSinkTime($sinkTime)
    {
        $this->sinkTime = $sinkTime;

        return $this;
    }

    /**
     * Get sinkTime
     *
     * @return integer
     */
    public function getSinkTime()
    {
        return $this->sinkTime;
    }

    /**
     * Set sinkType
     *
     * @param integer $sinkType
     *
     * @return GlpiInfocoms
     */
    public function setSinkType($sinkType)
    {
        $this->sinkType = $sinkType;

        return $this;
    }

    /**
     * Get sinkType
     *
     * @return integer
     */
    public function getSinkType()
    {
        return $this->sinkType;
    }

    /**
     * Set sinkCoeff
     *
     * @param float $sinkCoeff
     *
     * @return GlpiInfocoms
     */
    public function setSinkCoeff($sinkCoeff)
    {
        $this->sinkCoeff = $sinkCoeff;

        return $this;
    }

    /**
     * Get sinkCoeff
     *
     * @return float
     */
    public function getSinkCoeff()
    {
        return $this->sinkCoeff;
    }

    /**
     * Set comment
     *
     * @param string $comment
     *
     * @return GlpiInfocoms
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
     * Set bill
     *
     * @param string $bill
     *
     * @return GlpiInfocoms
     */
    public function setBill($bill)
    {
        $this->bill = $bill;

        return $this;
    }

    /**
     * Get bill
     *
     * @return string
     */
    public function getBill()
    {
        return $this->bill;
    }

    /**
     * Set budgetsId
     *
     * @param integer $budgetsId
     *
     * @return GlpiInfocoms
     */
    public function setBudgetsId($budgetsId)
    {
        $this->budgetsId = $budgetsId;

        return $this;
    }

    /**
     * Get budgetsId
     *
     * @return integer
     */
    public function getBudgetsId()
    {
        return $this->budgetsId;
    }

    /**
     * Set alert
     *
     * @param integer $alert
     *
     * @return GlpiInfocoms
     */
    public function setAlert($alert)
    {
        $this->alert = $alert;

        return $this;
    }

    /**
     * Get alert
     *
     * @return integer
     */
    public function getAlert()
    {
        return $this->alert;
    }

    /**
     * Set orderDate
     *
     * @param \DateTime $orderDate
     *
     * @return GlpiInfocoms
     */
    public function setOrderDate($orderDate)
    {
        $this->orderDate = $orderDate;

        return $this;
    }

    /**
     * Get orderDate
     *
     * @return \DateTime
     */
    public function getOrderDate()
    {
        return $this->orderDate;
    }

    /**
     * Set deliveryDate
     *
     * @param \DateTime $deliveryDate
     *
     * @return GlpiInfocoms
     */
    public function setDeliveryDate($deliveryDate)
    {
        $this->deliveryDate = $deliveryDate;

        return $this;
    }

    /**
     * Get deliveryDate
     *
     * @return \DateTime
     */
    public function getDeliveryDate()
    {
        return $this->deliveryDate;
    }

    /**
     * Set inventoryDate
     *
     * @param \DateTime $inventoryDate
     *
     * @return GlpiInfocoms
     */
    public function setInventoryDate($inventoryDate)
    {
        $this->inventoryDate = $inventoryDate;

        return $this;
    }

    /**
     * Get inventoryDate
     *
     * @return \DateTime
     */
    public function getInventoryDate()
    {
        return $this->inventoryDate;
    }

    /**
     * Set warrantyDate
     *
     * @param \DateTime $warrantyDate
     *
     * @return GlpiInfocoms
     */
    public function setWarrantyDate($warrantyDate)
    {
        $this->warrantyDate = $warrantyDate;

        return $this;
    }

    /**
     * Get warrantyDate
     *
     * @return \DateTime
     */
    public function getWarrantyDate()
    {
        return $this->warrantyDate;
    }

    /**
     * Set dateMod
     *
     * @param \DateTime $dateMod
     *
     * @return GlpiInfocoms
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
     * @return GlpiInfocoms
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
     * Set decommissionDate
     *
     * @param \DateTime $decommissionDate
     *
     * @return GlpiInfocoms
     */
    public function setDecommissionDate($decommissionDate)
    {
        $this->decommissionDate = $decommissionDate;

        return $this;
    }

    /**
     * Get decommissionDate
     *
     * @return \DateTime
     */
    public function getDecommissionDate()
    {
        return $this->decommissionDate;
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
