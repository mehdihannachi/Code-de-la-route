<?php

namespace Cdlr\codeBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * AutoEcole
 */
class AutoEcole
{
    /**
     * @var string
     */
    private $nomAuto;

    /**
     * @var string
     */
    private $region;

    /**
     * @var string
     */
    private $adresse;

    /**
     * @var integer
     */
    private $tel;

    /**
     * @var integer
     */
    private $autoecoleId;


    /**
     * Set nomAuto
     *
     * @param string $nomAuto
     * @return AutoEcole
     */
    public function setNomAuto($nomAuto)
    {
        $this->nomAuto = $nomAuto;

        return $this;
    }

    /**
     * Get nomAuto
     *
     * @return string 
     */
    public function getNomAuto()
    {
        return $this->nomAuto;
    }

    /**
     * Set region
     *
     * @param string $region
     * @return AutoEcole
     */
    public function setRegion($region)
    {
        $this->region = $region;

        return $this;
    }

    /**
     * Get region
     *
     * @return string 
     */
    public function getRegion()
    {
        return $this->region;
    }

    /**
     * Set adresse
     *
     * @param string $adresse
     * @return AutoEcole
     */
    public function setAdresse($adresse)
    {
        $this->adresse = $adresse;

        return $this;
    }

    /**
     * Get adresse
     *
     * @return string 
     */
    public function getAdresse()
    {
        return $this->adresse;
    }

    /**
     * Set tel
     *
     * @param integer $tel
     * @return AutoEcole
     */
    public function setTel($tel)
    {
        $this->tel = $tel;

        return $this;
    }

    /**
     * Get tel
     *
     * @return integer 
     */
    public function getTel()
    {
        return $this->tel;
    }

    /**
     * Get autoecoleId
     *
     * @return integer 
     */
    public function getAutoecoleId()
    {
        return $this->autoecoleId;
    }
    public function __toString() {
                    return (string) $this->getAutoecoleId();

    }

}
