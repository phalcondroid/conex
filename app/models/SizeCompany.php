<?php

class SizeCompany extends \Phalcon\Mvc\Model
{

    /**
     *
     * @var integer
     * @Primary
     * @Identity
     * @Column(type="integer", length=11, nullable=false)
     */
    public $id_size_company;

    /**
     *
     * @var string
     * @Column(type="string", length=45, nullable=true)
     */
    public $size_company;

    /**
     *
     * @var string
     * @Column(type="string", nullable=false)
     */
    public $created_at;

    /**
     * Method to set the value of field id_size_company
     *
     * @param integer $id_size_company
     * @return $this
     */
    public function setIdSizeCompany($id_size_company)
    {
        $this->id_size_company = $id_size_company;

        return $this;
    }

    /**
     * Method to set the value of field size_company
     *
     * @param string $size_company
     * @return $this
     */
    public function setSizeCompany($size_company)
    {
        $this->size_company = $size_company;

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
     * Returns the value of field id_size_company
     *
     * @return integer
     */
    public function getIdSizeCompany()
    {
        return $this->id_size_company;
    }

    /**
     * Returns the value of field size_company
     *
     * @return string
     */
    public function getSizeCompany()
    {
        return $this->size_company;
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
        $this->hasMany('id_size_company', 'Company', 'id_size_company', ['alias' => 'Company']);
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

    /**
     * Returns table name mapped in the model.
     *
     * @return string
     */
    public function getSource()
    {
        return 'size_company';
    }

}
