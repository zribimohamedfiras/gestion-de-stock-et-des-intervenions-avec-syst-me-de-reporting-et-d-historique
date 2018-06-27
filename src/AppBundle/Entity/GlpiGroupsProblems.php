<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * GlpiGroupsProblems
 *
 * @ORM\Table(name="glpi_groups_problems", uniqueConstraints={@ORM\UniqueConstraint(name="unicity", columns={"problems_id", "type", "groups_id"})}, indexes={@ORM\Index(name="group", columns={"groups_id", "type"})})
 * @ORM\Entity
 */
class GlpiGroupsProblems
{
    /**
     * @var integer
     *
     * @ORM\Column(name="problems_id", type="integer", nullable=false)
     */
    private $problemsId = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="groups_id", type="integer", nullable=false)
     */
    private $groupsId = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="type", type="integer", nullable=false)
     */
    private $type = '1';

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;



    /**
     * Set problemsId
     *
     * @param integer $problemsId
     *
     * @return GlpiGroupsProblems
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
     * Set groupsId
     *
     * @param integer $groupsId
     *
     * @return GlpiGroupsProblems
     */
    public function setGroupsId($groupsId)
    {
        $this->groupsId = $groupsId;

        return $this;
    }

    /**
     * Get groupsId
     *
     * @return integer
     */
    public function getGroupsId()
    {
        return $this->groupsId;
    }

    /**
     * Set type
     *
     * @param integer $type
     *
     * @return GlpiGroupsProblems
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
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }
}
