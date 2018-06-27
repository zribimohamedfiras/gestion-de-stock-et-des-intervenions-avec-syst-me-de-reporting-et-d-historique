<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * GlpiIpaddressesIpnetworks
 *
 * @ORM\Table(name="glpi_ipaddresses_ipnetworks", uniqueConstraints={@ORM\UniqueConstraint(name="unicity", columns={"ipaddresses_id", "ipnetworks_id"})}, indexes={@ORM\Index(name="ipnetworks_id", columns={"ipnetworks_id"}), @ORM\Index(name="ipaddresses_id", columns={"ipaddresses_id"})})
 * @ORM\Entity
 */
class GlpiIpaddressesIpnetworks
{
    /**
     * @var integer
     *
     * @ORM\Column(name="ipaddresses_id", type="integer", nullable=false)
     */
    private $ipaddressesId = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="ipnetworks_id", type="integer", nullable=false)
     */
    private $ipnetworksId = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;



    /**
     * Set ipaddressesId
     *
     * @param integer $ipaddressesId
     *
     * @return GlpiIpaddressesIpnetworks
     */
    public function setIpaddressesId($ipaddressesId)
    {
        $this->ipaddressesId = $ipaddressesId;

        return $this;
    }

    /**
     * Get ipaddressesId
     *
     * @return integer
     */
    public function getIpaddressesId()
    {
        return $this->ipaddressesId;
    }

    /**
     * Set ipnetworksId
     *
     * @param integer $ipnetworksId
     *
     * @return GlpiIpaddressesIpnetworks
     */
    public function setIpnetworksId($ipnetworksId)
    {
        $this->ipnetworksId = $ipnetworksId;

        return $this;
    }

    /**
     * Get ipnetworksId
     *
     * @return integer
     */
    public function getIpnetworksId()
    {
        return $this->ipnetworksId;
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
