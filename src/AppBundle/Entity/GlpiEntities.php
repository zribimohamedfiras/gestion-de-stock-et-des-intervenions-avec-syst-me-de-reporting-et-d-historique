<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * GlpiEntities
 *
 * @ORM\Table(name="glpi_entities", uniqueConstraints={@ORM\UniqueConstraint(name="unicity", columns={"entities_id", "name"})}, indexes={@ORM\Index(name="entities_id", columns={"entities_id"}), @ORM\Index(name="date_mod", columns={"date_mod"}), @ORM\Index(name="date_creation", columns={"date_creation"})})
 * @ORM\Entity
 */
class GlpiEntities
{
    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=255, nullable=true)
     */
    private $name;

    /**
     * @var integer
     *
     * @ORM\Column(name="entities_id", type="integer", nullable=false)
     */
    private $entitiesId = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="completename", type="text", length=65535, nullable=true)
     */
    private $completename;

    /**
     * @var string
     *
     * @ORM\Column(name="comment", type="text", length=65535, nullable=true)
     */
    private $comment;

    /**
     * @var integer
     *
     * @ORM\Column(name="level", type="integer", nullable=false)
     */
    private $level = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="sons_cache", type="text", nullable=true)
     */
    private $sonsCache;

    /**
     * @var string
     *
     * @ORM\Column(name="ancestors_cache", type="text", nullable=true)
     */
    private $ancestorsCache;

    /**
     * @var string
     *
     * @ORM\Column(name="address", type="text", length=65535, nullable=true)
     */
    private $address;

    /**
     * @var string
     *
     * @ORM\Column(name="postcode", type="string", length=255, nullable=true)
     */
    private $postcode;

    /**
     * @var string
     *
     * @ORM\Column(name="town", type="string", length=255, nullable=true)
     */
    private $town;

    /**
     * @var string
     *
     * @ORM\Column(name="state", type="string", length=255, nullable=true)
     */
    private $state;

    /**
     * @var string
     *
     * @ORM\Column(name="country", type="string", length=255, nullable=true)
     */
    private $country;

    /**
     * @var string
     *
     * @ORM\Column(name="website", type="string", length=255, nullable=true)
     */
    private $website;

    /**
     * @var string
     *
     * @ORM\Column(name="phonenumber", type="string", length=255, nullable=true)
     */
    private $phonenumber;

    /**
     * @var string
     *
     * @ORM\Column(name="fax", type="string", length=255, nullable=true)
     */
    private $fax;

    /**
     * @var string
     *
     * @ORM\Column(name="email", type="string", length=255, nullable=true)
     */
    private $email;

    /**
     * @var string
     *
     * @ORM\Column(name="admin_email", type="string", length=255, nullable=true)
     */
    private $adminEmail;

    /**
     * @var string
     *
     * @ORM\Column(name="admin_email_name", type="string", length=255, nullable=true)
     */
    private $adminEmailName;

    /**
     * @var string
     *
     * @ORM\Column(name="admin_reply", type="string", length=255, nullable=true)
     */
    private $adminReply;

    /**
     * @var string
     *
     * @ORM\Column(name="admin_reply_name", type="string", length=255, nullable=true)
     */
    private $adminReplyName;

    /**
     * @var string
     *
     * @ORM\Column(name="notification_subject_tag", type="string", length=255, nullable=true)
     */
    private $notificationSubjectTag;

    /**
     * @var string
     *
     * @ORM\Column(name="ldap_dn", type="string", length=255, nullable=true)
     */
    private $ldapDn;

    /**
     * @var string
     *
     * @ORM\Column(name="tag", type="string", length=255, nullable=true)
     */
    private $tag;

    /**
     * @var integer
     *
     * @ORM\Column(name="authldaps_id", type="integer", nullable=false)
     */
    private $authldapsId = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="mail_domain", type="string", length=255, nullable=true)
     */
    private $mailDomain;

    /**
     * @var string
     *
     * @ORM\Column(name="entity_ldapfilter", type="text", length=65535, nullable=true)
     */
    private $entityLdapfilter;

    /**
     * @var string
     *
     * @ORM\Column(name="mailing_signature", type="text", length=65535, nullable=true)
     */
    private $mailingSignature;

    /**
     * @var integer
     *
     * @ORM\Column(name="cartridges_alert_repeat", type="integer", nullable=false)
     */
    private $cartridgesAlertRepeat = '-2';

    /**
     * @var integer
     *
     * @ORM\Column(name="consumables_alert_repeat", type="integer", nullable=false)
     */
    private $consumablesAlertRepeat = '-2';

    /**
     * @var integer
     *
     * @ORM\Column(name="use_licenses_alert", type="integer", nullable=false)
     */
    private $useLicensesAlert = '-2';

    /**
     * @var integer
     *
     * @ORM\Column(name="send_licenses_alert_before_delay", type="integer", nullable=false)
     */
    private $sendLicensesAlertBeforeDelay = '-2';

    /**
     * @var integer
     *
     * @ORM\Column(name="use_contracts_alert", type="integer", nullable=false)
     */
    private $useContractsAlert = '-2';

    /**
     * @var integer
     *
     * @ORM\Column(name="send_contracts_alert_before_delay", type="integer", nullable=false)
     */
    private $sendContractsAlertBeforeDelay = '-2';

    /**
     * @var integer
     *
     * @ORM\Column(name="use_infocoms_alert", type="integer", nullable=false)
     */
    private $useInfocomsAlert = '-2';

    /**
     * @var integer
     *
     * @ORM\Column(name="send_infocoms_alert_before_delay", type="integer", nullable=false)
     */
    private $sendInfocomsAlertBeforeDelay = '-2';

    /**
     * @var integer
     *
     * @ORM\Column(name="use_reservations_alert", type="integer", nullable=false)
     */
    private $useReservationsAlert = '-2';

    /**
     * @var integer
     *
     * @ORM\Column(name="autoclose_delay", type="integer", nullable=false)
     */
    private $autocloseDelay = '-2';

    /**
     * @var integer
     *
     * @ORM\Column(name="notclosed_delay", type="integer", nullable=false)
     */
    private $notclosedDelay = '-2';

    /**
     * @var integer
     *
     * @ORM\Column(name="calendars_id", type="integer", nullable=false)
     */
    private $calendarsId = '-2';

    /**
     * @var integer
     *
     * @ORM\Column(name="auto_assign_mode", type="integer", nullable=false)
     */
    private $autoAssignMode = '-2';

    /**
     * @var integer
     *
     * @ORM\Column(name="tickettype", type="integer", nullable=false)
     */
    private $tickettype = '-2';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="max_closedate", type="datetime", nullable=true)
     */
    private $maxClosedate;

    /**
     * @var integer
     *
     * @ORM\Column(name="inquest_config", type="integer", nullable=false)
     */
    private $inquestConfig = '-2';

    /**
     * @var integer
     *
     * @ORM\Column(name="inquest_rate", type="integer", nullable=false)
     */
    private $inquestRate = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="inquest_delay", type="integer", nullable=false)
     */
    private $inquestDelay = '-10';

    /**
     * @var string
     *
     * @ORM\Column(name="inquest_URL", type="string", length=255, nullable=true)
     */
    private $inquestUrl;

    /**
     * @var string
     *
     * @ORM\Column(name="autofill_warranty_date", type="string", length=255, nullable=false)
     */
    private $autofillWarrantyDate = '-2';

    /**
     * @var string
     *
     * @ORM\Column(name="autofill_use_date", type="string", length=255, nullable=false)
     */
    private $autofillUseDate = '-2';

    /**
     * @var string
     *
     * @ORM\Column(name="autofill_buy_date", type="string", length=255, nullable=false)
     */
    private $autofillBuyDate = '-2';

    /**
     * @var string
     *
     * @ORM\Column(name="autofill_delivery_date", type="string", length=255, nullable=false)
     */
    private $autofillDeliveryDate = '-2';

    /**
     * @var string
     *
     * @ORM\Column(name="autofill_order_date", type="string", length=255, nullable=false)
     */
    private $autofillOrderDate = '-2';

    /**
     * @var integer
     *
     * @ORM\Column(name="tickettemplates_id", type="integer", nullable=false)
     */
    private $tickettemplatesId = '-2';

    /**
     * @var integer
     *
     * @ORM\Column(name="entities_id_software", type="integer", nullable=false)
     */
    private $entitiesIdSoftware = '-2';

    /**
     * @var integer
     *
     * @ORM\Column(name="default_contract_alert", type="integer", nullable=false)
     */
    private $defaultContractAlert = '-2';

    /**
     * @var integer
     *
     * @ORM\Column(name="default_infocom_alert", type="integer", nullable=false)
     */
    private $defaultInfocomAlert = '-2';

    /**
     * @var integer
     *
     * @ORM\Column(name="default_cartridges_alarm_threshold", type="integer", nullable=false)
     */
    private $defaultCartridgesAlarmThreshold = '-2';

    /**
     * @var integer
     *
     * @ORM\Column(name="default_consumables_alarm_threshold", type="integer", nullable=false)
     */
    private $defaultConsumablesAlarmThreshold = '-2';

    /**
     * @var integer
     *
     * @ORM\Column(name="delay_send_emails", type="integer", nullable=false)
     */
    private $delaySendEmails = '-2';

    /**
     * @var integer
     *
     * @ORM\Column(name="is_notif_enable_default", type="integer", nullable=false)
     */
    private $isNotifEnableDefault = '-2';

    /**
     * @var integer
     *
     * @ORM\Column(name="inquest_duration", type="integer", nullable=false)
     */
    private $inquestDuration = '0';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_mod", type="datetime", nullable=true)
     */
    private $dateMod;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_creation", type="datetime", nullable=true)
     */
    private $dateCreation;

    /**
     * @var string
     *
     * @ORM\Column(name="autofill_decommission_date", type="string", length=255, nullable=false)
     */
    private $autofillDecommissionDate = '-2';

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
     * @return GlpiEntities
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
     * Set entitiesId
     *
     * @param integer $entitiesId
     *
     * @return GlpiEntities
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
     * Set completename
     *
     * @param string $completename
     *
     * @return GlpiEntities
     */
    public function setCompletename($completename)
    {
        $this->completename = $completename;

        return $this;
    }

    /**
     * Get completename
     *
     * @return string
     */
    public function getCompletename()
    {
        return $this->completename;
    }

    /**
     * Set comment
     *
     * @param string $comment
     *
     * @return GlpiEntities
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
     * Set level
     *
     * @param integer $level
     *
     * @return GlpiEntities
     */
    public function setLevel($level)
    {
        $this->level = $level;

        return $this;
    }

    /**
     * Get level
     *
     * @return integer
     */
    public function getLevel()
    {
        return $this->level;
    }

    /**
     * Set sonsCache
     *
     * @param string $sonsCache
     *
     * @return GlpiEntities
     */
    public function setSonsCache($sonsCache)
    {
        $this->sonsCache = $sonsCache;

        return $this;
    }

    /**
     * Get sonsCache
     *
     * @return string
     */
    public function getSonsCache()
    {
        return $this->sonsCache;
    }

    /**
     * Set ancestorsCache
     *
     * @param string $ancestorsCache
     *
     * @return GlpiEntities
     */
    public function setAncestorsCache($ancestorsCache)
    {
        $this->ancestorsCache = $ancestorsCache;

        return $this;
    }

    /**
     * Get ancestorsCache
     *
     * @return string
     */
    public function getAncestorsCache()
    {
        return $this->ancestorsCache;
    }

    /**
     * Set address
     *
     * @param string $address
     *
     * @return GlpiEntities
     */
    public function setAddress($address)
    {
        $this->address = $address;

        return $this;
    }

    /**
     * Get address
     *
     * @return string
     */
    public function getAddress()
    {
        return $this->address;
    }

    /**
     * Set postcode
     *
     * @param string $postcode
     *
     * @return GlpiEntities
     */
    public function setPostcode($postcode)
    {
        $this->postcode = $postcode;

        return $this;
    }

    /**
     * Get postcode
     *
     * @return string
     */
    public function getPostcode()
    {
        return $this->postcode;
    }

    /**
     * Set town
     *
     * @param string $town
     *
     * @return GlpiEntities
     */
    public function setTown($town)
    {
        $this->town = $town;

        return $this;
    }

    /**
     * Get town
     *
     * @return string
     */
    public function getTown()
    {
        return $this->town;
    }

    /**
     * Set state
     *
     * @param string $state
     *
     * @return GlpiEntities
     */
    public function setState($state)
    {
        $this->state = $state;

        return $this;
    }

    /**
     * Get state
     *
     * @return string
     */
    public function getState()
    {
        return $this->state;
    }

    /**
     * Set country
     *
     * @param string $country
     *
     * @return GlpiEntities
     */
    public function setCountry($country)
    {
        $this->country = $country;

        return $this;
    }

    /**
     * Get country
     *
     * @return string
     */
    public function getCountry()
    {
        return $this->country;
    }

    /**
     * Set website
     *
     * @param string $website
     *
     * @return GlpiEntities
     */
    public function setWebsite($website)
    {
        $this->website = $website;

        return $this;
    }

    /**
     * Get website
     *
     * @return string
     */
    public function getWebsite()
    {
        return $this->website;
    }

    /**
     * Set phonenumber
     *
     * @param string $phonenumber
     *
     * @return GlpiEntities
     */
    public function setPhonenumber($phonenumber)
    {
        $this->phonenumber = $phonenumber;

        return $this;
    }

    /**
     * Get phonenumber
     *
     * @return string
     */
    public function getPhonenumber()
    {
        return $this->phonenumber;
    }

    /**
     * Set fax
     *
     * @param string $fax
     *
     * @return GlpiEntities
     */
    public function setFax($fax)
    {
        $this->fax = $fax;

        return $this;
    }

    /**
     * Get fax
     *
     * @return string
     */
    public function getFax()
    {
        return $this->fax;
    }

    /**
     * Set email
     *
     * @param string $email
     *
     * @return GlpiEntities
     */
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Get email
     *
     * @return string
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set adminEmail
     *
     * @param string $adminEmail
     *
     * @return GlpiEntities
     */
    public function setAdminEmail($adminEmail)
    {
        $this->adminEmail = $adminEmail;

        return $this;
    }

    /**
     * Get adminEmail
     *
     * @return string
     */
    public function getAdminEmail()
    {
        return $this->adminEmail;
    }

    /**
     * Set adminEmailName
     *
     * @param string $adminEmailName
     *
     * @return GlpiEntities
     */
    public function setAdminEmailName($adminEmailName)
    {
        $this->adminEmailName = $adminEmailName;

        return $this;
    }

    /**
     * Get adminEmailName
     *
     * @return string
     */
    public function getAdminEmailName()
    {
        return $this->adminEmailName;
    }

    /**
     * Set adminReply
     *
     * @param string $adminReply
     *
     * @return GlpiEntities
     */
    public function setAdminReply($adminReply)
    {
        $this->adminReply = $adminReply;

        return $this;
    }

    /**
     * Get adminReply
     *
     * @return string
     */
    public function getAdminReply()
    {
        return $this->adminReply;
    }

    /**
     * Set adminReplyName
     *
     * @param string $adminReplyName
     *
     * @return GlpiEntities
     */
    public function setAdminReplyName($adminReplyName)
    {
        $this->adminReplyName = $adminReplyName;

        return $this;
    }

    /**
     * Get adminReplyName
     *
     * @return string
     */
    public function getAdminReplyName()
    {
        return $this->adminReplyName;
    }

    /**
     * Set notificationSubjectTag
     *
     * @param string $notificationSubjectTag
     *
     * @return GlpiEntities
     */
    public function setNotificationSubjectTag($notificationSubjectTag)
    {
        $this->notificationSubjectTag = $notificationSubjectTag;

        return $this;
    }

    /**
     * Get notificationSubjectTag
     *
     * @return string
     */
    public function getNotificationSubjectTag()
    {
        return $this->notificationSubjectTag;
    }

    /**
     * Set ldapDn
     *
     * @param string $ldapDn
     *
     * @return GlpiEntities
     */
    public function setLdapDn($ldapDn)
    {
        $this->ldapDn = $ldapDn;

        return $this;
    }

    /**
     * Get ldapDn
     *
     * @return string
     */
    public function getLdapDn()
    {
        return $this->ldapDn;
    }

    /**
     * Set tag
     *
     * @param string $tag
     *
     * @return GlpiEntities
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
     * Set authldapsId
     *
     * @param integer $authldapsId
     *
     * @return GlpiEntities
     */
    public function setAuthldapsId($authldapsId)
    {
        $this->authldapsId = $authldapsId;

        return $this;
    }

    /**
     * Get authldapsId
     *
     * @return integer
     */
    public function getAuthldapsId()
    {
        return $this->authldapsId;
    }

    /**
     * Set mailDomain
     *
     * @param string $mailDomain
     *
     * @return GlpiEntities
     */
    public function setMailDomain($mailDomain)
    {
        $this->mailDomain = $mailDomain;

        return $this;
    }

    /**
     * Get mailDomain
     *
     * @return string
     */
    public function getMailDomain()
    {
        return $this->mailDomain;
    }

    /**
     * Set entityLdapfilter
     *
     * @param string $entityLdapfilter
     *
     * @return GlpiEntities
     */
    public function setEntityLdapfilter($entityLdapfilter)
    {
        $this->entityLdapfilter = $entityLdapfilter;

        return $this;
    }

    /**
     * Get entityLdapfilter
     *
     * @return string
     */
    public function getEntityLdapfilter()
    {
        return $this->entityLdapfilter;
    }

    /**
     * Set mailingSignature
     *
     * @param string $mailingSignature
     *
     * @return GlpiEntities
     */
    public function setMailingSignature($mailingSignature)
    {
        $this->mailingSignature = $mailingSignature;

        return $this;
    }

    /**
     * Get mailingSignature
     *
     * @return string
     */
    public function getMailingSignature()
    {
        return $this->mailingSignature;
    }

    /**
     * Set cartridgesAlertRepeat
     *
     * @param integer $cartridgesAlertRepeat
     *
     * @return GlpiEntities
     */
    public function setCartridgesAlertRepeat($cartridgesAlertRepeat)
    {
        $this->cartridgesAlertRepeat = $cartridgesAlertRepeat;

        return $this;
    }

    /**
     * Get cartridgesAlertRepeat
     *
     * @return integer
     */
    public function getCartridgesAlertRepeat()
    {
        return $this->cartridgesAlertRepeat;
    }

    /**
     * Set consumablesAlertRepeat
     *
     * @param integer $consumablesAlertRepeat
     *
     * @return GlpiEntities
     */
    public function setConsumablesAlertRepeat($consumablesAlertRepeat)
    {
        $this->consumablesAlertRepeat = $consumablesAlertRepeat;

        return $this;
    }

    /**
     * Get consumablesAlertRepeat
     *
     * @return integer
     */
    public function getConsumablesAlertRepeat()
    {
        return $this->consumablesAlertRepeat;
    }

    /**
     * Set useLicensesAlert
     *
     * @param integer $useLicensesAlert
     *
     * @return GlpiEntities
     */
    public function setUseLicensesAlert($useLicensesAlert)
    {
        $this->useLicensesAlert = $useLicensesAlert;

        return $this;
    }

    /**
     * Get useLicensesAlert
     *
     * @return integer
     */
    public function getUseLicensesAlert()
    {
        return $this->useLicensesAlert;
    }

    /**
     * Set sendLicensesAlertBeforeDelay
     *
     * @param integer $sendLicensesAlertBeforeDelay
     *
     * @return GlpiEntities
     */
    public function setSendLicensesAlertBeforeDelay($sendLicensesAlertBeforeDelay)
    {
        $this->sendLicensesAlertBeforeDelay = $sendLicensesAlertBeforeDelay;

        return $this;
    }

    /**
     * Get sendLicensesAlertBeforeDelay
     *
     * @return integer
     */
    public function getSendLicensesAlertBeforeDelay()
    {
        return $this->sendLicensesAlertBeforeDelay;
    }

    /**
     * Set useContractsAlert
     *
     * @param integer $useContractsAlert
     *
     * @return GlpiEntities
     */
    public function setUseContractsAlert($useContractsAlert)
    {
        $this->useContractsAlert = $useContractsAlert;

        return $this;
    }

    /**
     * Get useContractsAlert
     *
     * @return integer
     */
    public function getUseContractsAlert()
    {
        return $this->useContractsAlert;
    }

    /**
     * Set sendContractsAlertBeforeDelay
     *
     * @param integer $sendContractsAlertBeforeDelay
     *
     * @return GlpiEntities
     */
    public function setSendContractsAlertBeforeDelay($sendContractsAlertBeforeDelay)
    {
        $this->sendContractsAlertBeforeDelay = $sendContractsAlertBeforeDelay;

        return $this;
    }

    /**
     * Get sendContractsAlertBeforeDelay
     *
     * @return integer
     */
    public function getSendContractsAlertBeforeDelay()
    {
        return $this->sendContractsAlertBeforeDelay;
    }

    /**
     * Set useInfocomsAlert
     *
     * @param integer $useInfocomsAlert
     *
     * @return GlpiEntities
     */
    public function setUseInfocomsAlert($useInfocomsAlert)
    {
        $this->useInfocomsAlert = $useInfocomsAlert;

        return $this;
    }

    /**
     * Get useInfocomsAlert
     *
     * @return integer
     */
    public function getUseInfocomsAlert()
    {
        return $this->useInfocomsAlert;
    }

    /**
     * Set sendInfocomsAlertBeforeDelay
     *
     * @param integer $sendInfocomsAlertBeforeDelay
     *
     * @return GlpiEntities
     */
    public function setSendInfocomsAlertBeforeDelay($sendInfocomsAlertBeforeDelay)
    {
        $this->sendInfocomsAlertBeforeDelay = $sendInfocomsAlertBeforeDelay;

        return $this;
    }

    /**
     * Get sendInfocomsAlertBeforeDelay
     *
     * @return integer
     */
    public function getSendInfocomsAlertBeforeDelay()
    {
        return $this->sendInfocomsAlertBeforeDelay;
    }

    /**
     * Set useReservationsAlert
     *
     * @param integer $useReservationsAlert
     *
     * @return GlpiEntities
     */
    public function setUseReservationsAlert($useReservationsAlert)
    {
        $this->useReservationsAlert = $useReservationsAlert;

        return $this;
    }

    /**
     * Get useReservationsAlert
     *
     * @return integer
     */
    public function getUseReservationsAlert()
    {
        return $this->useReservationsAlert;
    }

    /**
     * Set autocloseDelay
     *
     * @param integer $autocloseDelay
     *
     * @return GlpiEntities
     */
    public function setAutocloseDelay($autocloseDelay)
    {
        $this->autocloseDelay = $autocloseDelay;

        return $this;
    }

    /**
     * Get autocloseDelay
     *
     * @return integer
     */
    public function getAutocloseDelay()
    {
        return $this->autocloseDelay;
    }

    /**
     * Set notclosedDelay
     *
     * @param integer $notclosedDelay
     *
     * @return GlpiEntities
     */
    public function setNotclosedDelay($notclosedDelay)
    {
        $this->notclosedDelay = $notclosedDelay;

        return $this;
    }

    /**
     * Get notclosedDelay
     *
     * @return integer
     */
    public function getNotclosedDelay()
    {
        return $this->notclosedDelay;
    }

    /**
     * Set calendarsId
     *
     * @param integer $calendarsId
     *
     * @return GlpiEntities
     */
    public function setCalendarsId($calendarsId)
    {
        $this->calendarsId = $calendarsId;

        return $this;
    }

    /**
     * Get calendarsId
     *
     * @return integer
     */
    public function getCalendarsId()
    {
        return $this->calendarsId;
    }

    /**
     * Set autoAssignMode
     *
     * @param integer $autoAssignMode
     *
     * @return GlpiEntities
     */
    public function setAutoAssignMode($autoAssignMode)
    {
        $this->autoAssignMode = $autoAssignMode;

        return $this;
    }

    /**
     * Get autoAssignMode
     *
     * @return integer
     */
    public function getAutoAssignMode()
    {
        return $this->autoAssignMode;
    }

    /**
     * Set tickettype
     *
     * @param integer $tickettype
     *
     * @return GlpiEntities
     */
    public function setTickettype($tickettype)
    {
        $this->tickettype = $tickettype;

        return $this;
    }

    /**
     * Get tickettype
     *
     * @return integer
     */
    public function getTickettype()
    {
        return $this->tickettype;
    }

    /**
     * Set maxClosedate
     *
     * @param \DateTime $maxClosedate
     *
     * @return GlpiEntities
     */
    public function setMaxClosedate($maxClosedate)
    {
        $this->maxClosedate = $maxClosedate;

        return $this;
    }

    /**
     * Get maxClosedate
     *
     * @return \DateTime
     */
    public function getMaxClosedate()
    {
        return $this->maxClosedate;
    }

    /**
     * Set inquestConfig
     *
     * @param integer $inquestConfig
     *
     * @return GlpiEntities
     */
    public function setInquestConfig($inquestConfig)
    {
        $this->inquestConfig = $inquestConfig;

        return $this;
    }

    /**
     * Get inquestConfig
     *
     * @return integer
     */
    public function getInquestConfig()
    {
        return $this->inquestConfig;
    }

    /**
     * Set inquestRate
     *
     * @param integer $inquestRate
     *
     * @return GlpiEntities
     */
    public function setInquestRate($inquestRate)
    {
        $this->inquestRate = $inquestRate;

        return $this;
    }

    /**
     * Get inquestRate
     *
     * @return integer
     */
    public function getInquestRate()
    {
        return $this->inquestRate;
    }

    /**
     * Set inquestDelay
     *
     * @param integer $inquestDelay
     *
     * @return GlpiEntities
     */
    public function setInquestDelay($inquestDelay)
    {
        $this->inquestDelay = $inquestDelay;

        return $this;
    }

    /**
     * Get inquestDelay
     *
     * @return integer
     */
    public function getInquestDelay()
    {
        return $this->inquestDelay;
    }

    /**
     * Set inquestUrl
     *
     * @param string $inquestUrl
     *
     * @return GlpiEntities
     */
    public function setInquestUrl($inquestUrl)
    {
        $this->inquestUrl = $inquestUrl;

        return $this;
    }

    /**
     * Get inquestUrl
     *
     * @return string
     */
    public function getInquestUrl()
    {
        return $this->inquestUrl;
    }

    /**
     * Set autofillWarrantyDate
     *
     * @param string $autofillWarrantyDate
     *
     * @return GlpiEntities
     */
    public function setAutofillWarrantyDate($autofillWarrantyDate)
    {
        $this->autofillWarrantyDate = $autofillWarrantyDate;

        return $this;
    }

    /**
     * Get autofillWarrantyDate
     *
     * @return string
     */
    public function getAutofillWarrantyDate()
    {
        return $this->autofillWarrantyDate;
    }

    /**
     * Set autofillUseDate
     *
     * @param string $autofillUseDate
     *
     * @return GlpiEntities
     */
    public function setAutofillUseDate($autofillUseDate)
    {
        $this->autofillUseDate = $autofillUseDate;

        return $this;
    }

    /**
     * Get autofillUseDate
     *
     * @return string
     */
    public function getAutofillUseDate()
    {
        return $this->autofillUseDate;
    }

    /**
     * Set autofillBuyDate
     *
     * @param string $autofillBuyDate
     *
     * @return GlpiEntities
     */
    public function setAutofillBuyDate($autofillBuyDate)
    {
        $this->autofillBuyDate = $autofillBuyDate;

        return $this;
    }

    /**
     * Get autofillBuyDate
     *
     * @return string
     */
    public function getAutofillBuyDate()
    {
        return $this->autofillBuyDate;
    }

    /**
     * Set autofillDeliveryDate
     *
     * @param string $autofillDeliveryDate
     *
     * @return GlpiEntities
     */
    public function setAutofillDeliveryDate($autofillDeliveryDate)
    {
        $this->autofillDeliveryDate = $autofillDeliveryDate;

        return $this;
    }

    /**
     * Get autofillDeliveryDate
     *
     * @return string
     */
    public function getAutofillDeliveryDate()
    {
        return $this->autofillDeliveryDate;
    }

    /**
     * Set autofillOrderDate
     *
     * @param string $autofillOrderDate
     *
     * @return GlpiEntities
     */
    public function setAutofillOrderDate($autofillOrderDate)
    {
        $this->autofillOrderDate = $autofillOrderDate;

        return $this;
    }

    /**
     * Get autofillOrderDate
     *
     * @return string
     */
    public function getAutofillOrderDate()
    {
        return $this->autofillOrderDate;
    }

    /**
     * Set tickettemplatesId
     *
     * @param integer $tickettemplatesId
     *
     * @return GlpiEntities
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
     * Set entitiesIdSoftware
     *
     * @param integer $entitiesIdSoftware
     *
     * @return GlpiEntities
     */
    public function setEntitiesIdSoftware($entitiesIdSoftware)
    {
        $this->entitiesIdSoftware = $entitiesIdSoftware;

        return $this;
    }

    /**
     * Get entitiesIdSoftware
     *
     * @return integer
     */
    public function getEntitiesIdSoftware()
    {
        return $this->entitiesIdSoftware;
    }

    /**
     * Set defaultContractAlert
     *
     * @param integer $defaultContractAlert
     *
     * @return GlpiEntities
     */
    public function setDefaultContractAlert($defaultContractAlert)
    {
        $this->defaultContractAlert = $defaultContractAlert;

        return $this;
    }

    /**
     * Get defaultContractAlert
     *
     * @return integer
     */
    public function getDefaultContractAlert()
    {
        return $this->defaultContractAlert;
    }

    /**
     * Set defaultInfocomAlert
     *
     * @param integer $defaultInfocomAlert
     *
     * @return GlpiEntities
     */
    public function setDefaultInfocomAlert($defaultInfocomAlert)
    {
        $this->defaultInfocomAlert = $defaultInfocomAlert;

        return $this;
    }

    /**
     * Get defaultInfocomAlert
     *
     * @return integer
     */
    public function getDefaultInfocomAlert()
    {
        return $this->defaultInfocomAlert;
    }

    /**
     * Set defaultCartridgesAlarmThreshold
     *
     * @param integer $defaultCartridgesAlarmThreshold
     *
     * @return GlpiEntities
     */
    public function setDefaultCartridgesAlarmThreshold($defaultCartridgesAlarmThreshold)
    {
        $this->defaultCartridgesAlarmThreshold = $defaultCartridgesAlarmThreshold;

        return $this;
    }

    /**
     * Get defaultCartridgesAlarmThreshold
     *
     * @return integer
     */
    public function getDefaultCartridgesAlarmThreshold()
    {
        return $this->defaultCartridgesAlarmThreshold;
    }

    /**
     * Set defaultConsumablesAlarmThreshold
     *
     * @param integer $defaultConsumablesAlarmThreshold
     *
     * @return GlpiEntities
     */
    public function setDefaultConsumablesAlarmThreshold($defaultConsumablesAlarmThreshold)
    {
        $this->defaultConsumablesAlarmThreshold = $defaultConsumablesAlarmThreshold;

        return $this;
    }

    /**
     * Get defaultConsumablesAlarmThreshold
     *
     * @return integer
     */
    public function getDefaultConsumablesAlarmThreshold()
    {
        return $this->defaultConsumablesAlarmThreshold;
    }

    /**
     * Set delaySendEmails
     *
     * @param integer $delaySendEmails
     *
     * @return GlpiEntities
     */
    public function setDelaySendEmails($delaySendEmails)
    {
        $this->delaySendEmails = $delaySendEmails;

        return $this;
    }

    /**
     * Get delaySendEmails
     *
     * @return integer
     */
    public function getDelaySendEmails()
    {
        return $this->delaySendEmails;
    }

    /**
     * Set isNotifEnableDefault
     *
     * @param integer $isNotifEnableDefault
     *
     * @return GlpiEntities
     */
    public function setIsNotifEnableDefault($isNotifEnableDefault)
    {
        $this->isNotifEnableDefault = $isNotifEnableDefault;

        return $this;
    }

    /**
     * Get isNotifEnableDefault
     *
     * @return integer
     */
    public function getIsNotifEnableDefault()
    {
        return $this->isNotifEnableDefault;
    }

    /**
     * Set inquestDuration
     *
     * @param integer $inquestDuration
     *
     * @return GlpiEntities
     */
    public function setInquestDuration($inquestDuration)
    {
        $this->inquestDuration = $inquestDuration;

        return $this;
    }

    /**
     * Get inquestDuration
     *
     * @return integer
     */
    public function getInquestDuration()
    {
        return $this->inquestDuration;
    }

    /**
     * Set dateMod
     *
     * @param \DateTime $dateMod
     *
     * @return GlpiEntities
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
     * Set dateCreation
     *
     * @param \DateTime $dateCreation
     *
     * @return GlpiEntities
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
     * Set autofillDecommissionDate
     *
     * @param string $autofillDecommissionDate
     *
     * @return GlpiEntities
     */
    public function setAutofillDecommissionDate($autofillDecommissionDate)
    {
        $this->autofillDecommissionDate = $autofillDecommissionDate;

        return $this;
    }

    /**
     * Get autofillDecommissionDate
     *
     * @return string
     */
    public function getAutofillDecommissionDate()
    {
        return $this->autofillDecommissionDate;
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
