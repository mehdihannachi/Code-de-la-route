<?php

namespace Cdlr\codeBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * VenteVoiture
 */
class VenteVoiture
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
     * @var float
     */
    private $prix;

    /**
     * @var float
     */
    private $kilometrage;

    /**
     * @var string
     */
    private $marque;

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
     * @return VenteVoiture
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
     * @return VenteVoiture
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
     * Set prix
     *
     * @param float $prix
     * @return VenteVoiture
     */
    public function setPrix($prix)
    {
        $this->prix = $prix;

        return $this;
    }

    /**
     * Get prix
     *
     * @return float 
     */
    public function getPrix()
    {
        return $this->prix;
    }

    /**
     * Set kilometrage
     *
     * @param float $kilometrage
     * @return VenteVoiture
     */
    public function setKilometrage($kilometrage)
    {
        $this->kilometrage = $kilometrage;

        return $this;
    }

    /**
     * Get kilometrage
     *
     * @return float 
     */
    public function getKilometrage()
    {
        return $this->kilometrage;
    }

    /**
     * Set marque
     *
     * @param string $marque
     * @return VenteVoiture
     */
    public function setMarque($marque)
    {
        $this->marque = $marque;

        return $this;
    }

    /**
     * Get marque
     *
     * @return string 
     */
    public function getMarque()
    {
        return $this->marque;
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
     * @return VenteVoiture
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
