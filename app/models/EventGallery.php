<?php

class EventGallery extends \Phalcon\Mvc\Model
{

    /**
     *
     * @var integer
     */
    public $id_events_gallery;

    /**
     *
     * @var integer
     */
    public $id_events;

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
        $this->belongsTo('id_events', 'Events', 'id_events', array('alias' => 'Events'));
    }

    /**
     * Returns table name mapped in the model.
     *
     * @return string
     */
    public function getSource()
    {
        return 'event_gallery';
    }

    /**
     * Allows to query a set of records that match the specified conditions
     *
     * @param mixed $parameters
     * @return EventGallery[]
     */
    public static function find($parameters = null)
    {
        return parent::find($parameters);
    }

    /**
     * Allows to query the first record that match the specified conditions
     *
     * @param mixed $parameters
     * @return EventGallery
     */
    public static function findFirst($parameters = null)
    {
        return parent::findFirst($parameters);
    }

}
