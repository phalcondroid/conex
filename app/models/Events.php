<?php

class Events extends \Phalcon\Mvc\Model
{

    /**
     *
     * @var integer
     */
    public $id_events;

    /**
     *
     * @var integer
     */
    public $id_event_type;

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
    public $slogan;

    /**
     *
     * @var string
     */
    public $start_date;

    /**
     *
     * @var string
     */
    public $finish_date;

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
        $this->hasMany('id_events', 'EventGallery', 'id_events', array('alias' => 'EventGallery'));
        $this->hasMany('id_events', 'EventTopic', 'id_events', array('alias' => 'EventTopic'));
    }

    /**
     * Returns table name mapped in the model.
     *
     * @return string
     */
    public function getSource()
    {
        return 'events';
    }

    /**
     * Allows to query a set of records that match the specified conditions
     *
     * @param mixed $parameters
     * @return Events[]
     */
    public static function find($parameters = null)
    {
        return parent::find($parameters);
    }

    /**
     * Allows to query the first record that match the specified conditions
     *
     * @param mixed $parameters
     * @return Events
     */
    public static function findFirst($parameters = null)
    {
        return parent::findFirst($parameters);
    }

}
