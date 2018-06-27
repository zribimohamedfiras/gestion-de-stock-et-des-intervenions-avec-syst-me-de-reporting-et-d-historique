<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * GlpiObjectlocks
 *
 * @ORM\Table(name="glpi_objectlocks", uniqueConstraints={@ORM\UniqueConstraint(name="item", columns={"itemtype", "items_id"})})
 * @ORM\Entity
 */
class GlpiObjectlocks
{
    /**
     * @var string
     *
     * @ORM\Column(name="itemtype", type="string", length=100, nullable=false)
     */
    private $itemtype;

    /**
     * @var integer
     *
     * @ORM\Column(name="items_id", type="integer", nullable=false)
     */
    private $itemsId;

    /**
     * @var integer
     *
     * @ORM\Column(name="users_id", type="integer", nullable=false)
     */
    private $usersId;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_mod", type="datetime", nullable=false)
     */
    private $dateMod = 'CURRENT_TIMESTAMP';

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
     * @return GlpiObjectlocks
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
     * @return GlpiObjectlocks
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
     * Set usersId
     *
     * @param integer $usersId
     *
     * @return GlpiObjectlocks
     */
    public function setUsersId($usersId)
    {
        $this->usersId = $usersId;

        return $this;
    }

    /**
     * Get usersId
     *
     * @return integer
     */
    public function getUsersId()
    {
        return $this->usersId;
    }

    /**
     * Set dateMod
     *
     * @param \DateTime $dateMod
     *
     * @return GlpiObjectlocks
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
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }
}
