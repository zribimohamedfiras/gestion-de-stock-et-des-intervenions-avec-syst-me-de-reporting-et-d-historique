<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * GlpiQueuedmails
 *
 * @ORM\Table(name="glpi_queuedmails", indexes={@ORM\Index(name="item", columns={"itemtype", "items_id", "notificationtemplates_id"}), @ORM\Index(name="is_deleted", columns={"is_deleted"}), @ORM\Index(name="entities_id", columns={"entities_id"}), @ORM\Index(name="sent_try", columns={"sent_try"}), @ORM\Index(name="create_time", columns={"create_time"}), @ORM\Index(name="send_time", columns={"send_time"}), @ORM\Index(name="sent_time", columns={"sent_time"})})
 * @ORM\Entity
 */
class GlpiQueuedmails
{
    /**
     * @var string
     *
     * @ORM\Column(name="itemtype", type="string", length=100, nullable=true)
     */
    private $itemtype;

    /**
     * @var integer
     *
     * @ORM\Column(name="items_id", type="integer", nullable=false)
     */
    private $itemsId = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="notificationtemplates_id", type="integer", nullable=false)
     */
    private $notificationtemplatesId = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="entities_id", type="integer", nullable=false)
     */
    private $entitiesId = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="is_deleted", type="boolean", nullable=false)
     */
    private $isDeleted = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="sent_try", type="integer", nullable=false)
     */
    private $sentTry = '0';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="create_time", type="datetime", nullable=true)
     */
    private $createTime;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="send_time", type="datetime", nullable=true)
     */
    private $sendTime;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="sent_time", type="datetime", nullable=true)
     */
    private $sentTime;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="text", length=65535, nullable=true)
     */
    private $name;

    /**
     * @var string
     *
     * @ORM\Column(name="sender", type="text", length=65535, nullable=true)
     */
    private $sender;

    /**
     * @var string
     *
     * @ORM\Column(name="sendername", type="text", length=65535, nullable=true)
     */
    private $sendername;

    /**
     * @var string
     *
     * @ORM\Column(name="recipient", type="text", length=65535, nullable=true)
     */
    private $recipient;

    /**
     * @var string
     *
     * @ORM\Column(name="recipientname", type="text", length=65535, nullable=true)
     */
    private $recipientname;

    /**
     * @var string
     *
     * @ORM\Column(name="replyto", type="text", length=65535, nullable=true)
     */
    private $replyto;

    /**
     * @var string
     *
     * @ORM\Column(name="replytoname", type="text", length=65535, nullable=true)
     */
    private $replytoname;

    /**
     * @var string
     *
     * @ORM\Column(name="headers", type="text", length=65535, nullable=true)
     */
    private $headers;

    /**
     * @var string
     *
     * @ORM\Column(name="body_html", type="text", nullable=true)
     */
    private $bodyHtml;

    /**
     * @var string
     *
     * @ORM\Column(name="body_text", type="text", nullable=true)
     */
    private $bodyText;

    /**
     * @var string
     *
     * @ORM\Column(name="messageid", type="text", length=65535, nullable=true)
     */
    private $messageid;

    /**
     * @var string
     *
     * @ORM\Column(name="documents", type="text", length=65535, nullable=true)
     */
    private $documents;

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;



    /**
     * Set itemtype
     *
     * @param string $itemtype
     *
     * @return GlpiQueuedmails
     */
    public function setItemtype($itemtype)
    {
        $this->itemtype = $itemtype;

        return $this;
    }

    /**
     * Get itemtype
     *
     * @return string
     */
    public function getItemtype()
    {
        return $this->itemtype;
    }

    /**
     * Set itemsId
     *
     * @param integer $itemsId
     *
     * @return GlpiQueuedmails
     */
    public function setItemsId($itemsId)
    {
        $this->itemsId = $itemsId;

        return $this;
    }

    /**
     * Get itemsId
     *
     * @return integer
     */
    public function getItemsId()
    {
        return $this->itemsId;
    }

    /**
     * Set notificationtemplatesId
     *
     * @param integer $notificationtemplatesId
     *
     * @return GlpiQueuedmails
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
     * Set entitiesId
     *
     * @param integer $entitiesId
     *
     * @return GlpiQueuedmails
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
     * Set isDeleted
     *
     * @param boolean $isDeleted
     *
     * @return GlpiQueuedmails
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
     * Set sentTry
     *
     * @param integer $sentTry
     *
     * @return GlpiQueuedmails
     */
    public function setSentTry($sentTry)
    {
        $this->sentTry = $sentTry;

        return $this;
    }

    /**
     * Get sentTry
     *
     * @return integer
     */
    public function getSentTry()
    {
        return $this->sentTry;
    }

    /**
     * Set createTime
     *
     * @param \DateTime $createTime
     *
     * @return GlpiQueuedmails
     */
    public function setCreateTime($createTime)
    {
        $this->createTime = $createTime;

        return $this;
    }

    /**
     * Get createTime
     *
     * @return \DateTime
     */
    public function getCreateTime()
    {
        return $this->createTime;
    }

    /**
     * Set sendTime
     *
     * @param \DateTime $sendTime
     *
     * @return GlpiQueuedmails
     */
    public function setSendTime($sendTime)
    {
        $this->sendTime = $sendTime;

        return $this;
    }

    /**
     * Get sendTime
     *
     * @return \DateTime
     */
    public function getSendTime()
    {
        return $this->sendTime;
    }

    /**
     * Set sentTime
     *
     * @param \DateTime $sentTime
     *
     * @return GlpiQueuedmails
     */
    public function setSentTime($sentTime)
    {
        $this->sentTime = $sentTime;

        return $this;
    }

    /**
     * Get sentTime
     *
     * @return \DateTime
     */
    public function getSentTime()
    {
        return $this->sentTime;
    }

    /**
     * Set name
     *
     * @param string $name
     *
     * @return GlpiQueuedmails
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
     * Set sender
     *
     * @param string $sender
     *
     * @return GlpiQueuedmails
     */
    public function setSender($sender)
    {
        $this->sender = $sender;

        return $this;
    }

    /**
     * Get sender
     *
     * @return string
     */
    public function getSender()
    {
        return $this->sender;
    }

    /**
     * Set sendername
     *
     * @param string $sendername
     *
     * @return GlpiQueuedmails
     */
    public function setSendername($sendername)
    {
        $this->sendername = $sendername;

        return $this;
    }

    /**
     * Get sendername
     *
     * @return string
     */
    public function getSendername()
    {
        return $this->sendername;
    }

    /**
     * Set recipient
     *
     * @param string $recipient
     *
     * @return GlpiQueuedmails
     */
    public function setRecipient($recipient)
    {
        $this->recipient = $recipient;

        return $this;
    }

    /**
     * Get recipient
     *
     * @return string
     */
    public function getRecipient()
    {
        return $this->recipient;
    }

    /**
     * Set recipientname
     *
     * @param string $recipientname
     *
     * @return GlpiQueuedmails
     */
    public function setRecipientname($recipientname)
    {
        $this->recipientname = $recipientname;

        return $this;
    }

    /**
     * Get recipientname
     *
     * @return string
     */
    public function getRecipientname()
    {
        return $this->recipientname;
    }

    /**
     * Set replyto
     *
     * @param string $replyto
     *
     * @return GlpiQueuedmails
     */
    public function setReplyto($replyto)
    {
        $this->replyto = $replyto;

        return $this;
    }

    /**
     * Get replyto
     *
     * @return string
     */
    public function getReplyto()
    {
        return $this->replyto;
    }

    /**
     * Set replytoname
     *
     * @param string $replytoname
     *
     * @return GlpiQueuedmails
     */
    public function setReplytoname($replytoname)
    {
        $this->replytoname = $replytoname;

        return $this;
    }

    /**
     * Get replytoname
     *
     * @return string
     */
    public function getReplytoname()
    {
        return $this->replytoname;
    }

    /**
     * Set headers
     *
     * @param string $headers
     *
     * @return GlpiQueuedmails
     */
    public function setHeaders($headers)
    {
        $this->headers = $headers;

        return $this;
    }

    /**
     * Get headers
     *
     * @return string
     */
    public function getHeaders()
    {
        return $this->headers;
    }

    /**
     * Set bodyHtml
     *
     * @param string $bodyHtml
     *
     * @return GlpiQueuedmails
     */
    public function setBodyHtml($bodyHtml)
    {
        $this->bodyHtml = $bodyHtml;

        return $this;
    }

    /**
     * Get bodyHtml
     *
     * @return string
     */
    public function getBodyHtml()
    {
        return $this->bodyHtml;
    }

    /**
     * Set bodyText
     *
     * @param string $bodyText
     *
     * @return GlpiQueuedmails
     */
    public function setBodyText($bodyText)
    {
        $this->bodyText = $bodyText;

        return $this;
    }

    /**
     * Get bodyText
     *
     * @return string
     */
    public function getBodyText()
    {
        return $this->bodyText;
    }

    /**
     * Set messageid
     *
     * @param string $messageid
     *
     * @return GlpiQueuedmails
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
     * Set documents
     *
     * @param string $documents
     *
     * @return GlpiQueuedmails
     */
    public function setDocuments($documents)
    {
        $this->documents = $documents;

        return $this;
    }

    /**
     * Get documents
     *
     * @return string
     */
    public function getDocuments()
    {
        return $this->documents;
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
