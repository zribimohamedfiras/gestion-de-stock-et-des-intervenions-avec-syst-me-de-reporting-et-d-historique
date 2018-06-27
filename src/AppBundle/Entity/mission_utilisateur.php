<?php
/**
 * Created by PhpStorm.
 * User: firas
 * Date: 08/04/2017
 * Time: 00:03
 */

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\ORM\Mapping\ManyToOne;
use Doctrine\ORM\Mapping\JoinColumn;
use Symfony\Component\Validator\Constraints as Assert;

/**
 *
 *
 * @ORM\Table(name="mission_utilisateur", indexes={@ORM\Index(name="fk30", columns={"id_utilisateur"}), @ORM\Index(name="fk31", columns={"idmission"})})
 * @ORM\Entity
 */

class mission_utilisateur
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id_missionutilisateur", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idmissionutilisateur;

    /**
     * @var \AppBundle\Entity\mission
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\mission")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idmission", referencedColumnName="idmission")
     * })
     */
    private $idmission;

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
     * @return int
     */
    public function getIdmissionutilisateur()
    {
        return $this->idmissionutilisateur;
    }

    /**
     * @return mission
     */
    public function getIdmission()
    {
        return $this->idmission;
    }

    /**
     * @param mission $idmission
     */
    public function setIdmission($idmission)
    {
        $this->idmission = $idmission;
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


}