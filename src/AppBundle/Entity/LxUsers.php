<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Query\Expr\Base;
use FOS\UserBundle\Model\User as BaseUser;
use Doctrine\ORM\Mapping as ORM;

/**
 * LxUsers
 *
 * @ORM\Table(name="lx_users", indexes={@ORM\Index(name="UserEmail", columns={"UserEmail"}), @ORM\Index(name="fk_customers_idx", columns={"customer_id"})})
 * @ORM\Entity
 */
class LxUsers extends BaseUser
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    protected $id;

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
    private $regupdateuserid = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="customerName", type="string", length=255, nullable=true)
     */
    private $customername;

    /**
     * @var integer
     *
     * @ORM\Column(name="group_id", type="integer", nullable=true)
     */
    private $groupId = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="userVisibleName", type="string", length=255, nullable=true)
     */
    private $uservisiblename;

    /**
     * @var string
     *
     * @ORM\Column(name="UserEmail", type="string", length=100, nullable=false)
     */
    private $useremail;

    /**
     * @var string
     *
     * @ORM\Column(name="UserPassword", type="string", length=20, nullable=false)
     */
    private $userpassword;

    /**
     * @var string
     *
     * @ORM\Column(name="UserSalt", type="string", length=255, nullable=false)
     */
    private $usersalt;

    /**
     * @var string
     *
     * @ORM\Column(name="UserFirstName", type="string", length=100, nullable=true)
     */
    private $userfirstname;

    /**
     * @var string
     *
     * @ORM\Column(name="UserLastName", type="string", length=100, nullable=true)
     */
    private $userlastname;

    /**
     * @var string
     *
     * @ORM\Column(name="UserFullName", type="string", length=255, nullable=true)
     */
    private $userfullname;

    /**
     * @var string
     *
     * @ORM\Column(name="UserPhoneArea", type="string", length=3, nullable=true)
     */
    private $userphonearea;

    /**
     * @var string
     *
     * @ORM\Column(name="UserPhoneNumber", type="string", length=20, nullable=true)
     */
    private $userphonenumber;

    /**
     * @var string
     *
     * @ORM\Column(name="UserStatus", type="string", length=1, nullable=false)
     */
    private $userstatus;

    /**
     * @var string
     *
     * @ORM\Column(name="UserCompany", type="string", length=255, nullable=true)
     */
    private $usercompany;

    /**
     * @var string
     *
     * @ORM\Column(name="UserJobTitle", type="string", length=50, nullable=true)
     */
    private $userjobtitle;

    /**
     * @var string
     *
     * @ORM\Column(name="UserRole", type="string", length=255, nullable=false)
     */
    private $userrole;

    /**
     * @var integer
     *
     * @ORM\Column(name="UserAddressCountryID", type="integer", nullable=false)
     */
    private $useraddresscountryid;

    /**
     * @var string
     *
     * @ORM\Column(name="UserAddressCountry", type="string", length=200, nullable=false)
     */
    private $useraddresscountry;

    /**
     * @var string
     *
     * @ORM\Column(name="UserAddressCity", type="string", length=200, nullable=false)
     */
    private $useraddresscity;

    /**
     * @var integer
     *
     * @ORM\Column(name="UserAddressStateID", type="integer", nullable=false)
     */
    private $useraddressstateid;

    /**
     * @var string
     *
     * @ORM\Column(name="UserAddressState", type="string", length=100, nullable=false)
     */
    private $useraddressstate;

    /**
     * @var integer
     *
     * @ORM\Column(name="UserDisabled", type="integer", nullable=false)
     */
    private $userdisabled;

    /**
     * @var string
     *
     * @ORM\Column(name="UserActivationCode", type="string", length=100, nullable=true)
     */
    private $useractivationcode;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="UserBirthDate", type="date", nullable=true)
     */
    private $userbirthdate;

    /**
     * @var string
     *
     * @ORM\Column(name="UserGender", type="string", length=1, nullable=true)
     */
    private $usergender;

    /**
     * @var string
     *
     * @ORM\Column(name="UserPhone", type="string", length=20, nullable=true)
     */
    private $userphone;

    /**
     * @var integer
     *
     * @ORM\Column(name="UserSuscriptionTotal", type="integer", nullable=true)
     */
    private $usersuscriptiontotal;

    /**
     * @var integer
     *
     * @ORM\Column(name="UserSupervisorID", type="integer", nullable=true)
     */
    private $usersupervisorid;

    /**
     * @var string
     *
     * @ORM\Column(name="UserSupervisorFullName", type="string", length=255, nullable=true)
     */
    private $usersupervisorfullname;

    /**
     * @var integer
     *
     * @ORM\Column(name="UserDemo", type="integer", nullable=true)
     */
    private $userdemo;

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
     * @return LxUsers
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
     * @return LxUsers
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
     * @return LxUsers
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
     * @return LxUsers
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
     * Set customername
     *
     * @param string $customername
     *
     * @return LxUsers
     */
    public function setCustomername($customername)
    {
        $this->customername = $customername;

        return $this;
    }

    /**
     * Get customername
     *
     * @return string
     */
    public function getCustomername()
    {
        return $this->customername;
    }

    /**
     * Set groupId
     *
     * @param integer $groupId
     *
     * @return LxUsers
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
     * Set uservisiblename
     *
     * @param string $uservisiblename
     *
     * @return LxUsers
     */
    public function setUservisiblename($uservisiblename)
    {
        $this->uservisiblename = $uservisiblename;

        return $this;
    }

    /**
     * Get uservisiblename
     *
     * @return string
     */
    public function getUservisiblename()
    {
        return $this->uservisiblename;
    }

    /**
     * Set useremail
     *
     * @param string $useremail
     *
     * @return LxUsers
     */
    public function setUseremail($useremail)
    {
        $this->useremail = $useremail;

        return $this;
    }

    /**
     * Get useremail
     *
     * @return string
     */
    public function getUseremail()
    {
        return $this->useremail;
    }

    /**
     * Set userpassword
     *
     * @param string $userpassword
     *
     * @return LxUsers
     */
    public function setUserpassword($userpassword)
    {
        $this->userpassword = $userpassword;

        return $this;
    }

    /**
     * Get userpassword
     *
     * @return string
     */
    public function getUserpassword()
    {
        return $this->userpassword;
    }

    /**
     * Set usersalt
     *
     * @param string $usersalt
     *
     * @return LxUsers
     */
    public function setUsersalt($usersalt)
    {
        $this->usersalt = $usersalt;

        return $this;
    }

    /**
     * Get usersalt
     *
     * @return string
     */
    public function getUsersalt()
    {
        return $this->usersalt;
    }

    /**
     * Set userfirstname
     *
     * @param string $userfirstname
     *
     * @return LxUsers
     */
    public function setUserfirstname($userfirstname)
    {
        $this->userfirstname = $userfirstname;

        return $this;
    }

    /**
     * Get userfirstname
     *
     * @return string
     */
    public function getUserfirstname()
    {
        return $this->userfirstname;
    }

    /**
     * Set userlastname
     *
     * @param string $userlastname
     *
     * @return LxUsers
     */
    public function setUserlastname($userlastname)
    {
        $this->userlastname = $userlastname;

        return $this;
    }

    /**
     * Get userlastname
     *
     * @return string
     */
    public function getUserlastname()
    {
        return $this->userlastname;
    }

    /**
     * Set userfullname
     *
     * @param string $userfullname
     *
     * @return LxUsers
     */
    public function setUserfullname($userfullname)
    {
        $this->userfullname = $userfullname;

        return $this;
    }

    /**
     * Get userfullname
     *
     * @return string
     */
    public function getUserfullname()
    {
        return $this->userfullname;
    }

    /**
     * Set userphonearea
     *
     * @param string $userphonearea
     *
     * @return LxUsers
     */
    public function setUserphonearea($userphonearea)
    {
        $this->userphonearea = $userphonearea;

        return $this;
    }

    /**
     * Get userphonearea
     *
     * @return string
     */
    public function getUserphonearea()
    {
        return $this->userphonearea;
    }

    /**
     * Set userphonenumber
     *
     * @param string $userphonenumber
     *
     * @return LxUsers
     */
    public function setUserphonenumber($userphonenumber)
    {
        $this->userphonenumber = $userphonenumber;

        return $this;
    }

    /**
     * Get userphonenumber
     *
     * @return string
     */
    public function getUserphonenumber()
    {
        return $this->userphonenumber;
    }

    /**
     * Set userstatus
     *
     * @param string $userstatus
     *
     * @return LxUsers
     */
    public function setUserstatus($userstatus)
    {
        $this->userstatus = $userstatus;

        return $this;
    }

    /**
     * Get userstatus
     *
     * @return string
     */
    public function getUserstatus()
    {
        return $this->userstatus;
    }

    /**
     * Set usercompany
     *
     * @param string $usercompany
     *
     * @return LxUsers
     */
    public function setUsercompany($usercompany)
    {
        $this->usercompany = $usercompany;

        return $this;
    }

    /**
     * Get usercompany
     *
     * @return string
     */
    public function getUsercompany()
    {
        return $this->usercompany;
    }

    /**
     * Set userjobtitle
     *
     * @param string $userjobtitle
     *
     * @return LxUsers
     */
    public function setUserjobtitle($userjobtitle)
    {
        $this->userjobtitle = $userjobtitle;

        return $this;
    }

    /**
     * Get userjobtitle
     *
     * @return string
     */
    public function getUserjobtitle()
    {
        return $this->userjobtitle;
    }

    /**
     * Set userrole
     *
     * @param string $userrole
     *
     * @return LxUsers
     */
    public function setUserrole($userrole)
    {
        $this->userrole = $userrole;

        return $this;
    }

    /**
     * Get userrole
     *
     * @return string
     */
    public function getUserrole()
    {
        return $this->userrole;
    }

    /**
     * Set useraddresscountryid
     *
     * @param integer $useraddresscountryid
     *
     * @return LxUsers
     */
    public function setUseraddresscountryid($useraddresscountryid)
    {
        $this->useraddresscountryid = $useraddresscountryid;

        return $this;
    }

    /**
     * Get useraddresscountryid
     *
     * @return integer
     */
    public function getUseraddresscountryid()
    {
        return $this->useraddresscountryid;
    }

    /**
     * Set useraddresscountry
     *
     * @param string $useraddresscountry
     *
     * @return LxUsers
     */
    public function setUseraddresscountry($useraddresscountry)
    {
        $this->useraddresscountry = $useraddresscountry;

        return $this;
    }

    /**
     * Get useraddresscountry
     *
     * @return string
     */
    public function getUseraddresscountry()
    {
        return $this->useraddresscountry;
    }

    /**
     * Set useraddresscity
     *
     * @param string $useraddresscity
     *
     * @return LxUsers
     */
    public function setUseraddresscity($useraddresscity)
    {
        $this->useraddresscity = $useraddresscity;

        return $this;
    }

    /**
     * Get useraddresscity
     *
     * @return string
     */
    public function getUseraddresscity()
    {
        return $this->useraddresscity;
    }

    /**
     * Set useraddressstateid
     *
     * @param integer $useraddressstateid
     *
     * @return LxUsers
     */
    public function setUseraddressstateid($useraddressstateid)
    {
        $this->useraddressstateid = $useraddressstateid;

        return $this;
    }

    /**
     * Get useraddressstateid
     *
     * @return integer
     */
    public function getUseraddressstateid()
    {
        return $this->useraddressstateid;
    }

    /**
     * Set useraddressstate
     *
     * @param string $useraddressstate
     *
     * @return LxUsers
     */
    public function setUseraddressstate($useraddressstate)
    {
        $this->useraddressstate = $useraddressstate;

        return $this;
    }

    /**
     * Get useraddressstate
     *
     * @return string
     */
    public function getUseraddressstate()
    {
        return $this->useraddressstate;
    }

    /**
     * Set userdisabled
     *
     * @param integer $userdisabled
     *
     * @return LxUsers
     */
    public function setUserdisabled($userdisabled)
    {
        $this->userdisabled = $userdisabled;

        return $this;
    }

    /**
     * Get userdisabled
     *
     * @return integer
     */
    public function getUserdisabled()
    {
        return $this->userdisabled;
    }

    /**
     * Set useractivationcode
     *
     * @param string $useractivationcode
     *
     * @return LxUsers
     */
    public function setUseractivationcode($useractivationcode)
    {
        $this->useractivationcode = $useractivationcode;

        return $this;
    }

    /**
     * Get useractivationcode
     *
     * @return string
     */
    public function getUseractivationcode()
    {
        return $this->useractivationcode;
    }

    /**
     * Set userbirthdate
     *
     * @param \DateTime $userbirthdate
     *
     * @return LxUsers
     */
    public function setUserbirthdate($userbirthdate)
    {
        $this->userbirthdate = $userbirthdate;

        return $this;
    }

    /**
     * Get userbirthdate
     *
     * @return \DateTime
     */
    public function getUserbirthdate()
    {
        return $this->userbirthdate;
    }

    /**
     * Set usergender
     *
     * @param string $usergender
     *
     * @return LxUsers
     */
    public function setUsergender($usergender)
    {
        $this->usergender = $usergender;

        return $this;
    }

    /**
     * Get usergender
     *
     * @return string
     */
    public function getUsergender()
    {
        return $this->usergender;
    }

    /**
     * Set userphone
     *
     * @param string $userphone
     *
     * @return LxUsers
     */
    public function setUserphone($userphone)
    {
        $this->userphone = $userphone;

        return $this;
    }

    /**
     * Get userphone
     *
     * @return string
     */
    public function getUserphone()
    {
        return $this->userphone;
    }

    /**
     * Set usersuscriptiontotal
     *
     * @param integer $usersuscriptiontotal
     *
     * @return LxUsers
     */
    public function setUsersuscriptiontotal($usersuscriptiontotal)
    {
        $this->usersuscriptiontotal = $usersuscriptiontotal;

        return $this;
    }

    /**
     * Get usersuscriptiontotal
     *
     * @return integer
     */
    public function getUsersuscriptiontotal()
    {
        return $this->usersuscriptiontotal;
    }

    /**
     * Set usersupervisorid
     *
     * @param integer $usersupervisorid
     *
     * @return LxUsers
     */
    public function setUsersupervisorid($usersupervisorid)
    {
        $this->usersupervisorid = $usersupervisorid;

        return $this;
    }

    /**
     * Get usersupervisorid
     *
     * @return integer
     */
    public function getUsersupervisorid()
    {
        return $this->usersupervisorid;
    }

    /**
     * Set usersupervisorfullname
     *
     * @param string $usersupervisorfullname
     *
     * @return LxUsers
     */
    public function setUsersupervisorfullname($usersupervisorfullname)
    {
        $this->usersupervisorfullname = $usersupervisorfullname;

        return $this;
    }

    /**
     * Get usersupervisorfullname
     *
     * @return string
     */
    public function getUsersupervisorfullname()
    {
        return $this->usersupervisorfullname;
    }

    /**
     * Set userdemo
     *
     * @param integer $userdemo
     *
     * @return LxUsers
     */
    public function setUserdemo($userdemo)
    {
        $this->userdemo = $userdemo;

        return $this;
    }

    /**
     * Get userdemo
     *
     * @return integer
     */
    public function getUserdemo()
    {
        return $this->userdemo;
    }

    /**
     * Set customer
     *
     * @param \AppBundle\Entity\LxCustomers $customer
     *
     * @return LxUsers
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

    //Agregadas para FOSUserBundle
    public function __toString()
    {
        return $this->getuseremail();
    }

    public function __construct()
    {
        parent::__construct();

    }
}
