<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\ORM\Mapping\OneToOne;

/**
 * GlpiUsers
 *
 * @ORM\Table(name="glpi_users", uniqueConstraints={@ORM\UniqueConstraint(name="unicity", columns={"name"})}, indexes={@ORM\Index(name="firstname", columns={"firstname"}), @ORM\Index(name="realname", columns={"realname"}), @ORM\Index(name="entities_id", columns={"entities_id"}), @ORM\Index(name="profiles_id", columns={"profiles_id"}), @ORM\Index(name="locations_id", columns={"locations_id"}), @ORM\Index(name="usertitles_id", columns={"usertitles_id"}), @ORM\Index(name="usercategories_id", columns={"usercategories_id"}), @ORM\Index(name="is_deleted", columns={"is_deleted"}), @ORM\Index(name="is_active", columns={"is_active"}), @ORM\Index(name="date_mod", columns={"date_mod"}), @ORM\Index(name="authitem", columns={"authtype", "auths_id"}), @ORM\Index(name="is_deleted_ldap", columns={"is_deleted_ldap"}), @ORM\Index(name="date_creation", columns={"date_creation"})})
 * @ORM\Entity
 */
class GlpiUsers
{
    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=255, nullable=true)
     */
    private $name;

    /**
     * @var string
     *
     * @ORM\Column(name="password", type="string", length=255, nullable=true)
     */
    private $password;

    /**
     * @var string
     *
     * @ORM\Column(name="phone", type="string", length=255, nullable=true)
     */
    private $phone;

    /**
     * @var string
     *
     * @ORM\Column(name="phone2", type="string", length=255, nullable=true)
     */
    private $phone2;

    /**
     * @var string
     *
     * @ORM\Column(name="mobile", type="string", length=255, nullable=true)
     */
    private $mobile;

    /**
     * @var string
     *
     * @ORM\Column(name="realname", type="string", length=255, nullable=true)
     */
    private $realname;

    /**
     * @var string
     *
     * @ORM\Column(name="firstname", type="string", length=255, nullable=true)
     */
    private $firstname;

    /**
     * @var integer
     *
     * @ORM\Column(name="locations_id", type="integer", nullable=false)
     */
    private $locationsId = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="language", type="string", length=10, nullable=true)
     */
    private $language;

    /**
     * @var integer
     *
     * @ORM\Column(name="use_mode", type="integer", nullable=false)
     */
    private $useMode = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="list_limit", type="integer", nullable=true)
     */
    private $listLimit;

    /**
     * @var boolean
     *
     * @ORM\Column(name="is_active", type="boolean", nullable=false)
     */
    private $isActive = '1';

    /**
     * @var string
     *
     * @ORM\Column(name="comment", type="text", length=65535, nullable=true)
     */
    private $comment;

    /**
     * @var integer
     *
     * @ORM\Column(name="auths_id", type="integer", nullable=false)
     */
    private $authsId = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="authtype", type="integer", nullable=false)
     */
    private $authtype = '0';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="last_login", type="datetime", nullable=true)
     */
    private $lastLogin;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_mod", type="datetime", nullable=true)
     */
    private $dateMod;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_sync", type="datetime", nullable=true)
     */
    private $dateSync;

    /**
     * @var boolean
     *
     * @ORM\Column(name="is_deleted", type="boolean", nullable=false)
     */
    private $isDeleted = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="profiles_id", type="integer", nullable=false)
     */
    private $profilesId = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="entities_id", type="integer", nullable=false)
     */
    private $entitiesId = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="usertitles_id", type="integer", nullable=false)
     */
    private $usertitlesId = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="usercategories_id", type="integer", nullable=false)
     */
    private $usercategoriesId = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="date_format", type="integer", nullable=true)
     */
    private $dateFormat;

    /**
     * @var integer
     *
     * @ORM\Column(name="number_format", type="integer", nullable=true)
     */
    private $numberFormat;

    /**
     * @var integer
     *
     * @ORM\Column(name="names_format", type="integer", nullable=true)
     */
    private $namesFormat;

    /**
     * @var string
     *
     * @ORM\Column(name="csv_delimiter", type="string", length=1, nullable=true)
     */
    private $csvDelimiter;

    /**
     * @var boolean
     *
     * @ORM\Column(name="is_ids_visible", type="boolean", nullable=true)
     */
    private $isIdsVisible;

    /**
     * @var boolean
     *
     * @ORM\Column(name="use_flat_dropdowntree", type="boolean", nullable=true)
     */
    private $useFlatDropdowntree;

    /**
     * @var boolean
     *
     * @ORM\Column(name="show_jobs_at_login", type="boolean", nullable=true)
     */
    private $showJobsAtLogin;

    /**
     * @var string
     *
     * @ORM\Column(name="priority_1", type="string", length=20, nullable=true)
     */
    private $priority1;

    /**
     * @var string
     *
     * @ORM\Column(name="priority_2", type="string", length=20, nullable=true)
     */
    private $priority2;

    /**
     * @var string
     *
     * @ORM\Column(name="priority_3", type="string", length=20, nullable=true)
     */
    private $priority3;

    /**
     * @var string
     *
     * @ORM\Column(name="priority_4", type="string", length=20, nullable=true)
     */
    private $priority4;

    /**
     * @var string
     *
     * @ORM\Column(name="priority_5", type="string", length=20, nullable=true)
     */
    private $priority5;

    /**
     * @var string
     *
     * @ORM\Column(name="priority_6", type="string", length=20, nullable=true)
     */
    private $priority6;

    /**
     * @var boolean
     *
     * @ORM\Column(name="followup_private", type="boolean", nullable=true)
     */
    private $followupPrivate;

    /**
     * @var boolean
     *
     * @ORM\Column(name="task_private", type="boolean", nullable=true)
     */
    private $taskPrivate;

    /**
     * @var integer
     *
     * @ORM\Column(name="default_requesttypes_id", type="integer", nullable=true)
     */
    private $defaultRequesttypesId;

    /**
     * @var string
     *
     * @ORM\Column(name="password_forget_token", type="string", length=40, nullable=true)
     */
    private $passwordForgetToken;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="password_forget_token_date", type="datetime", nullable=true)
     */
    private $passwordForgetTokenDate;

    /**
     * @var string
     *
     * @ORM\Column(name="user_dn", type="text", length=65535, nullable=true)
     */
    private $userDn;

    /**
     * @var string
     *
     * @ORM\Column(name="registration_number", type="string", length=255, nullable=true)
     */
    private $registrationNumber;

    /**
     * @var boolean
     *
     * @ORM\Column(name="show_count_on_tabs", type="boolean", nullable=true)
     */
    private $showCountOnTabs;

    /**
     * @var integer
     *
     * @ORM\Column(name="refresh_ticket_list", type="integer", nullable=true)
     */
    private $refreshTicketList;

    /**
     * @var boolean
     *
     * @ORM\Column(name="set_default_tech", type="boolean", nullable=true)
     */
    private $setDefaultTech;

    /**
     * @var string
     *
     * @ORM\Column(name="personal_token", type="string", length=255, nullable=true)
     */
    private $personalToken;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="personal_token_date", type="datetime", nullable=true)
     */
    private $personalTokenDate;

    /**
     * @var integer
     *
     * @ORM\Column(name="display_count_on_home", type="integer", nullable=true)
     */
    private $displayCountOnHome;

    /**
     * @var boolean
     *
     * @ORM\Column(name="notification_to_myself", type="boolean", nullable=true)
     */
    private $notificationToMyself;

    /**
     * @var string
     *
     * @ORM\Column(name="duedateok_color", type="string", length=255, nullable=true)
     */
    private $duedateokColor;

    /**
     * @var string
     *
     * @ORM\Column(name="duedatewarning_color", type="string", length=255, nullable=true)
     */
    private $duedatewarningColor;

    /**
     * @var string
     *
     * @ORM\Column(name="duedatecritical_color", type="string", length=255, nullable=true)
     */
    private $duedatecriticalColor;

    /**
     * @var integer
     *
     * @ORM\Column(name="duedatewarning_less", type="integer", nullable=true)
     */
    private $duedatewarningLess;

    /**
     * @var integer
     *
     * @ORM\Column(name="duedatecritical_less", type="integer", nullable=true)
     */
    private $duedatecriticalLess;

    /**
     * @var string
     *
     * @ORM\Column(name="duedatewarning_unit", type="string", length=255, nullable=true)
     */
    private $duedatewarningUnit;

    /**
     * @var string
     *
     * @ORM\Column(name="duedatecritical_unit", type="string", length=255, nullable=true)
     */
    private $duedatecriticalUnit;

    /**
     * @var string
     *
     * @ORM\Column(name="display_options", type="text", length=65535, nullable=true)
     */
    private $displayOptions;

    /**
     * @var boolean
     *
     * @ORM\Column(name="is_deleted_ldap", type="boolean", nullable=false)
     */
    private $isDeletedLdap = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="pdffont", type="string", length=255, nullable=true)
     */
    private $pdffont;

    /**
     * @var string
     *
     * @ORM\Column(name="picture", type="string", length=255, nullable=true)
     */
    private $picture;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="begin_date", type="datetime", nullable=true)
     */
    private $beginDate;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="end_date", type="datetime", nullable=true)
     */
    private $endDate;

    /**
     * @var boolean
     *
     * @ORM\Column(name="keep_devices_when_purging_item", type="boolean", nullable=true)
     */
    private $keepDevicesWhenPurgingItem;

    /**
     * @var string
     *
     * @ORM\Column(name="privatebookmarkorder", type="text", nullable=true)
     */
    private $privatebookmarkorder;

    /**
     * @var boolean
     *
     * @ORM\Column(name="backcreated", type="boolean", nullable=true)
     */
    private $backcreated;

    /**
     * @var integer
     *
     * @ORM\Column(name="task_state", type="integer", nullable=true)
     */
    private $taskState;

    /**
     * @var string
     *
     * @ORM\Column(name="layout", type="string", length=20, nullable=true)
     */
    private $layout;

    /**
     * @var string
     *
     * @ORM\Column(name="palette", type="string", length=20, nullable=true)
     */
    private $palette;

    /**
     * @var boolean
     *
     * @ORM\Column(name="ticket_timeline", type="boolean", nullable=true)
     */
    private $ticketTimeline;

    /**
     * @var boolean
     *
     * @ORM\Column(name="ticket_timeline_keep_replaced_tabs", type="boolean", nullable=true)
     */
    private $ticketTimelineKeepReplacedTabs;

    /**
     * @var boolean
     *
     * @ORM\Column(name="set_default_requester", type="boolean", nullable=true)
     */
    private $setDefaultRequester;

    /**
     * @var boolean
     *
     * @ORM\Column(name="lock_autolock_mode", type="boolean", nullable=true)
     */
    private $lockAutolockMode;

    /**
     * @var boolean
     *
     * @ORM\Column(name="lock_directunlock_notification", type="boolean", nullable=true)
     */
    private $lockDirectunlockNotification;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_creation", type="datetime", nullable=true)
     */
    private $dateCreation;

    /**
     * @var boolean
     *
     * @ORM\Column(name="highcontrast_css", type="boolean", nullable=true)
     */
    private $highcontrastCss = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="plannings", type="text", length=65535, nullable=true)
     */
    private $plannings;

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;




    /**
     * Set name
     *
     * @param string $name
     *
     * @return GlpiUsers
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
     * Set password
     *
     * @param string $password
     *
     * @return GlpiUsers
     */
    public function setPassword($password)
    {
        $this->password = $password;

        return $this;
    }

    /**
     * Get password
     *
     * @return string
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * Set phone
     *
     * @param string $phone
     *
     * @return GlpiUsers
     */
    public function setPhone($phone)
    {
        $this->phone = $phone;

        return $this;
    }

    /**
     * Get phone
     *
     * @return string
     */
    public function getPhone()
    {
        return $this->phone;
    }

    /**
     * Set phone2
     *
     * @param string $phone2
     *
     * @return GlpiUsers
     */
    public function setPhone2($phone2)
    {
        $this->phone2 = $phone2;

        return $this;
    }

    /**
     * Get phone2
     *
     * @return string
     */
    public function getPhone2()
    {
        return $this->phone2;
    }

    /**
     * Set mobile
     *
     * @param string $mobile
     *
     * @return GlpiUsers
     */
    public function setMobile($mobile)
    {
        $this->mobile = $mobile;

        return $this;
    }

    /**
     * Get mobile
     *
     * @return string
     */
    public function getMobile()
    {
        return $this->mobile;
    }

    /**
     * Set realname
     *
     * @param string $realname
     *
     * @return GlpiUsers
     */
    public function setRealname($realname)
    {
        $this->realname = $realname;

        return $this;
    }

    /**
     * Get realname
     *
     * @return string
     */
    public function getRealname()
    {
        return $this->realname;
    }

    /**
     * Set firstname
     *
     * @param string $firstname
     *
     * @return GlpiUsers
     */
    public function setFirstname($firstname)
    {
        $this->firstname = $firstname;

        return $this;
    }

    /**
     * Get firstname
     *
     * @return string
     */
    public function getFirstname()
    {
        return $this->firstname;
    }

    /**
     * Set locationsId
     *
     * @param integer $locationsId
     *
     * @return GlpiUsers
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
     * Set language
     *
     * @param string $language
     *
     * @return GlpiUsers
     */
    public function setLanguage($language)
    {
        $this->language = $language;

        return $this;
    }

    /**
     * Get language
     *
     * @return string
     */
    public function getLanguage()
    {
        return $this->language;
    }

    /**
     * Set useMode
     *
     * @param integer $useMode
     *
     * @return GlpiUsers
     */
    public function setUseMode($useMode)
    {
        $this->useMode = $useMode;

        return $this;
    }

    /**
     * Get useMode
     *
     * @return integer
     */
    public function getUseMode()
    {
        return $this->useMode;
    }

    /**
     * Set listLimit
     *
     * @param integer $listLimit
     *
     * @return GlpiUsers
     */
    public function setListLimit($listLimit)
    {
        $this->listLimit = $listLimit;

        return $this;
    }

    /**
     * Get listLimit
     *
     * @return integer
     */
    public function getListLimit()
    {
        return $this->listLimit;
    }

    /**
     * Set isActive
     *
     * @param boolean $isActive
     *
     * @return GlpiUsers
     */
    public function setIsActive($isActive)
    {
        $this->isActive = $isActive;

        return $this;
    }

    /**
     * Get isActive
     *
     * @return boolean
     */
    public function getIsActive()
    {
        return $this->isActive;
    }

    /**
     * Set comment
     *
     * @param string $comment
     *
     * @return GlpiUsers
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
     * Set authsId
     *
     * @param integer $authsId
     *
     * @return GlpiUsers
     */
    public function setAuthsId($authsId)
    {
        $this->authsId = $authsId;

        return $this;
    }

    /**
     * Get authsId
     *
     * @return integer
     */
    public function getAuthsId()
    {
        return $this->authsId;
    }

    /**
     * Set authtype
     *
     * @param integer $authtype
     *
     * @return GlpiUsers
     */
    public function setAuthtype($authtype)
    {
        $this->authtype = $authtype;

        return $this;
    }

    /**
     * Get authtype
     *
     * @return integer
     */
    public function getAuthtype()
    {
        return $this->authtype;
    }

    /**
     * Set lastLogin
     *
     * @param \DateTime $lastLogin
     *
     * @return GlpiUsers
     */
    public function setLastLogin($lastLogin)
    {
        $this->lastLogin = $lastLogin;

        return $this;
    }

    /**
     * Get lastLogin
     *
     * @return \DateTime
     */
    public function getLastLogin()
    {
        return $this->lastLogin;
    }

    /**
     * Set dateMod
     *
     * @param \DateTime $dateMod
     *
     * @return GlpiUsers
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
     * Set dateSync
     *
     * @param \DateTime $dateSync
     *
     * @return GlpiUsers
     */
    public function setDateSync($dateSync)
    {
        $this->dateSync = $dateSync;

        return $this;
    }

    /**
     * Get dateSync
     *
     * @return \DateTime
     */
    public function getDateSync()
    {
        return $this->dateSync;
    }

    /**
     * Set isDeleted
     *
     * @param boolean $isDeleted
     *
     * @return GlpiUsers
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
     * Set profilesId
     *
     * @param integer $profilesId
     *
     * @return GlpiUsers
     */
    public function setProfilesId($profilesId)
    {
        $this->profilesId = $profilesId;

        return $this;
    }

    /**
     * Get profilesId
     *
     * @return integer
     */
    public function getProfilesId()
    {
        return $this->profilesId;
    }

    /**
     * Set entitiesId
     *
     * @param integer $entitiesId
     *
     * @return GlpiUsers
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
     * Set usertitlesId
     *
     * @param integer $usertitlesId
     *
     * @return GlpiUsers
     */
    public function setUsertitlesId($usertitlesId)
    {
        $this->usertitlesId = $usertitlesId;

        return $this;
    }

    /**
     * Get usertitlesId
     *
     * @return integer
     */
    public function getUsertitlesId()
    {
        return $this->usertitlesId;
    }

    /**
     * Set usercategoriesId
     *
     * @param integer $usercategoriesId
     *
     * @return GlpiUsers
     */
    public function setUsercategoriesId($usercategoriesId)
    {
        $this->usercategoriesId = $usercategoriesId;

        return $this;
    }

    /**
     * Get usercategoriesId
     *
     * @return integer
     */
    public function getUsercategoriesId()
    {
        return $this->usercategoriesId;
    }

    /**
     * Set dateFormat
     *
     * @param integer $dateFormat
     *
     * @return GlpiUsers
     */
    public function setDateFormat($dateFormat)
    {
        $this->dateFormat = $dateFormat;

        return $this;
    }

    /**
     * Get dateFormat
     *
     * @return integer
     */
    public function getDateFormat()
    {
        return $this->dateFormat;
    }

    /**
     * Set numberFormat
     *
     * @param integer $numberFormat
     *
     * @return GlpiUsers
     */
    public function setNumberFormat($numberFormat)
    {
        $this->numberFormat = $numberFormat;

        return $this;
    }

    /**
     * Get numberFormat
     *
     * @return integer
     */
    public function getNumberFormat()
    {
        return $this->numberFormat;
    }

    /**
     * Set namesFormat
     *
     * @param integer $namesFormat
     *
     * @return GlpiUsers
     */
    public function setNamesFormat($namesFormat)
    {
        $this->namesFormat = $namesFormat;

        return $this;
    }

    /**
     * Get namesFormat
     *
     * @return integer
     */
    public function getNamesFormat()
    {
        return $this->namesFormat;
    }

    /**
     * Set csvDelimiter
     *
     * @param string $csvDelimiter
     *
     * @return GlpiUsers
     */
    public function setCsvDelimiter($csvDelimiter)
    {
        $this->csvDelimiter = $csvDelimiter;

        return $this;
    }

    /**
     * Get csvDelimiter
     *
     * @return string
     */
    public function getCsvDelimiter()
    {
        return $this->csvDelimiter;
    }

    /**
     * Set isIdsVisible
     *
     * @param boolean $isIdsVisible
     *
     * @return GlpiUsers
     */
    public function setIsIdsVisible($isIdsVisible)
    {
        $this->isIdsVisible = $isIdsVisible;

        return $this;
    }

    /**
     * Get isIdsVisible
     *
     * @return boolean
     */
    public function getIsIdsVisible()
    {
        return $this->isIdsVisible;
    }

    /**
     * Set useFlatDropdowntree
     *
     * @param boolean $useFlatDropdowntree
     *
     * @return GlpiUsers
     */
    public function setUseFlatDropdowntree($useFlatDropdowntree)
    {
        $this->useFlatDropdowntree = $useFlatDropdowntree;

        return $this;
    }

    /**
     * Get useFlatDropdowntree
     *
     * @return boolean
     */
    public function getUseFlatDropdowntree()
    {
        return $this->useFlatDropdowntree;
    }

    /**
     * Set showJobsAtLogin
     *
     * @param boolean $showJobsAtLogin
     *
     * @return GlpiUsers
     */
    public function setShowJobsAtLogin($showJobsAtLogin)
    {
        $this->showJobsAtLogin = $showJobsAtLogin;

        return $this;
    }

    /**
     * Get showJobsAtLogin
     *
     * @return boolean
     */
    public function getShowJobsAtLogin()
    {
        return $this->showJobsAtLogin;
    }

    /**
     * Set priority1
     *
     * @param string $priority1
     *
     * @return GlpiUsers
     */
    public function setPriority1($priority1)
    {
        $this->priority1 = $priority1;

        return $this;
    }

    /**
     * Get priority1
     *
     * @return string
     */
    public function getPriority1()
    {
        return $this->priority1;
    }

    /**
     * Set priority2
     *
     * @param string $priority2
     *
     * @return GlpiUsers
     */
    public function setPriority2($priority2)
    {
        $this->priority2 = $priority2;

        return $this;
    }

    /**
     * Get priority2
     *
     * @return string
     */
    public function getPriority2()
    {
        return $this->priority2;
    }

    /**
     * Set priority3
     *
     * @param string $priority3
     *
     * @return GlpiUsers
     */
    public function setPriority3($priority3)
    {
        $this->priority3 = $priority3;

        return $this;
    }

    /**
     * Get priority3
     *
     * @return string
     */
    public function getPriority3()
    {
        return $this->priority3;
    }

    /**
     * Set priority4
     *
     * @param string $priority4
     *
     * @return GlpiUsers
     */
    public function setPriority4($priority4)
    {
        $this->priority4 = $priority4;

        return $this;
    }

    /**
     * Get priority4
     *
     * @return string
     */
    public function getPriority4()
    {
        return $this->priority4;
    }

    /**
     * Set priority5
     *
     * @param string $priority5
     *
     * @return GlpiUsers
     */
    public function setPriority5($priority5)
    {
        $this->priority5 = $priority5;

        return $this;
    }

    /**
     * Get priority5
     *
     * @return string
     */
    public function getPriority5()
    {
        return $this->priority5;
    }

    /**
     * Set priority6
     *
     * @param string $priority6
     *
     * @return GlpiUsers
     */
    public function setPriority6($priority6)
    {
        $this->priority6 = $priority6;

        return $this;
    }

    /**
     * Get priority6
     *
     * @return string
     */
    public function getPriority6()
    {
        return $this->priority6;
    }

    /**
     * Set followupPrivate
     *
     * @param boolean $followupPrivate
     *
     * @return GlpiUsers
     */
    public function setFollowupPrivate($followupPrivate)
    {
        $this->followupPrivate = $followupPrivate;

        return $this;
    }

    /**
     * Get followupPrivate
     *
     * @return boolean
     */
    public function getFollowupPrivate()
    {
        return $this->followupPrivate;
    }

    /**
     * Set taskPrivate
     *
     * @param boolean $taskPrivate
     *
     * @return GlpiUsers
     */
    public function setTaskPrivate($taskPrivate)
    {
        $this->taskPrivate = $taskPrivate;

        return $this;
    }

    /**
     * Get taskPrivate
     *
     * @return boolean
     */
    public function getTaskPrivate()
    {
        return $this->taskPrivate;
    }

    /**
     * Set defaultRequesttypesId
     *
     * @param integer $defaultRequesttypesId
     *
     * @return GlpiUsers
     */
    public function setDefaultRequesttypesId($defaultRequesttypesId)
    {
        $this->defaultRequesttypesId = $defaultRequesttypesId;

        return $this;
    }

    /**
     * Get defaultRequesttypesId
     *
     * @return integer
     */
    public function getDefaultRequesttypesId()
    {
        return $this->defaultRequesttypesId;
    }

    /**
     * Set passwordForgetToken
     *
     * @param string $passwordForgetToken
     *
     * @return GlpiUsers
     */
    public function setPasswordForgetToken($passwordForgetToken)
    {
        $this->passwordForgetToken = $passwordForgetToken;

        return $this;
    }

    /**
     * Get passwordForgetToken
     *
     * @return string
     */
    public function getPasswordForgetToken()
    {
        return $this->passwordForgetToken;
    }

    /**
     * Set passwordForgetTokenDate
     *
     * @param \DateTime $passwordForgetTokenDate
     *
     * @return GlpiUsers
     */
    public function setPasswordForgetTokenDate($passwordForgetTokenDate)
    {
        $this->passwordForgetTokenDate = $passwordForgetTokenDate;

        return $this;
    }

    /**
     * Get passwordForgetTokenDate
     *
     * @return \DateTime
     */
    public function getPasswordForgetTokenDate()
    {
        return $this->passwordForgetTokenDate;
    }

    /**
     * Set userDn
     *
     * @param string $userDn
     *
     * @return GlpiUsers
     */
    public function setUserDn($userDn)
    {
        $this->userDn = $userDn;

        return $this;
    }

    /**
     * Get userDn
     *
     * @return string
     */
    public function getUserDn()
    {
        return $this->userDn;
    }

    /**
     * Set registrationNumber
     *
     * @param string $registrationNumber
     *
     * @return GlpiUsers
     */
    public function setRegistrationNumber($registrationNumber)
    {
        $this->registrationNumber = $registrationNumber;

        return $this;
    }

    /**
     * Get registrationNumber
     *
     * @return string
     */
    public function getRegistrationNumber()
    {
        return $this->registrationNumber;
    }

    /**
     * Set showCountOnTabs
     *
     * @param boolean $showCountOnTabs
     *
     * @return GlpiUsers
     */
    public function setShowCountOnTabs($showCountOnTabs)
    {
        $this->showCountOnTabs = $showCountOnTabs;

        return $this;
    }

    /**
     * Get showCountOnTabs
     *
     * @return boolean
     */
    public function getShowCountOnTabs()
    {
        return $this->showCountOnTabs;
    }

    /**
     * Set refreshTicketList
     *
     * @param integer $refreshTicketList
     *
     * @return GlpiUsers
     */
    public function setRefreshTicketList($refreshTicketList)
    {
        $this->refreshTicketList = $refreshTicketList;

        return $this;
    }

    /**
     * Get refreshTicketList
     *
     * @return integer
     */
    public function getRefreshTicketList()
    {
        return $this->refreshTicketList;
    }

    /**
     * Set setDefaultTech
     *
     * @param boolean $setDefaultTech
     *
     * @return GlpiUsers
     */
    public function setSetDefaultTech($setDefaultTech)
    {
        $this->setDefaultTech = $setDefaultTech;

        return $this;
    }

    /**
     * Get setDefaultTech
     *
     * @return boolean
     */
    public function getSetDefaultTech()
    {
        return $this->setDefaultTech;
    }

    /**
     * Set personalToken
     *
     * @param string $personalToken
     *
     * @return GlpiUsers
     */
    public function setPersonalToken($personalToken)
    {
        $this->personalToken = $personalToken;

        return $this;
    }

    /**
     * Get personalToken
     *
     * @return string
     */
    public function getPersonalToken()
    {
        return $this->personalToken;
    }

    /**
     * Set personalTokenDate
     *
     * @param \DateTime $personalTokenDate
     *
     * @return GlpiUsers
     */
    public function setPersonalTokenDate($personalTokenDate)
    {
        $this->personalTokenDate = $personalTokenDate;

        return $this;
    }

    /**
     * Get personalTokenDate
     *
     * @return \DateTime
     */
    public function getPersonalTokenDate()
    {
        return $this->personalTokenDate;
    }

    /**
     * Set displayCountOnHome
     *
     * @param integer $displayCountOnHome
     *
     * @return GlpiUsers
     */
    public function setDisplayCountOnHome($displayCountOnHome)
    {
        $this->displayCountOnHome = $displayCountOnHome;

        return $this;
    }

    /**
     * Get displayCountOnHome
     *
     * @return integer
     */
    public function getDisplayCountOnHome()
    {
        return $this->displayCountOnHome;
    }

    /**
     * Set notificationToMyself
     *
     * @param boolean $notificationToMyself
     *
     * @return GlpiUsers
     */
    public function setNotificationToMyself($notificationToMyself)
    {
        $this->notificationToMyself = $notificationToMyself;

        return $this;
    }

    /**
     * Get notificationToMyself
     *
     * @return boolean
     */
    public function getNotificationToMyself()
    {
        return $this->notificationToMyself;
    }

    /**
     * Set duedateokColor
     *
     * @param string $duedateokColor
     *
     * @return GlpiUsers
     */
    public function setDuedateokColor($duedateokColor)
    {
        $this->duedateokColor = $duedateokColor;

        return $this;
    }

    /**
     * Get duedateokColor
     *
     * @return string
     */
    public function getDuedateokColor()
    {
        return $this->duedateokColor;
    }

    /**
     * Set duedatewarningColor
     *
     * @param string $duedatewarningColor
     *
     * @return GlpiUsers
     */
    public function setDuedatewarningColor($duedatewarningColor)
    {
        $this->duedatewarningColor = $duedatewarningColor;

        return $this;
    }

    /**
     * Get duedatewarningColor
     *
     * @return string
     */
    public function getDuedatewarningColor()
    {
        return $this->duedatewarningColor;
    }

    /**
     * Set duedatecriticalColor
     *
     * @param string $duedatecriticalColor
     *
     * @return GlpiUsers
     */
    public function setDuedatecriticalColor($duedatecriticalColor)
    {
        $this->duedatecriticalColor = $duedatecriticalColor;

        return $this;
    }

    /**
     * Get duedatecriticalColor
     *
     * @return string
     */
    public function getDuedatecriticalColor()
    {
        return $this->duedatecriticalColor;
    }

    /**
     * Set duedatewarningLess
     *
     * @param integer $duedatewarningLess
     *
     * @return GlpiUsers
     */
    public function setDuedatewarningLess($duedatewarningLess)
    {
        $this->duedatewarningLess = $duedatewarningLess;

        return $this;
    }

    /**
     * Get duedatewarningLess
     *
     * @return integer
     */
    public function getDuedatewarningLess()
    {
        return $this->duedatewarningLess;
    }

    /**
     * Set duedatecriticalLess
     *
     * @param integer $duedatecriticalLess
     *
     * @return GlpiUsers
     */
    public function setDuedatecriticalLess($duedatecriticalLess)
    {
        $this->duedatecriticalLess = $duedatecriticalLess;

        return $this;
    }

    /**
     * Get duedatecriticalLess
     *
     * @return integer
     */
    public function getDuedatecriticalLess()
    {
        return $this->duedatecriticalLess;
    }

    /**
     * Set duedatewarningUnit
     *
     * @param string $duedatewarningUnit
     *
     * @return GlpiUsers
     */
    public function setDuedatewarningUnit($duedatewarningUnit)
    {
        $this->duedatewarningUnit = $duedatewarningUnit;

        return $this;
    }

    /**
     * Get duedatewarningUnit
     *
     * @return string
     */
    public function getDuedatewarningUnit()
    {
        return $this->duedatewarningUnit;
    }

    /**
     * Set duedatecriticalUnit
     *
     * @param string $duedatecriticalUnit
     *
     * @return GlpiUsers
     */
    public function setDuedatecriticalUnit($duedatecriticalUnit)
    {
        $this->duedatecriticalUnit = $duedatecriticalUnit;

        return $this;
    }

    /**
     * Get duedatecriticalUnit
     *
     * @return string
     */
    public function getDuedatecriticalUnit()
    {
        return $this->duedatecriticalUnit;
    }

    /**
     * Set displayOptions
     *
     * @param string $displayOptions
     *
     * @return GlpiUsers
     */
    public function setDisplayOptions($displayOptions)
    {
        $this->displayOptions = $displayOptions;

        return $this;
    }

    /**
     * Get displayOptions
     *
     * @return string
     */
    public function getDisplayOptions()
    {
        return $this->displayOptions;
    }

    /**
     * Set isDeletedLdap
     *
     * @param boolean $isDeletedLdap
     *
     * @return GlpiUsers
     */
    public function setIsDeletedLdap($isDeletedLdap)
    {
        $this->isDeletedLdap = $isDeletedLdap;

        return $this;
    }

    /**
     * Get isDeletedLdap
     *
     * @return boolean
     */
    public function getIsDeletedLdap()
    {
        return $this->isDeletedLdap;
    }

    /**
     * Set pdffont
     *
     * @param string $pdffont
     *
     * @return GlpiUsers
     */
    public function setPdffont($pdffont)
    {
        $this->pdffont = $pdffont;

        return $this;
    }

    /**
     * Get pdffont
     *
     * @return string
     */
    public function getPdffont()
    {
        return $this->pdffont;
    }

    /**
     * Set picture
     *
     * @param string $picture
     *
     * @return GlpiUsers
     */
    public function setPicture($picture)
    {
        $this->picture = $picture;

        return $this;
    }

    /**
     * Get picture
     *
     * @return string
     */
    public function getPicture()
    {
        return $this->picture;
    }

    /**
     * Set beginDate
     *
     * @param \DateTime $beginDate
     *
     * @return GlpiUsers
     */
    public function setBeginDate($beginDate)
    {
        $this->beginDate = $beginDate;

        return $this;
    }

    /**
     * Get beginDate
     *
     * @return \DateTime
     */
    public function getBeginDate()
    {
        return $this->beginDate;
    }

    /**
     * Set endDate
     *
     * @param \DateTime $endDate
     *
     * @return GlpiUsers
     */
    public function setEndDate($endDate)
    {
        $this->endDate = $endDate;

        return $this;
    }

    /**
     * Get endDate
     *
     * @return \DateTime
     */
    public function getEndDate()
    {
        return $this->endDate;
    }

    /**
     * Set keepDevicesWhenPurgingItem
     *
     * @param boolean $keepDevicesWhenPurgingItem
     *
     * @return GlpiUsers
     */
    public function setKeepDevicesWhenPurgingItem($keepDevicesWhenPurgingItem)
    {
        $this->keepDevicesWhenPurgingItem = $keepDevicesWhenPurgingItem;

        return $this;
    }

    /**
     * Get keepDevicesWhenPurgingItem
     *
     * @return boolean
     */
    public function getKeepDevicesWhenPurgingItem()
    {
        return $this->keepDevicesWhenPurgingItem;
    }

    /**
     * Set privatebookmarkorder
     *
     * @param string $privatebookmarkorder
     *
     * @return GlpiUsers
     */
    public function setPrivatebookmarkorder($privatebookmarkorder)
    {
        $this->privatebookmarkorder = $privatebookmarkorder;

        return $this;
    }

    /**
     * Get privatebookmarkorder
     *
     * @return string
     */
    public function getPrivatebookmarkorder()
    {
        return $this->privatebookmarkorder;
    }

    /**
     * Set backcreated
     *
     * @param boolean $backcreated
     *
     * @return GlpiUsers
     */
    public function setBackcreated($backcreated)
    {
        $this->backcreated = $backcreated;

        return $this;
    }

    /**
     * Get backcreated
     *
     * @return boolean
     */
    public function getBackcreated()
    {
        return $this->backcreated;
    }

    /**
     * Set taskState
     *
     * @param integer $taskState
     *
     * @return GlpiUsers
     */
    public function setTaskState($taskState)
    {
        $this->taskState = $taskState;

        return $this;
    }

    /**
     * Get taskState
     *
     * @return integer
     */
    public function getTaskState()
    {
        return $this->taskState;
    }

    /**
     * Set layout
     *
     * @param string $layout
     *
     * @return GlpiUsers
     */
    public function setLayout($layout)
    {
        $this->layout = $layout;

        return $this;
    }

    /**
     * Get layout
     *
     * @return string
     */
    public function getLayout()
    {
        return $this->layout;
    }

    /**
     * Set palette
     *
     * @param string $palette
     *
     * @return GlpiUsers
     */
    public function setPalette($palette)
    {
        $this->palette = $palette;

        return $this;
    }

    /**
     * Get palette
     *
     * @return string
     */
    public function getPalette()
    {
        return $this->palette;
    }

    /**
     * Set ticketTimeline
     *
     * @param boolean $ticketTimeline
     *
     * @return GlpiUsers
     */
    public function setTicketTimeline($ticketTimeline)
    {
        $this->ticketTimeline = $ticketTimeline;

        return $this;
    }

    /**
     * Get ticketTimeline
     *
     * @return boolean
     */
    public function getTicketTimeline()
    {
        return $this->ticketTimeline;
    }

    /**
     * Set ticketTimelineKeepReplacedTabs
     *
     * @param boolean $ticketTimelineKeepReplacedTabs
     *
     * @return GlpiUsers
     */
    public function setTicketTimelineKeepReplacedTabs($ticketTimelineKeepReplacedTabs)
    {
        $this->ticketTimelineKeepReplacedTabs = $ticketTimelineKeepReplacedTabs;

        return $this;
    }

    /**
     * Get ticketTimelineKeepReplacedTabs
     *
     * @return boolean
     */
    public function getTicketTimelineKeepReplacedTabs()
    {
        return $this->ticketTimelineKeepReplacedTabs;
    }

    /**
     * Set setDefaultRequester
     *
     * @param boolean $setDefaultRequester
     *
     * @return GlpiUsers
     */
    public function setSetDefaultRequester($setDefaultRequester)
    {
        $this->setDefaultRequester = $setDefaultRequester;

        return $this;
    }

    /**
     * Get setDefaultRequester
     *
     * @return boolean
     */
    public function getSetDefaultRequester()
    {
        return $this->setDefaultRequester;
    }

    /**
     * Set lockAutolockMode
     *
     * @param boolean $lockAutolockMode
     *
     * @return GlpiUsers
     */
    public function setLockAutolockMode($lockAutolockMode)
    {
        $this->lockAutolockMode = $lockAutolockMode;

        return $this;
    }

    /**
     * Get lockAutolockMode
     *
     * @return boolean
     */
    public function getLockAutolockMode()
    {
        return $this->lockAutolockMode;
    }

    /**
     * Set lockDirectunlockNotification
     *
     * @param boolean $lockDirectunlockNotification
     *
     * @return GlpiUsers
     */
    public function setLockDirectunlockNotification($lockDirectunlockNotification)
    {
        $this->lockDirectunlockNotification = $lockDirectunlockNotification;

        return $this;
    }

    /**
     * Get lockDirectunlockNotification
     *
     * @return boolean
     */
    public function getLockDirectunlockNotification()
    {
        return $this->lockDirectunlockNotification;
    }

    /**
     * Set dateCreation
     *
     * @param \DateTime $dateCreation
     *
     * @return GlpiUsers
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
     * Set highcontrastCss
     *
     * @param boolean $highcontrastCss
     *
     * @return GlpiUsers
     */
    public function setHighcontrastCss($highcontrastCss)
    {
        $this->highcontrastCss = $highcontrastCss;

        return $this;
    }

    /**
     * Get highcontrastCss
     *
     * @return boolean
     */
    public function getHighcontrastCss()
    {
        return $this->highcontrastCss;
    }

    /**
     * Set plannings
     *
     * @param string $plannings
     *
     * @return GlpiUsers
     */
    public function setPlannings($plannings)
    {
        $this->plannings = $plannings;

        return $this;
    }

    /**
     * Get plannings
     *
     * @return string
     */
    public function getPlannings()
    {
        return $this->plannings;
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
