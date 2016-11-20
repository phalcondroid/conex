<?php

class EventType extends \Phalcon\Mvc\Model
{

    /**
     *
     * @var integer
     * @Primary
     * @Identity
     * @Column(type="integer", length=11, nullable=false)
     */
    public $id_event_type;

    /**
     *
     * @var string
     * @Column(type="string", length=45, nullable=true)
     */
    public $event_type;

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
        $this->hasMany('id_event_type', 'Events', 'id_event_type', ['alias' => 'Events']);
    }

    /**
     * Method to set the value of field id_event_type
     *
     * @param integer $id_event_type
     * @return $this
     */
    public function setIdEventType($id_event_type)
    {
        $this->id_event_type = $id_event_type;

        return $this;
    }

    /**
     * Method to set the value of field event_type
     *
     * @param string $event_type
     * @return $this
     */
    public function setEventType($event_type)
    {
        $this->event_type = $event_type;

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
     * Returns the value of field id_event_type
     *
     * @return integer
     */
    public function getIdEventType()
    {
        return $this->id_event_type;
    }

    /**
     * Returns the value of field event_type
     *
     * @return string
     */
    public function getEventType()
    {
        return $this->event_type;
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
     * Allows to query a set of records that match the specified conditions
     *
     * @param mixed $parameters
     * @return EventType[]
     */
    public static function find($parameters = null)
    {
        return parent::find($parameters);
    }

    /**
     * Allows to query the first record that match the specified conditions
     *
     * @param mixed $parameters
     * @return EventType
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
        return 'event_type';
    }

}
