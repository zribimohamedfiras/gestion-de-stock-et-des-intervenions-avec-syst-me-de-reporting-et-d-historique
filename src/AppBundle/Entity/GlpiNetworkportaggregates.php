<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * GlpiNetworkportaggregates
 *
 * @ORM\Table(name="glpi_networkportaggregates", uniqueConstraints={@ORM\UniqueConstraint(name="networkports_id", columns={"networkports_id"})}, indexes={@ORM\Index(name="date_mod", columns={"date_mod"}), @ORM\Index(name="date_creation", columns={"date_creation"})})
 * @ORM\Entity
 */
class GlpiNetworkportaggregates
{
    /**
     * @var integer
     *
     * @ORM\Column(name="networkports_id", type="integer", nullable=false)
     */
    private $networkportsId = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="networkports_id_list", type="text", length=65535, nullable=true)
     */
    private $networkportsIdList;

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
     * @return GlpiNetworkportaggregates
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
     * Set networkportsIdList
     *
     * @param string $networkportsIdList
     *
     * @return GlpiNetworkportaggregates
     */
    public function setNetworkportsIdList($networkportsIdList)
    {
        $this->networkportsIdList = $networkportsIdList;

        return $this;
    }

    /**
     * Get networkportsIdList
     *
     * @return string
     */
    public function getNetworkportsIdList()
    {
        return $this->networkportsIdList;
    }

    /**
     * Set dateMod
     *
     * @param \DateTime $dateMod
     *
     * @return GlpiNetworkportaggregates
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
     * @return GlpiNetworkportaggregates
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
