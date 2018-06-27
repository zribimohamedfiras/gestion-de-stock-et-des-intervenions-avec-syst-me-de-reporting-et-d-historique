<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * GlpiTicketrecurrents
 *
 * @ORM\Table(name="glpi_ticketrecurrents", indexes={@ORM\Index(name="entities_id", columns={"entities_id"}), @ORM\Index(name="is_recursive", columns={"is_recursive"}), @ORM\Index(name="is_active", columns={"is_active"}), @ORM\Index(name="tickettemplates_id", columns={"tickettemplates_id"}), @ORM\Index(name="next_creation_date", columns={"next_creation_date"})})
 * @ORM\Entity
 */
class GlpiTicketrecurrents
{
    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=255, nullable=true)
     */
    private $name;

    /**
     * @var string
     *
     * @ORM\Column(name="comment", type="text", length=65535, nullable=true)
     */
    private $comment;

    /**
     * @var integer
     *
     * @ORM\Column(name="entities_id", type="integer", nullable=false)
     */
    private $entitiesId = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="is_recursive", type="boolean", nullable=false)
     */
    private $isRecursive = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="is_active", type="boolean", nullable=false)
     */
    private $isActive = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="tickettemplates_id", type="integer", nullable=false)
     */
    private $tickettemplatesId = '0';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="begin_date", type="datetime", nullable=true)
     */
    private $beginDate;

    /**
     * @var string
     *
     * @ORM\Column(name="periodicity", type="string", length=255, nullable=true)
     */
    private $periodicity;

    /**
     * @var integer
     *
     * @ORM\Column(name="create_before", type="integer", nullable=false)
     */
    private $createBefore = '0';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="next_creation_date", type="datetime", nullable=true)
     */
    private $nextCreationDate;

    /**
     * @var integer
     *
     * @ORM\Column(name="calendars_id", type="integer", nullable=false)
     */
    private $calendarsId = '0';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="end_date", type="datetime", nullable=true)
     */
    private $endDate;

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;



    /**
     * Set name
     *
     * @param string $name
     *
     * @return GlpiTicketrecurrents
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set comment
     *
     * @param string $comment
     *
     * @return GlpiTicketrecurrents
     */
    public function setComment($comment)
    {
        $this->comment = $comment;

        return $this;
    }

    /**
     * Get comment
     *
     * @return string
     */
    public function getComment()
    {
        return $this->comment;
    }

    /**
     * Set entitiesId
     *
     * @param integer $entitiesId
     *
     * @return GlpiTicketrecurrents
     */
    public function setEntitiesId($entitiesId)
    {
        $this->entitiesId = $entitiesId;

        return $this;
    }

    /**
     * Get entitiesId
     *
     * @return integer
     */
    public function getEntitiesId()
    {
        return $this->entitiesId;
    }

    /**
     * Set isRecursive
     *
     * @param boolean $isRecursive
     *
     * @return GlpiTicketrecurrents
     */
    public function setIsRecursive($isRecursive)
    {
        $this->isRecursive = $isRecursive;

        return $this;
    }

    /**
     * Get isRecursive
     *
     * @return boolean
     */
    public function getIsRecursive()
    {
        return $this->isRecursive;
    }

    /**
     * Set isActive
     *
     * @param boolean $isActive
     *
     * @return GlpiTicketrecurrents
     */
    public function setIsActive($isActive)
    {
        $this->isActive = $isActive;

        return $this;
    }

    /**
     * Get isActive
     *
     * @return boolean
     */
    public function getIsActive()
    {
        return $this->isActive;
    }

    /**
     * Set tickettemplatesId
     *
     * @param integer $tickettemplatesId
     *
     * @return GlpiTicketrecurrents
     */
    public function setTickettemplatesId($tickettemplatesId)
    {
        $this->tickettemplatesId = $tickettemplatesId;

        return $this;
    }

    /**
     * Get tickettemplatesId
     *
     * @return integer
     */
    public function getTickettemplatesId()
    {
        return $this->tickettemplatesId;
    }

    /**
     * Set beginDate
     *
     * @param \DateTime $beginDate
     *
     * @return GlpiTicketrecurrents
     */
    public function setBeginDate($beginDate)
    {
        $this->beginDate = $beginDate;

        return $this;
    }

    /**
     * Get beginDate
     *
     * @return \DateTime
     */
    public function getBeginDate()
    {
        return $this->beginDate;
    }

    /**
     * Set periodicity
     *
     * @param string $periodicity
     *
     * @return GlpiTicketrecurrents
     */
    public function setPeriodicity($periodicity)
    {
        $this->periodicity = $periodicity;

        return $this;
    }

    /**
     * Get periodicity
     *
     * @return string
     */
    public function getPeriodicity()
    {
        return $this->periodicity;
    }

    /**
     * Set createBefore
     *
     * @param integer $createBefore
     *
     * @return GlpiTicketrecurrents
     */
    public function setCreateBefore($createBefore)
    {
        $this->createBefore = $createBefore;

        return $this;
    }

    /**
     * Get createBefore
     *
     * @return integer
     */
    public function getCreateBefore()
    {
        return $this->createBefore;
    }

    /**
     * Set nextCreationDate
     *
     * @param \DateTime $nextCreationDate
     *
     * @return GlpiTicketrecurrents
     */
    public function setNextCreationDate($nextCreationDate)
    {
        $this->nextCreationDate = $nextCreationDate;

        return $this;
    }

    /**
     * Get nextCreationDate
     *
     * @return \DateTime
     */
    public function getNextCreationDate()
    {
        return $this->nextCreationDate;
    }

    /**
     * Set calendarsId
     *
     * @param integer $calendarsId
     *
     * @return GlpiTicketrecurrents
     */
    public function setCalendarsId($calendarsId)
    {
        $this->calendarsId = $calendarsId;

        return $this;
    }

    /**
     * Get calendarsId
     *
     * @return integer
     */
    public function getCalendarsId()
    {
        return $this->calendarsId;
    }

    /**
     * Set endDate
     *
     * @param \DateTime $endDate
     *
     * @return GlpiTicketrecurrents
     */
    public function setEndDate($endDate)
    {
        $this->endDate = $endDate;

        return $this;
    }

    /**
     * Get endDate
     *
     * @return \DateTime
     */
    public function getEndDate()
    {
        return $this->endDate;
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
