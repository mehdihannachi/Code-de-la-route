<?php

namespace Cdlr\codeBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Review
 */
class Review
{
    /**
     * @var integer
     */
    private $note;

    /**
     * @var integer
     */
    private $nbrVote;

    /**
     * @var integer
     */
    private $id;

    /**
     * @var \Cdlr\codeBundle\Entity\Moniteur
     */
    private $idMoniteur;


    /**
     * Set note
     *
     * @param integer $note
     * @return Review
     */
    public function setNote($note)
    {
        $this->note = $note;

        return $this;
    }

    /**
     * Get note
     *
     * @return integer 
     */
    public function getNote()
    {
        return $this->note;
    }

    /**
     * Set nbrVote
     *
     * @param integer $nbrVote
     * @return Review
     */
    public function setNbrVote($nbrVote)
    {
        $this->nbrVote = $nbrVote;

        return $this;
    }

    /**
     * Get nbrVote
     *
     * @return integer 
     */
    public function getNbrVote()
    {
        return $this->nbrVote;
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

    /**
     * Set idMoniteur
     *
     * @param \Cdlr\codeBundle\Entity\Moniteur $idMoniteur
     * @return Review
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
}
