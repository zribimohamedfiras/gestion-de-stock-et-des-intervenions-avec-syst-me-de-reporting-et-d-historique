<?php
/**
 * Created by PhpStorm.
 * User: firas
 * Date: 31/03/2017
 * Time: 13:51
 */

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;
use Symfony\Component\Validator\Constraints as Assert;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping\OneToMany;

/**
 * hotel
 *
 * @ORM\Table(name="hotel")
 * @ORM\Entity
 * @UniqueEntity(fields="designation", message="Désignation déja existe")
 */
class hotel
{
    /**
     * @var integer
     *
     * @ORM\Column(name="idhotel", type="integer",length=11)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $idhotel;

    /**
     * @ORM\Column(type="string", length=255, unique=true)
     * @Assert\NotBlank()
     */
    private $designation;

    /**
     * @ORM\Column(type="string", length=255)
     * @Assert\NotBlank()
     */
    private $adress;

    /**
     * @ORM\Column(type="integer", length=11)
     * @Assert\NotBlank()
     */
    private $tel;

    /**
     * @ORM\Column(type="string", length=255)
     * @Assert\NotBlank()
     */
    private $ville;

    /**
     * @ORM\OneToMany(targetEntity="bonhotel", mappedBy="hotel")
     */
    private $bonhotel;

    public function __construct()
    {
        $this->bonhotel = new ArrayCollection();
    }





    /**
     * @return int
     */
    public function getIdhotel()
    {
        return $this->idhotel;
    }

    /**
     * @return mixed
     */
    public function getDesignation()
    {
        return $this->designation;
    }

    /**
     * @param mixed $designation
     */
    public function setDesignation($designation)
    {
        $this->designation = $designation;
    }

    /**
     * @return mixed
     */
    public function getAdress()
    {
        return $this->adress;
    }

    /**
     * @param mixed $adress
     */
    public function setAdress($adress)
    {
        $this->adress = $adress;
    }

    /**
     * @return mixed
     */
    public function getTel()
    {
        return $this->tel;
    }

    /**
     * @param mixed $tel
     */
    public function setTel($tel)
    {
        $this->tel = $tel;
    }

    /**
     * @return mixed
     */
    public function getVille()
    {
        return $this->ville;
    }

    /**
     * @param mixed $ville
     */
    public function setVille($ville)
    {
        $this->ville = $ville;
    }

    /**
     * @return mixed
     */
    public function getBonhotel()
    {
        return $this->bonhotel;
    }

    /**
     * @param mixed $bonhotel
     */
    public function setBonhotel($bonhotel)
    {
        $this->bonhotel = $bonhotel;
    }


}