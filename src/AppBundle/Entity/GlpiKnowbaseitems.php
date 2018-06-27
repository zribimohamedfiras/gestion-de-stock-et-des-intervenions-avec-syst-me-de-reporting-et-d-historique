<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * GlpiKnowbaseitems
 *
 * @ORM\Table(name="glpi_knowbaseitems", indexes={@ORM\Index(name="users_id", columns={"users_id"}), @ORM\Index(name="knowbaseitemcategories_id", columns={"knowbaseitemcategories_id"}), @ORM\Index(name="is_faq", columns={"is_faq"}), @ORM\Index(name="date_mod", columns={"date_mod"}), @ORM\Index(name="fulltext", columns={"name", "answer"})})
 * @ORM\Entity
 */
class GlpiKnowbaseitems
{
    /**
     * @var integer
     *
     * @ORM\Column(name="knowbaseitemcategories_id", type="integer", nullable=false)
     */
    private $knowbaseitemcategoriesId = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="text", length=65535, nullable=true)
     */
    private $name;

    /**
     * @var string
     *
     * @ORM\Column(name="answer", type="text", nullable=true)
     */
    private $answer;

    /**
     * @var boolean
     *
     * @ORM\Column(name="is_faq", type="boolean", nullable=false)
     */
    private $isFaq = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="users_id", type="integer", nullable=false)
     */
    private $usersId = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="view", type="integer", nullable=false)
     */
    private $view = '0';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date", type="datetime", nullable=true)
     */
    private $date;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_mod", type="datetime", nullable=true)
     */
    private $dateMod;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="begin_date", type="datetime", nullable=true)
     */
    private $beginDate;

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
     * Set knowbaseitemcategoriesId
     *
     * @param integer $knowbaseitemcategoriesId
     *
     * @return GlpiKnowbaseitems
     */
    public function setKnowbaseitemcategoriesId($knowbaseitemcategoriesId)
    {
        $this->knowbaseitemcategoriesId = $knowbaseitemcategoriesId;

        return $this;
    }

    /**
     * Get knowbaseitemcategoriesId
     *
     * @return integer
     */
    public function getKnowbaseitemcategoriesId()
    {
        return $this->knowbaseitemcategoriesId;
    }

    /**
     * Set name
     *
     * @param string $name
     *
     * @return GlpiKnowbaseitems
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
     * Set answer
     *
     * @param string $answer
     *
     * @return GlpiKnowbaseitems
     */
    public function setAnswer($answer)
    {
        $this->answer = $answer;

        return $this;
    }

    /**
     * Get answer
     *
     * @return string
     */
    public function getAnswer()
    {
        return $this->answer;
    }

    /**
     * Set isFaq
     *
     * @param boolean $isFaq
     *
     * @return GlpiKnowbaseitems
     */
    public function setIsFaq($isFaq)
    {
        $this->isFaq = $isFaq;

        return $this;
    }

    /**
     * Get isFaq
     *
     * @return boolean
     */
    public function getIsFaq()
    {
        return $this->isFaq;
    }

    /**
     * Set usersId
     *
     * @param integer $usersId
     *
     * @return GlpiKnowbaseitems
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
     * Set view
     *
     * @param integer $view
     *
     * @return GlpiKnowbaseitems
     */
    public function setView($view)
    {
        $this->view = $view;

        return $this;
    }

    /**
     * Get view
     *
     * @return integer
     */
    public function getView()
    {
        return $this->view;
    }

    /**
     * Set date
     *
     * @param \DateTime $date
     *
     * @return GlpiKnowbaseitems
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
     * Set dateMod
     *
     * @param \DateTime $dateMod
     *
     * @return GlpiKnowbaseitems
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
     * Set beginDate
     *
     * @param \DateTime $beginDate
     *
     * @return GlpiKnowbaseitems
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
     * Set endDate
     *
     * @param \DateTime $endDate
     *
     * @return GlpiKnowbaseitems
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
