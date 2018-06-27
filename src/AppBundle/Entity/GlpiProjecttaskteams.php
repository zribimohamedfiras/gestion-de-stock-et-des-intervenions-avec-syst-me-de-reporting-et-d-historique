<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * GlpiProjecttaskteams
 *
 * @ORM\Table(name="glpi_projecttaskteams", uniqueConstraints={@ORM\UniqueConstraint(name="unicity", columns={"projecttasks_id", "itemtype", "items_id"})}, indexes={@ORM\Index(name="item", columns={"itemtype", "items_id"})})
 * @ORM\Entity
 */
class GlpiProjecttaskteams
{
    /**
     * @var integer
     *
     * @ORM\Column(name="projecttasks_id", type="integer", nullable=false)
     */
    private $projecttasksId = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="itemtype", type="string", length=100, nullable=true)
     */
    private $itemtype;

    /**
     * @var integer
     *
     * @ORM\Column(name="items_id", type="integer", nullable=false)
     */
    private $itemsId = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;



    /**
     * Set projecttasksId
     *
     * @param integer $projecttasksId
     *
     * @return GlpiProjecttaskteams
     */
    public function setProjecttasksId($projecttasksId)
    {
        $this->projecttasksId = $projecttasksId;

        return $this;
    }

    /**
     * Get projecttasksId
     *
     * @return integer
     */
    public function getProjecttasksId()
    {
        return $this->projecttasksId;
    }

    /**
     * Set itemtype
     *
     * @param string $itemtype
     *
     * @return GlpiProjecttaskteams
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
     * Set itemsId
     *
     * @param integer $itemsId
     *
     * @return GlpiProjecttaskteams
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
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }
}
