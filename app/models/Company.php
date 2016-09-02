<?php

use Phalcon\Mvc\Model\Validator\Email as Email;

class Company extends \Phalcon\Mvc\Model
{

    /**
     *
     * @var integer
     */
    public $id_company;

    /**
     *
     * @var integer
     */
    public $id_users;

    /**
     *
     * @var integer
     */
    public $id_legal_constitution;

    /**
     *
     * @var integer
     */
    public $id_size_company;

    /**
     *
     * @var integer
     */
    public $id_company_assets;

    /**
     *
     * @var integer
     */
    public $id_employee_number;

    /**
     *
     * @var integer
     */
    public $id_company_sector;

    /**
     *
     * @var integer
     */
    public $id_coverage;

    /**
     *
     * @var string
     */
    public $name;

    /**
     *
     * @var string
     */
    public $slogan;

    /**
     *
     * @var string
     */
    public $logo;

    /**
     *
     * @var string
     */
    public $address;

    /**
     *
     * @var string
     */
    public $ceo;

    /**
     *
     * @var string
     */
    public $webpage;

    /**
     *
     * @var string
     */
    public $email;

    /**
     *
     * @var string
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
                array(
                    'field'    => 'email',
                    'required' => true,
                )
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
        $this->belongsTo('id_company_assets', 'CompanyAssets', 'id_company_assets', array('alias' => 'CompanyAssets'));
        $this->belongsTo('id_company_sector', 'CompanySector', 'id_company_sector', array('alias' => 'CompanySector'));
        $this->belongsTo('id_coverage', 'Coverage', 'id_coverage', array('alias' => 'Coverage'));
        $this->belongsTo('id_employee_number', 'EmployeeNumber', 'id_employee_number', array('alias' => 'EmployeeNumber'));
        $this->belongsTo('id_legal_constitution', 'LegalConstitution', 'id_legal_constitution', array('alias' => 'LegalConstitution'));
        $this->belongsTo('id_size_company', 'SizeCompany', 'id_size_company', array('alias' => 'SizeCompany'));
        $this->belongsTo('id_users', 'Users', 'id_users', array('alias' => 'Users'));
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
