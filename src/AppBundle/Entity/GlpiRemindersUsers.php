<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * GlpiRemindersUsers
 *
 * @ORM\Table(name="glpi_reminders_users", indexes={@ORM\Index(name="reminders_id", columns={"reminders_id"}), @ORM\Index(name="users_id", columns={"users_id"})})
 * @ORM\Entity
 */
class GlpiRemindersUsers
{
    /**
     * @var integer
     *
     * @ORM\Column(name="reminders_id", type="integer", nullable=false)
     */
    private $remindersId = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="users_id", type="integer", nullable=false)
     */
    private $usersId = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;



    /**
     * Set remindersId
     *
     * @param integer $remindersId
     *
     * @return GlpiRemindersUsers
     */
    public function setRemindersId($remindersId)
    {
        $this->remindersId = $remindersId;

        return $this;
    }

    /**
     * Get remindersId
     *
     * @return integer
     */
    public function getRemindersId()
    {
        return $this->remindersId;
    }

    /**
     * Set usersId
     *
     * @param integer $usersId
     *
     * @return GlpiRemindersUsers
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
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }
}
