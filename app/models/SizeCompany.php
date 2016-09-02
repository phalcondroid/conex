<?php

class SizeCompany extends \Phalcon\Mvc\Model
{

    /**
     *
     * @var integer
     */
    public $id_size_company;

    /**
     *
     * @var string
     */
    public $size_company;

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
        $this->hasMany('id_size_company', 'Company', 'id_size_company', array('alias' => 'Company'));
    }

    /**
     * Returns table name mapped in the model.
     *
     * @return string
     */
    public function getSource()
    {
        return 'size_company';
    }

    /**
     * Allows to query a set of records that match the specified conditions
     *
     * @param mixed $parameters
     * @return SizeCompany[]
     */
    public static function find($parameters = null)
    {
        return parent::find($parameters);
    }

    /**
     * Allows to query the first record that match the specified conditions
     *
     * @param mixed $parameters
     * @return SizeCompany
     */
    public static function findFirst($parameters = null)
    {
        return parent::findFirst($parameters);
    }

}
