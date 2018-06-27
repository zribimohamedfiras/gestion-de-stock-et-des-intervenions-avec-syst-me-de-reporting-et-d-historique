<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * GlpiGroupsUsers
 *
 * @ORM\Table(name="glpi_groups_users", uniqueConstraints={@ORM\UniqueConstraint(name="unicity", columns={"users_id", "groups_id"})}, indexes={@ORM\Index(name="groups_id", columns={"groups_id"}), @ORM\Index(name="is_manager", columns={"is_manager"}), @ORM\Index(name="is_userdelegate", columns={"is_userdelegate"})})
 * @ORM\Entity
 */
class GlpiGroupsUsers
{
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
     * @var boolean
     *
     * @ORM\Column(name="is_dynamic", type="boolean", nullable=false)
     */
    private $isDynamic = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="is_manager", type="boolean", nullable=false)
     */
    private $isManager = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="is_userdelegate", type="boolean", nullable=false)
     */
    private $isUserdelegate = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;



    /**
     * Set usersId
     *
     * @param integer $usersId
     *
     * @return GlpiGroupsUsers
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
     * @return GlpiGroupsUsers
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
     * Set isDynamic
     *
     * @param boolean $isDynamic
     *
     * @return GlpiGroupsUsers
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
     * Set isManager
     *
     * @param boolean $isManager
     *
     * @return GlpiGroupsUsers
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
     * Set isUserdelegate
     *
     * @param boolean $isUserdelegate
     *
     * @return GlpiGroupsUsers
     */
    public function setIsUserdelegate($isUserdelegate)
    {
        $this->isUserdelegate = $isUserdelegate;

        return $this;
    }

    /**
     * Get isUserdelegate
     *
     * @return boolean
     */
    public function getIsUserdelegate()
    {
        return $this->isUserdelegate;
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
