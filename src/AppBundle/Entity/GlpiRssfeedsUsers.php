<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * GlpiRssfeedsUsers
 *
 * @ORM\Table(name="glpi_rssfeeds_users", indexes={@ORM\Index(name="rssfeeds_id", columns={"rssfeeds_id"}), @ORM\Index(name="users_id", columns={"users_id"})})
 * @ORM\Entity
 */
class GlpiRssfeedsUsers
{
    /**
     * @var integer
     *
     * @ORM\Column(name="rssfeeds_id", type="integer", nullable=false)
     */
    private $rssfeedsId = '0';

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
     * Set rssfeedsId
     *
     * @param integer $rssfeedsId
     *
     * @return GlpiRssfeedsUsers
     */
    public function setRssfeedsId($rssfeedsId)
    {
        $this->rssfeedsId = $rssfeedsId;

        return $this;
    }

    /**
     * Get rssfeedsId
     *
     * @return integer
     */
    public function getRssfeedsId()
    {
        return $this->rssfeedsId;
    }

    /**
     * Set usersId
     *
     * @param integer $usersId
     *
     * @return GlpiRssfeedsUsers
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
