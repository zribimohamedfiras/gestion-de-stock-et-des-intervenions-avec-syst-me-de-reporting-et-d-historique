<?php
/**
 * Created by PhpStorm.
 * User: firas
 * Date: 15/03/2017
 * Time: 12:27
 */

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;
use Symfony\Component\Validator\Constraints as Assert;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping\OneToMany;

/**
 * Station
 *
 * @ORM\Table(name="station")
 * @ORM\Entity
 * @UniqueEntity(fields="name", message="Name déja existe")
 */

class Station
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id_station", type="integer",length=11)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id_station;

    /**
     * @ORM\Column(type="string", length=255, unique=true)
     * @Assert\NotBlank()
     */
    private $name;

    /**
     * @ORM\Column(type="string", length=64)
     * @Assert\NotBlank()
     */
    private $csr;

    /**
     *
     * @OneToMany(targetEntity="BonArticle", mappedBy="Station")
     */
    private $bon_article;


    public function __construct() {
        $this->bon_article = new ArrayCollection();
    }





    /**
     * @return int
     */
    public function getIdStation()
    {
        return $this->id_station;
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
    public function getCsr()
    {
        return $this->csr;
    }

    /**
     * @param mixed $csr
     */
    public function setCsr($csr)
    {
        $this->csr = $csr;
    }

    /**
     * @return mixed
     */
    public function getBonArticle()
    {
        return $this->bon_article;
    }

    /**
     * @param mixed $bon_article
     */
    public function setBonArticle($bon_article)
    {
        $this->bon_article = $bon_article;
    }



}