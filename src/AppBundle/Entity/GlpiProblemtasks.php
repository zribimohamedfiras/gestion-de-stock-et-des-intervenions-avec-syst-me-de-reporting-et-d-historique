<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * GlpiProblemtasks
 *
 * @ORM\Table(name="glpi_problemtasks", indexes={@ORM\Index(name="problems_id", columns={"problems_id"}), @ORM\Index(name="users_id", columns={"users_id"}), @ORM\Index(name="users_id_tech", columns={"users_id_tech"}), @ORM\Index(name="groups_id_tech", columns={"groups_id_tech"}), @ORM\Index(name="date", columns={"date"}), @ORM\Index(name="date_mod", columns={"date_mod"}), @ORM\Index(name="begin", columns={"begin"}), @ORM\Index(name="end", columns={"end"}), @ORM\Index(name="state", columns={"state"}), @ORM\Index(name="taskcategories_id", columns={"taskcategories_id"})})
 * @ORM\Entity
 */
class GlpiProblemtasks
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
     * @ORM\Column(name="taskcategories_id", type="integer", nullable=false)
     */
    private $taskcategoriesId = '0';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date", type="datetime", nullable=true)
     */
    private $date;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="begin", type="datetime", nullable=true)
     */
    private $begin;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="end", type="datetime", nullable=true)
     */
    private $end;

    /**
     * @var integer
     *
     * @ORM\Column(name="users_id", type="integer", nullable=false)
     */
    private $usersId = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="users_id_tech", type="integer", nullable=false)
     */
    private $usersIdTech = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="groups_id_tech", type="integer", nullable=false)
     */
    private $groupsIdTech = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="content", type="text", nullable=true)
     */
    private $content;

    /**
     * @var integer
     *
     * @ORM\Column(name="actiontime", type="integer", nullable=false)
     */
    private $actiontime = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="state", type="integer", nullable=false)
     */
    private $state = '0';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_mod", type="datetime", nullable=true)
     */
    private $dateMod;

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
     * @return GlpiProblemtasks
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
     * Set taskcategoriesId
     *
     * @param integer $taskcategoriesId
     *
     * @return GlpiProblemtasks
     */
    public function setTaskcategoriesId($taskcategoriesId)
    {
        $this->taskcategoriesId = $taskcategoriesId;

        return $this;
    }

    /**
     * Get taskcategoriesId
     *
     * @return integer
     */
    public function getTaskcategoriesId()
    {
        return $this->taskcategoriesId;
    }

    /**
     * Set date
     *
     * @param \DateTime $date
     *
     * @return GlpiProblemtasks
     */
    public function setDate($date)
    {
        $this->date = $date;

        return $this;
    }

    /**
     * Get date
     *
     * @return \DateTime
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * Set begin
     *
     * @param \DateTime $begin
     *
     * @return GlpiProblemtasks
     */
    public function setBegin($begin)
    {
        $this->begin = $begin;

        return $this;
    }

    /**
     * Get begin
     *
     * @return \DateTime
     */
    public function getBegin()
    {
        return $this->begin;
    }

    /**
     * Set end
     *
     * @param \DateTime $end
     *
     * @return GlpiProblemtasks
     */
    public function setEnd($end)
    {
        $this->end = $end;

        return $this;
    }

    /**
     * Get end
     *
     * @return \DateTime
     */
    public function getEnd()
    {
        return $this->end;
    }

    /**
     * Set usersId
     *
     * @param integer $usersId
     *
     * @return GlpiProblemtasks
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
     * Set usersIdTech
     *
     * @param integer $usersIdTech
     *
     * @return GlpiProblemtasks
     */
    public function setUsersIdTech($usersIdTech)
    {
        $this->usersIdTech = $usersIdTech;

        return $this;
    }

    /**
     * Get usersIdTech
     *
     * @return integer
     */
    public function getUsersIdTech()
    {
        return $this->usersIdTech;
    }

    /**
     * Set groupsIdTech
     *
     * @param integer $groupsIdTech
     *
     * @return GlpiProblemtasks
     */
    public function setGroupsIdTech($groupsIdTech)
    {
        $this->groupsIdTech = $groupsIdTech;

        return $this;
    }

    /**
     * Get groupsIdTech
     *
     * @return integer
     */
    public function getGroupsIdTech()
    {
        return $this->groupsIdTech;
    }

    /**
     * Set content
     *
     * @param string $content
     *
     * @return GlpiProblemtasks
     */
    public function setContent($content)
    {
        $this->content = $content;

        return $this;
    }

    /**
     * Get content
     *
     * @return string
     */
    public function getContent()
    {
        return $this->content;
    }

    /**
     * Set actiontime
     *
     * @param integer $actiontime
     *
     * @return GlpiProblemtasks
     */
    public function setActiontime($actiontime)
    {
        $this->actiontime = $actiontime;

        return $this;
    }

    /**
     * Get actiontime
     *
     * @return integer
     */
    public function getActiontime()
    {
        return $this->actiontime;
    }

    /**
     * Set state
     *
     * @param integer $state
     *
     * @return GlpiProblemtasks
     */
    public function setState($state)
    {
        $this->state = $state;

        return $this;
    }

    /**
     * Get state
     *
     * @return integer
     */
    public function getState()
    {
        return $this->state;
    }

    /**
     * Set dateMod
     *
     * @param \DateTime $dateMod
     *
     * @return GlpiProblemtasks
     */
    public function setDateMod($dateMod)
    {
        $this->dateMod = $dateMod;

        return $this;
    }

    /**
     * Get dateMod
     *
     * @return \DateTime
     */
    public function getDateMod()
    {
        return $this->dateMod;
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
