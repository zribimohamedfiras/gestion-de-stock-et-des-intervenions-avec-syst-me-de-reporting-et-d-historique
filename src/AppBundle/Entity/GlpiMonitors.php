<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * GlpiMonitors
 *
 * @ORM\Table(name="glpi_monitors", indexes={@ORM\Index(name="name", columns={"name"}), @ORM\Index(name="is_template", columns={"is_template"}), @ORM\Index(name="is_global", columns={"is_global"}), @ORM\Index(name="entities_id", columns={"entities_id"}), @ORM\Index(name="manufacturers_id", columns={"manufacturers_id"}), @ORM\Index(name="groups_id", columns={"groups_id"}), @ORM\Index(name="users_id", columns={"users_id"}), @ORM\Index(name="locations_id", columns={"locations_id"}), @ORM\Index(name="monitormodels_id", columns={"monitormodels_id"}), @ORM\Index(name="states_id", columns={"states_id"}), @ORM\Index(name="users_id_tech", columns={"users_id_tech"}), @ORM\Index(name="monitortypes_id", columns={"monitortypes_id"}), @ORM\Index(name="is_deleted", columns={"is_deleted"}), @ORM\Index(name="groups_id_tech", columns={"groups_id_tech"}), @ORM\Index(name="is_dynamic", columns={"is_dynamic"}), @ORM\Index(name="serial", columns={"serial"}), @ORM\Index(name="otherserial", columns={"otherserial"}), @ORM\Index(name="date_creation", columns={"date_creation"}), @ORM\Index(name="is_recursive", columns={"is_recursive"})})
 * @ORM\Entity
 */
class GlpiMonitors
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
     * @ORM\Column(name="comment", type="text", length=65535, nullable=true)
     */
    private $comment;

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
     * @ORM\Column(name="size", type="integer", nullable=false)
     */
    private $size = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="have_micro", type="boolean", nullable=false)
     */
    private $haveMicro = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="have_speaker", type="boolean", nullable=false)
     */
    private $haveSpeaker = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="have_subd", type="boolean", nullable=false)
     */
    private $haveSubd = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="have_bnc", type="boolean", nullable=false)
     */
    private $haveBnc = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="have_dvi", type="boolean", nullable=false)
     */
    private $haveDvi = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="have_pivot", type="boolean", nullable=false)
     */
    private $havePivot = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="have_hdmi", type="boolean", nullable=false)
     */
    private $haveHdmi = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="have_displayport", type="boolean", nullable=false)
     */
    private $haveDisplayport = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="locations_id", type="integer", nullable=false)
     */
    private $locationsId = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="monitortypes_id", type="integer", nullable=false)
     */
    private $monitortypesId = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="monitormodels_id", type="integer", nullable=false)
     */
    private $monitormodelsId = '0';

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
     * @return GlpiMonitors
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
     * @return GlpiMonitors
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
     * @return GlpiMonitors
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
     * @return GlpiMonitors
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
     * @return GlpiMonitors
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
     * @return GlpiMonitors
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
     * @return GlpiMonitors
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
     * @return GlpiMonitors
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
     * Set serial
     *
     * @param string $serial
     *
     * @return GlpiMonitors
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
     * @return GlpiMonitors
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
     * Set size
     *
     * @param integer $size
     *
     * @return GlpiMonitors
     */
    public function setSize($size)
    {
        $this->size = $size;

        return $this;
    }

    /**
     * Get size
     *
     * @return integer
     */
    public function getSize()
    {
        return $this->size;
    }

    /**
     * Set haveMicro
     *
     * @param boolean $haveMicro
     *
     * @return GlpiMonitors
     */
    public function setHaveMicro($haveMicro)
    {
        $this->haveMicro = $haveMicro;

        return $this;
    }

    /**
     * Get haveMicro
     *
     * @return boolean
     */
    public function getHaveMicro()
    {
        return $this->haveMicro;
    }

    /**
     * Set haveSpeaker
     *
     * @param boolean $haveSpeaker
     *
     * @return GlpiMonitors
     */
    public function setHaveSpeaker($haveSpeaker)
    {
        $this->haveSpeaker = $haveSpeaker;

        return $this;
    }

    /**
     * Get haveSpeaker
     *
     * @return boolean
     */
    public function getHaveSpeaker()
    {
        return $this->haveSpeaker;
    }

    /**
     * Set haveSubd
     *
     * @param boolean $haveSubd
     *
     * @return GlpiMonitors
     */
    public function setHaveSubd($haveSubd)
    {
        $this->haveSubd = $haveSubd;

        return $this;
    }

    /**
     * Get haveSubd
     *
     * @return boolean
     */
    public function getHaveSubd()
    {
        return $this->haveSubd;
    }

    /**
     * Set haveBnc
     *
     * @param boolean $haveBnc
     *
     * @return GlpiMonitors
     */
    public function setHaveBnc($haveBnc)
    {
        $this->haveBnc = $haveBnc;

        return $this;
    }

    /**
     * Get haveBnc
     *
     * @return boolean
     */
    public function getHaveBnc()
    {
        return $this->haveBnc;
    }

    /**
     * Set haveDvi
     *
     * @param boolean $haveDvi
     *
     * @return GlpiMonitors
     */
    public function setHaveDvi($haveDvi)
    {
        $this->haveDvi = $haveDvi;

        return $this;
    }

    /**
     * Get haveDvi
     *
     * @return boolean
     */
    public function getHaveDvi()
    {
        return $this->haveDvi;
    }

    /**
     * Set havePivot
     *
     * @param boolean $havePivot
     *
     * @return GlpiMonitors
     */
    public function setHavePivot($havePivot)
    {
        $this->havePivot = $havePivot;

        return $this;
    }

    /**
     * Get havePivot
     *
     * @return boolean
     */
    public function getHavePivot()
    {
        return $this->havePivot;
    }

    /**
     * Set haveHdmi
     *
     * @param boolean $haveHdmi
     *
     * @return GlpiMonitors
     */
    public function setHaveHdmi($haveHdmi)
    {
        $this->haveHdmi = $haveHdmi;

        return $this;
    }

    /**
     * Get haveHdmi
     *
     * @return boolean
     */
    public function getHaveHdmi()
    {
        return $this->haveHdmi;
    }

    /**
     * Set haveDisplayport
     *
     * @param boolean $haveDisplayport
     *
     * @return GlpiMonitors
     */
    public function setHaveDisplayport($haveDisplayport)
    {
        $this->haveDisplayport = $haveDisplayport;

        return $this;
    }

    /**
     * Get haveDisplayport
     *
     * @return boolean
     */
    public function getHaveDisplayport()
    {
        return $this->haveDisplayport;
    }

    /**
     * Set locationsId
     *
     * @param integer $locationsId
     *
     * @return GlpiMonitors
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
     * Set monitortypesId
     *
     * @param integer $monitortypesId
     *
     * @return GlpiMonitors
     */
    public function setMonitortypesId($monitortypesId)
    {
        $this->monitortypesId = $monitortypesId;

        return $this;
    }

    /**
     * Get monitortypesId
     *
     * @return integer
     */
    public function getMonitortypesId()
    {
        return $this->monitortypesId;
    }

    /**
     * Set monitormodelsId
     *
     * @param integer $monitormodelsId
     *
     * @return GlpiMonitors
     */
    public function setMonitormodelsId($monitormodelsId)
    {
        $this->monitormodelsId = $monitormodelsId;

        return $this;
    }

    /**
     * Get monitormodelsId
     *
     * @return integer
     */
    public function getMonitormodelsId()
    {
        return $this->monitormodelsId;
    }

    /**
     * Set manufacturersId
     *
     * @param integer $manufacturersId
     *
     * @return GlpiMonitors
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
     * @return GlpiMonitors
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
     * @return GlpiMonitors
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
     * @return GlpiMonitors
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
     * @return GlpiMonitors
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
     * @return GlpiMonitors
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
     * @return GlpiMonitors
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
     * @return GlpiMonitors
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
     * @return GlpiMonitors
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
     * @return GlpiMonitors
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
     * @return GlpiMonitors
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
     * @return GlpiMonitors
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
