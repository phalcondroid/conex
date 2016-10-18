<?php

class Controller extends \Phalcon\Mvc\Model
{

    /**
     *
     * @var integer
     * @Primary
     * @Identity
     * @Column(type="integer", length=11, nullable=false)
     */
    public $id_controller;

    /**
     *
     * @var string
     * @Column(type="string", length=45, nullable=true)
     */
    public $controller;

    /**
     *
     * @var string
     * @Column(type="string", length=45, nullable=true)
     */
    public $label;

    /**
     *
     * @var integer
     * @Column(type="integer", length=2, nullable=true)
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
        $this->hasMany('id_controller', 'Menu', 'id_controller', ['alias' => 'Menu']);
    }

    /**
     * Returns table name mapped in the model.
     *
     * @return string
     */
    public function getSource()
    {
        return 'controller';
    }

    /**
     * Allows to query a set of records that match the specified conditions
     *
     * @param mixed $parameters
     * @return Controller[]
     */
    public static function find($parameters = null)
    {
        return parent::find($parameters);
    }

    /**
     * Allows to query the first record that match the specified conditions
     *
     * @param mixed $parameters
     * @return Controller
     */
    public static function findFirst($parameters = null)
    {
        return parent::findFirst($parameters);
    }

}
