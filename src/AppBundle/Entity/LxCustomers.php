<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * LxCustomers
 *
 * @ORM\Table(name="lx_customers")
 * @ORM\Entity
 */
class LxCustomers
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
    private $regdate = '0000-00-00 00:00:00';

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
    private $regupdatedate = '0000-00-00 00:00:00';

    /**
     * @var integer
     *
     * @ORM\Column(name="regUpdateUserId", type="integer", nullable=true)
     */
    private $regupdateuserid;

    /**
     * @var string
     *
     * @ORM\Column(name="CustomerName", type="string", length=255, nullable=false)
     */
    private $customername = '';

    /**
     * @var string
     *
     * @ORM\Column(name="CustomerAddressStreet", type="string", length=255, nullable=true)
     */
    private $customeraddressstreet = '';

    /**
     * @var string
     *
     * @ORM\Column(name="CustomerAddressNumber", type="string", length=100, nullable=true)
     */
    private $customeraddressnumber = '';

    /**
     * @var string
     *
     * @ORM\Column(name="CustomerAddressNumberInt", type="string", length=100, nullable=true)
     */
    private $customeraddressnumberint;

    /**
     * @var string
     *
     * @ORM\Column(name="CustomerAddressNeigborhood", type="string", length=255, nullable=true)
     */
    private $customeraddressneigborhood = '';

    /**
     * @var string
     *
     * @ORM\Column(name="CustomerAddressCity", type="string", length=255, nullable=true)
     */
    private $customeraddresscity = '';

    /**
     * @var string
     *
     * @ORM\Column(name="CustomerAddressState", type="string", length=100, nullable=true)
     */
    private $customeraddressstate = '';

    /**
     * @var string
     *
     * @ORM\Column(name="CustomerAddressZip", type="string", length=10, nullable=true)
     */
    private $customeraddresszip = '';

    /**
     * @var string
     *
     * @ORM\Column(name="CustomerAddressCountry", type="string", length=50, nullable=true)
     */
    private $customeraddresscountry;

    /**
     * @var string
     *
     * @ORM\Column(name="CustomerAddressCountryName", type="string", length=200, nullable=true)
     */
    private $customeraddresscountryname;

    /**
     * @var string
     *
     * @ORM\Column(name="CustomerPhone1Area", type="string", length=20, nullable=true)
     */
    private $customerphone1area = '';

    /**
     * @var string
     *
     * @ORM\Column(name="CustomerPhone1Number", type="string", length=20, nullable=true)
     */
    private $customerphone1number = '';

    /**
     * @var string
     *
     * @ORM\Column(name="CustomerPhone1Ext", type="string", length=10, nullable=true)
     */
    private $customerphone1ext = '';

    /**
     * @var string
     *
     * @ORM\Column(name="CustomerPhone1Note", type="string", length=255, nullable=true)
     */
    private $customerphone1note = '';

    /**
     * @var string
     *
     * @ORM\Column(name="CustomerPhone2Area", type="string", length=20, nullable=true)
     */
    private $customerphone2area = '';

    /**
     * @var string
     *
     * @ORM\Column(name="CustomerPhone2Number", type="string", length=20, nullable=true)
     */
    private $customerphone2number = '';

    /**
     * @var string
     *
     * @ORM\Column(name="CustomerPhone2Ext", type="string", length=10, nullable=true)
     */
    private $customerphone2ext = '';

    /**
     * @var string
     *
     * @ORM\Column(name="CustomerPhone2Note", type="string", length=255, nullable=true)
     */
    private $customerphone2note = '';

    /**
     * @var string
     *
     * @ORM\Column(name="CustomerPhone3Area", type="string", length=20, nullable=true)
     */
    private $customerphone3area = '';

    /**
     * @var string
     *
     * @ORM\Column(name="CustomerEmail1", type="string", length=255, nullable=true)
     */
    private $customeremail1 = '';

    /**
     * @var string
     *
     * @ORM\Column(name="CustomerEmail2", type="string", length=255, nullable=true)
     */
    private $customeremail2 = '';

    /**
     * @var string
     *
     * @ORM\Column(name="CustomerWebsite", type="string", length=255, nullable=true)
     */
    private $customerwebsite = '';

    /**
     * @var string
     *
     * @ORM\Column(name="CustomerNote", type="text", length=65535, nullable=true)
     */
    private $customernote;

    /**
     * @var string
     *
     * @ORM\Column(name="BrandDomains", type="text", length=65535, nullable=true)
     */
    private $branddomains;

    /**
     * @var string
     *
     * @ORM\Column(name="BrandLogo", type="string", length=255, nullable=true)
     */
    private $brandlogo;

    /**
     * @var string
     *
     * @ORM\Column(name="BrandUrl", type="string", length=255, nullable=true)
     */
    private $brandurl;

    /**
     * @var string
     *
     * @ORM\Column(name="AllianceID", type="string", length=50, nullable=true)
     */
    private $allianceid;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="AllianceStartDate", type="datetime", nullable=false)
     */
    private $alliancestartdate = '0000-00-00 00:00:00';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="AllianceEndDate", type="datetime", nullable=false)
     */
    private $allianceenddate = '0000-00-00 00:00:00';

    /**
     * @var string
     *
     * @ORM\Column(name="AllianceStudent", type="text", length=65535, nullable=true)
     */
    private $alliancestudent;

    /**
     * @var string
     *
     * @ORM\Column(name="AllianceProfessor", type="text", length=65535, nullable=true)
     */
    private $allianceprofessor;

    /**
     * @var string
     *
     * @ORM\Column(name="AllianceGraduate", type="text", length=65535, nullable=true)
     */
    private $alliancegraduate;

    /**
     * @var string
     *
     * @ORM\Column(name="AllianceEngineer", type="text", length=65535, nullable=true)
     */
    private $allianceengineer;

    /**
     * @var string
     *
     * @ORM\Column(name="loginMode", type="string", length=1, nullable=false)
     */
    private $loginmode;

    /**
     * @var string
     *
     * @ORM\Column(name="customerStatus", type="string", length=1, nullable=false)
     */
    private $customerstatus;



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
     * @return LxCustomers
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
     * @return LxCustomers
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
     * @return LxCustomers
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
     * @return LxCustomers
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
     * @return LxCustomers
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
     * Set customeraddressstreet
     *
     * @param string $customeraddressstreet
     *
     * @return LxCustomers
     */
    public function setCustomeraddressstreet($customeraddressstreet)
    {
        $this->customeraddressstreet = $customeraddressstreet;

        return $this;
    }

    /**
     * Get customeraddressstreet
     *
     * @return string
     */
    public function getCustomeraddressstreet()
    {
        return $this->customeraddressstreet;
    }

    /**
     * Set customeraddressnumber
     *
     * @param string $customeraddressnumber
     *
     * @return LxCustomers
     */
    public function setCustomeraddressnumber($customeraddressnumber)
    {
        $this->customeraddressnumber = $customeraddressnumber;

        return $this;
    }

    /**
     * Get customeraddressnumber
     *
     * @return string
     */
    public function getCustomeraddressnumber()
    {
        return $this->customeraddressnumber;
    }

    /**
     * Set customeraddressnumberint
     *
     * @param string $customeraddressnumberint
     *
     * @return LxCustomers
     */
    public function setCustomeraddressnumberint($customeraddressnumberint)
    {
        $this->customeraddressnumberint = $customeraddressnumberint;

        return $this;
    }

    /**
     * Get customeraddressnumberint
     *
     * @return string
     */
    public function getCustomeraddressnumberint()
    {
        return $this->customeraddressnumberint;
    }

    /**
     * Set customeraddressneigborhood
     *
     * @param string $customeraddressneigborhood
     *
     * @return LxCustomers
     */
    public function setCustomeraddressneigborhood($customeraddressneigborhood)
    {
        $this->customeraddressneigborhood = $customeraddressneigborhood;

        return $this;
    }

    /**
     * Get customeraddressneigborhood
     *
     * @return string
     */
    public function getCustomeraddressneigborhood()
    {
        return $this->customeraddressneigborhood;
    }

    /**
     * Set customeraddresscity
     *
     * @param string $customeraddresscity
     *
     * @return LxCustomers
     */
    public function setCustomeraddresscity($customeraddresscity)
    {
        $this->customeraddresscity = $customeraddresscity;

        return $this;
    }

    /**
     * Get customeraddresscity
     *
     * @return string
     */
    public function getCustomeraddresscity()
    {
        return $this->customeraddresscity;
    }

    /**
     * Set customeraddressstate
     *
     * @param string $customeraddressstate
     *
     * @return LxCustomers
     */
    public function setCustomeraddressstate($customeraddressstate)
    {
        $this->customeraddressstate = $customeraddressstate;

        return $this;
    }

    /**
     * Get customeraddressstate
     *
     * @return string
     */
    public function getCustomeraddressstate()
    {
        return $this->customeraddressstate;
    }

    /**
     * Set customeraddresszip
     *
     * @param string $customeraddresszip
     *
     * @return LxCustomers
     */
    public function setCustomeraddresszip($customeraddresszip)
    {
        $this->customeraddresszip = $customeraddresszip;

        return $this;
    }

    /**
     * Get customeraddresszip
     *
     * @return string
     */
    public function getCustomeraddresszip()
    {
        return $this->customeraddresszip;
    }

    /**
     * Set customeraddresscountry
     *
     * @param string $customeraddresscountry
     *
     * @return LxCustomers
     */
    public function setCustomeraddresscountry($customeraddresscountry)
    {
        $this->customeraddresscountry = $customeraddresscountry;

        return $this;
    }

    /**
     * Get customeraddresscountry
     *
     * @return string
     */
    public function getCustomeraddresscountry()
    {
        return $this->customeraddresscountry;
    }

    /**
     * Set customeraddresscountryname
     *
     * @param string $customeraddresscountryname
     *
     * @return LxCustomers
     */
    public function setCustomeraddresscountryname($customeraddresscountryname)
    {
        $this->customeraddresscountryname = $customeraddresscountryname;

        return $this;
    }

    /**
     * Get customeraddresscountryname
     *
     * @return string
     */
    public function getCustomeraddresscountryname()
    {
        return $this->customeraddresscountryname;
    }

    /**
     * Set customerphone1area
     *
     * @param string $customerphone1area
     *
     * @return LxCustomers
     */
    public function setCustomerphone1area($customerphone1area)
    {
        $this->customerphone1area = $customerphone1area;

        return $this;
    }

    /**
     * Get customerphone1area
     *
     * @return string
     */
    public function getCustomerphone1area()
    {
        return $this->customerphone1area;
    }

    /**
     * Set customerphone1number
     *
     * @param string $customerphone1number
     *
     * @return LxCustomers
     */
    public function setCustomerphone1number($customerphone1number)
    {
        $this->customerphone1number = $customerphone1number;

        return $this;
    }

    /**
     * Get customerphone1number
     *
     * @return string
     */
    public function getCustomerphone1number()
    {
        return $this->customerphone1number;
    }

    /**
     * Set customerphone1ext
     *
     * @param string $customerphone1ext
     *
     * @return LxCustomers
     */
    public function setCustomerphone1ext($customerphone1ext)
    {
        $this->customerphone1ext = $customerphone1ext;

        return $this;
    }

    /**
     * Get customerphone1ext
     *
     * @return string
     */
    public function getCustomerphone1ext()
    {
        return $this->customerphone1ext;
    }

    /**
     * Set customerphone1note
     *
     * @param string $customerphone1note
     *
     * @return LxCustomers
     */
    public function setCustomerphone1note($customerphone1note)
    {
        $this->customerphone1note = $customerphone1note;

        return $this;
    }

    /**
     * Get customerphone1note
     *
     * @return string
     */
    public function getCustomerphone1note()
    {
        return $this->customerphone1note;
    }

    /**
     * Set customerphone2area
     *
     * @param string $customerphone2area
     *
     * @return LxCustomers
     */
    public function setCustomerphone2area($customerphone2area)
    {
        $this->customerphone2area = $customerphone2area;

        return $this;
    }

    /**
     * Get customerphone2area
     *
     * @return string
     */
    public function getCustomerphone2area()
    {
        return $this->customerphone2area;
    }

    /**
     * Set customerphone2number
     *
     * @param string $customerphone2number
     *
     * @return LxCustomers
     */
    public function setCustomerphone2number($customerphone2number)
    {
        $this->customerphone2number = $customerphone2number;

        return $this;
    }

    /**
     * Get customerphone2number
     *
     * @return string
     */
    public function getCustomerphone2number()
    {
        return $this->customerphone2number;
    }

    /**
     * Set customerphone2ext
     *
     * @param string $customerphone2ext
     *
     * @return LxCustomers
     */
    public function setCustomerphone2ext($customerphone2ext)
    {
        $this->customerphone2ext = $customerphone2ext;

        return $this;
    }

    /**
     * Get customerphone2ext
     *
     * @return string
     */
    public function getCustomerphone2ext()
    {
        return $this->customerphone2ext;
    }

    /**
     * Set customerphone2note
     *
     * @param string $customerphone2note
     *
     * @return LxCustomers
     */
    public function setCustomerphone2note($customerphone2note)
    {
        $this->customerphone2note = $customerphone2note;

        return $this;
    }

    /**
     * Get customerphone2note
     *
     * @return string
     */
    public function getCustomerphone2note()
    {
        return $this->customerphone2note;
    }

    /**
     * Set customerphone3area
     *
     * @param string $customerphone3area
     *
     * @return LxCustomers
     */
    public function setCustomerphone3area($customerphone3area)
    {
        $this->customerphone3area = $customerphone3area;

        return $this;
    }

    /**
     * Get customerphone3area
     *
     * @return string
     */
    public function getCustomerphone3area()
    {
        return $this->customerphone3area;
    }

    /**
     * Set customeremail1
     *
     * @param string $customeremail1
     *
     * @return LxCustomers
     */
    public function setCustomeremail1($customeremail1)
    {
        $this->customeremail1 = $customeremail1;

        return $this;
    }

    /**
     * Get customeremail1
     *
     * @return string
     */
    public function getCustomeremail1()
    {
        return $this->customeremail1;
    }

    /**
     * Set customeremail2
     *
     * @param string $customeremail2
     *
     * @return LxCustomers
     */
    public function setCustomeremail2($customeremail2)
    {
        $this->customeremail2 = $customeremail2;

        return $this;
    }

    /**
     * Get customeremail2
     *
     * @return string
     */
    public function getCustomeremail2()
    {
        return $this->customeremail2;
    }

    /**
     * Set customerwebsite
     *
     * @param string $customerwebsite
     *
     * @return LxCustomers
     */
    public function setCustomerwebsite($customerwebsite)
    {
        $this->customerwebsite = $customerwebsite;

        return $this;
    }

    /**
     * Get customerwebsite
     *
     * @return string
     */
    public function getCustomerwebsite()
    {
        return $this->customerwebsite;
    }

    /**
     * Set customernote
     *
     * @param string $customernote
     *
     * @return LxCustomers
     */
    public function setCustomernote($customernote)
    {
        $this->customernote = $customernote;

        return $this;
    }

    /**
     * Get customernote
     *
     * @return string
     */
    public function getCustomernote()
    {
        return $this->customernote;
    }

    /**
     * Set branddomains
     *
     * @param string $branddomains
     *
     * @return LxCustomers
     */
    public function setBranddomains($branddomains)
    {
        $this->branddomains = $branddomains;

        return $this;
    }

    /**
     * Get branddomains
     *
     * @return string
     */
    public function getBranddomains()
    {
        return $this->branddomains;
    }

    /**
     * Set brandlogo
     *
     * @param string $brandlogo
     *
     * @return LxCustomers
     */
    public function setBrandlogo($brandlogo)
    {
        $this->brandlogo = $brandlogo;

        return $this;
    }

    /**
     * Get brandlogo
     *
     * @return string
     */
    public function getBrandlogo()
    {
        return $this->brandlogo;
    }

    /**
     * Set brandurl
     *
     * @param string $brandurl
     *
     * @return LxCustomers
     */
    public function setBrandurl($brandurl)
    {
        $this->brandurl = $brandurl;

        return $this;
    }

    /**
     * Get brandurl
     *
     * @return string
     */
    public function getBrandurl()
    {
        return $this->brandurl;
    }

    /**
     * Set allianceid
     *
     * @param string $allianceid
     *
     * @return LxCustomers
     */
    public function setAllianceid($allianceid)
    {
        $this->allianceid = $allianceid;

        return $this;
    }

    /**
     * Get allianceid
     *
     * @return string
     */
    public function getAllianceid()
    {
        return $this->allianceid;
    }

    /**
     * Set alliancestartdate
     *
     * @param \DateTime $alliancestartdate
     *
     * @return LxCustomers
     */
    public function setAlliancestartdate($alliancestartdate)
    {
        $this->alliancestartdate = $alliancestartdate;

        return $this;
    }

    /**
     * Get alliancestartdate
     *
     * @return \DateTime
     */
    public function getAlliancestartdate()
    {
        return $this->alliancestartdate;
    }

    /**
     * Set allianceenddate
     *
     * @param \DateTime $allianceenddate
     *
     * @return LxCustomers
     */
    public function setAllianceenddate($allianceenddate)
    {
        $this->allianceenddate = $allianceenddate;

        return $this;
    }

    /**
     * Get allianceenddate
     *
     * @return \DateTime
     */
    public function getAllianceenddate()
    {
        return $this->allianceenddate;
    }

    /**
     * Set alliancestudent
     *
     * @param string $alliancestudent
     *
     * @return LxCustomers
     */
    public function setAlliancestudent($alliancestudent)
    {
        $this->alliancestudent = $alliancestudent;

        return $this;
    }

    /**
     * Get alliancestudent
     *
     * @return string
     */
    public function getAlliancestudent()
    {
        return $this->alliancestudent;
    }

    /**
     * Set allianceprofessor
     *
     * @param string $allianceprofessor
     *
     * @return LxCustomers
     */
    public function setAllianceprofessor($allianceprofessor)
    {
        $this->allianceprofessor = $allianceprofessor;

        return $this;
    }

    /**
     * Get allianceprofessor
     *
     * @return string
     */
    public function getAllianceprofessor()
    {
        return $this->allianceprofessor;
    }

    /**
     * Set alliancegraduate
     *
     * @param string $alliancegraduate
     *
     * @return LxCustomers
     */
    public function setAlliancegraduate($alliancegraduate)
    {
        $this->alliancegraduate = $alliancegraduate;

        return $this;
    }

    /**
     * Get alliancegraduate
     *
     * @return string
     */
    public function getAlliancegraduate()
    {
        return $this->alliancegraduate;
    }

    /**
     * Set allianceengineer
     *
     * @param string $allianceengineer
     *
     * @return LxCustomers
     */
    public function setAllianceengineer($allianceengineer)
    {
        $this->allianceengineer = $allianceengineer;

        return $this;
    }

    /**
     * Get allianceengineer
     *
     * @return string
     */
    public function getAllianceengineer()
    {
        return $this->allianceengineer;
    }

    /**
     * Set loginmode
     *
     * @param string $loginmode
     *
     * @return LxCustomers
     */
    public function setLoginmode($loginmode)
    {
        $this->loginmode = $loginmode;

        return $this;
    }

    /**
     * Get loginmode
     *
     * @return string
     */
    public function getLoginmode()
    {
        return $this->loginmode;
    }

    /**
     * Set customerstatus
     *
     * @param string $customerstatus
     *
     * @return LxCustomers
     */
    public function setCustomerstatus($customerstatus)
    {
        $this->customerstatus = $customerstatus;

        return $this;
    }

    /**
     * Get customerstatus
     *
     * @return string
     */
    public function getCustomerstatus()
    {
        return $this->customerstatus;
    }
}
