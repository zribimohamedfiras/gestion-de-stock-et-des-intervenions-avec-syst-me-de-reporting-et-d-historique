<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * GlpiTicketvalidations
 *
 * @ORM\Table(name="glpi_ticketvalidations", indexes={@ORM\Index(name="entities_id", columns={"entities_id"}), @ORM\Index(name="users_id", columns={"users_id"}), @ORM\Index(name="users_id_validate", columns={"users_id_validate"}), @ORM\Index(name="tickets_id", columns={"tickets_id"}), @ORM\Index(name="submission_date", columns={"submission_date"}), @ORM\Index(name="validation_date", columns={"validation_date"}), @ORM\Index(name="status", columns={"status"})})
 * @ORM\Entity
 */
class GlpiTicketvalidations
{
    /**
     * @var integer
     *
     * @ORM\Column(name="entities_id", type="integer", nullable=false)
     */
    private $entitiesId = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="users_id", type="integer", nullable=false)
     */
    private $usersId = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="tickets_id", type="integer", nullable=false)
     */
    private $ticketsId = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="users_id_validate", type="integer", nullable=false)
     */
    private $usersIdValidate = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="comment_submission", type="text", length=65535, nullable=true)
     */
    private $commentSubmission;

    /**
     * @var string
     *
     * @ORM\Column(name="comment_validation", type="text", length=65535, nullable=true)
     */
    private $commentValidation;

    /**
     * @var integer
     *
     * @ORM\Column(name="status", type="integer", nullable=false)
     */
    private $status = '2';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="submission_date", type="datetime", nullable=true)
     */
    private $submissionDate;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="validation_date", type="datetime", nullable=true)
     */
    private $validationDate;

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;



    /**
     * Set entitiesId
     *
     * @param integer $entitiesId
     *
     * @return GlpiTicketvalidations
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
     * Set usersId
     *
     * @param integer $usersId
     *
     * @return GlpiTicketvalidations
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
     * Set ticketsId
     *
     * @param integer $ticketsId
     *
     * @return GlpiTicketvalidations
     */
    public function setTicketsId($ticketsId)
    {
        $this->ticketsId = $ticketsId;

        return $this;
    }

    /**
     * Get ticketsId
     *
     * @return integer
     */
    public function getTicketsId()
    {
        return $this->ticketsId;
    }

    /**
     * Set usersIdValidate
     *
     * @param integer $usersIdValidate
     *
     * @return GlpiTicketvalidations
     */
    public function setUsersIdValidate($usersIdValidate)
    {
        $this->usersIdValidate = $usersIdValidate;

        return $this;
    }

    /**
     * Get usersIdValidate
     *
     * @return integer
     */
    public function getUsersIdValidate()
    {
        return $this->usersIdValidate;
    }

    /**
     * Set commentSubmission
     *
     * @param string $commentSubmission
     *
     * @return GlpiTicketvalidations
     */
    public function setCommentSubmission($commentSubmission)
    {
        $this->commentSubmission = $commentSubmission;

        return $this;
    }

    /**
     * Get commentSubmission
     *
     * @return string
     */
    public function getCommentSubmission()
    {
        return $this->commentSubmission;
    }

    /**
     * Set commentValidation
     *
     * @param string $commentValidation
     *
     * @return GlpiTicketvalidations
     */
    public function setCommentValidation($commentValidation)
    {
        $this->commentValidation = $commentValidation;

        return $this;
    }

    /**
     * Get commentValidation
     *
     * @return string
     */
    public function getCommentValidation()
    {
        return $this->commentValidation;
    }

    /**
     * Set status
     *
     * @param integer $status
     *
     * @return GlpiTicketvalidations
     */
    public function setStatus($status)
    {
        $this->status = $status;

        return $this;
    }

    /**
     * Get status
     *
     * @return integer
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Set submissionDate
     *
     * @param \DateTime $submissionDate
     *
     * @return GlpiTicketvalidations
     */
    public function setSubmissionDate($submissionDate)
    {
        $this->submissionDate = $submissionDate;

        return $this;
    }

    /**
     * Get submissionDate
     *
     * @return \DateTime
     */
    public function getSubmissionDate()
    {
        return $this->submissionDate;
    }

    /**
     * Set validationDate
     *
     * @param \DateTime $validationDate
     *
     * @return GlpiTicketvalidations
     */
    public function setValidationDate($validationDate)
    {
        $this->validationDate = $validationDate;

        return $this;
    }

    /**
     * Get validationDate
     *
     * @return \DateTime
     */
    public function getValidationDate()
    {
        return $this->validationDate;
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
