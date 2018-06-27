<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * GlpiContactsSuppliers
 *
 * @ORM\Table(name="glpi_contacts_suppliers", uniqueConstraints={@ORM\UniqueConstraint(name="unicity", columns={"suppliers_id", "contacts_id"})}, indexes={@ORM\Index(name="contacts_id", columns={"contacts_id"})})
 * @ORM\Entity
 */
class GlpiContactsSuppliers
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
     * @ORM\Column(name="contacts_id", type="integer", nullable=false)
     */
    private $contactsId = '0';

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
     * @return GlpiContactsSuppliers
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
     * Set contactsId
     *
     * @param integer $contactsId
     *
     * @return GlpiContactsSuppliers
     */
    public function setContactsId($contactsId)
    {
        $this->contactsId = $contactsId;

        return $this;
    }

    /**
     * Get contactsId
     *
     * @return integer
     */
    public function getContactsId()
    {
        return $this->contactsId;
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
