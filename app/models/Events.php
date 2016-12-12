<?php

class Events extends \Phalcon\Mvc\Model
{

    /**
     *
     * @var integer
     * @Primary
     * @Identity
     * @Column(type="integer", length=11, nullable=false)
     */
    public $id_events;

    /**
     *
     * @var integer
     * @Column(type="integer", length=11, nullable=false)
     */
    public $id_event_type;

    /**
     *
     * @var integer
     * @Column(type="integer", length=11, nullable=false)
     */
    public $id_users;

    /**
     *
     * @var integer
     * @Column(type="integer", length=11, nullable=true)
     */
    public $id_company;

    /**
     *
     * @var string
     * @Column(type="string", length=45, nullable=true)
     */
    public $name;

    /**
     *
     * @var string
     * @Column(type="string", length=45, nullable=true)
     */
    public $address;

    /**
     *
     * @var string
     * @Column(type="string", length=45, nullable=true)
     */
    public $lat;

    /**
     *
     * @var string
     * @Column(type="string", length=45, nullable=true)
     */
    public $lng;

    /**
     *
     * @var integer
     * @Column(type="integer", length=11, nullable=true)
     */
    public $views;

    /**
     *
     * @var string
     * @Column(type="string", length=200, nullable=true)
     */
    public $logo;

    /**
     *
     * @var string
     * @Column(type="string", nullable=true)
     */
    public $slogan;

    /**
     *
     * @var string
     * @Column(type="string", nullable=true)
     */
    public $description;

    /**
     *
     * @var string
     * @Column(type="string", nullable=true)
     */
    public $start_date;

    /**
     *
     * @var string
     * @Column(type="string", nullable=true)
     */
    public $finish_date;

    /**
     *
     * @var string
     * @Column(type="string", nullable=true)
     */
    public $create_at;

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
     * Method to set the value of field id_users
     *
     * @param integer $id_users
     * @return $this
     */
    public function setIdUsers($id_users)
    {
        $this->id_users = $id_users;

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
     * Method to set the value of field address
     *
     * @param string $address
     * @return $this
     */
    public function setAddress($address)
    {
        $this->address = $address;

        return $this;
    }

    /**
     * Method to set the value of field description
     *
     * @param string $description
     * @return $this
     */
    public function setDescription($description)
    {
        $this->description = $description;

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
     * Method to set the value of field slogan
     *
     * @param string $slogan
     * @return $this
     */
    public function setSlogan($slogan)
    {
        $this->slogan = $slogan;

        return $this;
    }

    /**
     * Method to set the value of field start_date
     *
     * @param string $start_date
     * @return $this
     */
    public function setStartDate($start_date)
    {
        $this->start_date = $start_date;

        return $this;
    }

    /**
     * Method to set the value of field finish_date
     *
     * @param string $finish_date
     * @return $this
     */
    public function setFinishDate($finish_date)
    {
        $this->finish_date = $finish_date;

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
     * Returns the value of field id_events
     *
     * @return integer
     */
    public function getIdEvents()
    {
        return $this->id_events;
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
     * Returns the value of field id_users
     *
     * @return integer
     */
    public function getIdUsers()
    {
        return $this->id_users;
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
     * Returns the value of field address
     *
     * @return string
     */
    public function getAddress()
    {
        return $this->address;
    }

    /**
     * Returns the value of field description
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
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
     * Returns the value of field slogan
     *
     * @return string
     */
    public function getSlogan()
    {
        return $this->slogan;
    }

    /**
     * Returns the value of field start_date
     *
     * @return string
     */
    public function getStartDate()
    {
        return $this->start_date;
    }

    /**
     * Returns the value of field finish_date
     *
     * @return string
     */
    public function getFinishDate()
    {
        return $this->finish_date;
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
        $this->hasMany('id_events', 'EventGallery', 'id_events', ['alias' => 'EventGallery']);
        $this->hasMany('id_events', 'EventTopic', 'id_events', ['alias' => 'EventTopic']);
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

    /**
     * Returns table name mapped in the model.
     *
     * @return string
     */
    public function getSource()
    {
        return 'events';
    }

}
