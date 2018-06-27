<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * GlpiGroups
 *
 * @ORM\Table(name="glpi_groups", indexes={@ORM\Index(name="name", columns={"name"}), @ORM\Index(name="ldap_field", columns={"ldap_field"}), @ORM\Index(name="entities_id", columns={"entities_id"}), @ORM\Index(name="date_mod", columns={"date_mod"}), @ORM\Index(name="ldap_value", columns={"ldap_value"}), @ORM\Index(name="ldap_group_dn", columns={"ldap_group_dn"}), @ORM\Index(name="groups_id", columns={"groups_id"}), @ORM\Index(name="is_requester", columns={"is_requester"}), @ORM\Index(name="is_assign", columns={"is_assign"}), @ORM\Index(name="is_notify", columns={"is_notify"}), @ORM\Index(name="is_itemgroup", columns={"is_itemgroup"}), @ORM\Index(name="is_usergroup", columns={"is_usergroup"}), @ORM\Index(name="is_manager", columns={"is_manager"}), @ORM\Index(name="date_creation", columns={"date_creation"})})
 * @ORM\Entity
 */
class GlpiGroups
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
     * @ORM\Column(name="comment", type="text", length=65535, nullable=true)
     */
    private $comment;

    /**
     * @var string
     *
     * @ORM\Column(name="ldap_field", type="string", length=255, nullable=true)
     */
    private $ldapField;

    /**
     * @var string
     *
     * @ORM\Column(name="ldap_value", type="text", length=65535, nullable=true)
     */
    private $ldapValue;

    /**
     * @var string
     *
     * @ORM\Column(name="ldap_group_dn", type="text", length=65535, nullable=true)
     */
    private $ldapGroupDn;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_mod", type="datetime", nullable=true)
     */
    private $dateMod;

    /**
     * @var integer
     *
     * @ORM\Column(name="groups_id", type="integer", nullable=false)
     */
    private $groupsId = '0';

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
     * @ORM\Column(name="is_requester", type="boolean", nullable=false)
     */
    private $isRequester = '1';

    /**
     * @var boolean
     *
     * @ORM\Column(name="is_assign", type="boolean", nullable=false)
     */
    private $isAssign = '1';

    /**
     * @var boolean
     *
     * @ORM\Column(name="is_notify", type="boolean", nullable=false)
     */
    private $isNotify = '1';

    /**
     * @var boolean
     *
     * @ORM\Column(name="is_itemgroup", type="boolean", nullable=false)
     */
    private $isItemgroup = '1';

    /**
     * @var boolean
     *
     * @ORM\Column(name="is_usergroup", type="boolean", nullable=false)
     */
    private $isUsergroup = '1';

    /**
     * @var boolean
     *
     * @ORM\Column(name="is_manager", type="boolean", nullable=false)
     */
    private $isManager = '1';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_creation", type="datetime", nullable=true)
     */
    private $dateCreation;

    /**
     * @var boolean
     *
     * @ORM\Column(name="is_task", type="boolean", nullable=false)
     */
    private $isTask = '1';

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
     * @return GlpiGroups
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
     * @return GlpiGroups
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
     * @return GlpiGroups
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
     * Set comment
     *
     * @param string $comment
     *
     * @return GlpiGroups
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
     * Set ldapField
     *
     * @param string $ldapField
     *
     * @return GlpiGroups
     */
    public function setLdapField($ldapField)
    {
        $this->ldapField = $ldapField;

        return $this;
    }

    /**
     * Get ldapField
     *
     * @return string
     */
    public function getLdapField()
    {
        return $this->ldapField;
    }

    /**
     * Set ldapValue
     *
     * @param string $ldapValue
     *
     * @return GlpiGroups
     */
    public function setLdapValue($ldapValue)
    {
        $this->ldapValue = $ldapValue;

        return $this;
    }

    /**
     * Get ldapValue
     *
     * @return string
     */
    public function getLdapValue()
    {
        return $this->ldapValue;
    }

    /**
     * Set ldapGroupDn
     *
     * @param string $ldapGroupDn
     *
     * @return GlpiGroups
     */
    public function setLdapGroupDn($ldapGroupDn)
    {
        $this->ldapGroupDn = $ldapGroupDn;

        return $this;
    }

    /**
     * Get ldapGroupDn
     *
     * @return string
     */
    public function getLdapGroupDn()
    {
        return $this->ldapGroupDn;
    }

    /**
     * Set dateMod
     *
     * @param \DateTime $dateMod
     *
     * @return GlpiGroups
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
     * Set groupsId
     *
     * @param integer $groupsId
     *
     * @return GlpiGroups
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
     * Set completename
     *
     * @param string $completename
     *
     * @return GlpiGroups
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
     * @return GlpiGroups
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
     * @return GlpiGroups
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
     * @return GlpiGroups
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
     * Set isRequester
     *
     * @param boolean $isRequester
     *
     * @return GlpiGroups
     */
    public function setIsRequester($isRequester)
    {
        $this->isRequester = $isRequester;

        return $this;
    }

    /**
     * Get isRequester
     *
     * @return boolean
     */
    public function getIsRequester()
    {
        return $this->isRequester;
    }

    /**
     * Set isAssign
     *
     * @param boolean $isAssign
     *
     * @return GlpiGroups
     */
    public function setIsAssign($isAssign)
    {
        $this->isAssign = $isAssign;

        return $this;
    }

    /**
     * Get isAssign
     *
     * @return boolean
     */
    public function getIsAssign()
    {
        return $this->isAssign;
    }

    /**
     * Set isNotify
     *
     * @param boolean $isNotify
     *
     * @return GlpiGroups
     */
    public function setIsNotify($isNotify)
    {
        $this->isNotify = $isNotify;

        return $this;
    }

    /**
     * Get isNotify
     *
     * @return boolean
     */
    public function getIsNotify()
    {
        return $this->isNotify;
    }

    /**
     * Set isItemgroup
     *
     * @param boolean $isItemgroup
     *
     * @return GlpiGroups
     */
    public function setIsItemgroup($isItemgroup)
    {
        $this->isItemgroup = $isItemgroup;

        return $this;
    }

    /**
     * Get isItemgroup
     *
     * @return boolean
     */
    public function getIsItemgroup()
    {
        return $this->isItemgroup;
    }

    /**
     * Set isUsergroup
     *
     * @param boolean $isUsergroup
     *
     * @return GlpiGroups
     */
    public function setIsUsergroup($isUsergroup)
    {
        $this->isUsergroup = $isUsergroup;

        return $this;
    }

    /**
     * Get isUsergroup
     *
     * @return boolean
     */
    public function getIsUsergroup()
    {
        return $this->isUsergroup;
    }

    /**
     * Set isManager
     *
     * @param boolean $isManager
     *
     * @return GlpiGroups
     */
    public function setIsManager($isManager)
    {
        $this->isManager = $isManager;

        return $this;
    }

    /**
     * Get isManager
     *
     * @return boolean
     */
    public function getIsManager()
    {
        return $this->isManager;
    }

    /**
     * Set dateCreation
     *
     * @param \DateTime $dateCreation
     *
     * @return GlpiGroups
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
     * Set isTask
     *
     * @param boolean $isTask
     *
     * @return GlpiGroups
     */
    public function setIsTask($isTask)
    {
        $this->isTask = $isTask;

        return $this;
    }

    /**
     * Get isTask
     *
     * @return boolean
     */
    public function getIsTask()
    {
        return $this->isTask;
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
