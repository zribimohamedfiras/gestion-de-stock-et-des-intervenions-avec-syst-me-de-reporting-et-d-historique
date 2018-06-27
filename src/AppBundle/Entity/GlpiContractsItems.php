<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * GlpiContractsItems
 *
 * @ORM\Table(name="glpi_contracts_items", uniqueConstraints={@ORM\UniqueConstraint(name="unicity", columns={"contracts_id", "itemtype", "items_id"})}, indexes={@ORM\Index(name="FK_device", columns={"items_id", "itemtype"}), @ORM\Index(name="item", columns={"itemtype", "items_id"})})
 * @ORM\Entity
 */
class GlpiContractsItems
{
    /**
     * @var integer
     *
     * @ORM\Column(name="contracts_id", type="integer", nullable=false)
     */
    private $contractsId = '0';

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
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;



    /**
     * Set contractsId
     *
     * @param integer $contractsId
     *
     * @return GlpiContractsItems
     */
    public function setContractsId($contractsId)
    {
        $this->contractsId = $contractsId;

        return $this;
    }

    /**
     * Get contractsId
     *
     * @return integer
     */
    public function getContractsId()
    {
        return $this->contractsId;
    }

    /**
     * Set itemsId
     *
     * @param integer $itemsId
     *
     * @return GlpiContractsItems
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
     * @return GlpiContractsItems
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
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }
}
