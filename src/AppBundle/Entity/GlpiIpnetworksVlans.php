<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * GlpiIpnetworksVlans
 *
 * @ORM\Table(name="glpi_ipnetworks_vlans", uniqueConstraints={@ORM\UniqueConstraint(name="link", columns={"ipnetworks_id", "vlans_id"})})
 * @ORM\Entity
 */
class GlpiIpnetworksVlans
{
    /**
     * @var integer
     *
     * @ORM\Column(name="ipnetworks_id", type="integer", nullable=false)
     */
    private $ipnetworksId = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="vlans_id", type="integer", nullable=false)
     */
    private $vlansId = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;



    /**
     * Set ipnetworksId
     *
     * @param integer $ipnetworksId
     *
     * @return GlpiIpnetworksVlans
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
     * Set vlansId
     *
     * @param integer $vlansId
     *
     * @return GlpiIpnetworksVlans
     */
    public function setVlansId($vlansId)
    {
        $this->vlansId = $vlansId;

        return $this;
    }

    /**
     * Get vlansId
     *
     * @return integer
     */
    public function getVlansId()
    {
        return $this->vlansId;
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
