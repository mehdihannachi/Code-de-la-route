<?php

namespace Cdlr\codeBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Cdlr\codeBundle\Entity\Regions;

/**
 * AutoEcole
 *
 * @ORM\Table(name="auto_ecole", indexes={@ORM\Index(name="region_id", columns={"region_id"})})
 * @ORM\Entity
 */
class AutoEcole
{
    /**
     * @var integer
     *
     * @ORM\Column(name="autoecole_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $autoecoleId;

    /**
     * @var string
     *
     * @ORM\Column(name="nom_auto", type="string", length=30, nullable=false)
     */
    private $nomAuto;

    /**
     * @var string
     *
     * @ORM\Column(name="adresse", type="string", length=50, nullable=false)
     */
    private $adresse;

    /**
     * @var integer
     *
     * @ORM\Column(name="tel", type="integer", nullable=false)
     */
    private $tel;

    /**
     * @var \Regions
     *
     * @ORM\ManyToOne(targetEntity="Regions")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="region_id", referencedColumnName="id")
     * })
     */
    private $region;


//    /**
//     * @var \Cdlr\codeBundle\Entity\Regions
//     */
//    private $region2;
//

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
    public function getId()
    {
        return $this->autoecoleId;
    }
    
    public function getAutoecoleId()
    {
        return $this->autoecoleId;
    }

    public function getRegion() {
        return $this->region;
    }

    public function setRegion(Regions $region) {
        $this->region = $region;
    }


}
