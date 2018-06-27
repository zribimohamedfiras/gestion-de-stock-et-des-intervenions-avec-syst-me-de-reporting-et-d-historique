<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * GlpiNetworkportethernets
 *
 * @ORM\Table(name="glpi_networkportethernets", uniqueConstraints={@ORM\UniqueConstraint(name="networkports_id", columns={"networkports_id"})}, indexes={@ORM\Index(name="card", columns={"items_devicenetworkcards_id"}), @ORM\Index(name="netpoint", columns={"netpoints_id"}), @ORM\Index(name="type", columns={"type"}), @ORM\Index(name="speed", columns={"speed"}), @ORM\Index(name="date_mod", columns={"date_mod"}), @ORM\Index(name="date_creation", columns={"date_creation"})})
 * @ORM\Entity
 */
class GlpiNetworkportethernets
{
    /**
     * @var integer
     *
     * @ORM\Column(name="networkports_id", type="integer", nullable=false)
     */
    private $networkportsId = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="items_devicenetworkcards_id", type="integer", nullable=false)
     */
    private $itemsDevicenetworkcardsId = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="netpoints_id", type="integer", nullable=false)
     */
    private $netpointsId = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="type", type="string", length=10, nullable=true)
     */
    private $type = '';

    /**
     * @var integer
     *
     * @ORM\Column(name="speed", type="integer", nullable=false)
     */
    private $speed = '10';

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
     * Set networkportsId
     *
     * @param integer $networkportsId
     *
     * @return GlpiNetworkportethernets
     */
    public function setNetworkportsId($networkportsId)
    {
        $this->networkportsId = $networkportsId;

        return $this;
    }

    /**
     * Get networkportsId
     *
     * @return integer
     */
    public function getNetworkportsId()
    {
        return $this->networkportsId;
    }

    /**
     * Set itemsDevicenetworkcardsId
     *
     * @param integer $itemsDevicenetworkcardsId
     *
     * @return GlpiNetworkportethernets
     */
    public function setItemsDevicenetworkcardsId($itemsDevicenetworkcardsId)
    {
        $this->itemsDevicenetworkcardsId = $itemsDevicenetworkcardsId;

        return $this;
    }

    /**
     * Get itemsDevicenetworkcardsId
     *
     * @return integer
     */
    public function getItemsDevicenetworkcardsId()
    {
        return $this->itemsDevicenetworkcardsId;
    }

    /**
     * Set netpointsId
     *
     * @param integer $netpointsId
     *
     * @return GlpiNetworkportethernets
     */
    public function setNetpointsId($netpointsId)
    {
        $this->netpointsId = $netpointsId;

        return $this;
    }

    /**
     * Get netpointsId
     *
     * @return integer
     */
    public function getNetpointsId()
    {
        return $this->netpointsId;
    }

    /**
     * Set type
     *
     * @param string $type
     *
     * @return GlpiNetworkportethernets
     */
    public function setType($type)
    {
        $this->type = $type;

        return $this;
    }

    /**
     * Get type
     *
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Set speed
     *
     * @param integer $speed
     *
     * @return GlpiNetworkportethernets
     */
    public function setSpeed($speed)
    {
        $this->speed = $speed;

        return $this;
    }

    /**
     * Get speed
     *
     * @return integer
     */
    public function getSpeed()
    {
        return $this->speed;
    }

    /**
     * Set dateMod
     *
     * @param \DateTime $dateMod
     *
     * @return GlpiNetworkportethernets
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
     * @return GlpiNetworkportethernets
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
