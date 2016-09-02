<?php

class EventGuest extends \Phalcon\Mvc\Model
{

    /**
     *
     * @var integer
     */
    public $id_event_guest;

    /**
     *
     * @var string
     */
    public $name;

    /**
     *
     * @var string
     */
    public $details;

    /**
     *
     * @var string
     */
    public $speaker_time;

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
        $this->hasMany('id_event_guest', 'EventTopic', 'id_event_guest', array('alias' => 'EventTopic'));
    }

    /**
     * Returns table name mapped in the model.
     *
     * @return string
     */
    public function getSource()
    {
        return 'event_guest';
    }

    /**
     * Allows to query a set of records that match the specified conditions
     *
     * @param mixed $parameters
     * @return EventGuest[]
     */
    public static function find($parameters = null)
    {
        return parent::find($parameters);
    }

    /**
     * Allows to query the first record that match the specified conditions
     *
     * @param mixed $parameters
     * @return EventGuest
     */
    public static function findFirst($parameters = null)
    {
        return parent::findFirst($parameters);
    }

}
