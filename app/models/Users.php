<?php

class Users extends \Phalcon\Mvc\Model
{

    /**
     *
     * @var integer
     * @Primary
     * @Identity
     * @Column(type="integer", length=11, nullable=false)
     */
    public $id_users;

    /**
     *
     * @var integer
     * @Column(type="integer", length=11, nullable=false)
     */
    public $id_student_type;

    /**
     *
     * @var integer
     * @Column(type="integer", length=11, nullable=false)
     */
    public $id_role;

    /**
     *
     * @var string
     * @Column(type="string", length=100, nullable=true)
     */
    public $user;

    /**
     *
     * @var string
     * @Column(type="string", length=100, nullable=true)
     */
    public $password;

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
    public $identify;

    /**
     *
     * @var string
     * @Column(type="string", length=45, nullable=true)
     */
    public $mobile_phone;

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
    public $avatar;

    /**
     *
     * @var string
     * @Column(type="string", length=45, nullable=true)
     */
    public $country;

    /**
     *
     * @var string
     * @Column(type="string", length=45, nullable=true)
     */
    public $city;

    /**
     *
     * @var string
     * @Column(type="string", nullable=true)
     */
    public $birthday;

    /**
     *
     * @var integer
     * @Column(type="integer", length=2, nullable=true)
     */
    public $status;

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
        $this->hasMany('id_users', 'Advertisement', 'id_users', ['alias' => 'Advertisement']);
        $this->hasMany('id_users', 'Company', 'id_users', ['alias' => 'Company']);
        $this->hasMany('id_users', 'Products', 'id_users', ['alias' => 'Products']);
        $this->hasMany('id_users', 'Service', 'id_users', ['alias' => 'Service']);
        $this->hasMany('id_users', 'UserEmail', 'id_users', ['alias' => 'UserEmail']);
        $this->belongsTo('id_role', 'Role', 'id_role', ['alias' => 'Role']);
        $this->belongsTo('id_student_type', 'StudentType', 'id_student_type', ['alias' => 'StudentType']);
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
