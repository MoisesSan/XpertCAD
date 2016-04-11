<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * XcCourseFiles
 *
 * @ORM\Table(name="xc_course_files", indexes={@ORM\Index(name="fk_topic_id_idx", columns={"topic_id"})})
 * @ORM\Entity
 */
class XcCourseFiles
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
     * @ORM\Column(name="fileName", type="string", length=255, nullable=true)
     */
    private $filename;

    /**
     * @var string
     *
     * @ORM\Column(name="fileDescription", type="text", length=65535, nullable=true)
     */
    private $filedescription;

    /**
     * @var string
     *
     * @ORM\Column(name="fileFileName", type="string", length=255, nullable=true)
     */
    private $filefilename;

    /**
     * @var string
     *
     * @ORM\Column(name="fileStatus", type="string", length=1, nullable=true)
     */
    private $filestatus;

    /**
     * @var \XcCourseTopics
     *
     * @ORM\ManyToOne(targetEntity="XcCourseTopics")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="topic_id", referencedColumnName="id")
     * })
     */
    private $topic;



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
     * @return XcCourseFiles
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
     * @return XcCourseFiles
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
     * @return XcCourseFiles
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
     * @return XcCourseFiles
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
     * Set filename
     *
     * @param string $filename
     *
     * @return XcCourseFiles
     */
    public function setFilename($filename)
    {
        $this->filename = $filename;

        return $this;
    }

    /**
     * Get filename
     *
     * @return string
     */
    public function getFilename()
    {
        return $this->filename;
    }

    /**
     * Set filedescription
     *
     * @param string $filedescription
     *
     * @return XcCourseFiles
     */
    public function setFiledescription($filedescription)
    {
        $this->filedescription = $filedescription;

        return $this;
    }

    /**
     * Get filedescription
     *
     * @return string
     */
    public function getFiledescription()
    {
        return $this->filedescription;
    }

    /**
     * Set filefilename
     *
     * @param string $filefilename
     *
     * @return XcCourseFiles
     */
    public function setFilefilename($filefilename)
    {
        $this->filefilename = $filefilename;

        return $this;
    }

    /**
     * Get filefilename
     *
     * @return string
     */
    public function getFilefilename()
    {
        return $this->filefilename;
    }

    /**
     * Set filestatus
     *
     * @param string $filestatus
     *
     * @return XcCourseFiles
     */
    public function setFilestatus($filestatus)
    {
        $this->filestatus = $filestatus;

        return $this;
    }

    /**
     * Get filestatus
     *
     * @return string
     */
    public function getFilestatus()
    {
        return $this->filestatus;
    }

    /**
     * Set topic
     *
     * @param \AppBundle\Entity\XcCourseTopics $topic
     *
     * @return XcCourseFiles
     */
    public function setTopic(\AppBundle\Entity\XcCourseTopics $topic = null)
    {
        $this->topic = $topic;

        return $this;
    }

    /**
     * Get topic
     *
     * @return \AppBundle\Entity\XcCourseTopics
     */
    public function getTopic()
    {
        return $this->topic;
    }
}
