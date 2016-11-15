<?php

class CompanySector extends \Phalcon\Mvc\Model
{

    /**
     *
     * @var integer
     * @Primary
     * @Identity
     * @Column(type="integer", length=11, nullable=false)
     */
    public $id_company_sector;

    /**
     *
     * @var string
     * @Column(type="string", length=45, nullable=true)
     */
    public $company_sector;

    /**
     *
     * @var string
     * @Column(type="string", nullable=false)
     */
    public $created_at;

    /**
     * Method to set the value of field id_company_sector
     *
     * @param integer $id_company_sector
     * @return $this
     */
    public function setIdCompanySector($id_company_sector)
    {
        $this->id_company_sector = $id_company_sector;

        return $this;
    }

    /**
     * Method to set the value of field company_sector
     *
     * @param string $company_sector
     * @return $this
     */
    public function setCompanySector($company_sector)
    {
        $this->company_sector = $company_sector;

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
     * Returns the value of field id_company_sector
     *
     * @return integer
     */
    public function getIdCompanySector()
    {
        return $this->id_company_sector;
    }

    /**
     * Returns the value of field company_sector
     *
     * @return string
     */
    public function getCompanySector()
    {
        return $this->company_sector;
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
        $this->hasMany('id_company_sector', 'Company', 'id_company_sector', ['alias' => 'Company']);
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

    /**
     * Returns table name mapped in the model.
     *
     * @return string
     */
    public function getSource()
    {
        return 'company_sector';
    }

}
