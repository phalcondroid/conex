<?php

class LegalConstitution extends \Phalcon\Mvc\Model
{

    /**
     *
     * @var integer
     */
    public $id_legal_constitution;

    /**
     *
     * @var string
     */
    public $legal_constitution;

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
        $this->hasMany('id_legal_constitution', 'Company', 'id_legal_constitution', array('alias' => 'Company'));
    }

    /**
     * Returns table name mapped in the model.
     *
     * @return string
     */
    public function getSource()
    {
        return 'legal_constitution';
    }

    /**
     * Allows to query a set of records that match the specified conditions
     *
     * @param mixed $parameters
     * @return LegalConstitution[]
     */
    public static function find($parameters = null)
    {
        return parent::find($parameters);
    }

    /**
     * Allows to query the first record that match the specified conditions
     *
     * @param mixed $parameters
     * @return LegalConstitution
     */
    public static function findFirst($parameters = null)
    {
        return parent::findFirst($parameters);
    }

}
