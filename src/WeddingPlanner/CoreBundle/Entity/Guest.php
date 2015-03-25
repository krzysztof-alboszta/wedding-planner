<?php

namespace WeddingPlanner\CoreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Guest
 */
class Guest
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $firstName;

    /**
     * @var string
     */
    private $lastName;

    /**
     * @var integer
     */
    private $category;

    /**
     * @var integer
     */
    private $invitationStatus;

    /**
     *
     * @var boolean
     */
    private $response;

    /**
     *
     * @var boolean
     */
    private $needTransport;


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
     * Set firstName
     *
     * @param string $firstName
     * @return Guest
     */
    public function setFirstName($firstName)
    {
        $this->firstName = $firstName;

        return $this;
    }

    /**
     * Get firstName
     *
     * @return string 
     */
    public function getFirstName()
    {
        return $this->firstName;
    }

    /**
     * Set lastName
     *
     * @param string $lastName
     * @return Guest
     */
    public function setLastName($lastName)
    {
        $this->lastName = $lastName;

        return $this;
    }

    /**
     * Get lastName
     *
     * @return string 
     */
    public function getLastName()
    {
        return $this->lastName;
    }

    /**
     * Set category
     *
     * @param integer $category
     * @return Guest
     */
    public function setCategory($category)
    {
        $this->category = $category;

        return $this;
    }

    /**
     * Get category
     *
     * @return integer 
     */
    public function getCategory()
    {
        return $this->category;
    }

    /**
     * Set invitationStatus
     *
     * @param integer $invitationStatus
     * @return Guest
     */
    public function setInvitationStatus($invitationStatus)
    {
        $this->invitationStatus = $invitationStatus;

        return $this;
    }

    /**
     * Get invitationStatus
     *
     * @return integer 
     */
    public function getInvitationStatus()
    {
        return $this->invitationStatus;
    }

    function getResponse()
    {
        return $this->response;
    }

    function getNeedTransport()
    {
        return $this->needTransport;
    }

    function setResponse($response)
    {
        $this->response = $response;
    }

    function setNeedTransport($needTransport)
    {
        $this->needTransport = $needTransport;
    }


}
