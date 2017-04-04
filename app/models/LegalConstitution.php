<?php

use \Phalcon\Mvc\Model\Relation;

class LegalConstitution extends \Phalcon\Mvc\Model
{

    /**
     *
     * @var integer
     * @Primary
     * @Identity
     * @Column(type="integer", length=11, nullable=false)
     */
    public $id_legal_constitution;

    /**
     *
     * @var string
     * @Column(type="string", length=45, nullable=true)
     */
    public $legal_constitution;

    /**
     *
     * @var integer
     * @Column(type="integer", length=4, nullable=true)
     */
    public $status;

    /**
     *
     * @var string
     * @Column(type="string", nullable=false)
     */
    public $created_at;

    /**
     * Method to set the value of field id_legal_constitution
     *
     * @param integer $id_legal_constitution
     * @return $this
     */
    public function setIdLegalConstitution($id_legal_constitution)
    {
        $this->id_legal_constitution = $id_legal_constitution;

        return $this;
    }

    /**
     * Method to set the value of field legal_constitution
     *
     * @param string $legal_constitution
     * @return $this
     */
    public function setLegalConstitution($legal_constitution)
    {
        $this->legal_constitution = $legal_constitution;

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
     * Returns the value of field id_legal_constitution
     *
     * @return integer
     */
    public function getIdLegalConstitution()
    {
        return $this->id_legal_constitution;
    }

    /**
     * Returns the value of field legal_constitution
     *
     * @return string
     */
    public function getLegalConstitution()
    {
        return $this->legal_constitution;
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
        $this->hasMany('id_legal_constitution', 'Company', 'id_legal_constitution', [
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

    /**
     * Returns table name mapped in the model.
     *
     * @return string
     */
    public function getSource()
    {
        return 'legal_constitution';
    }

}
