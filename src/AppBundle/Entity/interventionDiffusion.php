<?php
/**
 * Created by PhpStorm.
 * User: firas
 * Date: 04/04/2017
 * Time: 18:03
 */

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\ORM\Mapping\ManyToOne;
use Doctrine\ORM\Mapping\JoinColumn;

/**
 * interventionDiffusion
 *
 * @ORM\Table(name="interventionDiffusion")
 * @ORM\Entity
 */
class interventionDiffusion
{
    /**
     * @var integer
     *
     * @ORM\Column(name="idinterventionDiffusion", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idinterventionDiffusion;

    /**
     * @ORM\ManyToOne(targetEntity="intervention", inversedBy="interventionDiffusion")
     * @ORM\JoinColumn(name="intervention_id", referencedColumnName="id_intervention")
     */
    private $intervention;

    /**
     * @ORM\ManyToOne(targetEntity="diffusion", inversedBy="interventionDiffusion")
     * @ORM\JoinColumn(name="diffusion_id", referencedColumnName="iddiffusion")
     */
    private $diffusion;

    /**
     * @return int
     */
    public function getIdinterventionDiffusion()
    {
        return $this->idinterventionDiffusion;
    }

    /**
     * @return mixed
     */
    public function getDiffusion()
    {
        return $this->diffusion;
    }

    /**
     * @param mixed $diffusion
     */
    public function setDiffusion($diffusion)
    {
        $this->diffusion = $diffusion;
    }

    /**
     * @return mixed
     */
    public function getIntervention()
    {
        return $this->intervention;
    }

    /**
     * @param mixed $intervention
     */
    public function setIntervention($intervention)
    {
        $this->intervention = $intervention;
    }




}