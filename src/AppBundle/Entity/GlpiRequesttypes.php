<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * GlpiRequesttypes
 *
 * @ORM\Table(name="glpi_requesttypes", indexes={@ORM\Index(name="name", columns={"name"}), @ORM\Index(name="is_helpdesk_default", columns={"is_helpdesk_default"}), @ORM\Index(name="is_followup_default", columns={"is_followup_default"}), @ORM\Index(name="is_mail_default", columns={"is_mail_default"}), @ORM\Index(name="is_mailfollowup_default", columns={"is_mailfollowup_default"}), @ORM\Index(name="date_mod", columns={"date_mod"}), @ORM\Index(name="date_creation", columns={"date_creation"}), @ORM\Index(name="is_active", columns={"is_active"}), @ORM\Index(name="is_ticketheader", columns={"is_ticketheader"}), @ORM\Index(name="is_ticketfollowup", columns={"is_ticketfollowup"})})
 * @ORM\Entity
 */
class GlpiRequesttypes
{
    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=255, nullable=true)
     */
    private $name;

    /**
     * @var boolean
     *
     * @ORM\Column(name="is_helpdesk_default", type="boolean", nullable=false)
     */
    private $isHelpdeskDefault = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="is_followup_default", type="boolean", nullable=false)
     */
    private $isFollowupDefault = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="is_mail_default", type="boolean", nullable=false)
     */
    private $isMailDefault = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="is_mailfollowup_default", type="boolean", nullable=false)
     */
    private $isMailfollowupDefault = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="is_active", type="boolean", nullable=false)
     */
    private $isActive = '1';

    /**
     * @var boolean
     *
     * @ORM\Column(name="is_ticketheader", type="boolean", nullable=false)
     */
    private $isTicketheader = '1';

    /**
     * @var boolean
     *
     * @ORM\Column(name="is_ticketfollowup", type="boolean", nullable=false)
     */
    private $isTicketfollowup = '1';

    /**
     * @var string
     *
     * @ORM\Column(name="comment", type="text", length=65535, nullable=true)
     */
    private $comment;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_mod", type="datetime", nullable=true)
     */
    private $dateMod;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_creation", type="datetime", nullable=true)
     */
    private $dateCreation;

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
     * @return GlpiRequesttypes
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
     * Set isHelpdeskDefault
     *
     * @param boolean $isHelpdeskDefault
     *
     * @return GlpiRequesttypes
     */
    public function setIsHelpdeskDefault($isHelpdeskDefault)
    {
        $this->isHelpdeskDefault = $isHelpdeskDefault;

        return $this;
    }

    /**
     * Get isHelpdeskDefault
     *
     * @return boolean
     */
    public function getIsHelpdeskDefault()
    {
        return $this->isHelpdeskDefault;
    }

    /**
     * Set isFollowupDefault
     *
     * @param boolean $isFollowupDefault
     *
     * @return GlpiRequesttypes
     */
    public function setIsFollowupDefault($isFollowupDefault)
    {
        $this->isFollowupDefault = $isFollowupDefault;

        return $this;
    }

    /**
     * Get isFollowupDefault
     *
     * @return boolean
     */
    public function getIsFollowupDefault()
    {
        return $this->isFollowupDefault;
    }

    /**
     * Set isMailDefault
     *
     * @param boolean $isMailDefault
     *
     * @return GlpiRequesttypes
     */
    public function setIsMailDefault($isMailDefault)
    {
        $this->isMailDefault = $isMailDefault;

        return $this;
    }

    /**
     * Get isMailDefault
     *
     * @return boolean
     */
    public function getIsMailDefault()
    {
        return $this->isMailDefault;
    }

    /**
     * Set isMailfollowupDefault
     *
     * @param boolean $isMailfollowupDefault
     *
     * @return GlpiRequesttypes
     */
    public function setIsMailfollowupDefault($isMailfollowupDefault)
    {
        $this->isMailfollowupDefault = $isMailfollowupDefault;

        return $this;
    }

    /**
     * Get isMailfollowupDefault
     *
     * @return boolean
     */
    public function getIsMailfollowupDefault()
    {
        return $this->isMailfollowupDefault;
    }

    /**
     * Set isActive
     *
     * @param boolean $isActive
     *
     * @return GlpiRequesttypes
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
     * Set isTicketheader
     *
     * @param boolean $isTicketheader
     *
     * @return GlpiRequesttypes
     */
    public function setIsTicketheader($isTicketheader)
    {
        $this->isTicketheader = $isTicketheader;

        return $this;
    }

    /**
     * Get isTicketheader
     *
     * @return boolean
     */
    public function getIsTicketheader()
    {
        return $this->isTicketheader;
    }

    /**
     * Set isTicketfollowup
     *
     * @param boolean $isTicketfollowup
     *
     * @return GlpiRequesttypes
     */
    public function setIsTicketfollowup($isTicketfollowup)
    {
        $this->isTicketfollowup = $isTicketfollowup;

        return $this;
    }

    /**
     * Get isTicketfollowup
     *
     * @return boolean
     */
    public function getIsTicketfollowup()
    {
        return $this->isTicketfollowup;
    }

    /**
     * Set comment
     *
     * @param string $comment
     *
     * @return GlpiRequesttypes
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
     * Set dateMod
     *
     * @param \DateTime $dateMod
     *
     * @return GlpiRequesttypes
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
     * Set dateCreation
     *
     * @param \DateTime $dateCreation
     *
     * @return GlpiRequesttypes
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
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }
}
