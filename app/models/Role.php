<?php

class Role extends \Phalcon\Mvc\Model
{

    /**
     *
     * @var integer
     * @Primary
     * @Identity
     * @Column(type="integer", length=11, nullable=false)
     */
    public $id_role;

    /**
     *
     * @var string
     * @Column(type="string", length=45, nullable=true)
     */
    public $profile;

    /**
     *
     * @var string
     * @Column(type="string", nullable=false)
     */
    public $default_redirect;

    /**
     *
     * @var integer
     * @Column(type="integer", length=2, nullable=false)
     */
    public $status;

    /**
     *
     * @var string
     * @Column(type="string", nullable=true)
     */
    public $created_at;

    /**
     * Method to set the value of field id_role
     *
     * @param integer $id_role
     * @return $this
     */
    public function setIdRole($id_role)
    {
        $this->id_role = $id_role;

        return $this;
    }

    /**
     * Method to set the value of field profile
     *
     * @param string $profile
     * @return $this
     */
    public function setProfile($profile)
    {
        $this->profile = $profile;

        return $this;
    }

    /**
     * Method to set the value of field default_redirect
     *
     * @param string $default_redirect
     * @return $this
     */
    public function setDefaultRedirect($default_redirect)
    {
        $this->default_redirect = $default_redirect;

        return $this;
    }

    /**
     * Method to set the value of field status
     *
     * @param integer $status
     * @return $this
     */
    public function setStatus($status)
    {
        $this->status = $status;

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
     * Returns the value of field id_role
     *
     * @return integer
     */
    public function getIdRole()
    {
        return $this->id_role;
    }

    /**
     * Returns the value of field profile
     *
     * @return string
     */
    public function getProfile()
    {
        return $this->profile;
    }

    /**
     * Returns the value of field default_redirect
     *
     * @return string
     */
    public function getDefaultRedirect()
    {
        return $this->default_redirect;
    }

    /**
     * Returns the value of field status
     *
     * @return integer
     */
    public function getStatus()
    {
        return $this->status;
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
     * Initialize method for model.
     */
    public function initialize()
    {
        $this->hasMany('id_role', 'Menu', 'id_role', ['alias' => 'Menu']);
        $this->hasMany('id_role', 'Users', 'id_role', ['alias' => 'Users']);
    }

    /**
     * Allows to query a set of records that match the specified conditions
     *
     * @param mixed $parameters
     * @return Role[]
     */
    public static function find($parameters = null)
    {
        return parent::find($parameters);
    }

    /**
     * Allows to query the first record that match the specified conditions
     *
     * @param mixed $parameters
     * @return Role
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
        return 'role';
    }

}
