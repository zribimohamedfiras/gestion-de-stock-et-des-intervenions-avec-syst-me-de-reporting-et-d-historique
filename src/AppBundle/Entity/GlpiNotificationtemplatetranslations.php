<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * GlpiNotificationtemplatetranslations
 *
 * @ORM\Table(name="glpi_notificationtemplatetranslations", indexes={@ORM\Index(name="notificationtemplates_id", columns={"notificationtemplates_id"})})
 * @ORM\Entity
 */
class GlpiNotificationtemplatetranslations
{
    /**
     * @var integer
     *
     * @ORM\Column(name="notificationtemplates_id", type="integer", nullable=false)
     */
    private $notificationtemplatesId = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="language", type="string", length=5, nullable=false)
     */
    private $language = '';

    /**
     * @var string
     *
     * @ORM\Column(name="subject", type="string", length=255, nullable=false)
     */
    private $subject;

    /**
     * @var string
     *
     * @ORM\Column(name="content_text", type="text", length=65535, nullable=true)
     */
    private $contentText;

    /**
     * @var string
     *
     * @ORM\Column(name="content_html", type="text", length=65535, nullable=true)
     */
    private $contentHtml;

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;



    /**
     * Set notificationtemplatesId
     *
     * @param integer $notificationtemplatesId
     *
     * @return GlpiNotificationtemplatetranslations
     */
    public function setNotificationtemplatesId($notificationtemplatesId)
    {
        $this->notificationtemplatesId = $notificationtemplatesId;

        return $this;
    }

    /**
     * Get notificationtemplatesId
     *
     * @return integer
     */
    public function getNotificationtemplatesId()
    {
        return $this->notificationtemplatesId;
    }

    /**
     * Set language
     *
     * @param string $language
     *
     * @return GlpiNotificationtemplatetranslations
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
     * Set subject
     *
     * @param string $subject
     *
     * @return GlpiNotificationtemplatetranslations
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
     * Set contentText
     *
     * @param string $contentText
     *
     * @return GlpiNotificationtemplatetranslations
     */
    public function setContentText($contentText)
    {
        $this->contentText = $contentText;

        return $this;
    }

    /**
     * Get contentText
     *
     * @return string
     */
    public function getContentText()
    {
        return $this->contentText;
    }

    /**
     * Set contentHtml
     *
     * @param string $contentHtml
     *
     * @return GlpiNotificationtemplatetranslations
     */
    public function setContentHtml($contentHtml)
    {
        $this->contentHtml = $contentHtml;

        return $this;
    }

    /**
     * Get contentHtml
     *
     * @return string
     */
    public function getContentHtml()
    {
        return $this->contentHtml;
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
