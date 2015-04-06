<?php

namespace Cdlr\codeBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Regions
 */
class Regions
{
    /**
     * @var string
     */
    private $nom;

    /**
     * @var float
     */
    private $longitude;

    /**
     * @var float
     */
    private $laltitude;

    /**
     * @var integer
     */
    private $id;


    /**
     * Set nom
     *
     * @param string $nom
     * @return Regions
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
     * Set longitude
     *
     * @param float $longitude
     * @return Regions
     */
    public function setLongitude($longitude)
    {
        $this->longitude = $longitude;

        return $this;
    }

    /**
     * Get longitude
     *
     * @return float 
     */
    public function getLongitude()
    {
        return $this->longitude;
    }

    /**
     * Set laltitude
     *
     * @param float $laltitude
     * @return Regions
     */
    public function setLaltitude($laltitude)
    {
        $this->laltitude = $laltitude;

        return $this;
    }

    /**
     * Get laltitude
     *
     * @return float 
     */
    public function getLaltitude()
    {
        return $this->laltitude;
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
