<?php

class Users extends \Phalcon\Mvc\Model
{

    /**
     *
     * @var integer
     */
    public $id_users;

    /**
     *
     * @var integer
     */
    public $id_student_type;

    /**
     *
     * @var string
     */
    public $name;

    /**
     *
     * @var string
     */
    public $identify;

    /**
     *
     * @var string
     */
    public $mobile_phone;

    /**
     *
     * @var string
     */
    public $address;

    /**
     *
     * @var string
     */
    public $avatar;

    /**
     *
     * @var string
     */
    public $country;

    /**
     *
     * @var string
     */
    public $city;

    /**
     *
     * @var string
     */
    public $birthday;

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
        $this->hasMany('id_users', 'Advertisement', 'id_users', array('alias' => 'Advertisement'));
        $this->hasMany('id_users', 'Company', 'id_users', array('alias' => 'Company'));
        $this->hasMany('id_users', 'Products', 'id_users', array('alias' => 'Products'));
        $this->hasMany('id_users', 'Service', 'id_users', array('alias' => 'Service'));
        $this->hasMany('id_users', 'UserEmail', 'id_users', array('alias' => 'UserEmail'));
        $this->belongsTo('id_student_type', 'StudentType', 'id_student_type', array('alias' => 'StudentType'));
    }

    /**
     * Returns table name mapped in the model.
     *
     * @return string
     */
    public function getSource()
    {
        return 'users';
    }

    /**
     * Allows to query a set of records that match the specified conditions
     *
     * @param mixed $parameters
     * @return Users[]
     */
    public static function find($parameters = null)
    {
        return parent::find($parameters);
    }

    /**
     * Allows to query the first record that match the specified conditions
     *
     * @param mixed $parameters
     * @return Users
     */
    public static function findFirst($parameters = null)
    {
        return parent::findFirst($parameters);
    }

}
