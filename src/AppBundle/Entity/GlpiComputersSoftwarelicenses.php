<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * GlpiComputersSoftwarelicenses
 *
 * @ORM\Table(name="glpi_computers_softwarelicenses", uniqueConstraints={@ORM\UniqueConstraint(name="unicity", columns={"computers_id", "softwarelicenses_id"})}, indexes={@ORM\Index(name="computers_id", columns={"computers_id"}), @ORM\Index(name="softwarelicenses_id", columns={"softwarelicenses_id"}), @ORM\Index(name="is_deleted", columns={"is_deleted"}), @ORM\Index(name="is_dynamic", columns={"is_dynamic"})})
 * @ORM\Entity
 */
class GlpiComputersSoftwarelicenses
{
    /**
     * @var integer
     *
     * @ORM\Column(name="computers_id", type="integer", nullable=false)
     */
    private $computersId = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="softwarelicenses_id", type="integer", nullable=false)
     */
    private $softwarelicensesId = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="is_deleted", type="boolean", nullable=false)
     */
    private $isDeleted = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="is_dynamic", type="boolean", nullable=false)
     */
    private $isDynamic = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;



    /**
     * Set computersId
     *
     * @param integer $computersId
     *
     * @return GlpiComputersSoftwarelicenses
     */
    public function setComputersId($computersId)
    {
        $this->computersId = $computersId;

        return $this;
    }

    /**
     * Get computersId
     *
     * @return integer
     */
    public function getComputersId()
    {
        return $this->computersId;
    }

    /**
     * Set softwarelicensesId
     *
     * @param integer $softwarelicensesId
     *
     * @return GlpiComputersSoftwarelicenses
     */
    public function setSoftwarelicensesId($softwarelicensesId)
    {
        $this->softwarelicensesId = $softwarelicensesId;

        return $this;
    }

    /**
     * Get softwarelicensesId
     *
     * @return integer
     */
    public function getSoftwarelicensesId()
    {
        return $this->softwarelicensesId;
    }

    /**
     * Set isDeleted
     *
     * @param boolean $isDeleted
     *
     * @return GlpiComputersSoftwarelicenses
     */
    public function setIsDeleted($isDeleted)
    {
        $this->isDeleted = $isDeleted;

        return $this;
    }

    /**
     * Get isDeleted
     *
     * @return boolean
     */
    public function getIsDeleted()
    {
        return $this->isDeleted;
    }

    /**
     * Set isDynamic
     *
     * @param boolean $isDynamic
     *
     * @return GlpiComputersSoftwarelicenses
     */
    public function setIsDynamic($isDynamic)
    {
        $this->isDynamic = $isDynamic;

        return $this;
    }

    /**
     * Get isDynamic
     *
     * @return boolean
     */
    public function getIsDynamic()
    {
        return $this->isDynamic;
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
