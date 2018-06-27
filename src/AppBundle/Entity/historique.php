<?php
/**
 * Created by PhpStorm.
 * User: firas
 * Date: 27/04/2017
 * Time: 05:27
 */

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\ORM\Mapping\ManyToOne;
use Doctrine\ORM\Mapping\JoinColumn;

/**
 * historique
 *
 * @ORM\Table(name="historique")
 * @ORM\Entity
 */
class historique
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id_historique", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idhistorique;

    /**
     * @var string
     *
     * @ORM\Column(name="date_historique", type="string", nullable=true)
     */
    private $datehistorique;

    /**
     * @var string
     *
     * @ORM\Column(name="champ", type="string", nullable=true)
     */
    private $champ;

    /**
     * @var string
     *
     * @ORM\Column(name="encienvaleur", type="string", nullable=true)
     */
    private $encienvaleur;

    /**
     * @var string
     *
     * @ORM\Column(name="nouveauvaleur", type="string", nullable=true)
     */
    private $nouveauvaleur;

    /**
     * @var string
     *
     * @ORM\Column(name="module", type="string", nullable=true)
     */
    private $module;

    /**
     * @var string
     *
     * @ORM\Column(name="type", type="string", nullable=true)
     */
    private $type;

    /**
     * @ORM\ManyToOne(targetEntity="utilisateur", inversedBy="historique")
     * @ORM\JoinColumn(name="utilisateur_id", referencedColumnName="id")
     */
    private $utilisateur;

    /**
     * @return int
     */
    public function getIdhistorique()
    {
        return $this->idhistorique;
    }

    /**
     * @return string
     */
    public function getChamp()
    {
        return $this->champ;
    }

    /**
     * @param string $champ
     */
    public function setChamp($champ)
    {
        $this->champ = $champ;
    }

    /**
     * @return string
     */
    public function getDatehistorique()
    {
        return $this->datehistorique;
    }

    /**
     * @param string $datehistorique
     */
    public function setDatehistorique($datehistorique)
    {
        $this->datehistorique = $datehistorique;
    }

    /**
     * @return string
     */
    public function getEncienvaleur()
    {
        return $this->encienvaleur;
    }

    /**
     * @param string $encienvaleur
     */
    public function setEncienvaleur($encienvaleur)
    {
        $this->encienvaleur = $encienvaleur;
    }

    /**
     * @return string
     */
    public function getNouveauvaleur()
    {
        return $this->nouveauvaleur;
    }

    /**
     * @param string $nouveauvaleur
     */
    public function setNouveauvaleur($nouveauvaleur)
    {
        $this->nouveauvaleur = $nouveauvaleur;
    }

    /**
     * @return string
     */
    public function getModule()
    {
        return $this->module;
    }

    /**
     * @param string $module
     */
    public function setModule($module)
    {
        $this->module = $module;
    }

    /**
     * @return mixed
     */
    public function getUtilisateur()
    {
        return $this->utilisateur;
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

    /**
     * @param mixed $utilisateur
     */
    public function setUtilisateur($utilisateur)
    {
        $this->utilisateur = $utilisateur;
    }



}