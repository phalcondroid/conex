<?php

class ProductType extends \Phalcon\Mvc\Model
{

    /**
     *
     * @var integer
     */
    public $id_product_type;

    /**
     *
     * @var string
     */
    public $product_type;

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
        $this->hasMany('id_product_type', 'Products', 'id_product_type', array('alias' => 'Products'));
    }

    /**
     * Returns table name mapped in the model.
     *
     * @return string
     */
    public function getSource()
    {
        return 'product_type';
    }

    /**
     * Allows to query a set of records that match the specified conditions
     *
     * @param mixed $parameters
     * @return ProductType[]
     */
    public static function find($parameters = null)
    {
        return parent::find($parameters);
    }

    /**
     * Allows to query the first record that match the specified conditions
     *
     * @param mixed $parameters
     * @return ProductType
     */
    public static function findFirst($parameters = null)
    {
        return parent::findFirst($parameters);
    }

}
