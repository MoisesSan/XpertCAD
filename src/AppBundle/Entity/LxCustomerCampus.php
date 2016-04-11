<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * LxCustomerCampus
 *
 * @ORM\Table(name="lx_customer_campus", indexes={@ORM\Index(name="fk_customer_id_idx", columns={"customer_id"})})
 * @ORM\Entity
 */
class LxCustomerCampus
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
     * @ORM\Column(name="regDate", type="datetime", nullable=true)
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
     * @ORM\Column(name="campusName", type="string", length=255, nullable=true)
     */
    private $campusname;

    /**
     * @var string
     *
     * @ORM\Column(name="campusAddress", type="string", length=255, nullable=true)
     */
    private $campusaddress;

    /**
     * @var string
     *
     * @ORM\Column(name="campusPhone", type="string", length=20, nullable=true)
     */
    private $campusphone;

    /**
     * @var string
     *
     * @ORM\Column(name="campusExt", type="string", length=20, nullable=true)
     */
    private $campusext;

    /**
     * @var string
     *
     * @ORM\Column(name="campusStatus", type="string", length=1, nullable=true)
     */
    private $campusstatus;

    /**
     * @var \LxCustomers
     *
     * @ORM\ManyToOne(targetEntity="LxCustomers")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="customer_id", referencedColumnName="id")
     * })
     */
    private $customer;



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
     * @return LxCustomerCampus
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
     * @return LxCustomerCampus
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
     * @return LxCustomerCampus
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
     * @return LxCustomerCampus
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
     * Set campusname
     *
     * @param string $campusname
     *
     * @return LxCustomerCampus
     */
    public function setCampusname($campusname)
    {
        $this->campusname = $campusname;

        return $this;
    }

    /**
     * Get campusname
     *
     * @return string
     */
    public function getCampusname()
    {
        return $this->campusname;
    }

    /**
     * Set campusaddress
     *
     * @param string $campusaddress
     *
     * @return LxCustomerCampus
     */
    public function setCampusaddress($campusaddress)
    {
        $this->campusaddress = $campusaddress;

        return $this;
    }

    /**
     * Get campusaddress
     *
     * @return string
     */
    public function getCampusaddress()
    {
        return $this->campusaddress;
    }

    /**
     * Set campusphone
     *
     * @param string $campusphone
     *
     * @return LxCustomerCampus
     */
    public function setCampusphone($campusphone)
    {
        $this->campusphone = $campusphone;

        return $this;
    }

    /**
     * Get campusphone
     *
     * @return string
     */
    public function getCampusphone()
    {
        return $this->campusphone;
    }

    /**
     * Set campusext
     *
     * @param string $campusext
     *
     * @return LxCustomerCampus
     */
    public function setCampusext($campusext)
    {
        $this->campusext = $campusext;

        return $this;
    }

    /**
     * Get campusext
     *
     * @return string
     */
    public function getCampusext()
    {
        return $this->campusext;
    }

    /**
     * Set campusstatus
     *
     * @param string $campusstatus
     *
     * @return LxCustomerCampus
     */
    public function setCampusstatus($campusstatus)
    {
        $this->campusstatus = $campusstatus;

        return $this;
    }

    /**
     * Get campusstatus
     *
     * @return string
     */
    public function getCampusstatus()
    {
        return $this->campusstatus;
    }

    /**
     * Set customer
     *
     * @param \AppBundle\Entity\LxCustomers $customer
     *
     * @return LxCustomerCampus
     */
    public function setCustomer(\AppBundle\Entity\LxCustomers $customer = null)
    {
        $this->customer = $customer;

        return $this;
    }

    /**
     * Get customer
     *
     * @return \AppBundle\Entity\LxCustomers
     */
    public function getCustomer()
    {
        return $this->customer;
    }
}
