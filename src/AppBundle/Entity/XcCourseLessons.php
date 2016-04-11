<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * XcCourseLessons
 *
 * @ORM\Table(name="xc_course_lessons", indexes={@ORM\Index(name="fk_course_id_idx", columns={"course_id"})})
 * @ORM\Entity
 */
class XcCourseLessons
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
     * @ORM\Column(name="lessonOrder", type="integer", nullable=true)
     */
    private $lessonorder;

    /**
     * @var string
     *
     * @ORM\Column(name="lessonName", type="string", length=255, nullable=true)
     */
    private $lessonname;

    /**
     * @var string
     *
     * @ORM\Column(name="lessonDescription", type="text", length=65535, nullable=true)
     */
    private $lessondescription;

    /**
     * @var string
     *
     * @ORM\Column(name="lessonImage", type="string", length=255, nullable=true)
     */
    private $lessonimage;

    /**
     * @var string
     *
     * @ORM\Column(name="lessonStatus", type="string", length=1, nullable=true)
     */
    private $lessonstatus;

    /**
     * @var \XcCourses
     *
     * @ORM\ManyToOne(targetEntity="XcCourses")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="course_id", referencedColumnName="id")
     * })
     */
    private $course;



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
     * @return XcCourseLessons
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
     * @return XcCourseLessons
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
     * @return XcCourseLessons
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
     * @return XcCourseLessons
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
     * Set lessonorder
     *
     * @param integer $lessonorder
     *
     * @return XcCourseLessons
     */
    public function setLessonorder($lessonorder)
    {
        $this->lessonorder = $lessonorder;

        return $this;
    }

    /**
     * Get lessonorder
     *
     * @return integer
     */
    public function getLessonorder()
    {
        return $this->lessonorder;
    }

    /**
     * Set lessonname
     *
     * @param string $lessonname
     *
     * @return XcCourseLessons
     */
    public function setLessonname($lessonname)
    {
        $this->lessonname = $lessonname;

        return $this;
    }

    /**
     * Get lessonname
     *
     * @return string
     */
    public function getLessonname()
    {
        return $this->lessonname;
    }

    /**
     * Set lessondescription
     *
     * @param string $lessondescription
     *
     * @return XcCourseLessons
     */
    public function setLessondescription($lessondescription)
    {
        $this->lessondescription = $lessondescription;

        return $this;
    }

    /**
     * Get lessondescription
     *
     * @return string
     */
    public function getLessondescription()
    {
        return $this->lessondescription;
    }

    /**
     * Set lessonimage
     *
     * @param string $lessonimage
     *
     * @return XcCourseLessons
     */
    public function setLessonimage($lessonimage)
    {
        $this->lessonimage = $lessonimage;

        return $this;
    }

    /**
     * Get lessonimage
     *
     * @return string
     */
    public function getLessonimage()
    {
        return $this->lessonimage;
    }

    /**
     * Set lessonstatus
     *
     * @param string $lessonstatus
     *
     * @return XcCourseLessons
     */
    public function setLessonstatus($lessonstatus)
    {
        $this->lessonstatus = $lessonstatus;

        return $this;
    }

    /**
     * Get lessonstatus
     *
     * @return string
     */
    public function getLessonstatus()
    {
        return $this->lessonstatus;
    }

    /**
     * Set course
     *
     * @param \AppBundle\Entity\XcCourses $course
     *
     * @return XcCourseLessons
     */
    public function setCourse(\AppBundle\Entity\XcCourses $course = null)
    {
        $this->course = $course;

        return $this;
    }

    /**
     * Get course
     *
     * @return \AppBundle\Entity\XcCourses
     */
    public function getCourse()
    {
        return $this->course;
    }
}
