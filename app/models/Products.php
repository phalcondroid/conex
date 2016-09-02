<?php

class Products extends \Phalcon\Mvc\Model
{

    /**
     *
     * @var integer
     */
    public $id_products;

    /**
     *
     * @var integer
     */
    public $id_product_type;

    /**
     *
     * @var integer
     */
    public $id_users;

    /**
     *
     * @var integer
     */
    public $id_product_capacity;

    /**
     *
     * @var string
     */
    public $name;

    /**
     *
     * @var string
     */
    public $slogan;

    /**
     *
     * @var string
     */
    public $description;

    /**
     *
     * @var string
     */
    public $created_at;

    /**
     * Initialize method for model.
     */
    public function initialize()
    {
        $this->hasMany('id_products', 'ProductsGallery', 'products_id_products', array('alias' => 'ProductsGallery'));
        $this->belongsTo('id_product_capacity', 'ProductCapacity', 'id_product_capacity', array('alias' => 'ProductCapacity'));
        $this->belongsTo('id_product_type', 'ProductType', 'id_product_type', array('alias' => 'ProductType'));
        $this->belongsTo('id_users', 'Users', 'id_users', array('alias' => 'Users'));
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
