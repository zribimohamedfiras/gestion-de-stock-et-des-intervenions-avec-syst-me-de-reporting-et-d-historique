<?php
/**
 * Created by PhpStorm.
 * User: firas
 * Date: 22/03/2017
 * Time: 15:31
 */

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;
use Symfony\Component\Validator\Constraints as Assert;
use Doctrine\ORM\Mapping\ManyToOne;

/**
 * NumeroSerie
 *
 * @ORM\Table(name="numeroSerie")
 * @ORM\Entity
 * @UniqueEntity(fields="name", message="numeroSerie déja existe")
 */
class NumeroSerie
{

    /**
     * @var integer
     *
     * @ORM\Column(name="id_numeroSerie", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $idnumeroSerie;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=100, nullable=false, unique=true)
     * @Assert\NotBlank()
     */
    private $name;

    /**
     * @var \AppBundle\Entity\Article
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Article")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_article", referencedColumnName="id_article")
     * })
     */
    private $idArticle;

    /**
     * @return int
     */
    public function getIdnumeroSerie()
    {
        return $this->idnumeroSerie;
    }

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param string $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * @return Article
     */
    public function getIdArticle()
    {
        return $this->idArticle;
    }

    /**
     * @param Article $idArticle
     */
    public function setIdArticle($idArticle)
    {
        $this->idArticle = $idArticle;
    }
}