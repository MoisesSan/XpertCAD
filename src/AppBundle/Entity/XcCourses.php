<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * XcCourses
 *
 * @ORM\Table(name="xc_courses")
 * @ORM\Entity
 */
class XcCourses
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
     * @var string
     *
     * @ORM\Column(name="courseName", type="string", length=255, nullable=true)
     */
    private $coursename;

    /**
     * @var string
     *
     * @ORM\Column(name="courseDescription", type="string", length=255, nullable=true)
     */
    private $coursedescription;

    /**
     * @var integer
     *
     * @ORM\Column(name="courseDuration", type="integer", nullable=true)
     */
    private $courseduration;

    /**
     * @var integer
     *
     * @ORM\Column(name="courseValidity", type="integer", nullable=true)
     */
    private $coursevalidity;

    /**
     * @var string
     *
     * @ORM\Column(name="coursePrerequisites", type="text", length=65535, nullable=true)
     */
    private $courseprerequisites;

    /**
     * @var string
     *
     * @ORM\Column(name="courseObjectives", type="text", length=65535, nullable=true)
     */
    private $courseobjectives;

    /**
     * @var string
     *
     * @ORM\Column(name="priceMXGeneral", type="string", length=50, nullable=true)
     */
    private $pricemxgeneral;

    /**
     * @var string
     *
     * @ORM\Column(name="priceMXProf", type="string", length=50, nullable=true)
     */
    private $pricemxprof;

    /**
     * @var string
     *
     * @ORM\Column(name="priceMXStudent", type="string", length=50, nullable=true)
     */
    private $pricemxstudent;

    /**
     * @var string
     *
     * @ORM\Column(name="priceMXEngineer", type="string", length=50, nullable=true)
     */
    private $pricemxengineer;

    /**
     * @var string
     *
     * @ORM\Column(name="priceUSGeneral", type="string", length=50, nullable=true)
     */
    private $priceusgeneral;

    /**
     * @var string
     *
     * @ORM\Column(name="priceUSProf", type="string", length=50, nullable=true)
     */
    private $priceusprof;

    /**
     * @var string
     *
     * @ORM\Column(name="priceUSStudent", type="string", length=50, nullable=true)
     */
    private $priceusstudent;

    /**
     * @var string
     *
     * @ORM\Column(name="priceUSEngineer", type="string", length=50, nullable=true)
     */
    private $priceusengineer;

    /**
     * @var string
     *
     * @ORM\Column(name="courseStatus", type="string", length=1, nullable=true)
     */
    private $coursestatus;

    /**
     * @var string
     *
     * @ORM\Column(name="couseImage", type="string", length=255, nullable=true)
     */
    private $couseimage;



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
     * @return XcCourses
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
     * @return XcCourses
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
     * @return XcCourses
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
     * @return XcCourses
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
     * Set coursename
     *
     * @param string $coursename
     *
     * @return XcCourses
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
     * Set coursedescription
     *
     * @param string $coursedescription
     *
     * @return XcCourses
     */
    public function setCoursedescription($coursedescription)
    {
        $this->coursedescription = $coursedescription;

        return $this;
    }

    /**
     * Get coursedescription
     *
     * @return string
     */
    public function getCoursedescription()
    {
        return $this->coursedescription;
    }

    /**
     * Set courseduration
     *
     * @param integer $courseduration
     *
     * @return XcCourses
     */
    public function setCourseduration($courseduration)
    {
        $this->courseduration = $courseduration;

        return $this;
    }

    /**
     * Get courseduration
     *
     * @return integer
     */
    public function getCourseduration()
    {
        return $this->courseduration;
    }

    /**
     * Set coursevalidity
     *
     * @param integer $coursevalidity
     *
     * @return XcCourses
     */
    public function setCoursevalidity($coursevalidity)
    {
        $this->coursevalidity = $coursevalidity;

        return $this;
    }

    /**
     * Get coursevalidity
     *
     * @return integer
     */
    public function getCoursevalidity()
    {
        return $this->coursevalidity;
    }

    /**
     * Set courseprerequisites
     *
     * @param string $courseprerequisites
     *
     * @return XcCourses
     */
    public function setCourseprerequisites($courseprerequisites)
    {
        $this->courseprerequisites = $courseprerequisites;

        return $this;
    }

    /**
     * Get courseprerequisites
     *
     * @return string
     */
    public function getCourseprerequisites()
    {
        return $this->courseprerequisites;
    }

    /**
     * Set courseobjectives
     *
     * @param string $courseobjectives
     *
     * @return XcCourses
     */
    public function setCourseobjectives($courseobjectives)
    {
        $this->courseobjectives = $courseobjectives;

        return $this;
    }

    /**
     * Get courseobjectives
     *
     * @return string
     */
    public function getCourseobjectives()
    {
        return $this->courseobjectives;
    }

    /**
     * Set pricemxgeneral
     *
     * @param string $pricemxgeneral
     *
     * @return XcCourses
     */
    public function setPricemxgeneral($pricemxgeneral)
    {
        $this->pricemxgeneral = $pricemxgeneral;

        return $this;
    }

    /**
     * Get pricemxgeneral
     *
     * @return string
     */
    public function getPricemxgeneral()
    {
        return $this->pricemxgeneral;
    }

    /**
     * Set pricemxprof
     *
     * @param string $pricemxprof
     *
     * @return XcCourses
     */
    public function setPricemxprof($pricemxprof)
    {
        $this->pricemxprof = $pricemxprof;

        return $this;
    }

    /**
     * Get pricemxprof
     *
     * @return string
     */
    public function getPricemxprof()
    {
        return $this->pricemxprof;
    }

    /**
     * Set pricemxstudent
     *
     * @param string $pricemxstudent
     *
     * @return XcCourses
     */
    public function setPricemxstudent($pricemxstudent)
    {
        $this->pricemxstudent = $pricemxstudent;

        return $this;
    }

    /**
     * Get pricemxstudent
     *
     * @return string
     */
    public function getPricemxstudent()
    {
        return $this->pricemxstudent;
    }

    /**
     * Set pricemxengineer
     *
     * @param string $pricemxengineer
     *
     * @return XcCourses
     */
    public function setPricemxengineer($pricemxengineer)
    {
        $this->pricemxengineer = $pricemxengineer;

        return $this;
    }

    /**
     * Get pricemxengineer
     *
     * @return string
     */
    public function getPricemxengineer()
    {
        return $this->pricemxengineer;
    }

    /**
     * Set priceusgeneral
     *
     * @param string $priceusgeneral
     *
     * @return XcCourses
     */
    public function setPriceusgeneral($priceusgeneral)
    {
        $this->priceusgeneral = $priceusgeneral;

        return $this;
    }

    /**
     * Get priceusgeneral
     *
     * @return string
     */
    public function getPriceusgeneral()
    {
        return $this->priceusgeneral;
    }

    /**
     * Set priceusprof
     *
     * @param string $priceusprof
     *
     * @return XcCourses
     */
    public function setPriceusprof($priceusprof)
    {
        $this->priceusprof = $priceusprof;

        return $this;
    }

    /**
     * Get priceusprof
     *
     * @return string
     */
    public function getPriceusprof()
    {
        return $this->priceusprof;
    }

    /**
     * Set priceusstudent
     *
     * @param string $priceusstudent
     *
     * @return XcCourses
     */
    public function setPriceusstudent($priceusstudent)
    {
        $this->priceusstudent = $priceusstudent;

        return $this;
    }

    /**
     * Get priceusstudent
     *
     * @return string
     */
    public function getPriceusstudent()
    {
        return $this->priceusstudent;
    }

    /**
     * Set priceusengineer
     *
     * @param string $priceusengineer
     *
     * @return XcCourses
     */
    public function setPriceusengineer($priceusengineer)
    {
        $this->priceusengineer = $priceusengineer;

        return $this;
    }

    /**
     * Get priceusengineer
     *
     * @return string
     */
    public function getPriceusengineer()
    {
        return $this->priceusengineer;
    }

    /**
     * Set coursestatus
     *
     * @param string $coursestatus
     *
     * @return XcCourses
     */
    public function setCoursestatus($coursestatus)
    {
        $this->coursestatus = $coursestatus;

        return $this;
    }

    /**
     * Get coursestatus
     *
     * @return string
     */
    public function getCoursestatus()
    {
        return $this->coursestatus;
    }

    /**
     * Set couseimage
     *
     * @param string $couseimage
     *
     * @return XcCourses
     */
    public function setCouseimage($couseimage)
    {
        $this->couseimage = $couseimage;

        return $this;
    }

    /**
     * Get couseimage
     *
     * @return string
     */
    public function getCouseimage()
    {
        return $this->couseimage;
    }
}
