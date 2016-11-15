<?php

class Permissions extends \Phalcon\Mvc\Model
{

    /**
     *
     * @var integer
     * @Primary
     * @Identity
     * @Column(type="integer", length=11, nullable=false)
     */
    public $id_permissions;

    /**
     *
     * @var integer
     * @Column(type="integer", length=11, nullable=false)
     */
    public $id_action_type;

    /**
     *
     * @var integer
     * @Column(type="integer", length=11, nullable=false)
     */
    public $id_menu;

    /**
     *
     * @var string
     * @Column(type="string", length=45, nullable=true)
     */
    public $permissions;

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
     * Method to set the value of field id_permissions
     *
     * @param integer $id_permissions
     * @return $this
     */
    public function setIdPermissions($id_permissions)
    {
        $this->id_permissions = $id_permissions;

        return $this;
    }

    /**
     * Method to set the value of field id_action_type
     *
     * @param integer $id_action_type
     * @return $this
     */
    public function setIdActionType($id_action_type)
    {
        $this->id_action_type = $id_action_type;

        return $this;
    }

    /**
     * Method to set the value of field id_menu
     *
     * @param integer $id_menu
     * @return $this
     */
    public function setIdMenu($id_menu)
    {
        $this->id_menu = $id_menu;

        return $this;
    }

    /**
     * Method to set the value of field permissions
     *
     * @param string $permissions
     * @return $this
     */
    public function setPermissions($permissions)
    {
        $this->permissions = $permissions;

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
     * Returns the value of field id_permissions
     *
     * @return integer
     */
    public function getIdPermissions()
    {
        return $this->id_permissions;
    }

    /**
     * Returns the value of field id_action_type
     *
     * @return integer
     */
    public function getIdActionType()
    {
        return $this->id_action_type;
    }

    /**
     * Returns the value of field id_menu
     *
     * @return integer
     */
    public function getIdMenu()
    {
        return $this->id_menu;
    }

    /**
     * Returns the value of field permissions
     *
     * @return string
     */
    public function getPermissions()
    {
        return $this->permissions;
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
        $this->belongsTo('id_action_type', 'ActionType', 'id_action_type', ['alias' => 'ActionType']);
        $this->belongsTo('id_menu', 'Menu', 'id_menu', ['alias' => 'Menu']);
    }

    /**
     * Allows to query a set of records that match the specified conditions
     *
     * @param mixed $parameters
     * @return Permissions[]
     */
    public static function find($parameters = null)
    {
        return parent::find($parameters);
    }

    /**
     * Allows to query the first record that match the specified conditions
     *
     * @param mixed $parameters
     * @return Permissions
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
        return 'permissions';
    }

}
