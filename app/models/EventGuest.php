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
     * Method to set the value of field name
     *
     * @param string $name
     * @return $this
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Method to set the value of field details
     *
     * @param string $details
     * @return $this
     */
    public function setDetails($details)
    {
        $this->details = $details;

        return $this;
    }

    /**
     * Method to set the value of field speaker_time
     *
     * @param string $speaker_time
     * @return $this
     */
    public function setSpeakerTime($speaker_time)
    {
        $this->speaker_time = $speaker_time;

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
     * Returns the value of field id_event_guest
     *
     * @return integer
     */
    public function getIdEventGuest()
    {
        return $this->id_event_guest;
    }

    /**
     * Returns the value of field name
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Returns the value of field details
     *
     * @return string
     */
    public function getDetails()
    {
        return $this->details;
    }

    /**
     * Returns the value of field speaker_time
     *
     * @return string
     */
    public function getSpeakerTime()
    {
        return $this->speaker_time;
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
        $this->hasMany('id_event_guest', 'EventTopic', 'id_event_guest', ['alias' => 'EventTopic']);
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

    /**
     * Returns table name mapped in the model.
     *
     * @return string
     */
    public function getSource()
    {
        return 'event_guest';
    }

}
