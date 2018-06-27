<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * GlpiKnowbaseitemsUsers
 *
 * @ORM\Table(name="glpi_knowbaseitems_users", indexes={@ORM\Index(name="knowbaseitems_id", columns={"knowbaseitems_id"}), @ORM\Index(name="users_id", columns={"users_id"})})
 * @ORM\Entity
 */
class GlpiKnowbaseitemsUsers
{
    /**
     * @var integer
     *
     * @ORM\Column(name="knowbaseitems_id", type="integer", nullable=false)
     */
    private $knowbaseitemsId = '0';

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
     * Set knowbaseitemsId
     *
     * @param integer $knowbaseitemsId
     *
     * @return GlpiKnowbaseitemsUsers
     */
    public function setKnowbaseitemsId($knowbaseitemsId)
    {
        $this->knowbaseitemsId = $knowbaseitemsId;

        return $this;
    }

    /**
     * Get knowbaseitemsId
     *
     * @return integer
     */
    public function getKnowbaseitemsId()
    {
        return $this->knowbaseitemsId;
    }

    /**
     * Set usersId
     *
     * @param integer $usersId
     *
     * @return GlpiKnowbaseitemsUsers
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
