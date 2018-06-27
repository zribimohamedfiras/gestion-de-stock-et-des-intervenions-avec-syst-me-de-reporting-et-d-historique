<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * GlpiCrontasklogs
 *
 * @ORM\Table(name="glpi_crontasklogs", indexes={@ORM\Index(name="date", columns={"date"}), @ORM\Index(name="crontasks_id", columns={"crontasks_id"}), @ORM\Index(name="crontasklogs_id_state", columns={"crontasklogs_id", "state"})})
 * @ORM\Entity
 */
class GlpiCrontasklogs
{
    /**
     * @var integer
     *
     * @ORM\Column(name="crontasks_id", type="integer", nullable=false)
     */
    private $crontasksId;

    /**
     * @var integer
     *
     * @ORM\Column(name="crontasklogs_id", type="integer", nullable=false)
     */
    private $crontasklogsId;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date", type="datetime", nullable=false)
     */
    private $date;

    /**
     * @var integer
     *
     * @ORM\Column(name="state", type="integer", nullable=false)
     */
    private $state;

    /**
     * @var float
     *
     * @ORM\Column(name="elapsed", type="float", precision=10, scale=0, nullable=false)
     */
    private $elapsed;

    /**
     * @var integer
     *
     * @ORM\Column(name="volume", type="integer", nullable=false)
     */
    private $volume;

    /**
     * @var string
     *
     * @ORM\Column(name="content", type="string", length=255, nullable=true)
     */
    private $content;

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;



    /**
     * Set crontasksId
     *
     * @param integer $crontasksId
     *
     * @return GlpiCrontasklogs
     */
    public function setCrontasksId($crontasksId)
    {
        $this->crontasksId = $crontasksId;

        return $this;
    }

    /**
     * Get crontasksId
     *
     * @return integer
     */
    public function getCrontasksId()
    {
        return $this->crontasksId;
    }

    /**
     * Set crontasklogsId
     *
     * @param integer $crontasklogsId
     *
     * @return GlpiCrontasklogs
     */
    public function setCrontasklogsId($crontasklogsId)
    {
        $this->crontasklogsId = $crontasklogsId;

        return $this;
    }

    /**
     * Get crontasklogsId
     *
     * @return integer
     */
    public function getCrontasklogsId()
    {
        return $this->crontasklogsId;
    }

    /**
     * Set date
     *
     * @param \DateTime $date
     *
     * @return GlpiCrontasklogs
     */
    public function setDate($date)
    {
        $this->date = $date;

        return $this;
    }

    /**
     * Get date
     *
     * @return \DateTime
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * Set state
     *
     * @param integer $state
     *
     * @return GlpiCrontasklogs
     */
    public function setState($state)
    {
        $this->state = $state;

        return $this;
    }

    /**
     * Get state
     *
     * @return integer
     */
    public function getState()
    {
        return $this->state;
    }

    /**
     * Set elapsed
     *
     * @param float $elapsed
     *
     * @return GlpiCrontasklogs
     */
    public function setElapsed($elapsed)
    {
        $this->elapsed = $elapsed;

        return $this;
    }

    /**
     * Get elapsed
     *
     * @return float
     */
    public function getElapsed()
    {
        return $this->elapsed;
    }

    /**
     * Set volume
     *
     * @param integer $volume
     *
     * @return GlpiCrontasklogs
     */
    public function setVolume($volume)
    {
        $this->volume = $volume;

        return $this;
    }

    /**
     * Get volume
     *
     * @return integer
     */
    public function getVolume()
    {
        return $this->volume;
    }

    /**
     * Set content
     *
     * @param string $content
     *
     * @return GlpiCrontasklogs
     */
    public function setContent($content)
    {
        $this->content = $content;

        return $this;
    }

    /**
     * Get content
     *
     * @return string
     */
    public function getContent()
    {
        return $this->content;
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
