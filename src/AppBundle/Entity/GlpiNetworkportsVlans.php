<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * GlpiNetworkportsVlans
 *
 * @ORM\Table(name="glpi_networkports_vlans", uniqueConstraints={@ORM\UniqueConstraint(name="unicity", columns={"networkports_id", "vlans_id"})}, indexes={@ORM\Index(name="vlans_id", columns={"vlans_id"})})
 * @ORM\Entity
 */
class GlpiNetworkportsVlans
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
     * @ORM\Column(name="vlans_id", type="integer", nullable=false)
     */
    private $vlansId = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="tagged", type="boolean", nullable=false)
     */
    private $tagged = '0';

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
     * @return GlpiNetworkportsVlans
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
     * Set vlansId
     *
     * @param integer $vlansId
     *
     * @return GlpiNetworkportsVlans
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
     * Set tagged
     *
     * @param boolean $tagged
     *
     * @return GlpiNetworkportsVlans
     */
    public function setTagged($tagged)
    {
        $this->tagged = $tagged;

        return $this;
    }

    /**
     * Get tagged
     *
     * @return boolean
     */
    public function getTagged()
    {
        return $this->tagged;
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
