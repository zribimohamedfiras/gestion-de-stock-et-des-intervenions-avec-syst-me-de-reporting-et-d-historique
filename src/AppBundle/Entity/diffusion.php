<?php
/**
 * Created by PhpStorm.
 * User: firas
 * Date: 04/04/2017
 * Time: 17:54
 */

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;
use Symfony\Component\Validator\Constraints as Assert;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping\OneToMany;

/**
 * diffusion
 *
 * @ORM\Table(name="diffusion")
 * @ORM\Entity
 * @UniqueEntity(fields="name", message="Name déja existe")
 */
class diffusion
{
    /**
     * @var integer
     *
     * @ORM\Column(name="iddiffusion", type="integer",length=11)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $iddiffusion;

    /**
     * @ORM\Column(type="string", length=255, unique=true)
     * @Assert\NotBlank()
     */
    private $name;

    /**
     * @ORM\Column(type="integer", length=11)
     * @Assert\NotBlank()
     */
    private $fax;

    /**
     * @ORM\OneToMany(targetEntity="interventionDiffusion", mappedBy="diffusion")
     */
    private $interventionDiffusion;

    public function __construct()
    {
        $this->interventionDiffusion = new ArrayCollection();
    }

    /**
     * @return int
     */
    public function getIddiffusion()
    {
        return $this->iddiffusion;
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param mixed $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * @return mixed
     */
    public function getFax()
    {
        return $this->fax;
    }

    /**
     * @param mixed $fax
     */
    public function setFax($fax)
    {
        $this->fax = $fax;
    }

    /**
     * @return mixed
     */
    public function getInterventionDiffusion()
    {
        return $this->interventionDiffusion;
    }

    /**
     * @param mixed $interventionDiffusion
     */
    public function setInterventionDiffusion($interventionDiffusion)
    {
        $this->interventionDiffusion = $interventionDiffusion;
    }




}