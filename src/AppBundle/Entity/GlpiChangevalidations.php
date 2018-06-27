<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * GlpiChangevalidations
 *
 * @ORM\Table(name="glpi_changevalidations", indexes={@ORM\Index(name="entities_id", columns={"entities_id"}), @ORM\Index(name="is_recursive", columns={"is_recursive"}), @ORM\Index(name="users_id", columns={"users_id"}), @ORM\Index(name="users_id_validate", columns={"users_id_validate"}), @ORM\Index(name="changes_id", columns={"changes_id"}), @ORM\Index(name="submission_date", columns={"submission_date"}), @ORM\Index(name="validation_date", columns={"validation_date"}), @ORM\Index(name="status", columns={"status"})})
 * @ORM\Entity
 */
class GlpiChangevalidations
{
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
     * @ORM\Column(name="users_id", type="integer", nullable=false)
     */
    private $usersId = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="changes_id", type="integer", nullable=false)
     */
    private $changesId = '0';

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
     * @return GlpiChangevalidations
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
     * @return GlpiChangevalidations
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
     * Set usersId
     *
     * @param integer $usersId
     *
     * @return GlpiChangevalidations
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
     * Set changesId
     *
     * @param integer $changesId
     *
     * @return GlpiChangevalidations
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
     * Set usersIdValidate
     *
     * @param integer $usersIdValidate
     *
     * @return GlpiChangevalidations
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
     * @return GlpiChangevalidations
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
     * @return GlpiChangevalidations
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
     * @return GlpiChangevalidations
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
     * @return GlpiChangevalidations
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
     * @return GlpiChangevalidations
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
