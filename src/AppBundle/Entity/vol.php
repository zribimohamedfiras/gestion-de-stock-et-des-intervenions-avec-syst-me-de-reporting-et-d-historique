<?php
/**
 * Created by PhpStorm.
 * User: firas
 * Date: 01/05/2017
 * Time: 11:19
 */

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;
use Symfony\Component\Validator\Constraints as Assert;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping\OneToMany;

/**
 * vol
 *
 * @ORM\Table(name="vol")
 * @ORM\Entity
 *
 */
class vol
{
    /**
     * @var integer
     *
     * @ORM\Column(name="idvol", type="integer",length=11)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $idvol;

    /**
     * @var string
     *
     * @ORM\Column(name="dateDepart", type="string", nullable=true)
     * @Assert\NotBlank()
     */
    private $dateDepart;

    /**
     * @var string
     *
     * @ORM\Column(name="lieuDepart", type="string", nullable=true)
     * @Assert\NotBlank()
     */
    private $lieuDepart;

    /**
     * @var string
     *
     * @ORM\Column(name="heureDepart", type="string", nullable=true)
     * @Assert\NotBlank()
     */
    private $heureDepart;


    /**
     * @var string
     *
     * @ORM\Column(name="dateArrive", type="string", nullable=true)
     * @Assert\NotBlank()
     */
    private $dateArrive;

    /**
     * @var string
     *
     * @ORM\Column(name="lieuArrive", type="string", nullable=true)
     * @Assert\NotBlank()
     */
    private $lieuArrive;

    /**
     * @var string
     *
     * @ORM\Column(name="heureArrive", type="string", nullable=true)
     * @Assert\NotBlank()
     */
    private $heureArrive;

    /**
     * @ORM\OneToMany(targetEntity="bonvol", mappedBy="vol")
     */
    private $bonvol;

    public function __construct()
    {
        $this->bonvol = new ArrayCollection();
    }

    /**
     * @return int
     */
    public function getIdvol()
    {
        return $this->idvol;
    }

    /**
     * @return string
     */
    public function getDateDepart()
    {
        return $this->dateDepart;
    }

    /**
     * @param string $dateDepart
     */
    public function setDateDepart($dateDepart)
    {
        $this->dateDepart = $dateDepart;
    }

    /**
     * @return string
     */
    public function getDateArrive()
    {
        return $this->dateArrive;
    }

    /**
     * @param string $dateArrive
     */
    public function setDateArrive($dateArrive)
    {
        $this->dateArrive = $dateArrive;
    }

    /**
     * @return string
     */
    public function getHeureDepart()
    {
        return $this->heureDepart;
    }

    /**
     * @param string $heureDepart
     */
    public function setHeureDepart($heureDepart)
    {
        $this->heureDepart = $heureDepart;
    }

    /**
     * @return string
     */
    public function getHeureArrive()
    {
        return $this->heureArrive;
    }

    /**
     * @param string $heureArrive
     */
    public function setHeureArrive($heureArrive)
    {
        $this->heureArrive = $heureArrive;
    }

    /**
     * @return string
     */
    public function getLieuDepart()
    {
        return $this->lieuDepart;
    }

    /**
     * @param string $lieuDepart
     */
    public function setLieuDepart($lieuDepart)
    {
        $this->lieuDepart = $lieuDepart;
    }

    /**
     * @return string
     */
    public function getLieuArrive()
    {
        return $this->lieuArrive;
    }

    /**
     * @param string $lieuArrive
     */
    public function setLieuArrive($lieuArrive)
    {
        $this->lieuArrive = $lieuArrive;
    }

    /**
     * @return mixed
     */
    public function getBonvol()
    {
        return $this->bonvol;
    }

    /**
     * @param mixed $bonvol
     */
    public function setBonvol($bonvol)
    {
        $this->bonvol = $bonvol;
    }

}