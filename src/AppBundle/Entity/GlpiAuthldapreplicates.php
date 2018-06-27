<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * GlpiAuthldapreplicates
 *
 * @ORM\Table(name="glpi_authldapreplicates", indexes={@ORM\Index(name="authldaps_id", columns={"authldaps_id"})})
 * @ORM\Entity
 */
class GlpiAuthldapreplicates
{
    /**
     * @var integer
     *
     * @ORM\Column(name="authldaps_id", type="integer", nullable=false)
     */
    private $authldapsId = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="host", type="string", length=255, nullable=true)
     */
    private $host;

    /**
     * @var integer
     *
     * @ORM\Column(name="port", type="integer", nullable=false)
     */
    private $port = '389';

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=255, nullable=true)
     */
    private $name;

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;



    /**
     * Set authldapsId
     *
     * @param integer $authldapsId
     *
     * @return GlpiAuthldapreplicates
     */
    public function setAuthldapsId($authldapsId)
    {
        $this->authldapsId = $authldapsId;

        return $this;
    }

    /**
     * Get authldapsId
     *
     * @return integer
     */
    public function getAuthldapsId()
    {
        return $this->authldapsId;
    }

    /**
     * Set host
     *
     * @param string $host
     *
     * @return GlpiAuthldapreplicates
     */
    public function setHost($host)
    {
        $this->host = $host;

        return $this;
    }

    /**
     * Get host
     *
     * @return string
     */
    public function getHost()
    {
        return $this->host;
    }

    /**
     * Set port
     *
     * @param integer $port
     *
     * @return GlpiAuthldapreplicates
     */
    public function setPort($port)
    {
        $this->port = $port;

        return $this;
    }

    /**
     * Get port
     *
     * @return integer
     */
    public function getPort()
    {
        return $this->port;
    }

    /**
     * Set name
     *
     * @param string $name
     *
     * @return GlpiAuthldapreplicates
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
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }
}
