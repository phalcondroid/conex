<?php

class EventGuest extends \Phalcon\Mvc\Model
{

    /**
     *
     * @var integer
     * @Primary
     * @Identity
     * @Column(type="integer", length=11, nullable=false)
     */
    public $id_event_guest;

    /**
     *
     * @var string
     * @Column(type="string", length=45, nullable=true)
     */
    public $name;

    /**
     *
     * @var string
     * @Column(type="string", nullable=true)
     */
    public $details;

    /**
     *
     * @var string
     * @Column(type="string", nullable=true)
     */
    public $speaker_time;

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
        $this->hasMany('id_event_guest', 'EventTopic', 'id_event_guest', ['alias' => 'EventTopic']);
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
