<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * GlpiLinksItemtypes
 *
 * @ORM\Table(name="glpi_links_itemtypes", uniqueConstraints={@ORM\UniqueConstraint(name="unicity", columns={"itemtype", "links_id"})}, indexes={@ORM\Index(name="links_id", columns={"links_id"})})
 * @ORM\Entity
 */
class GlpiLinksItemtypes
{
    /**
     * @var integer
     *
     * @ORM\Column(name="links_id", type="integer", nullable=false)
     */
    private $linksId = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="itemtype", type="string", length=100, nullable=false)
     */
    private $itemtype;

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;



    /**
     * Set linksId
     *
     * @param integer $linksId
     *
     * @return GlpiLinksItemtypes
     */
    public function setLinksId($linksId)
    {
        $this->linksId = $linksId;

        return $this;
    }

    /**
     * Get linksId
     *
     * @return integer
     */
    public function getLinksId()
    {
        return $this->linksId;
    }

    /**
     * Set itemtype
     *
     * @param string $itemtype
     *
     * @return GlpiLinksItemtypes
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
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }
}
