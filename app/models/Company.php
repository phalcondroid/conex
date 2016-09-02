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
     * @Column(type="integer", length=11, nullable=false)
     */
    public $id_legal_constitution;

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
    public $ceo;

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
     * @var string
     * @Column(type="string", nullable=false)
     */
    public $created_at;

    /**
     * Validations and business logic
     *
     * @return boolean
     */
    public function validation()
    {
        $this->validate(
            new Email(
                [
                    'field'    => 'email',
                    'required' => true,
                ]
            )
        );

        if ($this->validationHasFailed() == true) {
            return false;
        }

        return true;
    }

    /**
     * Initialize method for model.
     */
    public function initialize()
    {
        $this->belongsTo('id_legal_constitution', 'LegalConstitution', 'id_legal_constitution', ['alias' => 'LegalConstitution']);
        $this->belongsTo('id_size_company', 'SizeCompany', 'id_size_company', ['alias' => 'SizeCompany']);
        $this->belongsTo('id_company_assets', 'CompanyAssets', 'id_company_assets', ['alias' => 'CompanyAssets']);
        $this->belongsTo('id_employee_number', 'EmployeeNumber', 'id_employee_number', ['alias' => 'EmployeeNumber']);
        $this->belongsTo('id_company_sector', 'CompanySector', 'id_company_sector', ['alias' => 'CompanySector']);
        $this->belongsTo('id_coverage', 'Coverage', 'id_coverage', ['alias' => 'Coverage']);
        $this->belongsTo('id_users', 'Users', 'id_users', ['alias' => 'Users']);
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

}
