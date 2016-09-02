<?php

class CompanySector extends \Phalcon\Mvc\Model
{

    /**
     *
     * @var integer
     */
    public $id_company_sector;

    /**
     *
     * @var string
     */
    public $company_sector;

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
        $this->hasMany('id_company_sector', 'Company', 'id_company_sector', array('alias' => 'Company'));
    }

    /**
     * Returns table name mapped in the model.
     *
     * @return string
     */
    public function getSource()
    {
        return 'company_sector';
    }

    /**
     * Allows to query a set of records that match the specified conditions
     *
     * @param mixed $parameters
     * @return CompanySector[]
     */
    public static function find($parameters = null)
    {
        return parent::find($parameters);
    }

    /**
     * Allows to query the first record that match the specified conditions
     *
     * @param mixed $parameters
     * @return CompanySector
     */
    public static function findFirst($parameters = null)
    {
        return parent::findFirst($parameters);
    }

}
