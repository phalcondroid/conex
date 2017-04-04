<?php

use \Phalcon\Mvc\Model\Relation;

class CiiuType extends \Phalcon\Mvc\Model
{

    /**
     *
     * @var integer
     * @Primary
     * @Identity
     * @Column(type="integer", length=11, nullable=false)
     */
    public $id_ciiu;

    /**
     *
     * @var string
     * @Column(type="string", length=45, nullable=true)
     */
    public $ciiu_type;

    /**
     *
     * @var string
     * @Column(type="string", length=45, nullable=true)
     */
    public $section;

    /**
     *
     * @var integer
     * @Column(type="integer", length=2, nullable=false)
     */
    public $status;

    /**
     *
     * @var string
     * @Column(type="string", nullable=false)
     */
    public $created_at;

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
        $this->hasMany('id_ciiu', 'Ciiu', 'id_ciiu_type', [
            'alias' => 'Ciiu',
            "foreignKey" => array(
                "action" => Relation::ACTION_CASCADE,
            )
        ]);
    }

    /**
     * Returns table name mapped in the model.
     *
     * @return string
     */
    public function getSource()
    {
        return 'ciiu_type';
    }

    /**
     * Allows to query a set of records that match the specified conditions
     *
     * @param mixed $parameters
     * @return CiiuType[]
     */
    public static function find($parameters = null)
    {
        return parent::find($parameters);
    }

    /**
     * Allows to query the first record that match the specified conditions
     *
     * @param mixed $parameters
     * @return CiiuType
     */
    public static function findFirst($parameters = null)
    {
        return parent::findFirst($parameters);
    }

}
