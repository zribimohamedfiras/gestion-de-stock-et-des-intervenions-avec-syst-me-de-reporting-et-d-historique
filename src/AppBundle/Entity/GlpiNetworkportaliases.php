<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * GlpiNetworkportaliases
 *
 * @ORM\Table(name="glpi_networkportaliases", uniqueConstraints={@ORM\UniqueConstraint(name="networkports_id", columns={"networkports_id"})}, indexes={@ORM\Index(name="networkports_id_alias", columns={"networkports_id_alias"}), @ORM\Index(name="date_mod", columns={"date_mod"}), @ORM\Index(name="date_creation", columns={"date_creation"})})
 * @ORM\Entity
 */
class GlpiNetworkportaliases
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
     * @ORM\Column(name="networkports_id_alias", type="integer", nullable=false)
     */
    private $networkportsIdAlias = '0';

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
     * @return GlpiNetworkportaliases
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
     * Set networkportsIdAlias
     *
     * @param integer $networkportsIdAlias
     *
     * @return GlpiNetworkportaliases
     */
    public function setNetworkportsIdAlias($networkportsIdAlias)
    {
        $this->networkportsIdAlias = $networkportsIdAlias;

        return $this;
    }

    /**
     * Get networkportsIdAlias
     *
     * @return integer
     */
    public function getNetworkportsIdAlias()
    {
        return $this->networkportsIdAlias;
    }

    /**
     * Set dateMod
     *
     * @param \DateTime $dateMod
     *
     * @return GlpiNetworkportaliases
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
     * @return GlpiNetworkportaliases
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
