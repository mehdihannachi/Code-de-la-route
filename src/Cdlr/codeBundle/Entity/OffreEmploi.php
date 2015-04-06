<?php

namespace Cdlr\codeBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * OffreEmploi
 */
class OffreEmploi
{
    /**
     * @var string
     */
    private $titre;

    /**
     * @var string
     */
    private $description;

    /**
     * @var integer
     */
    private $annonceId;

    /**
     * @var \Cdlr\codeBundle\Entity\AutoEcole
     */
    private $idOwner;


    /**
     * Set titre
     *
     * @param string $titre
     * @return OffreEmploi
     */
    public function setTitre($titre)
    {
        $this->titre = $titre;

        return $this;
    }

    /**
     * Get titre
     *
     * @return string 
     */
    public function getTitre()
    {
        return $this->titre;
    }

    /**
     * Set description
     *
     * @param string $description
     * @return OffreEmploi
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get description
     *
     * @return string 
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Get annonceId
     *
     * @return integer 
     */
    public function getAnnonceId()
    {
        return $this->annonceId;
    }

    /**
     * Set idOwner
     *
     * @param \Cdlr\codeBundle\Entity\AutoEcole $idOwner
     * @return OffreEmploi
     */
    public function setIdOwner(\Cdlr\codeBundle\Entity\AutoEcole $idOwner = null)
    {
        $this->idOwner = $idOwner;

        return $this;
    }

    /**
     * Get idOwner
     *
     * @return \Cdlr\codeBundle\Entity\AutoEcole 
     */
    public function getIdOwner()
    {
        return $this->idOwner;
    }
}
