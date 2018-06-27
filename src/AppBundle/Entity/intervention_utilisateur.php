<?php
/**
 * Created by PhpStorm.
 * User: firas
 * Date: 28/03/2017
 * Time: 18:24
 */

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\ORM\Mapping\ManyToOne;
use Doctrine\ORM\Mapping\JoinColumn;
use Symfony\Component\Validator\Constraints as Assert;

/**
 *
 *
 * @ORM\Table(name="intervention_utilisateur", indexes={@ORM\Index(name="fk30", columns={"id_utilisateur"}), @ORM\Index(name="fk31", columns={"id_intervention"})})
 * @ORM\Entity
 */
class intervention_utilisateur
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id_interventionutilisateur", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idinterventionutilisateur;

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
     * @var \AppBundle\Entity\utilisateur
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\utilisateur")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_utilisateur", referencedColumnName="id")
     * })
     */
    private $idutilisateur;

    /**
     * @var string
     *
     * @ORM\Column(name="type", type="string", length=20, nullable=true)
     */
    private $type;

    /**
     * @return int
     */
    public function getIdinterventionutilisateur()
    {
        return $this->idinterventionutilisateur;
    }

    /**
     * @return utilisateur
     */
    public function getIdutilisateur()
    {
        return $this->idutilisateur;
    }

    /**
     * @param utilisateur $idutilisateur
     */
    public function setIdutilisateur($idutilisateur)
    {
        $this->idutilisateur = $idutilisateur;
    }

    /**
     * @return intervention
     */
    public function getIdintervention()
    {
        return $this->idintervention;
    }

    /**
     * @param intervention $idintervention
     */
    public function setIdintervention($idintervention)
    {
        $this->idintervention = $idintervention;
    }

    /**
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * @param string $type
     */
    public function setType($type)
    {
        $this->type = $type;
    }



}