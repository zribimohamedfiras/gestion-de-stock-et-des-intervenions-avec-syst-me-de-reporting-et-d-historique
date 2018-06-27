<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * GlpiEntitiesReminders
 *
 * @ORM\Table(name="glpi_entities_reminders", indexes={@ORM\Index(name="reminders_id", columns={"reminders_id"}), @ORM\Index(name="entities_id", columns={"entities_id"}), @ORM\Index(name="is_recursive", columns={"is_recursive"})})
 * @ORM\Entity
 */
class GlpiEntitiesReminders
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
     * @return GlpiEntitiesReminders
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
     * Set entitiesId
     *
     * @param integer $entitiesId
     *
     * @return GlpiEntitiesReminders
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
     * @return GlpiEntitiesReminders
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
