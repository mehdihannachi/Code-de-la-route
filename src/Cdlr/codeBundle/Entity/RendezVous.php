<?php

namespace Cdlr\codeBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * RendezVous
 */
class RendezVous
{
    /**
     * @var string
     */
    private $date;

    /**
     * @var string
     */
    private $time;

    /**
     * @var integer
     */
    private $rdvId;

    /**
     * @var \Cdlr\codeBundle\Entity\Moniteur
     */
    private $idMoniteur;

    /**
     * @var \Cdlr\codeBundle\Entity\Candidat
     */
    private $idCandidat;


    /**
     * Set date
     *
     * @param string $date
     * @return RendezVous
     */
    public function setDate($date)
    {
        $this->date = $date;

        return $this;
    }

    /**
     * Get date
     *
     * @return string 
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * Set time
     *
     * @param string $time
     * @return RendezVous
     */
    public function setTime($time)
    {
        $this->time = $time;

        return $this;
    }

    /**
     * Get time
     *
     * @return string 
     */
    public function getTime()
    {
        return $this->time;
    }

    /**
     * Get rdvId
     *
     * @return integer 
     */
    public function getRdvId()
    {
        return $this->rdvId;
    }

    /**
     * Set idMoniteur
     *
     * @param \Cdlr\codeBundle\Entity\Moniteur $idMoniteur
     * @return RendezVous
     */
    public function setIdMoniteur(\Cdlr\codeBundle\Entity\Moniteur $idMoniteur = null)
    {
        $this->idMoniteur = $idMoniteur;

        return $this;
    }

    /**
     * Get idMoniteur
     *
     * @return \Cdlr\codeBundle\Entity\Moniteur 
     */
    public function getIdMoniteur()
    {
        return $this->idMoniteur;
    }

    /**
     * Set idCandidat
     *
     * @param \Cdlr\codeBundle\Entity\Candidat $idCandidat
     * @return RendezVous
     */
    public function setIdCandidat(\Cdlr\codeBundle\Entity\Candidat $idCandidat = null)
    {
        $this->idCandidat = $idCandidat;

        return $this;
    }

    /**
     * Get idCandidat
     *
     * @return \Cdlr\codeBundle\Entity\Candidat 
     */
    public function getIdCandidat()
    {
        return $this->idCandidat;
    }
}
