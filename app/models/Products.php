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
     * Initialize method for model.
     */
    public function initialize()
    {
        $this->hasMany('id_products', 'ProductsGallery', 'products_id_products', ['alias' => 'ProductsGallery']);
        $this->belongsTo('id_product_type', 'ProductType', 'id_product_type', ['alias' => 'ProductType']);
        $this->belongsTo('id_users', 'Users', 'id_users', ['alias' => 'Users']);
        $this->belongsTo('id_product_capacity', 'ProductCapacity', 'id_product_capacity', ['alias' => 'ProductCapacity']);
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

}
