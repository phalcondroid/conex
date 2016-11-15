<?php

class Products extends \Phalcon\Mvc\Model
{

    /**
     *
     * @var integer
     * @Primary
     * @Identity
     * @Column(type="integer", length=11, nullable=false)
     */
    public $id_products;

    /**
     *
     * @var integer
     * @Column(type="integer", length=11, nullable=false)
     */
    public $id_product_type;

    /**
     *
     * @var integer
     * @Column(type="integer", length=11, nullable=false)
     */
    public $id_users;

    /**
     *
     * @var integer
     * @Column(type="integer", length=11, nullable=false)
     */
    public $id_product_capacity;

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
    public $slogan;

    /**
     *
     * @var string
     * @Column(type="string", length=45, nullable=true)
     */
    public $description;

    /**
     *
     * @var string
     * @Column(type="string", nullable=false)
     */
    public $created_at;

    /**
     * Method to set the value of field id_products
     *
     * @param integer $id_products
     * @return $this
     */
    public function setIdProducts($id_products)
    {
        $this->id_products = $id_products;

        return $this;
    }

    /**
     * Method to set the value of field id_product_type
     *
     * @param integer $id_product_type
     * @return $this
     */
    public function setIdProductType($id_product_type)
    {
        $this->id_product_type = $id_product_type;

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
     * Method to set the value of field id_product_capacity
     *
     * @param integer $id_product_capacity
     * @return $this
     */
    public function setIdProductCapacity($id_product_capacity)
    {
        $this->id_product_capacity = $id_product_capacity;

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
     * Returns the value of field id_products
     *
     * @return integer
     */
    public function getIdProducts()
    {
        return $this->id_products;
    }

    /**
     * Returns the value of field id_product_type
     *
     * @return integer
     */
    public function getIdProductType()
    {
        return $this->id_product_type;
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
     * Returns the value of field id_product_capacity
     *
     * @return integer
     */
    public function getIdProductCapacity()
    {
        return $this->id_product_capacity;
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
     * Returns the value of field slogan
     *
     * @return string
     */
    public function getSlogan()
    {
        return $this->slogan;
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
        $this->hasMany('id_products', 'ProductsGallery', 'products_id_products', ['alias' => 'ProductsGallery']);
        $this->belongsTo('id_product_capacity', 'ProductCapacity', 'id_product_capacity', ['alias' => 'ProductCapacity']);
        $this->belongsTo('id_product_type', 'ProductType', 'id_product_type', ['alias' => 'ProductType']);
        $this->belongsTo('id_users', 'Users', 'id_users', ['alias' => 'Users']);
    }

    /**
     * Allows to query a set of records that match the specified conditions
     *
     * @param mixed $parameters
     * @return Products[]
     */
    public static function find($parameters = null)
    {
        return parent::find($parameters);
    }

    /**
     * Allows to query the first record that match the specified conditions
     *
     * @param mixed $parameters
     * @return Products
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
        return 'products';
    }

}
