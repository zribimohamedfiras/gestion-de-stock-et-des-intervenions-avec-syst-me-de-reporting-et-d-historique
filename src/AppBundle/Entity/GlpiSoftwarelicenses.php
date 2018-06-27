<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * GlpiSoftwarelicenses
 *
 * @ORM\Table(name="glpi_softwarelicenses", indexes={@ORM\Index(name="name", columns={"name"}), @ORM\Index(name="is_template", columns={"is_template"}), @ORM\Index(name="serial", columns={"serial"}), @ORM\Index(name="otherserial", columns={"otherserial"}), @ORM\Index(name="expire", columns={"expire"}), @ORM\Index(name="softwareversions_id_buy", columns={"softwareversions_id_buy"}), @ORM\Index(name="entities_id", columns={"entities_id"}), @ORM\Index(name="softwarelicensetypes_id", columns={"softwarelicensetypes_id"}), @ORM\Index(name="softwareversions_id_use", columns={"softwareversions_id_use"}), @ORM\Index(name="date_mod", columns={"date_mod"}), @ORM\Index(name="softwares_id_expire", columns={"softwares_id", "expire"}), @ORM\Index(name="locations_id", columns={"locations_id"}), @ORM\Index(name="users_id_tech", columns={"users_id_tech"}), @ORM\Index(name="users_id", columns={"users_id"}), @ORM\Index(name="groups_id_tech", columns={"groups_id_tech"}), @ORM\Index(name="groups_id", columns={"groups_id"}), @ORM\Index(name="is_helpdesk_visible", columns={"is_helpdesk_visible"}), @ORM\Index(name="is_deleted", columns={"is_helpdesk_visible"}), @ORM\Index(name="date_creation", columns={"date_creation"}), @ORM\Index(name="manufacturers_id", columns={"manufacturers_id"}), @ORM\Index(name="states_id", columns={"states_id"})})
 * @ORM\Entity
 */
class GlpiSoftwarelicenses
{
    /**
     * @var integer
     *
     * @ORM\Column(name="softwares_id", type="integer", nullable=false)
     */
    private $softwaresId = '0';

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
     * @ORM\Column(name="number", type="integer", nullable=false)
     */
    private $number = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="softwarelicensetypes_id", type="integer", nullable=false)
     */
    private $softwarelicensetypesId = '0';

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
     * @var integer
     *
     * @ORM\Column(name="softwareversions_id_buy", type="integer", nullable=false)
     */
    private $softwareversionsIdBuy = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="softwareversions_id_use", type="integer", nullable=false)
     */
    private $softwareversionsIdUse = '0';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="expire", type="date", nullable=true)
     */
    private $expire;

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
     * @var boolean
     *
     * @ORM\Column(name="is_valid", type="boolean", nullable=false)
     */
    private $isValid = '1';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_creation", type="datetime", nullable=true)
     */
    private $dateCreation;

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
     * @ORM\Column(name="locations_id", type="integer", nullable=false)
     */
    private $locationsId = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="users_id_tech", type="integer", nullable=false)
     */
    private $usersIdTech = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="users_id", type="integer", nullable=false)
     */
    private $usersId = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="groups_id_tech", type="integer", nullable=false)
     */
    private $groupsIdTech = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="groups_id", type="integer", nullable=false)
     */
    private $groupsId = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="is_helpdesk_visible", type="boolean", nullable=false)
     */
    private $isHelpdeskVisible = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="is_deleted", type="boolean", nullable=false)
     */
    private $isDeleted = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="manufacturers_id", type="integer", nullable=false)
     */
    private $manufacturersId = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="states_id", type="integer", nullable=false)
     */
    private $statesId = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;



    /**
     * Set softwaresId
     *
     * @param integer $softwaresId
     *
     * @return GlpiSoftwarelicenses
     */
    public function setSoftwaresId($softwaresId)
    {
        $this->softwaresId = $softwaresId;

        return $this;
    }

    /**
     * Get softwaresId
     *
     * @return integer
     */
    public function getSoftwaresId()
    {
        return $this->softwaresId;
    }

    /**
     * Set entitiesId
     *
     * @param integer $entitiesId
     *
     * @return GlpiSoftwarelicenses
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
     * @return GlpiSoftwarelicenses
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
     * Set number
     *
     * @param integer $number
     *
     * @return GlpiSoftwarelicenses
     */
    public function setNumber($number)
    {
        $this->number = $number;

        return $this;
    }

    /**
     * Get number
     *
     * @return integer
     */
    public function getNumber()
    {
        return $this->number;
    }

    /**
     * Set softwarelicensetypesId
     *
     * @param integer $softwarelicensetypesId
     *
     * @return GlpiSoftwarelicenses
     */
    public function setSoftwarelicensetypesId($softwarelicensetypesId)
    {
        $this->softwarelicensetypesId = $softwarelicensetypesId;

        return $this;
    }

    /**
     * Get softwarelicensetypesId
     *
     * @return integer
     */
    public function getSoftwarelicensetypesId()
    {
        return $this->softwarelicensetypesId;
    }

    /**
     * Set name
     *
     * @param string $name
     *
     * @return GlpiSoftwarelicenses
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
     * @return GlpiSoftwarelicenses
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
     * @return GlpiSoftwarelicenses
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
     * Set softwareversionsIdBuy
     *
     * @param integer $softwareversionsIdBuy
     *
     * @return GlpiSoftwarelicenses
     */
    public function setSoftwareversionsIdBuy($softwareversionsIdBuy)
    {
        $this->softwareversionsIdBuy = $softwareversionsIdBuy;

        return $this;
    }

    /**
     * Get softwareversionsIdBuy
     *
     * @return integer
     */
    public function getSoftwareversionsIdBuy()
    {
        return $this->softwareversionsIdBuy;
    }

    /**
     * Set softwareversionsIdUse
     *
     * @param integer $softwareversionsIdUse
     *
     * @return GlpiSoftwarelicenses
     */
    public function setSoftwareversionsIdUse($softwareversionsIdUse)
    {
        $this->softwareversionsIdUse = $softwareversionsIdUse;

        return $this;
    }

    /**
     * Get softwareversionsIdUse
     *
     * @return integer
     */
    public function getSoftwareversionsIdUse()
    {
        return $this->softwareversionsIdUse;
    }

    /**
     * Set expire
     *
     * @param \DateTime $expire
     *
     * @return GlpiSoftwarelicenses
     */
    public function setExpire($expire)
    {
        $this->expire = $expire;

        return $this;
    }

    /**
     * Get expire
     *
     * @return \DateTime
     */
    public function getExpire()
    {
        return $this->expire;
    }

    /**
     * Set comment
     *
     * @param string $comment
     *
     * @return GlpiSoftwarelicenses
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
     * @return GlpiSoftwarelicenses
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
     * Set isValid
     *
     * @param boolean $isValid
     *
     * @return GlpiSoftwarelicenses
     */
    public function setIsValid($isValid)
    {
        $this->isValid = $isValid;

        return $this;
    }

    /**
     * Get isValid
     *
     * @return boolean
     */
    public function getIsValid()
    {
        return $this->isValid;
    }

    /**
     * Set dateCreation
     *
     * @param \DateTime $dateCreation
     *
     * @return GlpiSoftwarelicenses
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
     * Set isTemplate
     *
     * @param boolean $isTemplate
     *
     * @return GlpiSoftwarelicenses
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
     * @return GlpiSoftwarelicenses
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
     * Set locationsId
     *
     * @param integer $locationsId
     *
     * @return GlpiSoftwarelicenses
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
     * Set usersIdTech
     *
     * @param integer $usersIdTech
     *
     * @return GlpiSoftwarelicenses
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
     * Set usersId
     *
     * @param integer $usersId
     *
     * @return GlpiSoftwarelicenses
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
     * Set groupsIdTech
     *
     * @param integer $groupsIdTech
     *
     * @return GlpiSoftwarelicenses
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
     * Set groupsId
     *
     * @param integer $groupsId
     *
     * @return GlpiSoftwarelicenses
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
     * Set isHelpdeskVisible
     *
     * @param boolean $isHelpdeskVisible
     *
     * @return GlpiSoftwarelicenses
     */
    public function setIsHelpdeskVisible($isHelpdeskVisible)
    {
        $this->isHelpdeskVisible = $isHelpdeskVisible;

        return $this;
    }

    /**
     * Get isHelpdeskVisible
     *
     * @return boolean
     */
    public function getIsHelpdeskVisible()
    {
        return $this->isHelpdeskVisible;
    }

    /**
     * Set isDeleted
     *
     * @param boolean $isDeleted
     *
     * @return GlpiSoftwarelicenses
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
     * Set manufacturersId
     *
     * @param integer $manufacturersId
     *
     * @return GlpiSoftwarelicenses
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
     * Set statesId
     *
     * @param integer $statesId
     *
     * @return GlpiSoftwarelicenses
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
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }
}
