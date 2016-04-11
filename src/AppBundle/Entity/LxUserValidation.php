<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * LxUserValidation
 *
 * @ORM\Table(name="lx_user_validation")
 * @ORM\Entity
 */
class LxUserValidation
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="regDate", type="datetime", nullable=false)
     */
    private $regdate;

    /**
     * @var integer
     *
     * @ORM\Column(name="regUserId", type="integer", nullable=true)
     */
    private $reguserid;

    /**
     * @var integer
     *
     * @ORM\Column(name="customer_id", type="integer", nullable=true)
     */
    private $customerId;

    /**
     * @var integer
     *
     * @ORM\Column(name="group_id", type="integer", nullable=true)
     */
    private $groupId;

    /**
     * @var string
     *
     * @ORM\Column(name="user_enrollment", type="string", length=100, nullable=true)
     */
    private $userEnrollment;

    /**
     * @var string
     *
     * @ORM\Column(name="user_email", type="string", length=100, nullable=true)
     */
    private $userEmail;



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
     * Set regdate
     *
     * @param \DateTime $regdate
     *
     * @return LxUserValidation
     */
    public function setRegdate($regdate)
    {
        $this->regdate = $regdate;

        return $this;
    }

    /**
     * Get regdate
     *
     * @return \DateTime
     */
    public function getRegdate()
    {
        return $this->regdate;
    }

    /**
     * Set reguserid
     *
     * @param integer $reguserid
     *
     * @return LxUserValidation
     */
    public function setReguserid($reguserid)
    {
        $this->reguserid = $reguserid;

        return $this;
    }

    /**
     * Get reguserid
     *
     * @return integer
     */
    public function getReguserid()
    {
        return $this->reguserid;
    }

    /**
     * Set customerId
     *
     * @param integer $customerId
     *
     * @return LxUserValidation
     */
    public function setCustomerId($customerId)
    {
        $this->customerId = $customerId;

        return $this;
    }

    /**
     * Get customerId
     *
     * @return integer
     */
    public function getCustomerId()
    {
        return $this->customerId;
    }

    /**
     * Set groupId
     *
     * @param integer $groupId
     *
     * @return LxUserValidation
     */
    public function setGroupId($groupId)
    {
        $this->groupId = $groupId;

        return $this;
    }

    /**
     * Get groupId
     *
     * @return integer
     */
    public function getGroupId()
    {
        return $this->groupId;
    }

    /**
     * Set userEnrollment
     *
     * @param string $userEnrollment
     *
     * @return LxUserValidation
     */
    public function setUserEnrollment($userEnrollment)
    {
        $this->userEnrollment = $userEnrollment;

        return $this;
    }

    /**
     * Get userEnrollment
     *
     * @return string
     */
    public function getUserEnrollment()
    {
        return $this->userEnrollment;
    }

    /**
     * Set userEmail
     *
     * @param string $userEmail
     *
     * @return LxUserValidation
     */
    public function setUserEmail($userEmail)
    {
        $this->userEmail = $userEmail;

        return $this;
    }

    /**
     * Get userEmail
     *
     * @return string
     */
    public function getUserEmail()
    {
        return $this->userEmail;
    }
}
