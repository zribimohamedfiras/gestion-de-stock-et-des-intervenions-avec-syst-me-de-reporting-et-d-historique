<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * GlpiIpnetworks
 *
 * @ORM\Table(name="glpi_ipnetworks", indexes={@ORM\Index(name="network_definition", columns={"entities_id", "address", "netmask"}), @ORM\Index(name="address", columns={"address_0", "address_1", "address_2", "address_3"}), @ORM\Index(name="netmask", columns={"netmask_0", "netmask_1", "netmask_2", "netmask_3"}), @ORM\Index(name="gateway", columns={"gateway_0", "gateway_1", "gateway_2", "gateway_3"}), @ORM\Index(name="name", columns={"name"}), @ORM\Index(name="date_mod", columns={"date_mod"}), @ORM\Index(name="date_creation", columns={"date_creation"})})
 * @ORM\Entity
 */
class GlpiIpnetworks
{
    /**
     * @var integer
     *
     * @ORM\Column(name="entities_id", type="integer", nullable=false)
     */
    private $entitiesId = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="is_recursive", type="boolean", nullable=false)
     */
    private $isRecursive = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="ipnetworks_id", type="integer", nullable=false)
     */
    private $ipnetworksId = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="completename", type="text", length=65535, nullable=true)
     */
    private $completename;

    /**
     * @var integer
     *
     * @ORM\Column(name="level", type="integer", nullable=false)
     */
    private $level = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="ancestors_cache", type="text", nullable=true)
     */
    private $ancestorsCache;

    /**
     * @var string
     *
     * @ORM\Column(name="sons_cache", type="text", nullable=true)
     */
    private $sonsCache;

    /**
     * @var boolean
     *
     * @ORM\Column(name="addressable", type="boolean", nullable=false)
     */
    private $addressable = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="version", type="boolean", nullable=true)
     */
    private $version = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=255, nullable=true)
     */
    private $name;

    /**
     * @var string
     *
     * @ORM\Column(name="address", type="string", length=40, nullable=true)
     */
    private $address;

    /**
     * @var integer
     *
     * @ORM\Column(name="address_0", type="integer", nullable=false)
     */
    private $address0 = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="address_1", type="integer", nullable=false)
     */
    private $address1 = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="address_2", type="integer", nullable=false)
     */
    private $address2 = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="address_3", type="integer", nullable=false)
     */
    private $address3 = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="netmask", type="string", length=40, nullable=true)
     */
    private $netmask;

    /**
     * @var integer
     *
     * @ORM\Column(name="netmask_0", type="integer", nullable=false)
     */
    private $netmask0 = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="netmask_1", type="integer", nullable=false)
     */
    private $netmask1 = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="netmask_2", type="integer", nullable=false)
     */
    private $netmask2 = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="netmask_3", type="integer", nullable=false)
     */
    private $netmask3 = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="gateway", type="string", length=40, nullable=true)
     */
    private $gateway;

    /**
     * @var integer
     *
     * @ORM\Column(name="gateway_0", type="integer", nullable=false)
     */
    private $gateway0 = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="gateway_1", type="integer", nullable=false)
     */
    private $gateway1 = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="gateway_2", type="integer", nullable=false)
     */
    private $gateway2 = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="gateway_3", type="integer", nullable=false)
     */
    private $gateway3 = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="comment", type="text", length=65535, nullable=true)
     */
    private $comment;

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
     * Set entitiesId
     *
     * @param integer $entitiesId
     *
     * @return GlpiIpnetworks
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
     * Set isRecursive
     *
     * @param boolean $isRecursive
     *
     * @return GlpiIpnetworks
     */
    public function setIsRecursive($isRecursive)
    {
        $this->isRecursive = $isRecursive;

        return $this;
    }

    /**
     * Get isRecursive
     *
     * @return boolean
     */
    public function getIsRecursive()
    {
        return $this->isRecursive;
    }

    /**
     * Set ipnetworksId
     *
     * @param integer $ipnetworksId
     *
     * @return GlpiIpnetworks
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
     * Set completename
     *
     * @param string $completename
     *
     * @return GlpiIpnetworks
     */
    public function setCompletename($completename)
    {
        $this->completename = $completename;

        return $this;
    }

    /**
     * Get completename
     *
     * @return string
     */
    public function getCompletename()
    {
        return $this->completename;
    }

    /**
     * Set level
     *
     * @param integer $level
     *
     * @return GlpiIpnetworks
     */
    public function setLevel($level)
    {
        $this->level = $level;

        return $this;
    }

    /**
     * Get level
     *
     * @return integer
     */
    public function getLevel()
    {
        return $this->level;
    }

    /**
     * Set ancestorsCache
     *
     * @param string $ancestorsCache
     *
     * @return GlpiIpnetworks
     */
    public function setAncestorsCache($ancestorsCache)
    {
        $this->ancestorsCache = $ancestorsCache;

        return $this;
    }

    /**
     * Get ancestorsCache
     *
     * @return string
     */
    public function getAncestorsCache()
    {
        return $this->ancestorsCache;
    }

    /**
     * Set sonsCache
     *
     * @param string $sonsCache
     *
     * @return GlpiIpnetworks
     */
    public function setSonsCache($sonsCache)
    {
        $this->sonsCache = $sonsCache;

        return $this;
    }

    /**
     * Get sonsCache
     *
     * @return string
     */
    public function getSonsCache()
    {
        return $this->sonsCache;
    }

    /**
     * Set addressable
     *
     * @param boolean $addressable
     *
     * @return GlpiIpnetworks
     */
    public function setAddressable($addressable)
    {
        $this->addressable = $addressable;

        return $this;
    }

    /**
     * Get addressable
     *
     * @return boolean
     */
    public function getAddressable()
    {
        return $this->addressable;
    }

    /**
     * Set version
     *
     * @param boolean $version
     *
     * @return GlpiIpnetworks
     */
    public function setVersion($version)
    {
        $this->version = $version;

        return $this;
    }

    /**
     * Get version
     *
     * @return boolean
     */
    public function getVersion()
    {
        return $this->version;
    }

    /**
     * Set name
     *
     * @param string $name
     *
     * @return GlpiIpnetworks
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
     * Set address
     *
     * @param string $address
     *
     * @return GlpiIpnetworks
     */
    public function setAddress($address)
    {
        $this->address = $address;

        return $this;
    }

    /**
     * Get address
     *
     * @return string
     */
    public function getAddress()
    {
        return $this->address;
    }

    /**
     * Set address0
     *
     * @param integer $address0
     *
     * @return GlpiIpnetworks
     */
    public function setAddress0($address0)
    {
        $this->address0 = $address0;

        return $this;
    }

    /**
     * Get address0
     *
     * @return integer
     */
    public function getAddress0()
    {
        return $this->address0;
    }

    /**
     * Set address1
     *
     * @param integer $address1
     *
     * @return GlpiIpnetworks
     */
    public function setAddress1($address1)
    {
        $this->address1 = $address1;

        return $this;
    }

    /**
     * Get address1
     *
     * @return integer
     */
    public function getAddress1()
    {
        return $this->address1;
    }

    /**
     * Set address2
     *
     * @param integer $address2
     *
     * @return GlpiIpnetworks
     */
    public function setAddress2($address2)
    {
        $this->address2 = $address2;

        return $this;
    }

    /**
     * Get address2
     *
     * @return integer
     */
    public function getAddress2()
    {
        return $this->address2;
    }

    /**
     * Set address3
     *
     * @param integer $address3
     *
     * @return GlpiIpnetworks
     */
    public function setAddress3($address3)
    {
        $this->address3 = $address3;

        return $this;
    }

    /**
     * Get address3
     *
     * @return integer
     */
    public function getAddress3()
    {
        return $this->address3;
    }

    /**
     * Set netmask
     *
     * @param string $netmask
     *
     * @return GlpiIpnetworks
     */
    public function setNetmask($netmask)
    {
        $this->netmask = $netmask;

        return $this;
    }

    /**
     * Get netmask
     *
     * @return string
     */
    public function getNetmask()
    {
        return $this->netmask;
    }

    /**
     * Set netmask0
     *
     * @param integer $netmask0
     *
     * @return GlpiIpnetworks
     */
    public function setNetmask0($netmask0)
    {
        $this->netmask0 = $netmask0;

        return $this;
    }

    /**
     * Get netmask0
     *
     * @return integer
     */
    public function getNetmask0()
    {
        return $this->netmask0;
    }

    /**
     * Set netmask1
     *
     * @param integer $netmask1
     *
     * @return GlpiIpnetworks
     */
    public function setNetmask1($netmask1)
    {
        $this->netmask1 = $netmask1;

        return $this;
    }

    /**
     * Get netmask1
     *
     * @return integer
     */
    public function getNetmask1()
    {
        return $this->netmask1;
    }

    /**
     * Set netmask2
     *
     * @param integer $netmask2
     *
     * @return GlpiIpnetworks
     */
    public function setNetmask2($netmask2)
    {
        $this->netmask2 = $netmask2;

        return $this;
    }

    /**
     * Get netmask2
     *
     * @return integer
     */
    public function getNetmask2()
    {
        return $this->netmask2;
    }

    /**
     * Set netmask3
     *
     * @param integer $netmask3
     *
     * @return GlpiIpnetworks
     */
    public function setNetmask3($netmask3)
    {
        $this->netmask3 = $netmask3;

        return $this;
    }

    /**
     * Get netmask3
     *
     * @return integer
     */
    public function getNetmask3()
    {
        return $this->netmask3;
    }

    /**
     * Set gateway
     *
     * @param string $gateway
     *
     * @return GlpiIpnetworks
     */
    public function setGateway($gateway)
    {
        $this->gateway = $gateway;

        return $this;
    }

    /**
     * Get gateway
     *
     * @return string
     */
    public function getGateway()
    {
        return $this->gateway;
    }

    /**
     * Set gateway0
     *
     * @param integer $gateway0
     *
     * @return GlpiIpnetworks
     */
    public function setGateway0($gateway0)
    {
        $this->gateway0 = $gateway0;

        return $this;
    }

    /**
     * Get gateway0
     *
     * @return integer
     */
    public function getGateway0()
    {
        return $this->gateway0;
    }

    /**
     * Set gateway1
     *
     * @param integer $gateway1
     *
     * @return GlpiIpnetworks
     */
    public function setGateway1($gateway1)
    {
        $this->gateway1 = $gateway1;

        return $this;
    }

    /**
     * Get gateway1
     *
     * @return integer
     */
    public function getGateway1()
    {
        return $this->gateway1;
    }

    /**
     * Set gateway2
     *
     * @param integer $gateway2
     *
     * @return GlpiIpnetworks
     */
    public function setGateway2($gateway2)
    {
        $this->gateway2 = $gateway2;

        return $this;
    }

    /**
     * Get gateway2
     *
     * @return integer
     */
    public function getGateway2()
    {
        return $this->gateway2;
    }

    /**
     * Set gateway3
     *
     * @param integer $gateway3
     *
     * @return GlpiIpnetworks
     */
    public function setGateway3($gateway3)
    {
        $this->gateway3 = $gateway3;

        return $this;
    }

    /**
     * Get gateway3
     *
     * @return integer
     */
    public function getGateway3()
    {
        return $this->gateway3;
    }

    /**
     * Set comment
     *
     * @param string $comment
     *
     * @return GlpiIpnetworks
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
     * Set dateMod
     *
     * @param \DateTime $dateMod
     *
     * @return GlpiIpnetworks
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
     * @return GlpiIpnetworks
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
