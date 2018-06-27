<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * GlpiNetworkportfiberchannels
 *
 * @ORM\Table(name="glpi_networkportfiberchannels", uniqueConstraints={@ORM\UniqueConstraint(name="networkports_id", columns={"networkports_id"})}, indexes={@ORM\Index(name="card", columns={"items_devicenetworkcards_id"}), @ORM\Index(name="netpoint", columns={"netpoints_id"}), @ORM\Index(name="wwn", columns={"wwn"}), @ORM\Index(name="speed", columns={"speed"})})
 * @ORM\Entity
 */
class GlpiNetworkportfiberchannels
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
     * @ORM\Column(name="wwn", type="string", length=16, nullable=true)
     */
    private $wwn = '';

    /**
     * @var integer
     *
     * @ORM\Column(name="speed", type="integer", nullable=false)
     */
    private $speed = '10';

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
     * @return GlpiNetworkportfiberchannels
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
     * @return GlpiNetworkportfiberchannels
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
     * @return GlpiNetworkportfiberchannels
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
     * Set wwn
     *
     * @param string $wwn
     *
     * @return GlpiNetworkportfiberchannels
     */
    public function setWwn($wwn)
    {
        $this->wwn = $wwn;

        return $this;
    }

    /**
     * Get wwn
     *
     * @return string
     */
    public function getWwn()
    {
        return $this->wwn;
    }

    /**
     * Set speed
     *
     * @param integer $speed
     *
     * @return GlpiNetworkportfiberchannels
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
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }
}
