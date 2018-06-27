<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * GlpiBookmarksUsers
 *
 * @ORM\Table(name="glpi_bookmarks_users", uniqueConstraints={@ORM\UniqueConstraint(name="unicity", columns={"users_id", "itemtype"})}, indexes={@ORM\Index(name="bookmarks_id", columns={"bookmarks_id"})})
 * @ORM\Entity
 */
class GlpiBookmarksUsers
{
    /**
     * @var integer
     *
     * @ORM\Column(name="users_id", type="integer", nullable=false)
     */
    private $usersId = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="itemtype", type="string", length=100, nullable=false)
     */
    private $itemtype;

    /**
     * @var integer
     *
     * @ORM\Column(name="bookmarks_id", type="integer", nullable=false)
     */
    private $bookmarksId = '0';

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
     * @return GlpiBookmarksUsers
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
     * Set itemtype
     *
     * @param string $itemtype
     *
     * @return GlpiBookmarksUsers
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
     * Set bookmarksId
     *
     * @param integer $bookmarksId
     *
     * @return GlpiBookmarksUsers
     */
    public function setBookmarksId($bookmarksId)
    {
        $this->bookmarksId = $bookmarksId;

        return $this;
    }

    /**
     * Get bookmarksId
     *
     * @return integer
     */
    public function getBookmarksId()
    {
        return $this->bookmarksId;
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
