<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * GlpiCartridges
 *
 * @ORM\Table(name="glpi_cartridges", indexes={@ORM\Index(name="cartridgeitems_id", columns={"cartridgeitems_id"}), @ORM\Index(name="printers_id", columns={"printers_id"}), @ORM\Index(name="entities_id", columns={"entities_id"}), @ORM\Index(name="date_mod", columns={"date_mod"}), @ORM\Index(name="date_creation", columns={"date_creation"})})
 * @ORM\Entity
 */
class GlpiCartridges
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
     * @ORM\Column(name="cartridgeitems_id", type="integer", nullable=false)
     */
    private $cartridgeitemsId = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="printers_id", type="integer", nullable=false)
     */
    private $printersId = '0';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_in", type="date", nullable=true)
     */
    private $dateIn;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_use", type="date", nullable=true)
     */
    private $dateUse;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_out", type="date", nullable=true)
     */
    private $dateOut;

    /**
     * @var integer
     *
     * @ORM\Column(name="pages", type="integer", nullable=false)
     */
    private $pages = '0';

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
     * @return GlpiCartridges
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
     * Set cartridgeitemsId
     *
     * @param integer $cartridgeitemsId
     *
     * @return GlpiCartridges
     */
    public function setCartridgeitemsId($cartridgeitemsId)
    {
        $this->cartridgeitemsId = $cartridgeitemsId;

        return $this;
    }

    /**
     * Get cartridgeitemsId
     *
     * @return integer
     */
    public function getCartridgeitemsId()
    {
        return $this->cartridgeitemsId;
    }

    /**
     * Set printersId
     *
     * @param integer $printersId
     *
     * @return GlpiCartridges
     */
    public function setPrintersId($printersId)
    {
        $this->printersId = $printersId;

        return $this;
    }

    /**
     * Get printersId
     *
     * @return integer
     */
    public function getPrintersId()
    {
        return $this->printersId;
    }

    /**
     * Set dateIn
     *
     * @param \DateTime $dateIn
     *
     * @return GlpiCartridges
     */
    public function setDateIn($dateIn)
    {
        $this->dateIn = $dateIn;

        return $this;
    }

    /**
     * Get dateIn
     *
     * @return \DateTime
     */
    public function getDateIn()
    {
        return $this->dateIn;
    }

    /**
     * Set dateUse
     *
     * @param \DateTime $dateUse
     *
     * @return GlpiCartridges
     */
    public function setDateUse($dateUse)
    {
        $this->dateUse = $dateUse;

        return $this;
    }

    /**
     * Get dateUse
     *
     * @return \DateTime
     */
    public function getDateUse()
    {
        return $this->dateUse;
    }

    /**
     * Set dateOut
     *
     * @param \DateTime $dateOut
     *
     * @return GlpiCartridges
     */
    public function setDateOut($dateOut)
    {
        $this->dateOut = $dateOut;

        return $this;
    }

    /**
     * Get dateOut
     *
     * @return \DateTime
     */
    public function getDateOut()
    {
        return $this->dateOut;
    }

    /**
     * Set pages
     *
     * @param integer $pages
     *
     * @return GlpiCartridges
     */
    public function setPages($pages)
    {
        $this->pages = $pages;

        return $this;
    }

    /**
     * Get pages
     *
     * @return integer
     */
    public function getPages()
    {
        return $this->pages;
    }

    /**
     * Set dateMod
     *
     * @param \DateTime $dateMod
     *
     * @return GlpiCartridges
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
     * @return GlpiCartridges
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
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }
}
