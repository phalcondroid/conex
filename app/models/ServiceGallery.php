<?php

class ServiceGallery extends \Phalcon\Mvc\Model
{

    /**
     *
     * @var integer
     */
    public $id_service_gallery;

    /**
     *
     * @var integer
     */
    public $id_service;

    /**
     *
     * @var string
     */
    public $image;

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
        $this->belongsTo('id_service', 'Service', 'id_service', array('alias' => 'Service'));
    }

    /**
     * Returns table name mapped in the model.
     *
     * @return string
     */
    public function getSource()
    {
        return 'service_gallery';
    }

    /**
     * Allows to query a set of records that match the specified conditions
     *
     * @param mixed $parameters
     * @return ServiceGallery[]
     */
    public static function find($parameters = null)
    {
        return parent::find($parameters);
    }

    /**
     * Allows to query the first record that match the specified conditions
     *
     * @param mixed $parameters
     * @return ServiceGallery
     */
    public static function findFirst($parameters = null)
    {
        return parent::findFirst($parameters);
    }

}
