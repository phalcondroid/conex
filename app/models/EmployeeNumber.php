<?php

class EmployeeNumber extends \Phalcon\Mvc\Model
{

    /**
     *
     * @var integer
     * @Primary
     * @Column(type="integer", length=11, nullable=false)
     */
    public $id_employee_number;

    /**
     *
     * @var string
     * @Column(type="string", length=45, nullable=true)
     */
    public $employee_number;

    /**
     *
     * @var string
     * @Column(type="string", nullable=false)
     */
    public $created_at;

    /**
     * Initialize method for model.
     */
    public function initialize()
    {
        $this->hasMany('id_employee_number', 'Company', 'id_employee_number', ['alias' => 'Company']);
    }

    /**
     * Returns table name mapped in the model.
     *
     * @return string
     */
    public function getSource()
    {
        return 'employee_number';
    }

    /**
     * Allows to query a set of records that match the specified conditions
     *
     * @param mixed $parameters
     * @return EmployeeNumber[]
     */
    public static function find($parameters = null)
    {
        return parent::find($parameters);
    }

    /**
     * Allows to query the first record that match the specified conditions
     *
     * @param mixed $parameters
     * @return EmployeeNumber
     */
    public static function findFirst($parameters = null)
    {
        return parent::findFirst($parameters);
    }

}
