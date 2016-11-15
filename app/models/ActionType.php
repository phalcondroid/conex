<?php

class ActionType extends \Phalcon\Mvc\Model
{

    /**
     *
     * @var integer
     * @Primary
     * @Identity
     * @Column(type="integer", length=11, nullable=false)
     */
    public $id_action_type;

    /**
     *
     * @var string
     * @Column(type="string", length=45, nullable=true)
     */
    public $action_type;

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
     * Method to set the value of field action_type
     *
     * @param string $action_type
     * @return $this
     */
    public function setActionType($action_type)
    {
        $this->action_type = $action_type;

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
     * Returns the value of field id_action_type
     *
     * @return integer
     */
    public function getIdActionType()
    {
        return $this->id_action_type;
    }

    /**
     * Returns the value of field action_type
     *
     * @return string
     */
    public function getActionType()
    {
        return $this->action_type;
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
        $this->hasMany('id_action_type', 'Action', 'id_action_type', ['alias' => 'Action']);
        $this->hasMany('id_action_type', 'Permissions', 'id_action_type', ['alias' => 'Permissions']);
    }

    /**
     * Allows to query a set of records that match the specified conditions
     *
     * @param mixed $parameters
     * @return ActionType[]
     */
    public static function find($parameters = null)
    {
        return parent::find($parameters);
    }

    /**
     * Allows to query the first record that match the specified conditions
     *
     * @param mixed $parameters
     * @return ActionType
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
        return 'action_type';
    }

}
