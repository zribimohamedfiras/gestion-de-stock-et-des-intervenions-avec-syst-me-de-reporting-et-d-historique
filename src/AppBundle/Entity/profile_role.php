<?php
/**
 * Created by PhpStorm.
 * User: firas
 * Date: 23/03/2017
 * Time: 00:42
 */

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\ORM\Mapping\ManyToOne;
use Doctrine\ORM\Mapping\JoinColumn;
use Symfony\Component\Validator\Constraints as Assert;

/**
 *
 *
 * @ORM\Table(name="profile_role", indexes={@ORM\Index(name="fk21", columns={"id_role"}), @ORM\Index(name="fk22", columns={"id_profile"})})
 * @ORM\Entity
 */
class profile_role
{

    /**
     * @var integer
     *
     * @ORM\Column(name="id_profilerole", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idprofilerole;

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
     * @var \AppBundle\Entity\role
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\role")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_role", referencedColumnName="id")
     * })
     */
    private $idrole;

    /**
     * @return int
     */
    public function getIdprofilerole()
    {
        return $this->idprofilerole;
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
     * @return role
     */
    public function getIdrole()
    {
        return $this->idrole;
    }

    /**
     * @param role $idrole
     */
    public function setIdrole($idrole)
    {
        $this->idrole = $idrole;
    }


}