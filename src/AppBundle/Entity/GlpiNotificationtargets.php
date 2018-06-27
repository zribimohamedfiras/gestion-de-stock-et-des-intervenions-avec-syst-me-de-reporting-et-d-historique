<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * GlpiNotificationtargets
 *
 * @ORM\Table(name="glpi_notificationtargets", indexes={@ORM\Index(name="items", columns={"type", "items_id"}), @ORM\Index(name="notifications_id", columns={"notifications_id"})})
 * @ORM\Entity
 */
class GlpiNotificationtargets
{
    /**
     * @var integer
     *
     * @ORM\Column(name="items_id", type="integer", nullable=false)
     */
    private $itemsId = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="type", type="integer", nullable=false)
     */
    private $type = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="notifications_id", type="integer", nullable=false)
     */
    private $notificationsId = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;



    /**
     * Set itemsId
     *
     * @param integer $itemsId
     *
     * @return GlpiNotificationtargets
     */
    public function setItemsId($itemsId)
    {
        $this->itemsId = $itemsId;

        return $this;
    }

    /**
     * Get itemsId
     *
     * @return integer
     */
    public function getItemsId()
    {
        return $this->itemsId;
    }

    /**
     * Set type
     *
     * @param integer $type
     *
     * @return GlpiNotificationtargets
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
     * Set notificationsId
     *
     * @param integer $notificationsId
     *
     * @return GlpiNotificationtargets
     */
    public function setNotificationsId($notificationsId)
    {
        $this->notificationsId = $notificationsId;

        return $this;
    }

    /**
     * Get notificationsId
     *
     * @return integer
     */
    public function getNotificationsId()
    {
        return $this->notificationsId;
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
