<?php

namespace Cdlr\codeBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Examen
 */
class Examen
{
    /**
     * @var string
     */
    private $nom;

    /**
     * @var string
     */
    private $type;

    /**
     * @var integer
     */
    private $examenId;


    /**
     * Set nom
     *
     * @param string $nom
     * @return Examen
     */
    public function setNom($nom)
    {
        $this->nom = $nom;

        return $this;
    }

    /**
     * Get nom
     *
     * @return string 
     */
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * Set type
     *
     * @param string $type
     * @return Examen
     */
    public function setType($type)
    {
        $this->type = $type;

        return $this;
    }

    /**
     * Get type
     *
     * @return string 
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Get examenId
     *
     * @return integer 
     */
    public function getExamenId()
    {
        return $this->examenId;
    }
}
