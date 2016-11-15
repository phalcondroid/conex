<?php

use Phalcon\Mvc\Model\Validator\Email as Email;

class Company extends \Phalcon\Mvc\Model
{

    /**
     *
     * @var integer
     * @Primary
     * @Identity
     * @Column(type="integer", length=11, nullable=false)
     */
    public $id_company;

    /**
     *
     * @var integer
     * @Column(type="integer", length=11, nullable=false)
     */
    public $id_users;

    /**
     *
     * @var integer
     * @Column(type="integer", length=11, nullable=true)
     */
    public $id_company_client;

    /**
     *
     * @var integer
     * @Column(type="integer", length=11, nullable=false)
     */
    public $id_legal_constitution;

    /**
     *
     * @var integer
     * @Column(type="integer", length=11, nullable=false)
     */
    public $id_company_position;

    /**
     *
     * @var integer
     * @Column(type="integer", length=11, nullable=false)
     */
    public $id_size_company;

    /**
     *
     * @var integer
     * @Column(type="integer", length=11, nullable=false)
     */
    public $id_company_assets;

    /**
     *
     * @var integer
     * @Column(type="integer", length=11, nullable=false)
     */
    public $id_employee_number;

    /**
     *
     * @var integer
     * @Column(type="integer", length=11, nullable=false)
     */
    public $id_company_sector;

    /**
     *
     * @var integer
     * @Column(type="integer", length=11, nullable=false)
     */
    public $id_coverage;

    /**
     *
     * @var string
     * @Column(type="string", length=45, nullable=true)
     */
    public $name;

    /**
     *
     * @var string
     * @Column(type="string", nullable=true)
     */
    public $description;

    /**
     *
     * @var string
     * @Column(type="string", length=45, nullable=true)
     */
    public $slogan;

    /**
     *
     * @var string
     * @Column(type="string", length=45, nullable=true)
     */
    public $logo;

    /**
     *
     * @var string
     * @Column(type="string", length=45, nullable=true)
     */
    public $address;

    /**
     *
     * @var string
     * @Column(type="string", length=45, nullable=true)
     */
    public $comerce_camera_year;

    /**
     *
     * @var string
     * @Column(type="string", length=45, nullable=true)
     */
    public $contact_number;

    /**
     *
     * @var string
     * @Column(type="string", length=45, nullable=true)
     */
    public $webpage;

    /**
     *
     * @var string
     * @Column(type="string", length=45, nullable=true)
     */
    public $email;

    /**
     *
     * @var integer
     * @Column(type="integer", length=4, nullable=true)
     */
    public $status;

    /**
     *
     * @var string
     * @Column(type="string", nullable=false)
     */
    public $created_at;

    /**
     * Method to set the value of field id_company
     *
     * @param integer $id_company
     * @return $this
     */
    public function setIdCompany($id_company)
    {
        $this->id_company = $id_company;

        return $this;
    }

    /**
     * Method to set the value of field id_users
     *
     * @param integer $id_users
     * @return $this
     */
    public function setIdUsers($id_users)
    {
        $this->id_users = $id_users;

        return $this;
    }

    /**
     * Method to set the value of field id_company_client
     *
     * @param integer $id_company_client
     * @return $this
     */
    public function setIdCompanyClient($id_company_client)
    {
        $this->id_company_client = $id_company_client;

        return $this;
    }

    /**
     * Method to set the value of field id_legal_constitution
     *
     * @param integer $id_legal_constitution
     * @return $this
     */
    public function setIdLegalConstitution($id_legal_constitution)
    {
        $this->id_legal_constitution = $id_legal_constitution;

        return $this;
    }

    /**
     * Method to set the value of field id_company_position
     *
     * @param integer $id_company_position
     * @return $this
     */
    public function setIdCompanyPosition($id_company_position)
    {
        $this->id_company_position = $id_company_position;

        return $this;
    }

    /**
     * Method to set the value of field id_size_company
     *
     * @param integer $id_size_company
     * @return $this
     */
    public function setIdSizeCompany($id_size_company)
    {
        $this->id_size_company = $id_size_company;

        return $this;
    }

    /**
     * Method to set the value of field id_company_assets
     *
     * @param integer $id_company_assets
     * @return $this
     */
    public function setIdCompanyAssets($id_company_assets)
    {
        $this->id_company_assets = $id_company_assets;

        return $this;
    }

    /**
     * Method to set the value of field id_employee_number
     *
     * @param integer $id_employee_number
     * @return $this
     */
    public function setIdEmployeeNumber($id_employee_number)
    {
        $this->id_employee_number = $id_employee_number;

        return $this;
    }

    /**
     * Method to set the value of field id_company_sector
     *
     * @param integer $id_company_sector
     * @return $this
     */
    public function setIdCompanySector($id_company_sector)
    {
        $this->id_company_sector = $id_company_sector;

        return $this;
    }

    /**
     * Method to set the value of field id_coverage
     *
     * @param integer $id_coverage
     * @return $this
     */
    public function setIdCoverage($id_coverage)
    {
        $this->id_coverage = $id_coverage;

        return $this;
    }

    /**
     * Method to set the value of field name
     *
     * @param string $name
     * @return $this
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Method to set the value of field description
     *
     * @param string $description
     * @return $this
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Method to set the value of field slogan
     *
     * @param string $slogan
     * @return $this
     */
    public function setSlogan($slogan)
    {
        $this->slogan = $slogan;

        return $this;
    }

    /**
     * Method to set the value of field logo
     *
     * @param string $logo
     * @return $this
     */
    public function setLogo($logo)
    {
        $this->logo = $logo;

        return $this;
    }

    /**
     * Method to set the value of field address
     *
     * @param string $address
     * @return $this
     */
    public function setAddress($address)
    {
        $this->address = $address;

        return $this;
    }

    /**
     * Method to set the value of field comerce_camera_year
     *
     * @param string $comerce_camera_year
     * @return $this
     */
    public function setComerceCameraYear($comerce_camera_year)
    {
        $this->comerce_camera_year = $comerce_camera_year;

        return $this;
    }

    /**
     * Method to set the value of field contact_number
     *
     * @param string $contact_number
     * @return $this
     */
    public function setContactNumber($contact_number)
    {
        $this->contact_number = $contact_number;

        return $this;
    }

    /**
     * Method to set the value of field webpage
     *
     * @param string $webpage
     * @return $this
     */
    public function setWebpage($webpage)
    {
        $this->webpage = $webpage;

        return $this;
    }

    /**
     * Method to set the value of field email
     *
     * @param string $email
     * @return $this
     */
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Method to set the value of field created_at
     *
     * @param string $created_at
     * @return $this
     */
    public function setCreatedAt($created_at)
    {
        $this->created_at = $created_at;

        return $this;
    }

    /**
     * Returns the value of field id_company
     *
     * @return integer
     */
    public function getIdCompany()
    {
        return $this->id_company;
    }

    /**
     * Returns the value of field id_users
     *
     * @return integer
     */
    public function getIdUsers()
    {
        return $this->id_users;
    }

    /**
     * Returns the value of field id_company_client
     *
     * @return integer
     */
    public function getIdCompanyClient()
    {
        return $this->id_company_client;
    }

    /**
     * Returns the value of field id_legal_constitution
     *
     * @return integer
     */
    public function getIdLegalConstitution()
    {
        return $this->id_legal_constitution;
    }

    /**
     * Returns the value of field id_company_position
     *
     * @return integer
     */
    public function getIdCompanyPosition()
    {
        return $this->id_company_position;
    }

    /**
     * Returns the value of field id_size_company
     *
     * @return integer
     */
    public function getIdSizeCompany()
    {
        return $this->id_size_company;
    }

    /**
     * Returns the value of field id_company_assets
     *
     * @return integer
     */
    public function getIdCompanyAssets()
    {
        return $this->id_company_assets;
    }

    /**
     * Returns the value of field id_employee_number
     *
     * @return integer
     */
    public function getIdEmployeeNumber()
    {
        return $this->id_employee_number;
    }

    /**
     * Returns the value of field id_company_sector
     *
     * @return integer
     */
    public function getIdCompanySector()
    {
        return $this->id_company_sector;
    }

    /**
     * Returns the value of field id_coverage
     *
     * @return integer
     */
    public function getIdCoverage()
    {
        return $this->id_coverage;
    }

    /**
     * Returns the value of field name
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Returns the value of field description
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Returns the value of field slogan
     *
     * @return string
     */
    public function getSlogan()
    {
        return $this->slogan;
    }

    /**
     * Returns the value of field logo
     *
     * @return string
     */
    public function getLogo()
    {
        return $this->logo;
    }

    /**
     * Returns the value of field address
     *
     * @return string
     */
    public function getAddress()
    {
        return $this->address;
    }

    /**
     * Returns the value of field comerce_camera_year
     *
     * @return string
     */
    public function getComerceCameraYear()
    {
        return $this->comerce_camera_year;
    }

    /**
     * Returns the value of field contact_number
     *
     * @return string
     */
    public function getContactNumber()
    {
        return $this->contact_number;
    }

    /**
     * Returns the value of field webpage
     *
     * @return string
     */
    public function getWebpage()
    {
        return $this->webpage;
    }

    /**
     * Returns the value of field email
     *
     * @return string
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Returns the value of field created_at
     *
     * @return string
     */
    public function getCreatedAt()
    {
        return $this->created_at;
    }

    /**
     * Method to set the value of field ceo
     *
     * @param string $ceo
     * @return $this
     */
    public function setCeo($ceo)
    {
        $this->ceo = $ceo;

        return $this;
    }

    /**
     * Returns the value of field ceo
     *
     * @return string
     */
    public function getCeo()
    {
        return $this->ceo;
    }

    /**
     * Initialize method for model.
     */
    public function initialize()
    {
        $this->belongsTo('id_company_assets', 'CompanyAssets', 'id_company_assets', ['alias' => 'CompanyAssets']);
        $this->belongsTo('id_company_sector', 'CompanySector', 'id_company_sector', ['alias' => 'CompanySector']);
        $this->belongsTo('id_coverage', 'Coverage', 'id_coverage', ['alias' => 'Coverage']);
        $this->belongsTo('id_employee_number', 'EmployeeNumber', 'id_employee_number', ['alias' => 'EmployeeNumber']);
        $this->belongsTo('id_legal_constitution', 'LegalConstitution', 'id_legal_constitution', ['alias' => 'LegalConstitution']);
        $this->belongsTo('id_size_company', 'SizeCompany', 'id_size_company', ['alias' => 'SizeCompany']);
        $this->belongsTo('id_users', 'Users', 'id_users', ['alias' => 'Users']);
    }

    /**
     * Allows to query a set of records that match the specified conditions
     *
     * @param mixed $parameters
     * @return Company[]
     */
    public static function find($parameters = null)
    {
        return parent::find($parameters);
    }

    /**
     * Allows to query the first record that match the specified conditions
     *
     * @param mixed $parameters
     * @return Company
     */
    public static function findFirst($parameters = null)
    {
        return parent::findFirst($parameters);
    }

    /**
     * Returns table name mapped in the model.
     *
     * @return string
     */
    public function getSource()
    {
        return 'company';
    }

}
