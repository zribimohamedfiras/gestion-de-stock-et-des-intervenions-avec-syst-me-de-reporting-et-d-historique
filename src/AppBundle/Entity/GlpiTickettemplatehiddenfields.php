<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * GlpiTickettemplatehiddenfields
 *
 * @ORM\Table(name="glpi_tickettemplatehiddenfields", indexes={@ORM\Index(name="unicity", columns={"tickettemplates_id", "num"})})
 * @ORM\Entity
 */
class GlpiTickettemplatehiddenfields
{
    /**
     * @var integer
     *
     * @ORM\Column(name="tickettemplates_id", type="integer", nullable=false)
     */
    private $tickettemplatesId = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="num", type="integer", nullable=false)
     */
    private $num = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;



    /**
     * Set tickettemplatesId
     *
     * @param integer $tickettemplatesId
     *
     * @return GlpiTickettemplatehiddenfields
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
     * Set num
     *
     * @param integer $num
     *
     * @return GlpiTickettemplatehiddenfields
     */
    public function setNum($num)
    {
        $this->num = $num;

        return $this;
    }

    /**
     * Get num
     *
     * @return integer
     */
    public function getNum()
    {
        return $this->num;
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
