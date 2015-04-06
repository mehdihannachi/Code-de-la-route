<?php

namespace Cdlr\codeBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Notification
 */
class Notification
{
    /**
     * @var string
     */
    private $message;

    /**
     * @var string
     */
    private $time;

    /**
     * @var integer
     */
    private $idDestination;

    /**
     * @var string
     */
    private $typeDestination;

    /**
     * @var integer
     */
    private $idSource;

    /**
     * @var integer
     */
    private $id;


    /**
     * Set message
     *
     * @param string $message
     * @return Notification
     */
    public function setMessage($message)
    {
        $this->message = $message;

        return $this;
    }

    /**
     * Get message
     *
     * @return string 
     */
    public function getMessage()
    {
        return $this->message;
    }

    /**
     * Set time
     *
     * @param string $time
     * @return Notification
     */
    public function setTime($time)
    {
        $this->time = $time;

        return $this;
    }

    /**
     * Get time
     *
     * @return string 
     */
    public function getTime()
    {
        return $this->time;
    }

    /**
     * Set idDestination
     *
     * @param integer $idDestination
     * @return Notification
     */
    public function setIdDestination($idDestination)
    {
        $this->idDestination = $idDestination;

        return $this;
    }

    /**
     * Get idDestination
     *
     * @return integer 
     */
    public function getIdDestination()
    {
        return $this->idDestination;
    }

    /**
     * Set typeDestination
     *
     * @param string $typeDestination
     * @return Notification
     */
    public function setTypeDestination($typeDestination)
    {
        $this->typeDestination = $typeDestination;

        return $this;
    }

    /**
     * Get typeDestination
     *
     * @return string 
     */
    public function getTypeDestination()
    {
        return $this->typeDestination;
    }

    /**
     * Set idSource
     *
     * @param integer $idSource
     * @return Notification
     */
    public function setIdSource($idSource)
    {
        $this->idSource = $idSource;

        return $this;
    }

    /**
     * Get idSource
     *
     * @return integer 
     */
    public function getIdSource()
    {
        return $this->idSource;
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
