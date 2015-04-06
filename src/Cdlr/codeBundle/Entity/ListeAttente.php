<?php

namespace Cdlr\codeBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ListeAttente
 */
class ListeAttente
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var \Cdlr\codeBundle\Entity\Candidat
     */
    private $idCandidat;

    /**
     * @var \Cdlr\codeBundle\Entity\AutoEcole
     */
    private $idAuto;


    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set idCandidat
     *
     * @param \Cdlr\codeBundle\Entity\Candidat $idCandidat
     * @return ListeAttente
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

    /**
     * Set idAuto
     *
     * @param \Cdlr\codeBundle\Entity\AutoEcole $idAuto
     * @return ListeAttente
     */
    public function setIdAuto(\Cdlr\codeBundle\Entity\AutoEcole $idAuto = null)
    {
        $this->idAuto = $idAuto;

        return $this;
    }

    /**
     * Get idAuto
     *
     * @return \Cdlr\codeBundle\Entity\AutoEcole 
     */
    public function getIdAuto()
    {
        return $this->idAuto;
    }
}
