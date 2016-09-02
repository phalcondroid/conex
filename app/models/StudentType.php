<?php

class StudentType extends \Phalcon\Mvc\Model
{

    /**
     *
     * @var integer
     */
    public $id_student_type;

    /**
     *
     * @var string
     */
    public $student_type;

    /**
     *
     * @var string
     */
    public $created_at;

    /**
     * Initialize method for model.
     */
    public function initialize()
    {
        $this->hasMany('id_student_type', 'Users', 'id_student_type', array('alias' => 'Users'));
    }

    /**
     * Returns table name mapped in the model.
     *
     * @return string
     */
    public function getSource()
    {
        return 'student_type';
    }

    /**
     * Allows to query a set of records that match the specified conditions
     *
     * @param mixed $parameters
     * @return StudentType[]
     */
    public static function find($parameters = null)
    {
        return parent::find($parameters);
    }

    /**
     * Allows to query the first record that match the specified conditions
     *
     * @param mixed $parameters
     * @return StudentType
     */
    public static function findFirst($parameters = null)
    {
        return parent::findFirst($parameters);
    }

}
