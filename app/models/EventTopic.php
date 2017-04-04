<?php

use \Phalcon\Mvc\Model\Relation;

class EventTopic extends \Phalcon\Mvc\Model
{

    /**
     *
     * @var integer
     * @Primary
     * @Identity
     * @Column(type="integer", length=11, nullable=false)
     */
    public $id_event_topic;

    /**
     *
     * @var integer
     * @Column(type="integer", length=11, nullable=false)
     */
    public $id_event_guest;

    /**
     *
     * @var integer
     * @Column(type="integer", length=11, nullable=false)
     */
    public $id_events;

    /**
     *
     * @var string
     * @Column(type="string", nullable=true)
     */
    public $event_topic;

    /**
     *
     * @var string
     * @Column(type="string", nullable=true)
     */
    public $date;

    /**
     *
     * @var string
     * @Column(type="string", nullable=true)
     */
    public $created_at;

    /**
     * Method to set the value of field id_event_topic
     *
     * @param integer $id_event_topic
     * @return $this
     */
    public function setIdEventTopic($id_event_topic)
    {
        $this->id_event_topic = $id_event_topic;

        return $this;
    }

    /**
     * Method to set the value of field id_event_guest
     *
     * @param integer $id_event_guest
     * @return $this
     */
    public function setIdEventGuest($id_event_guest)
    {
        $this->id_event_guest = $id_event_guest;

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
     * Method to set the value of field event_topic
     *
     * @param string $event_topic
     * @return $this
     */
    public function setEventTopic($event_topic)
    {
        $this->event_topic = $event_topic;

        return $this;
    }

    /**
     * Method to set the value of field date
     *
     * @param string $date
     * @return $this
     */
    public function setDate($date)
    {
        $this->date = $date;

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
     * Returns the value of field id_event_topic
     *
     * @return integer
     */
    public function getIdEventTopic()
    {
        return $this->id_event_topic;
    }

    /**
     * Returns the value of field id_event_guest
     *
     * @return integer
     */
    public function getIdEventGuest()
    {
        return $this->id_event_guest;
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
     * Returns the value of field event_topic
     *
     * @return string
     */
    public function getEventTopic()
    {
        return $this->event_topic;
    }

    /**
     * Returns the value of field date
     *
     * @return string
     */
    public function getDate()
    {
        return $this->date;
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
     *
     */
    public function beforeDelete() {
        $behavior = new \Phalcon\Mvc\Model\Behavior\SoftDelete(array(
            'field' => 'status',
            'value' => '0'
        ));
        $this->addBehavior($behavior);
    }

    /**
     * Initialize method for model.
     */
    public function initialize()
    {
        $this->belongsTo('id_event_guest', 'EventGuest', 'id_event_guest', [
            'alias' => 'EventGuest',
            "foreignKey" => array(
                "action" => Relation::ACTION_CASCADE,
            )
        ]);
        $this->belongsTo('id_events', 'Events', 'id_events', [
            'alias' => 'Events',
            "foreignKey" => array(
                "action" => Relation::ACTION_CASCADE,
            )
        ]);
    }

    /**
     * Allows to query a set of records that match the specified conditions
     *
     * @param mixed $parameters
     * @return EventTopic[]
     */
    public static function find($parameters = null)
    {
        return parent::find($parameters);
    }

    /**
     * Allows to query the first record that match the specified conditions
     *
     * @param mixed $parameters
     * @return EventTopic
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
        return 'event_topic';
    }

}
