<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * GlpiChangesProjects
 *
 * @ORM\Table(name="glpi_changes_projects", uniqueConstraints={@ORM\UniqueConstraint(name="unicity", columns={"changes_id", "projects_id"})}, indexes={@ORM\Index(name="projects_id", columns={"projects_id"})})
 * @ORM\Entity
 */
class GlpiChangesProjects
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
     * @ORM\Column(name="projects_id", type="integer", nullable=false)
     */
    private $projectsId = '0';

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
     * @return GlpiChangesProjects
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
     * Set projectsId
     *
     * @param integer $projectsId
     *
     * @return GlpiChangesProjects
     */
    public function setProjectsId($projectsId)
    {
        $this->projectsId = $projectsId;

        return $this;
    }

    /**
     * Get projectsId
     *
     * @return integer
     */
    public function getProjectsId()
    {
        return $this->projectsId;
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
