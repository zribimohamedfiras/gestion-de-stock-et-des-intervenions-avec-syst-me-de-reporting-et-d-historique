<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * GlpiPlanningrecalls
 *
 * @ORM\Table(name="glpi_planningrecalls", uniqueConstraints={@ORM\UniqueConstraint(name="unicity", columns={"itemtype", "items_id", "users_id"})}, indexes={@ORM\Index(name="users_id", columns={"users_id"}), @ORM\Index(name="before_time", columns={"before_time"}), @ORM\Index(name="when", columns={"when"})})
 * @ORM\Entity
 */
class GlpiPlanningrecalls
{
    /**
     * @var integer
     *
     * @ORM\Column(name="items_id", type="integer", nullable=false)
     */
    private $itemsId = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="itemtype", type="string", length=100, nullable=false)
     */
    private $itemtype;

    /**
     * @var integer
     *
     * @ORM\Column(name="users_id", type="integer", nullable=false)
     */
    private $usersId = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="before_time", type="integer", nullable=false)
     */
    private $beforeTime = '-10';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="when", type="datetime", nullable=true)
     */
    private $when;

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
     * @return GlpiPlanningrecalls
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
     * Set itemtype
     *
     * @param string $itemtype
     *
     * @return GlpiPlanningrecalls
     */
    public function setItemtype($itemtype)
    {
        $this->itemtype = $itemtype;

        return $this;
    }

    /**
     * Get itemtype
     *
     * @return string
     */
    public function getItemtype()
    {
        return $this->itemtype;
    }

    /**
     * Set usersId
     *
     * @param integer $usersId
     *
     * @return GlpiPlanningrecalls
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
     * Set beforeTime
     *
     * @param integer $beforeTime
     *
     * @return GlpiPlanningrecalls
     */
    public function setBeforeTime($beforeTime)
    {
        $this->beforeTime = $beforeTime;

        return $this;
    }

    /**
     * Get beforeTime
     *
     * @return integer
     */
    public function getBeforeTime()
    {
        return $this->beforeTime;
    }

    /**
     * Set when
     *
     * @param \DateTime $when
     *
     * @return GlpiPlanningrecalls
     */
    public function setWhen($when)
    {
        $this->when = $when;

        return $this;
    }

    /**
     * Get when
     *
     * @return \DateTime
     */
    public function getWhen()
    {
        return $this->when;
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
