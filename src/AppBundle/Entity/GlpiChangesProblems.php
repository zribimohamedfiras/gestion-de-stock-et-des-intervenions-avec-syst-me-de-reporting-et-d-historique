<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * GlpiChangesProblems
 *
 * @ORM\Table(name="glpi_changes_problems", uniqueConstraints={@ORM\UniqueConstraint(name="unicity", columns={"changes_id", "problems_id"})}, indexes={@ORM\Index(name="problems_id", columns={"problems_id"})})
 * @ORM\Entity
 */
class GlpiChangesProblems
{
    /**
     * @var integer
     *
     * @ORM\Column(name="changes_id", type="integer", nullable=false)
     */
    private $changesId = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="problems_id", type="integer", nullable=false)
     */
    private $problemsId = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;



    /**
     * Set changesId
     *
     * @param integer $changesId
     *
     * @return GlpiChangesProblems
     */
    public function setChangesId($changesId)
    {
        $this->changesId = $changesId;

        return $this;
    }

    /**
     * Get changesId
     *
     * @return integer
     */
    public function getChangesId()
    {
        return $this->changesId;
    }

    /**
     * Set problemsId
     *
     * @param integer $problemsId
     *
     * @return GlpiChangesProblems
     */
    public function setProblemsId($problemsId)
    {
        $this->problemsId = $problemsId;

        return $this;
    }

    /**
     * Get problemsId
     *
     * @return integer
     */
    public function getProblemsId()
    {
        return $this->problemsId;
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
