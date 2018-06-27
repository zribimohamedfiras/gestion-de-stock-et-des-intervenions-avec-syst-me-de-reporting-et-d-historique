<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * GlpiNetworkaliases
 *
 * @ORM\Table(name="glpi_networkaliases", indexes={@ORM\Index(name="entities_id", columns={"entities_id"}), @ORM\Index(name="name", columns={"name"}), @ORM\Index(name="networknames_id", columns={"networknames_id"})})
 * @ORM\Entity
 */
class GlpiNetworkaliases
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
     * @ORM\Column(name="networknames_id", type="integer", nullable=false)
     */
    private $networknamesId = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=255, nullable=true)
     */
    private $name;

    /**
     * @var integer
     *
     * @ORM\Column(name="fqdns_id", type="integer", nullable=false)
     */
    private $fqdnsId = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="comment", type="text", length=65535, nullable=true)
     */
    private $comment;

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
     * @return GlpiNetworkaliases
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
     * Set networknamesId
     *
     * @param integer $networknamesId
     *
     * @return GlpiNetworkaliases
     */
    public function setNetworknamesId($networknamesId)
    {
        $this->networknamesId = $networknamesId;

        return $this;
    }

    /**
     * Get networknamesId
     *
     * @return integer
     */
    public function getNetworknamesId()
    {
        return $this->networknamesId;
    }

    /**
     * Set name
     *
     * @param string $name
     *
     * @return GlpiNetworkaliases
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set fqdnsId
     *
     * @param integer $fqdnsId
     *
     * @return GlpiNetworkaliases
     */
    public function setFqdnsId($fqdnsId)
    {
        $this->fqdnsId = $fqdnsId;

        return $this;
    }

    /**
     * Get fqdnsId
     *
     * @return integer
     */
    public function getFqdnsId()
    {
        return $this->fqdnsId;
    }

    /**
     * Set comment
     *
     * @param string $comment
     *
     * @return GlpiNetworkaliases
     */
    public function setComment($comment)
    {
        $this->comment = $comment;

        return $this;
    }

    /**
     * Get comment
     *
     * @return string
     */
    public function getComment()
    {
        return $this->comment;
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
