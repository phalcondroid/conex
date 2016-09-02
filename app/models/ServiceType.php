<?php

class ServiceType extends \Phalcon\Mvc\Model
{

    /**
     *
     * @var integer
     */
    public $id_service_type;

    /**
     *
     * @var string
     */
    public $service_type;

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
        $this->hasMany('id_service_type', 'Service', 'id_service_type', array('alias' => 'Service'));
    }

    /**
     * Returns table name mapped in the model.
     *
     * @return string
     */
    public function getSource()
    {
        return 'service_type';
    }

    /**
     * Allows to query a set of records that match the specified conditions
     *
     * @param mixed $parameters
     * @return ServiceType[]
     */
    public static function find($parameters = null)
    {
        return parent::find($parameters);
    }

    /**
     * Allows to query the first record that match the specified conditions
     *
     * @param mixed $parameters
     * @return ServiceType
     */
    public static function findFirst($parameters = null)
    {
        return parent::findFirst($parameters);
    }

}
