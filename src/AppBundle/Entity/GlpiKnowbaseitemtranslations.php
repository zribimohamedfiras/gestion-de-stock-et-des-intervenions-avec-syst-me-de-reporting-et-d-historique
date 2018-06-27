<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * GlpiKnowbaseitemtranslations
 *
 * @ORM\Table(name="glpi_knowbaseitemtranslations", indexes={@ORM\Index(name="item", columns={"knowbaseitems_id", "language"}), @ORM\Index(name="fulltext", columns={"name", "answer"})})
 * @ORM\Entity
 */
class GlpiKnowbaseitemtranslations
{
    /**
     * @var integer
     *
     * @ORM\Column(name="knowbaseitems_id", type="integer", nullable=false)
     */
    private $knowbaseitemsId = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="language", type="string", length=5, nullable=true)
     */
    private $language;

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
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;



    /**
     * Set knowbaseitemsId
     *
     * @param integer $knowbaseitemsId
     *
     * @return GlpiKnowbaseitemtranslations
     */
    public function setKnowbaseitemsId($knowbaseitemsId)
    {
        $this->knowbaseitemsId = $knowbaseitemsId;

        return $this;
    }

    /**
     * Get knowbaseitemsId
     *
     * @return integer
     */
    public function getKnowbaseitemsId()
    {
        return $this->knowbaseitemsId;
    }

    /**
     * Set language
     *
     * @param string $language
     *
     * @return GlpiKnowbaseitemtranslations
     */
    public function setLanguage($language)
    {
        $this->language = $language;

        return $this;
    }

    /**
     * Get language
     *
     * @return string
     */
    public function getLanguage()
    {
        return $this->language;
    }

    /**
     * Set name
     *
     * @param string $name
     *
     * @return GlpiKnowbaseitemtranslations
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
     * @return GlpiKnowbaseitemtranslations
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
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }
}
