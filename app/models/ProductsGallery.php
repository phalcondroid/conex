<?php

class ProductsGallery extends \Phalcon\Mvc\Model
{

    /**
     *
     * @var integer
     * @Primary
     * @Identity
     * @Column(type="integer", length=11, nullable=false)
     */
    public $id_products_gallery;

    /**
     *
     * @var integer
     * @Column(type="integer", length=11, nullable=false)
     */
    public $products_id_products;

    /**
     *
     * @var string
     * @Column(type="string", nullable=true)
     */
    public $image;

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
        $this->belongsTo('products_id_products', 'Products', 'id_products', ['alias' => 'Products']);
    }

    /**
     * Returns table name mapped in the model.
     *
     * @return string
     */
    public function getSource()
    {
        return 'products_gallery';
    }

    /**
     * Allows to query a set of records that match the specified conditions
     *
     * @param mixed $parameters
     * @return ProductsGallery[]
     */
    public static function find($parameters = null)
    {
        return parent::find($parameters);
    }

    /**
     * Allows to query the first record that match the specified conditions
     *
     * @param mixed $parameters
     * @return ProductsGallery
     */
    public static function findFirst($parameters = null)
    {
        return parent::findFirst($parameters);
    }

}
