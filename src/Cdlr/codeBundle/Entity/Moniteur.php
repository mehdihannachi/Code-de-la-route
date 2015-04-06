<?php

namespace Cdlr\codeBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Moniteur
 */
class Moniteur
{
    /**
     * @var string
     */
    private $nom;

    /**
     * @var string
     */
    private $prenom;

    /**
     * @var integer
     */
    private $cin;

    /**
     * @var \DateTime
     */
    private $dateNaissance;

    /**
     * @var integer
     */
    private $tel;

    /**
     * @var string
     */
    private $region;

    /**
     * @var string
     */
    private $mail;

    /**
     * @var string
     */
    private $pwd;

    /**
     * @var integer
     */
    private $id;

    /**
     * @var \Cdlr\codeBundle\Entity\AutoEcole
     */
    private $autoecole;


    /**
     * Set nom
     *
     * @param string $nom
     * @return Moniteur
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
     * Set prenom
     *
     * @param string $prenom
     * @return Moniteur
     */
    public function setPrenom($prenom)
    {
        $this->prenom = $prenom;

        return $this;
    }

    /**
     * Get prenom
     *
     * @return string 
     */
    public function getPrenom()
    {
        return $this->prenom;
    }

    /**
     * Set cin
     *
     * @param integer $cin
     * @return Moniteur
     */
    public function setCin($cin)
    {
        $this->cin = $cin;

        return $this;
    }

    /**
     * Get cin
     *
     * @return integer 
     */
    public function getCin()
    {
        return $this->cin;
    }

    /**
     * Set dateNaissance
     *
     * @param \DateTime $dateNaissance
     * @return Moniteur
     */
    public function setDateNaissance($dateNaissance)
    {
        $this->dateNaissance = $dateNaissance;

        return $this;
    }

    /**
     * Get dateNaissance
     *
     * @return \DateTime 
     */
    public function getDateNaissance()
    {
        return $this->dateNaissance;
    }

    /**
     * Set tel
     *
     * @param integer $tel
     * @return Moniteur
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
     * Set region
     *
     * @param string $region
     * @return Moniteur
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
     * Set mail
     *
     * @param string $mail
     * @return Moniteur
     */
    public function setMail($mail)
    {
        $this->mail = $mail;

        return $this;
    }

    /**
     * Get mail
     *
     * @return string 
     */
    public function getMail()
    {
        return $this->mail;
    }

    /**
     * Set pwd
     *
     * @param string $pwd
     * @return Moniteur
     */
    public function setPwd($pwd)
    {
        $this->pwd = $pwd;

        return $this;
    }

    /**
     * Get pwd
     *
     * @return string 
     */
    public function getPwd()
    {
        return $this->pwd;
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
     * Set autoecole
     *
     * @param \Cdlr\codeBundle\Entity\AutoEcole $autoecole
     * @return Moniteur
     */
    public function setAutoecole(\Cdlr\codeBundle\Entity\AutoEcole $autoecole = null)
    {
        $this->autoecole = $autoecole;

        return $this;
    }

    /**
     * Get autoecole
     *
     * @return \Cdlr\codeBundle\Entity\AutoEcole 
     */
    public function getAutoecole()
    {
        return $this->autoecole;
    }
    public function __toString() {
                return (String)$this->id;
                return (String)$this->autoecole;

        
    }

}
