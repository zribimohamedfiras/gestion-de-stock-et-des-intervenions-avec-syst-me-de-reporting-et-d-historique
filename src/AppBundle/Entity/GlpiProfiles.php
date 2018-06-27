<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * GlpiProfiles
 *
 * @ORM\Table(name="glpi_profiles", indexes={@ORM\Index(name="interface", columns={"interface"}), @ORM\Index(name="is_default", columns={"is_default"}), @ORM\Index(name="date_mod", columns={"date_mod"}), @ORM\Index(name="date_creation", columns={"date_creation"})})
 * @ORM\Entity
 */
class GlpiProfiles
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
     * @ORM\Column(name="interface", type="string", length=255, nullable=true)
     */
    private $interface = 'helpdesk';

    /**
     * @var boolean
     *
     * @ORM\Column(name="is_default", type="boolean", nullable=false)
     */
    private $isDefault = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="helpdesk_hardware", type="integer", nullable=false)
     */
    private $helpdeskHardware = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="helpdesk_item_type", type="text", length=65535, nullable=true)
     */
    private $helpdeskItemType;

    /**
     * @var string
     *
     * @ORM\Column(name="ticket_status", type="text", length=65535, nullable=true)
     */
    private $ticketStatus;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_mod", type="datetime", nullable=true)
     */
    private $dateMod;

    /**
     * @var string
     *
     * @ORM\Column(name="comment", type="text", length=65535, nullable=true)
     */
    private $comment;

    /**
     * @var string
     *
     * @ORM\Column(name="problem_status", type="text", length=65535, nullable=true)
     */
    private $problemStatus;

    /**
     * @var boolean
     *
     * @ORM\Column(name="create_ticket_on_login", type="boolean", nullable=false)
     */
    private $createTicketOnLogin = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="tickettemplates_id", type="integer", nullable=false)
     */
    private $tickettemplatesId = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="change_status", type="text", length=65535, nullable=true)
     */
    private $changeStatus;

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
     * @return GlpiProfiles
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
     * Set interface
     *
     * @param string $interface
     *
     * @return GlpiProfiles
     */
    public function setInterface($interface)
    {
        $this->interface = $interface;

        return $this;
    }

    /**
     * Get interface
     *
     * @return string
     */
    public function getInterface()
    {
        return $this->interface;
    }

    /**
     * Set isDefault
     *
     * @param boolean $isDefault
     *
     * @return GlpiProfiles
     */
    public function setIsDefault($isDefault)
    {
        $this->isDefault = $isDefault;

        return $this;
    }

    /**
     * Get isDefault
     *
     * @return boolean
     */
    public function getIsDefault()
    {
        return $this->isDefault;
    }

    /**
     * Set helpdeskHardware
     *
     * @param integer $helpdeskHardware
     *
     * @return GlpiProfiles
     */
    public function setHelpdeskHardware($helpdeskHardware)
    {
        $this->helpdeskHardware = $helpdeskHardware;

        return $this;
    }

    /**
     * Get helpdeskHardware
     *
     * @return integer
     */
    public function getHelpdeskHardware()
    {
        return $this->helpdeskHardware;
    }

    /**
     * Set helpdeskItemType
     *
     * @param string $helpdeskItemType
     *
     * @return GlpiProfiles
     */
    public function setHelpdeskItemType($helpdeskItemType)
    {
        $this->helpdeskItemType = $helpdeskItemType;

        return $this;
    }

    /**
     * Get helpdeskItemType
     *
     * @return string
     */
    public function getHelpdeskItemType()
    {
        return $this->helpdeskItemType;
    }

    /**
     * Set ticketStatus
     *
     * @param string $ticketStatus
     *
     * @return GlpiProfiles
     */
    public function setTicketStatus($ticketStatus)
    {
        $this->ticketStatus = $ticketStatus;

        return $this;
    }

    /**
     * Get ticketStatus
     *
     * @return string
     */
    public function getTicketStatus()
    {
        return $this->ticketStatus;
    }

    /**
     * Set dateMod
     *
     * @param \DateTime $dateMod
     *
     * @return GlpiProfiles
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
     * Set comment
     *
     * @param string $comment
     *
     * @return GlpiProfiles
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
     * Set problemStatus
     *
     * @param string $problemStatus
     *
     * @return GlpiProfiles
     */
    public function setProblemStatus($problemStatus)
    {
        $this->problemStatus = $problemStatus;

        return $this;
    }

    /**
     * Get problemStatus
     *
     * @return string
     */
    public function getProblemStatus()
    {
        return $this->problemStatus;
    }

    /**
     * Set createTicketOnLogin
     *
     * @param boolean $createTicketOnLogin
     *
     * @return GlpiProfiles
     */
    public function setCreateTicketOnLogin($createTicketOnLogin)
    {
        $this->createTicketOnLogin = $createTicketOnLogin;

        return $this;
    }

    /**
     * Get createTicketOnLogin
     *
     * @return boolean
     */
    public function getCreateTicketOnLogin()
    {
        return $this->createTicketOnLogin;
    }

    /**
     * Set tickettemplatesId
     *
     * @param integer $tickettemplatesId
     *
     * @return GlpiProfiles
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
     * Set changeStatus
     *
     * @param string $changeStatus
     *
     * @return GlpiProfiles
     */
    public function setChangeStatus($changeStatus)
    {
        $this->changeStatus = $changeStatus;

        return $this;
    }

    /**
     * Get changeStatus
     *
     * @return string
     */
    public function getChangeStatus()
    {
        return $this->changeStatus;
    }

    /**
     * Set dateCreation
     *
     * @param \DateTime $dateCreation
     *
     * @return GlpiProfiles
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
