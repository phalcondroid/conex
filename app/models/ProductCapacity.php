<?php

use \Phalcon\Mvc\Model\Relation;

class ProductCapacity extends \Phalcon\Mvc\Model
{

    /**
     *
     * @var integer
     * @Primary
     * @Identity
     * @Column(type="integer", length=11, nullable=false)
     */
    public $id_product_capacity;

    /**
     *
     * @var string
     * @Column(type="string", length=45, nullable=true)
     */
    public $product_capacity;

    /**
     *
     * @var string
     * @Column(type="string", nullable=false)
     */
    public $created_at;

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
     * Method to set the value of field product_capacity
     *
     * @param string $product_capacity
     * @return $this
     */
    public function setProductCapacity($product_capacity)
    {
        $this->product_capacity = $product_capacity;

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
     * Returns the value of field id_product_capacity
     *
     * @return integer
     */
    public function getIdProductCapacity()
    {
        return $this->id_product_capacity;
    }

    /**
     * Returns the value of field product_capacity
     *
     * @return string
     */
    public function getProductCapacity()
    {
        return $this->product_capacity;
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
     *
     */
    public function beforeDelete() {
        $behavior = new \Phalcon\Mvc\Model\Behavior\SoftDelete(array(
            'field' => 'status',
            'value' => '0'
        ));
        $this->addBehavior($behavior);
    }

    /**
     * Initialize method for model.
     */
    public function initialize()
    {
        $this->hasMany('id_product_capacity', 'Products', 'id_product_capacity', [
            'alias' => 'Products',
            "foreignKey" => array(
                "action" => Relation::ACTION_CASCADE,
            )
        ]);
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

    /**
     * Returns table name mapped in the model.
     *
     * @return string
     */
    public function getSource()
    {
        return 'product_capacity';
    }

}
