<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * LxCustomerDefaultcourses
 *
 * @ORM\Table(name="lx_customer_defaultcourses")
 * @ORM\Entity
 */
class LxCustomerDefaultcourses
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
     * @var \DateTime
     *
     * @ORM\Column(name="regUpdateDate", type="datetime", nullable=true)
     */
    private $regupdatedate;

    /**
     * @var integer
     *
     * @ORM\Column(name="regUpdateUserId", type="integer", nullable=true)
     */
    private $regupdateuserid;

    /**
     * @var integer
     *
     * @ORM\Column(name="customer_id", type="integer", nullable=true)
     */
    private $customerId;

    /**
     * @var integer
     *
     * @ORM\Column(name="campus_id", type="integer", nullable=true)
     */
    private $campusId;

    /**
     * @var integer
     *
     * @ORM\Column(name="course_id", type="integer", nullable=true)
     */
    private $courseId;

    /**
     * @var string
     *
     * @ORM\Column(name="courseName", type="string", length=255, nullable=true)
     */
    private $coursename;

    /**
     * @var string
     *
     * @ORM\Column(name="status", type="string", length=1, nullable=true)
     */
    private $status;

    /**
     * @var string
     *
     * @ORM\Column(name="type", type="string", length=45, nullable=true)
     */
    private $type;



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
     * @return LxCustomerDefaultcourses
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
     * @return LxCustomerDefaultcourses
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
     * Set regupdatedate
     *
     * @param \DateTime $regupdatedate
     *
     * @return LxCustomerDefaultcourses
     */
    public function setRegupdatedate($regupdatedate)
    {
        $this->regupdatedate = $regupdatedate;

        return $this;
    }

    /**
     * Get regupdatedate
     *
     * @return \DateTime
     */
    public function getRegupdatedate()
    {
        return $this->regupdatedate;
    }

    /**
     * Set regupdateuserid
     *
     * @param integer $regupdateuserid
     *
     * @return LxCustomerDefaultcourses
     */
    public function setRegupdateuserid($regupdateuserid)
    {
        $this->regupdateuserid = $regupdateuserid;

        return $this;
    }

    /**
     * Get regupdateuserid
     *
     * @return integer
     */
    public function getRegupdateuserid()
    {
        return $this->regupdateuserid;
    }

    /**
     * Set customerId
     *
     * @param integer $customerId
     *
     * @return LxCustomerDefaultcourses
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
     * Set campusId
     *
     * @param integer $campusId
     *
     * @return LxCustomerDefaultcourses
     */
    public function setCampusId($campusId)
    {
        $this->campusId = $campusId;

        return $this;
    }

    /**
     * Get campusId
     *
     * @return integer
     */
    public function getCampusId()
    {
        return $this->campusId;
    }

    /**
     * Set courseId
     *
     * @param integer $courseId
     *
     * @return LxCustomerDefaultcourses
     */
    public function setCourseId($courseId)
    {
        $this->courseId = $courseId;

        return $this;
    }

    /**
     * Get courseId
     *
     * @return integer
     */
    public function getCourseId()
    {
        return $this->courseId;
    }

    /**
     * Set coursename
     *
     * @param string $coursename
     *
     * @return LxCustomerDefaultcourses
     */
    public function setCoursename($coursename)
    {
        $this->coursename = $coursename;

        return $this;
    }

    /**
     * Get coursename
     *
     * @return string
     */
    public function getCoursename()
    {
        return $this->coursename;
    }

    /**
     * Set status
     *
     * @param string $status
     *
     * @return LxCustomerDefaultcourses
     */
    public function setStatus($status)
    {
        $this->status = $status;

        return $this;
    }

    /**
     * Get status
     *
     * @return string
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Set type
     *
     * @param string $type
     *
     * @return LxCustomerDefaultcourses
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
}
