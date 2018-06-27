<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * GlpiNotimportedemails
 *
 * @ORM\Table(name="glpi_notimportedemails", indexes={@ORM\Index(name="users_id", columns={"users_id"}), @ORM\Index(name="mailcollectors_id", columns={"mailcollectors_id"})})
 * @ORM\Entity
 */
class GlpiNotimportedemails
{
    /**
     * @var string
     *
     * @ORM\Column(name="from", type="string", length=255, nullable=false)
     */
    private $from;

    /**
     * @var string
     *
     * @ORM\Column(name="to", type="string", length=255, nullable=false)
     */
    private $to;

    /**
     * @var integer
     *
     * @ORM\Column(name="mailcollectors_id", type="integer", nullable=false)
     */
    private $mailcollectorsId = '0';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date", type="datetime", nullable=false)
     */
    private $date;

    /**
     * @var string
     *
     * @ORM\Column(name="subject", type="text", length=65535, nullable=true)
     */
    private $subject;

    /**
     * @var string
     *
     * @ORM\Column(name="messageid", type="string", length=255, nullable=false)
     */
    private $messageid;

    /**
     * @var integer
     *
     * @ORM\Column(name="reason", type="integer", nullable=false)
     */
    private $reason = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="users_id", type="integer", nullable=false)
     */
    private $usersId = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;



    /**
     * Set from
     *
     * @param string $from
     *
     * @return GlpiNotimportedemails
     */
    public function setFrom($from)
    {
        $this->from = $from;

        return $this;
    }

    /**
     * Get from
     *
     * @return string
     */
    public function getFrom()
    {
        return $this->from;
    }

    /**
     * Set to
     *
     * @param string $to
     *
     * @return GlpiNotimportedemails
     */
    public function setTo($to)
    {
        $this->to = $to;

        return $this;
    }

    /**
     * Get to
     *
     * @return string
     */
    public function getTo()
    {
        return $this->to;
    }

    /**
     * Set mailcollectorsId
     *
     * @param integer $mailcollectorsId
     *
     * @return GlpiNotimportedemails
     */
    public function setMailcollectorsId($mailcollectorsId)
    {
        $this->mailcollectorsId = $mailcollectorsId;

        return $this;
    }

    /**
     * Get mailcollectorsId
     *
     * @return integer
     */
    public function getMailcollectorsId()
    {
        return $this->mailcollectorsId;
    }

    /**
     * Set date
     *
     * @param \DateTime $date
     *
     * @return GlpiNotimportedemails
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
     * Set subject
     *
     * @param string $subject
     *
     * @return GlpiNotimportedemails
     */
    public function setSubject($subject)
    {
        $this->subject = $subject;

        return $this;
    }

    /**
     * Get subject
     *
     * @return string
     */
    public function getSubject()
    {
        return $this->subject;
    }

    /**
     * Set messageid
     *
     * @param string $messageid
     *
     * @return GlpiNotimportedemails
     */
    public function setMessageid($messageid)
    {
        $this->messageid = $messageid;

        return $this;
    }

    /**
     * Get messageid
     *
     * @return string
     */
    public function getMessageid()
    {
        return $this->messageid;
    }

    /**
     * Set reason
     *
     * @param integer $reason
     *
     * @return GlpiNotimportedemails
     */
    public function setReason($reason)
    {
        $this->reason = $reason;

        return $this;
    }

    /**
     * Get reason
     *
     * @return integer
     */
    public function getReason()
    {
        return $this->reason;
    }

    /**
     * Set usersId
     *
     * @param integer $usersId
     *
     * @return GlpiNotimportedemails
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
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }
}
