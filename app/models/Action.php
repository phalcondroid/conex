<?php

class Action extends \Phalcon\Mvc\Model
{

    /**
     *
     * @var integer
     * @Primary
     * @Identity
     * @Column(type="integer", length=11, nullable=false)
     */
    public $id_action;

    /**
     *
     * @var integer
     * @Column(type="integer", length=11, nullable=false)
     */
    public $id_action_type;

    /**
     *
     * @var string
     * @Column(type="string", length=45, nullable=true)
     */
    public $action;

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
     * Method to set the value of field id_action
     *
     * @param integer $id_action
     * @return $this
     */
    public function setIdAction($id_action)
    {
        $this->id_action = $id_action;

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
     * Method to set the value of field action
     *
     * @param string $action
     * @return $this
     */
    public function setAction($action)
    {
        $this->action = $action;

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
     * Returns the value of field id_action
     *
     * @return integer
     */
    public function getIdAction()
    {
        return $this->id_action;
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
     * Returns the value of field action
     *
     * @return string
     */
    public function getAction()
    {
        return $this->action;
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
        $this->hasMany('id_action', 'MenuItem', 'id_action', ['alias' => 'MenuItem']);
        $this->belongsTo('id_action_type', 'ActionType', 'id_action_type', ['alias' => 'ActionType']);
    }

    /**
     * Allows to query a set of records that match the specified conditions
     *
     * @param mixed $parameters
     * @return Action[]
     */
    public static function find($parameters = null)
    {
        return parent::find($parameters);
    }

    /**
     * Allows to query the first record that match the specified conditions
     *
     * @param mixed $parameters
     * @return Action
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
        return 'action';
    }

}
