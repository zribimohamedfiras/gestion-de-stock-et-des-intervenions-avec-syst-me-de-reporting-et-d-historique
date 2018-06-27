<?php
/**
 * Created by PhpStorm.
 * User: firas
 * Date: 22/03/2017
 * Time: 23:48
 */

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;
use Doctrine\ORM\Mapping\JoinColumn;
use Doctrine\ORM\Mapping\ManyToMany;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping\JoinTable;


/**
 * @ORM\Table(name="profile")
 * @ORM\Entity
 * @UniqueEntity(fields="name", message="name déja existe")
 */

class profile
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id_profile;

    /**
     * @ORM\Column(type="string", length=255, unique=true)
     *
     */
    private $name;

    /**
     * @ORM\Column(type="string", length=255)
     *
     */
    private $description;

    /**
     * @ORM\OneToMany(targetEntity="profile_utilisateur", mappedBy="profile")
     */
    private $utilisateur_profile;

    /**
     * @ORM\OneToMany(targetEntity="profile_role", mappedBy="profile")
     */
    private $role_profile;

    public function __construct()
    {
        $this->utilisateur_profile=new ArrayCollection();
        $this->role_profile= new ArrayCollection();

    }



    /**
     * @return mixed
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @param mixed $description
     */
    public function setDescription($description)
    {
        $this->description = $description;
    }


    /**
     * @return mixed
     */
    public function getIdProfile()
    {
        return $this->id_profile;
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
    public function getRoleProfile()
    {
        return $this->role_profile;
    }

    /**
     * @param mixed $role_profile
     */
    public function setRoleProfile($role_profile)
    {
        $this->role_profile = $role_profile;
    }

    /**
     * @return mixed
     */
    public function getUtilisateurProfile()
    {
        return $this->utilisateur_profile;
    }

    /**
     * @param mixed $utilisateur_profile
     */
    public function setUtilisateurProfile($utilisateur_profile)
    {
        $this->utilisateur_profile = $utilisateur_profile;
    }





}