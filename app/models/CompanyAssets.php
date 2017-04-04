<?php

use \Phalcon\Mvc\Model\Relation;

class CompanyAssets extends \Phalcon\Mvc\Model
{

    /**
     *
     * @var integer
     * @Primary
     * @Identity
     * @Column(type="integer", length=11, nullable=false)
     */
    public $id_company_assets;

    /**
     *
     * @var string
     * @Column(type="string", length=45, nullable=true)
     */
    public $company_assets;

    /**
     *
     * @var string
     * @Column(type="string", nullable=false)
     */
    public $created_at;

    /**
     * Method to set the value of field id_company_assets
     *
     * @param integer $id_company_assets
     * @return $this
     */
    public function setIdCompanyAssets($id_company_assets)
    {
        $this->id_company_assets = $id_company_assets;

        return $this;
    }

    /**
     * Method to set the value of field company_assets
     *
     * @param string $company_assets
     * @return $this
     */
    public function setCompanyAssets($company_assets)
    {
        $this->company_assets = $company_assets;

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
     * Returns the value of field id_company_assets
     *
     * @return integer
     */
    public function getIdCompanyAssets()
    {
        return $this->id_company_assets;
    }

    /**
     * Returns the value of field company_assets
     *
     * @return string
     */
    public function getCompanyAssets()
    {
        return $this->company_assets;
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
        $this->hasMany('id_company_assets', 'Company', 'id_company_assets', [
            'alias' => 'Company',
            "foreignKey" => array(
                "action" => Relation::ACTION_CASCADE,
            )
        ]);
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

    /**
     * Returns table name mapped in the model.
     *
     * @return string
     */
    public function getSource()
    {
        return 'company_assets';
    }

}
