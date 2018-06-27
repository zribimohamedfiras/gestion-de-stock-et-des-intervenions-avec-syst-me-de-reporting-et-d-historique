<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * GlpiPrinters
 *
 * @ORM\Table(name="glpi_printers", indexes={@ORM\Index(name="name", columns={"name"}), @ORM\Index(name="is_template", columns={"is_template"}), @ORM\Index(name="is_global", columns={"is_global"}), @ORM\Index(name="domains_id", columns={"domains_id"}), @ORM\Index(name="entities_id", columns={"entities_id"}), @ORM\Index(name="manufacturers_id", columns={"manufacturers_id"}), @ORM\Index(name="groups_id", columns={"groups_id"}), @ORM\Index(name="users_id", columns={"users_id"}), @ORM\Index(name="locations_id", columns={"locations_id"}), @ORM\Index(name="printermodels_id", columns={"printermodels_id"}), @ORM\Index(name="networks_id", columns={"networks_id"}), @ORM\Index(name="states_id", columns={"states_id"}), @ORM\Index(name="users_id_tech", columns={"users_id_tech"}), @ORM\Index(name="printertypes_id", columns={"printertypes_id"}), @ORM\Index(name="is_deleted", columns={"is_deleted"}), @ORM\Index(name="date_mod", columns={"date_mod"}), @ORM\Index(name="groups_id_tech", columns={"groups_id_tech"}), @ORM\Index(name="last_pages_counter", columns={"last_pages_counter"}), @ORM\Index(name="is_dynamic", columns={"is_dynamic"}), @ORM\Index(name="serial", columns={"serial"}), @ORM\Index(name="otherserial", columns={"otherserial"}), @ORM\Index(name="date_creation", columns={"date_creation"})})
 * @ORM\Entity
 */
class GlpiPrinters
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
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=255, nullable=true)
     */
    private $name;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_mod", type="datetime", nullable=true)
     */
    private $dateMod;

    /**
     * @var string
     *
     * @ORM\Column(name="contact", type="string", length=255, nullable=true)
     */
    private $contact;

    /**
     * @var string
     *
     * @ORM\Column(name="contact_num", type="string", length=255, nullable=true)
     */
    private $contactNum;

    /**
     * @var integer
     *
     * @ORM\Column(name="users_id_tech", type="integer", nullable=false)
     */
    private $usersIdTech = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="groups_id_tech", type="integer", nullable=false)
     */
    private $groupsIdTech = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="serial", type="string", length=255, nullable=true)
     */
    private $serial;

    /**
     * @var string
     *
     * @ORM\Column(name="otherserial", type="string", length=255, nullable=true)
     */
    private $otherserial;

    /**
     * @var boolean
     *
     * @ORM\Column(name="have_serial", type="boolean", nullable=false)
     */
    private $haveSerial = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="have_parallel", type="boolean", nullable=false)
     */
    private $haveParallel = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="have_usb", type="boolean", nullable=false)
     */
    private $haveUsb = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="have_wifi", type="boolean", nullable=false)
     */
    private $haveWifi = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="have_ethernet", type="boolean", nullable=false)
     */
    private $haveEthernet = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="comment", type="text", length=65535, nullable=true)
     */
    private $comment;

    /**
     * @var string
     *
     * @ORM\Column(name="memory_size", type="string", length=255, nullable=true)
     */
    private $memorySize;

    /**
     * @var integer
     *
     * @ORM\Column(name="locations_id", type="integer", nullable=false)
     */
    private $locationsId = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="domains_id", type="integer", nullable=false)
     */
    private $domainsId = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="networks_id", type="integer", nullable=false)
     */
    private $networksId = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="printertypes_id", type="integer", nullable=false)
     */
    private $printertypesId = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="printermodels_id", type="integer", nullable=false)
     */
    private $printermodelsId = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="manufacturers_id", type="integer", nullable=false)
     */
    private $manufacturersId = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="is_global", type="boolean", nullable=false)
     */
    private $isGlobal = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="is_deleted", type="boolean", nullable=false)
     */
    private $isDeleted = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="is_template", type="boolean", nullable=false)
     */
    private $isTemplate = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="template_name", type="string", length=255, nullable=true)
     */
    private $templateName;

    /**
     * @var integer
     *
     * @ORM\Column(name="init_pages_counter", type="integer", nullable=false)
     */
    private $initPagesCounter = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="last_pages_counter", type="integer", nullable=false)
     */
    private $lastPagesCounter = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="users_id", type="integer", nullable=false)
     */
    private $usersId = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="groups_id", type="integer", nullable=false)
     */
    private $groupsId = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="states_id", type="integer", nullable=false)
     */
    private $statesId = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="ticket_tco", type="decimal", precision=20, scale=4, nullable=true)
     */
    private $ticketTco = '0.0000';

    /**
     * @var boolean
     *
     * @ORM\Column(name="is_dynamic", type="boolean", nullable=false)
     */
    private $isDynamic = '0';

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
     * @return GlpiPrinters
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
     * @return GlpiPrinters
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
     * Set name
     *
     * @param string $name
     *
     * @return GlpiPrinters
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
     * Set dateMod
     *
     * @param \DateTime $dateMod
     *
     * @return GlpiPrinters
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
     * Set contact
     *
     * @param string $contact
     *
     * @return GlpiPrinters
     */
    public function setContact($contact)
    {
        $this->contact = $contact;

        return $this;
    }

    /**
     * Get contact
     *
     * @return string
     */
    public function getContact()
    {
        return $this->contact;
    }

    /**
     * Set contactNum
     *
     * @param string $contactNum
     *
     * @return GlpiPrinters
     */
    public function setContactNum($contactNum)
    {
        $this->contactNum = $contactNum;

        return $this;
    }

    /**
     * Get contactNum
     *
     * @return string
     */
    public function getContactNum()
    {
        return $this->contactNum;
    }

    /**
     * Set usersIdTech
     *
     * @param integer $usersIdTech
     *
     * @return GlpiPrinters
     */
    public function setUsersIdTech($usersIdTech)
    {
        $this->usersIdTech = $usersIdTech;

        return $this;
    }

    /**
     * Get usersIdTech
     *
     * @return integer
     */
    public function getUsersIdTech()
    {
        return $this->usersIdTech;
    }

    /**
     * Set groupsIdTech
     *
     * @param integer $groupsIdTech
     *
     * @return GlpiPrinters
     */
    public function setGroupsIdTech($groupsIdTech)
    {
        $this->groupsIdTech = $groupsIdTech;

        return $this;
    }

    /**
     * Get groupsIdTech
     *
     * @return integer
     */
    public function getGroupsIdTech()
    {
        return $this->groupsIdTech;
    }

    /**
     * Set serial
     *
     * @param string $serial
     *
     * @return GlpiPrinters
     */
    public function setSerial($serial)
    {
        $this->serial = $serial;

        return $this;
    }

    /**
     * Get serial
     *
     * @return string
     */
    public function getSerial()
    {
        return $this->serial;
    }

    /**
     * Set otherserial
     *
     * @param string $otherserial
     *
     * @return GlpiPrinters
     */
    public function setOtherserial($otherserial)
    {
        $this->otherserial = $otherserial;

        return $this;
    }

    /**
     * Get otherserial
     *
     * @return string
     */
    public function getOtherserial()
    {
        return $this->otherserial;
    }

    /**
     * Set haveSerial
     *
     * @param boolean $haveSerial
     *
     * @return GlpiPrinters
     */
    public function setHaveSerial($haveSerial)
    {
        $this->haveSerial = $haveSerial;

        return $this;
    }

    /**
     * Get haveSerial
     *
     * @return boolean
     */
    public function getHaveSerial()
    {
        return $this->haveSerial;
    }

    /**
     * Set haveParallel
     *
     * @param boolean $haveParallel
     *
     * @return GlpiPrinters
     */
    public function setHaveParallel($haveParallel)
    {
        $this->haveParallel = $haveParallel;

        return $this;
    }

    /**
     * Get haveParallel
     *
     * @return boolean
     */
    public function getHaveParallel()
    {
        return $this->haveParallel;
    }

    /**
     * Set haveUsb
     *
     * @param boolean $haveUsb
     *
     * @return GlpiPrinters
     */
    public function setHaveUsb($haveUsb)
    {
        $this->haveUsb = $haveUsb;

        return $this;
    }

    /**
     * Get haveUsb
     *
     * @return boolean
     */
    public function getHaveUsb()
    {
        return $this->haveUsb;
    }

    /**
     * Set haveWifi
     *
     * @param boolean $haveWifi
     *
     * @return GlpiPrinters
     */
    public function setHaveWifi($haveWifi)
    {
        $this->haveWifi = $haveWifi;

        return $this;
    }

    /**
     * Get haveWifi
     *
     * @return boolean
     */
    public function getHaveWifi()
    {
        return $this->haveWifi;
    }

    /**
     * Set haveEthernet
     *
     * @param boolean $haveEthernet
     *
     * @return GlpiPrinters
     */
    public function setHaveEthernet($haveEthernet)
    {
        $this->haveEthernet = $haveEthernet;

        return $this;
    }

    /**
     * Get haveEthernet
     *
     * @return boolean
     */
    public function getHaveEthernet()
    {
        return $this->haveEthernet;
    }

    /**
     * Set comment
     *
     * @param string $comment
     *
     * @return GlpiPrinters
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
     * Set memorySize
     *
     * @param string $memorySize
     *
     * @return GlpiPrinters
     */
    public function setMemorySize($memorySize)
    {
        $this->memorySize = $memorySize;

        return $this;
    }

    /**
     * Get memorySize
     *
     * @return string
     */
    public function getMemorySize()
    {
        return $this->memorySize;
    }

    /**
     * Set locationsId
     *
     * @param integer $locationsId
     *
     * @return GlpiPrinters
     */
    public function setLocationsId($locationsId)
    {
        $this->locationsId = $locationsId;

        return $this;
    }

    /**
     * Get locationsId
     *
     * @return integer
     */
    public function getLocationsId()
    {
        return $this->locationsId;
    }

    /**
     * Set domainsId
     *
     * @param integer $domainsId
     *
     * @return GlpiPrinters
     */
    public function setDomainsId($domainsId)
    {
        $this->domainsId = $domainsId;

        return $this;
    }

    /**
     * Get domainsId
     *
     * @return integer
     */
    public function getDomainsId()
    {
        return $this->domainsId;
    }

    /**
     * Set networksId
     *
     * @param integer $networksId
     *
     * @return GlpiPrinters
     */
    public function setNetworksId($networksId)
    {
        $this->networksId = $networksId;

        return $this;
    }

    /**
     * Get networksId
     *
     * @return integer
     */
    public function getNetworksId()
    {
        return $this->networksId;
    }

    /**
     * Set printertypesId
     *
     * @param integer $printertypesId
     *
     * @return GlpiPrinters
     */
    public function setPrintertypesId($printertypesId)
    {
        $this->printertypesId = $printertypesId;

        return $this;
    }

    /**
     * Get printertypesId
     *
     * @return integer
     */
    public function getPrintertypesId()
    {
        return $this->printertypesId;
    }

    /**
     * Set printermodelsId
     *
     * @param integer $printermodelsId
     *
     * @return GlpiPrinters
     */
    public function setPrintermodelsId($printermodelsId)
    {
        $this->printermodelsId = $printermodelsId;

        return $this;
    }

    /**
     * Get printermodelsId
     *
     * @return integer
     */
    public function getPrintermodelsId()
    {
        return $this->printermodelsId;
    }

    /**
     * Set manufacturersId
     *
     * @param integer $manufacturersId
     *
     * @return GlpiPrinters
     */
    public function setManufacturersId($manufacturersId)
    {
        $this->manufacturersId = $manufacturersId;

        return $this;
    }

    /**
     * Get manufacturersId
     *
     * @return integer
     */
    public function getManufacturersId()
    {
        return $this->manufacturersId;
    }

    /**
     * Set isGlobal
     *
     * @param boolean $isGlobal
     *
     * @return GlpiPrinters
     */
    public function setIsGlobal($isGlobal)
    {
        $this->isGlobal = $isGlobal;

        return $this;
    }

    /**
     * Get isGlobal
     *
     * @return boolean
     */
    public function getIsGlobal()
    {
        return $this->isGlobal;
    }

    /**
     * Set isDeleted
     *
     * @param boolean $isDeleted
     *
     * @return GlpiPrinters
     */
    public function setIsDeleted($isDeleted)
    {
        $this->isDeleted = $isDeleted;

        return $this;
    }

    /**
     * Get isDeleted
     *
     * @return boolean
     */
    public function getIsDeleted()
    {
        return $this->isDeleted;
    }

    /**
     * Set isTemplate
     *
     * @param boolean $isTemplate
     *
     * @return GlpiPrinters
     */
    public function setIsTemplate($isTemplate)
    {
        $this->isTemplate = $isTemplate;

        return $this;
    }

    /**
     * Get isTemplate
     *
     * @return boolean
     */
    public function getIsTemplate()
    {
        return $this->isTemplate;
    }

    /**
     * Set templateName
     *
     * @param string $templateName
     *
     * @return GlpiPrinters
     */
    public function setTemplateName($templateName)
    {
        $this->templateName = $templateName;

        return $this;
    }

    /**
     * Get templateName
     *
     * @return string
     */
    public function getTemplateName()
    {
        return $this->templateName;
    }

    /**
     * Set initPagesCounter
     *
     * @param integer $initPagesCounter
     *
     * @return GlpiPrinters
     */
    public function setInitPagesCounter($initPagesCounter)
    {
        $this->initPagesCounter = $initPagesCounter;

        return $this;
    }

    /**
     * Get initPagesCounter
     *
     * @return integer
     */
    public function getInitPagesCounter()
    {
        return $this->initPagesCounter;
    }

    /**
     * Set lastPagesCounter
     *
     * @param integer $lastPagesCounter
     *
     * @return GlpiPrinters
     */
    public function setLastPagesCounter($lastPagesCounter)
    {
        $this->lastPagesCounter = $lastPagesCounter;

        return $this;
    }

    /**
     * Get lastPagesCounter
     *
     * @return integer
     */
    public function getLastPagesCounter()
    {
        return $this->lastPagesCounter;
    }

    /**
     * Set usersId
     *
     * @param integer $usersId
     *
     * @return GlpiPrinters
     */
    public function setUsersId($usersId)
    {
        $this->usersId = $usersId;

        return $this;
    }

    /**
     * Get usersId
     *
     * @return integer
     */
    public function getUsersId()
    {
        return $this->usersId;
    }

    /**
     * Set groupsId
     *
     * @param integer $groupsId
     *
     * @return GlpiPrinters
     */
    public function setGroupsId($groupsId)
    {
        $this->groupsId = $groupsId;

        return $this;
    }

    /**
     * Get groupsId
     *
     * @return integer
     */
    public function getGroupsId()
    {
        return $this->groupsId;
    }

    /**
     * Set statesId
     *
     * @param integer $statesId
     *
     * @return GlpiPrinters
     */
    public function setStatesId($statesId)
    {
        $this->statesId = $statesId;

        return $this;
    }

    /**
     * Get statesId
     *
     * @return integer
     */
    public function getStatesId()
    {
        return $this->statesId;
    }

    /**
     * Set ticketTco
     *
     * @param string $ticketTco
     *
     * @return GlpiPrinters
     */
    public function setTicketTco($ticketTco)
    {
        $this->ticketTco = $ticketTco;

        return $this;
    }

    /**
     * Get ticketTco
     *
     * @return string
     */
    public function getTicketTco()
    {
        return $this->ticketTco;
    }

    /**
     * Set isDynamic
     *
     * @param boolean $isDynamic
     *
     * @return GlpiPrinters
     */
    public function setIsDynamic($isDynamic)
    {
        $this->isDynamic = $isDynamic;

        return $this;
    }

    /**
     * Get isDynamic
     *
     * @return boolean
     */
    public function getIsDynamic()
    {
        return $this->isDynamic;
    }

    /**
     * Set dateCreation
     *
     * @param \DateTime $dateCreation
     *
     * @return GlpiPrinters
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
