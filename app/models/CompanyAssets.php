<?php

class CompanyAssets extends \Phalcon\Mvc\Model
{

    /**
     *
     * @var integer
     */
    public $id_company_assets;

    /**
     *
     * @var string
     */
    public $company_assets;

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
        $this->hasMany('id_company_assets', 'Company', 'id_company_assets', array('alias' => 'Company'));
    }

    /**
     * Returns table name mapped in the model.
     *
     * @return string
     */
    public function getSource()
    {
        return 'company_assets';
    }

    /**
     * Allows to query a set of records that match the specified conditions
     *
     * @param mixed $parameters
     * @return CompanyAssets[]
     */
    public static function find($parameters = null)
    {
        return parent::find($parameters);
    }

    /**
     * Allows to query the first record that match the specified conditions
     *
     * @param mixed $parameters
     * @return CompanyAssets
     */
    public static function findFirst($parameters = null)
    {
        return parent::findFirst($parameters);
    }

}
