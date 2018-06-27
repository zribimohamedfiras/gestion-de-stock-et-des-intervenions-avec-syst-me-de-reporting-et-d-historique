<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * GlpiTransfers
 *
 * @ORM\Table(name="glpi_transfers", indexes={@ORM\Index(name="date_mod", columns={"date_mod"})})
 * @ORM\Entity
 */
class GlpiTransfers
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
     * @ORM\Column(name="keep_ticket", type="integer", nullable=false)
     */
    private $keepTicket = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="keep_networklink", type="integer", nullable=false)
     */
    private $keepNetworklink = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="keep_reservation", type="integer", nullable=false)
     */
    private $keepReservation = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="keep_history", type="integer", nullable=false)
     */
    private $keepHistory = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="keep_device", type="integer", nullable=false)
     */
    private $keepDevice = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="keep_infocom", type="integer", nullable=false)
     */
    private $keepInfocom = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="keep_dc_monitor", type="integer", nullable=false)
     */
    private $keepDcMonitor = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="clean_dc_monitor", type="integer", nullable=false)
     */
    private $cleanDcMonitor = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="keep_dc_phone", type="integer", nullable=false)
     */
    private $keepDcPhone = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="clean_dc_phone", type="integer", nullable=false)
     */
    private $cleanDcPhone = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="keep_dc_peripheral", type="integer", nullable=false)
     */
    private $keepDcPeripheral = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="clean_dc_peripheral", type="integer", nullable=false)
     */
    private $cleanDcPeripheral = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="keep_dc_printer", type="integer", nullable=false)
     */
    private $keepDcPrinter = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="clean_dc_printer", type="integer", nullable=false)
     */
    private $cleanDcPrinter = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="keep_supplier", type="integer", nullable=false)
     */
    private $keepSupplier = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="clean_supplier", type="integer", nullable=false)
     */
    private $cleanSupplier = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="keep_contact", type="integer", nullable=false)
     */
    private $keepContact = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="clean_contact", type="integer", nullable=false)
     */
    private $cleanContact = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="keep_contract", type="integer", nullable=false)
     */
    private $keepContract = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="clean_contract", type="integer", nullable=false)
     */
    private $cleanContract = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="keep_software", type="integer", nullable=false)
     */
    private $keepSoftware = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="clean_software", type="integer", nullable=false)
     */
    private $cleanSoftware = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="keep_document", type="integer", nullable=false)
     */
    private $keepDocument = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="clean_document", type="integer", nullable=false)
     */
    private $cleanDocument = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="keep_cartridgeitem", type="integer", nullable=false)
     */
    private $keepCartridgeitem = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="clean_cartridgeitem", type="integer", nullable=false)
     */
    private $cleanCartridgeitem = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="keep_cartridge", type="integer", nullable=false)
     */
    private $keepCartridge = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="keep_consumable", type="integer", nullable=false)
     */
    private $keepConsumable = '0';

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
     * @var integer
     *
     * @ORM\Column(name="keep_disk", type="integer", nullable=false)
     */
    private $keepDisk = '0';

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
     * @return GlpiTransfers
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
     * Set keepTicket
     *
     * @param integer $keepTicket
     *
     * @return GlpiTransfers
     */
    public function setKeepTicket($keepTicket)
    {
        $this->keepTicket = $keepTicket;

        return $this;
    }

    /**
     * Get keepTicket
     *
     * @return integer
     */
    public function getKeepTicket()
    {
        return $this->keepTicket;
    }

    /**
     * Set keepNetworklink
     *
     * @param integer $keepNetworklink
     *
     * @return GlpiTransfers
     */
    public function setKeepNetworklink($keepNetworklink)
    {
        $this->keepNetworklink = $keepNetworklink;

        return $this;
    }

    /**
     * Get keepNetworklink
     *
     * @return integer
     */
    public function getKeepNetworklink()
    {
        return $this->keepNetworklink;
    }

    /**
     * Set keepReservation
     *
     * @param integer $keepReservation
     *
     * @return GlpiTransfers
     */
    public function setKeepReservation($keepReservation)
    {
        $this->keepReservation = $keepReservation;

        return $this;
    }

    /**
     * Get keepReservation
     *
     * @return integer
     */
    public function getKeepReservation()
    {
        return $this->keepReservation;
    }

    /**
     * Set keepHistory
     *
     * @param integer $keepHistory
     *
     * @return GlpiTransfers
     */
    public function setKeepHistory($keepHistory)
    {
        $this->keepHistory = $keepHistory;

        return $this;
    }

    /**
     * Get keepHistory
     *
     * @return integer
     */
    public function getKeepHistory()
    {
        return $this->keepHistory;
    }

    /**
     * Set keepDevice
     *
     * @param integer $keepDevice
     *
     * @return GlpiTransfers
     */
    public function setKeepDevice($keepDevice)
    {
        $this->keepDevice = $keepDevice;

        return $this;
    }

    /**
     * Get keepDevice
     *
     * @return integer
     */
    public function getKeepDevice()
    {
        return $this->keepDevice;
    }

    /**
     * Set keepInfocom
     *
     * @param integer $keepInfocom
     *
     * @return GlpiTransfers
     */
    public function setKeepInfocom($keepInfocom)
    {
        $this->keepInfocom = $keepInfocom;

        return $this;
    }

    /**
     * Get keepInfocom
     *
     * @return integer
     */
    public function getKeepInfocom()
    {
        return $this->keepInfocom;
    }

    /**
     * Set keepDcMonitor
     *
     * @param integer $keepDcMonitor
     *
     * @return GlpiTransfers
     */
    public function setKeepDcMonitor($keepDcMonitor)
    {
        $this->keepDcMonitor = $keepDcMonitor;

        return $this;
    }

    /**
     * Get keepDcMonitor
     *
     * @return integer
     */
    public function getKeepDcMonitor()
    {
        return $this->keepDcMonitor;
    }

    /**
     * Set cleanDcMonitor
     *
     * @param integer $cleanDcMonitor
     *
     * @return GlpiTransfers
     */
    public function setCleanDcMonitor($cleanDcMonitor)
    {
        $this->cleanDcMonitor = $cleanDcMonitor;

        return $this;
    }

    /**
     * Get cleanDcMonitor
     *
     * @return integer
     */
    public function getCleanDcMonitor()
    {
        return $this->cleanDcMonitor;
    }

    /**
     * Set keepDcPhone
     *
     * @param integer $keepDcPhone
     *
     * @return GlpiTransfers
     */
    public function setKeepDcPhone($keepDcPhone)
    {
        $this->keepDcPhone = $keepDcPhone;

        return $this;
    }

    /**
     * Get keepDcPhone
     *
     * @return integer
     */
    public function getKeepDcPhone()
    {
        return $this->keepDcPhone;
    }

    /**
     * Set cleanDcPhone
     *
     * @param integer $cleanDcPhone
     *
     * @return GlpiTransfers
     */
    public function setCleanDcPhone($cleanDcPhone)
    {
        $this->cleanDcPhone = $cleanDcPhone;

        return $this;
    }

    /**
     * Get cleanDcPhone
     *
     * @return integer
     */
    public function getCleanDcPhone()
    {
        return $this->cleanDcPhone;
    }

    /**
     * Set keepDcPeripheral
     *
     * @param integer $keepDcPeripheral
     *
     * @return GlpiTransfers
     */
    public function setKeepDcPeripheral($keepDcPeripheral)
    {
        $this->keepDcPeripheral = $keepDcPeripheral;

        return $this;
    }

    /**
     * Get keepDcPeripheral
     *
     * @return integer
     */
    public function getKeepDcPeripheral()
    {
        return $this->keepDcPeripheral;
    }

    /**
     * Set cleanDcPeripheral
     *
     * @param integer $cleanDcPeripheral
     *
     * @return GlpiTransfers
     */
    public function setCleanDcPeripheral($cleanDcPeripheral)
    {
        $this->cleanDcPeripheral = $cleanDcPeripheral;

        return $this;
    }

    /**
     * Get cleanDcPeripheral
     *
     * @return integer
     */
    public function getCleanDcPeripheral()
    {
        return $this->cleanDcPeripheral;
    }

    /**
     * Set keepDcPrinter
     *
     * @param integer $keepDcPrinter
     *
     * @return GlpiTransfers
     */
    public function setKeepDcPrinter($keepDcPrinter)
    {
        $this->keepDcPrinter = $keepDcPrinter;

        return $this;
    }

    /**
     * Get keepDcPrinter
     *
     * @return integer
     */
    public function getKeepDcPrinter()
    {
        return $this->keepDcPrinter;
    }

    /**
     * Set cleanDcPrinter
     *
     * @param integer $cleanDcPrinter
     *
     * @return GlpiTransfers
     */
    public function setCleanDcPrinter($cleanDcPrinter)
    {
        $this->cleanDcPrinter = $cleanDcPrinter;

        return $this;
    }

    /**
     * Get cleanDcPrinter
     *
     * @return integer
     */
    public function getCleanDcPrinter()
    {
        return $this->cleanDcPrinter;
    }

    /**
     * Set keepSupplier
     *
     * @param integer $keepSupplier
     *
     * @return GlpiTransfers
     */
    public function setKeepSupplier($keepSupplier)
    {
        $this->keepSupplier = $keepSupplier;

        return $this;
    }

    /**
     * Get keepSupplier
     *
     * @return integer
     */
    public function getKeepSupplier()
    {
        return $this->keepSupplier;
    }

    /**
     * Set cleanSupplier
     *
     * @param integer $cleanSupplier
     *
     * @return GlpiTransfers
     */
    public function setCleanSupplier($cleanSupplier)
    {
        $this->cleanSupplier = $cleanSupplier;

        return $this;
    }

    /**
     * Get cleanSupplier
     *
     * @return integer
     */
    public function getCleanSupplier()
    {
        return $this->cleanSupplier;
    }

    /**
     * Set keepContact
     *
     * @param integer $keepContact
     *
     * @return GlpiTransfers
     */
    public function setKeepContact($keepContact)
    {
        $this->keepContact = $keepContact;

        return $this;
    }

    /**
     * Get keepContact
     *
     * @return integer
     */
    public function getKeepContact()
    {
        return $this->keepContact;
    }

    /**
     * Set cleanContact
     *
     * @param integer $cleanContact
     *
     * @return GlpiTransfers
     */
    public function setCleanContact($cleanContact)
    {
        $this->cleanContact = $cleanContact;

        return $this;
    }

    /**
     * Get cleanContact
     *
     * @return integer
     */
    public function getCleanContact()
    {
        return $this->cleanContact;
    }

    /**
     * Set keepContract
     *
     * @param integer $keepContract
     *
     * @return GlpiTransfers
     */
    public function setKeepContract($keepContract)
    {
        $this->keepContract = $keepContract;

        return $this;
    }

    /**
     * Get keepContract
     *
     * @return integer
     */
    public function getKeepContract()
    {
        return $this->keepContract;
    }

    /**
     * Set cleanContract
     *
     * @param integer $cleanContract
     *
     * @return GlpiTransfers
     */
    public function setCleanContract($cleanContract)
    {
        $this->cleanContract = $cleanContract;

        return $this;
    }

    /**
     * Get cleanContract
     *
     * @return integer
     */
    public function getCleanContract()
    {
        return $this->cleanContract;
    }

    /**
     * Set keepSoftware
     *
     * @param integer $keepSoftware
     *
     * @return GlpiTransfers
     */
    public function setKeepSoftware($keepSoftware)
    {
        $this->keepSoftware = $keepSoftware;

        return $this;
    }

    /**
     * Get keepSoftware
     *
     * @return integer
     */
    public function getKeepSoftware()
    {
        return $this->keepSoftware;
    }

    /**
     * Set cleanSoftware
     *
     * @param integer $cleanSoftware
     *
     * @return GlpiTransfers
     */
    public function setCleanSoftware($cleanSoftware)
    {
        $this->cleanSoftware = $cleanSoftware;

        return $this;
    }

    /**
     * Get cleanSoftware
     *
     * @return integer
     */
    public function getCleanSoftware()
    {
        return $this->cleanSoftware;
    }

    /**
     * Set keepDocument
     *
     * @param integer $keepDocument
     *
     * @return GlpiTransfers
     */
    public function setKeepDocument($keepDocument)
    {
        $this->keepDocument = $keepDocument;

        return $this;
    }

    /**
     * Get keepDocument
     *
     * @return integer
     */
    public function getKeepDocument()
    {
        return $this->keepDocument;
    }

    /**
     * Set cleanDocument
     *
     * @param integer $cleanDocument
     *
     * @return GlpiTransfers
     */
    public function setCleanDocument($cleanDocument)
    {
        $this->cleanDocument = $cleanDocument;

        return $this;
    }

    /**
     * Get cleanDocument
     *
     * @return integer
     */
    public function getCleanDocument()
    {
        return $this->cleanDocument;
    }

    /**
     * Set keepCartridgeitem
     *
     * @param integer $keepCartridgeitem
     *
     * @return GlpiTransfers
     */
    public function setKeepCartridgeitem($keepCartridgeitem)
    {
        $this->keepCartridgeitem = $keepCartridgeitem;

        return $this;
    }

    /**
     * Get keepCartridgeitem
     *
     * @return integer
     */
    public function getKeepCartridgeitem()
    {
        return $this->keepCartridgeitem;
    }

    /**
     * Set cleanCartridgeitem
     *
     * @param integer $cleanCartridgeitem
     *
     * @return GlpiTransfers
     */
    public function setCleanCartridgeitem($cleanCartridgeitem)
    {
        $this->cleanCartridgeitem = $cleanCartridgeitem;

        return $this;
    }

    /**
     * Get cleanCartridgeitem
     *
     * @return integer
     */
    public function getCleanCartridgeitem()
    {
        return $this->cleanCartridgeitem;
    }

    /**
     * Set keepCartridge
     *
     * @param integer $keepCartridge
     *
     * @return GlpiTransfers
     */
    public function setKeepCartridge($keepCartridge)
    {
        $this->keepCartridge = $keepCartridge;

        return $this;
    }

    /**
     * Get keepCartridge
     *
     * @return integer
     */
    public function getKeepCartridge()
    {
        return $this->keepCartridge;
    }

    /**
     * Set keepConsumable
     *
     * @param integer $keepConsumable
     *
     * @return GlpiTransfers
     */
    public function setKeepConsumable($keepConsumable)
    {
        $this->keepConsumable = $keepConsumable;

        return $this;
    }

    /**
     * Get keepConsumable
     *
     * @return integer
     */
    public function getKeepConsumable()
    {
        return $this->keepConsumable;
    }

    /**
     * Set dateMod
     *
     * @param \DateTime $dateMod
     *
     * @return GlpiTransfers
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
     * @return GlpiTransfers
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
     * Set keepDisk
     *
     * @param integer $keepDisk
     *
     * @return GlpiTransfers
     */
    public function setKeepDisk($keepDisk)
    {
        $this->keepDisk = $keepDisk;

        return $this;
    }

    /**
     * Get keepDisk
     *
     * @return integer
     */
    public function getKeepDisk()
    {
        return $this->keepDisk;
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
