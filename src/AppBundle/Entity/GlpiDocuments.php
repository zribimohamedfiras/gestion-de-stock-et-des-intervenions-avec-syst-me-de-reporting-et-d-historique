<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * GlpiDocuments
 *
 * @ORM\Table(name="glpi_documents", indexes={@ORM\Index(name="date_mod", columns={"date_mod"}), @ORM\Index(name="name", columns={"name"}), @ORM\Index(name="entities_id", columns={"entities_id"}), @ORM\Index(name="tickets_id", columns={"tickets_id"}), @ORM\Index(name="users_id", columns={"users_id"}), @ORM\Index(name="documentcategories_id", columns={"documentcategories_id"}), @ORM\Index(name="is_deleted", columns={"is_deleted"}), @ORM\Index(name="sha1sum", columns={"sha1sum"}), @ORM\Index(name="tag", columns={"tag"}), @ORM\Index(name="date_creation", columns={"date_creation"})})
 * @ORM\Entity
 */
class GlpiDocuments
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
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=255, nullable=true)
     */
    private $name;

    /**
     * @var string
     *
     * @ORM\Column(name="filename", type="string", length=255, nullable=true)
     */
    private $filename;

    /**
     * @var string
     *
     * @ORM\Column(name="filepath", type="string", length=255, nullable=true)
     */
    private $filepath;

    /**
     * @var integer
     *
     * @ORM\Column(name="documentcategories_id", type="integer", nullable=false)
     */
    private $documentcategoriesId = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="mime", type="string", length=255, nullable=true)
     */
    private $mime;

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
     * @var boolean
     *
     * @ORM\Column(name="is_deleted", type="boolean", nullable=false)
     */
    private $isDeleted = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="link", type="string", length=255, nullable=true)
     */
    private $link;

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
     * @var string
     *
     * @ORM\Column(name="sha1sum", type="string", length=40, nullable=true)
     */
    private $sha1sum;

    /**
     * @var boolean
     *
     * @ORM\Column(name="is_blacklisted", type="boolean", nullable=false)
     */
    private $isBlacklisted = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="tag", type="string", length=255, nullable=true)
     */
    private $tag;

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
     * Set entitiesId
     *
     * @param integer $entitiesId
     *
     * @return GlpiDocuments
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
     * @return GlpiDocuments
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
     * Set name
     *
     * @param string $name
     *
     * @return GlpiDocuments
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
     * Set filename
     *
     * @param string $filename
     *
     * @return GlpiDocuments
     */
    public function setFilename($filename)
    {
        $this->filename = $filename;

        return $this;
    }

    /**
     * Get filename
     *
     * @return string
     */
    public function getFilename()
    {
        return $this->filename;
    }

    /**
     * Set filepath
     *
     * @param string $filepath
     *
     * @return GlpiDocuments
     */
    public function setFilepath($filepath)
    {
        $this->filepath = $filepath;

        return $this;
    }

    /**
     * Get filepath
     *
     * @return string
     */
    public function getFilepath()
    {
        return $this->filepath;
    }

    /**
     * Set documentcategoriesId
     *
     * @param integer $documentcategoriesId
     *
     * @return GlpiDocuments
     */
    public function setDocumentcategoriesId($documentcategoriesId)
    {
        $this->documentcategoriesId = $documentcategoriesId;

        return $this;
    }

    /**
     * Get documentcategoriesId
     *
     * @return integer
     */
    public function getDocumentcategoriesId()
    {
        return $this->documentcategoriesId;
    }

    /**
     * Set mime
     *
     * @param string $mime
     *
     * @return GlpiDocuments
     */
    public function setMime($mime)
    {
        $this->mime = $mime;

        return $this;
    }

    /**
     * Get mime
     *
     * @return string
     */
    public function getMime()
    {
        return $this->mime;
    }

    /**
     * Set dateMod
     *
     * @param \DateTime $dateMod
     *
     * @return GlpiDocuments
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
     * @return GlpiDocuments
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
     * Set isDeleted
     *
     * @param boolean $isDeleted
     *
     * @return GlpiDocuments
     */
    public function setIsDeleted($isDeleted)
    {
        $this->isDeleted = $isDeleted;

        return $this;
    }

    /**
     * Get isDeleted
     *
     * @return boolean
     */
    public function getIsDeleted()
    {
        return $this->isDeleted;
    }

    /**
     * Set link
     *
     * @param string $link
     *
     * @return GlpiDocuments
     */
    public function setLink($link)
    {
        $this->link = $link;

        return $this;
    }

    /**
     * Get link
     *
     * @return string
     */
    public function getLink()
    {
        return $this->link;
    }

    /**
     * Set usersId
     *
     * @param integer $usersId
     *
     * @return GlpiDocuments
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
     * @return GlpiDocuments
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
     * Set sha1sum
     *
     * @param string $sha1sum
     *
     * @return GlpiDocuments
     */
    public function setSha1sum($sha1sum)
    {
        $this->sha1sum = $sha1sum;

        return $this;
    }

    /**
     * Get sha1sum
     *
     * @return string
     */
    public function getSha1sum()
    {
        return $this->sha1sum;
    }

    /**
     * Set isBlacklisted
     *
     * @param boolean $isBlacklisted
     *
     * @return GlpiDocuments
     */
    public function setIsBlacklisted($isBlacklisted)
    {
        $this->isBlacklisted = $isBlacklisted;

        return $this;
    }

    /**
     * Get isBlacklisted
     *
     * @return boolean
     */
    public function getIsBlacklisted()
    {
        return $this->isBlacklisted;
    }

    /**
     * Set tag
     *
     * @param string $tag
     *
     * @return GlpiDocuments
     */
    public function setTag($tag)
    {
        $this->tag = $tag;

        return $this;
    }

    /**
     * Get tag
     *
     * @return string
     */
    public function getTag()
    {
        return $this->tag;
    }

    /**
     * Set dateCreation
     *
     * @param \DateTime $dateCreation
     *
     * @return GlpiDocuments
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
