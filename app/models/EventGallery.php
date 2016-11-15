<?php

class EventGallery extends \Phalcon\Mvc\Model
{

    /**
     *
     * @var integer
     * @Primary
     * @Identity
     * @Column(type="integer", length=11, nullable=false)
     */
    public $id_events_gallery;

    /**
     *
     * @var integer
     * @Column(type="integer", length=11, nullable=false)
     */
    public $id_events;

    /**
     *
     * @var string
     * @Column(type="string", length=45, nullable=true)
     */
    public $image;

    /**
     *
     * @var string
     * @Column(type="string", nullable=false)
     */
    public $created_at;

    /**
     * Method to set the value of field id_events_gallery
     *
     * @param integer $id_events_gallery
     * @return $this
     */
    public function setIdEventsGallery($id_events_gallery)
    {
        $this->id_events_gallery = $id_events_gallery;

        return $this;
    }

    /**
     * Method to set the value of field id_events
     *
     * @param integer $id_events
     * @return $this
     */
    public function setIdEvents($id_events)
    {
        $this->id_events = $id_events;

        return $this;
    }

    /**
     * Method to set the value of field image
     *
     * @param string $image
     * @return $this
     */
    public function setImage($image)
    {
        $this->image = $image;

        return $this;
    }

    /**
     * Method to set the value of field created_at
     *
     * @param string $created_at
     * @return $this
     */
    public function setCreatedAt($created_at)
    {
        $this->created_at = $created_at;

        return $this;
    }

    /**
     * Returns the value of field id_events_gallery
     *
     * @return integer
     */
    public function getIdEventsGallery()
    {
        return $this->id_events_gallery;
    }

    /**
     * Returns the value of field id_events
     *
     * @return integer
     */
    public function getIdEvents()
    {
        return $this->id_events;
    }

    /**
     * Returns the value of field image
     *
     * @return string
     */
    public function getImage()
    {
        return $this->image;
    }

    /**
     * Returns the value of field created_at
     *
     * @return string
     */
    public function getCreatedAt()
    {
        return $this->created_at;
    }

    /**
     * Initialize method for model.
     */
    public function initialize()
    {
        $this->belongsTo('id_events', 'Events', 'id_events', ['alias' => 'Events']);
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

    /**
     * Returns table name mapped in the model.
     *
     * @return string
     */
    public function getSource()
    {
        return 'event_gallery';
    }

}
