<?php
/**
 * Created by PhpStorm.
 * User: firas
 * Date: 23/03/2017
 * Time: 00:30
 */

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\ORM\Mapping\ManyToOne;
use Doctrine\ORM\Mapping\JoinColumn;
use Symfony\Component\Validator\Constraints as Assert;

/**
 *
 *
 * @ORM\Table(name="profile_utilisateur", indexes={@ORM\Index(name="fk19", columns={"id_utilisateur"}), @ORM\Index(name="fk20", columns={"id_profile"})})
 * @ORM\Entity
 */
class profile_utilisateur
{

    /**
     * @var integer
     *
     * @ORM\Column(name="id_profileutilisateur", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idprofileutilisateur;

    /**
     * @var \AppBundle\Entity\profile
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\profile")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_profile", referencedColumnName="id_profile")
     * })
     */
    private $idprofile;

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
    public function getIdprofileutilisateur()
    {
        return $this->idprofileutilisateur;
    }

    /**
     * @return profile
     */
    public function getIdprofile()
    {
        return $this->idprofile;
    }

    /**
     * @param profile $idprofile
     */
    public function setIdprofile($idprofile)
    {
        $this->idprofile = $idprofile;
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