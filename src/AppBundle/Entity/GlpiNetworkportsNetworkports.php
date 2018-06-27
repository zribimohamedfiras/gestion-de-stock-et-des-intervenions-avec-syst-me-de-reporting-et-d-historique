<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * GlpiNetworkportsNetworkports
 *
 * @ORM\Table(name="glpi_networkports_networkports", uniqueConstraints={@ORM\UniqueConstraint(name="unicity", columns={"networkports_id_1", "networkports_id_2"})}, indexes={@ORM\Index(name="networkports_id_2", columns={"networkports_id_2"})})
 * @ORM\Entity
 */
class GlpiNetworkportsNetworkports
{
    /**
     * @var integer
     *
     * @ORM\Column(name="networkports_id_1", type="integer", nullable=false)
     */
    private $networkportsId1 = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="networkports_id_2", type="integer", nullable=false)
     */
    private $networkportsId2 = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;



    /**
     * Set networkportsId1
     *
     * @param integer $networkportsId1
     *
     * @return GlpiNetworkportsNetworkports
     */
    public function setNetworkportsId1($networkportsId1)
    {
        $this->networkportsId1 = $networkportsId1;

        return $this;
    }

    /**
     * Get networkportsId1
     *
     * @return integer
     */
    public function getNetworkportsId1()
    {
        return $this->networkportsId1;
    }

    /**
     * Set networkportsId2
     *
     * @param integer $networkportsId2
     *
     * @return GlpiNetworkportsNetworkports
     */
    public function setNetworkportsId2($networkportsId2)
    {
        $this->networkportsId2 = $networkportsId2;

        return $this;
    }

    /**
     * Get networkportsId2
     *
     * @return integer
     */
    public function getNetworkportsId2()
    {
        return $this->networkportsId2;
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
