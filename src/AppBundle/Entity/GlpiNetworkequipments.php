<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * GlpiNetworkequipments
 *
 * @ORM\Table(name="glpi_networkequipments", indexes={@ORM\Index(name="name", columns={"name"}), @ORM\Index(name="is_template", columns={"is_template"}), @ORM\Index(name="domains_id", columns={"domains_id"}), @ORM\Index(name="networkequipmentfirmwares_id", columns={"networkequipmentfirmwares_id"}), @ORM\Index(name="entities_id", columns={"entities_id"}), @ORM\Index(name="manufacturers_id", columns={"manufacturers_id"}), @ORM\Index(name="groups_id", columns={"groups_id"}), @ORM\Index(name="users_id", columns={"users_id"}), @ORM\Index(name="locations_id", columns={"locations_id"}), @ORM\Index(name="networkequipmentmodels_id", columns={"networkequipmentmodels_id"}), @ORM\Index(name="networks_id", columns={"networks_id"}), @ORM\Index(name="states_id", columns={"states_id"}), @ORM\Index(name="users_id_tech", columns={"users_id_tech"}), @ORM\Index(name="networkequipmenttypes_id", columns={"networkequipmenttypes_id"}), @ORM\Index(name="is_deleted", columns={"is_deleted"}), @ORM\Index(name="date_mod", columns={"date_mod"}), @ORM\Index(name="groups_id_tech", columns={"groups_id_tech"}), @ORM\Index(name="is_dynamic", columns={"is_dynamic"}), @ORM\Index(name="serial", columns={"serial"}), @ORM\Index(name="otherserial", columns={"otherserial"}), @ORM\Index(name="date_creation", columns={"date_creation"})})
 * @ORM\Entity
 */
class GlpiNetworkequipments
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
     * @var string
     *
     * @ORM\Column(name="ram", type="string", length=255, nullable=true)
     */
    private $ram;

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
     * @var \DateTime
     *
     * @ORM\Column(name="date_mod", type="datetime", nullable=true)
     */
    private $dateMod;

    /**
     * @var string
     *
     * @ORM\Column(name="comment", type="text", length=65535, nullable=true)
     */
    private $comment;

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
     * @ORM\Column(name="networkequipmenttypes_id", type="integer", nullable=false)
     */
    private $networkequipmenttypesId = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="networkequipmentmodels_id", type="integer", nullable=false)
     */
    private $networkequipmentmodelsId = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="networkequipmentfirmwares_id", type="integer", nullable=false)
     */
    private $networkequipmentfirmwaresId = '0';

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
     * @return GlpiNetworkequipments
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
     * @return GlpiNetworkequipments
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
     * @return GlpiNetworkequipments
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
     * Set ram
     *
     * @param string $ram
     *
     * @return GlpiNetworkequipments
     */
    public function setRam($ram)
    {
        $this->ram = $ram;

        return $this;
    }

    /**
     * Get ram
     *
     * @return string
     */
    public function getRam()
    {
        return $this->ram;
    }

    /**
     * Set serial
     *
     * @param string $serial
     *
     * @return GlpiNetworkequipments
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
     * @return GlpiNetworkequipments
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
     * @return GlpiNetworkequipments
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
     * @return GlpiNetworkequipments
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
     * @return GlpiNetworkequipments
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
     * @return GlpiNetworkequipments
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
     * Set dateMod
     *
     * @param \DateTime $dateMod
     *
     * @return GlpiNetworkequipments
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
     * Set comment
     *
     * @param string $comment
     *
     * @return GlpiNetworkequipments
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
     * Set locationsId
     *
     * @param integer $locationsId
     *
     * @return GlpiNetworkequipments
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
     * @return GlpiNetworkequipments
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
     * @return GlpiNetworkequipments
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
     * Set networkequipmenttypesId
     *
     * @param integer $networkequipmenttypesId
     *
     * @return GlpiNetworkequipments
     */
    public function setNetworkequipmenttypesId($networkequipmenttypesId)
    {
        $this->networkequipmenttypesId = $networkequipmenttypesId;

        return $this;
    }

    /**
     * Get networkequipmenttypesId
     *
     * @return integer
     */
    public function getNetworkequipmenttypesId()
    {
        return $this->networkequipmenttypesId;
    }

    /**
     * Set networkequipmentmodelsId
     *
     * @param integer $networkequipmentmodelsId
     *
     * @return GlpiNetworkequipments
     */
    public function setNetworkequipmentmodelsId($networkequipmentmodelsId)
    {
        $this->networkequipmentmodelsId = $networkequipmentmodelsId;

        return $this;
    }

    /**
     * Get networkequipmentmodelsId
     *
     * @return integer
     */
    public function getNetworkequipmentmodelsId()
    {
        return $this->networkequipmentmodelsId;
    }

    /**
     * Set networkequipmentfirmwaresId
     *
     * @param integer $networkequipmentfirmwaresId
     *
     * @return GlpiNetworkequipments
     */
    public function setNetworkequipmentfirmwaresId($networkequipmentfirmwaresId)
    {
        $this->networkequipmentfirmwaresId = $networkequipmentfirmwaresId;

        return $this;
    }

    /**
     * Get networkequipmentfirmwaresId
     *
     * @return integer
     */
    public function getNetworkequipmentfirmwaresId()
    {
        return $this->networkequipmentfirmwaresId;
    }

    /**
     * Set manufacturersId
     *
     * @param integer $manufacturersId
     *
     * @return GlpiNetworkequipments
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
     * @return GlpiNetworkequipments
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
     * @return GlpiNetworkequipments
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
     * @return GlpiNetworkequipments
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
     * Set usersId
     *
     * @param integer $usersId
     *
     * @return GlpiNetworkequipments
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
     * @return GlpiNetworkequipments
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
     * @return GlpiNetworkequipments
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
     * @return GlpiNetworkequipments
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
     * @return GlpiNetworkequipments
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
     * @return GlpiNetworkequipments
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
