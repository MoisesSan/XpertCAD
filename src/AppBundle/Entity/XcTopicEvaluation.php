<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * XcTopicEvaluation
 *
 * @ORM\Table(name="xc_topic_evaluation", indexes={@ORM\Index(name="fk_topic_eval_id_idx", columns={"topic_id"})})
 * @ORM\Entity
 */
class XcTopicEvaluation
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
     * @var string
     *
     * @ORM\Column(name="positiveEval", type="string", length=1, nullable=true)
     */
    private $positiveeval;

    /**
     * @var string
     *
     * @ORM\Column(name="negativeEval", type="string", length=1, nullable=true)
     */
    private $negativeeval;

    /**
     * @var string
     *
     * @ORM\Column(name="comment", type="text", length=65535, nullable=true)
     */
    private $comment;

    /**
     * @var string
     *
     * @ORM\Column(name="status", type="string", length=1, nullable=true)
     */
    private $status;

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
     * @return XcTopicEvaluation
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
     * @return XcTopicEvaluation
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
     * Set positiveeval
     *
     * @param string $positiveeval
     *
     * @return XcTopicEvaluation
     */
    public function setPositiveeval($positiveeval)
    {
        $this->positiveeval = $positiveeval;

        return $this;
    }

    /**
     * Get positiveeval
     *
     * @return string
     */
    public function getPositiveeval()
    {
        return $this->positiveeval;
    }

    /**
     * Set negativeeval
     *
     * @param string $negativeeval
     *
     * @return XcTopicEvaluation
     */
    public function setNegativeeval($negativeeval)
    {
        $this->negativeeval = $negativeeval;

        return $this;
    }

    /**
     * Get negativeeval
     *
     * @return string
     */
    public function getNegativeeval()
    {
        return $this->negativeeval;
    }

    /**
     * Set comment
     *
     * @param string $comment
     *
     * @return XcTopicEvaluation
     */
    public function setComment($comment)
    {
        $this->comment = $comment;

        return $this;
    }

    /**
     * Get comment
     *
     * @return string
     */
    public function getComment()
    {
        return $this->comment;
    }

    /**
     * Set status
     *
     * @param string $status
     *
     * @return XcTopicEvaluation
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
     * Set topic
     *
     * @param \AppBundle\Entity\XcCourseTopics $topic
     *
     * @return XcTopicEvaluation
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
