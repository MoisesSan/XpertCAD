<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * XcUserActivecourses
 *
 * @ORM\Table(name="xc_user_activecourses", indexes={@ORM\Index(name="fk_active_course_id_idx", columns={"course_id"})})
 * @ORM\Entity
 */
class XcUserActivecourses
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
     * @ORM\Column(name="user_id", type="integer", nullable=true)
     */
    private $userId;

    /**
     * @var integer
     *
     * @ORM\Column(name="group_id", type="integer", nullable=true)
     */
    private $groupId;

    /**
     * @var string
     *
     * @ORM\Column(name="courseName", type="string", length=255, nullable=true)
     */
    private $coursename;

    /**
     * @var string
     *
     * @ORM\Column(name="courseProgress", type="decimal", precision=10, scale=2, nullable=true)
     */
    private $courseprogress;

    /**
     * @var string
     *
     * @ORM\Column(name="status", type="string", length=1, nullable=true)
     */
    private $status;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="startDate", type="datetime", nullable=true)
     */
    private $startdate;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="endDate", type="datetime", nullable=true)
     */
    private $enddate;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="finishDate", type="datetime", nullable=true)
     */
    private $finishdate;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="firstActivity", type="datetime", nullable=true)
     */
    private $firstactivity;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="lastActivity", type="datetime", nullable=true)
     */
    private $lastactivity;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="evalDate", type="datetime", nullable=true)
     */
    private $evaldate;

    /**
     * @var string
     *
     * @ORM\Column(name="evalTotal", type="decimal", precision=10, scale=2, nullable=true)
     */
    private $evaltotal;

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
     * @return XcUserActivecourses
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
     * @return XcUserActivecourses
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
     * Set userId
     *
     * @param integer $userId
     *
     * @return XcUserActivecourses
     */
    public function setUserId($userId)
    {
        $this->userId = $userId;

        return $this;
    }

    /**
     * Get userId
     *
     * @return integer
     */
    public function getUserId()
    {
        return $this->userId;
    }

    /**
     * Set groupId
     *
     * @param integer $groupId
     *
     * @return XcUserActivecourses
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
     * Set coursename
     *
     * @param string $coursename
     *
     * @return XcUserActivecourses
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
     * Set courseprogress
     *
     * @param string $courseprogress
     *
     * @return XcUserActivecourses
     */
    public function setCourseprogress($courseprogress)
    {
        $this->courseprogress = $courseprogress;

        return $this;
    }

    /**
     * Get courseprogress
     *
     * @return string
     */
    public function getCourseprogress()
    {
        return $this->courseprogress;
    }

    /**
     * Set status
     *
     * @param string $status
     *
     * @return XcUserActivecourses
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
     * Set startdate
     *
     * @param \DateTime $startdate
     *
     * @return XcUserActivecourses
     */
    public function setStartdate($startdate)
    {
        $this->startdate = $startdate;

        return $this;
    }

    /**
     * Get startdate
     *
     * @return \DateTime
     */
    public function getStartdate()
    {
        return $this->startdate;
    }

    /**
     * Set enddate
     *
     * @param \DateTime $enddate
     *
     * @return XcUserActivecourses
     */
    public function setEnddate($enddate)
    {
        $this->enddate = $enddate;

        return $this;
    }

    /**
     * Get enddate
     *
     * @return \DateTime
     */
    public function getEnddate()
    {
        return $this->enddate;
    }

    /**
     * Set finishdate
     *
     * @param \DateTime $finishdate
     *
     * @return XcUserActivecourses
     */
    public function setFinishdate($finishdate)
    {
        $this->finishdate = $finishdate;

        return $this;
    }

    /**
     * Get finishdate
     *
     * @return \DateTime
     */
    public function getFinishdate()
    {
        return $this->finishdate;
    }

    /**
     * Set firstactivity
     *
     * @param \DateTime $firstactivity
     *
     * @return XcUserActivecourses
     */
    public function setFirstactivity($firstactivity)
    {
        $this->firstactivity = $firstactivity;

        return $this;
    }

    /**
     * Get firstactivity
     *
     * @return \DateTime
     */
    public function getFirstactivity()
    {
        return $this->firstactivity;
    }

    /**
     * Set lastactivity
     *
     * @param \DateTime $lastactivity
     *
     * @return XcUserActivecourses
     */
    public function setLastactivity($lastactivity)
    {
        $this->lastactivity = $lastactivity;

        return $this;
    }

    /**
     * Get lastactivity
     *
     * @return \DateTime
     */
    public function getLastactivity()
    {
        return $this->lastactivity;
    }

    /**
     * Set evaldate
     *
     * @param \DateTime $evaldate
     *
     * @return XcUserActivecourses
     */
    public function setEvaldate($evaldate)
    {
        $this->evaldate = $evaldate;

        return $this;
    }

    /**
     * Get evaldate
     *
     * @return \DateTime
     */
    public function getEvaldate()
    {
        return $this->evaldate;
    }

    /**
     * Set evaltotal
     *
     * @param string $evaltotal
     *
     * @return XcUserActivecourses
     */
    public function setEvaltotal($evaltotal)
    {
        $this->evaltotal = $evaltotal;

        return $this;
    }

    /**
     * Get evaltotal
     *
     * @return string
     */
    public function getEvaltotal()
    {
        return $this->evaltotal;
    }

    /**
     * Set course
     *
     * @param \AppBundle\Entity\XcCourses $course
     *
     * @return XcUserActivecourses
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
