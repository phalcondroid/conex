<?php

class CompanyClient extends \Phalcon\Mvc\Model
{

    /**
     *
     * @var integer
     * @Primary
     * @Identity
     * @Column(type="integer", length=11, nullable=false)
     */
    public $id_company_client;

    /**
     *
     * @var integer
     * @Column(type="integer", length=11, nullable=true)
     */
    public $id_company_sector;

    /**
     *
     * @var string
     * @Column(type="string", length=45, nullable=true)
     */
    public $name;

    /**
     *
     * @var string
     * @Column(type="string", nullable=true)
     */
    public $description;

    /**
     *
     * @var integer
     * @Column(type="integer", length=10, nullable=true)
     */
    public $status;

    /**
     *
     * @var string
     * @Column(type="string", nullable=true)
     */
    public $created_at;

    /**
     * Initialize method for model.
     */
    public function initialize()
    {
        $this->hasMany('id_company_client', 'Company', 'id_company_client', ['alias' => 'Company']);
        $this->belongsTo('id_company_sector', 'CompanySector', 'id_company_sector', ['alias' => 'CompanySector']);
    }

    /**
     * Returns table name mapped in the model.
     *
     * @return string
     */
    public function getSource()
    {
        return 'company_client';
    }

    /**
     * Allows to query a set of records that match the specified conditions
     *
     * @param mixed $parameters
     * @return CompanyClient[]
     */
    public static function find($parameters = null)
    {
        return parent::find($parameters);
    }

    /**
     * Allows to query the first record that match the specified conditions
     *
     * @param mixed $parameters
     * @return CompanyClient
     */
    public static function findFirst($parameters = null)
    {
        return parent::findFirst($parameters);
    }

}
