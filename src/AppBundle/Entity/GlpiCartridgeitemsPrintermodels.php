<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * GlpiCartridgeitemsPrintermodels
 *
 * @ORM\Table(name="glpi_cartridgeitems_printermodels", uniqueConstraints={@ORM\UniqueConstraint(name="unicity", columns={"printermodels_id", "cartridgeitems_id"})}, indexes={@ORM\Index(name="cartridgeitems_id", columns={"cartridgeitems_id"})})
 * @ORM\Entity
 */
class GlpiCartridgeitemsPrintermodels
{
    /**
     * @var integer
     *
     * @ORM\Column(name="cartridgeitems_id", type="integer", nullable=false)
     */
    private $cartridgeitemsId = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="printermodels_id", type="integer", nullable=false)
     */
    private $printermodelsId = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;



    /**
     * Set cartridgeitemsId
     *
     * @param integer $cartridgeitemsId
     *
     * @return GlpiCartridgeitemsPrintermodels
     */
    public function setCartridgeitemsId($cartridgeitemsId)
    {
        $this->cartridgeitemsId = $cartridgeitemsId;

        return $this;
    }

    /**
     * Get cartridgeitemsId
     *
     * @return integer
     */
    public function getCartridgeitemsId()
    {
        return $this->cartridgeitemsId;
    }

    /**
     * Set printermodelsId
     *
     * @param integer $printermodelsId
     *
     * @return GlpiCartridgeitemsPrintermodels
     */
    public function setPrintermodelsId($printermodelsId)
    {
        $this->printermodelsId = $printermodelsId;

        return $this;
    }

    /**
     * Get printermodelsId
     *
     * @return integer
     */
    public function getPrintermodelsId()
    {
        return $this->printermodelsId;
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
