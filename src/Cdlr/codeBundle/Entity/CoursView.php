<?php

namespace Cdlr\codeBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CoursView
 */
class CoursView
{
    /**
     * @var float
     */
    private $note;

    /**
     * @var integer
     */
    private $id;

    /**
     * @var \Cdlr\codeBundle\Entity\Cours
     */
    private $cours;


    /**
     * Set note
     *
     * @param float $note
     * @return CoursView
     */
    public function setNote($note)
    {
        $this->note = $note;

        return $this;
    }

    /**
     * Get note
     *
     * @return float 
     */
    public function getNote()
    {
        return $this->note;
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
     * Set cours
     *
     * @param \Cdlr\codeBundle\Entity\Cours $cours
     * @return CoursView
     */
    public function setCours(\Cdlr\codeBundle\Entity\Cours $cours = null)
    {
        $this->cours = $cours;

        return $this;
    }

    /**
     * Get cours
     *
     * @return \Cdlr\codeBundle\Entity\Cours 
     */
    public function getCours()
    {
        return $this->cours;
    }
    public function __toString() {
               return (String) $this->id;

    }
}
