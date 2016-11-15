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
     * Method to set the value of field id_products_gallery
     *
     * @param integer $id_products_gallery
     * @return $this
     */
    public function setIdProductsGallery($id_products_gallery)
    {
        $this->id_products_gallery = $id_products_gallery;

        return $this;
    }

    /**
     * Method to set the value of field products_id_products
     *
     * @param integer $products_id_products
     * @return $this
     */
    public function setProductsIdProducts($products_id_products)
    {
        $this->products_id_products = $products_id_products;

        return $this;
    }

    /**
     * Method to set the value of field image
     *
     * @param string $image
     * @return $this
     */
    public function setImage($image)
    {
        $this->image = $image;

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
     * Returns the value of field id_products_gallery
     *
     * @return integer
     */
    public function getIdProductsGallery()
    {
        return $this->id_products_gallery;
    }

    /**
     * Returns the value of field products_id_products
     *
     * @return integer
     */
    public function getProductsIdProducts()
    {
        return $this->products_id_products;
    }

    /**
     * Returns the value of field image
     *
     * @return string
     */
    public function getImage()
    {
        return $this->image;
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
        $this->belongsTo('products_id_products', 'Products', 'id_products', ['alias' => 'Products']);
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

    /**
     * Returns table name mapped in the model.
     *
     * @return string
     */
    public function getSource()
    {
        return 'products_gallery';
    }

}
