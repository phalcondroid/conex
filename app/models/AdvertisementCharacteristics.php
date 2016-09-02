<?php

class AdvertisementCharacteristics extends \Phalcon\Mvc\Model
{

    /**
     *
     * @var integer
     * @Primary
     * @Identity
     * @Column(type="integer", length=11, nullable=false)
     */
    public $id_advertisement_characteristics;

    /**
     *
     * @var string
     * @Column(type="string", length=45, nullable=true)
     */
    public $title;

    /**
     *
     * @var string
     * @Column(type="string", nullable=true)
     */
    public $description;

    /**
     *
     * @var string
     * @Column(type="string", nullable=false)
     */
    public $created_at;

    /**
     * Initialize method for model.
     */
    public function initialize()
    {
        $this->hasMany('id_advertisement_characteristics', 'Advertisement', 'id_advertisement_characteristics', ['alias' => 'Advertisement']);
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
