<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * GlpiProfilerights
 *
 * @ORM\Table(name="glpi_profilerights", uniqueConstraints={@ORM\UniqueConstraint(name="unicity", columns={"profiles_id", "name"})})
 * @ORM\Entity
 */
class GlpiProfilerights
{
    /**
     * @var integer
     *
     * @ORM\Column(name="profiles_id", type="integer", nullable=false)
     */
    private $profilesId = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=255, nullable=true)
     */
    private $name;

    /**
     * @var integer
     *
     * @ORM\Column(name="rights", type="integer", nullable=false)
     */
    private $rights = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;



    /**
     * Set profilesId
     *
     * @param integer $profilesId
     *
     * @return GlpiProfilerights
     */
    public function setProfilesId($profilesId)
    {
        $this->profilesId = $profilesId;

        return $this;
    }

    /**
     * Get profilesId
     *
     * @return integer
     */
    public function getProfilesId()
    {
        return $this->profilesId;
    }

    /**
     * Set name
     *
     * @param string $name
     *
     * @return GlpiProfilerights
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set rights
     *
     * @param integer $rights
     *
     * @return GlpiProfilerights
     */
    public function setRights($rights)
    {
        $this->rights = $rights;

        return $this;
    }

    /**
     * Get rights
     *
     * @return integer
     */
    public function getRights()
    {
        return $this->rights;
    }

    /**
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }
}
