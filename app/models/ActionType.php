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
     * Initialize method for model.
     */
    public function initialize()
    {
        $this->hasMany('id_action_type', 'Action', 'id_action_type', ['alias' => 'Action']);
        $this->hasMany('id_action_type', 'Permissions', 'id_action_type', ['alias' => 'Permissions']);
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

}
