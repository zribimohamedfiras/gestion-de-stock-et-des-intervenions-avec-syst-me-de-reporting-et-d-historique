<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * GlpiContractsSuppliers
 *
 * @ORM\Table(name="glpi_contracts_suppliers", uniqueConstraints={@ORM\UniqueConstraint(name="unicity", columns={"suppliers_id", "contracts_id"})}, indexes={@ORM\Index(name="contracts_id", columns={"contracts_id"})})
 * @ORM\Entity
 */
class GlpiContractsSuppliers
{
    /**
     * @var integer
     *
     * @ORM\Column(name="suppliers_id", type="integer", nullable=false)
     */
    private $suppliersId = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="contracts_id", type="integer", nullable=false)
     */
    private $contractsId = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;



    /**
     * Set suppliersId
     *
     * @param integer $suppliersId
     *
     * @return GlpiContractsSuppliers
     */
    public function setSuppliersId($suppliersId)
    {
        $this->suppliersId = $suppliersId;

        return $this;
    }

    /**
     * Get suppliersId
     *
     * @return integer
     */
    public function getSuppliersId()
    {
        return $this->suppliersId;
    }

    /**
     * Set contractsId
     *
     * @param integer $contractsId
     *
     * @return GlpiContractsSuppliers
     */
    public function setContractsId($contractsId)
    {
        $this->contractsId = $contractsId;

        return $this;
    }

    /**
     * Get contractsId
     *
     * @return integer
     */
    public function getContractsId()
    {
        return $this->contractsId;
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
