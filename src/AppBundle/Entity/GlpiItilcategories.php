<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * GlpiItilcategories
 *
 * @ORM\Table(name="glpi_itilcategories", indexes={@ORM\Index(name="name", columns={"name"}), @ORM\Index(name="entities_id", columns={"entities_id"}), @ORM\Index(name="is_recursive", columns={"is_recursive"}), @ORM\Index(name="knowbaseitemcategories_id", columns={"knowbaseitemcategories_id"}), @ORM\Index(name="users_id", columns={"users_id"}), @ORM\Index(name="groups_id", columns={"groups_id"}), @ORM\Index(name="is_helpdeskvisible", columns={"is_helpdeskvisible"}), @ORM\Index(name="itilcategories_id", columns={"itilcategories_id"}), @ORM\Index(name="tickettemplates_id_incident", columns={"tickettemplates_id_incident"}), @ORM\Index(name="tickettemplates_id_demand", columns={"tickettemplates_id_demand"}), @ORM\Index(name="is_incident", columns={"is_incident"}), @ORM\Index(name="is_request", columns={"is_request"}), @ORM\Index(name="is_problem", columns={"is_problem"}), @ORM\Index(name="is_change", columns={"is_change"}), @ORM\Index(name="date_mod", columns={"date_mod"}), @ORM\Index(name="date_creation", columns={"date_creation"})})
 * @ORM\Entity
 */
class GlpiItilcategories
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
     * @ORM\Column(name="itilcategories_id", type="integer", nullable=false)
     */
    private $itilcategoriesId = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=255, nullable=true)
     */
    private $name;

    /**
     * @var string
     *
     * @ORM\Column(name="completename", type="text", length=65535, nullable=true)
     */
    private $completename;

    /**
     * @var string
     *
     * @ORM\Column(name="comment", type="text", length=65535, nullable=true)
     */
    private $comment;

    /**
     * @var integer
     *
     * @ORM\Column(name="level", type="integer", nullable=false)
     */
    private $level = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="knowbaseitemcategories_id", type="integer", nullable=false)
     */
    private $knowbaseitemcategoriesId = '0';

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
     * @ORM\Column(name="is_helpdeskvisible", type="boolean", nullable=false)
     */
    private $isHelpdeskvisible = '1';

    /**
     * @var integer
     *
     * @ORM\Column(name="tickettemplates_id_incident", type="integer", nullable=false)
     */
    private $tickettemplatesIdIncident = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="tickettemplates_id_demand", type="integer", nullable=false)
     */
    private $tickettemplatesIdDemand = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="is_incident", type="integer", nullable=false)
     */
    private $isIncident = '1';

    /**
     * @var integer
     *
     * @ORM\Column(name="is_request", type="integer", nullable=false)
     */
    private $isRequest = '1';

    /**
     * @var integer
     *
     * @ORM\Column(name="is_problem", type="integer", nullable=false)
     */
    private $isProblem = '1';

    /**
     * @var boolean
     *
     * @ORM\Column(name="is_change", type="boolean", nullable=false)
     */
    private $isChange = '1';

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
     * @return GlpiItilcategories
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
     * @return GlpiItilcategories
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
     * Set itilcategoriesId
     *
     * @param integer $itilcategoriesId
     *
     * @return GlpiItilcategories
     */
    public function setItilcategoriesId($itilcategoriesId)
    {
        $this->itilcategoriesId = $itilcategoriesId;

        return $this;
    }

    /**
     * Get itilcategoriesId
     *
     * @return integer
     */
    public function getItilcategoriesId()
    {
        return $this->itilcategoriesId;
    }

    /**
     * Set name
     *
     * @param string $name
     *
     * @return GlpiItilcategories
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
     * Set completename
     *
     * @param string $completename
     *
     * @return GlpiItilcategories
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
     * Set comment
     *
     * @param string $comment
     *
     * @return GlpiItilcategories
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
     * Set level
     *
     * @param integer $level
     *
     * @return GlpiItilcategories
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
     * Set knowbaseitemcategoriesId
     *
     * @param integer $knowbaseitemcategoriesId
     *
     * @return GlpiItilcategories
     */
    public function setKnowbaseitemcategoriesId($knowbaseitemcategoriesId)
    {
        $this->knowbaseitemcategoriesId = $knowbaseitemcategoriesId;

        return $this;
    }

    /**
     * Get knowbaseitemcategoriesId
     *
     * @return integer
     */
    public function getKnowbaseitemcategoriesId()
    {
        return $this->knowbaseitemcategoriesId;
    }

    /**
     * Set usersId
     *
     * @param integer $usersId
     *
     * @return GlpiItilcategories
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
     * @return GlpiItilcategories
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
     * Set ancestorsCache
     *
     * @param string $ancestorsCache
     *
     * @return GlpiItilcategories
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
     * @return GlpiItilcategories
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
     * Set isHelpdeskvisible
     *
     * @param boolean $isHelpdeskvisible
     *
     * @return GlpiItilcategories
     */
    public function setIsHelpdeskvisible($isHelpdeskvisible)
    {
        $this->isHelpdeskvisible = $isHelpdeskvisible;

        return $this;
    }

    /**
     * Get isHelpdeskvisible
     *
     * @return boolean
     */
    public function getIsHelpdeskvisible()
    {
        return $this->isHelpdeskvisible;
    }

    /**
     * Set tickettemplatesIdIncident
     *
     * @param integer $tickettemplatesIdIncident
     *
     * @return GlpiItilcategories
     */
    public function setTickettemplatesIdIncident($tickettemplatesIdIncident)
    {
        $this->tickettemplatesIdIncident = $tickettemplatesIdIncident;

        return $this;
    }

    /**
     * Get tickettemplatesIdIncident
     *
     * @return integer
     */
    public function getTickettemplatesIdIncident()
    {
        return $this->tickettemplatesIdIncident;
    }

    /**
     * Set tickettemplatesIdDemand
     *
     * @param integer $tickettemplatesIdDemand
     *
     * @return GlpiItilcategories
     */
    public function setTickettemplatesIdDemand($tickettemplatesIdDemand)
    {
        $this->tickettemplatesIdDemand = $tickettemplatesIdDemand;

        return $this;
    }

    /**
     * Get tickettemplatesIdDemand
     *
     * @return integer
     */
    public function getTickettemplatesIdDemand()
    {
        return $this->tickettemplatesIdDemand;
    }

    /**
     * Set isIncident
     *
     * @param integer $isIncident
     *
     * @return GlpiItilcategories
     */
    public function setIsIncident($isIncident)
    {
        $this->isIncident = $isIncident;

        return $this;
    }

    /**
     * Get isIncident
     *
     * @return integer
     */
    public function getIsIncident()
    {
        return $this->isIncident;
    }

    /**
     * Set isRequest
     *
     * @param integer $isRequest
     *
     * @return GlpiItilcategories
     */
    public function setIsRequest($isRequest)
    {
        $this->isRequest = $isRequest;

        return $this;
    }

    /**
     * Get isRequest
     *
     * @return integer
     */
    public function getIsRequest()
    {
        return $this->isRequest;
    }

    /**
     * Set isProblem
     *
     * @param integer $isProblem
     *
     * @return GlpiItilcategories
     */
    public function setIsProblem($isProblem)
    {
        $this->isProblem = $isProblem;

        return $this;
    }

    /**
     * Get isProblem
     *
     * @return integer
     */
    public function getIsProblem()
    {
        return $this->isProblem;
    }

    /**
     * Set isChange
     *
     * @param boolean $isChange
     *
     * @return GlpiItilcategories
     */
    public function setIsChange($isChange)
    {
        $this->isChange = $isChange;

        return $this;
    }

    /**
     * Get isChange
     *
     * @return boolean
     */
    public function getIsChange()
    {
        return $this->isChange;
    }

    /**
     * Set dateMod
     *
     * @param \DateTime $dateMod
     *
     * @return GlpiItilcategories
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
     * @return GlpiItilcategories
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
