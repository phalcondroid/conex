<?php

class Advertisement extends \Phalcon\Mvc\Model
{

    /**
     *
     * @var integer
     * @Primary
     * @Identity
     * @Column(type="integer", length=11, nullable=false)
     */
    public $id_advertisement;

    /**
     *
     * @var integer
     * @Column(type="integer", length=11, nullable=false)
     */
    public $id_users;

    /**
     *
     * @var string
     * @Column(type="string", length=200, nullable=true)
     */
    public $logo;

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
     * @var string
     * @Column(type="string", nullable=true)
     */
    public $publish_date;

    /**
     *
     * @var string
     * @Column(type="string", length=45, nullable=true)
     */
    public $address;

    /**
     *
     * @var integer
     * @Column(type="integer", length=11, nullable=true)
     */
    public $views;

    /**
     *
     * @var string
     * @Column(type="string", length=45, nullable=true)
     */
    public $value;

    /**
     *
     * @var string
     * @Column(type="string", nullable=false)
     */
    public $created_at;

    /**
     * Method to set the value of field id_advertisement
     *
     * @param integer $id_advertisement
     * @return $this
     */
    public function setIdAdvertisement($id_advertisement)
    {
        $this->id_advertisement = $id_advertisement;

        return $this;
    }

    /**
     * Method to set the value of field id_advertisement_characteristics
     *
     * @param integer $id_advertisement_characteristics
     * @return $this
     */
    public function setIdAdvertisementCharacteristics($id_advertisement_characteristics)
    {
        $this->id_advertisement_characteristics = $id_advertisement_characteristics;

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
     * Method to set the value of field publish_date
     *
     * @param string $publish_date
     * @return $this
     */
    public function setPublishDate($publish_date)
    {
        $this->publish_date = $publish_date;

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
     * Method to set the value of field value
     *
     * @param string $value
     * @return $this
     */
    public function setValue($value)
    {
        $this->value = $value;

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
     * Returns the value of field id_advertisement
     *
     * @return integer
     */
    public function getIdAdvertisement()
    {
        return $this->id_advertisement;
    }

    /**
     * Returns the value of field id_advertisement_characteristics
     *
     * @return integer
     */
    public function getIdAdvertisementCharacteristics()
    {
        return $this->id_advertisement_characteristics;
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
     * Returns the value of field publish_date
     *
     * @return string
     */
    public function getPublishDate()
    {
        return $this->publish_date;
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
     * Returns the value of field value
     *
     * @return string
     */
    public function getValue()
    {
        return $this->value;
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
        $this->belongsTo('id_advertisement_characteristics', 'AdvertisementCharacteristics', 'id_advertisement_characteristics', ['alias' => 'AdvertisementCharacteristics']);
        $this->belongsTo('id_users', 'Users', 'id_users', ['alias' => 'Users']);
    }

    /**
     * Allows to query a set of records that match the specified conditions
     *
     * @param mixed $parameters
     * @return Advertisement[]
     */
    public static function find($parameters = null)
    {
        return parent::find($parameters);
    }

    /**
     * Allows to query the first record that match the specified conditions
     *
     * @param mixed $parameters
     * @return Advertisement
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
        return 'advertisement';
    }

}
