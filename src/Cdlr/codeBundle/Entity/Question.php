<?php

namespace Cdlr\codeBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Question
 *
 * @ORM\Table(name="question", indexes={@ORM\Index(name="IDX_B6F7494E1E5D0459", columns={"test_id"})})
 * @ORM\Entity
 */
class Question
{
    /**
     * @var integer
     *
     * @ORM\Column(name="question_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $questionId;

    /**
     * @var string
     *
     * @ORM\Column(name="contenu", type="text", length=65535, nullable=false)
     */
    private $contenu;

    /**
     * @var string
     *
     * @ORM\Column(name="reponse1", type="string", length=30, nullable=false)
     */
    private $reponse1;

    /**
     * @var string
     *
     * @ORM\Column(name="reponse2", type="string", length=30, nullable=false)
     */
    private $reponse2;

    /**
     * @var string
     *
     * @ORM\Column(name="reponse3", type="string", length=30, nullable=true)
     */
    private $reponse3;

    /**
     * @var string
     *
     * @ORM\Column(name="bonne_reponse", type="string", length=30, nullable=false)
     */
    private $bonneReponse;

    /**
     * @var string
     *
     * @ORM\Column(name="image", type="text", length=65535, nullable=false)
     */
    private $image;

    /**
     * @var string
     *
     * @ORM\Column(name="type", type="string", length=50, nullable=false)
     */
    private $type;

    /**
     * @var \Test
     *
     * @ORM\ManyToOne(targetEntity="Test")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="test_id", referencedColumnName="test_id")
     * })
     */
    private $test;



    /**
     * Set contenu
     *
     * @param string $contenu
     * @return Question
     */
    public function setContenu($contenu)
    {
        $this->contenu = $contenu;

        return $this;
    }

    /**
     * Get contenu
     *
     * @return string 
     */
    public function getContenu()
    {
        return $this->contenu;
    }

    /**
     * Set reponse1
     *
     * @param string $reponse1
     * @return Question
     */
    public function setReponse1($reponse1)
    {
        $this->reponse1 = $reponse1;

        return $this;
    }

    /**
     * Get reponse1
     *
     * @return string 
     */
    public function getReponse1()
    {
        return $this->reponse1;
    }

    /**
     * Set reponse2
     *
     * @param string $reponse2
     * @return Question
     */
    public function setReponse2($reponse2)
    {
        $this->reponse2 = $reponse2;

        return $this;
    }

    /**
     * Get reponse2
     *
     * @return string 
     */
    public function getReponse2()
    {
        return $this->reponse2;
    }

    /**
     * Set reponse3
     *
     * @param string $reponse3
     * @return Question
     */
    public function setReponse3($reponse3)
    {
        $this->reponse3 = $reponse3;

        return $this;
    }

    /**
     * Get reponse3
     *
     * @return string 
     */
    public function getReponse3()
    {
        return $this->reponse3;
    }

    /**
     * Set bonneReponse
     *
     * @param string $bonneReponse
     * @return Question
     */
    public function setBonneReponse($bonneReponse)
    {
        $this->bonneReponse = $bonneReponse;

        return $this;
    }

    /**
     * Get bonneReponse
     *
     * @return string 
     */
    public function getBonneReponse()
    {
        return $this->bonneReponse;
    }

    /**
     * Set image
     *
     * @param string $image
     * @return Question
     */
    public function setImage($image)
    {
        $this->image = $image;

        return $this;
    }

    /**
     * Get image
     *
     * @return string 
     */
    public function getImage()
    {
        return $this->image;
    }

    /**
     * Set type
     *
     * @param string $type
     * @return Question
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
     * Get questionId
     *
     * @return integer 
     */
    public function getQuestionId()
    {
        return $this->questionId;
    }

    /**
     * Set test
     *
     * @param \Cdlr\codeBundle\Entity\Test $test
     * @return Question
     */
    public function setTest(\Cdlr\codeBundle\Entity\Test $test = null)
    {
        $this->test = $test;

        return $this;
    }

    /**
     * Get test
     *
     * @return \Cdlr\codeBundle\Entity\Test 
     */
    public function getTest()
    {
        return $this->test;
    }
}
