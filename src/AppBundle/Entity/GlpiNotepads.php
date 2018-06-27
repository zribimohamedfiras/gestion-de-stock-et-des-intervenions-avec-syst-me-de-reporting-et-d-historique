<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * GlpiNotepads
 *
 * @ORM\Table(name="glpi_notepads", indexes={@ORM\Index(name="item", columns={"itemtype", "items_id"}), @ORM\Index(name="date_mod", columns={"date_mod"}), @ORM\Index(name="date", columns={"date"}), @ORM\Index(name="users_id_lastupdater", columns={"users_id_lastupdater"}), @ORM\Index(name="users_id", columns={"users_id"})})
 * @ORM\Entity
 */
class GlpiNotepads
{
    /**
     * @var string
     *
     * @ORM\Column(name="itemtype", type="string", length=100, nullable=true)
     */
    private $itemtype;

    /**
     * @var integer
     *
     * @ORM\Column(name="items_id", type="integer", nullable=false)
     */
    private $itemsId = '0';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date", type="datetime", nullable=true)
     */
    private $date;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_mod", type="datetime", nullable=true)
     */
    private $dateMod;

    /**
     * @var integer
     *
     * @ORM\Column(name="users_id", type="integer", nullable=false)
     */
    private $usersId = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="users_id_lastupdater", type="integer", nullable=false)
     */
    private $usersIdLastupdater = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="content", type="text", nullable=true)
     */
    private $content;

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
     * @return GlpiNotepads
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
     * @return GlpiNotepads
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
     * Set date
     *
     * @param \DateTime $date
     *
     * @return GlpiNotepads
     */
    public function setDate($date)
    {
        $this->date = $date;

        return $this;
    }

    /**
     * Get date
     *
     * @return \DateTime
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * Set dateMod
     *
     * @param \DateTime $dateMod
     *
     * @return GlpiNotepads
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
     * Set usersId
     *
     * @param integer $usersId
     *
     * @return GlpiNotepads
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
     * Set usersIdLastupdater
     *
     * @param integer $usersIdLastupdater
     *
     * @return GlpiNotepads
     */
    public function setUsersIdLastupdater($usersIdLastupdater)
    {
        $this->usersIdLastupdater = $usersIdLastupdater;

        return $this;
    }

    /**
     * Get usersIdLastupdater
     *
     * @return integer
     */
    public function getUsersIdLastupdater()
    {
        return $this->usersIdLastupdater;
    }

    /**
     * Set content
     *
     * @param string $content
     *
     * @return GlpiNotepads
     */
    public function setContent($content)
    {
        $this->content = $content;

        return $this;
    }

    /**
     * Get content
     *
     * @return string
     */
    public function getContent()
    {
        return $this->content;
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
