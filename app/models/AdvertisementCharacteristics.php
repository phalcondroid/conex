<?php

class AdvertisementCharacteristics extends \Phalcon\Mvc\Model
{

    /**
     *
     * @var integer
     */
    public $id_advertisement_characteristics;

    /**
     *
     * @var integer
     */
    public $id_advertisement;

    /**
     *
     * @var string
     */
    public $title;

    /**
     *
     * @var string
     */
    public $description;

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
        $this->belongsTo('id_advertisement', 'Advertisement', 'id_advertisement', array('alias' => 'Advertisement'));
    }

    /**
     * Returns table name mapped in the model.
     *
     * @return string
     */
    public function getSource()
    {
        return 'advertisement_characteristics';
    }

    /**
     * Allows to query a set of records that match the specified conditions
     *
     * @param mixed $parameters
     * @return AdvertisementCharacteristics[]
     */
    public static function find($parameters = null)
    {
        return parent::find($parameters);
    }

    /**
     * Allows to query the first record that match the specified conditions
     *
     * @param mixed $parameters
     * @return AdvertisementCharacteristics
     */
    public static function findFirst($parameters = null)
    {
        return parent::findFirst($parameters);
    }

}
