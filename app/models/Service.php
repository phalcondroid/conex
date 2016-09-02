<?php

class Service extends \Phalcon\Mvc\Model
{

    /**
     *
     * @var integer
     */
    public $id_service;

    /**
     *
     * @var integer
     */
    public $id_service_type;

    /**
     *
     * @var integer
     */
    public $id_users;

    /**
     *
     * @var string
     */
    public $name;

    /**
     *
     * @var string
     */
    public $description;

    /**
     *
     * @var string
     */
    public $info_json;

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
        $this->hasMany('id_service', 'ServiceGallery', 'id_service', array('alias' => 'ServiceGallery'));
        $this->belongsTo('id_service_type', 'ServiceType', 'id_service_type', array('alias' => 'ServiceType'));
        $this->belongsTo('id_users', 'Users', 'id_users', array('alias' => 'Users'));
    }

    /**
     * Returns table name mapped in the model.
     *
     * @return string
     */
    public function getSource()
    {
        return 'service';
    }

    /**
     * Allows to query a set of records that match the specified conditions
     *
     * @param mixed $parameters
     * @return Service[]
     */
    public static function find($parameters = null)
    {
        return parent::find($parameters);
    }

    /**
     * Allows to query the first record that match the specified conditions
     *
     * @param mixed $parameters
     * @return Service
     */
    public static function findFirst($parameters = null)
    {
        return parent::findFirst($parameters);
    }

}
