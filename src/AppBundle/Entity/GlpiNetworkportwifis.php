<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * GlpiNetworkportwifis
 *
 * @ORM\Table(name="glpi_networkportwifis", uniqueConstraints={@ORM\UniqueConstraint(name="networkports_id", columns={"networkports_id"})}, indexes={@ORM\Index(name="card", columns={"items_devicenetworkcards_id"}), @ORM\Index(name="essid", columns={"wifinetworks_id"}), @ORM\Index(name="version", columns={"version"}), @ORM\Index(name="mode", columns={"mode"}), @ORM\Index(name="date_mod", columns={"date_mod"}), @ORM\Index(name="date_creation", columns={"date_creation"})})
 * @ORM\Entity
 */
class GlpiNetworkportwifis
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
     * @ORM\Column(name="wifinetworks_id", type="integer", nullable=false)
     */
    private $wifinetworksId = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="networkportwifis_id", type="integer", nullable=false)
     */
    private $networkportwifisId = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="version", type="string", length=20, nullable=true)
     */
    private $version;

    /**
     * @var string
     *
     * @ORM\Column(name="mode", type="string", length=20, nullable=true)
     */
    private $mode;

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
     * @return GlpiNetworkportwifis
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
     * @return GlpiNetworkportwifis
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
     * Set wifinetworksId
     *
     * @param integer $wifinetworksId
     *
     * @return GlpiNetworkportwifis
     */
    public function setWifinetworksId($wifinetworksId)
    {
        $this->wifinetworksId = $wifinetworksId;

        return $this;
    }

    /**
     * Get wifinetworksId
     *
     * @return integer
     */
    public function getWifinetworksId()
    {
        return $this->wifinetworksId;
    }

    /**
     * Set networkportwifisId
     *
     * @param integer $networkportwifisId
     *
     * @return GlpiNetworkportwifis
     */
    public function setNetworkportwifisId($networkportwifisId)
    {
        $this->networkportwifisId = $networkportwifisId;

        return $this;
    }

    /**
     * Get networkportwifisId
     *
     * @return integer
     */
    public function getNetworkportwifisId()
    {
        return $this->networkportwifisId;
    }

    /**
     * Set version
     *
     * @param string $version
     *
     * @return GlpiNetworkportwifis
     */
    public function setVersion($version)
    {
        $this->version = $version;

        return $this;
    }

    /**
     * Get version
     *
     * @return string
     */
    public function getVersion()
    {
        return $this->version;
    }

    /**
     * Set mode
     *
     * @param string $mode
     *
     * @return GlpiNetworkportwifis
     */
    public function setMode($mode)
    {
        $this->mode = $mode;

        return $this;
    }

    /**
     * Get mode
     *
     * @return string
     */
    public function getMode()
    {
        return $this->mode;
    }

    /**
     * Set dateMod
     *
     * @param \DateTime $dateMod
     *
     * @return GlpiNetworkportwifis
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
     * @return GlpiNetworkportwifis
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
