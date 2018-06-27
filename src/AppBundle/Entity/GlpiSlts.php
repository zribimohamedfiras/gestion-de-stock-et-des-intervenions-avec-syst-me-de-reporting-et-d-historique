<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * GlpiSlts
 *
 * @ORM\Table(name="glpi_slts", indexes={@ORM\Index(name="name", columns={"name"}), @ORM\Index(name="date_mod", columns={"date_mod"}), @ORM\Index(name="date_creation", columns={"date_creation"}), @ORM\Index(name="slas_id", columns={"slas_id"})})
 * @ORM\Entity
 */
class GlpiSlts
{
    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=255, nullable=true)
     */
    private $name;

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
     * @var integer
     *
     * @ORM\Column(name="type", type="integer", nullable=false)
     */
    private $type = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="comment", type="text", length=65535, nullable=true)
     */
    private $comment;

    /**
     * @var integer
     *
     * @ORM\Column(name="number_time", type="integer", nullable=false)
     */
    private $numberTime;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_mod", type="datetime", nullable=true)
     */
    private $dateMod;

    /**
     * @var string
     *
     * @ORM\Column(name="definition_time", type="string", length=255, nullable=true)
     */
    private $definitionTime;

    /**
     * @var boolean
     *
     * @ORM\Column(name="end_of_working_day", type="boolean", nullable=false)
     */
    private $endOfWorkingDay = '0';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_creation", type="datetime", nullable=true)
     */
    private $dateCreation;

    /**
     * @var integer
     *
     * @ORM\Column(name="slas_id", type="integer", nullable=false)
     */
    private $slasId = '0';

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
     * @return GlpiSlts
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
     * Set entitiesId
     *
     * @param integer $entitiesId
     *
     * @return GlpiSlts
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
     * @return GlpiSlts
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
     * Set type
     *
     * @param integer $type
     *
     * @return GlpiSlts
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
     * Set comment
     *
     * @param string $comment
     *
     * @return GlpiSlts
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
     * Set numberTime
     *
     * @param integer $numberTime
     *
     * @return GlpiSlts
     */
    public function setNumberTime($numberTime)
    {
        $this->numberTime = $numberTime;

        return $this;
    }

    /**
     * Get numberTime
     *
     * @return integer
     */
    public function getNumberTime()
    {
        return $this->numberTime;
    }

    /**
     * Set dateMod
     *
     * @param \DateTime $dateMod
     *
     * @return GlpiSlts
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
     * Set definitionTime
     *
     * @param string $definitionTime
     *
     * @return GlpiSlts
     */
    public function setDefinitionTime($definitionTime)
    {
        $this->definitionTime = $definitionTime;

        return $this;
    }

    /**
     * Get definitionTime
     *
     * @return string
     */
    public function getDefinitionTime()
    {
        return $this->definitionTime;
    }

    /**
     * Set endOfWorkingDay
     *
     * @param boolean $endOfWorkingDay
     *
     * @return GlpiSlts
     */
    public function setEndOfWorkingDay($endOfWorkingDay)
    {
        $this->endOfWorkingDay = $endOfWorkingDay;

        return $this;
    }

    /**
     * Get endOfWorkingDay
     *
     * @return boolean
     */
    public function getEndOfWorkingDay()
    {
        return $this->endOfWorkingDay;
    }

    /**
     * Set dateCreation
     *
     * @param \DateTime $dateCreation
     *
     * @return GlpiSlts
     */
    public function setDateCreation($dateCreation)
    {
        $this->dateCreation = $dateCreation;

        return $this;
    }

    /**
     * Get dateCreation
     *
     * @return \DateTime
     */
    public function getDateCreation()
    {
        return $this->dateCreation;
    }

    /**
     * Set slasId
     *
     * @param integer $slasId
     *
     * @return GlpiSlts
     */
    public function setSlasId($slasId)
    {
        $this->slasId = $slasId;

        return $this;
    }

    /**
     * Get slasId
     *
     * @return integer
     */
    public function getSlasId()
    {
        return $this->slasId;
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
