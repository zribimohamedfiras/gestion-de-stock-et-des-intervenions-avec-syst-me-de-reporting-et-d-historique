<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * GlpiComputers
 *
 * @ORM\Table(name="glpi_computers", indexes={@ORM\Index(name="date_mod", columns={"date_mod"}), @ORM\Index(name="name", columns={"name"}), @ORM\Index(name="is_template", columns={"is_template"}), @ORM\Index(name="autoupdatesystems_id", columns={"autoupdatesystems_id"}), @ORM\Index(name="domains_id", columns={"domains_id"}), @ORM\Index(name="entities_id", columns={"entities_id"}), @ORM\Index(name="manufacturers_id", columns={"manufacturers_id"}), @ORM\Index(name="groups_id", columns={"groups_id"}), @ORM\Index(name="users_id", columns={"users_id"}), @ORM\Index(name="locations_id", columns={"locations_id"}), @ORM\Index(name="computermodels_id", columns={"computermodels_id"}), @ORM\Index(name="networks_id", columns={"networks_id"}), @ORM\Index(name="operatingsystems_id", columns={"operatingsystems_id"}), @ORM\Index(name="operatingsystemservicepacks_id", columns={"operatingsystemservicepacks_id"}), @ORM\Index(name="operatingsystemversions_id", columns={"operatingsystemversions_id"}), @ORM\Index(name="operatingsystemarchitectures_id", columns={"operatingsystemarchitectures_id"}), @ORM\Index(name="states_id", columns={"states_id"}), @ORM\Index(name="users_id_tech", columns={"users_id_tech"}), @ORM\Index(name="computertypes_id", columns={"computertypes_id"}), @ORM\Index(name="is_deleted", columns={"is_deleted"}), @ORM\Index(name="groups_id_tech", columns={"groups_id_tech"}), @ORM\Index(name="is_dynamic", columns={"is_dynamic"}), @ORM\Index(name="serial", columns={"serial"}), @ORM\Index(name="otherserial", columns={"otherserial"}), @ORM\Index(name="uuid", columns={"uuid"}), @ORM\Index(name="date_creation", columns={"date_creation"}), @ORM\Index(name="is_recursive", columns={"is_recursive"})})
 * @ORM\Entity
 */
class GlpiComputers
{
    /**
     * @var integer
     *
     * @ORM\Column(name="entities_id", type="integer", nullable=false)
     */
    private $entitiesId = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=255, nullable=true)
     */
    private $name;

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
     * @var integer
     *
     * @ORM\Column(name="operatingsystems_id", type="integer", nullable=false)
     */
    private $operatingsystemsId = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="operatingsystemversions_id", type="integer", nullable=false)
     */
    private $operatingsystemversionsId = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="operatingsystemservicepacks_id", type="integer", nullable=false)
     */
    private $operatingsystemservicepacksId = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="operatingsystemarchitectures_id", type="integer", nullable=false)
     */
    private $operatingsystemarchitecturesId = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="os_license_number", type="string", length=255, nullable=true)
     */
    private $osLicenseNumber;

    /**
     * @var string
     *
     * @ORM\Column(name="os_licenseid", type="string", length=255, nullable=true)
     */
    private $osLicenseid;

    /**
     * @var string
     *
     * @ORM\Column(name="os_kernel_version", type="string", length=255, nullable=true)
     */
    private $osKernelVersion;

    /**
     * @var integer
     *
     * @ORM\Column(name="autoupdatesystems_id", type="integer", nullable=false)
     */
    private $autoupdatesystemsId = '0';

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
     * @ORM\Column(name="computermodels_id", type="integer", nullable=false)
     */
    private $computermodelsId = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="computertypes_id", type="integer", nullable=false)
     */
    private $computertypesId = '0';

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
     * @ORM\Column(name="manufacturers_id", type="integer", nullable=false)
     */
    private $manufacturersId = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="is_deleted", type="boolean", nullable=false)
     */
    private $isDeleted = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="is_dynamic", type="boolean", nullable=false)
     */
    private $isDynamic = '0';

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
     * @var string
     *
     * @ORM\Column(name="uuid", type="string", length=255, nullable=true)
     */
    private $uuid;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_creation", type="datetime", nullable=true)
     */
    private $dateCreation;

    /**
     * @var boolean
     *
     * @ORM\Column(name="is_recursive", type="boolean", nullable=false)
     */
    private $isRecursive = '0';

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
     * @return GlpiComputers
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
     * Set name
     *
     * @param string $name
     *
     * @return GlpiComputers
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
     * Set serial
     *
     * @param string $serial
     *
     * @return GlpiComputers
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
     * @return GlpiComputers
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
     * Set contact
     *
     * @param string $contact
     *
     * @return GlpiComputers
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
     * @return GlpiComputers
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
     * @return GlpiComputers
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
     * @return GlpiComputers
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
     * Set comment
     *
     * @param string $comment
     *
     * @return GlpiComputers
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
     * @return GlpiComputers
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
     * Set operatingsystemsId
     *
     * @param integer $operatingsystemsId
     *
     * @return GlpiComputers
     */
    public function setOperatingsystemsId($operatingsystemsId)
    {
        $this->operatingsystemsId = $operatingsystemsId;

        return $this;
    }

    /**
     * Get operatingsystemsId
     *
     * @return integer
     */
    public function getOperatingsystemsId()
    {
        return $this->operatingsystemsId;
    }

    /**
     * Set operatingsystemversionsId
     *
     * @param integer $operatingsystemversionsId
     *
     * @return GlpiComputers
     */
    public function setOperatingsystemversionsId($operatingsystemversionsId)
    {
        $this->operatingsystemversionsId = $operatingsystemversionsId;

        return $this;
    }

    /**
     * Get operatingsystemversionsId
     *
     * @return integer
     */
    public function getOperatingsystemversionsId()
    {
        return $this->operatingsystemversionsId;
    }

    /**
     * Set operatingsystemservicepacksId
     *
     * @param integer $operatingsystemservicepacksId
     *
     * @return GlpiComputers
     */
    public function setOperatingsystemservicepacksId($operatingsystemservicepacksId)
    {
        $this->operatingsystemservicepacksId = $operatingsystemservicepacksId;

        return $this;
    }

    /**
     * Get operatingsystemservicepacksId
     *
     * @return integer
     */
    public function getOperatingsystemservicepacksId()
    {
        return $this->operatingsystemservicepacksId;
    }

    /**
     * Set operatingsystemarchitecturesId
     *
     * @param integer $operatingsystemarchitecturesId
     *
     * @return GlpiComputers
     */
    public function setOperatingsystemarchitecturesId($operatingsystemarchitecturesId)
    {
        $this->operatingsystemarchitecturesId = $operatingsystemarchitecturesId;

        return $this;
    }

    /**
     * Get operatingsystemarchitecturesId
     *
     * @return integer
     */
    public function getOperatingsystemarchitecturesId()
    {
        return $this->operatingsystemarchitecturesId;
    }

    /**
     * Set osLicenseNumber
     *
     * @param string $osLicenseNumber
     *
     * @return GlpiComputers
     */
    public function setOsLicenseNumber($osLicenseNumber)
    {
        $this->osLicenseNumber = $osLicenseNumber;

        return $this;
    }

    /**
     * Get osLicenseNumber
     *
     * @return string
     */
    public function getOsLicenseNumber()
    {
        return $this->osLicenseNumber;
    }

    /**
     * Set osLicenseid
     *
     * @param string $osLicenseid
     *
     * @return GlpiComputers
     */
    public function setOsLicenseid($osLicenseid)
    {
        $this->osLicenseid = $osLicenseid;

        return $this;
    }

    /**
     * Get osLicenseid
     *
     * @return string
     */
    public function getOsLicenseid()
    {
        return $this->osLicenseid;
    }

    /**
     * Set osKernelVersion
     *
     * @param string $osKernelVersion
     *
     * @return GlpiComputers
     */
    public function setOsKernelVersion($osKernelVersion)
    {
        $this->osKernelVersion = $osKernelVersion;

        return $this;
    }

    /**
     * Get osKernelVersion
     *
     * @return string
     */
    public function getOsKernelVersion()
    {
        return $this->osKernelVersion;
    }

    /**
     * Set autoupdatesystemsId
     *
     * @param integer $autoupdatesystemsId
     *
     * @return GlpiComputers
     */
    public function setAutoupdatesystemsId($autoupdatesystemsId)
    {
        $this->autoupdatesystemsId = $autoupdatesystemsId;

        return $this;
    }

    /**
     * Get autoupdatesystemsId
     *
     * @return integer
     */
    public function getAutoupdatesystemsId()
    {
        return $this->autoupdatesystemsId;
    }

    /**
     * Set locationsId
     *
     * @param integer $locationsId
     *
     * @return GlpiComputers
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
     * @return GlpiComputers
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
     * @return GlpiComputers
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
     * Set computermodelsId
     *
     * @param integer $computermodelsId
     *
     * @return GlpiComputers
     */
    public function setComputermodelsId($computermodelsId)
    {
        $this->computermodelsId = $computermodelsId;

        return $this;
    }

    /**
     * Get computermodelsId
     *
     * @return integer
     */
    public function getComputermodelsId()
    {
        return $this->computermodelsId;
    }

    /**
     * Set computertypesId
     *
     * @param integer $computertypesId
     *
     * @return GlpiComputers
     */
    public function setComputertypesId($computertypesId)
    {
        $this->computertypesId = $computertypesId;

        return $this;
    }

    /**
     * Get computertypesId
     *
     * @return integer
     */
    public function getComputertypesId()
    {
        return $this->computertypesId;
    }

    /**
     * Set isTemplate
     *
     * @param boolean $isTemplate
     *
     * @return GlpiComputers
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
     * @return GlpiComputers
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
     * Set manufacturersId
     *
     * @param integer $manufacturersId
     *
     * @return GlpiComputers
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
     * Set isDeleted
     *
     * @param boolean $isDeleted
     *
     * @return GlpiComputers
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
     * Set isDynamic
     *
     * @param boolean $isDynamic
     *
     * @return GlpiComputers
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
     * Set usersId
     *
     * @param integer $usersId
     *
     * @return GlpiComputers
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
     * @return GlpiComputers
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
     * @return GlpiComputers
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
     * @return GlpiComputers
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
     * Set uuid
     *
     * @param string $uuid
     *
     * @return GlpiComputers
     */
    public function setUuid($uuid)
    {
        $this->uuid = $uuid;

        return $this;
    }

    /**
     * Get uuid
     *
     * @return string
     */
    public function getUuid()
    {
        return $this->uuid;
    }

    /**
     * Set dateCreation
     *
     * @param \DateTime $dateCreation
     *
     * @return GlpiComputers
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
     * Set isRecursive
     *
     * @param boolean $isRecursive
     *
     * @return GlpiComputers
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
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }
}
