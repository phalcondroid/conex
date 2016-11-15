<?php

class ServiceType extends \Phalcon\Mvc\Model
{

    /**
     *
     * @var integer
     * @Primary
     * @Identity
     * @Column(type="integer", length=11, nullable=false)
     */
    public $id_service_type;

    /**
     *
     * @var string
     * @Column(type="string", length=45, nullable=true)
     */
    public $service_type;

    /**
     *
     * @var string
     * @Column(type="string", nullable=false)
     */
    public $created_at;

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
     * Method to set the value of field service_type
     *
     * @param string $service_type
     * @return $this
     */
    public function setServiceType($service_type)
    {
        $this->service_type = $service_type;

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
     * Returns the value of field id_service_type
     *
     * @return integer
     */
    public function getIdServiceType()
    {
        return $this->id_service_type;
    }

    /**
     * Returns the value of field service_type
     *
     * @return string
     */
    public function getServiceType()
    {
        return $this->service_type;
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
        $this->hasMany('id_service_type', 'Service', 'id_service_type', ['alias' => 'Service']);
    }

    /**
     * Allows to query a set of records that match the specified conditions
     *
     * @param mixed $parameters
     * @return ServiceType[]
     */
    public static function find($parameters = null)
    {
        return parent::find($parameters);
    }

    /**
     * Allows to query the first record that match the specified conditions
     *
     * @param mixed $parameters
     * @return ServiceType
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
        return 'service_type';
    }

}
