<?php

class Service extends \Phalcon\Mvc\Model
{

    /**
     *
     * @var integer
     * @Primary
     * @Identity
     * @Column(type="integer", length=11, nullable=false)
     */
    public $id_service;

    /**
     *
     * @var integer
     * @Column(type="integer", length=11, nullable=false)
     */
    public $id_service_type;

    /**
     *
     * @var integer
     * @Column(type="integer", length=11, nullable=false)
     */
    public $id_users;

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
    public $description;

    /**
     *
     * @var string
     * @Column(type="string", nullable=true)
     */
    public $info_json;

    /**
     *
     * @var string
     * @Column(type="string", nullable=false)
     */
    public $created_at;

    /**
     * Method to set the value of field id_service
     *
     * @param integer $id_service
     * @return $this
     */
    public function setIdService($id_service)
    {
        $this->id_service = $id_service;

        return $this;
    }

    /**
     * Method to set the value of field id_service_type
     *
     * @param integer $id_service_type
     * @return $this
     */
    public function setIdServiceType($id_service_type)
    {
        $this->id_service_type = $id_service_type;

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
     * Method to set the value of field info_json
     *
     * @param string $info_json
     * @return $this
     */
    public function setInfoJson($info_json)
    {
        $this->info_json = $info_json;

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
     * Returns the value of field id_service
     *
     * @return integer
     */
    public function getIdService()
    {
        return $this->id_service;
    }

    /**
     * Returns the value of field id_service_type
     *
     * @return integer
     */
    public function getIdServiceType()
    {
        return $this->id_service_type;
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
     * Returns the value of field description
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Returns the value of field info_json
     *
     * @return string
     */
    public function getInfoJson()
    {
        return $this->info_json;
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
        $this->hasMany('id_service', 'ServiceGallery', 'id_service', ['alias' => 'ServiceGallery']);
        $this->belongsTo('id_service_type', 'ServiceType', 'id_service_type', ['alias' => 'ServiceType']);
        $this->belongsTo('id_users', 'Users', 'id_users', ['alias' => 'Users']);
    }

    /**
     * Allows to query a set of records that match the specified conditions
     *
     * @param mixed $parameters
     * @return Service[]
     */
    public static function find($parameters = null)
    {
        return parent::find($parameters);
    }

    /**
     * Allows to query the first record that match the specified conditions
     *
     * @param mixed $parameters
     * @return Service
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
        return 'service';
    }

}
