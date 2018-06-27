<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * GlpiChangesUsers
 *
 * @ORM\Table(name="glpi_changes_users", uniqueConstraints={@ORM\UniqueConstraint(name="unicity", columns={"changes_id", "type", "users_id", "alternative_email"})}, indexes={@ORM\Index(name="user", columns={"users_id", "type"})})
 * @ORM\Entity
 */
class GlpiChangesUsers
{
    /**
     * @var integer
     *
     * @ORM\Column(name="changes_id", type="integer", nullable=false)
     */
    private $changesId = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="users_id", type="integer", nullable=false)
     */
    private $usersId = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="type", type="integer", nullable=false)
     */
    private $type = '1';

    /**
     * @var boolean
     *
     * @ORM\Column(name="use_notification", type="boolean", nullable=false)
     */
    private $useNotification = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="alternative_email", type="string", length=255, nullable=true)
     */
    private $alternativeEmail;

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;



    /**
     * Set changesId
     *
     * @param integer $changesId
     *
     * @return GlpiChangesUsers
     */
    public function setChangesId($changesId)
    {
        $this->changesId = $changesId;

        return $this;
    }

    /**
     * Get changesId
     *
     * @return integer
     */
    public function getChangesId()
    {
        return $this->changesId;
    }

    /**
     * Set usersId
     *
     * @param integer $usersId
     *
     * @return GlpiChangesUsers
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
     * Set type
     *
     * @param integer $type
     *
     * @return GlpiChangesUsers
     */
    public function setType($type)
    {
        $this->type = $type;

        return $this;
    }

    /**
     * Get type
     *
     * @return integer
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Set useNotification
     *
     * @param boolean $useNotification
     *
     * @return GlpiChangesUsers
     */
    public function setUseNotification($useNotification)
    {
        $this->useNotification = $useNotification;

        return $this;
    }

    /**
     * Get useNotification
     *
     * @return boolean
     */
    public function getUseNotification()
    {
        return $this->useNotification;
    }

    /**
     * Set alternativeEmail
     *
     * @param string $alternativeEmail
     *
     * @return GlpiChangesUsers
     */
    public function setAlternativeEmail($alternativeEmail)
    {
        $this->alternativeEmail = $alternativeEmail;

        return $this;
    }

    /**
     * Get alternativeEmail
     *
     * @return string
     */
    public function getAlternativeEmail()
    {
        return $this->alternativeEmail;
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
