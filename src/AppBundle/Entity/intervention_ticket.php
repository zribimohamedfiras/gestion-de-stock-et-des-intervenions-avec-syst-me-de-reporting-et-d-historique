<?php
/**
 * Created by PhpStorm.
 * User: firas
 * Date: 30/03/2017
 * Time: 14:03
 */

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\ORM\Mapping\ManyToOne;
use Doctrine\ORM\Mapping\JoinColumn;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * intervention_ticket
 *
 * @ORM\Table(name="intervention_ticket", indexes={@ORM\Index(name="fk40", columns={"id_intervention"})})
 * @ORM\Entity
 */
class intervention_ticket
{

    /**
     * @var integer
     *
     * @ORM\Column(name="idintervention_ticket", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idintervention_ticket;



    /**
     * @var \AppBundle\Entity\intervention
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\intervention")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_intervention", referencedColumnName="id_intervention")
     * })
     */
    private $idintervention;

    /**
     * @var integer
     *
     * @ORM\Column(name="ticket", type="integer", nullable=true)
     *
     */
    private $ticket;

    /**
     * @return int
     */
    public function getIdinterventionTicket()
    {
        return $this->idintervention_ticket;
    }

    /**
     * @return intervention
     */
    public function getIdIntervention()
    {
        return $this->idintervention;
    }

    /**
     * @param intervention $id_intervention
     */
    public function setIdIntervention($id_intervention)
    {
        $this->idintervention = $id_intervention;
    }

    /**
     * @return int
     */
    public function getTicket()
    {
        return $this->ticket;
    }

    /**
     * @param int $ticket
     */
    public function setTicket($ticket)
    {
        $this->ticket = $ticket;
    }

}