<?php

class Advertisement extends \Phalcon\Mvc\Model
{

    /**
     *
     * @var integer
     */
    public $id_advertisement;

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
    public $publish_date;

    /**
     *
     * @var string
     */
    public $address;

    /**
     *
     * @var string
     */
    public $description;

    /**
     *
     * @var string
     */
    public $value;

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
        $this->hasMany('id_advertisement', 'AdvertisementCharacteristics', 'id_advertisement', array('alias' => 'AdvertisementCharacteristics'));
        $this->belongsTo('id_users', 'Users', 'id_users', array('alias' => 'Users'));
    }

    /**
     * Returns table name mapped in the model.
     *
     * @return string
     */
    public function getSource()
    {
        return 'advertisement';
    }

    /**
     * Allows to query a set of records that match the specified conditions
     *
     * @param mixed $parameters
     * @return Advertisement[]
     */
    public static function find($parameters = null)
    {
        return parent::find($parameters);
    }

    /**
     * Allows to query the first record that match the specified conditions
     *
     * @param mixed $parameters
     * @return Advertisement
     */
    public static function findFirst($parameters = null)
    {
        return parent::findFirst($parameters);
    }

}
