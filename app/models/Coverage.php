<?php

class Coverage extends \Phalcon\Mvc\Model
{

    /**
     *
     * @var integer
     */
    public $id_coverage;

    /**
     *
     * @var string
     */
    public $coverage;

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
        $this->hasMany('id_coverage', 'Company', 'id_coverage', array('alias' => 'Company'));
    }

    /**
     * Returns table name mapped in the model.
     *
     * @return string
     */
    public function getSource()
    {
        return 'coverage';
    }

    /**
     * Allows to query a set of records that match the specified conditions
     *
     * @param mixed $parameters
     * @return Coverage[]
     */
    public static function find($parameters = null)
    {
        return parent::find($parameters);
    }

    /**
     * Allows to query the first record that match the specified conditions
     *
     * @param mixed $parameters
     * @return Coverage
     */
    public static function findFirst($parameters = null)
    {
        return parent::findFirst($parameters);
    }

}
