<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * GlpiAuthldaps
 *
 * @ORM\Table(name="glpi_authldaps", indexes={@ORM\Index(name="date_mod", columns={"date_mod"}), @ORM\Index(name="is_default", columns={"is_default"}), @ORM\Index(name="is_active", columns={"is_active"}), @ORM\Index(name="date_creation", columns={"date_creation"})})
 * @ORM\Entity
 */
class GlpiAuthldaps
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
     * @ORM\Column(name="host", type="string", length=255, nullable=true)
     */
    private $host;

    /**
     * @var string
     *
     * @ORM\Column(name="basedn", type="string", length=255, nullable=true)
     */
    private $basedn;

    /**
     * @var string
     *
     * @ORM\Column(name="rootdn", type="string", length=255, nullable=true)
     */
    private $rootdn;

    /**
     * @var integer
     *
     * @ORM\Column(name="port", type="integer", nullable=false)
     */
    private $port = '389';

    /**
     * @var string
     *
     * @ORM\Column(name="condition", type="text", length=65535, nullable=true)
     */
    private $condition;

    /**
     * @var string
     *
     * @ORM\Column(name="login_field", type="string", length=255, nullable=true)
     */
    private $loginField = 'uid';

    /**
     * @var boolean
     *
     * @ORM\Column(name="use_tls", type="boolean", nullable=false)
     */
    private $useTls = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="group_field", type="string", length=255, nullable=true)
     */
    private $groupField;

    /**
     * @var string
     *
     * @ORM\Column(name="group_condition", type="text", length=65535, nullable=true)
     */
    private $groupCondition;

    /**
     * @var integer
     *
     * @ORM\Column(name="group_search_type", type="integer", nullable=false)
     */
    private $groupSearchType = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="group_member_field", type="string", length=255, nullable=true)
     */
    private $groupMemberField;

    /**
     * @var string
     *
     * @ORM\Column(name="email1_field", type="string", length=255, nullable=true)
     */
    private $email1Field;

    /**
     * @var string
     *
     * @ORM\Column(name="realname_field", type="string", length=255, nullable=true)
     */
    private $realnameField;

    /**
     * @var string
     *
     * @ORM\Column(name="firstname_field", type="string", length=255, nullable=true)
     */
    private $firstnameField;

    /**
     * @var string
     *
     * @ORM\Column(name="phone_field", type="string", length=255, nullable=true)
     */
    private $phoneField;

    /**
     * @var string
     *
     * @ORM\Column(name="phone2_field", type="string", length=255, nullable=true)
     */
    private $phone2Field;

    /**
     * @var string
     *
     * @ORM\Column(name="mobile_field", type="string", length=255, nullable=true)
     */
    private $mobileField;

    /**
     * @var string
     *
     * @ORM\Column(name="comment_field", type="string", length=255, nullable=true)
     */
    private $commentField;

    /**
     * @var boolean
     *
     * @ORM\Column(name="use_dn", type="boolean", nullable=false)
     */
    private $useDn = '1';

    /**
     * @var integer
     *
     * @ORM\Column(name="time_offset", type="integer", nullable=false)
     */
    private $timeOffset = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="deref_option", type="integer", nullable=false)
     */
    private $derefOption = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="title_field", type="string", length=255, nullable=true)
     */
    private $titleField;

    /**
     * @var string
     *
     * @ORM\Column(name="category_field", type="string", length=255, nullable=true)
     */
    private $categoryField;

    /**
     * @var string
     *
     * @ORM\Column(name="language_field", type="string", length=255, nullable=true)
     */
    private $languageField;

    /**
     * @var string
     *
     * @ORM\Column(name="entity_field", type="string", length=255, nullable=true)
     */
    private $entityField;

    /**
     * @var string
     *
     * @ORM\Column(name="entity_condition", type="text", length=65535, nullable=true)
     */
    private $entityCondition;

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
     * @var boolean
     *
     * @ORM\Column(name="is_default", type="boolean", nullable=false)
     */
    private $isDefault = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="is_active", type="boolean", nullable=false)
     */
    private $isActive = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="rootdn_passwd", type="string", length=255, nullable=true)
     */
    private $rootdnPasswd;

    /**
     * @var string
     *
     * @ORM\Column(name="registration_number_field", type="string", length=255, nullable=true)
     */
    private $registrationNumberField;

    /**
     * @var string
     *
     * @ORM\Column(name="email2_field", type="string", length=255, nullable=true)
     */
    private $email2Field;

    /**
     * @var string
     *
     * @ORM\Column(name="email3_field", type="string", length=255, nullable=true)
     */
    private $email3Field;

    /**
     * @var string
     *
     * @ORM\Column(name="email4_field", type="string", length=255, nullable=true)
     */
    private $email4Field;

    /**
     * @var string
     *
     * @ORM\Column(name="location_field", type="string", length=255, nullable=true)
     */
    private $locationField;

    /**
     * @var integer
     *
     * @ORM\Column(name="pagesize", type="integer", nullable=false)
     */
    private $pagesize = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="ldap_maxlimit", type="integer", nullable=false)
     */
    private $ldapMaxlimit = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="can_support_pagesize", type="boolean", nullable=false)
     */
    private $canSupportPagesize = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="picture_field", type="string", length=255, nullable=true)
     */
    private $pictureField;

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
     * Set name
     *
     * @param string $name
     *
     * @return GlpiAuthldaps
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
     * Set host
     *
     * @param string $host
     *
     * @return GlpiAuthldaps
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
     * Set basedn
     *
     * @param string $basedn
     *
     * @return GlpiAuthldaps
     */
    public function setBasedn($basedn)
    {
        $this->basedn = $basedn;

        return $this;
    }

    /**
     * Get basedn
     *
     * @return string
     */
    public function getBasedn()
    {
        return $this->basedn;
    }

    /**
     * Set rootdn
     *
     * @param string $rootdn
     *
     * @return GlpiAuthldaps
     */
    public function setRootdn($rootdn)
    {
        $this->rootdn = $rootdn;

        return $this;
    }

    /**
     * Get rootdn
     *
     * @return string
     */
    public function getRootdn()
    {
        return $this->rootdn;
    }

    /**
     * Set port
     *
     * @param integer $port
     *
     * @return GlpiAuthldaps
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
     * Set condition
     *
     * @param string $condition
     *
     * @return GlpiAuthldaps
     */
    public function setCondition($condition)
    {
        $this->condition = $condition;

        return $this;
    }

    /**
     * Get condition
     *
     * @return string
     */
    public function getCondition()
    {
        return $this->condition;
    }

    /**
     * Set loginField
     *
     * @param string $loginField
     *
     * @return GlpiAuthldaps
     */
    public function setLoginField($loginField)
    {
        $this->loginField = $loginField;

        return $this;
    }

    /**
     * Get loginField
     *
     * @return string
     */
    public function getLoginField()
    {
        return $this->loginField;
    }

    /**
     * Set useTls
     *
     * @param boolean $useTls
     *
     * @return GlpiAuthldaps
     */
    public function setUseTls($useTls)
    {
        $this->useTls = $useTls;

        return $this;
    }

    /**
     * Get useTls
     *
     * @return boolean
     */
    public function getUseTls()
    {
        return $this->useTls;
    }

    /**
     * Set groupField
     *
     * @param string $groupField
     *
     * @return GlpiAuthldaps
     */
    public function setGroupField($groupField)
    {
        $this->groupField = $groupField;

        return $this;
    }

    /**
     * Get groupField
     *
     * @return string
     */
    public function getGroupField()
    {
        return $this->groupField;
    }

    /**
     * Set groupCondition
     *
     * @param string $groupCondition
     *
     * @return GlpiAuthldaps
     */
    public function setGroupCondition($groupCondition)
    {
        $this->groupCondition = $groupCondition;

        return $this;
    }

    /**
     * Get groupCondition
     *
     * @return string
     */
    public function getGroupCondition()
    {
        return $this->groupCondition;
    }

    /**
     * Set groupSearchType
     *
     * @param integer $groupSearchType
     *
     * @return GlpiAuthldaps
     */
    public function setGroupSearchType($groupSearchType)
    {
        $this->groupSearchType = $groupSearchType;

        return $this;
    }

    /**
     * Get groupSearchType
     *
     * @return integer
     */
    public function getGroupSearchType()
    {
        return $this->groupSearchType;
    }

    /**
     * Set groupMemberField
     *
     * @param string $groupMemberField
     *
     * @return GlpiAuthldaps
     */
    public function setGroupMemberField($groupMemberField)
    {
        $this->groupMemberField = $groupMemberField;

        return $this;
    }

    /**
     * Get groupMemberField
     *
     * @return string
     */
    public function getGroupMemberField()
    {
        return $this->groupMemberField;
    }

    /**
     * Set email1Field
     *
     * @param string $email1Field
     *
     * @return GlpiAuthldaps
     */
    public function setEmail1Field($email1Field)
    {
        $this->email1Field = $email1Field;

        return $this;
    }

    /**
     * Get email1Field
     *
     * @return string
     */
    public function getEmail1Field()
    {
        return $this->email1Field;
    }

    /**
     * Set realnameField
     *
     * @param string $realnameField
     *
     * @return GlpiAuthldaps
     */
    public function setRealnameField($realnameField)
    {
        $this->realnameField = $realnameField;

        return $this;
    }

    /**
     * Get realnameField
     *
     * @return string
     */
    public function getRealnameField()
    {
        return $this->realnameField;
    }

    /**
     * Set firstnameField
     *
     * @param string $firstnameField
     *
     * @return GlpiAuthldaps
     */
    public function setFirstnameField($firstnameField)
    {
        $this->firstnameField = $firstnameField;

        return $this;
    }

    /**
     * Get firstnameField
     *
     * @return string
     */
    public function getFirstnameField()
    {
        return $this->firstnameField;
    }

    /**
     * Set phoneField
     *
     * @param string $phoneField
     *
     * @return GlpiAuthldaps
     */
    public function setPhoneField($phoneField)
    {
        $this->phoneField = $phoneField;

        return $this;
    }

    /**
     * Get phoneField
     *
     * @return string
     */
    public function getPhoneField()
    {
        return $this->phoneField;
    }

    /**
     * Set phone2Field
     *
     * @param string $phone2Field
     *
     * @return GlpiAuthldaps
     */
    public function setPhone2Field($phone2Field)
    {
        $this->phone2Field = $phone2Field;

        return $this;
    }

    /**
     * Get phone2Field
     *
     * @return string
     */
    public function getPhone2Field()
    {
        return $this->phone2Field;
    }

    /**
     * Set mobileField
     *
     * @param string $mobileField
     *
     * @return GlpiAuthldaps
     */
    public function setMobileField($mobileField)
    {
        $this->mobileField = $mobileField;

        return $this;
    }

    /**
     * Get mobileField
     *
     * @return string
     */
    public function getMobileField()
    {
        return $this->mobileField;
    }

    /**
     * Set commentField
     *
     * @param string $commentField
     *
     * @return GlpiAuthldaps
     */
    public function setCommentField($commentField)
    {
        $this->commentField = $commentField;

        return $this;
    }

    /**
     * Get commentField
     *
     * @return string
     */
    public function getCommentField()
    {
        return $this->commentField;
    }

    /**
     * Set useDn
     *
     * @param boolean $useDn
     *
     * @return GlpiAuthldaps
     */
    public function setUseDn($useDn)
    {
        $this->useDn = $useDn;

        return $this;
    }

    /**
     * Get useDn
     *
     * @return boolean
     */
    public function getUseDn()
    {
        return $this->useDn;
    }

    /**
     * Set timeOffset
     *
     * @param integer $timeOffset
     *
     * @return GlpiAuthldaps
     */
    public function setTimeOffset($timeOffset)
    {
        $this->timeOffset = $timeOffset;

        return $this;
    }

    /**
     * Get timeOffset
     *
     * @return integer
     */
    public function getTimeOffset()
    {
        return $this->timeOffset;
    }

    /**
     * Set derefOption
     *
     * @param integer $derefOption
     *
     * @return GlpiAuthldaps
     */
    public function setDerefOption($derefOption)
    {
        $this->derefOption = $derefOption;

        return $this;
    }

    /**
     * Get derefOption
     *
     * @return integer
     */
    public function getDerefOption()
    {
        return $this->derefOption;
    }

    /**
     * Set titleField
     *
     * @param string $titleField
     *
     * @return GlpiAuthldaps
     */
    public function setTitleField($titleField)
    {
        $this->titleField = $titleField;

        return $this;
    }

    /**
     * Get titleField
     *
     * @return string
     */
    public function getTitleField()
    {
        return $this->titleField;
    }

    /**
     * Set categoryField
     *
     * @param string $categoryField
     *
     * @return GlpiAuthldaps
     */
    public function setCategoryField($categoryField)
    {
        $this->categoryField = $categoryField;

        return $this;
    }

    /**
     * Get categoryField
     *
     * @return string
     */
    public function getCategoryField()
    {
        return $this->categoryField;
    }

    /**
     * Set languageField
     *
     * @param string $languageField
     *
     * @return GlpiAuthldaps
     */
    public function setLanguageField($languageField)
    {
        $this->languageField = $languageField;

        return $this;
    }

    /**
     * Get languageField
     *
     * @return string
     */
    public function getLanguageField()
    {
        return $this->languageField;
    }

    /**
     * Set entityField
     *
     * @param string $entityField
     *
     * @return GlpiAuthldaps
     */
    public function setEntityField($entityField)
    {
        $this->entityField = $entityField;

        return $this;
    }

    /**
     * Get entityField
     *
     * @return string
     */
    public function getEntityField()
    {
        return $this->entityField;
    }

    /**
     * Set entityCondition
     *
     * @param string $entityCondition
     *
     * @return GlpiAuthldaps
     */
    public function setEntityCondition($entityCondition)
    {
        $this->entityCondition = $entityCondition;

        return $this;
    }

    /**
     * Get entityCondition
     *
     * @return string
     */
    public function getEntityCondition()
    {
        return $this->entityCondition;
    }

    /**
     * Set dateMod
     *
     * @param \DateTime $dateMod
     *
     * @return GlpiAuthldaps
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
     * @return GlpiAuthldaps
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
     * Set isDefault
     *
     * @param boolean $isDefault
     *
     * @return GlpiAuthldaps
     */
    public function setIsDefault($isDefault)
    {
        $this->isDefault = $isDefault;

        return $this;
    }

    /**
     * Get isDefault
     *
     * @return boolean
     */
    public function getIsDefault()
    {
        return $this->isDefault;
    }

    /**
     * Set isActive
     *
     * @param boolean $isActive
     *
     * @return GlpiAuthldaps
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
     * Set rootdnPasswd
     *
     * @param string $rootdnPasswd
     *
     * @return GlpiAuthldaps
     */
    public function setRootdnPasswd($rootdnPasswd)
    {
        $this->rootdnPasswd = $rootdnPasswd;

        return $this;
    }

    /**
     * Get rootdnPasswd
     *
     * @return string
     */
    public function getRootdnPasswd()
    {
        return $this->rootdnPasswd;
    }

    /**
     * Set registrationNumberField
     *
     * @param string $registrationNumberField
     *
     * @return GlpiAuthldaps
     */
    public function setRegistrationNumberField($registrationNumberField)
    {
        $this->registrationNumberField = $registrationNumberField;

        return $this;
    }

    /**
     * Get registrationNumberField
     *
     * @return string
     */
    public function getRegistrationNumberField()
    {
        return $this->registrationNumberField;
    }

    /**
     * Set email2Field
     *
     * @param string $email2Field
     *
     * @return GlpiAuthldaps
     */
    public function setEmail2Field($email2Field)
    {
        $this->email2Field = $email2Field;

        return $this;
    }

    /**
     * Get email2Field
     *
     * @return string
     */
    public function getEmail2Field()
    {
        return $this->email2Field;
    }

    /**
     * Set email3Field
     *
     * @param string $email3Field
     *
     * @return GlpiAuthldaps
     */
    public function setEmail3Field($email3Field)
    {
        $this->email3Field = $email3Field;

        return $this;
    }

    /**
     * Get email3Field
     *
     * @return string
     */
    public function getEmail3Field()
    {
        return $this->email3Field;
    }

    /**
     * Set email4Field
     *
     * @param string $email4Field
     *
     * @return GlpiAuthldaps
     */
    public function setEmail4Field($email4Field)
    {
        $this->email4Field = $email4Field;

        return $this;
    }

    /**
     * Get email4Field
     *
     * @return string
     */
    public function getEmail4Field()
    {
        return $this->email4Field;
    }

    /**
     * Set locationField
     *
     * @param string $locationField
     *
     * @return GlpiAuthldaps
     */
    public function setLocationField($locationField)
    {
        $this->locationField = $locationField;

        return $this;
    }

    /**
     * Get locationField
     *
     * @return string
     */
    public function getLocationField()
    {
        return $this->locationField;
    }

    /**
     * Set pagesize
     *
     * @param integer $pagesize
     *
     * @return GlpiAuthldaps
     */
    public function setPagesize($pagesize)
    {
        $this->pagesize = $pagesize;

        return $this;
    }

    /**
     * Get pagesize
     *
     * @return integer
     */
    public function getPagesize()
    {
        return $this->pagesize;
    }

    /**
     * Set ldapMaxlimit
     *
     * @param integer $ldapMaxlimit
     *
     * @return GlpiAuthldaps
     */
    public function setLdapMaxlimit($ldapMaxlimit)
    {
        $this->ldapMaxlimit = $ldapMaxlimit;

        return $this;
    }

    /**
     * Get ldapMaxlimit
     *
     * @return integer
     */
    public function getLdapMaxlimit()
    {
        return $this->ldapMaxlimit;
    }

    /**
     * Set canSupportPagesize
     *
     * @param boolean $canSupportPagesize
     *
     * @return GlpiAuthldaps
     */
    public function setCanSupportPagesize($canSupportPagesize)
    {
        $this->canSupportPagesize = $canSupportPagesize;

        return $this;
    }

    /**
     * Get canSupportPagesize
     *
     * @return boolean
     */
    public function getCanSupportPagesize()
    {
        return $this->canSupportPagesize;
    }

    /**
     * Set pictureField
     *
     * @param string $pictureField
     *
     * @return GlpiAuthldaps
     */
    public function setPictureField($pictureField)
    {
        $this->pictureField = $pictureField;

        return $this;
    }

    /**
     * Get pictureField
     *
     * @return string
     */
    public function getPictureField()
    {
        return $this->pictureField;
    }

    /**
     * Set dateCreation
     *
     * @param \DateTime $dateCreation
     *
     * @return GlpiAuthldaps
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
