<?php

namespace Cdlr\codeBundle\Entity;

use Symfony\Component\Validator\Constraints as Assert;
use Doctrine\ORM\Mapping as ORM;

/**
 * Cours
 */
class Cours {

    /**
     * @var string
     */
    private $nom;

    /**
     * @var string
     */
    private $categorie;

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
    public function setNom($nom) {
        $this->nom = $nom;

        return $this;
    }

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    public $path;

    /**
     * Get nom
     *
     * @return string 
     */
    public function getNom() {
        return $this->nom;
    }

    /**
     * Set categorie
     *
     * @param string $categorie
     * @return Cours
     */
    public function setCategorie($categorie) {
        $this->categorie = $categorie;

        return $this;
    }

    /**
     * Get categorie
     *
     * @return string 
     */
    public function getCategorie() {
        return $this->categorie;
    }

    function getFile() {
        return $this->file;
    }

    function setFile($file) {
        $this->file = $file;
    }

    /**
     * Set path
     *
     * @param string $path
     * @return Cours
     */
    public function setPath($path) {
        $this->path = $path;

        return $this;
    }

    /**
     * Get path
     *
     * @return string 
     */
    public function getPath() {
        return $this->path;
    }

    /**
     * Get coursId
     *
     * @return integer 
     */
    public function getCoursId() {
        return $this->coursId;
    }

    public function __toString() {
        return (String) $this->coursId;
    }

    /**
     * @Assert\File(maxSize="6000000")
     */
    private $file;

    public function getAbsolutePath() {
        return null === $this->path ? null : $this->getUploadRootDir() . '/' . $this->path;
    }

    public function getWebPath() {
        return null === $this->path ? null : $this->getUploadDir() . '/' . $this->path;
    }

    protected function getUploadRootDir() {
        // the absolute directory path where uploaded
        // documents should be saved
        return __DIR__ . '/../../../../web/' . $this->getUploadDir();
    }

    protected function getUploadDir() {
        // get rid of the __DIR__ so it doesn't screw up
        // when displaying uploaded doc/image in the view.
        return 'uploads/documents';
    }

    public function upload() {
        // the file property can be empty if the field is not required
        if (null === $this->getFile()) {
            return;
        }

        // use the original file name here but you should
        // sanitize it at least to avoid any security issues
        // move takes the target directory and then the
        // target filename to move to
        $this->getFile()->move(
                $this->getUploadRootDir(), $this->getFile()->getClientOriginalName()
        );

        // set the path property to the filename where you've saved the file
        $this->path = $this->getFile()->getClientOriginalName();

        // clean up the file property as you won't need it anymore
        $this->file = null;
    }

}
