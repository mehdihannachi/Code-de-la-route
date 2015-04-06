<?php

namespace Cdlr\codeBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Cours
 */
class Cours
{
    /**
     * @var string
     */
    private $nom;

    /**
     * @var string
     */
    private $categorie;

    /**
     * @var string
     */
    private $url;

    /**
     * @var integer
     */
    private $coursId;


    /**
     * Set nom
     *
     * @param string $nom
     * @return Cours
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
     * Set categorie
     *
     * @param string $categorie
     * @return Cours
     */
    public function setCategorie($categorie)
    {
        $this->categorie = $categorie;

        return $this;
    }

    /**
     * Get categorie
     *
     * @return string 
     */
    public function getCategorie()
    {
        return $this->categorie;
    }

    /**
     * Set url
     *
     * @param string $url
     * @return Cours
     */
    public function setUrl($url)
    {
        $this->url = $url;

        return $this;
    }

    /**
     * Get url
     *
     * @return string 
     */
    public function getUrl()
    {
        return $this->url;
    }

    /**
     * Get coursId
     *
     * @return integer 
     */
    public function getCoursId()
    {
        return $this->coursId;
    }
    public function __toString() {
                       return (String) $this->coursId;

    }


}
