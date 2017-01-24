<?php

use \Phalcon\Mvc\Model\Relation;

class EmployeeNumber extends \Phalcon\Mvc\Model
{

    /**
     *
     * @var integer
     * @Primary
     * @Identity
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
     * Method to set the value of field employee_number
     *
     * @param string $employee_number
     * @return $this
     */
    public function setEmployeeNumber($employee_number)
    {
        $this->employee_number = $employee_number;

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
     * Returns the value of field id_employee_number
     *
     * @return integer
     */
    public function getIdEmployeeNumber()
    {
        return $this->id_employee_number;
    }

    /**
     * Returns the value of field employee_number
     *
     * @return string
     */
    public function getEmployeeNumber()
    {
        return $this->employee_number;
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
     *
     */
    public function beforeDelete() {
        $behavior = new \Phalcon\Mvc\Model\Behavior\SoftDelete(array(
            'field' => 'status',
            'value' => '0'
        ));
        $this->addBehavior($behavior);
    }

    /**
     * Initialize method for model.
     */
    public function initialize()
    {
        $this->hasMany('id_employee_number', 'Company', 'id_employee_number', [
            'alias' => 'Company',
            "foreignKey" => array(
                "action" => Relation::ACTION_CASCADE,
            )
        ]);
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

    /**
     * Returns table name mapped in the model.
     *
     * @return string
     */
    public function getSource()
    {
        return 'employee_number';
    }

}
