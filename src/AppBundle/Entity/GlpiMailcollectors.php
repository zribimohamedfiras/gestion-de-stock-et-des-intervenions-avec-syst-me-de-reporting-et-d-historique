<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * GlpiMailcollectors
 *
 * @ORM\Table(name="glpi_mailcollectors", indexes={@ORM\Index(name="is_active", columns={"is_active"}), @ORM\Index(name="date_mod", columns={"date_mod"}), @ORM\Index(name="date_creation", columns={"date_creation"})})
 * @ORM\Entity
 */
class GlpiMailcollectors
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
     * @ORM\Column(name="host", type="string", length=255, nullable=true)
     */
    private $host;

    /**
     * @var string
     *
     * @ORM\Column(name="login", type="string", length=255, nullable=true)
     */
    private $login;

    /**
     * @var integer
     *
     * @ORM\Column(name="filesize_max", type="integer", nullable=false)
     */
    private $filesizeMax = '2097152';

    /**
     * @var boolean
     *
     * @ORM\Column(name="is_active", type="boolean", nullable=false)
     */
    private $isActive = '1';

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
     * @ORM\Column(name="passwd", type="string", length=255, nullable=true)
     */
    private $passwd;

    /**
     * @var string
     *
     * @ORM\Column(name="accepted", type="string", length=255, nullable=true)
     */
    private $accepted;

    /**
     * @var string
     *
     * @ORM\Column(name="refused", type="string", length=255, nullable=true)
     */
    private $refused;

    /**
     * @var boolean
     *
     * @ORM\Column(name="use_kerberos", type="boolean", nullable=false)
     */
    private $useKerberos = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="errors", type="integer", nullable=false)
     */
    private $errors = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="use_mail_date", type="boolean", nullable=false)
     */
    private $useMailDate = '0';

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
     * @return GlpiMailcollectors
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
     * Set host
     *
     * @param string $host
     *
     * @return GlpiMailcollectors
     */
    public function setHost($host)
    {
        $this->host = $host;

        return $this;
    }

    /**
     * Get host
     *
     * @return string
     */
    public function getHost()
    {
        return $this->host;
    }

    /**
     * Set login
     *
     * @param string $login
     *
     * @return GlpiMailcollectors
     */
    public function setLogin($login)
    {
        $this->login = $login;

        return $this;
    }

    /**
     * Get login
     *
     * @return string
     */
    public function getLogin()
    {
        return $this->login;
    }

    /**
     * Set filesizeMax
     *
     * @param integer $filesizeMax
     *
     * @return GlpiMailcollectors
     */
    public function setFilesizeMax($filesizeMax)
    {
        $this->filesizeMax = $filesizeMax;

        return $this;
    }

    /**
     * Get filesizeMax
     *
     * @return integer
     */
    public function getFilesizeMax()
    {
        return $this->filesizeMax;
    }

    /**
     * Set isActive
     *
     * @param boolean $isActive
     *
     * @return GlpiMailcollectors
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
     * Set dateMod
     *
     * @param \DateTime $dateMod
     *
     * @return GlpiMailcollectors
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
     * @return GlpiMailcollectors
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
     * Set passwd
     *
     * @param string $passwd
     *
     * @return GlpiMailcollectors
     */
    public function setPasswd($passwd)
    {
        $this->passwd = $passwd;

        return $this;
    }

    /**
     * Get passwd
     *
     * @return string
     */
    public function getPasswd()
    {
        return $this->passwd;
    }

    /**
     * Set accepted
     *
     * @param string $accepted
     *
     * @return GlpiMailcollectors
     */
    public function setAccepted($accepted)
    {
        $this->accepted = $accepted;

        return $this;
    }

    /**
     * Get accepted
     *
     * @return string
     */
    public function getAccepted()
    {
        return $this->accepted;
    }

    /**
     * Set refused
     *
     * @param string $refused
     *
     * @return GlpiMailcollectors
     */
    public function setRefused($refused)
    {
        $this->refused = $refused;

        return $this;
    }

    /**
     * Get refused
     *
     * @return string
     */
    public function getRefused()
    {
        return $this->refused;
    }

    /**
     * Set useKerberos
     *
     * @param boolean $useKerberos
     *
     * @return GlpiMailcollectors
     */
    public function setUseKerberos($useKerberos)
    {
        $this->useKerberos = $useKerberos;

        return $this;
    }

    /**
     * Get useKerberos
     *
     * @return boolean
     */
    public function getUseKerberos()
    {
        return $this->useKerberos;
    }

    /**
     * Set errors
     *
     * @param integer $errors
     *
     * @return GlpiMailcollectors
     */
    public function setErrors($errors)
    {
        $this->errors = $errors;

        return $this;
    }

    /**
     * Get errors
     *
     * @return integer
     */
    public function getErrors()
    {
        return $this->errors;
    }

    /**
     * Set useMailDate
     *
     * @param boolean $useMailDate
     *
     * @return GlpiMailcollectors
     */
    public function setUseMailDate($useMailDate)
    {
        $this->useMailDate = $useMailDate;

        return $this;
    }

    /**
     * Get useMailDate
     *
     * @return boolean
     */
    public function getUseMailDate()
    {
        return $this->useMailDate;
    }

    /**
     * Set dateCreation
     *
     * @param \DateTime $dateCreation
     *
     * @return GlpiMailcollectors
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
