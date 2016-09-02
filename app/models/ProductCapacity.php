<?php

class ProductCapacity extends \Phalcon\Mvc\Model
{

    /**
     *
     * @var integer
     */
    public $id_product_capacity;

    /**
     *
     * @var string
     */
    public $product_capacity;

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
        $this->hasMany('id_product_capacity', 'Products', 'id_product_capacity', array('alias' => 'Products'));
    }

    /**
     * Returns table name mapped in the model.
     *
     * @return string
     */
    public function getSource()
    {
        return 'product_capacity';
    }

    /**
     * Allows to query a set of records that match the specified conditions
     *
     * @param mixed $parameters
     * @return ProductCapacity[]
     */
    public static function find($parameters = null)
    {
        return parent::find($parameters);
    }

    /**
     * Allows to query the first record that match the specified conditions
     *
     * @param mixed $parameters
     * @return ProductCapacity
     */
    public static function findFirst($parameters = null)
    {
        return parent::findFirst($parameters);
    }

}
