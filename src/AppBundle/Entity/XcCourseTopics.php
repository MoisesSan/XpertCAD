<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * XcCourseTopics
 *
 * @ORM\Table(name="xc_course_topics", indexes={@ORM\Index(name="fk_lesson_id_idx", columns={"lesson_id"})})
 * @ORM\Entity
 */
class XcCourseTopics
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
     * @ORM\Column(name="topicOrder", type="integer", nullable=true)
     */
    private $topicorder;

    /**
     * @var string
     *
     * @ORM\Column(name="topicName", type="string", length=255, nullable=true)
     */
    private $topicname;

    /**
     * @var string
     *
     * @ORM\Column(name="topicDescription", type="text", length=65535, nullable=true)
     */
    private $topicdescription;

    /**
     * @var string
     *
     * @ORM\Column(name="topicType", type="string", length=255, nullable=true)
     */
    private $topictype;

    /**
     * @var string
     *
     * @ORM\Column(name="topicImage", type="string", length=255, nullable=true)
     */
    private $topicimage;

    /**
     * @var string
     *
     * @ORM\Column(name="topicFileName", type="string", length=255, nullable=true)
     */
    private $topicfilename;

    /**
     * @var string
     *
     * @ORM\Column(name="topicFileSize", type="string", length=50, nullable=true)
     */
    private $topicfilesize;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="topicVideoLength", type="time", nullable=true)
     */
    private $topicvideolength;

    /**
     * @var string
     *
     * @ORM\Column(name="topicStatus", type="string", length=1, nullable=true)
     */
    private $topicstatus;

    /**
     * @var \XcCourseLessons
     *
     * @ORM\ManyToOne(targetEntity="XcCourseLessons")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="lesson_id", referencedColumnName="id")
     * })
     */
    private $lesson;



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
     * @return XcCourseTopics
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
     * @return XcCourseTopics
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
     * @return XcCourseTopics
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
     * @return XcCourseTopics
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
     * Set topicorder
     *
     * @param integer $topicorder
     *
     * @return XcCourseTopics
     */
    public function setTopicorder($topicorder)
    {
        $this->topicorder = $topicorder;

        return $this;
    }

    /**
     * Get topicorder
     *
     * @return integer
     */
    public function getTopicorder()
    {
        return $this->topicorder;
    }

    /**
     * Set topicname
     *
     * @param string $topicname
     *
     * @return XcCourseTopics
     */
    public function setTopicname($topicname)
    {
        $this->topicname = $topicname;

        return $this;
    }

    /**
     * Get topicname
     *
     * @return string
     */
    public function getTopicname()
    {
        return $this->topicname;
    }

    /**
     * Set topicdescription
     *
     * @param string $topicdescription
     *
     * @return XcCourseTopics
     */
    public function setTopicdescription($topicdescription)
    {
        $this->topicdescription = $topicdescription;

        return $this;
    }

    /**
     * Get topicdescription
     *
     * @return string
     */
    public function getTopicdescription()
    {
        return $this->topicdescription;
    }

    /**
     * Set topictype
     *
     * @param string $topictype
     *
     * @return XcCourseTopics
     */
    public function setTopictype($topictype)
    {
        $this->topictype = $topictype;

        return $this;
    }

    /**
     * Get topictype
     *
     * @return string
     */
    public function getTopictype()
    {
        return $this->topictype;
    }

    /**
     * Set topicimage
     *
     * @param string $topicimage
     *
     * @return XcCourseTopics
     */
    public function setTopicimage($topicimage)
    {
        $this->topicimage = $topicimage;

        return $this;
    }

    /**
     * Get topicimage
     *
     * @return string
     */
    public function getTopicimage()
    {
        return $this->topicimage;
    }

    /**
     * Set topicfilename
     *
     * @param string $topicfilename
     *
     * @return XcCourseTopics
     */
    public function setTopicfilename($topicfilename)
    {
        $this->topicfilename = $topicfilename;

        return $this;
    }

    /**
     * Get topicfilename
     *
     * @return string
     */
    public function getTopicfilename()
    {
        return $this->topicfilename;
    }

    /**
     * Set topicfilesize
     *
     * @param string $topicfilesize
     *
     * @return XcCourseTopics
     */
    public function setTopicfilesize($topicfilesize)
    {
        $this->topicfilesize = $topicfilesize;

        return $this;
    }

    /**
     * Get topicfilesize
     *
     * @return string
     */
    public function getTopicfilesize()
    {
        return $this->topicfilesize;
    }

    /**
     * Set topicvideolength
     *
     * @param \DateTime $topicvideolength
     *
     * @return XcCourseTopics
     */
    public function setTopicvideolength($topicvideolength)
    {
        $this->topicvideolength = $topicvideolength;

        return $this;
    }

    /**
     * Get topicvideolength
     *
     * @return \DateTime
     */
    public function getTopicvideolength()
    {
        return $this->topicvideolength;
    }

    /**
     * Set topicstatus
     *
     * @param string $topicstatus
     *
     * @return XcCourseTopics
     */
    public function setTopicstatus($topicstatus)
    {
        $this->topicstatus = $topicstatus;

        return $this;
    }

    /**
     * Get topicstatus
     *
     * @return string
     */
    public function getTopicstatus()
    {
        return $this->topicstatus;
    }

    /**
     * Set lesson
     *
     * @param \AppBundle\Entity\XcCourseLessons $lesson
     *
     * @return XcCourseTopics
     */
    public function setLesson(\AppBundle\Entity\XcCourseLessons $lesson = null)
    {
        $this->lesson = $lesson;

        return $this;
    }

    /**
     * Get lesson
     *
     * @return \AppBundle\Entity\XcCourseLessons
     */
    public function getLesson()
    {
        return $this->lesson;
    }
}
